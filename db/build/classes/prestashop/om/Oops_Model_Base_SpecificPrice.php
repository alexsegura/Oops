<?php


/**
 * Base class that represents a row from the 'djland_specific_price' table.
 *
 * 
 *
 * @package    propel.generator.prestashop.om
 */
abstract class Oops_Model_Base_SpecificPrice extends BaseObject  implements Persistent
{

	/**
	 * Peer class name
	 */
	const PEER = 'Oops_Model_SpecificPricePeer';

	/**
	 * The Peer class.
	 * Instance provides a convenient way of calling static methods on a class
	 * that calling code may not be able to identify.
	 * @var        Oops_Model_SpecificPricePeer
	 */
	protected static $peer;

	/**
	 * The value for the id_specific_price field.
	 * @var        int
	 */
	protected $id_specific_price;

	/**
	 * The value for the id_product field.
	 * @var        int
	 */
	protected $id_product;

	/**
	 * The value for the id_shop field.
	 * @var        int
	 */
	protected $id_shop;

	/**
	 * The value for the id_currency field.
	 * @var        int
	 */
	protected $id_currency;

	/**
	 * The value for the id_country field.
	 * @var        int
	 */
	protected $id_country;

	/**
	 * The value for the id_group field.
	 * @var        int
	 */
	protected $id_group;

	/**
	 * The value for the price field.
	 * @var        string
	 */
	protected $price;

	/**
	 * The value for the from_quantity field.
	 * @var        int
	 */
	protected $from_quantity;

	/**
	 * The value for the reduction field.
	 * @var        string
	 */
	protected $reduction;

	/**
	 * The value for the reduction_type field.
	 * @var        string
	 */
	protected $reduction_type;

	/**
	 * The value for the from field.
	 * @var        string
	 */
	protected $from;

