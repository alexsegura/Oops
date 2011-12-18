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
        
        $root = Oops_Db_CategoryQuery :: create()->findRoot();
        
        $value = $element->getValue();
        
        $output = '<ul>';
        
        	$output .= '<li class="collapsable">';
        	
				$output .= '<span class="folder">';
				$output .= '<input type="checkbox" name="categories[]" value="1"> ' . $root->getName();
				$output .= '</span>';
				$output .= '<ul>';
				foreach ($root->getChildren() as $child) {
					
					$checked = '';
					if (in_array($child->getIdCategory(), $value)) {
						$checked = 'checked="checked"';
					}
					
					$output .= '<li>';
					$output .= '<input type="checkbox" value="' .$child->getIdCategory(). '" name="categories[]" ' .$checked.'>';
					$output .= '<span class="category_label">'.$child->getName().'</span>';
					$output .= '</span>';
					$output .= '</li>';
					
				}
				$output .= '</ul>';
				
			$output .= '</li>';
			
        $output .= '<ul>';
        
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
 		
        /*
        $output = '<div id="tree" class="jstree-classic" style="font-size: 10px;">'
        		. '<ul>'
					. '<li class="jstree-open">'
					. '<a href="#">Accueil</a>'
						. '<ul>'
						. $input
						. '</ul>'
					. '</li>'
                . '</ul>'
                . '</div>';
        */
        
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
