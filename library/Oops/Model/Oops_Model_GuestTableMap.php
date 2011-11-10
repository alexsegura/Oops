<?php



/**
 * This class defines the structure of the 'guest' table.
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
class Oops_Model_GuestTableMap extends TableMap
{

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'prestashop.map.Oops_Model_GuestTableMap';

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
		$this->setName(_DB_PREFIX_ . 'guest');
		$this->setPhpName('Guest');
		$this->setClassname('Oops_Model_Guest');
		$this->setPackage('prestashop');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID_GUEST', 'IdGuest', 'INTEGER', true, 10, null);
		$this->addColumn('ID_OPERATING_SYSTEM', 'IdOperatingSystem', 'INTEGER', false, 10, null);
		$this->addColumn('ID_WEB_BROWSER', 'IdWebBrowser', 'INTEGER', false, 10, null);
		$this->addColumn('ID_CUSTOMER', 'IdCustomer', 'INTEGER', false, 10, null);
		$this->addColumn('JAVASCRIPT', 'Javascript', 'BOOLEAN', false, 1, false);
		$this->addColumn('SCREEN_RESOLUTION_X', 'ScreenResolutionX', 'SMALLINT', false, 5, null);
		$this->addColumn('SCREEN_RESOLUTION_Y', 'ScreenResolutionY', 'SMALLINT', false, 5, null);
		$this->addColumn('SCREEN_COLOR', 'ScreenColor', 'TINYINT', false, 3, null);
		$this->addColumn('SUN_JAVA', 'SunJava', 'BOOLEAN', false, 1, null);
		$this->addColumn('ADOBE_FLASH', 'AdobeFlash', 'BOOLEAN', false, 1, null);
		$this->addColumn('ADOBE_DIRECTOR', 'AdobeDirector', 'BOOLEAN', false, 1, null);
		$this->addColumn('APPLE_QUICKTIME', 'AppleQuicktime', 'BOOLEAN', false, 1, null);
		$this->addColumn('REAL_PLAYER', 'RealPlayer', 'BOOLEAN', false, 1, null);
		$this->addColumn('WINDOWS_MEDIA', 'WindowsMedia', 'BOOLEAN', false, 1, null);
		$this->addColumn('ACCEPT_LANGUAGE', 'AcceptLanguage', 'VARCHAR', false, 8, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
	} // buildRelations()

} // Oops_Model_GuestTableMap
