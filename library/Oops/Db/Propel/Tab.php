<?php


/**
 * Base class that represents a row from the 'tab' table.
 *
 * 
 *
 * @package    propel.generator.prestashop.om
 */
abstract class Oops_Db_Propel_Tab extends BaseObject  implements Persistent
{

	/**
	 * Peer class name
	 */
	const PEER = 'Oops_Db_TabPeer';

	/**
	 * The Peer class.
	 * Instance provides a convenient way of calling static methods on a class
	 * that calling code may not be able to identify.
	 * @var        Oops_Db_TabPeer
	 */
	protected static $peer;

	/**
	 * The value for the id_tab field.
	 * @var        int
	 */
	protected $id_tab;

	/**
	 * The value for the id_parent field.
	 * @var        int
	 */
	protected $id_parent;

	/**
	 * The value for the class_name field.
	 * @var        string
	 */
	protected $class_name;

	/**
	 * The value for the module field.
	 * @var        string
	 */
	protected $module;

	/**
	 * The value for the position field.
	 * @var        int
	 */
	protected $position;

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
	 * Get the [id_tab] column value.
	 * 
	 * @return     int
	 */
	public function getIdTab()
	{
		return $this->id_tab;
	}

	/**
	 * Get the [id_parent] column value.
	 * 
	 * @return     int
	 */
	public function getIdParent()
	{
		return $this->id_parent;
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
	 * Get the [module] column value.
	 * 
	 * @return     string
	 */
	public function getModule()
	{
		return $this->module;
	}

	/**
	 * Get the [position] column value.
	 * 
	 * @return     int
	 */
	public function getPosition()
	{
		return $this->position;
	}

	/**
	 * Set the value of [id_tab] column.
	 * 
	 * @param      int $v new value
	 * @return     Oops_Db_Tab The current object (for fluent API support)
	 */
	public function setIdTab($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->id_tab !== $v) {
			$this->id_tab = $v;
			$this->modifiedColumns[] = Oops_Db_TabPeer::ID_TAB;
		}

		return $this;
	} // setIdTab()

	/**
	 * Set the value of [id_parent] column.
	 * 
	 * @param      int $v new value
	 * @return     Oops_Db_Tab The current object (for fluent API support)
	 */
	public function setIdParent($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->id_parent !== $v) {
			$this->id_parent = $v;
			$this->modifiedColumns[] = Oops_Db_TabPeer::ID_PARENT;
		}

