<?php


/**
 * Base class that represents a query for the '' . _DB_PREFIX_ . 'djland_payment_cc' table.
 *
 * 
 *
 * @method     Oops_Model_PaymentCcQuery orderByIdPaymentCc($order = Criteria::ASC) Order by the id_payment_cc column
 * @method     Oops_Model_PaymentCcQuery orderByIdOrder($order = Criteria::ASC) Order by the id_order column
 * @method     Oops_Model_PaymentCcQuery orderByIdCurrency($order = Criteria::ASC) Order by the id_currency column
 * @method     Oops_Model_PaymentCcQuery orderByAmount($order = Criteria::ASC) Order by the amount column
 * @method     Oops_Model_PaymentCcQuery orderByTransactionId($order = Criteria::ASC) Order by the transaction_id column
 * @method     Oops_Model_PaymentCcQuery orderByCardNumber($order = Criteria::ASC) Order by the card_number column
 * @method     Oops_Model_PaymentCcQuery orderByCardBrand($order = Criteria::ASC) Order by the card_brand column
 * @method     Oops_Model_PaymentCcQuery orderByCardExpiration($order = Criteria::ASC) Order by the card_expiration column
 * @method     Oops_Model_PaymentCcQuery orderByCardHolder($order = Criteria::ASC) Order by the card_holder column
 * @method     Oops_Model_PaymentCcQuery orderByDateAdd($order = Criteria::ASC) Order by the date_add column
 *
 * @method     Oops_Model_PaymentCcQuery groupByIdPaymentCc() Group by the id_payment_cc column
 * @method     Oops_Model_PaymentCcQuery groupByIdOrder() Group by the id_order column
 * @method     Oops_Model_PaymentCcQuery groupByIdCurrency() Group by the id_currency column
 * @method     Oops_Model_PaymentCcQuery groupByAmount() Group by the amount column
 * @method     Oops_Model_PaymentCcQuery groupByTransactionId() Group by the transaction_id column
 * @method     Oops_Model_PaymentCcQuery groupByCardNumber() Group by the card_number column
 * @method     Oops_Model_PaymentCcQuery groupByCardBrand() Group by the card_brand column
 * @method     Oops_Model_PaymentCcQuery groupByCardExpiration() Group by the card_expiration column
 * @method     Oops_Model_PaymentCcQuery groupByCardHolder() Group by the card_holder column
 * @method     Oops_Model_PaymentCcQuery groupByDateAdd() Group by the date_add column
 *
 * @method     Oops_Model_PaymentCcQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     Oops_Model_PaymentCcQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     Oops_Model_PaymentCcQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     Oops_Model_PaymentCc findOne(PropelPDO $con = null) Return the first Oops_Model_PaymentCc matching the query
 * @method     Oops_Model_PaymentCc findOneOrCreate(PropelPDO $con = null) Return the first Oops_Model_PaymentCc matching the query, or a new Oops_Model_PaymentCc object populated from the query conditions when no match is found
 *
 * @method     Oops_Model_PaymentCc findOneByIdPaymentCc(int $id_payment_cc) Return the first Oops_Model_PaymentCc filtered by the id_payment_cc column
 * @method     Oops_Model_PaymentCc findOneByIdOrder(int $id_order) Return the first Oops_Model_PaymentCc filtered by the id_order column
 * @method     Oops_Model_PaymentCc findOneByIdCurrency(int $id_currency) Return the first Oops_Model_PaymentCc filtered by the id_currency column
 * @method     Oops_Model_PaymentCc findOneByAmount(string $amount) Return the first Oops_Model_PaymentCc filtered by the amount column
 * @method     Oops_Model_PaymentCc findOneByTransactionId(string $transaction_id) Return the first Oops_Model_PaymentCc filtered by the transaction_id column
 * @method     Oops_Model_PaymentCc findOneByCardNumber(string $card_number) Return the first Oops_Model_PaymentCc filtered by the card_number column
 * @method     Oops_Model_PaymentCc findOneByCardBrand(string $card_brand) Return the first Oops_Model_PaymentCc filtered by the card_brand column
 * @method     Oops_Model_PaymentCc findOneByCardExpiration(string $card_expiration) Return the first Oops_Model_PaymentCc filtered by the card_expiration column
 * @method     Oops_Model_PaymentCc findOneByCardHolder(string $card_holder) Return the first Oops_Model_PaymentCc filtered by the card_holder column
 * @method     Oops_Model_PaymentCc findOneByDateAdd(string $date_add) Return the first Oops_Model_PaymentCc filtered by the date_add column
 *
 * @method     array findByIdPaymentCc(int $id_payment_cc) Return Oops_Model_PaymentCc objects filtered by the id_payment_cc column
 * @method     array findByIdOrder(int $id_order) Return Oops_Model_PaymentCc objects filtered by the id_order column
 * @method     array findByIdCurrency(int $id_currency) Return Oops_Model_PaymentCc objects filtered by the id_currency column
 * @method     array findByAmount(string $amount) Return Oops_Model_PaymentCc objects filtered by the amount column
 * @method     array findByTransactionId(string $transaction_id) Return Oops_Model_PaymentCc objects filtered by the transaction_id column
 * @method     array findByCardNumber(string $card_number) Return Oops_Model_PaymentCc objects filtered by the card_number column
 * @method     array findByCardBrand(string $card_brand) Return Oops_Model_PaymentCc objects filtered by the card_brand column
 * @method     array findByCardExpiration(string $card_expiration) Return Oops_Model_PaymentCc objects filtered by the card_expiration column
 * @method     array findByCardHolder(string $card_holder) Return Oops_Model_PaymentCc objects filtered by the card_holder column
 * @method     array findByDateAdd(string $date_add) Return Oops_Model_PaymentCc objects filtered by the date_add column
 *
 * @package    propel.generator.prestashop.om
 */
