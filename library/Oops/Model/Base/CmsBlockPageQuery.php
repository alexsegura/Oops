<?php


/**
 * Base class that represents a query for the 'djland_cms_block_page' table.
 *
 * 
 *
 * @method     Oops_Model_CmsBlockPageQuery orderByIdCmsBlockPage($order = Criteria::ASC) Order by the id_cms_block_page column
 * @method     Oops_Model_CmsBlockPageQuery orderByIdCmsBlock($order = Criteria::ASC) Order by the id_cms_block column
 * @method     Oops_Model_CmsBlockPageQuery orderByIdCms($order = Criteria::ASC) Order by the id_cms column
 * @method     Oops_Model_CmsBlockPageQuery orderByIsCategory($order = Criteria::ASC) Order by the is_category column
 *
 * @method     Oops_Model_CmsBlockPageQuery groupByIdCmsBlockPage() Group by the id_cms_block_page column
 * @method     Oops_Model_CmsBlockPageQuery groupByIdCmsBlock() Group by the id_cms_block column
 * @method     Oops_Model_CmsBlockPageQuery groupByIdCms() Group by the id_cms column
 * @method     Oops_Model_CmsBlockPageQuery groupByIsCategory() Group by the is_category column
 *
 * @method     Oops_Model_CmsBlockPageQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     Oops_Model_CmsBlockPageQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     Oops_Model_CmsBlockPageQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     Oops_Model_CmsBlockPage findOne(PropelPDO $con = null) Return the first Oops_Model_CmsBlockPage matching the query
 * @method     Oops_Model_CmsBlockPage findOneOrCreate(PropelPDO $con = null) Return the first Oops_Model_CmsBlockPage matching the query, or a new Oops_Model_CmsBlockPage object populated from the query conditions when no match is found
 *
 * @method     Oops_Model_CmsBlockPage findOneByIdCmsBlockPage(int $id_cms_block_page) Return the first Oops_Model_CmsBlockPage filtered by the id_cms_block_page column
 * @method     Oops_Model_CmsBlockPage findOneByIdCmsBlock(int $id_cms_block) Return the first Oops_Model_CmsBlockPage filtered by the id_cms_block column
 * @method     Oops_Model_CmsBlockPage findOneByIdCms(int $id_cms) Return the first Oops_Model_CmsBlockPage filtered by the id_cms column
 * @method     Oops_Model_CmsBlockPage findOneByIsCategory(boolean $is_category) Return the first Oops_Model_CmsBlockPage filtered by the is_category column
 *
 * @method     array findByIdCmsBlockPage(int $id_cms_block_page) Return Oops_Model_CmsBlockPage objects filtered by the id_cms_block_page column
 * @method     array findByIdCmsBlock(int $id_cms_block) Return Oops_Model_CmsBlockPage objects filtered by the id_cms_block column
 * @method     array findByIdCms(int $id_cms) Return Oops_Model_CmsBlockPage objects filtered by the id_cms column
 * @method     array findByIsCategory(boolean $is_category) Return Oops_Model_CmsBlockPage objects filtered by the is_category column
 *
 * @package    propel.generator.prestashop.om
 */
abstract class Oops_Model_Base_CmsBlockPageQuery extends ModelCriteria
{
	
