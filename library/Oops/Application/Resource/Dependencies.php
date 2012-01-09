<?php 

class Oops_Application_Resource_Dependencies extends Zend_Application_Resource_ResourceAbstract {
    
    public function init() {
    	
    	$options = $this->getOptions();
    	
    	$dependencies = array();
    	
    	if (is_array($options)) {
    		foreach ($options as $moduleName) {
    			$dependencies[] = $moduleName;
    		}
    	}
    	
    	return $dependencies;
    	
    }
    
}