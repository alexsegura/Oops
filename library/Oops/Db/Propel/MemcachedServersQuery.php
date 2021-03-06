<?php


/**
 * Base class that represents a query for the 'memcached_servers' table.
 *
 * 
 *
 * @method     Oops_Db_MemcachedServersQuery orderByIdMemcachedServer($order = Criteria::ASC) Order by the id_memcached_server column
 * @method     Oops_Db_MemcachedServersQuery orderByIp($order = Criteria::ASC) Order by the ip column
 * @method     Oops_Db_MemcachedServersQuery orderByPort($order = Criteria::ASC) Order by the port column
 * @method     Oops_Db_MemcachedServersQuery orderByWeight($order = Criteria::ASC) Order by the weight column
 *
 * @method     Oops_Db_MemcachedServersQuery groupByIdMemcachedServer() Group by the id_memcached_server column
 * @method     Oops_Db_MemcachedServersQuery groupByIp() Group by the ip column
 * @method     Oops_Db_MemcachedServersQuery groupByPort() Group by the port column
 * @method     Oops_Db_MemcachedServersQuery groupByWeight() Group by the weight column
 *
 * @method     Oops_Db_MemcachedServersQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     Oops_Db_MemcachedServersQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     Oops_Db_MemcachedServersQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     Oops_Db_MemcachedServers findOne(PropelPDO $con = null) Return the first Oops_Db_MemcachedServers matching the query
 * @method     Oops_Db_MemcachedServers findOneOrCreate(PropelPDO $con = null) Return the first Oops_Db_MemcachedServers matching the query, or a new Oops_Db_MemcachedServers object populated from the query conditions when no match is found
 *
 * @method     Oops_Db_MemcachedServers findOneByIdMemcachedServer(int $id_memcached_server) Return the first Oops_Db_MemcachedServers filtered by the id_memcached_server column
 * @method     Oops_Db_MemcachedServers findOneByIp(string $ip) Return the first Oops_Db_MemcachedServers filtered by the ip column
 * @method     Oops_Db_MemcachedServers findOneByPort(int $port) Return the first Oops_Db_MemcachedServers filtered by the port column
 * @method     Oops_Db_MemcachedServers findOneByWeight(int $weight) Return the first Oops_Db_MemcachedServers filtered by the weight column
 *
 * @method     array findByIdMemcachedServer(int $id_memcached_server) Return Oops_Db_MemcachedServers objects filtered by the id_memcached_server column
 * @method     array findByIp(string $ip) Return Oops_Db_MemcachedServers objects filtered by the ip column
 * @method     array findByPort(int $port) Return Oops_Db_MemcachedServers objects filtered by the port column
 * @method     array findByWeight(int $weight) Return Oops_Db_MemcachedServers objects filtered by the weight column
 *
 * @package    propel.generator.prestashop.om
 */
abstract class Oops_Db_Propel_MemcachedServersQuery extends ModelCriteria
{
	
