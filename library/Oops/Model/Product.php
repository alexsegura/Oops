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
		}
	}
	
	
	public function getName($lang = null) {
		
		if ($lang == null) {
			$lang = new Oops_Model_Lang();
			$lang->setIdLang(2);
		}
		
		$productLangQuery = Oops_Model_ProductLangQuery :: create()->filterByLang($lang);
		return $this->getProductLangs($productLangQuery)->get(0)->getName();
		
	}
	
	public function getLinkRewrite($lang = null) {
		
		if ($lang == null) {
			$lang = new Oops_Model_Lang();
			$lang->setIdLang(2);
		}
		
		$productLangQuery = Oops_Model_ProductLangQuery :: create()->filterByLang($lang);
		return $this->getProductLangs($productLangQuery)->get(0)->getLinkRewrite();
		
	}
	
} // Oops_Model_Product
