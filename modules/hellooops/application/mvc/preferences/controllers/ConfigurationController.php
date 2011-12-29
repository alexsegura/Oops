<?php 

class HelloOops_Preferences_ConfigurationController extends Zend_Controller_Action {
	
	/**
     * 
     */
    public function indexAction() {
    	
    	$config = $this->_helper->configuration();
    	
    	$form = new Oops_Form_Admin();
    	
    	$form->setMethod('post');
    	$form->setLegend('Modify configuration');
    	
    	// Create the form
    	// Add configuration keys/values as text fields
    	foreach ($config as $key => $value) {
    		
	        $text = $form->createElement('text', $key, array(
	        	'label' => $key, 
	        	'value'	=> $value
	        ));
	       	$text->addValidator('Alnum');
	        $text->setRequired(true);
	        
	        $form->addElement($text);
	        
    	}
    	
        $submit = $form->createElement('submit', 'Save', array(
        	'class' => 'button'
        ));
        $submit->removeDecorator('Label');
        $form->addElement($submit);
        
       	// Validate the form with POST data
    	if ($this->getRequest()->isPost()) {
			
            if ($form->isValid($this->getRequest()->getPost())) {
            	
            	$values = $form->getValues();
            	
            	$newConfig = new Zend_Config($values, true);
            	$this->_helper->configuration($newConfig);
            	
            	return $this->_helper->redirector('confirm');
            	
            }
            
        }
		
    	$this->view->form = $form;
    	
    	// Render the "index/index" view
    	
    }
    
    /**
     * Displays a confirmation message upon successful form submission. 
     */
    public function confirmAction() {
    	
    	$this->view->message = 'Configuration saved successfully';
    	
    	// TODO 
    	// Override Zend_Controller_Action_Helper_ViewResolver
    	// $this->render('index') does not work
    	return $this->_forward('index');
    	
    }
	
}