<?php


/**
 * Base static class for performing query and update operations on the 'djland_referrer' table.
 *
 * 
 *
 * @package    propel.generator.prestashop.om
 */
abstract class Oops_Model_Base_ReferrerPeer {

	/** the default database name for this class */
	const DATABASE_NAME = 'prestashop';

	/** the table name for this class */
	const TABLE_NAME = _DB_PREFIX_ . 'djland_referrer';

	/** the related Propel class for this table */
	const OM_CLASS = 'Oops_Model_Referrer';

	/** A class that can be returned by this peer. */
	const CLASS_DEFAULT = 'prestashop.Oops_Model_Referrer';

	/** the related TableMap class for this table */
	const TM_CLASS = 'Oops_Model_ReferrerTableMap';

	/** The total number of columns. */
	const NUM_COLUMNS = 23;

	/** The number of lazy-loaded columns. */
	const NUM_LAZY_LOAD_COLUMNS = 0;

	/** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
	const NUM_HYDRATE_COLUMNS = 23;

	/** the column name for the ID_REFERRER field */
	const ID_REFERRER = _DB_PREFIX_ . 'djland_referrer.ID_REFERRER';

	/** the column name for the NAME field */
	const NAME = _DB_PREFIX_ . 'djland_referrer.NAME';

	/** the column name for the PASSWD field */
	const PASSWD = _DB_PREFIX_ . 'djland_referrer.PASSWD';

	/** the column name for the HTTP_REFERER_REGEXP field */
	const HTTP_REFERER_REGEXP = _DB_PREFIX_ . 'djland_referrer.HTTP_REFERER_REGEXP';

	/** the column name for the HTTP_REFERER_LIKE field */
	const HTTP_REFERER_LIKE = _DB_PREFIX_ . 'djland_referrer.HTTP_REFERER_LIKE';

	/** the column name for the REQUEST_URI_REGEXP field */
	const REQUEST_URI_REGEXP = _DB_PREFIX_ . 'djland_referrer.REQUEST_URI_REGEXP';

	/** the column name for the REQUEST_URI_LIKE field */
	const REQUEST_URI_LIKE = _DB_PREFIX_ . 'djland_referrer.REQUEST_URI_LIKE';

	/** the column name for the HTTP_REFERER_REGEXP_NOT field */
	const HTTP_REFERER_REGEXP_NOT = _DB_PREFIX_ . 'djland_referrer.HTTP_REFERER_REGEXP_NOT';

	/** the column name for the HTTP_REFERER_LIKE_NOT field */
	const HTTP_REFERER_LIKE_NOT = _DB_PREFIX_ . 'djland_referrer.HTTP_REFERER_LIKE_NOT';

	/** the column name for the REQUEST_URI_REGEXP_NOT field */
	const REQUEST_URI_REGEXP_NOT = _DB_PREFIX_ . 'djland_referrer.REQUEST_URI_REGEXP_NOT';

	/** the column name for the REQUEST_URI_LIKE_NOT field */
	const REQUEST_URI_LIKE_NOT = _DB_PREFIX_ . 'djland_referrer.REQUEST_URI_LIKE_NOT';

	/** the column name for the BASE_FEE field */
	const BASE_FEE = _DB_PREFIX_ . 'djland_referrer.BASE_FEE';

	/** the column name for the PERCENT_FEE field */
	const PERCENT_FEE = _DB_PREFIX_ . 'djland_referrer.PERCENT_FEE';

	/** the column name for the CLICK_FEE field */
	const CLICK_FEE = _DB_PREFIX_ . 'djland_referrer.CLICK_FEE';

	/** the column name for the CACHE_VISITORS field */
	const CACHE_VISITORS = _DB_PREFIX_ . 'djland_referrer.CACHE_VISITORS';

	/** the column name for the CACHE_VISITS field */
	const CACHE_VISITS = _DB_PREFIX_ . 'djland_referrer.CACHE_VISITS';

	/** the column name for the CACHE_PAGES field */
	const CACHE_PAGES = _DB_PREFIX_ . 'djland_referrer.CACHE_PAGES';

