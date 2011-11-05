<?php


/**
 * Base class that represents a query for the '' . _DB_PREFIX_ . 'djland_order_discount' table.
 *
 * 
 *
 * @method     Oops_Model_OrderDiscountQuery orderByIdOrderDiscount($order = Criteria::ASC) Order by the id_order_discount column
 * @method     Oops_Model_OrderDiscountQuery orderByIdOrder($order = Criteria::ASC) Order by the id_order column
 * @method     Oops_Model_OrderDiscountQuery orderByIdDiscount($order = Criteria::ASC) Order by the id_discount column
 * @method     Oops_Model_OrderDiscountQuery orderByName($order = Criteria::ASC) Order by the name column
 * @method     Oops_Model_OrderDiscountQuery orderByValue($order = Criteria::ASC) Order by the value column
 *
 * @method     Oops_Model_OrderDiscountQuery groupByIdOrderDiscount() Group by the id_order_discount column
 * @method     Oops_Model_OrderDiscountQuery groupByIdOrder() Group by the id_order column
 * @method     Oops_Model_OrderDiscountQuery groupByIdDiscount() Group by the id_discount column
 * @method     Oops_Model_OrderDiscountQuery groupByName() Group by the name column
 * @method     Oops_Model_OrderDiscountQuery groupByValue() Group by the value column
 *
 * @method     Oops_Model_OrderDiscountQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     Oops_Model_OrderDiscountQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     Oops_Model_OrderDiscountQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     Oops_Model_OrderDiscount findOne(PropelPDO $con = null) Return the first Oops_Model_OrderDiscount matching the query
 * @method     Oops_Model_OrderDiscount findOneOrCreate(PropelPDO $con = null) Return the first Oops_Model_OrderDiscount matching the query, or a new Oops_Model_OrderDiscount object populated from the query conditions when no match is found
 *
 * @method     Oops_Model_OrderDiscount findOneByIdOrderDiscount(int $id_order_discount) Return the first Oops_Model_OrderDiscount filtered by the id_order_discount column
 * @method     Oops_Model_OrderDiscount findOneByIdOrder(int $id_order) Return the first Oops_Model_OrderDiscount filtered by the id_order column
 * @method     Oops_Model_OrderDiscount findOneByIdDiscount(int $id_discount) Return the first Oops_Model_OrderDiscount filtered by the id_discount column
 * @method     Oops_Model_OrderDiscount findOneByName(string $name) Return the first Oops_Model_OrderDiscount filtered by the name column
 * @method     Oops_Model_OrderDiscount findOneByValue(string $value) Return the first Oops_Model_OrderDiscount filtered by the value column
 *
 * @method     array findByIdOrderDiscount(int $id_order_discount) Return Oops_Model_OrderDiscount objects filtered by the id_order_discount column
 * @method     array findByIdOrder(int $id_order) Return Oops_Model_OrderDiscount objects filtered by the id_order column
 * @method     array findByIdDiscount(int $id_discount) Return Oops_Model_OrderDiscount objects filtered by the id_discount column
 * @method     array findByName(string $name) Return Oops_Model_OrderDiscount objects filtered by the name column
 * @method     array findByValue(string $value) Return Oops_Model_OrderDiscount objects filtered by the value column
 *
 * @package    propel.generator.prestashop.om
 */
abstract class Oops_Model_Base_OrderDiscountQuery extends ModelCriteria
{
	
