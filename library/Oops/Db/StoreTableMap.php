<?php



/**
 * This class defines the structure of the 'store' table.
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
class Oops_Db_StoreTableMap extends TableMap
{

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'prestashop.map.Oops_Db_StoreTableMap';

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
		$this->setName(_DB_PREFIX_ . 'store');
		$this->setPhpName('Store');
		$this->setClassname('Oops_Db_Store');
		$this->setPackage('prestashop');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID_STORE', 'IdStore', 'INTEGER', true, 10, null);
		$this->addColumn('ID_COUNTRY', 'IdCountry', 'INTEGER', true, 10, null);
		$this->addColumn('ID_STATE', 'IdState', 'INTEGER', false, 10, null);
		$this->addColumn('NAME', 'Name', 'VARCHAR', true, 128, null);
		$this->addColumn('ADDRESS1', 'Address1', 'VARCHAR', true, 128, null);
		$this->addColumn('ADDRESS2', 'Address2', 'VARCHAR', false, 128, null);
		$this->addColumn('CITY', 'City', 'VARCHAR', true, 64, null);
		$this->addColumn('POSTCODE', 'Postcode', 'VARCHAR', true, 12, null);
		$this->addColumn('LATITUDE', 'Latitude', 'FLOAT', false, 10, null);
		$this->addColumn('LONGITUDE', 'Longitude', 'FLOAT', false, 10, null);
		$this->addColumn('HOURS', 'Hours', 'VARCHAR', false, 254, null);
		$this->addColumn('PHONE', 'Phone', 'VARCHAR', false, 16, null);
		$this->addColumn('FAX', 'Fax', 'VARCHAR', false, 16, null);
		$this->addColumn('EMAIL', 'Email', 'VARCHAR', false, 128, null);
		$this->addColumn('NOTE', 'Note', 'LONGVARCHAR', false, null, null);
		$this->addColumn('ACTIVE', 'Active', 'BOOLEAN', true, 1, false);
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

} // Oops_Db_StoreTableMap
