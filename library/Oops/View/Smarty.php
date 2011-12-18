<?php

/**
 * View implementation of Smarty. 
 * @author Alexandre Segura <mex.zktk@gmail.com>
 */
class Oops_View_Smarty extends Zend_View_Abstract {
	
	private $smarty;
	
	public function __construct() {
		global $smarty;
		$this->smarty = $smarty;
	}
	
	public function getEngine() {
        return $this->smarty;
    }
    
    public function addScriptPath($path) {
    	
    	parent :: addScriptPath($path);
    	
    	if (method_exists($this->smarty, 'addTemplateDir')) {
    		$this->smarty->addTemplateDir($path);
    	} else {
    		// FIXME
	    	// Quick'n'dirty compatibility patch for Smarty V2
	    	// Not sure it is safe to do this on the front-office
    		$this->smarty->template_dir = $path;
    	}
    	
        return $this;
    }
    
    public function __set($key, $val) {
        $this->smarty->assign($key, $val);
    }
 
    public function __isset($key) {
        return (null !== $this->smarty->get_template_vars($key));
    }
 
    public function __unset($key) {
        $this->smarty->clear_assign($key);
    }
 
    public function assign($spec, $value = null) {
        if (is_array($spec)) {
            $this->smarty->assign($spec);
            return;
        }
        $this->smarty->assign($spec, $value);
    }
 
    public function clearVars() {
        $this->smarty->clear_all_assign();
    }
 
    public function render($name) {
        return $this->smarty->fetch($name);
    }
	
	protected function _run() {
		// Does nothing
	}
	
}