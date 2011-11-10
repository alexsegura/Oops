<?php


/**
 * Base class that represents a query for the 'product' table.
 *
 * 
 *
 * @method     Oops_Model_ProductQuery orderByIdProduct($order = Criteria::ASC) Order by the id_product column
 * @method     Oops_Model_ProductQuery orderByIdSupplier($order = Criteria::ASC) Order by the id_supplier column
 * @method     Oops_Model_ProductQuery orderByIdManufacturer($order = Criteria::ASC) Order by the id_manufacturer column
 * @method     Oops_Model_ProductQuery orderByIdTaxRulesGroup($order = Criteria::ASC) Order by the id_tax_rules_group column
 * @method     Oops_Model_ProductQuery orderByIdCategoryDefault($order = Criteria::ASC) Order by the id_category_default column
 * @method     Oops_Model_ProductQuery orderByIdColorDefault($order = Criteria::ASC) Order by the id_color_default column
 * @method     Oops_Model_ProductQuery orderByOnSale($order = Criteria::ASC) Order by the on_sale column
 * @method     Oops_Model_ProductQuery orderByOnlineOnly($order = Criteria::ASC) Order by the online_only column
 * @method     Oops_Model_ProductQuery orderByEan13($order = Criteria::ASC) Order by the ean13 column
 * @method     Oops_Model_ProductQuery orderByUpc($order = Criteria::ASC) Order by the upc column
 * @method     Oops_Model_ProductQuery orderByEcotax($order = Criteria::ASC) Order by the ecotax column
 * @method     Oops_Model_ProductQuery orderByQuantity($order = Criteria::ASC) Order by the quantity column
 * @method     Oops_Model_ProductQuery orderByMinimalQuantity($order = Criteria::ASC) Order by the minimal_quantity column
 * @method     Oops_Model_ProductQuery orderByPrice($order = Criteria::ASC) Order by the price column
 * @method     Oops_Model_ProductQuery orderByWholesalePrice($order = Criteria::ASC) Order by the wholesale_price column
 * @method     Oops_Model_ProductQuery orderByUnity($order = Criteria::ASC) Order by the unity column
 * @method     Oops_Model_ProductQuery orderByUnitPriceRatio($order = Criteria::ASC) Order by the unit_price_ratio column
 * @method     Oops_Model_ProductQuery orderByAdditionalShippingCost($order = Criteria::ASC) Order by the additional_shipping_cost column
 * @method     Oops_Model_ProductQuery orderByReference($order = Criteria::ASC) Order by the reference column
 * @method     Oops_Model_ProductQuery orderBySupplierReference($order = Criteria::ASC) Order by the supplier_reference column
 * @method     Oops_Model_ProductQuery orderByLocation($order = Criteria::ASC) Order by the location column
 * @method     Oops_Model_ProductQuery orderByWidth($order = Criteria::ASC) Order by the width column
 * @method     Oops_Model_ProductQuery orderByHeight($order = Criteria::ASC) Order by the height column
 * @method     Oops_Model_ProductQuery orderByDepth($order = Criteria::ASC) Order by the depth column
 * @method     Oops_Model_ProductQuery orderByWeight($order = Criteria::ASC) Order by the weight column
 * @method     Oops_Model_ProductQuery orderByOutOfStock($order = Criteria::ASC) Order by the out_of_stock column
 * @method     Oops_Model_ProductQuery orderByQuantityDiscount($order = Criteria::ASC) Order by the quantity_discount column
 * @method     Oops_Model_ProductQuery orderByCustomizable($order = Criteria::ASC) Order by the customizable column
 * @method     Oops_Model_ProductQuery orderByUploadableFiles($order = Criteria::ASC) Order by the uploadable_files column
 * @method     Oops_Model_ProductQuery orderByTextFields($order = Criteria::ASC) Order by the text_fields column
 * @method     Oops_Model_ProductQuery orderByActive($order = Criteria::ASC) Order by the active column
 * @method     Oops_Model_ProductQuery orderByAvailableForOrder($order = Criteria::ASC) Order by the available_for_order column
 * @method     Oops_Model_ProductQuery orderByCondition($order = Criteria::ASC) Order by the condition column
 * @method     Oops_Model_ProductQuery orderByShowPrice($order = Criteria::ASC) Order by the show_price column
 * @method     Oops_Model_ProductQuery orderByIndexed($order = Criteria::ASC) Order by the indexed column
 * @method     Oops_Model_ProductQuery orderByCacheIsPack($order = Criteria::ASC) Order by the cache_is_pack column
 * @method     Oops_Model_ProductQuery orderByCacheHasAttachments($order = Criteria::ASC) Order by the cache_has_attachments column
 * @method     Oops_Model_ProductQuery orderByCacheDefaultAttribute($order = Criteria::ASC) Order by the cache_default_attribute column
 * @method     Oops_Model_ProductQuery orderByDateAdd($order = Criteria::ASC) Order by the date_add column
 * @method     Oops_Model_ProductQuery orderByDateUpd($order = Criteria::ASC) Order by the date_upd column
 *
 * @method     Oops_Model_ProductQuery groupByIdProduct() Group by the id_product column
 * @method     Oops_Model_ProductQuery groupByIdSupplier() Group by the id_supplier column
 * @method     Oops_Model_ProductQuery groupByIdManufacturer() Group by the id_manufacturer column
 * @method     Oops_Model_ProductQuery groupByIdTaxRulesGroup() Group by the id_tax_rules_group column
 * @method     Oops_Model_ProductQuery groupByIdCategoryDefault() Group by the id_category_default column
 * @method     Oops_Model_ProductQuery groupByIdColorDefault() Group by the id_color_default column
 * @method     Oops_Model_ProductQuery groupByOnSale() Group by the on_sale column
 * @method     Oops_Model_ProductQuery groupByOnlineOnly() Group by the online_only column
 * @method     Oops_Model_ProductQuery groupByEan13() Group by the ean13 column
 * @method     Oops_Model_ProductQuery groupByUpc() Group by the upc column
 * @method     Oops_Model_ProductQuery groupByEcotax() Group by the ecotax column
 * @method     Oops_Model_ProductQuery groupByQuantity() Group by the quantity column
 * @method     Oops_Model_ProductQuery groupByMinimalQuantity() Group by the minimal_quantity column
 * @method     Oops_Model_ProductQuery groupByPrice() Group by the price column
 * @method     Oops_Model_ProductQuery groupByWholesalePrice() Group by the wholesale_price column
 * @method     Oops_Model_ProductQuery groupByUnity() Group by the unity column
 * @method     Oops_Model_ProductQuery groupByUnitPriceRatio() Group by the unit_price_ratio column
 * @method     Oops_Model_ProductQuery groupByAdditionalShippingCost() Group by the additional_shipping_cost column
 * @method     Oops_Model_ProductQuery groupByReference() Group by the reference column
 * @method     Oops_Model_ProductQuery groupBySupplierReference() Group by the supplier_reference column
 * @method     Oops_Model_ProductQuery groupByLocation() Group by the location column
 * @method     Oops_Model_ProductQuery groupByWidth() Group by the width column
 * @method     Oops_Model_ProductQuery groupByHeight() Group by the height column
 * @method     Oops_Model_ProductQuery groupByDepth() Group by the depth column
 * @method     Oops_Model_ProductQuery groupByWeight() Group by the weight column
 * @method     Oops_Model_ProductQuery groupByOutOfStock() Group by the out_of_stock column
 * @method     Oops_Model_ProductQuery groupByQuantityDiscount() Group by the quantity_discount column
 * @method     Oops_Model_ProductQuery groupByCustomizable() Group by the customizable column
 * @method     Oops_Model_ProductQuery groupByUploadableFiles() Group by the uploadable_files column
 * @method     Oops_Model_ProductQuery groupByTextFields() Group by the text_fields column
 * @method     Oops_Model_ProductQuery groupByActive() Group by the active column
 * @method     Oops_Model_ProductQuery groupByAvailableForOrder() Group by the available_for_order column
 * @method     Oops_Model_ProductQuery groupByCondition() Group by the condition column
 * @method     Oops_Model_ProductQuery groupByShowPrice() Group by the show_price column
 * @method     Oops_Model_ProductQuery groupByIndexed() Group by the indexed column
 * @method     Oops_Model_ProductQuery groupByCacheIsPack() Group by the cache_is_pack column
 * @method     Oops_Model_ProductQuery groupByCacheHasAttachments() Group by the cache_has_attachments column
 * @method     Oops_Model_ProductQuery groupByCacheDefaultAttribute() Group by the cache_default_attribute column
 * @method     Oops_Model_ProductQuery groupByDateAdd() Group by the date_add column
 * @method     Oops_Model_ProductQuery groupByDateUpd() Group by the date_upd column
 *
 * @method     Oops_Model_ProductQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     Oops_Model_ProductQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     Oops_Model_ProductQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     Oops_Model_ProductQuery leftJoinCategoryProduct($relationAlias = null) Adds a LEFT JOIN clause to the query using the CategoryProduct relation
 * @method     Oops_Model_ProductQuery rightJoinCategoryProduct($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CategoryProduct relation
 * @method     Oops_Model_ProductQuery innerJoinCategoryProduct($relationAlias = null) Adds a INNER JOIN clause to the query using the CategoryProduct relation
 *
 * @method     Oops_Model_ProductQuery leftJoinImage($relationAlias = null) Adds a LEFT JOIN clause to the query using the Image relation
 * @method     Oops_Model_ProductQuery rightJoinImage($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Image relation
 * @method     Oops_Model_ProductQuery innerJoinImage($relationAlias = null) Adds a INNER JOIN clause to the query using the Image relation
 *
 * @method     Oops_Model_ProductQuery leftJoinProductLang($relationAlias = null) Adds a LEFT JOIN clause to the query using the ProductLang relation
 * @method     Oops_Model_ProductQuery rightJoinProductLang($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ProductLang relation
 * @method     Oops_Model_ProductQuery innerJoinProductLang($relationAlias = null) Adds a INNER JOIN clause to the query using the ProductLang relation
 *
 * @method     Oops_Model_ProductQuery leftJoinStockMvt($relationAlias = null) Adds a LEFT JOIN clause to the query using the StockMvt relation
 * @method     Oops_Model_ProductQuery rightJoinStockMvt($relationAlias = null) Adds a RIGHT JOIN clause to the query using the StockMvt relation
 * @method     Oops_Model_ProductQuery innerJoinStockMvt($relationAlias = null) Adds a INNER JOIN clause to the query using the StockMvt relation
 *
 * @method     Oops_Model_ProductQuery leftJoinSupplier($relationAlias = null) Adds a LEFT JOIN clause to the query using the Supplier relation
 * @method     Oops_Model_ProductQuery rightJoinSupplier($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Supplier relation
 * @method     Oops_Model_ProductQuery innerJoinSupplier($relationAlias = null) Adds a INNER JOIN clause to the query using the Supplier relation
 *
 * @method     Oops_Model_Product findOne(PropelPDO $con = null) Return the first Oops_Model_Product matching the query
 * @method     Oops_Model_Product findOneOrCreate(PropelPDO $con = null) Return the first Oops_Model_Product matching the query, or a new Oops_Model_Product object populated from the query conditions when no match is found
 *
 * @method     Oops_Model_Product findOneByIdProduct(int $id_product) Return the first Oops_Model_Product filtered by the id_product column
 * @method     Oops_Model_Product findOneByIdSupplier(int $id_supplier) Return the first Oops_Model_Product filtered by the id_supplier column
 * @method     Oops_Model_Product findOneByIdManufacturer(int $id_manufacturer) Return the first Oops_Model_Product filtered by the id_manufacturer column
 * @method     Oops_Model_Product findOneByIdTaxRulesGroup(int $id_tax_rules_group) Return the first Oops_Model_Product filtered by the id_tax_rules_group column
 * @method     Oops_Model_Product findOneByIdCategoryDefault(int $id_category_default) Return the first Oops_Model_Product filtered by the id_category_default column
 * @method     Oops_Model_Product findOneByIdColorDefault(int $id_color_default) Return the first Oops_Model_Product filtered by the id_color_default column
 * @method     Oops_Model_Product findOneByOnSale(boolean $on_sale) Return the first Oops_Model_Product filtered by the on_sale column
 * @method     Oops_Model_Product findOneByOnlineOnly(boolean $online_only) Return the first Oops_Model_Product filtered by the online_only column
 * @method     Oops_Model_Product findOneByEan13(string $ean13) Return the first Oops_Model_Product filtered by the ean13 column
 * @method     Oops_Model_Product findOneByUpc(string $upc) Return the first Oops_Model_Product filtered by the upc column
 * @method     Oops_Model_Product findOneByEcotax(string $ecotax) Return the first Oops_Model_Product filtered by the ecotax column
 * @method     Oops_Model_Product findOneByQuantity(int $quantity) Return the first Oops_Model_Product filtered by the quantity column
 * @method     Oops_Model_Product findOneByMinimalQuantity(int $minimal_quantity) Return the first Oops_Model_Product filtered by the minimal_quantity column
 * @method     Oops_Model_Product findOneByPrice(string $price) Return the first Oops_Model_Product filtered by the price column
 * @method     Oops_Model_Product findOneByWholesalePrice(string $wholesale_price) Return the first Oops_Model_Product filtered by the wholesale_price column
 * @method     Oops_Model_Product findOneByUnity(string $unity) Return the first Oops_Model_Product filtered by the unity column
 * @method     Oops_Model_Product findOneByUnitPriceRatio(string $unit_price_ratio) Return the first Oops_Model_Product filtered by the unit_price_ratio column
 * @method     Oops_Model_Product findOneByAdditionalShippingCost(string $additional_shipping_cost) Return the first Oops_Model_Product filtered by the additional_shipping_cost column
 * @method     Oops_Model_Product findOneByReference(string $reference) Return the first Oops_Model_Product filtered by the reference column
 * @method     Oops_Model_Product findOneBySupplierReference(string $supplier_reference) Return the first Oops_Model_Product filtered by the supplier_reference column
 * @method     Oops_Model_Product findOneByLocation(string $location) Return the first Oops_Model_Product filtered by the location column
 * @method     Oops_Model_Product findOneByWidth(double $width) Return the first Oops_Model_Product filtered by the width column
 * @method     Oops_Model_Product findOneByHeight(double $height) Return the first Oops_Model_Product filtered by the height column
 * @method     Oops_Model_Product findOneByDepth(double $depth) Return the first Oops_Model_Product filtered by the depth column
 * @method     Oops_Model_Product findOneByWeight(double $weight) Return the first Oops_Model_Product filtered by the weight column
 * @method     Oops_Model_Product findOneByOutOfStock(int $out_of_stock) Return the first Oops_Model_Product filtered by the out_of_stock column
 * @method     Oops_Model_Product findOneByQuantityDiscount(boolean $quantity_discount) Return the first Oops_Model_Product filtered by the quantity_discount column
 * @method     Oops_Model_Product findOneByCustomizable(int $customizable) Return the first Oops_Model_Product filtered by the customizable column
 * @method     Oops_Model_Product findOneByUploadableFiles(int $uploadable_files) Return the first Oops_Model_Product filtered by the uploadable_files column
 * @method     Oops_Model_Product findOneByTextFields(int $text_fields) Return the first Oops_Model_Product filtered by the text_fields column
 * @method     Oops_Model_Product findOneByActive(boolean $active) Return the first Oops_Model_Product filtered by the active column
 * @method     Oops_Model_Product findOneByAvailableForOrder(boolean $available_for_order) Return the first Oops_Model_Product filtered by the available_for_order column
 * @method     Oops_Model_Product findOneByCondition(string $condition) Return the first Oops_Model_Product filtered by the condition column
 * @method     Oops_Model_Product findOneByShowPrice(boolean $show_price) Return the first Oops_Model_Product filtered by the show_price column
 * @method     Oops_Model_Product findOneByIndexed(boolean $indexed) Return the first Oops_Model_Product filtered by the indexed column
 * @method     Oops_Model_Product findOneByCacheIsPack(boolean $cache_is_pack) Return the first Oops_Model_Product filtered by the cache_is_pack column
 * @method     Oops_Model_Product findOneByCacheHasAttachments(boolean $cache_has_attachments) Return the first Oops_Model_Product filtered by the cache_has_attachments column
 * @method     Oops_Model_Product findOneByCacheDefaultAttribute(int $cache_default_attribute) Return the first Oops_Model_Product filtered by the cache_default_attribute column
 * @method     Oops_Model_Product findOneByDateAdd(string $date_add) Return the first Oops_Model_Product filtered by the date_add column
 * @method     Oops_Model_Product findOneByDateUpd(string $date_upd) Return the first Oops_Model_Product filtered by the date_upd column
 *
 * @method     array findByIdProduct(int $id_product) Return Oops_Model_Product objects filtered by the id_product column
 * @method     array findByIdSupplier(int $id_supplier) Return Oops_Model_Product objects filtered by the id_supplier column
 * @method     array findByIdManufacturer(int $id_manufacturer) Return Oops_Model_Product objects filtered by the id_manufacturer column
 * @method     array findByIdTaxRulesGroup(int $id_tax_rules_group) Return Oops_Model_Product objects filtered by the id_tax_rules_group column
 * @method     array findByIdCategoryDefault(int $id_category_default) Return Oops_Model_Product objects filtered by the id_category_default column
 * @method     array findByIdColorDefault(int $id_color_default) Return Oops_Model_Product objects filtered by the id_color_default column
 * @method     array findByOnSale(boolean $on_sale) Return Oops_Model_Product objects filtered by the on_sale column
 * @method     array findByOnlineOnly(boolean $online_only) Return Oops_Model_Product objects filtered by the online_only column
 * @method     array findByEan13(string $ean13) Return Oops_Model_Product objects filtered by the ean13 column
 * @method     array findByUpc(string $upc) Return Oops_Model_Product objects filtered by the upc column
 * @method     array findByEcotax(string $ecotax) Return Oops_Model_Product objects filtered by the ecotax column
 * @method     array findByQuantity(int $quantity) Return Oops_Model_Product objects filtered by the quantity column
 * @method     array findByMinimalQuantity(int $minimal_quantity) Return Oops_Model_Product objects filtered by the minimal_quantity column
 * @method     array findByPrice(string $price) Return Oops_Model_Product objects filtered by the price column
 * @method     array findByWholesalePrice(string $wholesale_price) Return Oops_Model_Product objects filtered by the wholesale_price column
 * @method     array findByUnity(string $unity) Return Oops_Model_Product objects filtered by the unity column
 * @method     array findByUnitPriceRatio(string $unit_price_ratio) Return Oops_Model_Product objects filtered by the unit_price_ratio column
 * @method     array findByAdditionalShippingCost(string $additional_shipping_cost) Return Oops_Model_Product objects filtered by the additional_shipping_cost column
 * @method     array findByReference(string $reference) Return Oops_Model_Product objects filtered by the reference column
 * @method     array findBySupplierReference(string $supplier_reference) Return Oops_Model_Product objects filtered by the supplier_reference column
 * @method     array findByLocation(string $location) Return Oops_Model_Product objects filtered by the location column
 * @method     array findByWidth(double $width) Return Oops_Model_Product objects filtered by the width column
 * @method     array findByHeight(double $height) Return Oops_Model_Product objects filtered by the height column
 * @method     array findByDepth(double $depth) Return Oops_Model_Product objects filtered by the depth column
 * @method     array findByWeight(double $weight) Return Oops_Model_Product objects filtered by the weight column
 * @method     array findByOutOfStock(int $out_of_stock) Return Oops_Model_Product objects filtered by the out_of_stock column
 * @method     array findByQuantityDiscount(boolean $quantity_discount) Return Oops_Model_Product objects filtered by the quantity_discount column
 * @method     array findByCustomizable(int $customizable) Return Oops_Model_Product objects filtered by the customizable column
 * @method     array findByUploadableFiles(int $uploadable_files) Return Oops_Model_Product objects filtered by the uploadable_files column
 * @method     array findByTextFields(int $text_fields) Return Oops_Model_Product objects filtered by the text_fields column
 * @method     array findByActive(boolean $active) Return Oops_Model_Product objects filtered by the active column
 * @method     array findByAvailableForOrder(boolean $available_for_order) Return Oops_Model_Product objects filtered by the available_for_order column
 * @method     array findByCondition(string $condition) Return Oops_Model_Product objects filtered by the condition column
 * @method     array findByShowPrice(boolean $show_price) Return Oops_Model_Product objects filtered by the show_price column
 * @method     array findByIndexed(boolean $indexed) Return Oops_Model_Product objects filtered by the indexed column
 * @method     array findByCacheIsPack(boolean $cache_is_pack) Return Oops_Model_Product objects filtered by the cache_is_pack column
 * @method     array findByCacheHasAttachments(boolean $cache_has_attachments) Return Oops_Model_Product objects filtered by the cache_has_attachments column
 * @method     array findByCacheDefaultAttribute(int $cache_default_attribute) Return Oops_Model_Product objects filtered by the cache_default_attribute column
 * @method     array findByDateAdd(string $date_add) Return Oops_Model_Product objects filtered by the date_add column
 * @method     array findByDateUpd(string $date_upd) Return Oops_Model_Product objects filtered by the date_upd column
 *
 * @package    propel.generator.prestashop.om
 */
