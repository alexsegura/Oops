<?php


/**
 * Base class that represents a query for the '' . _DB_PREFIX_ . 'djland_category_product' table.
 *
 * 
 *
 * @method     Oops_Model_CategoryProductQuery orderByIdCategory($order = Criteria::ASC) Order by the id_category column
 * @method     Oops_Model_CategoryProductQuery orderByIdProduct($order = Criteria::ASC) Order by the id_product column
 * @method     Oops_Model_CategoryProductQuery orderByPosition($order = Criteria::ASC) Order by the position column
 *
 * @method     Oops_Model_CategoryProductQuery groupByIdCategory() Group by the id_category column
 * @method     Oops_Model_CategoryProductQuery groupByIdProduct() Group by the id_product column
 * @method     Oops_Model_CategoryProductQuery groupByPosition() Group by the position column
 *
 * @method     Oops_Model_CategoryProductQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     Oops_Model_CategoryProductQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     Oops_Model_CategoryProductQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     Oops_Model_CategoryProductQuery leftJoinProduct($relationAlias = null) Adds a LEFT JOIN clause to the query using the Product relation
 * @method     Oops_Model_CategoryProductQuery rightJoinProduct($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Product relation
 * @method     Oops_Model_CategoryProductQuery innerJoinProduct($relationAlias = null) Adds a INNER JOIN clause to the query using the Product relation
 *
 * @method     Oops_Model_CategoryProductQuery leftJoinCategory($relationAlias = null) Adds a LEFT JOIN clause to the query using the Category relation
 * @method     Oops_Model_CategoryProductQuery rightJoinCategory($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Category relation
 * @method     Oops_Model_CategoryProductQuery innerJoinCategory($relationAlias = null) Adds a INNER JOIN clause to the query using the Category relation
 *
 * @method     Oops_Model_CategoryProduct findOne(PropelPDO $con = null) Return the first Oops_Model_CategoryProduct matching the query
 * @method     Oops_Model_CategoryProduct findOneOrCreate(PropelPDO $con = null) Return the first Oops_Model_CategoryProduct matching the query, or a new Oops_Model_CategoryProduct object populated from the query conditions when no match is found
 *
 * @method     Oops_Model_CategoryProduct findOneByIdCategory(int $id_category) Return the first Oops_Model_CategoryProduct filtered by the id_category column
 * @method     Oops_Model_CategoryProduct findOneByIdProduct(int $id_product) Return the first Oops_Model_CategoryProduct filtered by the id_product column
 * @method     Oops_Model_CategoryProduct findOneByPosition(int $position) Return the first Oops_Model_CategoryProduct filtered by the position column
 *
 * @method     array findByIdCategory(int $id_category) Return Oops_Model_CategoryProduct objects filtered by the id_category column
 * @method     array findByIdProduct(int $id_product) Return Oops_Model_CategoryProduct objects filtered by the id_product column
 * @method     array findByPosition(int $position) Return Oops_Model_CategoryProduct objects filtered by the position column
 *
 * @package    propel.generator.prestashop.om
 */
abstract class Oops_Model_Base_CategoryProductQuery extends ModelCriteria
{
	
	/**
	 * Initializes internal state of Oops_Model_Base_CategoryProductQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'prestashop', $modelName = 'Oops_Model_CategoryProduct', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new Oops_Model_CategoryProductQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    Oops_Model_CategoryProductQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof Oops_Model_CategoryProductQuery) {
			return $criteria;
		}
		$query = new Oops_Model_CategoryProductQuery();
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
	 * @param     array[$id_category, $id_product] $key Primary key to use for the query
	 * @param     PropelPDO $con an optional connection object
	 *
	 * @return    Oops_Model_CategoryProduct|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ($key === null) {
			return null;
		}
		if ((null !== ($obj = Oops_Model_CategoryProductPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
			// the object is alredy in the instance pool
			return $obj;
		}
		if ($con === null) {
			$con = Propel::getConnection(Oops_Model_CategoryProductPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
	 * @return    Oops_Model_CategoryProduct A model object, or null if the key is not found
	 */
	protected function findPkSimple($key, $con)
	{
		$sql = 'SELECT `ID_CATEGORY`, `ID_PRODUCT`, `POSITION` FROM `' . _DB_PREFIX_ . 'djland_category_product` WHERE `ID_CATEGORY` = :p0 AND `ID_PRODUCT` = :p1';
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
			$obj = new Oops_Model_CategoryProduct();
			$obj->hydrate($row);
			Oops_Model_CategoryProductPeer::addInstanceToPool($obj, serialize(array((string) $row[0], (string) $row[1])));
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
	 * @return    Oops_Model_CategoryProduct|array|mixed the result, formatted by the current formatter
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
	 * @return    Oops_Model_CategoryProductQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		$this->addUsingAlias(Oops_Model_CategoryProductPeer::ID_CATEGORY, $key[0], Criteria::EQUAL);
		$this->addUsingAlias(Oops_Model_CategoryProductPeer::ID_PRODUCT, $key[1], Criteria::EQUAL);

		return $this;
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    Oops_Model_CategoryProductQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		if (empty($keys)) {
			return $this->add(null, '1<>1', Criteria::CUSTOM);
		}
		foreach ($keys as $key) {
			$cton0 = $this->getNewCriterion(Oops_Model_CategoryProductPeer::ID_CATEGORY, $key[0], Criteria::EQUAL);
			$cton1 = $this->getNewCriterion(Oops_Model_CategoryProductPeer::ID_PRODUCT, $key[1], Criteria::EQUAL);
			$cton0->addAnd($cton1);
			$this->addOr($cton0);
		}

		return $this;
	}

