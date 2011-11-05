<?php


/**
 * Base static class for performing query and update operations on the 'djland_category' table.
 *
 * 
 *
 * @package    propel.generator.prestashop.om
 */
abstract class Oops_Model_Base_CategoryPeer {

	/** the default database name for this class */
	const DATABASE_NAME = 'prestashop';

	/** the table name for this class */
	const TABLE_NAME = 'djland_category';

	/** the related Propel class for this table */
	const OM_CLASS = 'Oops_Model_Category';

	/** A class that can be returned by this peer. */
	const CLASS_DEFAULT = 'prestashop.Oops_Model_Category';

	/** the related TableMap class for this table */
	const TM_CLASS = 'Oops_Model_CategoryTableMap';

	/** The total number of columns. */
	const NUM_COLUMNS = 9;

	/** The number of lazy-loaded columns. */
	const NUM_LAZY_LOAD_COLUMNS = 0;

	/** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
	const NUM_HYDRATE_COLUMNS = 9;

	/** the column name for the ID_CATEGORY field */
	const ID_CATEGORY = 'djland_category.ID_CATEGORY';

	/** the column name for the ID_PARENT field */
	const ID_PARENT = 'djland_category.ID_PARENT';

	/** the column name for the LEVEL_DEPTH field */
	const LEVEL_DEPTH = 'djland_category.LEVEL_DEPTH';

	/** the column name for the NLEFT field */
	const NLEFT = 'djland_category.NLEFT';

	/** the column name for the NRIGHT field */
	const NRIGHT = 'djland_category.NRIGHT';

	/** the column name for the ACTIVE field */
	const ACTIVE = 'djland_category.ACTIVE';

	/** the column name for the DATE_ADD field */
	const DATE_ADD = 'djland_category.DATE_ADD';

	/** the column name for the DATE_UPD field */
	const DATE_UPD = 'djland_category.DATE_UPD';

	/** the column name for the POSITION field */
	const POSITION = 'djland_category.POSITION';

	/** The default string format for model objects of the related table **/
	const DEFAULT_STRING_FORMAT = 'YAML';

	/**
	 * An identiy map to hold any loaded instances of Oops_Model_Category objects.
	 * This must be public so that other peer classes can access this when hydrating from JOIN
	 * queries.
	 * @var        array Oops_Model_Category[]
	 */
	public static $instances = array();


	// nested_set behavior
	
	/**
	 * Left column for the set
	 */
	const LEFT_COL = 'djland_category.NLEFT';
	
	/**
	 * Right column for the set
	 */
	const RIGHT_COL = 'djland_category.NRIGHT';
	
	/**
	 * Level column for the set
	 */
	const LEVEL_COL = 'djland_category.LEVEL_DEPTH';

