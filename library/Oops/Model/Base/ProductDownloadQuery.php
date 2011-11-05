<?php


/**
 * Base class that represents a query for the 'djland_product_download' table.
 *
 * 
 *
 * @method     Oops_Model_ProductDownloadQuery orderByIdProductDownload($order = Criteria::ASC) Order by the id_product_download column
 * @method     Oops_Model_ProductDownloadQuery orderByIdProduct($order = Criteria::ASC) Order by the id_product column
 * @method     Oops_Model_ProductDownloadQuery orderByDisplayFilename($order = Criteria::ASC) Order by the display_filename column
 * @method     Oops_Model_ProductDownloadQuery orderByPhysicallyFilename($order = Criteria::ASC) Order by the physically_filename column
 * @method     Oops_Model_ProductDownloadQuery orderByDateDeposit($order = Criteria::ASC) Order by the date_deposit column
 * @method     Oops_Model_ProductDownloadQuery orderByDateExpiration($order = Criteria::ASC) Order by the date_expiration column
 * @method     Oops_Model_ProductDownloadQuery orderByNbDaysAccessible($order = Criteria::ASC) Order by the nb_days_accessible column
 * @method     Oops_Model_ProductDownloadQuery orderByNbDownloadable($order = Criteria::ASC) Order by the nb_downloadable column
 * @method     Oops_Model_ProductDownloadQuery orderByActive($order = Criteria::ASC) Order by the active column
 *
 * @method     Oops_Model_ProductDownloadQuery groupByIdProductDownload() Group by the id_product_download column
 * @method     Oops_Model_ProductDownloadQuery groupByIdProduct() Group by the id_product column
 * @method     Oops_Model_ProductDownloadQuery groupByDisplayFilename() Group by the display_filename column
 * @method     Oops_Model_ProductDownloadQuery groupByPhysicallyFilename() Group by the physically_filename column
 * @method     Oops_Model_ProductDownloadQuery groupByDateDeposit() Group by the date_deposit column
 * @method     Oops_Model_ProductDownloadQuery groupByDateExpiration() Group by the date_expiration column
 * @method     Oops_Model_ProductDownloadQuery groupByNbDaysAccessible() Group by the nb_days_accessible column
 * @method     Oops_Model_ProductDownloadQuery groupByNbDownloadable() Group by the nb_downloadable column
 * @method     Oops_Model_ProductDownloadQuery groupByActive() Group by the active column
 *
 * @method     Oops_Model_ProductDownloadQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     Oops_Model_ProductDownloadQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     Oops_Model_ProductDownloadQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     Oops_Model_ProductDownload findOne(PropelPDO $con = null) Return the first Oops_Model_ProductDownload matching the query
 * @method     Oops_Model_ProductDownload findOneOrCreate(PropelPDO $con = null) Return the first Oops_Model_ProductDownload matching the query, or a new Oops_Model_ProductDownload object populated from the query conditions when no match is found
 *
 * @method     Oops_Model_ProductDownload findOneByIdProductDownload(int $id_product_download) Return the first Oops_Model_ProductDownload filtered by the id_product_download column
 * @method     Oops_Model_ProductDownload findOneByIdProduct(int $id_product) Return the first Oops_Model_ProductDownload filtered by the id_product column
 * @method     Oops_Model_ProductDownload findOneByDisplayFilename(string $display_filename) Return the first Oops_Model_ProductDownload filtered by the display_filename column
 * @method     Oops_Model_ProductDownload findOneByPhysicallyFilename(string $physically_filename) Return the first Oops_Model_ProductDownload filtered by the physically_filename column
 * @method     Oops_Model_ProductDownload findOneByDateDeposit(string $date_deposit) Return the first Oops_Model_ProductDownload filtered by the date_deposit column
 * @method     Oops_Model_ProductDownload findOneByDateExpiration(string $date_expiration) Return the first Oops_Model_ProductDownload filtered by the date_expiration column
 * @method     Oops_Model_ProductDownload findOneByNbDaysAccessible(int $nb_days_accessible) Return the first Oops_Model_ProductDownload filtered by the nb_days_accessible column
 * @method     Oops_Model_ProductDownload findOneByNbDownloadable(int $nb_downloadable) Return the first Oops_Model_ProductDownload filtered by the nb_downloadable column
 * @method     Oops_Model_ProductDownload findOneByActive(boolean $active) Return the first Oops_Model_ProductDownload filtered by the active column
 *
 * @method     array findByIdProductDownload(int $id_product_download) Return Oops_Model_ProductDownload objects filtered by the id_product_download column
 * @method     array findByIdProduct(int $id_product) Return Oops_Model_ProductDownload objects filtered by the id_product column
 * @method     array findByDisplayFilename(string $display_filename) Return Oops_Model_ProductDownload objects filtered by the display_filename column
 * @method     array findByPhysicallyFilename(string $physically_filename) Return Oops_Model_ProductDownload objects filtered by the physically_filename column
 * @method     array findByDateDeposit(string $date_deposit) Return Oops_Model_ProductDownload objects filtered by the date_deposit column
 * @method     array findByDateExpiration(string $date_expiration) Return Oops_Model_ProductDownload objects filtered by the date_expiration column
 * @method     array findByNbDaysAccessible(int $nb_days_accessible) Return Oops_Model_ProductDownload objects filtered by the nb_days_accessible column
 * @method     array findByNbDownloadable(int $nb_downloadable) Return Oops_Model_ProductDownload objects filtered by the nb_downloadable column
 * @method     array findByActive(boolean $active) Return Oops_Model_ProductDownload objects filtered by the active column
 *
 * @package    propel.generator.prestashop.om
 */
