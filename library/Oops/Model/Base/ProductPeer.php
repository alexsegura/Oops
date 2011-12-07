<?php


define('OOPS_MODEL_PRODUCT_ID_PRODUCT', _DB_PREFIX_ . 'product.ID_PRODUCT');
define('OOPS_MODEL_PRODUCT_ID_SUPPLIER', _DB_PREFIX_ . 'product.ID_SUPPLIER');
define('OOPS_MODEL_PRODUCT_ID_MANUFACTURER', _DB_PREFIX_ . 'product.ID_MANUFACTURER');
define('OOPS_MODEL_PRODUCT_ID_TAX_RULES_GROUP', _DB_PREFIX_ . 'product.ID_TAX_RULES_GROUP');
define('OOPS_MODEL_PRODUCT_ID_CATEGORY_DEFAULT', _DB_PREFIX_ . 'product.ID_CATEGORY_DEFAULT');
define('OOPS_MODEL_PRODUCT_ID_COLOR_DEFAULT', _DB_PREFIX_ . 'product.ID_COLOR_DEFAULT');
define('OOPS_MODEL_PRODUCT_ON_SALE', _DB_PREFIX_ . 'product.ON_SALE');
define('OOPS_MODEL_PRODUCT_ONLINE_ONLY', _DB_PREFIX_ . 'product.ONLINE_ONLY');
define('OOPS_MODEL_PRODUCT_EAN13', _DB_PREFIX_ . 'product.EAN13');
define('OOPS_MODEL_PRODUCT_UPC', _DB_PREFIX_ . 'product.UPC');
define('OOPS_MODEL_PRODUCT_ECOTAX', _DB_PREFIX_ . 'product.ECOTAX');
define('OOPS_MODEL_PRODUCT_QUANTITY', _DB_PREFIX_ . 'product.QUANTITY');
define('OOPS_MODEL_PRODUCT_MINIMAL_QUANTITY', _DB_PREFIX_ . 'product.MINIMAL_QUANTITY');
define('OOPS_MODEL_PRODUCT_PRICE', _DB_PREFIX_ . 'product.PRICE');
define('OOPS_MODEL_PRODUCT_WHOLESALE_PRICE', _DB_PREFIX_ . 'product.WHOLESALE_PRICE');
define('OOPS_MODEL_PRODUCT_UNITY', _DB_PREFIX_ . 'product.UNITY');
define('OOPS_MODEL_PRODUCT_UNIT_PRICE_RATIO', _DB_PREFIX_ . 'product.UNIT_PRICE_RATIO');
define('OOPS_MODEL_PRODUCT_ADDITIONAL_SHIPPING_COST', _DB_PREFIX_ . 'product.ADDITIONAL_SHIPPING_COST');
define('OOPS_MODEL_PRODUCT_REFERENCE', _DB_PREFIX_ . 'product.REFERENCE');
define('OOPS_MODEL_PRODUCT_SUPPLIER_REFERENCE', _DB_PREFIX_ . 'product.SUPPLIER_REFERENCE');
define('OOPS_MODEL_PRODUCT_LOCATION', _DB_PREFIX_ . 'product.LOCATION');
define('OOPS_MODEL_PRODUCT_WIDTH', _DB_PREFIX_ . 'product.WIDTH');
define('OOPS_MODEL_PRODUCT_HEIGHT', _DB_PREFIX_ . 'product.HEIGHT');
define('OOPS_MODEL_PRODUCT_DEPTH', _DB_PREFIX_ . 'product.DEPTH');
define('OOPS_MODEL_PRODUCT_WEIGHT', _DB_PREFIX_ . 'product.WEIGHT');
define('OOPS_MODEL_PRODUCT_OUT_OF_STOCK', _DB_PREFIX_ . 'product.OUT_OF_STOCK');
define('OOPS_MODEL_PRODUCT_QUANTITY_DISCOUNT', _DB_PREFIX_ . 'product.QUANTITY_DISCOUNT');
define('OOPS_MODEL_PRODUCT_CUSTOMIZABLE', _DB_PREFIX_ . 'product.CUSTOMIZABLE');
define('OOPS_MODEL_PRODUCT_UPLOADABLE_FILES', _DB_PREFIX_ . 'product.UPLOADABLE_FILES');
define('OOPS_MODEL_PRODUCT_TEXT_FIELDS', _DB_PREFIX_ . 'product.TEXT_FIELDS');
define('OOPS_MODEL_PRODUCT_ACTIVE', _DB_PREFIX_ . 'product.ACTIVE');
define('OOPS_MODEL_PRODUCT_AVAILABLE_FOR_ORDER', _DB_PREFIX_ . 'product.AVAILABLE_FOR_ORDER');
define('OOPS_MODEL_PRODUCT_CONDITION', _DB_PREFIX_ . 'product.CONDITION');
define('OOPS_MODEL_PRODUCT_SHOW_PRICE', _DB_PREFIX_ . 'product.SHOW_PRICE');
define('OOPS_MODEL_PRODUCT_INDEXED', _DB_PREFIX_ . 'product.INDEXED');
define('OOPS_MODEL_PRODUCT_CACHE_IS_PACK', _DB_PREFIX_ . 'product.CACHE_IS_PACK');
define('OOPS_MODEL_PRODUCT_CACHE_HAS_ATTACHMENTS', _DB_PREFIX_ . 'product.CACHE_HAS_ATTACHMENTS');
define('OOPS_MODEL_PRODUCT_CACHE_DEFAULT_ATTRIBUTE', _DB_PREFIX_ . 'product.CACHE_DEFAULT_ATTRIBUTE');
define('OOPS_MODEL_PRODUCT_DATE_ADD', _DB_PREFIX_ . 'product.DATE_ADD');
define('OOPS_MODEL_PRODUCT_DATE_UPD', _DB_PREFIX_ . 'product.DATE_UPD');
define('OOPS_MODEL_PRODUCT_TABLE_NAME', _DB_PREFIX_ . 'product');

/**
 * Base static class for performing query and update operations on the 'product' table.
 *
 * 
 *
 * @package    propel.generator.prestashop.om
 */
abstract class Oops_Model_Base_ProductPeer {

	/** the default database name for this class */
	const DATABASE_NAME = 'prestashop';

	/** the table name for this class */
	const TABLE_NAME = OOPS_MODEL_PRODUCT_TABLE_NAME;

	/** the related Propel class for this table */
	const OM_CLASS = 'Oops_Model_Product';

	/** A class that can be returned by this peer. */
	const CLASS_DEFAULT = 'prestashop.Oops_Model_Product';

