<?php


/**
 * Base class that represents a query for the 'djland_editorial_lang' table.
 *
 * 
 *
 * @method     Oops_Model_EditorialLangQuery orderByIdEditorial($order = Criteria::ASC) Order by the id_editorial column
 * @method     Oops_Model_EditorialLangQuery orderByIdLang($order = Criteria::ASC) Order by the id_lang column
 * @method     Oops_Model_EditorialLangQuery orderByBodyTitle($order = Criteria::ASC) Order by the body_title column
 * @method     Oops_Model_EditorialLangQuery orderByBodySubheading($order = Criteria::ASC) Order by the body_subheading column
 * @method     Oops_Model_EditorialLangQuery orderByBodyParagraph($order = Criteria::ASC) Order by the body_paragraph column
 * @method     Oops_Model_EditorialLangQuery orderByBodyLogoSubheading($order = Criteria::ASC) Order by the body_logo_subheading column
 *
 * @method     Oops_Model_EditorialLangQuery groupByIdEditorial() Group by the id_editorial column
 * @method     Oops_Model_EditorialLangQuery groupByIdLang() Group by the id_lang column
 * @method     Oops_Model_EditorialLangQuery groupByBodyTitle() Group by the body_title column
 * @method     Oops_Model_EditorialLangQuery groupByBodySubheading() Group by the body_subheading column
 * @method     Oops_Model_EditorialLangQuery groupByBodyParagraph() Group by the body_paragraph column
 * @method     Oops_Model_EditorialLangQuery groupByBodyLogoSubheading() Group by the body_logo_subheading column
 *
 * @method     Oops_Model_EditorialLangQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     Oops_Model_EditorialLangQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     Oops_Model_EditorialLangQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     Oops_Model_EditorialLang findOne(PropelPDO $con = null) Return the first Oops_Model_EditorialLang matching the query
 * @method     Oops_Model_EditorialLang findOneOrCreate(PropelPDO $con = null) Return the first Oops_Model_EditorialLang matching the query, or a new Oops_Model_EditorialLang object populated from the query conditions when no match is found
 *
 * @method     Oops_Model_EditorialLang findOneByIdEditorial(int $id_editorial) Return the first Oops_Model_EditorialLang filtered by the id_editorial column
 * @method     Oops_Model_EditorialLang findOneByIdLang(int $id_lang) Return the first Oops_Model_EditorialLang filtered by the id_lang column
 * @method     Oops_Model_EditorialLang findOneByBodyTitle(string $body_title) Return the first Oops_Model_EditorialLang filtered by the body_title column
 * @method     Oops_Model_EditorialLang findOneByBodySubheading(string $body_subheading) Return the first Oops_Model_EditorialLang filtered by the body_subheading column
 * @method     Oops_Model_EditorialLang findOneByBodyParagraph(string $body_paragraph) Return the first Oops_Model_EditorialLang filtered by the body_paragraph column
 * @method     Oops_Model_EditorialLang findOneByBodyLogoSubheading(string $body_logo_subheading) Return the first Oops_Model_EditorialLang filtered by the body_logo_subheading column
 *
 * @method     array findByIdEditorial(int $id_editorial) Return Oops_Model_EditorialLang objects filtered by the id_editorial column
 * @method     array findByIdLang(int $id_lang) Return Oops_Model_EditorialLang objects filtered by the id_lang column
 * @method     array findByBodyTitle(string $body_title) Return Oops_Model_EditorialLang objects filtered by the body_title column
 * @method     array findByBodySubheading(string $body_subheading) Return Oops_Model_EditorialLang objects filtered by the body_subheading column
 * @method     array findByBodyParagraph(string $body_paragraph) Return Oops_Model_EditorialLang objects filtered by the body_paragraph column
 * @method     array findByBodyLogoSubheading(string $body_logo_subheading) Return Oops_Model_EditorialLang objects filtered by the body_logo_subheading column
 *
 * @package    propel.generator.prestashop.om
 */
abstract class Oops_Model_Base_EditorialLangQuery extends ModelCriteria
{
	
	/**
	 * Initializes internal state of Oops_Model_Base_EditorialLangQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'prestashop', $modelName = 'Oops_Model_EditorialLang', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new Oops_Model_EditorialLangQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    Oops_Model_EditorialLangQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof Oops_Model_EditorialLangQuery) {
			return $criteria;
		}
		$query = new Oops_Model_EditorialLangQuery();
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
	 * @param     array[$id_editorial, $id_lang] $key Primary key to use for the query
	 * @param     PropelPDO $con an optional connection object
	 *
	 * @return    Oops_Model_EditorialLang|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ($key === null) {
			return null;
		}
		if ((null !== ($obj = Oops_Model_EditorialLangPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
			// the object is alredy in the instance pool
			return $obj;
		}
		if ($con === null) {
			$con = Propel::getConnection(Oops_Model_EditorialLangPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
	 * @return    Oops_Model_EditorialLang A model object, or null if the key is not found
	 */
	protected function findPkSimple($key, $con)
	{
		$sql = 'SELECT `ID_EDITORIAL`, `ID_LANG`, `BODY_TITLE`, `BODY_SUBHEADING`, `BODY_PARAGRAPH`, `BODY_LOGO_SUBHEADING` FROM `djland_editorial_lang` WHERE `ID_EDITORIAL` = :p0 AND `ID_LANG` = :p1';
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
			$obj = new Oops_Model_EditorialLang();
			$obj->hydrate($row);
			Oops_Model_EditorialLangPeer::addInstanceToPool($obj, serialize(array((string) $row[0], (string) $row[1])));
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
	 * @return    Oops_Model_EditorialLang|array|mixed the result, formatted by the current formatter
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
	 * @return    Oops_Model_EditorialLangQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		$this->addUsingAlias(Oops_Model_EditorialLangPeer::ID_EDITORIAL, $key[0], Criteria::EQUAL);
		$this->addUsingAlias(Oops_Model_EditorialLangPeer::ID_LANG, $key[1], Criteria::EQUAL);

		return $this;
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    Oops_Model_EditorialLangQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		if (empty($keys)) {
			return $this->add(null, '1<>1', Criteria::CUSTOM);
		}
		foreach ($keys as $key) {
			$cton0 = $this->getNewCriterion(Oops_Model_EditorialLangPeer::ID_EDITORIAL, $key[0], Criteria::EQUAL);
			$cton1 = $this->getNewCriterion(Oops_Model_EditorialLangPeer::ID_LANG, $key[1], Criteria::EQUAL);
			$cton0->addAnd($cton1);
			$this->addOr($cton0);
		}

		return $this;
	}

