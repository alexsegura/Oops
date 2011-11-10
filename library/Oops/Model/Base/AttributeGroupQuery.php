<?php


/**
 * Base class that represents a query for the 'attribute_group' table.
 *
 * 
 *
 * @method     Oops_Model_AttributeGroupQuery orderByIdAttributeGroup($order = Criteria::ASC) Order by the id_attribute_group column
 * @method     Oops_Model_AttributeGroupQuery orderByIsColorGroup($order = Criteria::ASC) Order by the is_color_group column
 *
 * @method     Oops_Model_AttributeGroupQuery groupByIdAttributeGroup() Group by the id_attribute_group column
 * @method     Oops_Model_AttributeGroupQuery groupByIsColorGroup() Group by the is_color_group column
 *
 * @method     Oops_Model_AttributeGroupQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     Oops_Model_AttributeGroupQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     Oops_Model_AttributeGroupQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     Oops_Model_AttributeGroup findOne(PropelPDO $con = null) Return the first Oops_Model_AttributeGroup matching the query
 * @method     Oops_Model_AttributeGroup findOneOrCreate(PropelPDO $con = null) Return the first Oops_Model_AttributeGroup matching the query, or a new Oops_Model_AttributeGroup object populated from the query conditions when no match is found
 *
 * @method     Oops_Model_AttributeGroup findOneByIdAttributeGroup(int $id_attribute_group) Return the first Oops_Model_AttributeGroup filtered by the id_attribute_group column
 * @method     Oops_Model_AttributeGroup findOneByIsColorGroup(boolean $is_color_group) Return the first Oops_Model_AttributeGroup filtered by the is_color_group column
 *
 * @method     array findByIdAttributeGroup(int $id_attribute_group) Return Oops_Model_AttributeGroup objects filtered by the id_attribute_group column
 * @method     array findByIsColorGroup(boolean $is_color_group) Return Oops_Model_AttributeGroup objects filtered by the is_color_group column
 *
 * @package    propel.generator.prestashop.om
 */
abstract class Oops_Model_Base_AttributeGroupQuery extends ModelCriteria
{
	
	/**
	 * Initializes internal state of Oops_Model_Base_AttributeGroupQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'prestashop', $modelName = 'Oops_Model_AttributeGroup', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new Oops_Model_AttributeGroupQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    Oops_Model_AttributeGroupQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof Oops_Model_AttributeGroupQuery) {
			return $criteria;
		}
		$query = new Oops_Model_AttributeGroupQuery();
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
	 * @return    Oops_Model_AttributeGroup|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ($key === null) {
			return null;
		}
		if ((null !== ($obj = Oops_Model_AttributeGroupPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
			// the object is alredy in the instance pool
			return $obj;
		}
		if ($con === null) {
			$con = Propel::getConnection(Oops_Model_AttributeGroupPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
	 * @return    Oops_Model_AttributeGroup A model object, or null if the key is not found
	 */
	protected function findPkSimple($key, $con)
	{
		$sql = 'SELECT `ID_ATTRIBUTE_GROUP`, `IS_COLOR_GROUP` FROM `' . _DB_PREFIX_ . 'attribute_group` WHERE `ID_ATTRIBUTE_GROUP` = :p0';
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
			$obj = new Oops_Model_AttributeGroup();
			$obj->hydrate($row);
			Oops_Model_AttributeGroupPeer::addInstanceToPool($obj, (string) $row[0]);
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
	 * @return    Oops_Model_AttributeGroup|array|mixed the result, formatted by the current formatter
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
	 * @return    Oops_Model_AttributeGroupQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(Oops_Model_AttributeGroupPeer::ID_ATTRIBUTE_GROUP, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    Oops_Model_AttributeGroupQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(Oops_Model_AttributeGroupPeer::ID_ATTRIBUTE_GROUP, $keys, Criteria::IN);
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
	 * @return    Oops_Model_AttributeGroupQuery The current query, for fluid interface
	 */
	public function filterByIdAttributeGroup($idAttributeGroup = null, $comparison = null)
	{
		if (is_array($idAttributeGroup) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(Oops_Model_AttributeGroupPeer::ID_ATTRIBUTE_GROUP, $idAttributeGroup, $comparison);
	}

	/**
	 * Filter the query on the is_color_group column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByIsColorGroup(true); // WHERE is_color_group = true
	 * $query->filterByIsColorGroup('yes'); // WHERE is_color_group = true
	 * </code>
	 *
	 * @param     boolean|string $isColorGroup The value to use as filter.
	 *              Non-boolean arguments are converted using the following rules:
	 *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_AttributeGroupQuery The current query, for fluid interface
	 */
	public function filterByIsColorGroup($isColorGroup = null, $comparison = null)
	{
		if (is_string($isColorGroup)) {
			$is_color_group = in_array(strtolower($isColorGroup), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(Oops_Model_AttributeGroupPeer::IS_COLOR_GROUP, $isColorGroup, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     Oops_Model_AttributeGroup $attributeGroup Object to remove from the list of results
	 *
	 * @return    Oops_Model_AttributeGroupQuery The current query, for fluid interface
	 */
	public function prune($attributeGroup = null)
	{
		if ($attributeGroup) {
			$this->addUsingAlias(Oops_Model_AttributeGroupPeer::ID_ATTRIBUTE_GROUP, $attributeGroup->getIdAttributeGroup(), Criteria::NOT_EQUAL);
		}

		return $this;
	}

} // Oops_Model_Base_AttributeGroupQuery