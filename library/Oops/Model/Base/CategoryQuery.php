<?php


/**
 * Base class that represents a query for the 'djland_category' table.
 *
 * 
 *
 * @method     Oops_Model_CategoryQuery orderByIdCategory($order = Criteria::ASC) Order by the id_category column
 * @method     Oops_Model_CategoryQuery orderByIdParent($order = Criteria::ASC) Order by the id_parent column
 * @method     Oops_Model_CategoryQuery orderByLevelDepth($order = Criteria::ASC) Order by the level_depth column
 * @method     Oops_Model_CategoryQuery orderByNleft($order = Criteria::ASC) Order by the nleft column
 * @method     Oops_Model_CategoryQuery orderByNright($order = Criteria::ASC) Order by the nright column
 * @method     Oops_Model_CategoryQuery orderByActive($order = Criteria::ASC) Order by the active column
 * @method     Oops_Model_CategoryQuery orderByDateAdd($order = Criteria::ASC) Order by the date_add column
 * @method     Oops_Model_CategoryQuery orderByDateUpd($order = Criteria::ASC) Order by the date_upd column
 * @method     Oops_Model_CategoryQuery orderByPosition($order = Criteria::ASC) Order by the position column
 *
 * @method     Oops_Model_CategoryQuery groupByIdCategory() Group by the id_category column
 * @method     Oops_Model_CategoryQuery groupByIdParent() Group by the id_parent column
 * @method     Oops_Model_CategoryQuery groupByLevelDepth() Group by the level_depth column
 * @method     Oops_Model_CategoryQuery groupByNleft() Group by the nleft column
 * @method     Oops_Model_CategoryQuery groupByNright() Group by the nright column
 * @method     Oops_Model_CategoryQuery groupByActive() Group by the active column
 * @method     Oops_Model_CategoryQuery groupByDateAdd() Group by the date_add column
 * @method     Oops_Model_CategoryQuery groupByDateUpd() Group by the date_upd column
 * @method     Oops_Model_CategoryQuery groupByPosition() Group by the position column
 *
 * @method     Oops_Model_CategoryQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     Oops_Model_CategoryQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     Oops_Model_CategoryQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     Oops_Model_CategoryQuery leftJoinCategoryLang($relationAlias = null) Adds a LEFT JOIN clause to the query using the CategoryLang relation
 * @method     Oops_Model_CategoryQuery rightJoinCategoryLang($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CategoryLang relation
 * @method     Oops_Model_CategoryQuery innerJoinCategoryLang($relationAlias = null) Adds a INNER JOIN clause to the query using the CategoryLang relation
 *
 * @method     Oops_Model_CategoryQuery leftJoinCategoryProduct($relationAlias = null) Adds a LEFT JOIN clause to the query using the CategoryProduct relation
 * @method     Oops_Model_CategoryQuery rightJoinCategoryProduct($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CategoryProduct relation
 * @method     Oops_Model_CategoryQuery innerJoinCategoryProduct($relationAlias = null) Adds a INNER JOIN clause to the query using the CategoryProduct relation
 *
 * @method     Oops_Model_Category findOne(PropelPDO $con = null) Return the first Oops_Model_Category matching the query
 * @method     Oops_Model_Category findOneOrCreate(PropelPDO $con = null) Return the first Oops_Model_Category matching the query, or a new Oops_Model_Category object populated from the query conditions when no match is found
 *
 * @method     Oops_Model_Category findOneByIdCategory(int $id_category) Return the first Oops_Model_Category filtered by the id_category column
 * @method     Oops_Model_Category findOneByIdParent(int $id_parent) Return the first Oops_Model_Category filtered by the id_parent column
 * @method     Oops_Model_Category findOneByLevelDepth(int $level_depth) Return the first Oops_Model_Category filtered by the level_depth column
 * @method     Oops_Model_Category findOneByNleft(int $nleft) Return the first Oops_Model_Category filtered by the nleft column
 * @method     Oops_Model_Category findOneByNright(int $nright) Return the first Oops_Model_Category filtered by the nright column
 * @method     Oops_Model_Category findOneByActive(boolean $active) Return the first Oops_Model_Category filtered by the active column
 * @method     Oops_Model_Category findOneByDateAdd(string $date_add) Return the first Oops_Model_Category filtered by the date_add column
 * @method     Oops_Model_Category findOneByDateUpd(string $date_upd) Return the first Oops_Model_Category filtered by the date_upd column
 * @method     Oops_Model_Category findOneByPosition(int $position) Return the first Oops_Model_Category filtered by the position column
 *
 * @method     array findByIdCategory(int $id_category) Return Oops_Model_Category objects filtered by the id_category column
 * @method     array findByIdParent(int $id_parent) Return Oops_Model_Category objects filtered by the id_parent column
 * @method     array findByLevelDepth(int $level_depth) Return Oops_Model_Category objects filtered by the level_depth column
 * @method     array findByNleft(int $nleft) Return Oops_Model_Category objects filtered by the nleft column
 * @method     array findByNright(int $nright) Return Oops_Model_Category objects filtered by the nright column
 * @method     array findByActive(boolean $active) Return Oops_Model_Category objects filtered by the active column
 * @method     array findByDateAdd(string $date_add) Return Oops_Model_Category objects filtered by the date_add column
 * @method     array findByDateUpd(string $date_upd) Return Oops_Model_Category objects filtered by the date_upd column
 * @method     array findByPosition(int $position) Return Oops_Model_Category objects filtered by the position column
 *
 * @package    propel.generator.prestashop.om
 */
