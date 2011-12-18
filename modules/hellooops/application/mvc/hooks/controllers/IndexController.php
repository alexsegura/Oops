<?php 

class HelloOops_Hooks_IndexController extends Zend_Controller_Action {
	
	public function init() {
	}
	
	public function leftColumnAction() {
		
		$root = Oops_Db_CategoryQuery :: create()->findRoot();
		
		$this->view->categories = $root->getChildren();
		$this->view->items 		= HelloOops_Model_Util :: getItems();
		
    }
	
	public function extraRightAction() {
    }
    
	public function productTabAction() {
    }
    
	public function productTabContentAction() {
    }
	
}