<?php 

class Oops_Application_Resource_Hooks extends Zend_Application_Resource_ResourceAbstract {
    
    public function init() {
    	
    	$options = $this->getOptions();
    	
    	$hooks = array();
    	
    	if (isset($options) && is_array($options)) {
    		foreach ($options as $hook) {
    			$hooks[] = $hook;
    		}
    	}
    	
    	return $hooks;
    	
    }
    
}