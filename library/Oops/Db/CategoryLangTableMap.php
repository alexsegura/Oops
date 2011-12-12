<?php



/**
 * This class defines the structure of the 'category_lang' table.
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
class Oops_Db_CategoryLangTableMap extends TableMap
{

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'prestashop.map.Oops_Db_CategoryLangTableMap';

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
		$this->setName(_DB_PREFIX_ . 'category_lang');
		$this->setPhpName('CategoryLang');
		$this->setClassname('Oops_Db_CategoryLang');
		$this->setPackage('prestashop');
		$this->setUseIdGenerator(false);
		// columns
		$this->addForeignPrimaryKey('ID_CATEGORY', 'IdCategory', 'INTEGER' , 'category', 'ID_CATEGORY', true, 10, null);
		$this->addForeignPrimaryKey('ID_LANG', 'IdLang', 'INTEGER' , 'lang', 'ID_LANG', true, 10, null);
		$this->addColumn('NAME', 'Name', 'VARCHAR', true, 128, null);
		$this->addColumn('DESCRIPTION', 'Description', 'LONGVARCHAR', false, null, null);
		$this->addColumn('LINK_REWRITE', 'LinkRewrite', 'VARCHAR', true, 128, null);
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
		$this->addRelation('Category', 'Oops_Db_Category', RelationMap::MANY_TO_ONE, array('id_category' => 'id_category', ), null, null);
		$this->addRelation('Lang', 'Oops_Db_Lang', RelationMap::MANY_TO_ONE, array('id_lang' => 'id_lang', ), null, null);
	} // buildRelations()

} // Oops_Db_CategoryLangTableMap
