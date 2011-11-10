<?php


/**
 * Base class that represents a query for the 'county' table.
 *
 * 
 *
 * @method     Oops_Model_CountyQuery orderByIdCounty($order = Criteria::ASC) Order by the id_county column
 * @method     Oops_Model_CountyQuery orderByName($order = Criteria::ASC) Order by the name column
 * @method     Oops_Model_CountyQuery orderByIdState($order = Criteria::ASC) Order by the id_state column
 * @method     Oops_Model_CountyQuery orderByActive($order = Criteria::ASC) Order by the active column
 *
 * @method     Oops_Model_CountyQuery groupByIdCounty() Group by the id_county column
 * @method     Oops_Model_CountyQuery groupByName() Group by the name column
 * @method     Oops_Model_CountyQuery groupByIdState() Group by the id_state column
 * @method     Oops_Model_CountyQuery groupByActive() Group by the active column
 *
 * @method     Oops_Model_CountyQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     Oops_Model_CountyQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     Oops_Model_CountyQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     Oops_Model_County findOne(PropelPDO $con = null) Return the first Oops_Model_County matching the query
 * @method     Oops_Model_County findOneOrCreate(PropelPDO $con = null) Return the first Oops_Model_County matching the query, or a new Oops_Model_County object populated from the query conditions when no match is found
 *
 * @method     Oops_Model_County findOneByIdCounty(int $id_county) Return the first Oops_Model_County filtered by the id_county column
 * @method     Oops_Model_County findOneByName(string $name) Return the first Oops_Model_County filtered by the name column
 * @method     Oops_Model_County findOneByIdState(int $id_state) Return the first Oops_Model_County filtered by the id_state column
 * @method     Oops_Model_County findOneByActive(boolean $active) Return the first Oops_Model_County filtered by the active column
 *
 * @method     array findByIdCounty(int $id_county) Return Oops_Model_County objects filtered by the id_county column
 * @method     array findByName(string $name) Return Oops_Model_County objects filtered by the name column
 * @method     array findByIdState(int $id_state) Return Oops_Model_County objects filtered by the id_state column
 * @method     array findByActive(boolean $active) Return Oops_Model_County objects filtered by the active column
 *
 * @package    propel.generator.prestashop.om
 */
abstract class Oops_Model_Base_CountyQuery extends ModelCriteria
{
	
	/**
	 * Initializes internal state of Oops_Model_Base_CountyQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'prestashop', $modelName = 'Oops_Model_County', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new Oops_Model_CountyQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    Oops_Model_CountyQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof Oops_Model_CountyQuery) {
			return $criteria;
		}
		$query = new Oops_Model_CountyQuery();
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
	 * @return    Oops_Model_County|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ($key === null) {
			return null;
		}
		if ((null !== ($obj = Oops_Model_CountyPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
			// the object is alredy in the instance pool
			return $obj;
		}
		if ($con === null) {
			$con = Propel::getConnection(Oops_Model_CountyPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
	 * @return    Oops_Model_County A model object, or null if the key is not found
	 */
	protected function findPkSimple($key, $con)
	{
		$sql = 'SELECT `ID_COUNTY`, `NAME`, `ID_STATE`, `ACTIVE` FROM `' . _DB_PREFIX_ . 'county` WHERE `ID_COUNTY` = :p0';
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
			$obj = new Oops_Model_County();
			$obj->hydrate($row);
			Oops_Model_CountyPeer::addInstanceToPool($obj, (string) $row[0]);
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
	 * @return    Oops_Model_County|array|mixed the result, formatted by the current formatter
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
	 * @return    Oops_Model_CountyQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(Oops_Model_CountyPeer::ID_COUNTY, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    Oops_Model_CountyQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(Oops_Model_CountyPeer::ID_COUNTY, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id_county column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByIdCounty(1234); // WHERE id_county = 1234
	 * $query->filterByIdCounty(array(12, 34)); // WHERE id_county IN (12, 34)
	 * $query->filterByIdCounty(array('min' => 12)); // WHERE id_county > 12
	 * </code>
	 *
	 * @param     mixed $idCounty The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_CountyQuery The current query, for fluid interface
	 */
	public function filterByIdCounty($idCounty = null, $comparison = null)
	{
		if (is_array($idCounty) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(Oops_Model_CountyPeer::ID_COUNTY, $idCounty, $comparison);
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
	 * @return    Oops_Model_CountyQuery The current query, for fluid interface
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
		return $this->addUsingAlias(Oops_Model_CountyPeer::NAME, $name, $comparison);
	}

	/**
	 * Filter the query on the id_state column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByIdState(1234); // WHERE id_state = 1234
	 * $query->filterByIdState(array(12, 34)); // WHERE id_state IN (12, 34)
	 * $query->filterByIdState(array('min' => 12)); // WHERE id_state > 12
	 * </code>
	 *
	 * @param     mixed $idState The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_CountyQuery The current query, for fluid interface
	 */
	public function filterByIdState($idState = null, $comparison = null)
	{
		if (is_array($idState)) {
			$useMinMax = false;
			if (isset($idState['min'])) {
				$this->addUsingAlias(Oops_Model_CountyPeer::ID_STATE, $idState['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($idState['max'])) {
				$this->addUsingAlias(Oops_Model_CountyPeer::ID_STATE, $idState['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_CountyPeer::ID_STATE, $idState, $comparison);
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
	 * @return    Oops_Model_CountyQuery The current query, for fluid interface
	 */
	public function filterByActive($active = null, $comparison = null)
	{
		if (is_string($active)) {
			$active = in_array(strtolower($active), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(Oops_Model_CountyPeer::ACTIVE, $active, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     Oops_Model_County $county Object to remove from the list of results
	 *
	 * @return    Oops_Model_CountyQuery The current query, for fluid interface
	 */
	public function prune($county = null)
	{
		if ($county) {
			$this->addUsingAlias(Oops_Model_CountyPeer::ID_COUNTY, $county->getIdCounty(), Criteria::NOT_EQUAL);
		}

		return $this;
	}

} // Oops_Model_Base_CountyQuery