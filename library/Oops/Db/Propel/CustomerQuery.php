<?php


/**
 * Base class that represents a query for the 'customer' table.
 *
 * 
 *
 * @method     Oops_Db_CustomerQuery orderByIdCustomer($order = Criteria::ASC) Order by the id_customer column
 * @method     Oops_Db_CustomerQuery orderByIdGender($order = Criteria::ASC) Order by the id_gender column
 * @method     Oops_Db_CustomerQuery orderByIdDefaultGroup($order = Criteria::ASC) Order by the id_default_group column
 * @method     Oops_Db_CustomerQuery orderByFirstname($order = Criteria::ASC) Order by the firstname column
 * @method     Oops_Db_CustomerQuery orderByLastname($order = Criteria::ASC) Order by the lastname column
 * @method     Oops_Db_CustomerQuery orderByEmail($order = Criteria::ASC) Order by the email column
 * @method     Oops_Db_CustomerQuery orderByPasswd($order = Criteria::ASC) Order by the passwd column
 * @method     Oops_Db_CustomerQuery orderByLastPasswdGen($order = Criteria::ASC) Order by the last_passwd_gen column
 * @method     Oops_Db_CustomerQuery orderByBirthday($order = Criteria::ASC) Order by the birthday column
 * @method     Oops_Db_CustomerQuery orderByNewsletter($order = Criteria::ASC) Order by the newsletter column
 * @method     Oops_Db_CustomerQuery orderByIpRegistrationNewsletter($order = Criteria::ASC) Order by the ip_registration_newsletter column
 * @method     Oops_Db_CustomerQuery orderByNewsletterDateAdd($order = Criteria::ASC) Order by the newsletter_date_add column
 * @method     Oops_Db_CustomerQuery orderByOptin($order = Criteria::ASC) Order by the optin column
 * @method     Oops_Db_CustomerQuery orderBySecureKey($order = Criteria::ASC) Order by the secure_key column
 * @method     Oops_Db_CustomerQuery orderByNote($order = Criteria::ASC) Order by the note column
 * @method     Oops_Db_CustomerQuery orderByActive($order = Criteria::ASC) Order by the active column
 * @method     Oops_Db_CustomerQuery orderByIsGuest($order = Criteria::ASC) Order by the is_guest column
 * @method     Oops_Db_CustomerQuery orderByDeleted($order = Criteria::ASC) Order by the deleted column
 * @method     Oops_Db_CustomerQuery orderByDateAdd($order = Criteria::ASC) Order by the date_add column
 * @method     Oops_Db_CustomerQuery orderByDateUpd($order = Criteria::ASC) Order by the date_upd column
 *
 * @method     Oops_Db_CustomerQuery groupByIdCustomer() Group by the id_customer column
 * @method     Oops_Db_CustomerQuery groupByIdGender() Group by the id_gender column
 * @method     Oops_Db_CustomerQuery groupByIdDefaultGroup() Group by the id_default_group column
 * @method     Oops_Db_CustomerQuery groupByFirstname() Group by the firstname column
 * @method     Oops_Db_CustomerQuery groupByLastname() Group by the lastname column
 * @method     Oops_Db_CustomerQuery groupByEmail() Group by the email column
 * @method     Oops_Db_CustomerQuery groupByPasswd() Group by the passwd column
 * @method     Oops_Db_CustomerQuery groupByLastPasswdGen() Group by the last_passwd_gen column
 * @method     Oops_Db_CustomerQuery groupByBirthday() Group by the birthday column
 * @method     Oops_Db_CustomerQuery groupByNewsletter() Group by the newsletter column
 * @method     Oops_Db_CustomerQuery groupByIpRegistrationNewsletter() Group by the ip_registration_newsletter column
 * @method     Oops_Db_CustomerQuery groupByNewsletterDateAdd() Group by the newsletter_date_add column
 * @method     Oops_Db_CustomerQuery groupByOptin() Group by the optin column
 * @method     Oops_Db_CustomerQuery groupBySecureKey() Group by the secure_key column
 * @method     Oops_Db_CustomerQuery groupByNote() Group by the note column
 * @method     Oops_Db_CustomerQuery groupByActive() Group by the active column
 * @method     Oops_Db_CustomerQuery groupByIsGuest() Group by the is_guest column
 * @method     Oops_Db_CustomerQuery groupByDeleted() Group by the deleted column
 * @method     Oops_Db_CustomerQuery groupByDateAdd() Group by the date_add column
 * @method     Oops_Db_CustomerQuery groupByDateUpd() Group by the date_upd column
 *
 * @method     Oops_Db_CustomerQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     Oops_Db_CustomerQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     Oops_Db_CustomerQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     Oops_Db_Customer findOne(PropelPDO $con = null) Return the first Oops_Db_Customer matching the query
 * @method     Oops_Db_Customer findOneOrCreate(PropelPDO $con = null) Return the first Oops_Db_Customer matching the query, or a new Oops_Db_Customer object populated from the query conditions when no match is found
 *
 * @method     Oops_Db_Customer findOneByIdCustomer(int $id_customer) Return the first Oops_Db_Customer filtered by the id_customer column
 * @method     Oops_Db_Customer findOneByIdGender(int $id_gender) Return the first Oops_Db_Customer filtered by the id_gender column
 * @method     Oops_Db_Customer findOneByIdDefaultGroup(int $id_default_group) Return the first Oops_Db_Customer filtered by the id_default_group column
 * @method     Oops_Db_Customer findOneByFirstname(string $firstname) Return the first Oops_Db_Customer filtered by the firstname column
 * @method     Oops_Db_Customer findOneByLastname(string $lastname) Return the first Oops_Db_Customer filtered by the lastname column
 * @method     Oops_Db_Customer findOneByEmail(string $email) Return the first Oops_Db_Customer filtered by the email column
 * @method     Oops_Db_Customer findOneByPasswd(string $passwd) Return the first Oops_Db_Customer filtered by the passwd column
 * @method     Oops_Db_Customer findOneByLastPasswdGen(string $last_passwd_gen) Return the first Oops_Db_Customer filtered by the last_passwd_gen column
 * @method     Oops_Db_Customer findOneByBirthday(string $birthday) Return the first Oops_Db_Customer filtered by the birthday column
 * @method     Oops_Db_Customer findOneByNewsletter(boolean $newsletter) Return the first Oops_Db_Customer filtered by the newsletter column
 * @method     Oops_Db_Customer findOneByIpRegistrationNewsletter(string $ip_registration_newsletter) Return the first Oops_Db_Customer filtered by the ip_registration_newsletter column
 * @method     Oops_Db_Customer findOneByNewsletterDateAdd(string $newsletter_date_add) Return the first Oops_Db_Customer filtered by the newsletter_date_add column
 * @method     Oops_Db_Customer findOneByOptin(boolean $optin) Return the first Oops_Db_Customer filtered by the optin column
 * @method     Oops_Db_Customer findOneBySecureKey(string $secure_key) Return the first Oops_Db_Customer filtered by the secure_key column
 * @method     Oops_Db_Customer findOneByNote(string $note) Return the first Oops_Db_Customer filtered by the note column
 * @method     Oops_Db_Customer findOneByActive(boolean $active) Return the first Oops_Db_Customer filtered by the active column
 * @method     Oops_Db_Customer findOneByIsGuest(boolean $is_guest) Return the first Oops_Db_Customer filtered by the is_guest column
 * @method     Oops_Db_Customer findOneByDeleted(boolean $deleted) Return the first Oops_Db_Customer filtered by the deleted column
 * @method     Oops_Db_Customer findOneByDateAdd(string $date_add) Return the first Oops_Db_Customer filtered by the date_add column
 * @method     Oops_Db_Customer findOneByDateUpd(string $date_upd) Return the first Oops_Db_Customer filtered by the date_upd column
 *
 * @method     array findByIdCustomer(int $id_customer) Return Oops_Db_Customer objects filtered by the id_customer column
 * @method     array findByIdGender(int $id_gender) Return Oops_Db_Customer objects filtered by the id_gender column
 * @method     array findByIdDefaultGroup(int $id_default_group) Return Oops_Db_Customer objects filtered by the id_default_group column
 * @method     array findByFirstname(string $firstname) Return Oops_Db_Customer objects filtered by the firstname column
 * @method     array findByLastname(string $lastname) Return Oops_Db_Customer objects filtered by the lastname column
 * @method     array findByEmail(string $email) Return Oops_Db_Customer objects filtered by the email column
 * @method     array findByPasswd(string $passwd) Return Oops_Db_Customer objects filtered by the passwd column
 * @method     array findByLastPasswdGen(string $last_passwd_gen) Return Oops_Db_Customer objects filtered by the last_passwd_gen column
 * @method     array findByBirthday(string $birthday) Return Oops_Db_Customer objects filtered by the birthday column
 * @method     array findByNewsletter(boolean $newsletter) Return Oops_Db_Customer objects filtered by the newsletter column
 * @method     array findByIpRegistrationNewsletter(string $ip_registration_newsletter) Return Oops_Db_Customer objects filtered by the ip_registration_newsletter column
 * @method     array findByNewsletterDateAdd(string $newsletter_date_add) Return Oops_Db_Customer objects filtered by the newsletter_date_add column
 * @method     array findByOptin(boolean $optin) Return Oops_Db_Customer objects filtered by the optin column
 * @method     array findBySecureKey(string $secure_key) Return Oops_Db_Customer objects filtered by the secure_key column
 * @method     array findByNote(string $note) Return Oops_Db_Customer objects filtered by the note column
 * @method     array findByActive(boolean $active) Return Oops_Db_Customer objects filtered by the active column
 * @method     array findByIsGuest(boolean $is_guest) Return Oops_Db_Customer objects filtered by the is_guest column
 * @method     array findByDeleted(boolean $deleted) Return Oops_Db_Customer objects filtered by the deleted column
 * @method     array findByDateAdd(string $date_add) Return Oops_Db_Customer objects filtered by the date_add column
 * @method     array findByDateUpd(string $date_upd) Return Oops_Db_Customer objects filtered by the date_upd column
 *
 * @package    propel.generator.prestashop.om
 */
