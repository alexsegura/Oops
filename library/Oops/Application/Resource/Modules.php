<?php

class Oops_Application_Resource_Modules extends Zend_Application_Resource_Modules {
	
    protected function bootstrapBootstraps($bootstraps) {
    	
    	// Adds the default module bootstraps if not found
    	if (!isset($bootstraps['front-office'])) {
    		$bootstraps['front-office'] = 'Oops_Application_Module_Bootstrap_Frontoffice';
    	}
    	if (!isset($bootstraps['back-office'])) {
    		$bootstraps['back-office'] = 'Oops_Application_Module_Bootstrap_Backoffice';
    	}
    	
    	return parent :: bootstrapBootstraps($bootstraps);
    	
    }
    
    // OopsFeaturesFilter_FrontOffice_Bootstrap
	protected function _formatModuleName($name) {
    	
    	$bootstrap 	= $this->getBootstrap();
    	$ns 		= $bootstrap->getOption('appnamespace');
    	
        $moduleName = parent :: _formatModuleName($name);
        
        return "${ns}_${moduleName}";
        
    }
}