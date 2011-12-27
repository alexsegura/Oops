<?php



/**
 * This class defines the structure of the 'product' table.
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
class Oops_Db_ProductTableMap extends TableMap
{

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'prestashop.map.Oops_Db_ProductTableMap';

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
		$this->setName(_DB_PREFIX_ . 'product');
		$this->setPhpName('Product');
		$this->setClassname('Oops_Db_Product');
		$this->setPackage('prestashop');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID_PRODUCT', 'IdProduct', 'INTEGER', true, 10, null);
		$this->addColumn('ID_SUPPLIER', 'IdSupplier', 'INTEGER', false, 10, null);
		$this->addForeignKey('ID_MANUFACTURER', 'IdManufacturer', 'INTEGER', 'manufacturer', 'ID_MANUFACTURER', false, 10, null);
		$this->addColumn('ID_TAX_RULES_GROUP', 'IdTaxRulesGroup', 'INTEGER', true, 10, null);
		$this->addColumn('ID_CATEGORY_DEFAULT', 'IdCategoryDefault', 'INTEGER', false, 10, null);
		$this->addColumn('ID_COLOR_DEFAULT', 'IdColorDefault', 'INTEGER', false, 10, null);
		$this->addColumn('ON_SALE', 'OnSale', 'BOOLEAN', true, 1, false);
		$this->addColumn('ONLINE_ONLY', 'OnlineOnly', 'BOOLEAN', true, 1, false);
		$this->addColumn('EAN13', 'Ean13', 'VARCHAR', false, 13, null);
		$this->addColumn('UPC', 'Upc', 'VARCHAR', false, 12, null);
		$this->addColumn('ECOTAX', 'Ecotax', 'DECIMAL', true, 17, 0);
		$this->addColumn('QUANTITY', 'Quantity', 'INTEGER', true, 10, 0);
		$this->addColumn('MINIMAL_QUANTITY', 'MinimalQuantity', 'INTEGER', true, 10, 1);
		$this->addColumn('PRICE', 'Price', 'DECIMAL', true, 20, 0);
		$this->addColumn('WHOLESALE_PRICE', 'WholesalePrice', 'DECIMAL', true, 20, 0);
		$this->addColumn('UNITY', 'Unity', 'VARCHAR', false, 255, null);
		$this->addColumn('UNIT_PRICE_RATIO', 'UnitPriceRatio', 'DECIMAL', true, 20, 0);
		$this->addColumn('ADDITIONAL_SHIPPING_COST', 'AdditionalShippingCost', 'DECIMAL', true, 20, 0);
		$this->addColumn('REFERENCE', 'Reference', 'VARCHAR', false, 32, null);
		$this->addColumn('SUPPLIER_REFERENCE', 'SupplierReference', 'VARCHAR', false, 32, null);
		$this->addColumn('LOCATION', 'Location', 'VARCHAR', false, 64, null);
		$this->addColumn('WIDTH', 'Width', 'FLOAT', true, null, 0);
		$this->addColumn('HEIGHT', 'Height', 'FLOAT', true, null, 0);
		$this->addColumn('DEPTH', 'Depth', 'FLOAT', true, null, 0);
		$this->addColumn('WEIGHT', 'Weight', 'FLOAT', true, null, 0);
		$this->addColumn('OUT_OF_STOCK', 'OutOfStock', 'INTEGER', true, 10, 2);
		$this->addColumn('QUANTITY_DISCOUNT', 'QuantityDiscount', 'BOOLEAN', false, 1, false);
		$this->addColumn('CUSTOMIZABLE', 'Customizable', 'TINYINT', true, 2, 0);
		$this->addColumn('UPLOADABLE_FILES', 'UploadableFiles', 'TINYINT', true, null, 0);
		$this->addColumn('TEXT_FIELDS', 'TextFields', 'TINYINT', true, null, 0);
		$this->addColumn('ACTIVE', 'Active', 'BOOLEAN', true, 1, false);
		$this->addColumn('AVAILABLE_FOR_ORDER', 'AvailableForOrder', 'BOOLEAN', true, 1, true);
		$this->addColumn('CONDITION', 'Condition', 'CHAR', true, null, 'new');
		$this->addColumn('SHOW_PRICE', 'ShowPrice', 'BOOLEAN', true, 1, true);
		$this->addColumn('INDEXED', 'Indexed', 'BOOLEAN', true, 1, false);
		$this->addColumn('CACHE_IS_PACK', 'CacheIsPack', 'BOOLEAN', true, 1, false);
		$this->addColumn('CACHE_HAS_ATTACHMENTS', 'CacheHasAttachments', 'BOOLEAN', true, 1, false);
		$this->addColumn('CACHE_DEFAULT_ATTRIBUTE', 'CacheDefaultAttribute', 'INTEGER', false, 10, null);
		$this->addColumn('DATE_ADD', 'DateAdd', 'TIMESTAMP', true, null, null);
		$this->addColumn('DATE_UPD', 'DateUpd', 'TIMESTAMP', true, null, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
		$this->addRelation('Manufacturer', 'Oops_Db_Manufacturer', RelationMap::MANY_TO_ONE, array('id_manufacturer' => 'id_manufacturer', ), null, null);
		$this->addRelation('CategoryProduct', 'Oops_Db_CategoryProduct', RelationMap::ONE_TO_MANY, array('id_product' => 'id_product', ), null, null, 'CategoryProducts');
		$this->addRelation('FeatureProduct', 'Oops_Db_FeatureProduct', RelationMap::ONE_TO_MANY, array('id_product' => 'id_product', ), null, null, 'FeatureProducts');
		$this->addRelation('Image', 'Oops_Db_Image', RelationMap::ONE_TO_MANY, array('id_product' => 'id_product', ), null, null, 'Images');
		$this->addRelation('ProductLang', 'Oops_Db_ProductLang', RelationMap::ONE_TO_MANY, array('id_product' => 'id_product', ), null, null, 'ProductLangs');
		$this->addRelation('StockMvt', 'Oops_Db_StockMvt', RelationMap::ONE_TO_MANY, array('id_product' => 'id_product', ), null, null, 'StockMvts');
		$this->addRelation('Supplier', 'Oops_Db_Supplier', RelationMap::ONE_TO_ONE, array('id_supplier' => 'id_supplier', ), null, null);
		$this->addRelation('Category', 'Oops_Db_Category', RelationMap::MANY_TO_MANY, array(), null, null, 'Categories');
		$this->addRelation('Feature', 'Oops_Db_Feature', RelationMap::MANY_TO_MANY, array(), null, null, 'Features');
	} // buildRelations()

	/**
	 *
	 * Gets the list of behaviors registered for this table
	 *
	 * @return array Associative array (name => parameters) of behaviors
	 */
	public function getBehaviors()
	{
		return array(
			'i18n' => array('i18n_table' => 'product_lang', 'i18n_phpname' => 'ProductLang', 'i18n_columns' => 'name,description,description_short,link_rewrite', 'locale_column' => 'id_lang', 'default_locale' => '1', 'locale_alias' => '', ),
		);
	} // getBehaviors()

} // Oops_Db_ProductTableMap
