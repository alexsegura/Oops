<?php


/**
 * Base class that represents a query for the 'djland_pagenotfound' table.
 *
 * 
 *
 * @method     Oops_Model_PagenotfoundQuery orderByIdPagenotfound($order = Criteria::ASC) Order by the id_pagenotfound column
 * @method     Oops_Model_PagenotfoundQuery orderByRequestUri($order = Criteria::ASC) Order by the request_uri column
 * @method     Oops_Model_PagenotfoundQuery orderByHttpReferer($order = Criteria::ASC) Order by the http_referer column
 * @method     Oops_Model_PagenotfoundQuery orderByDateAdd($order = Criteria::ASC) Order by the date_add column
 *
 * @method     Oops_Model_PagenotfoundQuery groupByIdPagenotfound() Group by the id_pagenotfound column
 * @method     Oops_Model_PagenotfoundQuery groupByRequestUri() Group by the request_uri column
 * @method     Oops_Model_PagenotfoundQuery groupByHttpReferer() Group by the http_referer column
 * @method     Oops_Model_PagenotfoundQuery groupByDateAdd() Group by the date_add column
 *
 * @method     Oops_Model_PagenotfoundQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     Oops_Model_PagenotfoundQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     Oops_Model_PagenotfoundQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     Oops_Model_Pagenotfound findOne(PropelPDO $con = null) Return the first Oops_Model_Pagenotfound matching the query
 * @method     Oops_Model_Pagenotfound findOneOrCreate(PropelPDO $con = null) Return the first Oops_Model_Pagenotfound matching the query, or a new Oops_Model_Pagenotfound object populated from the query conditions when no match is found
 *
 * @method     Oops_Model_Pagenotfound findOneByIdPagenotfound(int $id_pagenotfound) Return the first Oops_Model_Pagenotfound filtered by the id_pagenotfound column
 * @method     Oops_Model_Pagenotfound findOneByRequestUri(string $request_uri) Return the first Oops_Model_Pagenotfound filtered by the request_uri column
 * @method     Oops_Model_Pagenotfound findOneByHttpReferer(string $http_referer) Return the first Oops_Model_Pagenotfound filtered by the http_referer column
 * @method     Oops_Model_Pagenotfound findOneByDateAdd(string $date_add) Return the first Oops_Model_Pagenotfound filtered by the date_add column
 *
 * @method     array findByIdPagenotfound(int $id_pagenotfound) Return Oops_Model_Pagenotfound objects filtered by the id_pagenotfound column
 * @method     array findByRequestUri(string $request_uri) Return Oops_Model_Pagenotfound objects filtered by the request_uri column
 * @method     array findByHttpReferer(string $http_referer) Return Oops_Model_Pagenotfound objects filtered by the http_referer column
 * @method     array findByDateAdd(string $date_add) Return Oops_Model_Pagenotfound objects filtered by the date_add column
 *
 * @package    propel.generator.prestashop.om
 */
abstract class Oops_Model_Base_PagenotfoundQuery extends ModelCriteria
{
	
