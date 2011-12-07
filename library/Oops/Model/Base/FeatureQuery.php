<?php


/**
 * Base class that represents a query for the 'feature' table.
 *
 * 
 *
 * @method     Oops_Model_FeatureQuery orderByIdFeature($order = Criteria::ASC) Order by the id_feature column
 *
 * @method     Oops_Model_FeatureQuery groupByIdFeature() Group by the id_feature column
 *
 * @method     Oops_Model_FeatureQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     Oops_Model_FeatureQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     Oops_Model_FeatureQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     Oops_Model_FeatureQuery leftJoinFeatureProduct($relationAlias = null) Adds a LEFT JOIN clause to the query using the FeatureProduct relation
 * @method     Oops_Model_FeatureQuery rightJoinFeatureProduct($relationAlias = null) Adds a RIGHT JOIN clause to the query using the FeatureProduct relation
 * @method     Oops_Model_FeatureQuery innerJoinFeatureProduct($relationAlias = null) Adds a INNER JOIN clause to the query using the FeatureProduct relation
 *
 * @method     Oops_Model_FeatureQuery leftJoinFeatureValue($relationAlias = null) Adds a LEFT JOIN clause to the query using the FeatureValue relation
 * @method     Oops_Model_FeatureQuery rightJoinFeatureValue($relationAlias = null) Adds a RIGHT JOIN clause to the query using the FeatureValue relation
 * @method     Oops_Model_FeatureQuery innerJoinFeatureValue($relationAlias = null) Adds a INNER JOIN clause to the query using the FeatureValue relation
 *
 * @method     Oops_Model_FeatureQuery leftJoinFeatureLang($relationAlias = null) Adds a LEFT JOIN clause to the query using the FeatureLang relation
 * @method     Oops_Model_FeatureQuery rightJoinFeatureLang($relationAlias = null) Adds a RIGHT JOIN clause to the query using the FeatureLang relation
 * @method     Oops_Model_FeatureQuery innerJoinFeatureLang($relationAlias = null) Adds a INNER JOIN clause to the query using the FeatureLang relation
 *
 * @method     Oops_Model_Feature findOne(PropelPDO $con = null) Return the first Oops_Model_Feature matching the query
 * @method     Oops_Model_Feature findOneOrCreate(PropelPDO $con = null) Return the first Oops_Model_Feature matching the query, or a new Oops_Model_Feature object populated from the query conditions when no match is found
 *
 * @method     Oops_Model_Feature findOneByIdFeature(int $id_feature) Return the first Oops_Model_Feature filtered by the id_feature column
 *
 * @method     array findByIdFeature(int $id_feature) Return Oops_Model_Feature objects filtered by the id_feature column
 *
 * @package    propel.generator.prestashop.om
 */
abstract class Oops_Model_Base_FeatureQuery extends ModelCriteria
{
	
