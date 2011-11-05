<?php


/**
 * Base class that represents a query for the '' . _DB_PREFIX_ . 'djland_quick_access' table.
 *
 * 
 *
 * @method     Oops_Model_QuickAccessQuery orderByIdQuickAccess($order = Criteria::ASC) Order by the id_quick_access column
 * @method     Oops_Model_QuickAccessQuery orderByNewWindow($order = Criteria::ASC) Order by the new_window column
 * @method     Oops_Model_QuickAccessQuery orderByLink($order = Criteria::ASC) Order by the link column
 *
 * @method     Oops_Model_QuickAccessQuery groupByIdQuickAccess() Group by the id_quick_access column
 * @method     Oops_Model_QuickAccessQuery groupByNewWindow() Group by the new_window column
 * @method     Oops_Model_QuickAccessQuery groupByLink() Group by the link column
 *
 * @method     Oops_Model_QuickAccessQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     Oops_Model_QuickAccessQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     Oops_Model_QuickAccessQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     Oops_Model_QuickAccess findOne(PropelPDO $con = null) Return the first Oops_Model_QuickAccess matching the query
 * @method     Oops_Model_QuickAccess findOneOrCreate(PropelPDO $con = null) Return the first Oops_Model_QuickAccess matching the query, or a new Oops_Model_QuickAccess object populated from the query conditions when no match is found
 *
 * @method     Oops_Model_QuickAccess findOneByIdQuickAccess(int $id_quick_access) Return the first Oops_Model_QuickAccess filtered by the id_quick_access column
 * @method     Oops_Model_QuickAccess findOneByNewWindow(boolean $new_window) Return the first Oops_Model_QuickAccess filtered by the new_window column
 * @method     Oops_Model_QuickAccess findOneByLink(string $link) Return the first Oops_Model_QuickAccess filtered by the link column
 *
 * @method     array findByIdQuickAccess(int $id_quick_access) Return Oops_Model_QuickAccess objects filtered by the id_quick_access column
 * @method     array findByNewWindow(boolean $new_window) Return Oops_Model_QuickAccess objects filtered by the new_window column
 * @method     array findByLink(string $link) Return Oops_Model_QuickAccess objects filtered by the link column
 *
 * @package    propel.generator.prestashop.om
 */
abstract class Oops_Model_Base_QuickAccessQuery extends ModelCriteria
{
	
	/**
	 * Initializes internal state of Oops_Model_Base_QuickAccessQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'prestashop', $modelName = 'Oops_Model_QuickAccess', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new Oops_Model_QuickAccessQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    Oops_Model_QuickAccessQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof Oops_Model_QuickAccessQuery) {
			return $criteria;
		}
		$query = new Oops_Model_QuickAccessQuery();
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
	 * @return    Oops_Model_QuickAccess|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ($key === null) {
			return null;
		}
		if ((null !== ($obj = Oops_Model_QuickAccessPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
			// the object is alredy in the instance pool
			return $obj;
		}
		if ($con === null) {
			$con = Propel::getConnection(Oops_Model_QuickAccessPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
	 * @return    Oops_Model_QuickAccess A model object, or null if the key is not found
	 */
	protected function findPkSimple($key, $con)
	{
		$sql = 'SELECT `ID_QUICK_ACCESS`, `NEW_WINDOW`, `LINK` FROM `' . _DB_PREFIX_ . 'djland_quick_access` WHERE `ID_QUICK_ACCESS` = :p0';
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
			$obj = new Oops_Model_QuickAccess();
			$obj->hydrate($row);
			Oops_Model_QuickAccessPeer::addInstanceToPool($obj, (string) $row[0]);
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
	 * @return    Oops_Model_QuickAccess|array|mixed the result, formatted by the current formatter
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
	 * @return    Oops_Model_QuickAccessQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(Oops_Model_QuickAccessPeer::ID_QUICK_ACCESS, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    Oops_Model_QuickAccessQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(Oops_Model_QuickAccessPeer::ID_QUICK_ACCESS, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id_quick_access column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByIdQuickAccess(1234); // WHERE id_quick_access = 1234
	 * $query->filterByIdQuickAccess(array(12, 34)); // WHERE id_quick_access IN (12, 34)
	 * $query->filterByIdQuickAccess(array('min' => 12)); // WHERE id_quick_access > 12
	 * </code>
	 *
	 * @param     mixed $idQuickAccess The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_QuickAccessQuery The current query, for fluid interface
	 */
	public function filterByIdQuickAccess($idQuickAccess = null, $comparison = null)
	{
		if (is_array($idQuickAccess) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(Oops_Model_QuickAccessPeer::ID_QUICK_ACCESS, $idQuickAccess, $comparison);
	}

	/**
	 * Filter the query on the new_window column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByNewWindow(true); // WHERE new_window = true
	 * $query->filterByNewWindow('yes'); // WHERE new_window = true
	 * </code>
	 *
	 * @param     boolean|string $newWindow The value to use as filter.
	 *              Non-boolean arguments are converted using the following rules:
	 *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_QuickAccessQuery The current query, for fluid interface
	 */
	public function filterByNewWindow($newWindow = null, $comparison = null)
	{
		if (is_string($newWindow)) {
			$new_window = in_array(strtolower($newWindow), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(Oops_Model_QuickAccessPeer::NEW_WINDOW, $newWindow, $comparison);
	}

	/**
	 * Filter the query on the link column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByLink('fooValue');   // WHERE link = 'fooValue'
	 * $query->filterByLink('%fooValue%'); // WHERE link LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $link The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_QuickAccessQuery The current query, for fluid interface
	 */
	public function filterByLink($link = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($link)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $link)) {
				$link = str_replace('*', '%', $link);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(Oops_Model_QuickAccessPeer::LINK, $link, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     Oops_Model_QuickAccess $quickAccess Object to remove from the list of results
	 *
	 * @return    Oops_Model_QuickAccessQuery The current query, for fluid interface
	 */
	public function prune($quickAccess = null)
	{
		if ($quickAccess) {
			$this->addUsingAlias(Oops_Model_QuickAccessPeer::ID_QUICK_ACCESS, $quickAccess->getIdQuickAccess(), Criteria::NOT_EQUAL);
		}

		return $this;
	}

} // Oops_Model_Base_QuickAccessQuery