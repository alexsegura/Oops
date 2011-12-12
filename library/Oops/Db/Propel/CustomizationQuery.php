<?php


/**
 * Base class that represents a query for the 'customization' table.
 *
 * 
 *
 * @method     Oops_Db_CustomizationQuery orderByIdCustomization($order = Criteria::ASC) Order by the id_customization column
 * @method     Oops_Db_CustomizationQuery orderByIdProductAttribute($order = Criteria::ASC) Order by the id_product_attribute column
 * @method     Oops_Db_CustomizationQuery orderByIdCart($order = Criteria::ASC) Order by the id_cart column
 * @method     Oops_Db_CustomizationQuery orderByIdProduct($order = Criteria::ASC) Order by the id_product column
 * @method     Oops_Db_CustomizationQuery orderByQuantity($order = Criteria::ASC) Order by the quantity column
 * @method     Oops_Db_CustomizationQuery orderByQuantityRefunded($order = Criteria::ASC) Order by the quantity_refunded column
 * @method     Oops_Db_CustomizationQuery orderByQuantityReturned($order = Criteria::ASC) Order by the quantity_returned column
 *
 * @method     Oops_Db_CustomizationQuery groupByIdCustomization() Group by the id_customization column
 * @method     Oops_Db_CustomizationQuery groupByIdProductAttribute() Group by the id_product_attribute column
 * @method     Oops_Db_CustomizationQuery groupByIdCart() Group by the id_cart column
 * @method     Oops_Db_CustomizationQuery groupByIdProduct() Group by the id_product column
 * @method     Oops_Db_CustomizationQuery groupByQuantity() Group by the quantity column
 * @method     Oops_Db_CustomizationQuery groupByQuantityRefunded() Group by the quantity_refunded column
 * @method     Oops_Db_CustomizationQuery groupByQuantityReturned() Group by the quantity_returned column
 *
 * @method     Oops_Db_CustomizationQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     Oops_Db_CustomizationQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     Oops_Db_CustomizationQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     Oops_Db_Customization findOne(PropelPDO $con = null) Return the first Oops_Db_Customization matching the query
 * @method     Oops_Db_Customization findOneOrCreate(PropelPDO $con = null) Return the first Oops_Db_Customization matching the query, or a new Oops_Db_Customization object populated from the query conditions when no match is found
 *
 * @method     Oops_Db_Customization findOneByIdCustomization(int $id_customization) Return the first Oops_Db_Customization filtered by the id_customization column
 * @method     Oops_Db_Customization findOneByIdProductAttribute(int $id_product_attribute) Return the first Oops_Db_Customization filtered by the id_product_attribute column
 * @method     Oops_Db_Customization findOneByIdCart(int $id_cart) Return the first Oops_Db_Customization filtered by the id_cart column
 * @method     Oops_Db_Customization findOneByIdProduct(int $id_product) Return the first Oops_Db_Customization filtered by the id_product column
 * @method     Oops_Db_Customization findOneByQuantity(int $quantity) Return the first Oops_Db_Customization filtered by the quantity column
 * @method     Oops_Db_Customization findOneByQuantityRefunded(int $quantity_refunded) Return the first Oops_Db_Customization filtered by the quantity_refunded column
 * @method     Oops_Db_Customization findOneByQuantityReturned(int $quantity_returned) Return the first Oops_Db_Customization filtered by the quantity_returned column
 *
 * @method     array findByIdCustomization(int $id_customization) Return Oops_Db_Customization objects filtered by the id_customization column
 * @method     array findByIdProductAttribute(int $id_product_attribute) Return Oops_Db_Customization objects filtered by the id_product_attribute column
 * @method     array findByIdCart(int $id_cart) Return Oops_Db_Customization objects filtered by the id_cart column
 * @method     array findByIdProduct(int $id_product) Return Oops_Db_Customization objects filtered by the id_product column
 * @method     array findByQuantity(int $quantity) Return Oops_Db_Customization objects filtered by the quantity column
 * @method     array findByQuantityRefunded(int $quantity_refunded) Return Oops_Db_Customization objects filtered by the quantity_refunded column
 * @method     array findByQuantityReturned(int $quantity_returned) Return Oops_Db_Customization objects filtered by the quantity_returned column
 *
 * @package    propel.generator.prestashop.om
 */
abstract class Oops_Db_Propel_CustomizationQuery extends ModelCriteria
{
	
