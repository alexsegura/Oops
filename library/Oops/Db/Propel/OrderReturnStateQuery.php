<?php


/**
 * Base class that represents a query for the 'order_return_state' table.
 *
 * 
 *
 * @method     Oops_Db_OrderReturnStateQuery orderByIdOrderReturnState($order = Criteria::ASC) Order by the id_order_return_state column
 * @method     Oops_Db_OrderReturnStateQuery orderByColor($order = Criteria::ASC) Order by the color column
 *
 * @method     Oops_Db_OrderReturnStateQuery groupByIdOrderReturnState() Group by the id_order_return_state column
 * @method     Oops_Db_OrderReturnStateQuery groupByColor() Group by the color column
 *
 * @method     Oops_Db_OrderReturnStateQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     Oops_Db_OrderReturnStateQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     Oops_Db_OrderReturnStateQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     Oops_Db_OrderReturnState findOne(PropelPDO $con = null) Return the first Oops_Db_OrderReturnState matching the query
 * @method     Oops_Db_OrderReturnState findOneOrCreate(PropelPDO $con = null) Return the first Oops_Db_OrderReturnState matching the query, or a new Oops_Db_OrderReturnState object populated from the query conditions when no match is found
 *
 * @method     Oops_Db_OrderReturnState findOneByIdOrderReturnState(int $id_order_return_state) Return the first Oops_Db_OrderReturnState filtered by the id_order_return_state column
 * @method     Oops_Db_OrderReturnState findOneByColor(string $color) Return the first Oops_Db_OrderReturnState filtered by the color column
 *
 * @method     array findByIdOrderReturnState(int $id_order_return_state) Return Oops_Db_OrderReturnState objects filtered by the id_order_return_state column
 * @method     array findByColor(string $color) Return Oops_Db_OrderReturnState objects filtered by the color column
 *
 * @package    propel.generator.prestashop.om
 */
abstract class Oops_Db_Propel_OrderReturnStateQuery extends ModelCriteria
{
	
	/**
	 * Initializes internal state of Oops_Db_Propel_OrderReturnStateQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'prestashop', $modelName = 'Oops_Db_OrderReturnState', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new Oops_Db_OrderReturnStateQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    Oops_Db_OrderReturnStateQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof Oops_Db_OrderReturnStateQuery) {
			return $criteria;
		}
		$query = new Oops_Db_OrderReturnStateQuery();
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
	 * @return    Oops_Db_OrderReturnState|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ($key === null) {
			return null;
		}
		if ((null !== ($obj = Oops_Db_OrderReturnStatePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
			// the object is alredy in the instance pool
			return $obj;
		}
		if ($con === null) {
			$con = Propel::getConnection(Oops_Db_OrderReturnStatePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
	 * @return    Oops_Db_OrderReturnState A model object, or null if the key is not found
	 */
	protected function findPkSimple($key, $con)
	{
		$sql = 'SELECT `ID_ORDER_RETURN_STATE`, `COLOR` FROM `' . _DB_PREFIX_ . 'order_return_state` WHERE `ID_ORDER_RETURN_STATE` = :p0';
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
			$obj = new Oops_Db_OrderReturnState();
			$obj->hydrate($row);
			Oops_Db_OrderReturnStatePeer::addInstanceToPool($obj, (string) $row[0]);
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
	 * @return    Oops_Db_OrderReturnState|array|mixed the result, formatted by the current formatter
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
	 * @return    Oops_Db_OrderReturnStateQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(Oops_Db_OrderReturnStatePeer::ID_ORDER_RETURN_STATE, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    Oops_Db_OrderReturnStateQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(Oops_Db_OrderReturnStatePeer::ID_ORDER_RETURN_STATE, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id_order_return_state column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByIdOrderReturnState(1234); // WHERE id_order_return_state = 1234
	 * $query->filterByIdOrderReturnState(array(12, 34)); // WHERE id_order_return_state IN (12, 34)
	 * $query->filterByIdOrderReturnState(array('min' => 12)); // WHERE id_order_return_state > 12
	 * </code>
	 *
	 * @param     mixed $idOrderReturnState The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Db_OrderReturnStateQuery The current query, for fluid interface
	 */
	public function filterByIdOrderReturnState($idOrderReturnState = null, $comparison = null)
	{
		if (is_array($idOrderReturnState) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(Oops_Db_OrderReturnStatePeer::ID_ORDER_RETURN_STATE, $idOrderReturnState, $comparison);
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
	 * @return    Oops_Db_OrderReturnStateQuery The current query, for fluid interface
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
		return $this->addUsingAlias(Oops_Db_OrderReturnStatePeer::COLOR, $color, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     Oops_Db_OrderReturnState $orderReturnState Object to remove from the list of results
	 *
	 * @return    Oops_Db_OrderReturnStateQuery The current query, for fluid interface
	 */
	public function prune($orderReturnState = null)
	{
		if ($orderReturnState) {
			$this->addUsingAlias(Oops_Db_OrderReturnStatePeer::ID_ORDER_RETURN_STATE, $orderReturnState->getIdOrderReturnState(), Criteria::NOT_EQUAL);
		}

		return $this;
	}

} // Oops_Db_Propel_OrderReturnStateQuery