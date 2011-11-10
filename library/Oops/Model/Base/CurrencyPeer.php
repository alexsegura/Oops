<?php


define('OOPS_MODEL_CURRENCY_ID_CURRENCY', _DB_PREFIX_ . 'currency.ID_CURRENCY');
define('OOPS_MODEL_CURRENCY_NAME', _DB_PREFIX_ . 'currency.NAME');
define('OOPS_MODEL_CURRENCY_ISO_CODE', _DB_PREFIX_ . 'currency.ISO_CODE');
define('OOPS_MODEL_CURRENCY_ISO_CODE_NUM', _DB_PREFIX_ . 'currency.ISO_CODE_NUM');
define('OOPS_MODEL_CURRENCY_SIGN', _DB_PREFIX_ . 'currency.SIGN');
define('OOPS_MODEL_CURRENCY_BLANK', _DB_PREFIX_ . 'currency.BLANK');
define('OOPS_MODEL_CURRENCY_FORMAT', _DB_PREFIX_ . 'currency.FORMAT');
define('OOPS_MODEL_CURRENCY_DECIMALS', _DB_PREFIX_ . 'currency.DECIMALS');
define('OOPS_MODEL_CURRENCY_CONVERSION_RATE', _DB_PREFIX_ . 'currency.CONVERSION_RATE');
define('OOPS_MODEL_CURRENCY_DELETED', _DB_PREFIX_ . 'currency.DELETED');
define('OOPS_MODEL_CURRENCY_ACTIVE', _DB_PREFIX_ . 'currency.ACTIVE');
define('OOPS_MODEL_CURRENCY_TABLE_NAME', _DB_PREFIX_ . 'currency');

/**
 * Base static class for performing query and update operations on the 'currency' table.
 *
 * 
 *
 * @package    propel.generator.prestashop.om
 */
abstract class Oops_Model_Base_CurrencyPeer {

	/** the default database name for this class */
	const DATABASE_NAME = 'prestashop';

	/** the table name for this class */
	const TABLE_NAME = OOPS_MODEL_CURRENCY_TABLE_NAME;

	/** the related Propel class for this table */
	const OM_CLASS = 'Oops_Model_Currency';

	/** A class that can be returned by this peer. */
	const CLASS_DEFAULT = 'prestashop.Oops_Model_Currency';

	/** the related TableMap class for this table */
	const TM_CLASS = 'Oops_Model_CurrencyTableMap';

	/** The total number of columns. */
	const NUM_COLUMNS = 11;

	/** The number of lazy-loaded columns. */
	const NUM_LAZY_LOAD_COLUMNS = 0;

	/** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
	const NUM_HYDRATE_COLUMNS = 11;

	/** the column name for the ID_CURRENCY field */
	const ID_CURRENCY = OOPS_MODEL_CURRENCY_ID_CURRENCY;

	/** the column name for the NAME field */
	const NAME = OOPS_MODEL_CURRENCY_NAME;

	/** the column name for the ISO_CODE field */
	const ISO_CODE = OOPS_MODEL_CURRENCY_ISO_CODE;

	/** the column name for the ISO_CODE_NUM field */
	const ISO_CODE_NUM = OOPS_MODEL_CURRENCY_ISO_CODE_NUM;

	/** the column name for the SIGN field */
	const SIGN = OOPS_MODEL_CURRENCY_SIGN;

	/** the column name for the BLANK field */
	const BLANK = OOPS_MODEL_CURRENCY_BLANK;

	/** the column name for the FORMAT field */
	const FORMAT = OOPS_MODEL_CURRENCY_FORMAT;

	/** the column name for the DECIMALS field */
	const DECIMALS = OOPS_MODEL_CURRENCY_DECIMALS;

	/** the column name for the CONVERSION_RATE field */
	const CONVERSION_RATE = OOPS_MODEL_CURRENCY_CONVERSION_RATE;

	/** the column name for the DELETED field */
	const DELETED = OOPS_MODEL_CURRENCY_DELETED;

	/** the column name for the ACTIVE field */
	const ACTIVE = OOPS_MODEL_CURRENCY_ACTIVE;

