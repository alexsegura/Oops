<?php


/**
 * Base class that represents a query for the 'order_state' table.
 *
 * 
 *
 * @method     Oops_Model_OrderStateQuery orderByIdOrderState($order = Criteria::ASC) Order by the id_order_state column
 * @method     Oops_Model_OrderStateQuery orderByInvoice($order = Criteria::ASC) Order by the invoice column
 * @method     Oops_Model_OrderStateQuery orderBySendEmail($order = Criteria::ASC) Order by the send_email column
 * @method     Oops_Model_OrderStateQuery orderByColor($order = Criteria::ASC) Order by the color column
 * @method     Oops_Model_OrderStateQuery orderByUnremovable($order = Criteria::ASC) Order by the unremovable column
 * @method     Oops_Model_OrderStateQuery orderByHidden($order = Criteria::ASC) Order by the hidden column
 * @method     Oops_Model_OrderStateQuery orderByLogable($order = Criteria::ASC) Order by the logable column
 * @method     Oops_Model_OrderStateQuery orderByDelivery($order = Criteria::ASC) Order by the delivery column
 *
 * @method     Oops_Model_OrderStateQuery groupByIdOrderState() Group by the id_order_state column
 * @method     Oops_Model_OrderStateQuery groupByInvoice() Group by the invoice column
 * @method     Oops_Model_OrderStateQuery groupBySendEmail() Group by the send_email column
 * @method     Oops_Model_OrderStateQuery groupByColor() Group by the color column
 * @method     Oops_Model_OrderStateQuery groupByUnremovable() Group by the unremovable column
 * @method     Oops_Model_OrderStateQuery groupByHidden() Group by the hidden column
 * @method     Oops_Model_OrderStateQuery groupByLogable() Group by the logable column
 * @method     Oops_Model_OrderStateQuery groupByDelivery() Group by the delivery column
 *
 * @method     Oops_Model_OrderStateQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     Oops_Model_OrderStateQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     Oops_Model_OrderStateQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     Oops_Model_OrderState findOne(PropelPDO $con = null) Return the first Oops_Model_OrderState matching the query
 * @method     Oops_Model_OrderState findOneOrCreate(PropelPDO $con = null) Return the first Oops_Model_OrderState matching the query, or a new Oops_Model_OrderState object populated from the query conditions when no match is found
 *
 * @method     Oops_Model_OrderState findOneByIdOrderState(int $id_order_state) Return the first Oops_Model_OrderState filtered by the id_order_state column
 * @method     Oops_Model_OrderState findOneByInvoice(boolean $invoice) Return the first Oops_Model_OrderState filtered by the invoice column
 * @method     Oops_Model_OrderState findOneBySendEmail(boolean $send_email) Return the first Oops_Model_OrderState filtered by the send_email column
 * @method     Oops_Model_OrderState findOneByColor(string $color) Return the first Oops_Model_OrderState filtered by the color column
 * @method     Oops_Model_OrderState findOneByUnremovable(boolean $unremovable) Return the first Oops_Model_OrderState filtered by the unremovable column
 * @method     Oops_Model_OrderState findOneByHidden(boolean $hidden) Return the first Oops_Model_OrderState filtered by the hidden column
 * @method     Oops_Model_OrderState findOneByLogable(boolean $logable) Return the first Oops_Model_OrderState filtered by the logable column
 * @method     Oops_Model_OrderState findOneByDelivery(boolean $delivery) Return the first Oops_Model_OrderState filtered by the delivery column
 *
 * @method     array findByIdOrderState(int $id_order_state) Return Oops_Model_OrderState objects filtered by the id_order_state column
 * @method     array findByInvoice(boolean $invoice) Return Oops_Model_OrderState objects filtered by the invoice column
 * @method     array findBySendEmail(boolean $send_email) Return Oops_Model_OrderState objects filtered by the send_email column
 * @method     array findByColor(string $color) Return Oops_Model_OrderState objects filtered by the color column
 * @method     array findByUnremovable(boolean $unremovable) Return Oops_Model_OrderState objects filtered by the unremovable column
 * @method     array findByHidden(boolean $hidden) Return Oops_Model_OrderState objects filtered by the hidden column
 * @method     array findByLogable(boolean $logable) Return Oops_Model_OrderState objects filtered by the logable column
 * @method     array findByDelivery(boolean $delivery) Return Oops_Model_OrderState objects filtered by the delivery column
 *
 * @package    propel.generator.prestashop.om
 */
