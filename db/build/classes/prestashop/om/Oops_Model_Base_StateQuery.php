<?php


/**
 * Base class that represents a query for the '' . _DB_PREFIX_ . 'djland_state' table.
 *
 * 
 *
 * @method     Oops_Model_StateQuery orderByIdState($order = Criteria::ASC) Order by the id_state column
 * @method     Oops_Model_StateQuery orderByIdCountry($order = Criteria::ASC) Order by the id_country column
 * @method     Oops_Model_StateQuery orderByIdZone($order = Criteria::ASC) Order by the id_zone column
 * @method     Oops_Model_StateQuery orderByName($order = Criteria::ASC) Order by the name column
 * @method     Oops_Model_StateQuery orderByIsoCode($order = Criteria::ASC) Order by the iso_code column
 * @method     Oops_Model_StateQuery orderByTaxBehavior($order = Criteria::ASC) Order by the tax_behavior column
 * @method     Oops_Model_StateQuery orderByActive($order = Criteria::ASC) Order by the active column
 *
 * @method     Oops_Model_StateQuery groupByIdState() Group by the id_state column
 * @method     Oops_Model_StateQuery groupByIdCountry() Group by the id_country column
 * @method     Oops_Model_StateQuery groupByIdZone() Group by the id_zone column
 * @method     Oops_Model_StateQuery groupByName() Group by the name column
 * @method     Oops_Model_StateQuery groupByIsoCode() Group by the iso_code column
 * @method     Oops_Model_StateQuery groupByTaxBehavior() Group by the tax_behavior column
 * @method     Oops_Model_StateQuery groupByActive() Group by the active column
 *
 * @method     Oops_Model_StateQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     Oops_Model_StateQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     Oops_Model_StateQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     Oops_Model_State findOne(PropelPDO $con = null) Return the first Oops_Model_State matching the query
 * @method     Oops_Model_State findOneOrCreate(PropelPDO $con = null) Return the first Oops_Model_State matching the query, or a new Oops_Model_State object populated from the query conditions when no match is found
 *
 * @method     Oops_Model_State findOneByIdState(int $id_state) Return the first Oops_Model_State filtered by the id_state column
 * @method     Oops_Model_State findOneByIdCountry(int $id_country) Return the first Oops_Model_State filtered by the id_country column
 * @method     Oops_Model_State findOneByIdZone(int $id_zone) Return the first Oops_Model_State filtered by the id_zone column
 * @method     Oops_Model_State findOneByName(string $name) Return the first Oops_Model_State filtered by the name column
 * @method     Oops_Model_State findOneByIsoCode(string $iso_code) Return the first Oops_Model_State filtered by the iso_code column
 * @method     Oops_Model_State findOneByTaxBehavior(int $tax_behavior) Return the first Oops_Model_State filtered by the tax_behavior column
 * @method     Oops_Model_State findOneByActive(boolean $active) Return the first Oops_Model_State filtered by the active column
 *
 * @method     array findByIdState(int $id_state) Return Oops_Model_State objects filtered by the id_state column
 * @method     array findByIdCountry(int $id_country) Return Oops_Model_State objects filtered by the id_country column
 * @method     array findByIdZone(int $id_zone) Return Oops_Model_State objects filtered by the id_zone column
 * @method     array findByName(string $name) Return Oops_Model_State objects filtered by the name column
 * @method     array findByIsoCode(string $iso_code) Return Oops_Model_State objects filtered by the iso_code column
 * @method     array findByTaxBehavior(int $tax_behavior) Return Oops_Model_State objects filtered by the tax_behavior column
 * @method     array findByActive(boolean $active) Return Oops_Model_State objects filtered by the active column
 *
 * @package    propel.generator.prestashop.om
 */
abstract class Oops_Model_Base_StateQuery extends ModelCriteria
{
	
