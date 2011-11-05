<?php


/**
 * Base class that represents a row from the 'djland_lang' table.
 *
 * 
 *
 * @package    propel.generator.prestashop.om
 */
abstract class Oops_Model_Base_Lang extends BaseObject  implements Persistent
{

	/**
	 * Peer class name
	 */
	const PEER = 'Oops_Model_LangPeer';

	/**
	 * The Peer class.
	 * Instance provides a convenient way of calling static methods on a class
	 * that calling code may not be able to identify.
	 * @var        Oops_Model_LangPeer
	 */
	protected static $peer;

	/**
	 * The value for the id_lang field.
	 * @var        int
	 */
	protected $id_lang;

	/**
	 * The value for the name field.
	 * @var        string
	 */
	protected $name;

	/**
	 * The value for the active field.
	 * Note: this column has a database default value of: 0
	 * @var        int
	 */
	protected $active;

	/**
	 * The value for the iso_code field.
	 * @var        string
	 */
	protected $iso_code;

	/**
	 * The value for the language_code field.
	 * @var        string
	 */
	protected $language_code;

	/**
	 * The value for the is_rtl field.
	 * Note: this column has a database default value of: false
	 * @var        boolean
	 */
	protected $is_rtl;

	/**
	 * @var        array Oops_Model_CategoryLang[] Collection to store aggregation of Oops_Model_CategoryLang objects.
	 */
	protected $collCategoryLangs;

	/**
	 * @var        array Oops_Model_ProductLang[] Collection to store aggregation of Oops_Model_ProductLang objects.
	 */
	protected $collProductLangs;

	/**
	 * @var        array Oops_Model_Category[] Collection to store aggregation of Oops_Model_Category objects.
	 */
	protected $collCategories;

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
	protected $categoriesScheduledForDeletion = null;

	/**
	 * An array of objects scheduled for deletion.
	 * @var		array
	 */
	protected $categoryLangsScheduledForDeletion = null;

	/**
	 * An array of objects scheduled for deletion.
	 * @var		array
	 */
	protected $productLangsScheduledForDeletion = null;

	/**
	 * Applies default values to this object.
	 * This method should be called from the object's constructor (or
	 * equivalent initialization method).
	 * @see        __construct()
	 */
	public function applyDefaultValues()
	{
		$this->active = 0;
		$this->is_rtl = false;
	}

	/**
	 * Initializes internal state of Oops_Model_Base_Lang object.
	 * @see        applyDefaults()
	 */
	public function __construct()
	{
		parent::__construct();
		$this->applyDefaultValues();
	}

	/**
	 * Get the [id_lang] column value.
	 * 
	 * @return     int
	 */
	public function getIdLang()
	{
		return $this->id_lang;
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
	 * Get the [active] column value.
	 * 
	 * @return     int
	 */
	public function getActive()
	{
		return $this->active;
	}

	/**
	 * Get the [iso_code] column value.
	 * 
	 * @return     string
	 */
	public function getIsoCode()
	{
		return $this->iso_code;
	}

	/**
	 * Get the [language_code] column value.
	 * 
	 * @return     string
	 */
	public function getLanguageCode()
	{
		return $this->language_code;
	}

	/**
	 * Get the [is_rtl] column value.
	 * 
	 * @return     boolean
	 */
	public function getIsRtl()
	{
		return $this->is_rtl;
	}

	/**
	 * Set the value of [id_lang] column.
	 * 
	 * @param      int $v new value
	 * @return     Oops_Model_Lang The current object (for fluent API support)
	 */
	public function setIdLang($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->id_lang !== $v) {
			$this->id_lang = $v;
			$this->modifiedColumns[] = Oops_Model_LangPeer::ID_LANG;
		}

		return $this;
	} // setIdLang()

	/**
	 * Set the value of [name] column.
	 * 
	 * @param      string $v new value
	 * @return     Oops_Model_Lang The current object (for fluent API support)
	 */
	public function setName($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->name !== $v) {
			$this->name = $v;
			$this->modifiedColumns[] = Oops_Model_LangPeer::NAME;
		}

