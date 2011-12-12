<?php


/**
 * Base class that represents a query for the 'order_state_lang' table.
 *
 * 
 *
 * @method     Oops_Db_OrderStateLangQuery orderByIdOrderState($order = Criteria::ASC) Order by the id_order_state column
 * @method     Oops_Db_OrderStateLangQuery orderByIdLang($order = Criteria::ASC) Order by the id_lang column
 * @method     Oops_Db_OrderStateLangQuery orderByName($order = Criteria::ASC) Order by the name column
 * @method     Oops_Db_OrderStateLangQuery orderByTemplate($order = Criteria::ASC) Order by the template column
 *
 * @method     Oops_Db_OrderStateLangQuery groupByIdOrderState() Group by the id_order_state column
 * @method     Oops_Db_OrderStateLangQuery groupByIdLang() Group by the id_lang column
 * @method     Oops_Db_OrderStateLangQuery groupByName() Group by the name column
 * @method     Oops_Db_OrderStateLangQuery groupByTemplate() Group by the template column
 *
 * @method     Oops_Db_OrderStateLangQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     Oops_Db_OrderStateLangQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     Oops_Db_OrderStateLangQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     Oops_Db_OrderStateLang findOne(PropelPDO $con = null) Return the first Oops_Db_OrderStateLang matching the query
 * @method     Oops_Db_OrderStateLang findOneOrCreate(PropelPDO $con = null) Return the first Oops_Db_OrderStateLang matching the query, or a new Oops_Db_OrderStateLang object populated from the query conditions when no match is found
 *
 * @method     Oops_Db_OrderStateLang findOneByIdOrderState(int $id_order_state) Return the first Oops_Db_OrderStateLang filtered by the id_order_state column
 * @method     Oops_Db_OrderStateLang findOneByIdLang(int $id_lang) Return the first Oops_Db_OrderStateLang filtered by the id_lang column
 * @method     Oops_Db_OrderStateLang findOneByName(string $name) Return the first Oops_Db_OrderStateLang filtered by the name column
 * @method     Oops_Db_OrderStateLang findOneByTemplate(string $template) Return the first Oops_Db_OrderStateLang filtered by the template column
 *
 * @method     array findByIdOrderState(int $id_order_state) Return Oops_Db_OrderStateLang objects filtered by the id_order_state column
 * @method     array findByIdLang(int $id_lang) Return Oops_Db_OrderStateLang objects filtered by the id_lang column
 * @method     array findByName(string $name) Return Oops_Db_OrderStateLang objects filtered by the name column
 * @method     array findByTemplate(string $template) Return Oops_Db_OrderStateLang objects filtered by the template column
 *
 * @package    propel.generator.prestashop.om
 */
abstract class Oops_Db_Propel_OrderStateLangQuery extends ModelCriteria
{
	
	/**
	 * Initializes internal state of Oops_Db_Propel_OrderStateLangQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'prestashop', $modelName = 'Oops_Db_OrderStateLang', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new Oops_Db_OrderStateLangQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    Oops_Db_OrderStateLangQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof Oops_Db_OrderStateLangQuery) {
			return $criteria;
		}
		$query = new Oops_Db_OrderStateLangQuery();
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
	 * @return    Oops_Db_OrderStateLang|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ($key === null) {
			return null;
		}
		if ((null !== ($obj = Oops_Db_OrderStateLangPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
			// the object is alredy in the instance pool
			return $obj;
		}
		if ($con === null) {
			$con = Propel::getConnection(Oops_Db_OrderStateLangPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
	 * @return    Oops_Db_OrderStateLang A model object, or null if the key is not found
	 */
	protected function findPkSimple($key, $con)
	{
		$sql = 'SELECT `ID_ORDER_STATE`, `ID_LANG`, `NAME`, `TEMPLATE` FROM `' . _DB_PREFIX_ . 'order_state_lang` WHERE `ID_ORDER_STATE` = :p0';
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
			$obj = new Oops_Db_OrderStateLang();
			$obj->hydrate($row);
			Oops_Db_OrderStateLangPeer::addInstanceToPool($obj, (string) $row[0]);
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
	 * @return    Oops_Db_OrderStateLang|array|mixed the result, formatted by the current formatter
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
	 * @return    Oops_Db_OrderStateLangQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(Oops_Db_OrderStateLangPeer::ID_ORDER_STATE, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    Oops_Db_OrderStateLangQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(Oops_Db_OrderStateLangPeer::ID_ORDER_STATE, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id_order_state column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByIdOrderState(1234); // WHERE id_order_state = 1234
	 * $query->filterByIdOrderState(array(12, 34)); // WHERE id_order_state IN (12, 34)
	 * $query->filterByIdOrderState(array('min' => 12)); // WHERE id_order_state > 12
	 * </code>
	 *
	 * @param     mixed $idOrderState The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Db_OrderStateLangQuery The current query, for fluid interface
	 */
	public function filterByIdOrderState($idOrderState = null, $comparison = null)
	{
		if (is_array($idOrderState) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(Oops_Db_OrderStateLangPeer::ID_ORDER_STATE, $idOrderState, $comparison);
	}

	/**
	 * Filter the query on the id_lang column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByIdLang(1234); // WHERE id_lang = 1234
	 * $query->filterByIdLang(array(12, 34)); // WHERE id_lang IN (12, 34)
	 * $query->filterByIdLang(array('min' => 12)); // WHERE id_lang > 12
	 * </code>
	 *
	 * @param     mixed $idLang The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Db_OrderStateLangQuery The current query, for fluid interface
	 */
	public function filterByIdLang($idLang = null, $comparison = null)
	{
		if (is_array($idLang)) {
			$useMinMax = false;
			if (isset($idLang['min'])) {
				$this->addUsingAlias(Oops_Db_OrderStateLangPeer::ID_LANG, $idLang['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($idLang['max'])) {
				$this->addUsingAlias(Oops_Db_OrderStateLangPeer::ID_LANG, $idLang['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Db_OrderStateLangPeer::ID_LANG, $idLang, $comparison);
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
	 * @return    Oops_Db_OrderStateLangQuery The current query, for fluid interface
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
		return $this->addUsingAlias(Oops_Db_OrderStateLangPeer::NAME, $name, $comparison);
	}

	/**
	 * Filter the query on the template column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByTemplate('fooValue');   // WHERE template = 'fooValue'
	 * $query->filterByTemplate('%fooValue%'); // WHERE template LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $template The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Db_OrderStateLangQuery The current query, for fluid interface
	 */
	public function filterByTemplate($template = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($template)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $template)) {
				$template = str_replace('*', '%', $template);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(Oops_Db_OrderStateLangPeer::TEMPLATE, $template, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     Oops_Db_OrderStateLang $orderStateLang Object to remove from the list of results
	 *
	 * @return    Oops_Db_OrderStateLangQuery The current query, for fluid interface
	 */
	public function prune($orderStateLang = null)
	{
		if ($orderStateLang) {
			$this->addUsingAlias(Oops_Db_OrderStateLangPeer::ID_ORDER_STATE, $orderStateLang->getIdOrderState(), Criteria::NOT_EQUAL);
		}

		return $this;
	}

} // Oops_Db_Propel_OrderStateLangQuery