<?php



/**
 * This class defines the structure of the 'product_attribute' table.
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
class Oops_Model_ProductAttributeTableMap extends TableMap
{

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'prestashop.map.Oops_Model_ProductAttributeTableMap';

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
		$this->setName(_DB_PREFIX_ . 'product_attribute');
		$this->setPhpName('ProductAttribute');
		$this->setClassname('Oops_Model_ProductAttribute');
		$this->setPackage('prestashop');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID_PRODUCT_ATTRIBUTE', 'IdProductAttribute', 'INTEGER', true, 10, null);
		$this->addColumn('ID_PRODUCT', 'IdProduct', 'INTEGER', true, 10, null);
		$this->addColumn('REFERENCE', 'Reference', 'VARCHAR', false, 32, null);
		$this->addColumn('SUPPLIER_REFERENCE', 'SupplierReference', 'VARCHAR', false, 32, null);
		$this->addColumn('LOCATION', 'Location', 'VARCHAR', false, 64, null);
		$this->addColumn('EAN13', 'Ean13', 'VARCHAR', false, 13, null);
		$this->addColumn('UPC', 'Upc', 'VARCHAR', false, 12, null);
		$this->addColumn('WHOLESALE_PRICE', 'WholesalePrice', 'DECIMAL', true, 20, 0);
		$this->addColumn('PRICE', 'Price', 'DECIMAL', true, 20, 0);
		$this->addColumn('ECOTAX', 'Ecotax', 'DECIMAL', true, 17, 0);
		$this->addColumn('QUANTITY', 'Quantity', 'INTEGER', true, 10, 0);
		$this->addColumn('WEIGHT', 'Weight', 'FLOAT', true, null, 0);
		$this->addColumn('UNIT_PRICE_IMPACT', 'UnitPriceImpact', 'DECIMAL', true, 17, 0);
		$this->addColumn('DEFAULT_ON', 'DefaultOn', 'BOOLEAN', true, 1, false);
		$this->addColumn('MINIMAL_QUANTITY', 'MinimalQuantity', 'INTEGER', true, 10, 1);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
	} // buildRelations()

} // Oops_Model_ProductAttributeTableMap
