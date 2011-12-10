<?php

class HelloOops extends Oops_Application_Module {
	
	public function __construct($name = NULL) {
		
		$this->name 		= 'hellooops';
		$this->tab 			= 'front_office_features';
		$this->version 		= 1.0;
		$this->author 		= 'Alexandre Segura';
		$this->displayName 	= $this->l('Hello, Oops');
		$this->description 	= $this->l('Oops "Hello World" module');

		parent :: __construct($name);

	}
	
}