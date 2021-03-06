<?php


/**
 * Base class that represents a query for the 'tax_rules_group' table.
 *
 * 
 *
 * @method     Oops_Db_TaxRulesGroupQuery orderByIdTaxRulesGroup($order = Criteria::ASC) Order by the id_tax_rules_group column
 * @method     Oops_Db_TaxRulesGroupQuery orderByName($order = Criteria::ASC) Order by the name column
 * @method     Oops_Db_TaxRulesGroupQuery orderByActive($order = Criteria::ASC) Order by the active column
 *
 * @method     Oops_Db_TaxRulesGroupQuery groupByIdTaxRulesGroup() Group by the id_tax_rules_group column
 * @method     Oops_Db_TaxRulesGroupQuery groupByName() Group by the name column
 * @method     Oops_Db_TaxRulesGroupQuery groupByActive() Group by the active column
 *
 * @method     Oops_Db_TaxRulesGroupQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     Oops_Db_TaxRulesGroupQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     Oops_Db_TaxRulesGroupQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     Oops_Db_TaxRulesGroup findOne(PropelPDO $con = null) Return the first Oops_Db_TaxRulesGroup matching the query
 * @method     Oops_Db_TaxRulesGroup findOneOrCreate(PropelPDO $con = null) Return the first Oops_Db_TaxRulesGroup matching the query, or a new Oops_Db_TaxRulesGroup object populated from the query conditions when no match is found
 *
 * @method     Oops_Db_TaxRulesGroup findOneByIdTaxRulesGroup(int $id_tax_rules_group) Return the first Oops_Db_TaxRulesGroup filtered by the id_tax_rules_group column
 * @method     Oops_Db_TaxRulesGroup findOneByName(string $name) Return the first Oops_Db_TaxRulesGroup filtered by the name column
 * @method     Oops_Db_TaxRulesGroup findOneByActive(int $active) Return the first Oops_Db_TaxRulesGroup filtered by the active column
 *
 * @method     array findByIdTaxRulesGroup(int $id_tax_rules_group) Return Oops_Db_TaxRulesGroup objects filtered by the id_tax_rules_group column
 * @method     array findByName(string $name) Return Oops_Db_TaxRulesGroup objects filtered by the name column
 * @method     array findByActive(int $active) Return Oops_Db_TaxRulesGroup objects filtered by the active column
 *
 * @package    propel.generator.prestashop.om
 */
abstract class Oops_Db_Propel_TaxRulesGroupQuery extends ModelCriteria
{
	
	/**
	 * Initializes internal state of Oops_Db_Propel_TaxRulesGroupQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'prestashop', $modelName = 'Oops_Db_TaxRulesGroup', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new Oops_Db_TaxRulesGroupQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    Oops_Db_TaxRulesGroupQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof Oops_Db_TaxRulesGroupQuery) {
			return $criteria;
		}
		$query = new Oops_Db_TaxRulesGroupQuery();
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
	 * @return    Oops_Db_TaxRulesGroup|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ($key === null) {
			return null;
		}
		if ((null !== ($obj = Oops_Db_TaxRulesGroupPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
			// the object is alredy in the instance pool
			return $obj;
		}
		if ($con === null) {
			$con = Propel::getConnection(Oops_Db_TaxRulesGroupPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
	 * @return    Oops_Db_TaxRulesGroup A model object, or null if the key is not found
	 */
	protected function findPkSimple($key, $con)
	{
		$sql = 'SELECT `ID_TAX_RULES_GROUP`, `NAME`, `ACTIVE` FROM `' . _DB_PREFIX_ . 'tax_rules_group` WHERE `ID_TAX_RULES_GROUP` = :p0';
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
			$obj = new Oops_Db_TaxRulesGroup();
			$obj->hydrate($row);
			Oops_Db_TaxRulesGroupPeer::addInstanceToPool($obj, (string) $row[0]);
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
	 * @return    Oops_Db_TaxRulesGroup|array|mixed the result, formatted by the current formatter
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
	 * @return    Oops_Db_TaxRulesGroupQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(Oops_Db_TaxRulesGroupPeer::ID_TAX_RULES_GROUP, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    Oops_Db_TaxRulesGroupQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(Oops_Db_TaxRulesGroupPeer::ID_TAX_RULES_GROUP, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id_tax_rules_group column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByIdTaxRulesGroup(1234); // WHERE id_tax_rules_group = 1234
	 * $query->filterByIdTaxRulesGroup(array(12, 34)); // WHERE id_tax_rules_group IN (12, 34)
	 * $query->filterByIdTaxRulesGroup(array('min' => 12)); // WHERE id_tax_rules_group > 12
	 * </code>
	 *
	 * @param     mixed $idTaxRulesGroup The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Db_TaxRulesGroupQuery The current query, for fluid interface
	 */
	public function filterByIdTaxRulesGroup($idTaxRulesGroup = null, $comparison = null)
	{
		if (is_array($idTaxRulesGroup) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(Oops_Db_TaxRulesGroupPeer::ID_TAX_RULES_GROUP, $idTaxRulesGroup, $comparison);
	}

	/**
	 * Filter the query on the name column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByName('fooValue');   // WHERE name = 'fooValue'
	 * $query->filterByName('%fooValue%'); // WHERE name LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $name The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Db_TaxRulesGroupQuery The current query, for fluid interface
	 */
	public function filterByName($name = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($name)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $name)) {
				$name = str_replace('*', '%', $name);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(Oops_Db_TaxRulesGroupPeer::NAME, $name, $comparison);
	}

	/**
	 * Filter the query on the active column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByActive(1234); // WHERE active = 1234
	 * $query->filterByActive(array(12, 34)); // WHERE active IN (12, 34)
	 * $query->filterByActive(array('min' => 12)); // WHERE active > 12
	 * </code>
	 *
	 * @param     mixed $active The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Db_TaxRulesGroupQuery The current query, for fluid interface
	 */
	public function filterByActive($active = null, $comparison = null)
	{
		if (is_array($active)) {
			$useMinMax = false;
			if (isset($active['min'])) {
				$this->addUsingAlias(Oops_Db_TaxRulesGroupPeer::ACTIVE, $active['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($active['max'])) {
				$this->addUsingAlias(Oops_Db_TaxRulesGroupPeer::ACTIVE, $active['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Db_TaxRulesGroupPeer::ACTIVE, $active, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     Oops_Db_TaxRulesGroup $taxRulesGroup Object to remove from the list of results
	 *
	 * @return    Oops_Db_TaxRulesGroupQuery The current query, for fluid interface
	 */
	public function prune($taxRulesGroup = null)
	{
		if ($taxRulesGroup) {
			$this->addUsingAlias(Oops_Db_TaxRulesGroupPeer::ID_TAX_RULES_GROUP, $taxRulesGroup->getIdTaxRulesGroup(), Criteria::NOT_EQUAL);
		}

		return $this;
	}

} // Oops_Db_Propel_TaxRulesGroupQuery