abstract class Oops_Model_Base_CategoryQuery extends ModelCriteria
{
	
	/**
	 * Initializes internal state of Oops_Model_Base_CategoryQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'prestashop', $modelName = 'Oops_Model_Category', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new Oops_Model_CategoryQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    Oops_Model_CategoryQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof Oops_Model_CategoryQuery) {
			return $criteria;
		}
		$query = new Oops_Model_CategoryQuery();
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
	 * @return    Oops_Model_Category|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ($key === null) {
			return null;
		}
		if ((null !== ($obj = Oops_Model_CategoryPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
			// the object is alredy in the instance pool
			return $obj;
		}
		if ($con === null) {
			$con = Propel::getConnection(Oops_Model_CategoryPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
	 * @return    Oops_Model_Category A model object, or null if the key is not found
	 */
	protected function findPkSimple($key, $con)
	{
		$sql = 'SELECT `ID_CATEGORY`, `ID_PARENT`, `LEVEL_DEPTH`, `NLEFT`, `NRIGHT`, `ACTIVE`, `DATE_ADD`, `DATE_UPD`, `POSITION` FROM `djland_category` WHERE `ID_CATEGORY` = :p0';
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
			$obj = new Oops_Model_Category();
			$obj->hydrate($row);
			Oops_Model_CategoryPeer::addInstanceToPool($obj, (string) $row[0]);
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
	 * @return    Oops_Model_Category|array|mixed the result, formatted by the current formatter
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
	 * @return    Oops_Model_CategoryQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(Oops_Model_CategoryPeer::ID_CATEGORY, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    Oops_Model_CategoryQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(Oops_Model_CategoryPeer::ID_CATEGORY, $keys, Criteria::IN);
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
	 * @return    Oops_Model_CategoryQuery The current query, for fluid interface
	 */
	public function filterByIdCategory($idCategory = null, $comparison = null)
	{
		if (is_array($idCategory) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(Oops_Model_CategoryPeer::ID_CATEGORY, $idCategory, $comparison);
	}

	/**
	 * Filter the query on the id_parent column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByIdParent(1234); // WHERE id_parent = 1234
	 * $query->filterByIdParent(array(12, 34)); // WHERE id_parent IN (12, 34)
	 * $query->filterByIdParent(array('min' => 12)); // WHERE id_parent > 12
	 * </code>
	 *
	 * @param     mixed $idParent The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_CategoryQuery The current query, for fluid interface
	 */
	public function filterByIdParent($idParent = null, $comparison = null)
	{
		if (is_array($idParent)) {
			$useMinMax = false;
			if (isset($idParent['min'])) {
				$this->addUsingAlias(Oops_Model_CategoryPeer::ID_PARENT, $idParent['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($idParent['max'])) {
				$this->addUsingAlias(Oops_Model_CategoryPeer::ID_PARENT, $idParent['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_CategoryPeer::ID_PARENT, $idParent, $comparison);
	}

	/**
	 * Filter the query on the level_depth column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByLevelDepth(1234); // WHERE level_depth = 1234
	 * $query->filterByLevelDepth(array(12, 34)); // WHERE level_depth IN (12, 34)
	 * $query->filterByLevelDepth(array('min' => 12)); // WHERE level_depth > 12
	 * </code>
	 *
	 * @param     mixed $levelDepth The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_CategoryQuery The current query, for fluid interface
	 */
	public function filterByLevelDepth($levelDepth = null, $comparison = null)
	{
		if (is_array($levelDepth)) {
			$useMinMax = false;
			if (isset($levelDepth['min'])) {
				$this->addUsingAlias(Oops_Model_CategoryPeer::LEVEL_DEPTH, $levelDepth['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($levelDepth['max'])) {
				$this->addUsingAlias(Oops_Model_CategoryPeer::LEVEL_DEPTH, $levelDepth['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_CategoryPeer::LEVEL_DEPTH, $levelDepth, $comparison);
	}

	/**
	 * Filter the query on the nleft column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByNleft(1234); // WHERE nleft = 1234
	 * $query->filterByNleft(array(12, 34)); // WHERE nleft IN (12, 34)
	 * $query->filterByNleft(array('min' => 12)); // WHERE nleft > 12
	 * </code>
	 *
	 * @param     mixed $nleft The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_CategoryQuery The current query, for fluid interface
	 */
	public function filterByNleft($nleft = null, $comparison = null)
	{
		if (is_array($nleft)) {
			$useMinMax = false;
			if (isset($nleft['min'])) {
				$this->addUsingAlias(Oops_Model_CategoryPeer::NLEFT, $nleft['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($nleft['max'])) {
				$this->addUsingAlias(Oops_Model_CategoryPeer::NLEFT, $nleft['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_CategoryPeer::NLEFT, $nleft, $comparison);
	}

	/**
	 * Filter the query on the nright column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByNright(1234); // WHERE nright = 1234
	 * $query->filterByNright(array(12, 34)); // WHERE nright IN (12, 34)
	 * $query->filterByNright(array('min' => 12)); // WHERE nright > 12
	 * </code>
	 *
	 * @param     mixed $nright The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_CategoryQuery The current query, for fluid interface
	 */
	public function filterByNright($nright = null, $comparison = null)
	{
		if (is_array($nright)) {
			$useMinMax = false;
			if (isset($nright['min'])) {
				$this->addUsingAlias(Oops_Model_CategoryPeer::NRIGHT, $nright['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($nright['max'])) {
				$this->addUsingAlias(Oops_Model_CategoryPeer::NRIGHT, $nright['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_CategoryPeer::NRIGHT, $nright, $comparison);
	}

	/**
	 * Filter the query on the active column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByActive(true); // WHERE active = true
	 * $query->filterByActive('yes'); // WHERE active = true
	 * </code>
	 *
	 * @param     boolean|string $active The value to use as filter.
	 *              Non-boolean arguments are converted using the following rules:
	 *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_CategoryQuery The current query, for fluid interface
	 */
	public function filterByActive($active = null, $comparison = null)
	{
		if (is_string($active)) {
			$active = in_array(strtolower($active), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(Oops_Model_CategoryPeer::ACTIVE, $active, $comparison);
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
	 * @return    Oops_Model_CategoryQuery The current query, for fluid interface
	 */
	public function filterByDateAdd($dateAdd = null, $comparison = null)
	{
		if (is_array($dateAdd)) {
			$useMinMax = false;
			if (isset($dateAdd['min'])) {
				$this->addUsingAlias(Oops_Model_CategoryPeer::DATE_ADD, $dateAdd['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($dateAdd['max'])) {
				$this->addUsingAlias(Oops_Model_CategoryPeer::DATE_ADD, $dateAdd['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_CategoryPeer::DATE_ADD, $dateAdd, $comparison);
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
	 * @return    Oops_Model_CategoryQuery The current query, for fluid interface
	 */
	public function filterByDateUpd($dateUpd = null, $comparison = null)
	{
		if (is_array($dateUpd)) {
			$useMinMax = false;
			if (isset($dateUpd['min'])) {
				$this->addUsingAlias(Oops_Model_CategoryPeer::DATE_UPD, $dateUpd['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($dateUpd['max'])) {
				$this->addUsingAlias(Oops_Model_CategoryPeer::DATE_UPD, $dateUpd['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_CategoryPeer::DATE_UPD, $dateUpd, $comparison);
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
	 * @return    Oops_Model_CategoryQuery The current query, for fluid interface
	 */
	public function filterByPosition($position = null, $comparison = null)
	{
		if (is_array($position)) {
			$useMinMax = false;
			if (isset($position['min'])) {
				$this->addUsingAlias(Oops_Model_CategoryPeer::POSITION, $position['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($position['max'])) {
				$this->addUsingAlias(Oops_Model_CategoryPeer::POSITION, $position['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_CategoryPeer::POSITION, $position, $comparison);
	}

	/**
	 * Filter the query by a related Oops_Model_CategoryLang object
	 *
	 * @param     Oops_Model_CategoryLang $categoryLang  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_CategoryQuery The current query, for fluid interface
	 */
	public function filterByCategoryLang($categoryLang, $comparison = null)
	{
		if ($categoryLang instanceof Oops_Model_CategoryLang) {
			return $this
				->addUsingAlias(Oops_Model_CategoryPeer::ID_CATEGORY, $categoryLang->getIdCategory(), $comparison);
		} elseif ($categoryLang instanceof PropelCollection) {
			return $this
				->useCategoryLangQuery()
				->filterByPrimaryKeys($categoryLang->getPrimaryKeys())
				->endUse();
		} else {
			throw new PropelException('filterByCategoryLang() only accepts arguments of type Oops_Model_CategoryLang or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the CategoryLang relation
	 *
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    Oops_Model_CategoryQuery The current query, for fluid interface
	 */
	public function joinCategoryLang($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('CategoryLang');

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
			$this->addJoinObject($join, 'CategoryLang');
		}

		return $this;
	}

	/**
	 * Use the CategoryLang relation CategoryLang object
	 *
	 * @see       useQuery()
	 *
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    Oops_Model_CategoryLangQuery A secondary query class using the current class as primary query
	 */
	public function useCategoryLangQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinCategoryLang($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'CategoryLang', 'Oops_Model_CategoryLangQuery');
	}

	/**
	 * Filter the query by a related Oops_Model_CategoryProduct object
	 *
	 * @param     Oops_Model_CategoryProduct $categoryProduct  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_CategoryQuery The current query, for fluid interface
	 */
	public function filterByCategoryProduct($categoryProduct, $comparison = null)
	{
		if ($categoryProduct instanceof Oops_Model_CategoryProduct) {
			return $this
				->addUsingAlias(Oops_Model_CategoryPeer::ID_CATEGORY, $categoryProduct->getIdCategory(), $comparison);
		} elseif ($categoryProduct instanceof PropelCollection) {
			return $this
				->useCategoryProductQuery()
				->filterByPrimaryKeys($categoryProduct->getPrimaryKeys())
				->endUse();
		} else {
			throw new PropelException('filterByCategoryProduct() only accepts arguments of type Oops_Model_CategoryProduct or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the CategoryProduct relation
	 *
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    Oops_Model_CategoryQuery The current query, for fluid interface
	 */
	public function joinCategoryProduct($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('CategoryProduct');

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
			$this->addJoinObject($join, 'CategoryProduct');
		}

		return $this;
	}

	/**
	 * Use the CategoryProduct relation CategoryProduct object
	 *
	 * @see       useQuery()
	 *
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    Oops_Model_CategoryProductQuery A secondary query class using the current class as primary query
	 */
	public function useCategoryProductQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinCategoryProduct($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'CategoryProduct', 'Oops_Model_CategoryProductQuery');
	}

	/**
	 * Filter the query by a related Lang object
	 * using the djland_category_lang table as cross reference
	 *
	 * @param     Lang $lang the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_CategoryQuery The current query, for fluid interface
	 */
	public function filterByLang($lang, $comparison = Criteria::EQUAL)
	{
		return $this
			->useCategoryLangQuery()
			->filterByLang($lang, $comparison)
			->endUse();
	}

	/**
	 * Filter the query by a related Product object
	 * using the djland_category_product table as cross reference
	 *
	 * @param     Product $product the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_CategoryQuery The current query, for fluid interface
	 */
	public function filterByProduct($product, $comparison = Criteria::EQUAL)
	{
		return $this
			->useCategoryProductQuery()
			->filterByProduct($product, $comparison)
			->endUse();
	}

	/**
	 * Exclude object from result
	 *
	 * @param     Oops_Model_Category $category Object to remove from the list of results
	 *
	 * @return    Oops_Model_CategoryQuery The current query, for fluid interface
	 */
	public function prune($category = null)
	{
		if ($category) {
			$this->addUsingAlias(Oops_Model_CategoryPeer::ID_CATEGORY, $category->getIdCategory(), Criteria::NOT_EQUAL);
		}

		return $this;
	}

	// nested_set behavior
	
	/**
	 * Filter the query to restrict the result to descendants of an object
	 *
	 * @param     Oops_Model_Category $category The object to use for descendant search
	 *
	 * @return    Oops_Model_CategoryQuery The current query, for fluid interface
	 */
	public function descendantsOf($category)
	{
		return $this
			->addUsingAlias(Oops_Model_CategoryPeer::LEFT_COL, $category->getLeftValue(), Criteria::GREATER_THAN)
			->addUsingAlias(Oops_Model_CategoryPeer::LEFT_COL, $category->getRightValue(), Criteria::LESS_THAN);
	}
	
	/**
	 * Filter the query to restrict the result to the branch of an object.
	 * Same as descendantsOf(), except that it includes the object passed as parameter in the result
	 *
	 * @param     Oops_Model_Category $category The object to use for branch search
	 *
	 * @return    Oops_Model_CategoryQuery The current query, for fluid interface
	 */
	public function branchOf($category)
	{
		return $this
			->addUsingAlias(Oops_Model_CategoryPeer::LEFT_COL, $category->getLeftValue(), Criteria::GREATER_EQUAL)
			->addUsingAlias(Oops_Model_CategoryPeer::LEFT_COL, $category->getRightValue(), Criteria::LESS_EQUAL);
	}
	
	/**
	 * Filter the query to restrict the result to children of an object
	 *
	 * @param     Oops_Model_Category $category The object to use for child search
	 *
	 * @return    Oops_Model_CategoryQuery The current query, for fluid interface
	 */
	public function childrenOf($category)
	{
		return $this
			->descendantsOf($category)
			->addUsingAlias(Oops_Model_CategoryPeer::LEVEL_COL, $category->getLevel() + 1, Criteria::EQUAL);
	}
	
	/**
	 * Filter the query to restrict the result to siblings of an object.
	 * The result does not include the object passed as parameter.
	 *
	 * @param     Oops_Model_Category $category The object to use for sibling search
	 * @param      PropelPDO $con Connection to use.
	 *
	 * @return    Oops_Model_CategoryQuery The current query, for fluid interface
	 */
	public function siblingsOf($category, PropelPDO $con = null)
	{
		if ($category->isRoot()) {
			return $this->
				add(Oops_Model_CategoryPeer::LEVEL_COL, '1<>1', Criteria::CUSTOM);
		} else {
			return $this
				->childrenOf($category->getParent($con))
				->prune($category);
		}
	}
	
	/**
	 * Filter the query to restrict the result to ancestors of an object
	 *
	 * @param     Oops_Model_Category $category The object to use for ancestors search
	 *
	 * @return    Oops_Model_CategoryQuery The current query, for fluid interface
	 */
	public function ancestorsOf($category)
	{
		return $this
			->addUsingAlias(Oops_Model_CategoryPeer::LEFT_COL, $category->getLeftValue(), Criteria::LESS_THAN)
			->addUsingAlias(Oops_Model_CategoryPeer::RIGHT_COL, $category->getRightValue(), Criteria::GREATER_THAN);
	}
	
	/**
	 * Filter the query to restrict the result to roots of an object.
	 * Same as ancestorsOf(), except that it includes the object passed as parameter in the result
	 *
	 * @param     Oops_Model_Category $category The object to use for roots search
	 *
	 * @return    Oops_Model_CategoryQuery The current query, for fluid interface
	 */
	public function rootsOf($category)
	{
		return $this
			->addUsingAlias(Oops_Model_CategoryPeer::LEFT_COL, $category->getLeftValue(), Criteria::LESS_EQUAL)
			->addUsingAlias(Oops_Model_CategoryPeer::RIGHT_COL, $category->getRightValue(), Criteria::GREATER_EQUAL);
	}
	
	/**
	 * Order the result by branch, i.e. natural tree order
	 *
	 * @param     bool $reverse if true, reverses the order
	 *
	 * @return    Oops_Model_CategoryQuery The current query, for fluid interface
	 */
	public function orderByBranch($reverse = false)
	{
		if ($reverse) {
			return $this
				->addDescendingOrderByColumn(Oops_Model_CategoryPeer::LEFT_COL);
		} else {
			return $this
				->addAscendingOrderByColumn(Oops_Model_CategoryPeer::LEFT_COL);
		}
	}
	
	/**
	 * Order the result by level, the closer to the root first
	 *
	 * @param     bool $reverse if true, reverses the order
	 *
	 * @return    Oops_Model_CategoryQuery The current query, for fluid interface
	 */
	public function orderByLevel($reverse = false)
	{
		if ($reverse) {
			return $this
				->addAscendingOrderByColumn(Oops_Model_CategoryPeer::RIGHT_COL);
		} else {
			return $this
				->addDescendingOrderByColumn(Oops_Model_CategoryPeer::RIGHT_COL);
		}
	}
	
	/**
	 * Returns the root node for the tree
	 *
	 * @param      PropelPDO $con	Connection to use.
	 *
	 * @return     Oops_Model_Category The tree root object
	 */
	public function findRoot($con = null)
	{
		return $this
			->addUsingAlias(Oops_Model_CategoryPeer::LEFT_COL, 1, Criteria::EQUAL)
			->findOne($con);
	}
	
	/**
	 * Returns the tree of objects
	 *
	 * @param      PropelPDO $con	Connection to use.
	 *
	 * @return     mixed the list of results, formatted by the current formatter
	 */
	public function findTree($con = null)
	{
		return $this
			->orderByBranch()
			->find($con);
	}

} // Oops_Model_Base_CategoryQuery