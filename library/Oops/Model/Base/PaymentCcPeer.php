<?php


define('OOPS_MODEL_PAYMENTCC_ID_PAYMENT_CC', _DB_PREFIX_ . 'payment_cc.ID_PAYMENT_CC');
define('OOPS_MODEL_PAYMENTCC_ID_ORDER', _DB_PREFIX_ . 'payment_cc.ID_ORDER');
define('OOPS_MODEL_PAYMENTCC_ID_CURRENCY', _DB_PREFIX_ . 'payment_cc.ID_CURRENCY');
define('OOPS_MODEL_PAYMENTCC_AMOUNT', _DB_PREFIX_ . 'payment_cc.AMOUNT');
define('OOPS_MODEL_PAYMENTCC_TRANSACTION_ID', _DB_PREFIX_ . 'payment_cc.TRANSACTION_ID');
define('OOPS_MODEL_PAYMENTCC_CARD_NUMBER', _DB_PREFIX_ . 'payment_cc.CARD_NUMBER');
define('OOPS_MODEL_PAYMENTCC_CARD_BRAND', _DB_PREFIX_ . 'payment_cc.CARD_BRAND');
define('OOPS_MODEL_PAYMENTCC_CARD_EXPIRATION', _DB_PREFIX_ . 'payment_cc.CARD_EXPIRATION');
define('OOPS_MODEL_PAYMENTCC_CARD_HOLDER', _DB_PREFIX_ . 'payment_cc.CARD_HOLDER');
define('OOPS_MODEL_PAYMENTCC_DATE_ADD', _DB_PREFIX_ . 'payment_cc.DATE_ADD');
define('OOPS_MODEL_PAYMENTCC_TABLE_NAME', _DB_PREFIX_ . 'payment_cc');

/**
 * Base static class for performing query and update operations on the 'payment_cc' table.
 *
 * 
 *
 * @package    propel.generator.prestashop.om
 */
abstract class Oops_Model_Base_PaymentCcPeer {

	/** the default database name for this class */
	const DATABASE_NAME = 'prestashop';

	/** the table name for this class */
	const TABLE_NAME = OOPS_MODEL_PAYMENTCC_TABLE_NAME;

	/** the related Propel class for this table */
	const OM_CLASS = 'Oops_Model_PaymentCc';

	/** A class that can be returned by this peer. */
	const CLASS_DEFAULT = 'prestashop.Oops_Model_PaymentCc';

	/** the related TableMap class for this table */
	const TM_CLASS = 'Oops_Model_PaymentCcTableMap';

	/** The total number of columns. */
	const NUM_COLUMNS = 10;

	/** The number of lazy-loaded columns. */
	const NUM_LAZY_LOAD_COLUMNS = 0;

	/** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
	const NUM_HYDRATE_COLUMNS = 10;

	/** the column name for the ID_PAYMENT_CC field */
	const ID_PAYMENT_CC = OOPS_MODEL_PAYMENTCC_ID_PAYMENT_CC;

	/** the column name for the ID_ORDER field */
	const ID_ORDER = OOPS_MODEL_PAYMENTCC_ID_ORDER;

	/** the column name for the ID_CURRENCY field */
	const ID_CURRENCY = OOPS_MODEL_PAYMENTCC_ID_CURRENCY;

	/** the column name for the AMOUNT field */
	const AMOUNT = OOPS_MODEL_PAYMENTCC_AMOUNT;

	/** the column name for the TRANSACTION_ID field */
	const TRANSACTION_ID = OOPS_MODEL_PAYMENTCC_TRANSACTION_ID;

	/** the column name for the CARD_NUMBER field */
	const CARD_NUMBER = OOPS_MODEL_PAYMENTCC_CARD_NUMBER;

	/** the column name for the CARD_BRAND field */
	const CARD_BRAND = OOPS_MODEL_PAYMENTCC_CARD_BRAND;

	/** the column name for the CARD_EXPIRATION field */
	const CARD_EXPIRATION = OOPS_MODEL_PAYMENTCC_CARD_EXPIRATION;

	/** the column name for the CARD_HOLDER field */
	const CARD_HOLDER = OOPS_MODEL_PAYMENTCC_CARD_HOLDER;

