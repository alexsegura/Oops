<?php

class Oops_Application_Module_Bootstrap extends Zend_Application_Module_Bootstrap {
	
	public function __construct($application) {
		
    	parent :: __construct($application);
    	
    	$class = get_class($this);
    	
    	// echo '<pre>' . print_r($class, 1) . '</pre>';
    	
		if (false !== strpos(strtolower($class), 'frontoffice')) {
        	$moduleName = 'front-office';
        } else if (false !== strpos(strtolower($class), 'preferences')) {
            $moduleName = 'preferences';
        } else if (false !== strpos(strtolower($class), 'tab')) {
        	// echo '<pre>' . print_r($this, 1) . '</pre>';exit;
        }
        
        if (isset($moduleName)) {
        
	    	$this->bootstrap('FrontController');
	    	$front = $this->getResource('FrontController');
	    	
	    	// We make sure the resourceLoader used is
	    	// relative to the module directory
	    	$this->setResourceLoader(new Zend_Application_Module_Autoloader(array(
	        	'namespace' => $this->getAppNamespace(),
	        	'basePath'  => $front->getModuleDirectory($moduleName)
	        )));
	        
        }
    	
    }
    
    private $_moduleDirectory;
    
    public function setModuleDirectory($moduleName) {
    	
    	$this->_moduleDirectory = $moduleName;
    	
    	$this->bootstrap('FrontController');
	    $front = $this->getResource('FrontController');
    	
    	$this->setResourceLoader(new Zend_Application_Module_Autoloader(array(
        	'namespace' => $this->getAppNamespace(),
        	'basePath'  => $front->getModuleDirectory($moduleName)
        )));
    	
    	return $this;
    	
    }
    
	public function getModuleName() {
		
		$ns = $this->getApplication()->getOption('appnamespace');
		
		// var_dump('getModuleName : ' . $this->_moduleName);
		
		
        // if (empty($this->_moduleName)) {
        	
            $class = get_class($this);
            
            if (false !== strpos(strtolower($class), 'frontoffice')) {
            	$this->_moduleName = $ns . '_FrontOffice';
            } else if (false !== strpos(strtolower($class), 'preferences')) {
            	$this->_moduleName = $ns . '_Preferences';
            } else if (false !== strpos(strtolower($class), 'tab')) {
            	$name = strtolower($this->_moduleDirectory);
		        $name = str_replace(array('-', '.'), ' ', $name);
		        $name = ucwords($name);
		        $this->_moduleName = $ns . '_' . str_replace(' ', '', $name);
            }
            
        // }
        
            // var_dump($this->_moduleName);
        
        return $this->_moduleName;
        
    }
	
}