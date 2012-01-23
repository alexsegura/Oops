<?php


/**
 * Base class that represents a row from the 'category' table.
 *
 * 
 *
 * @package    propel.generator.prestashop.om
 */
abstract class Oops_Db_Propel_Category extends BaseObject  implements Persistent
{

	/**
	 * Peer class name
	 */
	const PEER = 'Oops_Db_CategoryPeer';

	/**
	 * The Peer class.
	 * Instance provides a convenient way of calling static methods on a class
	 * that calling code may not be able to identify.
	 * @var        Oops_Db_CategoryPeer
	 */
	protected static $peer;

	/**
	 * The value for the id_category field.
	 * @var        int
	 */
	protected $id_category;

	/**
	 * The value for the id_parent field.
	 * @var        int
	 */
	protected $id_parent;

	/**
	 * The value for the level_depth field.
	 * Note: this column has a database default value of: 0
	 * @var        int
	 */
	protected $level_depth;

	/**
	 * The value for the nleft field.
	 * Note: this column has a database default value of: 0
	 * @var        int
	 */
	protected $nleft;

	/**
	 * The value for the nright field.
	 * Note: this column has a database default value of: 0
	 * @var        int
	 */
	protected $nright;

	/**
	 * The value for the active field.
	 * Note: this column has a database default value of: false
	 * @var        boolean
	 */
	protected $active;

	/**
	 * The value for the date_add field.
	 * @var        string
	 */
	protected $date_add;

	/**
	 * The value for the date_upd field.
	 * @var        string
	 */
	protected $date_upd;

	/**
	 * The value for the position field.
	 * Note: this column has a database default value of: 0
	 * @var        int
	 */
	protected $position;

	/**
	 * @var        array Oops_Db_CategoryLang[] Collection to store aggregation of Oops_Db_CategoryLang objects.
	 */
	protected $collCategoryLangs;

	/**
	 * @var        array Oops_Db_CategoryProduct[] Collection to store aggregation of Oops_Db_CategoryProduct objects.
	 */
	protected $collCategoryProducts;

	/**
	 * @var        array Oops_Db_Lang[] Collection to store aggregation of Oops_Db_Lang objects.
	 */
	protected $collLangs;

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

	// nested_set behavior
	
	/**
	 * Queries to be executed in the save transaction
	 * @var        array
	 */
	protected $nestedSetQueries = array();
	
	/**
	 * Internal cache for children nodes
	 * @var        null|PropelObjectCollection
	 */
	protected $collNestedSetChildren = null;
	
	/**
	 * Internal cache for parent node
	 * @var        null|Oops_Db_Category
	 */
	protected $aNestedSetParent = null;
	

	// i18n behavior
	
	/**
	 * Current locale
	 * @var        string
	 */
	protected $currentLocale = '1';
	
	/**
	 * Current translation objects
	 * @var        array[Oops_Db_CategoryLang]
	 */
	protected $currentTranslations;

	/**
	 * An array of objects scheduled for deletion.
	 * @var		array
	 */
	protected $langsScheduledForDeletion = null;

	/**
	 * An array of objects scheduled for deletion.
	 * @var		array
	 */
	protected $productsScheduledForDeletion = null;

	/**
	 * An array of objects scheduled for deletion.
	 * @var		array
	 */
	protected $categoryLangsScheduledForDeletion = null;

	/**
	 * An array of objects scheduled for deletion.
	 * @var		array
	 */
	protected $categoryProductsScheduledForDeletion = null;

	/**
	 * Applies default values to this object.
	 * This method should be called from the object's constructor (or
	 * equivalent initialization method).
	 * @see        __construct()
	 */
	public function applyDefaultValues()
	{
		$this->level_depth = 0;
		$this->nleft = 0;
		$this->nright = 0;
		$this->active = false;
		$this->position = 0;
	}

	/**
	 * Initializes internal state of Oops_Db_Propel_Category object.
	 * @see        applyDefaults()
	 */
	public function __construct()
	{
		parent::__construct();
		$this->applyDefaultValues();
	}

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
	 * Get the [id_parent] column value.
	 * 
	 * @return     int
	 */
	public function getIdParent()
	{
		return $this->id_parent;
	}

	/**
	 * Get the [level_depth] column value.
	 * 
	 * @return     int
	 */
	public function getLevelDepth()
	{
		return $this->level_depth;
	}

	/**
	 * Get the [nleft] column value.
	 * 
	 * @return     int
	 */
	public function getNleft()
	{
		return $this->nleft;
	}

	/**
	 * Get the [nright] column value.
	 * 
	 * @return     int
	 */
	public function getNright()
	{
		return $this->nright;
	}

	/**
	 * Get the [active] column value.
	 * 
	 * @return     boolean
	 */
	public function getActive()
	{
		return $this->active;
	}