	/**
	 * Initializes internal state of Oops_Model_Base_StateQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'prestashop', $modelName = 'Oops_Model_State', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new Oops_Model_StateQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    Oops_Model_StateQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof Oops_Model_StateQuery) {
			return $criteria;
		}
		$query = new Oops_Model_StateQuery();
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
	 * @return    Oops_Model_State|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ($key === null) {
			return null;
		}
		if ((null !== ($obj = Oops_Model_StatePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
			// the object is alredy in the instance pool
			return $obj;
		}
		if ($con === null) {
			$con = Propel::getConnection(Oops_Model_StatePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
	 * @return    Oops_Model_State A model object, or null if the key is not found
	 */
	protected function findPkSimple($key, $con)
	{
		$sql = 'SELECT `ID_STATE`, `ID_COUNTRY`, `ID_ZONE`, `NAME`, `ISO_CODE`, `TAX_BEHAVIOR`, `ACTIVE` FROM `' . _DB_PREFIX_ . 'djland_state` WHERE `ID_STATE` = :p0';
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
			$obj = new Oops_Model_State();
			$obj->hydrate($row);
			Oops_Model_StatePeer::addInstanceToPool($obj, (string) $row[0]);
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
	 * @return    Oops_Model_State|array|mixed the result, formatted by the current formatter
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
	 * @return    Oops_Model_StateQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(Oops_Model_StatePeer::ID_STATE, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    Oops_Model_StateQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(Oops_Model_StatePeer::ID_STATE, $keys, Criteria::IN);
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
	 * @return    Oops_Model_StateQuery The current query, for fluid interface
	 */
	public function filterByIdState($idState = null, $comparison = null)
	{
		if (is_array($idState) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(Oops_Model_StatePeer::ID_STATE, $idState, $comparison);
	}

	/**
	 * Filter the query on the id_country column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByIdCountry(1234); // WHERE id_country = 1234
	 * $query->filterByIdCountry(array(12, 34)); // WHERE id_country IN (12, 34)
	 * $query->filterByIdCountry(array('min' => 12)); // WHERE id_country > 12
	 * </code>
	 *
	 * @param     mixed $idCountry The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_StateQuery The current query, for fluid interface
	 */
	public function filterByIdCountry($idCountry = null, $comparison = null)
	{
		if (is_array($idCountry)) {
			$useMinMax = false;
			if (isset($idCountry['min'])) {
				$this->addUsingAlias(Oops_Model_StatePeer::ID_COUNTRY, $idCountry['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($idCountry['max'])) {
				$this->addUsingAlias(Oops_Model_StatePeer::ID_COUNTRY, $idCountry['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_StatePeer::ID_COUNTRY, $idCountry, $comparison);
	}

	/**
	 * Filter the query on the id_zone column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByIdZone(1234); // WHERE id_zone = 1234
	 * $query->filterByIdZone(array(12, 34)); // WHERE id_zone IN (12, 34)
	 * $query->filterByIdZone(array('min' => 12)); // WHERE id_zone > 12
	 * </code>
	 *
	 * @param     mixed $idZone The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_StateQuery The current query, for fluid interface
	 */
	public function filterByIdZone($idZone = null, $comparison = null)
	{
		if (is_array($idZone)) {
			$useMinMax = false;
			if (isset($idZone['min'])) {
				$this->addUsingAlias(Oops_Model_StatePeer::ID_ZONE, $idZone['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($idZone['max'])) {
				$this->addUsingAlias(Oops_Model_StatePeer::ID_ZONE, $idZone['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_StatePeer::ID_ZONE, $idZone, $comparison);
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
	 * @return    Oops_Model_StateQuery The current query, for fluid interface
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
		return $this->addUsingAlias(Oops_Model_StatePeer::NAME, $name, $comparison);
	}

	/**
	 * Filter the query on the iso_code column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByIsoCode('fooValue');   // WHERE iso_code = 'fooValue'
	 * $query->filterByIsoCode('%fooValue%'); // WHERE iso_code LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $isoCode The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_StateQuery The current query, for fluid interface
	 */
	public function filterByIsoCode($isoCode = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($isoCode)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $isoCode)) {
				$isoCode = str_replace('*', '%', $isoCode);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(Oops_Model_StatePeer::ISO_CODE, $isoCode, $comparison);
	}

	/**
	 * Filter the query on the tax_behavior column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByTaxBehavior(1234); // WHERE tax_behavior = 1234
	 * $query->filterByTaxBehavior(array(12, 34)); // WHERE tax_behavior IN (12, 34)
	 * $query->filterByTaxBehavior(array('min' => 12)); // WHERE tax_behavior > 12
	 * </code>
	 *
	 * @param     mixed $taxBehavior The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_StateQuery The current query, for fluid interface
	 */
	public function filterByTaxBehavior($taxBehavior = null, $comparison = null)
	{
		if (is_array($taxBehavior)) {
			$useMinMax = false;
			if (isset($taxBehavior['min'])) {
				$this->addUsingAlias(Oops_Model_StatePeer::TAX_BEHAVIOR, $taxBehavior['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($taxBehavior['max'])) {
				$this->addUsingAlias(Oops_Model_StatePeer::TAX_BEHAVIOR, $taxBehavior['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_StatePeer::TAX_BEHAVIOR, $taxBehavior, $comparison);
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
	 * @return    Oops_Model_StateQuery The current query, for fluid interface
	 */
	public function filterByActive($active = null, $comparison = null)
	{
		if (is_string($active)) {
			$active = in_array(strtolower($active), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(Oops_Model_StatePeer::ACTIVE, $active, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     Oops_Model_State $state Object to remove from the list of results
	 *
	 * @return    Oops_Model_StateQuery The current query, for fluid interface
	 */
	public function prune($state = null)
	{
		if ($state) {
			$this->addUsingAlias(Oops_Model_StatePeer::ID_STATE, $state->getIdState(), Criteria::NOT_EQUAL);
		}

		return $this;
	}

} // Oops_Model_Base_StateQuery