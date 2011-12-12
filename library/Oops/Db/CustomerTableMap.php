<?php



/**
 * This class defines the structure of the 'customer' table.
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
class Oops_Db_CustomerTableMap extends TableMap
{

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'prestashop.map.Oops_Db_CustomerTableMap';

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
		$this->setName(_DB_PREFIX_ . 'customer');
		$this->setPhpName('Customer');
		$this->setClassname('Oops_Db_Customer');
		$this->setPackage('prestashop');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID_CUSTOMER', 'IdCustomer', 'INTEGER', true, 10, null);
		$this->addColumn('ID_GENDER', 'IdGender', 'INTEGER', true, 10, null);
		$this->addColumn('ID_DEFAULT_GROUP', 'IdDefaultGroup', 'INTEGER', true, 10, 1);
		$this->addColumn('FIRSTNAME', 'Firstname', 'VARCHAR', true, 32, null);
		$this->addColumn('LASTNAME', 'Lastname', 'VARCHAR', true, 32, null);
		$this->addColumn('EMAIL', 'Email', 'VARCHAR', true, 128, null);
		$this->addColumn('PASSWD', 'Passwd', 'VARCHAR', true, 32, null);
		$this->addColumn('LAST_PASSWD_GEN', 'LastPasswdGen', 'TIMESTAMP', true, null, 'CURRENT_TIMESTAMP');
		$this->addColumn('BIRTHDAY', 'Birthday', 'DATE', false, null, null);
		$this->addColumn('NEWSLETTER', 'Newsletter', 'BOOLEAN', true, 1, false);
		$this->addColumn('IP_REGISTRATION_NEWSLETTER', 'IpRegistrationNewsletter', 'VARCHAR', false, 15, null);
		$this->addColumn('NEWSLETTER_DATE_ADD', 'NewsletterDateAdd', 'TIMESTAMP', false, null, null);
		$this->addColumn('OPTIN', 'Optin', 'BOOLEAN', true, 1, false);
		$this->addColumn('SECURE_KEY', 'SecureKey', 'VARCHAR', true, 32, '-1');
		$this->addColumn('NOTE', 'Note', 'LONGVARCHAR', false, null, null);
		$this->addColumn('ACTIVE', 'Active', 'BOOLEAN', true, 1, false);
		$this->addColumn('IS_GUEST', 'IsGuest', 'BOOLEAN', true, 1, false);
		$this->addColumn('DELETED', 'Deleted', 'BOOLEAN', true, 1, false);
		$this->addColumn('DATE_ADD', 'DateAdd', 'TIMESTAMP', true, null, null);
		$this->addColumn('DATE_UPD', 'DateUpd', 'TIMESTAMP', true, null, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
	} // buildRelations()

} // Oops_Db_CustomerTableMap
