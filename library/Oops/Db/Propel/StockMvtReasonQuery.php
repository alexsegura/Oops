<?php


/**
 * Base class that represents a query for the 'stock_mvt_reason' table.
 *
 * 
 *
 * @method     Oops_Db_StockMvtReasonQuery orderByIdStockMvtReason($order = Criteria::ASC) Order by the id_stock_mvt_reason column
 * @method     Oops_Db_StockMvtReasonQuery orderBySign($order = Criteria::ASC) Order by the sign column
 * @method     Oops_Db_StockMvtReasonQuery orderByDateAdd($order = Criteria::ASC) Order by the date_add column
 * @method     Oops_Db_StockMvtReasonQuery orderByDateUpd($order = Criteria::ASC) Order by the date_upd column
 *
 * @method     Oops_Db_StockMvtReasonQuery groupByIdStockMvtReason() Group by the id_stock_mvt_reason column
 * @method     Oops_Db_StockMvtReasonQuery groupBySign() Group by the sign column
 * @method     Oops_Db_StockMvtReasonQuery groupByDateAdd() Group by the date_add column
 * @method     Oops_Db_StockMvtReasonQuery groupByDateUpd() Group by the date_upd column
 *
 * @method     Oops_Db_StockMvtReasonQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     Oops_Db_StockMvtReasonQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     Oops_Db_StockMvtReasonQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     Oops_Db_StockMvtReasonQuery leftJoinStockMvt($relationAlias = null) Adds a LEFT JOIN clause to the query using the StockMvt relation
 * @method     Oops_Db_StockMvtReasonQuery rightJoinStockMvt($relationAlias = null) Adds a RIGHT JOIN clause to the query using the StockMvt relation
 * @method     Oops_Db_StockMvtReasonQuery innerJoinStockMvt($relationAlias = null) Adds a INNER JOIN clause to the query using the StockMvt relation
 *
 * @method     Oops_Db_StockMvtReason findOne(PropelPDO $con = null) Return the first Oops_Db_StockMvtReason matching the query
 * @method     Oops_Db_StockMvtReason findOneOrCreate(PropelPDO $con = null) Return the first Oops_Db_StockMvtReason matching the query, or a new Oops_Db_StockMvtReason object populated from the query conditions when no match is found
 *
 * @method     Oops_Db_StockMvtReason findOneByIdStockMvtReason(int $id_stock_mvt_reason) Return the first Oops_Db_StockMvtReason filtered by the id_stock_mvt_reason column
 * @method     Oops_Db_StockMvtReason findOneBySign(boolean $sign) Return the first Oops_Db_StockMvtReason filtered by the sign column
 * @method     Oops_Db_StockMvtReason findOneByDateAdd(string $date_add) Return the first Oops_Db_StockMvtReason filtered by the date_add column
 * @method     Oops_Db_StockMvtReason findOneByDateUpd(string $date_upd) Return the first Oops_Db_StockMvtReason filtered by the date_upd column
 *
 * @method     array findByIdStockMvtReason(int $id_stock_mvt_reason) Return Oops_Db_StockMvtReason objects filtered by the id_stock_mvt_reason column
 * @method     array findBySign(boolean $sign) Return Oops_Db_StockMvtReason objects filtered by the sign column
 * @method     array findByDateAdd(string $date_add) Return Oops_Db_StockMvtReason objects filtered by the date_add column
 * @method     array findByDateUpd(string $date_upd) Return Oops_Db_StockMvtReason objects filtered by the date_upd column
 *
 * @package    propel.generator.prestashop.om
 */
abstract class Oops_Db_Propel_StockMvtReasonQuery extends ModelCriteria
{
	
