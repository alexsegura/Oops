<?php


/**
 * Base class that represents a query for the 'statssearch' table.
 *
 * 
 *
 * @method     Oops_Model_StatssearchQuery orderByIdStatssearch($order = Criteria::ASC) Order by the id_statssearch column
 * @method     Oops_Model_StatssearchQuery orderByKeywords($order = Criteria::ASC) Order by the keywords column
 * @method     Oops_Model_StatssearchQuery orderByResults($order = Criteria::ASC) Order by the results column
 * @method     Oops_Model_StatssearchQuery orderByDateAdd($order = Criteria::ASC) Order by the date_add column
 *
 * @method     Oops_Model_StatssearchQuery groupByIdStatssearch() Group by the id_statssearch column
 * @method     Oops_Model_StatssearchQuery groupByKeywords() Group by the keywords column
 * @method     Oops_Model_StatssearchQuery groupByResults() Group by the results column
 * @method     Oops_Model_StatssearchQuery groupByDateAdd() Group by the date_add column
 *
 * @method     Oops_Model_StatssearchQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     Oops_Model_StatssearchQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     Oops_Model_StatssearchQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     Oops_Model_Statssearch findOne(PropelPDO $con = null) Return the first Oops_Model_Statssearch matching the query
 * @method     Oops_Model_Statssearch findOneOrCreate(PropelPDO $con = null) Return the first Oops_Model_Statssearch matching the query, or a new Oops_Model_Statssearch object populated from the query conditions when no match is found
 *
 * @method     Oops_Model_Statssearch findOneByIdStatssearch(int $id_statssearch) Return the first Oops_Model_Statssearch filtered by the id_statssearch column
 * @method     Oops_Model_Statssearch findOneByKeywords(string $keywords) Return the first Oops_Model_Statssearch filtered by the keywords column
 * @method     Oops_Model_Statssearch findOneByResults(int $results) Return the first Oops_Model_Statssearch filtered by the results column
 * @method     Oops_Model_Statssearch findOneByDateAdd(string $date_add) Return the first Oops_Model_Statssearch filtered by the date_add column
 *
 * @method     array findByIdStatssearch(int $id_statssearch) Return Oops_Model_Statssearch objects filtered by the id_statssearch column
 * @method     array findByKeywords(string $keywords) Return Oops_Model_Statssearch objects filtered by the keywords column
 * @method     array findByResults(int $results) Return Oops_Model_Statssearch objects filtered by the results column
 * @method     array findByDateAdd(string $date_add) Return Oops_Model_Statssearch objects filtered by the date_add column
 *
 * @package    propel.generator.prestashop.om
 */
abstract class Oops_Model_Base_StatssearchQuery extends ModelCriteria
{
	
	/**
	 * Initializes internal state of Oops_Model_Base_StatssearchQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'prestashop', $modelName = 'Oops_Model_Statssearch', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new Oops_Model_StatssearchQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    Oops_Model_StatssearchQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof Oops_Model_StatssearchQuery) {
			return $criteria;
		}
		$query = new Oops_Model_StatssearchQuery();
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
	 * @return    Oops_Model_Statssearch|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ($key === null) {
			return null;
		}
		if ((null !== ($obj = Oops_Model_StatssearchPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
			// the object is alredy in the instance pool
			return $obj;
		}
		if ($con === null) {
			$con = Propel::getConnection(Oops_Model_StatssearchPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
	 * @return    Oops_Model_Statssearch A model object, or null if the key is not found
	 */
	protected function findPkSimple($key, $con)
	{
		$sql = 'SELECT `ID_STATSSEARCH`, `KEYWORDS`, `RESULTS`, `DATE_ADD` FROM `' . _DB_PREFIX_ . 'statssearch` WHERE `ID_STATSSEARCH` = :p0';
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
			$obj = new Oops_Model_Statssearch();
			$obj->hydrate($row);
			Oops_Model_StatssearchPeer::addInstanceToPool($obj, (string) $row[0]);
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
	 * @return    Oops_Model_Statssearch|array|mixed the result, formatted by the current formatter
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
	 * @return    Oops_Model_StatssearchQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(Oops_Model_StatssearchPeer::ID_STATSSEARCH, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    Oops_Model_StatssearchQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(Oops_Model_StatssearchPeer::ID_STATSSEARCH, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id_statssearch column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByIdStatssearch(1234); // WHERE id_statssearch = 1234
	 * $query->filterByIdStatssearch(array(12, 34)); // WHERE id_statssearch IN (12, 34)
	 * $query->filterByIdStatssearch(array('min' => 12)); // WHERE id_statssearch > 12
	 * </code>
	 *
	 * @param     mixed $idStatssearch The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_StatssearchQuery The current query, for fluid interface
	 */
	public function filterByIdStatssearch($idStatssearch = null, $comparison = null)
	{
		if (is_array($idStatssearch) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(Oops_Model_StatssearchPeer::ID_STATSSEARCH, $idStatssearch, $comparison);
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
	 * @return    Oops_Model_StatssearchQuery The current query, for fluid interface
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
		return $this->addUsingAlias(Oops_Model_StatssearchPeer::KEYWORDS, $keywords, $comparison);
	}

	/**
	 * Filter the query on the results column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByResults(1234); // WHERE results = 1234
	 * $query->filterByResults(array(12, 34)); // WHERE results IN (12, 34)
	 * $query->filterByResults(array('min' => 12)); // WHERE results > 12
	 * </code>
	 *
	 * @param     mixed $results The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_StatssearchQuery The current query, for fluid interface
	 */
	public function filterByResults($results = null, $comparison = null)
	{
		if (is_array($results)) {
			$useMinMax = false;
			if (isset($results['min'])) {
				$this->addUsingAlias(Oops_Model_StatssearchPeer::RESULTS, $results['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($results['max'])) {
				$this->addUsingAlias(Oops_Model_StatssearchPeer::RESULTS, $results['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_StatssearchPeer::RESULTS, $results, $comparison);
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
	 * @return    Oops_Model_StatssearchQuery The current query, for fluid interface
	 */
	public function filterByDateAdd($dateAdd = null, $comparison = null)
	{
		if (is_array($dateAdd)) {
			$useMinMax = false;
			if (isset($dateAdd['min'])) {
				$this->addUsingAlias(Oops_Model_StatssearchPeer::DATE_ADD, $dateAdd['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($dateAdd['max'])) {
				$this->addUsingAlias(Oops_Model_StatssearchPeer::DATE_ADD, $dateAdd['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_StatssearchPeer::DATE_ADD, $dateAdd, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     Oops_Model_Statssearch $statssearch Object to remove from the list of results
	 *
	 * @return    Oops_Model_StatssearchQuery The current query, for fluid interface
	 */
	public function prune($statssearch = null)
	{
		if ($statssearch) {
			$this->addUsingAlias(Oops_Model_StatssearchPeer::ID_STATSSEARCH, $statssearch->getIdStatssearch(), Criteria::NOT_EQUAL);
		}

		return $this;
	}

} // Oops_Model_Base_StatssearchQuery