<?php

class Oops_Application_Bootstrap extends Zend_Application_Bootstrap_Bootstrap {
	
	protected function _initDispatcher() {
		
        $this->bootstrap('FrontController');
        $front = $this->getResource('FrontController');
        
        $dispatcher = $front->getDispatcher();
        
        $oopsDispatcher = new Oops_Controller_Dispatcher();
        $oopsDispatcher->setControllerDirectory($dispatcher->getControllerDirectory());
        $oopsDispatcher->setDefaultModule($dispatcher->getDefaultModule());
        
		$front->setDispatcher($oopsDispatcher);
		
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
	    Zend_Controller_Action_HelperBroker :: addHelper(
	        new Oops_Controller_Action_Helper_ViewResolver() 
	        
	    );
	    Zend_Controller_Action_HelperBroker :: addHelper(
	    	new Oops_Controller_Action_Helper_Configuration()
	    );
	}
	
}