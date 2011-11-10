<?php


/**
 * Base class that represents a query for the 'cart_product' table.
 *
 * 
 *
 * @method     Oops_Model_CartProductQuery orderByIdCart($order = Criteria::ASC) Order by the id_cart column
 * @method     Oops_Model_CartProductQuery orderByIdProduct($order = Criteria::ASC) Order by the id_product column
 * @method     Oops_Model_CartProductQuery orderByIdProductAttribute($order = Criteria::ASC) Order by the id_product_attribute column
 * @method     Oops_Model_CartProductQuery orderByQuantity($order = Criteria::ASC) Order by the quantity column
 * @method     Oops_Model_CartProductQuery orderByDateAdd($order = Criteria::ASC) Order by the date_add column
 *
 * @method     Oops_Model_CartProductQuery groupByIdCart() Group by the id_cart column
 * @method     Oops_Model_CartProductQuery groupByIdProduct() Group by the id_product column
 * @method     Oops_Model_CartProductQuery groupByIdProductAttribute() Group by the id_product_attribute column
 * @method     Oops_Model_CartProductQuery groupByQuantity() Group by the quantity column
 * @method     Oops_Model_CartProductQuery groupByDateAdd() Group by the date_add column
 *
 * @method     Oops_Model_CartProductQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     Oops_Model_CartProductQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     Oops_Model_CartProductQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     Oops_Model_CartProduct findOne(PropelPDO $con = null) Return the first Oops_Model_CartProduct matching the query
 * @method     Oops_Model_CartProduct findOneOrCreate(PropelPDO $con = null) Return the first Oops_Model_CartProduct matching the query, or a new Oops_Model_CartProduct object populated from the query conditions when no match is found
 *
 * @method     Oops_Model_CartProduct findOneByIdCart(int $id_cart) Return the first Oops_Model_CartProduct filtered by the id_cart column
 * @method     Oops_Model_CartProduct findOneByIdProduct(int $id_product) Return the first Oops_Model_CartProduct filtered by the id_product column
 * @method     Oops_Model_CartProduct findOneByIdProductAttribute(int $id_product_attribute) Return the first Oops_Model_CartProduct filtered by the id_product_attribute column
 * @method     Oops_Model_CartProduct findOneByQuantity(int $quantity) Return the first Oops_Model_CartProduct filtered by the quantity column
 * @method     Oops_Model_CartProduct findOneByDateAdd(string $date_add) Return the first Oops_Model_CartProduct filtered by the date_add column
 *
 * @method     array findByIdCart(int $id_cart) Return Oops_Model_CartProduct objects filtered by the id_cart column
 * @method     array findByIdProduct(int $id_product) Return Oops_Model_CartProduct objects filtered by the id_product column
 * @method     array findByIdProductAttribute(int $id_product_attribute) Return Oops_Model_CartProduct objects filtered by the id_product_attribute column
 * @method     array findByQuantity(int $quantity) Return Oops_Model_CartProduct objects filtered by the quantity column
 * @method     array findByDateAdd(string $date_add) Return Oops_Model_CartProduct objects filtered by the date_add column
 *
 * @package    propel.generator.prestashop.om
 */
abstract class Oops_Model_Base_CartProductQuery extends ModelCriteria
{
	
