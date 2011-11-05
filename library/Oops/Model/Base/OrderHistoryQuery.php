<?php


/**
 * Base class that represents a query for the 'djland_order_history' table.
 *
 * 
 *
 * @method     Oops_Model_OrderHistoryQuery orderByIdOrderHistory($order = Criteria::ASC) Order by the id_order_history column
 * @method     Oops_Model_OrderHistoryQuery orderByIdEmployee($order = Criteria::ASC) Order by the id_employee column
 * @method     Oops_Model_OrderHistoryQuery orderByIdOrder($order = Criteria::ASC) Order by the id_order column
 * @method     Oops_Model_OrderHistoryQuery orderByIdOrderState($order = Criteria::ASC) Order by the id_order_state column
 * @method     Oops_Model_OrderHistoryQuery orderByDateAdd($order = Criteria::ASC) Order by the date_add column
 *
 * @method     Oops_Model_OrderHistoryQuery groupByIdOrderHistory() Group by the id_order_history column
 * @method     Oops_Model_OrderHistoryQuery groupByIdEmployee() Group by the id_employee column
 * @method     Oops_Model_OrderHistoryQuery groupByIdOrder() Group by the id_order column
 * @method     Oops_Model_OrderHistoryQuery groupByIdOrderState() Group by the id_order_state column
 * @method     Oops_Model_OrderHistoryQuery groupByDateAdd() Group by the date_add column
 *
 * @method     Oops_Model_OrderHistoryQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     Oops_Model_OrderHistoryQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     Oops_Model_OrderHistoryQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     Oops_Model_OrderHistory findOne(PropelPDO $con = null) Return the first Oops_Model_OrderHistory matching the query
 * @method     Oops_Model_OrderHistory findOneOrCreate(PropelPDO $con = null) Return the first Oops_Model_OrderHistory matching the query, or a new Oops_Model_OrderHistory object populated from the query conditions when no match is found
 *
 * @method     Oops_Model_OrderHistory findOneByIdOrderHistory(int $id_order_history) Return the first Oops_Model_OrderHistory filtered by the id_order_history column
 * @method     Oops_Model_OrderHistory findOneByIdEmployee(int $id_employee) Return the first Oops_Model_OrderHistory filtered by the id_employee column
 * @method     Oops_Model_OrderHistory findOneByIdOrder(int $id_order) Return the first Oops_Model_OrderHistory filtered by the id_order column
 * @method     Oops_Model_OrderHistory findOneByIdOrderState(int $id_order_state) Return the first Oops_Model_OrderHistory filtered by the id_order_state column
 * @method     Oops_Model_OrderHistory findOneByDateAdd(string $date_add) Return the first Oops_Model_OrderHistory filtered by the date_add column
 *
 * @method     array findByIdOrderHistory(int $id_order_history) Return Oops_Model_OrderHistory objects filtered by the id_order_history column
 * @method     array findByIdEmployee(int $id_employee) Return Oops_Model_OrderHistory objects filtered by the id_employee column
 * @method     array findByIdOrder(int $id_order) Return Oops_Model_OrderHistory objects filtered by the id_order column
 * @method     array findByIdOrderState(int $id_order_state) Return Oops_Model_OrderHistory objects filtered by the id_order_state column
 * @method     array findByDateAdd(string $date_add) Return Oops_Model_OrderHistory objects filtered by the date_add column
 *
 * @package    propel.generator.prestashop.om
 */
abstract class Oops_Model_Base_OrderHistoryQuery extends ModelCriteria
{
	
