<?php

/**
 * Custom Dispatcher class that prepends module namespace to controller name. 
 * @author Alexandre Segura <mex.zktk@gmail.com>
 */
class Oops_Controller_Dispatcher extends Zend_Controller_Dispatcher_Standard {
	
    /**
     * Prepends namespace to module controller name. 
     * @param unknown_type $moduleName
     * @param unknown_type $className
     * @return string
     */
    public function formatClassName($moduleName, $className) {
    	
    	$bootstrap = $this->getParam('bootstrap');
    	$namespace = $bootstrap->getOption('appnamespace');
    	
    	$className = parent :: formatClassName($moduleName, $className);
    	
        return "${namespace}_${className}";
    }
    
}