<?php


/**
 * Base class that represents a query for the 'djland_log' table.
 *
 * 
 *
 * @method     Oops_Model_LogQuery orderByIdLog($order = Criteria::ASC) Order by the id_log column
 * @method     Oops_Model_LogQuery orderBySeverity($order = Criteria::ASC) Order by the severity column
 * @method     Oops_Model_LogQuery orderByErrorCode($order = Criteria::ASC) Order by the error_code column
 * @method     Oops_Model_LogQuery orderByMessage($order = Criteria::ASC) Order by the message column
 * @method     Oops_Model_LogQuery orderByObjectType($order = Criteria::ASC) Order by the object_type column
 * @method     Oops_Model_LogQuery orderByObjectId($order = Criteria::ASC) Order by the object_id column
 * @method     Oops_Model_LogQuery orderByDateAdd($order = Criteria::ASC) Order by the date_add column
 * @method     Oops_Model_LogQuery orderByDateUpd($order = Criteria::ASC) Order by the date_upd column
 *
 * @method     Oops_Model_LogQuery groupByIdLog() Group by the id_log column
 * @method     Oops_Model_LogQuery groupBySeverity() Group by the severity column
 * @method     Oops_Model_LogQuery groupByErrorCode() Group by the error_code column
 * @method     Oops_Model_LogQuery groupByMessage() Group by the message column
 * @method     Oops_Model_LogQuery groupByObjectType() Group by the object_type column
 * @method     Oops_Model_LogQuery groupByObjectId() Group by the object_id column
 * @method     Oops_Model_LogQuery groupByDateAdd() Group by the date_add column
 * @method     Oops_Model_LogQuery groupByDateUpd() Group by the date_upd column
 *
 * @method     Oops_Model_LogQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     Oops_Model_LogQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     Oops_Model_LogQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     Oops_Model_Log findOne(PropelPDO $con = null) Return the first Oops_Model_Log matching the query
 * @method     Oops_Model_Log findOneOrCreate(PropelPDO $con = null) Return the first Oops_Model_Log matching the query, or a new Oops_Model_Log object populated from the query conditions when no match is found
 *
 * @method     Oops_Model_Log findOneByIdLog(int $id_log) Return the first Oops_Model_Log filtered by the id_log column
 * @method     Oops_Model_Log findOneBySeverity(boolean $severity) Return the first Oops_Model_Log filtered by the severity column
 * @method     Oops_Model_Log findOneByErrorCode(int $error_code) Return the first Oops_Model_Log filtered by the error_code column
 * @method     Oops_Model_Log findOneByMessage(string $message) Return the first Oops_Model_Log filtered by the message column
 * @method     Oops_Model_Log findOneByObjectType(string $object_type) Return the first Oops_Model_Log filtered by the object_type column
 * @method     Oops_Model_Log findOneByObjectId(int $object_id) Return the first Oops_Model_Log filtered by the object_id column
 * @method     Oops_Model_Log findOneByDateAdd(string $date_add) Return the first Oops_Model_Log filtered by the date_add column
 * @method     Oops_Model_Log findOneByDateUpd(string $date_upd) Return the first Oops_Model_Log filtered by the date_upd column
 *
 * @method     array findByIdLog(int $id_log) Return Oops_Model_Log objects filtered by the id_log column
 * @method     array findBySeverity(boolean $severity) Return Oops_Model_Log objects filtered by the severity column
 * @method     array findByErrorCode(int $error_code) Return Oops_Model_Log objects filtered by the error_code column
 * @method     array findByMessage(string $message) Return Oops_Model_Log objects filtered by the message column
 * @method     array findByObjectType(string $object_type) Return Oops_Model_Log objects filtered by the object_type column
 * @method     array findByObjectId(int $object_id) Return Oops_Model_Log objects filtered by the object_id column
 * @method     array findByDateAdd(string $date_add) Return Oops_Model_Log objects filtered by the date_add column
 * @method     array findByDateUpd(string $date_upd) Return Oops_Model_Log objects filtered by the date_upd column
 *
 * @package    propel.generator.prestashop.om
 */
abstract class Oops_Model_Base_LogQuery extends ModelCriteria
{
	
