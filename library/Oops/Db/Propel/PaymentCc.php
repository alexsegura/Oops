<?php


/**
 * Base class that represents a row from the 'payment_cc' table.
 *
 * 
 *
 * @package    propel.generator.prestashop.om
 */
abstract class Oops_Db_Propel_PaymentCc extends BaseObject  implements Persistent
{

	/**
	 * Peer class name
	 */
	const PEER = 'Oops_Db_PaymentCcPeer';

	/**
	 * The Peer class.
	 * Instance provides a convenient way of calling static methods on a class
	 * that calling code may not be able to identify.
	 * @var        Oops_Db_PaymentCcPeer
	 */
	protected static $peer;

	/**
	 * The value for the id_payment_cc field.
	 * @var        int
	 */
	protected $id_payment_cc;

	/**
	 * The value for the id_order field.
	 * @var        int
	 */
	protected $id_order;

	/**
	 * The value for the id_currency field.
	 * @var        int
	 */
	protected $id_currency;

	/**
	 * The value for the amount field.
	 * @var        string
	 */
	protected $amount;

	/**
	 * The value for the transaction_id field.
	 * @var        string
	 */
	protected $transaction_id;

	/**
	 * The value for the card_number field.
	 * @var        string
	 */
	protected $card_number;

	/**
	 * The value for the card_brand field.
	 * @var        string
	 */
	protected $card_brand;

	/**
	 * The value for the card_expiration field.
	 * @var        string
	 */
	protected $card_expiration;

	/**
	 * The value for the card_holder field.
	 * @var        string
	 */
	protected $card_holder;

	/**
	 * The value for the date_add field.
	 * @var        string
	 */
	protected $date_add;

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
	 * Get the [id_payment_cc] column value.
	 * 
	 * @return     int
	 */
	public function getIdPaymentCc()
	{
		return $this->id_payment_cc;
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
	 * Get the [id_currency] column value.
	 * 
	 * @return     int
	 */
	public function getIdCurrency()
	{
		return $this->id_currency;
	}

	/**
	 * Get the [amount] column value.
	 * 
	 * @return     string
	 */
	public function getAmount()
	{
		return $this->amount;
	}

	/**
	 * Get the [transaction_id] column value.
	 * 
	 * @return     string
	 */
	public function getTransactionId()
	{
		return $this->transaction_id;
	}

	/**
	 * Get the [card_number] column value.
	 * 
	 * @return     string
	 */
	public function getCardNumber()
	{
		return $this->card_number;
	}

	/**
	 * Get the [card_brand] column value.
	 * 
	 * @return     string
	 */
	public function getCardBrand()
	{
		return $this->card_brand;
	}

	/**
	 * Get the [card_expiration] column value.
	 * 
	 * @return     string
	 */
	public function getCardExpiration()
	{
		return $this->card_expiration;
	}

	/**
	 * Get the [card_holder] column value.
	 * 
	 * @return     string
	 */
	public function getCardHolder()
	{
		return $this->card_holder;
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
	 * Set the value of [id_payment_cc] column.
	 * 
	 * @param      int $v new value
	 * @return     Oops_Db_PaymentCc The current object (for fluent API support)
	 */
	public function setIdPaymentCc($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->id_payment_cc !== $v) {
			$this->id_payment_cc = $v;
			$this->modifiedColumns[] = Oops_Db_PaymentCcPeer::ID_PAYMENT_CC;
		}

		return $this;
	} // setIdPaymentCc()

	/**
	 * Set the value of [id_order] column.
	 * 
	 * @param      int $v new value
	 * @return     Oops_Db_PaymentCc The current object (for fluent API support)
	 */
	public function setIdOrder($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->id_order !== $v) {
			$this->id_order = $v;
			$this->modifiedColumns[] = Oops_Db_PaymentCcPeer::ID_ORDER;
		}

		return $this;
	} // setIdOrder()

	/**
	 * Set the value of [id_currency] column.
	 * 
	 * @param      int $v new value
	 * @return     Oops_Db_PaymentCc The current object (for fluent API support)
	 */
	public function setIdCurrency($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->id_currency !== $v) {
			$this->id_currency = $v;
			$this->modifiedColumns[] = Oops_Db_PaymentCcPeer::ID_CURRENCY;
		}

