<?php


/**
 * Base class that represents a query for the 'djland_webservice_account' table.
 *
 * 
 *
 * @method     Oops_Model_WebserviceAccountQuery orderByIdWebserviceAccount($order = Criteria::ASC) Order by the id_webservice_account column
 * @method     Oops_Model_WebserviceAccountQuery orderByKey($order = Criteria::ASC) Order by the key column
 * @method     Oops_Model_WebserviceAccountQuery orderByDescription($order = Criteria::ASC) Order by the description column
 * @method     Oops_Model_WebserviceAccountQuery orderByClassName($order = Criteria::ASC) Order by the class_name column
 * @method     Oops_Model_WebserviceAccountQuery orderByIsModule($order = Criteria::ASC) Order by the is_module column
 * @method     Oops_Model_WebserviceAccountQuery orderByModuleName($order = Criteria::ASC) Order by the module_name column
 * @method     Oops_Model_WebserviceAccountQuery orderByActive($order = Criteria::ASC) Order by the active column
 *
 * @method     Oops_Model_WebserviceAccountQuery groupByIdWebserviceAccount() Group by the id_webservice_account column
 * @method     Oops_Model_WebserviceAccountQuery groupByKey() Group by the key column
 * @method     Oops_Model_WebserviceAccountQuery groupByDescription() Group by the description column
 * @method     Oops_Model_WebserviceAccountQuery groupByClassName() Group by the class_name column
 * @method     Oops_Model_WebserviceAccountQuery groupByIsModule() Group by the is_module column
 * @method     Oops_Model_WebserviceAccountQuery groupByModuleName() Group by the module_name column
 * @method     Oops_Model_WebserviceAccountQuery groupByActive() Group by the active column
 *
 * @method     Oops_Model_WebserviceAccountQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     Oops_Model_WebserviceAccountQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     Oops_Model_WebserviceAccountQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     Oops_Model_WebserviceAccount findOne(PropelPDO $con = null) Return the first Oops_Model_WebserviceAccount matching the query
 * @method     Oops_Model_WebserviceAccount findOneOrCreate(PropelPDO $con = null) Return the first Oops_Model_WebserviceAccount matching the query, or a new Oops_Model_WebserviceAccount object populated from the query conditions when no match is found
 *
 * @method     Oops_Model_WebserviceAccount findOneByIdWebserviceAccount(int $id_webservice_account) Return the first Oops_Model_WebserviceAccount filtered by the id_webservice_account column
 * @method     Oops_Model_WebserviceAccount findOneByKey(string $key) Return the first Oops_Model_WebserviceAccount filtered by the key column
 * @method     Oops_Model_WebserviceAccount findOneByDescription(string $description) Return the first Oops_Model_WebserviceAccount filtered by the description column
 * @method     Oops_Model_WebserviceAccount findOneByClassName(string $class_name) Return the first Oops_Model_WebserviceAccount filtered by the class_name column
 * @method     Oops_Model_WebserviceAccount findOneByIsModule(int $is_module) Return the first Oops_Model_WebserviceAccount filtered by the is_module column
 * @method     Oops_Model_WebserviceAccount findOneByModuleName(string $module_name) Return the first Oops_Model_WebserviceAccount filtered by the module_name column
 * @method     Oops_Model_WebserviceAccount findOneByActive(int $active) Return the first Oops_Model_WebserviceAccount filtered by the active column
 *
 * @method     array findByIdWebserviceAccount(int $id_webservice_account) Return Oops_Model_WebserviceAccount objects filtered by the id_webservice_account column
 * @method     array findByKey(string $key) Return Oops_Model_WebserviceAccount objects filtered by the key column
 * @method     array findByDescription(string $description) Return Oops_Model_WebserviceAccount objects filtered by the description column
 * @method     array findByClassName(string $class_name) Return Oops_Model_WebserviceAccount objects filtered by the class_name column
 * @method     array findByIsModule(int $is_module) Return Oops_Model_WebserviceAccount objects filtered by the is_module column
 * @method     array findByModuleName(string $module_name) Return Oops_Model_WebserviceAccount objects filtered by the module_name column
 * @method     array findByActive(int $active) Return Oops_Model_WebserviceAccount objects filtered by the active column
 *
 * @package    propel.generator.prestashop.om
 */
abstract class Oops_Model_Base_WebserviceAccountQuery extends ModelCriteria
{
	
