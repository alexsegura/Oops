<?php

/**
 * Oops custom AdminTabCore implementation.
 * 
 * Extend this class to be able to run a tab as an MVC application. 
 * Oops_Application_Tab is able to resolve the module it is associated to 
 * based on the class name. 
 * 
 * Tab class and file must be located directly inside the module folder, 
 * next to the module class, and respect the following syntax : 
 * <appnamespace>_Tab<tabName>
 * 
 * This will trigger the corresponding application module in application/controllers : 
 * tab-<tabName> (Please note that the <tabName> is converted to lower case)
 * 
 * @author Alexandre Segura <mex.zktk@gmail.com>
 */
abstract class Oops_Application_Tab extends AdminTabCore {
	
	protected $module;
	protected $application;
	protected $request;
	
	public function __construct() {
		
		// Inhibit table management
		$this->table = "";
		
		parent :: __construct();
		
		// We need to find the module exposed via this tab
		// Obviously the class namespace is the module name
		$moduleClass = $this->getNamespace();
		
		// TODO Check if class exists !
		// TODO Check class name syntax, path, etc...
		$module = Module :: getInstanceByName(strtolower($moduleClass));
		
		$this->application 	= $module->getApplication();
		$this->request		= $module->getRequest();
		
	}
	
	/**
	 * Returns the namespace, i.e. the name of the module class. 
	 * @return string
	 */
	public function getNamespace() {
		return substr(get_class($this), 0, strpos(get_class($this), "_"));
	}
	
	/**
	 * Returns the last part of the class name in <appnamespace>_Tab_<tabName>
	 * @return string
	 */
	public function getTabName() {
		return substr(get_class($this), strrpos(get_class($this), "_Tab") + 4);
	}
	
	/**
	 * Returns the corresponding application module. 
	 * @return string
	 */
	private function getApplicationModuleName() {
		// TODO Camel case to dash
		return 'tab-' . strtolower($this->getTabName());
	}
	
	public function display() {
		try {
			$this->request->setModuleName($this->getApplicationModuleName());
			$response = $this->application->getBootstrap()->run();
			echo (string) $response;
		} catch (Exception $e) {
			echo (string) $e;
		}
		
	}
	
}