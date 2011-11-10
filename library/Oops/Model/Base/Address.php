<?php


/**
 * Base class that represents a row from the 'address' table.
 *
 * 
 *
 * @package    propel.generator.prestashop.om
 */
abstract class Oops_Model_Base_Address extends BaseObject  implements Persistent
{

	/**
	 * Peer class name
	 */
	const PEER = 'Oops_Model_AddressPeer';

	/**
	 * The Peer class.
	 * Instance provides a convenient way of calling static methods on a class
	 * that calling code may not be able to identify.
	 * @var        Oops_Model_AddressPeer
	 */
	protected static $peer;

	/**
	 * The value for the id_address field.
	 * @var        int
	 */
	protected $id_address;

	/**
	 * The value for the id_country field.
	 * @var        int
	 */
	protected $id_country;

	/**
	 * The value for the id_state field.
	 * @var        int
	 */
	protected $id_state;

	/**
	 * The value for the id_customer field.
	 * Note: this column has a database default value of: 0
	 * @var        int
	 */
	protected $id_customer;

	/**
	 * The value for the id_manufacturer field.
	 * Note: this column has a database default value of: 0
	 * @var        int
	 */
	protected $id_manufacturer;

	/**
	 * The value for the id_supplier field.
	 * Note: this column has a database default value of: 0
	 * @var        int
	 */
	protected $id_supplier;

	/**
	 * The value for the alias field.
	 * @var        string
	 */
	protected $alias;

	/**
	 * The value for the company field.
	 * @var        string
	 */
	protected $company;

	/**
	 * The value for the lastname field.
	 * @var        string
	 */
	protected $lastname;

	/**
	 * The value for the firstname field.
	 * @var        string
	 */
	protected $firstname;

	/**
	 * The value for the address1 field.
	 * @var        string
	 */
	protected $address1;

	/**
	 * The value for the address2 field.
	 * @var        string
	 */
	protected $address2;

	/**
	 * The value for the postcode field.
	 * @var        string
	 */
	protected $postcode;

	/**
	 * The value for the city field.
	 * @var        string
	 */
	protected $city;

	/**
	 * The value for the other field.
	 * @var        string
	 */
	protected $other;

	/**
	 * The value for the phone field.
	 * @var        string
	 */
	protected $phone;

	/**
	 * The value for the phone_mobile field.
	 * @var        string
	 */
	protected $phone_mobile;

	/**
	 * The value for the vat_number field.
	 * @var        string
	 */
	protected $vat_number;

	/**
	 * The value for the dni field.
	 * @var        string
	 */
	protected $dni;

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
	 * The value for the active field.
	 * Note: this column has a database default value of: true
	 * @var        boolean
	 */
	protected $active;

