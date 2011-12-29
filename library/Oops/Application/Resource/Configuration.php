<?php 

class Oops_Application_Resource_Configuration extends Zend_Application_Resource_ResourceAbstract {
    
    public function init() {
    	
    	$options = $this->getOptions();
    	
    	if (isset($options) && is_array($options)) {
    		return new Zend_Config($options, true);
    	}
    	
    	return new Zend_Config(array(), true);
    	
    }
    
}