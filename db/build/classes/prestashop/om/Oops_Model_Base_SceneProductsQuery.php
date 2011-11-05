<?php


/**
 * Base class that represents a query for the '' . _DB_PREFIX_ . 'djland_scene_products' table.
 *
 * 
 *
 * @method     Oops_Model_SceneProductsQuery orderByIdScene($order = Criteria::ASC) Order by the id_scene column
 * @method     Oops_Model_SceneProductsQuery orderByIdProduct($order = Criteria::ASC) Order by the id_product column
 * @method     Oops_Model_SceneProductsQuery orderByXAxis($order = Criteria::ASC) Order by the x_axis column
 * @method     Oops_Model_SceneProductsQuery orderByYAxis($order = Criteria::ASC) Order by the y_axis column
 * @method     Oops_Model_SceneProductsQuery orderByZoneWidth($order = Criteria::ASC) Order by the zone_width column
 * @method     Oops_Model_SceneProductsQuery orderByZoneHeight($order = Criteria::ASC) Order by the zone_height column
 *
 * @method     Oops_Model_SceneProductsQuery groupByIdScene() Group by the id_scene column
 * @method     Oops_Model_SceneProductsQuery groupByIdProduct() Group by the id_product column
 * @method     Oops_Model_SceneProductsQuery groupByXAxis() Group by the x_axis column
 * @method     Oops_Model_SceneProductsQuery groupByYAxis() Group by the y_axis column
 * @method     Oops_Model_SceneProductsQuery groupByZoneWidth() Group by the zone_width column
 * @method     Oops_Model_SceneProductsQuery groupByZoneHeight() Group by the zone_height column
 *
 * @method     Oops_Model_SceneProductsQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     Oops_Model_SceneProductsQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     Oops_Model_SceneProductsQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     Oops_Model_SceneProducts findOne(PropelPDO $con = null) Return the first Oops_Model_SceneProducts matching the query
 * @method     Oops_Model_SceneProducts findOneOrCreate(PropelPDO $con = null) Return the first Oops_Model_SceneProducts matching the query, or a new Oops_Model_SceneProducts object populated from the query conditions when no match is found
 *
 * @method     Oops_Model_SceneProducts findOneByIdScene(int $id_scene) Return the first Oops_Model_SceneProducts filtered by the id_scene column
 * @method     Oops_Model_SceneProducts findOneByIdProduct(int $id_product) Return the first Oops_Model_SceneProducts filtered by the id_product column
 * @method     Oops_Model_SceneProducts findOneByXAxis(int $x_axis) Return the first Oops_Model_SceneProducts filtered by the x_axis column
 * @method     Oops_Model_SceneProducts findOneByYAxis(int $y_axis) Return the first Oops_Model_SceneProducts filtered by the y_axis column
 * @method     Oops_Model_SceneProducts findOneByZoneWidth(int $zone_width) Return the first Oops_Model_SceneProducts filtered by the zone_width column
 * @method     Oops_Model_SceneProducts findOneByZoneHeight(int $zone_height) Return the first Oops_Model_SceneProducts filtered by the zone_height column
 *
 * @method     array findByIdScene(int $id_scene) Return Oops_Model_SceneProducts objects filtered by the id_scene column
 * @method     array findByIdProduct(int $id_product) Return Oops_Model_SceneProducts objects filtered by the id_product column
 * @method     array findByXAxis(int $x_axis) Return Oops_Model_SceneProducts objects filtered by the x_axis column
 * @method     array findByYAxis(int $y_axis) Return Oops_Model_SceneProducts objects filtered by the y_axis column
 * @method     array findByZoneWidth(int $zone_width) Return Oops_Model_SceneProducts objects filtered by the zone_width column
 * @method     array findByZoneHeight(int $zone_height) Return Oops_Model_SceneProducts objects filtered by the zone_height column
 *
 * @package    propel.generator.prestashop.om
 */
abstract class Oops_Model_Base_SceneProductsQuery extends ModelCriteria
{
	
