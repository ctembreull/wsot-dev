<?php


/**
 * Base static class for performing query and update operations on the 'schools' table.
 *
 * 
 *
 * @package    propel.generator.wsot.om
 */
abstract class BaseSchoolPeer {

	/** the default database name for this class */
	const DATABASE_NAME = 'wsot';

	/** the table name for this class */
	const TABLE_NAME = 'schools';

	/** the related Propel class for this table */
	const OM_CLASS = 'School';

	/** A class that can be returned by this peer. */
	const CLASS_DEFAULT = 'wsot.School';

	/** the related TableMap class for this table */
	const TM_CLASS = 'SchoolTableMap';
	
	/** The total number of columns. */
	const NUM_COLUMNS = 36;

	/** The number of lazy-loaded columns. */
	const NUM_LAZY_LOAD_COLUMNS = 0;

	/** the column name for the ID field */
	const ID = 'schools.ID';

	/** the column name for the DISTRICT_ID field */
	const DISTRICT_ID = 'schools.DISTRICT_ID';

	/** the column name for the NAME field */
	const NAME = 'schools.NAME';

	/** the column name for the ADDRESS1 field */
	const ADDRESS1 = 'schools.ADDRESS1';

	/** the column name for the ADDRESS2 field */
	const ADDRESS2 = 'schools.ADDRESS2';

	/** the column name for the CITY field */
	const CITY = 'schools.CITY';

	/** the column name for the STATE field */
	const STATE = 'schools.STATE';

	/** the column name for the COUNTRY field */
	const COUNTRY = 'schools.COUNTRY';

	/** the column name for the POSTCODE field */
	const POSTCODE = 'schools.POSTCODE';

	/** the column name for the PHONE field */
	const PHONE = 'schools.PHONE';

	/** the column name for the FAX field */
	const FAX = 'schools.FAX';

	/** the column name for the EMAIL field */
	const EMAIL = 'schools.EMAIL';

	/** the column name for the URL field */
	const URL = 'schools.URL';

	/** the column name for the ESTABLISHED field */
	const ESTABLISHED = 'schools.ESTABLISHED';

	/** the column name for the POPULATION field */
	const POPULATION = 'schools.POPULATION';

	/** the column name for the POPULATION_DATE field */
	const POPULATION_DATE = 'schools.POPULATION_DATE';

	/** the column name for the FACULTY field */
	const FACULTY = 'schools.FACULTY';

	/** the column name for the FACULTY_DATE field */
	const FACULTY_DATE = 'schools.FACULTY_DATE';

	/** the column name for the CLASS_SIZE field */
	const CLASS_SIZE = 'schools.CLASS_SIZE';

	/** the column name for the CLASS_SIZE_DATE field */
	const CLASS_SIZE_DATE = 'schools.CLASS_SIZE_DATE';

	/** the column name for the ACTIVE field */
	const ACTIVE = 'schools.ACTIVE';

	/** the column name for the ELEMENTARY field */
	const ELEMENTARY = 'schools.ELEMENTARY';

	/** the column name for the MIDDLE field */
	const MIDDLE = 'schools.MIDDLE';

	/** the column name for the SECONDARY field */
	const SECONDARY = 'schools.SECONDARY';

	/** the column name for the ALTERNATIVE field */
	const ALTERNATIVE = 'schools.ALTERNATIVE';

	/** the column name for the PUBLIC_SCHOOL field */
	const PUBLIC_SCHOOL = 'schools.PUBLIC_SCHOOL';

	/** the column name for the PRIVATE_SCHOOL field */
	const PRIVATE_SCHOOL = 'schools.PRIVATE_SCHOOL';

	/** the column name for the PAROCHIAL field */
	const PAROCHIAL = 'schools.PAROCHIAL';

	/** the column name for the INDIAN_AFFAIRS field */
	const INDIAN_AFFAIRS = 'schools.INDIAN_AFFAIRS';

	/** the column name for the INDEPENDENT field */
	const INDEPENDENT = 'schools.INDEPENDENT';

	/** the column name for the MAGNET field */
	const MAGNET = 'schools.MAGNET';

	/** the column name for the CHARTER field */
	const CHARTER = 'schools.CHARTER';

	/** the column name for the GRADE_MIN field */
	const GRADE_MIN = 'schools.GRADE_MIN';

	/** the column name for the GRADE_MAX field */
	const GRADE_MAX = 'schools.GRADE_MAX';

	/** the column name for the CREATED_AT field */
	const CREATED_AT = 'schools.CREATED_AT';

	/** the column name for the MODIFIED_AT field */
	const MODIFIED_AT = 'schools.MODIFIED_AT';

	/**
	 * An identiy map to hold any loaded instances of School objects.
	 * This must be public so that other peer classes can access this when hydrating from JOIN
	 * queries.
	 * @var        array School[]
	 */
	public static $instances = array();


