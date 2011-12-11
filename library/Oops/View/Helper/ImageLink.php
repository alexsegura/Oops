<?php

class Oops_View_Helper_ImageLink {
	
	public function imageLink($product) {
		
		global $protocol_content;
		
		$link 			= new Link();
		$filterByCover 	= Oops_Db_ImageQuery :: create()->filterByCover(1);
		$images 		= $product->getImages($filterByCover);
		
		if ($images->count() >= 1) {
			
			$image = $images->get(0);
			
			$lnk = $link->getImageLink($product->getLinkRewrite(), 
				$product->getIdProduct() . '-' . $image->getIdImage(), 'medium');
			
			// FIXME
			// The LinkCore class uses $protocol_content, which is not
			// always defined when FrontController is not used (case on 
			// ajax requests). The piece of code below makes sure the 
			// protocol is always prepended to the link. 
			$protocol = Tools :: getProtocol();
			if (null == $protocol_content && false === strpos($lnk, $protocol)) {
				$lnk = $protocol . $lnk;
			}
				
			return $lnk;
			
		}
		
		return "";
		
	}
	
}