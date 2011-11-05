<?php


/**
 * Base class that represents a query for the 'djland_carrier' table.
 *
 * 
 *
 * @method     Oops_Model_CarrierQuery orderByIdCarrier($order = Criteria::ASC) Order by the id_carrier column
 * @method     Oops_Model_CarrierQuery orderByIdTaxRulesGroup($order = Criteria::ASC) Order by the id_tax_rules_group column
 * @method     Oops_Model_CarrierQuery orderByName($order = Criteria::ASC) Order by the name column
 * @method     Oops_Model_CarrierQuery orderByUrl($order = Criteria::ASC) Order by the url column
 * @method     Oops_Model_CarrierQuery orderByActive($order = Criteria::ASC) Order by the active column
 * @method     Oops_Model_CarrierQuery orderByDeleted($order = Criteria::ASC) Order by the deleted column
 * @method     Oops_Model_CarrierQuery orderByShippingHandling($order = Criteria::ASC) Order by the shipping_handling column
 * @method     Oops_Model_CarrierQuery orderByRangeBehavior($order = Criteria::ASC) Order by the range_behavior column
 * @method     Oops_Model_CarrierQuery orderByIsModule($order = Criteria::ASC) Order by the is_module column
 * @method     Oops_Model_CarrierQuery orderByIsFree($order = Criteria::ASC) Order by the is_free column
 * @method     Oops_Model_CarrierQuery orderByShippingExternal($order = Criteria::ASC) Order by the shipping_external column
 * @method     Oops_Model_CarrierQuery orderByNeedRange($order = Criteria::ASC) Order by the need_range column
 * @method     Oops_Model_CarrierQuery orderByExternalModuleName($order = Criteria::ASC) Order by the external_module_name column
 * @method     Oops_Model_CarrierQuery orderByShippingMethod($order = Criteria::ASC) Order by the shipping_method column
 *
 * @method     Oops_Model_CarrierQuery groupByIdCarrier() Group by the id_carrier column
 * @method     Oops_Model_CarrierQuery groupByIdTaxRulesGroup() Group by the id_tax_rules_group column
 * @method     Oops_Model_CarrierQuery groupByName() Group by the name column
 * @method     Oops_Model_CarrierQuery groupByUrl() Group by the url column
 * @method     Oops_Model_CarrierQuery groupByActive() Group by the active column
 * @method     Oops_Model_CarrierQuery groupByDeleted() Group by the deleted column
 * @method     Oops_Model_CarrierQuery groupByShippingHandling() Group by the shipping_handling column
 * @method     Oops_Model_CarrierQuery groupByRangeBehavior() Group by the range_behavior column
 * @method     Oops_Model_CarrierQuery groupByIsModule() Group by the is_module column
 * @method     Oops_Model_CarrierQuery groupByIsFree() Group by the is_free column
 * @method     Oops_Model_CarrierQuery groupByShippingExternal() Group by the shipping_external column
 * @method     Oops_Model_CarrierQuery groupByNeedRange() Group by the need_range column
 * @method     Oops_Model_CarrierQuery groupByExternalModuleName() Group by the external_module_name column
 * @method     Oops_Model_CarrierQuery groupByShippingMethod() Group by the shipping_method column
 *
 * @method     Oops_Model_CarrierQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     Oops_Model_CarrierQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     Oops_Model_CarrierQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     Oops_Model_Carrier findOne(PropelPDO $con = null) Return the first Oops_Model_Carrier matching the query
 * @method     Oops_Model_Carrier findOneOrCreate(PropelPDO $con = null) Return the first Oops_Model_Carrier matching the query, or a new Oops_Model_Carrier object populated from the query conditions when no match is found
 *
 * @method     Oops_Model_Carrier findOneByIdCarrier(int $id_carrier) Return the first Oops_Model_Carrier filtered by the id_carrier column
 * @method     Oops_Model_Carrier findOneByIdTaxRulesGroup(int $id_tax_rules_group) Return the first Oops_Model_Carrier filtered by the id_tax_rules_group column
 * @method     Oops_Model_Carrier findOneByName(string $name) Return the first Oops_Model_Carrier filtered by the name column
 * @method     Oops_Model_Carrier findOneByUrl(string $url) Return the first Oops_Model_Carrier filtered by the url column
 * @method     Oops_Model_Carrier findOneByActive(boolean $active) Return the first Oops_Model_Carrier filtered by the active column
 * @method     Oops_Model_Carrier findOneByDeleted(boolean $deleted) Return the first Oops_Model_Carrier filtered by the deleted column
 * @method     Oops_Model_Carrier findOneByShippingHandling(boolean $shipping_handling) Return the first Oops_Model_Carrier filtered by the shipping_handling column
 * @method     Oops_Model_Carrier findOneByRangeBehavior(boolean $range_behavior) Return the first Oops_Model_Carrier filtered by the range_behavior column
 * @method     Oops_Model_Carrier findOneByIsModule(boolean $is_module) Return the first Oops_Model_Carrier filtered by the is_module column
 * @method     Oops_Model_Carrier findOneByIsFree(boolean $is_free) Return the first Oops_Model_Carrier filtered by the is_free column
 * @method     Oops_Model_Carrier findOneByShippingExternal(boolean $shipping_external) Return the first Oops_Model_Carrier filtered by the shipping_external column
 * @method     Oops_Model_Carrier findOneByNeedRange(boolean $need_range) Return the first Oops_Model_Carrier filtered by the need_range column
 * @method     Oops_Model_Carrier findOneByExternalModuleName(string $external_module_name) Return the first Oops_Model_Carrier filtered by the external_module_name column
 * @method     Oops_Model_Carrier findOneByShippingMethod(int $shipping_method) Return the first Oops_Model_Carrier filtered by the shipping_method column
 *
 * @method     array findByIdCarrier(int $id_carrier) Return Oops_Model_Carrier objects filtered by the id_carrier column
 * @method     array findByIdTaxRulesGroup(int $id_tax_rules_group) Return Oops_Model_Carrier objects filtered by the id_tax_rules_group column
 * @method     array findByName(string $name) Return Oops_Model_Carrier objects filtered by the name column
 * @method     array findByUrl(string $url) Return Oops_Model_Carrier objects filtered by the url column
 * @method     array findByActive(boolean $active) Return Oops_Model_Carrier objects filtered by the active column
 * @method     array findByDeleted(boolean $deleted) Return Oops_Model_Carrier objects filtered by the deleted column
 * @method     array findByShippingHandling(boolean $shipping_handling) Return Oops_Model_Carrier objects filtered by the shipping_handling column
 * @method     array findByRangeBehavior(boolean $range_behavior) Return Oops_Model_Carrier objects filtered by the range_behavior column
 * @method     array findByIsModule(boolean $is_module) Return Oops_Model_Carrier objects filtered by the is_module column
 * @method     array findByIsFree(boolean $is_free) Return Oops_Model_Carrier objects filtered by the is_free column
 * @method     array findByShippingExternal(boolean $shipping_external) Return Oops_Model_Carrier objects filtered by the shipping_external column
 * @method     array findByNeedRange(boolean $need_range) Return Oops_Model_Carrier objects filtered by the need_range column
 * @method     array findByExternalModuleName(string $external_module_name) Return Oops_Model_Carrier objects filtered by the external_module_name column
 * @method     array findByShippingMethod(int $shipping_method) Return Oops_Model_Carrier objects filtered by the shipping_method column
 *
 * @package    propel.generator.prestashop.om
 */
