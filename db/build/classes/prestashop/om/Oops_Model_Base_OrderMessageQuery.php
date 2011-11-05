<?php


/**
 * Base class that represents a query for the '' . _DB_PREFIX_ . 'djland_order_message' table.
 *
 * 
 *
 * @method     Oops_Model_OrderMessageQuery orderByIdOrderMessage($order = Criteria::ASC) Order by the id_order_message column
 * @method     Oops_Model_OrderMessageQuery orderByDateAdd($order = Criteria::ASC) Order by the date_add column
 *
 * @method     Oops_Model_OrderMessageQuery groupByIdOrderMessage() Group by the id_order_message column
 * @method     Oops_Model_OrderMessageQuery groupByDateAdd() Group by the date_add column
 *
 * @method     Oops_Model_OrderMessageQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     Oops_Model_OrderMessageQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     Oops_Model_OrderMessageQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     Oops_Model_OrderMessage findOne(PropelPDO $con = null) Return the first Oops_Model_OrderMessage matching the query
 * @method     Oops_Model_OrderMessage findOneOrCreate(PropelPDO $con = null) Return the first Oops_Model_OrderMessage matching the query, or a new Oops_Model_OrderMessage object populated from the query conditions when no match is found
 *
 * @method     Oops_Model_OrderMessage findOneByIdOrderMessage(int $id_order_message) Return the first Oops_Model_OrderMessage filtered by the id_order_message column
 * @method     Oops_Model_OrderMessage findOneByDateAdd(string $date_add) Return the first Oops_Model_OrderMessage filtered by the date_add column
 *
 * @method     array findByIdOrderMessage(int $id_order_message) Return Oops_Model_OrderMessage objects filtered by the id_order_message column
 * @method     array findByDateAdd(string $date_add) Return Oops_Model_OrderMessage objects filtered by the date_add column
 *
 * @package    propel.generator.prestashop.om
 */
abstract class Oops_Model_Base_OrderMessageQuery extends ModelCriteria
{
	
	/**
	 * Initializes internal state of Oops_Model_Base_OrderMessageQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'prestashop', $modelName = 'Oops_Model_OrderMessage', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new Oops_Model_OrderMessageQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    Oops_Model_OrderMessageQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof Oops_Model_OrderMessageQuery) {
			return $criteria;
		}
		$query = new Oops_Model_OrderMessageQuery();
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
	 * @return    Oops_Model_OrderMessage|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ($key === null) {
			return null;
		}
		if ((null !== ($obj = Oops_Model_OrderMessagePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
			// the object is alredy in the instance pool
			return $obj;
		}
		if ($con === null) {
			$con = Propel::getConnection(Oops_Model_OrderMessagePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
	 * @return    Oops_Model_OrderMessage A model object, or null if the key is not found
	 */
	protected function findPkSimple($key, $con)
	{
		$sql = 'SELECT `ID_ORDER_MESSAGE`, `DATE_ADD` FROM `' . _DB_PREFIX_ . 'djland_order_message` WHERE `ID_ORDER_MESSAGE` = :p0';
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
			$obj = new Oops_Model_OrderMessage();
			$obj->hydrate($row);
			Oops_Model_OrderMessagePeer::addInstanceToPool($obj, (string) $row[0]);
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
	 * @return    Oops_Model_OrderMessage|array|mixed the result, formatted by the current formatter
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
	 * @return    Oops_Model_OrderMessageQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(Oops_Model_OrderMessagePeer::ID_ORDER_MESSAGE, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    Oops_Model_OrderMessageQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(Oops_Model_OrderMessagePeer::ID_ORDER_MESSAGE, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id_order_message column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByIdOrderMessage(1234); // WHERE id_order_message = 1234
	 * $query->filterByIdOrderMessage(array(12, 34)); // WHERE id_order_message IN (12, 34)
	 * $query->filterByIdOrderMessage(array('min' => 12)); // WHERE id_order_message > 12
	 * </code>
	 *
	 * @param     mixed $idOrderMessage The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_OrderMessageQuery The current query, for fluid interface
	 */
	public function filterByIdOrderMessage($idOrderMessage = null, $comparison = null)
	{
		if (is_array($idOrderMessage) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(Oops_Model_OrderMessagePeer::ID_ORDER_MESSAGE, $idOrderMessage, $comparison);
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
	 * @return    Oops_Model_OrderMessageQuery The current query, for fluid interface
	 */
	public function filterByDateAdd($dateAdd = null, $comparison = null)
	{
		if (is_array($dateAdd)) {
			$useMinMax = false;
			if (isset($dateAdd['min'])) {
				$this->addUsingAlias(Oops_Model_OrderMessagePeer::DATE_ADD, $dateAdd['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($dateAdd['max'])) {
				$this->addUsingAlias(Oops_Model_OrderMessagePeer::DATE_ADD, $dateAdd['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_OrderMessagePeer::DATE_ADD, $dateAdd, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     Oops_Model_OrderMessage $orderMessage Object to remove from the list of results
	 *
	 * @return    Oops_Model_OrderMessageQuery The current query, for fluid interface
	 */
	public function prune($orderMessage = null)
	{
		if ($orderMessage) {
			$this->addUsingAlias(Oops_Model_OrderMessagePeer::ID_ORDER_MESSAGE, $orderMessage->getIdOrderMessage(), Criteria::NOT_EQUAL);
		}

		return $this;
	}

} // Oops_Model_Base_OrderMessageQuery