<?php

require_once 'model/Table.php';
require_once 'OopsNestedSetBehavior.php';

$class 	= "class OopsTable extends Table {";

$class .= "
	
	private \$wrapped;
	
	public function __construct(\$table) {
		\$this->wrapped = \$table;
	}
	
	public function getBehaviors() {
		
		\$behaviors = \$this->wrapped->getBehaviors();
		
		foreach (\$behaviors as \$key => \$behavior) {
			if (\$behavior->getName() == 'nested_set') {
				\$behaviors[\$key] = new OopsNestedSetBehavior(\$behavior);
			}
		}
		
		return \$behaviors;
		
	}
";

$tableClass = new ReflectionClass('Table');
$methods = $tableClass->getMethods(ReflectionMethod::IS_PUBLIC);

foreach ($methods as $method) {
	
	if ($method->getName() != 'getBehaviors' && $method->getName() != '__construct') {
	
		$parameters = $method->getParameters();
		$parameterNames = array();
		$varNames = array();
		foreach ($parameters as $parameter) {
			
			$paramName = '';
			$parameterClass = $parameter->getClass();
			if (null != $parameterClass) {
				$paramName .= $parameterClass->getName() . ' ';
			}
			
			$paramName .= "\$" . $parameter->getName();
			
			if ($parameter->isOptional()) {
				$paramName .= " = " . var_export($parameter->getDefaultValue(), 1);
			}
			
			$parameterNames[] = $paramName;
			$varNames[] = "\$" . $parameter->getName();
			
		}
		
		$args = implode($parameterNames, ',');
		$vars = implode($varNames, ',');
		
		$class .= "public function " . $method->getName() . "(" .$args. "){
			return  \$this->wrapped->" .$method->getName(). "(" .$vars. ");
		}
		
		";
		
	}
}

$class .= "}";

eval($class);
