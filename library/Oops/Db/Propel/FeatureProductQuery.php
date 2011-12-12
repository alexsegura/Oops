<?php


/**
 * Base class that represents a query for the 'feature_product' table.
 *
 * 
 *
 * @method     Oops_Db_FeatureProductQuery orderByIdFeature($order = Criteria::ASC) Order by the id_feature column
 * @method     Oops_Db_FeatureProductQuery orderByIdProduct($order = Criteria::ASC) Order by the id_product column
 * @method     Oops_Db_FeatureProductQuery orderByIdFeatureValue($order = Criteria::ASC) Order by the id_feature_value column
 *
 * @method     Oops_Db_FeatureProductQuery groupByIdFeature() Group by the id_feature column
 * @method     Oops_Db_FeatureProductQuery groupByIdProduct() Group by the id_product column
 * @method     Oops_Db_FeatureProductQuery groupByIdFeatureValue() Group by the id_feature_value column
 *
 * @method     Oops_Db_FeatureProductQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     Oops_Db_FeatureProductQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     Oops_Db_FeatureProductQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     Oops_Db_FeatureProductQuery leftJoinProduct($relationAlias = null) Adds a LEFT JOIN clause to the query using the Product relation
 * @method     Oops_Db_FeatureProductQuery rightJoinProduct($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Product relation
 * @method     Oops_Db_FeatureProductQuery innerJoinProduct($relationAlias = null) Adds a INNER JOIN clause to the query using the Product relation
 *
 * @method     Oops_Db_FeatureProductQuery leftJoinFeature($relationAlias = null) Adds a LEFT JOIN clause to the query using the Feature relation
 * @method     Oops_Db_FeatureProductQuery rightJoinFeature($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Feature relation
 * @method     Oops_Db_FeatureProductQuery innerJoinFeature($relationAlias = null) Adds a INNER JOIN clause to the query using the Feature relation
 *
 * @method     Oops_Db_FeatureProductQuery leftJoinFeatureValue($relationAlias = null) Adds a LEFT JOIN clause to the query using the FeatureValue relation
 * @method     Oops_Db_FeatureProductQuery rightJoinFeatureValue($relationAlias = null) Adds a RIGHT JOIN clause to the query using the FeatureValue relation
 * @method     Oops_Db_FeatureProductQuery innerJoinFeatureValue($relationAlias = null) Adds a INNER JOIN clause to the query using the FeatureValue relation
 *
 * @method     Oops_Db_FeatureProduct findOne(PropelPDO $con = null) Return the first Oops_Db_FeatureProduct matching the query
 * @method     Oops_Db_FeatureProduct findOneOrCreate(PropelPDO $con = null) Return the first Oops_Db_FeatureProduct matching the query, or a new Oops_Db_FeatureProduct object populated from the query conditions when no match is found
 *
 * @method     Oops_Db_FeatureProduct findOneByIdFeature(int $id_feature) Return the first Oops_Db_FeatureProduct filtered by the id_feature column
 * @method     Oops_Db_FeatureProduct findOneByIdProduct(int $id_product) Return the first Oops_Db_FeatureProduct filtered by the id_product column
 * @method     Oops_Db_FeatureProduct findOneByIdFeatureValue(int $id_feature_value) Return the first Oops_Db_FeatureProduct filtered by the id_feature_value column
 *
 * @method     array findByIdFeature(int $id_feature) Return Oops_Db_FeatureProduct objects filtered by the id_feature column
 * @method     array findByIdProduct(int $id_product) Return Oops_Db_FeatureProduct objects filtered by the id_product column
 * @method     array findByIdFeatureValue(int $id_feature_value) Return Oops_Db_FeatureProduct objects filtered by the id_feature_value column
 *
 * @package    propel.generator.prestashop.om
 */
abstract class Oops_Db_Propel_FeatureProductQuery extends ModelCriteria
{
	
