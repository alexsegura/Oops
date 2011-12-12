<?php



/**
 * This class defines the structure of the 'state' table.
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
class Oops_Db_StateTableMap extends TableMap
{

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'prestashop.map.Oops_Db_StateTableMap';

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
		$this->setName(_DB_PREFIX_ . 'state');
		$this->setPhpName('State');
		$this->setClassname('Oops_Db_State');
		$this->setPackage('prestashop');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID_STATE', 'IdState', 'INTEGER', true, 10, null);
		$this->addColumn('ID_COUNTRY', 'IdCountry', 'INTEGER', true, null, null);
		$this->addColumn('ID_ZONE', 'IdZone', 'INTEGER', true, null, null);
		$this->addColumn('NAME', 'Name', 'VARCHAR', true, 64, null);
		$this->addColumn('ISO_CODE', 'IsoCode', 'CHAR', true, 4, null);
		$this->addColumn('TAX_BEHAVIOR', 'TaxBehavior', 'SMALLINT', true, 1, 0);
		$this->addColumn('ACTIVE', 'Active', 'BOOLEAN', true, 1, false);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
	} // buildRelations()

} // Oops_Db_StateTableMap
