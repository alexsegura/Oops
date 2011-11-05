<?php


/**
 * Base class that represents a query for the '' . _DB_PREFIX_ . 'djland_employee' table.
 *
 * 
 *
 * @method     Oops_Model_EmployeeQuery orderByIdEmployee($order = Criteria::ASC) Order by the id_employee column
 * @method     Oops_Model_EmployeeQuery orderByIdProfile($order = Criteria::ASC) Order by the id_profile column
 * @method     Oops_Model_EmployeeQuery orderByIdLang($order = Criteria::ASC) Order by the id_lang column
 * @method     Oops_Model_EmployeeQuery orderByLastname($order = Criteria::ASC) Order by the lastname column
 * @method     Oops_Model_EmployeeQuery orderByFirstname($order = Criteria::ASC) Order by the firstname column
 * @method     Oops_Model_EmployeeQuery orderByEmail($order = Criteria::ASC) Order by the email column
 * @method     Oops_Model_EmployeeQuery orderByPasswd($order = Criteria::ASC) Order by the passwd column
 * @method     Oops_Model_EmployeeQuery orderByLastPasswdGen($order = Criteria::ASC) Order by the last_passwd_gen column
 * @method     Oops_Model_EmployeeQuery orderByStatsDateFrom($order = Criteria::ASC) Order by the stats_date_from column
 * @method     Oops_Model_EmployeeQuery orderByStatsDateTo($order = Criteria::ASC) Order by the stats_date_to column
 * @method     Oops_Model_EmployeeQuery orderByBoColor($order = Criteria::ASC) Order by the bo_color column
 * @method     Oops_Model_EmployeeQuery orderByBoTheme($order = Criteria::ASC) Order by the bo_theme column
 * @method     Oops_Model_EmployeeQuery orderByBoUimode($order = Criteria::ASC) Order by the bo_uimode column
 * @method     Oops_Model_EmployeeQuery orderByActive($order = Criteria::ASC) Order by the active column
 *
 * @method     Oops_Model_EmployeeQuery groupByIdEmployee() Group by the id_employee column
 * @method     Oops_Model_EmployeeQuery groupByIdProfile() Group by the id_profile column
 * @method     Oops_Model_EmployeeQuery groupByIdLang() Group by the id_lang column
 * @method     Oops_Model_EmployeeQuery groupByLastname() Group by the lastname column
 * @method     Oops_Model_EmployeeQuery groupByFirstname() Group by the firstname column
 * @method     Oops_Model_EmployeeQuery groupByEmail() Group by the email column
 * @method     Oops_Model_EmployeeQuery groupByPasswd() Group by the passwd column
 * @method     Oops_Model_EmployeeQuery groupByLastPasswdGen() Group by the last_passwd_gen column
 * @method     Oops_Model_EmployeeQuery groupByStatsDateFrom() Group by the stats_date_from column
 * @method     Oops_Model_EmployeeQuery groupByStatsDateTo() Group by the stats_date_to column
 * @method     Oops_Model_EmployeeQuery groupByBoColor() Group by the bo_color column
 * @method     Oops_Model_EmployeeQuery groupByBoTheme() Group by the bo_theme column
 * @method     Oops_Model_EmployeeQuery groupByBoUimode() Group by the bo_uimode column
 * @method     Oops_Model_EmployeeQuery groupByActive() Group by the active column
 *
 * @method     Oops_Model_EmployeeQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     Oops_Model_EmployeeQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     Oops_Model_EmployeeQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     Oops_Model_Employee findOne(PropelPDO $con = null) Return the first Oops_Model_Employee matching the query
 * @method     Oops_Model_Employee findOneOrCreate(PropelPDO $con = null) Return the first Oops_Model_Employee matching the query, or a new Oops_Model_Employee object populated from the query conditions when no match is found
 *
 * @method     Oops_Model_Employee findOneByIdEmployee(int $id_employee) Return the first Oops_Model_Employee filtered by the id_employee column
 * @method     Oops_Model_Employee findOneByIdProfile(int $id_profile) Return the first Oops_Model_Employee filtered by the id_profile column
 * @method     Oops_Model_Employee findOneByIdLang(int $id_lang) Return the first Oops_Model_Employee filtered by the id_lang column
 * @method     Oops_Model_Employee findOneByLastname(string $lastname) Return the first Oops_Model_Employee filtered by the lastname column
 * @method     Oops_Model_Employee findOneByFirstname(string $firstname) Return the first Oops_Model_Employee filtered by the firstname column
 * @method     Oops_Model_Employee findOneByEmail(string $email) Return the first Oops_Model_Employee filtered by the email column
 * @method     Oops_Model_Employee findOneByPasswd(string $passwd) Return the first Oops_Model_Employee filtered by the passwd column
 * @method     Oops_Model_Employee findOneByLastPasswdGen(string $last_passwd_gen) Return the first Oops_Model_Employee filtered by the last_passwd_gen column
 * @method     Oops_Model_Employee findOneByStatsDateFrom(string $stats_date_from) Return the first Oops_Model_Employee filtered by the stats_date_from column
 * @method     Oops_Model_Employee findOneByStatsDateTo(string $stats_date_to) Return the first Oops_Model_Employee filtered by the stats_date_to column
 * @method     Oops_Model_Employee findOneByBoColor(string $bo_color) Return the first Oops_Model_Employee filtered by the bo_color column
 * @method     Oops_Model_Employee findOneByBoTheme(string $bo_theme) Return the first Oops_Model_Employee filtered by the bo_theme column
 * @method     Oops_Model_Employee findOneByBoUimode(string $bo_uimode) Return the first Oops_Model_Employee filtered by the bo_uimode column
 * @method     Oops_Model_Employee findOneByActive(boolean $active) Return the first Oops_Model_Employee filtered by the active column
 *
 * @method     array findByIdEmployee(int $id_employee) Return Oops_Model_Employee objects filtered by the id_employee column
 * @method     array findByIdProfile(int $id_profile) Return Oops_Model_Employee objects filtered by the id_profile column
 * @method     array findByIdLang(int $id_lang) Return Oops_Model_Employee objects filtered by the id_lang column
 * @method     array findByLastname(string $lastname) Return Oops_Model_Employee objects filtered by the lastname column
 * @method     array findByFirstname(string $firstname) Return Oops_Model_Employee objects filtered by the firstname column
 * @method     array findByEmail(string $email) Return Oops_Model_Employee objects filtered by the email column
 * @method     array findByPasswd(string $passwd) Return Oops_Model_Employee objects filtered by the passwd column
 * @method     array findByLastPasswdGen(string $last_passwd_gen) Return Oops_Model_Employee objects filtered by the last_passwd_gen column
 * @method     array findByStatsDateFrom(string $stats_date_from) Return Oops_Model_Employee objects filtered by the stats_date_from column
 * @method     array findByStatsDateTo(string $stats_date_to) Return Oops_Model_Employee objects filtered by the stats_date_to column
 * @method     array findByBoColor(string $bo_color) Return Oops_Model_Employee objects filtered by the bo_color column
 * @method     array findByBoTheme(string $bo_theme) Return Oops_Model_Employee objects filtered by the bo_theme column
 * @method     array findByBoUimode(string $bo_uimode) Return Oops_Model_Employee objects filtered by the bo_uimode column
 * @method     array findByActive(boolean $active) Return Oops_Model_Employee objects filtered by the active column
 *
 * @package    propel.generator.prestashop.om
 */
