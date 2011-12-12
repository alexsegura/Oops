<?php


/**
 * Base class that represents a row from the 'order_detail' table.
 *
 * 
 *
 * @package    propel.generator.prestashop.om
 */
abstract class Oops_Db_Propel_OrderDetail extends BaseObject  implements Persistent
{

	/**
	 * Peer class name
	 */
	const PEER = 'Oops_Db_OrderDetailPeer';

	/**
	 * The Peer class.
	 * Instance provides a convenient way of calling static methods on a class
	 * that calling code may not be able to identify.
	 * @var        Oops_Db_OrderDetailPeer
	 */
	protected static $peer;

	/**
	 * The value for the id_order_detail field.
	 * @var        int
	 */
	protected $id_order_detail;

	/**
	 * The value for the id_order field.
	 * @var        int
	 */
	protected $id_order;

	/**
	 * The value for the product_id field.
	 * @var        int
	 */
	protected $product_id;

	/**
	 * The value for the product_attribute_id field.
	 * @var        int
	 */
	protected $product_attribute_id;

	/**
	 * The value for the product_name field.
	 * @var        string
	 */
	protected $product_name;

	/**
	 * The value for the product_quantity field.
	 * Note: this column has a database default value of: 0
	 * @var        int
	 */
	protected $product_quantity;

	/**
	 * The value for the product_quantity_in_stock field.
	 * Note: this column has a database default value of: 0
	 * @var        int
	 */
	protected $product_quantity_in_stock;

	/**
	 * The value for the product_quantity_refunded field.
	 * Note: this column has a database default value of: 0
	 * @var        int
	 */
	protected $product_quantity_refunded;

	/**
	 * The value for the product_quantity_return field.
	 * Note: this column has a database default value of: 0
	 * @var        int
	 */
	protected $product_quantity_return;

	/**
	 * The value for the product_quantity_reinjected field.
	 * Note: this column has a database default value of: 0
	 * @var        int
	 */
	protected $product_quantity_reinjected;

	/**
	 * The value for the product_price field.
	 * Note: this column has a database default value of: '0.000000'
	 * @var        string
	 */
	protected $product_price;

	/**
	 * The value for the reduction_percent field.
	 * Note: this column has a database default value of: '0.00'
	 * @var        string
	 */
	protected $reduction_percent;

	/**
	 * The value for the reduction_amount field.
	 * Note: this column has a database default value of: '0.000000'
	 * @var        string
	 */
	protected $reduction_amount;

	/**
	 * The value for the group_reduction field.
	 * Note: this column has a database default value of: '0.00'
	 * @var        string
	 */
	protected $group_reduction;

	/**
	 * The value for the product_quantity_discount field.
	 * Note: this column has a database default value of: '0.000000'
	 * @var        string
	 */
	protected $product_quantity_discount;

	/**
	 * The value for the product_ean13 field.
	 * @var        string
	 */
	protected $product_ean13;

	/**
	 * The value for the product_upc field.
	 * @var        string
	 */
	protected $product_upc;

	/**
	 * The value for the product_reference field.
	 * @var        string
	 */
	protected $product_reference;

	/**
	 * The value for the product_supplier_reference field.
	 * @var        string
	 */
	protected $product_supplier_reference;

	/**
	 * The value for the product_weight field.
	 * @var        double
	 */
	protected $product_weight;

	/**
	 * The value for the tax_name field.
	 * @var        string
	 */
	protected $tax_name;

	/**
	 * The value for the tax_rate field.
	 * Note: this column has a database default value of: '0.000'
	 * @var        string
	 */
	protected $tax_rate;

	/**
	 * The value for the ecotax field.
	 * Note: this column has a database default value of: '0.000000'
	 * @var        string
	 */
	protected $ecotax;

	/**
	 * The value for the ecotax_tax_rate field.
	 * Note: this column has a database default value of: '0.000'
	 * @var        string
	 */
	protected $ecotax_tax_rate;

	/**
	 * The value for the discount_quantity_applied field.
	 * Note: this column has a database default value of: false
	 * @var        boolean
	 */
	protected $discount_quantity_applied;

	/**
	 * The value for the download_hash field.
	 * @var        string
	 */
	protected $download_hash;

	/**
	 * The value for the download_nb field.
	 * Note: this column has a database default value of: 0
	 * @var        int
	 */
	protected $download_nb;

