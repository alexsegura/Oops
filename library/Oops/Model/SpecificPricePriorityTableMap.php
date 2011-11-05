<?php



/**
 * This class defines the structure of the 'djland_specific_price_priority' table.
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
class Oops_Model_SpecificPricePriorityTableMap extends TableMap
{

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'prestashop.map.Oops_Model_SpecificPricePriorityTableMap';

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
		$this->setName('djland_specific_price_priority');
		$this->setPhpName('SpecificPricePriority');
		$this->setClassname('Oops_Model_SpecificPricePriority');
		$this->setPackage('prestashop');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID_SPECIFIC_PRICE_PRIORITY', 'IdSpecificPricePriority', 'INTEGER', true, null, null);
		$this->addPrimaryKey('ID_PRODUCT', 'IdProduct', 'INTEGER', true, null, null);
		$this->addColumn('PRIORITY', 'Priority', 'VARCHAR', true, 80, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
	} // buildRelations()

} // Oops_Model_SpecificPricePriorityTableMap