abstract class Oops_Model_Base_CarrierQuery extends ModelCriteria
{
	
	/**
	 * Initializes internal state of Oops_Model_Base_CarrierQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'prestashop', $modelName = 'Oops_Model_Carrier', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new Oops_Model_CarrierQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    Oops_Model_CarrierQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof Oops_Model_CarrierQuery) {
			return $criteria;
		}
		$query = new Oops_Model_CarrierQuery();
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
	 * @return    Oops_Model_Carrier|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ($key === null) {
			return null;
		}
		if ((null !== ($obj = Oops_Model_CarrierPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
			// the object is alredy in the instance pool
			return $obj;
		}
		if ($con === null) {
			$con = Propel::getConnection(Oops_Model_CarrierPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
	 * @return    Oops_Model_Carrier A model object, or null if the key is not found
	 */
	protected function findPkSimple($key, $con)
	{
		$sql = 'SELECT `ID_CARRIER`, `ID_TAX_RULES_GROUP`, `NAME`, `URL`, `ACTIVE`, `DELETED`, `SHIPPING_HANDLING`, `RANGE_BEHAVIOR`, `IS_MODULE`, `IS_FREE`, `SHIPPING_EXTERNAL`, `NEED_RANGE`, `EXTERNAL_MODULE_NAME`, `SHIPPING_METHOD` FROM `djland_carrier` WHERE `ID_CARRIER` = :p0';
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
			$obj = new Oops_Model_Carrier();
			$obj->hydrate($row);
			Oops_Model_CarrierPeer::addInstanceToPool($obj, (string) $row[0]);
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
	 * @return    Oops_Model_Carrier|array|mixed the result, formatted by the current formatter
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
	 * @return    Oops_Model_CarrierQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(Oops_Model_CarrierPeer::ID_CARRIER, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    Oops_Model_CarrierQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(Oops_Model_CarrierPeer::ID_CARRIER, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id_carrier column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByIdCarrier(1234); // WHERE id_carrier = 1234
	 * $query->filterByIdCarrier(array(12, 34)); // WHERE id_carrier IN (12, 34)
	 * $query->filterByIdCarrier(array('min' => 12)); // WHERE id_carrier > 12
	 * </code>
	 *
	 * @param     mixed $idCarrier The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_CarrierQuery The current query, for fluid interface
	 */
	public function filterByIdCarrier($idCarrier = null, $comparison = null)
	{
		if (is_array($idCarrier) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(Oops_Model_CarrierPeer::ID_CARRIER, $idCarrier, $comparison);
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
	 * @return    Oops_Model_CarrierQuery The current query, for fluid interface
	 */
	public function filterByIdTaxRulesGroup($idTaxRulesGroup = null, $comparison = null)
	{
		if (is_array($idTaxRulesGroup)) {
			$useMinMax = false;
			if (isset($idTaxRulesGroup['min'])) {
				$this->addUsingAlias(Oops_Model_CarrierPeer::ID_TAX_RULES_GROUP, $idTaxRulesGroup['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($idTaxRulesGroup['max'])) {
				$this->addUsingAlias(Oops_Model_CarrierPeer::ID_TAX_RULES_GROUP, $idTaxRulesGroup['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_CarrierPeer::ID_TAX_RULES_GROUP, $idTaxRulesGroup, $comparison);
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
	 * @return    Oops_Model_CarrierQuery The current query, for fluid interface
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
		return $this->addUsingAlias(Oops_Model_CarrierPeer::NAME, $name, $comparison);
	}

	/**
	 * Filter the query on the url column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByUrl('fooValue');   // WHERE url = 'fooValue'
	 * $query->filterByUrl('%fooValue%'); // WHERE url LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $url The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_CarrierQuery The current query, for fluid interface
	 */
	public function filterByUrl($url = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($url)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $url)) {
				$url = str_replace('*', '%', $url);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(Oops_Model_CarrierPeer::URL, $url, $comparison);
	}

	/**
	 * Filter the query on the active column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByActive(true); // WHERE active = true
	 * $query->filterByActive('yes'); // WHERE active = true
	 * </code>
	 *
	 * @param     boolean|string $active The value to use as filter.
	 *              Non-boolean arguments are converted using the following rules:
	 *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_CarrierQuery The current query, for fluid interface
	 */
	public function filterByActive($active = null, $comparison = null)
	{
		if (is_string($active)) {
			$active = in_array(strtolower($active), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(Oops_Model_CarrierPeer::ACTIVE, $active, $comparison);
	}

	/**
	 * Filter the query on the deleted column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByDeleted(true); // WHERE deleted = true
	 * $query->filterByDeleted('yes'); // WHERE deleted = true
	 * </code>
	 *
	 * @param     boolean|string $deleted The value to use as filter.
	 *              Non-boolean arguments are converted using the following rules:
	 *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_CarrierQuery The current query, for fluid interface
	 */
	public function filterByDeleted($deleted = null, $comparison = null)
	{
		if (is_string($deleted)) {
			$deleted = in_array(strtolower($deleted), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(Oops_Model_CarrierPeer::DELETED, $deleted, $comparison);
	}

	/**
	 * Filter the query on the shipping_handling column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByShippingHandling(true); // WHERE shipping_handling = true
	 * $query->filterByShippingHandling('yes'); // WHERE shipping_handling = true
	 * </code>
	 *
	 * @param     boolean|string $shippingHandling The value to use as filter.
	 *              Non-boolean arguments are converted using the following rules:
	 *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_CarrierQuery The current query, for fluid interface
	 */
	public function filterByShippingHandling($shippingHandling = null, $comparison = null)
	{
		if (is_string($shippingHandling)) {
			$shipping_handling = in_array(strtolower($shippingHandling), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(Oops_Model_CarrierPeer::SHIPPING_HANDLING, $shippingHandling, $comparison);
	}

	/**
	 * Filter the query on the range_behavior column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByRangeBehavior(true); // WHERE range_behavior = true
	 * $query->filterByRangeBehavior('yes'); // WHERE range_behavior = true
	 * </code>
	 *
	 * @param     boolean|string $rangeBehavior The value to use as filter.
	 *              Non-boolean arguments are converted using the following rules:
	 *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_CarrierQuery The current query, for fluid interface
	 */
	public function filterByRangeBehavior($rangeBehavior = null, $comparison = null)
	{
		if (is_string($rangeBehavior)) {
			$range_behavior = in_array(strtolower($rangeBehavior), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(Oops_Model_CarrierPeer::RANGE_BEHAVIOR, $rangeBehavior, $comparison);
	}

	/**
	 * Filter the query on the is_module column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByIsModule(true); // WHERE is_module = true
	 * $query->filterByIsModule('yes'); // WHERE is_module = true
	 * </code>
	 *
	 * @param     boolean|string $isModule The value to use as filter.
	 *              Non-boolean arguments are converted using the following rules:
	 *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_CarrierQuery The current query, for fluid interface
	 */
	public function filterByIsModule($isModule = null, $comparison = null)
	{
		if (is_string($isModule)) {
			$is_module = in_array(strtolower($isModule), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(Oops_Model_CarrierPeer::IS_MODULE, $isModule, $comparison);
	}

	/**
	 * Filter the query on the is_free column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByIsFree(true); // WHERE is_free = true
	 * $query->filterByIsFree('yes'); // WHERE is_free = true
	 * </code>
	 *
	 * @param     boolean|string $isFree The value to use as filter.
	 *              Non-boolean arguments are converted using the following rules:
	 *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_CarrierQuery The current query, for fluid interface
	 */
	public function filterByIsFree($isFree = null, $comparison = null)
	{
		if (is_string($isFree)) {
			$is_free = in_array(strtolower($isFree), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(Oops_Model_CarrierPeer::IS_FREE, $isFree, $comparison);
	}

	/**
	 * Filter the query on the shipping_external column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByShippingExternal(true); // WHERE shipping_external = true
	 * $query->filterByShippingExternal('yes'); // WHERE shipping_external = true
	 * </code>
	 *
	 * @param     boolean|string $shippingExternal The value to use as filter.
	 *              Non-boolean arguments are converted using the following rules:
	 *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_CarrierQuery The current query, for fluid interface
	 */
	public function filterByShippingExternal($shippingExternal = null, $comparison = null)
	{
		if (is_string($shippingExternal)) {
			$shipping_external = in_array(strtolower($shippingExternal), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(Oops_Model_CarrierPeer::SHIPPING_EXTERNAL, $shippingExternal, $comparison);
	}

	/**
	 * Filter the query on the need_range column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByNeedRange(true); // WHERE need_range = true
	 * $query->filterByNeedRange('yes'); // WHERE need_range = true
	 * </code>
	 *
	 * @param     boolean|string $needRange The value to use as filter.
	 *              Non-boolean arguments are converted using the following rules:
	 *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_CarrierQuery The current query, for fluid interface
	 */
	public function filterByNeedRange($needRange = null, $comparison = null)
	{
		if (is_string($needRange)) {
			$need_range = in_array(strtolower($needRange), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(Oops_Model_CarrierPeer::NEED_RANGE, $needRange, $comparison);
	}

	/**
	 * Filter the query on the external_module_name column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByExternalModuleName('fooValue');   // WHERE external_module_name = 'fooValue'
	 * $query->filterByExternalModuleName('%fooValue%'); // WHERE external_module_name LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $externalModuleName The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_CarrierQuery The current query, for fluid interface
	 */
	public function filterByExternalModuleName($externalModuleName = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($externalModuleName)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $externalModuleName)) {
				$externalModuleName = str_replace('*', '%', $externalModuleName);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(Oops_Model_CarrierPeer::EXTERNAL_MODULE_NAME, $externalModuleName, $comparison);
	}

	/**
	 * Filter the query on the shipping_method column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByShippingMethod(1234); // WHERE shipping_method = 1234
	 * $query->filterByShippingMethod(array(12, 34)); // WHERE shipping_method IN (12, 34)
	 * $query->filterByShippingMethod(array('min' => 12)); // WHERE shipping_method > 12
	 * </code>
	 *
	 * @param     mixed $shippingMethod The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_CarrierQuery The current query, for fluid interface
	 */
	public function filterByShippingMethod($shippingMethod = null, $comparison = null)
	{
		if (is_array($shippingMethod)) {
			$useMinMax = false;
			if (isset($shippingMethod['min'])) {
				$this->addUsingAlias(Oops_Model_CarrierPeer::SHIPPING_METHOD, $shippingMethod['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($shippingMethod['max'])) {
				$this->addUsingAlias(Oops_Model_CarrierPeer::SHIPPING_METHOD, $shippingMethod['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_CarrierPeer::SHIPPING_METHOD, $shippingMethod, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     Oops_Model_Carrier $carrier Object to remove from the list of results
	 *
	 * @return    Oops_Model_CarrierQuery The current query, for fluid interface
	 */
	public function prune($carrier = null)
	{
		if ($carrier) {
			$this->addUsingAlias(Oops_Model_CarrierPeer::ID_CARRIER, $carrier->getIdCarrier(), Criteria::NOT_EQUAL);
		}

		return $this;
	}

} // Oops_Model_Base_CarrierQuery