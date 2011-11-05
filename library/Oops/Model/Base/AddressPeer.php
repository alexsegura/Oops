<?php


/**
 * Base static class for performing query and update operations on the 'djland_address' table.
 *
 * 
 *
 * @package    propel.generator.prestashop.om
 */
abstract class Oops_Model_Base_AddressPeer {

	/** the default database name for this class */
	const DATABASE_NAME = 'prestashop';

	/** the table name for this class */
	const TABLE_NAME = 'djland_address';

	/** the related Propel class for this table */
	const OM_CLASS = 'Oops_Model_Address';

	/** A class that can be returned by this peer. */
	const CLASS_DEFAULT = 'prestashop.Oops_Model_Address';

	/** the related TableMap class for this table */
	const TM_CLASS = 'Oops_Model_AddressTableMap';

	/** The total number of columns. */
	const NUM_COLUMNS = 23;

	/** The number of lazy-loaded columns. */
	const NUM_LAZY_LOAD_COLUMNS = 0;

	/** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
	const NUM_HYDRATE_COLUMNS = 23;

	/** the column name for the ID_ADDRESS field */
	const ID_ADDRESS = 'djland_address.ID_ADDRESS';

	/** the column name for the ID_COUNTRY field */
	const ID_COUNTRY = 'djland_address.ID_COUNTRY';

	/** the column name for the ID_STATE field */
	const ID_STATE = 'djland_address.ID_STATE';

	/** the column name for the ID_CUSTOMER field */
	const ID_CUSTOMER = 'djland_address.ID_CUSTOMER';

	/** the column name for the ID_MANUFACTURER field */
	const ID_MANUFACTURER = 'djland_address.ID_MANUFACTURER';

	/** the column name for the ID_SUPPLIER field */
	const ID_SUPPLIER = 'djland_address.ID_SUPPLIER';

	/** the column name for the ALIAS field */
	const ALIAS = 'djland_address.ALIAS';

	/** the column name for the COMPANY field */
	const COMPANY = 'djland_address.COMPANY';

	/** the column name for the LASTNAME field */
	const LASTNAME = 'djland_address.LASTNAME';

	/** the column name for the FIRSTNAME field */
	const FIRSTNAME = 'djland_address.FIRSTNAME';

	/** the column name for the ADDRESS1 field */
	const ADDRESS1 = 'djland_address.ADDRESS1';

	/** the column name for the ADDRESS2 field */
	const ADDRESS2 = 'djland_address.ADDRESS2';

	/** the column name for the POSTCODE field */
	const POSTCODE = 'djland_address.POSTCODE';

	/** the column name for the CITY field */
	const CITY = 'djland_address.CITY';

	/** the column name for the OTHER field */
	const OTHER = 'djland_address.OTHER';

	/** the column name for the PHONE field */
	const PHONE = 'djland_address.PHONE';

	/** the column name for the PHONE_MOBILE field */
	const PHONE_MOBILE = 'djland_address.PHONE_MOBILE';

	/** the column name for the VAT_NUMBER field */
	const VAT_NUMBER = 'djland_address.VAT_NUMBER';

	/** the column name for the DNI field */
	const DNI = 'djland_address.DNI';

	/** the column name for the DATE_ADD field */
	const DATE_ADD = 'djland_address.DATE_ADD';

	/** the column name for the DATE_UPD field */
	const DATE_UPD = 'djland_address.DATE_UPD';

	/** the column name for the ACTIVE field */
	const ACTIVE = 'djland_address.ACTIVE';

	/** the column name for the DELETED field */
	const DELETED = 'djland_address.DELETED';

	/** The default string format for model objects of the related table **/
	const DEFAULT_STRING_FORMAT = 'YAML';

	/**
	 * An identiy map to hold any loaded instances of Oops_Model_Address objects.
	 * This must be public so that other peer classes can access this when hydrating from JOIN
	 * queries.
	 * @var        array Oops_Model_Address[]
	 */
	public static $instances = array();


