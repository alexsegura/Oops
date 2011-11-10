<?php


/**
 * Base class that represents a query for the 'carrier_lang' table.
 *
 * 
 *
 * @method     Oops_Model_CarrierLangQuery orderByIdCarrier($order = Criteria::ASC) Order by the id_carrier column
 * @method     Oops_Model_CarrierLangQuery orderByIdLang($order = Criteria::ASC) Order by the id_lang column
 * @method     Oops_Model_CarrierLangQuery orderByDelay($order = Criteria::ASC) Order by the delay column
 *
 * @method     Oops_Model_CarrierLangQuery groupByIdCarrier() Group by the id_carrier column
 * @method     Oops_Model_CarrierLangQuery groupByIdLang() Group by the id_lang column
 * @method     Oops_Model_CarrierLangQuery groupByDelay() Group by the delay column
 *
 * @method     Oops_Model_CarrierLangQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     Oops_Model_CarrierLangQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     Oops_Model_CarrierLangQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     Oops_Model_CarrierLang findOne(PropelPDO $con = null) Return the first Oops_Model_CarrierLang matching the query
 * @method     Oops_Model_CarrierLang findOneOrCreate(PropelPDO $con = null) Return the first Oops_Model_CarrierLang matching the query, or a new Oops_Model_CarrierLang object populated from the query conditions when no match is found
 *
 * @method     Oops_Model_CarrierLang findOneByIdCarrier(int $id_carrier) Return the first Oops_Model_CarrierLang filtered by the id_carrier column
 * @method     Oops_Model_CarrierLang findOneByIdLang(int $id_lang) Return the first Oops_Model_CarrierLang filtered by the id_lang column
 * @method     Oops_Model_CarrierLang findOneByDelay(string $delay) Return the first Oops_Model_CarrierLang filtered by the delay column
 *
 * @method     array findByIdCarrier(int $id_carrier) Return Oops_Model_CarrierLang objects filtered by the id_carrier column
 * @method     array findByIdLang(int $id_lang) Return Oops_Model_CarrierLang objects filtered by the id_lang column
 * @method     array findByDelay(string $delay) Return Oops_Model_CarrierLang objects filtered by the delay column
 *
 * @package    propel.generator.prestashop.om
 */
abstract class Oops_Model_Base_CarrierLangQuery extends ModelCriteria
{
	
	/**
	 * Initializes internal state of Oops_Model_Base_CarrierLangQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'prestashop', $modelName = 'Oops_Model_CarrierLang', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new Oops_Model_CarrierLangQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    Oops_Model_CarrierLangQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof Oops_Model_CarrierLangQuery) {
			return $criteria;
		}
		$query = new Oops_Model_CarrierLangQuery();
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
	 * @return    Oops_Model_CarrierLang|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ($key === null) {
			return null;
		}
		if ((null !== ($obj = Oops_Model_CarrierLangPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
			// the object is alredy in the instance pool
			return $obj;
		}
		if ($con === null) {
			$con = Propel::getConnection(Oops_Model_CarrierLangPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
	 * @return    Oops_Model_CarrierLang A model object, or null if the key is not found
	 */
	protected function findPkSimple($key, $con)
	{
		$sql = 'SELECT `ID_CARRIER`, `ID_LANG`, `DELAY` FROM `' . _DB_PREFIX_ . 'carrier_lang` WHERE `ID_CARRIER` = :p0';
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
			$obj = new Oops_Model_CarrierLang();
			$obj->hydrate($row);
			Oops_Model_CarrierLangPeer::addInstanceToPool($obj, (string) $row[0]);
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
	 * @return    Oops_Model_CarrierLang|array|mixed the result, formatted by the current formatter
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
	 * @return    Oops_Model_CarrierLangQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(Oops_Model_CarrierLangPeer::ID_CARRIER, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    Oops_Model_CarrierLangQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(Oops_Model_CarrierLangPeer::ID_CARRIER, $keys, Criteria::IN);
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
	 * @return    Oops_Model_CarrierLangQuery The current query, for fluid interface
	 */
	public function filterByIdCarrier($idCarrier = null, $comparison = null)
	{
		if (is_array($idCarrier) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(Oops_Model_CarrierLangPeer::ID_CARRIER, $idCarrier, $comparison);
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
	 * @return    Oops_Model_CarrierLangQuery The current query, for fluid interface
	 */
	public function filterByIdLang($idLang = null, $comparison = null)
	{
		if (is_array($idLang)) {
			$useMinMax = false;
			if (isset($idLang['min'])) {
				$this->addUsingAlias(Oops_Model_CarrierLangPeer::ID_LANG, $idLang['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($idLang['max'])) {
				$this->addUsingAlias(Oops_Model_CarrierLangPeer::ID_LANG, $idLang['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_CarrierLangPeer::ID_LANG, $idLang, $comparison);
	}

	/**
	 * Filter the query on the delay column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByDelay('fooValue');   // WHERE delay = 'fooValue'
	 * $query->filterByDelay('%fooValue%'); // WHERE delay LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $delay The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_CarrierLangQuery The current query, for fluid interface
	 */
	public function filterByDelay($delay = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($delay)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $delay)) {
				$delay = str_replace('*', '%', $delay);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(Oops_Model_CarrierLangPeer::DELAY, $delay, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     Oops_Model_CarrierLang $carrierLang Object to remove from the list of results
	 *
	 * @return    Oops_Model_CarrierLangQuery The current query, for fluid interface
	 */
	public function prune($carrierLang = null)
	{
		if ($carrierLang) {
			$this->addUsingAlias(Oops_Model_CarrierLangPeer::ID_CARRIER, $carrierLang->getIdCarrier(), Criteria::NOT_EQUAL);
		}

		return $this;
	}

} // Oops_Model_Base_CarrierLangQuery