	/**
	 * The value for the to field.
	 * @var        string
	 */
	protected $to;

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
	 * Get the [id_specific_price] column value.
	 * 
	 * @return     int
	 */
	public function getIdSpecificPrice()
	{
		return $this->id_specific_price;
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
	 * Get the [id_shop] column value.
	 * 
	 * @return     int
	 */
	public function getIdShop()
	{
		return $this->id_shop;
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
	 * Get the [id_country] column value.
	 * 
	 * @return     int
	 */
	public function getIdCountry()
	{
		return $this->id_country;
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
	 * Get the [price] column value.
	 * 
	 * @return     string
	 */
	public function getPrice()
	{
		return $this->price;
	}

	/**
	 * Get the [from_quantity] column value.
	 * 
	 * @return     int
	 */
	public function getFromQuantity()
	{
		return $this->from_quantity;
	}

	/**
	 * Get the [reduction] column value.
	 * 
	 * @return     string
	 */
	public function getReduction()
	{
		return $this->reduction;
	}

	/**
	 * Get the [reduction_type] column value.
	 * 
	 * @return     string
	 */
	public function getReductionType()
	{
		return $this->reduction_type;
	}

	/**
	 * Get the [optionally formatted] temporal [from] column value.
	 * 
	 *
	 * @param      string $format The date/time format string (either date()-style or strftime()-style).
	 *							If format is NULL, then the raw DateTime object will be returned.
	 * @return     mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00 00:00:00
	 * @throws     PropelException - if unable to parse/validate the date/time value.
	 */
	public function getFrom($format = 'Y-m-d H:i:s')
	{
		if ($this->from === null) {
			return null;
		}


		if ($this->from === '0000-00-00 00:00:00') {
			// while technically this is not a default value of NULL,
			// this seems to be closest in meaning.
			return null;
		} else {
			try {
				$dt = new DateTime($this->from);
			} catch (Exception $x) {
				throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->from, true), $x);
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
	 * Get the [optionally formatted] temporal [to] column value.
	 * 
	 *
	 * @param      string $format The date/time format string (either date()-style or strftime()-style).
	 *							If format is NULL, then the raw DateTime object will be returned.
	 * @return     mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00 00:00:00
	 * @throws     PropelException - if unable to parse/validate the date/time value.
	 */
	public function getTo($format = 'Y-m-d H:i:s')
	{
		if ($this->to === null) {
			return null;
		}


		if ($this->to === '0000-00-00 00:00:00') {
			// while technically this is not a default value of NULL,
			// this seems to be closest in meaning.
			return null;
		} else {
			try {
				$dt = new DateTime($this->to);
			} catch (Exception $x) {
				throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->to, true), $x);
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
	 * Set the value of [id_specific_price] column.
	 * 
	 * @param      int $v new value
	 * @return     Oops_Model_SpecificPrice The current object (for fluent API support)
	 */
	public function setIdSpecificPrice($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->id_specific_price !== $v) {
			$this->id_specific_price = $v;
			$this->modifiedColumns[] = Oops_Model_SpecificPricePeer::ID_SPECIFIC_PRICE;
		}

		return $this;
	} // setIdSpecificPrice()

	/**
	 * Set the value of [id_product] column.
	 * 
	 * @param      int $v new value
	 * @return     Oops_Model_SpecificPrice The current object (for fluent API support)
	 */
	public function setIdProduct($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->id_product !== $v) {
			$this->id_product = $v;
			$this->modifiedColumns[] = Oops_Model_SpecificPricePeer::ID_PRODUCT;
		}

		return $this;
	} // setIdProduct()

	/**
	 * Set the value of [id_shop] column.
	 * 
	 * @param      int $v new value
	 * @return     Oops_Model_SpecificPrice The current object (for fluent API support)
	 */
	public function setIdShop($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->id_shop !== $v) {
			$this->id_shop = $v;
			$this->modifiedColumns[] = Oops_Model_SpecificPricePeer::ID_SHOP;
		}

		return $this;
	} // setIdShop()

	/**
	 * Set the value of [id_currency] column.
	 * 
	 * @param      int $v new value
	 * @return     Oops_Model_SpecificPrice The current object (for fluent API support)
	 */
	public function setIdCurrency($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->id_currency !== $v) {
			$this->id_currency = $v;
			$this->modifiedColumns[] = Oops_Model_SpecificPricePeer::ID_CURRENCY;
		}

		return $this;
	} // setIdCurrency()

	/**
	 * Set the value of [id_country] column.
	 * 
	 * @param      int $v new value
	 * @return     Oops_Model_SpecificPrice The current object (for fluent API support)
	 */
	public function setIdCountry($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->id_country !== $v) {
			$this->id_country = $v;
			$this->modifiedColumns[] = Oops_Model_SpecificPricePeer::ID_COUNTRY;
		}

		return $this;
	} // setIdCountry()

	/**
	 * Set the value of [id_group] column.
	 * 
	 * @param      int $v new value
	 * @return     Oops_Model_SpecificPrice The current object (for fluent API support)
	 */
	public function setIdGroup($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->id_group !== $v) {
			$this->id_group = $v;
			$this->modifiedColumns[] = Oops_Model_SpecificPricePeer::ID_GROUP;
		}