	/**
	 * Initializes internal state of Oops_Db_Propel_CustomizationQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'prestashop', $modelName = 'Oops_Db_Customization', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new Oops_Db_CustomizationQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    Oops_Db_CustomizationQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof Oops_Db_CustomizationQuery) {
			return $criteria;
		}
		$query = new Oops_Db_CustomizationQuery();
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
	 * $obj = $c->findPk(array(12, 34, 56), $con);
	 * </code>
	 *
	 * @param     array[$id_customization, $id_cart, $id_product] $key Primary key to use for the query
	 * @param     PropelPDO $con an optional connection object
	 *
	 * @return    Oops_Db_Customization|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ($key === null) {
			return null;
		}
		if ((null !== ($obj = Oops_Db_CustomizationPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1], (string) $key[2]))))) && !$this->formatter) {
			// the object is alredy in the instance pool
			return $obj;
		}
		if ($con === null) {
			$con = Propel::getConnection(Oops_Db_CustomizationPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
	 * @return    Oops_Db_Customization A model object, or null if the key is not found
	 */
	protected function findPkSimple($key, $con)
	{
		$sql = 'SELECT `ID_CUSTOMIZATION`, `ID_PRODUCT_ATTRIBUTE`, `ID_CART`, `ID_PRODUCT`, `QUANTITY`, `QUANTITY_REFUNDED`, `QUANTITY_RETURNED` FROM `' . _DB_PREFIX_ . 'customization` WHERE `ID_CUSTOMIZATION` = :p0 AND `ID_CART` = :p1 AND `ID_PRODUCT` = :p2';
		try {
			$stmt = $con->prepare($sql);
			$stmt->bindValue(':p0', $key[0], PDO::PARAM_INT);
			$stmt->bindValue(':p1', $key[1], PDO::PARAM_INT);
			$stmt->bindValue(':p2', $key[2], PDO::PARAM_INT);
			$stmt->execute();
		} catch (Exception $e) {
			Propel::log($e->getMessage(), Propel::LOG_ERR);
			throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
		}
		$obj = null;
		if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$obj = new Oops_Db_Customization();
			$obj->hydrate($row);
			Oops_Db_CustomizationPeer::addInstanceToPool($obj, serialize(array((string) $row[0], (string) $row[1], (string) $row[2])));
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
	 * @return    Oops_Db_Customization|array|mixed the result, formatted by the current formatter
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
	 * @return    Oops_Db_CustomizationQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		$this->addUsingAlias(Oops_Db_CustomizationPeer::ID_CUSTOMIZATION, $key[0], Criteria::EQUAL);
		$this->addUsingAlias(Oops_Db_CustomizationPeer::ID_CART, $key[1], Criteria::EQUAL);
		$this->addUsingAlias(Oops_Db_CustomizationPeer::ID_PRODUCT, $key[2], Criteria::EQUAL);

		return $this;
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    Oops_Db_CustomizationQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		if (empty($keys)) {
			return $this->add(null, '1<>1', Criteria::CUSTOM);
		}
		foreach ($keys as $key) {
			$cton0 = $this->getNewCriterion(Oops_Db_CustomizationPeer::ID_CUSTOMIZATION, $key[0], Criteria::EQUAL);
			$cton1 = $this->getNewCriterion(Oops_Db_CustomizationPeer::ID_CART, $key[1], Criteria::EQUAL);
			$cton0->addAnd($cton1);
			$cton2 = $this->getNewCriterion(Oops_Db_CustomizationPeer::ID_PRODUCT, $key[2], Criteria::EQUAL);
			$cton0->addAnd($cton2);
			$this->addOr($cton0);
		}

		return $this;
	}

