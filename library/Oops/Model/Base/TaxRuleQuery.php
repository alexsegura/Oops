<?php


/**
 * Base class that represents a query for the 'tax_rule' table.
 *
 * 
 *
 * @method     Oops_Model_TaxRuleQuery orderByIdTaxRule($order = Criteria::ASC) Order by the id_tax_rule column
 * @method     Oops_Model_TaxRuleQuery orderByIdTaxRulesGroup($order = Criteria::ASC) Order by the id_tax_rules_group column
 * @method     Oops_Model_TaxRuleQuery orderByIdCountry($order = Criteria::ASC) Order by the id_country column
 * @method     Oops_Model_TaxRuleQuery orderByIdState($order = Criteria::ASC) Order by the id_state column
 * @method     Oops_Model_TaxRuleQuery orderByIdCounty($order = Criteria::ASC) Order by the id_county column
 * @method     Oops_Model_TaxRuleQuery orderByIdTax($order = Criteria::ASC) Order by the id_tax column
 * @method     Oops_Model_TaxRuleQuery orderByStateBehavior($order = Criteria::ASC) Order by the state_behavior column
 * @method     Oops_Model_TaxRuleQuery orderByCountyBehavior($order = Criteria::ASC) Order by the county_behavior column
 *
 * @method     Oops_Model_TaxRuleQuery groupByIdTaxRule() Group by the id_tax_rule column
 * @method     Oops_Model_TaxRuleQuery groupByIdTaxRulesGroup() Group by the id_tax_rules_group column
 * @method     Oops_Model_TaxRuleQuery groupByIdCountry() Group by the id_country column
 * @method     Oops_Model_TaxRuleQuery groupByIdState() Group by the id_state column
 * @method     Oops_Model_TaxRuleQuery groupByIdCounty() Group by the id_county column
 * @method     Oops_Model_TaxRuleQuery groupByIdTax() Group by the id_tax column
 * @method     Oops_Model_TaxRuleQuery groupByStateBehavior() Group by the state_behavior column
 * @method     Oops_Model_TaxRuleQuery groupByCountyBehavior() Group by the county_behavior column
 *
 * @method     Oops_Model_TaxRuleQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     Oops_Model_TaxRuleQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     Oops_Model_TaxRuleQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     Oops_Model_TaxRule findOne(PropelPDO $con = null) Return the first Oops_Model_TaxRule matching the query
 * @method     Oops_Model_TaxRule findOneOrCreate(PropelPDO $con = null) Return the first Oops_Model_TaxRule matching the query, or a new Oops_Model_TaxRule object populated from the query conditions when no match is found
 *
 * @method     Oops_Model_TaxRule findOneByIdTaxRule(int $id_tax_rule) Return the first Oops_Model_TaxRule filtered by the id_tax_rule column
 * @method     Oops_Model_TaxRule findOneByIdTaxRulesGroup(int $id_tax_rules_group) Return the first Oops_Model_TaxRule filtered by the id_tax_rules_group column
 * @method     Oops_Model_TaxRule findOneByIdCountry(int $id_country) Return the first Oops_Model_TaxRule filtered by the id_country column
 * @method     Oops_Model_TaxRule findOneByIdState(int $id_state) Return the first Oops_Model_TaxRule filtered by the id_state column
 * @method     Oops_Model_TaxRule findOneByIdCounty(int $id_county) Return the first Oops_Model_TaxRule filtered by the id_county column
 * @method     Oops_Model_TaxRule findOneByIdTax(int $id_tax) Return the first Oops_Model_TaxRule filtered by the id_tax column
 * @method     Oops_Model_TaxRule findOneByStateBehavior(int $state_behavior) Return the first Oops_Model_TaxRule filtered by the state_behavior column
 * @method     Oops_Model_TaxRule findOneByCountyBehavior(int $county_behavior) Return the first Oops_Model_TaxRule filtered by the county_behavior column
 *
 * @method     array findByIdTaxRule(int $id_tax_rule) Return Oops_Model_TaxRule objects filtered by the id_tax_rule column
 * @method     array findByIdTaxRulesGroup(int $id_tax_rules_group) Return Oops_Model_TaxRule objects filtered by the id_tax_rules_group column
 * @method     array findByIdCountry(int $id_country) Return Oops_Model_TaxRule objects filtered by the id_country column
 * @method     array findByIdState(int $id_state) Return Oops_Model_TaxRule objects filtered by the id_state column
 * @method     array findByIdCounty(int $id_county) Return Oops_Model_TaxRule objects filtered by the id_county column
 * @method     array findByIdTax(int $id_tax) Return Oops_Model_TaxRule objects filtered by the id_tax column
 * @method     array findByStateBehavior(int $state_behavior) Return Oops_Model_TaxRule objects filtered by the state_behavior column
 * @method     array findByCountyBehavior(int $county_behavior) Return Oops_Model_TaxRule objects filtered by the county_behavior column
 *
 * @package    propel.generator.prestashop.om
 */
