<?php


/**
 * Base class that represents a query for the 'meta' table.
 *
 * 
 *
 * @method     Oops_Db_MetaQuery orderByIdMeta($order = Criteria::ASC) Order by the id_meta column
 * @method     Oops_Db_MetaQuery orderByPage($order = Criteria::ASC) Order by the page column
 *
 * @method     Oops_Db_MetaQuery groupByIdMeta() Group by the id_meta column
 * @method     Oops_Db_MetaQuery groupByPage() Group by the page column
 *
 * @method     Oops_Db_MetaQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     Oops_Db_MetaQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     Oops_Db_MetaQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     Oops_Db_Meta findOne(PropelPDO $con = null) Return the first Oops_Db_Meta matching the query
 * @method     Oops_Db_Meta findOneOrCreate(PropelPDO $con = null) Return the first Oops_Db_Meta matching the query, or a new Oops_Db_Meta object populated from the query conditions when no match is found
 *
 * @method     Oops_Db_Meta findOneByIdMeta(int $id_meta) Return the first Oops_Db_Meta filtered by the id_meta column
 * @method     Oops_Db_Meta findOneByPage(string $page) Return the first Oops_Db_Meta filtered by the page column
 *
 * @method     array findByIdMeta(int $id_meta) Return Oops_Db_Meta objects filtered by the id_meta column
 * @method     array findByPage(string $page) Return Oops_Db_Meta objects filtered by the page column
 *
 * @package    propel.generator.prestashop.om
 */
abstract class Oops_Db_Propel_MetaQuery extends ModelCriteria
{
	
	/**
	 * Initializes internal state of Oops_Db_Propel_MetaQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'prestashop', $modelName = 'Oops_Db_Meta', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new Oops_Db_MetaQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    Oops_Db_MetaQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof Oops_Db_MetaQuery) {
			return $criteria;
		}
		$query = new Oops_Db_MetaQuery();
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
	 * @return    Oops_Db_Meta|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ($key === null) {
			return null;
		}
		if ((null !== ($obj = Oops_Db_MetaPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
			// the object is alredy in the instance pool
			return $obj;
		}
		if ($con === null) {
			$con = Propel::getConnection(Oops_Db_MetaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
	 * @return    Oops_Db_Meta A model object, or null if the key is not found
	 */
	protected function findPkSimple($key, $con)
	{
		$sql = 'SELECT `ID_META`, `PAGE` FROM `' . _DB_PREFIX_ . 'meta` WHERE `ID_META` = :p0';
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
			$obj = new Oops_Db_Meta();
			$obj->hydrate($row);
			Oops_Db_MetaPeer::addInstanceToPool($obj, (string) $row[0]);
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
	 * @return    Oops_Db_Meta|array|mixed the result, formatted by the current formatter
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
	 * @return    Oops_Db_MetaQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(Oops_Db_MetaPeer::ID_META, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    Oops_Db_MetaQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(Oops_Db_MetaPeer::ID_META, $keys, Criteria::IN);
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
	 * @return    Oops_Db_MetaQuery The current query, for fluid interface
	 */
	public function filterByIdMeta($idMeta = null, $comparison = null)
	{
		if (is_array($idMeta) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(Oops_Db_MetaPeer::ID_META, $idMeta, $comparison);
	}

	/**
	 * Filter the query on the page column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByPage('fooValue');   // WHERE page = 'fooValue'
	 * $query->filterByPage('%fooValue%'); // WHERE page LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $page The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Db_MetaQuery The current query, for fluid interface
	 */
	public function filterByPage($page = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($page)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $page)) {
				$page = str_replace('*', '%', $page);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(Oops_Db_MetaPeer::PAGE, $page, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     Oops_Db_Meta $meta Object to remove from the list of results
	 *
	 * @return    Oops_Db_MetaQuery The current query, for fluid interface
	 */
	public function prune($meta = null)
	{
		if ($meta) {
			$this->addUsingAlias(Oops_Db_MetaPeer::ID_META, $meta->getIdMeta(), Criteria::NOT_EQUAL);
		}

		return $this;
	}

} // Oops_Db_Propel_MetaQuery