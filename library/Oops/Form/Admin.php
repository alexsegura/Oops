<?php

/**
 * Custom Zend_Form implementation to display admin forms. 
 * @author Alexandre Segura <mex.zktk@gmail.com>
 *
 */
class Oops_Form_Admin extends Zend_Form {
	
	public function __construct($options = null) {
		
		if ($options == null) {
			$options = array();
		}
		
		$options['elementDecorators'] = array(
			new Zend_Form_Decorator_HtmlTag(array('tag' => 'div', 'class' => 'margin-form'))
		);
		
		$options['decorators'] = array(
			'FormElements',
            'Fieldset',
            'Form'		
		);
		
		parent :: __construct($options);
		
	}
	
	/**
	 * 
	 * @param mixed $element
	 * @param string $name
	 * @param array $options
	 */
	public function addElement($element, $name = null, $options = null) {
		
    	if ($element instanceof Zend_Form_Element) {
    		
	        $element->removeDecorator('DtDdWrapper');
	        
	        $element->removeDecorator('HtmlTag');
	        $element->addDecorator('HtmlTag', array(
	        	'tag' 	=> 'div', 
	        	'class' => 'margin-form'
	       	));
	       	
	       	if ($element->getDecorator('Label')) {
	       		$element->removeDecorator('Label');
        		$element->addDecorator('Label');
	       	}
	        
       }
       
       parent :: addElement($element, $name, $options);
       
	}
	
}