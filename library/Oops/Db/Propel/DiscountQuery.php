<?php


/**
 * Base class that represents a query for the 'discount' table.
 *
 * 
 *
 * @method     Oops_Db_DiscountQuery orderByIdDiscount($order = Criteria::ASC) Order by the id_discount column
 * @method     Oops_Db_DiscountQuery orderByIdDiscountType($order = Criteria::ASC) Order by the id_discount_type column
 * @method     Oops_Db_DiscountQuery orderByBehaviorNotExhausted($order = Criteria::ASC) Order by the behavior_not_exhausted column
 * @method     Oops_Db_DiscountQuery orderByIdCustomer($order = Criteria::ASC) Order by the id_customer column
 * @method     Oops_Db_DiscountQuery orderByIdGroup($order = Criteria::ASC) Order by the id_group column
 * @method     Oops_Db_DiscountQuery orderByIdCurrency($order = Criteria::ASC) Order by the id_currency column
 * @method     Oops_Db_DiscountQuery orderByName($order = Criteria::ASC) Order by the name column
 * @method     Oops_Db_DiscountQuery orderByValue($order = Criteria::ASC) Order by the value column
 * @method     Oops_Db_DiscountQuery orderByQuantity($order = Criteria::ASC) Order by the quantity column
 * @method     Oops_Db_DiscountQuery orderByQuantityPerUser($order = Criteria::ASC) Order by the quantity_per_user column
 * @method     Oops_Db_DiscountQuery orderByCumulable($order = Criteria::ASC) Order by the cumulable column
 * @method     Oops_Db_DiscountQuery orderByCumulableReduction($order = Criteria::ASC) Order by the cumulable_reduction column
 * @method     Oops_Db_DiscountQuery orderByDateFrom($order = Criteria::ASC) Order by the date_from column
 * @method     Oops_Db_DiscountQuery orderByDateTo($order = Criteria::ASC) Order by the date_to column
 * @method     Oops_Db_DiscountQuery orderByMinimal($order = Criteria::ASC) Order by the minimal column
 * @method     Oops_Db_DiscountQuery orderByActive($order = Criteria::ASC) Order by the active column
 * @method     Oops_Db_DiscountQuery orderByCartDisplay($order = Criteria::ASC) Order by the cart_display column
 * @method     Oops_Db_DiscountQuery orderByDateAdd($order = Criteria::ASC) Order by the date_add column
 * @method     Oops_Db_DiscountQuery orderByDateUpd($order = Criteria::ASC) Order by the date_upd column
 *
 * @method     Oops_Db_DiscountQuery groupByIdDiscount() Group by the id_discount column
 * @method     Oops_Db_DiscountQuery groupByIdDiscountType() Group by the id_discount_type column
 * @method     Oops_Db_DiscountQuery groupByBehaviorNotExhausted() Group by the behavior_not_exhausted column
 * @method     Oops_Db_DiscountQuery groupByIdCustomer() Group by the id_customer column
 * @method     Oops_Db_DiscountQuery groupByIdGroup() Group by the id_group column
 * @method     Oops_Db_DiscountQuery groupByIdCurrency() Group by the id_currency column
 * @method     Oops_Db_DiscountQuery groupByName() Group by the name column
 * @method     Oops_Db_DiscountQuery groupByValue() Group by the value column
 * @method     Oops_Db_DiscountQuery groupByQuantity() Group by the quantity column
 * @method     Oops_Db_DiscountQuery groupByQuantityPerUser() Group by the quantity_per_user column
 * @method     Oops_Db_DiscountQuery groupByCumulable() Group by the cumulable column
 * @method     Oops_Db_DiscountQuery groupByCumulableReduction() Group by the cumulable_reduction column
 * @method     Oops_Db_DiscountQuery groupByDateFrom() Group by the date_from column
 * @method     Oops_Db_DiscountQuery groupByDateTo() Group by the date_to column
 * @method     Oops_Db_DiscountQuery groupByMinimal() Group by the minimal column
 * @method     Oops_Db_DiscountQuery groupByActive() Group by the active column
 * @method     Oops_Db_DiscountQuery groupByCartDisplay() Group by the cart_display column
 * @method     Oops_Db_DiscountQuery groupByDateAdd() Group by the date_add column
 * @method     Oops_Db_DiscountQuery groupByDateUpd() Group by the date_upd column
 *
 * @method     Oops_Db_DiscountQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     Oops_Db_DiscountQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     Oops_Db_DiscountQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     Oops_Db_Discount findOne(PropelPDO $con = null) Return the first Oops_Db_Discount matching the query
 * @method     Oops_Db_Discount findOneOrCreate(PropelPDO $con = null) Return the first Oops_Db_Discount matching the query, or a new Oops_Db_Discount object populated from the query conditions when no match is found
 *
 * @method     Oops_Db_Discount findOneByIdDiscount(int $id_discount) Return the first Oops_Db_Discount filtered by the id_discount column
 * @method     Oops_Db_Discount findOneByIdDiscountType(int $id_discount_type) Return the first Oops_Db_Discount filtered by the id_discount_type column
 * @method     Oops_Db_Discount findOneByBehaviorNotExhausted(int $behavior_not_exhausted) Return the first Oops_Db_Discount filtered by the behavior_not_exhausted column
 * @method     Oops_Db_Discount findOneByIdCustomer(int $id_customer) Return the first Oops_Db_Discount filtered by the id_customer column
 * @method     Oops_Db_Discount findOneByIdGroup(int $id_group) Return the first Oops_Db_Discount filtered by the id_group column
 * @method     Oops_Db_Discount findOneByIdCurrency(int $id_currency) Return the first Oops_Db_Discount filtered by the id_currency column
 * @method     Oops_Db_Discount findOneByName(string $name) Return the first Oops_Db_Discount filtered by the name column
 * @method     Oops_Db_Discount findOneByValue(string $value) Return the first Oops_Db_Discount filtered by the value column
 * @method     Oops_Db_Discount findOneByQuantity(int $quantity) Return the first Oops_Db_Discount filtered by the quantity column
 * @method     Oops_Db_Discount findOneByQuantityPerUser(int $quantity_per_user) Return the first Oops_Db_Discount filtered by the quantity_per_user column
 * @method     Oops_Db_Discount findOneByCumulable(boolean $cumulable) Return the first Oops_Db_Discount filtered by the cumulable column
 * @method     Oops_Db_Discount findOneByCumulableReduction(boolean $cumulable_reduction) Return the first Oops_Db_Discount filtered by the cumulable_reduction column
 * @method     Oops_Db_Discount findOneByDateFrom(string $date_from) Return the first Oops_Db_Discount filtered by the date_from column
 * @method     Oops_Db_Discount findOneByDateTo(string $date_to) Return the first Oops_Db_Discount filtered by the date_to column
 * @method     Oops_Db_Discount findOneByMinimal(string $minimal) Return the first Oops_Db_Discount filtered by the minimal column
 * @method     Oops_Db_Discount findOneByActive(boolean $active) Return the first Oops_Db_Discount filtered by the active column
 * @method     Oops_Db_Discount findOneByCartDisplay(boolean $cart_display) Return the first Oops_Db_Discount filtered by the cart_display column
 * @method     Oops_Db_Discount findOneByDateAdd(string $date_add) Return the first Oops_Db_Discount filtered by the date_add column
 * @method     Oops_Db_Discount findOneByDateUpd(string $date_upd) Return the first Oops_Db_Discount filtered by the date_upd column
 *
 * @method     array findByIdDiscount(int $id_discount) Return Oops_Db_Discount objects filtered by the id_discount column
 * @method     array findByIdDiscountType(int $id_discount_type) Return Oops_Db_Discount objects filtered by the id_discount_type column
 * @method     array findByBehaviorNotExhausted(int $behavior_not_exhausted) Return Oops_Db_Discount objects filtered by the behavior_not_exhausted column
 * @method     array findByIdCustomer(int $id_customer) Return Oops_Db_Discount objects filtered by the id_customer column
 * @method     array findByIdGroup(int $id_group) Return Oops_Db_Discount objects filtered by the id_group column
 * @method     array findByIdCurrency(int $id_currency) Return Oops_Db_Discount objects filtered by the id_currency column
 * @method     array findByName(string $name) Return Oops_Db_Discount objects filtered by the name column
 * @method     array findByValue(string $value) Return Oops_Db_Discount objects filtered by the value column
 * @method     array findByQuantity(int $quantity) Return Oops_Db_Discount objects filtered by the quantity column
 * @method     array findByQuantityPerUser(int $quantity_per_user) Return Oops_Db_Discount objects filtered by the quantity_per_user column
 * @method     array findByCumulable(boolean $cumulable) Return Oops_Db_Discount objects filtered by the cumulable column
 * @method     array findByCumulableReduction(boolean $cumulable_reduction) Return Oops_Db_Discount objects filtered by the cumulable_reduction column
 * @method     array findByDateFrom(string $date_from) Return Oops_Db_Discount objects filtered by the date_from column
 * @method     array findByDateTo(string $date_to) Return Oops_Db_Discount objects filtered by the date_to column
 * @method     array findByMinimal(string $minimal) Return Oops_Db_Discount objects filtered by the minimal column
 * @method     array findByActive(boolean $active) Return Oops_Db_Discount objects filtered by the active column
 * @method     array findByCartDisplay(boolean $cart_display) Return Oops_Db_Discount objects filtered by the cart_display column
 * @method     array findByDateAdd(string $date_add) Return Oops_Db_Discount objects filtered by the date_add column
 * @method     array findByDateUpd(string $date_upd) Return Oops_Db_Discount objects filtered by the date_upd column
 *
 * @package    propel.generator.prestashop.om
 */
