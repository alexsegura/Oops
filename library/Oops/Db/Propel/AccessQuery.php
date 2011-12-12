<?php


/**
 * Base class that represents a query for the 'access' table.
 *
 * 
 *
 * @method     Oops_Db_AccessQuery orderByIdProfile($order = Criteria::ASC) Order by the id_profile column
 * @method     Oops_Db_AccessQuery orderByIdTab($order = Criteria::ASC) Order by the id_tab column
 * @method     Oops_Db_AccessQuery orderByView($order = Criteria::ASC) Order by the view column
 * @method     Oops_Db_AccessQuery orderByAdd($order = Criteria::ASC) Order by the add column
 * @method     Oops_Db_AccessQuery orderByEdit($order = Criteria::ASC) Order by the edit column
 * @method     Oops_Db_AccessQuery orderByDelete($order = Criteria::ASC) Order by the delete column
 *
 * @method     Oops_Db_AccessQuery groupByIdProfile() Group by the id_profile column
 * @method     Oops_Db_AccessQuery groupByIdTab() Group by the id_tab column
 * @method     Oops_Db_AccessQuery groupByView() Group by the view column
 * @method     Oops_Db_AccessQuery groupByAdd() Group by the add column
 * @method     Oops_Db_AccessQuery groupByEdit() Group by the edit column
 * @method     Oops_Db_AccessQuery groupByDelete() Group by the delete column
 *
 * @method     Oops_Db_AccessQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     Oops_Db_AccessQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     Oops_Db_AccessQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     Oops_Db_Access findOne(PropelPDO $con = null) Return the first Oops_Db_Access matching the query
 * @method     Oops_Db_Access findOneOrCreate(PropelPDO $con = null) Return the first Oops_Db_Access matching the query, or a new Oops_Db_Access object populated from the query conditions when no match is found
 *
 * @method     Oops_Db_Access findOneByIdProfile(int $id_profile) Return the first Oops_Db_Access filtered by the id_profile column
 * @method     Oops_Db_Access findOneByIdTab(int $id_tab) Return the first Oops_Db_Access filtered by the id_tab column
 * @method     Oops_Db_Access findOneByView(int $view) Return the first Oops_Db_Access filtered by the view column
 * @method     Oops_Db_Access findOneByAdd(int $add) Return the first Oops_Db_Access filtered by the add column
 * @method     Oops_Db_Access findOneByEdit(int $edit) Return the first Oops_Db_Access filtered by the edit column
 * @method     Oops_Db_Access findOneByDelete(int $delete) Return the first Oops_Db_Access filtered by the delete column
 *
 * @method     array findByIdProfile(int $id_profile) Return Oops_Db_Access objects filtered by the id_profile column
 * @method     array findByIdTab(int $id_tab) Return Oops_Db_Access objects filtered by the id_tab column
 * @method     array findByView(int $view) Return Oops_Db_Access objects filtered by the view column
 * @method     array findByAdd(int $add) Return Oops_Db_Access objects filtered by the add column
 * @method     array findByEdit(int $edit) Return Oops_Db_Access objects filtered by the edit column
 * @method     array findByDelete(int $delete) Return Oops_Db_Access objects filtered by the delete column
 *
 * @package    propel.generator.prestashop.om
 */
abstract class Oops_Db_Propel_AccessQuery extends ModelCriteria
{
	
	/**
	 * Initializes internal state of Oops_Db_Propel_AccessQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'prestashop', $modelName = 'Oops_Db_Access', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new Oops_Db_AccessQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    Oops_Db_AccessQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof Oops_Db_AccessQuery) {
			return $criteria;
		}
		$query = new Oops_Db_AccessQuery();
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
	 * @param     array[$id_profile, $id_tab] $key Primary key to use for the query
	 * @param     PropelPDO $con an optional connection object
	 *
	 * @return    Oops_Db_Access|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ($key === null) {
			return null;
		}
		if ((null !== ($obj = Oops_Db_AccessPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
			// the object is alredy in the instance pool
			return $obj;
		}
		if ($con === null) {
			$con = Propel::getConnection(Oops_Db_AccessPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
	 * @return    Oops_Db_Access A model object, or null if the key is not found
	 */
	protected function findPkSimple($key, $con)
	{
		$sql = 'SELECT `ID_PROFILE`, `ID_TAB`, `VIEW`, `ADD`, `EDIT`, `DELETE` FROM `' . _DB_PREFIX_ . 'access` WHERE `ID_PROFILE` = :p0 AND `ID_TAB` = :p1';
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
			$obj = new Oops_Db_Access();
			$obj->hydrate($row);
			Oops_Db_AccessPeer::addInstanceToPool($obj, serialize(array((string) $row[0], (string) $row[1])));
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
	 * @return    Oops_Db_Access|array|mixed the result, formatted by the current formatter
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
	 * @return    Oops_Db_AccessQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		$this->addUsingAlias(Oops_Db_AccessPeer::ID_PROFILE, $key[0], Criteria::EQUAL);
		$this->addUsingAlias(Oops_Db_AccessPeer::ID_TAB, $key[1], Criteria::EQUAL);

		return $this;
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    Oops_Db_AccessQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		if (empty($keys)) {
			return $this->add(null, '1<>1', Criteria::CUSTOM);
		}
		foreach ($keys as $key) {
			$cton0 = $this->getNewCriterion(Oops_Db_AccessPeer::ID_PROFILE, $key[0], Criteria::EQUAL);
			$cton1 = $this->getNewCriterion(Oops_Db_AccessPeer::ID_TAB, $key[1], Criteria::EQUAL);
			$cton0->addAnd($cton1);
			$this->addOr($cton0);
		}

		return $this;
	}

