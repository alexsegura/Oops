<?php


/**
 * Base class that represents a query for the 'djland_group' table.
 *
 * 
 *
 * @method     Oops_Model_GroupQuery orderByIdGroup($order = Criteria::ASC) Order by the id_group column
 * @method     Oops_Model_GroupQuery orderByReduction($order = Criteria::ASC) Order by the reduction column
 * @method     Oops_Model_GroupQuery orderByPriceDisplayMethod($order = Criteria::ASC) Order by the price_display_method column
 * @method     Oops_Model_GroupQuery orderByDateAdd($order = Criteria::ASC) Order by the date_add column
 * @method     Oops_Model_GroupQuery orderByDateUpd($order = Criteria::ASC) Order by the date_upd column
 *
 * @method     Oops_Model_GroupQuery groupByIdGroup() Group by the id_group column
 * @method     Oops_Model_GroupQuery groupByReduction() Group by the reduction column
 * @method     Oops_Model_GroupQuery groupByPriceDisplayMethod() Group by the price_display_method column
 * @method     Oops_Model_GroupQuery groupByDateAdd() Group by the date_add column
 * @method     Oops_Model_GroupQuery groupByDateUpd() Group by the date_upd column
 *
 * @method     Oops_Model_GroupQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     Oops_Model_GroupQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     Oops_Model_GroupQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     Oops_Model_Group findOne(PropelPDO $con = null) Return the first Oops_Model_Group matching the query
 * @method     Oops_Model_Group findOneOrCreate(PropelPDO $con = null) Return the first Oops_Model_Group matching the query, or a new Oops_Model_Group object populated from the query conditions when no match is found
 *
 * @method     Oops_Model_Group findOneByIdGroup(int $id_group) Return the first Oops_Model_Group filtered by the id_group column
 * @method     Oops_Model_Group findOneByReduction(string $reduction) Return the first Oops_Model_Group filtered by the reduction column
 * @method     Oops_Model_Group findOneByPriceDisplayMethod(int $price_display_method) Return the first Oops_Model_Group filtered by the price_display_method column
 * @method     Oops_Model_Group findOneByDateAdd(string $date_add) Return the first Oops_Model_Group filtered by the date_add column
 * @method     Oops_Model_Group findOneByDateUpd(string $date_upd) Return the first Oops_Model_Group filtered by the date_upd column
 *
 * @method     array findByIdGroup(int $id_group) Return Oops_Model_Group objects filtered by the id_group column
 * @method     array findByReduction(string $reduction) Return Oops_Model_Group objects filtered by the reduction column
 * @method     array findByPriceDisplayMethod(int $price_display_method) Return Oops_Model_Group objects filtered by the price_display_method column
 * @method     array findByDateAdd(string $date_add) Return Oops_Model_Group objects filtered by the date_add column
 * @method     array findByDateUpd(string $date_upd) Return Oops_Model_Group objects filtered by the date_upd column
 *
 * @package    propel.generator.prestashop.om
 */
abstract class Oops_Model_Base_GroupQuery extends ModelCriteria
{
	
