<?php 

class HelloOops_Hooks_IndexController extends Zend_Controller_Action {
	
	public function init() {
		$root = Oops_Db_CategoryQuery :: create()->findRoot();
		$this->view->categories = $root->getChildren();
		$this->view->items 		= HelloOops_Model_Util :: getItems();
		
		$config = $this->_helper->configuration();
		$foo = $config->foo;
		
	}
	
	public function leftColumnAction() {
    }
    
	public function rightColumnAction() {
    }
	
	public function extraRightAction() {
    }
    
	public function productTabAction() {
    }
    
	public function productTabContentAction() {
    }
	
}