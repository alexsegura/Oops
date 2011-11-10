<?php


/**
 * Base class that represents a row from the 'carrier' table.
 *
 * 
 *
 * @package    propel.generator.prestashop.om
 */
abstract class Oops_Model_Base_Carrier extends BaseObject  implements Persistent
{

	/**
	 * Peer class name
	 */
	const PEER = 'Oops_Model_CarrierPeer';

	/**
	 * The Peer class.
	 * Instance provides a convenient way of calling static methods on a class
	 * that calling code may not be able to identify.
	 * @var        Oops_Model_CarrierPeer
	 */
	protected static $peer;

	/**
	 * The value for the id_carrier field.
	 * @var        int
	 */
	protected $id_carrier;

	/**
	 * The value for the id_tax_rules_group field.
	 * Note: this column has a database default value of: 0
	 * @var        int
	 */
	protected $id_tax_rules_group;

	/**
	 * The value for the name field.
	 * @var        string
	 */
	protected $name;

	/**
	 * The value for the url field.
	 * @var        string
	 */
	protected $url;

	/**
	 * The value for the active field.
	 * Note: this column has a database default value of: false
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
	 * The value for the shipping_handling field.
	 * Note: this column has a database default value of: true
	 * @var        boolean
	 */
	protected $shipping_handling;

	/**
	 * The value for the range_behavior field.
	 * Note: this column has a database default value of: false
	 * @var        boolean
	 */
	protected $range_behavior;

	/**
	 * The value for the is_module field.
	 * Note: this column has a database default value of: false
	 * @var        boolean
	 */
	protected $is_module;

	/**
	 * The value for the is_free field.
	 * Note: this column has a database default value of: false
	 * @var        boolean
	 */
	protected $is_free;

	/**
	 * The value for the shipping_external field.
	 * Note: this column has a database default value of: false
	 * @var        boolean
	 */
	protected $shipping_external;

	/**
	 * The value for the need_range field.
	 * Note: this column has a database default value of: false
	 * @var        boolean
	 */
	protected $need_range;

	/**
	 * The value for the external_module_name field.
	 * @var        string
	 */
	protected $external_module_name;

