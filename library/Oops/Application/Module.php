<?php

class Oops_Application_Module extends ModuleCore {
	
	protected $application;
	protected $request;
	
	public function __construct($name = NULL) {
		
		$config = new Zend_Config_Ini(
			realpath(dirname(__FILE__) . '/application.ini'), 
			$this->getApplicationEnv(), true);
			
		$moduleConfig = new Zend_Config_Ini(
			$this->getApplicationPath() . '/configs/application.ini', 
			$this->getApplicationEnv(), true);
			
		$config->resources->frontController->moduleDirectory = 
			$this->getApplicationPath() . '/mvc';
			
		$config->appnamespace = $this->getNamespace();
		
		// It is necessary to override the default resourceloader, 
		// because it supposes the application path is located in the same
		// folder as the application. 
		// @see Zend_Application_Bootstrap_Bootstrap :: getResourceLoader()
		$config->resourceloader = new Zend_Application_Module_Autoloader(array(
        	'namespace' 	=> $this->getNamespace(),
        	'basePath'  	=> $this->getApplicationPath(), 
			'resourceTypes'	=> array(
				'tab' => array(
	                'namespace' => 'Tab',
	                'path'      => 'tabs',
	            ),
			)
        ));
        
		
        // Overrides default "modules" resourceloader to make sure
        // default module bootstraps are triggered. 
        // Also ensures bootstrap namespace
		$config->pluginPaths = array(
			'Oops_Application_Resource' => OOPS_LIBRARY_PATH . "/Oops/Application/Resource/"
		);
		
		// Merge module configuration with default configuration
		// TODO Make sure mandatory default configuration is NOT overwritten
		$config->merge($moduleConfig);
		
		// Create a Zend_Application with no environment, 
		// as the $config is already loaded base on environment. 
		$this->application = new Zend_Application(
		    null,
		    $config
		);
		
		$this->application->bootstrap();
		
		
		$this->request = $this->application->getBootstrap()->getContainer()->get('request');
		
		parent :: __construct($name);
		
	}
	
	/**
	 * Returns the module namespace, i.e. the name of the module class. 
	 * @return string
	 */
	public function getNamespace() {
		return get_class($this);
	}
	
	public function getApplication() {
		return $this->application;
	}
	
	public function getRequest() {
		return $this->request;
	}
	
	private function getApplicationPath() {
		return _PS_MODULE_DIR_ . $this->name . '/application';
	}
	
	private function getApplicationEnv() {
		$constant = 'MODULE_' . strtoupper($this->name) . '_ENV';
		defined($constant) || define($constant, (getenv('OOPS_ENV') ? getenv('OOPS_ENV') : 'development'));
		return constant($constant);
	}
	
	public function install() {
		
		$install = parent :: install();
		
		$hooks = $this->application->getBootstrap()->getResource('hooks');
		
		foreach ($hooks as $hook) {
			$this->registerHook($hook);
		}
		
		return $install;
		
	}
	
	public function uninstall() {
		return parent :: uninstall();
	}
	
	public function getContent() {
		
		try {
			$this->request->setModuleName('preferences');
			$response = $this->application->getBootstrap()->run();
			return (string) $response;
		} catch (Exception $e) {
			return (string) $e;
		}
		
	}
	
	private function hook($hookName) {
		
		try {
			
			$this->request->setModuleName('hooks');
			$this->request->setControllerName('index');
			$this->request->setActionName($hookName);
			
			$response = $this->application->getBootstrap()->run();
			
			// TODO Better error management ! 
			if ($response->isException()) {
				var_dump($response);
			}
			
			$namespace = 
        		$this->application->getBootstrap()->getOption('appnamespace');
			
			return $response->getBody($namespace . '-' . $hookName);
			
		} catch (Exception $e) {
			return (string) $e;
		}
		
	}
	
	/* PrestaShop standard hook methods */
	
	public function hookHeader() {
		return $this->hook('header');
	}
	
	public function hookLeftColumn($params) {
		return $this->hook('left-column');
	}
	
	public function hookRightColumn($params) {
		return $this->hook('right-column');
	}
	
	public function hookProductTab($params) {
		return $this->hook('product-tab');
	}
	
	public function hookProductTabContent($params) {
		return $this->hook('product-tab-content');
	}
	
	public function hookExtraRight($params) {
		return $this->hook('extra-right');
	}
	
	public function run() {
		
		try {
			$this->request->setModuleName('hooks');
			$response = $this->application->getBootstrap()->run();
			echo (string) $response;
		} catch (Exception $e) {
			return (string) $e;
		}
		
	}
	
}