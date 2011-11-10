<?php


/**
 * Base class that represents a query for the 'hook_module_exceptions' table.
 *
 * 
 *
 * @method     Oops_Model_HookModuleExceptionsQuery orderByIdHookModuleExceptions($order = Criteria::ASC) Order by the id_hook_module_exceptions column
 * @method     Oops_Model_HookModuleExceptionsQuery orderByIdModule($order = Criteria::ASC) Order by the id_module column
 * @method     Oops_Model_HookModuleExceptionsQuery orderByIdHook($order = Criteria::ASC) Order by the id_hook column
 * @method     Oops_Model_HookModuleExceptionsQuery orderByFileName($order = Criteria::ASC) Order by the file_name column
 *
 * @method     Oops_Model_HookModuleExceptionsQuery groupByIdHookModuleExceptions() Group by the id_hook_module_exceptions column
 * @method     Oops_Model_HookModuleExceptionsQuery groupByIdModule() Group by the id_module column
 * @method     Oops_Model_HookModuleExceptionsQuery groupByIdHook() Group by the id_hook column
 * @method     Oops_Model_HookModuleExceptionsQuery groupByFileName() Group by the file_name column
 *
 * @method     Oops_Model_HookModuleExceptionsQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     Oops_Model_HookModuleExceptionsQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     Oops_Model_HookModuleExceptionsQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     Oops_Model_HookModuleExceptions findOne(PropelPDO $con = null) Return the first Oops_Model_HookModuleExceptions matching the query
 * @method     Oops_Model_HookModuleExceptions findOneOrCreate(PropelPDO $con = null) Return the first Oops_Model_HookModuleExceptions matching the query, or a new Oops_Model_HookModuleExceptions object populated from the query conditions when no match is found
 *
 * @method     Oops_Model_HookModuleExceptions findOneByIdHookModuleExceptions(int $id_hook_module_exceptions) Return the first Oops_Model_HookModuleExceptions filtered by the id_hook_module_exceptions column
 * @method     Oops_Model_HookModuleExceptions findOneByIdModule(int $id_module) Return the first Oops_Model_HookModuleExceptions filtered by the id_module column
 * @method     Oops_Model_HookModuleExceptions findOneByIdHook(int $id_hook) Return the first Oops_Model_HookModuleExceptions filtered by the id_hook column
 * @method     Oops_Model_HookModuleExceptions findOneByFileName(string $file_name) Return the first Oops_Model_HookModuleExceptions filtered by the file_name column
 *
 * @method     array findByIdHookModuleExceptions(int $id_hook_module_exceptions) Return Oops_Model_HookModuleExceptions objects filtered by the id_hook_module_exceptions column
 * @method     array findByIdModule(int $id_module) Return Oops_Model_HookModuleExceptions objects filtered by the id_module column
 * @method     array findByIdHook(int $id_hook) Return Oops_Model_HookModuleExceptions objects filtered by the id_hook column
 * @method     array findByFileName(string $file_name) Return Oops_Model_HookModuleExceptions objects filtered by the file_name column
 *
 * @package    propel.generator.prestashop.om
 */
abstract class Oops_Model_Base_HookModuleExceptionsQuery extends ModelCriteria
{
	
