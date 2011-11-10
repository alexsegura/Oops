<?php



/**
 * This class defines the structure of the 'order_detail' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator.prestashop.map
 */
class Oops_Model_OrderDetailTableMap extends TableMap
{

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'prestashop.map.Oops_Model_OrderDetailTableMap';

	/**
	 * Initialize the table attributes, columns and validators
	 * Relations are not initialized by this method since they are lazy loaded
	 *
	 * @return     void
	 * @throws     PropelException
	 */
	public function initialize()
	{
		// attributes
		$this->setName(_DB_PREFIX_ . 'order_detail');
		$this->setPhpName('OrderDetail');
		$this->setClassname('Oops_Model_OrderDetail');
		$this->setPackage('prestashop');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID_ORDER_DETAIL', 'IdOrderDetail', 'INTEGER', true, 10, null);
		$this->addColumn('ID_ORDER', 'IdOrder', 'INTEGER', true, 10, null);
		$this->addColumn('PRODUCT_ID', 'ProductId', 'INTEGER', true, 10, null);
		$this->addColumn('PRODUCT_ATTRIBUTE_ID', 'ProductAttributeId', 'INTEGER', false, 10, null);
		$this->addColumn('PRODUCT_NAME', 'ProductName', 'VARCHAR', true, 255, null);
		$this->addColumn('PRODUCT_QUANTITY', 'ProductQuantity', 'INTEGER', true, 10, 0);
		$this->addColumn('PRODUCT_QUANTITY_IN_STOCK', 'ProductQuantityInStock', 'INTEGER', true, 10, 0);
		$this->addColumn('PRODUCT_QUANTITY_REFUNDED', 'ProductQuantityRefunded', 'INTEGER', true, 10, 0);
		$this->addColumn('PRODUCT_QUANTITY_RETURN', 'ProductQuantityReturn', 'INTEGER', true, 10, 0);
		$this->addColumn('PRODUCT_QUANTITY_REINJECTED', 'ProductQuantityReinjected', 'INTEGER', true, 10, 0);
		$this->addColumn('PRODUCT_PRICE', 'ProductPrice', 'DECIMAL', true, 20, 0);
		$this->addColumn('REDUCTION_PERCENT', 'ReductionPercent', 'DECIMAL', true, null, 0);
		$this->addColumn('REDUCTION_AMOUNT', 'ReductionAmount', 'DECIMAL', true, 20, 0);
		$this->addColumn('GROUP_REDUCTION', 'GroupReduction', 'DECIMAL', true, null, 0);
		$this->addColumn('PRODUCT_QUANTITY_DISCOUNT', 'ProductQuantityDiscount', 'DECIMAL', true, 20, 0);
		$this->addColumn('PRODUCT_EAN13', 'ProductEan13', 'VARCHAR', false, 13, null);
		$this->addColumn('PRODUCT_UPC', 'ProductUpc', 'VARCHAR', false, 12, null);
		$this->addColumn('PRODUCT_REFERENCE', 'ProductReference', 'VARCHAR', false, 32, null);
		$this->addColumn('PRODUCT_SUPPLIER_REFERENCE', 'ProductSupplierReference', 'VARCHAR', false, 32, null);
		$this->addColumn('PRODUCT_WEIGHT', 'ProductWeight', 'FLOAT', true, null, null);
		$this->addColumn('TAX_NAME', 'TaxName', 'VARCHAR', true, 16, null);
		$this->addColumn('TAX_RATE', 'TaxRate', 'DECIMAL', true, null, 0);
		$this->addColumn('ECOTAX', 'Ecotax', 'DECIMAL', true, 21, 0);
		$this->addColumn('ECOTAX_TAX_RATE', 'EcotaxTaxRate', 'DECIMAL', true, 5, 0);
		$this->addColumn('DISCOUNT_QUANTITY_APPLIED', 'DiscountQuantityApplied', 'BOOLEAN', true, 1, false);
		$this->addColumn('DOWNLOAD_HASH', 'DownloadHash', 'VARCHAR', false, 255, null);
		$this->addColumn('DOWNLOAD_NB', 'DownloadNb', 'INTEGER', false, 10, 0);
		$this->addColumn('DOWNLOAD_DEADLINE', 'DownloadDeadline', 'TIMESTAMP', false, null, '0000-00-00 00:00:00');
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
	} // buildRelations()

} // Oops_Model_OrderDetailTableMap
