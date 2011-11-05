<?php


/**
 * Base class that represents a query for the 'djland_webservice_permission' table.
 *
 * 
 *
 * @method     Oops_Model_WebservicePermissionQuery orderByIdWebservicePermission($order = Criteria::ASC) Order by the id_webservice_permission column
 * @method     Oops_Model_WebservicePermissionQuery orderByResource($order = Criteria::ASC) Order by the resource column
 * @method     Oops_Model_WebservicePermissionQuery orderByMethod($order = Criteria::ASC) Order by the method column
 * @method     Oops_Model_WebservicePermissionQuery orderByIdWebserviceAccount($order = Criteria::ASC) Order by the id_webservice_account column
 *
 * @method     Oops_Model_WebservicePermissionQuery groupByIdWebservicePermission() Group by the id_webservice_permission column
 * @method     Oops_Model_WebservicePermissionQuery groupByResource() Group by the resource column
 * @method     Oops_Model_WebservicePermissionQuery groupByMethod() Group by the method column
 * @method     Oops_Model_WebservicePermissionQuery groupByIdWebserviceAccount() Group by the id_webservice_account column
 *
 * @method     Oops_Model_WebservicePermissionQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     Oops_Model_WebservicePermissionQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     Oops_Model_WebservicePermissionQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     Oops_Model_WebservicePermission findOne(PropelPDO $con = null) Return the first Oops_Model_WebservicePermission matching the query
 * @method     Oops_Model_WebservicePermission findOneOrCreate(PropelPDO $con = null) Return the first Oops_Model_WebservicePermission matching the query, or a new Oops_Model_WebservicePermission object populated from the query conditions when no match is found
 *
 * @method     Oops_Model_WebservicePermission findOneByIdWebservicePermission(int $id_webservice_permission) Return the first Oops_Model_WebservicePermission filtered by the id_webservice_permission column
 * @method     Oops_Model_WebservicePermission findOneByResource(string $resource) Return the first Oops_Model_WebservicePermission filtered by the resource column
 * @method     Oops_Model_WebservicePermission findOneByMethod(string $method) Return the first Oops_Model_WebservicePermission filtered by the method column
 * @method     Oops_Model_WebservicePermission findOneByIdWebserviceAccount(int $id_webservice_account) Return the first Oops_Model_WebservicePermission filtered by the id_webservice_account column
 *
 * @method     array findByIdWebservicePermission(int $id_webservice_permission) Return Oops_Model_WebservicePermission objects filtered by the id_webservice_permission column
 * @method     array findByResource(string $resource) Return Oops_Model_WebservicePermission objects filtered by the resource column
 * @method     array findByMethod(string $method) Return Oops_Model_WebservicePermission objects filtered by the method column
 * @method     array findByIdWebserviceAccount(int $id_webservice_account) Return Oops_Model_WebservicePermission objects filtered by the id_webservice_account column
 *
 * @package    propel.generator.prestashop.om
 */
abstract class Oops_Model_Base_WebservicePermissionQuery extends ModelCriteria
{
	
