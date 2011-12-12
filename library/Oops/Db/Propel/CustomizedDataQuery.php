<?php


/**
 * Base class that represents a query for the 'customized_data' table.
 *
 * 
 *
 * @method     Oops_Db_CustomizedDataQuery orderByIdCustomization($order = Criteria::ASC) Order by the id_customization column
 * @method     Oops_Db_CustomizedDataQuery orderByType($order = Criteria::ASC) Order by the type column
 * @method     Oops_Db_CustomizedDataQuery orderByIndex($order = Criteria::ASC) Order by the index column
 * @method     Oops_Db_CustomizedDataQuery orderByValue($order = Criteria::ASC) Order by the value column
 *
 * @method     Oops_Db_CustomizedDataQuery groupByIdCustomization() Group by the id_customization column
 * @method     Oops_Db_CustomizedDataQuery groupByType() Group by the type column
 * @method     Oops_Db_CustomizedDataQuery groupByIndex() Group by the index column
 * @method     Oops_Db_CustomizedDataQuery groupByValue() Group by the value column
 *
 * @method     Oops_Db_CustomizedDataQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     Oops_Db_CustomizedDataQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     Oops_Db_CustomizedDataQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     Oops_Db_CustomizedData findOne(PropelPDO $con = null) Return the first Oops_Db_CustomizedData matching the query
 * @method     Oops_Db_CustomizedData findOneOrCreate(PropelPDO $con = null) Return the first Oops_Db_CustomizedData matching the query, or a new Oops_Db_CustomizedData object populated from the query conditions when no match is found
 *
 * @method     Oops_Db_CustomizedData findOneByIdCustomization(int $id_customization) Return the first Oops_Db_CustomizedData filtered by the id_customization column
 * @method     Oops_Db_CustomizedData findOneByType(boolean $type) Return the first Oops_Db_CustomizedData filtered by the type column
 * @method     Oops_Db_CustomizedData findOneByIndex(int $index) Return the first Oops_Db_CustomizedData filtered by the index column
 * @method     Oops_Db_CustomizedData findOneByValue(string $value) Return the first Oops_Db_CustomizedData filtered by the value column
 *
 * @method     array findByIdCustomization(int $id_customization) Return Oops_Db_CustomizedData objects filtered by the id_customization column
 * @method     array findByType(boolean $type) Return Oops_Db_CustomizedData objects filtered by the type column
 * @method     array findByIndex(int $index) Return Oops_Db_CustomizedData objects filtered by the index column
 * @method     array findByValue(string $value) Return Oops_Db_CustomizedData objects filtered by the value column
 *
 * @package    propel.generator.prestashop.om
 */
abstract class Oops_Db_Propel_CustomizedDataQuery extends ModelCriteria
{
	
	/**
	 * Initializes internal state of Oops_Db_Propel_CustomizedDataQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'prestashop', $modelName = 'Oops_Db_CustomizedData', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new Oops_Db_CustomizedDataQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    Oops_Db_CustomizedDataQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof Oops_Db_CustomizedDataQuery) {
			return $criteria;
		}
		$query = new Oops_Db_CustomizedDataQuery();
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
	 * $obj = $c->findPk(array(12, 34, 56), $con);
	 * </code>
	 *
	 * @param     array[$id_customization, $type, $index] $key Primary key to use for the query
	 * @param     PropelPDO $con an optional connection object
	 *
	 * @return    Oops_Db_CustomizedData|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ($key === null) {
			return null;
		}
		if ((null !== ($obj = Oops_Db_CustomizedDataPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1], (string) $key[2]))))) && !$this->formatter) {
			// the object is alredy in the instance pool
			return $obj;
		}
		if ($con === null) {
			$con = Propel::getConnection(Oops_Db_CustomizedDataPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
	 * @return    Oops_Db_CustomizedData A model object, or null if the key is not found
	 */
	protected function findPkSimple($key, $con)
	{
		$sql = 'SELECT `ID_CUSTOMIZATION`, `TYPE`, `INDEX`, `VALUE` FROM `' . _DB_PREFIX_ . 'customized_data` WHERE `ID_CUSTOMIZATION` = :p0 AND `TYPE` = :p1 AND `INDEX` = :p2';
		try {
			$stmt = $con->prepare($sql);
			$stmt->bindValue(':p0', $key[0], PDO::PARAM_INT);
			$stmt->bindValue(':p1', (int) $key[1], PDO::PARAM_INT);
			$stmt->bindValue(':p2', $key[2], PDO::PARAM_INT);
			$stmt->execute();
		} catch (Exception $e) {
			Propel::log($e->getMessage(), Propel::LOG_ERR);
			throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
		}
		$obj = null;
		if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$obj = new Oops_Db_CustomizedData();
			$obj->hydrate($row);
			Oops_Db_CustomizedDataPeer::addInstanceToPool($obj, serialize(array((string) $row[0], (string) $row[1], (string) $row[2])));
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
	 * @return    Oops_Db_CustomizedData|array|mixed the result, formatted by the current formatter
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
	 * @return    Oops_Db_CustomizedDataQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		$this->addUsingAlias(Oops_Db_CustomizedDataPeer::ID_CUSTOMIZATION, $key[0], Criteria::EQUAL);
		$this->addUsingAlias(Oops_Db_CustomizedDataPeer::TYPE, $key[1], Criteria::EQUAL);
		$this->addUsingAlias(Oops_Db_CustomizedDataPeer::INDEX, $key[2], Criteria::EQUAL);

		return $this;
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    Oops_Db_CustomizedDataQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		if (empty($keys)) {
			return $this->add(null, '1<>1', Criteria::CUSTOM);
		}
		foreach ($keys as $key) {
			$cton0 = $this->getNewCriterion(Oops_Db_CustomizedDataPeer::ID_CUSTOMIZATION, $key[0], Criteria::EQUAL);
			$cton1 = $this->getNewCriterion(Oops_Db_CustomizedDataPeer::TYPE, $key[1], Criteria::EQUAL);
			$cton0->addAnd($cton1);
			$cton2 = $this->getNewCriterion(Oops_Db_CustomizedDataPeer::INDEX, $key[2], Criteria::EQUAL);
			$cton0->addAnd($cton2);
			$this->addOr($cton0);
		}

		return $this;
	}