		return $this;
	} // setName()

	/**
	 * Set the value of [active] column.
	 * 
	 * @param      int $v new value
	 * @return     Oops_Model_Lang The current object (for fluent API support)
	 */
	public function setActive($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->active !== $v) {
			$this->active = $v;
			$this->modifiedColumns[] = Oops_Model_LangPeer::ACTIVE;
		}

		return $this;
	} // setActive()

	/**
	 * Set the value of [iso_code] column.
	 * 
	 * @param      string $v new value
	 * @return     Oops_Model_Lang The current object (for fluent API support)
	 */
	public function setIsoCode($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->iso_code !== $v) {
			$this->iso_code = $v;
			$this->modifiedColumns[] = Oops_Model_LangPeer::ISO_CODE;
		}

		return $this;
	} // setIsoCode()

	/**
	 * Set the value of [language_code] column.
	 * 
	 * @param      string $v new value
	 * @return     Oops_Model_Lang The current object (for fluent API support)
	 */
	public function setLanguageCode($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->language_code !== $v) {
			$this->language_code = $v;
			$this->modifiedColumns[] = Oops_Model_LangPeer::LANGUAGE_CODE;
		}

		return $this;
	} // setLanguageCode()

	/**
	 * Sets the value of the [is_rtl] column.
	 * Non-boolean arguments are converted using the following rules:
	 *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * 
	 * @param      boolean|integer|string $v The new value
	 * @return     Oops_Model_Lang The current object (for fluent API support)
	 */
	public function setIsRtl($v)
	{
		if ($v !== null) {
			if (is_string($v)) {
				$v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
			} else {
				$v = (boolean) $v;
			}
		}

		if ($this->is_rtl !== $v) {
			$this->is_rtl = $v;
			$this->modifiedColumns[] = Oops_Model_LangPeer::IS_RTL;
		}

		return $this;
	} // setIsRtl()

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
			if ($this->active !== 0) {
				return false;
			}

			if ($this->is_rtl !== false) {
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

			$this->id_lang = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
			$this->name = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
			$this->active = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
			$this->iso_code = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
			$this->language_code = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
			$this->is_rtl = ($row[$startcol + 5] !== null) ? (boolean) $row[$startcol + 5] : null;
			$this->resetModified();

			$this->setNew(false);

			if ($rehydrate) {
				$this->ensureConsistency();
			}

			return $startcol + 6; // 6 = Oops_Model_LangPeer::NUM_HYDRATE_COLUMNS.

		} catch (Exception $e) {
			throw new PropelException("Error populating Oops_Model_Lang object", $e);
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
			$con = Propel::getConnection(Oops_Model_LangPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		// We don't need to alter the object instance pool; we're just modifying this instance
		// already in the pool.

		$stmt = Oops_Model_LangPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
		$row = $stmt->fetch(PDO::FETCH_NUM);
		$stmt->closeCursor();
		if (!$row) {
			throw new PropelException('Cannot find matching row in the database to reload object values.');
		}
		$this->hydrate($row, 0, true); // rehydrate

		if ($deep) {  // also de-associate any related objects?

			$this->collCategoryLangs = null;

			$this->collProductLangs = null;

			$this->collCategories = null;
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
			$con = Propel::getConnection(Oops_Model_LangPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$con->beginTransaction();
		try {
			$deleteQuery = Oops_Model_LangQuery::create()
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
			$con = Propel::getConnection(Oops_Model_LangPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
				Oops_Model_LangPeer::addInstanceToPool($this);
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

			if ($this->categoriesScheduledForDeletion !== null) {
				if (!$this->categoriesScheduledForDeletion->isEmpty()) {
					CategoryLangQuery::create()
						->filterByPrimaryKeys($this->categoriesScheduledForDeletion->getPrimaryKeys(false))
						->delete($con);
					$this->categoriesScheduledForDeletion = null;
				}

				foreach ($this->getCategories() as $category) {
					if ($category->isModified()) {
						$category->save($con);
					}
				}
			}

			if ($this->categoryLangsScheduledForDeletion !== null) {
				if (!$this->categoryLangsScheduledForDeletion->isEmpty()) {
					Oops_Model_CategoryLangQuery::create()
						->filterByPrimaryKeys($this->categoryLangsScheduledForDeletion->getPrimaryKeys(false))
						->delete($con);
					$this->categoryLangsScheduledForDeletion = null;
				}
			}

			if ($this->collCategoryLangs !== null) {
				foreach ($this->collCategoryLangs as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->productLangsScheduledForDeletion !== null) {
				if (!$this->productLangsScheduledForDeletion->isEmpty()) {
					Oops_Model_ProductLangQuery::create()
						->filterByPrimaryKeys($this->productLangsScheduledForDeletion->getPrimaryKeys(false))
						->delete($con);
					$this->productLangsScheduledForDeletion = null;
				}
			}

			if ($this->collProductLangs !== null) {
				foreach ($this->collProductLangs as $referrerFK) {
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

		$this->modifiedColumns[] = Oops_Model_LangPeer::ID_LANG;
		if (null !== $this->id_lang) {
			throw new PropelException('Cannot insert a value for auto-increment primary key (' . Oops_Model_LangPeer::ID_LANG . ')');
		}

		 // check the columns in natural order for more readable SQL queries
		if ($this->isColumnModified(Oops_Model_LangPeer::ID_LANG)) {
			$modifiedColumns[':p' . $index++]  = '`ID_LANG`';
		}
		if ($this->isColumnModified(Oops_Model_LangPeer::NAME)) {
			$modifiedColumns[':p' . $index++]  = '`NAME`';
		}
		if ($this->isColumnModified(Oops_Model_LangPeer::ACTIVE)) {
			$modifiedColumns[':p' . $index++]  = '`ACTIVE`';
		}
		if ($this->isColumnModified(Oops_Model_LangPeer::ISO_CODE)) {
			$modifiedColumns[':p' . $index++]  = '`ISO_CODE`';
		}
		if ($this->isColumnModified(Oops_Model_LangPeer::LANGUAGE_CODE)) {
			$modifiedColumns[':p' . $index++]  = '`LANGUAGE_CODE`';
		}
		if ($this->isColumnModified(Oops_Model_LangPeer::IS_RTL)) {
			$modifiedColumns[':p' . $index++]  = '`IS_RTL`';
		}

		$sql = sprintf(
			'INSERT INTO `' . _DB_PREFIX_ . 'djland_lang` (%s) VALUES (%s)',
			implode(', ', $modifiedColumns),
			implode(', ', array_keys($modifiedColumns))
		);

		try {
			$stmt = $con->prepare($sql);
			foreach ($modifiedColumns as $identifier => $columnName) {
				switch ($columnName) {
					case '`ID_LANG`':
						$stmt->bindValue($identifier, $this->id_lang, PDO::PARAM_INT);
						break;
					case '`NAME`':
						$stmt->bindValue($identifier, $this->name, PDO::PARAM_STR);
						break;
					case '`ACTIVE`':
						$stmt->bindValue($identifier, $this->active, PDO::PARAM_INT);
						break;
					case '`ISO_CODE`':
						$stmt->bindValue($identifier, $this->iso_code, PDO::PARAM_STR);
						break;
					case '`LANGUAGE_CODE`':
						$stmt->bindValue($identifier, $this->language_code, PDO::PARAM_STR);
						break;
					case '`IS_RTL`':
						$stmt->bindValue($identifier, (int) $this->is_rtl, PDO::PARAM_INT);
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
		$this->setIdLang($pk);

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


			if (($retval = Oops_Model_LangPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}


				if ($this->collCategoryLangs !== null) {
					foreach ($this->collCategoryLangs as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collProductLangs !== null) {
					foreach ($this->collProductLangs as $referrerFK) {
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
		$pos = Oops_Model_LangPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getIdLang();
				break;
			case 1:
				return $this->getName();
				break;
			case 2:
				return $this->getActive();
				break;
			case 3:
				return $this->getIsoCode();
				break;
			case 4:
				return $this->getLanguageCode();
				break;
			case 5:
				return $this->getIsRtl();
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
		if (isset($alreadyDumpedObjects['Oops_Model_Lang'][$this->getPrimaryKey()])) {
			return '*RECURSION*';
		}
		$alreadyDumpedObjects['Oops_Model_Lang'][$this->getPrimaryKey()] = true;
		$keys = Oops_Model_LangPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getIdLang(),
			$keys[1] => $this->getName(),
			$keys[2] => $this->getActive(),
			$keys[3] => $this->getIsoCode(),
			$keys[4] => $this->getLanguageCode(),
			$keys[5] => $this->getIsRtl(),
		);
		if ($includeForeignObjects) {
			if (null !== $this->collCategoryLangs) {
				$result['CategoryLangs'] = $this->collCategoryLangs->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
			}
			if (null !== $this->collProductLangs) {
				$result['ProductLangs'] = $this->collProductLangs->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
		$pos = Oops_Model_LangPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setIdLang($value);
				break;
			case 1:
				$this->setName($value);
				break;
			case 2:
				$this->setActive($value);
				break;
			case 3:
				$this->setIsoCode($value);
				break;
			case 4:
				$this->setLanguageCode($value);
				break;
			case 5:
				$this->setIsRtl($value);
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
		$keys = Oops_Model_LangPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setIdLang($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setName($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setActive($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setIsoCode($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setLanguageCode($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setIsRtl($arr[$keys[5]]);
	}

	/**
	 * Build a Criteria object containing the values of all modified columns in this object.
	 *
	 * @return     Criteria The Criteria object containing all modified values.
	 */
	public function buildCriteria()
	{
		$criteria = new Criteria(Oops_Model_LangPeer::DATABASE_NAME);

		if ($this->isColumnModified(Oops_Model_LangPeer::ID_LANG)) $criteria->add(Oops_Model_LangPeer::ID_LANG, $this->id_lang);
		if ($this->isColumnModified(Oops_Model_LangPeer::NAME)) $criteria->add(Oops_Model_LangPeer::NAME, $this->name);
		if ($this->isColumnModified(Oops_Model_LangPeer::ACTIVE)) $criteria->add(Oops_Model_LangPeer::ACTIVE, $this->active);
		if ($this->isColumnModified(Oops_Model_LangPeer::ISO_CODE)) $criteria->add(Oops_Model_LangPeer::ISO_CODE, $this->iso_code);
		if ($this->isColumnModified(Oops_Model_LangPeer::LANGUAGE_CODE)) $criteria->add(Oops_Model_LangPeer::LANGUAGE_CODE, $this->language_code);
		if ($this->isColumnModified(Oops_Model_LangPeer::IS_RTL)) $criteria->add(Oops_Model_LangPeer::IS_RTL, $this->is_rtl);

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
		$criteria = new Criteria(Oops_Model_LangPeer::DATABASE_NAME);
		$criteria->add(Oops_Model_LangPeer::ID_LANG, $this->id_lang);

		return $criteria;
	}

	/**
	 * Returns the primary key for this object (row).
	 * @return     int
	 */
	public function getPrimaryKey()
	{
		return $this->getIdLang();
	}

	/**
	 * Generic method to set the primary key (id_lang column).
	 *
	 * @param      int $key Primary key.
	 * @return     void
	 */
	public function setPrimaryKey($key)
	{
		$this->setIdLang($key);
	}

	/**
	 * Returns true if the primary key for this object is null.
	 * @return     boolean
	 */
	public function isPrimaryKeyNull()
	{
		return null === $this->getIdLang();
	}

	/**
	 * Sets contents of passed object to values from current object.
	 *
	 * If desired, this method can also make copies of all associated (fkey referrers)
	 * objects.
	 *
	 * @param      object $copyObj An object of Oops_Model_Lang (or compatible) type.
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
	 * @throws     PropelException
	 */
	public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
	{
		$copyObj->setName($this->getName());
		$copyObj->setActive($this->getActive());
		$copyObj->setIsoCode($this->getIsoCode());
		$copyObj->setLanguageCode($this->getLanguageCode());
		$copyObj->setIsRtl($this->getIsRtl());

		if ($deepCopy) {
			// important: temporarily setNew(false) because this affects the behavior of
			// the getter/setter methods for fkey referrer objects.
			$copyObj->setNew(false);

			foreach ($this->getCategoryLangs() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addCategoryLang($relObj->copy($deepCopy));
				}
			}

			foreach ($this->getProductLangs() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addProductLang($relObj->copy($deepCopy));
				}
			}

		} // if ($deepCopy)

		if ($makeNew) {
			$copyObj->setNew(true);
			$copyObj->setIdLang(NULL); // this is a auto-increment column, so set to default value
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
	 * @return     Oops_Model_Lang Clone of current object.
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
	 * @return     Oops_Model_LangPeer
	 */
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new Oops_Model_LangPeer();
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
		if ('CategoryLang' == $relationName) {
			return $this->initCategoryLangs();
		}
		if ('ProductLang' == $relationName) {
			return $this->initProductLangs();
		}
	}

	/**
	 * Clears out the collCategoryLangs collection
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addCategoryLangs()
	 */
	public function clearCategoryLangs()
	{
		$this->collCategoryLangs = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collCategoryLangs collection.
	 *
	 * By default this just sets the collCategoryLangs collection to an empty array (like clearcollCategoryLangs());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @param      boolean $overrideExisting If set to true, the method call initializes
	 *                                        the collection even if it is not empty
	 *
	 * @return     void
	 */
	public function initCategoryLangs($overrideExisting = true)
	{
		if (null !== $this->collCategoryLangs && !$overrideExisting) {
			return;
		}
		$this->collCategoryLangs = new PropelObjectCollection();
		$this->collCategoryLangs->setModel('Oops_Model_CategoryLang');
	}

	/**
	 * Gets an array of Oops_Model_CategoryLang objects which contain a foreign key that references this object.
	 *
	 * If the $criteria is not null, it is used to always fetch the results from the database.
	 * Otherwise the results are fetched from the database the first time, then cached.
	 * Next time the same method is called without $criteria, the cached collection is returned.
	 * If this Oops_Model_Lang is new, it will return
	 * an empty collection or the current collection; the criteria is ignored on a new object.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @return     PropelCollection|array Oops_Model_CategoryLang[] List of Oops_Model_CategoryLang objects
	 * @throws     PropelException
	 */
	public function getCategoryLangs($criteria = null, PropelPDO $con = null)
	{
		if(null === $this->collCategoryLangs || null !== $criteria) {
			if ($this->isNew() && null === $this->collCategoryLangs) {
				// return empty collection
				$this->initCategoryLangs();
			} else {
				$collCategoryLangs = Oops_Model_CategoryLangQuery::create(null, $criteria)
					->filterByLang($this)
					->find($con);
				if (null !== $criteria) {
					return $collCategoryLangs;
				}
				$this->collCategoryLangs = $collCategoryLangs;
			}
		}
		return $this->collCategoryLangs;
	}

	/**
	 * Sets a collection of CategoryLang objects related by a one-to-many relationship
	 * to the current object.
	 * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
	 * and new objects from the given Propel collection.
	 *
	 * @param      PropelCollection $categoryLangs A Propel collection.
	 * @param      PropelPDO $con Optional connection object
	 */
	public function setCategoryLangs(PropelCollection $categoryLangs, PropelPDO $con = null)
	{
		$this->categoryLangsScheduledForDeletion = $this->getCategoryLangs(new Criteria(), $con)->diff($categoryLangs);

		foreach ($categoryLangs as $categoryLang) {
			// Fix issue with collection modified by reference
			if ($categoryLang->isNew()) {
				$categoryLang->setLang($this);
			}
			$this->addCategoryLang($categoryLang);
		}

		$this->collCategoryLangs = $categoryLangs;
	}

	/**
	 * Returns the number of related Oops_Model_CategoryLang objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related Oops_Model_CategoryLang objects.
	 * @throws     PropelException
	 */
	public function countCategoryLangs(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if(null === $this->collCategoryLangs || null !== $criteria) {
			if ($this->isNew() && null === $this->collCategoryLangs) {
				return 0;
			} else {
				$query = Oops_Model_CategoryLangQuery::create(null, $criteria);
				if($distinct) {
					$query->distinct();
				}
				return $query
					->filterByLang($this)
					->count($con);
			}
		} else {
			return count($this->collCategoryLangs);
		}
	}

	/**
	 * Method called to associate a Oops_Model_CategoryLang object to this object
	 * through the Oops_Model_CategoryLang foreign key attribute.
	 *
	 * @param      Oops_Model_CategoryLang $l Oops_Model_CategoryLang
	 * @return     Oops_Model_Lang The current object (for fluent API support)
	 */
	public function addCategoryLang(Oops_Model_CategoryLang $l)
	{
		if ($this->collCategoryLangs === null) {
			$this->initCategoryLangs();
		}
		if (!$this->collCategoryLangs->contains($l)) { // only add it if the **same** object is not already associated
			$this->doAddCategoryLang($l);
		}

		return $this;
	}

	/**
	 * @param	CategoryLang $categoryLang The categoryLang object to add.
	 */
	protected function doAddCategoryLang($categoryLang)
	{
		$this->collCategoryLangs[]= $categoryLang;
		$categoryLang->setLang($this);
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this Lang is new, it will return
	 * an empty collection; or if this Lang has previously
	 * been saved, it will retrieve related CategoryLangs from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in Lang.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array Oops_Model_CategoryLang[] List of Oops_Model_CategoryLang objects
	 */
	public function getCategoryLangsJoinCategory($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = Oops_Model_CategoryLangQuery::create(null, $criteria);
		$query->joinWith('Category', $join_behavior);

		return $this->getCategoryLangs($query, $con);
	}

	/**
	 * Clears out the collProductLangs collection
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addProductLangs()
	 */
	public function clearProductLangs()
	{
		$this->collProductLangs = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collProductLangs collection.
	 *
	 * By default this just sets the collProductLangs collection to an empty array (like clearcollProductLangs());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @param      boolean $overrideExisting If set to true, the method call initializes
	 *                                        the collection even if it is not empty
	 *
	 * @return     void
	 */
	public function initProductLangs($overrideExisting = true)
	{
		if (null !== $this->collProductLangs && !$overrideExisting) {
			return;
		}
		$this->collProductLangs = new PropelObjectCollection();
		$this->collProductLangs->setModel('Oops_Model_ProductLang');
	}

	/**
	 * Gets an array of Oops_Model_ProductLang objects which contain a foreign key that references this object.
	 *
	 * If the $criteria is not null, it is used to always fetch the results from the database.
	 * Otherwise the results are fetched from the database the first time, then cached.
	 * Next time the same method is called without $criteria, the cached collection is returned.
	 * If this Oops_Model_Lang is new, it will return
	 * an empty collection or the current collection; the criteria is ignored on a new object.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @return     PropelCollection|array Oops_Model_ProductLang[] List of Oops_Model_ProductLang objects
	 * @throws     PropelException
	 */
	public function getProductLangs($criteria = null, PropelPDO $con = null)
	{
		if(null === $this->collProductLangs || null !== $criteria) {
			if ($this->isNew() && null === $this->collProductLangs) {
				// return empty collection
				$this->initProductLangs();
			} else {
				$collProductLangs = Oops_Model_ProductLangQuery::create(null, $criteria)
					->filterByLang($this)
					->find($con);
				if (null !== $criteria) {
					return $collProductLangs;
				}
				$this->collProductLangs = $collProductLangs;
			}
		}
		return $this->collProductLangs;
	}

	/**
	 * Sets a collection of ProductLang objects related by a one-to-many relationship
	 * to the current object.
	 * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
	 * and new objects from the given Propel collection.
	 *
	 * @param      PropelCollection $productLangs A Propel collection.
	 * @param      PropelPDO $con Optional connection object
	 */
	public function setProductLangs(PropelCollection $productLangs, PropelPDO $con = null)
	{
		$this->productLangsScheduledForDeletion = $this->getProductLangs(new Criteria(), $con)->diff($productLangs);

		foreach ($productLangs as $productLang) {
			// Fix issue with collection modified by reference
			if ($productLang->isNew()) {
				$productLang->setLang($this);
			}
			$this->addProductLang($productLang);
		}

		$this->collProductLangs = $productLangs;
	}

	/**
	 * Returns the number of related Oops_Model_ProductLang objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related Oops_Model_ProductLang objects.
	 * @throws     PropelException
	 */
	public function countProductLangs(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if(null === $this->collProductLangs || null !== $criteria) {
			if ($this->isNew() && null === $this->collProductLangs) {
				return 0;
			} else {
				$query = Oops_Model_ProductLangQuery::create(null, $criteria);
				if($distinct) {
					$query->distinct();
				}
				return $query
					->filterByLang($this)
					->count($con);
			}
		} else {
			return count($this->collProductLangs);
		}
	}

	/**
	 * Method called to associate a Oops_Model_ProductLang object to this object
	 * through the Oops_Model_ProductLang foreign key attribute.
	 *
	 * @param      Oops_Model_ProductLang $l Oops_Model_ProductLang
	 * @return     Oops_Model_Lang The current object (for fluent API support)
	 */
	public function addProductLang(Oops_Model_ProductLang $l)
	{
		if ($this->collProductLangs === null) {
			$this->initProductLangs();
		}
		if (!$this->collProductLangs->contains($l)) { // only add it if the **same** object is not already associated
			$this->doAddProductLang($l);
		}

		return $this;
	}

	/**
	 * @param	ProductLang $productLang The productLang object to add.
	 */
	protected function doAddProductLang($productLang)
	{
		$this->collProductLangs[]= $productLang;
		$productLang->setLang($this);
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this Lang is new, it will return
	 * an empty collection; or if this Lang has previously
	 * been saved, it will retrieve related ProductLangs from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in Lang.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array Oops_Model_ProductLang[] List of Oops_Model_ProductLang objects
	 */
	public function getProductLangsJoinProduct($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = Oops_Model_ProductLangQuery::create(null, $criteria);
		$query->joinWith('Product', $join_behavior);

		return $this->getProductLangs($query, $con);
	}

	/**
	 * Clears out the collCategories collection
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addCategories()
	 */
	public function clearCategories()
	{
		$this->collCategories = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collCategories collection.
	 *
	 * By default this just sets the collCategories collection to an empty collection (like clearCategories());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @return     void
	 */
	public function initCategories()
	{
		$this->collCategories = new PropelObjectCollection();
		$this->collCategories->setModel('Oops_Model_Category');
	}

	/**
	 * Gets a collection of Oops_Model_Category objects related by a many-to-many relationship
	 * to the current object by way of the djland_category_lang cross-reference table.
	 *
	 * If the $criteria is not null, it is used to always fetch the results from the database.
	 * Otherwise the results are fetched from the database the first time, then cached.
	 * Next time the same method is called without $criteria, the cached collection is returned.
	 * If this Oops_Model_Lang is new, it will return
	 * an empty collection or the current collection; the criteria is ignored on a new object.
	 *
	 * @param      Criteria $criteria Optional query object to filter the query
	 * @param      PropelPDO $con Optional connection object
	 *
	 * @return     PropelCollection|array Oops_Model_Category[] List of Oops_Model_Category objects
	 */
	public function getCategories($criteria = null, PropelPDO $con = null)
	{
		if(null === $this->collCategories || null !== $criteria) {
			if ($this->isNew() && null === $this->collCategories) {
				// return empty collection
				$this->initCategories();
			} else {
				$collCategories = Oops_Model_CategoryQuery::create(null, $criteria)
					->filterByLang($this)
					->find($con);
				if (null !== $criteria) {
					return $collCategories;
				}
				$this->collCategories = $collCategories;
			}
		}
		return $this->collCategories;
	}

	/**
	 * Sets a collection of Oops_Model_Category objects related by a many-to-many relationship
	 * to the current object by way of the djland_category_lang cross-reference table.
	 * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
	 * and new objects from the given Propel collection.
	 *
	 * @param      PropelCollection $categories A Propel collection.
	 * @param      PropelPDO $con Optional connection object
	 */
	public function setCategories(PropelCollection $categories, PropelPDO $con = null)
	{
		$oops_Model_CategoryLangs = CategoryLangQuery::create()
			->filterByOops_Model_Category($categories)
			->filterByLang($this)
			->find($con);

		$this->categoriesScheduledForDeletion = $this->getCategoryLangs()->diff($oops_Model_CategoryLangs);
		$this->collCategoryLangs = $oops_Model_CategoryLangs;

		foreach ($categories as $category) {
			// Fix issue with collection modified by reference
			if ($category->isNew()) {
				$this->doAddOops_Model_Category($category);
			} else {
				$this->addOops_Model_Category($category);
			}
		}

		$this->collCategories = $categories;
	}

	/**
	 * Gets the number of Oops_Model_Category objects related by a many-to-many relationship
	 * to the current object by way of the djland_category_lang cross-reference table.
	 *
	 * @param      Criteria $criteria Optional query object to filter the query
	 * @param      boolean $distinct Set to true to force count distinct
	 * @param      PropelPDO $con Optional connection object
	 *
	 * @return     int the number of related Oops_Model_Category objects
	 */
	public function countCategories($criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if(null === $this->collCategories || null !== $criteria) {
			if ($this->isNew() && null === $this->collCategories) {
				return 0;
			} else {
				$query = Oops_Model_CategoryQuery::create(null, $criteria);
				if($distinct) {
					$query->distinct();
				}
				return $query
					->filterByLang($this)
					->count($con);
			}
		} else {
			return count($this->collCategories);
		}
	}

	/**
	 * Associate a Oops_Model_Category object to this object
	 * through the djland_category_lang cross reference table.
	 *
	 * @param      Oops_Model_Category $category The Oops_Model_CategoryLang object to relate
	 * @return     void
	 */
	public function addCategory($category)
	{
		if ($this->collCategories === null) {
			$this->initCategories();
		}
		if (!$this->collCategories->contains($category)) { // only add it if the **same** object is not already associated
			$this->doAddCategory($category);

			$this->collCategories[]= $category;
		}
	}

	/**
	 * @param	Category $category The category object to add.
	 */
	protected function doAddCategory($category)
	{
		$categoryLang = new Oops_Model_CategoryLang();
		$categoryLang->setCategory($category);
		$this->addOops_Model_CategoryLang($categoryLang);
	}

	/**
	 * Clears the current object and sets all attributes to their default values
	 */
	public function clear()
	{
		$this->id_lang = null;
		$this->name = null;
		$this->active = null;
		$this->iso_code = null;
		$this->language_code = null;
		$this->is_rtl = null;
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
			if ($this->collCategoryLangs) {
				foreach ($this->collCategoryLangs as $o) {
					$o->clearAllReferences($deep);
				}
			}
			if ($this->collProductLangs) {
				foreach ($this->collProductLangs as $o) {
					$o->clearAllReferences($deep);
				}
			}
			if ($this->collCategories) {
				foreach ($this->collCategories as $o) {
					$o->clearAllReferences($deep);
				}
			}
		} // if ($deep)

		if ($this->collCategoryLangs instanceof PropelCollection) {
			$this->collCategoryLangs->clearIterator();
		}
		$this->collCategoryLangs = null;
		if ($this->collProductLangs instanceof PropelCollection) {
			$this->collProductLangs->clearIterator();
		}
		$this->collProductLangs = null;
		if ($this->collCategories instanceof PropelCollection) {
			$this->collCategories->clearIterator();
		}
		$this->collCategories = null;
	}

	/**
	 * Return the string representation of this object
	 *
	 * @return string
	 */
	public function __toString()
	{
		return (string) $this->exportTo(Oops_Model_LangPeer::DEFAULT_STRING_FORMAT);
	}

} // Oops_Model_Base_Lang
