<?php


/**
 * Base class that represents a query for the '' . _DB_PREFIX_ . 'djland_order_return_state_lang' table.
 *
 * 
 *
 * @method     Oops_Model_OrderReturnStateLangQuery orderByIdOrderReturnState($order = Criteria::ASC) Order by the id_order_return_state column
 * @method     Oops_Model_OrderReturnStateLangQuery orderByIdLang($order = Criteria::ASC) Order by the id_lang column
 * @method     Oops_Model_OrderReturnStateLangQuery orderByName($order = Criteria::ASC) Order by the name column
 *
 * @method     Oops_Model_OrderReturnStateLangQuery groupByIdOrderReturnState() Group by the id_order_return_state column
 * @method     Oops_Model_OrderReturnStateLangQuery groupByIdLang() Group by the id_lang column
 * @method     Oops_Model_OrderReturnStateLangQuery groupByName() Group by the name column
 *
 * @method     Oops_Model_OrderReturnStateLangQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     Oops_Model_OrderReturnStateLangQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     Oops_Model_OrderReturnStateLangQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     Oops_Model_OrderReturnStateLang findOne(PropelPDO $con = null) Return the first Oops_Model_OrderReturnStateLang matching the query
 * @method     Oops_Model_OrderReturnStateLang findOneOrCreate(PropelPDO $con = null) Return the first Oops_Model_OrderReturnStateLang matching the query, or a new Oops_Model_OrderReturnStateLang object populated from the query conditions when no match is found
 *
 * @method     Oops_Model_OrderReturnStateLang findOneByIdOrderReturnState(int $id_order_return_state) Return the first Oops_Model_OrderReturnStateLang filtered by the id_order_return_state column
 * @method     Oops_Model_OrderReturnStateLang findOneByIdLang(int $id_lang) Return the first Oops_Model_OrderReturnStateLang filtered by the id_lang column
 * @method     Oops_Model_OrderReturnStateLang findOneByName(string $name) Return the first Oops_Model_OrderReturnStateLang filtered by the name column
 *
 * @method     array findByIdOrderReturnState(int $id_order_return_state) Return Oops_Model_OrderReturnStateLang objects filtered by the id_order_return_state column
 * @method     array findByIdLang(int $id_lang) Return Oops_Model_OrderReturnStateLang objects filtered by the id_lang column
 * @method     array findByName(string $name) Return Oops_Model_OrderReturnStateLang objects filtered by the name column
 *
 * @package    propel.generator.prestashop.om
 */
abstract class Oops_Model_Base_OrderReturnStateLangQuery extends ModelCriteria
{
	
	/**
	 * Initializes internal state of Oops_Model_Base_OrderReturnStateLangQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'prestashop', $modelName = 'Oops_Model_OrderReturnStateLang', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new Oops_Model_OrderReturnStateLangQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    Oops_Model_OrderReturnStateLangQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof Oops_Model_OrderReturnStateLangQuery) {
			return $criteria;
		}
		$query = new Oops_Model_OrderReturnStateLangQuery();
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
	 * @return    Oops_Model_OrderReturnStateLang|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ($key === null) {
			return null;
		}
		if ((null !== ($obj = Oops_Model_OrderReturnStateLangPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
			// the object is alredy in the instance pool
			return $obj;
		}
		if ($con === null) {
			$con = Propel::getConnection(Oops_Model_OrderReturnStateLangPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
	 * @return    Oops_Model_OrderReturnStateLang A model object, or null if the key is not found
	 */
	protected function findPkSimple($key, $con)
	{
		$sql = 'SELECT `ID_ORDER_RETURN_STATE`, `ID_LANG`, `NAME` FROM `' . _DB_PREFIX_ . 'djland_order_return_state_lang` WHERE `ID_ORDER_RETURN_STATE` = :p0';
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
			$obj = new Oops_Model_OrderReturnStateLang();
			$obj->hydrate($row);
			Oops_Model_OrderReturnStateLangPeer::addInstanceToPool($obj, (string) $row[0]);
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
	 * @return    Oops_Model_OrderReturnStateLang|array|mixed the result, formatted by the current formatter
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
	 * @return    Oops_Model_OrderReturnStateLangQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(Oops_Model_OrderReturnStateLangPeer::ID_ORDER_RETURN_STATE, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    Oops_Model_OrderReturnStateLangQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(Oops_Model_OrderReturnStateLangPeer::ID_ORDER_RETURN_STATE, $keys, Criteria::IN);
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
	 * @return    Oops_Model_OrderReturnStateLangQuery The current query, for fluid interface
	 */
	public function filterByIdOrderReturnState($idOrderReturnState = null, $comparison = null)
	{
		if (is_array($idOrderReturnState) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(Oops_Model_OrderReturnStateLangPeer::ID_ORDER_RETURN_STATE, $idOrderReturnState, $comparison);
	}

	/**
	 * Filter the query on the id_lang column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByIdLang(1234); // WHERE id_lang = 1234
	 * $query->filterByIdLang(array(12, 34)); // WHERE id_lang IN (12, 34)
	 * $query->filterByIdLang(array('min' => 12)); // WHERE id_lang > 12
	 * </code>
	 *
	 * @param     mixed $idLang The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_OrderReturnStateLangQuery The current query, for fluid interface
	 */
	public function filterByIdLang($idLang = null, $comparison = null)
	{
		if (is_array($idLang)) {
			$useMinMax = false;
			if (isset($idLang['min'])) {
				$this->addUsingAlias(Oops_Model_OrderReturnStateLangPeer::ID_LANG, $idLang['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($idLang['max'])) {
				$this->addUsingAlias(Oops_Model_OrderReturnStateLangPeer::ID_LANG, $idLang['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_OrderReturnStateLangPeer::ID_LANG, $idLang, $comparison);
	}

	/**
	 * Filter the query on the name column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByName('fooValue');   // WHERE name = 'fooValue'
	 * $query->filterByName('%fooValue%'); // WHERE name LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $name The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_OrderReturnStateLangQuery The current query, for fluid interface
	 */
	public function filterByName($name = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($name)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $name)) {
				$name = str_replace('*', '%', $name);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(Oops_Model_OrderReturnStateLangPeer::NAME, $name, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     Oops_Model_OrderReturnStateLang $orderReturnStateLang Object to remove from the list of results
	 *
	 * @return    Oops_Model_OrderReturnStateLangQuery The current query, for fluid interface
	 */
	public function prune($orderReturnStateLang = null)
	{
		if ($orderReturnStateLang) {
			$this->addUsingAlias(Oops_Model_OrderReturnStateLangPeer::ID_ORDER_RETURN_STATE, $orderReturnStateLang->getIdOrderReturnState(), Criteria::NOT_EQUAL);
		}

		return $this;
	}

} // Oops_Model_Base_OrderReturnStateLangQuery