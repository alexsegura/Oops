<?php


/**
 * Base class that represents a query for the 'referrer' table.
 *
 * 
 *
 * @method     Oops_Db_ReferrerQuery orderByIdReferrer($order = Criteria::ASC) Order by the id_referrer column
 * @method     Oops_Db_ReferrerQuery orderByName($order = Criteria::ASC) Order by the name column
 * @method     Oops_Db_ReferrerQuery orderByPasswd($order = Criteria::ASC) Order by the passwd column
 * @method     Oops_Db_ReferrerQuery orderByHttpRefererRegexp($order = Criteria::ASC) Order by the http_referer_regexp column
 * @method     Oops_Db_ReferrerQuery orderByHttpRefererLike($order = Criteria::ASC) Order by the http_referer_like column
 * @method     Oops_Db_ReferrerQuery orderByRequestUriRegexp($order = Criteria::ASC) Order by the request_uri_regexp column
 * @method     Oops_Db_ReferrerQuery orderByRequestUriLike($order = Criteria::ASC) Order by the request_uri_like column
 * @method     Oops_Db_ReferrerQuery orderByHttpRefererRegexpNot($order = Criteria::ASC) Order by the http_referer_regexp_not column
 * @method     Oops_Db_ReferrerQuery orderByHttpRefererLikeNot($order = Criteria::ASC) Order by the http_referer_like_not column
 * @method     Oops_Db_ReferrerQuery orderByRequestUriRegexpNot($order = Criteria::ASC) Order by the request_uri_regexp_not column
 * @method     Oops_Db_ReferrerQuery orderByRequestUriLikeNot($order = Criteria::ASC) Order by the request_uri_like_not column
 * @method     Oops_Db_ReferrerQuery orderByBaseFee($order = Criteria::ASC) Order by the base_fee column
 * @method     Oops_Db_ReferrerQuery orderByPercentFee($order = Criteria::ASC) Order by the percent_fee column
 * @method     Oops_Db_ReferrerQuery orderByClickFee($order = Criteria::ASC) Order by the click_fee column
 * @method     Oops_Db_ReferrerQuery orderByCacheVisitors($order = Criteria::ASC) Order by the cache_visitors column
 * @method     Oops_Db_ReferrerQuery orderByCacheVisits($order = Criteria::ASC) Order by the cache_visits column
 * @method     Oops_Db_ReferrerQuery orderByCachePages($order = Criteria::ASC) Order by the cache_pages column
 * @method     Oops_Db_ReferrerQuery orderByCacheRegistrations($order = Criteria::ASC) Order by the cache_registrations column
 * @method     Oops_Db_ReferrerQuery orderByCacheOrders($order = Criteria::ASC) Order by the cache_orders column
 * @method     Oops_Db_ReferrerQuery orderByCacheSales($order = Criteria::ASC) Order by the cache_sales column
 * @method     Oops_Db_ReferrerQuery orderByCacheRegRate($order = Criteria::ASC) Order by the cache_reg_rate column
 * @method     Oops_Db_ReferrerQuery orderByCacheOrderRate($order = Criteria::ASC) Order by the cache_order_rate column
 * @method     Oops_Db_ReferrerQuery orderByDateAdd($order = Criteria::ASC) Order by the date_add column
 *
 * @method     Oops_Db_ReferrerQuery groupByIdReferrer() Group by the id_referrer column
 * @method     Oops_Db_ReferrerQuery groupByName() Group by the name column
 * @method     Oops_Db_ReferrerQuery groupByPasswd() Group by the passwd column
 * @method     Oops_Db_ReferrerQuery groupByHttpRefererRegexp() Group by the http_referer_regexp column
 * @method     Oops_Db_ReferrerQuery groupByHttpRefererLike() Group by the http_referer_like column
 * @method     Oops_Db_ReferrerQuery groupByRequestUriRegexp() Group by the request_uri_regexp column
 * @method     Oops_Db_ReferrerQuery groupByRequestUriLike() Group by the request_uri_like column
 * @method     Oops_Db_ReferrerQuery groupByHttpRefererRegexpNot() Group by the http_referer_regexp_not column
 * @method     Oops_Db_ReferrerQuery groupByHttpRefererLikeNot() Group by the http_referer_like_not column
 * @method     Oops_Db_ReferrerQuery groupByRequestUriRegexpNot() Group by the request_uri_regexp_not column
 * @method     Oops_Db_ReferrerQuery groupByRequestUriLikeNot() Group by the request_uri_like_not column
 * @method     Oops_Db_ReferrerQuery groupByBaseFee() Group by the base_fee column
 * @method     Oops_Db_ReferrerQuery groupByPercentFee() Group by the percent_fee column
 * @method     Oops_Db_ReferrerQuery groupByClickFee() Group by the click_fee column
 * @method     Oops_Db_ReferrerQuery groupByCacheVisitors() Group by the cache_visitors column
 * @method     Oops_Db_ReferrerQuery groupByCacheVisits() Group by the cache_visits column
 * @method     Oops_Db_ReferrerQuery groupByCachePages() Group by the cache_pages column
 * @method     Oops_Db_ReferrerQuery groupByCacheRegistrations() Group by the cache_registrations column
 * @method     Oops_Db_ReferrerQuery groupByCacheOrders() Group by the cache_orders column
 * @method     Oops_Db_ReferrerQuery groupByCacheSales() Group by the cache_sales column
 * @method     Oops_Db_ReferrerQuery groupByCacheRegRate() Group by the cache_reg_rate column
 * @method     Oops_Db_ReferrerQuery groupByCacheOrderRate() Group by the cache_order_rate column
 * @method     Oops_Db_ReferrerQuery groupByDateAdd() Group by the date_add column
 *
 * @method     Oops_Db_ReferrerQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     Oops_Db_ReferrerQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     Oops_Db_ReferrerQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     Oops_Db_Referrer findOne(PropelPDO $con = null) Return the first Oops_Db_Referrer matching the query
 * @method     Oops_Db_Referrer findOneOrCreate(PropelPDO $con = null) Return the first Oops_Db_Referrer matching the query, or a new Oops_Db_Referrer object populated from the query conditions when no match is found
 *
 * @method     Oops_Db_Referrer findOneByIdReferrer(int $id_referrer) Return the first Oops_Db_Referrer filtered by the id_referrer column
 * @method     Oops_Db_Referrer findOneByName(string $name) Return the first Oops_Db_Referrer filtered by the name column
 * @method     Oops_Db_Referrer findOneByPasswd(string $passwd) Return the first Oops_Db_Referrer filtered by the passwd column
 * @method     Oops_Db_Referrer findOneByHttpRefererRegexp(string $http_referer_regexp) Return the first Oops_Db_Referrer filtered by the http_referer_regexp column
 * @method     Oops_Db_Referrer findOneByHttpRefererLike(string $http_referer_like) Return the first Oops_Db_Referrer filtered by the http_referer_like column
 * @method     Oops_Db_Referrer findOneByRequestUriRegexp(string $request_uri_regexp) Return the first Oops_Db_Referrer filtered by the request_uri_regexp column
 * @method     Oops_Db_Referrer findOneByRequestUriLike(string $request_uri_like) Return the first Oops_Db_Referrer filtered by the request_uri_like column
 * @method     Oops_Db_Referrer findOneByHttpRefererRegexpNot(string $http_referer_regexp_not) Return the first Oops_Db_Referrer filtered by the http_referer_regexp_not column
 * @method     Oops_Db_Referrer findOneByHttpRefererLikeNot(string $http_referer_like_not) Return the first Oops_Db_Referrer filtered by the http_referer_like_not column
 * @method     Oops_Db_Referrer findOneByRequestUriRegexpNot(string $request_uri_regexp_not) Return the first Oops_Db_Referrer filtered by the request_uri_regexp_not column
 * @method     Oops_Db_Referrer findOneByRequestUriLikeNot(string $request_uri_like_not) Return the first Oops_Db_Referrer filtered by the request_uri_like_not column
 * @method     Oops_Db_Referrer findOneByBaseFee(string $base_fee) Return the first Oops_Db_Referrer filtered by the base_fee column
 * @method     Oops_Db_Referrer findOneByPercentFee(string $percent_fee) Return the first Oops_Db_Referrer filtered by the percent_fee column
 * @method     Oops_Db_Referrer findOneByClickFee(string $click_fee) Return the first Oops_Db_Referrer filtered by the click_fee column
 * @method     Oops_Db_Referrer findOneByCacheVisitors(int $cache_visitors) Return the first Oops_Db_Referrer filtered by the cache_visitors column
 * @method     Oops_Db_Referrer findOneByCacheVisits(int $cache_visits) Return the first Oops_Db_Referrer filtered by the cache_visits column
 * @method     Oops_Db_Referrer findOneByCachePages(int $cache_pages) Return the first Oops_Db_Referrer filtered by the cache_pages column
 * @method     Oops_Db_Referrer findOneByCacheRegistrations(int $cache_registrations) Return the first Oops_Db_Referrer filtered by the cache_registrations column
 * @method     Oops_Db_Referrer findOneByCacheOrders(int $cache_orders) Return the first Oops_Db_Referrer filtered by the cache_orders column
 * @method     Oops_Db_Referrer findOneByCacheSales(string $cache_sales) Return the first Oops_Db_Referrer filtered by the cache_sales column
 * @method     Oops_Db_Referrer findOneByCacheRegRate(string $cache_reg_rate) Return the first Oops_Db_Referrer filtered by the cache_reg_rate column
 * @method     Oops_Db_Referrer findOneByCacheOrderRate(string $cache_order_rate) Return the first Oops_Db_Referrer filtered by the cache_order_rate column
 * @method     Oops_Db_Referrer findOneByDateAdd(string $date_add) Return the first Oops_Db_Referrer filtered by the date_add column
 *
 * @method     array findByIdReferrer(int $id_referrer) Return Oops_Db_Referrer objects filtered by the id_referrer column
 * @method     array findByName(string $name) Return Oops_Db_Referrer objects filtered by the name column
 * @method     array findByPasswd(string $passwd) Return Oops_Db_Referrer objects filtered by the passwd column
 * @method     array findByHttpRefererRegexp(string $http_referer_regexp) Return Oops_Db_Referrer objects filtered by the http_referer_regexp column
 * @method     array findByHttpRefererLike(string $http_referer_like) Return Oops_Db_Referrer objects filtered by the http_referer_like column
 * @method     array findByRequestUriRegexp(string $request_uri_regexp) Return Oops_Db_Referrer objects filtered by the request_uri_regexp column
 * @method     array findByRequestUriLike(string $request_uri_like) Return Oops_Db_Referrer objects filtered by the request_uri_like column
 * @method     array findByHttpRefererRegexpNot(string $http_referer_regexp_not) Return Oops_Db_Referrer objects filtered by the http_referer_regexp_not column
 * @method     array findByHttpRefererLikeNot(string $http_referer_like_not) Return Oops_Db_Referrer objects filtered by the http_referer_like_not column
 * @method     array findByRequestUriRegexpNot(string $request_uri_regexp_not) Return Oops_Db_Referrer objects filtered by the request_uri_regexp_not column
 * @method     array findByRequestUriLikeNot(string $request_uri_like_not) Return Oops_Db_Referrer objects filtered by the request_uri_like_not column
 * @method     array findByBaseFee(string $base_fee) Return Oops_Db_Referrer objects filtered by the base_fee column
 * @method     array findByPercentFee(string $percent_fee) Return Oops_Db_Referrer objects filtered by the percent_fee column
 * @method     array findByClickFee(string $click_fee) Return Oops_Db_Referrer objects filtered by the click_fee column
 * @method     array findByCacheVisitors(int $cache_visitors) Return Oops_Db_Referrer objects filtered by the cache_visitors column
 * @method     array findByCacheVisits(int $cache_visits) Return Oops_Db_Referrer objects filtered by the cache_visits column
 * @method     array findByCachePages(int $cache_pages) Return Oops_Db_Referrer objects filtered by the cache_pages column
 * @method     array findByCacheRegistrations(int $cache_registrations) Return Oops_Db_Referrer objects filtered by the cache_registrations column
 * @method     array findByCacheOrders(int $cache_orders) Return Oops_Db_Referrer objects filtered by the cache_orders column
 * @method     array findByCacheSales(string $cache_sales) Return Oops_Db_Referrer objects filtered by the cache_sales column
 * @method     array findByCacheRegRate(string $cache_reg_rate) Return Oops_Db_Referrer objects filtered by the cache_reg_rate column
 * @method     array findByCacheOrderRate(string $cache_order_rate) Return Oops_Db_Referrer objects filtered by the cache_order_rate column
 * @method     array findByDateAdd(string $date_add) Return Oops_Db_Referrer objects filtered by the date_add column
 *
 * @package    propel.generator.prestashop.om
 */