	/**
	 * Initializes internal state of Oops_Model_Base_WebserviceAccountQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'prestashop', $modelName = 'Oops_Model_WebserviceAccount', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new Oops_Model_WebserviceAccountQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    Oops_Model_WebserviceAccountQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof Oops_Model_WebserviceAccountQuery) {
			return $criteria;
		}
		$query = new Oops_Model_WebserviceAccountQuery();
		if (null !== $modelAlias) {
			$query->setModelAlias($modelAlias);
		}
		if ($criteria instanceof Criteria) {
			$query->mergeWith($criteria);
		}
		return $query;
	}

	/**
	 * Find object by primary key.
	 * Propel uses the instance pool to skip the database if the object exists.
	 * Go fast if the query is untouched.
	 *
	 * <code>
	 * $obj  = $c->findPk(12, $con);
	 * </code>
	 *
	 * @param     mixed $key Primary key to use for the query
	 * @param     PropelPDO $con an optional connection object
	 *
	 * @return    Oops_Model_WebserviceAccount|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ($key === null) {
			return null;
		}
		if ((null !== ($obj = Oops_Model_WebserviceAccountPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
			// the object is alredy in the instance pool
			return $obj;
		}
		if ($con === null) {
			$con = Propel::getConnection(Oops_Model_WebserviceAccountPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}
		$this->basePreSelect($con);
		if ($this->formatter || $this->modelAlias || $this->with || $this->select
		 || $this->selectColumns || $this->asColumns || $this->selectModifiers
		 || $this->map || $this->having || $this->joins) {
			return $this->findPkComplex($key, $con);
		} else {
			return $this->findPkSimple($key, $con);
		}
	}

	/**
	 * Find object by primary key using raw SQL to go fast.
	 * Bypass doSelect() and the object formatter by using generated code.
	 *
	 * @param     mixed $key Primary key to use for the query
	 * @param     PropelPDO $con A connection object
	 *
	 * @return    Oops_Model_WebserviceAccount A model object, or null if the key is not found
	 */
	protected function findPkSimple($key, $con)
	{
		$sql = 'SELECT `ID_WEBSERVICE_ACCOUNT`, `KEY`, `DESCRIPTION`, `CLASS_NAME`, `IS_MODULE`, `MODULE_NAME`, `ACTIVE` FROM `djland_webservice_account` WHERE `ID_WEBSERVICE_ACCOUNT` = :p0';
		try {
			$stmt = $con->prepare($sql);
			$stmt->bindValue(':p0', $key, PDO::PARAM_INT);
			$stmt->execute();
		} catch (Exception $e) {
			Propel::log($e->getMessage(), Propel::LOG_ERR);
			throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
		}
		$obj = null;
		if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$obj = new Oops_Model_WebserviceAccount();
			$obj->hydrate($row);
			Oops_Model_WebserviceAccountPeer::addInstanceToPool($obj, (string) $row[0]);
		}
		$stmt->closeCursor();

