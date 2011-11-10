<?php


/**
 * Base class that represents a query for the 'stock_mvt' table.
 *
 * 
 *
 * @method     Oops_Model_StockMvtQuery orderByIdStockMvt($order = Criteria::ASC) Order by the id_stock_mvt column
 * @method     Oops_Model_StockMvtQuery orderByIdProduct($order = Criteria::ASC) Order by the id_product column
 * @method     Oops_Model_StockMvtQuery orderByIdProductAttribute($order = Criteria::ASC) Order by the id_product_attribute column
 * @method     Oops_Model_StockMvtQuery orderByIdOrder($order = Criteria::ASC) Order by the id_order column
 * @method     Oops_Model_StockMvtQuery orderByIdStockMvtReason($order = Criteria::ASC) Order by the id_stock_mvt_reason column
 * @method     Oops_Model_StockMvtQuery orderByIdEmployee($order = Criteria::ASC) Order by the id_employee column
 * @method     Oops_Model_StockMvtQuery orderByQuantity($order = Criteria::ASC) Order by the quantity column
 * @method     Oops_Model_StockMvtQuery orderByDateAdd($order = Criteria::ASC) Order by the date_add column
 * @method     Oops_Model_StockMvtQuery orderByDateUpd($order = Criteria::ASC) Order by the date_upd column
 *
 * @method     Oops_Model_StockMvtQuery groupByIdStockMvt() Group by the id_stock_mvt column
 * @method     Oops_Model_StockMvtQuery groupByIdProduct() Group by the id_product column
 * @method     Oops_Model_StockMvtQuery groupByIdProductAttribute() Group by the id_product_attribute column
 * @method     Oops_Model_StockMvtQuery groupByIdOrder() Group by the id_order column
 * @method     Oops_Model_StockMvtQuery groupByIdStockMvtReason() Group by the id_stock_mvt_reason column
 * @method     Oops_Model_StockMvtQuery groupByIdEmployee() Group by the id_employee column
 * @method     Oops_Model_StockMvtQuery groupByQuantity() Group by the quantity column
 * @method     Oops_Model_StockMvtQuery groupByDateAdd() Group by the date_add column
 * @method     Oops_Model_StockMvtQuery groupByDateUpd() Group by the date_upd column
 *
 * @method     Oops_Model_StockMvtQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     Oops_Model_StockMvtQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     Oops_Model_StockMvtQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     Oops_Model_StockMvtQuery leftJoinProduct($relationAlias = null) Adds a LEFT JOIN clause to the query using the Product relation
 * @method     Oops_Model_StockMvtQuery rightJoinProduct($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Product relation
 * @method     Oops_Model_StockMvtQuery innerJoinProduct($relationAlias = null) Adds a INNER JOIN clause to the query using the Product relation
 *
 * @method     Oops_Model_StockMvtQuery leftJoinStockMvtReason($relationAlias = null) Adds a LEFT JOIN clause to the query using the StockMvtReason relation
 * @method     Oops_Model_StockMvtQuery rightJoinStockMvtReason($relationAlias = null) Adds a RIGHT JOIN clause to the query using the StockMvtReason relation
 * @method     Oops_Model_StockMvtQuery innerJoinStockMvtReason($relationAlias = null) Adds a INNER JOIN clause to the query using the StockMvtReason relation
 *
 * @method     Oops_Model_StockMvt findOne(PropelPDO $con = null) Return the first Oops_Model_StockMvt matching the query
 * @method     Oops_Model_StockMvt findOneOrCreate(PropelPDO $con = null) Return the first Oops_Model_StockMvt matching the query, or a new Oops_Model_StockMvt object populated from the query conditions when no match is found
 *
 * @method     Oops_Model_StockMvt findOneByIdStockMvt(int $id_stock_mvt) Return the first Oops_Model_StockMvt filtered by the id_stock_mvt column
 * @method     Oops_Model_StockMvt findOneByIdProduct(int $id_product) Return the first Oops_Model_StockMvt filtered by the id_product column
 * @method     Oops_Model_StockMvt findOneByIdProductAttribute(int $id_product_attribute) Return the first Oops_Model_StockMvt filtered by the id_product_attribute column
 * @method     Oops_Model_StockMvt findOneByIdOrder(int $id_order) Return the first Oops_Model_StockMvt filtered by the id_order column
 * @method     Oops_Model_StockMvt findOneByIdStockMvtReason(int $id_stock_mvt_reason) Return the first Oops_Model_StockMvt filtered by the id_stock_mvt_reason column
 * @method     Oops_Model_StockMvt findOneByIdEmployee(int $id_employee) Return the first Oops_Model_StockMvt filtered by the id_employee column
 * @method     Oops_Model_StockMvt findOneByQuantity(int $quantity) Return the first Oops_Model_StockMvt filtered by the quantity column
 * @method     Oops_Model_StockMvt findOneByDateAdd(string $date_add) Return the first Oops_Model_StockMvt filtered by the date_add column
 * @method     Oops_Model_StockMvt findOneByDateUpd(string $date_upd) Return the first Oops_Model_StockMvt filtered by the date_upd column
 *
 * @method     array findByIdStockMvt(int $id_stock_mvt) Return Oops_Model_StockMvt objects filtered by the id_stock_mvt column
 * @method     array findByIdProduct(int $id_product) Return Oops_Model_StockMvt objects filtered by the id_product column
 * @method     array findByIdProductAttribute(int $id_product_attribute) Return Oops_Model_StockMvt objects filtered by the id_product_attribute column
 * @method     array findByIdOrder(int $id_order) Return Oops_Model_StockMvt objects filtered by the id_order column
 * @method     array findByIdStockMvtReason(int $id_stock_mvt_reason) Return Oops_Model_StockMvt objects filtered by the id_stock_mvt_reason column
 * @method     array findByIdEmployee(int $id_employee) Return Oops_Model_StockMvt objects filtered by the id_employee column
 * @method     array findByQuantity(int $quantity) Return Oops_Model_StockMvt objects filtered by the quantity column
 * @method     array findByDateAdd(string $date_add) Return Oops_Model_StockMvt objects filtered by the date_add column
 * @method     array findByDateUpd(string $date_upd) Return Oops_Model_StockMvt objects filtered by the date_upd column
 *
 * @package    propel.generator.prestashop.om
 */
