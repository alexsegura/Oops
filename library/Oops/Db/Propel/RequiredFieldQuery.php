<?php


/**
 * Base class that represents a query for the 'required_field' table.
 *
 * 
 *
 * @method     Oops_Db_RequiredFieldQuery orderByIdRequiredField($order = Criteria::ASC) Order by the id_required_field column
 * @method     Oops_Db_RequiredFieldQuery orderByObjectName($order = Criteria::ASC) Order by the object_name column
 * @method     Oops_Db_RequiredFieldQuery orderByFieldName($order = Criteria::ASC) Order by the field_name column
 *
 * @method     Oops_Db_RequiredFieldQuery groupByIdRequiredField() Group by the id_required_field column
 * @method     Oops_Db_RequiredFieldQuery groupByObjectName() Group by the object_name column
 * @method     Oops_Db_RequiredFieldQuery groupByFieldName() Group by the field_name column
 *
 * @method     Oops_Db_RequiredFieldQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     Oops_Db_RequiredFieldQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     Oops_Db_RequiredFieldQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     Oops_Db_RequiredField findOne(PropelPDO $con = null) Return the first Oops_Db_RequiredField matching the query
 * @method     Oops_Db_RequiredField findOneOrCreate(PropelPDO $con = null) Return the first Oops_Db_RequiredField matching the query, or a new Oops_Db_RequiredField object populated from the query conditions when no match is found
 *
 * @method     Oops_Db_RequiredField findOneByIdRequiredField(int $id_required_field) Return the first Oops_Db_RequiredField filtered by the id_required_field column
 * @method     Oops_Db_RequiredField findOneByObjectName(string $object_name) Return the first Oops_Db_RequiredField filtered by the object_name column
 * @method     Oops_Db_RequiredField findOneByFieldName(string $field_name) Return the first Oops_Db_RequiredField filtered by the field_name column
 *
 * @method     array findByIdRequiredField(int $id_required_field) Return Oops_Db_RequiredField objects filtered by the id_required_field column
 * @method     array findByObjectName(string $object_name) Return Oops_Db_RequiredField objects filtered by the object_name column
 * @method     array findByFieldName(string $field_name) Return Oops_Db_RequiredField objects filtered by the field_name column
 *
 * @package    propel.generator.prestashop.om
 */
abstract class Oops_Db_Propel_RequiredFieldQuery extends ModelCriteria
{
	
	/**
	 * Initializes internal state of Oops_Db_Propel_RequiredFieldQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'prestashop', $modelName = 'Oops_Db_RequiredField', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new Oops_Db_RequiredFieldQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    Oops_Db_RequiredFieldQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof Oops_Db_RequiredFieldQuery) {
			return $criteria;
		}
		$query = new Oops_Db_RequiredFieldQuery();
		if (null !== $modelAlias) {
			$query->setModelAlias($modelAlias);
		}
		if ($criteria instanceof Criteria) {
			$query->mergeWith($criteria);
		}
		return $query;
	}

	/**
	 * Find object by primary key.
	 * Propel uses the instance pool to skip the database if the object exists.
	 * Go fast if the query is untouched.
	 *
	 * <code>
	 * $obj  = $c->findPk(12, $con);
	 * </code>
	 *
	 * @param     mixed $key Primary key to use for the query
	 * @param     PropelPDO $con an optional connection object
	 *
	 * @return    Oops_Db_RequiredField|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ($key === null) {
			return null;
		}
		if ((null !== ($obj = Oops_Db_RequiredFieldPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
			// the object is alredy in the instance pool
			return $obj;
		}
		if ($con === null) {
			$con = Propel::getConnection(Oops_Db_RequiredFieldPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}
		$this->basePreSelect($con);
		if ($this->formatter || $this->modelAlias || $this->with || $this->select
		 || $this->selectColumns || $this->asColumns || $this->selectModifiers
		 || $this->map || $this->having || $this->joins) {
			return $this->findPkComplex($key, $con);
		} else {
			return $this->findPkSimple($key, $con);
		}
	}

	/**
	 * Find object by primary key using raw SQL to go fast.
	 * Bypass doSelect() and the object formatter by using generated code.
	 *
	 * @param     mixed $key Primary key to use for the query
	 * @param     PropelPDO $con A connection object
	 *
	 * @return    Oops_Db_RequiredField A model object, or null if the key is not found
	 */
	protected function findPkSimple($key, $con)
	{
		$sql = 'SELECT `ID_REQUIRED_FIELD`, `OBJECT_NAME`, `FIELD_NAME` FROM `' . _DB_PREFIX_ . 'required_field` WHERE `ID_REQUIRED_FIELD` = :p0';
		try {
			$stmt = $con->prepare($sql);
			$stmt->bindValue(':p0', $key, PDO::PARAM_INT);
			$stmt->execute();
		} catch (Exception $e) {
			Propel::log($e->getMessage(), Propel::LOG_ERR);
			throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
		}
		$obj = null;
		if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$obj = new Oops_Db_RequiredField();
			$obj->hydrate($row);
			Oops_Db_RequiredFieldPeer::addInstanceToPool($obj, (string) $row[0]);
		}
		$stmt->closeCursor();

