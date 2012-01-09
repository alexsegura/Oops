<?php


/**
 * Base class that represents a row from the 'product' table.
 *
 * 
 *
 * @package    propel.generator.prestashop.om
 */
abstract class Oops_Db_Propel_Product extends BaseObject  implements Persistent
{

	/**
	 * Peer class name
	 */
	const PEER = 'Oops_Db_ProductPeer';

	/**
	 * The Peer class.
	 * Instance provides a convenient way of calling static methods on a class
	 * that calling code may not be able to identify.
	 * @var        Oops_Db_ProductPeer
	 */
	protected static $peer;

	/**
	 * The value for the id_product field.
	 * @var        int
	 */
	protected $id_product;

	/**
	 * The value for the id_supplier field.
	 * @var        int
	 */
	protected $id_supplier;

	/**
	 * The value for the id_manufacturer field.
	 * @var        int
	 */
	protected $id_manufacturer;

	/**
	 * The value for the id_tax_rules_group field.
	 * @var        int
	 */
	protected $id_tax_rules_group;

	/**
	 * The value for the id_category_default field.
	 * @var        int
	 */
	protected $id_category_default;

	/**
	 * The value for the id_color_default field.
	 * @var        int
	 */
	protected $id_color_default;

	/**
	 * The value for the on_sale field.
	 * Note: this column has a database default value of: false
	 * @var        boolean
	 */
	protected $on_sale;

	/**
	 * The value for the online_only field.
	 * Note: this column has a database default value of: false
	 * @var        boolean
	 */
	protected $online_only;

	/**
	 * The value for the ean13 field.
	 * @var        string
	 */
	protected $ean13;

	/**
	 * The value for the upc field.
	 * @var        string
	 */
	protected $upc;

	/**
	 * The value for the ecotax field.
	 * Note: this column has a database default value of: '0.000000'
	 * @var        string
	 */
	protected $ecotax;

	/**
	 * The value for the quantity field.
	 * Note: this column has a database default value of: 0
	 * @var        int
	 */
	protected $quantity;

	/**
	 * The value for the minimal_quantity field.
	 * Note: this column has a database default value of: 1
	 * @var        int
	 */
	protected $minimal_quantity;

	/**
	 * The value for the price field.
	 * Note: this column has a database default value of: '0.000000'
	 * @var        string
	 */
	protected $price;

	/**
	 * The value for the wholesale_price field.
	 * Note: this column has a database default value of: '0.000000'
	 * @var        string
	 */
	protected $wholesale_price;

	/**
	 * The value for the unity field.
	 * @var        string
	 */
	protected $unity;

	/**
	 * The value for the unit_price_ratio field.
	 * Note: this column has a database default value of: '0.000000'
	 * @var        string
	 */
	protected $unit_price_ratio;

	/**
	 * The value for the additional_shipping_cost field.
	 * Note: this column has a database default value of: '0.00'
	 * @var        string
	 */
	protected $additional_shipping_cost;

	/**
	 * The value for the reference field.
	 * @var        string
	 */
	protected $reference;

	/**
	 * The value for the supplier_reference field.
	 * @var        string
	 */
	protected $supplier_reference;

	/**
	 * The value for the location field.
	 * @var        string
	 */
	protected $location;

	/**
	 * The value for the width field.
	 * Note: this column has a database default value of: 0
	 * @var        double
	 */
	protected $width;

	/**
	 * The value for the height field.
	 * Note: this column has a database default value of: 0
	 * @var        double
	 */
	protected $height;

	/**
	 * The value for the depth field.
	 * Note: this column has a database default value of: 0
	 * @var        double
	 */
	protected $depth;

	/**
	 * The value for the weight field.
	 * Note: this column has a database default value of: 0
	 * @var        double
	 */
	protected $weight;

	/**
	 * The value for the out_of_stock field.
	 * Note: this column has a database default value of: 2
	 * @var        int
	 */
	protected $out_of_stock;

	/**
	 * The value for the quantity_discount field.
	 * Note: this column has a database default value of: false
	 * @var        boolean
	 */
	protected $quantity_discount;

	/**
	 * The value for the customizable field.
	 * Note: this column has a database default value of: 0
	 * @var        int
	 */
	protected $customizable;

	/**
	 * The value for the uploadable_files field.
	 * Note: this column has a database default value of: 0
	 * @var        int
	 */
	protected $uploadable_files;

	/**
	 * The value for the text_fields field.
	 * Note: this column has a database default value of: 0
	 * @var        int
	 */
	protected $text_fields;

	/**
	 * The value for the active field.
	 * Note: this column has a database default value of: false
	 * @var        boolean
	 */
	protected $active;

	/**
	 * The value for the available_for_order field.
	 * Note: this column has a database default value of: true
	 * @var        boolean
	 */
	protected $available_for_order;

	/**
	 * The value for the condition field.
	 * Note: this column has a database default value of: 'new'
	 * @var        string
	 */
	protected $condition;

	/**
	 * The value for the show_price field.
	 * Note: this column has a database default value of: true
	 * @var        boolean
	 */
	protected $show_price;

	/**
	 * The value for the indexed field.
	 * Note: this column has a database default value of: false
	 * @var        boolean
	 */
	protected $indexed;

	/**
	 * The value for the cache_is_pack field.
	 * Note: this column has a database default value of: false
	 * @var        boolean
	 */
	protected $cache_is_pack;

	/**
	 * The value for the cache_has_attachments field.
	 * Note: this column has a database default value of: false
	 * @var        boolean
	 */
	protected $cache_has_attachments;

	/**
	 * The value for the cache_default_attribute field.
	 * @var        int
	 */
	protected $cache_default_attribute;

	/**
	 * The value for the date_add field.
	 * @var        string
	 */
	protected $date_add;

	/**
	 * The value for the date_upd field.
	 * @var        string
	 */
	protected $date_upd;

	/**
	 * @var        Manufacturer
	 */
	protected $aManufacturer;

	/**
	 * @var        array Oops_Db_CategoryProduct[] Collection to store aggregation of Oops_Db_CategoryProduct objects.
	 */
	protected $collCategoryProducts;

	/**
	 * @var        array Oops_Db_FeatureProduct[] Collection to store aggregation of Oops_Db_FeatureProduct objects.
	 */
	protected $collFeatureProducts;

	/**
	 * @var        array Oops_Db_Image[] Collection to store aggregation of Oops_Db_Image objects.
	 */
	protected $collImages;

	/**
	 * @var        array Oops_Db_ProductLang[] Collection to store aggregation of Oops_Db_ProductLang objects.
	 */
	protected $collProductLangs;

	/**
	 * @var        Oops_Db_ProductSale one-to-one related Oops_Db_ProductSale object
	 */
	protected $singleProductSale;

	/**
	 * @var        array Oops_Db_StockMvt[] Collection to store aggregation of Oops_Db_StockMvt objects.
	 */
	protected $collStockMvts;

	/**
	 * @var        Oops_Db_Supplier one-to-one related Oops_Db_Supplier object
	 */
	protected $singleSupplier;

	/**
	 * @var        array Oops_Db_Category[] Collection to store aggregation of Oops_Db_Category objects.
	 */
	protected $collCategories;

	/**
	 * @var        array Oops_Db_Feature[] Collection to store aggregation of Oops_Db_Feature objects.
	 */
	protected $collFeatures;

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

	// i18n behavior
	
	/**
	 * Current locale
	 * @var        string
	 */
	protected $currentLocale = '1';
	
	/**
	 * Current translation objects
	 * @var        array[Oops_Db_ProductLang]
	 */
	protected $currentTranslations;

	/**
	 * An array of objects scheduled for deletion.
	 * @var		array
	 */
	protected $categoriesScheduledForDeletion = null;

	/**
	 * An array of objects scheduled for deletion.
	 * @var		array
	 */
	protected $featuresScheduledForDeletion = null;

	/**
	 * An array of objects scheduled for deletion.
	 * @var		array
	 */
	protected $categoryProductsScheduledForDeletion = null;

	/**
	 * An array of objects scheduled for deletion.
	 * @var		array
	 */
	protected $featureProductsScheduledForDeletion = null;

	/**
	 * An array of objects scheduled for deletion.
	 * @var		array
	 */
	protected $imagesScheduledForDeletion = null;

	/**
	 * An array of objects scheduled for deletion.
	 * @var		array
	 */
	protected $productLangsScheduledForDeletion = null;

	/**
	 * An array of objects scheduled for deletion.
	 * @var		array
	 */
	protected $productSalesScheduledForDeletion = null;

	/**
	 * An array of objects scheduled for deletion.
	 * @var		array
	 */
	protected $stockMvtsScheduledForDeletion = null;

	/**
	 * An array of objects scheduled for deletion.
	 * @var		array
	 */
	protected $suppliersScheduledForDeletion = null;

	/**
	 * Applies default values to this object.
	 * This method should be called from the object's constructor (or
	 * equivalent initialization method).
	 * @see        __construct()
	 */
	public function applyDefaultValues()
	{
		$this->on_sale = false;
		$this->online_only = false;
		$this->ecotax = '0.000000';
		$this->quantity = 0;
		$this->minimal_quantity = 1;
		$this->price = '0.000000';
		$this->wholesale_price = '0.000000';
		$this->unit_price_ratio = '0.000000';
		$this->additional_shipping_cost = '0.00';
		$this->width = 0;
		$this->height = 0;
		$this->depth = 0;
		$this->weight = 0;
		$this->out_of_stock = 2;
		$this->quantity_discount = false;
		$this->customizable = 0;
		$this->uploadable_files = 0;
		$this->text_fields = 0;
		$this->active = false;
		$this->available_for_order = true;
		$this->condition = 'new';
		$this->show_price = true;
		$this->indexed = false;
		$this->cache_is_pack = false;
		$this->cache_has_attachments = false;
	}

	/**
	 * Initializes internal state of Oops_Db_Propel_Product object.
	 * @see        applyDefaults()
	 */
	public function __construct()
	{
		parent::__construct();
		$this->applyDefaultValues();
	}

	/**
	 * Get the [id_product] column value.
	 * 
	 * @return     int
	 */
	public function getIdProduct()
	{
		return $this->id_product;
	}

	/**
	 * Get the [id_supplier] column value.
	 * 
	 * @return     int
	 */
	public function getIdSupplier()
	{
		return $this->id_supplier;
	}

	/**
	 * Get the [id_manufacturer] column value.
	 * 
	 * @return     int
	 */
	public function getIdManufacturer()
	{
		return $this->id_manufacturer;
	}

	/**
	 * Get the [id_tax_rules_group] column value.
	 * 
	 * @return     int
	 */
	public function getIdTaxRulesGroup()
	{
		return $this->id_tax_rules_group;
	}

	/**
	 * Get the [id_category_default] column value.
	 * 
	 * @return     int
	 */
	public function getIdCategoryDefault()
	{
		return $this->id_category_default;
	}

	/**
	 * Get the [id_color_default] column value.
	 * 
	 * @return     int
	 */
	public function getIdColorDefault()
	{
		return $this->id_color_default;
	}

	/**
	 * Get the [on_sale] column value.
	 * 
	 * @return     boolean
	 */
	public function getOnSale()
	{
		return $this->on_sale;
	}

	/**
	 * Get the [online_only] column value.
	 * 
	 * @return     boolean
	 */
	public function getOnlineOnly()
	{
		return $this->online_only;
	}

	/**
	 * Get the [ean13] column value.
	 * 
	 * @return     string
	 */
	public function getEan13()
	{
		return $this->ean13;
	}

	/**
	 * Get the [upc] column value.
	 * 
	 * @return     string
	 */
	public function getUpc()
	{
		return $this->upc;
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
	 * Get the [quantity] column value.
	 * 
	 * @return     int
	 */
	public function getQuantity()
	{
		return $this->quantity;
	}

	/**
	 * Get the [minimal_quantity] column value.
	 * 
	 * @return     int
	 */
	public function getMinimalQuantity()
	{
		return $this->minimal_quantity;
	}

	/**
	 * Get the [price] column value.
	 * 
	 * @return     string
	 */
	public function getPrice()
	{
		return $this->price;
	}

	/**
	 * Get the [wholesale_price] column value.
	 * 
	 * @return     string
	 */
	public function getWholesalePrice()
	{
		return $this->wholesale_price;
	}

	/**
	 * Get the [unity] column value.
	 * 
	 * @return     string
	 */
	public function getUnity()
	{
		return $this->unity;
	}

	/**
	 * Get the [unit_price_ratio] column value.
	 * 
	 * @return     string
	 */
	public function getUnitPriceRatio()
	{
		return $this->unit_price_ratio;
	}

	/**
	 * Get the [additional_shipping_cost] column value.
	 * 
	 * @return     string
	 */
	public function getAdditionalShippingCost()
	{
		return $this->additional_shipping_cost;
	}

	/**
	 * Get the [reference] column value.
	 * 
	 * @return     string
	 */
	public function getReference()
	{
		return $this->reference;
	}

	/**
	 * Get the [supplier_reference] column value.
	 * 
	 * @return     string
	 */
	public function getSupplierReference()
	{
		return $this->supplier_reference;
	}

	/**
	 * Get the [location] column value.
	 * 
	 * @return     string
	 */
	public function getLocation()
	{
		return $this->location;
	}

	/**
	 * Get the [width] column value.
	 * 
	 * @return     double
	 */
	public function getWidth()
	{
		return $this->width;
	}

	/**
	 * Get the [height] column value.
	 * 
	 * @return     double
	 */
	public function getHeight()
	{
		return $this->height;
	}

	/**
	 * Get the [depth] column value.
	 * 
	 * @return     double
	 */
	public function getDepth()
	{
		return $this->depth;
	}

	/**
	 * Get the [weight] column value.
	 * 
	 * @return     double
	 */
	public function getWeight()
	{
		return $this->weight;
	}

	/**
	 * Get the [out_of_stock] column value.
	 * 
	 * @return     int
	 */
	public function getOutOfStock()
	{
		return $this->out_of_stock;
	}

	/**
	 * Get the [quantity_discount] column value.
	 * 
	 * @return     boolean
	 */
	public function getQuantityDiscount()
	{
		return $this->quantity_discount;
	}

	/**
	 * Get the [customizable] column value.
	 * 
	 * @return     int
	 */
	public function getCustomizable()
	{
		return $this->customizable;
	}

	/**
	 * Get the [uploadable_files] column value.
	 * 
	 * @return     int
	 */
	public function getUploadableFiles()
	{
		return $this->uploadable_files;
	}

	/**
	 * Get the [text_fields] column value.
	 * 
	 * @return     int
	 */
	public function getTextFields()
	{
		return $this->text_fields;
	}

	/**
	 * Get the [active] column value.
	 * 
	 * @return     boolean
	 */
	public function getActive()
	{
		return $this->active;
	}

	/**
	 * Get the [available_for_order] column value.
	 * 
	 * @return     boolean
	 */
	public function getAvailableForOrder()
	{
		return $this->available_for_order;
	}

	/**
	 * Get the [condition] column value.
	 * 
	 * @return     string
	 */
	public function getCondition()
	{
		return $this->condition;
	}

	/**
	 * Get the [show_price] column value.
	 * 
	 * @return     boolean
	 */
	public function getShowPrice()
	{
		return $this->show_price;
	}

	/**
	 * Get the [indexed] column value.
	 * 
	 * @return     boolean
	 */
	public function getIndexed()
	{
		return $this->indexed;
	}

	/**
	 * Get the [cache_is_pack] column value.
	 * 
	 * @return     boolean
	 */
	public function getCacheIsPack()
	{
		return $this->cache_is_pack;
	}

	/**
	 * Get the [cache_has_attachments] column value.
	 * 
	 * @return     boolean
	 */
	public function getCacheHasAttachments()
	{
		return $this->cache_has_attachments;
	}

	/**
	 * Get the [cache_default_attribute] column value.
	 * 
	 * @return     int
	 */
	public function getCacheDefaultAttribute()
	{
		return $this->cache_default_attribute;
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
	 * Get the [optionally formatted] temporal [date_upd] column value.
	 * 
	 *
	 * @param      string $format The date/time format string (either date()-style or strftime()-style).
	 *							If format is NULL, then the raw DateTime object will be returned.
	 * @return     mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00 00:00:00
	 * @throws     PropelException - if unable to parse/validate the date/time value.
	 */
	public function getDateUpd($format = 'Y-m-d H:i:s')
	{
		if ($this->date_upd === null) {
			return null;
		}


		if ($this->date_upd === '0000-00-00 00:00:00') {
			// while technically this is not a default value of NULL,
			// this seems to be closest in meaning.
			return null;
		} else {
			try {
				$dt = new DateTime($this->date_upd);
			} catch (Exception $x) {
				throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->date_upd, true), $x);
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
	 * Set the value of [id_product] column.
	 * 
	 * @param      int $v new value
	 * @return     Oops_Db_Product The current object (for fluent API support)
	 */
	public function setIdProduct($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->id_product !== $v) {
			$this->id_product = $v;
			$this->modifiedColumns[] = Oops_Db_ProductPeer::ID_PRODUCT;
		}

		return $this;
	} // setIdProduct()

	/**
	 * Set the value of [id_supplier] column.
	 * 
	 * @param      int $v new value
	 * @return     Oops_Db_Product The current object (for fluent API support)
	 */
	public function setIdSupplier($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->id_supplier !== $v) {
			$this->id_supplier = $v;
			$this->modifiedColumns[] = Oops_Db_ProductPeer::ID_SUPPLIER;
		}

		return $this;
	} // setIdSupplier()

	/**
	 * Set the value of [id_manufacturer] column.
	 * 
	 * @param      int $v new value
	 * @return     Oops_Db_Product The current object (for fluent API support)
	 */
	public function setIdManufacturer($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->id_manufacturer !== $v) {
			$this->id_manufacturer = $v;
			$this->modifiedColumns[] = Oops_Db_ProductPeer::ID_MANUFACTURER;
		}

		if ($this->aManufacturer !== null && $this->aManufacturer->getIdManufacturer() !== $v) {
			$this->aManufacturer = null;
		}

		return $this;
	} // setIdManufacturer()

