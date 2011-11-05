<?php



/**
 * This class defines the structure of the 'djland_alias' table.
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
class Oops_Model_AliasTableMap extends TableMap
{

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'prestashop.map.Oops_Model_AliasTableMap';

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
		$this->setName('djland_alias');
		$this->setPhpName('Alias');
		$this->setClassname('Oops_Model_Alias');
		$this->setPackage('prestashop');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID_ALIAS', 'IdAlias', 'INTEGER', true, 10, null);
		$this->addColumn('ALIAS', 'Alias', 'VARCHAR', true, 255, null);
		$this->addColumn('SEARCH', 'Search', 'VARCHAR', true, 255, null);
		$this->addColumn('ACTIVE', 'Active', 'BOOLEAN', true, 1, true);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
	} // buildRelations()

} // Oops_Model_AliasTableMap