	/**
	 * Initializes internal state of Oops_Model_Base_GroupQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'prestashop', $modelName = 'Oops_Model_Group', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new Oops_Model_GroupQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    Oops_Model_GroupQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof Oops_Model_GroupQuery) {
			return $criteria;
		}
		$query = new Oops_Model_GroupQuery();
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
	 * @return    Oops_Model_Group|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ($key === null) {
			return null;
		}
		if ((null !== ($obj = Oops_Model_GroupPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
			// the object is alredy in the instance pool
			return $obj;
		}
		if ($con === null) {
			$con = Propel::getConnection(Oops_Model_GroupPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
	 * @return    Oops_Model_Group A model object, or null if the key is not found
	 */
	protected function findPkSimple($key, $con)
	{
		$sql = 'SELECT `ID_GROUP`, `REDUCTION`, `PRICE_DISPLAY_METHOD`, `DATE_ADD`, `DATE_UPD` FROM `djland_group` WHERE `ID_GROUP` = :p0';
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
			$obj = new Oops_Model_Group();
			$obj->hydrate($row);
			Oops_Model_GroupPeer::addInstanceToPool($obj, (string) $row[0]);
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
	 * @return    Oops_Model_Group|array|mixed the result, formatted by the current formatter
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
	 * @return    Oops_Model_GroupQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(Oops_Model_GroupPeer::ID_GROUP, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    Oops_Model_GroupQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(Oops_Model_GroupPeer::ID_GROUP, $keys, Criteria::IN);
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
	 * @return    Oops_Model_GroupQuery The current query, for fluid interface
	 */
	public function filterByIdGroup($idGroup = null, $comparison = null)
	{
		if (is_array($idGroup) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(Oops_Model_GroupPeer::ID_GROUP, $idGroup, $comparison);
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
	 * @return    Oops_Model_GroupQuery The current query, for fluid interface
	 */
	public function filterByReduction($reduction = null, $comparison = null)
	{
		if (is_array($reduction)) {
			$useMinMax = false;
			if (isset($reduction['min'])) {
				$this->addUsingAlias(Oops_Model_GroupPeer::REDUCTION, $reduction['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($reduction['max'])) {
				$this->addUsingAlias(Oops_Model_GroupPeer::REDUCTION, $reduction['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_GroupPeer::REDUCTION, $reduction, $comparison);
	}

	/**
	 * Filter the query on the price_display_method column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByPriceDisplayMethod(1234); // WHERE price_display_method = 1234
	 * $query->filterByPriceDisplayMethod(array(12, 34)); // WHERE price_display_method IN (12, 34)
	 * $query->filterByPriceDisplayMethod(array('min' => 12)); // WHERE price_display_method > 12
	 * </code>
	 *
	 * @param     mixed $priceDisplayMethod The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_GroupQuery The current query, for fluid interface
	 */
	public function filterByPriceDisplayMethod($priceDisplayMethod = null, $comparison = null)
	{
		if (is_array($priceDisplayMethod)) {
			$useMinMax = false;
			if (isset($priceDisplayMethod['min'])) {
				$this->addUsingAlias(Oops_Model_GroupPeer::PRICE_DISPLAY_METHOD, $priceDisplayMethod['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($priceDisplayMethod['max'])) {
				$this->addUsingAlias(Oops_Model_GroupPeer::PRICE_DISPLAY_METHOD, $priceDisplayMethod['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_GroupPeer::PRICE_DISPLAY_METHOD, $priceDisplayMethod, $comparison);
	}

	/**
	 * Filter the query on the date_add column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByDateAdd('2011-03-14'); // WHERE date_add = '2011-03-14'
	 * $query->filterByDateAdd('now'); // WHERE date_add = '2011-03-14'
	 * $query->filterByDateAdd(array('max' => 'yesterday')); // WHERE date_add > '2011-03-13'
	 * </code>
	 *
	 * @param     mixed $dateAdd The value to use as filter.
	 *              Values can be integers (unix timestamps), DateTime objects, or strings.
	 *              Empty strings are treated as NULL.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_GroupQuery The current query, for fluid interface
	 */
	public function filterByDateAdd($dateAdd = null, $comparison = null)
	{
		if (is_array($dateAdd)) {
			$useMinMax = false;
			if (isset($dateAdd['min'])) {
				$this->addUsingAlias(Oops_Model_GroupPeer::DATE_ADD, $dateAdd['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($dateAdd['max'])) {
				$this->addUsingAlias(Oops_Model_GroupPeer::DATE_ADD, $dateAdd['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_GroupPeer::DATE_ADD, $dateAdd, $comparison);
	}

	/**
	 * Filter the query on the date_upd column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByDateUpd('2011-03-14'); // WHERE date_upd = '2011-03-14'
	 * $query->filterByDateUpd('now'); // WHERE date_upd = '2011-03-14'
	 * $query->filterByDateUpd(array('max' => 'yesterday')); // WHERE date_upd > '2011-03-13'
	 * </code>
	 *
	 * @param     mixed $dateUpd The value to use as filter.
	 *              Values can be integers (unix timestamps), DateTime objects, or strings.
	 *              Empty strings are treated as NULL.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_GroupQuery The current query, for fluid interface
	 */
	public function filterByDateUpd($dateUpd = null, $comparison = null)
	{
		if (is_array($dateUpd)) {
			$useMinMax = false;
			if (isset($dateUpd['min'])) {
				$this->addUsingAlias(Oops_Model_GroupPeer::DATE_UPD, $dateUpd['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($dateUpd['max'])) {
				$this->addUsingAlias(Oops_Model_GroupPeer::DATE_UPD, $dateUpd['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_GroupPeer::DATE_UPD, $dateUpd, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     Oops_Model_Group $group Object to remove from the list of results
	 *
	 * @return    Oops_Model_GroupQuery The current query, for fluid interface
	 */
	public function prune($group = null)
	{
		if ($group) {
			$this->addUsingAlias(Oops_Model_GroupPeer::ID_GROUP, $group->getIdGroup(), Criteria::NOT_EQUAL);
		}

		return $this;
	}

} // Oops_Model_Base_GroupQuery