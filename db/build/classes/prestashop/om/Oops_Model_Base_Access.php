<?php


/**
 * Base class that represents a row from the 'djland_access' table.
 *
 * 
 *
 * @package    propel.generator.prestashop.om
 */
abstract class Oops_Model_Base_Access extends BaseObject  implements Persistent
{

	/**
	 * Peer class name
	 */
	const PEER = 'Oops_Model_AccessPeer';

	/**
	 * The Peer class.
	 * Instance provides a convenient way of calling static methods on a class
	 * that calling code may not be able to identify.
	 * @var        Oops_Model_AccessPeer
	 */
	protected static $peer;

	/**
	 * The value for the id_profile field.
	 * @var        int
	 */
	protected $id_profile;

	/**
	 * The value for the id_tab field.
	 * @var        int
	 */
	protected $id_tab;

	/**
	 * The value for the view field.
	 * @var        int
	 */
	protected $view;

	/**
	 * The value for the add field.
	 * @var        int
	 */
	protected $add;

	/**
	 * The value for the edit field.
	 * @var        int
	 */
	protected $edit;

	/**
	 * The value for the delete field.
	 * @var        int
	 */
	protected $delete;

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
	 * Get the [id_profile] column value.
	 * 
	 * @return     int
	 */
	public function getIdProfile()
	{
		return $this->id_profile;
	}

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
	 * Get the [view] column value.
	 * 
	 * @return     int
	 */
	public function getView()
	{
		return $this->view;
	}

	/**
	 * Get the [add] column value.
	 * 
	 * @return     int
	 */
	public function getAdd()
	{
		return $this->add;
	}

	/**
	 * Get the [edit] column value.
	 * 
	 * @return     int
	 */
	public function getEdit()
	{
		return $this->edit;
	}

	/**
	 * Get the [delete] column value.
	 * 
	 * @return     int
	 */
	public function getDelete()
	{
		return $this->delete;
	}

	/**
	 * Set the value of [id_profile] column.
	 * 
	 * @param      int $v new value
	 * @return     Oops_Model_Access The current object (for fluent API support)
	 */
	public function setIdProfile($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->id_profile !== $v) {
			$this->id_profile = $v;
			$this->modifiedColumns[] = Oops_Model_AccessPeer::ID_PROFILE;
		}