	/**
	 * Initializes internal state of Oops_Model_Base_CartProductQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'prestashop', $modelName = 'Oops_Model_CartProduct', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new Oops_Model_CartProductQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    Oops_Model_CartProductQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof Oops_Model_CartProductQuery) {
			return $criteria;
		}
		$query = new Oops_Model_CartProductQuery();
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
	 * @return    Oops_Model_CartProduct|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ($key === null) {
			return null;
		}
		if ((null !== ($obj = Oops_Model_CartProductPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
			// the object is alredy in the instance pool
			return $obj;
		}
		if ($con === null) {
			$con = Propel::getConnection(Oops_Model_CartProductPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
	 * @return    Oops_Model_CartProduct A model object, or null if the key is not found
	 */
	protected function findPkSimple($key, $con)
	{
		$sql = 'SELECT `ID_CART`, `ID_PRODUCT`, `ID_PRODUCT_ATTRIBUTE`, `QUANTITY`, `DATE_ADD` FROM `' . _DB_PREFIX_ . 'cart_product` WHERE `ID_CART` = :p0';
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
			$obj = new Oops_Model_CartProduct();
			$obj->hydrate($row);
			Oops_Model_CartProductPeer::addInstanceToPool($obj, (string) $row[0]);
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
	 * @return    Oops_Model_CartProduct|array|mixed the result, formatted by the current formatter
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
	 * @return    Oops_Model_CartProductQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(Oops_Model_CartProductPeer::ID_CART, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    Oops_Model_CartProductQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(Oops_Model_CartProductPeer::ID_CART, $keys, Criteria::IN);
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
	 * @return    Oops_Model_CartProductQuery The current query, for fluid interface
	 */
	public function filterByIdCart($idCart = null, $comparison = null)
	{
		if (is_array($idCart) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(Oops_Model_CartProductPeer::ID_CART, $idCart, $comparison);
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
	 * @param     mixed $idProduct The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_CartProductQuery The current query, for fluid interface
	 */
	public function filterByIdProduct($idProduct = null, $comparison = null)
	{
		if (is_array($idProduct)) {
			$useMinMax = false;
			if (isset($idProduct['min'])) {
				$this->addUsingAlias(Oops_Model_CartProductPeer::ID_PRODUCT, $idProduct['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($idProduct['max'])) {
				$this->addUsingAlias(Oops_Model_CartProductPeer::ID_PRODUCT, $idProduct['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_CartProductPeer::ID_PRODUCT, $idProduct, $comparison);
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
	 * @return    Oops_Model_CartProductQuery The current query, for fluid interface
	 */
	public function filterByIdProductAttribute($idProductAttribute = null, $comparison = null)
	{
		if (is_array($idProductAttribute)) {
			$useMinMax = false;
			if (isset($idProductAttribute['min'])) {
				$this->addUsingAlias(Oops_Model_CartProductPeer::ID_PRODUCT_ATTRIBUTE, $idProductAttribute['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($idProductAttribute['max'])) {
				$this->addUsingAlias(Oops_Model_CartProductPeer::ID_PRODUCT_ATTRIBUTE, $idProductAttribute['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_CartProductPeer::ID_PRODUCT_ATTRIBUTE, $idProductAttribute, $comparison);
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
	 * @return    Oops_Model_CartProductQuery The current query, for fluid interface
	 */
	public function filterByQuantity($quantity = null, $comparison = null)
	{
		if (is_array($quantity)) {
			$useMinMax = false;
			if (isset($quantity['min'])) {
				$this->addUsingAlias(Oops_Model_CartProductPeer::QUANTITY, $quantity['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($quantity['max'])) {
				$this->addUsingAlias(Oops_Model_CartProductPeer::QUANTITY, $quantity['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_CartProductPeer::QUANTITY, $quantity, $comparison);
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
	 * @return    Oops_Model_CartProductQuery The current query, for fluid interface
	 */
	public function filterByDateAdd($dateAdd = null, $comparison = null)
	{
		if (is_array($dateAdd)) {
			$useMinMax = false;
			if (isset($dateAdd['min'])) {
				$this->addUsingAlias(Oops_Model_CartProductPeer::DATE_ADD, $dateAdd['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($dateAdd['max'])) {
				$this->addUsingAlias(Oops_Model_CartProductPeer::DATE_ADD, $dateAdd['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_CartProductPeer::DATE_ADD, $dateAdd, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     Oops_Model_CartProduct $cartProduct Object to remove from the list of results
	 *
	 * @return    Oops_Model_CartProductQuery The current query, for fluid interface
	 */
	public function prune($cartProduct = null)
	{
		if ($cartProduct) {
			$this->addUsingAlias(Oops_Model_CartProductPeer::ID_CART, $cartProduct->getIdCart(), Criteria::NOT_EQUAL);
		}

		return $this;
	}

} // Oops_Model_Base_CartProductQuery