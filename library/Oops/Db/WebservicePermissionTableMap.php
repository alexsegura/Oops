<?php



/**
 * This class defines the structure of the 'webservice_permission' table.
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
class Oops_Db_WebservicePermissionTableMap extends TableMap
{

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'prestashop.map.Oops_Db_WebservicePermissionTableMap';

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
		$this->setName(_DB_PREFIX_ . 'webservice_permission');
		$this->setPhpName('WebservicePermission');
		$this->setClassname('Oops_Db_WebservicePermission');
		$this->setPackage('prestashop');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID_WEBSERVICE_PERMISSION', 'IdWebservicePermission', 'INTEGER', true, null, null);
		$this->addColumn('RESOURCE', 'Resource', 'VARCHAR', true, 50, null);
		$this->addColumn('METHOD', 'Method', 'CHAR', true, null, null);
		$this->addColumn('ID_WEBSERVICE_ACCOUNT', 'IdWebserviceAccount', 'INTEGER', true, null, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
	} // buildRelations()

} // Oops_Db_WebservicePermissionTableMap
