<?php


/**
 * Base static class for performing query and update operations on the 'djland_orders' table.
 *
 * 
 *
 * @package    propel.generator.prestashop.om
 */
abstract class Oops_Model_Base_OrdersPeer {

	/** the default database name for this class */
	const DATABASE_NAME = 'prestashop';

	/** the table name for this class */
	const TABLE_NAME = _DB_PREFIX_ . 'djland_orders';

	/** the related Propel class for this table */
	const OM_CLASS = 'Oops_Model_Orders';

	/** A class that can be returned by this peer. */
	const CLASS_DEFAULT = 'prestashop.Oops_Model_Orders';

	/** the related TableMap class for this table */
	const TM_CLASS = 'Oops_Model_OrdersTableMap';

	/** The total number of columns. */
	const NUM_COLUMNS = 31;

	/** The number of lazy-loaded columns. */
	const NUM_LAZY_LOAD_COLUMNS = 0;

	/** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
	const NUM_HYDRATE_COLUMNS = 31;

	/** the column name for the ID_ORDER field */
	const ID_ORDER = _DB_PREFIX_ . 'djland_orders.ID_ORDER';

	/** the column name for the ID_CARRIER field */
	const ID_CARRIER = _DB_PREFIX_ . 'djland_orders.ID_CARRIER';

	/** the column name for the ID_LANG field */
	const ID_LANG = _DB_PREFIX_ . 'djland_orders.ID_LANG';

	/** the column name for the ID_CUSTOMER field */
	const ID_CUSTOMER = _DB_PREFIX_ . 'djland_orders.ID_CUSTOMER';

	/** the column name for the ID_CART field */
	const ID_CART = _DB_PREFIX_ . 'djland_orders.ID_CART';

	/** the column name for the ID_CURRENCY field */
	const ID_CURRENCY = _DB_PREFIX_ . 'djland_orders.ID_CURRENCY';

	/** the column name for the ID_ADDRESS_DELIVERY field */
	const ID_ADDRESS_DELIVERY = _DB_PREFIX_ . 'djland_orders.ID_ADDRESS_DELIVERY';

	/** the column name for the ID_ADDRESS_INVOICE field */
	const ID_ADDRESS_INVOICE = _DB_PREFIX_ . 'djland_orders.ID_ADDRESS_INVOICE';

	/** the column name for the SECURE_KEY field */
	const SECURE_KEY = _DB_PREFIX_ . 'djland_orders.SECURE_KEY';

	/** the column name for the PAYMENT field */
	const PAYMENT = _DB_PREFIX_ . 'djland_orders.PAYMENT';

	/** the column name for the CONVERSION_RATE field */
	const CONVERSION_RATE = _DB_PREFIX_ . 'djland_orders.CONVERSION_RATE';

	/** the column name for the MODULE field */
	const MODULE = _DB_PREFIX_ . 'djland_orders.MODULE';

	/** the column name for the RECYCLABLE field */
	const RECYCLABLE = _DB_PREFIX_ . 'djland_orders.RECYCLABLE';

	/** the column name for the GIFT field */
	const GIFT = _DB_PREFIX_ . 'djland_orders.GIFT';

	/** the column name for the GIFT_MESSAGE field */
	const GIFT_MESSAGE = _DB_PREFIX_ . 'djland_orders.GIFT_MESSAGE';

	/** the column name for the SHIPPING_NUMBER field */
	const SHIPPING_NUMBER = _DB_PREFIX_ . 'djland_orders.SHIPPING_NUMBER';

	/** the column name for the TOTAL_DISCOUNTS field */
	const TOTAL_DISCOUNTS = _DB_PREFIX_ . 'djland_orders.TOTAL_DISCOUNTS';

	/** the column name for the TOTAL_PAID field */
	const TOTAL_PAID = _DB_PREFIX_ . 'djland_orders.TOTAL_PAID';

	/** the column name for the TOTAL_PAID_REAL field */
	const TOTAL_PAID_REAL = _DB_PREFIX_ . 'djland_orders.TOTAL_PAID_REAL';

