<?php



/**
 * This class defines the structure of the 'djland_product_attribute_image' table.
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
class Oops_Model_ProductAttributeImageTableMap extends TableMap
{

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'prestashop.map.Oops_Model_ProductAttributeImageTableMap';

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
		$this->setName(_DB_PREFIX_ . 'djland_product_attribute_image');
		$this->setPhpName('ProductAttributeImage');
		$this->setClassname('Oops_Model_ProductAttributeImage');
		$this->setPackage('prestashop');
		$this->setUseIdGenerator(false);
		// columns
		$this->addPrimaryKey('ID_PRODUCT_ATTRIBUTE', 'IdProductAttribute', 'INTEGER', true, 10, null);
		$this->addPrimaryKey('ID_IMAGE', 'IdImage', 'INTEGER', true, 10, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
	} // buildRelations()

} // Oops_Model_ProductAttributeImageTableMap
