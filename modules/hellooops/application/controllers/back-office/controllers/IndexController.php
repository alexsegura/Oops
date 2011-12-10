<?php 

class HelloOops_BackOffice_IndexController extends Zend_Controller_Action {
	
	public function init() {
    }
    
    public function indexAction() {
    	
    }
    
	public function exampleAction() {
    	$this->view->foo = "bar";
    }
    
}