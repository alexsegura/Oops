<?php


/**
 * Base class that represents a query for the 'djland_attribute_impact' table.
 *
 * 
 *
 * @method     Oops_Model_AttributeImpactQuery orderByIdAttributeImpact($order = Criteria::ASC) Order by the id_attribute_impact column
 * @method     Oops_Model_AttributeImpactQuery orderByIdProduct($order = Criteria::ASC) Order by the id_product column
 * @method     Oops_Model_AttributeImpactQuery orderByIdAttribute($order = Criteria::ASC) Order by the id_attribute column
 * @method     Oops_Model_AttributeImpactQuery orderByWeight($order = Criteria::ASC) Order by the weight column
 * @method     Oops_Model_AttributeImpactQuery orderByPrice($order = Criteria::ASC) Order by the price column
 *
 * @method     Oops_Model_AttributeImpactQuery groupByIdAttributeImpact() Group by the id_attribute_impact column
 * @method     Oops_Model_AttributeImpactQuery groupByIdProduct() Group by the id_product column
 * @method     Oops_Model_AttributeImpactQuery groupByIdAttribute() Group by the id_attribute column
 * @method     Oops_Model_AttributeImpactQuery groupByWeight() Group by the weight column
 * @method     Oops_Model_AttributeImpactQuery groupByPrice() Group by the price column
 *
 * @method     Oops_Model_AttributeImpactQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     Oops_Model_AttributeImpactQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     Oops_Model_AttributeImpactQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     Oops_Model_AttributeImpact findOne(PropelPDO $con = null) Return the first Oops_Model_AttributeImpact matching the query
 * @method     Oops_Model_AttributeImpact findOneOrCreate(PropelPDO $con = null) Return the first Oops_Model_AttributeImpact matching the query, or a new Oops_Model_AttributeImpact object populated from the query conditions when no match is found
 *
 * @method     Oops_Model_AttributeImpact findOneByIdAttributeImpact(int $id_attribute_impact) Return the first Oops_Model_AttributeImpact filtered by the id_attribute_impact column
 * @method     Oops_Model_AttributeImpact findOneByIdProduct(int $id_product) Return the first Oops_Model_AttributeImpact filtered by the id_product column
 * @method     Oops_Model_AttributeImpact findOneByIdAttribute(int $id_attribute) Return the first Oops_Model_AttributeImpact filtered by the id_attribute column
 * @method     Oops_Model_AttributeImpact findOneByWeight(double $weight) Return the first Oops_Model_AttributeImpact filtered by the weight column
 * @method     Oops_Model_AttributeImpact findOneByPrice(string $price) Return the first Oops_Model_AttributeImpact filtered by the price column
 *
 * @method     array findByIdAttributeImpact(int $id_attribute_impact) Return Oops_Model_AttributeImpact objects filtered by the id_attribute_impact column
 * @method     array findByIdProduct(int $id_product) Return Oops_Model_AttributeImpact objects filtered by the id_product column
 * @method     array findByIdAttribute(int $id_attribute) Return Oops_Model_AttributeImpact objects filtered by the id_attribute column
 * @method     array findByWeight(double $weight) Return Oops_Model_AttributeImpact objects filtered by the weight column
 * @method     array findByPrice(string $price) Return Oops_Model_AttributeImpact objects filtered by the price column
 *
 * @package    propel.generator.prestashop.om
 */
abstract class Oops_Model_Base_AttributeImpactQuery extends ModelCriteria
{
	
