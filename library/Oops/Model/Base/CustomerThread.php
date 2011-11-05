<?php


/**
 * Base class that represents a row from the 'djland_customer_thread' table.
 *
 * 
 *
 * @package    propel.generator.prestashop.om
 */
abstract class Oops_Model_Base_CustomerThread extends BaseObject  implements Persistent
{

	/**
	 * Peer class name
	 */
	const PEER = 'Oops_Model_CustomerThreadPeer';

	/**
	 * The Peer class.
	 * Instance provides a convenient way of calling static methods on a class
	 * that calling code may not be able to identify.
	 * @var        Oops_Model_CustomerThreadPeer
	 */
	protected static $peer;

	/**
	 * The value for the id_customer_thread field.
	 * @var        int
	 */
	protected $id_customer_thread;

	/**
	 * The value for the id_lang field.
	 * @var        int
	 */
	protected $id_lang;

	/**
	 * The value for the id_contact field.
	 * @var        int
	 */
	protected $id_contact;

	/**
	 * The value for the id_customer field.
	 * @var        int
	 */
	protected $id_customer;

	/**
	 * The value for the id_order field.
	 * @var        int
	 */
	protected $id_order;

	/**
	 * The value for the id_product field.
	 * @var        int
	 */
	protected $id_product;

	/**
	 * The value for the status field.
	 * Note: this column has a database default value of: 'open'
	 * @var        string
	 */
	protected $status;

	/**
	 * The value for the email field.
	 * @var        string
	 */
	protected $email;

