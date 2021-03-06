<?php



/**
 * This class defines the structure of the 'districts' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator.wsot.map
 */
class DistrictTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'wsot.map.DistrictTableMap';

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
		$this->setName('districts');
		$this->setPhpName('District');
		$this->setClassname('District');
		$this->setPackage('wsot');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID', 'Id', 'INTEGER', true, null, null);
		$this->addColumn('NAME', 'Name', 'VARCHAR', true, 255, null);
		$this->addColumn('ADDRESS1', 'Address1', 'VARCHAR', false, 255, null);
		$this->addColumn('ADDRESS2', 'Address2', 'VARCHAR', false, 255, null);
		$this->addColumn('CITY', 'City', 'VARCHAR', false, 64, null);
		$this->addColumn('STATE', 'State', 'VARCHAR', false, 64, null);
		$this->addColumn('COUNTRY', 'Country', 'VARCHAR', false, 64, null);
		$this->addColumn('POSTCODE', 'Postcode', 'VARCHAR', false, 64, null);
		$this->addColumn('PHONE', 'Phone', 'VARCHAR', false, 64, null);
		$this->addColumn('FAX', 'Fax', 'VARCHAR', false, 64, null);
		$this->addColumn('EMAIL', 'Email', 'VARCHAR', false, 255, null);
		$this->addColumn('URL', 'Url', 'VARCHAR', false, 255, null);
		$this->addColumn('CREATED_AT', 'CreatedAt', 'TIMESTAMP', true, null, null);
		$this->addColumn('MODIFIED_AT', 'ModifiedAt', 'TIMESTAMP', true, null, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
    $this->addRelation('School', 'School', RelationMap::ONE_TO_MANY, array('id' => 'district_id', ), null, null);
	} // buildRelations()

} // DistrictTableMap
