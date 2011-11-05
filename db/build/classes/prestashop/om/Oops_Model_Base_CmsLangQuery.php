<?php


/**
 * Base class that represents a query for the '' . _DB_PREFIX_ . 'djland_cms_lang' table.
 *
 * 
 *
 * @method     Oops_Model_CmsLangQuery orderByIdCms($order = Criteria::ASC) Order by the id_cms column
 * @method     Oops_Model_CmsLangQuery orderByIdLang($order = Criteria::ASC) Order by the id_lang column
 * @method     Oops_Model_CmsLangQuery orderByMetaTitle($order = Criteria::ASC) Order by the meta_title column
 * @method     Oops_Model_CmsLangQuery orderByMetaDescription($order = Criteria::ASC) Order by the meta_description column
 * @method     Oops_Model_CmsLangQuery orderByMetaKeywords($order = Criteria::ASC) Order by the meta_keywords column
 * @method     Oops_Model_CmsLangQuery orderByContent($order = Criteria::ASC) Order by the content column
 * @method     Oops_Model_CmsLangQuery orderByLinkRewrite($order = Criteria::ASC) Order by the link_rewrite column
 *
 * @method     Oops_Model_CmsLangQuery groupByIdCms() Group by the id_cms column
 * @method     Oops_Model_CmsLangQuery groupByIdLang() Group by the id_lang column
 * @method     Oops_Model_CmsLangQuery groupByMetaTitle() Group by the meta_title column
 * @method     Oops_Model_CmsLangQuery groupByMetaDescription() Group by the meta_description column
 * @method     Oops_Model_CmsLangQuery groupByMetaKeywords() Group by the meta_keywords column
 * @method     Oops_Model_CmsLangQuery groupByContent() Group by the content column
 * @method     Oops_Model_CmsLangQuery groupByLinkRewrite() Group by the link_rewrite column
 *
 * @method     Oops_Model_CmsLangQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     Oops_Model_CmsLangQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     Oops_Model_CmsLangQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     Oops_Model_CmsLang findOne(PropelPDO $con = null) Return the first Oops_Model_CmsLang matching the query
 * @method     Oops_Model_CmsLang findOneOrCreate(PropelPDO $con = null) Return the first Oops_Model_CmsLang matching the query, or a new Oops_Model_CmsLang object populated from the query conditions when no match is found
 *
 * @method     Oops_Model_CmsLang findOneByIdCms(int $id_cms) Return the first Oops_Model_CmsLang filtered by the id_cms column
 * @method     Oops_Model_CmsLang findOneByIdLang(int $id_lang) Return the first Oops_Model_CmsLang filtered by the id_lang column
 * @method     Oops_Model_CmsLang findOneByMetaTitle(string $meta_title) Return the first Oops_Model_CmsLang filtered by the meta_title column
 * @method     Oops_Model_CmsLang findOneByMetaDescription(string $meta_description) Return the first Oops_Model_CmsLang filtered by the meta_description column
 * @method     Oops_Model_CmsLang findOneByMetaKeywords(string $meta_keywords) Return the first Oops_Model_CmsLang filtered by the meta_keywords column
 * @method     Oops_Model_CmsLang findOneByContent(string $content) Return the first Oops_Model_CmsLang filtered by the content column
 * @method     Oops_Model_CmsLang findOneByLinkRewrite(string $link_rewrite) Return the first Oops_Model_CmsLang filtered by the link_rewrite column
 *
 * @method     array findByIdCms(int $id_cms) Return Oops_Model_CmsLang objects filtered by the id_cms column
 * @method     array findByIdLang(int $id_lang) Return Oops_Model_CmsLang objects filtered by the id_lang column
 * @method     array findByMetaTitle(string $meta_title) Return Oops_Model_CmsLang objects filtered by the meta_title column
 * @method     array findByMetaDescription(string $meta_description) Return Oops_Model_CmsLang objects filtered by the meta_description column
 * @method     array findByMetaKeywords(string $meta_keywords) Return Oops_Model_CmsLang objects filtered by the meta_keywords column
 * @method     array findByContent(string $content) Return Oops_Model_CmsLang objects filtered by the content column
 * @method     array findByLinkRewrite(string $link_rewrite) Return Oops_Model_CmsLang objects filtered by the link_rewrite column
 *
 * @package    propel.generator.prestashop.om
 */
abstract class Oops_Model_Base_CmsLangQuery extends ModelCriteria
{
	
