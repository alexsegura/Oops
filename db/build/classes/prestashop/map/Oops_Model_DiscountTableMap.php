<?php



/**
 * This class defines the structure of the 'djland_discount' table.
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
class Oops_Model_DiscountTableMap extends TableMap
{

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'prestashop.map.Oops_Model_DiscountTableMap';

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
		$this->setName(_DB_PREFIX_ . 'djland_discount');
		$this->setPhpName('Discount');
		$this->setClassname('Oops_Model_Discount');
		$this->setPackage('prestashop');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID_DISCOUNT', 'IdDiscount', 'INTEGER', true, 10, null);
		$this->addColumn('ID_DISCOUNT_TYPE', 'IdDiscountType', 'INTEGER', true, 10, null);
		$this->addColumn('BEHAVIOR_NOT_EXHAUSTED', 'BehaviorNotExhausted', 'TINYINT', false, 3, 1);
		$this->addColumn('ID_CUSTOMER', 'IdCustomer', 'INTEGER', true, 10, null);
		$this->addColumn('ID_GROUP', 'IdGroup', 'INTEGER', true, 10, 0);
		$this->addColumn('ID_CURRENCY', 'IdCurrency', 'INTEGER', true, 10, 0);
		$this->addColumn('NAME', 'Name', 'VARCHAR', true, 32, null);
		$this->addColumn('VALUE', 'Value', 'DECIMAL', true, 17, 0);
		$this->addColumn('QUANTITY', 'Quantity', 'INTEGER', true, 10, 0);
		$this->addColumn('QUANTITY_PER_USER', 'QuantityPerUser', 'INTEGER', true, 10, 1);
		$this->addColumn('CUMULABLE', 'Cumulable', 'BOOLEAN', true, 1, false);
		$this->addColumn('CUMULABLE_REDUCTION', 'CumulableReduction', 'BOOLEAN', true, 1, false);
		$this->addColumn('DATE_FROM', 'DateFrom', 'TIMESTAMP', true, null, null);
		$this->addColumn('DATE_TO', 'DateTo', 'TIMESTAMP', true, null, null);
		$this->addColumn('MINIMAL', 'Minimal', 'DECIMAL', false, 17, null);
		$this->addColumn('ACTIVE', 'Active', 'BOOLEAN', true, 1, false);
		$this->addColumn('CART_DISPLAY', 'CartDisplay', 'BOOLEAN', true, 1, false);
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

} // Oops_Model_DiscountTableMap
