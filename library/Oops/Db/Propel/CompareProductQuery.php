<?php


/**
 * Base class that represents a query for the 'compare_product' table.
 *
 * 
 *
 * @method     Oops_Db_CompareProductQuery orderByIdCompareProduct($order = Criteria::ASC) Order by the id_compare_product column
 * @method     Oops_Db_CompareProductQuery orderByIdProduct($order = Criteria::ASC) Order by the id_product column
 * @method     Oops_Db_CompareProductQuery orderByIdGuest($order = Criteria::ASC) Order by the id_guest column
 * @method     Oops_Db_CompareProductQuery orderByIdCustomer($order = Criteria::ASC) Order by the id_customer column
 * @method     Oops_Db_CompareProductQuery orderByDateAdd($order = Criteria::ASC) Order by the date_add column
 * @method     Oops_Db_CompareProductQuery orderByDateUpd($order = Criteria::ASC) Order by the date_upd column
 *
 * @method     Oops_Db_CompareProductQuery groupByIdCompareProduct() Group by the id_compare_product column
 * @method     Oops_Db_CompareProductQuery groupByIdProduct() Group by the id_product column
 * @method     Oops_Db_CompareProductQuery groupByIdGuest() Group by the id_guest column
 * @method     Oops_Db_CompareProductQuery groupByIdCustomer() Group by the id_customer column
 * @method     Oops_Db_CompareProductQuery groupByDateAdd() Group by the date_add column
 * @method     Oops_Db_CompareProductQuery groupByDateUpd() Group by the date_upd column
 *
 * @method     Oops_Db_CompareProductQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     Oops_Db_CompareProductQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     Oops_Db_CompareProductQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     Oops_Db_CompareProduct findOne(PropelPDO $con = null) Return the first Oops_Db_CompareProduct matching the query
 * @method     Oops_Db_CompareProduct findOneOrCreate(PropelPDO $con = null) Return the first Oops_Db_CompareProduct matching the query, or a new Oops_Db_CompareProduct object populated from the query conditions when no match is found
 *
 * @method     Oops_Db_CompareProduct findOneByIdCompareProduct(int $id_compare_product) Return the first Oops_Db_CompareProduct filtered by the id_compare_product column
 * @method     Oops_Db_CompareProduct findOneByIdProduct(int $id_product) Return the first Oops_Db_CompareProduct filtered by the id_product column
 * @method     Oops_Db_CompareProduct findOneByIdGuest(int $id_guest) Return the first Oops_Db_CompareProduct filtered by the id_guest column
 * @method     Oops_Db_CompareProduct findOneByIdCustomer(int $id_customer) Return the first Oops_Db_CompareProduct filtered by the id_customer column
 * @method     Oops_Db_CompareProduct findOneByDateAdd(string $date_add) Return the first Oops_Db_CompareProduct filtered by the date_add column
 * @method     Oops_Db_CompareProduct findOneByDateUpd(string $date_upd) Return the first Oops_Db_CompareProduct filtered by the date_upd column
 *
 * @method     array findByIdCompareProduct(int $id_compare_product) Return Oops_Db_CompareProduct objects filtered by the id_compare_product column
 * @method     array findByIdProduct(int $id_product) Return Oops_Db_CompareProduct objects filtered by the id_product column
 * @method     array findByIdGuest(int $id_guest) Return Oops_Db_CompareProduct objects filtered by the id_guest column
 * @method     array findByIdCustomer(int $id_customer) Return Oops_Db_CompareProduct objects filtered by the id_customer column
 * @method     array findByDateAdd(string $date_add) Return Oops_Db_CompareProduct objects filtered by the date_add column
 * @method     array findByDateUpd(string $date_upd) Return Oops_Db_CompareProduct objects filtered by the date_upd column
 *
 * @package    propel.generator.prestashop.om
 */
abstract class Oops_Db_Propel_CompareProductQuery extends ModelCriteria
{
	