	/** The default string format for model objects of the related table **/
	const DEFAULT_STRING_FORMAT = 'YAML';

	/**
	 * An identiy map to hold any loaded instances of Oops_Model_Currency objects.
	 * This must be public so that other peer classes can access this when hydrating from JOIN
	 * queries.
	 * @var        array Oops_Model_Currency[]
	 */
	public static $instances = array();


	/**
	 * holds an array of fieldnames
	 *
	 * first dimension keys are the type constants
	 * e.g. self::$fieldNames[self::TYPE_PHPNAME][0] = 'Id'
	 */
	protected static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('IdCurrency', 'Name', 'IsoCode', 'IsoCodeNum', 'Sign', 'Blank', 'Format', 'Decimals', 'ConversionRate', 'Deleted', 'Active', ),
		BasePeer::TYPE_STUDLYPHPNAME => array ('idCurrency', 'name', 'isoCode', 'isoCodeNum', 'sign', 'blank', 'format', 'decimals', 'conversionRate', 'deleted', 'active', ),
		BasePeer::TYPE_COLNAME => array (self::ID_CURRENCY, self::NAME, self::ISO_CODE, self::ISO_CODE_NUM, self::SIGN, self::BLANK, self::FORMAT, self::DECIMALS, self::CONVERSION_RATE, self::DELETED, self::ACTIVE, ),
		BasePeer::TYPE_RAW_COLNAME => array ('ID_CURRENCY', 'NAME', 'ISO_CODE', 'ISO_CODE_NUM', 'SIGN', 'BLANK', 'FORMAT', 'DECIMALS', 'CONVERSION_RATE', 'DELETED', 'ACTIVE', ),
		BasePeer::TYPE_FIELDNAME => array ('id_currency', 'name', 'iso_code', 'iso_code_num', 'sign', 'blank', 'format', 'decimals', 'conversion_rate', 'deleted', 'active', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, )
	);

	/**
	 * holds an array of keys for quick access to the fieldnames array
	 *
	 * first dimension keys are the type constants
	 * e.g. self::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
	 */
	protected static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('IdCurrency' => 0, 'Name' => 1, 'IsoCode' => 2, 'IsoCodeNum' => 3, 'Sign' => 4, 'Blank' => 5, 'Format' => 6, 'Decimals' => 7, 'ConversionRate' => 8, 'Deleted' => 9, 'Active' => 10, ),
		BasePeer::TYPE_STUDLYPHPNAME => array ('idCurrency' => 0, 'name' => 1, 'isoCode' => 2, 'isoCodeNum' => 3, 'sign' => 4, 'blank' => 5, 'format' => 6, 'decimals' => 7, 'conversionRate' => 8, 'deleted' => 9, 'active' => 10, ),
		BasePeer::TYPE_COLNAME => array (self::ID_CURRENCY => 0, self::NAME => 1, self::ISO_CODE => 2, self::ISO_CODE_NUM => 3, self::SIGN => 4, self::BLANK => 5, self::FORMAT => 6, self::DECIMALS => 7, self::CONVERSION_RATE => 8, self::DELETED => 9, self::ACTIVE => 10, ),
		BasePeer::TYPE_RAW_COLNAME => array ('ID_CURRENCY' => 0, 'NAME' => 1, 'ISO_CODE' => 2, 'ISO_CODE_NUM' => 3, 'SIGN' => 4, 'BLANK' => 5, 'FORMAT' => 6, 'DECIMALS' => 7, 'CONVERSION_RATE' => 8, 'DELETED' => 9, 'ACTIVE' => 10, ),
		BasePeer::TYPE_FIELDNAME => array ('id_currency' => 0, 'name' => 1, 'iso_code' => 2, 'iso_code_num' => 3, 'sign' => 4, 'blank' => 5, 'format' => 6, 'decimals' => 7, 'conversion_rate' => 8, 'deleted' => 9, 'active' => 10, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, )
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
	 * @param      string $column The column name for current table. (i.e. Oops_Model_CurrencyPeer::COLUMN_NAME).
	 * @return     string
	 */
	public static function alias($alias, $column)
	{
		return str_replace(Oops_Model_CurrencyPeer::TABLE_NAME.'.', $alias.'.', $column);
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
			$criteria->addSelectColumn(Oops_Model_CurrencyPeer::ID_CURRENCY);
			$criteria->addSelectColumn(Oops_Model_CurrencyPeer::NAME);
			$criteria->addSelectColumn(Oops_Model_CurrencyPeer::ISO_CODE);
			$criteria->addSelectColumn(Oops_Model_CurrencyPeer::ISO_CODE_NUM);
			$criteria->addSelectColumn(Oops_Model_CurrencyPeer::SIGN);
			$criteria->addSelectColumn(Oops_Model_CurrencyPeer::BLANK);
			$criteria->addSelectColumn(Oops_Model_CurrencyPeer::FORMAT);
			$criteria->addSelectColumn(Oops_Model_CurrencyPeer::DECIMALS);
			$criteria->addSelectColumn(Oops_Model_CurrencyPeer::CONVERSION_RATE);
			$criteria->addSelectColumn(Oops_Model_CurrencyPeer::DELETED);
			$criteria->addSelectColumn(Oops_Model_CurrencyPeer::ACTIVE);
		} else {
			$criteria->addSelectColumn($alias . '.ID_CURRENCY');
			$criteria->addSelectColumn($alias . '.NAME');
			$criteria->addSelectColumn($alias . '.ISO_CODE');
			$criteria->addSelectColumn($alias . '.ISO_CODE_NUM');
			$criteria->addSelectColumn($alias . '.SIGN');
			$criteria->addSelectColumn($alias . '.BLANK');
			$criteria->addSelectColumn($alias . '.FORMAT');
			$criteria->addSelectColumn($alias . '.DECIMALS');
			$criteria->addSelectColumn($alias . '.CONVERSION_RATE');
			$criteria->addSelectColumn($alias . '.DELETED');
			$criteria->addSelectColumn($alias . '.ACTIVE');
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
		$criteria->setPrimaryTableName(Oops_Model_CurrencyPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			Oops_Model_CurrencyPeer::addSelectColumns($criteria);
		}

		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
		$criteria->setDbName(self::DATABASE_NAME); // Set the correct dbName

		if ($con === null) {
			$con = Propel::getConnection(Oops_Model_CurrencyPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
	 * @return     Oops_Model_Currency
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
	{
		$critcopy = clone $criteria;
		$critcopy->setLimit(1);
		$objects = Oops_Model_CurrencyPeer::doSelect($critcopy, $con);
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
		return Oops_Model_CurrencyPeer::populateObjects(Oops_Model_CurrencyPeer::doSelectStmt($criteria, $con));
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
			$con = Propel::getConnection(Oops_Model_CurrencyPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		if (!$criteria->hasSelectClause()) {
			$criteria = clone $criteria;
			Oops_Model_CurrencyPeer::addSelectColumns($criteria);
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
	 * @param      Oops_Model_Currency $value A Oops_Model_Currency object.
	 * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
	 */
	public static function addInstanceToPool($obj, $key = null)
	{
		if (Propel::isInstancePoolingEnabled()) {
			if ($key === null) {
				$key = (string) $obj->getIdCurrency();
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
	 * @param      mixed $value A Oops_Model_Currency object or a primary key value.
	 */
	public static function removeInstanceFromPool($value)
	{
		if (Propel::isInstancePoolingEnabled() && $value !== null) {
			if (is_object($value) && $value instanceof Oops_Model_Currency) {
				$key = (string) $value->getIdCurrency();
			} elseif (is_scalar($value)) {
				// assume we've been passed a primary key
				$key = (string) $value;
			} else {
				$e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Oops_Model_Currency object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
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
	 * @return     Oops_Model_Currency Found object or NULL if 1) no instance exists for specified key or 2) instance pooling has been disabled.
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
	 * Method to invalidate the instance pool of all tables related to currency
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
		$cls = Oops_Model_CurrencyPeer::getOMClass(false);
		// populate the object(s)
		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key = Oops_Model_CurrencyPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj = Oops_Model_CurrencyPeer::getInstanceFromPool($key))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj->hydrate($row, 0, true); // rehydrate
				$results[] = $obj;
			} else {
				$obj = new $cls();
				$obj->hydrate($row);
				$results[] = $obj;
				Oops_Model_CurrencyPeer::addInstanceToPool($obj, $key);
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
	 * @return     array (Oops_Model_Currency object, last column rank)
	 */
	public static function populateObject($row, $startcol = 0)
	{
		$key = Oops_Model_CurrencyPeer::getPrimaryKeyHashFromRow($row, $startcol);
		if (null !== ($obj = Oops_Model_CurrencyPeer::getInstanceFromPool($key))) {
			// We no longer rehydrate the object, since this can cause data loss.
			// See http://www.propelorm.org/ticket/509
			// $obj->hydrate($row, $startcol, true); // rehydrate
			$col = $startcol + Oops_Model_CurrencyPeer::NUM_HYDRATE_COLUMNS;
		} else {
			$cls = Oops_Model_CurrencyPeer::OM_CLASS;
			$obj = new $cls();
			$col = $obj->hydrate($row, $startcol);
			Oops_Model_CurrencyPeer::addInstanceToPool($obj, $key);
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
	  $dbMap = Propel::getDatabaseMap(Oops_Model_Base_CurrencyPeer::DATABASE_NAME);
	  if (!$dbMap->hasTable(Oops_Model_Base_CurrencyPeer::TABLE_NAME))
	  {
	    $dbMap->addTableObject(new Oops_Model_CurrencyTableMap());
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
		return $withPrefix ? Oops_Model_CurrencyPeer::CLASS_DEFAULT : Oops_Model_CurrencyPeer::OM_CLASS;
	}

	/**
	 * Performs an INSERT on the database, given a Oops_Model_Currency or Criteria object.
	 *
	 * @param      mixed $values Criteria or Oops_Model_Currency object containing data that is used to create the INSERT statement.
	 * @param      PropelPDO $con the PropelPDO connection to use
	 * @return     mixed The new primary key.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doInsert($values, PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(Oops_Model_CurrencyPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; // rename for clarity
		} else {
			$criteria = $values->buildCriteria(); // build Criteria from Oops_Model_Currency object
		}

		if ($criteria->containsKey(Oops_Model_CurrencyPeer::ID_CURRENCY) && $criteria->keyContainsValue(Oops_Model_CurrencyPeer::ID_CURRENCY) ) {
			throw new PropelException('Cannot insert a value for auto-increment primary key ('.Oops_Model_CurrencyPeer::ID_CURRENCY.')');
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
	 * Performs an UPDATE on the database, given a Oops_Model_Currency or Criteria object.
	 *
	 * @param      mixed $values Criteria or Oops_Model_Currency object containing data that is used to create the UPDATE statement.
	 * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
	 * @return     int The number of affected rows (if supported by underlying database driver).
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doUpdate($values, PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(Oops_Model_CurrencyPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$selectCriteria = new Criteria(self::DATABASE_NAME);

		if ($values instanceof Criteria) {
			$criteria = clone $values; // rename for clarity

			$comparison = $criteria->getComparison(Oops_Model_CurrencyPeer::ID_CURRENCY);
			$value = $criteria->remove(Oops_Model_CurrencyPeer::ID_CURRENCY);
			if ($value) {
				$selectCriteria->add(Oops_Model_CurrencyPeer::ID_CURRENCY, $value, $comparison);
			} else {
				$selectCriteria->setPrimaryTableName(Oops_Model_CurrencyPeer::TABLE_NAME);
			}

		} else { // $values is Oops_Model_Currency object
			$criteria = $values->buildCriteria(); // gets full criteria
			$selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
		}

		// set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		return BasePeer::doUpdate($selectCriteria, $criteria, $con);
	}

	/**
	 * Deletes all rows from the currency table.
	 *
	 * @param      PropelPDO $con the connection to use
	 * @return     int The number of affected rows (if supported by underlying database driver).
	 */
	public static function doDeleteAll(PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(Oops_Model_CurrencyPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}
		$affectedRows = 0; // initialize var to track total num of affected rows
		try {
			// use transaction because $criteria could contain info
			// for more than one table or we could emulating ON DELETE CASCADE, etc.
			$con->beginTransaction();
			$affectedRows += BasePeer::doDeleteAll(Oops_Model_CurrencyPeer::TABLE_NAME, $con, Oops_Model_CurrencyPeer::DATABASE_NAME);
			// Because this db requires some delete cascade/set null emulation, we have to
			// clear the cached instance *after* the emulation has happened (since
			// instances get re-added by the select statement contained therein).
			Oops_Model_CurrencyPeer::clearInstancePool();
			Oops_Model_CurrencyPeer::clearRelatedInstancePool();
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Performs a DELETE on the database, given a Oops_Model_Currency or Criteria object OR a primary key value.
	 *
	 * @param      mixed $values Criteria or Oops_Model_Currency object or primary key or array of primary keys
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
			$con = Propel::getConnection(Oops_Model_CurrencyPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		if ($values instanceof Criteria) {
			// invalidate the cache for all objects of this type, since we have no
			// way of knowing (without running a query) what objects should be invalidated
			// from the cache based on this Criteria.
			Oops_Model_CurrencyPeer::clearInstancePool();
			// rename for clarity
			$criteria = clone $values;
		} elseif ($values instanceof Oops_Model_Currency) { // it's a model object
			// invalidate the cache for this single object
			Oops_Model_CurrencyPeer::removeInstanceFromPool($values);
			// create criteria based on pk values
			$criteria = $values->buildPkeyCriteria();
		} else { // it's a primary key, or an array of pks
			$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(Oops_Model_CurrencyPeer::ID_CURRENCY, (array) $values, Criteria::IN);
			// invalidate the cache for this object(s)
			foreach ((array) $values as $singleval) {
				Oops_Model_CurrencyPeer::removeInstanceFromPool($singleval);
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
			Oops_Model_CurrencyPeer::clearRelatedInstancePool();
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Validates all modified columns of given Oops_Model_Currency object.
	 * If parameter $columns is either a single column name or an array of column names
	 * than only those columns are validated.
	 *
	 * NOTICE: This does not apply to primary or foreign keys for now.
	 *
	 * @param      Oops_Model_Currency $obj The object to validate.
	 * @param      mixed $cols Column name or array of column names.
	 *
	 * @return     mixed TRUE if all columns are valid or the error message of the first invalid column.
	 */
	public static function doValidate($obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(Oops_Model_CurrencyPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(Oops_Model_CurrencyPeer::TABLE_NAME);

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

		return BasePeer::doValidate(Oops_Model_CurrencyPeer::DATABASE_NAME, Oops_Model_CurrencyPeer::TABLE_NAME, $columns);
	}

	/**
	 * Retrieve a single object by pkey.
	 *
	 * @param      int $pk the primary key.
	 * @param      PropelPDO $con the connection to use
	 * @return     Oops_Model_Currency
	 */
	public static function retrieveByPK($pk, PropelPDO $con = null)
	{

		if (null !== ($obj = Oops_Model_CurrencyPeer::getInstanceFromPool((string) $pk))) {
			return $obj;
		}

		if ($con === null) {
			$con = Propel::getConnection(Oops_Model_CurrencyPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria = new Criteria(Oops_Model_CurrencyPeer::DATABASE_NAME);
		$criteria->add(Oops_Model_CurrencyPeer::ID_CURRENCY, $pk);

		$v = Oops_Model_CurrencyPeer::doSelect($criteria, $con);

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
			$con = Propel::getConnection(Oops_Model_CurrencyPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$objs = null;
		if (empty($pks)) {
			$objs = array();
		} else {
			$criteria = new Criteria(Oops_Model_CurrencyPeer::DATABASE_NAME);
			$criteria->add(Oops_Model_CurrencyPeer::ID_CURRENCY, $pks, Criteria::IN);
			$objs = Oops_Model_CurrencyPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} // Oops_Model_Base_CurrencyPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
Oops_Model_Base_CurrencyPeer::buildTableMap();

