<?php


/**
 * Base class that represents a query for the 'customization_field' table.
 *
 * 
 *
 * @method     Oops_Db_CustomizationFieldQuery orderByIdCustomizationField($order = Criteria::ASC) Order by the id_customization_field column
 * @method     Oops_Db_CustomizationFieldQuery orderByIdProduct($order = Criteria::ASC) Order by the id_product column
 * @method     Oops_Db_CustomizationFieldQuery orderByType($order = Criteria::ASC) Order by the type column
 * @method     Oops_Db_CustomizationFieldQuery orderByRequired($order = Criteria::ASC) Order by the required column
 *
 * @method     Oops_Db_CustomizationFieldQuery groupByIdCustomizationField() Group by the id_customization_field column
 * @method     Oops_Db_CustomizationFieldQuery groupByIdProduct() Group by the id_product column
 * @method     Oops_Db_CustomizationFieldQuery groupByType() Group by the type column
 * @method     Oops_Db_CustomizationFieldQuery groupByRequired() Group by the required column
 *
 * @method     Oops_Db_CustomizationFieldQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     Oops_Db_CustomizationFieldQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     Oops_Db_CustomizationFieldQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     Oops_Db_CustomizationField findOne(PropelPDO $con = null) Return the first Oops_Db_CustomizationField matching the query
 * @method     Oops_Db_CustomizationField findOneOrCreate(PropelPDO $con = null) Return the first Oops_Db_CustomizationField matching the query, or a new Oops_Db_CustomizationField object populated from the query conditions when no match is found
 *
 * @method     Oops_Db_CustomizationField findOneByIdCustomizationField(int $id_customization_field) Return the first Oops_Db_CustomizationField filtered by the id_customization_field column
 * @method     Oops_Db_CustomizationField findOneByIdProduct(int $id_product) Return the first Oops_Db_CustomizationField filtered by the id_product column
 * @method     Oops_Db_CustomizationField findOneByType(boolean $type) Return the first Oops_Db_CustomizationField filtered by the type column
 * @method     Oops_Db_CustomizationField findOneByRequired(boolean $required) Return the first Oops_Db_CustomizationField filtered by the required column
 *
 * @method     array findByIdCustomizationField(int $id_customization_field) Return Oops_Db_CustomizationField objects filtered by the id_customization_field column
 * @method     array findByIdProduct(int $id_product) Return Oops_Db_CustomizationField objects filtered by the id_product column
 * @method     array findByType(boolean $type) Return Oops_Db_CustomizationField objects filtered by the type column
 * @method     array findByRequired(boolean $required) Return Oops_Db_CustomizationField objects filtered by the required column
 *
 * @package    propel.generator.prestashop.om
 */
abstract class Oops_Db_Propel_CustomizationFieldQuery extends ModelCriteria
{
	
