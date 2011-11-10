<?php


/**
 * Base class that represents a query for the 'specific_price' table.
 *
 * 
 *
 * @method     Oops_Model_SpecificPriceQuery orderByIdSpecificPrice($order = Criteria::ASC) Order by the id_specific_price column
 * @method     Oops_Model_SpecificPriceQuery orderByIdProduct($order = Criteria::ASC) Order by the id_product column
 * @method     Oops_Model_SpecificPriceQuery orderByIdShop($order = Criteria::ASC) Order by the id_shop column
 * @method     Oops_Model_SpecificPriceQuery orderByIdCurrency($order = Criteria::ASC) Order by the id_currency column
 * @method     Oops_Model_SpecificPriceQuery orderByIdCountry($order = Criteria::ASC) Order by the id_country column
 * @method     Oops_Model_SpecificPriceQuery orderByIdGroup($order = Criteria::ASC) Order by the id_group column
 * @method     Oops_Model_SpecificPriceQuery orderByPrice($order = Criteria::ASC) Order by the price column
 * @method     Oops_Model_SpecificPriceQuery orderByFromQuantity($order = Criteria::ASC) Order by the from_quantity column
 * @method     Oops_Model_SpecificPriceQuery orderByReduction($order = Criteria::ASC) Order by the reduction column
 * @method     Oops_Model_SpecificPriceQuery orderByReductionType($order = Criteria::ASC) Order by the reduction_type column
 * @method     Oops_Model_SpecificPriceQuery orderByFrom($order = Criteria::ASC) Order by the from column
 * @method     Oops_Model_SpecificPriceQuery orderByTo($order = Criteria::ASC) Order by the to column
 *
 * @method     Oops_Model_SpecificPriceQuery groupByIdSpecificPrice() Group by the id_specific_price column
 * @method     Oops_Model_SpecificPriceQuery groupByIdProduct() Group by the id_product column
 * @method     Oops_Model_SpecificPriceQuery groupByIdShop() Group by the id_shop column
 * @method     Oops_Model_SpecificPriceQuery groupByIdCurrency() Group by the id_currency column
 * @method     Oops_Model_SpecificPriceQuery groupByIdCountry() Group by the id_country column
 * @method     Oops_Model_SpecificPriceQuery groupByIdGroup() Group by the id_group column
 * @method     Oops_Model_SpecificPriceQuery groupByPrice() Group by the price column
 * @method     Oops_Model_SpecificPriceQuery groupByFromQuantity() Group by the from_quantity column
 * @method     Oops_Model_SpecificPriceQuery groupByReduction() Group by the reduction column
 * @method     Oops_Model_SpecificPriceQuery groupByReductionType() Group by the reduction_type column
 * @method     Oops_Model_SpecificPriceQuery groupByFrom() Group by the from column
 * @method     Oops_Model_SpecificPriceQuery groupByTo() Group by the to column
 *
 * @method     Oops_Model_SpecificPriceQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     Oops_Model_SpecificPriceQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     Oops_Model_SpecificPriceQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     Oops_Model_SpecificPrice findOne(PropelPDO $con = null) Return the first Oops_Model_SpecificPrice matching the query
 * @method     Oops_Model_SpecificPrice findOneOrCreate(PropelPDO $con = null) Return the first Oops_Model_SpecificPrice matching the query, or a new Oops_Model_SpecificPrice object populated from the query conditions when no match is found
 *
 * @method     Oops_Model_SpecificPrice findOneByIdSpecificPrice(int $id_specific_price) Return the first Oops_Model_SpecificPrice filtered by the id_specific_price column
 * @method     Oops_Model_SpecificPrice findOneByIdProduct(int $id_product) Return the first Oops_Model_SpecificPrice filtered by the id_product column
 * @method     Oops_Model_SpecificPrice findOneByIdShop(int $id_shop) Return the first Oops_Model_SpecificPrice filtered by the id_shop column
 * @method     Oops_Model_SpecificPrice findOneByIdCurrency(int $id_currency) Return the first Oops_Model_SpecificPrice filtered by the id_currency column
 * @method     Oops_Model_SpecificPrice findOneByIdCountry(int $id_country) Return the first Oops_Model_SpecificPrice filtered by the id_country column
 * @method     Oops_Model_SpecificPrice findOneByIdGroup(int $id_group) Return the first Oops_Model_SpecificPrice filtered by the id_group column
 * @method     Oops_Model_SpecificPrice findOneByPrice(string $price) Return the first Oops_Model_SpecificPrice filtered by the price column
 * @method     Oops_Model_SpecificPrice findOneByFromQuantity(int $from_quantity) Return the first Oops_Model_SpecificPrice filtered by the from_quantity column
 * @method     Oops_Model_SpecificPrice findOneByReduction(string $reduction) Return the first Oops_Model_SpecificPrice filtered by the reduction column
 * @method     Oops_Model_SpecificPrice findOneByReductionType(string $reduction_type) Return the first Oops_Model_SpecificPrice filtered by the reduction_type column
 * @method     Oops_Model_SpecificPrice findOneByFrom(string $from) Return the first Oops_Model_SpecificPrice filtered by the from column
 * @method     Oops_Model_SpecificPrice findOneByTo(string $to) Return the first Oops_Model_SpecificPrice filtered by the to column
 *
 * @method     array findByIdSpecificPrice(int $id_specific_price) Return Oops_Model_SpecificPrice objects filtered by the id_specific_price column
 * @method     array findByIdProduct(int $id_product) Return Oops_Model_SpecificPrice objects filtered by the id_product column
 * @method     array findByIdShop(int $id_shop) Return Oops_Model_SpecificPrice objects filtered by the id_shop column
 * @method     array findByIdCurrency(int $id_currency) Return Oops_Model_SpecificPrice objects filtered by the id_currency column
 * @method     array findByIdCountry(int $id_country) Return Oops_Model_SpecificPrice objects filtered by the id_country column
 * @method     array findByIdGroup(int $id_group) Return Oops_Model_SpecificPrice objects filtered by the id_group column
 * @method     array findByPrice(string $price) Return Oops_Model_SpecificPrice objects filtered by the price column
 * @method     array findByFromQuantity(int $from_quantity) Return Oops_Model_SpecificPrice objects filtered by the from_quantity column
 * @method     array findByReduction(string $reduction) Return Oops_Model_SpecificPrice objects filtered by the reduction column
 * @method     array findByReductionType(string $reduction_type) Return Oops_Model_SpecificPrice objects filtered by the reduction_type column
 * @method     array findByFrom(string $from) Return Oops_Model_SpecificPrice objects filtered by the from column
 * @method     array findByTo(string $to) Return Oops_Model_SpecificPrice objects filtered by the to column
 *
 * @package    propel.generator.prestashop.om
 */
