<?php



/**
 * This class defines the structure of the 'customer_message' table.
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
class Oops_Db_CustomerMessageTableMap extends TableMap
{

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'prestashop.map.Oops_Db_CustomerMessageTableMap';

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
		$this->setName(_DB_PREFIX_ . 'customer_message');
		$this->setPhpName('CustomerMessage');
		$this->setClassname('Oops_Db_CustomerMessage');
		$this->setPackage('prestashop');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID_CUSTOMER_MESSAGE', 'IdCustomerMessage', 'INTEGER', true, 10, null);
		$this->addColumn('ID_CUSTOMER_THREAD', 'IdCustomerThread', 'INTEGER', false, null, null);
		$this->addColumn('ID_EMPLOYEE', 'IdEmployee', 'INTEGER', false, 10, null);
		$this->addColumn('MESSAGE', 'Message', 'LONGVARCHAR', true, null, null);
		$this->addColumn('FILE_NAME', 'FileName', 'VARCHAR', false, 18, null);
		$this->addColumn('IP_ADDRESS', 'IpAddress', 'INTEGER', false, null, null);
		$this->addColumn('USER_AGENT', 'UserAgent', 'VARCHAR', false, 128, null);
		$this->addColumn('DATE_ADD', 'DateAdd', 'TIMESTAMP', true, null, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
	} // buildRelations()

} // Oops_Db_CustomerMessageTableMap
