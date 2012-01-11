<?php

/**
 * Action Helper that enables Smarty views rendering.
 * @author Alexandre Segura <mex.zktk@gmail.com>
 */
class Oops_Controller_Action_Helper_ViewRenderer extends Zend_Controller_Action_Helper_ViewRenderer {
	
	protected $defaultView;
    protected $viewsBySuffix = array();
    
	public function getNamespace() {
    	return $this->getActionController()->getInvokeArg('bootstrap')->getOption('appnamespace');
    }
	
	public function init() {
		
		$this->_actionController->view 	= null;
		$this->view 					= null;
		$this->viewsBySuffix 			= array();
        
		parent :: init();
		
        $this->initAlternativeViews();
        
    }
    
    protected function initAlternativeViews() {
    	
    	if (count($this->viewsBySuffix) == 0) {
    		
    		$smartyView	 = new Oops_View_Smarty();
        	$smartyView->addScriptPath($this->view->getScriptPaths());
        	
        	$this->view->addHelperPath('Oops/View/Helper', 'Oops_View_Helper');
        	$smartyView->addHelperPath('Oops/View/Helper', 'Oops_View_Helper');
        	
        	// Add theme module template directory to the stack of script paths
        	// This will reproduce the "theme override" behavior
        	// Views should be placed in subfolders for each controller
        	$appnamespace = $this->getNamespace();
        		
        	$this->view->addScriptPath(_PS_THEME_DIR_ . 'modules/' . strtolower($appnamespace));
        	$smartyView->addScriptPath(_PS_THEME_DIR_ . 'modules/' . strtolower($appnamespace));
    		
    		$this->viewsBySuffix = array(
	        	'tpl' 	=> $smartyView,
	        	'php'	=> $this->view  
	        );
	        
	        $this->defaultView = $this->view;
	        
    	}
        
    }
    
	private function initResponseSegment() {
        
		$namespace 	= $this->getNamespace();
    	$request 	= $this->getActionController()->getRequest();
    	
    	$log = $this->getActionController()->getInvokeArg('bootstrap')->getResource("log");
    	$log->info('initResponseSegment : ' . $namespace . '-' . $request->getActionName());
    	
		if ($request->getModuleName() == strtolower($namespace) . "-hooks") {
			$this->setResponseSegment($namespace . '-' . $request->getActionName());
		}
		
    }
    
	public function render($action = null, $name = null, $noController = null) {
		
		$this->setRender($action, $name, $noController);
		
		// Iterates over view suffixes, trying to find a view script. 
        foreach ($this->viewsBySuffix as $suffix => $view) {
        	
        	// Try to resolve a view based on current suffix
	        $this->setViewSuffix($suffix);
	        $path = $this->getViewScript();
	        
	        if ($view->getScriptPath($path)) {
	        	
	        	// Copy vars to view
	        	// Make sure the vars are coming from the action controller's view
	        	$vars = $this->getActionController()->view->getVars();
	        	$view->assign($vars);
	        	
	        	// Replace the view that will be rendered
	            $this->setView($view);
	            
	            $this->initResponseSegment();
	            
	            $this->renderScript($path, $name);
	            return;
	            
	        }
	        
        }
        
        $this->setView($this->defaultView);
        
        $this->setViewSuffix('phtml');
        $this->initResponseSegment();
        
        $path = $this->getViewScript();
        $this->renderScript($path, $name);
        
	}
	
	public function renderScript($script, $name = null) {
    	return parent :: renderScript($script, $name);
    }
	
}