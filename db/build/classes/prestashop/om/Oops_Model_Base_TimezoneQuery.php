<?php


/**
 * Base class that represents a query for the '' . _DB_PREFIX_ . 'djland_timezone' table.
 *
 * 
 *
 * @method     Oops_Model_TimezoneQuery orderByIdTimezone($order = Criteria::ASC) Order by the id_timezone column
 * @method     Oops_Model_TimezoneQuery orderByName($order = Criteria::ASC) Order by the name column
 *
 * @method     Oops_Model_TimezoneQuery groupByIdTimezone() Group by the id_timezone column
 * @method     Oops_Model_TimezoneQuery groupByName() Group by the name column
 *
 * @method     Oops_Model_TimezoneQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     Oops_Model_TimezoneQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     Oops_Model_TimezoneQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     Oops_Model_Timezone findOne(PropelPDO $con = null) Return the first Oops_Model_Timezone matching the query
 * @method     Oops_Model_Timezone findOneOrCreate(PropelPDO $con = null) Return the first Oops_Model_Timezone matching the query, or a new Oops_Model_Timezone object populated from the query conditions when no match is found
 *
 * @method     Oops_Model_Timezone findOneByIdTimezone(int $id_timezone) Return the first Oops_Model_Timezone filtered by the id_timezone column
 * @method     Oops_Model_Timezone findOneByName(string $name) Return the first Oops_Model_Timezone filtered by the name column
 *
 * @method     array findByIdTimezone(int $id_timezone) Return Oops_Model_Timezone objects filtered by the id_timezone column
 * @method     array findByName(string $name) Return Oops_Model_Timezone objects filtered by the name column
 *
 * @package    propel.generator.prestashop.om
 */
abstract class Oops_Model_Base_TimezoneQuery extends ModelCriteria
{
	
	/**
	 * Initializes internal state of Oops_Model_Base_TimezoneQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'prestashop', $modelName = 'Oops_Model_Timezone', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new Oops_Model_TimezoneQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    Oops_Model_TimezoneQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof Oops_Model_TimezoneQuery) {
			return $criteria;
		}
		$query = new Oops_Model_TimezoneQuery();
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
	 * @return    Oops_Model_Timezone|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ($key === null) {
			return null;
		}
		if ((null !== ($obj = Oops_Model_TimezonePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
			// the object is alredy in the instance pool
			return $obj;
		}
		if ($con === null) {
			$con = Propel::getConnection(Oops_Model_TimezonePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
	 * @return    Oops_Model_Timezone A model object, or null if the key is not found
	 */
	protected function findPkSimple($key, $con)
	{
		$sql = 'SELECT `ID_TIMEZONE`, `NAME` FROM `' . _DB_PREFIX_ . 'djland_timezone` WHERE `ID_TIMEZONE` = :p0';
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
			$obj = new Oops_Model_Timezone();
			$obj->hydrate($row);
			Oops_Model_TimezonePeer::addInstanceToPool($obj, (string) $row[0]);
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
	 * @return    Oops_Model_Timezone|array|mixed the result, formatted by the current formatter
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
	 * @return    Oops_Model_TimezoneQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(Oops_Model_TimezonePeer::ID_TIMEZONE, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    Oops_Model_TimezoneQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(Oops_Model_TimezonePeer::ID_TIMEZONE, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id_timezone column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByIdTimezone(1234); // WHERE id_timezone = 1234
	 * $query->filterByIdTimezone(array(12, 34)); // WHERE id_timezone IN (12, 34)
	 * $query->filterByIdTimezone(array('min' => 12)); // WHERE id_timezone > 12
	 * </code>
	 *
	 * @param     mixed $idTimezone The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_TimezoneQuery The current query, for fluid interface
	 */
	public function filterByIdTimezone($idTimezone = null, $comparison = null)
	{
		if (is_array($idTimezone) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(Oops_Model_TimezonePeer::ID_TIMEZONE, $idTimezone, $comparison);
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
	 * @return    Oops_Model_TimezoneQuery The current query, for fluid interface
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
		return $this->addUsingAlias(Oops_Model_TimezonePeer::NAME, $name, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     Oops_Model_Timezone $timezone Object to remove from the list of results
	 *
	 * @return    Oops_Model_TimezoneQuery The current query, for fluid interface
	 */
	public function prune($timezone = null)
	{
		if ($timezone) {
			$this->addUsingAlias(Oops_Model_TimezonePeer::ID_TIMEZONE, $timezone->getIdTimezone(), Criteria::NOT_EQUAL);
		}

		return $this;
	}

} // Oops_Model_Base_TimezoneQuery