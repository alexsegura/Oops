<?php


/**
 * Base class that represents a query for the 'tax_lang' table.
 *
 * 
 *
 * @method     Oops_Db_TaxLangQuery orderByIdTax($order = Criteria::ASC) Order by the id_tax column
 * @method     Oops_Db_TaxLangQuery orderByIdLang($order = Criteria::ASC) Order by the id_lang column
 * @method     Oops_Db_TaxLangQuery orderByName($order = Criteria::ASC) Order by the name column
 *
 * @method     Oops_Db_TaxLangQuery groupByIdTax() Group by the id_tax column
 * @method     Oops_Db_TaxLangQuery groupByIdLang() Group by the id_lang column
 * @method     Oops_Db_TaxLangQuery groupByName() Group by the name column
 *
 * @method     Oops_Db_TaxLangQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     Oops_Db_TaxLangQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     Oops_Db_TaxLangQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     Oops_Db_TaxLang findOne(PropelPDO $con = null) Return the first Oops_Db_TaxLang matching the query
 * @method     Oops_Db_TaxLang findOneOrCreate(PropelPDO $con = null) Return the first Oops_Db_TaxLang matching the query, or a new Oops_Db_TaxLang object populated from the query conditions when no match is found
 *
 * @method     Oops_Db_TaxLang findOneByIdTax(int $id_tax) Return the first Oops_Db_TaxLang filtered by the id_tax column
 * @method     Oops_Db_TaxLang findOneByIdLang(int $id_lang) Return the first Oops_Db_TaxLang filtered by the id_lang column
 * @method     Oops_Db_TaxLang findOneByName(string $name) Return the first Oops_Db_TaxLang filtered by the name column
 *
 * @method     array findByIdTax(int $id_tax) Return Oops_Db_TaxLang objects filtered by the id_tax column
 * @method     array findByIdLang(int $id_lang) Return Oops_Db_TaxLang objects filtered by the id_lang column
 * @method     array findByName(string $name) Return Oops_Db_TaxLang objects filtered by the name column
 *
 * @package    propel.generator.prestashop.om
 */
abstract class Oops_Db_Propel_TaxLangQuery extends ModelCriteria
{
	
	/**
	 * Initializes internal state of Oops_Db_Propel_TaxLangQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'prestashop', $modelName = 'Oops_Db_TaxLang', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new Oops_Db_TaxLangQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    Oops_Db_TaxLangQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof Oops_Db_TaxLangQuery) {
			return $criteria;
		}
		$query = new Oops_Db_TaxLangQuery();
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
	 * @return    Oops_Db_TaxLang|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ($key === null) {
			return null;
		}
		if ((null !== ($obj = Oops_Db_TaxLangPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
			// the object is alredy in the instance pool
			return $obj;
		}
		if ($con === null) {
			$con = Propel::getConnection(Oops_Db_TaxLangPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
	 * @return    Oops_Db_TaxLang A model object, or null if the key is not found
	 */
	protected function findPkSimple($key, $con)
	{
		$sql = 'SELECT `ID_TAX`, `ID_LANG`, `NAME` FROM `' . _DB_PREFIX_ . 'tax_lang` WHERE `ID_TAX` = :p0';
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
			$obj = new Oops_Db_TaxLang();
			$obj->hydrate($row);
			Oops_Db_TaxLangPeer::addInstanceToPool($obj, (string) $row[0]);
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
	 * @return    Oops_Db_TaxLang|array|mixed the result, formatted by the current formatter
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
	 * @return    Oops_Db_TaxLangQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(Oops_Db_TaxLangPeer::ID_TAX, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    Oops_Db_TaxLangQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(Oops_Db_TaxLangPeer::ID_TAX, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id_tax column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByIdTax(1234); // WHERE id_tax = 1234
	 * $query->filterByIdTax(array(12, 34)); // WHERE id_tax IN (12, 34)
	 * $query->filterByIdTax(array('min' => 12)); // WHERE id_tax > 12
	 * </code>
	 *
	 * @param     mixed $idTax The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Db_TaxLangQuery The current query, for fluid interface
	 */
	public function filterByIdTax($idTax = null, $comparison = null)
	{
		if (is_array($idTax) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(Oops_Db_TaxLangPeer::ID_TAX, $idTax, $comparison);
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
	 * @return    Oops_Db_TaxLangQuery The current query, for fluid interface
	 */
	public function filterByIdLang($idLang = null, $comparison = null)
	{
		if (is_array($idLang)) {
			$useMinMax = false;
			if (isset($idLang['min'])) {
				$this->addUsingAlias(Oops_Db_TaxLangPeer::ID_LANG, $idLang['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($idLang['max'])) {
				$this->addUsingAlias(Oops_Db_TaxLangPeer::ID_LANG, $idLang['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Db_TaxLangPeer::ID_LANG, $idLang, $comparison);
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
	 * @return    Oops_Db_TaxLangQuery The current query, for fluid interface
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
		return $this->addUsingAlias(Oops_Db_TaxLangPeer::NAME, $name, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     Oops_Db_TaxLang $taxLang Object to remove from the list of results
	 *
	 * @return    Oops_Db_TaxLangQuery The current query, for fluid interface
	 */
	public function prune($taxLang = null)
	{
		if ($taxLang) {
			$this->addUsingAlias(Oops_Db_TaxLangPeer::ID_TAX, $taxLang->getIdTax(), Criteria::NOT_EQUAL);
		}

		return $this;
	}

} // Oops_Db_Propel_TaxLangQuery