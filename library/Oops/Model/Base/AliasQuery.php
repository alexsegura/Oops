<?php


/**
 * Base class that represents a query for the 'djland_alias' table.
 *
 * 
 *
 * @method     Oops_Model_AliasQuery orderByIdAlias($order = Criteria::ASC) Order by the id_alias column
 * @method     Oops_Model_AliasQuery orderByAlias($order = Criteria::ASC) Order by the alias column
 * @method     Oops_Model_AliasQuery orderBySearch($order = Criteria::ASC) Order by the search column
 * @method     Oops_Model_AliasQuery orderByActive($order = Criteria::ASC) Order by the active column
 *
 * @method     Oops_Model_AliasQuery groupByIdAlias() Group by the id_alias column
 * @method     Oops_Model_AliasQuery groupByAlias() Group by the alias column
 * @method     Oops_Model_AliasQuery groupBySearch() Group by the search column
 * @method     Oops_Model_AliasQuery groupByActive() Group by the active column
 *
 * @method     Oops_Model_AliasQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     Oops_Model_AliasQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     Oops_Model_AliasQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     Oops_Model_Alias findOne(PropelPDO $con = null) Return the first Oops_Model_Alias matching the query
 * @method     Oops_Model_Alias findOneOrCreate(PropelPDO $con = null) Return the first Oops_Model_Alias matching the query, or a new Oops_Model_Alias object populated from the query conditions when no match is found
 *
 * @method     Oops_Model_Alias findOneByIdAlias(int $id_alias) Return the first Oops_Model_Alias filtered by the id_alias column
 * @method     Oops_Model_Alias findOneByAlias(string $alias) Return the first Oops_Model_Alias filtered by the alias column
 * @method     Oops_Model_Alias findOneBySearch(string $search) Return the first Oops_Model_Alias filtered by the search column
 * @method     Oops_Model_Alias findOneByActive(boolean $active) Return the first Oops_Model_Alias filtered by the active column
 *
 * @method     array findByIdAlias(int $id_alias) Return Oops_Model_Alias objects filtered by the id_alias column
 * @method     array findByAlias(string $alias) Return Oops_Model_Alias objects filtered by the alias column
 * @method     array findBySearch(string $search) Return Oops_Model_Alias objects filtered by the search column
 * @method     array findByActive(boolean $active) Return Oops_Model_Alias objects filtered by the active column
 *
 * @package    propel.generator.prestashop.om
 */
abstract class Oops_Model_Base_AliasQuery extends ModelCriteria
{
	
	/**
	 * Initializes internal state of Oops_Model_Base_AliasQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'prestashop', $modelName = 'Oops_Model_Alias', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new Oops_Model_AliasQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    Oops_Model_AliasQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof Oops_Model_AliasQuery) {
			return $criteria;
		}
		$query = new Oops_Model_AliasQuery();
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
	 * @return    Oops_Model_Alias|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ($key === null) {
			return null;
		}
		if ((null !== ($obj = Oops_Model_AliasPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
			// the object is alredy in the instance pool
			return $obj;
		}
		if ($con === null) {
			$con = Propel::getConnection(Oops_Model_AliasPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
	 * @return    Oops_Model_Alias A model object, or null if the key is not found
	 */
	protected function findPkSimple($key, $con)
	{
		$sql = 'SELECT `ID_ALIAS`, `ALIAS`, `SEARCH`, `ACTIVE` FROM `djland_alias` WHERE `ID_ALIAS` = :p0';
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
			$obj = new Oops_Model_Alias();
			$obj->hydrate($row);
			Oops_Model_AliasPeer::addInstanceToPool($obj, (string) $row[0]);
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
	 * @return    Oops_Model_Alias|array|mixed the result, formatted by the current formatter
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
	 * @return    Oops_Model_AliasQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(Oops_Model_AliasPeer::ID_ALIAS, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    Oops_Model_AliasQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(Oops_Model_AliasPeer::ID_ALIAS, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id_alias column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByIdAlias(1234); // WHERE id_alias = 1234
	 * $query->filterByIdAlias(array(12, 34)); // WHERE id_alias IN (12, 34)
	 * $query->filterByIdAlias(array('min' => 12)); // WHERE id_alias > 12
	 * </code>
	 *
	 * @param     mixed $idAlias The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_AliasQuery The current query, for fluid interface
	 */
	public function filterByIdAlias($idAlias = null, $comparison = null)
	{
		if (is_array($idAlias) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(Oops_Model_AliasPeer::ID_ALIAS, $idAlias, $comparison);
	}

	/**
	 * Filter the query on the alias column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByAlias('fooValue');   // WHERE alias = 'fooValue'
	 * $query->filterByAlias('%fooValue%'); // WHERE alias LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $alias The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_AliasQuery The current query, for fluid interface
	 */
	public function filterByAlias($alias = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($alias)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $alias)) {
				$alias = str_replace('*', '%', $alias);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(Oops_Model_AliasPeer::ALIAS, $alias, $comparison);
	}

	/**
	 * Filter the query on the search column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterBySearch('fooValue');   // WHERE search = 'fooValue'
	 * $query->filterBySearch('%fooValue%'); // WHERE search LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $search The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_AliasQuery The current query, for fluid interface
	 */
	public function filterBySearch($search = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($search)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $search)) {
				$search = str_replace('*', '%', $search);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(Oops_Model_AliasPeer::SEARCH, $search, $comparison);
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
	 * @return    Oops_Model_AliasQuery The current query, for fluid interface
	 */
	public function filterByActive($active = null, $comparison = null)
	{
		if (is_string($active)) {
			$active = in_array(strtolower($active), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(Oops_Model_AliasPeer::ACTIVE, $active, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     Oops_Model_Alias $alias Object to remove from the list of results
	 *
	 * @return    Oops_Model_AliasQuery The current query, for fluid interface
	 */
	public function prune($alias = null)
	{
		if ($alias) {
			$this->addUsingAlias(Oops_Model_AliasPeer::ID_ALIAS, $alias->getIdAlias(), Criteria::NOT_EQUAL);
		}

		return $this;
	}

} // Oops_Model_Base_AliasQuery