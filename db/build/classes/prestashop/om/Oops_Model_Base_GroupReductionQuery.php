<?php


/**
 * Base class that represents a query for the '' . _DB_PREFIX_ . 'djland_group_reduction' table.
 *
 * 
 *
 * @method     Oops_Model_GroupReductionQuery orderByIdGroupReduction($order = Criteria::ASC) Order by the id_group_reduction column
 * @method     Oops_Model_GroupReductionQuery orderByIdGroup($order = Criteria::ASC) Order by the id_group column
 * @method     Oops_Model_GroupReductionQuery orderByIdCategory($order = Criteria::ASC) Order by the id_category column
 * @method     Oops_Model_GroupReductionQuery orderByReduction($order = Criteria::ASC) Order by the reduction column
 *
 * @method     Oops_Model_GroupReductionQuery groupByIdGroupReduction() Group by the id_group_reduction column
 * @method     Oops_Model_GroupReductionQuery groupByIdGroup() Group by the id_group column
 * @method     Oops_Model_GroupReductionQuery groupByIdCategory() Group by the id_category column
 * @method     Oops_Model_GroupReductionQuery groupByReduction() Group by the reduction column
 *
 * @method     Oops_Model_GroupReductionQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     Oops_Model_GroupReductionQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     Oops_Model_GroupReductionQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     Oops_Model_GroupReduction findOne(PropelPDO $con = null) Return the first Oops_Model_GroupReduction matching the query
 * @method     Oops_Model_GroupReduction findOneOrCreate(PropelPDO $con = null) Return the first Oops_Model_GroupReduction matching the query, or a new Oops_Model_GroupReduction object populated from the query conditions when no match is found
 *
 * @method     Oops_Model_GroupReduction findOneByIdGroupReduction(int $id_group_reduction) Return the first Oops_Model_GroupReduction filtered by the id_group_reduction column
 * @method     Oops_Model_GroupReduction findOneByIdGroup(int $id_group) Return the first Oops_Model_GroupReduction filtered by the id_group column
 * @method     Oops_Model_GroupReduction findOneByIdCategory(int $id_category) Return the first Oops_Model_GroupReduction filtered by the id_category column
 * @method     Oops_Model_GroupReduction findOneByReduction(string $reduction) Return the first Oops_Model_GroupReduction filtered by the reduction column
 *
 * @method     array findByIdGroupReduction(int $id_group_reduction) Return Oops_Model_GroupReduction objects filtered by the id_group_reduction column
 * @method     array findByIdGroup(int $id_group) Return Oops_Model_GroupReduction objects filtered by the id_group column
 * @method     array findByIdCategory(int $id_category) Return Oops_Model_GroupReduction objects filtered by the id_category column
 * @method     array findByReduction(string $reduction) Return Oops_Model_GroupReduction objects filtered by the reduction column
 *
 * @package    propel.generator.prestashop.om
 */
abstract class Oops_Model_Base_GroupReductionQuery extends ModelCriteria
{
	
