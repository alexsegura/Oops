<?php


/**
 * Base class that represents a query for the 'cart' table.
 *
 * 
 *
 * @method     Oops_Model_CartQuery orderByIdCart($order = Criteria::ASC) Order by the id_cart column
 * @method     Oops_Model_CartQuery orderByIdCarrier($order = Criteria::ASC) Order by the id_carrier column
 * @method     Oops_Model_CartQuery orderByIdLang($order = Criteria::ASC) Order by the id_lang column
 * @method     Oops_Model_CartQuery orderByIdAddressDelivery($order = Criteria::ASC) Order by the id_address_delivery column
 * @method     Oops_Model_CartQuery orderByIdAddressInvoice($order = Criteria::ASC) Order by the id_address_invoice column
 * @method     Oops_Model_CartQuery orderByIdCurrency($order = Criteria::ASC) Order by the id_currency column
 * @method     Oops_Model_CartQuery orderByIdCustomer($order = Criteria::ASC) Order by the id_customer column
 * @method     Oops_Model_CartQuery orderByIdGuest($order = Criteria::ASC) Order by the id_guest column
 * @method     Oops_Model_CartQuery orderBySecureKey($order = Criteria::ASC) Order by the secure_key column
 * @method     Oops_Model_CartQuery orderByRecyclable($order = Criteria::ASC) Order by the recyclable column
 * @method     Oops_Model_CartQuery orderByGift($order = Criteria::ASC) Order by the gift column
 * @method     Oops_Model_CartQuery orderByGiftMessage($order = Criteria::ASC) Order by the gift_message column
 * @method     Oops_Model_CartQuery orderByDateAdd($order = Criteria::ASC) Order by the date_add column
 * @method     Oops_Model_CartQuery orderByDateUpd($order = Criteria::ASC) Order by the date_upd column
 *
 * @method     Oops_Model_CartQuery groupByIdCart() Group by the id_cart column
 * @method     Oops_Model_CartQuery groupByIdCarrier() Group by the id_carrier column
 * @method     Oops_Model_CartQuery groupByIdLang() Group by the id_lang column
 * @method     Oops_Model_CartQuery groupByIdAddressDelivery() Group by the id_address_delivery column
 * @method     Oops_Model_CartQuery groupByIdAddressInvoice() Group by the id_address_invoice column
 * @method     Oops_Model_CartQuery groupByIdCurrency() Group by the id_currency column
 * @method     Oops_Model_CartQuery groupByIdCustomer() Group by the id_customer column
 * @method     Oops_Model_CartQuery groupByIdGuest() Group by the id_guest column
 * @method     Oops_Model_CartQuery groupBySecureKey() Group by the secure_key column
 * @method     Oops_Model_CartQuery groupByRecyclable() Group by the recyclable column
 * @method     Oops_Model_CartQuery groupByGift() Group by the gift column
 * @method     Oops_Model_CartQuery groupByGiftMessage() Group by the gift_message column
 * @method     Oops_Model_CartQuery groupByDateAdd() Group by the date_add column
 * @method     Oops_Model_CartQuery groupByDateUpd() Group by the date_upd column
 *
 * @method     Oops_Model_CartQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     Oops_Model_CartQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     Oops_Model_CartQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     Oops_Model_Cart findOne(PropelPDO $con = null) Return the first Oops_Model_Cart matching the query
 * @method     Oops_Model_Cart findOneOrCreate(PropelPDO $con = null) Return the first Oops_Model_Cart matching the query, or a new Oops_Model_Cart object populated from the query conditions when no match is found
 *
 * @method     Oops_Model_Cart findOneByIdCart(int $id_cart) Return the first Oops_Model_Cart filtered by the id_cart column
 * @method     Oops_Model_Cart findOneByIdCarrier(int $id_carrier) Return the first Oops_Model_Cart filtered by the id_carrier column
 * @method     Oops_Model_Cart findOneByIdLang(int $id_lang) Return the first Oops_Model_Cart filtered by the id_lang column
 * @method     Oops_Model_Cart findOneByIdAddressDelivery(int $id_address_delivery) Return the first Oops_Model_Cart filtered by the id_address_delivery column
 * @method     Oops_Model_Cart findOneByIdAddressInvoice(int $id_address_invoice) Return the first Oops_Model_Cart filtered by the id_address_invoice column
 * @method     Oops_Model_Cart findOneByIdCurrency(int $id_currency) Return the first Oops_Model_Cart filtered by the id_currency column
 * @method     Oops_Model_Cart findOneByIdCustomer(int $id_customer) Return the first Oops_Model_Cart filtered by the id_customer column
 * @method     Oops_Model_Cart findOneByIdGuest(int $id_guest) Return the first Oops_Model_Cart filtered by the id_guest column
 * @method     Oops_Model_Cart findOneBySecureKey(string $secure_key) Return the first Oops_Model_Cart filtered by the secure_key column
 * @method     Oops_Model_Cart findOneByRecyclable(boolean $recyclable) Return the first Oops_Model_Cart filtered by the recyclable column
 * @method     Oops_Model_Cart findOneByGift(boolean $gift) Return the first Oops_Model_Cart filtered by the gift column
 * @method     Oops_Model_Cart findOneByGiftMessage(string $gift_message) Return the first Oops_Model_Cart filtered by the gift_message column
 * @method     Oops_Model_Cart findOneByDateAdd(string $date_add) Return the first Oops_Model_Cart filtered by the date_add column
 * @method     Oops_Model_Cart findOneByDateUpd(string $date_upd) Return the first Oops_Model_Cart filtered by the date_upd column
 *
 * @method     array findByIdCart(int $id_cart) Return Oops_Model_Cart objects filtered by the id_cart column
 * @method     array findByIdCarrier(int $id_carrier) Return Oops_Model_Cart objects filtered by the id_carrier column
 * @method     array findByIdLang(int $id_lang) Return Oops_Model_Cart objects filtered by the id_lang column
 * @method     array findByIdAddressDelivery(int $id_address_delivery) Return Oops_Model_Cart objects filtered by the id_address_delivery column
 * @method     array findByIdAddressInvoice(int $id_address_invoice) Return Oops_Model_Cart objects filtered by the id_address_invoice column
 * @method     array findByIdCurrency(int $id_currency) Return Oops_Model_Cart objects filtered by the id_currency column
 * @method     array findByIdCustomer(int $id_customer) Return Oops_Model_Cart objects filtered by the id_customer column
 * @method     array findByIdGuest(int $id_guest) Return Oops_Model_Cart objects filtered by the id_guest column
 * @method     array findBySecureKey(string $secure_key) Return Oops_Model_Cart objects filtered by the secure_key column
 * @method     array findByRecyclable(boolean $recyclable) Return Oops_Model_Cart objects filtered by the recyclable column
 * @method     array findByGift(boolean $gift) Return Oops_Model_Cart objects filtered by the gift column
 * @method     array findByGiftMessage(string $gift_message) Return Oops_Model_Cart objects filtered by the gift_message column
 * @method     array findByDateAdd(string $date_add) Return Oops_Model_Cart objects filtered by the date_add column
 * @method     array findByDateUpd(string $date_upd) Return Oops_Model_Cart objects filtered by the date_upd column
 *
 * @package    propel.generator.prestashop.om
 */
