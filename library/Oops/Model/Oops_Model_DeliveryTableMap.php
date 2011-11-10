<?php



/**
 * This class defines the structure of the 'delivery' table.
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
class Oops_Model_DeliveryTableMap extends TableMap
{

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'prestashop.map.Oops_Model_DeliveryTableMap';

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
		$this->setName(_DB_PREFIX_ . 'delivery');
		$this->setPhpName('Delivery');
		$this->setClassname('Oops_Model_Delivery');
		$this->setPackage('prestashop');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID_DELIVERY', 'IdDelivery', 'INTEGER', true, 10, null);
		$this->addColumn('ID_CARRIER', 'IdCarrier', 'INTEGER', true, 10, null);
		$this->addColumn('ID_RANGE_PRICE', 'IdRangePrice', 'INTEGER', false, 10, null);
		$this->addColumn('ID_RANGE_WEIGHT', 'IdRangeWeight', 'INTEGER', false, 10, null);
		$this->addColumn('ID_ZONE', 'IdZone', 'INTEGER', true, 10, null);
		$this->addColumn('PRICE', 'Price', 'DECIMAL', true, 17, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
	} // buildRelations()

} // Oops_Model_DeliveryTableMap
