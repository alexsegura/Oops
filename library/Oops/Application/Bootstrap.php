<?php

class Oops_Application_Bootstrap extends Zend_Application_Bootstrap_Bootstrap {
	
	/**
	 * Initializes module dependencies. 
	 * Declared as a bootstrap method to make sure it is executed BEFORE 
	 * the dependency registers its own autoload stack.
	 * Called _initModuleDependencies to avoid circular resource with 
	 * Oops_Application_Resource_Dependencies. 
	 * @see Zend_Application_Bootstrap_BootstrapAbstract :: _bootstrap
	 */
	protected function _initModuleDependencies() {
		$pluginResourceNames = $this->getPluginResourceNames();
		if (in_array('dependencies', $pluginResourceNames)) {
			$dependencies = $this->bootstrap('dependencies')->getResource('dependencies');
			foreach ($dependencies as $moduleName) {
				ModuleCore :: getInstanceByName($moduleName);
			}
		}
	}
	
	protected function _initDispatcher() {
		
        $this->bootstrap('FrontController');
        $front = $this->getResource('FrontController');
        
        $dispatcher = $front->getDispatcher();
        
        $oopsDispatcher = new Oops_Controller_Dispatcher();
        $oopsDispatcher->setControllerDirectory($dispatcher->getControllerDirectory());
        $oopsDispatcher->setDefaultModule($dispatcher->getDefaultModule());
        
		$front->setDispatcher($oopsDispatcher);
		
	}
	
	protected function _initDefaultModule() {
		
        $front = $this->bootstrap('FrontController')->getResource('FrontController');
		
		$front->addControllerDirectory(
			OOPS_LIBRARY_PATH . '/Oops/Application/Module/default/controllers', 'default');
		
	}
	
	protected function _initRequest() {
		
		$request = new Zend_Controller_Request_Http();
			
        $this->bootstrap('FrontController');
        
        $front = $this->getResource('FrontController');
        $front->setRequest($request);
        
        $this->getContainer()->set('request', $request);
		
		return $request;
		
	}
	
	protected function _initHelpers() {
		/*
	    Zend_Controller_Action_HelperBroker :: addHelper(
	        new Oops_Controller_Action_Helper_ViewResolver() 
	        
	    );
	    */
	    Zend_Controller_Action_HelperBroker :: addHelper(
	    	new Oops_Controller_Action_Helper_Configuration()
	    );
	    
	    Zend_Controller_Action_HelperBroker :: addHelper(
	    	new Oops_Controller_Action_Helper_ViewRenderer
	    );
	}
	
}