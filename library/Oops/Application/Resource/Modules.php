<?php

class Oops_Application_Resource_Modules extends Zend_Application_Resource_Modules {
	
	private static $namespaces = array();
	
	/**
	 * Called by parent :: init() to instanciate classes listed in $bootstraps. 
	 * Adds a default module bootstrap if not defined. 
	 * @param string[] $bootstraps
	 */
    protected function bootstrapBootstraps($bootstraps) {
    	
    	$bootstrap 	= $this->getBootstrap();
    	
    	$namespace 	= $bootstrap->getOption('appnamespace');
    	
        $bootstrap->bootstrap('FrontController');
        $front = $bootstrap->getResource('FrontController');
        
    	$modules = $front->getControllerDirectory();
    	
    	self :: $namespaces[strtolower($namespace)] = $namespace;
    	
        foreach ($modules as $module => $moduleDirectory) {
        	
        	// Check the current ps module is being bootstapped
        	// or the namespace won't match 
        	$isCurrentModule = (false !== strpos(strtolower($module), strtolower($namespace)));
        	
        	// Add the default module bootstraps if not found
    		if ($isCurrentModule && $module != 'default' && !isset($bootstraps[$module])) {
    			
    			$shortModuleName = str_replace(strtolower($namespace) ."-", '', $module);
    		
    			// TODO Make sure the string STARTS WITH tab- !
    			if (false !== strpos($shortModuleName, 'tab-')) {
    				$className = 'Tab';
    			} else {
	    			$pieces = explode('-', $shortModuleName);
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
    	
		if ($name != 'default') {

			$lowerCaseNs 	= substr($name, 0, strpos($name, '-'));
			$moduleName 	= substr($name, strpos($name, '-') + 1);
			
			$formattedModuleName 	= parent :: _formatModuleName($moduleName);
			
			if (isset(self :: $namespaces[strtolower($lowerCaseNs)])) {
				$namespace = self :: $namespaces[$lowerCaseNs];
				return "${namespace}_${formattedModuleName}";
			} else {
				return "${ns}_${formattedModuleName}";
			}
			
		}
		
        return "${ns}_" . parent :: _formatModuleName($name);
        
    }
}