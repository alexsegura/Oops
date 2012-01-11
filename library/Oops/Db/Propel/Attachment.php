<?php


/**
 * Base class that represents a row from the 'attachment' table.
 *
 * 
 *
 * @package    propel.generator.prestashop.om
 */
abstract class Oops_Db_Propel_Attachment extends BaseObject  implements Persistent
{

	/**
	 * Peer class name
	 */
	const PEER = 'Oops_Db_AttachmentPeer';

	/**
	 * The Peer class.
	 * Instance provides a convenient way of calling static methods on a class
	 * that calling code may not be able to identify.
	 * @var        Oops_Db_AttachmentPeer
	 */
	protected static $peer;

	/**
	 * The value for the id_attachment field.
	 * @var        int
	 */
	protected $id_attachment;

	/**
	 * The value for the file field.
	 * @var        string
	 */
	protected $file;

	/**
	 * The value for the file_name field.
	 * @var        string
	 */
	protected $file_name;

	/**
	 * The value for the mime field.
	 * @var        string
	 */
	protected $mime;

	/**
	 * @var        array Oops_Db_ProductAttachment[] Collection to store aggregation of Oops_Db_ProductAttachment objects.
	 */
	protected $collProductAttachments;

	/**
	 * @var        array Oops_Db_Product[] Collection to store aggregation of Oops_Db_Product objects.
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

	/**
	 * An array of objects scheduled for deletion.
	 * @var		array
	 */
	protected $productsScheduledForDeletion = null;

	/**
	 * An array of objects scheduled for deletion.
	 * @var		array
	 */
	protected $productAttachmentsScheduledForDeletion = null;

	/**
	 * Get the [id_attachment] column value.
	 * 
	 * @return     int
	 */
	public function getIdAttachment()
	{
		return $this->id_attachment;
	}

	/**
	 * Get the [file] column value.
	 * 
	 * @return     string
	 */
	public function getFile()
	{
		return $this->file;
	}

	/**
	 * Get the [file_name] column value.
	 * 
	 * @return     string
	 */
	public function getFileName()
	{
		return $this->file_name;
	}

	/**
	 * Get the [mime] column value.
	 * 
	 * @return     string
	 */
	public function getMime()
	{
		return $this->mime;
	}

	/**
	 * Set the value of [id_attachment] column.
	 * 
	 * @param      int $v new value
	 * @return     Oops_Db_Attachment The current object (for fluent API support)
	 */
	public function setIdAttachment($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->id_attachment !== $v) {
			$this->id_attachment = $v;
			$this->modifiedColumns[] = Oops_Db_AttachmentPeer::ID_ATTACHMENT;
		}

