<?php



/**
 * This class defines the structure of the 'feature_product' table.
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
class Oops_Model_FeatureProductTableMap extends TableMap
{

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'prestashop.map.Oops_Model_FeatureProductTableMap';

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
		$this->setName(_DB_PREFIX_ . 'feature_product');
		$this->setPhpName('FeatureProduct');
		$this->setClassname('Oops_Model_FeatureProduct');
		$this->setPackage('prestashop');
		$this->setUseIdGenerator(false);
		// columns
		$this->addForeignPrimaryKey('ID_FEATURE', 'IdFeature', 'INTEGER' , 'feature', 'ID_FEATURE', true, 10, null);
		$this->addForeignPrimaryKey('ID_PRODUCT', 'IdProduct', 'INTEGER' , 'product', 'ID_PRODUCT', true, 10, null);
		$this->addPrimaryKey('ID_FEATURE_VALUE', 'IdFeatureValue', 'INTEGER', true, 10, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
		$this->addRelation('Product', 'Oops_Model_Product', RelationMap::MANY_TO_ONE, array('id_product' => 'id_product', ), null, null);
		$this->addRelation('Feature', 'Oops_Model_Feature', RelationMap::MANY_TO_ONE, array('id_feature' => 'id_feature', ), null, null);
		$this->addRelation('FeatureValue', 'Oops_Model_FeatureValue', RelationMap::ONE_TO_ONE, array('id_feature_value' => 'id_feature_value', ), null, null);
	} // buildRelations()

} // Oops_Model_FeatureProductTableMap
