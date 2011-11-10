<?php


/**
 * Base class that represents a query for the 'cms_block' table.
 *
 * 
 *
 * @method     Oops_Model_CmsBlockQuery orderByIdCmsBlock($order = Criteria::ASC) Order by the id_cms_block column
 * @method     Oops_Model_CmsBlockQuery orderByIdCmsCategory($order = Criteria::ASC) Order by the id_cms_category column
 * @method     Oops_Model_CmsBlockQuery orderByName($order = Criteria::ASC) Order by the name column
 * @method     Oops_Model_CmsBlockQuery orderByLocation($order = Criteria::ASC) Order by the location column
 * @method     Oops_Model_CmsBlockQuery orderByPosition($order = Criteria::ASC) Order by the position column
 * @method     Oops_Model_CmsBlockQuery orderByDisplayStore($order = Criteria::ASC) Order by the display_store column
 *
 * @method     Oops_Model_CmsBlockQuery groupByIdCmsBlock() Group by the id_cms_block column
 * @method     Oops_Model_CmsBlockQuery groupByIdCmsCategory() Group by the id_cms_category column
 * @method     Oops_Model_CmsBlockQuery groupByName() Group by the name column
 * @method     Oops_Model_CmsBlockQuery groupByLocation() Group by the location column
 * @method     Oops_Model_CmsBlockQuery groupByPosition() Group by the position column
 * @method     Oops_Model_CmsBlockQuery groupByDisplayStore() Group by the display_store column
 *
 * @method     Oops_Model_CmsBlockQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     Oops_Model_CmsBlockQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     Oops_Model_CmsBlockQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     Oops_Model_CmsBlock findOne(PropelPDO $con = null) Return the first Oops_Model_CmsBlock matching the query
 * @method     Oops_Model_CmsBlock findOneOrCreate(PropelPDO $con = null) Return the first Oops_Model_CmsBlock matching the query, or a new Oops_Model_CmsBlock object populated from the query conditions when no match is found
 *
 * @method     Oops_Model_CmsBlock findOneByIdCmsBlock(int $id_cms_block) Return the first Oops_Model_CmsBlock filtered by the id_cms_block column
 * @method     Oops_Model_CmsBlock findOneByIdCmsCategory(int $id_cms_category) Return the first Oops_Model_CmsBlock filtered by the id_cms_category column
 * @method     Oops_Model_CmsBlock findOneByName(string $name) Return the first Oops_Model_CmsBlock filtered by the name column
 * @method     Oops_Model_CmsBlock findOneByLocation(boolean $location) Return the first Oops_Model_CmsBlock filtered by the location column
 * @method     Oops_Model_CmsBlock findOneByPosition(int $position) Return the first Oops_Model_CmsBlock filtered by the position column
 * @method     Oops_Model_CmsBlock findOneByDisplayStore(boolean $display_store) Return the first Oops_Model_CmsBlock filtered by the display_store column
 *
 * @method     array findByIdCmsBlock(int $id_cms_block) Return Oops_Model_CmsBlock objects filtered by the id_cms_block column
 * @method     array findByIdCmsCategory(int $id_cms_category) Return Oops_Model_CmsBlock objects filtered by the id_cms_category column
 * @method     array findByName(string $name) Return Oops_Model_CmsBlock objects filtered by the name column
 * @method     array findByLocation(boolean $location) Return Oops_Model_CmsBlock objects filtered by the location column
 * @method     array findByPosition(int $position) Return Oops_Model_CmsBlock objects filtered by the position column
 * @method     array findByDisplayStore(boolean $display_store) Return Oops_Model_CmsBlock objects filtered by the display_store column
 *
 * @package    propel.generator.prestashop.om
 */
abstract class Oops_Model_Base_CmsBlockQuery extends ModelCriteria
{
	
