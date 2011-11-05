<?php


/**
 * Base class that represents a row from the 'djland_category_lang' table.
 *
 * 
 *
 * @package    propel.generator.prestashop.om
 */
abstract class Oops_Model_Base_CategoryLang extends BaseObject  implements Persistent
{

	/**
	 * Peer class name
	 */
	const PEER = 'Oops_Model_CategoryLangPeer';

	/**
	 * The Peer class.
	 * Instance provides a convenient way of calling static methods on a class
	 * that calling code may not be able to identify.
	 * @var        Oops_Model_CategoryLangPeer
	 */
	protected static $peer;

	/**
	 * The value for the id_category field.
	 * @var        int
	 */
	protected $id_category;

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
	 * The value for the description field.
	 * @var        string
	 */
	protected $description;

	/**
	 * The value for the link_rewrite field.
	 * @var        string
	 */
	protected $link_rewrite;

	/**
	 * The value for the meta_title field.
	 * @var        string
	 */
	protected $meta_title;

	/**
	 * The value for the meta_keywords field.
	 * @var        string
	 */
	protected $meta_keywords;

	/**
	 * The value for the meta_description field.
	 * @var        string
	 */
	protected $meta_description;

	/**
	 * @var        Category
	 */
	protected $aCategory;

	/**
	 * @var        Lang
	 */
	protected $aLang;

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
	 * Get the [id_category] column value.
	 * 
	 * @return     int
	 */
	public function getIdCategory()
	{
		return $this->id_category;
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
	 * Get the [description] column value.
	 * 
	 * @return     string
	 */
	public function getDescription()
	{
		return $this->description;
	}

	/**
	 * Get the [link_rewrite] column value.
	 * 
	 * @return     string
	 */
	public function getLinkRewrite()
	{
		return $this->link_rewrite;
	}

	/**
	 * Get the [meta_title] column value.
	 * 
	 * @return     string
	 */
	public function getMetaTitle()
	{
		return $this->meta_title;
	}

	/**
	 * Get the [meta_keywords] column value.
	 * 
	 * @return     string
	 */
	public function getMetaKeywords()
	{
		return $this->meta_keywords;
	}

	/**
	 * Get the [meta_description] column value.
	 * 
	 * @return     string
	 */
	public function getMetaDescription()
	{
		return $this->meta_description;
	}

	/**
	 * Set the value of [id_category] column.
	 * 
	 * @param      int $v new value
	 * @return     Oops_Model_CategoryLang The current object (for fluent API support)
	 */
	public function setIdCategory($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->id_category !== $v) {
			$this->id_category = $v;
			$this->modifiedColumns[] = Oops_Model_CategoryLangPeer::ID_CATEGORY;
		}

		if ($this->aCategory !== null && $this->aCategory->getIdCategory() !== $v) {
			$this->aCategory = null;
		}

		return $this;
	} // setIdCategory()

	/**
	 * Set the value of [id_lang] column.
	 * 
	 * @param      int $v new value
	 * @return     Oops_Model_CategoryLang The current object (for fluent API support)
	 */
	public function setIdLang($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->id_lang !== $v) {
			$this->id_lang = $v;
			$this->modifiedColumns[] = Oops_Model_CategoryLangPeer::ID_LANG;
		}

		if ($this->aLang !== null && $this->aLang->getIdLang() !== $v) {
			$this->aLang = null;
		}

