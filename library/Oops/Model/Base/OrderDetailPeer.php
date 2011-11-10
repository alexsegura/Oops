<?php


define('OOPS_MODEL_ORDERDETAIL_ID_ORDER_DETAIL', _DB_PREFIX_ . 'order_detail.ID_ORDER_DETAIL');
define('OOPS_MODEL_ORDERDETAIL_ID_ORDER', _DB_PREFIX_ . 'order_detail.ID_ORDER');
define('OOPS_MODEL_ORDERDETAIL_PRODUCT_ID', _DB_PREFIX_ . 'order_detail.PRODUCT_ID');
define('OOPS_MODEL_ORDERDETAIL_PRODUCT_ATTRIBUTE_ID', _DB_PREFIX_ . 'order_detail.PRODUCT_ATTRIBUTE_ID');
define('OOPS_MODEL_ORDERDETAIL_PRODUCT_NAME', _DB_PREFIX_ . 'order_detail.PRODUCT_NAME');
define('OOPS_MODEL_ORDERDETAIL_PRODUCT_QUANTITY', _DB_PREFIX_ . 'order_detail.PRODUCT_QUANTITY');
define('OOPS_MODEL_ORDERDETAIL_PRODUCT_QUANTITY_IN_STOCK', _DB_PREFIX_ . 'order_detail.PRODUCT_QUANTITY_IN_STOCK');
define('OOPS_MODEL_ORDERDETAIL_PRODUCT_QUANTITY_REFUNDED', _DB_PREFIX_ . 'order_detail.PRODUCT_QUANTITY_REFUNDED');
define('OOPS_MODEL_ORDERDETAIL_PRODUCT_QUANTITY_RETURN', _DB_PREFIX_ . 'order_detail.PRODUCT_QUANTITY_RETURN');
define('OOPS_MODEL_ORDERDETAIL_PRODUCT_QUANTITY_REINJECTED', _DB_PREFIX_ . 'order_detail.PRODUCT_QUANTITY_REINJECTED');
define('OOPS_MODEL_ORDERDETAIL_PRODUCT_PRICE', _DB_PREFIX_ . 'order_detail.PRODUCT_PRICE');
define('OOPS_MODEL_ORDERDETAIL_REDUCTION_PERCENT', _DB_PREFIX_ . 'order_detail.REDUCTION_PERCENT');
define('OOPS_MODEL_ORDERDETAIL_REDUCTION_AMOUNT', _DB_PREFIX_ . 'order_detail.REDUCTION_AMOUNT');
define('OOPS_MODEL_ORDERDETAIL_GROUP_REDUCTION', _DB_PREFIX_ . 'order_detail.GROUP_REDUCTION');
define('OOPS_MODEL_ORDERDETAIL_PRODUCT_QUANTITY_DISCOUNT', _DB_PREFIX_ . 'order_detail.PRODUCT_QUANTITY_DISCOUNT');
define('OOPS_MODEL_ORDERDETAIL_PRODUCT_EAN13', _DB_PREFIX_ . 'order_detail.PRODUCT_EAN13');
define('OOPS_MODEL_ORDERDETAIL_PRODUCT_UPC', _DB_PREFIX_ . 'order_detail.PRODUCT_UPC');
define('OOPS_MODEL_ORDERDETAIL_PRODUCT_REFERENCE', _DB_PREFIX_ . 'order_detail.PRODUCT_REFERENCE');
define('OOPS_MODEL_ORDERDETAIL_PRODUCT_SUPPLIER_REFERENCE', _DB_PREFIX_ . 'order_detail.PRODUCT_SUPPLIER_REFERENCE');
define('OOPS_MODEL_ORDERDETAIL_PRODUCT_WEIGHT', _DB_PREFIX_ . 'order_detail.PRODUCT_WEIGHT');
define('OOPS_MODEL_ORDERDETAIL_TAX_NAME', _DB_PREFIX_ . 'order_detail.TAX_NAME');
define('OOPS_MODEL_ORDERDETAIL_TAX_RATE', _DB_PREFIX_ . 'order_detail.TAX_RATE');
define('OOPS_MODEL_ORDERDETAIL_ECOTAX', _DB_PREFIX_ . 'order_detail.ECOTAX');
define('OOPS_MODEL_ORDERDETAIL_ECOTAX_TAX_RATE', _DB_PREFIX_ . 'order_detail.ECOTAX_TAX_RATE');
define('OOPS_MODEL_ORDERDETAIL_DISCOUNT_QUANTITY_APPLIED', _DB_PREFIX_ . 'order_detail.DISCOUNT_QUANTITY_APPLIED');
define('OOPS_MODEL_ORDERDETAIL_DOWNLOAD_HASH', _DB_PREFIX_ . 'order_detail.DOWNLOAD_HASH');
define('OOPS_MODEL_ORDERDETAIL_DOWNLOAD_NB', _DB_PREFIX_ . 'order_detail.DOWNLOAD_NB');
define('OOPS_MODEL_ORDERDETAIL_DOWNLOAD_DEADLINE', _DB_PREFIX_ . 'order_detail.DOWNLOAD_DEADLINE');
define('OOPS_MODEL_ORDERDETAIL_TABLE_NAME', _DB_PREFIX_ . 'order_detail');