	/**
	 * Initializes internal state of Oops_Db_Propel_CompareProductQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'prestashop', $modelName = 'Oops_Db_CompareProduct', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new Oops_Db_CompareProductQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    Oops_Db_CompareProductQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof Oops_Db_CompareProductQuery) {
			return $criteria;
		}
		$query = new Oops_Db_CompareProductQuery();
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
	 * @return    Oops_Db_CompareProduct|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ($key === null) {
			return null;
		}
		if ((null !== ($obj = Oops_Db_CompareProductPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
			// the object is alredy in the instance pool
			return $obj;
		}
		if ($con === null) {
			$con = Propel::getConnection(Oops_Db_CompareProductPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
	 * @return    Oops_Db_CompareProduct A model object, or null if the key is not found
	 */
	protected function findPkSimple($key, $con)
	{
		$sql = 'SELECT `ID_COMPARE_PRODUCT`, `ID_PRODUCT`, `ID_GUEST`, `ID_CUSTOMER`, `DATE_ADD`, `DATE_UPD` FROM `' . _DB_PREFIX_ . 'compare_product` WHERE `ID_COMPARE_PRODUCT` = :p0';
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
			$obj = new Oops_Db_CompareProduct();
			$obj->hydrate($row);
			Oops_Db_CompareProductPeer::addInstanceToPool($obj, (string) $row[0]);
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
	 * @return    Oops_Db_CompareProduct|array|mixed the result, formatted by the current formatter
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
	 * @return    Oops_Db_CompareProductQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(Oops_Db_CompareProductPeer::ID_COMPARE_PRODUCT, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    Oops_Db_CompareProductQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(Oops_Db_CompareProductPeer::ID_COMPARE_PRODUCT, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id_compare_product column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByIdCompareProduct(1234); // WHERE id_compare_product = 1234
	 * $query->filterByIdCompareProduct(array(12, 34)); // WHERE id_compare_product IN (12, 34)
	 * $query->filterByIdCompareProduct(array('min' => 12)); // WHERE id_compare_product > 12
	 * </code>
	 *
	 * @param     mixed $idCompareProduct The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Db_CompareProductQuery The current query, for fluid interface
	 */
	public function filterByIdCompareProduct($idCompareProduct = null, $comparison = null)
	{
		if (is_array($idCompareProduct) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(Oops_Db_CompareProductPeer::ID_COMPARE_PRODUCT, $idCompareProduct, $comparison);
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
	 * @return    Oops_Db_CompareProductQuery The current query, for fluid interface
	 */
	public function filterByIdProduct($idProduct = null, $comparison = null)
	{
		if (is_array($idProduct)) {
			$useMinMax = false;
			if (isset($idProduct['min'])) {
				$this->addUsingAlias(Oops_Db_CompareProductPeer::ID_PRODUCT, $idProduct['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($idProduct['max'])) {
				$this->addUsingAlias(Oops_Db_CompareProductPeer::ID_PRODUCT, $idProduct['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Db_CompareProductPeer::ID_PRODUCT, $idProduct, $comparison);
	}

	/**
	 * Filter the query on the id_guest column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByIdGuest(1234); // WHERE id_guest = 1234
	 * $query->filterByIdGuest(array(12, 34)); // WHERE id_guest IN (12, 34)
	 * $query->filterByIdGuest(array('min' => 12)); // WHERE id_guest > 12
	 * </code>
	 *
	 * @param     mixed $idGuest The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Db_CompareProductQuery The current query, for fluid interface
	 */
	public function filterByIdGuest($idGuest = null, $comparison = null)
	{
		if (is_array($idGuest)) {
			$useMinMax = false;
			if (isset($idGuest['min'])) {
				$this->addUsingAlias(Oops_Db_CompareProductPeer::ID_GUEST, $idGuest['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($idGuest['max'])) {
				$this->addUsingAlias(Oops_Db_CompareProductPeer::ID_GUEST, $idGuest['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Db_CompareProductPeer::ID_GUEST, $idGuest, $comparison);
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
	 * @return    Oops_Db_CompareProductQuery The current query, for fluid interface
	 */
	public function filterByIdCustomer($idCustomer = null, $comparison = null)
	{
		if (is_array($idCustomer)) {
			$useMinMax = false;
			if (isset($idCustomer['min'])) {
				$this->addUsingAlias(Oops_Db_CompareProductPeer::ID_CUSTOMER, $idCustomer['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($idCustomer['max'])) {
				$this->addUsingAlias(Oops_Db_CompareProductPeer::ID_CUSTOMER, $idCustomer['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Db_CompareProductPeer::ID_CUSTOMER, $idCustomer, $comparison);
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
	 * @return    Oops_Db_CompareProductQuery The current query, for fluid interface
	 */
	public function filterByDateAdd($dateAdd = null, $comparison = null)
	{
		if (is_array($dateAdd)) {
			$useMinMax = false;
			if (isset($dateAdd['min'])) {
				$this->addUsingAlias(Oops_Db_CompareProductPeer::DATE_ADD, $dateAdd['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($dateAdd['max'])) {
				$this->addUsingAlias(Oops_Db_CompareProductPeer::DATE_ADD, $dateAdd['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Db_CompareProductPeer::DATE_ADD, $dateAdd, $comparison);
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
	 * @return    Oops_Db_CompareProductQuery The current query, for fluid interface
	 */
	public function filterByDateUpd($dateUpd = null, $comparison = null)
	{
		if (is_array($dateUpd)) {
			$useMinMax = false;
			if (isset($dateUpd['min'])) {
				$this->addUsingAlias(Oops_Db_CompareProductPeer::DATE_UPD, $dateUpd['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($dateUpd['max'])) {
				$this->addUsingAlias(Oops_Db_CompareProductPeer::DATE_UPD, $dateUpd['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Db_CompareProductPeer::DATE_UPD, $dateUpd, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     Oops_Db_CompareProduct $compareProduct Object to remove from the list of results
	 *
	 * @return    Oops_Db_CompareProductQuery The current query, for fluid interface
	 */
	public function prune($compareProduct = null)
	{
		if ($compareProduct) {
			$this->addUsingAlias(Oops_Db_CompareProductPeer::ID_COMPARE_PRODUCT, $compareProduct->getIdCompareProduct(), Criteria::NOT_EQUAL);
		}

		return $this;
	}

} // Oops_Db_Propel_CompareProductQuery