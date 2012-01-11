<?php

class Oops_Application_Resource_Frontcontroller extends Zend_Application_Resource_Frontcontroller {
	
	public function init() {
    	
        $this->_front = $this->getFrontController();
        $dispatcher = $this->_front->getDispatcher();
        
        if (!$dispatcher instanceof Oops_Controller_Dispatcher) {
	        $oopsDispatcher = new Oops_Controller_Dispatcher();
			$this->_front->setDispatcher($oopsDispatcher);
        }
        
        parent :: init();
        
        return $this->_front;
        
	}
	
}