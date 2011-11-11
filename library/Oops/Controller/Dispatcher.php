<?php

class Oops_Controller_Dispatcher extends Zend_Controller_Dispatcher_Standard {
	
	/*
	public function formatControllerName($unformatted)
    {
        // var_dump('formatControllerName : ' . $unformatted);
        return parent :: formatControllerName($unformatted);
    }
	
	public function getControllerDirectory($name = null)
    {
    	// var_dump('getControllerDirectory : ' . $name);
        return parent :: getControllerDirectory($name);
    }
    */
	
    /**
     * Prepends namespace to module controller name;
     * @param unknown_type $moduleName
     * @param unknown_type $className
     * @return string
     */
    public function formatClassName($moduleName, $className) {
    	
    	// var_dump('formatClassName : ' . $moduleName .  ' ' . $className .  ' = ' . parent :: formatClassName($moduleName, $className));
    	
    	$bootstrap = $this->getParam('bootstrap');
    	$namespace = $bootstrap->getOption('appnamespace');
    	
    	$className = parent :: formatClassName($moduleName, $className);
    	
        return "${namespace}_${className}";
    }
    
    /*
    public function classToFilename($class) {
    	var_dump('classToFilename : ' . $class . ' => ' . parent :: classToFilename($class));
        return parent :: classToFilename($class);
    }
    */
    
}