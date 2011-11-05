<?php


/**
 * Base class that represents a row from the 'djland_product_attribute' table.
 *
 * 
 *
 * @package    propel.generator.prestashop.om
 */
abstract class Oops_Model_Base_ProductAttribute extends BaseObject  implements Persistent
{

	/**
	 * Peer class name
	 */
	const PEER = 'Oops_Model_ProductAttributePeer';

	/**
	 * The Peer class.
	 * Instance provides a convenient way of calling static methods on a class
	 * that calling code may not be able to identify.
	 * @var        Oops_Model_ProductAttributePeer
	 */
	protected static $peer;

	/**
	 * The value for the id_product_attribute field.
	 * @var        int
	 */
	protected $id_product_attribute;

	/**
	 * The value for the id_product field.
	 * @var        int
	 */
	protected $id_product;

	/**
	 * The value for the reference field.
	 * @var        string
	 */
	protected $reference;

	/**
	 * The value for the supplier_reference field.
	 * @var        string
	 */
	protected $supplier_reference;

	/**
	 * The value for the location field.
	 * @var        string
	 */
	protected $location;

	/**
	 * The value for the ean13 field.
	 * @var        string
	 */
	protected $ean13;

	/**
	 * The value for the upc field.
	 * @var        string
	 */
	protected $upc;

	/**
	 * The value for the wholesale_price field.
	 * Note: this column has a database default value of: '0.000000'
	 * @var        string
	 */
	protected $wholesale_price;

	/**
	 * The value for the price field.
	 * Note: this column has a database default value of: '0.000000'
	 * @var        string
	 */
	protected $price;

	/**
	 * The value for the ecotax field.
	 * Note: this column has a database default value of: '0.000000'
	 * @var        string
	 */
	protected $ecotax;

	/**
	 * The value for the quantity field.
	 * Note: this column has a database default value of: 0
	 * @var        int
	 */
	protected $quantity;

	/**
	 * The value for the weight field.
	 * Note: this column has a database default value of: 0
	 * @var        double
	 */
	protected $weight;

	/**
	 * The value for the unit_price_impact field.
	 * Note: this column has a database default value of: '0.00'
	 * @var        string
	 */
	protected $unit_price_impact;

	/**
	 * The value for the default_on field.
	 * Note: this column has a database default value of: false
	 * @var        boolean
	 */
	protected $default_on;

