<?php


/**
 * Base class that represents a query for the '' . _DB_PREFIX_ . 'djland_product_tag' table.
 *
 * 
 *
 * @method     Oops_Model_ProductTagQuery orderByIdProduct($order = Criteria::ASC) Order by the id_product column
 * @method     Oops_Model_ProductTagQuery orderByIdTag($order = Criteria::ASC) Order by the id_tag column
 *
 * @method     Oops_Model_ProductTagQuery groupByIdProduct() Group by the id_product column
 * @method     Oops_Model_ProductTagQuery groupByIdTag() Group by the id_tag column
 *
 * @method     Oops_Model_ProductTagQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     Oops_Model_ProductTagQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     Oops_Model_ProductTagQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     Oops_Model_ProductTag findOne(PropelPDO $con = null) Return the first Oops_Model_ProductTag matching the query
 * @method     Oops_Model_ProductTag findOneOrCreate(PropelPDO $con = null) Return the first Oops_Model_ProductTag matching the query, or a new Oops_Model_ProductTag object populated from the query conditions when no match is found
 *
 * @method     Oops_Model_ProductTag findOneByIdProduct(int $id_product) Return the first Oops_Model_ProductTag filtered by the id_product column
 * @method     Oops_Model_ProductTag findOneByIdTag(int $id_tag) Return the first Oops_Model_ProductTag filtered by the id_tag column
 *
 * @method     array findByIdProduct(int $id_product) Return Oops_Model_ProductTag objects filtered by the id_product column
 * @method     array findByIdTag(int $id_tag) Return Oops_Model_ProductTag objects filtered by the id_tag column
 *
 * @package    propel.generator.prestashop.om
 */
abstract class Oops_Model_Base_ProductTagQuery extends ModelCriteria
{
	
	/**
	 * Initializes internal state of Oops_Model_Base_ProductTagQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'prestashop', $modelName = 'Oops_Model_ProductTag', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new Oops_Model_ProductTagQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    Oops_Model_ProductTagQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof Oops_Model_ProductTagQuery) {
			return $criteria;
		}
		$query = new Oops_Model_ProductTagQuery();
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
	 * @param     array[$id_product, $id_tag] $key Primary key to use for the query
	 * @param     PropelPDO $con an optional connection object
	 *
	 * @return    Oops_Model_ProductTag|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ($key === null) {
			return null;
		}
		if ((null !== ($obj = Oops_Model_ProductTagPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
			// the object is alredy in the instance pool
			return $obj;
		}
		if ($con === null) {
			$con = Propel::getConnection(Oops_Model_ProductTagPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
	 * @return    Oops_Model_ProductTag A model object, or null if the key is not found
	 */
	protected function findPkSimple($key, $con)
	{
		$sql = 'SELECT `ID_PRODUCT`, `ID_TAG` FROM `' . _DB_PREFIX_ . 'djland_product_tag` WHERE `ID_PRODUCT` = :p0 AND `ID_TAG` = :p1';
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
			$obj = new Oops_Model_ProductTag();
			$obj->hydrate($row);
			Oops_Model_ProductTagPeer::addInstanceToPool($obj, serialize(array((string) $row[0], (string) $row[1])));
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
	 * @return    Oops_Model_ProductTag|array|mixed the result, formatted by the current formatter
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
	 * @return    Oops_Model_ProductTagQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		$this->addUsingAlias(Oops_Model_ProductTagPeer::ID_PRODUCT, $key[0], Criteria::EQUAL);
		$this->addUsingAlias(Oops_Model_ProductTagPeer::ID_TAG, $key[1], Criteria::EQUAL);

		return $this;
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    Oops_Model_ProductTagQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		if (empty($keys)) {
			return $this->add(null, '1<>1', Criteria::CUSTOM);
		}
		foreach ($keys as $key) {
			$cton0 = $this->getNewCriterion(Oops_Model_ProductTagPeer::ID_PRODUCT, $key[0], Criteria::EQUAL);
			$cton1 = $this->getNewCriterion(Oops_Model_ProductTagPeer::ID_TAG, $key[1], Criteria::EQUAL);
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
	 * @return    Oops_Model_ProductTagQuery The current query, for fluid interface
	 */
	public function filterByIdProduct($idProduct = null, $comparison = null)
	{
		if (is_array($idProduct) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(Oops_Model_ProductTagPeer::ID_PRODUCT, $idProduct, $comparison);
	}

	/**
	 * Filter the query on the id_tag column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByIdTag(1234); // WHERE id_tag = 1234
	 * $query->filterByIdTag(array(12, 34)); // WHERE id_tag IN (12, 34)
	 * $query->filterByIdTag(array('min' => 12)); // WHERE id_tag > 12
	 * </code>
	 *
	 * @param     mixed $idTag The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_ProductTagQuery The current query, for fluid interface
	 */
	public function filterByIdTag($idTag = null, $comparison = null)
	{
		if (is_array($idTag) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(Oops_Model_ProductTagPeer::ID_TAG, $idTag, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     Oops_Model_ProductTag $productTag Object to remove from the list of results
	 *
	 * @return    Oops_Model_ProductTagQuery The current query, for fluid interface
	 */
	public function prune($productTag = null)
	{
		if ($productTag) {
			$this->addCond('pruneCond0', $this->getAliasedColName(Oops_Model_ProductTagPeer::ID_PRODUCT), $productTag->getIdProduct(), Criteria::NOT_EQUAL);
			$this->addCond('pruneCond1', $this->getAliasedColName(Oops_Model_ProductTagPeer::ID_TAG), $productTag->getIdTag(), Criteria::NOT_EQUAL);
			$this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
		}

		return $this;
	}

} // Oops_Model_Base_ProductTagQuery