<?php


/**
 * Base class that represents a query for the 'address_format' table.
 *
 * 
 *
 * @method     Oops_Db_AddressFormatQuery orderByIdCountry($order = Criteria::ASC) Order by the id_country column
 * @method     Oops_Db_AddressFormatQuery orderByFormat($order = Criteria::ASC) Order by the format column
 *
 * @method     Oops_Db_AddressFormatQuery groupByIdCountry() Group by the id_country column
 * @method     Oops_Db_AddressFormatQuery groupByFormat() Group by the format column
 *
 * @method     Oops_Db_AddressFormatQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     Oops_Db_AddressFormatQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     Oops_Db_AddressFormatQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     Oops_Db_AddressFormat findOne(PropelPDO $con = null) Return the first Oops_Db_AddressFormat matching the query
 * @method     Oops_Db_AddressFormat findOneOrCreate(PropelPDO $con = null) Return the first Oops_Db_AddressFormat matching the query, or a new Oops_Db_AddressFormat object populated from the query conditions when no match is found
 *
 * @method     Oops_Db_AddressFormat findOneByIdCountry(int $id_country) Return the first Oops_Db_AddressFormat filtered by the id_country column
 * @method     Oops_Db_AddressFormat findOneByFormat(string $format) Return the first Oops_Db_AddressFormat filtered by the format column
 *
 * @method     array findByIdCountry(int $id_country) Return Oops_Db_AddressFormat objects filtered by the id_country column
 * @method     array findByFormat(string $format) Return Oops_Db_AddressFormat objects filtered by the format column
 *
 * @package    propel.generator.prestashop.om
 */
abstract class Oops_Db_Propel_AddressFormatQuery extends ModelCriteria
{
	
	/**
	 * Initializes internal state of Oops_Db_Propel_AddressFormatQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'prestashop', $modelName = 'Oops_Db_AddressFormat', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new Oops_Db_AddressFormatQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    Oops_Db_AddressFormatQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof Oops_Db_AddressFormatQuery) {
			return $criteria;
		}
		$query = new Oops_Db_AddressFormatQuery();
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
	 * @return    Oops_Db_AddressFormat|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ($key === null) {
			return null;
		}
		if ((null !== ($obj = Oops_Db_AddressFormatPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
			// the object is alredy in the instance pool
			return $obj;
		}
		if ($con === null) {
			$con = Propel::getConnection(Oops_Db_AddressFormatPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
	 * @return    Oops_Db_AddressFormat A model object, or null if the key is not found
	 */
	protected function findPkSimple($key, $con)
	{
		$sql = 'SELECT `ID_COUNTRY`, `FORMAT` FROM `' . _DB_PREFIX_ . 'address_format` WHERE `ID_COUNTRY` = :p0';
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
			$obj = new Oops_Db_AddressFormat();
			$obj->hydrate($row);
			Oops_Db_AddressFormatPeer::addInstanceToPool($obj, (string) $row[0]);
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
	 * @return    Oops_Db_AddressFormat|array|mixed the result, formatted by the current formatter
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
	 * @return    Oops_Db_AddressFormatQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(Oops_Db_AddressFormatPeer::ID_COUNTRY, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    Oops_Db_AddressFormatQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(Oops_Db_AddressFormatPeer::ID_COUNTRY, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id_country column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByIdCountry(1234); // WHERE id_country = 1234
	 * $query->filterByIdCountry(array(12, 34)); // WHERE id_country IN (12, 34)
	 * $query->filterByIdCountry(array('min' => 12)); // WHERE id_country > 12
	 * </code>
	 *
	 * @param     mixed $idCountry The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Db_AddressFormatQuery The current query, for fluid interface
	 */
	public function filterByIdCountry($idCountry = null, $comparison = null)
	{
		if (is_array($idCountry) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(Oops_Db_AddressFormatPeer::ID_COUNTRY, $idCountry, $comparison);
	}

	/**
	 * Filter the query on the format column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByFormat('fooValue');   // WHERE format = 'fooValue'
	 * $query->filterByFormat('%fooValue%'); // WHERE format LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $format The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Db_AddressFormatQuery The current query, for fluid interface
	 */
	public function filterByFormat($format = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($format)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $format)) {
				$format = str_replace('*', '%', $format);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(Oops_Db_AddressFormatPeer::FORMAT, $format, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     Oops_Db_AddressFormat $addressFormat Object to remove from the list of results
	 *
	 * @return    Oops_Db_AddressFormatQuery The current query, for fluid interface
	 */
	public function prune($addressFormat = null)
	{
		if ($addressFormat) {
			$this->addUsingAlias(Oops_Db_AddressFormatPeer::ID_COUNTRY, $addressFormat->getIdCountry(), Criteria::NOT_EQUAL);
		}

		return $this;
	}

} // Oops_Db_Propel_AddressFormatQuery