	/**
	 * Filter the query on the id_profile column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByIdProfile(1234); // WHERE id_profile = 1234
	 * $query->filterByIdProfile(array(12, 34)); // WHERE id_profile IN (12, 34)
	 * $query->filterByIdProfile(array('min' => 12)); // WHERE id_profile > 12
	 * </code>
	 *
	 * @param     mixed $idProfile The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Db_AccessQuery The current query, for fluid interface
	 */
	public function filterByIdProfile($idProfile = null, $comparison = null)
	{
		if (is_array($idProfile) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(Oops_Db_AccessPeer::ID_PROFILE, $idProfile, $comparison);
	}

	/**
	 * Filter the query on the id_tab column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByIdTab(1234); // WHERE id_tab = 1234
	 * $query->filterByIdTab(array(12, 34)); // WHERE id_tab IN (12, 34)
	 * $query->filterByIdTab(array('min' => 12)); // WHERE id_tab > 12
	 * </code>
	 *
	 * @param     mixed $idTab The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Db_AccessQuery The current query, for fluid interface
	 */
	public function filterByIdTab($idTab = null, $comparison = null)
	{
		if (is_array($idTab) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(Oops_Db_AccessPeer::ID_TAB, $idTab, $comparison);
	}

	/**
	 * Filter the query on the view column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByView(1234); // WHERE view = 1234
	 * $query->filterByView(array(12, 34)); // WHERE view IN (12, 34)
	 * $query->filterByView(array('min' => 12)); // WHERE view > 12
	 * </code>
	 *
	 * @param     mixed $view The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Db_AccessQuery The current query, for fluid interface
	 */
	public function filterByView($view = null, $comparison = null)
	{
		if (is_array($view)) {
			$useMinMax = false;
			if (isset($view['min'])) {
				$this->addUsingAlias(Oops_Db_AccessPeer::VIEW, $view['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($view['max'])) {
				$this->addUsingAlias(Oops_Db_AccessPeer::VIEW, $view['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Db_AccessPeer::VIEW, $view, $comparison);
	}

	/**
	 * Filter the query on the add column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByAdd(1234); // WHERE add = 1234
	 * $query->filterByAdd(array(12, 34)); // WHERE add IN (12, 34)
	 * $query->filterByAdd(array('min' => 12)); // WHERE add > 12
	 * </code>
	 *
	 * @param     mixed $add The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Db_AccessQuery The current query, for fluid interface
	 */
	public function filterByAdd($add = null, $comparison = null)
	{
		if (is_array($add)) {
			$useMinMax = false;
			if (isset($add['min'])) {
				$this->addUsingAlias(Oops_Db_AccessPeer::ADD, $add['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($add['max'])) {
				$this->addUsingAlias(Oops_Db_AccessPeer::ADD, $add['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Db_AccessPeer::ADD, $add, $comparison);
	}

	/**
	 * Filter the query on the edit column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByEdit(1234); // WHERE edit = 1234
	 * $query->filterByEdit(array(12, 34)); // WHERE edit IN (12, 34)
	 * $query->filterByEdit(array('min' => 12)); // WHERE edit > 12
	 * </code>
	 *
	 * @param     mixed $edit The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Db_AccessQuery The current query, for fluid interface
	 */
	public function filterByEdit($edit = null, $comparison = null)
	{
		if (is_array($edit)) {
			$useMinMax = false;
			if (isset($edit['min'])) {
				$this->addUsingAlias(Oops_Db_AccessPeer::EDIT, $edit['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($edit['max'])) {
				$this->addUsingAlias(Oops_Db_AccessPeer::EDIT, $edit['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Db_AccessPeer::EDIT, $edit, $comparison);
	}

	/**
	 * Filter the query on the delete column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByDelete(1234); // WHERE delete = 1234
	 * $query->filterByDelete(array(12, 34)); // WHERE delete IN (12, 34)
	 * $query->filterByDelete(array('min' => 12)); // WHERE delete > 12
	 * </code>
	 *
	 * @param     mixed $delete The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Db_AccessQuery The current query, for fluid interface
	 */
	public function filterByDelete($delete = null, $comparison = null)
	{
		if (is_array($delete)) {
			$useMinMax = false;
			if (isset($delete['min'])) {
				$this->addUsingAlias(Oops_Db_AccessPeer::DELETE, $delete['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($delete['max'])) {
				$this->addUsingAlias(Oops_Db_AccessPeer::DELETE, $delete['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Db_AccessPeer::DELETE, $delete, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     Oops_Db_Access $access Object to remove from the list of results
	 *
	 * @return    Oops_Db_AccessQuery The current query, for fluid interface
	 */
	public function prune($access = null)
	{
		if ($access) {
			$this->addCond('pruneCond0', $this->getAliasedColName(Oops_Db_AccessPeer::ID_PROFILE), $access->getIdProfile(), Criteria::NOT_EQUAL);
			$this->addCond('pruneCond1', $this->getAliasedColName(Oops_Db_AccessPeer::ID_TAB), $access->getIdTab(), Criteria::NOT_EQUAL);
			$this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
		}

		return $this;
	}

} // Oops_Db_Propel_AccessQuery