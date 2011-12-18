<?php

class HelloOops_Preferences_Form_Example extends Oops_Form_Admin {
	
	public function init() {
		
    	$this->setMethod('post');
    	$this->setLegend('Example form');
			
    	// Add a categories selector
    	$categories = new Oops_Form_Element_CategoriesSelect(array(
			'name' 			=> 'category',
    		'label'			=> 'Category', 
    		'description'	=> 'Select a category'
		));
        
		// Add a required text field, expecting alphanumeric input
        $text = $this->createElement('text', 'text', array(
        	'label' 		=> 'Text', 
        	'description'	=> 'Enter alphanumeric text'
        ));
        $text->removeDecorator('Errors');
       	$text->addValidator('Alnum');
        $text->setRequired(true);
		
        // Add a required email field
        $email = $this->createElement('text', 'email', array(
        	'label' 		=> 'Email', 
        	'description'	=> 'Enter an email address'
        ));
        $email->removeDecorator('Errors');
       	$email->addValidator('EmailAddress');
        $email->setRequired(true);
        
        // Add a submit element
        $submit = $this->createElement('submit', 'Enregistrer', array(
        	'class' => 'button'
        ));
        $submit->removeDecorator('Label');

        // Add elements to form for display
        $this->addElements(array(
        	$categories, 
        	$text, 
        	$email, 
        	$submit
        ));
        
	}
	
}