	/**
	 * The value for the download_deadline field.
	 * Note: this column has a database default value of: NULL
	 * @var        string
	 */
	protected $download_deadline;

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
		$this->product_quantity = 0;
		$this->product_quantity_in_stock = 0;
		$this->product_quantity_refunded = 0;
		$this->product_quantity_return = 0;
		$this->product_quantity_reinjected = 0;
		$this->product_price = '0.000000';
		$this->reduction_percent = '0.00';
		$this->reduction_amount = '0.000000';
		$this->group_reduction = '0.00';
		$this->product_quantity_discount = '0.000000';
		$this->tax_rate = '0.000';
		$this->ecotax = '0.000000';
		$this->ecotax_tax_rate = '0.000';
		$this->discount_quantity_applied = false;
		$this->download_nb = 0;
		$this->download_deadline = NULL;
	}

	/**
	 * Initializes internal state of Oops_Db_Propel_OrderDetail object.
	 * @see        applyDefaults()
	 */
	public function __construct()
	{
		parent::__construct();
		$this->applyDefaultValues();
	}

	/**
	 * Get the [id_order_detail] column value.
	 * 
	 * @return     int
	 */
	public function getIdOrderDetail()
	{
		return $this->id_order_detail;
	}

	/**
	 * Get the [id_order] column value.
	 * 
	 * @return     int
	 */
	public function getIdOrder()
	{
		return $this->id_order;
	}

	/**
	 * Get the [product_id] column value.
	 * 
	 * @return     int
	 */
	public function getProductId()
	{
		return $this->product_id;
	}

	/**
	 * Get the [product_attribute_id] column value.
	 * 
	 * @return     int
	 */
	public function getProductAttributeId()
	{
		return $this->product_attribute_id;
	}

	/**
	 * Get the [product_name] column value.
	 * 
	 * @return     string
	 */
	public function getProductName()
	{
		return $this->product_name;
	}

	/**
	 * Get the [product_quantity] column value.
	 * 
	 * @return     int
	 */
	public function getProductQuantity()
	{
		return $this->product_quantity;
	}

	/**
	 * Get the [product_quantity_in_stock] column value.
	 * 
	 * @return     int
	 */
	public function getProductQuantityInStock()
	{
		return $this->product_quantity_in_stock;
	}

	/**
	 * Get the [product_quantity_refunded] column value.
	 * 
	 * @return     int
	 */
	public function getProductQuantityRefunded()
	{
		return $this->product_quantity_refunded;
	}

	/**
	 * Get the [product_quantity_return] column value.
	 * 
	 * @return     int
	 */
	public function getProductQuantityReturn()
	{
		return $this->product_quantity_return;
	}

	/**
	 * Get the [product_quantity_reinjected] column value.
	 * 
	 * @return     int
	 */
	public function getProductQuantityReinjected()
	{
		return $this->product_quantity_reinjected;
	}

	/**
	 * Get the [product_price] column value.
	 * 
	 * @return     string
	 */
	public function getProductPrice()
	{
		return $this->product_price;
	}

	/**
	 * Get the [reduction_percent] column value.
	 * 
	 * @return     string
	 */
	public function getReductionPercent()
	{
		return $this->reduction_percent;
	}

	/**
	 * Get the [reduction_amount] column value.
	 * 
	 * @return     string
	 */
	public function getReductionAmount()
	{
		return $this->reduction_amount;
	}

	/**
	 * Get the [group_reduction] column value.
	 * 
	 * @return     string
	 */
	public function getGroupReduction()
	{
		return $this->group_reduction;
	}

	/**
	 * Get the [product_quantity_discount] column value.
	 * 
	 * @return     string
	 */
	public function getProductQuantityDiscount()
	{
		return $this->product_quantity_discount;
	}

	/**
	 * Get the [product_ean13] column value.
	 * 
	 * @return     string
	 */
	public function getProductEan13()
	{
		return $this->product_ean13;
	}

	/**
	 * Get the [product_upc] column value.
	 * 
	 * @return     string
	 */
	public function getProductUpc()
	{
		return $this->product_upc;
	}

	/**
	 * Get the [product_reference] column value.
	 * 
	 * @return     string
	 */
	public function getProductReference()
	{
		return $this->product_reference;
	}

	/**
	 * Get the [product_supplier_reference] column value.
	 * 
	 * @return     string
	 */
	public function getProductSupplierReference()
	{
		return $this->product_supplier_reference;
	}

	/**
	 * Get the [product_weight] column value.
	 * 
	 * @return     double
	 */
	public function getProductWeight()
	{
		return $this->product_weight;
	}

	/**
	 * Get the [tax_name] column value.
	 * 
	 * @return     string
	 */
	public function getTaxName()
	{
		return $this->tax_name;
	}

	/**
	 * Get the [tax_rate] column value.
	 * 
	 * @return     string
	 */
	public function getTaxRate()
	{
		return $this->tax_rate;
	}

	/**
	 * Get the [ecotax] column value.
	 * 
	 * @return     string
	 */
	public function getEcotax()
	{
		return $this->ecotax;
	}

	/**
	 * Get the [ecotax_tax_rate] column value.
	 * 
	 * @return     string
	 */
	public function getEcotaxTaxRate()
	{
		return $this->ecotax_tax_rate;
	}

	/**
	 * Get the [discount_quantity_applied] column value.
	 * 
	 * @return     boolean
	 */
	public function getDiscountQuantityApplied()
	{
		return $this->discount_quantity_applied;
	}

	/**
	 * Get the [download_hash] column value.
	 * 
	 * @return     string
	 */
	public function getDownloadHash()
	{
		return $this->download_hash;
	}

	/**
	 * Get the [download_nb] column value.
	 * 
	 * @return     int
	 */
	public function getDownloadNb()
	{
		return $this->download_nb;
	}

	/**
	 * Get the [optionally formatted] temporal [download_deadline] column value.
	 * 
	 *
	 * @param      string $format The date/time format string (either date()-style or strftime()-style).
	 *							If format is NULL, then the raw DateTime object will be returned.
	 * @return     mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00 00:00:00
	 * @throws     PropelException - if unable to parse/validate the date/time value.
	 */
	public function getDownloadDeadline($format = 'Y-m-d H:i:s')
	{
		if ($this->download_deadline === null) {
			return null;
		}


		if ($this->download_deadline === '0000-00-00 00:00:00') {
			// while technically this is not a default value of NULL,
			// this seems to be closest in meaning.
			return null;
		} else {
			try {
				$dt = new DateTime($this->download_deadline);
			} catch (Exception $x) {
				throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->download_deadline, true), $x);
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
	 * Set the value of [id_order_detail] column.
	 * 
	 * @param      int $v new value
	 * @return     Oops_Db_OrderDetail The current object (for fluent API support)
	 */
	public function setIdOrderDetail($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->id_order_detail !== $v) {
			$this->id_order_detail = $v;
			$this->modifiedColumns[] = Oops_Db_OrderDetailPeer::ID_ORDER_DETAIL;
		}

		return $this;
	} // setIdOrderDetail()

	/**
	 * Set the value of [id_order] column.
	 * 
	 * @param      int $v new value
	 * @return     Oops_Db_OrderDetail The current object (for fluent API support)
	 */
	public function setIdOrder($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->id_order !== $v) {
			$this->id_order = $v;
			$this->modifiedColumns[] = Oops_Db_OrderDetailPeer::ID_ORDER;
		}

		return $this;
	} // setIdOrder()

	/**
	 * Set the value of [product_id] column.
	 * 
	 * @param      int $v new value
	 * @return     Oops_Db_OrderDetail The current object (for fluent API support)
	 */
	public function setProductId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->product_id !== $v) {
			$this->product_id = $v;
			$this->modifiedColumns[] = Oops_Db_OrderDetailPeer::PRODUCT_ID;
		}

		return $this;
	} // setProductId()

	/**
	 * Set the value of [product_attribute_id] column.
	 * 
	 * @param      int $v new value
	 * @return     Oops_Db_OrderDetail The current object (for fluent API support)
	 */
	public function setProductAttributeId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->product_attribute_id !== $v) {
			$this->product_attribute_id = $v;
			$this->modifiedColumns[] = Oops_Db_OrderDetailPeer::PRODUCT_ATTRIBUTE_ID;
		}

		return $this;
	} // setProductAttributeId()

	/**
	 * Set the value of [product_name] column.
	 * 
	 * @param      string $v new value
	 * @return     Oops_Db_OrderDetail The current object (for fluent API support)
	 */
	public function setProductName($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->product_name !== $v) {
			$this->product_name = $v;
			$this->modifiedColumns[] = Oops_Db_OrderDetailPeer::PRODUCT_NAME;
		}

		return $this;
	} // setProductName()

	/**
	 * Set the value of [product_quantity] column.
	 * 
	 * @param      int $v new value
	 * @return     Oops_Db_OrderDetail The current object (for fluent API support)
	 */
	public function setProductQuantity($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->product_quantity !== $v) {
			$this->product_quantity = $v;
			$this->modifiedColumns[] = Oops_Db_OrderDetailPeer::PRODUCT_QUANTITY;
		}

		return $this;
	} // setProductQuantity()

	/**
	 * Set the value of [product_quantity_in_stock] column.
	 * 
	 * @param      int $v new value
	 * @return     Oops_Db_OrderDetail The current object (for fluent API support)
	 */
	public function setProductQuantityInStock($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->product_quantity_in_stock !== $v) {
			$this->product_quantity_in_stock = $v;
			$this->modifiedColumns[] = Oops_Db_OrderDetailPeer::PRODUCT_QUANTITY_IN_STOCK;
		}

		return $this;
	} // setProductQuantityInStock()

	/**
	 * Set the value of [product_quantity_refunded] column.
	 * 
	 * @param      int $v new value
	 * @return     Oops_Db_OrderDetail The current object (for fluent API support)
	 */
	public function setProductQuantityRefunded($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->product_quantity_refunded !== $v) {
			$this->product_quantity_refunded = $v;
			$this->modifiedColumns[] = Oops_Db_OrderDetailPeer::PRODUCT_QUANTITY_REFUNDED;
		}

		return $this;
	} // setProductQuantityRefunded()

	/**
	 * Set the value of [product_quantity_return] column.
	 * 
	 * @param      int $v new value
	 * @return     Oops_Db_OrderDetail The current object (for fluent API support)
	 */
	public function setProductQuantityReturn($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->product_quantity_return !== $v) {
			$this->product_quantity_return = $v;
			$this->modifiedColumns[] = Oops_Db_OrderDetailPeer::PRODUCT_QUANTITY_RETURN;
		}

		return $this;
	} // setProductQuantityReturn()

	/**
	 * Set the value of [product_quantity_reinjected] column.
	 * 
	 * @param      int $v new value
	 * @return     Oops_Db_OrderDetail The current object (for fluent API support)
	 */
	public function setProductQuantityReinjected($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->product_quantity_reinjected !== $v) {
			$this->product_quantity_reinjected = $v;
			$this->modifiedColumns[] = Oops_Db_OrderDetailPeer::PRODUCT_QUANTITY_REINJECTED;
		}

		return $this;
	} // setProductQuantityReinjected()

	/**
	 * Set the value of [product_price] column.
	 * 
	 * @param      string $v new value
	 * @return     Oops_Db_OrderDetail The current object (for fluent API support)
	 */
	public function setProductPrice($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->product_price !== $v) {
			$this->product_price = $v;
			$this->modifiedColumns[] = Oops_Db_OrderDetailPeer::PRODUCT_PRICE;
		}

		return $this;
	} // setProductPrice()

	/**
	 * Set the value of [reduction_percent] column.
	 * 
	 * @param      string $v new value
	 * @return     Oops_Db_OrderDetail The current object (for fluent API support)
	 */
	public function setReductionPercent($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->reduction_percent !== $v) {
			$this->reduction_percent = $v;
			$this->modifiedColumns[] = Oops_Db_OrderDetailPeer::REDUCTION_PERCENT;
		}

		return $this;
	} // setReductionPercent()

	/**
	 * Set the value of [reduction_amount] column.
	 * 
	 * @param      string $v new value
	 * @return     Oops_Db_OrderDetail The current object (for fluent API support)
	 */
	public function setReductionAmount($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->reduction_amount !== $v) {
			$this->reduction_amount = $v;
			$this->modifiedColumns[] = Oops_Db_OrderDetailPeer::REDUCTION_AMOUNT;
		}

		return $this;
	} // setReductionAmount()

	/**
	 * Set the value of [group_reduction] column.
	 * 
	 * @param      string $v new value
	 * @return     Oops_Db_OrderDetail The current object (for fluent API support)
	 */
	public function setGroupReduction($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->group_reduction !== $v) {
			$this->group_reduction = $v;
			$this->modifiedColumns[] = Oops_Db_OrderDetailPeer::GROUP_REDUCTION;
		}

		return $this;
	} // setGroupReduction()

	/**
	 * Set the value of [product_quantity_discount] column.
	 * 
	 * @param      string $v new value
	 * @return     Oops_Db_OrderDetail The current object (for fluent API support)
	 */
	public function setProductQuantityDiscount($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->product_quantity_discount !== $v) {
			$this->product_quantity_discount = $v;
			$this->modifiedColumns[] = Oops_Db_OrderDetailPeer::PRODUCT_QUANTITY_DISCOUNT;
		}

		return $this;
	} // setProductQuantityDiscount()

	/**
	 * Set the value of [product_ean13] column.
	 * 
	 * @param      string $v new value
	 * @return     Oops_Db_OrderDetail The current object (for fluent API support)
	 */
	public function setProductEan13($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->product_ean13 !== $v) {
			$this->product_ean13 = $v;
			$this->modifiedColumns[] = Oops_Db_OrderDetailPeer::PRODUCT_EAN13;
		}

		return $this;
	} // setProductEan13()

	/**
	 * Set the value of [product_upc] column.
	 * 
	 * @param      string $v new value
	 * @return     Oops_Db_OrderDetail The current object (for fluent API support)
	 */
	public function setProductUpc($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->product_upc !== $v) {
			$this->product_upc = $v;
			$this->modifiedColumns[] = Oops_Db_OrderDetailPeer::PRODUCT_UPC;
		}

		return $this;
	} // setProductUpc()

	/**
	 * Set the value of [product_reference] column.
	 * 
	 * @param      string $v new value
	 * @return     Oops_Db_OrderDetail The current object (for fluent API support)
	 */
	public function setProductReference($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->product_reference !== $v) {
			$this->product_reference = $v;
			$this->modifiedColumns[] = Oops_Db_OrderDetailPeer::PRODUCT_REFERENCE;
		}

		return $this;
	} // setProductReference()

	/**
	 * Set the value of [product_supplier_reference] column.
	 * 
	 * @param      string $v new value
	 * @return     Oops_Db_OrderDetail The current object (for fluent API support)
	 */
	public function setProductSupplierReference($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->product_supplier_reference !== $v) {
			$this->product_supplier_reference = $v;
			$this->modifiedColumns[] = Oops_Db_OrderDetailPeer::PRODUCT_SUPPLIER_REFERENCE;
		}

		return $this;
	} // setProductSupplierReference()

	/**
	 * Set the value of [product_weight] column.
	 * 
	 * @param      double $v new value
	 * @return     Oops_Db_OrderDetail The current object (for fluent API support)
	 */
	public function setProductWeight($v)
	{
		if ($v !== null) {
			$v = (double) $v;
		}

		if ($this->product_weight !== $v) {
			$this->product_weight = $v;
			$this->modifiedColumns[] = Oops_Db_OrderDetailPeer::PRODUCT_WEIGHT;
		}

		return $this;
	} // setProductWeight()

	/**
	 * Set the value of [tax_name] column.
	 * 
	 * @param      string $v new value
	 * @return     Oops_Db_OrderDetail The current object (for fluent API support)
	 */
	public function setTaxName($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->tax_name !== $v) {
			$this->tax_name = $v;
			$this->modifiedColumns[] = Oops_Db_OrderDetailPeer::TAX_NAME;
		}

		return $this;
	} // setTaxName()

	/**
	 * Set the value of [tax_rate] column.
	 * 
	 * @param      string $v new value
	 * @return     Oops_Db_OrderDetail The current object (for fluent API support)
	 */
	public function setTaxRate($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->tax_rate !== $v) {
			$this->tax_rate = $v;
			$this->modifiedColumns[] = Oops_Db_OrderDetailPeer::TAX_RATE;
		}

		return $this;
	} // setTaxRate()

	/**
	 * Set the value of [ecotax] column.
	 * 
	 * @param      string $v new value
	 * @return     Oops_Db_OrderDetail The current object (for fluent API support)
	 */
	public function setEcotax($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->ecotax !== $v) {
			$this->ecotax = $v;
			$this->modifiedColumns[] = Oops_Db_OrderDetailPeer::ECOTAX;
		}

		return $this;
	} // setEcotax()

	/**
	 * Set the value of [ecotax_tax_rate] column.
	 * 
	 * @param      string $v new value
	 * @return     Oops_Db_OrderDetail The current object (for fluent API support)
	 */
	public function setEcotaxTaxRate($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->ecotax_tax_rate !== $v) {
			$this->ecotax_tax_rate = $v;
			$this->modifiedColumns[] = Oops_Db_OrderDetailPeer::ECOTAX_TAX_RATE;
		}

		return $this;
	} // setEcotaxTaxRate()

	/**
	 * Sets the value of the [discount_quantity_applied] column.
	 * Non-boolean arguments are converted using the following rules:
	 *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * 
	 * @param      boolean|integer|string $v The new value
	 * @return     Oops_Db_OrderDetail The current object (for fluent API support)
	 */
	public function setDiscountQuantityApplied($v)
	{
		if ($v !== null) {
			if (is_string($v)) {
				$v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
			} else {
				$v = (boolean) $v;
			}
		}

		if ($this->discount_quantity_applied !== $v) {
			$this->discount_quantity_applied = $v;
			$this->modifiedColumns[] = Oops_Db_OrderDetailPeer::DISCOUNT_QUANTITY_APPLIED;
		}

		return $this;
	} // setDiscountQuantityApplied()

	/**
	 * Set the value of [download_hash] column.
	 * 
	 * @param      string $v new value
	 * @return     Oops_Db_OrderDetail The current object (for fluent API support)
	 */
	public function setDownloadHash($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->download_hash !== $v) {
			$this->download_hash = $v;
			$this->modifiedColumns[] = Oops_Db_OrderDetailPeer::DOWNLOAD_HASH;
		}

		return $this;
	} // setDownloadHash()

	/**
	 * Set the value of [download_nb] column.
	 * 
	 * @param      int $v new value
	 * @return     Oops_Db_OrderDetail The current object (for fluent API support)
	 */
	public function setDownloadNb($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->download_nb !== $v) {
			$this->download_nb = $v;
			$this->modifiedColumns[] = Oops_Db_OrderDetailPeer::DOWNLOAD_NB;
		}

		return $this;
	} // setDownloadNb()

	/**
	 * Sets the value of [download_deadline] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.
	 *               Empty strings are treated as NULL.
	 * @return     Oops_Db_OrderDetail The current object (for fluent API support)
	 */
	public function setDownloadDeadline($v)
	{
		$dt = PropelDateTime::newInstance($v, null, 'DateTime');
		if ($this->download_deadline !== null || $dt !== null) {
			$currentDateAsString = ($this->download_deadline !== null && $tmpDt = new DateTime($this->download_deadline)) ? $tmpDt->format('Y-m-d H:i:s') : null;
			$newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
			if ( ($currentDateAsString !== $newDateAsString) // normalized values don't match
				|| ($dt->format('Y-m-d H:i:s') === NULL) // or the entered value matches the default
				 ) {
				$this->download_deadline = $newDateAsString;
				$this->modifiedColumns[] = Oops_Db_OrderDetailPeer::DOWNLOAD_DEADLINE;
			}
		} // if either are not null

		return $this;
	} // setDownloadDeadline()

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
			if ($this->product_quantity !== 0) {
				return false;
			}

			if ($this->product_quantity_in_stock !== 0) {
				return false;
			}

			if ($this->product_quantity_refunded !== 0) {
				return false;
			}

			if ($this->product_quantity_return !== 0) {
				return false;
			}

			if ($this->product_quantity_reinjected !== 0) {
				return false;
			}

			if ($this->product_price !== '0.000000') {
				return false;
			}

			if ($this->reduction_percent !== '0.00') {
				return false;
			}

			if ($this->reduction_amount !== '0.000000') {
				return false;
			}

			if ($this->group_reduction !== '0.00') {
				return false;
			}

			if ($this->product_quantity_discount !== '0.000000') {
				return false;
			}

			if ($this->tax_rate !== '0.000') {
				return false;
			}

			if ($this->ecotax !== '0.000000') {
				return false;
			}

			if ($this->ecotax_tax_rate !== '0.000') {
				return false;
			}

			if ($this->discount_quantity_applied !== false) {
				return false;
			}

			if ($this->download_nb !== 0) {
				return false;
			}

			if ($this->download_deadline !== NULL) {
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

			$this->id_order_detail = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
			$this->id_order = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
			$this->product_id = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
			$this->product_attribute_id = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
			$this->product_name = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
			$this->product_quantity = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
			$this->product_quantity_in_stock = ($row[$startcol + 6] !== null) ? (int) $row[$startcol + 6] : null;
			$this->product_quantity_refunded = ($row[$startcol + 7] !== null) ? (int) $row[$startcol + 7] : null;
			$this->product_quantity_return = ($row[$startcol + 8] !== null) ? (int) $row[$startcol + 8] : null;
			$this->product_quantity_reinjected = ($row[$startcol + 9] !== null) ? (int) $row[$startcol + 9] : null;
			$this->product_price = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
			$this->reduction_percent = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
			$this->reduction_amount = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
			$this->group_reduction = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
			$this->product_quantity_discount = ($row[$startcol + 14] !== null) ? (string) $row[$startcol + 14] : null;
			$this->product_ean13 = ($row[$startcol + 15] !== null) ? (string) $row[$startcol + 15] : null;
			$this->product_upc = ($row[$startcol + 16] !== null) ? (string) $row[$startcol + 16] : null;
			$this->product_reference = ($row[$startcol + 17] !== null) ? (string) $row[$startcol + 17] : null;
			$this->product_supplier_reference = ($row[$startcol + 18] !== null) ? (string) $row[$startcol + 18] : null;
			$this->product_weight = ($row[$startcol + 19] !== null) ? (double) $row[$startcol + 19] : null;
			$this->tax_name = ($row[$startcol + 20] !== null) ? (string) $row[$startcol + 20] : null;
			$this->tax_rate = ($row[$startcol + 21] !== null) ? (string) $row[$startcol + 21] : null;
			$this->ecotax = ($row[$startcol + 22] !== null) ? (string) $row[$startcol + 22] : null;
			$this->ecotax_tax_rate = ($row[$startcol + 23] !== null) ? (string) $row[$startcol + 23] : null;
			$this->discount_quantity_applied = ($row[$startcol + 24] !== null) ? (boolean) $row[$startcol + 24] : null;
			$this->download_hash = ($row[$startcol + 25] !== null) ? (string) $row[$startcol + 25] : null;
			$this->download_nb = ($row[$startcol + 26] !== null) ? (int) $row[$startcol + 26] : null;
			$this->download_deadline = ($row[$startcol + 27] !== null) ? (string) $row[$startcol + 27] : null;
			$this->resetModified();

			$this->setNew(false);

			if ($rehydrate) {
				$this->ensureConsistency();
			}

			return $startcol + 28; // 28 = Oops_Db_OrderDetailPeer::NUM_HYDRATE_COLUMNS.

		} catch (Exception $e) {
			throw new PropelException("Error populating Oops_Db_OrderDetail object", $e);
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
			$con = Propel::getConnection(Oops_Db_OrderDetailPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		// We don't need to alter the object instance pool; we're just modifying this instance
		// already in the pool.

		$stmt = Oops_Db_OrderDetailPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
			$con = Propel::getConnection(Oops_Db_OrderDetailPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$con->beginTransaction();
		try {
			$deleteQuery = Oops_Db_OrderDetailQuery::create()
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
			$con = Propel::getConnection(Oops_Db_OrderDetailPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
				Oops_Db_OrderDetailPeer::addInstanceToPool($this);
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

		$this->modifiedColumns[] = Oops_Db_OrderDetailPeer::ID_ORDER_DETAIL;
		if (null !== $this->id_order_detail) {
			throw new PropelException('Cannot insert a value for auto-increment primary key (' . Oops_Db_OrderDetailPeer::ID_ORDER_DETAIL . ')');
		}

		 // check the columns in natural order for more readable SQL queries
		if ($this->isColumnModified(Oops_Db_OrderDetailPeer::ID_ORDER_DETAIL)) {
			$modifiedColumns[':p' . $index++]  = '`ID_ORDER_DETAIL`';
		}
		if ($this->isColumnModified(Oops_Db_OrderDetailPeer::ID_ORDER)) {
			$modifiedColumns[':p' . $index++]  = '`ID_ORDER`';
		}
		if ($this->isColumnModified(Oops_Db_OrderDetailPeer::PRODUCT_ID)) {
			$modifiedColumns[':p' . $index++]  = '`PRODUCT_ID`';
		}
		if ($this->isColumnModified(Oops_Db_OrderDetailPeer::PRODUCT_ATTRIBUTE_ID)) {
			$modifiedColumns[':p' . $index++]  = '`PRODUCT_ATTRIBUTE_ID`';
		}
		if ($this->isColumnModified(Oops_Db_OrderDetailPeer::PRODUCT_NAME)) {
			$modifiedColumns[':p' . $index++]  = '`PRODUCT_NAME`';
		}
		if ($this->isColumnModified(Oops_Db_OrderDetailPeer::PRODUCT_QUANTITY)) {
			$modifiedColumns[':p' . $index++]  = '`PRODUCT_QUANTITY`';
		}
		if ($this->isColumnModified(Oops_Db_OrderDetailPeer::PRODUCT_QUANTITY_IN_STOCK)) {
			$modifiedColumns[':p' . $index++]  = '`PRODUCT_QUANTITY_IN_STOCK`';
		}
		if ($this->isColumnModified(Oops_Db_OrderDetailPeer::PRODUCT_QUANTITY_REFUNDED)) {
			$modifiedColumns[':p' . $index++]  = '`PRODUCT_QUANTITY_REFUNDED`';
		}
		if ($this->isColumnModified(Oops_Db_OrderDetailPeer::PRODUCT_QUANTITY_RETURN)) {
			$modifiedColumns[':p' . $index++]  = '`PRODUCT_QUANTITY_RETURN`';
		}
		if ($this->isColumnModified(Oops_Db_OrderDetailPeer::PRODUCT_QUANTITY_REINJECTED)) {
			$modifiedColumns[':p' . $index++]  = '`PRODUCT_QUANTITY_REINJECTED`';
		}
		if ($this->isColumnModified(Oops_Db_OrderDetailPeer::PRODUCT_PRICE)) {
			$modifiedColumns[':p' . $index++]  = '`PRODUCT_PRICE`';
		}
		if ($this->isColumnModified(Oops_Db_OrderDetailPeer::REDUCTION_PERCENT)) {
			$modifiedColumns[':p' . $index++]  = '`REDUCTION_PERCENT`';
		}
		if ($this->isColumnModified(Oops_Db_OrderDetailPeer::REDUCTION_AMOUNT)) {
			$modifiedColumns[':p' . $index++]  = '`REDUCTION_AMOUNT`';
		}
		if ($this->isColumnModified(Oops_Db_OrderDetailPeer::GROUP_REDUCTION)) {
			$modifiedColumns[':p' . $index++]  = '`GROUP_REDUCTION`';
		}
		if ($this->isColumnModified(Oops_Db_OrderDetailPeer::PRODUCT_QUANTITY_DISCOUNT)) {
			$modifiedColumns[':p' . $index++]  = '`PRODUCT_QUANTITY_DISCOUNT`';
		}
		if ($this->isColumnModified(Oops_Db_OrderDetailPeer::PRODUCT_EAN13)) {
			$modifiedColumns[':p' . $index++]  = '`PRODUCT_EAN13`';
		}
		if ($this->isColumnModified(Oops_Db_OrderDetailPeer::PRODUCT_UPC)) {
			$modifiedColumns[':p' . $index++]  = '`PRODUCT_UPC`';
		}
		if ($this->isColumnModified(Oops_Db_OrderDetailPeer::PRODUCT_REFERENCE)) {
			$modifiedColumns[':p' . $index++]  = '`PRODUCT_REFERENCE`';
		}
		if ($this->isColumnModified(Oops_Db_OrderDetailPeer::PRODUCT_SUPPLIER_REFERENCE)) {
			$modifiedColumns[':p' . $index++]  = '`PRODUCT_SUPPLIER_REFERENCE`';
		}
		if ($this->isColumnModified(Oops_Db_OrderDetailPeer::PRODUCT_WEIGHT)) {
			$modifiedColumns[':p' . $index++]  = '`PRODUCT_WEIGHT`';
		}
		if ($this->isColumnModified(Oops_Db_OrderDetailPeer::TAX_NAME)) {
			$modifiedColumns[':p' . $index++]  = '`TAX_NAME`';
		}
		if ($this->isColumnModified(Oops_Db_OrderDetailPeer::TAX_RATE)) {
			$modifiedColumns[':p' . $index++]  = '`TAX_RATE`';
		}
		if ($this->isColumnModified(Oops_Db_OrderDetailPeer::ECOTAX)) {
			$modifiedColumns[':p' . $index++]  = '`ECOTAX`';
		}
		if ($this->isColumnModified(Oops_Db_OrderDetailPeer::ECOTAX_TAX_RATE)) {
			$modifiedColumns[':p' . $index++]  = '`ECOTAX_TAX_RATE`';
		}
		if ($this->isColumnModified(Oops_Db_OrderDetailPeer::DISCOUNT_QUANTITY_APPLIED)) {
			$modifiedColumns[':p' . $index++]  = '`DISCOUNT_QUANTITY_APPLIED`';
		}
		if ($this->isColumnModified(Oops_Db_OrderDetailPeer::DOWNLOAD_HASH)) {
			$modifiedColumns[':p' . $index++]  = '`DOWNLOAD_HASH`';
		}
		if ($this->isColumnModified(Oops_Db_OrderDetailPeer::DOWNLOAD_NB)) {
			$modifiedColumns[':p' . $index++]  = '`DOWNLOAD_NB`';
		}
		if ($this->isColumnModified(Oops_Db_OrderDetailPeer::DOWNLOAD_DEADLINE)) {
			$modifiedColumns[':p' . $index++]  = '`DOWNLOAD_DEADLINE`';
		}

		$sql = sprintf(
			'INSERT INTO `' .  _DB_PREFIX_ . 'order_detail` (%s) VALUES (%s)',
			implode(', ', $modifiedColumns),
			implode(', ', array_keys($modifiedColumns))
		);

		try {
			$stmt = $con->prepare($sql);
			foreach ($modifiedColumns as $identifier => $columnName) {
				switch ($columnName) {
					case '`ID_ORDER_DETAIL`':
						$stmt->bindValue($identifier, $this->id_order_detail, PDO::PARAM_INT);
						break;
					case '`ID_ORDER`':
						$stmt->bindValue($identifier, $this->id_order, PDO::PARAM_INT);
						break;
					case '`PRODUCT_ID`':
						$stmt->bindValue($identifier, $this->product_id, PDO::PARAM_INT);
						break;
					case '`PRODUCT_ATTRIBUTE_ID`':
						$stmt->bindValue($identifier, $this->product_attribute_id, PDO::PARAM_INT);
						break;
					case '`PRODUCT_NAME`':
						$stmt->bindValue($identifier, $this->product_name, PDO::PARAM_STR);
						break;
					case '`PRODUCT_QUANTITY`':
						$stmt->bindValue($identifier, $this->product_quantity, PDO::PARAM_INT);
						break;
					case '`PRODUCT_QUANTITY_IN_STOCK`':
						$stmt->bindValue($identifier, $this->product_quantity_in_stock, PDO::PARAM_INT);
						break;
					case '`PRODUCT_QUANTITY_REFUNDED`':
						$stmt->bindValue($identifier, $this->product_quantity_refunded, PDO::PARAM_INT);
						break;
					case '`PRODUCT_QUANTITY_RETURN`':
						$stmt->bindValue($identifier, $this->product_quantity_return, PDO::PARAM_INT);
						break;
					case '`PRODUCT_QUANTITY_REINJECTED`':
						$stmt->bindValue($identifier, $this->product_quantity_reinjected, PDO::PARAM_INT);
						break;
					case '`PRODUCT_PRICE`':
						$stmt->bindValue($identifier, $this->product_price, PDO::PARAM_STR);
						break;
					case '`REDUCTION_PERCENT`':
						$stmt->bindValue($identifier, $this->reduction_percent, PDO::PARAM_STR);
						break;
					case '`REDUCTION_AMOUNT`':
						$stmt->bindValue($identifier, $this->reduction_amount, PDO::PARAM_STR);
						break;
					case '`GROUP_REDUCTION`':
						$stmt->bindValue($identifier, $this->group_reduction, PDO::PARAM_STR);
						break;
					case '`PRODUCT_QUANTITY_DISCOUNT`':
						$stmt->bindValue($identifier, $this->product_quantity_discount, PDO::PARAM_STR);
						break;
					case '`PRODUCT_EAN13`':
						$stmt->bindValue($identifier, $this->product_ean13, PDO::PARAM_STR);
						break;
					case '`PRODUCT_UPC`':
						$stmt->bindValue($identifier, $this->product_upc, PDO::PARAM_STR);
						break;
					case '`PRODUCT_REFERENCE`':
						$stmt->bindValue($identifier, $this->product_reference, PDO::PARAM_STR);
						break;
					case '`PRODUCT_SUPPLIER_REFERENCE`':
						$stmt->bindValue($identifier, $this->product_supplier_reference, PDO::PARAM_STR);
						break;
					case '`PRODUCT_WEIGHT`':
						$stmt->bindValue($identifier, $this->product_weight, PDO::PARAM_STR);
						break;
					case '`TAX_NAME`':
						$stmt->bindValue($identifier, $this->tax_name, PDO::PARAM_STR);
						break;
					case '`TAX_RATE`':
						$stmt->bindValue($identifier, $this->tax_rate, PDO::PARAM_STR);
						break;
					case '`ECOTAX`':
						$stmt->bindValue($identifier, $this->ecotax, PDO::PARAM_STR);
						break;
					case '`ECOTAX_TAX_RATE`':
						$stmt->bindValue($identifier, $this->ecotax_tax_rate, PDO::PARAM_STR);
						break;
					case '`DISCOUNT_QUANTITY_APPLIED`':
						$stmt->bindValue($identifier, (int) $this->discount_quantity_applied, PDO::PARAM_INT);
						break;
					case '`DOWNLOAD_HASH`':
						$stmt->bindValue($identifier, $this->download_hash, PDO::PARAM_STR);
						break;
					case '`DOWNLOAD_NB`':
						$stmt->bindValue($identifier, $this->download_nb, PDO::PARAM_INT);
						break;
					case '`DOWNLOAD_DEADLINE`':
						$stmt->bindValue($identifier, $this->download_deadline, PDO::PARAM_STR);
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
		$this->setIdOrderDetail($pk);

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


			if (($retval = Oops_Db_OrderDetailPeer::doValidate($this, $columns)) !== true) {
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
		$pos = Oops_Db_OrderDetailPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getIdOrderDetail();
				break;
			case 1:
				return $this->getIdOrder();
				break;
			case 2:
				return $this->getProductId();
				break;
			case 3:
				return $this->getProductAttributeId();
				break;
			case 4:
				return $this->getProductName();
				break;
			case 5:
				return $this->getProductQuantity();
				break;
			case 6:
				return $this->getProductQuantityInStock();
				break;
			case 7:
				return $this->getProductQuantityRefunded();
				break;
			case 8:
				return $this->getProductQuantityReturn();
				break;
			case 9:
				return $this->getProductQuantityReinjected();
				break;
			case 10:
				return $this->getProductPrice();
				break;
			case 11:
				return $this->getReductionPercent();
				break;
			case 12:
				return $this->getReductionAmount();
				break;
			case 13:
				return $this->getGroupReduction();
				break;
			case 14:
				return $this->getProductQuantityDiscount();
				break;
			case 15:
				return $this->getProductEan13();
				break;
			case 16:
				return $this->getProductUpc();
				break;
			case 17:
				return $this->getProductReference();
				break;
			case 18:
				return $this->getProductSupplierReference();
				break;
			case 19:
				return $this->getProductWeight();
				break;
			case 20:
				return $this->getTaxName();
				break;
			case 21:
				return $this->getTaxRate();
				break;
			case 22:
				return $this->getEcotax();
				break;
			case 23:
				return $this->getEcotaxTaxRate();
				break;
			case 24:
				return $this->getDiscountQuantityApplied();
				break;
			case 25:
				return $this->getDownloadHash();
				break;
			case 26:
				return $this->getDownloadNb();
				break;
			case 27:
				return $this->getDownloadDeadline();
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
		if (isset($alreadyDumpedObjects['Oops_Db_OrderDetail'][$this->getPrimaryKey()])) {
			return '*RECURSION*';
		}
		$alreadyDumpedObjects['Oops_Db_OrderDetail'][$this->getPrimaryKey()] = true;
		$keys = Oops_Db_OrderDetailPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getIdOrderDetail(),
			$keys[1] => $this->getIdOrder(),
			$keys[2] => $this->getProductId(),
			$keys[3] => $this->getProductAttributeId(),
			$keys[4] => $this->getProductName(),
			$keys[5] => $this->getProductQuantity(),
			$keys[6] => $this->getProductQuantityInStock(),
			$keys[7] => $this->getProductQuantityRefunded(),
			$keys[8] => $this->getProductQuantityReturn(),
			$keys[9] => $this->getProductQuantityReinjected(),
			$keys[10] => $this->getProductPrice(),
			$keys[11] => $this->getReductionPercent(),
			$keys[12] => $this->getReductionAmount(),
			$keys[13] => $this->getGroupReduction(),
			$keys[14] => $this->getProductQuantityDiscount(),
			$keys[15] => $this->getProductEan13(),
			$keys[16] => $this->getProductUpc(),
			$keys[17] => $this->getProductReference(),
			$keys[18] => $this->getProductSupplierReference(),
			$keys[19] => $this->getProductWeight(),
			$keys[20] => $this->getTaxName(),
			$keys[21] => $this->getTaxRate(),
			$keys[22] => $this->getEcotax(),
			$keys[23] => $this->getEcotaxTaxRate(),
			$keys[24] => $this->getDiscountQuantityApplied(),
			$keys[25] => $this->getDownloadHash(),
			$keys[26] => $this->getDownloadNb(),
			$keys[27] => $this->getDownloadDeadline(),
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
		$pos = Oops_Db_OrderDetailPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setIdOrderDetail($value);
				break;
			case 1:
				$this->setIdOrder($value);
				break;
			case 2:
				$this->setProductId($value);
				break;
			case 3:
				$this->setProductAttributeId($value);
				break;
			case 4:
				$this->setProductName($value);
				break;
			case 5:
				$this->setProductQuantity($value);
				break;
			case 6:
				$this->setProductQuantityInStock($value);
				break;
			case 7:
				$this->setProductQuantityRefunded($value);
				break;
			case 8:
				$this->setProductQuantityReturn($value);
				break;
			case 9:
				$this->setProductQuantityReinjected($value);
				break;
			case 10:
				$this->setProductPrice($value);
				break;
			case 11:
				$this->setReductionPercent($value);
				break;
			case 12:
				$this->setReductionAmount($value);
				break;
			case 13:
				$this->setGroupReduction($value);
				break;
			case 14:
				$this->setProductQuantityDiscount($value);
				break;
			case 15:
				$this->setProductEan13($value);
				break;
			case 16:
				$this->setProductUpc($value);
				break;
			case 17:
				$this->setProductReference($value);
				break;
			case 18:
				$this->setProductSupplierReference($value);
				break;
			case 19:
				$this->setProductWeight($value);
				break;
			case 20:
				$this->setTaxName($value);
				break;
			case 21:
				$this->setTaxRate($value);
				break;
			case 22:
				$this->setEcotax($value);
				break;
			case 23:
				$this->setEcotaxTaxRate($value);
				break;
			case 24:
				$this->setDiscountQuantityApplied($value);
				break;
			case 25:
				$this->setDownloadHash($value);
				break;
			case 26:
				$this->setDownloadNb($value);
				break;
			case 27:
				$this->setDownloadDeadline($value);
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
		$keys = Oops_Db_OrderDetailPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setIdOrderDetail($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setIdOrder($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setProductId($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setProductAttributeId($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setProductName($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setProductQuantity($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setProductQuantityInStock($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setProductQuantityRefunded($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setProductQuantityReturn($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setProductQuantityReinjected($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setProductPrice($arr[$keys[10]]);
		if (array_key_exists($keys[11], $arr)) $this->setReductionPercent($arr[$keys[11]]);
		if (array_key_exists($keys[12], $arr)) $this->setReductionAmount($arr[$keys[12]]);
		if (array_key_exists($keys[13], $arr)) $this->setGroupReduction($arr[$keys[13]]);
		if (array_key_exists($keys[14], $arr)) $this->setProductQuantityDiscount($arr[$keys[14]]);
		if (array_key_exists($keys[15], $arr)) $this->setProductEan13($arr[$keys[15]]);
		if (array_key_exists($keys[16], $arr)) $this->setProductUpc($arr[$keys[16]]);
		if (array_key_exists($keys[17], $arr)) $this->setProductReference($arr[$keys[17]]);
		if (array_key_exists($keys[18], $arr)) $this->setProductSupplierReference($arr[$keys[18]]);
		if (array_key_exists($keys[19], $arr)) $this->setProductWeight($arr[$keys[19]]);
		if (array_key_exists($keys[20], $arr)) $this->setTaxName($arr[$keys[20]]);
		if (array_key_exists($keys[21], $arr)) $this->setTaxRate($arr[$keys[21]]);
		if (array_key_exists($keys[22], $arr)) $this->setEcotax($arr[$keys[22]]);
		if (array_key_exists($keys[23], $arr)) $this->setEcotaxTaxRate($arr[$keys[23]]);
		if (array_key_exists($keys[24], $arr)) $this->setDiscountQuantityApplied($arr[$keys[24]]);
		if (array_key_exists($keys[25], $arr)) $this->setDownloadHash($arr[$keys[25]]);
		if (array_key_exists($keys[26], $arr)) $this->setDownloadNb($arr[$keys[26]]);
		if (array_key_exists($keys[27], $arr)) $this->setDownloadDeadline($arr[$keys[27]]);
	}

	/**
	 * Build a Criteria object containing the values of all modified columns in this object.
	 *
	 * @return     Criteria The Criteria object containing all modified values.
	 */
	public function buildCriteria()
	{
		$criteria = new Criteria(Oops_Db_OrderDetailPeer::DATABASE_NAME);

		if ($this->isColumnModified(Oops_Db_OrderDetailPeer::ID_ORDER_DETAIL)) $criteria->add(Oops_Db_OrderDetailPeer::ID_ORDER_DETAIL, $this->id_order_detail);
		if ($this->isColumnModified(Oops_Db_OrderDetailPeer::ID_ORDER)) $criteria->add(Oops_Db_OrderDetailPeer::ID_ORDER, $this->id_order);
		if ($this->isColumnModified(Oops_Db_OrderDetailPeer::PRODUCT_ID)) $criteria->add(Oops_Db_OrderDetailPeer::PRODUCT_ID, $this->product_id);
		if ($this->isColumnModified(Oops_Db_OrderDetailPeer::PRODUCT_ATTRIBUTE_ID)) $criteria->add(Oops_Db_OrderDetailPeer::PRODUCT_ATTRIBUTE_ID, $this->product_attribute_id);
		if ($this->isColumnModified(Oops_Db_OrderDetailPeer::PRODUCT_NAME)) $criteria->add(Oops_Db_OrderDetailPeer::PRODUCT_NAME, $this->product_name);
		if ($this->isColumnModified(Oops_Db_OrderDetailPeer::PRODUCT_QUANTITY)) $criteria->add(Oops_Db_OrderDetailPeer::PRODUCT_QUANTITY, $this->product_quantity);
		if ($this->isColumnModified(Oops_Db_OrderDetailPeer::PRODUCT_QUANTITY_IN_STOCK)) $criteria->add(Oops_Db_OrderDetailPeer::PRODUCT_QUANTITY_IN_STOCK, $this->product_quantity_in_stock);
		if ($this->isColumnModified(Oops_Db_OrderDetailPeer::PRODUCT_QUANTITY_REFUNDED)) $criteria->add(Oops_Db_OrderDetailPeer::PRODUCT_QUANTITY_REFUNDED, $this->product_quantity_refunded);
		if ($this->isColumnModified(Oops_Db_OrderDetailPeer::PRODUCT_QUANTITY_RETURN)) $criteria->add(Oops_Db_OrderDetailPeer::PRODUCT_QUANTITY_RETURN, $this->product_quantity_return);
		if ($this->isColumnModified(Oops_Db_OrderDetailPeer::PRODUCT_QUANTITY_REINJECTED)) $criteria->add(Oops_Db_OrderDetailPeer::PRODUCT_QUANTITY_REINJECTED, $this->product_quantity_reinjected);
		if ($this->isColumnModified(Oops_Db_OrderDetailPeer::PRODUCT_PRICE)) $criteria->add(Oops_Db_OrderDetailPeer::PRODUCT_PRICE, $this->product_price);
		if ($this->isColumnModified(Oops_Db_OrderDetailPeer::REDUCTION_PERCENT)) $criteria->add(Oops_Db_OrderDetailPeer::REDUCTION_PERCENT, $this->reduction_percent);
		if ($this->isColumnModified(Oops_Db_OrderDetailPeer::REDUCTION_AMOUNT)) $criteria->add(Oops_Db_OrderDetailPeer::REDUCTION_AMOUNT, $this->reduction_amount);
		if ($this->isColumnModified(Oops_Db_OrderDetailPeer::GROUP_REDUCTION)) $criteria->add(Oops_Db_OrderDetailPeer::GROUP_REDUCTION, $this->group_reduction);
		if ($this->isColumnModified(Oops_Db_OrderDetailPeer::PRODUCT_QUANTITY_DISCOUNT)) $criteria->add(Oops_Db_OrderDetailPeer::PRODUCT_QUANTITY_DISCOUNT, $this->product_quantity_discount);
		if ($this->isColumnModified(Oops_Db_OrderDetailPeer::PRODUCT_EAN13)) $criteria->add(Oops_Db_OrderDetailPeer::PRODUCT_EAN13, $this->product_ean13);
		if ($this->isColumnModified(Oops_Db_OrderDetailPeer::PRODUCT_UPC)) $criteria->add(Oops_Db_OrderDetailPeer::PRODUCT_UPC, $this->product_upc);
		if ($this->isColumnModified(Oops_Db_OrderDetailPeer::PRODUCT_REFERENCE)) $criteria->add(Oops_Db_OrderDetailPeer::PRODUCT_REFERENCE, $this->product_reference);
		if ($this->isColumnModified(Oops_Db_OrderDetailPeer::PRODUCT_SUPPLIER_REFERENCE)) $criteria->add(Oops_Db_OrderDetailPeer::PRODUCT_SUPPLIER_REFERENCE, $this->product_supplier_reference);
		if ($this->isColumnModified(Oops_Db_OrderDetailPeer::PRODUCT_WEIGHT)) $criteria->add(Oops_Db_OrderDetailPeer::PRODUCT_WEIGHT, $this->product_weight);
		if ($this->isColumnModified(Oops_Db_OrderDetailPeer::TAX_NAME)) $criteria->add(Oops_Db_OrderDetailPeer::TAX_NAME, $this->tax_name);
		if ($this->isColumnModified(Oops_Db_OrderDetailPeer::TAX_RATE)) $criteria->add(Oops_Db_OrderDetailPeer::TAX_RATE, $this->tax_rate);
		if ($this->isColumnModified(Oops_Db_OrderDetailPeer::ECOTAX)) $criteria->add(Oops_Db_OrderDetailPeer::ECOTAX, $this->ecotax);
		if ($this->isColumnModified(Oops_Db_OrderDetailPeer::ECOTAX_TAX_RATE)) $criteria->add(Oops_Db_OrderDetailPeer::ECOTAX_TAX_RATE, $this->ecotax_tax_rate);
		if ($this->isColumnModified(Oops_Db_OrderDetailPeer::DISCOUNT_QUANTITY_APPLIED)) $criteria->add(Oops_Db_OrderDetailPeer::DISCOUNT_QUANTITY_APPLIED, $this->discount_quantity_applied);
		if ($this->isColumnModified(Oops_Db_OrderDetailPeer::DOWNLOAD_HASH)) $criteria->add(Oops_Db_OrderDetailPeer::DOWNLOAD_HASH, $this->download_hash);
		if ($this->isColumnModified(Oops_Db_OrderDetailPeer::DOWNLOAD_NB)) $criteria->add(Oops_Db_OrderDetailPeer::DOWNLOAD_NB, $this->download_nb);
		if ($this->isColumnModified(Oops_Db_OrderDetailPeer::DOWNLOAD_DEADLINE)) $criteria->add(Oops_Db_OrderDetailPeer::DOWNLOAD_DEADLINE, $this->download_deadline);

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
		$criteria = new Criteria(Oops_Db_OrderDetailPeer::DATABASE_NAME);
		$criteria->add(Oops_Db_OrderDetailPeer::ID_ORDER_DETAIL, $this->id_order_detail);

		return $criteria;
	}

	/**
	 * Returns the primary key for this object (row).
	 * @return     int
	 */
	public function getPrimaryKey()
	{
		return $this->getIdOrderDetail();
	}

	/**
	 * Generic method to set the primary key (id_order_detail column).
	 *
	 * @param      int $key Primary key.
	 * @return     void
	 */
	public function setPrimaryKey($key)
	{
		$this->setIdOrderDetail($key);
	}

	/**
	 * Returns true if the primary key for this object is null.
	 * @return     boolean
	 */
	public function isPrimaryKeyNull()
	{
		return null === $this->getIdOrderDetail();
	}

	/**
	 * Sets contents of passed object to values from current object.
	 *
	 * If desired, this method can also make copies of all associated (fkey referrers)
	 * objects.
	 *
	 * @param      object $copyObj An object of Oops_Db_OrderDetail (or compatible) type.
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
	 * @throws     PropelException
	 */
	public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
	{
		$copyObj->setIdOrder($this->getIdOrder());
		$copyObj->setProductId($this->getProductId());
		$copyObj->setProductAttributeId($this->getProductAttributeId());
		$copyObj->setProductName($this->getProductName());
		$copyObj->setProductQuantity($this->getProductQuantity());
		$copyObj->setProductQuantityInStock($this->getProductQuantityInStock());
		$copyObj->setProductQuantityRefunded($this->getProductQuantityRefunded());
		$copyObj->setProductQuantityReturn($this->getProductQuantityReturn());
		$copyObj->setProductQuantityReinjected($this->getProductQuantityReinjected());
		$copyObj->setProductPrice($this->getProductPrice());
		$copyObj->setReductionPercent($this->getReductionPercent());
		$copyObj->setReductionAmount($this->getReductionAmount());
		$copyObj->setGroupReduction($this->getGroupReduction());
		$copyObj->setProductQuantityDiscount($this->getProductQuantityDiscount());
		$copyObj->setProductEan13($this->getProductEan13());
		$copyObj->setProductUpc($this->getProductUpc());
		$copyObj->setProductReference($this->getProductReference());
		$copyObj->setProductSupplierReference($this->getProductSupplierReference());
		$copyObj->setProductWeight($this->getProductWeight());
		$copyObj->setTaxName($this->getTaxName());
		$copyObj->setTaxRate($this->getTaxRate());
		$copyObj->setEcotax($this->getEcotax());
		$copyObj->setEcotaxTaxRate($this->getEcotaxTaxRate());
		$copyObj->setDiscountQuantityApplied($this->getDiscountQuantityApplied());
		$copyObj->setDownloadHash($this->getDownloadHash());
		$copyObj->setDownloadNb($this->getDownloadNb());
		$copyObj->setDownloadDeadline($this->getDownloadDeadline());
		if ($makeNew) {
			$copyObj->setNew(true);
			$copyObj->setIdOrderDetail(NULL); // this is a auto-increment column, so set to default value
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
	 * @return     Oops_Db_OrderDetail Clone of current object.
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
	 * @return     Oops_Db_OrderDetailPeer
	 */
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new Oops_Db_OrderDetailPeer();
		}
		return self::$peer;
	}

	/**
	 * Clears the current object and sets all attributes to their default values
	 */
	public function clear()
	{
		$this->id_order_detail = null;
		$this->id_order = null;
		$this->product_id = null;
		$this->product_attribute_id = null;
		$this->product_name = null;
		$this->product_quantity = null;
		$this->product_quantity_in_stock = null;
		$this->product_quantity_refunded = null;
		$this->product_quantity_return = null;
		$this->product_quantity_reinjected = null;
		$this->product_price = null;
		$this->reduction_percent = null;
		$this->reduction_amount = null;
		$this->group_reduction = null;
		$this->product_quantity_discount = null;
		$this->product_ean13 = null;
		$this->product_upc = null;
		$this->product_reference = null;
		$this->product_supplier_reference = null;
		$this->product_weight = null;
		$this->tax_name = null;
		$this->tax_rate = null;
		$this->ecotax = null;
		$this->ecotax_tax_rate = null;
		$this->discount_quantity_applied = null;
		$this->download_hash = null;
		$this->download_nb = null;
		$this->download_deadline = null;
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
		return (string) $this->exportTo(Oops_Db_OrderDetailPeer::DEFAULT_STRING_FORMAT);
	}

} // Oops_Db_Propel_OrderDetail