	/**
	 * Initializes internal state of Oops_Model_Base_FeatureQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'prestashop', $modelName = 'Oops_Model_Feature', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new Oops_Model_FeatureQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    Oops_Model_FeatureQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof Oops_Model_FeatureQuery) {
			return $criteria;
		}
		$query = new Oops_Model_FeatureQuery();
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
	 * @return    Oops_Model_Feature|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ($key === null) {
			return null;
		}
		if ((null !== ($obj = Oops_Model_FeaturePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
			// the object is alredy in the instance pool
			return $obj;
		}
		if ($con === null) {
			$con = Propel::getConnection(Oops_Model_FeaturePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
	 * @return    Oops_Model_Feature A model object, or null if the key is not found
	 */
	protected function findPkSimple($key, $con)
	{
		$sql = 'SELECT `ID_FEATURE` FROM `' . _DB_PREFIX_ . 'feature` WHERE `ID_FEATURE` = :p0';
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
			$obj = new Oops_Model_Feature();
			$obj->hydrate($row);
			Oops_Model_FeaturePeer::addInstanceToPool($obj, (string) $row[0]);
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
	 * @return    Oops_Model_Feature|array|mixed the result, formatted by the current formatter
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
	 * @return    Oops_Model_FeatureQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(Oops_Model_FeaturePeer::ID_FEATURE, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    Oops_Model_FeatureQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(Oops_Model_FeaturePeer::ID_FEATURE, $keys, Criteria::IN);
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
	 * @return    Oops_Model_FeatureQuery The current query, for fluid interface
	 */
	public function filterByIdFeature($idFeature = null, $comparison = null)
	{
		if (is_array($idFeature) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(Oops_Model_FeaturePeer::ID_FEATURE, $idFeature, $comparison);
	}

	/**
	 * Filter the query by a related Oops_Model_FeatureProduct object
	 *
	 * @param     Oops_Model_FeatureProduct $featureProduct  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_FeatureQuery The current query, for fluid interface
	 */
	public function filterByFeatureProduct($featureProduct, $comparison = null)
	{
		if ($featureProduct instanceof Oops_Model_FeatureProduct) {
			return $this
				->addUsingAlias(Oops_Model_FeaturePeer::ID_FEATURE, $featureProduct->getIdFeature(), $comparison);
		} elseif ($featureProduct instanceof PropelCollection) {
			return $this
				->useFeatureProductQuery()
				->filterByPrimaryKeys($featureProduct->getPrimaryKeys())
				->endUse();
		} else {
			throw new PropelException('filterByFeatureProduct() only accepts arguments of type Oops_Model_FeatureProduct or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the FeatureProduct relation
	 *
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    Oops_Model_FeatureQuery The current query, for fluid interface
	 */
	public function joinFeatureProduct($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('FeatureProduct');

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
			$this->addJoinObject($join, 'FeatureProduct');
		}

		return $this;
	}

	/**
	 * Use the FeatureProduct relation FeatureProduct object
	 *
	 * @see       useQuery()
	 *
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    Oops_Model_FeatureProductQuery A secondary query class using the current class as primary query
	 */
	public function useFeatureProductQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinFeatureProduct($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'FeatureProduct', 'Oops_Model_FeatureProductQuery');
	}

	/**
	 * Filter the query by a related Oops_Model_FeatureValue object
	 *
	 * @param     Oops_Model_FeatureValue $featureValue  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_FeatureQuery The current query, for fluid interface
	 */
	public function filterByFeatureValue($featureValue, $comparison = null)
	{
		if ($featureValue instanceof Oops_Model_FeatureValue) {
			return $this
				->addUsingAlias(Oops_Model_FeaturePeer::ID_FEATURE, $featureValue->getIdFeature(), $comparison);
		} elseif ($featureValue instanceof PropelCollection) {
			return $this
				->useFeatureValueQuery()
				->filterByPrimaryKeys($featureValue->getPrimaryKeys())
				->endUse();
		} else {
			throw new PropelException('filterByFeatureValue() only accepts arguments of type Oops_Model_FeatureValue or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the FeatureValue relation
	 *
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    Oops_Model_FeatureQuery The current query, for fluid interface
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
	 * @return    Oops_Model_FeatureValueQuery A secondary query class using the current class as primary query
	 */
	public function useFeatureValueQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinFeatureValue($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'FeatureValue', 'Oops_Model_FeatureValueQuery');
	}

	/**
	 * Filter the query by a related Oops_Model_FeatureLang object
	 *
	 * @param     Oops_Model_FeatureLang $featureLang  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_FeatureQuery The current query, for fluid interface
	 */
	public function filterByFeatureLang($featureLang, $comparison = null)
	{
		if ($featureLang instanceof Oops_Model_FeatureLang) {
			return $this
				->addUsingAlias(Oops_Model_FeaturePeer::ID_FEATURE, $featureLang->getIdFeature(), $comparison);
		} elseif ($featureLang instanceof PropelCollection) {
			return $this
				->useFeatureLangQuery()
				->filterByPrimaryKeys($featureLang->getPrimaryKeys())
				->endUse();
		} else {
			throw new PropelException('filterByFeatureLang() only accepts arguments of type Oops_Model_FeatureLang or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the FeatureLang relation
	 *
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    Oops_Model_FeatureQuery The current query, for fluid interface
	 */
	public function joinFeatureLang($relationAlias = null, $joinType = 'LEFT JOIN')
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('FeatureLang');

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
			$this->addJoinObject($join, 'FeatureLang');
		}

		return $this;
	}

	/**
	 * Use the FeatureLang relation FeatureLang object
	 *
	 * @see       useQuery()
	 *
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    Oops_Model_FeatureLangQuery A secondary query class using the current class as primary query
	 */
	public function useFeatureLangQuery($relationAlias = null, $joinType = 'LEFT JOIN')
	{
		return $this
			->joinFeatureLang($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'FeatureLang', 'Oops_Model_FeatureLangQuery');
	}

	/**
	 * Filter the query by a related Product object
	 * using the feature_product table as cross reference
	 *
	 * @param     Product $product the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_FeatureQuery The current query, for fluid interface
	 */
	public function filterByProduct($product, $comparison = Criteria::EQUAL)
	{
		return $this
			->useFeatureProductQuery()
			->filterByProduct($product, $comparison)
			->endUse();
	}

	/**
	 * Exclude object from result
	 *
	 * @param     Oops_Model_Feature $feature Object to remove from the list of results
	 *
	 * @return    Oops_Model_FeatureQuery The current query, for fluid interface
	 */
	public function prune($feature = null)
	{
		if ($feature) {
			$this->addUsingAlias(Oops_Model_FeaturePeer::ID_FEATURE, $feature->getIdFeature(), Criteria::NOT_EQUAL);
		}

		return $this;
	}

	// i18n behavior
	
	/**
	 * Adds a JOIN clause to the query using the i18n relation
	 *
	 * @param     string $locale Locale to use for the join condition, e.g. 'fr_FR'
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'. Defaults to left join.
	 *
	 * @return    Oops_Model_FeatureQuery The current query, for fluid interface
	 */
	public function joinI18n($locale = '1', $relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		$relationName = $relationAlias ? $relationAlias : 'FeatureLang';
		return $this
			->joinFeatureLang($relationAlias, $joinType)
			->addJoinCondition($relationName, $relationName . '.IdLang = ?', $locale);
	}
	
	/**
	 * Adds a JOIN clause to the query and hydrates the related I18n object.
	 * Shortcut for $c->joinI18n($locale)->with()
	 *
	 * @param     string $locale Locale to use for the join condition, e.g. 'fr_FR'
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'. Defaults to left join.
	 *
	 * @return    Oops_Model_FeatureQuery The current query, for fluid interface
	 */
	public function joinWithI18n($locale = '1', $joinType = Criteria::LEFT_JOIN)
	{
		$this
			->joinI18n($locale, null, $joinType)
			->with('FeatureLang');
		$this->with['FeatureLang']->setIsWithOneToMany(false);
		return $this;
	}
	
	/**
	 * Use the I18n relation query object
	 *
	 * @see       useQuery()
	 *
	 * @param     string $locale Locale to use for the join condition, e.g. 'fr_FR'
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'. Defaults to left join.
	 *
	 * @return    Oops_Model_FeatureLangQuery A secondary query class using the current class as primary query
	 */
	public function useI18nQuery($locale = '1', $relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		return $this
			->joinI18n($locale, $relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'FeatureLang', 'Oops_Model_FeatureLangQuery');
	}

} // Oops_Model_Base_FeatureQuery