		return $this;
	} // setIdParent()

	/**
	 * Set the value of [class_name] column.
	 * 
	 * @param      string $v new value
	 * @return     Oops_Db_Tab The current object (for fluent API support)
	 */
	public function setClassName($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->class_name !== $v) {
			$this->class_name = $v;
			$this->modifiedColumns[] = Oops_Db_TabPeer::CLASS_NAME;
		}

		return $this;
	} // setClassName()

	/**
	 * Set the value of [module] column.
	 * 
	 * @param      string $v new value
	 * @return     Oops_Db_Tab The current object (for fluent API support)
	 */
	public function setModule($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->module !== $v) {
			$this->module = $v;
			$this->modifiedColumns[] = Oops_Db_TabPeer::MODULE;
		}

		return $this;
	} // setModule()

	/**
	 * Set the value of [position] column.
	 * 
	 * @param      int $v new value
	 * @return     Oops_Db_Tab The current object (for fluent API support)
	 */
	public function setPosition($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->position !== $v) {
			$this->position = $v;
			$this->modifiedColumns[] = Oops_Db_TabPeer::POSITION;
		}

		return $this;
	} // setPosition()

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

			$this->id_tab = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
			$this->id_parent = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
			$this->class_name = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
			$this->module = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
			$this->position = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
			$this->resetModified();

			$this->setNew(false);

			if ($rehydrate) {
				$this->ensureConsistency();
			}

			return $startcol + 5; // 5 = Oops_Db_TabPeer::NUM_HYDRATE_COLUMNS.

		} catch (Exception $e) {
			throw new PropelException("Error populating Oops_Db_Tab object", $e);
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
			$con = Propel::getConnection(Oops_Db_TabPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		// We don't need to alter the object instance pool; we're just modifying this instance
		// already in the pool.

		$stmt = Oops_Db_TabPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
			$con = Propel::getConnection(Oops_Db_TabPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$con->beginTransaction();
		try {
			$deleteQuery = Oops_Db_TabQuery::create()
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
			$con = Propel::getConnection(Oops_Db_TabPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
				Oops_Db_TabPeer::addInstanceToPool($this);
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

		$this->modifiedColumns[] = Oops_Db_TabPeer::ID_TAB;
		if (null !== $this->id_tab) {
			throw new PropelException('Cannot insert a value for auto-increment primary key (' . Oops_Db_TabPeer::ID_TAB . ')');
		}

		 // check the columns in natural order for more readable SQL queries
		if ($this->isColumnModified(Oops_Db_TabPeer::ID_TAB)) {
			$modifiedColumns[':p' . $index++]  = '`ID_TAB`';
		}
		if ($this->isColumnModified(Oops_Db_TabPeer::ID_PARENT)) {
			$modifiedColumns[':p' . $index++]  = '`ID_PARENT`';
		}
		if ($this->isColumnModified(Oops_Db_TabPeer::CLASS_NAME)) {
			$modifiedColumns[':p' . $index++]  = '`CLASS_NAME`';
		}
		if ($this->isColumnModified(Oops_Db_TabPeer::MODULE)) {
			$modifiedColumns[':p' . $index++]  = '`MODULE`';
		}
		if ($this->isColumnModified(Oops_Db_TabPeer::POSITION)) {
			$modifiedColumns[':p' . $index++]  = '`POSITION`';
		}

		$sql = sprintf(
			'INSERT INTO `' .  _DB_PREFIX_ . 'tab` (%s) VALUES (%s)',
			implode(', ', $modifiedColumns),
			implode(', ', array_keys($modifiedColumns))
		);

		try {
			$stmt = $con->prepare($sql);
			foreach ($modifiedColumns as $identifier => $columnName) {
				switch ($columnName) {
					case '`ID_TAB`':
						$stmt->bindValue($identifier, $this->id_tab, PDO::PARAM_INT);
						break;
					case '`ID_PARENT`':
						$stmt->bindValue($identifier, $this->id_parent, PDO::PARAM_INT);
						break;
					case '`CLASS_NAME`':
						$stmt->bindValue($identifier, $this->class_name, PDO::PARAM_STR);
						break;
					case '`MODULE`':
						$stmt->bindValue($identifier, $this->module, PDO::PARAM_STR);
						break;
					case '`POSITION`':
						$stmt->bindValue($identifier, $this->position, PDO::PARAM_INT);
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
		$this->setIdTab($pk);

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


			if (($retval = Oops_Db_TabPeer::doValidate($this, $columns)) !== true) {
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
		$pos = Oops_Db_TabPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getIdTab();
				break;
			case 1:
				return $this->getIdParent();
				break;
			case 2:
				return $this->getClassName();
				break;
			case 3:
				return $this->getModule();
				break;
			case 4:
				return $this->getPosition();
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
		if (isset($alreadyDumpedObjects['Oops_Db_Tab'][$this->getPrimaryKey()])) {
			return '*RECURSION*';
		}
		$alreadyDumpedObjects['Oops_Db_Tab'][$this->getPrimaryKey()] = true;
		$keys = Oops_Db_TabPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getIdTab(),
			$keys[1] => $this->getIdParent(),
			$keys[2] => $this->getClassName(),
			$keys[3] => $this->getModule(),
			$keys[4] => $this->getPosition(),
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
		$pos = Oops_Db_TabPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setIdTab($value);
				break;
			case 1:
				$this->setIdParent($value);
				break;
			case 2:
				$this->setClassName($value);
				break;
			case 3:
				$this->setModule($value);
				break;
			case 4:
				$this->setPosition($value);
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
		$keys = Oops_Db_TabPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setIdTab($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setIdParent($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setClassName($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setModule($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setPosition($arr[$keys[4]]);
	}

	/**
	 * Build a Criteria object containing the values of all modified columns in this object.
	 *
	 * @return     Criteria The Criteria object containing all modified values.
	 */
	public function buildCriteria()
	{
		$criteria = new Criteria(Oops_Db_TabPeer::DATABASE_NAME);

		if ($this->isColumnModified(Oops_Db_TabPeer::ID_TAB)) $criteria->add(Oops_Db_TabPeer::ID_TAB, $this->id_tab);
		if ($this->isColumnModified(Oops_Db_TabPeer::ID_PARENT)) $criteria->add(Oops_Db_TabPeer::ID_PARENT, $this->id_parent);
		if ($this->isColumnModified(Oops_Db_TabPeer::CLASS_NAME)) $criteria->add(Oops_Db_TabPeer::CLASS_NAME, $this->class_name);
		if ($this->isColumnModified(Oops_Db_TabPeer::MODULE)) $criteria->add(Oops_Db_TabPeer::MODULE, $this->module);
		if ($this->isColumnModified(Oops_Db_TabPeer::POSITION)) $criteria->add(Oops_Db_TabPeer::POSITION, $this->position);

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
		$criteria = new Criteria(Oops_Db_TabPeer::DATABASE_NAME);
		$criteria->add(Oops_Db_TabPeer::ID_TAB, $this->id_tab);

		return $criteria;
	}

	/**
	 * Returns the primary key for this object (row).
	 * @return     int
	 */
	public function getPrimaryKey()
	{
		return $this->getIdTab();
	}

	/**
	 * Generic method to set the primary key (id_tab column).
	 *
	 * @param      int $key Primary key.
	 * @return     void
	 */
	public function setPrimaryKey($key)
	{
		$this->setIdTab($key);
	}

	/**
	 * Returns true if the primary key for this object is null.
	 * @return     boolean
	 */
	public function isPrimaryKeyNull()
	{
		return null === $this->getIdTab();
	}

	/**
	 * Sets contents of passed object to values from current object.
	 *
	 * If desired, this method can also make copies of all associated (fkey referrers)
	 * objects.
	 *
	 * @param      object $copyObj An object of Oops_Db_Tab (or compatible) type.
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
	 * @throws     PropelException
	 */
	public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
	{
		$copyObj->setIdParent($this->getIdParent());
		$copyObj->setClassName($this->getClassName());
		$copyObj->setModule($this->getModule());
		$copyObj->setPosition($this->getPosition());
		if ($makeNew) {
			$copyObj->setNew(true);
			$copyObj->setIdTab(NULL); // this is a auto-increment column, so set to default value
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
	 * @return     Oops_Db_Tab Clone of current object.
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
	 * @return     Oops_Db_TabPeer
	 */
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new Oops_Db_TabPeer();
		}
		return self::$peer;
	}

	/**
	 * Clears the current object and sets all attributes to their default values
	 */
	public function clear()
	{
		$this->id_tab = null;
		$this->id_parent = null;
		$this->class_name = null;
		$this->module = null;
		$this->position = null;
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
		return (string) $this->exportTo(Oops_Db_TabPeer::DEFAULT_STRING_FORMAT);
	}

} // Oops_Db_Propel_Tab
