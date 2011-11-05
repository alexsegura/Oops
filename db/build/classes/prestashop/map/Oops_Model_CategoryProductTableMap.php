<?php



/**
 * This class defines the structure of the 'djland_category_product' table.
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
class Oops_Model_CategoryProductTableMap extends TableMap
{

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'prestashop.map.Oops_Model_CategoryProductTableMap';

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
		$this->setName(_DB_PREFIX_ . 'djland_category_product');
		$this->setPhpName('CategoryProduct');
		$this->setClassname('Oops_Model_CategoryProduct');
		$this->setPackage('prestashop');
		$this->setUseIdGenerator(false);
		// columns
		$this->addForeignPrimaryKey('ID_CATEGORY', 'IdCategory', 'INTEGER' , 'djland_category', 'ID_CATEGORY', true, 10, null);
		$this->addForeignPrimaryKey('ID_PRODUCT', 'IdProduct', 'INTEGER' , 'djland_product', 'ID_PRODUCT', true, 10, null);
		$this->addColumn('POSITION', 'Position', 'INTEGER', true, 10, 0);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
		$this->addRelation('Product', 'Oops_Model_Product', RelationMap::MANY_TO_ONE, array('id_product' => 'id_product', ), null, null);
		$this->addRelation('Category', 'Oops_Model_Category', RelationMap::MANY_TO_ONE, array('id_category' => 'id_category', ), null, null);
	} // buildRelations()

} // Oops_Model_CategoryProductTableMap