/**
 * Base static class for performing query and update operations on the 'order_detail' table.
 *
 * 
 *
 * @package    propel.generator.prestashop.om
 */
abstract class Oops_Model_Base_OrderDetailPeer {

	/** the default database name for this class */
	const DATABASE_NAME = 'prestashop';

	/** the table name for this class */
	const TABLE_NAME = OOPS_MODEL_ORDERDETAIL_TABLE_NAME;

	/** the related Propel class for this table */
	const OM_CLASS = 'Oops_Model_OrderDetail';

	/** A class that can be returned by this peer. */
	const CLASS_DEFAULT = 'prestashop.Oops_Model_OrderDetail';

	/** the related TableMap class for this table */
	const TM_CLASS = 'Oops_Model_OrderDetailTableMap';

	/** The total number of columns. */
	const NUM_COLUMNS = 28;

	/** The number of lazy-loaded columns. */
	const NUM_LAZY_LOAD_COLUMNS = 0;

	/** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
	const NUM_HYDRATE_COLUMNS = 28;

	/** the column name for the ID_ORDER_DETAIL field */
	const ID_ORDER_DETAIL = OOPS_MODEL_ORDERDETAIL_ID_ORDER_DETAIL;

	/** the column name for the ID_ORDER field */
	const ID_ORDER = OOPS_MODEL_ORDERDETAIL_ID_ORDER;

	/** the column name for the PRODUCT_ID field */
	const PRODUCT_ID = OOPS_MODEL_ORDERDETAIL_PRODUCT_ID;

	/** the column name for the PRODUCT_ATTRIBUTE_ID field */
	const PRODUCT_ATTRIBUTE_ID = OOPS_MODEL_ORDERDETAIL_PRODUCT_ATTRIBUTE_ID;

	/** the column name for the PRODUCT_NAME field */
	const PRODUCT_NAME = OOPS_MODEL_ORDERDETAIL_PRODUCT_NAME;

	/** the column name for the PRODUCT_QUANTITY field */
	const PRODUCT_QUANTITY = OOPS_MODEL_ORDERDETAIL_PRODUCT_QUANTITY;

	/** the column name for the PRODUCT_QUANTITY_IN_STOCK field */
	const PRODUCT_QUANTITY_IN_STOCK = OOPS_MODEL_ORDERDETAIL_PRODUCT_QUANTITY_IN_STOCK;

	/** the column name for the PRODUCT_QUANTITY_REFUNDED field */
	const PRODUCT_QUANTITY_REFUNDED = OOPS_MODEL_ORDERDETAIL_PRODUCT_QUANTITY_REFUNDED;

	/** the column name for the PRODUCT_QUANTITY_RETURN field */
	const PRODUCT_QUANTITY_RETURN = OOPS_MODEL_ORDERDETAIL_PRODUCT_QUANTITY_RETURN;

	/** the column name for the PRODUCT_QUANTITY_REINJECTED field */
	const PRODUCT_QUANTITY_REINJECTED = OOPS_MODEL_ORDERDETAIL_PRODUCT_QUANTITY_REINJECTED;

	/** the column name for the PRODUCT_PRICE field */
	const PRODUCT_PRICE = OOPS_MODEL_ORDERDETAIL_PRODUCT_PRICE;

	/** the column name for the REDUCTION_PERCENT field */
	const REDUCTION_PERCENT = OOPS_MODEL_ORDERDETAIL_REDUCTION_PERCENT;

	/** the column name for the REDUCTION_AMOUNT field */
	const REDUCTION_AMOUNT = OOPS_MODEL_ORDERDETAIL_REDUCTION_AMOUNT;

	/** the column name for the GROUP_REDUCTION field */
	const GROUP_REDUCTION = OOPS_MODEL_ORDERDETAIL_GROUP_REDUCTION;

	/** the column name for the PRODUCT_QUANTITY_DISCOUNT field */
	const PRODUCT_QUANTITY_DISCOUNT = OOPS_MODEL_ORDERDETAIL_PRODUCT_QUANTITY_DISCOUNT;

	/** the column name for the PRODUCT_EAN13 field */
	const PRODUCT_EAN13 = OOPS_MODEL_ORDERDETAIL_PRODUCT_EAN13;

	/** the column name for the PRODUCT_UPC field */
	const PRODUCT_UPC = OOPS_MODEL_ORDERDETAIL_PRODUCT_UPC;

	/** the column name for the PRODUCT_REFERENCE field */
	const PRODUCT_REFERENCE = OOPS_MODEL_ORDERDETAIL_PRODUCT_REFERENCE;

