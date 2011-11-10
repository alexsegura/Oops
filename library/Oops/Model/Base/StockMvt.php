<?php


/**
 * Base class that represents a row from the 'stock_mvt' table.
 *
 * 
 *
 * @package    propel.generator.prestashop.om
 */
abstract class Oops_Model_Base_StockMvt extends BaseObject  implements Persistent
{

	/**
	 * Peer class name
	 */
	const PEER = 'Oops_Model_StockMvtPeer';

	/**
	 * The Peer class.
	 * Instance provides a convenient way of calling static methods on a class
	 * that calling code may not be able to identify.
	 * @var        Oops_Model_StockMvtPeer
	 */
	protected static $peer;

	/**
	 * The value for the id_stock_mvt field.
	 * @var        int
	 */
	protected $id_stock_mvt;

	/**
	 * The value for the id_product field.
	 * @var        int
	 */
	protected $id_product;

	/**
	 * The value for the id_product_attribute field.
	 * @var        int
	 */
	protected $id_product_attribute;

	/**
	 * The value for the id_order field.
	 * @var        int
	 */
	protected $id_order;

	/**
	 * The value for the id_stock_mvt_reason field.
	 * @var        int
	 */
	protected $id_stock_mvt_reason;

	/**
	 * The value for the id_employee field.
	 * @var        int
	 */
	protected $id_employee;

	/**
	 * The value for the quantity field.
	 * @var        int
	 */
	protected $quantity;

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
	 * @var        Product
	 */
	protected $aProduct;

	/**
	 * @var        array Oops_Model_StockMvtReason[] Collection to store aggregation of Oops_Model_StockMvtReason objects.
	 */
	protected $collStockMvtReasons;

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
	 * An array of objects scheduled for deletion.
	 * @var		array
	 */
	protected $stockMvtReasonsScheduledForDeletion = null;

	/**
	 * Get the [id_stock_mvt] column value.
	 * 
	 * @return     int
	 */
	public function getIdStockMvt()
	{
		return $this->id_stock_mvt;
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
	 * Get the [id_product_attribute] column value.
	 * 
	 * @return     int
	 */
	public function getIdProductAttribute()
	{
		return $this->id_product_attribute;
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
	 * Get the [id_stock_mvt_reason] column value.
	 * 
	 * @return     int
	 */
	public function getIdStockMvtReason()
	{
		return $this->id_stock_mvt_reason;
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
	 * Get the [quantity] column value.
	 * 
	 * @return     int
	 */
	public function getQuantity()
	{
		return $this->quantity;
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
	 * Set the value of [id_stock_mvt] column.
	 * 
	 * @param      int $v new value
	 * @return     Oops_Model_StockMvt The current object (for fluent API support)
	 */
	public function setIdStockMvt($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->id_stock_mvt !== $v) {
			$this->id_stock_mvt = $v;
			$this->modifiedColumns[] = Oops_Model_StockMvtPeer::ID_STOCK_MVT;
		}

		return $this;
	} // setIdStockMvt()

	/**
	 * Set the value of [id_product] column.
	 * 
	 * @param      int $v new value
	 * @return     Oops_Model_StockMvt The current object (for fluent API support)
	 */
	public function setIdProduct($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->id_product !== $v) {
			$this->id_product = $v;
			$this->modifiedColumns[] = Oops_Model_StockMvtPeer::ID_PRODUCT;
		}

		if ($this->aProduct !== null && $this->aProduct->getIdProduct() !== $v) {
			$this->aProduct = null;
		}

		return $this;
	} // setIdProduct()

	/**
	 * Set the value of [id_product_attribute] column.
	 * 
	 * @param      int $v new value
	 * @return     Oops_Model_StockMvt The current object (for fluent API support)
	 */
	public function setIdProductAttribute($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->id_product_attribute !== $v) {
			$this->id_product_attribute = $v;
			$this->modifiedColumns[] = Oops_Model_StockMvtPeer::ID_PRODUCT_ATTRIBUTE;
		}

		return $this;
	} // setIdProductAttribute()

	/**
	 * Set the value of [id_order] column.
	 * 
	 * @param      int $v new value
	 * @return     Oops_Model_StockMvt The current object (for fluent API support)
	 */
	public function setIdOrder($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->id_order !== $v) {
			$this->id_order = $v;
			$this->modifiedColumns[] = Oops_Model_StockMvtPeer::ID_ORDER;
		}

		return $this;
	} // setIdOrder()

