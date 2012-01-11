<?php


/**
 * Base class that represents a query for the 'product_attachment' table.
 *
 * 
 *
 * @method     Oops_Db_ProductAttachmentQuery orderByIdProduct($order = Criteria::ASC) Order by the id_product column
 * @method     Oops_Db_ProductAttachmentQuery orderByIdAttachment($order = Criteria::ASC) Order by the id_attachment column
 *
 * @method     Oops_Db_ProductAttachmentQuery groupByIdProduct() Group by the id_product column
 * @method     Oops_Db_ProductAttachmentQuery groupByIdAttachment() Group by the id_attachment column
 *
 * @method     Oops_Db_ProductAttachmentQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     Oops_Db_ProductAttachmentQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     Oops_Db_ProductAttachmentQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     Oops_Db_ProductAttachmentQuery leftJoinProduct($relationAlias = null) Adds a LEFT JOIN clause to the query using the Product relation
 * @method     Oops_Db_ProductAttachmentQuery rightJoinProduct($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Product relation
 * @method     Oops_Db_ProductAttachmentQuery innerJoinProduct($relationAlias = null) Adds a INNER JOIN clause to the query using the Product relation
 *
 * @method     Oops_Db_ProductAttachmentQuery leftJoinAttachment($relationAlias = null) Adds a LEFT JOIN clause to the query using the Attachment relation
 * @method     Oops_Db_ProductAttachmentQuery rightJoinAttachment($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Attachment relation
 * @method     Oops_Db_ProductAttachmentQuery innerJoinAttachment($relationAlias = null) Adds a INNER JOIN clause to the query using the Attachment relation
 *
 * @method     Oops_Db_ProductAttachment findOne(PropelPDO $con = null) Return the first Oops_Db_ProductAttachment matching the query
 * @method     Oops_Db_ProductAttachment findOneOrCreate(PropelPDO $con = null) Return the first Oops_Db_ProductAttachment matching the query, or a new Oops_Db_ProductAttachment object populated from the query conditions when no match is found
 *
 * @method     Oops_Db_ProductAttachment findOneByIdProduct(int $id_product) Return the first Oops_Db_ProductAttachment filtered by the id_product column
 * @method     Oops_Db_ProductAttachment findOneByIdAttachment(int $id_attachment) Return the first Oops_Db_ProductAttachment filtered by the id_attachment column
 *
 * @method     array findByIdProduct(int $id_product) Return Oops_Db_ProductAttachment objects filtered by the id_product column
 * @method     array findByIdAttachment(int $id_attachment) Return Oops_Db_ProductAttachment objects filtered by the id_attachment column
 *
 * @package    propel.generator.prestashop.om
 */
abstract class Oops_Db_Propel_ProductAttachmentQuery extends ModelCriteria
{
	
