<?php

class Oops_Application_Resource_Modules extends Zend_Application_Resource_Modules {
	
	/**
	 * Called by parent :: init() to instanciate classes listed in $bootstraps. 
	 * Adds a default module bootstrap if not defined. 
	 * @param string[] $bootstraps
	 */
    protected function bootstrapBootstraps($bootstraps) {
    	
    	$bootstrap = $this->getBootstrap();
        $bootstrap->bootstrap('FrontController');
        $front = $bootstrap->getResource('FrontController');
        
    	$modules = $front->getControllerDirectory();
        foreach ($modules as $module => $moduleDirectory) {
        	
        	// Add the default module bootstraps if not found
    		if (!isset($bootstraps[$module]) && $module != 'default') {
    			
    			// TODO Make sure the string STARTS WITH tab- !
    			if (false !== strpos($module, 'tab-')) {
    				$className = 'Tab';
    			} else {
	    			$pieces = explode('-', $module);
	    			foreach ($pieces as $key => $piece) {
	    				$pieces[$key] = ucfirst($piece);
	    			}
	    			$className = implode('', $pieces);
    			}
    			
    			$bootstraps[$module] = 'Oops_Application_Module_Bootstrap_' . $className;
    			
    		}
        	
        }
        
    	$result = parent :: bootstrapBootstraps($bootstraps);
    	
    	foreach ($result as $module => $bootstrapObj) {
            $moduleName = $this->_formatModuleName($module);
            $bootstrapObj->setModuleDirectory($module);
            $result[$module] = $bootstrapObj;
        }
        
        return $result;
    	
    }
    
    /**
     * Called by parent :: init() to determine module name. 
     * Preprends namespace to module name.  
     * @param string $name
     * @return string
     */
	protected function _formatModuleName($name) {
		
    	$bootstrap 	= $this->getBootstrap();
    	$ns 		= $bootstrap->getOption('appnamespace');
    	
        $moduleName = parent :: _formatModuleName($name);
        
        return "${ns}_${moduleName}";
        
    }
}