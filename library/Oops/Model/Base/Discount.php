<?php


/**
 * Base class that represents a row from the 'djland_discount' table.
 *
 * 
 *
 * @package    propel.generator.prestashop.om
 */
abstract class Oops_Model_Base_Discount extends BaseObject  implements Persistent
{

	/**
	 * Peer class name
	 */
	const PEER = 'Oops_Model_DiscountPeer';

	/**
	 * The Peer class.
	 * Instance provides a convenient way of calling static methods on a class
	 * that calling code may not be able to identify.
	 * @var        Oops_Model_DiscountPeer
	 */
	protected static $peer;

	/**
	 * The value for the id_discount field.
	 * @var        int
	 */
	protected $id_discount;

	/**
	 * The value for the id_discount_type field.
	 * @var        int
	 */
	protected $id_discount_type;

	/**
	 * The value for the behavior_not_exhausted field.
	 * Note: this column has a database default value of: 1
	 * @var        int
	 */
	protected $behavior_not_exhausted;

	/**
	 * The value for the id_customer field.
	 * @var        int
	 */
	protected $id_customer;

	/**
	 * The value for the id_group field.
	 * Note: this column has a database default value of: 0
	 * @var        int
	 */
	protected $id_group;

	/**
	 * The value for the id_currency field.
	 * Note: this column has a database default value of: 0
	 * @var        int
	 */
	protected $id_currency;

	/**
	 * The value for the name field.
	 * @var        string
	 */
	protected $name;

	/**
	 * The value for the value field.
	 * Note: this column has a database default value of: '0.00'
	 * @var        string
	 */
	protected $value;

	/**
	 * The value for the quantity field.
	 * Note: this column has a database default value of: 0
	 * @var        int
	 */
	protected $quantity;

	/**
	 * The value for the quantity_per_user field.
	 * Note: this column has a database default value of: 1
	 * @var        int
	 */
	protected $quantity_per_user;

	/**
	 * The value for the cumulable field.
	 * Note: this column has a database default value of: false
	 * @var        boolean
	 */
	protected $cumulable;

	/**
	 * The value for the cumulable_reduction field.
	 * Note: this column has a database default value of: false
	 * @var        boolean
	 */
	protected $cumulable_reduction;

	/**
	 * The value for the date_from field.
	 * @var        string
	 */
	protected $date_from;

	/**
	 * The value for the date_to field.
	 * @var        string
	 */
	protected $date_to;

	/**
	 * The value for the minimal field.
	 * @var        string
	 */
	protected $minimal;

	/**
	 * The value for the active field.
	 * Note: this column has a database default value of: false
	 * @var        boolean
	 */
	protected $active;

