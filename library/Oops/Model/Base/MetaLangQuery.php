<?php


/**
 * Base class that represents a query for the 'meta_lang' table.
 *
 * 
 *
 * @method     Oops_Model_MetaLangQuery orderByIdMeta($order = Criteria::ASC) Order by the id_meta column
 * @method     Oops_Model_MetaLangQuery orderByIdLang($order = Criteria::ASC) Order by the id_lang column
 * @method     Oops_Model_MetaLangQuery orderByTitle($order = Criteria::ASC) Order by the title column
 * @method     Oops_Model_MetaLangQuery orderByDescription($order = Criteria::ASC) Order by the description column
 * @method     Oops_Model_MetaLangQuery orderByKeywords($order = Criteria::ASC) Order by the keywords column
 * @method     Oops_Model_MetaLangQuery orderByUrlRewrite($order = Criteria::ASC) Order by the url_rewrite column
 *
 * @method     Oops_Model_MetaLangQuery groupByIdMeta() Group by the id_meta column
 * @method     Oops_Model_MetaLangQuery groupByIdLang() Group by the id_lang column
 * @method     Oops_Model_MetaLangQuery groupByTitle() Group by the title column
 * @method     Oops_Model_MetaLangQuery groupByDescription() Group by the description column
 * @method     Oops_Model_MetaLangQuery groupByKeywords() Group by the keywords column
 * @method     Oops_Model_MetaLangQuery groupByUrlRewrite() Group by the url_rewrite column
 *
 * @method     Oops_Model_MetaLangQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     Oops_Model_MetaLangQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     Oops_Model_MetaLangQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     Oops_Model_MetaLang findOne(PropelPDO $con = null) Return the first Oops_Model_MetaLang matching the query
 * @method     Oops_Model_MetaLang findOneOrCreate(PropelPDO $con = null) Return the first Oops_Model_MetaLang matching the query, or a new Oops_Model_MetaLang object populated from the query conditions when no match is found
 *
 * @method     Oops_Model_MetaLang findOneByIdMeta(int $id_meta) Return the first Oops_Model_MetaLang filtered by the id_meta column
 * @method     Oops_Model_MetaLang findOneByIdLang(int $id_lang) Return the first Oops_Model_MetaLang filtered by the id_lang column
 * @method     Oops_Model_MetaLang findOneByTitle(string $title) Return the first Oops_Model_MetaLang filtered by the title column
 * @method     Oops_Model_MetaLang findOneByDescription(string $description) Return the first Oops_Model_MetaLang filtered by the description column
 * @method     Oops_Model_MetaLang findOneByKeywords(string $keywords) Return the first Oops_Model_MetaLang filtered by the keywords column
 * @method     Oops_Model_MetaLang findOneByUrlRewrite(string $url_rewrite) Return the first Oops_Model_MetaLang filtered by the url_rewrite column
 *
 * @method     array findByIdMeta(int $id_meta) Return Oops_Model_MetaLang objects filtered by the id_meta column
 * @method     array findByIdLang(int $id_lang) Return Oops_Model_MetaLang objects filtered by the id_lang column
 * @method     array findByTitle(string $title) Return Oops_Model_MetaLang objects filtered by the title column
 * @method     array findByDescription(string $description) Return Oops_Model_MetaLang objects filtered by the description column
 * @method     array findByKeywords(string $keywords) Return Oops_Model_MetaLang objects filtered by the keywords column
 * @method     array findByUrlRewrite(string $url_rewrite) Return Oops_Model_MetaLang objects filtered by the url_rewrite column
 *
 * @package    propel.generator.prestashop.om
 */
abstract class Oops_Model_Base_MetaLangQuery extends ModelCriteria
{
	
