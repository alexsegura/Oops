<?php

require_once 'behavior/nestedset/NestedSetBehaviorPeerBuilderModifier.php';

class OopsNestedSetBehaviorPeerBuilderModifier extends NestedSetBehaviorPeerBuilderModifier {
	
	public function staticAttributes($builder) {
		
		$script = parent :: staticAttributes($builder);
		
		$script = str_replace(
			"const LEFT_COL = '" . $tableName . '.' . $this->getColumnConstant('left_column') . "';", 
			"const LEFT_COL = _DB_PREFIX_ . '" . $tableName . '.' . $this->getColumnConstant('left_column') . "';", $script);
		$script = str_replace(
			"const RIGHT_COL = '" . $tableName . '.' . $this->getColumnConstant('right_column') . "';", 
			"const RIGHT_COL = _DB_PREFIX_ . '" . $tableName . '.' . $this->getColumnConstant('right_column') . "';", $script);
		$script = str_replace(
			"const LEVEL_COL = '" . $tableName . '.' . $this->getColumnConstant('level_column') . "';", 
			"const LEVEL_COL = _DB_PREFIX_ . '" . $tableName . '.' . $this->getColumnConstant('level_column') . "';", $script);
		
		return $script;
		
	}
}