<?php

require_once 'builder/om/PHP5PeerBuilder.php';
require_once 'OopsTable.php';

class OopsPeerBuilder extends PHP5PeerBuilder {

	private $table;
	
	public function getTable() {
		if (NULL == $this->table) {
			$this->table = new OopsTable(parent :: getTable());
		}
		return $this->table;
	}
	
	protected function addConstantsAndAttributes(&$script) {
		
		parent :: addConstantsAndAttributes($script);
		
		$tableName = $this->getTable()->getName();
		
		$script = str_replace(
			"const TABLE_NAME = '$tableName';", 
			"const TABLE_NAME = _DB_PREFIX_ . '$tableName';", $script);
				
	}
	
	protected function addColumnNameConstants(&$script) {
		
		foreach ($this->getTable()->getColumns() as $col) {
			$script .= "
	/** the column name for the " . strtoupper($col->getName()) ." field */
	const "
			. $this->getColumnName($col) 
			." = _DB_PREFIX_ . '" 
			. $this->getTable()->getName() 
			. ".".strtoupper($col->getName())
			."';
";
		} // foreach
	}
	
	
	
}