	/**
	 * holds an array of fieldnames
	 *
	 * first dimension keys are the type constants
	 * e.g. self::$fieldNames[self::TYPE_PHPNAME][0] = 'Id'
	 */
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Id', 'DistrictId', 'Name', 'Address1', 'Address2', 'City', 'State', 'Country', 'Postcode', 'Phone', 'Fax', 'Email', 'Url', 'Established', 'Population', 'PopulationDate', 'Faculty', 'FacultyDate', 'ClassSize', 'ClassSizeDate', 'Active', 'Elementary', 'Middle', 'Secondary', 'Alternative', 'PublicSchool', 'PrivateSchool', 'Parochial', 'IndianAffairs', 'Independent', 'Magnet', 'Charter', 'GradeMin', 'GradeMax', 'CreatedAt', 'ModifiedAt', ),
		BasePeer::TYPE_STUDLYPHPNAME => array ('id', 'districtId', 'name', 'address1', 'address2', 'city', 'state', 'country', 'postcode', 'phone', 'fax', 'email', 'url', 'established', 'population', 'populationDate', 'faculty', 'facultyDate', 'classSize', 'classSizeDate', 'active', 'elementary', 'middle', 'secondary', 'alternative', 'publicSchool', 'privateSchool', 'parochial', 'indianAffairs', 'independent', 'magnet', 'charter', 'gradeMin', 'gradeMax', 'createdAt', 'modifiedAt', ),
		BasePeer::TYPE_COLNAME => array (self::ID, self::DISTRICT_ID, self::NAME, self::ADDRESS1, self::ADDRESS2, self::CITY, self::STATE, self::COUNTRY, self::POSTCODE, self::PHONE, self::FAX, self::EMAIL, self::URL, self::ESTABLISHED, self::POPULATION, self::POPULATION_DATE, self::FACULTY, self::FACULTY_DATE, self::CLASS_SIZE, self::CLASS_SIZE_DATE, self::ACTIVE, self::ELEMENTARY, self::MIDDLE, self::SECONDARY, self::ALTERNATIVE, self::PUBLIC_SCHOOL, self::PRIVATE_SCHOOL, self::PAROCHIAL, self::INDIAN_AFFAIRS, self::INDEPENDENT, self::MAGNET, self::CHARTER, self::GRADE_MIN, self::GRADE_MAX, self::CREATED_AT, self::MODIFIED_AT, ),
		BasePeer::TYPE_RAW_COLNAME => array ('ID', 'DISTRICT_ID', 'NAME', 'ADDRESS1', 'ADDRESS2', 'CITY', 'STATE', 'COUNTRY', 'POSTCODE', 'PHONE', 'FAX', 'EMAIL', 'URL', 'ESTABLISHED', 'POPULATION', 'POPULATION_DATE', 'FACULTY', 'FACULTY_DATE', 'CLASS_SIZE', 'CLASS_SIZE_DATE', 'ACTIVE', 'ELEMENTARY', 'MIDDLE', 'SECONDARY', 'ALTERNATIVE', 'PUBLIC_SCHOOL', 'PRIVATE_SCHOOL', 'PAROCHIAL', 'INDIAN_AFFAIRS', 'INDEPENDENT', 'MAGNET', 'CHARTER', 'GRADE_MIN', 'GRADE_MAX', 'CREATED_AT', 'MODIFIED_AT', ),
		BasePeer::TYPE_FIELDNAME => array ('id', 'district_id', 'name', 'address1', 'address2', 'city', 'state', 'country', 'postcode', 'phone', 'fax', 'email', 'url', 'established', 'population', 'population_date', 'faculty', 'faculty_date', 'class_size', 'class_size_date', 'active', 'elementary', 'middle', 'secondary', 'alternative', 'public_school', 'private_school', 'parochial', 'indian_affairs', 'independent', 'magnet', 'charter', 'grade_min', 'grade_max', 'created_at', 'modified_at', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, )
	);

	/**
	 * holds an array of keys for quick access to the fieldnames array
	 *
	 * first dimension keys are the type constants
	 * e.g. self::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
	 */
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'DistrictId' => 1, 'Name' => 2, 'Address1' => 3, 'Address2' => 4, 'City' => 5, 'State' => 6, 'Country' => 7, 'Postcode' => 8, 'Phone' => 9, 'Fax' => 10, 'Email' => 11, 'Url' => 12, 'Established' => 13, 'Population' => 14, 'PopulationDate' => 15, 'Faculty' => 16, 'FacultyDate' => 17, 'ClassSize' => 18, 'ClassSizeDate' => 19, 'Active' => 20, 'Elementary' => 21, 'Middle' => 22, 'Secondary' => 23, 'Alternative' => 24, 'PublicSchool' => 25, 'PrivateSchool' => 26, 'Parochial' => 27, 'IndianAffairs' => 28, 'Independent' => 29, 'Magnet' => 30, 'Charter' => 31, 'GradeMin' => 32, 'GradeMax' => 33, 'CreatedAt' => 34, 'ModifiedAt' => 35, ),
		BasePeer::TYPE_STUDLYPHPNAME => array ('id' => 0, 'districtId' => 1, 'name' => 2, 'address1' => 3, 'address2' => 4, 'city' => 5, 'state' => 6, 'country' => 7, 'postcode' => 8, 'phone' => 9, 'fax' => 10, 'email' => 11, 'url' => 12, 'established' => 13, 'population' => 14, 'populationDate' => 15, 'faculty' => 16, 'facultyDate' => 17, 'classSize' => 18, 'classSizeDate' => 19, 'active' => 20, 'elementary' => 21, 'middle' => 22, 'secondary' => 23, 'alternative' => 24, 'publicSchool' => 25, 'privateSchool' => 26, 'parochial' => 27, 'indianAffairs' => 28, 'independent' => 29, 'magnet' => 30, 'charter' => 31, 'gradeMin' => 32, 'gradeMax' => 33, 'createdAt' => 34, 'modifiedAt' => 35, ),
		BasePeer::TYPE_COLNAME => array (self::ID => 0, self::DISTRICT_ID => 1, self::NAME => 2, self::ADDRESS1 => 3, self::ADDRESS2 => 4, self::CITY => 5, self::STATE => 6, self::COUNTRY => 7, self::POSTCODE => 8, self::PHONE => 9, self::FAX => 10, self::EMAIL => 11, self::URL => 12, self::ESTABLISHED => 13, self::POPULATION => 14, self::POPULATION_DATE => 15, self::FACULTY => 16, self::FACULTY_DATE => 17, self::CLASS_SIZE => 18, self::CLASS_SIZE_DATE => 19, self::ACTIVE => 20, self::ELEMENTARY => 21, self::MIDDLE => 22, self::SECONDARY => 23, self::ALTERNATIVE => 24, self::PUBLIC_SCHOOL => 25, self::PRIVATE_SCHOOL => 26, self::PAROCHIAL => 27, self::INDIAN_AFFAIRS => 28, self::INDEPENDENT => 29, self::MAGNET => 30, self::CHARTER => 31, self::GRADE_MIN => 32, self::GRADE_MAX => 33, self::CREATED_AT => 34, self::MODIFIED_AT => 35, ),
		BasePeer::TYPE_RAW_COLNAME => array ('ID' => 0, 'DISTRICT_ID' => 1, 'NAME' => 2, 'ADDRESS1' => 3, 'ADDRESS2' => 4, 'CITY' => 5, 'STATE' => 6, 'COUNTRY' => 7, 'POSTCODE' => 8, 'PHONE' => 9, 'FAX' => 10, 'EMAIL' => 11, 'URL' => 12, 'ESTABLISHED' => 13, 'POPULATION' => 14, 'POPULATION_DATE' => 15, 'FACULTY' => 16, 'FACULTY_DATE' => 17, 'CLASS_SIZE' => 18, 'CLASS_SIZE_DATE' => 19, 'ACTIVE' => 20, 'ELEMENTARY' => 21, 'MIDDLE' => 22, 'SECONDARY' => 23, 'ALTERNATIVE' => 24, 'PUBLIC_SCHOOL' => 25, 'PRIVATE_SCHOOL' => 26, 'PAROCHIAL' => 27, 'INDIAN_AFFAIRS' => 28, 'INDEPENDENT' => 29, 'MAGNET' => 30, 'CHARTER' => 31, 'GRADE_MIN' => 32, 'GRADE_MAX' => 33, 'CREATED_AT' => 34, 'MODIFIED_AT' => 35, ),
		BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'district_id' => 1, 'name' => 2, 'address1' => 3, 'address2' => 4, 'city' => 5, 'state' => 6, 'country' => 7, 'postcode' => 8, 'phone' => 9, 'fax' => 10, 'email' => 11, 'url' => 12, 'established' => 13, 'population' => 14, 'population_date' => 15, 'faculty' => 16, 'faculty_date' => 17, 'class_size' => 18, 'class_size_date' => 19, 'active' => 20, 'elementary' => 21, 'middle' => 22, 'secondary' => 23, 'alternative' => 24, 'public_school' => 25, 'private_school' => 26, 'parochial' => 27, 'indian_affairs' => 28, 'independent' => 29, 'magnet' => 30, 'charter' => 31, 'grade_min' => 32, 'grade_max' => 33, 'created_at' => 34, 'modified_at' => 35, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, )
	);

	/**
	 * Translates a fieldname to another type
	 *
	 * @param      string $name field name
	 * @param      string $fromType One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
	 *                         BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
	 * @param      string $toType   One of the class type constants
	 * @return     string translated name of the field.
	 * @throws     PropelException - if the specified name could not be found in the fieldname mappings.
	 */
	static public function translateFieldName($name, $fromType, $toType)
	{
		$toNames = self::getFieldNames($toType);
		$key = isset(self::$fieldKeys[$fromType][$name]) ? self::$fieldKeys[$fromType][$name] : null;
		if ($key === null) {
			throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(self::$fieldKeys[$fromType], true));
		}
		return $toNames[$key];
	}

	/**
	 * Returns an array of field names.
	 *
	 * @param      string $type The type of fieldnames to return:
	 *                      One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
	 *                      BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
	 * @return     array A list of field names
	 */

	static public function getFieldNames($type = BasePeer::TYPE_PHPNAME)
	{
		if (!array_key_exists($type, self::$fieldNames)) {
			throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
		}
		return self::$fieldNames[$type];
	}

	/**
	 * Convenience method which changes table.column to alias.column.
	 *
	 * Using this method you can maintain SQL abstraction while using column aliases.
	 * <code>
	 *		$c->addAlias("alias1", TablePeer::TABLE_NAME);
	 *		$c->addJoin(TablePeer::alias("alias1", TablePeer::PRIMARY_KEY_COLUMN), TablePeer::PRIMARY_KEY_COLUMN);
	 * </code>
	 * @param      string $alias The alias for the current table.
	 * @param      string $column The column name for current table. (i.e. SchoolPeer::COLUMN_NAME).
	 * @return     string
	 */
	public static function alias($alias, $column)
	{
		return str_replace(SchoolPeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	/**
	 * Add all the columns needed to create a new object.
	 *
	 * Note: any columns that were marked with lazyLoad="true" in the
	 * XML schema will not be added to the select list and only loaded
	 * on demand.
	 *
	 * @param      Criteria $criteria object containing the columns to add.
	 * @param      string   $alias    optional table alias
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function addSelectColumns(Criteria $criteria, $alias = null)
	{
		if (null === $alias) {
			$criteria->addSelectColumn(SchoolPeer::ID);
			$criteria->addSelectColumn(SchoolPeer::DISTRICT_ID);
			$criteria->addSelectColumn(SchoolPeer::NAME);
			$criteria->addSelectColumn(SchoolPeer::ADDRESS1);
			$criteria->addSelectColumn(SchoolPeer::ADDRESS2);
			$criteria->addSelectColumn(SchoolPeer::CITY);
			$criteria->addSelectColumn(SchoolPeer::STATE);
			$criteria->addSelectColumn(SchoolPeer::COUNTRY);
			$criteria->addSelectColumn(SchoolPeer::POSTCODE);
			$criteria->addSelectColumn(SchoolPeer::PHONE);
			$criteria->addSelectColumn(SchoolPeer::FAX);
			$criteria->addSelectColumn(SchoolPeer::EMAIL);
			$criteria->addSelectColumn(SchoolPeer::URL);
			$criteria->addSelectColumn(SchoolPeer::ESTABLISHED);
			$criteria->addSelectColumn(SchoolPeer::POPULATION);
			$criteria->addSelectColumn(SchoolPeer::POPULATION_DATE);
			$criteria->addSelectColumn(SchoolPeer::FACULTY);
			$criteria->addSelectColumn(SchoolPeer::FACULTY_DATE);
			$criteria->addSelectColumn(SchoolPeer::CLASS_SIZE);
			$criteria->addSelectColumn(SchoolPeer::CLASS_SIZE_DATE);
			$criteria->addSelectColumn(SchoolPeer::ACTIVE);
			$criteria->addSelectColumn(SchoolPeer::ELEMENTARY);
			$criteria->addSelectColumn(SchoolPeer::MIDDLE);
			$criteria->addSelectColumn(SchoolPeer::SECONDARY);
			$criteria->addSelectColumn(SchoolPeer::ALTERNATIVE);
			$criteria->addSelectColumn(SchoolPeer::PUBLIC_SCHOOL);
			$criteria->addSelectColumn(SchoolPeer::PRIVATE_SCHOOL);
			$criteria->addSelectColumn(SchoolPeer::PAROCHIAL);
			$criteria->addSelectColumn(SchoolPeer::INDIAN_AFFAIRS);
			$criteria->addSelectColumn(SchoolPeer::INDEPENDENT);
			$criteria->addSelectColumn(SchoolPeer::MAGNET);
			$criteria->addSelectColumn(SchoolPeer::CHARTER);
			$criteria->addSelectColumn(SchoolPeer::GRADE_MIN);
			$criteria->addSelectColumn(SchoolPeer::GRADE_MAX);
			$criteria->addSelectColumn(SchoolPeer::CREATED_AT);
			$criteria->addSelectColumn(SchoolPeer::MODIFIED_AT);
		} else {
			$criteria->addSelectColumn($alias . '.ID');
			$criteria->addSelectColumn($alias . '.DISTRICT_ID');
			$criteria->addSelectColumn($alias . '.NAME');
			$criteria->addSelectColumn($alias . '.ADDRESS1');
			$criteria->addSelectColumn($alias . '.ADDRESS2');
			$criteria->addSelectColumn($alias . '.CITY');
			$criteria->addSelectColumn($alias . '.STATE');
			$criteria->addSelectColumn($alias . '.COUNTRY');
			$criteria->addSelectColumn($alias . '.POSTCODE');
			$criteria->addSelectColumn($alias . '.PHONE');
			$criteria->addSelectColumn($alias . '.FAX');
			$criteria->addSelectColumn($alias . '.EMAIL');
			$criteria->addSelectColumn($alias . '.URL');
			$criteria->addSelectColumn($alias . '.ESTABLISHED');
			$criteria->addSelectColumn($alias . '.POPULATION');
			$criteria->addSelectColumn($alias . '.POPULATION_DATE');
			$criteria->addSelectColumn($alias . '.FACULTY');
			$criteria->addSelectColumn($alias . '.FACULTY_DATE');
			$criteria->addSelectColumn($alias . '.CLASS_SIZE');
			$criteria->addSelectColumn($alias . '.CLASS_SIZE_DATE');
			$criteria->addSelectColumn($alias . '.ACTIVE');
			$criteria->addSelectColumn($alias . '.ELEMENTARY');
			$criteria->addSelectColumn($alias . '.MIDDLE');
			$criteria->addSelectColumn($alias . '.SECONDARY');
			$criteria->addSelectColumn($alias . '.ALTERNATIVE');
			$criteria->addSelectColumn($alias . '.PUBLIC_SCHOOL');
			$criteria->addSelectColumn($alias . '.PRIVATE_SCHOOL');
			$criteria->addSelectColumn($alias . '.PAROCHIAL');
			$criteria->addSelectColumn($alias . '.INDIAN_AFFAIRS');
			$criteria->addSelectColumn($alias . '.INDEPENDENT');
			$criteria->addSelectColumn($alias . '.MAGNET');
			$criteria->addSelectColumn($alias . '.CHARTER');
			$criteria->addSelectColumn($alias . '.GRADE_MIN');
			$criteria->addSelectColumn($alias . '.GRADE_MAX');
			$criteria->addSelectColumn($alias . '.CREATED_AT');
			$criteria->addSelectColumn($alias . '.MODIFIED_AT');
		}
	}

	/**
	 * Returns the number of rows matching criteria.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @return     int Number of matching rows.
	 */
	public static function doCount(Criteria $criteria, $distinct = false, PropelPDO $con = null)
	{
		// we may modify criteria, so copy it first
		$criteria = clone $criteria;

		// We need to set the primary table name, since in the case that there are no WHERE columns
		// it will be impossible for the BasePeer::createSelectSql() method to determine which
		// tables go into the FROM clause.
		$criteria->setPrimaryTableName(SchoolPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			SchoolPeer::addSelectColumns($criteria);
		}

		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
		$criteria->setDbName(self::DATABASE_NAME); // Set the correct dbName

		if ($con === null) {
			$con = Propel::getConnection(SchoolPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}
		// BasePeer returns a PDOStatement
		$stmt = BasePeer::doCount($criteria, $con);

		if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$count = (int) $row[0];
		} else {
			$count = 0; // no rows returned; we infer that means 0 matches.
		}
		$stmt->closeCursor();
		return $count;
	}
	/**
	 * Method to select one object from the DB.
	 *
	 * @param      Criteria $criteria object used to create the SELECT statement.
	 * @param      PropelPDO $con
	 * @return     School
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
	{
		$critcopy = clone $criteria;
		$critcopy->setLimit(1);
		$objects = SchoolPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	/**
	 * Method to do selects.
	 *
	 * @param      Criteria $criteria The Criteria object used to build the SELECT statement.
	 * @param      PropelPDO $con
	 * @return     array Array of selected Objects
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelect(Criteria $criteria, PropelPDO $con = null)
	{
		return SchoolPeer::populateObjects(SchoolPeer::doSelectStmt($criteria, $con));
	}
	/**
	 * Prepares the Criteria object and uses the parent doSelect() method to execute a PDOStatement.
	 *
	 * Use this method directly if you want to work with an executed statement durirectly (for example
	 * to perform your own object hydration).
	 *
	 * @param      Criteria $criteria The Criteria object used to build the SELECT statement.
	 * @param      PropelPDO $con The connection to use
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 * @return     PDOStatement The executed PDOStatement object.
	 * @see        BasePeer::doSelect()
	 */
	public static function doSelectStmt(Criteria $criteria, PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(SchoolPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		if (!$criteria->hasSelectClause()) {
			$criteria = clone $criteria;
			SchoolPeer::addSelectColumns($criteria);
		}

		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		// BasePeer returns a PDOStatement
		return BasePeer::doSelect($criteria, $con);
	}
	/**
	 * Adds an object to the instance pool.
	 *
	 * Propel keeps cached copies of objects in an instance pool when they are retrieved
	 * from the database.  In some cases -- especially when you override doSelect*()
	 * methods in your stub classes -- you may need to explicitly add objects
	 * to the cache in order to ensure that the same objects are always returned by doSelect*()
	 * and retrieveByPK*() calls.
	 *
	 * @param      School $value A School object.
	 * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
	 */
	public static function addInstanceToPool(School $obj, $key = null)
	{
		if (Propel::isInstancePoolingEnabled()) {
			if ($key === null) {
				$key = (string) $obj->getId();
			} // if key === null
			self::$instances[$key] = $obj;
		}
	}

	/**
	 * Removes an object from the instance pool.
	 *
	 * Propel keeps cached copies of objects in an instance pool when they are retrieved
	 * from the database.  In some cases -- especially when you override doDelete
	 * methods in your stub classes -- you may need to explicitly remove objects
	 * from the cache in order to prevent returning objects that no longer exist.
	 *
	 * @param      mixed $value A School object or a primary key value.
	 */
	public static function removeInstanceFromPool($value)
	{
		if (Propel::isInstancePoolingEnabled() && $value !== null) {
			if (is_object($value) && $value instanceof School) {
				$key = (string) $value->getId();
			} elseif (is_scalar($value)) {
				// assume we've been passed a primary key
				$key = (string) $value;
			} else {
				$e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or School object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
				throw $e;
			}

			unset(self::$instances[$key]);
		}
	} // removeInstanceFromPool()

	/**
	 * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
	 *
	 * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
	 * a multi-column primary key, a serialize()d version of the primary key will be returned.
	 *
	 * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
	 * @return     School Found object or NULL if 1) no instance exists for specified key or 2) instance pooling has been disabled.
	 * @see        getPrimaryKeyHash()
	 */
	public static function getInstanceFromPool($key)
	{
		if (Propel::isInstancePoolingEnabled()) {
			if (isset(self::$instances[$key])) {
				return self::$instances[$key];
			}
		}
		return null; // just to be explicit
	}
	
	/**
	 * Clear the instance pool.
	 *
	 * @return     void
	 */
	public static function clearInstancePool()
	{
		self::$instances = array();
	}
	
	/**
	 * Method to invalidate the instance pool of all tables related to schools
	 * by a foreign key with ON DELETE CASCADE
	 */
	public static function clearRelatedInstancePool()
	{
	}

	/**
	 * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
	 *
	 * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
	 * a multi-column primary key, a serialize()d version of the primary key will be returned.
	 *
	 * @param      array $row PropelPDO resultset row.
	 * @param      int $startcol The 0-based offset for reading from the resultset row.
	 * @return     string A string version of PK or NULL if the components of primary key in result array are all null.
	 */
	public static function getPrimaryKeyHashFromRow($row, $startcol = 0)
	{
		// If the PK cannot be derived from the row, return NULL.
		if ($row[$startcol] === null) {
			return null;
		}
		return (string) $row[$startcol];
	}

	/**
	 * Retrieves the primary key from the DB resultset row 
	 * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
	 * a multi-column primary key, an array of the primary key columns will be returned.
	 *
	 * @param      array $row PropelPDO resultset row.
	 * @param      int $startcol The 0-based offset for reading from the resultset row.
	 * @return     mixed The primary key of the row
	 */
	public static function getPrimaryKeyFromRow($row, $startcol = 0)
	{
		return (int) $row[$startcol];
	}
	
	/**
	 * The returned array will contain objects of the default type or
	 * objects that inherit from the default.
	 *
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function populateObjects(PDOStatement $stmt)
	{
		$results = array();
	
		// set the class once to avoid overhead in the loop
		$cls = SchoolPeer::getOMClass(false);
		// populate the object(s)
		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key = SchoolPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj = SchoolPeer::getInstanceFromPool($key))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj->hydrate($row, 0, true); // rehydrate
				$results[] = $obj;
			} else {
				$obj = new $cls();
				$obj->hydrate($row);
				$results[] = $obj;
				SchoolPeer::addInstanceToPool($obj, $key);
			} // if key exists
		}
		$stmt->closeCursor();
		return $results;
	}
	/**
	 * Populates an object of the default type or an object that inherit from the default.
	 *
	 * @param      array $row PropelPDO resultset row.
	 * @param      int $startcol The 0-based offset for reading from the resultset row.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 * @return     array (School object, last column rank)
	 */
	public static function populateObject($row, $startcol = 0)
	{
		$key = SchoolPeer::getPrimaryKeyHashFromRow($row, $startcol);
		if (null !== ($obj = SchoolPeer::getInstanceFromPool($key))) {
			// We no longer rehydrate the object, since this can cause data loss.
			// See http://www.propelorm.org/ticket/509
			// $obj->hydrate($row, $startcol, true); // rehydrate
			$col = $startcol + SchoolPeer::NUM_COLUMNS;
		} else {
			$cls = SchoolPeer::OM_CLASS;
			$obj = new $cls();
			$col = $obj->hydrate($row, $startcol);
			SchoolPeer::addInstanceToPool($obj, $key);
		}
		return array($obj, $col);
	}

	/**
	 * Returns the number of rows matching criteria, joining the related District table
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     int Number of matching rows.
	 */
	public static function doCountJoinDistrict(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		// we're going to modify criteria, so copy it first
		$criteria = clone $criteria;

		// We need to set the primary table name, since in the case that there are no WHERE columns
		// it will be impossible for the BasePeer::createSelectSql() method to determine which
		// tables go into the FROM clause.
		$criteria->setPrimaryTableName(SchoolPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			SchoolPeer::addSelectColumns($criteria);
		}
		
		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
		
		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(SchoolPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria->addJoin(SchoolPeer::DISTRICT_ID, DistrictPeer::ID, $join_behavior);

		$stmt = BasePeer::doCount($criteria, $con);

		if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$count = (int) $row[0];
		} else {
			$count = 0; // no rows returned; we infer that means 0 matches.
		}
		$stmt->closeCursor();
		return $count;
	}


	/**
	 * Selects a collection of School objects pre-filled with their District objects.
	 * @param      Criteria  $criteria
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of School objects.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectJoinDistrict(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$criteria = clone $criteria;

		// Set the correct dbName if it has not been overridden
		if ($criteria->getDbName() == Propel::getDefaultDB()) {
			$criteria->setDbName(self::DATABASE_NAME);
		}

		SchoolPeer::addSelectColumns($criteria);
		$startcol = (SchoolPeer::NUM_COLUMNS - SchoolPeer::NUM_LAZY_LOAD_COLUMNS);
		DistrictPeer::addSelectColumns($criteria);

		$criteria->addJoin(SchoolPeer::DISTRICT_ID, DistrictPeer::ID, $join_behavior);

		$stmt = BasePeer::doSelect($criteria, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = SchoolPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = SchoolPeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {

				$cls = SchoolPeer::getOMClass(false);

				$obj1 = new $cls();
				$obj1->hydrate($row);
				SchoolPeer::addInstanceToPool($obj1, $key1);
			} // if $obj1 already loaded

			$key2 = DistrictPeer::getPrimaryKeyHashFromRow($row, $startcol);
			if ($key2 !== null) {
				$obj2 = DistrictPeer::getInstanceFromPool($key2);
				if (!$obj2) {

					$cls = DistrictPeer::getOMClass(false);

					$obj2 = new $cls();
					$obj2->hydrate($row, $startcol);
					DistrictPeer::addInstanceToPool($obj2, $key2);
				} // if obj2 already loaded

				// Add the $obj1 (School) to $obj2 (District)
				$obj2->addSchool($obj1);

			} // if joined row was not null

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
	}


	/**
	 * Returns the number of rows matching criteria, joining all related tables
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     int Number of matching rows.
	 */
	public static function doCountJoinAll(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		// we're going to modify criteria, so copy it first
		$criteria = clone $criteria;

		// We need to set the primary table name, since in the case that there are no WHERE columns
		// it will be impossible for the BasePeer::createSelectSql() method to determine which
		// tables go into the FROM clause.
		$criteria->setPrimaryTableName(SchoolPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			SchoolPeer::addSelectColumns($criteria);
		}
		
		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
		
		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(SchoolPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria->addJoin(SchoolPeer::DISTRICT_ID, DistrictPeer::ID, $join_behavior);

		$stmt = BasePeer::doCount($criteria, $con);

		if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$count = (int) $row[0];
		} else {
			$count = 0; // no rows returned; we infer that means 0 matches.
		}
		$stmt->closeCursor();
		return $count;
	}

	/**
	 * Selects a collection of School objects pre-filled with all related objects.
	 *
	 * @param      Criteria  $criteria
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of School objects.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectJoinAll(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$criteria = clone $criteria;

		// Set the correct dbName if it has not been overridden
		if ($criteria->getDbName() == Propel::getDefaultDB()) {
			$criteria->setDbName(self::DATABASE_NAME);
		}

		SchoolPeer::addSelectColumns($criteria);
		$startcol2 = (SchoolPeer::NUM_COLUMNS - SchoolPeer::NUM_LAZY_LOAD_COLUMNS);

		DistrictPeer::addSelectColumns($criteria);
		$startcol3 = $startcol2 + (DistrictPeer::NUM_COLUMNS - DistrictPeer::NUM_LAZY_LOAD_COLUMNS);

		$criteria->addJoin(SchoolPeer::DISTRICT_ID, DistrictPeer::ID, $join_behavior);

		$stmt = BasePeer::doSelect($criteria, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = SchoolPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = SchoolPeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {
				$cls = SchoolPeer::getOMClass(false);

				$obj1 = new $cls();
				$obj1->hydrate($row);
				SchoolPeer::addInstanceToPool($obj1, $key1);
			} // if obj1 already loaded

			// Add objects for joined District rows

			$key2 = DistrictPeer::getPrimaryKeyHashFromRow($row, $startcol2);
			if ($key2 !== null) {
				$obj2 = DistrictPeer::getInstanceFromPool($key2);
				if (!$obj2) {

					$cls = DistrictPeer::getOMClass(false);

					$obj2 = new $cls();
					$obj2->hydrate($row, $startcol2);
					DistrictPeer::addInstanceToPool($obj2, $key2);
				} // if obj2 loaded

				// Add the $obj1 (School) to the collection in $obj2 (District)
				$obj2->addSchool($obj1);
			} // if joined row not null

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
	}

	/**
	 * Returns the TableMap related to this peer.
	 * This method is not needed for general use but a specific application could have a need.
	 * @return     TableMap
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function getTableMap()
	{
		return Propel::getDatabaseMap(self::DATABASE_NAME)->getTable(self::TABLE_NAME);
	}

	/**
	 * Add a TableMap instance to the database for this peer class.
	 */
	public static function buildTableMap()
	{
	  $dbMap = Propel::getDatabaseMap(BaseSchoolPeer::DATABASE_NAME);
	  if (!$dbMap->hasTable(BaseSchoolPeer::TABLE_NAME))
	  {
	    $dbMap->addTableObject(new SchoolTableMap());
	  }
	}

	/**
	 * The class that the Peer will make instances of.
	 *
	 * If $withPrefix is true, the returned path
	 * uses a dot-path notation which is tranalted into a path
	 * relative to a location on the PHP include_path.
	 * (e.g. path.to.MyClass -> 'path/to/MyClass.php')
	 *
	 * @param      boolean $withPrefix Whether or not to return the path with the class name
	 * @return     string path.to.ClassName
	 */
	public static function getOMClass($withPrefix = true)
	{
		return $withPrefix ? SchoolPeer::CLASS_DEFAULT : SchoolPeer::OM_CLASS;
	}

	/**
	 * Method perform an INSERT on the database, given a School or Criteria object.
	 *
	 * @param      mixed $values Criteria or School object containing data that is used to create the INSERT statement.
	 * @param      PropelPDO $con the PropelPDO connection to use
	 * @return     mixed The new primary key.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doInsert($values, PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(SchoolPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; // rename for clarity
		} else {
			$criteria = $values->buildCriteria(); // build Criteria from School object
		}

		if ($criteria->containsKey(SchoolPeer::ID) && $criteria->keyContainsValue(SchoolPeer::ID) ) {
			throw new PropelException('Cannot insert a value for auto-increment primary key ('.SchoolPeer::ID.')');
		}


		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		try {
			// use transaction because $criteria could contain info
			// for more than one table (I guess, conceivably)
			$con->beginTransaction();
			$pk = BasePeer::doInsert($criteria, $con);
			$con->commit();
		} catch(PropelException $e) {
			$con->rollBack();
			throw $e;
		}

		return $pk;
	}

	/**
	 * Method perform an UPDATE on the database, given a School or Criteria object.
	 *
	 * @param      mixed $values Criteria or School object containing data that is used to create the UPDATE statement.
	 * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
	 * @return     int The number of affected rows (if supported by underlying database driver).
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doUpdate($values, PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(SchoolPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$selectCriteria = new Criteria(self::DATABASE_NAME);

		if ($values instanceof Criteria) {
			$criteria = clone $values; // rename for clarity

			$comparison = $criteria->getComparison(SchoolPeer::ID);
			$value = $criteria->remove(SchoolPeer::ID);
			if ($value) {
				$selectCriteria->add(SchoolPeer::ID, $value, $comparison);
			} else {
				$selectCriteria->setPrimaryTableName(SchoolPeer::TABLE_NAME);
			}

		} else { // $values is School object
			$criteria = $values->buildCriteria(); // gets full criteria
			$selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
		}

		// set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		return BasePeer::doUpdate($selectCriteria, $criteria, $con);
	}

	/**
	 * Method to DELETE all rows from the schools table.
	 *
	 * @return     int The number of affected rows (if supported by underlying database driver).
	 */
	public static function doDeleteAll($con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(SchoolPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}
		$affectedRows = 0; // initialize var to track total num of affected rows
		try {
			// use transaction because $criteria could contain info
			// for more than one table or we could emulating ON DELETE CASCADE, etc.
			$con->beginTransaction();
			$affectedRows += BasePeer::doDeleteAll(SchoolPeer::TABLE_NAME, $con, SchoolPeer::DATABASE_NAME);
			// Because this db requires some delete cascade/set null emulation, we have to
			// clear the cached instance *after* the emulation has happened (since
			// instances get re-added by the select statement contained therein).
			SchoolPeer::clearInstancePool();
			SchoolPeer::clearRelatedInstancePool();
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Method perform a DELETE on the database, given a School or Criteria object OR a primary key value.
	 *
	 * @param      mixed $values Criteria or School object or primary key or array of primary keys
	 *              which is used to create the DELETE statement
	 * @param      PropelPDO $con the connection to use
	 * @return     int 	The number of affected rows (if supported by underlying database driver).  This includes CASCADE-related rows
	 *				if supported by native driver or if emulated using Propel.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	 public static function doDelete($values, PropelPDO $con = null)
	 {
		if ($con === null) {
			$con = Propel::getConnection(SchoolPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		if ($values instanceof Criteria) {
			// invalidate the cache for all objects of this type, since we have no
			// way of knowing (without running a query) what objects should be invalidated
			// from the cache based on this Criteria.
			SchoolPeer::clearInstancePool();
			// rename for clarity
			$criteria = clone $values;
		} elseif ($values instanceof School) { // it's a model object
			// invalidate the cache for this single object
			SchoolPeer::removeInstanceFromPool($values);
			// create criteria based on pk values
			$criteria = $values->buildPkeyCriteria();
		} else { // it's a primary key, or an array of pks
			$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(SchoolPeer::ID, (array) $values, Criteria::IN);
			// invalidate the cache for this object(s)
			foreach ((array) $values as $singleval) {
				SchoolPeer::removeInstanceFromPool($singleval);
			}
		}

		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		$affectedRows = 0; // initialize var to track total num of affected rows

		try {
			// use transaction because $criteria could contain info
			// for more than one table or we could emulating ON DELETE CASCADE, etc.
			$con->beginTransaction();
			
			$affectedRows += BasePeer::doDelete($criteria, $con);
			SchoolPeer::clearRelatedInstancePool();
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Validates all modified columns of given School object.
	 * If parameter $columns is either a single column name or an array of column names
	 * than only those columns are validated.
	 *
	 * NOTICE: This does not apply to primary or foreign keys for now.
	 *
	 * @param      School $obj The object to validate.
	 * @param      mixed $cols Column name or array of column names.
	 *
	 * @return     mixed TRUE if all columns are valid or the error message of the first invalid column.
	 */
	public static function doValidate(School $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(SchoolPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(SchoolPeer::TABLE_NAME);

			if (! is_array($cols)) {
				$cols = array($cols);
			}

			foreach ($cols as $colName) {
				if ($tableMap->containsColumn($colName)) {
					$get = 'get' . $tableMap->getColumn($colName)->getPhpName();
					$columns[$colName] = $obj->$get();
				}
			}
		} else {

		}

		return BasePeer::doValidate(SchoolPeer::DATABASE_NAME, SchoolPeer::TABLE_NAME, $columns);
	}

	/**
	 * Retrieve a single object by pkey.
	 *
	 * @param      int $pk the primary key.
	 * @param      PropelPDO $con the connection to use
	 * @return     School
	 */
	public static function retrieveByPK($pk, PropelPDO $con = null)
	{

		if (null !== ($obj = SchoolPeer::getInstanceFromPool((string) $pk))) {
			return $obj;
		}

		if ($con === null) {
			$con = Propel::getConnection(SchoolPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria = new Criteria(SchoolPeer::DATABASE_NAME);
		$criteria->add(SchoolPeer::ID, $pk);

		$v = SchoolPeer::doSelect($criteria, $con);

		return !empty($v) > 0 ? $v[0] : null;
	}

	/**
	 * Retrieve multiple objects by pkey.
	 *
	 * @param      array $pks List of primary keys
	 * @param      PropelPDO $con the connection to use
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function retrieveByPKs($pks, PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(SchoolPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$objs = null;
		if (empty($pks)) {
			$objs = array();
		} else {
			$criteria = new Criteria(SchoolPeer::DATABASE_NAME);
			$criteria->add(SchoolPeer::ID, $pks, Criteria::IN);
			$objs = SchoolPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} // BaseSchoolPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseSchoolPeer::buildTableMap();