	/**
	 * Initializes internal state of Oops_Db_Propel_StockMvtReasonQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'prestashop', $modelName = 'Oops_Db_StockMvtReason', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new Oops_Db_StockMvtReasonQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    Oops_Db_StockMvtReasonQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof Oops_Db_StockMvtReasonQuery) {
			return $criteria;
		}
		$query = new Oops_Db_StockMvtReasonQuery();
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
	 * $obj = $c->findPk(array(12, 34), $con);
	 * </code>
	 *
	 * @param     array[$id_stock_mvt_reason, $sign] $key Primary key to use for the query
	 * @param     PropelPDO $con an optional connection object
	 *
	 * @return    Oops_Db_StockMvtReason|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ($key === null) {
			return null;
		}
		if ((null !== ($obj = Oops_Db_StockMvtReasonPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
			// the object is alredy in the instance pool
			return $obj;
		}
		if ($con === null) {
			$con = Propel::getConnection(Oops_Db_StockMvtReasonPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
	 * @return    Oops_Db_StockMvtReason A model object, or null if the key is not found
	 */
	protected function findPkSimple($key, $con)
	{
		$sql = 'SELECT `ID_STOCK_MVT_REASON`, `SIGN`, `DATE_ADD`, `DATE_UPD` FROM `' . _DB_PREFIX_ . 'stock_mvt_reason` WHERE `ID_STOCK_MVT_REASON` = :p0 AND `SIGN` = :p1';
		try {
			$stmt = $con->prepare($sql);
			$stmt->bindValue(':p0', $key[0], PDO::PARAM_INT);
			$stmt->bindValue(':p1', (int) $key[1], PDO::PARAM_INT);
			$stmt->execute();
		} catch (Exception $e) {
			Propel::log($e->getMessage(), Propel::LOG_ERR);
			throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
		}
		$obj = null;
		if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$obj = new Oops_Db_StockMvtReason();
			$obj->hydrate($row);
			Oops_Db_StockMvtReasonPeer::addInstanceToPool($obj, serialize(array((string) $row[0], (string) $row[1])));
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
	 * @return    Oops_Db_StockMvtReason|array|mixed the result, formatted by the current formatter
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
	 * @return    Oops_Db_StockMvtReasonQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		$this->addUsingAlias(Oops_Db_StockMvtReasonPeer::ID_STOCK_MVT_REASON, $key[0], Criteria::EQUAL);
		$this->addUsingAlias(Oops_Db_StockMvtReasonPeer::SIGN, $key[1], Criteria::EQUAL);

		return $this;
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    Oops_Db_StockMvtReasonQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		if (empty($keys)) {
			return $this->add(null, '1<>1', Criteria::CUSTOM);
		}
		foreach ($keys as $key) {
			$cton0 = $this->getNewCriterion(Oops_Db_StockMvtReasonPeer::ID_STOCK_MVT_REASON, $key[0], Criteria::EQUAL);
			$cton1 = $this->getNewCriterion(Oops_Db_StockMvtReasonPeer::SIGN, $key[1], Criteria::EQUAL);
			$cton0->addAnd($cton1);
			$this->addOr($cton0);
		}

		return $this;
	}

