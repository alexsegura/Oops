<?php


/**
 * Base class that represents a query for the 'page_viewed' table.
 *
 * 
 *
 * @method     Oops_Model_PageViewedQuery orderByIdPage($order = Criteria::ASC) Order by the id_page column
 * @method     Oops_Model_PageViewedQuery orderByIdDateRange($order = Criteria::ASC) Order by the id_date_range column
 * @method     Oops_Model_PageViewedQuery orderByCounter($order = Criteria::ASC) Order by the counter column
 *
 * @method     Oops_Model_PageViewedQuery groupByIdPage() Group by the id_page column
 * @method     Oops_Model_PageViewedQuery groupByIdDateRange() Group by the id_date_range column
 * @method     Oops_Model_PageViewedQuery groupByCounter() Group by the counter column
 *
 * @method     Oops_Model_PageViewedQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     Oops_Model_PageViewedQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     Oops_Model_PageViewedQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     Oops_Model_PageViewed findOne(PropelPDO $con = null) Return the first Oops_Model_PageViewed matching the query
 * @method     Oops_Model_PageViewed findOneOrCreate(PropelPDO $con = null) Return the first Oops_Model_PageViewed matching the query, or a new Oops_Model_PageViewed object populated from the query conditions when no match is found
 *
 * @method     Oops_Model_PageViewed findOneByIdPage(int $id_page) Return the first Oops_Model_PageViewed filtered by the id_page column
 * @method     Oops_Model_PageViewed findOneByIdDateRange(int $id_date_range) Return the first Oops_Model_PageViewed filtered by the id_date_range column
 * @method     Oops_Model_PageViewed findOneByCounter(int $counter) Return the first Oops_Model_PageViewed filtered by the counter column
 *
 * @method     array findByIdPage(int $id_page) Return Oops_Model_PageViewed objects filtered by the id_page column
 * @method     array findByIdDateRange(int $id_date_range) Return Oops_Model_PageViewed objects filtered by the id_date_range column
 * @method     array findByCounter(int $counter) Return Oops_Model_PageViewed objects filtered by the counter column
 *
 * @package    propel.generator.prestashop.om
 */
abstract class Oops_Model_Base_PageViewedQuery extends ModelCriteria
{
	
	/**
	 * Initializes internal state of Oops_Model_Base_PageViewedQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'prestashop', $modelName = 'Oops_Model_PageViewed', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new Oops_Model_PageViewedQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    Oops_Model_PageViewedQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof Oops_Model_PageViewedQuery) {
			return $criteria;
		}
		$query = new Oops_Model_PageViewedQuery();
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
	 * $obj = $c->findPk(array(12, 34), $con);
	 * </code>
	 *
	 * @param     array[$id_page, $id_date_range] $key Primary key to use for the query
	 * @param     PropelPDO $con an optional connection object
	 *
	 * @return    Oops_Model_PageViewed|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ($key === null) {
			return null;
		}
		if ((null !== ($obj = Oops_Model_PageViewedPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
			// the object is alredy in the instance pool
			return $obj;
		}
		if ($con === null) {
			$con = Propel::getConnection(Oops_Model_PageViewedPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
	 * @return    Oops_Model_PageViewed A model object, or null if the key is not found
	 */
	protected function findPkSimple($key, $con)
	{
		$sql = 'SELECT `ID_PAGE`, `ID_DATE_RANGE`, `COUNTER` FROM `' . _DB_PREFIX_ . 'page_viewed` WHERE `ID_PAGE` = :p0 AND `ID_DATE_RANGE` = :p1';
		try {
			$stmt = $con->prepare($sql);
			$stmt->bindValue(':p0', $key[0], PDO::PARAM_INT);
			$stmt->bindValue(':p1', $key[1], PDO::PARAM_INT);
			$stmt->execute();
		} catch (Exception $e) {
			Propel::log($e->getMessage(), Propel::LOG_ERR);
			throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
		}
		$obj = null;
		if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$obj = new Oops_Model_PageViewed();
			$obj->hydrate($row);
			Oops_Model_PageViewedPeer::addInstanceToPool($obj, serialize(array((string) $row[0], (string) $row[1])));
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
	 * @return    Oops_Model_PageViewed|array|mixed the result, formatted by the current formatter
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
	 * @return    Oops_Model_PageViewedQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		$this->addUsingAlias(Oops_Model_PageViewedPeer::ID_PAGE, $key[0], Criteria::EQUAL);
		$this->addUsingAlias(Oops_Model_PageViewedPeer::ID_DATE_RANGE, $key[1], Criteria::EQUAL);

		return $this;
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    Oops_Model_PageViewedQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		if (empty($keys)) {
			return $this->add(null, '1<>1', Criteria::CUSTOM);
		}
		foreach ($keys as $key) {
			$cton0 = $this->getNewCriterion(Oops_Model_PageViewedPeer::ID_PAGE, $key[0], Criteria::EQUAL);
			$cton1 = $this->getNewCriterion(Oops_Model_PageViewedPeer::ID_DATE_RANGE, $key[1], Criteria::EQUAL);
			$cton0->addAnd($cton1);
			$this->addOr($cton0);
		}

		return $this;
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
	 * @return    Oops_Model_PageViewedQuery The current query, for fluid interface
	 */
	public function filterByIdPage($idPage = null, $comparison = null)
	{
		if (is_array($idPage) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(Oops_Model_PageViewedPeer::ID_PAGE, $idPage, $comparison);
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
	 * @return    Oops_Model_PageViewedQuery The current query, for fluid interface
	 */
	public function filterByIdDateRange($idDateRange = null, $comparison = null)
	{
		if (is_array($idDateRange) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(Oops_Model_PageViewedPeer::ID_DATE_RANGE, $idDateRange, $comparison);
	}

	/**
	 * Filter the query on the counter column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByCounter(1234); // WHERE counter = 1234
	 * $query->filterByCounter(array(12, 34)); // WHERE counter IN (12, 34)
	 * $query->filterByCounter(array('min' => 12)); // WHERE counter > 12
	 * </code>
	 *
	 * @param     mixed $counter The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_PageViewedQuery The current query, for fluid interface
	 */
	public function filterByCounter($counter = null, $comparison = null)
	{
		if (is_array($counter)) {
			$useMinMax = false;
			if (isset($counter['min'])) {
				$this->addUsingAlias(Oops_Model_PageViewedPeer::COUNTER, $counter['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($counter['max'])) {
				$this->addUsingAlias(Oops_Model_PageViewedPeer::COUNTER, $counter['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_PageViewedPeer::COUNTER, $counter, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     Oops_Model_PageViewed $pageViewed Object to remove from the list of results
	 *
	 * @return    Oops_Model_PageViewedQuery The current query, for fluid interface
	 */
	public function prune($pageViewed = null)
	{
		if ($pageViewed) {
			$this->addCond('pruneCond0', $this->getAliasedColName(Oops_Model_PageViewedPeer::ID_PAGE), $pageViewed->getIdPage(), Criteria::NOT_EQUAL);
			$this->addCond('pruneCond1', $this->getAliasedColName(Oops_Model_PageViewedPeer::ID_DATE_RANGE), $pageViewed->getIdDateRange(), Criteria::NOT_EQUAL);
			$this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
		}

		return $this;
	}

} // Oops_Model_Base_PageViewedQuery