	/**
	 * Initializes internal state of Oops_Model_Base_HookModuleExceptionsQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'prestashop', $modelName = 'Oops_Model_HookModuleExceptions', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new Oops_Model_HookModuleExceptionsQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    Oops_Model_HookModuleExceptionsQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof Oops_Model_HookModuleExceptionsQuery) {
			return $criteria;
		}
		$query = new Oops_Model_HookModuleExceptionsQuery();
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
	 * @return    Oops_Model_HookModuleExceptions|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ($key === null) {
			return null;
		}
		if ((null !== ($obj = Oops_Model_HookModuleExceptionsPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
			// the object is alredy in the instance pool
			return $obj;
		}
		if ($con === null) {
			$con = Propel::getConnection(Oops_Model_HookModuleExceptionsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
	 * @return    Oops_Model_HookModuleExceptions A model object, or null if the key is not found
	 */
	protected function findPkSimple($key, $con)
	{
		$sql = 'SELECT `ID_HOOK_MODULE_EXCEPTIONS`, `ID_MODULE`, `ID_HOOK`, `FILE_NAME` FROM `' . _DB_PREFIX_ . 'hook_module_exceptions` WHERE `ID_HOOK_MODULE_EXCEPTIONS` = :p0';
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
			$obj = new Oops_Model_HookModuleExceptions();
			$obj->hydrate($row);
			Oops_Model_HookModuleExceptionsPeer::addInstanceToPool($obj, (string) $row[0]);
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
	 * @return    Oops_Model_HookModuleExceptions|array|mixed the result, formatted by the current formatter
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
	 * @return    Oops_Model_HookModuleExceptionsQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(Oops_Model_HookModuleExceptionsPeer::ID_HOOK_MODULE_EXCEPTIONS, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    Oops_Model_HookModuleExceptionsQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(Oops_Model_HookModuleExceptionsPeer::ID_HOOK_MODULE_EXCEPTIONS, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id_hook_module_exceptions column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByIdHookModuleExceptions(1234); // WHERE id_hook_module_exceptions = 1234
	 * $query->filterByIdHookModuleExceptions(array(12, 34)); // WHERE id_hook_module_exceptions IN (12, 34)
	 * $query->filterByIdHookModuleExceptions(array('min' => 12)); // WHERE id_hook_module_exceptions > 12
	 * </code>
	 *
	 * @param     mixed $idHookModuleExceptions The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_HookModuleExceptionsQuery The current query, for fluid interface
	 */
	public function filterByIdHookModuleExceptions($idHookModuleExceptions = null, $comparison = null)
	{
		if (is_array($idHookModuleExceptions) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(Oops_Model_HookModuleExceptionsPeer::ID_HOOK_MODULE_EXCEPTIONS, $idHookModuleExceptions, $comparison);
	}

	/**
	 * Filter the query on the id_module column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByIdModule(1234); // WHERE id_module = 1234
	 * $query->filterByIdModule(array(12, 34)); // WHERE id_module IN (12, 34)
	 * $query->filterByIdModule(array('min' => 12)); // WHERE id_module > 12
	 * </code>
	 *
	 * @param     mixed $idModule The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_HookModuleExceptionsQuery The current query, for fluid interface
	 */
	public function filterByIdModule($idModule = null, $comparison = null)
	{
		if (is_array($idModule)) {
			$useMinMax = false;
			if (isset($idModule['min'])) {
				$this->addUsingAlias(Oops_Model_HookModuleExceptionsPeer::ID_MODULE, $idModule['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($idModule['max'])) {
				$this->addUsingAlias(Oops_Model_HookModuleExceptionsPeer::ID_MODULE, $idModule['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_HookModuleExceptionsPeer::ID_MODULE, $idModule, $comparison);
	}

	/**
	 * Filter the query on the id_hook column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByIdHook(1234); // WHERE id_hook = 1234
	 * $query->filterByIdHook(array(12, 34)); // WHERE id_hook IN (12, 34)
	 * $query->filterByIdHook(array('min' => 12)); // WHERE id_hook > 12
	 * </code>
	 *
	 * @param     mixed $idHook The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_HookModuleExceptionsQuery The current query, for fluid interface
	 */
	public function filterByIdHook($idHook = null, $comparison = null)
	{
		if (is_array($idHook)) {
			$useMinMax = false;
			if (isset($idHook['min'])) {
				$this->addUsingAlias(Oops_Model_HookModuleExceptionsPeer::ID_HOOK, $idHook['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($idHook['max'])) {
				$this->addUsingAlias(Oops_Model_HookModuleExceptionsPeer::ID_HOOK, $idHook['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_HookModuleExceptionsPeer::ID_HOOK, $idHook, $comparison);
	}

	/**
	 * Filter the query on the file_name column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByFileName('fooValue');   // WHERE file_name = 'fooValue'
	 * $query->filterByFileName('%fooValue%'); // WHERE file_name LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $fileName The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_HookModuleExceptionsQuery The current query, for fluid interface
	 */
	public function filterByFileName($fileName = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($fileName)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $fileName)) {
				$fileName = str_replace('*', '%', $fileName);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(Oops_Model_HookModuleExceptionsPeer::FILE_NAME, $fileName, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     Oops_Model_HookModuleExceptions $hookModuleExceptions Object to remove from the list of results
	 *
	 * @return    Oops_Model_HookModuleExceptionsQuery The current query, for fluid interface
	 */
	public function prune($hookModuleExceptions = null)
	{
		if ($hookModuleExceptions) {
			$this->addUsingAlias(Oops_Model_HookModuleExceptionsPeer::ID_HOOK_MODULE_EXCEPTIONS, $hookModuleExceptions->getIdHookModuleExceptions(), Criteria::NOT_EQUAL);
		}

		return $this;
	}

} // Oops_Model_Base_HookModuleExceptionsQuery