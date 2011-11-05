<?php


/**
 * Base class that represents a query for the 'djland_import_match' table.
 *
 * 
 *
 * @method     Oops_Model_ImportMatchQuery orderByIdImportMatch($order = Criteria::ASC) Order by the id_import_match column
 * @method     Oops_Model_ImportMatchQuery orderByName($order = Criteria::ASC) Order by the name column
 * @method     Oops_Model_ImportMatchQuery orderByMatch($order = Criteria::ASC) Order by the match column
 * @method     Oops_Model_ImportMatchQuery orderBySkip($order = Criteria::ASC) Order by the skip column
 *
 * @method     Oops_Model_ImportMatchQuery groupByIdImportMatch() Group by the id_import_match column
 * @method     Oops_Model_ImportMatchQuery groupByName() Group by the name column
 * @method     Oops_Model_ImportMatchQuery groupByMatch() Group by the match column
 * @method     Oops_Model_ImportMatchQuery groupBySkip() Group by the skip column
 *
 * @method     Oops_Model_ImportMatchQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     Oops_Model_ImportMatchQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     Oops_Model_ImportMatchQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     Oops_Model_ImportMatch findOne(PropelPDO $con = null) Return the first Oops_Model_ImportMatch matching the query
 * @method     Oops_Model_ImportMatch findOneOrCreate(PropelPDO $con = null) Return the first Oops_Model_ImportMatch matching the query, or a new Oops_Model_ImportMatch object populated from the query conditions when no match is found
 *
 * @method     Oops_Model_ImportMatch findOneByIdImportMatch(int $id_import_match) Return the first Oops_Model_ImportMatch filtered by the id_import_match column
 * @method     Oops_Model_ImportMatch findOneByName(string $name) Return the first Oops_Model_ImportMatch filtered by the name column
 * @method     Oops_Model_ImportMatch findOneByMatch(string $match) Return the first Oops_Model_ImportMatch filtered by the match column
 * @method     Oops_Model_ImportMatch findOneBySkip(int $skip) Return the first Oops_Model_ImportMatch filtered by the skip column
 *
 * @method     array findByIdImportMatch(int $id_import_match) Return Oops_Model_ImportMatch objects filtered by the id_import_match column
 * @method     array findByName(string $name) Return Oops_Model_ImportMatch objects filtered by the name column
 * @method     array findByMatch(string $match) Return Oops_Model_ImportMatch objects filtered by the match column
 * @method     array findBySkip(int $skip) Return Oops_Model_ImportMatch objects filtered by the skip column
 *
 * @package    propel.generator.prestashop.om
 */
abstract class Oops_Model_Base_ImportMatchQuery extends ModelCriteria
{
	
	/**
	 * Initializes internal state of Oops_Model_Base_ImportMatchQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'prestashop', $modelName = 'Oops_Model_ImportMatch', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new Oops_Model_ImportMatchQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    Oops_Model_ImportMatchQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof Oops_Model_ImportMatchQuery) {
			return $criteria;
		}
		$query = new Oops_Model_ImportMatchQuery();
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
	 * @return    Oops_Model_ImportMatch|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ($key === null) {
			return null;
		}
		if ((null !== ($obj = Oops_Model_ImportMatchPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
			// the object is alredy in the instance pool
			return $obj;
		}
		if ($con === null) {
			$con = Propel::getConnection(Oops_Model_ImportMatchPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
	 * @return    Oops_Model_ImportMatch A model object, or null if the key is not found
	 */
	protected function findPkSimple($key, $con)
	{
		$sql = 'SELECT `ID_IMPORT_MATCH`, `NAME`, `MATCH`, `SKIP` FROM `djland_import_match` WHERE `ID_IMPORT_MATCH` = :p0';
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
			$obj = new Oops_Model_ImportMatch();
			$obj->hydrate($row);
			Oops_Model_ImportMatchPeer::addInstanceToPool($obj, (string) $row[0]);
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
	 * @return    Oops_Model_ImportMatch|array|mixed the result, formatted by the current formatter
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
	 * @return    Oops_Model_ImportMatchQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(Oops_Model_ImportMatchPeer::ID_IMPORT_MATCH, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    Oops_Model_ImportMatchQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(Oops_Model_ImportMatchPeer::ID_IMPORT_MATCH, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id_import_match column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByIdImportMatch(1234); // WHERE id_import_match = 1234
	 * $query->filterByIdImportMatch(array(12, 34)); // WHERE id_import_match IN (12, 34)
	 * $query->filterByIdImportMatch(array('min' => 12)); // WHERE id_import_match > 12
	 * </code>
	 *
	 * @param     mixed $idImportMatch The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_ImportMatchQuery The current query, for fluid interface
	 */
	public function filterByIdImportMatch($idImportMatch = null, $comparison = null)
	{
		if (is_array($idImportMatch) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(Oops_Model_ImportMatchPeer::ID_IMPORT_MATCH, $idImportMatch, $comparison);
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
	 * @return    Oops_Model_ImportMatchQuery The current query, for fluid interface
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
		return $this->addUsingAlias(Oops_Model_ImportMatchPeer::NAME, $name, $comparison);
	}

	/**
	 * Filter the query on the match column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByMatch('fooValue');   // WHERE match = 'fooValue'
	 * $query->filterByMatch('%fooValue%'); // WHERE match LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $match The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_ImportMatchQuery The current query, for fluid interface
	 */
	public function filterByMatch($match = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($match)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $match)) {
				$match = str_replace('*', '%', $match);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(Oops_Model_ImportMatchPeer::MATCH, $match, $comparison);
	}

	/**
	 * Filter the query on the skip column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterBySkip(1234); // WHERE skip = 1234
	 * $query->filterBySkip(array(12, 34)); // WHERE skip IN (12, 34)
	 * $query->filterBySkip(array('min' => 12)); // WHERE skip > 12
	 * </code>
	 *
	 * @param     mixed $skip The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_ImportMatchQuery The current query, for fluid interface
	 */
	public function filterBySkip($skip = null, $comparison = null)
	{
		if (is_array($skip)) {
			$useMinMax = false;
			if (isset($skip['min'])) {
				$this->addUsingAlias(Oops_Model_ImportMatchPeer::SKIP, $skip['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($skip['max'])) {
				$this->addUsingAlias(Oops_Model_ImportMatchPeer::SKIP, $skip['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_ImportMatchPeer::SKIP, $skip, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     Oops_Model_ImportMatch $importMatch Object to remove from the list of results
	 *
	 * @return    Oops_Model_ImportMatchQuery The current query, for fluid interface
	 */
	public function prune($importMatch = null)
	{
		if ($importMatch) {
			$this->addUsingAlias(Oops_Model_ImportMatchPeer::ID_IMPORT_MATCH, $importMatch->getIdImportMatch(), Criteria::NOT_EQUAL);
		}

		return $this;
	}

} // Oops_Model_Base_ImportMatchQuery