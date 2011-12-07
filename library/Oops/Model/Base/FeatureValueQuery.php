<?php


/**
 * Base class that represents a query for the 'feature_value' table.
 *
 * 
 *
 * @method     Oops_Model_FeatureValueQuery orderByIdFeatureValue($order = Criteria::ASC) Order by the id_feature_value column
 * @method     Oops_Model_FeatureValueQuery orderByIdFeature($order = Criteria::ASC) Order by the id_feature column
 * @method     Oops_Model_FeatureValueQuery orderByCustom($order = Criteria::ASC) Order by the custom column
 *
 * @method     Oops_Model_FeatureValueQuery groupByIdFeatureValue() Group by the id_feature_value column
 * @method     Oops_Model_FeatureValueQuery groupByIdFeature() Group by the id_feature column
 * @method     Oops_Model_FeatureValueQuery groupByCustom() Group by the custom column
 *
 * @method     Oops_Model_FeatureValueQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     Oops_Model_FeatureValueQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     Oops_Model_FeatureValueQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     Oops_Model_FeatureValueQuery leftJoinFeature($relationAlias = null) Adds a LEFT JOIN clause to the query using the Feature relation
 * @method     Oops_Model_FeatureValueQuery rightJoinFeature($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Feature relation
 * @method     Oops_Model_FeatureValueQuery innerJoinFeature($relationAlias = null) Adds a INNER JOIN clause to the query using the Feature relation
 *
 * @method     Oops_Model_FeatureValueQuery leftJoinFeatureProduct($relationAlias = null) Adds a LEFT JOIN clause to the query using the FeatureProduct relation
 * @method     Oops_Model_FeatureValueQuery rightJoinFeatureProduct($relationAlias = null) Adds a RIGHT JOIN clause to the query using the FeatureProduct relation
 * @method     Oops_Model_FeatureValueQuery innerJoinFeatureProduct($relationAlias = null) Adds a INNER JOIN clause to the query using the FeatureProduct relation
 *
 * @method     Oops_Model_FeatureValueQuery leftJoinFeatureValueLang($relationAlias = null) Adds a LEFT JOIN clause to the query using the FeatureValueLang relation
 * @method     Oops_Model_FeatureValueQuery rightJoinFeatureValueLang($relationAlias = null) Adds a RIGHT JOIN clause to the query using the FeatureValueLang relation
 * @method     Oops_Model_FeatureValueQuery innerJoinFeatureValueLang($relationAlias = null) Adds a INNER JOIN clause to the query using the FeatureValueLang relation
 *
 * @method     Oops_Model_FeatureValue findOne(PropelPDO $con = null) Return the first Oops_Model_FeatureValue matching the query
 * @method     Oops_Model_FeatureValue findOneOrCreate(PropelPDO $con = null) Return the first Oops_Model_FeatureValue matching the query, or a new Oops_Model_FeatureValue object populated from the query conditions when no match is found
 *
 * @method     Oops_Model_FeatureValue findOneByIdFeatureValue(int $id_feature_value) Return the first Oops_Model_FeatureValue filtered by the id_feature_value column
 * @method     Oops_Model_FeatureValue findOneByIdFeature(int $id_feature) Return the first Oops_Model_FeatureValue filtered by the id_feature column
 * @method     Oops_Model_FeatureValue findOneByCustom(int $custom) Return the first Oops_Model_FeatureValue filtered by the custom column
 *
 * @method     array findByIdFeatureValue(int $id_feature_value) Return Oops_Model_FeatureValue objects filtered by the id_feature_value column
 * @method     array findByIdFeature(int $id_feature) Return Oops_Model_FeatureValue objects filtered by the id_feature column
 * @method     array findByCustom(int $custom) Return Oops_Model_FeatureValue objects filtered by the custom column
 *
 * @package    propel.generator.prestashop.om
 */
abstract class Oops_Model_Base_FeatureValueQuery extends ModelCriteria
{
	
