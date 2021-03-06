<?php



/**
 * This class defines the structure of the 'product_attachment' table.
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
class Oops_Db_ProductAttachmentTableMap extends TableMap
{

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'prestashop.map.Oops_Db_ProductAttachmentTableMap';

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
		$this->setName(_DB_PREFIX_ . 'product_attachment');
		$this->setPhpName('ProductAttachment');
		$this->setClassname('Oops_Db_ProductAttachment');
		$this->setPackage('prestashop');
		$this->setUseIdGenerator(false);
		// columns
		$this->addForeignPrimaryKey('ID_PRODUCT', 'IdProduct', 'INTEGER' , 'product', 'ID_PRODUCT', true, 10, null);
		$this->addForeignPrimaryKey('ID_ATTACHMENT', 'IdAttachment', 'INTEGER' , 'attachment', 'ID_ATTACHMENT', true, 10, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
		$this->addRelation('Product', 'Oops_Db_Product', RelationMap::MANY_TO_ONE, array('id_product' => 'id_product', ), null, null);
		$this->addRelation('Attachment', 'Oops_Db_Attachment', RelationMap::MANY_TO_ONE, array('id_attachment' => 'id_attachment', ), null, null);
	} // buildRelations()

} // Oops_Db_ProductAttachmentTableMap