	/** the column name for the DATE_ADD field */
	const DATE_ADD = OOPS_MODEL_PAYMENTCC_DATE_ADD;

	/** The default string format for model objects of the related table **/
	const DEFAULT_STRING_FORMAT = 'YAML';

	/**
	 * An identiy map to hold any loaded instances of Oops_Model_PaymentCc objects.
	 * This must be public so that other peer classes can access this when hydrating from JOIN
	 * queries.
	 * @var        array Oops_Model_PaymentCc[]
	 */
	public static $instances = array();


	/**
	 * holds an array of fieldnames
	 *
	 * first dimension keys are the type constants
	 * e.g. self::$fieldNames[self::TYPE_PHPNAME][0] = 'Id'
	 */
	protected static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('IdPaymentCc', 'IdOrder', 'IdCurrency', 'Amount', 'TransactionId', 'CardNumber', 'CardBrand', 'CardExpiration', 'CardHolder', 'DateAdd', ),
		BasePeer::TYPE_STUDLYPHPNAME => array ('idPaymentCc', 'idOrder', 'idCurrency', 'amount', 'transactionId', 'cardNumber', 'cardBrand', 'cardExpiration', 'cardHolder', 'dateAdd', ),
		BasePeer::TYPE_COLNAME => array (self::ID_PAYMENT_CC, self::ID_ORDER, self::ID_CURRENCY, self::AMOUNT, self::TRANSACTION_ID, self::CARD_NUMBER, self::CARD_BRAND, self::CARD_EXPIRATION, self::CARD_HOLDER, self::DATE_ADD, ),
		BasePeer::TYPE_RAW_COLNAME => array ('ID_PAYMENT_CC', 'ID_ORDER', 'ID_CURRENCY', 'AMOUNT', 'TRANSACTION_ID', 'CARD_NUMBER', 'CARD_BRAND', 'CARD_EXPIRATION', 'CARD_HOLDER', 'DATE_ADD', ),
		BasePeer::TYPE_FIELDNAME => array ('id_payment_cc', 'id_order', 'id_currency', 'amount', 'transaction_id', 'card_number', 'card_brand', 'card_expiration', 'card_holder', 'date_add', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, )
	);

	/**
	 * holds an array of keys for quick access to the fieldnames array
	 *
	 * first dimension keys are the type constants
	 * e.g. self::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
	 */
	protected static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('IdPaymentCc' => 0, 'IdOrder' => 1, 'IdCurrency' => 2, 'Amount' => 3, 'TransactionId' => 4, 'CardNumber' => 5, 'CardBrand' => 6, 'CardExpiration' => 7, 'CardHolder' => 8, 'DateAdd' => 9, ),
		BasePeer::TYPE_STUDLYPHPNAME => array ('idPaymentCc' => 0, 'idOrder' => 1, 'idCurrency' => 2, 'amount' => 3, 'transactionId' => 4, 'cardNumber' => 5, 'cardBrand' => 6, 'cardExpiration' => 7, 'cardHolder' => 8, 'dateAdd' => 9, ),
		BasePeer::TYPE_COLNAME => array (self::ID_PAYMENT_CC => 0, self::ID_ORDER => 1, self::ID_CURRENCY => 2, self::AMOUNT => 3, self::TRANSACTION_ID => 4, self::CARD_NUMBER => 5, self::CARD_BRAND => 6, self::CARD_EXPIRATION => 7, self::CARD_HOLDER => 8, self::DATE_ADD => 9, ),
		BasePeer::TYPE_RAW_COLNAME => array ('ID_PAYMENT_CC' => 0, 'ID_ORDER' => 1, 'ID_CURRENCY' => 2, 'AMOUNT' => 3, 'TRANSACTION_ID' => 4, 'CARD_NUMBER' => 5, 'CARD_BRAND' => 6, 'CARD_EXPIRATION' => 7, 'CARD_HOLDER' => 8, 'DATE_ADD' => 9, ),
		BasePeer::TYPE_FIELDNAME => array ('id_payment_cc' => 0, 'id_order' => 1, 'id_currency' => 2, 'amount' => 3, 'transaction_id' => 4, 'card_number' => 5, 'card_brand' => 6, 'card_expiration' => 7, 'card_holder' => 8, 'date_add' => 9, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, )
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
	 * @param      string $column The column name for current table. (i.e. Oops_Model_PaymentCcPeer::COLUMN_NAME).
	 * @return     string
	 */
	public static function alias($alias, $column)
	{
		return str_replace(Oops_Model_PaymentCcPeer::TABLE_NAME.'.', $alias.'.', $column);
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
			$criteria->addSelectColumn(Oops_Model_PaymentCcPeer::ID_PAYMENT_CC);
			$criteria->addSelectColumn(Oops_Model_PaymentCcPeer::ID_ORDER);
			$criteria->addSelectColumn(Oops_Model_PaymentCcPeer::ID_CURRENCY);
			$criteria->addSelectColumn(Oops_Model_PaymentCcPeer::AMOUNT);
			$criteria->addSelectColumn(Oops_Model_PaymentCcPeer::TRANSACTION_ID);
			$criteria->addSelectColumn(Oops_Model_PaymentCcPeer::CARD_NUMBER);
			$criteria->addSelectColumn(Oops_Model_PaymentCcPeer::CARD_BRAND);
			$criteria->addSelectColumn(Oops_Model_PaymentCcPeer::CARD_EXPIRATION);
			$criteria->addSelectColumn(Oops_Model_PaymentCcPeer::CARD_HOLDER);
			$criteria->addSelectColumn(Oops_Model_PaymentCcPeer::DATE_ADD);
		} else {
			$criteria->addSelectColumn($alias . '.ID_PAYMENT_CC');
			$criteria->addSelectColumn($alias . '.ID_ORDER');
			$criteria->addSelectColumn($alias . '.ID_CURRENCY');
			$criteria->addSelectColumn($alias . '.AMOUNT');
			$criteria->addSelectColumn($alias . '.TRANSACTION_ID');
			$criteria->addSelectColumn($alias . '.CARD_NUMBER');
			$criteria->addSelectColumn($alias . '.CARD_BRAND');
			$criteria->addSelectColumn($alias . '.CARD_EXPIRATION');
			$criteria->addSelectColumn($alias . '.CARD_HOLDER');
			$criteria->addSelectColumn($alias . '.DATE_ADD');
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
		$criteria->setPrimaryTableName(Oops_Model_PaymentCcPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			Oops_Model_PaymentCcPeer::addSelectColumns($criteria);
		}

		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
		$criteria->setDbName(self::DATABASE_NAME); // Set the correct dbName

		if ($con === null) {
			$con = Propel::getConnection(Oops_Model_PaymentCcPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
	 * @return     Oops_Model_PaymentCc
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
	{
		$critcopy = clone $criteria;
		$critcopy->setLimit(1);
		$objects = Oops_Model_PaymentCcPeer::doSelect($critcopy, $con);
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
		return Oops_Model_PaymentCcPeer::populateObjects(Oops_Model_PaymentCcPeer::doSelectStmt($criteria, $con));
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
			$con = Propel::getConnection(Oops_Model_PaymentCcPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		if (!$criteria->hasSelectClause()) {
			$criteria = clone $criteria;
			Oops_Model_PaymentCcPeer::addSelectColumns($criteria);
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
	 * @param      Oops_Model_PaymentCc $value A Oops_Model_PaymentCc object.
	 * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
	 */
	public static function addInstanceToPool($obj, $key = null)
	{
		if (Propel::isInstancePoolingEnabled()) {
			if ($key === null) {
				$key = (string) $obj->getIdPaymentCc();
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
	 * @param      mixed $value A Oops_Model_PaymentCc object or a primary key value.
	 */
	public static function removeInstanceFromPool($value)
	{
		if (Propel::isInstancePoolingEnabled() && $value !== null) {
			if (is_object($value) && $value instanceof Oops_Model_PaymentCc) {
				$key = (string) $value->getIdPaymentCc();
			} elseif (is_scalar($value)) {
				// assume we've been passed a primary key
				$key = (string) $value;
			} else {
				$e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Oops_Model_PaymentCc object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
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
	 * @return     Oops_Model_PaymentCc Found object or NULL if 1) no instance exists for specified key or 2) instance pooling has been disabled.
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
	 * Method to invalidate the instance pool of all tables related to payment_cc
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
		$cls = Oops_Model_PaymentCcPeer::getOMClass(false);
		// populate the object(s)
		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key = Oops_Model_PaymentCcPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj = Oops_Model_PaymentCcPeer::getInstanceFromPool($key))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj->hydrate($row, 0, true); // rehydrate
				$results[] = $obj;
			} else {
				$obj = new $cls();
				$obj->hydrate($row);
				$results[] = $obj;
				Oops_Model_PaymentCcPeer::addInstanceToPool($obj, $key);
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
	 * @return     array (Oops_Model_PaymentCc object, last column rank)
	 */
	public static function populateObject($row, $startcol = 0)
	{
		$key = Oops_Model_PaymentCcPeer::getPrimaryKeyHashFromRow($row, $startcol);
		if (null !== ($obj = Oops_Model_PaymentCcPeer::getInstanceFromPool($key))) {
			// We no longer rehydrate the object, since this can cause data loss.
			// See http://www.propelorm.org/ticket/509
			// $obj->hydrate($row, $startcol, true); // rehydrate
			$col = $startcol + Oops_Model_PaymentCcPeer::NUM_HYDRATE_COLUMNS;
		} else {
			$cls = Oops_Model_PaymentCcPeer::OM_CLASS;
			$obj = new $cls();
			$col = $obj->hydrate($row, $startcol);
			Oops_Model_PaymentCcPeer::addInstanceToPool($obj, $key);
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
	  $dbMap = Propel::getDatabaseMap(Oops_Model_Base_PaymentCcPeer::DATABASE_NAME);
	  if (!$dbMap->hasTable(Oops_Model_Base_PaymentCcPeer::TABLE_NAME))
	  {
	    $dbMap->addTableObject(new Oops_Model_PaymentCcTableMap());
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
		return $withPrefix ? Oops_Model_PaymentCcPeer::CLASS_DEFAULT : Oops_Model_PaymentCcPeer::OM_CLASS;
	}

	/**
	 * Performs an INSERT on the database, given a Oops_Model_PaymentCc or Criteria object.
	 *
	 * @param      mixed $values Criteria or Oops_Model_PaymentCc object containing data that is used to create the INSERT statement.
	 * @param      PropelPDO $con the PropelPDO connection to use
	 * @return     mixed The new primary key.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doInsert($values, PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(Oops_Model_PaymentCcPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; // rename for clarity
		} else {
			$criteria = $values->buildCriteria(); // build Criteria from Oops_Model_PaymentCc object
		}

		if ($criteria->containsKey(Oops_Model_PaymentCcPeer::ID_PAYMENT_CC) && $criteria->keyContainsValue(Oops_Model_PaymentCcPeer::ID_PAYMENT_CC) ) {
			throw new PropelException('Cannot insert a value for auto-increment primary key ('.Oops_Model_PaymentCcPeer::ID_PAYMENT_CC.')');
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
	 * Performs an UPDATE on the database, given a Oops_Model_PaymentCc or Criteria object.
	 *
	 * @param      mixed $values Criteria or Oops_Model_PaymentCc object containing data that is used to create the UPDATE statement.
	 * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
	 * @return     int The number of affected rows (if supported by underlying database driver).
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doUpdate($values, PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(Oops_Model_PaymentCcPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$selectCriteria = new Criteria(self::DATABASE_NAME);

		if ($values instanceof Criteria) {
			$criteria = clone $values; // rename for clarity

			$comparison = $criteria->getComparison(Oops_Model_PaymentCcPeer::ID_PAYMENT_CC);
			$value = $criteria->remove(Oops_Model_PaymentCcPeer::ID_PAYMENT_CC);
			if ($value) {
				$selectCriteria->add(Oops_Model_PaymentCcPeer::ID_PAYMENT_CC, $value, $comparison);
			} else {
				$selectCriteria->setPrimaryTableName(Oops_Model_PaymentCcPeer::TABLE_NAME);
			}

		} else { // $values is Oops_Model_PaymentCc object
			$criteria = $values->buildCriteria(); // gets full criteria
			$selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
		}

		// set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		return BasePeer::doUpdate($selectCriteria, $criteria, $con);
	}

	/**
	 * Deletes all rows from the payment_cc table.
	 *
	 * @param      PropelPDO $con the connection to use
	 * @return     int The number of affected rows (if supported by underlying database driver).
	 */
	public static function doDeleteAll(PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(Oops_Model_PaymentCcPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}
		$affectedRows = 0; // initialize var to track total num of affected rows
		try {
			// use transaction because $criteria could contain info
			// for more than one table or we could emulating ON DELETE CASCADE, etc.
			$con->beginTransaction();
			$affectedRows += BasePeer::doDeleteAll(Oops_Model_PaymentCcPeer::TABLE_NAME, $con, Oops_Model_PaymentCcPeer::DATABASE_NAME);
			// Because this db requires some delete cascade/set null emulation, we have to
			// clear the cached instance *after* the emulation has happened (since
			// instances get re-added by the select statement contained therein).
			Oops_Model_PaymentCcPeer::clearInstancePool();
			Oops_Model_PaymentCcPeer::clearRelatedInstancePool();
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Performs a DELETE on the database, given a Oops_Model_PaymentCc or Criteria object OR a primary key value.
	 *
	 * @param      mixed $values Criteria or Oops_Model_PaymentCc object or primary key or array of primary keys
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
			$con = Propel::getConnection(Oops_Model_PaymentCcPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		if ($values instanceof Criteria) {
			// invalidate the cache for all objects of this type, since we have no
			// way of knowing (without running a query) what objects should be invalidated
			// from the cache based on this Criteria.
			Oops_Model_PaymentCcPeer::clearInstancePool();
			// rename for clarity
			$criteria = clone $values;
		} elseif ($values instanceof Oops_Model_PaymentCc) { // it's a model object
			// invalidate the cache for this single object
			Oops_Model_PaymentCcPeer::removeInstanceFromPool($values);
			// create criteria based on pk values
			$criteria = $values->buildPkeyCriteria();
		} else { // it's a primary key, or an array of pks
			$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(Oops_Model_PaymentCcPeer::ID_PAYMENT_CC, (array) $values, Criteria::IN);
			// invalidate the cache for this object(s)
			foreach ((array) $values as $singleval) {
				Oops_Model_PaymentCcPeer::removeInstanceFromPool($singleval);
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
			Oops_Model_PaymentCcPeer::clearRelatedInstancePool();
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Validates all modified columns of given Oops_Model_PaymentCc object.
	 * If parameter $columns is either a single column name or an array of column names
	 * than only those columns are validated.
	 *
	 * NOTICE: This does not apply to primary or foreign keys for now.
	 *
	 * @param      Oops_Model_PaymentCc $obj The object to validate.
	 * @param      mixed $cols Column name or array of column names.
	 *
	 * @return     mixed TRUE if all columns are valid or the error message of the first invalid column.
	 */
	public static function doValidate($obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(Oops_Model_PaymentCcPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(Oops_Model_PaymentCcPeer::TABLE_NAME);

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

		return BasePeer::doValidate(Oops_Model_PaymentCcPeer::DATABASE_NAME, Oops_Model_PaymentCcPeer::TABLE_NAME, $columns);
	}

	/**
	 * Retrieve a single object by pkey.
	 *
	 * @param      int $pk the primary key.
	 * @param      PropelPDO $con the connection to use
	 * @return     Oops_Model_PaymentCc
	 */
	public static function retrieveByPK($pk, PropelPDO $con = null)
	{

		if (null !== ($obj = Oops_Model_PaymentCcPeer::getInstanceFromPool((string) $pk))) {
			return $obj;
		}

		if ($con === null) {
			$con = Propel::getConnection(Oops_Model_PaymentCcPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria = new Criteria(Oops_Model_PaymentCcPeer::DATABASE_NAME);
		$criteria->add(Oops_Model_PaymentCcPeer::ID_PAYMENT_CC, $pk);

		$v = Oops_Model_PaymentCcPeer::doSelect($criteria, $con);

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
			$con = Propel::getConnection(Oops_Model_PaymentCcPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$objs = null;
		if (empty($pks)) {
			$objs = array();
		} else {
			$criteria = new Criteria(Oops_Model_PaymentCcPeer::DATABASE_NAME);
			$criteria->add(Oops_Model_PaymentCcPeer::ID_PAYMENT_CC, $pks, Criteria::IN);
			$objs = Oops_Model_PaymentCcPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} // Oops_Model_Base_PaymentCcPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
Oops_Model_Base_PaymentCcPeer::buildTableMap();

