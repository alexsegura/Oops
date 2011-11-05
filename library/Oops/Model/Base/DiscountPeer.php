<?php


/**
 * Base static class for performing query and update operations on the 'djland_discount' table.
 *
 * 
 *
 * @package    propel.generator.prestashop.om
 */
abstract class Oops_Model_Base_DiscountPeer {

	/** the default database name for this class */
	const DATABASE_NAME = 'prestashop';

	/** the table name for this class */
	const TABLE_NAME = 'djland_discount';

	/** the related Propel class for this table */
	const OM_CLASS = 'Oops_Model_Discount';

	/** A class that can be returned by this peer. */
	const CLASS_DEFAULT = 'prestashop.Oops_Model_Discount';

	/** the related TableMap class for this table */
	const TM_CLASS = 'Oops_Model_DiscountTableMap';

	/** The total number of columns. */
	const NUM_COLUMNS = 19;

	/** The number of lazy-loaded columns. */
	const NUM_LAZY_LOAD_COLUMNS = 0;

	/** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
	const NUM_HYDRATE_COLUMNS = 19;

	/** the column name for the ID_DISCOUNT field */
	const ID_DISCOUNT = 'djland_discount.ID_DISCOUNT';

	/** the column name for the ID_DISCOUNT_TYPE field */
	const ID_DISCOUNT_TYPE = 'djland_discount.ID_DISCOUNT_TYPE';

	/** the column name for the BEHAVIOR_NOT_EXHAUSTED field */
	const BEHAVIOR_NOT_EXHAUSTED = 'djland_discount.BEHAVIOR_NOT_EXHAUSTED';

	/** the column name for the ID_CUSTOMER field */
	const ID_CUSTOMER = 'djland_discount.ID_CUSTOMER';

	/** the column name for the ID_GROUP field */
	const ID_GROUP = 'djland_discount.ID_GROUP';

	/** the column name for the ID_CURRENCY field */
	const ID_CURRENCY = 'djland_discount.ID_CURRENCY';

	/** the column name for the NAME field */
	const NAME = 'djland_discount.NAME';

	/** the column name for the VALUE field */
	const VALUE = 'djland_discount.VALUE';

	/** the column name for the QUANTITY field */
	const QUANTITY = 'djland_discount.QUANTITY';

	/** the column name for the QUANTITY_PER_USER field */
	const QUANTITY_PER_USER = 'djland_discount.QUANTITY_PER_USER';

	/** the column name for the CUMULABLE field */
	const CUMULABLE = 'djland_discount.CUMULABLE';

	/** the column name for the CUMULABLE_REDUCTION field */
	const CUMULABLE_REDUCTION = 'djland_discount.CUMULABLE_REDUCTION';

	/** the column name for the DATE_FROM field */
	const DATE_FROM = 'djland_discount.DATE_FROM';

	/** the column name for the DATE_TO field */
	const DATE_TO = 'djland_discount.DATE_TO';

	/** the column name for the MINIMAL field */
	const MINIMAL = 'djland_discount.MINIMAL';

	/** the column name for the ACTIVE field */
	const ACTIVE = 'djland_discount.ACTIVE';

	/** the column name for the CART_DISPLAY field */
	const CART_DISPLAY = 'djland_discount.CART_DISPLAY';

	/** the column name for the DATE_ADD field */
	const DATE_ADD = 'djland_discount.DATE_ADD';

	/** the column name for the DATE_UPD field */
	const DATE_UPD = 'djland_discount.DATE_UPD';

	/** The default string format for model objects of the related table **/
	const DEFAULT_STRING_FORMAT = 'YAML';

	/**
	 * An identiy map to hold any loaded instances of Oops_Model_Discount objects.
	 * This must be public so that other peer classes can access this when hydrating from JOIN
	 * queries.
	 * @var        array Oops_Model_Discount[]
	 */
	public static $instances = array();


