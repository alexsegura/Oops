<?php


/**
 * Base class that represents a query for the 'cms_category_lang' table.
 *
 * 
 *
 * @method     Oops_Model_CmsCategoryLangQuery orderByIdCmsCategory($order = Criteria::ASC) Order by the id_cms_category column
 * @method     Oops_Model_CmsCategoryLangQuery orderByIdLang($order = Criteria::ASC) Order by the id_lang column
 * @method     Oops_Model_CmsCategoryLangQuery orderByName($order = Criteria::ASC) Order by the name column
 * @method     Oops_Model_CmsCategoryLangQuery orderByDescription($order = Criteria::ASC) Order by the description column
 * @method     Oops_Model_CmsCategoryLangQuery orderByLinkRewrite($order = Criteria::ASC) Order by the link_rewrite column
 * @method     Oops_Model_CmsCategoryLangQuery orderByMetaTitle($order = Criteria::ASC) Order by the meta_title column
 * @method     Oops_Model_CmsCategoryLangQuery orderByMetaKeywords($order = Criteria::ASC) Order by the meta_keywords column
 * @method     Oops_Model_CmsCategoryLangQuery orderByMetaDescription($order = Criteria::ASC) Order by the meta_description column
 *
 * @method     Oops_Model_CmsCategoryLangQuery groupByIdCmsCategory() Group by the id_cms_category column
 * @method     Oops_Model_CmsCategoryLangQuery groupByIdLang() Group by the id_lang column
 * @method     Oops_Model_CmsCategoryLangQuery groupByName() Group by the name column
 * @method     Oops_Model_CmsCategoryLangQuery groupByDescription() Group by the description column
 * @method     Oops_Model_CmsCategoryLangQuery groupByLinkRewrite() Group by the link_rewrite column
 * @method     Oops_Model_CmsCategoryLangQuery groupByMetaTitle() Group by the meta_title column
 * @method     Oops_Model_CmsCategoryLangQuery groupByMetaKeywords() Group by the meta_keywords column
 * @method     Oops_Model_CmsCategoryLangQuery groupByMetaDescription() Group by the meta_description column
 *
 * @method     Oops_Model_CmsCategoryLangQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     Oops_Model_CmsCategoryLangQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     Oops_Model_CmsCategoryLangQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     Oops_Model_CmsCategoryLang findOne(PropelPDO $con = null) Return the first Oops_Model_CmsCategoryLang matching the query
 * @method     Oops_Model_CmsCategoryLang findOneOrCreate(PropelPDO $con = null) Return the first Oops_Model_CmsCategoryLang matching the query, or a new Oops_Model_CmsCategoryLang object populated from the query conditions when no match is found
 *
 * @method     Oops_Model_CmsCategoryLang findOneByIdCmsCategory(int $id_cms_category) Return the first Oops_Model_CmsCategoryLang filtered by the id_cms_category column
 * @method     Oops_Model_CmsCategoryLang findOneByIdLang(int $id_lang) Return the first Oops_Model_CmsCategoryLang filtered by the id_lang column
 * @method     Oops_Model_CmsCategoryLang findOneByName(string $name) Return the first Oops_Model_CmsCategoryLang filtered by the name column
 * @method     Oops_Model_CmsCategoryLang findOneByDescription(string $description) Return the first Oops_Model_CmsCategoryLang filtered by the description column
 * @method     Oops_Model_CmsCategoryLang findOneByLinkRewrite(string $link_rewrite) Return the first Oops_Model_CmsCategoryLang filtered by the link_rewrite column
 * @method     Oops_Model_CmsCategoryLang findOneByMetaTitle(string $meta_title) Return the first Oops_Model_CmsCategoryLang filtered by the meta_title column
 * @method     Oops_Model_CmsCategoryLang findOneByMetaKeywords(string $meta_keywords) Return the first Oops_Model_CmsCategoryLang filtered by the meta_keywords column
 * @method     Oops_Model_CmsCategoryLang findOneByMetaDescription(string $meta_description) Return the first Oops_Model_CmsCategoryLang filtered by the meta_description column
 *
 * @method     array findByIdCmsCategory(int $id_cms_category) Return Oops_Model_CmsCategoryLang objects filtered by the id_cms_category column
 * @method     array findByIdLang(int $id_lang) Return Oops_Model_CmsCategoryLang objects filtered by the id_lang column
 * @method     array findByName(string $name) Return Oops_Model_CmsCategoryLang objects filtered by the name column
 * @method     array findByDescription(string $description) Return Oops_Model_CmsCategoryLang objects filtered by the description column
 * @method     array findByLinkRewrite(string $link_rewrite) Return Oops_Model_CmsCategoryLang objects filtered by the link_rewrite column
 * @method     array findByMetaTitle(string $meta_title) Return Oops_Model_CmsCategoryLang objects filtered by the meta_title column
 * @method     array findByMetaKeywords(string $meta_keywords) Return Oops_Model_CmsCategoryLang objects filtered by the meta_keywords column
 * @method     array findByMetaDescription(string $meta_description) Return Oops_Model_CmsCategoryLang objects filtered by the meta_description column
 *
 * @package    propel.generator.prestashop.om
 */
abstract class Oops_Model_Base_CmsCategoryLangQuery extends ModelCriteria
{
	