abstract class Oops_Model_Base_ProductDownloadQuery extends ModelCriteria
{
	
	/**
	 * Initializes internal state of Oops_Model_Base_ProductDownloadQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'prestashop', $modelName = 'Oops_Model_ProductDownload', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new Oops_Model_ProductDownloadQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    Oops_Model_ProductDownloadQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof Oops_Model_ProductDownloadQuery) {
			return $criteria;
		}
		$query = new Oops_Model_ProductDownloadQuery();
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
	 * @return    Oops_Model_ProductDownload|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ($key === null) {
			return null;
		}
		if ((null !== ($obj = Oops_Model_ProductDownloadPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
			// the object is alredy in the instance pool
			return $obj;
		}
		if ($con === null) {
			$con = Propel::getConnection(Oops_Model_ProductDownloadPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
	 * @return    Oops_Model_ProductDownload A model object, or null if the key is not found
	 */
	protected function findPkSimple($key, $con)
	{
		$sql = 'SELECT `ID_PRODUCT_DOWNLOAD`, `ID_PRODUCT`, `DISPLAY_FILENAME`, `PHYSICALLY_FILENAME`, `DATE_DEPOSIT`, `DATE_EXPIRATION`, `NB_DAYS_ACCESSIBLE`, `NB_DOWNLOADABLE`, `ACTIVE` FROM `djland_product_download` WHERE `ID_PRODUCT_DOWNLOAD` = :p0';
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
			$obj = new Oops_Model_ProductDownload();
			$obj->hydrate($row);
			Oops_Model_ProductDownloadPeer::addInstanceToPool($obj, (string) $row[0]);
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
	 * @return    Oops_Model_ProductDownload|array|mixed the result, formatted by the current formatter
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
	 * @return    Oops_Model_ProductDownloadQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(Oops_Model_ProductDownloadPeer::ID_PRODUCT_DOWNLOAD, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    Oops_Model_ProductDownloadQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(Oops_Model_ProductDownloadPeer::ID_PRODUCT_DOWNLOAD, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id_product_download column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByIdProductDownload(1234); // WHERE id_product_download = 1234
	 * $query->filterByIdProductDownload(array(12, 34)); // WHERE id_product_download IN (12, 34)
	 * $query->filterByIdProductDownload(array('min' => 12)); // WHERE id_product_download > 12
	 * </code>
	 *
	 * @param     mixed $idProductDownload The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_ProductDownloadQuery The current query, for fluid interface
	 */
	public function filterByIdProductDownload($idProductDownload = null, $comparison = null)
	{
		if (is_array($idProductDownload) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(Oops_Model_ProductDownloadPeer::ID_PRODUCT_DOWNLOAD, $idProductDownload, $comparison);
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
	 * @return    Oops_Model_ProductDownloadQuery The current query, for fluid interface
	 */
	public function filterByIdProduct($idProduct = null, $comparison = null)
	{
		if (is_array($idProduct)) {
			$useMinMax = false;
			if (isset($idProduct['min'])) {
				$this->addUsingAlias(Oops_Model_ProductDownloadPeer::ID_PRODUCT, $idProduct['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($idProduct['max'])) {
				$this->addUsingAlias(Oops_Model_ProductDownloadPeer::ID_PRODUCT, $idProduct['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_ProductDownloadPeer::ID_PRODUCT, $idProduct, $comparison);
	}

	/**
	 * Filter the query on the display_filename column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByDisplayFilename('fooValue');   // WHERE display_filename = 'fooValue'
	 * $query->filterByDisplayFilename('%fooValue%'); // WHERE display_filename LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $displayFilename The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_ProductDownloadQuery The current query, for fluid interface
	 */
	public function filterByDisplayFilename($displayFilename = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($displayFilename)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $displayFilename)) {
				$displayFilename = str_replace('*', '%', $displayFilename);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(Oops_Model_ProductDownloadPeer::DISPLAY_FILENAME, $displayFilename, $comparison);
	}

	/**
	 * Filter the query on the physically_filename column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByPhysicallyFilename('fooValue');   // WHERE physically_filename = 'fooValue'
	 * $query->filterByPhysicallyFilename('%fooValue%'); // WHERE physically_filename LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $physicallyFilename The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_ProductDownloadQuery The current query, for fluid interface
	 */
	public function filterByPhysicallyFilename($physicallyFilename = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($physicallyFilename)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $physicallyFilename)) {
				$physicallyFilename = str_replace('*', '%', $physicallyFilename);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(Oops_Model_ProductDownloadPeer::PHYSICALLY_FILENAME, $physicallyFilename, $comparison);
	}

	/**
	 * Filter the query on the date_deposit column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByDateDeposit('2011-03-14'); // WHERE date_deposit = '2011-03-14'
	 * $query->filterByDateDeposit('now'); // WHERE date_deposit = '2011-03-14'
	 * $query->filterByDateDeposit(array('max' => 'yesterday')); // WHERE date_deposit > '2011-03-13'
	 * </code>
	 *
	 * @param     mixed $dateDeposit The value to use as filter.
	 *              Values can be integers (unix timestamps), DateTime objects, or strings.
	 *              Empty strings are treated as NULL.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_ProductDownloadQuery The current query, for fluid interface
	 */
	public function filterByDateDeposit($dateDeposit = null, $comparison = null)
	{
		if (is_array($dateDeposit)) {
			$useMinMax = false;
			if (isset($dateDeposit['min'])) {
				$this->addUsingAlias(Oops_Model_ProductDownloadPeer::DATE_DEPOSIT, $dateDeposit['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($dateDeposit['max'])) {
				$this->addUsingAlias(Oops_Model_ProductDownloadPeer::DATE_DEPOSIT, $dateDeposit['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_ProductDownloadPeer::DATE_DEPOSIT, $dateDeposit, $comparison);
	}

	/**
	 * Filter the query on the date_expiration column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByDateExpiration('2011-03-14'); // WHERE date_expiration = '2011-03-14'
	 * $query->filterByDateExpiration('now'); // WHERE date_expiration = '2011-03-14'
	 * $query->filterByDateExpiration(array('max' => 'yesterday')); // WHERE date_expiration > '2011-03-13'
	 * </code>
	 *
	 * @param     mixed $dateExpiration The value to use as filter.
	 *              Values can be integers (unix timestamps), DateTime objects, or strings.
	 *              Empty strings are treated as NULL.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_ProductDownloadQuery The current query, for fluid interface
	 */
	public function filterByDateExpiration($dateExpiration = null, $comparison = null)
	{
		if (is_array($dateExpiration)) {
			$useMinMax = false;
			if (isset($dateExpiration['min'])) {
				$this->addUsingAlias(Oops_Model_ProductDownloadPeer::DATE_EXPIRATION, $dateExpiration['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($dateExpiration['max'])) {
				$this->addUsingAlias(Oops_Model_ProductDownloadPeer::DATE_EXPIRATION, $dateExpiration['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_ProductDownloadPeer::DATE_EXPIRATION, $dateExpiration, $comparison);
	}

	/**
	 * Filter the query on the nb_days_accessible column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByNbDaysAccessible(1234); // WHERE nb_days_accessible = 1234
	 * $query->filterByNbDaysAccessible(array(12, 34)); // WHERE nb_days_accessible IN (12, 34)
	 * $query->filterByNbDaysAccessible(array('min' => 12)); // WHERE nb_days_accessible > 12
	 * </code>
	 *
	 * @param     mixed $nbDaysAccessible The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_ProductDownloadQuery The current query, for fluid interface
	 */
	public function filterByNbDaysAccessible($nbDaysAccessible = null, $comparison = null)
	{
		if (is_array($nbDaysAccessible)) {
			$useMinMax = false;
			if (isset($nbDaysAccessible['min'])) {
				$this->addUsingAlias(Oops_Model_ProductDownloadPeer::NB_DAYS_ACCESSIBLE, $nbDaysAccessible['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($nbDaysAccessible['max'])) {
				$this->addUsingAlias(Oops_Model_ProductDownloadPeer::NB_DAYS_ACCESSIBLE, $nbDaysAccessible['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_ProductDownloadPeer::NB_DAYS_ACCESSIBLE, $nbDaysAccessible, $comparison);
	}

	/**
	 * Filter the query on the nb_downloadable column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByNbDownloadable(1234); // WHERE nb_downloadable = 1234
	 * $query->filterByNbDownloadable(array(12, 34)); // WHERE nb_downloadable IN (12, 34)
	 * $query->filterByNbDownloadable(array('min' => 12)); // WHERE nb_downloadable > 12
	 * </code>
	 *
	 * @param     mixed $nbDownloadable The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_ProductDownloadQuery The current query, for fluid interface
	 */
	public function filterByNbDownloadable($nbDownloadable = null, $comparison = null)
	{
		if (is_array($nbDownloadable)) {
			$useMinMax = false;
			if (isset($nbDownloadable['min'])) {
				$this->addUsingAlias(Oops_Model_ProductDownloadPeer::NB_DOWNLOADABLE, $nbDownloadable['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($nbDownloadable['max'])) {
				$this->addUsingAlias(Oops_Model_ProductDownloadPeer::NB_DOWNLOADABLE, $nbDownloadable['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_ProductDownloadPeer::NB_DOWNLOADABLE, $nbDownloadable, $comparison);
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
	 * @return    Oops_Model_ProductDownloadQuery The current query, for fluid interface
	 */
	public function filterByActive($active = null, $comparison = null)
	{
		if (is_string($active)) {
			$active = in_array(strtolower($active), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(Oops_Model_ProductDownloadPeer::ACTIVE, $active, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     Oops_Model_ProductDownload $productDownload Object to remove from the list of results
	 *
	 * @return    Oops_Model_ProductDownloadQuery The current query, for fluid interface
	 */
	public function prune($productDownload = null)
	{
		if ($productDownload) {
			$this->addUsingAlias(Oops_Model_ProductDownloadPeer::ID_PRODUCT_DOWNLOAD, $productDownload->getIdProductDownload(), Criteria::NOT_EQUAL);
		}

		return $this;
	}

} // Oops_Model_Base_ProductDownloadQuery