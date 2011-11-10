<?php



/**
 * This class defines the structure of the 'group_reduction' table.
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
class Oops_Model_GroupReductionTableMap extends TableMap
{

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'prestashop.map.Oops_Model_GroupReductionTableMap';

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
		$this->setName(_DB_PREFIX_ . 'group_reduction');
		$this->setPhpName('GroupReduction');
		$this->setClassname('Oops_Model_GroupReduction');
		$this->setPackage('prestashop');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID_GROUP_REDUCTION', 'IdGroupReduction', 'SMALLINT', true, 8, null);
		$this->addColumn('ID_GROUP', 'IdGroup', 'INTEGER', true, 10, null);
		$this->addColumn('ID_CATEGORY', 'IdCategory', 'INTEGER', true, 10, null);
		$this->addColumn('REDUCTION', 'Reduction', 'DECIMAL', true, 4, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
	} // buildRelations()

} // Oops_Model_GroupReductionTableMap
