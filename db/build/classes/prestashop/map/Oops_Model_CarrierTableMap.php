<?php



/**
 * This class defines the structure of the 'djland_carrier' table.
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
class Oops_Model_CarrierTableMap extends TableMap
{

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'prestashop.map.Oops_Model_CarrierTableMap';

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
		$this->setName(_DB_PREFIX_ . 'djland_carrier');
		$this->setPhpName('Carrier');
		$this->setClassname('Oops_Model_Carrier');
		$this->setPackage('prestashop');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID_CARRIER', 'IdCarrier', 'INTEGER', true, 10, null);
		$this->addColumn('ID_TAX_RULES_GROUP', 'IdTaxRulesGroup', 'INTEGER', false, 10, 0);
		$this->addColumn('NAME', 'Name', 'VARCHAR', true, 64, null);
		$this->addColumn('URL', 'Url', 'VARCHAR', false, 255, null);
		$this->addColumn('ACTIVE', 'Active', 'BOOLEAN', true, 1, false);
		$this->addColumn('DELETED', 'Deleted', 'BOOLEAN', true, 1, false);
		$this->addColumn('SHIPPING_HANDLING', 'ShippingHandling', 'BOOLEAN', true, 1, true);
		$this->addColumn('RANGE_BEHAVIOR', 'RangeBehavior', 'BOOLEAN', true, 1, false);
		$this->addColumn('IS_MODULE', 'IsModule', 'BOOLEAN', true, 1, false);
		$this->addColumn('IS_FREE', 'IsFree', 'BOOLEAN', true, 1, false);
		$this->addColumn('SHIPPING_EXTERNAL', 'ShippingExternal', 'BOOLEAN', true, 1, false);
		$this->addColumn('NEED_RANGE', 'NeedRange', 'BOOLEAN', true, 1, false);
		$this->addColumn('EXTERNAL_MODULE_NAME', 'ExternalModuleName', 'VARCHAR', false, 64, null);
		$this->addColumn('SHIPPING_METHOD', 'ShippingMethod', 'INTEGER', true, 2, 0);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
	} // buildRelations()

} // Oops_Model_CarrierTableMap
