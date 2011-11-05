<?php


/**
 * Base class that represents a query for the 'djland_hook' table.
 *
 * 
 *
 * @method     Oops_Model_HookQuery orderByIdHook($order = Criteria::ASC) Order by the id_hook column
 * @method     Oops_Model_HookQuery orderByName($order = Criteria::ASC) Order by the name column
 * @method     Oops_Model_HookQuery orderByTitle($order = Criteria::ASC) Order by the title column
 * @method     Oops_Model_HookQuery orderByDescription($order = Criteria::ASC) Order by the description column
 * @method     Oops_Model_HookQuery orderByPosition($order = Criteria::ASC) Order by the position column
 * @method     Oops_Model_HookQuery orderByLiveEdit($order = Criteria::ASC) Order by the live_edit column
 *
 * @method     Oops_Model_HookQuery groupByIdHook() Group by the id_hook column
 * @method     Oops_Model_HookQuery groupByName() Group by the name column
 * @method     Oops_Model_HookQuery groupByTitle() Group by the title column
 * @method     Oops_Model_HookQuery groupByDescription() Group by the description column
 * @method     Oops_Model_HookQuery groupByPosition() Group by the position column
 * @method     Oops_Model_HookQuery groupByLiveEdit() Group by the live_edit column
 *
 * @method     Oops_Model_HookQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     Oops_Model_HookQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     Oops_Model_HookQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     Oops_Model_Hook findOne(PropelPDO $con = null) Return the first Oops_Model_Hook matching the query
 * @method     Oops_Model_Hook findOneOrCreate(PropelPDO $con = null) Return the first Oops_Model_Hook matching the query, or a new Oops_Model_Hook object populated from the query conditions when no match is found
 *
 * @method     Oops_Model_Hook findOneByIdHook(int $id_hook) Return the first Oops_Model_Hook filtered by the id_hook column
 * @method     Oops_Model_Hook findOneByName(string $name) Return the first Oops_Model_Hook filtered by the name column
 * @method     Oops_Model_Hook findOneByTitle(string $title) Return the first Oops_Model_Hook filtered by the title column
 * @method     Oops_Model_Hook findOneByDescription(string $description) Return the first Oops_Model_Hook filtered by the description column
 * @method     Oops_Model_Hook findOneByPosition(boolean $position) Return the first Oops_Model_Hook filtered by the position column
 * @method     Oops_Model_Hook findOneByLiveEdit(boolean $live_edit) Return the first Oops_Model_Hook filtered by the live_edit column
 *
 * @method     array findByIdHook(int $id_hook) Return Oops_Model_Hook objects filtered by the id_hook column
 * @method     array findByName(string $name) Return Oops_Model_Hook objects filtered by the name column
 * @method     array findByTitle(string $title) Return Oops_Model_Hook objects filtered by the title column
 * @method     array findByDescription(string $description) Return Oops_Model_Hook objects filtered by the description column
 * @method     array findByPosition(boolean $position) Return Oops_Model_Hook objects filtered by the position column
 * @method     array findByLiveEdit(boolean $live_edit) Return Oops_Model_Hook objects filtered by the live_edit column
 *
 * @package    propel.generator.prestashop.om
 */
abstract class Oops_Model_Base_HookQuery extends ModelCriteria
{
	
	/**
	 * Initializes internal state of Oops_Model_Base_HookQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'prestashop', $modelName = 'Oops_Model_Hook', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new Oops_Model_HookQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    Oops_Model_HookQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof Oops_Model_HookQuery) {
			return $criteria;
		}
		$query = new Oops_Model_HookQuery();
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
	 * @return    Oops_Model_Hook|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ($key === null) {
			return null;
		}
		if ((null !== ($obj = Oops_Model_HookPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
			// the object is alredy in the instance pool
			return $obj;
		}
		if ($con === null) {
			$con = Propel::getConnection(Oops_Model_HookPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
	 * @return    Oops_Model_Hook A model object, or null if the key is not found
	 */
	protected function findPkSimple($key, $con)
	{
		$sql = 'SELECT `ID_HOOK`, `NAME`, `TITLE`, `DESCRIPTION`, `POSITION`, `LIVE_EDIT` FROM `djland_hook` WHERE `ID_HOOK` = :p0';
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
			$obj = new Oops_Model_Hook();
			$obj->hydrate($row);
			Oops_Model_HookPeer::addInstanceToPool($obj, (string) $row[0]);
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
	 * @return    Oops_Model_Hook|array|mixed the result, formatted by the current formatter
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
	 * @return    Oops_Model_HookQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(Oops_Model_HookPeer::ID_HOOK, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    Oops_Model_HookQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(Oops_Model_HookPeer::ID_HOOK, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id_hook column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByIdHook(1234); // WHERE id_hook = 1234
	 * $query->filterByIdHook(array(12, 34)); // WHERE id_hook IN (12, 34)
	 * $query->filterByIdHook(array('min' => 12)); // WHERE id_hook > 12
	 * </code>
	 *
	 * @param     mixed $idHook The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_HookQuery The current query, for fluid interface
	 */
	public function filterByIdHook($idHook = null, $comparison = null)
	{
		if (is_array($idHook) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(Oops_Model_HookPeer::ID_HOOK, $idHook, $comparison);
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
	 * @return    Oops_Model_HookQuery The current query, for fluid interface
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
		return $this->addUsingAlias(Oops_Model_HookPeer::NAME, $name, $comparison);
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
	 * @return    Oops_Model_HookQuery The current query, for fluid interface
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
		return $this->addUsingAlias(Oops_Model_HookPeer::TITLE, $title, $comparison);
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
	 * @return    Oops_Model_HookQuery The current query, for fluid interface
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
		return $this->addUsingAlias(Oops_Model_HookPeer::DESCRIPTION, $description, $comparison);
	}

	/**
	 * Filter the query on the position column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByPosition(true); // WHERE position = true
	 * $query->filterByPosition('yes'); // WHERE position = true
	 * </code>
	 *
	 * @param     boolean|string $position The value to use as filter.
	 *              Non-boolean arguments are converted using the following rules:
	 *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_HookQuery The current query, for fluid interface
	 */
	public function filterByPosition($position = null, $comparison = null)
	{
		if (is_string($position)) {
			$position = in_array(strtolower($position), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(Oops_Model_HookPeer::POSITION, $position, $comparison);
	}

	/**
	 * Filter the query on the live_edit column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByLiveEdit(true); // WHERE live_edit = true
	 * $query->filterByLiveEdit('yes'); // WHERE live_edit = true
	 * </code>
	 *
	 * @param     boolean|string $liveEdit The value to use as filter.
	 *              Non-boolean arguments are converted using the following rules:
	 *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_HookQuery The current query, for fluid interface
	 */
	public function filterByLiveEdit($liveEdit = null, $comparison = null)
	{
		if (is_string($liveEdit)) {
			$live_edit = in_array(strtolower($liveEdit), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(Oops_Model_HookPeer::LIVE_EDIT, $liveEdit, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     Oops_Model_Hook $hook Object to remove from the list of results
	 *
	 * @return    Oops_Model_HookQuery The current query, for fluid interface
	 */
	public function prune($hook = null)
	{
		if ($hook) {
			$this->addUsingAlias(Oops_Model_HookPeer::ID_HOOK, $hook->getIdHook(), Criteria::NOT_EQUAL);
		}

		return $this;
	}

} // Oops_Model_Base_HookQuery