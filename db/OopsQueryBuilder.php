<?php

require_once 'builder/om/QueryBuilder.php';

class OopsQueryBuilder extends QueryBuilder {
	
	/*
	public function getColumnConstant($col, $classname = null) {
		$columnConstant = parent :: getColumnConstant($col, $classname);
		return str_replace("::", "::\$", $columnConstant);
	}
	*/
	
	protected function addFindPkSimple(&$script) {
		
		parent :: addFindPkSimple($script);
		
		$table = $this->getTable();
		$platform = $this->getPlatform();
		
		$tableName = $table->getName();
		
		$script = str_replace(
			"FROM `$tableName`", 
			"FROM `' . _DB_PREFIX_ . '$tableName`", $script);
		
	} 
	
	public function build() {
		
		$script = parent :: build();
		
		/*
		$script = str_replace(
			"::LEFT_COL", 
			"::LEFT_COL()", $script);
		$script = str_replace(
			"::RIGHT_COL", 
			"::RIGHT_COL()", $script);
		$script = str_replace(
			"::LEVEL_COL", 
			"::LEVEL_COL()", $script);
		*/
		
		return $script;
		
	}
	
}