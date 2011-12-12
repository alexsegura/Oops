<?php



/**
 * This class defines the structure of the 'supplier_lang' table.
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
class Oops_Db_SupplierLangTableMap extends TableMap
{

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'prestashop.map.Oops_Db_SupplierLangTableMap';

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
		$this->setName(_DB_PREFIX_ . 'supplier_lang');
		$this->setPhpName('SupplierLang');
		$this->setClassname('Oops_Db_SupplierLang');
		$this->setPackage('prestashop');
		$this->setUseIdGenerator(false);
		// columns
		$this->addPrimaryKey('ID_SUPPLIER', 'IdSupplier', 'INTEGER', true, 10, null);
		$this->addPrimaryKey('ID_LANG', 'IdLang', 'INTEGER', true, 10, null);
		$this->addColumn('DESCRIPTION', 'Description', 'LONGVARCHAR', false, null, null);
		$this->addColumn('META_TITLE', 'MetaTitle', 'VARCHAR', false, 128, null);
		$this->addColumn('META_KEYWORDS', 'MetaKeywords', 'VARCHAR', false, 255, null);
		$this->addColumn('META_DESCRIPTION', 'MetaDescription', 'VARCHAR', false, 255, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
	} // buildRelations()

} // Oops_Db_SupplierLangTableMap