	/**
	 * Initializes internal state of Oops_Model_Base_OrderHistoryQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'prestashop', $modelName = 'Oops_Model_OrderHistory', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new Oops_Model_OrderHistoryQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    Oops_Model_OrderHistoryQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof Oops_Model_OrderHistoryQuery) {
			return $criteria;
		}
		$query = new Oops_Model_OrderHistoryQuery();
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
	 * @return    Oops_Model_OrderHistory|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ($key === null) {
			return null;
		}
		if ((null !== ($obj = Oops_Model_OrderHistoryPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
			// the object is alredy in the instance pool
			return $obj;
		}
		if ($con === null) {
			$con = Propel::getConnection(Oops_Model_OrderHistoryPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
	 * @return    Oops_Model_OrderHistory A model object, or null if the key is not found
	 */
	protected function findPkSimple($key, $con)
	{
		$sql = 'SELECT `ID_ORDER_HISTORY`, `ID_EMPLOYEE`, `ID_ORDER`, `ID_ORDER_STATE`, `DATE_ADD` FROM `djland_order_history` WHERE `ID_ORDER_HISTORY` = :p0';
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
			$obj = new Oops_Model_OrderHistory();
			$obj->hydrate($row);
			Oops_Model_OrderHistoryPeer::addInstanceToPool($obj, (string) $row[0]);
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
	 * @return    Oops_Model_OrderHistory|array|mixed the result, formatted by the current formatter
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
	 * @return    Oops_Model_OrderHistoryQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(Oops_Model_OrderHistoryPeer::ID_ORDER_HISTORY, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    Oops_Model_OrderHistoryQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(Oops_Model_OrderHistoryPeer::ID_ORDER_HISTORY, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id_order_history column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByIdOrderHistory(1234); // WHERE id_order_history = 1234
	 * $query->filterByIdOrderHistory(array(12, 34)); // WHERE id_order_history IN (12, 34)
	 * $query->filterByIdOrderHistory(array('min' => 12)); // WHERE id_order_history > 12
	 * </code>
	 *
	 * @param     mixed $idOrderHistory The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_OrderHistoryQuery The current query, for fluid interface
	 */
	public function filterByIdOrderHistory($idOrderHistory = null, $comparison = null)
	{
		if (is_array($idOrderHistory) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(Oops_Model_OrderHistoryPeer::ID_ORDER_HISTORY, $idOrderHistory, $comparison);
	}

	/**
	 * Filter the query on the id_employee column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByIdEmployee(1234); // WHERE id_employee = 1234
	 * $query->filterByIdEmployee(array(12, 34)); // WHERE id_employee IN (12, 34)
	 * $query->filterByIdEmployee(array('min' => 12)); // WHERE id_employee > 12
	 * </code>
	 *
	 * @param     mixed $idEmployee The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_OrderHistoryQuery The current query, for fluid interface
	 */
	public function filterByIdEmployee($idEmployee = null, $comparison = null)
	{
		if (is_array($idEmployee)) {
			$useMinMax = false;
			if (isset($idEmployee['min'])) {
				$this->addUsingAlias(Oops_Model_OrderHistoryPeer::ID_EMPLOYEE, $idEmployee['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($idEmployee['max'])) {
				$this->addUsingAlias(Oops_Model_OrderHistoryPeer::ID_EMPLOYEE, $idEmployee['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_OrderHistoryPeer::ID_EMPLOYEE, $idEmployee, $comparison);
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
	 * @return    Oops_Model_OrderHistoryQuery The current query, for fluid interface
	 */
	public function filterByIdOrder($idOrder = null, $comparison = null)
	{
		if (is_array($idOrder)) {
			$useMinMax = false;
			if (isset($idOrder['min'])) {
				$this->addUsingAlias(Oops_Model_OrderHistoryPeer::ID_ORDER, $idOrder['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($idOrder['max'])) {
				$this->addUsingAlias(Oops_Model_OrderHistoryPeer::ID_ORDER, $idOrder['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_OrderHistoryPeer::ID_ORDER, $idOrder, $comparison);
	}

	/**
	 * Filter the query on the id_order_state column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByIdOrderState(1234); // WHERE id_order_state = 1234
	 * $query->filterByIdOrderState(array(12, 34)); // WHERE id_order_state IN (12, 34)
	 * $query->filterByIdOrderState(array('min' => 12)); // WHERE id_order_state > 12
	 * </code>
	 *
	 * @param     mixed $idOrderState The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_OrderHistoryQuery The current query, for fluid interface
	 */
	public function filterByIdOrderState($idOrderState = null, $comparison = null)
	{
		if (is_array($idOrderState)) {
			$useMinMax = false;
			if (isset($idOrderState['min'])) {
				$this->addUsingAlias(Oops_Model_OrderHistoryPeer::ID_ORDER_STATE, $idOrderState['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($idOrderState['max'])) {
				$this->addUsingAlias(Oops_Model_OrderHistoryPeer::ID_ORDER_STATE, $idOrderState['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_OrderHistoryPeer::ID_ORDER_STATE, $idOrderState, $comparison);
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
	 * @return    Oops_Model_OrderHistoryQuery The current query, for fluid interface
	 */
	public function filterByDateAdd($dateAdd = null, $comparison = null)
	{
		if (is_array($dateAdd)) {
			$useMinMax = false;
			if (isset($dateAdd['min'])) {
				$this->addUsingAlias(Oops_Model_OrderHistoryPeer::DATE_ADD, $dateAdd['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($dateAdd['max'])) {
				$this->addUsingAlias(Oops_Model_OrderHistoryPeer::DATE_ADD, $dateAdd['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_OrderHistoryPeer::DATE_ADD, $dateAdd, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     Oops_Model_OrderHistory $orderHistory Object to remove from the list of results
	 *
	 * @return    Oops_Model_OrderHistoryQuery The current query, for fluid interface
	 */
	public function prune($orderHistory = null)
	{
		if ($orderHistory) {
			$this->addUsingAlias(Oops_Model_OrderHistoryPeer::ID_ORDER_HISTORY, $orderHistory->getIdOrderHistory(), Criteria::NOT_EQUAL);
		}

		return $this;
	}

} // Oops_Model_Base_OrderHistoryQuery