abstract class Oops_Model_Base_OrderStateQuery extends ModelCriteria
{
	
	/**
	 * Initializes internal state of Oops_Model_Base_OrderStateQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'prestashop', $modelName = 'Oops_Model_OrderState', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new Oops_Model_OrderStateQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    Oops_Model_OrderStateQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof Oops_Model_OrderStateQuery) {
			return $criteria;
		}
		$query = new Oops_Model_OrderStateQuery();
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
	 * @return    Oops_Model_OrderState|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ($key === null) {
			return null;
		}
		if ((null !== ($obj = Oops_Model_OrderStatePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
			// the object is alredy in the instance pool
			return $obj;
		}
		if ($con === null) {
			$con = Propel::getConnection(Oops_Model_OrderStatePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
	 * @return    Oops_Model_OrderState A model object, or null if the key is not found
	 */
	protected function findPkSimple($key, $con)
	{
		$sql = 'SELECT `ID_ORDER_STATE`, `INVOICE`, `SEND_EMAIL`, `COLOR`, `UNREMOVABLE`, `HIDDEN`, `LOGABLE`, `DELIVERY` FROM `' . _DB_PREFIX_ . 'order_state` WHERE `ID_ORDER_STATE` = :p0';
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
			$obj = new Oops_Model_OrderState();
			$obj->hydrate($row);
			Oops_Model_OrderStatePeer::addInstanceToPool($obj, (string) $row[0]);
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
	 * @return    Oops_Model_OrderState|array|mixed the result, formatted by the current formatter
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
	 * @return    Oops_Model_OrderStateQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(Oops_Model_OrderStatePeer::ID_ORDER_STATE, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    Oops_Model_OrderStateQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(Oops_Model_OrderStatePeer::ID_ORDER_STATE, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id_order_state column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByIdOrderState(1234); // WHERE id_order_state = 1234
	 * $query->filterByIdOrderState(array(12, 34)); // WHERE id_order_state IN (12, 34)
	 * $query->filterByIdOrderState(array('min' => 12)); // WHERE id_order_state > 12
	 * </code>
	 *
	 * @param     mixed $idOrderState The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_OrderStateQuery The current query, for fluid interface
	 */
	public function filterByIdOrderState($idOrderState = null, $comparison = null)
	{
		if (is_array($idOrderState) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(Oops_Model_OrderStatePeer::ID_ORDER_STATE, $idOrderState, $comparison);
	}

	/**
	 * Filter the query on the invoice column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByInvoice(true); // WHERE invoice = true
	 * $query->filterByInvoice('yes'); // WHERE invoice = true
	 * </code>
	 *
	 * @param     boolean|string $invoice The value to use as filter.
	 *              Non-boolean arguments are converted using the following rules:
	 *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_OrderStateQuery The current query, for fluid interface
	 */
	public function filterByInvoice($invoice = null, $comparison = null)
	{
		if (is_string($invoice)) {
			$invoice = in_array(strtolower($invoice), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(Oops_Model_OrderStatePeer::INVOICE, $invoice, $comparison);
	}

	/**
	 * Filter the query on the send_email column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterBySendEmail(true); // WHERE send_email = true
	 * $query->filterBySendEmail('yes'); // WHERE send_email = true
	 * </code>
	 *
	 * @param     boolean|string $sendEmail The value to use as filter.
	 *              Non-boolean arguments are converted using the following rules:
	 *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_OrderStateQuery The current query, for fluid interface
	 */
	public function filterBySendEmail($sendEmail = null, $comparison = null)
	{
		if (is_string($sendEmail)) {
			$send_email = in_array(strtolower($sendEmail), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(Oops_Model_OrderStatePeer::SEND_EMAIL, $sendEmail, $comparison);
	}

	/**
	 * Filter the query on the color column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByColor('fooValue');   // WHERE color = 'fooValue'
	 * $query->filterByColor('%fooValue%'); // WHERE color LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $color The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_OrderStateQuery The current query, for fluid interface
	 */
	public function filterByColor($color = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($color)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $color)) {
				$color = str_replace('*', '%', $color);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(Oops_Model_OrderStatePeer::COLOR, $color, $comparison);
	}

	/**
	 * Filter the query on the unremovable column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByUnremovable(true); // WHERE unremovable = true
	 * $query->filterByUnremovable('yes'); // WHERE unremovable = true
	 * </code>
	 *
	 * @param     boolean|string $unremovable The value to use as filter.
	 *              Non-boolean arguments are converted using the following rules:
	 *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_OrderStateQuery The current query, for fluid interface
	 */
	public function filterByUnremovable($unremovable = null, $comparison = null)
	{
		if (is_string($unremovable)) {
			$unremovable = in_array(strtolower($unremovable), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(Oops_Model_OrderStatePeer::UNREMOVABLE, $unremovable, $comparison);
	}

	/**
	 * Filter the query on the hidden column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByHidden(true); // WHERE hidden = true
	 * $query->filterByHidden('yes'); // WHERE hidden = true
	 * </code>
	 *
	 * @param     boolean|string $hidden The value to use as filter.
	 *              Non-boolean arguments are converted using the following rules:
	 *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_OrderStateQuery The current query, for fluid interface
	 */
	public function filterByHidden($hidden = null, $comparison = null)
	{
		if (is_string($hidden)) {
			$hidden = in_array(strtolower($hidden), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(Oops_Model_OrderStatePeer::HIDDEN, $hidden, $comparison);
	}

	/**
	 * Filter the query on the logable column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByLogable(true); // WHERE logable = true
	 * $query->filterByLogable('yes'); // WHERE logable = true
	 * </code>
	 *
	 * @param     boolean|string $logable The value to use as filter.
	 *              Non-boolean arguments are converted using the following rules:
	 *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_OrderStateQuery The current query, for fluid interface
	 */
	public function filterByLogable($logable = null, $comparison = null)
	{
		if (is_string($logable)) {
			$logable = in_array(strtolower($logable), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(Oops_Model_OrderStatePeer::LOGABLE, $logable, $comparison);
	}

	/**
	 * Filter the query on the delivery column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByDelivery(true); // WHERE delivery = true
	 * $query->filterByDelivery('yes'); // WHERE delivery = true
	 * </code>
	 *
	 * @param     boolean|string $delivery The value to use as filter.
	 *              Non-boolean arguments are converted using the following rules:
	 *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_OrderStateQuery The current query, for fluid interface
	 */
	public function filterByDelivery($delivery = null, $comparison = null)
	{
		if (is_string($delivery)) {
			$delivery = in_array(strtolower($delivery), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(Oops_Model_OrderStatePeer::DELIVERY, $delivery, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     Oops_Model_OrderState $orderState Object to remove from the list of results
	 *
	 * @return    Oops_Model_OrderStateQuery The current query, for fluid interface
	 */
	public function prune($orderState = null)
	{
		if ($orderState) {
			$this->addUsingAlias(Oops_Model_OrderStatePeer::ID_ORDER_STATE, $orderState->getIdOrderState(), Criteria::NOT_EQUAL);
		}

		return $this;
	}

} // Oops_Model_Base_OrderStateQuery