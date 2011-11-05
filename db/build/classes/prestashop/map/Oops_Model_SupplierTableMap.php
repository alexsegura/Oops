<?php



/**
 * This class defines the structure of the 'djland_supplier' table.
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
class Oops_Model_SupplierTableMap extends TableMap
{

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'prestashop.map.Oops_Model_SupplierTableMap';

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
		$this->setName(_DB_PREFIX_ . 'djland_supplier');
		$this->setPhpName('Supplier');
		$this->setClassname('Oops_Model_Supplier');
		$this->setPackage('prestashop');
		$this->setUseIdGenerator(true);
		// columns
		$this->addForeignPrimaryKey('ID_SUPPLIER', 'IdSupplier', 'INTEGER' , 'djland_product', 'ID_SUPPLIER', true, 10, null);
		$this->addColumn('NAME', 'Name', 'VARCHAR', true, 64, null);
		$this->addColumn('DATE_ADD', 'DateAdd', 'TIMESTAMP', true, null, null);
		$this->addColumn('DATE_UPD', 'DateUpd', 'TIMESTAMP', true, null, null);
		$this->addColumn('ACTIVE', 'Active', 'BOOLEAN', true, 1, false);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
		$this->addRelation('Product', 'Oops_Model_Product', RelationMap::MANY_TO_ONE, array('id_supplier' => 'id_supplier', ), null, null);
	} // buildRelations()

} // Oops_Model_SupplierTableMap
