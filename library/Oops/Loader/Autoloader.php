<?php

class Oops_Loader_Autoloader {
	
	private static $instance;
	
	private function __construct() {
		
		require_once 'propel/Propel.php';
		
		Propel :: setConfiguration(array(
  			'datasources' => array(
    			'prestashop' => array(
			    	'adapter' => 'mysql',
			    	'connection' => array (
				        'dsn' 		=> 'mysql:host=' . _DB_SERVER_ . ';dbname=' . _DB_NAME_,
				        'user' 		=> _DB_USER_,
				        'password' 	=> _DB_PASSWD_
      				),
    			),
    			'default' => 'prestashop',
  			),
  			'generator_version' => '1.6.3',
		));
		
		Propel :: initialize();
		
		define('OOPS_LIBRARY_PATH', realpath(dirname(__FILE__) . '/../../'));
		
	}
	
	public static function getInstance() {
		if (null == self :: $instance) {
			self :: $instance = new Oops_Loader_Autoloader();
		}
		return self :: $instance;
	}
	
}