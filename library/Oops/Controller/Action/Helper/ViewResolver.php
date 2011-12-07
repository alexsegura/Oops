<?php

class Oops_Controller_Action_Helper_ViewResolver extends Zend_Controller_Action_Helper_Abstract {
	
    public function preDispatch() {
		
        $viewRenderer = Zend_Controller_Action_HelperBroker :: getStaticHelper('viewRenderer');
        
        $defaultView = $viewRenderer->view;
        $smartyView	 = new Oops_View_Smarty();
        $smartyView->addScriptPath($defaultView->getScriptPaths());
        
        // TODO
        // Move this in another place !
        $defaultView->addHelperPath('Oops/View/Helper', 'Oops_View_Helper');
        $smartyView->addHelperPath('Oops/View/Helper', 'Oops_View_Helper');
        
        $viewsBySuffix = array(
        	'tpl' 	=> $smartyView, 
        	'phtml'	=> $defaultView 
        );
        
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
		if ($request->getModuleName() == 'front-office') {
			$viewRenderer->setResponseSegment($namespace . '-' . $request->getActionName());
		}
		
    }
    
}