	/**
	 * The value for the token field.
	 * @var        string
	 */
	protected $token;

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
		$this->status = 'open';
	}

	/**
	 * Initializes internal state of Oops_Model_Base_CustomerThread object.
	 * @see        applyDefaults()
	 */
	public function __construct()
	{
		parent::__construct();
		$this->applyDefaultValues();
	}

	/**
	 * Get the [id_customer_thread] column value.
	 * 
	 * @return     int
	 */
	public function getIdCustomerThread()
	{
		return $this->id_customer_thread;
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
	 * Get the [id_contact] column value.
	 * 
	 * @return     int
	 */
	public function getIdContact()
	{
		return $this->id_contact;
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
	 * Get the [id_order] column value.
	 * 
	 * @return     int
	 */
	public function getIdOrder()
	{
		return $this->id_order;
	}

	/**
	 * Get the [id_product] column value.
	 * 
	 * @return     int
	 */
	public function getIdProduct()
	{
		return $this->id_product;
	}

	/**
	 * Get the [status] column value.
	 * 
	 * @return     string
	 */
	public function getStatus()
	{
		return $this->status;
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
	 * Get the [token] column value.
	 * 
	 * @return     string
	 */
	public function getToken()
	{
		return $this->token;
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
	 * Set the value of [id_customer_thread] column.
	 * 
	 * @param      int $v new value
	 * @return     Oops_Model_CustomerThread The current object (for fluent API support)
	 */
	public function setIdCustomerThread($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->id_customer_thread !== $v) {
			$this->id_customer_thread = $v;
			$this->modifiedColumns[] = Oops_Model_CustomerThreadPeer::ID_CUSTOMER_THREAD;
		}

		return $this;
	} // setIdCustomerThread()

	/**
	 * Set the value of [id_lang] column.
	 * 
	 * @param      int $v new value
	 * @return     Oops_Model_CustomerThread The current object (for fluent API support)
	 */
	public function setIdLang($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->id_lang !== $v) {
			$this->id_lang = $v;
			$this->modifiedColumns[] = Oops_Model_CustomerThreadPeer::ID_LANG;
		}

		return $this;
	} // setIdLang()

	/**
	 * Set the value of [id_contact] column.
	 * 
	 * @param      int $v new value
	 * @return     Oops_Model_CustomerThread The current object (for fluent API support)
	 */
	public function setIdContact($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->id_contact !== $v) {
			$this->id_contact = $v;
			$this->modifiedColumns[] = Oops_Model_CustomerThreadPeer::ID_CONTACT;
		}

		return $this;
	} // setIdContact()

	/**
	 * Set the value of [id_customer] column.
	 * 
	 * @param      int $v new value
	 * @return     Oops_Model_CustomerThread The current object (for fluent API support)
	 */
	public function setIdCustomer($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->id_customer !== $v) {
			$this->id_customer = $v;
			$this->modifiedColumns[] = Oops_Model_CustomerThreadPeer::ID_CUSTOMER;
		}

		return $this;
	} // setIdCustomer()

	/**
	 * Set the value of [id_order] column.
	 * 
	 * @param      int $v new value
	 * @return     Oops_Model_CustomerThread The current object (for fluent API support)
	 */
	public function setIdOrder($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->id_order !== $v) {
			$this->id_order = $v;
			$this->modifiedColumns[] = Oops_Model_CustomerThreadPeer::ID_ORDER;
		}

		return $this;
	} // setIdOrder()

	/**
	 * Set the value of [id_product] column.
	 * 
	 * @param      int $v new value
	 * @return     Oops_Model_CustomerThread The current object (for fluent API support)
	 */
	public function setIdProduct($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->id_product !== $v) {
			$this->id_product = $v;
			$this->modifiedColumns[] = Oops_Model_CustomerThreadPeer::ID_PRODUCT;
		}

		return $this;
	} // setIdProduct()

	/**
	 * Set the value of [status] column.
	 * 
	 * @param      string $v new value
	 * @return     Oops_Model_CustomerThread The current object (for fluent API support)
	 */
	public function setStatus($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->status !== $v) {
			$this->status = $v;
			$this->modifiedColumns[] = Oops_Model_CustomerThreadPeer::STATUS;
		}

		return $this;
	} // setStatus()

	/**
	 * Set the value of [email] column.
	 * 
	 * @param      string $v new value
	 * @return     Oops_Model_CustomerThread The current object (for fluent API support)
	 */
	public function setEmail($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->email !== $v) {
			$this->email = $v;
			$this->modifiedColumns[] = Oops_Model_CustomerThreadPeer::EMAIL;
		}

		return $this;
	} // setEmail()

	/**
	 * Set the value of [token] column.
	 * 
	 * @param      string $v new value
	 * @return     Oops_Model_CustomerThread The current object (for fluent API support)
	 */
	public function setToken($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->token !== $v) {
			$this->token = $v;
			$this->modifiedColumns[] = Oops_Model_CustomerThreadPeer::TOKEN;
		}

		return $this;
	} // setToken()

	/**
	 * Sets the value of [date_add] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.
	 *               Empty strings are treated as NULL.
	 * @return     Oops_Model_CustomerThread The current object (for fluent API support)
	 */
	public function setDateAdd($v)
	{
		$dt = PropelDateTime::newInstance($v, null, 'DateTime');
		if ($this->date_add !== null || $dt !== null) {
			$currentDateAsString = ($this->date_add !== null && $tmpDt = new DateTime($this->date_add)) ? $tmpDt->format('Y-m-d H:i:s') : null;
			$newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
			if ($currentDateAsString !== $newDateAsString) {
				$this->date_add = $newDateAsString;
				$this->modifiedColumns[] = Oops_Model_CustomerThreadPeer::DATE_ADD;
			}
		} // if either are not null

		return $this;
	} // setDateAdd()

	/**
	 * Sets the value of [date_upd] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.
	 *               Empty strings are treated as NULL.
	 * @return     Oops_Model_CustomerThread The current object (for fluent API support)
	 */
	public function setDateUpd($v)
	{
		$dt = PropelDateTime::newInstance($v, null, 'DateTime');
		if ($this->date_upd !== null || $dt !== null) {
			$currentDateAsString = ($this->date_upd !== null && $tmpDt = new DateTime($this->date_upd)) ? $tmpDt->format('Y-m-d H:i:s') : null;
			$newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
			if ($currentDateAsString !== $newDateAsString) {
				$this->date_upd = $newDateAsString;
				$this->modifiedColumns[] = Oops_Model_CustomerThreadPeer::DATE_UPD;
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
			if ($this->status !== 'open') {
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

			$this->id_customer_thread = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
			$this->id_lang = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
			$this->id_contact = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
			$this->id_customer = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
			$this->id_order = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
			$this->id_product = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
			$this->status = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
			$this->email = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
			$this->token = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
			$this->date_add = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
			$this->date_upd = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
			$this->resetModified();

			$this->setNew(false);

			if ($rehydrate) {
				$this->ensureConsistency();
			}

			return $startcol + 11; // 11 = Oops_Model_CustomerThreadPeer::NUM_HYDRATE_COLUMNS.

		} catch (Exception $e) {
			throw new PropelException("Error populating Oops_Model_CustomerThread object", $e);
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
			$con = Propel::getConnection(Oops_Model_CustomerThreadPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		// We don't need to alter the object instance pool; we're just modifying this instance
		// already in the pool.

		$stmt = Oops_Model_CustomerThreadPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
			$con = Propel::getConnection(Oops_Model_CustomerThreadPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$con->beginTransaction();
		try {
			$deleteQuery = Oops_Model_CustomerThreadQuery::create()
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
			$con = Propel::getConnection(Oops_Model_CustomerThreadPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
				Oops_Model_CustomerThreadPeer::addInstanceToPool($this);
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

		$this->modifiedColumns[] = Oops_Model_CustomerThreadPeer::ID_CUSTOMER_THREAD;
		if (null !== $this->id_customer_thread) {
			throw new PropelException('Cannot insert a value for auto-increment primary key (' . Oops_Model_CustomerThreadPeer::ID_CUSTOMER_THREAD . ')');
		}

		 // check the columns in natural order for more readable SQL queries
		if ($this->isColumnModified(Oops_Model_CustomerThreadPeer::ID_CUSTOMER_THREAD)) {
			$modifiedColumns[':p' . $index++]  = '`ID_CUSTOMER_THREAD`';
		}
		if ($this->isColumnModified(Oops_Model_CustomerThreadPeer::ID_LANG)) {
			$modifiedColumns[':p' . $index++]  = '`ID_LANG`';
		}
		if ($this->isColumnModified(Oops_Model_CustomerThreadPeer::ID_CONTACT)) {
			$modifiedColumns[':p' . $index++]  = '`ID_CONTACT`';
		}
		if ($this->isColumnModified(Oops_Model_CustomerThreadPeer::ID_CUSTOMER)) {
			$modifiedColumns[':p' . $index++]  = '`ID_CUSTOMER`';
		}
		if ($this->isColumnModified(Oops_Model_CustomerThreadPeer::ID_ORDER)) {
			$modifiedColumns[':p' . $index++]  = '`ID_ORDER`';
		}
		if ($this->isColumnModified(Oops_Model_CustomerThreadPeer::ID_PRODUCT)) {
			$modifiedColumns[':p' . $index++]  = '`ID_PRODUCT`';
		}
		if ($this->isColumnModified(Oops_Model_CustomerThreadPeer::STATUS)) {
			$modifiedColumns[':p' . $index++]  = '`STATUS`';
		}
		if ($this->isColumnModified(Oops_Model_CustomerThreadPeer::EMAIL)) {
			$modifiedColumns[':p' . $index++]  = '`EMAIL`';
		}
		if ($this->isColumnModified(Oops_Model_CustomerThreadPeer::TOKEN)) {
			$modifiedColumns[':p' . $index++]  = '`TOKEN`';
		}
		if ($this->isColumnModified(Oops_Model_CustomerThreadPeer::DATE_ADD)) {
			$modifiedColumns[':p' . $index++]  = '`DATE_ADD`';
		}
		if ($this->isColumnModified(Oops_Model_CustomerThreadPeer::DATE_UPD)) {
			$modifiedColumns[':p' . $index++]  = '`DATE_UPD`';
		}

		$sql = sprintf(
			'INSERT INTO `djland_customer_thread` (%s) VALUES (%s)',
			implode(', ', $modifiedColumns),
			implode(', ', array_keys($modifiedColumns))
		);

		try {
			$stmt = $con->prepare($sql);
			foreach ($modifiedColumns as $identifier => $columnName) {
				switch ($columnName) {
					case '`ID_CUSTOMER_THREAD`':
						$stmt->bindValue($identifier, $this->id_customer_thread, PDO::PARAM_INT);
						break;
					case '`ID_LANG`':
						$stmt->bindValue($identifier, $this->id_lang, PDO::PARAM_INT);
						break;
					case '`ID_CONTACT`':
						$stmt->bindValue($identifier, $this->id_contact, PDO::PARAM_INT);
						break;
					case '`ID_CUSTOMER`':
						$stmt->bindValue($identifier, $this->id_customer, PDO::PARAM_INT);
						break;
					case '`ID_ORDER`':
						$stmt->bindValue($identifier, $this->id_order, PDO::PARAM_INT);
						break;
					case '`ID_PRODUCT`':
						$stmt->bindValue($identifier, $this->id_product, PDO::PARAM_INT);
						break;
					case '`STATUS`':
						$stmt->bindValue($identifier, $this->status, PDO::PARAM_STR);
						break;
					case '`EMAIL`':
						$stmt->bindValue($identifier, $this->email, PDO::PARAM_STR);
						break;
					case '`TOKEN`':
						$stmt->bindValue($identifier, $this->token, PDO::PARAM_STR);
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
		$this->setIdCustomerThread($pk);

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


			if (($retval = Oops_Model_CustomerThreadPeer::doValidate($this, $columns)) !== true) {
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
		$pos = Oops_Model_CustomerThreadPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getIdCustomerThread();
				break;
			case 1:
				return $this->getIdLang();
				break;
			case 2:
				return $this->getIdContact();
				break;
			case 3:
				return $this->getIdCustomer();
				break;
			case 4:
				return $this->getIdOrder();
				break;
			case 5:
				return $this->getIdProduct();
				break;
			case 6:
				return $this->getStatus();
				break;
			case 7:
				return $this->getEmail();
				break;
			case 8:
				return $this->getToken();
				break;
			case 9:
				return $this->getDateAdd();
				break;
			case 10:
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
		if (isset($alreadyDumpedObjects['Oops_Model_CustomerThread'][$this->getPrimaryKey()])) {
			return '*RECURSION*';
		}
		$alreadyDumpedObjects['Oops_Model_CustomerThread'][$this->getPrimaryKey()] = true;
		$keys = Oops_Model_CustomerThreadPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getIdCustomerThread(),
			$keys[1] => $this->getIdLang(),
			$keys[2] => $this->getIdContact(),
			$keys[3] => $this->getIdCustomer(),
			$keys[4] => $this->getIdOrder(),
			$keys[5] => $this->getIdProduct(),
			$keys[6] => $this->getStatus(),
			$keys[7] => $this->getEmail(),
			$keys[8] => $this->getToken(),
			$keys[9] => $this->getDateAdd(),
			$keys[10] => $this->getDateUpd(),
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
		$pos = Oops_Model_CustomerThreadPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setIdCustomerThread($value);
				break;
			case 1:
				$this->setIdLang($value);
				break;
			case 2:
				$this->setIdContact($value);
				break;
			case 3:
				$this->setIdCustomer($value);
				break;
			case 4:
				$this->setIdOrder($value);
				break;
			case 5:
				$this->setIdProduct($value);
				break;
			case 6:
				$this->setStatus($value);
				break;
			case 7:
				$this->setEmail($value);
				break;
			case 8:
				$this->setToken($value);
				break;
			case 9:
				$this->setDateAdd($value);
				break;
			case 10:
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
		$keys = Oops_Model_CustomerThreadPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setIdCustomerThread($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setIdLang($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setIdContact($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setIdCustomer($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setIdOrder($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setIdProduct($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setStatus($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setEmail($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setToken($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setDateAdd($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setDateUpd($arr[$keys[10]]);
	}

	/**
	 * Build a Criteria object containing the values of all modified columns in this object.
	 *
	 * @return     Criteria The Criteria object containing all modified values.
	 */
	public function buildCriteria()
	{
		$criteria = new Criteria(Oops_Model_CustomerThreadPeer::DATABASE_NAME);

		if ($this->isColumnModified(Oops_Model_CustomerThreadPeer::ID_CUSTOMER_THREAD)) $criteria->add(Oops_Model_CustomerThreadPeer::ID_CUSTOMER_THREAD, $this->id_customer_thread);
		if ($this->isColumnModified(Oops_Model_CustomerThreadPeer::ID_LANG)) $criteria->add(Oops_Model_CustomerThreadPeer::ID_LANG, $this->id_lang);
		if ($this->isColumnModified(Oops_Model_CustomerThreadPeer::ID_CONTACT)) $criteria->add(Oops_Model_CustomerThreadPeer::ID_CONTACT, $this->id_contact);
		if ($this->isColumnModified(Oops_Model_CustomerThreadPeer::ID_CUSTOMER)) $criteria->add(Oops_Model_CustomerThreadPeer::ID_CUSTOMER, $this->id_customer);
		if ($this->isColumnModified(Oops_Model_CustomerThreadPeer::ID_ORDER)) $criteria->add(Oops_Model_CustomerThreadPeer::ID_ORDER, $this->id_order);
		if ($this->isColumnModified(Oops_Model_CustomerThreadPeer::ID_PRODUCT)) $criteria->add(Oops_Model_CustomerThreadPeer::ID_PRODUCT, $this->id_product);
		if ($this->isColumnModified(Oops_Model_CustomerThreadPeer::STATUS)) $criteria->add(Oops_Model_CustomerThreadPeer::STATUS, $this->status);
		if ($this->isColumnModified(Oops_Model_CustomerThreadPeer::EMAIL)) $criteria->add(Oops_Model_CustomerThreadPeer::EMAIL, $this->email);
		if ($this->isColumnModified(Oops_Model_CustomerThreadPeer::TOKEN)) $criteria->add(Oops_Model_CustomerThreadPeer::TOKEN, $this->token);
		if ($this->isColumnModified(Oops_Model_CustomerThreadPeer::DATE_ADD)) $criteria->add(Oops_Model_CustomerThreadPeer::DATE_ADD, $this->date_add);
		if ($this->isColumnModified(Oops_Model_CustomerThreadPeer::DATE_UPD)) $criteria->add(Oops_Model_CustomerThreadPeer::DATE_UPD, $this->date_upd);

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
		$criteria = new Criteria(Oops_Model_CustomerThreadPeer::DATABASE_NAME);
		$criteria->add(Oops_Model_CustomerThreadPeer::ID_CUSTOMER_THREAD, $this->id_customer_thread);

		return $criteria;
	}

	/**
	 * Returns the primary key for this object (row).
	 * @return     int
	 */
	public function getPrimaryKey()
	{
		return $this->getIdCustomerThread();
	}

	/**
	 * Generic method to set the primary key (id_customer_thread column).
	 *
	 * @param      int $key Primary key.
	 * @return     void
	 */
	public function setPrimaryKey($key)
	{
		$this->setIdCustomerThread($key);
	}

	/**
	 * Returns true if the primary key for this object is null.
	 * @return     boolean
	 */
	public function isPrimaryKeyNull()
	{
		return null === $this->getIdCustomerThread();
	}

	/**
	 * Sets contents of passed object to values from current object.
	 *
	 * If desired, this method can also make copies of all associated (fkey referrers)
	 * objects.
	 *
	 * @param      object $copyObj An object of Oops_Model_CustomerThread (or compatible) type.
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
	 * @throws     PropelException
	 */
	public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
	{
		$copyObj->setIdLang($this->getIdLang());
		$copyObj->setIdContact($this->getIdContact());
		$copyObj->setIdCustomer($this->getIdCustomer());
		$copyObj->setIdOrder($this->getIdOrder());
		$copyObj->setIdProduct($this->getIdProduct());
		$copyObj->setStatus($this->getStatus());
		$copyObj->setEmail($this->getEmail());
		$copyObj->setToken($this->getToken());
		$copyObj->setDateAdd($this->getDateAdd());
		$copyObj->setDateUpd($this->getDateUpd());
		if ($makeNew) {
			$copyObj->setNew(true);
			$copyObj->setIdCustomerThread(NULL); // this is a auto-increment column, so set to default value
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
	 * @return     Oops_Model_CustomerThread Clone of current object.
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
	 * @return     Oops_Model_CustomerThreadPeer
	 */
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new Oops_Model_CustomerThreadPeer();
		}
		return self::$peer;
	}

	/**
	 * Clears the current object and sets all attributes to their default values
	 */
	public function clear()
	{
		$this->id_customer_thread = null;
		$this->id_lang = null;
		$this->id_contact = null;
		$this->id_customer = null;
		$this->id_order = null;
		$this->id_product = null;
		$this->status = null;
		$this->email = null;
		$this->token = null;
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
		return (string) $this->exportTo(Oops_Model_CustomerThreadPeer::DEFAULT_STRING_FORMAT);
	}

} // Oops_Model_Base_CustomerThread