		return $this;
	} // setIdProfile()

	/**
	 * Set the value of [id_tab] column.
	 * 
	 * @param      int $v new value
	 * @return     Oops_Model_Access The current object (for fluent API support)
	 */
	public function setIdTab($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->id_tab !== $v) {
			$this->id_tab = $v;
			$this->modifiedColumns[] = Oops_Model_AccessPeer::ID_TAB;
		}

		return $this;
	} // setIdTab()

	/**
	 * Set the value of [view] column.
	 * 
	 * @param      int $v new value
	 * @return     Oops_Model_Access The current object (for fluent API support)
	 */
	public function setView($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->view !== $v) {
			$this->view = $v;
			$this->modifiedColumns[] = Oops_Model_AccessPeer::VIEW;
		}

		return $this;
	} // setView()

	/**
	 * Set the value of [add] column.
	 * 
	 * @param      int $v new value
	 * @return     Oops_Model_Access The current object (for fluent API support)
	 */
	public function setAdd($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->add !== $v) {
			$this->add = $v;
			$this->modifiedColumns[] = Oops_Model_AccessPeer::ADD;
		}

		return $this;
	} // setAdd()

	/**
	 * Set the value of [edit] column.
	 * 
	 * @param      int $v new value
	 * @return     Oops_Model_Access The current object (for fluent API support)
	 */
	public function setEdit($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->edit !== $v) {
			$this->edit = $v;
			$this->modifiedColumns[] = Oops_Model_AccessPeer::EDIT;
		}

		return $this;
	} // setEdit()

	/**
	 * Set the value of [delete] column.
	 * 
	 * @param      int $v new value
	 * @return     Oops_Model_Access The current object (for fluent API support)
	 */
	public function setDelete($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->delete !== $v) {
			$this->delete = $v;
			$this->modifiedColumns[] = Oops_Model_AccessPeer::DELETE;
		}

		return $this;
	} // setDelete()

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

			$this->id_profile = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
			$this->id_tab = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
			$this->view = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
			$this->add = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
			$this->edit = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
			$this->delete = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
			$this->resetModified();

			$this->setNew(false);

			if ($rehydrate) {
				$this->ensureConsistency();
			}

			return $startcol + 6; // 6 = Oops_Model_AccessPeer::NUM_HYDRATE_COLUMNS.

		} catch (Exception $e) {
			throw new PropelException("Error populating Oops_Model_Access object", $e);
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
			$con = Propel::getConnection(Oops_Model_AccessPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		// We don't need to alter the object instance pool; we're just modifying this instance
		// already in the pool.

		$stmt = Oops_Model_AccessPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
			$con = Propel::getConnection(Oops_Model_AccessPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$con->beginTransaction();
		try {
			$deleteQuery = Oops_Model_AccessQuery::create()
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
			$con = Propel::getConnection(Oops_Model_AccessPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
				Oops_Model_AccessPeer::addInstanceToPool($this);
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


		 // check the columns in natural order for more readable SQL queries
		if ($this->isColumnModified(Oops_Model_AccessPeer::ID_PROFILE)) {
			$modifiedColumns[':p' . $index++]  = '`ID_PROFILE`';
		}
		if ($this->isColumnModified(Oops_Model_AccessPeer::ID_TAB)) {
			$modifiedColumns[':p' . $index++]  = '`ID_TAB`';
		}
		if ($this->isColumnModified(Oops_Model_AccessPeer::VIEW)) {
			$modifiedColumns[':p' . $index++]  = '`VIEW`';
		}
		if ($this->isColumnModified(Oops_Model_AccessPeer::ADD)) {
			$modifiedColumns[':p' . $index++]  = '`ADD`';
		}
		if ($this->isColumnModified(Oops_Model_AccessPeer::EDIT)) {
			$modifiedColumns[':p' . $index++]  = '`EDIT`';
		}
		if ($this->isColumnModified(Oops_Model_AccessPeer::DELETE)) {
			$modifiedColumns[':p' . $index++]  = '`DELETE`';
		}

		$sql = sprintf(
			'INSERT INTO `' . _DB_PREFIX_ . 'djland_access` (%s) VALUES (%s)',
			implode(', ', $modifiedColumns),
			implode(', ', array_keys($modifiedColumns))
		);

		try {
			$stmt = $con->prepare($sql);
			foreach ($modifiedColumns as $identifier => $columnName) {
				switch ($columnName) {
					case '`ID_PROFILE`':
						$stmt->bindValue($identifier, $this->id_profile, PDO::PARAM_INT);
						break;
					case '`ID_TAB`':
						$stmt->bindValue($identifier, $this->id_tab, PDO::PARAM_INT);
						break;
					case '`VIEW`':
						$stmt->bindValue($identifier, $this->view, PDO::PARAM_INT);
						break;
					case '`ADD`':
						$stmt->bindValue($identifier, $this->add, PDO::PARAM_INT);
						break;
					case '`EDIT`':
						$stmt->bindValue($identifier, $this->edit, PDO::PARAM_INT);
						break;
					case '`DELETE`':
						$stmt->bindValue($identifier, $this->delete, PDO::PARAM_INT);
						break;
				}
			}
			$stmt->execute();
		} catch (Exception $e) {
			Propel::log($e->getMessage(), Propel::LOG_ERR);
			throw new PropelException(sprintf('Unable to execute INSERT statement [%s]', $sql), $e);
		}

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


			if (($retval = Oops_Model_AccessPeer::doValidate($this, $columns)) !== true) {
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
		$pos = Oops_Model_AccessPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getIdProfile();
				break;
			case 1:
				return $this->getIdTab();
				break;
			case 2:
				return $this->getView();
				break;
			case 3:
				return $this->getAdd();
				break;
			case 4:
				return $this->getEdit();
				break;
			case 5:
				return $this->getDelete();
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
		if (isset($alreadyDumpedObjects['Oops_Model_Access'][serialize($this->getPrimaryKey())])) {
			return '*RECURSION*';
		}
		$alreadyDumpedObjects['Oops_Model_Access'][serialize($this->getPrimaryKey())] = true;
		$keys = Oops_Model_AccessPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getIdProfile(),
			$keys[1] => $this->getIdTab(),
			$keys[2] => $this->getView(),
			$keys[3] => $this->getAdd(),
			$keys[4] => $this->getEdit(),
			$keys[5] => $this->getDelete(),
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
		$pos = Oops_Model_AccessPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setIdProfile($value);
				break;
			case 1:
				$this->setIdTab($value);
				break;
			case 2:
				$this->setView($value);
				break;
			case 3:
				$this->setAdd($value);
				break;
			case 4:
				$this->setEdit($value);
				break;
			case 5:
				$this->setDelete($value);
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
		$keys = Oops_Model_AccessPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setIdProfile($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setIdTab($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setView($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setAdd($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setEdit($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setDelete($arr[$keys[5]]);
	}

	/**
	 * Build a Criteria object containing the values of all modified columns in this object.
	 *
	 * @return     Criteria The Criteria object containing all modified values.
	 */
	public function buildCriteria()
	{
		$criteria = new Criteria(Oops_Model_AccessPeer::DATABASE_NAME);

		if ($this->isColumnModified(Oops_Model_AccessPeer::ID_PROFILE)) $criteria->add(Oops_Model_AccessPeer::ID_PROFILE, $this->id_profile);
		if ($this->isColumnModified(Oops_Model_AccessPeer::ID_TAB)) $criteria->add(Oops_Model_AccessPeer::ID_TAB, $this->id_tab);
		if ($this->isColumnModified(Oops_Model_AccessPeer::VIEW)) $criteria->add(Oops_Model_AccessPeer::VIEW, $this->view);
		if ($this->isColumnModified(Oops_Model_AccessPeer::ADD)) $criteria->add(Oops_Model_AccessPeer::ADD, $this->add);
		if ($this->isColumnModified(Oops_Model_AccessPeer::EDIT)) $criteria->add(Oops_Model_AccessPeer::EDIT, $this->edit);
		if ($this->isColumnModified(Oops_Model_AccessPeer::DELETE)) $criteria->add(Oops_Model_AccessPeer::DELETE, $this->delete);

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
		$criteria = new Criteria(Oops_Model_AccessPeer::DATABASE_NAME);
		$criteria->add(Oops_Model_AccessPeer::ID_PROFILE, $this->id_profile);
		$criteria->add(Oops_Model_AccessPeer::ID_TAB, $this->id_tab);

		return $criteria;
	}

	/**
	 * Returns the composite primary key for this object.
	 * The array elements will be in same order as specified in XML.
	 * @return     array
	 */
	public function getPrimaryKey()
	{
		$pks = array();
		$pks[0] = $this->getIdProfile();
		$pks[1] = $this->getIdTab();

		return $pks;
	}

	/**
	 * Set the [composite] primary key.
	 *
	 * @param      array $keys The elements of the composite key (order must match the order in XML file).
	 * @return     void
	 */
	public function setPrimaryKey($keys)
	{
		$this->setIdProfile($keys[0]);
		$this->setIdTab($keys[1]);
	}

	/**
	 * Returns true if the primary key for this object is null.
	 * @return     boolean
	 */
	public function isPrimaryKeyNull()
	{
		return (null === $this->getIdProfile()) && (null === $this->getIdTab());
	}

	/**
	 * Sets contents of passed object to values from current object.
	 *
	 * If desired, this method can also make copies of all associated (fkey referrers)
	 * objects.
	 *
	 * @param      object $copyObj An object of Oops_Model_Access (or compatible) type.
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
	 * @throws     PropelException
	 */
	public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
	{
		$copyObj->setIdProfile($this->getIdProfile());
		$copyObj->setIdTab($this->getIdTab());
		$copyObj->setView($this->getView());
		$copyObj->setAdd($this->getAdd());
		$copyObj->setEdit($this->getEdit());
		$copyObj->setDelete($this->getDelete());
		if ($makeNew) {
			$copyObj->setNew(true);
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
	 * @return     Oops_Model_Access Clone of current object.
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
	 * @return     Oops_Model_AccessPeer
	 */
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new Oops_Model_AccessPeer();
		}
		return self::$peer;
	}

	/**
	 * Clears the current object and sets all attributes to their default values
	 */
	public function clear()
	{
		$this->id_profile = null;
		$this->id_tab = null;
		$this->view = null;
		$this->add = null;
		$this->edit = null;
		$this->delete = null;
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
		return (string) $this->exportTo(Oops_Model_AccessPeer::DEFAULT_STRING_FORMAT);
	}

} // Oops_Model_Base_Access
