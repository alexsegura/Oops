<?php



/**
 * This class defines the structure of the 'scene_products' table.
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
class Oops_Db_SceneProductsTableMap extends TableMap
{

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'prestashop.map.Oops_Db_SceneProductsTableMap';

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
		$this->setName(_DB_PREFIX_ . 'scene_products');
		$this->setPhpName('SceneProducts');
		$this->setClassname('Oops_Db_SceneProducts');
		$this->setPackage('prestashop');
		$this->setUseIdGenerator(false);
		// columns
		$this->addPrimaryKey('ID_SCENE', 'IdScene', 'INTEGER', true, 10, null);
		$this->addPrimaryKey('ID_PRODUCT', 'IdProduct', 'INTEGER', true, 10, null);
		$this->addPrimaryKey('X_AXIS', 'XAxis', 'INTEGER', true, 4, null);
		$this->addPrimaryKey('Y_AXIS', 'YAxis', 'INTEGER', true, 4, null);
		$this->addColumn('ZONE_WIDTH', 'ZoneWidth', 'INTEGER', true, 3, null);
		$this->addColumn('ZONE_HEIGHT', 'ZoneHeight', 'INTEGER', true, 3, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
	} // buildRelations()

} // Oops_Db_SceneProductsTableMap
