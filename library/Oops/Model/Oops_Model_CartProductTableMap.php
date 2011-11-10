<?php



/**
 * This class defines the structure of the 'cart_product' table.
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
class Oops_Model_CartProductTableMap extends TableMap
{

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'prestashop.map.Oops_Model_CartProductTableMap';

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
		$this->setName(_DB_PREFIX_ . 'cart_product');
		$this->setPhpName('CartProduct');
		$this->setClassname('Oops_Model_CartProduct');
		$this->setPackage('prestashop');
		$this->setUseIdGenerator(false);
		// columns
		$this->addPrimaryKey('ID_CART', 'IdCart', 'INTEGER', true, 10, null);
		$this->addColumn('ID_PRODUCT', 'IdProduct', 'INTEGER', true, 10, null);
		$this->addColumn('ID_PRODUCT_ATTRIBUTE', 'IdProductAttribute', 'INTEGER', false, 10, null);
		$this->addColumn('QUANTITY', 'Quantity', 'INTEGER', true, 10, 0);
		$this->addColumn('DATE_ADD', 'DateAdd', 'TIMESTAMP', true, null, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
	} // buildRelations()

} // Oops_Model_CartProductTableMap
