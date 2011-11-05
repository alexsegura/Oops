<?php


/**
 * Base class that represents a query for the 'djland_configuration' table.
 *
 * 
 *
 * @method     Oops_Model_ConfigurationQuery orderByIdConfiguration($order = Criteria::ASC) Order by the id_configuration column
 * @method     Oops_Model_ConfigurationQuery orderByName($order = Criteria::ASC) Order by the name column
 * @method     Oops_Model_ConfigurationQuery orderByValue($order = Criteria::ASC) Order by the value column
 * @method     Oops_Model_ConfigurationQuery orderByDateAdd($order = Criteria::ASC) Order by the date_add column
 * @method     Oops_Model_ConfigurationQuery orderByDateUpd($order = Criteria::ASC) Order by the date_upd column
 *
 * @method     Oops_Model_ConfigurationQuery groupByIdConfiguration() Group by the id_configuration column
 * @method     Oops_Model_ConfigurationQuery groupByName() Group by the name column
 * @method     Oops_Model_ConfigurationQuery groupByValue() Group by the value column
 * @method     Oops_Model_ConfigurationQuery groupByDateAdd() Group by the date_add column
 * @method     Oops_Model_ConfigurationQuery groupByDateUpd() Group by the date_upd column
 *
 * @method     Oops_Model_ConfigurationQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     Oops_Model_ConfigurationQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     Oops_Model_ConfigurationQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     Oops_Model_Configuration findOne(PropelPDO $con = null) Return the first Oops_Model_Configuration matching the query
 * @method     Oops_Model_Configuration findOneOrCreate(PropelPDO $con = null) Return the first Oops_Model_Configuration matching the query, or a new Oops_Model_Configuration object populated from the query conditions when no match is found
 *
 * @method     Oops_Model_Configuration findOneByIdConfiguration(int $id_configuration) Return the first Oops_Model_Configuration filtered by the id_configuration column
 * @method     Oops_Model_Configuration findOneByName(string $name) Return the first Oops_Model_Configuration filtered by the name column
 * @method     Oops_Model_Configuration findOneByValue(string $value) Return the first Oops_Model_Configuration filtered by the value column
 * @method     Oops_Model_Configuration findOneByDateAdd(string $date_add) Return the first Oops_Model_Configuration filtered by the date_add column
 * @method     Oops_Model_Configuration findOneByDateUpd(string $date_upd) Return the first Oops_Model_Configuration filtered by the date_upd column
 *
 * @method     array findByIdConfiguration(int $id_configuration) Return Oops_Model_Configuration objects filtered by the id_configuration column
 * @method     array findByName(string $name) Return Oops_Model_Configuration objects filtered by the name column
 * @method     array findByValue(string $value) Return Oops_Model_Configuration objects filtered by the value column
 * @method     array findByDateAdd(string $date_add) Return Oops_Model_Configuration objects filtered by the date_add column
 * @method     array findByDateUpd(string $date_upd) Return Oops_Model_Configuration objects filtered by the date_upd column
 *
 * @package    propel.generator.prestashop.om
 */
abstract class Oops_Model_Base_ConfigurationQuery extends ModelCriteria
{
	
