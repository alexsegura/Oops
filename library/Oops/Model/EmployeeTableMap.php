<?php



/**
 * This class defines the structure of the 'djland_employee' table.
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
class Oops_Model_EmployeeTableMap extends TableMap
{

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'prestashop.map.Oops_Model_EmployeeTableMap';

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
		$this->setName('djland_employee');
		$this->setPhpName('Employee');
		$this->setClassname('Oops_Model_Employee');
		$this->setPackage('prestashop');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID_EMPLOYEE', 'IdEmployee', 'INTEGER', true, 10, null);
		$this->addColumn('ID_PROFILE', 'IdProfile', 'INTEGER', true, 10, null);
		$this->addColumn('ID_LANG', 'IdLang', 'INTEGER', true, 10, 0);
		$this->addColumn('LASTNAME', 'Lastname', 'VARCHAR', true, 32, null);
		$this->addColumn('FIRSTNAME', 'Firstname', 'VARCHAR', true, 32, null);
		$this->addColumn('EMAIL', 'Email', 'VARCHAR', true, 128, null);
		$this->addColumn('PASSWD', 'Passwd', 'VARCHAR', true, 32, null);
		$this->addColumn('LAST_PASSWD_GEN', 'LastPasswdGen', 'TIMESTAMP', true, null, 'CURRENT_TIMESTAMP');
		$this->addColumn('STATS_DATE_FROM', 'StatsDateFrom', 'DATE', false, null, null);
		$this->addColumn('STATS_DATE_TO', 'StatsDateTo', 'DATE', false, null, null);
		$this->addColumn('BO_COLOR', 'BoColor', 'VARCHAR', false, 32, null);
		$this->addColumn('BO_THEME', 'BoTheme', 'VARCHAR', false, 32, null);
		$this->addColumn('BO_UIMODE', 'BoUimode', 'CHAR', false, null, 'click');
		$this->addColumn('ACTIVE', 'Active', 'BOOLEAN', true, 1, false);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
	} // buildRelations()

} // Oops_Model_EmployeeTableMap
