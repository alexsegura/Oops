<?php


/**
 * Base class that represents a query for the 'feature_product' table.
 *
 * 
 *
 * @method     Oops_Model_FeatureProductQuery orderByIdFeature($order = Criteria::ASC) Order by the id_feature column
 * @method     Oops_Model_FeatureProductQuery orderByIdProduct($order = Criteria::ASC) Order by the id_product column
 * @method     Oops_Model_FeatureProductQuery orderByIdFeatureValue($order = Criteria::ASC) Order by the id_feature_value column
 *
 * @method     Oops_Model_FeatureProductQuery groupByIdFeature() Group by the id_feature column
 * @method     Oops_Model_FeatureProductQuery groupByIdProduct() Group by the id_product column
 * @method     Oops_Model_FeatureProductQuery groupByIdFeatureValue() Group by the id_feature_value column
 *
 * @method     Oops_Model_FeatureProductQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     Oops_Model_FeatureProductQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     Oops_Model_FeatureProductQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     Oops_Model_FeatureProduct findOne(PropelPDO $con = null) Return the first Oops_Model_FeatureProduct matching the query
 * @method     Oops_Model_FeatureProduct findOneOrCreate(PropelPDO $con = null) Return the first Oops_Model_FeatureProduct matching the query, or a new Oops_Model_FeatureProduct object populated from the query conditions when no match is found
 *
 * @method     Oops_Model_FeatureProduct findOneByIdFeature(int $id_feature) Return the first Oops_Model_FeatureProduct filtered by the id_feature column
 * @method     Oops_Model_FeatureProduct findOneByIdProduct(int $id_product) Return the first Oops_Model_FeatureProduct filtered by the id_product column
 * @method     Oops_Model_FeatureProduct findOneByIdFeatureValue(int $id_feature_value) Return the first Oops_Model_FeatureProduct filtered by the id_feature_value column
 *
 * @method     array findByIdFeature(int $id_feature) Return Oops_Model_FeatureProduct objects filtered by the id_feature column
 * @method     array findByIdProduct(int $id_product) Return Oops_Model_FeatureProduct objects filtered by the id_product column
 * @method     array findByIdFeatureValue(int $id_feature_value) Return Oops_Model_FeatureProduct objects filtered by the id_feature_value column
 *
 * @package    propel.generator.prestashop.om
 */
abstract class Oops_Model_Base_FeatureProductQuery extends ModelCriteria
{
	
	/**
	 * Initializes internal state of Oops_Model_Base_FeatureProductQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'prestashop', $modelName = 'Oops_Model_FeatureProduct', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new Oops_Model_FeatureProductQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    Oops_Model_FeatureProductQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof Oops_Model_FeatureProductQuery) {
			return $criteria;
		}
		$query = new Oops_Model_FeatureProductQuery();
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
	 * @param     array[$id_feature, $id_product] $key Primary key to use for the query
	 * @param     PropelPDO $con an optional connection object
	 *
	 * @return    Oops_Model_FeatureProduct|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ($key === null) {
			return null;
		}
		if ((null !== ($obj = Oops_Model_FeatureProductPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
			// the object is alredy in the instance pool
			return $obj;
		}
		if ($con === null) {
			$con = Propel::getConnection(Oops_Model_FeatureProductPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
	 * @return    Oops_Model_FeatureProduct A model object, or null if the key is not found
	 */
	protected function findPkSimple($key, $con)
	{
		$sql = 'SELECT `ID_FEATURE`, `ID_PRODUCT`, `ID_FEATURE_VALUE` FROM `' . _DB_PREFIX_ . 'feature_product` WHERE `ID_FEATURE` = :p0 AND `ID_PRODUCT` = :p1';
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
			$obj = new Oops_Model_FeatureProduct();
			$obj->hydrate($row);
			Oops_Model_FeatureProductPeer::addInstanceToPool($obj, serialize(array((string) $row[0], (string) $row[1])));
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
	 * @return    Oops_Model_FeatureProduct|array|mixed the result, formatted by the current formatter
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
	 * @return    Oops_Model_FeatureProductQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		$this->addUsingAlias(Oops_Model_FeatureProductPeer::ID_FEATURE, $key[0], Criteria::EQUAL);
		$this->addUsingAlias(Oops_Model_FeatureProductPeer::ID_PRODUCT, $key[1], Criteria::EQUAL);

		return $this;
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    Oops_Model_FeatureProductQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		if (empty($keys)) {
			return $this->add(null, '1<>1', Criteria::CUSTOM);
		}
		foreach ($keys as $key) {
			$cton0 = $this->getNewCriterion(Oops_Model_FeatureProductPeer::ID_FEATURE, $key[0], Criteria::EQUAL);
			$cton1 = $this->getNewCriterion(Oops_Model_FeatureProductPeer::ID_PRODUCT, $key[1], Criteria::EQUAL);
			$cton0->addAnd($cton1);
			$this->addOr($cton0);
		}

		return $this;
	}