abstract class Oops_Model_Base_EmployeeQuery extends ModelCriteria
{
	
	/**
	 * Initializes internal state of Oops_Model_Base_EmployeeQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'prestashop', $modelName = 'Oops_Model_Employee', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new Oops_Model_EmployeeQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    Oops_Model_EmployeeQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof Oops_Model_EmployeeQuery) {
			return $criteria;
		}
		$query = new Oops_Model_EmployeeQuery();
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
	 * @return    Oops_Model_Employee|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ($key === null) {
			return null;
		}
		if ((null !== ($obj = Oops_Model_EmployeePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
			// the object is alredy in the instance pool
			return $obj;
		}
		if ($con === null) {
			$con = Propel::getConnection(Oops_Model_EmployeePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
	 * @return    Oops_Model_Employee A model object, or null if the key is not found
	 */
	protected function findPkSimple($key, $con)
	{
		$sql = 'SELECT `ID_EMPLOYEE`, `ID_PROFILE`, `ID_LANG`, `LASTNAME`, `FIRSTNAME`, `EMAIL`, `PASSWD`, `LAST_PASSWD_GEN`, `STATS_DATE_FROM`, `STATS_DATE_TO`, `BO_COLOR`, `BO_THEME`, `BO_UIMODE`, `ACTIVE` FROM `' . _DB_PREFIX_ . 'djland_employee` WHERE `ID_EMPLOYEE` = :p0';
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
			$obj = new Oops_Model_Employee();
			$obj->hydrate($row);
			Oops_Model_EmployeePeer::addInstanceToPool($obj, (string) $row[0]);
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
	 * @return    Oops_Model_Employee|array|mixed the result, formatted by the current formatter
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
	 * @return    Oops_Model_EmployeeQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(Oops_Model_EmployeePeer::ID_EMPLOYEE, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    Oops_Model_EmployeeQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(Oops_Model_EmployeePeer::ID_EMPLOYEE, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id_employee column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByIdEmployee(1234); // WHERE id_employee = 1234
	 * $query->filterByIdEmployee(array(12, 34)); // WHERE id_employee IN (12, 34)
	 * $query->filterByIdEmployee(array('min' => 12)); // WHERE id_employee > 12
	 * </code>
	 *
	 * @param     mixed $idEmployee The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_EmployeeQuery The current query, for fluid interface
	 */
	public function filterByIdEmployee($idEmployee = null, $comparison = null)
	{
		if (is_array($idEmployee) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(Oops_Model_EmployeePeer::ID_EMPLOYEE, $idEmployee, $comparison);
	}

	/**
	 * Filter the query on the id_profile column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByIdProfile(1234); // WHERE id_profile = 1234
	 * $query->filterByIdProfile(array(12, 34)); // WHERE id_profile IN (12, 34)
	 * $query->filterByIdProfile(array('min' => 12)); // WHERE id_profile > 12
	 * </code>
	 *
	 * @param     mixed $idProfile The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_EmployeeQuery The current query, for fluid interface
	 */
	public function filterByIdProfile($idProfile = null, $comparison = null)
	{
		if (is_array($idProfile)) {
			$useMinMax = false;
			if (isset($idProfile['min'])) {
				$this->addUsingAlias(Oops_Model_EmployeePeer::ID_PROFILE, $idProfile['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($idProfile['max'])) {
				$this->addUsingAlias(Oops_Model_EmployeePeer::ID_PROFILE, $idProfile['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_EmployeePeer::ID_PROFILE, $idProfile, $comparison);
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
	 * @return    Oops_Model_EmployeeQuery The current query, for fluid interface
	 */
	public function filterByIdLang($idLang = null, $comparison = null)
	{
		if (is_array($idLang)) {
			$useMinMax = false;
			if (isset($idLang['min'])) {
				$this->addUsingAlias(Oops_Model_EmployeePeer::ID_LANG, $idLang['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($idLang['max'])) {
				$this->addUsingAlias(Oops_Model_EmployeePeer::ID_LANG, $idLang['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_EmployeePeer::ID_LANG, $idLang, $comparison);
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
	 * @return    Oops_Model_EmployeeQuery The current query, for fluid interface
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
		return $this->addUsingAlias(Oops_Model_EmployeePeer::LASTNAME, $lastname, $comparison);
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
	 * @return    Oops_Model_EmployeeQuery The current query, for fluid interface
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
		return $this->addUsingAlias(Oops_Model_EmployeePeer::FIRSTNAME, $firstname, $comparison);
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
	 * @return    Oops_Model_EmployeeQuery The current query, for fluid interface
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
		return $this->addUsingAlias(Oops_Model_EmployeePeer::EMAIL, $email, $comparison);
	}

	/**
	 * Filter the query on the passwd column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByPasswd('fooValue');   // WHERE passwd = 'fooValue'
	 * $query->filterByPasswd('%fooValue%'); // WHERE passwd LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $passwd The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_EmployeeQuery The current query, for fluid interface
	 */
	public function filterByPasswd($passwd = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($passwd)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $passwd)) {
				$passwd = str_replace('*', '%', $passwd);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(Oops_Model_EmployeePeer::PASSWD, $passwd, $comparison);
	}

	/**
	 * Filter the query on the last_passwd_gen column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByLastPasswdGen('2011-03-14'); // WHERE last_passwd_gen = '2011-03-14'
	 * $query->filterByLastPasswdGen('now'); // WHERE last_passwd_gen = '2011-03-14'
	 * $query->filterByLastPasswdGen(array('max' => 'yesterday')); // WHERE last_passwd_gen > '2011-03-13'
	 * </code>
	 *
	 * @param     mixed $lastPasswdGen The value to use as filter.
	 *              Values can be integers (unix timestamps), DateTime objects, or strings.
	 *              Empty strings are treated as NULL.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_EmployeeQuery The current query, for fluid interface
	 */
	public function filterByLastPasswdGen($lastPasswdGen = null, $comparison = null)
	{
		if (is_array($lastPasswdGen)) {
			$useMinMax = false;
			if (isset($lastPasswdGen['min'])) {
				$this->addUsingAlias(Oops_Model_EmployeePeer::LAST_PASSWD_GEN, $lastPasswdGen['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($lastPasswdGen['max'])) {
				$this->addUsingAlias(Oops_Model_EmployeePeer::LAST_PASSWD_GEN, $lastPasswdGen['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_EmployeePeer::LAST_PASSWD_GEN, $lastPasswdGen, $comparison);
	}

	/**
	 * Filter the query on the stats_date_from column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByStatsDateFrom('2011-03-14'); // WHERE stats_date_from = '2011-03-14'
	 * $query->filterByStatsDateFrom('now'); // WHERE stats_date_from = '2011-03-14'
	 * $query->filterByStatsDateFrom(array('max' => 'yesterday')); // WHERE stats_date_from > '2011-03-13'
	 * </code>
	 *
	 * @param     mixed $statsDateFrom The value to use as filter.
	 *              Values can be integers (unix timestamps), DateTime objects, or strings.
	 *              Empty strings are treated as NULL.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_EmployeeQuery The current query, for fluid interface
	 */
	public function filterByStatsDateFrom($statsDateFrom = null, $comparison = null)
	{
		if (is_array($statsDateFrom)) {
			$useMinMax = false;
			if (isset($statsDateFrom['min'])) {
				$this->addUsingAlias(Oops_Model_EmployeePeer::STATS_DATE_FROM, $statsDateFrom['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($statsDateFrom['max'])) {
				$this->addUsingAlias(Oops_Model_EmployeePeer::STATS_DATE_FROM, $statsDateFrom['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_EmployeePeer::STATS_DATE_FROM, $statsDateFrom, $comparison);
	}

	/**
	 * Filter the query on the stats_date_to column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByStatsDateTo('2011-03-14'); // WHERE stats_date_to = '2011-03-14'
	 * $query->filterByStatsDateTo('now'); // WHERE stats_date_to = '2011-03-14'
	 * $query->filterByStatsDateTo(array('max' => 'yesterday')); // WHERE stats_date_to > '2011-03-13'
	 * </code>
	 *
	 * @param     mixed $statsDateTo The value to use as filter.
	 *              Values can be integers (unix timestamps), DateTime objects, or strings.
	 *              Empty strings are treated as NULL.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_EmployeeQuery The current query, for fluid interface
	 */
	public function filterByStatsDateTo($statsDateTo = null, $comparison = null)
	{
		if (is_array($statsDateTo)) {
			$useMinMax = false;
			if (isset($statsDateTo['min'])) {
				$this->addUsingAlias(Oops_Model_EmployeePeer::STATS_DATE_TO, $statsDateTo['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($statsDateTo['max'])) {
				$this->addUsingAlias(Oops_Model_EmployeePeer::STATS_DATE_TO, $statsDateTo['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_EmployeePeer::STATS_DATE_TO, $statsDateTo, $comparison);
	}

	/**
	 * Filter the query on the bo_color column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByBoColor('fooValue');   // WHERE bo_color = 'fooValue'
	 * $query->filterByBoColor('%fooValue%'); // WHERE bo_color LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $boColor The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_EmployeeQuery The current query, for fluid interface
	 */
	public function filterByBoColor($boColor = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($boColor)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $boColor)) {
				$boColor = str_replace('*', '%', $boColor);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(Oops_Model_EmployeePeer::BO_COLOR, $boColor, $comparison);
	}

	/**
	 * Filter the query on the bo_theme column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByBoTheme('fooValue');   // WHERE bo_theme = 'fooValue'
	 * $query->filterByBoTheme('%fooValue%'); // WHERE bo_theme LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $boTheme The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_EmployeeQuery The current query, for fluid interface
	 */
	public function filterByBoTheme($boTheme = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($boTheme)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $boTheme)) {
				$boTheme = str_replace('*', '%', $boTheme);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(Oops_Model_EmployeePeer::BO_THEME, $boTheme, $comparison);
	}

	/**
	 * Filter the query on the bo_uimode column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByBoUimode('fooValue');   // WHERE bo_uimode = 'fooValue'
	 * $query->filterByBoUimode('%fooValue%'); // WHERE bo_uimode LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $boUimode The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_EmployeeQuery The current query, for fluid interface
	 */
	public function filterByBoUimode($boUimode = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($boUimode)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $boUimode)) {
				$boUimode = str_replace('*', '%', $boUimode);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(Oops_Model_EmployeePeer::BO_UIMODE, $boUimode, $comparison);
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
	 * @return    Oops_Model_EmployeeQuery The current query, for fluid interface
	 */
	public function filterByActive($active = null, $comparison = null)
	{
		if (is_string($active)) {
			$active = in_array(strtolower($active), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(Oops_Model_EmployeePeer::ACTIVE, $active, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     Oops_Model_Employee $employee Object to remove from the list of results
	 *
	 * @return    Oops_Model_EmployeeQuery The current query, for fluid interface
	 */
	public function prune($employee = null)
	{
		if ($employee) {
			$this->addUsingAlias(Oops_Model_EmployeePeer::ID_EMPLOYEE, $employee->getIdEmployee(), Criteria::NOT_EQUAL);
		}

		return $this;
	}

} // Oops_Model_Base_EmployeeQuery