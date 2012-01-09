<?php 

class HelloOops_Hooks_IndexController extends Zend_Controller_Action {
	
	public function init() {
		
		$root = Oops_Db_CategoryQuery :: create()->findRoot();
		
		$this->view->categories = $root->getChildren();
		$this->view->items 		= HelloOops_Model_Util :: getItems();
		
		$config = $this->_helper->configuration();
		
		$this->log = $this->getInvokeArg('bootstrap')->getResource('log');
		
		
	}
	
	
	
	public function leftColumnAction() {
    }
    
	public function rightColumnAction() {
		// $this->log->info('>>>>>>>> HelloOops_Hooks_IndexController :: rightColumnAction');
		// $this->log->info(print_r($this->view->getScriptPaths(), 1));
    }
	
	public function extraRightAction() {
    }
    
	public function productTabAction() {
    }
    
	public function productTabContentAction() {
    }
	
}