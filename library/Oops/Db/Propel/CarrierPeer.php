<?php


define('OOPS_DB_CARRIER_ID_CARRIER', _DB_PREFIX_ . 'carrier.ID_CARRIER');
define('OOPS_DB_CARRIER_ID_TAX_RULES_GROUP', _DB_PREFIX_ . 'carrier.ID_TAX_RULES_GROUP');
define('OOPS_DB_CARRIER_NAME', _DB_PREFIX_ . 'carrier.NAME');
define('OOPS_DB_CARRIER_URL', _DB_PREFIX_ . 'carrier.URL');
define('OOPS_DB_CARRIER_ACTIVE', _DB_PREFIX_ . 'carrier.ACTIVE');
define('OOPS_DB_CARRIER_DELETED', _DB_PREFIX_ . 'carrier.DELETED');
define('OOPS_DB_CARRIER_SHIPPING_HANDLING', _DB_PREFIX_ . 'carrier.SHIPPING_HANDLING');
define('OOPS_DB_CARRIER_RANGE_BEHAVIOR', _DB_PREFIX_ . 'carrier.RANGE_BEHAVIOR');
define('OOPS_DB_CARRIER_IS_MODULE', _DB_PREFIX_ . 'carrier.IS_MODULE');
define('OOPS_DB_CARRIER_IS_FREE', _DB_PREFIX_ . 'carrier.IS_FREE');
define('OOPS_DB_CARRIER_SHIPPING_EXTERNAL', _DB_PREFIX_ . 'carrier.SHIPPING_EXTERNAL');
define('OOPS_DB_CARRIER_NEED_RANGE', _DB_PREFIX_ . 'carrier.NEED_RANGE');
define('OOPS_DB_CARRIER_EXTERNAL_MODULE_NAME', _DB_PREFIX_ . 'carrier.EXTERNAL_MODULE_NAME');
define('OOPS_DB_CARRIER_SHIPPING_METHOD', _DB_PREFIX_ . 'carrier.SHIPPING_METHOD');
define('OOPS_DB_CARRIER_TABLE_NAME', _DB_PREFIX_ . 'carrier');

/**
 * Base static class for performing query and update operations on the 'carrier' table.
 *
 * 
 *
 * @package    propel.generator.prestashop.om
 */
abstract class Oops_Db_Propel_CarrierPeer {

	/** the default database name for this class */
	const DATABASE_NAME = 'prestashop';

	/** the table name for this class */
	const TABLE_NAME = OOPS_DB_CARRIER_TABLE_NAME;

	/** the related Propel class for this table */
	const OM_CLASS = 'Oops_Db_Carrier';

	/** A class that can be returned by this peer. */
	const CLASS_DEFAULT = 'prestashop.Oops_Db_Carrier';

	/** the related TableMap class for this table */
	const TM_CLASS = 'Oops_Db_CarrierTableMap';

	/** The total number of columns. */
	const NUM_COLUMNS = 14;

	/** The number of lazy-loaded columns. */
	const NUM_LAZY_LOAD_COLUMNS = 0;

	/** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
	const NUM_HYDRATE_COLUMNS = 14;

	/** the column name for the ID_CARRIER field */
	const ID_CARRIER = OOPS_DB_CARRIER_ID_CARRIER;

	/** the column name for the ID_TAX_RULES_GROUP field */
	const ID_TAX_RULES_GROUP = OOPS_DB_CARRIER_ID_TAX_RULES_GROUP;

	/** the column name for the NAME field */
	const NAME = OOPS_DB_CARRIER_NAME;

	/** the column name for the URL field */
	const URL = OOPS_DB_CARRIER_URL;

	/** the column name for the ACTIVE field */
	const ACTIVE = OOPS_DB_CARRIER_ACTIVE;

	/** the column name for the DELETED field */
	const DELETED = OOPS_DB_CARRIER_DELETED;

