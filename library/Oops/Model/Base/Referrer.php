<?php


/**
 * Base class that represents a row from the 'referrer' table.
 *
 * 
 *
 * @package    propel.generator.prestashop.om
 */
abstract class Oops_Model_Base_Referrer extends BaseObject  implements Persistent
{

	/**
	 * Peer class name
	 */
	const PEER = 'Oops_Model_ReferrerPeer';

	/**
	 * The Peer class.
	 * Instance provides a convenient way of calling static methods on a class
	 * that calling code may not be able to identify.
	 * @var        Oops_Model_ReferrerPeer
	 */
	protected static $peer;

	/**
	 * The value for the id_referrer field.
	 * @var        int
	 */
	protected $id_referrer;

	/**
	 * The value for the name field.
	 * @var        string
	 */
	protected $name;

	/**
	 * The value for the passwd field.
	 * @var        string
	 */
	protected $passwd;

	/**
	 * The value for the http_referer_regexp field.
	 * @var        string
	 */
	protected $http_referer_regexp;

	/**
	 * The value for the http_referer_like field.
	 * @var        string
	 */
	protected $http_referer_like;

	/**
	 * The value for the request_uri_regexp field.
	 * @var        string
	 */
	protected $request_uri_regexp;

	/**
	 * The value for the request_uri_like field.
	 * @var        string
	 */
	protected $request_uri_like;

	/**
	 * The value for the http_referer_regexp_not field.
	 * @var        string
	 */
	protected $http_referer_regexp_not;

	/**
	 * The value for the http_referer_like_not field.
	 * @var        string
	 */
	protected $http_referer_like_not;

	/**
	 * The value for the request_uri_regexp_not field.
	 * @var        string
	 */
	protected $request_uri_regexp_not;

	/**
	 * The value for the request_uri_like_not field.
	 * @var        string
	 */
	protected $request_uri_like_not;

	/**
	 * The value for the base_fee field.
	 * Note: this column has a database default value of: '0.00'
	 * @var        string
	 */
	protected $base_fee;

	/**
	 * The value for the percent_fee field.
	 * Note: this column has a database default value of: '0.00'
	 * @var        string
	 */
	protected $percent_fee;

	/**
	 * The value for the click_fee field.
	 * Note: this column has a database default value of: '0.00'
	 * @var        string
	 */
	protected $click_fee;

	/**
	 * The value for the cache_visitors field.
	 * @var        int
	 */
	protected $cache_visitors;

	/**
	 * The value for the cache_visits field.
	 * @var        int
	 */
	protected $cache_visits;

	/**
	 * The value for the cache_pages field.
	 * @var        int
	 */
	protected $cache_pages;

	/**
	 * The value for the cache_registrations field.
	 * @var        int
	 */
	protected $cache_registrations;

	/**
	 * The value for the cache_orders field.
	 * @var        int
	 */
	protected $cache_orders;

	/**
	 * The value for the cache_sales field.
	 * @var        string
	 */
	protected $cache_sales;

	/**
	 * The value for the cache_reg_rate field.
	 * @var        string
	 */
	protected $cache_reg_rate;

	/**
	 * The value for the cache_order_rate field.
	 * @var        string
	 */
	protected $cache_order_rate;

	/**
	 * The value for the date_add field.
	 * @var        string
	 */
	protected $date_add;

	/**
	 * Flag to prevent endless save loop, if this object is referenced
	 * by another object which falls in this transaction.
	 * @var        boolean
	 */
	protected $alreadyInSave = false;

	/**
	 * Flag to prevent endless validation loop, if this object is referenced
	 * by another object which falls in this transaction.
	 * @var        boolean
	 */
	protected $alreadyInValidation = false;

	/**
	 * Applies default values to this object.
	 * This method should be called from the object's constructor (or
	 * equivalent initialization method).
	 * @see        __construct()
	 */
	public function applyDefaultValues()
	{
		$this->base_fee = '0.00';
		$this->percent_fee = '0.00';
		$this->click_fee = '0.00';
	}

	/**
	 * Initializes internal state of Oops_Model_Base_Referrer object.
	 * @see        applyDefaults()
	 */
	public function __construct()
	{
		parent::__construct();
		$this->applyDefaultValues();
	}

	/**
	 * Get the [id_referrer] column value.
	 * 
	 * @return     int
	 */
	public function getIdReferrer()
	{
		return $this->id_referrer;
	}

	/**
	 * Get the [name] column value.
	 * 
	 * @return     string
	 */
	public function getName()
	{
		return $this->name;
	}

	/**
	 * Get the [passwd] column value.
	 * 
	 * @return     string
	 */
	public function getPasswd()
	{
		return $this->passwd;
	}

	/**
	 * Get the [http_referer_regexp] column value.
	 * 
	 * @return     string
	 */
	public function getHttpRefererRegexp()
	{
		return $this->http_referer_regexp;
	}

	/**
	 * Get the [http_referer_like] column value.
	 * 
	 * @return     string
	 */
	public function getHttpRefererLike()
	{
		return $this->http_referer_like;
	}

	/**
	 * Get the [request_uri_regexp] column value.
	 * 
	 * @return     string
	 */
	public function getRequestUriRegexp()
	{
		return $this->request_uri_regexp;
	}

	/**
	 * Get the [request_uri_like] column value.
	 * 
	 * @return     string
	 */
	public function getRequestUriLike()
	{
		return $this->request_uri_like;
	}

	/**
	 * Get the [http_referer_regexp_not] column value.
	 * 
	 * @return     string
	 */
	public function getHttpRefererRegexpNot()
	{
		return $this->http_referer_regexp_not;
	}

	/**
	 * Get the [http_referer_like_not] column value.
	 * 
	 * @return     string
	 */
	public function getHttpRefererLikeNot()
	{
		return $this->http_referer_like_not;
	}

	/**
	 * Get the [request_uri_regexp_not] column value.
	 * 
	 * @return     string
	 */
	public function getRequestUriRegexpNot()
	{
		return $this->request_uri_regexp_not;
	}

	/**
	 * Get the [request_uri_like_not] column value.
	 * 
	 * @return     string
	 */
	public function getRequestUriLikeNot()
	{
		return $this->request_uri_like_not;
	}

	/**
	 * Get the [base_fee] column value.
	 * 
	 * @return     string
	 */
	public function getBaseFee()
	{
		return $this->base_fee;
	}

	/**
	 * Get the [percent_fee] column value.
	 * 
	 * @return     string
	 */
	public function getPercentFee()
	{
		return $this->percent_fee;
	}

	/**
	 * Get the [click_fee] column value.
	 * 
	 * @return     string
	 */
	public function getClickFee()
	{
		return $this->click_fee;
	}

	/**
	 * Get the [cache_visitors] column value.
	 * 
	 * @return     int
	 */
	public function getCacheVisitors()
	{
		return $this->cache_visitors;
	}

	/**
	 * Get the [cache_visits] column value.
	 * 
	 * @return     int
	 */
	public function getCacheVisits()
	{
		return $this->cache_visits;
	}

	/**
	 * Get the [cache_pages] column value.
	 * 
	 * @return     int
	 */
	public function getCachePages()
	{
		return $this->cache_pages;
	}

	/**
	 * Get the [cache_registrations] column value.
	 * 
	 * @return     int
	 */
	public function getCacheRegistrations()
	{
		return $this->cache_registrations;
	}

