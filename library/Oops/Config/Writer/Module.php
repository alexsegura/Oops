<?php

/**
 * 
 * @author Alexandre Segura <mex.zktk@gmail.com>
 */
class Oops_Config_Writer_Module extends Zend_Config_Writer {
	
	public function write() {
		
		foreach ($this->_config as $key => $value) {
			
			if (null != $value) {
				
				if (!is_scalar($value)) {
					throw new Exception('Oops_Controller_Action_Helper_Configuration '
						. 'does not support writing multilingual values');
				}
				
				ConfigurationCore :: updateValue(strtoupper($key), (string) $value);
				
			}
			
		}
		
	}
	
}