	/** the related TableMap class for this table */
	const TM_CLASS = 'Oops_Model_ProductTableMap';

	/** The total number of columns. */
	const NUM_COLUMNS = 40;

	/** The number of lazy-loaded columns. */
	const NUM_LAZY_LOAD_COLUMNS = 0;

	/** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
	const NUM_HYDRATE_COLUMNS = 40;

	/** the column name for the ID_PRODUCT field */
	const ID_PRODUCT = OOPS_MODEL_PRODUCT_ID_PRODUCT;

	/** the column name for the ID_SUPPLIER field */
	const ID_SUPPLIER = OOPS_MODEL_PRODUCT_ID_SUPPLIER;

	/** the column name for the ID_MANUFACTURER field */
	const ID_MANUFACTURER = OOPS_MODEL_PRODUCT_ID_MANUFACTURER;

	/** the column name for the ID_TAX_RULES_GROUP field */
	const ID_TAX_RULES_GROUP = OOPS_MODEL_PRODUCT_ID_TAX_RULES_GROUP;

	/** the column name for the ID_CATEGORY_DEFAULT field */
	const ID_CATEGORY_DEFAULT = OOPS_MODEL_PRODUCT_ID_CATEGORY_DEFAULT;

	/** the column name for the ID_COLOR_DEFAULT field */
	const ID_COLOR_DEFAULT = OOPS_MODEL_PRODUCT_ID_COLOR_DEFAULT;

	/** the column name for the ON_SALE field */
	const ON_SALE = OOPS_MODEL_PRODUCT_ON_SALE;

	/** the column name for the ONLINE_ONLY field */
	const ONLINE_ONLY = OOPS_MODEL_PRODUCT_ONLINE_ONLY;

	/** the column name for the EAN13 field */
	const EAN13 = OOPS_MODEL_PRODUCT_EAN13;

	/** the column name for the UPC field */
	const UPC = OOPS_MODEL_PRODUCT_UPC;

	/** the column name for the ECOTAX field */
	const ECOTAX = OOPS_MODEL_PRODUCT_ECOTAX;

	/** the column name for the QUANTITY field */
	const QUANTITY = OOPS_MODEL_PRODUCT_QUANTITY;

	/** the column name for the MINIMAL_QUANTITY field */
	const MINIMAL_QUANTITY = OOPS_MODEL_PRODUCT_MINIMAL_QUANTITY;

	/** the column name for the PRICE field */
	const PRICE = OOPS_MODEL_PRODUCT_PRICE;

	/** the column name for the WHOLESALE_PRICE field */
	const WHOLESALE_PRICE = OOPS_MODEL_PRODUCT_WHOLESALE_PRICE;

	/** the column name for the UNITY field */
	const UNITY = OOPS_MODEL_PRODUCT_UNITY;

	/** the column name for the UNIT_PRICE_RATIO field */
	const UNIT_PRICE_RATIO = OOPS_MODEL_PRODUCT_UNIT_PRICE_RATIO;

	/** the column name for the ADDITIONAL_SHIPPING_COST field */
	const ADDITIONAL_SHIPPING_COST = OOPS_MODEL_PRODUCT_ADDITIONAL_SHIPPING_COST;

	/** the column name for the REFERENCE field */
	const REFERENCE = OOPS_MODEL_PRODUCT_REFERENCE;

	/** the column name for the SUPPLIER_REFERENCE field */
	const SUPPLIER_REFERENCE = OOPS_MODEL_PRODUCT_SUPPLIER_REFERENCE;

	/** the column name for the LOCATION field */
	const LOCATION = OOPS_MODEL_PRODUCT_LOCATION;

	/** the column name for the WIDTH field */
	const WIDTH = OOPS_MODEL_PRODUCT_WIDTH;

	/** the column name for the HEIGHT field */
	const HEIGHT = OOPS_MODEL_PRODUCT_HEIGHT;

	/** the column name for the DEPTH field */
	const DEPTH = OOPS_MODEL_PRODUCT_DEPTH;

	/** the column name for the WEIGHT field */
	const WEIGHT = OOPS_MODEL_PRODUCT_WEIGHT;

	/** the column name for the OUT_OF_STOCK field */
	const OUT_OF_STOCK = OOPS_MODEL_PRODUCT_OUT_OF_STOCK;

	/** the column name for the QUANTITY_DISCOUNT field */
	const QUANTITY_DISCOUNT = OOPS_MODEL_PRODUCT_QUANTITY_DISCOUNT;

	/** the column name for the CUSTOMIZABLE field */
	const CUSTOMIZABLE = OOPS_MODEL_PRODUCT_CUSTOMIZABLE;

	/** the column name for the UPLOADABLE_FILES field */
	const UPLOADABLE_FILES = OOPS_MODEL_PRODUCT_UPLOADABLE_FILES;

	/** the column name for the TEXT_FIELDS field */
	const TEXT_FIELDS = OOPS_MODEL_PRODUCT_TEXT_FIELDS;

	/** the column name for the ACTIVE field */
	const ACTIVE = OOPS_MODEL_PRODUCT_ACTIVE;

	/** the column name for the AVAILABLE_FOR_ORDER field */
	const AVAILABLE_FOR_ORDER = OOPS_MODEL_PRODUCT_AVAILABLE_FOR_ORDER;

	/** the column name for the CONDITION field */
	const CONDITION = OOPS_MODEL_PRODUCT_CONDITION;

	/** the column name for the SHOW_PRICE field */
	const SHOW_PRICE = OOPS_MODEL_PRODUCT_SHOW_PRICE;

	/** the column name for the INDEXED field */
	const INDEXED = OOPS_MODEL_PRODUCT_INDEXED;

	/** the column name for the CACHE_IS_PACK field */
	const CACHE_IS_PACK = OOPS_MODEL_PRODUCT_CACHE_IS_PACK;

	/** the column name for the CACHE_HAS_ATTACHMENTS field */
	const CACHE_HAS_ATTACHMENTS = OOPS_MODEL_PRODUCT_CACHE_HAS_ATTACHMENTS;

	/** the column name for the CACHE_DEFAULT_ATTRIBUTE field */
	const CACHE_DEFAULT_ATTRIBUTE = OOPS_MODEL_PRODUCT_CACHE_DEFAULT_ATTRIBUTE;

	/** the column name for the DATE_ADD field */
	const DATE_ADD = OOPS_MODEL_PRODUCT_DATE_ADD;

	/** the column name for the DATE_UPD field */
	const DATE_UPD = OOPS_MODEL_PRODUCT_DATE_UPD;

