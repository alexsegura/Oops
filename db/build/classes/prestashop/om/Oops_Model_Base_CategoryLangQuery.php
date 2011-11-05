<?php


/**
 * Base class that represents a query for the '' . _DB_PREFIX_ . 'djland_category_lang' table.
 *
 * 
 *
 * @method     Oops_Model_CategoryLangQuery orderByIdCategory($order = Criteria::ASC) Order by the id_category column
 * @method     Oops_Model_CategoryLangQuery orderByIdLang($order = Criteria::ASC) Order by the id_lang column
 * @method     Oops_Model_CategoryLangQuery orderByName($order = Criteria::ASC) Order by the name column
 * @method     Oops_Model_CategoryLangQuery orderByDescription($order = Criteria::ASC) Order by the description column
 * @method     Oops_Model_CategoryLangQuery orderByLinkRewrite($order = Criteria::ASC) Order by the link_rewrite column
 * @method     Oops_Model_CategoryLangQuery orderByMetaTitle($order = Criteria::ASC) Order by the meta_title column
 * @method     Oops_Model_CategoryLangQuery orderByMetaKeywords($order = Criteria::ASC) Order by the meta_keywords column
 * @method     Oops_Model_CategoryLangQuery orderByMetaDescription($order = Criteria::ASC) Order by the meta_description column
 *
 * @method     Oops_Model_CategoryLangQuery groupByIdCategory() Group by the id_category column
 * @method     Oops_Model_CategoryLangQuery groupByIdLang() Group by the id_lang column
 * @method     Oops_Model_CategoryLangQuery groupByName() Group by the name column
 * @method     Oops_Model_CategoryLangQuery groupByDescription() Group by the description column
 * @method     Oops_Model_CategoryLangQuery groupByLinkRewrite() Group by the link_rewrite column
 * @method     Oops_Model_CategoryLangQuery groupByMetaTitle() Group by the meta_title column
 * @method     Oops_Model_CategoryLangQuery groupByMetaKeywords() Group by the meta_keywords column
 * @method     Oops_Model_CategoryLangQuery groupByMetaDescription() Group by the meta_description column
 *
 * @method     Oops_Model_CategoryLangQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     Oops_Model_CategoryLangQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     Oops_Model_CategoryLangQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     Oops_Model_CategoryLangQuery leftJoinCategory($relationAlias = null) Adds a LEFT JOIN clause to the query using the Category relation
 * @method     Oops_Model_CategoryLangQuery rightJoinCategory($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Category relation
 * @method     Oops_Model_CategoryLangQuery innerJoinCategory($relationAlias = null) Adds a INNER JOIN clause to the query using the Category relation
 *
 * @method     Oops_Model_CategoryLangQuery leftJoinLang($relationAlias = null) Adds a LEFT JOIN clause to the query using the Lang relation
 * @method     Oops_Model_CategoryLangQuery rightJoinLang($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Lang relation
 * @method     Oops_Model_CategoryLangQuery innerJoinLang($relationAlias = null) Adds a INNER JOIN clause to the query using the Lang relation
 *
 * @method     Oops_Model_CategoryLang findOne(PropelPDO $con = null) Return the first Oops_Model_CategoryLang matching the query
 * @method     Oops_Model_CategoryLang findOneOrCreate(PropelPDO $con = null) Return the first Oops_Model_CategoryLang matching the query, or a new Oops_Model_CategoryLang object populated from the query conditions when no match is found
 *
 * @method     Oops_Model_CategoryLang findOneByIdCategory(int $id_category) Return the first Oops_Model_CategoryLang filtered by the id_category column
 * @method     Oops_Model_CategoryLang findOneByIdLang(int $id_lang) Return the first Oops_Model_CategoryLang filtered by the id_lang column
 * @method     Oops_Model_CategoryLang findOneByName(string $name) Return the first Oops_Model_CategoryLang filtered by the name column
 * @method     Oops_Model_CategoryLang findOneByDescription(string $description) Return the first Oops_Model_CategoryLang filtered by the description column
 * @method     Oops_Model_CategoryLang findOneByLinkRewrite(string $link_rewrite) Return the first Oops_Model_CategoryLang filtered by the link_rewrite column
 * @method     Oops_Model_CategoryLang findOneByMetaTitle(string $meta_title) Return the first Oops_Model_CategoryLang filtered by the meta_title column
 * @method     Oops_Model_CategoryLang findOneByMetaKeywords(string $meta_keywords) Return the first Oops_Model_CategoryLang filtered by the meta_keywords column
 * @method     Oops_Model_CategoryLang findOneByMetaDescription(string $meta_description) Return the first Oops_Model_CategoryLang filtered by the meta_description column
 *
 * @method     array findByIdCategory(int $id_category) Return Oops_Model_CategoryLang objects filtered by the id_category column
 * @method     array findByIdLang(int $id_lang) Return Oops_Model_CategoryLang objects filtered by the id_lang column
 * @method     array findByName(string $name) Return Oops_Model_CategoryLang objects filtered by the name column
 * @method     array findByDescription(string $description) Return Oops_Model_CategoryLang objects filtered by the description column
 * @method     array findByLinkRewrite(string $link_rewrite) Return Oops_Model_CategoryLang objects filtered by the link_rewrite column
 * @method     array findByMetaTitle(string $meta_title) Return Oops_Model_CategoryLang objects filtered by the meta_title column
 * @method     array findByMetaKeywords(string $meta_keywords) Return Oops_Model_CategoryLang objects filtered by the meta_keywords column
 * @method     array findByMetaDescription(string $meta_description) Return Oops_Model_CategoryLang objects filtered by the meta_description column
 *
 * @package    propel.generator.prestashop.om
 */