	/**
	 * Set the value of [id_stock_mvt_reason] column.
	 * 
	 * @param      int $v new value
	 * @return     Oops_Model_StockMvt The current object (for fluent API support)
	 */
	public function setIdStockMvtReason($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->id_stock_mvt_reason !== $v) {
			$this->id_stock_mvt_reason = $v;
			$this->modifiedColumns[] = Oops_Model_StockMvtPeer::ID_STOCK_MVT_REASON;
		}

		return $this;
	} // setIdStockMvtReason()

	/**
	 * Set the value of [id_employee] column.
	 * 
	 * @param      int $v new value
	 * @return     Oops_Model_StockMvt The current object (for fluent API support)
	 */
	public function setIdEmployee($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->id_employee !== $v) {
			$this->id_employee = $v;
			$this->modifiedColumns[] = Oops_Model_StockMvtPeer::ID_EMPLOYEE;
		}

		return $this;
	} // setIdEmployee()

	/**
	 * Set the value of [quantity] column.
	 * 
	 * @param      int $v new value
	 * @return     Oops_Model_StockMvt The current object (for fluent API support)
	 */
	public function setQuantity($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->quantity !== $v) {
			$this->quantity = $v;
			$this->modifiedColumns[] = Oops_Model_StockMvtPeer::QUANTITY;
		}

		return $this;
	} // setQuantity()

	/**
	 * Sets the value of [date_add] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.
	 *               Empty strings are treated as NULL.
	 * @return     Oops_Model_StockMvt The current object (for fluent API support)
	 */
	public function setDateAdd($v)
	{
		$dt = PropelDateTime::newInstance($v, null, 'DateTime');
		if ($this->date_add !== null || $dt !== null) {
			$currentDateAsString = ($this->date_add !== null && $tmpDt = new DateTime($this->date_add)) ? $tmpDt->format('Y-m-d H:i:s') : null;
			$newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
			if ($currentDateAsString !== $newDateAsString) {
				$this->date_add = $newDateAsString;
				$this->modifiedColumns[] = Oops_Model_StockMvtPeer::DATE_ADD;
			}
		} // if either are not null

		return $this;
	} // setDateAdd()

	/**
	 * Sets the value of [date_upd] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.
	 *               Empty strings are treated as NULL.
	 * @return     Oops_Model_StockMvt The current object (for fluent API support)
	 */
	public function setDateUpd($v)
	{
		$dt = PropelDateTime::newInstance($v, null, 'DateTime');
		if ($this->date_upd !== null || $dt !== null) {
			$currentDateAsString = ($this->date_upd !== null && $tmpDt = new DateTime($this->date_upd)) ? $tmpDt->format('Y-m-d H:i:s') : null;
			$newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
			if ($currentDateAsString !== $newDateAsString) {
				$this->date_upd = $newDateAsString;
				$this->modifiedColumns[] = Oops_Model_StockMvtPeer::DATE_UPD;
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

			$this->id_stock_mvt = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
			$this->id_product = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
			$this->id_product_attribute = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
			$this->id_order = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
			$this->id_stock_mvt_reason = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
			$this->id_employee = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
			$this->quantity = ($row[$startcol + 6] !== null) ? (int) $row[$startcol + 6] : null;
			$this->date_add = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
			$this->date_upd = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
			$this->resetModified();

			$this->setNew(false);

			if ($rehydrate) {
				$this->ensureConsistency();
			}

			return $startcol + 9; // 9 = Oops_Model_StockMvtPeer::NUM_HYDRATE_COLUMNS.

		} catch (Exception $e) {
			throw new PropelException("Error populating Oops_Model_StockMvt object", $e);
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

		if ($this->aProduct !== null && $this->id_product !== $this->aProduct->getIdProduct()) {
			$this->aProduct = null;
		}
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
			$con = Propel::getConnection(Oops_Model_StockMvtPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		// We don't need to alter the object instance pool; we're just modifying this instance
		// already in the pool.

		$stmt = Oops_Model_StockMvtPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
		$row = $stmt->fetch(PDO::FETCH_NUM);
		$stmt->closeCursor();
		if (!$row) {
			throw new PropelException('Cannot find matching row in the database to reload object values.');
		}
		$this->hydrate($row, 0, true); // rehydrate

		if ($deep) {  // also de-associate any related objects?

			$this->aProduct = null;
			$this->collStockMvtReasons = null;

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
			$con = Propel::getConnection(Oops_Model_StockMvtPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$con->beginTransaction();
		try {
			$deleteQuery = Oops_Model_StockMvtQuery::create()
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
			$con = Propel::getConnection(Oops_Model_StockMvtPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
				Oops_Model_StockMvtPeer::addInstanceToPool($this);
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

			// We call the save method on the following object(s) if they
			// were passed to this object by their coresponding set
			// method.  This object relates to these object(s) by a
			// foreign key reference.

			if ($this->aProduct !== null) {
				if ($this->aProduct->isModified() || $this->aProduct->isNew()) {
					$affectedRows += $this->aProduct->save($con);
				}
				$this->setProduct($this->aProduct);
			}

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

			if ($this->stockMvtReasonsScheduledForDeletion !== null) {
				if (!$this->stockMvtReasonsScheduledForDeletion->isEmpty()) {
					Oops_Model_StockMvtReasonQuery::create()
						->filterByPrimaryKeys($this->stockMvtReasonsScheduledForDeletion->getPrimaryKeys(false))
						->delete($con);
					$this->stockMvtReasonsScheduledForDeletion = null;
				}
			}

			if ($this->collStockMvtReasons !== null) {
				foreach ($this->collStockMvtReasons as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
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

		$this->modifiedColumns[] = Oops_Model_StockMvtPeer::ID_STOCK_MVT;
		if (null !== $this->id_stock_mvt) {
			throw new PropelException('Cannot insert a value for auto-increment primary key (' . Oops_Model_StockMvtPeer::ID_STOCK_MVT . ')');
		}

		 // check the columns in natural order for more readable SQL queries
		if ($this->isColumnModified(Oops_Model_StockMvtPeer::ID_STOCK_MVT)) {
			$modifiedColumns[':p' . $index++]  = '`ID_STOCK_MVT`';
		}
		if ($this->isColumnModified(Oops_Model_StockMvtPeer::ID_PRODUCT)) {
			$modifiedColumns[':p' . $index++]  = '`ID_PRODUCT`';
		}
		if ($this->isColumnModified(Oops_Model_StockMvtPeer::ID_PRODUCT_ATTRIBUTE)) {
			$modifiedColumns[':p' . $index++]  = '`ID_PRODUCT_ATTRIBUTE`';
		}
		if ($this->isColumnModified(Oops_Model_StockMvtPeer::ID_ORDER)) {
			$modifiedColumns[':p' . $index++]  = '`ID_ORDER`';
		}
		if ($this->isColumnModified(Oops_Model_StockMvtPeer::ID_STOCK_MVT_REASON)) {
			$modifiedColumns[':p' . $index++]  = '`ID_STOCK_MVT_REASON`';
		}
		if ($this->isColumnModified(Oops_Model_StockMvtPeer::ID_EMPLOYEE)) {
			$modifiedColumns[':p' . $index++]  = '`ID_EMPLOYEE`';
		}
		if ($this->isColumnModified(Oops_Model_StockMvtPeer::QUANTITY)) {
			$modifiedColumns[':p' . $index++]  = '`QUANTITY`';
		}
		if ($this->isColumnModified(Oops_Model_StockMvtPeer::DATE_ADD)) {
			$modifiedColumns[':p' . $index++]  = '`DATE_ADD`';
		}
		if ($this->isColumnModified(Oops_Model_StockMvtPeer::DATE_UPD)) {
			$modifiedColumns[':p' . $index++]  = '`DATE_UPD`';
		}

		$sql = sprintf(
			'INSERT INTO `' .  _DB_PREFIX_ . 'stock_mvt` (%s) VALUES (%s)',
			implode(', ', $modifiedColumns),
			implode(', ', array_keys($modifiedColumns))
		);

		try {
			$stmt = $con->prepare($sql);
			foreach ($modifiedColumns as $identifier => $columnName) {
				switch ($columnName) {
					case '`ID_STOCK_MVT`':
						$stmt->bindValue($identifier, $this->id_stock_mvt, PDO::PARAM_INT);
						break;
					case '`ID_PRODUCT`':
						$stmt->bindValue($identifier, $this->id_product, PDO::PARAM_INT);
						break;
					case '`ID_PRODUCT_ATTRIBUTE`':
						$stmt->bindValue($identifier, $this->id_product_attribute, PDO::PARAM_INT);
						break;
					case '`ID_ORDER`':
						$stmt->bindValue($identifier, $this->id_order, PDO::PARAM_INT);
						break;
					case '`ID_STOCK_MVT_REASON`':
						$stmt->bindValue($identifier, $this->id_stock_mvt_reason, PDO::PARAM_INT);
						break;
					case '`ID_EMPLOYEE`':
						$stmt->bindValue($identifier, $this->id_employee, PDO::PARAM_INT);
						break;
					case '`QUANTITY`':
						$stmt->bindValue($identifier, $this->quantity, PDO::PARAM_INT);
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
		$this->setIdStockMvt($pk);

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


			// We call the validate method on the following object(s) if they
			// were passed to this object by their coresponding set
			// method.  This object relates to these object(s) by a
			// foreign key reference.

			if ($this->aProduct !== null) {
				if (!$this->aProduct->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aProduct->getValidationFailures());
				}
			}


			if (($retval = Oops_Model_StockMvtPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}


				if ($this->collStockMvtReasons !== null) {
					foreach ($this->collStockMvtReasons as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
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
		$pos = Oops_Model_StockMvtPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getIdStockMvt();
				break;
			case 1:
				return $this->getIdProduct();
				break;
			case 2:
				return $this->getIdProductAttribute();
				break;
			case 3:
				return $this->getIdOrder();
				break;
			case 4:
				return $this->getIdStockMvtReason();
				break;
			case 5:
				return $this->getIdEmployee();
				break;
			case 6:
				return $this->getQuantity();
				break;
			case 7:
				return $this->getDateAdd();
				break;
			case 8:
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
	 * @param     boolean $includeForeignObjects (optional) Whether to include hydrated related objects. Default to FALSE.
	 *
	 * @return    array an associative array containing the field names (as keys) and field values
	 */
	public function toArray($keyType = BasePeer::TYPE_PHPNAME, $includeLazyLoadColumns = true, $alreadyDumpedObjects = array(), $includeForeignObjects = false)
	{
		if (isset($alreadyDumpedObjects['Oops_Model_StockMvt'][$this->getPrimaryKey()])) {
			return '*RECURSION*';
		}
		$alreadyDumpedObjects['Oops_Model_StockMvt'][$this->getPrimaryKey()] = true;
		$keys = Oops_Model_StockMvtPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getIdStockMvt(),
			$keys[1] => $this->getIdProduct(),
			$keys[2] => $this->getIdProductAttribute(),
			$keys[3] => $this->getIdOrder(),
			$keys[4] => $this->getIdStockMvtReason(),
			$keys[5] => $this->getIdEmployee(),
			$keys[6] => $this->getQuantity(),
			$keys[7] => $this->getDateAdd(),
			$keys[8] => $this->getDateUpd(),
		);
		if ($includeForeignObjects) {
			if (null !== $this->aProduct) {
				$result['Product'] = $this->aProduct->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
			}
			if (null !== $this->collStockMvtReasons) {
				$result['StockMvtReasons'] = $this->collStockMvtReasons->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
			}
		}
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
		$pos = Oops_Model_StockMvtPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setIdStockMvt($value);
				break;
			case 1:
				$this->setIdProduct($value);
				break;
			case 2:
				$this->setIdProductAttribute($value);
				break;
			case 3:
				$this->setIdOrder($value);
				break;
			case 4:
				$this->setIdStockMvtReason($value);
				break;
			case 5:
				$this->setIdEmployee($value);
				break;
			case 6:
				$this->setQuantity($value);
				break;
			case 7:
				$this->setDateAdd($value);
				break;
			case 8:
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
		$keys = Oops_Model_StockMvtPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setIdStockMvt($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setIdProduct($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setIdProductAttribute($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setIdOrder($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setIdStockMvtReason($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setIdEmployee($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setQuantity($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setDateAdd($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setDateUpd($arr[$keys[8]]);
	}

	/**
	 * Build a Criteria object containing the values of all modified columns in this object.
	 *
	 * @return     Criteria The Criteria object containing all modified values.
	 */
	public function buildCriteria()
	{
		$criteria = new Criteria(Oops_Model_StockMvtPeer::DATABASE_NAME);

		if ($this->isColumnModified(Oops_Model_StockMvtPeer::ID_STOCK_MVT)) $criteria->add(Oops_Model_StockMvtPeer::ID_STOCK_MVT, $this->id_stock_mvt);
		if ($this->isColumnModified(Oops_Model_StockMvtPeer::ID_PRODUCT)) $criteria->add(Oops_Model_StockMvtPeer::ID_PRODUCT, $this->id_product);
		if ($this->isColumnModified(Oops_Model_StockMvtPeer::ID_PRODUCT_ATTRIBUTE)) $criteria->add(Oops_Model_StockMvtPeer::ID_PRODUCT_ATTRIBUTE, $this->id_product_attribute);
		if ($this->isColumnModified(Oops_Model_StockMvtPeer::ID_ORDER)) $criteria->add(Oops_Model_StockMvtPeer::ID_ORDER, $this->id_order);
		if ($this->isColumnModified(Oops_Model_StockMvtPeer::ID_STOCK_MVT_REASON)) $criteria->add(Oops_Model_StockMvtPeer::ID_STOCK_MVT_REASON, $this->id_stock_mvt_reason);
		if ($this->isColumnModified(Oops_Model_StockMvtPeer::ID_EMPLOYEE)) $criteria->add(Oops_Model_StockMvtPeer::ID_EMPLOYEE, $this->id_employee);
		if ($this->isColumnModified(Oops_Model_StockMvtPeer::QUANTITY)) $criteria->add(Oops_Model_StockMvtPeer::QUANTITY, $this->quantity);
		if ($this->isColumnModified(Oops_Model_StockMvtPeer::DATE_ADD)) $criteria->add(Oops_Model_StockMvtPeer::DATE_ADD, $this->date_add);
		if ($this->isColumnModified(Oops_Model_StockMvtPeer::DATE_UPD)) $criteria->add(Oops_Model_StockMvtPeer::DATE_UPD, $this->date_upd);

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
		$criteria = new Criteria(Oops_Model_StockMvtPeer::DATABASE_NAME);
		$criteria->add(Oops_Model_StockMvtPeer::ID_STOCK_MVT, $this->id_stock_mvt);

		return $criteria;
	}

	/**
	 * Returns the primary key for this object (row).
	 * @return     int
	 */
	public function getPrimaryKey()
	{
		return $this->getIdStockMvt();
	}

	/**
	 * Generic method to set the primary key (id_stock_mvt column).
	 *
	 * @param      int $key Primary key.
	 * @return     void
	 */
	public function setPrimaryKey($key)
	{
		$this->setIdStockMvt($key);
	}

	/**
	 * Returns true if the primary key for this object is null.
	 * @return     boolean
	 */
	public function isPrimaryKeyNull()
	{
		return null === $this->getIdStockMvt();
	}

	/**
	 * Sets contents of passed object to values from current object.
	 *
	 * If desired, this method can also make copies of all associated (fkey referrers)
	 * objects.
	 *
	 * @param      object $copyObj An object of Oops_Model_StockMvt (or compatible) type.
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
	 * @throws     PropelException
	 */
	public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
	{
		$copyObj->setIdProduct($this->getIdProduct());
		$copyObj->setIdProductAttribute($this->getIdProductAttribute());
		$copyObj->setIdOrder($this->getIdOrder());
		$copyObj->setIdStockMvtReason($this->getIdStockMvtReason());
		$copyObj->setIdEmployee($this->getIdEmployee());
		$copyObj->setQuantity($this->getQuantity());
		$copyObj->setDateAdd($this->getDateAdd());
		$copyObj->setDateUpd($this->getDateUpd());

		if ($deepCopy) {
			// important: temporarily setNew(false) because this affects the behavior of
			// the getter/setter methods for fkey referrer objects.
			$copyObj->setNew(false);

			foreach ($this->getStockMvtReasons() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addStockMvtReason($relObj->copy($deepCopy));
				}
			}

		} // if ($deepCopy)

		if ($makeNew) {
			$copyObj->setNew(true);
			$copyObj->setIdStockMvt(NULL); // this is a auto-increment column, so set to default value
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
	 * @return     Oops_Model_StockMvt Clone of current object.
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
	 * @return     Oops_Model_StockMvtPeer
	 */
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new Oops_Model_StockMvtPeer();
		}
		return self::$peer;
	}

	/**
	 * Declares an association between this object and a Oops_Model_Product object.
	 *
	 * @param      Oops_Model_Product $v
	 * @return     Oops_Model_StockMvt The current object (for fluent API support)
	 * @throws     PropelException
	 */
	public function setProduct(Oops_Model_Product $v = null)
	{
		if ($v === null) {
			$this->setIdProduct(NULL);
		} else {
			$this->setIdProduct($v->getIdProduct());
		}

		$this->aProduct = $v;

		// Add binding for other direction of this n:n relationship.
		// If this object has already been added to the Oops_Model_Product object, it will not be re-added.
		if ($v !== null) {
			$v->addStockMvt($this);
		}

		return $this;
	}


	/**
	 * Get the associated Oops_Model_Product object
	 *
	 * @param      PropelPDO Optional Connection object.
	 * @return     Oops_Model_Product The associated Oops_Model_Product object.
	 * @throws     PropelException
	 */
	public function getProduct(PropelPDO $con = null)
	{
		if ($this->aProduct === null && ($this->id_product !== null)) {
			$this->aProduct = Oops_Model_ProductQuery::create()->findPk($this->id_product, $con);
			/* The following can be used additionally to
				guarantee the related object contains a reference
				to this object.  This level of coupling may, however, be
				undesirable since it could result in an only partially populated collection
				in the referenced object.
				$this->aProduct->addStockMvts($this);
			 */
		}
		return $this->aProduct;
	}


	/**
	 * Initializes a collection based on the name of a relation.
	 * Avoids crafting an 'init[$relationName]s' method name
	 * that wouldn't work when StandardEnglishPluralizer is used.
	 *
	 * @param      string $relationName The name of the relation to initialize
	 * @return     void
	 */
	public function initRelation($relationName)
	{
		if ('StockMvtReason' == $relationName) {
			return $this->initStockMvtReasons();
		}
	}

	/**
	 * Clears out the collStockMvtReasons collection
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addStockMvtReasons()
	 */
	public function clearStockMvtReasons()
	{
		$this->collStockMvtReasons = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collStockMvtReasons collection.
	 *
	 * By default this just sets the collStockMvtReasons collection to an empty array (like clearcollStockMvtReasons());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @param      boolean $overrideExisting If set to true, the method call initializes
	 *                                        the collection even if it is not empty
	 *
	 * @return     void
	 */
	public function initStockMvtReasons($overrideExisting = true)
	{
		if (null !== $this->collStockMvtReasons && !$overrideExisting) {
			return;
		}
		$this->collStockMvtReasons = new PropelObjectCollection();
		$this->collStockMvtReasons->setModel('Oops_Model_StockMvtReason');
	}

	/**
	 * Gets an array of Oops_Model_StockMvtReason objects which contain a foreign key that references this object.
	 *
	 * If the $criteria is not null, it is used to always fetch the results from the database.
	 * Otherwise the results are fetched from the database the first time, then cached.
	 * Next time the same method is called without $criteria, the cached collection is returned.
	 * If this Oops_Model_StockMvt is new, it will return
	 * an empty collection or the current collection; the criteria is ignored on a new object.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @return     PropelCollection|array Oops_Model_StockMvtReason[] List of Oops_Model_StockMvtReason objects
	 * @throws     PropelException
	 */
	public function getStockMvtReasons($criteria = null, PropelPDO $con = null)
	{
		if(null === $this->collStockMvtReasons || null !== $criteria) {
			if ($this->isNew() && null === $this->collStockMvtReasons) {
				// return empty collection
				$this->initStockMvtReasons();
			} else {
				$collStockMvtReasons = Oops_Model_StockMvtReasonQuery::create(null, $criteria)
					->filterByStockMvt($this)
					->find($con);
				if (null !== $criteria) {
					return $collStockMvtReasons;
				}
				$this->collStockMvtReasons = $collStockMvtReasons;
			}
		}
		return $this->collStockMvtReasons;
	}

	/**
	 * Sets a collection of StockMvtReason objects related by a one-to-many relationship
	 * to the current object.
	 * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
	 * and new objects from the given Propel collection.
	 *
	 * @param      PropelCollection $stockMvtReasons A Propel collection.
	 * @param      PropelPDO $con Optional connection object
	 */
	public function setStockMvtReasons(PropelCollection $stockMvtReasons, PropelPDO $con = null)
	{
		$this->stockMvtReasonsScheduledForDeletion = $this->getStockMvtReasons(new Criteria(), $con)->diff($stockMvtReasons);

		foreach ($stockMvtReasons as $stockMvtReason) {
			// Fix issue with collection modified by reference
			if ($stockMvtReason->isNew()) {
				$stockMvtReason->setStockMvt($this);
			}
			$this->addStockMvtReason($stockMvtReason);
		}

		$this->collStockMvtReasons = $stockMvtReasons;
	}

	/**
	 * Returns the number of related Oops_Model_StockMvtReason objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related Oops_Model_StockMvtReason objects.
	 * @throws     PropelException
	 */
	public function countStockMvtReasons(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if(null === $this->collStockMvtReasons || null !== $criteria) {
			if ($this->isNew() && null === $this->collStockMvtReasons) {
				return 0;
			} else {
				$query = Oops_Model_StockMvtReasonQuery::create(null, $criteria);
				if($distinct) {
					$query->distinct();
				}
				return $query
					->filterByStockMvt($this)
					->count($con);
			}
		} else {
			return count($this->collStockMvtReasons);
		}
	}

	/**
	 * Method called to associate a Oops_Model_StockMvtReason object to this object
	 * through the Oops_Model_StockMvtReason foreign key attribute.
	 *
	 * @param      Oops_Model_StockMvtReason $l Oops_Model_StockMvtReason
	 * @return     Oops_Model_StockMvt The current object (for fluent API support)
	 */
	public function addStockMvtReason(Oops_Model_StockMvtReason $l)
	{
		if ($this->collStockMvtReasons === null) {
			$this->initStockMvtReasons();
		}
		if (!$this->collStockMvtReasons->contains($l)) { // only add it if the **same** object is not already associated
			$this->doAddStockMvtReason($l);
		}

		return $this;
	}

	/**
	 * @param	StockMvtReason $stockMvtReason The stockMvtReason object to add.
	 */
	protected function doAddStockMvtReason($stockMvtReason)
	{
		$this->collStockMvtReasons[]= $stockMvtReason;
		$stockMvtReason->setStockMvt($this);
	}

	/**
	 * Clears the current object and sets all attributes to their default values
	 */
	public function clear()
	{
		$this->id_stock_mvt = null;
		$this->id_product = null;
		$this->id_product_attribute = null;
		$this->id_order = null;
		$this->id_stock_mvt_reason = null;
		$this->id_employee = null;
		$this->quantity = null;
		$this->date_add = null;
		$this->date_upd = null;
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
			if ($this->collStockMvtReasons) {
				foreach ($this->collStockMvtReasons as $o) {
					$o->clearAllReferences($deep);
				}
			}
		} // if ($deep)

		if ($this->collStockMvtReasons instanceof PropelCollection) {
			$this->collStockMvtReasons->clearIterator();
		}
		$this->collStockMvtReasons = null;
		$this->aProduct = null;
	}

	/**
	 * Return the string representation of this object
	 *
	 * @return string
	 */
	public function __toString()
	{
		return (string) $this->exportTo(Oops_Model_StockMvtPeer::DEFAULT_STRING_FORMAT);
	}

} // Oops_Model_Base_StockMvt
