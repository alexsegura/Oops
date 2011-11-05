<?php


/**
 * Base class that represents a row from the 'djland_customer' table.
 *
 * 
 *
 * @package    propel.generator.prestashop.om
 */
abstract class Oops_Model_Base_Customer extends BaseObject  implements Persistent
{

	/**
	 * Peer class name
	 */
	const PEER = 'Oops_Model_CustomerPeer';

	/**
	 * The Peer class.
	 * Instance provides a convenient way of calling static methods on a class
	 * that calling code may not be able to identify.
	 * @var        Oops_Model_CustomerPeer
	 */
	protected static $peer;

	/**
	 * The value for the id_customer field.
	 * @var        int
	 */
	protected $id_customer;

	/**
	 * The value for the id_gender field.
	 * @var        int
	 */
	protected $id_gender;

	/**
	 * The value for the id_default_group field.
	 * Note: this column has a database default value of: 1
	 * @var        int
	 */
	protected $id_default_group;

	/**
	 * The value for the firstname field.
	 * @var        string
	 */
	protected $firstname;

	/**
	 * The value for the lastname field.
	 * @var        string
	 */
	protected $lastname;

	/**
	 * The value for the email field.
	 * @var        string
	 */
	protected $email;

	/**
	 * The value for the passwd field.
	 * @var        string
	 */
	protected $passwd;

	/**
	 * The value for the last_passwd_gen field.
	 * Note: this column has a database default value of: (expression) CURRENT_TIMESTAMP
	 * @var        string
	 */
	protected $last_passwd_gen;

	/**
	 * The value for the birthday field.
	 * @var        string
	 */
	protected $birthday;

	/**
	 * The value for the newsletter field.
	 * Note: this column has a database default value of: false
	 * @var        boolean
	 */
	protected $newsletter;

	/**
	 * The value for the ip_registration_newsletter field.
	 * @var        string
	 */
	protected $ip_registration_newsletter;

	/**
	 * The value for the newsletter_date_add field.
	 * @var        string
	 */
	protected $newsletter_date_add;

	/**
	 * The value for the optin field.
	 * Note: this column has a database default value of: false
	 * @var        boolean
	 */
	protected $optin;

	/**
	 * The value for the secure_key field.
	 * Note: this column has a database default value of: '-1'
	 * @var        string
	 */
	protected $secure_key;

	/**
	 * The value for the note field.
	 * @var        string
	 */
	protected $note;

	/**
	 * The value for the active field.
	 * Note: this column has a database default value of: false
	 * @var        boolean
	 */
	protected $active;

	/**
	 * The value for the is_guest field.
	 * Note: this column has a database default value of: false
	 * @var        boolean
	 */
	protected $is_guest;

