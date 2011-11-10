<?php


/**
 * Base class that represents a query for the 'product_attribute' table.
 *
 * 
 *
 * @method     Oops_Model_ProductAttributeQuery orderByIdProductAttribute($order = Criteria::ASC) Order by the id_product_attribute column
 * @method     Oops_Model_ProductAttributeQuery orderByIdProduct($order = Criteria::ASC) Order by the id_product column
 * @method     Oops_Model_ProductAttributeQuery orderByReference($order = Criteria::ASC) Order by the reference column
 * @method     Oops_Model_ProductAttributeQuery orderBySupplierReference($order = Criteria::ASC) Order by the supplier_reference column
 * @method     Oops_Model_ProductAttributeQuery orderByLocation($order = Criteria::ASC) Order by the location column
 * @method     Oops_Model_ProductAttributeQuery orderByEan13($order = Criteria::ASC) Order by the ean13 column
 * @method     Oops_Model_ProductAttributeQuery orderByUpc($order = Criteria::ASC) Order by the upc column
 * @method     Oops_Model_ProductAttributeQuery orderByWholesalePrice($order = Criteria::ASC) Order by the wholesale_price column
 * @method     Oops_Model_ProductAttributeQuery orderByPrice($order = Criteria::ASC) Order by the price column
 * @method     Oops_Model_ProductAttributeQuery orderByEcotax($order = Criteria::ASC) Order by the ecotax column
 * @method     Oops_Model_ProductAttributeQuery orderByQuantity($order = Criteria::ASC) Order by the quantity column
 * @method     Oops_Model_ProductAttributeQuery orderByWeight($order = Criteria::ASC) Order by the weight column
 * @method     Oops_Model_ProductAttributeQuery orderByUnitPriceImpact($order = Criteria::ASC) Order by the unit_price_impact column
 * @method     Oops_Model_ProductAttributeQuery orderByDefaultOn($order = Criteria::ASC) Order by the default_on column
 * @method     Oops_Model_ProductAttributeQuery orderByMinimalQuantity($order = Criteria::ASC) Order by the minimal_quantity column
 *
 * @method     Oops_Model_ProductAttributeQuery groupByIdProductAttribute() Group by the id_product_attribute column
 * @method     Oops_Model_ProductAttributeQuery groupByIdProduct() Group by the id_product column
 * @method     Oops_Model_ProductAttributeQuery groupByReference() Group by the reference column
 * @method     Oops_Model_ProductAttributeQuery groupBySupplierReference() Group by the supplier_reference column
 * @method     Oops_Model_ProductAttributeQuery groupByLocation() Group by the location column
 * @method     Oops_Model_ProductAttributeQuery groupByEan13() Group by the ean13 column
 * @method     Oops_Model_ProductAttributeQuery groupByUpc() Group by the upc column
 * @method     Oops_Model_ProductAttributeQuery groupByWholesalePrice() Group by the wholesale_price column
 * @method     Oops_Model_ProductAttributeQuery groupByPrice() Group by the price column
 * @method     Oops_Model_ProductAttributeQuery groupByEcotax() Group by the ecotax column
 * @method     Oops_Model_ProductAttributeQuery groupByQuantity() Group by the quantity column
 * @method     Oops_Model_ProductAttributeQuery groupByWeight() Group by the weight column
 * @method     Oops_Model_ProductAttributeQuery groupByUnitPriceImpact() Group by the unit_price_impact column
 * @method     Oops_Model_ProductAttributeQuery groupByDefaultOn() Group by the default_on column
 * @method     Oops_Model_ProductAttributeQuery groupByMinimalQuantity() Group by the minimal_quantity column
 *
 * @method     Oops_Model_ProductAttributeQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     Oops_Model_ProductAttributeQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     Oops_Model_ProductAttributeQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     Oops_Model_ProductAttribute findOne(PropelPDO $con = null) Return the first Oops_Model_ProductAttribute matching the query
 * @method     Oops_Model_ProductAttribute findOneOrCreate(PropelPDO $con = null) Return the first Oops_Model_ProductAttribute matching the query, or a new Oops_Model_ProductAttribute object populated from the query conditions when no match is found
 *
 * @method     Oops_Model_ProductAttribute findOneByIdProductAttribute(int $id_product_attribute) Return the first Oops_Model_ProductAttribute filtered by the id_product_attribute column
 * @method     Oops_Model_ProductAttribute findOneByIdProduct(int $id_product) Return the first Oops_Model_ProductAttribute filtered by the id_product column
 * @method     Oops_Model_ProductAttribute findOneByReference(string $reference) Return the first Oops_Model_ProductAttribute filtered by the reference column
 * @method     Oops_Model_ProductAttribute findOneBySupplierReference(string $supplier_reference) Return the first Oops_Model_ProductAttribute filtered by the supplier_reference column
 * @method     Oops_Model_ProductAttribute findOneByLocation(string $location) Return the first Oops_Model_ProductAttribute filtered by the location column
 * @method     Oops_Model_ProductAttribute findOneByEan13(string $ean13) Return the first Oops_Model_ProductAttribute filtered by the ean13 column
 * @method     Oops_Model_ProductAttribute findOneByUpc(string $upc) Return the first Oops_Model_ProductAttribute filtered by the upc column
 * @method     Oops_Model_ProductAttribute findOneByWholesalePrice(string $wholesale_price) Return the first Oops_Model_ProductAttribute filtered by the wholesale_price column
 * @method     Oops_Model_ProductAttribute findOneByPrice(string $price) Return the first Oops_Model_ProductAttribute filtered by the price column
 * @method     Oops_Model_ProductAttribute findOneByEcotax(string $ecotax) Return the first Oops_Model_ProductAttribute filtered by the ecotax column
 * @method     Oops_Model_ProductAttribute findOneByQuantity(int $quantity) Return the first Oops_Model_ProductAttribute filtered by the quantity column
 * @method     Oops_Model_ProductAttribute findOneByWeight(double $weight) Return the first Oops_Model_ProductAttribute filtered by the weight column
 * @method     Oops_Model_ProductAttribute findOneByUnitPriceImpact(string $unit_price_impact) Return the first Oops_Model_ProductAttribute filtered by the unit_price_impact column
 * @method     Oops_Model_ProductAttribute findOneByDefaultOn(boolean $default_on) Return the first Oops_Model_ProductAttribute filtered by the default_on column
 * @method     Oops_Model_ProductAttribute findOneByMinimalQuantity(int $minimal_quantity) Return the first Oops_Model_ProductAttribute filtered by the minimal_quantity column
 *
 * @method     array findByIdProductAttribute(int $id_product_attribute) Return Oops_Model_ProductAttribute objects filtered by the id_product_attribute column
 * @method     array findByIdProduct(int $id_product) Return Oops_Model_ProductAttribute objects filtered by the id_product column
 * @method     array findByReference(string $reference) Return Oops_Model_ProductAttribute objects filtered by the reference column
 * @method     array findBySupplierReference(string $supplier_reference) Return Oops_Model_ProductAttribute objects filtered by the supplier_reference column
 * @method     array findByLocation(string $location) Return Oops_Model_ProductAttribute objects filtered by the location column
 * @method     array findByEan13(string $ean13) Return Oops_Model_ProductAttribute objects filtered by the ean13 column
 * @method     array findByUpc(string $upc) Return Oops_Model_ProductAttribute objects filtered by the upc column
 * @method     array findByWholesalePrice(string $wholesale_price) Return Oops_Model_ProductAttribute objects filtered by the wholesale_price column
 * @method     array findByPrice(string $price) Return Oops_Model_ProductAttribute objects filtered by the price column
 * @method     array findByEcotax(string $ecotax) Return Oops_Model_ProductAttribute objects filtered by the ecotax column
 * @method     array findByQuantity(int $quantity) Return Oops_Model_ProductAttribute objects filtered by the quantity column
 * @method     array findByWeight(double $weight) Return Oops_Model_ProductAttribute objects filtered by the weight column
 * @method     array findByUnitPriceImpact(string $unit_price_impact) Return Oops_Model_ProductAttribute objects filtered by the unit_price_impact column
 * @method     array findByDefaultOn(boolean $default_on) Return Oops_Model_ProductAttribute objects filtered by the default_on column
 * @method     array findByMinimalQuantity(int $minimal_quantity) Return Oops_Model_ProductAttribute objects filtered by the minimal_quantity column
 *
 * @package    propel.generator.prestashop.om
 */
