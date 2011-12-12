<?php


/**
 * Base class that represents a query for the 'customer_thread' table.
 *
 * 
 *
 * @method     Oops_Db_CustomerThreadQuery orderByIdCustomerThread($order = Criteria::ASC) Order by the id_customer_thread column
 * @method     Oops_Db_CustomerThreadQuery orderByIdLang($order = Criteria::ASC) Order by the id_lang column
 * @method     Oops_Db_CustomerThreadQuery orderByIdContact($order = Criteria::ASC) Order by the id_contact column
 * @method     Oops_Db_CustomerThreadQuery orderByIdCustomer($order = Criteria::ASC) Order by the id_customer column
 * @method     Oops_Db_CustomerThreadQuery orderByIdOrder($order = Criteria::ASC) Order by the id_order column
 * @method     Oops_Db_CustomerThreadQuery orderByIdProduct($order = Criteria::ASC) Order by the id_product column
 * @method     Oops_Db_CustomerThreadQuery orderByStatus($order = Criteria::ASC) Order by the status column
 * @method     Oops_Db_CustomerThreadQuery orderByEmail($order = Criteria::ASC) Order by the email column
 * @method     Oops_Db_CustomerThreadQuery orderByToken($order = Criteria::ASC) Order by the token column
 * @method     Oops_Db_CustomerThreadQuery orderByDateAdd($order = Criteria::ASC) Order by the date_add column
 * @method     Oops_Db_CustomerThreadQuery orderByDateUpd($order = Criteria::ASC) Order by the date_upd column
 *
 * @method     Oops_Db_CustomerThreadQuery groupByIdCustomerThread() Group by the id_customer_thread column
 * @method     Oops_Db_CustomerThreadQuery groupByIdLang() Group by the id_lang column
 * @method     Oops_Db_CustomerThreadQuery groupByIdContact() Group by the id_contact column
 * @method     Oops_Db_CustomerThreadQuery groupByIdCustomer() Group by the id_customer column
 * @method     Oops_Db_CustomerThreadQuery groupByIdOrder() Group by the id_order column
 * @method     Oops_Db_CustomerThreadQuery groupByIdProduct() Group by the id_product column
 * @method     Oops_Db_CustomerThreadQuery groupByStatus() Group by the status column
 * @method     Oops_Db_CustomerThreadQuery groupByEmail() Group by the email column
 * @method     Oops_Db_CustomerThreadQuery groupByToken() Group by the token column
 * @method     Oops_Db_CustomerThreadQuery groupByDateAdd() Group by the date_add column
 * @method     Oops_Db_CustomerThreadQuery groupByDateUpd() Group by the date_upd column
 *
 * @method     Oops_Db_CustomerThreadQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     Oops_Db_CustomerThreadQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     Oops_Db_CustomerThreadQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     Oops_Db_CustomerThread findOne(PropelPDO $con = null) Return the first Oops_Db_CustomerThread matching the query
 * @method     Oops_Db_CustomerThread findOneOrCreate(PropelPDO $con = null) Return the first Oops_Db_CustomerThread matching the query, or a new Oops_Db_CustomerThread object populated from the query conditions when no match is found
 *
 * @method     Oops_Db_CustomerThread findOneByIdCustomerThread(int $id_customer_thread) Return the first Oops_Db_CustomerThread filtered by the id_customer_thread column
 * @method     Oops_Db_CustomerThread findOneByIdLang(int $id_lang) Return the first Oops_Db_CustomerThread filtered by the id_lang column
 * @method     Oops_Db_CustomerThread findOneByIdContact(int $id_contact) Return the first Oops_Db_CustomerThread filtered by the id_contact column
 * @method     Oops_Db_CustomerThread findOneByIdCustomer(int $id_customer) Return the first Oops_Db_CustomerThread filtered by the id_customer column
 * @method     Oops_Db_CustomerThread findOneByIdOrder(int $id_order) Return the first Oops_Db_CustomerThread filtered by the id_order column
 * @method     Oops_Db_CustomerThread findOneByIdProduct(int $id_product) Return the first Oops_Db_CustomerThread filtered by the id_product column
 * @method     Oops_Db_CustomerThread findOneByStatus(string $status) Return the first Oops_Db_CustomerThread filtered by the status column
 * @method     Oops_Db_CustomerThread findOneByEmail(string $email) Return the first Oops_Db_CustomerThread filtered by the email column
 * @method     Oops_Db_CustomerThread findOneByToken(string $token) Return the first Oops_Db_CustomerThread filtered by the token column
 * @method     Oops_Db_CustomerThread findOneByDateAdd(string $date_add) Return the first Oops_Db_CustomerThread filtered by the date_add column
 * @method     Oops_Db_CustomerThread findOneByDateUpd(string $date_upd) Return the first Oops_Db_CustomerThread filtered by the date_upd column
 *
 * @method     array findByIdCustomerThread(int $id_customer_thread) Return Oops_Db_CustomerThread objects filtered by the id_customer_thread column
 * @method     array findByIdLang(int $id_lang) Return Oops_Db_CustomerThread objects filtered by the id_lang column
 * @method     array findByIdContact(int $id_contact) Return Oops_Db_CustomerThread objects filtered by the id_contact column
 * @method     array findByIdCustomer(int $id_customer) Return Oops_Db_CustomerThread objects filtered by the id_customer column
 * @method     array findByIdOrder(int $id_order) Return Oops_Db_CustomerThread objects filtered by the id_order column
 * @method     array findByIdProduct(int $id_product) Return Oops_Db_CustomerThread objects filtered by the id_product column
 * @method     array findByStatus(string $status) Return Oops_Db_CustomerThread objects filtered by the status column
 * @method     array findByEmail(string $email) Return Oops_Db_CustomerThread objects filtered by the email column
 * @method     array findByToken(string $token) Return Oops_Db_CustomerThread objects filtered by the token column
 * @method     array findByDateAdd(string $date_add) Return Oops_Db_CustomerThread objects filtered by the date_add column
 * @method     array findByDateUpd(string $date_upd) Return Oops_Db_CustomerThread objects filtered by the date_upd column
 *
 * @package    propel.generator.prestashop.om
 */