abstract class Oops_Model_Base_ProductQuery extends ModelCriteria
{
	
	/**
	 * Initializes internal state of Oops_Model_Base_ProductQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'prestashop', $modelName = 'Oops_Model_Product', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new Oops_Model_ProductQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    Oops_Model_ProductQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof Oops_Model_ProductQuery) {
			return $criteria;
		}
		$query = new Oops_Model_ProductQuery();
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
	 * @return    Oops_Model_Product|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ($key === null) {
			return null;
		}
		if ((null !== ($obj = Oops_Model_ProductPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
			// the object is alredy in the instance pool
			return $obj;
		}
		if ($con === null) {
			$con = Propel::getConnection(Oops_Model_ProductPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
	 * @return    Oops_Model_Product A model object, or null if the key is not found
	 */
	protected function findPkSimple($key, $con)
	{
		$sql = 'SELECT `ID_PRODUCT`, `ID_SUPPLIER`, `ID_MANUFACTURER`, `ID_TAX_RULES_GROUP`, `ID_CATEGORY_DEFAULT`, `ID_COLOR_DEFAULT`, `ON_SALE`, `ONLINE_ONLY`, `EAN13`, `UPC`, `ECOTAX`, `QUANTITY`, `MINIMAL_QUANTITY`, `PRICE`, `WHOLESALE_PRICE`, `UNITY`, `UNIT_PRICE_RATIO`, `ADDITIONAL_SHIPPING_COST`, `REFERENCE`, `SUPPLIER_REFERENCE`, `LOCATION`, `WIDTH`, `HEIGHT`, `DEPTH`, `WEIGHT`, `OUT_OF_STOCK`, `QUANTITY_DISCOUNT`, `CUSTOMIZABLE`, `UPLOADABLE_FILES`, `TEXT_FIELDS`, `ACTIVE`, `AVAILABLE_FOR_ORDER`, `CONDITION`, `SHOW_PRICE`, `INDEXED`, `CACHE_IS_PACK`, `CACHE_HAS_ATTACHMENTS`, `CACHE_DEFAULT_ATTRIBUTE`, `DATE_ADD`, `DATE_UPD` FROM `' . _DB_PREFIX_ . 'product` WHERE `ID_PRODUCT` = :p0';
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
			$obj = new Oops_Model_Product();
			$obj->hydrate($row);
			Oops_Model_ProductPeer::addInstanceToPool($obj, (string) $row[0]);
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
	 * @return    Oops_Model_Product|array|mixed the result, formatted by the current formatter
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
	 * @return    Oops_Model_ProductQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(Oops_Model_ProductPeer::ID_PRODUCT, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    Oops_Model_ProductQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(Oops_Model_ProductPeer::ID_PRODUCT, $keys, Criteria::IN);
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
	 * @return    Oops_Model_ProductQuery The current query, for fluid interface
	 */
	public function filterByIdProduct($idProduct = null, $comparison = null)
	{
		if (is_array($idProduct) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(Oops_Model_ProductPeer::ID_PRODUCT, $idProduct, $comparison);
	}

	/**
	 * Filter the query on the id_supplier column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByIdSupplier(1234); // WHERE id_supplier = 1234
	 * $query->filterByIdSupplier(array(12, 34)); // WHERE id_supplier IN (12, 34)
	 * $query->filterByIdSupplier(array('min' => 12)); // WHERE id_supplier > 12
	 * </code>
	 *
	 * @param     mixed $idSupplier The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_ProductQuery The current query, for fluid interface
	 */
	public function filterByIdSupplier($idSupplier = null, $comparison = null)
	{
		if (is_array($idSupplier)) {
			$useMinMax = false;
			if (isset($idSupplier['min'])) {
				$this->addUsingAlias(Oops_Model_ProductPeer::ID_SUPPLIER, $idSupplier['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($idSupplier['max'])) {
				$this->addUsingAlias(Oops_Model_ProductPeer::ID_SUPPLIER, $idSupplier['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_ProductPeer::ID_SUPPLIER, $idSupplier, $comparison);
	}

	/**
	 * Filter the query on the id_manufacturer column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByIdManufacturer(1234); // WHERE id_manufacturer = 1234
	 * $query->filterByIdManufacturer(array(12, 34)); // WHERE id_manufacturer IN (12, 34)
	 * $query->filterByIdManufacturer(array('min' => 12)); // WHERE id_manufacturer > 12
	 * </code>
	 *
	 * @param     mixed $idManufacturer The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_ProductQuery The current query, for fluid interface
	 */
	public function filterByIdManufacturer($idManufacturer = null, $comparison = null)
	{
		if (is_array($idManufacturer)) {
			$useMinMax = false;
			if (isset($idManufacturer['min'])) {
				$this->addUsingAlias(Oops_Model_ProductPeer::ID_MANUFACTURER, $idManufacturer['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($idManufacturer['max'])) {
				$this->addUsingAlias(Oops_Model_ProductPeer::ID_MANUFACTURER, $idManufacturer['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_ProductPeer::ID_MANUFACTURER, $idManufacturer, $comparison);
	}

	/**
	 * Filter the query on the id_tax_rules_group column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByIdTaxRulesGroup(1234); // WHERE id_tax_rules_group = 1234
	 * $query->filterByIdTaxRulesGroup(array(12, 34)); // WHERE id_tax_rules_group IN (12, 34)
	 * $query->filterByIdTaxRulesGroup(array('min' => 12)); // WHERE id_tax_rules_group > 12
	 * </code>
	 *
	 * @param     mixed $idTaxRulesGroup The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_ProductQuery The current query, for fluid interface
	 */
	public function filterByIdTaxRulesGroup($idTaxRulesGroup = null, $comparison = null)
	{
		if (is_array($idTaxRulesGroup)) {
			$useMinMax = false;
			if (isset($idTaxRulesGroup['min'])) {
				$this->addUsingAlias(Oops_Model_ProductPeer::ID_TAX_RULES_GROUP, $idTaxRulesGroup['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($idTaxRulesGroup['max'])) {
				$this->addUsingAlias(Oops_Model_ProductPeer::ID_TAX_RULES_GROUP, $idTaxRulesGroup['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_ProductPeer::ID_TAX_RULES_GROUP, $idTaxRulesGroup, $comparison);
	}

	/**
	 * Filter the query on the id_category_default column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByIdCategoryDefault(1234); // WHERE id_category_default = 1234
	 * $query->filterByIdCategoryDefault(array(12, 34)); // WHERE id_category_default IN (12, 34)
	 * $query->filterByIdCategoryDefault(array('min' => 12)); // WHERE id_category_default > 12
	 * </code>
	 *
	 * @param     mixed $idCategoryDefault The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_ProductQuery The current query, for fluid interface
	 */
	public function filterByIdCategoryDefault($idCategoryDefault = null, $comparison = null)
	{
		if (is_array($idCategoryDefault)) {
			$useMinMax = false;
			if (isset($idCategoryDefault['min'])) {
				$this->addUsingAlias(Oops_Model_ProductPeer::ID_CATEGORY_DEFAULT, $idCategoryDefault['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($idCategoryDefault['max'])) {
				$this->addUsingAlias(Oops_Model_ProductPeer::ID_CATEGORY_DEFAULT, $idCategoryDefault['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_ProductPeer::ID_CATEGORY_DEFAULT, $idCategoryDefault, $comparison);
	}

	/**
	 * Filter the query on the id_color_default column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByIdColorDefault(1234); // WHERE id_color_default = 1234
	 * $query->filterByIdColorDefault(array(12, 34)); // WHERE id_color_default IN (12, 34)
	 * $query->filterByIdColorDefault(array('min' => 12)); // WHERE id_color_default > 12
	 * </code>
	 *
	 * @param     mixed $idColorDefault The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_ProductQuery The current query, for fluid interface
	 */
	public function filterByIdColorDefault($idColorDefault = null, $comparison = null)
	{
		if (is_array($idColorDefault)) {
			$useMinMax = false;
			if (isset($idColorDefault['min'])) {
				$this->addUsingAlias(Oops_Model_ProductPeer::ID_COLOR_DEFAULT, $idColorDefault['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($idColorDefault['max'])) {
				$this->addUsingAlias(Oops_Model_ProductPeer::ID_COLOR_DEFAULT, $idColorDefault['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_ProductPeer::ID_COLOR_DEFAULT, $idColorDefault, $comparison);
	}

	/**
	 * Filter the query on the on_sale column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByOnSale(true); // WHERE on_sale = true
	 * $query->filterByOnSale('yes'); // WHERE on_sale = true
	 * </code>
	 *
	 * @param     boolean|string $onSale The value to use as filter.
	 *              Non-boolean arguments are converted using the following rules:
	 *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_ProductQuery The current query, for fluid interface
	 */
	public function filterByOnSale($onSale = null, $comparison = null)
	{
		if (is_string($onSale)) {
			$on_sale = in_array(strtolower($onSale), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(Oops_Model_ProductPeer::ON_SALE, $onSale, $comparison);
	}

	/**
	 * Filter the query on the online_only column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByOnlineOnly(true); // WHERE online_only = true
	 * $query->filterByOnlineOnly('yes'); // WHERE online_only = true
	 * </code>
	 *
	 * @param     boolean|string $onlineOnly The value to use as filter.
	 *              Non-boolean arguments are converted using the following rules:
	 *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_ProductQuery The current query, for fluid interface
	 */
	public function filterByOnlineOnly($onlineOnly = null, $comparison = null)
	{
		if (is_string($onlineOnly)) {
			$online_only = in_array(strtolower($onlineOnly), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(Oops_Model_ProductPeer::ONLINE_ONLY, $onlineOnly, $comparison);
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
	 * @return    Oops_Model_ProductQuery The current query, for fluid interface
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
		return $this->addUsingAlias(Oops_Model_ProductPeer::EAN13, $ean13, $comparison);
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
	 * @return    Oops_Model_ProductQuery The current query, for fluid interface
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
		return $this->addUsingAlias(Oops_Model_ProductPeer::UPC, $upc, $comparison);
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
	 * @return    Oops_Model_ProductQuery The current query, for fluid interface
	 */
	public function filterByEcotax($ecotax = null, $comparison = null)
	{
		if (is_array($ecotax)) {
			$useMinMax = false;
			if (isset($ecotax['min'])) {
				$this->addUsingAlias(Oops_Model_ProductPeer::ECOTAX, $ecotax['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($ecotax['max'])) {
				$this->addUsingAlias(Oops_Model_ProductPeer::ECOTAX, $ecotax['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_ProductPeer::ECOTAX, $ecotax, $comparison);
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
	 * @return    Oops_Model_ProductQuery The current query, for fluid interface
	 */
	public function filterByQuantity($quantity = null, $comparison = null)
	{
		if (is_array($quantity)) {
			$useMinMax = false;
			if (isset($quantity['min'])) {
				$this->addUsingAlias(Oops_Model_ProductPeer::QUANTITY, $quantity['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($quantity['max'])) {
				$this->addUsingAlias(Oops_Model_ProductPeer::QUANTITY, $quantity['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_ProductPeer::QUANTITY, $quantity, $comparison);
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
	 * @return    Oops_Model_ProductQuery The current query, for fluid interface
	 */
	public function filterByMinimalQuantity($minimalQuantity = null, $comparison = null)
	{
		if (is_array($minimalQuantity)) {
			$useMinMax = false;
			if (isset($minimalQuantity['min'])) {
				$this->addUsingAlias(Oops_Model_ProductPeer::MINIMAL_QUANTITY, $minimalQuantity['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($minimalQuantity['max'])) {
				$this->addUsingAlias(Oops_Model_ProductPeer::MINIMAL_QUANTITY, $minimalQuantity['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_ProductPeer::MINIMAL_QUANTITY, $minimalQuantity, $comparison);
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
	 * @return    Oops_Model_ProductQuery The current query, for fluid interface
	 */
	public function filterByPrice($price = null, $comparison = null)
	{
		if (is_array($price)) {
			$useMinMax = false;
			if (isset($price['min'])) {
				$this->addUsingAlias(Oops_Model_ProductPeer::PRICE, $price['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($price['max'])) {
				$this->addUsingAlias(Oops_Model_ProductPeer::PRICE, $price['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_ProductPeer::PRICE, $price, $comparison);
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
	 * @return    Oops_Model_ProductQuery The current query, for fluid interface
	 */
	public function filterByWholesalePrice($wholesalePrice = null, $comparison = null)
	{
		if (is_array($wholesalePrice)) {
			$useMinMax = false;
			if (isset($wholesalePrice['min'])) {
				$this->addUsingAlias(Oops_Model_ProductPeer::WHOLESALE_PRICE, $wholesalePrice['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($wholesalePrice['max'])) {
				$this->addUsingAlias(Oops_Model_ProductPeer::WHOLESALE_PRICE, $wholesalePrice['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_ProductPeer::WHOLESALE_PRICE, $wholesalePrice, $comparison);
	}

	/**
	 * Filter the query on the unity column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByUnity('fooValue');   // WHERE unity = 'fooValue'
	 * $query->filterByUnity('%fooValue%'); // WHERE unity LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $unity The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_ProductQuery The current query, for fluid interface
	 */
	public function filterByUnity($unity = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($unity)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $unity)) {
				$unity = str_replace('*', '%', $unity);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(Oops_Model_ProductPeer::UNITY, $unity, $comparison);
	}

	/**
	 * Filter the query on the unit_price_ratio column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByUnitPriceRatio(1234); // WHERE unit_price_ratio = 1234
	 * $query->filterByUnitPriceRatio(array(12, 34)); // WHERE unit_price_ratio IN (12, 34)
	 * $query->filterByUnitPriceRatio(array('min' => 12)); // WHERE unit_price_ratio > 12
	 * </code>
	 *
	 * @param     mixed $unitPriceRatio The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_ProductQuery The current query, for fluid interface
	 */
	public function filterByUnitPriceRatio($unitPriceRatio = null, $comparison = null)
	{
		if (is_array($unitPriceRatio)) {
			$useMinMax = false;
			if (isset($unitPriceRatio['min'])) {
				$this->addUsingAlias(Oops_Model_ProductPeer::UNIT_PRICE_RATIO, $unitPriceRatio['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($unitPriceRatio['max'])) {
				$this->addUsingAlias(Oops_Model_ProductPeer::UNIT_PRICE_RATIO, $unitPriceRatio['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_ProductPeer::UNIT_PRICE_RATIO, $unitPriceRatio, $comparison);
	}

	/**
	 * Filter the query on the additional_shipping_cost column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByAdditionalShippingCost(1234); // WHERE additional_shipping_cost = 1234
	 * $query->filterByAdditionalShippingCost(array(12, 34)); // WHERE additional_shipping_cost IN (12, 34)
	 * $query->filterByAdditionalShippingCost(array('min' => 12)); // WHERE additional_shipping_cost > 12
	 * </code>
	 *
	 * @param     mixed $additionalShippingCost The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_ProductQuery The current query, for fluid interface
	 */
	public function filterByAdditionalShippingCost($additionalShippingCost = null, $comparison = null)
	{
		if (is_array($additionalShippingCost)) {
			$useMinMax = false;
			if (isset($additionalShippingCost['min'])) {
				$this->addUsingAlias(Oops_Model_ProductPeer::ADDITIONAL_SHIPPING_COST, $additionalShippingCost['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($additionalShippingCost['max'])) {
				$this->addUsingAlias(Oops_Model_ProductPeer::ADDITIONAL_SHIPPING_COST, $additionalShippingCost['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_ProductPeer::ADDITIONAL_SHIPPING_COST, $additionalShippingCost, $comparison);
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
	 * @return    Oops_Model_ProductQuery The current query, for fluid interface
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
		return $this->addUsingAlias(Oops_Model_ProductPeer::REFERENCE, $reference, $comparison);
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
	 * @return    Oops_Model_ProductQuery The current query, for fluid interface
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
		return $this->addUsingAlias(Oops_Model_ProductPeer::SUPPLIER_REFERENCE, $supplierReference, $comparison);
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
	 * @return    Oops_Model_ProductQuery The current query, for fluid interface
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
		return $this->addUsingAlias(Oops_Model_ProductPeer::LOCATION, $location, $comparison);
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
	 * @return    Oops_Model_ProductQuery The current query, for fluid interface
	 */
	public function filterByWidth($width = null, $comparison = null)
	{
		if (is_array($width)) {
			$useMinMax = false;
			if (isset($width['min'])) {
				$this->addUsingAlias(Oops_Model_ProductPeer::WIDTH, $width['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($width['max'])) {
				$this->addUsingAlias(Oops_Model_ProductPeer::WIDTH, $width['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_ProductPeer::WIDTH, $width, $comparison);
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
	 * @return    Oops_Model_ProductQuery The current query, for fluid interface
	 */
	public function filterByHeight($height = null, $comparison = null)
	{
		if (is_array($height)) {
			$useMinMax = false;
			if (isset($height['min'])) {
				$this->addUsingAlias(Oops_Model_ProductPeer::HEIGHT, $height['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($height['max'])) {
				$this->addUsingAlias(Oops_Model_ProductPeer::HEIGHT, $height['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_ProductPeer::HEIGHT, $height, $comparison);
	}

	/**
	 * Filter the query on the depth column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByDepth(1234); // WHERE depth = 1234
	 * $query->filterByDepth(array(12, 34)); // WHERE depth IN (12, 34)
	 * $query->filterByDepth(array('min' => 12)); // WHERE depth > 12
	 * </code>
	 *
	 * @param     mixed $depth The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_ProductQuery The current query, for fluid interface
	 */
	public function filterByDepth($depth = null, $comparison = null)
	{
		if (is_array($depth)) {
			$useMinMax = false;
			if (isset($depth['min'])) {
				$this->addUsingAlias(Oops_Model_ProductPeer::DEPTH, $depth['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($depth['max'])) {
				$this->addUsingAlias(Oops_Model_ProductPeer::DEPTH, $depth['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_ProductPeer::DEPTH, $depth, $comparison);
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
	 * @return    Oops_Model_ProductQuery The current query, for fluid interface
	 */
	public function filterByWeight($weight = null, $comparison = null)
	{
		if (is_array($weight)) {
			$useMinMax = false;
			if (isset($weight['min'])) {
				$this->addUsingAlias(Oops_Model_ProductPeer::WEIGHT, $weight['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($weight['max'])) {
				$this->addUsingAlias(Oops_Model_ProductPeer::WEIGHT, $weight['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_ProductPeer::WEIGHT, $weight, $comparison);
	}

	/**
	 * Filter the query on the out_of_stock column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByOutOfStock(1234); // WHERE out_of_stock = 1234
	 * $query->filterByOutOfStock(array(12, 34)); // WHERE out_of_stock IN (12, 34)
	 * $query->filterByOutOfStock(array('min' => 12)); // WHERE out_of_stock > 12
	 * </code>
	 *
	 * @param     mixed $outOfStock The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_ProductQuery The current query, for fluid interface
	 */
	public function filterByOutOfStock($outOfStock = null, $comparison = null)
	{
		if (is_array($outOfStock)) {
			$useMinMax = false;
			if (isset($outOfStock['min'])) {
				$this->addUsingAlias(Oops_Model_ProductPeer::OUT_OF_STOCK, $outOfStock['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($outOfStock['max'])) {
				$this->addUsingAlias(Oops_Model_ProductPeer::OUT_OF_STOCK, $outOfStock['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_ProductPeer::OUT_OF_STOCK, $outOfStock, $comparison);
	}

	/**
	 * Filter the query on the quantity_discount column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByQuantityDiscount(true); // WHERE quantity_discount = true
	 * $query->filterByQuantityDiscount('yes'); // WHERE quantity_discount = true
	 * </code>
	 *
	 * @param     boolean|string $quantityDiscount The value to use as filter.
	 *              Non-boolean arguments are converted using the following rules:
	 *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_ProductQuery The current query, for fluid interface
	 */
	public function filterByQuantityDiscount($quantityDiscount = null, $comparison = null)
	{
		if (is_string($quantityDiscount)) {
			$quantity_discount = in_array(strtolower($quantityDiscount), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(Oops_Model_ProductPeer::QUANTITY_DISCOUNT, $quantityDiscount, $comparison);
	}

	/**
	 * Filter the query on the customizable column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByCustomizable(1234); // WHERE customizable = 1234
	 * $query->filterByCustomizable(array(12, 34)); // WHERE customizable IN (12, 34)
	 * $query->filterByCustomizable(array('min' => 12)); // WHERE customizable > 12
	 * </code>
	 *
	 * @param     mixed $customizable The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_ProductQuery The current query, for fluid interface
	 */
	public function filterByCustomizable($customizable = null, $comparison = null)
	{
		if (is_array($customizable)) {
			$useMinMax = false;
			if (isset($customizable['min'])) {
				$this->addUsingAlias(Oops_Model_ProductPeer::CUSTOMIZABLE, $customizable['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($customizable['max'])) {
				$this->addUsingAlias(Oops_Model_ProductPeer::CUSTOMIZABLE, $customizable['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_ProductPeer::CUSTOMIZABLE, $customizable, $comparison);
	}

	/**
	 * Filter the query on the uploadable_files column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByUploadableFiles(1234); // WHERE uploadable_files = 1234
	 * $query->filterByUploadableFiles(array(12, 34)); // WHERE uploadable_files IN (12, 34)
	 * $query->filterByUploadableFiles(array('min' => 12)); // WHERE uploadable_files > 12
	 * </code>
	 *
	 * @param     mixed $uploadableFiles The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_ProductQuery The current query, for fluid interface
	 */
	public function filterByUploadableFiles($uploadableFiles = null, $comparison = null)
	{
		if (is_array($uploadableFiles)) {
			$useMinMax = false;
			if (isset($uploadableFiles['min'])) {
				$this->addUsingAlias(Oops_Model_ProductPeer::UPLOADABLE_FILES, $uploadableFiles['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($uploadableFiles['max'])) {
				$this->addUsingAlias(Oops_Model_ProductPeer::UPLOADABLE_FILES, $uploadableFiles['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_ProductPeer::UPLOADABLE_FILES, $uploadableFiles, $comparison);
	}

	/**
	 * Filter the query on the text_fields column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByTextFields(1234); // WHERE text_fields = 1234
	 * $query->filterByTextFields(array(12, 34)); // WHERE text_fields IN (12, 34)
	 * $query->filterByTextFields(array('min' => 12)); // WHERE text_fields > 12
	 * </code>
	 *
	 * @param     mixed $textFields The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_ProductQuery The current query, for fluid interface
	 */
	public function filterByTextFields($textFields = null, $comparison = null)
	{
		if (is_array($textFields)) {
			$useMinMax = false;
			if (isset($textFields['min'])) {
				$this->addUsingAlias(Oops_Model_ProductPeer::TEXT_FIELDS, $textFields['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($textFields['max'])) {
				$this->addUsingAlias(Oops_Model_ProductPeer::TEXT_FIELDS, $textFields['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_ProductPeer::TEXT_FIELDS, $textFields, $comparison);
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
	 * @return    Oops_Model_ProductQuery The current query, for fluid interface
	 */
	public function filterByActive($active = null, $comparison = null)
	{
		if (is_string($active)) {
			$active = in_array(strtolower($active), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(Oops_Model_ProductPeer::ACTIVE, $active, $comparison);
	}

	/**
	 * Filter the query on the available_for_order column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByAvailableForOrder(true); // WHERE available_for_order = true
	 * $query->filterByAvailableForOrder('yes'); // WHERE available_for_order = true
	 * </code>
	 *
	 * @param     boolean|string $availableForOrder The value to use as filter.
	 *              Non-boolean arguments are converted using the following rules:
	 *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_ProductQuery The current query, for fluid interface
	 */
	public function filterByAvailableForOrder($availableForOrder = null, $comparison = null)
	{
		if (is_string($availableForOrder)) {
			$available_for_order = in_array(strtolower($availableForOrder), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(Oops_Model_ProductPeer::AVAILABLE_FOR_ORDER, $availableForOrder, $comparison);
	}

	/**
	 * Filter the query on the condition column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByCondition('fooValue');   // WHERE condition = 'fooValue'
	 * $query->filterByCondition('%fooValue%'); // WHERE condition LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $condition The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_ProductQuery The current query, for fluid interface
	 */
	public function filterByCondition($condition = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($condition)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $condition)) {
				$condition = str_replace('*', '%', $condition);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(Oops_Model_ProductPeer::CONDITION, $condition, $comparison);
	}

	/**
	 * Filter the query on the show_price column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByShowPrice(true); // WHERE show_price = true
	 * $query->filterByShowPrice('yes'); // WHERE show_price = true
	 * </code>
	 *
	 * @param     boolean|string $showPrice The value to use as filter.
	 *              Non-boolean arguments are converted using the following rules:
	 *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_ProductQuery The current query, for fluid interface
	 */
	public function filterByShowPrice($showPrice = null, $comparison = null)
	{
		if (is_string($showPrice)) {
			$show_price = in_array(strtolower($showPrice), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(Oops_Model_ProductPeer::SHOW_PRICE, $showPrice, $comparison);
	}

	/**
	 * Filter the query on the indexed column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByIndexed(true); // WHERE indexed = true
	 * $query->filterByIndexed('yes'); // WHERE indexed = true
	 * </code>
	 *
	 * @param     boolean|string $indexed The value to use as filter.
	 *              Non-boolean arguments are converted using the following rules:
	 *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_ProductQuery The current query, for fluid interface
	 */
	public function filterByIndexed($indexed = null, $comparison = null)
	{
		if (is_string($indexed)) {
			$indexed = in_array(strtolower($indexed), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(Oops_Model_ProductPeer::INDEXED, $indexed, $comparison);
	}

	/**
	 * Filter the query on the cache_is_pack column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByCacheIsPack(true); // WHERE cache_is_pack = true
	 * $query->filterByCacheIsPack('yes'); // WHERE cache_is_pack = true
	 * </code>
	 *
	 * @param     boolean|string $cacheIsPack The value to use as filter.
	 *              Non-boolean arguments are converted using the following rules:
	 *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_ProductQuery The current query, for fluid interface
	 */
	public function filterByCacheIsPack($cacheIsPack = null, $comparison = null)
	{
		if (is_string($cacheIsPack)) {
			$cache_is_pack = in_array(strtolower($cacheIsPack), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(Oops_Model_ProductPeer::CACHE_IS_PACK, $cacheIsPack, $comparison);
	}

	/**
	 * Filter the query on the cache_has_attachments column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByCacheHasAttachments(true); // WHERE cache_has_attachments = true
	 * $query->filterByCacheHasAttachments('yes'); // WHERE cache_has_attachments = true
	 * </code>
	 *
	 * @param     boolean|string $cacheHasAttachments The value to use as filter.
	 *              Non-boolean arguments are converted using the following rules:
	 *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_ProductQuery The current query, for fluid interface
	 */
	public function filterByCacheHasAttachments($cacheHasAttachments = null, $comparison = null)
	{
		if (is_string($cacheHasAttachments)) {
			$cache_has_attachments = in_array(strtolower($cacheHasAttachments), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(Oops_Model_ProductPeer::CACHE_HAS_ATTACHMENTS, $cacheHasAttachments, $comparison);
	}

	/**
	 * Filter the query on the cache_default_attribute column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByCacheDefaultAttribute(1234); // WHERE cache_default_attribute = 1234
	 * $query->filterByCacheDefaultAttribute(array(12, 34)); // WHERE cache_default_attribute IN (12, 34)
	 * $query->filterByCacheDefaultAttribute(array('min' => 12)); // WHERE cache_default_attribute > 12
	 * </code>
	 *
	 * @param     mixed $cacheDefaultAttribute The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_ProductQuery The current query, for fluid interface
	 */
	public function filterByCacheDefaultAttribute($cacheDefaultAttribute = null, $comparison = null)
	{
		if (is_array($cacheDefaultAttribute)) {
			$useMinMax = false;
			if (isset($cacheDefaultAttribute['min'])) {
				$this->addUsingAlias(Oops_Model_ProductPeer::CACHE_DEFAULT_ATTRIBUTE, $cacheDefaultAttribute['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($cacheDefaultAttribute['max'])) {
				$this->addUsingAlias(Oops_Model_ProductPeer::CACHE_DEFAULT_ATTRIBUTE, $cacheDefaultAttribute['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_ProductPeer::CACHE_DEFAULT_ATTRIBUTE, $cacheDefaultAttribute, $comparison);
	}

	/**
	 * Filter the query on the date_add column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByDateAdd('2011-03-14'); // WHERE date_add = '2011-03-14'
	 * $query->filterByDateAdd('now'); // WHERE date_add = '2011-03-14'
	 * $query->filterByDateAdd(array('max' => 'yesterday')); // WHERE date_add > '2011-03-13'
	 * </code>
	 *
	 * @param     mixed $dateAdd The value to use as filter.
	 *              Values can be integers (unix timestamps), DateTime objects, or strings.
	 *              Empty strings are treated as NULL.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_ProductQuery The current query, for fluid interface
	 */
	public function filterByDateAdd($dateAdd = null, $comparison = null)
	{
		if (is_array($dateAdd)) {
			$useMinMax = false;
			if (isset($dateAdd['min'])) {
				$this->addUsingAlias(Oops_Model_ProductPeer::DATE_ADD, $dateAdd['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($dateAdd['max'])) {
				$this->addUsingAlias(Oops_Model_ProductPeer::DATE_ADD, $dateAdd['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_ProductPeer::DATE_ADD, $dateAdd, $comparison);
	}

	/**
	 * Filter the query on the date_upd column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByDateUpd('2011-03-14'); // WHERE date_upd = '2011-03-14'
	 * $query->filterByDateUpd('now'); // WHERE date_upd = '2011-03-14'
	 * $query->filterByDateUpd(array('max' => 'yesterday')); // WHERE date_upd > '2011-03-13'
	 * </code>
	 *
	 * @param     mixed $dateUpd The value to use as filter.
	 *              Values can be integers (unix timestamps), DateTime objects, or strings.
	 *              Empty strings are treated as NULL.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_ProductQuery The current query, for fluid interface
	 */
	public function filterByDateUpd($dateUpd = null, $comparison = null)
	{
		if (is_array($dateUpd)) {
			$useMinMax = false;
			if (isset($dateUpd['min'])) {
				$this->addUsingAlias(Oops_Model_ProductPeer::DATE_UPD, $dateUpd['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($dateUpd['max'])) {
				$this->addUsingAlias(Oops_Model_ProductPeer::DATE_UPD, $dateUpd['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_ProductPeer::DATE_UPD, $dateUpd, $comparison);
	}

	/**
	 * Filter the query by a related Oops_Model_CategoryProduct object
	 *
	 * @param     Oops_Model_CategoryProduct $categoryProduct  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_ProductQuery The current query, for fluid interface
	 */
	public function filterByCategoryProduct($categoryProduct, $comparison = null)
	{
		if ($categoryProduct instanceof Oops_Model_CategoryProduct) {
			return $this
				->addUsingAlias(Oops_Model_ProductPeer::ID_PRODUCT, $categoryProduct->getIdProduct(), $comparison);
		} elseif ($categoryProduct instanceof PropelCollection) {
			return $this
				->useCategoryProductQuery()
				->filterByPrimaryKeys($categoryProduct->getPrimaryKeys())
				->endUse();
		} else {
			throw new PropelException('filterByCategoryProduct() only accepts arguments of type Oops_Model_CategoryProduct or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the CategoryProduct relation
	 *
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    Oops_Model_ProductQuery The current query, for fluid interface
	 */
	public function joinCategoryProduct($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('CategoryProduct');

		// create a ModelJoin object for this join
		$join = new ModelJoin();
		$join->setJoinType($joinType);
		$join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
		if ($previousJoin = $this->getPreviousJoin()) {
			$join->setPreviousJoin($previousJoin);
		}

		// add the ModelJoin to the current object
		if($relationAlias) {
			$this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
			$this->addJoinObject($join, $relationAlias);
		} else {
			$this->addJoinObject($join, 'CategoryProduct');
		}

		return $this;
	}

	/**
	 * Use the CategoryProduct relation CategoryProduct object
	 *
	 * @see       useQuery()
	 *
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    Oops_Model_CategoryProductQuery A secondary query class using the current class as primary query
	 */
	public function useCategoryProductQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinCategoryProduct($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'CategoryProduct', 'Oops_Model_CategoryProductQuery');
	}

	/**
	 * Filter the query by a related Oops_Model_Image object
	 *
	 * @param     Oops_Model_Image $image  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_ProductQuery The current query, for fluid interface
	 */
	public function filterByImage($image, $comparison = null)
	{
		if ($image instanceof Oops_Model_Image) {
			return $this
				->addUsingAlias(Oops_Model_ProductPeer::ID_PRODUCT, $image->getIdProduct(), $comparison);
		} elseif ($image instanceof PropelCollection) {
			return $this
				->useImageQuery()
				->filterByPrimaryKeys($image->getPrimaryKeys())
				->endUse();
		} else {
			throw new PropelException('filterByImage() only accepts arguments of type Oops_Model_Image or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the Image relation
	 *
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    Oops_Model_ProductQuery The current query, for fluid interface
	 */
	public function joinImage($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('Image');

		// create a ModelJoin object for this join
		$join = new ModelJoin();
		$join->setJoinType($joinType);
		$join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
		if ($previousJoin = $this->getPreviousJoin()) {
			$join->setPreviousJoin($previousJoin);
		}

		// add the ModelJoin to the current object
		if($relationAlias) {
			$this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
			$this->addJoinObject($join, $relationAlias);
		} else {
			$this->addJoinObject($join, 'Image');
		}

		return $this;
	}

	/**
	 * Use the Image relation Image object
	 *
	 * @see       useQuery()
	 *
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    Oops_Model_ImageQuery A secondary query class using the current class as primary query
	 */
	public function useImageQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinImage($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'Image', 'Oops_Model_ImageQuery');
	}

	/**
	 * Filter the query by a related Oops_Model_ProductLang object
	 *
	 * @param     Oops_Model_ProductLang $productLang  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_ProductQuery The current query, for fluid interface
	 */
	public function filterByProductLang($productLang, $comparison = null)
	{
		if ($productLang instanceof Oops_Model_ProductLang) {
			return $this
				->addUsingAlias(Oops_Model_ProductPeer::ID_PRODUCT, $productLang->getIdProduct(), $comparison);
		} elseif ($productLang instanceof PropelCollection) {
			return $this
				->useProductLangQuery()
				->filterByPrimaryKeys($productLang->getPrimaryKeys())
				->endUse();
		} else {
			throw new PropelException('filterByProductLang() only accepts arguments of type Oops_Model_ProductLang or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the ProductLang relation
	 *
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    Oops_Model_ProductQuery The current query, for fluid interface
	 */
	public function joinProductLang($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('ProductLang');

		// create a ModelJoin object for this join
		$join = new ModelJoin();
		$join->setJoinType($joinType);
		$join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
		if ($previousJoin = $this->getPreviousJoin()) {
			$join->setPreviousJoin($previousJoin);
		}

		// add the ModelJoin to the current object
		if($relationAlias) {
			$this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
			$this->addJoinObject($join, $relationAlias);
		} else {
			$this->addJoinObject($join, 'ProductLang');
		}

		return $this;
	}

	/**
	 * Use the ProductLang relation ProductLang object
	 *
	 * @see       useQuery()
	 *
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    Oops_Model_ProductLangQuery A secondary query class using the current class as primary query
	 */
	public function useProductLangQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinProductLang($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'ProductLang', 'Oops_Model_ProductLangQuery');
	}

	/**
	 * Filter the query by a related Oops_Model_StockMvt object
	 *
	 * @param     Oops_Model_StockMvt $stockMvt  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_ProductQuery The current query, for fluid interface
	 */
	public function filterByStockMvt($stockMvt, $comparison = null)
	{
		if ($stockMvt instanceof Oops_Model_StockMvt) {
			return $this
				->addUsingAlias(Oops_Model_ProductPeer::ID_PRODUCT, $stockMvt->getIdProduct(), $comparison);
		} elseif ($stockMvt instanceof PropelCollection) {
			return $this
				->useStockMvtQuery()
				->filterByPrimaryKeys($stockMvt->getPrimaryKeys())
				->endUse();
		} else {
			throw new PropelException('filterByStockMvt() only accepts arguments of type Oops_Model_StockMvt or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the StockMvt relation
	 *
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    Oops_Model_ProductQuery The current query, for fluid interface
	 */
	public function joinStockMvt($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('StockMvt');

		// create a ModelJoin object for this join
		$join = new ModelJoin();
		$join->setJoinType($joinType);
		$join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
		if ($previousJoin = $this->getPreviousJoin()) {
			$join->setPreviousJoin($previousJoin);
		}

		// add the ModelJoin to the current object
		if($relationAlias) {
			$this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
			$this->addJoinObject($join, $relationAlias);
		} else {
			$this->addJoinObject($join, 'StockMvt');
		}

		return $this;
	}

	/**
	 * Use the StockMvt relation StockMvt object
	 *
	 * @see       useQuery()
	 *
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    Oops_Model_StockMvtQuery A secondary query class using the current class as primary query
	 */
	public function useStockMvtQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		return $this
			->joinStockMvt($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'StockMvt', 'Oops_Model_StockMvtQuery');
	}

	/**
	 * Filter the query by a related Oops_Model_Supplier object
	 *
	 * @param     Oops_Model_Supplier $supplier  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_ProductQuery The current query, for fluid interface
	 */
	public function filterBySupplier($supplier, $comparison = null)
	{
		if ($supplier instanceof Oops_Model_Supplier) {
			return $this
				->addUsingAlias(Oops_Model_ProductPeer::ID_SUPPLIER, $supplier->getIdSupplier(), $comparison);
		} elseif ($supplier instanceof PropelCollection) {
			return $this
				->useSupplierQuery()
				->filterByPrimaryKeys($supplier->getPrimaryKeys())
				->endUse();
		} else {
			throw new PropelException('filterBySupplier() only accepts arguments of type Oops_Model_Supplier or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the Supplier relation
	 *
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    Oops_Model_ProductQuery The current query, for fluid interface
	 */
	public function joinSupplier($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('Supplier');

		// create a ModelJoin object for this join
		$join = new ModelJoin();
		$join->setJoinType($joinType);
		$join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
		if ($previousJoin = $this->getPreviousJoin()) {
			$join->setPreviousJoin($previousJoin);
		}

		// add the ModelJoin to the current object
		if($relationAlias) {
			$this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
			$this->addJoinObject($join, $relationAlias);
		} else {
			$this->addJoinObject($join, 'Supplier');
		}

		return $this;
	}

	/**
	 * Use the Supplier relation Supplier object
	 *
	 * @see       useQuery()
	 *
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    Oops_Model_SupplierQuery A secondary query class using the current class as primary query
	 */
	public function useSupplierQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinSupplier($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'Supplier', 'Oops_Model_SupplierQuery');
	}

	/**
	 * Filter the query by a related Category object
	 * using the category_product table as cross reference
	 *
	 * @param     Category $category the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_ProductQuery The current query, for fluid interface
	 */
	public function filterByCategory($category, $comparison = Criteria::EQUAL)
	{
		return $this
			->useCategoryProductQuery()
			->filterByCategory($category, $comparison)
			->endUse();
	}

	/**
	 * Exclude object from result
	 *
	 * @param     Oops_Model_Product $product Object to remove from the list of results
	 *
	 * @return    Oops_Model_ProductQuery The current query, for fluid interface
	 */
	public function prune($product = null)
	{
		if ($product) {
			$this->addUsingAlias(Oops_Model_ProductPeer::ID_PRODUCT, $product->getIdProduct(), Criteria::NOT_EQUAL);
		}

		return $this;
	}

	// i18n behavior
	
	/**
	 * Adds a JOIN clause to the query using the i18n relation
	 *
	 * @param     string $locale Locale to use for the join condition, e.g. 'fr_FR'
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'. Defaults to left join.
	 *
	 * @return    Oops_Model_ProductQuery The current query, for fluid interface
	 */
	public function joinI18n($locale = 'en_EN', $relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		$relationName = $relationAlias ? $relationAlias : 'ProductLang';
		return $this
			->joinProductLang($relationAlias, $joinType)
			->addJoinCondition($relationName, $relationName . '.IdLang = ?', $locale);
	}
	
	/**
	 * Adds a JOIN clause to the query and hydrates the related I18n object.
	 * Shortcut for $c->joinI18n($locale)->with()
	 *
	 * @param     string $locale Locale to use for the join condition, e.g. 'fr_FR'
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'. Defaults to left join.
	 *
	 * @return    Oops_Model_ProductQuery The current query, for fluid interface
	 */
	public function joinWithI18n($locale = 'en_EN', $joinType = Criteria::LEFT_JOIN)
	{
		$this
			->joinI18n($locale, null, $joinType)
			->with('ProductLang');
		$this->with['ProductLang']->setIsWithOneToMany(false);
		return $this;
	}
	
	/**
	 * Use the I18n relation query object
	 *
	 * @see       useQuery()
	 *
	 * @param     string $locale Locale to use for the join condition, e.g. 'fr_FR'
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'. Defaults to left join.
	 *
	 * @return    Oops_Model_ProductLangQuery A secondary query class using the current class as primary query
	 */
	public function useI18nQuery($locale = 'en_EN', $relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		return $this
			->joinI18n($locale, $relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'ProductLang', 'Oops_Model_ProductLangQuery');
	}

} // Oops_Model_Base_ProductQuery