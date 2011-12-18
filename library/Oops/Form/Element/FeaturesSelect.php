<?php

class Oops_Form_Element_FeaturesSelect extends Zend_Form_Element_Select {
	
	public function init() {
		
		$features = Oops_Db_FeatureQuery :: create()->find();
		
		$this->addMultiOption(null, '--');
		
		foreach ($features as $feature) {
			$this->addMultiOption($feature->getIdFeature(), $feature->getName());
		}
		
	}
	
}