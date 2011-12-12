<?php


/**
 * Base class that represents a row from the 'feature_value' table.
 *
 * 
 *
 * @package    propel.generator.prestashop.om
 */
abstract class Oops_Db_Propel_FeatureValue extends BaseObject  implements Persistent
{

	/**
	 * Peer class name
	 */
	const PEER = 'Oops_Db_FeatureValuePeer';

	/**
	 * The Peer class.
	 * Instance provides a convenient way of calling static methods on a class
	 * that calling code may not be able to identify.
	 * @var        Oops_Db_FeatureValuePeer
	 */
	protected static $peer;

	/**
	 * The value for the id_feature_value field.
	 * @var        int
	 */
	protected $id_feature_value;

	/**
	 * The value for the id_feature field.
	 * @var        int
	 */
	protected $id_feature;

	/**
	 * The value for the custom field.
	 * @var        int
	 */
	protected $custom;

	/**
	 * @var        Feature
	 */
	protected $aFeature;

	/**
	 * @var        FeatureProduct
	 */
	protected $aFeatureProduct;

	/**
	 * @var        array Oops_Db_FeatureValueLang[] Collection to store aggregation of Oops_Db_FeatureValueLang objects.
	 */
	protected $collFeatureValueLangs;

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

	// i18n behavior
	
	/**
	 * Current locale
	 * @var        string
	 */
	protected $currentLocale = '1';
	
	/**
	 * Current translation objects
	 * @var        array[Oops_Db_FeatureValueLang]
	 */
	protected $currentTranslations;

	/**
	 * An array of objects scheduled for deletion.
	 * @var		array
	 */
	protected $featureValueLangsScheduledForDeletion = null;

	/**
	 * Get the [id_feature_value] column value.
	 * 
	 * @return     int
	 */
	public function getIdFeatureValue()
	{
		return $this->id_feature_value;
	}

	/**
	 * Get the [id_feature] column value.
	 * 
	 * @return     int
	 */
	public function getIdFeature()
	{
		return $this->id_feature;
	}

	/**
	 * Get the [custom] column value.
	 * 
	 * @return     int
	 */
	public function getCustom()
	{
		return $this->custom;
	}

	/**
	 * Set the value of [id_feature_value] column.
	 * 
	 * @param      int $v new value
	 * @return     Oops_Db_FeatureValue The current object (for fluent API support)
	 */
	public function setIdFeatureValue($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->id_feature_value !== $v) {
			$this->id_feature_value = $v;
			$this->modifiedColumns[] = Oops_Db_FeatureValuePeer::ID_FEATURE_VALUE;
		}

		if ($this->aFeatureProduct !== null && $this->aFeatureProduct->getIdFeatureValue() !== $v) {
			$this->aFeatureProduct = null;
		}

