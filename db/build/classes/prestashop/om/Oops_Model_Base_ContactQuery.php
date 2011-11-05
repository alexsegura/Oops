<?php


/**
 * Base class that represents a query for the '' . _DB_PREFIX_ . 'djland_contact' table.
 *
 * 
 *
 * @method     Oops_Model_ContactQuery orderByIdContact($order = Criteria::ASC) Order by the id_contact column
 * @method     Oops_Model_ContactQuery orderByEmail($order = Criteria::ASC) Order by the email column
 * @method     Oops_Model_ContactQuery orderByCustomerService($order = Criteria::ASC) Order by the customer_service column
 * @method     Oops_Model_ContactQuery orderByPosition($order = Criteria::ASC) Order by the position column
 *
 * @method     Oops_Model_ContactQuery groupByIdContact() Group by the id_contact column
 * @method     Oops_Model_ContactQuery groupByEmail() Group by the email column
 * @method     Oops_Model_ContactQuery groupByCustomerService() Group by the customer_service column
 * @method     Oops_Model_ContactQuery groupByPosition() Group by the position column
 *
 * @method     Oops_Model_ContactQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     Oops_Model_ContactQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     Oops_Model_ContactQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     Oops_Model_Contact findOne(PropelPDO $con = null) Return the first Oops_Model_Contact matching the query
 * @method     Oops_Model_Contact findOneOrCreate(PropelPDO $con = null) Return the first Oops_Model_Contact matching the query, or a new Oops_Model_Contact object populated from the query conditions when no match is found
 *
 * @method     Oops_Model_Contact findOneByIdContact(int $id_contact) Return the first Oops_Model_Contact filtered by the id_contact column
 * @method     Oops_Model_Contact findOneByEmail(string $email) Return the first Oops_Model_Contact filtered by the email column
 * @method     Oops_Model_Contact findOneByCustomerService(boolean $customer_service) Return the first Oops_Model_Contact filtered by the customer_service column
 * @method     Oops_Model_Contact findOneByPosition(int $position) Return the first Oops_Model_Contact filtered by the position column
 *
 * @method     array findByIdContact(int $id_contact) Return Oops_Model_Contact objects filtered by the id_contact column
 * @method     array findByEmail(string $email) Return Oops_Model_Contact objects filtered by the email column
 * @method     array findByCustomerService(boolean $customer_service) Return Oops_Model_Contact objects filtered by the customer_service column
 * @method     array findByPosition(int $position) Return Oops_Model_Contact objects filtered by the position column
 *
 * @package    propel.generator.prestashop.om
 */
abstract class Oops_Model_Base_ContactQuery extends ModelCriteria
{
	
	/**
	 * Initializes internal state of Oops_Model_Base_ContactQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'prestashop', $modelName = 'Oops_Model_Contact', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new Oops_Model_ContactQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    Oops_Model_ContactQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof Oops_Model_ContactQuery) {
			return $criteria;
		}
		$query = new Oops_Model_ContactQuery();
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
	 * @return    Oops_Model_Contact|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ($key === null) {
			return null;
		}
		if ((null !== ($obj = Oops_Model_ContactPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
			// the object is alredy in the instance pool
			return $obj;
		}
		if ($con === null) {
			$con = Propel::getConnection(Oops_Model_ContactPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
	 * @return    Oops_Model_Contact A model object, or null if the key is not found
	 */
	protected function findPkSimple($key, $con)
	{
		$sql = 'SELECT `ID_CONTACT`, `EMAIL`, `CUSTOMER_SERVICE`, `POSITION` FROM `' . _DB_PREFIX_ . 'djland_contact` WHERE `ID_CONTACT` = :p0';
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
			$obj = new Oops_Model_Contact();
			$obj->hydrate($row);
			Oops_Model_ContactPeer::addInstanceToPool($obj, (string) $row[0]);
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
	 * @return    Oops_Model_Contact|array|mixed the result, formatted by the current formatter
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
	 * @return    Oops_Model_ContactQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(Oops_Model_ContactPeer::ID_CONTACT, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    Oops_Model_ContactQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(Oops_Model_ContactPeer::ID_CONTACT, $keys, Criteria::IN);
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
	 * @return    Oops_Model_ContactQuery The current query, for fluid interface
	 */
	public function filterByIdContact($idContact = null, $comparison = null)
	{
		if (is_array($idContact) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(Oops_Model_ContactPeer::ID_CONTACT, $idContact, $comparison);
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
	 * @return    Oops_Model_ContactQuery The current query, for fluid interface
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
		return $this->addUsingAlias(Oops_Model_ContactPeer::EMAIL, $email, $comparison);
	}

	/**
	 * Filter the query on the customer_service column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByCustomerService(true); // WHERE customer_service = true
	 * $query->filterByCustomerService('yes'); // WHERE customer_service = true
	 * </code>
	 *
	 * @param     boolean|string $customerService The value to use as filter.
	 *              Non-boolean arguments are converted using the following rules:
	 *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_ContactQuery The current query, for fluid interface
	 */
	public function filterByCustomerService($customerService = null, $comparison = null)
	{
		if (is_string($customerService)) {
			$customer_service = in_array(strtolower($customerService), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(Oops_Model_ContactPeer::CUSTOMER_SERVICE, $customerService, $comparison);
	}

	/**
	 * Filter the query on the position column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByPosition(1234); // WHERE position = 1234
	 * $query->filterByPosition(array(12, 34)); // WHERE position IN (12, 34)
	 * $query->filterByPosition(array('min' => 12)); // WHERE position > 12
	 * </code>
	 *
	 * @param     mixed $position The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_ContactQuery The current query, for fluid interface
	 */
	public function filterByPosition($position = null, $comparison = null)
	{
		if (is_array($position)) {
			$useMinMax = false;
			if (isset($position['min'])) {
				$this->addUsingAlias(Oops_Model_ContactPeer::POSITION, $position['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($position['max'])) {
				$this->addUsingAlias(Oops_Model_ContactPeer::POSITION, $position['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_ContactPeer::POSITION, $position, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     Oops_Model_Contact $contact Object to remove from the list of results
	 *
	 * @return    Oops_Model_ContactQuery The current query, for fluid interface
	 */
	public function prune($contact = null)
	{
		if ($contact) {
			$this->addUsingAlias(Oops_Model_ContactPeer::ID_CONTACT, $contact->getIdContact(), Criteria::NOT_EQUAL);
		}

		return $this;
	}

} // Oops_Model_Base_ContactQuery