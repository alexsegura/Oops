<?php

class Oops_View_Helper_ProductUrl {
	
	public function productUrl($product) {
		$link = new Link();
		return $link->getProductLink($product->getIdProduct());
	}
	
}