	/**
	 * holds an array of fieldnames
	 *
	 * first dimension keys are the type constants
	 * e.g. self::$fieldNames[self::TYPE_PHPNAME][0] = 'Id'
	 */
	protected static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('IdAddress', 'IdCountry', 'IdState', 'IdCustomer', 'IdManufacturer', 'IdSupplier', 'Alias', 'Company', 'Lastname', 'Firstname', 'Address1', 'Address2', 'Postcode', 'City', 'Other', 'Phone', 'PhoneMobile', 'VatNumber', 'Dni', 'DateAdd', 'DateUpd', 'Active', 'Deleted', ),
		BasePeer::TYPE_STUDLYPHPNAME => array ('idAddress', 'idCountry', 'idState', 'idCustomer', 'idManufacturer', 'idSupplier', 'alias', 'company', 'lastname', 'firstname', 'address1', 'address2', 'postcode', 'city', 'other', 'phone', 'phoneMobile', 'vatNumber', 'dni', 'dateAdd', 'dateUpd', 'active', 'deleted', ),
		BasePeer::TYPE_COLNAME => array (self::ID_ADDRESS, self::ID_COUNTRY, self::ID_STATE, self::ID_CUSTOMER, self::ID_MANUFACTURER, self::ID_SUPPLIER, self::ALIAS, self::COMPANY, self::LASTNAME, self::FIRSTNAME, self::ADDRESS1, self::ADDRESS2, self::POSTCODE, self::CITY, self::OTHER, self::PHONE, self::PHONE_MOBILE, self::VAT_NUMBER, self::DNI, self::DATE_ADD, self::DATE_UPD, self::ACTIVE, self::DELETED, ),
		BasePeer::TYPE_RAW_COLNAME => array ('ID_ADDRESS', 'ID_COUNTRY', 'ID_STATE', 'ID_CUSTOMER', 'ID_MANUFACTURER', 'ID_SUPPLIER', 'ALIAS', 'COMPANY', 'LASTNAME', 'FIRSTNAME', 'ADDRESS1', 'ADDRESS2', 'POSTCODE', 'CITY', 'OTHER', 'PHONE', 'PHONE_MOBILE', 'VAT_NUMBER', 'DNI', 'DATE_ADD', 'DATE_UPD', 'ACTIVE', 'DELETED', ),
		BasePeer::TYPE_FIELDNAME => array ('id_address', 'id_country', 'id_state', 'id_customer', 'id_manufacturer', 'id_supplier', 'alias', 'company', 'lastname', 'firstname', 'address1', 'address2', 'postcode', 'city', 'other', 'phone', 'phone_mobile', 'vat_number', 'dni', 'date_add', 'date_upd', 'active', 'deleted', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, )
	);

	/**
	 * holds an array of keys for quick access to the fieldnames array
	 *
	 * first dimension keys are the type constants
	 * e.g. self::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
	 */
	protected static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('IdAddress' => 0, 'IdCountry' => 1, 'IdState' => 2, 'IdCustomer' => 3, 'IdManufacturer' => 4, 'IdSupplier' => 5, 'Alias' => 6, 'Company' => 7, 'Lastname' => 8, 'Firstname' => 9, 'Address1' => 10, 'Address2' => 11, 'Postcode' => 12, 'City' => 13, 'Other' => 14, 'Phone' => 15, 'PhoneMobile' => 16, 'VatNumber' => 17, 'Dni' => 18, 'DateAdd' => 19, 'DateUpd' => 20, 'Active' => 21, 'Deleted' => 22, ),
		BasePeer::TYPE_STUDLYPHPNAME => array ('idAddress' => 0, 'idCountry' => 1, 'idState' => 2, 'idCustomer' => 3, 'idManufacturer' => 4, 'idSupplier' => 5, 'alias' => 6, 'company' => 7, 'lastname' => 8, 'firstname' => 9, 'address1' => 10, 'address2' => 11, 'postcode' => 12, 'city' => 13, 'other' => 14, 'phone' => 15, 'phoneMobile' => 16, 'vatNumber' => 17, 'dni' => 18, 'dateAdd' => 19, 'dateUpd' => 20, 'active' => 21, 'deleted' => 22, ),
		BasePeer::TYPE_COLNAME => array (self::ID_ADDRESS => 0, self::ID_COUNTRY => 1, self::ID_STATE => 2, self::ID_CUSTOMER => 3, self::ID_MANUFACTURER => 4, self::ID_SUPPLIER => 5, self::ALIAS => 6, self::COMPANY => 7, self::LASTNAME => 8, self::FIRSTNAME => 9, self::ADDRESS1 => 10, self::ADDRESS2 => 11, self::POSTCODE => 12, self::CITY => 13, self::OTHER => 14, self::PHONE => 15, self::PHONE_MOBILE => 16, self::VAT_NUMBER => 17, self::DNI => 18, self::DATE_ADD => 19, self::DATE_UPD => 20, self::ACTIVE => 21, self::DELETED => 22, ),
		BasePeer::TYPE_RAW_COLNAME => array ('ID_ADDRESS' => 0, 'ID_COUNTRY' => 1, 'ID_STATE' => 2, 'ID_CUSTOMER' => 3, 'ID_MANUFACTURER' => 4, 'ID_SUPPLIER' => 5, 'ALIAS' => 6, 'COMPANY' => 7, 'LASTNAME' => 8, 'FIRSTNAME' => 9, 'ADDRESS1' => 10, 'ADDRESS2' => 11, 'POSTCODE' => 12, 'CITY' => 13, 'OTHER' => 14, 'PHONE' => 15, 'PHONE_MOBILE' => 16, 'VAT_NUMBER' => 17, 'DNI' => 18, 'DATE_ADD' => 19, 'DATE_UPD' => 20, 'ACTIVE' => 21, 'DELETED' => 22, ),
		BasePeer::TYPE_FIELDNAME => array ('id_address' => 0, 'id_country' => 1, 'id_state' => 2, 'id_customer' => 3, 'id_manufacturer' => 4, 'id_supplier' => 5, 'alias' => 6, 'company' => 7, 'lastname' => 8, 'firstname' => 9, 'address1' => 10, 'address2' => 11, 'postcode' => 12, 'city' => 13, 'other' => 14, 'phone' => 15, 'phone_mobile' => 16, 'vat_number' => 17, 'dni' => 18, 'date_add' => 19, 'date_upd' => 20, 'active' => 21, 'deleted' => 22, ),
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
	 * @param      string $column The column name for current table. (i.e. Oops_Model_AddressPeer::COLUMN_NAME).
	 * @return     string
	 */
	public static function alias($alias, $column)
	{
		return str_replace(Oops_Model_AddressPeer::TABLE_NAME.'.', $alias.'.', $column);
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
			$criteria->addSelectColumn(Oops_Model_AddressPeer::ID_ADDRESS);
			$criteria->addSelectColumn(Oops_Model_AddressPeer::ID_COUNTRY);
			$criteria->addSelectColumn(Oops_Model_AddressPeer::ID_STATE);
			$criteria->addSelectColumn(Oops_Model_AddressPeer::ID_CUSTOMER);
			$criteria->addSelectColumn(Oops_Model_AddressPeer::ID_MANUFACTURER);
			$criteria->addSelectColumn(Oops_Model_AddressPeer::ID_SUPPLIER);
			$criteria->addSelectColumn(Oops_Model_AddressPeer::ALIAS);
			$criteria->addSelectColumn(Oops_Model_AddressPeer::COMPANY);
			$criteria->addSelectColumn(Oops_Model_AddressPeer::LASTNAME);
			$criteria->addSelectColumn(Oops_Model_AddressPeer::FIRSTNAME);
			$criteria->addSelectColumn(Oops_Model_AddressPeer::ADDRESS1);
			$criteria->addSelectColumn(Oops_Model_AddressPeer::ADDRESS2);
			$criteria->addSelectColumn(Oops_Model_AddressPeer::POSTCODE);
			$criteria->addSelectColumn(Oops_Model_AddressPeer::CITY);
			$criteria->addSelectColumn(Oops_Model_AddressPeer::OTHER);
			$criteria->addSelectColumn(Oops_Model_AddressPeer::PHONE);
			$criteria->addSelectColumn(Oops_Model_AddressPeer::PHONE_MOBILE);
			$criteria->addSelectColumn(Oops_Model_AddressPeer::VAT_NUMBER);
			$criteria->addSelectColumn(Oops_Model_AddressPeer::DNI);
			$criteria->addSelectColumn(Oops_Model_AddressPeer::DATE_ADD);
			$criteria->addSelectColumn(Oops_Model_AddressPeer::DATE_UPD);
			$criteria->addSelectColumn(Oops_Model_AddressPeer::ACTIVE);
			$criteria->addSelectColumn(Oops_Model_AddressPeer::DELETED);
		} else {
			$criteria->addSelectColumn($alias . '.ID_ADDRESS');
			$criteria->addSelectColumn($alias . '.ID_COUNTRY');
			$criteria->addSelectColumn($alias . '.ID_STATE');
			$criteria->addSelectColumn($alias . '.ID_CUSTOMER');
			$criteria->addSelectColumn($alias . '.ID_MANUFACTURER');
			$criteria->addSelectColumn($alias . '.ID_SUPPLIER');
			$criteria->addSelectColumn($alias . '.ALIAS');
			$criteria->addSelectColumn($alias . '.COMPANY');
			$criteria->addSelectColumn($alias . '.LASTNAME');
			$criteria->addSelectColumn($alias . '.FIRSTNAME');
			$criteria->addSelectColumn($alias . '.ADDRESS1');
			$criteria->addSelectColumn($alias . '.ADDRESS2');
			$criteria->addSelectColumn($alias . '.POSTCODE');
			$criteria->addSelectColumn($alias . '.CITY');
			$criteria->addSelectColumn($alias . '.OTHER');
			$criteria->addSelectColumn($alias . '.PHONE');
			$criteria->addSelectColumn($alias . '.PHONE_MOBILE');
			$criteria->addSelectColumn($alias . '.VAT_NUMBER');
			$criteria->addSelectColumn($alias . '.DNI');
			$criteria->addSelectColumn($alias . '.DATE_ADD');
			$criteria->addSelectColumn($alias . '.DATE_UPD');
			$criteria->addSelectColumn($alias . '.ACTIVE');
			$criteria->addSelectColumn($alias . '.DELETED');
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
		$criteria->setPrimaryTableName(Oops_Model_AddressPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			Oops_Model_AddressPeer::addSelectColumns($criteria);
		}

		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
		$criteria->setDbName(self::DATABASE_NAME); // Set the correct dbName

		if ($con === null) {
			$con = Propel::getConnection(Oops_Model_AddressPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
	 * @return     Oops_Model_Address
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
	{
		$critcopy = clone $criteria;
		$critcopy->setLimit(1);
		$objects = Oops_Model_AddressPeer::doSelect($critcopy, $con);
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
		return Oops_Model_AddressPeer::populateObjects(Oops_Model_AddressPeer::doSelectStmt($criteria, $con));
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
			$con = Propel::getConnection(Oops_Model_AddressPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		if (!$criteria->hasSelectClause()) {
			$criteria = clone $criteria;
			Oops_Model_AddressPeer::addSelectColumns($criteria);
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
	 * @param      Oops_Model_Address $value A Oops_Model_Address object.
	 * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
	 */
	public static function addInstanceToPool($obj, $key = null)
	{
		if (Propel::isInstancePoolingEnabled()) {
			if ($key === null) {
				$key = (string) $obj->getIdAddress();
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
	 * @param      mixed $value A Oops_Model_Address object or a primary key value.
	 */
	public static function removeInstanceFromPool($value)
	{
		if (Propel::isInstancePoolingEnabled() && $value !== null) {
			if (is_object($value) && $value instanceof Oops_Model_Address) {
				$key = (string) $value->getIdAddress();
			} elseif (is_scalar($value)) {
				// assume we've been passed a primary key
				$key = (string) $value;
			} else {
				$e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Oops_Model_Address object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
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
	 * @return     Oops_Model_Address Found object or NULL if 1) no instance exists for specified key or 2) instance pooling has been disabled.
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
	 * Method to invalidate the instance pool of all tables related to djland_address
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
		$cls = Oops_Model_AddressPeer::getOMClass(false);
		// populate the object(s)
		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key = Oops_Model_AddressPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj = Oops_Model_AddressPeer::getInstanceFromPool($key))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj->hydrate($row, 0, true); // rehydrate
				$results[] = $obj;
			} else {
				$obj = new $cls();
				$obj->hydrate($row);
				$results[] = $obj;
				Oops_Model_AddressPeer::addInstanceToPool($obj, $key);
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
	 * @return     array (Oops_Model_Address object, last column rank)
	 */
	public static function populateObject($row, $startcol = 0)
	{
		$key = Oops_Model_AddressPeer::getPrimaryKeyHashFromRow($row, $startcol);
		if (null !== ($obj = Oops_Model_AddressPeer::getInstanceFromPool($key))) {
			// We no longer rehydrate the object, since this can cause data loss.
			// See http://www.propelorm.org/ticket/509
			// $obj->hydrate($row, $startcol, true); // rehydrate
			$col = $startcol + Oops_Model_AddressPeer::NUM_HYDRATE_COLUMNS;
		} else {
			$cls = Oops_Model_AddressPeer::OM_CLASS;
			$obj = new $cls();
			$col = $obj->hydrate($row, $startcol);
			Oops_Model_AddressPeer::addInstanceToPool($obj, $key);
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
	  $dbMap = Propel::getDatabaseMap(Oops_Model_Base_AddressPeer::DATABASE_NAME);
	  if (!$dbMap->hasTable(Oops_Model_Base_AddressPeer::TABLE_NAME))
	  {
	    $dbMap->addTableObject(new Oops_Model_AddressTableMap());
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
		return $withPrefix ? Oops_Model_AddressPeer::CLASS_DEFAULT : Oops_Model_AddressPeer::OM_CLASS;
	}

	/**
	 * Performs an INSERT on the database, given a Oops_Model_Address or Criteria object.
	 *
	 * @param      mixed $values Criteria or Oops_Model_Address object containing data that is used to create the INSERT statement.
	 * @param      PropelPDO $con the PropelPDO connection to use
	 * @return     mixed The new primary key.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doInsert($values, PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(Oops_Model_AddressPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; // rename for clarity
		} else {
			$criteria = $values->buildCriteria(); // build Criteria from Oops_Model_Address object
		}

		if ($criteria->containsKey(Oops_Model_AddressPeer::ID_ADDRESS) && $criteria->keyContainsValue(Oops_Model_AddressPeer::ID_ADDRESS) ) {
			throw new PropelException('Cannot insert a value for auto-increment primary key ('.Oops_Model_AddressPeer::ID_ADDRESS.')');
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
	 * Performs an UPDATE on the database, given a Oops_Model_Address or Criteria object.
	 *
	 * @param      mixed $values Criteria or Oops_Model_Address object containing data that is used to create the UPDATE statement.
	 * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
	 * @return     int The number of affected rows (if supported by underlying database driver).
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doUpdate($values, PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(Oops_Model_AddressPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$selectCriteria = new Criteria(self::DATABASE_NAME);

		if ($values instanceof Criteria) {
			$criteria = clone $values; // rename for clarity

			$comparison = $criteria->getComparison(Oops_Model_AddressPeer::ID_ADDRESS);
			$value = $criteria->remove(Oops_Model_AddressPeer::ID_ADDRESS);
			if ($value) {
				$selectCriteria->add(Oops_Model_AddressPeer::ID_ADDRESS, $value, $comparison);
			} else {
				$selectCriteria->setPrimaryTableName(Oops_Model_AddressPeer::TABLE_NAME);
			}

		} else { // $values is Oops_Model_Address object
			$criteria = $values->buildCriteria(); // gets full criteria
			$selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
		}

		// set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		return BasePeer::doUpdate($selectCriteria, $criteria, $con);
	}

	/**
	 * Deletes all rows from the djland_address table.
	 *
	 * @param      PropelPDO $con the connection to use
	 * @return     int The number of affected rows (if supported by underlying database driver).
	 */
	public static function doDeleteAll(PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(Oops_Model_AddressPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}
		$affectedRows = 0; // initialize var to track total num of affected rows
		try {
			// use transaction because $criteria could contain info
			// for more than one table or we could emulating ON DELETE CASCADE, etc.
			$con->beginTransaction();
			$affectedRows += BasePeer::doDeleteAll(Oops_Model_AddressPeer::TABLE_NAME, $con, Oops_Model_AddressPeer::DATABASE_NAME);
			// Because this db requires some delete cascade/set null emulation, we have to
			// clear the cached instance *after* the emulation has happened (since
			// instances get re-added by the select statement contained therein).
			Oops_Model_AddressPeer::clearInstancePool();
			Oops_Model_AddressPeer::clearRelatedInstancePool();
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Performs a DELETE on the database, given a Oops_Model_Address or Criteria object OR a primary key value.
	 *
	 * @param      mixed $values Criteria or Oops_Model_Address object or primary key or array of primary keys
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
			$con = Propel::getConnection(Oops_Model_AddressPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		if ($values instanceof Criteria) {
			// invalidate the cache for all objects of this type, since we have no
			// way of knowing (without running a query) what objects should be invalidated
			// from the cache based on this Criteria.
			Oops_Model_AddressPeer::clearInstancePool();
			// rename for clarity
			$criteria = clone $values;
		} elseif ($values instanceof Oops_Model_Address) { // it's a model object
			// invalidate the cache for this single object
			Oops_Model_AddressPeer::removeInstanceFromPool($values);
			// create criteria based on pk values
			$criteria = $values->buildPkeyCriteria();
		} else { // it's a primary key, or an array of pks
			$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(Oops_Model_AddressPeer::ID_ADDRESS, (array) $values, Criteria::IN);
			// invalidate the cache for this object(s)
			foreach ((array) $values as $singleval) {
				Oops_Model_AddressPeer::removeInstanceFromPool($singleval);
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
			Oops_Model_AddressPeer::clearRelatedInstancePool();
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Validates all modified columns of given Oops_Model_Address object.
	 * If parameter $columns is either a single column name or an array of column names
	 * than only those columns are validated.
	 *
	 * NOTICE: This does not apply to primary or foreign keys for now.
	 *
	 * @param      Oops_Model_Address $obj The object to validate.
	 * @param      mixed $cols Column name or array of column names.
	 *
	 * @return     mixed TRUE if all columns are valid or the error message of the first invalid column.
	 */
	public static function doValidate($obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(Oops_Model_AddressPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(Oops_Model_AddressPeer::TABLE_NAME);

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

		return BasePeer::doValidate(Oops_Model_AddressPeer::DATABASE_NAME, Oops_Model_AddressPeer::TABLE_NAME, $columns);
	}

	/**
	 * Retrieve a single object by pkey.
	 *
	 * @param      int $pk the primary key.
	 * @param      PropelPDO $con the connection to use
	 * @return     Oops_Model_Address
	 */
	public static function retrieveByPK($pk, PropelPDO $con = null)
	{

		if (null !== ($obj = Oops_Model_AddressPeer::getInstanceFromPool((string) $pk))) {
			return $obj;
		}

		if ($con === null) {
			$con = Propel::getConnection(Oops_Model_AddressPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria = new Criteria(Oops_Model_AddressPeer::DATABASE_NAME);
		$criteria->add(Oops_Model_AddressPeer::ID_ADDRESS, $pk);

		$v = Oops_Model_AddressPeer::doSelect($criteria, $con);

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
			$con = Propel::getConnection(Oops_Model_AddressPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$objs = null;
		if (empty($pks)) {
			$objs = array();
		} else {
			$criteria = new Criteria(Oops_Model_AddressPeer::DATABASE_NAME);
			$criteria->add(Oops_Model_AddressPeer::ID_ADDRESS, $pks, Criteria::IN);
			$objs = Oops_Model_AddressPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} // Oops_Model_Base_AddressPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
Oops_Model_Base_AddressPeer::buildTableMap();