abstract class Oops_Db_Propel_CustomerThreadQuery extends ModelCriteria
{
	
	/**
	 * Initializes internal state of Oops_Db_Propel_CustomerThreadQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'prestashop', $modelName = 'Oops_Db_CustomerThread', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new Oops_Db_CustomerThreadQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    Oops_Db_CustomerThreadQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof Oops_Db_CustomerThreadQuery) {
			return $criteria;
		}
		$query = new Oops_Db_CustomerThreadQuery();
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
	 * @return    Oops_Db_CustomerThread|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ($key === null) {
			return null;
		}
		if ((null !== ($obj = Oops_Db_CustomerThreadPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
			// the object is alredy in the instance pool
			return $obj;
		}
		if ($con === null) {
			$con = Propel::getConnection(Oops_Db_CustomerThreadPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
	 * @return    Oops_Db_CustomerThread A model object, or null if the key is not found
	 */
	protected function findPkSimple($key, $con)
	{
		$sql = 'SELECT `ID_CUSTOMER_THREAD`, `ID_LANG`, `ID_CONTACT`, `ID_CUSTOMER`, `ID_ORDER`, `ID_PRODUCT`, `STATUS`, `EMAIL`, `TOKEN`, `DATE_ADD`, `DATE_UPD` FROM `' . _DB_PREFIX_ . 'customer_thread` WHERE `ID_CUSTOMER_THREAD` = :p0';
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
			$obj = new Oops_Db_CustomerThread();
			$obj->hydrate($row);
			Oops_Db_CustomerThreadPeer::addInstanceToPool($obj, (string) $row[0]);
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
	 * @return    Oops_Db_CustomerThread|array|mixed the result, formatted by the current formatter
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
	 * @return    Oops_Db_CustomerThreadQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(Oops_Db_CustomerThreadPeer::ID_CUSTOMER_THREAD, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    Oops_Db_CustomerThreadQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(Oops_Db_CustomerThreadPeer::ID_CUSTOMER_THREAD, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id_customer_thread column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByIdCustomerThread(1234); // WHERE id_customer_thread = 1234
	 * $query->filterByIdCustomerThread(array(12, 34)); // WHERE id_customer_thread IN (12, 34)
	 * $query->filterByIdCustomerThread(array('min' => 12)); // WHERE id_customer_thread > 12
	 * </code>
	 *
	 * @param     mixed $idCustomerThread The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Db_CustomerThreadQuery The current query, for fluid interface
	 */
	public function filterByIdCustomerThread($idCustomerThread = null, $comparison = null)
	{
		if (is_array($idCustomerThread) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(Oops_Db_CustomerThreadPeer::ID_CUSTOMER_THREAD, $idCustomerThread, $comparison);
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
	 * @return    Oops_Db_CustomerThreadQuery The current query, for fluid interface
	 */
	public function filterByIdLang($idLang = null, $comparison = null)
	{
		if (is_array($idLang)) {
			$useMinMax = false;
			if (isset($idLang['min'])) {
				$this->addUsingAlias(Oops_Db_CustomerThreadPeer::ID_LANG, $idLang['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($idLang['max'])) {
				$this->addUsingAlias(Oops_Db_CustomerThreadPeer::ID_LANG, $idLang['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Db_CustomerThreadPeer::ID_LANG, $idLang, $comparison);
	}

	/**
	 * Filter the query on the id_contact column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByIdContact(1234); // WHERE id_contact = 1234
	 * $query->filterByIdContact(array(12, 34)); // WHERE id_contact IN (12, 34)
	 * $query->filterByIdContact(array('min' => 12)); // WHERE id_contact > 12
	 * </code>
	 *
	 * @param     mixed $idContact The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Db_CustomerThreadQuery The current query, for fluid interface
	 */
	public function filterByIdContact($idContact = null, $comparison = null)
	{
		if (is_array($idContact)) {
			$useMinMax = false;
			if (isset($idContact['min'])) {
				$this->addUsingAlias(Oops_Db_CustomerThreadPeer::ID_CONTACT, $idContact['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($idContact['max'])) {
				$this->addUsingAlias(Oops_Db_CustomerThreadPeer::ID_CONTACT, $idContact['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Db_CustomerThreadPeer::ID_CONTACT, $idContact, $comparison);
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
	 * @return    Oops_Db_CustomerThreadQuery The current query, for fluid interface
	 */
	public function filterByIdCustomer($idCustomer = null, $comparison = null)
	{
		if (is_array($idCustomer)) {
			$useMinMax = false;
			if (isset($idCustomer['min'])) {
				$this->addUsingAlias(Oops_Db_CustomerThreadPeer::ID_CUSTOMER, $idCustomer['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($idCustomer['max'])) {
				$this->addUsingAlias(Oops_Db_CustomerThreadPeer::ID_CUSTOMER, $idCustomer['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Db_CustomerThreadPeer::ID_CUSTOMER, $idCustomer, $comparison);
	}

	/**
	 * Filter the query on the id_order column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByIdOrder(1234); // WHERE id_order = 1234
	 * $query->filterByIdOrder(array(12, 34)); // WHERE id_order IN (12, 34)
	 * $query->filterByIdOrder(array('min' => 12)); // WHERE id_order > 12
	 * </code>
	 *
	 * @param     mixed $idOrder The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Db_CustomerThreadQuery The current query, for fluid interface
	 */
	public function filterByIdOrder($idOrder = null, $comparison = null)
	{
		if (is_array($idOrder)) {
			$useMinMax = false;
			if (isset($idOrder['min'])) {
				$this->addUsingAlias(Oops_Db_CustomerThreadPeer::ID_ORDER, $idOrder['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($idOrder['max'])) {
				$this->addUsingAlias(Oops_Db_CustomerThreadPeer::ID_ORDER, $idOrder['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Db_CustomerThreadPeer::ID_ORDER, $idOrder, $comparison);
	}

	/**
	 * Filter the query on the id_product column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByIdProduct(1234); // WHERE id_product = 1234
	 * $query->filterByIdProduct(array(12, 34)); // WHERE id_product IN (12, 34)
	 * $query->filterByIdProduct(array('min' => 12)); // WHERE id_product > 12
	 * </code>
	 *
	 * @param     mixed $idProduct The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Db_CustomerThreadQuery The current query, for fluid interface
	 */
	public function filterByIdProduct($idProduct = null, $comparison = null)
	{
		if (is_array($idProduct)) {
			$useMinMax = false;
			if (isset($idProduct['min'])) {
				$this->addUsingAlias(Oops_Db_CustomerThreadPeer::ID_PRODUCT, $idProduct['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($idProduct['max'])) {
				$this->addUsingAlias(Oops_Db_CustomerThreadPeer::ID_PRODUCT, $idProduct['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Db_CustomerThreadPeer::ID_PRODUCT, $idProduct, $comparison);
	}

	/**
	 * Filter the query on the status column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByStatus('fooValue');   // WHERE status = 'fooValue'
	 * $query->filterByStatus('%fooValue%'); // WHERE status LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $status The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Db_CustomerThreadQuery The current query, for fluid interface
	 */
	public function filterByStatus($status = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($status)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $status)) {
				$status = str_replace('*', '%', $status);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(Oops_Db_CustomerThreadPeer::STATUS, $status, $comparison);
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
	 * @return    Oops_Db_CustomerThreadQuery The current query, for fluid interface
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
		return $this->addUsingAlias(Oops_Db_CustomerThreadPeer::EMAIL, $email, $comparison);
	}

	/**
	 * Filter the query on the token column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByToken('fooValue');   // WHERE token = 'fooValue'
	 * $query->filterByToken('%fooValue%'); // WHERE token LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $token The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Db_CustomerThreadQuery The current query, for fluid interface
	 */
	public function filterByToken($token = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($token)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $token)) {
				$token = str_replace('*', '%', $token);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(Oops_Db_CustomerThreadPeer::TOKEN, $token, $comparison);
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
	 * @return    Oops_Db_CustomerThreadQuery The current query, for fluid interface
	 */
	public function filterByDateAdd($dateAdd = null, $comparison = null)
	{
		if (is_array($dateAdd)) {
			$useMinMax = false;
			if (isset($dateAdd['min'])) {
				$this->addUsingAlias(Oops_Db_CustomerThreadPeer::DATE_ADD, $dateAdd['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($dateAdd['max'])) {
				$this->addUsingAlias(Oops_Db_CustomerThreadPeer::DATE_ADD, $dateAdd['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Db_CustomerThreadPeer::DATE_ADD, $dateAdd, $comparison);
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
	 * @return    Oops_Db_CustomerThreadQuery The current query, for fluid interface
	 */
	public function filterByDateUpd($dateUpd = null, $comparison = null)
	{
		if (is_array($dateUpd)) {
			$useMinMax = false;
			if (isset($dateUpd['min'])) {
				$this->addUsingAlias(Oops_Db_CustomerThreadPeer::DATE_UPD, $dateUpd['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($dateUpd['max'])) {
				$this->addUsingAlias(Oops_Db_CustomerThreadPeer::DATE_UPD, $dateUpd['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Db_CustomerThreadPeer::DATE_UPD, $dateUpd, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     Oops_Db_CustomerThread $customerThread Object to remove from the list of results
	 *
	 * @return    Oops_Db_CustomerThreadQuery The current query, for fluid interface
	 */
	public function prune($customerThread = null)
	{
		if ($customerThread) {
			$this->addUsingAlias(Oops_Db_CustomerThreadPeer::ID_CUSTOMER_THREAD, $customerThread->getIdCustomerThread(), Criteria::NOT_EQUAL);
		}

		return $this;
	}

} // Oops_Db_Propel_CustomerThreadQuery