	/**
	 * Initializes internal state of Oops_Model_Base_GroupReductionQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'prestashop', $modelName = 'Oops_Model_GroupReduction', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new Oops_Model_GroupReductionQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    Oops_Model_GroupReductionQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof Oops_Model_GroupReductionQuery) {
			return $criteria;
		}
		$query = new Oops_Model_GroupReductionQuery();
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
	 * @return    Oops_Model_GroupReduction|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ($key === null) {
			return null;
		}
		if ((null !== ($obj = Oops_Model_GroupReductionPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
			// the object is alredy in the instance pool
			return $obj;
		}
		if ($con === null) {
			$con = Propel::getConnection(Oops_Model_GroupReductionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
	 * @return    Oops_Model_GroupReduction A model object, or null if the key is not found
	 */
	protected function findPkSimple($key, $con)
	{
		$sql = 'SELECT `ID_GROUP_REDUCTION`, `ID_GROUP`, `ID_CATEGORY`, `REDUCTION` FROM `' . _DB_PREFIX_ . 'djland_group_reduction` WHERE `ID_GROUP_REDUCTION` = :p0';
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
			$obj = new Oops_Model_GroupReduction();
			$obj->hydrate($row);
			Oops_Model_GroupReductionPeer::addInstanceToPool($obj, (string) $row[0]);
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
	 * @return    Oops_Model_GroupReduction|array|mixed the result, formatted by the current formatter
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
	 * @return    Oops_Model_GroupReductionQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(Oops_Model_GroupReductionPeer::ID_GROUP_REDUCTION, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    Oops_Model_GroupReductionQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(Oops_Model_GroupReductionPeer::ID_GROUP_REDUCTION, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id_group_reduction column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByIdGroupReduction(1234); // WHERE id_group_reduction = 1234
	 * $query->filterByIdGroupReduction(array(12, 34)); // WHERE id_group_reduction IN (12, 34)
	 * $query->filterByIdGroupReduction(array('min' => 12)); // WHERE id_group_reduction > 12
	 * </code>
	 *
	 * @param     mixed $idGroupReduction The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_GroupReductionQuery The current query, for fluid interface
	 */
	public function filterByIdGroupReduction($idGroupReduction = null, $comparison = null)
	{
		if (is_array($idGroupReduction)) {
			$useMinMax = false;
			if (isset($idGroupReduction['min'])) {
				$this->addUsingAlias(Oops_Model_GroupReductionPeer::ID_GROUP_REDUCTION, $idGroupReduction['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($idGroupReduction['max'])) {
				$this->addUsingAlias(Oops_Model_GroupReductionPeer::ID_GROUP_REDUCTION, $idGroupReduction['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_GroupReductionPeer::ID_GROUP_REDUCTION, $idGroupReduction, $comparison);
	}

	/**
	 * Filter the query on the id_group column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByIdGroup(1234); // WHERE id_group = 1234
	 * $query->filterByIdGroup(array(12, 34)); // WHERE id_group IN (12, 34)
	 * $query->filterByIdGroup(array('min' => 12)); // WHERE id_group > 12
	 * </code>
	 *
	 * @param     mixed $idGroup The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_GroupReductionQuery The current query, for fluid interface
	 */
	public function filterByIdGroup($idGroup = null, $comparison = null)
	{
		if (is_array($idGroup)) {
			$useMinMax = false;
			if (isset($idGroup['min'])) {
				$this->addUsingAlias(Oops_Model_GroupReductionPeer::ID_GROUP, $idGroup['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($idGroup['max'])) {
				$this->addUsingAlias(Oops_Model_GroupReductionPeer::ID_GROUP, $idGroup['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_GroupReductionPeer::ID_GROUP, $idGroup, $comparison);
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
	 * @param     mixed $idCategory The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_GroupReductionQuery The current query, for fluid interface
	 */
	public function filterByIdCategory($idCategory = null, $comparison = null)
	{
		if (is_array($idCategory)) {
			$useMinMax = false;
			if (isset($idCategory['min'])) {
				$this->addUsingAlias(Oops_Model_GroupReductionPeer::ID_CATEGORY, $idCategory['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($idCategory['max'])) {
				$this->addUsingAlias(Oops_Model_GroupReductionPeer::ID_CATEGORY, $idCategory['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_GroupReductionPeer::ID_CATEGORY, $idCategory, $comparison);
	}

	/**
	 * Filter the query on the reduction column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByReduction(1234); // WHERE reduction = 1234
	 * $query->filterByReduction(array(12, 34)); // WHERE reduction IN (12, 34)
	 * $query->filterByReduction(array('min' => 12)); // WHERE reduction > 12
	 * </code>
	 *
	 * @param     mixed $reduction The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_GroupReductionQuery The current query, for fluid interface
	 */
	public function filterByReduction($reduction = null, $comparison = null)
	{
		if (is_array($reduction)) {
			$useMinMax = false;
			if (isset($reduction['min'])) {
				$this->addUsingAlias(Oops_Model_GroupReductionPeer::REDUCTION, $reduction['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($reduction['max'])) {
				$this->addUsingAlias(Oops_Model_GroupReductionPeer::REDUCTION, $reduction['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_GroupReductionPeer::REDUCTION, $reduction, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     Oops_Model_GroupReduction $groupReduction Object to remove from the list of results
	 *
	 * @return    Oops_Model_GroupReductionQuery The current query, for fluid interface
	 */
	public function prune($groupReduction = null)
	{
		if ($groupReduction) {
			$this->addUsingAlias(Oops_Model_GroupReductionPeer::ID_GROUP_REDUCTION, $groupReduction->getIdGroupReduction(), Criteria::NOT_EQUAL);
		}

		return $this;
	}

} // Oops_Model_Base_GroupReductionQuery