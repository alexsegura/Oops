<?php


/**
 * Base class that represents a query for the 'search_engine' table.
 *
 * 
 *
 * @method     Oops_Model_SearchEngineQuery orderByIdSearchEngine($order = Criteria::ASC) Order by the id_search_engine column
 * @method     Oops_Model_SearchEngineQuery orderByServer($order = Criteria::ASC) Order by the server column
 * @method     Oops_Model_SearchEngineQuery orderByGetvar($order = Criteria::ASC) Order by the getvar column
 *
 * @method     Oops_Model_SearchEngineQuery groupByIdSearchEngine() Group by the id_search_engine column
 * @method     Oops_Model_SearchEngineQuery groupByServer() Group by the server column
 * @method     Oops_Model_SearchEngineQuery groupByGetvar() Group by the getvar column
 *
 * @method     Oops_Model_SearchEngineQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     Oops_Model_SearchEngineQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     Oops_Model_SearchEngineQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     Oops_Model_SearchEngine findOne(PropelPDO $con = null) Return the first Oops_Model_SearchEngine matching the query
 * @method     Oops_Model_SearchEngine findOneOrCreate(PropelPDO $con = null) Return the first Oops_Model_SearchEngine matching the query, or a new Oops_Model_SearchEngine object populated from the query conditions when no match is found
 *
 * @method     Oops_Model_SearchEngine findOneByIdSearchEngine(int $id_search_engine) Return the first Oops_Model_SearchEngine filtered by the id_search_engine column
 * @method     Oops_Model_SearchEngine findOneByServer(string $server) Return the first Oops_Model_SearchEngine filtered by the server column
 * @method     Oops_Model_SearchEngine findOneByGetvar(string $getvar) Return the first Oops_Model_SearchEngine filtered by the getvar column
 *
 * @method     array findByIdSearchEngine(int $id_search_engine) Return Oops_Model_SearchEngine objects filtered by the id_search_engine column
 * @method     array findByServer(string $server) Return Oops_Model_SearchEngine objects filtered by the server column
 * @method     array findByGetvar(string $getvar) Return Oops_Model_SearchEngine objects filtered by the getvar column
 *
 * @package    propel.generator.prestashop.om
 */
abstract class Oops_Model_Base_SearchEngineQuery extends ModelCriteria
{
	
	/**
	 * Initializes internal state of Oops_Model_Base_SearchEngineQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'prestashop', $modelName = 'Oops_Model_SearchEngine', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new Oops_Model_SearchEngineQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    Oops_Model_SearchEngineQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof Oops_Model_SearchEngineQuery) {
			return $criteria;
		}
		$query = new Oops_Model_SearchEngineQuery();
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
	 * @return    Oops_Model_SearchEngine|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ($key === null) {
			return null;
		}
		if ((null !== ($obj = Oops_Model_SearchEnginePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
			// the object is alredy in the instance pool
			return $obj;
		}
		if ($con === null) {
			$con = Propel::getConnection(Oops_Model_SearchEnginePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
	 * @return    Oops_Model_SearchEngine A model object, or null if the key is not found
	 */
	protected function findPkSimple($key, $con)
	{
		$sql = 'SELECT `ID_SEARCH_ENGINE`, `SERVER`, `GETVAR` FROM `' . _DB_PREFIX_ . 'search_engine` WHERE `ID_SEARCH_ENGINE` = :p0';
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
			$obj = new Oops_Model_SearchEngine();
			$obj->hydrate($row);
			Oops_Model_SearchEnginePeer::addInstanceToPool($obj, (string) $row[0]);
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
	 * @return    Oops_Model_SearchEngine|array|mixed the result, formatted by the current formatter
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
	 * @return    Oops_Model_SearchEngineQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(Oops_Model_SearchEnginePeer::ID_SEARCH_ENGINE, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    Oops_Model_SearchEngineQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(Oops_Model_SearchEnginePeer::ID_SEARCH_ENGINE, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id_search_engine column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByIdSearchEngine(1234); // WHERE id_search_engine = 1234
	 * $query->filterByIdSearchEngine(array(12, 34)); // WHERE id_search_engine IN (12, 34)
	 * $query->filterByIdSearchEngine(array('min' => 12)); // WHERE id_search_engine > 12
	 * </code>
	 *
	 * @param     mixed $idSearchEngine The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_SearchEngineQuery The current query, for fluid interface
	 */
	public function filterByIdSearchEngine($idSearchEngine = null, $comparison = null)
	{
		if (is_array($idSearchEngine) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(Oops_Model_SearchEnginePeer::ID_SEARCH_ENGINE, $idSearchEngine, $comparison);
	}

	/**
	 * Filter the query on the server column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByServer('fooValue');   // WHERE server = 'fooValue'
	 * $query->filterByServer('%fooValue%'); // WHERE server LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $server The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_SearchEngineQuery The current query, for fluid interface
	 */
	public function filterByServer($server = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($server)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $server)) {
				$server = str_replace('*', '%', $server);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(Oops_Model_SearchEnginePeer::SERVER, $server, $comparison);
	}

	/**
	 * Filter the query on the getvar column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByGetvar('fooValue');   // WHERE getvar = 'fooValue'
	 * $query->filterByGetvar('%fooValue%'); // WHERE getvar LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $getvar The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_SearchEngineQuery The current query, for fluid interface
	 */
	public function filterByGetvar($getvar = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($getvar)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $getvar)) {
				$getvar = str_replace('*', '%', $getvar);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(Oops_Model_SearchEnginePeer::GETVAR, $getvar, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     Oops_Model_SearchEngine $searchEngine Object to remove from the list of results
	 *
	 * @return    Oops_Model_SearchEngineQuery The current query, for fluid interface
	 */
	public function prune($searchEngine = null)
	{
		if ($searchEngine) {
			$this->addUsingAlias(Oops_Model_SearchEnginePeer::ID_SEARCH_ENGINE, $searchEngine->getIdSearchEngine(), Criteria::NOT_EQUAL);
		}

		return $this;
	}

} // Oops_Model_Base_SearchEngineQuery