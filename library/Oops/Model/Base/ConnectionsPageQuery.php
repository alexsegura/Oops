<?php


/**
 * Base class that represents a query for the 'connections_page' table.
 *
 * 
 *
 * @method     Oops_Model_ConnectionsPageQuery orderByIdConnections($order = Criteria::ASC) Order by the id_connections column
 * @method     Oops_Model_ConnectionsPageQuery orderByIdPage($order = Criteria::ASC) Order by the id_page column
 * @method     Oops_Model_ConnectionsPageQuery orderByTimeStart($order = Criteria::ASC) Order by the time_start column
 * @method     Oops_Model_ConnectionsPageQuery orderByTimeEnd($order = Criteria::ASC) Order by the time_end column
 *
 * @method     Oops_Model_ConnectionsPageQuery groupByIdConnections() Group by the id_connections column
 * @method     Oops_Model_ConnectionsPageQuery groupByIdPage() Group by the id_page column
 * @method     Oops_Model_ConnectionsPageQuery groupByTimeStart() Group by the time_start column
 * @method     Oops_Model_ConnectionsPageQuery groupByTimeEnd() Group by the time_end column
 *
 * @method     Oops_Model_ConnectionsPageQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     Oops_Model_ConnectionsPageQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     Oops_Model_ConnectionsPageQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     Oops_Model_ConnectionsPage findOne(PropelPDO $con = null) Return the first Oops_Model_ConnectionsPage matching the query
 * @method     Oops_Model_ConnectionsPage findOneOrCreate(PropelPDO $con = null) Return the first Oops_Model_ConnectionsPage matching the query, or a new Oops_Model_ConnectionsPage object populated from the query conditions when no match is found
 *
 * @method     Oops_Model_ConnectionsPage findOneByIdConnections(int $id_connections) Return the first Oops_Model_ConnectionsPage filtered by the id_connections column
 * @method     Oops_Model_ConnectionsPage findOneByIdPage(int $id_page) Return the first Oops_Model_ConnectionsPage filtered by the id_page column
 * @method     Oops_Model_ConnectionsPage findOneByTimeStart(string $time_start) Return the first Oops_Model_ConnectionsPage filtered by the time_start column
 * @method     Oops_Model_ConnectionsPage findOneByTimeEnd(string $time_end) Return the first Oops_Model_ConnectionsPage filtered by the time_end column
 *
 * @method     array findByIdConnections(int $id_connections) Return Oops_Model_ConnectionsPage objects filtered by the id_connections column
 * @method     array findByIdPage(int $id_page) Return Oops_Model_ConnectionsPage objects filtered by the id_page column
 * @method     array findByTimeStart(string $time_start) Return Oops_Model_ConnectionsPage objects filtered by the time_start column
 * @method     array findByTimeEnd(string $time_end) Return Oops_Model_ConnectionsPage objects filtered by the time_end column
 *
 * @package    propel.generator.prestashop.om
 */
abstract class Oops_Model_Base_ConnectionsPageQuery extends ModelCriteria
{
	