	/** the column name for the TOTAL_PRODUCTS field */
	const TOTAL_PRODUCTS = _DB_PREFIX_ . 'djland_orders.TOTAL_PRODUCTS';

	/** the column name for the TOTAL_PRODUCTS_WT field */
	const TOTAL_PRODUCTS_WT = _DB_PREFIX_ . 'djland_orders.TOTAL_PRODUCTS_WT';

	/** the column name for the TOTAL_SHIPPING field */
	const TOTAL_SHIPPING = _DB_PREFIX_ . 'djland_orders.TOTAL_SHIPPING';

	/** the column name for the CARRIER_TAX_RATE field */
	const CARRIER_TAX_RATE = _DB_PREFIX_ . 'djland_orders.CARRIER_TAX_RATE';

	/** the column name for the TOTAL_WRAPPING field */
	const TOTAL_WRAPPING = _DB_PREFIX_ . 'djland_orders.TOTAL_WRAPPING';

	/** the column name for the INVOICE_NUMBER field */
	const INVOICE_NUMBER = _DB_PREFIX_ . 'djland_orders.INVOICE_NUMBER';

	/** the column name for the DELIVERY_NUMBER field */
	const DELIVERY_NUMBER = _DB_PREFIX_ . 'djland_orders.DELIVERY_NUMBER';

	/** the column name for the INVOICE_DATE field */
	const INVOICE_DATE = _DB_PREFIX_ . 'djland_orders.INVOICE_DATE';

	/** the column name for the DELIVERY_DATE field */
	const DELIVERY_DATE = _DB_PREFIX_ . 'djland_orders.DELIVERY_DATE';

	/** the column name for the VALID field */
	const VALID = _DB_PREFIX_ . 'djland_orders.VALID';

	/** the column name for the DATE_ADD field */
	const DATE_ADD = _DB_PREFIX_ . 'djland_orders.DATE_ADD';

	/** the column name for the DATE_UPD field */
	const DATE_UPD = _DB_PREFIX_ . 'djland_orders.DATE_UPD';

	/** The default string format for model objects of the related table **/
	const DEFAULT_STRING_FORMAT = 'YAML';

	/**
	 * An identiy map to hold any loaded instances of Oops_Model_Orders objects.
	 * This must be public so that other peer classes can access this when hydrating from JOIN
	 * queries.
	 * @var        array Oops_Model_Orders[]
	 */
	public static $instances = array();


