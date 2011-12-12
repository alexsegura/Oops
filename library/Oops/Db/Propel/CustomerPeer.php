<?php


define('OOPS_DB_CUSTOMER_ID_CUSTOMER', _DB_PREFIX_ . 'customer.ID_CUSTOMER');
define('OOPS_DB_CUSTOMER_ID_GENDER', _DB_PREFIX_ . 'customer.ID_GENDER');
define('OOPS_DB_CUSTOMER_ID_DEFAULT_GROUP', _DB_PREFIX_ . 'customer.ID_DEFAULT_GROUP');
define('OOPS_DB_CUSTOMER_FIRSTNAME', _DB_PREFIX_ . 'customer.FIRSTNAME');
define('OOPS_DB_CUSTOMER_LASTNAME', _DB_PREFIX_ . 'customer.LASTNAME');
define('OOPS_DB_CUSTOMER_EMAIL', _DB_PREFIX_ . 'customer.EMAIL');
define('OOPS_DB_CUSTOMER_PASSWD', _DB_PREFIX_ . 'customer.PASSWD');
define('OOPS_DB_CUSTOMER_LAST_PASSWD_GEN', _DB_PREFIX_ . 'customer.LAST_PASSWD_GEN');
define('OOPS_DB_CUSTOMER_BIRTHDAY', _DB_PREFIX_ . 'customer.BIRTHDAY');
define('OOPS_DB_CUSTOMER_NEWSLETTER', _DB_PREFIX_ . 'customer.NEWSLETTER');
define('OOPS_DB_CUSTOMER_IP_REGISTRATION_NEWSLETTER', _DB_PREFIX_ . 'customer.IP_REGISTRATION_NEWSLETTER');
define('OOPS_DB_CUSTOMER_NEWSLETTER_DATE_ADD', _DB_PREFIX_ . 'customer.NEWSLETTER_DATE_ADD');
define('OOPS_DB_CUSTOMER_OPTIN', _DB_PREFIX_ . 'customer.OPTIN');
define('OOPS_DB_CUSTOMER_SECURE_KEY', _DB_PREFIX_ . 'customer.SECURE_KEY');
define('OOPS_DB_CUSTOMER_NOTE', _DB_PREFIX_ . 'customer.NOTE');
define('OOPS_DB_CUSTOMER_ACTIVE', _DB_PREFIX_ . 'customer.ACTIVE');
define('OOPS_DB_CUSTOMER_IS_GUEST', _DB_PREFIX_ . 'customer.IS_GUEST');
define('OOPS_DB_CUSTOMER_DELETED', _DB_PREFIX_ . 'customer.DELETED');
define('OOPS_DB_CUSTOMER_DATE_ADD', _DB_PREFIX_ . 'customer.DATE_ADD');
define('OOPS_DB_CUSTOMER_DATE_UPD', _DB_PREFIX_ . 'customer.DATE_UPD');
define('OOPS_DB_CUSTOMER_TABLE_NAME', _DB_PREFIX_ . 'customer');

/**
 * Base static class for performing query and update operations on the 'customer' table.
 *
 * 
 *
 * @package    propel.generator.prestashop.om
 */
abstract class Oops_Db_Propel_CustomerPeer {

	/** the default database name for this class */
	const DATABASE_NAME = 'prestashop';

	/** the table name for this class */
	const TABLE_NAME = OOPS_DB_CUSTOMER_TABLE_NAME;

	/** the related Propel class for this table */
	const OM_CLASS = 'Oops_Db_Customer';

	/** A class that can be returned by this peer. */
	const CLASS_DEFAULT = 'prestashop.Oops_Db_Customer';

	/** the related TableMap class for this table */
	const TM_CLASS = 'Oops_Db_CustomerTableMap';

	/** The total number of columns. */
	const NUM_COLUMNS = 20;

	/** The number of lazy-loaded columns. */
	const NUM_LAZY_LOAD_COLUMNS = 0;