	/**
	 * Initializes internal state of Oops_Model_Base_CmsCategoryLangQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'prestashop', $modelName = 'Oops_Model_CmsCategoryLang', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new Oops_Model_CmsCategoryLangQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    Oops_Model_CmsCategoryLangQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof Oops_Model_CmsCategoryLangQuery) {
			return $criteria;
		}
		$query = new Oops_Model_CmsCategoryLangQuery();
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
	 * @return    Oops_Model_CmsCategoryLang|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ($key === null) {
			return null;
		}
		if ((null !== ($obj = Oops_Model_CmsCategoryLangPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
			// the object is alredy in the instance pool
			return $obj;
		}
		if ($con === null) {
			$con = Propel::getConnection(Oops_Model_CmsCategoryLangPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
	 * @return    Oops_Model_CmsCategoryLang A model object, or null if the key is not found
	 */
	protected function findPkSimple($key, $con)
	{
		$sql = 'SELECT `ID_CMS_CATEGORY`, `ID_LANG`, `NAME`, `DESCRIPTION`, `LINK_REWRITE`, `META_TITLE`, `META_KEYWORDS`, `META_DESCRIPTION` FROM `' . _DB_PREFIX_ . 'cms_category_lang` WHERE `ID_CMS_CATEGORY` = :p0';
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
			$obj = new Oops_Model_CmsCategoryLang();
			$obj->hydrate($row);
			Oops_Model_CmsCategoryLangPeer::addInstanceToPool($obj, (string) $row[0]);
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
	 * @return    Oops_Model_CmsCategoryLang|array|mixed the result, formatted by the current formatter
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
	 * @return    Oops_Model_CmsCategoryLangQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(Oops_Model_CmsCategoryLangPeer::ID_CMS_CATEGORY, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    Oops_Model_CmsCategoryLangQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(Oops_Model_CmsCategoryLangPeer::ID_CMS_CATEGORY, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id_cms_category column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByIdCmsCategory(1234); // WHERE id_cms_category = 1234
	 * $query->filterByIdCmsCategory(array(12, 34)); // WHERE id_cms_category IN (12, 34)
	 * $query->filterByIdCmsCategory(array('min' => 12)); // WHERE id_cms_category > 12
	 * </code>
	 *
	 * @param     mixed $idCmsCategory The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_CmsCategoryLangQuery The current query, for fluid interface
	 */
	public function filterByIdCmsCategory($idCmsCategory = null, $comparison = null)
	{
		if (is_array($idCmsCategory) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(Oops_Model_CmsCategoryLangPeer::ID_CMS_CATEGORY, $idCmsCategory, $comparison);
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
	 * @return    Oops_Model_CmsCategoryLangQuery The current query, for fluid interface
	 */
	public function filterByIdLang($idLang = null, $comparison = null)
	{
		if (is_array($idLang)) {
			$useMinMax = false;
			if (isset($idLang['min'])) {
				$this->addUsingAlias(Oops_Model_CmsCategoryLangPeer::ID_LANG, $idLang['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($idLang['max'])) {
				$this->addUsingAlias(Oops_Model_CmsCategoryLangPeer::ID_LANG, $idLang['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_CmsCategoryLangPeer::ID_LANG, $idLang, $comparison);
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
	 * @return    Oops_Model_CmsCategoryLangQuery The current query, for fluid interface
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
		return $this->addUsingAlias(Oops_Model_CmsCategoryLangPeer::NAME, $name, $comparison);
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
	 * @return    Oops_Model_CmsCategoryLangQuery The current query, for fluid interface
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
		return $this->addUsingAlias(Oops_Model_CmsCategoryLangPeer::DESCRIPTION, $description, $comparison);
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
	 * @return    Oops_Model_CmsCategoryLangQuery The current query, for fluid interface
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
		return $this->addUsingAlias(Oops_Model_CmsCategoryLangPeer::LINK_REWRITE, $linkRewrite, $comparison);
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
	 * @return    Oops_Model_CmsCategoryLangQuery The current query, for fluid interface
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
		return $this->addUsingAlias(Oops_Model_CmsCategoryLangPeer::META_TITLE, $metaTitle, $comparison);
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
	 * @return    Oops_Model_CmsCategoryLangQuery The current query, for fluid interface
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
		return $this->addUsingAlias(Oops_Model_CmsCategoryLangPeer::META_KEYWORDS, $metaKeywords, $comparison);
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
	 * @return    Oops_Model_CmsCategoryLangQuery The current query, for fluid interface
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
		return $this->addUsingAlias(Oops_Model_CmsCategoryLangPeer::META_DESCRIPTION, $metaDescription, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     Oops_Model_CmsCategoryLang $cmsCategoryLang Object to remove from the list of results
	 *
	 * @return    Oops_Model_CmsCategoryLangQuery The current query, for fluid interface
	 */
	public function prune($cmsCategoryLang = null)
	{
		if ($cmsCategoryLang) {
			$this->addUsingAlias(Oops_Model_CmsCategoryLangPeer::ID_CMS_CATEGORY, $cmsCategoryLang->getIdCmsCategory(), Criteria::NOT_EQUAL);
		}

		return $this;
	}

} // Oops_Model_Base_CmsCategoryLangQuery