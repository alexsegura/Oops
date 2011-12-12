<?php


/**
 * Base class that represents a row from the 'feature_product' table.
 *
 * 
 *
 * @package    propel.generator.prestashop.om
 */
abstract class Oops_Db_Propel_FeatureProduct extends BaseObject  implements Persistent
{

	/**
	 * Peer class name
	 */
	const PEER = 'Oops_Db_FeatureProductPeer';

	/**
	 * The Peer class.
	 * Instance provides a convenient way of calling static methods on a class
	 * that calling code may not be able to identify.
	 * @var        Oops_Db_FeatureProductPeer
	 */
	protected static $peer;

	/**
	 * The value for the id_feature field.
	 * @var        int
	 */
	protected $id_feature;

	/**
	 * The value for the id_product field.
	 * @var        int
	 */
	protected $id_product;

	/**
	 * The value for the id_feature_value field.
	 * @var        int
	 */
	protected $id_feature_value;

	/**
	 * @var        Product
	 */
	protected $aProduct;

	/**
	 * @var        Feature
	 */
	protected $aFeature;

	/**
	 * @var        Oops_Db_FeatureValue one-to-one related Oops_Db_FeatureValue object
	 */
	protected $singleFeatureValue;

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
	protected $featureValuesScheduledForDeletion = null;

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
	 * Get the [id_product] column value.
	 * 
	 * @return     int
	 */
	public function getIdProduct()
	{
		return $this->id_product;
	}

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
	 * Set the value of [id_feature] column.
	 * 
	 * @param      int $v new value
	 * @return     Oops_Db_FeatureProduct The current object (for fluent API support)
	 */
	public function setIdFeature($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->id_feature !== $v) {
			$this->id_feature = $v;
			$this->modifiedColumns[] = Oops_Db_FeatureProductPeer::ID_FEATURE;
		}

		if ($this->aFeature !== null && $this->aFeature->getIdFeature() !== $v) {
			$this->aFeature = null;
		}

