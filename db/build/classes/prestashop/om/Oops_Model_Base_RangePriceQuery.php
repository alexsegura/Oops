<?php


/**
 * Base class that represents a query for the '' . _DB_PREFIX_ . 'djland_range_price' table.
 *
 * 
 *
 * @method     Oops_Model_RangePriceQuery orderByIdRangePrice($order = Criteria::ASC) Order by the id_range_price column
 * @method     Oops_Model_RangePriceQuery orderByIdCarrier($order = Criteria::ASC) Order by the id_carrier column
 * @method     Oops_Model_RangePriceQuery orderByDelimiter1($order = Criteria::ASC) Order by the delimiter1 column
 * @method     Oops_Model_RangePriceQuery orderByDelimiter2($order = Criteria::ASC) Order by the delimiter2 column
 *
 * @method     Oops_Model_RangePriceQuery groupByIdRangePrice() Group by the id_range_price column
 * @method     Oops_Model_RangePriceQuery groupByIdCarrier() Group by the id_carrier column
 * @method     Oops_Model_RangePriceQuery groupByDelimiter1() Group by the delimiter1 column
 * @method     Oops_Model_RangePriceQuery groupByDelimiter2() Group by the delimiter2 column
 *
 * @method     Oops_Model_RangePriceQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     Oops_Model_RangePriceQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     Oops_Model_RangePriceQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     Oops_Model_RangePrice findOne(PropelPDO $con = null) Return the first Oops_Model_RangePrice matching the query
 * @method     Oops_Model_RangePrice findOneOrCreate(PropelPDO $con = null) Return the first Oops_Model_RangePrice matching the query, or a new Oops_Model_RangePrice object populated from the query conditions when no match is found
 *
 * @method     Oops_Model_RangePrice findOneByIdRangePrice(int $id_range_price) Return the first Oops_Model_RangePrice filtered by the id_range_price column
 * @method     Oops_Model_RangePrice findOneByIdCarrier(int $id_carrier) Return the first Oops_Model_RangePrice filtered by the id_carrier column
 * @method     Oops_Model_RangePrice findOneByDelimiter1(string $delimiter1) Return the first Oops_Model_RangePrice filtered by the delimiter1 column
 * @method     Oops_Model_RangePrice findOneByDelimiter2(string $delimiter2) Return the first Oops_Model_RangePrice filtered by the delimiter2 column
 *
 * @method     array findByIdRangePrice(int $id_range_price) Return Oops_Model_RangePrice objects filtered by the id_range_price column
 * @method     array findByIdCarrier(int $id_carrier) Return Oops_Model_RangePrice objects filtered by the id_carrier column
 * @method     array findByDelimiter1(string $delimiter1) Return Oops_Model_RangePrice objects filtered by the delimiter1 column
 * @method     array findByDelimiter2(string $delimiter2) Return Oops_Model_RangePrice objects filtered by the delimiter2 column
 *
 * @package    propel.generator.prestashop.om
 */
abstract class Oops_Model_Base_RangePriceQuery extends ModelCriteria
{
	
	/**
	 * Initializes internal state of Oops_Model_Base_RangePriceQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'prestashop', $modelName = 'Oops_Model_RangePrice', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new Oops_Model_RangePriceQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    Oops_Model_RangePriceQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof Oops_Model_RangePriceQuery) {
			return $criteria;
		}
		$query = new Oops_Model_RangePriceQuery();
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
	 * @return    Oops_Model_RangePrice|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ($key === null) {
			return null;
		}
		if ((null !== ($obj = Oops_Model_RangePricePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
			// the object is alredy in the instance pool
			return $obj;
		}
		if ($con === null) {
			$con = Propel::getConnection(Oops_Model_RangePricePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
	 * @return    Oops_Model_RangePrice A model object, or null if the key is not found
	 */
	protected function findPkSimple($key, $con)
	{
		$sql = 'SELECT `ID_RANGE_PRICE`, `ID_CARRIER`, `DELIMITER1`, `DELIMITER2` FROM `' . _DB_PREFIX_ . 'djland_range_price` WHERE `ID_RANGE_PRICE` = :p0';
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
			$obj = new Oops_Model_RangePrice();
			$obj->hydrate($row);
			Oops_Model_RangePricePeer::addInstanceToPool($obj, (string) $row[0]);
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
	 * @return    Oops_Model_RangePrice|array|mixed the result, formatted by the current formatter
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
	 * @return    Oops_Model_RangePriceQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(Oops_Model_RangePricePeer::ID_RANGE_PRICE, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    Oops_Model_RangePriceQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(Oops_Model_RangePricePeer::ID_RANGE_PRICE, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id_range_price column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByIdRangePrice(1234); // WHERE id_range_price = 1234
	 * $query->filterByIdRangePrice(array(12, 34)); // WHERE id_range_price IN (12, 34)
	 * $query->filterByIdRangePrice(array('min' => 12)); // WHERE id_range_price > 12
	 * </code>
	 *
	 * @param     mixed $idRangePrice The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_RangePriceQuery The current query, for fluid interface
	 */
	public function filterByIdRangePrice($idRangePrice = null, $comparison = null)
	{
		if (is_array($idRangePrice) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(Oops_Model_RangePricePeer::ID_RANGE_PRICE, $idRangePrice, $comparison);
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
	 * @return    Oops_Model_RangePriceQuery The current query, for fluid interface
	 */
	public function filterByIdCarrier($idCarrier = null, $comparison = null)
	{
		if (is_array($idCarrier)) {
			$useMinMax = false;
			if (isset($idCarrier['min'])) {
				$this->addUsingAlias(Oops_Model_RangePricePeer::ID_CARRIER, $idCarrier['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($idCarrier['max'])) {
				$this->addUsingAlias(Oops_Model_RangePricePeer::ID_CARRIER, $idCarrier['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_RangePricePeer::ID_CARRIER, $idCarrier, $comparison);
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
	 * @return    Oops_Model_RangePriceQuery The current query, for fluid interface
	 */
	public function filterByDelimiter1($delimiter1 = null, $comparison = null)
	{
		if (is_array($delimiter1)) {
			$useMinMax = false;
			if (isset($delimiter1['min'])) {
				$this->addUsingAlias(Oops_Model_RangePricePeer::DELIMITER1, $delimiter1['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($delimiter1['max'])) {
				$this->addUsingAlias(Oops_Model_RangePricePeer::DELIMITER1, $delimiter1['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_RangePricePeer::DELIMITER1, $delimiter1, $comparison);
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
	 * @return    Oops_Model_RangePriceQuery The current query, for fluid interface
	 */
	public function filterByDelimiter2($delimiter2 = null, $comparison = null)
	{
		if (is_array($delimiter2)) {
			$useMinMax = false;
			if (isset($delimiter2['min'])) {
				$this->addUsingAlias(Oops_Model_RangePricePeer::DELIMITER2, $delimiter2['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($delimiter2['max'])) {
				$this->addUsingAlias(Oops_Model_RangePricePeer::DELIMITER2, $delimiter2['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_RangePricePeer::DELIMITER2, $delimiter2, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     Oops_Model_RangePrice $rangePrice Object to remove from the list of results
	 *
	 * @return    Oops_Model_RangePriceQuery The current query, for fluid interface
	 */
	public function prune($rangePrice = null)
	{
		if ($rangePrice) {
			$this->addUsingAlias(Oops_Model_RangePricePeer::ID_RANGE_PRICE, $rangePrice->getIdRangePrice(), Criteria::NOT_EQUAL);
		}

		return $this;
	}

} // Oops_Model_Base_RangePriceQuery