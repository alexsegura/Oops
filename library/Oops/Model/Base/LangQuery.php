<?php


/**
 * Base class that represents a query for the 'lang' table.
 *
 * 
 *
 * @method     Oops_Model_LangQuery orderByIdLang($order = Criteria::ASC) Order by the id_lang column
 * @method     Oops_Model_LangQuery orderByName($order = Criteria::ASC) Order by the name column
 * @method     Oops_Model_LangQuery orderByActive($order = Criteria::ASC) Order by the active column
 * @method     Oops_Model_LangQuery orderByIsoCode($order = Criteria::ASC) Order by the iso_code column
 * @method     Oops_Model_LangQuery orderByLanguageCode($order = Criteria::ASC) Order by the language_code column
 * @method     Oops_Model_LangQuery orderByIsRtl($order = Criteria::ASC) Order by the is_rtl column
 *
 * @method     Oops_Model_LangQuery groupByIdLang() Group by the id_lang column
 * @method     Oops_Model_LangQuery groupByName() Group by the name column
 * @method     Oops_Model_LangQuery groupByActive() Group by the active column
 * @method     Oops_Model_LangQuery groupByIsoCode() Group by the iso_code column
 * @method     Oops_Model_LangQuery groupByLanguageCode() Group by the language_code column
 * @method     Oops_Model_LangQuery groupByIsRtl() Group by the is_rtl column
 *
 * @method     Oops_Model_LangQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     Oops_Model_LangQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     Oops_Model_LangQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     Oops_Model_LangQuery leftJoinCategoryLang($relationAlias = null) Adds a LEFT JOIN clause to the query using the CategoryLang relation
 * @method     Oops_Model_LangQuery rightJoinCategoryLang($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CategoryLang relation
 * @method     Oops_Model_LangQuery innerJoinCategoryLang($relationAlias = null) Adds a INNER JOIN clause to the query using the CategoryLang relation
 *
 * @method     Oops_Model_LangQuery leftJoinProductLang($relationAlias = null) Adds a LEFT JOIN clause to the query using the ProductLang relation
 * @method     Oops_Model_LangQuery rightJoinProductLang($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ProductLang relation
 * @method     Oops_Model_LangQuery innerJoinProductLang($relationAlias = null) Adds a INNER JOIN clause to the query using the ProductLang relation
 *
 * @method     Oops_Model_Lang findOne(PropelPDO $con = null) Return the first Oops_Model_Lang matching the query
 * @method     Oops_Model_Lang findOneOrCreate(PropelPDO $con = null) Return the first Oops_Model_Lang matching the query, or a new Oops_Model_Lang object populated from the query conditions when no match is found
 *
 * @method     Oops_Model_Lang findOneByIdLang(int $id_lang) Return the first Oops_Model_Lang filtered by the id_lang column
 * @method     Oops_Model_Lang findOneByName(string $name) Return the first Oops_Model_Lang filtered by the name column
 * @method     Oops_Model_Lang findOneByActive(int $active) Return the first Oops_Model_Lang filtered by the active column
 * @method     Oops_Model_Lang findOneByIsoCode(string $iso_code) Return the first Oops_Model_Lang filtered by the iso_code column
 * @method     Oops_Model_Lang findOneByLanguageCode(string $language_code) Return the first Oops_Model_Lang filtered by the language_code column
 * @method     Oops_Model_Lang findOneByIsRtl(boolean $is_rtl) Return the first Oops_Model_Lang filtered by the is_rtl column
 *
 * @method     array findByIdLang(int $id_lang) Return Oops_Model_Lang objects filtered by the id_lang column
 * @method     array findByName(string $name) Return Oops_Model_Lang objects filtered by the name column
 * @method     array findByActive(int $active) Return Oops_Model_Lang objects filtered by the active column
 * @method     array findByIsoCode(string $iso_code) Return Oops_Model_Lang objects filtered by the iso_code column
 * @method     array findByLanguageCode(string $language_code) Return Oops_Model_Lang objects filtered by the language_code column
 * @method     array findByIsRtl(boolean $is_rtl) Return Oops_Model_Lang objects filtered by the is_rtl column
 *
 * @package    propel.generator.prestashop.om
 */
abstract class Oops_Model_Base_LangQuery extends ModelCriteria
{
	