	/**
	 * Initializes internal state of Oops_Model_Base_CmsBlockPageQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'prestashop', $modelName = 'Oops_Model_CmsBlockPage', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new Oops_Model_CmsBlockPageQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    Oops_Model_CmsBlockPageQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof Oops_Model_CmsBlockPageQuery) {
			return $criteria;
		}
		$query = new Oops_Model_CmsBlockPageQuery();
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
	 * @return    Oops_Model_CmsBlockPage|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ($key === null) {
			return null;
		}
		if ((null !== ($obj = Oops_Model_CmsBlockPagePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
			// the object is alredy in the instance pool
			return $obj;
		}
		if ($con === null) {
			$con = Propel::getConnection(Oops_Model_CmsBlockPagePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
	 * @return    Oops_Model_CmsBlockPage A model object, or null if the key is not found
	 */
	protected function findPkSimple($key, $con)
	{
		$sql = 'SELECT `ID_CMS_BLOCK_PAGE`, `ID_CMS_BLOCK`, `ID_CMS`, `IS_CATEGORY` FROM `djland_cms_block_page` WHERE `ID_CMS_BLOCK_PAGE` = :p0';
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
			$obj = new Oops_Model_CmsBlockPage();
			$obj->hydrate($row);
			Oops_Model_CmsBlockPagePeer::addInstanceToPool($obj, (string) $row[0]);
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
	 * @return    Oops_Model_CmsBlockPage|array|mixed the result, formatted by the current formatter
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
	 * @return    Oops_Model_CmsBlockPageQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(Oops_Model_CmsBlockPagePeer::ID_CMS_BLOCK_PAGE, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    Oops_Model_CmsBlockPageQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(Oops_Model_CmsBlockPagePeer::ID_CMS_BLOCK_PAGE, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id_cms_block_page column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByIdCmsBlockPage(1234); // WHERE id_cms_block_page = 1234
	 * $query->filterByIdCmsBlockPage(array(12, 34)); // WHERE id_cms_block_page IN (12, 34)
	 * $query->filterByIdCmsBlockPage(array('min' => 12)); // WHERE id_cms_block_page > 12
	 * </code>
	 *
	 * @param     mixed $idCmsBlockPage The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_CmsBlockPageQuery The current query, for fluid interface
	 */
	public function filterByIdCmsBlockPage($idCmsBlockPage = null, $comparison = null)
	{
		if (is_array($idCmsBlockPage) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(Oops_Model_CmsBlockPagePeer::ID_CMS_BLOCK_PAGE, $idCmsBlockPage, $comparison);
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
	 * @return    Oops_Model_CmsBlockPageQuery The current query, for fluid interface
	 */
	public function filterByIdCmsBlock($idCmsBlock = null, $comparison = null)
	{
		if (is_array($idCmsBlock)) {
			$useMinMax = false;
			if (isset($idCmsBlock['min'])) {
				$this->addUsingAlias(Oops_Model_CmsBlockPagePeer::ID_CMS_BLOCK, $idCmsBlock['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($idCmsBlock['max'])) {
				$this->addUsingAlias(Oops_Model_CmsBlockPagePeer::ID_CMS_BLOCK, $idCmsBlock['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_CmsBlockPagePeer::ID_CMS_BLOCK, $idCmsBlock, $comparison);
	}

	/**
	 * Filter the query on the id_cms column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByIdCms(1234); // WHERE id_cms = 1234
	 * $query->filterByIdCms(array(12, 34)); // WHERE id_cms IN (12, 34)
	 * $query->filterByIdCms(array('min' => 12)); // WHERE id_cms > 12
	 * </code>
	 *
	 * @param     mixed $idCms The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_CmsBlockPageQuery The current query, for fluid interface
	 */
	public function filterByIdCms($idCms = null, $comparison = null)
	{
		if (is_array($idCms)) {
			$useMinMax = false;
			if (isset($idCms['min'])) {
				$this->addUsingAlias(Oops_Model_CmsBlockPagePeer::ID_CMS, $idCms['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($idCms['max'])) {
				$this->addUsingAlias(Oops_Model_CmsBlockPagePeer::ID_CMS, $idCms['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_CmsBlockPagePeer::ID_CMS, $idCms, $comparison);
	}

	/**
	 * Filter the query on the is_category column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByIsCategory(true); // WHERE is_category = true
	 * $query->filterByIsCategory('yes'); // WHERE is_category = true
	 * </code>
	 *
	 * @param     boolean|string $isCategory The value to use as filter.
	 *              Non-boolean arguments are converted using the following rules:
	 *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_CmsBlockPageQuery The current query, for fluid interface
	 */
	public function filterByIsCategory($isCategory = null, $comparison = null)
	{
		if (is_string($isCategory)) {
			$is_category = in_array(strtolower($isCategory), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(Oops_Model_CmsBlockPagePeer::IS_CATEGORY, $isCategory, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     Oops_Model_CmsBlockPage $cmsBlockPage Object to remove from the list of results
	 *
	 * @return    Oops_Model_CmsBlockPageQuery The current query, for fluid interface
	 */
	public function prune($cmsBlockPage = null)
	{
		if ($cmsBlockPage) {
			$this->addUsingAlias(Oops_Model_CmsBlockPagePeer::ID_CMS_BLOCK_PAGE, $cmsBlockPage->getIdCmsBlockPage(), Criteria::NOT_EQUAL);
		}

		return $this;
	}

} // Oops_Model_Base_CmsBlockPageQuery