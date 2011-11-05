<?php


/**
 * Base class that represents a query for the 'djland_product_lang' table.
 *
 * 
 *
 * @method     Oops_Model_ProductLangQuery orderByIdProduct($order = Criteria::ASC) Order by the id_product column
 * @method     Oops_Model_ProductLangQuery orderByIdLang($order = Criteria::ASC) Order by the id_lang column
 * @method     Oops_Model_ProductLangQuery orderByDescription($order = Criteria::ASC) Order by the description column
 * @method     Oops_Model_ProductLangQuery orderByDescriptionShort($order = Criteria::ASC) Order by the description_short column
 * @method     Oops_Model_ProductLangQuery orderByLinkRewrite($order = Criteria::ASC) Order by the link_rewrite column
 * @method     Oops_Model_ProductLangQuery orderByMetaDescription($order = Criteria::ASC) Order by the meta_description column
 * @method     Oops_Model_ProductLangQuery orderByMetaKeywords($order = Criteria::ASC) Order by the meta_keywords column
 * @method     Oops_Model_ProductLangQuery orderByMetaTitle($order = Criteria::ASC) Order by the meta_title column
 * @method     Oops_Model_ProductLangQuery orderByName($order = Criteria::ASC) Order by the name column
 * @method     Oops_Model_ProductLangQuery orderByAvailableNow($order = Criteria::ASC) Order by the available_now column
 * @method     Oops_Model_ProductLangQuery orderByAvailableLater($order = Criteria::ASC) Order by the available_later column
 *
 * @method     Oops_Model_ProductLangQuery groupByIdProduct() Group by the id_product column
 * @method     Oops_Model_ProductLangQuery groupByIdLang() Group by the id_lang column
 * @method     Oops_Model_ProductLangQuery groupByDescription() Group by the description column
 * @method     Oops_Model_ProductLangQuery groupByDescriptionShort() Group by the description_short column
 * @method     Oops_Model_ProductLangQuery groupByLinkRewrite() Group by the link_rewrite column
 * @method     Oops_Model_ProductLangQuery groupByMetaDescription() Group by the meta_description column
 * @method     Oops_Model_ProductLangQuery groupByMetaKeywords() Group by the meta_keywords column
 * @method     Oops_Model_ProductLangQuery groupByMetaTitle() Group by the meta_title column
 * @method     Oops_Model_ProductLangQuery groupByName() Group by the name column
 * @method     Oops_Model_ProductLangQuery groupByAvailableNow() Group by the available_now column
 * @method     Oops_Model_ProductLangQuery groupByAvailableLater() Group by the available_later column
 *
 * @method     Oops_Model_ProductLangQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     Oops_Model_ProductLangQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     Oops_Model_ProductLangQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     Oops_Model_ProductLangQuery leftJoinProduct($relationAlias = null) Adds a LEFT JOIN clause to the query using the Product relation
 * @method     Oops_Model_ProductLangQuery rightJoinProduct($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Product relation
 * @method     Oops_Model_ProductLangQuery innerJoinProduct($relationAlias = null) Adds a INNER JOIN clause to the query using the Product relation
 *
 * @method     Oops_Model_ProductLangQuery leftJoinLang($relationAlias = null) Adds a LEFT JOIN clause to the query using the Lang relation
 * @method     Oops_Model_ProductLangQuery rightJoinLang($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Lang relation
 * @method     Oops_Model_ProductLangQuery innerJoinLang($relationAlias = null) Adds a INNER JOIN clause to the query using the Lang relation
 *
 * @method     Oops_Model_ProductLang findOne(PropelPDO $con = null) Return the first Oops_Model_ProductLang matching the query
 * @method     Oops_Model_ProductLang findOneOrCreate(PropelPDO $con = null) Return the first Oops_Model_ProductLang matching the query, or a new Oops_Model_ProductLang object populated from the query conditions when no match is found
 *
 * @method     Oops_Model_ProductLang findOneByIdProduct(int $id_product) Return the first Oops_Model_ProductLang filtered by the id_product column
 * @method     Oops_Model_ProductLang findOneByIdLang(int $id_lang) Return the first Oops_Model_ProductLang filtered by the id_lang column
 * @method     Oops_Model_ProductLang findOneByDescription(string $description) Return the first Oops_Model_ProductLang filtered by the description column
 * @method     Oops_Model_ProductLang findOneByDescriptionShort(string $description_short) Return the first Oops_Model_ProductLang filtered by the description_short column
 * @method     Oops_Model_ProductLang findOneByLinkRewrite(string $link_rewrite) Return the first Oops_Model_ProductLang filtered by the link_rewrite column
 * @method     Oops_Model_ProductLang findOneByMetaDescription(string $meta_description) Return the first Oops_Model_ProductLang filtered by the meta_description column
 * @method     Oops_Model_ProductLang findOneByMetaKeywords(string $meta_keywords) Return the first Oops_Model_ProductLang filtered by the meta_keywords column
 * @method     Oops_Model_ProductLang findOneByMetaTitle(string $meta_title) Return the first Oops_Model_ProductLang filtered by the meta_title column
 * @method     Oops_Model_ProductLang findOneByName(string $name) Return the first Oops_Model_ProductLang filtered by the name column
 * @method     Oops_Model_ProductLang findOneByAvailableNow(string $available_now) Return the first Oops_Model_ProductLang filtered by the available_now column
 * @method     Oops_Model_ProductLang findOneByAvailableLater(string $available_later) Return the first Oops_Model_ProductLang filtered by the available_later column
 *
 * @method     array findByIdProduct(int $id_product) Return Oops_Model_ProductLang objects filtered by the id_product column
 * @method     array findByIdLang(int $id_lang) Return Oops_Model_ProductLang objects filtered by the id_lang column
 * @method     array findByDescription(string $description) Return Oops_Model_ProductLang objects filtered by the description column
 * @method     array findByDescriptionShort(string $description_short) Return Oops_Model_ProductLang objects filtered by the description_short column
 * @method     array findByLinkRewrite(string $link_rewrite) Return Oops_Model_ProductLang objects filtered by the link_rewrite column
 * @method     array findByMetaDescription(string $meta_description) Return Oops_Model_ProductLang objects filtered by the meta_description column
 * @method     array findByMetaKeywords(string $meta_keywords) Return Oops_Model_ProductLang objects filtered by the meta_keywords column
 * @method     array findByMetaTitle(string $meta_title) Return Oops_Model_ProductLang objects filtered by the meta_title column
 * @method     array findByName(string $name) Return Oops_Model_ProductLang objects filtered by the name column
 * @method     array findByAvailableNow(string $available_now) Return Oops_Model_ProductLang objects filtered by the available_now column
 * @method     array findByAvailableLater(string $available_later) Return Oops_Model_ProductLang objects filtered by the available_later column
 *
 * @package    propel.generator.prestashop.om
 */
