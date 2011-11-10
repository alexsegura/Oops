<?php


/**
 * Base class that represents a query for the 'attachment' table.
 *
 * 
 *
 * @method     Oops_Model_AttachmentQuery orderByIdAttachment($order = Criteria::ASC) Order by the id_attachment column
 * @method     Oops_Model_AttachmentQuery orderByFile($order = Criteria::ASC) Order by the file column
 * @method     Oops_Model_AttachmentQuery orderByFileName($order = Criteria::ASC) Order by the file_name column
 * @method     Oops_Model_AttachmentQuery orderByMime($order = Criteria::ASC) Order by the mime column
 *
 * @method     Oops_Model_AttachmentQuery groupByIdAttachment() Group by the id_attachment column
 * @method     Oops_Model_AttachmentQuery groupByFile() Group by the file column
 * @method     Oops_Model_AttachmentQuery groupByFileName() Group by the file_name column
 * @method     Oops_Model_AttachmentQuery groupByMime() Group by the mime column
 *
 * @method     Oops_Model_AttachmentQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     Oops_Model_AttachmentQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     Oops_Model_AttachmentQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     Oops_Model_Attachment findOne(PropelPDO $con = null) Return the first Oops_Model_Attachment matching the query
 * @method     Oops_Model_Attachment findOneOrCreate(PropelPDO $con = null) Return the first Oops_Model_Attachment matching the query, or a new Oops_Model_Attachment object populated from the query conditions when no match is found
 *
 * @method     Oops_Model_Attachment findOneByIdAttachment(int $id_attachment) Return the first Oops_Model_Attachment filtered by the id_attachment column
 * @method     Oops_Model_Attachment findOneByFile(string $file) Return the first Oops_Model_Attachment filtered by the file column
 * @method     Oops_Model_Attachment findOneByFileName(string $file_name) Return the first Oops_Model_Attachment filtered by the file_name column
 * @method     Oops_Model_Attachment findOneByMime(string $mime) Return the first Oops_Model_Attachment filtered by the mime column
 *
 * @method     array findByIdAttachment(int $id_attachment) Return Oops_Model_Attachment objects filtered by the id_attachment column
 * @method     array findByFile(string $file) Return Oops_Model_Attachment objects filtered by the file column
 * @method     array findByFileName(string $file_name) Return Oops_Model_Attachment objects filtered by the file_name column
 * @method     array findByMime(string $mime) Return Oops_Model_Attachment objects filtered by the mime column
 *
 * @package    propel.generator.prestashop.om
 */
abstract class Oops_Model_Base_AttachmentQuery extends ModelCriteria
{
	
	/**
	 * Initializes internal state of Oops_Model_Base_AttachmentQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'prestashop', $modelName = 'Oops_Model_Attachment', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new Oops_Model_AttachmentQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    Oops_Model_AttachmentQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof Oops_Model_AttachmentQuery) {
			return $criteria;
		}
		$query = new Oops_Model_AttachmentQuery();
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
	 * @return    Oops_Model_Attachment|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ($key === null) {
			return null;
		}
		if ((null !== ($obj = Oops_Model_AttachmentPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
			// the object is alredy in the instance pool
			return $obj;
		}
		if ($con === null) {
			$con = Propel::getConnection(Oops_Model_AttachmentPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
	 * @return    Oops_Model_Attachment A model object, or null if the key is not found
	 */
	protected function findPkSimple($key, $con)
	{
		$sql = 'SELECT `ID_ATTACHMENT`, `FILE`, `FILE_NAME`, `MIME` FROM `' . _DB_PREFIX_ . 'attachment` WHERE `ID_ATTACHMENT` = :p0';
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
			$obj = new Oops_Model_Attachment();
			$obj->hydrate($row);
			Oops_Model_AttachmentPeer::addInstanceToPool($obj, (string) $row[0]);
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
	 * @return    Oops_Model_Attachment|array|mixed the result, formatted by the current formatter
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
	 * @return    Oops_Model_AttachmentQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(Oops_Model_AttachmentPeer::ID_ATTACHMENT, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    Oops_Model_AttachmentQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(Oops_Model_AttachmentPeer::ID_ATTACHMENT, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id_attachment column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByIdAttachment(1234); // WHERE id_attachment = 1234
	 * $query->filterByIdAttachment(array(12, 34)); // WHERE id_attachment IN (12, 34)
	 * $query->filterByIdAttachment(array('min' => 12)); // WHERE id_attachment > 12
	 * </code>
	 *
	 * @param     mixed $idAttachment The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_AttachmentQuery The current query, for fluid interface
	 */
	public function filterByIdAttachment($idAttachment = null, $comparison = null)
	{
		if (is_array($idAttachment) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(Oops_Model_AttachmentPeer::ID_ATTACHMENT, $idAttachment, $comparison);
	}

	/**
	 * Filter the query on the file column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByFile('fooValue');   // WHERE file = 'fooValue'
	 * $query->filterByFile('%fooValue%'); // WHERE file LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $file The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_AttachmentQuery The current query, for fluid interface
	 */
	public function filterByFile($file = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($file)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $file)) {
				$file = str_replace('*', '%', $file);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(Oops_Model_AttachmentPeer::FILE, $file, $comparison);
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
	 * @return    Oops_Model_AttachmentQuery The current query, for fluid interface
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
		return $this->addUsingAlias(Oops_Model_AttachmentPeer::FILE_NAME, $fileName, $comparison);
	}

	/**
	 * Filter the query on the mime column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByMime('fooValue');   // WHERE mime = 'fooValue'
	 * $query->filterByMime('%fooValue%'); // WHERE mime LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $mime The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_AttachmentQuery The current query, for fluid interface
	 */
	public function filterByMime($mime = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($mime)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $mime)) {
				$mime = str_replace('*', '%', $mime);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(Oops_Model_AttachmentPeer::MIME, $mime, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     Oops_Model_Attachment $attachment Object to remove from the list of results
	 *
	 * @return    Oops_Model_AttachmentQuery The current query, for fluid interface
	 */
	public function prune($attachment = null)
	{
		if ($attachment) {
			$this->addUsingAlias(Oops_Model_AttachmentPeer::ID_ATTACHMENT, $attachment->getIdAttachment(), Criteria::NOT_EQUAL);
		}

		return $this;
	}

} // Oops_Model_Base_AttachmentQuery