	/**
	 * Initializes internal state of Oops_Model_Base_ConfigurationQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'prestashop', $modelName = 'Oops_Model_Configuration', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new Oops_Model_ConfigurationQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    Oops_Model_ConfigurationQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof Oops_Model_ConfigurationQuery) {
			return $criteria;
		}
		$query = new Oops_Model_ConfigurationQuery();
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
	 * @return    Oops_Model_Configuration|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ($key === null) {
			return null;
		}
		if ((null !== ($obj = Oops_Model_ConfigurationPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
			// the object is alredy in the instance pool
			return $obj;
		}
		if ($con === null) {
			$con = Propel::getConnection(Oops_Model_ConfigurationPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
	 * @return    Oops_Model_Configuration A model object, or null if the key is not found
	 */
	protected function findPkSimple($key, $con)
	{
		$sql = 'SELECT `ID_CONFIGURATION`, `NAME`, `VALUE`, `DATE_ADD`, `DATE_UPD` FROM `djland_configuration` WHERE `ID_CONFIGURATION` = :p0';
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
			$obj = new Oops_Model_Configuration();
			$obj->hydrate($row);
			Oops_Model_ConfigurationPeer::addInstanceToPool($obj, (string) $row[0]);
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
	 * @return    Oops_Model_Configuration|array|mixed the result, formatted by the current formatter
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
	 * @return    Oops_Model_ConfigurationQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(Oops_Model_ConfigurationPeer::ID_CONFIGURATION, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    Oops_Model_ConfigurationQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(Oops_Model_ConfigurationPeer::ID_CONFIGURATION, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id_configuration column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByIdConfiguration(1234); // WHERE id_configuration = 1234
	 * $query->filterByIdConfiguration(array(12, 34)); // WHERE id_configuration IN (12, 34)
	 * $query->filterByIdConfiguration(array('min' => 12)); // WHERE id_configuration > 12
	 * </code>
	 *
	 * @param     mixed $idConfiguration The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_ConfigurationQuery The current query, for fluid interface
	 */
	public function filterByIdConfiguration($idConfiguration = null, $comparison = null)
	{
		if (is_array($idConfiguration) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(Oops_Model_ConfigurationPeer::ID_CONFIGURATION, $idConfiguration, $comparison);
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
	 * @return    Oops_Model_ConfigurationQuery The current query, for fluid interface
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
		return $this->addUsingAlias(Oops_Model_ConfigurationPeer::NAME, $name, $comparison);
	}

	/**
	 * Filter the query on the value column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByValue('fooValue');   // WHERE value = 'fooValue'
	 * $query->filterByValue('%fooValue%'); // WHERE value LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $value The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_ConfigurationQuery The current query, for fluid interface
	 */
	public function filterByValue($value = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($value)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $value)) {
				$value = str_replace('*', '%', $value);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(Oops_Model_ConfigurationPeer::VALUE, $value, $comparison);
	}

	/**
	 * Filter the query on the date_add column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByDateAdd('2011-03-14'); // WHERE date_add = '2011-03-14'
	 * $query->filterByDateAdd('now'); // WHERE date_add = '2011-03-14'
	 * $query->filterByDateAdd(array('max' => 'yesterday')); // WHERE date_add > '2011-03-13'
	 * </code>
	 *
	 * @param     mixed $dateAdd The value to use as filter.
	 *              Values can be integers (unix timestamps), DateTime objects, or strings.
	 *              Empty strings are treated as NULL.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_ConfigurationQuery The current query, for fluid interface
	 */
	public function filterByDateAdd($dateAdd = null, $comparison = null)
	{
		if (is_array($dateAdd)) {
			$useMinMax = false;
			if (isset($dateAdd['min'])) {
				$this->addUsingAlias(Oops_Model_ConfigurationPeer::DATE_ADD, $dateAdd['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($dateAdd['max'])) {
				$this->addUsingAlias(Oops_Model_ConfigurationPeer::DATE_ADD, $dateAdd['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_ConfigurationPeer::DATE_ADD, $dateAdd, $comparison);
	}

	/**
	 * Filter the query on the date_upd column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByDateUpd('2011-03-14'); // WHERE date_upd = '2011-03-14'
	 * $query->filterByDateUpd('now'); // WHERE date_upd = '2011-03-14'
	 * $query->filterByDateUpd(array('max' => 'yesterday')); // WHERE date_upd > '2011-03-13'
	 * </code>
	 *
	 * @param     mixed $dateUpd The value to use as filter.
	 *              Values can be integers (unix timestamps), DateTime objects, or strings.
	 *              Empty strings are treated as NULL.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_ConfigurationQuery The current query, for fluid interface
	 */
	public function filterByDateUpd($dateUpd = null, $comparison = null)
	{
		if (is_array($dateUpd)) {
			$useMinMax = false;
			if (isset($dateUpd['min'])) {
				$this->addUsingAlias(Oops_Model_ConfigurationPeer::DATE_UPD, $dateUpd['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($dateUpd['max'])) {
				$this->addUsingAlias(Oops_Model_ConfigurationPeer::DATE_UPD, $dateUpd['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_ConfigurationPeer::DATE_UPD, $dateUpd, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     Oops_Model_Configuration $configuration Object to remove from the list of results
	 *
	 * @return    Oops_Model_ConfigurationQuery The current query, for fluid interface
	 */
	public function prune($configuration = null)
	{
		if ($configuration) {
			$this->addUsingAlias(Oops_Model_ConfigurationPeer::ID_CONFIGURATION, $configuration->getIdConfiguration(), Criteria::NOT_EQUAL);
		}

		return $this;
	}

} // Oops_Model_Base_ConfigurationQuery