abstract class Oops_Db_Propel_ReferrerQuery extends ModelCriteria
{
	
	/**
	 * Initializes internal state of Oops_Db_Propel_ReferrerQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'prestashop', $modelName = 'Oops_Db_Referrer', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new Oops_Db_ReferrerQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    Oops_Db_ReferrerQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof Oops_Db_ReferrerQuery) {
			return $criteria;
		}
		$query = new Oops_Db_ReferrerQuery();
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
	 * @return    Oops_Db_Referrer|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ($key === null) {
			return null;
		}
		if ((null !== ($obj = Oops_Db_ReferrerPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
			// the object is alredy in the instance pool
			return $obj;
		}
		if ($con === null) {
			$con = Propel::getConnection(Oops_Db_ReferrerPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
	 * @return    Oops_Db_Referrer A model object, or null if the key is not found
	 */
	protected function findPkSimple($key, $con)
	{
		$sql = 'SELECT `ID_REFERRER`, `NAME`, `PASSWD`, `HTTP_REFERER_REGEXP`, `HTTP_REFERER_LIKE`, `REQUEST_URI_REGEXP`, `REQUEST_URI_LIKE`, `HTTP_REFERER_REGEXP_NOT`, `HTTP_REFERER_LIKE_NOT`, `REQUEST_URI_REGEXP_NOT`, `REQUEST_URI_LIKE_NOT`, `BASE_FEE`, `PERCENT_FEE`, `CLICK_FEE`, `CACHE_VISITORS`, `CACHE_VISITS`, `CACHE_PAGES`, `CACHE_REGISTRATIONS`, `CACHE_ORDERS`, `CACHE_SALES`, `CACHE_REG_RATE`, `CACHE_ORDER_RATE`, `DATE_ADD` FROM `' . _DB_PREFIX_ . 'referrer` WHERE `ID_REFERRER` = :p0';
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
			$obj = new Oops_Db_Referrer();
			$obj->hydrate($row);
			Oops_Db_ReferrerPeer::addInstanceToPool($obj, (string) $row[0]);
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
	 * @return    Oops_Db_Referrer|array|mixed the result, formatted by the current formatter
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
	 * @return    Oops_Db_ReferrerQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(Oops_Db_ReferrerPeer::ID_REFERRER, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    Oops_Db_ReferrerQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(Oops_Db_ReferrerPeer::ID_REFERRER, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id_referrer column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByIdReferrer(1234); // WHERE id_referrer = 1234
	 * $query->filterByIdReferrer(array(12, 34)); // WHERE id_referrer IN (12, 34)
	 * $query->filterByIdReferrer(array('min' => 12)); // WHERE id_referrer > 12
	 * </code>
	 *
	 * @param     mixed $idReferrer The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Db_ReferrerQuery The current query, for fluid interface
	 */
	public function filterByIdReferrer($idReferrer = null, $comparison = null)
	{
		if (is_array($idReferrer) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(Oops_Db_ReferrerPeer::ID_REFERRER, $idReferrer, $comparison);
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
	 * @return    Oops_Db_ReferrerQuery The current query, for fluid interface
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
		return $this->addUsingAlias(Oops_Db_ReferrerPeer::NAME, $name, $comparison);
	}

	/**
	 * Filter the query on the passwd column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByPasswd('fooValue');   // WHERE passwd = 'fooValue'
	 * $query->filterByPasswd('%fooValue%'); // WHERE passwd LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $passwd The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Db_ReferrerQuery The current query, for fluid interface
	 */
	public function filterByPasswd($passwd = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($passwd)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $passwd)) {
				$passwd = str_replace('*', '%', $passwd);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(Oops_Db_ReferrerPeer::PASSWD, $passwd, $comparison);
	}

	/**
	 * Filter the query on the http_referer_regexp column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByHttpRefererRegexp('fooValue');   // WHERE http_referer_regexp = 'fooValue'
	 * $query->filterByHttpRefererRegexp('%fooValue%'); // WHERE http_referer_regexp LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $httpRefererRegexp The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Db_ReferrerQuery The current query, for fluid interface
	 */
	public function filterByHttpRefererRegexp($httpRefererRegexp = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($httpRefererRegexp)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $httpRefererRegexp)) {
				$httpRefererRegexp = str_replace('*', '%', $httpRefererRegexp);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(Oops_Db_ReferrerPeer::HTTP_REFERER_REGEXP, $httpRefererRegexp, $comparison);
	}

	/**
	 * Filter the query on the http_referer_like column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByHttpRefererLike('fooValue');   // WHERE http_referer_like = 'fooValue'
	 * $query->filterByHttpRefererLike('%fooValue%'); // WHERE http_referer_like LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $httpRefererLike The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Db_ReferrerQuery The current query, for fluid interface
	 */
	public function filterByHttpRefererLike($httpRefererLike = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($httpRefererLike)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $httpRefererLike)) {
				$httpRefererLike = str_replace('*', '%', $httpRefererLike);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(Oops_Db_ReferrerPeer::HTTP_REFERER_LIKE, $httpRefererLike, $comparison);
	}

	/**
	 * Filter the query on the request_uri_regexp column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByRequestUriRegexp('fooValue');   // WHERE request_uri_regexp = 'fooValue'
	 * $query->filterByRequestUriRegexp('%fooValue%'); // WHERE request_uri_regexp LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $requestUriRegexp The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Db_ReferrerQuery The current query, for fluid interface
	 */
	public function filterByRequestUriRegexp($requestUriRegexp = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($requestUriRegexp)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $requestUriRegexp)) {
				$requestUriRegexp = str_replace('*', '%', $requestUriRegexp);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(Oops_Db_ReferrerPeer::REQUEST_URI_REGEXP, $requestUriRegexp, $comparison);
	}