		return $this;
	} // setIdLang()

	/**
	 * Set the value of [name] column.
	 * 
	 * @param      string $v new value
	 * @return     Oops_Model_CategoryLang The current object (for fluent API support)
	 */
	public function setName($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->name !== $v) {
			$this->name = $v;
			$this->modifiedColumns[] = Oops_Model_CategoryLangPeer::NAME;
		}

		return $this;
	} // setName()

	/**
	 * Set the value of [description] column.
	 * 
	 * @param      string $v new value
	 * @return     Oops_Model_CategoryLang The current object (for fluent API support)
	 */
	public function setDescription($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->description !== $v) {
			$this->description = $v;
			$this->modifiedColumns[] = Oops_Model_CategoryLangPeer::DESCRIPTION;
		}

		return $this;
	} // setDescription()

	/**
	 * Set the value of [link_rewrite] column.
	 * 
	 * @param      string $v new value
	 * @return     Oops_Model_CategoryLang The current object (for fluent API support)
	 */
	public function setLinkRewrite($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->link_rewrite !== $v) {
			$this->link_rewrite = $v;
			$this->modifiedColumns[] = Oops_Model_CategoryLangPeer::LINK_REWRITE;
		}

		return $this;
	} // setLinkRewrite()

	/**
	 * Set the value of [meta_title] column.
	 * 
	 * @param      string $v new value
	 * @return     Oops_Model_CategoryLang The current object (for fluent API support)
	 */
	public function setMetaTitle($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->meta_title !== $v) {
			$this->meta_title = $v;
			$this->modifiedColumns[] = Oops_Model_CategoryLangPeer::META_TITLE;
		}

		return $this;
	} // setMetaTitle()

	/**
	 * Set the value of [meta_keywords] column.
	 * 
	 * @param      string $v new value
	 * @return     Oops_Model_CategoryLang The current object (for fluent API support)
	 */
	public function setMetaKeywords($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->meta_keywords !== $v) {
			$this->meta_keywords = $v;
			$this->modifiedColumns[] = Oops_Model_CategoryLangPeer::META_KEYWORDS;
		}

		return $this;
	} // setMetaKeywords()

	/**
	 * Set the value of [meta_description] column.
	 * 
	 * @param      string $v new value
	 * @return     Oops_Model_CategoryLang The current object (for fluent API support)
	 */
	public function setMetaDescription($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->meta_description !== $v) {
			$this->meta_description = $v;
			$this->modifiedColumns[] = Oops_Model_CategoryLangPeer::META_DESCRIPTION;
		}

		return $this;
	} // setMetaDescription()

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

			$this->id_category = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
			$this->id_lang = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
			$this->name = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
			$this->description = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
			$this->link_rewrite = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
			$this->meta_title = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
			$this->meta_keywords = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
			$this->meta_description = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
			$this->resetModified();

			$this->setNew(false);

			if ($rehydrate) {
				$this->ensureConsistency();
			}

			return $startcol + 8; // 8 = Oops_Model_CategoryLangPeer::NUM_HYDRATE_COLUMNS.

		} catch (Exception $e) {
			throw new PropelException("Error populating Oops_Model_CategoryLang object", $e);
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

		if ($this->aCategory !== null && $this->id_category !== $this->aCategory->getIdCategory()) {
			$this->aCategory = null;
		}
		if ($this->aLang !== null && $this->id_lang !== $this->aLang->getIdLang()) {
			$this->aLang = null;
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
			$con = Propel::getConnection(Oops_Model_CategoryLangPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		// We don't need to alter the object instance pool; we're just modifying this instance
		// already in the pool.

		$stmt = Oops_Model_CategoryLangPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
		$row = $stmt->fetch(PDO::FETCH_NUM);
		$stmt->closeCursor();
		if (!$row) {
			throw new PropelException('Cannot find matching row in the database to reload object values.');
		}
		$this->hydrate($row, 0, true); // rehydrate

		if ($deep) {  // also de-associate any related objects?

			$this->aCategory = null;
			$this->aLang = null;
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
			$con = Propel::getConnection(Oops_Model_CategoryLangPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$con->beginTransaction();
		try {
			$deleteQuery = Oops_Model_CategoryLangQuery::create()
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
			$con = Propel::getConnection(Oops_Model_CategoryLangPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
				Oops_Model_CategoryLangPeer::addInstanceToPool($this);
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

			if ($this->aCategory !== null) {
				if ($this->aCategory->isModified() || $this->aCategory->isNew()) {
					$affectedRows += $this->aCategory->save($con);
				}
				$this->setCategory($this->aCategory);
			}

			if ($this->aLang !== null) {
				if ($this->aLang->isModified() || $this->aLang->isNew()) {
					$affectedRows += $this->aLang->save($con);
				}
				$this->setLang($this->aLang);
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
		if ($this->isColumnModified(Oops_Model_CategoryLangPeer::ID_CATEGORY)) {
			$modifiedColumns[':p' . $index++]  = '`ID_CATEGORY`';
		}
		if ($this->isColumnModified(Oops_Model_CategoryLangPeer::ID_LANG)) {
			$modifiedColumns[':p' . $index++]  = '`ID_LANG`';
		}
		if ($this->isColumnModified(Oops_Model_CategoryLangPeer::NAME)) {
			$modifiedColumns[':p' . $index++]  = '`NAME`';
		}
		if ($this->isColumnModified(Oops_Model_CategoryLangPeer::DESCRIPTION)) {
			$modifiedColumns[':p' . $index++]  = '`DESCRIPTION`';
		}
		if ($this->isColumnModified(Oops_Model_CategoryLangPeer::LINK_REWRITE)) {
			$modifiedColumns[':p' . $index++]  = '`LINK_REWRITE`';
		}
		if ($this->isColumnModified(Oops_Model_CategoryLangPeer::META_TITLE)) {
			$modifiedColumns[':p' . $index++]  = '`META_TITLE`';
		}
		if ($this->isColumnModified(Oops_Model_CategoryLangPeer::META_KEYWORDS)) {
			$modifiedColumns[':p' . $index++]  = '`META_KEYWORDS`';
		}
		if ($this->isColumnModified(Oops_Model_CategoryLangPeer::META_DESCRIPTION)) {
			$modifiedColumns[':p' . $index++]  = '`META_DESCRIPTION`';
		}

		$sql = sprintf(
			'INSERT INTO `djland_category_lang` (%s) VALUES (%s)',
			implode(', ', $modifiedColumns),
			implode(', ', array_keys($modifiedColumns))
		);

		try {
			$stmt = $con->prepare($sql);
			foreach ($modifiedColumns as $identifier => $columnName) {
				switch ($columnName) {
					case '`ID_CATEGORY`':
						$stmt->bindValue($identifier, $this->id_category, PDO::PARAM_INT);
						break;
					case '`ID_LANG`':
						$stmt->bindValue($identifier, $this->id_lang, PDO::PARAM_INT);
						break;
					case '`NAME`':
						$stmt->bindValue($identifier, $this->name, PDO::PARAM_STR);
						break;
					case '`DESCRIPTION`':
						$stmt->bindValue($identifier, $this->description, PDO::PARAM_STR);
						break;
					case '`LINK_REWRITE`':
						$stmt->bindValue($identifier, $this->link_rewrite, PDO::PARAM_STR);
						break;
					case '`META_TITLE`':
						$stmt->bindValue($identifier, $this->meta_title, PDO::PARAM_STR);
						break;
					case '`META_KEYWORDS`':
						$stmt->bindValue($identifier, $this->meta_keywords, PDO::PARAM_STR);
						break;
					case '`META_DESCRIPTION`':
						$stmt->bindValue($identifier, $this->meta_description, PDO::PARAM_STR);
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

			if ($this->aCategory !== null) {
				if (!$this->aCategory->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aCategory->getValidationFailures());
				}
			}

			if ($this->aLang !== null) {
				if (!$this->aLang->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aLang->getValidationFailures());
				}
			}


			if (($retval = Oops_Model_CategoryLangPeer::doValidate($this, $columns)) !== true) {
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
		$pos = Oops_Model_CategoryLangPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getIdCategory();
				break;
			case 1:
				return $this->getIdLang();
				break;
			case 2:
				return $this->getName();
				break;
			case 3:
				return $this->getDescription();
				break;
			case 4:
				return $this->getLinkRewrite();
				break;
			case 5:
				return $this->getMetaTitle();
				break;
			case 6:
				return $this->getMetaKeywords();
				break;
			case 7:
				return $this->getMetaDescription();
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
		if (isset($alreadyDumpedObjects['Oops_Model_CategoryLang'][serialize($this->getPrimaryKey())])) {
			return '*RECURSION*';
		}
		$alreadyDumpedObjects['Oops_Model_CategoryLang'][serialize($this->getPrimaryKey())] = true;
		$keys = Oops_Model_CategoryLangPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getIdCategory(),
			$keys[1] => $this->getIdLang(),
			$keys[2] => $this->getName(),
			$keys[3] => $this->getDescription(),
			$keys[4] => $this->getLinkRewrite(),
			$keys[5] => $this->getMetaTitle(),
			$keys[6] => $this->getMetaKeywords(),
			$keys[7] => $this->getMetaDescription(),
		);
		if ($includeForeignObjects) {
			if (null !== $this->aCategory) {
				$result['Category'] = $this->aCategory->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
			}
			if (null !== $this->aLang) {
				$result['Lang'] = $this->aLang->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
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
		$pos = Oops_Model_CategoryLangPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setIdCategory($value);
				break;
			case 1:
				$this->setIdLang($value);
				break;
			case 2:
				$this->setName($value);
				break;
			case 3:
				$this->setDescription($value);
				break;
			case 4:
				$this->setLinkRewrite($value);
				break;
			case 5:
				$this->setMetaTitle($value);
				break;
			case 6:
				$this->setMetaKeywords($value);
				break;
			case 7:
				$this->setMetaDescription($value);
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
		$keys = Oops_Model_CategoryLangPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setIdCategory($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setIdLang($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setName($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setDescription($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setLinkRewrite($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setMetaTitle($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setMetaKeywords($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setMetaDescription($arr[$keys[7]]);
	}

	/**
	 * Build a Criteria object containing the values of all modified columns in this object.
	 *
	 * @return     Criteria The Criteria object containing all modified values.
	 */
	public function buildCriteria()
	{
		$criteria = new Criteria(Oops_Model_CategoryLangPeer::DATABASE_NAME);

		if ($this->isColumnModified(Oops_Model_CategoryLangPeer::ID_CATEGORY)) $criteria->add(Oops_Model_CategoryLangPeer::ID_CATEGORY, $this->id_category);
		if ($this->isColumnModified(Oops_Model_CategoryLangPeer::ID_LANG)) $criteria->add(Oops_Model_CategoryLangPeer::ID_LANG, $this->id_lang);
		if ($this->isColumnModified(Oops_Model_CategoryLangPeer::NAME)) $criteria->add(Oops_Model_CategoryLangPeer::NAME, $this->name);
		if ($this->isColumnModified(Oops_Model_CategoryLangPeer::DESCRIPTION)) $criteria->add(Oops_Model_CategoryLangPeer::DESCRIPTION, $this->description);
		if ($this->isColumnModified(Oops_Model_CategoryLangPeer::LINK_REWRITE)) $criteria->add(Oops_Model_CategoryLangPeer::LINK_REWRITE, $this->link_rewrite);
		if ($this->isColumnModified(Oops_Model_CategoryLangPeer::META_TITLE)) $criteria->add(Oops_Model_CategoryLangPeer::META_TITLE, $this->meta_title);
		if ($this->isColumnModified(Oops_Model_CategoryLangPeer::META_KEYWORDS)) $criteria->add(Oops_Model_CategoryLangPeer::META_KEYWORDS, $this->meta_keywords);
		if ($this->isColumnModified(Oops_Model_CategoryLangPeer::META_DESCRIPTION)) $criteria->add(Oops_Model_CategoryLangPeer::META_DESCRIPTION, $this->meta_description);

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
		$criteria = new Criteria(Oops_Model_CategoryLangPeer::DATABASE_NAME);
		$criteria->add(Oops_Model_CategoryLangPeer::ID_CATEGORY, $this->id_category);
		$criteria->add(Oops_Model_CategoryLangPeer::ID_LANG, $this->id_lang);

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
		$pks[0] = $this->getIdCategory();
		$pks[1] = $this->getIdLang();

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
		$this->setIdCategory($keys[0]);
		$this->setIdLang($keys[1]);
	}

	/**
	 * Returns true if the primary key for this object is null.
	 * @return     boolean
	 */
	public function isPrimaryKeyNull()
	{
		return (null === $this->getIdCategory()) && (null === $this->getIdLang());
	}

	/**
	 * Sets contents of passed object to values from current object.
	 *
	 * If desired, this method can also make copies of all associated (fkey referrers)
	 * objects.
	 *
	 * @param      object $copyObj An object of Oops_Model_CategoryLang (or compatible) type.
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
	 * @throws     PropelException
	 */
	public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
	{
		$copyObj->setIdCategory($this->getIdCategory());
		$copyObj->setIdLang($this->getIdLang());
		$copyObj->setName($this->getName());
		$copyObj->setDescription($this->getDescription());
		$copyObj->setLinkRewrite($this->getLinkRewrite());
		$copyObj->setMetaTitle($this->getMetaTitle());
		$copyObj->setMetaKeywords($this->getMetaKeywords());
		$copyObj->setMetaDescription($this->getMetaDescription());
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
	 * @return     Oops_Model_CategoryLang Clone of current object.
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
	 * @return     Oops_Model_CategoryLangPeer
	 */
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new Oops_Model_CategoryLangPeer();
		}
		return self::$peer;
	}

	/**
	 * Declares an association between this object and a Oops_Model_Category object.
	 *
	 * @param      Oops_Model_Category $v
	 * @return     Oops_Model_CategoryLang The current object (for fluent API support)
	 * @throws     PropelException
	 */
	public function setCategory(Oops_Model_Category $v = null)
	{
		if ($v === null) {
			$this->setIdCategory(NULL);
		} else {
			$this->setIdCategory($v->getIdCategory());
		}

		$this->aCategory = $v;

		// Add binding for other direction of this n:n relationship.
		// If this object has already been added to the Oops_Model_Category object, it will not be re-added.
		if ($v !== null) {
			$v->addCategoryLang($this);
		}

		return $this;
	}


	/**
	 * Get the associated Oops_Model_Category object
	 *
	 * @param      PropelPDO Optional Connection object.
	 * @return     Oops_Model_Category The associated Oops_Model_Category object.
	 * @throws     PropelException
	 */
	public function getCategory(PropelPDO $con = null)
	{
		if ($this->aCategory === null && ($this->id_category !== null)) {
			$this->aCategory = Oops_Model_CategoryQuery::create()->findPk($this->id_category, $con);
			/* The following can be used additionally to
				guarantee the related object contains a reference
				to this object.  This level of coupling may, however, be
				undesirable since it could result in an only partially populated collection
				in the referenced object.
				$this->aCategory->addCategoryLangs($this);
			 */
		}
		return $this->aCategory;
	}

	/**
	 * Declares an association between this object and a Oops_Model_Lang object.
	 *
	 * @param      Oops_Model_Lang $v
	 * @return     Oops_Model_CategoryLang The current object (for fluent API support)
	 * @throws     PropelException
	 */
	public function setLang(Oops_Model_Lang $v = null)
	{
		if ($v === null) {
			$this->setIdLang(NULL);
		} else {
			$this->setIdLang($v->getIdLang());
		}

		$this->aLang = $v;

		// Add binding for other direction of this n:n relationship.
		// If this object has already been added to the Oops_Model_Lang object, it will not be re-added.
		if ($v !== null) {
			$v->addCategoryLang($this);
		}

		return $this;
	}


	/**
	 * Get the associated Oops_Model_Lang object
	 *
	 * @param      PropelPDO Optional Connection object.
	 * @return     Oops_Model_Lang The associated Oops_Model_Lang object.
	 * @throws     PropelException
	 */
	public function getLang(PropelPDO $con = null)
	{
		if ($this->aLang === null && ($this->id_lang !== null)) {
			$this->aLang = Oops_Model_LangQuery::create()->findPk($this->id_lang, $con);
			/* The following can be used additionally to
				guarantee the related object contains a reference
				to this object.  This level of coupling may, however, be
				undesirable since it could result in an only partially populated collection
				in the referenced object.
				$this->aLang->addCategoryLangs($this);
			 */
		}
		return $this->aLang;
	}

	/**
	 * Clears the current object and sets all attributes to their default values
	 */
	public function clear()
	{
		$this->id_category = null;
		$this->id_lang = null;
		$this->name = null;
		$this->description = null;
		$this->link_rewrite = null;
		$this->meta_title = null;
		$this->meta_keywords = null;
		$this->meta_description = null;
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

		$this->aCategory = null;
		$this->aLang = null;
	}

	/**
	 * Return the string representation of this object
	 *
	 * @return string
	 */
	public function __toString()
	{
		return (string) $this->exportTo(Oops_Model_CategoryLangPeer::DEFAULT_STRING_FORMAT);
	}

} // Oops_Model_Base_CategoryLang
