<?php



/**
 * This class defines the structure of the 'djland_country' table.
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
class Oops_Model_CountryTableMap extends TableMap
{

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'prestashop.map.Oops_Model_CountryTableMap';

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
		$this->setName('djland_country');
		$this->setPhpName('Country');
		$this->setClassname('Oops_Model_Country');
		$this->setPackage('prestashop');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID_COUNTRY', 'IdCountry', 'INTEGER', true, 10, null);
		$this->addColumn('ID_ZONE', 'IdZone', 'INTEGER', true, 10, null);
		$this->addColumn('ID_CURRENCY', 'IdCurrency', 'INTEGER', true, 10, 0);
		$this->addColumn('ISO_CODE', 'IsoCode', 'VARCHAR', true, 3, null);
		$this->addColumn('CALL_PREFIX', 'CallPrefix', 'INTEGER', true, 10, 0);
		$this->addColumn('ACTIVE', 'Active', 'BOOLEAN', true, 1, false);
		$this->addColumn('CONTAINS_STATES', 'ContainsStates', 'BOOLEAN', true, 1, false);
		$this->addColumn('NEED_IDENTIFICATION_NUMBER', 'NeedIdentificationNumber', 'BOOLEAN', true, 1, false);
		$this->addColumn('NEED_ZIP_CODE', 'NeedZipCode', 'BOOLEAN', true, 1, true);
		$this->addColumn('ZIP_CODE_FORMAT', 'ZipCodeFormat', 'VARCHAR', true, 12, '');
		$this->addColumn('DISPLAY_TAX_LABEL', 'DisplayTaxLabel', 'BOOLEAN', true, 1, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
	} // buildRelations()

} // Oops_Model_CountryTableMap