	/**
	 * Filter the query on the request_uri_like column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByRequestUriLike('fooValue');   // WHERE request_uri_like = 'fooValue'
	 * $query->filterByRequestUriLike('%fooValue%'); // WHERE request_uri_like LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $requestUriLike The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Db_ReferrerQuery The current query, for fluid interface
	 */
	public function filterByRequestUriLike($requestUriLike = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($requestUriLike)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $requestUriLike)) {
				$requestUriLike = str_replace('*', '%', $requestUriLike);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(Oops_Db_ReferrerPeer::REQUEST_URI_LIKE, $requestUriLike, $comparison);
	}

	/**
	 * Filter the query on the http_referer_regexp_not column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByHttpRefererRegexpNot('fooValue');   // WHERE http_referer_regexp_not = 'fooValue'
	 * $query->filterByHttpRefererRegexpNot('%fooValue%'); // WHERE http_referer_regexp_not LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $httpRefererRegexpNot The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Db_ReferrerQuery The current query, for fluid interface
	 */
	public function filterByHttpRefererRegexpNot($httpRefererRegexpNot = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($httpRefererRegexpNot)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $httpRefererRegexpNot)) {
				$httpRefererRegexpNot = str_replace('*', '%', $httpRefererRegexpNot);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(Oops_Db_ReferrerPeer::HTTP_REFERER_REGEXP_NOT, $httpRefererRegexpNot, $comparison);
	}

	/**
	 * Filter the query on the http_referer_like_not column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByHttpRefererLikeNot('fooValue');   // WHERE http_referer_like_not = 'fooValue'
	 * $query->filterByHttpRefererLikeNot('%fooValue%'); // WHERE http_referer_like_not LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $httpRefererLikeNot The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Db_ReferrerQuery The current query, for fluid interface
	 */
	public function filterByHttpRefererLikeNot($httpRefererLikeNot = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($httpRefererLikeNot)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $httpRefererLikeNot)) {
				$httpRefererLikeNot = str_replace('*', '%', $httpRefererLikeNot);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(Oops_Db_ReferrerPeer::HTTP_REFERER_LIKE_NOT, $httpRefererLikeNot, $comparison);
	}

	/**
	 * Filter the query on the request_uri_regexp_not column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByRequestUriRegexpNot('fooValue');   // WHERE request_uri_regexp_not = 'fooValue'
	 * $query->filterByRequestUriRegexpNot('%fooValue%'); // WHERE request_uri_regexp_not LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $requestUriRegexpNot The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Db_ReferrerQuery The current query, for fluid interface
	 */
	public function filterByRequestUriRegexpNot($requestUriRegexpNot = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($requestUriRegexpNot)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $requestUriRegexpNot)) {
				$requestUriRegexpNot = str_replace('*', '%', $requestUriRegexpNot);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(Oops_Db_ReferrerPeer::REQUEST_URI_REGEXP_NOT, $requestUriRegexpNot, $comparison);
	}

	/**
	 * Filter the query on the request_uri_like_not column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByRequestUriLikeNot('fooValue');   // WHERE request_uri_like_not = 'fooValue'
	 * $query->filterByRequestUriLikeNot('%fooValue%'); // WHERE request_uri_like_not LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $requestUriLikeNot The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Db_ReferrerQuery The current query, for fluid interface
	 */
	public function filterByRequestUriLikeNot($requestUriLikeNot = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($requestUriLikeNot)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $requestUriLikeNot)) {
				$requestUriLikeNot = str_replace('*', '%', $requestUriLikeNot);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(Oops_Db_ReferrerPeer::REQUEST_URI_LIKE_NOT, $requestUriLikeNot, $comparison);
	}

	/**
	 * Filter the query on the base_fee column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByBaseFee(1234); // WHERE base_fee = 1234
	 * $query->filterByBaseFee(array(12, 34)); // WHERE base_fee IN (12, 34)
	 * $query->filterByBaseFee(array('min' => 12)); // WHERE base_fee > 12
	 * </code>
	 *
	 * @param     mixed $baseFee The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Db_ReferrerQuery The current query, for fluid interface
	 */
	public function filterByBaseFee($baseFee = null, $comparison = null)
	{
		if (is_array($baseFee)) {
			$useMinMax = false;
			if (isset($baseFee['min'])) {
				$this->addUsingAlias(Oops_Db_ReferrerPeer::BASE_FEE, $baseFee['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($baseFee['max'])) {
				$this->addUsingAlias(Oops_Db_ReferrerPeer::BASE_FEE, $baseFee['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Db_ReferrerPeer::BASE_FEE, $baseFee, $comparison);
	}

	/**
	 * Filter the query on the percent_fee column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByPercentFee(1234); // WHERE percent_fee = 1234
	 * $query->filterByPercentFee(array(12, 34)); // WHERE percent_fee IN (12, 34)
	 * $query->filterByPercentFee(array('min' => 12)); // WHERE percent_fee > 12
	 * </code>
	 *
	 * @param     mixed $percentFee The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Db_ReferrerQuery The current query, for fluid interface
	 */
	public function filterByPercentFee($percentFee = null, $comparison = null)
	{
		if (is_array($percentFee)) {
			$useMinMax = false;
			if (isset($percentFee['min'])) {
				$this->addUsingAlias(Oops_Db_ReferrerPeer::PERCENT_FEE, $percentFee['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($percentFee['max'])) {
				$this->addUsingAlias(Oops_Db_ReferrerPeer::PERCENT_FEE, $percentFee['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Db_ReferrerPeer::PERCENT_FEE, $percentFee, $comparison);
	}

	/**
	 * Filter the query on the click_fee column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByClickFee(1234); // WHERE click_fee = 1234
	 * $query->filterByClickFee(array(12, 34)); // WHERE click_fee IN (12, 34)
	 * $query->filterByClickFee(array('min' => 12)); // WHERE click_fee > 12
	 * </code>
	 *
	 * @param     mixed $clickFee The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Db_ReferrerQuery The current query, for fluid interface
	 */
	public function filterByClickFee($clickFee = null, $comparison = null)
	{
		if (is_array($clickFee)) {
			$useMinMax = false;
			if (isset($clickFee['min'])) {
				$this->addUsingAlias(Oops_Db_ReferrerPeer::CLICK_FEE, $clickFee['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($clickFee['max'])) {
				$this->addUsingAlias(Oops_Db_ReferrerPeer::CLICK_FEE, $clickFee['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Db_ReferrerPeer::CLICK_FEE, $clickFee, $comparison);
	}

	/**
	 * Filter the query on the cache_visitors column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByCacheVisitors(1234); // WHERE cache_visitors = 1234
	 * $query->filterByCacheVisitors(array(12, 34)); // WHERE cache_visitors IN (12, 34)
	 * $query->filterByCacheVisitors(array('min' => 12)); // WHERE cache_visitors > 12
	 * </code>
	 *
	 * @param     mixed $cacheVisitors The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Db_ReferrerQuery The current query, for fluid interface
	 */
	public function filterByCacheVisitors($cacheVisitors = null, $comparison = null)
	{
		if (is_array($cacheVisitors)) {
			$useMinMax = false;
			if (isset($cacheVisitors['min'])) {
				$this->addUsingAlias(Oops_Db_ReferrerPeer::CACHE_VISITORS, $cacheVisitors['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($cacheVisitors['max'])) {
				$this->addUsingAlias(Oops_Db_ReferrerPeer::CACHE_VISITORS, $cacheVisitors['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Db_ReferrerPeer::CACHE_VISITORS, $cacheVisitors, $comparison);
	}

	/**
	 * Filter the query on the cache_visits column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByCacheVisits(1234); // WHERE cache_visits = 1234
	 * $query->filterByCacheVisits(array(12, 34)); // WHERE cache_visits IN (12, 34)
	 * $query->filterByCacheVisits(array('min' => 12)); // WHERE cache_visits > 12
	 * </code>
	 *
	 * @param     mixed $cacheVisits The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Db_ReferrerQuery The current query, for fluid interface
	 */
	public function filterByCacheVisits($cacheVisits = null, $comparison = null)
	{
		if (is_array($cacheVisits)) {
			$useMinMax = false;
			if (isset($cacheVisits['min'])) {
				$this->addUsingAlias(Oops_Db_ReferrerPeer::CACHE_VISITS, $cacheVisits['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($cacheVisits['max'])) {
				$this->addUsingAlias(Oops_Db_ReferrerPeer::CACHE_VISITS, $cacheVisits['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Db_ReferrerPeer::CACHE_VISITS, $cacheVisits, $comparison);
	}

	/**
	 * Filter the query on the cache_pages column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByCachePages(1234); // WHERE cache_pages = 1234
	 * $query->filterByCachePages(array(12, 34)); // WHERE cache_pages IN (12, 34)
	 * $query->filterByCachePages(array('min' => 12)); // WHERE cache_pages > 12
	 * </code>
	 *
	 * @param     mixed $cachePages The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Db_ReferrerQuery The current query, for fluid interface
	 */
	public function filterByCachePages($cachePages = null, $comparison = null)
	{
		if (is_array($cachePages)) {
			$useMinMax = false;
			if (isset($cachePages['min'])) {
				$this->addUsingAlias(Oops_Db_ReferrerPeer::CACHE_PAGES, $cachePages['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($cachePages['max'])) {
				$this->addUsingAlias(Oops_Db_ReferrerPeer::CACHE_PAGES, $cachePages['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Db_ReferrerPeer::CACHE_PAGES, $cachePages, $comparison);
	}

	/**
	 * Filter the query on the cache_registrations column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByCacheRegistrations(1234); // WHERE cache_registrations = 1234
	 * $query->filterByCacheRegistrations(array(12, 34)); // WHERE cache_registrations IN (12, 34)
	 * $query->filterByCacheRegistrations(array('min' => 12)); // WHERE cache_registrations > 12
	 * </code>
	 *
	 * @param     mixed $cacheRegistrations The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Db_ReferrerQuery The current query, for fluid interface
	 */
	public function filterByCacheRegistrations($cacheRegistrations = null, $comparison = null)
	{
		if (is_array($cacheRegistrations)) {
			$useMinMax = false;
			if (isset($cacheRegistrations['min'])) {
				$this->addUsingAlias(Oops_Db_ReferrerPeer::CACHE_REGISTRATIONS, $cacheRegistrations['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($cacheRegistrations['max'])) {
				$this->addUsingAlias(Oops_Db_ReferrerPeer::CACHE_REGISTRATIONS, $cacheRegistrations['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Db_ReferrerPeer::CACHE_REGISTRATIONS, $cacheRegistrations, $comparison);
	}

	/**
	 * Filter the query on the cache_orders column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByCacheOrders(1234); // WHERE cache_orders = 1234
	 * $query->filterByCacheOrders(array(12, 34)); // WHERE cache_orders IN (12, 34)
	 * $query->filterByCacheOrders(array('min' => 12)); // WHERE cache_orders > 12
	 * </code>
	 *
	 * @param     mixed $cacheOrders The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Db_ReferrerQuery The current query, for fluid interface
	 */
	public function filterByCacheOrders($cacheOrders = null, $comparison = null)
	{
		if (is_array($cacheOrders)) {
			$useMinMax = false;
			if (isset($cacheOrders['min'])) {
				$this->addUsingAlias(Oops_Db_ReferrerPeer::CACHE_ORDERS, $cacheOrders['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($cacheOrders['max'])) {
				$this->addUsingAlias(Oops_Db_ReferrerPeer::CACHE_ORDERS, $cacheOrders['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Db_ReferrerPeer::CACHE_ORDERS, $cacheOrders, $comparison);
	}

	/**
	 * Filter the query on the cache_sales column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByCacheSales(1234); // WHERE cache_sales = 1234
	 * $query->filterByCacheSales(array(12, 34)); // WHERE cache_sales IN (12, 34)
	 * $query->filterByCacheSales(array('min' => 12)); // WHERE cache_sales > 12
	 * </code>
	 *
	 * @param     mixed $cacheSales The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Db_ReferrerQuery The current query, for fluid interface
	 */
	public function filterByCacheSales($cacheSales = null, $comparison = null)
	{
		if (is_array($cacheSales)) {
			$useMinMax = false;
			if (isset($cacheSales['min'])) {
				$this->addUsingAlias(Oops_Db_ReferrerPeer::CACHE_SALES, $cacheSales['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($cacheSales['max'])) {
				$this->addUsingAlias(Oops_Db_ReferrerPeer::CACHE_SALES, $cacheSales['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Db_ReferrerPeer::CACHE_SALES, $cacheSales, $comparison);
	}

	/**
	 * Filter the query on the cache_reg_rate column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByCacheRegRate(1234); // WHERE cache_reg_rate = 1234
	 * $query->filterByCacheRegRate(array(12, 34)); // WHERE cache_reg_rate IN (12, 34)
	 * $query->filterByCacheRegRate(array('min' => 12)); // WHERE cache_reg_rate > 12
	 * </code>
	 *
	 * @param     mixed $cacheRegRate The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Db_ReferrerQuery The current query, for fluid interface
	 */
	public function filterByCacheRegRate($cacheRegRate = null, $comparison = null)
	{
		if (is_array($cacheRegRate)) {
			$useMinMax = false;
			if (isset($cacheRegRate['min'])) {
				$this->addUsingAlias(Oops_Db_ReferrerPeer::CACHE_REG_RATE, $cacheRegRate['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($cacheRegRate['max'])) {
				$this->addUsingAlias(Oops_Db_ReferrerPeer::CACHE_REG_RATE, $cacheRegRate['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Db_ReferrerPeer::CACHE_REG_RATE, $cacheRegRate, $comparison);
	}

	/**
	 * Filter the query on the cache_order_rate column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByCacheOrderRate(1234); // WHERE cache_order_rate = 1234
	 * $query->filterByCacheOrderRate(array(12, 34)); // WHERE cache_order_rate IN (12, 34)
	 * $query->filterByCacheOrderRate(array('min' => 12)); // WHERE cache_order_rate > 12
	 * </code>
	 *
	 * @param     mixed $cacheOrderRate The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Db_ReferrerQuery The current query, for fluid interface
	 */
	public function filterByCacheOrderRate($cacheOrderRate = null, $comparison = null)
	{
		if (is_array($cacheOrderRate)) {
			$useMinMax = false;
			if (isset($cacheOrderRate['min'])) {
				$this->addUsingAlias(Oops_Db_ReferrerPeer::CACHE_ORDER_RATE, $cacheOrderRate['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($cacheOrderRate['max'])) {
				$this->addUsingAlias(Oops_Db_ReferrerPeer::CACHE_ORDER_RATE, $cacheOrderRate['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Db_ReferrerPeer::CACHE_ORDER_RATE, $cacheOrderRate, $comparison);
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
	 * @return    Oops_Db_ReferrerQuery The current query, for fluid interface
	 */
	public function filterByDateAdd($dateAdd = null, $comparison = null)
	{
		if (is_array($dateAdd)) {
			$useMinMax = false;
			if (isset($dateAdd['min'])) {
				$this->addUsingAlias(Oops_Db_ReferrerPeer::DATE_ADD, $dateAdd['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($dateAdd['max'])) {
				$this->addUsingAlias(Oops_Db_ReferrerPeer::DATE_ADD, $dateAdd['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Db_ReferrerPeer::DATE_ADD, $dateAdd, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     Oops_Db_Referrer $referrer Object to remove from the list of results
	 *
	 * @return    Oops_Db_ReferrerQuery The current query, for fluid interface
	 */
	public function prune($referrer = null)
	{
		if ($referrer) {
			$this->addUsingAlias(Oops_Db_ReferrerPeer::ID_REFERRER, $referrer->getIdReferrer(), Criteria::NOT_EQUAL);
		}

		return $this;
	}

} // Oops_Db_Propel_ReferrerQuery