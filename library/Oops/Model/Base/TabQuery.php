<?php


/**
 * Base class that represents a query for the 'tab' table.
 *
 * 
 *
 * @method     Oops_Model_TabQuery orderByIdTab($order = Criteria::ASC) Order by the id_tab column
 * @method     Oops_Model_TabQuery orderByIdParent($order = Criteria::ASC) Order by the id_parent column
 * @method     Oops_Model_TabQuery orderByClassName($order = Criteria::ASC) Order by the class_name column
 * @method     Oops_Model_TabQuery orderByModule($order = Criteria::ASC) Order by the module column
 * @method     Oops_Model_TabQuery orderByPosition($order = Criteria::ASC) Order by the position column
 *
 * @method     Oops_Model_TabQuery groupByIdTab() Group by the id_tab column
 * @method     Oops_Model_TabQuery groupByIdParent() Group by the id_parent column
 * @method     Oops_Model_TabQuery groupByClassName() Group by the class_name column
 * @method     Oops_Model_TabQuery groupByModule() Group by the module column
 * @method     Oops_Model_TabQuery groupByPosition() Group by the position column
 *
 * @method     Oops_Model_TabQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     Oops_Model_TabQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     Oops_Model_TabQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     Oops_Model_Tab findOne(PropelPDO $con = null) Return the first Oops_Model_Tab matching the query
 * @method     Oops_Model_Tab findOneOrCreate(PropelPDO $con = null) Return the first Oops_Model_Tab matching the query, or a new Oops_Model_Tab object populated from the query conditions when no match is found
 *
 * @method     Oops_Model_Tab findOneByIdTab(int $id_tab) Return the first Oops_Model_Tab filtered by the id_tab column
 * @method     Oops_Model_Tab findOneByIdParent(int $id_parent) Return the first Oops_Model_Tab filtered by the id_parent column
 * @method     Oops_Model_Tab findOneByClassName(string $class_name) Return the first Oops_Model_Tab filtered by the class_name column
 * @method     Oops_Model_Tab findOneByModule(string $module) Return the first Oops_Model_Tab filtered by the module column
 * @method     Oops_Model_Tab findOneByPosition(int $position) Return the first Oops_Model_Tab filtered by the position column
 *
 * @method     array findByIdTab(int $id_tab) Return Oops_Model_Tab objects filtered by the id_tab column
 * @method     array findByIdParent(int $id_parent) Return Oops_Model_Tab objects filtered by the id_parent column
 * @method     array findByClassName(string $class_name) Return Oops_Model_Tab objects filtered by the class_name column
 * @method     array findByModule(string $module) Return Oops_Model_Tab objects filtered by the module column
 * @method     array findByPosition(int $position) Return Oops_Model_Tab objects filtered by the position column
 *
 * @package    propel.generator.prestashop.om
 */
abstract class Oops_Model_Base_TabQuery extends ModelCriteria
{
	
