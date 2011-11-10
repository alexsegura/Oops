<?php



/**
 * This class defines the structure of the 'specific_price' table.
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
class Oops_Model_SpecificPriceTableMap extends TableMap
{

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'prestashop.map.Oops_Model_SpecificPriceTableMap';

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
		$this->setName(_DB_PREFIX_ . 'specific_price');
		$this->setPhpName('SpecificPrice');
		$this->setClassname('Oops_Model_SpecificPrice');
		$this->setPackage('prestashop');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID_SPECIFIC_PRICE', 'IdSpecificPrice', 'INTEGER', true, 10, null);
		$this->addColumn('ID_PRODUCT', 'IdProduct', 'INTEGER', true, 10, null);
		$this->addColumn('ID_SHOP', 'IdShop', 'TINYINT', true, 3, null);
		$this->addColumn('ID_CURRENCY', 'IdCurrency', 'INTEGER', true, 10, null);
		$this->addColumn('ID_COUNTRY', 'IdCountry', 'INTEGER', true, 10, null);
		$this->addColumn('ID_GROUP', 'IdGroup', 'INTEGER', true, 10, null);
		$this->addColumn('PRICE', 'Price', 'DECIMAL', true, 20, null);
		$this->addColumn('FROM_QUANTITY', 'FromQuantity', 'SMALLINT', true, 5, null);
		$this->addColumn('REDUCTION', 'Reduction', 'DECIMAL', true, 20, null);
		$this->addColumn('REDUCTION_TYPE', 'ReductionType', 'CHAR', true, null, null);
		$this->addColumn('FROM', 'From', 'TIMESTAMP', true, null, null);
		$this->addColumn('TO', 'To', 'TIMESTAMP', true, null, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
	} // buildRelations()

} // Oops_Model_SpecificPriceTableMap
