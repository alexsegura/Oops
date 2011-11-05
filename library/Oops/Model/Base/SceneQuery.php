<?php


/**
 * Base class that represents a query for the 'djland_scene' table.
 *
 * 
 *
 * @method     Oops_Model_SceneQuery orderByIdScene($order = Criteria::ASC) Order by the id_scene column
 * @method     Oops_Model_SceneQuery orderByActive($order = Criteria::ASC) Order by the active column
 *
 * @method     Oops_Model_SceneQuery groupByIdScene() Group by the id_scene column
 * @method     Oops_Model_SceneQuery groupByActive() Group by the active column
 *
 * @method     Oops_Model_SceneQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     Oops_Model_SceneQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     Oops_Model_SceneQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     Oops_Model_Scene findOne(PropelPDO $con = null) Return the first Oops_Model_Scene matching the query
 * @method     Oops_Model_Scene findOneOrCreate(PropelPDO $con = null) Return the first Oops_Model_Scene matching the query, or a new Oops_Model_Scene object populated from the query conditions when no match is found
 *
 * @method     Oops_Model_Scene findOneByIdScene(int $id_scene) Return the first Oops_Model_Scene filtered by the id_scene column
 * @method     Oops_Model_Scene findOneByActive(boolean $active) Return the first Oops_Model_Scene filtered by the active column
 *
 * @method     array findByIdScene(int $id_scene) Return Oops_Model_Scene objects filtered by the id_scene column
 * @method     array findByActive(boolean $active) Return Oops_Model_Scene objects filtered by the active column
 *
 * @package    propel.generator.prestashop.om
 */
abstract class Oops_Model_Base_SceneQuery extends ModelCriteria
{
	
	/**
	 * Initializes internal state of Oops_Model_Base_SceneQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'prestashop', $modelName = 'Oops_Model_Scene', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new Oops_Model_SceneQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    Oops_Model_SceneQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof Oops_Model_SceneQuery) {
			return $criteria;
		}
		$query = new Oops_Model_SceneQuery();
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
	 * @return    Oops_Model_Scene|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ($key === null) {
			return null;
		}
		if ((null !== ($obj = Oops_Model_ScenePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
			// the object is alredy in the instance pool
			return $obj;
		}
		if ($con === null) {
			$con = Propel::getConnection(Oops_Model_ScenePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
	 * @return    Oops_Model_Scene A model object, or null if the key is not found
	 */
	protected function findPkSimple($key, $con)
	{
		$sql = 'SELECT `ID_SCENE`, `ACTIVE` FROM `djland_scene` WHERE `ID_SCENE` = :p0';
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
			$obj = new Oops_Model_Scene();
			$obj->hydrate($row);
			Oops_Model_ScenePeer::addInstanceToPool($obj, (string) $row[0]);
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
	 * @return    Oops_Model_Scene|array|mixed the result, formatted by the current formatter
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
	 * @return    Oops_Model_SceneQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(Oops_Model_ScenePeer::ID_SCENE, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    Oops_Model_SceneQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(Oops_Model_ScenePeer::ID_SCENE, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id_scene column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByIdScene(1234); // WHERE id_scene = 1234
	 * $query->filterByIdScene(array(12, 34)); // WHERE id_scene IN (12, 34)
	 * $query->filterByIdScene(array('min' => 12)); // WHERE id_scene > 12
	 * </code>
	 *
	 * @param     mixed $idScene The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_SceneQuery The current query, for fluid interface
	 */
	public function filterByIdScene($idScene = null, $comparison = null)
	{
		if (is_array($idScene) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(Oops_Model_ScenePeer::ID_SCENE, $idScene, $comparison);
	}

	/**
	 * Filter the query on the active column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByActive(true); // WHERE active = true
	 * $query->filterByActive('yes'); // WHERE active = true
	 * </code>
	 *
	 * @param     boolean|string $active The value to use as filter.
	 *              Non-boolean arguments are converted using the following rules:
	 *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_SceneQuery The current query, for fluid interface
	 */
	public function filterByActive($active = null, $comparison = null)
	{
		if (is_string($active)) {
			$active = in_array(strtolower($active), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(Oops_Model_ScenePeer::ACTIVE, $active, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     Oops_Model_Scene $scene Object to remove from the list of results
	 *
	 * @return    Oops_Model_SceneQuery The current query, for fluid interface
	 */
	public function prune($scene = null)
	{
		if ($scene) {
			$this->addUsingAlias(Oops_Model_ScenePeer::ID_SCENE, $scene->getIdScene(), Criteria::NOT_EQUAL);
		}

		return $this;
	}

} // Oops_Model_Base_SceneQuery