abstract class Oops_Model_Base_CategoryLangQuery extends ModelCriteria
{
	
	/**
	 * Initializes internal state of Oops_Model_Base_CategoryLangQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'prestashop', $modelName = 'Oops_Model_CategoryLang', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new Oops_Model_CategoryLangQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    Oops_Model_CategoryLangQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof Oops_Model_CategoryLangQuery) {
			return $criteria;
		}
		$query = new Oops_Model_CategoryLangQuery();
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
	 * $obj = $c->findPk(array(12, 34), $con);
	 * </code>
	 *
	 * @param     array[$id_category, $id_lang] $key Primary key to use for the query
	 * @param     PropelPDO $con an optional connection object
	 *
	 * @return    Oops_Model_CategoryLang|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ($key === null) {
			return null;
		}
		if ((null !== ($obj = Oops_Model_CategoryLangPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
			// the object is alredy in the instance pool
			return $obj;
		}
		if ($con === null) {
			$con = Propel::getConnection(Oops_Model_CategoryLangPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
	 * @return    Oops_Model_CategoryLang A model object, or null if the key is not found
	 */
	protected function findPkSimple($key, $con)
	{
		$sql = 'SELECT `ID_CATEGORY`, `ID_LANG`, `NAME`, `DESCRIPTION`, `LINK_REWRITE`, `META_TITLE`, `META_KEYWORDS`, `META_DESCRIPTION` FROM `' . _DB_PREFIX_ . 'djland_category_lang` WHERE `ID_CATEGORY` = :p0 AND `ID_LANG` = :p1';
		try {
			$stmt = $con->prepare($sql);
			$stmt->bindValue(':p0', $key[0], PDO::PARAM_INT);
			$stmt->bindValue(':p1', $key[1], PDO::PARAM_INT);
			$stmt->execute();
		} catch (Exception $e) {
			Propel::log($e->getMessage(), Propel::LOG_ERR);
			throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
		}
		$obj = null;
		if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$obj = new Oops_Model_CategoryLang();
			$obj->hydrate($row);
			Oops_Model_CategoryLangPeer::addInstanceToPool($obj, serialize(array((string) $row[0], (string) $row[1])));
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
	 * @return    Oops_Model_CategoryLang|array|mixed the result, formatted by the current formatter
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
	 * $objs = $c->findPks(array(array(12, 56), array(832, 123), array(123, 456)), $con);
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
	 * @return    Oops_Model_CategoryLangQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		$this->addUsingAlias(Oops_Model_CategoryLangPeer::ID_CATEGORY, $key[0], Criteria::EQUAL);
		$this->addUsingAlias(Oops_Model_CategoryLangPeer::ID_LANG, $key[1], Criteria::EQUAL);

		return $this;
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    Oops_Model_CategoryLangQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		if (empty($keys)) {
			return $this->add(null, '1<>1', Criteria::CUSTOM);
		}
		foreach ($keys as $key) {
			$cton0 = $this->getNewCriterion(Oops_Model_CategoryLangPeer::ID_CATEGORY, $key[0], Criteria::EQUAL);
			$cton1 = $this->getNewCriterion(Oops_Model_CategoryLangPeer::ID_LANG, $key[1], Criteria::EQUAL);
			$cton0->addAnd($cton1);
			$this->addOr($cton0);
		}

		return $this;
	}