	/**
	 * Initializes internal state of Oops_Model_Base_FeatureValueQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'prestashop', $modelName = 'Oops_Model_FeatureValue', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new Oops_Model_FeatureValueQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    Oops_Model_FeatureValueQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof Oops_Model_FeatureValueQuery) {
			return $criteria;
		}
		$query = new Oops_Model_FeatureValueQuery();
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
	 * @return    Oops_Model_FeatureValue|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ($key === null) {
			return null;
		}
		if ((null !== ($obj = Oops_Model_FeatureValuePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
			// the object is alredy in the instance pool
			return $obj;
		}
		if ($con === null) {
			$con = Propel::getConnection(Oops_Model_FeatureValuePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
	 * @return    Oops_Model_FeatureValue A model object, or null if the key is not found
	 */
	protected function findPkSimple($key, $con)
	{
		$sql = 'SELECT `ID_FEATURE_VALUE`, `ID_FEATURE`, `CUSTOM` FROM `' . _DB_PREFIX_ . 'feature_value` WHERE `ID_FEATURE_VALUE` = :p0';
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
			$obj = new Oops_Model_FeatureValue();
			$obj->hydrate($row);
			Oops_Model_FeatureValuePeer::addInstanceToPool($obj, (string) $row[0]);
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
	 * @return    Oops_Model_FeatureValue|array|mixed the result, formatted by the current formatter
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
	 * @return    Oops_Model_FeatureValueQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(Oops_Model_FeatureValuePeer::ID_FEATURE_VALUE, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    Oops_Model_FeatureValueQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(Oops_Model_FeatureValuePeer::ID_FEATURE_VALUE, $keys, Criteria::IN);
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
	 * @see       filterByFeatureProduct()
	 *
	 * @param     mixed $idFeatureValue The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_FeatureValueQuery The current query, for fluid interface
	 */
	public function filterByIdFeatureValue($idFeatureValue = null, $comparison = null)
	{
		if (is_array($idFeatureValue) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(Oops_Model_FeatureValuePeer::ID_FEATURE_VALUE, $idFeatureValue, $comparison);
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
	 * @return    Oops_Model_FeatureValueQuery The current query, for fluid interface
	 */
	public function filterByIdFeature($idFeature = null, $comparison = null)
	{
		if (is_array($idFeature)) {
			$useMinMax = false;
			if (isset($idFeature['min'])) {
				$this->addUsingAlias(Oops_Model_FeatureValuePeer::ID_FEATURE, $idFeature['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($idFeature['max'])) {
				$this->addUsingAlias(Oops_Model_FeatureValuePeer::ID_FEATURE, $idFeature['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_FeatureValuePeer::ID_FEATURE, $idFeature, $comparison);
	}

	/**
	 * Filter the query on the custom column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByCustom(1234); // WHERE custom = 1234
	 * $query->filterByCustom(array(12, 34)); // WHERE custom IN (12, 34)
	 * $query->filterByCustom(array('min' => 12)); // WHERE custom > 12
	 * </code>
	 *
	 * @param     mixed $custom The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_FeatureValueQuery The current query, for fluid interface
	 */
	public function filterByCustom($custom = null, $comparison = null)
	{
		if (is_array($custom)) {
			$useMinMax = false;
			if (isset($custom['min'])) {
				$this->addUsingAlias(Oops_Model_FeatureValuePeer::CUSTOM, $custom['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($custom['max'])) {
				$this->addUsingAlias(Oops_Model_FeatureValuePeer::CUSTOM, $custom['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_FeatureValuePeer::CUSTOM, $custom, $comparison);
	}

	/**
	 * Filter the query by a related Oops_Model_Feature object
	 *
	 * @param     Oops_Model_Feature|PropelCollection $feature The related object(s) to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_FeatureValueQuery The current query, for fluid interface
	 */
	public function filterByFeature($feature, $comparison = null)
	{
		if ($feature instanceof Oops_Model_Feature) {
			return $this
				->addUsingAlias(Oops_Model_FeatureValuePeer::ID_FEATURE, $feature->getIdFeature(), $comparison);
		} elseif ($feature instanceof PropelCollection) {
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
			return $this
				->addUsingAlias(Oops_Model_FeatureValuePeer::ID_FEATURE, $feature->toKeyValue('PrimaryKey', 'IdFeature'), $comparison);
		} else {
			throw new PropelException('filterByFeature() only accepts arguments of type Oops_Model_Feature or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the Feature relation
	 *
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    Oops_Model_FeatureValueQuery The current query, for fluid interface
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
	 * @return    Oops_Model_FeatureQuery A secondary query class using the current class as primary query
	 */
	public function useFeatureQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinFeature($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'Feature', 'Oops_Model_FeatureQuery');
	}

	/**
	 * Filter the query by a related Oops_Model_FeatureProduct object
	 *
	 * @param     Oops_Model_FeatureProduct|PropelCollection $featureProduct The related object(s) to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_FeatureValueQuery The current query, for fluid interface
	 */
	public function filterByFeatureProduct($featureProduct, $comparison = null)
	{
		if ($featureProduct instanceof Oops_Model_FeatureProduct) {
			return $this
				->addUsingAlias(Oops_Model_FeatureValuePeer::ID_FEATURE_VALUE, $featureProduct->getIdFeatureValue(), $comparison);
		} elseif ($featureProduct instanceof PropelCollection) {
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
			return $this
				->addUsingAlias(Oops_Model_FeatureValuePeer::ID_FEATURE_VALUE, $featureProduct->toKeyValue('PrimaryKey', 'IdFeatureValue'), $comparison);
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
	 * @return    Oops_Model_FeatureValueQuery The current query, for fluid interface
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
	 * Filter the query by a related Oops_Model_FeatureValueLang object
	 *
	 * @param     Oops_Model_FeatureValueLang $featureValueLang  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_FeatureValueQuery The current query, for fluid interface
	 */
	public function filterByFeatureValueLang($featureValueLang, $comparison = null)
	{
		if ($featureValueLang instanceof Oops_Model_FeatureValueLang) {
			return $this
				->addUsingAlias(Oops_Model_FeatureValuePeer::ID_FEATURE_VALUE, $featureValueLang->getIdFeatureValue(), $comparison);
		} elseif ($featureValueLang instanceof PropelCollection) {
			return $this
				->useFeatureValueLangQuery()
				->filterByPrimaryKeys($featureValueLang->getPrimaryKeys())
				->endUse();
		} else {
			throw new PropelException('filterByFeatureValueLang() only accepts arguments of type Oops_Model_FeatureValueLang or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the FeatureValueLang relation
	 *
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    Oops_Model_FeatureValueQuery The current query, for fluid interface
	 */
	public function joinFeatureValueLang($relationAlias = null, $joinType = 'LEFT JOIN')
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('FeatureValueLang');

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
			$this->addJoinObject($join, 'FeatureValueLang');
		}

		return $this;
	}

	/**
	 * Use the FeatureValueLang relation FeatureValueLang object
	 *
	 * @see       useQuery()
	 *
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    Oops_Model_FeatureValueLangQuery A secondary query class using the current class as primary query
	 */
	public function useFeatureValueLangQuery($relationAlias = null, $joinType = 'LEFT JOIN')
	{
		return $this
			->joinFeatureValueLang($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'FeatureValueLang', 'Oops_Model_FeatureValueLangQuery');
	}

	/**
	 * Exclude object from result
	 *
	 * @param     Oops_Model_FeatureValue $featureValue Object to remove from the list of results
	 *
	 * @return    Oops_Model_FeatureValueQuery The current query, for fluid interface
	 */
	public function prune($featureValue = null)
	{
		if ($featureValue) {
			$this->addUsingAlias(Oops_Model_FeatureValuePeer::ID_FEATURE_VALUE, $featureValue->getIdFeatureValue(), Criteria::NOT_EQUAL);
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
	 * @return    Oops_Model_FeatureValueQuery The current query, for fluid interface
	 */
	public function joinI18n($locale = '1', $relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		$relationName = $relationAlias ? $relationAlias : 'FeatureValueLang';
		return $this
			->joinFeatureValueLang($relationAlias, $joinType)
			->addJoinCondition($relationName, $relationName . '.IdLang = ?', $locale);
	}
	
	/**
	 * Adds a JOIN clause to the query and hydrates the related I18n object.
	 * Shortcut for $c->joinI18n($locale)->with()
	 *
	 * @param     string $locale Locale to use for the join condition, e.g. 'fr_FR'
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'. Defaults to left join.
	 *
	 * @return    Oops_Model_FeatureValueQuery The current query, for fluid interface
	 */
	public function joinWithI18n($locale = '1', $joinType = Criteria::LEFT_JOIN)
	{
		$this
			->joinI18n($locale, null, $joinType)
			->with('FeatureValueLang');
		$this->with['FeatureValueLang']->setIsWithOneToMany(false);
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
	 * @return    Oops_Model_FeatureValueLangQuery A secondary query class using the current class as primary query
	 */
	public function useI18nQuery($locale = '1', $relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		return $this
			->joinI18n($locale, $relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'FeatureValueLang', 'Oops_Model_FeatureValueLangQuery');
	}

} // Oops_Model_Base_FeatureValueQuery