<?php

class Oops_View_Helper_CategoryUrl {
	
	public function categoryUrl($category) {
		$link = new Link();
		return $link->getCategoryLink($category->getIdCategory());
	}
	
}