	/** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
	const NUM_HYDRATE_COLUMNS = 20;

	/** the column name for the ID_CUSTOMER field */
	const ID_CUSTOMER = OOPS_DB_CUSTOMER_ID_CUSTOMER;

	/** the column name for the ID_GENDER field */
	const ID_GENDER = OOPS_DB_CUSTOMER_ID_GENDER;

	/** the column name for the ID_DEFAULT_GROUP field */
	const ID_DEFAULT_GROUP = OOPS_DB_CUSTOMER_ID_DEFAULT_GROUP;

	/** the column name for the FIRSTNAME field */
	const FIRSTNAME = OOPS_DB_CUSTOMER_FIRSTNAME;

	/** the column name for the LASTNAME field */
	const LASTNAME = OOPS_DB_CUSTOMER_LASTNAME;

	/** the column name for the EMAIL field */
	const EMAIL = OOPS_DB_CUSTOMER_EMAIL;

	/** the column name for the PASSWD field */
	const PASSWD = OOPS_DB_CUSTOMER_PASSWD;

	/** the column name for the LAST_PASSWD_GEN field */
	const LAST_PASSWD_GEN = OOPS_DB_CUSTOMER_LAST_PASSWD_GEN;

	/** the column name for the BIRTHDAY field */
	const BIRTHDAY = OOPS_DB_CUSTOMER_BIRTHDAY;

	/** the column name for the NEWSLETTER field */
	const NEWSLETTER = OOPS_DB_CUSTOMER_NEWSLETTER;

	/** the column name for the IP_REGISTRATION_NEWSLETTER field */
	const IP_REGISTRATION_NEWSLETTER = OOPS_DB_CUSTOMER_IP_REGISTRATION_NEWSLETTER;

	/** the column name for the NEWSLETTER_DATE_ADD field */
	const NEWSLETTER_DATE_ADD = OOPS_DB_CUSTOMER_NEWSLETTER_DATE_ADD;

	/** the column name for the OPTIN field */
	const OPTIN = OOPS_DB_CUSTOMER_OPTIN;

	/** the column name for the SECURE_KEY field */
	const SECURE_KEY = OOPS_DB_CUSTOMER_SECURE_KEY;

	/** the column name for the NOTE field */
	const NOTE = OOPS_DB_CUSTOMER_NOTE;

	/** the column name for the ACTIVE field */
	const ACTIVE = OOPS_DB_CUSTOMER_ACTIVE;

	/** the column name for the IS_GUEST field */
	const IS_GUEST = OOPS_DB_CUSTOMER_IS_GUEST;

	/** the column name for the DELETED field */
	const DELETED = OOPS_DB_CUSTOMER_DELETED;

	/** the column name for the DATE_ADD field */
	const DATE_ADD = OOPS_DB_CUSTOMER_DATE_ADD;

	/** the column name for the DATE_UPD field */
	const DATE_UPD = OOPS_DB_CUSTOMER_DATE_UPD;

	/** The default string format for model objects of the related table **/
	const DEFAULT_STRING_FORMAT = 'YAML';

	/**
	 * An identiy map to hold any loaded instances of Oops_Db_Customer objects.
	 * This must be public so that other peer classes can access this when hydrating from JOIN
	 * queries.
	 * @var        array Oops_Db_Customer[]
	 */
	public static $instances = array();


