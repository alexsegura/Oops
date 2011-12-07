<?php



/**
 * This class defines the structure of the 'feature_value_lang' table.
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
class Oops_Model_FeatureValueLangTableMap extends TableMap
{

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'prestashop.map.Oops_Model_FeatureValueLangTableMap';

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
		$this->setName(_DB_PREFIX_ . 'feature_value_lang');
		$this->setPhpName('FeatureValueLang');
		$this->setClassname('Oops_Model_FeatureValueLang');
		$this->setPackage('prestashop');
		$this->setUseIdGenerator(false);
		// columns
		$this->addForeignPrimaryKey('ID_FEATURE_VALUE', 'IdFeatureValue', 'INTEGER' , 'feature_value', 'ID_FEATURE_VALUE', true, 10, null);
		$this->addPrimaryKey('ID_LANG', 'IdLang', 'INTEGER', true, 10, null);
		$this->addColumn('VALUE', 'Value', 'VARCHAR', false, 255, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
		$this->addRelation('FeatureValue', 'Oops_Model_FeatureValue', RelationMap::MANY_TO_ONE, array('id_feature_value' => 'id_feature_value', ), 'CASCADE', null);
	} // buildRelations()

} // Oops_Model_FeatureValueLangTableMap
