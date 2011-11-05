<?php



/**
 * This class defines the structure of the 'djland_lang' table.
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
class Oops_Model_LangTableMap extends TableMap
{

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'prestashop.map.Oops_Model_LangTableMap';

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
		$this->setName(_DB_PREFIX_ . 'djland_lang');
		$this->setPhpName('Lang');
		$this->setClassname('Oops_Model_Lang');
		$this->setPackage('prestashop');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID_LANG', 'IdLang', 'INTEGER', true, 10, null);
		$this->addColumn('NAME', 'Name', 'VARCHAR', true, 32, null);
		$this->addColumn('ACTIVE', 'Active', 'TINYINT', true, 3, 0);
		$this->addColumn('ISO_CODE', 'IsoCode', 'CHAR', true, 2, null);
		$this->addColumn('LANGUAGE_CODE', 'LanguageCode', 'CHAR', true, 5, null);
		$this->addColumn('IS_RTL', 'IsRtl', 'BOOLEAN', true, 1, false);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
		$this->addRelation('CategoryLang', 'Oops_Model_CategoryLang', RelationMap::ONE_TO_MANY, array('id_lang' => 'id_lang', ), null, null, 'CategoryLangs');
		$this->addRelation('ProductLang', 'Oops_Model_ProductLang', RelationMap::ONE_TO_MANY, array('id_lang' => 'id_lang', ), null, null, 'ProductLangs');
		$this->addRelation('Category', 'Oops_Model_Category', RelationMap::MANY_TO_MANY, array(), null, null, 'Categories');
	} // buildRelations()

} // Oops_Model_LangTableMap
