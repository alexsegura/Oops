<?php


/**
 * Base class that represents a query for the 'delivery' table.
 *
 * 
 *
 * @method     Oops_Model_DeliveryQuery orderByIdDelivery($order = Criteria::ASC) Order by the id_delivery column
 * @method     Oops_Model_DeliveryQuery orderByIdCarrier($order = Criteria::ASC) Order by the id_carrier column
 * @method     Oops_Model_DeliveryQuery orderByIdRangePrice($order = Criteria::ASC) Order by the id_range_price column
 * @method     Oops_Model_DeliveryQuery orderByIdRangeWeight($order = Criteria::ASC) Order by the id_range_weight column
 * @method     Oops_Model_DeliveryQuery orderByIdZone($order = Criteria::ASC) Order by the id_zone column
 * @method     Oops_Model_DeliveryQuery orderByPrice($order = Criteria::ASC) Order by the price column
 *
 * @method     Oops_Model_DeliveryQuery groupByIdDelivery() Group by the id_delivery column
 * @method     Oops_Model_DeliveryQuery groupByIdCarrier() Group by the id_carrier column
 * @method     Oops_Model_DeliveryQuery groupByIdRangePrice() Group by the id_range_price column
 * @method     Oops_Model_DeliveryQuery groupByIdRangeWeight() Group by the id_range_weight column
 * @method     Oops_Model_DeliveryQuery groupByIdZone() Group by the id_zone column
 * @method     Oops_Model_DeliveryQuery groupByPrice() Group by the price column
 *
 * @method     Oops_Model_DeliveryQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     Oops_Model_DeliveryQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     Oops_Model_DeliveryQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     Oops_Model_Delivery findOne(PropelPDO $con = null) Return the first Oops_Model_Delivery matching the query
 * @method     Oops_Model_Delivery findOneOrCreate(PropelPDO $con = null) Return the first Oops_Model_Delivery matching the query, or a new Oops_Model_Delivery object populated from the query conditions when no match is found
 *
 * @method     Oops_Model_Delivery findOneByIdDelivery(int $id_delivery) Return the first Oops_Model_Delivery filtered by the id_delivery column
 * @method     Oops_Model_Delivery findOneByIdCarrier(int $id_carrier) Return the first Oops_Model_Delivery filtered by the id_carrier column
 * @method     Oops_Model_Delivery findOneByIdRangePrice(int $id_range_price) Return the first Oops_Model_Delivery filtered by the id_range_price column
 * @method     Oops_Model_Delivery findOneByIdRangeWeight(int $id_range_weight) Return the first Oops_Model_Delivery filtered by the id_range_weight column
 * @method     Oops_Model_Delivery findOneByIdZone(int $id_zone) Return the first Oops_Model_Delivery filtered by the id_zone column
 * @method     Oops_Model_Delivery findOneByPrice(string $price) Return the first Oops_Model_Delivery filtered by the price column
 *
 * @method     array findByIdDelivery(int $id_delivery) Return Oops_Model_Delivery objects filtered by the id_delivery column
 * @method     array findByIdCarrier(int $id_carrier) Return Oops_Model_Delivery objects filtered by the id_carrier column
 * @method     array findByIdRangePrice(int $id_range_price) Return Oops_Model_Delivery objects filtered by the id_range_price column
 * @method     array findByIdRangeWeight(int $id_range_weight) Return Oops_Model_Delivery objects filtered by the id_range_weight column
 * @method     array findByIdZone(int $id_zone) Return Oops_Model_Delivery objects filtered by the id_zone column
 * @method     array findByPrice(string $price) Return Oops_Model_Delivery objects filtered by the price column
 *
 * @package    propel.generator.prestashop.om
 */
abstract class Oops_Model_Base_DeliveryQuery extends ModelCriteria
{
	
