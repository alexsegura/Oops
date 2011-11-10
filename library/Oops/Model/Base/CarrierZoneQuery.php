<?php


/**
 * Base class that represents a query for the 'carrier_zone' table.
 *
 * 
 *
 * @method     Oops_Model_CarrierZoneQuery orderByIdCarrier($order = Criteria::ASC) Order by the id_carrier column
 * @method     Oops_Model_CarrierZoneQuery orderByIdZone($order = Criteria::ASC) Order by the id_zone column
 *
 * @method     Oops_Model_CarrierZoneQuery groupByIdCarrier() Group by the id_carrier column
 * @method     Oops_Model_CarrierZoneQuery groupByIdZone() Group by the id_zone column
 *
 * @method     Oops_Model_CarrierZoneQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     Oops_Model_CarrierZoneQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     Oops_Model_CarrierZoneQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     Oops_Model_CarrierZone findOne(PropelPDO $con = null) Return the first Oops_Model_CarrierZone matching the query
 * @method     Oops_Model_CarrierZone findOneOrCreate(PropelPDO $con = null) Return the first Oops_Model_CarrierZone matching the query, or a new Oops_Model_CarrierZone object populated from the query conditions when no match is found
 *
 * @method     Oops_Model_CarrierZone findOneByIdCarrier(int $id_carrier) Return the first Oops_Model_CarrierZone filtered by the id_carrier column
 * @method     Oops_Model_CarrierZone findOneByIdZone(int $id_zone) Return the first Oops_Model_CarrierZone filtered by the id_zone column
 *
 * @method     array findByIdCarrier(int $id_carrier) Return Oops_Model_CarrierZone objects filtered by the id_carrier column
 * @method     array findByIdZone(int $id_zone) Return Oops_Model_CarrierZone objects filtered by the id_zone column
 *
 * @package    propel.generator.prestashop.om
 */
abstract class Oops_Model_Base_CarrierZoneQuery extends ModelCriteria
{
	
	/**
	 * Initializes internal state of Oops_Model_Base_CarrierZoneQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'prestashop', $modelName = 'Oops_Model_CarrierZone', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new Oops_Model_CarrierZoneQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    Oops_Model_CarrierZoneQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof Oops_Model_CarrierZoneQuery) {
			return $criteria;
		}
		$query = new Oops_Model_CarrierZoneQuery();
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
	 * @param     array[$id_carrier, $id_zone] $key Primary key to use for the query
	 * @param     PropelPDO $con an optional connection object
	 *
	 * @return    Oops_Model_CarrierZone|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ($key === null) {
			return null;
		}
		if ((null !== ($obj = Oops_Model_CarrierZonePeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
			// the object is alredy in the instance pool
			return $obj;
		}
		if ($con === null) {
			$con = Propel::getConnection(Oops_Model_CarrierZonePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
	 * @return    Oops_Model_CarrierZone A model object, or null if the key is not found
	 */
	protected function findPkSimple($key, $con)
	{
		$sql = 'SELECT `ID_CARRIER`, `ID_ZONE` FROM `' . _DB_PREFIX_ . 'carrier_zone` WHERE `ID_CARRIER` = :p0 AND `ID_ZONE` = :p1';
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
			$obj = new Oops_Model_CarrierZone();
			$obj->hydrate($row);
			Oops_Model_CarrierZonePeer::addInstanceToPool($obj, serialize(array((string) $row[0], (string) $row[1])));
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
	 * @return    Oops_Model_CarrierZone|array|mixed the result, formatted by the current formatter
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
	 * @return    Oops_Model_CarrierZoneQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		$this->addUsingAlias(Oops_Model_CarrierZonePeer::ID_CARRIER, $key[0], Criteria::EQUAL);
		$this->addUsingAlias(Oops_Model_CarrierZonePeer::ID_ZONE, $key[1], Criteria::EQUAL);

		return $this;
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    Oops_Model_CarrierZoneQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		if (empty($keys)) {
			return $this->add(null, '1<>1', Criteria::CUSTOM);
		}
		foreach ($keys as $key) {
			$cton0 = $this->getNewCriterion(Oops_Model_CarrierZonePeer::ID_CARRIER, $key[0], Criteria::EQUAL);
			$cton1 = $this->getNewCriterion(Oops_Model_CarrierZonePeer::ID_ZONE, $key[1], Criteria::EQUAL);
			$cton0->addAnd($cton1);
			$this->addOr($cton0);
		}

		return $this;
	}

	/**
	 * Filter the query on the id_carrier column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByIdCarrier(1234); // WHERE id_carrier = 1234
	 * $query->filterByIdCarrier(array(12, 34)); // WHERE id_carrier IN (12, 34)
	 * $query->filterByIdCarrier(array('min' => 12)); // WHERE id_carrier > 12
	 * </code>
	 *
	 * @param     mixed $idCarrier The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_CarrierZoneQuery The current query, for fluid interface
	 */
	public function filterByIdCarrier($idCarrier = null, $comparison = null)
	{
		if (is_array($idCarrier) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(Oops_Model_CarrierZonePeer::ID_CARRIER, $idCarrier, $comparison);
	}

	/**
	 * Filter the query on the id_zone column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByIdZone(1234); // WHERE id_zone = 1234
	 * $query->filterByIdZone(array(12, 34)); // WHERE id_zone IN (12, 34)
	 * $query->filterByIdZone(array('min' => 12)); // WHERE id_zone > 12
	 * </code>
	 *
	 * @param     mixed $idZone The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_CarrierZoneQuery The current query, for fluid interface
	 */
	public function filterByIdZone($idZone = null, $comparison = null)
	{
		if (is_array($idZone) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(Oops_Model_CarrierZonePeer::ID_ZONE, $idZone, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     Oops_Model_CarrierZone $carrierZone Object to remove from the list of results
	 *
	 * @return    Oops_Model_CarrierZoneQuery The current query, for fluid interface
	 */
	public function prune($carrierZone = null)
	{
		if ($carrierZone) {
			$this->addCond('pruneCond0', $this->getAliasedColName(Oops_Model_CarrierZonePeer::ID_CARRIER), $carrierZone->getIdCarrier(), Criteria::NOT_EQUAL);
			$this->addCond('pruneCond1', $this->getAliasedColName(Oops_Model_CarrierZonePeer::ID_ZONE), $carrierZone->getIdZone(), Criteria::NOT_EQUAL);
			$this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
		}

		return $this;
	}

} // Oops_Model_Base_CarrierZoneQuery