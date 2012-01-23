<?php

require_once 'builder/om/PHP5ObjectBuilder.php';

class OopsObjectBuilder extends PHP5ObjectBuilder {
	
	/**
	 * Boosts ActiveRecord::doInsert() by doing more calculations at buildtime.
	 */
	protected function addDoInsertBodyRaw() {
		
		$script = parent :: addDoInsertBodyRaw();
		
		$table = $this->getTable();
		$platform = $this->getPlatform();
		
		$tableName = $table->getName();
		
		$script = str_replace(
			"INSERT INTO `$tableName`", 
			"INSERT INTO `' .  _DB_PREFIX_ . '$tableName`", $script);
		
		return $script;
		
	}
	
	/**
	 * @param		string &$script The script will be modified in this method.
	 * @param		ForeignKey $refFK
	 * @param		ForeignKey $crossFK
	 */
	protected function addCrossFKDoAdd(&$script, ForeignKey $refFK, ForeignKey $crossFK)
	{
		$relatedObjectClassName = $this->getFKPhpNameAffix($crossFK, $plural = false);

		// lcfirst() doesn't exist in PHP < 5.3
		$lowerRelatedObjectClassName = $relatedObjectClassName;
		$lowerRelatedObjectClassName[0] = strtolower($lowerRelatedObjectClassName[0]);

		$joinedTableObjectBuilder = $this->getNewObjectBuilder($refFK->getTable());
		$className = $joinedTableObjectBuilder->getObjectClassname();

		$tblFK = $refFK->getTable();
		$foreignObjectName = '$' . $tblFK->getStudlyPhpName();
		
		// Oop_Db_ was prepended to method name
		$unprefixedClassName = $joinedTableObjectBuilder->getStubObjectBuilder()->getUnprefixedClassname();

		$script .= "
	/**
	 * @param	{$relatedObjectClassName} \${$lowerRelatedObjectClassName} The $lowerRelatedObjectClassName object to add.
	 */
	protected function doAdd{$relatedObjectClassName}(\${$lowerRelatedObjectClassName})
	{
		{$foreignObjectName} = new {$className}();
		{$foreignObjectName}->set{$relatedObjectClassName}(\${$lowerRelatedObjectClassName});
		\$this->add{$unprefixedClassName}({$foreignObjectName});
	}
";
	}
	
	/*
	public function getColumnConstant($col, $classname = null) {
		$columnConstant = parent :: getColumnConstant($col, $classname);
		return str_replace("::", "::\$", $columnConstant);
	}
	*/
	
}