	/** the column name for the SHIPPING_HANDLING field */
	const SHIPPING_HANDLING = OOPS_DB_CARRIER_SHIPPING_HANDLING;

	/** the column name for the RANGE_BEHAVIOR field */
	const RANGE_BEHAVIOR = OOPS_DB_CARRIER_RANGE_BEHAVIOR;

	/** the column name for the IS_MODULE field */
	const IS_MODULE = OOPS_DB_CARRIER_IS_MODULE;

	/** the column name for the IS_FREE field */
	const IS_FREE = OOPS_DB_CARRIER_IS_FREE;

	/** the column name for the SHIPPING_EXTERNAL field */
	const SHIPPING_EXTERNAL = OOPS_DB_CARRIER_SHIPPING_EXTERNAL;

	/** the column name for the NEED_RANGE field */
	const NEED_RANGE = OOPS_DB_CARRIER_NEED_RANGE;

	/** the column name for the EXTERNAL_MODULE_NAME field */
	const EXTERNAL_MODULE_NAME = OOPS_DB_CARRIER_EXTERNAL_MODULE_NAME;

	/** the column name for the SHIPPING_METHOD field */
	const SHIPPING_METHOD = OOPS_DB_CARRIER_SHIPPING_METHOD;

	/** The default string format for model objects of the related table **/
	const DEFAULT_STRING_FORMAT = 'YAML';

	/**
	 * An identiy map to hold any loaded instances of Oops_Db_Carrier objects.
	 * This must be public so that other peer classes can access this when hydrating from JOIN
	 * queries.
	 * @var        array Oops_Db_Carrier[]
	 */
	public static $instances = array();


