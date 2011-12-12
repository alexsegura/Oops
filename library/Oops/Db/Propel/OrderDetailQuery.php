<?php


/**
 * Base class that represents a query for the 'order_detail' table.
 *
 * 
 *
 * @method     Oops_Db_OrderDetailQuery orderByIdOrderDetail($order = Criteria::ASC) Order by the id_order_detail column
 * @method     Oops_Db_OrderDetailQuery orderByIdOrder($order = Criteria::ASC) Order by the id_order column
 * @method     Oops_Db_OrderDetailQuery orderByProductId($order = Criteria::ASC) Order by the product_id column
 * @method     Oops_Db_OrderDetailQuery orderByProductAttributeId($order = Criteria::ASC) Order by the product_attribute_id column
 * @method     Oops_Db_OrderDetailQuery orderByProductName($order = Criteria::ASC) Order by the product_name column
 * @method     Oops_Db_OrderDetailQuery orderByProductQuantity($order = Criteria::ASC) Order by the product_quantity column
 * @method     Oops_Db_OrderDetailQuery orderByProductQuantityInStock($order = Criteria::ASC) Order by the product_quantity_in_stock column
 * @method     Oops_Db_OrderDetailQuery orderByProductQuantityRefunded($order = Criteria::ASC) Order by the product_quantity_refunded column
 * @method     Oops_Db_OrderDetailQuery orderByProductQuantityReturn($order = Criteria::ASC) Order by the product_quantity_return column
 * @method     Oops_Db_OrderDetailQuery orderByProductQuantityReinjected($order = Criteria::ASC) Order by the product_quantity_reinjected column
 * @method     Oops_Db_OrderDetailQuery orderByProductPrice($order = Criteria::ASC) Order by the product_price column
 * @method     Oops_Db_OrderDetailQuery orderByReductionPercent($order = Criteria::ASC) Order by the reduction_percent column
 * @method     Oops_Db_OrderDetailQuery orderByReductionAmount($order = Criteria::ASC) Order by the reduction_amount column
 * @method     Oops_Db_OrderDetailQuery orderByGroupReduction($order = Criteria::ASC) Order by the group_reduction column
 * @method     Oops_Db_OrderDetailQuery orderByProductQuantityDiscount($order = Criteria::ASC) Order by the product_quantity_discount column
 * @method     Oops_Db_OrderDetailQuery orderByProductEan13($order = Criteria::ASC) Order by the product_ean13 column
 * @method     Oops_Db_OrderDetailQuery orderByProductUpc($order = Criteria::ASC) Order by the product_upc column
 * @method     Oops_Db_OrderDetailQuery orderByProductReference($order = Criteria::ASC) Order by the product_reference column
 * @method     Oops_Db_OrderDetailQuery orderByProductSupplierReference($order = Criteria::ASC) Order by the product_supplier_reference column
 * @method     Oops_Db_OrderDetailQuery orderByProductWeight($order = Criteria::ASC) Order by the product_weight column
 * @method     Oops_Db_OrderDetailQuery orderByTaxName($order = Criteria::ASC) Order by the tax_name column
 * @method     Oops_Db_OrderDetailQuery orderByTaxRate($order = Criteria::ASC) Order by the tax_rate column
 * @method     Oops_Db_OrderDetailQuery orderByEcotax($order = Criteria::ASC) Order by the ecotax column
 * @method     Oops_Db_OrderDetailQuery orderByEcotaxTaxRate($order = Criteria::ASC) Order by the ecotax_tax_rate column
 * @method     Oops_Db_OrderDetailQuery orderByDiscountQuantityApplied($order = Criteria::ASC) Order by the discount_quantity_applied column
 * @method     Oops_Db_OrderDetailQuery orderByDownloadHash($order = Criteria::ASC) Order by the download_hash column
 * @method     Oops_Db_OrderDetailQuery orderByDownloadNb($order = Criteria::ASC) Order by the download_nb column
 * @method     Oops_Db_OrderDetailQuery orderByDownloadDeadline($order = Criteria::ASC) Order by the download_deadline column
 *
 * @method     Oops_Db_OrderDetailQuery groupByIdOrderDetail() Group by the id_order_detail column
 * @method     Oops_Db_OrderDetailQuery groupByIdOrder() Group by the id_order column
 * @method     Oops_Db_OrderDetailQuery groupByProductId() Group by the product_id column
 * @method     Oops_Db_OrderDetailQuery groupByProductAttributeId() Group by the product_attribute_id column
 * @method     Oops_Db_OrderDetailQuery groupByProductName() Group by the product_name column
 * @method     Oops_Db_OrderDetailQuery groupByProductQuantity() Group by the product_quantity column
 * @method     Oops_Db_OrderDetailQuery groupByProductQuantityInStock() Group by the product_quantity_in_stock column
 * @method     Oops_Db_OrderDetailQuery groupByProductQuantityRefunded() Group by the product_quantity_refunded column
 * @method     Oops_Db_OrderDetailQuery groupByProductQuantityReturn() Group by the product_quantity_return column
 * @method     Oops_Db_OrderDetailQuery groupByProductQuantityReinjected() Group by the product_quantity_reinjected column
 * @method     Oops_Db_OrderDetailQuery groupByProductPrice() Group by the product_price column
 * @method     Oops_Db_OrderDetailQuery groupByReductionPercent() Group by the reduction_percent column
 * @method     Oops_Db_OrderDetailQuery groupByReductionAmount() Group by the reduction_amount column
 * @method     Oops_Db_OrderDetailQuery groupByGroupReduction() Group by the group_reduction column
 * @method     Oops_Db_OrderDetailQuery groupByProductQuantityDiscount() Group by the product_quantity_discount column
 * @method     Oops_Db_OrderDetailQuery groupByProductEan13() Group by the product_ean13 column
 * @method     Oops_Db_OrderDetailQuery groupByProductUpc() Group by the product_upc column
 * @method     Oops_Db_OrderDetailQuery groupByProductReference() Group by the product_reference column
 * @method     Oops_Db_OrderDetailQuery groupByProductSupplierReference() Group by the product_supplier_reference column
 * @method     Oops_Db_OrderDetailQuery groupByProductWeight() Group by the product_weight column
 * @method     Oops_Db_OrderDetailQuery groupByTaxName() Group by the tax_name column
 * @method     Oops_Db_OrderDetailQuery groupByTaxRate() Group by the tax_rate column
 * @method     Oops_Db_OrderDetailQuery groupByEcotax() Group by the ecotax column
 * @method     Oops_Db_OrderDetailQuery groupByEcotaxTaxRate() Group by the ecotax_tax_rate column
 * @method     Oops_Db_OrderDetailQuery groupByDiscountQuantityApplied() Group by the discount_quantity_applied column
 * @method     Oops_Db_OrderDetailQuery groupByDownloadHash() Group by the download_hash column
 * @method     Oops_Db_OrderDetailQuery groupByDownloadNb() Group by the download_nb column
 * @method     Oops_Db_OrderDetailQuery groupByDownloadDeadline() Group by the download_deadline column
 *
 * @method     Oops_Db_OrderDetailQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     Oops_Db_OrderDetailQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     Oops_Db_OrderDetailQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     Oops_Db_OrderDetail findOne(PropelPDO $con = null) Return the first Oops_Db_OrderDetail matching the query
 * @method     Oops_Db_OrderDetail findOneOrCreate(PropelPDO $con = null) Return the first Oops_Db_OrderDetail matching the query, or a new Oops_Db_OrderDetail object populated from the query conditions when no match is found
 *
 * @method     Oops_Db_OrderDetail findOneByIdOrderDetail(int $id_order_detail) Return the first Oops_Db_OrderDetail filtered by the id_order_detail column
 * @method     Oops_Db_OrderDetail findOneByIdOrder(int $id_order) Return the first Oops_Db_OrderDetail filtered by the id_order column
 * @method     Oops_Db_OrderDetail findOneByProductId(int $product_id) Return the first Oops_Db_OrderDetail filtered by the product_id column
 * @method     Oops_Db_OrderDetail findOneByProductAttributeId(int $product_attribute_id) Return the first Oops_Db_OrderDetail filtered by the product_attribute_id column
 * @method     Oops_Db_OrderDetail findOneByProductName(string $product_name) Return the first Oops_Db_OrderDetail filtered by the product_name column
 * @method     Oops_Db_OrderDetail findOneByProductQuantity(int $product_quantity) Return the first Oops_Db_OrderDetail filtered by the product_quantity column
 * @method     Oops_Db_OrderDetail findOneByProductQuantityInStock(int $product_quantity_in_stock) Return the first Oops_Db_OrderDetail filtered by the product_quantity_in_stock column
 * @method     Oops_Db_OrderDetail findOneByProductQuantityRefunded(int $product_quantity_refunded) Return the first Oops_Db_OrderDetail filtered by the product_quantity_refunded column
 * @method     Oops_Db_OrderDetail findOneByProductQuantityReturn(int $product_quantity_return) Return the first Oops_Db_OrderDetail filtered by the product_quantity_return column
 * @method     Oops_Db_OrderDetail findOneByProductQuantityReinjected(int $product_quantity_reinjected) Return the first Oops_Db_OrderDetail filtered by the product_quantity_reinjected column
 * @method     Oops_Db_OrderDetail findOneByProductPrice(string $product_price) Return the first Oops_Db_OrderDetail filtered by the product_price column
 * @method     Oops_Db_OrderDetail findOneByReductionPercent(string $reduction_percent) Return the first Oops_Db_OrderDetail filtered by the reduction_percent column
 * @method     Oops_Db_OrderDetail findOneByReductionAmount(string $reduction_amount) Return the first Oops_Db_OrderDetail filtered by the reduction_amount column
 * @method     Oops_Db_OrderDetail findOneByGroupReduction(string $group_reduction) Return the first Oops_Db_OrderDetail filtered by the group_reduction column
 * @method     Oops_Db_OrderDetail findOneByProductQuantityDiscount(string $product_quantity_discount) Return the first Oops_Db_OrderDetail filtered by the product_quantity_discount column
 * @method     Oops_Db_OrderDetail findOneByProductEan13(string $product_ean13) Return the first Oops_Db_OrderDetail filtered by the product_ean13 column
 * @method     Oops_Db_OrderDetail findOneByProductUpc(string $product_upc) Return the first Oops_Db_OrderDetail filtered by the product_upc column
 * @method     Oops_Db_OrderDetail findOneByProductReference(string $product_reference) Return the first Oops_Db_OrderDetail filtered by the product_reference column
 * @method     Oops_Db_OrderDetail findOneByProductSupplierReference(string $product_supplier_reference) Return the first Oops_Db_OrderDetail filtered by the product_supplier_reference column
 * @method     Oops_Db_OrderDetail findOneByProductWeight(double $product_weight) Return the first Oops_Db_OrderDetail filtered by the product_weight column
 * @method     Oops_Db_OrderDetail findOneByTaxName(string $tax_name) Return the first Oops_Db_OrderDetail filtered by the tax_name column
 * @method     Oops_Db_OrderDetail findOneByTaxRate(string $tax_rate) Return the first Oops_Db_OrderDetail filtered by the tax_rate column
 * @method     Oops_Db_OrderDetail findOneByEcotax(string $ecotax) Return the first Oops_Db_OrderDetail filtered by the ecotax column
 * @method     Oops_Db_OrderDetail findOneByEcotaxTaxRate(string $ecotax_tax_rate) Return the first Oops_Db_OrderDetail filtered by the ecotax_tax_rate column
 * @method     Oops_Db_OrderDetail findOneByDiscountQuantityApplied(boolean $discount_quantity_applied) Return the first Oops_Db_OrderDetail filtered by the discount_quantity_applied column
 * @method     Oops_Db_OrderDetail findOneByDownloadHash(string $download_hash) Return the first Oops_Db_OrderDetail filtered by the download_hash column
 * @method     Oops_Db_OrderDetail findOneByDownloadNb(int $download_nb) Return the first Oops_Db_OrderDetail filtered by the download_nb column
 * @method     Oops_Db_OrderDetail findOneByDownloadDeadline(string $download_deadline) Return the first Oops_Db_OrderDetail filtered by the download_deadline column
 *
 * @method     array findByIdOrderDetail(int $id_order_detail) Return Oops_Db_OrderDetail objects filtered by the id_order_detail column
 * @method     array findByIdOrder(int $id_order) Return Oops_Db_OrderDetail objects filtered by the id_order column
 * @method     array findByProductId(int $product_id) Return Oops_Db_OrderDetail objects filtered by the product_id column
 * @method     array findByProductAttributeId(int $product_attribute_id) Return Oops_Db_OrderDetail objects filtered by the product_attribute_id column
 * @method     array findByProductName(string $product_name) Return Oops_Db_OrderDetail objects filtered by the product_name column
 * @method     array findByProductQuantity(int $product_quantity) Return Oops_Db_OrderDetail objects filtered by the product_quantity column
 * @method     array findByProductQuantityInStock(int $product_quantity_in_stock) Return Oops_Db_OrderDetail objects filtered by the product_quantity_in_stock column
 * @method     array findByProductQuantityRefunded(int $product_quantity_refunded) Return Oops_Db_OrderDetail objects filtered by the product_quantity_refunded column
 * @method     array findByProductQuantityReturn(int $product_quantity_return) Return Oops_Db_OrderDetail objects filtered by the product_quantity_return column
 * @method     array findByProductQuantityReinjected(int $product_quantity_reinjected) Return Oops_Db_OrderDetail objects filtered by the product_quantity_reinjected column
 * @method     array findByProductPrice(string $product_price) Return Oops_Db_OrderDetail objects filtered by the product_price column
 * @method     array findByReductionPercent(string $reduction_percent) Return Oops_Db_OrderDetail objects filtered by the reduction_percent column
 * @method     array findByReductionAmount(string $reduction_amount) Return Oops_Db_OrderDetail objects filtered by the reduction_amount column
 * @method     array findByGroupReduction(string $group_reduction) Return Oops_Db_OrderDetail objects filtered by the group_reduction column
 * @method     array findByProductQuantityDiscount(string $product_quantity_discount) Return Oops_Db_OrderDetail objects filtered by the product_quantity_discount column
 * @method     array findByProductEan13(string $product_ean13) Return Oops_Db_OrderDetail objects filtered by the product_ean13 column
 * @method     array findByProductUpc(string $product_upc) Return Oops_Db_OrderDetail objects filtered by the product_upc column
 * @method     array findByProductReference(string $product_reference) Return Oops_Db_OrderDetail objects filtered by the product_reference column
 * @method     array findByProductSupplierReference(string $product_supplier_reference) Return Oops_Db_OrderDetail objects filtered by the product_supplier_reference column
 * @method     array findByProductWeight(double $product_weight) Return Oops_Db_OrderDetail objects filtered by the product_weight column
 * @method     array findByTaxName(string $tax_name) Return Oops_Db_OrderDetail objects filtered by the tax_name column
 * @method     array findByTaxRate(string $tax_rate) Return Oops_Db_OrderDetail objects filtered by the tax_rate column
 * @method     array findByEcotax(string $ecotax) Return Oops_Db_OrderDetail objects filtered by the ecotax column
 * @method     array findByEcotaxTaxRate(string $ecotax_tax_rate) Return Oops_Db_OrderDetail objects filtered by the ecotax_tax_rate column
 * @method     array findByDiscountQuantityApplied(boolean $discount_quantity_applied) Return Oops_Db_OrderDetail objects filtered by the discount_quantity_applied column
 * @method     array findByDownloadHash(string $download_hash) Return Oops_Db_OrderDetail objects filtered by the download_hash column
 * @method     array findByDownloadNb(int $download_nb) Return Oops_Db_OrderDetail objects filtered by the download_nb column
 * @method     array findByDownloadDeadline(string $download_deadline) Return Oops_Db_OrderDetail objects filtered by the download_deadline column
 *
 * @package    propel.generator.prestashop.om
 */
