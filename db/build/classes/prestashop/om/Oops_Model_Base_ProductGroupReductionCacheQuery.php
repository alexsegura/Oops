<?php


/**
 * Base class that represents a query for the '' . _DB_PREFIX_ . 'djland_product_group_reduction_cache' table.
 *
 * 
 *
 * @method     Oops_Model_ProductGroupReductionCacheQuery orderByIdProduct($order = Criteria::ASC) Order by the id_product column
 * @method     Oops_Model_ProductGroupReductionCacheQuery orderByIdGroup($order = Criteria::ASC) Order by the id_group column
 * @method     Oops_Model_ProductGroupReductionCacheQuery orderByReduction($order = Criteria::ASC) Order by the reduction column
 *
 * @method     Oops_Model_ProductGroupReductionCacheQuery groupByIdProduct() Group by the id_product column
 * @method     Oops_Model_ProductGroupReductionCacheQuery groupByIdGroup() Group by the id_group column
 * @method     Oops_Model_ProductGroupReductionCacheQuery groupByReduction() Group by the reduction column
 *
 * @method     Oops_Model_ProductGroupReductionCacheQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     Oops_Model_ProductGroupReductionCacheQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     Oops_Model_ProductGroupReductionCacheQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     Oops_Model_ProductGroupReductionCache findOne(PropelPDO $con = null) Return the first Oops_Model_ProductGroupReductionCache matching the query
 * @method     Oops_Model_ProductGroupReductionCache findOneOrCreate(PropelPDO $con = null) Return the first Oops_Model_ProductGroupReductionCache matching the query, or a new Oops_Model_ProductGroupReductionCache object populated from the query conditions when no match is found
 *
 * @method     Oops_Model_ProductGroupReductionCache findOneByIdProduct(int $id_product) Return the first Oops_Model_ProductGroupReductionCache filtered by the id_product column
 * @method     Oops_Model_ProductGroupReductionCache findOneByIdGroup(int $id_group) Return the first Oops_Model_ProductGroupReductionCache filtered by the id_group column
 * @method     Oops_Model_ProductGroupReductionCache findOneByReduction(string $reduction) Return the first Oops_Model_ProductGroupReductionCache filtered by the reduction column
 *
 * @method     array findByIdProduct(int $id_product) Return Oops_Model_ProductGroupReductionCache objects filtered by the id_product column
 * @method     array findByIdGroup(int $id_group) Return Oops_Model_ProductGroupReductionCache objects filtered by the id_group column
 * @method     array findByReduction(string $reduction) Return Oops_Model_ProductGroupReductionCache objects filtered by the reduction column
 *
 * @package    propel.generator.prestashop.om
 */
abstract class Oops_Model_Base_ProductGroupReductionCacheQuery extends ModelCriteria
{
	
	/**
	 * Initializes internal state of Oops_Model_Base_ProductGroupReductionCacheQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'prestashop', $modelName = 'Oops_Model_ProductGroupReductionCache', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new Oops_Model_ProductGroupReductionCacheQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    Oops_Model_ProductGroupReductionCacheQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof Oops_Model_ProductGroupReductionCacheQuery) {
			return $criteria;
		}
		$query = new Oops_Model_ProductGroupReductionCacheQuery();
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
	 * @param     array[$id_product, $id_group] $key Primary key to use for the query
	 * @param     PropelPDO $con an optional connection object
	 *
	 * @return    Oops_Model_ProductGroupReductionCache|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ($key === null) {
			return null;
		}
		if ((null !== ($obj = Oops_Model_ProductGroupReductionCachePeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
			// the object is alredy in the instance pool
			return $obj;
		}
		if ($con === null) {
			$con = Propel::getConnection(Oops_Model_ProductGroupReductionCachePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
	 * @return    Oops_Model_ProductGroupReductionCache A model object, or null if the key is not found
	 */
	protected function findPkSimple($key, $con)
	{
		$sql = 'SELECT `ID_PRODUCT`, `ID_GROUP`, `REDUCTION` FROM `' . _DB_PREFIX_ . 'djland_product_group_reduction_cache` WHERE `ID_PRODUCT` = :p0 AND `ID_GROUP` = :p1';
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
			$obj = new Oops_Model_ProductGroupReductionCache();
			$obj->hydrate($row);
			Oops_Model_ProductGroupReductionCachePeer::addInstanceToPool($obj, serialize(array((string) $row[0], (string) $row[1])));
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
	 * @return    Oops_Model_ProductGroupReductionCache|array|mixed the result, formatted by the current formatter
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
	 * @return    Oops_Model_ProductGroupReductionCacheQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		$this->addUsingAlias(Oops_Model_ProductGroupReductionCachePeer::ID_PRODUCT, $key[0], Criteria::EQUAL);
		$this->addUsingAlias(Oops_Model_ProductGroupReductionCachePeer::ID_GROUP, $key[1], Criteria::EQUAL);

		return $this;
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    Oops_Model_ProductGroupReductionCacheQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		if (empty($keys)) {
			return $this->add(null, '1<>1', Criteria::CUSTOM);
		}
		foreach ($keys as $key) {
			$cton0 = $this->getNewCriterion(Oops_Model_ProductGroupReductionCachePeer::ID_PRODUCT, $key[0], Criteria::EQUAL);
			$cton1 = $this->getNewCriterion(Oops_Model_ProductGroupReductionCachePeer::ID_GROUP, $key[1], Criteria::EQUAL);
			$cton0->addAnd($cton1);
			$this->addOr($cton0);
		}

		return $this;
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
	 * @return    Oops_Model_ProductGroupReductionCacheQuery The current query, for fluid interface
	 */
	public function filterByIdProduct($idProduct = null, $comparison = null)
	{
		if (is_array($idProduct) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(Oops_Model_ProductGroupReductionCachePeer::ID_PRODUCT, $idProduct, $comparison);
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
	 * @return    Oops_Model_ProductGroupReductionCacheQuery The current query, for fluid interface
	 */
	public function filterByIdGroup($idGroup = null, $comparison = null)
	{
		if (is_array($idGroup) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(Oops_Model_ProductGroupReductionCachePeer::ID_GROUP, $idGroup, $comparison);
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
	 * @return    Oops_Model_ProductGroupReductionCacheQuery The current query, for fluid interface
	 */
	public function filterByReduction($reduction = null, $comparison = null)
	{
		if (is_array($reduction)) {
			$useMinMax = false;
			if (isset($reduction['min'])) {
				$this->addUsingAlias(Oops_Model_ProductGroupReductionCachePeer::REDUCTION, $reduction['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($reduction['max'])) {
				$this->addUsingAlias(Oops_Model_ProductGroupReductionCachePeer::REDUCTION, $reduction['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_ProductGroupReductionCachePeer::REDUCTION, $reduction, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     Oops_Model_ProductGroupReductionCache $productGroupReductionCache Object to remove from the list of results
	 *
	 * @return    Oops_Model_ProductGroupReductionCacheQuery The current query, for fluid interface
	 */
	public function prune($productGroupReductionCache = null)
	{
		if ($productGroupReductionCache) {
			$this->addCond('pruneCond0', $this->getAliasedColName(Oops_Model_ProductGroupReductionCachePeer::ID_PRODUCT), $productGroupReductionCache->getIdProduct(), Criteria::NOT_EQUAL);
			$this->addCond('pruneCond1', $this->getAliasedColName(Oops_Model_ProductGroupReductionCachePeer::ID_GROUP), $productGroupReductionCache->getIdGroup(), Criteria::NOT_EQUAL);
			$this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
		}

		return $this;
	}

} // Oops_Model_Base_ProductGroupReductionCacheQuery