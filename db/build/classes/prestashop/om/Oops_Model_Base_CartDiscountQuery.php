<?php


/**
 * Base class that represents a query for the '' . _DB_PREFIX_ . 'djland_cart_discount' table.
 *
 * 
 *
 * @method     Oops_Model_CartDiscountQuery orderByIdCart($order = Criteria::ASC) Order by the id_cart column
 * @method     Oops_Model_CartDiscountQuery orderByIdDiscount($order = Criteria::ASC) Order by the id_discount column
 *
 * @method     Oops_Model_CartDiscountQuery groupByIdCart() Group by the id_cart column
 * @method     Oops_Model_CartDiscountQuery groupByIdDiscount() Group by the id_discount column
 *
 * @method     Oops_Model_CartDiscountQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     Oops_Model_CartDiscountQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     Oops_Model_CartDiscountQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     Oops_Model_CartDiscount findOne(PropelPDO $con = null) Return the first Oops_Model_CartDiscount matching the query
 * @method     Oops_Model_CartDiscount findOneOrCreate(PropelPDO $con = null) Return the first Oops_Model_CartDiscount matching the query, or a new Oops_Model_CartDiscount object populated from the query conditions when no match is found
 *
 * @method     Oops_Model_CartDiscount findOneByIdCart(int $id_cart) Return the first Oops_Model_CartDiscount filtered by the id_cart column
 * @method     Oops_Model_CartDiscount findOneByIdDiscount(int $id_discount) Return the first Oops_Model_CartDiscount filtered by the id_discount column
 *
 * @method     array findByIdCart(int $id_cart) Return Oops_Model_CartDiscount objects filtered by the id_cart column
 * @method     array findByIdDiscount(int $id_discount) Return Oops_Model_CartDiscount objects filtered by the id_discount column
 *
 * @package    propel.generator.prestashop.om
 */
abstract class Oops_Model_Base_CartDiscountQuery extends ModelCriteria
{
	
	/**
	 * Initializes internal state of Oops_Model_Base_CartDiscountQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'prestashop', $modelName = 'Oops_Model_CartDiscount', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new Oops_Model_CartDiscountQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    Oops_Model_CartDiscountQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof Oops_Model_CartDiscountQuery) {
			return $criteria;
		}
		$query = new Oops_Model_CartDiscountQuery();
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
	 * @return    Oops_Model_CartDiscount|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ($key === null) {
			return null;
		}
		if ((null !== ($obj = Oops_Model_CartDiscountPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
			// the object is alredy in the instance pool
			return $obj;
		}
		if ($con === null) {
			$con = Propel::getConnection(Oops_Model_CartDiscountPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
	 * @return    Oops_Model_CartDiscount A model object, or null if the key is not found
	 */
	protected function findPkSimple($key, $con)
	{
		$sql = 'SELECT `ID_CART`, `ID_DISCOUNT` FROM `' . _DB_PREFIX_ . 'djland_cart_discount` WHERE `ID_CART` = :p0';
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
			$obj = new Oops_Model_CartDiscount();
			$obj->hydrate($row);
			Oops_Model_CartDiscountPeer::addInstanceToPool($obj, (string) $row[0]);
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
	 * @return    Oops_Model_CartDiscount|array|mixed the result, formatted by the current formatter
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
	 * @return    Oops_Model_CartDiscountQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(Oops_Model_CartDiscountPeer::ID_CART, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    Oops_Model_CartDiscountQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(Oops_Model_CartDiscountPeer::ID_CART, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id_cart column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByIdCart(1234); // WHERE id_cart = 1234
	 * $query->filterByIdCart(array(12, 34)); // WHERE id_cart IN (12, 34)
	 * $query->filterByIdCart(array('min' => 12)); // WHERE id_cart > 12
	 * </code>
	 *
	 * @param     mixed $idCart The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_CartDiscountQuery The current query, for fluid interface
	 */
	public function filterByIdCart($idCart = null, $comparison = null)
	{
		if (is_array($idCart) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(Oops_Model_CartDiscountPeer::ID_CART, $idCart, $comparison);
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
	 * @return    Oops_Model_CartDiscountQuery The current query, for fluid interface
	 */
	public function filterByIdDiscount($idDiscount = null, $comparison = null)
	{
		if (is_array($idDiscount)) {
			$useMinMax = false;
			if (isset($idDiscount['min'])) {
				$this->addUsingAlias(Oops_Model_CartDiscountPeer::ID_DISCOUNT, $idDiscount['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($idDiscount['max'])) {
				$this->addUsingAlias(Oops_Model_CartDiscountPeer::ID_DISCOUNT, $idDiscount['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_CartDiscountPeer::ID_DISCOUNT, $idDiscount, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     Oops_Model_CartDiscount $cartDiscount Object to remove from the list of results
	 *
	 * @return    Oops_Model_CartDiscountQuery The current query, for fluid interface
	 */
	public function prune($cartDiscount = null)
	{
		if ($cartDiscount) {
			$this->addUsingAlias(Oops_Model_CartDiscountPeer::ID_CART, $cartDiscount->getIdCart(), Criteria::NOT_EQUAL);
		}

		return $this;
	}

} // Oops_Model_Base_CartDiscountQuery