	/** the column name for the PRODUCT_SUPPLIER_REFERENCE field */
	const PRODUCT_SUPPLIER_REFERENCE = OOPS_MODEL_ORDERDETAIL_PRODUCT_SUPPLIER_REFERENCE;

	/** the column name for the PRODUCT_WEIGHT field */
	const PRODUCT_WEIGHT = OOPS_MODEL_ORDERDETAIL_PRODUCT_WEIGHT;

	/** the column name for the TAX_NAME field */
	const TAX_NAME = OOPS_MODEL_ORDERDETAIL_TAX_NAME;

	/** the column name for the TAX_RATE field */
	const TAX_RATE = OOPS_MODEL_ORDERDETAIL_TAX_RATE;

	/** the column name for the ECOTAX field */
	const ECOTAX = OOPS_MODEL_ORDERDETAIL_ECOTAX;

	/** the column name for the ECOTAX_TAX_RATE field */
	const ECOTAX_TAX_RATE = OOPS_MODEL_ORDERDETAIL_ECOTAX_TAX_RATE;

	/** the column name for the DISCOUNT_QUANTITY_APPLIED field */
	const DISCOUNT_QUANTITY_APPLIED = OOPS_MODEL_ORDERDETAIL_DISCOUNT_QUANTITY_APPLIED;

	/** the column name for the DOWNLOAD_HASH field */
	const DOWNLOAD_HASH = OOPS_MODEL_ORDERDETAIL_DOWNLOAD_HASH;

	/** the column name for the DOWNLOAD_NB field */
	const DOWNLOAD_NB = OOPS_MODEL_ORDERDETAIL_DOWNLOAD_NB;

	/** the column name for the DOWNLOAD_DEADLINE field */
	const DOWNLOAD_DEADLINE = OOPS_MODEL_ORDERDETAIL_DOWNLOAD_DEADLINE;

	/** The default string format for model objects of the related table **/
	const DEFAULT_STRING_FORMAT = 'YAML';

	/**
	 * An identiy map to hold any loaded instances of Oops_Model_OrderDetail objects.
	 * This must be public so that other peer classes can access this when hydrating from JOIN
	 * queries.
	 * @var        array Oops_Model_OrderDetail[]
	 */
	public static $instances = array();