	/**
	 * Filter the query on the id_feature column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByIdFeature(1234); // WHERE id_feature = 1234
	 * $query->filterByIdFeature(array(12, 34)); // WHERE id_feature IN (12, 34)
	 * $query->filterByIdFeature(array('min' => 12)); // WHERE id_feature > 12
	 * </code>
	 *
	 * @param     mixed $idFeature The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_FeatureProductQuery The current query, for fluid interface
	 */
	public function filterByIdFeature($idFeature = null, $comparison = null)
	{
		if (is_array($idFeature) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(Oops_Model_FeatureProductPeer::ID_FEATURE, $idFeature, $comparison);
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
	 * @return    Oops_Model_FeatureProductQuery The current query, for fluid interface
	 */
	public function filterByIdProduct($idProduct = null, $comparison = null)
	{
		if (is_array($idProduct) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(Oops_Model_FeatureProductPeer::ID_PRODUCT, $idProduct, $comparison);
	}

	/**
	 * Filter the query on the id_feature_value column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByIdFeatureValue(1234); // WHERE id_feature_value = 1234
	 * $query->filterByIdFeatureValue(array(12, 34)); // WHERE id_feature_value IN (12, 34)
	 * $query->filterByIdFeatureValue(array('min' => 12)); // WHERE id_feature_value > 12
	 * </code>
	 *
	 * @param     mixed $idFeatureValue The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_FeatureProductQuery The current query, for fluid interface
	 */
	public function filterByIdFeatureValue($idFeatureValue = null, $comparison = null)
	{
		if (is_array($idFeatureValue)) {
			$useMinMax = false;
			if (isset($idFeatureValue['min'])) {
				$this->addUsingAlias(Oops_Model_FeatureProductPeer::ID_FEATURE_VALUE, $idFeatureValue['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($idFeatureValue['max'])) {
				$this->addUsingAlias(Oops_Model_FeatureProductPeer::ID_FEATURE_VALUE, $idFeatureValue['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_FeatureProductPeer::ID_FEATURE_VALUE, $idFeatureValue, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     Oops_Model_FeatureProduct $featureProduct Object to remove from the list of results
	 *
	 * @return    Oops_Model_FeatureProductQuery The current query, for fluid interface
	 */
	public function prune($featureProduct = null)
	{
		if ($featureProduct) {
			$this->addCond('pruneCond0', $this->getAliasedColName(Oops_Model_FeatureProductPeer::ID_FEATURE), $featureProduct->getIdFeature(), Criteria::NOT_EQUAL);
			$this->addCond('pruneCond1', $this->getAliasedColName(Oops_Model_FeatureProductPeer::ID_PRODUCT), $featureProduct->getIdProduct(), Criteria::NOT_EQUAL);
			$this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
		}

		return $this;
	}

} // Oops_Model_Base_FeatureProductQuery