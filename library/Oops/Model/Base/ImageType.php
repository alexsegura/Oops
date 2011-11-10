<?php


/**
 * Base class that represents a row from the 'image_type' table.
 *
 * 
 *
 * @package    propel.generator.prestashop.om
 */
abstract class Oops_Model_Base_ImageType extends BaseObject  implements Persistent
{

	/**
	 * Peer class name
	 */
	const PEER = 'Oops_Model_ImageTypePeer';

	/**
	 * The Peer class.
	 * Instance provides a convenient way of calling static methods on a class
	 * that calling code may not be able to identify.
	 * @var        Oops_Model_ImageTypePeer
	 */
	protected static $peer;

	/**
	 * The value for the id_image_type field.
	 * @var        int
	 */
	protected $id_image_type;

	/**
	 * The value for the name field.
	 * @var        string
	 */
	protected $name;

	/**
	 * The value for the width field.
	 * @var        int
	 */
	protected $width;

	/**
	 * The value for the height field.
	 * @var        int
	 */
	protected $height;

	/**
	 * The value for the products field.
	 * Note: this column has a database default value of: true
	 * @var        boolean
	 */
	protected $products;

	/**
	 * The value for the categories field.
	 * Note: this column has a database default value of: true
	 * @var        boolean
	 */
	protected $categories;

	/**
	 * The value for the manufacturers field.
	 * Note: this column has a database default value of: true
	 * @var        boolean
	 */
	protected $manufacturers;

	/**
	 * The value for the suppliers field.
	 * Note: this column has a database default value of: true
	 * @var        boolean
	 */
	protected $suppliers;

	/**
	 * The value for the scenes field.
	 * Note: this column has a database default value of: true
	 * @var        boolean
	 */
	protected $scenes;

