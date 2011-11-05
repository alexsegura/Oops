<?php


/**
 * Base class that represents a query for the 'djland_store' table.
 *
 * 
 *
 * @method     Oops_Model_StoreQuery orderByIdStore($order = Criteria::ASC) Order by the id_store column
 * @method     Oops_Model_StoreQuery orderByIdCountry($order = Criteria::ASC) Order by the id_country column
 * @method     Oops_Model_StoreQuery orderByIdState($order = Criteria::ASC) Order by the id_state column
 * @method     Oops_Model_StoreQuery orderByName($order = Criteria::ASC) Order by the name column
 * @method     Oops_Model_StoreQuery orderByAddress1($order = Criteria::ASC) Order by the address1 column
 * @method     Oops_Model_StoreQuery orderByAddress2($order = Criteria::ASC) Order by the address2 column
 * @method     Oops_Model_StoreQuery orderByCity($order = Criteria::ASC) Order by the city column
 * @method     Oops_Model_StoreQuery orderByPostcode($order = Criteria::ASC) Order by the postcode column
 * @method     Oops_Model_StoreQuery orderByLatitude($order = Criteria::ASC) Order by the latitude column
 * @method     Oops_Model_StoreQuery orderByLongitude($order = Criteria::ASC) Order by the longitude column
 * @method     Oops_Model_StoreQuery orderByHours($order = Criteria::ASC) Order by the hours column
 * @method     Oops_Model_StoreQuery orderByPhone($order = Criteria::ASC) Order by the phone column
 * @method     Oops_Model_StoreQuery orderByFax($order = Criteria::ASC) Order by the fax column
 * @method     Oops_Model_StoreQuery orderByEmail($order = Criteria::ASC) Order by the email column
 * @method     Oops_Model_StoreQuery orderByNote($order = Criteria::ASC) Order by the note column
 * @method     Oops_Model_StoreQuery orderByActive($order = Criteria::ASC) Order by the active column
 * @method     Oops_Model_StoreQuery orderByDateAdd($order = Criteria::ASC) Order by the date_add column
 * @method     Oops_Model_StoreQuery orderByDateUpd($order = Criteria::ASC) Order by the date_upd column
 *
 * @method     Oops_Model_StoreQuery groupByIdStore() Group by the id_store column
 * @method     Oops_Model_StoreQuery groupByIdCountry() Group by the id_country column
 * @method     Oops_Model_StoreQuery groupByIdState() Group by the id_state column
 * @method     Oops_Model_StoreQuery groupByName() Group by the name column
 * @method     Oops_Model_StoreQuery groupByAddress1() Group by the address1 column
 * @method     Oops_Model_StoreQuery groupByAddress2() Group by the address2 column
 * @method     Oops_Model_StoreQuery groupByCity() Group by the city column
 * @method     Oops_Model_StoreQuery groupByPostcode() Group by the postcode column
 * @method     Oops_Model_StoreQuery groupByLatitude() Group by the latitude column
 * @method     Oops_Model_StoreQuery groupByLongitude() Group by the longitude column
 * @method     Oops_Model_StoreQuery groupByHours() Group by the hours column
 * @method     Oops_Model_StoreQuery groupByPhone() Group by the phone column
 * @method     Oops_Model_StoreQuery groupByFax() Group by the fax column
 * @method     Oops_Model_StoreQuery groupByEmail() Group by the email column
 * @method     Oops_Model_StoreQuery groupByNote() Group by the note column
 * @method     Oops_Model_StoreQuery groupByActive() Group by the active column
 * @method     Oops_Model_StoreQuery groupByDateAdd() Group by the date_add column
 * @method     Oops_Model_StoreQuery groupByDateUpd() Group by the date_upd column
 *
 * @method     Oops_Model_StoreQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     Oops_Model_StoreQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     Oops_Model_StoreQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     Oops_Model_Store findOne(PropelPDO $con = null) Return the first Oops_Model_Store matching the query
 * @method     Oops_Model_Store findOneOrCreate(PropelPDO $con = null) Return the first Oops_Model_Store matching the query, or a new Oops_Model_Store object populated from the query conditions when no match is found
 *
 * @method     Oops_Model_Store findOneByIdStore(int $id_store) Return the first Oops_Model_Store filtered by the id_store column
 * @method     Oops_Model_Store findOneByIdCountry(int $id_country) Return the first Oops_Model_Store filtered by the id_country column
 * @method     Oops_Model_Store findOneByIdState(int $id_state) Return the first Oops_Model_Store filtered by the id_state column
 * @method     Oops_Model_Store findOneByName(string $name) Return the first Oops_Model_Store filtered by the name column
 * @method     Oops_Model_Store findOneByAddress1(string $address1) Return the first Oops_Model_Store filtered by the address1 column
 * @method     Oops_Model_Store findOneByAddress2(string $address2) Return the first Oops_Model_Store filtered by the address2 column
 * @method     Oops_Model_Store findOneByCity(string $city) Return the first Oops_Model_Store filtered by the city column
 * @method     Oops_Model_Store findOneByPostcode(string $postcode) Return the first Oops_Model_Store filtered by the postcode column
 * @method     Oops_Model_Store findOneByLatitude(double $latitude) Return the first Oops_Model_Store filtered by the latitude column
 * @method     Oops_Model_Store findOneByLongitude(double $longitude) Return the first Oops_Model_Store filtered by the longitude column
 * @method     Oops_Model_Store findOneByHours(string $hours) Return the first Oops_Model_Store filtered by the hours column
 * @method     Oops_Model_Store findOneByPhone(string $phone) Return the first Oops_Model_Store filtered by the phone column
 * @method     Oops_Model_Store findOneByFax(string $fax) Return the first Oops_Model_Store filtered by the fax column
 * @method     Oops_Model_Store findOneByEmail(string $email) Return the first Oops_Model_Store filtered by the email column
 * @method     Oops_Model_Store findOneByNote(string $note) Return the first Oops_Model_Store filtered by the note column
 * @method     Oops_Model_Store findOneByActive(boolean $active) Return the first Oops_Model_Store filtered by the active column
 * @method     Oops_Model_Store findOneByDateAdd(string $date_add) Return the first Oops_Model_Store filtered by the date_add column
 * @method     Oops_Model_Store findOneByDateUpd(string $date_upd) Return the first Oops_Model_Store filtered by the date_upd column
 *
 * @method     array findByIdStore(int $id_store) Return Oops_Model_Store objects filtered by the id_store column
 * @method     array findByIdCountry(int $id_country) Return Oops_Model_Store objects filtered by the id_country column
 * @method     array findByIdState(int $id_state) Return Oops_Model_Store objects filtered by the id_state column
 * @method     array findByName(string $name) Return Oops_Model_Store objects filtered by the name column
 * @method     array findByAddress1(string $address1) Return Oops_Model_Store objects filtered by the address1 column
 * @method     array findByAddress2(string $address2) Return Oops_Model_Store objects filtered by the address2 column
 * @method     array findByCity(string $city) Return Oops_Model_Store objects filtered by the city column
 * @method     array findByPostcode(string $postcode) Return Oops_Model_Store objects filtered by the postcode column
 * @method     array findByLatitude(double $latitude) Return Oops_Model_Store objects filtered by the latitude column
 * @method     array findByLongitude(double $longitude) Return Oops_Model_Store objects filtered by the longitude column
 * @method     array findByHours(string $hours) Return Oops_Model_Store objects filtered by the hours column
 * @method     array findByPhone(string $phone) Return Oops_Model_Store objects filtered by the phone column
 * @method     array findByFax(string $fax) Return Oops_Model_Store objects filtered by the fax column
 * @method     array findByEmail(string $email) Return Oops_Model_Store objects filtered by the email column
 * @method     array findByNote(string $note) Return Oops_Model_Store objects filtered by the note column
 * @method     array findByActive(boolean $active) Return Oops_Model_Store objects filtered by the active column
 * @method     array findByDateAdd(string $date_add) Return Oops_Model_Store objects filtered by the date_add column
 * @method     array findByDateUpd(string $date_upd) Return Oops_Model_Store objects filtered by the date_upd column
 *
 * @package    propel.generator.prestashop.om
 */
