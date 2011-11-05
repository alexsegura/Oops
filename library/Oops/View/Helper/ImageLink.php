<?php

class Oops_View_Helper_ImageLink {
	
	public function imageLink($product) {
		
		$link 			= new Link();
		$filterByCover 	= Oops_Model_ImageQuery :: create()->filterByCover(1);
		$image 			= $product->getImages($filterByCover)->get(0);
		
		return $link->getImageLink($product->getLinkRewrite(), 
			$product->getIdProduct() . '-' . $image->getIdImage(), 'medium');
		
	}
	
}