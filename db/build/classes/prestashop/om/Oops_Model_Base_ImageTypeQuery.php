<?php


/**
 * Base class that represents a query for the '' . _DB_PREFIX_ . 'djland_image_type' table.
 *
 * 
 *
 * @method     Oops_Model_ImageTypeQuery orderByIdImageType($order = Criteria::ASC) Order by the id_image_type column
 * @method     Oops_Model_ImageTypeQuery orderByName($order = Criteria::ASC) Order by the name column
 * @method     Oops_Model_ImageTypeQuery orderByWidth($order = Criteria::ASC) Order by the width column
 * @method     Oops_Model_ImageTypeQuery orderByHeight($order = Criteria::ASC) Order by the height column
 * @method     Oops_Model_ImageTypeQuery orderByProducts($order = Criteria::ASC) Order by the products column
 * @method     Oops_Model_ImageTypeQuery orderByCategories($order = Criteria::ASC) Order by the categories column
 * @method     Oops_Model_ImageTypeQuery orderByManufacturers($order = Criteria::ASC) Order by the manufacturers column
 * @method     Oops_Model_ImageTypeQuery orderBySuppliers($order = Criteria::ASC) Order by the suppliers column
 * @method     Oops_Model_ImageTypeQuery orderByScenes($order = Criteria::ASC) Order by the scenes column
 * @method     Oops_Model_ImageTypeQuery orderByStores($order = Criteria::ASC) Order by the stores column
 *
 * @method     Oops_Model_ImageTypeQuery groupByIdImageType() Group by the id_image_type column
 * @method     Oops_Model_ImageTypeQuery groupByName() Group by the name column
 * @method     Oops_Model_ImageTypeQuery groupByWidth() Group by the width column
 * @method     Oops_Model_ImageTypeQuery groupByHeight() Group by the height column
 * @method     Oops_Model_ImageTypeQuery groupByProducts() Group by the products column
 * @method     Oops_Model_ImageTypeQuery groupByCategories() Group by the categories column
 * @method     Oops_Model_ImageTypeQuery groupByManufacturers() Group by the manufacturers column
 * @method     Oops_Model_ImageTypeQuery groupBySuppliers() Group by the suppliers column
 * @method     Oops_Model_ImageTypeQuery groupByScenes() Group by the scenes column
 * @method     Oops_Model_ImageTypeQuery groupByStores() Group by the stores column
 *
 * @method     Oops_Model_ImageTypeQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     Oops_Model_ImageTypeQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     Oops_Model_ImageTypeQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     Oops_Model_ImageType findOne(PropelPDO $con = null) Return the first Oops_Model_ImageType matching the query
 * @method     Oops_Model_ImageType findOneOrCreate(PropelPDO $con = null) Return the first Oops_Model_ImageType matching the query, or a new Oops_Model_ImageType object populated from the query conditions when no match is found
 *
 * @method     Oops_Model_ImageType findOneByIdImageType(int $id_image_type) Return the first Oops_Model_ImageType filtered by the id_image_type column
 * @method     Oops_Model_ImageType findOneByName(string $name) Return the first Oops_Model_ImageType filtered by the name column
 * @method     Oops_Model_ImageType findOneByWidth(int $width) Return the first Oops_Model_ImageType filtered by the width column
 * @method     Oops_Model_ImageType findOneByHeight(int $height) Return the first Oops_Model_ImageType filtered by the height column
 * @method     Oops_Model_ImageType findOneByProducts(boolean $products) Return the first Oops_Model_ImageType filtered by the products column
 * @method     Oops_Model_ImageType findOneByCategories(boolean $categories) Return the first Oops_Model_ImageType filtered by the categories column
 * @method     Oops_Model_ImageType findOneByManufacturers(boolean $manufacturers) Return the first Oops_Model_ImageType filtered by the manufacturers column
 * @method     Oops_Model_ImageType findOneBySuppliers(boolean $suppliers) Return the first Oops_Model_ImageType filtered by the suppliers column
 * @method     Oops_Model_ImageType findOneByScenes(boolean $scenes) Return the first Oops_Model_ImageType filtered by the scenes column
 * @method     Oops_Model_ImageType findOneByStores(boolean $stores) Return the first Oops_Model_ImageType filtered by the stores column
 *
 * @method     array findByIdImageType(int $id_image_type) Return Oops_Model_ImageType objects filtered by the id_image_type column
 * @method     array findByName(string $name) Return Oops_Model_ImageType objects filtered by the name column
 * @method     array findByWidth(int $width) Return Oops_Model_ImageType objects filtered by the width column
 * @method     array findByHeight(int $height) Return Oops_Model_ImageType objects filtered by the height column
 * @method     array findByProducts(boolean $products) Return Oops_Model_ImageType objects filtered by the products column
 * @method     array findByCategories(boolean $categories) Return Oops_Model_ImageType objects filtered by the categories column
 * @method     array findByManufacturers(boolean $manufacturers) Return Oops_Model_ImageType objects filtered by the manufacturers column
 * @method     array findBySuppliers(boolean $suppliers) Return Oops_Model_ImageType objects filtered by the suppliers column
 * @method     array findByScenes(boolean $scenes) Return Oops_Model_ImageType objects filtered by the scenes column
 * @method     array findByStores(boolean $stores) Return Oops_Model_ImageType objects filtered by the stores column
 *
 * @package    propel.generator.prestashop.om
 */