		return $this;
	} // setIdAttachment()

	/**
	 * Set the value of [file] column.
	 * 
	 * @param      string $v new value
	 * @return     Oops_Db_Attachment The current object (for fluent API support)
	 */
	public function setFile($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->file !== $v) {
			$this->file = $v;
			$this->modifiedColumns[] = Oops_Db_AttachmentPeer::FILE;
		}

		return $this;
	} // setFile()

	/**
	 * Set the value of [file_name] column.
	 * 
	 * @param      string $v new value
	 * @return     Oops_Db_Attachment The current object (for fluent API support)
	 */
	public function setFileName($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->file_name !== $v) {
			$this->file_name = $v;
			$this->modifiedColumns[] = Oops_Db_AttachmentPeer::FILE_NAME;
		}

		return $this;
	} // setFileName()

	/**
	 * Set the value of [mime] column.
	 * 
	 * @param      string $v new value
	 * @return     Oops_Db_Attachment The current object (for fluent API support)
	 */
	public function setMime($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->mime !== $v) {
			$this->mime = $v;
			$this->modifiedColumns[] = Oops_Db_AttachmentPeer::MIME;
		}

		return $this;
	} // setMime()

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

			$this->id_attachment = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
			$this->file = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
			$this->file_name = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
			$this->mime = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
			$this->resetModified();

			$this->setNew(false);

			if ($rehydrate) {
				$this->ensureConsistency();
			}

			return $startcol + 4; // 4 = Oops_Db_AttachmentPeer::NUM_HYDRATE_COLUMNS.

		} catch (Exception $e) {
			throw new PropelException("Error populating Oops_Db_Attachment object", $e);
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
			$con = Propel::getConnection(Oops_Db_AttachmentPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		// We don't need to alter the object instance pool; we're just modifying this instance
		// already in the pool.

		$stmt = Oops_Db_AttachmentPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
		$row = $stmt->fetch(PDO::FETCH_NUM);
		$stmt->closeCursor();
		if (!$row) {
			throw new PropelException('Cannot find matching row in the database to reload object values.');
		}
		$this->hydrate($row, 0, true); // rehydrate

		if ($deep) {  // also de-associate any related objects?

			$this->collProductAttachments = null;

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
			$con = Propel::getConnection(Oops_Db_AttachmentPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$con->beginTransaction();
		try {
			$deleteQuery = Oops_Db_AttachmentQuery::create()
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
			$con = Propel::getConnection(Oops_Db_AttachmentPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
				Oops_Db_AttachmentPeer::addInstanceToPool($this);
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
					ProductAttachmentQuery::create()
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

			if ($this->productAttachmentsScheduledForDeletion !== null) {
				if (!$this->productAttachmentsScheduledForDeletion->isEmpty()) {
					Oops_Db_ProductAttachmentQuery::create()
						->filterByPrimaryKeys($this->productAttachmentsScheduledForDeletion->getPrimaryKeys(false))
						->delete($con);
					$this->productAttachmentsScheduledForDeletion = null;
				}
			}

			if ($this->collProductAttachments !== null) {
				foreach ($this->collProductAttachments as $referrerFK) {
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

		$this->modifiedColumns[] = Oops_Db_AttachmentPeer::ID_ATTACHMENT;
		if (null !== $this->id_attachment) {
			throw new PropelException('Cannot insert a value for auto-increment primary key (' . Oops_Db_AttachmentPeer::ID_ATTACHMENT . ')');
		}

		 // check the columns in natural order for more readable SQL queries
		if ($this->isColumnModified(Oops_Db_AttachmentPeer::ID_ATTACHMENT)) {
			$modifiedColumns[':p' . $index++]  = '`ID_ATTACHMENT`';
		}
		if ($this->isColumnModified(Oops_Db_AttachmentPeer::FILE)) {
			$modifiedColumns[':p' . $index++]  = '`FILE`';
		}
		if ($this->isColumnModified(Oops_Db_AttachmentPeer::FILE_NAME)) {
			$modifiedColumns[':p' . $index++]  = '`FILE_NAME`';
		}
		if ($this->isColumnModified(Oops_Db_AttachmentPeer::MIME)) {
			$modifiedColumns[':p' . $index++]  = '`MIME`';
		}

		$sql = sprintf(
			'INSERT INTO `' .  _DB_PREFIX_ . 'attachment` (%s) VALUES (%s)',
			implode(', ', $modifiedColumns),
			implode(', ', array_keys($modifiedColumns))
		);

		try {
			$stmt = $con->prepare($sql);
			foreach ($modifiedColumns as $identifier => $columnName) {
				switch ($columnName) {
					case '`ID_ATTACHMENT`':
						$stmt->bindValue($identifier, $this->id_attachment, PDO::PARAM_INT);
						break;
					case '`FILE`':
						$stmt->bindValue($identifier, $this->file, PDO::PARAM_STR);
						break;
					case '`FILE_NAME`':
						$stmt->bindValue($identifier, $this->file_name, PDO::PARAM_STR);
						break;
					case '`MIME`':
						$stmt->bindValue($identifier, $this->mime, PDO::PARAM_STR);
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
		$this->setIdAttachment($pk);

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


			if (($retval = Oops_Db_AttachmentPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}


				if ($this->collProductAttachments !== null) {
					foreach ($this->collProductAttachments as $referrerFK) {
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
		$pos = Oops_Db_AttachmentPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getIdAttachment();
				break;
			case 1:
				return $this->getFile();
				break;
			case 2:
				return $this->getFileName();
				break;
			case 3:
				return $this->getMime();
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
		if (isset($alreadyDumpedObjects['Oops_Db_Attachment'][$this->getPrimaryKey()])) {
			return '*RECURSION*';
		}
		$alreadyDumpedObjects['Oops_Db_Attachment'][$this->getPrimaryKey()] = true;
		$keys = Oops_Db_AttachmentPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getIdAttachment(),
			$keys[1] => $this->getFile(),
			$keys[2] => $this->getFileName(),
			$keys[3] => $this->getMime(),
		);
		if ($includeForeignObjects) {
			if (null !== $this->collProductAttachments) {
				$result['ProductAttachments'] = $this->collProductAttachments->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
		$pos = Oops_Db_AttachmentPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setIdAttachment($value);
				break;
			case 1:
				$this->setFile($value);
				break;
			case 2:
				$this->setFileName($value);
				break;
			case 3:
				$this->setMime($value);
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
		$keys = Oops_Db_AttachmentPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setIdAttachment($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setFile($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setFileName($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setMime($arr[$keys[3]]);
	}

	/**
	 * Build a Criteria object containing the values of all modified columns in this object.
	 *
	 * @return     Criteria The Criteria object containing all modified values.
	 */
	public function buildCriteria()
	{
		$criteria = new Criteria(Oops_Db_AttachmentPeer::DATABASE_NAME);

		if ($this->isColumnModified(Oops_Db_AttachmentPeer::ID_ATTACHMENT)) $criteria->add(Oops_Db_AttachmentPeer::ID_ATTACHMENT, $this->id_attachment);
		if ($this->isColumnModified(Oops_Db_AttachmentPeer::FILE)) $criteria->add(Oops_Db_AttachmentPeer::FILE, $this->file);
		if ($this->isColumnModified(Oops_Db_AttachmentPeer::FILE_NAME)) $criteria->add(Oops_Db_AttachmentPeer::FILE_NAME, $this->file_name);
		if ($this->isColumnModified(Oops_Db_AttachmentPeer::MIME)) $criteria->add(Oops_Db_AttachmentPeer::MIME, $this->mime);

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
		$criteria = new Criteria(Oops_Db_AttachmentPeer::DATABASE_NAME);
		$criteria->add(Oops_Db_AttachmentPeer::ID_ATTACHMENT, $this->id_attachment);

		return $criteria;
	}

	/**
	 * Returns the primary key for this object (row).
	 * @return     int
	 */
	public function getPrimaryKey()
	{
		return $this->getIdAttachment();
	}

	/**
	 * Generic method to set the primary key (id_attachment column).
	 *
	 * @param      int $key Primary key.
	 * @return     void
	 */
	public function setPrimaryKey($key)
	{
		$this->setIdAttachment($key);
	}

	/**
	 * Returns true if the primary key for this object is null.
	 * @return     boolean
	 */
	public function isPrimaryKeyNull()
	{
		return null === $this->getIdAttachment();
	}

	/**
	 * Sets contents of passed object to values from current object.
	 *
	 * If desired, this method can also make copies of all associated (fkey referrers)
	 * objects.
	 *
	 * @param      object $copyObj An object of Oops_Db_Attachment (or compatible) type.
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
	 * @throws     PropelException
	 */
	public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
	{
		$copyObj->setFile($this->getFile());
		$copyObj->setFileName($this->getFileName());
		$copyObj->setMime($this->getMime());

		if ($deepCopy) {
			// important: temporarily setNew(false) because this affects the behavior of
			// the getter/setter methods for fkey referrer objects.
			$copyObj->setNew(false);

			foreach ($this->getProductAttachments() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addProductAttachment($relObj->copy($deepCopy));
				}
			}

		} // if ($deepCopy)

		if ($makeNew) {
			$copyObj->setNew(true);
			$copyObj->setIdAttachment(NULL); // this is a auto-increment column, so set to default value
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
	 * @return     Oops_Db_Attachment Clone of current object.
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
	 * @return     Oops_Db_AttachmentPeer
	 */
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new Oops_Db_AttachmentPeer();
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
		if ('ProductAttachment' == $relationName) {
			return $this->initProductAttachments();
		}
	}

	/**
	 * Clears out the collProductAttachments collection
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addProductAttachments()
	 */
	public function clearProductAttachments()
	{
		$this->collProductAttachments = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collProductAttachments collection.
	 *
	 * By default this just sets the collProductAttachments collection to an empty array (like clearcollProductAttachments());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @param      boolean $overrideExisting If set to true, the method call initializes
	 *                                        the collection even if it is not empty
	 *
	 * @return     void
	 */
	public function initProductAttachments($overrideExisting = true)
	{
		if (null !== $this->collProductAttachments && !$overrideExisting) {
			return;
		}
		$this->collProductAttachments = new PropelObjectCollection();
		$this->collProductAttachments->setModel('Oops_Db_ProductAttachment');
	}

	/**
	 * Gets an array of Oops_Db_ProductAttachment objects which contain a foreign key that references this object.
	 *
	 * If the $criteria is not null, it is used to always fetch the results from the database.
	 * Otherwise the results are fetched from the database the first time, then cached.
	 * Next time the same method is called without $criteria, the cached collection is returned.
	 * If this Oops_Db_Attachment is new, it will return
	 * an empty collection or the current collection; the criteria is ignored on a new object.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @return     PropelCollection|array Oops_Db_ProductAttachment[] List of Oops_Db_ProductAttachment objects
	 * @throws     PropelException
	 */
	public function getProductAttachments($criteria = null, PropelPDO $con = null)
	{
		if(null === $this->collProductAttachments || null !== $criteria) {
			if ($this->isNew() && null === $this->collProductAttachments) {
				// return empty collection
				$this->initProductAttachments();
			} else {
				$collProductAttachments = Oops_Db_ProductAttachmentQuery::create(null, $criteria)
					->filterByAttachment($this)
					->find($con);
				if (null !== $criteria) {
					return $collProductAttachments;
				}
				$this->collProductAttachments = $collProductAttachments;
			}
		}
		return $this->collProductAttachments;
	}

	/**
	 * Sets a collection of ProductAttachment objects related by a one-to-many relationship
	 * to the current object.
	 * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
	 * and new objects from the given Propel collection.
	 *
	 * @param      PropelCollection $productAttachments A Propel collection.
	 * @param      PropelPDO $con Optional connection object
	 */
	public function setProductAttachments(PropelCollection $productAttachments, PropelPDO $con = null)
	{
		$this->productAttachmentsScheduledForDeletion = $this->getProductAttachments(new Criteria(), $con)->diff($productAttachments);

		foreach ($productAttachments as $productAttachment) {
			// Fix issue with collection modified by reference
			if ($productAttachment->isNew()) {
				$productAttachment->setAttachment($this);
			}
			$this->addProductAttachment($productAttachment);
		}

		$this->collProductAttachments = $productAttachments;
	}

	/**
	 * Returns the number of related Oops_Db_ProductAttachment objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related Oops_Db_ProductAttachment objects.
	 * @throws     PropelException
	 */
	public function countProductAttachments(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if(null === $this->collProductAttachments || null !== $criteria) {
			if ($this->isNew() && null === $this->collProductAttachments) {
				return 0;
			} else {
				$query = Oops_Db_ProductAttachmentQuery::create(null, $criteria);
				if($distinct) {
					$query->distinct();
				}
				return $query
					->filterByAttachment($this)
					->count($con);
			}
		} else {
			return count($this->collProductAttachments);
		}
	}

	/**
	 * Method called to associate a Oops_Db_ProductAttachment object to this object
	 * through the Oops_Db_ProductAttachment foreign key attribute.
	 *
	 * @param      Oops_Db_ProductAttachment $l Oops_Db_ProductAttachment
	 * @return     Oops_Db_Attachment The current object (for fluent API support)
	 */
	public function addProductAttachment(Oops_Db_ProductAttachment $l)
	{
		if ($this->collProductAttachments === null) {
			$this->initProductAttachments();
		}
		if (!$this->collProductAttachments->contains($l)) { // only add it if the **same** object is not already associated
			$this->doAddProductAttachment($l);
		}

		return $this;
	}

	/**
	 * @param	ProductAttachment $productAttachment The productAttachment object to add.
	 */
	protected function doAddProductAttachment($productAttachment)
	{
		$this->collProductAttachments[]= $productAttachment;
		$productAttachment->setAttachment($this);
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this Attachment is new, it will return
	 * an empty collection; or if this Attachment has previously
	 * been saved, it will retrieve related ProductAttachments from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in Attachment.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array Oops_Db_ProductAttachment[] List of Oops_Db_ProductAttachment objects
	 */
	public function getProductAttachmentsJoinProduct($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = Oops_Db_ProductAttachmentQuery::create(null, $criteria);
		$query->joinWith('Product', $join_behavior);

		return $this->getProductAttachments($query, $con);
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
		$this->collProducts->setModel('Oops_Db_Product');
	}

	/**
	 * Gets a collection of Oops_Db_Product objects related by a many-to-many relationship
	 * to the current object by way of the product_attachment cross-reference table.
	 *
	 * If the $criteria is not null, it is used to always fetch the results from the database.
	 * Otherwise the results are fetched from the database the first time, then cached.
	 * Next time the same method is called without $criteria, the cached collection is returned.
	 * If this Oops_Db_Attachment is new, it will return
	 * an empty collection or the current collection; the criteria is ignored on a new object.
	 *
	 * @param      Criteria $criteria Optional query object to filter the query
	 * @param      PropelPDO $con Optional connection object
	 *
	 * @return     PropelCollection|array Oops_Db_Product[] List of Oops_Db_Product objects
	 */
	public function getProducts($criteria = null, PropelPDO $con = null)
	{
		if(null === $this->collProducts || null !== $criteria) {
			if ($this->isNew() && null === $this->collProducts) {
				// return empty collection
				$this->initProducts();
			} else {
				$collProducts = Oops_Db_ProductQuery::create(null, $criteria)
					->filterByAttachment($this)
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
	 * Sets a collection of Oops_Db_Product objects related by a many-to-many relationship
	 * to the current object by way of the product_attachment cross-reference table.
	 * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
	 * and new objects from the given Propel collection.
	 *
	 * @param      PropelCollection $products A Propel collection.
	 * @param      PropelPDO $con Optional connection object
	 */
	public function setProducts(PropelCollection $products, PropelPDO $con = null)
	{
		$oops_Db_ProductAttachments = ProductAttachmentQuery::create()
			->filterByOops_Db_Product($products)
			->filterByAttachment($this)
			->find($con);

		$this->productsScheduledForDeletion = $this->getProductAttachments()->diff($oops_Db_ProductAttachments);
		$this->collProductAttachments = $oops_Db_ProductAttachments;

		foreach ($products as $product) {
			// Fix issue with collection modified by reference
			if ($product->isNew()) {
				$this->doAddOops_Db_Product($product);
			} else {
				$this->addOops_Db_Product($product);
			}
		}

		$this->collProducts = $products;
	}

	/**
	 * Gets the number of Oops_Db_Product objects related by a many-to-many relationship
	 * to the current object by way of the product_attachment cross-reference table.
	 *
	 * @param      Criteria $criteria Optional query object to filter the query
	 * @param      boolean $distinct Set to true to force count distinct
	 * @param      PropelPDO $con Optional connection object
	 *
	 * @return     int the number of related Oops_Db_Product objects
	 */
	public function countProducts($criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if(null === $this->collProducts || null !== $criteria) {
			if ($this->isNew() && null === $this->collProducts) {
				return 0;
			} else {
				$query = Oops_Db_ProductQuery::create(null, $criteria);
				if($distinct) {
					$query->distinct();
				}
				return $query
					->filterByAttachment($this)
					->count($con);
			}
		} else {
			return count($this->collProducts);
		}
	}

	/**
	 * Associate a Oops_Db_Product object to this object
	 * through the product_attachment cross reference table.
	 *
	 * @param      Oops_Db_Product $product The Oops_Db_ProductAttachment object to relate
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
		$productAttachment = new Oops_Db_ProductAttachment();
		$productAttachment->setProduct($product);
		$this->addOops_Db_ProductAttachment($productAttachment);
	}

	/**
	 * Clears the current object and sets all attributes to their default values
	 */
	public function clear()
	{
		$this->id_attachment = null;
		$this->file = null;
		$this->file_name = null;
		$this->mime = null;
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
			if ($this->collProductAttachments) {
				foreach ($this->collProductAttachments as $o) {
					$o->clearAllReferences($deep);
				}
			}
			if ($this->collProducts) {
				foreach ($this->collProducts as $o) {
					$o->clearAllReferences($deep);
				}
			}
		} // if ($deep)

		if ($this->collProductAttachments instanceof PropelCollection) {
			$this->collProductAttachments->clearIterator();
		}
		$this->collProductAttachments = null;
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
		return (string) $this->exportTo(Oops_Db_AttachmentPeer::DEFAULT_STRING_FORMAT);
	}

} // Oops_Db_Propel_Attachment
