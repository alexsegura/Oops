<?php

class Oops extends Module {
	
	public function __construct() {
		
		$this->name 		= 'oops';
		$this->tab 			= 'front_office_features';
		$this->version 		= 1.0;
		$this->author 		= 'Alexandre Segura';
		$this->displayName 	= $this->l('Oops');
		$this->description 	= $this->l('Object Oriented PrestaShop');
		
		parent :: __construct();
		
	}
	
	public function install() {
		return parent :: install() && $this->registerHook('header');
	}
	
	public function hookHeader($params) {
		
		$loader = require dirname(__FILE__) . '/vendor/autoload.php';
		$loader->add('Oops', realpath(__DIR__ . '/../../library/'));
		
	}
	
}