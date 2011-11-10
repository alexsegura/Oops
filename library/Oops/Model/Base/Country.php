<?php


/**
 * Base class that represents a row from the 'country' table.
 *
 * 
 *
 * @package    propel.generator.prestashop.om
 */
abstract class Oops_Model_Base_Country extends BaseObject  implements Persistent
{

	/**
	 * Peer class name
	 */
	const PEER = 'Oops_Model_CountryPeer';

	/**
	 * The Peer class.
	 * Instance provides a convenient way of calling static methods on a class
	 * that calling code may not be able to identify.
	 * @var        Oops_Model_CountryPeer
	 */
	protected static $peer;

	/**
	 * The value for the id_country field.
	 * @var        int
	 */
	protected $id_country;

	/**
	 * The value for the id_zone field.
	 * @var        int
	 */
	protected $id_zone;

	/**
	 * The value for the id_currency field.
	 * Note: this column has a database default value of: 0
	 * @var        int
	 */
	protected $id_currency;

	/**
	 * The value for the iso_code field.
	 * @var        string
	 */
	protected $iso_code;

	/**
	 * The value for the call_prefix field.
	 * Note: this column has a database default value of: 0
	 * @var        int
	 */
	protected $call_prefix;

	/**
	 * The value for the active field.
	 * Note: this column has a database default value of: false
	 * @var        boolean
	 */
	protected $active;

	/**
	 * The value for the contains_states field.
	 * Note: this column has a database default value of: false
	 * @var        boolean
	 */
	protected $contains_states;

	/**
	 * The value for the need_identification_number field.
	 * Note: this column has a database default value of: false
	 * @var        boolean
	 */
	protected $need_identification_number;

	/**
	 * The value for the need_zip_code field.
	 * Note: this column has a database default value of: true
	 * @var        boolean
	 */
	protected $need_zip_code;

	/**
	 * The value for the zip_code_format field.
	 * Note: this column has a database default value of: ''
	 * @var        string
	 */
	protected $zip_code_format;