	/**
	 * The value for the deleted field.
	 * Note: this column has a database default value of: false
	 * @var        boolean
	 */
	protected $deleted;

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
		$this->id_default_group = 1;
		$this->newsletter = false;
		$this->optin = false;
		$this->secure_key = '-1';
		$this->active = false;
		$this->is_guest = false;
		$this->deleted = false;
	}

	/**
	 * Initializes internal state of Oops_Model_Base_Customer object.
	 * @see        applyDefaults()
	 */
	public function __construct()
	{
		parent::__construct();
		$this->applyDefaultValues();
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
	 * Get the [id_gender] column value.
	 * 
	 * @return     int
	 */
	public function getIdGender()
	{
		return $this->id_gender;
	}

	/**
	 * Get the [id_default_group] column value.
	 * 
	 * @return     int
	 */
	public function getIdDefaultGroup()
	{
		return $this->id_default_group;
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
	 * Get the [lastname] column value.
	 * 
	 * @return     string
	 */
	public function getLastname()
	{
		return $this->lastname;
	}

	/**
	 * Get the [email] column value.
	 * 
	 * @return     string
	 */
	public function getEmail()
	{
		return $this->email;
	}

	/**
	 * Get the [passwd] column value.
	 * 
	 * @return     string
	 */
	public function getPasswd()
	{
		return $this->passwd;
	}

	/**
	 * Get the [optionally formatted] temporal [last_passwd_gen] column value.
	 * 
	 *
	 * @param      string $format The date/time format string (either date()-style or strftime()-style).
	 *							If format is NULL, then the raw DateTime object will be returned.
	 * @return     mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00 00:00:00
	 * @throws     PropelException - if unable to parse/validate the date/time value.
	 */
	public function getLastPasswdGen($format = 'Y-m-d H:i:s')
	{
		if ($this->last_passwd_gen === null) {
			return null;
		}


		if ($this->last_passwd_gen === '0000-00-00 00:00:00') {
			// while technically this is not a default value of NULL,
			// this seems to be closest in meaning.
			return null;
		} else {
			try {
				$dt = new DateTime($this->last_passwd_gen);
			} catch (Exception $x) {
				throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->last_passwd_gen, true), $x);
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
	 * Get the [optionally formatted] temporal [birthday] column value.
	 * 
	 *
	 * @param      string $format The date/time format string (either date()-style or strftime()-style).
	 *							If format is NULL, then the raw DateTime object will be returned.
	 * @return     mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00
	 * @throws     PropelException - if unable to parse/validate the date/time value.
	 */
	public function getBirthday($format = '%x')
	{
		if ($this->birthday === null) {
			return null;
		}


		if ($this->birthday === '0000-00-00') {
			// while technically this is not a default value of NULL,
			// this seems to be closest in meaning.
			return null;
		} else {
			try {
				$dt = new DateTime($this->birthday);
			} catch (Exception $x) {
				throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->birthday, true), $x);
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
	 * Get the [newsletter] column value.
	 * 
	 * @return     boolean
	 */
	public function getNewsletter()
	{
		return $this->newsletter;
	}

	/**
	 * Get the [ip_registration_newsletter] column value.
	 * 
	 * @return     string
	 */
	public function getIpRegistrationNewsletter()
	{
		return $this->ip_registration_newsletter;
	}

	/**
	 * Get the [optionally formatted] temporal [newsletter_date_add] column value.
	 * 
	 *
	 * @param      string $format The date/time format string (either date()-style or strftime()-style).
	 *							If format is NULL, then the raw DateTime object will be returned.
	 * @return     mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00 00:00:00
	 * @throws     PropelException - if unable to parse/validate the date/time value.
	 */
	public function getNewsletterDateAdd($format = 'Y-m-d H:i:s')
	{
		if ($this->newsletter_date_add === null) {
			return null;
		}


		if ($this->newsletter_date_add === '0000-00-00 00:00:00') {
			// while technically this is not a default value of NULL,
			// this seems to be closest in meaning.
			return null;
		} else {
			try {
				$dt = new DateTime($this->newsletter_date_add);
			} catch (Exception $x) {
				throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->newsletter_date_add, true), $x);
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
	 * Get the [optin] column value.
	 * 
	 * @return     boolean
	 */
	public function getOptin()
	{
		return $this->optin;
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
	 * Get the [note] column value.
	 * 
	 * @return     string
	 */
	public function getNote()
	{
		return $this->note;
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
	 * Get the [is_guest] column value.
	 * 
	 * @return     boolean
	 */
	public function getIsGuest()
	{
		return $this->is_guest;
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
	 * Set the value of [id_customer] column.
	 * 
	 * @param      int $v new value
	 * @return     Oops_Model_Customer The current object (for fluent API support)
	 */
	public function setIdCustomer($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->id_customer !== $v) {
			$this->id_customer = $v;
			$this->modifiedColumns[] = Oops_Model_CustomerPeer::ID_CUSTOMER;
		}

		return $this;
	} // setIdCustomer()

	/**
	 * Set the value of [id_gender] column.
	 * 
	 * @param      int $v new value
	 * @return     Oops_Model_Customer The current object (for fluent API support)
	 */
	public function setIdGender($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->id_gender !== $v) {
			$this->id_gender = $v;
			$this->modifiedColumns[] = Oops_Model_CustomerPeer::ID_GENDER;
		}

		return $this;
	} // setIdGender()

	/**
	 * Set the value of [id_default_group] column.
	 * 
	 * @param      int $v new value
	 * @return     Oops_Model_Customer The current object (for fluent API support)
	 */
	public function setIdDefaultGroup($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->id_default_group !== $v) {
			$this->id_default_group = $v;
			$this->modifiedColumns[] = Oops_Model_CustomerPeer::ID_DEFAULT_GROUP;
		}

		return $this;
	} // setIdDefaultGroup()

	/**
	 * Set the value of [firstname] column.
	 * 
	 * @param      string $v new value
	 * @return     Oops_Model_Customer The current object (for fluent API support)
	 */
	public function setFirstname($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->firstname !== $v) {
			$this->firstname = $v;
			$this->modifiedColumns[] = Oops_Model_CustomerPeer::FIRSTNAME;
		}

		return $this;
	} // setFirstname()

	/**
	 * Set the value of [lastname] column.
	 * 
	 * @param      string $v new value
	 * @return     Oops_Model_Customer The current object (for fluent API support)
	 */
	public function setLastname($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->lastname !== $v) {
			$this->lastname = $v;
			$this->modifiedColumns[] = Oops_Model_CustomerPeer::LASTNAME;
		}

		return $this;
	} // setLastname()

	/**
	 * Set the value of [email] column.
	 * 
	 * @param      string $v new value
	 * @return     Oops_Model_Customer The current object (for fluent API support)
	 */
	public function setEmail($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->email !== $v) {
			$this->email = $v;
			$this->modifiedColumns[] = Oops_Model_CustomerPeer::EMAIL;
		}

		return $this;
	} // setEmail()

	/**
	 * Set the value of [passwd] column.
	 * 
	 * @param      string $v new value
	 * @return     Oops_Model_Customer The current object (for fluent API support)
	 */
	public function setPasswd($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->passwd !== $v) {
			$this->passwd = $v;
			$this->modifiedColumns[] = Oops_Model_CustomerPeer::PASSWD;
		}

		return $this;
	} // setPasswd()

	/**
	 * Sets the value of [last_passwd_gen] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.
	 *               Empty strings are treated as NULL.
	 * @return     Oops_Model_Customer The current object (for fluent API support)
	 */
	public function setLastPasswdGen($v)
	{
		$dt = PropelDateTime::newInstance($v, null, 'DateTime');
		if ($this->last_passwd_gen !== null || $dt !== null) {
			$currentDateAsString = ($this->last_passwd_gen !== null && $tmpDt = new DateTime($this->last_passwd_gen)) ? $tmpDt->format('Y-m-d H:i:s') : null;
			$newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
			if ($currentDateAsString !== $newDateAsString) {
				$this->last_passwd_gen = $newDateAsString;
				$this->modifiedColumns[] = Oops_Model_CustomerPeer::LAST_PASSWD_GEN;
			}
		} // if either are not null

		return $this;
	} // setLastPasswdGen()

	/**
	 * Sets the value of [birthday] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.
	 *               Empty strings are treated as NULL.
	 * @return     Oops_Model_Customer The current object (for fluent API support)
	 */
	public function setBirthday($v)
	{
		$dt = PropelDateTime::newInstance($v, null, 'DateTime');
		if ($this->birthday !== null || $dt !== null) {
			$currentDateAsString = ($this->birthday !== null && $tmpDt = new DateTime($this->birthday)) ? $tmpDt->format('Y-m-d') : null;
			$newDateAsString = $dt ? $dt->format('Y-m-d') : null;
			if ($currentDateAsString !== $newDateAsString) {
				$this->birthday = $newDateAsString;
				$this->modifiedColumns[] = Oops_Model_CustomerPeer::BIRTHDAY;
			}
		} // if either are not null

		return $this;
	} // setBirthday()

	/**
	 * Sets the value of the [newsletter] column.
	 * Non-boolean arguments are converted using the following rules:
	 *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * 
	 * @param      boolean|integer|string $v The new value
	 * @return     Oops_Model_Customer The current object (for fluent API support)
	 */
	public function setNewsletter($v)
	{
		if ($v !== null) {
			if (is_string($v)) {
				$v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
			} else {
				$v = (boolean) $v;
			}
		}

		if ($this->newsletter !== $v) {
			$this->newsletter = $v;
			$this->modifiedColumns[] = Oops_Model_CustomerPeer::NEWSLETTER;
		}

		return $this;
	} // setNewsletter()

	/**
	 * Set the value of [ip_registration_newsletter] column.
	 * 
	 * @param      string $v new value
	 * @return     Oops_Model_Customer The current object (for fluent API support)
	 */
	public function setIpRegistrationNewsletter($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->ip_registration_newsletter !== $v) {
			$this->ip_registration_newsletter = $v;
			$this->modifiedColumns[] = Oops_Model_CustomerPeer::IP_REGISTRATION_NEWSLETTER;
		}

		return $this;
	} // setIpRegistrationNewsletter()

	/**
	 * Sets the value of [newsletter_date_add] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.
	 *               Empty strings are treated as NULL.
	 * @return     Oops_Model_Customer The current object (for fluent API support)
	 */
	public function setNewsletterDateAdd($v)
	{
		$dt = PropelDateTime::newInstance($v, null, 'DateTime');
		if ($this->newsletter_date_add !== null || $dt !== null) {
			$currentDateAsString = ($this->newsletter_date_add !== null && $tmpDt = new DateTime($this->newsletter_date_add)) ? $tmpDt->format('Y-m-d H:i:s') : null;
			$newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
			if ($currentDateAsString !== $newDateAsString) {
				$this->newsletter_date_add = $newDateAsString;
				$this->modifiedColumns[] = Oops_Model_CustomerPeer::NEWSLETTER_DATE_ADD;
			}
		} // if either are not null

		return $this;
	} // setNewsletterDateAdd()

	/**
	 * Sets the value of the [optin] column.
	 * Non-boolean arguments are converted using the following rules:
	 *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * 
	 * @param      boolean|integer|string $v The new value
	 * @return     Oops_Model_Customer The current object (for fluent API support)
	 */
	public function setOptin($v)
	{
		if ($v !== null) {
			if (is_string($v)) {
				$v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
			} else {
				$v = (boolean) $v;
			}
		}

		if ($this->optin !== $v) {
			$this->optin = $v;
			$this->modifiedColumns[] = Oops_Model_CustomerPeer::OPTIN;
		}

		return $this;
	} // setOptin()

	/**
	 * Set the value of [secure_key] column.
	 * 
	 * @param      string $v new value
	 * @return     Oops_Model_Customer The current object (for fluent API support)
	 */
	public function setSecureKey($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->secure_key !== $v) {
			$this->secure_key = $v;
			$this->modifiedColumns[] = Oops_Model_CustomerPeer::SECURE_KEY;
		}

		return $this;
	} // setSecureKey()

	/**
	 * Set the value of [note] column.
	 * 
	 * @param      string $v new value
	 * @return     Oops_Model_Customer The current object (for fluent API support)
	 */
	public function setNote($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->note !== $v) {
			$this->note = $v;
			$this->modifiedColumns[] = Oops_Model_CustomerPeer::NOTE;
		}

		return $this;
	} // setNote()

	/**
	 * Sets the value of the [active] column.
	 * Non-boolean arguments are converted using the following rules:
	 *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * 
	 * @param      boolean|integer|string $v The new value
	 * @return     Oops_Model_Customer The current object (for fluent API support)
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
			$this->modifiedColumns[] = Oops_Model_CustomerPeer::ACTIVE;
		}

		return $this;
	} // setActive()

	/**
	 * Sets the value of the [is_guest] column.
	 * Non-boolean arguments are converted using the following rules:
	 *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * 
	 * @param      boolean|integer|string $v The new value
	 * @return     Oops_Model_Customer The current object (for fluent API support)
	 */
	public function setIsGuest($v)
	{
		if ($v !== null) {
			if (is_string($v)) {
				$v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
			} else {
				$v = (boolean) $v;
			}
		}

		if ($this->is_guest !== $v) {
			$this->is_guest = $v;
			$this->modifiedColumns[] = Oops_Model_CustomerPeer::IS_GUEST;
		}

		return $this;
	} // setIsGuest()

	/**
	 * Sets the value of the [deleted] column.
	 * Non-boolean arguments are converted using the following rules:
	 *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * 
	 * @param      boolean|integer|string $v The new value
	 * @return     Oops_Model_Customer The current object (for fluent API support)
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
			$this->modifiedColumns[] = Oops_Model_CustomerPeer::DELETED;
		}

		return $this;
	} // setDeleted()

	/**
	 * Sets the value of [date_add] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.
	 *               Empty strings are treated as NULL.
	 * @return     Oops_Model_Customer The current object (for fluent API support)
	 */
	public function setDateAdd($v)
	{
		$dt = PropelDateTime::newInstance($v, null, 'DateTime');
		if ($this->date_add !== null || $dt !== null) {
			$currentDateAsString = ($this->date_add !== null && $tmpDt = new DateTime($this->date_add)) ? $tmpDt->format('Y-m-d H:i:s') : null;
			$newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
			if ($currentDateAsString !== $newDateAsString) {
				$this->date_add = $newDateAsString;
				$this->modifiedColumns[] = Oops_Model_CustomerPeer::DATE_ADD;
			}
		} // if either are not null

		return $this;
	} // setDateAdd()

	/**
	 * Sets the value of [date_upd] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.
	 *               Empty strings are treated as NULL.
	 * @return     Oops_Model_Customer The current object (for fluent API support)
	 */
	public function setDateUpd($v)
	{
		$dt = PropelDateTime::newInstance($v, null, 'DateTime');
		if ($this->date_upd !== null || $dt !== null) {
			$currentDateAsString = ($this->date_upd !== null && $tmpDt = new DateTime($this->date_upd)) ? $tmpDt->format('Y-m-d H:i:s') : null;
			$newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
			if ($currentDateAsString !== $newDateAsString) {
				$this->date_upd = $newDateAsString;
				$this->modifiedColumns[] = Oops_Model_CustomerPeer::DATE_UPD;
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
			if ($this->id_default_group !== 1) {
				return false;
			}

			if ($this->newsletter !== false) {
				return false;
			}

			if ($this->optin !== false) {
				return false;
			}

			if ($this->secure_key !== '-1') {
				return false;
			}

			if ($this->active !== false) {
				return false;
			}

			if ($this->is_guest !== false) {
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

			$this->id_customer = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
			$this->id_gender = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
			$this->id_default_group = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
			$this->firstname = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
			$this->lastname = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
			$this->email = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
			$this->passwd = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
			$this->last_passwd_gen = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
			$this->birthday = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
			$this->newsletter = ($row[$startcol + 9] !== null) ? (boolean) $row[$startcol + 9] : null;
			$this->ip_registration_newsletter = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
			$this->newsletter_date_add = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
			$this->optin = ($row[$startcol + 12] !== null) ? (boolean) $row[$startcol + 12] : null;
			$this->secure_key = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
			$this->note = ($row[$startcol + 14] !== null) ? (string) $row[$startcol + 14] : null;
			$this->active = ($row[$startcol + 15] !== null) ? (boolean) $row[$startcol + 15] : null;
			$this->is_guest = ($row[$startcol + 16] !== null) ? (boolean) $row[$startcol + 16] : null;
			$this->deleted = ($row[$startcol + 17] !== null) ? (boolean) $row[$startcol + 17] : null;
			$this->date_add = ($row[$startcol + 18] !== null) ? (string) $row[$startcol + 18] : null;
			$this->date_upd = ($row[$startcol + 19] !== null) ? (string) $row[$startcol + 19] : null;
			$this->resetModified();

			$this->setNew(false);

			if ($rehydrate) {
				$this->ensureConsistency();
			}

			return $startcol + 20; // 20 = Oops_Model_CustomerPeer::NUM_HYDRATE_COLUMNS.

		} catch (Exception $e) {
			throw new PropelException("Error populating Oops_Model_Customer object", $e);
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
			$con = Propel::getConnection(Oops_Model_CustomerPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		// We don't need to alter the object instance pool; we're just modifying this instance
		// already in the pool.

		$stmt = Oops_Model_CustomerPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
			$con = Propel::getConnection(Oops_Model_CustomerPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$con->beginTransaction();
		try {
			$deleteQuery = Oops_Model_CustomerQuery::create()
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
			$con = Propel::getConnection(Oops_Model_CustomerPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
				Oops_Model_CustomerPeer::addInstanceToPool($this);
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

		$this->modifiedColumns[] = Oops_Model_CustomerPeer::ID_CUSTOMER;
		if (null !== $this->id_customer) {
			throw new PropelException('Cannot insert a value for auto-increment primary key (' . Oops_Model_CustomerPeer::ID_CUSTOMER . ')');
		}

		 // check the columns in natural order for more readable SQL queries
		if ($this->isColumnModified(Oops_Model_CustomerPeer::ID_CUSTOMER)) {
			$modifiedColumns[':p' . $index++]  = '`ID_CUSTOMER`';
		}
		if ($this->isColumnModified(Oops_Model_CustomerPeer::ID_GENDER)) {
			$modifiedColumns[':p' . $index++]  = '`ID_GENDER`';
		}
		if ($this->isColumnModified(Oops_Model_CustomerPeer::ID_DEFAULT_GROUP)) {
			$modifiedColumns[':p' . $index++]  = '`ID_DEFAULT_GROUP`';
		}
		if ($this->isColumnModified(Oops_Model_CustomerPeer::FIRSTNAME)) {
			$modifiedColumns[':p' . $index++]  = '`FIRSTNAME`';
		}
		if ($this->isColumnModified(Oops_Model_CustomerPeer::LASTNAME)) {
			$modifiedColumns[':p' . $index++]  = '`LASTNAME`';
		}
		if ($this->isColumnModified(Oops_Model_CustomerPeer::EMAIL)) {
			$modifiedColumns[':p' . $index++]  = '`EMAIL`';
		}
		if ($this->isColumnModified(Oops_Model_CustomerPeer::PASSWD)) {
			$modifiedColumns[':p' . $index++]  = '`PASSWD`';
		}
		if ($this->isColumnModified(Oops_Model_CustomerPeer::LAST_PASSWD_GEN)) {
			$modifiedColumns[':p' . $index++]  = '`LAST_PASSWD_GEN`';
		}
		if ($this->isColumnModified(Oops_Model_CustomerPeer::BIRTHDAY)) {
			$modifiedColumns[':p' . $index++]  = '`BIRTHDAY`';
		}
		if ($this->isColumnModified(Oops_Model_CustomerPeer::NEWSLETTER)) {
			$modifiedColumns[':p' . $index++]  = '`NEWSLETTER`';
		}
		if ($this->isColumnModified(Oops_Model_CustomerPeer::IP_REGISTRATION_NEWSLETTER)) {
			$modifiedColumns[':p' . $index++]  = '`IP_REGISTRATION_NEWSLETTER`';
		}
		if ($this->isColumnModified(Oops_Model_CustomerPeer::NEWSLETTER_DATE_ADD)) {
			$modifiedColumns[':p' . $index++]  = '`NEWSLETTER_DATE_ADD`';
		}
		if ($this->isColumnModified(Oops_Model_CustomerPeer::OPTIN)) {
			$modifiedColumns[':p' . $index++]  = '`OPTIN`';
		}
		if ($this->isColumnModified(Oops_Model_CustomerPeer::SECURE_KEY)) {
			$modifiedColumns[':p' . $index++]  = '`SECURE_KEY`';
		}
		if ($this->isColumnModified(Oops_Model_CustomerPeer::NOTE)) {
			$modifiedColumns[':p' . $index++]  = '`NOTE`';
		}
		if ($this->isColumnModified(Oops_Model_CustomerPeer::ACTIVE)) {
			$modifiedColumns[':p' . $index++]  = '`ACTIVE`';
		}
		if ($this->isColumnModified(Oops_Model_CustomerPeer::IS_GUEST)) {
			$modifiedColumns[':p' . $index++]  = '`IS_GUEST`';
		}
		if ($this->isColumnModified(Oops_Model_CustomerPeer::DELETED)) {
			$modifiedColumns[':p' . $index++]  = '`DELETED`';
		}
		if ($this->isColumnModified(Oops_Model_CustomerPeer::DATE_ADD)) {
			$modifiedColumns[':p' . $index++]  = '`DATE_ADD`';
		}
		if ($this->isColumnModified(Oops_Model_CustomerPeer::DATE_UPD)) {
			$modifiedColumns[':p' . $index++]  = '`DATE_UPD`';
		}

		$sql = sprintf(
			'INSERT INTO `djland_customer` (%s) VALUES (%s)',
			implode(', ', $modifiedColumns),
			implode(', ', array_keys($modifiedColumns))
		);

		try {
			$stmt = $con->prepare($sql);
			foreach ($modifiedColumns as $identifier => $columnName) {
				switch ($columnName) {
					case '`ID_CUSTOMER`':
						$stmt->bindValue($identifier, $this->id_customer, PDO::PARAM_INT);
						break;
					case '`ID_GENDER`':
						$stmt->bindValue($identifier, $this->id_gender, PDO::PARAM_INT);
						break;
					case '`ID_DEFAULT_GROUP`':
						$stmt->bindValue($identifier, $this->id_default_group, PDO::PARAM_INT);
						break;
					case '`FIRSTNAME`':
						$stmt->bindValue($identifier, $this->firstname, PDO::PARAM_STR);
						break;
					case '`LASTNAME`':
						$stmt->bindValue($identifier, $this->lastname, PDO::PARAM_STR);
						break;
					case '`EMAIL`':
						$stmt->bindValue($identifier, $this->email, PDO::PARAM_STR);
						break;
					case '`PASSWD`':
						$stmt->bindValue($identifier, $this->passwd, PDO::PARAM_STR);
						break;
					case '`LAST_PASSWD_GEN`':
						$stmt->bindValue($identifier, $this->last_passwd_gen, PDO::PARAM_STR);
						break;
					case '`BIRTHDAY`':
						$stmt->bindValue($identifier, $this->birthday, PDO::PARAM_STR);
						break;
					case '`NEWSLETTER`':
						$stmt->bindValue($identifier, (int) $this->newsletter, PDO::PARAM_INT);
						break;
					case '`IP_REGISTRATION_NEWSLETTER`':
						$stmt->bindValue($identifier, $this->ip_registration_newsletter, PDO::PARAM_STR);
						break;
					case '`NEWSLETTER_DATE_ADD`':
						$stmt->bindValue($identifier, $this->newsletter_date_add, PDO::PARAM_STR);
						break;
					case '`OPTIN`':
						$stmt->bindValue($identifier, (int) $this->optin, PDO::PARAM_INT);
						break;
					case '`SECURE_KEY`':
						$stmt->bindValue($identifier, $this->secure_key, PDO::PARAM_STR);
						break;
					case '`NOTE`':
						$stmt->bindValue($identifier, $this->note, PDO::PARAM_STR);
						break;
					case '`ACTIVE`':
						$stmt->bindValue($identifier, (int) $this->active, PDO::PARAM_INT);
						break;
					case '`IS_GUEST`':
						$stmt->bindValue($identifier, (int) $this->is_guest, PDO::PARAM_INT);
						break;
					case '`DELETED`':
						$stmt->bindValue($identifier, (int) $this->deleted, PDO::PARAM_INT);
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
		$this->setIdCustomer($pk);

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


			if (($retval = Oops_Model_CustomerPeer::doValidate($this, $columns)) !== true) {
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
		$pos = Oops_Model_CustomerPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getIdCustomer();
				break;
			case 1:
				return $this->getIdGender();
				break;
			case 2:
				return $this->getIdDefaultGroup();
				break;
			case 3:
				return $this->getFirstname();
				break;
			case 4:
				return $this->getLastname();
				break;
			case 5:
				return $this->getEmail();
				break;
			case 6:
				return $this->getPasswd();
				break;
			case 7:
				return $this->getLastPasswdGen();
				break;
			case 8:
				return $this->getBirthday();
				break;
			case 9:
				return $this->getNewsletter();
				break;
			case 10:
				return $this->getIpRegistrationNewsletter();
				break;
			case 11:
				return $this->getNewsletterDateAdd();
				break;
			case 12:
				return $this->getOptin();
				break;
			case 13:
				return $this->getSecureKey();
				break;
			case 14:
				return $this->getNote();
				break;
			case 15:
				return $this->getActive();
				break;
			case 16:
				return $this->getIsGuest();
				break;
			case 17:
				return $this->getDeleted();
				break;
			case 18:
				return $this->getDateAdd();
				break;
			case 19:
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
		if (isset($alreadyDumpedObjects['Oops_Model_Customer'][$this->getPrimaryKey()])) {
			return '*RECURSION*';
		}
		$alreadyDumpedObjects['Oops_Model_Customer'][$this->getPrimaryKey()] = true;
		$keys = Oops_Model_CustomerPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getIdCustomer(),
			$keys[1] => $this->getIdGender(),
			$keys[2] => $this->getIdDefaultGroup(),
			$keys[3] => $this->getFirstname(),
			$keys[4] => $this->getLastname(),
			$keys[5] => $this->getEmail(),
			$keys[6] => $this->getPasswd(),
			$keys[7] => $this->getLastPasswdGen(),
			$keys[8] => $this->getBirthday(),
			$keys[9] => $this->getNewsletter(),
			$keys[10] => $this->getIpRegistrationNewsletter(),
			$keys[11] => $this->getNewsletterDateAdd(),
			$keys[12] => $this->getOptin(),
			$keys[13] => $this->getSecureKey(),
			$keys[14] => $this->getNote(),
			$keys[15] => $this->getActive(),
			$keys[16] => $this->getIsGuest(),
			$keys[17] => $this->getDeleted(),
			$keys[18] => $this->getDateAdd(),
			$keys[19] => $this->getDateUpd(),
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
		$pos = Oops_Model_CustomerPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setIdCustomer($value);
				break;
			case 1:
				$this->setIdGender($value);
				break;
			case 2:
				$this->setIdDefaultGroup($value);
				break;
			case 3:
				$this->setFirstname($value);
				break;
			case 4:
				$this->setLastname($value);
				break;
			case 5:
				$this->setEmail($value);
				break;
			case 6:
				$this->setPasswd($value);
				break;
			case 7:
				$this->setLastPasswdGen($value);
				break;
			case 8:
				$this->setBirthday($value);
				break;
			case 9:
				$this->setNewsletter($value);
				break;
			case 10:
				$this->setIpRegistrationNewsletter($value);
				break;
			case 11:
				$this->setNewsletterDateAdd($value);
				break;
			case 12:
				$this->setOptin($value);
				break;
			case 13:
				$this->setSecureKey($value);
				break;
			case 14:
				$this->setNote($value);
				break;
			case 15:
				$this->setActive($value);
				break;
			case 16:
				$this->setIsGuest($value);
				break;
			case 17:
				$this->setDeleted($value);
				break;
			case 18:
				$this->setDateAdd($value);
				break;
			case 19:
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
		$keys = Oops_Model_CustomerPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setIdCustomer($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setIdGender($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setIdDefaultGroup($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setFirstname($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setLastname($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setEmail($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setPasswd($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setLastPasswdGen($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setBirthday($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setNewsletter($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setIpRegistrationNewsletter($arr[$keys[10]]);
		if (array_key_exists($keys[11], $arr)) $this->setNewsletterDateAdd($arr[$keys[11]]);
		if (array_key_exists($keys[12], $arr)) $this->setOptin($arr[$keys[12]]);
		if (array_key_exists($keys[13], $arr)) $this->setSecureKey($arr[$keys[13]]);
		if (array_key_exists($keys[14], $arr)) $this->setNote($arr[$keys[14]]);
		if (array_key_exists($keys[15], $arr)) $this->setActive($arr[$keys[15]]);
		if (array_key_exists($keys[16], $arr)) $this->setIsGuest($arr[$keys[16]]);
		if (array_key_exists($keys[17], $arr)) $this->setDeleted($arr[$keys[17]]);
		if (array_key_exists($keys[18], $arr)) $this->setDateAdd($arr[$keys[18]]);
		if (array_key_exists($keys[19], $arr)) $this->setDateUpd($arr[$keys[19]]);
	}

	/**
	 * Build a Criteria object containing the values of all modified columns in this object.
	 *
	 * @return     Criteria The Criteria object containing all modified values.
	 */
	public function buildCriteria()
	{
		$criteria = new Criteria(Oops_Model_CustomerPeer::DATABASE_NAME);

		if ($this->isColumnModified(Oops_Model_CustomerPeer::ID_CUSTOMER)) $criteria->add(Oops_Model_CustomerPeer::ID_CUSTOMER, $this->id_customer);
		if ($this->isColumnModified(Oops_Model_CustomerPeer::ID_GENDER)) $criteria->add(Oops_Model_CustomerPeer::ID_GENDER, $this->id_gender);
		if ($this->isColumnModified(Oops_Model_CustomerPeer::ID_DEFAULT_GROUP)) $criteria->add(Oops_Model_CustomerPeer::ID_DEFAULT_GROUP, $this->id_default_group);
		if ($this->isColumnModified(Oops_Model_CustomerPeer::FIRSTNAME)) $criteria->add(Oops_Model_CustomerPeer::FIRSTNAME, $this->firstname);
		if ($this->isColumnModified(Oops_Model_CustomerPeer::LASTNAME)) $criteria->add(Oops_Model_CustomerPeer::LASTNAME, $this->lastname);
		if ($this->isColumnModified(Oops_Model_CustomerPeer::EMAIL)) $criteria->add(Oops_Model_CustomerPeer::EMAIL, $this->email);
		if ($this->isColumnModified(Oops_Model_CustomerPeer::PASSWD)) $criteria->add(Oops_Model_CustomerPeer::PASSWD, $this->passwd);
		if ($this->isColumnModified(Oops_Model_CustomerPeer::LAST_PASSWD_GEN)) $criteria->add(Oops_Model_CustomerPeer::LAST_PASSWD_GEN, $this->last_passwd_gen);
		if ($this->isColumnModified(Oops_Model_CustomerPeer::BIRTHDAY)) $criteria->add(Oops_Model_CustomerPeer::BIRTHDAY, $this->birthday);
		if ($this->isColumnModified(Oops_Model_CustomerPeer::NEWSLETTER)) $criteria->add(Oops_Model_CustomerPeer::NEWSLETTER, $this->newsletter);
		if ($this->isColumnModified(Oops_Model_CustomerPeer::IP_REGISTRATION_NEWSLETTER)) $criteria->add(Oops_Model_CustomerPeer::IP_REGISTRATION_NEWSLETTER, $this->ip_registration_newsletter);
		if ($this->isColumnModified(Oops_Model_CustomerPeer::NEWSLETTER_DATE_ADD)) $criteria->add(Oops_Model_CustomerPeer::NEWSLETTER_DATE_ADD, $this->newsletter_date_add);
		if ($this->isColumnModified(Oops_Model_CustomerPeer::OPTIN)) $criteria->add(Oops_Model_CustomerPeer::OPTIN, $this->optin);
		if ($this->isColumnModified(Oops_Model_CustomerPeer::SECURE_KEY)) $criteria->add(Oops_Model_CustomerPeer::SECURE_KEY, $this->secure_key);
		if ($this->isColumnModified(Oops_Model_CustomerPeer::NOTE)) $criteria->add(Oops_Model_CustomerPeer::NOTE, $this->note);
		if ($this->isColumnModified(Oops_Model_CustomerPeer::ACTIVE)) $criteria->add(Oops_Model_CustomerPeer::ACTIVE, $this->active);
		if ($this->isColumnModified(Oops_Model_CustomerPeer::IS_GUEST)) $criteria->add(Oops_Model_CustomerPeer::IS_GUEST, $this->is_guest);
		if ($this->isColumnModified(Oops_Model_CustomerPeer::DELETED)) $criteria->add(Oops_Model_CustomerPeer::DELETED, $this->deleted);
		if ($this->isColumnModified(Oops_Model_CustomerPeer::DATE_ADD)) $criteria->add(Oops_Model_CustomerPeer::DATE_ADD, $this->date_add);
		if ($this->isColumnModified(Oops_Model_CustomerPeer::DATE_UPD)) $criteria->add(Oops_Model_CustomerPeer::DATE_UPD, $this->date_upd);

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
		$criteria = new Criteria(Oops_Model_CustomerPeer::DATABASE_NAME);
		$criteria->add(Oops_Model_CustomerPeer::ID_CUSTOMER, $this->id_customer);

		return $criteria;
	}

	/**
	 * Returns the primary key for this object (row).
	 * @return     int
	 */
	public function getPrimaryKey()
	{
		return $this->getIdCustomer();
	}

	/**
	 * Generic method to set the primary key (id_customer column).
	 *
	 * @param      int $key Primary key.
	 * @return     void
	 */
	public function setPrimaryKey($key)
	{
		$this->setIdCustomer($key);
	}

	/**
	 * Returns true if the primary key for this object is null.
	 * @return     boolean
	 */
	public function isPrimaryKeyNull()
	{
		return null === $this->getIdCustomer();
	}

	/**
	 * Sets contents of passed object to values from current object.
	 *
	 * If desired, this method can also make copies of all associated (fkey referrers)
	 * objects.
	 *
	 * @param      object $copyObj An object of Oops_Model_Customer (or compatible) type.
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
	 * @throws     PropelException
	 */
	public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
	{
		$copyObj->setIdGender($this->getIdGender());
		$copyObj->setIdDefaultGroup($this->getIdDefaultGroup());
		$copyObj->setFirstname($this->getFirstname());
		$copyObj->setLastname($this->getLastname());
		$copyObj->setEmail($this->getEmail());
		$copyObj->setPasswd($this->getPasswd());
		$copyObj->setLastPasswdGen($this->getLastPasswdGen());
		$copyObj->setBirthday($this->getBirthday());
		$copyObj->setNewsletter($this->getNewsletter());
		$copyObj->setIpRegistrationNewsletter($this->getIpRegistrationNewsletter());
		$copyObj->setNewsletterDateAdd($this->getNewsletterDateAdd());
		$copyObj->setOptin($this->getOptin());
		$copyObj->setSecureKey($this->getSecureKey());
		$copyObj->setNote($this->getNote());
		$copyObj->setActive($this->getActive());
		$copyObj->setIsGuest($this->getIsGuest());
		$copyObj->setDeleted($this->getDeleted());
		$copyObj->setDateAdd($this->getDateAdd());
		$copyObj->setDateUpd($this->getDateUpd());
		if ($makeNew) {
			$copyObj->setNew(true);
			$copyObj->setIdCustomer(NULL); // this is a auto-increment column, so set to default value
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
	 * @return     Oops_Model_Customer Clone of current object.
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
	 * @return     Oops_Model_CustomerPeer
	 */
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new Oops_Model_CustomerPeer();
		}
		return self::$peer;
	}

	/**
	 * Clears the current object and sets all attributes to their default values
	 */
	public function clear()
	{
		$this->id_customer = null;
		$this->id_gender = null;
		$this->id_default_group = null;
		$this->firstname = null;
		$this->lastname = null;
		$this->email = null;
		$this->passwd = null;
		$this->last_passwd_gen = null;
		$this->birthday = null;
		$this->newsletter = null;
		$this->ip_registration_newsletter = null;
		$this->newsletter_date_add = null;
		$this->optin = null;
		$this->secure_key = null;
		$this->note = null;
		$this->active = null;
		$this->is_guest = null;
		$this->deleted = null;
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
		return (string) $this->exportTo(Oops_Model_CustomerPeer::DEFAULT_STRING_FORMAT);
	}

} // Oops_Model_Base_Customer