	/**
	 * Initializes internal state of Oops_Model_Base_ConnectionsPageQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'prestashop', $modelName = 'Oops_Model_ConnectionsPage', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new Oops_Model_ConnectionsPageQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    Oops_Model_ConnectionsPageQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof Oops_Model_ConnectionsPageQuery) {
			return $criteria;
		}
		$query = new Oops_Model_ConnectionsPageQuery();
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
	 * $obj = $c->findPk(array(12, 34, 56), $con);
	 * </code>
	 *
	 * @param     array[$id_connections, $id_page, $time_start] $key Primary key to use for the query
	 * @param     PropelPDO $con an optional connection object
	 *
	 * @return    Oops_Model_ConnectionsPage|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ($key === null) {
			return null;
		}
		if ((null !== ($obj = Oops_Model_ConnectionsPagePeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1], (string) $key[2]))))) && !$this->formatter) {
			// the object is alredy in the instance pool
			return $obj;
		}
		if ($con === null) {
			$con = Propel::getConnection(Oops_Model_ConnectionsPagePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
	 * @return    Oops_Model_ConnectionsPage A model object, or null if the key is not found
	 */
	protected function findPkSimple($key, $con)
	{
		$sql = 'SELECT `ID_CONNECTIONS`, `ID_PAGE`, `TIME_START`, `TIME_END` FROM `' . _DB_PREFIX_ . 'connections_page` WHERE `ID_CONNECTIONS` = :p0 AND `ID_PAGE` = :p1 AND `TIME_START` = :p2';
		try {
			$stmt = $con->prepare($sql);
			$stmt->bindValue(':p0', $key[0], PDO::PARAM_INT);
			$stmt->bindValue(':p1', $key[1], PDO::PARAM_INT);
			$stmt->bindValue(':p2', $key[2], PDO::PARAM_STR);
			$stmt->execute();
		} catch (Exception $e) {
			Propel::log($e->getMessage(), Propel::LOG_ERR);
			throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
		}
		$obj = null;
		if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$obj = new Oops_Model_ConnectionsPage();
			$obj->hydrate($row);
			Oops_Model_ConnectionsPagePeer::addInstanceToPool($obj, serialize(array((string) $row[0], (string) $row[1], (string) $row[2])));
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
	 * @return    Oops_Model_ConnectionsPage|array|mixed the result, formatted by the current formatter
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
	 * $objs = $c->findPks(array(array(12, 56), array(832, 123), array(123, 456)), $con);
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
	 * @return    Oops_Model_ConnectionsPageQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		$this->addUsingAlias(Oops_Model_ConnectionsPagePeer::ID_CONNECTIONS, $key[0], Criteria::EQUAL);
		$this->addUsingAlias(Oops_Model_ConnectionsPagePeer::ID_PAGE, $key[1], Criteria::EQUAL);
		$this->addUsingAlias(Oops_Model_ConnectionsPagePeer::TIME_START, $key[2], Criteria::EQUAL);

		return $this;
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    Oops_Model_ConnectionsPageQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		if (empty($keys)) {
			return $this->add(null, '1<>1', Criteria::CUSTOM);
		}
		foreach ($keys as $key) {
			$cton0 = $this->getNewCriterion(Oops_Model_ConnectionsPagePeer::ID_CONNECTIONS, $key[0], Criteria::EQUAL);
			$cton1 = $this->getNewCriterion(Oops_Model_ConnectionsPagePeer::ID_PAGE, $key[1], Criteria::EQUAL);
			$cton0->addAnd($cton1);
			$cton2 = $this->getNewCriterion(Oops_Model_ConnectionsPagePeer::TIME_START, $key[2], Criteria::EQUAL);
			$cton0->addAnd($cton2);
			$this->addOr($cton0);
		}

		return $this;
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
	 * @return    Oops_Model_ConnectionsPageQuery The current query, for fluid interface
	 */
	public function filterByIdConnections($idConnections = null, $comparison = null)
	{
		if (is_array($idConnections) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(Oops_Model_ConnectionsPagePeer::ID_CONNECTIONS, $idConnections, $comparison);
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
	 * @return    Oops_Model_ConnectionsPageQuery The current query, for fluid interface
	 */
	public function filterByIdPage($idPage = null, $comparison = null)
	{
		if (is_array($idPage) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(Oops_Model_ConnectionsPagePeer::ID_PAGE, $idPage, $comparison);
	}

	/**
	 * Filter the query on the time_start column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByTimeStart('2011-03-14'); // WHERE time_start = '2011-03-14'
	 * $query->filterByTimeStart('now'); // WHERE time_start = '2011-03-14'
	 * $query->filterByTimeStart(array('max' => 'yesterday')); // WHERE time_start > '2011-03-13'
	 * </code>
	 *
	 * @param     mixed $timeStart The value to use as filter.
	 *              Values can be integers (unix timestamps), DateTime objects, or strings.
	 *              Empty strings are treated as NULL.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_ConnectionsPageQuery The current query, for fluid interface
	 */
	public function filterByTimeStart($timeStart = null, $comparison = null)
	{
		if (is_array($timeStart)) {
			$useMinMax = false;
			if (isset($timeStart['min'])) {
				$this->addUsingAlias(Oops_Model_ConnectionsPagePeer::TIME_START, $timeStart['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($timeStart['max'])) {
				$this->addUsingAlias(Oops_Model_ConnectionsPagePeer::TIME_START, $timeStart['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_ConnectionsPagePeer::TIME_START, $timeStart, $comparison);
	}

	/**
	 * Filter the query on the time_end column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByTimeEnd('2011-03-14'); // WHERE time_end = '2011-03-14'
	 * $query->filterByTimeEnd('now'); // WHERE time_end = '2011-03-14'
	 * $query->filterByTimeEnd(array('max' => 'yesterday')); // WHERE time_end > '2011-03-13'
	 * </code>
	 *
	 * @param     mixed $timeEnd The value to use as filter.
	 *              Values can be integers (unix timestamps), DateTime objects, or strings.
	 *              Empty strings are treated as NULL.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_ConnectionsPageQuery The current query, for fluid interface
	 */
	public function filterByTimeEnd($timeEnd = null, $comparison = null)
	{
		if (is_array($timeEnd)) {
			$useMinMax = false;
			if (isset($timeEnd['min'])) {
				$this->addUsingAlias(Oops_Model_ConnectionsPagePeer::TIME_END, $timeEnd['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($timeEnd['max'])) {
				$this->addUsingAlias(Oops_Model_ConnectionsPagePeer::TIME_END, $timeEnd['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_ConnectionsPagePeer::TIME_END, $timeEnd, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     Oops_Model_ConnectionsPage $connectionsPage Object to remove from the list of results
	 *
	 * @return    Oops_Model_ConnectionsPageQuery The current query, for fluid interface
	 */
	public function prune($connectionsPage = null)
	{
		if ($connectionsPage) {
			$this->addCond('pruneCond0', $this->getAliasedColName(Oops_Model_ConnectionsPagePeer::ID_CONNECTIONS), $connectionsPage->getIdConnections(), Criteria::NOT_EQUAL);
			$this->addCond('pruneCond1', $this->getAliasedColName(Oops_Model_ConnectionsPagePeer::ID_PAGE), $connectionsPage->getIdPage(), Criteria::NOT_EQUAL);
			$this->addCond('pruneCond2', $this->getAliasedColName(Oops_Model_ConnectionsPagePeer::TIME_START), $connectionsPage->getTimeStart(), Criteria::NOT_EQUAL);
			$this->combine(array('pruneCond0', 'pruneCond1', 'pruneCond2'), Criteria::LOGICAL_OR);
		}

		return $this;
	}

} // Oops_Model_Base_ConnectionsPageQuery