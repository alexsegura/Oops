<?php

/**
 * Custom Dispatcher class that prepends module namespace to controller name. 
 * Allows running several Zend_Application instances with the same module names
 * and a unique Zend_Controller_Front. 
 * @author Alexandre Segura <mex.zktk@gmail.com>
 */
class Oops_Controller_Dispatcher extends Zend_Controller_Dispatcher_Standard {
	
	private function getNamespace() {
		return $this->getParam('bootstrap')->getOption('appnamespace');
	}
	
	private function stripNamespace($moduleName) {
		$namespace = $this->getNamespace();
		return str_replace(strtolower($namespace) . '-', '', $moduleName);
	}
	
    /**
     * Prepends namespace to module controller name. 
     * @param string $moduleName
     * @param string $className
     * @return string
     */
    public function formatClassName($moduleName, $className) {
    	
    	$namespace 	= $this->getNamespace();
    	$moduleName = $this->stripNamespace($moduleName);
    	$className 	= parent :: formatClassName($moduleName, $className);
    	
        return "${namespace}_${className}";
    }
    
    /**
     * 
     * @param $moduleName
     */
    public function formatModuleName($moduleName) {
    	$moduleName = $this->stripNamespace($moduleName);
    	return parent :: formatModuleName($moduleName);
	}
    
    /**
	 * Prefixes the Zend_Mvc module name with the PrestaShop module name. 
	 * Allows running several Zend_Application instances with the same module names
	 * and a unique Zend_Controller_Front. 
     */
    public function addControllerDirectory($path, $module = null) {
    	
    	// FIXME This is ugly !
    	if ($module != 'default') {
    		$p = str_replace(_PS_MODULE_DIR_, '', $path);
    		$pieces = explode('/', $p);
    		list($ns,) = $pieces;
    		return parent :: addControllerDirectory($path, "${ns}-${module}");
    	}
    	return parent :: addControllerDirectory($path);
    }
    
	
    
}