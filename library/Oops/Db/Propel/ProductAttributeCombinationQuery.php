<?php


/**
 * Base class that represents a query for the 'product_attribute_combination' table.
 *
 * 
 *
 * @method     Oops_Db_ProductAttributeCombinationQuery orderByIdAttribute($order = Criteria::ASC) Order by the id_attribute column
 * @method     Oops_Db_ProductAttributeCombinationQuery orderByIdProductAttribute($order = Criteria::ASC) Order by the id_product_attribute column
 *
 * @method     Oops_Db_ProductAttributeCombinationQuery groupByIdAttribute() Group by the id_attribute column
 * @method     Oops_Db_ProductAttributeCombinationQuery groupByIdProductAttribute() Group by the id_product_attribute column
 *
 * @method     Oops_Db_ProductAttributeCombinationQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     Oops_Db_ProductAttributeCombinationQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     Oops_Db_ProductAttributeCombinationQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     Oops_Db_ProductAttributeCombination findOne(PropelPDO $con = null) Return the first Oops_Db_ProductAttributeCombination matching the query
 * @method     Oops_Db_ProductAttributeCombination findOneOrCreate(PropelPDO $con = null) Return the first Oops_Db_ProductAttributeCombination matching the query, or a new Oops_Db_ProductAttributeCombination object populated from the query conditions when no match is found
 *
 * @method     Oops_Db_ProductAttributeCombination findOneByIdAttribute(int $id_attribute) Return the first Oops_Db_ProductAttributeCombination filtered by the id_attribute column
 * @method     Oops_Db_ProductAttributeCombination findOneByIdProductAttribute(int $id_product_attribute) Return the first Oops_Db_ProductAttributeCombination filtered by the id_product_attribute column
 *
 * @method     array findByIdAttribute(int $id_attribute) Return Oops_Db_ProductAttributeCombination objects filtered by the id_attribute column
 * @method     array findByIdProductAttribute(int $id_product_attribute) Return Oops_Db_ProductAttributeCombination objects filtered by the id_product_attribute column
 *
 * @package    propel.generator.prestashop.om
 */
abstract class Oops_Db_Propel_ProductAttributeCombinationQuery extends ModelCriteria
{
	
	/**
	 * Initializes internal state of Oops_Db_Propel_ProductAttributeCombinationQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'prestashop', $modelName = 'Oops_Db_ProductAttributeCombination', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new Oops_Db_ProductAttributeCombinationQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    Oops_Db_ProductAttributeCombinationQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof Oops_Db_ProductAttributeCombinationQuery) {
			return $criteria;
		}
		$query = new Oops_Db_ProductAttributeCombinationQuery();
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
	 * @param     array[$id_attribute, $id_product_attribute] $key Primary key to use for the query
	 * @param     PropelPDO $con an optional connection object
	 *
	 * @return    Oops_Db_ProductAttributeCombination|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ($key === null) {
			return null;
		}
		if ((null !== ($obj = Oops_Db_ProductAttributeCombinationPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
			// the object is alredy in the instance pool
			return $obj;
		}
		if ($con === null) {
			$con = Propel::getConnection(Oops_Db_ProductAttributeCombinationPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
	 * @return    Oops_Db_ProductAttributeCombination A model object, or null if the key is not found
	 */
	protected function findPkSimple($key, $con)
	{
		$sql = 'SELECT `ID_ATTRIBUTE`, `ID_PRODUCT_ATTRIBUTE` FROM `' . _DB_PREFIX_ . 'product_attribute_combination` WHERE `ID_ATTRIBUTE` = :p0 AND `ID_PRODUCT_ATTRIBUTE` = :p1';
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
			$obj = new Oops_Db_ProductAttributeCombination();
			$obj->hydrate($row);
			Oops_Db_ProductAttributeCombinationPeer::addInstanceToPool($obj, serialize(array((string) $row[0], (string) $row[1])));
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
	 * @return    Oops_Db_ProductAttributeCombination|array|mixed the result, formatted by the current formatter
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
	 * @return    Oops_Db_ProductAttributeCombinationQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		$this->addUsingAlias(Oops_Db_ProductAttributeCombinationPeer::ID_ATTRIBUTE, $key[0], Criteria::EQUAL);
		$this->addUsingAlias(Oops_Db_ProductAttributeCombinationPeer::ID_PRODUCT_ATTRIBUTE, $key[1], Criteria::EQUAL);

		return $this;
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    Oops_Db_ProductAttributeCombinationQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		if (empty($keys)) {
			return $this->add(null, '1<>1', Criteria::CUSTOM);
		}
		foreach ($keys as $key) {
			$cton0 = $this->getNewCriterion(Oops_Db_ProductAttributeCombinationPeer::ID_ATTRIBUTE, $key[0], Criteria::EQUAL);
			$cton1 = $this->getNewCriterion(Oops_Db_ProductAttributeCombinationPeer::ID_PRODUCT_ATTRIBUTE, $key[1], Criteria::EQUAL);
			$cton0->addAnd($cton1);
			$this->addOr($cton0);
		}

		return $this;
	}

	/**
	 * Filter the query on the id_attribute column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByIdAttribute(1234); // WHERE id_attribute = 1234
	 * $query->filterByIdAttribute(array(12, 34)); // WHERE id_attribute IN (12, 34)
	 * $query->filterByIdAttribute(array('min' => 12)); // WHERE id_attribute > 12
	 * </code>
	 *
	 * @param     mixed $idAttribute The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Db_ProductAttributeCombinationQuery The current query, for fluid interface
	 */
	public function filterByIdAttribute($idAttribute = null, $comparison = null)
	{
		if (is_array($idAttribute) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(Oops_Db_ProductAttributeCombinationPeer::ID_ATTRIBUTE, $idAttribute, $comparison);
	}

	/**
	 * Filter the query on the id_product_attribute column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByIdProductAttribute(1234); // WHERE id_product_attribute = 1234
	 * $query->filterByIdProductAttribute(array(12, 34)); // WHERE id_product_attribute IN (12, 34)
	 * $query->filterByIdProductAttribute(array('min' => 12)); // WHERE id_product_attribute > 12
	 * </code>
	 *
	 * @param     mixed $idProductAttribute The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Db_ProductAttributeCombinationQuery The current query, for fluid interface
	 */
	public function filterByIdProductAttribute($idProductAttribute = null, $comparison = null)
	{
		if (is_array($idProductAttribute) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(Oops_Db_ProductAttributeCombinationPeer::ID_PRODUCT_ATTRIBUTE, $idProductAttribute, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     Oops_Db_ProductAttributeCombination $productAttributeCombination Object to remove from the list of results
	 *
	 * @return    Oops_Db_ProductAttributeCombinationQuery The current query, for fluid interface
	 */
	public function prune($productAttributeCombination = null)
	{
		if ($productAttributeCombination) {
			$this->addCond('pruneCond0', $this->getAliasedColName(Oops_Db_ProductAttributeCombinationPeer::ID_ATTRIBUTE), $productAttributeCombination->getIdAttribute(), Criteria::NOT_EQUAL);
			$this->addCond('pruneCond1', $this->getAliasedColName(Oops_Db_ProductAttributeCombinationPeer::ID_PRODUCT_ATTRIBUTE), $productAttributeCombination->getIdProductAttribute(), Criteria::NOT_EQUAL);
			$this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
		}

		return $this;
	}

} // Oops_Db_Propel_ProductAttributeCombinationQuery