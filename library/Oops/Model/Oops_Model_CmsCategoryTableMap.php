<?php



/**
 * This class defines the structure of the 'djland_cms_category' table.
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
class Oops_Model_CmsCategoryTableMap extends TableMap
{

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'prestashop.map.Oops_Model_CmsCategoryTableMap';

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
		$this->setName('djland_cms_category');
		$this->setPhpName('CmsCategory');
		$this->setClassname('Oops_Model_CmsCategory');
		$this->setPackage('prestashop');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID_CMS_CATEGORY', 'IdCmsCategory', 'INTEGER', true, 10, null);
		$this->addColumn('ID_PARENT', 'IdParent', 'INTEGER', true, 10, null);
		$this->addColumn('LEVEL_DEPTH', 'LevelDepth', 'TINYINT', true, 3, 0);
		$this->addColumn('ACTIVE', 'Active', 'BOOLEAN', true, 1, false);
		$this->addColumn('DATE_ADD', 'DateAdd', 'TIMESTAMP', true, null, null);
		$this->addColumn('DATE_UPD', 'DateUpd', 'TIMESTAMP', true, null, null);
		$this->addColumn('POSITION', 'Position', 'INTEGER', true, 10, 0);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
	} // buildRelations()

} // Oops_Model_CmsCategoryTableMap
