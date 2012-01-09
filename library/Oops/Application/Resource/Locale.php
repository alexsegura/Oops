<?php 

class Oops_Application_Resource_Locale extends Zend_Application_Resource_Locale {
    
    public function getLocale() {
    	
    	global $cookie;
    	
    	parent :: getLocale();
    	
    	$language = Language :: getIsoById($cookie->id_lang);
    	
    	$locale = new Zend_Locale($language);
    	
    	$translate = $this->getBootstrap()->getResource('translate');
    	$translate->setLocale($locale);
    	
        Zend_Registry::set(self::DEFAULT_REGISTRY_KEY, $locale);
        
    	return $locale;
    	
    }
    
}