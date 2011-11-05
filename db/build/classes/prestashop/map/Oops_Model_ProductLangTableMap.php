<?php



/**
 * This class defines the structure of the 'djland_product_lang' table.
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
class Oops_Model_ProductLangTableMap extends TableMap
{

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'prestashop.map.Oops_Model_ProductLangTableMap';

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
		$this->setName(_DB_PREFIX_ . 'djland_product_lang');
		$this->setPhpName('ProductLang');
		$this->setClassname('Oops_Model_ProductLang');
		$this->setPackage('prestashop');
		$this->setUseIdGenerator(false);
		// columns
		$this->addForeignPrimaryKey('ID_PRODUCT', 'IdProduct', 'INTEGER' , 'djland_product', 'ID_PRODUCT', true, 10, null);
		$this->addForeignPrimaryKey('ID_LANG', 'IdLang', 'INTEGER' , 'djland_lang', 'ID_LANG', true, 10, null);
		$this->addColumn('DESCRIPTION', 'Description', 'LONGVARCHAR', false, null, null);
		$this->addColumn('DESCRIPTION_SHORT', 'DescriptionShort', 'LONGVARCHAR', false, null, null);
		$this->addColumn('LINK_REWRITE', 'LinkRewrite', 'VARCHAR', true, 128, null);
		$this->addColumn('META_DESCRIPTION', 'MetaDescription', 'VARCHAR', false, 255, null);
		$this->addColumn('META_KEYWORDS', 'MetaKeywords', 'VARCHAR', false, 255, null);
		$this->addColumn('META_TITLE', 'MetaTitle', 'VARCHAR', false, 128, null);
		$this->addColumn('NAME', 'Name', 'VARCHAR', true, 128, null);
		$this->addColumn('AVAILABLE_NOW', 'AvailableNow', 'VARCHAR', false, 255, null);
		$this->addColumn('AVAILABLE_LATER', 'AvailableLater', 'VARCHAR', false, 255, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
		$this->addRelation('Product', 'Oops_Model_Product', RelationMap::MANY_TO_ONE, array('id_product' => 'id_product', ), null, null);
		$this->addRelation('Lang', 'Oops_Model_Lang', RelationMap::MANY_TO_ONE, array('id_lang' => 'id_lang', ), null, null);
	} // buildRelations()

} // Oops_Model_ProductLangTableMap