	/**
	 * Filter the query on the id_editorial column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByIdEditorial(1234); // WHERE id_editorial = 1234
	 * $query->filterByIdEditorial(array(12, 34)); // WHERE id_editorial IN (12, 34)
	 * $query->filterByIdEditorial(array('min' => 12)); // WHERE id_editorial > 12
	 * </code>
	 *
	 * @param     mixed $idEditorial The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_EditorialLangQuery The current query, for fluid interface
	 */
	public function filterByIdEditorial($idEditorial = null, $comparison = null)
	{
		if (is_array($idEditorial) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(Oops_Model_EditorialLangPeer::ID_EDITORIAL, $idEditorial, $comparison);
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
	 * @return    Oops_Model_EditorialLangQuery The current query, for fluid interface
	 */
	public function filterByIdLang($idLang = null, $comparison = null)
	{
		if (is_array($idLang) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(Oops_Model_EditorialLangPeer::ID_LANG, $idLang, $comparison);
	}

	/**
	 * Filter the query on the body_title column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByBodyTitle('fooValue');   // WHERE body_title = 'fooValue'
	 * $query->filterByBodyTitle('%fooValue%'); // WHERE body_title LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $bodyTitle The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_EditorialLangQuery The current query, for fluid interface
	 */
	public function filterByBodyTitle($bodyTitle = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($bodyTitle)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $bodyTitle)) {
				$bodyTitle = str_replace('*', '%', $bodyTitle);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(Oops_Model_EditorialLangPeer::BODY_TITLE, $bodyTitle, $comparison);
	}

	/**
	 * Filter the query on the body_subheading column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByBodySubheading('fooValue');   // WHERE body_subheading = 'fooValue'
	 * $query->filterByBodySubheading('%fooValue%'); // WHERE body_subheading LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $bodySubheading The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_EditorialLangQuery The current query, for fluid interface
	 */
	public function filterByBodySubheading($bodySubheading = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($bodySubheading)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $bodySubheading)) {
				$bodySubheading = str_replace('*', '%', $bodySubheading);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(Oops_Model_EditorialLangPeer::BODY_SUBHEADING, $bodySubheading, $comparison);
	}

	/**
	 * Filter the query on the body_paragraph column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByBodyParagraph('fooValue');   // WHERE body_paragraph = 'fooValue'
	 * $query->filterByBodyParagraph('%fooValue%'); // WHERE body_paragraph LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $bodyParagraph The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_EditorialLangQuery The current query, for fluid interface
	 */
	public function filterByBodyParagraph($bodyParagraph = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($bodyParagraph)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $bodyParagraph)) {
				$bodyParagraph = str_replace('*', '%', $bodyParagraph);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(Oops_Model_EditorialLangPeer::BODY_PARAGRAPH, $bodyParagraph, $comparison);
	}

	/**
	 * Filter the query on the body_logo_subheading column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByBodyLogoSubheading('fooValue');   // WHERE body_logo_subheading = 'fooValue'
	 * $query->filterByBodyLogoSubheading('%fooValue%'); // WHERE body_logo_subheading LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $bodyLogoSubheading The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_EditorialLangQuery The current query, for fluid interface
	 */
	public function filterByBodyLogoSubheading($bodyLogoSubheading = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($bodyLogoSubheading)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $bodyLogoSubheading)) {
				$bodyLogoSubheading = str_replace('*', '%', $bodyLogoSubheading);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(Oops_Model_EditorialLangPeer::BODY_LOGO_SUBHEADING, $bodyLogoSubheading, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     Oops_Model_EditorialLang $editorialLang Object to remove from the list of results
	 *
	 * @return    Oops_Model_EditorialLangQuery The current query, for fluid interface
	 */
	public function prune($editorialLang = null)
	{
		if ($editorialLang) {
			$this->addCond('pruneCond0', $this->getAliasedColName(Oops_Model_EditorialLangPeer::ID_EDITORIAL), $editorialLang->getIdEditorial(), Criteria::NOT_EQUAL);
			$this->addCond('pruneCond1', $this->getAliasedColName(Oops_Model_EditorialLangPeer::ID_LANG), $editorialLang->getIdLang(), Criteria::NOT_EQUAL);
			$this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
		}

		return $this;
	}

} // Oops_Model_Base_EditorialLangQuery