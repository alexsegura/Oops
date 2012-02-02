<?php

/**
 * Decorator for Oops_Form_Element_CategoriesTree. 
 * Draws a categories tree and animates it using jQuery Treeview. 
 * @author Alexandre Segura <mex.zktk@gmail.com>
 */
class Oops_Form_Decorator_CategoriesTree extends Zend_Form_Decorator_Abstract {
	
	private function appendChildren($rootCategory, $category, &$output) {
		
		if ($category->hasChildren()) {
			
			$style = '';
			
			$distance = $category->getLevel() - $rootCategory->getLevel();
			$displayChildren = true;
			if ($distance > 0) {
				$displayChildren = false;
				$style .= 'display: none;';
			}
			
			$lastChild = $category->getLastChild();
			
			$output .= '<ul style="'.$style.'">';
			foreach ($category->getChildren() as $child) {
				
				$hasChildren 	= $child->hasChildren();
				$isLastChild 	= $lastChild->getIdCategory() == $child->getIdCategory();
				
				$cssClass  = '';
				$cssClass .= $hasChildren ? ' expandable' : '';
				$cssClass .= $isLastChild && $hasChildren ? ' lastExpandable' : '';
				$cssClass .= $isLastChild && !$hasChildren ? ' last' : '';
				
				$output .= '<li class="'.$cssClass.'">';
				
					if ($hasChildren) {
						$cssClass  = 'hitarea';
						$cssClass .= ' expandable-hitarea';
						$cssClass .= $isLastChild ? ' lastExpandable-hitarea' : '';
						
						$output .= '<div class="'.$cssClass.'"></div>';
						
					}
					
					$url = $this->getElement()->getView()->url(array(
						'id_category' => $child->getIdCategory()
					));
					
					$output .= '<a href="' .$url. '">'.$child->getName().'</a>';
					
					// Append recursively
					$this->appendChildren($rootCategory, $child, $output);
				
				$output .= '</li>';
				
			}
			$output .= '</ul>';
			
		}
		
	} 
	
    public function buildInput() {
    	
        $element = $this->getElement();
        if (!$element instanceof Zend_Form_Element) {
            return $content;
        }
        if (null === $element->getView()) {
            return $content;
        }
        
        
        
        
        
        $name 	= $element->getName();
        $value 	= $element->getValue();
        
        $output = '';
        
        $output .= '<script type="text/javascript" src="../js/jquery/treeview/jquery.treeview.js"></script>';
		$output .= '<script type="text/javascript" src="../js/jquery/treeview/jquery.treeview.async.js"></script>';
		$output .= '<script type="text/javascript" src="../js/jquery/treeview/jquery.treeview.edit.js"></script>';
		$output .= '<link type="text/css" rel="stylesheet" href="../css/jquery.treeview.css">';
		
		// TODO Force a CSS id
		$output .= '<script type="text/javascript">';
		$output .= '$(document).ready(function() {
			$("#tree").treeview({
				collapsed	: true,
				prerendered	: true, 
				animated	: "fast"
				/* 
				control		: "#sidetreecontrol",
				persist		: "location"
				*/
			});
		});';
		$output .= '</script>';
		
		$rootCategoryId = $element->getRoot();
		if (!empty($rootCategoryId)) {
			$root = Oops_Db_CategoryPeer :: retrieveByPk($rootCategoryId);
		} else {
			$root = Oops_Db_CategoryPeer :: retrieveRoot();
		}
		
		$output .= '<ul class="treeview" id="tree">';
		
			$url = $this->getElement()->getView()->url(array(
				'id_category' => $root->getIdCategory()
			));
			$output .= '<li class="last lastCollapsable">';
			$output .= '<div class="hitarea lastCollapsable-hitarea"></div>';
			$output .= '<a href="' .$url. '">' . $root->getName() . '</a>';
		
			$this->appendChildren($root, $root, $output);
		
		$output .= '</ul>';
		
		return $output;
		
    }
 
    public function buildErrors() {
        $element  = $this->getElement();
        $messages = $element->getMessages();
        if (empty($messages)) {
            return '';
        }
        return '<div class="errors">' .
               $element->getView()->formErrors($messages) . '</div>';
    }
 
    public function buildDescription() {
        return '';
    }
 	
    public function render($content) {
		
        $separator = $this->getSeparator();
        $placement = $this->getPlacement();
        $input     = $this->buildInput();
        $errors    = ''; // $this->buildErrors();
        $desc      = $this->buildDescription();
 		
        $output = $input;
 
        switch ($placement) {
            case (self::PREPEND):
                return $output . $separator . $content;
            case (self::APPEND):
            default:
                return $content . $separator . $output;
        }
        
    }
}
