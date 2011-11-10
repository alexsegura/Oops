<?php


/**
 * Base class that represents a query for the 'order_slip_detail' table.
 *
 * 
 *
 * @method     Oops_Model_OrderSlipDetailQuery orderByIdOrderSlip($order = Criteria::ASC) Order by the id_order_slip column
 * @method     Oops_Model_OrderSlipDetailQuery orderByIdOrderDetail($order = Criteria::ASC) Order by the id_order_detail column
 * @method     Oops_Model_OrderSlipDetailQuery orderByProductQuantity($order = Criteria::ASC) Order by the product_quantity column
 *
 * @method     Oops_Model_OrderSlipDetailQuery groupByIdOrderSlip() Group by the id_order_slip column
 * @method     Oops_Model_OrderSlipDetailQuery groupByIdOrderDetail() Group by the id_order_detail column
 * @method     Oops_Model_OrderSlipDetailQuery groupByProductQuantity() Group by the product_quantity column
 *
 * @method     Oops_Model_OrderSlipDetailQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     Oops_Model_OrderSlipDetailQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     Oops_Model_OrderSlipDetailQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     Oops_Model_OrderSlipDetail findOne(PropelPDO $con = null) Return the first Oops_Model_OrderSlipDetail matching the query
 * @method     Oops_Model_OrderSlipDetail findOneOrCreate(PropelPDO $con = null) Return the first Oops_Model_OrderSlipDetail matching the query, or a new Oops_Model_OrderSlipDetail object populated from the query conditions when no match is found
 *
 * @method     Oops_Model_OrderSlipDetail findOneByIdOrderSlip(int $id_order_slip) Return the first Oops_Model_OrderSlipDetail filtered by the id_order_slip column
 * @method     Oops_Model_OrderSlipDetail findOneByIdOrderDetail(int $id_order_detail) Return the first Oops_Model_OrderSlipDetail filtered by the id_order_detail column
 * @method     Oops_Model_OrderSlipDetail findOneByProductQuantity(int $product_quantity) Return the first Oops_Model_OrderSlipDetail filtered by the product_quantity column
 *
 * @method     array findByIdOrderSlip(int $id_order_slip) Return Oops_Model_OrderSlipDetail objects filtered by the id_order_slip column
 * @method     array findByIdOrderDetail(int $id_order_detail) Return Oops_Model_OrderSlipDetail objects filtered by the id_order_detail column
 * @method     array findByProductQuantity(int $product_quantity) Return Oops_Model_OrderSlipDetail objects filtered by the product_quantity column
 *
 * @package    propel.generator.prestashop.om
 */
abstract class Oops_Model_Base_OrderSlipDetailQuery extends ModelCriteria
{
	
