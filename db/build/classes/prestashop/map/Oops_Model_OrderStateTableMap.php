<?php



/**
 * This class defines the structure of the 'djland_order_state' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator.prestashop.map
 */
class Oops_Model_OrderStateTableMap extends TableMap
{

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'prestashop.map.Oops_Model_OrderStateTableMap';

	/**
	 * Initialize the table attributes, columns and validators
	 * Relations are not initialized by this method since they are lazy loaded
	 *
	 * @return     void
	 * @throws     PropelException
	 */
	public function initialize()
	{
		// attributes
		$this->setName(_DB_PREFIX_ . 'djland_order_state');
		$this->setPhpName('OrderState');
		$this->setClassname('Oops_Model_OrderState');
		$this->setPackage('prestashop');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID_ORDER_STATE', 'IdOrderState', 'INTEGER', true, 10, null);
		$this->addColumn('INVOICE', 'Invoice', 'BOOLEAN', false, 1, false);
		$this->addColumn('SEND_EMAIL', 'SendEmail', 'BOOLEAN', true, 1, false);
		$this->addColumn('COLOR', 'Color', 'VARCHAR', false, 32, null);
		$this->addColumn('UNREMOVABLE', 'Unremovable', 'BOOLEAN', true, 1, null);
		$this->addColumn('HIDDEN', 'Hidden', 'BOOLEAN', true, 1, false);
		$this->addColumn('LOGABLE', 'Logable', 'BOOLEAN', true, 1, false);
		$this->addColumn('DELIVERY', 'Delivery', 'BOOLEAN', true, 1, false);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
	} // buildRelations()

} // Oops_Model_OrderStateTableMap
