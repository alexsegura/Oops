<?php



/**
 * This class defines the structure of the 'djland_product_download' table.
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
class Oops_Model_ProductDownloadTableMap extends TableMap
{

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'prestashop.map.Oops_Model_ProductDownloadTableMap';

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
		$this->setName('djland_product_download');
		$this->setPhpName('ProductDownload');
		$this->setClassname('Oops_Model_ProductDownload');
		$this->setPackage('prestashop');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID_PRODUCT_DOWNLOAD', 'IdProductDownload', 'INTEGER', true, 10, null);
		$this->addColumn('ID_PRODUCT', 'IdProduct', 'INTEGER', true, 10, null);
		$this->addColumn('DISPLAY_FILENAME', 'DisplayFilename', 'VARCHAR', false, 255, null);
		$this->addColumn('PHYSICALLY_FILENAME', 'PhysicallyFilename', 'VARCHAR', false, 255, null);
		$this->addColumn('DATE_DEPOSIT', 'DateDeposit', 'TIMESTAMP', true, null, null);
		$this->addColumn('DATE_EXPIRATION', 'DateExpiration', 'TIMESTAMP', false, null, null);
		$this->addColumn('NB_DAYS_ACCESSIBLE', 'NbDaysAccessible', 'INTEGER', false, 10, null);
		$this->addColumn('NB_DOWNLOADABLE', 'NbDownloadable', 'INTEGER', false, 10, 1);
		$this->addColumn('ACTIVE', 'Active', 'BOOLEAN', true, 1, true);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
	} // buildRelations()

} // Oops_Model_ProductDownloadTableMap