	/**
	 * Initializes internal state of Oops_Model_Base_WebservicePermissionQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'prestashop', $modelName = 'Oops_Model_WebservicePermission', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new Oops_Model_WebservicePermissionQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    Oops_Model_WebservicePermissionQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof Oops_Model_WebservicePermissionQuery) {
			return $criteria;
		}
		$query = new Oops_Model_WebservicePermissionQuery();
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
	 * @return    Oops_Model_WebservicePermission|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ($key === null) {
			return null;
		}
		if ((null !== ($obj = Oops_Model_WebservicePermissionPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
			// the object is alredy in the instance pool
			return $obj;
		}
		if ($con === null) {
			$con = Propel::getConnection(Oops_Model_WebservicePermissionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
	 * @return    Oops_Model_WebservicePermission A model object, or null if the key is not found
	 */
	protected function findPkSimple($key, $con)
	{
		$sql = 'SELECT `ID_WEBSERVICE_PERMISSION`, `RESOURCE`, `METHOD`, `ID_WEBSERVICE_ACCOUNT` FROM `djland_webservice_permission` WHERE `ID_WEBSERVICE_PERMISSION` = :p0';
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
			$obj = new Oops_Model_WebservicePermission();
			$obj->hydrate($row);
			Oops_Model_WebservicePermissionPeer::addInstanceToPool($obj, (string) $row[0]);
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
	 * @return    Oops_Model_WebservicePermission|array|mixed the result, formatted by the current formatter
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
	 * @return    Oops_Model_WebservicePermissionQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(Oops_Model_WebservicePermissionPeer::ID_WEBSERVICE_PERMISSION, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    Oops_Model_WebservicePermissionQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(Oops_Model_WebservicePermissionPeer::ID_WEBSERVICE_PERMISSION, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id_webservice_permission column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByIdWebservicePermission(1234); // WHERE id_webservice_permission = 1234
	 * $query->filterByIdWebservicePermission(array(12, 34)); // WHERE id_webservice_permission IN (12, 34)
	 * $query->filterByIdWebservicePermission(array('min' => 12)); // WHERE id_webservice_permission > 12
	 * </code>
	 *
	 * @param     mixed $idWebservicePermission The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_WebservicePermissionQuery The current query, for fluid interface
	 */
	public function filterByIdWebservicePermission($idWebservicePermission = null, $comparison = null)
	{
		if (is_array($idWebservicePermission) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(Oops_Model_WebservicePermissionPeer::ID_WEBSERVICE_PERMISSION, $idWebservicePermission, $comparison);
	}

	/**
	 * Filter the query on the resource column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByResource('fooValue');   // WHERE resource = 'fooValue'
	 * $query->filterByResource('%fooValue%'); // WHERE resource LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $resource The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_WebservicePermissionQuery The current query, for fluid interface
	 */
	public function filterByResource($resource = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($resource)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $resource)) {
				$resource = str_replace('*', '%', $resource);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(Oops_Model_WebservicePermissionPeer::RESOURCE, $resource, $comparison);
	}

	/**
	 * Filter the query on the method column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByMethod('fooValue');   // WHERE method = 'fooValue'
	 * $query->filterByMethod('%fooValue%'); // WHERE method LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $method The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_WebservicePermissionQuery The current query, for fluid interface
	 */
	public function filterByMethod($method = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($method)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $method)) {
				$method = str_replace('*', '%', $method);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(Oops_Model_WebservicePermissionPeer::METHOD, $method, $comparison);
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
	 * @return    Oops_Model_WebservicePermissionQuery The current query, for fluid interface
	 */
	public function filterByIdWebserviceAccount($idWebserviceAccount = null, $comparison = null)
	{
		if (is_array($idWebserviceAccount)) {
			$useMinMax = false;
			if (isset($idWebserviceAccount['min'])) {
				$this->addUsingAlias(Oops_Model_WebservicePermissionPeer::ID_WEBSERVICE_ACCOUNT, $idWebserviceAccount['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($idWebserviceAccount['max'])) {
				$this->addUsingAlias(Oops_Model_WebservicePermissionPeer::ID_WEBSERVICE_ACCOUNT, $idWebserviceAccount['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_WebservicePermissionPeer::ID_WEBSERVICE_ACCOUNT, $idWebserviceAccount, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     Oops_Model_WebservicePermission $webservicePermission Object to remove from the list of results
	 *
	 * @return    Oops_Model_WebservicePermissionQuery The current query, for fluid interface
	 */
	public function prune($webservicePermission = null)
	{
		if ($webservicePermission) {
			$this->addUsingAlias(Oops_Model_WebservicePermissionPeer::ID_WEBSERVICE_PERMISSION, $webservicePermission->getIdWebservicePermission(), Criteria::NOT_EQUAL);
		}

		return $this;
	}

} // Oops_Model_Base_WebservicePermissionQuery