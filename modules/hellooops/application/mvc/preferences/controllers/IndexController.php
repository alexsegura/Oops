<?php 

class HelloOops_Preferences_IndexController extends Zend_Controller_Action {
	
	private $form;
	
	public function init() {
		
		$this->form = new HelloOops_Preferences_Form_Example();
    	$this->form->setAction($this->view->url(array('action' => 'process-form')));
    	
    	$this->view->form = $this->form;
    	
    }
    
    /**
     * 
     */
    public function indexAction() {
    	
    	$config = $this->_helper->configuration();
    	
    	$config->baz = 43;
    	
    	print_r($config->toArray());
    	
    	$this->_helper->configuration($config);
    	
    	// Render the "index/index" view
    	
    }
    
    /**
     * Validates the form and redirect to confirmation page. 
     */
	public function processFormAction() {
		
		if ($this->getRequest()->isPost()) {
			
            if (!$this->form->isValid($this->getRequest()->getPost())) {
            	// If the form is not valid, display it again
            	$this->view->form = $this->form;
            	return $this->render('index');
            }
            
        }
        
        // Redirect to "confirm" action to avoid double post
        return $this->_helper->redirector->gotoSimple(
        	'confirm', 'index', null, 
        	$this->form->getValues());
        
    }
    
	/**
     * Displays a confirmation message upon successful form submission. 
     */
    public function confirmAction() {
    	
    	$text 		= $this->_getParam('text');
    	$categoryId = $this->_getParam('category');
    	$email		= $this->_getParam('email');
    	
    	if (isset($text)) {
    		$this->view->text = $text;
    	}
    	
    	if (isset($categoryId)) {
    		$this->view->category = Oops_Db_CategoryPeer :: retrieveByPk($categoryId);
    	}
    	
    	if (isset($email)) {
    		$this->view->email = $email;
    	}
    	
    	// Display the "index/index" view
    	return $this->render('index');
    	
    }
    
    /**
     * Displays the example view, which is a Smarty template. 
     */
	public function exampleAction() {
    	$this->view->foo = "bar";
    }
    
}