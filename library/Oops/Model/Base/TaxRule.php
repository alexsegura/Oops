<?php


/**
 * Base class that represents a row from the 'tax_rule' table.
 *
 * 
 *
 * @package    propel.generator.prestashop.om
 */
abstract class Oops_Model_Base_TaxRule extends BaseObject  implements Persistent
{

	/**
	 * Peer class name
	 */
	const PEER = 'Oops_Model_TaxRulePeer';

	/**
	 * The Peer class.
	 * Instance provides a convenient way of calling static methods on a class
	 * that calling code may not be able to identify.
	 * @var        Oops_Model_TaxRulePeer
	 */
	protected static $peer;

	/**
	 * The value for the id_tax_rule field.
	 * @var        int
	 */
	protected $id_tax_rule;

	/**
	 * The value for the id_tax_rules_group field.
	 * @var        int
	 */
	protected $id_tax_rules_group;

	/**
	 * The value for the id_country field.
	 * @var        int
	 */
	protected $id_country;

	/**
	 * The value for the id_state field.
	 * @var        int
	 */
	protected $id_state;

	/**
	 * The value for the id_county field.
	 * @var        int
	 */
	protected $id_county;

	/**
	 * The value for the id_tax field.
	 * @var        int
	 */
	protected $id_tax;

	/**
	 * The value for the state_behavior field.
	 * @var        int
	 */
	protected $state_behavior;

	/**
	 * The value for the county_behavior field.
	 * @var        int
	 */
	protected $county_behavior;

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
	 * Get the [id_tax_rule] column value.
	 * 
	 * @return     int
	 */
	public function getIdTaxRule()
	{
		return $this->id_tax_rule;
	}

	/**
	 * Get the [id_tax_rules_group] column value.
	 * 
	 * @return     int
	 */
	public function getIdTaxRulesGroup()
	{
		return $this->id_tax_rules_group;
	}

	/**
	 * Get the [id_country] column value.
	 * 
	 * @return     int
	 */
	public function getIdCountry()
	{
		return $this->id_country;
	}

	/**
	 * Get the [id_state] column value.
	 * 
	 * @return     int
	 */
	public function getIdState()
	{
		return $this->id_state;
	}

	/**
	 * Get the [id_county] column value.
	 * 
	 * @return     int
	 */
	public function getIdCounty()
	{
		return $this->id_county;
	}

	/**
	 * Get the [id_tax] column value.
	 * 
	 * @return     int
	 */
	public function getIdTax()
	{
		return $this->id_tax;
	}

	/**
	 * Get the [state_behavior] column value.
	 * 
	 * @return     int
	 */
	public function getStateBehavior()
	{
		return $this->state_behavior;
	}

	/**
	 * Get the [county_behavior] column value.
	 * 
	 * @return     int
	 */
	public function getCountyBehavior()
	{
		return $this->county_behavior;
	}

	/**
	 * Set the value of [id_tax_rule] column.
	 * 
	 * @param      int $v new value
	 * @return     Oops_Model_TaxRule The current object (for fluent API support)
	 */
	public function setIdTaxRule($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->id_tax_rule !== $v) {
			$this->id_tax_rule = $v;
			$this->modifiedColumns[] = Oops_Model_TaxRulePeer::ID_TAX_RULE;
		}

