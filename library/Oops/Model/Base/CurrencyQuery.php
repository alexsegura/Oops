<?php


/**
 * Base class that represents a query for the 'currency' table.
 *
 * 
 *
 * @method     Oops_Model_CurrencyQuery orderByIdCurrency($order = Criteria::ASC) Order by the id_currency column
 * @method     Oops_Model_CurrencyQuery orderByName($order = Criteria::ASC) Order by the name column
 * @method     Oops_Model_CurrencyQuery orderByIsoCode($order = Criteria::ASC) Order by the iso_code column
 * @method     Oops_Model_CurrencyQuery orderByIsoCodeNum($order = Criteria::ASC) Order by the iso_code_num column
 * @method     Oops_Model_CurrencyQuery orderBySign($order = Criteria::ASC) Order by the sign column
 * @method     Oops_Model_CurrencyQuery orderByBlank($order = Criteria::ASC) Order by the blank column
 * @method     Oops_Model_CurrencyQuery orderByFormat($order = Criteria::ASC) Order by the format column
 * @method     Oops_Model_CurrencyQuery orderByDecimals($order = Criteria::ASC) Order by the decimals column
 * @method     Oops_Model_CurrencyQuery orderByConversionRate($order = Criteria::ASC) Order by the conversion_rate column
 * @method     Oops_Model_CurrencyQuery orderByDeleted($order = Criteria::ASC) Order by the deleted column
 * @method     Oops_Model_CurrencyQuery orderByActive($order = Criteria::ASC) Order by the active column
 *
 * @method     Oops_Model_CurrencyQuery groupByIdCurrency() Group by the id_currency column
 * @method     Oops_Model_CurrencyQuery groupByName() Group by the name column
 * @method     Oops_Model_CurrencyQuery groupByIsoCode() Group by the iso_code column
 * @method     Oops_Model_CurrencyQuery groupByIsoCodeNum() Group by the iso_code_num column
 * @method     Oops_Model_CurrencyQuery groupBySign() Group by the sign column
 * @method     Oops_Model_CurrencyQuery groupByBlank() Group by the blank column
 * @method     Oops_Model_CurrencyQuery groupByFormat() Group by the format column
 * @method     Oops_Model_CurrencyQuery groupByDecimals() Group by the decimals column
 * @method     Oops_Model_CurrencyQuery groupByConversionRate() Group by the conversion_rate column
 * @method     Oops_Model_CurrencyQuery groupByDeleted() Group by the deleted column
 * @method     Oops_Model_CurrencyQuery groupByActive() Group by the active column
 *
 * @method     Oops_Model_CurrencyQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     Oops_Model_CurrencyQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     Oops_Model_CurrencyQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     Oops_Model_Currency findOne(PropelPDO $con = null) Return the first Oops_Model_Currency matching the query
 * @method     Oops_Model_Currency findOneOrCreate(PropelPDO $con = null) Return the first Oops_Model_Currency matching the query, or a new Oops_Model_Currency object populated from the query conditions when no match is found
 *
 * @method     Oops_Model_Currency findOneByIdCurrency(int $id_currency) Return the first Oops_Model_Currency filtered by the id_currency column
 * @method     Oops_Model_Currency findOneByName(string $name) Return the first Oops_Model_Currency filtered by the name column
 * @method     Oops_Model_Currency findOneByIsoCode(string $iso_code) Return the first Oops_Model_Currency filtered by the iso_code column
 * @method     Oops_Model_Currency findOneByIsoCodeNum(string $iso_code_num) Return the first Oops_Model_Currency filtered by the iso_code_num column
 * @method     Oops_Model_Currency findOneBySign(string $sign) Return the first Oops_Model_Currency filtered by the sign column
 * @method     Oops_Model_Currency findOneByBlank(boolean $blank) Return the first Oops_Model_Currency filtered by the blank column
 * @method     Oops_Model_Currency findOneByFormat(boolean $format) Return the first Oops_Model_Currency filtered by the format column
 * @method     Oops_Model_Currency findOneByDecimals(boolean $decimals) Return the first Oops_Model_Currency filtered by the decimals column
 * @method     Oops_Model_Currency findOneByConversionRate(string $conversion_rate) Return the first Oops_Model_Currency filtered by the conversion_rate column
 * @method     Oops_Model_Currency findOneByDeleted(boolean $deleted) Return the first Oops_Model_Currency filtered by the deleted column
 * @method     Oops_Model_Currency findOneByActive(boolean $active) Return the first Oops_Model_Currency filtered by the active column
 *
 * @method     array findByIdCurrency(int $id_currency) Return Oops_Model_Currency objects filtered by the id_currency column
 * @method     array findByName(string $name) Return Oops_Model_Currency objects filtered by the name column
 * @method     array findByIsoCode(string $iso_code) Return Oops_Model_Currency objects filtered by the iso_code column
 * @method     array findByIsoCodeNum(string $iso_code_num) Return Oops_Model_Currency objects filtered by the iso_code_num column
 * @method     array findBySign(string $sign) Return Oops_Model_Currency objects filtered by the sign column
 * @method     array findByBlank(boolean $blank) Return Oops_Model_Currency objects filtered by the blank column
 * @method     array findByFormat(boolean $format) Return Oops_Model_Currency objects filtered by the format column
 * @method     array findByDecimals(boolean $decimals) Return Oops_Model_Currency objects filtered by the decimals column
 * @method     array findByConversionRate(string $conversion_rate) Return Oops_Model_Currency objects filtered by the conversion_rate column
 * @method     array findByDeleted(boolean $deleted) Return Oops_Model_Currency objects filtered by the deleted column
 * @method     array findByActive(boolean $active) Return Oops_Model_Currency objects filtered by the active column
 *
 * @package    propel.generator.prestashop.om
 */
