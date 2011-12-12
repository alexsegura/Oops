<?php


define('OOPS_DB_PRODUCTATTRIBUTE_ID_PRODUCT_ATTRIBUTE', _DB_PREFIX_ . 'product_attribute.ID_PRODUCT_ATTRIBUTE');
define('OOPS_DB_PRODUCTATTRIBUTE_ID_PRODUCT', _DB_PREFIX_ . 'product_attribute.ID_PRODUCT');
define('OOPS_DB_PRODUCTATTRIBUTE_REFERENCE', _DB_PREFIX_ . 'product_attribute.REFERENCE');
define('OOPS_DB_PRODUCTATTRIBUTE_SUPPLIER_REFERENCE', _DB_PREFIX_ . 'product_attribute.SUPPLIER_REFERENCE');
define('OOPS_DB_PRODUCTATTRIBUTE_LOCATION', _DB_PREFIX_ . 'product_attribute.LOCATION');
define('OOPS_DB_PRODUCTATTRIBUTE_EAN13', _DB_PREFIX_ . 'product_attribute.EAN13');
define('OOPS_DB_PRODUCTATTRIBUTE_UPC', _DB_PREFIX_ . 'product_attribute.UPC');
define('OOPS_DB_PRODUCTATTRIBUTE_WHOLESALE_PRICE', _DB_PREFIX_ . 'product_attribute.WHOLESALE_PRICE');
define('OOPS_DB_PRODUCTATTRIBUTE_PRICE', _DB_PREFIX_ . 'product_attribute.PRICE');
define('OOPS_DB_PRODUCTATTRIBUTE_ECOTAX', _DB_PREFIX_ . 'product_attribute.ECOTAX');
define('OOPS_DB_PRODUCTATTRIBUTE_QUANTITY', _DB_PREFIX_ . 'product_attribute.QUANTITY');
define('OOPS_DB_PRODUCTATTRIBUTE_WEIGHT', _DB_PREFIX_ . 'product_attribute.WEIGHT');
define('OOPS_DB_PRODUCTATTRIBUTE_UNIT_PRICE_IMPACT', _DB_PREFIX_ . 'product_attribute.UNIT_PRICE_IMPACT');
define('OOPS_DB_PRODUCTATTRIBUTE_DEFAULT_ON', _DB_PREFIX_ . 'product_attribute.DEFAULT_ON');
define('OOPS_DB_PRODUCTATTRIBUTE_MINIMAL_QUANTITY', _DB_PREFIX_ . 'product_attribute.MINIMAL_QUANTITY');
define('OOPS_DB_PRODUCTATTRIBUTE_TABLE_NAME', _DB_PREFIX_ . 'product_attribute');

/**
 * Base static class for performing query and update operations on the 'product_attribute' table.
 *
 * 
 *
 * @package    propel.generator.prestashop.om
 */
abstract class Oops_Db_Propel_ProductAttributePeer {

	/** the default database name for this class */
	const DATABASE_NAME = 'prestashop';

	/** the table name for this class */
	const TABLE_NAME = OOPS_DB_PRODUCTATTRIBUTE_TABLE_NAME;

	/** the related Propel class for this table */
	const OM_CLASS = 'Oops_Db_ProductAttribute';

	/** A class that can be returned by this peer. */
	const CLASS_DEFAULT = 'prestashop.Oops_Db_ProductAttribute';

	/** the related TableMap class for this table */
	const TM_CLASS = 'Oops_Db_ProductAttributeTableMap';

	/** The total number of columns. */
	const NUM_COLUMNS = 15;

	/** The number of lazy-loaded columns. */
	const NUM_LAZY_LOAD_COLUMNS = 0;

	/** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
	const NUM_HYDRATE_COLUMNS = 15;

	/** the column name for the ID_PRODUCT_ATTRIBUTE field */
	const ID_PRODUCT_ATTRIBUTE = OOPS_DB_PRODUCTATTRIBUTE_ID_PRODUCT_ATTRIBUTE;

	/** the column name for the ID_PRODUCT field */
	const ID_PRODUCT = OOPS_DB_PRODUCTATTRIBUTE_ID_PRODUCT;

	/** the column name for the REFERENCE field */
	const REFERENCE = OOPS_DB_PRODUCTATTRIBUTE_REFERENCE;