		return $this;
	} // setIdTaxRule()

	/**
	 * Set the value of [id_tax_rules_group] column.
	 * 
	 * @param      int $v new value
	 * @return     Oops_Model_TaxRule The current object (for fluent API support)
	 */
	public function setIdTaxRulesGroup($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->id_tax_rules_group !== $v) {
			$this->id_tax_rules_group = $v;
			$this->modifiedColumns[] = Oops_Model_TaxRulePeer::ID_TAX_RULES_GROUP;
		}

		return $this;
	} // setIdTaxRulesGroup()

	/**
	 * Set the value of [id_country] column.
	 * 
	 * @param      int $v new value
	 * @return     Oops_Model_TaxRule The current object (for fluent API support)
	 */
	public function setIdCountry($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->id_country !== $v) {
			$this->id_country = $v;
			$this->modifiedColumns[] = Oops_Model_TaxRulePeer::ID_COUNTRY;
		}

		return $this;
	} // setIdCountry()

	/**
	 * Set the value of [id_state] column.
	 * 
	 * @param      int $v new value
	 * @return     Oops_Model_TaxRule The current object (for fluent API support)
	 */
	public function setIdState($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->id_state !== $v) {
			$this->id_state = $v;
			$this->modifiedColumns[] = Oops_Model_TaxRulePeer::ID_STATE;
		}

		return $this;
	} // setIdState()

	/**
	 * Set the value of [id_county] column.
	 * 
	 * @param      int $v new value
	 * @return     Oops_Model_TaxRule The current object (for fluent API support)
	 */
	public function setIdCounty($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->id_county !== $v) {
			$this->id_county = $v;
			$this->modifiedColumns[] = Oops_Model_TaxRulePeer::ID_COUNTY;
		}

		return $this;
	} // setIdCounty()

	/**
	 * Set the value of [id_tax] column.
	 * 
	 * @param      int $v new value
	 * @return     Oops_Model_TaxRule The current object (for fluent API support)
	 */
	public function setIdTax($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->id_tax !== $v) {
			$this->id_tax = $v;
			$this->modifiedColumns[] = Oops_Model_TaxRulePeer::ID_TAX;
		}

		return $this;
	} // setIdTax()

	/**
	 * Set the value of [state_behavior] column.
	 * 
	 * @param      int $v new value
	 * @return     Oops_Model_TaxRule The current object (for fluent API support)
	 */
	public function setStateBehavior($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->state_behavior !== $v) {
			$this->state_behavior = $v;
			$this->modifiedColumns[] = Oops_Model_TaxRulePeer::STATE_BEHAVIOR;
		}

		return $this;
	} // setStateBehavior()

	/**
	 * Set the value of [county_behavior] column.
	 * 
	 * @param      int $v new value
	 * @return     Oops_Model_TaxRule The current object (for fluent API support)
	 */
	public function setCountyBehavior($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->county_behavior !== $v) {
			$this->county_behavior = $v;
			$this->modifiedColumns[] = Oops_Model_TaxRulePeer::COUNTY_BEHAVIOR;
		}

		return $this;
	} // setCountyBehavior()

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

			$this->id_tax_rule = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
			$this->id_tax_rules_group = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
			$this->id_country = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
			$this->id_state = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
			$this->id_county = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
			$this->id_tax = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
			$this->state_behavior = ($row[$startcol + 6] !== null) ? (int) $row[$startcol + 6] : null;
			$this->county_behavior = ($row[$startcol + 7] !== null) ? (int) $row[$startcol + 7] : null;
			$this->resetModified();

			$this->setNew(false);

			if ($rehydrate) {
				$this->ensureConsistency();
			}

			return $startcol + 8; // 8 = Oops_Model_TaxRulePeer::NUM_HYDRATE_COLUMNS.

		} catch (Exception $e) {
			throw new PropelException("Error populating Oops_Model_TaxRule object", $e);
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
			$con = Propel::getConnection(Oops_Model_TaxRulePeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		// We don't need to alter the object instance pool; we're just modifying this instance
		// already in the pool.

		$stmt = Oops_Model_TaxRulePeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
			$con = Propel::getConnection(Oops_Model_TaxRulePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$con->beginTransaction();
		try {
			$deleteQuery = Oops_Model_TaxRuleQuery::create()
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
			$con = Propel::getConnection(Oops_Model_TaxRulePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
				Oops_Model_TaxRulePeer::addInstanceToPool($this);
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

		$this->modifiedColumns[] = Oops_Model_TaxRulePeer::ID_TAX_RULE;
		if (null !== $this->id_tax_rule) {
			throw new PropelException('Cannot insert a value for auto-increment primary key (' . Oops_Model_TaxRulePeer::ID_TAX_RULE . ')');
		}

		 // check the columns in natural order for more readable SQL queries
		if ($this->isColumnModified(Oops_Model_TaxRulePeer::ID_TAX_RULE)) {
			$modifiedColumns[':p' . $index++]  = '`ID_TAX_RULE`';
		}
		if ($this->isColumnModified(Oops_Model_TaxRulePeer::ID_TAX_RULES_GROUP)) {
			$modifiedColumns[':p' . $index++]  = '`ID_TAX_RULES_GROUP`';
		}
		if ($this->isColumnModified(Oops_Model_TaxRulePeer::ID_COUNTRY)) {
			$modifiedColumns[':p' . $index++]  = '`ID_COUNTRY`';
		}
		if ($this->isColumnModified(Oops_Model_TaxRulePeer::ID_STATE)) {
			$modifiedColumns[':p' . $index++]  = '`ID_STATE`';
		}
		if ($this->isColumnModified(Oops_Model_TaxRulePeer::ID_COUNTY)) {
			$modifiedColumns[':p' . $index++]  = '`ID_COUNTY`';
		}
		if ($this->isColumnModified(Oops_Model_TaxRulePeer::ID_TAX)) {
			$modifiedColumns[':p' . $index++]  = '`ID_TAX`';
		}
		if ($this->isColumnModified(Oops_Model_TaxRulePeer::STATE_BEHAVIOR)) {
			$modifiedColumns[':p' . $index++]  = '`STATE_BEHAVIOR`';
		}
		if ($this->isColumnModified(Oops_Model_TaxRulePeer::COUNTY_BEHAVIOR)) {
			$modifiedColumns[':p' . $index++]  = '`COUNTY_BEHAVIOR`';
		}

		$sql = sprintf(
			'INSERT INTO `' .  _DB_PREFIX_ . 'tax_rule` (%s) VALUES (%s)',
			implode(', ', $modifiedColumns),
			implode(', ', array_keys($modifiedColumns))
		);

		try {
			$stmt = $con->prepare($sql);
			foreach ($modifiedColumns as $identifier => $columnName) {
				switch ($columnName) {
					case '`ID_TAX_RULE`':
						$stmt->bindValue($identifier, $this->id_tax_rule, PDO::PARAM_INT);
						break;
					case '`ID_TAX_RULES_GROUP`':
						$stmt->bindValue($identifier, $this->id_tax_rules_group, PDO::PARAM_INT);
						break;
					case '`ID_COUNTRY`':
						$stmt->bindValue($identifier, $this->id_country, PDO::PARAM_INT);
						break;
					case '`ID_STATE`':
						$stmt->bindValue($identifier, $this->id_state, PDO::PARAM_INT);
						break;
					case '`ID_COUNTY`':
						$stmt->bindValue($identifier, $this->id_county, PDO::PARAM_INT);
						break;
					case '`ID_TAX`':
						$stmt->bindValue($identifier, $this->id_tax, PDO::PARAM_INT);
						break;
					case '`STATE_BEHAVIOR`':
						$stmt->bindValue($identifier, $this->state_behavior, PDO::PARAM_INT);
						break;
					case '`COUNTY_BEHAVIOR`':
						$stmt->bindValue($identifier, $this->county_behavior, PDO::PARAM_INT);
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
		$this->setIdTaxRule($pk);

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


			if (($retval = Oops_Model_TaxRulePeer::doValidate($this, $columns)) !== true) {
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
		$pos = Oops_Model_TaxRulePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getIdTaxRule();
				break;
			case 1:
				return $this->getIdTaxRulesGroup();
				break;
			case 2:
				return $this->getIdCountry();
				break;
			case 3:
				return $this->getIdState();
				break;
			case 4:
				return $this->getIdCounty();
				break;
			case 5:
				return $this->getIdTax();
				break;
			case 6:
				return $this->getStateBehavior();
				break;
			case 7:
				return $this->getCountyBehavior();
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
		if (isset($alreadyDumpedObjects['Oops_Model_TaxRule'][$this->getPrimaryKey()])) {
			return '*RECURSION*';
		}
		$alreadyDumpedObjects['Oops_Model_TaxRule'][$this->getPrimaryKey()] = true;
		$keys = Oops_Model_TaxRulePeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getIdTaxRule(),
			$keys[1] => $this->getIdTaxRulesGroup(),
			$keys[2] => $this->getIdCountry(),
			$keys[3] => $this->getIdState(),
			$keys[4] => $this->getIdCounty(),
			$keys[5] => $this->getIdTax(),
			$keys[6] => $this->getStateBehavior(),
			$keys[7] => $this->getCountyBehavior(),
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
		$pos = Oops_Model_TaxRulePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setIdTaxRule($value);
				break;
			case 1:
				$this->setIdTaxRulesGroup($value);
				break;
			case 2:
				$this->setIdCountry($value);
				break;
			case 3:
				$this->setIdState($value);
				break;
			case 4:
				$this->setIdCounty($value);
				break;
			case 5:
				$this->setIdTax($value);
				break;
			case 6:
				$this->setStateBehavior($value);
				break;
			case 7:
				$this->setCountyBehavior($value);
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
		$keys = Oops_Model_TaxRulePeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setIdTaxRule($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setIdTaxRulesGroup($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setIdCountry($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setIdState($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setIdCounty($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setIdTax($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setStateBehavior($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setCountyBehavior($arr[$keys[7]]);
	}

	/**
	 * Build a Criteria object containing the values of all modified columns in this object.
	 *
	 * @return     Criteria The Criteria object containing all modified values.
	 */
	public function buildCriteria()
	{
		$criteria = new Criteria(Oops_Model_TaxRulePeer::DATABASE_NAME);

		if ($this->isColumnModified(Oops_Model_TaxRulePeer::ID_TAX_RULE)) $criteria->add(Oops_Model_TaxRulePeer::ID_TAX_RULE, $this->id_tax_rule);
		if ($this->isColumnModified(Oops_Model_TaxRulePeer::ID_TAX_RULES_GROUP)) $criteria->add(Oops_Model_TaxRulePeer::ID_TAX_RULES_GROUP, $this->id_tax_rules_group);
		if ($this->isColumnModified(Oops_Model_TaxRulePeer::ID_COUNTRY)) $criteria->add(Oops_Model_TaxRulePeer::ID_COUNTRY, $this->id_country);
		if ($this->isColumnModified(Oops_Model_TaxRulePeer::ID_STATE)) $criteria->add(Oops_Model_TaxRulePeer::ID_STATE, $this->id_state);
		if ($this->isColumnModified(Oops_Model_TaxRulePeer::ID_COUNTY)) $criteria->add(Oops_Model_TaxRulePeer::ID_COUNTY, $this->id_county);
		if ($this->isColumnModified(Oops_Model_TaxRulePeer::ID_TAX)) $criteria->add(Oops_Model_TaxRulePeer::ID_TAX, $this->id_tax);
		if ($this->isColumnModified(Oops_Model_TaxRulePeer::STATE_BEHAVIOR)) $criteria->add(Oops_Model_TaxRulePeer::STATE_BEHAVIOR, $this->state_behavior);
		if ($this->isColumnModified(Oops_Model_TaxRulePeer::COUNTY_BEHAVIOR)) $criteria->add(Oops_Model_TaxRulePeer::COUNTY_BEHAVIOR, $this->county_behavior);

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
		$criteria = new Criteria(Oops_Model_TaxRulePeer::DATABASE_NAME);
		$criteria->add(Oops_Model_TaxRulePeer::ID_TAX_RULE, $this->id_tax_rule);

		return $criteria;
	}

	/**
	 * Returns the primary key for this object (row).
	 * @return     int
	 */
	public function getPrimaryKey()
	{
		return $this->getIdTaxRule();
	}

	/**
	 * Generic method to set the primary key (id_tax_rule column).
	 *
	 * @param      int $key Primary key.
	 * @return     void
	 */
	public function setPrimaryKey($key)
	{
		$this->setIdTaxRule($key);
	}

	/**
	 * Returns true if the primary key for this object is null.
	 * @return     boolean
	 */
	public function isPrimaryKeyNull()
	{
		return null === $this->getIdTaxRule();
	}

	/**
	 * Sets contents of passed object to values from current object.
	 *
	 * If desired, this method can also make copies of all associated (fkey referrers)
	 * objects.
	 *
	 * @param      object $copyObj An object of Oops_Model_TaxRule (or compatible) type.
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
	 * @throws     PropelException
	 */
	public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
	{
		$copyObj->setIdTaxRulesGroup($this->getIdTaxRulesGroup());
		$copyObj->setIdCountry($this->getIdCountry());
		$copyObj->setIdState($this->getIdState());
		$copyObj->setIdCounty($this->getIdCounty());
		$copyObj->setIdTax($this->getIdTax());
		$copyObj->setStateBehavior($this->getStateBehavior());
		$copyObj->setCountyBehavior($this->getCountyBehavior());
		if ($makeNew) {
			$copyObj->setNew(true);
			$copyObj->setIdTaxRule(NULL); // this is a auto-increment column, so set to default value
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
	 * @return     Oops_Model_TaxRule Clone of current object.
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
	 * @return     Oops_Model_TaxRulePeer
	 */
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new Oops_Model_TaxRulePeer();
		}
		return self::$peer;
	}

	/**
	 * Clears the current object and sets all attributes to their default values
	 */
	public function clear()
	{
		$this->id_tax_rule = null;
		$this->id_tax_rules_group = null;
		$this->id_country = null;
		$this->id_state = null;
		$this->id_county = null;
		$this->id_tax = null;
		$this->state_behavior = null;
		$this->county_behavior = null;
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
		return (string) $this->exportTo(Oops_Model_TaxRulePeer::DEFAULT_STRING_FORMAT);
	}

} // Oops_Model_Base_TaxRule
