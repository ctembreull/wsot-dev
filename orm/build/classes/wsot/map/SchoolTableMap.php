<?php



/**
 * This class defines the structure of the 'schools' table.
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
class SchoolTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'wsot.map.SchoolTableMap';

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
		$this->setName('schools');
		$this->setPhpName('School');
		$this->setClassname('School');
		$this->setPackage('wsot');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID', 'Id', 'INTEGER', true, null, null);
		$this->addForeignKey('DISTRICT_ID', 'DistrictId', 'INTEGER', 'districts', 'ID', true, null, null);
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
		$this->addColumn('ESTABLISHED', 'Established', 'DATE', false, null, null);
		$this->addColumn('POPULATION', 'Population', 'INTEGER', false, null, null);
		$this->addColumn('POPULATION_DATE', 'PopulationDate', 'DATE', false, null, null);
		$this->addColumn('FACULTY', 'Faculty', 'INTEGER', false, null, null);
		$this->addColumn('FACULTY_DATE', 'FacultyDate', 'DATE', false, null, null);
		$this->addColumn('CLASS_SIZE', 'ClassSize', 'INTEGER', false, null, null);
		$this->addColumn('CLASS_SIZE_DATE', 'ClassSizeDate', 'INTEGER', false, null, null);
		$this->addColumn('ACTIVE', 'Active', 'BOOLEAN', true, null, false);
		$this->addColumn('ELEMENTARY', 'Elementary', 'BOOLEAN', true, null, false);
		$this->addColumn('MIDDLE', 'Middle', 'BOOLEAN', true, null, false);
		$this->addColumn('SECONDARY', 'Secondary', 'BOOLEAN', true, null, false);
		$this->addColumn('ALTERNATIVE', 'Alternative', 'BOOLEAN', true, null, false);
		$this->addColumn('PUBLIC_SCHOOL', 'PublicSchool', 'BOOLEAN', true, null, false);
		$this->addColumn('PRIVATE_SCHOOL', 'PrivateSchool', 'BOOLEAN', true, null, false);
		$this->addColumn('PAROCHIAL', 'Parochial', 'BOOLEAN', true, null, false);
		$this->addColumn('INDIAN_AFFAIRS', 'IndianAffairs', 'BOOLEAN', true, null, false);
		$this->addColumn('INDEPENDENT', 'Independent', 'BOOLEAN', true, null, false);
		$this->addColumn('MAGNET', 'Magnet', 'BOOLEAN', true, null, false);
		$this->addColumn('CHARTER', 'Charter', 'BOOLEAN', true, null, false);
		$this->addColumn('GRADE_MIN', 'GradeMin', 'VARCHAR', false, 64, null);
		$this->addColumn('GRADE_MAX', 'GradeMax', 'VARCHAR', false, 64, null);
		$this->addColumn('CREATED_AT', 'CreatedAt', 'TIMESTAMP', true, null, null);
		$this->addColumn('MODIFIED_AT', 'ModifiedAt', 'TIMESTAMP', true, null, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
    $this->addRelation('District', 'District', RelationMap::MANY_TO_ONE, array('district_id' => 'id', ), null, null);
    $this->addRelation('Nomination', 'Nomination', RelationMap::ONE_TO_MANY, array('id' => 'school_id', ), null, null);
	} // buildRelations()

} // SchoolTableMap