	/** the column name for the CACHE_REGISTRATIONS field */
	const CACHE_REGISTRATIONS = _DB_PREFIX_ . 'djland_referrer.CACHE_REGISTRATIONS';

	/** the column name for the CACHE_ORDERS field */
	const CACHE_ORDERS = _DB_PREFIX_ . 'djland_referrer.CACHE_ORDERS';

	/** the column name for the CACHE_SALES field */
	const CACHE_SALES = _DB_PREFIX_ . 'djland_referrer.CACHE_SALES';

	/** the column name for the CACHE_REG_RATE field */
	const CACHE_REG_RATE = _DB_PREFIX_ . 'djland_referrer.CACHE_REG_RATE';

	/** the column name for the CACHE_ORDER_RATE field */
	const CACHE_ORDER_RATE = _DB_PREFIX_ . 'djland_referrer.CACHE_ORDER_RATE';

	/** the column name for the DATE_ADD field */
	const DATE_ADD = _DB_PREFIX_ . 'djland_referrer.DATE_ADD';

	/** The default string format for model objects of the related table **/
	const DEFAULT_STRING_FORMAT = 'YAML';

	/**
	 * An identiy map to hold any loaded instances of Oops_Model_Referrer objects.
	 * This must be public so that other peer classes can access this when hydrating from JOIN
	 * queries.
	 * @var        array Oops_Model_Referrer[]
	 */
	public static $instances = array();


