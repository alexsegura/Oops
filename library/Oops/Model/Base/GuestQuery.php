<?php


/**
 * Base class that represents a query for the 'guest' table.
 *
 * 
 *
 * @method     Oops_Model_GuestQuery orderByIdGuest($order = Criteria::ASC) Order by the id_guest column
 * @method     Oops_Model_GuestQuery orderByIdOperatingSystem($order = Criteria::ASC) Order by the id_operating_system column
 * @method     Oops_Model_GuestQuery orderByIdWebBrowser($order = Criteria::ASC) Order by the id_web_browser column
 * @method     Oops_Model_GuestQuery orderByIdCustomer($order = Criteria::ASC) Order by the id_customer column
 * @method     Oops_Model_GuestQuery orderByJavascript($order = Criteria::ASC) Order by the javascript column
 * @method     Oops_Model_GuestQuery orderByScreenResolutionX($order = Criteria::ASC) Order by the screen_resolution_x column
 * @method     Oops_Model_GuestQuery orderByScreenResolutionY($order = Criteria::ASC) Order by the screen_resolution_y column
 * @method     Oops_Model_GuestQuery orderByScreenColor($order = Criteria::ASC) Order by the screen_color column
 * @method     Oops_Model_GuestQuery orderBySunJava($order = Criteria::ASC) Order by the sun_java column
 * @method     Oops_Model_GuestQuery orderByAdobeFlash($order = Criteria::ASC) Order by the adobe_flash column
 * @method     Oops_Model_GuestQuery orderByAdobeDirector($order = Criteria::ASC) Order by the adobe_director column
 * @method     Oops_Model_GuestQuery orderByAppleQuicktime($order = Criteria::ASC) Order by the apple_quicktime column
 * @method     Oops_Model_GuestQuery orderByRealPlayer($order = Criteria::ASC) Order by the real_player column
 * @method     Oops_Model_GuestQuery orderByWindowsMedia($order = Criteria::ASC) Order by the windows_media column
 * @method     Oops_Model_GuestQuery orderByAcceptLanguage($order = Criteria::ASC) Order by the accept_language column
 *
 * @method     Oops_Model_GuestQuery groupByIdGuest() Group by the id_guest column
 * @method     Oops_Model_GuestQuery groupByIdOperatingSystem() Group by the id_operating_system column
 * @method     Oops_Model_GuestQuery groupByIdWebBrowser() Group by the id_web_browser column
 * @method     Oops_Model_GuestQuery groupByIdCustomer() Group by the id_customer column
 * @method     Oops_Model_GuestQuery groupByJavascript() Group by the javascript column
 * @method     Oops_Model_GuestQuery groupByScreenResolutionX() Group by the screen_resolution_x column
 * @method     Oops_Model_GuestQuery groupByScreenResolutionY() Group by the screen_resolution_y column
 * @method     Oops_Model_GuestQuery groupByScreenColor() Group by the screen_color column
 * @method     Oops_Model_GuestQuery groupBySunJava() Group by the sun_java column
 * @method     Oops_Model_GuestQuery groupByAdobeFlash() Group by the adobe_flash column
 * @method     Oops_Model_GuestQuery groupByAdobeDirector() Group by the adobe_director column
 * @method     Oops_Model_GuestQuery groupByAppleQuicktime() Group by the apple_quicktime column
 * @method     Oops_Model_GuestQuery groupByRealPlayer() Group by the real_player column
 * @method     Oops_Model_GuestQuery groupByWindowsMedia() Group by the windows_media column
 * @method     Oops_Model_GuestQuery groupByAcceptLanguage() Group by the accept_language column
 *
 * @method     Oops_Model_GuestQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     Oops_Model_GuestQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     Oops_Model_GuestQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     Oops_Model_Guest findOne(PropelPDO $con = null) Return the first Oops_Model_Guest matching the query
 * @method     Oops_Model_Guest findOneOrCreate(PropelPDO $con = null) Return the first Oops_Model_Guest matching the query, or a new Oops_Model_Guest object populated from the query conditions when no match is found
 *
 * @method     Oops_Model_Guest findOneByIdGuest(int $id_guest) Return the first Oops_Model_Guest filtered by the id_guest column
 * @method     Oops_Model_Guest findOneByIdOperatingSystem(int $id_operating_system) Return the first Oops_Model_Guest filtered by the id_operating_system column
 * @method     Oops_Model_Guest findOneByIdWebBrowser(int $id_web_browser) Return the first Oops_Model_Guest filtered by the id_web_browser column
 * @method     Oops_Model_Guest findOneByIdCustomer(int $id_customer) Return the first Oops_Model_Guest filtered by the id_customer column
 * @method     Oops_Model_Guest findOneByJavascript(boolean $javascript) Return the first Oops_Model_Guest filtered by the javascript column
 * @method     Oops_Model_Guest findOneByScreenResolutionX(int $screen_resolution_x) Return the first Oops_Model_Guest filtered by the screen_resolution_x column
 * @method     Oops_Model_Guest findOneByScreenResolutionY(int $screen_resolution_y) Return the first Oops_Model_Guest filtered by the screen_resolution_y column
 * @method     Oops_Model_Guest findOneByScreenColor(int $screen_color) Return the first Oops_Model_Guest filtered by the screen_color column
 * @method     Oops_Model_Guest findOneBySunJava(boolean $sun_java) Return the first Oops_Model_Guest filtered by the sun_java column
 * @method     Oops_Model_Guest findOneByAdobeFlash(boolean $adobe_flash) Return the first Oops_Model_Guest filtered by the adobe_flash column
 * @method     Oops_Model_Guest findOneByAdobeDirector(boolean $adobe_director) Return the first Oops_Model_Guest filtered by the adobe_director column
 * @method     Oops_Model_Guest findOneByAppleQuicktime(boolean $apple_quicktime) Return the first Oops_Model_Guest filtered by the apple_quicktime column
 * @method     Oops_Model_Guest findOneByRealPlayer(boolean $real_player) Return the first Oops_Model_Guest filtered by the real_player column
 * @method     Oops_Model_Guest findOneByWindowsMedia(boolean $windows_media) Return the first Oops_Model_Guest filtered by the windows_media column
 * @method     Oops_Model_Guest findOneByAcceptLanguage(string $accept_language) Return the first Oops_Model_Guest filtered by the accept_language column
 *
 * @method     array findByIdGuest(int $id_guest) Return Oops_Model_Guest objects filtered by the id_guest column
 * @method     array findByIdOperatingSystem(int $id_operating_system) Return Oops_Model_Guest objects filtered by the id_operating_system column
 * @method     array findByIdWebBrowser(int $id_web_browser) Return Oops_Model_Guest objects filtered by the id_web_browser column
 * @method     array findByIdCustomer(int $id_customer) Return Oops_Model_Guest objects filtered by the id_customer column
 * @method     array findByJavascript(boolean $javascript) Return Oops_Model_Guest objects filtered by the javascript column
 * @method     array findByScreenResolutionX(int $screen_resolution_x) Return Oops_Model_Guest objects filtered by the screen_resolution_x column
 * @method     array findByScreenResolutionY(int $screen_resolution_y) Return Oops_Model_Guest objects filtered by the screen_resolution_y column
 * @method     array findByScreenColor(int $screen_color) Return Oops_Model_Guest objects filtered by the screen_color column
 * @method     array findBySunJava(boolean $sun_java) Return Oops_Model_Guest objects filtered by the sun_java column
 * @method     array findByAdobeFlash(boolean $adobe_flash) Return Oops_Model_Guest objects filtered by the adobe_flash column
 * @method     array findByAdobeDirector(boolean $adobe_director) Return Oops_Model_Guest objects filtered by the adobe_director column
 * @method     array findByAppleQuicktime(boolean $apple_quicktime) Return Oops_Model_Guest objects filtered by the apple_quicktime column
 * @method     array findByRealPlayer(boolean $real_player) Return Oops_Model_Guest objects filtered by the real_player column
 * @method     array findByWindowsMedia(boolean $windows_media) Return Oops_Model_Guest objects filtered by the windows_media column
 * @method     array findByAcceptLanguage(string $accept_language) Return Oops_Model_Guest objects filtered by the accept_language column
 *
 * @package    propel.generator.prestashop.om
 */