	/**
	 * The value for the shipping_method field.
	 * Note: this column has a database default value of: 0
	 * @var        int
	 */
	protected $shipping_method;

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
		$this->id_tax_rules_group = 0;
		$this->active = false;
		$this->deleted = false;
		$this->shipping_handling = true;
		$this->range_behavior = false;
		$this->is_module = false;
		$this->is_free = false;
		$this->shipping_external = false;
		$this->need_range = false;
		$this->shipping_method = 0;
	}

	/**
	 * Initializes internal state of Oops_Model_Base_Carrier object.
	 * @see        applyDefaults()
	 */
	public function __construct()
	{
		parent::__construct();
		$this->applyDefaultValues();
	}

	/**
	 * Get the [id_carrier] column value.
	 * 
	 * @return     int
	 */
	public function getIdCarrier()
	{
		return $this->id_carrier;
	}

	/**
	 * Get the [id_tax_rules_group] column value.
	 * 
	 * @return     int
	 */
	public function getIdTaxRulesGroup()
	{
		return $this->id_tax_rules_group;
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
	 * Get the [url] column value.
	 * 
	 * @return     string
	 */
	public function getUrl()
	{
		return $this->url;
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
	 * Get the [shipping_handling] column value.
	 * 
	 * @return     boolean
	 */
	public function getShippingHandling()
	{
		return $this->shipping_handling;
	}

	/**
	 * Get the [range_behavior] column value.
	 * 
	 * @return     boolean
	 */
	public function getRangeBehavior()
	{
		return $this->range_behavior;
	}

	/**
	 * Get the [is_module] column value.
	 * 
	 * @return     boolean
	 */
	public function getIsModule()
	{
		return $this->is_module;
	}

	/**
	 * Get the [is_free] column value.
	 * 
	 * @return     boolean
	 */
	public function getIsFree()
	{
		return $this->is_free;
	}

	/**
	 * Get the [shipping_external] column value.
	 * 
	 * @return     boolean
	 */
	public function getShippingExternal()
	{
		return $this->shipping_external;
	}

	/**
	 * Get the [need_range] column value.
	 * 
	 * @return     boolean
	 */
	public function getNeedRange()
	{
		return $this->need_range;
	}

	/**
	 * Get the [external_module_name] column value.
	 * 
	 * @return     string
	 */
	public function getExternalModuleName()
	{
		return $this->external_module_name;
	}

	/**
	 * Get the [shipping_method] column value.
	 * 
	 * @return     int
	 */
	public function getShippingMethod()
	{
		return $this->shipping_method;
	}

	/**
	 * Set the value of [id_carrier] column.
	 * 
	 * @param      int $v new value
	 * @return     Oops_Model_Carrier The current object (for fluent API support)
	 */
	public function setIdCarrier($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->id_carrier !== $v) {
			$this->id_carrier = $v;
			$this->modifiedColumns[] = Oops_Model_CarrierPeer::ID_CARRIER;
		}

		return $this;
	} // setIdCarrier()

	/**
	 * Set the value of [id_tax_rules_group] column.
	 * 
	 * @param      int $v new value
	 * @return     Oops_Model_Carrier The current object (for fluent API support)
	 */
	public function setIdTaxRulesGroup($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->id_tax_rules_group !== $v) {
			$this->id_tax_rules_group = $v;
			$this->modifiedColumns[] = Oops_Model_CarrierPeer::ID_TAX_RULES_GROUP;
		}

		return $this;
	} // setIdTaxRulesGroup()

	/**
	 * Set the value of [name] column.
	 * 
	 * @param      string $v new value
	 * @return     Oops_Model_Carrier The current object (for fluent API support)
	 */
	public function setName($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->name !== $v) {
			$this->name = $v;
			$this->modifiedColumns[] = Oops_Model_CarrierPeer::NAME;
		}

		return $this;
	} // setName()

	/**
	 * Set the value of [url] column.
	 * 
	 * @param      string $v new value
	 * @return     Oops_Model_Carrier The current object (for fluent API support)
	 */
	public function setUrl($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->url !== $v) {
			$this->url = $v;
			$this->modifiedColumns[] = Oops_Model_CarrierPeer::URL;
		}

		return $this;
	} // setUrl()

	/**
	 * Sets the value of the [active] column.
	 * Non-boolean arguments are converted using the following rules:
	 *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * 
	 * @param      boolean|integer|string $v The new value
	 * @return     Oops_Model_Carrier The current object (for fluent API support)
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
			$this->modifiedColumns[] = Oops_Model_CarrierPeer::ACTIVE;
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
	 * @return     Oops_Model_Carrier The current object (for fluent API support)
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
			$this->modifiedColumns[] = Oops_Model_CarrierPeer::DELETED;
		}

		return $this;
	} // setDeleted()

	/**
	 * Sets the value of the [shipping_handling] column.
	 * Non-boolean arguments are converted using the following rules:
	 *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * 
	 * @param      boolean|integer|string $v The new value
	 * @return     Oops_Model_Carrier The current object (for fluent API support)
	 */
	public function setShippingHandling($v)
	{
		if ($v !== null) {
			if (is_string($v)) {
				$v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
			} else {
				$v = (boolean) $v;
			}
		}

		if ($this->shipping_handling !== $v) {
			$this->shipping_handling = $v;
			$this->modifiedColumns[] = Oops_Model_CarrierPeer::SHIPPING_HANDLING;
		}

		return $this;
	} // setShippingHandling()

	/**
	 * Sets the value of the [range_behavior] column.
	 * Non-boolean arguments are converted using the following rules:
	 *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * 
	 * @param      boolean|integer|string $v The new value
	 * @return     Oops_Model_Carrier The current object (for fluent API support)
	 */
	public function setRangeBehavior($v)
	{
		if ($v !== null) {
			if (is_string($v)) {
				$v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
			} else {
				$v = (boolean) $v;
			}
		}

		if ($this->range_behavior !== $v) {
			$this->range_behavior = $v;
			$this->modifiedColumns[] = Oops_Model_CarrierPeer::RANGE_BEHAVIOR;
		}

		return $this;
	} // setRangeBehavior()

	/**
	 * Sets the value of the [is_module] column.
	 * Non-boolean arguments are converted using the following rules:
	 *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * 
	 * @param      boolean|integer|string $v The new value
	 * @return     Oops_Model_Carrier The current object (for fluent API support)
	 */
	public function setIsModule($v)
	{
		if ($v !== null) {
			if (is_string($v)) {
				$v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
			} else {
				$v = (boolean) $v;
			}
		}

		if ($this->is_module !== $v) {
			$this->is_module = $v;
			$this->modifiedColumns[] = Oops_Model_CarrierPeer::IS_MODULE;
		}

		return $this;
	} // setIsModule()

	/**
	 * Sets the value of the [is_free] column.
	 * Non-boolean arguments are converted using the following rules:
	 *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * 
	 * @param      boolean|integer|string $v The new value
	 * @return     Oops_Model_Carrier The current object (for fluent API support)
	 */
	public function setIsFree($v)
	{
		if ($v !== null) {
			if (is_string($v)) {
				$v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
			} else {
				$v = (boolean) $v;
			}
		}

		if ($this->is_free !== $v) {
			$this->is_free = $v;
			$this->modifiedColumns[] = Oops_Model_CarrierPeer::IS_FREE;
		}

		return $this;
	} // setIsFree()

	/**
	 * Sets the value of the [shipping_external] column.
	 * Non-boolean arguments are converted using the following rules:
	 *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * 
	 * @param      boolean|integer|string $v The new value
	 * @return     Oops_Model_Carrier The current object (for fluent API support)
	 */
	public function setShippingExternal($v)
	{
		if ($v !== null) {
			if (is_string($v)) {
				$v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
			} else {
				$v = (boolean) $v;
			}
		}

		if ($this->shipping_external !== $v) {
			$this->shipping_external = $v;
			$this->modifiedColumns[] = Oops_Model_CarrierPeer::SHIPPING_EXTERNAL;
		}

		return $this;
	} // setShippingExternal()

	/**
	 * Sets the value of the [need_range] column.
	 * Non-boolean arguments are converted using the following rules:
	 *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * 
	 * @param      boolean|integer|string $v The new value
	 * @return     Oops_Model_Carrier The current object (for fluent API support)
	 */
	public function setNeedRange($v)
	{
		if ($v !== null) {
			if (is_string($v)) {
				$v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
			} else {
				$v = (boolean) $v;
			}
		}

		if ($this->need_range !== $v) {
			$this->need_range = $v;
			$this->modifiedColumns[] = Oops_Model_CarrierPeer::NEED_RANGE;
		}

		return $this;
	} // setNeedRange()

	/**
	 * Set the value of [external_module_name] column.
	 * 
	 * @param      string $v new value
	 * @return     Oops_Model_Carrier The current object (for fluent API support)
	 */
	public function setExternalModuleName($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->external_module_name !== $v) {
			$this->external_module_name = $v;
			$this->modifiedColumns[] = Oops_Model_CarrierPeer::EXTERNAL_MODULE_NAME;
		}

		return $this;
	} // setExternalModuleName()

	/**
	 * Set the value of [shipping_method] column.
	 * 
	 * @param      int $v new value
	 * @return     Oops_Model_Carrier The current object (for fluent API support)
	 */
	public function setShippingMethod($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->shipping_method !== $v) {
			$this->shipping_method = $v;
			$this->modifiedColumns[] = Oops_Model_CarrierPeer::SHIPPING_METHOD;
		}

		return $this;
	} // setShippingMethod()

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
			if ($this->id_tax_rules_group !== 0) {
				return false;
			}

			if ($this->active !== false) {
				return false;
			}

			if ($this->deleted !== false) {
				return false;
			}

			if ($this->shipping_handling !== true) {
				return false;
			}

			if ($this->range_behavior !== false) {
				return false;
			}

			if ($this->is_module !== false) {
				return false;
			}

			if ($this->is_free !== false) {
				return false;
			}

			if ($this->shipping_external !== false) {
				return false;
			}

			if ($this->need_range !== false) {
				return false;
			}

			if ($this->shipping_method !== 0) {
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

			$this->id_carrier = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
			$this->id_tax_rules_group = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
			$this->name = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
			$this->url = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
			$this->active = ($row[$startcol + 4] !== null) ? (boolean) $row[$startcol + 4] : null;
			$this->deleted = ($row[$startcol + 5] !== null) ? (boolean) $row[$startcol + 5] : null;
			$this->shipping_handling = ($row[$startcol + 6] !== null) ? (boolean) $row[$startcol + 6] : null;
			$this->range_behavior = ($row[$startcol + 7] !== null) ? (boolean) $row[$startcol + 7] : null;
			$this->is_module = ($row[$startcol + 8] !== null) ? (boolean) $row[$startcol + 8] : null;
			$this->is_free = ($row[$startcol + 9] !== null) ? (boolean) $row[$startcol + 9] : null;
			$this->shipping_external = ($row[$startcol + 10] !== null) ? (boolean) $row[$startcol + 10] : null;
			$this->need_range = ($row[$startcol + 11] !== null) ? (boolean) $row[$startcol + 11] : null;
			$this->external_module_name = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
			$this->shipping_method = ($row[$startcol + 13] !== null) ? (int) $row[$startcol + 13] : null;
			$this->resetModified();

			$this->setNew(false);

			if ($rehydrate) {
				$this->ensureConsistency();
			}

			return $startcol + 14; // 14 = Oops_Model_CarrierPeer::NUM_HYDRATE_COLUMNS.

		} catch (Exception $e) {
			throw new PropelException("Error populating Oops_Model_Carrier object", $e);
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
			$con = Propel::getConnection(Oops_Model_CarrierPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		// We don't need to alter the object instance pool; we're just modifying this instance
		// already in the pool.

		$stmt = Oops_Model_CarrierPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
			$con = Propel::getConnection(Oops_Model_CarrierPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$con->beginTransaction();
		try {
			$deleteQuery = Oops_Model_CarrierQuery::create()
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
			$con = Propel::getConnection(Oops_Model_CarrierPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
				Oops_Model_CarrierPeer::addInstanceToPool($this);
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

		$this->modifiedColumns[] = Oops_Model_CarrierPeer::ID_CARRIER;
		if (null !== $this->id_carrier) {
			throw new PropelException('Cannot insert a value for auto-increment primary key (' . Oops_Model_CarrierPeer::ID_CARRIER . ')');
		}

		 // check the columns in natural order for more readable SQL queries
		if ($this->isColumnModified(Oops_Model_CarrierPeer::ID_CARRIER)) {
			$modifiedColumns[':p' . $index++]  = '`ID_CARRIER`';
		}
		if ($this->isColumnModified(Oops_Model_CarrierPeer::ID_TAX_RULES_GROUP)) {
			$modifiedColumns[':p' . $index++]  = '`ID_TAX_RULES_GROUP`';
		}
		if ($this->isColumnModified(Oops_Model_CarrierPeer::NAME)) {
			$modifiedColumns[':p' . $index++]  = '`NAME`';
		}
		if ($this->isColumnModified(Oops_Model_CarrierPeer::URL)) {
			$modifiedColumns[':p' . $index++]  = '`URL`';
		}
		if ($this->isColumnModified(Oops_Model_CarrierPeer::ACTIVE)) {
			$modifiedColumns[':p' . $index++]  = '`ACTIVE`';
		}
		if ($this->isColumnModified(Oops_Model_CarrierPeer::DELETED)) {
			$modifiedColumns[':p' . $index++]  = '`DELETED`';
		}
		if ($this->isColumnModified(Oops_Model_CarrierPeer::SHIPPING_HANDLING)) {
			$modifiedColumns[':p' . $index++]  = '`SHIPPING_HANDLING`';
		}
		if ($this->isColumnModified(Oops_Model_CarrierPeer::RANGE_BEHAVIOR)) {
			$modifiedColumns[':p' . $index++]  = '`RANGE_BEHAVIOR`';
		}
		if ($this->isColumnModified(Oops_Model_CarrierPeer::IS_MODULE)) {
			$modifiedColumns[':p' . $index++]  = '`IS_MODULE`';
		}
		if ($this->isColumnModified(Oops_Model_CarrierPeer::IS_FREE)) {
			$modifiedColumns[':p' . $index++]  = '`IS_FREE`';
		}
		if ($this->isColumnModified(Oops_Model_CarrierPeer::SHIPPING_EXTERNAL)) {
			$modifiedColumns[':p' . $index++]  = '`SHIPPING_EXTERNAL`';
		}
		if ($this->isColumnModified(Oops_Model_CarrierPeer::NEED_RANGE)) {
			$modifiedColumns[':p' . $index++]  = '`NEED_RANGE`';
		}
		if ($this->isColumnModified(Oops_Model_CarrierPeer::EXTERNAL_MODULE_NAME)) {
			$modifiedColumns[':p' . $index++]  = '`EXTERNAL_MODULE_NAME`';
		}
		if ($this->isColumnModified(Oops_Model_CarrierPeer::SHIPPING_METHOD)) {
			$modifiedColumns[':p' . $index++]  = '`SHIPPING_METHOD`';
		}

		$sql = sprintf(
			'INSERT INTO `' .  _DB_PREFIX_ . 'carrier` (%s) VALUES (%s)',
			implode(', ', $modifiedColumns),
			implode(', ', array_keys($modifiedColumns))
		);

		try {
			$stmt = $con->prepare($sql);
			foreach ($modifiedColumns as $identifier => $columnName) {
				switch ($columnName) {
					case '`ID_CARRIER`':
						$stmt->bindValue($identifier, $this->id_carrier, PDO::PARAM_INT);
						break;
					case '`ID_TAX_RULES_GROUP`':
						$stmt->bindValue($identifier, $this->id_tax_rules_group, PDO::PARAM_INT);
						break;
					case '`NAME`':
						$stmt->bindValue($identifier, $this->name, PDO::PARAM_STR);
						break;
					case '`URL`':
						$stmt->bindValue($identifier, $this->url, PDO::PARAM_STR);
						break;
					case '`ACTIVE`':
						$stmt->bindValue($identifier, (int) $this->active, PDO::PARAM_INT);
						break;
					case '`DELETED`':
						$stmt->bindValue($identifier, (int) $this->deleted, PDO::PARAM_INT);
						break;
					case '`SHIPPING_HANDLING`':
						$stmt->bindValue($identifier, (int) $this->shipping_handling, PDO::PARAM_INT);
						break;
					case '`RANGE_BEHAVIOR`':
						$stmt->bindValue($identifier, (int) $this->range_behavior, PDO::PARAM_INT);
						break;
					case '`IS_MODULE`':
						$stmt->bindValue($identifier, (int) $this->is_module, PDO::PARAM_INT);
						break;
					case '`IS_FREE`':
						$stmt->bindValue($identifier, (int) $this->is_free, PDO::PARAM_INT);
						break;
					case '`SHIPPING_EXTERNAL`':
						$stmt->bindValue($identifier, (int) $this->shipping_external, PDO::PARAM_INT);
						break;
					case '`NEED_RANGE`':
						$stmt->bindValue($identifier, (int) $this->need_range, PDO::PARAM_INT);
						break;
					case '`EXTERNAL_MODULE_NAME`':
						$stmt->bindValue($identifier, $this->external_module_name, PDO::PARAM_STR);
						break;
					case '`SHIPPING_METHOD`':
						$stmt->bindValue($identifier, $this->shipping_method, PDO::PARAM_INT);
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
		$this->setIdCarrier($pk);

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


			if (($retval = Oops_Model_CarrierPeer::doValidate($this, $columns)) !== true) {
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
		$pos = Oops_Model_CarrierPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getIdCarrier();
				break;
			case 1:
				return $this->getIdTaxRulesGroup();
				break;
			case 2:
				return $this->getName();
				break;
			case 3:
				return $this->getUrl();
				break;
			case 4:
				return $this->getActive();
				break;
			case 5:
				return $this->getDeleted();
				break;
			case 6:
				return $this->getShippingHandling();
				break;
			case 7:
				return $this->getRangeBehavior();
				break;
			case 8:
				return $this->getIsModule();
				break;
			case 9:
				return $this->getIsFree();
				break;
			case 10:
				return $this->getShippingExternal();
				break;
			case 11:
				return $this->getNeedRange();
				break;
			case 12:
				return $this->getExternalModuleName();
				break;
			case 13:
				return $this->getShippingMethod();
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
		if (isset($alreadyDumpedObjects['Oops_Model_Carrier'][$this->getPrimaryKey()])) {
			return '*RECURSION*';
		}
		$alreadyDumpedObjects['Oops_Model_Carrier'][$this->getPrimaryKey()] = true;
		$keys = Oops_Model_CarrierPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getIdCarrier(),
			$keys[1] => $this->getIdTaxRulesGroup(),
			$keys[2] => $this->getName(),
			$keys[3] => $this->getUrl(),
			$keys[4] => $this->getActive(),
			$keys[5] => $this->getDeleted(),
			$keys[6] => $this->getShippingHandling(),
			$keys[7] => $this->getRangeBehavior(),
			$keys[8] => $this->getIsModule(),
			$keys[9] => $this->getIsFree(),
			$keys[10] => $this->getShippingExternal(),
			$keys[11] => $this->getNeedRange(),
			$keys[12] => $this->getExternalModuleName(),
			$keys[13] => $this->getShippingMethod(),
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
		$pos = Oops_Model_CarrierPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setIdCarrier($value);
				break;
			case 1:
				$this->setIdTaxRulesGroup($value);
				break;
			case 2:
				$this->setName($value);
				break;
			case 3:
				$this->setUrl($value);
				break;
			case 4:
				$this->setActive($value);
				break;
			case 5:
				$this->setDeleted($value);
				break;
			case 6:
				$this->setShippingHandling($value);
				break;
			case 7:
				$this->setRangeBehavior($value);
				break;
			case 8:
				$this->setIsModule($value);
				break;
			case 9:
				$this->setIsFree($value);
				break;
			case 10:
				$this->setShippingExternal($value);
				break;
			case 11:
				$this->setNeedRange($value);
				break;
			case 12:
				$this->setExternalModuleName($value);
				break;
			case 13:
				$this->setShippingMethod($value);
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
		$keys = Oops_Model_CarrierPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setIdCarrier($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setIdTaxRulesGroup($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setName($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setUrl($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setActive($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setDeleted($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setShippingHandling($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setRangeBehavior($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setIsModule($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setIsFree($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setShippingExternal($arr[$keys[10]]);
		if (array_key_exists($keys[11], $arr)) $this->setNeedRange($arr[$keys[11]]);
		if (array_key_exists($keys[12], $arr)) $this->setExternalModuleName($arr[$keys[12]]);
		if (array_key_exists($keys[13], $arr)) $this->setShippingMethod($arr[$keys[13]]);
	}

	/**
	 * Build a Criteria object containing the values of all modified columns in this object.
	 *
	 * @return     Criteria The Criteria object containing all modified values.
	 */
	public function buildCriteria()
	{
		$criteria = new Criteria(Oops_Model_CarrierPeer::DATABASE_NAME);

		if ($this->isColumnModified(Oops_Model_CarrierPeer::ID_CARRIER)) $criteria->add(Oops_Model_CarrierPeer::ID_CARRIER, $this->id_carrier);
		if ($this->isColumnModified(Oops_Model_CarrierPeer::ID_TAX_RULES_GROUP)) $criteria->add(Oops_Model_CarrierPeer::ID_TAX_RULES_GROUP, $this->id_tax_rules_group);
		if ($this->isColumnModified(Oops_Model_CarrierPeer::NAME)) $criteria->add(Oops_Model_CarrierPeer::NAME, $this->name);
		if ($this->isColumnModified(Oops_Model_CarrierPeer::URL)) $criteria->add(Oops_Model_CarrierPeer::URL, $this->url);
		if ($this->isColumnModified(Oops_Model_CarrierPeer::ACTIVE)) $criteria->add(Oops_Model_CarrierPeer::ACTIVE, $this->active);
		if ($this->isColumnModified(Oops_Model_CarrierPeer::DELETED)) $criteria->add(Oops_Model_CarrierPeer::DELETED, $this->deleted);
		if ($this->isColumnModified(Oops_Model_CarrierPeer::SHIPPING_HANDLING)) $criteria->add(Oops_Model_CarrierPeer::SHIPPING_HANDLING, $this->shipping_handling);
		if ($this->isColumnModified(Oops_Model_CarrierPeer::RANGE_BEHAVIOR)) $criteria->add(Oops_Model_CarrierPeer::RANGE_BEHAVIOR, $this->range_behavior);
		if ($this->isColumnModified(Oops_Model_CarrierPeer::IS_MODULE)) $criteria->add(Oops_Model_CarrierPeer::IS_MODULE, $this->is_module);
		if ($this->isColumnModified(Oops_Model_CarrierPeer::IS_FREE)) $criteria->add(Oops_Model_CarrierPeer::IS_FREE, $this->is_free);
		if ($this->isColumnModified(Oops_Model_CarrierPeer::SHIPPING_EXTERNAL)) $criteria->add(Oops_Model_CarrierPeer::SHIPPING_EXTERNAL, $this->shipping_external);
		if ($this->isColumnModified(Oops_Model_CarrierPeer::NEED_RANGE)) $criteria->add(Oops_Model_CarrierPeer::NEED_RANGE, $this->need_range);
		if ($this->isColumnModified(Oops_Model_CarrierPeer::EXTERNAL_MODULE_NAME)) $criteria->add(Oops_Model_CarrierPeer::EXTERNAL_MODULE_NAME, $this->external_module_name);
		if ($this->isColumnModified(Oops_Model_CarrierPeer::SHIPPING_METHOD)) $criteria->add(Oops_Model_CarrierPeer::SHIPPING_METHOD, $this->shipping_method);

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
		$criteria = new Criteria(Oops_Model_CarrierPeer::DATABASE_NAME);
		$criteria->add(Oops_Model_CarrierPeer::ID_CARRIER, $this->id_carrier);

		return $criteria;
	}

	/**
	 * Returns the primary key for this object (row).
	 * @return     int
	 */
	public function getPrimaryKey()
	{
		return $this->getIdCarrier();
	}

	/**
	 * Generic method to set the primary key (id_carrier column).
	 *
	 * @param      int $key Primary key.
	 * @return     void
	 */
	public function setPrimaryKey($key)
	{
		$this->setIdCarrier($key);
	}

	/**
	 * Returns true if the primary key for this object is null.
	 * @return     boolean
	 */
	public function isPrimaryKeyNull()
	{
		return null === $this->getIdCarrier();
	}

	/**
	 * Sets contents of passed object to values from current object.
	 *
	 * If desired, this method can also make copies of all associated (fkey referrers)
	 * objects.
	 *
	 * @param      object $copyObj An object of Oops_Model_Carrier (or compatible) type.
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
	 * @throws     PropelException
	 */
	public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
	{
		$copyObj->setIdTaxRulesGroup($this->getIdTaxRulesGroup());
		$copyObj->setName($this->getName());
		$copyObj->setUrl($this->getUrl());
		$copyObj->setActive($this->getActive());
		$copyObj->setDeleted($this->getDeleted());
		$copyObj->setShippingHandling($this->getShippingHandling());
		$copyObj->setRangeBehavior($this->getRangeBehavior());
		$copyObj->setIsModule($this->getIsModule());
		$copyObj->setIsFree($this->getIsFree());
		$copyObj->setShippingExternal($this->getShippingExternal());
		$copyObj->setNeedRange($this->getNeedRange());
		$copyObj->setExternalModuleName($this->getExternalModuleName());
		$copyObj->setShippingMethod($this->getShippingMethod());
		if ($makeNew) {
			$copyObj->setNew(true);
			$copyObj->setIdCarrier(NULL); // this is a auto-increment column, so set to default value
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
	 * @return     Oops_Model_Carrier Clone of current object.
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
	 * @return     Oops_Model_CarrierPeer
	 */
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new Oops_Model_CarrierPeer();
		}
		return self::$peer;
	}

	/**
	 * Clears the current object and sets all attributes to their default values
	 */
	public function clear()
	{
		$this->id_carrier = null;
		$this->id_tax_rules_group = null;
		$this->name = null;
		$this->url = null;
		$this->active = null;
		$this->deleted = null;
		$this->shipping_handling = null;
		$this->range_behavior = null;
		$this->is_module = null;
		$this->is_free = null;
		$this->shipping_external = null;
		$this->need_range = null;
		$this->external_module_name = null;
		$this->shipping_method = null;
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
		return (string) $this->exportTo(Oops_Model_CarrierPeer::DEFAULT_STRING_FORMAT);
	}

} // Oops_Model_Base_Carrier