	/**
	 * holds an array of fieldnames
	 *
	 * first dimension keys are the type constants
	 * e.g. self::$fieldNames[self::TYPE_PHPNAME][0] = 'Id'
	 */
	protected static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('IdCategory', 'IdParent', 'LevelDepth', 'Nleft', 'Nright', 'Active', 'DateAdd', 'DateUpd', 'Position', ),
		BasePeer::TYPE_STUDLYPHPNAME => array ('idCategory', 'idParent', 'levelDepth', 'nleft', 'nright', 'active', 'dateAdd', 'dateUpd', 'position', ),
		BasePeer::TYPE_COLNAME => array (self::ID_CATEGORY, self::ID_PARENT, self::LEVEL_DEPTH, self::NLEFT, self::NRIGHT, self::ACTIVE, self::DATE_ADD, self::DATE_UPD, self::POSITION, ),
		BasePeer::TYPE_RAW_COLNAME => array ('ID_CATEGORY', 'ID_PARENT', 'LEVEL_DEPTH', 'NLEFT', 'NRIGHT', 'ACTIVE', 'DATE_ADD', 'DATE_UPD', 'POSITION', ),
		BasePeer::TYPE_FIELDNAME => array ('id_category', 'id_parent', 'level_depth', 'nleft', 'nright', 'active', 'date_add', 'date_upd', 'position', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, )
	);

	/**
	 * holds an array of keys for quick access to the fieldnames array
	 *
	 * first dimension keys are the type constants
	 * e.g. self::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
	 */
	protected static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('IdCategory' => 0, 'IdParent' => 1, 'LevelDepth' => 2, 'Nleft' => 3, 'Nright' => 4, 'Active' => 5, 'DateAdd' => 6, 'DateUpd' => 7, 'Position' => 8, ),
		BasePeer::TYPE_STUDLYPHPNAME => array ('idCategory' => 0, 'idParent' => 1, 'levelDepth' => 2, 'nleft' => 3, 'nright' => 4, 'active' => 5, 'dateAdd' => 6, 'dateUpd' => 7, 'position' => 8, ),
		BasePeer::TYPE_COLNAME => array (self::ID_CATEGORY => 0, self::ID_PARENT => 1, self::LEVEL_DEPTH => 2, self::NLEFT => 3, self::NRIGHT => 4, self::ACTIVE => 5, self::DATE_ADD => 6, self::DATE_UPD => 7, self::POSITION => 8, ),
		BasePeer::TYPE_RAW_COLNAME => array ('ID_CATEGORY' => 0, 'ID_PARENT' => 1, 'LEVEL_DEPTH' => 2, 'NLEFT' => 3, 'NRIGHT' => 4, 'ACTIVE' => 5, 'DATE_ADD' => 6, 'DATE_UPD' => 7, 'POSITION' => 8, ),
		BasePeer::TYPE_FIELDNAME => array ('id_category' => 0, 'id_parent' => 1, 'level_depth' => 2, 'nleft' => 3, 'nright' => 4, 'active' => 5, 'date_add' => 6, 'date_upd' => 7, 'position' => 8, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, )
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
	 * @param      string $column The column name for current table. (i.e. Oops_Model_CategoryPeer::COLUMN_NAME).
	 * @return     string
	 */
	public static function alias($alias, $column)
	{
		return str_replace(Oops_Model_CategoryPeer::TABLE_NAME.'.', $alias.'.', $column);
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
			$criteria->addSelectColumn(Oops_Model_CategoryPeer::ID_CATEGORY);
			$criteria->addSelectColumn(Oops_Model_CategoryPeer::ID_PARENT);
			$criteria->addSelectColumn(Oops_Model_CategoryPeer::LEVEL_DEPTH);
			$criteria->addSelectColumn(Oops_Model_CategoryPeer::NLEFT);
			$criteria->addSelectColumn(Oops_Model_CategoryPeer::NRIGHT);
			$criteria->addSelectColumn(Oops_Model_CategoryPeer::ACTIVE);
			$criteria->addSelectColumn(Oops_Model_CategoryPeer::DATE_ADD);
			$criteria->addSelectColumn(Oops_Model_CategoryPeer::DATE_UPD);
			$criteria->addSelectColumn(Oops_Model_CategoryPeer::POSITION);
		} else {
			$criteria->addSelectColumn($alias . '.ID_CATEGORY');
			$criteria->addSelectColumn($alias . '.ID_PARENT');
			$criteria->addSelectColumn($alias . '.LEVEL_DEPTH');
			$criteria->addSelectColumn($alias . '.NLEFT');
			$criteria->addSelectColumn($alias . '.NRIGHT');
			$criteria->addSelectColumn($alias . '.ACTIVE');
			$criteria->addSelectColumn($alias . '.DATE_ADD');
			$criteria->addSelectColumn($alias . '.DATE_UPD');
			$criteria->addSelectColumn($alias . '.POSITION');
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
		$criteria->setPrimaryTableName(Oops_Model_CategoryPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			Oops_Model_CategoryPeer::addSelectColumns($criteria);
		}

		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
		$criteria->setDbName(self::DATABASE_NAME); // Set the correct dbName

		if ($con === null) {
			$con = Propel::getConnection(Oops_Model_CategoryPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
	 * @return     Oops_Model_Category
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
	{
		$critcopy = clone $criteria;
		$critcopy->setLimit(1);
		$objects = Oops_Model_CategoryPeer::doSelect($critcopy, $con);
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
		return Oops_Model_CategoryPeer::populateObjects(Oops_Model_CategoryPeer::doSelectStmt($criteria, $con));
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
			$con = Propel::getConnection(Oops_Model_CategoryPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		if (!$criteria->hasSelectClause()) {
			$criteria = clone $criteria;
			Oops_Model_CategoryPeer::addSelectColumns($criteria);
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
	 * @param      Oops_Model_Category $value A Oops_Model_Category object.
	 * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
	 */
	public static function addInstanceToPool($obj, $key = null)
	{
		if (Propel::isInstancePoolingEnabled()) {
			if ($key === null) {
				$key = (string) $obj->getIdCategory();
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
	 * @param      mixed $value A Oops_Model_Category object or a primary key value.
	 */
	public static function removeInstanceFromPool($value)
	{
		if (Propel::isInstancePoolingEnabled() && $value !== null) {
			if (is_object($value) && $value instanceof Oops_Model_Category) {
				$key = (string) $value->getIdCategory();
			} elseif (is_scalar($value)) {
				// assume we've been passed a primary key
				$key = (string) $value;
			} else {
				$e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Oops_Model_Category object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
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
	 * @return     Oops_Model_Category Found object or NULL if 1) no instance exists for specified key or 2) instance pooling has been disabled.
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
	 * Method to invalidate the instance pool of all tables related to djland_category
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
		$cls = Oops_Model_CategoryPeer::getOMClass(false);
		// populate the object(s)
		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key = Oops_Model_CategoryPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj = Oops_Model_CategoryPeer::getInstanceFromPool($key))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj->hydrate($row, 0, true); // rehydrate
				$results[] = $obj;
			} else {
				$obj = new $cls();
				$obj->hydrate($row);
				$results[] = $obj;
				Oops_Model_CategoryPeer::addInstanceToPool($obj, $key);
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
	 * @return     array (Oops_Model_Category object, last column rank)
	 */
	public static function populateObject($row, $startcol = 0)
	{
		$key = Oops_Model_CategoryPeer::getPrimaryKeyHashFromRow($row, $startcol);
		if (null !== ($obj = Oops_Model_CategoryPeer::getInstanceFromPool($key))) {
			// We no longer rehydrate the object, since this can cause data loss.
			// See http://www.propelorm.org/ticket/509
			// $obj->hydrate($row, $startcol, true); // rehydrate
			$col = $startcol + Oops_Model_CategoryPeer::NUM_HYDRATE_COLUMNS;
		} else {
			$cls = Oops_Model_CategoryPeer::OM_CLASS;
			$obj = new $cls();
			$col = $obj->hydrate($row, $startcol);
			Oops_Model_CategoryPeer::addInstanceToPool($obj, $key);
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
	  $dbMap = Propel::getDatabaseMap(Oops_Model_Base_CategoryPeer::DATABASE_NAME);
	  if (!$dbMap->hasTable(Oops_Model_Base_CategoryPeer::TABLE_NAME))
	  {
	    $dbMap->addTableObject(new Oops_Model_CategoryTableMap());
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
		return $withPrefix ? Oops_Model_CategoryPeer::CLASS_DEFAULT : Oops_Model_CategoryPeer::OM_CLASS;
	}

	/**
	 * Performs an INSERT on the database, given a Oops_Model_Category or Criteria object.
	 *
	 * @param      mixed $values Criteria or Oops_Model_Category object containing data that is used to create the INSERT statement.
	 * @param      PropelPDO $con the PropelPDO connection to use
	 * @return     mixed The new primary key.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doInsert($values, PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(Oops_Model_CategoryPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; // rename for clarity
		} else {
			$criteria = $values->buildCriteria(); // build Criteria from Oops_Model_Category object
		}

		if ($criteria->containsKey(Oops_Model_CategoryPeer::ID_CATEGORY) && $criteria->keyContainsValue(Oops_Model_CategoryPeer::ID_CATEGORY) ) {
			throw new PropelException('Cannot insert a value for auto-increment primary key ('.Oops_Model_CategoryPeer::ID_CATEGORY.')');
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
	 * Performs an UPDATE on the database, given a Oops_Model_Category or Criteria object.
	 *
	 * @param      mixed $values Criteria or Oops_Model_Category object containing data that is used to create the UPDATE statement.
	 * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
	 * @return     int The number of affected rows (if supported by underlying database driver).
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doUpdate($values, PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(Oops_Model_CategoryPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$selectCriteria = new Criteria(self::DATABASE_NAME);

		if ($values instanceof Criteria) {
			$criteria = clone $values; // rename for clarity

			$comparison = $criteria->getComparison(Oops_Model_CategoryPeer::ID_CATEGORY);
			$value = $criteria->remove(Oops_Model_CategoryPeer::ID_CATEGORY);
			if ($value) {
				$selectCriteria->add(Oops_Model_CategoryPeer::ID_CATEGORY, $value, $comparison);
			} else {
				$selectCriteria->setPrimaryTableName(Oops_Model_CategoryPeer::TABLE_NAME);
			}

		} else { // $values is Oops_Model_Category object
			$criteria = $values->buildCriteria(); // gets full criteria
			$selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
		}

		// set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		return BasePeer::doUpdate($selectCriteria, $criteria, $con);
	}

	/**
	 * Deletes all rows from the djland_category table.
	 *
	 * @param      PropelPDO $con the connection to use
	 * @return     int The number of affected rows (if supported by underlying database driver).
	 */
	public static function doDeleteAll(PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(Oops_Model_CategoryPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}
		$affectedRows = 0; // initialize var to track total num of affected rows
		try {
			// use transaction because $criteria could contain info
			// for more than one table or we could emulating ON DELETE CASCADE, etc.
			$con->beginTransaction();
			$affectedRows += BasePeer::doDeleteAll(Oops_Model_CategoryPeer::TABLE_NAME, $con, Oops_Model_CategoryPeer::DATABASE_NAME);
			// Because this db requires some delete cascade/set null emulation, we have to
			// clear the cached instance *after* the emulation has happened (since
			// instances get re-added by the select statement contained therein).
			Oops_Model_CategoryPeer::clearInstancePool();
			Oops_Model_CategoryPeer::clearRelatedInstancePool();
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Performs a DELETE on the database, given a Oops_Model_Category or Criteria object OR a primary key value.
	 *
	 * @param      mixed $values Criteria or Oops_Model_Category object or primary key or array of primary keys
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
			$con = Propel::getConnection(Oops_Model_CategoryPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		if ($values instanceof Criteria) {
			// invalidate the cache for all objects of this type, since we have no
			// way of knowing (without running a query) what objects should be invalidated
			// from the cache based on this Criteria.
			Oops_Model_CategoryPeer::clearInstancePool();
			// rename for clarity
			$criteria = clone $values;
		} elseif ($values instanceof Oops_Model_Category) { // it's a model object
			// invalidate the cache for this single object
			Oops_Model_CategoryPeer::removeInstanceFromPool($values);
			// create criteria based on pk values
			$criteria = $values->buildPkeyCriteria();
		} else { // it's a primary key, or an array of pks
			$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(Oops_Model_CategoryPeer::ID_CATEGORY, (array) $values, Criteria::IN);
			// invalidate the cache for this object(s)
			foreach ((array) $values as $singleval) {
				Oops_Model_CategoryPeer::removeInstanceFromPool($singleval);
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
			Oops_Model_CategoryPeer::clearRelatedInstancePool();
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Validates all modified columns of given Oops_Model_Category object.
	 * If parameter $columns is either a single column name or an array of column names
	 * than only those columns are validated.
	 *
	 * NOTICE: This does not apply to primary or foreign keys for now.
	 *
	 * @param      Oops_Model_Category $obj The object to validate.
	 * @param      mixed $cols Column name or array of column names.
	 *
	 * @return     mixed TRUE if all columns are valid or the error message of the first invalid column.
	 */
	public static function doValidate($obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(Oops_Model_CategoryPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(Oops_Model_CategoryPeer::TABLE_NAME);

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

		return BasePeer::doValidate(Oops_Model_CategoryPeer::DATABASE_NAME, Oops_Model_CategoryPeer::TABLE_NAME, $columns);
	}

	/**
	 * Retrieve a single object by pkey.
	 *
	 * @param      int $pk the primary key.
	 * @param      PropelPDO $con the connection to use
	 * @return     Oops_Model_Category
	 */
	public static function retrieveByPK($pk, PropelPDO $con = null)
	{

		if (null !== ($obj = Oops_Model_CategoryPeer::getInstanceFromPool((string) $pk))) {
			return $obj;
		}

		if ($con === null) {
			$con = Propel::getConnection(Oops_Model_CategoryPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria = new Criteria(Oops_Model_CategoryPeer::DATABASE_NAME);
		$criteria->add(Oops_Model_CategoryPeer::ID_CATEGORY, $pk);

		$v = Oops_Model_CategoryPeer::doSelect($criteria, $con);

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
			$con = Propel::getConnection(Oops_Model_CategoryPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$objs = null;
		if (empty($pks)) {
			$objs = array();
		} else {
			$criteria = new Criteria(Oops_Model_CategoryPeer::DATABASE_NAME);
			$criteria->add(Oops_Model_CategoryPeer::ID_CATEGORY, $pks, Criteria::IN);
			$objs = Oops_Model_CategoryPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

	// nested_set behavior
	
	/**
	 * Returns the root node for a given scope
	 *
	 * @param      PropelPDO $con	Connection to use.
	 * @return     Oops_Model_Category			Propel object for root node
	 */
	public static function retrieveRoot(PropelPDO $con = null)
	{
		$c = new Criteria(Oops_Model_CategoryPeer::DATABASE_NAME);
		$c->add(Oops_Model_CategoryPeer::LEFT_COL, 1, Criteria::EQUAL);
	
		return Oops_Model_CategoryPeer::doSelectOne($c, $con);
	}
	
	/**
	 * Returns the whole tree node for a given scope
	 *
	 * @param      Criteria $criteria	Optional Criteria to filter the query
	 * @param      PropelPDO $con	Connection to use.
	 * @return     Oops_Model_Category			Propel object for root node
	 */
	public static function retrieveTree(Criteria $criteria = null, PropelPDO $con = null)
	{
		if ($criteria === null) {
			$criteria = new Criteria(Oops_Model_CategoryPeer::DATABASE_NAME);
		}
		$criteria->addAscendingOrderByColumn(Oops_Model_CategoryPeer::LEFT_COL);
	
		return Oops_Model_CategoryPeer::doSelect($criteria, $con);
	}
	
	/**
	 * Tests if node is valid
	 *
	 * @param      Oops_Model_Category $node	Propel object for src node
	 * @return     bool
	 */
	public static function isValid(Oops_Model_Category $node = null)
	{
		if (is_object($node) && $node->getRightValue() > $node->getLeftValue()) {
			return true;
		} else {
			return false;
		}
	}
	
	/**
	 * Delete an entire tree
	 * 
	 * @param      PropelPDO $con	Connection to use.
	 *
	 * @return     int  The number of deleted nodes
	 */
	public static function deleteTree(PropelPDO $con = null)
	{
		return Oops_Model_CategoryPeer::doDeleteAll($con);
	}
	
	/**
	 * Adds $delta to all L and R values that are >= $first and <= $last.
	 * '$delta' can also be negative.
	 *
	 * @param      int $delta		Value to be shifted by, can be negative
	 * @param      int $first		First node to be shifted
	 * @param      int $last			Last node to be shifted (optional)
	 * @param      PropelPDO $con		Connection to use.
	 */
	public static function shiftRLValues($delta, $first, $last = null, PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(Oops_Model_CategoryPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}
	
		// Shift left column values
		$whereCriteria = new Criteria(Oops_Model_CategoryPeer::DATABASE_NAME);
		$criterion = $whereCriteria->getNewCriterion(Oops_Model_CategoryPeer::LEFT_COL, $first, Criteria::GREATER_EQUAL);
		if (null !== $last) {
			$criterion->addAnd($whereCriteria->getNewCriterion(Oops_Model_CategoryPeer::LEFT_COL, $last, Criteria::LESS_EQUAL));
		}
		$whereCriteria->add($criterion);
	
		$valuesCriteria = new Criteria(Oops_Model_CategoryPeer::DATABASE_NAME);
		$valuesCriteria->add(Oops_Model_CategoryPeer::LEFT_COL, array('raw' => Oops_Model_CategoryPeer::LEFT_COL . ' + ?', 'value' => $delta), Criteria::CUSTOM_EQUAL);
	
		BasePeer::doUpdate($whereCriteria, $valuesCriteria, $con);
	
		// Shift right column values
		$whereCriteria = new Criteria(Oops_Model_CategoryPeer::DATABASE_NAME);
		$criterion = $whereCriteria->getNewCriterion(Oops_Model_CategoryPeer::RIGHT_COL, $first, Criteria::GREATER_EQUAL);
		if (null !== $last) {
			$criterion->addAnd($whereCriteria->getNewCriterion(Oops_Model_CategoryPeer::RIGHT_COL, $last, Criteria::LESS_EQUAL));
		}
		$whereCriteria->add($criterion);
	
		$valuesCriteria = new Criteria(Oops_Model_CategoryPeer::DATABASE_NAME);
		$valuesCriteria->add(Oops_Model_CategoryPeer::RIGHT_COL, array('raw' => Oops_Model_CategoryPeer::RIGHT_COL . ' + ?', 'value' => $delta), Criteria::CUSTOM_EQUAL);
	
		BasePeer::doUpdate($whereCriteria, $valuesCriteria, $con);
	}
	
	/**
	 * Adds $delta to level for nodes having left value >= $first and right value <= $last.
	 * '$delta' can also be negative.
	 *
	 * @param      int $delta		Value to be shifted by, can be negative
	 * @param      int $first		First node to be shifted
	 * @param      int $last			Last node to be shifted
	 * @param      PropelPDO $con		Connection to use.
	 */
	public static function shiftLevel($delta, $first, $last, PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(Oops_Model_CategoryPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}
	
		$whereCriteria = new Criteria(Oops_Model_CategoryPeer::DATABASE_NAME);
		$whereCriteria->add(Oops_Model_CategoryPeer::LEFT_COL, $first, Criteria::GREATER_EQUAL);
		$whereCriteria->add(Oops_Model_CategoryPeer::RIGHT_COL, $last, Criteria::LESS_EQUAL);
	
		$valuesCriteria = new Criteria(Oops_Model_CategoryPeer::DATABASE_NAME);
		$valuesCriteria->add(Oops_Model_CategoryPeer::LEVEL_COL, array('raw' => Oops_Model_CategoryPeer::LEVEL_COL . ' + ?', 'value' => $delta), Criteria::CUSTOM_EQUAL);
	
		BasePeer::doUpdate($whereCriteria, $valuesCriteria, $con);
	}
	
	/**
	 * Reload all already loaded nodes to sync them with updated db
	 *
	 * @param      Oops_Model_Category $prune		Object to prune from the update
	 * @param      PropelPDO $con		Connection to use.
	 */
	public static function updateLoadedNodes($prune = null, PropelPDO $con = null)
	{
		if (Propel::isInstancePoolingEnabled()) {
			$keys = array();
			foreach (Oops_Model_CategoryPeer::$instances as $obj) {
				if (!$prune || !$prune->equals($obj)) {
					$keys[] = $obj->getPrimaryKey();
				}
			}
	
			if (!empty($keys)) {
				// We don't need to alter the object instance pool; we're just modifying these ones
				// already in the pool.
				$criteria = new Criteria(Oops_Model_CategoryPeer::DATABASE_NAME);
				$criteria->add(Oops_Model_CategoryPeer::ID_CATEGORY, $keys, Criteria::IN);
				$stmt = Oops_Model_CategoryPeer::doSelectStmt($criteria, $con);
				while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
					$key = Oops_Model_CategoryPeer::getPrimaryKeyHashFromRow($row, 0);
					if (null !== ($object = Oops_Model_CategoryPeer::getInstanceFromPool($key))) {
						$object->setLevel($row[2]);
						$object->clearNestedSetChildren();
						$object->setLeftValue($row[3]);
						$object->setRightValue($row[4]);
					}
				}
				$stmt->closeCursor();
			}
		}
	}
	
	/**
	 * Update the tree to allow insertion of a leaf at the specified position
	 *
	 * @param      int $left	left column value
	 * @param      mixed $prune	Object to prune from the shift
	 * @param      PropelPDO $con	Connection to use.
	 */
	public static function makeRoomForLeaf($left, $prune = null, PropelPDO $con = null)
	{
		// Update database nodes
		Oops_Model_CategoryPeer::shiftRLValues(2, $left, null, $con);
	
		// Update all loaded nodes
		Oops_Model_CategoryPeer::updateLoadedNodes($prune, $con);
	}
	
	/**
	 * Update the tree to allow insertion of a leaf at the specified position
	 *
	 * @param      PropelPDO $con	Connection to use.
	 */
	public static function fixLevels(PropelPDO $con = null)
	{
		$c = new Criteria();
		$c->addAscendingOrderByColumn(Oops_Model_CategoryPeer::LEFT_COL);
		$stmt = Oops_Model_CategoryPeer::doSelectStmt($c, $con);
		
		// set the class once to avoid overhead in the loop
		$cls = Oops_Model_CategoryPeer::getOMClass(false);
		$level = null;
		// iterate over the statement
		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
	
			// hydrate object
			$key = Oops_Model_CategoryPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null === ($obj = Oops_Model_CategoryPeer::getInstanceFromPool($key))) {
				$obj = new $cls();
				$obj->hydrate($row);
				Oops_Model_CategoryPeer::addInstanceToPool($obj, $key);
			}
	
			// compute level
			// Algorithm shamelessly stolen from sfPropelActAsNestedSetBehaviorPlugin
			// Probably authored by Tristan Rivoallan
			if ($level === null) {
				$level = 0;
				$i = 0;
				$prev = array($obj->getRightValue());
			} else {
				while ($obj->getRightValue() > $prev[$i]) {
					$i--;
				}
				$level = ++$i;
				$prev[$i] = $obj->getRightValue();
			}
	
			// update level in node if necessary
			if ($obj->getLevel() !== $level) {
				$obj->setLevel($level);
				$obj->save($con);
			}
		}
		$stmt->closeCursor();
	}

} // Oops_Model_Base_CategoryPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
Oops_Model_Base_CategoryPeer::buildTableMap();

