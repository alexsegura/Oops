<?php


/**
 * Base class that represents a query for the 'cms_category' table.
 *
 * 
 *
 * @method     Oops_Db_CmsCategoryQuery orderByIdCmsCategory($order = Criteria::ASC) Order by the id_cms_category column
 * @method     Oops_Db_CmsCategoryQuery orderByIdParent($order = Criteria::ASC) Order by the id_parent column
 * @method     Oops_Db_CmsCategoryQuery orderByLevelDepth($order = Criteria::ASC) Order by the level_depth column
 * @method     Oops_Db_CmsCategoryQuery orderByActive($order = Criteria::ASC) Order by the active column
 * @method     Oops_Db_CmsCategoryQuery orderByDateAdd($order = Criteria::ASC) Order by the date_add column
 * @method     Oops_Db_CmsCategoryQuery orderByDateUpd($order = Criteria::ASC) Order by the date_upd column
 * @method     Oops_Db_CmsCategoryQuery orderByPosition($order = Criteria::ASC) Order by the position column
 *
 * @method     Oops_Db_CmsCategoryQuery groupByIdCmsCategory() Group by the id_cms_category column
 * @method     Oops_Db_CmsCategoryQuery groupByIdParent() Group by the id_parent column
 * @method     Oops_Db_CmsCategoryQuery groupByLevelDepth() Group by the level_depth column
 * @method     Oops_Db_CmsCategoryQuery groupByActive() Group by the active column
 * @method     Oops_Db_CmsCategoryQuery groupByDateAdd() Group by the date_add column
 * @method     Oops_Db_CmsCategoryQuery groupByDateUpd() Group by the date_upd column
 * @method     Oops_Db_CmsCategoryQuery groupByPosition() Group by the position column
 *
 * @method     Oops_Db_CmsCategoryQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     Oops_Db_CmsCategoryQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     Oops_Db_CmsCategoryQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     Oops_Db_CmsCategory findOne(PropelPDO $con = null) Return the first Oops_Db_CmsCategory matching the query
 * @method     Oops_Db_CmsCategory findOneOrCreate(PropelPDO $con = null) Return the first Oops_Db_CmsCategory matching the query, or a new Oops_Db_CmsCategory object populated from the query conditions when no match is found
 *
 * @method     Oops_Db_CmsCategory findOneByIdCmsCategory(int $id_cms_category) Return the first Oops_Db_CmsCategory filtered by the id_cms_category column
 * @method     Oops_Db_CmsCategory findOneByIdParent(int $id_parent) Return the first Oops_Db_CmsCategory filtered by the id_parent column
 * @method     Oops_Db_CmsCategory findOneByLevelDepth(int $level_depth) Return the first Oops_Db_CmsCategory filtered by the level_depth column
 * @method     Oops_Db_CmsCategory findOneByActive(boolean $active) Return the first Oops_Db_CmsCategory filtered by the active column
 * @method     Oops_Db_CmsCategory findOneByDateAdd(string $date_add) Return the first Oops_Db_CmsCategory filtered by the date_add column
 * @method     Oops_Db_CmsCategory findOneByDateUpd(string $date_upd) Return the first Oops_Db_CmsCategory filtered by the date_upd column
 * @method     Oops_Db_CmsCategory findOneByPosition(int $position) Return the first Oops_Db_CmsCategory filtered by the position column
 *
 * @method     array findByIdCmsCategory(int $id_cms_category) Return Oops_Db_CmsCategory objects filtered by the id_cms_category column
 * @method     array findByIdParent(int $id_parent) Return Oops_Db_CmsCategory objects filtered by the id_parent column
 * @method     array findByLevelDepth(int $level_depth) Return Oops_Db_CmsCategory objects filtered by the level_depth column
 * @method     array findByActive(boolean $active) Return Oops_Db_CmsCategory objects filtered by the active column
 * @method     array findByDateAdd(string $date_add) Return Oops_Db_CmsCategory objects filtered by the date_add column
 * @method     array findByDateUpd(string $date_upd) Return Oops_Db_CmsCategory objects filtered by the date_upd column
 * @method     array findByPosition(int $position) Return Oops_Db_CmsCategory objects filtered by the position column
 *
 * @package    propel.generator.prestashop.om
 */
abstract class Oops_Db_Propel_CmsCategoryQuery extends ModelCriteria
{
	
