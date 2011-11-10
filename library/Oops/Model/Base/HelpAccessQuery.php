<?php


/**
 * Base class that represents a query for the 'help_access' table.
 *
 * 
 *
 * @method     Oops_Model_HelpAccessQuery orderByIdHelpAccess($order = Criteria::ASC) Order by the id_help_access column
 * @method     Oops_Model_HelpAccessQuery orderByLabel($order = Criteria::ASC) Order by the label column
 * @method     Oops_Model_HelpAccessQuery orderByVersion($order = Criteria::ASC) Order by the version column
 *
 * @method     Oops_Model_HelpAccessQuery groupByIdHelpAccess() Group by the id_help_access column
 * @method     Oops_Model_HelpAccessQuery groupByLabel() Group by the label column
 * @method     Oops_Model_HelpAccessQuery groupByVersion() Group by the version column
 *
 * @method     Oops_Model_HelpAccessQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     Oops_Model_HelpAccessQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     Oops_Model_HelpAccessQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     Oops_Model_HelpAccess findOne(PropelPDO $con = null) Return the first Oops_Model_HelpAccess matching the query
 * @method     Oops_Model_HelpAccess findOneOrCreate(PropelPDO $con = null) Return the first Oops_Model_HelpAccess matching the query, or a new Oops_Model_HelpAccess object populated from the query conditions when no match is found
 *
 * @method     Oops_Model_HelpAccess findOneByIdHelpAccess(int $id_help_access) Return the first Oops_Model_HelpAccess filtered by the id_help_access column
 * @method     Oops_Model_HelpAccess findOneByLabel(string $label) Return the first Oops_Model_HelpAccess filtered by the label column
 * @method     Oops_Model_HelpAccess findOneByVersion(string $version) Return the first Oops_Model_HelpAccess filtered by the version column
 *
 * @method     array findByIdHelpAccess(int $id_help_access) Return Oops_Model_HelpAccess objects filtered by the id_help_access column
 * @method     array findByLabel(string $label) Return Oops_Model_HelpAccess objects filtered by the label column
 * @method     array findByVersion(string $version) Return Oops_Model_HelpAccess objects filtered by the version column
 *
 * @package    propel.generator.prestashop.om
 */
abstract class Oops_Model_Base_HelpAccessQuery extends ModelCriteria
{
	
	/**
	 * Initializes internal state of Oops_Model_Base_HelpAccessQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'prestashop', $modelName = 'Oops_Model_HelpAccess', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new Oops_Model_HelpAccessQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    Oops_Model_HelpAccessQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof Oops_Model_HelpAccessQuery) {
			return $criteria;
		}
		$query = new Oops_Model_HelpAccessQuery();
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
	 * @return    Oops_Model_HelpAccess|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ($key === null) {
			return null;
		}
		if ((null !== ($obj = Oops_Model_HelpAccessPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
			// the object is alredy in the instance pool
			return $obj;
		}
		if ($con === null) {
			$con = Propel::getConnection(Oops_Model_HelpAccessPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
	 * @return    Oops_Model_HelpAccess A model object, or null if the key is not found
	 */
	protected function findPkSimple($key, $con)
	{
		$sql = 'SELECT `ID_HELP_ACCESS`, `LABEL`, `VERSION` FROM `' . _DB_PREFIX_ . 'help_access` WHERE `ID_HELP_ACCESS` = :p0';
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
			$obj = new Oops_Model_HelpAccess();
			$obj->hydrate($row);
			Oops_Model_HelpAccessPeer::addInstanceToPool($obj, (string) $row[0]);
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
	 * @return    Oops_Model_HelpAccess|array|mixed the result, formatted by the current formatter
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
	 * @return    Oops_Model_HelpAccessQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(Oops_Model_HelpAccessPeer::ID_HELP_ACCESS, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    Oops_Model_HelpAccessQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(Oops_Model_HelpAccessPeer::ID_HELP_ACCESS, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id_help_access column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByIdHelpAccess(1234); // WHERE id_help_access = 1234
	 * $query->filterByIdHelpAccess(array(12, 34)); // WHERE id_help_access IN (12, 34)
	 * $query->filterByIdHelpAccess(array('min' => 12)); // WHERE id_help_access > 12
	 * </code>
	 *
	 * @param     mixed $idHelpAccess The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_HelpAccessQuery The current query, for fluid interface
	 */
	public function filterByIdHelpAccess($idHelpAccess = null, $comparison = null)
	{
		if (is_array($idHelpAccess) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(Oops_Model_HelpAccessPeer::ID_HELP_ACCESS, $idHelpAccess, $comparison);
	}

	/**
	 * Filter the query on the label column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByLabel('fooValue');   // WHERE label = 'fooValue'
	 * $query->filterByLabel('%fooValue%'); // WHERE label LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $label The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_HelpAccessQuery The current query, for fluid interface
	 */
	public function filterByLabel($label = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($label)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $label)) {
				$label = str_replace('*', '%', $label);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(Oops_Model_HelpAccessPeer::LABEL, $label, $comparison);
	}

	/**
	 * Filter the query on the version column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByVersion('fooValue');   // WHERE version = 'fooValue'
	 * $query->filterByVersion('%fooValue%'); // WHERE version LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $version The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_HelpAccessQuery The current query, for fluid interface
	 */
	public function filterByVersion($version = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($version)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $version)) {
				$version = str_replace('*', '%', $version);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(Oops_Model_HelpAccessPeer::VERSION, $version, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     Oops_Model_HelpAccess $helpAccess Object to remove from the list of results
	 *
	 * @return    Oops_Model_HelpAccessQuery The current query, for fluid interface
	 */
	public function prune($helpAccess = null)
	{
		if ($helpAccess) {
			$this->addUsingAlias(Oops_Model_HelpAccessPeer::ID_HELP_ACCESS, $helpAccess->getIdHelpAccess(), Criteria::NOT_EQUAL);
		}

		return $this;
	}

} // Oops_Model_Base_HelpAccessQuery