abstract class Oops_Db_Propel_CustomerQuery extends ModelCriteria
{
	
	/**
	 * Initializes internal state of Oops_Db_Propel_CustomerQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'prestashop', $modelName = 'Oops_Db_Customer', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new Oops_Db_CustomerQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    Oops_Db_CustomerQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof Oops_Db_CustomerQuery) {
			return $criteria;
		}
		$query = new Oops_Db_CustomerQuery();
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
	 * @return    Oops_Db_Customer|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ($key === null) {
			return null;
		}
		if ((null !== ($obj = Oops_Db_CustomerPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
			// the object is alredy in the instance pool
			return $obj;
		}
		if ($con === null) {
			$con = Propel::getConnection(Oops_Db_CustomerPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
	 * @return    Oops_Db_Customer A model object, or null if the key is not found
	 */
	protected function findPkSimple($key, $con)
	{
		$sql = 'SELECT `ID_CUSTOMER`, `ID_GENDER`, `ID_DEFAULT_GROUP`, `FIRSTNAME`, `LASTNAME`, `EMAIL`, `PASSWD`, `LAST_PASSWD_GEN`, `BIRTHDAY`, `NEWSLETTER`, `IP_REGISTRATION_NEWSLETTER`, `NEWSLETTER_DATE_ADD`, `OPTIN`, `SECURE_KEY`, `NOTE`, `ACTIVE`, `IS_GUEST`, `DELETED`, `DATE_ADD`, `DATE_UPD` FROM `' . _DB_PREFIX_ . 'customer` WHERE `ID_CUSTOMER` = :p0';
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
			$obj = new Oops_Db_Customer();
			$obj->hydrate($row);
			Oops_Db_CustomerPeer::addInstanceToPool($obj, (string) $row[0]);
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
	 * @return    Oops_Db_Customer|array|mixed the result, formatted by the current formatter
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
	 * @return    Oops_Db_CustomerQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(Oops_Db_CustomerPeer::ID_CUSTOMER, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    Oops_Db_CustomerQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(Oops_Db_CustomerPeer::ID_CUSTOMER, $keys, Criteria::IN);
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
	 * @return    Oops_Db_CustomerQuery The current query, for fluid interface
	 */
	public function filterByIdCustomer($idCustomer = null, $comparison = null)
	{
		if (is_array($idCustomer) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(Oops_Db_CustomerPeer::ID_CUSTOMER, $idCustomer, $comparison);
	}

	/**
	 * Filter the query on the id_gender column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByIdGender(1234); // WHERE id_gender = 1234
	 * $query->filterByIdGender(array(12, 34)); // WHERE id_gender IN (12, 34)
	 * $query->filterByIdGender(array('min' => 12)); // WHERE id_gender > 12
	 * </code>
	 *
	 * @param     mixed $idGender The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Db_CustomerQuery The current query, for fluid interface
	 */
	public function filterByIdGender($idGender = null, $comparison = null)
	{
		if (is_array($idGender)) {
			$useMinMax = false;
			if (isset($idGender['min'])) {
				$this->addUsingAlias(Oops_Db_CustomerPeer::ID_GENDER, $idGender['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($idGender['max'])) {
				$this->addUsingAlias(Oops_Db_CustomerPeer::ID_GENDER, $idGender['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Db_CustomerPeer::ID_GENDER, $idGender, $comparison);
	}

	/**
	 * Filter the query on the id_default_group column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByIdDefaultGroup(1234); // WHERE id_default_group = 1234
	 * $query->filterByIdDefaultGroup(array(12, 34)); // WHERE id_default_group IN (12, 34)
	 * $query->filterByIdDefaultGroup(array('min' => 12)); // WHERE id_default_group > 12
	 * </code>
	 *
	 * @param     mixed $idDefaultGroup The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Db_CustomerQuery The current query, for fluid interface
	 */
	public function filterByIdDefaultGroup($idDefaultGroup = null, $comparison = null)
	{
		if (is_array($idDefaultGroup)) {
			$useMinMax = false;
			if (isset($idDefaultGroup['min'])) {
				$this->addUsingAlias(Oops_Db_CustomerPeer::ID_DEFAULT_GROUP, $idDefaultGroup['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($idDefaultGroup['max'])) {
				$this->addUsingAlias(Oops_Db_CustomerPeer::ID_DEFAULT_GROUP, $idDefaultGroup['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Db_CustomerPeer::ID_DEFAULT_GROUP, $idDefaultGroup, $comparison);
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
	 * @return    Oops_Db_CustomerQuery The current query, for fluid interface
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
		return $this->addUsingAlias(Oops_Db_CustomerPeer::FIRSTNAME, $firstname, $comparison);
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
	 * @return    Oops_Db_CustomerQuery The current query, for fluid interface
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
		return $this->addUsingAlias(Oops_Db_CustomerPeer::LASTNAME, $lastname, $comparison);
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
	 * @return    Oops_Db_CustomerQuery The current query, for fluid interface
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
		return $this->addUsingAlias(Oops_Db_CustomerPeer::EMAIL, $email, $comparison);
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
	 * @return    Oops_Db_CustomerQuery The current query, for fluid interface
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
		return $this->addUsingAlias(Oops_Db_CustomerPeer::PASSWD, $passwd, $comparison);
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
	 * @return    Oops_Db_CustomerQuery The current query, for fluid interface
	 */
	public function filterByLastPasswdGen($lastPasswdGen = null, $comparison = null)
	{
		if (is_array($lastPasswdGen)) {
			$useMinMax = false;
			if (isset($lastPasswdGen['min'])) {
				$this->addUsingAlias(Oops_Db_CustomerPeer::LAST_PASSWD_GEN, $lastPasswdGen['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($lastPasswdGen['max'])) {
				$this->addUsingAlias(Oops_Db_CustomerPeer::LAST_PASSWD_GEN, $lastPasswdGen['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Db_CustomerPeer::LAST_PASSWD_GEN, $lastPasswdGen, $comparison);
	}

	/**
	 * Filter the query on the birthday column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByBirthday('2011-03-14'); // WHERE birthday = '2011-03-14'
	 * $query->filterByBirthday('now'); // WHERE birthday = '2011-03-14'
	 * $query->filterByBirthday(array('max' => 'yesterday')); // WHERE birthday > '2011-03-13'
	 * </code>
	 *
	 * @param     mixed $birthday The value to use as filter.
	 *              Values can be integers (unix timestamps), DateTime objects, or strings.
	 *              Empty strings are treated as NULL.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Db_CustomerQuery The current query, for fluid interface
	 */
	public function filterByBirthday($birthday = null, $comparison = null)
	{
		if (is_array($birthday)) {
			$useMinMax = false;
			if (isset($birthday['min'])) {
				$this->addUsingAlias(Oops_Db_CustomerPeer::BIRTHDAY, $birthday['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($birthday['max'])) {
				$this->addUsingAlias(Oops_Db_CustomerPeer::BIRTHDAY, $birthday['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Db_CustomerPeer::BIRTHDAY, $birthday, $comparison);
	}

	/**
	 * Filter the query on the newsletter column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByNewsletter(true); // WHERE newsletter = true
	 * $query->filterByNewsletter('yes'); // WHERE newsletter = true
	 * </code>
	 *
	 * @param     boolean|string $newsletter The value to use as filter.
	 *              Non-boolean arguments are converted using the following rules:
	 *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Db_CustomerQuery The current query, for fluid interface
	 */
	public function filterByNewsletter($newsletter = null, $comparison = null)
	{
		if (is_string($newsletter)) {
			$newsletter = in_array(strtolower($newsletter), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(Oops_Db_CustomerPeer::NEWSLETTER, $newsletter, $comparison);
	}

	/**
	 * Filter the query on the ip_registration_newsletter column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByIpRegistrationNewsletter('fooValue');   // WHERE ip_registration_newsletter = 'fooValue'
	 * $query->filterByIpRegistrationNewsletter('%fooValue%'); // WHERE ip_registration_newsletter LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $ipRegistrationNewsletter The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Db_CustomerQuery The current query, for fluid interface
	 */
	public function filterByIpRegistrationNewsletter($ipRegistrationNewsletter = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($ipRegistrationNewsletter)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $ipRegistrationNewsletter)) {
				$ipRegistrationNewsletter = str_replace('*', '%', $ipRegistrationNewsletter);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(Oops_Db_CustomerPeer::IP_REGISTRATION_NEWSLETTER, $ipRegistrationNewsletter, $comparison);
	}

	/**
	 * Filter the query on the newsletter_date_add column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByNewsletterDateAdd('2011-03-14'); // WHERE newsletter_date_add = '2011-03-14'
	 * $query->filterByNewsletterDateAdd('now'); // WHERE newsletter_date_add = '2011-03-14'
	 * $query->filterByNewsletterDateAdd(array('max' => 'yesterday')); // WHERE newsletter_date_add > '2011-03-13'
	 * </code>
	 *
	 * @param     mixed $newsletterDateAdd The value to use as filter.
	 *              Values can be integers (unix timestamps), DateTime objects, or strings.
	 *              Empty strings are treated as NULL.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Db_CustomerQuery The current query, for fluid interface
	 */
	public function filterByNewsletterDateAdd($newsletterDateAdd = null, $comparison = null)
	{
		if (is_array($newsletterDateAdd)) {
			$useMinMax = false;
			if (isset($newsletterDateAdd['min'])) {
				$this->addUsingAlias(Oops_Db_CustomerPeer::NEWSLETTER_DATE_ADD, $newsletterDateAdd['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($newsletterDateAdd['max'])) {
				$this->addUsingAlias(Oops_Db_CustomerPeer::NEWSLETTER_DATE_ADD, $newsletterDateAdd['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Db_CustomerPeer::NEWSLETTER_DATE_ADD, $newsletterDateAdd, $comparison);
	}

	/**
	 * Filter the query on the optin column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByOptin(true); // WHERE optin = true
	 * $query->filterByOptin('yes'); // WHERE optin = true
	 * </code>
	 *
	 * @param     boolean|string $optin The value to use as filter.
	 *              Non-boolean arguments are converted using the following rules:
	 *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Db_CustomerQuery The current query, for fluid interface
	 */
	public function filterByOptin($optin = null, $comparison = null)
	{
		if (is_string($optin)) {
			$optin = in_array(strtolower($optin), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(Oops_Db_CustomerPeer::OPTIN, $optin, $comparison);
	}

	/**
	 * Filter the query on the secure_key column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterBySecureKey('fooValue');   // WHERE secure_key = 'fooValue'
	 * $query->filterBySecureKey('%fooValue%'); // WHERE secure_key LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $secureKey The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Db_CustomerQuery The current query, for fluid interface
	 */
	public function filterBySecureKey($secureKey = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($secureKey)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $secureKey)) {
				$secureKey = str_replace('*', '%', $secureKey);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(Oops_Db_CustomerPeer::SECURE_KEY, $secureKey, $comparison);
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
	 * @return    Oops_Db_CustomerQuery The current query, for fluid interface
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
		return $this->addUsingAlias(Oops_Db_CustomerPeer::NOTE, $note, $comparison);
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
	 * @return    Oops_Db_CustomerQuery The current query, for fluid interface
	 */
	public function filterByActive($active = null, $comparison = null)
	{
		if (is_string($active)) {
			$active = in_array(strtolower($active), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(Oops_Db_CustomerPeer::ACTIVE, $active, $comparison);
	}

	/**
	 * Filter the query on the is_guest column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByIsGuest(true); // WHERE is_guest = true
	 * $query->filterByIsGuest('yes'); // WHERE is_guest = true
	 * </code>
	 *
	 * @param     boolean|string $isGuest The value to use as filter.
	 *              Non-boolean arguments are converted using the following rules:
	 *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Db_CustomerQuery The current query, for fluid interface
	 */
	public function filterByIsGuest($isGuest = null, $comparison = null)
	{
		if (is_string($isGuest)) {
			$is_guest = in_array(strtolower($isGuest), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(Oops_Db_CustomerPeer::IS_GUEST, $isGuest, $comparison);
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
	 * @return    Oops_Db_CustomerQuery The current query, for fluid interface
	 */
	public function filterByDeleted($deleted = null, $comparison = null)
	{
		if (is_string($deleted)) {
			$deleted = in_array(strtolower($deleted), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(Oops_Db_CustomerPeer::DELETED, $deleted, $comparison);
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
	 * @return    Oops_Db_CustomerQuery The current query, for fluid interface
	 */
	public function filterByDateAdd($dateAdd = null, $comparison = null)
	{
		if (is_array($dateAdd)) {
			$useMinMax = false;
			if (isset($dateAdd['min'])) {
				$this->addUsingAlias(Oops_Db_CustomerPeer::DATE_ADD, $dateAdd['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($dateAdd['max'])) {
				$this->addUsingAlias(Oops_Db_CustomerPeer::DATE_ADD, $dateAdd['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Db_CustomerPeer::DATE_ADD, $dateAdd, $comparison);
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
	 * @return    Oops_Db_CustomerQuery The current query, for fluid interface
	 */
	public function filterByDateUpd($dateUpd = null, $comparison = null)
	{
		if (is_array($dateUpd)) {
			$useMinMax = false;
			if (isset($dateUpd['min'])) {
				$this->addUsingAlias(Oops_Db_CustomerPeer::DATE_UPD, $dateUpd['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($dateUpd['max'])) {
				$this->addUsingAlias(Oops_Db_CustomerPeer::DATE_UPD, $dateUpd['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Db_CustomerPeer::DATE_UPD, $dateUpd, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     Oops_Db_Customer $customer Object to remove from the list of results
	 *
	 * @return    Oops_Db_CustomerQuery The current query, for fluid interface
	 */
	public function prune($customer = null)
	{
		if ($customer) {
			$this->addUsingAlias(Oops_Db_CustomerPeer::ID_CUSTOMER, $customer->getIdCustomer(), Criteria::NOT_EQUAL);
		}

		return $this;
	}

} // Oops_Db_Propel_CustomerQuery