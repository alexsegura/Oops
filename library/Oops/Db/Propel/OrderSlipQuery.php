<?php


/**
 * Base class that represents a query for the 'order_slip' table.
 *
 * 
 *
 * @method     Oops_Db_OrderSlipQuery orderByIdOrderSlip($order = Criteria::ASC) Order by the id_order_slip column
 * @method     Oops_Db_OrderSlipQuery orderByConversionRate($order = Criteria::ASC) Order by the conversion_rate column
 * @method     Oops_Db_OrderSlipQuery orderByIdCustomer($order = Criteria::ASC) Order by the id_customer column
 * @method     Oops_Db_OrderSlipQuery orderByIdOrder($order = Criteria::ASC) Order by the id_order column
 * @method     Oops_Db_OrderSlipQuery orderByShippingCost($order = Criteria::ASC) Order by the shipping_cost column
 * @method     Oops_Db_OrderSlipQuery orderByDateAdd($order = Criteria::ASC) Order by the date_add column
 * @method     Oops_Db_OrderSlipQuery orderByDateUpd($order = Criteria::ASC) Order by the date_upd column
 *
 * @method     Oops_Db_OrderSlipQuery groupByIdOrderSlip() Group by the id_order_slip column
 * @method     Oops_Db_OrderSlipQuery groupByConversionRate() Group by the conversion_rate column
 * @method     Oops_Db_OrderSlipQuery groupByIdCustomer() Group by the id_customer column
 * @method     Oops_Db_OrderSlipQuery groupByIdOrder() Group by the id_order column
 * @method     Oops_Db_OrderSlipQuery groupByShippingCost() Group by the shipping_cost column
 * @method     Oops_Db_OrderSlipQuery groupByDateAdd() Group by the date_add column
 * @method     Oops_Db_OrderSlipQuery groupByDateUpd() Group by the date_upd column
 *
 * @method     Oops_Db_OrderSlipQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     Oops_Db_OrderSlipQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     Oops_Db_OrderSlipQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     Oops_Db_OrderSlip findOne(PropelPDO $con = null) Return the first Oops_Db_OrderSlip matching the query
 * @method     Oops_Db_OrderSlip findOneOrCreate(PropelPDO $con = null) Return the first Oops_Db_OrderSlip matching the query, or a new Oops_Db_OrderSlip object populated from the query conditions when no match is found
 *
 * @method     Oops_Db_OrderSlip findOneByIdOrderSlip(int $id_order_slip) Return the first Oops_Db_OrderSlip filtered by the id_order_slip column
 * @method     Oops_Db_OrderSlip findOneByConversionRate(string $conversion_rate) Return the first Oops_Db_OrderSlip filtered by the conversion_rate column
 * @method     Oops_Db_OrderSlip findOneByIdCustomer(int $id_customer) Return the first Oops_Db_OrderSlip filtered by the id_customer column
 * @method     Oops_Db_OrderSlip findOneByIdOrder(int $id_order) Return the first Oops_Db_OrderSlip filtered by the id_order column
 * @method     Oops_Db_OrderSlip findOneByShippingCost(int $shipping_cost) Return the first Oops_Db_OrderSlip filtered by the shipping_cost column
 * @method     Oops_Db_OrderSlip findOneByDateAdd(string $date_add) Return the first Oops_Db_OrderSlip filtered by the date_add column
 * @method     Oops_Db_OrderSlip findOneByDateUpd(string $date_upd) Return the first Oops_Db_OrderSlip filtered by the date_upd column
 *
 * @method     array findByIdOrderSlip(int $id_order_slip) Return Oops_Db_OrderSlip objects filtered by the id_order_slip column
 * @method     array findByConversionRate(string $conversion_rate) Return Oops_Db_OrderSlip objects filtered by the conversion_rate column
 * @method     array findByIdCustomer(int $id_customer) Return Oops_Db_OrderSlip objects filtered by the id_customer column
 * @method     array findByIdOrder(int $id_order) Return Oops_Db_OrderSlip objects filtered by the id_order column
 * @method     array findByShippingCost(int $shipping_cost) Return Oops_Db_OrderSlip objects filtered by the shipping_cost column
 * @method     array findByDateAdd(string $date_add) Return Oops_Db_OrderSlip objects filtered by the date_add column
 * @method     array findByDateUpd(string $date_upd) Return Oops_Db_OrderSlip objects filtered by the date_upd column
 *
 * @package    propel.generator.prestashop.om
 */
