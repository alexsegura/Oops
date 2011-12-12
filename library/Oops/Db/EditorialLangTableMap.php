<?php



/**
 * This class defines the structure of the 'editorial_lang' table.
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
class Oops_Db_EditorialLangTableMap extends TableMap
{

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'prestashop.map.Oops_Db_EditorialLangTableMap';

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
		$this->setName(_DB_PREFIX_ . 'editorial_lang');
		$this->setPhpName('EditorialLang');
		$this->setClassname('Oops_Db_EditorialLang');
		$this->setPackage('prestashop');
		$this->setUseIdGenerator(false);
		// columns
		$this->addPrimaryKey('ID_EDITORIAL', 'IdEditorial', 'INTEGER', true, 10, null);
		$this->addPrimaryKey('ID_LANG', 'IdLang', 'INTEGER', true, 10, null);
		$this->addColumn('BODY_TITLE', 'BodyTitle', 'VARCHAR', true, 255, null);
		$this->addColumn('BODY_SUBHEADING', 'BodySubheading', 'VARCHAR', true, 255, null);
		$this->addColumn('BODY_PARAGRAPH', 'BodyParagraph', 'LONGVARCHAR', true, null, null);
		$this->addColumn('BODY_LOGO_SUBHEADING', 'BodyLogoSubheading', 'VARCHAR', true, 255, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
	} // buildRelations()

} // Oops_Db_EditorialLangTableMap