		return $this;
	} // setIdGroup()

	/**
	 * Set the value of [price] column.
	 * 
	 * @param      string $v new value
	 * @return     Oops_Model_SpecificPrice The current object (for fluent API support)
	 */
	public function setPrice($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->price !== $v) {
			$this->price = $v;
			$this->modifiedColumns[] = Oops_Model_SpecificPricePeer::PRICE;
		}

		return $this;
	} // setPrice()

	/**
	 * Set the value of [from_quantity] column.
	 * 
	 * @param      int $v new value
	 * @return     Oops_Model_SpecificPrice The current object (for fluent API support)
	 */
	public function setFromQuantity($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->from_quantity !== $v) {
			$this->from_quantity = $v;
			$this->modifiedColumns[] = Oops_Model_SpecificPricePeer::FROM_QUANTITY;
		}

		return $this;
	} // setFromQuantity()

	/**
	 * Set the value of [reduction] column.
	 * 
	 * @param      string $v new value
	 * @return     Oops_Model_SpecificPrice The current object (for fluent API support)
	 */
	public function setReduction($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->reduction !== $v) {
			$this->reduction = $v;
			$this->modifiedColumns[] = Oops_Model_SpecificPricePeer::REDUCTION;
		}

		return $this;
	} // setReduction()

	/**
	 * Set the value of [reduction_type] column.
	 * 
	 * @param      string $v new value
	 * @return     Oops_Model_SpecificPrice The current object (for fluent API support)
	 */
	public function setReductionType($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->reduction_type !== $v) {
			$this->reduction_type = $v;
			$this->modifiedColumns[] = Oops_Model_SpecificPricePeer::REDUCTION_TYPE;
		}

		return $this;
	} // setReductionType()

	/**
	 * Sets the value of [from] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.
	 *               Empty strings are treated as NULL.
	 * @return     Oops_Model_SpecificPrice The current object (for fluent API support)
	 */
	public function setFrom($v)
	{
		$dt = PropelDateTime::newInstance($v, null, 'DateTime');
		if ($this->from !== null || $dt !== null) {
			$currentDateAsString = ($this->from !== null && $tmpDt = new DateTime($this->from)) ? $tmpDt->format('Y-m-d H:i:s') : null;
			$newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
			if ($currentDateAsString !== $newDateAsString) {
				$this->from = $newDateAsString;
				$this->modifiedColumns[] = Oops_Model_SpecificPricePeer::FROM;
			}
		} // if either are not null

		return $this;
	} // setFrom()

	/**
	 * Sets the value of [to] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.
	 *               Empty strings are treated as NULL.
	 * @return     Oops_Model_SpecificPrice The current object (for fluent API support)
	 */
	public function setTo($v)
	{
		$dt = PropelDateTime::newInstance($v, null, 'DateTime');
		if ($this->to !== null || $dt !== null) {
			$currentDateAsString = ($this->to !== null && $tmpDt = new DateTime($this->to)) ? $tmpDt->format('Y-m-d H:i:s') : null;
			$newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
			if ($currentDateAsString !== $newDateAsString) {
				$this->to = $newDateAsString;
				$this->modifiedColumns[] = Oops_Model_SpecificPricePeer::TO;
			}
		} // if either are not null

		return $this;
	} // setTo()

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

			$this->id_specific_price = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
			$this->id_product = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
			$this->id_shop = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
			$this->id_currency = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
			$this->id_country = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
			$this->id_group = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
			$this->price = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
			$this->from_quantity = ($row[$startcol + 7] !== null) ? (int) $row[$startcol + 7] : null;
			$this->reduction = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
			$this->reduction_type = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
			$this->from = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
			$this->to = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
			$this->resetModified();

			$this->setNew(false);

			if ($rehydrate) {
				$this->ensureConsistency();
			}

			return $startcol + 12; // 12 = Oops_Model_SpecificPricePeer::NUM_HYDRATE_COLUMNS.

		} catch (Exception $e) {
			throw new PropelException("Error populating Oops_Model_SpecificPrice object", $e);
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
			$con = Propel::getConnection(Oops_Model_SpecificPricePeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		// We don't need to alter the object instance pool; we're just modifying this instance
		// already in the pool.

		$stmt = Oops_Model_SpecificPricePeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
			$con = Propel::getConnection(Oops_Model_SpecificPricePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$con->beginTransaction();
		try {
			$deleteQuery = Oops_Model_SpecificPriceQuery::create()
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
			$con = Propel::getConnection(Oops_Model_SpecificPricePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
				Oops_Model_SpecificPricePeer::addInstanceToPool($this);
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

		$this->modifiedColumns[] = Oops_Model_SpecificPricePeer::ID_SPECIFIC_PRICE;
		if (null !== $this->id_specific_price) {
			throw new PropelException('Cannot insert a value for auto-increment primary key (' . Oops_Model_SpecificPricePeer::ID_SPECIFIC_PRICE . ')');
		}

		 // check the columns in natural order for more readable SQL queries
		if ($this->isColumnModified(Oops_Model_SpecificPricePeer::ID_SPECIFIC_PRICE)) {
			$modifiedColumns[':p' . $index++]  = '`ID_SPECIFIC_PRICE`';
		}
		if ($this->isColumnModified(Oops_Model_SpecificPricePeer::ID_PRODUCT)) {
			$modifiedColumns[':p' . $index++]  = '`ID_PRODUCT`';
		}
		if ($this->isColumnModified(Oops_Model_SpecificPricePeer::ID_SHOP)) {
			$modifiedColumns[':p' . $index++]  = '`ID_SHOP`';
		}
		if ($this->isColumnModified(Oops_Model_SpecificPricePeer::ID_CURRENCY)) {
			$modifiedColumns[':p' . $index++]  = '`ID_CURRENCY`';
		}
		if ($this->isColumnModified(Oops_Model_SpecificPricePeer::ID_COUNTRY)) {
			$modifiedColumns[':p' . $index++]  = '`ID_COUNTRY`';
		}
		if ($this->isColumnModified(Oops_Model_SpecificPricePeer::ID_GROUP)) {
			$modifiedColumns[':p' . $index++]  = '`ID_GROUP`';
		}
		if ($this->isColumnModified(Oops_Model_SpecificPricePeer::PRICE)) {
			$modifiedColumns[':p' . $index++]  = '`PRICE`';
		}
		if ($this->isColumnModified(Oops_Model_SpecificPricePeer::FROM_QUANTITY)) {
			$modifiedColumns[':p' . $index++]  = '`FROM_QUANTITY`';
		}
		if ($this->isColumnModified(Oops_Model_SpecificPricePeer::REDUCTION)) {
			$modifiedColumns[':p' . $index++]  = '`REDUCTION`';
		}
		if ($this->isColumnModified(Oops_Model_SpecificPricePeer::REDUCTION_TYPE)) {
			$modifiedColumns[':p' . $index++]  = '`REDUCTION_TYPE`';
		}
		if ($this->isColumnModified(Oops_Model_SpecificPricePeer::FROM)) {
			$modifiedColumns[':p' . $index++]  = '`FROM`';
		}
		if ($this->isColumnModified(Oops_Model_SpecificPricePeer::TO)) {
			$modifiedColumns[':p' . $index++]  = '`TO`';
		}

		$sql = sprintf(
			'INSERT INTO `' . _DB_PREFIX_ . 'djland_specific_price` (%s) VALUES (%s)',
			implode(', ', $modifiedColumns),
			implode(', ', array_keys($modifiedColumns))
		);

		try {
			$stmt = $con->prepare($sql);
			foreach ($modifiedColumns as $identifier => $columnName) {
				switch ($columnName) {
					case '`ID_SPECIFIC_PRICE`':
						$stmt->bindValue($identifier, $this->id_specific_price, PDO::PARAM_INT);
						break;
					case '`ID_PRODUCT`':
						$stmt->bindValue($identifier, $this->id_product, PDO::PARAM_INT);
						break;
					case '`ID_SHOP`':
						$stmt->bindValue($identifier, $this->id_shop, PDO::PARAM_INT);
						break;
					case '`ID_CURRENCY`':
						$stmt->bindValue($identifier, $this->id_currency, PDO::PARAM_INT);
						break;
					case '`ID_COUNTRY`':
						$stmt->bindValue($identifier, $this->id_country, PDO::PARAM_INT);
						break;
					case '`ID_GROUP`':
						$stmt->bindValue($identifier, $this->id_group, PDO::PARAM_INT);
						break;
					case '`PRICE`':
						$stmt->bindValue($identifier, $this->price, PDO::PARAM_STR);
						break;
					case '`FROM_QUANTITY`':
						$stmt->bindValue($identifier, $this->from_quantity, PDO::PARAM_INT);
						break;
					case '`REDUCTION`':
						$stmt->bindValue($identifier, $this->reduction, PDO::PARAM_STR);
						break;
					case '`REDUCTION_TYPE`':
						$stmt->bindValue($identifier, $this->reduction_type, PDO::PARAM_STR);
						break;
					case '`FROM`':
						$stmt->bindValue($identifier, $this->from, PDO::PARAM_STR);
						break;
					case '`TO`':
						$stmt->bindValue($identifier, $this->to, PDO::PARAM_STR);
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
		$this->setIdSpecificPrice($pk);

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


			if (($retval = Oops_Model_SpecificPricePeer::doValidate($this, $columns)) !== true) {
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
		$pos = Oops_Model_SpecificPricePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getIdSpecificPrice();
				break;
			case 1:
				return $this->getIdProduct();
				break;
			case 2:
				return $this->getIdShop();
				break;
			case 3:
				return $this->getIdCurrency();
				break;
			case 4:
				return $this->getIdCountry();
				break;
			case 5:
				return $this->getIdGroup();
				break;
			case 6:
				return $this->getPrice();
				break;
			case 7:
				return $this->getFromQuantity();
				break;
			case 8:
				return $this->getReduction();
				break;
			case 9:
				return $this->getReductionType();
				break;
			case 10:
				return $this->getFrom();
				break;
			case 11:
				return $this->getTo();
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
		if (isset($alreadyDumpedObjects['Oops_Model_SpecificPrice'][$this->getPrimaryKey()])) {
			return '*RECURSION*';
		}
		$alreadyDumpedObjects['Oops_Model_SpecificPrice'][$this->getPrimaryKey()] = true;
		$keys = Oops_Model_SpecificPricePeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getIdSpecificPrice(),
			$keys[1] => $this->getIdProduct(),
			$keys[2] => $this->getIdShop(),
			$keys[3] => $this->getIdCurrency(),
			$keys[4] => $this->getIdCountry(),
			$keys[5] => $this->getIdGroup(),
			$keys[6] => $this->getPrice(),
			$keys[7] => $this->getFromQuantity(),
			$keys[8] => $this->getReduction(),
			$keys[9] => $this->getReductionType(),
			$keys[10] => $this->getFrom(),
			$keys[11] => $this->getTo(),
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
		$pos = Oops_Model_SpecificPricePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setIdSpecificPrice($value);
				break;
			case 1:
				$this->setIdProduct($value);
				break;
			case 2:
				$this->setIdShop($value);
				break;
			case 3:
				$this->setIdCurrency($value);
				break;
			case 4:
				$this->setIdCountry($value);
				break;
			case 5:
				$this->setIdGroup($value);
				break;
			case 6:
				$this->setPrice($value);
				break;
			case 7:
				$this->setFromQuantity($value);
				break;
			case 8:
				$this->setReduction($value);
				break;
			case 9:
				$this->setReductionType($value);
				break;
			case 10:
				$this->setFrom($value);
				break;
			case 11:
				$this->setTo($value);
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
		$keys = Oops_Model_SpecificPricePeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setIdSpecificPrice($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setIdProduct($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setIdShop($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setIdCurrency($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setIdCountry($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setIdGroup($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setPrice($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setFromQuantity($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setReduction($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setReductionType($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setFrom($arr[$keys[10]]);
		if (array_key_exists($keys[11], $arr)) $this->setTo($arr[$keys[11]]);
	}

	/**
	 * Build a Criteria object containing the values of all modified columns in this object.
	 *
	 * @return     Criteria The Criteria object containing all modified values.
	 */
	public function buildCriteria()
	{
		$criteria = new Criteria(Oops_Model_SpecificPricePeer::DATABASE_NAME);

		if ($this->isColumnModified(Oops_Model_SpecificPricePeer::ID_SPECIFIC_PRICE)) $criteria->add(Oops_Model_SpecificPricePeer::ID_SPECIFIC_PRICE, $this->id_specific_price);
		if ($this->isColumnModified(Oops_Model_SpecificPricePeer::ID_PRODUCT)) $criteria->add(Oops_Model_SpecificPricePeer::ID_PRODUCT, $this->id_product);
		if ($this->isColumnModified(Oops_Model_SpecificPricePeer::ID_SHOP)) $criteria->add(Oops_Model_SpecificPricePeer::ID_SHOP, $this->id_shop);
		if ($this->isColumnModified(Oops_Model_SpecificPricePeer::ID_CURRENCY)) $criteria->add(Oops_Model_SpecificPricePeer::ID_CURRENCY, $this->id_currency);
		if ($this->isColumnModified(Oops_Model_SpecificPricePeer::ID_COUNTRY)) $criteria->add(Oops_Model_SpecificPricePeer::ID_COUNTRY, $this->id_country);
		if ($this->isColumnModified(Oops_Model_SpecificPricePeer::ID_GROUP)) $criteria->add(Oops_Model_SpecificPricePeer::ID_GROUP, $this->id_group);
		if ($this->isColumnModified(Oops_Model_SpecificPricePeer::PRICE)) $criteria->add(Oops_Model_SpecificPricePeer::PRICE, $this->price);
		if ($this->isColumnModified(Oops_Model_SpecificPricePeer::FROM_QUANTITY)) $criteria->add(Oops_Model_SpecificPricePeer::FROM_QUANTITY, $this->from_quantity);
		if ($this->isColumnModified(Oops_Model_SpecificPricePeer::REDUCTION)) $criteria->add(Oops_Model_SpecificPricePeer::REDUCTION, $this->reduction);
		if ($this->isColumnModified(Oops_Model_SpecificPricePeer::REDUCTION_TYPE)) $criteria->add(Oops_Model_SpecificPricePeer::REDUCTION_TYPE, $this->reduction_type);
		if ($this->isColumnModified(Oops_Model_SpecificPricePeer::FROM)) $criteria->add(Oops_Model_SpecificPricePeer::FROM, $this->from);
		if ($this->isColumnModified(Oops_Model_SpecificPricePeer::TO)) $criteria->add(Oops_Model_SpecificPricePeer::TO, $this->to);

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
		$criteria = new Criteria(Oops_Model_SpecificPricePeer::DATABASE_NAME);
		$criteria->add(Oops_Model_SpecificPricePeer::ID_SPECIFIC_PRICE, $this->id_specific_price);

		return $criteria;
	}

	/**
	 * Returns the primary key for this object (row).
	 * @return     int
	 */
	public function getPrimaryKey()
	{
		return $this->getIdSpecificPrice();
	}

	/**
	 * Generic method to set the primary key (id_specific_price column).
	 *
	 * @param      int $key Primary key.
	 * @return     void
	 */
	public function setPrimaryKey($key)
	{
		$this->setIdSpecificPrice($key);
	}

	/**
	 * Returns true if the primary key for this object is null.
	 * @return     boolean
	 */
	public function isPrimaryKeyNull()
	{
		return null === $this->getIdSpecificPrice();
	}

	/**
	 * Sets contents of passed object to values from current object.
	 *
	 * If desired, this method can also make copies of all associated (fkey referrers)
	 * objects.
	 *
	 * @param      object $copyObj An object of Oops_Model_SpecificPrice (or compatible) type.
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
	 * @throws     PropelException
	 */
	public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
	{
		$copyObj->setIdProduct($this->getIdProduct());
		$copyObj->setIdShop($this->getIdShop());
		$copyObj->setIdCurrency($this->getIdCurrency());
		$copyObj->setIdCountry($this->getIdCountry());
		$copyObj->setIdGroup($this->getIdGroup());
		$copyObj->setPrice($this->getPrice());
		$copyObj->setFromQuantity($this->getFromQuantity());
		$copyObj->setReduction($this->getReduction());
		$copyObj->setReductionType($this->getReductionType());
		$copyObj->setFrom($this->getFrom());
		$copyObj->setTo($this->getTo());
		if ($makeNew) {
			$copyObj->setNew(true);
			$copyObj->setIdSpecificPrice(NULL); // this is a auto-increment column, so set to default value
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
	 * @return     Oops_Model_SpecificPrice Clone of current object.
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
	 * @return     Oops_Model_SpecificPricePeer
	 */
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new Oops_Model_SpecificPricePeer();
		}
		return self::$peer;
	}

	/**
	 * Clears the current object and sets all attributes to their default values
	 */
	public function clear()
	{
		$this->id_specific_price = null;
		$this->id_product = null;
		$this->id_shop = null;
		$this->id_currency = null;
		$this->id_country = null;
		$this->id_group = null;
		$this->price = null;
		$this->from_quantity = null;
		$this->reduction = null;
		$this->reduction_type = null;
		$this->from = null;
		$this->to = null;
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
		return (string) $this->exportTo(Oops_Model_SpecificPricePeer::DEFAULT_STRING_FORMAT);
	}

} // Oops_Model_Base_SpecificPrice
