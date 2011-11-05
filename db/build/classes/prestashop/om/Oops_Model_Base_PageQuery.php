<?php


/**
 * Base class that represents a query for the '' . _DB_PREFIX_ . 'djland_page' table.
 *
 * 
 *
 * @method     Oops_Model_PageQuery orderByIdPage($order = Criteria::ASC) Order by the id_page column
 * @method     Oops_Model_PageQuery orderByIdPageType($order = Criteria::ASC) Order by the id_page_type column
 * @method     Oops_Model_PageQuery orderByIdObject($order = Criteria::ASC) Order by the id_object column
 *
 * @method     Oops_Model_PageQuery groupByIdPage() Group by the id_page column
 * @method     Oops_Model_PageQuery groupByIdPageType() Group by the id_page_type column
 * @method     Oops_Model_PageQuery groupByIdObject() Group by the id_object column
 *
 * @method     Oops_Model_PageQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     Oops_Model_PageQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     Oops_Model_PageQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     Oops_Model_Page findOne(PropelPDO $con = null) Return the first Oops_Model_Page matching the query
 * @method     Oops_Model_Page findOneOrCreate(PropelPDO $con = null) Return the first Oops_Model_Page matching the query, or a new Oops_Model_Page object populated from the query conditions when no match is found
 *
 * @method     Oops_Model_Page findOneByIdPage(int $id_page) Return the first Oops_Model_Page filtered by the id_page column
 * @method     Oops_Model_Page findOneByIdPageType(int $id_page_type) Return the first Oops_Model_Page filtered by the id_page_type column
 * @method     Oops_Model_Page findOneByIdObject(int $id_object) Return the first Oops_Model_Page filtered by the id_object column
 *
 * @method     array findByIdPage(int $id_page) Return Oops_Model_Page objects filtered by the id_page column
 * @method     array findByIdPageType(int $id_page_type) Return Oops_Model_Page objects filtered by the id_page_type column
 * @method     array findByIdObject(int $id_object) Return Oops_Model_Page objects filtered by the id_object column
 *
 * @package    propel.generator.prestashop.om
 */
abstract class Oops_Model_Base_PageQuery extends ModelCriteria
{
	
	/**
	 * Initializes internal state of Oops_Model_Base_PageQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'prestashop', $modelName = 'Oops_Model_Page', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new Oops_Model_PageQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    Oops_Model_PageQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof Oops_Model_PageQuery) {
			return $criteria;
		}
		$query = new Oops_Model_PageQuery();
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
	 * @return    Oops_Model_Page|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ($key === null) {
			return null;
		}
		if ((null !== ($obj = Oops_Model_PagePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
			// the object is alredy in the instance pool
			return $obj;
		}
		if ($con === null) {
			$con = Propel::getConnection(Oops_Model_PagePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
	 * @return    Oops_Model_Page A model object, or null if the key is not found
	 */
	protected function findPkSimple($key, $con)
	{
		$sql = 'SELECT `ID_PAGE`, `ID_PAGE_TYPE`, `ID_OBJECT` FROM `' . _DB_PREFIX_ . 'djland_page` WHERE `ID_PAGE` = :p0';
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
			$obj = new Oops_Model_Page();
			$obj->hydrate($row);
			Oops_Model_PagePeer::addInstanceToPool($obj, (string) $row[0]);
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
	 * @return    Oops_Model_Page|array|mixed the result, formatted by the current formatter
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
	 * @return    Oops_Model_PageQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(Oops_Model_PagePeer::ID_PAGE, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    Oops_Model_PageQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(Oops_Model_PagePeer::ID_PAGE, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id_page column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByIdPage(1234); // WHERE id_page = 1234
	 * $query->filterByIdPage(array(12, 34)); // WHERE id_page IN (12, 34)
	 * $query->filterByIdPage(array('min' => 12)); // WHERE id_page > 12
	 * </code>
	 *
	 * @param     mixed $idPage The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_PageQuery The current query, for fluid interface
	 */
	public function filterByIdPage($idPage = null, $comparison = null)
	{
		if (is_array($idPage) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(Oops_Model_PagePeer::ID_PAGE, $idPage, $comparison);
	}

	/**
	 * Filter the query on the id_page_type column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByIdPageType(1234); // WHERE id_page_type = 1234
	 * $query->filterByIdPageType(array(12, 34)); // WHERE id_page_type IN (12, 34)
	 * $query->filterByIdPageType(array('min' => 12)); // WHERE id_page_type > 12
	 * </code>
	 *
	 * @param     mixed $idPageType The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_PageQuery The current query, for fluid interface
	 */
	public function filterByIdPageType($idPageType = null, $comparison = null)
	{
		if (is_array($idPageType)) {
			$useMinMax = false;
			if (isset($idPageType['min'])) {
				$this->addUsingAlias(Oops_Model_PagePeer::ID_PAGE_TYPE, $idPageType['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($idPageType['max'])) {
				$this->addUsingAlias(Oops_Model_PagePeer::ID_PAGE_TYPE, $idPageType['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_PagePeer::ID_PAGE_TYPE, $idPageType, $comparison);
	}

	/**
	 * Filter the query on the id_object column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByIdObject(1234); // WHERE id_object = 1234
	 * $query->filterByIdObject(array(12, 34)); // WHERE id_object IN (12, 34)
	 * $query->filterByIdObject(array('min' => 12)); // WHERE id_object > 12
	 * </code>
	 *
	 * @param     mixed $idObject The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_PageQuery The current query, for fluid interface
	 */
	public function filterByIdObject($idObject = null, $comparison = null)
	{
		if (is_array($idObject)) {
			$useMinMax = false;
			if (isset($idObject['min'])) {
				$this->addUsingAlias(Oops_Model_PagePeer::ID_OBJECT, $idObject['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($idObject['max'])) {
				$this->addUsingAlias(Oops_Model_PagePeer::ID_OBJECT, $idObject['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_PagePeer::ID_OBJECT, $idObject, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     Oops_Model_Page $page Object to remove from the list of results
	 *
	 * @return    Oops_Model_PageQuery The current query, for fluid interface
	 */
	public function prune($page = null)
	{
		if ($page) {
			$this->addUsingAlias(Oops_Model_PagePeer::ID_PAGE, $page->getIdPage(), Criteria::NOT_EQUAL);
		}

		return $this;
	}

} // Oops_Model_Base_PageQuery