	/**
	 * Initializes internal state of Oops_Model_Base_AttributeImpactQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'prestashop', $modelName = 'Oops_Model_AttributeImpact', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new Oops_Model_AttributeImpactQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    Oops_Model_AttributeImpactQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof Oops_Model_AttributeImpactQuery) {
			return $criteria;
		}
		$query = new Oops_Model_AttributeImpactQuery();
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
	 * @return    Oops_Model_AttributeImpact|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ($key === null) {
			return null;
		}
		if ((null !== ($obj = Oops_Model_AttributeImpactPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
			// the object is alredy in the instance pool
			return $obj;
		}
		if ($con === null) {
			$con = Propel::getConnection(Oops_Model_AttributeImpactPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
	 * @return    Oops_Model_AttributeImpact A model object, or null if the key is not found
	 */
	protected function findPkSimple($key, $con)
	{
		$sql = 'SELECT `ID_ATTRIBUTE_IMPACT`, `ID_PRODUCT`, `ID_ATTRIBUTE`, `WEIGHT`, `PRICE` FROM `djland_attribute_impact` WHERE `ID_ATTRIBUTE_IMPACT` = :p0';
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
			$obj = new Oops_Model_AttributeImpact();
			$obj->hydrate($row);
			Oops_Model_AttributeImpactPeer::addInstanceToPool($obj, (string) $row[0]);
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
	 * @return    Oops_Model_AttributeImpact|array|mixed the result, formatted by the current formatter
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
	 * @return    Oops_Model_AttributeImpactQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(Oops_Model_AttributeImpactPeer::ID_ATTRIBUTE_IMPACT, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    Oops_Model_AttributeImpactQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(Oops_Model_AttributeImpactPeer::ID_ATTRIBUTE_IMPACT, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id_attribute_impact column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByIdAttributeImpact(1234); // WHERE id_attribute_impact = 1234
	 * $query->filterByIdAttributeImpact(array(12, 34)); // WHERE id_attribute_impact IN (12, 34)
	 * $query->filterByIdAttributeImpact(array('min' => 12)); // WHERE id_attribute_impact > 12
	 * </code>
	 *
	 * @param     mixed $idAttributeImpact The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_AttributeImpactQuery The current query, for fluid interface
	 */
	public function filterByIdAttributeImpact($idAttributeImpact = null, $comparison = null)
	{
		if (is_array($idAttributeImpact) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(Oops_Model_AttributeImpactPeer::ID_ATTRIBUTE_IMPACT, $idAttributeImpact, $comparison);
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
	 * @return    Oops_Model_AttributeImpactQuery The current query, for fluid interface
	 */
	public function filterByIdProduct($idProduct = null, $comparison = null)
	{
		if (is_array($idProduct)) {
			$useMinMax = false;
			if (isset($idProduct['min'])) {
				$this->addUsingAlias(Oops_Model_AttributeImpactPeer::ID_PRODUCT, $idProduct['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($idProduct['max'])) {
				$this->addUsingAlias(Oops_Model_AttributeImpactPeer::ID_PRODUCT, $idProduct['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_AttributeImpactPeer::ID_PRODUCT, $idProduct, $comparison);
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
	 * @return    Oops_Model_AttributeImpactQuery The current query, for fluid interface
	 */
	public function filterByIdAttribute($idAttribute = null, $comparison = null)
	{
		if (is_array($idAttribute)) {
			$useMinMax = false;
			if (isset($idAttribute['min'])) {
				$this->addUsingAlias(Oops_Model_AttributeImpactPeer::ID_ATTRIBUTE, $idAttribute['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($idAttribute['max'])) {
				$this->addUsingAlias(Oops_Model_AttributeImpactPeer::ID_ATTRIBUTE, $idAttribute['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_AttributeImpactPeer::ID_ATTRIBUTE, $idAttribute, $comparison);
	}

	/**
	 * Filter the query on the weight column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByWeight(1234); // WHERE weight = 1234
	 * $query->filterByWeight(array(12, 34)); // WHERE weight IN (12, 34)
	 * $query->filterByWeight(array('min' => 12)); // WHERE weight > 12
	 * </code>
	 *
	 * @param     mixed $weight The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_AttributeImpactQuery The current query, for fluid interface
	 */
	public function filterByWeight($weight = null, $comparison = null)
	{
		if (is_array($weight)) {
			$useMinMax = false;
			if (isset($weight['min'])) {
				$this->addUsingAlias(Oops_Model_AttributeImpactPeer::WEIGHT, $weight['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($weight['max'])) {
				$this->addUsingAlias(Oops_Model_AttributeImpactPeer::WEIGHT, $weight['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_AttributeImpactPeer::WEIGHT, $weight, $comparison);
	}

	/**
	 * Filter the query on the price column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByPrice(1234); // WHERE price = 1234
	 * $query->filterByPrice(array(12, 34)); // WHERE price IN (12, 34)
	 * $query->filterByPrice(array('min' => 12)); // WHERE price > 12
	 * </code>
	 *
	 * @param     mixed $price The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_AttributeImpactQuery The current query, for fluid interface
	 */
	public function filterByPrice($price = null, $comparison = null)
	{
		if (is_array($price)) {
			$useMinMax = false;
			if (isset($price['min'])) {
				$this->addUsingAlias(Oops_Model_AttributeImpactPeer::PRICE, $price['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($price['max'])) {
				$this->addUsingAlias(Oops_Model_AttributeImpactPeer::PRICE, $price['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_AttributeImpactPeer::PRICE, $price, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     Oops_Model_AttributeImpact $attributeImpact Object to remove from the list of results
	 *
	 * @return    Oops_Model_AttributeImpactQuery The current query, for fluid interface
	 */
	public function prune($attributeImpact = null)
	{
		if ($attributeImpact) {
			$this->addUsingAlias(Oops_Model_AttributeImpactPeer::ID_ATTRIBUTE_IMPACT, $attributeImpact->getIdAttributeImpact(), Criteria::NOT_EQUAL);
		}

		return $this;
	}

} // Oops_Model_Base_AttributeImpactQuery