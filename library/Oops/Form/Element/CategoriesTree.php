<?php

class Oops_Form_Element_CategoriesTree extends Zend_Form_Element {
	
	protected $root;
	
	
	
	public function setRoot($root) {
		return $this->root = $root;
		return $this;
	}
	
	public function getRoot() {
		return $this->root;
	}
	
	public function init()
    {
    	
    	$this->setValue(array());
    	$this
    		->addPrefixPath(
    			'Oops_Form_Decorator',
                'Oops/Form/Decorator/',
                'decorator'
    		)
            ->addDecorator(new Oops_Form_Decorator_CategoriesTree())
            // ->addDecorator('HtmlTag', array('tag' => 'dd'))
            // ->addDecorator('Label', array('tag' => 'dt'))
            ;
    }
	
	public function loadDefaultDecorators() {}
	
}