	/**
	 * holds an array of fieldnames
	 *
	 * first dimension keys are the type constants
	 * e.g. self::$fieldNames[self::TYPE_PHPNAME][0] = 'Id'
	 */
	protected static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('IdCustomer', 'IdGender', 'IdDefaultGroup', 'Firstname', 'Lastname', 'Email', 'Passwd', 'LastPasswdGen', 'Birthday', 'Newsletter', 'IpRegistrationNewsletter', 'NewsletterDateAdd', 'Optin', 'SecureKey', 'Note', 'Active', 'IsGuest', 'Deleted', 'DateAdd', 'DateUpd', ),
		BasePeer::TYPE_STUDLYPHPNAME => array ('idCustomer', 'idGender', 'idDefaultGroup', 'firstname', 'lastname', 'email', 'passwd', 'lastPasswdGen', 'birthday', 'newsletter', 'ipRegistrationNewsletter', 'newsletterDateAdd', 'optin', 'secureKey', 'note', 'active', 'isGuest', 'deleted', 'dateAdd', 'dateUpd', ),
		BasePeer::TYPE_COLNAME => array (self::ID_CUSTOMER, self::ID_GENDER, self::ID_DEFAULT_GROUP, self::FIRSTNAME, self::LASTNAME, self::EMAIL, self::PASSWD, self::LAST_PASSWD_GEN, self::BIRTHDAY, self::NEWSLETTER, self::IP_REGISTRATION_NEWSLETTER, self::NEWSLETTER_DATE_ADD, self::OPTIN, self::SECURE_KEY, self::NOTE, self::ACTIVE, self::IS_GUEST, self::DELETED, self::DATE_ADD, self::DATE_UPD, ),
		BasePeer::TYPE_RAW_COLNAME => array ('ID_CUSTOMER', 'ID_GENDER', 'ID_DEFAULT_GROUP', 'FIRSTNAME', 'LASTNAME', 'EMAIL', 'PASSWD', 'LAST_PASSWD_GEN', 'BIRTHDAY', 'NEWSLETTER', 'IP_REGISTRATION_NEWSLETTER', 'NEWSLETTER_DATE_ADD', 'OPTIN', 'SECURE_KEY', 'NOTE', 'ACTIVE', 'IS_GUEST', 'DELETED', 'DATE_ADD', 'DATE_UPD', ),
		BasePeer::TYPE_FIELDNAME => array ('id_customer', 'id_gender', 'id_default_group', 'firstname', 'lastname', 'email', 'passwd', 'last_passwd_gen', 'birthday', 'newsletter', 'ip_registration_newsletter', 'newsletter_date_add', 'optin', 'secure_key', 'note', 'active', 'is_guest', 'deleted', 'date_add', 'date_upd', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, )
	);

	/**
	 * holds an array of keys for quick access to the fieldnames array
	 *
	 * first dimension keys are the type constants
	 * e.g. self::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
	 */
	protected static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('IdCustomer' => 0, 'IdGender' => 1, 'IdDefaultGroup' => 2, 'Firstname' => 3, 'Lastname' => 4, 'Email' => 5, 'Passwd' => 6, 'LastPasswdGen' => 7, 'Birthday' => 8, 'Newsletter' => 9, 'IpRegistrationNewsletter' => 10, 'NewsletterDateAdd' => 11, 'Optin' => 12, 'SecureKey' => 13, 'Note' => 14, 'Active' => 15, 'IsGuest' => 16, 'Deleted' => 17, 'DateAdd' => 18, 'DateUpd' => 19, ),
		BasePeer::TYPE_STUDLYPHPNAME => array ('idCustomer' => 0, 'idGender' => 1, 'idDefaultGroup' => 2, 'firstname' => 3, 'lastname' => 4, 'email' => 5, 'passwd' => 6, 'lastPasswdGen' => 7, 'birthday' => 8, 'newsletter' => 9, 'ipRegistrationNewsletter' => 10, 'newsletterDateAdd' => 11, 'optin' => 12, 'secureKey' => 13, 'note' => 14, 'active' => 15, 'isGuest' => 16, 'deleted' => 17, 'dateAdd' => 18, 'dateUpd' => 19, ),
		BasePeer::TYPE_COLNAME => array (self::ID_CUSTOMER => 0, self::ID_GENDER => 1, self::ID_DEFAULT_GROUP => 2, self::FIRSTNAME => 3, self::LASTNAME => 4, self::EMAIL => 5, self::PASSWD => 6, self::LAST_PASSWD_GEN => 7, self::BIRTHDAY => 8, self::NEWSLETTER => 9, self::IP_REGISTRATION_NEWSLETTER => 10, self::NEWSLETTER_DATE_ADD => 11, self::OPTIN => 12, self::SECURE_KEY => 13, self::NOTE => 14, self::ACTIVE => 15, self::IS_GUEST => 16, self::DELETED => 17, self::DATE_ADD => 18, self::DATE_UPD => 19, ),
		BasePeer::TYPE_RAW_COLNAME => array ('ID_CUSTOMER' => 0, 'ID_GENDER' => 1, 'ID_DEFAULT_GROUP' => 2, 'FIRSTNAME' => 3, 'LASTNAME' => 4, 'EMAIL' => 5, 'PASSWD' => 6, 'LAST_PASSWD_GEN' => 7, 'BIRTHDAY' => 8, 'NEWSLETTER' => 9, 'IP_REGISTRATION_NEWSLETTER' => 10, 'NEWSLETTER_DATE_ADD' => 11, 'OPTIN' => 12, 'SECURE_KEY' => 13, 'NOTE' => 14, 'ACTIVE' => 15, 'IS_GUEST' => 16, 'DELETED' => 17, 'DATE_ADD' => 18, 'DATE_UPD' => 19, ),
		BasePeer::TYPE_FIELDNAME => array ('id_customer' => 0, 'id_gender' => 1, 'id_default_group' => 2, 'firstname' => 3, 'lastname' => 4, 'email' => 5, 'passwd' => 6, 'last_passwd_gen' => 7, 'birthday' => 8, 'newsletter' => 9, 'ip_registration_newsletter' => 10, 'newsletter_date_add' => 11, 'optin' => 12, 'secure_key' => 13, 'note' => 14, 'active' => 15, 'is_guest' => 16, 'deleted' => 17, 'date_add' => 18, 'date_upd' => 19, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, )
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
	 * @param      string $column The column name for current table. (i.e. Oops_Db_CustomerPeer::COLUMN_NAME).
	 * @return     string
	 */
	public static function alias($alias, $column)
	{
		return str_replace(Oops_Db_CustomerPeer::TABLE_NAME.'.', $alias.'.', $column);
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
			$criteria->addSelectColumn(Oops_Db_CustomerPeer::ID_CUSTOMER);
			$criteria->addSelectColumn(Oops_Db_CustomerPeer::ID_GENDER);
			$criteria->addSelectColumn(Oops_Db_CustomerPeer::ID_DEFAULT_GROUP);
			$criteria->addSelectColumn(Oops_Db_CustomerPeer::FIRSTNAME);
			$criteria->addSelectColumn(Oops_Db_CustomerPeer::LASTNAME);
			$criteria->addSelectColumn(Oops_Db_CustomerPeer::EMAIL);
			$criteria->addSelectColumn(Oops_Db_CustomerPeer::PASSWD);
			$criteria->addSelectColumn(Oops_Db_CustomerPeer::LAST_PASSWD_GEN);
			$criteria->addSelectColumn(Oops_Db_CustomerPeer::BIRTHDAY);
			$criteria->addSelectColumn(Oops_Db_CustomerPeer::NEWSLETTER);
			$criteria->addSelectColumn(Oops_Db_CustomerPeer::IP_REGISTRATION_NEWSLETTER);
			$criteria->addSelectColumn(Oops_Db_CustomerPeer::NEWSLETTER_DATE_ADD);
			$criteria->addSelectColumn(Oops_Db_CustomerPeer::OPTIN);
			$criteria->addSelectColumn(Oops_Db_CustomerPeer::SECURE_KEY);
			$criteria->addSelectColumn(Oops_Db_CustomerPeer::NOTE);
			$criteria->addSelectColumn(Oops_Db_CustomerPeer::ACTIVE);
			$criteria->addSelectColumn(Oops_Db_CustomerPeer::IS_GUEST);
			$criteria->addSelectColumn(Oops_Db_CustomerPeer::DELETED);
			$criteria->addSelectColumn(Oops_Db_CustomerPeer::DATE_ADD);
			$criteria->addSelectColumn(Oops_Db_CustomerPeer::DATE_UPD);
		} else {
			$criteria->addSelectColumn($alias . '.ID_CUSTOMER');
			$criteria->addSelectColumn($alias . '.ID_GENDER');
			$criteria->addSelectColumn($alias . '.ID_DEFAULT_GROUP');
			$criteria->addSelectColumn($alias . '.FIRSTNAME');
			$criteria->addSelectColumn($alias . '.LASTNAME');
			$criteria->addSelectColumn($alias . '.EMAIL');
			$criteria->addSelectColumn($alias . '.PASSWD');
			$criteria->addSelectColumn($alias . '.LAST_PASSWD_GEN');
			$criteria->addSelectColumn($alias . '.BIRTHDAY');
			$criteria->addSelectColumn($alias . '.NEWSLETTER');
			$criteria->addSelectColumn($alias . '.IP_REGISTRATION_NEWSLETTER');
			$criteria->addSelectColumn($alias . '.NEWSLETTER_DATE_ADD');
			$criteria->addSelectColumn($alias . '.OPTIN');
			$criteria->addSelectColumn($alias . '.SECURE_KEY');
			$criteria->addSelectColumn($alias . '.NOTE');
			$criteria->addSelectColumn($alias . '.ACTIVE');
			$criteria->addSelectColumn($alias . '.IS_GUEST');
			$criteria->addSelectColumn($alias . '.DELETED');
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
		$criteria->setPrimaryTableName(Oops_Db_CustomerPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			Oops_Db_CustomerPeer::addSelectColumns($criteria);
		}

		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
		$criteria->setDbName(self::DATABASE_NAME); // Set the correct dbName

		if ($con === null) {
			$con = Propel::getConnection(Oops_Db_CustomerPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
	 * @return     Oops_Db_Customer
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
	{
		$critcopy = clone $criteria;
		$critcopy->setLimit(1);
		$objects = Oops_Db_CustomerPeer::doSelect($critcopy, $con);
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
		return Oops_Db_CustomerPeer::populateObjects(Oops_Db_CustomerPeer::doSelectStmt($criteria, $con));
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
			$con = Propel::getConnection(Oops_Db_CustomerPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		if (!$criteria->hasSelectClause()) {
			$criteria = clone $criteria;
			Oops_Db_CustomerPeer::addSelectColumns($criteria);
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
	 * @param      Oops_Db_Customer $value A Oops_Db_Customer object.
	 * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
	 */
	public static function addInstanceToPool($obj, $key = null)
	{
		if (Propel::isInstancePoolingEnabled()) {
			if ($key === null) {
				$key = (string) $obj->getIdCustomer();
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
	 * @param      mixed $value A Oops_Db_Customer object or a primary key value.
	 */
	public static function removeInstanceFromPool($value)
	{
		if (Propel::isInstancePoolingEnabled() && $value !== null) {
			if (is_object($value) && $value instanceof Oops_Db_Customer) {
				$key = (string) $value->getIdCustomer();
			} elseif (is_scalar($value)) {
				// assume we've been passed a primary key
				$key = (string) $value;
			} else {
				$e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Oops_Db_Customer object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
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
	 * @return     Oops_Db_Customer Found object or NULL if 1) no instance exists for specified key or 2) instance pooling has been disabled.
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
	 * Method to invalidate the instance pool of all tables related to customer
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
		$cls = Oops_Db_CustomerPeer::getOMClass(false);
		// populate the object(s)
		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key = Oops_Db_CustomerPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj = Oops_Db_CustomerPeer::getInstanceFromPool($key))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj->hydrate($row, 0, true); // rehydrate
				$results[] = $obj;
			} else {
				$obj = new $cls();
				$obj->hydrate($row);
				$results[] = $obj;
				Oops_Db_CustomerPeer::addInstanceToPool($obj, $key);
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
	 * @return     array (Oops_Db_Customer object, last column rank)
	 */
	public static function populateObject($row, $startcol = 0)
	{
		$key = Oops_Db_CustomerPeer::getPrimaryKeyHashFromRow($row, $startcol);
		if (null !== ($obj = Oops_Db_CustomerPeer::getInstanceFromPool($key))) {
			// We no longer rehydrate the object, since this can cause data loss.
			// See http://www.propelorm.org/ticket/509
			// $obj->hydrate($row, $startcol, true); // rehydrate
			$col = $startcol + Oops_Db_CustomerPeer::NUM_HYDRATE_COLUMNS;
		} else {
			$cls = Oops_Db_CustomerPeer::OM_CLASS;
			$obj = new $cls();
			$col = $obj->hydrate($row, $startcol);
			Oops_Db_CustomerPeer::addInstanceToPool($obj, $key);
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
	  $dbMap = Propel::getDatabaseMap(Oops_Db_Propel_CustomerPeer::DATABASE_NAME);
	  if (!$dbMap->hasTable(Oops_Db_Propel_CustomerPeer::TABLE_NAME))
	  {
	    $dbMap->addTableObject(new Oops_Db_CustomerTableMap());
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
		return $withPrefix ? Oops_Db_CustomerPeer::CLASS_DEFAULT : Oops_Db_CustomerPeer::OM_CLASS;
	}

	/**
	 * Performs an INSERT on the database, given a Oops_Db_Customer or Criteria object.
	 *
	 * @param      mixed $values Criteria or Oops_Db_Customer object containing data that is used to create the INSERT statement.
	 * @param      PropelPDO $con the PropelPDO connection to use
	 * @return     mixed The new primary key.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doInsert($values, PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(Oops_Db_CustomerPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; // rename for clarity
		} else {
			$criteria = $values->buildCriteria(); // build Criteria from Oops_Db_Customer object
		}

		if ($criteria->containsKey(Oops_Db_CustomerPeer::ID_CUSTOMER) && $criteria->keyContainsValue(Oops_Db_CustomerPeer::ID_CUSTOMER) ) {
			throw new PropelException('Cannot insert a value for auto-increment primary key ('.Oops_Db_CustomerPeer::ID_CUSTOMER.')');
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
	 * Performs an UPDATE on the database, given a Oops_Db_Customer or Criteria object.
	 *
	 * @param      mixed $values Criteria or Oops_Db_Customer object containing data that is used to create the UPDATE statement.
	 * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
	 * @return     int The number of affected rows (if supported by underlying database driver).
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doUpdate($values, PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(Oops_Db_CustomerPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$selectCriteria = new Criteria(self::DATABASE_NAME);

		if ($values instanceof Criteria) {
			$criteria = clone $values; // rename for clarity

			$comparison = $criteria->getComparison(Oops_Db_CustomerPeer::ID_CUSTOMER);
			$value = $criteria->remove(Oops_Db_CustomerPeer::ID_CUSTOMER);
			if ($value) {
				$selectCriteria->add(Oops_Db_CustomerPeer::ID_CUSTOMER, $value, $comparison);
			} else {
				$selectCriteria->setPrimaryTableName(Oops_Db_CustomerPeer::TABLE_NAME);
			}

		} else { // $values is Oops_Db_Customer object
			$criteria = $values->buildCriteria(); // gets full criteria
			$selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
		}

		// set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		return BasePeer::doUpdate($selectCriteria, $criteria, $con);
	}

	/**
	 * Deletes all rows from the customer table.
	 *
	 * @param      PropelPDO $con the connection to use
	 * @return     int The number of affected rows (if supported by underlying database driver).
	 */
	public static function doDeleteAll(PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(Oops_Db_CustomerPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}
		$affectedRows = 0; // initialize var to track total num of affected rows
		try {
			// use transaction because $criteria could contain info
			// for more than one table or we could emulating ON DELETE CASCADE, etc.
			$con->beginTransaction();
			$affectedRows += BasePeer::doDeleteAll(Oops_Db_CustomerPeer::TABLE_NAME, $con, Oops_Db_CustomerPeer::DATABASE_NAME);
			// Because this db requires some delete cascade/set null emulation, we have to
			// clear the cached instance *after* the emulation has happened (since
			// instances get re-added by the select statement contained therein).
			Oops_Db_CustomerPeer::clearInstancePool();
			Oops_Db_CustomerPeer::clearRelatedInstancePool();
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Performs a DELETE on the database, given a Oops_Db_Customer or Criteria object OR a primary key value.
	 *
	 * @param      mixed $values Criteria or Oops_Db_Customer object or primary key or array of primary keys
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
			$con = Propel::getConnection(Oops_Db_CustomerPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		if ($values instanceof Criteria) {
			// invalidate the cache for all objects of this type, since we have no
			// way of knowing (without running a query) what objects should be invalidated
			// from the cache based on this Criteria.
			Oops_Db_CustomerPeer::clearInstancePool();
			// rename for clarity
			$criteria = clone $values;
		} elseif ($values instanceof Oops_Db_Customer) { // it's a model object
			// invalidate the cache for this single object
			Oops_Db_CustomerPeer::removeInstanceFromPool($values);
			// create criteria based on pk values
			$criteria = $values->buildPkeyCriteria();
		} else { // it's a primary key, or an array of pks
			$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(Oops_Db_CustomerPeer::ID_CUSTOMER, (array) $values, Criteria::IN);
			// invalidate the cache for this object(s)
			foreach ((array) $values as $singleval) {
				Oops_Db_CustomerPeer::removeInstanceFromPool($singleval);
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
			Oops_Db_CustomerPeer::clearRelatedInstancePool();
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Validates all modified columns of given Oops_Db_Customer object.
	 * If parameter $columns is either a single column name or an array of column names
	 * than only those columns are validated.
	 *
	 * NOTICE: This does not apply to primary or foreign keys for now.
	 *
	 * @param      Oops_Db_Customer $obj The object to validate.
	 * @param      mixed $cols Column name or array of column names.
	 *
	 * @return     mixed TRUE if all columns are valid or the error message of the first invalid column.
	 */
	public static function doValidate($obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(Oops_Db_CustomerPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(Oops_Db_CustomerPeer::TABLE_NAME);

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

		return BasePeer::doValidate(Oops_Db_CustomerPeer::DATABASE_NAME, Oops_Db_CustomerPeer::TABLE_NAME, $columns);
	}

	/**
	 * Retrieve a single object by pkey.
	 *
	 * @param      int $pk the primary key.
	 * @param      PropelPDO $con the connection to use
	 * @return     Oops_Db_Customer
	 */
	public static function retrieveByPK($pk, PropelPDO $con = null)
	{

		if (null !== ($obj = Oops_Db_CustomerPeer::getInstanceFromPool((string) $pk))) {
			return $obj;
		}

		if ($con === null) {
			$con = Propel::getConnection(Oops_Db_CustomerPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria = new Criteria(Oops_Db_CustomerPeer::DATABASE_NAME);
		$criteria->add(Oops_Db_CustomerPeer::ID_CUSTOMER, $pk);

		$v = Oops_Db_CustomerPeer::doSelect($criteria, $con);

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
			$con = Propel::getConnection(Oops_Db_CustomerPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$objs = null;
		if (empty($pks)) {
			$objs = array();
		} else {
			$criteria = new Criteria(Oops_Db_CustomerPeer::DATABASE_NAME);
			$criteria->add(Oops_Db_CustomerPeer::ID_CUSTOMER, $pks, Criteria::IN);
			$objs = Oops_Db_CustomerPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} // Oops_Db_Propel_CustomerPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
Oops_Db_Propel_CustomerPeer::buildTableMap();

