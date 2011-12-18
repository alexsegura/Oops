<?php

class Oops_Form_Element_CategoriesSelect extends Zend_Form_Element_Select {
	
	public function init() {
		
		$root = Oops_Db_CategoryQuery :: create()->findRoot();
		
		$this->addMultiOption($root->getIdCategory(), $root->getName());
		
		foreach ($root->getChildren() as $child) {
			$this->addOptionRecursive($child);
		}
		
	}
	
	private function addOptionRecursive($category)  {
		
		$name = str_pad('', $category->getLevel() * 4, '-') . ' ' . $category->getName();
		
		$this->addMultiOption($category->getIdCategory(), $name);
		foreach ($category->getChildren() as $child) {
			$this->addOptionRecursive($child);
		}
	}
	
}