	/**
	 * Initializes internal state of Oops_Model_Base_LangQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'prestashop', $modelName = 'Oops_Model_Lang', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new Oops_Model_LangQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    Oops_Model_LangQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof Oops_Model_LangQuery) {
			return $criteria;
		}
		$query = new Oops_Model_LangQuery();
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
	 * @return    Oops_Model_Lang|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ($key === null) {
			return null;
		}
		if ((null !== ($obj = Oops_Model_LangPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
			// the object is alredy in the instance pool
			return $obj;
		}
		if ($con === null) {
			$con = Propel::getConnection(Oops_Model_LangPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
	 * @return    Oops_Model_Lang A model object, or null if the key is not found
	 */
	protected function findPkSimple($key, $con)
	{
		$sql = 'SELECT `ID_LANG`, `NAME`, `ACTIVE`, `ISO_CODE`, `LANGUAGE_CODE`, `IS_RTL` FROM `' . _DB_PREFIX_ . 'lang` WHERE `ID_LANG` = :p0';
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
			$obj = new Oops_Model_Lang();
			$obj->hydrate($row);
			Oops_Model_LangPeer::addInstanceToPool($obj, (string) $row[0]);
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
	 * @return    Oops_Model_Lang|array|mixed the result, formatted by the current formatter
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
	 * @return    Oops_Model_LangQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(Oops_Model_LangPeer::ID_LANG, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    Oops_Model_LangQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(Oops_Model_LangPeer::ID_LANG, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id_lang column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByIdLang(1234); // WHERE id_lang = 1234
	 * $query->filterByIdLang(array(12, 34)); // WHERE id_lang IN (12, 34)
	 * $query->filterByIdLang(array('min' => 12)); // WHERE id_lang > 12
	 * </code>
	 *
	 * @param     mixed $idLang The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_LangQuery The current query, for fluid interface
	 */
	public function filterByIdLang($idLang = null, $comparison = null)
	{
		if (is_array($idLang) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(Oops_Model_LangPeer::ID_LANG, $idLang, $comparison);
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
	 * @return    Oops_Model_LangQuery The current query, for fluid interface
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
		return $this->addUsingAlias(Oops_Model_LangPeer::NAME, $name, $comparison);
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
	 * @return    Oops_Model_LangQuery The current query, for fluid interface
	 */
	public function filterByActive($active = null, $comparison = null)
	{
		if (is_array($active)) {
			$useMinMax = false;
			if (isset($active['min'])) {
				$this->addUsingAlias(Oops_Model_LangPeer::ACTIVE, $active['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($active['max'])) {
				$this->addUsingAlias(Oops_Model_LangPeer::ACTIVE, $active['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_LangPeer::ACTIVE, $active, $comparison);
	}

	/**
	 * Filter the query on the iso_code column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByIsoCode('fooValue');   // WHERE iso_code = 'fooValue'
	 * $query->filterByIsoCode('%fooValue%'); // WHERE iso_code LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $isoCode The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_LangQuery The current query, for fluid interface
	 */
	public function filterByIsoCode($isoCode = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($isoCode)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $isoCode)) {
				$isoCode = str_replace('*', '%', $isoCode);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(Oops_Model_LangPeer::ISO_CODE, $isoCode, $comparison);
	}

	/**
	 * Filter the query on the language_code column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByLanguageCode('fooValue');   // WHERE language_code = 'fooValue'
	 * $query->filterByLanguageCode('%fooValue%'); // WHERE language_code LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $languageCode The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_LangQuery The current query, for fluid interface
	 */
	public function filterByLanguageCode($languageCode = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($languageCode)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $languageCode)) {
				$languageCode = str_replace('*', '%', $languageCode);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(Oops_Model_LangPeer::LANGUAGE_CODE, $languageCode, $comparison);
	}

	/**
	 * Filter the query on the is_rtl column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByIsRtl(true); // WHERE is_rtl = true
	 * $query->filterByIsRtl('yes'); // WHERE is_rtl = true
	 * </code>
	 *
	 * @param     boolean|string $isRtl The value to use as filter.
	 *              Non-boolean arguments are converted using the following rules:
	 *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_LangQuery The current query, for fluid interface
	 */
	public function filterByIsRtl($isRtl = null, $comparison = null)
	{
		if (is_string($isRtl)) {
			$is_rtl = in_array(strtolower($isRtl), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(Oops_Model_LangPeer::IS_RTL, $isRtl, $comparison);
	}

	/**
	 * Filter the query by a related Oops_Model_CategoryLang object
	 *
	 * @param     Oops_Model_CategoryLang $categoryLang  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_LangQuery The current query, for fluid interface
	 */
	public function filterByCategoryLang($categoryLang, $comparison = null)
	{
		if ($categoryLang instanceof Oops_Model_CategoryLang) {
			return $this
				->addUsingAlias(Oops_Model_LangPeer::ID_LANG, $categoryLang->getIdLang(), $comparison);
		} elseif ($categoryLang instanceof PropelCollection) {
			return $this
				->useCategoryLangQuery()
				->filterByPrimaryKeys($categoryLang->getPrimaryKeys())
				->endUse();
		} else {
			throw new PropelException('filterByCategoryLang() only accepts arguments of type Oops_Model_CategoryLang or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the CategoryLang relation
	 *
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    Oops_Model_LangQuery The current query, for fluid interface
	 */
	public function joinCategoryLang($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('CategoryLang');

		// create a ModelJoin object for this join
		$join = new ModelJoin();
		$join->setJoinType($joinType);
		$join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
		if ($previousJoin = $this->getPreviousJoin()) {
			$join->setPreviousJoin($previousJoin);
		}

		// add the ModelJoin to the current object
		if($relationAlias) {
			$this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
			$this->addJoinObject($join, $relationAlias);
		} else {
			$this->addJoinObject($join, 'CategoryLang');
		}

		return $this;
	}

	/**
	 * Use the CategoryLang relation CategoryLang object
	 *
	 * @see       useQuery()
	 *
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    Oops_Model_CategoryLangQuery A secondary query class using the current class as primary query
	 */
	public function useCategoryLangQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinCategoryLang($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'CategoryLang', 'Oops_Model_CategoryLangQuery');
	}

	/**
	 * Filter the query by a related Oops_Model_ProductLang object
	 *
	 * @param     Oops_Model_ProductLang $productLang  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_LangQuery The current query, for fluid interface
	 */
	public function filterByProductLang($productLang, $comparison = null)
	{
		if ($productLang instanceof Oops_Model_ProductLang) {
			return $this
				->addUsingAlias(Oops_Model_LangPeer::ID_LANG, $productLang->getIdLang(), $comparison);
		} elseif ($productLang instanceof PropelCollection) {
			return $this
				->useProductLangQuery()
				->filterByPrimaryKeys($productLang->getPrimaryKeys())
				->endUse();
		} else {
			throw new PropelException('filterByProductLang() only accepts arguments of type Oops_Model_ProductLang or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the ProductLang relation
	 *
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    Oops_Model_LangQuery The current query, for fluid interface
	 */
	public function joinProductLang($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('ProductLang');

		// create a ModelJoin object for this join
		$join = new ModelJoin();
		$join->setJoinType($joinType);
		$join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
		if ($previousJoin = $this->getPreviousJoin()) {
			$join->setPreviousJoin($previousJoin);
		}

		// add the ModelJoin to the current object
		if($relationAlias) {
			$this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
			$this->addJoinObject($join, $relationAlias);
		} else {
			$this->addJoinObject($join, 'ProductLang');
		}

		return $this;
	}

	/**
	 * Use the ProductLang relation ProductLang object
	 *
	 * @see       useQuery()
	 *
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    Oops_Model_ProductLangQuery A secondary query class using the current class as primary query
	 */
	public function useProductLangQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinProductLang($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'ProductLang', 'Oops_Model_ProductLangQuery');
	}

	/**
	 * Filter the query by a related Category object
	 * using the category_lang table as cross reference
	 *
	 * @param     Category $category the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_LangQuery The current query, for fluid interface
	 */
	public function filterByCategory($category, $comparison = Criteria::EQUAL)
	{
		return $this
			->useCategoryLangQuery()
			->filterByCategory($category, $comparison)
			->endUse();
	}

	/**
	 * Exclude object from result
	 *
	 * @param     Oops_Model_Lang $lang Object to remove from the list of results
	 *
	 * @return    Oops_Model_LangQuery The current query, for fluid interface
	 */
	public function prune($lang = null)
	{
		if ($lang) {
			$this->addUsingAlias(Oops_Model_LangPeer::ID_LANG, $lang->getIdLang(), Criteria::NOT_EQUAL);
		}

		return $this;
	}

} // Oops_Model_Base_LangQuery