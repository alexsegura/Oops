<?php

class Oops_Application_Module_Bootstrap extends Zend_Application_Module_Bootstrap {
	
	public function __construct($application) {
		
    	parent :: __construct($application);
    	
    	$class = get_class($this);
    	
    	// echo '<pre>' . print_r($class, 1) . '</pre>';
    	
		if (false !== strpos(strtolower($class), 'hooks')) {
        	$moduleName = 'hooks';
        } else if (false !== strpos(strtolower($class), 'preferences')) {
            $moduleName = 'preferences';
        } else if (false !== strpos(strtolower($class), 'tab')) {
        	// var_dump($class);
        	// echo '<pre>' . print_r($this, 1) . '</pre>';
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
    	
	    // var_dump($this->getAppNamespace() . ' '. $moduleName);
	    
    	$this->setResourceLoader(new Zend_Application_Module_Autoloader(array(
        	'namespace' => $this->getAppNamespace(),
        	'basePath'  => $front->getModuleDirectory($moduleName)
        )));
    	
    	return $this;
    	
    }
    
	public function getModuleName() {
		
		$ns = $this->getApplication()->getOption('appnamespace');
		
        // if (empty($this->_moduleName)) {
        	
            $class = get_class($this);
            
            if (false !== strpos(strtolower($class), 'hooks')) {
            	$this->_moduleName = $ns . '_Hooks';
            } else if (false !== strpos(strtolower($class), 'preferences')) {
            	$this->_moduleName = $ns . '_Preferences';
            } else if (false !== strpos(strtolower($class), 'tab')) {
            	$name = strtolower($this->_moduleDirectory);
            	$name = str_replace(strtolower($ns) . '-', '', $name);
		        $name = str_replace(array('-', '.'), ' ', $name);
		        $name = ucwords($name);
		        $this->_moduleName = $ns . '_' . str_replace(' ', '', $name);
            }
            
        // }
        
        return $this->_moduleName;
        
    }
	
}