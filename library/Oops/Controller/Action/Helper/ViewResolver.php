<?php

/**
 * Action Helper that enables Smarty views rendering. 
 * @author Alexandre Segura <mex.zktk@gmail.com>
 */
class Oops_Controller_Action_Helper_ViewResolver extends Zend_Controller_Action_Helper_Abstract {
	
	/**
	 * Operates before the dispatch loop startup to 
	 * change the view that will be rendered, if needed. 
	 */
    public function preDispatch() {
    	
        $viewRenderer = Zend_Controller_Action_HelperBroker :: getStaticHelper('viewRenderer');
        
        $defaultView = $viewRenderer->view;
        $smartyView	 = new Oops_View_Smarty();
        $smartyView->addScriptPath($defaultView->getScriptPaths());
        
        // TODO
        // Move this in another place !
        $defaultView->addHelperPath('Oops/View/Helper', 'Oops_View_Helper');
        $smartyView->addHelperPath('Oops/View/Helper', 'Oops_View_Helper');
        
        // TODO
        // - Allow configurable priority
        
        $viewsBySuffix = array(
        	'tpl' 	=> $smartyView,
        	'php'	=> $defaultView,  
        	'phtml'	=> $defaultView 
        );
        
        // Iterates over view suffixes, trying to find a view script. 
        foreach ($viewsBySuffix as $suffix => $view) {
        	
        	// Add theme module template directory to the stack of script paths
        	// This will reproduce the "theme override" behavior
        	// Views should be placed in subfolders for each controller
        	$appnamespace = 
        		$this->getActionController()->getInvokeArg('bootstrap')->getOption('appnamespace');
        	$view->addScriptPath(_PS_THEME_DIR_ . 'modules/' . strtolower($appnamespace));
        	
        	// Try to resolve a view based on current suffix
	        $viewRenderer->setViewSuffix($suffix);
	        $script = $viewRenderer->getViewScript();
	        
	        if ($view->getScriptPath($script)) {
	        	
	        	// Completely replace the view that will be rendered
	            $viewRenderer->setView($view);
	            $viewRenderer->getActionController()->view = null;
	            
	            $viewRenderer->init();
	            
		        $this->initResponseSegment($viewRenderer);
	            
	            return;
	            
	        }
	        
        }
        
    	$this->initResponseSegment($viewRenderer);
        
        // Restore to default suffix if not found
        $viewRenderer->setViewSuffix('phtml');

    }
    
    /**
     * Sets a unique response segment for each hook action of each module. 
     * Allows to render several hooks of several modules on the same page with no conflict. 
     * @param $viewRenderer
     */
    private function initResponseSegment($viewRenderer) {
    	
    	$namespace = 
        	$this->getActionController()->getInvokeArg('bootstrap')->getOption('appnamespace');
        	
    	$request = $this->getActionController()->getRequest();
		if ($request->getModuleName() == 'hooks') {
			$viewRenderer->setResponseSegment($namespace . '-' . $request->getActionName());
		}
		
    }
    
}