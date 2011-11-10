<?php


/**
 * Base class that represents a query for the 'orders' table.
 *
 * 
 *
 * @method     Oops_Model_OrdersQuery orderByIdOrder($order = Criteria::ASC) Order by the id_order column
 * @method     Oops_Model_OrdersQuery orderByIdCarrier($order = Criteria::ASC) Order by the id_carrier column
 * @method     Oops_Model_OrdersQuery orderByIdLang($order = Criteria::ASC) Order by the id_lang column
 * @method     Oops_Model_OrdersQuery orderByIdCustomer($order = Criteria::ASC) Order by the id_customer column
 * @method     Oops_Model_OrdersQuery orderByIdCart($order = Criteria::ASC) Order by the id_cart column
 * @method     Oops_Model_OrdersQuery orderByIdCurrency($order = Criteria::ASC) Order by the id_currency column
 * @method     Oops_Model_OrdersQuery orderByIdAddressDelivery($order = Criteria::ASC) Order by the id_address_delivery column
 * @method     Oops_Model_OrdersQuery orderByIdAddressInvoice($order = Criteria::ASC) Order by the id_address_invoice column
 * @method     Oops_Model_OrdersQuery orderBySecureKey($order = Criteria::ASC) Order by the secure_key column
 * @method     Oops_Model_OrdersQuery orderByPayment($order = Criteria::ASC) Order by the payment column
 * @method     Oops_Model_OrdersQuery orderByConversionRate($order = Criteria::ASC) Order by the conversion_rate column
 * @method     Oops_Model_OrdersQuery orderByModule($order = Criteria::ASC) Order by the module column
 * @method     Oops_Model_OrdersQuery orderByRecyclable($order = Criteria::ASC) Order by the recyclable column
 * @method     Oops_Model_OrdersQuery orderByGift($order = Criteria::ASC) Order by the gift column
 * @method     Oops_Model_OrdersQuery orderByGiftMessage($order = Criteria::ASC) Order by the gift_message column
 * @method     Oops_Model_OrdersQuery orderByShippingNumber($order = Criteria::ASC) Order by the shipping_number column
 * @method     Oops_Model_OrdersQuery orderByTotalDiscounts($order = Criteria::ASC) Order by the total_discounts column
 * @method     Oops_Model_OrdersQuery orderByTotalPaid($order = Criteria::ASC) Order by the total_paid column
 * @method     Oops_Model_OrdersQuery orderByTotalPaidReal($order = Criteria::ASC) Order by the total_paid_real column
 * @method     Oops_Model_OrdersQuery orderByTotalProducts($order = Criteria::ASC) Order by the total_products column
 * @method     Oops_Model_OrdersQuery orderByTotalProductsWt($order = Criteria::ASC) Order by the total_products_wt column
 * @method     Oops_Model_OrdersQuery orderByTotalShipping($order = Criteria::ASC) Order by the total_shipping column
 * @method     Oops_Model_OrdersQuery orderByCarrierTaxRate($order = Criteria::ASC) Order by the carrier_tax_rate column
 * @method     Oops_Model_OrdersQuery orderByTotalWrapping($order = Criteria::ASC) Order by the total_wrapping column
 * @method     Oops_Model_OrdersQuery orderByInvoiceNumber($order = Criteria::ASC) Order by the invoice_number column
 * @method     Oops_Model_OrdersQuery orderByDeliveryNumber($order = Criteria::ASC) Order by the delivery_number column
 * @method     Oops_Model_OrdersQuery orderByInvoiceDate($order = Criteria::ASC) Order by the invoice_date column
 * @method     Oops_Model_OrdersQuery orderByDeliveryDate($order = Criteria::ASC) Order by the delivery_date column
 * @method     Oops_Model_OrdersQuery orderByValid($order = Criteria::ASC) Order by the valid column
 * @method     Oops_Model_OrdersQuery orderByDateAdd($order = Criteria::ASC) Order by the date_add column
 * @method     Oops_Model_OrdersQuery orderByDateUpd($order = Criteria::ASC) Order by the date_upd column
 *
 * @method     Oops_Model_OrdersQuery groupByIdOrder() Group by the id_order column
 * @method     Oops_Model_OrdersQuery groupByIdCarrier() Group by the id_carrier column
 * @method     Oops_Model_OrdersQuery groupByIdLang() Group by the id_lang column
 * @method     Oops_Model_OrdersQuery groupByIdCustomer() Group by the id_customer column
 * @method     Oops_Model_OrdersQuery groupByIdCart() Group by the id_cart column
 * @method     Oops_Model_OrdersQuery groupByIdCurrency() Group by the id_currency column
 * @method     Oops_Model_OrdersQuery groupByIdAddressDelivery() Group by the id_address_delivery column
 * @method     Oops_Model_OrdersQuery groupByIdAddressInvoice() Group by the id_address_invoice column
 * @method     Oops_Model_OrdersQuery groupBySecureKey() Group by the secure_key column
 * @method     Oops_Model_OrdersQuery groupByPayment() Group by the payment column
 * @method     Oops_Model_OrdersQuery groupByConversionRate() Group by the conversion_rate column
 * @method     Oops_Model_OrdersQuery groupByModule() Group by the module column
 * @method     Oops_Model_OrdersQuery groupByRecyclable() Group by the recyclable column
 * @method     Oops_Model_OrdersQuery groupByGift() Group by the gift column
 * @method     Oops_Model_OrdersQuery groupByGiftMessage() Group by the gift_message column
 * @method     Oops_Model_OrdersQuery groupByShippingNumber() Group by the shipping_number column
 * @method     Oops_Model_OrdersQuery groupByTotalDiscounts() Group by the total_discounts column
 * @method     Oops_Model_OrdersQuery groupByTotalPaid() Group by the total_paid column
 * @method     Oops_Model_OrdersQuery groupByTotalPaidReal() Group by the total_paid_real column
 * @method     Oops_Model_OrdersQuery groupByTotalProducts() Group by the total_products column
 * @method     Oops_Model_OrdersQuery groupByTotalProductsWt() Group by the total_products_wt column
 * @method     Oops_Model_OrdersQuery groupByTotalShipping() Group by the total_shipping column
 * @method     Oops_Model_OrdersQuery groupByCarrierTaxRate() Group by the carrier_tax_rate column
 * @method     Oops_Model_OrdersQuery groupByTotalWrapping() Group by the total_wrapping column
 * @method     Oops_Model_OrdersQuery groupByInvoiceNumber() Group by the invoice_number column
 * @method     Oops_Model_OrdersQuery groupByDeliveryNumber() Group by the delivery_number column
 * @method     Oops_Model_OrdersQuery groupByInvoiceDate() Group by the invoice_date column
 * @method     Oops_Model_OrdersQuery groupByDeliveryDate() Group by the delivery_date column
 * @method     Oops_Model_OrdersQuery groupByValid() Group by the valid column
 * @method     Oops_Model_OrdersQuery groupByDateAdd() Group by the date_add column
 * @method     Oops_Model_OrdersQuery groupByDateUpd() Group by the date_upd column
 *
 * @method     Oops_Model_OrdersQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     Oops_Model_OrdersQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     Oops_Model_OrdersQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     Oops_Model_Orders findOne(PropelPDO $con = null) Return the first Oops_Model_Orders matching the query
 * @method     Oops_Model_Orders findOneOrCreate(PropelPDO $con = null) Return the first Oops_Model_Orders matching the query, or a new Oops_Model_Orders object populated from the query conditions when no match is found
 *
 * @method     Oops_Model_Orders findOneByIdOrder(int $id_order) Return the first Oops_Model_Orders filtered by the id_order column
 * @method     Oops_Model_Orders findOneByIdCarrier(int $id_carrier) Return the first Oops_Model_Orders filtered by the id_carrier column
 * @method     Oops_Model_Orders findOneByIdLang(int $id_lang) Return the first Oops_Model_Orders filtered by the id_lang column
 * @method     Oops_Model_Orders findOneByIdCustomer(int $id_customer) Return the first Oops_Model_Orders filtered by the id_customer column
 * @method     Oops_Model_Orders findOneByIdCart(int $id_cart) Return the first Oops_Model_Orders filtered by the id_cart column
 * @method     Oops_Model_Orders findOneByIdCurrency(int $id_currency) Return the first Oops_Model_Orders filtered by the id_currency column
 * @method     Oops_Model_Orders findOneByIdAddressDelivery(int $id_address_delivery) Return the first Oops_Model_Orders filtered by the id_address_delivery column
 * @method     Oops_Model_Orders findOneByIdAddressInvoice(int $id_address_invoice) Return the first Oops_Model_Orders filtered by the id_address_invoice column
 * @method     Oops_Model_Orders findOneBySecureKey(string $secure_key) Return the first Oops_Model_Orders filtered by the secure_key column
 * @method     Oops_Model_Orders findOneByPayment(string $payment) Return the first Oops_Model_Orders filtered by the payment column
 * @method     Oops_Model_Orders findOneByConversionRate(string $conversion_rate) Return the first Oops_Model_Orders filtered by the conversion_rate column
 * @method     Oops_Model_Orders findOneByModule(string $module) Return the first Oops_Model_Orders filtered by the module column
 * @method     Oops_Model_Orders findOneByRecyclable(boolean $recyclable) Return the first Oops_Model_Orders filtered by the recyclable column
 * @method     Oops_Model_Orders findOneByGift(boolean $gift) Return the first Oops_Model_Orders filtered by the gift column
 * @method     Oops_Model_Orders findOneByGiftMessage(string $gift_message) Return the first Oops_Model_Orders filtered by the gift_message column
 * @method     Oops_Model_Orders findOneByShippingNumber(string $shipping_number) Return the first Oops_Model_Orders filtered by the shipping_number column
 * @method     Oops_Model_Orders findOneByTotalDiscounts(string $total_discounts) Return the first Oops_Model_Orders filtered by the total_discounts column
 * @method     Oops_Model_Orders findOneByTotalPaid(string $total_paid) Return the first Oops_Model_Orders filtered by the total_paid column
 * @method     Oops_Model_Orders findOneByTotalPaidReal(string $total_paid_real) Return the first Oops_Model_Orders filtered by the total_paid_real column
 * @method     Oops_Model_Orders findOneByTotalProducts(string $total_products) Return the first Oops_Model_Orders filtered by the total_products column
 * @method     Oops_Model_Orders findOneByTotalProductsWt(string $total_products_wt) Return the first Oops_Model_Orders filtered by the total_products_wt column
 * @method     Oops_Model_Orders findOneByTotalShipping(string $total_shipping) Return the first Oops_Model_Orders filtered by the total_shipping column
 * @method     Oops_Model_Orders findOneByCarrierTaxRate(string $carrier_tax_rate) Return the first Oops_Model_Orders filtered by the carrier_tax_rate column
 * @method     Oops_Model_Orders findOneByTotalWrapping(string $total_wrapping) Return the first Oops_Model_Orders filtered by the total_wrapping column
 * @method     Oops_Model_Orders findOneByInvoiceNumber(int $invoice_number) Return the first Oops_Model_Orders filtered by the invoice_number column
 * @method     Oops_Model_Orders findOneByDeliveryNumber(int $delivery_number) Return the first Oops_Model_Orders filtered by the delivery_number column
 * @method     Oops_Model_Orders findOneByInvoiceDate(string $invoice_date) Return the first Oops_Model_Orders filtered by the invoice_date column
 * @method     Oops_Model_Orders findOneByDeliveryDate(string $delivery_date) Return the first Oops_Model_Orders filtered by the delivery_date column
 * @method     Oops_Model_Orders findOneByValid(int $valid) Return the first Oops_Model_Orders filtered by the valid column
 * @method     Oops_Model_Orders findOneByDateAdd(string $date_add) Return the first Oops_Model_Orders filtered by the date_add column
 * @method     Oops_Model_Orders findOneByDateUpd(string $date_upd) Return the first Oops_Model_Orders filtered by the date_upd column
 *
 * @method     array findByIdOrder(int $id_order) Return Oops_Model_Orders objects filtered by the id_order column
 * @method     array findByIdCarrier(int $id_carrier) Return Oops_Model_Orders objects filtered by the id_carrier column
 * @method     array findByIdLang(int $id_lang) Return Oops_Model_Orders objects filtered by the id_lang column
 * @method     array findByIdCustomer(int $id_customer) Return Oops_Model_Orders objects filtered by the id_customer column
 * @method     array findByIdCart(int $id_cart) Return Oops_Model_Orders objects filtered by the id_cart column
 * @method     array findByIdCurrency(int $id_currency) Return Oops_Model_Orders objects filtered by the id_currency column
 * @method     array findByIdAddressDelivery(int $id_address_delivery) Return Oops_Model_Orders objects filtered by the id_address_delivery column
 * @method     array findByIdAddressInvoice(int $id_address_invoice) Return Oops_Model_Orders objects filtered by the id_address_invoice column
 * @method     array findBySecureKey(string $secure_key) Return Oops_Model_Orders objects filtered by the secure_key column
 * @method     array findByPayment(string $payment) Return Oops_Model_Orders objects filtered by the payment column
 * @method     array findByConversionRate(string $conversion_rate) Return Oops_Model_Orders objects filtered by the conversion_rate column
 * @method     array findByModule(string $module) Return Oops_Model_Orders objects filtered by the module column
 * @method     array findByRecyclable(boolean $recyclable) Return Oops_Model_Orders objects filtered by the recyclable column
 * @method     array findByGift(boolean $gift) Return Oops_Model_Orders objects filtered by the gift column
 * @method     array findByGiftMessage(string $gift_message) Return Oops_Model_Orders objects filtered by the gift_message column
 * @method     array findByShippingNumber(string $shipping_number) Return Oops_Model_Orders objects filtered by the shipping_number column
 * @method     array findByTotalDiscounts(string $total_discounts) Return Oops_Model_Orders objects filtered by the total_discounts column
 * @method     array findByTotalPaid(string $total_paid) Return Oops_Model_Orders objects filtered by the total_paid column
 * @method     array findByTotalPaidReal(string $total_paid_real) Return Oops_Model_Orders objects filtered by the total_paid_real column
 * @method     array findByTotalProducts(string $total_products) Return Oops_Model_Orders objects filtered by the total_products column
 * @method     array findByTotalProductsWt(string $total_products_wt) Return Oops_Model_Orders objects filtered by the total_products_wt column
 * @method     array findByTotalShipping(string $total_shipping) Return Oops_Model_Orders objects filtered by the total_shipping column
 * @method     array findByCarrierTaxRate(string $carrier_tax_rate) Return Oops_Model_Orders objects filtered by the carrier_tax_rate column
 * @method     array findByTotalWrapping(string $total_wrapping) Return Oops_Model_Orders objects filtered by the total_wrapping column
 * @method     array findByInvoiceNumber(int $invoice_number) Return Oops_Model_Orders objects filtered by the invoice_number column
 * @method     array findByDeliveryNumber(int $delivery_number) Return Oops_Model_Orders objects filtered by the delivery_number column
 * @method     array findByInvoiceDate(string $invoice_date) Return Oops_Model_Orders objects filtered by the invoice_date column
 * @method     array findByDeliveryDate(string $delivery_date) Return Oops_Model_Orders objects filtered by the delivery_date column
 * @method     array findByValid(int $valid) Return Oops_Model_Orders objects filtered by the valid column
 * @method     array findByDateAdd(string $date_add) Return Oops_Model_Orders objects filtered by the date_add column
 * @method     array findByDateUpd(string $date_upd) Return Oops_Model_Orders objects filtered by the date_upd column
 *
 * @package    propel.generator.prestashop.om
 */
