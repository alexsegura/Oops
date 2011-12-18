<?php

/**
 * Action Helper that enables Smarty views rendering. 
 * @author Alexandre Segura <mex.zktk@gmail.com>
 */
class Oops_Controller_Action_Helper_ViewResolver extends Zend_Controller_Action_Helper_Abstract {
	
	/**
	 * Operates before the dipatch loop startup to 
	 * change the view that will be rendered, if needed. 
	 */
    public function preDispatch() {
    	
        $viewRenderer = Zend_Controller_Action_HelperBroker :: getStaticHelper('viewRenderer');
        
        // TODO 
        // Register template dir for theme override 
        
        $defaultView = $viewRenderer->view;
        $smartyView	 = new Oops_View_Smarty();
        $smartyView->addScriptPath($defaultView->getScriptPaths());
        
        // TODO
        // Move this in another place !
        $defaultView->addHelperPath('Oops/View/Helper', 'Oops_View_Helper');
        $smartyView->addHelperPath('Oops/View/Helper', 'Oops_View_Helper');
        
        // TODO
        // - Allow configurable priority
        // - Allow *.php templates
        
        $viewsBySuffix = array(
        	'tpl' 	=> $smartyView, 
        	'phtml'	=> $defaultView 
        );
        
        // Iterates over view suffixes, trying to find a view script. 
        foreach ($viewsBySuffix as $suffix => $view) {
        	
	        $viewRenderer->setViewSuffix($suffix);
	        $script = $viewRenderer->getViewScript();
	        
	        if ($view->getScriptPath($script)) {
	        	
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
    
    private function initResponseSegment($viewRenderer) {
    	
    	$namespace = 
        	$this->getActionController()->getInvokeArg('bootstrap')->getOption('appnamespace');
        	
    	$request = $this->getActionController()->getRequest();
		if ($request->getModuleName() == 'hooks') {
			$viewRenderer->setResponseSegment($namespace . '-' . $request->getActionName());
		}
		
    }
    
}