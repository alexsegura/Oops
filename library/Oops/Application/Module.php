<?php

class Oops_Application_Module extends ModuleCore {
	
	protected $application;
	protected $request;
	protected $log;
	protected $config;
	
	public function __construct($name = NULL) {
		
		$config = new Zend_Config_Ini(
			realpath(dirname(__FILE__) . '/application.ini'), 
			$this->getApplicationEnv(), true);

		$moduleConfig = new Zend_Config_Ini(
			$this->getApplicationPath() . '/configs/application.ini', 
			$this->getApplicationEnv(), true);
			
		$config->appnamespace = $this->getNamespace();
			
		$config->resources->frontController->moduleDirectory = 
			$this->getApplicationPath() . '/mvc';
		
		// It is necessary to override the default resourceloader, 
		// because it supposes the application path is located in the same
		// folder as the application. 
		// @see Zend_Application_Bootstrap_Bootstrap :: getResourceLoader()
		$config->resourceloader = new Zend_Application_Module_Autoloader(array(
        	'namespace' 	=> $this->getNamespace(),
        	'basePath'  	=> $this->getApplicationPath()
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
		
		$this->log->info("--- Creating " . $this->getNamespace());
		
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
			
			$this->request->setModuleName(strtolower($this->getNamespace()) . '-preferences');
			
			$response = $this->application->getBootstrap()->run();
			
			if ($response->isException()) {
				$exceptions = $response->getException();
				throw array_pop($exceptions);
			}
			
			return (string) $response;
			
		} catch (Exception $e) {
			return (string) $e;
		}
		
	}
	
	private function hook($hookName) {
		
		// Catch them all !
		try {
			
			$namespace = $this->getNamespace();
			
			$this->log->info("Hooking $namespace on $hookName");
			
			// Modify the request that will be processed
			$this->request->setModuleName(strtolower($namespace) . '-hooks');
			$this->request->setControllerName('index');
			$this->request->setActionName($hookName);
			$this->request->setDispatched(false);
			
			// Make sure the wanted request object will actually be used
			// FIXME It seems that sometimes the reference is lost ! 
			$front 	= $this
					->application
					->getBootstrap()
					->bootstrap('frontController')
					->getResource('frontController');
					
			if ($response = $front->getResponse()) {
				$hookBody = $response->getBody($namespace . '-' . $hookName);
				if (!empty($hookBody)) {
					$response->clearBody($namespace . '-' . $hookName);
				}
			}
					
			$front->setRequest($this->request);
			
			// Run the application
			$response = $this->application->getBootstrap()->run();
			
        	$hookBody = $response->getBody($namespace . '-' . $hookName);
        	
        	// In case of exception, rethrow the last one that was collected
			if (null == $hookBody && $response->isException()) {
				$exceptions = $response->getException();
				throw array_pop($exceptions);
			}
			
			
			return $hookBody;
			
		} catch (Exception $e) {
			return (string) $e;
		}
		
	}
	
	/**
	 * Convenient method to run the application from the outside. 
	 * Use getRequest() to modify request before calling run().  
	 * @return string
	 */
	public function run() {
		
		try {
			$this->request->setModuleName(strtolower($this->getNamespace()) . '-hooks');
			$response = $this->application->getBootstrap()->run();
			if ($response->isException()) {
				$exceptions = $response->getException();
				throw array_pop($exceptions);
			}
			echo (string) $response;
		} catch (Exception $e) {
			echo (string) $e;
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
	
	public function hookTop($params) {
		return $this->hook('top');
	}
	
	public function hookExtraRight($params) {
		return $this->hook('extra-right');
	}
	
}