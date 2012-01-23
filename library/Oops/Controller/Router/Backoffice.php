<?php

/**
 * @author Alexandre Segura <mex.zktk@gmail.com> 
 */
class Oops_Controller_Router_Backoffice extends Zend_Controller_Router_Abstract {
	
	public function assemble($userParams, $name = null, $reset = false, $encode = true) {
		
		$url = $this->getFrontController()->getBaseUrl();
		
		$request = $this->getFrontController()->getRequest();
		
		$params = array();
		
		$params['tab'] 			= $request->getParam('tab');
		$params['configure'] 	= $request->getParam('configure');
		$params['token'] 		= $request->getParam('token');
		$params['tab_module'] 	= $request->getParam('tab_module');
		$params['module_name'] 	= $request->getParam('module_name');
		$params['action'] 		= $request->getParam('action');
		
		// TODO Make sure module can't be changed via request object
		
		
		if (!isset($params[$request->getControllerKey()])) {
			$params[$request->getControllerKey()] = $request->getControllerName();
		}
		
		foreach ($userParams as $key => $value) {
			$params[$key] = $value;	
		}
		
		$queryString = '';
		$pieces = array();
		foreach ($params as $key => $value) {
			$pieces[] = "$key=$value";
		}
		$queryString = implode('&', $pieces);
		
    	return $url . '?' . $queryString;
    	
   	}
   	
   	public function route(Zend_Controller_Request_Abstract $request) {
    	
    }
    
}
