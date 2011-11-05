<?php

require_once 'builder/om/QueryBuilder.php';

class OopsQueryBuilder extends QueryBuilder {
	
	protected function addFindPkSimple(&$script) {
		
		parent :: addFindPkSimple($script);
		
		$table = $this->getTable();
		$platform = $this->getPlatform();
		
		$tableName = $table->getName();
		
		
		$script = str_replace(
			$table->getName(), 
			"' . _DB_PREFIX_ . '$tableName", $script);
		
	}
	
}