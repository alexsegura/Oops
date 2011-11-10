<?php

require_once 'behavior/nestedset/NestedSetBehaviorPeerBuilderModifier.php';

class OopsNestedSetBehaviorPeerBuilderModifier extends NestedSetBehaviorPeerBuilderModifier {
	
	public function staticAttributes($builder) {
		
		$script = parent :: staticAttributes($builder);
		
		$tableName = $this->table->getName();
		
		$script = str_replace(
			"const LEFT_COL = '" . $tableName . '.' . $this->getColumnConstant('left_column') . "';", 
			"const LEFT_COL = '" . $tableName . '.' . $this->getColumnConstant('left_column') . "';", $script);
		
		/*
		$script .= "
public static \$LEFT_COL = _DB_PREFIX_ . self :: LEFT_COL;
public static \$RIGHT_COL = _DB_PREFIX_ . self :: RIGHT_COL;
public static \$LEVEL_COL = _DB_PREFIX_ . self :: LEVEL_COL;
";

		if ($this->behavior->useScope()) {
			$script .= 	"
public static \$SCOPE_COL = _DB_PREFIX_ . self :: SCOPE_COL;
";
		}
		*/

		return $script;
		
	}
}