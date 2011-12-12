<?php


/**
 * Base class that represents a query for the 'customer_message' table.
 *
 * 
 *
 * @method     Oops_Db_CustomerMessageQuery orderByIdCustomerMessage($order = Criteria::ASC) Order by the id_customer_message column
 * @method     Oops_Db_CustomerMessageQuery orderByIdCustomerThread($order = Criteria::ASC) Order by the id_customer_thread column
 * @method     Oops_Db_CustomerMessageQuery orderByIdEmployee($order = Criteria::ASC) Order by the id_employee column
 * @method     Oops_Db_CustomerMessageQuery orderByMessage($order = Criteria::ASC) Order by the message column
 * @method     Oops_Db_CustomerMessageQuery orderByFileName($order = Criteria::ASC) Order by the file_name column
 * @method     Oops_Db_CustomerMessageQuery orderByIpAddress($order = Criteria::ASC) Order by the ip_address column
 * @method     Oops_Db_CustomerMessageQuery orderByUserAgent($order = Criteria::ASC) Order by the user_agent column
 * @method     Oops_Db_CustomerMessageQuery orderByDateAdd($order = Criteria::ASC) Order by the date_add column
 *
 * @method     Oops_Db_CustomerMessageQuery groupByIdCustomerMessage() Group by the id_customer_message column
 * @method     Oops_Db_CustomerMessageQuery groupByIdCustomerThread() Group by the id_customer_thread column
 * @method     Oops_Db_CustomerMessageQuery groupByIdEmployee() Group by the id_employee column
 * @method     Oops_Db_CustomerMessageQuery groupByMessage() Group by the message column
 * @method     Oops_Db_CustomerMessageQuery groupByFileName() Group by the file_name column
 * @method     Oops_Db_CustomerMessageQuery groupByIpAddress() Group by the ip_address column
 * @method     Oops_Db_CustomerMessageQuery groupByUserAgent() Group by the user_agent column
 * @method     Oops_Db_CustomerMessageQuery groupByDateAdd() Group by the date_add column
 *
 * @method     Oops_Db_CustomerMessageQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     Oops_Db_CustomerMessageQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     Oops_Db_CustomerMessageQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     Oops_Db_CustomerMessage findOne(PropelPDO $con = null) Return the first Oops_Db_CustomerMessage matching the query
 * @method     Oops_Db_CustomerMessage findOneOrCreate(PropelPDO $con = null) Return the first Oops_Db_CustomerMessage matching the query, or a new Oops_Db_CustomerMessage object populated from the query conditions when no match is found
 *
 * @method     Oops_Db_CustomerMessage findOneByIdCustomerMessage(int $id_customer_message) Return the first Oops_Db_CustomerMessage filtered by the id_customer_message column
 * @method     Oops_Db_CustomerMessage findOneByIdCustomerThread(int $id_customer_thread) Return the first Oops_Db_CustomerMessage filtered by the id_customer_thread column
 * @method     Oops_Db_CustomerMessage findOneByIdEmployee(int $id_employee) Return the first Oops_Db_CustomerMessage filtered by the id_employee column
 * @method     Oops_Db_CustomerMessage findOneByMessage(string $message) Return the first Oops_Db_CustomerMessage filtered by the message column
 * @method     Oops_Db_CustomerMessage findOneByFileName(string $file_name) Return the first Oops_Db_CustomerMessage filtered by the file_name column
 * @method     Oops_Db_CustomerMessage findOneByIpAddress(int $ip_address) Return the first Oops_Db_CustomerMessage filtered by the ip_address column
 * @method     Oops_Db_CustomerMessage findOneByUserAgent(string $user_agent) Return the first Oops_Db_CustomerMessage filtered by the user_agent column
 * @method     Oops_Db_CustomerMessage findOneByDateAdd(string $date_add) Return the first Oops_Db_CustomerMessage filtered by the date_add column
 *
 * @method     array findByIdCustomerMessage(int $id_customer_message) Return Oops_Db_CustomerMessage objects filtered by the id_customer_message column
 * @method     array findByIdCustomerThread(int $id_customer_thread) Return Oops_Db_CustomerMessage objects filtered by the id_customer_thread column
 * @method     array findByIdEmployee(int $id_employee) Return Oops_Db_CustomerMessage objects filtered by the id_employee column
 * @method     array findByMessage(string $message) Return Oops_Db_CustomerMessage objects filtered by the message column
 * @method     array findByFileName(string $file_name) Return Oops_Db_CustomerMessage objects filtered by the file_name column
 * @method     array findByIpAddress(int $ip_address) Return Oops_Db_CustomerMessage objects filtered by the ip_address column
 * @method     array findByUserAgent(string $user_agent) Return Oops_Db_CustomerMessage objects filtered by the user_agent column
 * @method     array findByDateAdd(string $date_add) Return Oops_Db_CustomerMessage objects filtered by the date_add column
 *
 * @package    propel.generator.prestashop.om
 */