abstract class Oops_Model_Base_ProductLangQuery extends ModelCriteria
{
	
	/**
	 * Initializes internal state of Oops_Model_Base_ProductLangQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'prestashop', $modelName = 'Oops_Model_ProductLang', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new Oops_Model_ProductLangQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    Oops_Model_ProductLangQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof Oops_Model_ProductLangQuery) {
			return $criteria;
		}
		$query = new Oops_Model_ProductLangQuery();
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
	 * @param     array[$id_product, $id_lang] $key Primary key to use for the query
	 * @param     PropelPDO $con an optional connection object
	 *
	 * @return    Oops_Model_ProductLang|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ($key === null) {
			return null;
		}
		if ((null !== ($obj = Oops_Model_ProductLangPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
			// the object is alredy in the instance pool
			return $obj;
		}
		if ($con === null) {
			$con = Propel::getConnection(Oops_Model_ProductLangPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
	 * @return    Oops_Model_ProductLang A model object, or null if the key is not found
	 */
	protected function findPkSimple($key, $con)
	{
		$sql = 'SELECT `ID_PRODUCT`, `ID_LANG`, `DESCRIPTION`, `DESCRIPTION_SHORT`, `LINK_REWRITE`, `META_DESCRIPTION`, `META_KEYWORDS`, `META_TITLE`, `NAME`, `AVAILABLE_NOW`, `AVAILABLE_LATER` FROM `djland_product_lang` WHERE `ID_PRODUCT` = :p0 AND `ID_LANG` = :p1';
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
			$obj = new Oops_Model_ProductLang();
			$obj->hydrate($row);
			Oops_Model_ProductLangPeer::addInstanceToPool($obj, serialize(array((string) $row[0], (string) $row[1])));
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
	 * @return    Oops_Model_ProductLang|array|mixed the result, formatted by the current formatter
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
	 * @return    Oops_Model_ProductLangQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		$this->addUsingAlias(Oops_Model_ProductLangPeer::ID_PRODUCT, $key[0], Criteria::EQUAL);
		$this->addUsingAlias(Oops_Model_ProductLangPeer::ID_LANG, $key[1], Criteria::EQUAL);

		return $this;
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    Oops_Model_ProductLangQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		if (empty($keys)) {
			return $this->add(null, '1<>1', Criteria::CUSTOM);
		}
		foreach ($keys as $key) {
			$cton0 = $this->getNewCriterion(Oops_Model_ProductLangPeer::ID_PRODUCT, $key[0], Criteria::EQUAL);
			$cton1 = $this->getNewCriterion(Oops_Model_ProductLangPeer::ID_LANG, $key[1], Criteria::EQUAL);
			$cton0->addAnd($cton1);
			$this->addOr($cton0);
		}

		return $this;
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
	 * @see       filterByProduct()
	 *
	 * @param     mixed $idProduct The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_ProductLangQuery The current query, for fluid interface
	 */
	public function filterByIdProduct($idProduct = null, $comparison = null)
	{
		if (is_array($idProduct) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(Oops_Model_ProductLangPeer::ID_PRODUCT, $idProduct, $comparison);
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
	 * @return    Oops_Model_ProductLangQuery The current query, for fluid interface
	 */
	public function filterByIdLang($idLang = null, $comparison = null)
	{
		if (is_array($idLang) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(Oops_Model_ProductLangPeer::ID_LANG, $idLang, $comparison);
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
	 * @return    Oops_Model_ProductLangQuery The current query, for fluid interface
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
		return $this->addUsingAlias(Oops_Model_ProductLangPeer::DESCRIPTION, $description, $comparison);
	}

	/**
	 * Filter the query on the description_short column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByDescriptionShort('fooValue');   // WHERE description_short = 'fooValue'
	 * $query->filterByDescriptionShort('%fooValue%'); // WHERE description_short LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $descriptionShort The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_ProductLangQuery The current query, for fluid interface
	 */
	public function filterByDescriptionShort($descriptionShort = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($descriptionShort)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $descriptionShort)) {
				$descriptionShort = str_replace('*', '%', $descriptionShort);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(Oops_Model_ProductLangPeer::DESCRIPTION_SHORT, $descriptionShort, $comparison);
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
	 * @return    Oops_Model_ProductLangQuery The current query, for fluid interface
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
		return $this->addUsingAlias(Oops_Model_ProductLangPeer::LINK_REWRITE, $linkRewrite, $comparison);
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
	 * @return    Oops_Model_ProductLangQuery The current query, for fluid interface
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
		return $this->addUsingAlias(Oops_Model_ProductLangPeer::META_DESCRIPTION, $metaDescription, $comparison);
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
	 * @return    Oops_Model_ProductLangQuery The current query, for fluid interface
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
		return $this->addUsingAlias(Oops_Model_ProductLangPeer::META_KEYWORDS, $metaKeywords, $comparison);
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
	 * @return    Oops_Model_ProductLangQuery The current query, for fluid interface
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
		return $this->addUsingAlias(Oops_Model_ProductLangPeer::META_TITLE, $metaTitle, $comparison);
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
	 * @return    Oops_Model_ProductLangQuery The current query, for fluid interface
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
		return $this->addUsingAlias(Oops_Model_ProductLangPeer::NAME, $name, $comparison);
	}

	/**
	 * Filter the query on the available_now column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByAvailableNow('fooValue');   // WHERE available_now = 'fooValue'
	 * $query->filterByAvailableNow('%fooValue%'); // WHERE available_now LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $availableNow The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_ProductLangQuery The current query, for fluid interface
	 */
	public function filterByAvailableNow($availableNow = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($availableNow)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $availableNow)) {
				$availableNow = str_replace('*', '%', $availableNow);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(Oops_Model_ProductLangPeer::AVAILABLE_NOW, $availableNow, $comparison);
	}

	/**
	 * Filter the query on the available_later column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByAvailableLater('fooValue');   // WHERE available_later = 'fooValue'
	 * $query->filterByAvailableLater('%fooValue%'); // WHERE available_later LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $availableLater The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_ProductLangQuery The current query, for fluid interface
	 */
	public function filterByAvailableLater($availableLater = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($availableLater)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $availableLater)) {
				$availableLater = str_replace('*', '%', $availableLater);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(Oops_Model_ProductLangPeer::AVAILABLE_LATER, $availableLater, $comparison);
	}

	/**
	 * Filter the query by a related Oops_Model_Product object
	 *
	 * @param     Oops_Model_Product|PropelCollection $product The related object(s) to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_ProductLangQuery The current query, for fluid interface
	 */
	public function filterByProduct($product, $comparison = null)
	{
		if ($product instanceof Oops_Model_Product) {
			return $this
				->addUsingAlias(Oops_Model_ProductLangPeer::ID_PRODUCT, $product->getIdProduct(), $comparison);
		} elseif ($product instanceof PropelCollection) {
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
			return $this
				->addUsingAlias(Oops_Model_ProductLangPeer::ID_PRODUCT, $product->toKeyValue('PrimaryKey', 'IdProduct'), $comparison);
		} else {
			throw new PropelException('filterByProduct() only accepts arguments of type Oops_Model_Product or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the Product relation
	 *
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    Oops_Model_ProductLangQuery The current query, for fluid interface
	 */
	public function joinProduct($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('Product');

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
			$this->addJoinObject($join, 'Product');
		}

		return $this;
	}

	/**
	 * Use the Product relation Product object
	 *
	 * @see       useQuery()
	 *
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    Oops_Model_ProductQuery A secondary query class using the current class as primary query
	 */
	public function useProductQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinProduct($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'Product', 'Oops_Model_ProductQuery');
	}

	/**
	 * Filter the query by a related Oops_Model_Lang object
	 *
	 * @param     Oops_Model_Lang|PropelCollection $lang The related object(s) to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_ProductLangQuery The current query, for fluid interface
	 */
	public function filterByLang($lang, $comparison = null)
	{
		if ($lang instanceof Oops_Model_Lang) {
			return $this
				->addUsingAlias(Oops_Model_ProductLangPeer::ID_LANG, $lang->getIdLang(), $comparison);
		} elseif ($lang instanceof PropelCollection) {
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
			return $this
				->addUsingAlias(Oops_Model_ProductLangPeer::ID_LANG, $lang->toKeyValue('PrimaryKey', 'IdLang'), $comparison);
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
	 * @return    Oops_Model_ProductLangQuery The current query, for fluid interface
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
	 * @param     Oops_Model_ProductLang $productLang Object to remove from the list of results
	 *
	 * @return    Oops_Model_ProductLangQuery The current query, for fluid interface
	 */
	public function prune($productLang = null)
	{
		if ($productLang) {
			$this->addCond('pruneCond0', $this->getAliasedColName(Oops_Model_ProductLangPeer::ID_PRODUCT), $productLang->getIdProduct(), Criteria::NOT_EQUAL);
			$this->addCond('pruneCond1', $this->getAliasedColName(Oops_Model_ProductLangPeer::ID_LANG), $productLang->getIdLang(), Criteria::NOT_EQUAL);
			$this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
		}

		return $this;
	}

} // Oops_Model_Base_ProductLangQuery