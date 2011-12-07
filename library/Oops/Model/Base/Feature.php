<?php


/**
 * Base class that represents a row from the 'feature' table.
 *
 * 
 *
 * @package    propel.generator.prestashop.om
 */
abstract class Oops_Model_Base_Feature extends BaseObject  implements Persistent
{

	/**
	 * Peer class name
	 */
	const PEER = 'Oops_Model_FeaturePeer';

	/**
	 * The Peer class.
	 * Instance provides a convenient way of calling static methods on a class
	 * that calling code may not be able to identify.
	 * @var        Oops_Model_FeaturePeer
	 */
	protected static $peer;

	/**
	 * The value for the id_feature field.
	 * @var        int
	 */
	protected $id_feature;

	/**
	 * @var        array Oops_Model_FeatureProduct[] Collection to store aggregation of Oops_Model_FeatureProduct objects.
	 */
	protected $collFeatureProducts;

	/**
	 * @var        array Oops_Model_FeatureValue[] Collection to store aggregation of Oops_Model_FeatureValue objects.
	 */
	protected $collFeatureValues;

	/**
	 * @var        array Oops_Model_FeatureLang[] Collection to store aggregation of Oops_Model_FeatureLang objects.
	 */
	protected $collFeatureLangs;

	/**
	 * @var        array Oops_Model_Product[] Collection to store aggregation of Oops_Model_Product objects.
	 */
	protected $collProducts;

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
	 * @var        array[Oops_Model_FeatureLang]
	 */
	protected $currentTranslations;

	/**
	 * An array of objects scheduled for deletion.
	 * @var		array
	 */
	protected $productsScheduledForDeletion = null;

	/**
	 * An array of objects scheduled for deletion.
	 * @var		array
	 */
	protected $featureProductsScheduledForDeletion = null;

	/**
	 * An array of objects scheduled for deletion.
	 * @var		array
	 */
	protected $featureValuesScheduledForDeletion = null;

	/**
	 * An array of objects scheduled for deletion.
	 * @var		array
	 */
	protected $featureLangsScheduledForDeletion = null;

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
	 * Set the value of [id_feature] column.
	 * 
	 * @param      int $v new value
	 * @return     Oops_Model_Feature The current object (for fluent API support)
	 */
	public function setIdFeature($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->id_feature !== $v) {
			$this->id_feature = $v;
			$this->modifiedColumns[] = Oops_Model_FeaturePeer::ID_FEATURE;
		}

