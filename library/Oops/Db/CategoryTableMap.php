<?php



/**
 * This class defines the structure of the 'category' table.
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
class Oops_Db_CategoryTableMap extends TableMap
{

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'prestashop.map.Oops_Db_CategoryTableMap';

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
		$this->setName(_DB_PREFIX_ . 'category');
		$this->setPhpName('Category');
		$this->setClassname('Oops_Db_Category');
		$this->setPackage('prestashop');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID_CATEGORY', 'IdCategory', 'INTEGER', true, 10, null);
		$this->addColumn('ID_PARENT', 'IdParent', 'INTEGER', true, 10, null);
		$this->addColumn('LEVEL_DEPTH', 'LevelDepth', 'TINYINT', true, 3, 0);
		$this->addColumn('NLEFT', 'Nleft', 'INTEGER', true, 10, 0);
		$this->addColumn('NRIGHT', 'Nright', 'INTEGER', true, 10, 0);
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
		$this->addRelation('CategoryLang', 'Oops_Db_CategoryLang', RelationMap::ONE_TO_MANY, array('id_category' => 'id_category', ), null, null, 'CategoryLangs');
		$this->addRelation('CategoryProduct', 'Oops_Db_CategoryProduct', RelationMap::ONE_TO_MANY, array('id_category' => 'id_category', ), null, null, 'CategoryProducts');
		$this->addRelation('Lang', 'Oops_Db_Lang', RelationMap::MANY_TO_MANY, array(), null, null, 'Langs');
		$this->addRelation('Product', 'Oops_Db_Product', RelationMap::MANY_TO_MANY, array(), null, null, 'Products');
	} // buildRelations()

	/**
	 *
	 * Gets the list of behaviors registered for this table
	 *
	 * @return array Associative array (name => parameters) of behaviors
	 */
	public function getBehaviors()
	{
		return array(
			'nested_set' => array('left_column' => 'nleft', 'right_column' => 'nright', 'level_column' => 'level_depth', 'use_scope' => 'false', 'scope_column' => 'tree_scope', 'method_proxies' => 'false', ),
			'i18n' => array('i18n_table' => 'category_lang', 'i18n_phpname' => 'CategoryLang', 'i18n_columns' => 'name, description', 'locale_column' => 'id_lang', 'default_locale' => '1', 'locale_alias' => '', ),
		);
	} // getBehaviors()

} // Oops_Db_CategoryTableMap