	/**
	 * holds an array of fieldnames
	 *
	 * first dimension keys are the type constants
	 * e.g. self::$fieldNames[self::TYPE_PHPNAME][0] = 'Id'
	 */
	protected static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('IdOrder', 'IdCarrier', 'IdLang', 'IdCustomer', 'IdCart', 'IdCurrency', 'IdAddressDelivery', 'IdAddressInvoice', 'SecureKey', 'Payment', 'ConversionRate', 'Module', 'Recyclable', 'Gift', 'GiftMessage', 'ShippingNumber', 'TotalDiscounts', 'TotalPaid', 'TotalPaidReal', 'TotalProducts', 'TotalProductsWt', 'TotalShipping', 'CarrierTaxRate', 'TotalWrapping', 'InvoiceNumber', 'DeliveryNumber', 'InvoiceDate', 'DeliveryDate', 'Valid', 'DateAdd', 'DateUpd', ),
		BasePeer::TYPE_STUDLYPHPNAME => array ('idOrder', 'idCarrier', 'idLang', 'idCustomer', 'idCart', 'idCurrency', 'idAddressDelivery', 'idAddressInvoice', 'secureKey', 'payment', 'conversionRate', 'module', 'recyclable', 'gift', 'giftMessage', 'shippingNumber', 'totalDiscounts', 'totalPaid', 'totalPaidReal', 'totalProducts', 'totalProductsWt', 'totalShipping', 'carrierTaxRate', 'totalWrapping', 'invoiceNumber', 'deliveryNumber', 'invoiceDate', 'deliveryDate', 'valid', 'dateAdd', 'dateUpd', ),
		BasePeer::TYPE_COLNAME => array (self::ID_ORDER, self::ID_CARRIER, self::ID_LANG, self::ID_CUSTOMER, self::ID_CART, self::ID_CURRENCY, self::ID_ADDRESS_DELIVERY, self::ID_ADDRESS_INVOICE, self::SECURE_KEY, self::PAYMENT, self::CONVERSION_RATE, self::MODULE, self::RECYCLABLE, self::GIFT, self::GIFT_MESSAGE, self::SHIPPING_NUMBER, self::TOTAL_DISCOUNTS, self::TOTAL_PAID, self::TOTAL_PAID_REAL, self::TOTAL_PRODUCTS, self::TOTAL_PRODUCTS_WT, self::TOTAL_SHIPPING, self::CARRIER_TAX_RATE, self::TOTAL_WRAPPING, self::INVOICE_NUMBER, self::DELIVERY_NUMBER, self::INVOICE_DATE, self::DELIVERY_DATE, self::VALID, self::DATE_ADD, self::DATE_UPD, ),
		BasePeer::TYPE_RAW_COLNAME => array ('ID_ORDER', 'ID_CARRIER', 'ID_LANG', 'ID_CUSTOMER', 'ID_CART', 'ID_CURRENCY', 'ID_ADDRESS_DELIVERY', 'ID_ADDRESS_INVOICE', 'SECURE_KEY', 'PAYMENT', 'CONVERSION_RATE', 'MODULE', 'RECYCLABLE', 'GIFT', 'GIFT_MESSAGE', 'SHIPPING_NUMBER', 'TOTAL_DISCOUNTS', 'TOTAL_PAID', 'TOTAL_PAID_REAL', 'TOTAL_PRODUCTS', 'TOTAL_PRODUCTS_WT', 'TOTAL_SHIPPING', 'CARRIER_TAX_RATE', 'TOTAL_WRAPPING', 'INVOICE_NUMBER', 'DELIVERY_NUMBER', 'INVOICE_DATE', 'DELIVERY_DATE', 'VALID', 'DATE_ADD', 'DATE_UPD', ),
		BasePeer::TYPE_FIELDNAME => array ('id_order', 'id_carrier', 'id_lang', 'id_customer', 'id_cart', 'id_currency', 'id_address_delivery', 'id_address_invoice', 'secure_key', 'payment', 'conversion_rate', 'module', 'recyclable', 'gift', 'gift_message', 'shipping_number', 'total_discounts', 'total_paid', 'total_paid_real', 'total_products', 'total_products_wt', 'total_shipping', 'carrier_tax_rate', 'total_wrapping', 'invoice_number', 'delivery_number', 'invoice_date', 'delivery_date', 'valid', 'date_add', 'date_upd', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, )
	);

	/**
	 * holds an array of keys for quick access to the fieldnames array
	 *
	 * first dimension keys are the type constants
	 * e.g. self::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
	 */
	protected static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('IdOrder' => 0, 'IdCarrier' => 1, 'IdLang' => 2, 'IdCustomer' => 3, 'IdCart' => 4, 'IdCurrency' => 5, 'IdAddressDelivery' => 6, 'IdAddressInvoice' => 7, 'SecureKey' => 8, 'Payment' => 9, 'ConversionRate' => 10, 'Module' => 11, 'Recyclable' => 12, 'Gift' => 13, 'GiftMessage' => 14, 'ShippingNumber' => 15, 'TotalDiscounts' => 16, 'TotalPaid' => 17, 'TotalPaidReal' => 18, 'TotalProducts' => 19, 'TotalProductsWt' => 20, 'TotalShipping' => 21, 'CarrierTaxRate' => 22, 'TotalWrapping' => 23, 'InvoiceNumber' => 24, 'DeliveryNumber' => 25, 'InvoiceDate' => 26, 'DeliveryDate' => 27, 'Valid' => 28, 'DateAdd' => 29, 'DateUpd' => 30, ),
		BasePeer::TYPE_STUDLYPHPNAME => array ('idOrder' => 0, 'idCarrier' => 1, 'idLang' => 2, 'idCustomer' => 3, 'idCart' => 4, 'idCurrency' => 5, 'idAddressDelivery' => 6, 'idAddressInvoice' => 7, 'secureKey' => 8, 'payment' => 9, 'conversionRate' => 10, 'module' => 11, 'recyclable' => 12, 'gift' => 13, 'giftMessage' => 14, 'shippingNumber' => 15, 'totalDiscounts' => 16, 'totalPaid' => 17, 'totalPaidReal' => 18, 'totalProducts' => 19, 'totalProductsWt' => 20, 'totalShipping' => 21, 'carrierTaxRate' => 22, 'totalWrapping' => 23, 'invoiceNumber' => 24, 'deliveryNumber' => 25, 'invoiceDate' => 26, 'deliveryDate' => 27, 'valid' => 28, 'dateAdd' => 29, 'dateUpd' => 30, ),
		BasePeer::TYPE_COLNAME => array (self::ID_ORDER => 0, self::ID_CARRIER => 1, self::ID_LANG => 2, self::ID_CUSTOMER => 3, self::ID_CART => 4, self::ID_CURRENCY => 5, self::ID_ADDRESS_DELIVERY => 6, self::ID_ADDRESS_INVOICE => 7, self::SECURE_KEY => 8, self::PAYMENT => 9, self::CONVERSION_RATE => 10, self::MODULE => 11, self::RECYCLABLE => 12, self::GIFT => 13, self::GIFT_MESSAGE => 14, self::SHIPPING_NUMBER => 15, self::TOTAL_DISCOUNTS => 16, self::TOTAL_PAID => 17, self::TOTAL_PAID_REAL => 18, self::TOTAL_PRODUCTS => 19, self::TOTAL_PRODUCTS_WT => 20, self::TOTAL_SHIPPING => 21, self::CARRIER_TAX_RATE => 22, self::TOTAL_WRAPPING => 23, self::INVOICE_NUMBER => 24, self::DELIVERY_NUMBER => 25, self::INVOICE_DATE => 26, self::DELIVERY_DATE => 27, self::VALID => 28, self::DATE_ADD => 29, self::DATE_UPD => 30, ),
		BasePeer::TYPE_RAW_COLNAME => array ('ID_ORDER' => 0, 'ID_CARRIER' => 1, 'ID_LANG' => 2, 'ID_CUSTOMER' => 3, 'ID_CART' => 4, 'ID_CURRENCY' => 5, 'ID_ADDRESS_DELIVERY' => 6, 'ID_ADDRESS_INVOICE' => 7, 'SECURE_KEY' => 8, 'PAYMENT' => 9, 'CONVERSION_RATE' => 10, 'MODULE' => 11, 'RECYCLABLE' => 12, 'GIFT' => 13, 'GIFT_MESSAGE' => 14, 'SHIPPING_NUMBER' => 15, 'TOTAL_DISCOUNTS' => 16, 'TOTAL_PAID' => 17, 'TOTAL_PAID_REAL' => 18, 'TOTAL_PRODUCTS' => 19, 'TOTAL_PRODUCTS_WT' => 20, 'TOTAL_SHIPPING' => 21, 'CARRIER_TAX_RATE' => 22, 'TOTAL_WRAPPING' => 23, 'INVOICE_NUMBER' => 24, 'DELIVERY_NUMBER' => 25, 'INVOICE_DATE' => 26, 'DELIVERY_DATE' => 27, 'VALID' => 28, 'DATE_ADD' => 29, 'DATE_UPD' => 30, ),
		BasePeer::TYPE_FIELDNAME => array ('id_order' => 0, 'id_carrier' => 1, 'id_lang' => 2, 'id_customer' => 3, 'id_cart' => 4, 'id_currency' => 5, 'id_address_delivery' => 6, 'id_address_invoice' => 7, 'secure_key' => 8, 'payment' => 9, 'conversion_rate' => 10, 'module' => 11, 'recyclable' => 12, 'gift' => 13, 'gift_message' => 14, 'shipping_number' => 15, 'total_discounts' => 16, 'total_paid' => 17, 'total_paid_real' => 18, 'total_products' => 19, 'total_products_wt' => 20, 'total_shipping' => 21, 'carrier_tax_rate' => 22, 'total_wrapping' => 23, 'invoice_number' => 24, 'delivery_number' => 25, 'invoice_date' => 26, 'delivery_date' => 27, 'valid' => 28, 'date_add' => 29, 'date_upd' => 30, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, )
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
	 * @param      string $column The column name for current table. (i.e. Oops_Model_OrdersPeer::COLUMN_NAME).
	 * @return     string
	 */
	public static function alias($alias, $column)
	{
		return str_replace(Oops_Model_OrdersPeer::TABLE_NAME.'.', $alias.'.', $column);
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
			$criteria->addSelectColumn(Oops_Model_OrdersPeer::ID_ORDER);
			$criteria->addSelectColumn(Oops_Model_OrdersPeer::ID_CARRIER);
			$criteria->addSelectColumn(Oops_Model_OrdersPeer::ID_LANG);
			$criteria->addSelectColumn(Oops_Model_OrdersPeer::ID_CUSTOMER);
			$criteria->addSelectColumn(Oops_Model_OrdersPeer::ID_CART);
			$criteria->addSelectColumn(Oops_Model_OrdersPeer::ID_CURRENCY);
			$criteria->addSelectColumn(Oops_Model_OrdersPeer::ID_ADDRESS_DELIVERY);
			$criteria->addSelectColumn(Oops_Model_OrdersPeer::ID_ADDRESS_INVOICE);
			$criteria->addSelectColumn(Oops_Model_OrdersPeer::SECURE_KEY);
			$criteria->addSelectColumn(Oops_Model_OrdersPeer::PAYMENT);
			$criteria->addSelectColumn(Oops_Model_OrdersPeer::CONVERSION_RATE);
			$criteria->addSelectColumn(Oops_Model_OrdersPeer::MODULE);
			$criteria->addSelectColumn(Oops_Model_OrdersPeer::RECYCLABLE);
			$criteria->addSelectColumn(Oops_Model_OrdersPeer::GIFT);
			$criteria->addSelectColumn(Oops_Model_OrdersPeer::GIFT_MESSAGE);
			$criteria->addSelectColumn(Oops_Model_OrdersPeer::SHIPPING_NUMBER);
			$criteria->addSelectColumn(Oops_Model_OrdersPeer::TOTAL_DISCOUNTS);
			$criteria->addSelectColumn(Oops_Model_OrdersPeer::TOTAL_PAID);
			$criteria->addSelectColumn(Oops_Model_OrdersPeer::TOTAL_PAID_REAL);
			$criteria->addSelectColumn(Oops_Model_OrdersPeer::TOTAL_PRODUCTS);
			$criteria->addSelectColumn(Oops_Model_OrdersPeer::TOTAL_PRODUCTS_WT);
			$criteria->addSelectColumn(Oops_Model_OrdersPeer::TOTAL_SHIPPING);
			$criteria->addSelectColumn(Oops_Model_OrdersPeer::CARRIER_TAX_RATE);
			$criteria->addSelectColumn(Oops_Model_OrdersPeer::TOTAL_WRAPPING);
			$criteria->addSelectColumn(Oops_Model_OrdersPeer::INVOICE_NUMBER);
			$criteria->addSelectColumn(Oops_Model_OrdersPeer::DELIVERY_NUMBER);
			$criteria->addSelectColumn(Oops_Model_OrdersPeer::INVOICE_DATE);
			$criteria->addSelectColumn(Oops_Model_OrdersPeer::DELIVERY_DATE);
			$criteria->addSelectColumn(Oops_Model_OrdersPeer::VALID);
			$criteria->addSelectColumn(Oops_Model_OrdersPeer::DATE_ADD);
			$criteria->addSelectColumn(Oops_Model_OrdersPeer::DATE_UPD);
		} else {
			$criteria->addSelectColumn($alias . '.ID_ORDER');
			$criteria->addSelectColumn($alias . '.ID_CARRIER');
			$criteria->addSelectColumn($alias . '.ID_LANG');
			$criteria->addSelectColumn($alias . '.ID_CUSTOMER');
			$criteria->addSelectColumn($alias . '.ID_CART');
			$criteria->addSelectColumn($alias . '.ID_CURRENCY');
			$criteria->addSelectColumn($alias . '.ID_ADDRESS_DELIVERY');
			$criteria->addSelectColumn($alias . '.ID_ADDRESS_INVOICE');
			$criteria->addSelectColumn($alias . '.SECURE_KEY');
			$criteria->addSelectColumn($alias . '.PAYMENT');
			$criteria->addSelectColumn($alias . '.CONVERSION_RATE');
			$criteria->addSelectColumn($alias . '.MODULE');
			$criteria->addSelectColumn($alias . '.RECYCLABLE');
			$criteria->addSelectColumn($alias . '.GIFT');
			$criteria->addSelectColumn($alias . '.GIFT_MESSAGE');
			$criteria->addSelectColumn($alias . '.SHIPPING_NUMBER');
			$criteria->addSelectColumn($alias . '.TOTAL_DISCOUNTS');
			$criteria->addSelectColumn($alias . '.TOTAL_PAID');
			$criteria->addSelectColumn($alias . '.TOTAL_PAID_REAL');
			$criteria->addSelectColumn($alias . '.TOTAL_PRODUCTS');
			$criteria->addSelectColumn($alias . '.TOTAL_PRODUCTS_WT');
			$criteria->addSelectColumn($alias . '.TOTAL_SHIPPING');
			$criteria->addSelectColumn($alias . '.CARRIER_TAX_RATE');
			$criteria->addSelectColumn($alias . '.TOTAL_WRAPPING');
			$criteria->addSelectColumn($alias . '.INVOICE_NUMBER');
			$criteria->addSelectColumn($alias . '.DELIVERY_NUMBER');
			$criteria->addSelectColumn($alias . '.INVOICE_DATE');
			$criteria->addSelectColumn($alias . '.DELIVERY_DATE');
			$criteria->addSelectColumn($alias . '.VALID');
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
		$criteria->setPrimaryTableName(Oops_Model_OrdersPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			Oops_Model_OrdersPeer::addSelectColumns($criteria);
		}

		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
		$criteria->setDbName(self::DATABASE_NAME); // Set the correct dbName

		if ($con === null) {
			$con = Propel::getConnection(Oops_Model_OrdersPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
	 * @return     Oops_Model_Orders
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
	{
		$critcopy = clone $criteria;
		$critcopy->setLimit(1);
		$objects = Oops_Model_OrdersPeer::doSelect($critcopy, $con);
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
		return Oops_Model_OrdersPeer::populateObjects(Oops_Model_OrdersPeer::doSelectStmt($criteria, $con));
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
			$con = Propel::getConnection(Oops_Model_OrdersPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		if (!$criteria->hasSelectClause()) {
			$criteria = clone $criteria;
			Oops_Model_OrdersPeer::addSelectColumns($criteria);
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
	 * @param      Oops_Model_Orders $value A Oops_Model_Orders object.
	 * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
	 */
	public static function addInstanceToPool($obj, $key = null)
	{
		if (Propel::isInstancePoolingEnabled()) {
			if ($key === null) {
				$key = (string) $obj->getIdOrder();
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
	 * @param      mixed $value A Oops_Model_Orders object or a primary key value.
	 */
	public static function removeInstanceFromPool($value)
	{
		if (Propel::isInstancePoolingEnabled() && $value !== null) {
			if (is_object($value) && $value instanceof Oops_Model_Orders) {
				$key = (string) $value->getIdOrder();
			} elseif (is_scalar($value)) {
				// assume we've been passed a primary key
				$key = (string) $value;
			} else {
				$e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Oops_Model_Orders object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
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
	 * @return     Oops_Model_Orders Found object or NULL if 1) no instance exists for specified key or 2) instance pooling has been disabled.
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
	 * Method to invalidate the instance pool of all tables related to djland_orders
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
		$cls = Oops_Model_OrdersPeer::getOMClass(false);
		// populate the object(s)
		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key = Oops_Model_OrdersPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj = Oops_Model_OrdersPeer::getInstanceFromPool($key))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj->hydrate($row, 0, true); // rehydrate
				$results[] = $obj;
			} else {
				$obj = new $cls();
				$obj->hydrate($row);
				$results[] = $obj;
				Oops_Model_OrdersPeer::addInstanceToPool($obj, $key);
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
	 * @return     array (Oops_Model_Orders object, last column rank)
	 */
	public static function populateObject($row, $startcol = 0)
	{
		$key = Oops_Model_OrdersPeer::getPrimaryKeyHashFromRow($row, $startcol);
		if (null !== ($obj = Oops_Model_OrdersPeer::getInstanceFromPool($key))) {
			// We no longer rehydrate the object, since this can cause data loss.
			// See http://www.propelorm.org/ticket/509
			// $obj->hydrate($row, $startcol, true); // rehydrate
			$col = $startcol + Oops_Model_OrdersPeer::NUM_HYDRATE_COLUMNS;
		} else {
			$cls = Oops_Model_OrdersPeer::OM_CLASS;
			$obj = new $cls();
			$col = $obj->hydrate($row, $startcol);
			Oops_Model_OrdersPeer::addInstanceToPool($obj, $key);
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
	  $dbMap = Propel::getDatabaseMap(Oops_Model_Base_OrdersPeer::DATABASE_NAME);
	  if (!$dbMap->hasTable(Oops_Model_Base_OrdersPeer::TABLE_NAME))
	  {
	    $dbMap->addTableObject(new Oops_Model_OrdersTableMap());
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
		return $withPrefix ? Oops_Model_OrdersPeer::CLASS_DEFAULT : Oops_Model_OrdersPeer::OM_CLASS;
	}

	/**
	 * Performs an INSERT on the database, given a Oops_Model_Orders or Criteria object.
	 *
	 * @param      mixed $values Criteria or Oops_Model_Orders object containing data that is used to create the INSERT statement.
	 * @param      PropelPDO $con the PropelPDO connection to use
	 * @return     mixed The new primary key.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doInsert($values, PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(Oops_Model_OrdersPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; // rename for clarity
		} else {
			$criteria = $values->buildCriteria(); // build Criteria from Oops_Model_Orders object
		}

		if ($criteria->containsKey(Oops_Model_OrdersPeer::ID_ORDER) && $criteria->keyContainsValue(Oops_Model_OrdersPeer::ID_ORDER) ) {
			throw new PropelException('Cannot insert a value for auto-increment primary key ('.Oops_Model_OrdersPeer::ID_ORDER.')');
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
	 * Performs an UPDATE on the database, given a Oops_Model_Orders or Criteria object.
	 *
	 * @param      mixed $values Criteria or Oops_Model_Orders object containing data that is used to create the UPDATE statement.
	 * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
	 * @return     int The number of affected rows (if supported by underlying database driver).
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doUpdate($values, PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(Oops_Model_OrdersPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$selectCriteria = new Criteria(self::DATABASE_NAME);

		if ($values instanceof Criteria) {
			$criteria = clone $values; // rename for clarity

			$comparison = $criteria->getComparison(Oops_Model_OrdersPeer::ID_ORDER);
			$value = $criteria->remove(Oops_Model_OrdersPeer::ID_ORDER);
			if ($value) {
				$selectCriteria->add(Oops_Model_OrdersPeer::ID_ORDER, $value, $comparison);
			} else {
				$selectCriteria->setPrimaryTableName(Oops_Model_OrdersPeer::TABLE_NAME);
			}

		} else { // $values is Oops_Model_Orders object
			$criteria = $values->buildCriteria(); // gets full criteria
			$selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
		}

		// set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		return BasePeer::doUpdate($selectCriteria, $criteria, $con);
	}

	/**
	 * Deletes all rows from the djland_orders table.
	 *
	 * @param      PropelPDO $con the connection to use
	 * @return     int The number of affected rows (if supported by underlying database driver).
	 */
	public static function doDeleteAll(PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(Oops_Model_OrdersPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}
		$affectedRows = 0; // initialize var to track total num of affected rows
		try {
			// use transaction because $criteria could contain info
			// for more than one table or we could emulating ON DELETE CASCADE, etc.
			$con->beginTransaction();
			$affectedRows += BasePeer::doDeleteAll(Oops_Model_OrdersPeer::TABLE_NAME, $con, Oops_Model_OrdersPeer::DATABASE_NAME);
			// Because this db requires some delete cascade/set null emulation, we have to
			// clear the cached instance *after* the emulation has happened (since
			// instances get re-added by the select statement contained therein).
			Oops_Model_OrdersPeer::clearInstancePool();
			Oops_Model_OrdersPeer::clearRelatedInstancePool();
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Performs a DELETE on the database, given a Oops_Model_Orders or Criteria object OR a primary key value.
	 *
	 * @param      mixed $values Criteria or Oops_Model_Orders object or primary key or array of primary keys
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
			$con = Propel::getConnection(Oops_Model_OrdersPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		if ($values instanceof Criteria) {
			// invalidate the cache for all objects of this type, since we have no
			// way of knowing (without running a query) what objects should be invalidated
			// from the cache based on this Criteria.
			Oops_Model_OrdersPeer::clearInstancePool();
			// rename for clarity
			$criteria = clone $values;
		} elseif ($values instanceof Oops_Model_Orders) { // it's a model object
			// invalidate the cache for this single object
			Oops_Model_OrdersPeer::removeInstanceFromPool($values);
			// create criteria based on pk values
			$criteria = $values->buildPkeyCriteria();
		} else { // it's a primary key, or an array of pks
			$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(Oops_Model_OrdersPeer::ID_ORDER, (array) $values, Criteria::IN);
			// invalidate the cache for this object(s)
			foreach ((array) $values as $singleval) {
				Oops_Model_OrdersPeer::removeInstanceFromPool($singleval);
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
			Oops_Model_OrdersPeer::clearRelatedInstancePool();
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Validates all modified columns of given Oops_Model_Orders object.
	 * If parameter $columns is either a single column name or an array of column names
	 * than only those columns are validated.
	 *
	 * NOTICE: This does not apply to primary or foreign keys for now.
	 *
	 * @param      Oops_Model_Orders $obj The object to validate.
	 * @param      mixed $cols Column name or array of column names.
	 *
	 * @return     mixed TRUE if all columns are valid or the error message of the first invalid column.
	 */
	public static function doValidate($obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(Oops_Model_OrdersPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(Oops_Model_OrdersPeer::TABLE_NAME);

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

		return BasePeer::doValidate(Oops_Model_OrdersPeer::DATABASE_NAME, Oops_Model_OrdersPeer::TABLE_NAME, $columns);
	}

	/**
	 * Retrieve a single object by pkey.
	 *
	 * @param      int $pk the primary key.
	 * @param      PropelPDO $con the connection to use
	 * @return     Oops_Model_Orders
	 */
	public static function retrieveByPK($pk, PropelPDO $con = null)
	{

		if (null !== ($obj = Oops_Model_OrdersPeer::getInstanceFromPool((string) $pk))) {
			return $obj;
		}

		if ($con === null) {
			$con = Propel::getConnection(Oops_Model_OrdersPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria = new Criteria(Oops_Model_OrdersPeer::DATABASE_NAME);
		$criteria->add(Oops_Model_OrdersPeer::ID_ORDER, $pk);

		$v = Oops_Model_OrdersPeer::doSelect($criteria, $con);

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
			$con = Propel::getConnection(Oops_Model_OrdersPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$objs = null;
		if (empty($pks)) {
			$objs = array();
		} else {
			$criteria = new Criteria(Oops_Model_OrdersPeer::DATABASE_NAME);
			$criteria->add(Oops_Model_OrdersPeer::ID_ORDER, $pks, Criteria::IN);
			$objs = Oops_Model_OrdersPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} // Oops_Model_Base_OrdersPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
Oops_Model_Base_OrdersPeer::buildTableMap();

