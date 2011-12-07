<?php



/**
 * This class defines the structure of the 'feature_value' table.
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
class Oops_Model_FeatureValueTableMap extends TableMap
{

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'prestashop.map.Oops_Model_FeatureValueTableMap';

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
		$this->setName(_DB_PREFIX_ . 'feature_value');
		$this->setPhpName('FeatureValue');
		$this->setClassname('Oops_Model_FeatureValue');
		$this->setPackage('prestashop');
		$this->setUseIdGenerator(true);
		// columns
		$this->addForeignPrimaryKey('ID_FEATURE_VALUE', 'IdFeatureValue', 'INTEGER' , 'feature_product', 'ID_FEATURE_VALUE', true, 10, null);
		$this->addForeignKey('ID_FEATURE', 'IdFeature', 'INTEGER', 'feature', 'ID_FEATURE', true, 10, null);
		$this->addColumn('CUSTOM', 'Custom', 'TINYINT', false, 3, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
		$this->addRelation('Feature', 'Oops_Model_Feature', RelationMap::MANY_TO_ONE, array('id_feature' => 'id_feature', ), null, null);
		$this->addRelation('FeatureProduct', 'Oops_Model_FeatureProduct', RelationMap::MANY_TO_ONE, array('id_feature_value' => 'id_feature_value', ), null, null);
		$this->addRelation('FeatureValueLang', 'Oops_Model_FeatureValueLang', RelationMap::ONE_TO_MANY, array('id_feature_value' => 'id_feature_value', ), 'CASCADE', null, 'FeatureValueLangs');
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
			'i18n' => array('i18n_table' => 'feature_value_lang', 'i18n_phpname' => 'FeatureValueLang', 'i18n_columns' => 'value', 'locale_column' => 'id_lang', 'default_locale' => '1', 'locale_alias' => '', ),
		);
	} // getBehaviors()

} // Oops_Model_FeatureValueTableMap
