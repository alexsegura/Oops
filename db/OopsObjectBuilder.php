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
			$table->getName(), 
			"' . _DB_PREFIX_ . '$tableName", $script);
		
		return $script;
		
	}
	
}