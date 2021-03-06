<?php


/**
 * Base class that represents a query for the 'range_weight' table.
 *
 * 
 *
 * @method     Oops_Db_RangeWeightQuery orderByIdRangeWeight($order = Criteria::ASC) Order by the id_range_weight column
 * @method     Oops_Db_RangeWeightQuery orderByIdCarrier($order = Criteria::ASC) Order by the id_carrier column
 * @method     Oops_Db_RangeWeightQuery orderByDelimiter1($order = Criteria::ASC) Order by the delimiter1 column
 * @method     Oops_Db_RangeWeightQuery orderByDelimiter2($order = Criteria::ASC) Order by the delimiter2 column
 *
 * @method     Oops_Db_RangeWeightQuery groupByIdRangeWeight() Group by the id_range_weight column
 * @method     Oops_Db_RangeWeightQuery groupByIdCarrier() Group by the id_carrier column
 * @method     Oops_Db_RangeWeightQuery groupByDelimiter1() Group by the delimiter1 column
 * @method     Oops_Db_RangeWeightQuery groupByDelimiter2() Group by the delimiter2 column
 *
 * @method     Oops_Db_RangeWeightQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     Oops_Db_RangeWeightQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     Oops_Db_RangeWeightQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     Oops_Db_RangeWeight findOne(PropelPDO $con = null) Return the first Oops_Db_RangeWeight matching the query
 * @method     Oops_Db_RangeWeight findOneOrCreate(PropelPDO $con = null) Return the first Oops_Db_RangeWeight matching the query, or a new Oops_Db_RangeWeight object populated from the query conditions when no match is found
 *
 * @method     Oops_Db_RangeWeight findOneByIdRangeWeight(int $id_range_weight) Return the first Oops_Db_RangeWeight filtered by the id_range_weight column
 * @method     Oops_Db_RangeWeight findOneByIdCarrier(int $id_carrier) Return the first Oops_Db_RangeWeight filtered by the id_carrier column
 * @method     Oops_Db_RangeWeight findOneByDelimiter1(string $delimiter1) Return the first Oops_Db_RangeWeight filtered by the delimiter1 column
 * @method     Oops_Db_RangeWeight findOneByDelimiter2(string $delimiter2) Return the first Oops_Db_RangeWeight filtered by the delimiter2 column
 *
 * @method     array findByIdRangeWeight(int $id_range_weight) Return Oops_Db_RangeWeight objects filtered by the id_range_weight column
 * @method     array findByIdCarrier(int $id_carrier) Return Oops_Db_RangeWeight objects filtered by the id_carrier column
 * @method     array findByDelimiter1(string $delimiter1) Return Oops_Db_RangeWeight objects filtered by the delimiter1 column
 * @method     array findByDelimiter2(string $delimiter2) Return Oops_Db_RangeWeight objects filtered by the delimiter2 column
 *
 * @package    propel.generator.prestashop.om
 */
abstract class Oops_Db_Propel_RangeWeightQuery extends ModelCriteria
{
	
