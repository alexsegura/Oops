<?php


/**
 * Base class that represents a query for the 'message' table.
 *
 * 
 *
 * @method     Oops_Model_MessageQuery orderByIdMessage($order = Criteria::ASC) Order by the id_message column
 * @method     Oops_Model_MessageQuery orderByIdCart($order = Criteria::ASC) Order by the id_cart column
 * @method     Oops_Model_MessageQuery orderByIdCustomer($order = Criteria::ASC) Order by the id_customer column
 * @method     Oops_Model_MessageQuery orderByIdEmployee($order = Criteria::ASC) Order by the id_employee column
 * @method     Oops_Model_MessageQuery orderByIdOrder($order = Criteria::ASC) Order by the id_order column
 * @method     Oops_Model_MessageQuery orderByMessage($order = Criteria::ASC) Order by the message column
 * @method     Oops_Model_MessageQuery orderByPrivate($order = Criteria::ASC) Order by the private column
 * @method     Oops_Model_MessageQuery orderByDateAdd($order = Criteria::ASC) Order by the date_add column
 *
 * @method     Oops_Model_MessageQuery groupByIdMessage() Group by the id_message column
 * @method     Oops_Model_MessageQuery groupByIdCart() Group by the id_cart column
 * @method     Oops_Model_MessageQuery groupByIdCustomer() Group by the id_customer column
 * @method     Oops_Model_MessageQuery groupByIdEmployee() Group by the id_employee column
 * @method     Oops_Model_MessageQuery groupByIdOrder() Group by the id_order column
 * @method     Oops_Model_MessageQuery groupByMessage() Group by the message column
 * @method     Oops_Model_MessageQuery groupByPrivate() Group by the private column
 * @method     Oops_Model_MessageQuery groupByDateAdd() Group by the date_add column
 *
 * @method     Oops_Model_MessageQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     Oops_Model_MessageQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     Oops_Model_MessageQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     Oops_Model_Message findOne(PropelPDO $con = null) Return the first Oops_Model_Message matching the query
 * @method     Oops_Model_Message findOneOrCreate(PropelPDO $con = null) Return the first Oops_Model_Message matching the query, or a new Oops_Model_Message object populated from the query conditions when no match is found
 *
 * @method     Oops_Model_Message findOneByIdMessage(int $id_message) Return the first Oops_Model_Message filtered by the id_message column
 * @method     Oops_Model_Message findOneByIdCart(int $id_cart) Return the first Oops_Model_Message filtered by the id_cart column
 * @method     Oops_Model_Message findOneByIdCustomer(int $id_customer) Return the first Oops_Model_Message filtered by the id_customer column
 * @method     Oops_Model_Message findOneByIdEmployee(int $id_employee) Return the first Oops_Model_Message filtered by the id_employee column
 * @method     Oops_Model_Message findOneByIdOrder(int $id_order) Return the first Oops_Model_Message filtered by the id_order column
 * @method     Oops_Model_Message findOneByMessage(string $message) Return the first Oops_Model_Message filtered by the message column
 * @method     Oops_Model_Message findOneByPrivate(boolean $private) Return the first Oops_Model_Message filtered by the private column
 * @method     Oops_Model_Message findOneByDateAdd(string $date_add) Return the first Oops_Model_Message filtered by the date_add column
 *
 * @method     array findByIdMessage(int $id_message) Return Oops_Model_Message objects filtered by the id_message column
 * @method     array findByIdCart(int $id_cart) Return Oops_Model_Message objects filtered by the id_cart column
 * @method     array findByIdCustomer(int $id_customer) Return Oops_Model_Message objects filtered by the id_customer column
 * @method     array findByIdEmployee(int $id_employee) Return Oops_Model_Message objects filtered by the id_employee column
 * @method     array findByIdOrder(int $id_order) Return Oops_Model_Message objects filtered by the id_order column
 * @method     array findByMessage(string $message) Return Oops_Model_Message objects filtered by the message column
 * @method     array findByPrivate(boolean $private) Return Oops_Model_Message objects filtered by the private column
 * @method     array findByDateAdd(string $date_add) Return Oops_Model_Message objects filtered by the date_add column
 *
 * @package    propel.generator.prestashop.om
 */
abstract class Oops_Model_Base_MessageQuery extends ModelCriteria
{
	
