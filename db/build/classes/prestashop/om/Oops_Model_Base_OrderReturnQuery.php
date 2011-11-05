<?php


/**
 * Base class that represents a query for the '' . _DB_PREFIX_ . 'djland_order_return' table.
 *
 * 
 *
 * @method     Oops_Model_OrderReturnQuery orderByIdOrderReturn($order = Criteria::ASC) Order by the id_order_return column
 * @method     Oops_Model_OrderReturnQuery orderByIdCustomer($order = Criteria::ASC) Order by the id_customer column
 * @method     Oops_Model_OrderReturnQuery orderByIdOrder($order = Criteria::ASC) Order by the id_order column
 * @method     Oops_Model_OrderReturnQuery orderByState($order = Criteria::ASC) Order by the state column
 * @method     Oops_Model_OrderReturnQuery orderByQuestion($order = Criteria::ASC) Order by the question column
 * @method     Oops_Model_OrderReturnQuery orderByDateAdd($order = Criteria::ASC) Order by the date_add column
 * @method     Oops_Model_OrderReturnQuery orderByDateUpd($order = Criteria::ASC) Order by the date_upd column
 *
 * @method     Oops_Model_OrderReturnQuery groupByIdOrderReturn() Group by the id_order_return column
 * @method     Oops_Model_OrderReturnQuery groupByIdCustomer() Group by the id_customer column
 * @method     Oops_Model_OrderReturnQuery groupByIdOrder() Group by the id_order column
 * @method     Oops_Model_OrderReturnQuery groupByState() Group by the state column
 * @method     Oops_Model_OrderReturnQuery groupByQuestion() Group by the question column
 * @method     Oops_Model_OrderReturnQuery groupByDateAdd() Group by the date_add column
 * @method     Oops_Model_OrderReturnQuery groupByDateUpd() Group by the date_upd column
 *
 * @method     Oops_Model_OrderReturnQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     Oops_Model_OrderReturnQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     Oops_Model_OrderReturnQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     Oops_Model_OrderReturn findOne(PropelPDO $con = null) Return the first Oops_Model_OrderReturn matching the query
 * @method     Oops_Model_OrderReturn findOneOrCreate(PropelPDO $con = null) Return the first Oops_Model_OrderReturn matching the query, or a new Oops_Model_OrderReturn object populated from the query conditions when no match is found
 *
 * @method     Oops_Model_OrderReturn findOneByIdOrderReturn(int $id_order_return) Return the first Oops_Model_OrderReturn filtered by the id_order_return column
 * @method     Oops_Model_OrderReturn findOneByIdCustomer(int $id_customer) Return the first Oops_Model_OrderReturn filtered by the id_customer column
 * @method     Oops_Model_OrderReturn findOneByIdOrder(int $id_order) Return the first Oops_Model_OrderReturn filtered by the id_order column
 * @method     Oops_Model_OrderReturn findOneByState(boolean $state) Return the first Oops_Model_OrderReturn filtered by the state column
 * @method     Oops_Model_OrderReturn findOneByQuestion(string $question) Return the first Oops_Model_OrderReturn filtered by the question column
 * @method     Oops_Model_OrderReturn findOneByDateAdd(string $date_add) Return the first Oops_Model_OrderReturn filtered by the date_add column
 * @method     Oops_Model_OrderReturn findOneByDateUpd(string $date_upd) Return the first Oops_Model_OrderReturn filtered by the date_upd column
 *
 * @method     array findByIdOrderReturn(int $id_order_return) Return Oops_Model_OrderReturn objects filtered by the id_order_return column
 * @method     array findByIdCustomer(int $id_customer) Return Oops_Model_OrderReturn objects filtered by the id_customer column
 * @method     array findByIdOrder(int $id_order) Return Oops_Model_OrderReturn objects filtered by the id_order column
 * @method     array findByState(boolean $state) Return Oops_Model_OrderReturn objects filtered by the state column
 * @method     array findByQuestion(string $question) Return Oops_Model_OrderReturn objects filtered by the question column
 * @method     array findByDateAdd(string $date_add) Return Oops_Model_OrderReturn objects filtered by the date_add column
 * @method     array findByDateUpd(string $date_upd) Return Oops_Model_OrderReturn objects filtered by the date_upd column
 *
 * @package    propel.generator.prestashop.om
 */
abstract class Oops_Model_Base_OrderReturnQuery extends ModelCriteria
{
	