		return $obj;
	}

	/**
	 * Find object by primary key.
	 *
	 * @param     mixed $key Primary key to use for the query
	 * @param     PropelPDO $con A connection object
	 *
	 * @return    Oops_Db_RequiredField|array|mixed the result, formatted by the current formatter
	 */
	protected function findPkComplex($key, $con)
	{
		// As the query uses a PK condition, no limit(1) is necessary.
		$criteria = $this->isKeepQuery() ? clone $this : $this;
		$stmt = $criteria
			->filterByPrimaryKey($key)
			->doSelect($con);
		return $criteria->getFormatter()->init($criteria)->formatOne($stmt);
	}

	/**
	 * Find objects by primary key
	 * <code>
	 * $objs = $c->findPks(array(12, 56, 832), $con);
	 * </code>
	 * @param     array $keys Primary keys to use for the query
	 * @param     PropelPDO $con an optional connection object
	 *
	 * @return    PropelObjectCollection|array|mixed the list of results, formatted by the current formatter
	 */
	public function findPks($keys, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection($this->getDbName(), Propel::CONNECTION_READ);
		}
		$this->basePreSelect($con);
		$criteria = $this->isKeepQuery() ? clone $this : $this;
		$stmt = $criteria
			->filterByPrimaryKeys($keys)
			->doSelect($con);
		return $criteria->getFormatter()->init($criteria)->format($stmt);
	}

	/**
	 * Filter the query by primary key
	 *
	 * @param     mixed $key Primary key to use for the query
	 *
	 * @return    Oops_Db_RequiredFieldQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(Oops_Db_RequiredFieldPeer::ID_REQUIRED_FIELD, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    Oops_Db_RequiredFieldQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(Oops_Db_RequiredFieldPeer::ID_REQUIRED_FIELD, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id_required_field column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByIdRequiredField(1234); // WHERE id_required_field = 1234
	 * $query->filterByIdRequiredField(array(12, 34)); // WHERE id_required_field IN (12, 34)
	 * $query->filterByIdRequiredField(array('min' => 12)); // WHERE id_required_field > 12
	 * </code>
	 *
	 * @param     mixed $idRequiredField The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Db_RequiredFieldQuery The current query, for fluid interface
	 */
	public function filterByIdRequiredField($idRequiredField = null, $comparison = null)
	{
		if (is_array($idRequiredField) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(Oops_Db_RequiredFieldPeer::ID_REQUIRED_FIELD, $idRequiredField, $comparison);
	}

	/**
	 * Filter the query on the object_name column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByObjectName('fooValue');   // WHERE object_name = 'fooValue'
	 * $query->filterByObjectName('%fooValue%'); // WHERE object_name LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $objectName The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Db_RequiredFieldQuery The current query, for fluid interface
	 */
	public function filterByObjectName($objectName = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($objectName)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $objectName)) {
				$objectName = str_replace('*', '%', $objectName);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(Oops_Db_RequiredFieldPeer::OBJECT_NAME, $objectName, $comparison);
	}

	/**
	 * Filter the query on the field_name column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByFieldName('fooValue');   // WHERE field_name = 'fooValue'
	 * $query->filterByFieldName('%fooValue%'); // WHERE field_name LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $fieldName The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Db_RequiredFieldQuery The current query, for fluid interface
	 */
	public function filterByFieldName($fieldName = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($fieldName)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $fieldName)) {
				$fieldName = str_replace('*', '%', $fieldName);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(Oops_Db_RequiredFieldPeer::FIELD_NAME, $fieldName, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     Oops_Db_RequiredField $requiredField Object to remove from the list of results
	 *
	 * @return    Oops_Db_RequiredFieldQuery The current query, for fluid interface
	 */
	public function prune($requiredField = null)
	{
		if ($requiredField) {
			$this->addUsingAlias(Oops_Db_RequiredFieldPeer::ID_REQUIRED_FIELD, $requiredField->getIdRequiredField(), Criteria::NOT_EQUAL);
		}

		return $this;
	}

} // Oops_Db_Propel_RequiredFieldQuery