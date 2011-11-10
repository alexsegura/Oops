<?php



/**
 * This class defines the structure of the 'log' table.
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
class Oops_Model_LogTableMap extends TableMap
{

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'prestashop.map.Oops_Model_LogTableMap';

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
		$this->setName(_DB_PREFIX_ . 'log');
		$this->setPhpName('Log');
		$this->setClassname('Oops_Model_Log');
		$this->setPackage('prestashop');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID_LOG', 'IdLog', 'INTEGER', true, 10, null);
		$this->addColumn('SEVERITY', 'Severity', 'BOOLEAN', true, 1, null);
		$this->addColumn('ERROR_CODE', 'ErrorCode', 'INTEGER', false, null, null);
		$this->addColumn('MESSAGE', 'Message', 'LONGVARCHAR', true, null, null);
		$this->addColumn('OBJECT_TYPE', 'ObjectType', 'VARCHAR', false, 32, null);
		$this->addColumn('OBJECT_ID', 'ObjectId', 'INTEGER', false, 10, null);
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

} // Oops_Model_LogTableMap
