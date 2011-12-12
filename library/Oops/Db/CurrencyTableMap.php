<?php



/**
 * This class defines the structure of the 'currency' table.
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
class Oops_Db_CurrencyTableMap extends TableMap
{

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'prestashop.map.Oops_Db_CurrencyTableMap';

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
		$this->setName(_DB_PREFIX_ . 'currency');
		$this->setPhpName('Currency');
		$this->setClassname('Oops_Db_Currency');
		$this->setPackage('prestashop');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID_CURRENCY', 'IdCurrency', 'INTEGER', true, 10, null);
		$this->addColumn('NAME', 'Name', 'VARCHAR', true, 32, null);
		$this->addColumn('ISO_CODE', 'IsoCode', 'VARCHAR', true, 3, '0');
		$this->addColumn('ISO_CODE_NUM', 'IsoCodeNum', 'VARCHAR', true, 3, '0');
		$this->addColumn('SIGN', 'Sign', 'VARCHAR', true, 8, null);
		$this->addColumn('BLANK', 'Blank', 'BOOLEAN', true, 1, false);
		$this->addColumn('FORMAT', 'Format', 'BOOLEAN', true, 1, false);
		$this->addColumn('DECIMALS', 'Decimals', 'BOOLEAN', true, 1, true);
		$this->addColumn('CONVERSION_RATE', 'ConversionRate', 'DECIMAL', true, 13, null);
		$this->addColumn('DELETED', 'Deleted', 'BOOLEAN', true, 1, false);
		$this->addColumn('ACTIVE', 'Active', 'BOOLEAN', true, 1, true);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
	} // buildRelations()

} // Oops_Db_CurrencyTableMap
