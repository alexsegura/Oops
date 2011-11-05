<?php



/**
 * This class defines the structure of the 'djland_order_discount' table.
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
class Oops_Model_OrderDiscountTableMap extends TableMap
{

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'prestashop.map.Oops_Model_OrderDiscountTableMap';

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
		$this->setName(_DB_PREFIX_ . 'djland_order_discount');
		$this->setPhpName('OrderDiscount');
		$this->setClassname('Oops_Model_OrderDiscount');
		$this->setPackage('prestashop');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID_ORDER_DISCOUNT', 'IdOrderDiscount', 'INTEGER', true, 10, null);
		$this->addColumn('ID_ORDER', 'IdOrder', 'INTEGER', true, 10, null);
		$this->addColumn('ID_DISCOUNT', 'IdDiscount', 'INTEGER', true, 10, null);
		$this->addColumn('NAME', 'Name', 'VARCHAR', true, 32, null);
		$this->addColumn('VALUE', 'Value', 'DECIMAL', true, 17, 0);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
	} // buildRelations()

} // Oops_Model_OrderDiscountTableMap
