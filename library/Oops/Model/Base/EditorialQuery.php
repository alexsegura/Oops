<?php


/**
 * Base class that represents a query for the 'editorial' table.
 *
 * 
 *
 * @method     Oops_Model_EditorialQuery orderByIdEditorial($order = Criteria::ASC) Order by the id_editorial column
 * @method     Oops_Model_EditorialQuery orderByBodyHomeLogoLink($order = Criteria::ASC) Order by the body_home_logo_link column
 *
 * @method     Oops_Model_EditorialQuery groupByIdEditorial() Group by the id_editorial column
 * @method     Oops_Model_EditorialQuery groupByBodyHomeLogoLink() Group by the body_home_logo_link column
 *
 * @method     Oops_Model_EditorialQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     Oops_Model_EditorialQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     Oops_Model_EditorialQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     Oops_Model_Editorial findOne(PropelPDO $con = null) Return the first Oops_Model_Editorial matching the query
 * @method     Oops_Model_Editorial findOneOrCreate(PropelPDO $con = null) Return the first Oops_Model_Editorial matching the query, or a new Oops_Model_Editorial object populated from the query conditions when no match is found
 *
 * @method     Oops_Model_Editorial findOneByIdEditorial(int $id_editorial) Return the first Oops_Model_Editorial filtered by the id_editorial column
 * @method     Oops_Model_Editorial findOneByBodyHomeLogoLink(string $body_home_logo_link) Return the first Oops_Model_Editorial filtered by the body_home_logo_link column
 *
 * @method     array findByIdEditorial(int $id_editorial) Return Oops_Model_Editorial objects filtered by the id_editorial column
 * @method     array findByBodyHomeLogoLink(string $body_home_logo_link) Return Oops_Model_Editorial objects filtered by the body_home_logo_link column
 *
 * @package    propel.generator.prestashop.om
 */
abstract class Oops_Model_Base_EditorialQuery extends ModelCriteria
{
	
	/**
	 * Initializes internal state of Oops_Model_Base_EditorialQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'prestashop', $modelName = 'Oops_Model_Editorial', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new Oops_Model_EditorialQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    Oops_Model_EditorialQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof Oops_Model_EditorialQuery) {
			return $criteria;
		}
		$query = new Oops_Model_EditorialQuery();
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
	 * @return    Oops_Model_Editorial|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ($key === null) {
			return null;
		}
		if ((null !== ($obj = Oops_Model_EditorialPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
			// the object is alredy in the instance pool
			return $obj;
		}
		if ($con === null) {
			$con = Propel::getConnection(Oops_Model_EditorialPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
	 * @return    Oops_Model_Editorial A model object, or null if the key is not found
	 */
	protected function findPkSimple($key, $con)
	{
		$sql = 'SELECT `ID_EDITORIAL`, `BODY_HOME_LOGO_LINK` FROM `' . _DB_PREFIX_ . 'editorial` WHERE `ID_EDITORIAL` = :p0';
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
			$obj = new Oops_Model_Editorial();
			$obj->hydrate($row);
			Oops_Model_EditorialPeer::addInstanceToPool($obj, (string) $row[0]);
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
	 * @return    Oops_Model_Editorial|array|mixed the result, formatted by the current formatter
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
	 * @return    Oops_Model_EditorialQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(Oops_Model_EditorialPeer::ID_EDITORIAL, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    Oops_Model_EditorialQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(Oops_Model_EditorialPeer::ID_EDITORIAL, $keys, Criteria::IN);
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
	 * @return    Oops_Model_EditorialQuery The current query, for fluid interface
	 */
	public function filterByIdEditorial($idEditorial = null, $comparison = null)
	{
		if (is_array($idEditorial) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(Oops_Model_EditorialPeer::ID_EDITORIAL, $idEditorial, $comparison);
	}

	/**
	 * Filter the query on the body_home_logo_link column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByBodyHomeLogoLink('fooValue');   // WHERE body_home_logo_link = 'fooValue'
	 * $query->filterByBodyHomeLogoLink('%fooValue%'); // WHERE body_home_logo_link LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $bodyHomeLogoLink The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_EditorialQuery The current query, for fluid interface
	 */
	public function filterByBodyHomeLogoLink($bodyHomeLogoLink = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($bodyHomeLogoLink)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $bodyHomeLogoLink)) {
				$bodyHomeLogoLink = str_replace('*', '%', $bodyHomeLogoLink);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(Oops_Model_EditorialPeer::BODY_HOME_LOGO_LINK, $bodyHomeLogoLink, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     Oops_Model_Editorial $editorial Object to remove from the list of results
	 *
	 * @return    Oops_Model_EditorialQuery The current query, for fluid interface
	 */
	public function prune($editorial = null)
	{
		if ($editorial) {
			$this->addUsingAlias(Oops_Model_EditorialPeer::ID_EDITORIAL, $editorial->getIdEditorial(), Criteria::NOT_EQUAL);
		}

		return $this;
	}

} // Oops_Model_Base_EditorialQuery