	/** The default string format for model objects of the related table **/
	const DEFAULT_STRING_FORMAT = 'YAML';

	/**
	 * An identiy map to hold any loaded instances of Oops_Model_Product objects.
	 * This must be public so that other peer classes can access this when hydrating from JOIN
	 * queries.
	 * @var        array Oops_Model_Product[]
	 */
	public static $instances = array();


	// i18n behavior
	
	/**
	 * The default locale to use for translations
	 * @var        string
	 */
	const DEFAULT_LOCALE = '1';
	/**
	 * holds an array of fieldnames
	 *
	 * first dimension keys are the type constants
	 * e.g. self::$fieldNames[self::TYPE_PHPNAME][0] = 'Id'
	 */
	protected static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('IdProduct', 'IdSupplier', 'IdManufacturer', 'IdTaxRulesGroup', 'IdCategoryDefault', 'IdColorDefault', 'OnSale', 'OnlineOnly', 'Ean13', 'Upc', 'Ecotax', 'Quantity', 'MinimalQuantity', 'Price', 'WholesalePrice', 'Unity', 'UnitPriceRatio', 'AdditionalShippingCost', 'Reference', 'SupplierReference', 'Location', 'Width', 'Height', 'Depth', 'Weight', 'OutOfStock', 'QuantityDiscount', 'Customizable', 'UploadableFiles', 'TextFields', 'Active', 'AvailableForOrder', 'Condition', 'ShowPrice', 'Indexed', 'CacheIsPack', 'CacheHasAttachments', 'CacheDefaultAttribute', 'DateAdd', 'DateUpd', ),
		BasePeer::TYPE_STUDLYPHPNAME => array ('idProduct', 'idSupplier', 'idManufacturer', 'idTaxRulesGroup', 'idCategoryDefault', 'idColorDefault', 'onSale', 'onlineOnly', 'ean13', 'upc', 'ecotax', 'quantity', 'minimalQuantity', 'price', 'wholesalePrice', 'unity', 'unitPriceRatio', 'additionalShippingCost', 'reference', 'supplierReference', 'location', 'width', 'height', 'depth', 'weight', 'outOfStock', 'quantityDiscount', 'customizable', 'uploadableFiles', 'textFields', 'active', 'availableForOrder', 'condition', 'showPrice', 'indexed', 'cacheIsPack', 'cacheHasAttachments', 'cacheDefaultAttribute', 'dateAdd', 'dateUpd', ),
		BasePeer::TYPE_COLNAME => array (self::ID_PRODUCT, self::ID_SUPPLIER, self::ID_MANUFACTURER, self::ID_TAX_RULES_GROUP, self::ID_CATEGORY_DEFAULT, self::ID_COLOR_DEFAULT, self::ON_SALE, self::ONLINE_ONLY, self::EAN13, self::UPC, self::ECOTAX, self::QUANTITY, self::MINIMAL_QUANTITY, self::PRICE, self::WHOLESALE_PRICE, self::UNITY, self::UNIT_PRICE_RATIO, self::ADDITIONAL_SHIPPING_COST, self::REFERENCE, self::SUPPLIER_REFERENCE, self::LOCATION, self::WIDTH, self::HEIGHT, self::DEPTH, self::WEIGHT, self::OUT_OF_STOCK, self::QUANTITY_DISCOUNT, self::CUSTOMIZABLE, self::UPLOADABLE_FILES, self::TEXT_FIELDS, self::ACTIVE, self::AVAILABLE_FOR_ORDER, self::CONDITION, self::SHOW_PRICE, self::INDEXED, self::CACHE_IS_PACK, self::CACHE_HAS_ATTACHMENTS, self::CACHE_DEFAULT_ATTRIBUTE, self::DATE_ADD, self::DATE_UPD, ),
		BasePeer::TYPE_RAW_COLNAME => array ('ID_PRODUCT', 'ID_SUPPLIER', 'ID_MANUFACTURER', 'ID_TAX_RULES_GROUP', 'ID_CATEGORY_DEFAULT', 'ID_COLOR_DEFAULT', 'ON_SALE', 'ONLINE_ONLY', 'EAN13', 'UPC', 'ECOTAX', 'QUANTITY', 'MINIMAL_QUANTITY', 'PRICE', 'WHOLESALE_PRICE', 'UNITY', 'UNIT_PRICE_RATIO', 'ADDITIONAL_SHIPPING_COST', 'REFERENCE', 'SUPPLIER_REFERENCE', 'LOCATION', 'WIDTH', 'HEIGHT', 'DEPTH', 'WEIGHT', 'OUT_OF_STOCK', 'QUANTITY_DISCOUNT', 'CUSTOMIZABLE', 'UPLOADABLE_FILES', 'TEXT_FIELDS', 'ACTIVE', 'AVAILABLE_FOR_ORDER', 'CONDITION', 'SHOW_PRICE', 'INDEXED', 'CACHE_IS_PACK', 'CACHE_HAS_ATTACHMENTS', 'CACHE_DEFAULT_ATTRIBUTE', 'DATE_ADD', 'DATE_UPD', ),
		BasePeer::TYPE_FIELDNAME => array ('id_product', 'id_supplier', 'id_manufacturer', 'id_tax_rules_group', 'id_category_default', 'id_color_default', 'on_sale', 'online_only', 'ean13', 'upc', 'ecotax', 'quantity', 'minimal_quantity', 'price', 'wholesale_price', 'unity', 'unit_price_ratio', 'additional_shipping_cost', 'reference', 'supplier_reference', 'location', 'width', 'height', 'depth', 'weight', 'out_of_stock', 'quantity_discount', 'customizable', 'uploadable_files', 'text_fields', 'active', 'available_for_order', 'condition', 'show_price', 'indexed', 'cache_is_pack', 'cache_has_attachments', 'cache_default_attribute', 'date_add', 'date_upd', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, )
	);

	/**
	 * holds an array of keys for quick access to the fieldnames array
	 *
	 * first dimension keys are the type constants
	 * e.g. self::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
	 */
	protected static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('IdProduct' => 0, 'IdSupplier' => 1, 'IdManufacturer' => 2, 'IdTaxRulesGroup' => 3, 'IdCategoryDefault' => 4, 'IdColorDefault' => 5, 'OnSale' => 6, 'OnlineOnly' => 7, 'Ean13' => 8, 'Upc' => 9, 'Ecotax' => 10, 'Quantity' => 11, 'MinimalQuantity' => 12, 'Price' => 13, 'WholesalePrice' => 14, 'Unity' => 15, 'UnitPriceRatio' => 16, 'AdditionalShippingCost' => 17, 'Reference' => 18, 'SupplierReference' => 19, 'Location' => 20, 'Width' => 21, 'Height' => 22, 'Depth' => 23, 'Weight' => 24, 'OutOfStock' => 25, 'QuantityDiscount' => 26, 'Customizable' => 27, 'UploadableFiles' => 28, 'TextFields' => 29, 'Active' => 30, 'AvailableForOrder' => 31, 'Condition' => 32, 'ShowPrice' => 33, 'Indexed' => 34, 'CacheIsPack' => 35, 'CacheHasAttachments' => 36, 'CacheDefaultAttribute' => 37, 'DateAdd' => 38, 'DateUpd' => 39, ),
		BasePeer::TYPE_STUDLYPHPNAME => array ('idProduct' => 0, 'idSupplier' => 1, 'idManufacturer' => 2, 'idTaxRulesGroup' => 3, 'idCategoryDefault' => 4, 'idColorDefault' => 5, 'onSale' => 6, 'onlineOnly' => 7, 'ean13' => 8, 'upc' => 9, 'ecotax' => 10, 'quantity' => 11, 'minimalQuantity' => 12, 'price' => 13, 'wholesalePrice' => 14, 'unity' => 15, 'unitPriceRatio' => 16, 'additionalShippingCost' => 17, 'reference' => 18, 'supplierReference' => 19, 'location' => 20, 'width' => 21, 'height' => 22, 'depth' => 23, 'weight' => 24, 'outOfStock' => 25, 'quantityDiscount' => 26, 'customizable' => 27, 'uploadableFiles' => 28, 'textFields' => 29, 'active' => 30, 'availableForOrder' => 31, 'condition' => 32, 'showPrice' => 33, 'indexed' => 34, 'cacheIsPack' => 35, 'cacheHasAttachments' => 36, 'cacheDefaultAttribute' => 37, 'dateAdd' => 38, 'dateUpd' => 39, ),
		BasePeer::TYPE_COLNAME => array (self::ID_PRODUCT => 0, self::ID_SUPPLIER => 1, self::ID_MANUFACTURER => 2, self::ID_TAX_RULES_GROUP => 3, self::ID_CATEGORY_DEFAULT => 4, self::ID_COLOR_DEFAULT => 5, self::ON_SALE => 6, self::ONLINE_ONLY => 7, self::EAN13 => 8, self::UPC => 9, self::ECOTAX => 10, self::QUANTITY => 11, self::MINIMAL_QUANTITY => 12, self::PRICE => 13, self::WHOLESALE_PRICE => 14, self::UNITY => 15, self::UNIT_PRICE_RATIO => 16, self::ADDITIONAL_SHIPPING_COST => 17, self::REFERENCE => 18, self::SUPPLIER_REFERENCE => 19, self::LOCATION => 20, self::WIDTH => 21, self::HEIGHT => 22, self::DEPTH => 23, self::WEIGHT => 24, self::OUT_OF_STOCK => 25, self::QUANTITY_DISCOUNT => 26, self::CUSTOMIZABLE => 27, self::UPLOADABLE_FILES => 28, self::TEXT_FIELDS => 29, self::ACTIVE => 30, self::AVAILABLE_FOR_ORDER => 31, self::CONDITION => 32, self::SHOW_PRICE => 33, self::INDEXED => 34, self::CACHE_IS_PACK => 35, self::CACHE_HAS_ATTACHMENTS => 36, self::CACHE_DEFAULT_ATTRIBUTE => 37, self::DATE_ADD => 38, self::DATE_UPD => 39, ),
		BasePeer::TYPE_RAW_COLNAME => array ('ID_PRODUCT' => 0, 'ID_SUPPLIER' => 1, 'ID_MANUFACTURER' => 2, 'ID_TAX_RULES_GROUP' => 3, 'ID_CATEGORY_DEFAULT' => 4, 'ID_COLOR_DEFAULT' => 5, 'ON_SALE' => 6, 'ONLINE_ONLY' => 7, 'EAN13' => 8, 'UPC' => 9, 'ECOTAX' => 10, 'QUANTITY' => 11, 'MINIMAL_QUANTITY' => 12, 'PRICE' => 13, 'WHOLESALE_PRICE' => 14, 'UNITY' => 15, 'UNIT_PRICE_RATIO' => 16, 'ADDITIONAL_SHIPPING_COST' => 17, 'REFERENCE' => 18, 'SUPPLIER_REFERENCE' => 19, 'LOCATION' => 20, 'WIDTH' => 21, 'HEIGHT' => 22, 'DEPTH' => 23, 'WEIGHT' => 24, 'OUT_OF_STOCK' => 25, 'QUANTITY_DISCOUNT' => 26, 'CUSTOMIZABLE' => 27, 'UPLOADABLE_FILES' => 28, 'TEXT_FIELDS' => 29, 'ACTIVE' => 30, 'AVAILABLE_FOR_ORDER' => 31, 'CONDITION' => 32, 'SHOW_PRICE' => 33, 'INDEXED' => 34, 'CACHE_IS_PACK' => 35, 'CACHE_HAS_ATTACHMENTS' => 36, 'CACHE_DEFAULT_ATTRIBUTE' => 37, 'DATE_ADD' => 38, 'DATE_UPD' => 39, ),
		BasePeer::TYPE_FIELDNAME => array ('id_product' => 0, 'id_supplier' => 1, 'id_manufacturer' => 2, 'id_tax_rules_group' => 3, 'id_category_default' => 4, 'id_color_default' => 5, 'on_sale' => 6, 'online_only' => 7, 'ean13' => 8, 'upc' => 9, 'ecotax' => 10, 'quantity' => 11, 'minimal_quantity' => 12, 'price' => 13, 'wholesale_price' => 14, 'unity' => 15, 'unit_price_ratio' => 16, 'additional_shipping_cost' => 17, 'reference' => 18, 'supplier_reference' => 19, 'location' => 20, 'width' => 21, 'height' => 22, 'depth' => 23, 'weight' => 24, 'out_of_stock' => 25, 'quantity_discount' => 26, 'customizable' => 27, 'uploadable_files' => 28, 'text_fields' => 29, 'active' => 30, 'available_for_order' => 31, 'condition' => 32, 'show_price' => 33, 'indexed' => 34, 'cache_is_pack' => 35, 'cache_has_attachments' => 36, 'cache_default_attribute' => 37, 'date_add' => 38, 'date_upd' => 39, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, )
	);

	/**
	 * Translates a fieldname to another type
	 *
	 * @param      string $name field name
	 * @param      string $fromType One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
	 *                         BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
	 * @param      string $toType   One of the class type constants
	 * @return     string translated name of the field.
	 * @throws     PropelException - if the specified name could not be found in the fieldname mappings.
	 */
	static public function translateFieldName($name, $fromType, $toType)
	{
		$toNames = self::getFieldNames($toType);
		$key = isset(self::$fieldKeys[$fromType][$name]) ? self::$fieldKeys[$fromType][$name] : null;
		if ($key === null) {
			throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(self::$fieldKeys[$fromType], true));
		}
		return $toNames[$key];
	}

	/**
	 * Returns an array of field names.
	 *
	 * @param      string $type The type of fieldnames to return:
	 *                      One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
	 *                      BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
	 * @return     array A list of field names
	 */

	static public function getFieldNames($type = BasePeer::TYPE_PHPNAME)
	{
		if (!array_key_exists($type, self::$fieldNames)) {
			throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
		}
		return self::$fieldNames[$type];
	}

	/**
	 * Convenience method which changes table.column to alias.column.
	 *
	 * Using this method you can maintain SQL abstraction while using column aliases.
	 * <code>
	 *		$c->addAlias("alias1", TablePeer::TABLE_NAME);
	 *		$c->addJoin(TablePeer::alias("alias1", TablePeer::PRIMARY_KEY_COLUMN), TablePeer::PRIMARY_KEY_COLUMN);
	 * </code>
	 * @param      string $alias The alias for the current table.
	 * @param      string $column The column name for current table. (i.e. Oops_Model_ProductPeer::COLUMN_NAME).
	 * @return     string
	 */
	public static function alias($alias, $column)
	{
		return str_replace(Oops_Model_ProductPeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	/**
	 * Add all the columns needed to create a new object.
	 *
	 * Note: any columns that were marked with lazyLoad="true" in the
	 * XML schema will not be added to the select list and only loaded
	 * on demand.
	 *
	 * @param      Criteria $criteria object containing the columns to add.
	 * @param      string   $alias    optional table alias
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function addSelectColumns(Criteria $criteria, $alias = null)
	{
		if (null === $alias) {
			$criteria->addSelectColumn(Oops_Model_ProductPeer::ID_PRODUCT);
			$criteria->addSelectColumn(Oops_Model_ProductPeer::ID_SUPPLIER);
			$criteria->addSelectColumn(Oops_Model_ProductPeer::ID_MANUFACTURER);
			$criteria->addSelectColumn(Oops_Model_ProductPeer::ID_TAX_RULES_GROUP);
			$criteria->addSelectColumn(Oops_Model_ProductPeer::ID_CATEGORY_DEFAULT);
			$criteria->addSelectColumn(Oops_Model_ProductPeer::ID_COLOR_DEFAULT);
			$criteria->addSelectColumn(Oops_Model_ProductPeer::ON_SALE);
			$criteria->addSelectColumn(Oops_Model_ProductPeer::ONLINE_ONLY);
			$criteria->addSelectColumn(Oops_Model_ProductPeer::EAN13);
			$criteria->addSelectColumn(Oops_Model_ProductPeer::UPC);
			$criteria->addSelectColumn(Oops_Model_ProductPeer::ECOTAX);
			$criteria->addSelectColumn(Oops_Model_ProductPeer::QUANTITY);
			$criteria->addSelectColumn(Oops_Model_ProductPeer::MINIMAL_QUANTITY);
			$criteria->addSelectColumn(Oops_Model_ProductPeer::PRICE);
			$criteria->addSelectColumn(Oops_Model_ProductPeer::WHOLESALE_PRICE);
			$criteria->addSelectColumn(Oops_Model_ProductPeer::UNITY);
			$criteria->addSelectColumn(Oops_Model_ProductPeer::UNIT_PRICE_RATIO);
			$criteria->addSelectColumn(Oops_Model_ProductPeer::ADDITIONAL_SHIPPING_COST);
			$criteria->addSelectColumn(Oops_Model_ProductPeer::REFERENCE);
			$criteria->addSelectColumn(Oops_Model_ProductPeer::SUPPLIER_REFERENCE);
			$criteria->addSelectColumn(Oops_Model_ProductPeer::LOCATION);
			$criteria->addSelectColumn(Oops_Model_ProductPeer::WIDTH);
			$criteria->addSelectColumn(Oops_Model_ProductPeer::HEIGHT);
			$criteria->addSelectColumn(Oops_Model_ProductPeer::DEPTH);
			$criteria->addSelectColumn(Oops_Model_ProductPeer::WEIGHT);
			$criteria->addSelectColumn(Oops_Model_ProductPeer::OUT_OF_STOCK);
			$criteria->addSelectColumn(Oops_Model_ProductPeer::QUANTITY_DISCOUNT);
			$criteria->addSelectColumn(Oops_Model_ProductPeer::CUSTOMIZABLE);
			$criteria->addSelectColumn(Oops_Model_ProductPeer::UPLOADABLE_FILES);
			$criteria->addSelectColumn(Oops_Model_ProductPeer::TEXT_FIELDS);
			$criteria->addSelectColumn(Oops_Model_ProductPeer::ACTIVE);
			$criteria->addSelectColumn(Oops_Model_ProductPeer::AVAILABLE_FOR_ORDER);
			$criteria->addSelectColumn(Oops_Model_ProductPeer::CONDITION);
			$criteria->addSelectColumn(Oops_Model_ProductPeer::SHOW_PRICE);
			$criteria->addSelectColumn(Oops_Model_ProductPeer::INDEXED);
			$criteria->addSelectColumn(Oops_Model_ProductPeer::CACHE_IS_PACK);
			$criteria->addSelectColumn(Oops_Model_ProductPeer::CACHE_HAS_ATTACHMENTS);
			$criteria->addSelectColumn(Oops_Model_ProductPeer::CACHE_DEFAULT_ATTRIBUTE);
			$criteria->addSelectColumn(Oops_Model_ProductPeer::DATE_ADD);
			$criteria->addSelectColumn(Oops_Model_ProductPeer::DATE_UPD);
		} else {
			$criteria->addSelectColumn($alias . '.ID_PRODUCT');
			$criteria->addSelectColumn($alias . '.ID_SUPPLIER');
			$criteria->addSelectColumn($alias . '.ID_MANUFACTURER');
			$criteria->addSelectColumn($alias . '.ID_TAX_RULES_GROUP');
			$criteria->addSelectColumn($alias . '.ID_CATEGORY_DEFAULT');
			$criteria->addSelectColumn($alias . '.ID_COLOR_DEFAULT');
			$criteria->addSelectColumn($alias . '.ON_SALE');
			$criteria->addSelectColumn($alias . '.ONLINE_ONLY');
			$criteria->addSelectColumn($alias . '.EAN13');
			$criteria->addSelectColumn($alias . '.UPC');
			$criteria->addSelectColumn($alias . '.ECOTAX');
			$criteria->addSelectColumn($alias . '.QUANTITY');
			$criteria->addSelectColumn($alias . '.MINIMAL_QUANTITY');
			$criteria->addSelectColumn($alias . '.PRICE');
			$criteria->addSelectColumn($alias . '.WHOLESALE_PRICE');
			$criteria->addSelectColumn($alias . '.UNITY');
			$criteria->addSelectColumn($alias . '.UNIT_PRICE_RATIO');
			$criteria->addSelectColumn($alias . '.ADDITIONAL_SHIPPING_COST');
			$criteria->addSelectColumn($alias . '.REFERENCE');
			$criteria->addSelectColumn($alias . '.SUPPLIER_REFERENCE');
			$criteria->addSelectColumn($alias . '.LOCATION');
			$criteria->addSelectColumn($alias . '.WIDTH');
			$criteria->addSelectColumn($alias . '.HEIGHT');
			$criteria->addSelectColumn($alias . '.DEPTH');
			$criteria->addSelectColumn($alias . '.WEIGHT');
			$criteria->addSelectColumn($alias . '.OUT_OF_STOCK');
			$criteria->addSelectColumn($alias . '.QUANTITY_DISCOUNT');
			$criteria->addSelectColumn($alias . '.CUSTOMIZABLE');
			$criteria->addSelectColumn($alias . '.UPLOADABLE_FILES');
			$criteria->addSelectColumn($alias . '.TEXT_FIELDS');
			$criteria->addSelectColumn($alias . '.ACTIVE');
			$criteria->addSelectColumn($alias . '.AVAILABLE_FOR_ORDER');
			$criteria->addSelectColumn($alias . '.CONDITION');
			$criteria->addSelectColumn($alias . '.SHOW_PRICE');
			$criteria->addSelectColumn($alias . '.INDEXED');
			$criteria->addSelectColumn($alias . '.CACHE_IS_PACK');
			$criteria->addSelectColumn($alias . '.CACHE_HAS_ATTACHMENTS');
			$criteria->addSelectColumn($alias . '.CACHE_DEFAULT_ATTRIBUTE');
			$criteria->addSelectColumn($alias . '.DATE_ADD');
			$criteria->addSelectColumn($alias . '.DATE_UPD');
		}
	}

	/**
	 * Returns the number of rows matching criteria.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @return     int Number of matching rows.
	 */
	public static function doCount(Criteria $criteria, $distinct = false, PropelPDO $con = null)
	{
		// we may modify criteria, so copy it first
		$criteria = clone $criteria;

		// We need to set the primary table name, since in the case that there are no WHERE columns
		// it will be impossible for the BasePeer::createSelectSql() method to determine which
		// tables go into the FROM clause.
		$criteria->setPrimaryTableName(Oops_Model_ProductPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			Oops_Model_ProductPeer::addSelectColumns($criteria);
		}

		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
		$criteria->setDbName(self::DATABASE_NAME); // Set the correct dbName

		if ($con === null) {
			$con = Propel::getConnection(Oops_Model_ProductPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}
		// BasePeer returns a PDOStatement
		$stmt = BasePeer::doCount($criteria, $con);

		if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$count = (int) $row[0];
		} else {
			$count = 0; // no rows returned; we infer that means 0 matches.
		}
		$stmt->closeCursor();
		return $count;
	}
	/**
	 * Selects one object from the DB.
	 *
	 * @param      Criteria $criteria object used to create the SELECT statement.
	 * @param      PropelPDO $con
	 * @return     Oops_Model_Product
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
	{
		$critcopy = clone $criteria;
		$critcopy->setLimit(1);
		$objects = Oops_Model_ProductPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	/**
	 * Selects several row from the DB.
	 *
	 * @param      Criteria $criteria The Criteria object used to build the SELECT statement.
	 * @param      PropelPDO $con
	 * @return     array Array of selected Objects
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelect(Criteria $criteria, PropelPDO $con = null)
	{
		return Oops_Model_ProductPeer::populateObjects(Oops_Model_ProductPeer::doSelectStmt($criteria, $con));
	}
	/**
	 * Prepares the Criteria object and uses the parent doSelect() method to execute a PDOStatement.
	 *
	 * Use this method directly if you want to work with an executed statement durirectly (for example
	 * to perform your own object hydration).
	 *
	 * @param      Criteria $criteria The Criteria object used to build the SELECT statement.
	 * @param      PropelPDO $con The connection to use
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 * @return     PDOStatement The executed PDOStatement object.
	 * @see        BasePeer::doSelect()
	 */
	public static function doSelectStmt(Criteria $criteria, PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(Oops_Model_ProductPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		if (!$criteria->hasSelectClause()) {
			$criteria = clone $criteria;
			Oops_Model_ProductPeer::addSelectColumns($criteria);
		}

		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		// BasePeer returns a PDOStatement
		return BasePeer::doSelect($criteria, $con);
	}
	/**
	 * Adds an object to the instance pool.
	 *
	 * Propel keeps cached copies of objects in an instance pool when they are retrieved
	 * from the database.  In some cases -- especially when you override doSelect*()
	 * methods in your stub classes -- you may need to explicitly add objects
	 * to the cache in order to ensure that the same objects are always returned by doSelect*()
	 * and retrieveByPK*() calls.
	 *
	 * @param      Oops_Model_Product $value A Oops_Model_Product object.
	 * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
	 */
	public static function addInstanceToPool($obj, $key = null)
	{
		if (Propel::isInstancePoolingEnabled()) {
			if ($key === null) {
				$key = (string) $obj->getIdProduct();
			} // if key === null
			self::$instances[$key] = $obj;
		}
	}

	/**
	 * Removes an object from the instance pool.
	 *
	 * Propel keeps cached copies of objects in an instance pool when they are retrieved
	 * from the database.  In some cases -- especially when you override doDelete
	 * methods in your stub classes -- you may need to explicitly remove objects
	 * from the cache in order to prevent returning objects that no longer exist.
	 *
	 * @param      mixed $value A Oops_Model_Product object or a primary key value.
	 */
	public static function removeInstanceFromPool($value)
	{
		if (Propel::isInstancePoolingEnabled() && $value !== null) {
			if (is_object($value) && $value instanceof Oops_Model_Product) {
				$key = (string) $value->getIdProduct();
			} elseif (is_scalar($value)) {
				// assume we've been passed a primary key
				$key = (string) $value;
			} else {
				$e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Oops_Model_Product object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
				throw $e;
			}

			unset(self::$instances[$key]);
		}
	} // removeInstanceFromPool()

	/**
	 * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
	 *
	 * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
	 * a multi-column primary key, a serialize()d version of the primary key will be returned.
	 *
	 * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
	 * @return     Oops_Model_Product Found object or NULL if 1) no instance exists for specified key or 2) instance pooling has been disabled.
	 * @see        getPrimaryKeyHash()
	 */
	public static function getInstanceFromPool($key)
	{
		if (Propel::isInstancePoolingEnabled()) {
			if (isset(self::$instances[$key])) {
				return self::$instances[$key];
			}
		}
		return null; // just to be explicit
	}
	
	/**
	 * Clear the instance pool.
	 *
	 * @return     void
	 */
	public static function clearInstancePool()
	{
		self::$instances = array();
	}
	
	/**
	 * Method to invalidate the instance pool of all tables related to product
	 * by a foreign key with ON DELETE CASCADE
	 */
	public static function clearRelatedInstancePool()
	{
	}

	/**
	 * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
	 *
	 * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
	 * a multi-column primary key, a serialize()d version of the primary key will be returned.
	 *
	 * @param      array $row PropelPDO resultset row.
	 * @param      int $startcol The 0-based offset for reading from the resultset row.
	 * @return     string A string version of PK or NULL if the components of primary key in result array are all null.
	 */
	public static function getPrimaryKeyHashFromRow($row, $startcol = 0)
	{
		// If the PK cannot be derived from the row, return NULL.
		if ($row[$startcol] === null) {
			return null;
		}
		return (string) $row[$startcol];
	}

	/**
	 * Retrieves the primary key from the DB resultset row
	 * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
	 * a multi-column primary key, an array of the primary key columns will be returned.
	 *
	 * @param      array $row PropelPDO resultset row.
	 * @param      int $startcol The 0-based offset for reading from the resultset row.
	 * @return     mixed The primary key of the row
	 */
	public static function getPrimaryKeyFromRow($row, $startcol = 0)
	{
		return (int) $row[$startcol];
	}
	
	/**
	 * The returned array will contain objects of the default type or
	 * objects that inherit from the default.
	 *
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function populateObjects(PDOStatement $stmt)
	{
		$results = array();
	
		// set the class once to avoid overhead in the loop
		$cls = Oops_Model_ProductPeer::getOMClass(false);
		// populate the object(s)
		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key = Oops_Model_ProductPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj = Oops_Model_ProductPeer::getInstanceFromPool($key))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj->hydrate($row, 0, true); // rehydrate
				$results[] = $obj;
			} else {
				$obj = new $cls();
				$obj->hydrate($row);
				$results[] = $obj;
				Oops_Model_ProductPeer::addInstanceToPool($obj, $key);
			} // if key exists
		}
		$stmt->closeCursor();
		return $results;
	}
	/**
	 * Populates an object of the default type or an object that inherit from the default.
	 *
	 * @param      array $row PropelPDO resultset row.
	 * @param      int $startcol The 0-based offset for reading from the resultset row.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 * @return     array (Oops_Model_Product object, last column rank)
	 */
	public static function populateObject($row, $startcol = 0)
	{
		$key = Oops_Model_ProductPeer::getPrimaryKeyHashFromRow($row, $startcol);
		if (null !== ($obj = Oops_Model_ProductPeer::getInstanceFromPool($key))) {
			// We no longer rehydrate the object, since this can cause data loss.
			// See http://www.propelorm.org/ticket/509
			// $obj->hydrate($row, $startcol, true); // rehydrate
			$col = $startcol + Oops_Model_ProductPeer::NUM_HYDRATE_COLUMNS;
		} else {
			$cls = Oops_Model_ProductPeer::OM_CLASS;
			$obj = new $cls();
			$col = $obj->hydrate($row, $startcol);
			Oops_Model_ProductPeer::addInstanceToPool($obj, $key);
		}
		return array($obj, $col);
	}

	/**
	 * Returns the TableMap related to this peer.
	 * This method is not needed for general use but a specific application could have a need.
	 * @return     TableMap
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function getTableMap()
	{
		return Propel::getDatabaseMap(self::DATABASE_NAME)->getTable(self::TABLE_NAME);
	}

	/**
	 * Add a TableMap instance to the database for this peer class.
	 */
	public static function buildTableMap()
	{
	  $dbMap = Propel::getDatabaseMap(Oops_Model_Base_ProductPeer::DATABASE_NAME);
	  if (!$dbMap->hasTable(Oops_Model_Base_ProductPeer::TABLE_NAME))
	  {
	    $dbMap->addTableObject(new Oops_Model_ProductTableMap());
	  }
	}

	/**
	 * The class that the Peer will make instances of.
	 *
	 * If $withPrefix is true, the returned path
	 * uses a dot-path notation which is tranalted into a path
	 * relative to a location on the PHP include_path.
	 * (e.g. path.to.MyClass -> 'path/to/MyClass.php')
	 *
	 * @param      boolean $withPrefix Whether or not to return the path with the class name
	 * @return     string path.to.ClassName
	 */
	public static function getOMClass($withPrefix = true)
	{
		return $withPrefix ? Oops_Model_ProductPeer::CLASS_DEFAULT : Oops_Model_ProductPeer::OM_CLASS;
	}

	/**
	 * Performs an INSERT on the database, given a Oops_Model_Product or Criteria object.
	 *
	 * @param      mixed $values Criteria or Oops_Model_Product object containing data that is used to create the INSERT statement.
	 * @param      PropelPDO $con the PropelPDO connection to use
	 * @return     mixed The new primary key.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doInsert($values, PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(Oops_Model_ProductPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; // rename for clarity
		} else {
			$criteria = $values->buildCriteria(); // build Criteria from Oops_Model_Product object
		}

		if ($criteria->containsKey(Oops_Model_ProductPeer::ID_PRODUCT) && $criteria->keyContainsValue(Oops_Model_ProductPeer::ID_PRODUCT) ) {
			throw new PropelException('Cannot insert a value for auto-increment primary key ('.Oops_Model_ProductPeer::ID_PRODUCT.')');
		}


		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		try {
			// use transaction because $criteria could contain info
			// for more than one table (I guess, conceivably)
			$con->beginTransaction();
			$pk = BasePeer::doInsert($criteria, $con);
			$con->commit();
		} catch(PropelException $e) {
			$con->rollBack();
			throw $e;
		}

		return $pk;
	}

	/**
	 * Performs an UPDATE on the database, given a Oops_Model_Product or Criteria object.
	 *
	 * @param      mixed $values Criteria or Oops_Model_Product object containing data that is used to create the UPDATE statement.
	 * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
	 * @return     int The number of affected rows (if supported by underlying database driver).
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doUpdate($values, PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(Oops_Model_ProductPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$selectCriteria = new Criteria(self::DATABASE_NAME);

		if ($values instanceof Criteria) {
			$criteria = clone $values; // rename for clarity

			$comparison = $criteria->getComparison(Oops_Model_ProductPeer::ID_PRODUCT);
			$value = $criteria->remove(Oops_Model_ProductPeer::ID_PRODUCT);
			if ($value) {
				$selectCriteria->add(Oops_Model_ProductPeer::ID_PRODUCT, $value, $comparison);
			} else {
				$selectCriteria->setPrimaryTableName(Oops_Model_ProductPeer::TABLE_NAME);
			}

		} else { // $values is Oops_Model_Product object
			$criteria = $values->buildCriteria(); // gets full criteria
			$selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
		}

		// set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		return BasePeer::doUpdate($selectCriteria, $criteria, $con);
	}

	/**
	 * Deletes all rows from the product table.
	 *
	 * @param      PropelPDO $con the connection to use
	 * @return     int The number of affected rows (if supported by underlying database driver).
	 */
	public static function doDeleteAll(PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(Oops_Model_ProductPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}
		$affectedRows = 0; // initialize var to track total num of affected rows
		try {
			// use transaction because $criteria could contain info
			// for more than one table or we could emulating ON DELETE CASCADE, etc.
			$con->beginTransaction();
			$affectedRows += BasePeer::doDeleteAll(Oops_Model_ProductPeer::TABLE_NAME, $con, Oops_Model_ProductPeer::DATABASE_NAME);
			// Because this db requires some delete cascade/set null emulation, we have to
			// clear the cached instance *after* the emulation has happened (since
			// instances get re-added by the select statement contained therein).
			Oops_Model_ProductPeer::clearInstancePool();
			Oops_Model_ProductPeer::clearRelatedInstancePool();
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Performs a DELETE on the database, given a Oops_Model_Product or Criteria object OR a primary key value.
	 *
	 * @param      mixed $values Criteria or Oops_Model_Product object or primary key or array of primary keys
	 *              which is used to create the DELETE statement
	 * @param      PropelPDO $con the connection to use
	 * @return     int 	The number of affected rows (if supported by underlying database driver).  This includes CASCADE-related rows
	 *				if supported by native driver or if emulated using Propel.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	 public static function doDelete($values, PropelPDO $con = null)
	 {
		if ($con === null) {
			$con = Propel::getConnection(Oops_Model_ProductPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		if ($values instanceof Criteria) {
			// invalidate the cache for all objects of this type, since we have no
			// way of knowing (without running a query) what objects should be invalidated
			// from the cache based on this Criteria.
			Oops_Model_ProductPeer::clearInstancePool();
			// rename for clarity
			$criteria = clone $values;
		} elseif ($values instanceof Oops_Model_Product) { // it's a model object
			// invalidate the cache for this single object
			Oops_Model_ProductPeer::removeInstanceFromPool($values);
			// create criteria based on pk values
			$criteria = $values->buildPkeyCriteria();
		} else { // it's a primary key, or an array of pks
			$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(Oops_Model_ProductPeer::ID_PRODUCT, (array) $values, Criteria::IN);
			// invalidate the cache for this object(s)
			foreach ((array) $values as $singleval) {
				Oops_Model_ProductPeer::removeInstanceFromPool($singleval);
			}
		}

		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		$affectedRows = 0; // initialize var to track total num of affected rows

		try {
			// use transaction because $criteria could contain info
			// for more than one table or we could emulating ON DELETE CASCADE, etc.
			$con->beginTransaction();
			
			$affectedRows += BasePeer::doDelete($criteria, $con);
			Oops_Model_ProductPeer::clearRelatedInstancePool();
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Validates all modified columns of given Oops_Model_Product object.
	 * If parameter $columns is either a single column name or an array of column names
	 * than only those columns are validated.
	 *
	 * NOTICE: This does not apply to primary or foreign keys for now.
	 *
	 * @param      Oops_Model_Product $obj The object to validate.
	 * @param      mixed $cols Column name or array of column names.
	 *
	 * @return     mixed TRUE if all columns are valid or the error message of the first invalid column.
	 */
	public static function doValidate($obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(Oops_Model_ProductPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(Oops_Model_ProductPeer::TABLE_NAME);

			if (! is_array($cols)) {
				$cols = array($cols);
			}

			foreach ($cols as $colName) {
				if ($tableMap->containsColumn($colName)) {
					$get = 'get' . $tableMap->getColumn($colName)->getPhpName();
					$columns[$colName] = $obj->$get();
				}
			}
		} else {

		}

		return BasePeer::doValidate(Oops_Model_ProductPeer::DATABASE_NAME, Oops_Model_ProductPeer::TABLE_NAME, $columns);
	}

	/**
	 * Retrieve a single object by pkey.
	 *
	 * @param      int $pk the primary key.
	 * @param      PropelPDO $con the connection to use
	 * @return     Oops_Model_Product
	 */
	public static function retrieveByPK($pk, PropelPDO $con = null)
	{

		if (null !== ($obj = Oops_Model_ProductPeer::getInstanceFromPool((string) $pk))) {
			return $obj;
		}

		if ($con === null) {
			$con = Propel::getConnection(Oops_Model_ProductPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria = new Criteria(Oops_Model_ProductPeer::DATABASE_NAME);
		$criteria->add(Oops_Model_ProductPeer::ID_PRODUCT, $pk);

		$v = Oops_Model_ProductPeer::doSelect($criteria, $con);

		return !empty($v) > 0 ? $v[0] : null;
	}

	/**
	 * Retrieve multiple objects by pkey.
	 *
	 * @param      array $pks List of primary keys
	 * @param      PropelPDO $con the connection to use
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function retrieveByPKs($pks, PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(Oops_Model_ProductPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$objs = null;
		if (empty($pks)) {
			$objs = array();
		} else {
			$criteria = new Criteria(Oops_Model_ProductPeer::DATABASE_NAME);
			$criteria->add(Oops_Model_ProductPeer::ID_PRODUCT, $pks, Criteria::IN);
			$objs = Oops_Model_ProductPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} // Oops_Model_Base_ProductPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
Oops_Model_Base_ProductPeer::buildTableMap();

