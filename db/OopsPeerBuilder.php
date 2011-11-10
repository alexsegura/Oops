<?php

require_once 'builder/om/PHP5PeerBuilder.php';
require_once 'OopsTable.php';

class OopsPeerBuilder extends PHP5PeerBuilder {
	
	/*
	private $table;
	
	public function getTable() {
		if (NULL == $this->table) {
			$this->table = new OopsTable(parent :: getTable());
		}
		return $this->table;
	}
	*/
	
	private function getTableConstantName() {
		return strtoupper($this->getObjectClassname(). '_TABLE_NAME');
	}
	
	private function getPhpConstantName($column) {
		return strtoupper($this->getObjectClassname(). '_' . $this->getColumnName($column));
	}
	
	protected function addClassOpen(&$script) {
		
		$tableName = $this->getTable()->getName();
		
		foreach ($this->getTable()->getColumns() as $col) {
			
			$colName 	= $this->getColumnName($col);
			$constName 	= $this->getPhpConstantName($col);
			
			$script .= "
define('$constName', _DB_PREFIX_ . '${tableName}.${colName}');";
			
		}
		
		$tableConstName = $this->getTableConstantName();
		
		$script .= "
define('$tableConstName', _DB_PREFIX_ . '$tableName');
";
		
		
		parent :: addClassOpen($script);
		
	}
	
	protected function addConstantsAndAttributes(&$script) {
		
		parent :: addConstantsAndAttributes($script);
		
		$tableName 		= $this->getTable()->getName();
		$tableConstName = $this->getTableConstantName();
		
		$script = str_replace(
			"const TABLE_NAME = '$tableName';",
			"const TABLE_NAME = $tableConstName;", $script);
		
	}
	
	protected function addColumnNameConstants(&$script) {
		
		foreach ($this->getTable()->getColumns() as $col) {
			$constName = $this->getPhpConstantName($col);
			$script .= "
	/** the column name for the " . strtoupper($col->getName()) ." field */
	const ".$this->getColumnName($col) ." = $constName;
";
		}
		
	}
	
	public function build() {
		
		$script = parent :: build();
		
		$tableName = $this->getTable()->getName();
		
		foreach ($this->getTable()->getBehaviors() as $behavior) {
			if ($behavior instanceof NestedSetBehavior) {
				foreach (array('left', 'right', 'level') as $colName) {
					$columnConstant = strtoupper($behavior->getColumnForParameter("${colName}_column")->getName());
					$defineName 	= strtoupper($this->getObjectClassname() . '_' . $columnConstant);
					$constName 		= strtoupper("${colName}_COL");
					$script = str_replace(
						"const $constName = '" . $tableName . '.' . $columnConstant . "';", 
						"const $constName = $defineName;", $script);
				}
				
			}
		}
		
		return $script;
		
	}
	
}