	/**
	 * Initializes internal state of Oops_Db_Propel_RangeWeightQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'prestashop', $modelName = 'Oops_Db_RangeWeight', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new Oops_Db_RangeWeightQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    Oops_Db_RangeWeightQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof Oops_Db_RangeWeightQuery) {
			return $criteria;
		}
		$query = new Oops_Db_RangeWeightQuery();
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
	 * @return    Oops_Db_RangeWeight|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ($key === null) {
			return null;
		}
		if ((null !== ($obj = Oops_Db_RangeWeightPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
			// the object is alredy in the instance pool
			return $obj;
		}
		if ($con === null) {
			$con = Propel::getConnection(Oops_Db_RangeWeightPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
	 * @return    Oops_Db_RangeWeight A model object, or null if the key is not found
	 */
	protected function findPkSimple($key, $con)
	{
		$sql = 'SELECT `ID_RANGE_WEIGHT`, `ID_CARRIER`, `DELIMITER1`, `DELIMITER2` FROM `' . _DB_PREFIX_ . 'range_weight` WHERE `ID_RANGE_WEIGHT` = :p0';
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
			$obj = new Oops_Db_RangeWeight();
			$obj->hydrate($row);
			Oops_Db_RangeWeightPeer::addInstanceToPool($obj, (string) $row[0]);
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
	 * @return    Oops_Db_RangeWeight|array|mixed the result, formatted by the current formatter
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
	 * @return    Oops_Db_RangeWeightQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(Oops_Db_RangeWeightPeer::ID_RANGE_WEIGHT, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    Oops_Db_RangeWeightQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(Oops_Db_RangeWeightPeer::ID_RANGE_WEIGHT, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id_range_weight column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByIdRangeWeight(1234); // WHERE id_range_weight = 1234
	 * $query->filterByIdRangeWeight(array(12, 34)); // WHERE id_range_weight IN (12, 34)
	 * $query->filterByIdRangeWeight(array('min' => 12)); // WHERE id_range_weight > 12
	 * </code>
	 *
	 * @param     mixed $idRangeWeight The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Db_RangeWeightQuery The current query, for fluid interface
	 */
	public function filterByIdRangeWeight($idRangeWeight = null, $comparison = null)
	{
		if (is_array($idRangeWeight) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(Oops_Db_RangeWeightPeer::ID_RANGE_WEIGHT, $idRangeWeight, $comparison);
	}

	/**
	 * Filter the query on the id_carrier column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByIdCarrier(1234); // WHERE id_carrier = 1234
	 * $query->filterByIdCarrier(array(12, 34)); // WHERE id_carrier IN (12, 34)
	 * $query->filterByIdCarrier(array('min' => 12)); // WHERE id_carrier > 12
	 * </code>
	 *
	 * @param     mixed $idCarrier The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Db_RangeWeightQuery The current query, for fluid interface
	 */
	public function filterByIdCarrier($idCarrier = null, $comparison = null)
	{
		if (is_array($idCarrier)) {
			$useMinMax = false;
			if (isset($idCarrier['min'])) {
				$this->addUsingAlias(Oops_Db_RangeWeightPeer::ID_CARRIER, $idCarrier['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($idCarrier['max'])) {
				$this->addUsingAlias(Oops_Db_RangeWeightPeer::ID_CARRIER, $idCarrier['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Db_RangeWeightPeer::ID_CARRIER, $idCarrier, $comparison);
	}

	/**
	 * Filter the query on the delimiter1 column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByDelimiter1(1234); // WHERE delimiter1 = 1234
	 * $query->filterByDelimiter1(array(12, 34)); // WHERE delimiter1 IN (12, 34)
	 * $query->filterByDelimiter1(array('min' => 12)); // WHERE delimiter1 > 12
	 * </code>
	 *
	 * @param     mixed $delimiter1 The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Db_RangeWeightQuery The current query, for fluid interface
	 */
	public function filterByDelimiter1($delimiter1 = null, $comparison = null)
	{
		if (is_array($delimiter1)) {
			$useMinMax = false;
			if (isset($delimiter1['min'])) {
				$this->addUsingAlias(Oops_Db_RangeWeightPeer::DELIMITER1, $delimiter1['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($delimiter1['max'])) {
				$this->addUsingAlias(Oops_Db_RangeWeightPeer::DELIMITER1, $delimiter1['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Db_RangeWeightPeer::DELIMITER1, $delimiter1, $comparison);
	}

	/**
	 * Filter the query on the delimiter2 column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByDelimiter2(1234); // WHERE delimiter2 = 1234
	 * $query->filterByDelimiter2(array(12, 34)); // WHERE delimiter2 IN (12, 34)
	 * $query->filterByDelimiter2(array('min' => 12)); // WHERE delimiter2 > 12
	 * </code>
	 *
	 * @param     mixed $delimiter2 The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Db_RangeWeightQuery The current query, for fluid interface
	 */
	public function filterByDelimiter2($delimiter2 = null, $comparison = null)
	{
		if (is_array($delimiter2)) {
			$useMinMax = false;
			if (isset($delimiter2['min'])) {
				$this->addUsingAlias(Oops_Db_RangeWeightPeer::DELIMITER2, $delimiter2['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($delimiter2['max'])) {
				$this->addUsingAlias(Oops_Db_RangeWeightPeer::DELIMITER2, $delimiter2['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Db_RangeWeightPeer::DELIMITER2, $delimiter2, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     Oops_Db_RangeWeight $rangeWeight Object to remove from the list of results
	 *
	 * @return    Oops_Db_RangeWeightQuery The current query, for fluid interface
	 */
	public function prune($rangeWeight = null)
	{
		if ($rangeWeight) {
			$this->addUsingAlias(Oops_Db_RangeWeightPeer::ID_RANGE_WEIGHT, $rangeWeight->getIdRangeWeight(), Criteria::NOT_EQUAL);
		}

		return $this;
	}

} // Oops_Db_Propel_RangeWeightQuery