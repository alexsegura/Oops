<?php


/**
 * Base class that represents a row from the 'djland_connections_source' table.
 *
 * 
 *
 * @package    propel.generator.prestashop.om
 */
abstract class Oops_Model_Base_ConnectionsSource extends BaseObject  implements Persistent
{

	/**
	 * Peer class name
	 */
	const PEER = 'Oops_Model_ConnectionsSourcePeer';

	/**
	 * The Peer class.
	 * Instance provides a convenient way of calling static methods on a class
	 * that calling code may not be able to identify.
	 * @var        Oops_Model_ConnectionsSourcePeer
	 */
	protected static $peer;

	/**
	 * The value for the id_connections_source field.
	 * @var        int
	 */
	protected $id_connections_source;

	/**
	 * The value for the id_connections field.
	 * @var        int
	 */
	protected $id_connections;

	/**
	 * The value for the http_referer field.
	 * @var        string
	 */
	protected $http_referer;

	/**
	 * The value for the request_uri field.
	 * @var        string
	 */
	protected $request_uri;

	/**
	 * The value for the keywords field.
	 * @var        string
	 */
	protected $keywords;

	/**
	 * The value for the date_add field.
	 * @var        string
	 */
	protected $date_add;

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
	 * Get the [id_connections_source] column value.
	 * 
	 * @return     int
	 */
	public function getIdConnectionsSource()
	{
		return $this->id_connections_source;
	}

	/**
	 * Get the [id_connections] column value.
	 * 
	 * @return     int
	 */
	public function getIdConnections()
	{
		return $this->id_connections;
	}

	/**
	 * Get the [http_referer] column value.
	 * 
	 * @return     string
	 */
	public function getHttpReferer()
	{
		return $this->http_referer;
	}

	/**
	 * Get the [request_uri] column value.
	 * 
	 * @return     string
	 */
	public function getRequestUri()
	{
		return $this->request_uri;
	}

	/**
	 * Get the [keywords] column value.
	 * 
	 * @return     string
	 */
	public function getKeywords()
	{
		return $this->keywords;
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
	 * Set the value of [id_connections_source] column.
	 * 
	 * @param      int $v new value
	 * @return     Oops_Model_ConnectionsSource The current object (for fluent API support)
	 */
	public function setIdConnectionsSource($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->id_connections_source !== $v) {
			$this->id_connections_source = $v;
			$this->modifiedColumns[] = Oops_Model_ConnectionsSourcePeer::ID_CONNECTIONS_SOURCE;
		}

		return $this;
	} // setIdConnectionsSource()

	/**
	 * Set the value of [id_connections] column.
	 * 
	 * @param      int $v new value
	 * @return     Oops_Model_ConnectionsSource The current object (for fluent API support)
	 */
	public function setIdConnections($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->id_connections !== $v) {
			$this->id_connections = $v;
			$this->modifiedColumns[] = Oops_Model_ConnectionsSourcePeer::ID_CONNECTIONS;
		}