	/**
	 * Initializes internal state of Oops_Model_Base_PagenotfoundQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'prestashop', $modelName = 'Oops_Model_Pagenotfound', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new Oops_Model_PagenotfoundQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    Oops_Model_PagenotfoundQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof Oops_Model_PagenotfoundQuery) {
			return $criteria;
		}
		$query = new Oops_Model_PagenotfoundQuery();
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
	 * @return    Oops_Model_Pagenotfound|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ($key === null) {
			return null;
		}
		if ((null !== ($obj = Oops_Model_PagenotfoundPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
			// the object is alredy in the instance pool
			return $obj;
		}
		if ($con === null) {
			$con = Propel::getConnection(Oops_Model_PagenotfoundPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
	 * @return    Oops_Model_Pagenotfound A model object, or null if the key is not found
	 */
	protected function findPkSimple($key, $con)
	{
		$sql = 'SELECT `ID_PAGENOTFOUND`, `REQUEST_URI`, `HTTP_REFERER`, `DATE_ADD` FROM `djland_pagenotfound` WHERE `ID_PAGENOTFOUND` = :p0';
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
			$obj = new Oops_Model_Pagenotfound();
			$obj->hydrate($row);
			Oops_Model_PagenotfoundPeer::addInstanceToPool($obj, (string) $row[0]);
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
	 * @return    Oops_Model_Pagenotfound|array|mixed the result, formatted by the current formatter
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
	 * @return    Oops_Model_PagenotfoundQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(Oops_Model_PagenotfoundPeer::ID_PAGENOTFOUND, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    Oops_Model_PagenotfoundQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(Oops_Model_PagenotfoundPeer::ID_PAGENOTFOUND, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id_pagenotfound column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByIdPagenotfound(1234); // WHERE id_pagenotfound = 1234
	 * $query->filterByIdPagenotfound(array(12, 34)); // WHERE id_pagenotfound IN (12, 34)
	 * $query->filterByIdPagenotfound(array('min' => 12)); // WHERE id_pagenotfound > 12
	 * </code>
	 *
	 * @param     mixed $idPagenotfound The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_PagenotfoundQuery The current query, for fluid interface
	 */
	public function filterByIdPagenotfound($idPagenotfound = null, $comparison = null)
	{
		if (is_array($idPagenotfound) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(Oops_Model_PagenotfoundPeer::ID_PAGENOTFOUND, $idPagenotfound, $comparison);
	}

	/**
	 * Filter the query on the request_uri column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByRequestUri('fooValue');   // WHERE request_uri = 'fooValue'
	 * $query->filterByRequestUri('%fooValue%'); // WHERE request_uri LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $requestUri The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_PagenotfoundQuery The current query, for fluid interface
	 */
	public function filterByRequestUri($requestUri = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($requestUri)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $requestUri)) {
				$requestUri = str_replace('*', '%', $requestUri);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(Oops_Model_PagenotfoundPeer::REQUEST_URI, $requestUri, $comparison);
	}

	/**
	 * Filter the query on the http_referer column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByHttpReferer('fooValue');   // WHERE http_referer = 'fooValue'
	 * $query->filterByHttpReferer('%fooValue%'); // WHERE http_referer LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $httpReferer The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_PagenotfoundQuery The current query, for fluid interface
	 */
	public function filterByHttpReferer($httpReferer = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($httpReferer)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $httpReferer)) {
				$httpReferer = str_replace('*', '%', $httpReferer);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(Oops_Model_PagenotfoundPeer::HTTP_REFERER, $httpReferer, $comparison);
	}

	/**
	 * Filter the query on the date_add column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByDateAdd('2011-03-14'); // WHERE date_add = '2011-03-14'
	 * $query->filterByDateAdd('now'); // WHERE date_add = '2011-03-14'
	 * $query->filterByDateAdd(array('max' => 'yesterday')); // WHERE date_add > '2011-03-13'
	 * </code>
	 *
	 * @param     mixed $dateAdd The value to use as filter.
	 *              Values can be integers (unix timestamps), DateTime objects, or strings.
	 *              Empty strings are treated as NULL.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_PagenotfoundQuery The current query, for fluid interface
	 */
	public function filterByDateAdd($dateAdd = null, $comparison = null)
	{
		if (is_array($dateAdd)) {
			$useMinMax = false;
			if (isset($dateAdd['min'])) {
				$this->addUsingAlias(Oops_Model_PagenotfoundPeer::DATE_ADD, $dateAdd['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($dateAdd['max'])) {
				$this->addUsingAlias(Oops_Model_PagenotfoundPeer::DATE_ADD, $dateAdd['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_PagenotfoundPeer::DATE_ADD, $dateAdd, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     Oops_Model_Pagenotfound $pagenotfound Object to remove from the list of results
	 *
	 * @return    Oops_Model_PagenotfoundQuery The current query, for fluid interface
	 */
	public function prune($pagenotfound = null)
	{
		if ($pagenotfound) {
			$this->addUsingAlias(Oops_Model_PagenotfoundPeer::ID_PAGENOTFOUND, $pagenotfound->getIdPagenotfound(), Criteria::NOT_EQUAL);
		}

		return $this;
	}

} // Oops_Model_Base_PagenotfoundQuery