	/**
	 * Filter the query on the id_customization column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByIdCustomization(1234); // WHERE id_customization = 1234
	 * $query->filterByIdCustomization(array(12, 34)); // WHERE id_customization IN (12, 34)
	 * $query->filterByIdCustomization(array('min' => 12)); // WHERE id_customization > 12
	 * </code>
	 *
	 * @param     mixed $idCustomization The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Db_CustomizedDataQuery The current query, for fluid interface
	 */
	public function filterByIdCustomization($idCustomization = null, $comparison = null)
	{
		if (is_array($idCustomization) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(Oops_Db_CustomizedDataPeer::ID_CUSTOMIZATION, $idCustomization, $comparison);
	}

	/**
	 * Filter the query on the type column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByType(true); // WHERE type = true
	 * $query->filterByType('yes'); // WHERE type = true
	 * </code>
	 *
	 * @param     boolean|string $type The value to use as filter.
	 *              Non-boolean arguments are converted using the following rules:
	 *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Db_CustomizedDataQuery The current query, for fluid interface
	 */
	public function filterByType($type = null, $comparison = null)
	{
		if (is_string($type)) {
			$type = in_array(strtolower($type), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(Oops_Db_CustomizedDataPeer::TYPE, $type, $comparison);
	}

	/**
	 * Filter the query on the index column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByIndex(1234); // WHERE index = 1234
	 * $query->filterByIndex(array(12, 34)); // WHERE index IN (12, 34)
	 * $query->filterByIndex(array('min' => 12)); // WHERE index > 12
	 * </code>
	 *
	 * @param     mixed $index The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Db_CustomizedDataQuery The current query, for fluid interface
	 */
	public function filterByIndex($index = null, $comparison = null)
	{
		if (is_array($index) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(Oops_Db_CustomizedDataPeer::INDEX, $index, $comparison);
	}

	/**
	 * Filter the query on the value column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByValue('fooValue');   // WHERE value = 'fooValue'
	 * $query->filterByValue('%fooValue%'); // WHERE value LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $value The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Db_CustomizedDataQuery The current query, for fluid interface
	 */
	public function filterByValue($value = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($value)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $value)) {
				$value = str_replace('*', '%', $value);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(Oops_Db_CustomizedDataPeer::VALUE, $value, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     Oops_Db_CustomizedData $customizedData Object to remove from the list of results
	 *
	 * @return    Oops_Db_CustomizedDataQuery The current query, for fluid interface
	 */
	public function prune($customizedData = null)
	{
		if ($customizedData) {
			$this->addCond('pruneCond0', $this->getAliasedColName(Oops_Db_CustomizedDataPeer::ID_CUSTOMIZATION), $customizedData->getIdCustomization(), Criteria::NOT_EQUAL);
			$this->addCond('pruneCond1', $this->getAliasedColName(Oops_Db_CustomizedDataPeer::TYPE), $customizedData->getType(), Criteria::NOT_EQUAL);
			$this->addCond('pruneCond2', $this->getAliasedColName(Oops_Db_CustomizedDataPeer::INDEX), $customizedData->getIndex(), Criteria::NOT_EQUAL);
			$this->combine(array('pruneCond0', 'pruneCond1', 'pruneCond2'), Criteria::LOGICAL_OR);
		}

		return $this;
	}

} // Oops_Db_Propel_CustomizedDataQuery