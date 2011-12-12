<?php



/**
 * This class defines the structure of the 'orders' table.
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
class Oops_Db_OrdersTableMap extends TableMap
{

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'prestashop.map.Oops_Db_OrdersTableMap';

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
		$this->setName(_DB_PREFIX_ . 'orders');
		$this->setPhpName('Orders');
		$this->setClassname('Oops_Db_Orders');
		$this->setPackage('prestashop');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID_ORDER', 'IdOrder', 'INTEGER', true, 10, null);
		$this->addColumn('ID_CARRIER', 'IdCarrier', 'INTEGER', true, 10, null);
		$this->addColumn('ID_LANG', 'IdLang', 'INTEGER', true, 10, null);
		$this->addColumn('ID_CUSTOMER', 'IdCustomer', 'INTEGER', true, 10, null);
		$this->addColumn('ID_CART', 'IdCart', 'INTEGER', true, 10, null);
		$this->addColumn('ID_CURRENCY', 'IdCurrency', 'INTEGER', true, 10, null);
		$this->addColumn('ID_ADDRESS_DELIVERY', 'IdAddressDelivery', 'INTEGER', true, 10, null);
		$this->addColumn('ID_ADDRESS_INVOICE', 'IdAddressInvoice', 'INTEGER', true, 10, null);
		$this->addColumn('SECURE_KEY', 'SecureKey', 'VARCHAR', true, 32, '-1');
		$this->addColumn('PAYMENT', 'Payment', 'VARCHAR', true, 255, null);
		$this->addColumn('CONVERSION_RATE', 'ConversionRate', 'DECIMAL', true, 13, 1);
		$this->addColumn('MODULE', 'Module', 'VARCHAR', false, 255, null);
		$this->addColumn('RECYCLABLE', 'Recyclable', 'BOOLEAN', true, 1, false);
		$this->addColumn('GIFT', 'Gift', 'BOOLEAN', true, 1, false);
		$this->addColumn('GIFT_MESSAGE', 'GiftMessage', 'LONGVARCHAR', false, null, null);
		$this->addColumn('SHIPPING_NUMBER', 'ShippingNumber', 'VARCHAR', false, 32, null);
		$this->addColumn('TOTAL_DISCOUNTS', 'TotalDiscounts', 'DECIMAL', true, 17, 0);
		$this->addColumn('TOTAL_PAID', 'TotalPaid', 'DECIMAL', true, 17, 0);
		$this->addColumn('TOTAL_PAID_REAL', 'TotalPaidReal', 'DECIMAL', true, 17, 0);
		$this->addColumn('TOTAL_PRODUCTS', 'TotalProducts', 'DECIMAL', true, 17, 0);
		$this->addColumn('TOTAL_PRODUCTS_WT', 'TotalProductsWt', 'DECIMAL', true, 17, 0);
		$this->addColumn('TOTAL_SHIPPING', 'TotalShipping', 'DECIMAL', true, 17, 0);
		$this->addColumn('CARRIER_TAX_RATE', 'CarrierTaxRate', 'DECIMAL', true, null, 0);
		$this->addColumn('TOTAL_WRAPPING', 'TotalWrapping', 'DECIMAL', true, 17, 0);
		$this->addColumn('INVOICE_NUMBER', 'InvoiceNumber', 'INTEGER', true, 10, 0);
		$this->addColumn('DELIVERY_NUMBER', 'DeliveryNumber', 'INTEGER', true, 10, 0);
		$this->addColumn('INVOICE_DATE', 'InvoiceDate', 'TIMESTAMP', true, null, null);
		$this->addColumn('DELIVERY_DATE', 'DeliveryDate', 'TIMESTAMP', true, null, null);
		$this->addColumn('VALID', 'Valid', 'INTEGER', true, 1, 0);
		$this->addColumn('DATE_ADD', 'DateAdd', 'TIMESTAMP', true, null, null);
		$this->addColumn('DATE_UPD', 'DateUpd', 'TIMESTAMP', true, null, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
	} // buildRelations()

} // Oops_Db_OrdersTableMap