	/**
	 * Initializes internal state of Oops_Db_Propel_MemcachedServersQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'prestashop', $modelName = 'Oops_Db_MemcachedServers', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new Oops_Db_MemcachedServersQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    Oops_Db_MemcachedServersQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof Oops_Db_MemcachedServersQuery) {
			return $criteria;
		}
		$query = new Oops_Db_MemcachedServersQuery();
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
	 * @return    Oops_Db_MemcachedServers|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ($key === null) {
			return null;
		}
		if ((null !== ($obj = Oops_Db_MemcachedServersPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
			// the object is alredy in the instance pool
			return $obj;
		}
		if ($con === null) {
			$con = Propel::getConnection(Oops_Db_MemcachedServersPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
	 * @return    Oops_Db_MemcachedServers A model object, or null if the key is not found
	 */
	protected function findPkSimple($key, $con)
	{
		$sql = 'SELECT `ID_MEMCACHED_SERVER`, `IP`, `PORT`, `WEIGHT` FROM `' . _DB_PREFIX_ . 'memcached_servers` WHERE `ID_MEMCACHED_SERVER` = :p0';
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
			$obj = new Oops_Db_MemcachedServers();
			$obj->hydrate($row);
			Oops_Db_MemcachedServersPeer::addInstanceToPool($obj, (string) $row[0]);
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
	 * @return    Oops_Db_MemcachedServers|array|mixed the result, formatted by the current formatter
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
	 * @return    Oops_Db_MemcachedServersQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(Oops_Db_MemcachedServersPeer::ID_MEMCACHED_SERVER, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    Oops_Db_MemcachedServersQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(Oops_Db_MemcachedServersPeer::ID_MEMCACHED_SERVER, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id_memcached_server column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByIdMemcachedServer(1234); // WHERE id_memcached_server = 1234
	 * $query->filterByIdMemcachedServer(array(12, 34)); // WHERE id_memcached_server IN (12, 34)
	 * $query->filterByIdMemcachedServer(array('min' => 12)); // WHERE id_memcached_server > 12
	 * </code>
	 *
	 * @param     mixed $idMemcachedServer The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Db_MemcachedServersQuery The current query, for fluid interface
	 */
	public function filterByIdMemcachedServer($idMemcachedServer = null, $comparison = null)
	{
		if (is_array($idMemcachedServer) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(Oops_Db_MemcachedServersPeer::ID_MEMCACHED_SERVER, $idMemcachedServer, $comparison);
	}

	/**
	 * Filter the query on the ip column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByIp('fooValue');   // WHERE ip = 'fooValue'
	 * $query->filterByIp('%fooValue%'); // WHERE ip LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $ip The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Db_MemcachedServersQuery The current query, for fluid interface
	 */
	public function filterByIp($ip = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($ip)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $ip)) {
				$ip = str_replace('*', '%', $ip);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(Oops_Db_MemcachedServersPeer::IP, $ip, $comparison);
	}

	/**
	 * Filter the query on the port column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByPort(1234); // WHERE port = 1234
	 * $query->filterByPort(array(12, 34)); // WHERE port IN (12, 34)
	 * $query->filterByPort(array('min' => 12)); // WHERE port > 12
	 * </code>
	 *
	 * @param     mixed $port The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Db_MemcachedServersQuery The current query, for fluid interface
	 */
	public function filterByPort($port = null, $comparison = null)
	{
		if (is_array($port)) {
			$useMinMax = false;
			if (isset($port['min'])) {
				$this->addUsingAlias(Oops_Db_MemcachedServersPeer::PORT, $port['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($port['max'])) {
				$this->addUsingAlias(Oops_Db_MemcachedServersPeer::PORT, $port['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Db_MemcachedServersPeer::PORT, $port, $comparison);
	}

	/**
	 * Filter the query on the weight column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByWeight(1234); // WHERE weight = 1234
	 * $query->filterByWeight(array(12, 34)); // WHERE weight IN (12, 34)
	 * $query->filterByWeight(array('min' => 12)); // WHERE weight > 12
	 * </code>
	 *
	 * @param     mixed $weight The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Db_MemcachedServersQuery The current query, for fluid interface
	 */
	public function filterByWeight($weight = null, $comparison = null)
	{
		if (is_array($weight)) {
			$useMinMax = false;
			if (isset($weight['min'])) {
				$this->addUsingAlias(Oops_Db_MemcachedServersPeer::WEIGHT, $weight['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($weight['max'])) {
				$this->addUsingAlias(Oops_Db_MemcachedServersPeer::WEIGHT, $weight['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Db_MemcachedServersPeer::WEIGHT, $weight, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     Oops_Db_MemcachedServers $memcachedServers Object to remove from the list of results
	 *
	 * @return    Oops_Db_MemcachedServersQuery The current query, for fluid interface
	 */
	public function prune($memcachedServers = null)
	{
		if ($memcachedServers) {
			$this->addUsingAlias(Oops_Db_MemcachedServersPeer::ID_MEMCACHED_SERVER, $memcachedServers->getIdMemcachedServer(), Criteria::NOT_EQUAL);
		}

		return $this;
	}

} // Oops_Db_Propel_MemcachedServersQuery