	/**
	 * The value for the minimal_quantity field.
	 * Note: this column has a database default value of: 1
	 * @var        int
	 */
	protected $minimal_quantity;

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
		$this->wholesale_price = '0.000000';
		$this->price = '0.000000';
		$this->ecotax = '0.000000';
		$this->quantity = 0;
		$this->weight = 0;
		$this->unit_price_impact = '0.00';
		$this->default_on = false;
		$this->minimal_quantity = 1;
	}

	/**
	 * Initializes internal state of Oops_Model_Base_ProductAttribute object.
	 * @see        applyDefaults()
	 */
	public function __construct()
	{
		parent::__construct();
		$this->applyDefaultValues();
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
	 * Get the [id_product] column value.
	 * 
	 * @return     int
	 */
	public function getIdProduct()
	{
		return $this->id_product;
	}

	/**
	 * Get the [reference] column value.
	 * 
	 * @return     string
	 */
	public function getReference()
	{
		return $this->reference;
	}

	/**
	 * Get the [supplier_reference] column value.
	 * 
	 * @return     string
	 */
	public function getSupplierReference()
	{
		return $this->supplier_reference;
	}

	/**
	 * Get the [location] column value.
	 * 
	 * @return     string
	 */
	public function getLocation()
	{
		return $this->location;
	}

	/**
	 * Get the [ean13] column value.
	 * 
	 * @return     string
	 */
	public function getEan13()
	{
		return $this->ean13;
	}

	/**
	 * Get the [upc] column value.
	 * 
	 * @return     string
	 */
	public function getUpc()
	{
		return $this->upc;
	}

	/**
	 * Get the [wholesale_price] column value.
	 * 
	 * @return     string
	 */
	public function getWholesalePrice()
	{
		return $this->wholesale_price;
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
	 * Get the [ecotax] column value.
	 * 
	 * @return     string
	 */
	public function getEcotax()
	{
		return $this->ecotax;
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
	 * Get the [weight] column value.
	 * 
	 * @return     double
	 */
	public function getWeight()
	{
		return $this->weight;
	}

	/**
	 * Get the [unit_price_impact] column value.
	 * 
	 * @return     string
	 */
	public function getUnitPriceImpact()
	{
		return $this->unit_price_impact;
	}

	/**
	 * Get the [default_on] column value.
	 * 
	 * @return     boolean
	 */
	public function getDefaultOn()
	{
		return $this->default_on;
	}

	/**
	 * Get the [minimal_quantity] column value.
	 * 
	 * @return     int
	 */
	public function getMinimalQuantity()
	{
		return $this->minimal_quantity;
	}

	/**
	 * Set the value of [id_product_attribute] column.
	 * 
	 * @param      int $v new value
	 * @return     Oops_Model_ProductAttribute The current object (for fluent API support)
	 */
	public function setIdProductAttribute($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->id_product_attribute !== $v) {
			$this->id_product_attribute = $v;
			$this->modifiedColumns[] = Oops_Model_ProductAttributePeer::ID_PRODUCT_ATTRIBUTE;
		}

		return $this;
	} // setIdProductAttribute()

	/**
	 * Set the value of [id_product] column.
	 * 
	 * @param      int $v new value
	 * @return     Oops_Model_ProductAttribute The current object (for fluent API support)
	 */
	public function setIdProduct($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->id_product !== $v) {
			$this->id_product = $v;
			$this->modifiedColumns[] = Oops_Model_ProductAttributePeer::ID_PRODUCT;
		}

		return $this;
	} // setIdProduct()

	/**
	 * Set the value of [reference] column.
	 * 
	 * @param      string $v new value
	 * @return     Oops_Model_ProductAttribute The current object (for fluent API support)
	 */
	public function setReference($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->reference !== $v) {
			$this->reference = $v;
			$this->modifiedColumns[] = Oops_Model_ProductAttributePeer::REFERENCE;
		}

		return $this;
	} // setReference()

	/**
	 * Set the value of [supplier_reference] column.
	 * 
	 * @param      string $v new value
	 * @return     Oops_Model_ProductAttribute The current object (for fluent API support)
	 */
	public function setSupplierReference($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->supplier_reference !== $v) {
			$this->supplier_reference = $v;
			$this->modifiedColumns[] = Oops_Model_ProductAttributePeer::SUPPLIER_REFERENCE;
		}

		return $this;
	} // setSupplierReference()

	/**
	 * Set the value of [location] column.
	 * 
	 * @param      string $v new value
	 * @return     Oops_Model_ProductAttribute The current object (for fluent API support)
	 */
	public function setLocation($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->location !== $v) {
			$this->location = $v;
			$this->modifiedColumns[] = Oops_Model_ProductAttributePeer::LOCATION;
		}

		return $this;
	} // setLocation()

	/**
	 * Set the value of [ean13] column.
	 * 
	 * @param      string $v new value
	 * @return     Oops_Model_ProductAttribute The current object (for fluent API support)
	 */
	public function setEan13($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->ean13 !== $v) {
			$this->ean13 = $v;
			$this->modifiedColumns[] = Oops_Model_ProductAttributePeer::EAN13;
		}

		return $this;
	} // setEan13()

	/**
	 * Set the value of [upc] column.
	 * 
	 * @param      string $v new value
	 * @return     Oops_Model_ProductAttribute The current object (for fluent API support)
	 */
	public function setUpc($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->upc !== $v) {
			$this->upc = $v;
			$this->modifiedColumns[] = Oops_Model_ProductAttributePeer::UPC;
		}

		return $this;
	} // setUpc()

	/**
	 * Set the value of [wholesale_price] column.
	 * 
	 * @param      string $v new value
	 * @return     Oops_Model_ProductAttribute The current object (for fluent API support)
	 */
	public function setWholesalePrice($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->wholesale_price !== $v) {
			$this->wholesale_price = $v;
			$this->modifiedColumns[] = Oops_Model_ProductAttributePeer::WHOLESALE_PRICE;
		}

		return $this;
	} // setWholesalePrice()

	/**
	 * Set the value of [price] column.
	 * 
	 * @param      string $v new value
	 * @return     Oops_Model_ProductAttribute The current object (for fluent API support)
	 */
	public function setPrice($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->price !== $v) {
			$this->price = $v;
			$this->modifiedColumns[] = Oops_Model_ProductAttributePeer::PRICE;
		}

		return $this;
	} // setPrice()

	/**
	 * Set the value of [ecotax] column.
	 * 
	 * @param      string $v new value
	 * @return     Oops_Model_ProductAttribute The current object (for fluent API support)
	 */
	public function setEcotax($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->ecotax !== $v) {
			$this->ecotax = $v;
			$this->modifiedColumns[] = Oops_Model_ProductAttributePeer::ECOTAX;
		}

		return $this;
	} // setEcotax()

	/**
	 * Set the value of [quantity] column.
	 * 
	 * @param      int $v new value
	 * @return     Oops_Model_ProductAttribute The current object (for fluent API support)
	 */
	public function setQuantity($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->quantity !== $v) {
			$this->quantity = $v;
			$this->modifiedColumns[] = Oops_Model_ProductAttributePeer::QUANTITY;
		}

		return $this;
	} // setQuantity()

	/**
	 * Set the value of [weight] column.
	 * 
	 * @param      double $v new value
	 * @return     Oops_Model_ProductAttribute The current object (for fluent API support)
	 */
	public function setWeight($v)
	{
		if ($v !== null) {
			$v = (double) $v;
		}

		if ($this->weight !== $v) {
			$this->weight = $v;
			$this->modifiedColumns[] = Oops_Model_ProductAttributePeer::WEIGHT;
		}

		return $this;
	} // setWeight()

	/**
	 * Set the value of [unit_price_impact] column.
	 * 
	 * @param      string $v new value
	 * @return     Oops_Model_ProductAttribute The current object (for fluent API support)
	 */
	public function setUnitPriceImpact($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->unit_price_impact !== $v) {
			$this->unit_price_impact = $v;
			$this->modifiedColumns[] = Oops_Model_ProductAttributePeer::UNIT_PRICE_IMPACT;
		}

		return $this;
	} // setUnitPriceImpact()

	/**
	 * Sets the value of the [default_on] column.
	 * Non-boolean arguments are converted using the following rules:
	 *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * 
	 * @param      boolean|integer|string $v The new value
	 * @return     Oops_Model_ProductAttribute The current object (for fluent API support)
	 */
	public function setDefaultOn($v)
	{
		if ($v !== null) {
			if (is_string($v)) {
				$v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
			} else {
				$v = (boolean) $v;
			}
		}

		if ($this->default_on !== $v) {
			$this->default_on = $v;
			$this->modifiedColumns[] = Oops_Model_ProductAttributePeer::DEFAULT_ON;
		}

		return $this;
	} // setDefaultOn()

	/**
	 * Set the value of [minimal_quantity] column.
	 * 
	 * @param      int $v new value
	 * @return     Oops_Model_ProductAttribute The current object (for fluent API support)
	 */
	public function setMinimalQuantity($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->minimal_quantity !== $v) {
			$this->minimal_quantity = $v;
			$this->modifiedColumns[] = Oops_Model_ProductAttributePeer::MINIMAL_QUANTITY;
		}

		return $this;
	} // setMinimalQuantity()

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
			if ($this->wholesale_price !== '0.000000') {
				return false;
			}

			if ($this->price !== '0.000000') {
				return false;
			}

			if ($this->ecotax !== '0.000000') {
				return false;
			}

			if ($this->quantity !== 0) {
				return false;
			}

			if ($this->weight !== 0) {
				return false;
			}

			if ($this->unit_price_impact !== '0.00') {
				return false;
			}

			if ($this->default_on !== false) {
				return false;
			}

			if ($this->minimal_quantity !== 1) {
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

			$this->id_product_attribute = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
			$this->id_product = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
			$this->reference = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
			$this->supplier_reference = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
			$this->location = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
			$this->ean13 = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
			$this->upc = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
			$this->wholesale_price = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
			$this->price = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
			$this->ecotax = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
			$this->quantity = ($row[$startcol + 10] !== null) ? (int) $row[$startcol + 10] : null;
			$this->weight = ($row[$startcol + 11] !== null) ? (double) $row[$startcol + 11] : null;
			$this->unit_price_impact = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
			$this->default_on = ($row[$startcol + 13] !== null) ? (boolean) $row[$startcol + 13] : null;
			$this->minimal_quantity = ($row[$startcol + 14] !== null) ? (int) $row[$startcol + 14] : null;
			$this->resetModified();

			$this->setNew(false);

			if ($rehydrate) {
				$this->ensureConsistency();
			}

			return $startcol + 15; // 15 = Oops_Model_ProductAttributePeer::NUM_HYDRATE_COLUMNS.

		} catch (Exception $e) {
			throw new PropelException("Error populating Oops_Model_ProductAttribute object", $e);
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
			$con = Propel::getConnection(Oops_Model_ProductAttributePeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		// We don't need to alter the object instance pool; we're just modifying this instance
		// already in the pool.

		$stmt = Oops_Model_ProductAttributePeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
			$con = Propel::getConnection(Oops_Model_ProductAttributePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$con->beginTransaction();
		try {
			$deleteQuery = Oops_Model_ProductAttributeQuery::create()
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
			$con = Propel::getConnection(Oops_Model_ProductAttributePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
				Oops_Model_ProductAttributePeer::addInstanceToPool($this);
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

		$this->modifiedColumns[] = Oops_Model_ProductAttributePeer::ID_PRODUCT_ATTRIBUTE;
		if (null !== $this->id_product_attribute) {
			throw new PropelException('Cannot insert a value for auto-increment primary key (' . Oops_Model_ProductAttributePeer::ID_PRODUCT_ATTRIBUTE . ')');
		}

		 // check the columns in natural order for more readable SQL queries
		if ($this->isColumnModified(Oops_Model_ProductAttributePeer::ID_PRODUCT_ATTRIBUTE)) {
			$modifiedColumns[':p' . $index++]  = '`ID_PRODUCT_ATTRIBUTE`';
		}
		if ($this->isColumnModified(Oops_Model_ProductAttributePeer::ID_PRODUCT)) {
			$modifiedColumns[':p' . $index++]  = '`ID_PRODUCT`';
		}
		if ($this->isColumnModified(Oops_Model_ProductAttributePeer::REFERENCE)) {
			$modifiedColumns[':p' . $index++]  = '`REFERENCE`';
		}
		if ($this->isColumnModified(Oops_Model_ProductAttributePeer::SUPPLIER_REFERENCE)) {
			$modifiedColumns[':p' . $index++]  = '`SUPPLIER_REFERENCE`';
		}
		if ($this->isColumnModified(Oops_Model_ProductAttributePeer::LOCATION)) {
			$modifiedColumns[':p' . $index++]  = '`LOCATION`';
		}
		if ($this->isColumnModified(Oops_Model_ProductAttributePeer::EAN13)) {
			$modifiedColumns[':p' . $index++]  = '`EAN13`';
		}
		if ($this->isColumnModified(Oops_Model_ProductAttributePeer::UPC)) {
			$modifiedColumns[':p' . $index++]  = '`UPC`';
		}
		if ($this->isColumnModified(Oops_Model_ProductAttributePeer::WHOLESALE_PRICE)) {
			$modifiedColumns[':p' . $index++]  = '`WHOLESALE_PRICE`';
		}
		if ($this->isColumnModified(Oops_Model_ProductAttributePeer::PRICE)) {
			$modifiedColumns[':p' . $index++]  = '`PRICE`';
		}
		if ($this->isColumnModified(Oops_Model_ProductAttributePeer::ECOTAX)) {
			$modifiedColumns[':p' . $index++]  = '`ECOTAX`';
		}
		if ($this->isColumnModified(Oops_Model_ProductAttributePeer::QUANTITY)) {
			$modifiedColumns[':p' . $index++]  = '`QUANTITY`';
		}
		if ($this->isColumnModified(Oops_Model_ProductAttributePeer::WEIGHT)) {
			$modifiedColumns[':p' . $index++]  = '`WEIGHT`';
		}
		if ($this->isColumnModified(Oops_Model_ProductAttributePeer::UNIT_PRICE_IMPACT)) {
			$modifiedColumns[':p' . $index++]  = '`UNIT_PRICE_IMPACT`';
		}
		if ($this->isColumnModified(Oops_Model_ProductAttributePeer::DEFAULT_ON)) {
			$modifiedColumns[':p' . $index++]  = '`DEFAULT_ON`';
		}
		if ($this->isColumnModified(Oops_Model_ProductAttributePeer::MINIMAL_QUANTITY)) {
			$modifiedColumns[':p' . $index++]  = '`MINIMAL_QUANTITY`';
		}

		$sql = sprintf(
			'INSERT INTO `djland_product_attribute` (%s) VALUES (%s)',
			implode(', ', $modifiedColumns),
			implode(', ', array_keys($modifiedColumns))
		);

		try {
			$stmt = $con->prepare($sql);
			foreach ($modifiedColumns as $identifier => $columnName) {
				switch ($columnName) {
					case '`ID_PRODUCT_ATTRIBUTE`':
						$stmt->bindValue($identifier, $this->id_product_attribute, PDO::PARAM_INT);
						break;
					case '`ID_PRODUCT`':
						$stmt->bindValue($identifier, $this->id_product, PDO::PARAM_INT);
						break;
					case '`REFERENCE`':
						$stmt->bindValue($identifier, $this->reference, PDO::PARAM_STR);
						break;
					case '`SUPPLIER_REFERENCE`':
						$stmt->bindValue($identifier, $this->supplier_reference, PDO::PARAM_STR);
						break;
					case '`LOCATION`':
						$stmt->bindValue($identifier, $this->location, PDO::PARAM_STR);
						break;
					case '`EAN13`':
						$stmt->bindValue($identifier, $this->ean13, PDO::PARAM_STR);
						break;
					case '`UPC`':
						$stmt->bindValue($identifier, $this->upc, PDO::PARAM_STR);
						break;
					case '`WHOLESALE_PRICE`':
						$stmt->bindValue($identifier, $this->wholesale_price, PDO::PARAM_STR);
						break;
					case '`PRICE`':
						$stmt->bindValue($identifier, $this->price, PDO::PARAM_STR);
						break;
					case '`ECOTAX`':
						$stmt->bindValue($identifier, $this->ecotax, PDO::PARAM_STR);
						break;
					case '`QUANTITY`':
						$stmt->bindValue($identifier, $this->quantity, PDO::PARAM_INT);
						break;
					case '`WEIGHT`':
						$stmt->bindValue($identifier, $this->weight, PDO::PARAM_STR);
						break;
					case '`UNIT_PRICE_IMPACT`':
						$stmt->bindValue($identifier, $this->unit_price_impact, PDO::PARAM_STR);
						break;
					case '`DEFAULT_ON`':
						$stmt->bindValue($identifier, (int) $this->default_on, PDO::PARAM_INT);
						break;
					case '`MINIMAL_QUANTITY`':
						$stmt->bindValue($identifier, $this->minimal_quantity, PDO::PARAM_INT);
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
		$this->setIdProductAttribute($pk);

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


			if (($retval = Oops_Model_ProductAttributePeer::doValidate($this, $columns)) !== true) {
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
		$pos = Oops_Model_ProductAttributePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getIdProductAttribute();
				break;
			case 1:
				return $this->getIdProduct();
				break;
			case 2:
				return $this->getReference();
				break;
			case 3:
				return $this->getSupplierReference();
				break;
			case 4:
				return $this->getLocation();
				break;
			case 5:
				return $this->getEan13();
				break;
			case 6:
				return $this->getUpc();
				break;
			case 7:
				return $this->getWholesalePrice();
				break;
			case 8:
				return $this->getPrice();
				break;
			case 9:
				return $this->getEcotax();
				break;
			case 10:
				return $this->getQuantity();
				break;
			case 11:
				return $this->getWeight();
				break;
			case 12:
				return $this->getUnitPriceImpact();
				break;
			case 13:
				return $this->getDefaultOn();
				break;
			case 14:
				return $this->getMinimalQuantity();
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
		if (isset($alreadyDumpedObjects['Oops_Model_ProductAttribute'][$this->getPrimaryKey()])) {
			return '*RECURSION*';
		}
		$alreadyDumpedObjects['Oops_Model_ProductAttribute'][$this->getPrimaryKey()] = true;
		$keys = Oops_Model_ProductAttributePeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getIdProductAttribute(),
			$keys[1] => $this->getIdProduct(),
			$keys[2] => $this->getReference(),
			$keys[3] => $this->getSupplierReference(),
			$keys[4] => $this->getLocation(),
			$keys[5] => $this->getEan13(),
			$keys[6] => $this->getUpc(),
			$keys[7] => $this->getWholesalePrice(),
			$keys[8] => $this->getPrice(),
			$keys[9] => $this->getEcotax(),
			$keys[10] => $this->getQuantity(),
			$keys[11] => $this->getWeight(),
			$keys[12] => $this->getUnitPriceImpact(),
			$keys[13] => $this->getDefaultOn(),
			$keys[14] => $this->getMinimalQuantity(),
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
		$pos = Oops_Model_ProductAttributePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setIdProductAttribute($value);
				break;
			case 1:
				$this->setIdProduct($value);
				break;
			case 2:
				$this->setReference($value);
				break;
			case 3:
				$this->setSupplierReference($value);
				break;
			case 4:
				$this->setLocation($value);
				break;
			case 5:
				$this->setEan13($value);
				break;
			case 6:
				$this->setUpc($value);
				break;
			case 7:
				$this->setWholesalePrice($value);
				break;
			case 8:
				$this->setPrice($value);
				break;
			case 9:
				$this->setEcotax($value);
				break;
			case 10:
				$this->setQuantity($value);
				break;
			case 11:
				$this->setWeight($value);
				break;
			case 12:
				$this->setUnitPriceImpact($value);
				break;
			case 13:
				$this->setDefaultOn($value);
				break;
			case 14:
				$this->setMinimalQuantity($value);
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
		$keys = Oops_Model_ProductAttributePeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setIdProductAttribute($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setIdProduct($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setReference($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setSupplierReference($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setLocation($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setEan13($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setUpc($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setWholesalePrice($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setPrice($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setEcotax($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setQuantity($arr[$keys[10]]);
		if (array_key_exists($keys[11], $arr)) $this->setWeight($arr[$keys[11]]);
		if (array_key_exists($keys[12], $arr)) $this->setUnitPriceImpact($arr[$keys[12]]);
		if (array_key_exists($keys[13], $arr)) $this->setDefaultOn($arr[$keys[13]]);
		if (array_key_exists($keys[14], $arr)) $this->setMinimalQuantity($arr[$keys[14]]);
	}

	/**
	 * Build a Criteria object containing the values of all modified columns in this object.
	 *
	 * @return     Criteria The Criteria object containing all modified values.
	 */
	public function buildCriteria()
	{
		$criteria = new Criteria(Oops_Model_ProductAttributePeer::DATABASE_NAME);

		if ($this->isColumnModified(Oops_Model_ProductAttributePeer::ID_PRODUCT_ATTRIBUTE)) $criteria->add(Oops_Model_ProductAttributePeer::ID_PRODUCT_ATTRIBUTE, $this->id_product_attribute);
		if ($this->isColumnModified(Oops_Model_ProductAttributePeer::ID_PRODUCT)) $criteria->add(Oops_Model_ProductAttributePeer::ID_PRODUCT, $this->id_product);
		if ($this->isColumnModified(Oops_Model_ProductAttributePeer::REFERENCE)) $criteria->add(Oops_Model_ProductAttributePeer::REFERENCE, $this->reference);
		if ($this->isColumnModified(Oops_Model_ProductAttributePeer::SUPPLIER_REFERENCE)) $criteria->add(Oops_Model_ProductAttributePeer::SUPPLIER_REFERENCE, $this->supplier_reference);
		if ($this->isColumnModified(Oops_Model_ProductAttributePeer::LOCATION)) $criteria->add(Oops_Model_ProductAttributePeer::LOCATION, $this->location);
		if ($this->isColumnModified(Oops_Model_ProductAttributePeer::EAN13)) $criteria->add(Oops_Model_ProductAttributePeer::EAN13, $this->ean13);
		if ($this->isColumnModified(Oops_Model_ProductAttributePeer::UPC)) $criteria->add(Oops_Model_ProductAttributePeer::UPC, $this->upc);
		if ($this->isColumnModified(Oops_Model_ProductAttributePeer::WHOLESALE_PRICE)) $criteria->add(Oops_Model_ProductAttributePeer::WHOLESALE_PRICE, $this->wholesale_price);
		if ($this->isColumnModified(Oops_Model_ProductAttributePeer::PRICE)) $criteria->add(Oops_Model_ProductAttributePeer::PRICE, $this->price);
		if ($this->isColumnModified(Oops_Model_ProductAttributePeer::ECOTAX)) $criteria->add(Oops_Model_ProductAttributePeer::ECOTAX, $this->ecotax);
		if ($this->isColumnModified(Oops_Model_ProductAttributePeer::QUANTITY)) $criteria->add(Oops_Model_ProductAttributePeer::QUANTITY, $this->quantity);
		if ($this->isColumnModified(Oops_Model_ProductAttributePeer::WEIGHT)) $criteria->add(Oops_Model_ProductAttributePeer::WEIGHT, $this->weight);
		if ($this->isColumnModified(Oops_Model_ProductAttributePeer::UNIT_PRICE_IMPACT)) $criteria->add(Oops_Model_ProductAttributePeer::UNIT_PRICE_IMPACT, $this->unit_price_impact);
		if ($this->isColumnModified(Oops_Model_ProductAttributePeer::DEFAULT_ON)) $criteria->add(Oops_Model_ProductAttributePeer::DEFAULT_ON, $this->default_on);
		if ($this->isColumnModified(Oops_Model_ProductAttributePeer::MINIMAL_QUANTITY)) $criteria->add(Oops_Model_ProductAttributePeer::MINIMAL_QUANTITY, $this->minimal_quantity);

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
		$criteria = new Criteria(Oops_Model_ProductAttributePeer::DATABASE_NAME);
		$criteria->add(Oops_Model_ProductAttributePeer::ID_PRODUCT_ATTRIBUTE, $this->id_product_attribute);

		return $criteria;
	}

	/**
	 * Returns the primary key for this object (row).
	 * @return     int
	 */
	public function getPrimaryKey()
	{
		return $this->getIdProductAttribute();
	}

	/**
	 * Generic method to set the primary key (id_product_attribute column).
	 *
	 * @param      int $key Primary key.
	 * @return     void
	 */
	public function setPrimaryKey($key)
	{
		$this->setIdProductAttribute($key);
	}

	/**
	 * Returns true if the primary key for this object is null.
	 * @return     boolean
	 */
	public function isPrimaryKeyNull()
	{
		return null === $this->getIdProductAttribute();
	}

	/**
	 * Sets contents of passed object to values from current object.
	 *
	 * If desired, this method can also make copies of all associated (fkey referrers)
	 * objects.
	 *
	 * @param      object $copyObj An object of Oops_Model_ProductAttribute (or compatible) type.
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
	 * @throws     PropelException
	 */
	public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
	{
		$copyObj->setIdProduct($this->getIdProduct());
		$copyObj->setReference($this->getReference());
		$copyObj->setSupplierReference($this->getSupplierReference());
		$copyObj->setLocation($this->getLocation());
		$copyObj->setEan13($this->getEan13());
		$copyObj->setUpc($this->getUpc());
		$copyObj->setWholesalePrice($this->getWholesalePrice());
		$copyObj->setPrice($this->getPrice());
		$copyObj->setEcotax($this->getEcotax());
		$copyObj->setQuantity($this->getQuantity());
		$copyObj->setWeight($this->getWeight());
		$copyObj->setUnitPriceImpact($this->getUnitPriceImpact());
		$copyObj->setDefaultOn($this->getDefaultOn());
		$copyObj->setMinimalQuantity($this->getMinimalQuantity());
		if ($makeNew) {
			$copyObj->setNew(true);
			$copyObj->setIdProductAttribute(NULL); // this is a auto-increment column, so set to default value
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
	 * @return     Oops_Model_ProductAttribute Clone of current object.
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
	 * @return     Oops_Model_ProductAttributePeer
	 */
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new Oops_Model_ProductAttributePeer();
		}
		return self::$peer;
	}

	/**
	 * Clears the current object and sets all attributes to their default values
	 */
	public function clear()
	{
		$this->id_product_attribute = null;
		$this->id_product = null;
		$this->reference = null;
		$this->supplier_reference = null;
		$this->location = null;
		$this->ean13 = null;
		$this->upc = null;
		$this->wholesale_price = null;
		$this->price = null;
		$this->ecotax = null;
		$this->quantity = null;
		$this->weight = null;
		$this->unit_price_impact = null;
		$this->default_on = null;
		$this->minimal_quantity = null;
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
		return (string) $this->exportTo(Oops_Model_ProductAttributePeer::DEFAULT_STRING_FORMAT);
	}

} // Oops_Model_Base_ProductAttribute
