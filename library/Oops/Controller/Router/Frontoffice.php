<?php

/**
 * @author Alexandre Segura <mex.zktk@gmail.com> 
 */
class Oops_Controller_Router_Frontoffice extends Zend_Controller_Router_Abstract {
	
	public function assemble($userParams, $name = null, $reset = false, $encode = true) {
		
		$url = $this->getFrontController()->getBaseUrl();
		
		// tab=AdminModules&configure=blockrestock&token=fe0913d0b21c6faca8c4b29b81501e58&tab_module=front_office_features
		
		$params = array();
		
		$params['tab'] 			= $this->getFrontController()->getRequest()->getParam('tab');
		$params['configure'] 	= $this->getFrontController()->getRequest()->getParam('configure');
		$params['token'] 		= $this->getFrontController()->getRequest()->getParam('token');
		$params['tab_module'] 	= $this->getFrontController()->getRequest()->getParam('tab_module');
		$params['action'] 		= $this->getFrontController()->getRequest()->getParam('action');
		
		// $params = $this->getFrontController()->getRequest()->getParams();
		
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
    	// Does nothing
    }
    
}
