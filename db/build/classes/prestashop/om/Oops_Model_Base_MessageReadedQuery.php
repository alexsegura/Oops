<?php


/**
 * Base class that represents a query for the '' . _DB_PREFIX_ . 'djland_message_readed' table.
 *
 * 
 *
 * @method     Oops_Model_MessageReadedQuery orderByIdMessage($order = Criteria::ASC) Order by the id_message column
 * @method     Oops_Model_MessageReadedQuery orderByIdEmployee($order = Criteria::ASC) Order by the id_employee column
 * @method     Oops_Model_MessageReadedQuery orderByDateAdd($order = Criteria::ASC) Order by the date_add column
 *
 * @method     Oops_Model_MessageReadedQuery groupByIdMessage() Group by the id_message column
 * @method     Oops_Model_MessageReadedQuery groupByIdEmployee() Group by the id_employee column
 * @method     Oops_Model_MessageReadedQuery groupByDateAdd() Group by the date_add column
 *
 * @method     Oops_Model_MessageReadedQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     Oops_Model_MessageReadedQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     Oops_Model_MessageReadedQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     Oops_Model_MessageReaded findOne(PropelPDO $con = null) Return the first Oops_Model_MessageReaded matching the query
 * @method     Oops_Model_MessageReaded findOneOrCreate(PropelPDO $con = null) Return the first Oops_Model_MessageReaded matching the query, or a new Oops_Model_MessageReaded object populated from the query conditions when no match is found
 *
 * @method     Oops_Model_MessageReaded findOneByIdMessage(int $id_message) Return the first Oops_Model_MessageReaded filtered by the id_message column
 * @method     Oops_Model_MessageReaded findOneByIdEmployee(int $id_employee) Return the first Oops_Model_MessageReaded filtered by the id_employee column
 * @method     Oops_Model_MessageReaded findOneByDateAdd(string $date_add) Return the first Oops_Model_MessageReaded filtered by the date_add column
 *
 * @method     array findByIdMessage(int $id_message) Return Oops_Model_MessageReaded objects filtered by the id_message column
 * @method     array findByIdEmployee(int $id_employee) Return Oops_Model_MessageReaded objects filtered by the id_employee column
 * @method     array findByDateAdd(string $date_add) Return Oops_Model_MessageReaded objects filtered by the date_add column
 *
 * @package    propel.generator.prestashop.om
 */
abstract class Oops_Model_Base_MessageReadedQuery extends ModelCriteria
{
	
	/**
	 * Initializes internal state of Oops_Model_Base_MessageReadedQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'prestashop', $modelName = 'Oops_Model_MessageReaded', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new Oops_Model_MessageReadedQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    Oops_Model_MessageReadedQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof Oops_Model_MessageReadedQuery) {
			return $criteria;
		}
		$query = new Oops_Model_MessageReadedQuery();
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
	 * @param     array[$id_message, $id_employee] $key Primary key to use for the query
	 * @param     PropelPDO $con an optional connection object
	 *
	 * @return    Oops_Model_MessageReaded|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ($key === null) {
			return null;
		}
		if ((null !== ($obj = Oops_Model_MessageReadedPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
			// the object is alredy in the instance pool
			return $obj;
		}
		if ($con === null) {
			$con = Propel::getConnection(Oops_Model_MessageReadedPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
	 * @return    Oops_Model_MessageReaded A model object, or null if the key is not found
	 */
	protected function findPkSimple($key, $con)
	{
		$sql = 'SELECT `ID_MESSAGE`, `ID_EMPLOYEE`, `DATE_ADD` FROM `' . _DB_PREFIX_ . 'djland_message_readed` WHERE `ID_MESSAGE` = :p0 AND `ID_EMPLOYEE` = :p1';
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
			$obj = new Oops_Model_MessageReaded();
			$obj->hydrate($row);
			Oops_Model_MessageReadedPeer::addInstanceToPool($obj, serialize(array((string) $row[0], (string) $row[1])));
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
	 * @return    Oops_Model_MessageReaded|array|mixed the result, formatted by the current formatter
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
	 * @return    Oops_Model_MessageReadedQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		$this->addUsingAlias(Oops_Model_MessageReadedPeer::ID_MESSAGE, $key[0], Criteria::EQUAL);
		$this->addUsingAlias(Oops_Model_MessageReadedPeer::ID_EMPLOYEE, $key[1], Criteria::EQUAL);

		return $this;
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    Oops_Model_MessageReadedQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		if (empty($keys)) {
			return $this->add(null, '1<>1', Criteria::CUSTOM);
		}
		foreach ($keys as $key) {
			$cton0 = $this->getNewCriterion(Oops_Model_MessageReadedPeer::ID_MESSAGE, $key[0], Criteria::EQUAL);
			$cton1 = $this->getNewCriterion(Oops_Model_MessageReadedPeer::ID_EMPLOYEE, $key[1], Criteria::EQUAL);
			$cton0->addAnd($cton1);
			$this->addOr($cton0);
		}

		return $this;
	}