	/**
	 * The value for the deleted field.
	 * Note: this column has a database default value of: false
	 * @var        boolean
	 */
	protected $deleted;

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
		$this->id_customer = 0;
		$this->id_manufacturer = 0;
		$this->id_supplier = 0;
		$this->active = true;
		$this->deleted = false;
	}

	/**
	 * Initializes internal state of Oops_Model_Base_Address object.
	 * @see        applyDefaults()
	 */
	public function __construct()
	{
		parent::__construct();
		$this->applyDefaultValues();
	}

	/**
	 * Get the [id_address] column value.
	 * 
	 * @return     int
	 */
	public function getIdAddress()
	{
		return $this->id_address;
	}

	/**
	 * Get the [id_country] column value.
	 * 
	 * @return     int
	 */
	public function getIdCountry()
	{
		return $this->id_country;
	}

	/**
	 * Get the [id_state] column value.
	 * 
	 * @return     int
	 */
	public function getIdState()
	{
		return $this->id_state;
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
	 * Get the [id_manufacturer] column value.
	 * 
	 * @return     int
	 */
	public function getIdManufacturer()
	{
		return $this->id_manufacturer;
	}

	/**
	 * Get the [id_supplier] column value.
	 * 
	 * @return     int
	 */
	public function getIdSupplier()
	{
		return $this->id_supplier;
	}

	/**
	 * Get the [alias] column value.
	 * 
	 * @return     string
	 */
	public function getAlias()
	{
		return $this->alias;
	}

	/**
	 * Get the [company] column value.
	 * 
	 * @return     string
	 */
	public function getCompany()
	{
		return $this->company;
	}

	/**
	 * Get the [lastname] column value.
	 * 
	 * @return     string
	 */
	public function getLastname()
	{
		return $this->lastname;
	}

	/**
	 * Get the [firstname] column value.
	 * 
	 * @return     string
	 */
	public function getFirstname()
	{
		return $this->firstname;
	}

	/**
	 * Get the [address1] column value.
	 * 
	 * @return     string
	 */
	public function getAddress1()
	{
		return $this->address1;
	}

	/**
	 * Get the [address2] column value.
	 * 
	 * @return     string
	 */
	public function getAddress2()
	{
		return $this->address2;
	}

	/**
	 * Get the [postcode] column value.
	 * 
	 * @return     string
	 */
	public function getPostcode()
	{
		return $this->postcode;
	}

	/**
	 * Get the [city] column value.
	 * 
	 * @return     string
	 */
	public function getCity()
	{
		return $this->city;
	}

	/**
	 * Get the [other] column value.
	 * 
	 * @return     string
	 */
	public function getOther()
	{
		return $this->other;
	}

	/**
	 * Get the [phone] column value.
	 * 
	 * @return     string
	 */
	public function getPhone()
	{
		return $this->phone;
	}

	/**
	 * Get the [phone_mobile] column value.
	 * 
	 * @return     string
	 */
	public function getPhoneMobile()
	{
		return $this->phone_mobile;
	}

	/**
	 * Get the [vat_number] column value.
	 * 
	 * @return     string
	 */
	public function getVatNumber()
	{
		return $this->vat_number;
	}

	/**
	 * Get the [dni] column value.
	 * 
	 * @return     string
	 */
	public function getDni()
	{
		return $this->dni;
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
	 * Get the [active] column value.
	 * 
	 * @return     boolean
	 */
	public function getActive()
	{
		return $this->active;
	}

	/**
	 * Get the [deleted] column value.
	 * 
	 * @return     boolean
	 */
	public function getDeleted()
	{
		return $this->deleted;
	}

	/**
	 * Set the value of [id_address] column.
	 * 
	 * @param      int $v new value
	 * @return     Oops_Model_Address The current object (for fluent API support)
	 */
	public function setIdAddress($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->id_address !== $v) {
			$this->id_address = $v;
			$this->modifiedColumns[] = Oops_Model_AddressPeer::ID_ADDRESS;
		}

		return $this;
	} // setIdAddress()

	/**
	 * Set the value of [id_country] column.
	 * 
	 * @param      int $v new value
	 * @return     Oops_Model_Address The current object (for fluent API support)
	 */
	public function setIdCountry($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->id_country !== $v) {
			$this->id_country = $v;
			$this->modifiedColumns[] = Oops_Model_AddressPeer::ID_COUNTRY;
		}

		return $this;
	} // setIdCountry()

	/**
	 * Set the value of [id_state] column.
	 * 
	 * @param      int $v new value
	 * @return     Oops_Model_Address The current object (for fluent API support)
	 */
	public function setIdState($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->id_state !== $v) {
			$this->id_state = $v;
			$this->modifiedColumns[] = Oops_Model_AddressPeer::ID_STATE;
		}

		return $this;
	} // setIdState()

	/**
	 * Set the value of [id_customer] column.
	 * 
	 * @param      int $v new value
	 * @return     Oops_Model_Address The current object (for fluent API support)
	 */
	public function setIdCustomer($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->id_customer !== $v) {
			$this->id_customer = $v;
			$this->modifiedColumns[] = Oops_Model_AddressPeer::ID_CUSTOMER;
		}

		return $this;
	} // setIdCustomer()

	/**
	 * Set the value of [id_manufacturer] column.
	 * 
	 * @param      int $v new value
	 * @return     Oops_Model_Address The current object (for fluent API support)
	 */
	public function setIdManufacturer($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->id_manufacturer !== $v) {
			$this->id_manufacturer = $v;
			$this->modifiedColumns[] = Oops_Model_AddressPeer::ID_MANUFACTURER;
		}

		return $this;
	} // setIdManufacturer()

	/**
	 * Set the value of [id_supplier] column.
	 * 
	 * @param      int $v new value
	 * @return     Oops_Model_Address The current object (for fluent API support)
	 */
	public function setIdSupplier($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->id_supplier !== $v) {
			$this->id_supplier = $v;
			$this->modifiedColumns[] = Oops_Model_AddressPeer::ID_SUPPLIER;
		}

		return $this;
	} // setIdSupplier()

	/**
	 * Set the value of [alias] column.
	 * 
	 * @param      string $v new value
	 * @return     Oops_Model_Address The current object (for fluent API support)
	 */
	public function setAlias($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->alias !== $v) {
			$this->alias = $v;
			$this->modifiedColumns[] = Oops_Model_AddressPeer::ALIAS;
		}

		return $this;
	} // setAlias()

	/**
	 * Set the value of [company] column.
	 * 
	 * @param      string $v new value
	 * @return     Oops_Model_Address The current object (for fluent API support)
	 */
	public function setCompany($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->company !== $v) {
			$this->company = $v;
			$this->modifiedColumns[] = Oops_Model_AddressPeer::COMPANY;
		}

		return $this;
	} // setCompany()

	/**
	 * Set the value of [lastname] column.
	 * 
	 * @param      string $v new value
	 * @return     Oops_Model_Address The current object (for fluent API support)
	 */
	public function setLastname($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->lastname !== $v) {
			$this->lastname = $v;
			$this->modifiedColumns[] = Oops_Model_AddressPeer::LASTNAME;
		}

		return $this;
	} // setLastname()

	/**
	 * Set the value of [firstname] column.
	 * 
	 * @param      string $v new value
	 * @return     Oops_Model_Address The current object (for fluent API support)
	 */
	public function setFirstname($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->firstname !== $v) {
			$this->firstname = $v;
			$this->modifiedColumns[] = Oops_Model_AddressPeer::FIRSTNAME;
		}

		return $this;
	} // setFirstname()

	/**
	 * Set the value of [address1] column.
	 * 
	 * @param      string $v new value
	 * @return     Oops_Model_Address The current object (for fluent API support)
	 */
	public function setAddress1($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->address1 !== $v) {
			$this->address1 = $v;
			$this->modifiedColumns[] = Oops_Model_AddressPeer::ADDRESS1;
		}

		return $this;
	} // setAddress1()

	/**
	 * Set the value of [address2] column.
	 * 
	 * @param      string $v new value
	 * @return     Oops_Model_Address The current object (for fluent API support)
	 */
	public function setAddress2($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->address2 !== $v) {
			$this->address2 = $v;
			$this->modifiedColumns[] = Oops_Model_AddressPeer::ADDRESS2;
		}

		return $this;
	} // setAddress2()

	/**
	 * Set the value of [postcode] column.
	 * 
	 * @param      string $v new value
	 * @return     Oops_Model_Address The current object (for fluent API support)
	 */
	public function setPostcode($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->postcode !== $v) {
			$this->postcode = $v;
			$this->modifiedColumns[] = Oops_Model_AddressPeer::POSTCODE;
		}

		return $this;
	} // setPostcode()

	/**
	 * Set the value of [city] column.
	 * 
	 * @param      string $v new value
	 * @return     Oops_Model_Address The current object (for fluent API support)
	 */
	public function setCity($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->city !== $v) {
			$this->city = $v;
			$this->modifiedColumns[] = Oops_Model_AddressPeer::CITY;
		}

		return $this;
	} // setCity()

	/**
	 * Set the value of [other] column.
	 * 
	 * @param      string $v new value
	 * @return     Oops_Model_Address The current object (for fluent API support)
	 */
	public function setOther($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->other !== $v) {
			$this->other = $v;
			$this->modifiedColumns[] = Oops_Model_AddressPeer::OTHER;
		}

		return $this;
	} // setOther()

	/**
	 * Set the value of [phone] column.
	 * 
	 * @param      string $v new value
	 * @return     Oops_Model_Address The current object (for fluent API support)
	 */
	public function setPhone($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->phone !== $v) {
			$this->phone = $v;
			$this->modifiedColumns[] = Oops_Model_AddressPeer::PHONE;
		}

		return $this;
	} // setPhone()

	/**
	 * Set the value of [phone_mobile] column.
	 * 
	 * @param      string $v new value
	 * @return     Oops_Model_Address The current object (for fluent API support)
	 */
	public function setPhoneMobile($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->phone_mobile !== $v) {
			$this->phone_mobile = $v;
			$this->modifiedColumns[] = Oops_Model_AddressPeer::PHONE_MOBILE;
		}

		return $this;
	} // setPhoneMobile()

	/**
	 * Set the value of [vat_number] column.
	 * 
	 * @param      string $v new value
	 * @return     Oops_Model_Address The current object (for fluent API support)
	 */
	public function setVatNumber($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->vat_number !== $v) {
			$this->vat_number = $v;
			$this->modifiedColumns[] = Oops_Model_AddressPeer::VAT_NUMBER;
		}

		return $this;
	} // setVatNumber()

	/**
	 * Set the value of [dni] column.
	 * 
	 * @param      string $v new value
	 * @return     Oops_Model_Address The current object (for fluent API support)
	 */
	public function setDni($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->dni !== $v) {
			$this->dni = $v;
			$this->modifiedColumns[] = Oops_Model_AddressPeer::DNI;
		}

		return $this;
	} // setDni()

	/**
	 * Sets the value of [date_add] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.
	 *               Empty strings are treated as NULL.
	 * @return     Oops_Model_Address The current object (for fluent API support)
	 */
	public function setDateAdd($v)
	{
		$dt = PropelDateTime::newInstance($v, null, 'DateTime');
		if ($this->date_add !== null || $dt !== null) {
			$currentDateAsString = ($this->date_add !== null && $tmpDt = new DateTime($this->date_add)) ? $tmpDt->format('Y-m-d H:i:s') : null;
			$newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
			if ($currentDateAsString !== $newDateAsString) {
				$this->date_add = $newDateAsString;
				$this->modifiedColumns[] = Oops_Model_AddressPeer::DATE_ADD;
			}
		} // if either are not null

		return $this;
	} // setDateAdd()

	/**
	 * Sets the value of [date_upd] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.
	 *               Empty strings are treated as NULL.
	 * @return     Oops_Model_Address The current object (for fluent API support)
	 */
	public function setDateUpd($v)
	{
		$dt = PropelDateTime::newInstance($v, null, 'DateTime');
		if ($this->date_upd !== null || $dt !== null) {
			$currentDateAsString = ($this->date_upd !== null && $tmpDt = new DateTime($this->date_upd)) ? $tmpDt->format('Y-m-d H:i:s') : null;
			$newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
			if ($currentDateAsString !== $newDateAsString) {
				$this->date_upd = $newDateAsString;
				$this->modifiedColumns[] = Oops_Model_AddressPeer::DATE_UPD;
			}
		} // if either are not null

		return $this;
	} // setDateUpd()

	/**
	 * Sets the value of the [active] column.
	 * Non-boolean arguments are converted using the following rules:
	 *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * 
	 * @param      boolean|integer|string $v The new value
	 * @return     Oops_Model_Address The current object (for fluent API support)
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
			$this->modifiedColumns[] = Oops_Model_AddressPeer::ACTIVE;
		}

		return $this;
	} // setActive()

	/**
	 * Sets the value of the [deleted] column.
	 * Non-boolean arguments are converted using the following rules:
	 *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * 
	 * @param      boolean|integer|string $v The new value
	 * @return     Oops_Model_Address The current object (for fluent API support)
	 */
	public function setDeleted($v)
	{
		if ($v !== null) {
			if (is_string($v)) {
				$v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
			} else {
				$v = (boolean) $v;
			}
		}

		if ($this->deleted !== $v) {
			$this->deleted = $v;
			$this->modifiedColumns[] = Oops_Model_AddressPeer::DELETED;
		}

		return $this;
	} // setDeleted()

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
			if ($this->id_customer !== 0) {
				return false;
			}

			if ($this->id_manufacturer !== 0) {
				return false;
			}

			if ($this->id_supplier !== 0) {
				return false;
			}

			if ($this->active !== true) {
				return false;
			}

			if ($this->deleted !== false) {
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

			$this->id_address = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
			$this->id_country = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
			$this->id_state = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
			$this->id_customer = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
			$this->id_manufacturer = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
			$this->id_supplier = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
			$this->alias = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
			$this->company = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
			$this->lastname = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
			$this->firstname = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
			$this->address1 = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
			$this->address2 = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
			$this->postcode = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
			$this->city = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
			$this->other = ($row[$startcol + 14] !== null) ? (string) $row[$startcol + 14] : null;
			$this->phone = ($row[$startcol + 15] !== null) ? (string) $row[$startcol + 15] : null;
			$this->phone_mobile = ($row[$startcol + 16] !== null) ? (string) $row[$startcol + 16] : null;
			$this->vat_number = ($row[$startcol + 17] !== null) ? (string) $row[$startcol + 17] : null;
			$this->dni = ($row[$startcol + 18] !== null) ? (string) $row[$startcol + 18] : null;
			$this->date_add = ($row[$startcol + 19] !== null) ? (string) $row[$startcol + 19] : null;
			$this->date_upd = ($row[$startcol + 20] !== null) ? (string) $row[$startcol + 20] : null;
			$this->active = ($row[$startcol + 21] !== null) ? (boolean) $row[$startcol + 21] : null;
			$this->deleted = ($row[$startcol + 22] !== null) ? (boolean) $row[$startcol + 22] : null;
			$this->resetModified();

			$this->setNew(false);

			if ($rehydrate) {
				$this->ensureConsistency();
			}

			return $startcol + 23; // 23 = Oops_Model_AddressPeer::NUM_HYDRATE_COLUMNS.

		} catch (Exception $e) {
			throw new PropelException("Error populating Oops_Model_Address object", $e);
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
			$con = Propel::getConnection(Oops_Model_AddressPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		// We don't need to alter the object instance pool; we're just modifying this instance
		// already in the pool.

		$stmt = Oops_Model_AddressPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
			$con = Propel::getConnection(Oops_Model_AddressPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$con->beginTransaction();
		try {
			$deleteQuery = Oops_Model_AddressQuery::create()
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
			$con = Propel::getConnection(Oops_Model_AddressPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
				Oops_Model_AddressPeer::addInstanceToPool($this);
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

		$this->modifiedColumns[] = Oops_Model_AddressPeer::ID_ADDRESS;
		if (null !== $this->id_address) {
			throw new PropelException('Cannot insert a value for auto-increment primary key (' . Oops_Model_AddressPeer::ID_ADDRESS . ')');
		}

		 // check the columns in natural order for more readable SQL queries
		if ($this->isColumnModified(Oops_Model_AddressPeer::ID_ADDRESS)) {
			$modifiedColumns[':p' . $index++]  = '`ID_ADDRESS`';
		}
		if ($this->isColumnModified(Oops_Model_AddressPeer::ID_COUNTRY)) {
			$modifiedColumns[':p' . $index++]  = '`ID_COUNTRY`';
		}
		if ($this->isColumnModified(Oops_Model_AddressPeer::ID_STATE)) {
			$modifiedColumns[':p' . $index++]  = '`ID_STATE`';
		}
		if ($this->isColumnModified(Oops_Model_AddressPeer::ID_CUSTOMER)) {
			$modifiedColumns[':p' . $index++]  = '`ID_CUSTOMER`';
		}
		if ($this->isColumnModified(Oops_Model_AddressPeer::ID_MANUFACTURER)) {
			$modifiedColumns[':p' . $index++]  = '`ID_MANUFACTURER`';
		}
		if ($this->isColumnModified(Oops_Model_AddressPeer::ID_SUPPLIER)) {
			$modifiedColumns[':p' . $index++]  = '`ID_SUPPLIER`';
		}
		if ($this->isColumnModified(Oops_Model_AddressPeer::ALIAS)) {
			$modifiedColumns[':p' . $index++]  = '`ALIAS`';
		}
		if ($this->isColumnModified(Oops_Model_AddressPeer::COMPANY)) {
			$modifiedColumns[':p' . $index++]  = '`COMPANY`';
		}
		if ($this->isColumnModified(Oops_Model_AddressPeer::LASTNAME)) {
			$modifiedColumns[':p' . $index++]  = '`LASTNAME`';
		}
		if ($this->isColumnModified(Oops_Model_AddressPeer::FIRSTNAME)) {
			$modifiedColumns[':p' . $index++]  = '`FIRSTNAME`';
		}
		if ($this->isColumnModified(Oops_Model_AddressPeer::ADDRESS1)) {
			$modifiedColumns[':p' . $index++]  = '`ADDRESS1`';
		}
		if ($this->isColumnModified(Oops_Model_AddressPeer::ADDRESS2)) {
			$modifiedColumns[':p' . $index++]  = '`ADDRESS2`';
		}
		if ($this->isColumnModified(Oops_Model_AddressPeer::POSTCODE)) {
			$modifiedColumns[':p' . $index++]  = '`POSTCODE`';
		}
		if ($this->isColumnModified(Oops_Model_AddressPeer::CITY)) {
			$modifiedColumns[':p' . $index++]  = '`CITY`';
		}
		if ($this->isColumnModified(Oops_Model_AddressPeer::OTHER)) {
			$modifiedColumns[':p' . $index++]  = '`OTHER`';
		}
		if ($this->isColumnModified(Oops_Model_AddressPeer::PHONE)) {
			$modifiedColumns[':p' . $index++]  = '`PHONE`';
		}
		if ($this->isColumnModified(Oops_Model_AddressPeer::PHONE_MOBILE)) {
			$modifiedColumns[':p' . $index++]  = '`PHONE_MOBILE`';
		}
		if ($this->isColumnModified(Oops_Model_AddressPeer::VAT_NUMBER)) {
			$modifiedColumns[':p' . $index++]  = '`VAT_NUMBER`';
		}
		if ($this->isColumnModified(Oops_Model_AddressPeer::DNI)) {
			$modifiedColumns[':p' . $index++]  = '`DNI`';
		}
		if ($this->isColumnModified(Oops_Model_AddressPeer::DATE_ADD)) {
			$modifiedColumns[':p' . $index++]  = '`DATE_ADD`';
		}
		if ($this->isColumnModified(Oops_Model_AddressPeer::DATE_UPD)) {
			$modifiedColumns[':p' . $index++]  = '`DATE_UPD`';
		}
		if ($this->isColumnModified(Oops_Model_AddressPeer::ACTIVE)) {
			$modifiedColumns[':p' . $index++]  = '`ACTIVE`';
		}
		if ($this->isColumnModified(Oops_Model_AddressPeer::DELETED)) {
			$modifiedColumns[':p' . $index++]  = '`DELETED`';
		}

		$sql = sprintf(
			'INSERT INTO `' .  _DB_PREFIX_ . 'address` (%s) VALUES (%s)',
			implode(', ', $modifiedColumns),
			implode(', ', array_keys($modifiedColumns))
		);

		try {
			$stmt = $con->prepare($sql);
			foreach ($modifiedColumns as $identifier => $columnName) {
				switch ($columnName) {
					case '`ID_ADDRESS`':
						$stmt->bindValue($identifier, $this->id_address, PDO::PARAM_INT);
						break;
					case '`ID_COUNTRY`':
						$stmt->bindValue($identifier, $this->id_country, PDO::PARAM_INT);
						break;
					case '`ID_STATE`':
						$stmt->bindValue($identifier, $this->id_state, PDO::PARAM_INT);
						break;
					case '`ID_CUSTOMER`':
						$stmt->bindValue($identifier, $this->id_customer, PDO::PARAM_INT);
						break;
					case '`ID_MANUFACTURER`':
						$stmt->bindValue($identifier, $this->id_manufacturer, PDO::PARAM_INT);
						break;
					case '`ID_SUPPLIER`':
						$stmt->bindValue($identifier, $this->id_supplier, PDO::PARAM_INT);
						break;
					case '`ALIAS`':
						$stmt->bindValue($identifier, $this->alias, PDO::PARAM_STR);
						break;
					case '`COMPANY`':
						$stmt->bindValue($identifier, $this->company, PDO::PARAM_STR);
						break;
					case '`LASTNAME`':
						$stmt->bindValue($identifier, $this->lastname, PDO::PARAM_STR);
						break;
					case '`FIRSTNAME`':
						$stmt->bindValue($identifier, $this->firstname, PDO::PARAM_STR);
						break;
					case '`ADDRESS1`':
						$stmt->bindValue($identifier, $this->address1, PDO::PARAM_STR);
						break;
					case '`ADDRESS2`':
						$stmt->bindValue($identifier, $this->address2, PDO::PARAM_STR);
						break;
					case '`POSTCODE`':
						$stmt->bindValue($identifier, $this->postcode, PDO::PARAM_STR);
						break;
					case '`CITY`':
						$stmt->bindValue($identifier, $this->city, PDO::PARAM_STR);
						break;
					case '`OTHER`':
						$stmt->bindValue($identifier, $this->other, PDO::PARAM_STR);
						break;
					case '`PHONE`':
						$stmt->bindValue($identifier, $this->phone, PDO::PARAM_STR);
						break;
					case '`PHONE_MOBILE`':
						$stmt->bindValue($identifier, $this->phone_mobile, PDO::PARAM_STR);
						break;
					case '`VAT_NUMBER`':
						$stmt->bindValue($identifier, $this->vat_number, PDO::PARAM_STR);
						break;
					case '`DNI`':
						$stmt->bindValue($identifier, $this->dni, PDO::PARAM_STR);
						break;
					case '`DATE_ADD`':
						$stmt->bindValue($identifier, $this->date_add, PDO::PARAM_STR);
						break;
					case '`DATE_UPD`':
						$stmt->bindValue($identifier, $this->date_upd, PDO::PARAM_STR);
						break;
					case '`ACTIVE`':
						$stmt->bindValue($identifier, (int) $this->active, PDO::PARAM_INT);
						break;
					case '`DELETED`':
						$stmt->bindValue($identifier, (int) $this->deleted, PDO::PARAM_INT);
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
		$this->setIdAddress($pk);

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


			if (($retval = Oops_Model_AddressPeer::doValidate($this, $columns)) !== true) {
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
		$pos = Oops_Model_AddressPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getIdAddress();
				break;
			case 1:
				return $this->getIdCountry();
				break;
			case 2:
				return $this->getIdState();
				break;
			case 3:
				return $this->getIdCustomer();
				break;
			case 4:
				return $this->getIdManufacturer();
				break;
			case 5:
				return $this->getIdSupplier();
				break;
			case 6:
				return $this->getAlias();
				break;
			case 7:
				return $this->getCompany();
				break;
			case 8:
				return $this->getLastname();
				break;
			case 9:
				return $this->getFirstname();
				break;
			case 10:
				return $this->getAddress1();
				break;
			case 11:
				return $this->getAddress2();
				break;
			case 12:
				return $this->getPostcode();
				break;
			case 13:
				return $this->getCity();
				break;
			case 14:
				return $this->getOther();
				break;
			case 15:
				return $this->getPhone();
				break;
			case 16:
				return $this->getPhoneMobile();
				break;
			case 17:
				return $this->getVatNumber();
				break;
			case 18:
				return $this->getDni();
				break;
			case 19:
				return $this->getDateAdd();
				break;
			case 20:
				return $this->getDateUpd();
				break;
			case 21:
				return $this->getActive();
				break;
			case 22:
				return $this->getDeleted();
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
		if (isset($alreadyDumpedObjects['Oops_Model_Address'][$this->getPrimaryKey()])) {
			return '*RECURSION*';
		}
		$alreadyDumpedObjects['Oops_Model_Address'][$this->getPrimaryKey()] = true;
		$keys = Oops_Model_AddressPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getIdAddress(),
			$keys[1] => $this->getIdCountry(),
			$keys[2] => $this->getIdState(),
			$keys[3] => $this->getIdCustomer(),
			$keys[4] => $this->getIdManufacturer(),
			$keys[5] => $this->getIdSupplier(),
			$keys[6] => $this->getAlias(),
			$keys[7] => $this->getCompany(),
			$keys[8] => $this->getLastname(),
			$keys[9] => $this->getFirstname(),
			$keys[10] => $this->getAddress1(),
			$keys[11] => $this->getAddress2(),
			$keys[12] => $this->getPostcode(),
			$keys[13] => $this->getCity(),
			$keys[14] => $this->getOther(),
			$keys[15] => $this->getPhone(),
			$keys[16] => $this->getPhoneMobile(),
			$keys[17] => $this->getVatNumber(),
			$keys[18] => $this->getDni(),
			$keys[19] => $this->getDateAdd(),
			$keys[20] => $this->getDateUpd(),
			$keys[21] => $this->getActive(),
			$keys[22] => $this->getDeleted(),
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
		$pos = Oops_Model_AddressPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setIdAddress($value);
				break;
			case 1:
				$this->setIdCountry($value);
				break;
			case 2:
				$this->setIdState($value);
				break;
			case 3:
				$this->setIdCustomer($value);
				break;
			case 4:
				$this->setIdManufacturer($value);
				break;
			case 5:
				$this->setIdSupplier($value);
				break;
			case 6:
				$this->setAlias($value);
				break;
			case 7:
				$this->setCompany($value);
				break;
			case 8:
				$this->setLastname($value);
				break;
			case 9:
				$this->setFirstname($value);
				break;
			case 10:
				$this->setAddress1($value);
				break;
			case 11:
				$this->setAddress2($value);
				break;
			case 12:
				$this->setPostcode($value);
				break;
			case 13:
				$this->setCity($value);
				break;
			case 14:
				$this->setOther($value);
				break;
			case 15:
				$this->setPhone($value);
				break;
			case 16:
				$this->setPhoneMobile($value);
				break;
			case 17:
				$this->setVatNumber($value);
				break;
			case 18:
				$this->setDni($value);
				break;
			case 19:
				$this->setDateAdd($value);
				break;
			case 20:
				$this->setDateUpd($value);
				break;
			case 21:
				$this->setActive($value);
				break;
			case 22:
				$this->setDeleted($value);
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
		$keys = Oops_Model_AddressPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setIdAddress($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setIdCountry($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setIdState($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setIdCustomer($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setIdManufacturer($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setIdSupplier($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setAlias($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setCompany($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setLastname($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setFirstname($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setAddress1($arr[$keys[10]]);
		if (array_key_exists($keys[11], $arr)) $this->setAddress2($arr[$keys[11]]);
		if (array_key_exists($keys[12], $arr)) $this->setPostcode($arr[$keys[12]]);
		if (array_key_exists($keys[13], $arr)) $this->setCity($arr[$keys[13]]);
		if (array_key_exists($keys[14], $arr)) $this->setOther($arr[$keys[14]]);
		if (array_key_exists($keys[15], $arr)) $this->setPhone($arr[$keys[15]]);
		if (array_key_exists($keys[16], $arr)) $this->setPhoneMobile($arr[$keys[16]]);
		if (array_key_exists($keys[17], $arr)) $this->setVatNumber($arr[$keys[17]]);
		if (array_key_exists($keys[18], $arr)) $this->setDni($arr[$keys[18]]);
		if (array_key_exists($keys[19], $arr)) $this->setDateAdd($arr[$keys[19]]);
		if (array_key_exists($keys[20], $arr)) $this->setDateUpd($arr[$keys[20]]);
		if (array_key_exists($keys[21], $arr)) $this->setActive($arr[$keys[21]]);
		if (array_key_exists($keys[22], $arr)) $this->setDeleted($arr[$keys[22]]);
	}

	/**
	 * Build a Criteria object containing the values of all modified columns in this object.
	 *
	 * @return     Criteria The Criteria object containing all modified values.
	 */
	public function buildCriteria()
	{
		$criteria = new Criteria(Oops_Model_AddressPeer::DATABASE_NAME);

		if ($this->isColumnModified(Oops_Model_AddressPeer::ID_ADDRESS)) $criteria->add(Oops_Model_AddressPeer::ID_ADDRESS, $this->id_address);
		if ($this->isColumnModified(Oops_Model_AddressPeer::ID_COUNTRY)) $criteria->add(Oops_Model_AddressPeer::ID_COUNTRY, $this->id_country);
		if ($this->isColumnModified(Oops_Model_AddressPeer::ID_STATE)) $criteria->add(Oops_Model_AddressPeer::ID_STATE, $this->id_state);
		if ($this->isColumnModified(Oops_Model_AddressPeer::ID_CUSTOMER)) $criteria->add(Oops_Model_AddressPeer::ID_CUSTOMER, $this->id_customer);
		if ($this->isColumnModified(Oops_Model_AddressPeer::ID_MANUFACTURER)) $criteria->add(Oops_Model_AddressPeer::ID_MANUFACTURER, $this->id_manufacturer);
		if ($this->isColumnModified(Oops_Model_AddressPeer::ID_SUPPLIER)) $criteria->add(Oops_Model_AddressPeer::ID_SUPPLIER, $this->id_supplier);
		if ($this->isColumnModified(Oops_Model_AddressPeer::ALIAS)) $criteria->add(Oops_Model_AddressPeer::ALIAS, $this->alias);
		if ($this->isColumnModified(Oops_Model_AddressPeer::COMPANY)) $criteria->add(Oops_Model_AddressPeer::COMPANY, $this->company);
		if ($this->isColumnModified(Oops_Model_AddressPeer::LASTNAME)) $criteria->add(Oops_Model_AddressPeer::LASTNAME, $this->lastname);
		if ($this->isColumnModified(Oops_Model_AddressPeer::FIRSTNAME)) $criteria->add(Oops_Model_AddressPeer::FIRSTNAME, $this->firstname);
		if ($this->isColumnModified(Oops_Model_AddressPeer::ADDRESS1)) $criteria->add(Oops_Model_AddressPeer::ADDRESS1, $this->address1);
		if ($this->isColumnModified(Oops_Model_AddressPeer::ADDRESS2)) $criteria->add(Oops_Model_AddressPeer::ADDRESS2, $this->address2);
		if ($this->isColumnModified(Oops_Model_AddressPeer::POSTCODE)) $criteria->add(Oops_Model_AddressPeer::POSTCODE, $this->postcode);
		if ($this->isColumnModified(Oops_Model_AddressPeer::CITY)) $criteria->add(Oops_Model_AddressPeer::CITY, $this->city);
		if ($this->isColumnModified(Oops_Model_AddressPeer::OTHER)) $criteria->add(Oops_Model_AddressPeer::OTHER, $this->other);
		if ($this->isColumnModified(Oops_Model_AddressPeer::PHONE)) $criteria->add(Oops_Model_AddressPeer::PHONE, $this->phone);
		if ($this->isColumnModified(Oops_Model_AddressPeer::PHONE_MOBILE)) $criteria->add(Oops_Model_AddressPeer::PHONE_MOBILE, $this->phone_mobile);
		if ($this->isColumnModified(Oops_Model_AddressPeer::VAT_NUMBER)) $criteria->add(Oops_Model_AddressPeer::VAT_NUMBER, $this->vat_number);
		if ($this->isColumnModified(Oops_Model_AddressPeer::DNI)) $criteria->add(Oops_Model_AddressPeer::DNI, $this->dni);
		if ($this->isColumnModified(Oops_Model_AddressPeer::DATE_ADD)) $criteria->add(Oops_Model_AddressPeer::DATE_ADD, $this->date_add);
		if ($this->isColumnModified(Oops_Model_AddressPeer::DATE_UPD)) $criteria->add(Oops_Model_AddressPeer::DATE_UPD, $this->date_upd);
		if ($this->isColumnModified(Oops_Model_AddressPeer::ACTIVE)) $criteria->add(Oops_Model_AddressPeer::ACTIVE, $this->active);
		if ($this->isColumnModified(Oops_Model_AddressPeer::DELETED)) $criteria->add(Oops_Model_AddressPeer::DELETED, $this->deleted);

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
		$criteria = new Criteria(Oops_Model_AddressPeer::DATABASE_NAME);
		$criteria->add(Oops_Model_AddressPeer::ID_ADDRESS, $this->id_address);

		return $criteria;
	}

	/**
	 * Returns the primary key for this object (row).
	 * @return     int
	 */
	public function getPrimaryKey()
	{
		return $this->getIdAddress();
	}

	/**
	 * Generic method to set the primary key (id_address column).
	 *
	 * @param      int $key Primary key.
	 * @return     void
	 */
	public function setPrimaryKey($key)
	{
		$this->setIdAddress($key);
	}

	/**
	 * Returns true if the primary key for this object is null.
	 * @return     boolean
	 */
	public function isPrimaryKeyNull()
	{
		return null === $this->getIdAddress();
	}

	/**
	 * Sets contents of passed object to values from current object.
	 *
	 * If desired, this method can also make copies of all associated (fkey referrers)
	 * objects.
	 *
	 * @param      object $copyObj An object of Oops_Model_Address (or compatible) type.
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
	 * @throws     PropelException
	 */
	public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
	{
		$copyObj->setIdCountry($this->getIdCountry());
		$copyObj->setIdState($this->getIdState());
		$copyObj->setIdCustomer($this->getIdCustomer());
		$copyObj->setIdManufacturer($this->getIdManufacturer());
		$copyObj->setIdSupplier($this->getIdSupplier());
		$copyObj->setAlias($this->getAlias());
		$copyObj->setCompany($this->getCompany());
		$copyObj->setLastname($this->getLastname());
		$copyObj->setFirstname($this->getFirstname());
		$copyObj->setAddress1($this->getAddress1());
		$copyObj->setAddress2($this->getAddress2());
		$copyObj->setPostcode($this->getPostcode());
		$copyObj->setCity($this->getCity());
		$copyObj->setOther($this->getOther());
		$copyObj->setPhone($this->getPhone());
		$copyObj->setPhoneMobile($this->getPhoneMobile());
		$copyObj->setVatNumber($this->getVatNumber());
		$copyObj->setDni($this->getDni());
		$copyObj->setDateAdd($this->getDateAdd());
		$copyObj->setDateUpd($this->getDateUpd());
		$copyObj->setActive($this->getActive());
		$copyObj->setDeleted($this->getDeleted());
		if ($makeNew) {
			$copyObj->setNew(true);
			$copyObj->setIdAddress(NULL); // this is a auto-increment column, so set to default value
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
	 * @return     Oops_Model_Address Clone of current object.
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
	 * @return     Oops_Model_AddressPeer
	 */
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new Oops_Model_AddressPeer();
		}
		return self::$peer;
	}

	/**
	 * Clears the current object and sets all attributes to their default values
	 */
	public function clear()
	{
		$this->id_address = null;
		$this->id_country = null;
		$this->id_state = null;
		$this->id_customer = null;
		$this->id_manufacturer = null;
		$this->id_supplier = null;
		$this->alias = null;
		$this->company = null;
		$this->lastname = null;
		$this->firstname = null;
		$this->address1 = null;
		$this->address2 = null;
		$this->postcode = null;
		$this->city = null;
		$this->other = null;
		$this->phone = null;
		$this->phone_mobile = null;
		$this->vat_number = null;
		$this->dni = null;
		$this->date_add = null;
		$this->date_upd = null;
		$this->active = null;
		$this->deleted = null;
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
		return (string) $this->exportTo(Oops_Model_AddressPeer::DEFAULT_STRING_FORMAT);
	}

} // Oops_Model_Base_Address