	/**
	 * Initializes internal state of Oops_Model_Base_LogQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'prestashop', $modelName = 'Oops_Model_Log', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new Oops_Model_LogQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    Oops_Model_LogQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof Oops_Model_LogQuery) {
			return $criteria;
		}
		$query = new Oops_Model_LogQuery();
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
	 * @return    Oops_Model_Log|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ($key === null) {
			return null;
		}
		if ((null !== ($obj = Oops_Model_LogPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
			// the object is alredy in the instance pool
			return $obj;
		}
		if ($con === null) {
			$con = Propel::getConnection(Oops_Model_LogPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
	 * @return    Oops_Model_Log A model object, or null if the key is not found
	 */
	protected function findPkSimple($key, $con)
	{
		$sql = 'SELECT `ID_LOG`, `SEVERITY`, `ERROR_CODE`, `MESSAGE`, `OBJECT_TYPE`, `OBJECT_ID`, `DATE_ADD`, `DATE_UPD` FROM `djland_log` WHERE `ID_LOG` = :p0';
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
			$obj = new Oops_Model_Log();
			$obj->hydrate($row);
			Oops_Model_LogPeer::addInstanceToPool($obj, (string) $row[0]);
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
	 * @return    Oops_Model_Log|array|mixed the result, formatted by the current formatter
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
	 * @return    Oops_Model_LogQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(Oops_Model_LogPeer::ID_LOG, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    Oops_Model_LogQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(Oops_Model_LogPeer::ID_LOG, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id_log column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByIdLog(1234); // WHERE id_log = 1234
	 * $query->filterByIdLog(array(12, 34)); // WHERE id_log IN (12, 34)
	 * $query->filterByIdLog(array('min' => 12)); // WHERE id_log > 12
	 * </code>
	 *
	 * @param     mixed $idLog The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_LogQuery The current query, for fluid interface
	 */
	public function filterByIdLog($idLog = null, $comparison = null)
	{
		if (is_array($idLog) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(Oops_Model_LogPeer::ID_LOG, $idLog, $comparison);
	}

	/**
	 * Filter the query on the severity column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterBySeverity(true); // WHERE severity = true
	 * $query->filterBySeverity('yes'); // WHERE severity = true
	 * </code>
	 *
	 * @param     boolean|string $severity The value to use as filter.
	 *              Non-boolean arguments are converted using the following rules:
	 *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_LogQuery The current query, for fluid interface
	 */
	public function filterBySeverity($severity = null, $comparison = null)
	{
		if (is_string($severity)) {
			$severity = in_array(strtolower($severity), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(Oops_Model_LogPeer::SEVERITY, $severity, $comparison);
	}

	/**
	 * Filter the query on the error_code column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByErrorCode(1234); // WHERE error_code = 1234
	 * $query->filterByErrorCode(array(12, 34)); // WHERE error_code IN (12, 34)
	 * $query->filterByErrorCode(array('min' => 12)); // WHERE error_code > 12
	 * </code>
	 *
	 * @param     mixed $errorCode The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_LogQuery The current query, for fluid interface
	 */
	public function filterByErrorCode($errorCode = null, $comparison = null)
	{
		if (is_array($errorCode)) {
			$useMinMax = false;
			if (isset($errorCode['min'])) {
				$this->addUsingAlias(Oops_Model_LogPeer::ERROR_CODE, $errorCode['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($errorCode['max'])) {
				$this->addUsingAlias(Oops_Model_LogPeer::ERROR_CODE, $errorCode['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_LogPeer::ERROR_CODE, $errorCode, $comparison);
	}

	/**
	 * Filter the query on the message column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByMessage('fooValue');   // WHERE message = 'fooValue'
	 * $query->filterByMessage('%fooValue%'); // WHERE message LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $message The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_LogQuery The current query, for fluid interface
	 */
	public function filterByMessage($message = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($message)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $message)) {
				$message = str_replace('*', '%', $message);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(Oops_Model_LogPeer::MESSAGE, $message, $comparison);
	}

	/**
	 * Filter the query on the object_type column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByObjectType('fooValue');   // WHERE object_type = 'fooValue'
	 * $query->filterByObjectType('%fooValue%'); // WHERE object_type LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $objectType The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_LogQuery The current query, for fluid interface
	 */
	public function filterByObjectType($objectType = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($objectType)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $objectType)) {
				$objectType = str_replace('*', '%', $objectType);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(Oops_Model_LogPeer::OBJECT_TYPE, $objectType, $comparison);
	}

	/**
	 * Filter the query on the object_id column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByObjectId(1234); // WHERE object_id = 1234
	 * $query->filterByObjectId(array(12, 34)); // WHERE object_id IN (12, 34)
	 * $query->filterByObjectId(array('min' => 12)); // WHERE object_id > 12
	 * </code>
	 *
	 * @param     mixed $objectId The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_LogQuery The current query, for fluid interface
	 */
	public function filterByObjectId($objectId = null, $comparison = null)
	{
		if (is_array($objectId)) {
			$useMinMax = false;
			if (isset($objectId['min'])) {
				$this->addUsingAlias(Oops_Model_LogPeer::OBJECT_ID, $objectId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($objectId['max'])) {
				$this->addUsingAlias(Oops_Model_LogPeer::OBJECT_ID, $objectId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_LogPeer::OBJECT_ID, $objectId, $comparison);
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
	 * @return    Oops_Model_LogQuery The current query, for fluid interface
	 */
	public function filterByDateAdd($dateAdd = null, $comparison = null)
	{
		if (is_array($dateAdd)) {
			$useMinMax = false;
			if (isset($dateAdd['min'])) {
				$this->addUsingAlias(Oops_Model_LogPeer::DATE_ADD, $dateAdd['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($dateAdd['max'])) {
				$this->addUsingAlias(Oops_Model_LogPeer::DATE_ADD, $dateAdd['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_LogPeer::DATE_ADD, $dateAdd, $comparison);
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
	 * @return    Oops_Model_LogQuery The current query, for fluid interface
	 */
	public function filterByDateUpd($dateUpd = null, $comparison = null)
	{
		if (is_array($dateUpd)) {
			$useMinMax = false;
			if (isset($dateUpd['min'])) {
				$this->addUsingAlias(Oops_Model_LogPeer::DATE_UPD, $dateUpd['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($dateUpd['max'])) {
				$this->addUsingAlias(Oops_Model_LogPeer::DATE_UPD, $dateUpd['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_LogPeer::DATE_UPD, $dateUpd, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     Oops_Model_Log $log Object to remove from the list of results
	 *
	 * @return    Oops_Model_LogQuery The current query, for fluid interface
	 */
	public function prune($log = null)
	{
		if ($log) {
			$this->addUsingAlias(Oops_Model_LogPeer::ID_LOG, $log->getIdLog(), Criteria::NOT_EQUAL);
		}

		return $this;
	}

} // Oops_Model_Base_LogQuery