	/** the column name for the SUPPLIER_REFERENCE field */
	const SUPPLIER_REFERENCE = OOPS_DB_PRODUCTATTRIBUTE_SUPPLIER_REFERENCE;

	/** the column name for the LOCATION field */
	const LOCATION = OOPS_DB_PRODUCTATTRIBUTE_LOCATION;

	/** the column name for the EAN13 field */
	const EAN13 = OOPS_DB_PRODUCTATTRIBUTE_EAN13;

	/** the column name for the UPC field */
	const UPC = OOPS_DB_PRODUCTATTRIBUTE_UPC;

	/** the column name for the WHOLESALE_PRICE field */
	const WHOLESALE_PRICE = OOPS_DB_PRODUCTATTRIBUTE_WHOLESALE_PRICE;

	/** the column name for the PRICE field */
	const PRICE = OOPS_DB_PRODUCTATTRIBUTE_PRICE;

	/** the column name for the ECOTAX field */
	const ECOTAX = OOPS_DB_PRODUCTATTRIBUTE_ECOTAX;

	/** the column name for the QUANTITY field */
	const QUANTITY = OOPS_DB_PRODUCTATTRIBUTE_QUANTITY;

	/** the column name for the WEIGHT field */
	const WEIGHT = OOPS_DB_PRODUCTATTRIBUTE_WEIGHT;

	/** the column name for the UNIT_PRICE_IMPACT field */
	const UNIT_PRICE_IMPACT = OOPS_DB_PRODUCTATTRIBUTE_UNIT_PRICE_IMPACT;

	/** the column name for the DEFAULT_ON field */
	const DEFAULT_ON = OOPS_DB_PRODUCTATTRIBUTE_DEFAULT_ON;

	/** the column name for the MINIMAL_QUANTITY field */
	const MINIMAL_QUANTITY = OOPS_DB_PRODUCTATTRIBUTE_MINIMAL_QUANTITY;

	/** The default string format for model objects of the related table **/
	const DEFAULT_STRING_FORMAT = 'YAML';

	/**
	 * An identiy map to hold any loaded instances of Oops_Db_ProductAttribute objects.
	 * This must be public so that other peer classes can access this when hydrating from JOIN
	 * queries.
	 * @var        array Oops_Db_ProductAttribute[]
	 */
	public static $instances = array();