	/**
	 * Initializes internal state of Oops_Model_Base_SceneProductsQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'prestashop', $modelName = 'Oops_Model_SceneProducts', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new Oops_Model_SceneProductsQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    Oops_Model_SceneProductsQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof Oops_Model_SceneProductsQuery) {
			return $criteria;
		}
		$query = new Oops_Model_SceneProductsQuery();
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
	 * $obj = $c->findPk(array(12, 34, 56, 78), $con);
	 * </code>
	 *
	 * @param     array[$id_scene, $id_product, $x_axis, $y_axis] $key Primary key to use for the query
	 * @param     PropelPDO $con an optional connection object
	 *
	 * @return    Oops_Model_SceneProducts|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ($key === null) {
			return null;
		}
		if ((null !== ($obj = Oops_Model_SceneProductsPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1], (string) $key[2], (string) $key[3]))))) && !$this->formatter) {
			// the object is alredy in the instance pool
			return $obj;
		}
		if ($con === null) {
			$con = Propel::getConnection(Oops_Model_SceneProductsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
	 * @return    Oops_Model_SceneProducts A model object, or null if the key is not found
	 */
	protected function findPkSimple($key, $con)
	{
		$sql = 'SELECT `ID_SCENE`, `ID_PRODUCT`, `X_AXIS`, `Y_AXIS`, `ZONE_WIDTH`, `ZONE_HEIGHT` FROM `' . _DB_PREFIX_ . 'djland_scene_products` WHERE `ID_SCENE` = :p0 AND `ID_PRODUCT` = :p1 AND `X_AXIS` = :p2 AND `Y_AXIS` = :p3';
		try {
			$stmt = $con->prepare($sql);
			$stmt->bindValue(':p0', $key[0], PDO::PARAM_INT);
			$stmt->bindValue(':p1', $key[1], PDO::PARAM_INT);
			$stmt->bindValue(':p2', $key[2], PDO::PARAM_INT);
			$stmt->bindValue(':p3', $key[3], PDO::PARAM_INT);
			$stmt->execute();
		} catch (Exception $e) {
			Propel::log($e->getMessage(), Propel::LOG_ERR);
			throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
		}
		$obj = null;
		if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$obj = new Oops_Model_SceneProducts();
			$obj->hydrate($row);
			Oops_Model_SceneProductsPeer::addInstanceToPool($obj, serialize(array((string) $row[0], (string) $row[1], (string) $row[2], (string) $row[3])));
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
	 * @return    Oops_Model_SceneProducts|array|mixed the result, formatted by the current formatter
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
	 * @return    Oops_Model_SceneProductsQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		$this->addUsingAlias(Oops_Model_SceneProductsPeer::ID_SCENE, $key[0], Criteria::EQUAL);
		$this->addUsingAlias(Oops_Model_SceneProductsPeer::ID_PRODUCT, $key[1], Criteria::EQUAL);
		$this->addUsingAlias(Oops_Model_SceneProductsPeer::X_AXIS, $key[2], Criteria::EQUAL);
		$this->addUsingAlias(Oops_Model_SceneProductsPeer::Y_AXIS, $key[3], Criteria::EQUAL);

		return $this;
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    Oops_Model_SceneProductsQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		if (empty($keys)) {
			return $this->add(null, '1<>1', Criteria::CUSTOM);
		}
		foreach ($keys as $key) {
			$cton0 = $this->getNewCriterion(Oops_Model_SceneProductsPeer::ID_SCENE, $key[0], Criteria::EQUAL);
			$cton1 = $this->getNewCriterion(Oops_Model_SceneProductsPeer::ID_PRODUCT, $key[1], Criteria::EQUAL);
			$cton0->addAnd($cton1);
			$cton2 = $this->getNewCriterion(Oops_Model_SceneProductsPeer::X_AXIS, $key[2], Criteria::EQUAL);
			$cton0->addAnd($cton2);
			$cton3 = $this->getNewCriterion(Oops_Model_SceneProductsPeer::Y_AXIS, $key[3], Criteria::EQUAL);
			$cton0->addAnd($cton3);
			$this->addOr($cton0);
		}

		return $this;
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
	 * @return    Oops_Model_SceneProductsQuery The current query, for fluid interface
	 */
	public function filterByIdScene($idScene = null, $comparison = null)
	{
		if (is_array($idScene) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(Oops_Model_SceneProductsPeer::ID_SCENE, $idScene, $comparison);
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
	 * @param     mixed $idProduct The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_SceneProductsQuery The current query, for fluid interface
	 */
	public function filterByIdProduct($idProduct = null, $comparison = null)
	{
		if (is_array($idProduct) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(Oops_Model_SceneProductsPeer::ID_PRODUCT, $idProduct, $comparison);
	}

	/**
	 * Filter the query on the x_axis column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByXAxis(1234); // WHERE x_axis = 1234
	 * $query->filterByXAxis(array(12, 34)); // WHERE x_axis IN (12, 34)
	 * $query->filterByXAxis(array('min' => 12)); // WHERE x_axis > 12
	 * </code>
	 *
	 * @param     mixed $xAxis The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_SceneProductsQuery The current query, for fluid interface
	 */
	public function filterByXAxis($xAxis = null, $comparison = null)
	{
		if (is_array($xAxis) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(Oops_Model_SceneProductsPeer::X_AXIS, $xAxis, $comparison);
	}

	/**
	 * Filter the query on the y_axis column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByYAxis(1234); // WHERE y_axis = 1234
	 * $query->filterByYAxis(array(12, 34)); // WHERE y_axis IN (12, 34)
	 * $query->filterByYAxis(array('min' => 12)); // WHERE y_axis > 12
	 * </code>
	 *
	 * @param     mixed $yAxis The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_SceneProductsQuery The current query, for fluid interface
	 */
	public function filterByYAxis($yAxis = null, $comparison = null)
	{
		if (is_array($yAxis) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(Oops_Model_SceneProductsPeer::Y_AXIS, $yAxis, $comparison);
	}

	/**
	 * Filter the query on the zone_width column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByZoneWidth(1234); // WHERE zone_width = 1234
	 * $query->filterByZoneWidth(array(12, 34)); // WHERE zone_width IN (12, 34)
	 * $query->filterByZoneWidth(array('min' => 12)); // WHERE zone_width > 12
	 * </code>
	 *
	 * @param     mixed $zoneWidth The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_SceneProductsQuery The current query, for fluid interface
	 */
	public function filterByZoneWidth($zoneWidth = null, $comparison = null)
	{
		if (is_array($zoneWidth)) {
			$useMinMax = false;
			if (isset($zoneWidth['min'])) {
				$this->addUsingAlias(Oops_Model_SceneProductsPeer::ZONE_WIDTH, $zoneWidth['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($zoneWidth['max'])) {
				$this->addUsingAlias(Oops_Model_SceneProductsPeer::ZONE_WIDTH, $zoneWidth['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_SceneProductsPeer::ZONE_WIDTH, $zoneWidth, $comparison);
	}

	/**
	 * Filter the query on the zone_height column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByZoneHeight(1234); // WHERE zone_height = 1234
	 * $query->filterByZoneHeight(array(12, 34)); // WHERE zone_height IN (12, 34)
	 * $query->filterByZoneHeight(array('min' => 12)); // WHERE zone_height > 12
	 * </code>
	 *
	 * @param     mixed $zoneHeight The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_SceneProductsQuery The current query, for fluid interface
	 */
	public function filterByZoneHeight($zoneHeight = null, $comparison = null)
	{
		if (is_array($zoneHeight)) {
			$useMinMax = false;
			if (isset($zoneHeight['min'])) {
				$this->addUsingAlias(Oops_Model_SceneProductsPeer::ZONE_HEIGHT, $zoneHeight['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($zoneHeight['max'])) {
				$this->addUsingAlias(Oops_Model_SceneProductsPeer::ZONE_HEIGHT, $zoneHeight['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_SceneProductsPeer::ZONE_HEIGHT, $zoneHeight, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     Oops_Model_SceneProducts $sceneProducts Object to remove from the list of results
	 *
	 * @return    Oops_Model_SceneProductsQuery The current query, for fluid interface
	 */
	public function prune($sceneProducts = null)
	{
		if ($sceneProducts) {
			$this->addCond('pruneCond0', $this->getAliasedColName(Oops_Model_SceneProductsPeer::ID_SCENE), $sceneProducts->getIdScene(), Criteria::NOT_EQUAL);
			$this->addCond('pruneCond1', $this->getAliasedColName(Oops_Model_SceneProductsPeer::ID_PRODUCT), $sceneProducts->getIdProduct(), Criteria::NOT_EQUAL);
			$this->addCond('pruneCond2', $this->getAliasedColName(Oops_Model_SceneProductsPeer::X_AXIS), $sceneProducts->getXAxis(), Criteria::NOT_EQUAL);
			$this->addCond('pruneCond3', $this->getAliasedColName(Oops_Model_SceneProductsPeer::Y_AXIS), $sceneProducts->getYAxis(), Criteria::NOT_EQUAL);
			$this->combine(array('pruneCond0', 'pruneCond1', 'pruneCond2', 'pruneCond3'), Criteria::LOGICAL_OR);
		}

		return $this;
	}

} // Oops_Model_Base_SceneProductsQuery