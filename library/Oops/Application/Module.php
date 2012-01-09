<?php

class Oops_Application_Module extends ModuleCore {
	
	private $application;
	protected $request;
	private $log;
	
	private $config;
	
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
        	'basePath'  	=> $this->getApplicationPath()
			/*
			'resourceTypes'	=> array(
				'tab' => array(
	                'namespace' => 'Tab',
	                'path'      => 'tabs',
	            ),
			)
			*/
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
		
		$this->config = $config;
		
		// Create a Zend_Application with no environment, 
		// as the $config is already loaded base on environment. 
		$this->application = new Zend_Application(
		    null,
		    $config
		);
		
		$this->application->bootstrap();
		
		$this->log = $this->application->getBootstrap()->getResource('log');
		
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
		return 'development';
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
		
		// Catch them all !
		try {
			
			$this->request->setModuleName('preferences');
			$response = $this->application->getBootstrap()->run();
			
			if ($response->isException()) {
				$exceptions = $response->getException();
				throw $exceptions[0];
			}
			
			return (string) $response;
			
		} catch (Exception $e) {
			return (string) $e;
		}
		
	}
	
	private function hook($hookName) {
		
		// Catch them all !
		try {
			
			$front 	= $this
					->application
					->getBootstrap()
					->bootstrap('frontController')
					->getResource('frontController');
			
			// Make sure the module directories are always the good ones
			// Zend_Controller_Front is a singleton, so module names may collide
			// if the same module has several hooks
			// FIXME 
			// Maybe we need a custom FrontController, 
			// or at least namespace aware
			$controllerDirectory = $front->getControllerDirectory();
			$modules = array_keys($controllerDirectory);
			foreach ($modules as $moduleName) {
				if ($moduleName != 'default') {
					$front->removeControllerDirectory($moduleName);
				}
			}
			$front->addModuleDirectory($this->config->resources->frontController->moduleDirectory);
			
			// Modify the request that will be processed
			$this->request->setModuleName('hooks');
			$this->request->setControllerName('index');
			$this->request->setActionName($hookName);
			
			$front->setRequest($this->request);
			
			$this->log->info("hookName : $hookName");
			
			$response = $this->application->getBootstrap()->run();
			
			$namespace = 
        		$this->application->getBootstrap()->getOption('appnamespace');
        	
        	$hookBody = $response->getBody($namespace . '-' . $hookName);
        	
			if (null == $hookBody && $response->isException()) {
				$exceptions = $response->getException();
				throw array_pop($exceptions);
			}
			
			return $hookBody;
			
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