		return $this;
	} // setIdCurrency()

	/**
	 * Set the value of [amount] column.
	 * 
	 * @param      string $v new value
	 * @return     Oops_Db_PaymentCc The current object (for fluent API support)
	 */
	public function setAmount($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->amount !== $v) {
			$this->amount = $v;
			$this->modifiedColumns[] = Oops_Db_PaymentCcPeer::AMOUNT;
		}

		return $this;
	} // setAmount()

	/**
	 * Set the value of [transaction_id] column.
	 * 
	 * @param      string $v new value
	 * @return     Oops_Db_PaymentCc The current object (for fluent API support)
	 */
	public function setTransactionId($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->transaction_id !== $v) {
			$this->transaction_id = $v;
			$this->modifiedColumns[] = Oops_Db_PaymentCcPeer::TRANSACTION_ID;
		}

		return $this;
	} // setTransactionId()

	/**
	 * Set the value of [card_number] column.
	 * 
	 * @param      string $v new value
	 * @return     Oops_Db_PaymentCc The current object (for fluent API support)
	 */
	public function setCardNumber($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->card_number !== $v) {
			$this->card_number = $v;
			$this->modifiedColumns[] = Oops_Db_PaymentCcPeer::CARD_NUMBER;
		}

		return $this;
	} // setCardNumber()

	/**
	 * Set the value of [card_brand] column.
	 * 
	 * @param      string $v new value
	 * @return     Oops_Db_PaymentCc The current object (for fluent API support)
	 */
	public function setCardBrand($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->card_brand !== $v) {
			$this->card_brand = $v;
			$this->modifiedColumns[] = Oops_Db_PaymentCcPeer::CARD_BRAND;
		}

		return $this;
	} // setCardBrand()

	/**
	 * Set the value of [card_expiration] column.
	 * 
	 * @param      string $v new value
	 * @return     Oops_Db_PaymentCc The current object (for fluent API support)
	 */
	public function setCardExpiration($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->card_expiration !== $v) {
			$this->card_expiration = $v;
			$this->modifiedColumns[] = Oops_Db_PaymentCcPeer::CARD_EXPIRATION;
		}

		return $this;
	} // setCardExpiration()

	/**
	 * Set the value of [card_holder] column.
	 * 
	 * @param      string $v new value
	 * @return     Oops_Db_PaymentCc The current object (for fluent API support)
	 */
	public function setCardHolder($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->card_holder !== $v) {
			$this->card_holder = $v;
			$this->modifiedColumns[] = Oops_Db_PaymentCcPeer::CARD_HOLDER;
		}

		return $this;
	} // setCardHolder()

	/**
	 * Sets the value of [date_add] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.
	 *               Empty strings are treated as NULL.
	 * @return     Oops_Db_PaymentCc The current object (for fluent API support)
	 */
	public function setDateAdd($v)
	{
		$dt = PropelDateTime::newInstance($v, null, 'DateTime');
		if ($this->date_add !== null || $dt !== null) {
			$currentDateAsString = ($this->date_add !== null && $tmpDt = new DateTime($this->date_add)) ? $tmpDt->format('Y-m-d H:i:s') : null;
			$newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
			if ($currentDateAsString !== $newDateAsString) {
				$this->date_add = $newDateAsString;
				$this->modifiedColumns[] = Oops_Db_PaymentCcPeer::DATE_ADD;
			}
		} // if either are not null

		return $this;
	} // setDateAdd()

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

			$this->id_payment_cc = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
			$this->id_order = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
			$this->id_currency = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
			$this->amount = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
			$this->transaction_id = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
			$this->card_number = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
			$this->card_brand = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
			$this->card_expiration = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
			$this->card_holder = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
			$this->date_add = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
			$this->resetModified();

			$this->setNew(false);

			if ($rehydrate) {
				$this->ensureConsistency();
			}

			return $startcol + 10; // 10 = Oops_Db_PaymentCcPeer::NUM_HYDRATE_COLUMNS.

		} catch (Exception $e) {
			throw new PropelException("Error populating Oops_Db_PaymentCc object", $e);
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
			$con = Propel::getConnection(Oops_Db_PaymentCcPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		// We don't need to alter the object instance pool; we're just modifying this instance
		// already in the pool.

		$stmt = Oops_Db_PaymentCcPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
			$con = Propel::getConnection(Oops_Db_PaymentCcPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$con->beginTransaction();
		try {
			$deleteQuery = Oops_Db_PaymentCcQuery::create()
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
			$con = Propel::getConnection(Oops_Db_PaymentCcPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
				Oops_Db_PaymentCcPeer::addInstanceToPool($this);
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

		$this->modifiedColumns[] = Oops_Db_PaymentCcPeer::ID_PAYMENT_CC;
		if (null !== $this->id_payment_cc) {
			throw new PropelException('Cannot insert a value for auto-increment primary key (' . Oops_Db_PaymentCcPeer::ID_PAYMENT_CC . ')');
		}

		 // check the columns in natural order for more readable SQL queries
		if ($this->isColumnModified(Oops_Db_PaymentCcPeer::ID_PAYMENT_CC)) {
			$modifiedColumns[':p' . $index++]  = '`ID_PAYMENT_CC`';
		}
		if ($this->isColumnModified(Oops_Db_PaymentCcPeer::ID_ORDER)) {
			$modifiedColumns[':p' . $index++]  = '`ID_ORDER`';
		}
		if ($this->isColumnModified(Oops_Db_PaymentCcPeer::ID_CURRENCY)) {
			$modifiedColumns[':p' . $index++]  = '`ID_CURRENCY`';
		}
		if ($this->isColumnModified(Oops_Db_PaymentCcPeer::AMOUNT)) {
			$modifiedColumns[':p' . $index++]  = '`AMOUNT`';
		}
		if ($this->isColumnModified(Oops_Db_PaymentCcPeer::TRANSACTION_ID)) {
			$modifiedColumns[':p' . $index++]  = '`TRANSACTION_ID`';
		}
		if ($this->isColumnModified(Oops_Db_PaymentCcPeer::CARD_NUMBER)) {
			$modifiedColumns[':p' . $index++]  = '`CARD_NUMBER`';
		}
		if ($this->isColumnModified(Oops_Db_PaymentCcPeer::CARD_BRAND)) {
			$modifiedColumns[':p' . $index++]  = '`CARD_BRAND`';
		}
		if ($this->isColumnModified(Oops_Db_PaymentCcPeer::CARD_EXPIRATION)) {
			$modifiedColumns[':p' . $index++]  = '`CARD_EXPIRATION`';
		}
		if ($this->isColumnModified(Oops_Db_PaymentCcPeer::CARD_HOLDER)) {
			$modifiedColumns[':p' . $index++]  = '`CARD_HOLDER`';
		}
		if ($this->isColumnModified(Oops_Db_PaymentCcPeer::DATE_ADD)) {
			$modifiedColumns[':p' . $index++]  = '`DATE_ADD`';
		}

		$sql = sprintf(
			'INSERT INTO `' .  _DB_PREFIX_ . 'payment_cc` (%s) VALUES (%s)',
			implode(', ', $modifiedColumns),
			implode(', ', array_keys($modifiedColumns))
		);

		try {
			$stmt = $con->prepare($sql);
			foreach ($modifiedColumns as $identifier => $columnName) {
				switch ($columnName) {
					case '`ID_PAYMENT_CC`':
						$stmt->bindValue($identifier, $this->id_payment_cc, PDO::PARAM_INT);
						break;
					case '`ID_ORDER`':
						$stmt->bindValue($identifier, $this->id_order, PDO::PARAM_INT);
						break;
					case '`ID_CURRENCY`':
						$stmt->bindValue($identifier, $this->id_currency, PDO::PARAM_INT);
						break;
					case '`AMOUNT`':
						$stmt->bindValue($identifier, $this->amount, PDO::PARAM_STR);
						break;
					case '`TRANSACTION_ID`':
						$stmt->bindValue($identifier, $this->transaction_id, PDO::PARAM_STR);
						break;
					case '`CARD_NUMBER`':
						$stmt->bindValue($identifier, $this->card_number, PDO::PARAM_STR);
						break;
					case '`CARD_BRAND`':
						$stmt->bindValue($identifier, $this->card_brand, PDO::PARAM_STR);
						break;
					case '`CARD_EXPIRATION`':
						$stmt->bindValue($identifier, $this->card_expiration, PDO::PARAM_STR);
						break;
					case '`CARD_HOLDER`':
						$stmt->bindValue($identifier, $this->card_holder, PDO::PARAM_STR);
						break;
					case '`DATE_ADD`':
						$stmt->bindValue($identifier, $this->date_add, PDO::PARAM_STR);
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
		$this->setIdPaymentCc($pk);

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


			if (($retval = Oops_Db_PaymentCcPeer::doValidate($this, $columns)) !== true) {
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
		$pos = Oops_Db_PaymentCcPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getIdPaymentCc();
				break;
			case 1:
				return $this->getIdOrder();
				break;
			case 2:
				return $this->getIdCurrency();
				break;
			case 3:
				return $this->getAmount();
				break;
			case 4:
				return $this->getTransactionId();
				break;
			case 5:
				return $this->getCardNumber();
				break;
			case 6:
				return $this->getCardBrand();
				break;
			case 7:
				return $this->getCardExpiration();
				break;
			case 8:
				return $this->getCardHolder();
				break;
			case 9:
				return $this->getDateAdd();
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
		if (isset($alreadyDumpedObjects['Oops_Db_PaymentCc'][$this->getPrimaryKey()])) {
			return '*RECURSION*';
		}
		$alreadyDumpedObjects['Oops_Db_PaymentCc'][$this->getPrimaryKey()] = true;
		$keys = Oops_Db_PaymentCcPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getIdPaymentCc(),
			$keys[1] => $this->getIdOrder(),
			$keys[2] => $this->getIdCurrency(),
			$keys[3] => $this->getAmount(),
			$keys[4] => $this->getTransactionId(),
			$keys[5] => $this->getCardNumber(),
			$keys[6] => $this->getCardBrand(),
			$keys[7] => $this->getCardExpiration(),
			$keys[8] => $this->getCardHolder(),
			$keys[9] => $this->getDateAdd(),
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
		$pos = Oops_Db_PaymentCcPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setIdPaymentCc($value);
				break;
			case 1:
				$this->setIdOrder($value);
				break;
			case 2:
				$this->setIdCurrency($value);
				break;
			case 3:
				$this->setAmount($value);
				break;
			case 4:
				$this->setTransactionId($value);
				break;
			case 5:
				$this->setCardNumber($value);
				break;
			case 6:
				$this->setCardBrand($value);
				break;
			case 7:
				$this->setCardExpiration($value);
				break;
			case 8:
				$this->setCardHolder($value);
				break;
			case 9:
				$this->setDateAdd($value);
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
		$keys = Oops_Db_PaymentCcPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setIdPaymentCc($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setIdOrder($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setIdCurrency($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setAmount($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setTransactionId($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setCardNumber($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setCardBrand($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setCardExpiration($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setCardHolder($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setDateAdd($arr[$keys[9]]);
	}

	/**
	 * Build a Criteria object containing the values of all modified columns in this object.
	 *
	 * @return     Criteria The Criteria object containing all modified values.
	 */
	public function buildCriteria()
	{
		$criteria = new Criteria(Oops_Db_PaymentCcPeer::DATABASE_NAME);

		if ($this->isColumnModified(Oops_Db_PaymentCcPeer::ID_PAYMENT_CC)) $criteria->add(Oops_Db_PaymentCcPeer::ID_PAYMENT_CC, $this->id_payment_cc);
		if ($this->isColumnModified(Oops_Db_PaymentCcPeer::ID_ORDER)) $criteria->add(Oops_Db_PaymentCcPeer::ID_ORDER, $this->id_order);
		if ($this->isColumnModified(Oops_Db_PaymentCcPeer::ID_CURRENCY)) $criteria->add(Oops_Db_PaymentCcPeer::ID_CURRENCY, $this->id_currency);
		if ($this->isColumnModified(Oops_Db_PaymentCcPeer::AMOUNT)) $criteria->add(Oops_Db_PaymentCcPeer::AMOUNT, $this->amount);
		if ($this->isColumnModified(Oops_Db_PaymentCcPeer::TRANSACTION_ID)) $criteria->add(Oops_Db_PaymentCcPeer::TRANSACTION_ID, $this->transaction_id);
		if ($this->isColumnModified(Oops_Db_PaymentCcPeer::CARD_NUMBER)) $criteria->add(Oops_Db_PaymentCcPeer::CARD_NUMBER, $this->card_number);
		if ($this->isColumnModified(Oops_Db_PaymentCcPeer::CARD_BRAND)) $criteria->add(Oops_Db_PaymentCcPeer::CARD_BRAND, $this->card_brand);
		if ($this->isColumnModified(Oops_Db_PaymentCcPeer::CARD_EXPIRATION)) $criteria->add(Oops_Db_PaymentCcPeer::CARD_EXPIRATION, $this->card_expiration);
		if ($this->isColumnModified(Oops_Db_PaymentCcPeer::CARD_HOLDER)) $criteria->add(Oops_Db_PaymentCcPeer::CARD_HOLDER, $this->card_holder);
		if ($this->isColumnModified(Oops_Db_PaymentCcPeer::DATE_ADD)) $criteria->add(Oops_Db_PaymentCcPeer::DATE_ADD, $this->date_add);

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
		$criteria = new Criteria(Oops_Db_PaymentCcPeer::DATABASE_NAME);
		$criteria->add(Oops_Db_PaymentCcPeer::ID_PAYMENT_CC, $this->id_payment_cc);

		return $criteria;
	}

	/**
	 * Returns the primary key for this object (row).
	 * @return     int
	 */
	public function getPrimaryKey()
	{
		return $this->getIdPaymentCc();
	}

	/**
	 * Generic method to set the primary key (id_payment_cc column).
	 *
	 * @param      int $key Primary key.
	 * @return     void
	 */
	public function setPrimaryKey($key)
	{
		$this->setIdPaymentCc($key);
	}

	/**
	 * Returns true if the primary key for this object is null.
	 * @return     boolean
	 */
	public function isPrimaryKeyNull()
	{
		return null === $this->getIdPaymentCc();
	}

	/**
	 * Sets contents of passed object to values from current object.
	 *
	 * If desired, this method can also make copies of all associated (fkey referrers)
	 * objects.
	 *
	 * @param      object $copyObj An object of Oops_Db_PaymentCc (or compatible) type.
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
	 * @throws     PropelException
	 */
	public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
	{
		$copyObj->setIdOrder($this->getIdOrder());
		$copyObj->setIdCurrency($this->getIdCurrency());
		$copyObj->setAmount($this->getAmount());
		$copyObj->setTransactionId($this->getTransactionId());
		$copyObj->setCardNumber($this->getCardNumber());
		$copyObj->setCardBrand($this->getCardBrand());
		$copyObj->setCardExpiration($this->getCardExpiration());
		$copyObj->setCardHolder($this->getCardHolder());
		$copyObj->setDateAdd($this->getDateAdd());
		if ($makeNew) {
			$copyObj->setNew(true);
			$copyObj->setIdPaymentCc(NULL); // this is a auto-increment column, so set to default value
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
	 * @return     Oops_Db_PaymentCc Clone of current object.
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
	 * @return     Oops_Db_PaymentCcPeer
	 */
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new Oops_Db_PaymentCcPeer();
		}
		return self::$peer;
	}

	/**
	 * Clears the current object and sets all attributes to their default values
	 */
	public function clear()
	{
		$this->id_payment_cc = null;
		$this->id_order = null;
		$this->id_currency = null;
		$this->amount = null;
		$this->transaction_id = null;
		$this->card_number = null;
		$this->card_brand = null;
		$this->card_expiration = null;
		$this->card_holder = null;
		$this->date_add = null;
		$this->alreadyInSave = false;
		$this->alreadyInValidation = false;
		$this->clearAllReferences();
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
		return (string) $this->exportTo(Oops_Db_PaymentCcPeer::DEFAULT_STRING_FORMAT);
	}

} // Oops_Db_Propel_PaymentCc