		return $this;
	} // setIdConnections()

	/**
	 * Set the value of [http_referer] column.
	 * 
	 * @param      string $v new value
	 * @return     Oops_Model_ConnectionsSource The current object (for fluent API support)
	 */
	public function setHttpReferer($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->http_referer !== $v) {
			$this->http_referer = $v;
			$this->modifiedColumns[] = Oops_Model_ConnectionsSourcePeer::HTTP_REFERER;
		}

		return $this;
	} // setHttpReferer()

	/**
	 * Set the value of [request_uri] column.
	 * 
	 * @param      string $v new value
	 * @return     Oops_Model_ConnectionsSource The current object (for fluent API support)
	 */
	public function setRequestUri($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->request_uri !== $v) {
			$this->request_uri = $v;
			$this->modifiedColumns[] = Oops_Model_ConnectionsSourcePeer::REQUEST_URI;
		}

		return $this;
	} // setRequestUri()

	/**
	 * Set the value of [keywords] column.
	 * 
	 * @param      string $v new value
	 * @return     Oops_Model_ConnectionsSource The current object (for fluent API support)
	 */
	public function setKeywords($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->keywords !== $v) {
			$this->keywords = $v;
			$this->modifiedColumns[] = Oops_Model_ConnectionsSourcePeer::KEYWORDS;
		}

		return $this;
	} // setKeywords()

	/**
	 * Sets the value of [date_add] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.
	 *               Empty strings are treated as NULL.
	 * @return     Oops_Model_ConnectionsSource The current object (for fluent API support)
	 */
	public function setDateAdd($v)
	{
		$dt = PropelDateTime::newInstance($v, null, 'DateTime');
		if ($this->date_add !== null || $dt !== null) {
			$currentDateAsString = ($this->date_add !== null && $tmpDt = new DateTime($this->date_add)) ? $tmpDt->format('Y-m-d H:i:s') : null;
			$newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
			if ($currentDateAsString !== $newDateAsString) {
				$this->date_add = $newDateAsString;
				$this->modifiedColumns[] = Oops_Model_ConnectionsSourcePeer::DATE_ADD;
			}
		} // if either are not null

		return $this;
	} // setDateAdd()

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

			$this->id_connections_source = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
			$this->id_connections = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
			$this->http_referer = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
			$this->request_uri = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
			$this->keywords = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
			$this->date_add = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
			$this->resetModified();

			$this->setNew(false);

			if ($rehydrate) {
				$this->ensureConsistency();
			}

			return $startcol + 6; // 6 = Oops_Model_ConnectionsSourcePeer::NUM_HYDRATE_COLUMNS.

		} catch (Exception $e) {
			throw new PropelException("Error populating Oops_Model_ConnectionsSource object", $e);
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
			$con = Propel::getConnection(Oops_Model_ConnectionsSourcePeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		// We don't need to alter the object instance pool; we're just modifying this instance
		// already in the pool.

		$stmt = Oops_Model_ConnectionsSourcePeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
			$con = Propel::getConnection(Oops_Model_ConnectionsSourcePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$con->beginTransaction();
		try {
			$deleteQuery = Oops_Model_ConnectionsSourceQuery::create()
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
			$con = Propel::getConnection(Oops_Model_ConnectionsSourcePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
				Oops_Model_ConnectionsSourcePeer::addInstanceToPool($this);
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

		$this->modifiedColumns[] = Oops_Model_ConnectionsSourcePeer::ID_CONNECTIONS_SOURCE;
		if (null !== $this->id_connections_source) {
			throw new PropelException('Cannot insert a value for auto-increment primary key (' . Oops_Model_ConnectionsSourcePeer::ID_CONNECTIONS_SOURCE . ')');
		}

		 // check the columns in natural order for more readable SQL queries
		if ($this->isColumnModified(Oops_Model_ConnectionsSourcePeer::ID_CONNECTIONS_SOURCE)) {
			$modifiedColumns[':p' . $index++]  = '`ID_CONNECTIONS_SOURCE`';
		}
		if ($this->isColumnModified(Oops_Model_ConnectionsSourcePeer::ID_CONNECTIONS)) {
			$modifiedColumns[':p' . $index++]  = '`ID_CONNECTIONS`';
		}
		if ($this->isColumnModified(Oops_Model_ConnectionsSourcePeer::HTTP_REFERER)) {
			$modifiedColumns[':p' . $index++]  = '`HTTP_REFERER`';
		}
		if ($this->isColumnModified(Oops_Model_ConnectionsSourcePeer::REQUEST_URI)) {
			$modifiedColumns[':p' . $index++]  = '`REQUEST_URI`';
		}
		if ($this->isColumnModified(Oops_Model_ConnectionsSourcePeer::KEYWORDS)) {
			$modifiedColumns[':p' . $index++]  = '`KEYWORDS`';
		}
		if ($this->isColumnModified(Oops_Model_ConnectionsSourcePeer::DATE_ADD)) {
			$modifiedColumns[':p' . $index++]  = '`DATE_ADD`';
		}

		$sql = sprintf(
			'INSERT INTO `' . _DB_PREFIX_ . 'djland_connections_source` (%s) VALUES (%s)',
			implode(', ', $modifiedColumns),
			implode(', ', array_keys($modifiedColumns))
		);

		try {
			$stmt = $con->prepare($sql);
			foreach ($modifiedColumns as $identifier => $columnName) {
				switch ($columnName) {
					case '`ID_CONNECTIONS_SOURCE`':
						$stmt->bindValue($identifier, $this->id_connections_source, PDO::PARAM_INT);
						break;
					case '`ID_CONNECTIONS`':
						$stmt->bindValue($identifier, $this->id_connections, PDO::PARAM_INT);
						break;
					case '`HTTP_REFERER`':
						$stmt->bindValue($identifier, $this->http_referer, PDO::PARAM_STR);
						break;
					case '`REQUEST_URI`':
						$stmt->bindValue($identifier, $this->request_uri, PDO::PARAM_STR);
						break;
					case '`KEYWORDS`':
						$stmt->bindValue($identifier, $this->keywords, PDO::PARAM_STR);
						break;
					case '`DATE_ADD`':
						$stmt->bindValue($identifier, $this->date_add, PDO::PARAM_STR);
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
		$this->setIdConnectionsSource($pk);

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


			if (($retval = Oops_Model_ConnectionsSourcePeer::doValidate($this, $columns)) !== true) {
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
		$pos = Oops_Model_ConnectionsSourcePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getIdConnectionsSource();
				break;
			case 1:
				return $this->getIdConnections();
				break;
			case 2:
				return $this->getHttpReferer();
				break;
			case 3:
				return $this->getRequestUri();
				break;
			case 4:
				return $this->getKeywords();
				break;
			case 5:
				return $this->getDateAdd();
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
		if (isset($alreadyDumpedObjects['Oops_Model_ConnectionsSource'][$this->getPrimaryKey()])) {
			return '*RECURSION*';
		}
		$alreadyDumpedObjects['Oops_Model_ConnectionsSource'][$this->getPrimaryKey()] = true;
		$keys = Oops_Model_ConnectionsSourcePeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getIdConnectionsSource(),
			$keys[1] => $this->getIdConnections(),
			$keys[2] => $this->getHttpReferer(),
			$keys[3] => $this->getRequestUri(),
			$keys[4] => $this->getKeywords(),
			$keys[5] => $this->getDateAdd(),
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
		$pos = Oops_Model_ConnectionsSourcePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setIdConnectionsSource($value);
				break;
			case 1:
				$this->setIdConnections($value);
				break;
			case 2:
				$this->setHttpReferer($value);
				break;
			case 3:
				$this->setRequestUri($value);
				break;
			case 4:
				$this->setKeywords($value);
				break;
			case 5:
				$this->setDateAdd($value);
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
		$keys = Oops_Model_ConnectionsSourcePeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setIdConnectionsSource($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setIdConnections($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setHttpReferer($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setRequestUri($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setKeywords($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setDateAdd($arr[$keys[5]]);
	}

	/**
	 * Build a Criteria object containing the values of all modified columns in this object.
	 *
	 * @return     Criteria The Criteria object containing all modified values.
	 */
	public function buildCriteria()
	{
		$criteria = new Criteria(Oops_Model_ConnectionsSourcePeer::DATABASE_NAME);

		if ($this->isColumnModified(Oops_Model_ConnectionsSourcePeer::ID_CONNECTIONS_SOURCE)) $criteria->add(Oops_Model_ConnectionsSourcePeer::ID_CONNECTIONS_SOURCE, $this->id_connections_source);
		if ($this->isColumnModified(Oops_Model_ConnectionsSourcePeer::ID_CONNECTIONS)) $criteria->add(Oops_Model_ConnectionsSourcePeer::ID_CONNECTIONS, $this->id_connections);
		if ($this->isColumnModified(Oops_Model_ConnectionsSourcePeer::HTTP_REFERER)) $criteria->add(Oops_Model_ConnectionsSourcePeer::HTTP_REFERER, $this->http_referer);
		if ($this->isColumnModified(Oops_Model_ConnectionsSourcePeer::REQUEST_URI)) $criteria->add(Oops_Model_ConnectionsSourcePeer::REQUEST_URI, $this->request_uri);
		if ($this->isColumnModified(Oops_Model_ConnectionsSourcePeer::KEYWORDS)) $criteria->add(Oops_Model_ConnectionsSourcePeer::KEYWORDS, $this->keywords);
		if ($this->isColumnModified(Oops_Model_ConnectionsSourcePeer::DATE_ADD)) $criteria->add(Oops_Model_ConnectionsSourcePeer::DATE_ADD, $this->date_add);

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
		$criteria = new Criteria(Oops_Model_ConnectionsSourcePeer::DATABASE_NAME);
		$criteria->add(Oops_Model_ConnectionsSourcePeer::ID_CONNECTIONS_SOURCE, $this->id_connections_source);

		return $criteria;
	}

	/**
	 * Returns the primary key for this object (row).
	 * @return     int
	 */
	public function getPrimaryKey()
	{
		return $this->getIdConnectionsSource();
	}

	/**
	 * Generic method to set the primary key (id_connections_source column).
	 *
	 * @param      int $key Primary key.
	 * @return     void
	 */
	public function setPrimaryKey($key)
	{
		$this->setIdConnectionsSource($key);
	}

	/**
	 * Returns true if the primary key for this object is null.
	 * @return     boolean
	 */
	public function isPrimaryKeyNull()
	{
		return null === $this->getIdConnectionsSource();
	}

	/**
	 * Sets contents of passed object to values from current object.
	 *
	 * If desired, this method can also make copies of all associated (fkey referrers)
	 * objects.
	 *
	 * @param      object $copyObj An object of Oops_Model_ConnectionsSource (or compatible) type.
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
	 * @throws     PropelException
	 */
	public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
	{
		$copyObj->setIdConnections($this->getIdConnections());
		$copyObj->setHttpReferer($this->getHttpReferer());
		$copyObj->setRequestUri($this->getRequestUri());
		$copyObj->setKeywords($this->getKeywords());
		$copyObj->setDateAdd($this->getDateAdd());
		if ($makeNew) {
			$copyObj->setNew(true);
			$copyObj->setIdConnectionsSource(NULL); // this is a auto-increment column, so set to default value
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
	 * @return     Oops_Model_ConnectionsSource Clone of current object.
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
	 * @return     Oops_Model_ConnectionsSourcePeer
	 */
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new Oops_Model_ConnectionsSourcePeer();
		}
		return self::$peer;
	}

	/**
	 * Clears the current object and sets all attributes to their default values
	 */
	public function clear()
	{
		$this->id_connections_source = null;
		$this->id_connections = null;
		$this->http_referer = null;
		$this->request_uri = null;
		$this->keywords = null;
		$this->date_add = null;
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
		return (string) $this->exportTo(Oops_Model_ConnectionsSourcePeer::DEFAULT_STRING_FORMAT);
	}

} // Oops_Model_Base_ConnectionsSource