abstract class Oops_Db_Propel_CustomerMessageQuery extends ModelCriteria
{
	
	/**
	 * Initializes internal state of Oops_Db_Propel_CustomerMessageQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'prestashop', $modelName = 'Oops_Db_CustomerMessage', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new Oops_Db_CustomerMessageQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    Oops_Db_CustomerMessageQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof Oops_Db_CustomerMessageQuery) {
			return $criteria;
		}
		$query = new Oops_Db_CustomerMessageQuery();
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
	 * @return    Oops_Db_CustomerMessage|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ($key === null) {
			return null;
		}
		if ((null !== ($obj = Oops_Db_CustomerMessagePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
			// the object is alredy in the instance pool
			return $obj;
		}
		if ($con === null) {
			$con = Propel::getConnection(Oops_Db_CustomerMessagePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
	 * @return    Oops_Db_CustomerMessage A model object, or null if the key is not found
	 */
	protected function findPkSimple($key, $con)
	{
		$sql = 'SELECT `ID_CUSTOMER_MESSAGE`, `ID_CUSTOMER_THREAD`, `ID_EMPLOYEE`, `MESSAGE`, `FILE_NAME`, `IP_ADDRESS`, `USER_AGENT`, `DATE_ADD` FROM `' . _DB_PREFIX_ . 'customer_message` WHERE `ID_CUSTOMER_MESSAGE` = :p0';
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
			$obj = new Oops_Db_CustomerMessage();
			$obj->hydrate($row);
			Oops_Db_CustomerMessagePeer::addInstanceToPool($obj, (string) $row[0]);
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
	 * @return    Oops_Db_CustomerMessage|array|mixed the result, formatted by the current formatter
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
	 * @return    Oops_Db_CustomerMessageQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(Oops_Db_CustomerMessagePeer::ID_CUSTOMER_MESSAGE, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    Oops_Db_CustomerMessageQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(Oops_Db_CustomerMessagePeer::ID_CUSTOMER_MESSAGE, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id_customer_message column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByIdCustomerMessage(1234); // WHERE id_customer_message = 1234
	 * $query->filterByIdCustomerMessage(array(12, 34)); // WHERE id_customer_message IN (12, 34)
	 * $query->filterByIdCustomerMessage(array('min' => 12)); // WHERE id_customer_message > 12
	 * </code>
	 *
	 * @param     mixed $idCustomerMessage The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Db_CustomerMessageQuery The current query, for fluid interface
	 */
	public function filterByIdCustomerMessage($idCustomerMessage = null, $comparison = null)
	{
		if (is_array($idCustomerMessage) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(Oops_Db_CustomerMessagePeer::ID_CUSTOMER_MESSAGE, $idCustomerMessage, $comparison);
	}

	/**
	 * Filter the query on the id_customer_thread column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByIdCustomerThread(1234); // WHERE id_customer_thread = 1234
	 * $query->filterByIdCustomerThread(array(12, 34)); // WHERE id_customer_thread IN (12, 34)
	 * $query->filterByIdCustomerThread(array('min' => 12)); // WHERE id_customer_thread > 12
	 * </code>
	 *
	 * @param     mixed $idCustomerThread The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Db_CustomerMessageQuery The current query, for fluid interface
	 */
	public function filterByIdCustomerThread($idCustomerThread = null, $comparison = null)
	{
		if (is_array($idCustomerThread)) {
			$useMinMax = false;
			if (isset($idCustomerThread['min'])) {
				$this->addUsingAlias(Oops_Db_CustomerMessagePeer::ID_CUSTOMER_THREAD, $idCustomerThread['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($idCustomerThread['max'])) {
				$this->addUsingAlias(Oops_Db_CustomerMessagePeer::ID_CUSTOMER_THREAD, $idCustomerThread['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Db_CustomerMessagePeer::ID_CUSTOMER_THREAD, $idCustomerThread, $comparison);
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
	 * @return    Oops_Db_CustomerMessageQuery The current query, for fluid interface
	 */
	public function filterByIdEmployee($idEmployee = null, $comparison = null)
	{
		if (is_array($idEmployee)) {
			$useMinMax = false;
			if (isset($idEmployee['min'])) {
				$this->addUsingAlias(Oops_Db_CustomerMessagePeer::ID_EMPLOYEE, $idEmployee['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($idEmployee['max'])) {
				$this->addUsingAlias(Oops_Db_CustomerMessagePeer::ID_EMPLOYEE, $idEmployee['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Db_CustomerMessagePeer::ID_EMPLOYEE, $idEmployee, $comparison);
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
	 * @return    Oops_Db_CustomerMessageQuery The current query, for fluid interface
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
		return $this->addUsingAlias(Oops_Db_CustomerMessagePeer::MESSAGE, $message, $comparison);
	}

	/**
	 * Filter the query on the file_name column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByFileName('fooValue');   // WHERE file_name = 'fooValue'
	 * $query->filterByFileName('%fooValue%'); // WHERE file_name LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $fileName The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Db_CustomerMessageQuery The current query, for fluid interface
	 */
	public function filterByFileName($fileName = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($fileName)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $fileName)) {
				$fileName = str_replace('*', '%', $fileName);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(Oops_Db_CustomerMessagePeer::FILE_NAME, $fileName, $comparison);
	}

	/**
	 * Filter the query on the ip_address column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByIpAddress(1234); // WHERE ip_address = 1234
	 * $query->filterByIpAddress(array(12, 34)); // WHERE ip_address IN (12, 34)
	 * $query->filterByIpAddress(array('min' => 12)); // WHERE ip_address > 12
	 * </code>
	 *
	 * @param     mixed $ipAddress The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Db_CustomerMessageQuery The current query, for fluid interface
	 */
	public function filterByIpAddress($ipAddress = null, $comparison = null)
	{
		if (is_array($ipAddress)) {
			$useMinMax = false;
			if (isset($ipAddress['min'])) {
				$this->addUsingAlias(Oops_Db_CustomerMessagePeer::IP_ADDRESS, $ipAddress['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($ipAddress['max'])) {
				$this->addUsingAlias(Oops_Db_CustomerMessagePeer::IP_ADDRESS, $ipAddress['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Db_CustomerMessagePeer::IP_ADDRESS, $ipAddress, $comparison);
	}

	/**
	 * Filter the query on the user_agent column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByUserAgent('fooValue');   // WHERE user_agent = 'fooValue'
	 * $query->filterByUserAgent('%fooValue%'); // WHERE user_agent LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $userAgent The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Db_CustomerMessageQuery The current query, for fluid interface
	 */
	public function filterByUserAgent($userAgent = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($userAgent)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $userAgent)) {
				$userAgent = str_replace('*', '%', $userAgent);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(Oops_Db_CustomerMessagePeer::USER_AGENT, $userAgent, $comparison);
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
	 * @return    Oops_Db_CustomerMessageQuery The current query, for fluid interface
	 */
	public function filterByDateAdd($dateAdd = null, $comparison = null)
	{
		if (is_array($dateAdd)) {
			$useMinMax = false;
			if (isset($dateAdd['min'])) {
				$this->addUsingAlias(Oops_Db_CustomerMessagePeer::DATE_ADD, $dateAdd['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($dateAdd['max'])) {
				$this->addUsingAlias(Oops_Db_CustomerMessagePeer::DATE_ADD, $dateAdd['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Db_CustomerMessagePeer::DATE_ADD, $dateAdd, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     Oops_Db_CustomerMessage $customerMessage Object to remove from the list of results
	 *
	 * @return    Oops_Db_CustomerMessageQuery The current query, for fluid interface
	 */
	public function prune($customerMessage = null)
	{
		if ($customerMessage) {
			$this->addUsingAlias(Oops_Db_CustomerMessagePeer::ID_CUSTOMER_MESSAGE, $customerMessage->getIdCustomerMessage(), Criteria::NOT_EQUAL);
		}

		return $this;
	}

} // Oops_Db_Propel_CustomerMessageQuery