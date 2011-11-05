<?php


/**
 * Base class that represents a row from the 'djland_orders' table.
 *
 * 
 *
 * @package    propel.generator.prestashop.om
 */
abstract class Oops_Model_Base_Orders extends BaseObject  implements Persistent
{

	/**
	 * Peer class name
	 */
	const PEER = 'Oops_Model_OrdersPeer';

	/**
	 * The Peer class.
	 * Instance provides a convenient way of calling static methods on a class
	 * that calling code may not be able to identify.
	 * @var        Oops_Model_OrdersPeer
	 */
	protected static $peer;

	/**
	 * The value for the id_order field.
	 * @var        int
	 */
	protected $id_order;

	/**
	 * The value for the id_carrier field.
	 * @var        int
	 */
	protected $id_carrier;

	/**
	 * The value for the id_lang field.
	 * @var        int
	 */
	protected $id_lang;

	/**
	 * The value for the id_customer field.
	 * @var        int
	 */
	protected $id_customer;

	/**
	 * The value for the id_cart field.
	 * @var        int
	 */
	protected $id_cart;

	/**
	 * The value for the id_currency field.
	 * @var        int
	 */
	protected $id_currency;

	/**
	 * The value for the id_address_delivery field.
	 * @var        int
	 */
	protected $id_address_delivery;

	/**
	 * The value for the id_address_invoice field.
	 * @var        int
	 */
	protected $id_address_invoice;

	/**
	 * The value for the secure_key field.
	 * Note: this column has a database default value of: '-1'
	 * @var        string
	 */
	protected $secure_key;

	/**
	 * The value for the payment field.
	 * @var        string
	 */
	protected $payment;

	/**
	 * The value for the conversion_rate field.
	 * Note: this column has a database default value of: '1.000000'
	 * @var        string
	 */
	protected $conversion_rate;

	/**
	 * The value for the module field.
	 * @var        string
	 */
	protected $module;

	/**
	 * The value for the recyclable field.
	 * Note: this column has a database default value of: false
	 * @var        boolean
	 */
	protected $recyclable;

	/**
	 * The value for the gift field.
	 * Note: this column has a database default value of: false
	 * @var        boolean
	 */
	protected $gift;

	/**
	 * The value for the gift_message field.
	 * @var        string
	 */
	protected $gift_message;

	/**
	 * The value for the shipping_number field.
	 * @var        string
	 */
	protected $shipping_number;

	/**
	 * The value for the total_discounts field.
	 * Note: this column has a database default value of: '0.00'
	 * @var        string
	 */
	protected $total_discounts;

	/**
	 * The value for the total_paid field.
	 * Note: this column has a database default value of: '0.00'
	 * @var        string
	 */
	protected $total_paid;

	/**
	 * The value for the total_paid_real field.
	 * Note: this column has a database default value of: '0.00'
	 * @var        string
	 */
	protected $total_paid_real;

	/**
	 * The value for the total_products field.
	 * Note: this column has a database default value of: '0.00'
	 * @var        string
	 */
	protected $total_products;

	/**
	 * The value for the total_products_wt field.
	 * Note: this column has a database default value of: '0.00'
	 * @var        string
	 */
	protected $total_products_wt;

	/**
	 * The value for the total_shipping field.
	 * Note: this column has a database default value of: '0.00'
	 * @var        string
	 */
	protected $total_shipping;

	/**
	 * The value for the carrier_tax_rate field.
	 * Note: this column has a database default value of: '0.000'
	 * @var        string
	 */
	protected $carrier_tax_rate;

	/**
	 * The value for the total_wrapping field.
	 * Note: this column has a database default value of: '0.00'
	 * @var        string
	 */
	protected $total_wrapping;

	/**
	 * The value for the invoice_number field.
	 * Note: this column has a database default value of: 0
	 * @var        int
	 */
	protected $invoice_number;

	/**
	 * The value for the delivery_number field.
	 * Note: this column has a database default value of: 0
	 * @var        int
	 */
	protected $delivery_number;

	/**
	 * The value for the invoice_date field.
	 * @var        string
	 */
	protected $invoice_date;

	/**
	 * The value for the delivery_date field.
	 * @var        string
	 */
	protected $delivery_date;

	/**
	 * The value for the valid field.
	 * Note: this column has a database default value of: 0
	 * @var        int
	 */
	protected $valid;

	/**
	 * The value for the date_add field.
	 * @var        string
	 */
	protected $date_add;

	/**
	 * The value for the date_upd field.
	 * @var        string
	 */
	protected $date_upd;

	/**
	 * Flag to prevent endless save loop, if this object is referenced
	 * by another object which falls in this transaction.
	 * @var        boolean
	 */
	protected $alreadyInSave = false;

	/**
	 * Flag to prevent endless validation loop, if this object is referenced
	 * by another object which falls in this transaction.
	 * @var        boolean
	 */
	protected $alreadyInValidation = false;

	/**
	 * Applies default values to this object.
	 * This method should be called from the object's constructor (or
	 * equivalent initialization method).
	 * @see        __construct()
	 */
	public function applyDefaultValues()
	{
		$this->secure_key = '-1';
		$this->conversion_rate = '1.000000';
		$this->recyclable = false;
		$this->gift = false;
		$this->total_discounts = '0.00';
		$this->total_paid = '0.00';
		$this->total_paid_real = '0.00';
		$this->total_products = '0.00';
		$this->total_products_wt = '0.00';
		$this->total_shipping = '0.00';
		$this->carrier_tax_rate = '0.000';
		$this->total_wrapping = '0.00';
		$this->invoice_number = 0;
		$this->delivery_number = 0;
		$this->valid = 0;
	}

	/**
	 * Initializes internal state of Oops_Model_Base_Orders object.
	 * @see        applyDefaults()
	 */
	public function __construct()
	{
		parent::__construct();
		$this->applyDefaultValues();
	}

	/**
	 * Get the [id_order] column value.
	 * 
	 * @return     int
	 */
	public function getIdOrder()
	{
		return $this->id_order;
	}

	/**
	 * Get the [id_carrier] column value.
	 * 
	 * @return     int
	 */
	public function getIdCarrier()
	{
		return $this->id_carrier;
	}

	/**
	 * Get the [id_lang] column value.
	 * 
	 * @return     int
	 */
	public function getIdLang()
	{
		return $this->id_lang;
	}

	/**
	 * Get the [id_customer] column value.
	 * 
	 * @return     int
	 */
	public function getIdCustomer()
	{
		return $this->id_customer;
	}

	/**
	 * Get the [id_cart] column value.
	 * 
	 * @return     int
	 */
	public function getIdCart()
	{
		return $this->id_cart;
	}

	/**
	 * Get the [id_currency] column value.
	 * 
	 * @return     int
	 */
	public function getIdCurrency()
	{
		return $this->id_currency;
	}

	/**
	 * Get the [id_address_delivery] column value.
	 * 
	 * @return     int
	 */
	public function getIdAddressDelivery()
	{
		return $this->id_address_delivery;
	}

	/**
	 * Get the [id_address_invoice] column value.
	 * 
	 * @return     int
	 */
	public function getIdAddressInvoice()
	{
		return $this->id_address_invoice;
	}

	/**
	 * Get the [secure_key] column value.
	 * 
	 * @return     string
	 */
	public function getSecureKey()
	{
		return $this->secure_key;
	}

	/**
	 * Get the [payment] column value.
	 * 
	 * @return     string
	 */
	public function getPayment()
	{
		return $this->payment;
	}

	/**
	 * Get the [conversion_rate] column value.
	 * 
	 * @return     string
	 */
	public function getConversionRate()
	{
		return $this->conversion_rate;
	}

	/**
	 * Get the [module] column value.
	 * 
	 * @return     string
	 */
	public function getModule()
	{
		return $this->module;
	}

	/**
	 * Get the [recyclable] column value.
	 * 
	 * @return     boolean
	 */
	public function getRecyclable()
	{
		return $this->recyclable;
	}

	/**
	 * Get the [gift] column value.
	 * 
	 * @return     boolean
	 */
	public function getGift()
	{
		return $this->gift;
	}

	/**
	 * Get the [gift_message] column value.
	 * 
	 * @return     string
	 */
	public function getGiftMessage()
	{
		return $this->gift_message;
	}

	/**
	 * Get the [shipping_number] column value.
	 * 
	 * @return     string
	 */
	public function getShippingNumber()
	{
		return $this->shipping_number;
	}

	/**
	 * Get the [total_discounts] column value.
	 * 
	 * @return     string
	 */
	public function getTotalDiscounts()
	{
		return $this->total_discounts;
	}

	/**
	 * Get the [total_paid] column value.
	 * 
	 * @return     string
	 */
	public function getTotalPaid()
	{
		return $this->total_paid;
	}

	/**
	 * Get the [total_paid_real] column value.
	 * 
	 * @return     string
	 */
	public function getTotalPaidReal()
	{
		return $this->total_paid_real;
	}

	/**
	 * Get the [total_products] column value.
	 * 
	 * @return     string
	 */
	public function getTotalProducts()
	{
		return $this->total_products;
	}

	/**
	 * Get the [total_products_wt] column value.
	 * 
	 * @return     string
	 */
	public function getTotalProductsWt()
	{
		return $this->total_products_wt;
	}

	/**
	 * Get the [total_shipping] column value.
	 * 
	 * @return     string
	 */
	public function getTotalShipping()
	{
		return $this->total_shipping;
	}

	/**
	 * Get the [carrier_tax_rate] column value.
	 * 
	 * @return     string
	 */
	public function getCarrierTaxRate()
	{
		return $this->carrier_tax_rate;
	}

