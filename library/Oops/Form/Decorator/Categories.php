<?php

class Oops_Form_Decorator_Categories extends Zend_Form_Decorator_Abstract {
	
    public function buildInput() {
    	
        $element = $this->getElement();
        if (!$element instanceof Zend_Form_Element) {
            return $content;
        }
        if (null === $element->getView()) {
            return $content;
        }
        
        $root = Oops_Db_CategoryPeer :: retrieveRoot();
        
        $name 	= $element->getName();
        $value 	= $element->getValue();
        
        $output = '';
        
        $output .= '<script type="text/javascript" src="../js/jquery/treeview/jquery.treeview.js"></script>';
		$output .= '<script type="text/javascript" src="../js/jquery/treeview/jquery.treeview.async.js"></script>';
		$output .= '<script type="text/javascript" src="../js/jquery/treeview/jquery.treeview.edit.js"></script>';
		$output .= '<script type="text/javascript" src="../js/admin-categories-tree.js"></script>';
		
		$output .= '<link type="text/css" rel="stylesheet" href="../css/jquery.treeview.css">';
		
		$output .= '<script type="text/javascript">';
			$output .= 'var inputName = "' .$name. '";';
			$output .= 'var selectedCat = "' . implode(',', $value) . '";';
		$output .= '</script>';
		$output .= '<script type="text/javascript">';
			$output .= 'var selectedLabel = "s&eacute;lectionn&eacute;e(s)";';
			$output .= 'var home = "Accueil";';
		$output .= '</script>';
        
		foreach ($value as $categoryId) {
        	$output .= '<input type="hidden" name="' . $name .'[]" value="'.$categoryId.'" >';
		}
        
		$checked = in_array('1', $value) ? 'checked="checked"' : '';
        $output .= '<ul id="categories-treeview" class="filetree">';
		$output .= '<li id="1" class="hasChildren">';
		$output .= '<span class="folder">';
		$output .= '<input type="checkbox" name="' . $name .'[]" value="1" onclick="clickOnCategoryBox($(this));" '.$checked.' />';
		$output .= ' Accueil';
		$output .= '</span>';
		$output .= '<ul>';
		$output .= '<li><span class="placeholder">&nbsp;</span></li>';	
		$output .= '</ul>';
		$output .= '</li>';
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