	/**
	 * Filter the query on the id_message column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByIdMessage(1234); // WHERE id_message = 1234
	 * $query->filterByIdMessage(array(12, 34)); // WHERE id_message IN (12, 34)
	 * $query->filterByIdMessage(array('min' => 12)); // WHERE id_message > 12
	 * </code>
	 *
	 * @param     mixed $idMessage The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_MessageReadedQuery The current query, for fluid interface
	 */
	public function filterByIdMessage($idMessage = null, $comparison = null)
	{
		if (is_array($idMessage) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(Oops_Model_MessageReadedPeer::ID_MESSAGE, $idMessage, $comparison);
	}

	/**
	 * Filter the query on the id_employee column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByIdEmployee(1234); // WHERE id_employee = 1234
	 * $query->filterByIdEmployee(array(12, 34)); // WHERE id_employee IN (12, 34)
	 * $query->filterByIdEmployee(array('min' => 12)); // WHERE id_employee > 12
	 * </code>
	 *
	 * @param     mixed $idEmployee The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_MessageReadedQuery The current query, for fluid interface
	 */
	public function filterByIdEmployee($idEmployee = null, $comparison = null)
	{
		if (is_array($idEmployee) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(Oops_Model_MessageReadedPeer::ID_EMPLOYEE, $idEmployee, $comparison);
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
	 * @return    Oops_Model_MessageReadedQuery The current query, for fluid interface
	 */
	public function filterByDateAdd($dateAdd = null, $comparison = null)
	{
		if (is_array($dateAdd)) {
			$useMinMax = false;
			if (isset($dateAdd['min'])) {
				$this->addUsingAlias(Oops_Model_MessageReadedPeer::DATE_ADD, $dateAdd['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($dateAdd['max'])) {
				$this->addUsingAlias(Oops_Model_MessageReadedPeer::DATE_ADD, $dateAdd['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_MessageReadedPeer::DATE_ADD, $dateAdd, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     Oops_Model_MessageReaded $messageReaded Object to remove from the list of results
	 *
	 * @return    Oops_Model_MessageReadedQuery The current query, for fluid interface
	 */
	public function prune($messageReaded = null)
	{
		if ($messageReaded) {
			$this->addCond('pruneCond0', $this->getAliasedColName(Oops_Model_MessageReadedPeer::ID_MESSAGE), $messageReaded->getIdMessage(), Criteria::NOT_EQUAL);
			$this->addCond('pruneCond1', $this->getAliasedColName(Oops_Model_MessageReadedPeer::ID_EMPLOYEE), $messageReaded->getIdEmployee(), Criteria::NOT_EQUAL);
			$this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
		}

		return $this;
	}

} // Oops_Model_Base_MessageReadedQuery