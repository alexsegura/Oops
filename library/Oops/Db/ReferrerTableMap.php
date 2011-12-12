<?php



/**
 * This class defines the structure of the 'referrer' table.
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
class Oops_Db_ReferrerTableMap extends TableMap
{

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'prestashop.map.Oops_Db_ReferrerTableMap';

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
		$this->setName(_DB_PREFIX_ . 'referrer');
		$this->setPhpName('Referrer');
		$this->setClassname('Oops_Db_Referrer');
		$this->setPackage('prestashop');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID_REFERRER', 'IdReferrer', 'INTEGER', true, 10, null);
		$this->addColumn('NAME', 'Name', 'VARCHAR', true, 64, null);
		$this->addColumn('PASSWD', 'Passwd', 'VARCHAR', false, 32, null);
		$this->addColumn('HTTP_REFERER_REGEXP', 'HttpRefererRegexp', 'VARCHAR', false, 64, null);
		$this->addColumn('HTTP_REFERER_LIKE', 'HttpRefererLike', 'VARCHAR', false, 64, null);
		$this->addColumn('REQUEST_URI_REGEXP', 'RequestUriRegexp', 'VARCHAR', false, 64, null);
		$this->addColumn('REQUEST_URI_LIKE', 'RequestUriLike', 'VARCHAR', false, 64, null);
		$this->addColumn('HTTP_REFERER_REGEXP_NOT', 'HttpRefererRegexpNot', 'VARCHAR', false, 64, null);
		$this->addColumn('HTTP_REFERER_LIKE_NOT', 'HttpRefererLikeNot', 'VARCHAR', false, 64, null);
		$this->addColumn('REQUEST_URI_REGEXP_NOT', 'RequestUriRegexpNot', 'VARCHAR', false, 64, null);
		$this->addColumn('REQUEST_URI_LIKE_NOT', 'RequestUriLikeNot', 'VARCHAR', false, 64, null);
		$this->addColumn('BASE_FEE', 'BaseFee', 'DECIMAL', true, 5, 0);
		$this->addColumn('PERCENT_FEE', 'PercentFee', 'DECIMAL', true, 5, 0);
		$this->addColumn('CLICK_FEE', 'ClickFee', 'DECIMAL', true, 5, 0);
		$this->addColumn('CACHE_VISITORS', 'CacheVisitors', 'INTEGER', false, null, null);
		$this->addColumn('CACHE_VISITS', 'CacheVisits', 'INTEGER', false, null, null);
		$this->addColumn('CACHE_PAGES', 'CachePages', 'INTEGER', false, null, null);
		$this->addColumn('CACHE_REGISTRATIONS', 'CacheRegistrations', 'INTEGER', false, null, null);
		$this->addColumn('CACHE_ORDERS', 'CacheOrders', 'INTEGER', false, null, null);
		$this->addColumn('CACHE_SALES', 'CacheSales', 'DECIMAL', false, 17, null);
		$this->addColumn('CACHE_REG_RATE', 'CacheRegRate', 'DECIMAL', false, 5, null);
		$this->addColumn('CACHE_ORDER_RATE', 'CacheOrderRate', 'DECIMAL', false, 5, null);
		$this->addColumn('DATE_ADD', 'DateAdd', 'TIMESTAMP', true, null, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
	} // buildRelations()

} // Oops_Db_ReferrerTableMap