	/**
	 * The value for the stores field.
	 * Note: this column has a database default value of: true
	 * @var        boolean
	 */
	protected $stores;

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
		$this->products = true;
		$this->categories = true;
		$this->manufacturers = true;
		$this->suppliers = true;
		$this->scenes = true;
		$this->stores = true;
	}

	/**
	 * Initializes internal state of Oops_Model_Base_ImageType object.
	 * @see        applyDefaults()
	 */
	public function __construct()
	{
		parent::__construct();
		$this->applyDefaultValues();
	}

	/**
	 * Get the [id_image_type] column value.
	 * 
	 * @return     int
	 */
	public function getIdImageType()
	{
		return $this->id_image_type;
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
	 * Get the [width] column value.
	 * 
	 * @return     int
	 */
	public function getWidth()
	{
		return $this->width;
	}

	/**
	 * Get the [height] column value.
	 * 
	 * @return     int
	 */
	public function getHeight()
	{
		return $this->height;
	}

	/**
	 * Get the [products] column value.
	 * 
	 * @return     boolean
	 */
	public function getProducts()
	{
		return $this->products;
	}

	/**
	 * Get the [categories] column value.
	 * 
	 * @return     boolean
	 */
	public function getCategories()
	{
		return $this->categories;
	}

	/**
	 * Get the [manufacturers] column value.
	 * 
	 * @return     boolean
	 */
	public function getManufacturers()
	{
		return $this->manufacturers;
	}

	/**
	 * Get the [suppliers] column value.
	 * 
	 * @return     boolean
	 */
	public function getSuppliers()
	{
		return $this->suppliers;
	}

	/**
	 * Get the [scenes] column value.
	 * 
	 * @return     boolean
	 */
	public function getScenes()
	{
		return $this->scenes;
	}

	/**
	 * Get the [stores] column value.
	 * 
	 * @return     boolean
	 */
	public function getStores()
	{
		return $this->stores;
	}

	/**
	 * Set the value of [id_image_type] column.
	 * 
	 * @param      int $v new value
	 * @return     Oops_Model_ImageType The current object (for fluent API support)
	 */
	public function setIdImageType($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->id_image_type !== $v) {
			$this->id_image_type = $v;
			$this->modifiedColumns[] = Oops_Model_ImageTypePeer::ID_IMAGE_TYPE;
		}

		return $this;
	} // setIdImageType()

	/**
	 * Set the value of [name] column.
	 * 
	 * @param      string $v new value
	 * @return     Oops_Model_ImageType The current object (for fluent API support)
	 */
	public function setName($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->name !== $v) {
			$this->name = $v;
			$this->modifiedColumns[] = Oops_Model_ImageTypePeer::NAME;
		}

		return $this;
	} // setName()

	/**
	 * Set the value of [width] column.
	 * 
	 * @param      int $v new value
	 * @return     Oops_Model_ImageType The current object (for fluent API support)
	 */
	public function setWidth($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->width !== $v) {
			$this->width = $v;
			$this->modifiedColumns[] = Oops_Model_ImageTypePeer::WIDTH;
		}

		return $this;
	} // setWidth()

	/**
	 * Set the value of [height] column.
	 * 
	 * @param      int $v new value
	 * @return     Oops_Model_ImageType The current object (for fluent API support)
	 */
	public function setHeight($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->height !== $v) {
			$this->height = $v;
			$this->modifiedColumns[] = Oops_Model_ImageTypePeer::HEIGHT;
		}

		return $this;
	} // setHeight()

	/**
	 * Sets the value of the [products] column.
	 * Non-boolean arguments are converted using the following rules:
	 *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * 
	 * @param      boolean|integer|string $v The new value
	 * @return     Oops_Model_ImageType The current object (for fluent API support)
	 */
	public function setProducts($v)
	{
		if ($v !== null) {
			if (is_string($v)) {
				$v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
			} else {
				$v = (boolean) $v;
			}
		}

		if ($this->products !== $v) {
			$this->products = $v;
			$this->modifiedColumns[] = Oops_Model_ImageTypePeer::PRODUCTS;
		}

		return $this;
	} // setProducts()

	/**
	 * Sets the value of the [categories] column.
	 * Non-boolean arguments are converted using the following rules:
	 *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * 
	 * @param      boolean|integer|string $v The new value
	 * @return     Oops_Model_ImageType The current object (for fluent API support)
	 */
	public function setCategories($v)
	{
		if ($v !== null) {
			if (is_string($v)) {
				$v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
			} else {
				$v = (boolean) $v;
			}
		}

		if ($this->categories !== $v) {
			$this->categories = $v;
			$this->modifiedColumns[] = Oops_Model_ImageTypePeer::CATEGORIES;
		}

		return $this;
	} // setCategories()

	/**
	 * Sets the value of the [manufacturers] column.
	 * Non-boolean arguments are converted using the following rules:
	 *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * 
	 * @param      boolean|integer|string $v The new value
	 * @return     Oops_Model_ImageType The current object (for fluent API support)
	 */
	public function setManufacturers($v)
	{
		if ($v !== null) {
			if (is_string($v)) {
				$v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
			} else {
				$v = (boolean) $v;
			}
		}

		if ($this->manufacturers !== $v) {
			$this->manufacturers = $v;
			$this->modifiedColumns[] = Oops_Model_ImageTypePeer::MANUFACTURERS;
		}

		return $this;
	} // setManufacturers()

	/**
	 * Sets the value of the [suppliers] column.
	 * Non-boolean arguments are converted using the following rules:
	 *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * 
	 * @param      boolean|integer|string $v The new value
	 * @return     Oops_Model_ImageType The current object (for fluent API support)
	 */
	public function setSuppliers($v)
	{
		if ($v !== null) {
			if (is_string($v)) {
				$v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
			} else {
				$v = (boolean) $v;
			}
		}

		if ($this->suppliers !== $v) {
			$this->suppliers = $v;
			$this->modifiedColumns[] = Oops_Model_ImageTypePeer::SUPPLIERS;
		}

		return $this;
	} // setSuppliers()

	/**
	 * Sets the value of the [scenes] column.
	 * Non-boolean arguments are converted using the following rules:
	 *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * 
	 * @param      boolean|integer|string $v The new value
	 * @return     Oops_Model_ImageType The current object (for fluent API support)
	 */
	public function setScenes($v)
	{
		if ($v !== null) {
			if (is_string($v)) {
				$v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
			} else {
				$v = (boolean) $v;
			}
		}

		if ($this->scenes !== $v) {
			$this->scenes = $v;
			$this->modifiedColumns[] = Oops_Model_ImageTypePeer::SCENES;
		}

		return $this;
	} // setScenes()

	/**
	 * Sets the value of the [stores] column.
	 * Non-boolean arguments are converted using the following rules:
	 *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * 
	 * @param      boolean|integer|string $v The new value
	 * @return     Oops_Model_ImageType The current object (for fluent API support)
	 */
	public function setStores($v)
	{
		if ($v !== null) {
			if (is_string($v)) {
				$v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
			} else {
				$v = (boolean) $v;
			}
		}

		if ($this->stores !== $v) {
			$this->stores = $v;
			$this->modifiedColumns[] = Oops_Model_ImageTypePeer::STORES;
		}

		return $this;
	} // setStores()

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
			if ($this->products !== true) {
				return false;
			}

			if ($this->categories !== true) {
				return false;
			}

			if ($this->manufacturers !== true) {
				return false;
			}

			if ($this->suppliers !== true) {
				return false;
			}

			if ($this->scenes !== true) {
				return false;
			}

			if ($this->stores !== true) {
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

			$this->id_image_type = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
			$this->name = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
			$this->width = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
			$this->height = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
			$this->products = ($row[$startcol + 4] !== null) ? (boolean) $row[$startcol + 4] : null;
			$this->categories = ($row[$startcol + 5] !== null) ? (boolean) $row[$startcol + 5] : null;
			$this->manufacturers = ($row[$startcol + 6] !== null) ? (boolean) $row[$startcol + 6] : null;
			$this->suppliers = ($row[$startcol + 7] !== null) ? (boolean) $row[$startcol + 7] : null;
			$this->scenes = ($row[$startcol + 8] !== null) ? (boolean) $row[$startcol + 8] : null;
			$this->stores = ($row[$startcol + 9] !== null) ? (boolean) $row[$startcol + 9] : null;
			$this->resetModified();

			$this->setNew(false);

			if ($rehydrate) {
				$this->ensureConsistency();
			}

			return $startcol + 10; // 10 = Oops_Model_ImageTypePeer::NUM_HYDRATE_COLUMNS.

		} catch (Exception $e) {
			throw new PropelException("Error populating Oops_Model_ImageType object", $e);
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
			$con = Propel::getConnection(Oops_Model_ImageTypePeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		// We don't need to alter the object instance pool; we're just modifying this instance
		// already in the pool.

		$stmt = Oops_Model_ImageTypePeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
			$con = Propel::getConnection(Oops_Model_ImageTypePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$con->beginTransaction();
		try {
			$deleteQuery = Oops_Model_ImageTypeQuery::create()
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
			$con = Propel::getConnection(Oops_Model_ImageTypePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
				Oops_Model_ImageTypePeer::addInstanceToPool($this);
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

		$this->modifiedColumns[] = Oops_Model_ImageTypePeer::ID_IMAGE_TYPE;
		if (null !== $this->id_image_type) {
			throw new PropelException('Cannot insert a value for auto-increment primary key (' . Oops_Model_ImageTypePeer::ID_IMAGE_TYPE . ')');
		}

		 // check the columns in natural order for more readable SQL queries
		if ($this->isColumnModified(Oops_Model_ImageTypePeer::ID_IMAGE_TYPE)) {
			$modifiedColumns[':p' . $index++]  = '`ID_IMAGE_TYPE`';
		}
		if ($this->isColumnModified(Oops_Model_ImageTypePeer::NAME)) {
			$modifiedColumns[':p' . $index++]  = '`NAME`';
		}
		if ($this->isColumnModified(Oops_Model_ImageTypePeer::WIDTH)) {
			$modifiedColumns[':p' . $index++]  = '`WIDTH`';
		}
		if ($this->isColumnModified(Oops_Model_ImageTypePeer::HEIGHT)) {
			$modifiedColumns[':p' . $index++]  = '`HEIGHT`';
		}
		if ($this->isColumnModified(Oops_Model_ImageTypePeer::PRODUCTS)) {
			$modifiedColumns[':p' . $index++]  = '`PRODUCTS`';
		}
		if ($this->isColumnModified(Oops_Model_ImageTypePeer::CATEGORIES)) {
			$modifiedColumns[':p' . $index++]  = '`CATEGORIES`';
		}
		if ($this->isColumnModified(Oops_Model_ImageTypePeer::MANUFACTURERS)) {
			$modifiedColumns[':p' . $index++]  = '`MANUFACTURERS`';
		}
		if ($this->isColumnModified(Oops_Model_ImageTypePeer::SUPPLIERS)) {
			$modifiedColumns[':p' . $index++]  = '`SUPPLIERS`';
		}
		if ($this->isColumnModified(Oops_Model_ImageTypePeer::SCENES)) {
			$modifiedColumns[':p' . $index++]  = '`SCENES`';
		}
		if ($this->isColumnModified(Oops_Model_ImageTypePeer::STORES)) {
			$modifiedColumns[':p' . $index++]  = '`STORES`';
		}

		$sql = sprintf(
			'INSERT INTO `' .  _DB_PREFIX_ . 'image_type` (%s) VALUES (%s)',
			implode(', ', $modifiedColumns),
			implode(', ', array_keys($modifiedColumns))
		);

		try {
			$stmt = $con->prepare($sql);
			foreach ($modifiedColumns as $identifier => $columnName) {
				switch ($columnName) {
					case '`ID_IMAGE_TYPE`':
						$stmt->bindValue($identifier, $this->id_image_type, PDO::PARAM_INT);
						break;
					case '`NAME`':
						$stmt->bindValue($identifier, $this->name, PDO::PARAM_STR);
						break;
					case '`WIDTH`':
						$stmt->bindValue($identifier, $this->width, PDO::PARAM_INT);
						break;
					case '`HEIGHT`':
						$stmt->bindValue($identifier, $this->height, PDO::PARAM_INT);
						break;
					case '`PRODUCTS`':
						$stmt->bindValue($identifier, (int) $this->products, PDO::PARAM_INT);
						break;
					case '`CATEGORIES`':
						$stmt->bindValue($identifier, (int) $this->categories, PDO::PARAM_INT);
						break;
					case '`MANUFACTURERS`':
						$stmt->bindValue($identifier, (int) $this->manufacturers, PDO::PARAM_INT);
						break;
					case '`SUPPLIERS`':
						$stmt->bindValue($identifier, (int) $this->suppliers, PDO::PARAM_INT);
						break;
					case '`SCENES`':
						$stmt->bindValue($identifier, (int) $this->scenes, PDO::PARAM_INT);
						break;
					case '`STORES`':
						$stmt->bindValue($identifier, (int) $this->stores, PDO::PARAM_INT);
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
		$this->setIdImageType($pk);

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


			if (($retval = Oops_Model_ImageTypePeer::doValidate($this, $columns)) !== true) {
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
		$pos = Oops_Model_ImageTypePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getIdImageType();
				break;
			case 1:
				return $this->getName();
				break;
			case 2:
				return $this->getWidth();
				break;
			case 3:
				return $this->getHeight();
				break;
			case 4:
				return $this->getProducts();
				break;
			case 5:
				return $this->getCategories();
				break;
			case 6:
				return $this->getManufacturers();
				break;
			case 7:
				return $this->getSuppliers();
				break;
			case 8:
				return $this->getScenes();
				break;
			case 9:
				return $this->getStores();
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
		if (isset($alreadyDumpedObjects['Oops_Model_ImageType'][$this->getPrimaryKey()])) {
			return '*RECURSION*';
		}
		$alreadyDumpedObjects['Oops_Model_ImageType'][$this->getPrimaryKey()] = true;
		$keys = Oops_Model_ImageTypePeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getIdImageType(),
			$keys[1] => $this->getName(),
			$keys[2] => $this->getWidth(),
			$keys[3] => $this->getHeight(),
			$keys[4] => $this->getProducts(),
			$keys[5] => $this->getCategories(),
			$keys[6] => $this->getManufacturers(),
			$keys[7] => $this->getSuppliers(),
			$keys[8] => $this->getScenes(),
			$keys[9] => $this->getStores(),
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
		$pos = Oops_Model_ImageTypePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setIdImageType($value);
				break;
			case 1:
				$this->setName($value);
				break;
			case 2:
				$this->setWidth($value);
				break;
			case 3:
				$this->setHeight($value);
				break;
			case 4:
				$this->setProducts($value);
				break;
			case 5:
				$this->setCategories($value);
				break;
			case 6:
				$this->setManufacturers($value);
				break;
			case 7:
				$this->setSuppliers($value);
				break;
			case 8:
				$this->setScenes($value);
				break;
			case 9:
				$this->setStores($value);
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
		$keys = Oops_Model_ImageTypePeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setIdImageType($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setName($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setWidth($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setHeight($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setProducts($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setCategories($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setManufacturers($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setSuppliers($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setScenes($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setStores($arr[$keys[9]]);
	}

	/**
	 * Build a Criteria object containing the values of all modified columns in this object.
	 *
	 * @return     Criteria The Criteria object containing all modified values.
	 */
	public function buildCriteria()
	{
		$criteria = new Criteria(Oops_Model_ImageTypePeer::DATABASE_NAME);

		if ($this->isColumnModified(Oops_Model_ImageTypePeer::ID_IMAGE_TYPE)) $criteria->add(Oops_Model_ImageTypePeer::ID_IMAGE_TYPE, $this->id_image_type);
		if ($this->isColumnModified(Oops_Model_ImageTypePeer::NAME)) $criteria->add(Oops_Model_ImageTypePeer::NAME, $this->name);
		if ($this->isColumnModified(Oops_Model_ImageTypePeer::WIDTH)) $criteria->add(Oops_Model_ImageTypePeer::WIDTH, $this->width);
		if ($this->isColumnModified(Oops_Model_ImageTypePeer::HEIGHT)) $criteria->add(Oops_Model_ImageTypePeer::HEIGHT, $this->height);
		if ($this->isColumnModified(Oops_Model_ImageTypePeer::PRODUCTS)) $criteria->add(Oops_Model_ImageTypePeer::PRODUCTS, $this->products);
		if ($this->isColumnModified(Oops_Model_ImageTypePeer::CATEGORIES)) $criteria->add(Oops_Model_ImageTypePeer::CATEGORIES, $this->categories);
		if ($this->isColumnModified(Oops_Model_ImageTypePeer::MANUFACTURERS)) $criteria->add(Oops_Model_ImageTypePeer::MANUFACTURERS, $this->manufacturers);
		if ($this->isColumnModified(Oops_Model_ImageTypePeer::SUPPLIERS)) $criteria->add(Oops_Model_ImageTypePeer::SUPPLIERS, $this->suppliers);
		if ($this->isColumnModified(Oops_Model_ImageTypePeer::SCENES)) $criteria->add(Oops_Model_ImageTypePeer::SCENES, $this->scenes);
		if ($this->isColumnModified(Oops_Model_ImageTypePeer::STORES)) $criteria->add(Oops_Model_ImageTypePeer::STORES, $this->stores);

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
		$criteria = new Criteria(Oops_Model_ImageTypePeer::DATABASE_NAME);
		$criteria->add(Oops_Model_ImageTypePeer::ID_IMAGE_TYPE, $this->id_image_type);

		return $criteria;
	}

	/**
	 * Returns the primary key for this object (row).
	 * @return     int
	 */
	public function getPrimaryKey()
	{
		return $this->getIdImageType();
	}

	/**
	 * Generic method to set the primary key (id_image_type column).
	 *
	 * @param      int $key Primary key.
	 * @return     void
	 */
	public function setPrimaryKey($key)
	{
		$this->setIdImageType($key);
	}

	/**
	 * Returns true if the primary key for this object is null.
	 * @return     boolean
	 */
	public function isPrimaryKeyNull()
	{
		return null === $this->getIdImageType();
	}

	/**
	 * Sets contents of passed object to values from current object.
	 *
	 * If desired, this method can also make copies of all associated (fkey referrers)
	 * objects.
	 *
	 * @param      object $copyObj An object of Oops_Model_ImageType (or compatible) type.
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
	 * @throws     PropelException
	 */
	public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
	{
		$copyObj->setName($this->getName());
		$copyObj->setWidth($this->getWidth());
		$copyObj->setHeight($this->getHeight());
		$copyObj->setProducts($this->getProducts());
		$copyObj->setCategories($this->getCategories());
		$copyObj->setManufacturers($this->getManufacturers());
		$copyObj->setSuppliers($this->getSuppliers());
		$copyObj->setScenes($this->getScenes());
		$copyObj->setStores($this->getStores());
		if ($makeNew) {
			$copyObj->setNew(true);
			$copyObj->setIdImageType(NULL); // this is a auto-increment column, so set to default value
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
	 * @return     Oops_Model_ImageType Clone of current object.
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
	 * @return     Oops_Model_ImageTypePeer
	 */
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new Oops_Model_ImageTypePeer();
		}
		return self::$peer;
	}

	/**
	 * Clears the current object and sets all attributes to their default values
	 */
	public function clear()
	{
		$this->id_image_type = null;
		$this->name = null;
		$this->width = null;
		$this->height = null;
		$this->products = null;
		$this->categories = null;
		$this->manufacturers = null;
		$this->suppliers = null;
		$this->scenes = null;
		$this->stores = null;
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
		return (string) $this->exportTo(Oops_Model_ImageTypePeer::DEFAULT_STRING_FORMAT);
	}

} // Oops_Model_Base_ImageType