abstract class Oops_Model_Base_SpecificPriceQuery extends ModelCriteria
{
	
	/**
	 * Initializes internal state of Oops_Model_Base_SpecificPriceQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'prestashop', $modelName = 'Oops_Model_SpecificPrice', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new Oops_Model_SpecificPriceQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    Oops_Model_SpecificPriceQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof Oops_Model_SpecificPriceQuery) {
			return $criteria;
		}
		$query = new Oops_Model_SpecificPriceQuery();
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
	 * @return    Oops_Model_SpecificPrice|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ($key === null) {
			return null;
		}
		if ((null !== ($obj = Oops_Model_SpecificPricePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
			// the object is alredy in the instance pool
			return $obj;
		}
		if ($con === null) {
			$con = Propel::getConnection(Oops_Model_SpecificPricePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
	 * @return    Oops_Model_SpecificPrice A model object, or null if the key is not found
	 */
	protected function findPkSimple($key, $con)
	{
		$sql = 'SELECT `ID_SPECIFIC_PRICE`, `ID_PRODUCT`, `ID_SHOP`, `ID_CURRENCY`, `ID_COUNTRY`, `ID_GROUP`, `PRICE`, `FROM_QUANTITY`, `REDUCTION`, `REDUCTION_TYPE`, `FROM`, `TO` FROM `' . _DB_PREFIX_ . 'specific_price` WHERE `ID_SPECIFIC_PRICE` = :p0';
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
			$obj = new Oops_Model_SpecificPrice();
			$obj->hydrate($row);
			Oops_Model_SpecificPricePeer::addInstanceToPool($obj, (string) $row[0]);
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
	 * @return    Oops_Model_SpecificPrice|array|mixed the result, formatted by the current formatter
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
	 * @return    Oops_Model_SpecificPriceQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(Oops_Model_SpecificPricePeer::ID_SPECIFIC_PRICE, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    Oops_Model_SpecificPriceQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(Oops_Model_SpecificPricePeer::ID_SPECIFIC_PRICE, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id_specific_price column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByIdSpecificPrice(1234); // WHERE id_specific_price = 1234
	 * $query->filterByIdSpecificPrice(array(12, 34)); // WHERE id_specific_price IN (12, 34)
	 * $query->filterByIdSpecificPrice(array('min' => 12)); // WHERE id_specific_price > 12
	 * </code>
	 *
	 * @param     mixed $idSpecificPrice The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_SpecificPriceQuery The current query, for fluid interface
	 */
	public function filterByIdSpecificPrice($idSpecificPrice = null, $comparison = null)
	{
		if (is_array($idSpecificPrice) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(Oops_Model_SpecificPricePeer::ID_SPECIFIC_PRICE, $idSpecificPrice, $comparison);
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
	 * @return    Oops_Model_SpecificPriceQuery The current query, for fluid interface
	 */
	public function filterByIdProduct($idProduct = null, $comparison = null)
	{
		if (is_array($idProduct)) {
			$useMinMax = false;
			if (isset($idProduct['min'])) {
				$this->addUsingAlias(Oops_Model_SpecificPricePeer::ID_PRODUCT, $idProduct['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($idProduct['max'])) {
				$this->addUsingAlias(Oops_Model_SpecificPricePeer::ID_PRODUCT, $idProduct['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_SpecificPricePeer::ID_PRODUCT, $idProduct, $comparison);
	}

	/**
	 * Filter the query on the id_shop column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByIdShop(1234); // WHERE id_shop = 1234
	 * $query->filterByIdShop(array(12, 34)); // WHERE id_shop IN (12, 34)
	 * $query->filterByIdShop(array('min' => 12)); // WHERE id_shop > 12
	 * </code>
	 *
	 * @param     mixed $idShop The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_SpecificPriceQuery The current query, for fluid interface
	 */
	public function filterByIdShop($idShop = null, $comparison = null)
	{
		if (is_array($idShop)) {
			$useMinMax = false;
			if (isset($idShop['min'])) {
				$this->addUsingAlias(Oops_Model_SpecificPricePeer::ID_SHOP, $idShop['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($idShop['max'])) {
				$this->addUsingAlias(Oops_Model_SpecificPricePeer::ID_SHOP, $idShop['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_SpecificPricePeer::ID_SHOP, $idShop, $comparison);
	}

	/**
	 * Filter the query on the id_currency column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByIdCurrency(1234); // WHERE id_currency = 1234
	 * $query->filterByIdCurrency(array(12, 34)); // WHERE id_currency IN (12, 34)
	 * $query->filterByIdCurrency(array('min' => 12)); // WHERE id_currency > 12
	 * </code>
	 *
	 * @param     mixed $idCurrency The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_SpecificPriceQuery The current query, for fluid interface
	 */
	public function filterByIdCurrency($idCurrency = null, $comparison = null)
	{
		if (is_array($idCurrency)) {
			$useMinMax = false;
			if (isset($idCurrency['min'])) {
				$this->addUsingAlias(Oops_Model_SpecificPricePeer::ID_CURRENCY, $idCurrency['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($idCurrency['max'])) {
				$this->addUsingAlias(Oops_Model_SpecificPricePeer::ID_CURRENCY, $idCurrency['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_SpecificPricePeer::ID_CURRENCY, $idCurrency, $comparison);
	}

	/**
	 * Filter the query on the id_country column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByIdCountry(1234); // WHERE id_country = 1234
	 * $query->filterByIdCountry(array(12, 34)); // WHERE id_country IN (12, 34)
	 * $query->filterByIdCountry(array('min' => 12)); // WHERE id_country > 12
	 * </code>
	 *
	 * @param     mixed $idCountry The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_SpecificPriceQuery The current query, for fluid interface
	 */
	public function filterByIdCountry($idCountry = null, $comparison = null)
	{
		if (is_array($idCountry)) {
			$useMinMax = false;
			if (isset($idCountry['min'])) {
				$this->addUsingAlias(Oops_Model_SpecificPricePeer::ID_COUNTRY, $idCountry['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($idCountry['max'])) {
				$this->addUsingAlias(Oops_Model_SpecificPricePeer::ID_COUNTRY, $idCountry['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_SpecificPricePeer::ID_COUNTRY, $idCountry, $comparison);
	}

	/**
	 * Filter the query on the id_group column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByIdGroup(1234); // WHERE id_group = 1234
	 * $query->filterByIdGroup(array(12, 34)); // WHERE id_group IN (12, 34)
	 * $query->filterByIdGroup(array('min' => 12)); // WHERE id_group > 12
	 * </code>
	 *
	 * @param     mixed $idGroup The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_SpecificPriceQuery The current query, for fluid interface
	 */
	public function filterByIdGroup($idGroup = null, $comparison = null)
	{
		if (is_array($idGroup)) {
			$useMinMax = false;
			if (isset($idGroup['min'])) {
				$this->addUsingAlias(Oops_Model_SpecificPricePeer::ID_GROUP, $idGroup['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($idGroup['max'])) {
				$this->addUsingAlias(Oops_Model_SpecificPricePeer::ID_GROUP, $idGroup['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_SpecificPricePeer::ID_GROUP, $idGroup, $comparison);
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
	 * @return    Oops_Model_SpecificPriceQuery The current query, for fluid interface
	 */
	public function filterByPrice($price = null, $comparison = null)
	{
		if (is_array($price)) {
			$useMinMax = false;
			if (isset($price['min'])) {
				$this->addUsingAlias(Oops_Model_SpecificPricePeer::PRICE, $price['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($price['max'])) {
				$this->addUsingAlias(Oops_Model_SpecificPricePeer::PRICE, $price['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_SpecificPricePeer::PRICE, $price, $comparison);
	}

	/**
	 * Filter the query on the from_quantity column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByFromQuantity(1234); // WHERE from_quantity = 1234
	 * $query->filterByFromQuantity(array(12, 34)); // WHERE from_quantity IN (12, 34)
	 * $query->filterByFromQuantity(array('min' => 12)); // WHERE from_quantity > 12
	 * </code>
	 *
	 * @param     mixed $fromQuantity The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_SpecificPriceQuery The current query, for fluid interface
	 */
	public function filterByFromQuantity($fromQuantity = null, $comparison = null)
	{
		if (is_array($fromQuantity)) {
			$useMinMax = false;
			if (isset($fromQuantity['min'])) {
				$this->addUsingAlias(Oops_Model_SpecificPricePeer::FROM_QUANTITY, $fromQuantity['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($fromQuantity['max'])) {
				$this->addUsingAlias(Oops_Model_SpecificPricePeer::FROM_QUANTITY, $fromQuantity['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_SpecificPricePeer::FROM_QUANTITY, $fromQuantity, $comparison);
	}

	/**
	 * Filter the query on the reduction column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByReduction(1234); // WHERE reduction = 1234
	 * $query->filterByReduction(array(12, 34)); // WHERE reduction IN (12, 34)
	 * $query->filterByReduction(array('min' => 12)); // WHERE reduction > 12
	 * </code>
	 *
	 * @param     mixed $reduction The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_SpecificPriceQuery The current query, for fluid interface
	 */
	public function filterByReduction($reduction = null, $comparison = null)
	{
		if (is_array($reduction)) {
			$useMinMax = false;
			if (isset($reduction['min'])) {
				$this->addUsingAlias(Oops_Model_SpecificPricePeer::REDUCTION, $reduction['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($reduction['max'])) {
				$this->addUsingAlias(Oops_Model_SpecificPricePeer::REDUCTION, $reduction['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_SpecificPricePeer::REDUCTION, $reduction, $comparison);
	}

	/**
	 * Filter the query on the reduction_type column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByReductionType('fooValue');   // WHERE reduction_type = 'fooValue'
	 * $query->filterByReductionType('%fooValue%'); // WHERE reduction_type LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $reductionType The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_SpecificPriceQuery The current query, for fluid interface
	 */
	public function filterByReductionType($reductionType = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($reductionType)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $reductionType)) {
				$reductionType = str_replace('*', '%', $reductionType);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(Oops_Model_SpecificPricePeer::REDUCTION_TYPE, $reductionType, $comparison);
	}

	/**
	 * Filter the query on the from column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByFrom('2011-03-14'); // WHERE from = '2011-03-14'
	 * $query->filterByFrom('now'); // WHERE from = '2011-03-14'
	 * $query->filterByFrom(array('max' => 'yesterday')); // WHERE from > '2011-03-13'
	 * </code>
	 *
	 * @param     mixed $from The value to use as filter.
	 *              Values can be integers (unix timestamps), DateTime objects, or strings.
	 *              Empty strings are treated as NULL.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_SpecificPriceQuery The current query, for fluid interface
	 */
	public function filterByFrom($from = null, $comparison = null)
	{
		if (is_array($from)) {
			$useMinMax = false;
			if (isset($from['min'])) {
				$this->addUsingAlias(Oops_Model_SpecificPricePeer::FROM, $from['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($from['max'])) {
				$this->addUsingAlias(Oops_Model_SpecificPricePeer::FROM, $from['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_SpecificPricePeer::FROM, $from, $comparison);
	}

	/**
	 * Filter the query on the to column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByTo('2011-03-14'); // WHERE to = '2011-03-14'
	 * $query->filterByTo('now'); // WHERE to = '2011-03-14'
	 * $query->filterByTo(array('max' => 'yesterday')); // WHERE to > '2011-03-13'
	 * </code>
	 *
	 * @param     mixed $to The value to use as filter.
	 *              Values can be integers (unix timestamps), DateTime objects, or strings.
	 *              Empty strings are treated as NULL.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_SpecificPriceQuery The current query, for fluid interface
	 */
	public function filterByTo($to = null, $comparison = null)
	{
		if (is_array($to)) {
			$useMinMax = false;
			if (isset($to['min'])) {
				$this->addUsingAlias(Oops_Model_SpecificPricePeer::TO, $to['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($to['max'])) {
				$this->addUsingAlias(Oops_Model_SpecificPricePeer::TO, $to['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_SpecificPricePeer::TO, $to, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     Oops_Model_SpecificPrice $specificPrice Object to remove from the list of results
	 *
	 * @return    Oops_Model_SpecificPriceQuery The current query, for fluid interface
	 */
	public function prune($specificPrice = null)
	{
		if ($specificPrice) {
			$this->addUsingAlias(Oops_Model_SpecificPricePeer::ID_SPECIFIC_PRICE, $specificPrice->getIdSpecificPrice(), Criteria::NOT_EQUAL);
		}

		return $this;
	}

} // Oops_Model_Base_SpecificPriceQuery