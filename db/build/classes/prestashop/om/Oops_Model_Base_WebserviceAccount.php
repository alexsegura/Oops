<?php


/**
 * Base class that represents a row from the 'djland_webservice_account' table.
 *
 * 
 *
 * @package    propel.generator.prestashop.om
 */
abstract class Oops_Model_Base_WebserviceAccount extends BaseObject  implements Persistent
{

	/**
	 * Peer class name
	 */
	const PEER = 'Oops_Model_WebserviceAccountPeer';

	/**
	 * The Peer class.
	 * Instance provides a convenient way of calling static methods on a class
	 * that calling code may not be able to identify.
	 * @var        Oops_Model_WebserviceAccountPeer
	 */
	protected static $peer;

	/**
	 * The value for the id_webservice_account field.
	 * @var        int
	 */
	protected $id_webservice_account;

	/**
	 * The value for the key field.
	 * @var        string
	 */
	protected $key;

	/**
	 * The value for the description field.
	 * @var        string
	 */
	protected $description;

	/**
	 * The value for the class_name field.
	 * Note: this column has a database default value of: 'WebserviceRequest'
	 * @var        string
	 */
	protected $class_name;

	/**
	 * The value for the is_module field.
	 * Note: this column has a database default value of: 0
	 * @var        int
	 */
	protected $is_module;

	/**
	 * The value for the module_name field.
	 * @var        string
	 */
	protected $module_name;

	/**
	 * The value for the active field.
	 * @var        int
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
		$this->class_name = 'WebserviceRequest';
		$this->is_module = 0;
	}

	/**
	 * Initializes internal state of Oops_Model_Base_WebserviceAccount object.
	 * @see        applyDefaults()
	 */
	public function __construct()
	{
		parent::__construct();
		$this->applyDefaultValues();
	}

	/**
	 * Get the [id_webservice_account] column value.
	 * 
	 * @return     int
	 */
	public function getIdWebserviceAccount()
	{
		return $this->id_webservice_account;
	}

	/**
	 * Get the [key] column value.
	 * 
	 * @return     string
	 */
	public function getKey()
	{
		return $this->key;
	}

	/**
	 * Get the [description] column value.
	 * 
	 * @return     string
	 */
	public function getDescription()
	{
		return $this->description;
	}

	/**
	 * Get the [class_name] column value.
	 * 
	 * @return     string
	 */
	public function getClassName()
	{
		return $this->class_name;
	}

	/**
	 * Get the [is_module] column value.
	 * 
	 * @return     int
	 */
	public function getIsModule()
	{
		return $this->is_module;
	}

	/**
	 * Get the [module_name] column value.
	 * 
	 * @return     string
	 */
	public function getModuleName()
	{
		return $this->module_name;
	}

	/**
	 * Get the [active] column value.
	 * 
	 * @return     int
	 */
	public function getActive()
	{
		return $this->active;
	}

	/**
	 * Set the value of [id_webservice_account] column.
	 * 
	 * @param      int $v new value
	 * @return     Oops_Model_WebserviceAccount The current object (for fluent API support)
	 */
	public function setIdWebserviceAccount($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->id_webservice_account !== $v) {
			$this->id_webservice_account = $v;
			$this->modifiedColumns[] = Oops_Model_WebserviceAccountPeer::ID_WEBSERVICE_ACCOUNT;
		}