	/**
	 * Initializes internal state of Oops_Model_Base_TabQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'prestashop', $modelName = 'Oops_Model_Tab', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new Oops_Model_TabQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    Oops_Model_TabQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof Oops_Model_TabQuery) {
			return $criteria;
		}
		$query = new Oops_Model_TabQuery();
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
	 * @return    Oops_Model_Tab|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ($key === null) {
			return null;
		}
		if ((null !== ($obj = Oops_Model_TabPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
			// the object is alredy in the instance pool
			return $obj;
		}
		if ($con === null) {
			$con = Propel::getConnection(Oops_Model_TabPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
	 * @return    Oops_Model_Tab A model object, or null if the key is not found
	 */
	protected function findPkSimple($key, $con)
	{
		$sql = 'SELECT `ID_TAB`, `ID_PARENT`, `CLASS_NAME`, `MODULE`, `POSITION` FROM `' . _DB_PREFIX_ . 'tab` WHERE `ID_TAB` = :p0';
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
			$obj = new Oops_Model_Tab();
			$obj->hydrate($row);
			Oops_Model_TabPeer::addInstanceToPool($obj, (string) $row[0]);
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
	 * @return    Oops_Model_Tab|array|mixed the result, formatted by the current formatter
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
	 * @return    Oops_Model_TabQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(Oops_Model_TabPeer::ID_TAB, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    Oops_Model_TabQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(Oops_Model_TabPeer::ID_TAB, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id_tab column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByIdTab(1234); // WHERE id_tab = 1234
	 * $query->filterByIdTab(array(12, 34)); // WHERE id_tab IN (12, 34)
	 * $query->filterByIdTab(array('min' => 12)); // WHERE id_tab > 12
	 * </code>
	 *
	 * @param     mixed $idTab The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_TabQuery The current query, for fluid interface
	 */
	public function filterByIdTab($idTab = null, $comparison = null)
	{
		if (is_array($idTab) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(Oops_Model_TabPeer::ID_TAB, $idTab, $comparison);
	}

	/**
	 * Filter the query on the id_parent column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByIdParent(1234); // WHERE id_parent = 1234
	 * $query->filterByIdParent(array(12, 34)); // WHERE id_parent IN (12, 34)
	 * $query->filterByIdParent(array('min' => 12)); // WHERE id_parent > 12
	 * </code>
	 *
	 * @param     mixed $idParent The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_TabQuery The current query, for fluid interface
	 */
	public function filterByIdParent($idParent = null, $comparison = null)
	{
		if (is_array($idParent)) {
			$useMinMax = false;
			if (isset($idParent['min'])) {
				$this->addUsingAlias(Oops_Model_TabPeer::ID_PARENT, $idParent['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($idParent['max'])) {
				$this->addUsingAlias(Oops_Model_TabPeer::ID_PARENT, $idParent['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_TabPeer::ID_PARENT, $idParent, $comparison);
	}

	/**
	 * Filter the query on the class_name column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByClassName('fooValue');   // WHERE class_name = 'fooValue'
	 * $query->filterByClassName('%fooValue%'); // WHERE class_name LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $className The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_TabQuery The current query, for fluid interface
	 */
	public function filterByClassName($className = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($className)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $className)) {
				$className = str_replace('*', '%', $className);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(Oops_Model_TabPeer::CLASS_NAME, $className, $comparison);
	}

	/**
	 * Filter the query on the module column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByModule('fooValue');   // WHERE module = 'fooValue'
	 * $query->filterByModule('%fooValue%'); // WHERE module LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $module The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_TabQuery The current query, for fluid interface
	 */
	public function filterByModule($module = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($module)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $module)) {
				$module = str_replace('*', '%', $module);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(Oops_Model_TabPeer::MODULE, $module, $comparison);
	}

	/**
	 * Filter the query on the position column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByPosition(1234); // WHERE position = 1234
	 * $query->filterByPosition(array(12, 34)); // WHERE position IN (12, 34)
	 * $query->filterByPosition(array('min' => 12)); // WHERE position > 12
	 * </code>
	 *
	 * @param     mixed $position The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_TabQuery The current query, for fluid interface
	 */
	public function filterByPosition($position = null, $comparison = null)
	{
		if (is_array($position)) {
			$useMinMax = false;
			if (isset($position['min'])) {
				$this->addUsingAlias(Oops_Model_TabPeer::POSITION, $position['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($position['max'])) {
				$this->addUsingAlias(Oops_Model_TabPeer::POSITION, $position['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_TabPeer::POSITION, $position, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     Oops_Model_Tab $tab Object to remove from the list of results
	 *
	 * @return    Oops_Model_TabQuery The current query, for fluid interface
	 */
	public function prune($tab = null)
	{
		if ($tab) {
			$this->addUsingAlias(Oops_Model_TabPeer::ID_TAB, $tab->getIdTab(), Criteria::NOT_EQUAL);
		}

		return $this;
	}

} // Oops_Model_Base_TabQuery