abstract class Oops_Model_Base_OrdersQuery extends ModelCriteria
{
	
	/**
	 * Initializes internal state of Oops_Model_Base_OrdersQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'prestashop', $modelName = 'Oops_Model_Orders', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new Oops_Model_OrdersQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    Oops_Model_OrdersQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof Oops_Model_OrdersQuery) {
			return $criteria;
		}
		$query = new Oops_Model_OrdersQuery();
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
	 * @return    Oops_Model_Orders|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ($key === null) {
			return null;
		}
		if ((null !== ($obj = Oops_Model_OrdersPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
			// the object is alredy in the instance pool
			return $obj;
		}
		if ($con === null) {
			$con = Propel::getConnection(Oops_Model_OrdersPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
	 * @return    Oops_Model_Orders A model object, or null if the key is not found
	 */
	protected function findPkSimple($key, $con)
	{
		$sql = 'SELECT `ID_ORDER`, `ID_CARRIER`, `ID_LANG`, `ID_CUSTOMER`, `ID_CART`, `ID_CURRENCY`, `ID_ADDRESS_DELIVERY`, `ID_ADDRESS_INVOICE`, `SECURE_KEY`, `PAYMENT`, `CONVERSION_RATE`, `MODULE`, `RECYCLABLE`, `GIFT`, `GIFT_MESSAGE`, `SHIPPING_NUMBER`, `TOTAL_DISCOUNTS`, `TOTAL_PAID`, `TOTAL_PAID_REAL`, `TOTAL_PRODUCTS`, `TOTAL_PRODUCTS_WT`, `TOTAL_SHIPPING`, `CARRIER_TAX_RATE`, `TOTAL_WRAPPING`, `INVOICE_NUMBER`, `DELIVERY_NUMBER`, `INVOICE_DATE`, `DELIVERY_DATE`, `VALID`, `DATE_ADD`, `DATE_UPD` FROM `' . _DB_PREFIX_ . 'orders` WHERE `ID_ORDER` = :p0';
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
			$obj = new Oops_Model_Orders();
			$obj->hydrate($row);
			Oops_Model_OrdersPeer::addInstanceToPool($obj, (string) $row[0]);
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
	 * @return    Oops_Model_Orders|array|mixed the result, formatted by the current formatter
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
	 * @return    Oops_Model_OrdersQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(Oops_Model_OrdersPeer::ID_ORDER, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    Oops_Model_OrdersQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(Oops_Model_OrdersPeer::ID_ORDER, $keys, Criteria::IN);
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
	 * @return    Oops_Model_OrdersQuery The current query, for fluid interface
	 */
	public function filterByIdOrder($idOrder = null, $comparison = null)
	{
		if (is_array($idOrder) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(Oops_Model_OrdersPeer::ID_ORDER, $idOrder, $comparison);
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
	 * @return    Oops_Model_OrdersQuery The current query, for fluid interface
	 */
	public function filterByIdCarrier($idCarrier = null, $comparison = null)
	{
		if (is_array($idCarrier)) {
			$useMinMax = false;
			if (isset($idCarrier['min'])) {
				$this->addUsingAlias(Oops_Model_OrdersPeer::ID_CARRIER, $idCarrier['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($idCarrier['max'])) {
				$this->addUsingAlias(Oops_Model_OrdersPeer::ID_CARRIER, $idCarrier['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_OrdersPeer::ID_CARRIER, $idCarrier, $comparison);
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
	 * @return    Oops_Model_OrdersQuery The current query, for fluid interface
	 */
	public function filterByIdLang($idLang = null, $comparison = null)
	{
		if (is_array($idLang)) {
			$useMinMax = false;
			if (isset($idLang['min'])) {
				$this->addUsingAlias(Oops_Model_OrdersPeer::ID_LANG, $idLang['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($idLang['max'])) {
				$this->addUsingAlias(Oops_Model_OrdersPeer::ID_LANG, $idLang['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_OrdersPeer::ID_LANG, $idLang, $comparison);
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
	 * @return    Oops_Model_OrdersQuery The current query, for fluid interface
	 */
	public function filterByIdCustomer($idCustomer = null, $comparison = null)
	{
		if (is_array($idCustomer)) {
			$useMinMax = false;
			if (isset($idCustomer['min'])) {
				$this->addUsingAlias(Oops_Model_OrdersPeer::ID_CUSTOMER, $idCustomer['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($idCustomer['max'])) {
				$this->addUsingAlias(Oops_Model_OrdersPeer::ID_CUSTOMER, $idCustomer['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_OrdersPeer::ID_CUSTOMER, $idCustomer, $comparison);
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
	 * @return    Oops_Model_OrdersQuery The current query, for fluid interface
	 */
	public function filterByIdCart($idCart = null, $comparison = null)
	{
		if (is_array($idCart)) {
			$useMinMax = false;
			if (isset($idCart['min'])) {
				$this->addUsingAlias(Oops_Model_OrdersPeer::ID_CART, $idCart['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($idCart['max'])) {
				$this->addUsingAlias(Oops_Model_OrdersPeer::ID_CART, $idCart['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_OrdersPeer::ID_CART, $idCart, $comparison);
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
	 * @return    Oops_Model_OrdersQuery The current query, for fluid interface
	 */
	public function filterByIdCurrency($idCurrency = null, $comparison = null)
	{
		if (is_array($idCurrency)) {
			$useMinMax = false;
			if (isset($idCurrency['min'])) {
				$this->addUsingAlias(Oops_Model_OrdersPeer::ID_CURRENCY, $idCurrency['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($idCurrency['max'])) {
				$this->addUsingAlias(Oops_Model_OrdersPeer::ID_CURRENCY, $idCurrency['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_OrdersPeer::ID_CURRENCY, $idCurrency, $comparison);
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
	 * @return    Oops_Model_OrdersQuery The current query, for fluid interface
	 */
	public function filterByIdAddressDelivery($idAddressDelivery = null, $comparison = null)
	{
		if (is_array($idAddressDelivery)) {
			$useMinMax = false;
			if (isset($idAddressDelivery['min'])) {
				$this->addUsingAlias(Oops_Model_OrdersPeer::ID_ADDRESS_DELIVERY, $idAddressDelivery['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($idAddressDelivery['max'])) {
				$this->addUsingAlias(Oops_Model_OrdersPeer::ID_ADDRESS_DELIVERY, $idAddressDelivery['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_OrdersPeer::ID_ADDRESS_DELIVERY, $idAddressDelivery, $comparison);
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
	 * @return    Oops_Model_OrdersQuery The current query, for fluid interface
	 */
	public function filterByIdAddressInvoice($idAddressInvoice = null, $comparison = null)
	{
		if (is_array($idAddressInvoice)) {
			$useMinMax = false;
			if (isset($idAddressInvoice['min'])) {
				$this->addUsingAlias(Oops_Model_OrdersPeer::ID_ADDRESS_INVOICE, $idAddressInvoice['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($idAddressInvoice['max'])) {
				$this->addUsingAlias(Oops_Model_OrdersPeer::ID_ADDRESS_INVOICE, $idAddressInvoice['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_OrdersPeer::ID_ADDRESS_INVOICE, $idAddressInvoice, $comparison);
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
	 * @return    Oops_Model_OrdersQuery The current query, for fluid interface
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
		return $this->addUsingAlias(Oops_Model_OrdersPeer::SECURE_KEY, $secureKey, $comparison);
	}

	/**
	 * Filter the query on the payment column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByPayment('fooValue');   // WHERE payment = 'fooValue'
	 * $query->filterByPayment('%fooValue%'); // WHERE payment LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $payment The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_OrdersQuery The current query, for fluid interface
	 */
	public function filterByPayment($payment = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($payment)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $payment)) {
				$payment = str_replace('*', '%', $payment);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(Oops_Model_OrdersPeer::PAYMENT, $payment, $comparison);
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
	 * @return    Oops_Model_OrdersQuery The current query, for fluid interface
	 */
	public function filterByConversionRate($conversionRate = null, $comparison = null)
	{
		if (is_array($conversionRate)) {
			$useMinMax = false;
			if (isset($conversionRate['min'])) {
				$this->addUsingAlias(Oops_Model_OrdersPeer::CONVERSION_RATE, $conversionRate['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($conversionRate['max'])) {
				$this->addUsingAlias(Oops_Model_OrdersPeer::CONVERSION_RATE, $conversionRate['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_OrdersPeer::CONVERSION_RATE, $conversionRate, $comparison);
	}

	/**
	 * Filter the query on the module column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByModule('fooValue');   // WHERE module = 'fooValue'
	 * $query->filterByModule('%fooValue%'); // WHERE module LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $module The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_OrdersQuery The current query, for fluid interface
	 */
	public function filterByModule($module = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($module)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $module)) {
				$module = str_replace('*', '%', $module);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(Oops_Model_OrdersPeer::MODULE, $module, $comparison);
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
	 * @return    Oops_Model_OrdersQuery The current query, for fluid interface
	 */
	public function filterByRecyclable($recyclable = null, $comparison = null)
	{
		if (is_string($recyclable)) {
			$recyclable = in_array(strtolower($recyclable), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(Oops_Model_OrdersPeer::RECYCLABLE, $recyclable, $comparison);
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
	 * @return    Oops_Model_OrdersQuery The current query, for fluid interface
	 */
	public function filterByGift($gift = null, $comparison = null)
	{
		if (is_string($gift)) {
			$gift = in_array(strtolower($gift), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(Oops_Model_OrdersPeer::GIFT, $gift, $comparison);
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
	 * @return    Oops_Model_OrdersQuery The current query, for fluid interface
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
		return $this->addUsingAlias(Oops_Model_OrdersPeer::GIFT_MESSAGE, $giftMessage, $comparison);
	}

	/**
	 * Filter the query on the shipping_number column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByShippingNumber('fooValue');   // WHERE shipping_number = 'fooValue'
	 * $query->filterByShippingNumber('%fooValue%'); // WHERE shipping_number LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $shippingNumber The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_OrdersQuery The current query, for fluid interface
	 */
	public function filterByShippingNumber($shippingNumber = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($shippingNumber)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $shippingNumber)) {
				$shippingNumber = str_replace('*', '%', $shippingNumber);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(Oops_Model_OrdersPeer::SHIPPING_NUMBER, $shippingNumber, $comparison);
	}

	/**
	 * Filter the query on the total_discounts column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByTotalDiscounts(1234); // WHERE total_discounts = 1234
	 * $query->filterByTotalDiscounts(array(12, 34)); // WHERE total_discounts IN (12, 34)
	 * $query->filterByTotalDiscounts(array('min' => 12)); // WHERE total_discounts > 12
	 * </code>
	 *
	 * @param     mixed $totalDiscounts The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_OrdersQuery The current query, for fluid interface
	 */
	public function filterByTotalDiscounts($totalDiscounts = null, $comparison = null)
	{
		if (is_array($totalDiscounts)) {
			$useMinMax = false;
			if (isset($totalDiscounts['min'])) {
				$this->addUsingAlias(Oops_Model_OrdersPeer::TOTAL_DISCOUNTS, $totalDiscounts['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($totalDiscounts['max'])) {
				$this->addUsingAlias(Oops_Model_OrdersPeer::TOTAL_DISCOUNTS, $totalDiscounts['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_OrdersPeer::TOTAL_DISCOUNTS, $totalDiscounts, $comparison);
	}

	/**
	 * Filter the query on the total_paid column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByTotalPaid(1234); // WHERE total_paid = 1234
	 * $query->filterByTotalPaid(array(12, 34)); // WHERE total_paid IN (12, 34)
	 * $query->filterByTotalPaid(array('min' => 12)); // WHERE total_paid > 12
	 * </code>
	 *
	 * @param     mixed $totalPaid The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_OrdersQuery The current query, for fluid interface
	 */
	public function filterByTotalPaid($totalPaid = null, $comparison = null)
	{
		if (is_array($totalPaid)) {
			$useMinMax = false;
			if (isset($totalPaid['min'])) {
				$this->addUsingAlias(Oops_Model_OrdersPeer::TOTAL_PAID, $totalPaid['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($totalPaid['max'])) {
				$this->addUsingAlias(Oops_Model_OrdersPeer::TOTAL_PAID, $totalPaid['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_OrdersPeer::TOTAL_PAID, $totalPaid, $comparison);
	}

	/**
	 * Filter the query on the total_paid_real column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByTotalPaidReal(1234); // WHERE total_paid_real = 1234
	 * $query->filterByTotalPaidReal(array(12, 34)); // WHERE total_paid_real IN (12, 34)
	 * $query->filterByTotalPaidReal(array('min' => 12)); // WHERE total_paid_real > 12
	 * </code>
	 *
	 * @param     mixed $totalPaidReal The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_OrdersQuery The current query, for fluid interface
	 */
	public function filterByTotalPaidReal($totalPaidReal = null, $comparison = null)
	{
		if (is_array($totalPaidReal)) {
			$useMinMax = false;
			if (isset($totalPaidReal['min'])) {
				$this->addUsingAlias(Oops_Model_OrdersPeer::TOTAL_PAID_REAL, $totalPaidReal['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($totalPaidReal['max'])) {
				$this->addUsingAlias(Oops_Model_OrdersPeer::TOTAL_PAID_REAL, $totalPaidReal['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_OrdersPeer::TOTAL_PAID_REAL, $totalPaidReal, $comparison);
	}

	/**
	 * Filter the query on the total_products column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByTotalProducts(1234); // WHERE total_products = 1234
	 * $query->filterByTotalProducts(array(12, 34)); // WHERE total_products IN (12, 34)
	 * $query->filterByTotalProducts(array('min' => 12)); // WHERE total_products > 12
	 * </code>
	 *
	 * @param     mixed $totalProducts The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_OrdersQuery The current query, for fluid interface
	 */
	public function filterByTotalProducts($totalProducts = null, $comparison = null)
	{
		if (is_array($totalProducts)) {
			$useMinMax = false;
			if (isset($totalProducts['min'])) {
				$this->addUsingAlias(Oops_Model_OrdersPeer::TOTAL_PRODUCTS, $totalProducts['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($totalProducts['max'])) {
				$this->addUsingAlias(Oops_Model_OrdersPeer::TOTAL_PRODUCTS, $totalProducts['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_OrdersPeer::TOTAL_PRODUCTS, $totalProducts, $comparison);
	}

	/**
	 * Filter the query on the total_products_wt column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByTotalProductsWt(1234); // WHERE total_products_wt = 1234
	 * $query->filterByTotalProductsWt(array(12, 34)); // WHERE total_products_wt IN (12, 34)
	 * $query->filterByTotalProductsWt(array('min' => 12)); // WHERE total_products_wt > 12
	 * </code>
	 *
	 * @param     mixed $totalProductsWt The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_OrdersQuery The current query, for fluid interface
	 */
	public function filterByTotalProductsWt($totalProductsWt = null, $comparison = null)
	{
		if (is_array($totalProductsWt)) {
			$useMinMax = false;
			if (isset($totalProductsWt['min'])) {
				$this->addUsingAlias(Oops_Model_OrdersPeer::TOTAL_PRODUCTS_WT, $totalProductsWt['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($totalProductsWt['max'])) {
				$this->addUsingAlias(Oops_Model_OrdersPeer::TOTAL_PRODUCTS_WT, $totalProductsWt['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_OrdersPeer::TOTAL_PRODUCTS_WT, $totalProductsWt, $comparison);
	}

	/**
	 * Filter the query on the total_shipping column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByTotalShipping(1234); // WHERE total_shipping = 1234
	 * $query->filterByTotalShipping(array(12, 34)); // WHERE total_shipping IN (12, 34)
	 * $query->filterByTotalShipping(array('min' => 12)); // WHERE total_shipping > 12
	 * </code>
	 *
	 * @param     mixed $totalShipping The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_OrdersQuery The current query, for fluid interface
	 */
	public function filterByTotalShipping($totalShipping = null, $comparison = null)
	{
		if (is_array($totalShipping)) {
			$useMinMax = false;
			if (isset($totalShipping['min'])) {
				$this->addUsingAlias(Oops_Model_OrdersPeer::TOTAL_SHIPPING, $totalShipping['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($totalShipping['max'])) {
				$this->addUsingAlias(Oops_Model_OrdersPeer::TOTAL_SHIPPING, $totalShipping['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_OrdersPeer::TOTAL_SHIPPING, $totalShipping, $comparison);
	}

	/**
	 * Filter the query on the carrier_tax_rate column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByCarrierTaxRate(1234); // WHERE carrier_tax_rate = 1234
	 * $query->filterByCarrierTaxRate(array(12, 34)); // WHERE carrier_tax_rate IN (12, 34)
	 * $query->filterByCarrierTaxRate(array('min' => 12)); // WHERE carrier_tax_rate > 12
	 * </code>
	 *
	 * @param     mixed $carrierTaxRate The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_OrdersQuery The current query, for fluid interface
	 */
	public function filterByCarrierTaxRate($carrierTaxRate = null, $comparison = null)
	{
		if (is_array($carrierTaxRate)) {
			$useMinMax = false;
			if (isset($carrierTaxRate['min'])) {
				$this->addUsingAlias(Oops_Model_OrdersPeer::CARRIER_TAX_RATE, $carrierTaxRate['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($carrierTaxRate['max'])) {
				$this->addUsingAlias(Oops_Model_OrdersPeer::CARRIER_TAX_RATE, $carrierTaxRate['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_OrdersPeer::CARRIER_TAX_RATE, $carrierTaxRate, $comparison);
	}

	/**
	 * Filter the query on the total_wrapping column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByTotalWrapping(1234); // WHERE total_wrapping = 1234
	 * $query->filterByTotalWrapping(array(12, 34)); // WHERE total_wrapping IN (12, 34)
	 * $query->filterByTotalWrapping(array('min' => 12)); // WHERE total_wrapping > 12
	 * </code>
	 *
	 * @param     mixed $totalWrapping The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_OrdersQuery The current query, for fluid interface
	 */
	public function filterByTotalWrapping($totalWrapping = null, $comparison = null)
	{
		if (is_array($totalWrapping)) {
			$useMinMax = false;
			if (isset($totalWrapping['min'])) {
				$this->addUsingAlias(Oops_Model_OrdersPeer::TOTAL_WRAPPING, $totalWrapping['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($totalWrapping['max'])) {
				$this->addUsingAlias(Oops_Model_OrdersPeer::TOTAL_WRAPPING, $totalWrapping['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_OrdersPeer::TOTAL_WRAPPING, $totalWrapping, $comparison);
	}

	/**
	 * Filter the query on the invoice_number column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByInvoiceNumber(1234); // WHERE invoice_number = 1234
	 * $query->filterByInvoiceNumber(array(12, 34)); // WHERE invoice_number IN (12, 34)
	 * $query->filterByInvoiceNumber(array('min' => 12)); // WHERE invoice_number > 12
	 * </code>
	 *
	 * @param     mixed $invoiceNumber The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_OrdersQuery The current query, for fluid interface
	 */
	public function filterByInvoiceNumber($invoiceNumber = null, $comparison = null)
	{
		if (is_array($invoiceNumber)) {
			$useMinMax = false;
			if (isset($invoiceNumber['min'])) {
				$this->addUsingAlias(Oops_Model_OrdersPeer::INVOICE_NUMBER, $invoiceNumber['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($invoiceNumber['max'])) {
				$this->addUsingAlias(Oops_Model_OrdersPeer::INVOICE_NUMBER, $invoiceNumber['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_OrdersPeer::INVOICE_NUMBER, $invoiceNumber, $comparison);
	}

	/**
	 * Filter the query on the delivery_number column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByDeliveryNumber(1234); // WHERE delivery_number = 1234
	 * $query->filterByDeliveryNumber(array(12, 34)); // WHERE delivery_number IN (12, 34)
	 * $query->filterByDeliveryNumber(array('min' => 12)); // WHERE delivery_number > 12
	 * </code>
	 *
	 * @param     mixed $deliveryNumber The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_OrdersQuery The current query, for fluid interface
	 */
	public function filterByDeliveryNumber($deliveryNumber = null, $comparison = null)
	{
		if (is_array($deliveryNumber)) {
			$useMinMax = false;
			if (isset($deliveryNumber['min'])) {
				$this->addUsingAlias(Oops_Model_OrdersPeer::DELIVERY_NUMBER, $deliveryNumber['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($deliveryNumber['max'])) {
				$this->addUsingAlias(Oops_Model_OrdersPeer::DELIVERY_NUMBER, $deliveryNumber['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_OrdersPeer::DELIVERY_NUMBER, $deliveryNumber, $comparison);
	}

	/**
	 * Filter the query on the invoice_date column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByInvoiceDate('2011-03-14'); // WHERE invoice_date = '2011-03-14'
	 * $query->filterByInvoiceDate('now'); // WHERE invoice_date = '2011-03-14'
	 * $query->filterByInvoiceDate(array('max' => 'yesterday')); // WHERE invoice_date > '2011-03-13'
	 * </code>
	 *
	 * @param     mixed $invoiceDate The value to use as filter.
	 *              Values can be integers (unix timestamps), DateTime objects, or strings.
	 *              Empty strings are treated as NULL.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_OrdersQuery The current query, for fluid interface
	 */
	public function filterByInvoiceDate($invoiceDate = null, $comparison = null)
	{
		if (is_array($invoiceDate)) {
			$useMinMax = false;
			if (isset($invoiceDate['min'])) {
				$this->addUsingAlias(Oops_Model_OrdersPeer::INVOICE_DATE, $invoiceDate['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($invoiceDate['max'])) {
				$this->addUsingAlias(Oops_Model_OrdersPeer::INVOICE_DATE, $invoiceDate['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_OrdersPeer::INVOICE_DATE, $invoiceDate, $comparison);
	}

	/**
	 * Filter the query on the delivery_date column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByDeliveryDate('2011-03-14'); // WHERE delivery_date = '2011-03-14'
	 * $query->filterByDeliveryDate('now'); // WHERE delivery_date = '2011-03-14'
	 * $query->filterByDeliveryDate(array('max' => 'yesterday')); // WHERE delivery_date > '2011-03-13'
	 * </code>
	 *
	 * @param     mixed $deliveryDate The value to use as filter.
	 *              Values can be integers (unix timestamps), DateTime objects, or strings.
	 *              Empty strings are treated as NULL.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_OrdersQuery The current query, for fluid interface
	 */
	public function filterByDeliveryDate($deliveryDate = null, $comparison = null)
	{
		if (is_array($deliveryDate)) {
			$useMinMax = false;
			if (isset($deliveryDate['min'])) {
				$this->addUsingAlias(Oops_Model_OrdersPeer::DELIVERY_DATE, $deliveryDate['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($deliveryDate['max'])) {
				$this->addUsingAlias(Oops_Model_OrdersPeer::DELIVERY_DATE, $deliveryDate['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_OrdersPeer::DELIVERY_DATE, $deliveryDate, $comparison);
	}

	/**
	 * Filter the query on the valid column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByValid(1234); // WHERE valid = 1234
	 * $query->filterByValid(array(12, 34)); // WHERE valid IN (12, 34)
	 * $query->filterByValid(array('min' => 12)); // WHERE valid > 12
	 * </code>
	 *
	 * @param     mixed $valid The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_OrdersQuery The current query, for fluid interface
	 */
	public function filterByValid($valid = null, $comparison = null)
	{
		if (is_array($valid)) {
			$useMinMax = false;
			if (isset($valid['min'])) {
				$this->addUsingAlias(Oops_Model_OrdersPeer::VALID, $valid['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($valid['max'])) {
				$this->addUsingAlias(Oops_Model_OrdersPeer::VALID, $valid['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_OrdersPeer::VALID, $valid, $comparison);
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
	 * @return    Oops_Model_OrdersQuery The current query, for fluid interface
	 */
	public function filterByDateAdd($dateAdd = null, $comparison = null)
	{
		if (is_array($dateAdd)) {
			$useMinMax = false;
			if (isset($dateAdd['min'])) {
				$this->addUsingAlias(Oops_Model_OrdersPeer::DATE_ADD, $dateAdd['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($dateAdd['max'])) {
				$this->addUsingAlias(Oops_Model_OrdersPeer::DATE_ADD, $dateAdd['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_OrdersPeer::DATE_ADD, $dateAdd, $comparison);
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
	 * @return    Oops_Model_OrdersQuery The current query, for fluid interface
	 */
	public function filterByDateUpd($dateUpd = null, $comparison = null)
	{
		if (is_array($dateUpd)) {
			$useMinMax = false;
			if (isset($dateUpd['min'])) {
				$this->addUsingAlias(Oops_Model_OrdersPeer::DATE_UPD, $dateUpd['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($dateUpd['max'])) {
				$this->addUsingAlias(Oops_Model_OrdersPeer::DATE_UPD, $dateUpd['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_OrdersPeer::DATE_UPD, $dateUpd, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     Oops_Model_Orders $orders Object to remove from the list of results
	 *
	 * @return    Oops_Model_OrdersQuery The current query, for fluid interface
	 */
	public function prune($orders = null)
	{
		if ($orders) {
			$this->addUsingAlias(Oops_Model_OrdersPeer::ID_ORDER, $orders->getIdOrder(), Criteria::NOT_EQUAL);
		}

		return $this;
	}

} // Oops_Model_Base_OrdersQuery