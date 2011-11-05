<?php


/**
 * Base class that represents a query for the '' . _DB_PREFIX_ . 'djland_connections' table.
 *
 * 
 *
 * @method     Oops_Model_ConnectionsQuery orderByIdConnections($order = Criteria::ASC) Order by the id_connections column
 * @method     Oops_Model_ConnectionsQuery orderByIdGuest($order = Criteria::ASC) Order by the id_guest column
 * @method     Oops_Model_ConnectionsQuery orderByIdPage($order = Criteria::ASC) Order by the id_page column
 * @method     Oops_Model_ConnectionsQuery orderByIpAddress($order = Criteria::ASC) Order by the ip_address column
 * @method     Oops_Model_ConnectionsQuery orderByDateAdd($order = Criteria::ASC) Order by the date_add column
 * @method     Oops_Model_ConnectionsQuery orderByHttpReferer($order = Criteria::ASC) Order by the http_referer column
 *
 * @method     Oops_Model_ConnectionsQuery groupByIdConnections() Group by the id_connections column
 * @method     Oops_Model_ConnectionsQuery groupByIdGuest() Group by the id_guest column
 * @method     Oops_Model_ConnectionsQuery groupByIdPage() Group by the id_page column
 * @method     Oops_Model_ConnectionsQuery groupByIpAddress() Group by the ip_address column
 * @method     Oops_Model_ConnectionsQuery groupByDateAdd() Group by the date_add column
 * @method     Oops_Model_ConnectionsQuery groupByHttpReferer() Group by the http_referer column
 *
 * @method     Oops_Model_ConnectionsQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     Oops_Model_ConnectionsQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     Oops_Model_ConnectionsQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     Oops_Model_Connections findOne(PropelPDO $con = null) Return the first Oops_Model_Connections matching the query
 * @method     Oops_Model_Connections findOneOrCreate(PropelPDO $con = null) Return the first Oops_Model_Connections matching the query, or a new Oops_Model_Connections object populated from the query conditions when no match is found
 *
 * @method     Oops_Model_Connections findOneByIdConnections(int $id_connections) Return the first Oops_Model_Connections filtered by the id_connections column
 * @method     Oops_Model_Connections findOneByIdGuest(int $id_guest) Return the first Oops_Model_Connections filtered by the id_guest column
 * @method     Oops_Model_Connections findOneByIdPage(int $id_page) Return the first Oops_Model_Connections filtered by the id_page column
 * @method     Oops_Model_Connections findOneByIpAddress(string $ip_address) Return the first Oops_Model_Connections filtered by the ip_address column
 * @method     Oops_Model_Connections findOneByDateAdd(string $date_add) Return the first Oops_Model_Connections filtered by the date_add column
 * @method     Oops_Model_Connections findOneByHttpReferer(string $http_referer) Return the first Oops_Model_Connections filtered by the http_referer column
 *
 * @method     array findByIdConnections(int $id_connections) Return Oops_Model_Connections objects filtered by the id_connections column
 * @method     array findByIdGuest(int $id_guest) Return Oops_Model_Connections objects filtered by the id_guest column
 * @method     array findByIdPage(int $id_page) Return Oops_Model_Connections objects filtered by the id_page column
 * @method     array findByIpAddress(string $ip_address) Return Oops_Model_Connections objects filtered by the ip_address column
 * @method     array findByDateAdd(string $date_add) Return Oops_Model_Connections objects filtered by the date_add column
 * @method     array findByHttpReferer(string $http_referer) Return Oops_Model_Connections objects filtered by the http_referer column
 *
 * @package    propel.generator.prestashop.om
 */
abstract class Oops_Model_Base_ConnectionsQuery extends ModelCriteria
{
	
