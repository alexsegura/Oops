<?php



/**
 * Skeleton subclass for representing a row from the 'djland_product' table.
 *
 * 
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    propel.generator.prestashop
 */
class Oops_Model_Product extends Oops_Model_Base_Product {
	
	public function __get($name) {
		if ($name == 'name') {
			return $this->getName();
		} else if ($name == 'description') {
			return $this->getDescription();
		}
	}
	
	public function setLocale($locale = 'en_EN') {
		
		$localeObj = new Zend_Locale($locale);
		$languages = Language :: getLanguages(false);
		foreach ($languages as $language) {
			if ($language['iso_code'] == $localeObj->getLanguage()) {
				$this->currentLocale = $language['id_lang'];
				break;
			}
		}
		
		return $this;
	}
	
} // Oops_Model_Product