		return $this;
	} // setIdFeature()

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
			$this->resetModified();

			$this->setNew(false);

			if ($rehydrate) {
				$this->ensureConsistency();
			}

			return $startcol + 1; // 1 = Oops_Model_FeaturePeer::NUM_HYDRATE_COLUMNS.

		} catch (Exception $e) {
			throw new PropelException("Error populating Oops_Model_Feature object", $e);
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
			$con = Propel::getConnection(Oops_Model_FeaturePeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		// We don't need to alter the object instance pool; we're just modifying this instance
		// already in the pool.

		$stmt = Oops_Model_FeaturePeer::doSelectStmt($this->buildPkeyCriteria(), $con);
		$row = $stmt->fetch(PDO::FETCH_NUM);
		$stmt->closeCursor();
		if (!$row) {
			throw new PropelException('Cannot find matching row in the database to reload object values.');
		}
		$this->hydrate($row, 0, true); // rehydrate

		if ($deep) {  // also de-associate any related objects?

			$this->collFeatureProducts = null;

			$this->collFeatureValues = null;

			$this->collFeatureLangs = null;

			$this->collProducts = null;
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
			$con = Propel::getConnection(Oops_Model_FeaturePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$con->beginTransaction();
		try {
			$deleteQuery = Oops_Model_FeatureQuery::create()
				->filterByPrimaryKey($this->getPrimaryKey());
			$ret = $this->preDelete($con);
			if ($ret) {
				$deleteQuery->delete($con);
				$this->postDelete($con);
				// i18n behavior
				
				// emulate delete cascade
				Oops_Model_FeatureLangQuery::create()
					->filterByOops_Model_Feature($this)
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
			$con = Propel::getConnection(Oops_Model_FeaturePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
				Oops_Model_FeaturePeer::addInstanceToPool($this);
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

			if ($this->productsScheduledForDeletion !== null) {
				if (!$this->productsScheduledForDeletion->isEmpty()) {
					FeatureProductQuery::create()
						->filterByPrimaryKeys($this->productsScheduledForDeletion->getPrimaryKeys(false))
						->delete($con);
					$this->productsScheduledForDeletion = null;
				}

				foreach ($this->getProducts() as $product) {
					if ($product->isModified()) {
						$product->save($con);
					}
				}
			}

			if ($this->featureProductsScheduledForDeletion !== null) {
				if (!$this->featureProductsScheduledForDeletion->isEmpty()) {
					Oops_Model_FeatureProductQuery::create()
						->filterByPrimaryKeys($this->featureProductsScheduledForDeletion->getPrimaryKeys(false))
						->delete($con);
					$this->featureProductsScheduledForDeletion = null;
				}
			}

			if ($this->collFeatureProducts !== null) {
				foreach ($this->collFeatureProducts as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->featureValuesScheduledForDeletion !== null) {
				if (!$this->featureValuesScheduledForDeletion->isEmpty()) {
					Oops_Model_FeatureValueQuery::create()
						->filterByPrimaryKeys($this->featureValuesScheduledForDeletion->getPrimaryKeys(false))
						->delete($con);
					$this->featureValuesScheduledForDeletion = null;
				}
			}

			if ($this->collFeatureValues !== null) {
				foreach ($this->collFeatureValues as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->featureLangsScheduledForDeletion !== null) {
				if (!$this->featureLangsScheduledForDeletion->isEmpty()) {
					Oops_Model_FeatureLangQuery::create()
						->filterByPrimaryKeys($this->featureLangsScheduledForDeletion->getPrimaryKeys(false))
						->delete($con);
					$this->featureLangsScheduledForDeletion = null;
				}
			}

			if ($this->collFeatureLangs !== null) {
				foreach ($this->collFeatureLangs as $referrerFK) {
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

		$this->modifiedColumns[] = Oops_Model_FeaturePeer::ID_FEATURE;
		if (null !== $this->id_feature) {
			throw new PropelException('Cannot insert a value for auto-increment primary key (' . Oops_Model_FeaturePeer::ID_FEATURE . ')');
		}

		 // check the columns in natural order for more readable SQL queries
		if ($this->isColumnModified(Oops_Model_FeaturePeer::ID_FEATURE)) {
			$modifiedColumns[':p' . $index++]  = '`ID_FEATURE`';
		}

		$sql = sprintf(
			'INSERT INTO `' .  _DB_PREFIX_ . 'feature` (%s) VALUES (%s)',
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
		$this->setIdFeature($pk);

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


			if (($retval = Oops_Model_FeaturePeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}


				if ($this->collFeatureProducts !== null) {
					foreach ($this->collFeatureProducts as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collFeatureValues !== null) {
					foreach ($this->collFeatureValues as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collFeatureLangs !== null) {
					foreach ($this->collFeatureLangs as $referrerFK) {
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
		$pos = Oops_Model_FeaturePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
		if (isset($alreadyDumpedObjects['Oops_Model_Feature'][$this->getPrimaryKey()])) {
			return '*RECURSION*';
		}
		$alreadyDumpedObjects['Oops_Model_Feature'][$this->getPrimaryKey()] = true;
		$keys = Oops_Model_FeaturePeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getIdFeature(),
		);
		if ($includeForeignObjects) {
			if (null !== $this->collFeatureProducts) {
				$result['FeatureProducts'] = $this->collFeatureProducts->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
			}
			if (null !== $this->collFeatureValues) {
				$result['FeatureValues'] = $this->collFeatureValues->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
			}
			if (null !== $this->collFeatureLangs) {
				$result['FeatureLangs'] = $this->collFeatureLangs->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
		$pos = Oops_Model_FeaturePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
		$keys = Oops_Model_FeaturePeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setIdFeature($arr[$keys[0]]);
	}

	/**
	 * Build a Criteria object containing the values of all modified columns in this object.
	 *
	 * @return     Criteria The Criteria object containing all modified values.
	 */
	public function buildCriteria()
	{
		$criteria = new Criteria(Oops_Model_FeaturePeer::DATABASE_NAME);

		if ($this->isColumnModified(Oops_Model_FeaturePeer::ID_FEATURE)) $criteria->add(Oops_Model_FeaturePeer::ID_FEATURE, $this->id_feature);

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
		$criteria = new Criteria(Oops_Model_FeaturePeer::DATABASE_NAME);
		$criteria->add(Oops_Model_FeaturePeer::ID_FEATURE, $this->id_feature);

		return $criteria;
	}

	/**
	 * Returns the primary key for this object (row).
	 * @return     int
	 */
	public function getPrimaryKey()
	{
		return $this->getIdFeature();
	}

	/**
	 * Generic method to set the primary key (id_feature column).
	 *
	 * @param      int $key Primary key.
	 * @return     void
	 */
	public function setPrimaryKey($key)
	{
		$this->setIdFeature($key);
	}

	/**
	 * Returns true if the primary key for this object is null.
	 * @return     boolean
	 */
	public function isPrimaryKeyNull()
	{
		return null === $this->getIdFeature();
	}

	/**
	 * Sets contents of passed object to values from current object.
	 *
	 * If desired, this method can also make copies of all associated (fkey referrers)
	 * objects.
	 *
	 * @param      object $copyObj An object of Oops_Model_Feature (or compatible) type.
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
	 * @throws     PropelException
	 */
	public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
	{

		if ($deepCopy) {
			// important: temporarily setNew(false) because this affects the behavior of
			// the getter/setter methods for fkey referrer objects.
			$copyObj->setNew(false);

			foreach ($this->getFeatureProducts() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addFeatureProduct($relObj->copy($deepCopy));
				}
			}

			foreach ($this->getFeatureValues() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addFeatureValue($relObj->copy($deepCopy));
				}
			}

			foreach ($this->getFeatureLangs() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addFeatureLang($relObj->copy($deepCopy));
				}
			}

		} // if ($deepCopy)

		if ($makeNew) {
			$copyObj->setNew(true);
			$copyObj->setIdFeature(NULL); // this is a auto-increment column, so set to default value
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
	 * @return     Oops_Model_Feature Clone of current object.
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
	 * @return     Oops_Model_FeaturePeer
	 */
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new Oops_Model_FeaturePeer();
		}
		return self::$peer;
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
		if ('FeatureProduct' == $relationName) {
			return $this->initFeatureProducts();
		}
		if ('FeatureValue' == $relationName) {
			return $this->initFeatureValues();
		}
		if ('FeatureLang' == $relationName) {
			return $this->initFeatureLangs();
		}
	}

	/**
	 * Clears out the collFeatureProducts collection
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addFeatureProducts()
	 */
	public function clearFeatureProducts()
	{
		$this->collFeatureProducts = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collFeatureProducts collection.
	 *
	 * By default this just sets the collFeatureProducts collection to an empty array (like clearcollFeatureProducts());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @param      boolean $overrideExisting If set to true, the method call initializes
	 *                                        the collection even if it is not empty
	 *
	 * @return     void
	 */
	public function initFeatureProducts($overrideExisting = true)
	{
		if (null !== $this->collFeatureProducts && !$overrideExisting) {
			return;
		}
		$this->collFeatureProducts = new PropelObjectCollection();
		$this->collFeatureProducts->setModel('Oops_Model_FeatureProduct');
	}

	/**
	 * Gets an array of Oops_Model_FeatureProduct objects which contain a foreign key that references this object.
	 *
	 * If the $criteria is not null, it is used to always fetch the results from the database.
	 * Otherwise the results are fetched from the database the first time, then cached.
	 * Next time the same method is called without $criteria, the cached collection is returned.
	 * If this Oops_Model_Feature is new, it will return
	 * an empty collection or the current collection; the criteria is ignored on a new object.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @return     PropelCollection|array Oops_Model_FeatureProduct[] List of Oops_Model_FeatureProduct objects
	 * @throws     PropelException
	 */
	public function getFeatureProducts($criteria = null, PropelPDO $con = null)
	{
		if(null === $this->collFeatureProducts || null !== $criteria) {
			if ($this->isNew() && null === $this->collFeatureProducts) {
				// return empty collection
				$this->initFeatureProducts();
			} else {
				$collFeatureProducts = Oops_Model_FeatureProductQuery::create(null, $criteria)
					->filterByFeature($this)
					->find($con);
				if (null !== $criteria) {
					return $collFeatureProducts;
				}
				$this->collFeatureProducts = $collFeatureProducts;
			}
		}
		return $this->collFeatureProducts;
	}

	/**
	 * Sets a collection of FeatureProduct objects related by a one-to-many relationship
	 * to the current object.
	 * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
	 * and new objects from the given Propel collection.
	 *
	 * @param      PropelCollection $featureProducts A Propel collection.
	 * @param      PropelPDO $con Optional connection object
	 */
	public function setFeatureProducts(PropelCollection $featureProducts, PropelPDO $con = null)
	{
		$this->featureProductsScheduledForDeletion = $this->getFeatureProducts(new Criteria(), $con)->diff($featureProducts);

		foreach ($featureProducts as $featureProduct) {
			// Fix issue with collection modified by reference
			if ($featureProduct->isNew()) {
				$featureProduct->setFeature($this);
			}
			$this->addFeatureProduct($featureProduct);
		}

		$this->collFeatureProducts = $featureProducts;
	}

	/**
	 * Returns the number of related Oops_Model_FeatureProduct objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related Oops_Model_FeatureProduct objects.
	 * @throws     PropelException
	 */
	public function countFeatureProducts(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if(null === $this->collFeatureProducts || null !== $criteria) {
			if ($this->isNew() && null === $this->collFeatureProducts) {
				return 0;
			} else {
				$query = Oops_Model_FeatureProductQuery::create(null, $criteria);
				if($distinct) {
					$query->distinct();
				}
				return $query
					->filterByFeature($this)
					->count($con);
			}
		} else {
			return count($this->collFeatureProducts);
		}
	}

	/**
	 * Method called to associate a Oops_Model_FeatureProduct object to this object
	 * through the Oops_Model_FeatureProduct foreign key attribute.
	 *
	 * @param      Oops_Model_FeatureProduct $l Oops_Model_FeatureProduct
	 * @return     Oops_Model_Feature The current object (for fluent API support)
	 */
	public function addFeatureProduct(Oops_Model_FeatureProduct $l)
	{
		if ($this->collFeatureProducts === null) {
			$this->initFeatureProducts();
		}
		if (!$this->collFeatureProducts->contains($l)) { // only add it if the **same** object is not already associated
			$this->doAddFeatureProduct($l);
		}

		return $this;
	}

	/**
	 * @param	FeatureProduct $featureProduct The featureProduct object to add.
	 */
	protected function doAddFeatureProduct($featureProduct)
	{
		$this->collFeatureProducts[]= $featureProduct;
		$featureProduct->setFeature($this);
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this Feature is new, it will return
	 * an empty collection; or if this Feature has previously
	 * been saved, it will retrieve related FeatureProducts from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in Feature.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array Oops_Model_FeatureProduct[] List of Oops_Model_FeatureProduct objects
	 */
	public function getFeatureProductsJoinProduct($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = Oops_Model_FeatureProductQuery::create(null, $criteria);
		$query->joinWith('Product', $join_behavior);

		return $this->getFeatureProducts($query, $con);
	}

	/**
	 * Clears out the collFeatureValues collection
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addFeatureValues()
	 */
	public function clearFeatureValues()
	{
		$this->collFeatureValues = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collFeatureValues collection.
	 *
	 * By default this just sets the collFeatureValues collection to an empty array (like clearcollFeatureValues());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @param      boolean $overrideExisting If set to true, the method call initializes
	 *                                        the collection even if it is not empty
	 *
	 * @return     void
	 */
	public function initFeatureValues($overrideExisting = true)
	{
		if (null !== $this->collFeatureValues && !$overrideExisting) {
			return;
		}
		$this->collFeatureValues = new PropelObjectCollection();
		$this->collFeatureValues->setModel('Oops_Model_FeatureValue');
	}

	/**
	 * Gets an array of Oops_Model_FeatureValue objects which contain a foreign key that references this object.
	 *
	 * If the $criteria is not null, it is used to always fetch the results from the database.
	 * Otherwise the results are fetched from the database the first time, then cached.
	 * Next time the same method is called without $criteria, the cached collection is returned.
	 * If this Oops_Model_Feature is new, it will return
	 * an empty collection or the current collection; the criteria is ignored on a new object.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @return     PropelCollection|array Oops_Model_FeatureValue[] List of Oops_Model_FeatureValue objects
	 * @throws     PropelException
	 */
	public function getFeatureValues($criteria = null, PropelPDO $con = null)
	{
		if(null === $this->collFeatureValues || null !== $criteria) {
			if ($this->isNew() && null === $this->collFeatureValues) {
				// return empty collection
				$this->initFeatureValues();
			} else {
				$collFeatureValues = Oops_Model_FeatureValueQuery::create(null, $criteria)
					->filterByFeature($this)
					->find($con);
				if (null !== $criteria) {
					return $collFeatureValues;
				}
				$this->collFeatureValues = $collFeatureValues;
			}
		}
		return $this->collFeatureValues;
	}

	/**
	 * Sets a collection of FeatureValue objects related by a one-to-many relationship
	 * to the current object.
	 * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
	 * and new objects from the given Propel collection.
	 *
	 * @param      PropelCollection $featureValues A Propel collection.
	 * @param      PropelPDO $con Optional connection object
	 */
	public function setFeatureValues(PropelCollection $featureValues, PropelPDO $con = null)
	{
		$this->featureValuesScheduledForDeletion = $this->getFeatureValues(new Criteria(), $con)->diff($featureValues);

		foreach ($featureValues as $featureValue) {
			// Fix issue with collection modified by reference
			if ($featureValue->isNew()) {
				$featureValue->setFeature($this);
			}
			$this->addFeatureValue($featureValue);
		}

		$this->collFeatureValues = $featureValues;
	}

	/**
	 * Returns the number of related Oops_Model_FeatureValue objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related Oops_Model_FeatureValue objects.
	 * @throws     PropelException
	 */
	public function countFeatureValues(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if(null === $this->collFeatureValues || null !== $criteria) {
			if ($this->isNew() && null === $this->collFeatureValues) {
				return 0;
			} else {
				$query = Oops_Model_FeatureValueQuery::create(null, $criteria);
				if($distinct) {
					$query->distinct();
				}
				return $query
					->filterByFeature($this)
					->count($con);
			}
		} else {
			return count($this->collFeatureValues);
		}
	}

	/**
	 * Method called to associate a Oops_Model_FeatureValue object to this object
	 * through the Oops_Model_FeatureValue foreign key attribute.
	 *
	 * @param      Oops_Model_FeatureValue $l Oops_Model_FeatureValue
	 * @return     Oops_Model_Feature The current object (for fluent API support)
	 */
	public function addFeatureValue(Oops_Model_FeatureValue $l)
	{
		if ($this->collFeatureValues === null) {
			$this->initFeatureValues();
		}
		if (!$this->collFeatureValues->contains($l)) { // only add it if the **same** object is not already associated
			$this->doAddFeatureValue($l);
		}

		return $this;
	}

	/**
	 * @param	FeatureValue $featureValue The featureValue object to add.
	 */
	protected function doAddFeatureValue($featureValue)
	{
		$this->collFeatureValues[]= $featureValue;
		$featureValue->setFeature($this);
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this Feature is new, it will return
	 * an empty collection; or if this Feature has previously
	 * been saved, it will retrieve related FeatureValues from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in Feature.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array Oops_Model_FeatureValue[] List of Oops_Model_FeatureValue objects
	 */
	public function getFeatureValuesJoinFeatureProduct($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = Oops_Model_FeatureValueQuery::create(null, $criteria);
		$query->joinWith('FeatureProduct', $join_behavior);

		return $this->getFeatureValues($query, $con);
	}

	/**
	 * Clears out the collFeatureLangs collection
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addFeatureLangs()
	 */
	public function clearFeatureLangs()
	{
		$this->collFeatureLangs = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collFeatureLangs collection.
	 *
	 * By default this just sets the collFeatureLangs collection to an empty array (like clearcollFeatureLangs());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @param      boolean $overrideExisting If set to true, the method call initializes
	 *                                        the collection even if it is not empty
	 *
	 * @return     void
	 */
	public function initFeatureLangs($overrideExisting = true)
	{
		if (null !== $this->collFeatureLangs && !$overrideExisting) {
			return;
		}
		$this->collFeatureLangs = new PropelObjectCollection();
		$this->collFeatureLangs->setModel('Oops_Model_FeatureLang');
	}

	/**
	 * Gets an array of Oops_Model_FeatureLang objects which contain a foreign key that references this object.
	 *
	 * If the $criteria is not null, it is used to always fetch the results from the database.
	 * Otherwise the results are fetched from the database the first time, then cached.
	 * Next time the same method is called without $criteria, the cached collection is returned.
	 * If this Oops_Model_Feature is new, it will return
	 * an empty collection or the current collection; the criteria is ignored on a new object.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @return     PropelCollection|array Oops_Model_FeatureLang[] List of Oops_Model_FeatureLang objects
	 * @throws     PropelException
	 */
	public function getFeatureLangs($criteria = null, PropelPDO $con = null)
	{
		if(null === $this->collFeatureLangs || null !== $criteria) {
			if ($this->isNew() && null === $this->collFeatureLangs) {
				// return empty collection
				$this->initFeatureLangs();
			} else {
				$collFeatureLangs = Oops_Model_FeatureLangQuery::create(null, $criteria)
					->filterByFeature($this)
					->find($con);
				if (null !== $criteria) {
					return $collFeatureLangs;
				}
				$this->collFeatureLangs = $collFeatureLangs;
			}
		}
		return $this->collFeatureLangs;
	}

	/**
	 * Sets a collection of FeatureLang objects related by a one-to-many relationship
	 * to the current object.
	 * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
	 * and new objects from the given Propel collection.
	 *
	 * @param      PropelCollection $featureLangs A Propel collection.
	 * @param      PropelPDO $con Optional connection object
	 */
	public function setFeatureLangs(PropelCollection $featureLangs, PropelPDO $con = null)
	{
		$this->featureLangsScheduledForDeletion = $this->getFeatureLangs(new Criteria(), $con)->diff($featureLangs);

		foreach ($featureLangs as $featureLang) {
			// Fix issue with collection modified by reference
			if ($featureLang->isNew()) {
				$featureLang->setFeature($this);
			}
			$this->addFeatureLang($featureLang);
		}

		$this->collFeatureLangs = $featureLangs;
	}

	/**
	 * Returns the number of related Oops_Model_FeatureLang objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related Oops_Model_FeatureLang objects.
	 * @throws     PropelException
	 */
	public function countFeatureLangs(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if(null === $this->collFeatureLangs || null !== $criteria) {
			if ($this->isNew() && null === $this->collFeatureLangs) {
				return 0;
			} else {
				$query = Oops_Model_FeatureLangQuery::create(null, $criteria);
				if($distinct) {
					$query->distinct();
				}
				return $query
					->filterByFeature($this)
					->count($con);
			}
		} else {
			return count($this->collFeatureLangs);
		}
	}

	/**
	 * Method called to associate a Oops_Model_FeatureLang object to this object
	 * through the Oops_Model_FeatureLang foreign key attribute.
	 *
	 * @param      Oops_Model_FeatureLang $l Oops_Model_FeatureLang
	 * @return     Oops_Model_Feature The current object (for fluent API support)
	 */
	public function addFeatureLang(Oops_Model_FeatureLang $l)
	{
		if ($this->collFeatureLangs === null) {
			$this->initFeatureLangs();
		}
		if (!$this->collFeatureLangs->contains($l)) { // only add it if the **same** object is not already associated
			$this->doAddFeatureLang($l);
		}

		return $this;
	}

	/**
	 * @param	FeatureLang $featureLang The featureLang object to add.
	 */
	protected function doAddFeatureLang($featureLang)
	{
		$this->collFeatureLangs[]= $featureLang;
		$featureLang->setFeature($this);
	}

	/**
	 * Clears out the collProducts collection
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addProducts()
	 */
	public function clearProducts()
	{
		$this->collProducts = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collProducts collection.
	 *
	 * By default this just sets the collProducts collection to an empty collection (like clearProducts());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @return     void
	 */
	public function initProducts()
	{
		$this->collProducts = new PropelObjectCollection();
		$this->collProducts->setModel('Oops_Model_Product');
	}

	/**
	 * Gets a collection of Oops_Model_Product objects related by a many-to-many relationship
	 * to the current object by way of the feature_product cross-reference table.
	 *
	 * If the $criteria is not null, it is used to always fetch the results from the database.
	 * Otherwise the results are fetched from the database the first time, then cached.
	 * Next time the same method is called without $criteria, the cached collection is returned.
	 * If this Oops_Model_Feature is new, it will return
	 * an empty collection or the current collection; the criteria is ignored on a new object.
	 *
	 * @param      Criteria $criteria Optional query object to filter the query
	 * @param      PropelPDO $con Optional connection object
	 *
	 * @return     PropelCollection|array Oops_Model_Product[] List of Oops_Model_Product objects
	 */
	public function getProducts($criteria = null, PropelPDO $con = null)
	{
		if(null === $this->collProducts || null !== $criteria) {
			if ($this->isNew() && null === $this->collProducts) {
				// return empty collection
				$this->initProducts();
			} else {
				$collProducts = Oops_Model_ProductQuery::create(null, $criteria)
					->filterByFeature($this)
					->find($con);
				if (null !== $criteria) {
					return $collProducts;
				}
				$this->collProducts = $collProducts;
			}
		}
		return $this->collProducts;
	}

	/**
	 * Sets a collection of Oops_Model_Product objects related by a many-to-many relationship
	 * to the current object by way of the feature_product cross-reference table.
	 * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
	 * and new objects from the given Propel collection.
	 *
	 * @param      PropelCollection $products A Propel collection.
	 * @param      PropelPDO $con Optional connection object
	 */
	public function setProducts(PropelCollection $products, PropelPDO $con = null)
	{
		$oops_Model_FeatureProducts = FeatureProductQuery::create()
			->filterByOops_Model_Product($products)
			->filterByFeature($this)
			->find($con);

		$this->productsScheduledForDeletion = $this->getFeatureProducts()->diff($oops_Model_FeatureProducts);
		$this->collFeatureProducts = $oops_Model_FeatureProducts;

		foreach ($products as $product) {
			// Fix issue with collection modified by reference
			if ($product->isNew()) {
				$this->doAddOops_Model_Product($product);
			} else {
				$this->addOops_Model_Product($product);
			}
		}

		$this->collProducts = $products;
	}

	/**
	 * Gets the number of Oops_Model_Product objects related by a many-to-many relationship
	 * to the current object by way of the feature_product cross-reference table.
	 *
	 * @param      Criteria $criteria Optional query object to filter the query
	 * @param      boolean $distinct Set to true to force count distinct
	 * @param      PropelPDO $con Optional connection object
	 *
	 * @return     int the number of related Oops_Model_Product objects
	 */
	public function countProducts($criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if(null === $this->collProducts || null !== $criteria) {
			if ($this->isNew() && null === $this->collProducts) {
				return 0;
			} else {
				$query = Oops_Model_ProductQuery::create(null, $criteria);
				if($distinct) {
					$query->distinct();
				}
				return $query
					->filterByFeature($this)
					->count($con);
			}
		} else {
			return count($this->collProducts);
		}
	}

	/**
	 * Associate a Oops_Model_Product object to this object
	 * through the feature_product cross reference table.
	 *
	 * @param      Oops_Model_Product $product The Oops_Model_FeatureProduct object to relate
	 * @return     void
	 */
	public function addProduct($product)
	{
		if ($this->collProducts === null) {
			$this->initProducts();
		}
		if (!$this->collProducts->contains($product)) { // only add it if the **same** object is not already associated
			$this->doAddProduct($product);

			$this->collProducts[]= $product;
		}
	}

	/**
	 * @param	Product $product The product object to add.
	 */
	protected function doAddProduct($product)
	{
		$featureProduct = new Oops_Model_FeatureProduct();
		$featureProduct->setProduct($product);
		$this->addOops_Model_FeatureProduct($featureProduct);
	}

	/**
	 * Clears the current object and sets all attributes to their default values
	 */
	public function clear()
	{
		$this->id_feature = null;
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
			if ($this->collFeatureProducts) {
				foreach ($this->collFeatureProducts as $o) {
					$o->clearAllReferences($deep);
				}
			}
			if ($this->collFeatureValues) {
				foreach ($this->collFeatureValues as $o) {
					$o->clearAllReferences($deep);
				}
			}
			if ($this->collFeatureLangs) {
				foreach ($this->collFeatureLangs as $o) {
					$o->clearAllReferences($deep);
				}
			}
			if ($this->collProducts) {
				foreach ($this->collProducts as $o) {
					$o->clearAllReferences($deep);
				}
			}
		} // if ($deep)

		// i18n behavior
		$this->currentLocale = '1';
		$this->currentTranslations = null;
		if ($this->collFeatureProducts instanceof PropelCollection) {
			$this->collFeatureProducts->clearIterator();
		}
		$this->collFeatureProducts = null;
		if ($this->collFeatureValues instanceof PropelCollection) {
			$this->collFeatureValues->clearIterator();
		}
		$this->collFeatureValues = null;
		if ($this->collFeatureLangs instanceof PropelCollection) {
			$this->collFeatureLangs->clearIterator();
		}
		$this->collFeatureLangs = null;
		if ($this->collProducts instanceof PropelCollection) {
			$this->collProducts->clearIterator();
		}
		$this->collProducts = null;
	}

	/**
	 * Return the string representation of this object
	 *
	 * @return string
	 */
	public function __toString()
	{
		return (string) $this->exportTo(Oops_Model_FeaturePeer::DEFAULT_STRING_FORMAT);
	}

	// i18n behavior
	
	/**
	 * Sets the locale for translations
	 *
	 * @param     string $locale Locale to use for the translation, e.g. 'fr_FR'
	 *
	 * @return    Oops_Model_Feature The current object (for fluent API support)
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
	 * @return Oops_Model_FeatureLang */
	public function getTranslation($locale = '1', PropelPDO $con = null)
	{
		if (!isset($this->currentTranslations[$locale])) {
			if (null !== $this->collFeatureLangs) {
				foreach ($this->collFeatureLangs as $translation) {
					if ($translation->getIdLang() == $locale) {
						$this->currentTranslations[$locale] = $translation;
						return $translation;
					}
				}
			}
			if ($this->isNew()) {
				$translation = new Oops_Model_FeatureLang();
				$translation->setIdLang($locale);
			} else {
				$translation = Oops_Model_FeatureLangQuery::create()
					->filterByPrimaryKey(array($this->getPrimaryKey(), $locale))
					->findOneOrCreate($con);
				$this->currentTranslations[$locale] = $translation;
			}
			$this->addFeatureLang($translation);
		}
	
		return $this->currentTranslations[$locale];
	}
	
	/**
	 * Remove the translation for a given locale
	 *
	 * @param     string $locale Locale to use for the translation, e.g. 'fr_FR'
	 * @param     PropelPDO $con an optional connection object
	 *
	 * @return    Oops_Model_Feature The current object (for fluent API support)
	 */
	public function removeTranslation($locale = '1', PropelPDO $con = null)
	{
		if (!$this->isNew()) {
			Oops_Model_FeatureLangQuery::create()
				->filterByPrimaryKey(array($this->getPrimaryKey(), $locale))
				->delete($con);
		}
		if (isset($this->currentTranslations[$locale])) {
			unset($this->currentTranslations[$locale]);
		}
		foreach ($this->collFeatureLangs as $key => $translation) {
			if ($translation->getIdLang() == $locale) {
				unset($this->collFeatureLangs[$key]);
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
	 * @return Oops_Model_FeatureLang */
	public function getCurrentTranslation(PropelPDO $con = null)
	{
		return $this->getTranslation($this->getLocale(), $con);
	}
	
	
	/**
	 * Get the [name] column value.
	 * 
	 * @return     string
	 */
	public function getName()
	{	return $this->getCurrentTranslation()->getName();
	}
	
	
	/**
	 * Set the value of [name] column.
	 * 
	 * @param      string $v new value
	 * @return     Oops_Model_Feature The current object (for fluent API support)
	 */
	public function setName($v)
	{	$this->getCurrentTranslation()->setName($v);
	
		return $this;
	}

} // Oops_Model_Base_Feature