abstract class Oops_Model_Base_TaxRuleQuery extends ModelCriteria
{
	
	/**
	 * Initializes internal state of Oops_Model_Base_TaxRuleQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'prestashop', $modelName = 'Oops_Model_TaxRule', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new Oops_Model_TaxRuleQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    Oops_Model_TaxRuleQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof Oops_Model_TaxRuleQuery) {
			return $criteria;
		}
		$query = new Oops_Model_TaxRuleQuery();
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
	 * @return    Oops_Model_TaxRule|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ($key === null) {
			return null;
		}
		if ((null !== ($obj = Oops_Model_TaxRulePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
			// the object is alredy in the instance pool
			return $obj;
		}
		if ($con === null) {
			$con = Propel::getConnection(Oops_Model_TaxRulePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
	 * @return    Oops_Model_TaxRule A model object, or null if the key is not found
	 */
	protected function findPkSimple($key, $con)
	{
		$sql = 'SELECT `ID_TAX_RULE`, `ID_TAX_RULES_GROUP`, `ID_COUNTRY`, `ID_STATE`, `ID_COUNTY`, `ID_TAX`, `STATE_BEHAVIOR`, `COUNTY_BEHAVIOR` FROM `' . _DB_PREFIX_ . 'tax_rule` WHERE `ID_TAX_RULE` = :p0';
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
			$obj = new Oops_Model_TaxRule();
			$obj->hydrate($row);
			Oops_Model_TaxRulePeer::addInstanceToPool($obj, (string) $row[0]);
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
	 * @return    Oops_Model_TaxRule|array|mixed the result, formatted by the current formatter
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
	 * @return    Oops_Model_TaxRuleQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(Oops_Model_TaxRulePeer::ID_TAX_RULE, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    Oops_Model_TaxRuleQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(Oops_Model_TaxRulePeer::ID_TAX_RULE, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id_tax_rule column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByIdTaxRule(1234); // WHERE id_tax_rule = 1234
	 * $query->filterByIdTaxRule(array(12, 34)); // WHERE id_tax_rule IN (12, 34)
	 * $query->filterByIdTaxRule(array('min' => 12)); // WHERE id_tax_rule > 12
	 * </code>
	 *
	 * @param     mixed $idTaxRule The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_TaxRuleQuery The current query, for fluid interface
	 */
	public function filterByIdTaxRule($idTaxRule = null, $comparison = null)
	{
		if (is_array($idTaxRule) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(Oops_Model_TaxRulePeer::ID_TAX_RULE, $idTaxRule, $comparison);
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
	 * @return    Oops_Model_TaxRuleQuery The current query, for fluid interface
	 */
	public function filterByIdTaxRulesGroup($idTaxRulesGroup = null, $comparison = null)
	{
		if (is_array($idTaxRulesGroup)) {
			$useMinMax = false;
			if (isset($idTaxRulesGroup['min'])) {
				$this->addUsingAlias(Oops_Model_TaxRulePeer::ID_TAX_RULES_GROUP, $idTaxRulesGroup['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($idTaxRulesGroup['max'])) {
				$this->addUsingAlias(Oops_Model_TaxRulePeer::ID_TAX_RULES_GROUP, $idTaxRulesGroup['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_TaxRulePeer::ID_TAX_RULES_GROUP, $idTaxRulesGroup, $comparison);
	}

	/**
	 * Filter the query on the id_country column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByIdCountry(1234); // WHERE id_country = 1234
	 * $query->filterByIdCountry(array(12, 34)); // WHERE id_country IN (12, 34)
	 * $query->filterByIdCountry(array('min' => 12)); // WHERE id_country > 12
	 * </code>
	 *
	 * @param     mixed $idCountry The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_TaxRuleQuery The current query, for fluid interface
	 */
	public function filterByIdCountry($idCountry = null, $comparison = null)
	{
		if (is_array($idCountry)) {
			$useMinMax = false;
			if (isset($idCountry['min'])) {
				$this->addUsingAlias(Oops_Model_TaxRulePeer::ID_COUNTRY, $idCountry['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($idCountry['max'])) {
				$this->addUsingAlias(Oops_Model_TaxRulePeer::ID_COUNTRY, $idCountry['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_TaxRulePeer::ID_COUNTRY, $idCountry, $comparison);
	}

	/**
	 * Filter the query on the id_state column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByIdState(1234); // WHERE id_state = 1234
	 * $query->filterByIdState(array(12, 34)); // WHERE id_state IN (12, 34)
	 * $query->filterByIdState(array('min' => 12)); // WHERE id_state > 12
	 * </code>
	 *
	 * @param     mixed $idState The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_TaxRuleQuery The current query, for fluid interface
	 */
	public function filterByIdState($idState = null, $comparison = null)
	{
		if (is_array($idState)) {
			$useMinMax = false;
			if (isset($idState['min'])) {
				$this->addUsingAlias(Oops_Model_TaxRulePeer::ID_STATE, $idState['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($idState['max'])) {
				$this->addUsingAlias(Oops_Model_TaxRulePeer::ID_STATE, $idState['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_TaxRulePeer::ID_STATE, $idState, $comparison);
	}

	/**
	 * Filter the query on the id_county column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByIdCounty(1234); // WHERE id_county = 1234
	 * $query->filterByIdCounty(array(12, 34)); // WHERE id_county IN (12, 34)
	 * $query->filterByIdCounty(array('min' => 12)); // WHERE id_county > 12
	 * </code>
	 *
	 * @param     mixed $idCounty The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_TaxRuleQuery The current query, for fluid interface
	 */
	public function filterByIdCounty($idCounty = null, $comparison = null)
	{
		if (is_array($idCounty)) {
			$useMinMax = false;
			if (isset($idCounty['min'])) {
				$this->addUsingAlias(Oops_Model_TaxRulePeer::ID_COUNTY, $idCounty['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($idCounty['max'])) {
				$this->addUsingAlias(Oops_Model_TaxRulePeer::ID_COUNTY, $idCounty['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_TaxRulePeer::ID_COUNTY, $idCounty, $comparison);
	}

	/**
	 * Filter the query on the id_tax column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByIdTax(1234); // WHERE id_tax = 1234
	 * $query->filterByIdTax(array(12, 34)); // WHERE id_tax IN (12, 34)
	 * $query->filterByIdTax(array('min' => 12)); // WHERE id_tax > 12
	 * </code>
	 *
	 * @param     mixed $idTax The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_TaxRuleQuery The current query, for fluid interface
	 */
	public function filterByIdTax($idTax = null, $comparison = null)
	{
		if (is_array($idTax)) {
			$useMinMax = false;
			if (isset($idTax['min'])) {
				$this->addUsingAlias(Oops_Model_TaxRulePeer::ID_TAX, $idTax['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($idTax['max'])) {
				$this->addUsingAlias(Oops_Model_TaxRulePeer::ID_TAX, $idTax['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_TaxRulePeer::ID_TAX, $idTax, $comparison);
	}

	/**
	 * Filter the query on the state_behavior column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByStateBehavior(1234); // WHERE state_behavior = 1234
	 * $query->filterByStateBehavior(array(12, 34)); // WHERE state_behavior IN (12, 34)
	 * $query->filterByStateBehavior(array('min' => 12)); // WHERE state_behavior > 12
	 * </code>
	 *
	 * @param     mixed $stateBehavior The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_TaxRuleQuery The current query, for fluid interface
	 */
	public function filterByStateBehavior($stateBehavior = null, $comparison = null)
	{
		if (is_array($stateBehavior)) {
			$useMinMax = false;
			if (isset($stateBehavior['min'])) {
				$this->addUsingAlias(Oops_Model_TaxRulePeer::STATE_BEHAVIOR, $stateBehavior['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($stateBehavior['max'])) {
				$this->addUsingAlias(Oops_Model_TaxRulePeer::STATE_BEHAVIOR, $stateBehavior['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_TaxRulePeer::STATE_BEHAVIOR, $stateBehavior, $comparison);
	}

	/**
	 * Filter the query on the county_behavior column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByCountyBehavior(1234); // WHERE county_behavior = 1234
	 * $query->filterByCountyBehavior(array(12, 34)); // WHERE county_behavior IN (12, 34)
	 * $query->filterByCountyBehavior(array('min' => 12)); // WHERE county_behavior > 12
	 * </code>
	 *
	 * @param     mixed $countyBehavior The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_TaxRuleQuery The current query, for fluid interface
	 */
	public function filterByCountyBehavior($countyBehavior = null, $comparison = null)
	{
		if (is_array($countyBehavior)) {
			$useMinMax = false;
			if (isset($countyBehavior['min'])) {
				$this->addUsingAlias(Oops_Model_TaxRulePeer::COUNTY_BEHAVIOR, $countyBehavior['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($countyBehavior['max'])) {
				$this->addUsingAlias(Oops_Model_TaxRulePeer::COUNTY_BEHAVIOR, $countyBehavior['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_TaxRulePeer::COUNTY_BEHAVIOR, $countyBehavior, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     Oops_Model_TaxRule $taxRule Object to remove from the list of results
	 *
	 * @return    Oops_Model_TaxRuleQuery The current query, for fluid interface
	 */
	public function prune($taxRule = null)
	{
		if ($taxRule) {
			$this->addUsingAlias(Oops_Model_TaxRulePeer::ID_TAX_RULE, $taxRule->getIdTaxRule(), Criteria::NOT_EQUAL);
		}

		return $this;
	}

} // Oops_Model_Base_TaxRuleQuery