abstract class Oops_Model_Base_CurrencyQuery extends ModelCriteria
{
	
	/**
	 * Initializes internal state of Oops_Model_Base_CurrencyQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'prestashop', $modelName = 'Oops_Model_Currency', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new Oops_Model_CurrencyQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    Oops_Model_CurrencyQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof Oops_Model_CurrencyQuery) {
			return $criteria;
		}
		$query = new Oops_Model_CurrencyQuery();
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
	 * @return    Oops_Model_Currency|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ($key === null) {
			return null;
		}
		if ((null !== ($obj = Oops_Model_CurrencyPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
			// the object is alredy in the instance pool
			return $obj;
		}
		if ($con === null) {
			$con = Propel::getConnection(Oops_Model_CurrencyPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
	 * @return    Oops_Model_Currency A model object, or null if the key is not found
	 */
	protected function findPkSimple($key, $con)
	{
		$sql = 'SELECT `ID_CURRENCY`, `NAME`, `ISO_CODE`, `ISO_CODE_NUM`, `SIGN`, `BLANK`, `FORMAT`, `DECIMALS`, `CONVERSION_RATE`, `DELETED`, `ACTIVE` FROM `' . _DB_PREFIX_ . 'currency` WHERE `ID_CURRENCY` = :p0';
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
			$obj = new Oops_Model_Currency();
			$obj->hydrate($row);
			Oops_Model_CurrencyPeer::addInstanceToPool($obj, (string) $row[0]);
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
	 * @return    Oops_Model_Currency|array|mixed the result, formatted by the current formatter
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
	 * @return    Oops_Model_CurrencyQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(Oops_Model_CurrencyPeer::ID_CURRENCY, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    Oops_Model_CurrencyQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(Oops_Model_CurrencyPeer::ID_CURRENCY, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id_currency column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByIdCurrency(1234); // WHERE id_currency = 1234
	 * $query->filterByIdCurrency(array(12, 34)); // WHERE id_currency IN (12, 34)
	 * $query->filterByIdCurrency(array('min' => 12)); // WHERE id_currency > 12
	 * </code>
	 *
	 * @param     mixed $idCurrency The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_CurrencyQuery The current query, for fluid interface
	 */
	public function filterByIdCurrency($idCurrency = null, $comparison = null)
	{
		if (is_array($idCurrency) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(Oops_Model_CurrencyPeer::ID_CURRENCY, $idCurrency, $comparison);
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
	 * @return    Oops_Model_CurrencyQuery The current query, for fluid interface
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
		return $this->addUsingAlias(Oops_Model_CurrencyPeer::NAME, $name, $comparison);
	}

	/**
	 * Filter the query on the iso_code column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByIsoCode('fooValue');   // WHERE iso_code = 'fooValue'
	 * $query->filterByIsoCode('%fooValue%'); // WHERE iso_code LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $isoCode The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_CurrencyQuery The current query, for fluid interface
	 */
	public function filterByIsoCode($isoCode = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($isoCode)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $isoCode)) {
				$isoCode = str_replace('*', '%', $isoCode);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(Oops_Model_CurrencyPeer::ISO_CODE, $isoCode, $comparison);
	}

	/**
	 * Filter the query on the iso_code_num column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByIsoCodeNum('fooValue');   // WHERE iso_code_num = 'fooValue'
	 * $query->filterByIsoCodeNum('%fooValue%'); // WHERE iso_code_num LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $isoCodeNum The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_CurrencyQuery The current query, for fluid interface
	 */
	public function filterByIsoCodeNum($isoCodeNum = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($isoCodeNum)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $isoCodeNum)) {
				$isoCodeNum = str_replace('*', '%', $isoCodeNum);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(Oops_Model_CurrencyPeer::ISO_CODE_NUM, $isoCodeNum, $comparison);
	}

	/**
	 * Filter the query on the sign column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterBySign('fooValue');   // WHERE sign = 'fooValue'
	 * $query->filterBySign('%fooValue%'); // WHERE sign LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $sign The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_CurrencyQuery The current query, for fluid interface
	 */
	public function filterBySign($sign = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($sign)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $sign)) {
				$sign = str_replace('*', '%', $sign);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(Oops_Model_CurrencyPeer::SIGN, $sign, $comparison);
	}

	/**
	 * Filter the query on the blank column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByBlank(true); // WHERE blank = true
	 * $query->filterByBlank('yes'); // WHERE blank = true
	 * </code>
	 *
	 * @param     boolean|string $blank The value to use as filter.
	 *              Non-boolean arguments are converted using the following rules:
	 *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_CurrencyQuery The current query, for fluid interface
	 */
	public function filterByBlank($blank = null, $comparison = null)
	{
		if (is_string($blank)) {
			$blank = in_array(strtolower($blank), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(Oops_Model_CurrencyPeer::BLANK, $blank, $comparison);
	}

	/**
	 * Filter the query on the format column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByFormat(true); // WHERE format = true
	 * $query->filterByFormat('yes'); // WHERE format = true
	 * </code>
	 *
	 * @param     boolean|string $format The value to use as filter.
	 *              Non-boolean arguments are converted using the following rules:
	 *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_CurrencyQuery The current query, for fluid interface
	 */
	public function filterByFormat($format = null, $comparison = null)
	{
		if (is_string($format)) {
			$format = in_array(strtolower($format), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(Oops_Model_CurrencyPeer::FORMAT, $format, $comparison);
	}

	/**
	 * Filter the query on the decimals column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByDecimals(true); // WHERE decimals = true
	 * $query->filterByDecimals('yes'); // WHERE decimals = true
	 * </code>
	 *
	 * @param     boolean|string $decimals The value to use as filter.
	 *              Non-boolean arguments are converted using the following rules:
	 *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_CurrencyQuery The current query, for fluid interface
	 */
	public function filterByDecimals($decimals = null, $comparison = null)
	{
		if (is_string($decimals)) {
			$decimals = in_array(strtolower($decimals), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(Oops_Model_CurrencyPeer::DECIMALS, $decimals, $comparison);
	}

	/**
	 * Filter the query on the conversion_rate column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByConversionRate(1234); // WHERE conversion_rate = 1234
	 * $query->filterByConversionRate(array(12, 34)); // WHERE conversion_rate IN (12, 34)
	 * $query->filterByConversionRate(array('min' => 12)); // WHERE conversion_rate > 12
	 * </code>
	 *
	 * @param     mixed $conversionRate The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_CurrencyQuery The current query, for fluid interface
	 */
	public function filterByConversionRate($conversionRate = null, $comparison = null)
	{
		if (is_array($conversionRate)) {
			$useMinMax = false;
			if (isset($conversionRate['min'])) {
				$this->addUsingAlias(Oops_Model_CurrencyPeer::CONVERSION_RATE, $conversionRate['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($conversionRate['max'])) {
				$this->addUsingAlias(Oops_Model_CurrencyPeer::CONVERSION_RATE, $conversionRate['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_CurrencyPeer::CONVERSION_RATE, $conversionRate, $comparison);
	}

	/**
	 * Filter the query on the deleted column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByDeleted(true); // WHERE deleted = true
	 * $query->filterByDeleted('yes'); // WHERE deleted = true
	 * </code>
	 *
	 * @param     boolean|string $deleted The value to use as filter.
	 *              Non-boolean arguments are converted using the following rules:
	 *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_CurrencyQuery The current query, for fluid interface
	 */
	public function filterByDeleted($deleted = null, $comparison = null)
	{
		if (is_string($deleted)) {
			$deleted = in_array(strtolower($deleted), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(Oops_Model_CurrencyPeer::DELETED, $deleted, $comparison);
	}

	/**
	 * Filter the query on the active column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByActive(true); // WHERE active = true
	 * $query->filterByActive('yes'); // WHERE active = true
	 * </code>
	 *
	 * @param     boolean|string $active The value to use as filter.
	 *              Non-boolean arguments are converted using the following rules:
	 *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_CurrencyQuery The current query, for fluid interface
	 */
	public function filterByActive($active = null, $comparison = null)
	{
		if (is_string($active)) {
			$active = in_array(strtolower($active), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(Oops_Model_CurrencyPeer::ACTIVE, $active, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     Oops_Model_Currency $currency Object to remove from the list of results
	 *
	 * @return    Oops_Model_CurrencyQuery The current query, for fluid interface
	 */
	public function prune($currency = null)
	{
		if ($currency) {
			$this->addUsingAlias(Oops_Model_CurrencyPeer::ID_CURRENCY, $currency->getIdCurrency(), Criteria::NOT_EQUAL);
		}

		return $this;
	}

} // Oops_Model_Base_CurrencyQuery