		return $this;
	} // setIdFeature()

	/**
	 * Set the value of [id_product] column.
	 * 
	 * @param      int $v new value
	 * @return     Oops_Db_FeatureProduct The current object (for fluent API support)
	 */
	public function setIdProduct($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->id_product !== $v) {
			$this->id_product = $v;
			$this->modifiedColumns[] = Oops_Db_FeatureProductPeer::ID_PRODUCT;
		}

		if ($this->aProduct !== null && $this->aProduct->getIdProduct() !== $v) {
			$this->aProduct = null;
		}

		return $this;
	} // setIdProduct()

	/**
	 * Set the value of [id_feature_value] column.
	 * 
	 * @param      int $v new value
	 * @return     Oops_Db_FeatureProduct The current object (for fluent API support)
	 */
	public function setIdFeatureValue($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->id_feature_value !== $v) {
			$this->id_feature_value = $v;
			$this->modifiedColumns[] = Oops_Db_FeatureProductPeer::ID_FEATURE_VALUE;
		}

		return $this;
	} // setIdFeatureValue()

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

			$this->id_feature = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
			$this->id_product = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
			$this->id_feature_value = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
			$this->resetModified();

			$this->setNew(false);

			if ($rehydrate) {
				$this->ensureConsistency();
			}

			return $startcol + 3; // 3 = Oops_Db_FeatureProductPeer::NUM_HYDRATE_COLUMNS.

		} catch (Exception $e) {
			throw new PropelException("Error populating Oops_Db_FeatureProduct object", $e);
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

		if ($this->aFeature !== null && $this->id_feature !== $this->aFeature->getIdFeature()) {
			$this->aFeature = null;
		}
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
			$con = Propel::getConnection(Oops_Db_FeatureProductPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		// We don't need to alter the object instance pool; we're just modifying this instance
		// already in the pool.

		$stmt = Oops_Db_FeatureProductPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
		$row = $stmt->fetch(PDO::FETCH_NUM);
		$stmt->closeCursor();
		if (!$row) {
			throw new PropelException('Cannot find matching row in the database to reload object values.');
		}
		$this->hydrate($row, 0, true); // rehydrate

		if ($deep) {  // also de-associate any related objects?

			$this->aProduct = null;
			$this->aFeature = null;
			$this->singleFeatureValue = null;

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
			$con = Propel::getConnection(Oops_Db_FeatureProductPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$con->beginTransaction();
		try {
			$deleteQuery = Oops_Db_FeatureProductQuery::create()
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
			$con = Propel::getConnection(Oops_Db_FeatureProductPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
				Oops_Db_FeatureProductPeer::addInstanceToPool($this);
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

			if ($this->aFeature !== null) {
				if ($this->aFeature->isModified() || $this->aFeature->isNew()) {
					$affectedRows += $this->aFeature->save($con);
				}
				$this->setFeature($this->aFeature);
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

			if ($this->featureValuesScheduledForDeletion !== null) {
				if (!$this->featureValuesScheduledForDeletion->isEmpty()) {
					Oops_Db_FeatureValueQuery::create()
						->filterByPrimaryKeys($this->featureValuesScheduledForDeletion->getPrimaryKeys(false))
						->delete($con);
					$this->featureValuesScheduledForDeletion = null;
				}
			}

			if ($this->singleFeatureValue !== null) {
				if (!$this->singleFeatureValue->isDeleted()) {
						$affectedRows += $this->singleFeatureValue->save($con);
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


		 // check the columns in natural order for more readable SQL queries
		if ($this->isColumnModified(Oops_Db_FeatureProductPeer::ID_FEATURE)) {
			$modifiedColumns[':p' . $index++]  = '`ID_FEATURE`';
		}
		if ($this->isColumnModified(Oops_Db_FeatureProductPeer::ID_PRODUCT)) {
			$modifiedColumns[':p' . $index++]  = '`ID_PRODUCT`';
		}
		if ($this->isColumnModified(Oops_Db_FeatureProductPeer::ID_FEATURE_VALUE)) {
			$modifiedColumns[':p' . $index++]  = '`ID_FEATURE_VALUE`';
		}

		$sql = sprintf(
			'INSERT INTO `' .  _DB_PREFIX_ . 'feature_product` (%s) VALUES (%s)',
			implode(', ', $modifiedColumns),
			implode(', ', array_keys($modifiedColumns))
		);

		try {
			$stmt = $con->prepare($sql);
			foreach ($modifiedColumns as $identifier => $columnName) {
				switch ($columnName) {
					case '`ID_FEATURE`':
						$stmt->bindValue($identifier, $this->id_feature, PDO::PARAM_INT);
						break;
					case '`ID_PRODUCT`':
						$stmt->bindValue($identifier, $this->id_product, PDO::PARAM_INT);
						break;
					case '`ID_FEATURE_VALUE`':
						$stmt->bindValue($identifier, $this->id_feature_value, PDO::PARAM_INT);
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


			// We call the validate method on the following object(s) if they
			// were passed to this object by their coresponding set
			// method.  This object relates to these object(s) by a
			// foreign key reference.

			if ($this->aProduct !== null) {
				if (!$this->aProduct->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aProduct->getValidationFailures());
				}
			}

			if ($this->aFeature !== null) {
				if (!$this->aFeature->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aFeature->getValidationFailures());
				}
			}


			if (($retval = Oops_Db_FeatureProductPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}


				if ($this->singleFeatureValue !== null) {
					if (!$this->singleFeatureValue->validate($columns)) {
						$failureMap = array_merge($failureMap, $this->singleFeatureValue->getValidationFailures());
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
		$pos = Oops_Db_FeatureProductPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getIdFeature();
				break;
			case 1:
				return $this->getIdProduct();
				break;
			case 2:
				return $this->getIdFeatureValue();
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
		if (isset($alreadyDumpedObjects['Oops_Db_FeatureProduct'][serialize($this->getPrimaryKey())])) {
			return '*RECURSION*';
		}
		$alreadyDumpedObjects['Oops_Db_FeatureProduct'][serialize($this->getPrimaryKey())] = true;
		$keys = Oops_Db_FeatureProductPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getIdFeature(),
			$keys[1] => $this->getIdProduct(),
			$keys[2] => $this->getIdFeatureValue(),
		);
		if ($includeForeignObjects) {
			if (null !== $this->aProduct) {
				$result['Product'] = $this->aProduct->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
			}
			if (null !== $this->aFeature) {
				$result['Feature'] = $this->aFeature->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
			}
			if (null !== $this->singleFeatureValue) {
				$result['FeatureValue'] = $this->singleFeatureValue->toArray($keyType, $includeLazyLoadColumns, $alreadyDumpedObjects, true);
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
		$pos = Oops_Db_FeatureProductPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setIdFeature($value);
				break;
			case 1:
				$this->setIdProduct($value);
				break;
			case 2:
				$this->setIdFeatureValue($value);
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
		$keys = Oops_Db_FeatureProductPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setIdFeature($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setIdProduct($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setIdFeatureValue($arr[$keys[2]]);
	}

	/**
	 * Build a Criteria object containing the values of all modified columns in this object.
	 *
	 * @return     Criteria The Criteria object containing all modified values.
	 */
	public function buildCriteria()
	{
		$criteria = new Criteria(Oops_Db_FeatureProductPeer::DATABASE_NAME);

		if ($this->isColumnModified(Oops_Db_FeatureProductPeer::ID_FEATURE)) $criteria->add(Oops_Db_FeatureProductPeer::ID_FEATURE, $this->id_feature);
		if ($this->isColumnModified(Oops_Db_FeatureProductPeer::ID_PRODUCT)) $criteria->add(Oops_Db_FeatureProductPeer::ID_PRODUCT, $this->id_product);
		if ($this->isColumnModified(Oops_Db_FeatureProductPeer::ID_FEATURE_VALUE)) $criteria->add(Oops_Db_FeatureProductPeer::ID_FEATURE_VALUE, $this->id_feature_value);

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
		$criteria = new Criteria(Oops_Db_FeatureProductPeer::DATABASE_NAME);
		$criteria->add(Oops_Db_FeatureProductPeer::ID_FEATURE, $this->id_feature);
		$criteria->add(Oops_Db_FeatureProductPeer::ID_PRODUCT, $this->id_product);
		$criteria->add(Oops_Db_FeatureProductPeer::ID_FEATURE_VALUE, $this->id_feature_value);

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
		$pks[0] = $this->getIdFeature();
		$pks[1] = $this->getIdProduct();
		$pks[2] = $this->getIdFeatureValue();

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
		$this->setIdFeature($keys[0]);
		$this->setIdProduct($keys[1]);
		$this->setIdFeatureValue($keys[2]);
	}

	/**
	 * Returns true if the primary key for this object is null.
	 * @return     boolean
	 */
	public function isPrimaryKeyNull()
	{
		return (null === $this->getIdFeature()) && (null === $this->getIdProduct()) && (null === $this->getIdFeatureValue());
	}

	/**
	 * Sets contents of passed object to values from current object.
	 *
	 * If desired, this method can also make copies of all associated (fkey referrers)
	 * objects.
	 *
	 * @param      object $copyObj An object of Oops_Db_FeatureProduct (or compatible) type.
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
	 * @throws     PropelException
	 */
	public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
	{
		$copyObj->setIdFeature($this->getIdFeature());
		$copyObj->setIdProduct($this->getIdProduct());
		$copyObj->setIdFeatureValue($this->getIdFeatureValue());

		if ($deepCopy) {
			// important: temporarily setNew(false) because this affects the behavior of
			// the getter/setter methods for fkey referrer objects.
			$copyObj->setNew(false);

			$relObj = $this->getFeatureValue();
			if ($relObj) {
				$copyObj->setFeatureValue($relObj->copy($deepCopy));
			}

		} // if ($deepCopy)

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
	 * @return     Oops_Db_FeatureProduct Clone of current object.
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
	 * @return     Oops_Db_FeatureProductPeer
	 */
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new Oops_Db_FeatureProductPeer();
		}
		return self::$peer;
	}

	/**
	 * Declares an association between this object and a Oops_Db_Product object.
	 *
	 * @param      Oops_Db_Product $v
	 * @return     Oops_Db_FeatureProduct The current object (for fluent API support)
	 * @throws     PropelException
	 */
	public function setProduct(Oops_Db_Product $v = null)
	{
		if ($v === null) {
			$this->setIdProduct(NULL);
		} else {
			$this->setIdProduct($v->getIdProduct());
		}

		$this->aProduct = $v;

		// Add binding for other direction of this n:n relationship.
		// If this object has already been added to the Oops_Db_Product object, it will not be re-added.
		if ($v !== null) {
			$v->addFeatureProduct($this);
		}

		return $this;
	}


	/**
	 * Get the associated Oops_Db_Product object
	 *
	 * @param      PropelPDO Optional Connection object.
	 * @return     Oops_Db_Product The associated Oops_Db_Product object.
	 * @throws     PropelException
	 */
	public function getProduct(PropelPDO $con = null)
	{
		if ($this->aProduct === null && ($this->id_product !== null)) {
			$this->aProduct = Oops_Db_ProductQuery::create()->findPk($this->id_product, $con);
			/* The following can be used additionally to
				guarantee the related object contains a reference
				to this object.  This level of coupling may, however, be
				undesirable since it could result in an only partially populated collection
				in the referenced object.
				$this->aProduct->addFeatureProducts($this);
			 */
		}
		return $this->aProduct;
	}

	/**
	 * Declares an association between this object and a Oops_Db_Feature object.
	 *
	 * @param      Oops_Db_Feature $v
	 * @return     Oops_Db_FeatureProduct The current object (for fluent API support)
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
			$v->addFeatureProduct($this);
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
				$this->aFeature->addFeatureProducts($this);
			 */
		}
		return $this->aFeature;
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
	}

	/**
	 * Gets a single Oops_Db_FeatureValue object, which is related to this object by a one-to-one relationship.
	 *
	 * @param      PropelPDO $con optional connection object
	 * @return     Oops_Db_FeatureValue
	 * @throws     PropelException
	 */
	public function getFeatureValue(PropelPDO $con = null)
	{

		if ($this->singleFeatureValue === null && !$this->isNew()) {
			$this->singleFeatureValue = Oops_Db_FeatureValueQuery::create()->findPk($this->getPrimaryKey(), $con);
		}

		return $this->singleFeatureValue;
	}

	/**
	 * Sets a single Oops_Db_FeatureValue object as related to this object by a one-to-one relationship.
	 *
	 * @param      Oops_Db_FeatureValue $v Oops_Db_FeatureValue
	 * @return     Oops_Db_FeatureProduct The current object (for fluent API support)
	 * @throws     PropelException
	 */
	public function setFeatureValue(Oops_Db_FeatureValue $v = null)
	{
		$this->singleFeatureValue = $v;

		// Make sure that that the passed-in Oops_Db_FeatureValue isn't already associated with this object
		if ($v !== null && $v->getFeatureProduct() === null) {
			$v->setFeatureProduct($this);
		}

		return $this;
	}

	/**
	 * Clears the current object and sets all attributes to their default values
	 */
	public function clear()
	{
		$this->id_feature = null;
		$this->id_product = null;
		$this->id_feature_value = null;
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
			if ($this->singleFeatureValue) {
				$this->singleFeatureValue->clearAllReferences($deep);
			}
		} // if ($deep)

		if ($this->singleFeatureValue instanceof PropelCollection) {
			$this->singleFeatureValue->clearIterator();
		}
		$this->singleFeatureValue = null;
		$this->aProduct = null;
		$this->aFeature = null;
	}

	/**
	 * Return the string representation of this object
	 *
	 * @return string
	 */
	public function __toString()
	{
		return (string) $this->exportTo(Oops_Db_FeatureProductPeer::DEFAULT_STRING_FORMAT);
	}

} // Oops_Db_Propel_FeatureProduct