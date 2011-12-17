<?php

class Oops_View_Helper_ImageLink {
	
	public function imageLink($product) {
		
		$link 			= new Link();
		$filterByCover 	= Oops_Db_ImageQuery :: create()->filterByCover(1);
		$images 		= $product->getImages($filterByCover);
		
		if ($images->count() > 0) {
			
			$image = $images->get(0);
			
			$lnk = $link->getImageLink($product->getLinkRewrite(), 
				$product->getIdProduct() . '-' . $image->getIdImage(), 'medium');
			
			// FIXME
			// The LinkCore :: getImageLink uses $protocol_content, which is not
			// always defined when FrontController is not used (ex :ajax requests). 
			// The piece of code below makes sure the 
			// protocol is always prepended to the link. 
			global $protocol_content;
			$protocol = Tools :: getProtocol();
			if (null == $protocol_content && false === strpos($lnk, $protocol)) {
				$lnk = $protocol . $lnk;
			}
			
			return $lnk;
			
		}
		
		return "";
		
	}
	
}