	/**
	 * Initializes internal state of Oops_Model_Base_OrderSlipDetailQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'prestashop', $modelName = 'Oops_Model_OrderSlipDetail', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new Oops_Model_OrderSlipDetailQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    Oops_Model_OrderSlipDetailQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof Oops_Model_OrderSlipDetailQuery) {
			return $criteria;
		}
		$query = new Oops_Model_OrderSlipDetailQuery();
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
	 * @param     array[$id_order_slip, $id_order_detail] $key Primary key to use for the query
	 * @param     PropelPDO $con an optional connection object
	 *
	 * @return    Oops_Model_OrderSlipDetail|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ($key === null) {
			return null;
		}
		if ((null !== ($obj = Oops_Model_OrderSlipDetailPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
			// the object is alredy in the instance pool
			return $obj;
		}
		if ($con === null) {
			$con = Propel::getConnection(Oops_Model_OrderSlipDetailPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
	 * @return    Oops_Model_OrderSlipDetail A model object, or null if the key is not found
	 */
	protected function findPkSimple($key, $con)
	{
		$sql = 'SELECT `ID_ORDER_SLIP`, `ID_ORDER_DETAIL`, `PRODUCT_QUANTITY` FROM `' . _DB_PREFIX_ . 'order_slip_detail` WHERE `ID_ORDER_SLIP` = :p0 AND `ID_ORDER_DETAIL` = :p1';
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
			$obj = new Oops_Model_OrderSlipDetail();
			$obj->hydrate($row);
			Oops_Model_OrderSlipDetailPeer::addInstanceToPool($obj, serialize(array((string) $row[0], (string) $row[1])));
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
	 * @return    Oops_Model_OrderSlipDetail|array|mixed the result, formatted by the current formatter
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
	 * @return    Oops_Model_OrderSlipDetailQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		$this->addUsingAlias(Oops_Model_OrderSlipDetailPeer::ID_ORDER_SLIP, $key[0], Criteria::EQUAL);
		$this->addUsingAlias(Oops_Model_OrderSlipDetailPeer::ID_ORDER_DETAIL, $key[1], Criteria::EQUAL);

		return $this;
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    Oops_Model_OrderSlipDetailQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		if (empty($keys)) {
			return $this->add(null, '1<>1', Criteria::CUSTOM);
		}
		foreach ($keys as $key) {
			$cton0 = $this->getNewCriterion(Oops_Model_OrderSlipDetailPeer::ID_ORDER_SLIP, $key[0], Criteria::EQUAL);
			$cton1 = $this->getNewCriterion(Oops_Model_OrderSlipDetailPeer::ID_ORDER_DETAIL, $key[1], Criteria::EQUAL);
			$cton0->addAnd($cton1);
			$this->addOr($cton0);
		}

		return $this;
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
	 * @return    Oops_Model_OrderSlipDetailQuery The current query, for fluid interface
	 */
	public function filterByIdOrderSlip($idOrderSlip = null, $comparison = null)
	{
		if (is_array($idOrderSlip) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(Oops_Model_OrderSlipDetailPeer::ID_ORDER_SLIP, $idOrderSlip, $comparison);
	}

	/**
	 * Filter the query on the id_order_detail column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByIdOrderDetail(1234); // WHERE id_order_detail = 1234
	 * $query->filterByIdOrderDetail(array(12, 34)); // WHERE id_order_detail IN (12, 34)
	 * $query->filterByIdOrderDetail(array('min' => 12)); // WHERE id_order_detail > 12
	 * </code>
	 *
	 * @param     mixed $idOrderDetail The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_OrderSlipDetailQuery The current query, for fluid interface
	 */
	public function filterByIdOrderDetail($idOrderDetail = null, $comparison = null)
	{
		if (is_array($idOrderDetail) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(Oops_Model_OrderSlipDetailPeer::ID_ORDER_DETAIL, $idOrderDetail, $comparison);
	}

	/**
	 * Filter the query on the product_quantity column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByProductQuantity(1234); // WHERE product_quantity = 1234
	 * $query->filterByProductQuantity(array(12, 34)); // WHERE product_quantity IN (12, 34)
	 * $query->filterByProductQuantity(array('min' => 12)); // WHERE product_quantity > 12
	 * </code>
	 *
	 * @param     mixed $productQuantity The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_OrderSlipDetailQuery The current query, for fluid interface
	 */
	public function filterByProductQuantity($productQuantity = null, $comparison = null)
	{
		if (is_array($productQuantity)) {
			$useMinMax = false;
			if (isset($productQuantity['min'])) {
				$this->addUsingAlias(Oops_Model_OrderSlipDetailPeer::PRODUCT_QUANTITY, $productQuantity['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($productQuantity['max'])) {
				$this->addUsingAlias(Oops_Model_OrderSlipDetailPeer::PRODUCT_QUANTITY, $productQuantity['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_OrderSlipDetailPeer::PRODUCT_QUANTITY, $productQuantity, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     Oops_Model_OrderSlipDetail $orderSlipDetail Object to remove from the list of results
	 *
	 * @return    Oops_Model_OrderSlipDetailQuery The current query, for fluid interface
	 */
	public function prune($orderSlipDetail = null)
	{
		if ($orderSlipDetail) {
			$this->addCond('pruneCond0', $this->getAliasedColName(Oops_Model_OrderSlipDetailPeer::ID_ORDER_SLIP), $orderSlipDetail->getIdOrderSlip(), Criteria::NOT_EQUAL);
			$this->addCond('pruneCond1', $this->getAliasedColName(Oops_Model_OrderSlipDetailPeer::ID_ORDER_DETAIL), $orderSlipDetail->getIdOrderDetail(), Criteria::NOT_EQUAL);
			$this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
		}

		return $this;
	}

} // Oops_Model_Base_OrderSlipDetailQuery