	/**
	 * Initializes internal state of Oops_Db_Propel_FeatureProductQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'prestashop', $modelName = 'Oops_Db_FeatureProduct', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new Oops_Db_FeatureProductQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    Oops_Db_FeatureProductQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof Oops_Db_FeatureProductQuery) {
			return $criteria;
		}
		$query = new Oops_Db_FeatureProductQuery();
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
	 * @param     array[$id_feature, $id_product, $id_feature_value] $key Primary key to use for the query
	 * @param     PropelPDO $con an optional connection object
	 *
	 * @return    Oops_Db_FeatureProduct|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ($key === null) {
			return null;
		}
		if ((null !== ($obj = Oops_Db_FeatureProductPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1], (string) $key[2]))))) && !$this->formatter) {
			// the object is alredy in the instance pool
			return $obj;
		}
		if ($con === null) {
			$con = Propel::getConnection(Oops_Db_FeatureProductPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
	 * @return    Oops_Db_FeatureProduct A model object, or null if the key is not found
	 */
	protected function findPkSimple($key, $con)
	{
		$sql = 'SELECT `ID_FEATURE`, `ID_PRODUCT`, `ID_FEATURE_VALUE` FROM `' . _DB_PREFIX_ . 'feature_product` WHERE `ID_FEATURE` = :p0 AND `ID_PRODUCT` = :p1 AND `ID_FEATURE_VALUE` = :p2';
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
			$obj = new Oops_Db_FeatureProduct();
			$obj->hydrate($row);
			Oops_Db_FeatureProductPeer::addInstanceToPool($obj, serialize(array((string) $row[0], (string) $row[1], (string) $row[2])));
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
	 * @return    Oops_Db_FeatureProduct|array|mixed the result, formatted by the current formatter
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
	 * @return    Oops_Db_FeatureProductQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		$this->addUsingAlias(Oops_Db_FeatureProductPeer::ID_FEATURE, $key[0], Criteria::EQUAL);
		$this->addUsingAlias(Oops_Db_FeatureProductPeer::ID_PRODUCT, $key[1], Criteria::EQUAL);
		$this->addUsingAlias(Oops_Db_FeatureProductPeer::ID_FEATURE_VALUE, $key[2], Criteria::EQUAL);

		return $this;
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    Oops_Db_FeatureProductQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		if (empty($keys)) {
			return $this->add(null, '1<>1', Criteria::CUSTOM);
		}
		foreach ($keys as $key) {
			$cton0 = $this->getNewCriterion(Oops_Db_FeatureProductPeer::ID_FEATURE, $key[0], Criteria::EQUAL);
			$cton1 = $this->getNewCriterion(Oops_Db_FeatureProductPeer::ID_PRODUCT, $key[1], Criteria::EQUAL);
			$cton0->addAnd($cton1);
			$cton2 = $this->getNewCriterion(Oops_Db_FeatureProductPeer::ID_FEATURE_VALUE, $key[2], Criteria::EQUAL);
			$cton0->addAnd($cton2);
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
	 * @see       filterByFeature()
	 *
	 * @param     mixed $idFeature The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Db_FeatureProductQuery The current query, for fluid interface
	 */
	public function filterByIdFeature($idFeature = null, $comparison = null)
	{
		if (is_array($idFeature) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(Oops_Db_FeatureProductPeer::ID_FEATURE, $idFeature, $comparison);
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
	 * @return    Oops_Db_FeatureProductQuery The current query, for fluid interface
	 */
	public function filterByIdProduct($idProduct = null, $comparison = null)
	{
		if (is_array($idProduct) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(Oops_Db_FeatureProductPeer::ID_PRODUCT, $idProduct, $comparison);
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
	 * @return    Oops_Db_FeatureProductQuery The current query, for fluid interface
	 */
	public function filterByIdFeatureValue($idFeatureValue = null, $comparison = null)
	{
		if (is_array($idFeatureValue) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(Oops_Db_FeatureProductPeer::ID_FEATURE_VALUE, $idFeatureValue, $comparison);
	}

	/**
	 * Filter the query by a related Oops_Db_Product object
	 *
	 * @param     Oops_Db_Product|PropelCollection $product The related object(s) to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Db_FeatureProductQuery The current query, for fluid interface
	 */
	public function filterByProduct($product, $comparison = null)
	{
		if ($product instanceof Oops_Db_Product) {
			return $this
				->addUsingAlias(Oops_Db_FeatureProductPeer::ID_PRODUCT, $product->getIdProduct(), $comparison);
		} elseif ($product instanceof PropelCollection) {
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
			return $this
				->addUsingAlias(Oops_Db_FeatureProductPeer::ID_PRODUCT, $product->toKeyValue('PrimaryKey', 'IdProduct'), $comparison);
		} else {
			throw new PropelException('filterByProduct() only accepts arguments of type Oops_Db_Product or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the Product relation
	 *
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    Oops_Db_FeatureProductQuery The current query, for fluid interface
	 */
	public function joinProduct($relationAlias = null, $joinType = Criteria::INNER_JOIN)
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
	 * @return    Oops_Db_ProductQuery A secondary query class using the current class as primary query
	 */
	public function useProductQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinProduct($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'Product', 'Oops_Db_ProductQuery');
	}

	/**
	 * Filter the query by a related Oops_Db_Feature object
	 *
	 * @param     Oops_Db_Feature|PropelCollection $feature The related object(s) to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Db_FeatureProductQuery The current query, for fluid interface
	 */
	public function filterByFeature($feature, $comparison = null)
	{
		if ($feature instanceof Oops_Db_Feature) {
			return $this
				->addUsingAlias(Oops_Db_FeatureProductPeer::ID_FEATURE, $feature->getIdFeature(), $comparison);
		} elseif ($feature instanceof PropelCollection) {
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
			return $this
				->addUsingAlias(Oops_Db_FeatureProductPeer::ID_FEATURE, $feature->toKeyValue('PrimaryKey', 'IdFeature'), $comparison);
		} else {
			throw new PropelException('filterByFeature() only accepts arguments of type Oops_Db_Feature or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the Feature relation
	 *
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    Oops_Db_FeatureProductQuery The current query, for fluid interface
	 */
	public function joinFeature($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('Feature');

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
			$this->addJoinObject($join, 'Feature');
		}

		return $this;
	}

	/**
	 * Use the Feature relation Feature object
	 *
	 * @see       useQuery()
	 *
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    Oops_Db_FeatureQuery A secondary query class using the current class as primary query
	 */
	public function useFeatureQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinFeature($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'Feature', 'Oops_Db_FeatureQuery');
	}

	/**
	 * Filter the query by a related Oops_Db_FeatureValue object
	 *
	 * @param     Oops_Db_FeatureValue $featureValue  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Db_FeatureProductQuery The current query, for fluid interface
	 */
	public function filterByFeatureValue($featureValue, $comparison = null)
	{
		if ($featureValue instanceof Oops_Db_FeatureValue) {
			return $this
				->addUsingAlias(Oops_Db_FeatureProductPeer::ID_FEATURE_VALUE, $featureValue->getIdFeatureValue(), $comparison);
		} elseif ($featureValue instanceof PropelCollection) {
			return $this
				->useFeatureValueQuery()
				->filterByPrimaryKeys($featureValue->getPrimaryKeys())
				->endUse();
		} else {
			throw new PropelException('filterByFeatureValue() only accepts arguments of type Oops_Db_FeatureValue or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the FeatureValue relation
	 *
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    Oops_Db_FeatureProductQuery The current query, for fluid interface
	 */
	public function joinFeatureValue($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('FeatureValue');

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
			$this->addJoinObject($join, 'FeatureValue');
		}

		return $this;
	}

	/**
	 * Use the FeatureValue relation FeatureValue object
	 *
	 * @see       useQuery()
	 *
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    Oops_Db_FeatureValueQuery A secondary query class using the current class as primary query
	 */
	public function useFeatureValueQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinFeatureValue($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'FeatureValue', 'Oops_Db_FeatureValueQuery');
	}

	/**
	 * Exclude object from result
	 *
	 * @param     Oops_Db_FeatureProduct $featureProduct Object to remove from the list of results
	 *
	 * @return    Oops_Db_FeatureProductQuery The current query, for fluid interface
	 */
	public function prune($featureProduct = null)
	{
		if ($featureProduct) {
			$this->addCond('pruneCond0', $this->getAliasedColName(Oops_Db_FeatureProductPeer::ID_FEATURE), $featureProduct->getIdFeature(), Criteria::NOT_EQUAL);
			$this->addCond('pruneCond1', $this->getAliasedColName(Oops_Db_FeatureProductPeer::ID_PRODUCT), $featureProduct->getIdProduct(), Criteria::NOT_EQUAL);
			$this->addCond('pruneCond2', $this->getAliasedColName(Oops_Db_FeatureProductPeer::ID_FEATURE_VALUE), $featureProduct->getIdFeatureValue(), Criteria::NOT_EQUAL);
			$this->combine(array('pruneCond0', 'pruneCond1', 'pruneCond2'), Criteria::LOGICAL_OR);
		}

		return $this;
	}

} // Oops_Db_Propel_FeatureProductQuery