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
		$this->addPrimaryKey('ID_FEATURE_VALUE', 'IdFeatureValue', 'INTEGER', true, 10, null);
		$this->addColumn('ID_FEATURE', 'IdFeature', 'INTEGER', true, 10, null);
		$this->addColumn('CUSTOM', 'Custom', 'TINYINT', false, 3, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
	} // buildRelations()

} // Oops_Model_FeatureValueTableMap