	/**
	 * holds an array of fieldnames
	 *
	 * first dimension keys are the type constants
	 * e.g. self::$fieldNames[self::TYPE_PHPNAME][0] = 'Id'
	 */
	protected static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('IdDiscount', 'IdDiscountType', 'BehaviorNotExhausted', 'IdCustomer', 'IdGroup', 'IdCurrency', 'Name', 'Value', 'Quantity', 'QuantityPerUser', 'Cumulable', 'CumulableReduction', 'DateFrom', 'DateTo', 'Minimal', 'Active', 'CartDisplay', 'DateAdd', 'DateUpd', ),
		BasePeer::TYPE_STUDLYPHPNAME => array ('idDiscount', 'idDiscountType', 'behaviorNotExhausted', 'idCustomer', 'idGroup', 'idCurrency', 'name', 'value', 'quantity', 'quantityPerUser', 'cumulable', 'cumulableReduction', 'dateFrom', 'dateTo', 'minimal', 'active', 'cartDisplay', 'dateAdd', 'dateUpd', ),
		BasePeer::TYPE_COLNAME => array (self::ID_DISCOUNT, self::ID_DISCOUNT_TYPE, self::BEHAVIOR_NOT_EXHAUSTED, self::ID_CUSTOMER, self::ID_GROUP, self::ID_CURRENCY, self::NAME, self::VALUE, self::QUANTITY, self::QUANTITY_PER_USER, self::CUMULABLE, self::CUMULABLE_REDUCTION, self::DATE_FROM, self::DATE_TO, self::MINIMAL, self::ACTIVE, self::CART_DISPLAY, self::DATE_ADD, self::DATE_UPD, ),
		BasePeer::TYPE_RAW_COLNAME => array ('ID_DISCOUNT', 'ID_DISCOUNT_TYPE', 'BEHAVIOR_NOT_EXHAUSTED', 'ID_CUSTOMER', 'ID_GROUP', 'ID_CURRENCY', 'NAME', 'VALUE', 'QUANTITY', 'QUANTITY_PER_USER', 'CUMULABLE', 'CUMULABLE_REDUCTION', 'DATE_FROM', 'DATE_TO', 'MINIMAL', 'ACTIVE', 'CART_DISPLAY', 'DATE_ADD', 'DATE_UPD', ),
		BasePeer::TYPE_FIELDNAME => array ('id_discount', 'id_discount_type', 'behavior_not_exhausted', 'id_customer', 'id_group', 'id_currency', 'name', 'value', 'quantity', 'quantity_per_user', 'cumulable', 'cumulable_reduction', 'date_from', 'date_to', 'minimal', 'active', 'cart_display', 'date_add', 'date_upd', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, )
	);

	/**
	 * holds an array of keys for quick access to the fieldnames array
	 *
	 * first dimension keys are the type constants
	 * e.g. self::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
	 */
	protected static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('IdDiscount' => 0, 'IdDiscountType' => 1, 'BehaviorNotExhausted' => 2, 'IdCustomer' => 3, 'IdGroup' => 4, 'IdCurrency' => 5, 'Name' => 6, 'Value' => 7, 'Quantity' => 8, 'QuantityPerUser' => 9, 'Cumulable' => 10, 'CumulableReduction' => 11, 'DateFrom' => 12, 'DateTo' => 13, 'Minimal' => 14, 'Active' => 15, 'CartDisplay' => 16, 'DateAdd' => 17, 'DateUpd' => 18, ),
		BasePeer::TYPE_STUDLYPHPNAME => array ('idDiscount' => 0, 'idDiscountType' => 1, 'behaviorNotExhausted' => 2, 'idCustomer' => 3, 'idGroup' => 4, 'idCurrency' => 5, 'name' => 6, 'value' => 7, 'quantity' => 8, 'quantityPerUser' => 9, 'cumulable' => 10, 'cumulableReduction' => 11, 'dateFrom' => 12, 'dateTo' => 13, 'minimal' => 14, 'active' => 15, 'cartDisplay' => 16, 'dateAdd' => 17, 'dateUpd' => 18, ),
		BasePeer::TYPE_COLNAME => array (self::ID_DISCOUNT => 0, self::ID_DISCOUNT_TYPE => 1, self::BEHAVIOR_NOT_EXHAUSTED => 2, self::ID_CUSTOMER => 3, self::ID_GROUP => 4, self::ID_CURRENCY => 5, self::NAME => 6, self::VALUE => 7, self::QUANTITY => 8, self::QUANTITY_PER_USER => 9, self::CUMULABLE => 10, self::CUMULABLE_REDUCTION => 11, self::DATE_FROM => 12, self::DATE_TO => 13, self::MINIMAL => 14, self::ACTIVE => 15, self::CART_DISPLAY => 16, self::DATE_ADD => 17, self::DATE_UPD => 18, ),
		BasePeer::TYPE_RAW_COLNAME => array ('ID_DISCOUNT' => 0, 'ID_DISCOUNT_TYPE' => 1, 'BEHAVIOR_NOT_EXHAUSTED' => 2, 'ID_CUSTOMER' => 3, 'ID_GROUP' => 4, 'ID_CURRENCY' => 5, 'NAME' => 6, 'VALUE' => 7, 'QUANTITY' => 8, 'QUANTITY_PER_USER' => 9, 'CUMULABLE' => 10, 'CUMULABLE_REDUCTION' => 11, 'DATE_FROM' => 12, 'DATE_TO' => 13, 'MINIMAL' => 14, 'ACTIVE' => 15, 'CART_DISPLAY' => 16, 'DATE_ADD' => 17, 'DATE_UPD' => 18, ),
		BasePeer::TYPE_FIELDNAME => array ('id_discount' => 0, 'id_discount_type' => 1, 'behavior_not_exhausted' => 2, 'id_customer' => 3, 'id_group' => 4, 'id_currency' => 5, 'name' => 6, 'value' => 7, 'quantity' => 8, 'quantity_per_user' => 9, 'cumulable' => 10, 'cumulable_reduction' => 11, 'date_from' => 12, 'date_to' => 13, 'minimal' => 14, 'active' => 15, 'cart_display' => 16, 'date_add' => 17, 'date_upd' => 18, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, )
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
	 * @param      string $column The column name for current table. (i.e. Oops_Model_DiscountPeer::COLUMN_NAME).
	 * @return     string
	 */
	public static function alias($alias, $column)
	{
		return str_replace(Oops_Model_DiscountPeer::TABLE_NAME.'.', $alias.'.', $column);
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
			$criteria->addSelectColumn(Oops_Model_DiscountPeer::ID_DISCOUNT);
			$criteria->addSelectColumn(Oops_Model_DiscountPeer::ID_DISCOUNT_TYPE);
			$criteria->addSelectColumn(Oops_Model_DiscountPeer::BEHAVIOR_NOT_EXHAUSTED);
			$criteria->addSelectColumn(Oops_Model_DiscountPeer::ID_CUSTOMER);
			$criteria->addSelectColumn(Oops_Model_DiscountPeer::ID_GROUP);
			$criteria->addSelectColumn(Oops_Model_DiscountPeer::ID_CURRENCY);
			$criteria->addSelectColumn(Oops_Model_DiscountPeer::NAME);
			$criteria->addSelectColumn(Oops_Model_DiscountPeer::VALUE);
			$criteria->addSelectColumn(Oops_Model_DiscountPeer::QUANTITY);
			$criteria->addSelectColumn(Oops_Model_DiscountPeer::QUANTITY_PER_USER);
			$criteria->addSelectColumn(Oops_Model_DiscountPeer::CUMULABLE);
			$criteria->addSelectColumn(Oops_Model_DiscountPeer::CUMULABLE_REDUCTION);
			$criteria->addSelectColumn(Oops_Model_DiscountPeer::DATE_FROM);
			$criteria->addSelectColumn(Oops_Model_DiscountPeer::DATE_TO);
			$criteria->addSelectColumn(Oops_Model_DiscountPeer::MINIMAL);
			$criteria->addSelectColumn(Oops_Model_DiscountPeer::ACTIVE);
			$criteria->addSelectColumn(Oops_Model_DiscountPeer::CART_DISPLAY);
			$criteria->addSelectColumn(Oops_Model_DiscountPeer::DATE_ADD);
			$criteria->addSelectColumn(Oops_Model_DiscountPeer::DATE_UPD);
		} else {
			$criteria->addSelectColumn($alias . '.ID_DISCOUNT');
			$criteria->addSelectColumn($alias . '.ID_DISCOUNT_TYPE');
			$criteria->addSelectColumn($alias . '.BEHAVIOR_NOT_EXHAUSTED');
			$criteria->addSelectColumn($alias . '.ID_CUSTOMER');
			$criteria->addSelectColumn($alias . '.ID_GROUP');
			$criteria->addSelectColumn($alias . '.ID_CURRENCY');
			$criteria->addSelectColumn($alias . '.NAME');
			$criteria->addSelectColumn($alias . '.VALUE');
			$criteria->addSelectColumn($alias . '.QUANTITY');
			$criteria->addSelectColumn($alias . '.QUANTITY_PER_USER');
			$criteria->addSelectColumn($alias . '.CUMULABLE');
			$criteria->addSelectColumn($alias . '.CUMULABLE_REDUCTION');
			$criteria->addSelectColumn($alias . '.DATE_FROM');
			$criteria->addSelectColumn($alias . '.DATE_TO');
			$criteria->addSelectColumn($alias . '.MINIMAL');
			$criteria->addSelectColumn($alias . '.ACTIVE');
			$criteria->addSelectColumn($alias . '.CART_DISPLAY');
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
		$criteria->setPrimaryTableName(Oops_Model_DiscountPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			Oops_Model_DiscountPeer::addSelectColumns($criteria);
		}

		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
		$criteria->setDbName(self::DATABASE_NAME); // Set the correct dbName

		if ($con === null) {
			$con = Propel::getConnection(Oops_Model_DiscountPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
	 * @return     Oops_Model_Discount
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
	{
		$critcopy = clone $criteria;
		$critcopy->setLimit(1);
		$objects = Oops_Model_DiscountPeer::doSelect($critcopy, $con);
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
		return Oops_Model_DiscountPeer::populateObjects(Oops_Model_DiscountPeer::doSelectStmt($criteria, $con));
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
			$con = Propel::getConnection(Oops_Model_DiscountPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		if (!$criteria->hasSelectClause()) {
			$criteria = clone $criteria;
			Oops_Model_DiscountPeer::addSelectColumns($criteria);
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
	 * @param      Oops_Model_Discount $value A Oops_Model_Discount object.
	 * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
	 */
	public static function addInstanceToPool($obj, $key = null)
	{
		if (Propel::isInstancePoolingEnabled()) {
			if ($key === null) {
				$key = (string) $obj->getIdDiscount();
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
	 * @param      mixed $value A Oops_Model_Discount object or a primary key value.
	 */
	public static function removeInstanceFromPool($value)
	{
		if (Propel::isInstancePoolingEnabled() && $value !== null) {
			if (is_object($value) && $value instanceof Oops_Model_Discount) {
				$key = (string) $value->getIdDiscount();
			} elseif (is_scalar($value)) {
				// assume we've been passed a primary key
				$key = (string) $value;
			} else {
				$e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Oops_Model_Discount object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
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
	 * @return     Oops_Model_Discount Found object or NULL if 1) no instance exists for specified key or 2) instance pooling has been disabled.
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
	 * Method to invalidate the instance pool of all tables related to djland_discount
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
		$cls = Oops_Model_DiscountPeer::getOMClass(false);
		// populate the object(s)
		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key = Oops_Model_DiscountPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj = Oops_Model_DiscountPeer::getInstanceFromPool($key))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj->hydrate($row, 0, true); // rehydrate
				$results[] = $obj;
			} else {
				$obj = new $cls();
				$obj->hydrate($row);
				$results[] = $obj;
				Oops_Model_DiscountPeer::addInstanceToPool($obj, $key);
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
	 * @return     array (Oops_Model_Discount object, last column rank)
	 */
	public static function populateObject($row, $startcol = 0)
	{
		$key = Oops_Model_DiscountPeer::getPrimaryKeyHashFromRow($row, $startcol);
		if (null !== ($obj = Oops_Model_DiscountPeer::getInstanceFromPool($key))) {
			// We no longer rehydrate the object, since this can cause data loss.
			// See http://www.propelorm.org/ticket/509
			// $obj->hydrate($row, $startcol, true); // rehydrate
			$col = $startcol + Oops_Model_DiscountPeer::NUM_HYDRATE_COLUMNS;
		} else {
			$cls = Oops_Model_DiscountPeer::OM_CLASS;
			$obj = new $cls();
			$col = $obj->hydrate($row, $startcol);
			Oops_Model_DiscountPeer::addInstanceToPool($obj, $key);
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
	  $dbMap = Propel::getDatabaseMap(Oops_Model_Base_DiscountPeer::DATABASE_NAME);
	  if (!$dbMap->hasTable(Oops_Model_Base_DiscountPeer::TABLE_NAME))
	  {
	    $dbMap->addTableObject(new Oops_Model_DiscountTableMap());
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
		return $withPrefix ? Oops_Model_DiscountPeer::CLASS_DEFAULT : Oops_Model_DiscountPeer::OM_CLASS;
	}

	/**
	 * Performs an INSERT on the database, given a Oops_Model_Discount or Criteria object.
	 *
	 * @param      mixed $values Criteria or Oops_Model_Discount object containing data that is used to create the INSERT statement.
	 * @param      PropelPDO $con the PropelPDO connection to use
	 * @return     mixed The new primary key.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doInsert($values, PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(Oops_Model_DiscountPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; // rename for clarity
		} else {
			$criteria = $values->buildCriteria(); // build Criteria from Oops_Model_Discount object
		}

		if ($criteria->containsKey(Oops_Model_DiscountPeer::ID_DISCOUNT) && $criteria->keyContainsValue(Oops_Model_DiscountPeer::ID_DISCOUNT) ) {
			throw new PropelException('Cannot insert a value for auto-increment primary key ('.Oops_Model_DiscountPeer::ID_DISCOUNT.')');
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
	 * Performs an UPDATE on the database, given a Oops_Model_Discount or Criteria object.
	 *
	 * @param      mixed $values Criteria or Oops_Model_Discount object containing data that is used to create the UPDATE statement.
	 * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
	 * @return     int The number of affected rows (if supported by underlying database driver).
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doUpdate($values, PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(Oops_Model_DiscountPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$selectCriteria = new Criteria(self::DATABASE_NAME);

		if ($values instanceof Criteria) {
			$criteria = clone $values; // rename for clarity

			$comparison = $criteria->getComparison(Oops_Model_DiscountPeer::ID_DISCOUNT);
			$value = $criteria->remove(Oops_Model_DiscountPeer::ID_DISCOUNT);
			if ($value) {
				$selectCriteria->add(Oops_Model_DiscountPeer::ID_DISCOUNT, $value, $comparison);
			} else {
				$selectCriteria->setPrimaryTableName(Oops_Model_DiscountPeer::TABLE_NAME);
			}

		} else { // $values is Oops_Model_Discount object
			$criteria = $values->buildCriteria(); // gets full criteria
			$selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
		}

		// set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		return BasePeer::doUpdate($selectCriteria, $criteria, $con);
	}

	/**
	 * Deletes all rows from the djland_discount table.
	 *
	 * @param      PropelPDO $con the connection to use
	 * @return     int The number of affected rows (if supported by underlying database driver).
	 */
	public static function doDeleteAll(PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(Oops_Model_DiscountPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}
		$affectedRows = 0; // initialize var to track total num of affected rows
		try {
			// use transaction because $criteria could contain info
			// for more than one table or we could emulating ON DELETE CASCADE, etc.
			$con->beginTransaction();
			$affectedRows += BasePeer::doDeleteAll(Oops_Model_DiscountPeer::TABLE_NAME, $con, Oops_Model_DiscountPeer::DATABASE_NAME);
			// Because this db requires some delete cascade/set null emulation, we have to
			// clear the cached instance *after* the emulation has happened (since
			// instances get re-added by the select statement contained therein).
			Oops_Model_DiscountPeer::clearInstancePool();
			Oops_Model_DiscountPeer::clearRelatedInstancePool();
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Performs a DELETE on the database, given a Oops_Model_Discount or Criteria object OR a primary key value.
	 *
	 * @param      mixed $values Criteria or Oops_Model_Discount object or primary key or array of primary keys
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
			$con = Propel::getConnection(Oops_Model_DiscountPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		if ($values instanceof Criteria) {
			// invalidate the cache for all objects of this type, since we have no
			// way of knowing (without running a query) what objects should be invalidated
			// from the cache based on this Criteria.
			Oops_Model_DiscountPeer::clearInstancePool();
			// rename for clarity
			$criteria = clone $values;
		} elseif ($values instanceof Oops_Model_Discount) { // it's a model object
			// invalidate the cache for this single object
			Oops_Model_DiscountPeer::removeInstanceFromPool($values);
			// create criteria based on pk values
			$criteria = $values->buildPkeyCriteria();
		} else { // it's a primary key, or an array of pks
			$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(Oops_Model_DiscountPeer::ID_DISCOUNT, (array) $values, Criteria::IN);
			// invalidate the cache for this object(s)
			foreach ((array) $values as $singleval) {
				Oops_Model_DiscountPeer::removeInstanceFromPool($singleval);
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
			Oops_Model_DiscountPeer::clearRelatedInstancePool();
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Validates all modified columns of given Oops_Model_Discount object.
	 * If parameter $columns is either a single column name or an array of column names
	 * than only those columns are validated.
	 *
	 * NOTICE: This does not apply to primary or foreign keys for now.
	 *
	 * @param      Oops_Model_Discount $obj The object to validate.
	 * @param      mixed $cols Column name or array of column names.
	 *
	 * @return     mixed TRUE if all columns are valid or the error message of the first invalid column.
	 */
	public static function doValidate($obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(Oops_Model_DiscountPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(Oops_Model_DiscountPeer::TABLE_NAME);

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

		return BasePeer::doValidate(Oops_Model_DiscountPeer::DATABASE_NAME, Oops_Model_DiscountPeer::TABLE_NAME, $columns);
	}

	/**
	 * Retrieve a single object by pkey.
	 *
	 * @param      int $pk the primary key.
	 * @param      PropelPDO $con the connection to use
	 * @return     Oops_Model_Discount
	 */
	public static function retrieveByPK($pk, PropelPDO $con = null)
	{

		if (null !== ($obj = Oops_Model_DiscountPeer::getInstanceFromPool((string) $pk))) {
			return $obj;
		}

		if ($con === null) {
			$con = Propel::getConnection(Oops_Model_DiscountPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria = new Criteria(Oops_Model_DiscountPeer::DATABASE_NAME);
		$criteria->add(Oops_Model_DiscountPeer::ID_DISCOUNT, $pk);

		$v = Oops_Model_DiscountPeer::doSelect($criteria, $con);

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
			$con = Propel::getConnection(Oops_Model_DiscountPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$objs = null;
		if (empty($pks)) {
			$objs = array();
		} else {
			$criteria = new Criteria(Oops_Model_DiscountPeer::DATABASE_NAME);
			$criteria->add(Oops_Model_DiscountPeer::ID_DISCOUNT, $pks, Criteria::IN);
			$objs = Oops_Model_DiscountPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} // Oops_Model_Base_DiscountPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
Oops_Model_Base_DiscountPeer::buildTableMap();