	/**
	 * Filter the query on the id_category column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByIdCategory(1234); // WHERE id_category = 1234
	 * $query->filterByIdCategory(array(12, 34)); // WHERE id_category IN (12, 34)
	 * $query->filterByIdCategory(array('min' => 12)); // WHERE id_category > 12
	 * </code>
	 *
	 * @see       filterByCategory()
	 *
	 * @param     mixed $idCategory The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_CategoryProductQuery The current query, for fluid interface
	 */
	public function filterByIdCategory($idCategory = null, $comparison = null)
	{
		if (is_array($idCategory) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(Oops_Model_CategoryProductPeer::ID_CATEGORY, $idCategory, $comparison);
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
	 * @return    Oops_Model_CategoryProductQuery The current query, for fluid interface
	 */
	public function filterByIdProduct($idProduct = null, $comparison = null)
	{
		if (is_array($idProduct) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(Oops_Model_CategoryProductPeer::ID_PRODUCT, $idProduct, $comparison);
	}

	/**
	 * Filter the query on the position column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByPosition(1234); // WHERE position = 1234
	 * $query->filterByPosition(array(12, 34)); // WHERE position IN (12, 34)
	 * $query->filterByPosition(array('min' => 12)); // WHERE position > 12
	 * </code>
	 *
	 * @param     mixed $position The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_CategoryProductQuery The current query, for fluid interface
	 */
	public function filterByPosition($position = null, $comparison = null)
	{
		if (is_array($position)) {
			$useMinMax = false;
			if (isset($position['min'])) {
				$this->addUsingAlias(Oops_Model_CategoryProductPeer::POSITION, $position['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($position['max'])) {
				$this->addUsingAlias(Oops_Model_CategoryProductPeer::POSITION, $position['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_CategoryProductPeer::POSITION, $position, $comparison);
	}

	/**
	 * Filter the query by a related Oops_Model_Product object
	 *
	 * @param     Oops_Model_Product|PropelCollection $product The related object(s) to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_CategoryProductQuery The current query, for fluid interface
	 */
	public function filterByProduct($product, $comparison = null)
	{
		if ($product instanceof Oops_Model_Product) {
			return $this
				->addUsingAlias(Oops_Model_CategoryProductPeer::ID_PRODUCT, $product->getIdProduct(), $comparison);
		} elseif ($product instanceof PropelCollection) {
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
			return $this
				->addUsingAlias(Oops_Model_CategoryProductPeer::ID_PRODUCT, $product->toKeyValue('PrimaryKey', 'IdProduct'), $comparison);
		} else {
			throw new PropelException('filterByProduct() only accepts arguments of type Oops_Model_Product or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the Product relation
	 *
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    Oops_Model_CategoryProductQuery The current query, for fluid interface
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
	 * @return    Oops_Model_ProductQuery A secondary query class using the current class as primary query
	 */
	public function useProductQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinProduct($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'Product', 'Oops_Model_ProductQuery');
	}

	/**
	 * Filter the query by a related Oops_Model_Category object
	 *
	 * @param     Oops_Model_Category|PropelCollection $category The related object(s) to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_CategoryProductQuery The current query, for fluid interface
	 */
	public function filterByCategory($category, $comparison = null)
	{
		if ($category instanceof Oops_Model_Category) {
			return $this
				->addUsingAlias(Oops_Model_CategoryProductPeer::ID_CATEGORY, $category->getIdCategory(), $comparison);
		} elseif ($category instanceof PropelCollection) {
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
			return $this
				->addUsingAlias(Oops_Model_CategoryProductPeer::ID_CATEGORY, $category->toKeyValue('PrimaryKey', 'IdCategory'), $comparison);
		} else {
			throw new PropelException('filterByCategory() only accepts arguments of type Oops_Model_Category or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the Category relation
	 *
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    Oops_Model_CategoryProductQuery The current query, for fluid interface
	 */
	public function joinCategory($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('Category');

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
			$this->addJoinObject($join, 'Category');
		}

		return $this;
	}

	/**
	 * Use the Category relation Category object
	 *
	 * @see       useQuery()
	 *
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    Oops_Model_CategoryQuery A secondary query class using the current class as primary query
	 */
	public function useCategoryQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinCategory($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'Category', 'Oops_Model_CategoryQuery');
	}

	/**
	 * Exclude object from result
	 *
	 * @param     Oops_Model_CategoryProduct $categoryProduct Object to remove from the list of results
	 *
	 * @return    Oops_Model_CategoryProductQuery The current query, for fluid interface
	 */
	public function prune($categoryProduct = null)
	{
		if ($categoryProduct) {
			$this->addCond('pruneCond0', $this->getAliasedColName(Oops_Model_CategoryProductPeer::ID_CATEGORY), $categoryProduct->getIdCategory(), Criteria::NOT_EQUAL);
			$this->addCond('pruneCond1', $this->getAliasedColName(Oops_Model_CategoryProductPeer::ID_PRODUCT), $categoryProduct->getIdProduct(), Criteria::NOT_EQUAL);
			$this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
		}

		return $this;
	}

} // Oops_Model_Base_CategoryProductQuery