abstract class Oops_Model_Base_PaymentCcQuery extends ModelCriteria
{
	
	/**
	 * Initializes internal state of Oops_Model_Base_PaymentCcQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'prestashop', $modelName = 'Oops_Model_PaymentCc', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new Oops_Model_PaymentCcQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    Oops_Model_PaymentCcQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof Oops_Model_PaymentCcQuery) {
			return $criteria;
		}
		$query = new Oops_Model_PaymentCcQuery();
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
	 * @return    Oops_Model_PaymentCc|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ($key === null) {
			return null;
		}
		if ((null !== ($obj = Oops_Model_PaymentCcPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
			// the object is alredy in the instance pool
			return $obj;
		}
		if ($con === null) {
			$con = Propel::getConnection(Oops_Model_PaymentCcPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
	 * @return    Oops_Model_PaymentCc A model object, or null if the key is not found
	 */
	protected function findPkSimple($key, $con)
	{
		$sql = 'SELECT `ID_PAYMENT_CC`, `ID_ORDER`, `ID_CURRENCY`, `AMOUNT`, `TRANSACTION_ID`, `CARD_NUMBER`, `CARD_BRAND`, `CARD_EXPIRATION`, `CARD_HOLDER`, `DATE_ADD` FROM `' . _DB_PREFIX_ . 'djland_payment_cc` WHERE `ID_PAYMENT_CC` = :p0';
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
			$obj = new Oops_Model_PaymentCc();
			$obj->hydrate($row);
			Oops_Model_PaymentCcPeer::addInstanceToPool($obj, (string) $row[0]);
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
	 * @return    Oops_Model_PaymentCc|array|mixed the result, formatted by the current formatter
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
	 * @return    Oops_Model_PaymentCcQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(Oops_Model_PaymentCcPeer::ID_PAYMENT_CC, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    Oops_Model_PaymentCcQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(Oops_Model_PaymentCcPeer::ID_PAYMENT_CC, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id_payment_cc column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByIdPaymentCc(1234); // WHERE id_payment_cc = 1234
	 * $query->filterByIdPaymentCc(array(12, 34)); // WHERE id_payment_cc IN (12, 34)
	 * $query->filterByIdPaymentCc(array('min' => 12)); // WHERE id_payment_cc > 12
	 * </code>
	 *
	 * @param     mixed $idPaymentCc The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_PaymentCcQuery The current query, for fluid interface
	 */
	public function filterByIdPaymentCc($idPaymentCc = null, $comparison = null)
	{
		if (is_array($idPaymentCc) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(Oops_Model_PaymentCcPeer::ID_PAYMENT_CC, $idPaymentCc, $comparison);
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
	 * @return    Oops_Model_PaymentCcQuery The current query, for fluid interface
	 */
	public function filterByIdOrder($idOrder = null, $comparison = null)
	{
		if (is_array($idOrder)) {
			$useMinMax = false;
			if (isset($idOrder['min'])) {
				$this->addUsingAlias(Oops_Model_PaymentCcPeer::ID_ORDER, $idOrder['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($idOrder['max'])) {
				$this->addUsingAlias(Oops_Model_PaymentCcPeer::ID_ORDER, $idOrder['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_PaymentCcPeer::ID_ORDER, $idOrder, $comparison);
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
	 * @return    Oops_Model_PaymentCcQuery The current query, for fluid interface
	 */
	public function filterByIdCurrency($idCurrency = null, $comparison = null)
	{
		if (is_array($idCurrency)) {
			$useMinMax = false;
			if (isset($idCurrency['min'])) {
				$this->addUsingAlias(Oops_Model_PaymentCcPeer::ID_CURRENCY, $idCurrency['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($idCurrency['max'])) {
				$this->addUsingAlias(Oops_Model_PaymentCcPeer::ID_CURRENCY, $idCurrency['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_PaymentCcPeer::ID_CURRENCY, $idCurrency, $comparison);
	}

	/**
	 * Filter the query on the amount column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByAmount(1234); // WHERE amount = 1234
	 * $query->filterByAmount(array(12, 34)); // WHERE amount IN (12, 34)
	 * $query->filterByAmount(array('min' => 12)); // WHERE amount > 12
	 * </code>
	 *
	 * @param     mixed $amount The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_PaymentCcQuery The current query, for fluid interface
	 */
	public function filterByAmount($amount = null, $comparison = null)
	{
		if (is_array($amount)) {
			$useMinMax = false;
			if (isset($amount['min'])) {
				$this->addUsingAlias(Oops_Model_PaymentCcPeer::AMOUNT, $amount['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($amount['max'])) {
				$this->addUsingAlias(Oops_Model_PaymentCcPeer::AMOUNT, $amount['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_PaymentCcPeer::AMOUNT, $amount, $comparison);
	}

	/**
	 * Filter the query on the transaction_id column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByTransactionId('fooValue');   // WHERE transaction_id = 'fooValue'
	 * $query->filterByTransactionId('%fooValue%'); // WHERE transaction_id LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $transactionId The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_PaymentCcQuery The current query, for fluid interface
	 */
	public function filterByTransactionId($transactionId = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($transactionId)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $transactionId)) {
				$transactionId = str_replace('*', '%', $transactionId);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(Oops_Model_PaymentCcPeer::TRANSACTION_ID, $transactionId, $comparison);
	}

	/**
	 * Filter the query on the card_number column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByCardNumber('fooValue');   // WHERE card_number = 'fooValue'
	 * $query->filterByCardNumber('%fooValue%'); // WHERE card_number LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $cardNumber The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_PaymentCcQuery The current query, for fluid interface
	 */
	public function filterByCardNumber($cardNumber = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($cardNumber)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $cardNumber)) {
				$cardNumber = str_replace('*', '%', $cardNumber);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(Oops_Model_PaymentCcPeer::CARD_NUMBER, $cardNumber, $comparison);
	}

	/**
	 * Filter the query on the card_brand column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByCardBrand('fooValue');   // WHERE card_brand = 'fooValue'
	 * $query->filterByCardBrand('%fooValue%'); // WHERE card_brand LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $cardBrand The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_PaymentCcQuery The current query, for fluid interface
	 */
	public function filterByCardBrand($cardBrand = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($cardBrand)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $cardBrand)) {
				$cardBrand = str_replace('*', '%', $cardBrand);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(Oops_Model_PaymentCcPeer::CARD_BRAND, $cardBrand, $comparison);
	}

	/**
	 * Filter the query on the card_expiration column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByCardExpiration('fooValue');   // WHERE card_expiration = 'fooValue'
	 * $query->filterByCardExpiration('%fooValue%'); // WHERE card_expiration LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $cardExpiration The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_PaymentCcQuery The current query, for fluid interface
	 */
	public function filterByCardExpiration($cardExpiration = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($cardExpiration)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $cardExpiration)) {
				$cardExpiration = str_replace('*', '%', $cardExpiration);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(Oops_Model_PaymentCcPeer::CARD_EXPIRATION, $cardExpiration, $comparison);
	}

	/**
	 * Filter the query on the card_holder column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByCardHolder('fooValue');   // WHERE card_holder = 'fooValue'
	 * $query->filterByCardHolder('%fooValue%'); // WHERE card_holder LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $cardHolder The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_PaymentCcQuery The current query, for fluid interface
	 */
	public function filterByCardHolder($cardHolder = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($cardHolder)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $cardHolder)) {
				$cardHolder = str_replace('*', '%', $cardHolder);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(Oops_Model_PaymentCcPeer::CARD_HOLDER, $cardHolder, $comparison);
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
	 * @return    Oops_Model_PaymentCcQuery The current query, for fluid interface
	 */
	public function filterByDateAdd($dateAdd = null, $comparison = null)
	{
		if (is_array($dateAdd)) {
			$useMinMax = false;
			if (isset($dateAdd['min'])) {
				$this->addUsingAlias(Oops_Model_PaymentCcPeer::DATE_ADD, $dateAdd['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($dateAdd['max'])) {
				$this->addUsingAlias(Oops_Model_PaymentCcPeer::DATE_ADD, $dateAdd['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_PaymentCcPeer::DATE_ADD, $dateAdd, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     Oops_Model_PaymentCc $paymentCc Object to remove from the list of results
	 *
	 * @return    Oops_Model_PaymentCcQuery The current query, for fluid interface
	 */
	public function prune($paymentCc = null)
	{
		if ($paymentCc) {
			$this->addUsingAlias(Oops_Model_PaymentCcPeer::ID_PAYMENT_CC, $paymentCc->getIdPaymentCc(), Criteria::NOT_EQUAL);
		}

		return $this;
	}

} // Oops_Model_Base_PaymentCcQuery