	/**
	 * Initializes internal state of Oops_Model_Base_CmsLangQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'prestashop', $modelName = 'Oops_Model_CmsLang', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new Oops_Model_CmsLangQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    Oops_Model_CmsLangQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof Oops_Model_CmsLangQuery) {
			return $criteria;
		}
		$query = new Oops_Model_CmsLangQuery();
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
	 * @param     array[$id_cms, $id_lang] $key Primary key to use for the query
	 * @param     PropelPDO $con an optional connection object
	 *
	 * @return    Oops_Model_CmsLang|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ($key === null) {
			return null;
		}
		if ((null !== ($obj = Oops_Model_CmsLangPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
			// the object is alredy in the instance pool
			return $obj;
		}
		if ($con === null) {
			$con = Propel::getConnection(Oops_Model_CmsLangPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
	 * @return    Oops_Model_CmsLang A model object, or null if the key is not found
	 */
	protected function findPkSimple($key, $con)
	{
		$sql = 'SELECT `ID_CMS`, `ID_LANG`, `META_TITLE`, `META_DESCRIPTION`, `META_KEYWORDS`, `CONTENT`, `LINK_REWRITE` FROM `' . _DB_PREFIX_ . 'djland_cms_lang` WHERE `ID_CMS` = :p0 AND `ID_LANG` = :p1';
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
			$obj = new Oops_Model_CmsLang();
			$obj->hydrate($row);
			Oops_Model_CmsLangPeer::addInstanceToPool($obj, serialize(array((string) $row[0], (string) $row[1])));
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
	 * @return    Oops_Model_CmsLang|array|mixed the result, formatted by the current formatter
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
	 * @return    Oops_Model_CmsLangQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		$this->addUsingAlias(Oops_Model_CmsLangPeer::ID_CMS, $key[0], Criteria::EQUAL);
		$this->addUsingAlias(Oops_Model_CmsLangPeer::ID_LANG, $key[1], Criteria::EQUAL);

		return $this;
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    Oops_Model_CmsLangQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		if (empty($keys)) {
			return $this->add(null, '1<>1', Criteria::CUSTOM);
		}
		foreach ($keys as $key) {
			$cton0 = $this->getNewCriterion(Oops_Model_CmsLangPeer::ID_CMS, $key[0], Criteria::EQUAL);
			$cton1 = $this->getNewCriterion(Oops_Model_CmsLangPeer::ID_LANG, $key[1], Criteria::EQUAL);
			$cton0->addAnd($cton1);
			$this->addOr($cton0);
		}

		return $this;
	}

	/**
	 * Filter the query on the id_cms column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByIdCms(1234); // WHERE id_cms = 1234
	 * $query->filterByIdCms(array(12, 34)); // WHERE id_cms IN (12, 34)
	 * $query->filterByIdCms(array('min' => 12)); // WHERE id_cms > 12
	 * </code>
	 *
	 * @param     mixed $idCms The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_CmsLangQuery The current query, for fluid interface
	 */
	public function filterByIdCms($idCms = null, $comparison = null)
	{
		if (is_array($idCms) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(Oops_Model_CmsLangPeer::ID_CMS, $idCms, $comparison);
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
	 * @return    Oops_Model_CmsLangQuery The current query, for fluid interface
	 */
	public function filterByIdLang($idLang = null, $comparison = null)
	{
		if (is_array($idLang) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(Oops_Model_CmsLangPeer::ID_LANG, $idLang, $comparison);
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
	 * @return    Oops_Model_CmsLangQuery The current query, for fluid interface
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
		return $this->addUsingAlias(Oops_Model_CmsLangPeer::META_TITLE, $metaTitle, $comparison);
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
	 * @return    Oops_Model_CmsLangQuery The current query, for fluid interface
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
		return $this->addUsingAlias(Oops_Model_CmsLangPeer::META_DESCRIPTION, $metaDescription, $comparison);
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
	 * @return    Oops_Model_CmsLangQuery The current query, for fluid interface
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
		return $this->addUsingAlias(Oops_Model_CmsLangPeer::META_KEYWORDS, $metaKeywords, $comparison);
	}

	/**
	 * Filter the query on the content column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByContent('fooValue');   // WHERE content = 'fooValue'
	 * $query->filterByContent('%fooValue%'); // WHERE content LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $content The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_CmsLangQuery The current query, for fluid interface
	 */
	public function filterByContent($content = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($content)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $content)) {
				$content = str_replace('*', '%', $content);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(Oops_Model_CmsLangPeer::CONTENT, $content, $comparison);
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
	 * @return    Oops_Model_CmsLangQuery The current query, for fluid interface
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
		return $this->addUsingAlias(Oops_Model_CmsLangPeer::LINK_REWRITE, $linkRewrite, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     Oops_Model_CmsLang $cmsLang Object to remove from the list of results
	 *
	 * @return    Oops_Model_CmsLangQuery The current query, for fluid interface
	 */
	public function prune($cmsLang = null)
	{
		if ($cmsLang) {
			$this->addCond('pruneCond0', $this->getAliasedColName(Oops_Model_CmsLangPeer::ID_CMS), $cmsLang->getIdCms(), Criteria::NOT_EQUAL);
			$this->addCond('pruneCond1', $this->getAliasedColName(Oops_Model_CmsLangPeer::ID_LANG), $cmsLang->getIdLang(), Criteria::NOT_EQUAL);
			$this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
		}

		return $this;
	}

} // Oops_Model_Base_CmsLangQuery