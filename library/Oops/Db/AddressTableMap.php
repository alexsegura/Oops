<?php



/**
 * This class defines the structure of the 'address' table.
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
class Oops_Db_AddressTableMap extends TableMap
{

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'prestashop.map.Oops_Db_AddressTableMap';

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
		$this->setName(_DB_PREFIX_ . 'address');
		$this->setPhpName('Address');
		$this->setClassname('Oops_Db_Address');
		$this->setPackage('prestashop');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID_ADDRESS', 'IdAddress', 'INTEGER', true, 10, null);
		$this->addColumn('ID_COUNTRY', 'IdCountry', 'INTEGER', true, 10, null);
		$this->addColumn('ID_STATE', 'IdState', 'INTEGER', false, 10, null);
		$this->addColumn('ID_CUSTOMER', 'IdCustomer', 'INTEGER', true, 10, 0);
		$this->addColumn('ID_MANUFACTURER', 'IdManufacturer', 'INTEGER', true, 10, 0);
		$this->addColumn('ID_SUPPLIER', 'IdSupplier', 'INTEGER', true, 10, 0);
		$this->addColumn('ALIAS', 'Alias', 'VARCHAR', true, 32, null);
		$this->addColumn('COMPANY', 'Company', 'VARCHAR', false, 32, null);
		$this->addColumn('LASTNAME', 'Lastname', 'VARCHAR', true, 32, null);
		$this->addColumn('FIRSTNAME', 'Firstname', 'VARCHAR', true, 32, null);
		$this->addColumn('ADDRESS1', 'Address1', 'VARCHAR', true, 128, null);
		$this->addColumn('ADDRESS2', 'Address2', 'VARCHAR', false, 128, null);
		$this->addColumn('POSTCODE', 'Postcode', 'VARCHAR', false, 12, null);
		$this->addColumn('CITY', 'City', 'VARCHAR', true, 64, null);
		$this->addColumn('OTHER', 'Other', 'LONGVARCHAR', false, null, null);
		$this->addColumn('PHONE', 'Phone', 'VARCHAR', false, 16, null);
		$this->addColumn('PHONE_MOBILE', 'PhoneMobile', 'VARCHAR', false, 16, null);
		$this->addColumn('VAT_NUMBER', 'VatNumber', 'VARCHAR', false, 32, null);
		$this->addColumn('DNI', 'Dni', 'VARCHAR', false, 16, null);
		$this->addColumn('DATE_ADD', 'DateAdd', 'TIMESTAMP', true, null, null);
		$this->addColumn('DATE_UPD', 'DateUpd', 'TIMESTAMP', true, null, null);
		$this->addColumn('ACTIVE', 'Active', 'BOOLEAN', true, 1, true);
		$this->addColumn('DELETED', 'Deleted', 'BOOLEAN', true, 1, false);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
	} // buildRelations()

} // Oops_Db_AddressTableMap