	/**
	 * Get the [optionally formatted] temporal [date_add] column value.
	 * 
	 *
	 * @param      string $format The date/time format string (either date()-style or strftime()-style).
	 *							If format is NULL, then the raw DateTime object will be returned.
	 * @return     mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00 00:00:00
	 * @throws     PropelException - if unable to parse/validate the date/time value.
	 */
	public function getDateAdd($format = 'Y-m-d H:i:s')
	{
		if ($this->date_add === null) {
			return null;
		}


		if ($this->date_add === '0000-00-00 00:00:00') {
			// while technically this is not a default value of NULL,
			// this seems to be closest in meaning.
			return null;
		} else {
			try {
				$dt = new DateTime($this->date_add);
			} catch (Exception $x) {
				throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->date_add, true), $x);
			}
		}

		if ($format === null) {
			// Because propel.useDateTimeClass is TRUE, we return a DateTime object.
			return $dt;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $dt->format('U'));
		} else {
			return $dt->format($format);
		}
	}

	/**
	 * Get the [optionally formatted] temporal [date_upd] column value.
	 * 
	 *
	 * @param      string $format The date/time format string (either date()-style or strftime()-style).
	 *							If format is NULL, then the raw DateTime object will be returned.
	 * @return     mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00 00:00:00
	 * @throws     PropelException - if unable to parse/validate the date/time value.
	 */
	public function getDateUpd($format = 'Y-m-d H:i:s')
	{
		if ($this->date_upd === null) {
			return null;
		}


		if ($this->date_upd === '0000-00-00 00:00:00') {
			// while technically this is not a default value of NULL,
			// this seems to be closest in meaning.
			return null;
		} else {
			try {
				$dt = new DateTime($this->date_upd);
			} catch (Exception $x) {
				throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->date_upd, true), $x);
			}
		}

		if ($format === null) {
			// Because propel.useDateTimeClass is TRUE, we return a DateTime object.
			return $dt;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $dt->format('U'));
		} else {
			return $dt->format($format);
		}
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
	 * Set the value of [id_category] column.
	 * 
	 * @param      int $v new value
	 * @return     Oops_Db_Category The current object (for fluent API support)
	 */
	public function setIdCategory($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->id_category !== $v) {
			$this->id_category = $v;
			$this->modifiedColumns[] = Oops_Db_CategoryPeer::ID_CATEGORY;
		}

		return $this;
	} // setIdCategory()

	/**
	 * Set the value of [id_parent] column.
	 * 
	 * @param      int $v new value
	 * @return     Oops_Db_Category The current object (for fluent API support)
	 */
	public function setIdParent($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->id_parent !== $v) {
			$this->id_parent = $v;
			$this->modifiedColumns[] = Oops_Db_CategoryPeer::ID_PARENT;
		}

		return $this;
	} // setIdParent()

	/**
	 * Set the value of [level_depth] column.
	 * 
	 * @param      int $v new value
	 * @return     Oops_Db_Category The current object (for fluent API support)
	 */
	public function setLevelDepth($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->level_depth !== $v) {
			$this->level_depth = $v;
			$this->modifiedColumns[] = Oops_Db_CategoryPeer::LEVEL_DEPTH;
		}

		return $this;
	} // setLevelDepth()

	/**
	 * Set the value of [nleft] column.
	 * 
	 * @param      int $v new value
	 * @return     Oops_Db_Category The current object (for fluent API support)
	 */
	public function setNleft($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->nleft !== $v) {
			$this->nleft = $v;
			$this->modifiedColumns[] = Oops_Db_CategoryPeer::NLEFT;
		}

		return $this;
	} // setNleft()

	/**
	 * Set the value of [nright] column.
	 * 
	 * @param      int $v new value
	 * @return     Oops_Db_Category The current object (for fluent API support)
	 */
	public function setNright($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->nright !== $v) {
			$this->nright = $v;
			$this->modifiedColumns[] = Oops_Db_CategoryPeer::NRIGHT;
		}

		return $this;
	} // setNright()

	/**
	 * Sets the value of the [active] column.
	 * Non-boolean arguments are converted using the following rules:
	 *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * 
	 * @param      boolean|integer|string $v The new value
	 * @return     Oops_Db_Category The current object (for fluent API support)
	 */
	public function setActive($v)
	{
		if ($v !== null) {
			if (is_string($v)) {
				$v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
			} else {
				$v = (boolean) $v;
			}
		}

		if ($this->active !== $v) {
			$this->active = $v;
			$this->modifiedColumns[] = Oops_Db_CategoryPeer::ACTIVE;
		}

		return $this;
	} // setActive()

	/**
	 * Sets the value of [date_add] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.
	 *               Empty strings are treated as NULL.
	 * @return     Oops_Db_Category The current object (for fluent API support)
	 */
	public function setDateAdd($v)
	{
		$dt = PropelDateTime::newInstance($v, null, 'DateTime');
		if ($this->date_add !== null || $dt !== null) {
			$currentDateAsString = ($this->date_add !== null && $tmpDt = new DateTime($this->date_add)) ? $tmpDt->format('Y-m-d H:i:s') : null;
			$newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
			if ($currentDateAsString !== $newDateAsString) {
				$this->date_add = $newDateAsString;
				$this->modifiedColumns[] = Oops_Db_CategoryPeer::DATE_ADD;
			}
		} // if either are not null

		return $this;
	} // setDateAdd()

	/**
	 * Sets the value of [date_upd] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.
	 *               Empty strings are treated as NULL.
	 * @return     Oops_Db_Category The current object (for fluent API support)
	 */
	public function setDateUpd($v)
	{
		$dt = PropelDateTime::newInstance($v, null, 'DateTime');
		if ($this->date_upd !== null || $dt !== null) {
			$currentDateAsString = ($this->date_upd !== null && $tmpDt = new DateTime($this->date_upd)) ? $tmpDt->format('Y-m-d H:i:s') : null;
			$newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
			if ($currentDateAsString !== $newDateAsString) {
				$this->date_upd = $newDateAsString;
				$this->modifiedColumns[] = Oops_Db_CategoryPeer::DATE_UPD;
			}
		} // if either are not null

		return $this;
	} // setDateUpd()

	/**
	 * Set the value of [position] column.
	 * 
	 * @param      int $v new value
	 * @return     Oops_Db_Category The current object (for fluent API support)
	 */
	public function setPosition($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->position !== $v) {
			$this->position = $v;
			$this->modifiedColumns[] = Oops_Db_CategoryPeer::POSITION;
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
			if ($this->level_depth !== 0) {
				return false;
			}

			if ($this->nleft !== 0) {
				return false;
			}

			if ($this->nright !== 0) {
				return false;
			}

			if ($this->active !== false) {
				return false;
			}

			if ($this->position !== 0) {
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

			$this->id_category = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
			$this->id_parent = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
			$this->level_depth = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
			$this->nleft = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
			$this->nright = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
			$this->active = ($row[$startcol + 5] !== null) ? (boolean) $row[$startcol + 5] : null;
			$this->date_add = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
			$this->date_upd = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
			$this->position = ($row[$startcol + 8] !== null) ? (int) $row[$startcol + 8] : null;
			$this->resetModified();

			$this->setNew(false);

			if ($rehydrate) {
				$this->ensureConsistency();
			}

			return $startcol + 9; // 9 = Oops_Db_CategoryPeer::NUM_HYDRATE_COLUMNS.

		} catch (Exception $e) {
			throw new PropelException("Error populating Oops_Db_Category object", $e);
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
			$con = Propel::getConnection(Oops_Db_CategoryPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		// We don't need to alter the object instance pool; we're just modifying this instance
		// already in the pool.

		$stmt = Oops_Db_CategoryPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
		$row = $stmt->fetch(PDO::FETCH_NUM);
		$stmt->closeCursor();
		if (!$row) {
			throw new PropelException('Cannot find matching row in the database to reload object values.');
		}
		$this->hydrate($row, 0, true); // rehydrate

		if ($deep) {  // also de-associate any related objects?

			$this->collCategoryLangs = null;

			$this->collCategoryProducts = null;

			$this->collLangs = null;
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
			$con = Propel::getConnection(Oops_Db_CategoryPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$con->beginTransaction();
		try {
			$deleteQuery = Oops_Db_CategoryQuery::create()
				->filterByPrimaryKey($this->getPrimaryKey());
			$ret = $this->preDelete($con);
			// nested_set behavior
			if ($this->isRoot()) {
				throw new PropelException('Deletion of a root node is disabled for nested sets. Use Oops_Db_CategoryPeer::deleteTree() instead to delete an entire tree');
			}
			
			if ($this->isInTree()) {
				$this->deleteDescendants($con);
			}

			if ($ret) {
				$deleteQuery->delete($con);
				$this->postDelete($con);
				// nested_set behavior
				if ($this->isInTree()) {
					// fill up the room that was used by the node
					Oops_Db_CategoryPeer::shiftRLValues(-2, $this->getRightValue() + 1, null, $con);
				}

				// i18n behavior
				
				// emulate delete cascade
				Oops_Db_CategoryLangQuery::create()
					->filterByOops_Db_Category($this)
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
			$con = Propel::getConnection(Oops_Db_CategoryPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$con->beginTransaction();
		$isInsert = $this->isNew();
		try {
			$ret = $this->preSave($con);
			// nested_set behavior
			if ($this->isNew() && $this->isRoot()) {
				// check if no other root exist in, the tree
				$nbRoots = Oops_Db_CategoryQuery::create()
					->addUsingAlias(Oops_Db_CategoryPeer::LEFT_COL, 1, Criteria::EQUAL)
					->count($con);
				if ($nbRoots > 0) {
						throw new PropelException('A root node already exists in this tree. To allow multiple root nodes, add the `use_scope` parameter in the nested_set behavior tag.');
				}
			}
			$this->processNestedSetQueries($con);
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
				Oops_Db_CategoryPeer::addInstanceToPool($this);
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

			if ($this->langsScheduledForDeletion !== null) {
				if (!$this->langsScheduledForDeletion->isEmpty()) {
					CategoryLangQuery::create()
						->filterByPrimaryKeys($this->langsScheduledForDeletion->getPrimaryKeys(false))
						->delete($con);
					$this->langsScheduledForDeletion = null;
				}

				foreach ($this->getLangs() as $lang) {
					if ($lang->isModified()) {
						$lang->save($con);
					}
				}
			}

			if ($this->productsScheduledForDeletion !== null) {
				if (!$this->productsScheduledForDeletion->isEmpty()) {
					CategoryProductQuery::create()
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

			if ($this->categoryLangsScheduledForDeletion !== null) {
				if (!$this->categoryLangsScheduledForDeletion->isEmpty()) {
					Oops_Db_CategoryLangQuery::create()
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

			if ($this->categoryProductsScheduledForDeletion !== null) {
				if (!$this->categoryProductsScheduledForDeletion->isEmpty()) {
					Oops_Db_CategoryProductQuery::create()
						->filterByPrimaryKeys($this->categoryProductsScheduledForDeletion->getPrimaryKeys(false))
						->delete($con);
					$this->categoryProductsScheduledForDeletion = null;
				}
			}

			if ($this->collCategoryProducts !== null) {
				foreach ($this->collCategoryProducts as $referrerFK) {
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

		$this->modifiedColumns[] = Oops_Db_CategoryPeer::ID_CATEGORY;
		if (null !== $this->id_category) {
			throw new PropelException('Cannot insert a value for auto-increment primary key (' . Oops_Db_CategoryPeer::ID_CATEGORY . ')');
		}

		 // check the columns in natural order for more readable SQL queries
		if ($this->isColumnModified(Oops_Db_CategoryPeer::ID_CATEGORY)) {
			$modifiedColumns[':p' . $index++]  = '`ID_CATEGORY`';
		}
		if ($this->isColumnModified(Oops_Db_CategoryPeer::ID_PARENT)) {
			$modifiedColumns[':p' . $index++]  = '`ID_PARENT`';
		}
		if ($this->isColumnModified(Oops_Db_CategoryPeer::LEVEL_DEPTH)) {
			$modifiedColumns[':p' . $index++]  = '`LEVEL_DEPTH`';
		}
		if ($this->isColumnModified(Oops_Db_CategoryPeer::NLEFT)) {
			$modifiedColumns[':p' . $index++]  = '`NLEFT`';
		}
		if ($this->isColumnModified(Oops_Db_CategoryPeer::NRIGHT)) {
			$modifiedColumns[':p' . $index++]  = '`NRIGHT`';
		}
		if ($this->isColumnModified(Oops_Db_CategoryPeer::ACTIVE)) {
			$modifiedColumns[':p' . $index++]  = '`ACTIVE`';
		}
		if ($this->isColumnModified(Oops_Db_CategoryPeer::DATE_ADD)) {
			$modifiedColumns[':p' . $index++]  = '`DATE_ADD`';
		}
		if ($this->isColumnModified(Oops_Db_CategoryPeer::DATE_UPD)) {
			$modifiedColumns[':p' . $index++]  = '`DATE_UPD`';
		}
		if ($this->isColumnModified(Oops_Db_CategoryPeer::POSITION)) {
			$modifiedColumns[':p' . $index++]  = '`POSITION`';
		}

		$sql = sprintf(
			'INSERT INTO `' .  _DB_PREFIX_ . 'category` (%s) VALUES (%s)',
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
					case '`ID_PARENT`':
						$stmt->bindValue($identifier, $this->id_parent, PDO::PARAM_INT);
						break;
					case '`LEVEL_DEPTH`':
						$stmt->bindValue($identifier, $this->level_depth, PDO::PARAM_INT);
						break;
					case '`NLEFT`':
						$stmt->bindValue($identifier, $this->nleft, PDO::PARAM_INT);
						break;
					case '`NRIGHT`':
						$stmt->bindValue($identifier, $this->nright, PDO::PARAM_INT);
						break;
					case '`ACTIVE`':
						$stmt->bindValue($identifier, (int) $this->active, PDO::PARAM_INT);
						break;
					case '`DATE_ADD`':
						$stmt->bindValue($identifier, $this->date_add, PDO::PARAM_STR);
						break;
					case '`DATE_UPD`':
						$stmt->bindValue($identifier, $this->date_upd, PDO::PARAM_STR);
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
		$this->setIdCategory($pk);

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


			if (($retval = Oops_Db_CategoryPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}


				if ($this->collCategoryLangs !== null) {
					foreach ($this->collCategoryLangs as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collCategoryProducts !== null) {
					foreach ($this->collCategoryProducts as $referrerFK) {
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
		$pos = Oops_Db_CategoryPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getIdParent();
				break;
			case 2:
				return $this->getLevelDepth();
				break;
			case 3:
				return $this->getNleft();
				break;
			case 4:
				return $this->getNright();
				break;
			case 5:
				return $this->getActive();
				break;
			case 6:
				return $this->getDateAdd();
				break;
			case 7:
				return $this->getDateUpd();
				break;
			case 8:
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
	 * @param     boolean $includeForeignObjects (optional) Whether to include hydrated related objects. Default to FALSE.
	 *
	 * @return    array an associative array containing the field names (as keys) and field values
	 */
	public function toArray($keyType = BasePeer::TYPE_PHPNAME, $includeLazyLoadColumns = true, $alreadyDumpedObjects = array(), $includeForeignObjects = false)
	{
		if (isset($alreadyDumpedObjects['Oops_Db_Category'][$this->getPrimaryKey()])) {
			return '*RECURSION*';
		}
		$alreadyDumpedObjects['Oops_Db_Category'][$this->getPrimaryKey()] = true;
		$keys = Oops_Db_CategoryPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getIdCategory(),
			$keys[1] => $this->getIdParent(),
			$keys[2] => $this->getLevelDepth(),
			$keys[3] => $this->getNleft(),
			$keys[4] => $this->getNright(),
			$keys[5] => $this->getActive(),
			$keys[6] => $this->getDateAdd(),
			$keys[7] => $this->getDateUpd(),
			$keys[8] => $this->getPosition(),
		);
		if ($includeForeignObjects) {
			if (null !== $this->collCategoryLangs) {
				$result['CategoryLangs'] = $this->collCategoryLangs->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
			}
			if (null !== $this->collCategoryProducts) {
				$result['CategoryProducts'] = $this->collCategoryProducts->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
		$pos = Oops_Db_CategoryPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setIdParent($value);
				break;
			case 2:
				$this->setLevelDepth($value);
				break;
			case 3:
				$this->setNleft($value);
				break;
			case 4:
				$this->setNright($value);
				break;
			case 5:
				$this->setActive($value);
				break;
			case 6:
				$this->setDateAdd($value);
				break;
			case 7:
				$this->setDateUpd($value);
				break;
			case 8:
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
		$keys = Oops_Db_CategoryPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setIdCategory($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setIdParent($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setLevelDepth($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setNleft($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setNright($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setActive($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setDateAdd($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setDateUpd($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setPosition($arr[$keys[8]]);
	}

	/**
	 * Build a Criteria object containing the values of all modified columns in this object.
	 *
	 * @return     Criteria The Criteria object containing all modified values.
	 */
	public function buildCriteria()
	{
		$criteria = new Criteria(Oops_Db_CategoryPeer::DATABASE_NAME);

		if ($this->isColumnModified(Oops_Db_CategoryPeer::ID_CATEGORY)) $criteria->add(Oops_Db_CategoryPeer::ID_CATEGORY, $this->id_category);
		if ($this->isColumnModified(Oops_Db_CategoryPeer::ID_PARENT)) $criteria->add(Oops_Db_CategoryPeer::ID_PARENT, $this->id_parent);
		if ($this->isColumnModified(Oops_Db_CategoryPeer::LEVEL_DEPTH)) $criteria->add(Oops_Db_CategoryPeer::LEVEL_DEPTH, $this->level_depth);
		if ($this->isColumnModified(Oops_Db_CategoryPeer::NLEFT)) $criteria->add(Oops_Db_CategoryPeer::NLEFT, $this->nleft);
		if ($this->isColumnModified(Oops_Db_CategoryPeer::NRIGHT)) $criteria->add(Oops_Db_CategoryPeer::NRIGHT, $this->nright);
		if ($this->isColumnModified(Oops_Db_CategoryPeer::ACTIVE)) $criteria->add(Oops_Db_CategoryPeer::ACTIVE, $this->active);
		if ($this->isColumnModified(Oops_Db_CategoryPeer::DATE_ADD)) $criteria->add(Oops_Db_CategoryPeer::DATE_ADD, $this->date_add);
		if ($this->isColumnModified(Oops_Db_CategoryPeer::DATE_UPD)) $criteria->add(Oops_Db_CategoryPeer::DATE_UPD, $this->date_upd);
		if ($this->isColumnModified(Oops_Db_CategoryPeer::POSITION)) $criteria->add(Oops_Db_CategoryPeer::POSITION, $this->position);

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
		$criteria = new Criteria(Oops_Db_CategoryPeer::DATABASE_NAME);
		$criteria->add(Oops_Db_CategoryPeer::ID_CATEGORY, $this->id_category);

		return $criteria;
	}

	/**
	 * Returns the primary key for this object (row).
	 * @return     int
	 */
	public function getPrimaryKey()
	{
		return $this->getIdCategory();
	}

	/**
	 * Generic method to set the primary key (id_category column).
	 *
	 * @param      int $key Primary key.
	 * @return     void
	 */
	public function setPrimaryKey($key)
	{
		$this->setIdCategory($key);
	}

	/**
	 * Returns true if the primary key for this object is null.
	 * @return     boolean
	 */
	public function isPrimaryKeyNull()
	{
		return null === $this->getIdCategory();
	}

	/**
	 * Sets contents of passed object to values from current object.
	 *
	 * If desired, this method can also make copies of all associated (fkey referrers)
	 * objects.
	 *
	 * @param      object $copyObj An object of Oops_Db_Category (or compatible) type.
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
	 * @throws     PropelException
	 */
	public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
	{
		$copyObj->setIdParent($this->getIdParent());
		$copyObj->setLevelDepth($this->getLevelDepth());
		$copyObj->setNleft($this->getNleft());
		$copyObj->setNright($this->getNright());
		$copyObj->setActive($this->getActive());
		$copyObj->setDateAdd($this->getDateAdd());
		$copyObj->setDateUpd($this->getDateUpd());
		$copyObj->setPosition($this->getPosition());

		if ($deepCopy) {
			// important: temporarily setNew(false) because this affects the behavior of
			// the getter/setter methods for fkey referrer objects.
			$copyObj->setNew(false);

			foreach ($this->getCategoryLangs() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addCategoryLang($relObj->copy($deepCopy));
				}
			}

			foreach ($this->getCategoryProducts() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addCategoryProduct($relObj->copy($deepCopy));
				}
			}

		} // if ($deepCopy)

		if ($makeNew) {
			$copyObj->setNew(true);
			$copyObj->setIdCategory(NULL); // this is a auto-increment column, so set to default value
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
	 * @return     Oops_Db_Category Clone of current object.
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
	 * @return     Oops_Db_CategoryPeer
	 */
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new Oops_Db_CategoryPeer();
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
		if ('CategoryProduct' == $relationName) {
			return $this->initCategoryProducts();
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
		$this->collCategoryLangs->setModel('Oops_Db_CategoryLang');
	}

	/**
	 * Gets an array of Oops_Db_CategoryLang objects which contain a foreign key that references this object.
	 *
	 * If the $criteria is not null, it is used to always fetch the results from the database.
	 * Otherwise the results are fetched from the database the first time, then cached.
	 * Next time the same method is called without $criteria, the cached collection is returned.
	 * If this Oops_Db_Category is new, it will return
	 * an empty collection or the current collection; the criteria is ignored on a new object.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @return     PropelCollection|array Oops_Db_CategoryLang[] List of Oops_Db_CategoryLang objects
	 * @throws     PropelException
	 */
	public function getCategoryLangs($criteria = null, PropelPDO $con = null)
	{
		if(null === $this->collCategoryLangs || null !== $criteria) {
			if ($this->isNew() && null === $this->collCategoryLangs) {
				// return empty collection
				$this->initCategoryLangs();
			} else {
				$collCategoryLangs = Oops_Db_CategoryLangQuery::create(null, $criteria)
					->filterByCategory($this)
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
				$categoryLang->setCategory($this);
			}
			$this->addCategoryLang($categoryLang);
		}

		$this->collCategoryLangs = $categoryLangs;
	}

	/**
	 * Returns the number of related Oops_Db_CategoryLang objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related Oops_Db_CategoryLang objects.
	 * @throws     PropelException
	 */
	public function countCategoryLangs(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if(null === $this->collCategoryLangs || null !== $criteria) {
			if ($this->isNew() && null === $this->collCategoryLangs) {
				return 0;
			} else {
				$query = Oops_Db_CategoryLangQuery::create(null, $criteria);
				if($distinct) {
					$query->distinct();
				}
				return $query
					->filterByCategory($this)
					->count($con);
			}
		} else {
			return count($this->collCategoryLangs);
		}
	}

	/**
	 * Method called to associate a Oops_Db_CategoryLang object to this object
	 * through the Oops_Db_CategoryLang foreign key attribute.
	 *
	 * @param      Oops_Db_CategoryLang $l Oops_Db_CategoryLang
	 * @return     Oops_Db_Category The current object (for fluent API support)
	 */
	public function addCategoryLang(Oops_Db_CategoryLang $l)
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
		$categoryLang->setCategory($this);
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this Category is new, it will return
	 * an empty collection; or if this Category has previously
	 * been saved, it will retrieve related CategoryLangs from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in Category.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array Oops_Db_CategoryLang[] List of Oops_Db_CategoryLang objects
	 */
	public function getCategoryLangsJoinLang($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = Oops_Db_CategoryLangQuery::create(null, $criteria);
		$query->joinWith('Lang', $join_behavior);

		return $this->getCategoryLangs($query, $con);
	}

	/**
	 * Clears out the collCategoryProducts collection
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addCategoryProducts()
	 */
	public function clearCategoryProducts()
	{
		$this->collCategoryProducts = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collCategoryProducts collection.
	 *
	 * By default this just sets the collCategoryProducts collection to an empty array (like clearcollCategoryProducts());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @param      boolean $overrideExisting If set to true, the method call initializes
	 *                                        the collection even if it is not empty
	 *
	 * @return     void
	 */
	public function initCategoryProducts($overrideExisting = true)
	{
		if (null !== $this->collCategoryProducts && !$overrideExisting) {
			return;
		}
		$this->collCategoryProducts = new PropelObjectCollection();
		$this->collCategoryProducts->setModel('Oops_Db_CategoryProduct');
	}

	/**
	 * Gets an array of Oops_Db_CategoryProduct objects which contain a foreign key that references this object.
	 *
	 * If the $criteria is not null, it is used to always fetch the results from the database.
	 * Otherwise the results are fetched from the database the first time, then cached.
	 * Next time the same method is called without $criteria, the cached collection is returned.
	 * If this Oops_Db_Category is new, it will return
	 * an empty collection or the current collection; the criteria is ignored on a new object.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @return     PropelCollection|array Oops_Db_CategoryProduct[] List of Oops_Db_CategoryProduct objects
	 * @throws     PropelException
	 */
	public function getCategoryProducts($criteria = null, PropelPDO $con = null)
	{
		if(null === $this->collCategoryProducts || null !== $criteria) {
			if ($this->isNew() && null === $this->collCategoryProducts) {
				// return empty collection
				$this->initCategoryProducts();
			} else {
				$collCategoryProducts = Oops_Db_CategoryProductQuery::create(null, $criteria)
					->filterByCategory($this)
					->find($con);
				if (null !== $criteria) {
					return $collCategoryProducts;
				}
				$this->collCategoryProducts = $collCategoryProducts;
			}
		}
		return $this->collCategoryProducts;
	}

	/**
	 * Sets a collection of CategoryProduct objects related by a one-to-many relationship
	 * to the current object.
	 * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
	 * and new objects from the given Propel collection.
	 *
	 * @param      PropelCollection $categoryProducts A Propel collection.
	 * @param      PropelPDO $con Optional connection object
	 */
	public function setCategoryProducts(PropelCollection $categoryProducts, PropelPDO $con = null)
	{
		$this->categoryProductsScheduledForDeletion = $this->getCategoryProducts(new Criteria(), $con)->diff($categoryProducts);

		foreach ($categoryProducts as $categoryProduct) {
			// Fix issue with collection modified by reference
			if ($categoryProduct->isNew()) {
				$categoryProduct->setCategory($this);
			}
			$this->addCategoryProduct($categoryProduct);
		}

		$this->collCategoryProducts = $categoryProducts;
	}

	/**
	 * Returns the number of related Oops_Db_CategoryProduct objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related Oops_Db_CategoryProduct objects.
	 * @throws     PropelException
	 */
	public function countCategoryProducts(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if(null === $this->collCategoryProducts || null !== $criteria) {
			if ($this->isNew() && null === $this->collCategoryProducts) {
				return 0;
			} else {
				$query = Oops_Db_CategoryProductQuery::create(null, $criteria);
				if($distinct) {
					$query->distinct();
				}
				return $query
					->filterByCategory($this)
					->count($con);
			}
		} else {
			return count($this->collCategoryProducts);
		}
	}

	/**
	 * Method called to associate a Oops_Db_CategoryProduct object to this object
	 * through the Oops_Db_CategoryProduct foreign key attribute.
	 *
	 * @param      Oops_Db_CategoryProduct $l Oops_Db_CategoryProduct
	 * @return     Oops_Db_Category The current object (for fluent API support)
	 */
	public function addCategoryProduct(Oops_Db_CategoryProduct $l)
	{
		if ($this->collCategoryProducts === null) {
			$this->initCategoryProducts();
		}
		if (!$this->collCategoryProducts->contains($l)) { // only add it if the **same** object is not already associated
			$this->doAddCategoryProduct($l);
		}

		return $this;
	}

	/**
	 * @param	CategoryProduct $categoryProduct The categoryProduct object to add.
	 */
	protected function doAddCategoryProduct($categoryProduct)
	{
		$this->collCategoryProducts[]= $categoryProduct;
		$categoryProduct->setCategory($this);
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this Category is new, it will return
	 * an empty collection; or if this Category has previously
	 * been saved, it will retrieve related CategoryProducts from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in Category.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array Oops_Db_CategoryProduct[] List of Oops_Db_CategoryProduct objects
	 */
	public function getCategoryProductsJoinProduct($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = Oops_Db_CategoryProductQuery::create(null, $criteria);
		$query->joinWith('Product', $join_behavior);

		return $this->getCategoryProducts($query, $con);
	}

	/**
	 * Clears out the collLangs collection
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addLangs()
	 */
	public function clearLangs()
	{
		$this->collLangs = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collLangs collection.
	 *
	 * By default this just sets the collLangs collection to an empty collection (like clearLangs());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @return     void
	 */
	public function initLangs()
	{
		$this->collLangs = new PropelObjectCollection();
		$this->collLangs->setModel('Oops_Db_Lang');
	}

	/**
	 * Gets a collection of Oops_Db_Lang objects related by a many-to-many relationship
	 * to the current object by way of the category_lang cross-reference table.
	 *
	 * If the $criteria is not null, it is used to always fetch the results from the database.
	 * Otherwise the results are fetched from the database the first time, then cached.
	 * Next time the same method is called without $criteria, the cached collection is returned.
	 * If this Oops_Db_Category is new, it will return
	 * an empty collection or the current collection; the criteria is ignored on a new object.
	 *
	 * @param      Criteria $criteria Optional query object to filter the query
	 * @param      PropelPDO $con Optional connection object
	 *
	 * @return     PropelCollection|array Oops_Db_Lang[] List of Oops_Db_Lang objects
	 */
	public function getLangs($criteria = null, PropelPDO $con = null)
	{
		if(null === $this->collLangs || null !== $criteria) {
			if ($this->isNew() && null === $this->collLangs) {
				// return empty collection
				$this->initLangs();
			} else {
				$collLangs = Oops_Db_LangQuery::create(null, $criteria)
					->filterByCategory($this)
					->find($con);
				if (null !== $criteria) {
					return $collLangs;
				}
				$this->collLangs = $collLangs;
			}
		}
		return $this->collLangs;
	}

	/**
	 * Sets a collection of Oops_Db_Lang objects related by a many-to-many relationship
	 * to the current object by way of the category_lang cross-reference table.
	 * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
	 * and new objects from the given Propel collection.
	 *
	 * @param      PropelCollection $langs A Propel collection.
	 * @param      PropelPDO $con Optional connection object
	 */
	public function setLangs(PropelCollection $langs, PropelPDO $con = null)
	{
		$oops_Db_CategoryLangs = CategoryLangQuery::create()
			->filterByOops_Db_Lang($langs)
			->filterByCategory($this)
			->find($con);

		$this->langsScheduledForDeletion = $this->getCategoryLangs()->diff($oops_Db_CategoryLangs);
		$this->collCategoryLangs = $oops_Db_CategoryLangs;

		foreach ($langs as $lang) {
			// Fix issue with collection modified by reference
			if ($lang->isNew()) {
				$this->doAddOops_Db_Lang($lang);
			} else {
				$this->addOops_Db_Lang($lang);
			}
		}

		$this->collLangs = $langs;
	}

	/**
	 * Gets the number of Oops_Db_Lang objects related by a many-to-many relationship
	 * to the current object by way of the category_lang cross-reference table.
	 *
	 * @param      Criteria $criteria Optional query object to filter the query
	 * @param      boolean $distinct Set to true to force count distinct
	 * @param      PropelPDO $con Optional connection object
	 *
	 * @return     int the number of related Oops_Db_Lang objects
	 */
	public function countLangs($criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if(null === $this->collLangs || null !== $criteria) {
			if ($this->isNew() && null === $this->collLangs) {
				return 0;
			} else {
				$query = Oops_Db_LangQuery::create(null, $criteria);
				if($distinct) {
					$query->distinct();
				}
				return $query
					->filterByCategory($this)
					->count($con);
			}
		} else {
			return count($this->collLangs);
		}
	}

	/**
	 * Associate a Oops_Db_Lang object to this object
	 * through the category_lang cross reference table.
	 *
	 * @param      Oops_Db_Lang $lang The Oops_Db_CategoryLang object to relate
	 * @return     void
	 */
	public function addLang($lang)
	{
		if ($this->collLangs === null) {
			$this->initLangs();
		}
		if (!$this->collLangs->contains($lang)) { // only add it if the **same** object is not already associated
			$this->doAddLang($lang);

			$this->collLangs[]= $lang;
		}
	}

	/**
	 * @param	Lang $lang The lang object to add.
	 */
	protected function doAddLang($lang)
	{
		$categoryLang = new Oops_Db_CategoryLang();
		$categoryLang->setLang($lang);
		$this->addCategoryLang($categoryLang);
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
	 * to the current object by way of the category_product cross-reference table.
	 *
	 * If the $criteria is not null, it is used to always fetch the results from the database.
	 * Otherwise the results are fetched from the database the first time, then cached.
	 * Next time the same method is called without $criteria, the cached collection is returned.
	 * If this Oops_Db_Category is new, it will return
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
					->filterByCategory($this)
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
	 * to the current object by way of the category_product cross-reference table.
	 * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
	 * and new objects from the given Propel collection.
	 *
	 * @param      PropelCollection $products A Propel collection.
	 * @param      PropelPDO $con Optional connection object
	 */
	public function setProducts(PropelCollection $products, PropelPDO $con = null)
	{
		$oops_Db_CategoryProducts = CategoryProductQuery::create()
			->filterByOops_Db_Product($products)
			->filterByCategory($this)
			->find($con);

		$this->productsScheduledForDeletion = $this->getCategoryProducts()->diff($oops_Db_CategoryProducts);
		$this->collCategoryProducts = $oops_Db_CategoryProducts;

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
	 * to the current object by way of the category_product cross-reference table.
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
					->filterByCategory($this)
					->count($con);
			}
		} else {
			return count($this->collProducts);
		}
	}

	/**
	 * Associate a Oops_Db_Product object to this object
	 * through the category_product cross reference table.
	 *
	 * @param      Oops_Db_Product $product The Oops_Db_CategoryProduct object to relate
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
		$categoryProduct = new Oops_Db_CategoryProduct();
		$categoryProduct->setProduct($product);
		$this->addCategoryProduct($categoryProduct);
	}

	/**
	 * Clears the current object and sets all attributes to their default values
	 */
	public function clear()
	{
		$this->id_category = null;
		$this->id_parent = null;
		$this->level_depth = null;
		$this->nleft = null;
		$this->nright = null;
		$this->active = null;
		$this->date_add = null;
		$this->date_upd = null;
		$this->position = null;
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
			if ($this->collCategoryProducts) {
				foreach ($this->collCategoryProducts as $o) {
					$o->clearAllReferences($deep);
				}
			}
			if ($this->collLangs) {
				foreach ($this->collLangs as $o) {
					$o->clearAllReferences($deep);
				}
			}
			if ($this->collProducts) {
				foreach ($this->collProducts as $o) {
					$o->clearAllReferences($deep);
				}
			}
		} // if ($deep)

		// nested_set behavior
		$this->collNestedSetChildren = null;
		$this->aNestedSetParent = null;
		// i18n behavior
		$this->currentLocale = '1';
		$this->currentTranslations = null;
		if ($this->collCategoryLangs instanceof PropelCollection) {
			$this->collCategoryLangs->clearIterator();
		}
		$this->collCategoryLangs = null;
		if ($this->collCategoryProducts instanceof PropelCollection) {
			$this->collCategoryProducts->clearIterator();
		}
		$this->collCategoryProducts = null;
		if ($this->collLangs instanceof PropelCollection) {
			$this->collLangs->clearIterator();
		}
		$this->collLangs = null;
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
		return (string) $this->exportTo(Oops_Db_CategoryPeer::DEFAULT_STRING_FORMAT);
	}

	// nested_set behavior
	
	/**
	 * Execute queries that were saved to be run inside the save transaction
	 */
	protected function processNestedSetQueries($con)
	{
		foreach ($this->nestedSetQueries as $query) {
			$query['arguments'][]= $con;
			call_user_func_array($query['callable'], $query['arguments']);
		}
		$this->nestedSetQueries = array();
	}
	
	/**
	 * Proxy getter method for the left value of the nested set model.
	 * It provides a generic way to get the value, whatever the actual column name is.
	 *
	 * @return     int The nested set left value
	 */
	public function getLeftValue()
	{
		return $this->nleft;
	}
	
	/**
	 * Proxy getter method for the right value of the nested set model.
	 * It provides a generic way to get the value, whatever the actual column name is.
	 *
	 * @return     int The nested set right value
	 */
	public function getRightValue()
	{
		return $this->nright;
	}
	
	/**
	 * Proxy getter method for the level value of the nested set model.
	 * It provides a generic way to get the value, whatever the actual column name is.
	 *
	 * @return     int The nested set level value
	 */
	public function getLevel()
	{
		return $this->level_depth;
	}
	
	/**
	 * Proxy setter method for the left value of the nested set model.
	 * It provides a generic way to set the value, whatever the actual column name is.
	 *
	 * @param      int $v The nested set left value
	 * @return     Oops_Db_Category The current object (for fluent API support)
	 */
	public function setLeftValue($v)
	{
		return $this->setNleft($v);
	}
	
	/**
	 * Proxy setter method for the right value of the nested set model.
	 * It provides a generic way to set the value, whatever the actual column name is.
	 *
	 * @param      int $v The nested set right value
	 * @return     Oops_Db_Category The current object (for fluent API support)
	 */
	public function setRightValue($v)
	{
		return $this->setNright($v);
	}
	
	/**
	 * Proxy setter method for the level value of the nested set model.
	 * It provides a generic way to set the value, whatever the actual column name is.
	 *
	 * @param      int $v The nested set level value
	 * @return     Oops_Db_Category The current object (for fluent API support)
	 */
	public function setLevel($v)
	{
		return $this->setLevelDepth($v);
	}
	
	/**
	 * Creates the supplied node as the root node.
	 *
	 * @return     Oops_Db_Category The current object (for fluent API support)
	 * @throws     PropelException
	 */
	public function makeRoot()
	{
		if ($this->getLeftValue() || $this->getRightValue()) {
			throw new PropelException('Cannot turn an existing node into a root node.');
		}
	
		$this->setLeftValue(1);
		$this->setRightValue(2);
		$this->setLevel(0);
		return $this;
	}
	
	/**
	 * Tests if onbject is a node, i.e. if it is inserted in the tree
	 *
	 * @return     bool
	 */
	public function isInTree()
	{
		return $this->getLeftValue() > 0 && $this->getRightValue() > $this->getLeftValue();
	}
	
	/**
	 * Tests if node is a root
	 *
	 * @return     bool
	 */
	public function isRoot()
	{
		return $this->isInTree() && $this->getLeftValue() == 1;
	}
	
	/**
	 * Tests if node is a leaf
	 *
	 * @return     bool
	 */
	public function isLeaf()
	{
		return $this->isInTree() &&  ($this->getRightValue() - $this->getLeftValue()) == 1;
	}
	
	/**
	 * Tests if node is a descendant of another node
	 *
	 * @param      Oops_Db_Category $node Propel node object
	 * @return     bool
	 */
	public function isDescendantOf($parent)
	{
		return $this->isInTree() && $this->getLeftValue() > $parent->getLeftValue() && $this->getRightValue() < $parent->getRightValue();
	}
	
	/**
	 * Tests if node is a ancestor of another node
	 *
	 * @param      Oops_Db_Category $node Propel node object
	 * @return     bool
	 */
	public function isAncestorOf($child)
	{
		return $child->isDescendantOf($this);
	}
	
	/**
	 * Tests if object has an ancestor
	 *
	 * @param      PropelPDO $con Connection to use.
	 * @return     bool
	 */
	public function hasParent(PropelPDO $con = null)
	{
		return $this->getLevel() > 0;
	}
	
	/**
	 * Sets the cache for parent node of the current object.
	 * Warning: this does not move the current object in the tree.
	 * Use moveTofirstChildOf() or moveToLastChildOf() for that purpose
	 *
	 * @param      Oops_Db_Category $parent
	 * @return     Oops_Db_Category The current object, for fluid interface
	 */
	public function setParent($parent = null)
	{
		$this->aNestedSetParent = $parent;
		return $this;
	}
	
	/**
	 * Gets parent node for the current object if it exists
	 * The result is cached so further calls to the same method don't issue any queries
	 *
	 * @param      PropelPDO $con Connection to use.
	 * @return     mixed 		Propel object if exists else false
	 */
	public function getParent(PropelPDO $con = null)
	{
		if ($this->aNestedSetParent === null && $this->hasParent()) {
			$this->aNestedSetParent = Oops_Db_CategoryQuery::create()
				->ancestorsOf($this)
				->orderByLevel(true)
				->findOne($con);
		}
		return $this->aNestedSetParent;
	}
	
	/**
	 * Determines if the node has previous sibling
	 *
	 * @param      PropelPDO $con Connection to use.
	 * @return     bool
	 */
	public function hasPrevSibling(PropelPDO $con = null)
	{
		if (!Oops_Db_CategoryPeer::isValid($this)) {
			return false;
		}
		return Oops_Db_CategoryQuery::create()
			->filterByNright($this->getLeftValue() - 1)
			->count($con) > 0;
	}
	
	/**
	 * Gets previous sibling for the given node if it exists
	 *
	 * @param      PropelPDO $con Connection to use.
	 * @return     mixed 		Propel object if exists else false
	 */
	public function getPrevSibling(PropelPDO $con = null)
	{
		return Oops_Db_CategoryQuery::create()
			->filterByNright($this->getLeftValue() - 1)
			->findOne($con);
	}
	
	/**
	 * Determines if the node has next sibling
	 *
	 * @param      PropelPDO $con Connection to use.
	 * @return     bool
	 */
	public function hasNextSibling(PropelPDO $con = null)
	{
		if (!Oops_Db_CategoryPeer::isValid($this)) {
			return false;
		}
		return Oops_Db_CategoryQuery::create()
			->filterByNleft($this->getRightValue() + 1)
			->count($con) > 0;
	}
	
	/**
	 * Gets next sibling for the given node if it exists
	 *
	 * @param      PropelPDO $con Connection to use.
	 * @return     mixed 		Propel object if exists else false
	 */
	public function getNextSibling(PropelPDO $con = null)
	{
		return Oops_Db_CategoryQuery::create()
			->filterByNleft($this->getRightValue() + 1)
			->findOne($con);
	}
	
	/**
	 * Clears out the $collNestedSetChildren collection
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 */
	public function clearNestedSetChildren()
	{
		$this->collNestedSetChildren = null;
	}
	
	/**
	 * Initializes the $collNestedSetChildren collection.
	 *
	 * @return     void
	 */
	public function initNestedSetChildren()
	{
		$this->collNestedSetChildren = new PropelObjectCollection();
		$this->collNestedSetChildren->setModel('Oops_Db_Category');
	}
	
	/**
	 * Adds an element to the internal $collNestedSetChildren collection.
	 * Beware that this doesn't insert a node in the tree.
	 * This method is only used to facilitate children hydration.
	 *
	 * @param      Oops_Db_Category $category
	 *
	 * @return     void
	 */
	public function addNestedSetChild($category)
	{
		if ($this->collNestedSetChildren === null) {
			$this->initNestedSetChildren();
		}
		if (!$this->collNestedSetChildren->contains($category)) { // only add it if the **same** object is not already associated
			$this->collNestedSetChildren[]= $category;
			$category->setParent($this);
		}
	}
	
	/**
	 * Tests if node has children
	 *
	 * @return     bool
	 */
	public function hasChildren()
	{
		return ($this->getRightValue() - $this->getLeftValue()) > 1;
	}
	
	/**
	 * Gets the children of the given node
	 *
	 * @param      Criteria  $criteria Criteria to filter results.
	 * @param      PropelPDO $con Connection to use.
	 * @return     array     List of Oops_Db_Category objects
	 */
	public function getChildren($criteria = null, PropelPDO $con = null)
	{
		if(null === $this->collNestedSetChildren || null !== $criteria) {
			if ($this->isLeaf() || ($this->isNew() && null === $this->collNestedSetChildren)) {
				// return empty collection
				$this->initNestedSetChildren();
			} else {
				$collNestedSetChildren = Oops_Db_CategoryQuery::create(null, $criteria)
	  			->childrenOf($this)
	  			->orderByBranch()
					->find($con);
				if (null !== $criteria) {
					return $collNestedSetChildren;
				}
				$this->collNestedSetChildren = $collNestedSetChildren;
			}
		}
		return $this->collNestedSetChildren;
	}
	
	/**
	 * Gets number of children for the given node
	 *
	 * @param      Criteria  $criteria Criteria to filter results.
	 * @param      PropelPDO $con Connection to use.
	 * @return     int       Number of children
	 */
	public function countChildren($criteria = null, PropelPDO $con = null)
	{
		if(null === $this->collNestedSetChildren || null !== $criteria) {
			if ($this->isLeaf() || ($this->isNew() && null === $this->collNestedSetChildren)) {
				return 0;
			} else {
				return Oops_Db_CategoryQuery::create(null, $criteria)
					->childrenOf($this)
					->count($con);
			}
		} else {
			return count($this->collNestedSetChildren);
		}
	}
	
	/**
	 * Gets the first child of the given node
	 *
	 * @param      Criteria $query Criteria to filter results.
	 * @param      PropelPDO $con Connection to use.
	 * @return     array 		List of Oops_Db_Category objects
	 */
	public function getFirstChild($query = null, PropelPDO $con = null)
	{
		if($this->isLeaf()) {
			return array();
		} else {
			return Oops_Db_CategoryQuery::create(null, $query)
				->childrenOf($this)
				->orderByBranch()
				->findOne($con);
		}
	}
	
	/**
	 * Gets the last child of the given node
	 *
	 * @param      Criteria $query Criteria to filter results.
	 * @param      PropelPDO $con Connection to use.
	 * @return     array 		List of Oops_Db_Category objects
	 */
	public function getLastChild($query = null, PropelPDO $con = null)
	{
		if($this->isLeaf()) {
			return array();
		} else {
			return Oops_Db_CategoryQuery::create(null, $query)
				->childrenOf($this)
				->orderByBranch(true)
				->findOne($con);
		}
	}
	
	/**
	 * Gets the siblings of the given node
	 *
	 * @param      bool			$includeNode Whether to include the current node or not
	 * @param      Criteria $query Criteria to filter results.
	 * @param      PropelPDO $con Connection to use.
	 *
	 * @return     array 		List of Oops_Db_Category objects
	 */
	public function getSiblings($includeNode = false, $query = null, PropelPDO $con = null)
	{
		if($this->isRoot()) {
			return array();
		} else {
			 $query = Oops_Db_CategoryQuery::create(null, $query)
					->childrenOf($this->getParent($con))
					->orderByBranch();
			if (!$includeNode) {
				$query->prune($this);
			}
			return $query->find($con);
		}
	}
	
	/**
	 * Gets descendants for the given node
	 *
	 * @param      Criteria $query Criteria to filter results.
	 * @param      PropelPDO $con Connection to use.
	 * @return     array 		List of Oops_Db_Category objects
	 */
	public function getDescendants($query = null, PropelPDO $con = null)
	{
		if($this->isLeaf()) {
			return array();
		} else {
			return Oops_Db_CategoryQuery::create(null, $query)
				->descendantsOf($this)
				->orderByBranch()
				->find($con);
		}
	}
	
	/**
	 * Gets number of descendants for the given node
	 *
	 * @param      Criteria $query Criteria to filter results.
	 * @param      PropelPDO $con Connection to use.
	 * @return     int 		Number of descendants
	 */
	public function countDescendants($query = null, PropelPDO $con = null)
	{
		if($this->isLeaf()) {
			// save one query
			return 0;
		} else {
			return Oops_Db_CategoryQuery::create(null, $query)
				->descendantsOf($this)
				->count($con);
		}
	}
	
	/**
	 * Gets descendants for the given node, plus the current node
	 *
	 * @param      Criteria $query Criteria to filter results.
	 * @param      PropelPDO $con Connection to use.
	 * @return     array 		List of Oops_Db_Category objects
	 */
	public function getBranch($query = null, PropelPDO $con = null)
	{
		return Oops_Db_CategoryQuery::create(null, $query)
			->branchOf($this)
			->orderByBranch()
			->find($con);
	}
	
	/**
	 * Gets ancestors for the given node, starting with the root node
	 * Use it for breadcrumb paths for instance
	 *
	 * @param      Criteria $query Criteria to filter results.
	 * @param      PropelPDO $con Connection to use.
	 * @return     array 		List of Oops_Db_Category objects
	 */
	public function getAncestors($query = null, PropelPDO $con = null)
	{
		if($this->isRoot()) {
			// save one query
			return array();
		} else {
			return Oops_Db_CategoryQuery::create(null, $query)
				->ancestorsOf($this)
				->orderByBranch()
				->find($con);
		}
	}
	
	/**
	 * Inserts the given $child node as first child of current
	 * The modifications in the current object and the tree
	 * are not persisted until the child object is saved.
	 *
	 * @param      Oops_Db_Category $child	Propel object for child node
	 *
	 * @return     Oops_Db_Category The current Propel object
	 */
	public function addChild(Oops_Db_Category $child)
	{
		if ($this->isNew()) {
			throw new PropelException('A Oops_Db_Category object must not be new to accept children.');
		}
		$child->insertAsFirstChildOf($this);
		return $this;
	}
	
	/**
	 * Inserts the current node as first child of given $parent node
	 * The modifications in the current object and the tree
	 * are not persisted until the current object is saved.
	 *
	 * @param      Oops_Db_Category $parent	Propel object for parent node
	 *
	 * @return     Oops_Db_Category The current Propel object
	 */
	public function insertAsFirstChildOf($parent)
	{
		if ($this->isInTree()) {
			throw new PropelException('A Oops_Db_Category object must not already be in the tree to be inserted. Use the moveToFirstChildOf() instead.');
		}
		$left = $parent->getLeftValue() + 1;
		// Update node properties
		$this->setLeftValue($left);
		$this->setRightValue($left + 1);
		$this->setLevel($parent->getLevel() + 1);
		// update the children collection of the parent
		$parent->addNestedSetChild($this);
	
		// Keep the tree modification query for the save() transaction
		$this->nestedSetQueries []= array(
			'callable'  => array('Oops_Db_CategoryPeer', 'makeRoomForLeaf'),
			'arguments' => array($left, $this->isNew() ? null : $this)
		);
		return $this;
	}
	
	/**
	 * Inserts the current node as last child of given $parent node
	 * The modifications in the current object and the tree
	 * are not persisted until the current object is saved.
	 *
	 * @param      Oops_Db_Category $parent	Propel object for parent node
	 *
	 * @return     Oops_Db_Category The current Propel object
	 */
	public function insertAsLastChildOf($parent)
	{
		if ($this->isInTree()) {
			throw new PropelException('A Oops_Db_Category object must not already be in the tree to be inserted. Use the moveToLastChildOf() instead.');
		}
		$left = $parent->getRightValue();
		// Update node properties
		$this->setLeftValue($left);
		$this->setRightValue($left + 1);
		$this->setLevel($parent->getLevel() + 1);
		// update the children collection of the parent
		$parent->addNestedSetChild($this);
	
		// Keep the tree modification query for the save() transaction
		$this->nestedSetQueries []= array(
			'callable'  => array('Oops_Db_CategoryPeer', 'makeRoomForLeaf'),
			'arguments' => array($left, $this->isNew() ? null : $this)
		);
		return $this;
	}
	
	/**
	 * Inserts the current node as prev sibling given $sibling node
	 * The modifications in the current object and the tree
	 * are not persisted until the current object is saved.
	 *
	 * @param      Oops_Db_Category $sibling	Propel object for parent node
	 *
	 * @return     Oops_Db_Category The current Propel object
	 */
	public function insertAsPrevSiblingOf($sibling)
	{
		if ($this->isInTree()) {
			throw new PropelException('A Oops_Db_Category object must not already be in the tree to be inserted. Use the moveToPrevSiblingOf() instead.');
		}
		$left = $sibling->getLeftValue();
		// Update node properties
		$this->setLeftValue($left);
		$this->setRightValue($left + 1);
		$this->setLevel($sibling->getLevel());
		// Keep the tree modification query for the save() transaction
		$this->nestedSetQueries []= array(
			'callable'  => array('Oops_Db_CategoryPeer', 'makeRoomForLeaf'),
			'arguments' => array($left, $this->isNew() ? null : $this)
		);
		return $this;
	}
	
	/**
	 * Inserts the current node as next sibling given $sibling node
	 * The modifications in the current object and the tree
	 * are not persisted until the current object is saved.
	 *
	 * @param      Oops_Db_Category $sibling	Propel object for parent node
	 *
	 * @return     Oops_Db_Category The current Propel object
	 */
	public function insertAsNextSiblingOf($sibling)
	{
		if ($this->isInTree()) {
			throw new PropelException('A Oops_Db_Category object must not already be in the tree to be inserted. Use the moveToNextSiblingOf() instead.');
		}
		$left = $sibling->getRightValue() + 1;
		// Update node properties
		$this->setLeftValue($left);
		$this->setRightValue($left + 1);
		$this->setLevel($sibling->getLevel());
		// Keep the tree modification query for the save() transaction
		$this->nestedSetQueries []= array(
			'callable'  => array('Oops_Db_CategoryPeer', 'makeRoomForLeaf'),
			'arguments' => array($left, $this->isNew() ? null : $this)
		);
		return $this;
	}
	
	/**
	 * Moves current node and its subtree to be the first child of $parent
	 * The modifications in the current object and the tree are immediate
	 *
	 * @param      Oops_Db_Category $parent	Propel object for parent node
	 * @param      PropelPDO $con	Connection to use.
	 *
	 * @return     Oops_Db_Category The current Propel object
	 */
	public function moveToFirstChildOf($parent, PropelPDO $con = null)
	{
		if (!$this->isInTree()) {
			throw new PropelException('A Oops_Db_Category object must be already in the tree to be moved. Use the insertAsFirstChildOf() instead.');
		}
		if ($parent->isDescendantOf($this)) {
			throw new PropelException('Cannot move a node as child of one of its subtree nodes.');
		}
	
		$this->moveSubtreeTo($parent->getLeftValue() + 1, $parent->getLevel() - $this->getLevel() + 1, $con);
	
		return $this;
	}
	
	/**
	 * Moves current node and its subtree to be the last child of $parent
	 * The modifications in the current object and the tree are immediate
	 *
	 * @param      Oops_Db_Category $parent	Propel object for parent node
	 * @param      PropelPDO $con	Connection to use.
	 *
	 * @return     Oops_Db_Category The current Propel object
	 */
	public function moveToLastChildOf($parent, PropelPDO $con = null)
	{
		if (!$this->isInTree()) {
			throw new PropelException('A Oops_Db_Category object must be already in the tree to be moved. Use the insertAsLastChildOf() instead.');
		}
		if ($parent->isDescendantOf($this)) {
			throw new PropelException('Cannot move a node as child of one of its subtree nodes.');
		}
	
		$this->moveSubtreeTo($parent->getRightValue(), $parent->getLevel() - $this->getLevel() + 1, $con);
	
		return $this;
	}
	
	/**
	 * Moves current node and its subtree to be the previous sibling of $sibling
	 * The modifications in the current object and the tree are immediate
	 *
	 * @param      Oops_Db_Category $sibling	Propel object for sibling node
	 * @param      PropelPDO $con	Connection to use.
	 *
	 * @return     Oops_Db_Category The current Propel object
	 */
	public function moveToPrevSiblingOf($sibling, PropelPDO $con = null)
	{
		if (!$this->isInTree()) {
			throw new PropelException('A Oops_Db_Category object must be already in the tree to be moved. Use the insertAsPrevSiblingOf() instead.');
		}
		if ($sibling->isRoot()) {
			throw new PropelException('Cannot move to previous sibling of a root node.');
		}
		if ($sibling->isDescendantOf($this)) {
			throw new PropelException('Cannot move a node as sibling of one of its subtree nodes.');
		}
	
		$this->moveSubtreeTo($sibling->getLeftValue(), $sibling->getLevel() - $this->getLevel(), $con);
	
		return $this;
	}
	
	/**
	 * Moves current node and its subtree to be the next sibling of $sibling
	 * The modifications in the current object and the tree are immediate
	 *
	 * @param      Oops_Db_Category $sibling	Propel object for sibling node
	 * @param      PropelPDO $con	Connection to use.
	 *
	 * @return     Oops_Db_Category The current Propel object
	 */
	public function moveToNextSiblingOf($sibling, PropelPDO $con = null)
	{
		if (!$this->isInTree()) {
			throw new PropelException('A Oops_Db_Category object must be already in the tree to be moved. Use the insertAsNextSiblingOf() instead.');
		}
		if ($sibling->isRoot()) {
			throw new PropelException('Cannot move to next sibling of a root node.');
		}
		if ($sibling->isDescendantOf($this)) {
			throw new PropelException('Cannot move a node as sibling of one of its subtree nodes.');
		}
	
		$this->moveSubtreeTo($sibling->getRightValue() + 1, $sibling->getLevel() - $this->getLevel(), $con);
	
		return $this;
	}
	
	/**
	 * Move current node and its children to location $destLeft and updates rest of tree
	 *
	 * @param      int	$destLeft Destination left value
	 * @param      int	$levelDelta Delta to add to the levels
	 * @param      PropelPDO $con		Connection to use.
	 */
	protected function moveSubtreeTo($destLeft, $levelDelta, PropelPDO $con = null)
	{
		$left  = $this->getLeftValue();
		$right = $this->getRightValue();
	
		$treeSize = $right - $left +1;
	
		if ($con === null) {
			$con = Propel::getConnection(Oops_Db_CategoryPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}
	
		$con->beginTransaction();
		try {
			// make room next to the target for the subtree
			Oops_Db_CategoryPeer::shiftRLValues($treeSize, $destLeft, null, $con);
	
			if ($left >= $destLeft) { // src was shifted too?
				$left += $treeSize;
				$right += $treeSize;
			}
	
			if ($levelDelta) {
				// update the levels of the subtree
				Oops_Db_CategoryPeer::shiftLevel($levelDelta, $left, $right, $con);
			}
	
			// move the subtree to the target
			Oops_Db_CategoryPeer::shiftRLValues($destLeft - $left, $left, $right, $con);
	
			// remove the empty room at the previous location of the subtree
			Oops_Db_CategoryPeer::shiftRLValues(-$treeSize, $right + 1, null, $con);
	
			// update all loaded nodes
			Oops_Db_CategoryPeer::updateLoadedNodes(null, $con);
	
			$con->commit();
		} catch (PropelException $e) {
			$con->rollback();
			throw $e;
		}
	}
	
	/**
	 * Deletes all descendants for the given node
	 * Instance pooling is wiped out by this command,
	 * so existing Oops_Db_Category instances are probably invalid (except for the current one)
	 *
	 * @param      PropelPDO $con Connection to use.
	 *
	 * @return     int 		number of deleted nodes
	 */
	public function deleteDescendants(PropelPDO $con = null)
	{
		if($this->isLeaf()) {
			// save one query
			return;
		}
		if ($con === null) {
			$con = Propel::getConnection(Oops_Db_CategoryPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}
		$left = $this->getLeftValue();
		$right = $this->getRightValue();
		$con->beginTransaction();
		try {
			// delete descendant nodes (will empty the instance pool)
			$ret = Oops_Db_CategoryQuery::create()
				->descendantsOf($this)
				->delete($con);
	
			// fill up the room that was used by descendants
			Oops_Db_CategoryPeer::shiftRLValues($left - $right + 1, $right, null, $con);
	
			// fix the right value for the current node, which is now a leaf
			$this->setRightValue($left + 1);
	
			$con->commit();
		} catch (Exception $e) {
			$con->rollback();
			throw $e;
		}
	
		return $ret;
	}
	
	/**
	 * Returns a pre-order iterator for this node and its children.
	 *
	 * @return     RecursiveIterator
	 */
	public function getIterator()
	{
		return new NestedSetRecursiveIterator($this);
	}

	// i18n behavior
	
	/**
	 * Sets the locale for translations
	 *
	 * @param     string $locale Locale to use for the translation, e.g. 'fr_FR'
	 *
	 * @return    Oops_Db_Category The current object (for fluent API support)
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
	 * @return Oops_Db_CategoryLang */
	public function getTranslation($locale = '1', PropelPDO $con = null)
	{
		if (!isset($this->currentTranslations[$locale])) {
			if (null !== $this->collCategoryLangs) {
				foreach ($this->collCategoryLangs as $translation) {
					if ($translation->getIdLang() == $locale) {
						$this->currentTranslations[$locale] = $translation;
						return $translation;
					}
				}
			}
			if ($this->isNew()) {
				$translation = new Oops_Db_CategoryLang();
				$translation->setIdLang($locale);
			} else {
				$translation = Oops_Db_CategoryLangQuery::create()
					->filterByPrimaryKey(array($this->getPrimaryKey(), $locale))
					->findOneOrCreate($con);
				$this->currentTranslations[$locale] = $translation;
			}
			$this->addCategoryLang($translation);
		}
	
		return $this->currentTranslations[$locale];
	}
	
	/**
	 * Remove the translation for a given locale
	 *
	 * @param     string $locale Locale to use for the translation, e.g. 'fr_FR'
	 * @param     PropelPDO $con an optional connection object
	 *
	 * @return    Oops_Db_Category The current object (for fluent API support)
	 */
	public function removeTranslation($locale = '1', PropelPDO $con = null)
	{
		if (!$this->isNew()) {
			Oops_Db_CategoryLangQuery::create()
				->filterByPrimaryKey(array($this->getPrimaryKey(), $locale))
				->delete($con);
		}
		if (isset($this->currentTranslations[$locale])) {
			unset($this->currentTranslations[$locale]);
		}
		foreach ($this->collCategoryLangs as $key => $translation) {
			if ($translation->getIdLang() == $locale) {
				unset($this->collCategoryLangs[$key]);
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
	 * @return Oops_Db_CategoryLang */
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
	 * @return     Oops_Db_Category The current object (for fluent API support)
	 */
	public function setName($v)
	{	$this->getCurrentTranslation()->setName($v);
	
		return $this;
	}
	
	
	/**
	 * Get the [description] column value.
	 * 
	 * @return     string
	 */
	public function getDescription()
	{	return $this->getCurrentTranslation()->getDescription();
	}
	
	
	/**
	 * Set the value of [description] column.
	 * 
	 * @param      string $v new value
	 * @return     Oops_Db_Category The current object (for fluent API support)
	 */
	public function setDescription($v)
	{	$this->getCurrentTranslation()->setDescription($v);
	
		return $this;
	}

} // Oops_Db_Propel_Category
