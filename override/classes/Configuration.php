<?php

function __oops_autoload($className) {
	
	// Adds the _PS_TOOL_DIR_ directory to the include_path
	$realpath	= realpath(_PS_TOOL_DIR_);
	$pathes 	= explode(PATH_SEPARATOR, get_include_path());
	if (!in_array($realpath, $pathes)) {
		$pathes[] = $realpath;
	}
	set_include_path(implode(PATH_SEPARATOR, $pathes));
	
	include_once 'Zend/Loader/Autoloader.php';
	
	$loader = Zend_Loader_Autoloader :: getInstance();
	$loader->registerNamespace('Oops_');
	
}

class Configuration extends ConfigurationCore {
	
	public static function loadConfiguration() {

		// Registers the __oops_autoload function first in the autoload stack 
		spl_autoload_register('__oops_autoload');
		spl_autoload_register('__autoload');

		Oops_Loader_Autoloader :: getInstance();
		
		parent :: loadConfiguration();
		
	}
	
}