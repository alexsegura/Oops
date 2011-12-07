<?php

class Oops_Application_Module_Bootstrap extends Zend_Application_Module_Bootstrap {
	
	public function __construct($application) {
		
    	parent :: __construct($application);
    	
    	$class = get_class($this);
    	
		if (false !== strpos(strtolower($class), 'frontoffice')) {
        	$moduleName = 'front-office';
        } else if (false !== strpos(strtolower($class), 'backoffice')) {
            $moduleName = 'back-office';
        }
    	
    	$this->bootstrap('FrontController');
    	$front  = $this->getResource('FrontController');
    	
    	// We make sure the resourceLoader used is
    	// relative to the module directory
    	$this->setResourceLoader(new Zend_Application_Module_Autoloader(array(
        	'namespace' => $this->getAppNamespace(),
        	'basePath'  => $front->getModuleDirectory($moduleName)
        )));
    	
    }
    
	public function getModuleName() {
		
		$ns = $this->getApplication()->getOption('appnamespace');
		
        if (empty($this->_moduleName)) {
        	
            $class = get_class($this);
            
            if (false !== strpos(strtolower($class), 'frontoffice')) {
            	$this->_moduleName = $ns . '_FrontOffice';
            } else if (false !== strpos(strtolower($class), 'backoffice')) {
            	$this->_moduleName = $ns . '_BackOffice';
            }
            
        }
        
        return $this->_moduleName;
        
    }
	
}