	/**
	 * Initializes internal state of Oops_Model_Base_MessageQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'prestashop', $modelName = 'Oops_Model_Message', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new Oops_Model_MessageQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    Oops_Model_MessageQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof Oops_Model_MessageQuery) {
			return $criteria;
		}
		$query = new Oops_Model_MessageQuery();
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
	 * @return    Oops_Model_Message|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ($key === null) {
			return null;
		}
		if ((null !== ($obj = Oops_Model_MessagePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
			// the object is alredy in the instance pool
			return $obj;
		}
		if ($con === null) {
			$con = Propel::getConnection(Oops_Model_MessagePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
	 * @return    Oops_Model_Message A model object, or null if the key is not found
	 */
	protected function findPkSimple($key, $con)
	{
		$sql = 'SELECT `ID_MESSAGE`, `ID_CART`, `ID_CUSTOMER`, `ID_EMPLOYEE`, `ID_ORDER`, `MESSAGE`, `PRIVATE`, `DATE_ADD` FROM `' . _DB_PREFIX_ . 'message` WHERE `ID_MESSAGE` = :p0';
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
			$obj = new Oops_Model_Message();
			$obj->hydrate($row);
			Oops_Model_MessagePeer::addInstanceToPool($obj, (string) $row[0]);
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
	 * @return    Oops_Model_Message|array|mixed the result, formatted by the current formatter
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
	 * @return    Oops_Model_MessageQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(Oops_Model_MessagePeer::ID_MESSAGE, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    Oops_Model_MessageQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(Oops_Model_MessagePeer::ID_MESSAGE, $keys, Criteria::IN);
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
	 * @return    Oops_Model_MessageQuery The current query, for fluid interface
	 */
	public function filterByIdMessage($idMessage = null, $comparison = null)
	{
		if (is_array($idMessage) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(Oops_Model_MessagePeer::ID_MESSAGE, $idMessage, $comparison);
	}

	/**
	 * Filter the query on the id_cart column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByIdCart(1234); // WHERE id_cart = 1234
	 * $query->filterByIdCart(array(12, 34)); // WHERE id_cart IN (12, 34)
	 * $query->filterByIdCart(array('min' => 12)); // WHERE id_cart > 12
	 * </code>
	 *
	 * @param     mixed $idCart The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_MessageQuery The current query, for fluid interface
	 */
	public function filterByIdCart($idCart = null, $comparison = null)
	{
		if (is_array($idCart)) {
			$useMinMax = false;
			if (isset($idCart['min'])) {
				$this->addUsingAlias(Oops_Model_MessagePeer::ID_CART, $idCart['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($idCart['max'])) {
				$this->addUsingAlias(Oops_Model_MessagePeer::ID_CART, $idCart['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_MessagePeer::ID_CART, $idCart, $comparison);
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
	 * @return    Oops_Model_MessageQuery The current query, for fluid interface
	 */
	public function filterByIdCustomer($idCustomer = null, $comparison = null)
	{
		if (is_array($idCustomer)) {
			$useMinMax = false;
			if (isset($idCustomer['min'])) {
				$this->addUsingAlias(Oops_Model_MessagePeer::ID_CUSTOMER, $idCustomer['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($idCustomer['max'])) {
				$this->addUsingAlias(Oops_Model_MessagePeer::ID_CUSTOMER, $idCustomer['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_MessagePeer::ID_CUSTOMER, $idCustomer, $comparison);
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
	 * @return    Oops_Model_MessageQuery The current query, for fluid interface
	 */
	public function filterByIdEmployee($idEmployee = null, $comparison = null)
	{
		if (is_array($idEmployee)) {
			$useMinMax = false;
			if (isset($idEmployee['min'])) {
				$this->addUsingAlias(Oops_Model_MessagePeer::ID_EMPLOYEE, $idEmployee['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($idEmployee['max'])) {
				$this->addUsingAlias(Oops_Model_MessagePeer::ID_EMPLOYEE, $idEmployee['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_MessagePeer::ID_EMPLOYEE, $idEmployee, $comparison);
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
	 * @return    Oops_Model_MessageQuery The current query, for fluid interface
	 */
	public function filterByIdOrder($idOrder = null, $comparison = null)
	{
		if (is_array($idOrder)) {
			$useMinMax = false;
			if (isset($idOrder['min'])) {
				$this->addUsingAlias(Oops_Model_MessagePeer::ID_ORDER, $idOrder['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($idOrder['max'])) {
				$this->addUsingAlias(Oops_Model_MessagePeer::ID_ORDER, $idOrder['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_MessagePeer::ID_ORDER, $idOrder, $comparison);
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
	 * @return    Oops_Model_MessageQuery The current query, for fluid interface
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
		return $this->addUsingAlias(Oops_Model_MessagePeer::MESSAGE, $message, $comparison);
	}

	/**
	 * Filter the query on the private column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByPrivate(true); // WHERE private = true
	 * $query->filterByPrivate('yes'); // WHERE private = true
	 * </code>
	 *
	 * @param     boolean|string $private The value to use as filter.
	 *              Non-boolean arguments are converted using the following rules:
	 *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_MessageQuery The current query, for fluid interface
	 */
	public function filterByPrivate($private = null, $comparison = null)
	{
		if (is_string($private)) {
			$private = in_array(strtolower($private), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(Oops_Model_MessagePeer::ISPRIVATE, $private, $comparison);
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
	 * @return    Oops_Model_MessageQuery The current query, for fluid interface
	 */
	public function filterByDateAdd($dateAdd = null, $comparison = null)
	{
		if (is_array($dateAdd)) {
			$useMinMax = false;
			if (isset($dateAdd['min'])) {
				$this->addUsingAlias(Oops_Model_MessagePeer::DATE_ADD, $dateAdd['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($dateAdd['max'])) {
				$this->addUsingAlias(Oops_Model_MessagePeer::DATE_ADD, $dateAdd['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_MessagePeer::DATE_ADD, $dateAdd, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     Oops_Model_Message $message Object to remove from the list of results
	 *
	 * @return    Oops_Model_MessageQuery The current query, for fluid interface
	 */
	public function prune($message = null)
	{
		if ($message) {
			$this->addUsingAlias(Oops_Model_MessagePeer::ID_MESSAGE, $message->getIdMessage(), Criteria::NOT_EQUAL);
		}

		return $this;
	}

} // Oops_Model_Base_MessageQuery