	/**
	 * The value for the display_tax_label field.
	 * @var        boolean
	 */
	protected $display_tax_label;

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
		$this->id_currency = 0;
		$this->call_prefix = 0;
		$this->active = false;
		$this->contains_states = false;
		$this->need_identification_number = false;
		$this->need_zip_code = true;
		$this->zip_code_format = '';
	}

	/**
	 * Initializes internal state of Oops_Model_Base_Country object.
	 * @see        applyDefaults()
	 */
	public function __construct()
	{
		parent::__construct();
		$this->applyDefaultValues();
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
	 * Get the [id_zone] column value.
	 * 
	 * @return     int
	 */
	public function getIdZone()
	{
		return $this->id_zone;
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
	 * Get the [iso_code] column value.
	 * 
	 * @return     string
	 */
	public function getIsoCode()
	{
		return $this->iso_code;
	}

	/**
	 * Get the [call_prefix] column value.
	 * 
	 * @return     int
	 */
	public function getCallPrefix()
	{
		return $this->call_prefix;
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
	 * Get the [contains_states] column value.
	 * 
	 * @return     boolean
	 */
	public function getContainsStates()
	{
		return $this->contains_states;
	}

	/**
	 * Get the [need_identification_number] column value.
	 * 
	 * @return     boolean
	 */
	public function getNeedIdentificationNumber()
	{
		return $this->need_identification_number;
	}

	/**
	 * Get the [need_zip_code] column value.
	 * 
	 * @return     boolean
	 */
	public function getNeedZipCode()
	{
		return $this->need_zip_code;
	}

	/**
	 * Get the [zip_code_format] column value.
	 * 
	 * @return     string
	 */
	public function getZipCodeFormat()
	{
		return $this->zip_code_format;
	}

	/**
	 * Get the [display_tax_label] column value.
	 * 
	 * @return     boolean
	 */
	public function getDisplayTaxLabel()
	{
		return $this->display_tax_label;
	}

	/**
	 * Set the value of [id_country] column.
	 * 
	 * @param      int $v new value
	 * @return     Oops_Model_Country The current object (for fluent API support)
	 */
	public function setIdCountry($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->id_country !== $v) {
			$this->id_country = $v;
			$this->modifiedColumns[] = Oops_Model_CountryPeer::ID_COUNTRY;
		}

		return $this;
	} // setIdCountry()

	/**
	 * Set the value of [id_zone] column.
	 * 
	 * @param      int $v new value
	 * @return     Oops_Model_Country The current object (for fluent API support)
	 */
	public function setIdZone($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->id_zone !== $v) {
			$this->id_zone = $v;
			$this->modifiedColumns[] = Oops_Model_CountryPeer::ID_ZONE;
		}

		return $this;
	} // setIdZone()

	/**
	 * Set the value of [id_currency] column.
	 * 
	 * @param      int $v new value
	 * @return     Oops_Model_Country The current object (for fluent API support)
	 */
	public function setIdCurrency($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->id_currency !== $v) {
			$this->id_currency = $v;
			$this->modifiedColumns[] = Oops_Model_CountryPeer::ID_CURRENCY;
		}

		return $this;
	} // setIdCurrency()

	/**
	 * Set the value of [iso_code] column.
	 * 
	 * @param      string $v new value
	 * @return     Oops_Model_Country The current object (for fluent API support)
	 */
	public function setIsoCode($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->iso_code !== $v) {
			$this->iso_code = $v;
			$this->modifiedColumns[] = Oops_Model_CountryPeer::ISO_CODE;
		}

		return $this;
	} // setIsoCode()

	/**
	 * Set the value of [call_prefix] column.
	 * 
	 * @param      int $v new value
	 * @return     Oops_Model_Country The current object (for fluent API support)
	 */
	public function setCallPrefix($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->call_prefix !== $v) {
			$this->call_prefix = $v;
			$this->modifiedColumns[] = Oops_Model_CountryPeer::CALL_PREFIX;
		}

		return $this;
	} // setCallPrefix()

	/**
	 * Sets the value of the [active] column.
	 * Non-boolean arguments are converted using the following rules:
	 *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * 
	 * @param      boolean|integer|string $v The new value
	 * @return     Oops_Model_Country The current object (for fluent API support)
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
			$this->modifiedColumns[] = Oops_Model_CountryPeer::ACTIVE;
		}

		return $this;
	} // setActive()

	/**
	 * Sets the value of the [contains_states] column.
	 * Non-boolean arguments are converted using the following rules:
	 *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * 
	 * @param      boolean|integer|string $v The new value
	 * @return     Oops_Model_Country The current object (for fluent API support)
	 */
	public function setContainsStates($v)
	{
		if ($v !== null) {
			if (is_string($v)) {
				$v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
			} else {
				$v = (boolean) $v;
			}
		}

		if ($this->contains_states !== $v) {
			$this->contains_states = $v;
			$this->modifiedColumns[] = Oops_Model_CountryPeer::CONTAINS_STATES;
		}

		return $this;
	} // setContainsStates()

	/**
	 * Sets the value of the [need_identification_number] column.
	 * Non-boolean arguments are converted using the following rules:
	 *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * 
	 * @param      boolean|integer|string $v The new value
	 * @return     Oops_Model_Country The current object (for fluent API support)
	 */
	public function setNeedIdentificationNumber($v)
	{
		if ($v !== null) {
			if (is_string($v)) {
				$v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
			} else {
				$v = (boolean) $v;
			}
		}

		if ($this->need_identification_number !== $v) {
			$this->need_identification_number = $v;
			$this->modifiedColumns[] = Oops_Model_CountryPeer::NEED_IDENTIFICATION_NUMBER;
		}

		return $this;
	} // setNeedIdentificationNumber()

	/**
	 * Sets the value of the [need_zip_code] column.
	 * Non-boolean arguments are converted using the following rules:
	 *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * 
	 * @param      boolean|integer|string $v The new value
	 * @return     Oops_Model_Country The current object (for fluent API support)
	 */
	public function setNeedZipCode($v)
	{
		if ($v !== null) {
			if (is_string($v)) {
				$v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
			} else {
				$v = (boolean) $v;
			}
		}

		if ($this->need_zip_code !== $v) {
			$this->need_zip_code = $v;
			$this->modifiedColumns[] = Oops_Model_CountryPeer::NEED_ZIP_CODE;
		}

		return $this;
	} // setNeedZipCode()

	/**
	 * Set the value of [zip_code_format] column.
	 * 
	 * @param      string $v new value
	 * @return     Oops_Model_Country The current object (for fluent API support)
	 */
	public function setZipCodeFormat($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->zip_code_format !== $v) {
			$this->zip_code_format = $v;
			$this->modifiedColumns[] = Oops_Model_CountryPeer::ZIP_CODE_FORMAT;
		}

		return $this;
	} // setZipCodeFormat()

	/**
	 * Sets the value of the [display_tax_label] column.
	 * Non-boolean arguments are converted using the following rules:
	 *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * 
	 * @param      boolean|integer|string $v The new value
	 * @return     Oops_Model_Country The current object (for fluent API support)
	 */
	public function setDisplayTaxLabel($v)
	{
		if ($v !== null) {
			if (is_string($v)) {
				$v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
			} else {
				$v = (boolean) $v;
			}
		}

		if ($this->display_tax_label !== $v) {
			$this->display_tax_label = $v;
			$this->modifiedColumns[] = Oops_Model_CountryPeer::DISPLAY_TAX_LABEL;
		}

		return $this;
	} // setDisplayTaxLabel()

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
			if ($this->id_currency !== 0) {
				return false;
			}

			if ($this->call_prefix !== 0) {
				return false;
			}

			if ($this->active !== false) {
				return false;
			}

			if ($this->contains_states !== false) {
				return false;
			}

			if ($this->need_identification_number !== false) {
				return false;
			}

			if ($this->need_zip_code !== true) {
				return false;
			}

			if ($this->zip_code_format !== '') {
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

			$this->id_country = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
			$this->id_zone = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
			$this->id_currency = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
			$this->iso_code = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
			$this->call_prefix = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
			$this->active = ($row[$startcol + 5] !== null) ? (boolean) $row[$startcol + 5] : null;
			$this->contains_states = ($row[$startcol + 6] !== null) ? (boolean) $row[$startcol + 6] : null;
			$this->need_identification_number = ($row[$startcol + 7] !== null) ? (boolean) $row[$startcol + 7] : null;
			$this->need_zip_code = ($row[$startcol + 8] !== null) ? (boolean) $row[$startcol + 8] : null;
			$this->zip_code_format = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
			$this->display_tax_label = ($row[$startcol + 10] !== null) ? (boolean) $row[$startcol + 10] : null;
			$this->resetModified();

			$this->setNew(false);

			if ($rehydrate) {
				$this->ensureConsistency();
			}

			return $startcol + 11; // 11 = Oops_Model_CountryPeer::NUM_HYDRATE_COLUMNS.

		} catch (Exception $e) {
			throw new PropelException("Error populating Oops_Model_Country object", $e);
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
			$con = Propel::getConnection(Oops_Model_CountryPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		// We don't need to alter the object instance pool; we're just modifying this instance
		// already in the pool.

		$stmt = Oops_Model_CountryPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
			$con = Propel::getConnection(Oops_Model_CountryPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$con->beginTransaction();
		try {
			$deleteQuery = Oops_Model_CountryQuery::create()
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
			$con = Propel::getConnection(Oops_Model_CountryPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
				Oops_Model_CountryPeer::addInstanceToPool($this);
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

		$this->modifiedColumns[] = Oops_Model_CountryPeer::ID_COUNTRY;
		if (null !== $this->id_country) {
			throw new PropelException('Cannot insert a value for auto-increment primary key (' . Oops_Model_CountryPeer::ID_COUNTRY . ')');
		}

		 // check the columns in natural order for more readable SQL queries
		if ($this->isColumnModified(Oops_Model_CountryPeer::ID_COUNTRY)) {
			$modifiedColumns[':p' . $index++]  = '`ID_COUNTRY`';
		}
		if ($this->isColumnModified(Oops_Model_CountryPeer::ID_ZONE)) {
			$modifiedColumns[':p' . $index++]  = '`ID_ZONE`';
		}
		if ($this->isColumnModified(Oops_Model_CountryPeer::ID_CURRENCY)) {
			$modifiedColumns[':p' . $index++]  = '`ID_CURRENCY`';
		}
		if ($this->isColumnModified(Oops_Model_CountryPeer::ISO_CODE)) {
			$modifiedColumns[':p' . $index++]  = '`ISO_CODE`';
		}
		if ($this->isColumnModified(Oops_Model_CountryPeer::CALL_PREFIX)) {
			$modifiedColumns[':p' . $index++]  = '`CALL_PREFIX`';
		}
		if ($this->isColumnModified(Oops_Model_CountryPeer::ACTIVE)) {
			$modifiedColumns[':p' . $index++]  = '`ACTIVE`';
		}
		if ($this->isColumnModified(Oops_Model_CountryPeer::CONTAINS_STATES)) {
			$modifiedColumns[':p' . $index++]  = '`CONTAINS_STATES`';
		}
		if ($this->isColumnModified(Oops_Model_CountryPeer::NEED_IDENTIFICATION_NUMBER)) {
			$modifiedColumns[':p' . $index++]  = '`NEED_IDENTIFICATION_NUMBER`';
		}
		if ($this->isColumnModified(Oops_Model_CountryPeer::NEED_ZIP_CODE)) {
			$modifiedColumns[':p' . $index++]  = '`NEED_ZIP_CODE`';
		}
		if ($this->isColumnModified(Oops_Model_CountryPeer::ZIP_CODE_FORMAT)) {
			$modifiedColumns[':p' . $index++]  = '`ZIP_CODE_FORMAT`';
		}
		if ($this->isColumnModified(Oops_Model_CountryPeer::DISPLAY_TAX_LABEL)) {
			$modifiedColumns[':p' . $index++]  = '`DISPLAY_TAX_LABEL`';
		}

		$sql = sprintf(
			'INSERT INTO `' .  _DB_PREFIX_ . 'country` (%s) VALUES (%s)',
			implode(', ', $modifiedColumns),
			implode(', ', array_keys($modifiedColumns))
		);

		try {
			$stmt = $con->prepare($sql);
			foreach ($modifiedColumns as $identifier => $columnName) {
				switch ($columnName) {
					case '`ID_COUNTRY`':
						$stmt->bindValue($identifier, $this->id_country, PDO::PARAM_INT);
						break;
					case '`ID_ZONE`':
						$stmt->bindValue($identifier, $this->id_zone, PDO::PARAM_INT);
						break;
					case '`ID_CURRENCY`':
						$stmt->bindValue($identifier, $this->id_currency, PDO::PARAM_INT);
						break;
					case '`ISO_CODE`':
						$stmt->bindValue($identifier, $this->iso_code, PDO::PARAM_STR);
						break;
					case '`CALL_PREFIX`':
						$stmt->bindValue($identifier, $this->call_prefix, PDO::PARAM_INT);
						break;
					case '`ACTIVE`':
						$stmt->bindValue($identifier, (int) $this->active, PDO::PARAM_INT);
						break;
					case '`CONTAINS_STATES`':
						$stmt->bindValue($identifier, (int) $this->contains_states, PDO::PARAM_INT);
						break;
					case '`NEED_IDENTIFICATION_NUMBER`':
						$stmt->bindValue($identifier, (int) $this->need_identification_number, PDO::PARAM_INT);
						break;
					case '`NEED_ZIP_CODE`':
						$stmt->bindValue($identifier, (int) $this->need_zip_code, PDO::PARAM_INT);
						break;
					case '`ZIP_CODE_FORMAT`':
						$stmt->bindValue($identifier, $this->zip_code_format, PDO::PARAM_STR);
						break;
					case '`DISPLAY_TAX_LABEL`':
						$stmt->bindValue($identifier, (int) $this->display_tax_label, PDO::PARAM_INT);
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
		$this->setIdCountry($pk);

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


			if (($retval = Oops_Model_CountryPeer::doValidate($this, $columns)) !== true) {
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
		$pos = Oops_Model_CountryPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getIdCountry();
				break;
			case 1:
				return $this->getIdZone();
				break;
			case 2:
				return $this->getIdCurrency();
				break;
			case 3:
				return $this->getIsoCode();
				break;
			case 4:
				return $this->getCallPrefix();
				break;
			case 5:
				return $this->getActive();
				break;
			case 6:
				return $this->getContainsStates();
				break;
			case 7:
				return $this->getNeedIdentificationNumber();
				break;
			case 8:
				return $this->getNeedZipCode();
				break;
			case 9:
				return $this->getZipCodeFormat();
				break;
			case 10:
				return $this->getDisplayTaxLabel();
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
		if (isset($alreadyDumpedObjects['Oops_Model_Country'][$this->getPrimaryKey()])) {
			return '*RECURSION*';
		}
		$alreadyDumpedObjects['Oops_Model_Country'][$this->getPrimaryKey()] = true;
		$keys = Oops_Model_CountryPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getIdCountry(),
			$keys[1] => $this->getIdZone(),
			$keys[2] => $this->getIdCurrency(),
			$keys[3] => $this->getIsoCode(),
			$keys[4] => $this->getCallPrefix(),
			$keys[5] => $this->getActive(),
			$keys[6] => $this->getContainsStates(),
			$keys[7] => $this->getNeedIdentificationNumber(),
			$keys[8] => $this->getNeedZipCode(),
			$keys[9] => $this->getZipCodeFormat(),
			$keys[10] => $this->getDisplayTaxLabel(),
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
		$pos = Oops_Model_CountryPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setIdCountry($value);
				break;
			case 1:
				$this->setIdZone($value);
				break;
			case 2:
				$this->setIdCurrency($value);
				break;
			case 3:
				$this->setIsoCode($value);
				break;
			case 4:
				$this->setCallPrefix($value);
				break;
			case 5:
				$this->setActive($value);
				break;
			case 6:
				$this->setContainsStates($value);
				break;
			case 7:
				$this->setNeedIdentificationNumber($value);
				break;
			case 8:
				$this->setNeedZipCode($value);
				break;
			case 9:
				$this->setZipCodeFormat($value);
				break;
			case 10:
				$this->setDisplayTaxLabel($value);
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
		$keys = Oops_Model_CountryPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setIdCountry($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setIdZone($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setIdCurrency($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setIsoCode($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setCallPrefix($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setActive($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setContainsStates($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setNeedIdentificationNumber($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setNeedZipCode($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setZipCodeFormat($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setDisplayTaxLabel($arr[$keys[10]]);
	}

	/**
	 * Build a Criteria object containing the values of all modified columns in this object.
	 *
	 * @return     Criteria The Criteria object containing all modified values.
	 */
	public function buildCriteria()
	{
		$criteria = new Criteria(Oops_Model_CountryPeer::DATABASE_NAME);

		if ($this->isColumnModified(Oops_Model_CountryPeer::ID_COUNTRY)) $criteria->add(Oops_Model_CountryPeer::ID_COUNTRY, $this->id_country);
		if ($this->isColumnModified(Oops_Model_CountryPeer::ID_ZONE)) $criteria->add(Oops_Model_CountryPeer::ID_ZONE, $this->id_zone);
		if ($this->isColumnModified(Oops_Model_CountryPeer::ID_CURRENCY)) $criteria->add(Oops_Model_CountryPeer::ID_CURRENCY, $this->id_currency);
		if ($this->isColumnModified(Oops_Model_CountryPeer::ISO_CODE)) $criteria->add(Oops_Model_CountryPeer::ISO_CODE, $this->iso_code);
		if ($this->isColumnModified(Oops_Model_CountryPeer::CALL_PREFIX)) $criteria->add(Oops_Model_CountryPeer::CALL_PREFIX, $this->call_prefix);
		if ($this->isColumnModified(Oops_Model_CountryPeer::ACTIVE)) $criteria->add(Oops_Model_CountryPeer::ACTIVE, $this->active);
		if ($this->isColumnModified(Oops_Model_CountryPeer::CONTAINS_STATES)) $criteria->add(Oops_Model_CountryPeer::CONTAINS_STATES, $this->contains_states);
		if ($this->isColumnModified(Oops_Model_CountryPeer::NEED_IDENTIFICATION_NUMBER)) $criteria->add(Oops_Model_CountryPeer::NEED_IDENTIFICATION_NUMBER, $this->need_identification_number);
		if ($this->isColumnModified(Oops_Model_CountryPeer::NEED_ZIP_CODE)) $criteria->add(Oops_Model_CountryPeer::NEED_ZIP_CODE, $this->need_zip_code);
		if ($this->isColumnModified(Oops_Model_CountryPeer::ZIP_CODE_FORMAT)) $criteria->add(Oops_Model_CountryPeer::ZIP_CODE_FORMAT, $this->zip_code_format);
		if ($this->isColumnModified(Oops_Model_CountryPeer::DISPLAY_TAX_LABEL)) $criteria->add(Oops_Model_CountryPeer::DISPLAY_TAX_LABEL, $this->display_tax_label);

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
		$criteria = new Criteria(Oops_Model_CountryPeer::DATABASE_NAME);
		$criteria->add(Oops_Model_CountryPeer::ID_COUNTRY, $this->id_country);

		return $criteria;
	}

	/**
	 * Returns the primary key for this object (row).
	 * @return     int
	 */
	public function getPrimaryKey()
	{
		return $this->getIdCountry();
	}

	/**
	 * Generic method to set the primary key (id_country column).
	 *
	 * @param      int $key Primary key.
	 * @return     void
	 */
	public function setPrimaryKey($key)
	{
		$this->setIdCountry($key);
	}

	/**
	 * Returns true if the primary key for this object is null.
	 * @return     boolean
	 */
	public function isPrimaryKeyNull()
	{
		return null === $this->getIdCountry();
	}

	/**
	 * Sets contents of passed object to values from current object.
	 *
	 * If desired, this method can also make copies of all associated (fkey referrers)
	 * objects.
	 *
	 * @param      object $copyObj An object of Oops_Model_Country (or compatible) type.
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
	 * @throws     PropelException
	 */
	public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
	{
		$copyObj->setIdZone($this->getIdZone());
		$copyObj->setIdCurrency($this->getIdCurrency());
		$copyObj->setIsoCode($this->getIsoCode());
		$copyObj->setCallPrefix($this->getCallPrefix());
		$copyObj->setActive($this->getActive());
		$copyObj->setContainsStates($this->getContainsStates());
		$copyObj->setNeedIdentificationNumber($this->getNeedIdentificationNumber());
		$copyObj->setNeedZipCode($this->getNeedZipCode());
		$copyObj->setZipCodeFormat($this->getZipCodeFormat());
		$copyObj->setDisplayTaxLabel($this->getDisplayTaxLabel());
		if ($makeNew) {
			$copyObj->setNew(true);
			$copyObj->setIdCountry(NULL); // this is a auto-increment column, so set to default value
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
	 * @return     Oops_Model_Country Clone of current object.
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
	 * @return     Oops_Model_CountryPeer
	 */
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new Oops_Model_CountryPeer();
		}
		return self::$peer;
	}

	/**
	 * Clears the current object and sets all attributes to their default values
	 */
	public function clear()
	{
		$this->id_country = null;
		$this->id_zone = null;
		$this->id_currency = null;
		$this->iso_code = null;
		$this->call_prefix = null;
		$this->active = null;
		$this->contains_states = null;
		$this->need_identification_number = null;
		$this->need_zip_code = null;
		$this->zip_code_format = null;
		$this->display_tax_label = null;
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
		return (string) $this->exportTo(Oops_Model_CountryPeer::DEFAULT_STRING_FORMAT);
	}

} // Oops_Model_Base_Country