	/**
	 * Get the [total_wrapping] column value.
	 * 
	 * @return     string
	 */
	public function getTotalWrapping()
	{
		return $this->total_wrapping;
	}

	/**
	 * Get the [invoice_number] column value.
	 * 
	 * @return     int
	 */
	public function getInvoiceNumber()
	{
		return $this->invoice_number;
	}

	/**
	 * Get the [delivery_number] column value.
	 * 
	 * @return     int
	 */
	public function getDeliveryNumber()
	{
		return $this->delivery_number;
	}

	/**
	 * Get the [optionally formatted] temporal [invoice_date] column value.
	 * 
	 *
	 * @param      string $format The date/time format string (either date()-style or strftime()-style).
	 *							If format is NULL, then the raw DateTime object will be returned.
	 * @return     mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00 00:00:00
	 * @throws     PropelException - if unable to parse/validate the date/time value.
	 */
	public function getInvoiceDate($format = 'Y-m-d H:i:s')
	{
		if ($this->invoice_date === null) {
			return null;
		}


		if ($this->invoice_date === '0000-00-00 00:00:00') {
			// while technically this is not a default value of NULL,
			// this seems to be closest in meaning.
			return null;
		} else {
			try {
				$dt = new DateTime($this->invoice_date);
			} catch (Exception $x) {
				throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->invoice_date, true), $x);
			}
		}

		if ($format === null) {
			// Because propel.useDateTimeClass is TRUE, we return a DateTime object.
			return $dt;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $dt->format('U'));
		} else {
			return $dt->format($format);
		}
	}

	/**
	 * Get the [optionally formatted] temporal [delivery_date] column value.
	 * 
	 *
	 * @param      string $format The date/time format string (either date()-style or strftime()-style).
	 *							If format is NULL, then the raw DateTime object will be returned.
	 * @return     mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00 00:00:00
	 * @throws     PropelException - if unable to parse/validate the date/time value.
	 */
	public function getDeliveryDate($format = 'Y-m-d H:i:s')
	{
		if ($this->delivery_date === null) {
			return null;
		}


		if ($this->delivery_date === '0000-00-00 00:00:00') {
			// while technically this is not a default value of NULL,
			// this seems to be closest in meaning.
			return null;
		} else {
			try {
				$dt = new DateTime($this->delivery_date);
			} catch (Exception $x) {
				throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->delivery_date, true), $x);
			}
		}

		if ($format === null) {
			// Because propel.useDateTimeClass is TRUE, we return a DateTime object.
			return $dt;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $dt->format('U'));
		} else {
			return $dt->format($format);
		}
	}

	/**
	 * Get the [valid] column value.
	 * 
	 * @return     int
	 */
	public function getValid()
	{
		return $this->valid;
	}

	/**
	 * Get the [optionally formatted] temporal [date_add] column value.
	 * 
	 *
	 * @param      string $format The date/time format string (either date()-style or strftime()-style).
	 *							If format is NULL, then the raw DateTime object will be returned.
	 * @return     mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00 00:00:00
	 * @throws     PropelException - if unable to parse/validate the date/time value.
	 */
	public function getDateAdd($format = 'Y-m-d H:i:s')
	{
		if ($this->date_add === null) {
			return null;
		}


		if ($this->date_add === '0000-00-00 00:00:00') {
			// while technically this is not a default value of NULL,
			// this seems to be closest in meaning.
			return null;
		} else {
			try {
				$dt = new DateTime($this->date_add);
			} catch (Exception $x) {
				throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->date_add, true), $x);
			}
		}

		if ($format === null) {
			// Because propel.useDateTimeClass is TRUE, we return a DateTime object.
			return $dt;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $dt->format('U'));
		} else {
			return $dt->format($format);
		}
	}

	/**
	 * Get the [optionally formatted] temporal [date_upd] column value.
	 * 
	 *
	 * @param      string $format The date/time format string (either date()-style or strftime()-style).
	 *							If format is NULL, then the raw DateTime object will be returned.
	 * @return     mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00 00:00:00
	 * @throws     PropelException - if unable to parse/validate the date/time value.
	 */
	public function getDateUpd($format = 'Y-m-d H:i:s')
	{
		if ($this->date_upd === null) {
			return null;
		}


		if ($this->date_upd === '0000-00-00 00:00:00') {
			// while technically this is not a default value of NULL,
			// this seems to be closest in meaning.
			return null;
		} else {
			try {
				$dt = new DateTime($this->date_upd);
			} catch (Exception $x) {
				throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->date_upd, true), $x);
			}
		}

		if ($format === null) {
			// Because propel.useDateTimeClass is TRUE, we return a DateTime object.
			return $dt;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $dt->format('U'));
		} else {
			return $dt->format($format);
		}
	}

	/**
	 * Set the value of [id_order] column.
	 * 
	 * @param      int $v new value
	 * @return     Oops_Model_Orders The current object (for fluent API support)
	 */
	public function setIdOrder($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->id_order !== $v) {
			$this->id_order = $v;
			$this->modifiedColumns[] = Oops_Model_OrdersPeer::ID_ORDER;
		}

		return $this;
	} // setIdOrder()

	/**
	 * Set the value of [id_carrier] column.
	 * 
	 * @param      int $v new value
	 * @return     Oops_Model_Orders The current object (for fluent API support)
	 */
	public function setIdCarrier($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->id_carrier !== $v) {
			$this->id_carrier = $v;
			$this->modifiedColumns[] = Oops_Model_OrdersPeer::ID_CARRIER;
		}

		return $this;
	} // setIdCarrier()

	/**
	 * Set the value of [id_lang] column.
	 * 
	 * @param      int $v new value
	 * @return     Oops_Model_Orders The current object (for fluent API support)
	 */
	public function setIdLang($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->id_lang !== $v) {
			$this->id_lang = $v;
			$this->modifiedColumns[] = Oops_Model_OrdersPeer::ID_LANG;
		}

		return $this;
	} // setIdLang()

	/**
	 * Set the value of [id_customer] column.
	 * 
	 * @param      int $v new value
	 * @return     Oops_Model_Orders The current object (for fluent API support)
	 */
	public function setIdCustomer($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->id_customer !== $v) {
			$this->id_customer = $v;
			$this->modifiedColumns[] = Oops_Model_OrdersPeer::ID_CUSTOMER;
		}

		return $this;
	} // setIdCustomer()

	/**
	 * Set the value of [id_cart] column.
	 * 
	 * @param      int $v new value
	 * @return     Oops_Model_Orders The current object (for fluent API support)
	 */
	public function setIdCart($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->id_cart !== $v) {
			$this->id_cart = $v;
			$this->modifiedColumns[] = Oops_Model_OrdersPeer::ID_CART;
		}

		return $this;
	} // setIdCart()

	/**
	 * Set the value of [id_currency] column.
	 * 
	 * @param      int $v new value
	 * @return     Oops_Model_Orders The current object (for fluent API support)
	 */
	public function setIdCurrency($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->id_currency !== $v) {
			$this->id_currency = $v;
			$this->modifiedColumns[] = Oops_Model_OrdersPeer::ID_CURRENCY;
		}

		return $this;
	} // setIdCurrency()

	/**
	 * Set the value of [id_address_delivery] column.
	 * 
	 * @param      int $v new value
	 * @return     Oops_Model_Orders The current object (for fluent API support)
	 */
	public function setIdAddressDelivery($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->id_address_delivery !== $v) {
			$this->id_address_delivery = $v;
			$this->modifiedColumns[] = Oops_Model_OrdersPeer::ID_ADDRESS_DELIVERY;
		}

		return $this;
	} // setIdAddressDelivery()

	/**
	 * Set the value of [id_address_invoice] column.
	 * 
	 * @param      int $v new value
	 * @return     Oops_Model_Orders The current object (for fluent API support)
	 */
	public function setIdAddressInvoice($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->id_address_invoice !== $v) {
			$this->id_address_invoice = $v;
			$this->modifiedColumns[] = Oops_Model_OrdersPeer::ID_ADDRESS_INVOICE;
		}

		return $this;
	} // setIdAddressInvoice()

	/**
	 * Set the value of [secure_key] column.
	 * 
	 * @param      string $v new value
	 * @return     Oops_Model_Orders The current object (for fluent API support)
	 */
	public function setSecureKey($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->secure_key !== $v) {
			$this->secure_key = $v;
			$this->modifiedColumns[] = Oops_Model_OrdersPeer::SECURE_KEY;
		}

		return $this;
	} // setSecureKey()

	/**
	 * Set the value of [payment] column.
	 * 
	 * @param      string $v new value
	 * @return     Oops_Model_Orders The current object (for fluent API support)
	 */
	public function setPayment($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->payment !== $v) {
			$this->payment = $v;
			$this->modifiedColumns[] = Oops_Model_OrdersPeer::PAYMENT;
		}

		return $this;
	} // setPayment()

	/**
	 * Set the value of [conversion_rate] column.
	 * 
	 * @param      string $v new value
	 * @return     Oops_Model_Orders The current object (for fluent API support)
	 */
	public function setConversionRate($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->conversion_rate !== $v) {
			$this->conversion_rate = $v;
			$this->modifiedColumns[] = Oops_Model_OrdersPeer::CONVERSION_RATE;
		}

		return $this;
	} // setConversionRate()

	/**
	 * Set the value of [module] column.
	 * 
	 * @param      string $v new value
	 * @return     Oops_Model_Orders The current object (for fluent API support)
	 */
	public function setModule($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->module !== $v) {
			$this->module = $v;
			$this->modifiedColumns[] = Oops_Model_OrdersPeer::MODULE;
		}

		return $this;
	} // setModule()

	/**
	 * Sets the value of the [recyclable] column.
	 * Non-boolean arguments are converted using the following rules:
	 *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * 
	 * @param      boolean|integer|string $v The new value
	 * @return     Oops_Model_Orders The current object (for fluent API support)
	 */
	public function setRecyclable($v)
	{
		if ($v !== null) {
			if (is_string($v)) {
				$v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
			} else {
				$v = (boolean) $v;
			}
		}

		if ($this->recyclable !== $v) {
			$this->recyclable = $v;
			$this->modifiedColumns[] = Oops_Model_OrdersPeer::RECYCLABLE;
		}

		return $this;
	} // setRecyclable()

	/**
	 * Sets the value of the [gift] column.
	 * Non-boolean arguments are converted using the following rules:
	 *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * 
	 * @param      boolean|integer|string $v The new value
	 * @return     Oops_Model_Orders The current object (for fluent API support)
	 */
	public function setGift($v)
	{
		if ($v !== null) {
			if (is_string($v)) {
				$v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
			} else {
				$v = (boolean) $v;
			}
		}

		if ($this->gift !== $v) {
			$this->gift = $v;
			$this->modifiedColumns[] = Oops_Model_OrdersPeer::GIFT;
		}

		return $this;
	} // setGift()

	/**
	 * Set the value of [gift_message] column.
	 * 
	 * @param      string $v new value
	 * @return     Oops_Model_Orders The current object (for fluent API support)
	 */
	public function setGiftMessage($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->gift_message !== $v) {
			$this->gift_message = $v;
			$this->modifiedColumns[] = Oops_Model_OrdersPeer::GIFT_MESSAGE;
		}

		return $this;
	} // setGiftMessage()

	/**
	 * Set the value of [shipping_number] column.
	 * 
	 * @param      string $v new value
	 * @return     Oops_Model_Orders The current object (for fluent API support)
	 */
	public function setShippingNumber($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->shipping_number !== $v) {
			$this->shipping_number = $v;
			$this->modifiedColumns[] = Oops_Model_OrdersPeer::SHIPPING_NUMBER;
		}

		return $this;
	} // setShippingNumber()

	/**
	 * Set the value of [total_discounts] column.
	 * 
	 * @param      string $v new value
	 * @return     Oops_Model_Orders The current object (for fluent API support)
	 */
	public function setTotalDiscounts($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->total_discounts !== $v) {
			$this->total_discounts = $v;
			$this->modifiedColumns[] = Oops_Model_OrdersPeer::TOTAL_DISCOUNTS;
		}

		return $this;
	} // setTotalDiscounts()

	/**
	 * Set the value of [total_paid] column.
	 * 
	 * @param      string $v new value
	 * @return     Oops_Model_Orders The current object (for fluent API support)
	 */
	public function setTotalPaid($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->total_paid !== $v) {
			$this->total_paid = $v;
			$this->modifiedColumns[] = Oops_Model_OrdersPeer::TOTAL_PAID;
		}

		return $this;
	} // setTotalPaid()

	/**
	 * Set the value of [total_paid_real] column.
	 * 
	 * @param      string $v new value
	 * @return     Oops_Model_Orders The current object (for fluent API support)
	 */
	public function setTotalPaidReal($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->total_paid_real !== $v) {
			$this->total_paid_real = $v;
			$this->modifiedColumns[] = Oops_Model_OrdersPeer::TOTAL_PAID_REAL;
		}

		return $this;
	} // setTotalPaidReal()

	/**
	 * Set the value of [total_products] column.
	 * 
	 * @param      string $v new value
	 * @return     Oops_Model_Orders The current object (for fluent API support)
	 */
	public function setTotalProducts($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->total_products !== $v) {
			$this->total_products = $v;
			$this->modifiedColumns[] = Oops_Model_OrdersPeer::TOTAL_PRODUCTS;
		}

		return $this;
	} // setTotalProducts()

	/**
	 * Set the value of [total_products_wt] column.
	 * 
	 * @param      string $v new value
	 * @return     Oops_Model_Orders The current object (for fluent API support)
	 */
	public function setTotalProductsWt($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->total_products_wt !== $v) {
			$this->total_products_wt = $v;
			$this->modifiedColumns[] = Oops_Model_OrdersPeer::TOTAL_PRODUCTS_WT;
		}

		return $this;
	} // setTotalProductsWt()

	/**
	 * Set the value of [total_shipping] column.
	 * 
	 * @param      string $v new value
	 * @return     Oops_Model_Orders The current object (for fluent API support)
	 */
	public function setTotalShipping($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->total_shipping !== $v) {
			$this->total_shipping = $v;
			$this->modifiedColumns[] = Oops_Model_OrdersPeer::TOTAL_SHIPPING;
		}

		return $this;
	} // setTotalShipping()

	/**
	 * Set the value of [carrier_tax_rate] column.
	 * 
	 * @param      string $v new value
	 * @return     Oops_Model_Orders The current object (for fluent API support)
	 */
	public function setCarrierTaxRate($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->carrier_tax_rate !== $v) {
			$this->carrier_tax_rate = $v;
			$this->modifiedColumns[] = Oops_Model_OrdersPeer::CARRIER_TAX_RATE;
		}

		return $this;
	} // setCarrierTaxRate()

	/**
	 * Set the value of [total_wrapping] column.
	 * 
	 * @param      string $v new value
	 * @return     Oops_Model_Orders The current object (for fluent API support)
	 */
	public function setTotalWrapping($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->total_wrapping !== $v) {
			$this->total_wrapping = $v;
			$this->modifiedColumns[] = Oops_Model_OrdersPeer::TOTAL_WRAPPING;
		}

		return $this;
	} // setTotalWrapping()

	/**
	 * Set the value of [invoice_number] column.
	 * 
	 * @param      int $v new value
	 * @return     Oops_Model_Orders The current object (for fluent API support)
	 */
	public function setInvoiceNumber($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->invoice_number !== $v) {
			$this->invoice_number = $v;
			$this->modifiedColumns[] = Oops_Model_OrdersPeer::INVOICE_NUMBER;
		}

		return $this;
	} // setInvoiceNumber()

	/**
	 * Set the value of [delivery_number] column.
	 * 
	 * @param      int $v new value
	 * @return     Oops_Model_Orders The current object (for fluent API support)
	 */
	public function setDeliveryNumber($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->delivery_number !== $v) {
			$this->delivery_number = $v;
			$this->modifiedColumns[] = Oops_Model_OrdersPeer::DELIVERY_NUMBER;
		}

		return $this;
	} // setDeliveryNumber()

	/**
	 * Sets the value of [invoice_date] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.
	 *               Empty strings are treated as NULL.
	 * @return     Oops_Model_Orders The current object (for fluent API support)
	 */
	public function setInvoiceDate($v)
	{
		$dt = PropelDateTime::newInstance($v, null, 'DateTime');
		if ($this->invoice_date !== null || $dt !== null) {
			$currentDateAsString = ($this->invoice_date !== null && $tmpDt = new DateTime($this->invoice_date)) ? $tmpDt->format('Y-m-d H:i:s') : null;
			$newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
			if ($currentDateAsString !== $newDateAsString) {
				$this->invoice_date = $newDateAsString;
				$this->modifiedColumns[] = Oops_Model_OrdersPeer::INVOICE_DATE;
			}
		} // if either are not null

		return $this;
	} // setInvoiceDate()

	/**
	 * Sets the value of [delivery_date] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.
	 *               Empty strings are treated as NULL.
	 * @return     Oops_Model_Orders The current object (for fluent API support)
	 */
	public function setDeliveryDate($v)
	{
		$dt = PropelDateTime::newInstance($v, null, 'DateTime');
		if ($this->delivery_date !== null || $dt !== null) {
			$currentDateAsString = ($this->delivery_date !== null && $tmpDt = new DateTime($this->delivery_date)) ? $tmpDt->format('Y-m-d H:i:s') : null;
			$newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
			if ($currentDateAsString !== $newDateAsString) {
				$this->delivery_date = $newDateAsString;
				$this->modifiedColumns[] = Oops_Model_OrdersPeer::DELIVERY_DATE;
			}
		} // if either are not null

		return $this;
	} // setDeliveryDate()

	/**
	 * Set the value of [valid] column.
	 * 
	 * @param      int $v new value
	 * @return     Oops_Model_Orders The current object (for fluent API support)
	 */
	public function setValid($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->valid !== $v) {
			$this->valid = $v;
			$this->modifiedColumns[] = Oops_Model_OrdersPeer::VALID;
		}

		return $this;
	} // setValid()

	/**
	 * Sets the value of [date_add] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.
	 *               Empty strings are treated as NULL.
	 * @return     Oops_Model_Orders The current object (for fluent API support)
	 */
	public function setDateAdd($v)
	{
		$dt = PropelDateTime::newInstance($v, null, 'DateTime');
		if ($this->date_add !== null || $dt !== null) {
			$currentDateAsString = ($this->date_add !== null && $tmpDt = new DateTime($this->date_add)) ? $tmpDt->format('Y-m-d H:i:s') : null;
			$newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
			if ($currentDateAsString !== $newDateAsString) {
				$this->date_add = $newDateAsString;
				$this->modifiedColumns[] = Oops_Model_OrdersPeer::DATE_ADD;
			}
		} // if either are not null

		return $this;
	} // setDateAdd()

	/**
	 * Sets the value of [date_upd] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.
	 *               Empty strings are treated as NULL.
	 * @return     Oops_Model_Orders The current object (for fluent API support)
	 */
	public function setDateUpd($v)
	{
		$dt = PropelDateTime::newInstance($v, null, 'DateTime');
		if ($this->date_upd !== null || $dt !== null) {
			$currentDateAsString = ($this->date_upd !== null && $tmpDt = new DateTime($this->date_upd)) ? $tmpDt->format('Y-m-d H:i:s') : null;
			$newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
			if ($currentDateAsString !== $newDateAsString) {
				$this->date_upd = $newDateAsString;
				$this->modifiedColumns[] = Oops_Model_OrdersPeer::DATE_UPD;
			}
		} // if either are not null

		return $this;
	} // setDateUpd()

	/**
	 * Indicates whether the columns in this object are only set to default values.
	 *
	 * This method can be used in conjunction with isModified() to indicate whether an object is both
	 * modified _and_ has some values set which are non-default.
	 *
	 * @return     boolean Whether the columns in this object are only been set with default values.
	 */
	public function hasOnlyDefaultValues()
	{
			if ($this->secure_key !== '-1') {
				return false;
			}

			if ($this->conversion_rate !== '1.000000') {
				return false;
			}

			if ($this->recyclable !== false) {
				return false;
			}

			if ($this->gift !== false) {
				return false;
			}

			if ($this->total_discounts !== '0.00') {
				return false;
			}

			if ($this->total_paid !== '0.00') {
				return false;
			}

			if ($this->total_paid_real !== '0.00') {
				return false;
			}

			if ($this->total_products !== '0.00') {
				return false;
			}

			if ($this->total_products_wt !== '0.00') {
				return false;
			}

			if ($this->total_shipping !== '0.00') {
				return false;
			}

			if ($this->carrier_tax_rate !== '0.000') {
				return false;
			}

			if ($this->total_wrapping !== '0.00') {
				return false;
			}

			if ($this->invoice_number !== 0) {
				return false;
			}

			if ($this->delivery_number !== 0) {
				return false;
			}

			if ($this->valid !== 0) {
				return false;
			}

		// otherwise, everything was equal, so return TRUE
		return true;
	} // hasOnlyDefaultValues()

	/**
	 * Hydrates (populates) the object variables with values from the database resultset.
	 *
	 * An offset (0-based "start column") is specified so that objects can be hydrated
	 * with a subset of the columns in the resultset rows.  This is needed, for example,
	 * for results of JOIN queries where the resultset row includes columns from two or
	 * more tables.
	 *
	 * @param      array $row The row returned by PDOStatement->fetch(PDO::FETCH_NUM)
	 * @param      int $startcol 0-based offset column which indicates which restultset column to start with.
	 * @param      boolean $rehydrate Whether this object is being re-hydrated from the database.
	 * @return     int next starting column
	 * @throws     PropelException  - Any caught Exception will be rewrapped as a PropelException.
	 */
	public function hydrate($row, $startcol = 0, $rehydrate = false)
	{
		try {

			$this->id_order = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
			$this->id_carrier = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
			$this->id_lang = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
			$this->id_customer = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
			$this->id_cart = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
			$this->id_currency = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
			$this->id_address_delivery = ($row[$startcol + 6] !== null) ? (int) $row[$startcol + 6] : null;
			$this->id_address_invoice = ($row[$startcol + 7] !== null) ? (int) $row[$startcol + 7] : null;
			$this->secure_key = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
			$this->payment = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
			$this->conversion_rate = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
			$this->module = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
			$this->recyclable = ($row[$startcol + 12] !== null) ? (boolean) $row[$startcol + 12] : null;
			$this->gift = ($row[$startcol + 13] !== null) ? (boolean) $row[$startcol + 13] : null;
			$this->gift_message = ($row[$startcol + 14] !== null) ? (string) $row[$startcol + 14] : null;
			$this->shipping_number = ($row[$startcol + 15] !== null) ? (string) $row[$startcol + 15] : null;
			$this->total_discounts = ($row[$startcol + 16] !== null) ? (string) $row[$startcol + 16] : null;
			$this->total_paid = ($row[$startcol + 17] !== null) ? (string) $row[$startcol + 17] : null;
			$this->total_paid_real = ($row[$startcol + 18] !== null) ? (string) $row[$startcol + 18] : null;
			$this->total_products = ($row[$startcol + 19] !== null) ? (string) $row[$startcol + 19] : null;
			$this->total_products_wt = ($row[$startcol + 20] !== null) ? (string) $row[$startcol + 20] : null;
			$this->total_shipping = ($row[$startcol + 21] !== null) ? (string) $row[$startcol + 21] : null;
			$this->carrier_tax_rate = ($row[$startcol + 22] !== null) ? (string) $row[$startcol + 22] : null;
			$this->total_wrapping = ($row[$startcol + 23] !== null) ? (string) $row[$startcol + 23] : null;
			$this->invoice_number = ($row[$startcol + 24] !== null) ? (int) $row[$startcol + 24] : null;
			$this->delivery_number = ($row[$startcol + 25] !== null) ? (int) $row[$startcol + 25] : null;
			$this->invoice_date = ($row[$startcol + 26] !== null) ? (string) $row[$startcol + 26] : null;
			$this->delivery_date = ($row[$startcol + 27] !== null) ? (string) $row[$startcol + 27] : null;
			$this->valid = ($row[$startcol + 28] !== null) ? (int) $row[$startcol + 28] : null;
			$this->date_add = ($row[$startcol + 29] !== null) ? (string) $row[$startcol + 29] : null;
			$this->date_upd = ($row[$startcol + 30] !== null) ? (string) $row[$startcol + 30] : null;
			$this->resetModified();

			$this->setNew(false);

			if ($rehydrate) {
				$this->ensureConsistency();
			}

			return $startcol + 31; // 31 = Oops_Model_OrdersPeer::NUM_HYDRATE_COLUMNS.

		} catch (Exception $e) {
			throw new PropelException("Error populating Oops_Model_Orders object", $e);
		}
	}

	/**
	 * Checks and repairs the internal consistency of the object.
	 *
	 * This method is executed after an already-instantiated object is re-hydrated
	 * from the database.  It exists to check any foreign keys to make sure that
	 * the objects related to the current object are correct based on foreign key.
	 *
	 * You can override this method in the stub class, but you should always invoke
	 * the base method from the overridden method (i.e. parent::ensureConsistency()),
	 * in case your model changes.
	 *
	 * @throws     PropelException
	 */
	public function ensureConsistency()
	{

	} // ensureConsistency

	/**
	 * Reloads this object from datastore based on primary key and (optionally) resets all associated objects.
	 *
	 * This will only work if the object has been saved and has a valid primary key set.
	 *
	 * @param      boolean $deep (optional) Whether to also de-associated any related objects.
	 * @param      PropelPDO $con (optional) The PropelPDO connection to use.
	 * @return     void
	 * @throws     PropelException - if this object is deleted, unsaved or doesn't have pk match in db
	 */
	public function reload($deep = false, PropelPDO $con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("Cannot reload a deleted object.");
		}

		if ($this->isNew()) {
			throw new PropelException("Cannot reload an unsaved object.");
		}

		if ($con === null) {
			$con = Propel::getConnection(Oops_Model_OrdersPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		// We don't need to alter the object instance pool; we're just modifying this instance
		// already in the pool.

		$stmt = Oops_Model_OrdersPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
		$row = $stmt->fetch(PDO::FETCH_NUM);
		$stmt->closeCursor();
		if (!$row) {
			throw new PropelException('Cannot find matching row in the database to reload object values.');
		}
		$this->hydrate($row, 0, true); // rehydrate

		if ($deep) {  // also de-associate any related objects?

		} // if (deep)
	}

	/**
	 * Removes this object from datastore and sets delete attribute.
	 *
	 * @param      PropelPDO $con
	 * @return     void
	 * @throws     PropelException
	 * @see        BaseObject::setDeleted()
	 * @see        BaseObject::isDeleted()
	 */
	public function delete(PropelPDO $con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(Oops_Model_OrdersPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$con->beginTransaction();
		try {
			$deleteQuery = Oops_Model_OrdersQuery::create()
				->filterByPrimaryKey($this->getPrimaryKey());
			$ret = $this->preDelete($con);
			if ($ret) {
				$deleteQuery->delete($con);
				$this->postDelete($con);
				$con->commit();
				$this->setDeleted(true);
			} else {
				$con->commit();
			}
		} catch (Exception $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Persists this object to the database.
	 *
	 * If the object is new, it inserts it; otherwise an update is performed.
	 * All modified related objects will also be persisted in the doSave()
	 * method.  This method wraps all precipitate database operations in a
	 * single transaction.
	 *
	 * @param      PropelPDO $con
	 * @return     int The number of rows affected by this insert/update and any referring fk objects' save() operations.
	 * @throws     PropelException
	 * @see        doSave()
	 */
	public function save(PropelPDO $con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("You cannot save an object that has been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(Oops_Model_OrdersPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$con->beginTransaction();
		$isInsert = $this->isNew();
		try {
			$ret = $this->preSave($con);
			if ($isInsert) {
				$ret = $ret && $this->preInsert($con);
			} else {
				$ret = $ret && $this->preUpdate($con);
			}
			if ($ret) {
				$affectedRows = $this->doSave($con);
				if ($isInsert) {
					$this->postInsert($con);
				} else {
					$this->postUpdate($con);
				}
				$this->postSave($con);
				Oops_Model_OrdersPeer::addInstanceToPool($this);
			} else {
				$affectedRows = 0;
			}
			$con->commit();
			return $affectedRows;
		} catch (Exception $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Performs the work of inserting or updating the row in the database.
	 *
	 * If the object is new, it inserts it; otherwise an update is performed.
	 * All related objects are also updated in this method.
	 *
	 * @param      PropelPDO $con
	 * @return     int The number of rows affected by this insert/update and any referring fk objects' save() operations.
	 * @throws     PropelException
	 * @see        save()
	 */
	protected function doSave(PropelPDO $con)
	{
		$affectedRows = 0; // initialize var to track total num of affected rows
		if (!$this->alreadyInSave) {
			$this->alreadyInSave = true;

			if ($this->isNew() || $this->isModified()) {
				// persist changes
				if ($this->isNew()) {
					$this->doInsert($con);
				} else {
					$this->doUpdate($con);
				}
				$affectedRows += 1;
				$this->resetModified();
			}

			$this->alreadyInSave = false;

		}
		return $affectedRows;
	} // doSave()

	/**
	 * Insert the row in the database.
	 *
	 * @param      PropelPDO $con
	 *
	 * @throws     PropelException
	 * @see        doSave()
	 */
	protected function doInsert(PropelPDO $con)
	{
		$modifiedColumns = array();
		$index = 0;

		$this->modifiedColumns[] = Oops_Model_OrdersPeer::ID_ORDER;
		if (null !== $this->id_order) {
			throw new PropelException('Cannot insert a value for auto-increment primary key (' . Oops_Model_OrdersPeer::ID_ORDER . ')');
		}

		 // check the columns in natural order for more readable SQL queries
		if ($this->isColumnModified(Oops_Model_OrdersPeer::ID_ORDER)) {
			$modifiedColumns[':p' . $index++]  = '`ID_ORDER`';
		}
		if ($this->isColumnModified(Oops_Model_OrdersPeer::ID_CARRIER)) {
			$modifiedColumns[':p' . $index++]  = '`ID_CARRIER`';
		}
		if ($this->isColumnModified(Oops_Model_OrdersPeer::ID_LANG)) {
			$modifiedColumns[':p' . $index++]  = '`ID_LANG`';
		}
		if ($this->isColumnModified(Oops_Model_OrdersPeer::ID_CUSTOMER)) {
			$modifiedColumns[':p' . $index++]  = '`ID_CUSTOMER`';
		}
		if ($this->isColumnModified(Oops_Model_OrdersPeer::ID_CART)) {
			$modifiedColumns[':p' . $index++]  = '`ID_CART`';
		}
		if ($this->isColumnModified(Oops_Model_OrdersPeer::ID_CURRENCY)) {
			$modifiedColumns[':p' . $index++]  = '`ID_CURRENCY`';
		}
		if ($this->isColumnModified(Oops_Model_OrdersPeer::ID_ADDRESS_DELIVERY)) {
			$modifiedColumns[':p' . $index++]  = '`ID_ADDRESS_DELIVERY`';
		}
		if ($this->isColumnModified(Oops_Model_OrdersPeer::ID_ADDRESS_INVOICE)) {
			$modifiedColumns[':p' . $index++]  = '`ID_ADDRESS_INVOICE`';
		}
		if ($this->isColumnModified(Oops_Model_OrdersPeer::SECURE_KEY)) {
			$modifiedColumns[':p' . $index++]  = '`SECURE_KEY`';
		}
		if ($this->isColumnModified(Oops_Model_OrdersPeer::PAYMENT)) {
			$modifiedColumns[':p' . $index++]  = '`PAYMENT`';
		}
		if ($this->isColumnModified(Oops_Model_OrdersPeer::CONVERSION_RATE)) {
			$modifiedColumns[':p' . $index++]  = '`CONVERSION_RATE`';
		}
		if ($this->isColumnModified(Oops_Model_OrdersPeer::MODULE)) {
			$modifiedColumns[':p' . $index++]  = '`MODULE`';
		}
		if ($this->isColumnModified(Oops_Model_OrdersPeer::RECYCLABLE)) {
			$modifiedColumns[':p' . $index++]  = '`RECYCLABLE`';
		}
		if ($this->isColumnModified(Oops_Model_OrdersPeer::GIFT)) {
			$modifiedColumns[':p' . $index++]  = '`GIFT`';
		}
		if ($this->isColumnModified(Oops_Model_OrdersPeer::GIFT_MESSAGE)) {
			$modifiedColumns[':p' . $index++]  = '`GIFT_MESSAGE`';
		}
		if ($this->isColumnModified(Oops_Model_OrdersPeer::SHIPPING_NUMBER)) {
			$modifiedColumns[':p' . $index++]  = '`SHIPPING_NUMBER`';
		}
		if ($this->isColumnModified(Oops_Model_OrdersPeer::TOTAL_DISCOUNTS)) {
			$modifiedColumns[':p' . $index++]  = '`TOTAL_DISCOUNTS`';
		}
		if ($this->isColumnModified(Oops_Model_OrdersPeer::TOTAL_PAID)) {
			$modifiedColumns[':p' . $index++]  = '`TOTAL_PAID`';
		}
		if ($this->isColumnModified(Oops_Model_OrdersPeer::TOTAL_PAID_REAL)) {
			$modifiedColumns[':p' . $index++]  = '`TOTAL_PAID_REAL`';
		}
		if ($this->isColumnModified(Oops_Model_OrdersPeer::TOTAL_PRODUCTS)) {
			$modifiedColumns[':p' . $index++]  = '`TOTAL_PRODUCTS`';
		}
		if ($this->isColumnModified(Oops_Model_OrdersPeer::TOTAL_PRODUCTS_WT)) {
			$modifiedColumns[':p' . $index++]  = '`TOTAL_PRODUCTS_WT`';
		}
		if ($this->isColumnModified(Oops_Model_OrdersPeer::TOTAL_SHIPPING)) {
			$modifiedColumns[':p' . $index++]  = '`TOTAL_SHIPPING`';
		}
		if ($this->isColumnModified(Oops_Model_OrdersPeer::CARRIER_TAX_RATE)) {
			$modifiedColumns[':p' . $index++]  = '`CARRIER_TAX_RATE`';
		}
		if ($this->isColumnModified(Oops_Model_OrdersPeer::TOTAL_WRAPPING)) {
			$modifiedColumns[':p' . $index++]  = '`TOTAL_WRAPPING`';
		}
		if ($this->isColumnModified(Oops_Model_OrdersPeer::INVOICE_NUMBER)) {
			$modifiedColumns[':p' . $index++]  = '`INVOICE_NUMBER`';
		}
		if ($this->isColumnModified(Oops_Model_OrdersPeer::DELIVERY_NUMBER)) {
			$modifiedColumns[':p' . $index++]  = '`DELIVERY_NUMBER`';
		}
		if ($this->isColumnModified(Oops_Model_OrdersPeer::INVOICE_DATE)) {
			$modifiedColumns[':p' . $index++]  = '`INVOICE_DATE`';
		}
		if ($this->isColumnModified(Oops_Model_OrdersPeer::DELIVERY_DATE)) {
			$modifiedColumns[':p' . $index++]  = '`DELIVERY_DATE`';
		}
		if ($this->isColumnModified(Oops_Model_OrdersPeer::VALID)) {
			$modifiedColumns[':p' . $index++]  = '`VALID`';
		}
		if ($this->isColumnModified(Oops_Model_OrdersPeer::DATE_ADD)) {
			$modifiedColumns[':p' . $index++]  = '`DATE_ADD`';
		}
		if ($this->isColumnModified(Oops_Model_OrdersPeer::DATE_UPD)) {
			$modifiedColumns[':p' . $index++]  = '`DATE_UPD`';
		}

		$sql = sprintf(
			'INSERT INTO `djland_orders` (%s) VALUES (%s)',
			implode(', ', $modifiedColumns),
			implode(', ', array_keys($modifiedColumns))
		);

		try {
			$stmt = $con->prepare($sql);
			foreach ($modifiedColumns as $identifier => $columnName) {
				switch ($columnName) {
					case '`ID_ORDER`':
						$stmt->bindValue($identifier, $this->id_order, PDO::PARAM_INT);
						break;
					case '`ID_CARRIER`':
						$stmt->bindValue($identifier, $this->id_carrier, PDO::PARAM_INT);
						break;
					case '`ID_LANG`':
						$stmt->bindValue($identifier, $this->id_lang, PDO::PARAM_INT);
						break;
					case '`ID_CUSTOMER`':
						$stmt->bindValue($identifier, $this->id_customer, PDO::PARAM_INT);
						break;
					case '`ID_CART`':
						$stmt->bindValue($identifier, $this->id_cart, PDO::PARAM_INT);
						break;
					case '`ID_CURRENCY`':
						$stmt->bindValue($identifier, $this->id_currency, PDO::PARAM_INT);
						break;
					case '`ID_ADDRESS_DELIVERY`':
						$stmt->bindValue($identifier, $this->id_address_delivery, PDO::PARAM_INT);
						break;
					case '`ID_ADDRESS_INVOICE`':
						$stmt->bindValue($identifier, $this->id_address_invoice, PDO::PARAM_INT);
						break;
					case '`SECURE_KEY`':
						$stmt->bindValue($identifier, $this->secure_key, PDO::PARAM_STR);
						break;
					case '`PAYMENT`':
						$stmt->bindValue($identifier, $this->payment, PDO::PARAM_STR);
						break;
					case '`CONVERSION_RATE`':
						$stmt->bindValue($identifier, $this->conversion_rate, PDO::PARAM_STR);
						break;
					case '`MODULE`':
						$stmt->bindValue($identifier, $this->module, PDO::PARAM_STR);
						break;
					case '`RECYCLABLE`':
						$stmt->bindValue($identifier, (int) $this->recyclable, PDO::PARAM_INT);
						break;
					case '`GIFT`':
						$stmt->bindValue($identifier, (int) $this->gift, PDO::PARAM_INT);
						break;
					case '`GIFT_MESSAGE`':
						$stmt->bindValue($identifier, $this->gift_message, PDO::PARAM_STR);
						break;
					case '`SHIPPING_NUMBER`':
						$stmt->bindValue($identifier, $this->shipping_number, PDO::PARAM_STR);
						break;
					case '`TOTAL_DISCOUNTS`':
						$stmt->bindValue($identifier, $this->total_discounts, PDO::PARAM_STR);
						break;
					case '`TOTAL_PAID`':
						$stmt->bindValue($identifier, $this->total_paid, PDO::PARAM_STR);
						break;
					case '`TOTAL_PAID_REAL`':
						$stmt->bindValue($identifier, $this->total_paid_real, PDO::PARAM_STR);
						break;
					case '`TOTAL_PRODUCTS`':
						$stmt->bindValue($identifier, $this->total_products, PDO::PARAM_STR);
						break;
					case '`TOTAL_PRODUCTS_WT`':
						$stmt->bindValue($identifier, $this->total_products_wt, PDO::PARAM_STR);
						break;
					case '`TOTAL_SHIPPING`':
						$stmt->bindValue($identifier, $this->total_shipping, PDO::PARAM_STR);
						break;
					case '`CARRIER_TAX_RATE`':
						$stmt->bindValue($identifier, $this->carrier_tax_rate, PDO::PARAM_STR);
						break;
					case '`TOTAL_WRAPPING`':
						$stmt->bindValue($identifier, $this->total_wrapping, PDO::PARAM_STR);
						break;
					case '`INVOICE_NUMBER`':
						$stmt->bindValue($identifier, $this->invoice_number, PDO::PARAM_INT);
						break;
					case '`DELIVERY_NUMBER`':
						$stmt->bindValue($identifier, $this->delivery_number, PDO::PARAM_INT);
						break;
					case '`INVOICE_DATE`':
						$stmt->bindValue($identifier, $this->invoice_date, PDO::PARAM_STR);
						break;
					case '`DELIVERY_DATE`':
						$stmt->bindValue($identifier, $this->delivery_date, PDO::PARAM_STR);
						break;
					case '`VALID`':
						$stmt->bindValue($identifier, $this->valid, PDO::PARAM_INT);
						break;
					case '`DATE_ADD`':
						$stmt->bindValue($identifier, $this->date_add, PDO::PARAM_STR);
						break;
					case '`DATE_UPD`':
						$stmt->bindValue($identifier, $this->date_upd, PDO::PARAM_STR);
						break;
				}
			}
			$stmt->execute();
		} catch (Exception $e) {
			Propel::log($e->getMessage(), Propel::LOG_ERR);
			throw new PropelException(sprintf('Unable to execute INSERT statement [%s]', $sql), $e);
		}

		try {
			$pk = $con->lastInsertId();
		} catch (Exception $e) {
			throw new PropelException('Unable to get autoincrement id.', $e);
		}
		$this->setIdOrder($pk);

		$this->setNew(false);
	}

	/**
	 * Update the row in the database.
	 *
	 * @param      PropelPDO $con
	 *
	 * @see        doSave()
	 */
	protected function doUpdate(PropelPDO $con)
	{
		$selectCriteria = $this->buildPkeyCriteria();
		$valuesCriteria = $this->buildCriteria();
		BasePeer::doUpdate($selectCriteria, $valuesCriteria, $con);
	}

	/**
	 * Array of ValidationFailed objects.
	 * @var        array ValidationFailed[]
	 */
	protected $validationFailures = array();

	/**
	 * Gets any ValidationFailed objects that resulted from last call to validate().
	 *
	 *
	 * @return     array ValidationFailed[]
	 * @see        validate()
	 */
	public function getValidationFailures()
	{
		return $this->validationFailures;
	}

	/**
	 * Validates the objects modified field values and all objects related to this table.
	 *
	 * If $columns is either a column name or an array of column names
	 * only those columns are validated.
	 *
	 * @param      mixed $columns Column name or an array of column names.
	 * @return     boolean Whether all columns pass validation.
	 * @see        doValidate()
	 * @see        getValidationFailures()
	 */
	public function validate($columns = null)
	{
		$res = $this->doValidate($columns);
		if ($res === true) {
			$this->validationFailures = array();
			return true;
		} else {
			$this->validationFailures = $res;
			return false;
		}
	}

	/**
	 * This function performs the validation work for complex object models.
	 *
	 * In addition to checking the current object, all related objects will
	 * also be validated.  If all pass then <code>true</code> is returned; otherwise
	 * an aggreagated array of ValidationFailed objects will be returned.
	 *
	 * @param      array $columns Array of column names to validate.
	 * @return     mixed <code>true</code> if all validations pass; array of <code>ValidationFailed</code> objets otherwise.
	 */
	protected function doValidate($columns = null)
	{
		if (!$this->alreadyInValidation) {
			$this->alreadyInValidation = true;
			$retval = null;

			$failureMap = array();


			if (($retval = Oops_Model_OrdersPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	/**
	 * Retrieves a field from the object by name passed in as a string.
	 *
	 * @param      string $name name
	 * @param      string $type The type of fieldname the $name is of:
	 *                     one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
	 *                     BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
	 * @return     mixed Value of field.
	 */
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = Oops_Model_OrdersPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		$field = $this->getByPosition($pos);
		return $field;
	}

	/**
	 * Retrieves a field from the object by Position as specified in the xml schema.
	 * Zero-based.
	 *
	 * @param      int $pos position in xml schema
	 * @return     mixed Value of field at $pos
	 */
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getIdOrder();
				break;
			case 1:
				return $this->getIdCarrier();
				break;
			case 2:
				return $this->getIdLang();
				break;
			case 3:
				return $this->getIdCustomer();
				break;
			case 4:
				return $this->getIdCart();
				break;
			case 5:
				return $this->getIdCurrency();
				break;
			case 6:
				return $this->getIdAddressDelivery();
				break;
			case 7:
				return $this->getIdAddressInvoice();
				break;
			case 8:
				return $this->getSecureKey();
				break;
			case 9:
				return $this->getPayment();
				break;
			case 10:
				return $this->getConversionRate();
				break;
			case 11:
				return $this->getModule();
				break;
			case 12:
				return $this->getRecyclable();
				break;
			case 13:
				return $this->getGift();
				break;
			case 14:
				return $this->getGiftMessage();
				break;
			case 15:
				return $this->getShippingNumber();
				break;
			case 16:
				return $this->getTotalDiscounts();
				break;
			case 17:
				return $this->getTotalPaid();
				break;
			case 18:
				return $this->getTotalPaidReal();
				break;
			case 19:
				return $this->getTotalProducts();
				break;
			case 20:
				return $this->getTotalProductsWt();
				break;
			case 21:
				return $this->getTotalShipping();
				break;
			case 22:
				return $this->getCarrierTaxRate();
				break;
			case 23:
				return $this->getTotalWrapping();
				break;
			case 24:
				return $this->getInvoiceNumber();
				break;
			case 25:
				return $this->getDeliveryNumber();
				break;
			case 26:
				return $this->getInvoiceDate();
				break;
			case 27:
				return $this->getDeliveryDate();
				break;
			case 28:
				return $this->getValid();
				break;
			case 29:
				return $this->getDateAdd();
				break;
			case 30:
				return $this->getDateUpd();
				break;
			default:
				return null;
				break;
		} // switch()
	}

	/**
	 * Exports the object as an array.
	 *
	 * You can specify the key type of the array by passing one of the class
	 * type constants.
	 *
	 * @param     string  $keyType (optional) One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME,
	 *                    BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
	 *                    Defaults to BasePeer::TYPE_PHPNAME.
	 * @param     boolean $includeLazyLoadColumns (optional) Whether to include lazy loaded columns. Defaults to TRUE.
	 * @param     array $alreadyDumpedObjects List of objects to skip to avoid recursion
	 *
	 * @return    array an associative array containing the field names (as keys) and field values
	 */
	public function toArray($keyType = BasePeer::TYPE_PHPNAME, $includeLazyLoadColumns = true, $alreadyDumpedObjects = array())
	{
		if (isset($alreadyDumpedObjects['Oops_Model_Orders'][$this->getPrimaryKey()])) {
			return '*RECURSION*';
		}
		$alreadyDumpedObjects['Oops_Model_Orders'][$this->getPrimaryKey()] = true;
		$keys = Oops_Model_OrdersPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getIdOrder(),
			$keys[1] => $this->getIdCarrier(),
			$keys[2] => $this->getIdLang(),
			$keys[3] => $this->getIdCustomer(),
			$keys[4] => $this->getIdCart(),
			$keys[5] => $this->getIdCurrency(),
			$keys[6] => $this->getIdAddressDelivery(),
			$keys[7] => $this->getIdAddressInvoice(),
			$keys[8] => $this->getSecureKey(),
			$keys[9] => $this->getPayment(),
			$keys[10] => $this->getConversionRate(),
			$keys[11] => $this->getModule(),
			$keys[12] => $this->getRecyclable(),
			$keys[13] => $this->getGift(),
			$keys[14] => $this->getGiftMessage(),
			$keys[15] => $this->getShippingNumber(),
			$keys[16] => $this->getTotalDiscounts(),
			$keys[17] => $this->getTotalPaid(),
			$keys[18] => $this->getTotalPaidReal(),
			$keys[19] => $this->getTotalProducts(),
			$keys[20] => $this->getTotalProductsWt(),
			$keys[21] => $this->getTotalShipping(),
			$keys[22] => $this->getCarrierTaxRate(),
			$keys[23] => $this->getTotalWrapping(),
			$keys[24] => $this->getInvoiceNumber(),
			$keys[25] => $this->getDeliveryNumber(),
			$keys[26] => $this->getInvoiceDate(),
			$keys[27] => $this->getDeliveryDate(),
			$keys[28] => $this->getValid(),
			$keys[29] => $this->getDateAdd(),
			$keys[30] => $this->getDateUpd(),
		);
		return $result;
	}

	/**
	 * Sets a field from the object by name passed in as a string.
	 *
	 * @param      string $name peer name
	 * @param      mixed $value field value
	 * @param      string $type The type of fieldname the $name is of:
	 *                     one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
	 *                     BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
	 * @return     void
	 */
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = Oops_Model_OrdersPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	/**
	 * Sets a field from the object by Position as specified in the xml schema.
	 * Zero-based.
	 *
	 * @param      int $pos position in xml schema
	 * @param      mixed $value field value
	 * @return     void
	 */
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setIdOrder($value);
				break;
			case 1:
				$this->setIdCarrier($value);
				break;
			case 2:
				$this->setIdLang($value);
				break;
			case 3:
				$this->setIdCustomer($value);
				break;
			case 4:
				$this->setIdCart($value);
				break;
			case 5:
				$this->setIdCurrency($value);
				break;
			case 6:
				$this->setIdAddressDelivery($value);
				break;
			case 7:
				$this->setIdAddressInvoice($value);
				break;
			case 8:
				$this->setSecureKey($value);
				break;
			case 9:
				$this->setPayment($value);
				break;
			case 10:
				$this->setConversionRate($value);
				break;
			case 11:
				$this->setModule($value);
				break;
			case 12:
				$this->setRecyclable($value);
				break;
			case 13:
				$this->setGift($value);
				break;
			case 14:
				$this->setGiftMessage($value);
				break;
			case 15:
				$this->setShippingNumber($value);
				break;
			case 16:
				$this->setTotalDiscounts($value);
				break;
			case 17:
				$this->setTotalPaid($value);
				break;
			case 18:
				$this->setTotalPaidReal($value);
				break;
			case 19:
				$this->setTotalProducts($value);
				break;
			case 20:
				$this->setTotalProductsWt($value);
				break;
			case 21:
				$this->setTotalShipping($value);
				break;
			case 22:
				$this->setCarrierTaxRate($value);
				break;
			case 23:
				$this->setTotalWrapping($value);
				break;
			case 24:
				$this->setInvoiceNumber($value);
				break;
			case 25:
				$this->setDeliveryNumber($value);
				break;
			case 26:
				$this->setInvoiceDate($value);
				break;
			case 27:
				$this->setDeliveryDate($value);
				break;
			case 28:
				$this->setValid($value);
				break;
			case 29:
				$this->setDateAdd($value);
				break;
			case 30:
				$this->setDateUpd($value);
				break;
		} // switch()
	}

	/**
	 * Populates the object using an array.
	 *
	 * This is particularly useful when populating an object from one of the
	 * request arrays (e.g. $_POST).  This method goes through the column
	 * names, checking to see whether a matching key exists in populated
	 * array. If so the setByName() method is called for that column.
	 *
	 * You can specify the key type of the array by additionally passing one
	 * of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME,
	 * BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
	 * The default key type is the column's phpname (e.g. 'AuthorId')
	 *
	 * @param      array  $arr     An array to populate the object from.
	 * @param      string $keyType The type of keys the array uses.
	 * @return     void
	 */
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = Oops_Model_OrdersPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setIdOrder($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setIdCarrier($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setIdLang($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setIdCustomer($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setIdCart($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setIdCurrency($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setIdAddressDelivery($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setIdAddressInvoice($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setSecureKey($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setPayment($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setConversionRate($arr[$keys[10]]);
		if (array_key_exists($keys[11], $arr)) $this->setModule($arr[$keys[11]]);
		if (array_key_exists($keys[12], $arr)) $this->setRecyclable($arr[$keys[12]]);
		if (array_key_exists($keys[13], $arr)) $this->setGift($arr[$keys[13]]);
		if (array_key_exists($keys[14], $arr)) $this->setGiftMessage($arr[$keys[14]]);
		if (array_key_exists($keys[15], $arr)) $this->setShippingNumber($arr[$keys[15]]);
		if (array_key_exists($keys[16], $arr)) $this->setTotalDiscounts($arr[$keys[16]]);
		if (array_key_exists($keys[17], $arr)) $this->setTotalPaid($arr[$keys[17]]);
		if (array_key_exists($keys[18], $arr)) $this->setTotalPaidReal($arr[$keys[18]]);
		if (array_key_exists($keys[19], $arr)) $this->setTotalProducts($arr[$keys[19]]);
		if (array_key_exists($keys[20], $arr)) $this->setTotalProductsWt($arr[$keys[20]]);
		if (array_key_exists($keys[21], $arr)) $this->setTotalShipping($arr[$keys[21]]);
		if (array_key_exists($keys[22], $arr)) $this->setCarrierTaxRate($arr[$keys[22]]);
		if (array_key_exists($keys[23], $arr)) $this->setTotalWrapping($arr[$keys[23]]);
		if (array_key_exists($keys[24], $arr)) $this->setInvoiceNumber($arr[$keys[24]]);
		if (array_key_exists($keys[25], $arr)) $this->setDeliveryNumber($arr[$keys[25]]);
		if (array_key_exists($keys[26], $arr)) $this->setInvoiceDate($arr[$keys[26]]);
		if (array_key_exists($keys[27], $arr)) $this->setDeliveryDate($arr[$keys[27]]);
		if (array_key_exists($keys[28], $arr)) $this->setValid($arr[$keys[28]]);
		if (array_key_exists($keys[29], $arr)) $this->setDateAdd($arr[$keys[29]]);
		if (array_key_exists($keys[30], $arr)) $this->setDateUpd($arr[$keys[30]]);
	}

	/**
	 * Build a Criteria object containing the values of all modified columns in this object.
	 *
	 * @return     Criteria The Criteria object containing all modified values.
	 */
	public function buildCriteria()
	{
		$criteria = new Criteria(Oops_Model_OrdersPeer::DATABASE_NAME);

		if ($this->isColumnModified(Oops_Model_OrdersPeer::ID_ORDER)) $criteria->add(Oops_Model_OrdersPeer::ID_ORDER, $this->id_order);
		if ($this->isColumnModified(Oops_Model_OrdersPeer::ID_CARRIER)) $criteria->add(Oops_Model_OrdersPeer::ID_CARRIER, $this->id_carrier);
		if ($this->isColumnModified(Oops_Model_OrdersPeer::ID_LANG)) $criteria->add(Oops_Model_OrdersPeer::ID_LANG, $this->id_lang);
		if ($this->isColumnModified(Oops_Model_OrdersPeer::ID_CUSTOMER)) $criteria->add(Oops_Model_OrdersPeer::ID_CUSTOMER, $this->id_customer);
		if ($this->isColumnModified(Oops_Model_OrdersPeer::ID_CART)) $criteria->add(Oops_Model_OrdersPeer::ID_CART, $this->id_cart);
		if ($this->isColumnModified(Oops_Model_OrdersPeer::ID_CURRENCY)) $criteria->add(Oops_Model_OrdersPeer::ID_CURRENCY, $this->id_currency);
		if ($this->isColumnModified(Oops_Model_OrdersPeer::ID_ADDRESS_DELIVERY)) $criteria->add(Oops_Model_OrdersPeer::ID_ADDRESS_DELIVERY, $this->id_address_delivery);
		if ($this->isColumnModified(Oops_Model_OrdersPeer::ID_ADDRESS_INVOICE)) $criteria->add(Oops_Model_OrdersPeer::ID_ADDRESS_INVOICE, $this->id_address_invoice);
		if ($this->isColumnModified(Oops_Model_OrdersPeer::SECURE_KEY)) $criteria->add(Oops_Model_OrdersPeer::SECURE_KEY, $this->secure_key);
		if ($this->isColumnModified(Oops_Model_OrdersPeer::PAYMENT)) $criteria->add(Oops_Model_OrdersPeer::PAYMENT, $this->payment);
		if ($this->isColumnModified(Oops_Model_OrdersPeer::CONVERSION_RATE)) $criteria->add(Oops_Model_OrdersPeer::CONVERSION_RATE, $this->conversion_rate);
		if ($this->isColumnModified(Oops_Model_OrdersPeer::MODULE)) $criteria->add(Oops_Model_OrdersPeer::MODULE, $this->module);
		if ($this->isColumnModified(Oops_Model_OrdersPeer::RECYCLABLE)) $criteria->add(Oops_Model_OrdersPeer::RECYCLABLE, $this->recyclable);
		if ($this->isColumnModified(Oops_Model_OrdersPeer::GIFT)) $criteria->add(Oops_Model_OrdersPeer::GIFT, $this->gift);
		if ($this->isColumnModified(Oops_Model_OrdersPeer::GIFT_MESSAGE)) $criteria->add(Oops_Model_OrdersPeer::GIFT_MESSAGE, $this->gift_message);
		if ($this->isColumnModified(Oops_Model_OrdersPeer::SHIPPING_NUMBER)) $criteria->add(Oops_Model_OrdersPeer::SHIPPING_NUMBER, $this->shipping_number);
		if ($this->isColumnModified(Oops_Model_OrdersPeer::TOTAL_DISCOUNTS)) $criteria->add(Oops_Model_OrdersPeer::TOTAL_DISCOUNTS, $this->total_discounts);
		if ($this->isColumnModified(Oops_Model_OrdersPeer::TOTAL_PAID)) $criteria->add(Oops_Model_OrdersPeer::TOTAL_PAID, $this->total_paid);
		if ($this->isColumnModified(Oops_Model_OrdersPeer::TOTAL_PAID_REAL)) $criteria->add(Oops_Model_OrdersPeer::TOTAL_PAID_REAL, $this->total_paid_real);
		if ($this->isColumnModified(Oops_Model_OrdersPeer::TOTAL_PRODUCTS)) $criteria->add(Oops_Model_OrdersPeer::TOTAL_PRODUCTS, $this->total_products);
		if ($this->isColumnModified(Oops_Model_OrdersPeer::TOTAL_PRODUCTS_WT)) $criteria->add(Oops_Model_OrdersPeer::TOTAL_PRODUCTS_WT, $this->total_products_wt);
		if ($this->isColumnModified(Oops_Model_OrdersPeer::TOTAL_SHIPPING)) $criteria->add(Oops_Model_OrdersPeer::TOTAL_SHIPPING, $this->total_shipping);
		if ($this->isColumnModified(Oops_Model_OrdersPeer::CARRIER_TAX_RATE)) $criteria->add(Oops_Model_OrdersPeer::CARRIER_TAX_RATE, $this->carrier_tax_rate);
		if ($this->isColumnModified(Oops_Model_OrdersPeer::TOTAL_WRAPPING)) $criteria->add(Oops_Model_OrdersPeer::TOTAL_WRAPPING, $this->total_wrapping);
		if ($this->isColumnModified(Oops_Model_OrdersPeer::INVOICE_NUMBER)) $criteria->add(Oops_Model_OrdersPeer::INVOICE_NUMBER, $this->invoice_number);
		if ($this->isColumnModified(Oops_Model_OrdersPeer::DELIVERY_NUMBER)) $criteria->add(Oops_Model_OrdersPeer::DELIVERY_NUMBER, $this->delivery_number);
		if ($this->isColumnModified(Oops_Model_OrdersPeer::INVOICE_DATE)) $criteria->add(Oops_Model_OrdersPeer::INVOICE_DATE, $this->invoice_date);
		if ($this->isColumnModified(Oops_Model_OrdersPeer::DELIVERY_DATE)) $criteria->add(Oops_Model_OrdersPeer::DELIVERY_DATE, $this->delivery_date);
		if ($this->isColumnModified(Oops_Model_OrdersPeer::VALID)) $criteria->add(Oops_Model_OrdersPeer::VALID, $this->valid);
		if ($this->isColumnModified(Oops_Model_OrdersPeer::DATE_ADD)) $criteria->add(Oops_Model_OrdersPeer::DATE_ADD, $this->date_add);
		if ($this->isColumnModified(Oops_Model_OrdersPeer::DATE_UPD)) $criteria->add(Oops_Model_OrdersPeer::DATE_UPD, $this->date_upd);

		return $criteria;
	}

	/**
	 * Builds a Criteria object containing the primary key for this object.
	 *
	 * Unlike buildCriteria() this method includes the primary key values regardless
	 * of whether or not they have been modified.
	 *
	 * @return     Criteria The Criteria object containing value(s) for primary key(s).
	 */
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(Oops_Model_OrdersPeer::DATABASE_NAME);
		$criteria->add(Oops_Model_OrdersPeer::ID_ORDER, $this->id_order);

		return $criteria;
	}

	/**
	 * Returns the primary key for this object (row).
	 * @return     int
	 */
	public function getPrimaryKey()
	{
		return $this->getIdOrder();
	}

	/**
	 * Generic method to set the primary key (id_order column).
	 *
	 * @param      int $key Primary key.
	 * @return     void
	 */
	public function setPrimaryKey($key)
	{
		$this->setIdOrder($key);
	}

	/**
	 * Returns true if the primary key for this object is null.
	 * @return     boolean
	 */
	public function isPrimaryKeyNull()
	{
		return null === $this->getIdOrder();
	}

	/**
	 * Sets contents of passed object to values from current object.
	 *
	 * If desired, this method can also make copies of all associated (fkey referrers)
	 * objects.
	 *
	 * @param      object $copyObj An object of Oops_Model_Orders (or compatible) type.
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
	 * @throws     PropelException
	 */
	public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
	{
		$copyObj->setIdCarrier($this->getIdCarrier());
		$copyObj->setIdLang($this->getIdLang());
		$copyObj->setIdCustomer($this->getIdCustomer());
		$copyObj->setIdCart($this->getIdCart());
		$copyObj->setIdCurrency($this->getIdCurrency());
		$copyObj->setIdAddressDelivery($this->getIdAddressDelivery());
		$copyObj->setIdAddressInvoice($this->getIdAddressInvoice());
		$copyObj->setSecureKey($this->getSecureKey());
		$copyObj->setPayment($this->getPayment());
		$copyObj->setConversionRate($this->getConversionRate());
		$copyObj->setModule($this->getModule());
		$copyObj->setRecyclable($this->getRecyclable());
		$copyObj->setGift($this->getGift());
		$copyObj->setGiftMessage($this->getGiftMessage());
		$copyObj->setShippingNumber($this->getShippingNumber());
		$copyObj->setTotalDiscounts($this->getTotalDiscounts());
		$copyObj->setTotalPaid($this->getTotalPaid());
		$copyObj->setTotalPaidReal($this->getTotalPaidReal());
		$copyObj->setTotalProducts($this->getTotalProducts());
		$copyObj->setTotalProductsWt($this->getTotalProductsWt());
		$copyObj->setTotalShipping($this->getTotalShipping());
		$copyObj->setCarrierTaxRate($this->getCarrierTaxRate());
		$copyObj->setTotalWrapping($this->getTotalWrapping());
		$copyObj->setInvoiceNumber($this->getInvoiceNumber());
		$copyObj->setDeliveryNumber($this->getDeliveryNumber());
		$copyObj->setInvoiceDate($this->getInvoiceDate());
		$copyObj->setDeliveryDate($this->getDeliveryDate());
		$copyObj->setValid($this->getValid());
		$copyObj->setDateAdd($this->getDateAdd());
		$copyObj->setDateUpd($this->getDateUpd());
		if ($makeNew) {
			$copyObj->setNew(true);
			$copyObj->setIdOrder(NULL); // this is a auto-increment column, so set to default value
		}
	}

	/**
	 * Makes a copy of this object that will be inserted as a new row in table when saved.
	 * It creates a new object filling in the simple attributes, but skipping any primary
	 * keys that are defined for the table.
	 *
	 * If desired, this method can also make copies of all associated (fkey referrers)
	 * objects.
	 *
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @return     Oops_Model_Orders Clone of current object.
	 * @throws     PropelException
	 */
	public function copy($deepCopy = false)
	{
		// we use get_class(), because this might be a subclass
		$clazz = get_class($this);
		$copyObj = new $clazz();
		$this->copyInto($copyObj, $deepCopy);
		return $copyObj;
	}

	/**
	 * Returns a peer instance associated with this om.
	 *
	 * Since Peer classes are not to have any instance attributes, this method returns the
	 * same instance for all member of this class. The method could therefore
	 * be static, but this would prevent one from overriding the behavior.
	 *
	 * @return     Oops_Model_OrdersPeer
	 */
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new Oops_Model_OrdersPeer();
		}
		return self::$peer;
	}

	/**
	 * Clears the current object and sets all attributes to their default values
	 */
	public function clear()
	{
		$this->id_order = null;
		$this->id_carrier = null;
		$this->id_lang = null;
		$this->id_customer = null;
		$this->id_cart = null;
		$this->id_currency = null;
		$this->id_address_delivery = null;
		$this->id_address_invoice = null;
		$this->secure_key = null;
		$this->payment = null;
		$this->conversion_rate = null;
		$this->module = null;
		$this->recyclable = null;
		$this->gift = null;
		$this->gift_message = null;
		$this->shipping_number = null;
		$this->total_discounts = null;
		$this->total_paid = null;
		$this->total_paid_real = null;
		$this->total_products = null;
		$this->total_products_wt = null;
		$this->total_shipping = null;
		$this->carrier_tax_rate = null;
		$this->total_wrapping = null;
		$this->invoice_number = null;
		$this->delivery_number = null;
		$this->invoice_date = null;
		$this->delivery_date = null;
		$this->valid = null;
		$this->date_add = null;
		$this->date_upd = null;
		$this->alreadyInSave = false;
		$this->alreadyInValidation = false;
		$this->clearAllReferences();
		$this->applyDefaultValues();
		$this->resetModified();
		$this->setNew(true);
		$this->setDeleted(false);
	}

	/**
	 * Resets all references to other model objects or collections of model objects.
	 *
	 * This method is a user-space workaround for PHP's inability to garbage collect
	 * objects with circular references (even in PHP 5.3). This is currently necessary
	 * when using Propel in certain daemon or large-volumne/high-memory operations.
	 *
	 * @param      boolean $deep Whether to also clear the references on all referrer objects.
	 */
	public function clearAllReferences($deep = false)
	{
		if ($deep) {
		} // if ($deep)

	}

	/**
	 * Return the string representation of this object
	 *
	 * @return string
	 */
	public function __toString()
	{
		return (string) $this->exportTo(Oops_Model_OrdersPeer::DEFAULT_STRING_FORMAT);
	}

} // Oops_Model_Base_Orders
