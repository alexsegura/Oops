<?php 

class HelloOops_FrontOffice_IndexController extends Zend_Controller_Action {
	
	public function init() {
		
		
	}
	
	public function leftColumnAction() {
		$this->view->items = HelloOops_Model_Util :: getItems();
    }
	
	public function extraRightAction() {
    }
    
	public function productTabAction() {
    }
    
	public function productTabContentAction() {
    }
	
}