	/**
	 * Filter the query on the id_category column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByIdCategory(1234); // WHERE id_category = 1234
	 * $query->filterByIdCategory(array(12, 34)); // WHERE id_category IN (12, 34)
	 * $query->filterByIdCategory(array('min' => 12)); // WHERE id_category > 12
	 * </code>
	 *
	 * @see       filterByCategory()
	 *
	 * @param     mixed $idCategory The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_CategoryLangQuery The current query, for fluid interface
	 */
	public function filterByIdCategory($idCategory = null, $comparison = null)
	{
		if (is_array($idCategory) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(Oops_Model_CategoryLangPeer::ID_CATEGORY, $idCategory, $comparison);
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
	 * @see       filterByLang()
	 *
	 * @param     mixed $idLang The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_CategoryLangQuery The current query, for fluid interface
	 */
	public function filterByIdLang($idLang = null, $comparison = null)
	{
		if (is_array($idLang) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(Oops_Model_CategoryLangPeer::ID_LANG, $idLang, $comparison);
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
	 * @return    Oops_Model_CategoryLangQuery The current query, for fluid interface
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
		return $this->addUsingAlias(Oops_Model_CategoryLangPeer::NAME, $name, $comparison);
	}

	/**
	 * Filter the query on the description column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByDescription('fooValue');   // WHERE description = 'fooValue'
	 * $query->filterByDescription('%fooValue%'); // WHERE description LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $description The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_CategoryLangQuery The current query, for fluid interface
	 */
	public function filterByDescription($description = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($description)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $description)) {
				$description = str_replace('*', '%', $description);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(Oops_Model_CategoryLangPeer::DESCRIPTION, $description, $comparison);
	}

	/**
	 * Filter the query on the link_rewrite column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByLinkRewrite('fooValue');   // WHERE link_rewrite = 'fooValue'
	 * $query->filterByLinkRewrite('%fooValue%'); // WHERE link_rewrite LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $linkRewrite The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_CategoryLangQuery The current query, for fluid interface
	 */
	public function filterByLinkRewrite($linkRewrite = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($linkRewrite)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $linkRewrite)) {
				$linkRewrite = str_replace('*', '%', $linkRewrite);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(Oops_Model_CategoryLangPeer::LINK_REWRITE, $linkRewrite, $comparison);
	}

	/**
	 * Filter the query on the meta_title column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByMetaTitle('fooValue');   // WHERE meta_title = 'fooValue'
	 * $query->filterByMetaTitle('%fooValue%'); // WHERE meta_title LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $metaTitle The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_CategoryLangQuery The current query, for fluid interface
	 */
	public function filterByMetaTitle($metaTitle = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($metaTitle)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $metaTitle)) {
				$metaTitle = str_replace('*', '%', $metaTitle);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(Oops_Model_CategoryLangPeer::META_TITLE, $metaTitle, $comparison);
	}

