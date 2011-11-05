<?php

require_once 'builder/om/PHP5TableMapBuilder.php';

class OopsTableMapBuilder extends PHP5TableMapBuilder {
	
	/**
	 * Adds the addInitialize() method to the  table map class.
	 * @param      string &$script The script will be modified in this method.
	 */
	protected function addInitialize(&$script) {
		
		parent :: addInitialize($script);
		
		$table = $this->getTable();
		
		$script = str_replace(
			"\$this->setName('".$table->getName()."');", 
			"\$this->setName(_DB_PREFIX_ . '".$table->getName()."');", $script);
		
	}
	
}