	/**
	 * Initializes internal state of Oops_Model_Base_OrderDiscountQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'prestashop', $modelName = 'Oops_Model_OrderDiscount', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new Oops_Model_OrderDiscountQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    Oops_Model_OrderDiscountQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof Oops_Model_OrderDiscountQuery) {
			return $criteria;
		}
		$query = new Oops_Model_OrderDiscountQuery();
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
	 * @return    Oops_Model_OrderDiscount|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ($key === null) {
			return null;
		}
		if ((null !== ($obj = Oops_Model_OrderDiscountPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
			// the object is alredy in the instance pool
			return $obj;
		}
		if ($con === null) {
			$con = Propel::getConnection(Oops_Model_OrderDiscountPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
	 * @return    Oops_Model_OrderDiscount A model object, or null if the key is not found
	 */
	protected function findPkSimple($key, $con)
	{
		$sql = 'SELECT `ID_ORDER_DISCOUNT`, `ID_ORDER`, `ID_DISCOUNT`, `NAME`, `VALUE` FROM `' . _DB_PREFIX_ . 'djland_order_discount` WHERE `ID_ORDER_DISCOUNT` = :p0';
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
			$obj = new Oops_Model_OrderDiscount();
			$obj->hydrate($row);
			Oops_Model_OrderDiscountPeer::addInstanceToPool($obj, (string) $row[0]);
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
	 * @return    Oops_Model_OrderDiscount|array|mixed the result, formatted by the current formatter
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
	 * @return    Oops_Model_OrderDiscountQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(Oops_Model_OrderDiscountPeer::ID_ORDER_DISCOUNT, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    Oops_Model_OrderDiscountQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(Oops_Model_OrderDiscountPeer::ID_ORDER_DISCOUNT, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id_order_discount column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByIdOrderDiscount(1234); // WHERE id_order_discount = 1234
	 * $query->filterByIdOrderDiscount(array(12, 34)); // WHERE id_order_discount IN (12, 34)
	 * $query->filterByIdOrderDiscount(array('min' => 12)); // WHERE id_order_discount > 12
	 * </code>
	 *
	 * @param     mixed $idOrderDiscount The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_OrderDiscountQuery The current query, for fluid interface
	 */
	public function filterByIdOrderDiscount($idOrderDiscount = null, $comparison = null)
	{
		if (is_array($idOrderDiscount) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(Oops_Model_OrderDiscountPeer::ID_ORDER_DISCOUNT, $idOrderDiscount, $comparison);
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
	 * @return    Oops_Model_OrderDiscountQuery The current query, for fluid interface
	 */
	public function filterByIdOrder($idOrder = null, $comparison = null)
	{
		if (is_array($idOrder)) {
			$useMinMax = false;
			if (isset($idOrder['min'])) {
				$this->addUsingAlias(Oops_Model_OrderDiscountPeer::ID_ORDER, $idOrder['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($idOrder['max'])) {
				$this->addUsingAlias(Oops_Model_OrderDiscountPeer::ID_ORDER, $idOrder['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_OrderDiscountPeer::ID_ORDER, $idOrder, $comparison);
	}

	/**
	 * Filter the query on the id_discount column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByIdDiscount(1234); // WHERE id_discount = 1234
	 * $query->filterByIdDiscount(array(12, 34)); // WHERE id_discount IN (12, 34)
	 * $query->filterByIdDiscount(array('min' => 12)); // WHERE id_discount > 12
	 * </code>
	 *
	 * @param     mixed $idDiscount The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_OrderDiscountQuery The current query, for fluid interface
	 */
	public function filterByIdDiscount($idDiscount = null, $comparison = null)
	{
		if (is_array($idDiscount)) {
			$useMinMax = false;
			if (isset($idDiscount['min'])) {
				$this->addUsingAlias(Oops_Model_OrderDiscountPeer::ID_DISCOUNT, $idDiscount['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($idDiscount['max'])) {
				$this->addUsingAlias(Oops_Model_OrderDiscountPeer::ID_DISCOUNT, $idDiscount['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_OrderDiscountPeer::ID_DISCOUNT, $idDiscount, $comparison);
	}

	/**
	 * Filter the query on the name column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByName('fooValue');   // WHERE name = 'fooValue'
	 * $query->filterByName('%fooValue%'); // WHERE name LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $name The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_OrderDiscountQuery The current query, for fluid interface
	 */
	public function filterByName($name = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($name)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $name)) {
				$name = str_replace('*', '%', $name);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(Oops_Model_OrderDiscountPeer::NAME, $name, $comparison);
	}

	/**
	 * Filter the query on the value column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByValue(1234); // WHERE value = 1234
	 * $query->filterByValue(array(12, 34)); // WHERE value IN (12, 34)
	 * $query->filterByValue(array('min' => 12)); // WHERE value > 12
	 * </code>
	 *
	 * @param     mixed $value The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_OrderDiscountQuery The current query, for fluid interface
	 */
	public function filterByValue($value = null, $comparison = null)
	{
		if (is_array($value)) {
			$useMinMax = false;
			if (isset($value['min'])) {
				$this->addUsingAlias(Oops_Model_OrderDiscountPeer::VALUE, $value['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($value['max'])) {
				$this->addUsingAlias(Oops_Model_OrderDiscountPeer::VALUE, $value['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_OrderDiscountPeer::VALUE, $value, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     Oops_Model_OrderDiscount $orderDiscount Object to remove from the list of results
	 *
	 * @return    Oops_Model_OrderDiscountQuery The current query, for fluid interface
	 */
	public function prune($orderDiscount = null)
	{
		if ($orderDiscount) {
			$this->addUsingAlias(Oops_Model_OrderDiscountPeer::ID_ORDER_DISCOUNT, $orderDiscount->getIdOrderDiscount(), Criteria::NOT_EQUAL);
		}

		return $this;
	}

} // Oops_Model_Base_OrderDiscountQuery