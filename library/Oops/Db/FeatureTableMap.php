<?php



/**
 * This class defines the structure of the 'feature' table.
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
class Oops_Db_FeatureTableMap extends TableMap
{

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'prestashop.map.Oops_Db_FeatureTableMap';

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
		$this->setName(_DB_PREFIX_ . 'feature');
		$this->setPhpName('Feature');
		$this->setClassname('Oops_Db_Feature');
		$this->setPackage('prestashop');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID_FEATURE', 'IdFeature', 'INTEGER', true, 10, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
		$this->addRelation('FeatureProduct', 'Oops_Db_FeatureProduct', RelationMap::ONE_TO_MANY, array('id_feature' => 'id_feature', ), null, null, 'FeatureProducts');
		$this->addRelation('FeatureValue', 'Oops_Db_FeatureValue', RelationMap::ONE_TO_MANY, array('id_feature' => 'id_feature', ), null, null, 'FeatureValues');
		$this->addRelation('FeatureLang', 'Oops_Db_FeatureLang', RelationMap::ONE_TO_MANY, array('id_feature' => 'id_feature', ), 'CASCADE', null, 'FeatureLangs');
		$this->addRelation('Product', 'Oops_Db_Product', RelationMap::MANY_TO_MANY, array(), 'CASCADE', null, 'Products');
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
			'i18n' => array('i18n_table' => 'feature_lang', 'i18n_phpname' => 'FeatureLang', 'i18n_columns' => 'name', 'locale_column' => 'id_lang', 'default_locale' => '1', 'locale_alias' => '', ),
		);
	} // getBehaviors()

} // Oops_Db_FeatureTableMap
