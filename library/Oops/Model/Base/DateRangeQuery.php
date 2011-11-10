<?php


/**
 * Base class that represents a query for the 'date_range' table.
 *
 * 
 *
 * @method     Oops_Model_DateRangeQuery orderByIdDateRange($order = Criteria::ASC) Order by the id_date_range column
 * @method     Oops_Model_DateRangeQuery orderByTimeStart($order = Criteria::ASC) Order by the time_start column
 * @method     Oops_Model_DateRangeQuery orderByTimeEnd($order = Criteria::ASC) Order by the time_end column
 *
 * @method     Oops_Model_DateRangeQuery groupByIdDateRange() Group by the id_date_range column
 * @method     Oops_Model_DateRangeQuery groupByTimeStart() Group by the time_start column
 * @method     Oops_Model_DateRangeQuery groupByTimeEnd() Group by the time_end column
 *
 * @method     Oops_Model_DateRangeQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     Oops_Model_DateRangeQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     Oops_Model_DateRangeQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     Oops_Model_DateRange findOne(PropelPDO $con = null) Return the first Oops_Model_DateRange matching the query
 * @method     Oops_Model_DateRange findOneOrCreate(PropelPDO $con = null) Return the first Oops_Model_DateRange matching the query, or a new Oops_Model_DateRange object populated from the query conditions when no match is found
 *
 * @method     Oops_Model_DateRange findOneByIdDateRange(int $id_date_range) Return the first Oops_Model_DateRange filtered by the id_date_range column
 * @method     Oops_Model_DateRange findOneByTimeStart(string $time_start) Return the first Oops_Model_DateRange filtered by the time_start column
 * @method     Oops_Model_DateRange findOneByTimeEnd(string $time_end) Return the first Oops_Model_DateRange filtered by the time_end column
 *
 * @method     array findByIdDateRange(int $id_date_range) Return Oops_Model_DateRange objects filtered by the id_date_range column
 * @method     array findByTimeStart(string $time_start) Return Oops_Model_DateRange objects filtered by the time_start column
 * @method     array findByTimeEnd(string $time_end) Return Oops_Model_DateRange objects filtered by the time_end column
 *
 * @package    propel.generator.prestashop.om
 */
abstract class Oops_Model_Base_DateRangeQuery extends ModelCriteria
{
	
	/**
	 * Initializes internal state of Oops_Model_Base_DateRangeQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'prestashop', $modelName = 'Oops_Model_DateRange', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new Oops_Model_DateRangeQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    Oops_Model_DateRangeQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof Oops_Model_DateRangeQuery) {
			return $criteria;
		}
		$query = new Oops_Model_DateRangeQuery();
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
	 * @return    Oops_Model_DateRange|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ($key === null) {
			return null;
		}
		if ((null !== ($obj = Oops_Model_DateRangePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
			// the object is alredy in the instance pool
			return $obj;
		}
		if ($con === null) {
			$con = Propel::getConnection(Oops_Model_DateRangePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
	 * @return    Oops_Model_DateRange A model object, or null if the key is not found
	 */
	protected function findPkSimple($key, $con)
	{
		$sql = 'SELECT `ID_DATE_RANGE`, `TIME_START`, `TIME_END` FROM `' . _DB_PREFIX_ . 'date_range` WHERE `ID_DATE_RANGE` = :p0';
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
			$obj = new Oops_Model_DateRange();
			$obj->hydrate($row);
			Oops_Model_DateRangePeer::addInstanceToPool($obj, (string) $row[0]);
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
	 * @return    Oops_Model_DateRange|array|mixed the result, formatted by the current formatter
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
	 * @return    Oops_Model_DateRangeQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(Oops_Model_DateRangePeer::ID_DATE_RANGE, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    Oops_Model_DateRangeQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(Oops_Model_DateRangePeer::ID_DATE_RANGE, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id_date_range column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByIdDateRange(1234); // WHERE id_date_range = 1234
	 * $query->filterByIdDateRange(array(12, 34)); // WHERE id_date_range IN (12, 34)
	 * $query->filterByIdDateRange(array('min' => 12)); // WHERE id_date_range > 12
	 * </code>
	 *
	 * @param     mixed $idDateRange The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_DateRangeQuery The current query, for fluid interface
	 */
	public function filterByIdDateRange($idDateRange = null, $comparison = null)
	{
		if (is_array($idDateRange) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(Oops_Model_DateRangePeer::ID_DATE_RANGE, $idDateRange, $comparison);
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
	 * @return    Oops_Model_DateRangeQuery The current query, for fluid interface
	 */
	public function filterByTimeStart($timeStart = null, $comparison = null)
	{
		if (is_array($timeStart)) {
			$useMinMax = false;
			if (isset($timeStart['min'])) {
				$this->addUsingAlias(Oops_Model_DateRangePeer::TIME_START, $timeStart['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($timeStart['max'])) {
				$this->addUsingAlias(Oops_Model_DateRangePeer::TIME_START, $timeStart['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_DateRangePeer::TIME_START, $timeStart, $comparison);
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
	 * @return    Oops_Model_DateRangeQuery The current query, for fluid interface
	 */
	public function filterByTimeEnd($timeEnd = null, $comparison = null)
	{
		if (is_array($timeEnd)) {
			$useMinMax = false;
			if (isset($timeEnd['min'])) {
				$this->addUsingAlias(Oops_Model_DateRangePeer::TIME_END, $timeEnd['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($timeEnd['max'])) {
				$this->addUsingAlias(Oops_Model_DateRangePeer::TIME_END, $timeEnd['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_DateRangePeer::TIME_END, $timeEnd, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     Oops_Model_DateRange $dateRange Object to remove from the list of results
	 *
	 * @return    Oops_Model_DateRangeQuery The current query, for fluid interface
	 */
	public function prune($dateRange = null)
	{
		if ($dateRange) {
			$this->addUsingAlias(Oops_Model_DateRangePeer::ID_DATE_RANGE, $dateRange->getIdDateRange(), Criteria::NOT_EQUAL);
		}

		return $this;
	}

} // Oops_Model_Base_DateRangeQuery