		return $this;
	} // setIdWebserviceAccount()

	/**
	 * Set the value of [key] column.
	 * 
	 * @param      string $v new value
	 * @return     Oops_Model_WebserviceAccount The current object (for fluent API support)
	 */
	public function setKey($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->key !== $v) {
			$this->key = $v;
			$this->modifiedColumns[] = Oops_Model_WebserviceAccountPeer::KEY;
		}

		return $this;
	} // setKey()

	/**
	 * Set the value of [description] column.
	 * 
	 * @param      string $v new value
	 * @return     Oops_Model_WebserviceAccount The current object (for fluent API support)
	 */
	public function setDescription($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->description !== $v) {
			$this->description = $v;
			$this->modifiedColumns[] = Oops_Model_WebserviceAccountPeer::DESCRIPTION;
		}

		return $this;
	} // setDescription()

	/**
	 * Set the value of [class_name] column.
	 * 
	 * @param      string $v new value
	 * @return     Oops_Model_WebserviceAccount The current object (for fluent API support)
	 */
	public function setClassName($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->class_name !== $v) {
			$this->class_name = $v;
			$this->modifiedColumns[] = Oops_Model_WebserviceAccountPeer::CLASS_NAME;
		}

		return $this;
	} // setClassName()

	/**
	 * Set the value of [is_module] column.
	 * 
	 * @param      int $v new value
	 * @return     Oops_Model_WebserviceAccount The current object (for fluent API support)
	 */
	public function setIsModule($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->is_module !== $v) {
			$this->is_module = $v;
			$this->modifiedColumns[] = Oops_Model_WebserviceAccountPeer::IS_MODULE;
		}

		return $this;
	} // setIsModule()

	/**
	 * Set the value of [module_name] column.
	 * 
	 * @param      string $v new value
	 * @return     Oops_Model_WebserviceAccount The current object (for fluent API support)
	 */
	public function setModuleName($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->module_name !== $v) {
			$this->module_name = $v;
			$this->modifiedColumns[] = Oops_Model_WebserviceAccountPeer::MODULE_NAME;
		}

		return $this;
	} // setModuleName()

	/**
	 * Set the value of [active] column.
	 * 
	 * @param      int $v new value
	 * @return     Oops_Model_WebserviceAccount The current object (for fluent API support)
	 */
	public function setActive($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->active !== $v) {
			$this->active = $v;
			$this->modifiedColumns[] = Oops_Model_WebserviceAccountPeer::ACTIVE;
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
			if ($this->class_name !== 'WebserviceRequest') {
				return false;
			}

			if ($this->is_module !== 0) {
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

			$this->id_webservice_account = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
			$this->key = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
			$this->description = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
			$this->class_name = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
			$this->is_module = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
			$this->module_name = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
			$this->active = ($row[$startcol + 6] !== null) ? (int) $row[$startcol + 6] : null;
			$this->resetModified();

			$this->setNew(false);

			if ($rehydrate) {
				$this->ensureConsistency();
			}

			return $startcol + 7; // 7 = Oops_Model_WebserviceAccountPeer::NUM_HYDRATE_COLUMNS.

		} catch (Exception $e) {
			throw new PropelException("Error populating Oops_Model_WebserviceAccount object", $e);
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
			$con = Propel::getConnection(Oops_Model_WebserviceAccountPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		// We don't need to alter the object instance pool; we're just modifying this instance
		// already in the pool.

		$stmt = Oops_Model_WebserviceAccountPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
			$con = Propel::getConnection(Oops_Model_WebserviceAccountPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$con->beginTransaction();
		try {
			$deleteQuery = Oops_Model_WebserviceAccountQuery::create()
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
			$con = Propel::getConnection(Oops_Model_WebserviceAccountPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
				Oops_Model_WebserviceAccountPeer::addInstanceToPool($this);
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

		$this->modifiedColumns[] = Oops_Model_WebserviceAccountPeer::ID_WEBSERVICE_ACCOUNT;
		if (null !== $this->id_webservice_account) {
			throw new PropelException('Cannot insert a value for auto-increment primary key (' . Oops_Model_WebserviceAccountPeer::ID_WEBSERVICE_ACCOUNT . ')');
		}

		 // check the columns in natural order for more readable SQL queries
		if ($this->isColumnModified(Oops_Model_WebserviceAccountPeer::ID_WEBSERVICE_ACCOUNT)) {
			$modifiedColumns[':p' . $index++]  = '`ID_WEBSERVICE_ACCOUNT`';
		}
		if ($this->isColumnModified(Oops_Model_WebserviceAccountPeer::KEY)) {
			$modifiedColumns[':p' . $index++]  = '`KEY`';
		}
		if ($this->isColumnModified(Oops_Model_WebserviceAccountPeer::DESCRIPTION)) {
			$modifiedColumns[':p' . $index++]  = '`DESCRIPTION`';
		}
		if ($this->isColumnModified(Oops_Model_WebserviceAccountPeer::CLASS_NAME)) {
			$modifiedColumns[':p' . $index++]  = '`CLASS_NAME`';
		}
		if ($this->isColumnModified(Oops_Model_WebserviceAccountPeer::IS_MODULE)) {
			$modifiedColumns[':p' . $index++]  = '`IS_MODULE`';
		}
		if ($this->isColumnModified(Oops_Model_WebserviceAccountPeer::MODULE_NAME)) {
			$modifiedColumns[':p' . $index++]  = '`MODULE_NAME`';
		}
		if ($this->isColumnModified(Oops_Model_WebserviceAccountPeer::ACTIVE)) {
			$modifiedColumns[':p' . $index++]  = '`ACTIVE`';
		}

		$sql = sprintf(
			'INSERT INTO `' . _DB_PREFIX_ . 'djland_webservice_account` (%s) VALUES (%s)',
			implode(', ', $modifiedColumns),
			implode(', ', array_keys($modifiedColumns))
		);

		try {
			$stmt = $con->prepare($sql);
			foreach ($modifiedColumns as $identifier => $columnName) {
				switch ($columnName) {
					case '`ID_WEBSERVICE_ACCOUNT`':
						$stmt->bindValue($identifier, $this->id_webservice_account, PDO::PARAM_INT);
						break;
					case '`KEY`':
						$stmt->bindValue($identifier, $this->key, PDO::PARAM_STR);
						break;
					case '`DESCRIPTION`':
						$stmt->bindValue($identifier, $this->description, PDO::PARAM_STR);
						break;
					case '`CLASS_NAME`':
						$stmt->bindValue($identifier, $this->class_name, PDO::PARAM_STR);
						break;
					case '`IS_MODULE`':
						$stmt->bindValue($identifier, $this->is_module, PDO::PARAM_INT);
						break;
					case '`MODULE_NAME`':
						$stmt->bindValue($identifier, $this->module_name, PDO::PARAM_STR);
						break;
					case '`ACTIVE`':
						$stmt->bindValue($identifier, $this->active, PDO::PARAM_INT);
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
		$this->setIdWebserviceAccount($pk);

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


			if (($retval = Oops_Model_WebserviceAccountPeer::doValidate($this, $columns)) !== true) {
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
		$pos = Oops_Model_WebserviceAccountPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getIdWebserviceAccount();
				break;
			case 1:
				return $this->getKey();
				break;
			case 2:
				return $this->getDescription();
				break;
			case 3:
				return $this->getClassName();
				break;
			case 4:
				return $this->getIsModule();
				break;
			case 5:
				return $this->getModuleName();
				break;
			case 6:
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
		if (isset($alreadyDumpedObjects['Oops_Model_WebserviceAccount'][$this->getPrimaryKey()])) {
			return '*RECURSION*';
		}
		$alreadyDumpedObjects['Oops_Model_WebserviceAccount'][$this->getPrimaryKey()] = true;
		$keys = Oops_Model_WebserviceAccountPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getIdWebserviceAccount(),
			$keys[1] => $this->getKey(),
			$keys[2] => $this->getDescription(),
			$keys[3] => $this->getClassName(),
			$keys[4] => $this->getIsModule(),
			$keys[5] => $this->getModuleName(),
			$keys[6] => $this->getActive(),
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
		$pos = Oops_Model_WebserviceAccountPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setIdWebserviceAccount($value);
				break;
			case 1:
				$this->setKey($value);
				break;
			case 2:
				$this->setDescription($value);
				break;
			case 3:
				$this->setClassName($value);
				break;
			case 4:
				$this->setIsModule($value);
				break;
			case 5:
				$this->setModuleName($value);
				break;
			case 6:
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
		$keys = Oops_Model_WebserviceAccountPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setIdWebserviceAccount($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setKey($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setDescription($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setClassName($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setIsModule($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setModuleName($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setActive($arr[$keys[6]]);
	}

	/**
	 * Build a Criteria object containing the values of all modified columns in this object.
	 *
	 * @return     Criteria The Criteria object containing all modified values.
	 */
	public function buildCriteria()
	{
		$criteria = new Criteria(Oops_Model_WebserviceAccountPeer::DATABASE_NAME);

		if ($this->isColumnModified(Oops_Model_WebserviceAccountPeer::ID_WEBSERVICE_ACCOUNT)) $criteria->add(Oops_Model_WebserviceAccountPeer::ID_WEBSERVICE_ACCOUNT, $this->id_webservice_account);
		if ($this->isColumnModified(Oops_Model_WebserviceAccountPeer::KEY)) $criteria->add(Oops_Model_WebserviceAccountPeer::KEY, $this->key);
		if ($this->isColumnModified(Oops_Model_WebserviceAccountPeer::DESCRIPTION)) $criteria->add(Oops_Model_WebserviceAccountPeer::DESCRIPTION, $this->description);
		if ($this->isColumnModified(Oops_Model_WebserviceAccountPeer::CLASS_NAME)) $criteria->add(Oops_Model_WebserviceAccountPeer::CLASS_NAME, $this->class_name);
		if ($this->isColumnModified(Oops_Model_WebserviceAccountPeer::IS_MODULE)) $criteria->add(Oops_Model_WebserviceAccountPeer::IS_MODULE, $this->is_module);
		if ($this->isColumnModified(Oops_Model_WebserviceAccountPeer::MODULE_NAME)) $criteria->add(Oops_Model_WebserviceAccountPeer::MODULE_NAME, $this->module_name);
		if ($this->isColumnModified(Oops_Model_WebserviceAccountPeer::ACTIVE)) $criteria->add(Oops_Model_WebserviceAccountPeer::ACTIVE, $this->active);

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
		$criteria = new Criteria(Oops_Model_WebserviceAccountPeer::DATABASE_NAME);
		$criteria->add(Oops_Model_WebserviceAccountPeer::ID_WEBSERVICE_ACCOUNT, $this->id_webservice_account);

		return $criteria;
	}

	/**
	 * Returns the primary key for this object (row).
	 * @return     int
	 */
	public function getPrimaryKey()
	{
		return $this->getIdWebserviceAccount();
	}

	/**
	 * Generic method to set the primary key (id_webservice_account column).
	 *
	 * @param      int $key Primary key.
	 * @return     void
	 */
	public function setPrimaryKey($key)
	{
		$this->setIdWebserviceAccount($key);
	}

	/**
	 * Returns true if the primary key for this object is null.
	 * @return     boolean
	 */
	public function isPrimaryKeyNull()
	{
		return null === $this->getIdWebserviceAccount();
	}

	/**
	 * Sets contents of passed object to values from current object.
	 *
	 * If desired, this method can also make copies of all associated (fkey referrers)
	 * objects.
	 *
	 * @param      object $copyObj An object of Oops_Model_WebserviceAccount (or compatible) type.
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
	 * @throws     PropelException
	 */
	public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
	{
		$copyObj->setKey($this->getKey());
		$copyObj->setDescription($this->getDescription());
		$copyObj->setClassName($this->getClassName());
		$copyObj->setIsModule($this->getIsModule());
		$copyObj->setModuleName($this->getModuleName());
		$copyObj->setActive($this->getActive());
		if ($makeNew) {
			$copyObj->setNew(true);
			$copyObj->setIdWebserviceAccount(NULL); // this is a auto-increment column, so set to default value
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
	 * @return     Oops_Model_WebserviceAccount Clone of current object.
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
	 * @return     Oops_Model_WebserviceAccountPeer
	 */
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new Oops_Model_WebserviceAccountPeer();
		}
		return self::$peer;
	}

	/**
	 * Clears the current object and sets all attributes to their default values
	 */
	public function clear()
	{
		$this->id_webservice_account = null;
		$this->key = null;
		$this->description = null;
		$this->class_name = null;
		$this->is_module = null;
		$this->module_name = null;
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
		return (string) $this->exportTo(Oops_Model_WebserviceAccountPeer::DEFAULT_STRING_FORMAT);
	}

} // Oops_Model_Base_WebserviceAccount
