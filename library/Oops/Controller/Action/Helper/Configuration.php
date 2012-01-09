<?php

/**
 * Action Helper to read/write configuration. 
 * @author Alexandre Segura <mex.zktk@gmail.com>
 */
class Oops_Controller_Action_Helper_Configuration extends Zend_Controller_Action_Helper_Abstract {
	
	/**
	 * If a Zend_Config object is provided, saves it in database. 
	 * If null is provided, returns a Zend_Config object (or derived class) as a proxy for the module configuration.
	 * Configuration keys need to be declared in the application config file. 
	 * Keys not declared in application config file will be stored, but won't be visible. 
	 * @param Zend_Config $config
	 * @return mixed
	 */
	public function direct(Zend_Config $config = null) {
		
		if (null == $config) {
		
			// Retrieve default config from application resources
			$config = $this->getActionController()->getInvokeArg('bootstrap')->getResource('configuration');
			
			// Config may have been initialized previously 
			if (!$config->readOnly()) {
			
				// Overwrite default config with db values
				foreach ($config as $key => $value) {
					$dbValue = ConfigurationCore :: get(strtoupper($key));
					if ($dbValue) {
						$config->{$key} = $dbValue;
					}
				}
				
				// Hooks can't modify the config
				if ('hooks' == $this->getActionController()->getRequest()->getModuleName()) {
					$config->setReadOnly();
				}
				
			}
			
			return $config;
			
		} else if ($config instanceof Zend_Config) {
			
			$writer = new Oops_Config_Writer_Module(array('config' => $config));
    		$writer->write();
    		
		}
		
	}
	
}