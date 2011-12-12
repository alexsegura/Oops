<?php


/**
 * Base class that represents a row from the 'employee' table.
 *
 * 
 *
 * @package    propel.generator.prestashop.om
 */
abstract class Oops_Db_Propel_Employee extends BaseObject  implements Persistent
{

	/**
	 * Peer class name
	 */
	const PEER = 'Oops_Db_EmployeePeer';

	/**
	 * The Peer class.
	 * Instance provides a convenient way of calling static methods on a class
	 * that calling code may not be able to identify.
	 * @var        Oops_Db_EmployeePeer
	 */
	protected static $peer;

	/**
	 * The value for the id_employee field.
	 * @var        int
	 */
	protected $id_employee;

	/**
	 * The value for the id_profile field.
	 * @var        int
	 */
	protected $id_profile;

	/**
	 * The value for the id_lang field.
	 * Note: this column has a database default value of: 0
	 * @var        int
	 */
	protected $id_lang;

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
	 * The value for the stats_date_from field.
	 * @var        string
	 */
	protected $stats_date_from;

	/**
	 * The value for the stats_date_to field.
	 * @var        string
	 */
	protected $stats_date_to;

	/**
	 * The value for the bo_color field.
	 * @var        string
	 */
	protected $bo_color;

	/**
	 * The value for the bo_theme field.
	 * @var        string
	 */
	protected $bo_theme;

	/**
	 * The value for the bo_uimode field.
	 * Note: this column has a database default value of: 'click'
	 * @var        string
	 */
	protected $bo_uimode;