	/**
	 * Initializes internal state of Oops_Db_Propel_CustomizationFieldQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'prestashop', $modelName = 'Oops_Db_CustomizationField', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new Oops_Db_CustomizationFieldQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    Oops_Db_CustomizationFieldQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof Oops_Db_CustomizationFieldQuery) {
			return $criteria;
		}
		$query = new Oops_Db_CustomizationFieldQuery();
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
	 * @return    Oops_Db_CustomizationField|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ($key === null) {
			return null;
		}
		if ((null !== ($obj = Oops_Db_CustomizationFieldPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
			// the object is alredy in the instance pool
			return $obj;
		}
		if ($con === null) {
			$con = Propel::getConnection(Oops_Db_CustomizationFieldPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
	 * @return    Oops_Db_CustomizationField A model object, or null if the key is not found
	 */
	protected function findPkSimple($key, $con)
	{
		$sql = 'SELECT `ID_CUSTOMIZATION_FIELD`, `ID_PRODUCT`, `TYPE`, `REQUIRED` FROM `' . _DB_PREFIX_ . 'customization_field` WHERE `ID_CUSTOMIZATION_FIELD` = :p0';
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
			$obj = new Oops_Db_CustomizationField();
			$obj->hydrate($row);
			Oops_Db_CustomizationFieldPeer::addInstanceToPool($obj, (string) $row[0]);
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
	 * @return    Oops_Db_CustomizationField|array|mixed the result, formatted by the current formatter
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
	 * @return    Oops_Db_CustomizationFieldQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(Oops_Db_CustomizationFieldPeer::ID_CUSTOMIZATION_FIELD, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    Oops_Db_CustomizationFieldQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(Oops_Db_CustomizationFieldPeer::ID_CUSTOMIZATION_FIELD, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id_customization_field column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByIdCustomizationField(1234); // WHERE id_customization_field = 1234
	 * $query->filterByIdCustomizationField(array(12, 34)); // WHERE id_customization_field IN (12, 34)
	 * $query->filterByIdCustomizationField(array('min' => 12)); // WHERE id_customization_field > 12
	 * </code>
	 *
	 * @param     mixed $idCustomizationField The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Db_CustomizationFieldQuery The current query, for fluid interface
	 */
	public function filterByIdCustomizationField($idCustomizationField = null, $comparison = null)
	{
		if (is_array($idCustomizationField) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(Oops_Db_CustomizationFieldPeer::ID_CUSTOMIZATION_FIELD, $idCustomizationField, $comparison);
	}

	/**
	 * Filter the query on the id_product column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByIdProduct(1234); // WHERE id_product = 1234
	 * $query->filterByIdProduct(array(12, 34)); // WHERE id_product IN (12, 34)
	 * $query->filterByIdProduct(array('min' => 12)); // WHERE id_product > 12
	 * </code>
	 *
	 * @param     mixed $idProduct The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Db_CustomizationFieldQuery The current query, for fluid interface
	 */
	public function filterByIdProduct($idProduct = null, $comparison = null)
	{
		if (is_array($idProduct)) {
			$useMinMax = false;
			if (isset($idProduct['min'])) {
				$this->addUsingAlias(Oops_Db_CustomizationFieldPeer::ID_PRODUCT, $idProduct['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($idProduct['max'])) {
				$this->addUsingAlias(Oops_Db_CustomizationFieldPeer::ID_PRODUCT, $idProduct['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Db_CustomizationFieldPeer::ID_PRODUCT, $idProduct, $comparison);
	}

	/**
	 * Filter the query on the type column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByType(true); // WHERE type = true
	 * $query->filterByType('yes'); // WHERE type = true
	 * </code>
	 *
	 * @param     boolean|string $type The value to use as filter.
	 *              Non-boolean arguments are converted using the following rules:
	 *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Db_CustomizationFieldQuery The current query, for fluid interface
	 */
	public function filterByType($type = null, $comparison = null)
	{
		if (is_string($type)) {
			$type = in_array(strtolower($type), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(Oops_Db_CustomizationFieldPeer::TYPE, $type, $comparison);
	}

	/**
	 * Filter the query on the required column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByRequired(true); // WHERE required = true
	 * $query->filterByRequired('yes'); // WHERE required = true
	 * </code>
	 *
	 * @param     boolean|string $required The value to use as filter.
	 *              Non-boolean arguments are converted using the following rules:
	 *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Db_CustomizationFieldQuery The current query, for fluid interface
	 */
	public function filterByRequired($required = null, $comparison = null)
	{
		if (is_string($required)) {
			$required = in_array(strtolower($required), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(Oops_Db_CustomizationFieldPeer::REQUIRED, $required, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     Oops_Db_CustomizationField $customizationField Object to remove from the list of results
	 *
	 * @return    Oops_Db_CustomizationFieldQuery The current query, for fluid interface
	 */
	public function prune($customizationField = null)
	{
		if ($customizationField) {
			$this->addUsingAlias(Oops_Db_CustomizationFieldPeer::ID_CUSTOMIZATION_FIELD, $customizationField->getIdCustomizationField(), Criteria::NOT_EQUAL);
		}

		return $this;
	}

} // Oops_Db_Propel_CustomizationFieldQuery