	/**
	 * holds an array of fieldnames
	 *
	 * first dimension keys are the type constants
	 * e.g. self::$fieldNames[self::TYPE_PHPNAME][0] = 'Id'
	 */
	protected static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('IdOrderDetail', 'IdOrder', 'ProductId', 'ProductAttributeId', 'ProductName', 'ProductQuantity', 'ProductQuantityInStock', 'ProductQuantityRefunded', 'ProductQuantityReturn', 'ProductQuantityReinjected', 'ProductPrice', 'ReductionPercent', 'ReductionAmount', 'GroupReduction', 'ProductQuantityDiscount', 'ProductEan13', 'ProductUpc', 'ProductReference', 'ProductSupplierReference', 'ProductWeight', 'TaxName', 'TaxRate', 'Ecotax', 'EcotaxTaxRate', 'DiscountQuantityApplied', 'DownloadHash', 'DownloadNb', 'DownloadDeadline', ),
		BasePeer::TYPE_STUDLYPHPNAME => array ('idOrderDetail', 'idOrder', 'productId', 'productAttributeId', 'productName', 'productQuantity', 'productQuantityInStock', 'productQuantityRefunded', 'productQuantityReturn', 'productQuantityReinjected', 'productPrice', 'reductionPercent', 'reductionAmount', 'groupReduction', 'productQuantityDiscount', 'productEan13', 'productUpc', 'productReference', 'productSupplierReference', 'productWeight', 'taxName', 'taxRate', 'ecotax', 'ecotaxTaxRate', 'discountQuantityApplied', 'downloadHash', 'downloadNb', 'downloadDeadline', ),
		BasePeer::TYPE_COLNAME => array (self::ID_ORDER_DETAIL, self::ID_ORDER, self::PRODUCT_ID, self::PRODUCT_ATTRIBUTE_ID, self::PRODUCT_NAME, self::PRODUCT_QUANTITY, self::PRODUCT_QUANTITY_IN_STOCK, self::PRODUCT_QUANTITY_REFUNDED, self::PRODUCT_QUANTITY_RETURN, self::PRODUCT_QUANTITY_REINJECTED, self::PRODUCT_PRICE, self::REDUCTION_PERCENT, self::REDUCTION_AMOUNT, self::GROUP_REDUCTION, self::PRODUCT_QUANTITY_DISCOUNT, self::PRODUCT_EAN13, self::PRODUCT_UPC, self::PRODUCT_REFERENCE, self::PRODUCT_SUPPLIER_REFERENCE, self::PRODUCT_WEIGHT, self::TAX_NAME, self::TAX_RATE, self::ECOTAX, self::ECOTAX_TAX_RATE, self::DISCOUNT_QUANTITY_APPLIED, self::DOWNLOAD_HASH, self::DOWNLOAD_NB, self::DOWNLOAD_DEADLINE, ),
		BasePeer::TYPE_RAW_COLNAME => array ('ID_ORDER_DETAIL', 'ID_ORDER', 'PRODUCT_ID', 'PRODUCT_ATTRIBUTE_ID', 'PRODUCT_NAME', 'PRODUCT_QUANTITY', 'PRODUCT_QUANTITY_IN_STOCK', 'PRODUCT_QUANTITY_REFUNDED', 'PRODUCT_QUANTITY_RETURN', 'PRODUCT_QUANTITY_REINJECTED', 'PRODUCT_PRICE', 'REDUCTION_PERCENT', 'REDUCTION_AMOUNT', 'GROUP_REDUCTION', 'PRODUCT_QUANTITY_DISCOUNT', 'PRODUCT_EAN13', 'PRODUCT_UPC', 'PRODUCT_REFERENCE', 'PRODUCT_SUPPLIER_REFERENCE', 'PRODUCT_WEIGHT', 'TAX_NAME', 'TAX_RATE', 'ECOTAX', 'ECOTAX_TAX_RATE', 'DISCOUNT_QUANTITY_APPLIED', 'DOWNLOAD_HASH', 'DOWNLOAD_NB', 'DOWNLOAD_DEADLINE', ),
		BasePeer::TYPE_FIELDNAME => array ('id_order_detail', 'id_order', 'product_id', 'product_attribute_id', 'product_name', 'product_quantity', 'product_quantity_in_stock', 'product_quantity_refunded', 'product_quantity_return', 'product_quantity_reinjected', 'product_price', 'reduction_percent', 'reduction_amount', 'group_reduction', 'product_quantity_discount', 'product_ean13', 'product_upc', 'product_reference', 'product_supplier_reference', 'product_weight', 'tax_name', 'tax_rate', 'ecotax', 'ecotax_tax_rate', 'discount_quantity_applied', 'download_hash', 'download_nb', 'download_deadline', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, )
	);

	/**
	 * holds an array of keys for quick access to the fieldnames array
	 *
	 * first dimension keys are the type constants
	 * e.g. self::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
	 */
	protected static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('IdOrderDetail' => 0, 'IdOrder' => 1, 'ProductId' => 2, 'ProductAttributeId' => 3, 'ProductName' => 4, 'ProductQuantity' => 5, 'ProductQuantityInStock' => 6, 'ProductQuantityRefunded' => 7, 'ProductQuantityReturn' => 8, 'ProductQuantityReinjected' => 9, 'ProductPrice' => 10, 'ReductionPercent' => 11, 'ReductionAmount' => 12, 'GroupReduction' => 13, 'ProductQuantityDiscount' => 14, 'ProductEan13' => 15, 'ProductUpc' => 16, 'ProductReference' => 17, 'ProductSupplierReference' => 18, 'ProductWeight' => 19, 'TaxName' => 20, 'TaxRate' => 21, 'Ecotax' => 22, 'EcotaxTaxRate' => 23, 'DiscountQuantityApplied' => 24, 'DownloadHash' => 25, 'DownloadNb' => 26, 'DownloadDeadline' => 27, ),
		BasePeer::TYPE_STUDLYPHPNAME => array ('idOrderDetail' => 0, 'idOrder' => 1, 'productId' => 2, 'productAttributeId' => 3, 'productName' => 4, 'productQuantity' => 5, 'productQuantityInStock' => 6, 'productQuantityRefunded' => 7, 'productQuantityReturn' => 8, 'productQuantityReinjected' => 9, 'productPrice' => 10, 'reductionPercent' => 11, 'reductionAmount' => 12, 'groupReduction' => 13, 'productQuantityDiscount' => 14, 'productEan13' => 15, 'productUpc' => 16, 'productReference' => 17, 'productSupplierReference' => 18, 'productWeight' => 19, 'taxName' => 20, 'taxRate' => 21, 'ecotax' => 22, 'ecotaxTaxRate' => 23, 'discountQuantityApplied' => 24, 'downloadHash' => 25, 'downloadNb' => 26, 'downloadDeadline' => 27, ),
		BasePeer::TYPE_COLNAME => array (self::ID_ORDER_DETAIL => 0, self::ID_ORDER => 1, self::PRODUCT_ID => 2, self::PRODUCT_ATTRIBUTE_ID => 3, self::PRODUCT_NAME => 4, self::PRODUCT_QUANTITY => 5, self::PRODUCT_QUANTITY_IN_STOCK => 6, self::PRODUCT_QUANTITY_REFUNDED => 7, self::PRODUCT_QUANTITY_RETURN => 8, self::PRODUCT_QUANTITY_REINJECTED => 9, self::PRODUCT_PRICE => 10, self::REDUCTION_PERCENT => 11, self::REDUCTION_AMOUNT => 12, self::GROUP_REDUCTION => 13, self::PRODUCT_QUANTITY_DISCOUNT => 14, self::PRODUCT_EAN13 => 15, self::PRODUCT_UPC => 16, self::PRODUCT_REFERENCE => 17, self::PRODUCT_SUPPLIER_REFERENCE => 18, self::PRODUCT_WEIGHT => 19, self::TAX_NAME => 20, self::TAX_RATE => 21, self::ECOTAX => 22, self::ECOTAX_TAX_RATE => 23, self::DISCOUNT_QUANTITY_APPLIED => 24, self::DOWNLOAD_HASH => 25, self::DOWNLOAD_NB => 26, self::DOWNLOAD_DEADLINE => 27, ),
		BasePeer::TYPE_RAW_COLNAME => array ('ID_ORDER_DETAIL' => 0, 'ID_ORDER' => 1, 'PRODUCT_ID' => 2, 'PRODUCT_ATTRIBUTE_ID' => 3, 'PRODUCT_NAME' => 4, 'PRODUCT_QUANTITY' => 5, 'PRODUCT_QUANTITY_IN_STOCK' => 6, 'PRODUCT_QUANTITY_REFUNDED' => 7, 'PRODUCT_QUANTITY_RETURN' => 8, 'PRODUCT_QUANTITY_REINJECTED' => 9, 'PRODUCT_PRICE' => 10, 'REDUCTION_PERCENT' => 11, 'REDUCTION_AMOUNT' => 12, 'GROUP_REDUCTION' => 13, 'PRODUCT_QUANTITY_DISCOUNT' => 14, 'PRODUCT_EAN13' => 15, 'PRODUCT_UPC' => 16, 'PRODUCT_REFERENCE' => 17, 'PRODUCT_SUPPLIER_REFERENCE' => 18, 'PRODUCT_WEIGHT' => 19, 'TAX_NAME' => 20, 'TAX_RATE' => 21, 'ECOTAX' => 22, 'ECOTAX_TAX_RATE' => 23, 'DISCOUNT_QUANTITY_APPLIED' => 24, 'DOWNLOAD_HASH' => 25, 'DOWNLOAD_NB' => 26, 'DOWNLOAD_DEADLINE' => 27, ),
		BasePeer::TYPE_FIELDNAME => array ('id_order_detail' => 0, 'id_order' => 1, 'product_id' => 2, 'product_attribute_id' => 3, 'product_name' => 4, 'product_quantity' => 5, 'product_quantity_in_stock' => 6, 'product_quantity_refunded' => 7, 'product_quantity_return' => 8, 'product_quantity_reinjected' => 9, 'product_price' => 10, 'reduction_percent' => 11, 'reduction_amount' => 12, 'group_reduction' => 13, 'product_quantity_discount' => 14, 'product_ean13' => 15, 'product_upc' => 16, 'product_reference' => 17, 'product_supplier_reference' => 18, 'product_weight' => 19, 'tax_name' => 20, 'tax_rate' => 21, 'ecotax' => 22, 'ecotax_tax_rate' => 23, 'discount_quantity_applied' => 24, 'download_hash' => 25, 'download_nb' => 26, 'download_deadline' => 27, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, )
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
	 * @param      string $column The column name for current table. (i.e. Oops_Model_OrderDetailPeer::COLUMN_NAME).
	 * @return     string
	 */
	public static function alias($alias, $column)
	{
		return str_replace(Oops_Model_OrderDetailPeer::TABLE_NAME.'.', $alias.'.', $column);
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
			$criteria->addSelectColumn(Oops_Model_OrderDetailPeer::ID_ORDER_DETAIL);
			$criteria->addSelectColumn(Oops_Model_OrderDetailPeer::ID_ORDER);
			$criteria->addSelectColumn(Oops_Model_OrderDetailPeer::PRODUCT_ID);
			$criteria->addSelectColumn(Oops_Model_OrderDetailPeer::PRODUCT_ATTRIBUTE_ID);
			$criteria->addSelectColumn(Oops_Model_OrderDetailPeer::PRODUCT_NAME);
			$criteria->addSelectColumn(Oops_Model_OrderDetailPeer::PRODUCT_QUANTITY);
			$criteria->addSelectColumn(Oops_Model_OrderDetailPeer::PRODUCT_QUANTITY_IN_STOCK);
			$criteria->addSelectColumn(Oops_Model_OrderDetailPeer::PRODUCT_QUANTITY_REFUNDED);
			$criteria->addSelectColumn(Oops_Model_OrderDetailPeer::PRODUCT_QUANTITY_RETURN);
			$criteria->addSelectColumn(Oops_Model_OrderDetailPeer::PRODUCT_QUANTITY_REINJECTED);
			$criteria->addSelectColumn(Oops_Model_OrderDetailPeer::PRODUCT_PRICE);
			$criteria->addSelectColumn(Oops_Model_OrderDetailPeer::REDUCTION_PERCENT);
			$criteria->addSelectColumn(Oops_Model_OrderDetailPeer::REDUCTION_AMOUNT);
			$criteria->addSelectColumn(Oops_Model_OrderDetailPeer::GROUP_REDUCTION);
			$criteria->addSelectColumn(Oops_Model_OrderDetailPeer::PRODUCT_QUANTITY_DISCOUNT);
			$criteria->addSelectColumn(Oops_Model_OrderDetailPeer::PRODUCT_EAN13);
			$criteria->addSelectColumn(Oops_Model_OrderDetailPeer::PRODUCT_UPC);
			$criteria->addSelectColumn(Oops_Model_OrderDetailPeer::PRODUCT_REFERENCE);
			$criteria->addSelectColumn(Oops_Model_OrderDetailPeer::PRODUCT_SUPPLIER_REFERENCE);
			$criteria->addSelectColumn(Oops_Model_OrderDetailPeer::PRODUCT_WEIGHT);
			$criteria->addSelectColumn(Oops_Model_OrderDetailPeer::TAX_NAME);
			$criteria->addSelectColumn(Oops_Model_OrderDetailPeer::TAX_RATE);
			$criteria->addSelectColumn(Oops_Model_OrderDetailPeer::ECOTAX);
			$criteria->addSelectColumn(Oops_Model_OrderDetailPeer::ECOTAX_TAX_RATE);
			$criteria->addSelectColumn(Oops_Model_OrderDetailPeer::DISCOUNT_QUANTITY_APPLIED);
			$criteria->addSelectColumn(Oops_Model_OrderDetailPeer::DOWNLOAD_HASH);
			$criteria->addSelectColumn(Oops_Model_OrderDetailPeer::DOWNLOAD_NB);
			$criteria->addSelectColumn(Oops_Model_OrderDetailPeer::DOWNLOAD_DEADLINE);
		} else {
			$criteria->addSelectColumn($alias . '.ID_ORDER_DETAIL');
			$criteria->addSelectColumn($alias . '.ID_ORDER');
			$criteria->addSelectColumn($alias . '.PRODUCT_ID');
			$criteria->addSelectColumn($alias . '.PRODUCT_ATTRIBUTE_ID');
			$criteria->addSelectColumn($alias . '.PRODUCT_NAME');
			$criteria->addSelectColumn($alias . '.PRODUCT_QUANTITY');
			$criteria->addSelectColumn($alias . '.PRODUCT_QUANTITY_IN_STOCK');
			$criteria->addSelectColumn($alias . '.PRODUCT_QUANTITY_REFUNDED');
			$criteria->addSelectColumn($alias . '.PRODUCT_QUANTITY_RETURN');
			$criteria->addSelectColumn($alias . '.PRODUCT_QUANTITY_REINJECTED');
			$criteria->addSelectColumn($alias . '.PRODUCT_PRICE');
			$criteria->addSelectColumn($alias . '.REDUCTION_PERCENT');
			$criteria->addSelectColumn($alias . '.REDUCTION_AMOUNT');
			$criteria->addSelectColumn($alias . '.GROUP_REDUCTION');
			$criteria->addSelectColumn($alias . '.PRODUCT_QUANTITY_DISCOUNT');
			$criteria->addSelectColumn($alias . '.PRODUCT_EAN13');
			$criteria->addSelectColumn($alias . '.PRODUCT_UPC');
			$criteria->addSelectColumn($alias . '.PRODUCT_REFERENCE');
			$criteria->addSelectColumn($alias . '.PRODUCT_SUPPLIER_REFERENCE');
			$criteria->addSelectColumn($alias . '.PRODUCT_WEIGHT');
			$criteria->addSelectColumn($alias . '.TAX_NAME');
			$criteria->addSelectColumn($alias . '.TAX_RATE');
			$criteria->addSelectColumn($alias . '.ECOTAX');
			$criteria->addSelectColumn($alias . '.ECOTAX_TAX_RATE');
			$criteria->addSelectColumn($alias . '.DISCOUNT_QUANTITY_APPLIED');
			$criteria->addSelectColumn($alias . '.DOWNLOAD_HASH');
			$criteria->addSelectColumn($alias . '.DOWNLOAD_NB');
			$criteria->addSelectColumn($alias . '.DOWNLOAD_DEADLINE');
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
		$criteria->setPrimaryTableName(Oops_Model_OrderDetailPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			Oops_Model_OrderDetailPeer::addSelectColumns($criteria);
		}

		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
		$criteria->setDbName(self::DATABASE_NAME); // Set the correct dbName

		if ($con === null) {
			$con = Propel::getConnection(Oops_Model_OrderDetailPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
	 * @return     Oops_Model_OrderDetail
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
	{
		$critcopy = clone $criteria;
		$critcopy->setLimit(1);
		$objects = Oops_Model_OrderDetailPeer::doSelect($critcopy, $con);
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
		return Oops_Model_OrderDetailPeer::populateObjects(Oops_Model_OrderDetailPeer::doSelectStmt($criteria, $con));
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
			$con = Propel::getConnection(Oops_Model_OrderDetailPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		if (!$criteria->hasSelectClause()) {
			$criteria = clone $criteria;
			Oops_Model_OrderDetailPeer::addSelectColumns($criteria);
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
	 * @param      Oops_Model_OrderDetail $value A Oops_Model_OrderDetail object.
	 * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
	 */
	public static function addInstanceToPool($obj, $key = null)
	{
		if (Propel::isInstancePoolingEnabled()) {
			if ($key === null) {
				$key = (string) $obj->getIdOrderDetail();
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
	 * @param      mixed $value A Oops_Model_OrderDetail object or a primary key value.
	 */
	public static function removeInstanceFromPool($value)
	{
		if (Propel::isInstancePoolingEnabled() && $value !== null) {
			if (is_object($value) && $value instanceof Oops_Model_OrderDetail) {
				$key = (string) $value->getIdOrderDetail();
			} elseif (is_scalar($value)) {
				// assume we've been passed a primary key
				$key = (string) $value;
			} else {
				$e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Oops_Model_OrderDetail object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
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
	 * @return     Oops_Model_OrderDetail Found object or NULL if 1) no instance exists for specified key or 2) instance pooling has been disabled.
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
	 * Method to invalidate the instance pool of all tables related to order_detail
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
		$cls = Oops_Model_OrderDetailPeer::getOMClass(false);
		// populate the object(s)
		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key = Oops_Model_OrderDetailPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj = Oops_Model_OrderDetailPeer::getInstanceFromPool($key))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj->hydrate($row, 0, true); // rehydrate
				$results[] = $obj;
			} else {
				$obj = new $cls();
				$obj->hydrate($row);
				$results[] = $obj;
				Oops_Model_OrderDetailPeer::addInstanceToPool($obj, $key);
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
	 * @return     array (Oops_Model_OrderDetail object, last column rank)
	 */
	public static function populateObject($row, $startcol = 0)
	{
		$key = Oops_Model_OrderDetailPeer::getPrimaryKeyHashFromRow($row, $startcol);
		if (null !== ($obj = Oops_Model_OrderDetailPeer::getInstanceFromPool($key))) {
			// We no longer rehydrate the object, since this can cause data loss.
			// See http://www.propelorm.org/ticket/509
			// $obj->hydrate($row, $startcol, true); // rehydrate
			$col = $startcol + Oops_Model_OrderDetailPeer::NUM_HYDRATE_COLUMNS;
		} else {
			$cls = Oops_Model_OrderDetailPeer::OM_CLASS;
			$obj = new $cls();
			$col = $obj->hydrate($row, $startcol);
			Oops_Model_OrderDetailPeer::addInstanceToPool($obj, $key);
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
	  $dbMap = Propel::getDatabaseMap(Oops_Model_Base_OrderDetailPeer::DATABASE_NAME);
	  if (!$dbMap->hasTable(Oops_Model_Base_OrderDetailPeer::TABLE_NAME))
	  {
	    $dbMap->addTableObject(new Oops_Model_OrderDetailTableMap());
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
		return $withPrefix ? Oops_Model_OrderDetailPeer::CLASS_DEFAULT : Oops_Model_OrderDetailPeer::OM_CLASS;
	}

	/**
	 * Performs an INSERT on the database, given a Oops_Model_OrderDetail or Criteria object.
	 *
	 * @param      mixed $values Criteria or Oops_Model_OrderDetail object containing data that is used to create the INSERT statement.
	 * @param      PropelPDO $con the PropelPDO connection to use
	 * @return     mixed The new primary key.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doInsert($values, PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(Oops_Model_OrderDetailPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; // rename for clarity
		} else {
			$criteria = $values->buildCriteria(); // build Criteria from Oops_Model_OrderDetail object
		}

		if ($criteria->containsKey(Oops_Model_OrderDetailPeer::ID_ORDER_DETAIL) && $criteria->keyContainsValue(Oops_Model_OrderDetailPeer::ID_ORDER_DETAIL) ) {
			throw new PropelException('Cannot insert a value for auto-increment primary key ('.Oops_Model_OrderDetailPeer::ID_ORDER_DETAIL.')');
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
	 * Performs an UPDATE on the database, given a Oops_Model_OrderDetail or Criteria object.
	 *
	 * @param      mixed $values Criteria or Oops_Model_OrderDetail object containing data that is used to create the UPDATE statement.
	 * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
	 * @return     int The number of affected rows (if supported by underlying database driver).
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doUpdate($values, PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(Oops_Model_OrderDetailPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$selectCriteria = new Criteria(self::DATABASE_NAME);

		if ($values instanceof Criteria) {
			$criteria = clone $values; // rename for clarity

			$comparison = $criteria->getComparison(Oops_Model_OrderDetailPeer::ID_ORDER_DETAIL);
			$value = $criteria->remove(Oops_Model_OrderDetailPeer::ID_ORDER_DETAIL);
			if ($value) {
				$selectCriteria->add(Oops_Model_OrderDetailPeer::ID_ORDER_DETAIL, $value, $comparison);
			} else {
				$selectCriteria->setPrimaryTableName(Oops_Model_OrderDetailPeer::TABLE_NAME);
			}

		} else { // $values is Oops_Model_OrderDetail object
			$criteria = $values->buildCriteria(); // gets full criteria
			$selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
		}

		// set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		return BasePeer::doUpdate($selectCriteria, $criteria, $con);
	}

	/**
	 * Deletes all rows from the order_detail table.
	 *
	 * @param      PropelPDO $con the connection to use
	 * @return     int The number of affected rows (if supported by underlying database driver).
	 */
	public static function doDeleteAll(PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(Oops_Model_OrderDetailPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}
		$affectedRows = 0; // initialize var to track total num of affected rows
		try {
			// use transaction because $criteria could contain info
			// for more than one table or we could emulating ON DELETE CASCADE, etc.
			$con->beginTransaction();
			$affectedRows += BasePeer::doDeleteAll(Oops_Model_OrderDetailPeer::TABLE_NAME, $con, Oops_Model_OrderDetailPeer::DATABASE_NAME);
			// Because this db requires some delete cascade/set null emulation, we have to
			// clear the cached instance *after* the emulation has happened (since
			// instances get re-added by the select statement contained therein).
			Oops_Model_OrderDetailPeer::clearInstancePool();
			Oops_Model_OrderDetailPeer::clearRelatedInstancePool();
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Performs a DELETE on the database, given a Oops_Model_OrderDetail or Criteria object OR a primary key value.
	 *
	 * @param      mixed $values Criteria or Oops_Model_OrderDetail object or primary key or array of primary keys
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
			$con = Propel::getConnection(Oops_Model_OrderDetailPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		if ($values instanceof Criteria) {
			// invalidate the cache for all objects of this type, since we have no
			// way of knowing (without running a query) what objects should be invalidated
			// from the cache based on this Criteria.
			Oops_Model_OrderDetailPeer::clearInstancePool();
			// rename for clarity
			$criteria = clone $values;
		} elseif ($values instanceof Oops_Model_OrderDetail) { // it's a model object
			// invalidate the cache for this single object
			Oops_Model_OrderDetailPeer::removeInstanceFromPool($values);
			// create criteria based on pk values
			$criteria = $values->buildPkeyCriteria();
		} else { // it's a primary key, or an array of pks
			$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(Oops_Model_OrderDetailPeer::ID_ORDER_DETAIL, (array) $values, Criteria::IN);
			// invalidate the cache for this object(s)
			foreach ((array) $values as $singleval) {
				Oops_Model_OrderDetailPeer::removeInstanceFromPool($singleval);
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
			Oops_Model_OrderDetailPeer::clearRelatedInstancePool();
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Validates all modified columns of given Oops_Model_OrderDetail object.
	 * If parameter $columns is either a single column name or an array of column names
	 * than only those columns are validated.
	 *
	 * NOTICE: This does not apply to primary or foreign keys for now.
	 *
	 * @param      Oops_Model_OrderDetail $obj The object to validate.
	 * @param      mixed $cols Column name or array of column names.
	 *
	 * @return     mixed TRUE if all columns are valid or the error message of the first invalid column.
	 */
	public static function doValidate($obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(Oops_Model_OrderDetailPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(Oops_Model_OrderDetailPeer::TABLE_NAME);

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

		return BasePeer::doValidate(Oops_Model_OrderDetailPeer::DATABASE_NAME, Oops_Model_OrderDetailPeer::TABLE_NAME, $columns);
	}

	/**
	 * Retrieve a single object by pkey.
	 *
	 * @param      int $pk the primary key.
	 * @param      PropelPDO $con the connection to use
	 * @return     Oops_Model_OrderDetail
	 */
	public static function retrieveByPK($pk, PropelPDO $con = null)
	{

		if (null !== ($obj = Oops_Model_OrderDetailPeer::getInstanceFromPool((string) $pk))) {
			return $obj;
		}

		if ($con === null) {
			$con = Propel::getConnection(Oops_Model_OrderDetailPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria = new Criteria(Oops_Model_OrderDetailPeer::DATABASE_NAME);
		$criteria->add(Oops_Model_OrderDetailPeer::ID_ORDER_DETAIL, $pk);

		$v = Oops_Model_OrderDetailPeer::doSelect($criteria, $con);

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
			$con = Propel::getConnection(Oops_Model_OrderDetailPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$objs = null;
		if (empty($pks)) {
			$objs = array();
		} else {
			$criteria = new Criteria(Oops_Model_OrderDetailPeer::DATABASE_NAME);
			$criteria->add(Oops_Model_OrderDetailPeer::ID_ORDER_DETAIL, $pks, Criteria::IN);
			$objs = Oops_Model_OrderDetailPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} // Oops_Model_Base_OrderDetailPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
Oops_Model_Base_OrderDetailPeer::buildTableMap();