	/**
	 * holds an array of fieldnames
	 *
	 * first dimension keys are the type constants
	 * e.g. self::$fieldNames[self::TYPE_PHPNAME][0] = 'Id'
	 */
	protected static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('IdProductAttribute', 'IdProduct', 'Reference', 'SupplierReference', 'Location', 'Ean13', 'Upc', 'WholesalePrice', 'Price', 'Ecotax', 'Quantity', 'Weight', 'UnitPriceImpact', 'DefaultOn', 'MinimalQuantity', ),
		BasePeer::TYPE_STUDLYPHPNAME => array ('idProductAttribute', 'idProduct', 'reference', 'supplierReference', 'location', 'ean13', 'upc', 'wholesalePrice', 'price', 'ecotax', 'quantity', 'weight', 'unitPriceImpact', 'defaultOn', 'minimalQuantity', ),
		BasePeer::TYPE_COLNAME => array (self::ID_PRODUCT_ATTRIBUTE, self::ID_PRODUCT, self::REFERENCE, self::SUPPLIER_REFERENCE, self::LOCATION, self::EAN13, self::UPC, self::WHOLESALE_PRICE, self::PRICE, self::ECOTAX, self::QUANTITY, self::WEIGHT, self::UNIT_PRICE_IMPACT, self::DEFAULT_ON, self::MINIMAL_QUANTITY, ),
		BasePeer::TYPE_RAW_COLNAME => array ('ID_PRODUCT_ATTRIBUTE', 'ID_PRODUCT', 'REFERENCE', 'SUPPLIER_REFERENCE', 'LOCATION', 'EAN13', 'UPC', 'WHOLESALE_PRICE', 'PRICE', 'ECOTAX', 'QUANTITY', 'WEIGHT', 'UNIT_PRICE_IMPACT', 'DEFAULT_ON', 'MINIMAL_QUANTITY', ),
		BasePeer::TYPE_FIELDNAME => array ('id_product_attribute', 'id_product', 'reference', 'supplier_reference', 'location', 'ean13', 'upc', 'wholesale_price', 'price', 'ecotax', 'quantity', 'weight', 'unit_price_impact', 'default_on', 'minimal_quantity', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, )
	);

	/**
	 * holds an array of keys for quick access to the fieldnames array
	 *
	 * first dimension keys are the type constants
	 * e.g. self::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
	 */
	protected static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('IdProductAttribute' => 0, 'IdProduct' => 1, 'Reference' => 2, 'SupplierReference' => 3, 'Location' => 4, 'Ean13' => 5, 'Upc' => 6, 'WholesalePrice' => 7, 'Price' => 8, 'Ecotax' => 9, 'Quantity' => 10, 'Weight' => 11, 'UnitPriceImpact' => 12, 'DefaultOn' => 13, 'MinimalQuantity' => 14, ),
		BasePeer::TYPE_STUDLYPHPNAME => array ('idProductAttribute' => 0, 'idProduct' => 1, 'reference' => 2, 'supplierReference' => 3, 'location' => 4, 'ean13' => 5, 'upc' => 6, 'wholesalePrice' => 7, 'price' => 8, 'ecotax' => 9, 'quantity' => 10, 'weight' => 11, 'unitPriceImpact' => 12, 'defaultOn' => 13, 'minimalQuantity' => 14, ),
		BasePeer::TYPE_COLNAME => array (self::ID_PRODUCT_ATTRIBUTE => 0, self::ID_PRODUCT => 1, self::REFERENCE => 2, self::SUPPLIER_REFERENCE => 3, self::LOCATION => 4, self::EAN13 => 5, self::UPC => 6, self::WHOLESALE_PRICE => 7, self::PRICE => 8, self::ECOTAX => 9, self::QUANTITY => 10, self::WEIGHT => 11, self::UNIT_PRICE_IMPACT => 12, self::DEFAULT_ON => 13, self::MINIMAL_QUANTITY => 14, ),
		BasePeer::TYPE_RAW_COLNAME => array ('ID_PRODUCT_ATTRIBUTE' => 0, 'ID_PRODUCT' => 1, 'REFERENCE' => 2, 'SUPPLIER_REFERENCE' => 3, 'LOCATION' => 4, 'EAN13' => 5, 'UPC' => 6, 'WHOLESALE_PRICE' => 7, 'PRICE' => 8, 'ECOTAX' => 9, 'QUANTITY' => 10, 'WEIGHT' => 11, 'UNIT_PRICE_IMPACT' => 12, 'DEFAULT_ON' => 13, 'MINIMAL_QUANTITY' => 14, ),
		BasePeer::TYPE_FIELDNAME => array ('id_product_attribute' => 0, 'id_product' => 1, 'reference' => 2, 'supplier_reference' => 3, 'location' => 4, 'ean13' => 5, 'upc' => 6, 'wholesale_price' => 7, 'price' => 8, 'ecotax' => 9, 'quantity' => 10, 'weight' => 11, 'unit_price_impact' => 12, 'default_on' => 13, 'minimal_quantity' => 14, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, )
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
	 * @param      string $column The column name for current table. (i.e. Oops_Db_ProductAttributePeer::COLUMN_NAME).
	 * @return     string
	 */
	public static function alias($alias, $column)
	{
		return str_replace(Oops_Db_ProductAttributePeer::TABLE_NAME.'.', $alias.'.', $column);
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
			$criteria->addSelectColumn(Oops_Db_ProductAttributePeer::ID_PRODUCT_ATTRIBUTE);
			$criteria->addSelectColumn(Oops_Db_ProductAttributePeer::ID_PRODUCT);
			$criteria->addSelectColumn(Oops_Db_ProductAttributePeer::REFERENCE);
			$criteria->addSelectColumn(Oops_Db_ProductAttributePeer::SUPPLIER_REFERENCE);
			$criteria->addSelectColumn(Oops_Db_ProductAttributePeer::LOCATION);
			$criteria->addSelectColumn(Oops_Db_ProductAttributePeer::EAN13);
			$criteria->addSelectColumn(Oops_Db_ProductAttributePeer::UPC);
			$criteria->addSelectColumn(Oops_Db_ProductAttributePeer::WHOLESALE_PRICE);
			$criteria->addSelectColumn(Oops_Db_ProductAttributePeer::PRICE);
			$criteria->addSelectColumn(Oops_Db_ProductAttributePeer::ECOTAX);
			$criteria->addSelectColumn(Oops_Db_ProductAttributePeer::QUANTITY);
			$criteria->addSelectColumn(Oops_Db_ProductAttributePeer::WEIGHT);
			$criteria->addSelectColumn(Oops_Db_ProductAttributePeer::UNIT_PRICE_IMPACT);
			$criteria->addSelectColumn(Oops_Db_ProductAttributePeer::DEFAULT_ON);
			$criteria->addSelectColumn(Oops_Db_ProductAttributePeer::MINIMAL_QUANTITY);
		} else {
			$criteria->addSelectColumn($alias . '.ID_PRODUCT_ATTRIBUTE');
			$criteria->addSelectColumn($alias . '.ID_PRODUCT');
			$criteria->addSelectColumn($alias . '.REFERENCE');
			$criteria->addSelectColumn($alias . '.SUPPLIER_REFERENCE');
			$criteria->addSelectColumn($alias . '.LOCATION');
			$criteria->addSelectColumn($alias . '.EAN13');
			$criteria->addSelectColumn($alias . '.UPC');
			$criteria->addSelectColumn($alias . '.WHOLESALE_PRICE');
			$criteria->addSelectColumn($alias . '.PRICE');
			$criteria->addSelectColumn($alias . '.ECOTAX');
			$criteria->addSelectColumn($alias . '.QUANTITY');
			$criteria->addSelectColumn($alias . '.WEIGHT');
			$criteria->addSelectColumn($alias . '.UNIT_PRICE_IMPACT');
			$criteria->addSelectColumn($alias . '.DEFAULT_ON');
			$criteria->addSelectColumn($alias . '.MINIMAL_QUANTITY');
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
		$criteria->setPrimaryTableName(Oops_Db_ProductAttributePeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			Oops_Db_ProductAttributePeer::addSelectColumns($criteria);
		}

		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
		$criteria->setDbName(self::DATABASE_NAME); // Set the correct dbName

		if ($con === null) {
			$con = Propel::getConnection(Oops_Db_ProductAttributePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
	 * @return     Oops_Db_ProductAttribute
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
	{
		$critcopy = clone $criteria;
		$critcopy->setLimit(1);
		$objects = Oops_Db_ProductAttributePeer::doSelect($critcopy, $con);
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
		return Oops_Db_ProductAttributePeer::populateObjects(Oops_Db_ProductAttributePeer::doSelectStmt($criteria, $con));
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
			$con = Propel::getConnection(Oops_Db_ProductAttributePeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		if (!$criteria->hasSelectClause()) {
			$criteria = clone $criteria;
			Oops_Db_ProductAttributePeer::addSelectColumns($criteria);
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
	 * @param      Oops_Db_ProductAttribute $value A Oops_Db_ProductAttribute object.
	 * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
	 */
	public static function addInstanceToPool($obj, $key = null)
	{
		if (Propel::isInstancePoolingEnabled()) {
			if ($key === null) {
				$key = (string) $obj->getIdProductAttribute();
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
	 * @param      mixed $value A Oops_Db_ProductAttribute object or a primary key value.
	 */
	public static function removeInstanceFromPool($value)
	{
		if (Propel::isInstancePoolingEnabled() && $value !== null) {
			if (is_object($value) && $value instanceof Oops_Db_ProductAttribute) {
				$key = (string) $value->getIdProductAttribute();
			} elseif (is_scalar($value)) {
				// assume we've been passed a primary key
				$key = (string) $value;
			} else {
				$e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Oops_Db_ProductAttribute object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
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
	 * @return     Oops_Db_ProductAttribute Found object or NULL if 1) no instance exists for specified key or 2) instance pooling has been disabled.
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
	 * Method to invalidate the instance pool of all tables related to product_attribute
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
		$cls = Oops_Db_ProductAttributePeer::getOMClass(false);
		// populate the object(s)
		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key = Oops_Db_ProductAttributePeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj = Oops_Db_ProductAttributePeer::getInstanceFromPool($key))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj->hydrate($row, 0, true); // rehydrate
				$results[] = $obj;
			} else {
				$obj = new $cls();
				$obj->hydrate($row);
				$results[] = $obj;
				Oops_Db_ProductAttributePeer::addInstanceToPool($obj, $key);
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
	 * @return     array (Oops_Db_ProductAttribute object, last column rank)
	 */
	public static function populateObject($row, $startcol = 0)
	{
		$key = Oops_Db_ProductAttributePeer::getPrimaryKeyHashFromRow($row, $startcol);
		if (null !== ($obj = Oops_Db_ProductAttributePeer::getInstanceFromPool($key))) {
			// We no longer rehydrate the object, since this can cause data loss.
			// See http://www.propelorm.org/ticket/509
			// $obj->hydrate($row, $startcol, true); // rehydrate
			$col = $startcol + Oops_Db_ProductAttributePeer::NUM_HYDRATE_COLUMNS;
		} else {
			$cls = Oops_Db_ProductAttributePeer::OM_CLASS;
			$obj = new $cls();
			$col = $obj->hydrate($row, $startcol);
			Oops_Db_ProductAttributePeer::addInstanceToPool($obj, $key);
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
	  $dbMap = Propel::getDatabaseMap(Oops_Db_Propel_ProductAttributePeer::DATABASE_NAME);
	  if (!$dbMap->hasTable(Oops_Db_Propel_ProductAttributePeer::TABLE_NAME))
	  {
	    $dbMap->addTableObject(new Oops_Db_ProductAttributeTableMap());
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
		return $withPrefix ? Oops_Db_ProductAttributePeer::CLASS_DEFAULT : Oops_Db_ProductAttributePeer::OM_CLASS;
	}

	/**
	 * Performs an INSERT on the database, given a Oops_Db_ProductAttribute or Criteria object.
	 *
	 * @param      mixed $values Criteria or Oops_Db_ProductAttribute object containing data that is used to create the INSERT statement.
	 * @param      PropelPDO $con the PropelPDO connection to use
	 * @return     mixed The new primary key.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doInsert($values, PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(Oops_Db_ProductAttributePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; // rename for clarity
		} else {
			$criteria = $values->buildCriteria(); // build Criteria from Oops_Db_ProductAttribute object
		}

		if ($criteria->containsKey(Oops_Db_ProductAttributePeer::ID_PRODUCT_ATTRIBUTE) && $criteria->keyContainsValue(Oops_Db_ProductAttributePeer::ID_PRODUCT_ATTRIBUTE) ) {
			throw new PropelException('Cannot insert a value for auto-increment primary key ('.Oops_Db_ProductAttributePeer::ID_PRODUCT_ATTRIBUTE.')');
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
	 * Performs an UPDATE on the database, given a Oops_Db_ProductAttribute or Criteria object.
	 *
	 * @param      mixed $values Criteria or Oops_Db_ProductAttribute object containing data that is used to create the UPDATE statement.
	 * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
	 * @return     int The number of affected rows (if supported by underlying database driver).
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doUpdate($values, PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(Oops_Db_ProductAttributePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$selectCriteria = new Criteria(self::DATABASE_NAME);

		if ($values instanceof Criteria) {
			$criteria = clone $values; // rename for clarity

			$comparison = $criteria->getComparison(Oops_Db_ProductAttributePeer::ID_PRODUCT_ATTRIBUTE);
			$value = $criteria->remove(Oops_Db_ProductAttributePeer::ID_PRODUCT_ATTRIBUTE);
			if ($value) {
				$selectCriteria->add(Oops_Db_ProductAttributePeer::ID_PRODUCT_ATTRIBUTE, $value, $comparison);
			} else {
				$selectCriteria->setPrimaryTableName(Oops_Db_ProductAttributePeer::TABLE_NAME);
			}

		} else { // $values is Oops_Db_ProductAttribute object
			$criteria = $values->buildCriteria(); // gets full criteria
			$selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
		}

		// set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		return BasePeer::doUpdate($selectCriteria, $criteria, $con);
	}

	/**
	 * Deletes all rows from the product_attribute table.
	 *
	 * @param      PropelPDO $con the connection to use
	 * @return     int The number of affected rows (if supported by underlying database driver).
	 */
	public static function doDeleteAll(PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(Oops_Db_ProductAttributePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}
		$affectedRows = 0; // initialize var to track total num of affected rows
		try {
			// use transaction because $criteria could contain info
			// for more than one table or we could emulating ON DELETE CASCADE, etc.
			$con->beginTransaction();
			$affectedRows += BasePeer::doDeleteAll(Oops_Db_ProductAttributePeer::TABLE_NAME, $con, Oops_Db_ProductAttributePeer::DATABASE_NAME);
			// Because this db requires some delete cascade/set null emulation, we have to
			// clear the cached instance *after* the emulation has happened (since
			// instances get re-added by the select statement contained therein).
			Oops_Db_ProductAttributePeer::clearInstancePool();
			Oops_Db_ProductAttributePeer::clearRelatedInstancePool();
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Performs a DELETE on the database, given a Oops_Db_ProductAttribute or Criteria object OR a primary key value.
	 *
	 * @param      mixed $values Criteria or Oops_Db_ProductAttribute object or primary key or array of primary keys
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
			$con = Propel::getConnection(Oops_Db_ProductAttributePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		if ($values instanceof Criteria) {
			// invalidate the cache for all objects of this type, since we have no
			// way of knowing (without running a query) what objects should be invalidated
			// from the cache based on this Criteria.
			Oops_Db_ProductAttributePeer::clearInstancePool();
			// rename for clarity
			$criteria = clone $values;
		} elseif ($values instanceof Oops_Db_ProductAttribute) { // it's a model object
			// invalidate the cache for this single object
			Oops_Db_ProductAttributePeer::removeInstanceFromPool($values);
			// create criteria based on pk values
			$criteria = $values->buildPkeyCriteria();
		} else { // it's a primary key, or an array of pks
			$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(Oops_Db_ProductAttributePeer::ID_PRODUCT_ATTRIBUTE, (array) $values, Criteria::IN);
			// invalidate the cache for this object(s)
			foreach ((array) $values as $singleval) {
				Oops_Db_ProductAttributePeer::removeInstanceFromPool($singleval);
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
			Oops_Db_ProductAttributePeer::clearRelatedInstancePool();
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Validates all modified columns of given Oops_Db_ProductAttribute object.
	 * If parameter $columns is either a single column name or an array of column names
	 * than only those columns are validated.
	 *
	 * NOTICE: This does not apply to primary or foreign keys for now.
	 *
	 * @param      Oops_Db_ProductAttribute $obj The object to validate.
	 * @param      mixed $cols Column name or array of column names.
	 *
	 * @return     mixed TRUE if all columns are valid or the error message of the first invalid column.
	 */
	public static function doValidate($obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(Oops_Db_ProductAttributePeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(Oops_Db_ProductAttributePeer::TABLE_NAME);

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

		return BasePeer::doValidate(Oops_Db_ProductAttributePeer::DATABASE_NAME, Oops_Db_ProductAttributePeer::TABLE_NAME, $columns);
	}

	/**
	 * Retrieve a single object by pkey.
	 *
	 * @param      int $pk the primary key.
	 * @param      PropelPDO $con the connection to use
	 * @return     Oops_Db_ProductAttribute
	 */
	public static function retrieveByPK($pk, PropelPDO $con = null)
	{

		if (null !== ($obj = Oops_Db_ProductAttributePeer::getInstanceFromPool((string) $pk))) {
			return $obj;
		}

		if ($con === null) {
			$con = Propel::getConnection(Oops_Db_ProductAttributePeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria = new Criteria(Oops_Db_ProductAttributePeer::DATABASE_NAME);
		$criteria->add(Oops_Db_ProductAttributePeer::ID_PRODUCT_ATTRIBUTE, $pk);

		$v = Oops_Db_ProductAttributePeer::doSelect($criteria, $con);

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
			$con = Propel::getConnection(Oops_Db_ProductAttributePeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$objs = null;
		if (empty($pks)) {
			$objs = array();
		} else {
			$criteria = new Criteria(Oops_Db_ProductAttributePeer::DATABASE_NAME);
			$criteria->add(Oops_Db_ProductAttributePeer::ID_PRODUCT_ATTRIBUTE, $pks, Criteria::IN);
			$objs = Oops_Db_ProductAttributePeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} // Oops_Db_Propel_ProductAttributePeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
Oops_Db_Propel_ProductAttributePeer::buildTableMap();

