<?php


/**
 * Base class that represents a query for the 'djland_attribute' table.
 *
 * 
 *
 * @method     Oops_Model_AttributeQuery orderByIdAttribute($order = Criteria::ASC) Order by the id_attribute column
 * @method     Oops_Model_AttributeQuery orderByIdAttributeGroup($order = Criteria::ASC) Order by the id_attribute_group column
 * @method     Oops_Model_AttributeQuery orderByColor($order = Criteria::ASC) Order by the color column
 *
 * @method     Oops_Model_AttributeQuery groupByIdAttribute() Group by the id_attribute column
 * @method     Oops_Model_AttributeQuery groupByIdAttributeGroup() Group by the id_attribute_group column
 * @method     Oops_Model_AttributeQuery groupByColor() Group by the color column
 *
 * @method     Oops_Model_AttributeQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     Oops_Model_AttributeQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     Oops_Model_AttributeQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     Oops_Model_Attribute findOne(PropelPDO $con = null) Return the first Oops_Model_Attribute matching the query
 * @method     Oops_Model_Attribute findOneOrCreate(PropelPDO $con = null) Return the first Oops_Model_Attribute matching the query, or a new Oops_Model_Attribute object populated from the query conditions when no match is found
 *
 * @method     Oops_Model_Attribute findOneByIdAttribute(int $id_attribute) Return the first Oops_Model_Attribute filtered by the id_attribute column
 * @method     Oops_Model_Attribute findOneByIdAttributeGroup(int $id_attribute_group) Return the first Oops_Model_Attribute filtered by the id_attribute_group column
 * @method     Oops_Model_Attribute findOneByColor(string $color) Return the first Oops_Model_Attribute filtered by the color column
 *
 * @method     array findByIdAttribute(int $id_attribute) Return Oops_Model_Attribute objects filtered by the id_attribute column
 * @method     array findByIdAttributeGroup(int $id_attribute_group) Return Oops_Model_Attribute objects filtered by the id_attribute_group column
 * @method     array findByColor(string $color) Return Oops_Model_Attribute objects filtered by the color column
 *
 * @package    propel.generator.prestashop.om
 */
abstract class Oops_Model_Base_AttributeQuery extends ModelCriteria
{
	
	/**
	 * Initializes internal state of Oops_Model_Base_AttributeQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'prestashop', $modelName = 'Oops_Model_Attribute', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new Oops_Model_AttributeQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    Oops_Model_AttributeQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof Oops_Model_AttributeQuery) {
			return $criteria;
		}
		$query = new Oops_Model_AttributeQuery();
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
	 * @return    Oops_Model_Attribute|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ($key === null) {
			return null;
		}
		if ((null !== ($obj = Oops_Model_AttributePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
			// the object is alredy in the instance pool
			return $obj;
		}
		if ($con === null) {
			$con = Propel::getConnection(Oops_Model_AttributePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
	 * @return    Oops_Model_Attribute A model object, or null if the key is not found
	 */
	protected function findPkSimple($key, $con)
	{
		$sql = 'SELECT `ID_ATTRIBUTE`, `ID_ATTRIBUTE_GROUP`, `COLOR` FROM `djland_attribute` WHERE `ID_ATTRIBUTE` = :p0';
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
			$obj = new Oops_Model_Attribute();
			$obj->hydrate($row);
			Oops_Model_AttributePeer::addInstanceToPool($obj, (string) $row[0]);
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
	 * @return    Oops_Model_Attribute|array|mixed the result, formatted by the current formatter
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
	 * @return    Oops_Model_AttributeQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(Oops_Model_AttributePeer::ID_ATTRIBUTE, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    Oops_Model_AttributeQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(Oops_Model_AttributePeer::ID_ATTRIBUTE, $keys, Criteria::IN);
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
	 * @return    Oops_Model_AttributeQuery The current query, for fluid interface
	 */
	public function filterByIdAttribute($idAttribute = null, $comparison = null)
	{
		if (is_array($idAttribute) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(Oops_Model_AttributePeer::ID_ATTRIBUTE, $idAttribute, $comparison);
	}

	/**
	 * Filter the query on the id_attribute_group column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByIdAttributeGroup(1234); // WHERE id_attribute_group = 1234
	 * $query->filterByIdAttributeGroup(array(12, 34)); // WHERE id_attribute_group IN (12, 34)
	 * $query->filterByIdAttributeGroup(array('min' => 12)); // WHERE id_attribute_group > 12
	 * </code>
	 *
	 * @param     mixed $idAttributeGroup The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_AttributeQuery The current query, for fluid interface
	 */
	public function filterByIdAttributeGroup($idAttributeGroup = null, $comparison = null)
	{
		if (is_array($idAttributeGroup)) {
			$useMinMax = false;
			if (isset($idAttributeGroup['min'])) {
				$this->addUsingAlias(Oops_Model_AttributePeer::ID_ATTRIBUTE_GROUP, $idAttributeGroup['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($idAttributeGroup['max'])) {
				$this->addUsingAlias(Oops_Model_AttributePeer::ID_ATTRIBUTE_GROUP, $idAttributeGroup['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_AttributePeer::ID_ATTRIBUTE_GROUP, $idAttributeGroup, $comparison);
	}

	/**
	 * Filter the query on the color column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByColor('fooValue');   // WHERE color = 'fooValue'
	 * $query->filterByColor('%fooValue%'); // WHERE color LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $color The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_AttributeQuery The current query, for fluid interface
	 */
	public function filterByColor($color = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($color)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $color)) {
				$color = str_replace('*', '%', $color);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(Oops_Model_AttributePeer::COLOR, $color, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     Oops_Model_Attribute $attribute Object to remove from the list of results
	 *
	 * @return    Oops_Model_AttributeQuery The current query, for fluid interface
	 */
	public function prune($attribute = null)
	{
		if ($attribute) {
			$this->addUsingAlias(Oops_Model_AttributePeer::ID_ATTRIBUTE, $attribute->getIdAttribute(), Criteria::NOT_EQUAL);
		}

		return $this;
	}

} // Oops_Model_Base_AttributeQuery