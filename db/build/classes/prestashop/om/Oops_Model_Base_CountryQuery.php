<?php


/**
 * Base class that represents a query for the '' . _DB_PREFIX_ . 'djland_country' table.
 *
 * 
 *
 * @method     Oops_Model_CountryQuery orderByIdCountry($order = Criteria::ASC) Order by the id_country column
 * @method     Oops_Model_CountryQuery orderByIdZone($order = Criteria::ASC) Order by the id_zone column
 * @method     Oops_Model_CountryQuery orderByIdCurrency($order = Criteria::ASC) Order by the id_currency column
 * @method     Oops_Model_CountryQuery orderByIsoCode($order = Criteria::ASC) Order by the iso_code column
 * @method     Oops_Model_CountryQuery orderByCallPrefix($order = Criteria::ASC) Order by the call_prefix column
 * @method     Oops_Model_CountryQuery orderByActive($order = Criteria::ASC) Order by the active column
 * @method     Oops_Model_CountryQuery orderByContainsStates($order = Criteria::ASC) Order by the contains_states column
 * @method     Oops_Model_CountryQuery orderByNeedIdentificationNumber($order = Criteria::ASC) Order by the need_identification_number column
 * @method     Oops_Model_CountryQuery orderByNeedZipCode($order = Criteria::ASC) Order by the need_zip_code column
 * @method     Oops_Model_CountryQuery orderByZipCodeFormat($order = Criteria::ASC) Order by the zip_code_format column
 * @method     Oops_Model_CountryQuery orderByDisplayTaxLabel($order = Criteria::ASC) Order by the display_tax_label column
 *
 * @method     Oops_Model_CountryQuery groupByIdCountry() Group by the id_country column
 * @method     Oops_Model_CountryQuery groupByIdZone() Group by the id_zone column
 * @method     Oops_Model_CountryQuery groupByIdCurrency() Group by the id_currency column
 * @method     Oops_Model_CountryQuery groupByIsoCode() Group by the iso_code column
 * @method     Oops_Model_CountryQuery groupByCallPrefix() Group by the call_prefix column
 * @method     Oops_Model_CountryQuery groupByActive() Group by the active column
 * @method     Oops_Model_CountryQuery groupByContainsStates() Group by the contains_states column
 * @method     Oops_Model_CountryQuery groupByNeedIdentificationNumber() Group by the need_identification_number column
 * @method     Oops_Model_CountryQuery groupByNeedZipCode() Group by the need_zip_code column
 * @method     Oops_Model_CountryQuery groupByZipCodeFormat() Group by the zip_code_format column
 * @method     Oops_Model_CountryQuery groupByDisplayTaxLabel() Group by the display_tax_label column
 *
 * @method     Oops_Model_CountryQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     Oops_Model_CountryQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     Oops_Model_CountryQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     Oops_Model_Country findOne(PropelPDO $con = null) Return the first Oops_Model_Country matching the query
 * @method     Oops_Model_Country findOneOrCreate(PropelPDO $con = null) Return the first Oops_Model_Country matching the query, or a new Oops_Model_Country object populated from the query conditions when no match is found
 *
 * @method     Oops_Model_Country findOneByIdCountry(int $id_country) Return the first Oops_Model_Country filtered by the id_country column
 * @method     Oops_Model_Country findOneByIdZone(int $id_zone) Return the first Oops_Model_Country filtered by the id_zone column
 * @method     Oops_Model_Country findOneByIdCurrency(int $id_currency) Return the first Oops_Model_Country filtered by the id_currency column
 * @method     Oops_Model_Country findOneByIsoCode(string $iso_code) Return the first Oops_Model_Country filtered by the iso_code column
 * @method     Oops_Model_Country findOneByCallPrefix(int $call_prefix) Return the first Oops_Model_Country filtered by the call_prefix column
 * @method     Oops_Model_Country findOneByActive(boolean $active) Return the first Oops_Model_Country filtered by the active column
 * @method     Oops_Model_Country findOneByContainsStates(boolean $contains_states) Return the first Oops_Model_Country filtered by the contains_states column
 * @method     Oops_Model_Country findOneByNeedIdentificationNumber(boolean $need_identification_number) Return the first Oops_Model_Country filtered by the need_identification_number column
 * @method     Oops_Model_Country findOneByNeedZipCode(boolean $need_zip_code) Return the first Oops_Model_Country filtered by the need_zip_code column
 * @method     Oops_Model_Country findOneByZipCodeFormat(string $zip_code_format) Return the first Oops_Model_Country filtered by the zip_code_format column
 * @method     Oops_Model_Country findOneByDisplayTaxLabel(boolean $display_tax_label) Return the first Oops_Model_Country filtered by the display_tax_label column
 *
 * @method     array findByIdCountry(int $id_country) Return Oops_Model_Country objects filtered by the id_country column
 * @method     array findByIdZone(int $id_zone) Return Oops_Model_Country objects filtered by the id_zone column
 * @method     array findByIdCurrency(int $id_currency) Return Oops_Model_Country objects filtered by the id_currency column
 * @method     array findByIsoCode(string $iso_code) Return Oops_Model_Country objects filtered by the iso_code column
 * @method     array findByCallPrefix(int $call_prefix) Return Oops_Model_Country objects filtered by the call_prefix column
 * @method     array findByActive(boolean $active) Return Oops_Model_Country objects filtered by the active column
 * @method     array findByContainsStates(boolean $contains_states) Return Oops_Model_Country objects filtered by the contains_states column
 * @method     array findByNeedIdentificationNumber(boolean $need_identification_number) Return Oops_Model_Country objects filtered by the need_identification_number column
 * @method     array findByNeedZipCode(boolean $need_zip_code) Return Oops_Model_Country objects filtered by the need_zip_code column
 * @method     array findByZipCodeFormat(string $zip_code_format) Return Oops_Model_Country objects filtered by the zip_code_format column
 * @method     array findByDisplayTaxLabel(boolean $display_tax_label) Return Oops_Model_Country objects filtered by the display_tax_label column
 *
 * @package    propel.generator.prestashop.om
 */