	/**
	 * Initializes internal state of Oops_Model_Base_OrderReturnQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'prestashop', $modelName = 'Oops_Model_OrderReturn', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new Oops_Model_OrderReturnQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    Oops_Model_OrderReturnQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof Oops_Model_OrderReturnQuery) {
			return $criteria;
		}
		$query = new Oops_Model_OrderReturnQuery();
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
	 * @return    Oops_Model_OrderReturn|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ($key === null) {
			return null;
		}
		if ((null !== ($obj = Oops_Model_OrderReturnPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
			// the object is alredy in the instance pool
			return $obj;
		}
		if ($con === null) {
			$con = Propel::getConnection(Oops_Model_OrderReturnPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
	 * @return    Oops_Model_OrderReturn A model object, or null if the key is not found
	 */
	protected function findPkSimple($key, $con)
	{
		$sql = 'SELECT `ID_ORDER_RETURN`, `ID_CUSTOMER`, `ID_ORDER`, `STATE`, `QUESTION`, `DATE_ADD`, `DATE_UPD` FROM `' . _DB_PREFIX_ . 'djland_order_return` WHERE `ID_ORDER_RETURN` = :p0';
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
			$obj = new Oops_Model_OrderReturn();
			$obj->hydrate($row);
			Oops_Model_OrderReturnPeer::addInstanceToPool($obj, (string) $row[0]);
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
	 * @return    Oops_Model_OrderReturn|array|mixed the result, formatted by the current formatter
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
	 * @return    Oops_Model_OrderReturnQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(Oops_Model_OrderReturnPeer::ID_ORDER_RETURN, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    Oops_Model_OrderReturnQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(Oops_Model_OrderReturnPeer::ID_ORDER_RETURN, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id_order_return column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByIdOrderReturn(1234); // WHERE id_order_return = 1234
	 * $query->filterByIdOrderReturn(array(12, 34)); // WHERE id_order_return IN (12, 34)
	 * $query->filterByIdOrderReturn(array('min' => 12)); // WHERE id_order_return > 12
	 * </code>
	 *
	 * @param     mixed $idOrderReturn The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_OrderReturnQuery The current query, for fluid interface
	 */
	public function filterByIdOrderReturn($idOrderReturn = null, $comparison = null)
	{
		if (is_array($idOrderReturn) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(Oops_Model_OrderReturnPeer::ID_ORDER_RETURN, $idOrderReturn, $comparison);
	}

	/**
	 * Filter the query on the id_customer column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByIdCustomer(1234); // WHERE id_customer = 1234
	 * $query->filterByIdCustomer(array(12, 34)); // WHERE id_customer IN (12, 34)
	 * $query->filterByIdCustomer(array('min' => 12)); // WHERE id_customer > 12
	 * </code>
	 *
	 * @param     mixed $idCustomer The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_OrderReturnQuery The current query, for fluid interface
	 */
	public function filterByIdCustomer($idCustomer = null, $comparison = null)
	{
		if (is_array($idCustomer)) {
			$useMinMax = false;
			if (isset($idCustomer['min'])) {
				$this->addUsingAlias(Oops_Model_OrderReturnPeer::ID_CUSTOMER, $idCustomer['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($idCustomer['max'])) {
				$this->addUsingAlias(Oops_Model_OrderReturnPeer::ID_CUSTOMER, $idCustomer['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_OrderReturnPeer::ID_CUSTOMER, $idCustomer, $comparison);
	}

	/**
	 * Filter the query on the id_order column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByIdOrder(1234); // WHERE id_order = 1234
	 * $query->filterByIdOrder(array(12, 34)); // WHERE id_order IN (12, 34)
	 * $query->filterByIdOrder(array('min' => 12)); // WHERE id_order > 12
	 * </code>
	 *
	 * @param     mixed $idOrder The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_OrderReturnQuery The current query, for fluid interface
	 */
	public function filterByIdOrder($idOrder = null, $comparison = null)
	{
		if (is_array($idOrder)) {
			$useMinMax = false;
			if (isset($idOrder['min'])) {
				$this->addUsingAlias(Oops_Model_OrderReturnPeer::ID_ORDER, $idOrder['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($idOrder['max'])) {
				$this->addUsingAlias(Oops_Model_OrderReturnPeer::ID_ORDER, $idOrder['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_OrderReturnPeer::ID_ORDER, $idOrder, $comparison);
	}

	/**
	 * Filter the query on the state column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByState(true); // WHERE state = true
	 * $query->filterByState('yes'); // WHERE state = true
	 * </code>
	 *
	 * @param     boolean|string $state The value to use as filter.
	 *              Non-boolean arguments are converted using the following rules:
	 *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_OrderReturnQuery The current query, for fluid interface
	 */
	public function filterByState($state = null, $comparison = null)
	{
		if (is_string($state)) {
			$state = in_array(strtolower($state), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(Oops_Model_OrderReturnPeer::STATE, $state, $comparison);
	}

	/**
	 * Filter the query on the question column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByQuestion('fooValue');   // WHERE question = 'fooValue'
	 * $query->filterByQuestion('%fooValue%'); // WHERE question LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $question The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_OrderReturnQuery The current query, for fluid interface
	 */
	public function filterByQuestion($question = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($question)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $question)) {
				$question = str_replace('*', '%', $question);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(Oops_Model_OrderReturnPeer::QUESTION, $question, $comparison);
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
	 * @return    Oops_Model_OrderReturnQuery The current query, for fluid interface
	 */
	public function filterByDateAdd($dateAdd = null, $comparison = null)
	{
		if (is_array($dateAdd)) {
			$useMinMax = false;
			if (isset($dateAdd['min'])) {
				$this->addUsingAlias(Oops_Model_OrderReturnPeer::DATE_ADD, $dateAdd['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($dateAdd['max'])) {
				$this->addUsingAlias(Oops_Model_OrderReturnPeer::DATE_ADD, $dateAdd['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_OrderReturnPeer::DATE_ADD, $dateAdd, $comparison);
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
	 * @return    Oops_Model_OrderReturnQuery The current query, for fluid interface
	 */
	public function filterByDateUpd($dateUpd = null, $comparison = null)
	{
		if (is_array($dateUpd)) {
			$useMinMax = false;
			if (isset($dateUpd['min'])) {
				$this->addUsingAlias(Oops_Model_OrderReturnPeer::DATE_UPD, $dateUpd['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($dateUpd['max'])) {
				$this->addUsingAlias(Oops_Model_OrderReturnPeer::DATE_UPD, $dateUpd['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_OrderReturnPeer::DATE_UPD, $dateUpd, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     Oops_Model_OrderReturn $orderReturn Object to remove from the list of results
	 *
	 * @return    Oops_Model_OrderReturnQuery The current query, for fluid interface
	 */
	public function prune($orderReturn = null)
	{
		if ($orderReturn) {
			$this->addUsingAlias(Oops_Model_OrderReturnPeer::ID_ORDER_RETURN, $orderReturn->getIdOrderReturn(), Criteria::NOT_EQUAL);
		}

		return $this;
	}

} // Oops_Model_Base_OrderReturnQuery