		return $this;
	} // setIdFeatureValue()

	/**
	 * Set the value of [id_feature] column.
	 * 
	 * @param      int $v new value
	 * @return     Oops_Db_FeatureValue The current object (for fluent API support)
	 */
	public function setIdFeature($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->id_feature !== $v) {
			$this->id_feature = $v;
			$this->modifiedColumns[] = Oops_Db_FeatureValuePeer::ID_FEATURE;
		}

		if ($this->aFeature !== null && $this->aFeature->getIdFeature() !== $v) {
			$this->aFeature = null;
		}

		return $this;
	} // setIdFeature()

	/**
	 * Set the value of [custom] column.
	 * 
	 * @param      int $v new value
	 * @return     Oops_Db_FeatureValue The current object (for fluent API support)
	 */
	public function setCustom($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->custom !== $v) {
			$this->custom = $v;
			$this->modifiedColumns[] = Oops_Db_FeatureValuePeer::CUSTOM;
		}

		return $this;
	} // setCustom()

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

			$this->id_feature_value = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
			$this->id_feature = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
			$this->custom = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
			$this->resetModified();

			$this->setNew(false);

			if ($rehydrate) {
				$this->ensureConsistency();
			}

			return $startcol + 3; // 3 = Oops_Db_FeatureValuePeer::NUM_HYDRATE_COLUMNS.

		} catch (Exception $e) {
			throw new PropelException("Error populating Oops_Db_FeatureValue object", $e);
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

		if ($this->aFeatureProduct !== null && $this->id_feature_value !== $this->aFeatureProduct->getIdFeatureValue()) {
			$this->aFeatureProduct = null;
		}
		if ($this->aFeature !== null && $this->id_feature !== $this->aFeature->getIdFeature()) {
			$this->aFeature = null;
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
			$con = Propel::getConnection(Oops_Db_FeatureValuePeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		// We don't need to alter the object instance pool; we're just modifying this instance
		// already in the pool.

		$stmt = Oops_Db_FeatureValuePeer::doSelectStmt($this->buildPkeyCriteria(), $con);
		$row = $stmt->fetch(PDO::FETCH_NUM);
		$stmt->closeCursor();
		if (!$row) {
			throw new PropelException('Cannot find matching row in the database to reload object values.');
		}
		$this->hydrate($row, 0, true); // rehydrate

		if ($deep) {  // also de-associate any related objects?

			$this->aFeature = null;
			$this->aFeatureProduct = null;
			$this->collFeatureValueLangs = null;

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
			$con = Propel::getConnection(Oops_Db_FeatureValuePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$con->beginTransaction();
		try {
			$deleteQuery = Oops_Db_FeatureValueQuery::create()
				->filterByPrimaryKey($this->getPrimaryKey());
			$ret = $this->preDelete($con);
			if ($ret) {
				$deleteQuery->delete($con);
				$this->postDelete($con);
				// i18n behavior
				
				// emulate delete cascade
				Oops_Db_FeatureValueLangQuery::create()
					->filterByOops_Db_FeatureValue($this)
					->delete($con);
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
			$con = Propel::getConnection(Oops_Db_FeatureValuePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
				Oops_Db_FeatureValuePeer::addInstanceToPool($this);
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

			if ($this->aFeature !== null) {
				if ($this->aFeature->isModified() || $this->aFeature->isNew()) {
					$affectedRows += $this->aFeature->save($con);
				}
				$this->setFeature($this->aFeature);
			}

			if ($this->aFeatureProduct !== null) {
				if ($this->aFeatureProduct->isModified() || $this->aFeatureProduct->isNew()) {
					$affectedRows += $this->aFeatureProduct->save($con);
				}
				$this->setFeatureProduct($this->aFeatureProduct);
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

			if ($this->featureValueLangsScheduledForDeletion !== null) {
				if (!$this->featureValueLangsScheduledForDeletion->isEmpty()) {
					Oops_Db_FeatureValueLangQuery::create()
						->filterByPrimaryKeys($this->featureValueLangsScheduledForDeletion->getPrimaryKeys(false))
						->delete($con);
					$this->featureValueLangsScheduledForDeletion = null;
				}
			}

			if ($this->collFeatureValueLangs !== null) {
				foreach ($this->collFeatureValueLangs as $referrerFK) {
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

		$this->modifiedColumns[] = Oops_Db_FeatureValuePeer::ID_FEATURE_VALUE;
		if (null !== $this->id_feature_value) {
			throw new PropelException('Cannot insert a value for auto-increment primary key (' . Oops_Db_FeatureValuePeer::ID_FEATURE_VALUE . ')');
		}

		 // check the columns in natural order for more readable SQL queries
		if ($this->isColumnModified(Oops_Db_FeatureValuePeer::ID_FEATURE_VALUE)) {
			$modifiedColumns[':p' . $index++]  = '`ID_FEATURE_VALUE`';
		}
		if ($this->isColumnModified(Oops_Db_FeatureValuePeer::ID_FEATURE)) {
			$modifiedColumns[':p' . $index++]  = '`ID_FEATURE`';
		}
		if ($this->isColumnModified(Oops_Db_FeatureValuePeer::CUSTOM)) {
			$modifiedColumns[':p' . $index++]  = '`CUSTOM`';
		}

		$sql = sprintf(
			'INSERT INTO `' .  _DB_PREFIX_ . 'feature_value` (%s) VALUES (%s)',
			implode(', ', $modifiedColumns),
			implode(', ', array_keys($modifiedColumns))
		);

		try {
			$stmt = $con->prepare($sql);
			foreach ($modifiedColumns as $identifier => $columnName) {
				switch ($columnName) {
					case '`ID_FEATURE_VALUE`':
						$stmt->bindValue($identifier, $this->id_feature_value, PDO::PARAM_INT);
						break;
					case '`ID_FEATURE`':
						$stmt->bindValue($identifier, $this->id_feature, PDO::PARAM_INT);
						break;
					case '`CUSTOM`':
						$stmt->bindValue($identifier, $this->custom, PDO::PARAM_INT);
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
		$this->setIdFeatureValue($pk);

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

			if ($this->aFeature !== null) {
				if (!$this->aFeature->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aFeature->getValidationFailures());
				}
			}

			if ($this->aFeatureProduct !== null) {
				if (!$this->aFeatureProduct->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aFeatureProduct->getValidationFailures());
				}
			}


			if (($retval = Oops_Db_FeatureValuePeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}


				if ($this->collFeatureValueLangs !== null) {
					foreach ($this->collFeatureValueLangs as $referrerFK) {
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
		$pos = Oops_Db_FeatureValuePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getIdFeatureValue();
				break;
			case 1:
				return $this->getIdFeature();
				break;
			case 2:
				return $this->getCustom();
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
		if (isset($alreadyDumpedObjects['Oops_Db_FeatureValue'][$this->getPrimaryKey()])) {
			return '*RECURSION*';
		}
		$alreadyDumpedObjects['Oops_Db_FeatureValue'][$this->getPrimaryKey()] = true;
		$keys = Oops_Db_FeatureValuePeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getIdFeatureValue(),
			$keys[1] => $this->getIdFeature(),
			$keys[2] => $this->getCustom(),
		);
		if ($includeForeignObjects) {
			if (null !== $this->aFeature) {
				$result['Feature'] = $this->aFeature->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
			}
			if (null !== $this->aFeatureProduct) {
				$result['FeatureProduct'] = $this->aFeatureProduct->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
			}
			if (null !== $this->collFeatureValueLangs) {
				$result['FeatureValueLangs'] = $this->collFeatureValueLangs->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
		$pos = Oops_Db_FeatureValuePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setIdFeatureValue($value);
				break;
			case 1:
				$this->setIdFeature($value);
				break;
			case 2:
				$this->setCustom($value);
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
		$keys = Oops_Db_FeatureValuePeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setIdFeatureValue($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setIdFeature($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setCustom($arr[$keys[2]]);
	}

	/**
	 * Build a Criteria object containing the values of all modified columns in this object.
	 *
	 * @return     Criteria The Criteria object containing all modified values.
	 */
	public function buildCriteria()
	{
		$criteria = new Criteria(Oops_Db_FeatureValuePeer::DATABASE_NAME);

		if ($this->isColumnModified(Oops_Db_FeatureValuePeer::ID_FEATURE_VALUE)) $criteria->add(Oops_Db_FeatureValuePeer::ID_FEATURE_VALUE, $this->id_feature_value);
		if ($this->isColumnModified(Oops_Db_FeatureValuePeer::ID_FEATURE)) $criteria->add(Oops_Db_FeatureValuePeer::ID_FEATURE, $this->id_feature);
		if ($this->isColumnModified(Oops_Db_FeatureValuePeer::CUSTOM)) $criteria->add(Oops_Db_FeatureValuePeer::CUSTOM, $this->custom);

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
		$criteria = new Criteria(Oops_Db_FeatureValuePeer::DATABASE_NAME);
		$criteria->add(Oops_Db_FeatureValuePeer::ID_FEATURE_VALUE, $this->id_feature_value);

		return $criteria;
	}

	/**
	 * Returns the primary key for this object (row).
	 * @return     int
	 */
	public function getPrimaryKey()
	{
		return $this->getIdFeatureValue();
	}

	/**
	 * Generic method to set the primary key (id_feature_value column).
	 *
	 * @param      int $key Primary key.
	 * @return     void
	 */
	public function setPrimaryKey($key)
	{
		$this->setIdFeatureValue($key);
	}

	/**
	 * Returns true if the primary key for this object is null.
	 * @return     boolean
	 */
	public function isPrimaryKeyNull()
	{
		return null === $this->getIdFeatureValue();
	}

	/**
	 * Sets contents of passed object to values from current object.
	 *
	 * If desired, this method can also make copies of all associated (fkey referrers)
	 * objects.
	 *
	 * @param      object $copyObj An object of Oops_Db_FeatureValue (or compatible) type.
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
	 * @throws     PropelException
	 */
	public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
	{
		$copyObj->setIdFeature($this->getIdFeature());
		$copyObj->setCustom($this->getCustom());

		if ($deepCopy) {
			// important: temporarily setNew(false) because this affects the behavior of
			// the getter/setter methods for fkey referrer objects.
			$copyObj->setNew(false);

			foreach ($this->getFeatureValueLangs() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addFeatureValueLang($relObj->copy($deepCopy));
				}
			}

		} // if ($deepCopy)

		if ($makeNew) {
			$copyObj->setNew(true);
			$copyObj->setIdFeatureValue(NULL); // this is a auto-increment column, so set to default value
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
	 * @return     Oops_Db_FeatureValue Clone of current object.
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
	 * @return     Oops_Db_FeatureValuePeer
	 */
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new Oops_Db_FeatureValuePeer();
		}
		return self::$peer;
	}

	/**
	 * Declares an association between this object and a Oops_Db_Feature object.
	 *
	 * @param      Oops_Db_Feature $v
	 * @return     Oops_Db_FeatureValue The current object (for fluent API support)
	 * @throws     PropelException
	 */
	public function setFeature(Oops_Db_Feature $v = null)
	{
		if ($v === null) {
			$this->setIdFeature(NULL);
		} else {
			$this->setIdFeature($v->getIdFeature());
		}

		$this->aFeature = $v;

		// Add binding for other direction of this n:n relationship.
		// If this object has already been added to the Oops_Db_Feature object, it will not be re-added.
		if ($v !== null) {
			$v->addFeatureValue($this);
		}

		return $this;
	}


	/**
	 * Get the associated Oops_Db_Feature object
	 *
	 * @param      PropelPDO Optional Connection object.
	 * @return     Oops_Db_Feature The associated Oops_Db_Feature object.
	 * @throws     PropelException
	 */
	public function getFeature(PropelPDO $con = null)
	{
		if ($this->aFeature === null && ($this->id_feature !== null)) {
			$this->aFeature = Oops_Db_FeatureQuery::create()->findPk($this->id_feature, $con);
			/* The following can be used additionally to
				guarantee the related object contains a reference
				to this object.  This level of coupling may, however, be
				undesirable since it could result in an only partially populated collection
				in the referenced object.
				$this->aFeature->addFeatureValues($this);
			 */
		}
		return $this->aFeature;
	}

	/**
	 * Declares an association between this object and a Oops_Db_FeatureProduct object.
	 *
	 * @param      Oops_Db_FeatureProduct $v
	 * @return     Oops_Db_FeatureValue The current object (for fluent API support)
	 * @throws     PropelException
	 */
	public function setFeatureProduct(Oops_Db_FeatureProduct $v = null)
	{
		if ($v === null) {
			$this->setIdFeatureValue(NULL);
		} else {
			$this->setIdFeatureValue($v->getIdFeatureValue());
		}

		$this->aFeatureProduct = $v;

		// Add binding for other direction of this 1:1 relationship.
		if ($v !== null) {
			$v->setFeatureValue($this);
		}

		return $this;
	}


	/**
	 * Get the associated Oops_Db_FeatureProduct object
	 *
	 * @param      PropelPDO Optional Connection object.
	 * @return     Oops_Db_FeatureProduct The associated Oops_Db_FeatureProduct object.
	 * @throws     PropelException
	 */
	public function getFeatureProduct(PropelPDO $con = null)
	{
		if ($this->aFeatureProduct === null && ($this->id_feature_value !== null)) {
			$this->aFeatureProduct = Oops_Db_FeatureProductQuery::create()
				->filterByFeatureValue($this) // here
				->findOne($con);
			// Because this foreign key represents a one-to-one relationship, we will create a bi-directional association.
			$this->aFeatureProduct->setFeatureValue($this);
		}
		return $this->aFeatureProduct;
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
		if ('FeatureValueLang' == $relationName) {
			return $this->initFeatureValueLangs();
		}
	}

	/**
	 * Clears out the collFeatureValueLangs collection
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addFeatureValueLangs()
	 */
	public function clearFeatureValueLangs()
	{
		$this->collFeatureValueLangs = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collFeatureValueLangs collection.
	 *
	 * By default this just sets the collFeatureValueLangs collection to an empty array (like clearcollFeatureValueLangs());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @param      boolean $overrideExisting If set to true, the method call initializes
	 *                                        the collection even if it is not empty
	 *
	 * @return     void
	 */
	public function initFeatureValueLangs($overrideExisting = true)
	{
		if (null !== $this->collFeatureValueLangs && !$overrideExisting) {
			return;
		}
		$this->collFeatureValueLangs = new PropelObjectCollection();
		$this->collFeatureValueLangs->setModel('Oops_Db_FeatureValueLang');
	}

	/**
	 * Gets an array of Oops_Db_FeatureValueLang objects which contain a foreign key that references this object.
	 *
	 * If the $criteria is not null, it is used to always fetch the results from the database.
	 * Otherwise the results are fetched from the database the first time, then cached.
	 * Next time the same method is called without $criteria, the cached collection is returned.
	 * If this Oops_Db_FeatureValue is new, it will return
	 * an empty collection or the current collection; the criteria is ignored on a new object.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @return     PropelCollection|array Oops_Db_FeatureValueLang[] List of Oops_Db_FeatureValueLang objects
	 * @throws     PropelException
	 */
	public function getFeatureValueLangs($criteria = null, PropelPDO $con = null)
	{
		if(null === $this->collFeatureValueLangs || null !== $criteria) {
			if ($this->isNew() && null === $this->collFeatureValueLangs) {
				// return empty collection
				$this->initFeatureValueLangs();
			} else {
				$collFeatureValueLangs = Oops_Db_FeatureValueLangQuery::create(null, $criteria)
					->filterByFeatureValue($this)
					->find($con);
				if (null !== $criteria) {
					return $collFeatureValueLangs;
				}
				$this->collFeatureValueLangs = $collFeatureValueLangs;
			}
		}
		return $this->collFeatureValueLangs;
	}

	/**
	 * Sets a collection of FeatureValueLang objects related by a one-to-many relationship
	 * to the current object.
	 * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
	 * and new objects from the given Propel collection.
	 *
	 * @param      PropelCollection $featureValueLangs A Propel collection.
	 * @param      PropelPDO $con Optional connection object
	 */
	public function setFeatureValueLangs(PropelCollection $featureValueLangs, PropelPDO $con = null)
	{
		$this->featureValueLangsScheduledForDeletion = $this->getFeatureValueLangs(new Criteria(), $con)->diff($featureValueLangs);

		foreach ($featureValueLangs as $featureValueLang) {
			// Fix issue with collection modified by reference
			if ($featureValueLang->isNew()) {
				$featureValueLang->setFeatureValue($this);
			}
			$this->addFeatureValueLang($featureValueLang);
		}

		$this->collFeatureValueLangs = $featureValueLangs;
	}

	/**
	 * Returns the number of related Oops_Db_FeatureValueLang objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related Oops_Db_FeatureValueLang objects.
	 * @throws     PropelException
	 */
	public function countFeatureValueLangs(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if(null === $this->collFeatureValueLangs || null !== $criteria) {
			if ($this->isNew() && null === $this->collFeatureValueLangs) {
				return 0;
			} else {
				$query = Oops_Db_FeatureValueLangQuery::create(null, $criteria);
				if($distinct) {
					$query->distinct();
				}
				return $query
					->filterByFeatureValue($this)
					->count($con);
			}
		} else {
			return count($this->collFeatureValueLangs);
		}
	}

	/**
	 * Method called to associate a Oops_Db_FeatureValueLang object to this object
	 * through the Oops_Db_FeatureValueLang foreign key attribute.
	 *
	 * @param      Oops_Db_FeatureValueLang $l Oops_Db_FeatureValueLang
	 * @return     Oops_Db_FeatureValue The current object (for fluent API support)
	 */
	public function addFeatureValueLang(Oops_Db_FeatureValueLang $l)
	{
		if ($this->collFeatureValueLangs === null) {
			$this->initFeatureValueLangs();
		}
		if (!$this->collFeatureValueLangs->contains($l)) { // only add it if the **same** object is not already associated
			$this->doAddFeatureValueLang($l);
		}

		return $this;
	}

	/**
	 * @param	FeatureValueLang $featureValueLang The featureValueLang object to add.
	 */
	protected function doAddFeatureValueLang($featureValueLang)
	{
		$this->collFeatureValueLangs[]= $featureValueLang;
		$featureValueLang->setFeatureValue($this);
	}

	/**
	 * Clears the current object and sets all attributes to their default values
	 */
	public function clear()
	{
		$this->id_feature_value = null;
		$this->id_feature = null;
		$this->custom = null;
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
			if ($this->collFeatureValueLangs) {
				foreach ($this->collFeatureValueLangs as $o) {
					$o->clearAllReferences($deep);
				}
			}
		} // if ($deep)

		// i18n behavior
		$this->currentLocale = '1';
		$this->currentTranslations = null;
		if ($this->collFeatureValueLangs instanceof PropelCollection) {
			$this->collFeatureValueLangs->clearIterator();
		}
		$this->collFeatureValueLangs = null;
		$this->aFeature = null;
		$this->aFeatureProduct = null;
	}

	/**
	 * Return the string representation of this object
	 *
	 * @return string
	 */
	public function __toString()
	{
		return (string) $this->exportTo(Oops_Db_FeatureValuePeer::DEFAULT_STRING_FORMAT);
	}

	// i18n behavior
	
	/**
	 * Sets the locale for translations
	 *
	 * @param     string $locale Locale to use for the translation, e.g. 'fr_FR'
	 *
	 * @return    Oops_Db_FeatureValue The current object (for fluent API support)
	 */
	public function setLocale($locale = '1')
	{
		$this->currentLocale = $locale;
	
		return $this;
	}
	
	/**
	 * Gets the locale for translations
	 *
	 * @return    string $locale Locale to use for the translation, e.g. 'fr_FR'
	 */
	public function getLocale()
	{
		return $this->currentLocale;
	}
	
	/**
	 * Returns the current translation for a given locale
	 *
	 * @param     string $locale Locale to use for the translation, e.g. 'fr_FR'
	 * @param     PropelPDO $con an optional connection object
	 *
	 * @return Oops_Db_FeatureValueLang */
	public function getTranslation($locale = '1', PropelPDO $con = null)
	{
		if (!isset($this->currentTranslations[$locale])) {
			if (null !== $this->collFeatureValueLangs) {
				foreach ($this->collFeatureValueLangs as $translation) {
					if ($translation->getIdLang() == $locale) {
						$this->currentTranslations[$locale] = $translation;
						return $translation;
					}
				}
			}
			if ($this->isNew()) {
				$translation = new Oops_Db_FeatureValueLang();
				$translation->setIdLang($locale);
			} else {
				$translation = Oops_Db_FeatureValueLangQuery::create()
					->filterByPrimaryKey(array($this->getPrimaryKey(), $locale))
					->findOneOrCreate($con);
				$this->currentTranslations[$locale] = $translation;
			}
			$this->addFeatureValueLang($translation);
		}
	
		return $this->currentTranslations[$locale];
	}
	
	/**
	 * Remove the translation for a given locale
	 *
	 * @param     string $locale Locale to use for the translation, e.g. 'fr_FR'
	 * @param     PropelPDO $con an optional connection object
	 *
	 * @return    Oops_Db_FeatureValue The current object (for fluent API support)
	 */
	public function removeTranslation($locale = '1', PropelPDO $con = null)
	{
		if (!$this->isNew()) {
			Oops_Db_FeatureValueLangQuery::create()
				->filterByPrimaryKey(array($this->getPrimaryKey(), $locale))
				->delete($con);
		}
		if (isset($this->currentTranslations[$locale])) {
			unset($this->currentTranslations[$locale]);
		}
		foreach ($this->collFeatureValueLangs as $key => $translation) {
			if ($translation->getIdLang() == $locale) {
				unset($this->collFeatureValueLangs[$key]);
				break;
			}
		}
	
		return $this;
	}
	
	/**
	 * Returns the current translation
	 *
	 * @param     PropelPDO $con an optional connection object
	 *
	 * @return Oops_Db_FeatureValueLang */
	public function getCurrentTranslation(PropelPDO $con = null)
	{
		return $this->getTranslation($this->getLocale(), $con);
	}
	
	
	/**
	 * Get the [value] column value.
	 * 
	 * @return     string
	 */
	public function getValue()
	{	return $this->getCurrentTranslation()->getValue();
	}
	
	
	/**
	 * Set the value of [value] column.
	 * 
	 * @param      string $v new value
	 * @return     Oops_Db_FeatureValue The current object (for fluent API support)
	 */
	public function setValue($v)
	{	$this->getCurrentTranslation()->setValue($v);
	
		return $this;
	}

} // Oops_Db_Propel_FeatureValue
