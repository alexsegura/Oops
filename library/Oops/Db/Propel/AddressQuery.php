<?php


/**
 * Base class that represents a query for the 'address' table.
 *
 * 
 *
 * @method     Oops_Db_AddressQuery orderByIdAddress($order = Criteria::ASC) Order by the id_address column
 * @method     Oops_Db_AddressQuery orderByIdCountry($order = Criteria::ASC) Order by the id_country column
 * @method     Oops_Db_AddressQuery orderByIdState($order = Criteria::ASC) Order by the id_state column
 * @method     Oops_Db_AddressQuery orderByIdCustomer($order = Criteria::ASC) Order by the id_customer column
 * @method     Oops_Db_AddressQuery orderByIdManufacturer($order = Criteria::ASC) Order by the id_manufacturer column
 * @method     Oops_Db_AddressQuery orderByIdSupplier($order = Criteria::ASC) Order by the id_supplier column
 * @method     Oops_Db_AddressQuery orderByAlias($order = Criteria::ASC) Order by the alias column
 * @method     Oops_Db_AddressQuery orderByCompany($order = Criteria::ASC) Order by the company column
 * @method     Oops_Db_AddressQuery orderByLastname($order = Criteria::ASC) Order by the lastname column
 * @method     Oops_Db_AddressQuery orderByFirstname($order = Criteria::ASC) Order by the firstname column
 * @method     Oops_Db_AddressQuery orderByAddress1($order = Criteria::ASC) Order by the address1 column
 * @method     Oops_Db_AddressQuery orderByAddress2($order = Criteria::ASC) Order by the address2 column
 * @method     Oops_Db_AddressQuery orderByPostcode($order = Criteria::ASC) Order by the postcode column
 * @method     Oops_Db_AddressQuery orderByCity($order = Criteria::ASC) Order by the city column
 * @method     Oops_Db_AddressQuery orderByOther($order = Criteria::ASC) Order by the other column
 * @method     Oops_Db_AddressQuery orderByPhone($order = Criteria::ASC) Order by the phone column
 * @method     Oops_Db_AddressQuery orderByPhoneMobile($order = Criteria::ASC) Order by the phone_mobile column
 * @method     Oops_Db_AddressQuery orderByVatNumber($order = Criteria::ASC) Order by the vat_number column
 * @method     Oops_Db_AddressQuery orderByDni($order = Criteria::ASC) Order by the dni column
 * @method     Oops_Db_AddressQuery orderByDateAdd($order = Criteria::ASC) Order by the date_add column
 * @method     Oops_Db_AddressQuery orderByDateUpd($order = Criteria::ASC) Order by the date_upd column
 * @method     Oops_Db_AddressQuery orderByActive($order = Criteria::ASC) Order by the active column
 * @method     Oops_Db_AddressQuery orderByDeleted($order = Criteria::ASC) Order by the deleted column
 *
 * @method     Oops_Db_AddressQuery groupByIdAddress() Group by the id_address column
 * @method     Oops_Db_AddressQuery groupByIdCountry() Group by the id_country column
 * @method     Oops_Db_AddressQuery groupByIdState() Group by the id_state column
 * @method     Oops_Db_AddressQuery groupByIdCustomer() Group by the id_customer column
 * @method     Oops_Db_AddressQuery groupByIdManufacturer() Group by the id_manufacturer column
 * @method     Oops_Db_AddressQuery groupByIdSupplier() Group by the id_supplier column
 * @method     Oops_Db_AddressQuery groupByAlias() Group by the alias column
 * @method     Oops_Db_AddressQuery groupByCompany() Group by the company column
 * @method     Oops_Db_AddressQuery groupByLastname() Group by the lastname column
 * @method     Oops_Db_AddressQuery groupByFirstname() Group by the firstname column
 * @method     Oops_Db_AddressQuery groupByAddress1() Group by the address1 column
 * @method     Oops_Db_AddressQuery groupByAddress2() Group by the address2 column
 * @method     Oops_Db_AddressQuery groupByPostcode() Group by the postcode column
 * @method     Oops_Db_AddressQuery groupByCity() Group by the city column
 * @method     Oops_Db_AddressQuery groupByOther() Group by the other column
 * @method     Oops_Db_AddressQuery groupByPhone() Group by the phone column
 * @method     Oops_Db_AddressQuery groupByPhoneMobile() Group by the phone_mobile column
 * @method     Oops_Db_AddressQuery groupByVatNumber() Group by the vat_number column
 * @method     Oops_Db_AddressQuery groupByDni() Group by the dni column
 * @method     Oops_Db_AddressQuery groupByDateAdd() Group by the date_add column
 * @method     Oops_Db_AddressQuery groupByDateUpd() Group by the date_upd column
 * @method     Oops_Db_AddressQuery groupByActive() Group by the active column
 * @method     Oops_Db_AddressQuery groupByDeleted() Group by the deleted column
 *
 * @method     Oops_Db_AddressQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     Oops_Db_AddressQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     Oops_Db_AddressQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     Oops_Db_Address findOne(PropelPDO $con = null) Return the first Oops_Db_Address matching the query
 * @method     Oops_Db_Address findOneOrCreate(PropelPDO $con = null) Return the first Oops_Db_Address matching the query, or a new Oops_Db_Address object populated from the query conditions when no match is found
 *
 * @method     Oops_Db_Address findOneByIdAddress(int $id_address) Return the first Oops_Db_Address filtered by the id_address column
 * @method     Oops_Db_Address findOneByIdCountry(int $id_country) Return the first Oops_Db_Address filtered by the id_country column
 * @method     Oops_Db_Address findOneByIdState(int $id_state) Return the first Oops_Db_Address filtered by the id_state column
 * @method     Oops_Db_Address findOneByIdCustomer(int $id_customer) Return the first Oops_Db_Address filtered by the id_customer column
 * @method     Oops_Db_Address findOneByIdManufacturer(int $id_manufacturer) Return the first Oops_Db_Address filtered by the id_manufacturer column
 * @method     Oops_Db_Address findOneByIdSupplier(int $id_supplier) Return the first Oops_Db_Address filtered by the id_supplier column
 * @method     Oops_Db_Address findOneByAlias(string $alias) Return the first Oops_Db_Address filtered by the alias column
 * @method     Oops_Db_Address findOneByCompany(string $company) Return the first Oops_Db_Address filtered by the company column
 * @method     Oops_Db_Address findOneByLastname(string $lastname) Return the first Oops_Db_Address filtered by the lastname column
 * @method     Oops_Db_Address findOneByFirstname(string $firstname) Return the first Oops_Db_Address filtered by the firstname column
 * @method     Oops_Db_Address findOneByAddress1(string $address1) Return the first Oops_Db_Address filtered by the address1 column
 * @method     Oops_Db_Address findOneByAddress2(string $address2) Return the first Oops_Db_Address filtered by the address2 column
 * @method     Oops_Db_Address findOneByPostcode(string $postcode) Return the first Oops_Db_Address filtered by the postcode column
 * @method     Oops_Db_Address findOneByCity(string $city) Return the first Oops_Db_Address filtered by the city column
 * @method     Oops_Db_Address findOneByOther(string $other) Return the first Oops_Db_Address filtered by the other column
 * @method     Oops_Db_Address findOneByPhone(string $phone) Return the first Oops_Db_Address filtered by the phone column
 * @method     Oops_Db_Address findOneByPhoneMobile(string $phone_mobile) Return the first Oops_Db_Address filtered by the phone_mobile column
 * @method     Oops_Db_Address findOneByVatNumber(string $vat_number) Return the first Oops_Db_Address filtered by the vat_number column
 * @method     Oops_Db_Address findOneByDni(string $dni) Return the first Oops_Db_Address filtered by the dni column
 * @method     Oops_Db_Address findOneByDateAdd(string $date_add) Return the first Oops_Db_Address filtered by the date_add column
 * @method     Oops_Db_Address findOneByDateUpd(string $date_upd) Return the first Oops_Db_Address filtered by the date_upd column
 * @method     Oops_Db_Address findOneByActive(boolean $active) Return the first Oops_Db_Address filtered by the active column
 * @method     Oops_Db_Address findOneByDeleted(boolean $deleted) Return the first Oops_Db_Address filtered by the deleted column
 *
 * @method     array findByIdAddress(int $id_address) Return Oops_Db_Address objects filtered by the id_address column
 * @method     array findByIdCountry(int $id_country) Return Oops_Db_Address objects filtered by the id_country column
 * @method     array findByIdState(int $id_state) Return Oops_Db_Address objects filtered by the id_state column
 * @method     array findByIdCustomer(int $id_customer) Return Oops_Db_Address objects filtered by the id_customer column
 * @method     array findByIdManufacturer(int $id_manufacturer) Return Oops_Db_Address objects filtered by the id_manufacturer column
 * @method     array findByIdSupplier(int $id_supplier) Return Oops_Db_Address objects filtered by the id_supplier column
 * @method     array findByAlias(string $alias) Return Oops_Db_Address objects filtered by the alias column
 * @method     array findByCompany(string $company) Return Oops_Db_Address objects filtered by the company column
 * @method     array findByLastname(string $lastname) Return Oops_Db_Address objects filtered by the lastname column
 * @method     array findByFirstname(string $firstname) Return Oops_Db_Address objects filtered by the firstname column
 * @method     array findByAddress1(string $address1) Return Oops_Db_Address objects filtered by the address1 column
 * @method     array findByAddress2(string $address2) Return Oops_Db_Address objects filtered by the address2 column
 * @method     array findByPostcode(string $postcode) Return Oops_Db_Address objects filtered by the postcode column
 * @method     array findByCity(string $city) Return Oops_Db_Address objects filtered by the city column
 * @method     array findByOther(string $other) Return Oops_Db_Address objects filtered by the other column
 * @method     array findByPhone(string $phone) Return Oops_Db_Address objects filtered by the phone column
 * @method     array findByPhoneMobile(string $phone_mobile) Return Oops_Db_Address objects filtered by the phone_mobile column
 * @method     array findByVatNumber(string $vat_number) Return Oops_Db_Address objects filtered by the vat_number column
 * @method     array findByDni(string $dni) Return Oops_Db_Address objects filtered by the dni column
 * @method     array findByDateAdd(string $date_add) Return Oops_Db_Address objects filtered by the date_add column
 * @method     array findByDateUpd(string $date_upd) Return Oops_Db_Address objects filtered by the date_upd column
 * @method     array findByActive(boolean $active) Return Oops_Db_Address objects filtered by the active column
 * @method     array findByDeleted(boolean $deleted) Return Oops_Db_Address objects filtered by the deleted column
 *
 * @package    propel.generator.prestashop.om
 */