	/**
	 * holds an array of fieldnames
	 *
	 * first dimension keys are the type constants
	 * e.g. self::$fieldNames[self::TYPE_PHPNAME][0] = 'Id'
	 */
	protected static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('IdCarrier', 'IdTaxRulesGroup', 'Name', 'Url', 'Active', 'Deleted', 'ShippingHandling', 'RangeBehavior', 'IsModule', 'IsFree', 'ShippingExternal', 'NeedRange', 'ExternalModuleName', 'ShippingMethod', ),
		BasePeer::TYPE_STUDLYPHPNAME => array ('idCarrier', 'idTaxRulesGroup', 'name', 'url', 'active', 'deleted', 'shippingHandling', 'rangeBehavior', 'isModule', 'isFree', 'shippingExternal', 'needRange', 'externalModuleName', 'shippingMethod', ),
		BasePeer::TYPE_COLNAME => array (self::ID_CARRIER, self::ID_TAX_RULES_GROUP, self::NAME, self::URL, self::ACTIVE, self::DELETED, self::SHIPPING_HANDLING, self::RANGE_BEHAVIOR, self::IS_MODULE, self::IS_FREE, self::SHIPPING_EXTERNAL, self::NEED_RANGE, self::EXTERNAL_MODULE_NAME, self::SHIPPING_METHOD, ),
		BasePeer::TYPE_RAW_COLNAME => array ('ID_CARRIER', 'ID_TAX_RULES_GROUP', 'NAME', 'URL', 'ACTIVE', 'DELETED', 'SHIPPING_HANDLING', 'RANGE_BEHAVIOR', 'IS_MODULE', 'IS_FREE', 'SHIPPING_EXTERNAL', 'NEED_RANGE', 'EXTERNAL_MODULE_NAME', 'SHIPPING_METHOD', ),
		BasePeer::TYPE_FIELDNAME => array ('id_carrier', 'id_tax_rules_group', 'name', 'url', 'active', 'deleted', 'shipping_handling', 'range_behavior', 'is_module', 'is_free', 'shipping_external', 'need_range', 'external_module_name', 'shipping_method', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, )
	);

	/**
	 * holds an array of keys for quick access to the fieldnames array
	 *
	 * first dimension keys are the type constants
	 * e.g. self::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
	 */
	protected static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('IdCarrier' => 0, 'IdTaxRulesGroup' => 1, 'Name' => 2, 'Url' => 3, 'Active' => 4, 'Deleted' => 5, 'ShippingHandling' => 6, 'RangeBehavior' => 7, 'IsModule' => 8, 'IsFree' => 9, 'ShippingExternal' => 10, 'NeedRange' => 11, 'ExternalModuleName' => 12, 'ShippingMethod' => 13, ),
		BasePeer::TYPE_STUDLYPHPNAME => array ('idCarrier' => 0, 'idTaxRulesGroup' => 1, 'name' => 2, 'url' => 3, 'active' => 4, 'deleted' => 5, 'shippingHandling' => 6, 'rangeBehavior' => 7, 'isModule' => 8, 'isFree' => 9, 'shippingExternal' => 10, 'needRange' => 11, 'externalModuleName' => 12, 'shippingMethod' => 13, ),
		BasePeer::TYPE_COLNAME => array (self::ID_CARRIER => 0, self::ID_TAX_RULES_GROUP => 1, self::NAME => 2, self::URL => 3, self::ACTIVE => 4, self::DELETED => 5, self::SHIPPING_HANDLING => 6, self::RANGE_BEHAVIOR => 7, self::IS_MODULE => 8, self::IS_FREE => 9, self::SHIPPING_EXTERNAL => 10, self::NEED_RANGE => 11, self::EXTERNAL_MODULE_NAME => 12, self::SHIPPING_METHOD => 13, ),
		BasePeer::TYPE_RAW_COLNAME => array ('ID_CARRIER' => 0, 'ID_TAX_RULES_GROUP' => 1, 'NAME' => 2, 'URL' => 3, 'ACTIVE' => 4, 'DELETED' => 5, 'SHIPPING_HANDLING' => 6, 'RANGE_BEHAVIOR' => 7, 'IS_MODULE' => 8, 'IS_FREE' => 9, 'SHIPPING_EXTERNAL' => 10, 'NEED_RANGE' => 11, 'EXTERNAL_MODULE_NAME' => 12, 'SHIPPING_METHOD' => 13, ),
		BasePeer::TYPE_FIELDNAME => array ('id_carrier' => 0, 'id_tax_rules_group' => 1, 'name' => 2, 'url' => 3, 'active' => 4, 'deleted' => 5, 'shipping_handling' => 6, 'range_behavior' => 7, 'is_module' => 8, 'is_free' => 9, 'shipping_external' => 10, 'need_range' => 11, 'external_module_name' => 12, 'shipping_method' => 13, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, )
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
	 * @param      string $column The column name for current table. (i.e. Oops_Db_CarrierPeer::COLUMN_NAME).
	 * @return     string
	 */
	public static function alias($alias, $column)
	{
		return str_replace(Oops_Db_CarrierPeer::TABLE_NAME.'.', $alias.'.', $column);
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
			$criteria->addSelectColumn(Oops_Db_CarrierPeer::ID_CARRIER);
			$criteria->addSelectColumn(Oops_Db_CarrierPeer::ID_TAX_RULES_GROUP);
			$criteria->addSelectColumn(Oops_Db_CarrierPeer::NAME);
			$criteria->addSelectColumn(Oops_Db_CarrierPeer::URL);
			$criteria->addSelectColumn(Oops_Db_CarrierPeer::ACTIVE);
			$criteria->addSelectColumn(Oops_Db_CarrierPeer::DELETED);
			$criteria->addSelectColumn(Oops_Db_CarrierPeer::SHIPPING_HANDLING);
			$criteria->addSelectColumn(Oops_Db_CarrierPeer::RANGE_BEHAVIOR);
			$criteria->addSelectColumn(Oops_Db_CarrierPeer::IS_MODULE);
			$criteria->addSelectColumn(Oops_Db_CarrierPeer::IS_FREE);
			$criteria->addSelectColumn(Oops_Db_CarrierPeer::SHIPPING_EXTERNAL);
			$criteria->addSelectColumn(Oops_Db_CarrierPeer::NEED_RANGE);
			$criteria->addSelectColumn(Oops_Db_CarrierPeer::EXTERNAL_MODULE_NAME);
			$criteria->addSelectColumn(Oops_Db_CarrierPeer::SHIPPING_METHOD);
		} else {
			$criteria->addSelectColumn($alias . '.ID_CARRIER');
			$criteria->addSelectColumn($alias . '.ID_TAX_RULES_GROUP');
			$criteria->addSelectColumn($alias . '.NAME');
			$criteria->addSelectColumn($alias . '.URL');
			$criteria->addSelectColumn($alias . '.ACTIVE');
			$criteria->addSelectColumn($alias . '.DELETED');
			$criteria->addSelectColumn($alias . '.SHIPPING_HANDLING');
			$criteria->addSelectColumn($alias . '.RANGE_BEHAVIOR');
			$criteria->addSelectColumn($alias . '.IS_MODULE');
			$criteria->addSelectColumn($alias . '.IS_FREE');
			$criteria->addSelectColumn($alias . '.SHIPPING_EXTERNAL');
			$criteria->addSelectColumn($alias . '.NEED_RANGE');
			$criteria->addSelectColumn($alias . '.EXTERNAL_MODULE_NAME');
			$criteria->addSelectColumn($alias . '.SHIPPING_METHOD');
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
		$criteria->setPrimaryTableName(Oops_Db_CarrierPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			Oops_Db_CarrierPeer::addSelectColumns($criteria);
		}

		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
		$criteria->setDbName(self::DATABASE_NAME); // Set the correct dbName

		if ($con === null) {
			$con = Propel::getConnection(Oops_Db_CarrierPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
	 * @return     Oops_Db_Carrier
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
	{
		$critcopy = clone $criteria;
		$critcopy->setLimit(1);
		$objects = Oops_Db_CarrierPeer::doSelect($critcopy, $con);
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
		return Oops_Db_CarrierPeer::populateObjects(Oops_Db_CarrierPeer::doSelectStmt($criteria, $con));
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
			$con = Propel::getConnection(Oops_Db_CarrierPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		if (!$criteria->hasSelectClause()) {
			$criteria = clone $criteria;
			Oops_Db_CarrierPeer::addSelectColumns($criteria);
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
	 * @param      Oops_Db_Carrier $value A Oops_Db_Carrier object.
	 * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
	 */
	public static function addInstanceToPool($obj, $key = null)
	{
		if (Propel::isInstancePoolingEnabled()) {
			if ($key === null) {
				$key = (string) $obj->getIdCarrier();
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
	 * @param      mixed $value A Oops_Db_Carrier object or a primary key value.
	 */
	public static function removeInstanceFromPool($value)
	{
		if (Propel::isInstancePoolingEnabled() && $value !== null) {
			if (is_object($value) && $value instanceof Oops_Db_Carrier) {
				$key = (string) $value->getIdCarrier();
			} elseif (is_scalar($value)) {
				// assume we've been passed a primary key
				$key = (string) $value;
			} else {
				$e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Oops_Db_Carrier object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
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
	 * @return     Oops_Db_Carrier Found object or NULL if 1) no instance exists for specified key or 2) instance pooling has been disabled.
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
	 * Method to invalidate the instance pool of all tables related to carrier
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
		$cls = Oops_Db_CarrierPeer::getOMClass(false);
		// populate the object(s)
		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key = Oops_Db_CarrierPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj = Oops_Db_CarrierPeer::getInstanceFromPool($key))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj->hydrate($row, 0, true); // rehydrate
				$results[] = $obj;
			} else {
				$obj = new $cls();
				$obj->hydrate($row);
				$results[] = $obj;
				Oops_Db_CarrierPeer::addInstanceToPool($obj, $key);
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
	 * @return     array (Oops_Db_Carrier object, last column rank)
	 */
	public static function populateObject($row, $startcol = 0)
	{
		$key = Oops_Db_CarrierPeer::getPrimaryKeyHashFromRow($row, $startcol);
		if (null !== ($obj = Oops_Db_CarrierPeer::getInstanceFromPool($key))) {
			// We no longer rehydrate the object, since this can cause data loss.
			// See http://www.propelorm.org/ticket/509
			// $obj->hydrate($row, $startcol, true); // rehydrate
			$col = $startcol + Oops_Db_CarrierPeer::NUM_HYDRATE_COLUMNS;
		} else {
			$cls = Oops_Db_CarrierPeer::OM_CLASS;
			$obj = new $cls();
			$col = $obj->hydrate($row, $startcol);
			Oops_Db_CarrierPeer::addInstanceToPool($obj, $key);
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
	  $dbMap = Propel::getDatabaseMap(Oops_Db_Propel_CarrierPeer::DATABASE_NAME);
	  if (!$dbMap->hasTable(Oops_Db_Propel_CarrierPeer::TABLE_NAME))
	  {
	    $dbMap->addTableObject(new Oops_Db_CarrierTableMap());
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
		return $withPrefix ? Oops_Db_CarrierPeer::CLASS_DEFAULT : Oops_Db_CarrierPeer::OM_CLASS;
	}

	/**
	 * Performs an INSERT on the database, given a Oops_Db_Carrier or Criteria object.
	 *
	 * @param      mixed $values Criteria or Oops_Db_Carrier object containing data that is used to create the INSERT statement.
	 * @param      PropelPDO $con the PropelPDO connection to use
	 * @return     mixed The new primary key.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doInsert($values, PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(Oops_Db_CarrierPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; // rename for clarity
		} else {
			$criteria = $values->buildCriteria(); // build Criteria from Oops_Db_Carrier object
		}

		if ($criteria->containsKey(Oops_Db_CarrierPeer::ID_CARRIER) && $criteria->keyContainsValue(Oops_Db_CarrierPeer::ID_CARRIER) ) {
			throw new PropelException('Cannot insert a value for auto-increment primary key ('.Oops_Db_CarrierPeer::ID_CARRIER.')');
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
	 * Performs an UPDATE on the database, given a Oops_Db_Carrier or Criteria object.
	 *
	 * @param      mixed $values Criteria or Oops_Db_Carrier object containing data that is used to create the UPDATE statement.
	 * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
	 * @return     int The number of affected rows (if supported by underlying database driver).
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doUpdate($values, PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(Oops_Db_CarrierPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$selectCriteria = new Criteria(self::DATABASE_NAME);

		if ($values instanceof Criteria) {
			$criteria = clone $values; // rename for clarity

			$comparison = $criteria->getComparison(Oops_Db_CarrierPeer::ID_CARRIER);
			$value = $criteria->remove(Oops_Db_CarrierPeer::ID_CARRIER);
			if ($value) {
				$selectCriteria->add(Oops_Db_CarrierPeer::ID_CARRIER, $value, $comparison);
			} else {
				$selectCriteria->setPrimaryTableName(Oops_Db_CarrierPeer::TABLE_NAME);
			}

		} else { // $values is Oops_Db_Carrier object
			$criteria = $values->buildCriteria(); // gets full criteria
			$selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
		}

		// set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		return BasePeer::doUpdate($selectCriteria, $criteria, $con);
	}

	/**
	 * Deletes all rows from the carrier table.
	 *
	 * @param      PropelPDO $con the connection to use
	 * @return     int The number of affected rows (if supported by underlying database driver).
	 */
	public static function doDeleteAll(PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(Oops_Db_CarrierPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}
		$affectedRows = 0; // initialize var to track total num of affected rows
		try {
			// use transaction because $criteria could contain info
			// for more than one table or we could emulating ON DELETE CASCADE, etc.
			$con->beginTransaction();
			$affectedRows += BasePeer::doDeleteAll(Oops_Db_CarrierPeer::TABLE_NAME, $con, Oops_Db_CarrierPeer::DATABASE_NAME);
			// Because this db requires some delete cascade/set null emulation, we have to
			// clear the cached instance *after* the emulation has happened (since
			// instances get re-added by the select statement contained therein).
			Oops_Db_CarrierPeer::clearInstancePool();
			Oops_Db_CarrierPeer::clearRelatedInstancePool();
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Performs a DELETE on the database, given a Oops_Db_Carrier or Criteria object OR a primary key value.
	 *
	 * @param      mixed $values Criteria or Oops_Db_Carrier object or primary key or array of primary keys
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
			$con = Propel::getConnection(Oops_Db_CarrierPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		if ($values instanceof Criteria) {
			// invalidate the cache for all objects of this type, since we have no
			// way of knowing (without running a query) what objects should be invalidated
			// from the cache based on this Criteria.
			Oops_Db_CarrierPeer::clearInstancePool();
			// rename for clarity
			$criteria = clone $values;
		} elseif ($values instanceof Oops_Db_Carrier) { // it's a model object
			// invalidate the cache for this single object
			Oops_Db_CarrierPeer::removeInstanceFromPool($values);
			// create criteria based on pk values
			$criteria = $values->buildPkeyCriteria();
		} else { // it's a primary key, or an array of pks
			$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(Oops_Db_CarrierPeer::ID_CARRIER, (array) $values, Criteria::IN);
			// invalidate the cache for this object(s)
			foreach ((array) $values as $singleval) {
				Oops_Db_CarrierPeer::removeInstanceFromPool($singleval);
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
			Oops_Db_CarrierPeer::clearRelatedInstancePool();
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Validates all modified columns of given Oops_Db_Carrier object.
	 * If parameter $columns is either a single column name or an array of column names
	 * than only those columns are validated.
	 *
	 * NOTICE: This does not apply to primary or foreign keys for now.
	 *
	 * @param      Oops_Db_Carrier $obj The object to validate.
	 * @param      mixed $cols Column name or array of column names.
	 *
	 * @return     mixed TRUE if all columns are valid or the error message of the first invalid column.
	 */
	public static function doValidate($obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(Oops_Db_CarrierPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(Oops_Db_CarrierPeer::TABLE_NAME);

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

		return BasePeer::doValidate(Oops_Db_CarrierPeer::DATABASE_NAME, Oops_Db_CarrierPeer::TABLE_NAME, $columns);
	}

	/**
	 * Retrieve a single object by pkey.
	 *
	 * @param      int $pk the primary key.
	 * @param      PropelPDO $con the connection to use
	 * @return     Oops_Db_Carrier
	 */
	public static function retrieveByPK($pk, PropelPDO $con = null)
	{

		if (null !== ($obj = Oops_Db_CarrierPeer::getInstanceFromPool((string) $pk))) {
			return $obj;
		}

		if ($con === null) {
			$con = Propel::getConnection(Oops_Db_CarrierPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria = new Criteria(Oops_Db_CarrierPeer::DATABASE_NAME);
		$criteria->add(Oops_Db_CarrierPeer::ID_CARRIER, $pk);

		$v = Oops_Db_CarrierPeer::doSelect($criteria, $con);

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
			$con = Propel::getConnection(Oops_Db_CarrierPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$objs = null;
		if (empty($pks)) {
			$objs = array();
		} else {
			$criteria = new Criteria(Oops_Db_CarrierPeer::DATABASE_NAME);
			$criteria->add(Oops_Db_CarrierPeer::ID_CARRIER, $pks, Criteria::IN);
			$objs = Oops_Db_CarrierPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} // Oops_Db_Propel_CarrierPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
Oops_Db_Propel_CarrierPeer::buildTableMap();