abstract class Oops_Model_Base_ImageTypeQuery extends ModelCriteria
{
	
	/**
	 * Initializes internal state of Oops_Model_Base_ImageTypeQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'prestashop', $modelName = 'Oops_Model_ImageType', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new Oops_Model_ImageTypeQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    Oops_Model_ImageTypeQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof Oops_Model_ImageTypeQuery) {
			return $criteria;
		}
		$query = new Oops_Model_ImageTypeQuery();
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
	 * @return    Oops_Model_ImageType|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ($key === null) {
			return null;
		}
		if ((null !== ($obj = Oops_Model_ImageTypePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
			// the object is alredy in the instance pool
			return $obj;
		}
		if ($con === null) {
			$con = Propel::getConnection(Oops_Model_ImageTypePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
	 * @return    Oops_Model_ImageType A model object, or null if the key is not found
	 */
	protected function findPkSimple($key, $con)
	{
		$sql = 'SELECT `ID_IMAGE_TYPE`, `NAME`, `WIDTH`, `HEIGHT`, `PRODUCTS`, `CATEGORIES`, `MANUFACTURERS`, `SUPPLIERS`, `SCENES`, `STORES` FROM `' . _DB_PREFIX_ . 'djland_image_type` WHERE `ID_IMAGE_TYPE` = :p0';
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
			$obj = new Oops_Model_ImageType();
			$obj->hydrate($row);
			Oops_Model_ImageTypePeer::addInstanceToPool($obj, (string) $row[0]);
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
	 * @return    Oops_Model_ImageType|array|mixed the result, formatted by the current formatter
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
	 * @return    Oops_Model_ImageTypeQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(Oops_Model_ImageTypePeer::ID_IMAGE_TYPE, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    Oops_Model_ImageTypeQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(Oops_Model_ImageTypePeer::ID_IMAGE_TYPE, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id_image_type column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByIdImageType(1234); // WHERE id_image_type = 1234
	 * $query->filterByIdImageType(array(12, 34)); // WHERE id_image_type IN (12, 34)
	 * $query->filterByIdImageType(array('min' => 12)); // WHERE id_image_type > 12
	 * </code>
	 *
	 * @param     mixed $idImageType The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_ImageTypeQuery The current query, for fluid interface
	 */
	public function filterByIdImageType($idImageType = null, $comparison = null)
	{
		if (is_array($idImageType) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(Oops_Model_ImageTypePeer::ID_IMAGE_TYPE, $idImageType, $comparison);
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
	 * @return    Oops_Model_ImageTypeQuery The current query, for fluid interface
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
		return $this->addUsingAlias(Oops_Model_ImageTypePeer::NAME, $name, $comparison);
	}

	/**
	 * Filter the query on the width column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByWidth(1234); // WHERE width = 1234
	 * $query->filterByWidth(array(12, 34)); // WHERE width IN (12, 34)
	 * $query->filterByWidth(array('min' => 12)); // WHERE width > 12
	 * </code>
	 *
	 * @param     mixed $width The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_ImageTypeQuery The current query, for fluid interface
	 */
	public function filterByWidth($width = null, $comparison = null)
	{
		if (is_array($width)) {
			$useMinMax = false;
			if (isset($width['min'])) {
				$this->addUsingAlias(Oops_Model_ImageTypePeer::WIDTH, $width['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($width['max'])) {
				$this->addUsingAlias(Oops_Model_ImageTypePeer::WIDTH, $width['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_ImageTypePeer::WIDTH, $width, $comparison);
	}

	/**
	 * Filter the query on the height column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByHeight(1234); // WHERE height = 1234
	 * $query->filterByHeight(array(12, 34)); // WHERE height IN (12, 34)
	 * $query->filterByHeight(array('min' => 12)); // WHERE height > 12
	 * </code>
	 *
	 * @param     mixed $height The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_ImageTypeQuery The current query, for fluid interface
	 */
	public function filterByHeight($height = null, $comparison = null)
	{
		if (is_array($height)) {
			$useMinMax = false;
			if (isset($height['min'])) {
				$this->addUsingAlias(Oops_Model_ImageTypePeer::HEIGHT, $height['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($height['max'])) {
				$this->addUsingAlias(Oops_Model_ImageTypePeer::HEIGHT, $height['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_ImageTypePeer::HEIGHT, $height, $comparison);
	}

	/**
	 * Filter the query on the products column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByProducts(true); // WHERE products = true
	 * $query->filterByProducts('yes'); // WHERE products = true
	 * </code>
	 *
	 * @param     boolean|string $products The value to use as filter.
	 *              Non-boolean arguments are converted using the following rules:
	 *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_ImageTypeQuery The current query, for fluid interface
	 */
	public function filterByProducts($products = null, $comparison = null)
	{
		if (is_string($products)) {
			$products = in_array(strtolower($products), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(Oops_Model_ImageTypePeer::PRODUCTS, $products, $comparison);
	}

	/**
	 * Filter the query on the categories column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByCategories(true); // WHERE categories = true
	 * $query->filterByCategories('yes'); // WHERE categories = true
	 * </code>
	 *
	 * @param     boolean|string $categories The value to use as filter.
	 *              Non-boolean arguments are converted using the following rules:
	 *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_ImageTypeQuery The current query, for fluid interface
	 */
	public function filterByCategories($categories = null, $comparison = null)
	{
		if (is_string($categories)) {
			$categories = in_array(strtolower($categories), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(Oops_Model_ImageTypePeer::CATEGORIES, $categories, $comparison);
	}

	/**
	 * Filter the query on the manufacturers column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByManufacturers(true); // WHERE manufacturers = true
	 * $query->filterByManufacturers('yes'); // WHERE manufacturers = true
	 * </code>
	 *
	 * @param     boolean|string $manufacturers The value to use as filter.
	 *              Non-boolean arguments are converted using the following rules:
	 *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_ImageTypeQuery The current query, for fluid interface
	 */
	public function filterByManufacturers($manufacturers = null, $comparison = null)
	{
		if (is_string($manufacturers)) {
			$manufacturers = in_array(strtolower($manufacturers), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(Oops_Model_ImageTypePeer::MANUFACTURERS, $manufacturers, $comparison);
	}

	/**
	 * Filter the query on the suppliers column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterBySuppliers(true); // WHERE suppliers = true
	 * $query->filterBySuppliers('yes'); // WHERE suppliers = true
	 * </code>
	 *
	 * @param     boolean|string $suppliers The value to use as filter.
	 *              Non-boolean arguments are converted using the following rules:
	 *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_ImageTypeQuery The current query, for fluid interface
	 */
	public function filterBySuppliers($suppliers = null, $comparison = null)
	{
		if (is_string($suppliers)) {
			$suppliers = in_array(strtolower($suppliers), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(Oops_Model_ImageTypePeer::SUPPLIERS, $suppliers, $comparison);
	}

	/**
	 * Filter the query on the scenes column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByScenes(true); // WHERE scenes = true
	 * $query->filterByScenes('yes'); // WHERE scenes = true
	 * </code>
	 *
	 * @param     boolean|string $scenes The value to use as filter.
	 *              Non-boolean arguments are converted using the following rules:
	 *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_ImageTypeQuery The current query, for fluid interface
	 */
	public function filterByScenes($scenes = null, $comparison = null)
	{
		if (is_string($scenes)) {
			$scenes = in_array(strtolower($scenes), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(Oops_Model_ImageTypePeer::SCENES, $scenes, $comparison);
	}

	/**
	 * Filter the query on the stores column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByStores(true); // WHERE stores = true
	 * $query->filterByStores('yes'); // WHERE stores = true
	 * </code>
	 *
	 * @param     boolean|string $stores The value to use as filter.
	 *              Non-boolean arguments are converted using the following rules:
	 *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_ImageTypeQuery The current query, for fluid interface
	 */
	public function filterByStores($stores = null, $comparison = null)
	{
		if (is_string($stores)) {
			$stores = in_array(strtolower($stores), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(Oops_Model_ImageTypePeer::STORES, $stores, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     Oops_Model_ImageType $imageType Object to remove from the list of results
	 *
	 * @return    Oops_Model_ImageTypeQuery The current query, for fluid interface
	 */
	public function prune($imageType = null)
	{
		if ($imageType) {
			$this->addUsingAlias(Oops_Model_ImageTypePeer::ID_IMAGE_TYPE, $imageType->getIdImageType(), Criteria::NOT_EQUAL);
		}

		return $this;
	}

} // Oops_Model_Base_ImageTypeQuery