abstract class Oops_Model_Base_ProductAttributeQuery extends ModelCriteria
{
	
	/**
	 * Initializes internal state of Oops_Model_Base_ProductAttributeQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'prestashop', $modelName = 'Oops_Model_ProductAttribute', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new Oops_Model_ProductAttributeQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    Oops_Model_ProductAttributeQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof Oops_Model_ProductAttributeQuery) {
			return $criteria;
		}
		$query = new Oops_Model_ProductAttributeQuery();
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
	 * @return    Oops_Model_ProductAttribute|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ($key === null) {
			return null;
		}
		if ((null !== ($obj = Oops_Model_ProductAttributePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
			// the object is alredy in the instance pool
			return $obj;
		}
		if ($con === null) {
			$con = Propel::getConnection(Oops_Model_ProductAttributePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
	 * @return    Oops_Model_ProductAttribute A model object, or null if the key is not found
	 */
	protected function findPkSimple($key, $con)
	{
		$sql = 'SELECT `ID_PRODUCT_ATTRIBUTE`, `ID_PRODUCT`, `REFERENCE`, `SUPPLIER_REFERENCE`, `LOCATION`, `EAN13`, `UPC`, `WHOLESALE_PRICE`, `PRICE`, `ECOTAX`, `QUANTITY`, `WEIGHT`, `UNIT_PRICE_IMPACT`, `DEFAULT_ON`, `MINIMAL_QUANTITY` FROM `' . _DB_PREFIX_ . 'product_attribute` WHERE `ID_PRODUCT_ATTRIBUTE` = :p0';
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
			$obj = new Oops_Model_ProductAttribute();
			$obj->hydrate($row);
			Oops_Model_ProductAttributePeer::addInstanceToPool($obj, (string) $row[0]);
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
	 * @return    Oops_Model_ProductAttribute|array|mixed the result, formatted by the current formatter
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
	 * @return    Oops_Model_ProductAttributeQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(Oops_Model_ProductAttributePeer::ID_PRODUCT_ATTRIBUTE, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    Oops_Model_ProductAttributeQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(Oops_Model_ProductAttributePeer::ID_PRODUCT_ATTRIBUTE, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id_product_attribute column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByIdProductAttribute(1234); // WHERE id_product_attribute = 1234
	 * $query->filterByIdProductAttribute(array(12, 34)); // WHERE id_product_attribute IN (12, 34)
	 * $query->filterByIdProductAttribute(array('min' => 12)); // WHERE id_product_attribute > 12
	 * </code>
	 *
	 * @param     mixed $idProductAttribute The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_ProductAttributeQuery The current query, for fluid interface
	 */
	public function filterByIdProductAttribute($idProductAttribute = null, $comparison = null)
	{
		if (is_array($idProductAttribute) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(Oops_Model_ProductAttributePeer::ID_PRODUCT_ATTRIBUTE, $idProductAttribute, $comparison);
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
	 * @return    Oops_Model_ProductAttributeQuery The current query, for fluid interface
	 */
	public function filterByIdProduct($idProduct = null, $comparison = null)
	{
		if (is_array($idProduct)) {
			$useMinMax = false;
			if (isset($idProduct['min'])) {
				$this->addUsingAlias(Oops_Model_ProductAttributePeer::ID_PRODUCT, $idProduct['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($idProduct['max'])) {
				$this->addUsingAlias(Oops_Model_ProductAttributePeer::ID_PRODUCT, $idProduct['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_ProductAttributePeer::ID_PRODUCT, $idProduct, $comparison);
	}

	/**
	 * Filter the query on the reference column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByReference('fooValue');   // WHERE reference = 'fooValue'
	 * $query->filterByReference('%fooValue%'); // WHERE reference LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $reference The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_ProductAttributeQuery The current query, for fluid interface
	 */
	public function filterByReference($reference = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($reference)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $reference)) {
				$reference = str_replace('*', '%', $reference);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(Oops_Model_ProductAttributePeer::REFERENCE, $reference, $comparison);
	}

	/**
	 * Filter the query on the supplier_reference column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterBySupplierReference('fooValue');   // WHERE supplier_reference = 'fooValue'
	 * $query->filterBySupplierReference('%fooValue%'); // WHERE supplier_reference LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $supplierReference The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_ProductAttributeQuery The current query, for fluid interface
	 */
	public function filterBySupplierReference($supplierReference = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($supplierReference)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $supplierReference)) {
				$supplierReference = str_replace('*', '%', $supplierReference);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(Oops_Model_ProductAttributePeer::SUPPLIER_REFERENCE, $supplierReference, $comparison);
	}

	/**
	 * Filter the query on the location column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByLocation('fooValue');   // WHERE location = 'fooValue'
	 * $query->filterByLocation('%fooValue%'); // WHERE location LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $location The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_ProductAttributeQuery The current query, for fluid interface
	 */
	public function filterByLocation($location = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($location)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $location)) {
				$location = str_replace('*', '%', $location);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(Oops_Model_ProductAttributePeer::LOCATION, $location, $comparison);
	}

	/**
	 * Filter the query on the ean13 column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByEan13('fooValue');   // WHERE ean13 = 'fooValue'
	 * $query->filterByEan13('%fooValue%'); // WHERE ean13 LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $ean13 The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_ProductAttributeQuery The current query, for fluid interface
	 */
	public function filterByEan13($ean13 = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($ean13)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $ean13)) {
				$ean13 = str_replace('*', '%', $ean13);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(Oops_Model_ProductAttributePeer::EAN13, $ean13, $comparison);
	}

	/**
	 * Filter the query on the upc column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByUpc('fooValue');   // WHERE upc = 'fooValue'
	 * $query->filterByUpc('%fooValue%'); // WHERE upc LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $upc The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_ProductAttributeQuery The current query, for fluid interface
	 */
	public function filterByUpc($upc = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($upc)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $upc)) {
				$upc = str_replace('*', '%', $upc);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(Oops_Model_ProductAttributePeer::UPC, $upc, $comparison);
	}

	/**
	 * Filter the query on the wholesale_price column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByWholesalePrice(1234); // WHERE wholesale_price = 1234
	 * $query->filterByWholesalePrice(array(12, 34)); // WHERE wholesale_price IN (12, 34)
	 * $query->filterByWholesalePrice(array('min' => 12)); // WHERE wholesale_price > 12
	 * </code>
	 *
	 * @param     mixed $wholesalePrice The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_ProductAttributeQuery The current query, for fluid interface
	 */
	public function filterByWholesalePrice($wholesalePrice = null, $comparison = null)
	{
		if (is_array($wholesalePrice)) {
			$useMinMax = false;
			if (isset($wholesalePrice['min'])) {
				$this->addUsingAlias(Oops_Model_ProductAttributePeer::WHOLESALE_PRICE, $wholesalePrice['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($wholesalePrice['max'])) {
				$this->addUsingAlias(Oops_Model_ProductAttributePeer::WHOLESALE_PRICE, $wholesalePrice['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_ProductAttributePeer::WHOLESALE_PRICE, $wholesalePrice, $comparison);
	}

	/**
	 * Filter the query on the price column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByPrice(1234); // WHERE price = 1234
	 * $query->filterByPrice(array(12, 34)); // WHERE price IN (12, 34)
	 * $query->filterByPrice(array('min' => 12)); // WHERE price > 12
	 * </code>
	 *
	 * @param     mixed $price The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_ProductAttributeQuery The current query, for fluid interface
	 */
	public function filterByPrice($price = null, $comparison = null)
	{
		if (is_array($price)) {
			$useMinMax = false;
			if (isset($price['min'])) {
				$this->addUsingAlias(Oops_Model_ProductAttributePeer::PRICE, $price['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($price['max'])) {
				$this->addUsingAlias(Oops_Model_ProductAttributePeer::PRICE, $price['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_ProductAttributePeer::PRICE, $price, $comparison);
	}

	/**
	 * Filter the query on the ecotax column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByEcotax(1234); // WHERE ecotax = 1234
	 * $query->filterByEcotax(array(12, 34)); // WHERE ecotax IN (12, 34)
	 * $query->filterByEcotax(array('min' => 12)); // WHERE ecotax > 12
	 * </code>
	 *
	 * @param     mixed $ecotax The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_ProductAttributeQuery The current query, for fluid interface
	 */
	public function filterByEcotax($ecotax = null, $comparison = null)
	{
		if (is_array($ecotax)) {
			$useMinMax = false;
			if (isset($ecotax['min'])) {
				$this->addUsingAlias(Oops_Model_ProductAttributePeer::ECOTAX, $ecotax['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($ecotax['max'])) {
				$this->addUsingAlias(Oops_Model_ProductAttributePeer::ECOTAX, $ecotax['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_ProductAttributePeer::ECOTAX, $ecotax, $comparison);
	}

	/**
	 * Filter the query on the quantity column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByQuantity(1234); // WHERE quantity = 1234
	 * $query->filterByQuantity(array(12, 34)); // WHERE quantity IN (12, 34)
	 * $query->filterByQuantity(array('min' => 12)); // WHERE quantity > 12
	 * </code>
	 *
	 * @param     mixed $quantity The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_ProductAttributeQuery The current query, for fluid interface
	 */
	public function filterByQuantity($quantity = null, $comparison = null)
	{
		if (is_array($quantity)) {
			$useMinMax = false;
			if (isset($quantity['min'])) {
				$this->addUsingAlias(Oops_Model_ProductAttributePeer::QUANTITY, $quantity['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($quantity['max'])) {
				$this->addUsingAlias(Oops_Model_ProductAttributePeer::QUANTITY, $quantity['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_ProductAttributePeer::QUANTITY, $quantity, $comparison);
	}

	/**
	 * Filter the query on the weight column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByWeight(1234); // WHERE weight = 1234
	 * $query->filterByWeight(array(12, 34)); // WHERE weight IN (12, 34)
	 * $query->filterByWeight(array('min' => 12)); // WHERE weight > 12
	 * </code>
	 *
	 * @param     mixed $weight The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_ProductAttributeQuery The current query, for fluid interface
	 */
	public function filterByWeight($weight = null, $comparison = null)
	{
		if (is_array($weight)) {
			$useMinMax = false;
			if (isset($weight['min'])) {
				$this->addUsingAlias(Oops_Model_ProductAttributePeer::WEIGHT, $weight['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($weight['max'])) {
				$this->addUsingAlias(Oops_Model_ProductAttributePeer::WEIGHT, $weight['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_ProductAttributePeer::WEIGHT, $weight, $comparison);
	}

	/**
	 * Filter the query on the unit_price_impact column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByUnitPriceImpact(1234); // WHERE unit_price_impact = 1234
	 * $query->filterByUnitPriceImpact(array(12, 34)); // WHERE unit_price_impact IN (12, 34)
	 * $query->filterByUnitPriceImpact(array('min' => 12)); // WHERE unit_price_impact > 12
	 * </code>
	 *
	 * @param     mixed $unitPriceImpact The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_ProductAttributeQuery The current query, for fluid interface
	 */
	public function filterByUnitPriceImpact($unitPriceImpact = null, $comparison = null)
	{
		if (is_array($unitPriceImpact)) {
			$useMinMax = false;
			if (isset($unitPriceImpact['min'])) {
				$this->addUsingAlias(Oops_Model_ProductAttributePeer::UNIT_PRICE_IMPACT, $unitPriceImpact['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($unitPriceImpact['max'])) {
				$this->addUsingAlias(Oops_Model_ProductAttributePeer::UNIT_PRICE_IMPACT, $unitPriceImpact['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_ProductAttributePeer::UNIT_PRICE_IMPACT, $unitPriceImpact, $comparison);
	}

	/**
	 * Filter the query on the default_on column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByDefaultOn(true); // WHERE default_on = true
	 * $query->filterByDefaultOn('yes'); // WHERE default_on = true
	 * </code>
	 *
	 * @param     boolean|string $defaultOn The value to use as filter.
	 *              Non-boolean arguments are converted using the following rules:
	 *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_ProductAttributeQuery The current query, for fluid interface
	 */
	public function filterByDefaultOn($defaultOn = null, $comparison = null)
	{
		if (is_string($defaultOn)) {
			$default_on = in_array(strtolower($defaultOn), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(Oops_Model_ProductAttributePeer::DEFAULT_ON, $defaultOn, $comparison);
	}

	/**
	 * Filter the query on the minimal_quantity column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByMinimalQuantity(1234); // WHERE minimal_quantity = 1234
	 * $query->filterByMinimalQuantity(array(12, 34)); // WHERE minimal_quantity IN (12, 34)
	 * $query->filterByMinimalQuantity(array('min' => 12)); // WHERE minimal_quantity > 12
	 * </code>
	 *
	 * @param     mixed $minimalQuantity The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_ProductAttributeQuery The current query, for fluid interface
	 */
	public function filterByMinimalQuantity($minimalQuantity = null, $comparison = null)
	{
		if (is_array($minimalQuantity)) {
			$useMinMax = false;
			if (isset($minimalQuantity['min'])) {
				$this->addUsingAlias(Oops_Model_ProductAttributePeer::MINIMAL_QUANTITY, $minimalQuantity['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($minimalQuantity['max'])) {
				$this->addUsingAlias(Oops_Model_ProductAttributePeer::MINIMAL_QUANTITY, $minimalQuantity['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_ProductAttributePeer::MINIMAL_QUANTITY, $minimalQuantity, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     Oops_Model_ProductAttribute $productAttribute Object to remove from the list of results
	 *
	 * @return    Oops_Model_ProductAttributeQuery The current query, for fluid interface
	 */
	public function prune($productAttribute = null)
	{
		if ($productAttribute) {
			$this->addUsingAlias(Oops_Model_ProductAttributePeer::ID_PRODUCT_ATTRIBUTE, $productAttribute->getIdProductAttribute(), Criteria::NOT_EQUAL);
		}

		return $this;
	}

} // Oops_Model_Base_ProductAttributeQuery