abstract class Oops_Model_Base_StoreQuery extends ModelCriteria
{
	
	/**
	 * Initializes internal state of Oops_Model_Base_StoreQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'prestashop', $modelName = 'Oops_Model_Store', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new Oops_Model_StoreQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    Oops_Model_StoreQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof Oops_Model_StoreQuery) {
			return $criteria;
		}
		$query = new Oops_Model_StoreQuery();
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
	 * @return    Oops_Model_Store|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ($key === null) {
			return null;
		}
		if ((null !== ($obj = Oops_Model_StorePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
			// the object is alredy in the instance pool
			return $obj;
		}
		if ($con === null) {
			$con = Propel::getConnection(Oops_Model_StorePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
	 * @return    Oops_Model_Store A model object, or null if the key is not found
	 */
	protected function findPkSimple($key, $con)
	{
		$sql = 'SELECT `ID_STORE`, `ID_COUNTRY`, `ID_STATE`, `NAME`, `ADDRESS1`, `ADDRESS2`, `CITY`, `POSTCODE`, `LATITUDE`, `LONGITUDE`, `HOURS`, `PHONE`, `FAX`, `EMAIL`, `NOTE`, `ACTIVE`, `DATE_ADD`, `DATE_UPD` FROM `djland_store` WHERE `ID_STORE` = :p0';
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
			$obj = new Oops_Model_Store();
			$obj->hydrate($row);
			Oops_Model_StorePeer::addInstanceToPool($obj, (string) $row[0]);
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
	 * @return    Oops_Model_Store|array|mixed the result, formatted by the current formatter
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
	 * @return    Oops_Model_StoreQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(Oops_Model_StorePeer::ID_STORE, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    Oops_Model_StoreQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(Oops_Model_StorePeer::ID_STORE, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id_store column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByIdStore(1234); // WHERE id_store = 1234
	 * $query->filterByIdStore(array(12, 34)); // WHERE id_store IN (12, 34)
	 * $query->filterByIdStore(array('min' => 12)); // WHERE id_store > 12
	 * </code>
	 *
	 * @param     mixed $idStore The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_StoreQuery The current query, for fluid interface
	 */
	public function filterByIdStore($idStore = null, $comparison = null)
	{
		if (is_array($idStore) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(Oops_Model_StorePeer::ID_STORE, $idStore, $comparison);
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
	 * @return    Oops_Model_StoreQuery The current query, for fluid interface
	 */
	public function filterByIdCountry($idCountry = null, $comparison = null)
	{
		if (is_array($idCountry)) {
			$useMinMax = false;
			if (isset($idCountry['min'])) {
				$this->addUsingAlias(Oops_Model_StorePeer::ID_COUNTRY, $idCountry['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($idCountry['max'])) {
				$this->addUsingAlias(Oops_Model_StorePeer::ID_COUNTRY, $idCountry['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_StorePeer::ID_COUNTRY, $idCountry, $comparison);
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
	 * @return    Oops_Model_StoreQuery The current query, for fluid interface
	 */
	public function filterByIdState($idState = null, $comparison = null)
	{
		if (is_array($idState)) {
			$useMinMax = false;
			if (isset($idState['min'])) {
				$this->addUsingAlias(Oops_Model_StorePeer::ID_STATE, $idState['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($idState['max'])) {
				$this->addUsingAlias(Oops_Model_StorePeer::ID_STATE, $idState['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_StorePeer::ID_STATE, $idState, $comparison);
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
	 * @return    Oops_Model_StoreQuery The current query, for fluid interface
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
		return $this->addUsingAlias(Oops_Model_StorePeer::NAME, $name, $comparison);
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
	 * @return    Oops_Model_StoreQuery The current query, for fluid interface
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
		return $this->addUsingAlias(Oops_Model_StorePeer::ADDRESS1, $address1, $comparison);
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
	 * @return    Oops_Model_StoreQuery The current query, for fluid interface
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
		return $this->addUsingAlias(Oops_Model_StorePeer::ADDRESS2, $address2, $comparison);
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
	 * @return    Oops_Model_StoreQuery The current query, for fluid interface
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
		return $this->addUsingAlias(Oops_Model_StorePeer::CITY, $city, $comparison);
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
	 * @return    Oops_Model_StoreQuery The current query, for fluid interface
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
		return $this->addUsingAlias(Oops_Model_StorePeer::POSTCODE, $postcode, $comparison);
	}

	/**
	 * Filter the query on the latitude column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByLatitude(1234); // WHERE latitude = 1234
	 * $query->filterByLatitude(array(12, 34)); // WHERE latitude IN (12, 34)
	 * $query->filterByLatitude(array('min' => 12)); // WHERE latitude > 12
	 * </code>
	 *
	 * @param     mixed $latitude The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_StoreQuery The current query, for fluid interface
	 */
	public function filterByLatitude($latitude = null, $comparison = null)
	{
		if (is_array($latitude)) {
			$useMinMax = false;
			if (isset($latitude['min'])) {
				$this->addUsingAlias(Oops_Model_StorePeer::LATITUDE, $latitude['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($latitude['max'])) {
				$this->addUsingAlias(Oops_Model_StorePeer::LATITUDE, $latitude['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_StorePeer::LATITUDE, $latitude, $comparison);
	}

	/**
	 * Filter the query on the longitude column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByLongitude(1234); // WHERE longitude = 1234
	 * $query->filterByLongitude(array(12, 34)); // WHERE longitude IN (12, 34)
	 * $query->filterByLongitude(array('min' => 12)); // WHERE longitude > 12
	 * </code>
	 *
	 * @param     mixed $longitude The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_StoreQuery The current query, for fluid interface
	 */
	public function filterByLongitude($longitude = null, $comparison = null)
	{
		if (is_array($longitude)) {
			$useMinMax = false;
			if (isset($longitude['min'])) {
				$this->addUsingAlias(Oops_Model_StorePeer::LONGITUDE, $longitude['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($longitude['max'])) {
				$this->addUsingAlias(Oops_Model_StorePeer::LONGITUDE, $longitude['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_StorePeer::LONGITUDE, $longitude, $comparison);
	}

	/**
	 * Filter the query on the hours column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByHours('fooValue');   // WHERE hours = 'fooValue'
	 * $query->filterByHours('%fooValue%'); // WHERE hours LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $hours The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_StoreQuery The current query, for fluid interface
	 */
	public function filterByHours($hours = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($hours)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $hours)) {
				$hours = str_replace('*', '%', $hours);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(Oops_Model_StorePeer::HOURS, $hours, $comparison);
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
	 * @return    Oops_Model_StoreQuery The current query, for fluid interface
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
		return $this->addUsingAlias(Oops_Model_StorePeer::PHONE, $phone, $comparison);
	}

	/**
	 * Filter the query on the fax column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByFax('fooValue');   // WHERE fax = 'fooValue'
	 * $query->filterByFax('%fooValue%'); // WHERE fax LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $fax The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_StoreQuery The current query, for fluid interface
	 */
	public function filterByFax($fax = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($fax)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $fax)) {
				$fax = str_replace('*', '%', $fax);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(Oops_Model_StorePeer::FAX, $fax, $comparison);
	}

	/**
	 * Filter the query on the email column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByEmail('fooValue');   // WHERE email = 'fooValue'
	 * $query->filterByEmail('%fooValue%'); // WHERE email LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $email The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_StoreQuery The current query, for fluid interface
	 */
	public function filterByEmail($email = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($email)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $email)) {
				$email = str_replace('*', '%', $email);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(Oops_Model_StorePeer::EMAIL, $email, $comparison);
	}

	/**
	 * Filter the query on the note column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByNote('fooValue');   // WHERE note = 'fooValue'
	 * $query->filterByNote('%fooValue%'); // WHERE note LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $note The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_StoreQuery The current query, for fluid interface
	 */
	public function filterByNote($note = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($note)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $note)) {
				$note = str_replace('*', '%', $note);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(Oops_Model_StorePeer::NOTE, $note, $comparison);
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
	 * @return    Oops_Model_StoreQuery The current query, for fluid interface
	 */
	public function filterByActive($active = null, $comparison = null)
	{
		if (is_string($active)) {
			$active = in_array(strtolower($active), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(Oops_Model_StorePeer::ACTIVE, $active, $comparison);
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
	 * @return    Oops_Model_StoreQuery The current query, for fluid interface
	 */
	public function filterByDateAdd($dateAdd = null, $comparison = null)
	{
		if (is_array($dateAdd)) {
			$useMinMax = false;
			if (isset($dateAdd['min'])) {
				$this->addUsingAlias(Oops_Model_StorePeer::DATE_ADD, $dateAdd['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($dateAdd['max'])) {
				$this->addUsingAlias(Oops_Model_StorePeer::DATE_ADD, $dateAdd['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_StorePeer::DATE_ADD, $dateAdd, $comparison);
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
	 * @return    Oops_Model_StoreQuery The current query, for fluid interface
	 */
	public function filterByDateUpd($dateUpd = null, $comparison = null)
	{
		if (is_array($dateUpd)) {
			$useMinMax = false;
			if (isset($dateUpd['min'])) {
				$this->addUsingAlias(Oops_Model_StorePeer::DATE_UPD, $dateUpd['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($dateUpd['max'])) {
				$this->addUsingAlias(Oops_Model_StorePeer::DATE_UPD, $dateUpd['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_StorePeer::DATE_UPD, $dateUpd, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     Oops_Model_Store $store Object to remove from the list of results
	 *
	 * @return    Oops_Model_StoreQuery The current query, for fluid interface
	 */
	public function prune($store = null)
	{
		if ($store) {
			$this->addUsingAlias(Oops_Model_StorePeer::ID_STORE, $store->getIdStore(), Criteria::NOT_EQUAL);
		}

		return $this;
	}

} // Oops_Model_Base_StoreQuery