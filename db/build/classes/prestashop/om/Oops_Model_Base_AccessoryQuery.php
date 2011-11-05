<?php


/**
 * Base class that represents a query for the '' . _DB_PREFIX_ . 'djland_accessory' table.
 *
 * 
 *
 * @method     Oops_Model_AccessoryQuery orderByIdProduct1($order = Criteria::ASC) Order by the id_product_1 column
 * @method     Oops_Model_AccessoryQuery orderByIdProduct2($order = Criteria::ASC) Order by the id_product_2 column
 *
 * @method     Oops_Model_AccessoryQuery groupByIdProduct1() Group by the id_product_1 column
 * @method     Oops_Model_AccessoryQuery groupByIdProduct2() Group by the id_product_2 column
 *
 * @method     Oops_Model_AccessoryQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     Oops_Model_AccessoryQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     Oops_Model_AccessoryQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     Oops_Model_Accessory findOne(PropelPDO $con = null) Return the first Oops_Model_Accessory matching the query
 * @method     Oops_Model_Accessory findOneOrCreate(PropelPDO $con = null) Return the first Oops_Model_Accessory matching the query, or a new Oops_Model_Accessory object populated from the query conditions when no match is found
 *
 * @method     Oops_Model_Accessory findOneByIdProduct1(int $id_product_1) Return the first Oops_Model_Accessory filtered by the id_product_1 column
 * @method     Oops_Model_Accessory findOneByIdProduct2(int $id_product_2) Return the first Oops_Model_Accessory filtered by the id_product_2 column
 *
 * @method     array findByIdProduct1(int $id_product_1) Return Oops_Model_Accessory objects filtered by the id_product_1 column
 * @method     array findByIdProduct2(int $id_product_2) Return Oops_Model_Accessory objects filtered by the id_product_2 column
 *
 * @package    propel.generator.prestashop.om
 */
abstract class Oops_Model_Base_AccessoryQuery extends ModelCriteria
{
	
	/**
	 * Initializes internal state of Oops_Model_Base_AccessoryQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'prestashop', $modelName = 'Oops_Model_Accessory', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new Oops_Model_AccessoryQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    Oops_Model_AccessoryQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof Oops_Model_AccessoryQuery) {
			return $criteria;
		}
		$query = new Oops_Model_AccessoryQuery();
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
	 * @return    Oops_Model_Accessory|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ($key === null) {
			return null;
		}
		if ((null !== ($obj = Oops_Model_AccessoryPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
			// the object is alredy in the instance pool
			return $obj;
		}
		if ($con === null) {
			$con = Propel::getConnection(Oops_Model_AccessoryPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
	 * @return    Oops_Model_Accessory A model object, or null if the key is not found
	 */
	protected function findPkSimple($key, $con)
	{
		$sql = 'SELECT `ID_PRODUCT_1`, `ID_PRODUCT_2` FROM `' . _DB_PREFIX_ . 'djland_accessory` WHERE `ID_PRODUCT_1` = :p0';
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
			$obj = new Oops_Model_Accessory();
			$obj->hydrate($row);
			Oops_Model_AccessoryPeer::addInstanceToPool($obj, (string) $row[0]);
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
	 * @return    Oops_Model_Accessory|array|mixed the result, formatted by the current formatter
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
	 * @return    Oops_Model_AccessoryQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(Oops_Model_AccessoryPeer::ID_PRODUCT_1, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    Oops_Model_AccessoryQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(Oops_Model_AccessoryPeer::ID_PRODUCT_1, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id_product_1 column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByIdProduct1(1234); // WHERE id_product_1 = 1234
	 * $query->filterByIdProduct1(array(12, 34)); // WHERE id_product_1 IN (12, 34)
	 * $query->filterByIdProduct1(array('min' => 12)); // WHERE id_product_1 > 12
	 * </code>
	 *
	 * @param     mixed $idProduct1 The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_AccessoryQuery The current query, for fluid interface
	 */
	public function filterByIdProduct1($idProduct1 = null, $comparison = null)
	{
		if (is_array($idProduct1) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(Oops_Model_AccessoryPeer::ID_PRODUCT_1, $idProduct1, $comparison);
	}

	/**
	 * Filter the query on the id_product_2 column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByIdProduct2(1234); // WHERE id_product_2 = 1234
	 * $query->filterByIdProduct2(array(12, 34)); // WHERE id_product_2 IN (12, 34)
	 * $query->filterByIdProduct2(array('min' => 12)); // WHERE id_product_2 > 12
	 * </code>
	 *
	 * @param     mixed $idProduct2 The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_AccessoryQuery The current query, for fluid interface
	 */
	public function filterByIdProduct2($idProduct2 = null, $comparison = null)
	{
		if (is_array($idProduct2)) {
			$useMinMax = false;
			if (isset($idProduct2['min'])) {
				$this->addUsingAlias(Oops_Model_AccessoryPeer::ID_PRODUCT_2, $idProduct2['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($idProduct2['max'])) {
				$this->addUsingAlias(Oops_Model_AccessoryPeer::ID_PRODUCT_2, $idProduct2['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_AccessoryPeer::ID_PRODUCT_2, $idProduct2, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     Oops_Model_Accessory $accessory Object to remove from the list of results
	 *
	 * @return    Oops_Model_AccessoryQuery The current query, for fluid interface
	 */
	public function prune($accessory = null)
	{
		if ($accessory) {
			$this->addUsingAlias(Oops_Model_AccessoryPeer::ID_PRODUCT_1, $accessory->getIdProduct1(), Criteria::NOT_EQUAL);
		}

		return $this;
	}

} // Oops_Model_Base_AccessoryQuery