abstract class Oops_Db_Propel_DiscountQuery extends ModelCriteria
{
	
	/**
	 * Initializes internal state of Oops_Db_Propel_DiscountQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'prestashop', $modelName = 'Oops_Db_Discount', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new Oops_Db_DiscountQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    Oops_Db_DiscountQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof Oops_Db_DiscountQuery) {
			return $criteria;
		}
		$query = new Oops_Db_DiscountQuery();
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
	 * @return    Oops_Db_Discount|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ($key === null) {
			return null;
		}
		if ((null !== ($obj = Oops_Db_DiscountPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
			// the object is alredy in the instance pool
			return $obj;
		}
		if ($con === null) {
			$con = Propel::getConnection(Oops_Db_DiscountPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
	 * @return    Oops_Db_Discount A model object, or null if the key is not found
	 */
	protected function findPkSimple($key, $con)
	{
		$sql = 'SELECT `ID_DISCOUNT`, `ID_DISCOUNT_TYPE`, `BEHAVIOR_NOT_EXHAUSTED`, `ID_CUSTOMER`, `ID_GROUP`, `ID_CURRENCY`, `NAME`, `VALUE`, `QUANTITY`, `QUANTITY_PER_USER`, `CUMULABLE`, `CUMULABLE_REDUCTION`, `DATE_FROM`, `DATE_TO`, `MINIMAL`, `ACTIVE`, `CART_DISPLAY`, `DATE_ADD`, `DATE_UPD` FROM `' . _DB_PREFIX_ . 'discount` WHERE `ID_DISCOUNT` = :p0';
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
			$obj = new Oops_Db_Discount();
			$obj->hydrate($row);
			Oops_Db_DiscountPeer::addInstanceToPool($obj, (string) $row[0]);
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
	 * @return    Oops_Db_Discount|array|mixed the result, formatted by the current formatter
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
	 * @return    Oops_Db_DiscountQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(Oops_Db_DiscountPeer::ID_DISCOUNT, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    Oops_Db_DiscountQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(Oops_Db_DiscountPeer::ID_DISCOUNT, $keys, Criteria::IN);
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
	 * @return    Oops_Db_DiscountQuery The current query, for fluid interface
	 */
	public function filterByIdDiscount($idDiscount = null, $comparison = null)
	{
		if (is_array($idDiscount) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(Oops_Db_DiscountPeer::ID_DISCOUNT, $idDiscount, $comparison);
	}

	/**
	 * Filter the query on the id_discount_type column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByIdDiscountType(1234); // WHERE id_discount_type = 1234
	 * $query->filterByIdDiscountType(array(12, 34)); // WHERE id_discount_type IN (12, 34)
	 * $query->filterByIdDiscountType(array('min' => 12)); // WHERE id_discount_type > 12
	 * </code>
	 *
	 * @param     mixed $idDiscountType The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Db_DiscountQuery The current query, for fluid interface
	 */
	public function filterByIdDiscountType($idDiscountType = null, $comparison = null)
	{
		if (is_array($idDiscountType)) {
			$useMinMax = false;
			if (isset($idDiscountType['min'])) {
				$this->addUsingAlias(Oops_Db_DiscountPeer::ID_DISCOUNT_TYPE, $idDiscountType['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($idDiscountType['max'])) {
				$this->addUsingAlias(Oops_Db_DiscountPeer::ID_DISCOUNT_TYPE, $idDiscountType['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Db_DiscountPeer::ID_DISCOUNT_TYPE, $idDiscountType, $comparison);
	}

	/**
	 * Filter the query on the behavior_not_exhausted column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByBehaviorNotExhausted(1234); // WHERE behavior_not_exhausted = 1234
	 * $query->filterByBehaviorNotExhausted(array(12, 34)); // WHERE behavior_not_exhausted IN (12, 34)
	 * $query->filterByBehaviorNotExhausted(array('min' => 12)); // WHERE behavior_not_exhausted > 12
	 * </code>
	 *
	 * @param     mixed $behaviorNotExhausted The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Db_DiscountQuery The current query, for fluid interface
	 */
	public function filterByBehaviorNotExhausted($behaviorNotExhausted = null, $comparison = null)
	{
		if (is_array($behaviorNotExhausted)) {
			$useMinMax = false;
			if (isset($behaviorNotExhausted['min'])) {
				$this->addUsingAlias(Oops_Db_DiscountPeer::BEHAVIOR_NOT_EXHAUSTED, $behaviorNotExhausted['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($behaviorNotExhausted['max'])) {
				$this->addUsingAlias(Oops_Db_DiscountPeer::BEHAVIOR_NOT_EXHAUSTED, $behaviorNotExhausted['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Db_DiscountPeer::BEHAVIOR_NOT_EXHAUSTED, $behaviorNotExhausted, $comparison);
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
	 * @return    Oops_Db_DiscountQuery The current query, for fluid interface
	 */
	public function filterByIdCustomer($idCustomer = null, $comparison = null)
	{
		if (is_array($idCustomer)) {
			$useMinMax = false;
			if (isset($idCustomer['min'])) {
				$this->addUsingAlias(Oops_Db_DiscountPeer::ID_CUSTOMER, $idCustomer['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($idCustomer['max'])) {
				$this->addUsingAlias(Oops_Db_DiscountPeer::ID_CUSTOMER, $idCustomer['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Db_DiscountPeer::ID_CUSTOMER, $idCustomer, $comparison);
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
	 * @return    Oops_Db_DiscountQuery The current query, for fluid interface
	 */
	public function filterByIdGroup($idGroup = null, $comparison = null)
	{
		if (is_array($idGroup)) {
			$useMinMax = false;
			if (isset($idGroup['min'])) {
				$this->addUsingAlias(Oops_Db_DiscountPeer::ID_GROUP, $idGroup['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($idGroup['max'])) {
				$this->addUsingAlias(Oops_Db_DiscountPeer::ID_GROUP, $idGroup['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Db_DiscountPeer::ID_GROUP, $idGroup, $comparison);
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
	 * @return    Oops_Db_DiscountQuery The current query, for fluid interface
	 */
	public function filterByIdCurrency($idCurrency = null, $comparison = null)
	{
		if (is_array($idCurrency)) {
			$useMinMax = false;
			if (isset($idCurrency['min'])) {
				$this->addUsingAlias(Oops_Db_DiscountPeer::ID_CURRENCY, $idCurrency['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($idCurrency['max'])) {
				$this->addUsingAlias(Oops_Db_DiscountPeer::ID_CURRENCY, $idCurrency['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Db_DiscountPeer::ID_CURRENCY, $idCurrency, $comparison);
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
	 * @return    Oops_Db_DiscountQuery The current query, for fluid interface
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
		return $this->addUsingAlias(Oops_Db_DiscountPeer::NAME, $name, $comparison);
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
	 * @return    Oops_Db_DiscountQuery The current query, for fluid interface
	 */
	public function filterByValue($value = null, $comparison = null)
	{
		if (is_array($value)) {
			$useMinMax = false;
			if (isset($value['min'])) {
				$this->addUsingAlias(Oops_Db_DiscountPeer::VALUE, $value['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($value['max'])) {
				$this->addUsingAlias(Oops_Db_DiscountPeer::VALUE, $value['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Db_DiscountPeer::VALUE, $value, $comparison);
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
	 * @return    Oops_Db_DiscountQuery The current query, for fluid interface
	 */
	public function filterByQuantity($quantity = null, $comparison = null)
	{
		if (is_array($quantity)) {
			$useMinMax = false;
			if (isset($quantity['min'])) {
				$this->addUsingAlias(Oops_Db_DiscountPeer::QUANTITY, $quantity['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($quantity['max'])) {
				$this->addUsingAlias(Oops_Db_DiscountPeer::QUANTITY, $quantity['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Db_DiscountPeer::QUANTITY, $quantity, $comparison);
	}

	/**
	 * Filter the query on the quantity_per_user column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByQuantityPerUser(1234); // WHERE quantity_per_user = 1234
	 * $query->filterByQuantityPerUser(array(12, 34)); // WHERE quantity_per_user IN (12, 34)
	 * $query->filterByQuantityPerUser(array('min' => 12)); // WHERE quantity_per_user > 12
	 * </code>
	 *
	 * @param     mixed $quantityPerUser The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Db_DiscountQuery The current query, for fluid interface
	 */
	public function filterByQuantityPerUser($quantityPerUser = null, $comparison = null)
	{
		if (is_array($quantityPerUser)) {
			$useMinMax = false;
			if (isset($quantityPerUser['min'])) {
				$this->addUsingAlias(Oops_Db_DiscountPeer::QUANTITY_PER_USER, $quantityPerUser['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($quantityPerUser['max'])) {
				$this->addUsingAlias(Oops_Db_DiscountPeer::QUANTITY_PER_USER, $quantityPerUser['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Db_DiscountPeer::QUANTITY_PER_USER, $quantityPerUser, $comparison);
	}

	/**
	 * Filter the query on the cumulable column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByCumulable(true); // WHERE cumulable = true
	 * $query->filterByCumulable('yes'); // WHERE cumulable = true
	 * </code>
	 *
	 * @param     boolean|string $cumulable The value to use as filter.
	 *              Non-boolean arguments are converted using the following rules:
	 *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Db_DiscountQuery The current query, for fluid interface
	 */
	public function filterByCumulable($cumulable = null, $comparison = null)
	{
		if (is_string($cumulable)) {
			$cumulable = in_array(strtolower($cumulable), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(Oops_Db_DiscountPeer::CUMULABLE, $cumulable, $comparison);
	}

	/**
	 * Filter the query on the cumulable_reduction column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByCumulableReduction(true); // WHERE cumulable_reduction = true
	 * $query->filterByCumulableReduction('yes'); // WHERE cumulable_reduction = true
	 * </code>
	 *
	 * @param     boolean|string $cumulableReduction The value to use as filter.
	 *              Non-boolean arguments are converted using the following rules:
	 *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Db_DiscountQuery The current query, for fluid interface
	 */
	public function filterByCumulableReduction($cumulableReduction = null, $comparison = null)
	{
		if (is_string($cumulableReduction)) {
			$cumulable_reduction = in_array(strtolower($cumulableReduction), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(Oops_Db_DiscountPeer::CUMULABLE_REDUCTION, $cumulableReduction, $comparison);
	}

	/**
	 * Filter the query on the date_from column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByDateFrom('2011-03-14'); // WHERE date_from = '2011-03-14'
	 * $query->filterByDateFrom('now'); // WHERE date_from = '2011-03-14'
	 * $query->filterByDateFrom(array('max' => 'yesterday')); // WHERE date_from > '2011-03-13'
	 * </code>
	 *
	 * @param     mixed $dateFrom The value to use as filter.
	 *              Values can be integers (unix timestamps), DateTime objects, or strings.
	 *              Empty strings are treated as NULL.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Db_DiscountQuery The current query, for fluid interface
	 */
	public function filterByDateFrom($dateFrom = null, $comparison = null)
	{
		if (is_array($dateFrom)) {
			$useMinMax = false;
			if (isset($dateFrom['min'])) {
				$this->addUsingAlias(Oops_Db_DiscountPeer::DATE_FROM, $dateFrom['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($dateFrom['max'])) {
				$this->addUsingAlias(Oops_Db_DiscountPeer::DATE_FROM, $dateFrom['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Db_DiscountPeer::DATE_FROM, $dateFrom, $comparison);
	}

	/**
	 * Filter the query on the date_to column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByDateTo('2011-03-14'); // WHERE date_to = '2011-03-14'
	 * $query->filterByDateTo('now'); // WHERE date_to = '2011-03-14'
	 * $query->filterByDateTo(array('max' => 'yesterday')); // WHERE date_to > '2011-03-13'
	 * </code>
	 *
	 * @param     mixed $dateTo The value to use as filter.
	 *              Values can be integers (unix timestamps), DateTime objects, or strings.
	 *              Empty strings are treated as NULL.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Db_DiscountQuery The current query, for fluid interface
	 */
	public function filterByDateTo($dateTo = null, $comparison = null)
	{
		if (is_array($dateTo)) {
			$useMinMax = false;
			if (isset($dateTo['min'])) {
				$this->addUsingAlias(Oops_Db_DiscountPeer::DATE_TO, $dateTo['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($dateTo['max'])) {
				$this->addUsingAlias(Oops_Db_DiscountPeer::DATE_TO, $dateTo['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Db_DiscountPeer::DATE_TO, $dateTo, $comparison);
	}

	/**
	 * Filter the query on the minimal column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByMinimal(1234); // WHERE minimal = 1234
	 * $query->filterByMinimal(array(12, 34)); // WHERE minimal IN (12, 34)
	 * $query->filterByMinimal(array('min' => 12)); // WHERE minimal > 12
	 * </code>
	 *
	 * @param     mixed $minimal The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Db_DiscountQuery The current query, for fluid interface
	 */
	public function filterByMinimal($minimal = null, $comparison = null)
	{
		if (is_array($minimal)) {
			$useMinMax = false;
			if (isset($minimal['min'])) {
				$this->addUsingAlias(Oops_Db_DiscountPeer::MINIMAL, $minimal['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($minimal['max'])) {
				$this->addUsingAlias(Oops_Db_DiscountPeer::MINIMAL, $minimal['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Db_DiscountPeer::MINIMAL, $minimal, $comparison);
	}

	/**
	 * Filter the query on the active column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByActive(true); // WHERE active = true
	 * $query->filterByActive('yes'); // WHERE active = true
	 * </code>
	 *
	 * @param     boolean|string $active The value to use as filter.
	 *              Non-boolean arguments are converted using the following rules:
	 *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Db_DiscountQuery The current query, for fluid interface
	 */
	public function filterByActive($active = null, $comparison = null)
	{
		if (is_string($active)) {
			$active = in_array(strtolower($active), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(Oops_Db_DiscountPeer::ACTIVE, $active, $comparison);
	}

	/**
	 * Filter the query on the cart_display column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByCartDisplay(true); // WHERE cart_display = true
	 * $query->filterByCartDisplay('yes'); // WHERE cart_display = true
	 * </code>
	 *
	 * @param     boolean|string $cartDisplay The value to use as filter.
	 *              Non-boolean arguments are converted using the following rules:
	 *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Db_DiscountQuery The current query, for fluid interface
	 */
	public function filterByCartDisplay($cartDisplay = null, $comparison = null)
	{
		if (is_string($cartDisplay)) {
			$cart_display = in_array(strtolower($cartDisplay), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(Oops_Db_DiscountPeer::CART_DISPLAY, $cartDisplay, $comparison);
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
	 * @return    Oops_Db_DiscountQuery The current query, for fluid interface
	 */
	public function filterByDateAdd($dateAdd = null, $comparison = null)
	{
		if (is_array($dateAdd)) {
			$useMinMax = false;
			if (isset($dateAdd['min'])) {
				$this->addUsingAlias(Oops_Db_DiscountPeer::DATE_ADD, $dateAdd['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($dateAdd['max'])) {
				$this->addUsingAlias(Oops_Db_DiscountPeer::DATE_ADD, $dateAdd['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Db_DiscountPeer::DATE_ADD, $dateAdd, $comparison);
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
	 * @return    Oops_Db_DiscountQuery The current query, for fluid interface
	 */
	public function filterByDateUpd($dateUpd = null, $comparison = null)
	{
		if (is_array($dateUpd)) {
			$useMinMax = false;
			if (isset($dateUpd['min'])) {
				$this->addUsingAlias(Oops_Db_DiscountPeer::DATE_UPD, $dateUpd['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($dateUpd['max'])) {
				$this->addUsingAlias(Oops_Db_DiscountPeer::DATE_UPD, $dateUpd['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Db_DiscountPeer::DATE_UPD, $dateUpd, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     Oops_Db_Discount $discount Object to remove from the list of results
	 *
	 * @return    Oops_Db_DiscountQuery The current query, for fluid interface
	 */
	public function prune($discount = null)
	{
		if ($discount) {
			$this->addUsingAlias(Oops_Db_DiscountPeer::ID_DISCOUNT, $discount->getIdDiscount(), Criteria::NOT_EQUAL);
		}

		return $this;
	}

} // Oops_Db_Propel_DiscountQuery