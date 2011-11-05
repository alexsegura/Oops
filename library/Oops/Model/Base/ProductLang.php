<?php


/**
 * Base class that represents a row from the 'djland_product_lang' table.
 *
 * 
 *
 * @package    propel.generator.prestashop.om
 */
abstract class Oops_Model_Base_ProductLang extends BaseObject  implements Persistent
{

	/**
	 * Peer class name
	 */
	const PEER = 'Oops_Model_ProductLangPeer';

	/**
	 * The Peer class.
	 * Instance provides a convenient way of calling static methods on a class
	 * that calling code may not be able to identify.
	 * @var        Oops_Model_ProductLangPeer
	 */
	protected static $peer;

	/**
	 * The value for the id_product field.
	 * @var        int
	 */
	protected $id_product;

	/**
	 * The value for the id_lang field.
	 * @var        int
	 */
	protected $id_lang;

	/**
	 * The value for the description field.
	 * @var        string
	 */
	protected $description;

	/**
	 * The value for the description_short field.
	 * @var        string
	 */
	protected $description_short;

	/**
	 * The value for the link_rewrite field.
	 * @var        string
	 */
	protected $link_rewrite;

	/**
	 * The value for the meta_description field.
	 * @var        string
	 */
	protected $meta_description;

	/**
	 * The value for the meta_keywords field.
	 * @var        string
	 */
	protected $meta_keywords;

	/**
	 * The value for the meta_title field.
	 * @var        string
	 */
	protected $meta_title;

	/**
	 * The value for the name field.
	 * @var        string
	 */
	protected $name;

	/**
	 * The value for the available_now field.
	 * @var        string
	 */
	protected $available_now;

	/**
	 * The value for the available_later field.
	 * @var        string
	 */
	protected $available_later;

	/**
	 * @var        Product
	 */
	protected $aProduct;

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
	 * Get the [id_product] column value.
	 * 
	 * @return     int
	 */
	public function getIdProduct()
	{
		return $this->id_product;
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
	 * Get the [description] column value.
	 * 
	 * @return     string
	 */
	public function getDescription()
	{
		return $this->description;
	}

	/**
	 * Get the [description_short] column value.
	 * 
	 * @return     string
	 */
	public function getDescriptionShort()
	{
		return $this->description_short;
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
	 * Get the [meta_description] column value.
	 * 
	 * @return     string
	 */
	public function getMetaDescription()
	{
		return $this->meta_description;
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
	 * Get the [meta_title] column value.
	 * 
	 * @return     string
	 */
	public function getMetaTitle()
	{
		return $this->meta_title;
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
	 * Get the [available_now] column value.
	 * 
	 * @return     string
	 */
	public function getAvailableNow()
	{
		return $this->available_now;
	}

	/**
	 * Get the [available_later] column value.
	 * 
	 * @return     string
	 */
	public function getAvailableLater()
	{
		return $this->available_later;
	}

	/**
	 * Set the value of [id_product] column.
	 * 
	 * @param      int $v new value
	 * @return     Oops_Model_ProductLang The current object (for fluent API support)
	 */
	public function setIdProduct($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->id_product !== $v) {
			$this->id_product = $v;
			$this->modifiedColumns[] = Oops_Model_ProductLangPeer::ID_PRODUCT;
		}

		if ($this->aProduct !== null && $this->aProduct->getIdProduct() !== $v) {
			$this->aProduct = null;
		}

		return $this;
	} // setIdProduct()

	/**
	 * Set the value of [id_lang] column.
	 * 
	 * @param      int $v new value
	 * @return     Oops_Model_ProductLang The current object (for fluent API support)
	 */
	public function setIdLang($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->id_lang !== $v) {
			$this->id_lang = $v;
			$this->modifiedColumns[] = Oops_Model_ProductLangPeer::ID_LANG;
		}

		if ($this->aLang !== null && $this->aLang->getIdLang() !== $v) {
			$this->aLang = null;
		}

		return $this;
	} // setIdLang()

	/**
	 * Set the value of [description] column.
	 * 
	 * @param      string $v new value
	 * @return     Oops_Model_ProductLang The current object (for fluent API support)
	 */
	public function setDescription($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->description !== $v) {
			$this->description = $v;
			$this->modifiedColumns[] = Oops_Model_ProductLangPeer::DESCRIPTION;
		}

		return $this;
	} // setDescription()

	/**
	 * Set the value of [description_short] column.
	 * 
	 * @param      string $v new value
	 * @return     Oops_Model_ProductLang The current object (for fluent API support)
	 */
	public function setDescriptionShort($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->description_short !== $v) {
			$this->description_short = $v;
			$this->modifiedColumns[] = Oops_Model_ProductLangPeer::DESCRIPTION_SHORT;
		}

		return $this;
	} // setDescriptionShort()