abstract class Oops_Model_Base_GuestQuery extends ModelCriteria
{
	
	/**
	 * Initializes internal state of Oops_Model_Base_GuestQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'prestashop', $modelName = 'Oops_Model_Guest', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new Oops_Model_GuestQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    Oops_Model_GuestQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof Oops_Model_GuestQuery) {
			return $criteria;
		}
		$query = new Oops_Model_GuestQuery();
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
	 * @return    Oops_Model_Guest|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ($key === null) {
			return null;
		}
		if ((null !== ($obj = Oops_Model_GuestPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
			// the object is alredy in the instance pool
			return $obj;
		}
		if ($con === null) {
			$con = Propel::getConnection(Oops_Model_GuestPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
	 * @return    Oops_Model_Guest A model object, or null if the key is not found
	 */
	protected function findPkSimple($key, $con)
	{
		$sql = 'SELECT `ID_GUEST`, `ID_OPERATING_SYSTEM`, `ID_WEB_BROWSER`, `ID_CUSTOMER`, `JAVASCRIPT`, `SCREEN_RESOLUTION_X`, `SCREEN_RESOLUTION_Y`, `SCREEN_COLOR`, `SUN_JAVA`, `ADOBE_FLASH`, `ADOBE_DIRECTOR`, `APPLE_QUICKTIME`, `REAL_PLAYER`, `WINDOWS_MEDIA`, `ACCEPT_LANGUAGE` FROM `' . _DB_PREFIX_ . 'guest` WHERE `ID_GUEST` = :p0';
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
			$obj = new Oops_Model_Guest();
			$obj->hydrate($row);
			Oops_Model_GuestPeer::addInstanceToPool($obj, (string) $row[0]);
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
	 * @return    Oops_Model_Guest|array|mixed the result, formatted by the current formatter
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
	 * @return    Oops_Model_GuestQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(Oops_Model_GuestPeer::ID_GUEST, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    Oops_Model_GuestQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(Oops_Model_GuestPeer::ID_GUEST, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id_guest column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByIdGuest(1234); // WHERE id_guest = 1234
	 * $query->filterByIdGuest(array(12, 34)); // WHERE id_guest IN (12, 34)
	 * $query->filterByIdGuest(array('min' => 12)); // WHERE id_guest > 12
	 * </code>
	 *
	 * @param     mixed $idGuest The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_GuestQuery The current query, for fluid interface
	 */
	public function filterByIdGuest($idGuest = null, $comparison = null)
	{
		if (is_array($idGuest) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(Oops_Model_GuestPeer::ID_GUEST, $idGuest, $comparison);
	}

	/**
	 * Filter the query on the id_operating_system column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByIdOperatingSystem(1234); // WHERE id_operating_system = 1234
	 * $query->filterByIdOperatingSystem(array(12, 34)); // WHERE id_operating_system IN (12, 34)
	 * $query->filterByIdOperatingSystem(array('min' => 12)); // WHERE id_operating_system > 12
	 * </code>
	 *
	 * @param     mixed $idOperatingSystem The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_GuestQuery The current query, for fluid interface
	 */
	public function filterByIdOperatingSystem($idOperatingSystem = null, $comparison = null)
	{
		if (is_array($idOperatingSystem)) {
			$useMinMax = false;
			if (isset($idOperatingSystem['min'])) {
				$this->addUsingAlias(Oops_Model_GuestPeer::ID_OPERATING_SYSTEM, $idOperatingSystem['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($idOperatingSystem['max'])) {
				$this->addUsingAlias(Oops_Model_GuestPeer::ID_OPERATING_SYSTEM, $idOperatingSystem['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_GuestPeer::ID_OPERATING_SYSTEM, $idOperatingSystem, $comparison);
	}

	/**
	 * Filter the query on the id_web_browser column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByIdWebBrowser(1234); // WHERE id_web_browser = 1234
	 * $query->filterByIdWebBrowser(array(12, 34)); // WHERE id_web_browser IN (12, 34)
	 * $query->filterByIdWebBrowser(array('min' => 12)); // WHERE id_web_browser > 12
	 * </code>
	 *
	 * @param     mixed $idWebBrowser The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_GuestQuery The current query, for fluid interface
	 */
	public function filterByIdWebBrowser($idWebBrowser = null, $comparison = null)
	{
		if (is_array($idWebBrowser)) {
			$useMinMax = false;
			if (isset($idWebBrowser['min'])) {
				$this->addUsingAlias(Oops_Model_GuestPeer::ID_WEB_BROWSER, $idWebBrowser['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($idWebBrowser['max'])) {
				$this->addUsingAlias(Oops_Model_GuestPeer::ID_WEB_BROWSER, $idWebBrowser['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_GuestPeer::ID_WEB_BROWSER, $idWebBrowser, $comparison);
	}

	/**
	 * Filter the query on the id_customer column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByIdCustomer(1234); // WHERE id_customer = 1234
	 * $query->filterByIdCustomer(array(12, 34)); // WHERE id_customer IN (12, 34)
	 * $query->filterByIdCustomer(array('min' => 12)); // WHERE id_customer > 12
	 * </code>
	 *
	 * @param     mixed $idCustomer The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_GuestQuery The current query, for fluid interface
	 */
	public function filterByIdCustomer($idCustomer = null, $comparison = null)
	{
		if (is_array($idCustomer)) {
			$useMinMax = false;
			if (isset($idCustomer['min'])) {
				$this->addUsingAlias(Oops_Model_GuestPeer::ID_CUSTOMER, $idCustomer['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($idCustomer['max'])) {
				$this->addUsingAlias(Oops_Model_GuestPeer::ID_CUSTOMER, $idCustomer['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_GuestPeer::ID_CUSTOMER, $idCustomer, $comparison);
	}

	/**
	 * Filter the query on the javascript column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByJavascript(true); // WHERE javascript = true
	 * $query->filterByJavascript('yes'); // WHERE javascript = true
	 * </code>
	 *
	 * @param     boolean|string $javascript The value to use as filter.
	 *              Non-boolean arguments are converted using the following rules:
	 *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_GuestQuery The current query, for fluid interface
	 */
	public function filterByJavascript($javascript = null, $comparison = null)
	{
		if (is_string($javascript)) {
			$javascript = in_array(strtolower($javascript), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(Oops_Model_GuestPeer::JAVASCRIPT, $javascript, $comparison);
	}

	/**
	 * Filter the query on the screen_resolution_x column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByScreenResolutionX(1234); // WHERE screen_resolution_x = 1234
	 * $query->filterByScreenResolutionX(array(12, 34)); // WHERE screen_resolution_x IN (12, 34)
	 * $query->filterByScreenResolutionX(array('min' => 12)); // WHERE screen_resolution_x > 12
	 * </code>
	 *
	 * @param     mixed $screenResolutionX The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_GuestQuery The current query, for fluid interface
	 */
	public function filterByScreenResolutionX($screenResolutionX = null, $comparison = null)
	{
		if (is_array($screenResolutionX)) {
			$useMinMax = false;
			if (isset($screenResolutionX['min'])) {
				$this->addUsingAlias(Oops_Model_GuestPeer::SCREEN_RESOLUTION_X, $screenResolutionX['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($screenResolutionX['max'])) {
				$this->addUsingAlias(Oops_Model_GuestPeer::SCREEN_RESOLUTION_X, $screenResolutionX['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_GuestPeer::SCREEN_RESOLUTION_X, $screenResolutionX, $comparison);
	}

	/**
	 * Filter the query on the screen_resolution_y column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByScreenResolutionY(1234); // WHERE screen_resolution_y = 1234
	 * $query->filterByScreenResolutionY(array(12, 34)); // WHERE screen_resolution_y IN (12, 34)
	 * $query->filterByScreenResolutionY(array('min' => 12)); // WHERE screen_resolution_y > 12
	 * </code>
	 *
	 * @param     mixed $screenResolutionY The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_GuestQuery The current query, for fluid interface
	 */
	public function filterByScreenResolutionY($screenResolutionY = null, $comparison = null)
	{
		if (is_array($screenResolutionY)) {
			$useMinMax = false;
			if (isset($screenResolutionY['min'])) {
				$this->addUsingAlias(Oops_Model_GuestPeer::SCREEN_RESOLUTION_Y, $screenResolutionY['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($screenResolutionY['max'])) {
				$this->addUsingAlias(Oops_Model_GuestPeer::SCREEN_RESOLUTION_Y, $screenResolutionY['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_GuestPeer::SCREEN_RESOLUTION_Y, $screenResolutionY, $comparison);
	}

	/**
	 * Filter the query on the screen_color column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByScreenColor(1234); // WHERE screen_color = 1234
	 * $query->filterByScreenColor(array(12, 34)); // WHERE screen_color IN (12, 34)
	 * $query->filterByScreenColor(array('min' => 12)); // WHERE screen_color > 12
	 * </code>
	 *
	 * @param     mixed $screenColor The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_GuestQuery The current query, for fluid interface
	 */
	public function filterByScreenColor($screenColor = null, $comparison = null)
	{
		if (is_array($screenColor)) {
			$useMinMax = false;
			if (isset($screenColor['min'])) {
				$this->addUsingAlias(Oops_Model_GuestPeer::SCREEN_COLOR, $screenColor['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($screenColor['max'])) {
				$this->addUsingAlias(Oops_Model_GuestPeer::SCREEN_COLOR, $screenColor['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_GuestPeer::SCREEN_COLOR, $screenColor, $comparison);
	}

	/**
	 * Filter the query on the sun_java column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterBySunJava(true); // WHERE sun_java = true
	 * $query->filterBySunJava('yes'); // WHERE sun_java = true
	 * </code>
	 *
	 * @param     boolean|string $sunJava The value to use as filter.
	 *              Non-boolean arguments are converted using the following rules:
	 *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_GuestQuery The current query, for fluid interface
	 */
	public function filterBySunJava($sunJava = null, $comparison = null)
	{
		if (is_string($sunJava)) {
			$sun_java = in_array(strtolower($sunJava), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(Oops_Model_GuestPeer::SUN_JAVA, $sunJava, $comparison);
	}

	/**
	 * Filter the query on the adobe_flash column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByAdobeFlash(true); // WHERE adobe_flash = true
	 * $query->filterByAdobeFlash('yes'); // WHERE adobe_flash = true
	 * </code>
	 *
	 * @param     boolean|string $adobeFlash The value to use as filter.
	 *              Non-boolean arguments are converted using the following rules:
	 *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_GuestQuery The current query, for fluid interface
	 */
	public function filterByAdobeFlash($adobeFlash = null, $comparison = null)
	{
		if (is_string($adobeFlash)) {
			$adobe_flash = in_array(strtolower($adobeFlash), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(Oops_Model_GuestPeer::ADOBE_FLASH, $adobeFlash, $comparison);
	}

	/**
	 * Filter the query on the adobe_director column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByAdobeDirector(true); // WHERE adobe_director = true
	 * $query->filterByAdobeDirector('yes'); // WHERE adobe_director = true
	 * </code>
	 *
	 * @param     boolean|string $adobeDirector The value to use as filter.
	 *              Non-boolean arguments are converted using the following rules:
	 *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_GuestQuery The current query, for fluid interface
	 */
	public function filterByAdobeDirector($adobeDirector = null, $comparison = null)
	{
		if (is_string($adobeDirector)) {
			$adobe_director = in_array(strtolower($adobeDirector), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(Oops_Model_GuestPeer::ADOBE_DIRECTOR, $adobeDirector, $comparison);
	}

	/**
	 * Filter the query on the apple_quicktime column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByAppleQuicktime(true); // WHERE apple_quicktime = true
	 * $query->filterByAppleQuicktime('yes'); // WHERE apple_quicktime = true
	 * </code>
	 *
	 * @param     boolean|string $appleQuicktime The value to use as filter.
	 *              Non-boolean arguments are converted using the following rules:
	 *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_GuestQuery The current query, for fluid interface
	 */
	public function filterByAppleQuicktime($appleQuicktime = null, $comparison = null)
	{
		if (is_string($appleQuicktime)) {
			$apple_quicktime = in_array(strtolower($appleQuicktime), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(Oops_Model_GuestPeer::APPLE_QUICKTIME, $appleQuicktime, $comparison);
	}

	/**
	 * Filter the query on the real_player column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByRealPlayer(true); // WHERE real_player = true
	 * $query->filterByRealPlayer('yes'); // WHERE real_player = true
	 * </code>
	 *
	 * @param     boolean|string $realPlayer The value to use as filter.
	 *              Non-boolean arguments are converted using the following rules:
	 *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_GuestQuery The current query, for fluid interface
	 */
	public function filterByRealPlayer($realPlayer = null, $comparison = null)
	{
		if (is_string($realPlayer)) {
			$real_player = in_array(strtolower($realPlayer), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(Oops_Model_GuestPeer::REAL_PLAYER, $realPlayer, $comparison);
	}

	/**
	 * Filter the query on the windows_media column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByWindowsMedia(true); // WHERE windows_media = true
	 * $query->filterByWindowsMedia('yes'); // WHERE windows_media = true
	 * </code>
	 *
	 * @param     boolean|string $windowsMedia The value to use as filter.
	 *              Non-boolean arguments are converted using the following rules:
	 *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_GuestQuery The current query, for fluid interface
	 */
	public function filterByWindowsMedia($windowsMedia = null, $comparison = null)
	{
		if (is_string($windowsMedia)) {
			$windows_media = in_array(strtolower($windowsMedia), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(Oops_Model_GuestPeer::WINDOWS_MEDIA, $windowsMedia, $comparison);
	}

	/**
	 * Filter the query on the accept_language column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByAcceptLanguage('fooValue');   // WHERE accept_language = 'fooValue'
	 * $query->filterByAcceptLanguage('%fooValue%'); // WHERE accept_language LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $acceptLanguage The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_GuestQuery The current query, for fluid interface
	 */
	public function filterByAcceptLanguage($acceptLanguage = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($acceptLanguage)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $acceptLanguage)) {
				$acceptLanguage = str_replace('*', '%', $acceptLanguage);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(Oops_Model_GuestPeer::ACCEPT_LANGUAGE, $acceptLanguage, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     Oops_Model_Guest $guest Object to remove from the list of results
	 *
	 * @return    Oops_Model_GuestQuery The current query, for fluid interface
	 */
	public function prune($guest = null)
	{
		if ($guest) {
			$this->addUsingAlias(Oops_Model_GuestPeer::ID_GUEST, $guest->getIdGuest(), Criteria::NOT_EQUAL);
		}

		return $this;
	}

} // Oops_Model_Base_GuestQuery