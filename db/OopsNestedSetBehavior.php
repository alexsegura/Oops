<?php

require_once 'behavior/nestedset/NestedSetBehavior.php';
require_once 'OopsNestedSetBehaviorPeerBuilderModifier.php';

class OopsNestedSetBehavior extends NestedSetBehavior
{
	private $wrapped;
	
	public function __construct(NestedSetBehavior $behavior) {
		$this->wrapped = $behavior;
	}
	
	public function getColumnForParameter($name) {
		return $this->wrapped->getColumnForParameter($name);
	}
	
	public function getTable() {
		return $this->wrapped->getTable();
	}

	public function modifyTable()
	{
		return $this->wrapped->modifyTable();
	}

	public function getObjectBuilderModifier()
	{
		return $this->wrapped->getObjectBuilderModifier();
	}

	public function getQueryBuilderModifier()
	{
		return $this->wrapped->getQueryBuilderModifier();
	}

	public function getPeerBuilderModifier()
	{
		return new OopsNestedSetBehaviorPeerBuilderModifier($this);
	}

	public function useScope() {
		return  $this->wrapped->useScope();
	}

}