	/**
	 * Filter the query on the meta_keywords column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByMetaKeywords('fooValue');   // WHERE meta_keywords = 'fooValue'
	 * $query->filterByMetaKeywords('%fooValue%'); // WHERE meta_keywords LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $metaKeywords The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_CategoryLangQuery The current query, for fluid interface
	 */
	public function filterByMetaKeywords($metaKeywords = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($metaKeywords)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $metaKeywords)) {
				$metaKeywords = str_replace('*', '%', $metaKeywords);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(Oops_Model_CategoryLangPeer::META_KEYWORDS, $metaKeywords, $comparison);
	}

	/**
	 * Filter the query on the meta_description column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByMetaDescription('fooValue');   // WHERE meta_description = 'fooValue'
	 * $query->filterByMetaDescription('%fooValue%'); // WHERE meta_description LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $metaDescription The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_CategoryLangQuery The current query, for fluid interface
	 */
	public function filterByMetaDescription($metaDescription = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($metaDescription)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $metaDescription)) {
				$metaDescription = str_replace('*', '%', $metaDescription);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(Oops_Model_CategoryLangPeer::META_DESCRIPTION, $metaDescription, $comparison);
	}

	/**
	 * Filter the query by a related Oops_Model_Category object
	 *
	 * @param     Oops_Model_Category|PropelCollection $category The related object(s) to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_CategoryLangQuery The current query, for fluid interface
	 */
	public function filterByCategory($category, $comparison = null)
	{
		if ($category instanceof Oops_Model_Category) {
			return $this
				->addUsingAlias(Oops_Model_CategoryLangPeer::ID_CATEGORY, $category->getIdCategory(), $comparison);
		} elseif ($category instanceof PropelCollection) {
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
			return $this
				->addUsingAlias(Oops_Model_CategoryLangPeer::ID_CATEGORY, $category->toKeyValue('PrimaryKey', 'IdCategory'), $comparison);
		} else {
			throw new PropelException('filterByCategory() only accepts arguments of type Oops_Model_Category or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the Category relation
	 *
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    Oops_Model_CategoryLangQuery The current query, for fluid interface
	 */
	public function joinCategory($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('Category');

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
			$this->addJoinObject($join, 'Category');
		}

		return $this;
	}

	/**
	 * Use the Category relation Category object
	 *
	 * @see       useQuery()
	 *
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    Oops_Model_CategoryQuery A secondary query class using the current class as primary query
	 */
	public function useCategoryQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinCategory($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'Category', 'Oops_Model_CategoryQuery');
	}

	/**
	 * Filter the query by a related Oops_Model_Lang object
	 *
	 * @param     Oops_Model_Lang|PropelCollection $lang The related object(s) to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_CategoryLangQuery The current query, for fluid interface
	 */
	public function filterByLang($lang, $comparison = null)
	{
		if ($lang instanceof Oops_Model_Lang) {
			return $this
				->addUsingAlias(Oops_Model_CategoryLangPeer::ID_LANG, $lang->getIdLang(), $comparison);
		} elseif ($lang instanceof PropelCollection) {
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
			return $this
				->addUsingAlias(Oops_Model_CategoryLangPeer::ID_LANG, $lang->toKeyValue('PrimaryKey', 'IdLang'), $comparison);
		} else {
			throw new PropelException('filterByLang() only accepts arguments of type Oops_Model_Lang or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the Lang relation
	 *
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    Oops_Model_CategoryLangQuery The current query, for fluid interface
	 */
	public function joinLang($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('Lang');

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
			$this->addJoinObject($join, 'Lang');
		}

		return $this;
	}

	/**
	 * Use the Lang relation Lang object
	 *
	 * @see       useQuery()
	 *
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    Oops_Model_LangQuery A secondary query class using the current class as primary query
	 */
	public function useLangQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinLang($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'Lang', 'Oops_Model_LangQuery');
	}

	/**
	 * Exclude object from result
	 *
	 * @param     Oops_Model_CategoryLang $categoryLang Object to remove from the list of results
	 *
	 * @return    Oops_Model_CategoryLangQuery The current query, for fluid interface
	 */
	public function prune($categoryLang = null)
	{
		if ($categoryLang) {
			$this->addCond('pruneCond0', $this->getAliasedColName(Oops_Model_CategoryLangPeer::ID_CATEGORY), $categoryLang->getIdCategory(), Criteria::NOT_EQUAL);
			$this->addCond('pruneCond1', $this->getAliasedColName(Oops_Model_CategoryLangPeer::ID_LANG), $categoryLang->getIdLang(), Criteria::NOT_EQUAL);
			$this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
		}

		return $this;
	}

} // Oops_Model_Base_CategoryLangQuery