abstract class Oops_Db_Propel_AddressQuery extends ModelCriteria
{
	
	/**
	 * Initializes internal state of Oops_Db_Propel_AddressQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'prestashop', $modelName = 'Oops_Db_Address', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new Oops_Db_AddressQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    Oops_Db_AddressQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof Oops_Db_AddressQuery) {
			return $criteria;
		}
		$query = new Oops_Db_AddressQuery();
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
	 * @return    Oops_Db_Address|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ($key === null) {
			return null;
		}
		if ((null !== ($obj = Oops_Db_AddressPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
			// the object is alredy in the instance pool
			return $obj;
		}
		if ($con === null) {
			$con = Propel::getConnection(Oops_Db_AddressPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
	 * @return    Oops_Db_Address A model object, or null if the key is not found
	 */
	protected function findPkSimple($key, $con)
	{
		$sql = 'SELECT `ID_ADDRESS`, `ID_COUNTRY`, `ID_STATE`, `ID_CUSTOMER`, `ID_MANUFACTURER`, `ID_SUPPLIER`, `ALIAS`, `COMPANY`, `LASTNAME`, `FIRSTNAME`, `ADDRESS1`, `ADDRESS2`, `POSTCODE`, `CITY`, `OTHER`, `PHONE`, `PHONE_MOBILE`, `VAT_NUMBER`, `DNI`, `DATE_ADD`, `DATE_UPD`, `ACTIVE`, `DELETED` FROM `' . _DB_PREFIX_ . 'address` WHERE `ID_ADDRESS` = :p0';
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
			$obj = new Oops_Db_Address();
			$obj->hydrate($row);
			Oops_Db_AddressPeer::addInstanceToPool($obj, (string) $row[0]);
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
	 * @return    Oops_Db_Address|array|mixed the result, formatted by the current formatter
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
	 * @return    Oops_Db_AddressQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(Oops_Db_AddressPeer::ID_ADDRESS, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    Oops_Db_AddressQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(Oops_Db_AddressPeer::ID_ADDRESS, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id_address column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByIdAddress(1234); // WHERE id_address = 1234
	 * $query->filterByIdAddress(array(12, 34)); // WHERE id_address IN (12, 34)
	 * $query->filterByIdAddress(array('min' => 12)); // WHERE id_address > 12
	 * </code>
	 *
	 * @param     mixed $idAddress The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Db_AddressQuery The current query, for fluid interface
	 */
	public function filterByIdAddress($idAddress = null, $comparison = null)
	{
		if (is_array($idAddress) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(Oops_Db_AddressPeer::ID_ADDRESS, $idAddress, $comparison);
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
	 * @return    Oops_Db_AddressQuery The current query, for fluid interface
	 */
	public function filterByIdCountry($idCountry = null, $comparison = null)
	{
		if (is_array($idCountry)) {
			$useMinMax = false;
			if (isset($idCountry['min'])) {
				$this->addUsingAlias(Oops_Db_AddressPeer::ID_COUNTRY, $idCountry['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($idCountry['max'])) {
				$this->addUsingAlias(Oops_Db_AddressPeer::ID_COUNTRY, $idCountry['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Db_AddressPeer::ID_COUNTRY, $idCountry, $comparison);
	}

	/**
	 * Filter the query on the id_state column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByIdState(1234); // WHERE id_state = 1234
	 * $query->filterByIdState(array(12, 34)); // WHERE id_state IN (12, 34)
	 * $query->filterByIdState(array('min' => 12)); // WHERE id_state > 12
	 * </code>
	 *
	 * @param     mixed $idState The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Db_AddressQuery The current query, for fluid interface
	 */
	public function filterByIdState($idState = null, $comparison = null)
	{
		if (is_array($idState)) {
			$useMinMax = false;
			if (isset($idState['min'])) {
				$this->addUsingAlias(Oops_Db_AddressPeer::ID_STATE, $idState['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($idState['max'])) {
				$this->addUsingAlias(Oops_Db_AddressPeer::ID_STATE, $idState['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Db_AddressPeer::ID_STATE, $idState, $comparison);
	}

	/**
	 * Filter the query on the id_customer column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByIdCustomer(1234); // WHERE id_customer = 1234
	 * $query->filterByIdCustomer(array(12, 34)); // WHERE id_customer IN (12, 34)
	 * $query->filterByIdCustomer(array('min' => 12)); // WHERE id_customer > 12
	 * </code>
	 *
	 * @param     mixed $idCustomer The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Db_AddressQuery The current query, for fluid interface
	 */
	public function filterByIdCustomer($idCustomer = null, $comparison = null)
	{
		if (is_array($idCustomer)) {
			$useMinMax = false;
			if (isset($idCustomer['min'])) {
				$this->addUsingAlias(Oops_Db_AddressPeer::ID_CUSTOMER, $idCustomer['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($idCustomer['max'])) {
				$this->addUsingAlias(Oops_Db_AddressPeer::ID_CUSTOMER, $idCustomer['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Db_AddressPeer::ID_CUSTOMER, $idCustomer, $comparison);
	}

	/**
	 * Filter the query on the id_manufacturer column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByIdManufacturer(1234); // WHERE id_manufacturer = 1234
	 * $query->filterByIdManufacturer(array(12, 34)); // WHERE id_manufacturer IN (12, 34)
	 * $query->filterByIdManufacturer(array('min' => 12)); // WHERE id_manufacturer > 12
	 * </code>
	 *
	 * @param     mixed $idManufacturer The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Db_AddressQuery The current query, for fluid interface
	 */
	public function filterByIdManufacturer($idManufacturer = null, $comparison = null)
	{
		if (is_array($idManufacturer)) {
			$useMinMax = false;
			if (isset($idManufacturer['min'])) {
				$this->addUsingAlias(Oops_Db_AddressPeer::ID_MANUFACTURER, $idManufacturer['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($idManufacturer['max'])) {
				$this->addUsingAlias(Oops_Db_AddressPeer::ID_MANUFACTURER, $idManufacturer['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Db_AddressPeer::ID_MANUFACTURER, $idManufacturer, $comparison);
	}

	/**
	 * Filter the query on the id_supplier column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByIdSupplier(1234); // WHERE id_supplier = 1234
	 * $query->filterByIdSupplier(array(12, 34)); // WHERE id_supplier IN (12, 34)
	 * $query->filterByIdSupplier(array('min' => 12)); // WHERE id_supplier > 12
	 * </code>
	 *
	 * @param     mixed $idSupplier The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Db_AddressQuery The current query, for fluid interface
	 */
	public function filterByIdSupplier($idSupplier = null, $comparison = null)
	{
		if (is_array($idSupplier)) {
			$useMinMax = false;
			if (isset($idSupplier['min'])) {
				$this->addUsingAlias(Oops_Db_AddressPeer::ID_SUPPLIER, $idSupplier['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($idSupplier['max'])) {
				$this->addUsingAlias(Oops_Db_AddressPeer::ID_SUPPLIER, $idSupplier['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Db_AddressPeer::ID_SUPPLIER, $idSupplier, $comparison);
	}

	/**
	 * Filter the query on the alias column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByAlias('fooValue');   // WHERE alias = 'fooValue'
	 * $query->filterByAlias('%fooValue%'); // WHERE alias LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $alias The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Db_AddressQuery The current query, for fluid interface
	 */
	public function filterByAlias($alias = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($alias)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $alias)) {
				$alias = str_replace('*', '%', $alias);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(Oops_Db_AddressPeer::ALIAS, $alias, $comparison);
	}

	/**
	 * Filter the query on the company column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByCompany('fooValue');   // WHERE company = 'fooValue'
	 * $query->filterByCompany('%fooValue%'); // WHERE company LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $company The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Db_AddressQuery The current query, for fluid interface
	 */
	public function filterByCompany($company = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($company)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $company)) {
				$company = str_replace('*', '%', $company);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(Oops_Db_AddressPeer::COMPANY, $company, $comparison);
	}

	/**
	 * Filter the query on the lastname column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByLastname('fooValue');   // WHERE lastname = 'fooValue'
	 * $query->filterByLastname('%fooValue%'); // WHERE lastname LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $lastname The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Db_AddressQuery The current query, for fluid interface
	 */
	public function filterByLastname($lastname = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($lastname)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $lastname)) {
				$lastname = str_replace('*', '%', $lastname);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(Oops_Db_AddressPeer::LASTNAME, $lastname, $comparison);
	}

	/**
	 * Filter the query on the firstname column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByFirstname('fooValue');   // WHERE firstname = 'fooValue'
	 * $query->filterByFirstname('%fooValue%'); // WHERE firstname LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $firstname The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Db_AddressQuery The current query, for fluid interface
	 */
	public function filterByFirstname($firstname = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($firstname)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $firstname)) {
				$firstname = str_replace('*', '%', $firstname);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(Oops_Db_AddressPeer::FIRSTNAME, $firstname, $comparison);
	}

	/**
	 * Filter the query on the address1 column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByAddress1('fooValue');   // WHERE address1 = 'fooValue'
	 * $query->filterByAddress1('%fooValue%'); // WHERE address1 LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $address1 The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Db_AddressQuery The current query, for fluid interface
	 */
	public function filterByAddress1($address1 = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($address1)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $address1)) {
				$address1 = str_replace('*', '%', $address1);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(Oops_Db_AddressPeer::ADDRESS1, $address1, $comparison);
	}

	/**
	 * Filter the query on the address2 column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByAddress2('fooValue');   // WHERE address2 = 'fooValue'
	 * $query->filterByAddress2('%fooValue%'); // WHERE address2 LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $address2 The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Db_AddressQuery The current query, for fluid interface
	 */
	public function filterByAddress2($address2 = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($address2)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $address2)) {
				$address2 = str_replace('*', '%', $address2);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(Oops_Db_AddressPeer::ADDRESS2, $address2, $comparison);
	}

	/**
	 * Filter the query on the postcode column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByPostcode('fooValue');   // WHERE postcode = 'fooValue'
	 * $query->filterByPostcode('%fooValue%'); // WHERE postcode LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $postcode The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Db_AddressQuery The current query, for fluid interface
	 */
	public function filterByPostcode($postcode = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($postcode)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $postcode)) {
				$postcode = str_replace('*', '%', $postcode);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(Oops_Db_AddressPeer::POSTCODE, $postcode, $comparison);
	}

	/**
	 * Filter the query on the city column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByCity('fooValue');   // WHERE city = 'fooValue'
	 * $query->filterByCity('%fooValue%'); // WHERE city LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $city The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Db_AddressQuery The current query, for fluid interface
	 */
	public function filterByCity($city = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($city)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $city)) {
				$city = str_replace('*', '%', $city);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(Oops_Db_AddressPeer::CITY, $city, $comparison);
	}

	/**
	 * Filter the query on the other column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByOther('fooValue');   // WHERE other = 'fooValue'
	 * $query->filterByOther('%fooValue%'); // WHERE other LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $other The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Db_AddressQuery The current query, for fluid interface
	 */
	public function filterByOther($other = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($other)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $other)) {
				$other = str_replace('*', '%', $other);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(Oops_Db_AddressPeer::OTHER, $other, $comparison);
	}

	/**
	 * Filter the query on the phone column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByPhone('fooValue');   // WHERE phone = 'fooValue'
	 * $query->filterByPhone('%fooValue%'); // WHERE phone LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $phone The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Db_AddressQuery The current query, for fluid interface
	 */
	public function filterByPhone($phone = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($phone)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $phone)) {
				$phone = str_replace('*', '%', $phone);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(Oops_Db_AddressPeer::PHONE, $phone, $comparison);
	}

	/**
	 * Filter the query on the phone_mobile column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByPhoneMobile('fooValue');   // WHERE phone_mobile = 'fooValue'
	 * $query->filterByPhoneMobile('%fooValue%'); // WHERE phone_mobile LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $phoneMobile The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Db_AddressQuery The current query, for fluid interface
	 */
	public function filterByPhoneMobile($phoneMobile = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($phoneMobile)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $phoneMobile)) {
				$phoneMobile = str_replace('*', '%', $phoneMobile);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(Oops_Db_AddressPeer::PHONE_MOBILE, $phoneMobile, $comparison);
	}

	/**
	 * Filter the query on the vat_number column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByVatNumber('fooValue');   // WHERE vat_number = 'fooValue'
	 * $query->filterByVatNumber('%fooValue%'); // WHERE vat_number LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $vatNumber The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Db_AddressQuery The current query, for fluid interface
	 */
	public function filterByVatNumber($vatNumber = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($vatNumber)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $vatNumber)) {
				$vatNumber = str_replace('*', '%', $vatNumber);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(Oops_Db_AddressPeer::VAT_NUMBER, $vatNumber, $comparison);
	}

	/**
	 * Filter the query on the dni column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByDni('fooValue');   // WHERE dni = 'fooValue'
	 * $query->filterByDni('%fooValue%'); // WHERE dni LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $dni The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Db_AddressQuery The current query, for fluid interface
	 */
	public function filterByDni($dni = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($dni)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $dni)) {
				$dni = str_replace('*', '%', $dni);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(Oops_Db_AddressPeer::DNI, $dni, $comparison);
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
	 * @return    Oops_Db_AddressQuery The current query, for fluid interface
	 */
	public function filterByDateAdd($dateAdd = null, $comparison = null)
	{
		if (is_array($dateAdd)) {
			$useMinMax = false;
			if (isset($dateAdd['min'])) {
				$this->addUsingAlias(Oops_Db_AddressPeer::DATE_ADD, $dateAdd['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($dateAdd['max'])) {
				$this->addUsingAlias(Oops_Db_AddressPeer::DATE_ADD, $dateAdd['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Db_AddressPeer::DATE_ADD, $dateAdd, $comparison);
	}

	/**
	 * Filter the query on the date_upd column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByDateUpd('2011-03-14'); // WHERE date_upd = '2011-03-14'
	 * $query->filterByDateUpd('now'); // WHERE date_upd = '2011-03-14'
	 * $query->filterByDateUpd(array('max' => 'yesterday')); // WHERE date_upd > '2011-03-13'
	 * </code>
	 *
	 * @param     mixed $dateUpd The value to use as filter.
	 *              Values can be integers (unix timestamps), DateTime objects, or strings.
	 *              Empty strings are treated as NULL.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Db_AddressQuery The current query, for fluid interface
	 */
	public function filterByDateUpd($dateUpd = null, $comparison = null)
	{
		if (is_array($dateUpd)) {
			$useMinMax = false;
			if (isset($dateUpd['min'])) {
				$this->addUsingAlias(Oops_Db_AddressPeer::DATE_UPD, $dateUpd['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($dateUpd['max'])) {
				$this->addUsingAlias(Oops_Db_AddressPeer::DATE_UPD, $dateUpd['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Db_AddressPeer::DATE_UPD, $dateUpd, $comparison);
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
	 * @return    Oops_Db_AddressQuery The current query, for fluid interface
	 */
	public function filterByActive($active = null, $comparison = null)
	{
		if (is_string($active)) {
			$active = in_array(strtolower($active), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(Oops_Db_AddressPeer::ACTIVE, $active, $comparison);
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
	 * @return    Oops_Db_AddressQuery The current query, for fluid interface
	 */
	public function filterByDeleted($deleted = null, $comparison = null)
	{
		if (is_string($deleted)) {
			$deleted = in_array(strtolower($deleted), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(Oops_Db_AddressPeer::DELETED, $deleted, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     Oops_Db_Address $address Object to remove from the list of results
	 *
	 * @return    Oops_Db_AddressQuery The current query, for fluid interface
	 */
	public function prune($address = null)
	{
		if ($address) {
			$this->addUsingAlias(Oops_Db_AddressPeer::ID_ADDRESS, $address->getIdAddress(), Criteria::NOT_EQUAL);
		}

		return $this;
	}

} // Oops_Db_Propel_AddressQuery