	/**
	 * Set the value of [id_tax_rules_group] column.
	 * 
	 * @param      int $v new value
	 * @return     Oops_Db_Product The current object (for fluent API support)
	 */
	public function setIdTaxRulesGroup($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->id_tax_rules_group !== $v) {
			$this->id_tax_rules_group = $v;
			$this->modifiedColumns[] = Oops_Db_ProductPeer::ID_TAX_RULES_GROUP;
		}

		return $this;
	} // setIdTaxRulesGroup()

	/**
	 * Set the value of [id_category_default] column.
	 * 
	 * @param      int $v new value
	 * @return     Oops_Db_Product The current object (for fluent API support)
	 */
	public function setIdCategoryDefault($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->id_category_default !== $v) {
			$this->id_category_default = $v;
			$this->modifiedColumns[] = Oops_Db_ProductPeer::ID_CATEGORY_DEFAULT;
		}

		return $this;
	} // setIdCategoryDefault()

	/**
	 * Set the value of [id_color_default] column.
	 * 
	 * @param      int $v new value
	 * @return     Oops_Db_Product The current object (for fluent API support)
	 */
	public function setIdColorDefault($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->id_color_default !== $v) {
			$this->id_color_default = $v;
			$this->modifiedColumns[] = Oops_Db_ProductPeer::ID_COLOR_DEFAULT;
		}

		return $this;
	} // setIdColorDefault()

	/**
	 * Sets the value of the [on_sale] column.
	 * Non-boolean arguments are converted using the following rules:
	 *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * 
	 * @param      boolean|integer|string $v The new value
	 * @return     Oops_Db_Product The current object (for fluent API support)
	 */
	public function setOnSale($v)
	{
		if ($v !== null) {
			if (is_string($v)) {
				$v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
			} else {
				$v = (boolean) $v;
			}
		}

		if ($this->on_sale !== $v) {
			$this->on_sale = $v;
			$this->modifiedColumns[] = Oops_Db_ProductPeer::ON_SALE;
		}

		return $this;
	} // setOnSale()

	/**
	 * Sets the value of the [online_only] column.
	 * Non-boolean arguments are converted using the following rules:
	 *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * 
	 * @param      boolean|integer|string $v The new value
	 * @return     Oops_Db_Product The current object (for fluent API support)
	 */
	public function setOnlineOnly($v)
	{
		if ($v !== null) {
			if (is_string($v)) {
				$v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
			} else {
				$v = (boolean) $v;
			}
		}

		if ($this->online_only !== $v) {
			$this->online_only = $v;
			$this->modifiedColumns[] = Oops_Db_ProductPeer::ONLINE_ONLY;
		}

		return $this;
	} // setOnlineOnly()

	/**
	 * Set the value of [ean13] column.
	 * 
	 * @param      string $v new value
	 * @return     Oops_Db_Product The current object (for fluent API support)
	 */
	public function setEan13($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->ean13 !== $v) {
			$this->ean13 = $v;
			$this->modifiedColumns[] = Oops_Db_ProductPeer::EAN13;
		}

		return $this;
	} // setEan13()

	/**
	 * Set the value of [upc] column.
	 * 
	 * @param      string $v new value
	 * @return     Oops_Db_Product The current object (for fluent API support)
	 */
	public function setUpc($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->upc !== $v) {
			$this->upc = $v;
			$this->modifiedColumns[] = Oops_Db_ProductPeer::UPC;
		}

		return $this;
	} // setUpc()

	/**
	 * Set the value of [ecotax] column.
	 * 
	 * @param      string $v new value
	 * @return     Oops_Db_Product The current object (for fluent API support)
	 */
	public function setEcotax($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->ecotax !== $v) {
			$this->ecotax = $v;
			$this->modifiedColumns[] = Oops_Db_ProductPeer::ECOTAX;
		}

		return $this;
	} // setEcotax()

	/**
	 * Set the value of [quantity] column.
	 * 
	 * @param      int $v new value
	 * @return     Oops_Db_Product The current object (for fluent API support)
	 */
	public function setQuantity($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->quantity !== $v) {
			$this->quantity = $v;
			$this->modifiedColumns[] = Oops_Db_ProductPeer::QUANTITY;
		}

		return $this;
	} // setQuantity()

	/**
	 * Set the value of [minimal_quantity] column.
	 * 
	 * @param      int $v new value
	 * @return     Oops_Db_Product The current object (for fluent API support)
	 */
	public function setMinimalQuantity($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->minimal_quantity !== $v) {
			$this->minimal_quantity = $v;
			$this->modifiedColumns[] = Oops_Db_ProductPeer::MINIMAL_QUANTITY;
		}

		return $this;
	} // setMinimalQuantity()

	/**
	 * Set the value of [price] column.
	 * 
	 * @param      string $v new value
	 * @return     Oops_Db_Product The current object (for fluent API support)
	 */
	public function setPrice($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->price !== $v) {
			$this->price = $v;
			$this->modifiedColumns[] = Oops_Db_ProductPeer::PRICE;
		}

		return $this;
	} // setPrice()

	/**
	 * Set the value of [wholesale_price] column.
	 * 
	 * @param      string $v new value
	 * @return     Oops_Db_Product The current object (for fluent API support)
	 */
	public function setWholesalePrice($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->wholesale_price !== $v) {
			$this->wholesale_price = $v;
			$this->modifiedColumns[] = Oops_Db_ProductPeer::WHOLESALE_PRICE;
		}

		return $this;
	} // setWholesalePrice()

	/**
	 * Set the value of [unity] column.
	 * 
	 * @param      string $v new value
	 * @return     Oops_Db_Product The current object (for fluent API support)
	 */
	public function setUnity($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->unity !== $v) {
			$this->unity = $v;
			$this->modifiedColumns[] = Oops_Db_ProductPeer::UNITY;
		}

		return $this;
	} // setUnity()

	/**
	 * Set the value of [unit_price_ratio] column.
	 * 
	 * @param      string $v new value
	 * @return     Oops_Db_Product The current object (for fluent API support)
	 */
	public function setUnitPriceRatio($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->unit_price_ratio !== $v) {
			$this->unit_price_ratio = $v;
			$this->modifiedColumns[] = Oops_Db_ProductPeer::UNIT_PRICE_RATIO;
		}

		return $this;
	} // setUnitPriceRatio()

	/**
	 * Set the value of [additional_shipping_cost] column.
	 * 
	 * @param      string $v new value
	 * @return     Oops_Db_Product The current object (for fluent API support)
	 */
	public function setAdditionalShippingCost($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->additional_shipping_cost !== $v) {
			$this->additional_shipping_cost = $v;
			$this->modifiedColumns[] = Oops_Db_ProductPeer::ADDITIONAL_SHIPPING_COST;
		}

		return $this;
	} // setAdditionalShippingCost()

	/**
	 * Set the value of [reference] column.
	 * 
	 * @param      string $v new value
	 * @return     Oops_Db_Product The current object (for fluent API support)
	 */
	public function setReference($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->reference !== $v) {
			$this->reference = $v;
			$this->modifiedColumns[] = Oops_Db_ProductPeer::REFERENCE;
		}

		return $this;
	} // setReference()

	/**
	 * Set the value of [supplier_reference] column.
	 * 
	 * @param      string $v new value
	 * @return     Oops_Db_Product The current object (for fluent API support)
	 */
	public function setSupplierReference($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->supplier_reference !== $v) {
			$this->supplier_reference = $v;
			$this->modifiedColumns[] = Oops_Db_ProductPeer::SUPPLIER_REFERENCE;
		}

		return $this;
	} // setSupplierReference()

	/**
	 * Set the value of [location] column.
	 * 
	 * @param      string $v new value
	 * @return     Oops_Db_Product The current object (for fluent API support)
	 */
	public function setLocation($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->location !== $v) {
			$this->location = $v;
			$this->modifiedColumns[] = Oops_Db_ProductPeer::LOCATION;
		}

		return $this;
	} // setLocation()

	/**
	 * Set the value of [width] column.
	 * 
	 * @param      double $v new value
	 * @return     Oops_Db_Product The current object (for fluent API support)
	 */
	public function setWidth($v)
	{
		if ($v !== null) {
			$v = (double) $v;
		}

		if ($this->width !== $v) {
			$this->width = $v;
			$this->modifiedColumns[] = Oops_Db_ProductPeer::WIDTH;
		}

		return $this;
	} // setWidth()

	/**
	 * Set the value of [height] column.
	 * 
	 * @param      double $v new value
	 * @return     Oops_Db_Product The current object (for fluent API support)
	 */
	public function setHeight($v)
	{
		if ($v !== null) {
			$v = (double) $v;
		}

		if ($this->height !== $v) {
			$this->height = $v;
			$this->modifiedColumns[] = Oops_Db_ProductPeer::HEIGHT;
		}

		return $this;
	} // setHeight()

	/**
	 * Set the value of [depth] column.
	 * 
	 * @param      double $v new value
	 * @return     Oops_Db_Product The current object (for fluent API support)
	 */
	public function setDepth($v)
	{
		if ($v !== null) {
			$v = (double) $v;
		}

		if ($this->depth !== $v) {
			$this->depth = $v;
			$this->modifiedColumns[] = Oops_Db_ProductPeer::DEPTH;
		}

		return $this;
	} // setDepth()

	/**
	 * Set the value of [weight] column.
	 * 
	 * @param      double $v new value
	 * @return     Oops_Db_Product The current object (for fluent API support)
	 */
	public function setWeight($v)
	{
		if ($v !== null) {
			$v = (double) $v;
		}

		if ($this->weight !== $v) {
			$this->weight = $v;
			$this->modifiedColumns[] = Oops_Db_ProductPeer::WEIGHT;
		}

		return $this;
	} // setWeight()

	/**
	 * Set the value of [out_of_stock] column.
	 * 
	 * @param      int $v new value
	 * @return     Oops_Db_Product The current object (for fluent API support)
	 */
	public function setOutOfStock($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->out_of_stock !== $v) {
			$this->out_of_stock = $v;
			$this->modifiedColumns[] = Oops_Db_ProductPeer::OUT_OF_STOCK;
		}

		return $this;
	} // setOutOfStock()

	/**
	 * Sets the value of the [quantity_discount] column.
	 * Non-boolean arguments are converted using the following rules:
	 *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * 
	 * @param      boolean|integer|string $v The new value
	 * @return     Oops_Db_Product The current object (for fluent API support)
	 */
	public function setQuantityDiscount($v)
	{
		if ($v !== null) {
			if (is_string($v)) {
				$v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
			} else {
				$v = (boolean) $v;
			}
		}

		if ($this->quantity_discount !== $v) {
			$this->quantity_discount = $v;
			$this->modifiedColumns[] = Oops_Db_ProductPeer::QUANTITY_DISCOUNT;
		}

		return $this;
	} // setQuantityDiscount()

	/**
	 * Set the value of [customizable] column.
	 * 
	 * @param      int $v new value
	 * @return     Oops_Db_Product The current object (for fluent API support)
	 */
	public function setCustomizable($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->customizable !== $v) {
			$this->customizable = $v;
			$this->modifiedColumns[] = Oops_Db_ProductPeer::CUSTOMIZABLE;
		}

		return $this;
	} // setCustomizable()

	/**
	 * Set the value of [uploadable_files] column.
	 * 
	 * @param      int $v new value
	 * @return     Oops_Db_Product The current object (for fluent API support)
	 */
	public function setUploadableFiles($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->uploadable_files !== $v) {
			$this->uploadable_files = $v;
			$this->modifiedColumns[] = Oops_Db_ProductPeer::UPLOADABLE_FILES;
		}

		return $this;
	} // setUploadableFiles()

	/**
	 * Set the value of [text_fields] column.
	 * 
	 * @param      int $v new value
	 * @return     Oops_Db_Product The current object (for fluent API support)
	 */
	public function setTextFields($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->text_fields !== $v) {
			$this->text_fields = $v;
			$this->modifiedColumns[] = Oops_Db_ProductPeer::TEXT_FIELDS;
		}

		return $this;
	} // setTextFields()

	/**
	 * Sets the value of the [active] column.
	 * Non-boolean arguments are converted using the following rules:
	 *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * 
	 * @param      boolean|integer|string $v The new value
	 * @return     Oops_Db_Product The current object (for fluent API support)
	 */
	public function setActive($v)
	{
		if ($v !== null) {
			if (is_string($v)) {
				$v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
			} else {
				$v = (boolean) $v;
			}
		}

		if ($this->active !== $v) {
			$this->active = $v;
			$this->modifiedColumns[] = Oops_Db_ProductPeer::ACTIVE;
		}

		return $this;
	} // setActive()

	/**
	 * Sets the value of the [available_for_order] column.
	 * Non-boolean arguments are converted using the following rules:
	 *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * 
	 * @param      boolean|integer|string $v The new value
	 * @return     Oops_Db_Product The current object (for fluent API support)
	 */
	public function setAvailableForOrder($v)
	{
		if ($v !== null) {
			if (is_string($v)) {
				$v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
			} else {
				$v = (boolean) $v;
			}
		}

		if ($this->available_for_order !== $v) {
			$this->available_for_order = $v;
			$this->modifiedColumns[] = Oops_Db_ProductPeer::AVAILABLE_FOR_ORDER;
		}

		return $this;
	} // setAvailableForOrder()

	/**
	 * Set the value of [condition] column.
	 * 
	 * @param      string $v new value
	 * @return     Oops_Db_Product The current object (for fluent API support)
	 */
	public function setCondition($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->condition !== $v) {
			$this->condition = $v;
			$this->modifiedColumns[] = Oops_Db_ProductPeer::CONDITION;
		}

		return $this;
	} // setCondition()

	/**
	 * Sets the value of the [show_price] column.
	 * Non-boolean arguments are converted using the following rules:
	 *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * 
	 * @param      boolean|integer|string $v The new value
	 * @return     Oops_Db_Product The current object (for fluent API support)
	 */
	public function setShowPrice($v)
	{
		if ($v !== null) {
			if (is_string($v)) {
				$v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
			} else {
				$v = (boolean) $v;
			}
		}

		if ($this->show_price !== $v) {
			$this->show_price = $v;
			$this->modifiedColumns[] = Oops_Db_ProductPeer::SHOW_PRICE;
		}

		return $this;
	} // setShowPrice()

	/**
	 * Sets the value of the [indexed] column.
	 * Non-boolean arguments are converted using the following rules:
	 *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * 
	 * @param      boolean|integer|string $v The new value
	 * @return     Oops_Db_Product The current object (for fluent API support)
	 */
	public function setIndexed($v)
	{
		if ($v !== null) {
			if (is_string($v)) {
				$v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
			} else {
				$v = (boolean) $v;
			}
		}

		if ($this->indexed !== $v) {
			$this->indexed = $v;
			$this->modifiedColumns[] = Oops_Db_ProductPeer::INDEXED;
		}

		return $this;
	} // setIndexed()

	/**
	 * Sets the value of the [cache_is_pack] column.
	 * Non-boolean arguments are converted using the following rules:
	 *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * 
	 * @param      boolean|integer|string $v The new value
	 * @return     Oops_Db_Product The current object (for fluent API support)
	 */
	public function setCacheIsPack($v)
	{
		if ($v !== null) {
			if (is_string($v)) {
				$v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
			} else {
				$v = (boolean) $v;
			}
		}

		if ($this->cache_is_pack !== $v) {
			$this->cache_is_pack = $v;
			$this->modifiedColumns[] = Oops_Db_ProductPeer::CACHE_IS_PACK;
		}

		return $this;
	} // setCacheIsPack()

	/**
	 * Sets the value of the [cache_has_attachments] column.
	 * Non-boolean arguments are converted using the following rules:
	 *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * 
	 * @param      boolean|integer|string $v The new value
	 * @return     Oops_Db_Product The current object (for fluent API support)
	 */
	public function setCacheHasAttachments($v)
	{
		if ($v !== null) {
			if (is_string($v)) {
				$v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
			} else {
				$v = (boolean) $v;
			}
		}

		if ($this->cache_has_attachments !== $v) {
			$this->cache_has_attachments = $v;
			$this->modifiedColumns[] = Oops_Db_ProductPeer::CACHE_HAS_ATTACHMENTS;
		}

		return $this;
	} // setCacheHasAttachments()

	/**
	 * Set the value of [cache_default_attribute] column.
	 * 
	 * @param      int $v new value
	 * @return     Oops_Db_Product The current object (for fluent API support)
	 */
	public function setCacheDefaultAttribute($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->cache_default_attribute !== $v) {
			$this->cache_default_attribute = $v;
			$this->modifiedColumns[] = Oops_Db_ProductPeer::CACHE_DEFAULT_ATTRIBUTE;
		}

		return $this;
	} // setCacheDefaultAttribute()

	/**
	 * Sets the value of [date_add] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.
	 *               Empty strings are treated as NULL.
	 * @return     Oops_Db_Product The current object (for fluent API support)
	 */
	public function setDateAdd($v)
	{
		$dt = PropelDateTime::newInstance($v, null, 'DateTime');
		if ($this->date_add !== null || $dt !== null) {
			$currentDateAsString = ($this->date_add !== null && $tmpDt = new DateTime($this->date_add)) ? $tmpDt->format('Y-m-d H:i:s') : null;
			$newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
			if ($currentDateAsString !== $newDateAsString) {
				$this->date_add = $newDateAsString;
				$this->modifiedColumns[] = Oops_Db_ProductPeer::DATE_ADD;
			}
		} // if either are not null

		return $this;
	} // setDateAdd()

	/**
	 * Sets the value of [date_upd] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.
	 *               Empty strings are treated as NULL.
	 * @return     Oops_Db_Product The current object (for fluent API support)
	 */
	public function setDateUpd($v)
	{
		$dt = PropelDateTime::newInstance($v, null, 'DateTime');
		if ($this->date_upd !== null || $dt !== null) {
			$currentDateAsString = ($this->date_upd !== null && $tmpDt = new DateTime($this->date_upd)) ? $tmpDt->format('Y-m-d H:i:s') : null;
			$newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
			if ($currentDateAsString !== $newDateAsString) {
				$this->date_upd = $newDateAsString;
				$this->modifiedColumns[] = Oops_Db_ProductPeer::DATE_UPD;
			}
		} // if either are not null

		return $this;
	} // setDateUpd()

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
			if ($this->on_sale !== false) {
				return false;
			}

			if ($this->online_only !== false) {
				return false;
			}

			if ($this->ecotax !== '0.000000') {
				return false;
			}

			if ($this->quantity !== 0) {
				return false;
			}

			if ($this->minimal_quantity !== 1) {
				return false;
			}

			if ($this->price !== '0.000000') {
				return false;
			}

			if ($this->wholesale_price !== '0.000000') {
				return false;
			}

			if ($this->unit_price_ratio !== '0.000000') {
				return false;
			}

			if ($this->additional_shipping_cost !== '0.00') {
				return false;
			}

			if ($this->width !== 0) {
				return false;
			}

			if ($this->height !== 0) {
				return false;
			}

			if ($this->depth !== 0) {
				return false;
			}

			if ($this->weight !== 0) {
				return false;
			}

			if ($this->out_of_stock !== 2) {
				return false;
			}

			if ($this->quantity_discount !== false) {
				return false;
			}

			if ($this->customizable !== 0) {
				return false;
			}

			if ($this->uploadable_files !== 0) {
				return false;
			}

			if ($this->text_fields !== 0) {
				return false;
			}

			if ($this->active !== false) {
				return false;
			}

			if ($this->available_for_order !== true) {
				return false;
			}

			if ($this->condition !== 'new') {
				return false;
			}

			if ($this->show_price !== true) {
				return false;
			}

			if ($this->indexed !== false) {
				return false;
			}

			if ($this->cache_is_pack !== false) {
				return false;
			}

			if ($this->cache_has_attachments !== false) {
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

			$this->id_product = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
			$this->id_supplier = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
			$this->id_manufacturer = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
			$this->id_tax_rules_group = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
			$this->id_category_default = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
			$this->id_color_default = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
			$this->on_sale = ($row[$startcol + 6] !== null) ? (boolean) $row[$startcol + 6] : null;
			$this->online_only = ($row[$startcol + 7] !== null) ? (boolean) $row[$startcol + 7] : null;
			$this->ean13 = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
			$this->upc = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
			$this->ecotax = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
			$this->quantity = ($row[$startcol + 11] !== null) ? (int) $row[$startcol + 11] : null;
			$this->minimal_quantity = ($row[$startcol + 12] !== null) ? (int) $row[$startcol + 12] : null;
			$this->price = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
			$this->wholesale_price = ($row[$startcol + 14] !== null) ? (string) $row[$startcol + 14] : null;
			$this->unity = ($row[$startcol + 15] !== null) ? (string) $row[$startcol + 15] : null;
			$this->unit_price_ratio = ($row[$startcol + 16] !== null) ? (string) $row[$startcol + 16] : null;
			$this->additional_shipping_cost = ($row[$startcol + 17] !== null) ? (string) $row[$startcol + 17] : null;
			$this->reference = ($row[$startcol + 18] !== null) ? (string) $row[$startcol + 18] : null;
			$this->supplier_reference = ($row[$startcol + 19] !== null) ? (string) $row[$startcol + 19] : null;
			$this->location = ($row[$startcol + 20] !== null) ? (string) $row[$startcol + 20] : null;
			$this->width = ($row[$startcol + 21] !== null) ? (double) $row[$startcol + 21] : null;
			$this->height = ($row[$startcol + 22] !== null) ? (double) $row[$startcol + 22] : null;
			$this->depth = ($row[$startcol + 23] !== null) ? (double) $row[$startcol + 23] : null;
			$this->weight = ($row[$startcol + 24] !== null) ? (double) $row[$startcol + 24] : null;
			$this->out_of_stock = ($row[$startcol + 25] !== null) ? (int) $row[$startcol + 25] : null;
			$this->quantity_discount = ($row[$startcol + 26] !== null) ? (boolean) $row[$startcol + 26] : null;
			$this->customizable = ($row[$startcol + 27] !== null) ? (int) $row[$startcol + 27] : null;
			$this->uploadable_files = ($row[$startcol + 28] !== null) ? (int) $row[$startcol + 28] : null;
			$this->text_fields = ($row[$startcol + 29] !== null) ? (int) $row[$startcol + 29] : null;
			$this->active = ($row[$startcol + 30] !== null) ? (boolean) $row[$startcol + 30] : null;
			$this->available_for_order = ($row[$startcol + 31] !== null) ? (boolean) $row[$startcol + 31] : null;
			$this->condition = ($row[$startcol + 32] !== null) ? (string) $row[$startcol + 32] : null;
			$this->show_price = ($row[$startcol + 33] !== null) ? (boolean) $row[$startcol + 33] : null;
			$this->indexed = ($row[$startcol + 34] !== null) ? (boolean) $row[$startcol + 34] : null;
			$this->cache_is_pack = ($row[$startcol + 35] !== null) ? (boolean) $row[$startcol + 35] : null;
			$this->cache_has_attachments = ($row[$startcol + 36] !== null) ? (boolean) $row[$startcol + 36] : null;
			$this->cache_default_attribute = ($row[$startcol + 37] !== null) ? (int) $row[$startcol + 37] : null;
			$this->date_add = ($row[$startcol + 38] !== null) ? (string) $row[$startcol + 38] : null;
			$this->date_upd = ($row[$startcol + 39] !== null) ? (string) $row[$startcol + 39] : null;
			$this->resetModified();

			$this->setNew(false);

			if ($rehydrate) {
				$this->ensureConsistency();
			}

			return $startcol + 40; // 40 = Oops_Db_ProductPeer::NUM_HYDRATE_COLUMNS.

		} catch (Exception $e) {
			throw new PropelException("Error populating Oops_Db_Product object", $e);
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

		if ($this->aManufacturer !== null && $this->id_manufacturer !== $this->aManufacturer->getIdManufacturer()) {
			$this->aManufacturer = null;
		}
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
			$con = Propel::getConnection(Oops_Db_ProductPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		// We don't need to alter the object instance pool; we're just modifying this instance
		// already in the pool.

		$stmt = Oops_Db_ProductPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
		$row = $stmt->fetch(PDO::FETCH_NUM);
		$stmt->closeCursor();
		if (!$row) {
			throw new PropelException('Cannot find matching row in the database to reload object values.');
		}
		$this->hydrate($row, 0, true); // rehydrate

		if ($deep) {  // also de-associate any related objects?

			$this->aManufacturer = null;
			$this->collCategoryProducts = null;

			$this->collFeatureProducts = null;

			$this->collImages = null;

			$this->collProductLangs = null;

			$this->singleProductSale = null;

			$this->collStockMvts = null;

			$this->singleSupplier = null;

			$this->collCategories = null;
			$this->collFeatures = null;
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
			$con = Propel::getConnection(Oops_Db_ProductPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$con->beginTransaction();
		try {
			$deleteQuery = Oops_Db_ProductQuery::create()
				->filterByPrimaryKey($this->getPrimaryKey());
			$ret = $this->preDelete($con);
			if ($ret) {
				$deleteQuery->delete($con);
				$this->postDelete($con);
				// i18n behavior
				
				// emulate delete cascade
				Oops_Db_ProductLangQuery::create()
					->filterByOops_Db_Product($this)
					->delete($con);
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
			$con = Propel::getConnection(Oops_Db_ProductPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
				Oops_Db_ProductPeer::addInstanceToPool($this);
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

			// We call the save method on the following object(s) if they
			// were passed to this object by their coresponding set
			// method.  This object relates to these object(s) by a
			// foreign key reference.

			if ($this->aManufacturer !== null) {
				if ($this->aManufacturer->isModified() || $this->aManufacturer->isNew()) {
					$affectedRows += $this->aManufacturer->save($con);
				}
				$this->setManufacturer($this->aManufacturer);
			}

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

			if ($this->categoriesScheduledForDeletion !== null) {
				if (!$this->categoriesScheduledForDeletion->isEmpty()) {
					CategoryProductQuery::create()
						->filterByPrimaryKeys($this->categoriesScheduledForDeletion->getPrimaryKeys(false))
						->delete($con);
					$this->categoriesScheduledForDeletion = null;
				}

				foreach ($this->getCategories() as $category) {
					if ($category->isModified()) {
						$category->save($con);
					}
				}
			}

			if ($this->featuresScheduledForDeletion !== null) {
				if (!$this->featuresScheduledForDeletion->isEmpty()) {
					FeatureProductQuery::create()
						->filterByPrimaryKeys($this->featuresScheduledForDeletion->getPrimaryKeys(false))
						->delete($con);
					$this->featuresScheduledForDeletion = null;
				}

				foreach ($this->getFeatures() as $feature) {
					if ($feature->isModified()) {
						$feature->save($con);
					}
				}
			}

			if ($this->categoryProductsScheduledForDeletion !== null) {
				if (!$this->categoryProductsScheduledForDeletion->isEmpty()) {
					Oops_Db_CategoryProductQuery::create()
						->filterByPrimaryKeys($this->categoryProductsScheduledForDeletion->getPrimaryKeys(false))
						->delete($con);
					$this->categoryProductsScheduledForDeletion = null;
				}
			}

			if ($this->collCategoryProducts !== null) {
				foreach ($this->collCategoryProducts as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->featureProductsScheduledForDeletion !== null) {
				if (!$this->featureProductsScheduledForDeletion->isEmpty()) {
					Oops_Db_FeatureProductQuery::create()
						->filterByPrimaryKeys($this->featureProductsScheduledForDeletion->getPrimaryKeys(false))
						->delete($con);
					$this->featureProductsScheduledForDeletion = null;
				}
			}

			if ($this->collFeatureProducts !== null) {
				foreach ($this->collFeatureProducts as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->imagesScheduledForDeletion !== null) {
				if (!$this->imagesScheduledForDeletion->isEmpty()) {
					Oops_Db_ImageQuery::create()
						->filterByPrimaryKeys($this->imagesScheduledForDeletion->getPrimaryKeys(false))
						->delete($con);
					$this->imagesScheduledForDeletion = null;
				}
			}

			if ($this->collImages !== null) {
				foreach ($this->collImages as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->productLangsScheduledForDeletion !== null) {
				if (!$this->productLangsScheduledForDeletion->isEmpty()) {
					Oops_Db_ProductLangQuery::create()
						->filterByPrimaryKeys($this->productLangsScheduledForDeletion->getPrimaryKeys(false))
						->delete($con);
					$this->productLangsScheduledForDeletion = null;
				}
			}

			if ($this->collProductLangs !== null) {
				foreach ($this->collProductLangs as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->productSalesScheduledForDeletion !== null) {
				if (!$this->productSalesScheduledForDeletion->isEmpty()) {
					Oops_Db_ProductSaleQuery::create()
						->filterByPrimaryKeys($this->productSalesScheduledForDeletion->getPrimaryKeys(false))
						->delete($con);
					$this->productSalesScheduledForDeletion = null;
				}
			}

			if ($this->singleProductSale !== null) {
				if (!$this->singleProductSale->isDeleted()) {
						$affectedRows += $this->singleProductSale->save($con);
				}
			}

			if ($this->stockMvtsScheduledForDeletion !== null) {
				if (!$this->stockMvtsScheduledForDeletion->isEmpty()) {
					Oops_Db_StockMvtQuery::create()
						->filterByPrimaryKeys($this->stockMvtsScheduledForDeletion->getPrimaryKeys(false))
						->delete($con);
					$this->stockMvtsScheduledForDeletion = null;
				}
			}

			if ($this->collStockMvts !== null) {
				foreach ($this->collStockMvts as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->suppliersScheduledForDeletion !== null) {
				if (!$this->suppliersScheduledForDeletion->isEmpty()) {
					Oops_Db_SupplierQuery::create()
						->filterByPrimaryKeys($this->suppliersScheduledForDeletion->getPrimaryKeys(false))
						->delete($con);
					$this->suppliersScheduledForDeletion = null;
				}
			}

			if ($this->singleSupplier !== null) {
				if (!$this->singleSupplier->isDeleted()) {
						$affectedRows += $this->singleSupplier->save($con);
				}
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

		$this->modifiedColumns[] = Oops_Db_ProductPeer::ID_PRODUCT;
		if (null !== $this->id_product) {
			throw new PropelException('Cannot insert a value for auto-increment primary key (' . Oops_Db_ProductPeer::ID_PRODUCT . ')');
		}

		 // check the columns in natural order for more readable SQL queries
		if ($this->isColumnModified(Oops_Db_ProductPeer::ID_PRODUCT)) {
			$modifiedColumns[':p' . $index++]  = '`ID_PRODUCT`';
		}
		if ($this->isColumnModified(Oops_Db_ProductPeer::ID_SUPPLIER)) {
			$modifiedColumns[':p' . $index++]  = '`ID_SUPPLIER`';
		}
		if ($this->isColumnModified(Oops_Db_ProductPeer::ID_MANUFACTURER)) {
			$modifiedColumns[':p' . $index++]  = '`ID_MANUFACTURER`';
		}
		if ($this->isColumnModified(Oops_Db_ProductPeer::ID_TAX_RULES_GROUP)) {
			$modifiedColumns[':p' . $index++]  = '`ID_TAX_RULES_GROUP`';
		}
		if ($this->isColumnModified(Oops_Db_ProductPeer::ID_CATEGORY_DEFAULT)) {
			$modifiedColumns[':p' . $index++]  = '`ID_CATEGORY_DEFAULT`';
		}
		if ($this->isColumnModified(Oops_Db_ProductPeer::ID_COLOR_DEFAULT)) {
			$modifiedColumns[':p' . $index++]  = '`ID_COLOR_DEFAULT`';
		}
		if ($this->isColumnModified(Oops_Db_ProductPeer::ON_SALE)) {
			$modifiedColumns[':p' . $index++]  = '`ON_SALE`';
		}
		if ($this->isColumnModified(Oops_Db_ProductPeer::ONLINE_ONLY)) {
			$modifiedColumns[':p' . $index++]  = '`ONLINE_ONLY`';
		}
		if ($this->isColumnModified(Oops_Db_ProductPeer::EAN13)) {
			$modifiedColumns[':p' . $index++]  = '`EAN13`';
		}
		if ($this->isColumnModified(Oops_Db_ProductPeer::UPC)) {
			$modifiedColumns[':p' . $index++]  = '`UPC`';
		}
		if ($this->isColumnModified(Oops_Db_ProductPeer::ECOTAX)) {
			$modifiedColumns[':p' . $index++]  = '`ECOTAX`';
		}
		if ($this->isColumnModified(Oops_Db_ProductPeer::QUANTITY)) {
			$modifiedColumns[':p' . $index++]  = '`QUANTITY`';
		}
		if ($this->isColumnModified(Oops_Db_ProductPeer::MINIMAL_QUANTITY)) {
			$modifiedColumns[':p' . $index++]  = '`MINIMAL_QUANTITY`';
		}
		if ($this->isColumnModified(Oops_Db_ProductPeer::PRICE)) {
			$modifiedColumns[':p' . $index++]  = '`PRICE`';
		}
		if ($this->isColumnModified(Oops_Db_ProductPeer::WHOLESALE_PRICE)) {
			$modifiedColumns[':p' . $index++]  = '`WHOLESALE_PRICE`';
		}
		if ($this->isColumnModified(Oops_Db_ProductPeer::UNITY)) {
			$modifiedColumns[':p' . $index++]  = '`UNITY`';
		}
		if ($this->isColumnModified(Oops_Db_ProductPeer::UNIT_PRICE_RATIO)) {
			$modifiedColumns[':p' . $index++]  = '`UNIT_PRICE_RATIO`';
		}
		if ($this->isColumnModified(Oops_Db_ProductPeer::ADDITIONAL_SHIPPING_COST)) {
			$modifiedColumns[':p' . $index++]  = '`ADDITIONAL_SHIPPING_COST`';
		}
		if ($this->isColumnModified(Oops_Db_ProductPeer::REFERENCE)) {
			$modifiedColumns[':p' . $index++]  = '`REFERENCE`';
		}
		if ($this->isColumnModified(Oops_Db_ProductPeer::SUPPLIER_REFERENCE)) {
			$modifiedColumns[':p' . $index++]  = '`SUPPLIER_REFERENCE`';
		}
		if ($this->isColumnModified(Oops_Db_ProductPeer::LOCATION)) {
			$modifiedColumns[':p' . $index++]  = '`LOCATION`';
		}
		if ($this->isColumnModified(Oops_Db_ProductPeer::WIDTH)) {
			$modifiedColumns[':p' . $index++]  = '`WIDTH`';
		}
		if ($this->isColumnModified(Oops_Db_ProductPeer::HEIGHT)) {
			$modifiedColumns[':p' . $index++]  = '`HEIGHT`';
		}
		if ($this->isColumnModified(Oops_Db_ProductPeer::DEPTH)) {
			$modifiedColumns[':p' . $index++]  = '`DEPTH`';
		}
		if ($this->isColumnModified(Oops_Db_ProductPeer::WEIGHT)) {
			$modifiedColumns[':p' . $index++]  = '`WEIGHT`';
		}
		if ($this->isColumnModified(Oops_Db_ProductPeer::OUT_OF_STOCK)) {
			$modifiedColumns[':p' . $index++]  = '`OUT_OF_STOCK`';
		}
		if ($this->isColumnModified(Oops_Db_ProductPeer::QUANTITY_DISCOUNT)) {
			$modifiedColumns[':p' . $index++]  = '`QUANTITY_DISCOUNT`';
		}
		if ($this->isColumnModified(Oops_Db_ProductPeer::CUSTOMIZABLE)) {
			$modifiedColumns[':p' . $index++]  = '`CUSTOMIZABLE`';
		}
		if ($this->isColumnModified(Oops_Db_ProductPeer::UPLOADABLE_FILES)) {
			$modifiedColumns[':p' . $index++]  = '`UPLOADABLE_FILES`';
		}
		if ($this->isColumnModified(Oops_Db_ProductPeer::TEXT_FIELDS)) {
			$modifiedColumns[':p' . $index++]  = '`TEXT_FIELDS`';
		}
		if ($this->isColumnModified(Oops_Db_ProductPeer::ACTIVE)) {
			$modifiedColumns[':p' . $index++]  = '`ACTIVE`';
		}
		if ($this->isColumnModified(Oops_Db_ProductPeer::AVAILABLE_FOR_ORDER)) {
			$modifiedColumns[':p' . $index++]  = '`AVAILABLE_FOR_ORDER`';
		}
		if ($this->isColumnModified(Oops_Db_ProductPeer::CONDITION)) {
			$modifiedColumns[':p' . $index++]  = '`CONDITION`';
		}
		if ($this->isColumnModified(Oops_Db_ProductPeer::SHOW_PRICE)) {
			$modifiedColumns[':p' . $index++]  = '`SHOW_PRICE`';
		}
		if ($this->isColumnModified(Oops_Db_ProductPeer::INDEXED)) {
			$modifiedColumns[':p' . $index++]  = '`INDEXED`';
		}
		if ($this->isColumnModified(Oops_Db_ProductPeer::CACHE_IS_PACK)) {
			$modifiedColumns[':p' . $index++]  = '`CACHE_IS_PACK`';
		}
		if ($this->isColumnModified(Oops_Db_ProductPeer::CACHE_HAS_ATTACHMENTS)) {
			$modifiedColumns[':p' . $index++]  = '`CACHE_HAS_ATTACHMENTS`';
		}
		if ($this->isColumnModified(Oops_Db_ProductPeer::CACHE_DEFAULT_ATTRIBUTE)) {
			$modifiedColumns[':p' . $index++]  = '`CACHE_DEFAULT_ATTRIBUTE`';
		}
		if ($this->isColumnModified(Oops_Db_ProductPeer::DATE_ADD)) {
			$modifiedColumns[':p' . $index++]  = '`DATE_ADD`';
		}
		if ($this->isColumnModified(Oops_Db_ProductPeer::DATE_UPD)) {
			$modifiedColumns[':p' . $index++]  = '`DATE_UPD`';
		}

		$sql = sprintf(
			'INSERT INTO `' .  _DB_PREFIX_ . 'product` (%s) VALUES (%s)',
			implode(', ', $modifiedColumns),
			implode(', ', array_keys($modifiedColumns))
		);

		try {
			$stmt = $con->prepare($sql);
			foreach ($modifiedColumns as $identifier => $columnName) {
				switch ($columnName) {
					case '`ID_PRODUCT`':
						$stmt->bindValue($identifier, $this->id_product, PDO::PARAM_INT);
						break;
					case '`ID_SUPPLIER`':
						$stmt->bindValue($identifier, $this->id_supplier, PDO::PARAM_INT);
						break;
					case '`ID_MANUFACTURER`':
						$stmt->bindValue($identifier, $this->id_manufacturer, PDO::PARAM_INT);
						break;
					case '`ID_TAX_RULES_GROUP`':
						$stmt->bindValue($identifier, $this->id_tax_rules_group, PDO::PARAM_INT);
						break;
					case '`ID_CATEGORY_DEFAULT`':
						$stmt->bindValue($identifier, $this->id_category_default, PDO::PARAM_INT);
						break;
					case '`ID_COLOR_DEFAULT`':
						$stmt->bindValue($identifier, $this->id_color_default, PDO::PARAM_INT);
						break;
					case '`ON_SALE`':
						$stmt->bindValue($identifier, (int) $this->on_sale, PDO::PARAM_INT);
						break;
					case '`ONLINE_ONLY`':
						$stmt->bindValue($identifier, (int) $this->online_only, PDO::PARAM_INT);
						break;
					case '`EAN13`':
						$stmt->bindValue($identifier, $this->ean13, PDO::PARAM_STR);
						break;
					case '`UPC`':
						$stmt->bindValue($identifier, $this->upc, PDO::PARAM_STR);
						break;
					case '`ECOTAX`':
						$stmt->bindValue($identifier, $this->ecotax, PDO::PARAM_STR);
						break;
					case '`QUANTITY`':
						$stmt->bindValue($identifier, $this->quantity, PDO::PARAM_INT);
						break;
					case '`MINIMAL_QUANTITY`':
						$stmt->bindValue($identifier, $this->minimal_quantity, PDO::PARAM_INT);
						break;
					case '`PRICE`':
						$stmt->bindValue($identifier, $this->price, PDO::PARAM_STR);
						break;
					case '`WHOLESALE_PRICE`':
						$stmt->bindValue($identifier, $this->wholesale_price, PDO::PARAM_STR);
						break;
					case '`UNITY`':
						$stmt->bindValue($identifier, $this->unity, PDO::PARAM_STR);
						break;
					case '`UNIT_PRICE_RATIO`':
						$stmt->bindValue($identifier, $this->unit_price_ratio, PDO::PARAM_STR);
						break;
					case '`ADDITIONAL_SHIPPING_COST`':
						$stmt->bindValue($identifier, $this->additional_shipping_cost, PDO::PARAM_STR);
						break;
					case '`REFERENCE`':
						$stmt->bindValue($identifier, $this->reference, PDO::PARAM_STR);
						break;
					case '`SUPPLIER_REFERENCE`':
						$stmt->bindValue($identifier, $this->supplier_reference, PDO::PARAM_STR);
						break;
					case '`LOCATION`':
						$stmt->bindValue($identifier, $this->location, PDO::PARAM_STR);
						break;
					case '`WIDTH`':
						$stmt->bindValue($identifier, $this->width, PDO::PARAM_STR);
						break;
					case '`HEIGHT`':
						$stmt->bindValue($identifier, $this->height, PDO::PARAM_STR);
						break;
					case '`DEPTH`':
						$stmt->bindValue($identifier, $this->depth, PDO::PARAM_STR);
						break;
					case '`WEIGHT`':
						$stmt->bindValue($identifier, $this->weight, PDO::PARAM_STR);
						break;
					case '`OUT_OF_STOCK`':
						$stmt->bindValue($identifier, $this->out_of_stock, PDO::PARAM_INT);
						break;
					case '`QUANTITY_DISCOUNT`':
						$stmt->bindValue($identifier, (int) $this->quantity_discount, PDO::PARAM_INT);
						break;
					case '`CUSTOMIZABLE`':
						$stmt->bindValue($identifier, $this->customizable, PDO::PARAM_INT);
						break;
					case '`UPLOADABLE_FILES`':
						$stmt->bindValue($identifier, $this->uploadable_files, PDO::PARAM_INT);
						break;
					case '`TEXT_FIELDS`':
						$stmt->bindValue($identifier, $this->text_fields, PDO::PARAM_INT);
						break;
					case '`ACTIVE`':
						$stmt->bindValue($identifier, (int) $this->active, PDO::PARAM_INT);
						break;
					case '`AVAILABLE_FOR_ORDER`':
						$stmt->bindValue($identifier, (int) $this->available_for_order, PDO::PARAM_INT);
						break;
					case '`CONDITION`':
						$stmt->bindValue($identifier, $this->condition, PDO::PARAM_STR);
						break;
					case '`SHOW_PRICE`':
						$stmt->bindValue($identifier, (int) $this->show_price, PDO::PARAM_INT);
						break;
					case '`INDEXED`':
						$stmt->bindValue($identifier, (int) $this->indexed, PDO::PARAM_INT);
						break;
					case '`CACHE_IS_PACK`':
						$stmt->bindValue($identifier, (int) $this->cache_is_pack, PDO::PARAM_INT);
						break;
					case '`CACHE_HAS_ATTACHMENTS`':
						$stmt->bindValue($identifier, (int) $this->cache_has_attachments, PDO::PARAM_INT);
						break;
					case '`CACHE_DEFAULT_ATTRIBUTE`':
						$stmt->bindValue($identifier, $this->cache_default_attribute, PDO::PARAM_INT);
						break;
					case '`DATE_ADD`':
						$stmt->bindValue($identifier, $this->date_add, PDO::PARAM_STR);
						break;
					case '`DATE_UPD`':
						$stmt->bindValue($identifier, $this->date_upd, PDO::PARAM_STR);
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
		$this->setIdProduct($pk);

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


			// We call the validate method on the following object(s) if they
			// were passed to this object by their coresponding set
			// method.  This object relates to these object(s) by a
			// foreign key reference.

			if ($this->aManufacturer !== null) {
				if (!$this->aManufacturer->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aManufacturer->getValidationFailures());
				}
			}


			if (($retval = Oops_Db_ProductPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}


				if ($this->collCategoryProducts !== null) {
					foreach ($this->collCategoryProducts as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collFeatureProducts !== null) {
					foreach ($this->collFeatureProducts as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collImages !== null) {
					foreach ($this->collImages as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collProductLangs !== null) {
					foreach ($this->collProductLangs as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->singleProductSale !== null) {
					if (!$this->singleProductSale->validate($columns)) {
						$failureMap = array_merge($failureMap, $this->singleProductSale->getValidationFailures());
					}
				}

				if ($this->collStockMvts !== null) {
					foreach ($this->collStockMvts as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->singleSupplier !== null) {
					if (!$this->singleSupplier->validate($columns)) {
						$failureMap = array_merge($failureMap, $this->singleSupplier->getValidationFailures());
					}
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
		$pos = Oops_Db_ProductPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getIdProduct();
				break;
			case 1:
				return $this->getIdSupplier();
				break;
			case 2:
				return $this->getIdManufacturer();
				break;
			case 3:
				return $this->getIdTaxRulesGroup();
				break;
			case 4:
				return $this->getIdCategoryDefault();
				break;
			case 5:
				return $this->getIdColorDefault();
				break;
			case 6:
				return $this->getOnSale();
				break;
			case 7:
				return $this->getOnlineOnly();
				break;
			case 8:
				return $this->getEan13();
				break;
			case 9:
				return $this->getUpc();
				break;
			case 10:
				return $this->getEcotax();
				break;
			case 11:
				return $this->getQuantity();
				break;
			case 12:
				return $this->getMinimalQuantity();
				break;
			case 13:
				return $this->getPrice();
				break;
			case 14:
				return $this->getWholesalePrice();
				break;
			case 15:
				return $this->getUnity();
				break;
			case 16:
				return $this->getUnitPriceRatio();
				break;
			case 17:
				return $this->getAdditionalShippingCost();
				break;
			case 18:
				return $this->getReference();
				break;
			case 19:
				return $this->getSupplierReference();
				break;
			case 20:
				return $this->getLocation();
				break;
			case 21:
				return $this->getWidth();
				break;
			case 22:
				return $this->getHeight();
				break;
			case 23:
				return $this->getDepth();
				break;
			case 24:
				return $this->getWeight();
				break;
			case 25:
				return $this->getOutOfStock();
				break;
			case 26:
				return $this->getQuantityDiscount();
				break;
			case 27:
				return $this->getCustomizable();
				break;
			case 28:
				return $this->getUploadableFiles();
				break;
			case 29:
				return $this->getTextFields();
				break;
			case 30:
				return $this->getActive();
				break;
			case 31:
				return $this->getAvailableForOrder();
				break;
			case 32:
				return $this->getCondition();
				break;
			case 33:
				return $this->getShowPrice();
				break;
			case 34:
				return $this->getIndexed();
				break;
			case 35:
				return $this->getCacheIsPack();
				break;
			case 36:
				return $this->getCacheHasAttachments();
				break;
			case 37:
				return $this->getCacheDefaultAttribute();
				break;
			case 38:
				return $this->getDateAdd();
				break;
			case 39:
				return $this->getDateUpd();
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
	 * @param     boolean $includeForeignObjects (optional) Whether to include hydrated related objects. Default to FALSE.
	 *
	 * @return    array an associative array containing the field names (as keys) and field values
	 */
	public function toArray($keyType = BasePeer::TYPE_PHPNAME, $includeLazyLoadColumns = true, $alreadyDumpedObjects = array(), $includeForeignObjects = false)
	{
		if (isset($alreadyDumpedObjects['Oops_Db_Product'][$this->getPrimaryKey()])) {
			return '*RECURSION*';
		}
		$alreadyDumpedObjects['Oops_Db_Product'][$this->getPrimaryKey()] = true;
		$keys = Oops_Db_ProductPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getIdProduct(),
			$keys[1] => $this->getIdSupplier(),
			$keys[2] => $this->getIdManufacturer(),
			$keys[3] => $this->getIdTaxRulesGroup(),
			$keys[4] => $this->getIdCategoryDefault(),
			$keys[5] => $this->getIdColorDefault(),
			$keys[6] => $this->getOnSale(),
			$keys[7] => $this->getOnlineOnly(),
			$keys[8] => $this->getEan13(),
			$keys[9] => $this->getUpc(),
			$keys[10] => $this->getEcotax(),
			$keys[11] => $this->getQuantity(),
			$keys[12] => $this->getMinimalQuantity(),
			$keys[13] => $this->getPrice(),
			$keys[14] => $this->getWholesalePrice(),
			$keys[15] => $this->getUnity(),
			$keys[16] => $this->getUnitPriceRatio(),
			$keys[17] => $this->getAdditionalShippingCost(),
			$keys[18] => $this->getReference(),
			$keys[19] => $this->getSupplierReference(),
			$keys[20] => $this->getLocation(),
			$keys[21] => $this->getWidth(),
			$keys[22] => $this->getHeight(),
			$keys[23] => $this->getDepth(),
			$keys[24] => $this->getWeight(),
			$keys[25] => $this->getOutOfStock(),
			$keys[26] => $this->getQuantityDiscount(),
			$keys[27] => $this->getCustomizable(),
			$keys[28] => $this->getUploadableFiles(),
			$keys[29] => $this->getTextFields(),
			$keys[30] => $this->getActive(),
			$keys[31] => $this->getAvailableForOrder(),
			$keys[32] => $this->getCondition(),
			$keys[33] => $this->getShowPrice(),
			$keys[34] => $this->getIndexed(),
			$keys[35] => $this->getCacheIsPack(),
			$keys[36] => $this->getCacheHasAttachments(),
			$keys[37] => $this->getCacheDefaultAttribute(),
			$keys[38] => $this->getDateAdd(),
			$keys[39] => $this->getDateUpd(),
		);
		if ($includeForeignObjects) {
			if (null !== $this->aManufacturer) {
				$result['Manufacturer'] = $this->aManufacturer->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
			}
			if (null !== $this->collCategoryProducts) {
				$result['CategoryProducts'] = $this->collCategoryProducts->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
			}
			if (null !== $this->collFeatureProducts) {
				$result['FeatureProducts'] = $this->collFeatureProducts->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
			}
			if (null !== $this->collImages) {
				$result['Images'] = $this->collImages->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
			}
			if (null !== $this->collProductLangs) {
				$result['ProductLangs'] = $this->collProductLangs->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
			}
			if (null !== $this->singleProductSale) {
				$result['ProductSale'] = $this->singleProductSale->toArray($keyType, $includeLazyLoadColumns, $alreadyDumpedObjects, true);
			}
			if (null !== $this->collStockMvts) {
				$result['StockMvts'] = $this->collStockMvts->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
			}
			if (null !== $this->singleSupplier) {
				$result['Supplier'] = $this->singleSupplier->toArray($keyType, $includeLazyLoadColumns, $alreadyDumpedObjects, true);
			}
		}
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
		$pos = Oops_Db_ProductPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setIdProduct($value);
				break;
			case 1:
				$this->setIdSupplier($value);
				break;
			case 2:
				$this->setIdManufacturer($value);
				break;
			case 3:
				$this->setIdTaxRulesGroup($value);
				break;
			case 4:
				$this->setIdCategoryDefault($value);
				break;
			case 5:
				$this->setIdColorDefault($value);
				break;
			case 6:
				$this->setOnSale($value);
				break;
			case 7:
				$this->setOnlineOnly($value);
				break;
			case 8:
				$this->setEan13($value);
				break;
			case 9:
				$this->setUpc($value);
				break;
			case 10:
				$this->setEcotax($value);
				break;
			case 11:
				$this->setQuantity($value);
				break;
			case 12:
				$this->setMinimalQuantity($value);
				break;
			case 13:
				$this->setPrice($value);
				break;
			case 14:
				$this->setWholesalePrice($value);
				break;
			case 15:
				$this->setUnity($value);
				break;
			case 16:
				$this->setUnitPriceRatio($value);
				break;
			case 17:
				$this->setAdditionalShippingCost($value);
				break;
			case 18:
				$this->setReference($value);
				break;
			case 19:
				$this->setSupplierReference($value);
				break;
			case 20:
				$this->setLocation($value);
				break;
			case 21:
				$this->setWidth($value);
				break;
			case 22:
				$this->setHeight($value);
				break;
			case 23:
				$this->setDepth($value);
				break;
			case 24:
				$this->setWeight($value);
				break;
			case 25:
				$this->setOutOfStock($value);
				break;
			case 26:
				$this->setQuantityDiscount($value);
				break;
			case 27:
				$this->setCustomizable($value);
				break;
			case 28:
				$this->setUploadableFiles($value);
				break;
			case 29:
				$this->setTextFields($value);
				break;
			case 30:
				$this->setActive($value);
				break;
			case 31:
				$this->setAvailableForOrder($value);
				break;
			case 32:
				$this->setCondition($value);
				break;
			case 33:
				$this->setShowPrice($value);
				break;
			case 34:
				$this->setIndexed($value);
				break;
			case 35:
				$this->setCacheIsPack($value);
				break;
			case 36:
				$this->setCacheHasAttachments($value);
				break;
			case 37:
				$this->setCacheDefaultAttribute($value);
				break;
			case 38:
				$this->setDateAdd($value);
				break;
			case 39:
				$this->setDateUpd($value);
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
		$keys = Oops_Db_ProductPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setIdProduct($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setIdSupplier($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setIdManufacturer($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setIdTaxRulesGroup($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setIdCategoryDefault($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setIdColorDefault($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setOnSale($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setOnlineOnly($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setEan13($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setUpc($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setEcotax($arr[$keys[10]]);
		if (array_key_exists($keys[11], $arr)) $this->setQuantity($arr[$keys[11]]);
		if (array_key_exists($keys[12], $arr)) $this->setMinimalQuantity($arr[$keys[12]]);
		if (array_key_exists($keys[13], $arr)) $this->setPrice($arr[$keys[13]]);
		if (array_key_exists($keys[14], $arr)) $this->setWholesalePrice($arr[$keys[14]]);
		if (array_key_exists($keys[15], $arr)) $this->setUnity($arr[$keys[15]]);
		if (array_key_exists($keys[16], $arr)) $this->setUnitPriceRatio($arr[$keys[16]]);
		if (array_key_exists($keys[17], $arr)) $this->setAdditionalShippingCost($arr[$keys[17]]);
		if (array_key_exists($keys[18], $arr)) $this->setReference($arr[$keys[18]]);
		if (array_key_exists($keys[19], $arr)) $this->setSupplierReference($arr[$keys[19]]);
		if (array_key_exists($keys[20], $arr)) $this->setLocation($arr[$keys[20]]);
		if (array_key_exists($keys[21], $arr)) $this->setWidth($arr[$keys[21]]);
		if (array_key_exists($keys[22], $arr)) $this->setHeight($arr[$keys[22]]);
		if (array_key_exists($keys[23], $arr)) $this->setDepth($arr[$keys[23]]);
		if (array_key_exists($keys[24], $arr)) $this->setWeight($arr[$keys[24]]);
		if (array_key_exists($keys[25], $arr)) $this->setOutOfStock($arr[$keys[25]]);
		if (array_key_exists($keys[26], $arr)) $this->setQuantityDiscount($arr[$keys[26]]);
		if (array_key_exists($keys[27], $arr)) $this->setCustomizable($arr[$keys[27]]);
		if (array_key_exists($keys[28], $arr)) $this->setUploadableFiles($arr[$keys[28]]);
		if (array_key_exists($keys[29], $arr)) $this->setTextFields($arr[$keys[29]]);
		if (array_key_exists($keys[30], $arr)) $this->setActive($arr[$keys[30]]);
		if (array_key_exists($keys[31], $arr)) $this->setAvailableForOrder($arr[$keys[31]]);
		if (array_key_exists($keys[32], $arr)) $this->setCondition($arr[$keys[32]]);
		if (array_key_exists($keys[33], $arr)) $this->setShowPrice($arr[$keys[33]]);
		if (array_key_exists($keys[34], $arr)) $this->setIndexed($arr[$keys[34]]);
		if (array_key_exists($keys[35], $arr)) $this->setCacheIsPack($arr[$keys[35]]);
		if (array_key_exists($keys[36], $arr)) $this->setCacheHasAttachments($arr[$keys[36]]);
		if (array_key_exists($keys[37], $arr)) $this->setCacheDefaultAttribute($arr[$keys[37]]);
		if (array_key_exists($keys[38], $arr)) $this->setDateAdd($arr[$keys[38]]);
		if (array_key_exists($keys[39], $arr)) $this->setDateUpd($arr[$keys[39]]);
	}

	/**
	 * Build a Criteria object containing the values of all modified columns in this object.
	 *
	 * @return     Criteria The Criteria object containing all modified values.
	 */
	public function buildCriteria()
	{
		$criteria = new Criteria(Oops_Db_ProductPeer::DATABASE_NAME);

		if ($this->isColumnModified(Oops_Db_ProductPeer::ID_PRODUCT)) $criteria->add(Oops_Db_ProductPeer::ID_PRODUCT, $this->id_product);
		if ($this->isColumnModified(Oops_Db_ProductPeer::ID_SUPPLIER)) $criteria->add(Oops_Db_ProductPeer::ID_SUPPLIER, $this->id_supplier);
		if ($this->isColumnModified(Oops_Db_ProductPeer::ID_MANUFACTURER)) $criteria->add(Oops_Db_ProductPeer::ID_MANUFACTURER, $this->id_manufacturer);
		if ($this->isColumnModified(Oops_Db_ProductPeer::ID_TAX_RULES_GROUP)) $criteria->add(Oops_Db_ProductPeer::ID_TAX_RULES_GROUP, $this->id_tax_rules_group);
		if ($this->isColumnModified(Oops_Db_ProductPeer::ID_CATEGORY_DEFAULT)) $criteria->add(Oops_Db_ProductPeer::ID_CATEGORY_DEFAULT, $this->id_category_default);
		if ($this->isColumnModified(Oops_Db_ProductPeer::ID_COLOR_DEFAULT)) $criteria->add(Oops_Db_ProductPeer::ID_COLOR_DEFAULT, $this->id_color_default);
		if ($this->isColumnModified(Oops_Db_ProductPeer::ON_SALE)) $criteria->add(Oops_Db_ProductPeer::ON_SALE, $this->on_sale);
		if ($this->isColumnModified(Oops_Db_ProductPeer::ONLINE_ONLY)) $criteria->add(Oops_Db_ProductPeer::ONLINE_ONLY, $this->online_only);
		if ($this->isColumnModified(Oops_Db_ProductPeer::EAN13)) $criteria->add(Oops_Db_ProductPeer::EAN13, $this->ean13);
		if ($this->isColumnModified(Oops_Db_ProductPeer::UPC)) $criteria->add(Oops_Db_ProductPeer::UPC, $this->upc);
		if ($this->isColumnModified(Oops_Db_ProductPeer::ECOTAX)) $criteria->add(Oops_Db_ProductPeer::ECOTAX, $this->ecotax);
		if ($this->isColumnModified(Oops_Db_ProductPeer::QUANTITY)) $criteria->add(Oops_Db_ProductPeer::QUANTITY, $this->quantity);
		if ($this->isColumnModified(Oops_Db_ProductPeer::MINIMAL_QUANTITY)) $criteria->add(Oops_Db_ProductPeer::MINIMAL_QUANTITY, $this->minimal_quantity);
		if ($this->isColumnModified(Oops_Db_ProductPeer::PRICE)) $criteria->add(Oops_Db_ProductPeer::PRICE, $this->price);
		if ($this->isColumnModified(Oops_Db_ProductPeer::WHOLESALE_PRICE)) $criteria->add(Oops_Db_ProductPeer::WHOLESALE_PRICE, $this->wholesale_price);
		if ($this->isColumnModified(Oops_Db_ProductPeer::UNITY)) $criteria->add(Oops_Db_ProductPeer::UNITY, $this->unity);
		if ($this->isColumnModified(Oops_Db_ProductPeer::UNIT_PRICE_RATIO)) $criteria->add(Oops_Db_ProductPeer::UNIT_PRICE_RATIO, $this->unit_price_ratio);
		if ($this->isColumnModified(Oops_Db_ProductPeer::ADDITIONAL_SHIPPING_COST)) $criteria->add(Oops_Db_ProductPeer::ADDITIONAL_SHIPPING_COST, $this->additional_shipping_cost);
		if ($this->isColumnModified(Oops_Db_ProductPeer::REFERENCE)) $criteria->add(Oops_Db_ProductPeer::REFERENCE, $this->reference);
		if ($this->isColumnModified(Oops_Db_ProductPeer::SUPPLIER_REFERENCE)) $criteria->add(Oops_Db_ProductPeer::SUPPLIER_REFERENCE, $this->supplier_reference);
		if ($this->isColumnModified(Oops_Db_ProductPeer::LOCATION)) $criteria->add(Oops_Db_ProductPeer::LOCATION, $this->location);
		if ($this->isColumnModified(Oops_Db_ProductPeer::WIDTH)) $criteria->add(Oops_Db_ProductPeer::WIDTH, $this->width);
		if ($this->isColumnModified(Oops_Db_ProductPeer::HEIGHT)) $criteria->add(Oops_Db_ProductPeer::HEIGHT, $this->height);
		if ($this->isColumnModified(Oops_Db_ProductPeer::DEPTH)) $criteria->add(Oops_Db_ProductPeer::DEPTH, $this->depth);
		if ($this->isColumnModified(Oops_Db_ProductPeer::WEIGHT)) $criteria->add(Oops_Db_ProductPeer::WEIGHT, $this->weight);
		if ($this->isColumnModified(Oops_Db_ProductPeer::OUT_OF_STOCK)) $criteria->add(Oops_Db_ProductPeer::OUT_OF_STOCK, $this->out_of_stock);
		if ($this->isColumnModified(Oops_Db_ProductPeer::QUANTITY_DISCOUNT)) $criteria->add(Oops_Db_ProductPeer::QUANTITY_DISCOUNT, $this->quantity_discount);
		if ($this->isColumnModified(Oops_Db_ProductPeer::CUSTOMIZABLE)) $criteria->add(Oops_Db_ProductPeer::CUSTOMIZABLE, $this->customizable);
		if ($this->isColumnModified(Oops_Db_ProductPeer::UPLOADABLE_FILES)) $criteria->add(Oops_Db_ProductPeer::UPLOADABLE_FILES, $this->uploadable_files);
		if ($this->isColumnModified(Oops_Db_ProductPeer::TEXT_FIELDS)) $criteria->add(Oops_Db_ProductPeer::TEXT_FIELDS, $this->text_fields);
		if ($this->isColumnModified(Oops_Db_ProductPeer::ACTIVE)) $criteria->add(Oops_Db_ProductPeer::ACTIVE, $this->active);
		if ($this->isColumnModified(Oops_Db_ProductPeer::AVAILABLE_FOR_ORDER)) $criteria->add(Oops_Db_ProductPeer::AVAILABLE_FOR_ORDER, $this->available_for_order);
		if ($this->isColumnModified(Oops_Db_ProductPeer::CONDITION)) $criteria->add(Oops_Db_ProductPeer::CONDITION, $this->condition);
		if ($this->isColumnModified(Oops_Db_ProductPeer::SHOW_PRICE)) $criteria->add(Oops_Db_ProductPeer::SHOW_PRICE, $this->show_price);
		if ($this->isColumnModified(Oops_Db_ProductPeer::INDEXED)) $criteria->add(Oops_Db_ProductPeer::INDEXED, $this->indexed);
		if ($this->isColumnModified(Oops_Db_ProductPeer::CACHE_IS_PACK)) $criteria->add(Oops_Db_ProductPeer::CACHE_IS_PACK, $this->cache_is_pack);
		if ($this->isColumnModified(Oops_Db_ProductPeer::CACHE_HAS_ATTACHMENTS)) $criteria->add(Oops_Db_ProductPeer::CACHE_HAS_ATTACHMENTS, $this->cache_has_attachments);
		if ($this->isColumnModified(Oops_Db_ProductPeer::CACHE_DEFAULT_ATTRIBUTE)) $criteria->add(Oops_Db_ProductPeer::CACHE_DEFAULT_ATTRIBUTE, $this->cache_default_attribute);
		if ($this->isColumnModified(Oops_Db_ProductPeer::DATE_ADD)) $criteria->add(Oops_Db_ProductPeer::DATE_ADD, $this->date_add);
		if ($this->isColumnModified(Oops_Db_ProductPeer::DATE_UPD)) $criteria->add(Oops_Db_ProductPeer::DATE_UPD, $this->date_upd);

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
		$criteria = new Criteria(Oops_Db_ProductPeer::DATABASE_NAME);
		$criteria->add(Oops_Db_ProductPeer::ID_PRODUCT, $this->id_product);

		return $criteria;
	}

	/**
	 * Returns the primary key for this object (row).
	 * @return     int
	 */
	public function getPrimaryKey()
	{
		return $this->getIdProduct();
	}

	/**
	 * Generic method to set the primary key (id_product column).
	 *
	 * @param      int $key Primary key.
	 * @return     void
	 */
	public function setPrimaryKey($key)
	{
		$this->setIdProduct($key);
	}

	/**
	 * Returns true if the primary key for this object is null.
	 * @return     boolean
	 */
	public function isPrimaryKeyNull()
	{
		return null === $this->getIdProduct();
	}

	/**
	 * Sets contents of passed object to values from current object.
	 *
	 * If desired, this method can also make copies of all associated (fkey referrers)
	 * objects.
	 *
	 * @param      object $copyObj An object of Oops_Db_Product (or compatible) type.
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
	 * @throws     PropelException
	 */
	public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
	{
		$copyObj->setIdSupplier($this->getIdSupplier());
		$copyObj->setIdManufacturer($this->getIdManufacturer());
		$copyObj->setIdTaxRulesGroup($this->getIdTaxRulesGroup());
		$copyObj->setIdCategoryDefault($this->getIdCategoryDefault());
		$copyObj->setIdColorDefault($this->getIdColorDefault());
		$copyObj->setOnSale($this->getOnSale());
		$copyObj->setOnlineOnly($this->getOnlineOnly());
		$copyObj->setEan13($this->getEan13());
		$copyObj->setUpc($this->getUpc());
		$copyObj->setEcotax($this->getEcotax());
		$copyObj->setQuantity($this->getQuantity());
		$copyObj->setMinimalQuantity($this->getMinimalQuantity());
		$copyObj->setPrice($this->getPrice());
		$copyObj->setWholesalePrice($this->getWholesalePrice());
		$copyObj->setUnity($this->getUnity());
		$copyObj->setUnitPriceRatio($this->getUnitPriceRatio());
		$copyObj->setAdditionalShippingCost($this->getAdditionalShippingCost());
		$copyObj->setReference($this->getReference());
		$copyObj->setSupplierReference($this->getSupplierReference());
		$copyObj->setLocation($this->getLocation());
		$copyObj->setWidth($this->getWidth());
		$copyObj->setHeight($this->getHeight());
		$copyObj->setDepth($this->getDepth());
		$copyObj->setWeight($this->getWeight());
		$copyObj->setOutOfStock($this->getOutOfStock());
		$copyObj->setQuantityDiscount($this->getQuantityDiscount());
		$copyObj->setCustomizable($this->getCustomizable());
		$copyObj->setUploadableFiles($this->getUploadableFiles());
		$copyObj->setTextFields($this->getTextFields());
		$copyObj->setActive($this->getActive());
		$copyObj->setAvailableForOrder($this->getAvailableForOrder());
		$copyObj->setCondition($this->getCondition());
		$copyObj->setShowPrice($this->getShowPrice());
		$copyObj->setIndexed($this->getIndexed());
		$copyObj->setCacheIsPack($this->getCacheIsPack());
		$copyObj->setCacheHasAttachments($this->getCacheHasAttachments());
		$copyObj->setCacheDefaultAttribute($this->getCacheDefaultAttribute());
		$copyObj->setDateAdd($this->getDateAdd());
		$copyObj->setDateUpd($this->getDateUpd());

		if ($deepCopy) {
			// important: temporarily setNew(false) because this affects the behavior of
			// the getter/setter methods for fkey referrer objects.
			$copyObj->setNew(false);

			foreach ($this->getCategoryProducts() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addCategoryProduct($relObj->copy($deepCopy));
				}
			}

			foreach ($this->getFeatureProducts() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addFeatureProduct($relObj->copy($deepCopy));
				}
			}

			foreach ($this->getImages() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addImage($relObj->copy($deepCopy));
				}
			}

			foreach ($this->getProductLangs() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addProductLang($relObj->copy($deepCopy));
				}
			}

			$relObj = $this->getProductSale();
			if ($relObj) {
				$copyObj->setProductSale($relObj->copy($deepCopy));
			}

			foreach ($this->getStockMvts() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addStockMvt($relObj->copy($deepCopy));
				}
			}

			$relObj = $this->getSupplier();
			if ($relObj) {
				$copyObj->setSupplier($relObj->copy($deepCopy));
			}

		} // if ($deepCopy)

		if ($makeNew) {
			$copyObj->setNew(true);
			$copyObj->setIdProduct(NULL); // this is a auto-increment column, so set to default value
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
	 * @return     Oops_Db_Product Clone of current object.
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
	 * @return     Oops_Db_ProductPeer
	 */
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new Oops_Db_ProductPeer();
		}
		return self::$peer;
	}

	/**
	 * Declares an association between this object and a Oops_Db_Manufacturer object.
	 *
	 * @param      Oops_Db_Manufacturer $v
	 * @return     Oops_Db_Product The current object (for fluent API support)
	 * @throws     PropelException
	 */
	public function setManufacturer(Oops_Db_Manufacturer $v = null)
	{
		if ($v === null) {
			$this->setIdManufacturer(NULL);
		} else {
			$this->setIdManufacturer($v->getIdManufacturer());
		}

		$this->aManufacturer = $v;

		// Add binding for other direction of this n:n relationship.
		// If this object has already been added to the Oops_Db_Manufacturer object, it will not be re-added.
		if ($v !== null) {
			$v->addProduct($this);
		}

		return $this;
	}


	/**
	 * Get the associated Oops_Db_Manufacturer object
	 *
	 * @param      PropelPDO Optional Connection object.
	 * @return     Oops_Db_Manufacturer The associated Oops_Db_Manufacturer object.
	 * @throws     PropelException
	 */
	public function getManufacturer(PropelPDO $con = null)
	{
		if ($this->aManufacturer === null && ($this->id_manufacturer !== null)) {
			$this->aManufacturer = Oops_Db_ManufacturerQuery::create()->findPk($this->id_manufacturer, $con);
			/* The following can be used additionally to
				guarantee the related object contains a reference
				to this object.  This level of coupling may, however, be
				undesirable since it could result in an only partially populated collection
				in the referenced object.
				$this->aManufacturer->addProducts($this);
			 */
		}
		return $this->aManufacturer;
	}


	/**
	 * Initializes a collection based on the name of a relation.
	 * Avoids crafting an 'init[$relationName]s' method name
	 * that wouldn't work when StandardEnglishPluralizer is used.
	 *
	 * @param      string $relationName The name of the relation to initialize
	 * @return     void
	 */
	public function initRelation($relationName)
	{
		if ('CategoryProduct' == $relationName) {
			return $this->initCategoryProducts();
		}
		if ('FeatureProduct' == $relationName) {
			return $this->initFeatureProducts();
		}
		if ('Image' == $relationName) {
			return $this->initImages();
		}
		if ('ProductLang' == $relationName) {
			return $this->initProductLangs();
		}
		if ('StockMvt' == $relationName) {
			return $this->initStockMvts();
		}
	}

	/**
	 * Clears out the collCategoryProducts collection
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addCategoryProducts()
	 */
	public function clearCategoryProducts()
	{
		$this->collCategoryProducts = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collCategoryProducts collection.
	 *
	 * By default this just sets the collCategoryProducts collection to an empty array (like clearcollCategoryProducts());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @param      boolean $overrideExisting If set to true, the method call initializes
	 *                                        the collection even if it is not empty
	 *
	 * @return     void
	 */
	public function initCategoryProducts($overrideExisting = true)
	{
		if (null !== $this->collCategoryProducts && !$overrideExisting) {
			return;
		}
		$this->collCategoryProducts = new PropelObjectCollection();
		$this->collCategoryProducts->setModel('Oops_Db_CategoryProduct');
	}

	/**
	 * Gets an array of Oops_Db_CategoryProduct objects which contain a foreign key that references this object.
	 *
	 * If the $criteria is not null, it is used to always fetch the results from the database.
	 * Otherwise the results are fetched from the database the first time, then cached.
	 * Next time the same method is called without $criteria, the cached collection is returned.
	 * If this Oops_Db_Product is new, it will return
	 * an empty collection or the current collection; the criteria is ignored on a new object.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @return     PropelCollection|array Oops_Db_CategoryProduct[] List of Oops_Db_CategoryProduct objects
	 * @throws     PropelException
	 */
	public function getCategoryProducts($criteria = null, PropelPDO $con = null)
	{
		if(null === $this->collCategoryProducts || null !== $criteria) {
			if ($this->isNew() && null === $this->collCategoryProducts) {
				// return empty collection
				$this->initCategoryProducts();
			} else {
				$collCategoryProducts = Oops_Db_CategoryProductQuery::create(null, $criteria)
					->filterByProduct($this)
					->find($con);
				if (null !== $criteria) {
					return $collCategoryProducts;
				}
				$this->collCategoryProducts = $collCategoryProducts;
			}
		}
		return $this->collCategoryProducts;
	}

	/**
	 * Sets a collection of CategoryProduct objects related by a one-to-many relationship
	 * to the current object.
	 * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
	 * and new objects from the given Propel collection.
	 *
	 * @param      PropelCollection $categoryProducts A Propel collection.
	 * @param      PropelPDO $con Optional connection object
	 */
	public function setCategoryProducts(PropelCollection $categoryProducts, PropelPDO $con = null)
	{
		$this->categoryProductsScheduledForDeletion = $this->getCategoryProducts(new Criteria(), $con)->diff($categoryProducts);

		foreach ($categoryProducts as $categoryProduct) {
			// Fix issue with collection modified by reference
			if ($categoryProduct->isNew()) {
				$categoryProduct->setProduct($this);
			}
			$this->addCategoryProduct($categoryProduct);
		}

		$this->collCategoryProducts = $categoryProducts;
	}

	/**
	 * Returns the number of related Oops_Db_CategoryProduct objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related Oops_Db_CategoryProduct objects.
	 * @throws     PropelException
	 */
	public function countCategoryProducts(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if(null === $this->collCategoryProducts || null !== $criteria) {
			if ($this->isNew() && null === $this->collCategoryProducts) {
				return 0;
			} else {
				$query = Oops_Db_CategoryProductQuery::create(null, $criteria);
				if($distinct) {
					$query->distinct();
				}
				return $query
					->filterByProduct($this)
					->count($con);
			}
		} else {
			return count($this->collCategoryProducts);
		}
	}

	/**
	 * Method called to associate a Oops_Db_CategoryProduct object to this object
	 * through the Oops_Db_CategoryProduct foreign key attribute.
	 *
	 * @param      Oops_Db_CategoryProduct $l Oops_Db_CategoryProduct
	 * @return     Oops_Db_Product The current object (for fluent API support)
	 */
	public function addCategoryProduct(Oops_Db_CategoryProduct $l)
	{
		if ($this->collCategoryProducts === null) {
			$this->initCategoryProducts();
		}
		if (!$this->collCategoryProducts->contains($l)) { // only add it if the **same** object is not already associated
			$this->doAddCategoryProduct($l);
		}

		return $this;
	}

	/**
	 * @param	CategoryProduct $categoryProduct The categoryProduct object to add.
	 */
	protected function doAddCategoryProduct($categoryProduct)
	{
		$this->collCategoryProducts[]= $categoryProduct;
		$categoryProduct->setProduct($this);
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this Product is new, it will return
	 * an empty collection; or if this Product has previously
	 * been saved, it will retrieve related CategoryProducts from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in Product.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array Oops_Db_CategoryProduct[] List of Oops_Db_CategoryProduct objects
	 */
	public function getCategoryProductsJoinCategory($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = Oops_Db_CategoryProductQuery::create(null, $criteria);
		$query->joinWith('Category', $join_behavior);

		return $this->getCategoryProducts($query, $con);
	}

	/**
	 * Clears out the collFeatureProducts collection
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addFeatureProducts()
	 */
	public function clearFeatureProducts()
	{
		$this->collFeatureProducts = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collFeatureProducts collection.
	 *
	 * By default this just sets the collFeatureProducts collection to an empty array (like clearcollFeatureProducts());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @param      boolean $overrideExisting If set to true, the method call initializes
	 *                                        the collection even if it is not empty
	 *
	 * @return     void
	 */
	public function initFeatureProducts($overrideExisting = true)
	{
		if (null !== $this->collFeatureProducts && !$overrideExisting) {
			return;
		}
		$this->collFeatureProducts = new PropelObjectCollection();
		$this->collFeatureProducts->setModel('Oops_Db_FeatureProduct');
	}

	/**
	 * Gets an array of Oops_Db_FeatureProduct objects which contain a foreign key that references this object.
	 *
	 * If the $criteria is not null, it is used to always fetch the results from the database.
	 * Otherwise the results are fetched from the database the first time, then cached.
	 * Next time the same method is called without $criteria, the cached collection is returned.
	 * If this Oops_Db_Product is new, it will return
	 * an empty collection or the current collection; the criteria is ignored on a new object.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @return     PropelCollection|array Oops_Db_FeatureProduct[] List of Oops_Db_FeatureProduct objects
	 * @throws     PropelException
	 */
	public function getFeatureProducts($criteria = null, PropelPDO $con = null)
	{
		if(null === $this->collFeatureProducts || null !== $criteria) {
			if ($this->isNew() && null === $this->collFeatureProducts) {
				// return empty collection
				$this->initFeatureProducts();
			} else {
				$collFeatureProducts = Oops_Db_FeatureProductQuery::create(null, $criteria)
					->filterByProduct($this)
					->find($con);
				if (null !== $criteria) {
					return $collFeatureProducts;
				}
				$this->collFeatureProducts = $collFeatureProducts;
			}
		}
		return $this->collFeatureProducts;
	}

	/**
	 * Sets a collection of FeatureProduct objects related by a one-to-many relationship
	 * to the current object.
	 * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
	 * and new objects from the given Propel collection.
	 *
	 * @param      PropelCollection $featureProducts A Propel collection.
	 * @param      PropelPDO $con Optional connection object
	 */
	public function setFeatureProducts(PropelCollection $featureProducts, PropelPDO $con = null)
	{
		$this->featureProductsScheduledForDeletion = $this->getFeatureProducts(new Criteria(), $con)->diff($featureProducts);

		foreach ($featureProducts as $featureProduct) {
			// Fix issue with collection modified by reference
			if ($featureProduct->isNew()) {
				$featureProduct->setProduct($this);
			}
			$this->addFeatureProduct($featureProduct);
		}

		$this->collFeatureProducts = $featureProducts;
	}

	/**
	 * Returns the number of related Oops_Db_FeatureProduct objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related Oops_Db_FeatureProduct objects.
	 * @throws     PropelException
	 */
	public function countFeatureProducts(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if(null === $this->collFeatureProducts || null !== $criteria) {
			if ($this->isNew() && null === $this->collFeatureProducts) {
				return 0;
			} else {
				$query = Oops_Db_FeatureProductQuery::create(null, $criteria);
				if($distinct) {
					$query->distinct();
				}
				return $query
					->filterByProduct($this)
					->count($con);
			}
		} else {
			return count($this->collFeatureProducts);
		}
	}

	/**
	 * Method called to associate a Oops_Db_FeatureProduct object to this object
	 * through the Oops_Db_FeatureProduct foreign key attribute.
	 *
	 * @param      Oops_Db_FeatureProduct $l Oops_Db_FeatureProduct
	 * @return     Oops_Db_Product The current object (for fluent API support)
	 */
	public function addFeatureProduct(Oops_Db_FeatureProduct $l)
	{
		if ($this->collFeatureProducts === null) {
			$this->initFeatureProducts();
		}
		if (!$this->collFeatureProducts->contains($l)) { // only add it if the **same** object is not already associated
			$this->doAddFeatureProduct($l);
		}

		return $this;
	}

	/**
	 * @param	FeatureProduct $featureProduct The featureProduct object to add.
	 */
	protected function doAddFeatureProduct($featureProduct)
	{
		$this->collFeatureProducts[]= $featureProduct;
		$featureProduct->setProduct($this);
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this Product is new, it will return
	 * an empty collection; or if this Product has previously
	 * been saved, it will retrieve related FeatureProducts from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in Product.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array Oops_Db_FeatureProduct[] List of Oops_Db_FeatureProduct objects
	 */
	public function getFeatureProductsJoinFeature($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = Oops_Db_FeatureProductQuery::create(null, $criteria);
		$query->joinWith('Feature', $join_behavior);

		return $this->getFeatureProducts($query, $con);
	}

	/**
	 * Clears out the collImages collection
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addImages()
	 */
	public function clearImages()
	{
		$this->collImages = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collImages collection.
	 *
	 * By default this just sets the collImages collection to an empty array (like clearcollImages());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @param      boolean $overrideExisting If set to true, the method call initializes
	 *                                        the collection even if it is not empty
	 *
	 * @return     void
	 */
	public function initImages($overrideExisting = true)
	{
		if (null !== $this->collImages && !$overrideExisting) {
			return;
		}
		$this->collImages = new PropelObjectCollection();
		$this->collImages->setModel('Oops_Db_Image');
	}

	/**
	 * Gets an array of Oops_Db_Image objects which contain a foreign key that references this object.
	 *
	 * If the $criteria is not null, it is used to always fetch the results from the database.
	 * Otherwise the results are fetched from the database the first time, then cached.
	 * Next time the same method is called without $criteria, the cached collection is returned.
	 * If this Oops_Db_Product is new, it will return
	 * an empty collection or the current collection; the criteria is ignored on a new object.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @return     PropelCollection|array Oops_Db_Image[] List of Oops_Db_Image objects
	 * @throws     PropelException
	 */
	public function getImages($criteria = null, PropelPDO $con = null)
	{
		if(null === $this->collImages || null !== $criteria) {
			if ($this->isNew() && null === $this->collImages) {
				// return empty collection
				$this->initImages();
			} else {
				$collImages = Oops_Db_ImageQuery::create(null, $criteria)
					->filterByProduct($this)
					->find($con);
				if (null !== $criteria) {
					return $collImages;
				}
				$this->collImages = $collImages;
			}
		}
		return $this->collImages;
	}

	/**
	 * Sets a collection of Image objects related by a one-to-many relationship
	 * to the current object.
	 * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
	 * and new objects from the given Propel collection.
	 *
	 * @param      PropelCollection $images A Propel collection.
	 * @param      PropelPDO $con Optional connection object
	 */
	public function setImages(PropelCollection $images, PropelPDO $con = null)
	{
		$this->imagesScheduledForDeletion = $this->getImages(new Criteria(), $con)->diff($images);

		foreach ($images as $image) {
			// Fix issue with collection modified by reference
			if ($image->isNew()) {
				$image->setProduct($this);
			}
			$this->addImage($image);
		}

		$this->collImages = $images;
	}

	/**
	 * Returns the number of related Oops_Db_Image objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related Oops_Db_Image objects.
	 * @throws     PropelException
	 */
	public function countImages(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if(null === $this->collImages || null !== $criteria) {
			if ($this->isNew() && null === $this->collImages) {
				return 0;
			} else {
				$query = Oops_Db_ImageQuery::create(null, $criteria);
				if($distinct) {
					$query->distinct();
				}
				return $query
					->filterByProduct($this)
					->count($con);
			}
		} else {
			return count($this->collImages);
		}
	}

	/**
	 * Method called to associate a Oops_Db_Image object to this object
	 * through the Oops_Db_Image foreign key attribute.
	 *
	 * @param      Oops_Db_Image $l Oops_Db_Image
	 * @return     Oops_Db_Product The current object (for fluent API support)
	 */
	public function addImage(Oops_Db_Image $l)
	{
		if ($this->collImages === null) {
			$this->initImages();
		}
		if (!$this->collImages->contains($l)) { // only add it if the **same** object is not already associated
			$this->doAddImage($l);
		}

		return $this;
	}

	/**
	 * @param	Image $image The image object to add.
	 */
	protected function doAddImage($image)
	{
		$this->collImages[]= $image;
		$image->setProduct($this);
	}

	/**
	 * Clears out the collProductLangs collection
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addProductLangs()
	 */
	public function clearProductLangs()
	{
		$this->collProductLangs = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collProductLangs collection.
	 *
	 * By default this just sets the collProductLangs collection to an empty array (like clearcollProductLangs());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @param      boolean $overrideExisting If set to true, the method call initializes
	 *                                        the collection even if it is not empty
	 *
	 * @return     void
	 */
	public function initProductLangs($overrideExisting = true)
	{
		if (null !== $this->collProductLangs && !$overrideExisting) {
			return;
		}
		$this->collProductLangs = new PropelObjectCollection();
		$this->collProductLangs->setModel('Oops_Db_ProductLang');
	}

	/**
	 * Gets an array of Oops_Db_ProductLang objects which contain a foreign key that references this object.
	 *
	 * If the $criteria is not null, it is used to always fetch the results from the database.
	 * Otherwise the results are fetched from the database the first time, then cached.
	 * Next time the same method is called without $criteria, the cached collection is returned.
	 * If this Oops_Db_Product is new, it will return
	 * an empty collection or the current collection; the criteria is ignored on a new object.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @return     PropelCollection|array Oops_Db_ProductLang[] List of Oops_Db_ProductLang objects
	 * @throws     PropelException
	 */
	public function getProductLangs($criteria = null, PropelPDO $con = null)
	{
		if(null === $this->collProductLangs || null !== $criteria) {
			if ($this->isNew() && null === $this->collProductLangs) {
				// return empty collection
				$this->initProductLangs();
			} else {
				$collProductLangs = Oops_Db_ProductLangQuery::create(null, $criteria)
					->filterByProduct($this)
					->find($con);
				if (null !== $criteria) {
					return $collProductLangs;
				}
				$this->collProductLangs = $collProductLangs;
			}
		}
		return $this->collProductLangs;
	}

	/**
	 * Sets a collection of ProductLang objects related by a one-to-many relationship
	 * to the current object.
	 * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
	 * and new objects from the given Propel collection.
	 *
	 * @param      PropelCollection $productLangs A Propel collection.
	 * @param      PropelPDO $con Optional connection object
	 */
	public function setProductLangs(PropelCollection $productLangs, PropelPDO $con = null)
	{
		$this->productLangsScheduledForDeletion = $this->getProductLangs(new Criteria(), $con)->diff($productLangs);

		foreach ($productLangs as $productLang) {
			// Fix issue with collection modified by reference
			if ($productLang->isNew()) {
				$productLang->setProduct($this);
			}
			$this->addProductLang($productLang);
		}

		$this->collProductLangs = $productLangs;
	}

	/**
	 * Returns the number of related Oops_Db_ProductLang objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related Oops_Db_ProductLang objects.
	 * @throws     PropelException
	 */
	public function countProductLangs(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if(null === $this->collProductLangs || null !== $criteria) {
			if ($this->isNew() && null === $this->collProductLangs) {
				return 0;
			} else {
				$query = Oops_Db_ProductLangQuery::create(null, $criteria);
				if($distinct) {
					$query->distinct();
				}
				return $query
					->filterByProduct($this)
					->count($con);
			}
		} else {
			return count($this->collProductLangs);
		}
	}

	/**
	 * Method called to associate a Oops_Db_ProductLang object to this object
	 * through the Oops_Db_ProductLang foreign key attribute.
	 *
	 * @param      Oops_Db_ProductLang $l Oops_Db_ProductLang
	 * @return     Oops_Db_Product The current object (for fluent API support)
	 */
	public function addProductLang(Oops_Db_ProductLang $l)
	{
		if ($this->collProductLangs === null) {
			$this->initProductLangs();
		}
		if (!$this->collProductLangs->contains($l)) { // only add it if the **same** object is not already associated
			$this->doAddProductLang($l);
		}

		return $this;
	}

	/**
	 * @param	ProductLang $productLang The productLang object to add.
	 */
	protected function doAddProductLang($productLang)
	{
		$this->collProductLangs[]= $productLang;
		$productLang->setProduct($this);
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this Product is new, it will return
	 * an empty collection; or if this Product has previously
	 * been saved, it will retrieve related ProductLangs from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in Product.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array Oops_Db_ProductLang[] List of Oops_Db_ProductLang objects
	 */
	public function getProductLangsJoinLang($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = Oops_Db_ProductLangQuery::create(null, $criteria);
		$query->joinWith('Lang', $join_behavior);

		return $this->getProductLangs($query, $con);
	}

	/**
	 * Gets a single Oops_Db_ProductSale object, which is related to this object by a one-to-one relationship.
	 *
	 * @param      PropelPDO $con optional connection object
	 * @return     Oops_Db_ProductSale
	 * @throws     PropelException
	 */
	public function getProductSale(PropelPDO $con = null)
	{

		if ($this->singleProductSale === null && !$this->isNew()) {
			$this->singleProductSale = Oops_Db_ProductSaleQuery::create()->findPk($this->getPrimaryKey(), $con);
		}

		return $this->singleProductSale;
	}

	/**
	 * Sets a single Oops_Db_ProductSale object as related to this object by a one-to-one relationship.
	 *
	 * @param      Oops_Db_ProductSale $v Oops_Db_ProductSale
	 * @return     Oops_Db_Product The current object (for fluent API support)
	 * @throws     PropelException
	 */
	public function setProductSale(Oops_Db_ProductSale $v = null)
	{
		$this->singleProductSale = $v;

		// Make sure that that the passed-in Oops_Db_ProductSale isn't already associated with this object
		if ($v !== null && $v->getProduct() === null) {
			$v->setProduct($this);
		}

		return $this;
	}

	/**
	 * Clears out the collStockMvts collection
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addStockMvts()
	 */
	public function clearStockMvts()
	{
		$this->collStockMvts = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collStockMvts collection.
	 *
	 * By default this just sets the collStockMvts collection to an empty array (like clearcollStockMvts());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @param      boolean $overrideExisting If set to true, the method call initializes
	 *                                        the collection even if it is not empty
	 *
	 * @return     void
	 */
	public function initStockMvts($overrideExisting = true)
	{
		if (null !== $this->collStockMvts && !$overrideExisting) {
			return;
		}
		$this->collStockMvts = new PropelObjectCollection();
		$this->collStockMvts->setModel('Oops_Db_StockMvt');
	}

	/**
	 * Gets an array of Oops_Db_StockMvt objects which contain a foreign key that references this object.
	 *
	 * If the $criteria is not null, it is used to always fetch the results from the database.
	 * Otherwise the results are fetched from the database the first time, then cached.
	 * Next time the same method is called without $criteria, the cached collection is returned.
	 * If this Oops_Db_Product is new, it will return
	 * an empty collection or the current collection; the criteria is ignored on a new object.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @return     PropelCollection|array Oops_Db_StockMvt[] List of Oops_Db_StockMvt objects
	 * @throws     PropelException
	 */
	public function getStockMvts($criteria = null, PropelPDO $con = null)
	{
		if(null === $this->collStockMvts || null !== $criteria) {
			if ($this->isNew() && null === $this->collStockMvts) {
				// return empty collection
				$this->initStockMvts();
			} else {
				$collStockMvts = Oops_Db_StockMvtQuery::create(null, $criteria)
					->filterByProduct($this)
					->find($con);
				if (null !== $criteria) {
					return $collStockMvts;
				}
				$this->collStockMvts = $collStockMvts;
			}
		}
		return $this->collStockMvts;
	}

	/**
	 * Sets a collection of StockMvt objects related by a one-to-many relationship
	 * to the current object.
	 * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
	 * and new objects from the given Propel collection.
	 *
	 * @param      PropelCollection $stockMvts A Propel collection.
	 * @param      PropelPDO $con Optional connection object
	 */
	public function setStockMvts(PropelCollection $stockMvts, PropelPDO $con = null)
	{
		$this->stockMvtsScheduledForDeletion = $this->getStockMvts(new Criteria(), $con)->diff($stockMvts);

		foreach ($stockMvts as $stockMvt) {
			// Fix issue with collection modified by reference
			if ($stockMvt->isNew()) {
				$stockMvt->setProduct($this);
			}
			$this->addStockMvt($stockMvt);
		}

		$this->collStockMvts = $stockMvts;
	}

	/**
	 * Returns the number of related Oops_Db_StockMvt objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related Oops_Db_StockMvt objects.
	 * @throws     PropelException
	 */
	public function countStockMvts(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if(null === $this->collStockMvts || null !== $criteria) {
			if ($this->isNew() && null === $this->collStockMvts) {
				return 0;
			} else {
				$query = Oops_Db_StockMvtQuery::create(null, $criteria);
				if($distinct) {
					$query->distinct();
				}
				return $query
					->filterByProduct($this)
					->count($con);
			}
		} else {
			return count($this->collStockMvts);
		}
	}

	/**
	 * Method called to associate a Oops_Db_StockMvt object to this object
	 * through the Oops_Db_StockMvt foreign key attribute.
	 *
	 * @param      Oops_Db_StockMvt $l Oops_Db_StockMvt
	 * @return     Oops_Db_Product The current object (for fluent API support)
	 */
	public function addStockMvt(Oops_Db_StockMvt $l)
	{
		if ($this->collStockMvts === null) {
			$this->initStockMvts();
		}
		if (!$this->collStockMvts->contains($l)) { // only add it if the **same** object is not already associated
			$this->doAddStockMvt($l);
		}

		return $this;
	}

	/**
	 * @param	StockMvt $stockMvt The stockMvt object to add.
	 */
	protected function doAddStockMvt($stockMvt)
	{
		$this->collStockMvts[]= $stockMvt;
		$stockMvt->setProduct($this);
	}

	/**
	 * Gets a single Oops_Db_Supplier object, which is related to this object by a one-to-one relationship.
	 *
	 * @param      PropelPDO $con optional connection object
	 * @return     Oops_Db_Supplier
	 * @throws     PropelException
	 */
	public function getSupplier(PropelPDO $con = null)
	{

		if ($this->singleSupplier === null && !$this->isNew()) {
			$this->singleSupplier = Oops_Db_SupplierQuery::create()->findPk($this->getPrimaryKey(), $con);
		}

		return $this->singleSupplier;
	}

	/**
	 * Sets a single Oops_Db_Supplier object as related to this object by a one-to-one relationship.
	 *
	 * @param      Oops_Db_Supplier $v Oops_Db_Supplier
	 * @return     Oops_Db_Product The current object (for fluent API support)
	 * @throws     PropelException
	 */
	public function setSupplier(Oops_Db_Supplier $v = null)
	{
		$this->singleSupplier = $v;

		// Make sure that that the passed-in Oops_Db_Supplier isn't already associated with this object
		if ($v !== null && $v->getProduct() === null) {
			$v->setProduct($this);
		}

		return $this;
	}

	/**
	 * Clears out the collCategories collection
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addCategories()
	 */
	public function clearCategories()
	{
		$this->collCategories = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collCategories collection.
	 *
	 * By default this just sets the collCategories collection to an empty collection (like clearCategories());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @return     void
	 */
	public function initCategories()
	{
		$this->collCategories = new PropelObjectCollection();
		$this->collCategories->setModel('Oops_Db_Category');
	}

	/**
	 * Gets a collection of Oops_Db_Category objects related by a many-to-many relationship
	 * to the current object by way of the category_product cross-reference table.
	 *
	 * If the $criteria is not null, it is used to always fetch the results from the database.
	 * Otherwise the results are fetched from the database the first time, then cached.
	 * Next time the same method is called without $criteria, the cached collection is returned.
	 * If this Oops_Db_Product is new, it will return
	 * an empty collection or the current collection; the criteria is ignored on a new object.
	 *
	 * @param      Criteria $criteria Optional query object to filter the query
	 * @param      PropelPDO $con Optional connection object
	 *
	 * @return     PropelCollection|array Oops_Db_Category[] List of Oops_Db_Category objects
	 */
	public function getCategories($criteria = null, PropelPDO $con = null)
	{
		if(null === $this->collCategories || null !== $criteria) {
			if ($this->isNew() && null === $this->collCategories) {
				// return empty collection
				$this->initCategories();
			} else {
				$collCategories = Oops_Db_CategoryQuery::create(null, $criteria)
					->filterByProduct($this)
					->find($con);
				if (null !== $criteria) {
					return $collCategories;
				}
				$this->collCategories = $collCategories;
			}
		}
		return $this->collCategories;
	}

	/**
	 * Sets a collection of Oops_Db_Category objects related by a many-to-many relationship
	 * to the current object by way of the category_product cross-reference table.
	 * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
	 * and new objects from the given Propel collection.
	 *
	 * @param      PropelCollection $categories A Propel collection.
	 * @param      PropelPDO $con Optional connection object
	 */
	public function setCategories(PropelCollection $categories, PropelPDO $con = null)
	{
		$oops_Db_CategoryProducts = CategoryProductQuery::create()
			->filterByOops_Db_Category($categories)
			->filterByProduct($this)
			->find($con);

		$this->categoriesScheduledForDeletion = $this->getCategoryProducts()->diff($oops_Db_CategoryProducts);
		$this->collCategoryProducts = $oops_Db_CategoryProducts;

		foreach ($categories as $category) {
			// Fix issue with collection modified by reference
			if ($category->isNew()) {
				$this->doAddOops_Db_Category($category);
			} else {
				$this->addOops_Db_Category($category);
			}
		}

		$this->collCategories = $categories;
	}

	/**
	 * Gets the number of Oops_Db_Category objects related by a many-to-many relationship
	 * to the current object by way of the category_product cross-reference table.
	 *
	 * @param      Criteria $criteria Optional query object to filter the query
	 * @param      boolean $distinct Set to true to force count distinct
	 * @param      PropelPDO $con Optional connection object
	 *
	 * @return     int the number of related Oops_Db_Category objects
	 */
	public function countCategories($criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if(null === $this->collCategories || null !== $criteria) {
			if ($this->isNew() && null === $this->collCategories) {
				return 0;
			} else {
				$query = Oops_Db_CategoryQuery::create(null, $criteria);
				if($distinct) {
					$query->distinct();
				}
				return $query
					->filterByProduct($this)
					->count($con);
			}
		} else {
			return count($this->collCategories);
		}
	}

	/**
	 * Associate a Oops_Db_Category object to this object
	 * through the category_product cross reference table.
	 *
	 * @param      Oops_Db_Category $category The Oops_Db_CategoryProduct object to relate
	 * @return     void
	 */
	public function addCategory($category)
	{
		if ($this->collCategories === null) {
			$this->initCategories();
		}
		if (!$this->collCategories->contains($category)) { // only add it if the **same** object is not already associated
			$this->doAddCategory($category);

			$this->collCategories[]= $category;
		}
	}

	/**
	 * @param	Category $category The category object to add.
	 */
	protected function doAddCategory($category)
	{
		$categoryProduct = new Oops_Db_CategoryProduct();
		$categoryProduct->setCategory($category);
		$this->addOops_Db_CategoryProduct($categoryProduct);
	}

	/**
	 * Clears out the collFeatures collection
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addFeatures()
	 */
	public function clearFeatures()
	{
		$this->collFeatures = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collFeatures collection.
	 *
	 * By default this just sets the collFeatures collection to an empty collection (like clearFeatures());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @return     void
	 */
	public function initFeatures()
	{
		$this->collFeatures = new PropelObjectCollection();
		$this->collFeatures->setModel('Oops_Db_Feature');
	}

	/**
	 * Gets a collection of Oops_Db_Feature objects related by a many-to-many relationship
	 * to the current object by way of the feature_product cross-reference table.
	 *
	 * If the $criteria is not null, it is used to always fetch the results from the database.
	 * Otherwise the results are fetched from the database the first time, then cached.
	 * Next time the same method is called without $criteria, the cached collection is returned.
	 * If this Oops_Db_Product is new, it will return
	 * an empty collection or the current collection; the criteria is ignored on a new object.
	 *
	 * @param      Criteria $criteria Optional query object to filter the query
	 * @param      PropelPDO $con Optional connection object
	 *
	 * @return     PropelCollection|array Oops_Db_Feature[] List of Oops_Db_Feature objects
	 */
	public function getFeatures($criteria = null, PropelPDO $con = null)
	{
		if(null === $this->collFeatures || null !== $criteria) {
			if ($this->isNew() && null === $this->collFeatures) {
				// return empty collection
				$this->initFeatures();
			} else {
				$collFeatures = Oops_Db_FeatureQuery::create(null, $criteria)
					->filterByProduct($this)
					->find($con);
				if (null !== $criteria) {
					return $collFeatures;
				}
				$this->collFeatures = $collFeatures;
			}
		}
		return $this->collFeatures;
	}

	/**
	 * Sets a collection of Oops_Db_Feature objects related by a many-to-many relationship
	 * to the current object by way of the feature_product cross-reference table.
	 * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
	 * and new objects from the given Propel collection.
	 *
	 * @param      PropelCollection $features A Propel collection.
	 * @param      PropelPDO $con Optional connection object
	 */
	public function setFeatures(PropelCollection $features, PropelPDO $con = null)
	{
		$oops_Db_FeatureProducts = FeatureProductQuery::create()
			->filterByOops_Db_Feature($features)
			->filterByProduct($this)
			->find($con);

		$this->featuresScheduledForDeletion = $this->getFeatureProducts()->diff($oops_Db_FeatureProducts);
		$this->collFeatureProducts = $oops_Db_FeatureProducts;

		foreach ($features as $feature) {
			// Fix issue with collection modified by reference
			if ($feature->isNew()) {
				$this->doAddOops_Db_Feature($feature);
			} else {
				$this->addOops_Db_Feature($feature);
			}
		}

		$this->collFeatures = $features;
	}

	/**
	 * Gets the number of Oops_Db_Feature objects related by a many-to-many relationship
	 * to the current object by way of the feature_product cross-reference table.
	 *
	 * @param      Criteria $criteria Optional query object to filter the query
	 * @param      boolean $distinct Set to true to force count distinct
	 * @param      PropelPDO $con Optional connection object
	 *
	 * @return     int the number of related Oops_Db_Feature objects
	 */
	public function countFeatures($criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if(null === $this->collFeatures || null !== $criteria) {
			if ($this->isNew() && null === $this->collFeatures) {
				return 0;
			} else {
				$query = Oops_Db_FeatureQuery::create(null, $criteria);
				if($distinct) {
					$query->distinct();
				}
				return $query
					->filterByProduct($this)
					->count($con);
			}
		} else {
			return count($this->collFeatures);
		}
	}

	/**
	 * Associate a Oops_Db_Feature object to this object
	 * through the feature_product cross reference table.
	 *
	 * @param      Oops_Db_Feature $feature The Oops_Db_FeatureProduct object to relate
	 * @return     void
	 */
	public function addFeature($feature)
	{
		if ($this->collFeatures === null) {
			$this->initFeatures();
		}
		if (!$this->collFeatures->contains($feature)) { // only add it if the **same** object is not already associated
			$this->doAddFeature($feature);

			$this->collFeatures[]= $feature;
		}
	}

	/**
	 * @param	Feature $feature The feature object to add.
	 */
	protected function doAddFeature($feature)
	{
		$featureProduct = new Oops_Db_FeatureProduct();
		$featureProduct->setFeature($feature);
		$this->addOops_Db_FeatureProduct($featureProduct);
	}

	/**
	 * Clears the current object and sets all attributes to their default values
	 */
	public function clear()
	{
		$this->id_product = null;
		$this->id_supplier = null;
		$this->id_manufacturer = null;
		$this->id_tax_rules_group = null;
		$this->id_category_default = null;
		$this->id_color_default = null;
		$this->on_sale = null;
		$this->online_only = null;
		$this->ean13 = null;
		$this->upc = null;
		$this->ecotax = null;
		$this->quantity = null;
		$this->minimal_quantity = null;
		$this->price = null;
		$this->wholesale_price = null;
		$this->unity = null;
		$this->unit_price_ratio = null;
		$this->additional_shipping_cost = null;
		$this->reference = null;
		$this->supplier_reference = null;
		$this->location = null;
		$this->width = null;
		$this->height = null;
		$this->depth = null;
		$this->weight = null;
		$this->out_of_stock = null;
		$this->quantity_discount = null;
		$this->customizable = null;
		$this->uploadable_files = null;
		$this->text_fields = null;
		$this->active = null;
		$this->available_for_order = null;
		$this->condition = null;
		$this->show_price = null;
		$this->indexed = null;
		$this->cache_is_pack = null;
		$this->cache_has_attachments = null;
		$this->cache_default_attribute = null;
		$this->date_add = null;
		$this->date_upd = null;
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
			if ($this->collCategoryProducts) {
				foreach ($this->collCategoryProducts as $o) {
					$o->clearAllReferences($deep);
				}
			}
			if ($this->collFeatureProducts) {
				foreach ($this->collFeatureProducts as $o) {
					$o->clearAllReferences($deep);
				}
			}
			if ($this->collImages) {
				foreach ($this->collImages as $o) {
					$o->clearAllReferences($deep);
				}
			}
			if ($this->collProductLangs) {
				foreach ($this->collProductLangs as $o) {
					$o->clearAllReferences($deep);
				}
			}
			if ($this->singleProductSale) {
				$this->singleProductSale->clearAllReferences($deep);
			}
			if ($this->collStockMvts) {
				foreach ($this->collStockMvts as $o) {
					$o->clearAllReferences($deep);
				}
			}
			if ($this->singleSupplier) {
				$this->singleSupplier->clearAllReferences($deep);
			}
			if ($this->collCategories) {
				foreach ($this->collCategories as $o) {
					$o->clearAllReferences($deep);
				}
			}
			if ($this->collFeatures) {
				foreach ($this->collFeatures as $o) {
					$o->clearAllReferences($deep);
				}
			}
		} // if ($deep)

		// i18n behavior
		$this->currentLocale = '1';
		$this->currentTranslations = null;
		if ($this->collCategoryProducts instanceof PropelCollection) {
			$this->collCategoryProducts->clearIterator();
		}
		$this->collCategoryProducts = null;
		if ($this->collFeatureProducts instanceof PropelCollection) {
			$this->collFeatureProducts->clearIterator();
		}
		$this->collFeatureProducts = null;
		if ($this->collImages instanceof PropelCollection) {
			$this->collImages->clearIterator();
		}
		$this->collImages = null;
		if ($this->collProductLangs instanceof PropelCollection) {
			$this->collProductLangs->clearIterator();
		}
		$this->collProductLangs = null;
		if ($this->singleProductSale instanceof PropelCollection) {
			$this->singleProductSale->clearIterator();
		}
		$this->singleProductSale = null;
		if ($this->collStockMvts instanceof PropelCollection) {
			$this->collStockMvts->clearIterator();
		}
		$this->collStockMvts = null;
		if ($this->singleSupplier instanceof PropelCollection) {
			$this->singleSupplier->clearIterator();
		}
		$this->singleSupplier = null;
		if ($this->collCategories instanceof PropelCollection) {
			$this->collCategories->clearIterator();
		}
		$this->collCategories = null;
		if ($this->collFeatures instanceof PropelCollection) {
			$this->collFeatures->clearIterator();
		}
		$this->collFeatures = null;
		$this->aManufacturer = null;
	}

	/**
	 * Return the string representation of this object
	 *
	 * @return string
	 */
	public function __toString()
	{
		return (string) $this->exportTo(Oops_Db_ProductPeer::DEFAULT_STRING_FORMAT);
	}

	// i18n behavior
	
	/**
	 * Sets the locale for translations
	 *
	 * @param     string $locale Locale to use for the translation, e.g. 'fr_FR'
	 *
	 * @return    Oops_Db_Product The current object (for fluent API support)
	 */
	public function setLocale($locale = '1')
	{
		$this->currentLocale = $locale;
	
		return $this;
	}
	
	/**
	 * Gets the locale for translations
	 *
	 * @return    string $locale Locale to use for the translation, e.g. 'fr_FR'
	 */
	public function getLocale()
	{
		return $this->currentLocale;
	}
	
	/**
	 * Returns the current translation for a given locale
	 *
	 * @param     string $locale Locale to use for the translation, e.g. 'fr_FR'
	 * @param     PropelPDO $con an optional connection object
	 *
	 * @return Oops_Db_ProductLang */
	public function getTranslation($locale = '1', PropelPDO $con = null)
	{
		if (!isset($this->currentTranslations[$locale])) {
			if (null !== $this->collProductLangs) {
				foreach ($this->collProductLangs as $translation) {
					if ($translation->getIdLang() == $locale) {
						$this->currentTranslations[$locale] = $translation;
						return $translation;
					}
				}
			}
			if ($this->isNew()) {
				$translation = new Oops_Db_ProductLang();
				$translation->setIdLang($locale);
			} else {
				$translation = Oops_Db_ProductLangQuery::create()
					->filterByPrimaryKey(array($this->getPrimaryKey(), $locale))
					->findOneOrCreate($con);
				$this->currentTranslations[$locale] = $translation;
			}
			$this->addProductLang($translation);
		}
	
		return $this->currentTranslations[$locale];
	}
	
	/**
	 * Remove the translation for a given locale
	 *
	 * @param     string $locale Locale to use for the translation, e.g. 'fr_FR'
	 * @param     PropelPDO $con an optional connection object
	 *
	 * @return    Oops_Db_Product The current object (for fluent API support)
	 */
	public function removeTranslation($locale = '1', PropelPDO $con = null)
	{
		if (!$this->isNew()) {
			Oops_Db_ProductLangQuery::create()
				->filterByPrimaryKey(array($this->getPrimaryKey(), $locale))
				->delete($con);
		}
		if (isset($this->currentTranslations[$locale])) {
			unset($this->currentTranslations[$locale]);
		}
		foreach ($this->collProductLangs as $key => $translation) {
			if ($translation->getIdLang() == $locale) {
				unset($this->collProductLangs[$key]);
				break;
			}
		}
	
		return $this;
	}
	
	/**
	 * Returns the current translation
	 *
	 * @param     PropelPDO $con an optional connection object
	 *
	 * @return Oops_Db_ProductLang */
	public function getCurrentTranslation(PropelPDO $con = null)
	{
		return $this->getTranslation($this->getLocale(), $con);
	}
	
	
	/**
	 * Get the [name] column value.
	 * 
	 * @return     string
	 */
	public function getName()
	{	return $this->getCurrentTranslation()->getName();
	}
	
	
	/**
	 * Set the value of [name] column.
	 * 
	 * @param      string $v new value
	 * @return     Oops_Db_Product The current object (for fluent API support)
	 */
	public function setName($v)
	{	$this->getCurrentTranslation()->setName($v);
	
		return $this;
	}
	
	
	/**
	 * Get the [description] column value.
	 * 
	 * @return     string
	 */
	public function getDescription()
	{	return $this->getCurrentTranslation()->getDescription();
	}
	
	
	/**
	 * Set the value of [description] column.
	 * 
	 * @param      string $v new value
	 * @return     Oops_Db_Product The current object (for fluent API support)
	 */
	public function setDescription($v)
	{	$this->getCurrentTranslation()->setDescription($v);
	
		return $this;
	}
	
	
	/**
	 * Get the [description_short] column value.
	 * 
	 * @return     string
	 */
	public function getDescriptionShort()
	{	return $this->getCurrentTranslation()->getDescriptionShort();
	}
	
	
	/**
	 * Set the value of [description_short] column.
	 * 
	 * @param      string $v new value
	 * @return     Oops_Db_Product The current object (for fluent API support)
	 */
	public function setDescriptionShort($v)
	{	$this->getCurrentTranslation()->setDescriptionShort($v);
	
		return $this;
	}
	
	
	/**
	 * Get the [link_rewrite] column value.
	 * 
	 * @return     string
	 */
	public function getLinkRewrite()
	{	return $this->getCurrentTranslation()->getLinkRewrite();
	}
	
	
	/**
	 * Set the value of [link_rewrite] column.
	 * 
	 * @param      string $v new value
	 * @return     Oops_Db_Product The current object (for fluent API support)
	 */
	public function setLinkRewrite($v)
	{	$this->getCurrentTranslation()->setLinkRewrite($v);
	
		return $this;
	}

} // Oops_Db_Propel_Product
