<?php

class HelloOops_FrontOffice_ErrorController extends Zend_Controller_Action {
	
    public function errorAction() {
    	
    	$error = $this->_getParam("error_handler");
    	
    	$this->view->exception 	= $error['exception'];
    	$this->view->message 	= $error['exception']->getMessage();
    	$this->view->request 	= $error['request'];
    	
    }
    
}
