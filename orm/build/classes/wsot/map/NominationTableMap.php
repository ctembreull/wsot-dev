<?php



/**
 * This class defines the structure of the 'nominations' table.
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
class NominationTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'wsot.map.NominationTableMap';

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
		$this->setName('nominations');
		$this->setPhpName('Nomination');
		$this->setClassname('Nomination');
		$this->setPackage('wsot');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID', 'Id', 'INTEGER', true, null, null);
		$this->addColumn('USER_ID', 'UserId', 'INTEGER', true, null, null);
		$this->addForeignKey('SCHOOL_ID', 'SchoolId', 'INTEGER', 'schools', 'ID', true, null, null);
		$this->addColumn('SALUTATION', 'Salutation', 'VARCHAR', false, 64, null);
		$this->addColumn('FIRST_NAME', 'FirstName', 'VARCHAR', false, 64, null);
		$this->addColumn('LAST_NAME', 'LastName', 'VARCHAR', false, 64, null);
		$this->addColumn('GENDER', 'Gender', 'CHAR', false, 64, null);
		$this->addColumn('SUBJECT', 'Subject', 'VARCHAR', false, 64, null);
		$this->addColumn('GRADE_LEVEL', 'GradeLevel', 'VARCHAR', false, 64, null);
		$this->addColumn('STORY', 'Story', 'BLOB', false, null, null);
		$this->addColumn('POSTHUMOUS', 'Posthumous', 'BOOLEAN', true, null, false);
		$this->addColumn('FEATURED', 'Featured', 'BOOLEAN', true, null, false);
		$this->addColumn('PAID', 'Paid', 'BOOLEAN', true, null, false);
		$this->addColumn('CREATED_AT', 'CreatedAt', 'TIMESTAMP', true, null, null);
		$this->addColumn('MODIFIED_AT', 'ModifiedAt', 'TIMESTAMP', true, null, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
    $this->addRelation('School', 'School', RelationMap::MANY_TO_ONE, array('school_id' => 'id', ), null, null);
	} // buildRelations()

} // NominationTableMap
