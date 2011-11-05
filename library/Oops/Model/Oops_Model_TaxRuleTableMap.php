<?php



/**
 * This class defines the structure of the 'djland_tax_rule' table.
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
class Oops_Model_TaxRuleTableMap extends TableMap
{

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'prestashop.map.Oops_Model_TaxRuleTableMap';

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
		$this->setName('djland_tax_rule');
		$this->setPhpName('TaxRule');
		$this->setClassname('Oops_Model_TaxRule');
		$this->setPackage('prestashop');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID_TAX_RULE', 'IdTaxRule', 'INTEGER', true, null, null);
		$this->addColumn('ID_TAX_RULES_GROUP', 'IdTaxRulesGroup', 'INTEGER', true, null, null);
		$this->addColumn('ID_COUNTRY', 'IdCountry', 'INTEGER', true, null, null);
		$this->addColumn('ID_STATE', 'IdState', 'INTEGER', true, null, null);
		$this->addColumn('ID_COUNTY', 'IdCounty', 'INTEGER', true, null, null);
		$this->addColumn('ID_TAX', 'IdTax', 'INTEGER', true, null, null);
		$this->addColumn('STATE_BEHAVIOR', 'StateBehavior', 'INTEGER', true, null, null);
		$this->addColumn('COUNTY_BEHAVIOR', 'CountyBehavior', 'INTEGER', true, null, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
	} // buildRelations()

} // Oops_Model_TaxRuleTableMap
