<?php



/**
 * This class defines the structure of the 'stock_mvt' table.
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
class Oops_Model_StockMvtTableMap extends TableMap
{

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'prestashop.map.Oops_Model_StockMvtTableMap';

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
		$this->setName(_DB_PREFIX_ . 'stock_mvt');
		$this->setPhpName('StockMvt');
		$this->setClassname('Oops_Model_StockMvt');
		$this->setPackage('prestashop');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID_STOCK_MVT', 'IdStockMvt', 'INTEGER', true, null, null);
		$this->addForeignKey('ID_PRODUCT', 'IdProduct', 'INTEGER', 'product', 'ID_PRODUCT', false, null, null);
		$this->addColumn('ID_PRODUCT_ATTRIBUTE', 'IdProductAttribute', 'INTEGER', false, null, null);
		$this->addColumn('ID_ORDER', 'IdOrder', 'INTEGER', false, null, null);
		$this->addColumn('ID_STOCK_MVT_REASON', 'IdStockMvtReason', 'INTEGER', true, null, null);
		$this->addColumn('ID_EMPLOYEE', 'IdEmployee', 'INTEGER', true, null, null);
		$this->addColumn('QUANTITY', 'Quantity', 'INTEGER', true, null, null);
		$this->addColumn('DATE_ADD', 'DateAdd', 'TIMESTAMP', true, null, null);
		$this->addColumn('DATE_UPD', 'DateUpd', 'TIMESTAMP', true, null, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
		$this->addRelation('Product', 'Oops_Model_Product', RelationMap::MANY_TO_ONE, array('id_product' => 'id_product', ), null, null);
		$this->addRelation('StockMvtReason', 'Oops_Model_StockMvtReason', RelationMap::ONE_TO_MANY, array('id_stock_mvt_reason' => 'id_stock_mvt_reason', ), null, null, 'StockMvtReasons');
	} // buildRelations()

} // Oops_Model_StockMvtTableMap
