<?php


/**
 * Base class that represents a query for the 'djland_quick_access_lang' table.
 *
 * 
 *
 * @method     Oops_Model_QuickAccessLangQuery orderByIdQuickAccess($order = Criteria::ASC) Order by the id_quick_access column
 * @method     Oops_Model_QuickAccessLangQuery orderByIdLang($order = Criteria::ASC) Order by the id_lang column
 * @method     Oops_Model_QuickAccessLangQuery orderByName($order = Criteria::ASC) Order by the name column
 *
 * @method     Oops_Model_QuickAccessLangQuery groupByIdQuickAccess() Group by the id_quick_access column
 * @method     Oops_Model_QuickAccessLangQuery groupByIdLang() Group by the id_lang column
 * @method     Oops_Model_QuickAccessLangQuery groupByName() Group by the name column
 *
 * @method     Oops_Model_QuickAccessLangQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     Oops_Model_QuickAccessLangQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     Oops_Model_QuickAccessLangQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     Oops_Model_QuickAccessLang findOne(PropelPDO $con = null) Return the first Oops_Model_QuickAccessLang matching the query
 * @method     Oops_Model_QuickAccessLang findOneOrCreate(PropelPDO $con = null) Return the first Oops_Model_QuickAccessLang matching the query, or a new Oops_Model_QuickAccessLang object populated from the query conditions when no match is found
 *
 * @method     Oops_Model_QuickAccessLang findOneByIdQuickAccess(int $id_quick_access) Return the first Oops_Model_QuickAccessLang filtered by the id_quick_access column
 * @method     Oops_Model_QuickAccessLang findOneByIdLang(int $id_lang) Return the first Oops_Model_QuickAccessLang filtered by the id_lang column
 * @method     Oops_Model_QuickAccessLang findOneByName(string $name) Return the first Oops_Model_QuickAccessLang filtered by the name column
 *
 * @method     array findByIdQuickAccess(int $id_quick_access) Return Oops_Model_QuickAccessLang objects filtered by the id_quick_access column
 * @method     array findByIdLang(int $id_lang) Return Oops_Model_QuickAccessLang objects filtered by the id_lang column
 * @method     array findByName(string $name) Return Oops_Model_QuickAccessLang objects filtered by the name column
 *
 * @package    propel.generator.prestashop.om
 */
abstract class Oops_Model_Base_QuickAccessLangQuery extends ModelCriteria
{
	
	/**
	 * Initializes internal state of Oops_Model_Base_QuickAccessLangQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'prestashop', $modelName = 'Oops_Model_QuickAccessLang', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new Oops_Model_QuickAccessLangQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    Oops_Model_QuickAccessLangQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof Oops_Model_QuickAccessLangQuery) {
			return $criteria;
		}
		$query = new Oops_Model_QuickAccessLangQuery();
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
	 * $obj = $c->findPk(array(12, 34), $con);
	 * </code>
	 *
	 * @param     array[$id_quick_access, $id_lang] $key Primary key to use for the query
	 * @param     PropelPDO $con an optional connection object
	 *
	 * @return    Oops_Model_QuickAccessLang|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ($key === null) {
			return null;
		}
		if ((null !== ($obj = Oops_Model_QuickAccessLangPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
			// the object is alredy in the instance pool
			return $obj;
		}
		if ($con === null) {
			$con = Propel::getConnection(Oops_Model_QuickAccessLangPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
	 * @return    Oops_Model_QuickAccessLang A model object, or null if the key is not found
	 */
	protected function findPkSimple($key, $con)
	{
		$sql = 'SELECT `ID_QUICK_ACCESS`, `ID_LANG`, `NAME` FROM `djland_quick_access_lang` WHERE `ID_QUICK_ACCESS` = :p0 AND `ID_LANG` = :p1';
		try {
			$stmt = $con->prepare($sql);
			$stmt->bindValue(':p0', $key[0], PDO::PARAM_INT);
			$stmt->bindValue(':p1', $key[1], PDO::PARAM_INT);
			$stmt->execute();
		} catch (Exception $e) {
			Propel::log($e->getMessage(), Propel::LOG_ERR);
			throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
		}
		$obj = null;
		if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$obj = new Oops_Model_QuickAccessLang();
			$obj->hydrate($row);
			Oops_Model_QuickAccessLangPeer::addInstanceToPool($obj, serialize(array((string) $row[0], (string) $row[1])));
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
	 * @return    Oops_Model_QuickAccessLang|array|mixed the result, formatted by the current formatter
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
	 * $objs = $c->findPks(array(array(12, 56), array(832, 123), array(123, 456)), $con);
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
	 * @return    Oops_Model_QuickAccessLangQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		$this->addUsingAlias(Oops_Model_QuickAccessLangPeer::ID_QUICK_ACCESS, $key[0], Criteria::EQUAL);
		$this->addUsingAlias(Oops_Model_QuickAccessLangPeer::ID_LANG, $key[1], Criteria::EQUAL);

		return $this;
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    Oops_Model_QuickAccessLangQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		if (empty($keys)) {
			return $this->add(null, '1<>1', Criteria::CUSTOM);
		}
		foreach ($keys as $key) {
			$cton0 = $this->getNewCriterion(Oops_Model_QuickAccessLangPeer::ID_QUICK_ACCESS, $key[0], Criteria::EQUAL);
			$cton1 = $this->getNewCriterion(Oops_Model_QuickAccessLangPeer::ID_LANG, $key[1], Criteria::EQUAL);
			$cton0->addAnd($cton1);
			$this->addOr($cton0);
		}

		return $this;
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
	 * @return    Oops_Model_QuickAccessLangQuery The current query, for fluid interface
	 */
	public function filterByIdQuickAccess($idQuickAccess = null, $comparison = null)
	{
		if (is_array($idQuickAccess) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(Oops_Model_QuickAccessLangPeer::ID_QUICK_ACCESS, $idQuickAccess, $comparison);
	}

	/**
	 * Filter the query on the id_lang column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByIdLang(1234); // WHERE id_lang = 1234
	 * $query->filterByIdLang(array(12, 34)); // WHERE id_lang IN (12, 34)
	 * $query->filterByIdLang(array('min' => 12)); // WHERE id_lang > 12
	 * </code>
	 *
	 * @param     mixed $idLang The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_QuickAccessLangQuery The current query, for fluid interface
	 */
	public function filterByIdLang($idLang = null, $comparison = null)
	{
		if (is_array($idLang) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(Oops_Model_QuickAccessLangPeer::ID_LANG, $idLang, $comparison);
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
	 * @return    Oops_Model_QuickAccessLangQuery The current query, for fluid interface
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
		return $this->addUsingAlias(Oops_Model_QuickAccessLangPeer::NAME, $name, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     Oops_Model_QuickAccessLang $quickAccessLang Object to remove from the list of results
	 *
	 * @return    Oops_Model_QuickAccessLangQuery The current query, for fluid interface
	 */
	public function prune($quickAccessLang = null)
	{
		if ($quickAccessLang) {
			$this->addCond('pruneCond0', $this->getAliasedColName(Oops_Model_QuickAccessLangPeer::ID_QUICK_ACCESS), $quickAccessLang->getIdQuickAccess(), Criteria::NOT_EQUAL);
			$this->addCond('pruneCond1', $this->getAliasedColName(Oops_Model_QuickAccessLangPeer::ID_LANG), $quickAccessLang->getIdLang(), Criteria::NOT_EQUAL);
			$this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
		}

		return $this;
	}

} // Oops_Model_Base_QuickAccessLangQuery