	/**
	 * Filter the query on the id_stock_mvt_reason column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByIdStockMvtReason(1234); // WHERE id_stock_mvt_reason = 1234
	 * $query->filterByIdStockMvtReason(array(12, 34)); // WHERE id_stock_mvt_reason IN (12, 34)
	 * $query->filterByIdStockMvtReason(array('min' => 12)); // WHERE id_stock_mvt_reason > 12
	 * </code>
	 *
	 * @see       filterByStockMvt()
	 *
	 * @param     mixed $idStockMvtReason The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Db_StockMvtReasonQuery The current query, for fluid interface
	 */
	public function filterByIdStockMvtReason($idStockMvtReason = null, $comparison = null)
	{
		if (is_array($idStockMvtReason) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(Oops_Db_StockMvtReasonPeer::ID_STOCK_MVT_REASON, $idStockMvtReason, $comparison);
	}

	/**
	 * Filter the query on the sign column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterBySign(true); // WHERE sign = true
	 * $query->filterBySign('yes'); // WHERE sign = true
	 * </code>
	 *
	 * @param     boolean|string $sign The value to use as filter.
	 *              Non-boolean arguments are converted using the following rules:
	 *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Db_StockMvtReasonQuery The current query, for fluid interface
	 */
	public function filterBySign($sign = null, $comparison = null)
	{
		if (is_string($sign)) {
			$sign = in_array(strtolower($sign), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(Oops_Db_StockMvtReasonPeer::SIGN, $sign, $comparison);
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
	 * @return    Oops_Db_StockMvtReasonQuery The current query, for fluid interface
	 */
	public function filterByDateAdd($dateAdd = null, $comparison = null)
	{
		if (is_array($dateAdd)) {
			$useMinMax = false;
			if (isset($dateAdd['min'])) {
				$this->addUsingAlias(Oops_Db_StockMvtReasonPeer::DATE_ADD, $dateAdd['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($dateAdd['max'])) {
				$this->addUsingAlias(Oops_Db_StockMvtReasonPeer::DATE_ADD, $dateAdd['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Db_StockMvtReasonPeer::DATE_ADD, $dateAdd, $comparison);
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
	 * @return    Oops_Db_StockMvtReasonQuery The current query, for fluid interface
	 */
	public function filterByDateUpd($dateUpd = null, $comparison = null)
	{
		if (is_array($dateUpd)) {
			$useMinMax = false;
			if (isset($dateUpd['min'])) {
				$this->addUsingAlias(Oops_Db_StockMvtReasonPeer::DATE_UPD, $dateUpd['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($dateUpd['max'])) {
				$this->addUsingAlias(Oops_Db_StockMvtReasonPeer::DATE_UPD, $dateUpd['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Db_StockMvtReasonPeer::DATE_UPD, $dateUpd, $comparison);
	}

	/**
	 * Filter the query by a related Oops_Db_StockMvt object
	 *
	 * @param     Oops_Db_StockMvt|PropelCollection $stockMvt The related object(s) to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Db_StockMvtReasonQuery The current query, for fluid interface
	 */
	public function filterByStockMvt($stockMvt, $comparison = null)
	{
		if ($stockMvt instanceof Oops_Db_StockMvt) {
			return $this
				->addUsingAlias(Oops_Db_StockMvtReasonPeer::ID_STOCK_MVT_REASON, $stockMvt->getIdStockMvtReason(), $comparison);
		} elseif ($stockMvt instanceof PropelCollection) {
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
			return $this
				->addUsingAlias(Oops_Db_StockMvtReasonPeer::ID_STOCK_MVT_REASON, $stockMvt->toKeyValue('PrimaryKey', 'IdStockMvtReason'), $comparison);
		} else {
			throw new PropelException('filterByStockMvt() only accepts arguments of type Oops_Db_StockMvt or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the StockMvt relation
	 *
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    Oops_Db_StockMvtReasonQuery The current query, for fluid interface
	 */
	public function joinStockMvt($relationAlias = null, $joinType = Criteria::INNER_JOIN)
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
	 * @return    Oops_Db_StockMvtQuery A secondary query class using the current class as primary query
	 */
	public function useStockMvtQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinStockMvt($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'StockMvt', 'Oops_Db_StockMvtQuery');
	}

	/**
	 * Exclude object from result
	 *
	 * @param     Oops_Db_StockMvtReason $stockMvtReason Object to remove from the list of results
	 *
	 * @return    Oops_Db_StockMvtReasonQuery The current query, for fluid interface
	 */
	public function prune($stockMvtReason = null)
	{
		if ($stockMvtReason) {
			$this->addCond('pruneCond0', $this->getAliasedColName(Oops_Db_StockMvtReasonPeer::ID_STOCK_MVT_REASON), $stockMvtReason->getIdStockMvtReason(), Criteria::NOT_EQUAL);
			$this->addCond('pruneCond1', $this->getAliasedColName(Oops_Db_StockMvtReasonPeer::SIGN), $stockMvtReason->getSign(), Criteria::NOT_EQUAL);
			$this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
		}

		return $this;
	}

} // Oops_Db_Propel_StockMvtReasonQuery