	/**
	 * holds an array of fieldnames
	 *
	 * first dimension keys are the type constants
	 * e.g. self::$fieldNames[self::TYPE_PHPNAME][0] = 'Id'
	 */
	protected static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('IdReferrer', 'Name', 'Passwd', 'HttpRefererRegexp', 'HttpRefererLike', 'RequestUriRegexp', 'RequestUriLike', 'HttpRefererRegexpNot', 'HttpRefererLikeNot', 'RequestUriRegexpNot', 'RequestUriLikeNot', 'BaseFee', 'PercentFee', 'ClickFee', 'CacheVisitors', 'CacheVisits', 'CachePages', 'CacheRegistrations', 'CacheOrders', 'CacheSales', 'CacheRegRate', 'CacheOrderRate', 'DateAdd', ),
		BasePeer::TYPE_STUDLYPHPNAME => array ('idReferrer', 'name', 'passwd', 'httpRefererRegexp', 'httpRefererLike', 'requestUriRegexp', 'requestUriLike', 'httpRefererRegexpNot', 'httpRefererLikeNot', 'requestUriRegexpNot', 'requestUriLikeNot', 'baseFee', 'percentFee', 'clickFee', 'cacheVisitors', 'cacheVisits', 'cachePages', 'cacheRegistrations', 'cacheOrders', 'cacheSales', 'cacheRegRate', 'cacheOrderRate', 'dateAdd', ),
		BasePeer::TYPE_COLNAME => array (self::ID_REFERRER, self::NAME, self::PASSWD, self::HTTP_REFERER_REGEXP, self::HTTP_REFERER_LIKE, self::REQUEST_URI_REGEXP, self::REQUEST_URI_LIKE, self::HTTP_REFERER_REGEXP_NOT, self::HTTP_REFERER_LIKE_NOT, self::REQUEST_URI_REGEXP_NOT, self::REQUEST_URI_LIKE_NOT, self::BASE_FEE, self::PERCENT_FEE, self::CLICK_FEE, self::CACHE_VISITORS, self::CACHE_VISITS, self::CACHE_PAGES, self::CACHE_REGISTRATIONS, self::CACHE_ORDERS, self::CACHE_SALES, self::CACHE_REG_RATE, self::CACHE_ORDER_RATE, self::DATE_ADD, ),
		BasePeer::TYPE_RAW_COLNAME => array ('ID_REFERRER', 'NAME', 'PASSWD', 'HTTP_REFERER_REGEXP', 'HTTP_REFERER_LIKE', 'REQUEST_URI_REGEXP', 'REQUEST_URI_LIKE', 'HTTP_REFERER_REGEXP_NOT', 'HTTP_REFERER_LIKE_NOT', 'REQUEST_URI_REGEXP_NOT', 'REQUEST_URI_LIKE_NOT', 'BASE_FEE', 'PERCENT_FEE', 'CLICK_FEE', 'CACHE_VISITORS', 'CACHE_VISITS', 'CACHE_PAGES', 'CACHE_REGISTRATIONS', 'CACHE_ORDERS', 'CACHE_SALES', 'CACHE_REG_RATE', 'CACHE_ORDER_RATE', 'DATE_ADD', ),
		BasePeer::TYPE_FIELDNAME => array ('id_referrer', 'name', 'passwd', 'http_referer_regexp', 'http_referer_like', 'request_uri_regexp', 'request_uri_like', 'http_referer_regexp_not', 'http_referer_like_not', 'request_uri_regexp_not', 'request_uri_like_not', 'base_fee', 'percent_fee', 'click_fee', 'cache_visitors', 'cache_visits', 'cache_pages', 'cache_registrations', 'cache_orders', 'cache_sales', 'cache_reg_rate', 'cache_order_rate', 'date_add', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, )
	);

	/**
	 * holds an array of keys for quick access to the fieldnames array
	 *
	 * first dimension keys are the type constants
	 * e.g. self::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
	 */
	protected static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('IdReferrer' => 0, 'Name' => 1, 'Passwd' => 2, 'HttpRefererRegexp' => 3, 'HttpRefererLike' => 4, 'RequestUriRegexp' => 5, 'RequestUriLike' => 6, 'HttpRefererRegexpNot' => 7, 'HttpRefererLikeNot' => 8, 'RequestUriRegexpNot' => 9, 'RequestUriLikeNot' => 10, 'BaseFee' => 11, 'PercentFee' => 12, 'ClickFee' => 13, 'CacheVisitors' => 14, 'CacheVisits' => 15, 'CachePages' => 16, 'CacheRegistrations' => 17, 'CacheOrders' => 18, 'CacheSales' => 19, 'CacheRegRate' => 20, 'CacheOrderRate' => 21, 'DateAdd' => 22, ),
		BasePeer::TYPE_STUDLYPHPNAME => array ('idReferrer' => 0, 'name' => 1, 'passwd' => 2, 'httpRefererRegexp' => 3, 'httpRefererLike' => 4, 'requestUriRegexp' => 5, 'requestUriLike' => 6, 'httpRefererRegexpNot' => 7, 'httpRefererLikeNot' => 8, 'requestUriRegexpNot' => 9, 'requestUriLikeNot' => 10, 'baseFee' => 11, 'percentFee' => 12, 'clickFee' => 13, 'cacheVisitors' => 14, 'cacheVisits' => 15, 'cachePages' => 16, 'cacheRegistrations' => 17, 'cacheOrders' => 18, 'cacheSales' => 19, 'cacheRegRate' => 20, 'cacheOrderRate' => 21, 'dateAdd' => 22, ),
		BasePeer::TYPE_COLNAME => array (self::ID_REFERRER => 0, self::NAME => 1, self::PASSWD => 2, self::HTTP_REFERER_REGEXP => 3, self::HTTP_REFERER_LIKE => 4, self::REQUEST_URI_REGEXP => 5, self::REQUEST_URI_LIKE => 6, self::HTTP_REFERER_REGEXP_NOT => 7, self::HTTP_REFERER_LIKE_NOT => 8, self::REQUEST_URI_REGEXP_NOT => 9, self::REQUEST_URI_LIKE_NOT => 10, self::BASE_FEE => 11, self::PERCENT_FEE => 12, self::CLICK_FEE => 13, self::CACHE_VISITORS => 14, self::CACHE_VISITS => 15, self::CACHE_PAGES => 16, self::CACHE_REGISTRATIONS => 17, self::CACHE_ORDERS => 18, self::CACHE_SALES => 19, self::CACHE_REG_RATE => 20, self::CACHE_ORDER_RATE => 21, self::DATE_ADD => 22, ),
		BasePeer::TYPE_RAW_COLNAME => array ('ID_REFERRER' => 0, 'NAME' => 1, 'PASSWD' => 2, 'HTTP_REFERER_REGEXP' => 3, 'HTTP_REFERER_LIKE' => 4, 'REQUEST_URI_REGEXP' => 5, 'REQUEST_URI_LIKE' => 6, 'HTTP_REFERER_REGEXP_NOT' => 7, 'HTTP_REFERER_LIKE_NOT' => 8, 'REQUEST_URI_REGEXP_NOT' => 9, 'REQUEST_URI_LIKE_NOT' => 10, 'BASE_FEE' => 11, 'PERCENT_FEE' => 12, 'CLICK_FEE' => 13, 'CACHE_VISITORS' => 14, 'CACHE_VISITS' => 15, 'CACHE_PAGES' => 16, 'CACHE_REGISTRATIONS' => 17, 'CACHE_ORDERS' => 18, 'CACHE_SALES' => 19, 'CACHE_REG_RATE' => 20, 'CACHE_ORDER_RATE' => 21, 'DATE_ADD' => 22, ),
		BasePeer::TYPE_FIELDNAME => array ('id_referrer' => 0, 'name' => 1, 'passwd' => 2, 'http_referer_regexp' => 3, 'http_referer_like' => 4, 'request_uri_regexp' => 5, 'request_uri_like' => 6, 'http_referer_regexp_not' => 7, 'http_referer_like_not' => 8, 'request_uri_regexp_not' => 9, 'request_uri_like_not' => 10, 'base_fee' => 11, 'percent_fee' => 12, 'click_fee' => 13, 'cache_visitors' => 14, 'cache_visits' => 15, 'cache_pages' => 16, 'cache_registrations' => 17, 'cache_orders' => 18, 'cache_sales' => 19, 'cache_reg_rate' => 20, 'cache_order_rate' => 21, 'date_add' => 22, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, )
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
	 * @param      string $column The column name for current table. (i.e. Oops_Model_ReferrerPeer::COLUMN_NAME).
	 * @return     string
	 */
	public static function alias($alias, $column)
	{
		return str_replace(Oops_Model_ReferrerPeer::TABLE_NAME.'.', $alias.'.', $column);
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
			$criteria->addSelectColumn(Oops_Model_ReferrerPeer::ID_REFERRER);
			$criteria->addSelectColumn(Oops_Model_ReferrerPeer::NAME);
			$criteria->addSelectColumn(Oops_Model_ReferrerPeer::PASSWD);
			$criteria->addSelectColumn(Oops_Model_ReferrerPeer::HTTP_REFERER_REGEXP);
			$criteria->addSelectColumn(Oops_Model_ReferrerPeer::HTTP_REFERER_LIKE);
			$criteria->addSelectColumn(Oops_Model_ReferrerPeer::REQUEST_URI_REGEXP);
			$criteria->addSelectColumn(Oops_Model_ReferrerPeer::REQUEST_URI_LIKE);
			$criteria->addSelectColumn(Oops_Model_ReferrerPeer::HTTP_REFERER_REGEXP_NOT);
			$criteria->addSelectColumn(Oops_Model_ReferrerPeer::HTTP_REFERER_LIKE_NOT);
			$criteria->addSelectColumn(Oops_Model_ReferrerPeer::REQUEST_URI_REGEXP_NOT);
			$criteria->addSelectColumn(Oops_Model_ReferrerPeer::REQUEST_URI_LIKE_NOT);
			$criteria->addSelectColumn(Oops_Model_ReferrerPeer::BASE_FEE);
			$criteria->addSelectColumn(Oops_Model_ReferrerPeer::PERCENT_FEE);
			$criteria->addSelectColumn(Oops_Model_ReferrerPeer::CLICK_FEE);
			$criteria->addSelectColumn(Oops_Model_ReferrerPeer::CACHE_VISITORS);
			$criteria->addSelectColumn(Oops_Model_ReferrerPeer::CACHE_VISITS);
			$criteria->addSelectColumn(Oops_Model_ReferrerPeer::CACHE_PAGES);
			$criteria->addSelectColumn(Oops_Model_ReferrerPeer::CACHE_REGISTRATIONS);
			$criteria->addSelectColumn(Oops_Model_ReferrerPeer::CACHE_ORDERS);
			$criteria->addSelectColumn(Oops_Model_ReferrerPeer::CACHE_SALES);
			$criteria->addSelectColumn(Oops_Model_ReferrerPeer::CACHE_REG_RATE);
			$criteria->addSelectColumn(Oops_Model_ReferrerPeer::CACHE_ORDER_RATE);
			$criteria->addSelectColumn(Oops_Model_ReferrerPeer::DATE_ADD);
		} else {
			$criteria->addSelectColumn($alias . '.ID_REFERRER');
			$criteria->addSelectColumn($alias . '.NAME');
			$criteria->addSelectColumn($alias . '.PASSWD');
			$criteria->addSelectColumn($alias . '.HTTP_REFERER_REGEXP');
			$criteria->addSelectColumn($alias . '.HTTP_REFERER_LIKE');
			$criteria->addSelectColumn($alias . '.REQUEST_URI_REGEXP');
			$criteria->addSelectColumn($alias . '.REQUEST_URI_LIKE');
			$criteria->addSelectColumn($alias . '.HTTP_REFERER_REGEXP_NOT');
			$criteria->addSelectColumn($alias . '.HTTP_REFERER_LIKE_NOT');
			$criteria->addSelectColumn($alias . '.REQUEST_URI_REGEXP_NOT');
			$criteria->addSelectColumn($alias . '.REQUEST_URI_LIKE_NOT');
			$criteria->addSelectColumn($alias . '.BASE_FEE');
			$criteria->addSelectColumn($alias . '.PERCENT_FEE');
			$criteria->addSelectColumn($alias . '.CLICK_FEE');
			$criteria->addSelectColumn($alias . '.CACHE_VISITORS');
			$criteria->addSelectColumn($alias . '.CACHE_VISITS');
			$criteria->addSelectColumn($alias . '.CACHE_PAGES');
			$criteria->addSelectColumn($alias . '.CACHE_REGISTRATIONS');
			$criteria->addSelectColumn($alias . '.CACHE_ORDERS');
			$criteria->addSelectColumn($alias . '.CACHE_SALES');
			$criteria->addSelectColumn($alias . '.CACHE_REG_RATE');
			$criteria->addSelectColumn($alias . '.CACHE_ORDER_RATE');
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
		$criteria->setPrimaryTableName(Oops_Model_ReferrerPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			Oops_Model_ReferrerPeer::addSelectColumns($criteria);
		}

		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
		$criteria->setDbName(self::DATABASE_NAME); // Set the correct dbName

		if ($con === null) {
			$con = Propel::getConnection(Oops_Model_ReferrerPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
	 * @return     Oops_Model_Referrer
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
	{
		$critcopy = clone $criteria;
		$critcopy->setLimit(1);
		$objects = Oops_Model_ReferrerPeer::doSelect($critcopy, $con);
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
		return Oops_Model_ReferrerPeer::populateObjects(Oops_Model_ReferrerPeer::doSelectStmt($criteria, $con));
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
			$con = Propel::getConnection(Oops_Model_ReferrerPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		if (!$criteria->hasSelectClause()) {
			$criteria = clone $criteria;
			Oops_Model_ReferrerPeer::addSelectColumns($criteria);
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
	 * @param      Oops_Model_Referrer $value A Oops_Model_Referrer object.
	 * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
	 */
	public static function addInstanceToPool($obj, $key = null)
	{
		if (Propel::isInstancePoolingEnabled()) {
			if ($key === null) {
				$key = (string) $obj->getIdReferrer();
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
	 * @param      mixed $value A Oops_Model_Referrer object or a primary key value.
	 */
	public static function removeInstanceFromPool($value)
	{
		if (Propel::isInstancePoolingEnabled() && $value !== null) {
			if (is_object($value) && $value instanceof Oops_Model_Referrer) {
				$key = (string) $value->getIdReferrer();
			} elseif (is_scalar($value)) {
				// assume we've been passed a primary key
				$key = (string) $value;
			} else {
				$e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Oops_Model_Referrer object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
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
	 * @return     Oops_Model_Referrer Found object or NULL if 1) no instance exists for specified key or 2) instance pooling has been disabled.
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
	 * Method to invalidate the instance pool of all tables related to djland_referrer
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
		$cls = Oops_Model_ReferrerPeer::getOMClass(false);
		// populate the object(s)
		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key = Oops_Model_ReferrerPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj = Oops_Model_ReferrerPeer::getInstanceFromPool($key))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj->hydrate($row, 0, true); // rehydrate
				$results[] = $obj;
			} else {
				$obj = new $cls();
				$obj->hydrate($row);
				$results[] = $obj;
				Oops_Model_ReferrerPeer::addInstanceToPool($obj, $key);
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
	 * @return     array (Oops_Model_Referrer object, last column rank)
	 */
	public static function populateObject($row, $startcol = 0)
	{
		$key = Oops_Model_ReferrerPeer::getPrimaryKeyHashFromRow($row, $startcol);
		if (null !== ($obj = Oops_Model_ReferrerPeer::getInstanceFromPool($key))) {
			// We no longer rehydrate the object, since this can cause data loss.
			// See http://www.propelorm.org/ticket/509
			// $obj->hydrate($row, $startcol, true); // rehydrate
			$col = $startcol + Oops_Model_ReferrerPeer::NUM_HYDRATE_COLUMNS;
		} else {
			$cls = Oops_Model_ReferrerPeer::OM_CLASS;
			$obj = new $cls();
			$col = $obj->hydrate($row, $startcol);
			Oops_Model_ReferrerPeer::addInstanceToPool($obj, $key);
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
	  $dbMap = Propel::getDatabaseMap(Oops_Model_Base_ReferrerPeer::DATABASE_NAME);
	  if (!$dbMap->hasTable(Oops_Model_Base_ReferrerPeer::TABLE_NAME))
	  {
	    $dbMap->addTableObject(new Oops_Model_ReferrerTableMap());
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
		return $withPrefix ? Oops_Model_ReferrerPeer::CLASS_DEFAULT : Oops_Model_ReferrerPeer::OM_CLASS;
	}

	/**
	 * Performs an INSERT on the database, given a Oops_Model_Referrer or Criteria object.
	 *
	 * @param      mixed $values Criteria or Oops_Model_Referrer object containing data that is used to create the INSERT statement.
	 * @param      PropelPDO $con the PropelPDO connection to use
	 * @return     mixed The new primary key.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doInsert($values, PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(Oops_Model_ReferrerPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; // rename for clarity
		} else {
			$criteria = $values->buildCriteria(); // build Criteria from Oops_Model_Referrer object
		}

		if ($criteria->containsKey(Oops_Model_ReferrerPeer::ID_REFERRER) && $criteria->keyContainsValue(Oops_Model_ReferrerPeer::ID_REFERRER) ) {
			throw new PropelException('Cannot insert a value for auto-increment primary key ('.Oops_Model_ReferrerPeer::ID_REFERRER.')');
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
	 * Performs an UPDATE on the database, given a Oops_Model_Referrer or Criteria object.
	 *
	 * @param      mixed $values Criteria or Oops_Model_Referrer object containing data that is used to create the UPDATE statement.
	 * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
	 * @return     int The number of affected rows (if supported by underlying database driver).
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doUpdate($values, PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(Oops_Model_ReferrerPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$selectCriteria = new Criteria(self::DATABASE_NAME);

		if ($values instanceof Criteria) {
			$criteria = clone $values; // rename for clarity

			$comparison = $criteria->getComparison(Oops_Model_ReferrerPeer::ID_REFERRER);
			$value = $criteria->remove(Oops_Model_ReferrerPeer::ID_REFERRER);
			if ($value) {
				$selectCriteria->add(Oops_Model_ReferrerPeer::ID_REFERRER, $value, $comparison);
			} else {
				$selectCriteria->setPrimaryTableName(Oops_Model_ReferrerPeer::TABLE_NAME);
			}

		} else { // $values is Oops_Model_Referrer object
			$criteria = $values->buildCriteria(); // gets full criteria
			$selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
		}

		// set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		return BasePeer::doUpdate($selectCriteria, $criteria, $con);
	}

	/**
	 * Deletes all rows from the djland_referrer table.
	 *
	 * @param      PropelPDO $con the connection to use
	 * @return     int The number of affected rows (if supported by underlying database driver).
	 */
	public static function doDeleteAll(PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(Oops_Model_ReferrerPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}
		$affectedRows = 0; // initialize var to track total num of affected rows
		try {
			// use transaction because $criteria could contain info
			// for more than one table or we could emulating ON DELETE CASCADE, etc.
			$con->beginTransaction();
			$affectedRows += BasePeer::doDeleteAll(Oops_Model_ReferrerPeer::TABLE_NAME, $con, Oops_Model_ReferrerPeer::DATABASE_NAME);
			// Because this db requires some delete cascade/set null emulation, we have to
			// clear the cached instance *after* the emulation has happened (since
			// instances get re-added by the select statement contained therein).
			Oops_Model_ReferrerPeer::clearInstancePool();
			Oops_Model_ReferrerPeer::clearRelatedInstancePool();
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Performs a DELETE on the database, given a Oops_Model_Referrer or Criteria object OR a primary key value.
	 *
	 * @param      mixed $values Criteria or Oops_Model_Referrer object or primary key or array of primary keys
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
			$con = Propel::getConnection(Oops_Model_ReferrerPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		if ($values instanceof Criteria) {
			// invalidate the cache for all objects of this type, since we have no
			// way of knowing (without running a query) what objects should be invalidated
			// from the cache based on this Criteria.
			Oops_Model_ReferrerPeer::clearInstancePool();
			// rename for clarity
			$criteria = clone $values;
		} elseif ($values instanceof Oops_Model_Referrer) { // it's a model object
			// invalidate the cache for this single object
			Oops_Model_ReferrerPeer::removeInstanceFromPool($values);
			// create criteria based on pk values
			$criteria = $values->buildPkeyCriteria();
		} else { // it's a primary key, or an array of pks
			$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(Oops_Model_ReferrerPeer::ID_REFERRER, (array) $values, Criteria::IN);
			// invalidate the cache for this object(s)
			foreach ((array) $values as $singleval) {
				Oops_Model_ReferrerPeer::removeInstanceFromPool($singleval);
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
			Oops_Model_ReferrerPeer::clearRelatedInstancePool();
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Validates all modified columns of given Oops_Model_Referrer object.
	 * If parameter $columns is either a single column name or an array of column names
	 * than only those columns are validated.
	 *
	 * NOTICE: This does not apply to primary or foreign keys for now.
	 *
	 * @param      Oops_Model_Referrer $obj The object to validate.
	 * @param      mixed $cols Column name or array of column names.
	 *
	 * @return     mixed TRUE if all columns are valid or the error message of the first invalid column.
	 */
	public static function doValidate($obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(Oops_Model_ReferrerPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(Oops_Model_ReferrerPeer::TABLE_NAME);

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

		return BasePeer::doValidate(Oops_Model_ReferrerPeer::DATABASE_NAME, Oops_Model_ReferrerPeer::TABLE_NAME, $columns);
	}

	/**
	 * Retrieve a single object by pkey.
	 *
	 * @param      int $pk the primary key.
	 * @param      PropelPDO $con the connection to use
	 * @return     Oops_Model_Referrer
	 */
	public static function retrieveByPK($pk, PropelPDO $con = null)
	{

		if (null !== ($obj = Oops_Model_ReferrerPeer::getInstanceFromPool((string) $pk))) {
			return $obj;
		}

		if ($con === null) {
			$con = Propel::getConnection(Oops_Model_ReferrerPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria = new Criteria(Oops_Model_ReferrerPeer::DATABASE_NAME);
		$criteria->add(Oops_Model_ReferrerPeer::ID_REFERRER, $pk);

		$v = Oops_Model_ReferrerPeer::doSelect($criteria, $con);

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
			$con = Propel::getConnection(Oops_Model_ReferrerPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$objs = null;
		if (empty($pks)) {
			$objs = array();
		} else {
			$criteria = new Criteria(Oops_Model_ReferrerPeer::DATABASE_NAME);
			$criteria->add(Oops_Model_ReferrerPeer::ID_REFERRER, $pks, Criteria::IN);
			$objs = Oops_Model_ReferrerPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} // Oops_Model_Base_ReferrerPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
Oops_Model_Base_ReferrerPeer::buildTableMap();

