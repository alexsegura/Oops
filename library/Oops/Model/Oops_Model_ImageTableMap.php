<?php



/**
 * This class defines the structure of the 'djland_image' table.
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
class Oops_Model_ImageTableMap extends TableMap
{

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'prestashop.map.Oops_Model_ImageTableMap';

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
		$this->setName('djland_image');
		$this->setPhpName('Image');
		$this->setClassname('Oops_Model_Image');
		$this->setPackage('prestashop');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID_IMAGE', 'IdImage', 'INTEGER', true, 10, null);
		$this->addForeignKey('ID_PRODUCT', 'IdProduct', 'INTEGER', 'djland_product', 'ID_PRODUCT', true, 10, null);
		$this->addColumn('POSITION', 'Position', 'SMALLINT', true, 2, 0);
		$this->addColumn('COVER', 'Cover', 'BOOLEAN', true, 1, false);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
		$this->addRelation('Product', 'Oops_Model_Product', RelationMap::MANY_TO_ONE, array('id_product' => 'id_product', ), null, null);
	} // buildRelations()

} // Oops_Model_ImageTableMap