	/**
	 * Get the [cache_orders] column value.
	 * 
	 * @return     int
	 */
	public function getCacheOrders()
	{
		return $this->cache_orders;
	}

	/**
	 * Get the [cache_sales] column value.
	 * 
	 * @return     string
	 */
	public function getCacheSales()
	{
		return $this->cache_sales;
	}

	/**
	 * Get the [cache_reg_rate] column value.
	 * 
	 * @return     string
	 */
	public function getCacheRegRate()
	{
		return $this->cache_reg_rate;
	}

	/**
	 * Get the [cache_order_rate] column value.
	 * 
	 * @return     string
	 */
	public function getCacheOrderRate()
	{
		return $this->cache_order_rate;
	}

	/**
	 * Get the [optionally formatted] temporal [date_add] column value.
	 * 
	 *
	 * @param      string $format The date/time format string (either date()-style or strftime()-style).
	 *							If format is NULL, then the raw DateTime object will be returned.
	 * @return     mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00 00:00:00
	 * @throws     PropelException - if unable to parse/validate the date/time value.
	 */
	public function getDateAdd($format = 'Y-m-d H:i:s')
	{
		if ($this->date_add === null) {
			return null;
		}


		if ($this->date_add === '0000-00-00 00:00:00') {
			// while technically this is not a default value of NULL,
			// this seems to be closest in meaning.
			return null;
		} else {
			try {
				$dt = new DateTime($this->date_add);
			} catch (Exception $x) {
				throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->date_add, true), $x);
			}
		}

		if ($format === null) {
			// Because propel.useDateTimeClass is TRUE, we return a DateTime object.
			return $dt;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $dt->format('U'));
		} else {
			return $dt->format($format);
		}
	}

	/**
	 * Set the value of [id_referrer] column.
	 * 
	 * @param      int $v new value
	 * @return     Oops_Model_Referrer The current object (for fluent API support)
	 */
	public function setIdReferrer($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->id_referrer !== $v) {
			$this->id_referrer = $v;
			$this->modifiedColumns[] = Oops_Model_ReferrerPeer::ID_REFERRER;
		}

		return $this;
	} // setIdReferrer()

	/**
	 * Set the value of [name] column.
	 * 
	 * @param      string $v new value
	 * @return     Oops_Model_Referrer The current object (for fluent API support)
	 */
	public function setName($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->name !== $v) {
			$this->name = $v;
			$this->modifiedColumns[] = Oops_Model_ReferrerPeer::NAME;
		}

		return $this;
	} // setName()

	/**
	 * Set the value of [passwd] column.
	 * 
	 * @param      string $v new value
	 * @return     Oops_Model_Referrer The current object (for fluent API support)
	 */
	public function setPasswd($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->passwd !== $v) {
			$this->passwd = $v;
			$this->modifiedColumns[] = Oops_Model_ReferrerPeer::PASSWD;
		}

		return $this;
	} // setPasswd()

	/**
	 * Set the value of [http_referer_regexp] column.
	 * 
	 * @param      string $v new value
	 * @return     Oops_Model_Referrer The current object (for fluent API support)
	 */
	public function setHttpRefererRegexp($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->http_referer_regexp !== $v) {
			$this->http_referer_regexp = $v;
			$this->modifiedColumns[] = Oops_Model_ReferrerPeer::HTTP_REFERER_REGEXP;
		}

		return $this;
	} // setHttpRefererRegexp()

	/**
	 * Set the value of [http_referer_like] column.
	 * 
	 * @param      string $v new value
	 * @return     Oops_Model_Referrer The current object (for fluent API support)
	 */
	public function setHttpRefererLike($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->http_referer_like !== $v) {
			$this->http_referer_like = $v;
			$this->modifiedColumns[] = Oops_Model_ReferrerPeer::HTTP_REFERER_LIKE;
		}

		return $this;
	} // setHttpRefererLike()

	/**
	 * Set the value of [request_uri_regexp] column.
	 * 
	 * @param      string $v new value
	 * @return     Oops_Model_Referrer The current object (for fluent API support)
	 */
	public function setRequestUriRegexp($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->request_uri_regexp !== $v) {
			$this->request_uri_regexp = $v;
			$this->modifiedColumns[] = Oops_Model_ReferrerPeer::REQUEST_URI_REGEXP;
		}

		return $this;
	} // setRequestUriRegexp()

	/**
	 * Set the value of [request_uri_like] column.
	 * 
	 * @param      string $v new value
	 * @return     Oops_Model_Referrer The current object (for fluent API support)
	 */
	public function setRequestUriLike($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->request_uri_like !== $v) {
			$this->request_uri_like = $v;
			$this->modifiedColumns[] = Oops_Model_ReferrerPeer::REQUEST_URI_LIKE;
		}

		return $this;
	} // setRequestUriLike()

	/**
	 * Set the value of [http_referer_regexp_not] column.
	 * 
	 * @param      string $v new value
	 * @return     Oops_Model_Referrer The current object (for fluent API support)
	 */
	public function setHttpRefererRegexpNot($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->http_referer_regexp_not !== $v) {
			$this->http_referer_regexp_not = $v;
			$this->modifiedColumns[] = Oops_Model_ReferrerPeer::HTTP_REFERER_REGEXP_NOT;
		}

		return $this;
	} // setHttpRefererRegexpNot()

	/**
	 * Set the value of [http_referer_like_not] column.
	 * 
	 * @param      string $v new value
	 * @return     Oops_Model_Referrer The current object (for fluent API support)
	 */
	public function setHttpRefererLikeNot($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->http_referer_like_not !== $v) {
			$this->http_referer_like_not = $v;
			$this->modifiedColumns[] = Oops_Model_ReferrerPeer::HTTP_REFERER_LIKE_NOT;
		}

		return $this;
	} // setHttpRefererLikeNot()

	/**
	 * Set the value of [request_uri_regexp_not] column.
	 * 
	 * @param      string $v new value
	 * @return     Oops_Model_Referrer The current object (for fluent API support)
	 */
	public function setRequestUriRegexpNot($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->request_uri_regexp_not !== $v) {
			$this->request_uri_regexp_not = $v;
			$this->modifiedColumns[] = Oops_Model_ReferrerPeer::REQUEST_URI_REGEXP_NOT;
		}

		return $this;
	} // setRequestUriRegexpNot()

	/**
	 * Set the value of [request_uri_like_not] column.
	 * 
	 * @param      string $v new value
	 * @return     Oops_Model_Referrer The current object (for fluent API support)
	 */
	public function setRequestUriLikeNot($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->request_uri_like_not !== $v) {
			$this->request_uri_like_not = $v;
			$this->modifiedColumns[] = Oops_Model_ReferrerPeer::REQUEST_URI_LIKE_NOT;
		}

		return $this;
	} // setRequestUriLikeNot()

	/**
	 * Set the value of [base_fee] column.
	 * 
	 * @param      string $v new value
	 * @return     Oops_Model_Referrer The current object (for fluent API support)
	 */
	public function setBaseFee($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->base_fee !== $v) {
			$this->base_fee = $v;
			$this->modifiedColumns[] = Oops_Model_ReferrerPeer::BASE_FEE;
		}

		return $this;
	} // setBaseFee()

	/**
	 * Set the value of [percent_fee] column.
	 * 
	 * @param      string $v new value
	 * @return     Oops_Model_Referrer The current object (for fluent API support)
	 */
	public function setPercentFee($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->percent_fee !== $v) {
			$this->percent_fee = $v;
			$this->modifiedColumns[] = Oops_Model_ReferrerPeer::PERCENT_FEE;
		}

		return $this;
	} // setPercentFee()

	/**
	 * Set the value of [click_fee] column.
	 * 
	 * @param      string $v new value
	 * @return     Oops_Model_Referrer The current object (for fluent API support)
	 */
	public function setClickFee($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->click_fee !== $v) {
			$this->click_fee = $v;
			$this->modifiedColumns[] = Oops_Model_ReferrerPeer::CLICK_FEE;
		}

		return $this;
	} // setClickFee()

	/**
	 * Set the value of [cache_visitors] column.
	 * 
	 * @param      int $v new value
	 * @return     Oops_Model_Referrer The current object (for fluent API support)
	 */
	public function setCacheVisitors($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->cache_visitors !== $v) {
			$this->cache_visitors = $v;
			$this->modifiedColumns[] = Oops_Model_ReferrerPeer::CACHE_VISITORS;
		}

		return $this;
	} // setCacheVisitors()

	/**
	 * Set the value of [cache_visits] column.
	 * 
	 * @param      int $v new value
	 * @return     Oops_Model_Referrer The current object (for fluent API support)
	 */
	public function setCacheVisits($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->cache_visits !== $v) {
			$this->cache_visits = $v;
			$this->modifiedColumns[] = Oops_Model_ReferrerPeer::CACHE_VISITS;
		}

		return $this;
	} // setCacheVisits()

	/**
	 * Set the value of [cache_pages] column.
	 * 
	 * @param      int $v new value
	 * @return     Oops_Model_Referrer The current object (for fluent API support)
	 */
	public function setCachePages($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->cache_pages !== $v) {
			$this->cache_pages = $v;
			$this->modifiedColumns[] = Oops_Model_ReferrerPeer::CACHE_PAGES;
		}

		return $this;
	} // setCachePages()

	/**
	 * Set the value of [cache_registrations] column.
	 * 
	 * @param      int $v new value
	 * @return     Oops_Model_Referrer The current object (for fluent API support)
	 */
	public function setCacheRegistrations($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->cache_registrations !== $v) {
			$this->cache_registrations = $v;
			$this->modifiedColumns[] = Oops_Model_ReferrerPeer::CACHE_REGISTRATIONS;
		}

		return $this;
	} // setCacheRegistrations()

	/**
	 * Set the value of [cache_orders] column.
	 * 
	 * @param      int $v new value
	 * @return     Oops_Model_Referrer The current object (for fluent API support)
	 */
	public function setCacheOrders($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->cache_orders !== $v) {
			$this->cache_orders = $v;
			$this->modifiedColumns[] = Oops_Model_ReferrerPeer::CACHE_ORDERS;
		}

		return $this;
	} // setCacheOrders()

	/**
	 * Set the value of [cache_sales] column.
	 * 
	 * @param      string $v new value
	 * @return     Oops_Model_Referrer The current object (for fluent API support)
	 */
	public function setCacheSales($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->cache_sales !== $v) {
			$this->cache_sales = $v;
			$this->modifiedColumns[] = Oops_Model_ReferrerPeer::CACHE_SALES;
		}

		return $this;
	} // setCacheSales()

	/**
	 * Set the value of [cache_reg_rate] column.
	 * 
	 * @param      string $v new value
	 * @return     Oops_Model_Referrer The current object (for fluent API support)
	 */
	public function setCacheRegRate($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->cache_reg_rate !== $v) {
			$this->cache_reg_rate = $v;
			$this->modifiedColumns[] = Oops_Model_ReferrerPeer::CACHE_REG_RATE;
		}

		return $this;
	} // setCacheRegRate()

	/**
	 * Set the value of [cache_order_rate] column.
	 * 
	 * @param      string $v new value
	 * @return     Oops_Model_Referrer The current object (for fluent API support)
	 */
	public function setCacheOrderRate($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->cache_order_rate !== $v) {
			$this->cache_order_rate = $v;
			$this->modifiedColumns[] = Oops_Model_ReferrerPeer::CACHE_ORDER_RATE;
		}

		return $this;
	} // setCacheOrderRate()

	/**
	 * Sets the value of [date_add] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.
	 *               Empty strings are treated as NULL.
	 * @return     Oops_Model_Referrer The current object (for fluent API support)
	 */
	public function setDateAdd($v)
	{
		$dt = PropelDateTime::newInstance($v, null, 'DateTime');
		if ($this->date_add !== null || $dt !== null) {
			$currentDateAsString = ($this->date_add !== null && $tmpDt = new DateTime($this->date_add)) ? $tmpDt->format('Y-m-d H:i:s') : null;
			$newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
			if ($currentDateAsString !== $newDateAsString) {
				$this->date_add = $newDateAsString;
				$this->modifiedColumns[] = Oops_Model_ReferrerPeer::DATE_ADD;
			}
		} // if either are not null

		return $this;
	} // setDateAdd()

	/**
	 * Indicates whether the columns in this object are only set to default values.
	 *
	 * This method can be used in conjunction with isModified() to indicate whether an object is both
	 * modified _and_ has some values set which are non-default.
	 *
	 * @return     boolean Whether the columns in this object are only been set with default values.
	 */
	public function hasOnlyDefaultValues()
	{
			if ($this->base_fee !== '0.00') {
				return false;
			}

			if ($this->percent_fee !== '0.00') {
				return false;
			}

			if ($this->click_fee !== '0.00') {
				return false;
			}

		// otherwise, everything was equal, so return TRUE
		return true;
	} // hasOnlyDefaultValues()

	/**
	 * Hydrates (populates) the object variables with values from the database resultset.
	 *
	 * An offset (0-based "start column") is specified so that objects can be hydrated
	 * with a subset of the columns in the resultset rows.  This is needed, for example,
	 * for results of JOIN queries where the resultset row includes columns from two or
	 * more tables.
	 *
	 * @param      array $row The row returned by PDOStatement->fetch(PDO::FETCH_NUM)
	 * @param      int $startcol 0-based offset column which indicates which restultset column to start with.
	 * @param      boolean $rehydrate Whether this object is being re-hydrated from the database.
	 * @return     int next starting column
	 * @throws     PropelException  - Any caught Exception will be rewrapped as a PropelException.
	 */
	public function hydrate($row, $startcol = 0, $rehydrate = false)
	{
		try {

			$this->id_referrer = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
			$this->name = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
			$this->passwd = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
			$this->http_referer_regexp = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
			$this->http_referer_like = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
			$this->request_uri_regexp = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
			$this->request_uri_like = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
			$this->http_referer_regexp_not = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
			$this->http_referer_like_not = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
			$this->request_uri_regexp_not = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
			$this->request_uri_like_not = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
			$this->base_fee = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
			$this->percent_fee = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
			$this->click_fee = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
			$this->cache_visitors = ($row[$startcol + 14] !== null) ? (int) $row[$startcol + 14] : null;
			$this->cache_visits = ($row[$startcol + 15] !== null) ? (int) $row[$startcol + 15] : null;
			$this->cache_pages = ($row[$startcol + 16] !== null) ? (int) $row[$startcol + 16] : null;
			$this->cache_registrations = ($row[$startcol + 17] !== null) ? (int) $row[$startcol + 17] : null;
			$this->cache_orders = ($row[$startcol + 18] !== null) ? (int) $row[$startcol + 18] : null;
			$this->cache_sales = ($row[$startcol + 19] !== null) ? (string) $row[$startcol + 19] : null;
			$this->cache_reg_rate = ($row[$startcol + 20] !== null) ? (string) $row[$startcol + 20] : null;
			$this->cache_order_rate = ($row[$startcol + 21] !== null) ? (string) $row[$startcol + 21] : null;
			$this->date_add = ($row[$startcol + 22] !== null) ? (string) $row[$startcol + 22] : null;
			$this->resetModified();

			$this->setNew(false);

			if ($rehydrate) {
				$this->ensureConsistency();
			}

			return $startcol + 23; // 23 = Oops_Model_ReferrerPeer::NUM_HYDRATE_COLUMNS.

		} catch (Exception $e) {
			throw new PropelException("Error populating Oops_Model_Referrer object", $e);
		}
	}

	/**
	 * Checks and repairs the internal consistency of the object.
	 *
	 * This method is executed after an already-instantiated object is re-hydrated
	 * from the database.  It exists to check any foreign keys to make sure that
	 * the objects related to the current object are correct based on foreign key.
	 *
	 * You can override this method in the stub class, but you should always invoke
	 * the base method from the overridden method (i.e. parent::ensureConsistency()),
	 * in case your model changes.
	 *
	 * @throws     PropelException
	 */
	public function ensureConsistency()
	{

	} // ensureConsistency

	/**
	 * Reloads this object from datastore based on primary key and (optionally) resets all associated objects.
	 *
	 * This will only work if the object has been saved and has a valid primary key set.
	 *
	 * @param      boolean $deep (optional) Whether to also de-associated any related objects.
	 * @param      PropelPDO $con (optional) The PropelPDO connection to use.
	 * @return     void
	 * @throws     PropelException - if this object is deleted, unsaved or doesn't have pk match in db
	 */
	public function reload($deep = false, PropelPDO $con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("Cannot reload a deleted object.");
		}

		if ($this->isNew()) {
			throw new PropelException("Cannot reload an unsaved object.");
		}

		if ($con === null) {
			$con = Propel::getConnection(Oops_Model_ReferrerPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		// We don't need to alter the object instance pool; we're just modifying this instance
		// already in the pool.

		$stmt = Oops_Model_ReferrerPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
		$row = $stmt->fetch(PDO::FETCH_NUM);
		$stmt->closeCursor();
		if (!$row) {
			throw new PropelException('Cannot find matching row in the database to reload object values.');
		}
		$this->hydrate($row, 0, true); // rehydrate

		if ($deep) {  // also de-associate any related objects?

		} // if (deep)
	}

	/**
	 * Removes this object from datastore and sets delete attribute.
	 *
	 * @param      PropelPDO $con
	 * @return     void
	 * @throws     PropelException
	 * @see        BaseObject::setDeleted()
	 * @see        BaseObject::isDeleted()
	 */
	public function delete(PropelPDO $con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(Oops_Model_ReferrerPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$con->beginTransaction();
		try {
			$deleteQuery = Oops_Model_ReferrerQuery::create()
				->filterByPrimaryKey($this->getPrimaryKey());
			$ret = $this->preDelete($con);
			if ($ret) {
				$deleteQuery->delete($con);
				$this->postDelete($con);
				$con->commit();
				$this->setDeleted(true);
			} else {
				$con->commit();
			}
		} catch (Exception $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Persists this object to the database.
	 *
	 * If the object is new, it inserts it; otherwise an update is performed.
	 * All modified related objects will also be persisted in the doSave()
	 * method.  This method wraps all precipitate database operations in a
	 * single transaction.
	 *
	 * @param      PropelPDO $con
	 * @return     int The number of rows affected by this insert/update and any referring fk objects' save() operations.
	 * @throws     PropelException
	 * @see        doSave()
	 */
	public function save(PropelPDO $con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("You cannot save an object that has been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(Oops_Model_ReferrerPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$con->beginTransaction();
		$isInsert = $this->isNew();
		try {
			$ret = $this->preSave($con);
			if ($isInsert) {
				$ret = $ret && $this->preInsert($con);
			} else {
				$ret = $ret && $this->preUpdate($con);
			}
			if ($ret) {
				$affectedRows = $this->doSave($con);
				if ($isInsert) {
					$this->postInsert($con);
				} else {
					$this->postUpdate($con);
				}
				$this->postSave($con);
				Oops_Model_ReferrerPeer::addInstanceToPool($this);
			} else {
				$affectedRows = 0;
			}
			$con->commit();
			return $affectedRows;
		} catch (Exception $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Performs the work of inserting or updating the row in the database.
	 *
	 * If the object is new, it inserts it; otherwise an update is performed.
	 * All related objects are also updated in this method.
	 *
	 * @param      PropelPDO $con
	 * @return     int The number of rows affected by this insert/update and any referring fk objects' save() operations.
	 * @throws     PropelException
	 * @see        save()
	 */
	protected function doSave(PropelPDO $con)
	{
		$affectedRows = 0; // initialize var to track total num of affected rows
		if (!$this->alreadyInSave) {
			$this->alreadyInSave = true;

			if ($this->isNew() || $this->isModified()) {
				// persist changes
				if ($this->isNew()) {
					$this->doInsert($con);
				} else {
					$this->doUpdate($con);
				}
				$affectedRows += 1;
				$this->resetModified();
			}

			$this->alreadyInSave = false;

		}
		return $affectedRows;
	} // doSave()

	/**
	 * Insert the row in the database.
	 *
	 * @param      PropelPDO $con
	 *
	 * @throws     PropelException
	 * @see        doSave()
	 */
	protected function doInsert(PropelPDO $con)
	{
		$modifiedColumns = array();
		$index = 0;

		$this->modifiedColumns[] = Oops_Model_ReferrerPeer::ID_REFERRER;
		if (null !== $this->id_referrer) {
			throw new PropelException('Cannot insert a value for auto-increment primary key (' . Oops_Model_ReferrerPeer::ID_REFERRER . ')');
		}

		 // check the columns in natural order for more readable SQL queries
		if ($this->isColumnModified(Oops_Model_ReferrerPeer::ID_REFERRER)) {
			$modifiedColumns[':p' . $index++]  = '`ID_REFERRER`';
		}
		if ($this->isColumnModified(Oops_Model_ReferrerPeer::NAME)) {
			$modifiedColumns[':p' . $index++]  = '`NAME`';
		}
		if ($this->isColumnModified(Oops_Model_ReferrerPeer::PASSWD)) {
			$modifiedColumns[':p' . $index++]  = '`PASSWD`';
		}
		if ($this->isColumnModified(Oops_Model_ReferrerPeer::HTTP_REFERER_REGEXP)) {
			$modifiedColumns[':p' . $index++]  = '`HTTP_REFERER_REGEXP`';
		}
		if ($this->isColumnModified(Oops_Model_ReferrerPeer::HTTP_REFERER_LIKE)) {
			$modifiedColumns[':p' . $index++]  = '`HTTP_REFERER_LIKE`';
		}
		if ($this->isColumnModified(Oops_Model_ReferrerPeer::REQUEST_URI_REGEXP)) {
			$modifiedColumns[':p' . $index++]  = '`REQUEST_URI_REGEXP`';
		}
		if ($this->isColumnModified(Oops_Model_ReferrerPeer::REQUEST_URI_LIKE)) {
			$modifiedColumns[':p' . $index++]  = '`REQUEST_URI_LIKE`';
		}
		if ($this->isColumnModified(Oops_Model_ReferrerPeer::HTTP_REFERER_REGEXP_NOT)) {
			$modifiedColumns[':p' . $index++]  = '`HTTP_REFERER_REGEXP_NOT`';
		}
		if ($this->isColumnModified(Oops_Model_ReferrerPeer::HTTP_REFERER_LIKE_NOT)) {
			$modifiedColumns[':p' . $index++]  = '`HTTP_REFERER_LIKE_NOT`';
		}
		if ($this->isColumnModified(Oops_Model_ReferrerPeer::REQUEST_URI_REGEXP_NOT)) {
			$modifiedColumns[':p' . $index++]  = '`REQUEST_URI_REGEXP_NOT`';
		}
		if ($this->isColumnModified(Oops_Model_ReferrerPeer::REQUEST_URI_LIKE_NOT)) {
			$modifiedColumns[':p' . $index++]  = '`REQUEST_URI_LIKE_NOT`';
		}
		if ($this->isColumnModified(Oops_Model_ReferrerPeer::BASE_FEE)) {
			$modifiedColumns[':p' . $index++]  = '`BASE_FEE`';
		}
		if ($this->isColumnModified(Oops_Model_ReferrerPeer::PERCENT_FEE)) {
			$modifiedColumns[':p' . $index++]  = '`PERCENT_FEE`';
		}
		if ($this->isColumnModified(Oops_Model_ReferrerPeer::CLICK_FEE)) {
			$modifiedColumns[':p' . $index++]  = '`CLICK_FEE`';
		}
		if ($this->isColumnModified(Oops_Model_ReferrerPeer::CACHE_VISITORS)) {
			$modifiedColumns[':p' . $index++]  = '`CACHE_VISITORS`';
		}
		if ($this->isColumnModified(Oops_Model_ReferrerPeer::CACHE_VISITS)) {
			$modifiedColumns[':p' . $index++]  = '`CACHE_VISITS`';
		}
		if ($this->isColumnModified(Oops_Model_ReferrerPeer::CACHE_PAGES)) {
			$modifiedColumns[':p' . $index++]  = '`CACHE_PAGES`';
		}
		if ($this->isColumnModified(Oops_Model_ReferrerPeer::CACHE_REGISTRATIONS)) {
			$modifiedColumns[':p' . $index++]  = '`CACHE_REGISTRATIONS`';
		}
		if ($this->isColumnModified(Oops_Model_ReferrerPeer::CACHE_ORDERS)) {
			$modifiedColumns[':p' . $index++]  = '`CACHE_ORDERS`';
		}
		if ($this->isColumnModified(Oops_Model_ReferrerPeer::CACHE_SALES)) {
			$modifiedColumns[':p' . $index++]  = '`CACHE_SALES`';
		}
		if ($this->isColumnModified(Oops_Model_ReferrerPeer::CACHE_REG_RATE)) {
			$modifiedColumns[':p' . $index++]  = '`CACHE_REG_RATE`';
		}
		if ($this->isColumnModified(Oops_Model_ReferrerPeer::CACHE_ORDER_RATE)) {
			$modifiedColumns[':p' . $index++]  = '`CACHE_ORDER_RATE`';
		}
		if ($this->isColumnModified(Oops_Model_ReferrerPeer::DATE_ADD)) {
			$modifiedColumns[':p' . $index++]  = '`DATE_ADD`';
		}

		$sql = sprintf(
			'INSERT INTO `' .  _DB_PREFIX_ . 'referrer` (%s) VALUES (%s)',
			implode(', ', $modifiedColumns),
			implode(', ', array_keys($modifiedColumns))
		);

		try {
			$stmt = $con->prepare($sql);
			foreach ($modifiedColumns as $identifier => $columnName) {
				switch ($columnName) {
					case '`ID_REFERRER`':
						$stmt->bindValue($identifier, $this->id_referrer, PDO::PARAM_INT);
						break;
					case '`NAME`':
						$stmt->bindValue($identifier, $this->name, PDO::PARAM_STR);
						break;
					case '`PASSWD`':
						$stmt->bindValue($identifier, $this->passwd, PDO::PARAM_STR);
						break;
					case '`HTTP_REFERER_REGEXP`':
						$stmt->bindValue($identifier, $this->http_referer_regexp, PDO::PARAM_STR);
						break;
					case '`HTTP_REFERER_LIKE`':
						$stmt->bindValue($identifier, $this->http_referer_like, PDO::PARAM_STR);
						break;
					case '`REQUEST_URI_REGEXP`':
						$stmt->bindValue($identifier, $this->request_uri_regexp, PDO::PARAM_STR);
						break;
					case '`REQUEST_URI_LIKE`':
						$stmt->bindValue($identifier, $this->request_uri_like, PDO::PARAM_STR);
						break;
					case '`HTTP_REFERER_REGEXP_NOT`':
						$stmt->bindValue($identifier, $this->http_referer_regexp_not, PDO::PARAM_STR);
						break;
					case '`HTTP_REFERER_LIKE_NOT`':
						$stmt->bindValue($identifier, $this->http_referer_like_not, PDO::PARAM_STR);
						break;
					case '`REQUEST_URI_REGEXP_NOT`':
						$stmt->bindValue($identifier, $this->request_uri_regexp_not, PDO::PARAM_STR);
						break;
					case '`REQUEST_URI_LIKE_NOT`':
						$stmt->bindValue($identifier, $this->request_uri_like_not, PDO::PARAM_STR);
						break;
					case '`BASE_FEE`':
						$stmt->bindValue($identifier, $this->base_fee, PDO::PARAM_STR);
						break;
					case '`PERCENT_FEE`':
						$stmt->bindValue($identifier, $this->percent_fee, PDO::PARAM_STR);
						break;
					case '`CLICK_FEE`':
						$stmt->bindValue($identifier, $this->click_fee, PDO::PARAM_STR);
						break;
					case '`CACHE_VISITORS`':
						$stmt->bindValue($identifier, $this->cache_visitors, PDO::PARAM_INT);
						break;
					case '`CACHE_VISITS`':
						$stmt->bindValue($identifier, $this->cache_visits, PDO::PARAM_INT);
						break;
					case '`CACHE_PAGES`':
						$stmt->bindValue($identifier, $this->cache_pages, PDO::PARAM_INT);
						break;
					case '`CACHE_REGISTRATIONS`':
						$stmt->bindValue($identifier, $this->cache_registrations, PDO::PARAM_INT);
						break;
					case '`CACHE_ORDERS`':
						$stmt->bindValue($identifier, $this->cache_orders, PDO::PARAM_INT);
						break;
					case '`CACHE_SALES`':
						$stmt->bindValue($identifier, $this->cache_sales, PDO::PARAM_STR);
						break;
					case '`CACHE_REG_RATE`':
						$stmt->bindValue($identifier, $this->cache_reg_rate, PDO::PARAM_STR);
						break;
					case '`CACHE_ORDER_RATE`':
						$stmt->bindValue($identifier, $this->cache_order_rate, PDO::PARAM_STR);
						break;
					case '`DATE_ADD`':
						$stmt->bindValue($identifier, $this->date_add, PDO::PARAM_STR);
						break;
				}
			}
			$stmt->execute();
		} catch (Exception $e) {
			Propel::log($e->getMessage(), Propel::LOG_ERR);
			throw new PropelException(sprintf('Unable to execute INSERT statement [%s]', $sql), $e);
		}

		try {
			$pk = $con->lastInsertId();
		} catch (Exception $e) {
			throw new PropelException('Unable to get autoincrement id.', $e);
		}
		$this->setIdReferrer($pk);

		$this->setNew(false);
	}

	/**
	 * Update the row in the database.
	 *
	 * @param      PropelPDO $con
	 *
	 * @see        doSave()
	 */
	protected function doUpdate(PropelPDO $con)
	{
		$selectCriteria = $this->buildPkeyCriteria();
		$valuesCriteria = $this->buildCriteria();
		BasePeer::doUpdate($selectCriteria, $valuesCriteria, $con);
	}

	/**
	 * Array of ValidationFailed objects.
	 * @var        array ValidationFailed[]
	 */
	protected $validationFailures = array();

	/**
	 * Gets any ValidationFailed objects that resulted from last call to validate().
	 *
	 *
	 * @return     array ValidationFailed[]
	 * @see        validate()
	 */
	public function getValidationFailures()
	{
		return $this->validationFailures;
	}

	/**
	 * Validates the objects modified field values and all objects related to this table.
	 *
	 * If $columns is either a column name or an array of column names
	 * only those columns are validated.
	 *
	 * @param      mixed $columns Column name or an array of column names.
	 * @return     boolean Whether all columns pass validation.
	 * @see        doValidate()
	 * @see        getValidationFailures()
	 */
	public function validate($columns = null)
	{
		$res = $this->doValidate($columns);
		if ($res === true) {
			$this->validationFailures = array();
			return true;
		} else {
			$this->validationFailures = $res;
			return false;
		}
	}

	/**
	 * This function performs the validation work for complex object models.
	 *
	 * In addition to checking the current object, all related objects will
	 * also be validated.  If all pass then <code>true</code> is returned; otherwise
	 * an aggreagated array of ValidationFailed objects will be returned.
	 *
	 * @param      array $columns Array of column names to validate.
	 * @return     mixed <code>true</code> if all validations pass; array of <code>ValidationFailed</code> objets otherwise.
	 */
	protected function doValidate($columns = null)
	{
		if (!$this->alreadyInValidation) {
			$this->alreadyInValidation = true;
			$retval = null;

			$failureMap = array();


			if (($retval = Oops_Model_ReferrerPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	/**
	 * Retrieves a field from the object by name passed in as a string.
	 *
	 * @param      string $name name
	 * @param      string $type The type of fieldname the $name is of:
	 *                     one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
	 *                     BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
	 * @return     mixed Value of field.
	 */
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = Oops_Model_ReferrerPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		$field = $this->getByPosition($pos);
		return $field;
	}

	/**
	 * Retrieves a field from the object by Position as specified in the xml schema.
	 * Zero-based.
	 *
	 * @param      int $pos position in xml schema
	 * @return     mixed Value of field at $pos
	 */
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getIdReferrer();
				break;
			case 1:
				return $this->getName();
				break;
			case 2:
				return $this->getPasswd();
				break;
			case 3:
				return $this->getHttpRefererRegexp();
				break;
			case 4:
				return $this->getHttpRefererLike();
				break;
			case 5:
				return $this->getRequestUriRegexp();
				break;
			case 6:
				return $this->getRequestUriLike();
				break;
			case 7:
				return $this->getHttpRefererRegexpNot();
				break;
			case 8:
				return $this->getHttpRefererLikeNot();
				break;
			case 9:
				return $this->getRequestUriRegexpNot();
				break;
			case 10:
				return $this->getRequestUriLikeNot();
				break;
			case 11:
				return $this->getBaseFee();
				break;
			case 12:
				return $this->getPercentFee();
				break;
			case 13:
				return $this->getClickFee();
				break;
			case 14:
				return $this->getCacheVisitors();
				break;
			case 15:
				return $this->getCacheVisits();
				break;
			case 16:
				return $this->getCachePages();
				break;
			case 17:
				return $this->getCacheRegistrations();
				break;
			case 18:
				return $this->getCacheOrders();
				break;
			case 19:
				return $this->getCacheSales();
				break;
			case 20:
				return $this->getCacheRegRate();
				break;
			case 21:
				return $this->getCacheOrderRate();
				break;
			case 22:
				return $this->getDateAdd();
				break;
			default:
				return null;
				break;
		} // switch()
	}

	/**
	 * Exports the object as an array.
	 *
	 * You can specify the key type of the array by passing one of the class
	 * type constants.
	 *
	 * @param     string  $keyType (optional) One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME,
	 *                    BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
	 *                    Defaults to BasePeer::TYPE_PHPNAME.
	 * @param     boolean $includeLazyLoadColumns (optional) Whether to include lazy loaded columns. Defaults to TRUE.
	 * @param     array $alreadyDumpedObjects List of objects to skip to avoid recursion
	 *
	 * @return    array an associative array containing the field names (as keys) and field values
	 */
	public function toArray($keyType = BasePeer::TYPE_PHPNAME, $includeLazyLoadColumns = true, $alreadyDumpedObjects = array())
	{
		if (isset($alreadyDumpedObjects['Oops_Model_Referrer'][$this->getPrimaryKey()])) {
			return '*RECURSION*';
		}
		$alreadyDumpedObjects['Oops_Model_Referrer'][$this->getPrimaryKey()] = true;
		$keys = Oops_Model_ReferrerPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getIdReferrer(),
			$keys[1] => $this->getName(),
			$keys[2] => $this->getPasswd(),
			$keys[3] => $this->getHttpRefererRegexp(),
			$keys[4] => $this->getHttpRefererLike(),
			$keys[5] => $this->getRequestUriRegexp(),
			$keys[6] => $this->getRequestUriLike(),
			$keys[7] => $this->getHttpRefererRegexpNot(),
			$keys[8] => $this->getHttpRefererLikeNot(),
			$keys[9] => $this->getRequestUriRegexpNot(),
			$keys[10] => $this->getRequestUriLikeNot(),
			$keys[11] => $this->getBaseFee(),
			$keys[12] => $this->getPercentFee(),
			$keys[13] => $this->getClickFee(),
			$keys[14] => $this->getCacheVisitors(),
			$keys[15] => $this->getCacheVisits(),
			$keys[16] => $this->getCachePages(),
			$keys[17] => $this->getCacheRegistrations(),
			$keys[18] => $this->getCacheOrders(),
			$keys[19] => $this->getCacheSales(),
			$keys[20] => $this->getCacheRegRate(),
			$keys[21] => $this->getCacheOrderRate(),
			$keys[22] => $this->getDateAdd(),
		);
		return $result;
	}

	/**
	 * Sets a field from the object by name passed in as a string.
	 *
	 * @param      string $name peer name
	 * @param      mixed $value field value
	 * @param      string $type The type of fieldname the $name is of:
	 *                     one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
	 *                     BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
	 * @return     void
	 */
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = Oops_Model_ReferrerPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	/**
	 * Sets a field from the object by Position as specified in the xml schema.
	 * Zero-based.
	 *
	 * @param      int $pos position in xml schema
	 * @param      mixed $value field value
	 * @return     void
	 */
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setIdReferrer($value);
				break;
			case 1:
				$this->setName($value);
				break;
			case 2:
				$this->setPasswd($value);
				break;
			case 3:
				$this->setHttpRefererRegexp($value);
				break;
			case 4:
				$this->setHttpRefererLike($value);
				break;
			case 5:
				$this->setRequestUriRegexp($value);
				break;
			case 6:
				$this->setRequestUriLike($value);
				break;
			case 7:
				$this->setHttpRefererRegexpNot($value);
				break;
			case 8:
				$this->setHttpRefererLikeNot($value);
				break;
			case 9:
				$this->setRequestUriRegexpNot($value);
				break;
			case 10:
				$this->setRequestUriLikeNot($value);
				break;
			case 11:
				$this->setBaseFee($value);
				break;
			case 12:
				$this->setPercentFee($value);
				break;
			case 13:
				$this->setClickFee($value);
				break;
			case 14:
				$this->setCacheVisitors($value);
				break;
			case 15:
				$this->setCacheVisits($value);
				break;
			case 16:
				$this->setCachePages($value);
				break;
			case 17:
				$this->setCacheRegistrations($value);
				break;
			case 18:
				$this->setCacheOrders($value);
				break;
			case 19:
				$this->setCacheSales($value);
				break;
			case 20:
				$this->setCacheRegRate($value);
				break;
			case 21:
				$this->setCacheOrderRate($value);
				break;
			case 22:
				$this->setDateAdd($value);
				break;
		} // switch()
	}

	/**
	 * Populates the object using an array.
	 *
	 * This is particularly useful when populating an object from one of the
	 * request arrays (e.g. $_POST).  This method goes through the column
	 * names, checking to see whether a matching key exists in populated
	 * array. If so the setByName() method is called for that column.
	 *
	 * You can specify the key type of the array by additionally passing one
	 * of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME,
	 * BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
	 * The default key type is the column's phpname (e.g. 'AuthorId')
	 *
	 * @param      array  $arr     An array to populate the object from.
	 * @param      string $keyType The type of keys the array uses.
	 * @return     void
	 */
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = Oops_Model_ReferrerPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setIdReferrer($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setName($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setPasswd($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setHttpRefererRegexp($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setHttpRefererLike($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setRequestUriRegexp($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setRequestUriLike($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setHttpRefererRegexpNot($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setHttpRefererLikeNot($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setRequestUriRegexpNot($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setRequestUriLikeNot($arr[$keys[10]]);
		if (array_key_exists($keys[11], $arr)) $this->setBaseFee($arr[$keys[11]]);
		if (array_key_exists($keys[12], $arr)) $this->setPercentFee($arr[$keys[12]]);
		if (array_key_exists($keys[13], $arr)) $this->setClickFee($arr[$keys[13]]);
		if (array_key_exists($keys[14], $arr)) $this->setCacheVisitors($arr[$keys[14]]);
		if (array_key_exists($keys[15], $arr)) $this->setCacheVisits($arr[$keys[15]]);
		if (array_key_exists($keys[16], $arr)) $this->setCachePages($arr[$keys[16]]);
		if (array_key_exists($keys[17], $arr)) $this->setCacheRegistrations($arr[$keys[17]]);
		if (array_key_exists($keys[18], $arr)) $this->setCacheOrders($arr[$keys[18]]);
		if (array_key_exists($keys[19], $arr)) $this->setCacheSales($arr[$keys[19]]);
		if (array_key_exists($keys[20], $arr)) $this->setCacheRegRate($arr[$keys[20]]);
		if (array_key_exists($keys[21], $arr)) $this->setCacheOrderRate($arr[$keys[21]]);
		if (array_key_exists($keys[22], $arr)) $this->setDateAdd($arr[$keys[22]]);
	}

	/**
	 * Build a Criteria object containing the values of all modified columns in this object.
	 *
	 * @return     Criteria The Criteria object containing all modified values.
	 */
	public function buildCriteria()
	{
		$criteria = new Criteria(Oops_Model_ReferrerPeer::DATABASE_NAME);

		if ($this->isColumnModified(Oops_Model_ReferrerPeer::ID_REFERRER)) $criteria->add(Oops_Model_ReferrerPeer::ID_REFERRER, $this->id_referrer);
		if ($this->isColumnModified(Oops_Model_ReferrerPeer::NAME)) $criteria->add(Oops_Model_ReferrerPeer::NAME, $this->name);
		if ($this->isColumnModified(Oops_Model_ReferrerPeer::PASSWD)) $criteria->add(Oops_Model_ReferrerPeer::PASSWD, $this->passwd);
		if ($this->isColumnModified(Oops_Model_ReferrerPeer::HTTP_REFERER_REGEXP)) $criteria->add(Oops_Model_ReferrerPeer::HTTP_REFERER_REGEXP, $this->http_referer_regexp);
		if ($this->isColumnModified(Oops_Model_ReferrerPeer::HTTP_REFERER_LIKE)) $criteria->add(Oops_Model_ReferrerPeer::HTTP_REFERER_LIKE, $this->http_referer_like);
		if ($this->isColumnModified(Oops_Model_ReferrerPeer::REQUEST_URI_REGEXP)) $criteria->add(Oops_Model_ReferrerPeer::REQUEST_URI_REGEXP, $this->request_uri_regexp);
		if ($this->isColumnModified(Oops_Model_ReferrerPeer::REQUEST_URI_LIKE)) $criteria->add(Oops_Model_ReferrerPeer::REQUEST_URI_LIKE, $this->request_uri_like);
		if ($this->isColumnModified(Oops_Model_ReferrerPeer::HTTP_REFERER_REGEXP_NOT)) $criteria->add(Oops_Model_ReferrerPeer::HTTP_REFERER_REGEXP_NOT, $this->http_referer_regexp_not);
		if ($this->isColumnModified(Oops_Model_ReferrerPeer::HTTP_REFERER_LIKE_NOT)) $criteria->add(Oops_Model_ReferrerPeer::HTTP_REFERER_LIKE_NOT, $this->http_referer_like_not);
		if ($this->isColumnModified(Oops_Model_ReferrerPeer::REQUEST_URI_REGEXP_NOT)) $criteria->add(Oops_Model_ReferrerPeer::REQUEST_URI_REGEXP_NOT, $this->request_uri_regexp_not);
		if ($this->isColumnModified(Oops_Model_ReferrerPeer::REQUEST_URI_LIKE_NOT)) $criteria->add(Oops_Model_ReferrerPeer::REQUEST_URI_LIKE_NOT, $this->request_uri_like_not);
		if ($this->isColumnModified(Oops_Model_ReferrerPeer::BASE_FEE)) $criteria->add(Oops_Model_ReferrerPeer::BASE_FEE, $this->base_fee);
		if ($this->isColumnModified(Oops_Model_ReferrerPeer::PERCENT_FEE)) $criteria->add(Oops_Model_ReferrerPeer::PERCENT_FEE, $this->percent_fee);
		if ($this->isColumnModified(Oops_Model_ReferrerPeer::CLICK_FEE)) $criteria->add(Oops_Model_ReferrerPeer::CLICK_FEE, $this->click_fee);
		if ($this->isColumnModified(Oops_Model_ReferrerPeer::CACHE_VISITORS)) $criteria->add(Oops_Model_ReferrerPeer::CACHE_VISITORS, $this->cache_visitors);
		if ($this->isColumnModified(Oops_Model_ReferrerPeer::CACHE_VISITS)) $criteria->add(Oops_Model_ReferrerPeer::CACHE_VISITS, $this->cache_visits);
		if ($this->isColumnModified(Oops_Model_ReferrerPeer::CACHE_PAGES)) $criteria->add(Oops_Model_ReferrerPeer::CACHE_PAGES, $this->cache_pages);
		if ($this->isColumnModified(Oops_Model_ReferrerPeer::CACHE_REGISTRATIONS)) $criteria->add(Oops_Model_ReferrerPeer::CACHE_REGISTRATIONS, $this->cache_registrations);
		if ($this->isColumnModified(Oops_Model_ReferrerPeer::CACHE_ORDERS)) $criteria->add(Oops_Model_ReferrerPeer::CACHE_ORDERS, $this->cache_orders);
		if ($this->isColumnModified(Oops_Model_ReferrerPeer::CACHE_SALES)) $criteria->add(Oops_Model_ReferrerPeer::CACHE_SALES, $this->cache_sales);
		if ($this->isColumnModified(Oops_Model_ReferrerPeer::CACHE_REG_RATE)) $criteria->add(Oops_Model_ReferrerPeer::CACHE_REG_RATE, $this->cache_reg_rate);
		if ($this->isColumnModified(Oops_Model_ReferrerPeer::CACHE_ORDER_RATE)) $criteria->add(Oops_Model_ReferrerPeer::CACHE_ORDER_RATE, $this->cache_order_rate);
		if ($this->isColumnModified(Oops_Model_ReferrerPeer::DATE_ADD)) $criteria->add(Oops_Model_ReferrerPeer::DATE_ADD, $this->date_add);

		return $criteria;
	}

	/**
	 * Builds a Criteria object containing the primary key for this object.
	 *
	 * Unlike buildCriteria() this method includes the primary key values regardless
	 * of whether or not they have been modified.
	 *
	 * @return     Criteria The Criteria object containing value(s) for primary key(s).
	 */
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(Oops_Model_ReferrerPeer::DATABASE_NAME);
		$criteria->add(Oops_Model_ReferrerPeer::ID_REFERRER, $this->id_referrer);

		return $criteria;
	}

	/**
	 * Returns the primary key for this object (row).
	 * @return     int
	 */
	public function getPrimaryKey()
	{
		return $this->getIdReferrer();
	}

	/**
	 * Generic method to set the primary key (id_referrer column).
	 *
	 * @param      int $key Primary key.
	 * @return     void
	 */
	public function setPrimaryKey($key)
	{
		$this->setIdReferrer($key);
	}

	/**
	 * Returns true if the primary key for this object is null.
	 * @return     boolean
	 */
	public function isPrimaryKeyNull()
	{
		return null === $this->getIdReferrer();
	}

	/**
	 * Sets contents of passed object to values from current object.
	 *
	 * If desired, this method can also make copies of all associated (fkey referrers)
	 * objects.
	 *
	 * @param      object $copyObj An object of Oops_Model_Referrer (or compatible) type.
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
	 * @throws     PropelException
	 */
	public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
	{
		$copyObj->setName($this->getName());
		$copyObj->setPasswd($this->getPasswd());
		$copyObj->setHttpRefererRegexp($this->getHttpRefererRegexp());
		$copyObj->setHttpRefererLike($this->getHttpRefererLike());
		$copyObj->setRequestUriRegexp($this->getRequestUriRegexp());
		$copyObj->setRequestUriLike($this->getRequestUriLike());
		$copyObj->setHttpRefererRegexpNot($this->getHttpRefererRegexpNot());
		$copyObj->setHttpRefererLikeNot($this->getHttpRefererLikeNot());
		$copyObj->setRequestUriRegexpNot($this->getRequestUriRegexpNot());
		$copyObj->setRequestUriLikeNot($this->getRequestUriLikeNot());
		$copyObj->setBaseFee($this->getBaseFee());
		$copyObj->setPercentFee($this->getPercentFee());
		$copyObj->setClickFee($this->getClickFee());
		$copyObj->setCacheVisitors($this->getCacheVisitors());
		$copyObj->setCacheVisits($this->getCacheVisits());
		$copyObj->setCachePages($this->getCachePages());
		$copyObj->setCacheRegistrations($this->getCacheRegistrations());
		$copyObj->setCacheOrders($this->getCacheOrders());
		$copyObj->setCacheSales($this->getCacheSales());
		$copyObj->setCacheRegRate($this->getCacheRegRate());
		$copyObj->setCacheOrderRate($this->getCacheOrderRate());
		$copyObj->setDateAdd($this->getDateAdd());
		if ($makeNew) {
			$copyObj->setNew(true);
			$copyObj->setIdReferrer(NULL); // this is a auto-increment column, so set to default value
		}
	}

	/**
	 * Makes a copy of this object that will be inserted as a new row in table when saved.
	 * It creates a new object filling in the simple attributes, but skipping any primary
	 * keys that are defined for the table.
	 *
	 * If desired, this method can also make copies of all associated (fkey referrers)
	 * objects.
	 *
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @return     Oops_Model_Referrer Clone of current object.
	 * @throws     PropelException
	 */
	public function copy($deepCopy = false)
	{
		// we use get_class(), because this might be a subclass
		$clazz = get_class($this);
		$copyObj = new $clazz();
		$this->copyInto($copyObj, $deepCopy);
		return $copyObj;
	}

	/**
	 * Returns a peer instance associated with this om.
	 *
	 * Since Peer classes are not to have any instance attributes, this method returns the
	 * same instance for all member of this class. The method could therefore
	 * be static, but this would prevent one from overriding the behavior.
	 *
	 * @return     Oops_Model_ReferrerPeer
	 */
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new Oops_Model_ReferrerPeer();
		}
		return self::$peer;
	}

	/**
	 * Clears the current object and sets all attributes to their default values
	 */
	public function clear()
	{
		$this->id_referrer = null;
		$this->name = null;
		$this->passwd = null;
		$this->http_referer_regexp = null;
		$this->http_referer_like = null;
		$this->request_uri_regexp = null;
		$this->request_uri_like = null;
		$this->http_referer_regexp_not = null;
		$this->http_referer_like_not = null;
		$this->request_uri_regexp_not = null;
		$this->request_uri_like_not = null;
		$this->base_fee = null;
		$this->percent_fee = null;
		$this->click_fee = null;
		$this->cache_visitors = null;
		$this->cache_visits = null;
		$this->cache_pages = null;
		$this->cache_registrations = null;
		$this->cache_orders = null;
		$this->cache_sales = null;
		$this->cache_reg_rate = null;
		$this->cache_order_rate = null;
		$this->date_add = null;
		$this->alreadyInSave = false;
		$this->alreadyInValidation = false;
		$this->clearAllReferences();
		$this->applyDefaultValues();
		$this->resetModified();
		$this->setNew(true);
		$this->setDeleted(false);
	}

	/**
	 * Resets all references to other model objects or collections of model objects.
	 *
	 * This method is a user-space workaround for PHP's inability to garbage collect
	 * objects with circular references (even in PHP 5.3). This is currently necessary
	 * when using Propel in certain daemon or large-volumne/high-memory operations.
	 *
	 * @param      boolean $deep Whether to also clear the references on all referrer objects.
	 */
	public function clearAllReferences($deep = false)
	{
		if ($deep) {
		} // if ($deep)

	}

	/**
	 * Return the string representation of this object
	 *
	 * @return string
	 */
	public function __toString()
	{
		return (string) $this->exportTo(Oops_Model_ReferrerPeer::DEFAULT_STRING_FORMAT);
	}

} // Oops_Model_Base_Referrer
