<?php



/**
 * This class defines the structure of the 'djland_order_slip' table.
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
class Oops_Model_OrderSlipTableMap extends TableMap
{

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'prestashop.map.Oops_Model_OrderSlipTableMap';

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
		$this->setName('djland_order_slip');
		$this->setPhpName('OrderSlip');
		$this->setClassname('Oops_Model_OrderSlip');
		$this->setPackage('prestashop');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID_ORDER_SLIP', 'IdOrderSlip', 'INTEGER', true, 10, null);
		$this->addColumn('CONVERSION_RATE', 'ConversionRate', 'DECIMAL', true, 13, 1);
		$this->addColumn('ID_CUSTOMER', 'IdCustomer', 'INTEGER', true, 10, null);
		$this->addColumn('ID_ORDER', 'IdOrder', 'INTEGER', true, 10, null);
		$this->addColumn('SHIPPING_COST', 'ShippingCost', 'TINYINT', true, 3, 0);
		$this->addColumn('DATE_ADD', 'DateAdd', 'TIMESTAMP', true, null, null);
		$this->addColumn('DATE_UPD', 'DateUpd', 'TIMESTAMP', true, null, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
	} // buildRelations()

} // Oops_Model_OrderSlipTableMap
