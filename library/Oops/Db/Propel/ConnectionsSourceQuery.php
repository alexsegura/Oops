<?php


/**
 * Base class that represents a query for the 'connections_source' table.
 *
 * 
 *
 * @method     Oops_Db_ConnectionsSourceQuery orderByIdConnectionsSource($order = Criteria::ASC) Order by the id_connections_source column
 * @method     Oops_Db_ConnectionsSourceQuery orderByIdConnections($order = Criteria::ASC) Order by the id_connections column
 * @method     Oops_Db_ConnectionsSourceQuery orderByHttpReferer($order = Criteria::ASC) Order by the http_referer column
 * @method     Oops_Db_ConnectionsSourceQuery orderByRequestUri($order = Criteria::ASC) Order by the request_uri column
 * @method     Oops_Db_ConnectionsSourceQuery orderByKeywords($order = Criteria::ASC) Order by the keywords column
 * @method     Oops_Db_ConnectionsSourceQuery orderByDateAdd($order = Criteria::ASC) Order by the date_add column
 *
 * @method     Oops_Db_ConnectionsSourceQuery groupByIdConnectionsSource() Group by the id_connections_source column
 * @method     Oops_Db_ConnectionsSourceQuery groupByIdConnections() Group by the id_connections column
 * @method     Oops_Db_ConnectionsSourceQuery groupByHttpReferer() Group by the http_referer column
 * @method     Oops_Db_ConnectionsSourceQuery groupByRequestUri() Group by the request_uri column
 * @method     Oops_Db_ConnectionsSourceQuery groupByKeywords() Group by the keywords column
 * @method     Oops_Db_ConnectionsSourceQuery groupByDateAdd() Group by the date_add column
 *
 * @method     Oops_Db_ConnectionsSourceQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     Oops_Db_ConnectionsSourceQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     Oops_Db_ConnectionsSourceQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     Oops_Db_ConnectionsSource findOne(PropelPDO $con = null) Return the first Oops_Db_ConnectionsSource matching the query
 * @method     Oops_Db_ConnectionsSource findOneOrCreate(PropelPDO $con = null) Return the first Oops_Db_ConnectionsSource matching the query, or a new Oops_Db_ConnectionsSource object populated from the query conditions when no match is found
 *
 * @method     Oops_Db_ConnectionsSource findOneByIdConnectionsSource(int $id_connections_source) Return the first Oops_Db_ConnectionsSource filtered by the id_connections_source column
 * @method     Oops_Db_ConnectionsSource findOneByIdConnections(int $id_connections) Return the first Oops_Db_ConnectionsSource filtered by the id_connections column
 * @method     Oops_Db_ConnectionsSource findOneByHttpReferer(string $http_referer) Return the first Oops_Db_ConnectionsSource filtered by the http_referer column
 * @method     Oops_Db_ConnectionsSource findOneByRequestUri(string $request_uri) Return the first Oops_Db_ConnectionsSource filtered by the request_uri column
 * @method     Oops_Db_ConnectionsSource findOneByKeywords(string $keywords) Return the first Oops_Db_ConnectionsSource filtered by the keywords column
 * @method     Oops_Db_ConnectionsSource findOneByDateAdd(string $date_add) Return the first Oops_Db_ConnectionsSource filtered by the date_add column
 *
 * @method     array findByIdConnectionsSource(int $id_connections_source) Return Oops_Db_ConnectionsSource objects filtered by the id_connections_source column
 * @method     array findByIdConnections(int $id_connections) Return Oops_Db_ConnectionsSource objects filtered by the id_connections column
 * @method     array findByHttpReferer(string $http_referer) Return Oops_Db_ConnectionsSource objects filtered by the http_referer column
 * @method     array findByRequestUri(string $request_uri) Return Oops_Db_ConnectionsSource objects filtered by the request_uri column
 * @method     array findByKeywords(string $keywords) Return Oops_Db_ConnectionsSource objects filtered by the keywords column
 * @method     array findByDateAdd(string $date_add) Return Oops_Db_ConnectionsSource objects filtered by the date_add column
 *
 * @package    propel.generator.prestashop.om
 */
abstract class Oops_Db_Propel_ConnectionsSourceQuery extends ModelCriteria
{
	