	/**
	 * Initializes internal state of Oops_Model_Base_ConnectionsQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'prestashop', $modelName = 'Oops_Model_Connections', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new Oops_Model_ConnectionsQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    Oops_Model_ConnectionsQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof Oops_Model_ConnectionsQuery) {
			return $criteria;
		}
		$query = new Oops_Model_ConnectionsQuery();
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
	 * @return    Oops_Model_Connections|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ($key === null) {
			return null;
		}
		if ((null !== ($obj = Oops_Model_ConnectionsPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
			// the object is alredy in the instance pool
			return $obj;
		}
		if ($con === null) {
			$con = Propel::getConnection(Oops_Model_ConnectionsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
	 * @return    Oops_Model_Connections A model object, or null if the key is not found
	 */
	protected function findPkSimple($key, $con)
	{
		$sql = 'SELECT `ID_CONNECTIONS`, `ID_GUEST`, `ID_PAGE`, `IP_ADDRESS`, `DATE_ADD`, `HTTP_REFERER` FROM `' . _DB_PREFIX_ . 'djland_connections` WHERE `ID_CONNECTIONS` = :p0';
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
			$obj = new Oops_Model_Connections();
			$obj->hydrate($row);
			Oops_Model_ConnectionsPeer::addInstanceToPool($obj, (string) $row[0]);
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
	 * @return    Oops_Model_Connections|array|mixed the result, formatted by the current formatter
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
	 * @return    Oops_Model_ConnectionsQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(Oops_Model_ConnectionsPeer::ID_CONNECTIONS, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    Oops_Model_ConnectionsQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(Oops_Model_ConnectionsPeer::ID_CONNECTIONS, $keys, Criteria::IN);
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
	 * @return    Oops_Model_ConnectionsQuery The current query, for fluid interface
	 */
	public function filterByIdConnections($idConnections = null, $comparison = null)
	{
		if (is_array($idConnections) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(Oops_Model_ConnectionsPeer::ID_CONNECTIONS, $idConnections, $comparison);
	}

	/**
	 * Filter the query on the id_guest column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByIdGuest(1234); // WHERE id_guest = 1234
	 * $query->filterByIdGuest(array(12, 34)); // WHERE id_guest IN (12, 34)
	 * $query->filterByIdGuest(array('min' => 12)); // WHERE id_guest > 12
	 * </code>
	 *
	 * @param     mixed $idGuest The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_ConnectionsQuery The current query, for fluid interface
	 */
	public function filterByIdGuest($idGuest = null, $comparison = null)
	{
		if (is_array($idGuest)) {
			$useMinMax = false;
			if (isset($idGuest['min'])) {
				$this->addUsingAlias(Oops_Model_ConnectionsPeer::ID_GUEST, $idGuest['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($idGuest['max'])) {
				$this->addUsingAlias(Oops_Model_ConnectionsPeer::ID_GUEST, $idGuest['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_ConnectionsPeer::ID_GUEST, $idGuest, $comparison);
	}

	/**
	 * Filter the query on the id_page column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByIdPage(1234); // WHERE id_page = 1234
	 * $query->filterByIdPage(array(12, 34)); // WHERE id_page IN (12, 34)
	 * $query->filterByIdPage(array('min' => 12)); // WHERE id_page > 12
	 * </code>
	 *
	 * @param     mixed $idPage The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_ConnectionsQuery The current query, for fluid interface
	 */
	public function filterByIdPage($idPage = null, $comparison = null)
	{
		if (is_array($idPage)) {
			$useMinMax = false;
			if (isset($idPage['min'])) {
				$this->addUsingAlias(Oops_Model_ConnectionsPeer::ID_PAGE, $idPage['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($idPage['max'])) {
				$this->addUsingAlias(Oops_Model_ConnectionsPeer::ID_PAGE, $idPage['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_ConnectionsPeer::ID_PAGE, $idPage, $comparison);
	}

	/**
	 * Filter the query on the ip_address column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByIpAddress(1234); // WHERE ip_address = 1234
	 * $query->filterByIpAddress(array(12, 34)); // WHERE ip_address IN (12, 34)
	 * $query->filterByIpAddress(array('min' => 12)); // WHERE ip_address > 12
	 * </code>
	 *
	 * @param     mixed $ipAddress The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_ConnectionsQuery The current query, for fluid interface
	 */
	public function filterByIpAddress($ipAddress = null, $comparison = null)
	{
		if (is_array($ipAddress)) {
			$useMinMax = false;
			if (isset($ipAddress['min'])) {
				$this->addUsingAlias(Oops_Model_ConnectionsPeer::IP_ADDRESS, $ipAddress['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($ipAddress['max'])) {
				$this->addUsingAlias(Oops_Model_ConnectionsPeer::IP_ADDRESS, $ipAddress['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_ConnectionsPeer::IP_ADDRESS, $ipAddress, $comparison);
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
	 * @return    Oops_Model_ConnectionsQuery The current query, for fluid interface
	 */
	public function filterByDateAdd($dateAdd = null, $comparison = null)
	{
		if (is_array($dateAdd)) {
			$useMinMax = false;
			if (isset($dateAdd['min'])) {
				$this->addUsingAlias(Oops_Model_ConnectionsPeer::DATE_ADD, $dateAdd['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($dateAdd['max'])) {
				$this->addUsingAlias(Oops_Model_ConnectionsPeer::DATE_ADD, $dateAdd['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_ConnectionsPeer::DATE_ADD, $dateAdd, $comparison);
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
	 * @return    Oops_Model_ConnectionsQuery The current query, for fluid interface
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
		return $this->addUsingAlias(Oops_Model_ConnectionsPeer::HTTP_REFERER, $httpReferer, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     Oops_Model_Connections $connections Object to remove from the list of results
	 *
	 * @return    Oops_Model_ConnectionsQuery The current query, for fluid interface
	 */
	public function prune($connections = null)
	{
		if ($connections) {
			$this->addUsingAlias(Oops_Model_ConnectionsPeer::ID_CONNECTIONS, $connections->getIdConnections(), Criteria::NOT_EQUAL);
		}

		return $this;
	}

} // Oops_Model_Base_ConnectionsQuery