		return $obj;
	}

	/**
	 * Find object by primary key.
	 *
	 * @param     mixed $key Primary key to use for the query
	 * @param     PropelPDO $con A connection object
	 *
	 * @return    Oops_Model_WebserviceAccount|array|mixed the result, formatted by the current formatter
	 */
	protected function findPkComplex($key, $con)
	{
		// As the query uses a PK condition, no limit(1) is necessary.
		$criteria = $this->isKeepQuery() ? clone $this : $this;
		$stmt = $criteria
			->filterByPrimaryKey($key)
			->doSelect($con);
		return $criteria->getFormatter()->init($criteria)->formatOne($stmt);
	}

	/**
	 * Find objects by primary key
	 * <code>
	 * $objs = $c->findPks(array(12, 56, 832), $con);
	 * </code>
	 * @param     array $keys Primary keys to use for the query
	 * @param     PropelPDO $con an optional connection object
	 *
	 * @return    PropelObjectCollection|array|mixed the list of results, formatted by the current formatter
	 */
	public function findPks($keys, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection($this->getDbName(), Propel::CONNECTION_READ);
		}
		$this->basePreSelect($con);
		$criteria = $this->isKeepQuery() ? clone $this : $this;
		$stmt = $criteria
			->filterByPrimaryKeys($keys)
			->doSelect($con);
		return $criteria->getFormatter()->init($criteria)->format($stmt);
	}

	/**
	 * Filter the query by primary key
	 *
	 * @param     mixed $key Primary key to use for the query
	 *
	 * @return    Oops_Model_WebserviceAccountQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(Oops_Model_WebserviceAccountPeer::ID_WEBSERVICE_ACCOUNT, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    Oops_Model_WebserviceAccountQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(Oops_Model_WebserviceAccountPeer::ID_WEBSERVICE_ACCOUNT, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id_webservice_account column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByIdWebserviceAccount(1234); // WHERE id_webservice_account = 1234
	 * $query->filterByIdWebserviceAccount(array(12, 34)); // WHERE id_webservice_account IN (12, 34)
	 * $query->filterByIdWebserviceAccount(array('min' => 12)); // WHERE id_webservice_account > 12
	 * </code>
	 *
	 * @param     mixed $idWebserviceAccount The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_WebserviceAccountQuery The current query, for fluid interface
	 */
	public function filterByIdWebserviceAccount($idWebserviceAccount = null, $comparison = null)
	{
		if (is_array($idWebserviceAccount) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(Oops_Model_WebserviceAccountPeer::ID_WEBSERVICE_ACCOUNT, $idWebserviceAccount, $comparison);
	}

	/**
	 * Filter the query on the key column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByKey('fooValue');   // WHERE key = 'fooValue'
	 * $query->filterByKey('%fooValue%'); // WHERE key LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $key The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_WebserviceAccountQuery The current query, for fluid interface
	 */
	public function filterByKey($key = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($key)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $key)) {
				$key = str_replace('*', '%', $key);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(Oops_Model_WebserviceAccountPeer::KEY, $key, $comparison);
	}

	/**
	 * Filter the query on the description column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByDescription('fooValue');   // WHERE description = 'fooValue'
	 * $query->filterByDescription('%fooValue%'); // WHERE description LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $description The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_WebserviceAccountQuery The current query, for fluid interface
	 */
	public function filterByDescription($description = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($description)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $description)) {
				$description = str_replace('*', '%', $description);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(Oops_Model_WebserviceAccountPeer::DESCRIPTION, $description, $comparison);
	}

	/**
	 * Filter the query on the class_name column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByClassName('fooValue');   // WHERE class_name = 'fooValue'
	 * $query->filterByClassName('%fooValue%'); // WHERE class_name LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $className The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_WebserviceAccountQuery The current query, for fluid interface
	 */
	public function filterByClassName($className = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($className)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $className)) {
				$className = str_replace('*', '%', $className);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(Oops_Model_WebserviceAccountPeer::CLASS_NAME, $className, $comparison);
	}

	/**
	 * Filter the query on the is_module column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByIsModule(1234); // WHERE is_module = 1234
	 * $query->filterByIsModule(array(12, 34)); // WHERE is_module IN (12, 34)
	 * $query->filterByIsModule(array('min' => 12)); // WHERE is_module > 12
	 * </code>
	 *
	 * @param     mixed $isModule The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_WebserviceAccountQuery The current query, for fluid interface
	 */
	public function filterByIsModule($isModule = null, $comparison = null)
	{
		if (is_array($isModule)) {
			$useMinMax = false;
			if (isset($isModule['min'])) {
				$this->addUsingAlias(Oops_Model_WebserviceAccountPeer::IS_MODULE, $isModule['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($isModule['max'])) {
				$this->addUsingAlias(Oops_Model_WebserviceAccountPeer::IS_MODULE, $isModule['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_WebserviceAccountPeer::IS_MODULE, $isModule, $comparison);
	}

	/**
	 * Filter the query on the module_name column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByModuleName('fooValue');   // WHERE module_name = 'fooValue'
	 * $query->filterByModuleName('%fooValue%'); // WHERE module_name LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $moduleName The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_WebserviceAccountQuery The current query, for fluid interface
	 */
	public function filterByModuleName($moduleName = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($moduleName)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $moduleName)) {
				$moduleName = str_replace('*', '%', $moduleName);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(Oops_Model_WebserviceAccountPeer::MODULE_NAME, $moduleName, $comparison);
	}

	/**
	 * Filter the query on the active column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByActive(1234); // WHERE active = 1234
	 * $query->filterByActive(array(12, 34)); // WHERE active IN (12, 34)
	 * $query->filterByActive(array('min' => 12)); // WHERE active > 12
	 * </code>
	 *
	 * @param     mixed $active The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_WebserviceAccountQuery The current query, for fluid interface
	 */
	public function filterByActive($active = null, $comparison = null)
	{
		if (is_array($active)) {
			$useMinMax = false;
			if (isset($active['min'])) {
				$this->addUsingAlias(Oops_Model_WebserviceAccountPeer::ACTIVE, $active['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($active['max'])) {
				$this->addUsingAlias(Oops_Model_WebserviceAccountPeer::ACTIVE, $active['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_WebserviceAccountPeer::ACTIVE, $active, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     Oops_Model_WebserviceAccount $webserviceAccount Object to remove from the list of results
	 *
	 * @return    Oops_Model_WebserviceAccountQuery The current query, for fluid interface
	 */
	public function prune($webserviceAccount = null)
	{
		if ($webserviceAccount) {
			$this->addUsingAlias(Oops_Model_WebserviceAccountPeer::ID_WEBSERVICE_ACCOUNT, $webserviceAccount->getIdWebserviceAccount(), Criteria::NOT_EQUAL);
		}

		return $this;
	}

} // Oops_Model_Base_WebserviceAccountQuery