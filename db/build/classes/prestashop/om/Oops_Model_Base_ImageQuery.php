<?php


/**
 * Base class that represents a query for the '' . _DB_PREFIX_ . 'djland_image' table.
 *
 * 
 *
 * @method     Oops_Model_ImageQuery orderByIdImage($order = Criteria::ASC) Order by the id_image column
 * @method     Oops_Model_ImageQuery orderByIdProduct($order = Criteria::ASC) Order by the id_product column
 * @method     Oops_Model_ImageQuery orderByPosition($order = Criteria::ASC) Order by the position column
 * @method     Oops_Model_ImageQuery orderByCover($order = Criteria::ASC) Order by the cover column
 *
 * @method     Oops_Model_ImageQuery groupByIdImage() Group by the id_image column
 * @method     Oops_Model_ImageQuery groupByIdProduct() Group by the id_product column
 * @method     Oops_Model_ImageQuery groupByPosition() Group by the position column
 * @method     Oops_Model_ImageQuery groupByCover() Group by the cover column
 *
 * @method     Oops_Model_ImageQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     Oops_Model_ImageQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     Oops_Model_ImageQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     Oops_Model_ImageQuery leftJoinProduct($relationAlias = null) Adds a LEFT JOIN clause to the query using the Product relation
 * @method     Oops_Model_ImageQuery rightJoinProduct($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Product relation
 * @method     Oops_Model_ImageQuery innerJoinProduct($relationAlias = null) Adds a INNER JOIN clause to the query using the Product relation
 *
 * @method     Oops_Model_Image findOne(PropelPDO $con = null) Return the first Oops_Model_Image matching the query
 * @method     Oops_Model_Image findOneOrCreate(PropelPDO $con = null) Return the first Oops_Model_Image matching the query, or a new Oops_Model_Image object populated from the query conditions when no match is found
 *
 * @method     Oops_Model_Image findOneByIdImage(int $id_image) Return the first Oops_Model_Image filtered by the id_image column
 * @method     Oops_Model_Image findOneByIdProduct(int $id_product) Return the first Oops_Model_Image filtered by the id_product column
 * @method     Oops_Model_Image findOneByPosition(int $position) Return the first Oops_Model_Image filtered by the position column
 * @method     Oops_Model_Image findOneByCover(boolean $cover) Return the first Oops_Model_Image filtered by the cover column
 *
 * @method     array findByIdImage(int $id_image) Return Oops_Model_Image objects filtered by the id_image column
 * @method     array findByIdProduct(int $id_product) Return Oops_Model_Image objects filtered by the id_product column
 * @method     array findByPosition(int $position) Return Oops_Model_Image objects filtered by the position column
 * @method     array findByCover(boolean $cover) Return Oops_Model_Image objects filtered by the cover column
 *
 * @package    propel.generator.prestashop.om
 */
abstract class Oops_Model_Base_ImageQuery extends ModelCriteria
{
	