	/**
	 * Initializes internal state of Oops_Db_Propel_ConnectionsSourceQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'prestashop', $modelName = 'Oops_Db_ConnectionsSource', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new Oops_Db_ConnectionsSourceQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    Oops_Db_ConnectionsSourceQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof Oops_Db_ConnectionsSourceQuery) {
			return $criteria;
		}
		$query = new Oops_Db_ConnectionsSourceQuery();
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
	 * @return    Oops_Db_ConnectionsSource|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ($key === null) {
			return null;
		}
		if ((null !== ($obj = Oops_Db_ConnectionsSourcePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
			// the object is alredy in the instance pool
			return $obj;
		}
		if ($con === null) {
			$con = Propel::getConnection(Oops_Db_ConnectionsSourcePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
	 * @return    Oops_Db_ConnectionsSource A model object, or null if the key is not found
	 */
	protected function findPkSimple($key, $con)
	{
		$sql = 'SELECT `ID_CONNECTIONS_SOURCE`, `ID_CONNECTIONS`, `HTTP_REFERER`, `REQUEST_URI`, `KEYWORDS`, `DATE_ADD` FROM `' . _DB_PREFIX_ . 'connections_source` WHERE `ID_CONNECTIONS_SOURCE` = :p0';
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
			$obj = new Oops_Db_ConnectionsSource();
			$obj->hydrate($row);
			Oops_Db_ConnectionsSourcePeer::addInstanceToPool($obj, (string) $row[0]);
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
	 * @return    Oops_Db_ConnectionsSource|array|mixed the result, formatted by the current formatter
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
	 * @return    Oops_Db_ConnectionsSourceQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(Oops_Db_ConnectionsSourcePeer::ID_CONNECTIONS_SOURCE, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    Oops_Db_ConnectionsSourceQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(Oops_Db_ConnectionsSourcePeer::ID_CONNECTIONS_SOURCE, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id_connections_source column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByIdConnectionsSource(1234); // WHERE id_connections_source = 1234
	 * $query->filterByIdConnectionsSource(array(12, 34)); // WHERE id_connections_source IN (12, 34)
	 * $query->filterByIdConnectionsSource(array('min' => 12)); // WHERE id_connections_source > 12
	 * </code>
	 *
	 * @param     mixed $idConnectionsSource The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Db_ConnectionsSourceQuery The current query, for fluid interface
	 */
	public function filterByIdConnectionsSource($idConnectionsSource = null, $comparison = null)
	{
		if (is_array($idConnectionsSource) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(Oops_Db_ConnectionsSourcePeer::ID_CONNECTIONS_SOURCE, $idConnectionsSource, $comparison);
	}

	/**
	 * Filter the query on the id_connections column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByIdConnections(1234); // WHERE id_connections = 1234
	 * $query->filterByIdConnections(array(12, 34)); // WHERE id_connections IN (12, 34)
	 * $query->filterByIdConnections(array('min' => 12)); // WHERE id_connections > 12
	 * </code>
	 *
	 * @param     mixed $idConnections The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Db_ConnectionsSourceQuery The current query, for fluid interface
	 */
	public function filterByIdConnections($idConnections = null, $comparison = null)
	{
		if (is_array($idConnections)) {
			$useMinMax = false;
			if (isset($idConnections['min'])) {
				$this->addUsingAlias(Oops_Db_ConnectionsSourcePeer::ID_CONNECTIONS, $idConnections['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($idConnections['max'])) {
				$this->addUsingAlias(Oops_Db_ConnectionsSourcePeer::ID_CONNECTIONS, $idConnections['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Db_ConnectionsSourcePeer::ID_CONNECTIONS, $idConnections, $comparison);
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
	 * @return    Oops_Db_ConnectionsSourceQuery The current query, for fluid interface
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
		return $this->addUsingAlias(Oops_Db_ConnectionsSourcePeer::HTTP_REFERER, $httpReferer, $comparison);
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
	 * @return    Oops_Db_ConnectionsSourceQuery The current query, for fluid interface
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
		return $this->addUsingAlias(Oops_Db_ConnectionsSourcePeer::REQUEST_URI, $requestUri, $comparison);
	}

	/**
	 * Filter the query on the keywords column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByKeywords('fooValue');   // WHERE keywords = 'fooValue'
	 * $query->filterByKeywords('%fooValue%'); // WHERE keywords LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $keywords The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Db_ConnectionsSourceQuery The current query, for fluid interface
	 */
	public function filterByKeywords($keywords = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($keywords)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $keywords)) {
				$keywords = str_replace('*', '%', $keywords);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(Oops_Db_ConnectionsSourcePeer::KEYWORDS, $keywords, $comparison);
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
	 * @return    Oops_Db_ConnectionsSourceQuery The current query, for fluid interface
	 */
	public function filterByDateAdd($dateAdd = null, $comparison = null)
	{
		if (is_array($dateAdd)) {
			$useMinMax = false;
			if (isset($dateAdd['min'])) {
				$this->addUsingAlias(Oops_Db_ConnectionsSourcePeer::DATE_ADD, $dateAdd['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($dateAdd['max'])) {
				$this->addUsingAlias(Oops_Db_ConnectionsSourcePeer::DATE_ADD, $dateAdd['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Db_ConnectionsSourcePeer::DATE_ADD, $dateAdd, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     Oops_Db_ConnectionsSource $connectionsSource Object to remove from the list of results
	 *
	 * @return    Oops_Db_ConnectionsSourceQuery The current query, for fluid interface
	 */
	public function prune($connectionsSource = null)
	{
		if ($connectionsSource) {
			$this->addUsingAlias(Oops_Db_ConnectionsSourcePeer::ID_CONNECTIONS_SOURCE, $connectionsSource->getIdConnectionsSource(), Criteria::NOT_EQUAL);
		}

		return $this;
	}

} // Oops_Db_Propel_ConnectionsSourceQuery