	/**
	 * Initializes internal state of Oops_Model_Base_MetaLangQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'prestashop', $modelName = 'Oops_Model_MetaLang', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new Oops_Model_MetaLangQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    Oops_Model_MetaLangQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof Oops_Model_MetaLangQuery) {
			return $criteria;
		}
		$query = new Oops_Model_MetaLangQuery();
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
	 * @param     array[$id_meta, $id_lang] $key Primary key to use for the query
	 * @param     PropelPDO $con an optional connection object
	 *
	 * @return    Oops_Model_MetaLang|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ($key === null) {
			return null;
		}
		if ((null !== ($obj = Oops_Model_MetaLangPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
			// the object is alredy in the instance pool
			return $obj;
		}
		if ($con === null) {
			$con = Propel::getConnection(Oops_Model_MetaLangPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
	 * @return    Oops_Model_MetaLang A model object, or null if the key is not found
	 */
	protected function findPkSimple($key, $con)
	{
		$sql = 'SELECT `ID_META`, `ID_LANG`, `TITLE`, `DESCRIPTION`, `KEYWORDS`, `URL_REWRITE` FROM `' . _DB_PREFIX_ . 'meta_lang` WHERE `ID_META` = :p0 AND `ID_LANG` = :p1';
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
			$obj = new Oops_Model_MetaLang();
			$obj->hydrate($row);
			Oops_Model_MetaLangPeer::addInstanceToPool($obj, serialize(array((string) $row[0], (string) $row[1])));
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
	 * @return    Oops_Model_MetaLang|array|mixed the result, formatted by the current formatter
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
	 * @return    Oops_Model_MetaLangQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		$this->addUsingAlias(Oops_Model_MetaLangPeer::ID_META, $key[0], Criteria::EQUAL);
		$this->addUsingAlias(Oops_Model_MetaLangPeer::ID_LANG, $key[1], Criteria::EQUAL);

		return $this;
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    Oops_Model_MetaLangQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		if (empty($keys)) {
			return $this->add(null, '1<>1', Criteria::CUSTOM);
		}
		foreach ($keys as $key) {
			$cton0 = $this->getNewCriterion(Oops_Model_MetaLangPeer::ID_META, $key[0], Criteria::EQUAL);
			$cton1 = $this->getNewCriterion(Oops_Model_MetaLangPeer::ID_LANG, $key[1], Criteria::EQUAL);
			$cton0->addAnd($cton1);
			$this->addOr($cton0);
		}

		return $this;
	}

	/**
	 * Filter the query on the id_meta column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByIdMeta(1234); // WHERE id_meta = 1234
	 * $query->filterByIdMeta(array(12, 34)); // WHERE id_meta IN (12, 34)
	 * $query->filterByIdMeta(array('min' => 12)); // WHERE id_meta > 12
	 * </code>
	 *
	 * @param     mixed $idMeta The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_MetaLangQuery The current query, for fluid interface
	 */
	public function filterByIdMeta($idMeta = null, $comparison = null)
	{
		if (is_array($idMeta) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(Oops_Model_MetaLangPeer::ID_META, $idMeta, $comparison);
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
	 * @return    Oops_Model_MetaLangQuery The current query, for fluid interface
	 */
	public function filterByIdLang($idLang = null, $comparison = null)
	{
		if (is_array($idLang) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(Oops_Model_MetaLangPeer::ID_LANG, $idLang, $comparison);
	}

	/**
	 * Filter the query on the title column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByTitle('fooValue');   // WHERE title = 'fooValue'
	 * $query->filterByTitle('%fooValue%'); // WHERE title LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $title The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_MetaLangQuery The current query, for fluid interface
	 */
	public function filterByTitle($title = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($title)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $title)) {
				$title = str_replace('*', '%', $title);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(Oops_Model_MetaLangPeer::TITLE, $title, $comparison);
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
	 * @return    Oops_Model_MetaLangQuery The current query, for fluid interface
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
		return $this->addUsingAlias(Oops_Model_MetaLangPeer::DESCRIPTION, $description, $comparison);
	}

	/**
	 * Filter the query on the keywords column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByKeywords('fooValue');   // WHERE keywords = 'fooValue'
	 * $query->filterByKeywords('%fooValue%'); // WHERE keywords LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $keywords The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_MetaLangQuery The current query, for fluid interface
	 */
	public function filterByKeywords($keywords = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($keywords)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $keywords)) {
				$keywords = str_replace('*', '%', $keywords);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(Oops_Model_MetaLangPeer::KEYWORDS, $keywords, $comparison);
	}

	/**
	 * Filter the query on the url_rewrite column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByUrlRewrite('fooValue');   // WHERE url_rewrite = 'fooValue'
	 * $query->filterByUrlRewrite('%fooValue%'); // WHERE url_rewrite LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $urlRewrite The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_MetaLangQuery The current query, for fluid interface
	 */
	public function filterByUrlRewrite($urlRewrite = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($urlRewrite)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $urlRewrite)) {
				$urlRewrite = str_replace('*', '%', $urlRewrite);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(Oops_Model_MetaLangPeer::URL_REWRITE, $urlRewrite, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     Oops_Model_MetaLang $metaLang Object to remove from the list of results
	 *
	 * @return    Oops_Model_MetaLangQuery The current query, for fluid interface
	 */
	public function prune($metaLang = null)
	{
		if ($metaLang) {
			$this->addCond('pruneCond0', $this->getAliasedColName(Oops_Model_MetaLangPeer::ID_META), $metaLang->getIdMeta(), Criteria::NOT_EQUAL);
			$this->addCond('pruneCond1', $this->getAliasedColName(Oops_Model_MetaLangPeer::ID_LANG), $metaLang->getIdLang(), Criteria::NOT_EQUAL);
			$this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
		}

		return $this;
	}

} // Oops_Model_Base_MetaLangQuery