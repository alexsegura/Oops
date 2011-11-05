<?php


/**
 * Base class that represents a query for the '' . _DB_PREFIX_ . 'djland_product_sale' table.
 *
 * 
 *
 * @method     Oops_Model_ProductSaleQuery orderByIdProduct($order = Criteria::ASC) Order by the id_product column
 * @method     Oops_Model_ProductSaleQuery orderByQuantity($order = Criteria::ASC) Order by the quantity column
 * @method     Oops_Model_ProductSaleQuery orderBySaleNbr($order = Criteria::ASC) Order by the sale_nbr column
 * @method     Oops_Model_ProductSaleQuery orderByDateUpd($order = Criteria::ASC) Order by the date_upd column
 *
 * @method     Oops_Model_ProductSaleQuery groupByIdProduct() Group by the id_product column
 * @method     Oops_Model_ProductSaleQuery groupByQuantity() Group by the quantity column
 * @method     Oops_Model_ProductSaleQuery groupBySaleNbr() Group by the sale_nbr column
 * @method     Oops_Model_ProductSaleQuery groupByDateUpd() Group by the date_upd column
 *
 * @method     Oops_Model_ProductSaleQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     Oops_Model_ProductSaleQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     Oops_Model_ProductSaleQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     Oops_Model_ProductSale findOne(PropelPDO $con = null) Return the first Oops_Model_ProductSale matching the query
 * @method     Oops_Model_ProductSale findOneOrCreate(PropelPDO $con = null) Return the first Oops_Model_ProductSale matching the query, or a new Oops_Model_ProductSale object populated from the query conditions when no match is found
 *
 * @method     Oops_Model_ProductSale findOneByIdProduct(int $id_product) Return the first Oops_Model_ProductSale filtered by the id_product column
 * @method     Oops_Model_ProductSale findOneByQuantity(int $quantity) Return the first Oops_Model_ProductSale filtered by the quantity column
 * @method     Oops_Model_ProductSale findOneBySaleNbr(int $sale_nbr) Return the first Oops_Model_ProductSale filtered by the sale_nbr column
 * @method     Oops_Model_ProductSale findOneByDateUpd(string $date_upd) Return the first Oops_Model_ProductSale filtered by the date_upd column
 *
 * @method     array findByIdProduct(int $id_product) Return Oops_Model_ProductSale objects filtered by the id_product column
 * @method     array findByQuantity(int $quantity) Return Oops_Model_ProductSale objects filtered by the quantity column
 * @method     array findBySaleNbr(int $sale_nbr) Return Oops_Model_ProductSale objects filtered by the sale_nbr column
 * @method     array findByDateUpd(string $date_upd) Return Oops_Model_ProductSale objects filtered by the date_upd column
 *
 * @package    propel.generator.prestashop.om
 */
abstract class Oops_Model_Base_ProductSaleQuery extends ModelCriteria
{
	
	/**
	 * Initializes internal state of Oops_Model_Base_ProductSaleQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'prestashop', $modelName = 'Oops_Model_ProductSale', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new Oops_Model_ProductSaleQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    Oops_Model_ProductSaleQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof Oops_Model_ProductSaleQuery) {
			return $criteria;
		}
		$query = new Oops_Model_ProductSaleQuery();
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
	 * @return    Oops_Model_ProductSale|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ($key === null) {
			return null;
		}
		if ((null !== ($obj = Oops_Model_ProductSalePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
			// the object is alredy in the instance pool
			return $obj;
		}
		if ($con === null) {
			$con = Propel::getConnection(Oops_Model_ProductSalePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
	 * @return    Oops_Model_ProductSale A model object, or null if the key is not found
	 */
	protected function findPkSimple($key, $con)
	{
		$sql = 'SELECT `ID_PRODUCT`, `QUANTITY`, `SALE_NBR`, `DATE_UPD` FROM `' . _DB_PREFIX_ . 'djland_product_sale` WHERE `ID_PRODUCT` = :p0';
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
			$obj = new Oops_Model_ProductSale();
			$obj->hydrate($row);
			Oops_Model_ProductSalePeer::addInstanceToPool($obj, (string) $row[0]);
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
	 * @return    Oops_Model_ProductSale|array|mixed the result, formatted by the current formatter
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
	 * @return    Oops_Model_ProductSaleQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(Oops_Model_ProductSalePeer::ID_PRODUCT, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    Oops_Model_ProductSaleQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(Oops_Model_ProductSalePeer::ID_PRODUCT, $keys, Criteria::IN);
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
	 * @return    Oops_Model_ProductSaleQuery The current query, for fluid interface
	 */
	public function filterByIdProduct($idProduct = null, $comparison = null)
	{
		if (is_array($idProduct) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(Oops_Model_ProductSalePeer::ID_PRODUCT, $idProduct, $comparison);
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
	 * @return    Oops_Model_ProductSaleQuery The current query, for fluid interface
	 */
	public function filterByQuantity($quantity = null, $comparison = null)
	{
		if (is_array($quantity)) {
			$useMinMax = false;
			if (isset($quantity['min'])) {
				$this->addUsingAlias(Oops_Model_ProductSalePeer::QUANTITY, $quantity['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($quantity['max'])) {
				$this->addUsingAlias(Oops_Model_ProductSalePeer::QUANTITY, $quantity['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_ProductSalePeer::QUANTITY, $quantity, $comparison);
	}

	/**
	 * Filter the query on the sale_nbr column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterBySaleNbr(1234); // WHERE sale_nbr = 1234
	 * $query->filterBySaleNbr(array(12, 34)); // WHERE sale_nbr IN (12, 34)
	 * $query->filterBySaleNbr(array('min' => 12)); // WHERE sale_nbr > 12
	 * </code>
	 *
	 * @param     mixed $saleNbr The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_ProductSaleQuery The current query, for fluid interface
	 */
	public function filterBySaleNbr($saleNbr = null, $comparison = null)
	{
		if (is_array($saleNbr)) {
			$useMinMax = false;
			if (isset($saleNbr['min'])) {
				$this->addUsingAlias(Oops_Model_ProductSalePeer::SALE_NBR, $saleNbr['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($saleNbr['max'])) {
				$this->addUsingAlias(Oops_Model_ProductSalePeer::SALE_NBR, $saleNbr['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_ProductSalePeer::SALE_NBR, $saleNbr, $comparison);
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
	 * @return    Oops_Model_ProductSaleQuery The current query, for fluid interface
	 */
	public function filterByDateUpd($dateUpd = null, $comparison = null)
	{
		if (is_array($dateUpd)) {
			$useMinMax = false;
			if (isset($dateUpd['min'])) {
				$this->addUsingAlias(Oops_Model_ProductSalePeer::DATE_UPD, $dateUpd['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($dateUpd['max'])) {
				$this->addUsingAlias(Oops_Model_ProductSalePeer::DATE_UPD, $dateUpd['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_ProductSalePeer::DATE_UPD, $dateUpd, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     Oops_Model_ProductSale $productSale Object to remove from the list of results
	 *
	 * @return    Oops_Model_ProductSaleQuery The current query, for fluid interface
	 */
	public function prune($productSale = null)
	{
		if ($productSale) {
			$this->addUsingAlias(Oops_Model_ProductSalePeer::ID_PRODUCT, $productSale->getIdProduct(), Criteria::NOT_EQUAL);
		}

		return $this;
	}

} // Oops_Model_Base_ProductSaleQuery