<?php



/**
 * This class defines the structure of the 'cms_block' table.
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
class Oops_Db_CmsBlockTableMap extends TableMap
{

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'prestashop.map.Oops_Db_CmsBlockTableMap';

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
		$this->setName(_DB_PREFIX_ . 'cms_block');
		$this->setPhpName('CmsBlock');
		$this->setClassname('Oops_Db_CmsBlock');
		$this->setPackage('prestashop');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID_CMS_BLOCK', 'IdCmsBlock', 'INTEGER', true, 10, null);
		$this->addColumn('ID_CMS_CATEGORY', 'IdCmsCategory', 'INTEGER', true, 10, null);
		$this->addColumn('NAME', 'Name', 'VARCHAR', true, 40, null);
		$this->addColumn('LOCATION', 'Location', 'BOOLEAN', true, 1, null);
		$this->addColumn('POSITION', 'Position', 'INTEGER', true, 10, 0);
		$this->addColumn('DISPLAY_STORE', 'DisplayStore', 'BOOLEAN', true, 1, true);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
	} // buildRelations()

} // Oops_Db_CmsBlockTableMap