	/**
	 * The value for the active field.
	 * Note: this column has a database default value of: false
	 * @var        boolean
	 */
	protected $active;

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
		$this->id_lang = 0;
		$this->bo_uimode = 'click';
		$this->active = false;
	}

	/**
	 * Initializes internal state of Oops_Db_Propel_Employee object.
	 * @see        applyDefaults()
	 */
	public function __construct()
	{
		parent::__construct();
		$this->applyDefaultValues();
	}

	/**
	 * Get the [id_employee] column value.
	 * 
	 * @return     int
	 */
	public function getIdEmployee()
	{
		return $this->id_employee;
	}

	/**
	 * Get the [id_profile] column value.
	 * 
	 * @return     int
	 */
	public function getIdProfile()
	{
		return $this->id_profile;
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
	 * Get the [optionally formatted] temporal [stats_date_from] column value.
	 * 
	 *
	 * @param      string $format The date/time format string (either date()-style or strftime()-style).
	 *							If format is NULL, then the raw DateTime object will be returned.
	 * @return     mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00
	 * @throws     PropelException - if unable to parse/validate the date/time value.
	 */
	public function getStatsDateFrom($format = '%x')
	{
		if ($this->stats_date_from === null) {
			return null;
		}


		if ($this->stats_date_from === '0000-00-00') {
			// while technically this is not a default value of NULL,
			// this seems to be closest in meaning.
			return null;
		} else {
			try {
				$dt = new DateTime($this->stats_date_from);
			} catch (Exception $x) {
				throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->stats_date_from, true), $x);
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
	 * Get the [optionally formatted] temporal [stats_date_to] column value.
	 * 
	 *
	 * @param      string $format The date/time format string (either date()-style or strftime()-style).
	 *							If format is NULL, then the raw DateTime object will be returned.
	 * @return     mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00
	 * @throws     PropelException - if unable to parse/validate the date/time value.
	 */
	public function getStatsDateTo($format = '%x')
	{
		if ($this->stats_date_to === null) {
			return null;
		}


		if ($this->stats_date_to === '0000-00-00') {
			// while technically this is not a default value of NULL,
			// this seems to be closest in meaning.
			return null;
		} else {
			try {
				$dt = new DateTime($this->stats_date_to);
			} catch (Exception $x) {
				throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->stats_date_to, true), $x);
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
	 * Get the [bo_color] column value.
	 * 
	 * @return     string
	 */
	public function getBoColor()
	{
		return $this->bo_color;
	}

	/**
	 * Get the [bo_theme] column value.
	 * 
	 * @return     string
	 */
	public function getBoTheme()
	{
		return $this->bo_theme;
	}

	/**
	 * Get the [bo_uimode] column value.
	 * 
	 * @return     string
	 */
	public function getBoUimode()
	{
		return $this->bo_uimode;
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
	 * Set the value of [id_employee] column.
	 * 
	 * @param      int $v new value
	 * @return     Oops_Db_Employee The current object (for fluent API support)
	 */
	public function setIdEmployee($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->id_employee !== $v) {
			$this->id_employee = $v;
			$this->modifiedColumns[] = Oops_Db_EmployeePeer::ID_EMPLOYEE;
		}

		return $this;
	} // setIdEmployee()

	/**
	 * Set the value of [id_profile] column.
	 * 
	 * @param      int $v new value
	 * @return     Oops_Db_Employee The current object (for fluent API support)
	 */
	public function setIdProfile($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->id_profile !== $v) {
			$this->id_profile = $v;
			$this->modifiedColumns[] = Oops_Db_EmployeePeer::ID_PROFILE;
		}

		return $this;
	} // setIdProfile()

	/**
	 * Set the value of [id_lang] column.
	 * 
	 * @param      int $v new value
	 * @return     Oops_Db_Employee The current object (for fluent API support)
	 */
	public function setIdLang($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->id_lang !== $v) {
			$this->id_lang = $v;
			$this->modifiedColumns[] = Oops_Db_EmployeePeer::ID_LANG;
		}

		return $this;
	} // setIdLang()

	/**
	 * Set the value of [lastname] column.
	 * 
	 * @param      string $v new value
	 * @return     Oops_Db_Employee The current object (for fluent API support)
	 */
	public function setLastname($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->lastname !== $v) {
			$this->lastname = $v;
			$this->modifiedColumns[] = Oops_Db_EmployeePeer::LASTNAME;
		}

		return $this;
	} // setLastname()

	/**
	 * Set the value of [firstname] column.
	 * 
	 * @param      string $v new value
	 * @return     Oops_Db_Employee The current object (for fluent API support)
	 */
	public function setFirstname($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->firstname !== $v) {
			$this->firstname = $v;
			$this->modifiedColumns[] = Oops_Db_EmployeePeer::FIRSTNAME;
		}

		return $this;
	} // setFirstname()

	/**
	 * Set the value of [email] column.
	 * 
	 * @param      string $v new value
	 * @return     Oops_Db_Employee The current object (for fluent API support)
	 */
	public function setEmail($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->email !== $v) {
			$this->email = $v;
			$this->modifiedColumns[] = Oops_Db_EmployeePeer::EMAIL;
		}

		return $this;
	} // setEmail()

	/**
	 * Set the value of [passwd] column.
	 * 
	 * @param      string $v new value
	 * @return     Oops_Db_Employee The current object (for fluent API support)
	 */
	public function setPasswd($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->passwd !== $v) {
			$this->passwd = $v;
			$this->modifiedColumns[] = Oops_Db_EmployeePeer::PASSWD;
		}

		return $this;
	} // setPasswd()

	/**
	 * Sets the value of [last_passwd_gen] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.
	 *               Empty strings are treated as NULL.
	 * @return     Oops_Db_Employee The current object (for fluent API support)
	 */
	public function setLastPasswdGen($v)
	{
		$dt = PropelDateTime::newInstance($v, null, 'DateTime');
		if ($this->last_passwd_gen !== null || $dt !== null) {
			$currentDateAsString = ($this->last_passwd_gen !== null && $tmpDt = new DateTime($this->last_passwd_gen)) ? $tmpDt->format('Y-m-d H:i:s') : null;
			$newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
			if ($currentDateAsString !== $newDateAsString) {
				$this->last_passwd_gen = $newDateAsString;
				$this->modifiedColumns[] = Oops_Db_EmployeePeer::LAST_PASSWD_GEN;
			}
		} // if either are not null

		return $this;
	} // setLastPasswdGen()

	/**
	 * Sets the value of [stats_date_from] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.
	 *               Empty strings are treated as NULL.
	 * @return     Oops_Db_Employee The current object (for fluent API support)
	 */
	public function setStatsDateFrom($v)
	{
		$dt = PropelDateTime::newInstance($v, null, 'DateTime');
		if ($this->stats_date_from !== null || $dt !== null) {
			$currentDateAsString = ($this->stats_date_from !== null && $tmpDt = new DateTime($this->stats_date_from)) ? $tmpDt->format('Y-m-d') : null;
			$newDateAsString = $dt ? $dt->format('Y-m-d') : null;
			if ($currentDateAsString !== $newDateAsString) {
				$this->stats_date_from = $newDateAsString;
				$this->modifiedColumns[] = Oops_Db_EmployeePeer::STATS_DATE_FROM;
			}
		} // if either are not null

		return $this;
	} // setStatsDateFrom()

	/**
	 * Sets the value of [stats_date_to] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.
	 *               Empty strings are treated as NULL.
	 * @return     Oops_Db_Employee The current object (for fluent API support)
	 */
	public function setStatsDateTo($v)
	{
		$dt = PropelDateTime::newInstance($v, null, 'DateTime');
		if ($this->stats_date_to !== null || $dt !== null) {
			$currentDateAsString = ($this->stats_date_to !== null && $tmpDt = new DateTime($this->stats_date_to)) ? $tmpDt->format('Y-m-d') : null;
			$newDateAsString = $dt ? $dt->format('Y-m-d') : null;
			if ($currentDateAsString !== $newDateAsString) {
				$this->stats_date_to = $newDateAsString;
				$this->modifiedColumns[] = Oops_Db_EmployeePeer::STATS_DATE_TO;
			}
		} // if either are not null

		return $this;
	} // setStatsDateTo()

	/**
	 * Set the value of [bo_color] column.
	 * 
	 * @param      string $v new value
	 * @return     Oops_Db_Employee The current object (for fluent API support)
	 */
	public function setBoColor($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->bo_color !== $v) {
			$this->bo_color = $v;
			$this->modifiedColumns[] = Oops_Db_EmployeePeer::BO_COLOR;
		}

		return $this;
	} // setBoColor()

	/**
	 * Set the value of [bo_theme] column.
	 * 
	 * @param      string $v new value
	 * @return     Oops_Db_Employee The current object (for fluent API support)
	 */
	public function setBoTheme($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->bo_theme !== $v) {
			$this->bo_theme = $v;
			$this->modifiedColumns[] = Oops_Db_EmployeePeer::BO_THEME;
		}

		return $this;
	} // setBoTheme()

	/**
	 * Set the value of [bo_uimode] column.
	 * 
	 * @param      string $v new value
	 * @return     Oops_Db_Employee The current object (for fluent API support)
	 */
	public function setBoUimode($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->bo_uimode !== $v) {
			$this->bo_uimode = $v;
			$this->modifiedColumns[] = Oops_Db_EmployeePeer::BO_UIMODE;
		}

		return $this;
	} // setBoUimode()

	/**
	 * Sets the value of the [active] column.
	 * Non-boolean arguments are converted using the following rules:
	 *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * 
	 * @param      boolean|integer|string $v The new value
	 * @return     Oops_Db_Employee The current object (for fluent API support)
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
			$this->modifiedColumns[] = Oops_Db_EmployeePeer::ACTIVE;
		}

		return $this;
	} // setActive()

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
			if ($this->id_lang !== 0) {
				return false;
			}

			if ($this->bo_uimode !== 'click') {
				return false;
			}

			if ($this->active !== false) {
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

			$this->id_employee = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
			$this->id_profile = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
			$this->id_lang = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
			$this->lastname = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
			$this->firstname = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
			$this->email = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
			$this->passwd = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
			$this->last_passwd_gen = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
			$this->stats_date_from = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
			$this->stats_date_to = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
			$this->bo_color = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
			$this->bo_theme = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
			$this->bo_uimode = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
			$this->active = ($row[$startcol + 13] !== null) ? (boolean) $row[$startcol + 13] : null;
			$this->resetModified();

			$this->setNew(false);

			if ($rehydrate) {
				$this->ensureConsistency();
			}

			return $startcol + 14; // 14 = Oops_Db_EmployeePeer::NUM_HYDRATE_COLUMNS.

		} catch (Exception $e) {
			throw new PropelException("Error populating Oops_Db_Employee object", $e);
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
			$con = Propel::getConnection(Oops_Db_EmployeePeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		// We don't need to alter the object instance pool; we're just modifying this instance
		// already in the pool.

		$stmt = Oops_Db_EmployeePeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
			$con = Propel::getConnection(Oops_Db_EmployeePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$con->beginTransaction();
		try {
			$deleteQuery = Oops_Db_EmployeeQuery::create()
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
			$con = Propel::getConnection(Oops_Db_EmployeePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
				Oops_Db_EmployeePeer::addInstanceToPool($this);
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

		$this->modifiedColumns[] = Oops_Db_EmployeePeer::ID_EMPLOYEE;
		if (null !== $this->id_employee) {
			throw new PropelException('Cannot insert a value for auto-increment primary key (' . Oops_Db_EmployeePeer::ID_EMPLOYEE . ')');
		}

		 // check the columns in natural order for more readable SQL queries
		if ($this->isColumnModified(Oops_Db_EmployeePeer::ID_EMPLOYEE)) {
			$modifiedColumns[':p' . $index++]  = '`ID_EMPLOYEE`';
		}
		if ($this->isColumnModified(Oops_Db_EmployeePeer::ID_PROFILE)) {
			$modifiedColumns[':p' . $index++]  = '`ID_PROFILE`';
		}
		if ($this->isColumnModified(Oops_Db_EmployeePeer::ID_LANG)) {
			$modifiedColumns[':p' . $index++]  = '`ID_LANG`';
		}
		if ($this->isColumnModified(Oops_Db_EmployeePeer::LASTNAME)) {
			$modifiedColumns[':p' . $index++]  = '`LASTNAME`';
		}
		if ($this->isColumnModified(Oops_Db_EmployeePeer::FIRSTNAME)) {
			$modifiedColumns[':p' . $index++]  = '`FIRSTNAME`';
		}
		if ($this->isColumnModified(Oops_Db_EmployeePeer::EMAIL)) {
			$modifiedColumns[':p' . $index++]  = '`EMAIL`';
		}
		if ($this->isColumnModified(Oops_Db_EmployeePeer::PASSWD)) {
			$modifiedColumns[':p' . $index++]  = '`PASSWD`';
		}
		if ($this->isColumnModified(Oops_Db_EmployeePeer::LAST_PASSWD_GEN)) {
			$modifiedColumns[':p' . $index++]  = '`LAST_PASSWD_GEN`';
		}
		if ($this->isColumnModified(Oops_Db_EmployeePeer::STATS_DATE_FROM)) {
			$modifiedColumns[':p' . $index++]  = '`STATS_DATE_FROM`';
		}
		if ($this->isColumnModified(Oops_Db_EmployeePeer::STATS_DATE_TO)) {
			$modifiedColumns[':p' . $index++]  = '`STATS_DATE_TO`';
		}
		if ($this->isColumnModified(Oops_Db_EmployeePeer::BO_COLOR)) {
			$modifiedColumns[':p' . $index++]  = '`BO_COLOR`';
		}
		if ($this->isColumnModified(Oops_Db_EmployeePeer::BO_THEME)) {
			$modifiedColumns[':p' . $index++]  = '`BO_THEME`';
		}
		if ($this->isColumnModified(Oops_Db_EmployeePeer::BO_UIMODE)) {
			$modifiedColumns[':p' . $index++]  = '`BO_UIMODE`';
		}
		if ($this->isColumnModified(Oops_Db_EmployeePeer::ACTIVE)) {
			$modifiedColumns[':p' . $index++]  = '`ACTIVE`';
		}

		$sql = sprintf(
			'INSERT INTO `' .  _DB_PREFIX_ . 'employee` (%s) VALUES (%s)',
			implode(', ', $modifiedColumns),
			implode(', ', array_keys($modifiedColumns))
		);

		try {
			$stmt = $con->prepare($sql);
			foreach ($modifiedColumns as $identifier => $columnName) {
				switch ($columnName) {
					case '`ID_EMPLOYEE`':
						$stmt->bindValue($identifier, $this->id_employee, PDO::PARAM_INT);
						break;
					case '`ID_PROFILE`':
						$stmt->bindValue($identifier, $this->id_profile, PDO::PARAM_INT);
						break;
					case '`ID_LANG`':
						$stmt->bindValue($identifier, $this->id_lang, PDO::PARAM_INT);
						break;
					case '`LASTNAME`':
						$stmt->bindValue($identifier, $this->lastname, PDO::PARAM_STR);
						break;
					case '`FIRSTNAME`':
						$stmt->bindValue($identifier, $this->firstname, PDO::PARAM_STR);
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
					case '`STATS_DATE_FROM`':
						$stmt->bindValue($identifier, $this->stats_date_from, PDO::PARAM_STR);
						break;
					case '`STATS_DATE_TO`':
						$stmt->bindValue($identifier, $this->stats_date_to, PDO::PARAM_STR);
						break;
					case '`BO_COLOR`':
						$stmt->bindValue($identifier, $this->bo_color, PDO::PARAM_STR);
						break;
					case '`BO_THEME`':
						$stmt->bindValue($identifier, $this->bo_theme, PDO::PARAM_STR);
						break;
					case '`BO_UIMODE`':
						$stmt->bindValue($identifier, $this->bo_uimode, PDO::PARAM_STR);
						break;
					case '`ACTIVE`':
						$stmt->bindValue($identifier, (int) $this->active, PDO::PARAM_INT);
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
		$this->setIdEmployee($pk);

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


			if (($retval = Oops_Db_EmployeePeer::doValidate($this, $columns)) !== true) {
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
		$pos = Oops_Db_EmployeePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getIdEmployee();
				break;
			case 1:
				return $this->getIdProfile();
				break;
			case 2:
				return $this->getIdLang();
				break;
			case 3:
				return $this->getLastname();
				break;
			case 4:
				return $this->getFirstname();
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
				return $this->getStatsDateFrom();
				break;
			case 9:
				return $this->getStatsDateTo();
				break;
			case 10:
				return $this->getBoColor();
				break;
			case 11:
				return $this->getBoTheme();
				break;
			case 12:
				return $this->getBoUimode();
				break;
			case 13:
				return $this->getActive();
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
		if (isset($alreadyDumpedObjects['Oops_Db_Employee'][$this->getPrimaryKey()])) {
			return '*RECURSION*';
		}
		$alreadyDumpedObjects['Oops_Db_Employee'][$this->getPrimaryKey()] = true;
		$keys = Oops_Db_EmployeePeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getIdEmployee(),
			$keys[1] => $this->getIdProfile(),
			$keys[2] => $this->getIdLang(),
			$keys[3] => $this->getLastname(),
			$keys[4] => $this->getFirstname(),
			$keys[5] => $this->getEmail(),
			$keys[6] => $this->getPasswd(),
			$keys[7] => $this->getLastPasswdGen(),
			$keys[8] => $this->getStatsDateFrom(),
			$keys[9] => $this->getStatsDateTo(),
			$keys[10] => $this->getBoColor(),
			$keys[11] => $this->getBoTheme(),
			$keys[12] => $this->getBoUimode(),
			$keys[13] => $this->getActive(),
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
		$pos = Oops_Db_EmployeePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setIdEmployee($value);
				break;
			case 1:
				$this->setIdProfile($value);
				break;
			case 2:
				$this->setIdLang($value);
				break;
			case 3:
				$this->setLastname($value);
				break;
			case 4:
				$this->setFirstname($value);
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
				$this->setStatsDateFrom($value);
				break;
			case 9:
				$this->setStatsDateTo($value);
				break;
			case 10:
				$this->setBoColor($value);
				break;
			case 11:
				$this->setBoTheme($value);
				break;
			case 12:
				$this->setBoUimode($value);
				break;
			case 13:
				$this->setActive($value);
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
		$keys = Oops_Db_EmployeePeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setIdEmployee($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setIdProfile($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setIdLang($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setLastname($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setFirstname($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setEmail($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setPasswd($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setLastPasswdGen($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setStatsDateFrom($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setStatsDateTo($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setBoColor($arr[$keys[10]]);
		if (array_key_exists($keys[11], $arr)) $this->setBoTheme($arr[$keys[11]]);
		if (array_key_exists($keys[12], $arr)) $this->setBoUimode($arr[$keys[12]]);
		if (array_key_exists($keys[13], $arr)) $this->setActive($arr[$keys[13]]);
	}

	/**
	 * Build a Criteria object containing the values of all modified columns in this object.
	 *
	 * @return     Criteria The Criteria object containing all modified values.
	 */
	public function buildCriteria()
	{
		$criteria = new Criteria(Oops_Db_EmployeePeer::DATABASE_NAME);

		if ($this->isColumnModified(Oops_Db_EmployeePeer::ID_EMPLOYEE)) $criteria->add(Oops_Db_EmployeePeer::ID_EMPLOYEE, $this->id_employee);
		if ($this->isColumnModified(Oops_Db_EmployeePeer::ID_PROFILE)) $criteria->add(Oops_Db_EmployeePeer::ID_PROFILE, $this->id_profile);
		if ($this->isColumnModified(Oops_Db_EmployeePeer::ID_LANG)) $criteria->add(Oops_Db_EmployeePeer::ID_LANG, $this->id_lang);
		if ($this->isColumnModified(Oops_Db_EmployeePeer::LASTNAME)) $criteria->add(Oops_Db_EmployeePeer::LASTNAME, $this->lastname);
		if ($this->isColumnModified(Oops_Db_EmployeePeer::FIRSTNAME)) $criteria->add(Oops_Db_EmployeePeer::FIRSTNAME, $this->firstname);
		if ($this->isColumnModified(Oops_Db_EmployeePeer::EMAIL)) $criteria->add(Oops_Db_EmployeePeer::EMAIL, $this->email);
		if ($this->isColumnModified(Oops_Db_EmployeePeer::PASSWD)) $criteria->add(Oops_Db_EmployeePeer::PASSWD, $this->passwd);
		if ($this->isColumnModified(Oops_Db_EmployeePeer::LAST_PASSWD_GEN)) $criteria->add(Oops_Db_EmployeePeer::LAST_PASSWD_GEN, $this->last_passwd_gen);
		if ($this->isColumnModified(Oops_Db_EmployeePeer::STATS_DATE_FROM)) $criteria->add(Oops_Db_EmployeePeer::STATS_DATE_FROM, $this->stats_date_from);
		if ($this->isColumnModified(Oops_Db_EmployeePeer::STATS_DATE_TO)) $criteria->add(Oops_Db_EmployeePeer::STATS_DATE_TO, $this->stats_date_to);
		if ($this->isColumnModified(Oops_Db_EmployeePeer::BO_COLOR)) $criteria->add(Oops_Db_EmployeePeer::BO_COLOR, $this->bo_color);
		if ($this->isColumnModified(Oops_Db_EmployeePeer::BO_THEME)) $criteria->add(Oops_Db_EmployeePeer::BO_THEME, $this->bo_theme);
		if ($this->isColumnModified(Oops_Db_EmployeePeer::BO_UIMODE)) $criteria->add(Oops_Db_EmployeePeer::BO_UIMODE, $this->bo_uimode);
		if ($this->isColumnModified(Oops_Db_EmployeePeer::ACTIVE)) $criteria->add(Oops_Db_EmployeePeer::ACTIVE, $this->active);

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
		$criteria = new Criteria(Oops_Db_EmployeePeer::DATABASE_NAME);
		$criteria->add(Oops_Db_EmployeePeer::ID_EMPLOYEE, $this->id_employee);

		return $criteria;
	}

	/**
	 * Returns the primary key for this object (row).
	 * @return     int
	 */
	public function getPrimaryKey()
	{
		return $this->getIdEmployee();
	}

	/**
	 * Generic method to set the primary key (id_employee column).
	 *
	 * @param      int $key Primary key.
	 * @return     void
	 */
	public function setPrimaryKey($key)
	{
		$this->setIdEmployee($key);
	}

	/**
	 * Returns true if the primary key for this object is null.
	 * @return     boolean
	 */
	public function isPrimaryKeyNull()
	{
		return null === $this->getIdEmployee();
	}

	/**
	 * Sets contents of passed object to values from current object.
	 *
	 * If desired, this method can also make copies of all associated (fkey referrers)
	 * objects.
	 *
	 * @param      object $copyObj An object of Oops_Db_Employee (or compatible) type.
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
	 * @throws     PropelException
	 */
	public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
	{
		$copyObj->setIdProfile($this->getIdProfile());
		$copyObj->setIdLang($this->getIdLang());
		$copyObj->setLastname($this->getLastname());
		$copyObj->setFirstname($this->getFirstname());
		$copyObj->setEmail($this->getEmail());
		$copyObj->setPasswd($this->getPasswd());
		$copyObj->setLastPasswdGen($this->getLastPasswdGen());
		$copyObj->setStatsDateFrom($this->getStatsDateFrom());
		$copyObj->setStatsDateTo($this->getStatsDateTo());
		$copyObj->setBoColor($this->getBoColor());
		$copyObj->setBoTheme($this->getBoTheme());
		$copyObj->setBoUimode($this->getBoUimode());
		$copyObj->setActive($this->getActive());
		if ($makeNew) {
			$copyObj->setNew(true);
			$copyObj->setIdEmployee(NULL); // this is a auto-increment column, so set to default value
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
	 * @return     Oops_Db_Employee Clone of current object.
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
	 * @return     Oops_Db_EmployeePeer
	 */
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new Oops_Db_EmployeePeer();
		}
		return self::$peer;
	}

	/**
	 * Clears the current object and sets all attributes to their default values
	 */
	public function clear()
	{
		$this->id_employee = null;
		$this->id_profile = null;
		$this->id_lang = null;
		$this->lastname = null;
		$this->firstname = null;
		$this->email = null;
		$this->passwd = null;
		$this->last_passwd_gen = null;
		$this->stats_date_from = null;
		$this->stats_date_to = null;
		$this->bo_color = null;
		$this->bo_theme = null;
		$this->bo_uimode = null;
		$this->active = null;
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
		return (string) $this->exportTo(Oops_Db_EmployeePeer::DEFAULT_STRING_FORMAT);
	}

} // Oops_Db_Propel_Employee