abstract class Oops_Model_Base_CartQuery extends ModelCriteria
{
	
	/**
	 * Initializes internal state of Oops_Model_Base_CartQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'prestashop', $modelName = 'Oops_Model_Cart', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new Oops_Model_CartQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    Oops_Model_CartQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof Oops_Model_CartQuery) {
			return $criteria;
		}
		$query = new Oops_Model_CartQuery();
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
	 * @return    Oops_Model_Cart|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ($key === null) {
			return null;
		}
		if ((null !== ($obj = Oops_Model_CartPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
			// the object is alredy in the instance pool
			return $obj;
		}
		if ($con === null) {
			$con = Propel::getConnection(Oops_Model_CartPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
	 * @return    Oops_Model_Cart A model object, or null if the key is not found
	 */
	protected function findPkSimple($key, $con)
	{
		$sql = 'SELECT `ID_CART`, `ID_CARRIER`, `ID_LANG`, `ID_ADDRESS_DELIVERY`, `ID_ADDRESS_INVOICE`, `ID_CURRENCY`, `ID_CUSTOMER`, `ID_GUEST`, `SECURE_KEY`, `RECYCLABLE`, `GIFT`, `GIFT_MESSAGE`, `DATE_ADD`, `DATE_UPD` FROM `' . _DB_PREFIX_ . 'cart` WHERE `ID_CART` = :p0';
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
			$obj = new Oops_Model_Cart();
			$obj->hydrate($row);
			Oops_Model_CartPeer::addInstanceToPool($obj, (string) $row[0]);
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
	 * @return    Oops_Model_Cart|array|mixed the result, formatted by the current formatter
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
	 * @return    Oops_Model_CartQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(Oops_Model_CartPeer::ID_CART, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    Oops_Model_CartQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(Oops_Model_CartPeer::ID_CART, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id_cart column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByIdCart(1234); // WHERE id_cart = 1234
	 * $query->filterByIdCart(array(12, 34)); // WHERE id_cart IN (12, 34)
	 * $query->filterByIdCart(array('min' => 12)); // WHERE id_cart > 12
	 * </code>
	 *
	 * @param     mixed $idCart The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_CartQuery The current query, for fluid interface
	 */
	public function filterByIdCart($idCart = null, $comparison = null)
	{
		if (is_array($idCart) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(Oops_Model_CartPeer::ID_CART, $idCart, $comparison);
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
	 * @return    Oops_Model_CartQuery The current query, for fluid interface
	 */
	public function filterByIdCarrier($idCarrier = null, $comparison = null)
	{
		if (is_array($idCarrier)) {
			$useMinMax = false;
			if (isset($idCarrier['min'])) {
				$this->addUsingAlias(Oops_Model_CartPeer::ID_CARRIER, $idCarrier['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($idCarrier['max'])) {
				$this->addUsingAlias(Oops_Model_CartPeer::ID_CARRIER, $idCarrier['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_CartPeer::ID_CARRIER, $idCarrier, $comparison);
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
	 * @return    Oops_Model_CartQuery The current query, for fluid interface
	 */
	public function filterByIdLang($idLang = null, $comparison = null)
	{
		if (is_array($idLang)) {
			$useMinMax = false;
			if (isset($idLang['min'])) {
				$this->addUsingAlias(Oops_Model_CartPeer::ID_LANG, $idLang['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($idLang['max'])) {
				$this->addUsingAlias(Oops_Model_CartPeer::ID_LANG, $idLang['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_CartPeer::ID_LANG, $idLang, $comparison);
	}

	/**
	 * Filter the query on the id_address_delivery column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByIdAddressDelivery(1234); // WHERE id_address_delivery = 1234
	 * $query->filterByIdAddressDelivery(array(12, 34)); // WHERE id_address_delivery IN (12, 34)
	 * $query->filterByIdAddressDelivery(array('min' => 12)); // WHERE id_address_delivery > 12
	 * </code>
	 *
	 * @param     mixed $idAddressDelivery The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_CartQuery The current query, for fluid interface
	 */
	public function filterByIdAddressDelivery($idAddressDelivery = null, $comparison = null)
	{
		if (is_array($idAddressDelivery)) {
			$useMinMax = false;
			if (isset($idAddressDelivery['min'])) {
				$this->addUsingAlias(Oops_Model_CartPeer::ID_ADDRESS_DELIVERY, $idAddressDelivery['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($idAddressDelivery['max'])) {
				$this->addUsingAlias(Oops_Model_CartPeer::ID_ADDRESS_DELIVERY, $idAddressDelivery['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_CartPeer::ID_ADDRESS_DELIVERY, $idAddressDelivery, $comparison);
	}

	/**
	 * Filter the query on the id_address_invoice column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByIdAddressInvoice(1234); // WHERE id_address_invoice = 1234
	 * $query->filterByIdAddressInvoice(array(12, 34)); // WHERE id_address_invoice IN (12, 34)
	 * $query->filterByIdAddressInvoice(array('min' => 12)); // WHERE id_address_invoice > 12
	 * </code>
	 *
	 * @param     mixed $idAddressInvoice The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_CartQuery The current query, for fluid interface
	 */
	public function filterByIdAddressInvoice($idAddressInvoice = null, $comparison = null)
	{
		if (is_array($idAddressInvoice)) {
			$useMinMax = false;
			if (isset($idAddressInvoice['min'])) {
				$this->addUsingAlias(Oops_Model_CartPeer::ID_ADDRESS_INVOICE, $idAddressInvoice['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($idAddressInvoice['max'])) {
				$this->addUsingAlias(Oops_Model_CartPeer::ID_ADDRESS_INVOICE, $idAddressInvoice['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_CartPeer::ID_ADDRESS_INVOICE, $idAddressInvoice, $comparison);
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
	 * @return    Oops_Model_CartQuery The current query, for fluid interface
	 */
	public function filterByIdCurrency($idCurrency = null, $comparison = null)
	{
		if (is_array($idCurrency)) {
			$useMinMax = false;
			if (isset($idCurrency['min'])) {
				$this->addUsingAlias(Oops_Model_CartPeer::ID_CURRENCY, $idCurrency['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($idCurrency['max'])) {
				$this->addUsingAlias(Oops_Model_CartPeer::ID_CURRENCY, $idCurrency['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_CartPeer::ID_CURRENCY, $idCurrency, $comparison);
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
	 * @return    Oops_Model_CartQuery The current query, for fluid interface
	 */
	public function filterByIdCustomer($idCustomer = null, $comparison = null)
	{
		if (is_array($idCustomer)) {
			$useMinMax = false;
			if (isset($idCustomer['min'])) {
				$this->addUsingAlias(Oops_Model_CartPeer::ID_CUSTOMER, $idCustomer['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($idCustomer['max'])) {
				$this->addUsingAlias(Oops_Model_CartPeer::ID_CUSTOMER, $idCustomer['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_CartPeer::ID_CUSTOMER, $idCustomer, $comparison);
	}

	/**
	 * Filter the query on the id_guest column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByIdGuest(1234); // WHERE id_guest = 1234
	 * $query->filterByIdGuest(array(12, 34)); // WHERE id_guest IN (12, 34)
	 * $query->filterByIdGuest(array('min' => 12)); // WHERE id_guest > 12
	 * </code>
	 *
	 * @param     mixed $idGuest The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_CartQuery The current query, for fluid interface
	 */
	public function filterByIdGuest($idGuest = null, $comparison = null)
	{
		if (is_array($idGuest)) {
			$useMinMax = false;
			if (isset($idGuest['min'])) {
				$this->addUsingAlias(Oops_Model_CartPeer::ID_GUEST, $idGuest['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($idGuest['max'])) {
				$this->addUsingAlias(Oops_Model_CartPeer::ID_GUEST, $idGuest['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_CartPeer::ID_GUEST, $idGuest, $comparison);
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
	 * @return    Oops_Model_CartQuery The current query, for fluid interface
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
		return $this->addUsingAlias(Oops_Model_CartPeer::SECURE_KEY, $secureKey, $comparison);
	}

	/**
	 * Filter the query on the recyclable column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByRecyclable(true); // WHERE recyclable = true
	 * $query->filterByRecyclable('yes'); // WHERE recyclable = true
	 * </code>
	 *
	 * @param     boolean|string $recyclable The value to use as filter.
	 *              Non-boolean arguments are converted using the following rules:
	 *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_CartQuery The current query, for fluid interface
	 */
	public function filterByRecyclable($recyclable = null, $comparison = null)
	{
		if (is_string($recyclable)) {
			$recyclable = in_array(strtolower($recyclable), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(Oops_Model_CartPeer::RECYCLABLE, $recyclable, $comparison);
	}

	/**
	 * Filter the query on the gift column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByGift(true); // WHERE gift = true
	 * $query->filterByGift('yes'); // WHERE gift = true
	 * </code>
	 *
	 * @param     boolean|string $gift The value to use as filter.
	 *              Non-boolean arguments are converted using the following rules:
	 *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_CartQuery The current query, for fluid interface
	 */
	public function filterByGift($gift = null, $comparison = null)
	{
		if (is_string($gift)) {
			$gift = in_array(strtolower($gift), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(Oops_Model_CartPeer::GIFT, $gift, $comparison);
	}

	/**
	 * Filter the query on the gift_message column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByGiftMessage('fooValue');   // WHERE gift_message = 'fooValue'
	 * $query->filterByGiftMessage('%fooValue%'); // WHERE gift_message LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $giftMessage The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_CartQuery The current query, for fluid interface
	 */
	public function filterByGiftMessage($giftMessage = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($giftMessage)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $giftMessage)) {
				$giftMessage = str_replace('*', '%', $giftMessage);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(Oops_Model_CartPeer::GIFT_MESSAGE, $giftMessage, $comparison);
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
	 * @return    Oops_Model_CartQuery The current query, for fluid interface
	 */
	public function filterByDateAdd($dateAdd = null, $comparison = null)
	{
		if (is_array($dateAdd)) {
			$useMinMax = false;
			if (isset($dateAdd['min'])) {
				$this->addUsingAlias(Oops_Model_CartPeer::DATE_ADD, $dateAdd['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($dateAdd['max'])) {
				$this->addUsingAlias(Oops_Model_CartPeer::DATE_ADD, $dateAdd['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_CartPeer::DATE_ADD, $dateAdd, $comparison);
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
	 * @return    Oops_Model_CartQuery The current query, for fluid interface
	 */
	public function filterByDateUpd($dateUpd = null, $comparison = null)
	{
		if (is_array($dateUpd)) {
			$useMinMax = false;
			if (isset($dateUpd['min'])) {
				$this->addUsingAlias(Oops_Model_CartPeer::DATE_UPD, $dateUpd['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($dateUpd['max'])) {
				$this->addUsingAlias(Oops_Model_CartPeer::DATE_UPD, $dateUpd['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_CartPeer::DATE_UPD, $dateUpd, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     Oops_Model_Cart $cart Object to remove from the list of results
	 *
	 * @return    Oops_Model_CartQuery The current query, for fluid interface
	 */
	public function prune($cart = null)
	{
		if ($cart) {
			$this->addUsingAlias(Oops_Model_CartPeer::ID_CART, $cart->getIdCart(), Criteria::NOT_EQUAL);
		}

		return $this;
	}

} // Oops_Model_Base_CartQuery