	/**
	 * Initializes internal state of Oops_Db_Propel_CmsCategoryQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'prestashop', $modelName = 'Oops_Db_CmsCategory', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new Oops_Db_CmsCategoryQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    Oops_Db_CmsCategoryQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof Oops_Db_CmsCategoryQuery) {
			return $criteria;
		}
		$query = new Oops_Db_CmsCategoryQuery();
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
	 * @return    Oops_Db_CmsCategory|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ($key === null) {
			return null;
		}
		if ((null !== ($obj = Oops_Db_CmsCategoryPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
			// the object is alredy in the instance pool
			return $obj;
		}
		if ($con === null) {
			$con = Propel::getConnection(Oops_Db_CmsCategoryPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
	 * @return    Oops_Db_CmsCategory A model object, or null if the key is not found
	 */
	protected function findPkSimple($key, $con)
	{
		$sql = 'SELECT `ID_CMS_CATEGORY`, `ID_PARENT`, `LEVEL_DEPTH`, `ACTIVE`, `DATE_ADD`, `DATE_UPD`, `POSITION` FROM `' . _DB_PREFIX_ . 'cms_category` WHERE `ID_CMS_CATEGORY` = :p0';
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
			$obj = new Oops_Db_CmsCategory();
			$obj->hydrate($row);
			Oops_Db_CmsCategoryPeer::addInstanceToPool($obj, (string) $row[0]);
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
	 * @return    Oops_Db_CmsCategory|array|mixed the result, formatted by the current formatter
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
	 * @return    Oops_Db_CmsCategoryQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(Oops_Db_CmsCategoryPeer::ID_CMS_CATEGORY, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    Oops_Db_CmsCategoryQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(Oops_Db_CmsCategoryPeer::ID_CMS_CATEGORY, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id_cms_category column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByIdCmsCategory(1234); // WHERE id_cms_category = 1234
	 * $query->filterByIdCmsCategory(array(12, 34)); // WHERE id_cms_category IN (12, 34)
	 * $query->filterByIdCmsCategory(array('min' => 12)); // WHERE id_cms_category > 12
	 * </code>
	 *
	 * @param     mixed $idCmsCategory The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Db_CmsCategoryQuery The current query, for fluid interface
	 */
	public function filterByIdCmsCategory($idCmsCategory = null, $comparison = null)
	{
		if (is_array($idCmsCategory) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(Oops_Db_CmsCategoryPeer::ID_CMS_CATEGORY, $idCmsCategory, $comparison);
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
	 * @return    Oops_Db_CmsCategoryQuery The current query, for fluid interface
	 */
	public function filterByIdParent($idParent = null, $comparison = null)
	{
		if (is_array($idParent)) {
			$useMinMax = false;
			if (isset($idParent['min'])) {
				$this->addUsingAlias(Oops_Db_CmsCategoryPeer::ID_PARENT, $idParent['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($idParent['max'])) {
				$this->addUsingAlias(Oops_Db_CmsCategoryPeer::ID_PARENT, $idParent['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Db_CmsCategoryPeer::ID_PARENT, $idParent, $comparison);
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
	 * @return    Oops_Db_CmsCategoryQuery The current query, for fluid interface
	 */
	public function filterByLevelDepth($levelDepth = null, $comparison = null)
	{
		if (is_array($levelDepth)) {
			$useMinMax = false;
			if (isset($levelDepth['min'])) {
				$this->addUsingAlias(Oops_Db_CmsCategoryPeer::LEVEL_DEPTH, $levelDepth['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($levelDepth['max'])) {
				$this->addUsingAlias(Oops_Db_CmsCategoryPeer::LEVEL_DEPTH, $levelDepth['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Db_CmsCategoryPeer::LEVEL_DEPTH, $levelDepth, $comparison);
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
	 * @return    Oops_Db_CmsCategoryQuery The current query, for fluid interface
	 */
	public function filterByActive($active = null, $comparison = null)
	{
		if (is_string($active)) {
			$active = in_array(strtolower($active), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(Oops_Db_CmsCategoryPeer::ACTIVE, $active, $comparison);
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
	 * @return    Oops_Db_CmsCategoryQuery The current query, for fluid interface
	 */
	public function filterByDateAdd($dateAdd = null, $comparison = null)
	{
		if (is_array($dateAdd)) {
			$useMinMax = false;
			if (isset($dateAdd['min'])) {
				$this->addUsingAlias(Oops_Db_CmsCategoryPeer::DATE_ADD, $dateAdd['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($dateAdd['max'])) {
				$this->addUsingAlias(Oops_Db_CmsCategoryPeer::DATE_ADD, $dateAdd['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Db_CmsCategoryPeer::DATE_ADD, $dateAdd, $comparison);
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
	 * @return    Oops_Db_CmsCategoryQuery The current query, for fluid interface
	 */
	public function filterByDateUpd($dateUpd = null, $comparison = null)
	{
		if (is_array($dateUpd)) {
			$useMinMax = false;
			if (isset($dateUpd['min'])) {
				$this->addUsingAlias(Oops_Db_CmsCategoryPeer::DATE_UPD, $dateUpd['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($dateUpd['max'])) {
				$this->addUsingAlias(Oops_Db_CmsCategoryPeer::DATE_UPD, $dateUpd['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Db_CmsCategoryPeer::DATE_UPD, $dateUpd, $comparison);
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
	 * @return    Oops_Db_CmsCategoryQuery The current query, for fluid interface
	 */
	public function filterByPosition($position = null, $comparison = null)
	{
		if (is_array($position)) {
			$useMinMax = false;
			if (isset($position['min'])) {
				$this->addUsingAlias(Oops_Db_CmsCategoryPeer::POSITION, $position['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($position['max'])) {
				$this->addUsingAlias(Oops_Db_CmsCategoryPeer::POSITION, $position['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Db_CmsCategoryPeer::POSITION, $position, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     Oops_Db_CmsCategory $cmsCategory Object to remove from the list of results
	 *
	 * @return    Oops_Db_CmsCategoryQuery The current query, for fluid interface
	 */
	public function prune($cmsCategory = null)
	{
		if ($cmsCategory) {
			$this->addUsingAlias(Oops_Db_CmsCategoryPeer::ID_CMS_CATEGORY, $cmsCategory->getIdCmsCategory(), Criteria::NOT_EQUAL);
		}

		return $this;
	}

} // Oops_Db_Propel_CmsCategoryQuery