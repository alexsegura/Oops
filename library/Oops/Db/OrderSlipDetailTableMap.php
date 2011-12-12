<?php



/**
 * This class defines the structure of the 'order_slip_detail' table.
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
class Oops_Db_OrderSlipDetailTableMap extends TableMap
{

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'prestashop.map.Oops_Db_OrderSlipDetailTableMap';

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
		$this->setName(_DB_PREFIX_ . 'order_slip_detail');
		$this->setPhpName('OrderSlipDetail');
		$this->setClassname('Oops_Db_OrderSlipDetail');
		$this->setPackage('prestashop');
		$this->setUseIdGenerator(false);
		// columns
		$this->addPrimaryKey('ID_ORDER_SLIP', 'IdOrderSlip', 'INTEGER', true, 10, null);
		$this->addPrimaryKey('ID_ORDER_DETAIL', 'IdOrderDetail', 'INTEGER', true, 10, null);
		$this->addColumn('PRODUCT_QUANTITY', 'ProductQuantity', 'INTEGER', true, 10, 0);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
	} // buildRelations()

} // Oops_Db_OrderSlipDetailTableMap