	/**
	 * Filter the query on the id_customization column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByIdCustomization(1234); // WHERE id_customization = 1234
	 * $query->filterByIdCustomization(array(12, 34)); // WHERE id_customization IN (12, 34)
	 * $query->filterByIdCustomization(array('min' => 12)); // WHERE id_customization > 12
	 * </code>
	 *
	 * @param     mixed $idCustomization The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Db_CustomizationQuery The current query, for fluid interface
	 */
	public function filterByIdCustomization($idCustomization = null, $comparison = null)
	{
		if (is_array($idCustomization) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(Oops_Db_CustomizationPeer::ID_CUSTOMIZATION, $idCustomization, $comparison);
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
	 * @return    Oops_Db_CustomizationQuery The current query, for fluid interface
	 */
	public function filterByIdProductAttribute($idProductAttribute = null, $comparison = null)
	{
		if (is_array($idProductAttribute)) {
			$useMinMax = false;
			if (isset($idProductAttribute['min'])) {
				$this->addUsingAlias(Oops_Db_CustomizationPeer::ID_PRODUCT_ATTRIBUTE, $idProductAttribute['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($idProductAttribute['max'])) {
				$this->addUsingAlias(Oops_Db_CustomizationPeer::ID_PRODUCT_ATTRIBUTE, $idProductAttribute['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Db_CustomizationPeer::ID_PRODUCT_ATTRIBUTE, $idProductAttribute, $comparison);
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
	 * @return    Oops_Db_CustomizationQuery The current query, for fluid interface
	 */
	public function filterByIdCart($idCart = null, $comparison = null)
	{
		if (is_array($idCart) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(Oops_Db_CustomizationPeer::ID_CART, $idCart, $comparison);
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
	 * @return    Oops_Db_CustomizationQuery The current query, for fluid interface
	 */
	public function filterByIdProduct($idProduct = null, $comparison = null)
	{
		if (is_array($idProduct) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(Oops_Db_CustomizationPeer::ID_PRODUCT, $idProduct, $comparison);
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
	 * @return    Oops_Db_CustomizationQuery The current query, for fluid interface
	 */
	public function filterByQuantity($quantity = null, $comparison = null)
	{
		if (is_array($quantity)) {
			$useMinMax = false;
			if (isset($quantity['min'])) {
				$this->addUsingAlias(Oops_Db_CustomizationPeer::QUANTITY, $quantity['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($quantity['max'])) {
				$this->addUsingAlias(Oops_Db_CustomizationPeer::QUANTITY, $quantity['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Db_CustomizationPeer::QUANTITY, $quantity, $comparison);
	}

	/**
	 * Filter the query on the quantity_refunded column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByQuantityRefunded(1234); // WHERE quantity_refunded = 1234
	 * $query->filterByQuantityRefunded(array(12, 34)); // WHERE quantity_refunded IN (12, 34)
	 * $query->filterByQuantityRefunded(array('min' => 12)); // WHERE quantity_refunded > 12
	 * </code>
	 *
	 * @param     mixed $quantityRefunded The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Db_CustomizationQuery The current query, for fluid interface
	 */
	public function filterByQuantityRefunded($quantityRefunded = null, $comparison = null)
	{
		if (is_array($quantityRefunded)) {
			$useMinMax = false;
			if (isset($quantityRefunded['min'])) {
				$this->addUsingAlias(Oops_Db_CustomizationPeer::QUANTITY_REFUNDED, $quantityRefunded['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($quantityRefunded['max'])) {
				$this->addUsingAlias(Oops_Db_CustomizationPeer::QUANTITY_REFUNDED, $quantityRefunded['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Db_CustomizationPeer::QUANTITY_REFUNDED, $quantityRefunded, $comparison);
	}

	/**
	 * Filter the query on the quantity_returned column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByQuantityReturned(1234); // WHERE quantity_returned = 1234
	 * $query->filterByQuantityReturned(array(12, 34)); // WHERE quantity_returned IN (12, 34)
	 * $query->filterByQuantityReturned(array('min' => 12)); // WHERE quantity_returned > 12
	 * </code>
	 *
	 * @param     mixed $quantityReturned The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Db_CustomizationQuery The current query, for fluid interface
	 */
	public function filterByQuantityReturned($quantityReturned = null, $comparison = null)
	{
		if (is_array($quantityReturned)) {
			$useMinMax = false;
			if (isset($quantityReturned['min'])) {
				$this->addUsingAlias(Oops_Db_CustomizationPeer::QUANTITY_RETURNED, $quantityReturned['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($quantityReturned['max'])) {
				$this->addUsingAlias(Oops_Db_CustomizationPeer::QUANTITY_RETURNED, $quantityReturned['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Db_CustomizationPeer::QUANTITY_RETURNED, $quantityReturned, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     Oops_Db_Customization $customization Object to remove from the list of results
	 *
	 * @return    Oops_Db_CustomizationQuery The current query, for fluid interface
	 */
	public function prune($customization = null)
	{
		if ($customization) {
			$this->addCond('pruneCond0', $this->getAliasedColName(Oops_Db_CustomizationPeer::ID_CUSTOMIZATION), $customization->getIdCustomization(), Criteria::NOT_EQUAL);
			$this->addCond('pruneCond1', $this->getAliasedColName(Oops_Db_CustomizationPeer::ID_CART), $customization->getIdCart(), Criteria::NOT_EQUAL);
			$this->addCond('pruneCond2', $this->getAliasedColName(Oops_Db_CustomizationPeer::ID_PRODUCT), $customization->getIdProduct(), Criteria::NOT_EQUAL);
			$this->combine(array('pruneCond0', 'pruneCond1', 'pruneCond2'), Criteria::LOGICAL_OR);
		}

		return $this;
	}

} // Oops_Db_Propel_CustomizationQuery