abstract class Oops_Db_Propel_OrderSlipQuery extends ModelCriteria
{
	
	/**
	 * Initializes internal state of Oops_Db_Propel_OrderSlipQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'prestashop', $modelName = 'Oops_Db_OrderSlip', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new Oops_Db_OrderSlipQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    Oops_Db_OrderSlipQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof Oops_Db_OrderSlipQuery) {
			return $criteria;
		}
		$query = new Oops_Db_OrderSlipQuery();
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
	 * @return    Oops_Db_OrderSlip|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ($key === null) {
			return null;
		}
		if ((null !== ($obj = Oops_Db_OrderSlipPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
			// the object is alredy in the instance pool
			return $obj;
		}
		if ($con === null) {
			$con = Propel::getConnection(Oops_Db_OrderSlipPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
	 * @return    Oops_Db_OrderSlip A model object, or null if the key is not found
	 */
	protected function findPkSimple($key, $con)
	{
		$sql = 'SELECT `ID_ORDER_SLIP`, `CONVERSION_RATE`, `ID_CUSTOMER`, `ID_ORDER`, `SHIPPING_COST`, `DATE_ADD`, `DATE_UPD` FROM `' . _DB_PREFIX_ . 'order_slip` WHERE `ID_ORDER_SLIP` = :p0';
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
			$obj = new Oops_Db_OrderSlip();
			$obj->hydrate($row);
			Oops_Db_OrderSlipPeer::addInstanceToPool($obj, (string) $row[0]);
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
	 * @return    Oops_Db_OrderSlip|array|mixed the result, formatted by the current formatter
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
	 * @return    Oops_Db_OrderSlipQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(Oops_Db_OrderSlipPeer::ID_ORDER_SLIP, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    Oops_Db_OrderSlipQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(Oops_Db_OrderSlipPeer::ID_ORDER_SLIP, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id_order_slip column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByIdOrderSlip(1234); // WHERE id_order_slip = 1234
	 * $query->filterByIdOrderSlip(array(12, 34)); // WHERE id_order_slip IN (12, 34)
	 * $query->filterByIdOrderSlip(array('min' => 12)); // WHERE id_order_slip > 12
	 * </code>
	 *
	 * @param     mixed $idOrderSlip The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Db_OrderSlipQuery The current query, for fluid interface
	 */
	public function filterByIdOrderSlip($idOrderSlip = null, $comparison = null)
	{
		if (is_array($idOrderSlip) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(Oops_Db_OrderSlipPeer::ID_ORDER_SLIP, $idOrderSlip, $comparison);
	}

	/**
	 * Filter the query on the conversion_rate column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByConversionRate(1234); // WHERE conversion_rate = 1234
	 * $query->filterByConversionRate(array(12, 34)); // WHERE conversion_rate IN (12, 34)
	 * $query->filterByConversionRate(array('min' => 12)); // WHERE conversion_rate > 12
	 * </code>
	 *
	 * @param     mixed $conversionRate The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Db_OrderSlipQuery The current query, for fluid interface
	 */
	public function filterByConversionRate($conversionRate = null, $comparison = null)
	{
		if (is_array($conversionRate)) {
			$useMinMax = false;
			if (isset($conversionRate['min'])) {
				$this->addUsingAlias(Oops_Db_OrderSlipPeer::CONVERSION_RATE, $conversionRate['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($conversionRate['max'])) {
				$this->addUsingAlias(Oops_Db_OrderSlipPeer::CONVERSION_RATE, $conversionRate['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Db_OrderSlipPeer::CONVERSION_RATE, $conversionRate, $comparison);
	}

	/**
	 * Filter the query on the id_customer column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByIdCustomer(1234); // WHERE id_customer = 1234
	 * $query->filterByIdCustomer(array(12, 34)); // WHERE id_customer IN (12, 34)
	 * $query->filterByIdCustomer(array('min' => 12)); // WHERE id_customer > 12
	 * </code>
	 *
	 * @param     mixed $idCustomer The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Db_OrderSlipQuery The current query, for fluid interface
	 */
	public function filterByIdCustomer($idCustomer = null, $comparison = null)
	{
		if (is_array($idCustomer)) {
			$useMinMax = false;
			if (isset($idCustomer['min'])) {
				$this->addUsingAlias(Oops_Db_OrderSlipPeer::ID_CUSTOMER, $idCustomer['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($idCustomer['max'])) {
				$this->addUsingAlias(Oops_Db_OrderSlipPeer::ID_CUSTOMER, $idCustomer['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Db_OrderSlipPeer::ID_CUSTOMER, $idCustomer, $comparison);
	}

	/**
	 * Filter the query on the id_order column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByIdOrder(1234); // WHERE id_order = 1234
	 * $query->filterByIdOrder(array(12, 34)); // WHERE id_order IN (12, 34)
	 * $query->filterByIdOrder(array('min' => 12)); // WHERE id_order > 12
	 * </code>
	 *
	 * @param     mixed $idOrder The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Db_OrderSlipQuery The current query, for fluid interface
	 */
	public function filterByIdOrder($idOrder = null, $comparison = null)
	{
		if (is_array($idOrder)) {
			$useMinMax = false;
			if (isset($idOrder['min'])) {
				$this->addUsingAlias(Oops_Db_OrderSlipPeer::ID_ORDER, $idOrder['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($idOrder['max'])) {
				$this->addUsingAlias(Oops_Db_OrderSlipPeer::ID_ORDER, $idOrder['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Db_OrderSlipPeer::ID_ORDER, $idOrder, $comparison);
	}

	/**
	 * Filter the query on the shipping_cost column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByShippingCost(1234); // WHERE shipping_cost = 1234
	 * $query->filterByShippingCost(array(12, 34)); // WHERE shipping_cost IN (12, 34)
	 * $query->filterByShippingCost(array('min' => 12)); // WHERE shipping_cost > 12
	 * </code>
	 *
	 * @param     mixed $shippingCost The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Db_OrderSlipQuery The current query, for fluid interface
	 */
	public function filterByShippingCost($shippingCost = null, $comparison = null)
	{
		if (is_array($shippingCost)) {
			$useMinMax = false;
			if (isset($shippingCost['min'])) {
				$this->addUsingAlias(Oops_Db_OrderSlipPeer::SHIPPING_COST, $shippingCost['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($shippingCost['max'])) {
				$this->addUsingAlias(Oops_Db_OrderSlipPeer::SHIPPING_COST, $shippingCost['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Db_OrderSlipPeer::SHIPPING_COST, $shippingCost, $comparison);
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
	 * @return    Oops_Db_OrderSlipQuery The current query, for fluid interface
	 */
	public function filterByDateAdd($dateAdd = null, $comparison = null)
	{
		if (is_array($dateAdd)) {
			$useMinMax = false;
			if (isset($dateAdd['min'])) {
				$this->addUsingAlias(Oops_Db_OrderSlipPeer::DATE_ADD, $dateAdd['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($dateAdd['max'])) {
				$this->addUsingAlias(Oops_Db_OrderSlipPeer::DATE_ADD, $dateAdd['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Db_OrderSlipPeer::DATE_ADD, $dateAdd, $comparison);
	}

	/**
	 * Filter the query on the date_upd column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByDateUpd('2011-03-14'); // WHERE date_upd = '2011-03-14'
	 * $query->filterByDateUpd('now'); // WHERE date_upd = '2011-03-14'
	 * $query->filterByDateUpd(array('max' => 'yesterday')); // WHERE date_upd > '2011-03-13'
	 * </code>
	 *
	 * @param     mixed $dateUpd The value to use as filter.
	 *              Values can be integers (unix timestamps), DateTime objects, or strings.
	 *              Empty strings are treated as NULL.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Db_OrderSlipQuery The current query, for fluid interface
	 */
	public function filterByDateUpd($dateUpd = null, $comparison = null)
	{
		if (is_array($dateUpd)) {
			$useMinMax = false;
			if (isset($dateUpd['min'])) {
				$this->addUsingAlias(Oops_Db_OrderSlipPeer::DATE_UPD, $dateUpd['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($dateUpd['max'])) {
				$this->addUsingAlias(Oops_Db_OrderSlipPeer::DATE_UPD, $dateUpd['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Db_OrderSlipPeer::DATE_UPD, $dateUpd, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     Oops_Db_OrderSlip $orderSlip Object to remove from the list of results
	 *
	 * @return    Oops_Db_OrderSlipQuery The current query, for fluid interface
	 */
	public function prune($orderSlip = null)
	{
		if ($orderSlip) {
			$this->addUsingAlias(Oops_Db_OrderSlipPeer::ID_ORDER_SLIP, $orderSlip->getIdOrderSlip(), Criteria::NOT_EQUAL);
		}

		return $this;
	}

} // Oops_Db_Propel_OrderSlipQuery