	/**
	 * Initializes internal state of Oops_Model_Base_ImageQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'prestashop', $modelName = 'Oops_Model_Image', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new Oops_Model_ImageQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    Oops_Model_ImageQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof Oops_Model_ImageQuery) {
			return $criteria;
		}
		$query = new Oops_Model_ImageQuery();
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
	 * @return    Oops_Model_Image|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ($key === null) {
			return null;
		}
		if ((null !== ($obj = Oops_Model_ImagePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
			// the object is alredy in the instance pool
			return $obj;
		}
		if ($con === null) {
			$con = Propel::getConnection(Oops_Model_ImagePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
	 * @return    Oops_Model_Image A model object, or null if the key is not found
	 */
	protected function findPkSimple($key, $con)
	{
		$sql = 'SELECT `ID_IMAGE`, `ID_PRODUCT`, `POSITION`, `COVER` FROM `' . _DB_PREFIX_ . 'djland_image` WHERE `ID_IMAGE` = :p0';
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
			$obj = new Oops_Model_Image();
			$obj->hydrate($row);
			Oops_Model_ImagePeer::addInstanceToPool($obj, (string) $row[0]);
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
	 * @return    Oops_Model_Image|array|mixed the result, formatted by the current formatter
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
	 * @return    Oops_Model_ImageQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(Oops_Model_ImagePeer::ID_IMAGE, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    Oops_Model_ImageQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(Oops_Model_ImagePeer::ID_IMAGE, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id_image column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByIdImage(1234); // WHERE id_image = 1234
	 * $query->filterByIdImage(array(12, 34)); // WHERE id_image IN (12, 34)
	 * $query->filterByIdImage(array('min' => 12)); // WHERE id_image > 12
	 * </code>
	 *
	 * @param     mixed $idImage The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_ImageQuery The current query, for fluid interface
	 */
	public function filterByIdImage($idImage = null, $comparison = null)
	{
		if (is_array($idImage) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(Oops_Model_ImagePeer::ID_IMAGE, $idImage, $comparison);
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
	 * @return    Oops_Model_ImageQuery The current query, for fluid interface
	 */
	public function filterByIdProduct($idProduct = null, $comparison = null)
	{
		if (is_array($idProduct)) {
			$useMinMax = false;
			if (isset($idProduct['min'])) {
				$this->addUsingAlias(Oops_Model_ImagePeer::ID_PRODUCT, $idProduct['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($idProduct['max'])) {
				$this->addUsingAlias(Oops_Model_ImagePeer::ID_PRODUCT, $idProduct['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_ImagePeer::ID_PRODUCT, $idProduct, $comparison);
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
	 * @return    Oops_Model_ImageQuery The current query, for fluid interface
	 */
	public function filterByPosition($position = null, $comparison = null)
	{
		if (is_array($position)) {
			$useMinMax = false;
			if (isset($position['min'])) {
				$this->addUsingAlias(Oops_Model_ImagePeer::POSITION, $position['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($position['max'])) {
				$this->addUsingAlias(Oops_Model_ImagePeer::POSITION, $position['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_ImagePeer::POSITION, $position, $comparison);
	}

	/**
	 * Filter the query on the cover column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByCover(true); // WHERE cover = true
	 * $query->filterByCover('yes'); // WHERE cover = true
	 * </code>
	 *
	 * @param     boolean|string $cover The value to use as filter.
	 *              Non-boolean arguments are converted using the following rules:
	 *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_ImageQuery The current query, for fluid interface
	 */
	public function filterByCover($cover = null, $comparison = null)
	{
		if (is_string($cover)) {
			$cover = in_array(strtolower($cover), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(Oops_Model_ImagePeer::COVER, $cover, $comparison);
	}

	/**
	 * Filter the query by a related Oops_Model_Product object
	 *
	 * @param     Oops_Model_Product|PropelCollection $product The related object(s) to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_ImageQuery The current query, for fluid interface
	 */
	public function filterByProduct($product, $comparison = null)
	{
		if ($product instanceof Oops_Model_Product) {
			return $this
				->addUsingAlias(Oops_Model_ImagePeer::ID_PRODUCT, $product->getIdProduct(), $comparison);
		} elseif ($product instanceof PropelCollection) {
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
			return $this
				->addUsingAlias(Oops_Model_ImagePeer::ID_PRODUCT, $product->toKeyValue('PrimaryKey', 'IdProduct'), $comparison);
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
	 * @return    Oops_Model_ImageQuery The current query, for fluid interface
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
	 * Exclude object from result
	 *
	 * @param     Oops_Model_Image $image Object to remove from the list of results
	 *
	 * @return    Oops_Model_ImageQuery The current query, for fluid interface
	 */
	public function prune($image = null)
	{
		if ($image) {
			$this->addUsingAlias(Oops_Model_ImagePeer::ID_IMAGE, $image->getIdImage(), Criteria::NOT_EQUAL);
		}

		return $this;
	}

} // Oops_Model_Base_ImageQuery