abstract class Oops_Db_Propel_OrderDetailQuery extends ModelCriteria
{
	
	/**
	 * Initializes internal state of Oops_Db_Propel_OrderDetailQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'prestashop', $modelName = 'Oops_Db_OrderDetail', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new Oops_Db_OrderDetailQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    Oops_Db_OrderDetailQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof Oops_Db_OrderDetailQuery) {
			return $criteria;
		}
		$query = new Oops_Db_OrderDetailQuery();
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
	 * @return    Oops_Db_OrderDetail|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ($key === null) {
			return null;
		}
		if ((null !== ($obj = Oops_Db_OrderDetailPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
			// the object is alredy in the instance pool
			return $obj;
		}
		if ($con === null) {
			$con = Propel::getConnection(Oops_Db_OrderDetailPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
	 * @return    Oops_Db_OrderDetail A model object, or null if the key is not found
	 */
	protected function findPkSimple($key, $con)
	{
		$sql = 'SELECT `ID_ORDER_DETAIL`, `ID_ORDER`, `PRODUCT_ID`, `PRODUCT_ATTRIBUTE_ID`, `PRODUCT_NAME`, `PRODUCT_QUANTITY`, `PRODUCT_QUANTITY_IN_STOCK`, `PRODUCT_QUANTITY_REFUNDED`, `PRODUCT_QUANTITY_RETURN`, `PRODUCT_QUANTITY_REINJECTED`, `PRODUCT_PRICE`, `REDUCTION_PERCENT`, `REDUCTION_AMOUNT`, `GROUP_REDUCTION`, `PRODUCT_QUANTITY_DISCOUNT`, `PRODUCT_EAN13`, `PRODUCT_UPC`, `PRODUCT_REFERENCE`, `PRODUCT_SUPPLIER_REFERENCE`, `PRODUCT_WEIGHT`, `TAX_NAME`, `TAX_RATE`, `ECOTAX`, `ECOTAX_TAX_RATE`, `DISCOUNT_QUANTITY_APPLIED`, `DOWNLOAD_HASH`, `DOWNLOAD_NB`, `DOWNLOAD_DEADLINE` FROM `' . _DB_PREFIX_ . 'order_detail` WHERE `ID_ORDER_DETAIL` = :p0';
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
			$obj = new Oops_Db_OrderDetail();
			$obj->hydrate($row);
			Oops_Db_OrderDetailPeer::addInstanceToPool($obj, (string) $row[0]);
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
	 * @return    Oops_Db_OrderDetail|array|mixed the result, formatted by the current formatter
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
	 * @return    Oops_Db_OrderDetailQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(Oops_Db_OrderDetailPeer::ID_ORDER_DETAIL, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    Oops_Db_OrderDetailQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(Oops_Db_OrderDetailPeer::ID_ORDER_DETAIL, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id_order_detail column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByIdOrderDetail(1234); // WHERE id_order_detail = 1234
	 * $query->filterByIdOrderDetail(array(12, 34)); // WHERE id_order_detail IN (12, 34)
	 * $query->filterByIdOrderDetail(array('min' => 12)); // WHERE id_order_detail > 12
	 * </code>
	 *
	 * @param     mixed $idOrderDetail The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Db_OrderDetailQuery The current query, for fluid interface
	 */
	public function filterByIdOrderDetail($idOrderDetail = null, $comparison = null)
	{
		if (is_array($idOrderDetail) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(Oops_Db_OrderDetailPeer::ID_ORDER_DETAIL, $idOrderDetail, $comparison);
	}

	/**
	 * Filter the query on the id_order column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByIdOrder(1234); // WHERE id_order = 1234
	 * $query->filterByIdOrder(array(12, 34)); // WHERE id_order IN (12, 34)
	 * $query->filterByIdOrder(array('min' => 12)); // WHERE id_order > 12
	 * </code>
	 *
	 * @param     mixed $idOrder The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Db_OrderDetailQuery The current query, for fluid interface
	 */
	public function filterByIdOrder($idOrder = null, $comparison = null)
	{
		if (is_array($idOrder)) {
			$useMinMax = false;
			if (isset($idOrder['min'])) {
				$this->addUsingAlias(Oops_Db_OrderDetailPeer::ID_ORDER, $idOrder['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($idOrder['max'])) {
				$this->addUsingAlias(Oops_Db_OrderDetailPeer::ID_ORDER, $idOrder['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Db_OrderDetailPeer::ID_ORDER, $idOrder, $comparison);
	}

	/**
	 * Filter the query on the product_id column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByProductId(1234); // WHERE product_id = 1234
	 * $query->filterByProductId(array(12, 34)); // WHERE product_id IN (12, 34)
	 * $query->filterByProductId(array('min' => 12)); // WHERE product_id > 12
	 * </code>
	 *
	 * @param     mixed $productId The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Db_OrderDetailQuery The current query, for fluid interface
	 */
	public function filterByProductId($productId = null, $comparison = null)
	{
		if (is_array($productId)) {
			$useMinMax = false;
			if (isset($productId['min'])) {
				$this->addUsingAlias(Oops_Db_OrderDetailPeer::PRODUCT_ID, $productId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($productId['max'])) {
				$this->addUsingAlias(Oops_Db_OrderDetailPeer::PRODUCT_ID, $productId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Db_OrderDetailPeer::PRODUCT_ID, $productId, $comparison);
	}

	/**
	 * Filter the query on the product_attribute_id column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByProductAttributeId(1234); // WHERE product_attribute_id = 1234
	 * $query->filterByProductAttributeId(array(12, 34)); // WHERE product_attribute_id IN (12, 34)
	 * $query->filterByProductAttributeId(array('min' => 12)); // WHERE product_attribute_id > 12
	 * </code>
	 *
	 * @param     mixed $productAttributeId The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Db_OrderDetailQuery The current query, for fluid interface
	 */
	public function filterByProductAttributeId($productAttributeId = null, $comparison = null)
	{
		if (is_array($productAttributeId)) {
			$useMinMax = false;
			if (isset($productAttributeId['min'])) {
				$this->addUsingAlias(Oops_Db_OrderDetailPeer::PRODUCT_ATTRIBUTE_ID, $productAttributeId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($productAttributeId['max'])) {
				$this->addUsingAlias(Oops_Db_OrderDetailPeer::PRODUCT_ATTRIBUTE_ID, $productAttributeId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Db_OrderDetailPeer::PRODUCT_ATTRIBUTE_ID, $productAttributeId, $comparison);
	}

	/**
	 * Filter the query on the product_name column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByProductName('fooValue');   // WHERE product_name = 'fooValue'
	 * $query->filterByProductName('%fooValue%'); // WHERE product_name LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $productName The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Db_OrderDetailQuery The current query, for fluid interface
	 */
	public function filterByProductName($productName = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($productName)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $productName)) {
				$productName = str_replace('*', '%', $productName);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(Oops_Db_OrderDetailPeer::PRODUCT_NAME, $productName, $comparison);
	}

	/**
	 * Filter the query on the product_quantity column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByProductQuantity(1234); // WHERE product_quantity = 1234
	 * $query->filterByProductQuantity(array(12, 34)); // WHERE product_quantity IN (12, 34)
	 * $query->filterByProductQuantity(array('min' => 12)); // WHERE product_quantity > 12
	 * </code>
	 *
	 * @param     mixed $productQuantity The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Db_OrderDetailQuery The current query, for fluid interface
	 */
	public function filterByProductQuantity($productQuantity = null, $comparison = null)
	{
		if (is_array($productQuantity)) {
			$useMinMax = false;
			if (isset($productQuantity['min'])) {
				$this->addUsingAlias(Oops_Db_OrderDetailPeer::PRODUCT_QUANTITY, $productQuantity['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($productQuantity['max'])) {
				$this->addUsingAlias(Oops_Db_OrderDetailPeer::PRODUCT_QUANTITY, $productQuantity['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Db_OrderDetailPeer::PRODUCT_QUANTITY, $productQuantity, $comparison);
	}

	/**
	 * Filter the query on the product_quantity_in_stock column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByProductQuantityInStock(1234); // WHERE product_quantity_in_stock = 1234
	 * $query->filterByProductQuantityInStock(array(12, 34)); // WHERE product_quantity_in_stock IN (12, 34)
	 * $query->filterByProductQuantityInStock(array('min' => 12)); // WHERE product_quantity_in_stock > 12
	 * </code>
	 *
	 * @param     mixed $productQuantityInStock The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Db_OrderDetailQuery The current query, for fluid interface
	 */
	public function filterByProductQuantityInStock($productQuantityInStock = null, $comparison = null)
	{
		if (is_array($productQuantityInStock)) {
			$useMinMax = false;
			if (isset($productQuantityInStock['min'])) {
				$this->addUsingAlias(Oops_Db_OrderDetailPeer::PRODUCT_QUANTITY_IN_STOCK, $productQuantityInStock['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($productQuantityInStock['max'])) {
				$this->addUsingAlias(Oops_Db_OrderDetailPeer::PRODUCT_QUANTITY_IN_STOCK, $productQuantityInStock['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Db_OrderDetailPeer::PRODUCT_QUANTITY_IN_STOCK, $productQuantityInStock, $comparison);
	}

	/**
	 * Filter the query on the product_quantity_refunded column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByProductQuantityRefunded(1234); // WHERE product_quantity_refunded = 1234
	 * $query->filterByProductQuantityRefunded(array(12, 34)); // WHERE product_quantity_refunded IN (12, 34)
	 * $query->filterByProductQuantityRefunded(array('min' => 12)); // WHERE product_quantity_refunded > 12
	 * </code>
	 *
	 * @param     mixed $productQuantityRefunded The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Db_OrderDetailQuery The current query, for fluid interface
	 */
	public function filterByProductQuantityRefunded($productQuantityRefunded = null, $comparison = null)
	{
		if (is_array($productQuantityRefunded)) {
			$useMinMax = false;
			if (isset($productQuantityRefunded['min'])) {
				$this->addUsingAlias(Oops_Db_OrderDetailPeer::PRODUCT_QUANTITY_REFUNDED, $productQuantityRefunded['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($productQuantityRefunded['max'])) {
				$this->addUsingAlias(Oops_Db_OrderDetailPeer::PRODUCT_QUANTITY_REFUNDED, $productQuantityRefunded['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Db_OrderDetailPeer::PRODUCT_QUANTITY_REFUNDED, $productQuantityRefunded, $comparison);
	}

	/**
	 * Filter the query on the product_quantity_return column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByProductQuantityReturn(1234); // WHERE product_quantity_return = 1234
	 * $query->filterByProductQuantityReturn(array(12, 34)); // WHERE product_quantity_return IN (12, 34)
	 * $query->filterByProductQuantityReturn(array('min' => 12)); // WHERE product_quantity_return > 12
	 * </code>
	 *
	 * @param     mixed $productQuantityReturn The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Db_OrderDetailQuery The current query, for fluid interface
	 */
	public function filterByProductQuantityReturn($productQuantityReturn = null, $comparison = null)
	{
		if (is_array($productQuantityReturn)) {
			$useMinMax = false;
			if (isset($productQuantityReturn['min'])) {
				$this->addUsingAlias(Oops_Db_OrderDetailPeer::PRODUCT_QUANTITY_RETURN, $productQuantityReturn['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($productQuantityReturn['max'])) {
				$this->addUsingAlias(Oops_Db_OrderDetailPeer::PRODUCT_QUANTITY_RETURN, $productQuantityReturn['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Db_OrderDetailPeer::PRODUCT_QUANTITY_RETURN, $productQuantityReturn, $comparison);
	}

	/**
	 * Filter the query on the product_quantity_reinjected column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByProductQuantityReinjected(1234); // WHERE product_quantity_reinjected = 1234
	 * $query->filterByProductQuantityReinjected(array(12, 34)); // WHERE product_quantity_reinjected IN (12, 34)
	 * $query->filterByProductQuantityReinjected(array('min' => 12)); // WHERE product_quantity_reinjected > 12
	 * </code>
	 *
	 * @param     mixed $productQuantityReinjected The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Db_OrderDetailQuery The current query, for fluid interface
	 */
	public function filterByProductQuantityReinjected($productQuantityReinjected = null, $comparison = null)
	{
		if (is_array($productQuantityReinjected)) {
			$useMinMax = false;
			if (isset($productQuantityReinjected['min'])) {
				$this->addUsingAlias(Oops_Db_OrderDetailPeer::PRODUCT_QUANTITY_REINJECTED, $productQuantityReinjected['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($productQuantityReinjected['max'])) {
				$this->addUsingAlias(Oops_Db_OrderDetailPeer::PRODUCT_QUANTITY_REINJECTED, $productQuantityReinjected['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Db_OrderDetailPeer::PRODUCT_QUANTITY_REINJECTED, $productQuantityReinjected, $comparison);
	}

	/**
	 * Filter the query on the product_price column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByProductPrice(1234); // WHERE product_price = 1234
	 * $query->filterByProductPrice(array(12, 34)); // WHERE product_price IN (12, 34)
	 * $query->filterByProductPrice(array('min' => 12)); // WHERE product_price > 12
	 * </code>
	 *
	 * @param     mixed $productPrice The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Db_OrderDetailQuery The current query, for fluid interface
	 */
	public function filterByProductPrice($productPrice = null, $comparison = null)
	{
		if (is_array($productPrice)) {
			$useMinMax = false;
			if (isset($productPrice['min'])) {
				$this->addUsingAlias(Oops_Db_OrderDetailPeer::PRODUCT_PRICE, $productPrice['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($productPrice['max'])) {
				$this->addUsingAlias(Oops_Db_OrderDetailPeer::PRODUCT_PRICE, $productPrice['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Db_OrderDetailPeer::PRODUCT_PRICE, $productPrice, $comparison);
	}

	/**
	 * Filter the query on the reduction_percent column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByReductionPercent(1234); // WHERE reduction_percent = 1234
	 * $query->filterByReductionPercent(array(12, 34)); // WHERE reduction_percent IN (12, 34)
	 * $query->filterByReductionPercent(array('min' => 12)); // WHERE reduction_percent > 12
	 * </code>
	 *
	 * @param     mixed $reductionPercent The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Db_OrderDetailQuery The current query, for fluid interface
	 */
	public function filterByReductionPercent($reductionPercent = null, $comparison = null)
	{
		if (is_array($reductionPercent)) {
			$useMinMax = false;
			if (isset($reductionPercent['min'])) {
				$this->addUsingAlias(Oops_Db_OrderDetailPeer::REDUCTION_PERCENT, $reductionPercent['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($reductionPercent['max'])) {
				$this->addUsingAlias(Oops_Db_OrderDetailPeer::REDUCTION_PERCENT, $reductionPercent['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Db_OrderDetailPeer::REDUCTION_PERCENT, $reductionPercent, $comparison);
	}

	/**
	 * Filter the query on the reduction_amount column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByReductionAmount(1234); // WHERE reduction_amount = 1234
	 * $query->filterByReductionAmount(array(12, 34)); // WHERE reduction_amount IN (12, 34)
	 * $query->filterByReductionAmount(array('min' => 12)); // WHERE reduction_amount > 12
	 * </code>
	 *
	 * @param     mixed $reductionAmount The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Db_OrderDetailQuery The current query, for fluid interface
	 */
	public function filterByReductionAmount($reductionAmount = null, $comparison = null)
	{
		if (is_array($reductionAmount)) {
			$useMinMax = false;
			if (isset($reductionAmount['min'])) {
				$this->addUsingAlias(Oops_Db_OrderDetailPeer::REDUCTION_AMOUNT, $reductionAmount['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($reductionAmount['max'])) {
				$this->addUsingAlias(Oops_Db_OrderDetailPeer::REDUCTION_AMOUNT, $reductionAmount['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Db_OrderDetailPeer::REDUCTION_AMOUNT, $reductionAmount, $comparison);
	}

	/**
	 * Filter the query on the group_reduction column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByGroupReduction(1234); // WHERE group_reduction = 1234
	 * $query->filterByGroupReduction(array(12, 34)); // WHERE group_reduction IN (12, 34)
	 * $query->filterByGroupReduction(array('min' => 12)); // WHERE group_reduction > 12
	 * </code>
	 *
	 * @param     mixed $groupReduction The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Db_OrderDetailQuery The current query, for fluid interface
	 */
	public function filterByGroupReduction($groupReduction = null, $comparison = null)
	{
		if (is_array($groupReduction)) {
			$useMinMax = false;
			if (isset($groupReduction['min'])) {
				$this->addUsingAlias(Oops_Db_OrderDetailPeer::GROUP_REDUCTION, $groupReduction['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($groupReduction['max'])) {
				$this->addUsingAlias(Oops_Db_OrderDetailPeer::GROUP_REDUCTION, $groupReduction['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Db_OrderDetailPeer::GROUP_REDUCTION, $groupReduction, $comparison);
	}

	/**
	 * Filter the query on the product_quantity_discount column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByProductQuantityDiscount(1234); // WHERE product_quantity_discount = 1234
	 * $query->filterByProductQuantityDiscount(array(12, 34)); // WHERE product_quantity_discount IN (12, 34)
	 * $query->filterByProductQuantityDiscount(array('min' => 12)); // WHERE product_quantity_discount > 12
	 * </code>
	 *
	 * @param     mixed $productQuantityDiscount The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Db_OrderDetailQuery The current query, for fluid interface
	 */
	public function filterByProductQuantityDiscount($productQuantityDiscount = null, $comparison = null)
	{
		if (is_array($productQuantityDiscount)) {
			$useMinMax = false;
			if (isset($productQuantityDiscount['min'])) {
				$this->addUsingAlias(Oops_Db_OrderDetailPeer::PRODUCT_QUANTITY_DISCOUNT, $productQuantityDiscount['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($productQuantityDiscount['max'])) {
				$this->addUsingAlias(Oops_Db_OrderDetailPeer::PRODUCT_QUANTITY_DISCOUNT, $productQuantityDiscount['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Db_OrderDetailPeer::PRODUCT_QUANTITY_DISCOUNT, $productQuantityDiscount, $comparison);
	}

	/**
	 * Filter the query on the product_ean13 column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByProductEan13('fooValue');   // WHERE product_ean13 = 'fooValue'
	 * $query->filterByProductEan13('%fooValue%'); // WHERE product_ean13 LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $productEan13 The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Db_OrderDetailQuery The current query, for fluid interface
	 */
	public function filterByProductEan13($productEan13 = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($productEan13)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $productEan13)) {
				$productEan13 = str_replace('*', '%', $productEan13);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(Oops_Db_OrderDetailPeer::PRODUCT_EAN13, $productEan13, $comparison);
	}

	/**
	 * Filter the query on the product_upc column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByProductUpc('fooValue');   // WHERE product_upc = 'fooValue'
	 * $query->filterByProductUpc('%fooValue%'); // WHERE product_upc LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $productUpc The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Db_OrderDetailQuery The current query, for fluid interface
	 */
	public function filterByProductUpc($productUpc = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($productUpc)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $productUpc)) {
				$productUpc = str_replace('*', '%', $productUpc);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(Oops_Db_OrderDetailPeer::PRODUCT_UPC, $productUpc, $comparison);
	}

	/**
	 * Filter the query on the product_reference column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByProductReference('fooValue');   // WHERE product_reference = 'fooValue'
	 * $query->filterByProductReference('%fooValue%'); // WHERE product_reference LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $productReference The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Db_OrderDetailQuery The current query, for fluid interface
	 */
	public function filterByProductReference($productReference = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($productReference)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $productReference)) {
				$productReference = str_replace('*', '%', $productReference);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(Oops_Db_OrderDetailPeer::PRODUCT_REFERENCE, $productReference, $comparison);
	}

	/**
	 * Filter the query on the product_supplier_reference column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByProductSupplierReference('fooValue');   // WHERE product_supplier_reference = 'fooValue'
	 * $query->filterByProductSupplierReference('%fooValue%'); // WHERE product_supplier_reference LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $productSupplierReference The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Db_OrderDetailQuery The current query, for fluid interface
	 */
	public function filterByProductSupplierReference($productSupplierReference = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($productSupplierReference)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $productSupplierReference)) {
				$productSupplierReference = str_replace('*', '%', $productSupplierReference);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(Oops_Db_OrderDetailPeer::PRODUCT_SUPPLIER_REFERENCE, $productSupplierReference, $comparison);
	}

	/**
	 * Filter the query on the product_weight column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByProductWeight(1234); // WHERE product_weight = 1234
	 * $query->filterByProductWeight(array(12, 34)); // WHERE product_weight IN (12, 34)
	 * $query->filterByProductWeight(array('min' => 12)); // WHERE product_weight > 12
	 * </code>
	 *
	 * @param     mixed $productWeight The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Db_OrderDetailQuery The current query, for fluid interface
	 */
	public function filterByProductWeight($productWeight = null, $comparison = null)
	{
		if (is_array($productWeight)) {
			$useMinMax = false;
			if (isset($productWeight['min'])) {
				$this->addUsingAlias(Oops_Db_OrderDetailPeer::PRODUCT_WEIGHT, $productWeight['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($productWeight['max'])) {
				$this->addUsingAlias(Oops_Db_OrderDetailPeer::PRODUCT_WEIGHT, $productWeight['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Db_OrderDetailPeer::PRODUCT_WEIGHT, $productWeight, $comparison);
	}

	/**
	 * Filter the query on the tax_name column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByTaxName('fooValue');   // WHERE tax_name = 'fooValue'
	 * $query->filterByTaxName('%fooValue%'); // WHERE tax_name LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $taxName The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Db_OrderDetailQuery The current query, for fluid interface
	 */
	public function filterByTaxName($taxName = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($taxName)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $taxName)) {
				$taxName = str_replace('*', '%', $taxName);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(Oops_Db_OrderDetailPeer::TAX_NAME, $taxName, $comparison);
	}

	/**
	 * Filter the query on the tax_rate column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByTaxRate(1234); // WHERE tax_rate = 1234
	 * $query->filterByTaxRate(array(12, 34)); // WHERE tax_rate IN (12, 34)
	 * $query->filterByTaxRate(array('min' => 12)); // WHERE tax_rate > 12
	 * </code>
	 *
	 * @param     mixed $taxRate The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Db_OrderDetailQuery The current query, for fluid interface
	 */
	public function filterByTaxRate($taxRate = null, $comparison = null)
	{
		if (is_array($taxRate)) {
			$useMinMax = false;
			if (isset($taxRate['min'])) {
				$this->addUsingAlias(Oops_Db_OrderDetailPeer::TAX_RATE, $taxRate['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($taxRate['max'])) {
				$this->addUsingAlias(Oops_Db_OrderDetailPeer::TAX_RATE, $taxRate['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Db_OrderDetailPeer::TAX_RATE, $taxRate, $comparison);
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
	 * @return    Oops_Db_OrderDetailQuery The current query, for fluid interface
	 */
	public function filterByEcotax($ecotax = null, $comparison = null)
	{
		if (is_array($ecotax)) {
			$useMinMax = false;
			if (isset($ecotax['min'])) {
				$this->addUsingAlias(Oops_Db_OrderDetailPeer::ECOTAX, $ecotax['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($ecotax['max'])) {
				$this->addUsingAlias(Oops_Db_OrderDetailPeer::ECOTAX, $ecotax['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Db_OrderDetailPeer::ECOTAX, $ecotax, $comparison);
	}

	/**
	 * Filter the query on the ecotax_tax_rate column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByEcotaxTaxRate(1234); // WHERE ecotax_tax_rate = 1234
	 * $query->filterByEcotaxTaxRate(array(12, 34)); // WHERE ecotax_tax_rate IN (12, 34)
	 * $query->filterByEcotaxTaxRate(array('min' => 12)); // WHERE ecotax_tax_rate > 12
	 * </code>
	 *
	 * @param     mixed $ecotaxTaxRate The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Db_OrderDetailQuery The current query, for fluid interface
	 */
	public function filterByEcotaxTaxRate($ecotaxTaxRate = null, $comparison = null)
	{
		if (is_array($ecotaxTaxRate)) {
			$useMinMax = false;
			if (isset($ecotaxTaxRate['min'])) {
				$this->addUsingAlias(Oops_Db_OrderDetailPeer::ECOTAX_TAX_RATE, $ecotaxTaxRate['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($ecotaxTaxRate['max'])) {
				$this->addUsingAlias(Oops_Db_OrderDetailPeer::ECOTAX_TAX_RATE, $ecotaxTaxRate['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Db_OrderDetailPeer::ECOTAX_TAX_RATE, $ecotaxTaxRate, $comparison);
	}

	/**
	 * Filter the query on the discount_quantity_applied column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByDiscountQuantityApplied(true); // WHERE discount_quantity_applied = true
	 * $query->filterByDiscountQuantityApplied('yes'); // WHERE discount_quantity_applied = true
	 * </code>
	 *
	 * @param     boolean|string $discountQuantityApplied The value to use as filter.
	 *              Non-boolean arguments are converted using the following rules:
	 *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Db_OrderDetailQuery The current query, for fluid interface
	 */
	public function filterByDiscountQuantityApplied($discountQuantityApplied = null, $comparison = null)
	{
		if (is_string($discountQuantityApplied)) {
			$discount_quantity_applied = in_array(strtolower($discountQuantityApplied), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(Oops_Db_OrderDetailPeer::DISCOUNT_QUANTITY_APPLIED, $discountQuantityApplied, $comparison);
	}

	/**
	 * Filter the query on the download_hash column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByDownloadHash('fooValue');   // WHERE download_hash = 'fooValue'
	 * $query->filterByDownloadHash('%fooValue%'); // WHERE download_hash LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $downloadHash The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Db_OrderDetailQuery The current query, for fluid interface
	 */
	public function filterByDownloadHash($downloadHash = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($downloadHash)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $downloadHash)) {
				$downloadHash = str_replace('*', '%', $downloadHash);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(Oops_Db_OrderDetailPeer::DOWNLOAD_HASH, $downloadHash, $comparison);
	}

	/**
	 * Filter the query on the download_nb column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByDownloadNb(1234); // WHERE download_nb = 1234
	 * $query->filterByDownloadNb(array(12, 34)); // WHERE download_nb IN (12, 34)
	 * $query->filterByDownloadNb(array('min' => 12)); // WHERE download_nb > 12
	 * </code>
	 *
	 * @param     mixed $downloadNb The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Db_OrderDetailQuery The current query, for fluid interface
	 */
	public function filterByDownloadNb($downloadNb = null, $comparison = null)
	{
		if (is_array($downloadNb)) {
			$useMinMax = false;
			if (isset($downloadNb['min'])) {
				$this->addUsingAlias(Oops_Db_OrderDetailPeer::DOWNLOAD_NB, $downloadNb['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($downloadNb['max'])) {
				$this->addUsingAlias(Oops_Db_OrderDetailPeer::DOWNLOAD_NB, $downloadNb['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Db_OrderDetailPeer::DOWNLOAD_NB, $downloadNb, $comparison);
	}

	/**
	 * Filter the query on the download_deadline column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByDownloadDeadline('2011-03-14'); // WHERE download_deadline = '2011-03-14'
	 * $query->filterByDownloadDeadline('now'); // WHERE download_deadline = '2011-03-14'
	 * $query->filterByDownloadDeadline(array('max' => 'yesterday')); // WHERE download_deadline > '2011-03-13'
	 * </code>
	 *
	 * @param     mixed $downloadDeadline The value to use as filter.
	 *              Values can be integers (unix timestamps), DateTime objects, or strings.
	 *              Empty strings are treated as NULL.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Db_OrderDetailQuery The current query, for fluid interface
	 */
	public function filterByDownloadDeadline($downloadDeadline = null, $comparison = null)
	{
		if (is_array($downloadDeadline)) {
			$useMinMax = false;
			if (isset($downloadDeadline['min'])) {
				$this->addUsingAlias(Oops_Db_OrderDetailPeer::DOWNLOAD_DEADLINE, $downloadDeadline['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($downloadDeadline['max'])) {
				$this->addUsingAlias(Oops_Db_OrderDetailPeer::DOWNLOAD_DEADLINE, $downloadDeadline['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Db_OrderDetailPeer::DOWNLOAD_DEADLINE, $downloadDeadline, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     Oops_Db_OrderDetail $orderDetail Object to remove from the list of results
	 *
	 * @return    Oops_Db_OrderDetailQuery The current query, for fluid interface
	 */
	public function prune($orderDetail = null)
	{
		if ($orderDetail) {
			$this->addUsingAlias(Oops_Db_OrderDetailPeer::ID_ORDER_DETAIL, $orderDetail->getIdOrderDetail(), Criteria::NOT_EQUAL);
		}

		return $this;
	}

} // Oops_Db_Propel_OrderDetailQuery