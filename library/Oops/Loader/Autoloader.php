<?php

class Oops_Loader_Autoloader {
	
	private static $instance;
	
	private function __construct() {
		
		$dbPath = realpath(dirname(__FILE__) . '/../../../db/');
		
		require_once 'propel/Propel.php';
		
		Propel :: init("$dbPath/build/conf/prestashop-conf.php");
		// set_include_path("$dbPath/build/classes" . PATH_SEPARATOR . get_include_path());
		
	}
	
	public static function getInstance() {
		if (null == self :: $instance) {
			self :: $instance = new Oops_Loader_Autoloader();
		}
		return self :: $instance;
	}
	
}