	/**
	 * Initializes internal state of Oops_Model_Base_DeliveryQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'prestashop', $modelName = 'Oops_Model_Delivery', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new Oops_Model_DeliveryQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    Oops_Model_DeliveryQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof Oops_Model_DeliveryQuery) {
			return $criteria;
		}
		$query = new Oops_Model_DeliveryQuery();
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
	 * @return    Oops_Model_Delivery|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ($key === null) {
			return null;
		}
		if ((null !== ($obj = Oops_Model_DeliveryPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
			// the object is alredy in the instance pool
			return $obj;
		}
		if ($con === null) {
			$con = Propel::getConnection(Oops_Model_DeliveryPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
	 * @return    Oops_Model_Delivery A model object, or null if the key is not found
	 */
	protected function findPkSimple($key, $con)
	{
		$sql = 'SELECT `ID_DELIVERY`, `ID_CARRIER`, `ID_RANGE_PRICE`, `ID_RANGE_WEIGHT`, `ID_ZONE`, `PRICE` FROM `' . _DB_PREFIX_ . 'delivery` WHERE `ID_DELIVERY` = :p0';
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
			$obj = new Oops_Model_Delivery();
			$obj->hydrate($row);
			Oops_Model_DeliveryPeer::addInstanceToPool($obj, (string) $row[0]);
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
	 * @return    Oops_Model_Delivery|array|mixed the result, formatted by the current formatter
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
	 * @return    Oops_Model_DeliveryQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(Oops_Model_DeliveryPeer::ID_DELIVERY, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    Oops_Model_DeliveryQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(Oops_Model_DeliveryPeer::ID_DELIVERY, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id_delivery column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByIdDelivery(1234); // WHERE id_delivery = 1234
	 * $query->filterByIdDelivery(array(12, 34)); // WHERE id_delivery IN (12, 34)
	 * $query->filterByIdDelivery(array('min' => 12)); // WHERE id_delivery > 12
	 * </code>
	 *
	 * @param     mixed $idDelivery The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_DeliveryQuery The current query, for fluid interface
	 */
	public function filterByIdDelivery($idDelivery = null, $comparison = null)
	{
		if (is_array($idDelivery) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(Oops_Model_DeliveryPeer::ID_DELIVERY, $idDelivery, $comparison);
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
	 * @return    Oops_Model_DeliveryQuery The current query, for fluid interface
	 */
	public function filterByIdCarrier($idCarrier = null, $comparison = null)
	{
		if (is_array($idCarrier)) {
			$useMinMax = false;
			if (isset($idCarrier['min'])) {
				$this->addUsingAlias(Oops_Model_DeliveryPeer::ID_CARRIER, $idCarrier['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($idCarrier['max'])) {
				$this->addUsingAlias(Oops_Model_DeliveryPeer::ID_CARRIER, $idCarrier['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_DeliveryPeer::ID_CARRIER, $idCarrier, $comparison);
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
	 * @return    Oops_Model_DeliveryQuery The current query, for fluid interface
	 */
	public function filterByIdRangePrice($idRangePrice = null, $comparison = null)
	{
		if (is_array($idRangePrice)) {
			$useMinMax = false;
			if (isset($idRangePrice['min'])) {
				$this->addUsingAlias(Oops_Model_DeliveryPeer::ID_RANGE_PRICE, $idRangePrice['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($idRangePrice['max'])) {
				$this->addUsingAlias(Oops_Model_DeliveryPeer::ID_RANGE_PRICE, $idRangePrice['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_DeliveryPeer::ID_RANGE_PRICE, $idRangePrice, $comparison);
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
	 * @return    Oops_Model_DeliveryQuery The current query, for fluid interface
	 */
	public function filterByIdRangeWeight($idRangeWeight = null, $comparison = null)
	{
		if (is_array($idRangeWeight)) {
			$useMinMax = false;
			if (isset($idRangeWeight['min'])) {
				$this->addUsingAlias(Oops_Model_DeliveryPeer::ID_RANGE_WEIGHT, $idRangeWeight['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($idRangeWeight['max'])) {
				$this->addUsingAlias(Oops_Model_DeliveryPeer::ID_RANGE_WEIGHT, $idRangeWeight['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_DeliveryPeer::ID_RANGE_WEIGHT, $idRangeWeight, $comparison);
	}

	/**
	 * Filter the query on the id_zone column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByIdZone(1234); // WHERE id_zone = 1234
	 * $query->filterByIdZone(array(12, 34)); // WHERE id_zone IN (12, 34)
	 * $query->filterByIdZone(array('min' => 12)); // WHERE id_zone > 12
	 * </code>
	 *
	 * @param     mixed $idZone The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_DeliveryQuery The current query, for fluid interface
	 */
	public function filterByIdZone($idZone = null, $comparison = null)
	{
		if (is_array($idZone)) {
			$useMinMax = false;
			if (isset($idZone['min'])) {
				$this->addUsingAlias(Oops_Model_DeliveryPeer::ID_ZONE, $idZone['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($idZone['max'])) {
				$this->addUsingAlias(Oops_Model_DeliveryPeer::ID_ZONE, $idZone['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_DeliveryPeer::ID_ZONE, $idZone, $comparison);
	}

	/**
	 * Filter the query on the price column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByPrice(1234); // WHERE price = 1234
	 * $query->filterByPrice(array(12, 34)); // WHERE price IN (12, 34)
	 * $query->filterByPrice(array('min' => 12)); // WHERE price > 12
	 * </code>
	 *
	 * @param     mixed $price The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_DeliveryQuery The current query, for fluid interface
	 */
	public function filterByPrice($price = null, $comparison = null)
	{
		if (is_array($price)) {
			$useMinMax = false;
			if (isset($price['min'])) {
				$this->addUsingAlias(Oops_Model_DeliveryPeer::PRICE, $price['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($price['max'])) {
				$this->addUsingAlias(Oops_Model_DeliveryPeer::PRICE, $price['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_DeliveryPeer::PRICE, $price, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     Oops_Model_Delivery $delivery Object to remove from the list of results
	 *
	 * @return    Oops_Model_DeliveryQuery The current query, for fluid interface
	 */
	public function prune($delivery = null)
	{
		if ($delivery) {
			$this->addUsingAlias(Oops_Model_DeliveryPeer::ID_DELIVERY, $delivery->getIdDelivery(), Criteria::NOT_EQUAL);
		}

		return $this;
	}

} // Oops_Model_Base_DeliveryQuery