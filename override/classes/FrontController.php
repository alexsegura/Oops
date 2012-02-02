<?php

/**
 * FrontController override with layout support. 
 * 
 * @category   override/classes
 * @copyright  Copyright (c) 2011-2012 Alexandre Segura <mex.zktk@gmail.com>
 * @author     Alexandre Segura <mex.zktk@gmail.com>
 */
class FrontController extends FrontControllerCore {
	
	public function run() {
		
		// Add a layout.tpl file to your theme dir to trigger layout support
		if (file_exists(_PS_THEME_DIR_ . 'layout.tpl')) {
		
			ob_start();
			
			$this->init();
			$this->preProcess();
			$this->displayHeader();
			
			$header = ob_get_contents();
			ob_clean();
			
			$this->process();
			$this->displayContent();
			
			$content = ob_get_contents();
			ob_clean();
			
			$this->displayFooter();
			
			$footer = ob_get_contents();
			ob_clean();
			
			ob_end_clean();
			
			self :: $smarty->assign(array(
				'LAYOUT_HEADER' 	=> $header, 
				'LAYOUT_CONTENT' 	=> $content, 
				'LAYOUT_FOOTER' 	=> $footer
			));
			
			$pageName = self :: $smarty->get_template_vars('page_name');
			
			$defaultLayoutName 	= 'layout';
			$pageLayoutName 	= $defaultLayoutName . '-' . $pageName;
			
			$layoutName = $defaultLayoutName;
			
			if (file_exists(_PS_THEME_DIR_ . $pageLayoutName . '.tpl')) {
				$layoutName = $pageLayoutName;
			}
			
			return self :: $smarty->display(_PS_THEME_DIR_ . $layoutName . '.tpl');
			
		}
		
		parent :: run();
		
	}
	
}
