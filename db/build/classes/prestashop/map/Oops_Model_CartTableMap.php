<?php



/**
 * This class defines the structure of the 'djland_cart' table.
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
class Oops_Model_CartTableMap extends TableMap
{

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'prestashop.map.Oops_Model_CartTableMap';

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
		$this->setName(_DB_PREFIX_ . 'djland_cart');
		$this->setPhpName('Cart');
		$this->setClassname('Oops_Model_Cart');
		$this->setPackage('prestashop');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID_CART', 'IdCart', 'INTEGER', true, 10, null);
		$this->addColumn('ID_CARRIER', 'IdCarrier', 'INTEGER', true, 10, null);
		$this->addColumn('ID_LANG', 'IdLang', 'INTEGER', true, 10, null);
		$this->addColumn('ID_ADDRESS_DELIVERY', 'IdAddressDelivery', 'INTEGER', true, 10, null);
		$this->addColumn('ID_ADDRESS_INVOICE', 'IdAddressInvoice', 'INTEGER', true, 10, null);
		$this->addColumn('ID_CURRENCY', 'IdCurrency', 'INTEGER', true, 10, null);
		$this->addColumn('ID_CUSTOMER', 'IdCustomer', 'INTEGER', true, 10, null);
		$this->addColumn('ID_GUEST', 'IdGuest', 'INTEGER', true, 10, null);
		$this->addColumn('SECURE_KEY', 'SecureKey', 'VARCHAR', true, 32, '-1');
		$this->addColumn('RECYCLABLE', 'Recyclable', 'BOOLEAN', true, 1, true);
		$this->addColumn('GIFT', 'Gift', 'BOOLEAN', true, 1, false);
		$this->addColumn('GIFT_MESSAGE', 'GiftMessage', 'LONGVARCHAR', false, null, null);
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

} // Oops_Model_CartTableMap