abstract class Oops_Model_Base_CountryQuery extends ModelCriteria
{
	
	/**
	 * Initializes internal state of Oops_Model_Base_CountryQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'prestashop', $modelName = 'Oops_Model_Country', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new Oops_Model_CountryQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    Oops_Model_CountryQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof Oops_Model_CountryQuery) {
			return $criteria;
		}
		$query = new Oops_Model_CountryQuery();
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
	 * @return    Oops_Model_Country|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ($key === null) {
			return null;
		}
		if ((null !== ($obj = Oops_Model_CountryPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
			// the object is alredy in the instance pool
			return $obj;
		}
		if ($con === null) {
			$con = Propel::getConnection(Oops_Model_CountryPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
	 * @return    Oops_Model_Country A model object, or null if the key is not found
	 */
	protected function findPkSimple($key, $con)
	{
		$sql = 'SELECT `ID_COUNTRY`, `ID_ZONE`, `ID_CURRENCY`, `ISO_CODE`, `CALL_PREFIX`, `ACTIVE`, `CONTAINS_STATES`, `NEED_IDENTIFICATION_NUMBER`, `NEED_ZIP_CODE`, `ZIP_CODE_FORMAT`, `DISPLAY_TAX_LABEL` FROM `' . _DB_PREFIX_ . 'djland_country` WHERE `ID_COUNTRY` = :p0';
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
			$obj = new Oops_Model_Country();
			$obj->hydrate($row);
			Oops_Model_CountryPeer::addInstanceToPool($obj, (string) $row[0]);
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
	 * @return    Oops_Model_Country|array|mixed the result, formatted by the current formatter
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
	 * @return    Oops_Model_CountryQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(Oops_Model_CountryPeer::ID_COUNTRY, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    Oops_Model_CountryQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(Oops_Model_CountryPeer::ID_COUNTRY, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id_country column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByIdCountry(1234); // WHERE id_country = 1234
	 * $query->filterByIdCountry(array(12, 34)); // WHERE id_country IN (12, 34)
	 * $query->filterByIdCountry(array('min' => 12)); // WHERE id_country > 12
	 * </code>
	 *
	 * @param     mixed $idCountry The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_CountryQuery The current query, for fluid interface
	 */
	public function filterByIdCountry($idCountry = null, $comparison = null)
	{
		if (is_array($idCountry) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(Oops_Model_CountryPeer::ID_COUNTRY, $idCountry, $comparison);
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
	 * @return    Oops_Model_CountryQuery The current query, for fluid interface
	 */
	public function filterByIdZone($idZone = null, $comparison = null)
	{
		if (is_array($idZone)) {
			$useMinMax = false;
			if (isset($idZone['min'])) {
				$this->addUsingAlias(Oops_Model_CountryPeer::ID_ZONE, $idZone['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($idZone['max'])) {
				$this->addUsingAlias(Oops_Model_CountryPeer::ID_ZONE, $idZone['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_CountryPeer::ID_ZONE, $idZone, $comparison);
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
	 * @return    Oops_Model_CountryQuery The current query, for fluid interface
	 */
	public function filterByIdCurrency($idCurrency = null, $comparison = null)
	{
		if (is_array($idCurrency)) {
			$useMinMax = false;
			if (isset($idCurrency['min'])) {
				$this->addUsingAlias(Oops_Model_CountryPeer::ID_CURRENCY, $idCurrency['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($idCurrency['max'])) {
				$this->addUsingAlias(Oops_Model_CountryPeer::ID_CURRENCY, $idCurrency['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_CountryPeer::ID_CURRENCY, $idCurrency, $comparison);
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
	 * @return    Oops_Model_CountryQuery The current query, for fluid interface
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
		return $this->addUsingAlias(Oops_Model_CountryPeer::ISO_CODE, $isoCode, $comparison);
	}

	/**
	 * Filter the query on the call_prefix column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByCallPrefix(1234); // WHERE call_prefix = 1234
	 * $query->filterByCallPrefix(array(12, 34)); // WHERE call_prefix IN (12, 34)
	 * $query->filterByCallPrefix(array('min' => 12)); // WHERE call_prefix > 12
	 * </code>
	 *
	 * @param     mixed $callPrefix The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_CountryQuery The current query, for fluid interface
	 */
	public function filterByCallPrefix($callPrefix = null, $comparison = null)
	{
		if (is_array($callPrefix)) {
			$useMinMax = false;
			if (isset($callPrefix['min'])) {
				$this->addUsingAlias(Oops_Model_CountryPeer::CALL_PREFIX, $callPrefix['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($callPrefix['max'])) {
				$this->addUsingAlias(Oops_Model_CountryPeer::CALL_PREFIX, $callPrefix['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_CountryPeer::CALL_PREFIX, $callPrefix, $comparison);
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
	 * @return    Oops_Model_CountryQuery The current query, for fluid interface
	 */
	public function filterByActive($active = null, $comparison = null)
	{
		if (is_string($active)) {
			$active = in_array(strtolower($active), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(Oops_Model_CountryPeer::ACTIVE, $active, $comparison);
	}

	/**
	 * Filter the query on the contains_states column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByContainsStates(true); // WHERE contains_states = true
	 * $query->filterByContainsStates('yes'); // WHERE contains_states = true
	 * </code>
	 *
	 * @param     boolean|string $containsStates The value to use as filter.
	 *              Non-boolean arguments are converted using the following rules:
	 *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_CountryQuery The current query, for fluid interface
	 */
	public function filterByContainsStates($containsStates = null, $comparison = null)
	{
		if (is_string($containsStates)) {
			$contains_states = in_array(strtolower($containsStates), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(Oops_Model_CountryPeer::CONTAINS_STATES, $containsStates, $comparison);
	}

	/**
	 * Filter the query on the need_identification_number column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByNeedIdentificationNumber(true); // WHERE need_identification_number = true
	 * $query->filterByNeedIdentificationNumber('yes'); // WHERE need_identification_number = true
	 * </code>
	 *
	 * @param     boolean|string $needIdentificationNumber The value to use as filter.
	 *              Non-boolean arguments are converted using the following rules:
	 *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_CountryQuery The current query, for fluid interface
	 */
	public function filterByNeedIdentificationNumber($needIdentificationNumber = null, $comparison = null)
	{
		if (is_string($needIdentificationNumber)) {
			$need_identification_number = in_array(strtolower($needIdentificationNumber), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(Oops_Model_CountryPeer::NEED_IDENTIFICATION_NUMBER, $needIdentificationNumber, $comparison);
	}

	/**
	 * Filter the query on the need_zip_code column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByNeedZipCode(true); // WHERE need_zip_code = true
	 * $query->filterByNeedZipCode('yes'); // WHERE need_zip_code = true
	 * </code>
	 *
	 * @param     boolean|string $needZipCode The value to use as filter.
	 *              Non-boolean arguments are converted using the following rules:
	 *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_CountryQuery The current query, for fluid interface
	 */
	public function filterByNeedZipCode($needZipCode = null, $comparison = null)
	{
		if (is_string($needZipCode)) {
			$need_zip_code = in_array(strtolower($needZipCode), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(Oops_Model_CountryPeer::NEED_ZIP_CODE, $needZipCode, $comparison);
	}

	/**
	 * Filter the query on the zip_code_format column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByZipCodeFormat('fooValue');   // WHERE zip_code_format = 'fooValue'
	 * $query->filterByZipCodeFormat('%fooValue%'); // WHERE zip_code_format LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $zipCodeFormat The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_CountryQuery The current query, for fluid interface
	 */
	public function filterByZipCodeFormat($zipCodeFormat = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($zipCodeFormat)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $zipCodeFormat)) {
				$zipCodeFormat = str_replace('*', '%', $zipCodeFormat);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(Oops_Model_CountryPeer::ZIP_CODE_FORMAT, $zipCodeFormat, $comparison);
	}

	/**
	 * Filter the query on the display_tax_label column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByDisplayTaxLabel(true); // WHERE display_tax_label = true
	 * $query->filterByDisplayTaxLabel('yes'); // WHERE display_tax_label = true
	 * </code>
	 *
	 * @param     boolean|string $displayTaxLabel The value to use as filter.
	 *              Non-boolean arguments are converted using the following rules:
	 *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_CountryQuery The current query, for fluid interface
	 */
	public function filterByDisplayTaxLabel($displayTaxLabel = null, $comparison = null)
	{
		if (is_string($displayTaxLabel)) {
			$display_tax_label = in_array(strtolower($displayTaxLabel), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(Oops_Model_CountryPeer::DISPLAY_TAX_LABEL, $displayTaxLabel, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     Oops_Model_Country $country Object to remove from the list of results
	 *
	 * @return    Oops_Model_CountryQuery The current query, for fluid interface
	 */
	public function prune($country = null)
	{
		if ($country) {
			$this->addUsingAlias(Oops_Model_CountryPeer::ID_COUNTRY, $country->getIdCountry(), Criteria::NOT_EQUAL);
		}

		return $this;
	}

} // Oops_Model_Base_CountryQuery