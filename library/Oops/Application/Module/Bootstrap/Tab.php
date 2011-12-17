<?php

class Oops_Application_Module_Bootstrap_Tab extends Oops_Application_Module_Bootstrap {
	
	protected function _initRouter() {
        $this->bootstrap('FrontController');
        $front = $this->getResource('FrontController');
		$front->setRouter('Oops_Controller_Router_Backoffice');
	}
	
}