	/**
	 * Set the value of [link_rewrite] column.
	 * 
	 * @param      string $v new value
	 * @return     Oops_Model_ProductLang The current object (for fluent API support)
	 */
	public function setLinkRewrite($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->link_rewrite !== $v) {
			$this->link_rewrite = $v;
			$this->modifiedColumns[] = Oops_Model_ProductLangPeer::LINK_REWRITE;
		}

		return $this;
	} // setLinkRewrite()

	/**
	 * Set the value of [meta_description] column.
	 * 
	 * @param      string $v new value
	 * @return     Oops_Model_ProductLang The current object (for fluent API support)
	 */
	public function setMetaDescription($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->meta_description !== $v) {
			$this->meta_description = $v;
			$this->modifiedColumns[] = Oops_Model_ProductLangPeer::META_DESCRIPTION;
		}

		return $this;
	} // setMetaDescription()

	/**
	 * Set the value of [meta_keywords] column.
	 * 
	 * @param      string $v new value
	 * @return     Oops_Model_ProductLang The current object (for fluent API support)
	 */
	public function setMetaKeywords($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->meta_keywords !== $v) {
			$this->meta_keywords = $v;
			$this->modifiedColumns[] = Oops_Model_ProductLangPeer::META_KEYWORDS;
		}

		return $this;
	} // setMetaKeywords()

	/**
	 * Set the value of [meta_title] column.
	 * 
	 * @param      string $v new value
	 * @return     Oops_Model_ProductLang The current object (for fluent API support)
	 */
	public function setMetaTitle($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->meta_title !== $v) {
			$this->meta_title = $v;
			$this->modifiedColumns[] = Oops_Model_ProductLangPeer::META_TITLE;
		}

		return $this;
	} // setMetaTitle()

	/**
	 * Set the value of [name] column.
	 * 
	 * @param      string $v new value
	 * @return     Oops_Model_ProductLang The current object (for fluent API support)
	 */
	public function setName($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->name !== $v) {
			$this->name = $v;
			$this->modifiedColumns[] = Oops_Model_ProductLangPeer::NAME;
		}

		return $this;
	} // setName()

	/**
	 * Set the value of [available_now] column.
	 * 
	 * @param      string $v new value
	 * @return     Oops_Model_ProductLang The current object (for fluent API support)
	 */
	public function setAvailableNow($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->available_now !== $v) {
			$this->available_now = $v;
			$this->modifiedColumns[] = Oops_Model_ProductLangPeer::AVAILABLE_NOW;
		}

		return $this;
	} // setAvailableNow()

	/**
	 * Set the value of [available_later] column.
	 * 
	 * @param      string $v new value
	 * @return     Oops_Model_ProductLang The current object (for fluent API support)
	 */
	public function setAvailableLater($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->available_later !== $v) {
			$this->available_later = $v;
			$this->modifiedColumns[] = Oops_Model_ProductLangPeer::AVAILABLE_LATER;
		}

		return $this;
	} // setAvailableLater()

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

			$this->id_product = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
			$this->id_lang = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
			$this->description = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
			$this->description_short = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
			$this->link_rewrite = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
			$this->meta_description = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
			$this->meta_keywords = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
			$this->meta_title = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
			$this->name = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
			$this->available_now = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
			$this->available_later = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
			$this->resetModified();

			$this->setNew(false);

			if ($rehydrate) {
				$this->ensureConsistency();
			}

			return $startcol + 11; // 11 = Oops_Model_ProductLangPeer::NUM_HYDRATE_COLUMNS.

		} catch (Exception $e) {
			throw new PropelException("Error populating Oops_Model_ProductLang object", $e);
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

		if ($this->aProduct !== null && $this->id_product !== $this->aProduct->getIdProduct()) {
			$this->aProduct = null;
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
			$con = Propel::getConnection(Oops_Model_ProductLangPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		// We don't need to alter the object instance pool; we're just modifying this instance
		// already in the pool.

		$stmt = Oops_Model_ProductLangPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
		$row = $stmt->fetch(PDO::FETCH_NUM);
		$stmt->closeCursor();
		if (!$row) {
			throw new PropelException('Cannot find matching row in the database to reload object values.');
		}
		$this->hydrate($row, 0, true); // rehydrate

		if ($deep) {  // also de-associate any related objects?

			$this->aProduct = null;
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
			$con = Propel::getConnection(Oops_Model_ProductLangPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$con->beginTransaction();
		try {
			$deleteQuery = Oops_Model_ProductLangQuery::create()
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
			$con = Propel::getConnection(Oops_Model_ProductLangPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
				Oops_Model_ProductLangPeer::addInstanceToPool($this);
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
		if ($this->isColumnModified(Oops_Model_ProductLangPeer::ID_PRODUCT)) {
			$modifiedColumns[':p' . $index++]  = '`ID_PRODUCT`';
		}
		if ($this->isColumnModified(Oops_Model_ProductLangPeer::ID_LANG)) {
			$modifiedColumns[':p' . $index++]  = '`ID_LANG`';
		}
		if ($this->isColumnModified(Oops_Model_ProductLangPeer::DESCRIPTION)) {
			$modifiedColumns[':p' . $index++]  = '`DESCRIPTION`';
		}
		if ($this->isColumnModified(Oops_Model_ProductLangPeer::DESCRIPTION_SHORT)) {
			$modifiedColumns[':p' . $index++]  = '`DESCRIPTION_SHORT`';
		}
		if ($this->isColumnModified(Oops_Model_ProductLangPeer::LINK_REWRITE)) {
			$modifiedColumns[':p' . $index++]  = '`LINK_REWRITE`';
		}
		if ($this->isColumnModified(Oops_Model_ProductLangPeer::META_DESCRIPTION)) {
			$modifiedColumns[':p' . $index++]  = '`META_DESCRIPTION`';
		}
		if ($this->isColumnModified(Oops_Model_ProductLangPeer::META_KEYWORDS)) {
			$modifiedColumns[':p' . $index++]  = '`META_KEYWORDS`';
		}
		if ($this->isColumnModified(Oops_Model_ProductLangPeer::META_TITLE)) {
			$modifiedColumns[':p' . $index++]  = '`META_TITLE`';
		}
		if ($this->isColumnModified(Oops_Model_ProductLangPeer::NAME)) {
			$modifiedColumns[':p' . $index++]  = '`NAME`';
		}
		if ($this->isColumnModified(Oops_Model_ProductLangPeer::AVAILABLE_NOW)) {
			$modifiedColumns[':p' . $index++]  = '`AVAILABLE_NOW`';
		}
		if ($this->isColumnModified(Oops_Model_ProductLangPeer::AVAILABLE_LATER)) {
			$modifiedColumns[':p' . $index++]  = '`AVAILABLE_LATER`';
		}

		$sql = sprintf(
			'INSERT INTO `djland_product_lang` (%s) VALUES (%s)',
			implode(', ', $modifiedColumns),
			implode(', ', array_keys($modifiedColumns))
		);

		try {
			$stmt = $con->prepare($sql);
			foreach ($modifiedColumns as $identifier => $columnName) {
				switch ($columnName) {
					case '`ID_PRODUCT`':
						$stmt->bindValue($identifier, $this->id_product, PDO::PARAM_INT);
						break;
					case '`ID_LANG`':
						$stmt->bindValue($identifier, $this->id_lang, PDO::PARAM_INT);
						break;
					case '`DESCRIPTION`':
						$stmt->bindValue($identifier, $this->description, PDO::PARAM_STR);
						break;
					case '`DESCRIPTION_SHORT`':
						$stmt->bindValue($identifier, $this->description_short, PDO::PARAM_STR);
						break;
					case '`LINK_REWRITE`':
						$stmt->bindValue($identifier, $this->link_rewrite, PDO::PARAM_STR);
						break;
					case '`META_DESCRIPTION`':
						$stmt->bindValue($identifier, $this->meta_description, PDO::PARAM_STR);
						break;
					case '`META_KEYWORDS`':
						$stmt->bindValue($identifier, $this->meta_keywords, PDO::PARAM_STR);
						break;
					case '`META_TITLE`':
						$stmt->bindValue($identifier, $this->meta_title, PDO::PARAM_STR);
						break;
					case '`NAME`':
						$stmt->bindValue($identifier, $this->name, PDO::PARAM_STR);
						break;
					case '`AVAILABLE_NOW`':
						$stmt->bindValue($identifier, $this->available_now, PDO::PARAM_STR);
						break;
					case '`AVAILABLE_LATER`':
						$stmt->bindValue($identifier, $this->available_later, PDO::PARAM_STR);
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

			if ($this->aLang !== null) {
				if (!$this->aLang->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aLang->getValidationFailures());
				}
			}


			if (($retval = Oops_Model_ProductLangPeer::doValidate($this, $columns)) !== true) {
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
		$pos = Oops_Model_ProductLangPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getIdProduct();
				break;
			case 1:
				return $this->getIdLang();
				break;
			case 2:
				return $this->getDescription();
				break;
			case 3:
				return $this->getDescriptionShort();
				break;
			case 4:
				return $this->getLinkRewrite();
				break;
			case 5:
				return $this->getMetaDescription();
				break;
			case 6:
				return $this->getMetaKeywords();
				break;
			case 7:
				return $this->getMetaTitle();
				break;
			case 8:
				return $this->getName();
				break;
			case 9:
				return $this->getAvailableNow();
				break;
			case 10:
				return $this->getAvailableLater();
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
		if (isset($alreadyDumpedObjects['Oops_Model_ProductLang'][serialize($this->getPrimaryKey())])) {
			return '*RECURSION*';
		}
		$alreadyDumpedObjects['Oops_Model_ProductLang'][serialize($this->getPrimaryKey())] = true;
		$keys = Oops_Model_ProductLangPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getIdProduct(),
			$keys[1] => $this->getIdLang(),
			$keys[2] => $this->getDescription(),
			$keys[3] => $this->getDescriptionShort(),
			$keys[4] => $this->getLinkRewrite(),
			$keys[5] => $this->getMetaDescription(),
			$keys[6] => $this->getMetaKeywords(),
			$keys[7] => $this->getMetaTitle(),
			$keys[8] => $this->getName(),
			$keys[9] => $this->getAvailableNow(),
			$keys[10] => $this->getAvailableLater(),
		);
		if ($includeForeignObjects) {
			if (null !== $this->aProduct) {
				$result['Product'] = $this->aProduct->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
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
		$pos = Oops_Model_ProductLangPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setIdProduct($value);
				break;
			case 1:
				$this->setIdLang($value);
				break;
			case 2:
				$this->setDescription($value);
				break;
			case 3:
				$this->setDescriptionShort($value);
				break;
			case 4:
				$this->setLinkRewrite($value);
				break;
			case 5:
				$this->setMetaDescription($value);
				break;
			case 6:
				$this->setMetaKeywords($value);
				break;
			case 7:
				$this->setMetaTitle($value);
				break;
			case 8:
				$this->setName($value);
				break;
			case 9:
				$this->setAvailableNow($value);
				break;
			case 10:
				$this->setAvailableLater($value);
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
		$keys = Oops_Model_ProductLangPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setIdProduct($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setIdLang($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setDescription($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setDescriptionShort($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setLinkRewrite($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setMetaDescription($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setMetaKeywords($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setMetaTitle($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setName($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setAvailableNow($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setAvailableLater($arr[$keys[10]]);
	}

	/**
	 * Build a Criteria object containing the values of all modified columns in this object.
	 *
	 * @return     Criteria The Criteria object containing all modified values.
	 */
	public function buildCriteria()
	{
		$criteria = new Criteria(Oops_Model_ProductLangPeer::DATABASE_NAME);

		if ($this->isColumnModified(Oops_Model_ProductLangPeer::ID_PRODUCT)) $criteria->add(Oops_Model_ProductLangPeer::ID_PRODUCT, $this->id_product);
		if ($this->isColumnModified(Oops_Model_ProductLangPeer::ID_LANG)) $criteria->add(Oops_Model_ProductLangPeer::ID_LANG, $this->id_lang);
		if ($this->isColumnModified(Oops_Model_ProductLangPeer::DESCRIPTION)) $criteria->add(Oops_Model_ProductLangPeer::DESCRIPTION, $this->description);
		if ($this->isColumnModified(Oops_Model_ProductLangPeer::DESCRIPTION_SHORT)) $criteria->add(Oops_Model_ProductLangPeer::DESCRIPTION_SHORT, $this->description_short);
		if ($this->isColumnModified(Oops_Model_ProductLangPeer::LINK_REWRITE)) $criteria->add(Oops_Model_ProductLangPeer::LINK_REWRITE, $this->link_rewrite);
		if ($this->isColumnModified(Oops_Model_ProductLangPeer::META_DESCRIPTION)) $criteria->add(Oops_Model_ProductLangPeer::META_DESCRIPTION, $this->meta_description);
		if ($this->isColumnModified(Oops_Model_ProductLangPeer::META_KEYWORDS)) $criteria->add(Oops_Model_ProductLangPeer::META_KEYWORDS, $this->meta_keywords);
		if ($this->isColumnModified(Oops_Model_ProductLangPeer::META_TITLE)) $criteria->add(Oops_Model_ProductLangPeer::META_TITLE, $this->meta_title);
		if ($this->isColumnModified(Oops_Model_ProductLangPeer::NAME)) $criteria->add(Oops_Model_ProductLangPeer::NAME, $this->name);
		if ($this->isColumnModified(Oops_Model_ProductLangPeer::AVAILABLE_NOW)) $criteria->add(Oops_Model_ProductLangPeer::AVAILABLE_NOW, $this->available_now);
		if ($this->isColumnModified(Oops_Model_ProductLangPeer::AVAILABLE_LATER)) $criteria->add(Oops_Model_ProductLangPeer::AVAILABLE_LATER, $this->available_later);

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
		$criteria = new Criteria(Oops_Model_ProductLangPeer::DATABASE_NAME);
		$criteria->add(Oops_Model_ProductLangPeer::ID_PRODUCT, $this->id_product);
		$criteria->add(Oops_Model_ProductLangPeer::ID_LANG, $this->id_lang);

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
		$pks[0] = $this->getIdProduct();
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
		$this->setIdProduct($keys[0]);
		$this->setIdLang($keys[1]);
	}

	/**
	 * Returns true if the primary key for this object is null.
	 * @return     boolean
	 */
	public function isPrimaryKeyNull()
	{
		return (null === $this->getIdProduct()) && (null === $this->getIdLang());
	}

	/**
	 * Sets contents of passed object to values from current object.
	 *
	 * If desired, this method can also make copies of all associated (fkey referrers)
	 * objects.
	 *
	 * @param      object $copyObj An object of Oops_Model_ProductLang (or compatible) type.
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
	 * @throws     PropelException
	 */
	public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
	{
		$copyObj->setIdProduct($this->getIdProduct());
		$copyObj->setIdLang($this->getIdLang());
		$copyObj->setDescription($this->getDescription());
		$copyObj->setDescriptionShort($this->getDescriptionShort());
		$copyObj->setLinkRewrite($this->getLinkRewrite());
		$copyObj->setMetaDescription($this->getMetaDescription());
		$copyObj->setMetaKeywords($this->getMetaKeywords());
		$copyObj->setMetaTitle($this->getMetaTitle());
		$copyObj->setName($this->getName());
		$copyObj->setAvailableNow($this->getAvailableNow());
		$copyObj->setAvailableLater($this->getAvailableLater());
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
	 * @return     Oops_Model_ProductLang Clone of current object.
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
	 * @return     Oops_Model_ProductLangPeer
	 */
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new Oops_Model_ProductLangPeer();
		}
		return self::$peer;
	}

	/**
	 * Declares an association between this object and a Oops_Model_Product object.
	 *
	 * @param      Oops_Model_Product $v
	 * @return     Oops_Model_ProductLang The current object (for fluent API support)
	 * @throws     PropelException
	 */
	public function setProduct(Oops_Model_Product $v = null)
	{
		if ($v === null) {
			$this->setIdProduct(NULL);
		} else {
			$this->setIdProduct($v->getIdProduct());
		}

		$this->aProduct = $v;

		// Add binding for other direction of this n:n relationship.
		// If this object has already been added to the Oops_Model_Product object, it will not be re-added.
		if ($v !== null) {
			$v->addProductLang($this);
		}

		return $this;
	}


	/**
	 * Get the associated Oops_Model_Product object
	 *
	 * @param      PropelPDO Optional Connection object.
	 * @return     Oops_Model_Product The associated Oops_Model_Product object.
	 * @throws     PropelException
	 */
	public function getProduct(PropelPDO $con = null)
	{
		if ($this->aProduct === null && ($this->id_product !== null)) {
			$this->aProduct = Oops_Model_ProductQuery::create()->findPk($this->id_product, $con);
			/* The following can be used additionally to
				guarantee the related object contains a reference
				to this object.  This level of coupling may, however, be
				undesirable since it could result in an only partially populated collection
				in the referenced object.
				$this->aProduct->addProductLangs($this);
			 */
		}
		return $this->aProduct;
	}

	/**
	 * Declares an association between this object and a Oops_Model_Lang object.
	 *
	 * @param      Oops_Model_Lang $v
	 * @return     Oops_Model_ProductLang The current object (for fluent API support)
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
			$v->addProductLang($this);
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
				$this->aLang->addProductLangs($this);
			 */
		}
		return $this->aLang;
	}

	/**
	 * Clears the current object and sets all attributes to their default values
	 */
	public function clear()
	{
		$this->id_product = null;
		$this->id_lang = null;
		$this->description = null;
		$this->description_short = null;
		$this->link_rewrite = null;
		$this->meta_description = null;
		$this->meta_keywords = null;
		$this->meta_title = null;
		$this->name = null;
		$this->available_now = null;
		$this->available_later = null;
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

		$this->aProduct = null;
		$this->aLang = null;
	}

	/**
	 * Return the string representation of this object
	 *
	 * @return string
	 */
	public function __toString()
	{
		return (string) $this->exportTo(Oops_Model_ProductLangPeer::DEFAULT_STRING_FORMAT);
	}

} // Oops_Model_Base_ProductLang
