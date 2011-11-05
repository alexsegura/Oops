<?php



/**
 * This class defines the structure of the 'djland_contact' table.
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
class Oops_Model_ContactTableMap extends TableMap
{

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'prestashop.map.Oops_Model_ContactTableMap';

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
		$this->setName(_DB_PREFIX_ . 'djland_contact');
		$this->setPhpName('Contact');
		$this->setClassname('Oops_Model_Contact');
		$this->setPackage('prestashop');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID_CONTACT', 'IdContact', 'INTEGER', true, 10, null);
		$this->addColumn('EMAIL', 'Email', 'VARCHAR', true, 128, null);
		$this->addColumn('CUSTOMER_SERVICE', 'CustomerService', 'BOOLEAN', true, 1, false);
		$this->addColumn('POSITION', 'Position', 'TINYINT', true, 2, 0);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
	} // buildRelations()

} // Oops_Model_ContactTableMap