	/**
	 * The value for the cart_display field.
	 * Note: this column has a database default value of: false
	 * @var        boolean
	 */
	protected $cart_display;

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
		$this->behavior_not_exhausted = 1;
		$this->id_group = 0;
		$this->id_currency = 0;
		$this->value = '0.00';
		$this->quantity = 0;
		$this->quantity_per_user = 1;
		$this->cumulable = false;
		$this->cumulable_reduction = false;
		$this->active = false;
		$this->cart_display = false;
	}

	/**
	 * Initializes internal state of Oops_Model_Base_Discount object.
	 * @see        applyDefaults()
	 */
	public function __construct()
	{
		parent::__construct();
		$this->applyDefaultValues();
	}

	/**
	 * Get the [id_discount] column value.
	 * 
	 * @return     int
	 */
	public function getIdDiscount()
	{
		return $this->id_discount;
	}

	/**
	 * Get the [id_discount_type] column value.
	 * 
	 * @return     int
	 */
	public function getIdDiscountType()
	{
		return $this->id_discount_type;
	}

	/**
	 * Get the [behavior_not_exhausted] column value.
	 * 
	 * @return     int
	 */
	public function getBehaviorNotExhausted()
	{
		return $this->behavior_not_exhausted;
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
	 * Get the [id_group] column value.
	 * 
	 * @return     int
	 */
	public function getIdGroup()
	{
		return $this->id_group;
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
	 * Get the [name] column value.
	 * 
	 * @return     string
	 */
	public function getName()
	{
		return $this->name;
	}

	/**
	 * Get the [value] column value.
	 * 
	 * @return     string
	 */
	public function getValue()
	{
		return $this->value;
	}

	/**
	 * Get the [quantity] column value.
	 * 
	 * @return     int
	 */
	public function getQuantity()
	{
		return $this->quantity;
	}

	/**
	 * Get the [quantity_per_user] column value.
	 * 
	 * @return     int
	 */
	public function getQuantityPerUser()
	{
		return $this->quantity_per_user;
	}

	/**
	 * Get the [cumulable] column value.
	 * 
	 * @return     boolean
	 */
	public function getCumulable()
	{
		return $this->cumulable;
	}

	/**
	 * Get the [cumulable_reduction] column value.
	 * 
	 * @return     boolean
	 */
	public function getCumulableReduction()
	{
		return $this->cumulable_reduction;
	}

	/**
	 * Get the [optionally formatted] temporal [date_from] column value.
	 * 
	 *
	 * @param      string $format The date/time format string (either date()-style or strftime()-style).
	 *							If format is NULL, then the raw DateTime object will be returned.
	 * @return     mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00 00:00:00
	 * @throws     PropelException - if unable to parse/validate the date/time value.
	 */
	public function getDateFrom($format = 'Y-m-d H:i:s')
	{
		if ($this->date_from === null) {
			return null;
		}


		if ($this->date_from === '0000-00-00 00:00:00') {
			// while technically this is not a default value of NULL,
			// this seems to be closest in meaning.
			return null;
		} else {
			try {
				$dt = new DateTime($this->date_from);
			} catch (Exception $x) {
				throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->date_from, true), $x);
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
	 * Get the [optionally formatted] temporal [date_to] column value.
	 * 
	 *
	 * @param      string $format The date/time format string (either date()-style or strftime()-style).
	 *							If format is NULL, then the raw DateTime object will be returned.
	 * @return     mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00 00:00:00
	 * @throws     PropelException - if unable to parse/validate the date/time value.
	 */
	public function getDateTo($format = 'Y-m-d H:i:s')
	{
		if ($this->date_to === null) {
			return null;
		}


		if ($this->date_to === '0000-00-00 00:00:00') {
			// while technically this is not a default value of NULL,
			// this seems to be closest in meaning.
			return null;
		} else {
			try {
				$dt = new DateTime($this->date_to);
			} catch (Exception $x) {
				throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->date_to, true), $x);
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
	 * Get the [minimal] column value.
	 * 
	 * @return     string
	 */
	public function getMinimal()
	{
		return $this->minimal;
	}

	/**
	 * Get the [active] column value.
	 * 
	 * @return     boolean
	 */
	public function getActive()
	{
		return $this->active;
	}

	/**
	 * Get the [cart_display] column value.
	 * 
	 * @return     boolean
	 */
	public function getCartDisplay()
	{
		return $this->cart_display;
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
	 * Set the value of [id_discount] column.
	 * 
	 * @param      int $v new value
	 * @return     Oops_Model_Discount The current object (for fluent API support)
	 */
	public function setIdDiscount($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->id_discount !== $v) {
			$this->id_discount = $v;
			$this->modifiedColumns[] = Oops_Model_DiscountPeer::ID_DISCOUNT;
		}

		return $this;
	} // setIdDiscount()

	/**
	 * Set the value of [id_discount_type] column.
	 * 
	 * @param      int $v new value
	 * @return     Oops_Model_Discount The current object (for fluent API support)
	 */
	public function setIdDiscountType($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->id_discount_type !== $v) {
			$this->id_discount_type = $v;
			$this->modifiedColumns[] = Oops_Model_DiscountPeer::ID_DISCOUNT_TYPE;
		}

		return $this;
	} // setIdDiscountType()

	/**
	 * Set the value of [behavior_not_exhausted] column.
	 * 
	 * @param      int $v new value
	 * @return     Oops_Model_Discount The current object (for fluent API support)
	 */
	public function setBehaviorNotExhausted($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->behavior_not_exhausted !== $v) {
			$this->behavior_not_exhausted = $v;
			$this->modifiedColumns[] = Oops_Model_DiscountPeer::BEHAVIOR_NOT_EXHAUSTED;
		}

		return $this;
	} // setBehaviorNotExhausted()

	/**
	 * Set the value of [id_customer] column.
	 * 
	 * @param      int $v new value
	 * @return     Oops_Model_Discount The current object (for fluent API support)
	 */
	public function setIdCustomer($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->id_customer !== $v) {
			$this->id_customer = $v;
			$this->modifiedColumns[] = Oops_Model_DiscountPeer::ID_CUSTOMER;
		}

		return $this;
	} // setIdCustomer()

	/**
	 * Set the value of [id_group] column.
	 * 
	 * @param      int $v new value
	 * @return     Oops_Model_Discount The current object (for fluent API support)
	 */
	public function setIdGroup($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->id_group !== $v) {
			$this->id_group = $v;
			$this->modifiedColumns[] = Oops_Model_DiscountPeer::ID_GROUP;
		}

		return $this;
	} // setIdGroup()

	/**
	 * Set the value of [id_currency] column.
	 * 
	 * @param      int $v new value
	 * @return     Oops_Model_Discount The current object (for fluent API support)
	 */
	public function setIdCurrency($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->id_currency !== $v) {
			$this->id_currency = $v;
			$this->modifiedColumns[] = Oops_Model_DiscountPeer::ID_CURRENCY;
		}

		return $this;
	} // setIdCurrency()

	/**
	 * Set the value of [name] column.
	 * 
	 * @param      string $v new value
	 * @return     Oops_Model_Discount The current object (for fluent API support)
	 */
	public function setName($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->name !== $v) {
			$this->name = $v;
			$this->modifiedColumns[] = Oops_Model_DiscountPeer::NAME;
		}

		return $this;
	} // setName()

	/**
	 * Set the value of [value] column.
	 * 
	 * @param      string $v new value
	 * @return     Oops_Model_Discount The current object (for fluent API support)
	 */
	public function setValue($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->value !== $v) {
			$this->value = $v;
			$this->modifiedColumns[] = Oops_Model_DiscountPeer::VALUE;
		}

		return $this;
	} // setValue()

	/**
	 * Set the value of [quantity] column.
	 * 
	 * @param      int $v new value
	 * @return     Oops_Model_Discount The current object (for fluent API support)
	 */
	public function setQuantity($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->quantity !== $v) {
			$this->quantity = $v;
			$this->modifiedColumns[] = Oops_Model_DiscountPeer::QUANTITY;
		}

		return $this;
	} // setQuantity()

	/**
	 * Set the value of [quantity_per_user] column.
	 * 
	 * @param      int $v new value
	 * @return     Oops_Model_Discount The current object (for fluent API support)
	 */
	public function setQuantityPerUser($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->quantity_per_user !== $v) {
			$this->quantity_per_user = $v;
			$this->modifiedColumns[] = Oops_Model_DiscountPeer::QUANTITY_PER_USER;
		}

		return $this;
	} // setQuantityPerUser()

	/**
	 * Sets the value of the [cumulable] column.
	 * Non-boolean arguments are converted using the following rules:
	 *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * 
	 * @param      boolean|integer|string $v The new value
	 * @return     Oops_Model_Discount The current object (for fluent API support)
	 */
	public function setCumulable($v)
	{
		if ($v !== null) {
			if (is_string($v)) {
				$v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
			} else {
				$v = (boolean) $v;
			}
		}

		if ($this->cumulable !== $v) {
			$this->cumulable = $v;
			$this->modifiedColumns[] = Oops_Model_DiscountPeer::CUMULABLE;
		}

		return $this;
	} // setCumulable()

	/**
	 * Sets the value of the [cumulable_reduction] column.
	 * Non-boolean arguments are converted using the following rules:
	 *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * 
	 * @param      boolean|integer|string $v The new value
	 * @return     Oops_Model_Discount The current object (for fluent API support)
	 */
	public function setCumulableReduction($v)
	{
		if ($v !== null) {
			if (is_string($v)) {
				$v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
			} else {
				$v = (boolean) $v;
			}
		}

		if ($this->cumulable_reduction !== $v) {
			$this->cumulable_reduction = $v;
			$this->modifiedColumns[] = Oops_Model_DiscountPeer::CUMULABLE_REDUCTION;
		}

		return $this;
	} // setCumulableReduction()

	/**
	 * Sets the value of [date_from] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.
	 *               Empty strings are treated as NULL.
	 * @return     Oops_Model_Discount The current object (for fluent API support)
	 */
	public function setDateFrom($v)
	{
		$dt = PropelDateTime::newInstance($v, null, 'DateTime');
		if ($this->date_from !== null || $dt !== null) {
			$currentDateAsString = ($this->date_from !== null && $tmpDt = new DateTime($this->date_from)) ? $tmpDt->format('Y-m-d H:i:s') : null;
			$newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
			if ($currentDateAsString !== $newDateAsString) {
				$this->date_from = $newDateAsString;
				$this->modifiedColumns[] = Oops_Model_DiscountPeer::DATE_FROM;
			}
		} // if either are not null

		return $this;
	} // setDateFrom()

	/**
	 * Sets the value of [date_to] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.
	 *               Empty strings are treated as NULL.
	 * @return     Oops_Model_Discount The current object (for fluent API support)
	 */
	public function setDateTo($v)
	{
		$dt = PropelDateTime::newInstance($v, null, 'DateTime');
		if ($this->date_to !== null || $dt !== null) {
			$currentDateAsString = ($this->date_to !== null && $tmpDt = new DateTime($this->date_to)) ? $tmpDt->format('Y-m-d H:i:s') : null;
			$newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
			if ($currentDateAsString !== $newDateAsString) {
				$this->date_to = $newDateAsString;
				$this->modifiedColumns[] = Oops_Model_DiscountPeer::DATE_TO;
			}
		} // if either are not null

		return $this;
	} // setDateTo()

	/**
	 * Set the value of [minimal] column.
	 * 
	 * @param      string $v new value
	 * @return     Oops_Model_Discount The current object (for fluent API support)
	 */
	public function setMinimal($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->minimal !== $v) {
			$this->minimal = $v;
			$this->modifiedColumns[] = Oops_Model_DiscountPeer::MINIMAL;
		}

		return $this;
	} // setMinimal()

	/**
	 * Sets the value of the [active] column.
	 * Non-boolean arguments are converted using the following rules:
	 *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * 
	 * @param      boolean|integer|string $v The new value
	 * @return     Oops_Model_Discount The current object (for fluent API support)
	 */
	public function setActive($v)
	{
		if ($v !== null) {
			if (is_string($v)) {
				$v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
			} else {
				$v = (boolean) $v;
			}
		}

		if ($this->active !== $v) {
			$this->active = $v;
			$this->modifiedColumns[] = Oops_Model_DiscountPeer::ACTIVE;
		}

		return $this;
	} // setActive()

	/**
	 * Sets the value of the [cart_display] column.
	 * Non-boolean arguments are converted using the following rules:
	 *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * 
	 * @param      boolean|integer|string $v The new value
	 * @return     Oops_Model_Discount The current object (for fluent API support)
	 */
	public function setCartDisplay($v)
	{
		if ($v !== null) {
			if (is_string($v)) {
				$v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
			} else {
				$v = (boolean) $v;
			}
		}

		if ($this->cart_display !== $v) {
			$this->cart_display = $v;
			$this->modifiedColumns[] = Oops_Model_DiscountPeer::CART_DISPLAY;
		}

		return $this;
	} // setCartDisplay()

	/**
	 * Sets the value of [date_add] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.
	 *               Empty strings are treated as NULL.
	 * @return     Oops_Model_Discount The current object (for fluent API support)
	 */
	public function setDateAdd($v)
	{
		$dt = PropelDateTime::newInstance($v, null, 'DateTime');
		if ($this->date_add !== null || $dt !== null) {
			$currentDateAsString = ($this->date_add !== null && $tmpDt = new DateTime($this->date_add)) ? $tmpDt->format('Y-m-d H:i:s') : null;
			$newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
			if ($currentDateAsString !== $newDateAsString) {
				$this->date_add = $newDateAsString;
				$this->modifiedColumns[] = Oops_Model_DiscountPeer::DATE_ADD;
			}
		} // if either are not null

		return $this;
	} // setDateAdd()

	/**
	 * Sets the value of [date_upd] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.
	 *               Empty strings are treated as NULL.
	 * @return     Oops_Model_Discount The current object (for fluent API support)
	 */
	public function setDateUpd($v)
	{
		$dt = PropelDateTime::newInstance($v, null, 'DateTime');
		if ($this->date_upd !== null || $dt !== null) {
			$currentDateAsString = ($this->date_upd !== null && $tmpDt = new DateTime($this->date_upd)) ? $tmpDt->format('Y-m-d H:i:s') : null;
			$newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
			if ($currentDateAsString !== $newDateAsString) {
				$this->date_upd = $newDateAsString;
				$this->modifiedColumns[] = Oops_Model_DiscountPeer::DATE_UPD;
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
			if ($this->behavior_not_exhausted !== 1) {
				return false;
			}

			if ($this->id_group !== 0) {
				return false;
			}

			if ($this->id_currency !== 0) {
				return false;
			}

			if ($this->value !== '0.00') {
				return false;
			}

			if ($this->quantity !== 0) {
				return false;
			}

			if ($this->quantity_per_user !== 1) {
				return false;
			}

			if ($this->cumulable !== false) {
				return false;
			}

			if ($this->cumulable_reduction !== false) {
				return false;
			}

			if ($this->active !== false) {
				return false;
			}

			if ($this->cart_display !== false) {
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

			$this->id_discount = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
			$this->id_discount_type = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
			$this->behavior_not_exhausted = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
			$this->id_customer = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
			$this->id_group = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
			$this->id_currency = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
			$this->name = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
			$this->value = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
			$this->quantity = ($row[$startcol + 8] !== null) ? (int) $row[$startcol + 8] : null;
			$this->quantity_per_user = ($row[$startcol + 9] !== null) ? (int) $row[$startcol + 9] : null;
			$this->cumulable = ($row[$startcol + 10] !== null) ? (boolean) $row[$startcol + 10] : null;
			$this->cumulable_reduction = ($row[$startcol + 11] !== null) ? (boolean) $row[$startcol + 11] : null;
			$this->date_from = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
			$this->date_to = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
			$this->minimal = ($row[$startcol + 14] !== null) ? (string) $row[$startcol + 14] : null;
			$this->active = ($row[$startcol + 15] !== null) ? (boolean) $row[$startcol + 15] : null;
			$this->cart_display = ($row[$startcol + 16] !== null) ? (boolean) $row[$startcol + 16] : null;
			$this->date_add = ($row[$startcol + 17] !== null) ? (string) $row[$startcol + 17] : null;
			$this->date_upd = ($row[$startcol + 18] !== null) ? (string) $row[$startcol + 18] : null;
			$this->resetModified();

			$this->setNew(false);

			if ($rehydrate) {
				$this->ensureConsistency();
			}

			return $startcol + 19; // 19 = Oops_Model_DiscountPeer::NUM_HYDRATE_COLUMNS.

		} catch (Exception $e) {
			throw new PropelException("Error populating Oops_Model_Discount object", $e);
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
			$con = Propel::getConnection(Oops_Model_DiscountPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		// We don't need to alter the object instance pool; we're just modifying this instance
		// already in the pool.

		$stmt = Oops_Model_DiscountPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
			$con = Propel::getConnection(Oops_Model_DiscountPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$con->beginTransaction();
		try {
			$deleteQuery = Oops_Model_DiscountQuery::create()
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
			$con = Propel::getConnection(Oops_Model_DiscountPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
				Oops_Model_DiscountPeer::addInstanceToPool($this);
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

		$this->modifiedColumns[] = Oops_Model_DiscountPeer::ID_DISCOUNT;
		if (null !== $this->id_discount) {
			throw new PropelException('Cannot insert a value for auto-increment primary key (' . Oops_Model_DiscountPeer::ID_DISCOUNT . ')');
		}

		 // check the columns in natural order for more readable SQL queries
		if ($this->isColumnModified(Oops_Model_DiscountPeer::ID_DISCOUNT)) {
			$modifiedColumns[':p' . $index++]  = '`ID_DISCOUNT`';
		}
		if ($this->isColumnModified(Oops_Model_DiscountPeer::ID_DISCOUNT_TYPE)) {
			$modifiedColumns[':p' . $index++]  = '`ID_DISCOUNT_TYPE`';
		}
		if ($this->isColumnModified(Oops_Model_DiscountPeer::BEHAVIOR_NOT_EXHAUSTED)) {
			$modifiedColumns[':p' . $index++]  = '`BEHAVIOR_NOT_EXHAUSTED`';
		}
		if ($this->isColumnModified(Oops_Model_DiscountPeer::ID_CUSTOMER)) {
			$modifiedColumns[':p' . $index++]  = '`ID_CUSTOMER`';
		}
		if ($this->isColumnModified(Oops_Model_DiscountPeer::ID_GROUP)) {
			$modifiedColumns[':p' . $index++]  = '`ID_GROUP`';
		}
		if ($this->isColumnModified(Oops_Model_DiscountPeer::ID_CURRENCY)) {
			$modifiedColumns[':p' . $index++]  = '`ID_CURRENCY`';
		}
		if ($this->isColumnModified(Oops_Model_DiscountPeer::NAME)) {
			$modifiedColumns[':p' . $index++]  = '`NAME`';
		}
		if ($this->isColumnModified(Oops_Model_DiscountPeer::VALUE)) {
			$modifiedColumns[':p' . $index++]  = '`VALUE`';
		}
		if ($this->isColumnModified(Oops_Model_DiscountPeer::QUANTITY)) {
			$modifiedColumns[':p' . $index++]  = '`QUANTITY`';
		}
		if ($this->isColumnModified(Oops_Model_DiscountPeer::QUANTITY_PER_USER)) {
			$modifiedColumns[':p' . $index++]  = '`QUANTITY_PER_USER`';
		}
		if ($this->isColumnModified(Oops_Model_DiscountPeer::CUMULABLE)) {
			$modifiedColumns[':p' . $index++]  = '`CUMULABLE`';
		}
		if ($this->isColumnModified(Oops_Model_DiscountPeer::CUMULABLE_REDUCTION)) {
			$modifiedColumns[':p' . $index++]  = '`CUMULABLE_REDUCTION`';
		}
		if ($this->isColumnModified(Oops_Model_DiscountPeer::DATE_FROM)) {
			$modifiedColumns[':p' . $index++]  = '`DATE_FROM`';
		}
		if ($this->isColumnModified(Oops_Model_DiscountPeer::DATE_TO)) {
			$modifiedColumns[':p' . $index++]  = '`DATE_TO`';
		}
		if ($this->isColumnModified(Oops_Model_DiscountPeer::MINIMAL)) {
			$modifiedColumns[':p' . $index++]  = '`MINIMAL`';
		}
		if ($this->isColumnModified(Oops_Model_DiscountPeer::ACTIVE)) {
			$modifiedColumns[':p' . $index++]  = '`ACTIVE`';
		}
		if ($this->isColumnModified(Oops_Model_DiscountPeer::CART_DISPLAY)) {
			$modifiedColumns[':p' . $index++]  = '`CART_DISPLAY`';
		}
		if ($this->isColumnModified(Oops_Model_DiscountPeer::DATE_ADD)) {
			$modifiedColumns[':p' . $index++]  = '`DATE_ADD`';
		}
		if ($this->isColumnModified(Oops_Model_DiscountPeer::DATE_UPD)) {
			$modifiedColumns[':p' . $index++]  = '`DATE_UPD`';
		}

		$sql = sprintf(
			'INSERT INTO `djland_discount` (%s) VALUES (%s)',
			implode(', ', $modifiedColumns),
			implode(', ', array_keys($modifiedColumns))
		);

		try {
			$stmt = $con->prepare($sql);
			foreach ($modifiedColumns as $identifier => $columnName) {
				switch ($columnName) {
					case '`ID_DISCOUNT`':
						$stmt->bindValue($identifier, $this->id_discount, PDO::PARAM_INT);
						break;
					case '`ID_DISCOUNT_TYPE`':
						$stmt->bindValue($identifier, $this->id_discount_type, PDO::PARAM_INT);
						break;
					case '`BEHAVIOR_NOT_EXHAUSTED`':
						$stmt->bindValue($identifier, $this->behavior_not_exhausted, PDO::PARAM_INT);
						break;
					case '`ID_CUSTOMER`':
						$stmt->bindValue($identifier, $this->id_customer, PDO::PARAM_INT);
						break;
					case '`ID_GROUP`':
						$stmt->bindValue($identifier, $this->id_group, PDO::PARAM_INT);
						break;
					case '`ID_CURRENCY`':
						$stmt->bindValue($identifier, $this->id_currency, PDO::PARAM_INT);
						break;
					case '`NAME`':
						$stmt->bindValue($identifier, $this->name, PDO::PARAM_STR);
						break;
					case '`VALUE`':
						$stmt->bindValue($identifier, $this->value, PDO::PARAM_STR);
						break;
					case '`QUANTITY`':
						$stmt->bindValue($identifier, $this->quantity, PDO::PARAM_INT);
						break;
					case '`QUANTITY_PER_USER`':
						$stmt->bindValue($identifier, $this->quantity_per_user, PDO::PARAM_INT);
						break;
					case '`CUMULABLE`':
						$stmt->bindValue($identifier, (int) $this->cumulable, PDO::PARAM_INT);
						break;
					case '`CUMULABLE_REDUCTION`':
						$stmt->bindValue($identifier, (int) $this->cumulable_reduction, PDO::PARAM_INT);
						break;
					case '`DATE_FROM`':
						$stmt->bindValue($identifier, $this->date_from, PDO::PARAM_STR);
						break;
					case '`DATE_TO`':
						$stmt->bindValue($identifier, $this->date_to, PDO::PARAM_STR);
						break;
					case '`MINIMAL`':
						$stmt->bindValue($identifier, $this->minimal, PDO::PARAM_STR);
						break;
					case '`ACTIVE`':
						$stmt->bindValue($identifier, (int) $this->active, PDO::PARAM_INT);
						break;
					case '`CART_DISPLAY`':
						$stmt->bindValue($identifier, (int) $this->cart_display, PDO::PARAM_INT);
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
		$this->setIdDiscount($pk);

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


			if (($retval = Oops_Model_DiscountPeer::doValidate($this, $columns)) !== true) {
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
		$pos = Oops_Model_DiscountPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getIdDiscount();
				break;
			case 1:
				return $this->getIdDiscountType();
				break;
			case 2:
				return $this->getBehaviorNotExhausted();
				break;
			case 3:
				return $this->getIdCustomer();
				break;
			case 4:
				return $this->getIdGroup();
				break;
			case 5:
				return $this->getIdCurrency();
				break;
			case 6:
				return $this->getName();
				break;
			case 7:
				return $this->getValue();
				break;
			case 8:
				return $this->getQuantity();
				break;
			case 9:
				return $this->getQuantityPerUser();
				break;
			case 10:
				return $this->getCumulable();
				break;
			case 11:
				return $this->getCumulableReduction();
				break;
			case 12:
				return $this->getDateFrom();
				break;
			case 13:
				return $this->getDateTo();
				break;
			case 14:
				return $this->getMinimal();
				break;
			case 15:
				return $this->getActive();
				break;
			case 16:
				return $this->getCartDisplay();
				break;
			case 17:
				return $this->getDateAdd();
				break;
			case 18:
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
		if (isset($alreadyDumpedObjects['Oops_Model_Discount'][$this->getPrimaryKey()])) {
			return '*RECURSION*';
		}
		$alreadyDumpedObjects['Oops_Model_Discount'][$this->getPrimaryKey()] = true;
		$keys = Oops_Model_DiscountPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getIdDiscount(),
			$keys[1] => $this->getIdDiscountType(),
			$keys[2] => $this->getBehaviorNotExhausted(),
			$keys[3] => $this->getIdCustomer(),
			$keys[4] => $this->getIdGroup(),
			$keys[5] => $this->getIdCurrency(),
			$keys[6] => $this->getName(),
			$keys[7] => $this->getValue(),
			$keys[8] => $this->getQuantity(),
			$keys[9] => $this->getQuantityPerUser(),
			$keys[10] => $this->getCumulable(),
			$keys[11] => $this->getCumulableReduction(),
			$keys[12] => $this->getDateFrom(),
			$keys[13] => $this->getDateTo(),
			$keys[14] => $this->getMinimal(),
			$keys[15] => $this->getActive(),
			$keys[16] => $this->getCartDisplay(),
			$keys[17] => $this->getDateAdd(),
			$keys[18] => $this->getDateUpd(),
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
		$pos = Oops_Model_DiscountPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setIdDiscount($value);
				break;
			case 1:
				$this->setIdDiscountType($value);
				break;
			case 2:
				$this->setBehaviorNotExhausted($value);
				break;
			case 3:
				$this->setIdCustomer($value);
				break;
			case 4:
				$this->setIdGroup($value);
				break;
			case 5:
				$this->setIdCurrency($value);
				break;
			case 6:
				$this->setName($value);
				break;
			case 7:
				$this->setValue($value);
				break;
			case 8:
				$this->setQuantity($value);
				break;
			case 9:
				$this->setQuantityPerUser($value);
				break;
			case 10:
				$this->setCumulable($value);
				break;
			case 11:
				$this->setCumulableReduction($value);
				break;
			case 12:
				$this->setDateFrom($value);
				break;
			case 13:
				$this->setDateTo($value);
				break;
			case 14:
				$this->setMinimal($value);
				break;
			case 15:
				$this->setActive($value);
				break;
			case 16:
				$this->setCartDisplay($value);
				break;
			case 17:
				$this->setDateAdd($value);
				break;
			case 18:
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
		$keys = Oops_Model_DiscountPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setIdDiscount($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setIdDiscountType($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setBehaviorNotExhausted($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setIdCustomer($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setIdGroup($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setIdCurrency($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setName($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setValue($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setQuantity($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setQuantityPerUser($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setCumulable($arr[$keys[10]]);
		if (array_key_exists($keys[11], $arr)) $this->setCumulableReduction($arr[$keys[11]]);
		if (array_key_exists($keys[12], $arr)) $this->setDateFrom($arr[$keys[12]]);
		if (array_key_exists($keys[13], $arr)) $this->setDateTo($arr[$keys[13]]);
		if (array_key_exists($keys[14], $arr)) $this->setMinimal($arr[$keys[14]]);
		if (array_key_exists($keys[15], $arr)) $this->setActive($arr[$keys[15]]);
		if (array_key_exists($keys[16], $arr)) $this->setCartDisplay($arr[$keys[16]]);
		if (array_key_exists($keys[17], $arr)) $this->setDateAdd($arr[$keys[17]]);
		if (array_key_exists($keys[18], $arr)) $this->setDateUpd($arr[$keys[18]]);
	}

	/**
	 * Build a Criteria object containing the values of all modified columns in this object.
	 *
	 * @return     Criteria The Criteria object containing all modified values.
	 */
	public function buildCriteria()
	{
		$criteria = new Criteria(Oops_Model_DiscountPeer::DATABASE_NAME);

		if ($this->isColumnModified(Oops_Model_DiscountPeer::ID_DISCOUNT)) $criteria->add(Oops_Model_DiscountPeer::ID_DISCOUNT, $this->id_discount);
		if ($this->isColumnModified(Oops_Model_DiscountPeer::ID_DISCOUNT_TYPE)) $criteria->add(Oops_Model_DiscountPeer::ID_DISCOUNT_TYPE, $this->id_discount_type);
		if ($this->isColumnModified(Oops_Model_DiscountPeer::BEHAVIOR_NOT_EXHAUSTED)) $criteria->add(Oops_Model_DiscountPeer::BEHAVIOR_NOT_EXHAUSTED, $this->behavior_not_exhausted);
		if ($this->isColumnModified(Oops_Model_DiscountPeer::ID_CUSTOMER)) $criteria->add(Oops_Model_DiscountPeer::ID_CUSTOMER, $this->id_customer);
		if ($this->isColumnModified(Oops_Model_DiscountPeer::ID_GROUP)) $criteria->add(Oops_Model_DiscountPeer::ID_GROUP, $this->id_group);
		if ($this->isColumnModified(Oops_Model_DiscountPeer::ID_CURRENCY)) $criteria->add(Oops_Model_DiscountPeer::ID_CURRENCY, $this->id_currency);
		if ($this->isColumnModified(Oops_Model_DiscountPeer::NAME)) $criteria->add(Oops_Model_DiscountPeer::NAME, $this->name);
		if ($this->isColumnModified(Oops_Model_DiscountPeer::VALUE)) $criteria->add(Oops_Model_DiscountPeer::VALUE, $this->value);
		if ($this->isColumnModified(Oops_Model_DiscountPeer::QUANTITY)) $criteria->add(Oops_Model_DiscountPeer::QUANTITY, $this->quantity);
		if ($this->isColumnModified(Oops_Model_DiscountPeer::QUANTITY_PER_USER)) $criteria->add(Oops_Model_DiscountPeer::QUANTITY_PER_USER, $this->quantity_per_user);
		if ($this->isColumnModified(Oops_Model_DiscountPeer::CUMULABLE)) $criteria->add(Oops_Model_DiscountPeer::CUMULABLE, $this->cumulable);
		if ($this->isColumnModified(Oops_Model_DiscountPeer::CUMULABLE_REDUCTION)) $criteria->add(Oops_Model_DiscountPeer::CUMULABLE_REDUCTION, $this->cumulable_reduction);
		if ($this->isColumnModified(Oops_Model_DiscountPeer::DATE_FROM)) $criteria->add(Oops_Model_DiscountPeer::DATE_FROM, $this->date_from);
		if ($this->isColumnModified(Oops_Model_DiscountPeer::DATE_TO)) $criteria->add(Oops_Model_DiscountPeer::DATE_TO, $this->date_to);
		if ($this->isColumnModified(Oops_Model_DiscountPeer::MINIMAL)) $criteria->add(Oops_Model_DiscountPeer::MINIMAL, $this->minimal);
		if ($this->isColumnModified(Oops_Model_DiscountPeer::ACTIVE)) $criteria->add(Oops_Model_DiscountPeer::ACTIVE, $this->active);
		if ($this->isColumnModified(Oops_Model_DiscountPeer::CART_DISPLAY)) $criteria->add(Oops_Model_DiscountPeer::CART_DISPLAY, $this->cart_display);
		if ($this->isColumnModified(Oops_Model_DiscountPeer::DATE_ADD)) $criteria->add(Oops_Model_DiscountPeer::DATE_ADD, $this->date_add);
		if ($this->isColumnModified(Oops_Model_DiscountPeer::DATE_UPD)) $criteria->add(Oops_Model_DiscountPeer::DATE_UPD, $this->date_upd);

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
		$criteria = new Criteria(Oops_Model_DiscountPeer::DATABASE_NAME);
		$criteria->add(Oops_Model_DiscountPeer::ID_DISCOUNT, $this->id_discount);

		return $criteria;
	}

	/**
	 * Returns the primary key for this object (row).
	 * @return     int
	 */
	public function getPrimaryKey()
	{
		return $this->getIdDiscount();
	}

	/**
	 * Generic method to set the primary key (id_discount column).
	 *
	 * @param      int $key Primary key.
	 * @return     void
	 */
	public function setPrimaryKey($key)
	{
		$this->setIdDiscount($key);
	}

	/**
	 * Returns true if the primary key for this object is null.
	 * @return     boolean
	 */
	public function isPrimaryKeyNull()
	{
		return null === $this->getIdDiscount();
	}

	/**
	 * Sets contents of passed object to values from current object.
	 *
	 * If desired, this method can also make copies of all associated (fkey referrers)
	 * objects.
	 *
	 * @param      object $copyObj An object of Oops_Model_Discount (or compatible) type.
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
	 * @throws     PropelException
	 */
	public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
	{
		$copyObj->setIdDiscountType($this->getIdDiscountType());
		$copyObj->setBehaviorNotExhausted($this->getBehaviorNotExhausted());
		$copyObj->setIdCustomer($this->getIdCustomer());
		$copyObj->setIdGroup($this->getIdGroup());
		$copyObj->setIdCurrency($this->getIdCurrency());
		$copyObj->setName($this->getName());
		$copyObj->setValue($this->getValue());
		$copyObj->setQuantity($this->getQuantity());
		$copyObj->setQuantityPerUser($this->getQuantityPerUser());
		$copyObj->setCumulable($this->getCumulable());
		$copyObj->setCumulableReduction($this->getCumulableReduction());
		$copyObj->setDateFrom($this->getDateFrom());
		$copyObj->setDateTo($this->getDateTo());
		$copyObj->setMinimal($this->getMinimal());
		$copyObj->setActive($this->getActive());
		$copyObj->setCartDisplay($this->getCartDisplay());
		$copyObj->setDateAdd($this->getDateAdd());
		$copyObj->setDateUpd($this->getDateUpd());
		if ($makeNew) {
			$copyObj->setNew(true);
			$copyObj->setIdDiscount(NULL); // this is a auto-increment column, so set to default value
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
	 * @return     Oops_Model_Discount Clone of current object.
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
	 * @return     Oops_Model_DiscountPeer
	 */
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new Oops_Model_DiscountPeer();
		}
		return self::$peer;
	}

	/**
	 * Clears the current object and sets all attributes to their default values
	 */
	public function clear()
	{
		$this->id_discount = null;
		$this->id_discount_type = null;
		$this->behavior_not_exhausted = null;
		$this->id_customer = null;
		$this->id_group = null;
		$this->id_currency = null;
		$this->name = null;
		$this->value = null;
		$this->quantity = null;
		$this->quantity_per_user = null;
		$this->cumulable = null;
		$this->cumulable_reduction = null;
		$this->date_from = null;
		$this->date_to = null;
		$this->minimal = null;
		$this->active = null;
		$this->cart_display = null;
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
		return (string) $this->exportTo(Oops_Model_DiscountPeer::DEFAULT_STRING_FORMAT);
	}

} // Oops_Model_Base_Discount