	/**
	 * Initializes internal state of Oops_Db_Propel_ProductAttachmentQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'prestashop', $modelName = 'Oops_Db_ProductAttachment', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new Oops_Db_ProductAttachmentQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    Oops_Db_ProductAttachmentQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof Oops_Db_ProductAttachmentQuery) {
			return $criteria;
		}
		$query = new Oops_Db_ProductAttachmentQuery();
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
	 * @param     array[$id_product, $id_attachment] $key Primary key to use for the query
	 * @param     PropelPDO $con an optional connection object
	 *
	 * @return    Oops_Db_ProductAttachment|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ($key === null) {
			return null;
		}
		if ((null !== ($obj = Oops_Db_ProductAttachmentPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
			// the object is alredy in the instance pool
			return $obj;
		}
		if ($con === null) {
			$con = Propel::getConnection(Oops_Db_ProductAttachmentPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
	 * @return    Oops_Db_ProductAttachment A model object, or null if the key is not found
	 */
	protected function findPkSimple($key, $con)
	{
		$sql = 'SELECT `ID_PRODUCT`, `ID_ATTACHMENT` FROM `' . _DB_PREFIX_ . 'product_attachment` WHERE `ID_PRODUCT` = :p0 AND `ID_ATTACHMENT` = :p1';
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
			$obj = new Oops_Db_ProductAttachment();
			$obj->hydrate($row);
			Oops_Db_ProductAttachmentPeer::addInstanceToPool($obj, serialize(array((string) $row[0], (string) $row[1])));
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
	 * @return    Oops_Db_ProductAttachment|array|mixed the result, formatted by the current formatter
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
	 * @return    Oops_Db_ProductAttachmentQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		$this->addUsingAlias(Oops_Db_ProductAttachmentPeer::ID_PRODUCT, $key[0], Criteria::EQUAL);
		$this->addUsingAlias(Oops_Db_ProductAttachmentPeer::ID_ATTACHMENT, $key[1], Criteria::EQUAL);

		return $this;
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    Oops_Db_ProductAttachmentQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		if (empty($keys)) {
			return $this->add(null, '1<>1', Criteria::CUSTOM);
		}
		foreach ($keys as $key) {
			$cton0 = $this->getNewCriterion(Oops_Db_ProductAttachmentPeer::ID_PRODUCT, $key[0], Criteria::EQUAL);
			$cton1 = $this->getNewCriterion(Oops_Db_ProductAttachmentPeer::ID_ATTACHMENT, $key[1], Criteria::EQUAL);
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
	 * @see       filterByProduct()
	 *
	 * @param     mixed $idProduct The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Db_ProductAttachmentQuery The current query, for fluid interface
	 */
	public function filterByIdProduct($idProduct = null, $comparison = null)
	{
		if (is_array($idProduct) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(Oops_Db_ProductAttachmentPeer::ID_PRODUCT, $idProduct, $comparison);
	}

	/**
	 * Filter the query on the id_attachment column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByIdAttachment(1234); // WHERE id_attachment = 1234
	 * $query->filterByIdAttachment(array(12, 34)); // WHERE id_attachment IN (12, 34)
	 * $query->filterByIdAttachment(array('min' => 12)); // WHERE id_attachment > 12
	 * </code>
	 *
	 * @see       filterByAttachment()
	 *
	 * @param     mixed $idAttachment The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Db_ProductAttachmentQuery The current query, for fluid interface
	 */
	public function filterByIdAttachment($idAttachment = null, $comparison = null)
	{
		if (is_array($idAttachment) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(Oops_Db_ProductAttachmentPeer::ID_ATTACHMENT, $idAttachment, $comparison);
	}

	/**
	 * Filter the query by a related Oops_Db_Product object
	 *
	 * @param     Oops_Db_Product|PropelCollection $product The related object(s) to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Db_ProductAttachmentQuery The current query, for fluid interface
	 */
	public function filterByProduct($product, $comparison = null)
	{
		if ($product instanceof Oops_Db_Product) {
			return $this
				->addUsingAlias(Oops_Db_ProductAttachmentPeer::ID_PRODUCT, $product->getIdProduct(), $comparison);
		} elseif ($product instanceof PropelCollection) {
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
			return $this
				->addUsingAlias(Oops_Db_ProductAttachmentPeer::ID_PRODUCT, $product->toKeyValue('PrimaryKey', 'IdProduct'), $comparison);
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
	 * @return    Oops_Db_ProductAttachmentQuery The current query, for fluid interface
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
	 * Filter the query by a related Oops_Db_Attachment object
	 *
	 * @param     Oops_Db_Attachment|PropelCollection $attachment The related object(s) to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Db_ProductAttachmentQuery The current query, for fluid interface
	 */
	public function filterByAttachment($attachment, $comparison = null)
	{
		if ($attachment instanceof Oops_Db_Attachment) {
			return $this
				->addUsingAlias(Oops_Db_ProductAttachmentPeer::ID_ATTACHMENT, $attachment->getIdAttachment(), $comparison);
		} elseif ($attachment instanceof PropelCollection) {
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
			return $this
				->addUsingAlias(Oops_Db_ProductAttachmentPeer::ID_ATTACHMENT, $attachment->toKeyValue('PrimaryKey', 'IdAttachment'), $comparison);
		} else {
			throw new PropelException('filterByAttachment() only accepts arguments of type Oops_Db_Attachment or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the Attachment relation
	 *
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    Oops_Db_ProductAttachmentQuery The current query, for fluid interface
	 */
	public function joinAttachment($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('Attachment');

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
			$this->addJoinObject($join, 'Attachment');
		}

		return $this;
	}

	/**
	 * Use the Attachment relation Attachment object
	 *
	 * @see       useQuery()
	 *
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    Oops_Db_AttachmentQuery A secondary query class using the current class as primary query
	 */
	public function useAttachmentQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinAttachment($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'Attachment', 'Oops_Db_AttachmentQuery');
	}

	/**
	 * Exclude object from result
	 *
	 * @param     Oops_Db_ProductAttachment $productAttachment Object to remove from the list of results
	 *
	 * @return    Oops_Db_ProductAttachmentQuery The current query, for fluid interface
	 */
	public function prune($productAttachment = null)
	{
		if ($productAttachment) {
			$this->addCond('pruneCond0', $this->getAliasedColName(Oops_Db_ProductAttachmentPeer::ID_PRODUCT), $productAttachment->getIdProduct(), Criteria::NOT_EQUAL);
			$this->addCond('pruneCond1', $this->getAliasedColName(Oops_Db_ProductAttachmentPeer::ID_ATTACHMENT), $productAttachment->getIdAttachment(), Criteria::NOT_EQUAL);
			$this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
		}

		return $this;
	}

} // Oops_Db_Propel_ProductAttachmentQuery