	/**
	 * Initializes internal state of Oops_Model_Base_CmsBlockQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'prestashop', $modelName = 'Oops_Model_CmsBlock', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new Oops_Model_CmsBlockQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    Oops_Model_CmsBlockQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof Oops_Model_CmsBlockQuery) {
			return $criteria;
		}
		$query = new Oops_Model_CmsBlockQuery();
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
	 * @return    Oops_Model_CmsBlock|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ($key === null) {
			return null;
		}
		if ((null !== ($obj = Oops_Model_CmsBlockPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
			// the object is alredy in the instance pool
			return $obj;
		}
		if ($con === null) {
			$con = Propel::getConnection(Oops_Model_CmsBlockPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
	 * @return    Oops_Model_CmsBlock A model object, or null if the key is not found
	 */
	protected function findPkSimple($key, $con)
	{
		$sql = 'SELECT `ID_CMS_BLOCK`, `ID_CMS_CATEGORY`, `NAME`, `LOCATION`, `POSITION`, `DISPLAY_STORE` FROM `' . _DB_PREFIX_ . 'cms_block` WHERE `ID_CMS_BLOCK` = :p0';
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
			$obj = new Oops_Model_CmsBlock();
			$obj->hydrate($row);
			Oops_Model_CmsBlockPeer::addInstanceToPool($obj, (string) $row[0]);
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
	 * @return    Oops_Model_CmsBlock|array|mixed the result, formatted by the current formatter
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
	 * @return    Oops_Model_CmsBlockQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(Oops_Model_CmsBlockPeer::ID_CMS_BLOCK, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    Oops_Model_CmsBlockQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(Oops_Model_CmsBlockPeer::ID_CMS_BLOCK, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id_cms_block column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByIdCmsBlock(1234); // WHERE id_cms_block = 1234
	 * $query->filterByIdCmsBlock(array(12, 34)); // WHERE id_cms_block IN (12, 34)
	 * $query->filterByIdCmsBlock(array('min' => 12)); // WHERE id_cms_block > 12
	 * </code>
	 *
	 * @param     mixed $idCmsBlock The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_CmsBlockQuery The current query, for fluid interface
	 */
	public function filterByIdCmsBlock($idCmsBlock = null, $comparison = null)
	{
		if (is_array($idCmsBlock) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(Oops_Model_CmsBlockPeer::ID_CMS_BLOCK, $idCmsBlock, $comparison);
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
	 * @return    Oops_Model_CmsBlockQuery The current query, for fluid interface
	 */
	public function filterByIdCmsCategory($idCmsCategory = null, $comparison = null)
	{
		if (is_array($idCmsCategory)) {
			$useMinMax = false;
			if (isset($idCmsCategory['min'])) {
				$this->addUsingAlias(Oops_Model_CmsBlockPeer::ID_CMS_CATEGORY, $idCmsCategory['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($idCmsCategory['max'])) {
				$this->addUsingAlias(Oops_Model_CmsBlockPeer::ID_CMS_CATEGORY, $idCmsCategory['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_CmsBlockPeer::ID_CMS_CATEGORY, $idCmsCategory, $comparison);
	}

	/**
	 * Filter the query on the name column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByName('fooValue');   // WHERE name = 'fooValue'
	 * $query->filterByName('%fooValue%'); // WHERE name LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $name The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_CmsBlockQuery The current query, for fluid interface
	 */
	public function filterByName($name = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($name)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $name)) {
				$name = str_replace('*', '%', $name);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(Oops_Model_CmsBlockPeer::NAME, $name, $comparison);
	}

	/**
	 * Filter the query on the location column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByLocation(true); // WHERE location = true
	 * $query->filterByLocation('yes'); // WHERE location = true
	 * </code>
	 *
	 * @param     boolean|string $location The value to use as filter.
	 *              Non-boolean arguments are converted using the following rules:
	 *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_CmsBlockQuery The current query, for fluid interface
	 */
	public function filterByLocation($location = null, $comparison = null)
	{
		if (is_string($location)) {
			$location = in_array(strtolower($location), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(Oops_Model_CmsBlockPeer::LOCATION, $location, $comparison);
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
	 * @return    Oops_Model_CmsBlockQuery The current query, for fluid interface
	 */
	public function filterByPosition($position = null, $comparison = null)
	{
		if (is_array($position)) {
			$useMinMax = false;
			if (isset($position['min'])) {
				$this->addUsingAlias(Oops_Model_CmsBlockPeer::POSITION, $position['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($position['max'])) {
				$this->addUsingAlias(Oops_Model_CmsBlockPeer::POSITION, $position['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_CmsBlockPeer::POSITION, $position, $comparison);
	}

	/**
	 * Filter the query on the display_store column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByDisplayStore(true); // WHERE display_store = true
	 * $query->filterByDisplayStore('yes'); // WHERE display_store = true
	 * </code>
	 *
	 * @param     boolean|string $displayStore The value to use as filter.
	 *              Non-boolean arguments are converted using the following rules:
	 *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_CmsBlockQuery The current query, for fluid interface
	 */
	public function filterByDisplayStore($displayStore = null, $comparison = null)
	{
		if (is_string($displayStore)) {
			$display_store = in_array(strtolower($displayStore), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(Oops_Model_CmsBlockPeer::DISPLAY_STORE, $displayStore, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     Oops_Model_CmsBlock $cmsBlock Object to remove from the list of results
	 *
	 * @return    Oops_Model_CmsBlockQuery The current query, for fluid interface
	 */
	public function prune($cmsBlock = null)
	{
		if ($cmsBlock) {
			$this->addUsingAlias(Oops_Model_CmsBlockPeer::ID_CMS_BLOCK, $cmsBlock->getIdCmsBlock(), Criteria::NOT_EQUAL);
		}

		return $this;
	}

} // Oops_Model_Base_CmsBlockQuery