abstract class Oops_Model_Base_StockMvtQuery extends ModelCriteria
{
	
	/**
	 * Initializes internal state of Oops_Model_Base_StockMvtQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'prestashop', $modelName = 'Oops_Model_StockMvt', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new Oops_Model_StockMvtQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    Oops_Model_StockMvtQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof Oops_Model_StockMvtQuery) {
			return $criteria;
		}
		$query = new Oops_Model_StockMvtQuery();
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
	 * @return    Oops_Model_StockMvt|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ($key === null) {
			return null;
		}
		if ((null !== ($obj = Oops_Model_StockMvtPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
			// the object is alredy in the instance pool
			return $obj;
		}
		if ($con === null) {
			$con = Propel::getConnection(Oops_Model_StockMvtPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
	 * @return    Oops_Model_StockMvt A model object, or null if the key is not found
	 */
	protected function findPkSimple($key, $con)
	{
		$sql = 'SELECT `ID_STOCK_MVT`, `ID_PRODUCT`, `ID_PRODUCT_ATTRIBUTE`, `ID_ORDER`, `ID_STOCK_MVT_REASON`, `ID_EMPLOYEE`, `QUANTITY`, `DATE_ADD`, `DATE_UPD` FROM `' . _DB_PREFIX_ . 'stock_mvt` WHERE `ID_STOCK_MVT` = :p0';
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
			$obj = new Oops_Model_StockMvt();
			$obj->hydrate($row);
			Oops_Model_StockMvtPeer::addInstanceToPool($obj, (string) $row[0]);
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
	 * @return    Oops_Model_StockMvt|array|mixed the result, formatted by the current formatter
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
	 * @return    Oops_Model_StockMvtQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(Oops_Model_StockMvtPeer::ID_STOCK_MVT, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    Oops_Model_StockMvtQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(Oops_Model_StockMvtPeer::ID_STOCK_MVT, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id_stock_mvt column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByIdStockMvt(1234); // WHERE id_stock_mvt = 1234
	 * $query->filterByIdStockMvt(array(12, 34)); // WHERE id_stock_mvt IN (12, 34)
	 * $query->filterByIdStockMvt(array('min' => 12)); // WHERE id_stock_mvt > 12
	 * </code>
	 *
	 * @param     mixed $idStockMvt The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_StockMvtQuery The current query, for fluid interface
	 */
	public function filterByIdStockMvt($idStockMvt = null, $comparison = null)
	{
		if (is_array($idStockMvt) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(Oops_Model_StockMvtPeer::ID_STOCK_MVT, $idStockMvt, $comparison);
	}

	/**
	 * Filter the query on the id_product column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByIdProduct(1234); // WHERE id_product = 1234
	 * $query->filterByIdProduct(array(12, 34)); // WHERE id_product IN (12, 34)
	 * $query->filterByIdProduct(array('min' => 12)); // WHERE id_product > 12
	 * </code>
	 *
	 * @see       filterByProduct()
	 *
	 * @param     mixed $idProduct The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_StockMvtQuery The current query, for fluid interface
	 */
	public function filterByIdProduct($idProduct = null, $comparison = null)
	{
		if (is_array($idProduct)) {
			$useMinMax = false;
			if (isset($idProduct['min'])) {
				$this->addUsingAlias(Oops_Model_StockMvtPeer::ID_PRODUCT, $idProduct['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($idProduct['max'])) {
				$this->addUsingAlias(Oops_Model_StockMvtPeer::ID_PRODUCT, $idProduct['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_StockMvtPeer::ID_PRODUCT, $idProduct, $comparison);
	}

	/**
	 * Filter the query on the id_product_attribute column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByIdProductAttribute(1234); // WHERE id_product_attribute = 1234
	 * $query->filterByIdProductAttribute(array(12, 34)); // WHERE id_product_attribute IN (12, 34)
	 * $query->filterByIdProductAttribute(array('min' => 12)); // WHERE id_product_attribute > 12
	 * </code>
	 *
	 * @param     mixed $idProductAttribute The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_StockMvtQuery The current query, for fluid interface
	 */
	public function filterByIdProductAttribute($idProductAttribute = null, $comparison = null)
	{
		if (is_array($idProductAttribute)) {
			$useMinMax = false;
			if (isset($idProductAttribute['min'])) {
				$this->addUsingAlias(Oops_Model_StockMvtPeer::ID_PRODUCT_ATTRIBUTE, $idProductAttribute['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($idProductAttribute['max'])) {
				$this->addUsingAlias(Oops_Model_StockMvtPeer::ID_PRODUCT_ATTRIBUTE, $idProductAttribute['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_StockMvtPeer::ID_PRODUCT_ATTRIBUTE, $idProductAttribute, $comparison);
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
	 * @return    Oops_Model_StockMvtQuery The current query, for fluid interface
	 */
	public function filterByIdOrder($idOrder = null, $comparison = null)
	{
		if (is_array($idOrder)) {
			$useMinMax = false;
			if (isset($idOrder['min'])) {
				$this->addUsingAlias(Oops_Model_StockMvtPeer::ID_ORDER, $idOrder['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($idOrder['max'])) {
				$this->addUsingAlias(Oops_Model_StockMvtPeer::ID_ORDER, $idOrder['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_StockMvtPeer::ID_ORDER, $idOrder, $comparison);
	}

	/**
	 * Filter the query on the id_stock_mvt_reason column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByIdStockMvtReason(1234); // WHERE id_stock_mvt_reason = 1234
	 * $query->filterByIdStockMvtReason(array(12, 34)); // WHERE id_stock_mvt_reason IN (12, 34)
	 * $query->filterByIdStockMvtReason(array('min' => 12)); // WHERE id_stock_mvt_reason > 12
	 * </code>
	 *
	 * @param     mixed $idStockMvtReason The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_StockMvtQuery The current query, for fluid interface
	 */
	public function filterByIdStockMvtReason($idStockMvtReason = null, $comparison = null)
	{
		if (is_array($idStockMvtReason)) {
			$useMinMax = false;
			if (isset($idStockMvtReason['min'])) {
				$this->addUsingAlias(Oops_Model_StockMvtPeer::ID_STOCK_MVT_REASON, $idStockMvtReason['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($idStockMvtReason['max'])) {
				$this->addUsingAlias(Oops_Model_StockMvtPeer::ID_STOCK_MVT_REASON, $idStockMvtReason['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_StockMvtPeer::ID_STOCK_MVT_REASON, $idStockMvtReason, $comparison);
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
	 * @return    Oops_Model_StockMvtQuery The current query, for fluid interface
	 */
	public function filterByIdEmployee($idEmployee = null, $comparison = null)
	{
		if (is_array($idEmployee)) {
			$useMinMax = false;
			if (isset($idEmployee['min'])) {
				$this->addUsingAlias(Oops_Model_StockMvtPeer::ID_EMPLOYEE, $idEmployee['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($idEmployee['max'])) {
				$this->addUsingAlias(Oops_Model_StockMvtPeer::ID_EMPLOYEE, $idEmployee['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_StockMvtPeer::ID_EMPLOYEE, $idEmployee, $comparison);
	}

	/**
	 * Filter the query on the quantity column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByQuantity(1234); // WHERE quantity = 1234
	 * $query->filterByQuantity(array(12, 34)); // WHERE quantity IN (12, 34)
	 * $query->filterByQuantity(array('min' => 12)); // WHERE quantity > 12
	 * </code>
	 *
	 * @param     mixed $quantity The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_StockMvtQuery The current query, for fluid interface
	 */
	public function filterByQuantity($quantity = null, $comparison = null)
	{
		if (is_array($quantity)) {
			$useMinMax = false;
			if (isset($quantity['min'])) {
				$this->addUsingAlias(Oops_Model_StockMvtPeer::QUANTITY, $quantity['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($quantity['max'])) {
				$this->addUsingAlias(Oops_Model_StockMvtPeer::QUANTITY, $quantity['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_StockMvtPeer::QUANTITY, $quantity, $comparison);
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
	 * @return    Oops_Model_StockMvtQuery The current query, for fluid interface
	 */
	public function filterByDateAdd($dateAdd = null, $comparison = null)
	{
		if (is_array($dateAdd)) {
			$useMinMax = false;
			if (isset($dateAdd['min'])) {
				$this->addUsingAlias(Oops_Model_StockMvtPeer::DATE_ADD, $dateAdd['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($dateAdd['max'])) {
				$this->addUsingAlias(Oops_Model_StockMvtPeer::DATE_ADD, $dateAdd['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_StockMvtPeer::DATE_ADD, $dateAdd, $comparison);
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
	 * @return    Oops_Model_StockMvtQuery The current query, for fluid interface
	 */
	public function filterByDateUpd($dateUpd = null, $comparison = null)
	{
		if (is_array($dateUpd)) {
			$useMinMax = false;
			if (isset($dateUpd['min'])) {
				$this->addUsingAlias(Oops_Model_StockMvtPeer::DATE_UPD, $dateUpd['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($dateUpd['max'])) {
				$this->addUsingAlias(Oops_Model_StockMvtPeer::DATE_UPD, $dateUpd['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_StockMvtPeer::DATE_UPD, $dateUpd, $comparison);
	}

	/**
	 * Filter the query by a related Oops_Model_Product object
	 *
	 * @param     Oops_Model_Product|PropelCollection $product The related object(s) to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_StockMvtQuery The current query, for fluid interface
	 */
	public function filterByProduct($product, $comparison = null)
	{
		if ($product instanceof Oops_Model_Product) {
			return $this
				->addUsingAlias(Oops_Model_StockMvtPeer::ID_PRODUCT, $product->getIdProduct(), $comparison);
		} elseif ($product instanceof PropelCollection) {
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
			return $this
				->addUsingAlias(Oops_Model_StockMvtPeer::ID_PRODUCT, $product->toKeyValue('PrimaryKey', 'IdProduct'), $comparison);
		} else {
			throw new PropelException('filterByProduct() only accepts arguments of type Oops_Model_Product or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the Product relation
	 *
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    Oops_Model_StockMvtQuery The current query, for fluid interface
	 */
	public function joinProduct($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('Product');

		// create a ModelJoin object for this join
		$join = new ModelJoin();
		$join->setJoinType($joinType);
		$join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
		if ($previousJoin = $this->getPreviousJoin()) {
			$join->setPreviousJoin($previousJoin);
		}

		// add the ModelJoin to the current object
		if($relationAlias) {
			$this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
			$this->addJoinObject($join, $relationAlias);
		} else {
			$this->addJoinObject($join, 'Product');
		}

		return $this;
	}

	/**
	 * Use the Product relation Product object
	 *
	 * @see       useQuery()
	 *
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    Oops_Model_ProductQuery A secondary query class using the current class as primary query
	 */
	public function useProductQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		return $this
			->joinProduct($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'Product', 'Oops_Model_ProductQuery');
	}

	/**
	 * Filter the query by a related Oops_Model_StockMvtReason object
	 *
	 * @param     Oops_Model_StockMvtReason $stockMvtReason  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_StockMvtQuery The current query, for fluid interface
	 */
	public function filterByStockMvtReason($stockMvtReason, $comparison = null)
	{
		if ($stockMvtReason instanceof Oops_Model_StockMvtReason) {
			return $this
				->addUsingAlias(Oops_Model_StockMvtPeer::ID_STOCK_MVT_REASON, $stockMvtReason->getIdStockMvtReason(), $comparison);
		} elseif ($stockMvtReason instanceof PropelCollection) {
			return $this
				->useStockMvtReasonQuery()
				->filterByPrimaryKeys($stockMvtReason->getPrimaryKeys())
				->endUse();
		} else {
			throw new PropelException('filterByStockMvtReason() only accepts arguments of type Oops_Model_StockMvtReason or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the StockMvtReason relation
	 *
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    Oops_Model_StockMvtQuery The current query, for fluid interface
	 */
	public function joinStockMvtReason($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('StockMvtReason');

		// create a ModelJoin object for this join
		$join = new ModelJoin();
		$join->setJoinType($joinType);
		$join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
		if ($previousJoin = $this->getPreviousJoin()) {
			$join->setPreviousJoin($previousJoin);
		}

		// add the ModelJoin to the current object
		if($relationAlias) {
			$this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
			$this->addJoinObject($join, $relationAlias);
		} else {
			$this->addJoinObject($join, 'StockMvtReason');
		}

		return $this;
	}

	/**
	 * Use the StockMvtReason relation StockMvtReason object
	 *
	 * @see       useQuery()
	 *
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    Oops_Model_StockMvtReasonQuery A secondary query class using the current class as primary query
	 */
	public function useStockMvtReasonQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinStockMvtReason($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'StockMvtReason', 'Oops_Model_StockMvtReasonQuery');
	}

	/**
	 * Exclude object from result
	 *
	 * @param     Oops_Model_StockMvt $stockMvt Object to remove from the list of results
	 *
	 * @return    Oops_Model_StockMvtQuery The current query, for fluid interface
	 */
	public function prune($stockMvt = null)
	{
		if ($stockMvt) {
			$this->addUsingAlias(Oops_Model_StockMvtPeer::ID_STOCK_MVT, $stockMvt->getIdStockMvt(), Criteria::NOT_EQUAL);
		}

		return $this;
	}

} // Oops_Model_Base_StockMvtQuery