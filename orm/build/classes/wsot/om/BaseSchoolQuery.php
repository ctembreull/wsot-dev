<?php


/**
 * Base class that represents a query for the 'schools' table.
 *
 * 
 *
 * @method     SchoolQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     SchoolQuery orderByDistrictId($order = Criteria::ASC) Order by the district_id column
 * @method     SchoolQuery orderByName($order = Criteria::ASC) Order by the name column
 * @method     SchoolQuery orderByAddress1($order = Criteria::ASC) Order by the address1 column
 * @method     SchoolQuery orderByAddress2($order = Criteria::ASC) Order by the address2 column
 * @method     SchoolQuery orderByCity($order = Criteria::ASC) Order by the city column
 * @method     SchoolQuery orderByState($order = Criteria::ASC) Order by the state column
 * @method     SchoolQuery orderByCountry($order = Criteria::ASC) Order by the country column
 * @method     SchoolQuery orderByPostcode($order = Criteria::ASC) Order by the postcode column
 * @method     SchoolQuery orderByPhone($order = Criteria::ASC) Order by the phone column
 * @method     SchoolQuery orderByFax($order = Criteria::ASC) Order by the fax column
 * @method     SchoolQuery orderByEmail($order = Criteria::ASC) Order by the email column
 * @method     SchoolQuery orderByUrl($order = Criteria::ASC) Order by the url column
 * @method     SchoolQuery orderByEstablished($order = Criteria::ASC) Order by the established column
 * @method     SchoolQuery orderByPopulation($order = Criteria::ASC) Order by the population column
 * @method     SchoolQuery orderByPopulationDate($order = Criteria::ASC) Order by the population_date column
 * @method     SchoolQuery orderByFaculty($order = Criteria::ASC) Order by the faculty column
 * @method     SchoolQuery orderByFacultyDate($order = Criteria::ASC) Order by the faculty_date column
 * @method     SchoolQuery orderByClassSize($order = Criteria::ASC) Order by the class_size column
 * @method     SchoolQuery orderByClassSizeDate($order = Criteria::ASC) Order by the class_size_date column
 * @method     SchoolQuery orderByActive($order = Criteria::ASC) Order by the active column
 * @method     SchoolQuery orderByElementary($order = Criteria::ASC) Order by the elementary column
 * @method     SchoolQuery orderByMiddle($order = Criteria::ASC) Order by the middle column
 * @method     SchoolQuery orderBySecondary($order = Criteria::ASC) Order by the secondary column
 * @method     SchoolQuery orderByAlternative($order = Criteria::ASC) Order by the alternative column
 * @method     SchoolQuery orderByPublicSchool($order = Criteria::ASC) Order by the public_school column
 * @method     SchoolQuery orderByPrivateSchool($order = Criteria::ASC) Order by the private_school column
 * @method     SchoolQuery orderByParochial($order = Criteria::ASC) Order by the parochial column
 * @method     SchoolQuery orderByIndianAffairs($order = Criteria::ASC) Order by the indian_affairs column
 * @method     SchoolQuery orderByIndependent($order = Criteria::ASC) Order by the independent column
 * @method     SchoolQuery orderByMagnet($order = Criteria::ASC) Order by the magnet column
 * @method     SchoolQuery orderByCharter($order = Criteria::ASC) Order by the charter column
 * @method     SchoolQuery orderByGradeMin($order = Criteria::ASC) Order by the grade_min column
 * @method     SchoolQuery orderByGradeMax($order = Criteria::ASC) Order by the grade_max column
 * @method     SchoolQuery orderByCreatedAt($order = Criteria::ASC) Order by the created_at column
 * @method     SchoolQuery orderByModifiedAt($order = Criteria::ASC) Order by the modified_at column
 *
 * @method     SchoolQuery groupById() Group by the id column
 * @method     SchoolQuery groupByDistrictId() Group by the district_id column
 * @method     SchoolQuery groupByName() Group by the name column
 * @method     SchoolQuery groupByAddress1() Group by the address1 column
 * @method     SchoolQuery groupByAddress2() Group by the address2 column
 * @method     SchoolQuery groupByCity() Group by the city column
 * @method     SchoolQuery groupByState() Group by the state column
 * @method     SchoolQuery groupByCountry() Group by the country column
 * @method     SchoolQuery groupByPostcode() Group by the postcode column
 * @method     SchoolQuery groupByPhone() Group by the phone column
 * @method     SchoolQuery groupByFax() Group by the fax column
 * @method     SchoolQuery groupByEmail() Group by the email column
 * @method     SchoolQuery groupByUrl() Group by the url column
 * @method     SchoolQuery groupByEstablished() Group by the established column
 * @method     SchoolQuery groupByPopulation() Group by the population column
 * @method     SchoolQuery groupByPopulationDate() Group by the population_date column
 * @method     SchoolQuery groupByFaculty() Group by the faculty column
 * @method     SchoolQuery groupByFacultyDate() Group by the faculty_date column
 * @method     SchoolQuery groupByClassSize() Group by the class_size column
 * @method     SchoolQuery groupByClassSizeDate() Group by the class_size_date column
 * @method     SchoolQuery groupByActive() Group by the active column
 * @method     SchoolQuery groupByElementary() Group by the elementary column
 * @method     SchoolQuery groupByMiddle() Group by the middle column
 * @method     SchoolQuery groupBySecondary() Group by the secondary column
 * @method     SchoolQuery groupByAlternative() Group by the alternative column
 * @method     SchoolQuery groupByPublicSchool() Group by the public_school column
 * @method     SchoolQuery groupByPrivateSchool() Group by the private_school column
 * @method     SchoolQuery groupByParochial() Group by the parochial column
 * @method     SchoolQuery groupByIndianAffairs() Group by the indian_affairs column
 * @method     SchoolQuery groupByIndependent() Group by the independent column
 * @method     SchoolQuery groupByMagnet() Group by the magnet column
 * @method     SchoolQuery groupByCharter() Group by the charter column
 * @method     SchoolQuery groupByGradeMin() Group by the grade_min column
 * @method     SchoolQuery groupByGradeMax() Group by the grade_max column
 * @method     SchoolQuery groupByCreatedAt() Group by the created_at column
 * @method     SchoolQuery groupByModifiedAt() Group by the modified_at column
 *
 * @method     SchoolQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     SchoolQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     SchoolQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     SchoolQuery leftJoinDistrict($relationAlias = null) Adds a LEFT JOIN clause to the query using the District relation
 * @method     SchoolQuery rightJoinDistrict($relationAlias = null) Adds a RIGHT JOIN clause to the query using the District relation
 * @method     SchoolQuery innerJoinDistrict($relationAlias = null) Adds a INNER JOIN clause to the query using the District relation
 *
 * @method     SchoolQuery leftJoinNomination($relationAlias = null) Adds a LEFT JOIN clause to the query using the Nomination relation
 * @method     SchoolQuery rightJoinNomination($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Nomination relation
 * @method     SchoolQuery innerJoinNomination($relationAlias = null) Adds a INNER JOIN clause to the query using the Nomination relation
 *
 * @method     School findOne(PropelPDO $con = null) Return the first School matching the query
 * @method     School findOneOrCreate(PropelPDO $con = null) Return the first School matching the query, or a new School object populated from the query conditions when no match is found
 *
 * @method     School findOneById(int $id) Return the first School filtered by the id column
 * @method     School findOneByDistrictId(int $district_id) Return the first School filtered by the district_id column
 * @method     School findOneByName(string $name) Return the first School filtered by the name column
 * @method     School findOneByAddress1(string $address1) Return the first School filtered by the address1 column
 * @method     School findOneByAddress2(string $address2) Return the first School filtered by the address2 column
 * @method     School findOneByCity(string $city) Return the first School filtered by the city column
 * @method     School findOneByState(string $state) Return the first School filtered by the state column
 * @method     School findOneByCountry(string $country) Return the first School filtered by the country column
 * @method     School findOneByPostcode(string $postcode) Return the first School filtered by the postcode column
 * @method     School findOneByPhone(string $phone) Return the first School filtered by the phone column
 * @method     School findOneByFax(string $fax) Return the first School filtered by the fax column
 * @method     School findOneByEmail(string $email) Return the first School filtered by the email column
 * @method     School findOneByUrl(string $url) Return the first School filtered by the url column
 * @method     School findOneByEstablished(string $established) Return the first School filtered by the established column
 * @method     School findOneByPopulation(int $population) Return the first School filtered by the population column
 * @method     School findOneByPopulationDate(string $population_date) Return the first School filtered by the population_date column
 * @method     School findOneByFaculty(int $faculty) Return the first School filtered by the faculty column
 * @method     School findOneByFacultyDate(string $faculty_date) Return the first School filtered by the faculty_date column
 * @method     School findOneByClassSize(int $class_size) Return the first School filtered by the class_size column
 * @method     School findOneByClassSizeDate(int $class_size_date) Return the first School filtered by the class_size_date column
 * @method     School findOneByActive(boolean $active) Return the first School filtered by the active column
 * @method     School findOneByElementary(boolean $elementary) Return the first School filtered by the elementary column
 * @method     School findOneByMiddle(boolean $middle) Return the first School filtered by the middle column
 * @method     School findOneBySecondary(boolean $secondary) Return the first School filtered by the secondary column
 * @method     School findOneByAlternative(boolean $alternative) Return the first School filtered by the alternative column
 * @method     School findOneByPublicSchool(boolean $public_school) Return the first School filtered by the public_school column
 * @method     School findOneByPrivateSchool(boolean $private_school) Return the first School filtered by the private_school column
 * @method     School findOneByParochial(boolean $parochial) Return the first School filtered by the parochial column
 * @method     School findOneByIndianAffairs(boolean $indian_affairs) Return the first School filtered by the indian_affairs column
 * @method     School findOneByIndependent(boolean $independent) Return the first School filtered by the independent column
 * @method     School findOneByMagnet(boolean $magnet) Return the first School filtered by the magnet column
 * @method     School findOneByCharter(boolean $charter) Return the first School filtered by the charter column
 * @method     School findOneByGradeMin(string $grade_min) Return the first School filtered by the grade_min column
 * @method     School findOneByGradeMax(string $grade_max) Return the first School filtered by the grade_max column
 * @method     School findOneByCreatedAt(string $created_at) Return the first School filtered by the created_at column
 * @method     School findOneByModifiedAt(string $modified_at) Return the first School filtered by the modified_at column
 *
 * @method     array findById(int $id) Return School objects filtered by the id column
 * @method     array findByDistrictId(int $district_id) Return School objects filtered by the district_id column
 * @method     array findByName(string $name) Return School objects filtered by the name column
 * @method     array findByAddress1(string $address1) Return School objects filtered by the address1 column
 * @method     array findByAddress2(string $address2) Return School objects filtered by the address2 column
 * @method     array findByCity(string $city) Return School objects filtered by the city column
 * @method     array findByState(string $state) Return School objects filtered by the state column
 * @method     array findByCountry(string $country) Return School objects filtered by the country column
 * @method     array findByPostcode(string $postcode) Return School objects filtered by the postcode column
 * @method     array findByPhone(string $phone) Return School objects filtered by the phone column
 * @method     array findByFax(string $fax) Return School objects filtered by the fax column
 * @method     array findByEmail(string $email) Return School objects filtered by the email column
 * @method     array findByUrl(string $url) Return School objects filtered by the url column
 * @method     array findByEstablished(string $established) Return School objects filtered by the established column
 * @method     array findByPopulation(int $population) Return School objects filtered by the population column
 * @method     array findByPopulationDate(string $population_date) Return School objects filtered by the population_date column
 * @method     array findByFaculty(int $faculty) Return School objects filtered by the faculty column
 * @method     array findByFacultyDate(string $faculty_date) Return School objects filtered by the faculty_date column
 * @method     array findByClassSize(int $class_size) Return School objects filtered by the class_size column
 * @method     array findByClassSizeDate(int $class_size_date) Return School objects filtered by the class_size_date column
 * @method     array findByActive(boolean $active) Return School objects filtered by the active column
 * @method     array findByElementary(boolean $elementary) Return School objects filtered by the elementary column
 * @method     array findByMiddle(boolean $middle) Return School objects filtered by the middle column
 * @method     array findBySecondary(boolean $secondary) Return School objects filtered by the secondary column
 * @method     array findByAlternative(boolean $alternative) Return School objects filtered by the alternative column
 * @method     array findByPublicSchool(boolean $public_school) Return School objects filtered by the public_school column
 * @method     array findByPrivateSchool(boolean $private_school) Return School objects filtered by the private_school column
 * @method     array findByParochial(boolean $parochial) Return School objects filtered by the parochial column
 * @method     array findByIndianAffairs(boolean $indian_affairs) Return School objects filtered by the indian_affairs column
 * @method     array findByIndependent(boolean $independent) Return School objects filtered by the independent column
 * @method     array findByMagnet(boolean $magnet) Return School objects filtered by the magnet column
 * @method     array findByCharter(boolean $charter) Return School objects filtered by the charter column
 * @method     array findByGradeMin(string $grade_min) Return School objects filtered by the grade_min column
 * @method     array findByGradeMax(string $grade_max) Return School objects filtered by the grade_max column
 * @method     array findByCreatedAt(string $created_at) Return School objects filtered by the created_at column
 * @method     array findByModifiedAt(string $modified_at) Return School objects filtered by the modified_at column
 *
 * @package    propel.generator.wsot.om
 */
abstract class BaseSchoolQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseSchoolQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'wsot', $modelName = 'School', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new SchoolQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    SchoolQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof SchoolQuery) {
			return $criteria;
		}
		$query = new SchoolQuery();
		if (null !== $modelAlias) {
			$query->setModelAlias($modelAlias);
		}
		if ($criteria instanceof Criteria) {
			$query->mergeWith($criteria);
		}
		return $query;
	}

	/**
	 * Find object by primary key
	 * Use instance pooling to avoid a database query if the object exists
	 * <code>
	 * $obj  = $c->findPk(12, $con);
	 * </code>
	 * @param     mixed $key Primary key to use for the query
	 * @param     PropelPDO $con an optional connection object
	 *
	 * @return    School|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = SchoolPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
			// the object is alredy in the instance pool
			return $obj;
		} else {
			// the object has not been requested yet, or the formatter is not an object formatter
			$criteria = $this->isKeepQuery() ? clone $this : $this;
			$stmt = $criteria
				->filterByPrimaryKey($key)
				->getSelectStatement($con);
			return $criteria->getFormatter()->init($criteria)->formatOne($stmt);
		}
	}

	/**
	 * Find objects by primary key
	 * <code>
	 * $objs = $c->findPks(array(12, 56, 832), $con);
	 * </code>
	 * @param     array $keys Primary keys to use for the query
	 * @param     PropelPDO $con an optional connection object
	 *
	 * @return    PropelObjectCollection|array|mixed the list of results, formatted by the current formatter
	 */
	public function findPks($keys, $con = null)
	{	
		$criteria = $this->isKeepQuery() ? clone $this : $this;
		return $this
			->filterByPrimaryKeys($keys)
			->find($con);
	}

	/**
	 * Filter the query by primary key
	 *
	 * @param     mixed $key Primary key to use for the query
	 *
	 * @return    SchoolQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(SchoolPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    SchoolQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(SchoolPeer::ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id column
	 * 
	 * @param     int|array $id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SchoolQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(SchoolPeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the district_id column
	 * 
	 * @param     int|array $districtId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SchoolQuery The current query, for fluid interface
	 */
	public function filterByDistrictId($districtId = null, $comparison = null)
	{
		if (is_array($districtId)) {
			$useMinMax = false;
			if (isset($districtId['min'])) {
				$this->addUsingAlias(SchoolPeer::DISTRICT_ID, $districtId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($districtId['max'])) {
				$this->addUsingAlias(SchoolPeer::DISTRICT_ID, $districtId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(SchoolPeer::DISTRICT_ID, $districtId, $comparison);
	}

	/**
	 * Filter the query on the name column
	 * 
	 * @param     string $name The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SchoolQuery The current query, for fluid interface
	 */
	public function filterByName($name = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($name)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $name)) {
				$name = str_replace('*', '%', $name);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(SchoolPeer::NAME, $name, $comparison);
	}

	/**
	 * Filter the query on the address1 column
	 * 
	 * @param     string $address1 The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SchoolQuery The current query, for fluid interface
	 */
	public function filterByAddress1($address1 = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($address1)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $address1)) {
				$address1 = str_replace('*', '%', $address1);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(SchoolPeer::ADDRESS1, $address1, $comparison);
	}

	/**
	 * Filter the query on the address2 column
	 * 
	 * @param     string $address2 The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SchoolQuery The current query, for fluid interface
	 */
	public function filterByAddress2($address2 = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($address2)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $address2)) {
				$address2 = str_replace('*', '%', $address2);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(SchoolPeer::ADDRESS2, $address2, $comparison);
	}

	/**
	 * Filter the query on the city column
	 * 
	 * @param     string $city The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SchoolQuery The current query, for fluid interface
	 */
	public function filterByCity($city = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($city)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $city)) {
				$city = str_replace('*', '%', $city);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(SchoolPeer::CITY, $city, $comparison);
	}

	/**
	 * Filter the query on the state column
	 * 
	 * @param     string $state The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SchoolQuery The current query, for fluid interface
	 */
	public function filterByState($state = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($state)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $state)) {
				$state = str_replace('*', '%', $state);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(SchoolPeer::STATE, $state, $comparison);
	}

	/**
	 * Filter the query on the country column
	 * 
	 * @param     string $country The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SchoolQuery The current query, for fluid interface
	 */
	public function filterByCountry($country = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($country)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $country)) {
				$country = str_replace('*', '%', $country);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(SchoolPeer::COUNTRY, $country, $comparison);
	}

	/**
	 * Filter the query on the postcode column
	 * 
	 * @param     string $postcode The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SchoolQuery The current query, for fluid interface
	 */
	public function filterByPostcode($postcode = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($postcode)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $postcode)) {
				$postcode = str_replace('*', '%', $postcode);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(SchoolPeer::POSTCODE, $postcode, $comparison);
	}

	/**
	 * Filter the query on the phone column
	 * 
	 * @param     string $phone The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SchoolQuery The current query, for fluid interface
	 */
	public function filterByPhone($phone = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($phone)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $phone)) {
				$phone = str_replace('*', '%', $phone);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(SchoolPeer::PHONE, $phone, $comparison);
	}

	/**
	 * Filter the query on the fax column
	 * 
	 * @param     string $fax The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SchoolQuery The current query, for fluid interface
	 */
	public function filterByFax($fax = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($fax)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $fax)) {
				$fax = str_replace('*', '%', $fax);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(SchoolPeer::FAX, $fax, $comparison);
	}

	/**
	 * Filter the query on the email column
	 * 
	 * @param     string $email The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SchoolQuery The current query, for fluid interface
	 */
	public function filterByEmail($email = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($email)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $email)) {
				$email = str_replace('*', '%', $email);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(SchoolPeer::EMAIL, $email, $comparison);
	}

	/**
	 * Filter the query on the url column
	 * 
	 * @param     string $url The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SchoolQuery The current query, for fluid interface
	 */
	public function filterByUrl($url = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($url)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $url)) {
				$url = str_replace('*', '%', $url);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(SchoolPeer::URL, $url, $comparison);
	}

	/**
	 * Filter the query on the established column
	 * 
	 * @param     string|array $established The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SchoolQuery The current query, for fluid interface
	 */
	public function filterByEstablished($established = null, $comparison = null)
	{
		if (is_array($established)) {
			$useMinMax = false;
			if (isset($established['min'])) {
				$this->addUsingAlias(SchoolPeer::ESTABLISHED, $established['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($established['max'])) {
				$this->addUsingAlias(SchoolPeer::ESTABLISHED, $established['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(SchoolPeer::ESTABLISHED, $established, $comparison);
	}

	/**
	 * Filter the query on the population column
	 * 
	 * @param     int|array $population The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SchoolQuery The current query, for fluid interface
	 */
	public function filterByPopulation($population = null, $comparison = null)
	{
		if (is_array($population)) {
			$useMinMax = false;
			if (isset($population['min'])) {
				$this->addUsingAlias(SchoolPeer::POPULATION, $population['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($population['max'])) {
				$this->addUsingAlias(SchoolPeer::POPULATION, $population['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(SchoolPeer::POPULATION, $population, $comparison);
	}

	/**
	 * Filter the query on the population_date column
	 * 
	 * @param     string|array $populationDate The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SchoolQuery The current query, for fluid interface
	 */
	public function filterByPopulationDate($populationDate = null, $comparison = null)
	{
		if (is_array($populationDate)) {
			$useMinMax = false;
			if (isset($populationDate['min'])) {
				$this->addUsingAlias(SchoolPeer::POPULATION_DATE, $populationDate['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($populationDate['max'])) {
				$this->addUsingAlias(SchoolPeer::POPULATION_DATE, $populationDate['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(SchoolPeer::POPULATION_DATE, $populationDate, $comparison);
	}

	/**
	 * Filter the query on the faculty column
	 * 
	 * @param     int|array $faculty The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SchoolQuery The current query, for fluid interface
	 */
	public function filterByFaculty($faculty = null, $comparison = null)
	{
		if (is_array($faculty)) {
			$useMinMax = false;
			if (isset($faculty['min'])) {
				$this->addUsingAlias(SchoolPeer::FACULTY, $faculty['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($faculty['max'])) {
				$this->addUsingAlias(SchoolPeer::FACULTY, $faculty['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(SchoolPeer::FACULTY, $faculty, $comparison);
	}

	/**
	 * Filter the query on the faculty_date column
	 * 
	 * @param     string|array $facultyDate The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SchoolQuery The current query, for fluid interface
	 */
	public function filterByFacultyDate($facultyDate = null, $comparison = null)
	{
		if (is_array($facultyDate)) {
			$useMinMax = false;
			if (isset($facultyDate['min'])) {
				$this->addUsingAlias(SchoolPeer::FACULTY_DATE, $facultyDate['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($facultyDate['max'])) {
				$this->addUsingAlias(SchoolPeer::FACULTY_DATE, $facultyDate['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(SchoolPeer::FACULTY_DATE, $facultyDate, $comparison);
	}

	/**
	 * Filter the query on the class_size column
	 * 
	 * @param     int|array $classSize The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SchoolQuery The current query, for fluid interface
	 */
	public function filterByClassSize($classSize = null, $comparison = null)
	{
		if (is_array($classSize)) {
			$useMinMax = false;
			if (isset($classSize['min'])) {
				$this->addUsingAlias(SchoolPeer::CLASS_SIZE, $classSize['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($classSize['max'])) {
				$this->addUsingAlias(SchoolPeer::CLASS_SIZE, $classSize['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(SchoolPeer::CLASS_SIZE, $classSize, $comparison);
	}

	/**
	 * Filter the query on the class_size_date column
	 * 
	 * @param     int|array $classSizeDate The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SchoolQuery The current query, for fluid interface
	 */
	public function filterByClassSizeDate($classSizeDate = null, $comparison = null)
	{
		if (is_array($classSizeDate)) {
			$useMinMax = false;
			if (isset($classSizeDate['min'])) {
				$this->addUsingAlias(SchoolPeer::CLASS_SIZE_DATE, $classSizeDate['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($classSizeDate['max'])) {
				$this->addUsingAlias(SchoolPeer::CLASS_SIZE_DATE, $classSizeDate['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(SchoolPeer::CLASS_SIZE_DATE, $classSizeDate, $comparison);
	}

	/**
	 * Filter the query on the active column
	 * 
	 * @param     boolean|string $active The value to use as filter.
	 *            Accepts strings ('false', 'off', '-', 'no', 'n', and '0' are false, the rest is true)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SchoolQuery The current query, for fluid interface
	 */
	public function filterByActive($active = null, $comparison = null)
	{
		if (is_string($active)) {
			$active = in_array(strtolower($active), array('false', 'off', '-', 'no', 'n', '0')) ? false : true;
		}
		return $this->addUsingAlias(SchoolPeer::ACTIVE, $active, $comparison);
	}

	/**
	 * Filter the query on the elementary column
	 * 
	 * @param     boolean|string $elementary The value to use as filter.
	 *            Accepts strings ('false', 'off', '-', 'no', 'n', and '0' are false, the rest is true)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SchoolQuery The current query, for fluid interface
	 */
	public function filterByElementary($elementary = null, $comparison = null)
	{
		if (is_string($elementary)) {
			$elementary = in_array(strtolower($elementary), array('false', 'off', '-', 'no', 'n', '0')) ? false : true;
		}
		return $this->addUsingAlias(SchoolPeer::ELEMENTARY, $elementary, $comparison);
	}

	/**
	 * Filter the query on the middle column
	 * 
	 * @param     boolean|string $middle The value to use as filter.
	 *            Accepts strings ('false', 'off', '-', 'no', 'n', and '0' are false, the rest is true)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SchoolQuery The current query, for fluid interface
	 */
	public function filterByMiddle($middle = null, $comparison = null)
	{
		if (is_string($middle)) {
			$middle = in_array(strtolower($middle), array('false', 'off', '-', 'no', 'n', '0')) ? false : true;
		}
		return $this->addUsingAlias(SchoolPeer::MIDDLE, $middle, $comparison);
	}

	/**
	 * Filter the query on the secondary column
	 * 
	 * @param     boolean|string $secondary The value to use as filter.
	 *            Accepts strings ('false', 'off', '-', 'no', 'n', and '0' are false, the rest is true)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SchoolQuery The current query, for fluid interface
	 */
	public function filterBySecondary($secondary = null, $comparison = null)
	{
		if (is_string($secondary)) {
			$secondary = in_array(strtolower($secondary), array('false', 'off', '-', 'no', 'n', '0')) ? false : true;
		}
		return $this->addUsingAlias(SchoolPeer::SECONDARY, $secondary, $comparison);
	}

	/**
	 * Filter the query on the alternative column
	 * 
	 * @param     boolean|string $alternative The value to use as filter.
	 *            Accepts strings ('false', 'off', '-', 'no', 'n', and '0' are false, the rest is true)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SchoolQuery The current query, for fluid interface
	 */
	public function filterByAlternative($alternative = null, $comparison = null)
	{
		if (is_string($alternative)) {
			$alternative = in_array(strtolower($alternative), array('false', 'off', '-', 'no', 'n', '0')) ? false : true;
		}
		return $this->addUsingAlias(SchoolPeer::ALTERNATIVE, $alternative, $comparison);
	}

	/**
	 * Filter the query on the public_school column
	 * 
	 * @param     boolean|string $publicSchool The value to use as filter.
	 *            Accepts strings ('false', 'off', '-', 'no', 'n', and '0' are false, the rest is true)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SchoolQuery The current query, for fluid interface
	 */
	public function filterByPublicSchool($publicSchool = null, $comparison = null)
	{
		if (is_string($publicSchool)) {
			$public_school = in_array(strtolower($publicSchool), array('false', 'off', '-', 'no', 'n', '0')) ? false : true;
		}
		return $this->addUsingAlias(SchoolPeer::PUBLIC_SCHOOL, $publicSchool, $comparison);
	}

	/**
	 * Filter the query on the private_school column
	 * 
	 * @param     boolean|string $privateSchool The value to use as filter.
	 *            Accepts strings ('false', 'off', '-', 'no', 'n', and '0' are false, the rest is true)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SchoolQuery The current query, for fluid interface
	 */
	public function filterByPrivateSchool($privateSchool = null, $comparison = null)
	{
		if (is_string($privateSchool)) {
			$private_school = in_array(strtolower($privateSchool), array('false', 'off', '-', 'no', 'n', '0')) ? false : true;
		}
		return $this->addUsingAlias(SchoolPeer::PRIVATE_SCHOOL, $privateSchool, $comparison);
	}

	/**
	 * Filter the query on the parochial column
	 * 
	 * @param     boolean|string $parochial The value to use as filter.
	 *            Accepts strings ('false', 'off', '-', 'no', 'n', and '0' are false, the rest is true)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SchoolQuery The current query, for fluid interface
	 */
	public function filterByParochial($parochial = null, $comparison = null)
	{
		if (is_string($parochial)) {
			$parochial = in_array(strtolower($parochial), array('false', 'off', '-', 'no', 'n', '0')) ? false : true;
		}
		return $this->addUsingAlias(SchoolPeer::PAROCHIAL, $parochial, $comparison);
	}

	/**
	 * Filter the query on the indian_affairs column
	 * 
	 * @param     boolean|string $indianAffairs The value to use as filter.
	 *            Accepts strings ('false', 'off', '-', 'no', 'n', and '0' are false, the rest is true)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SchoolQuery The current query, for fluid interface
	 */
	public function filterByIndianAffairs($indianAffairs = null, $comparison = null)
	{
		if (is_string($indianAffairs)) {
			$indian_affairs = in_array(strtolower($indianAffairs), array('false', 'off', '-', 'no', 'n', '0')) ? false : true;
		}
		return $this->addUsingAlias(SchoolPeer::INDIAN_AFFAIRS, $indianAffairs, $comparison);
	}

	/**
	 * Filter the query on the independent column
	 * 
	 * @param     boolean|string $independent The value to use as filter.
	 *            Accepts strings ('false', 'off', '-', 'no', 'n', and '0' are false, the rest is true)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SchoolQuery The current query, for fluid interface
	 */
	public function filterByIndependent($independent = null, $comparison = null)
	{
		if (is_string($independent)) {
			$independent = in_array(strtolower($independent), array('false', 'off', '-', 'no', 'n', '0')) ? false : true;
		}
		return $this->addUsingAlias(SchoolPeer::INDEPENDENT, $independent, $comparison);
	}

	/**
	 * Filter the query on the magnet column
	 * 
	 * @param     boolean|string $magnet The value to use as filter.
	 *            Accepts strings ('false', 'off', '-', 'no', 'n', and '0' are false, the rest is true)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SchoolQuery The current query, for fluid interface
	 */
	public function filterByMagnet($magnet = null, $comparison = null)
	{
		if (is_string($magnet)) {
			$magnet = in_array(strtolower($magnet), array('false', 'off', '-', 'no', 'n', '0')) ? false : true;
		}
		return $this->addUsingAlias(SchoolPeer::MAGNET, $magnet, $comparison);
	}

	/**
	 * Filter the query on the charter column
	 * 
	 * @param     boolean|string $charter The value to use as filter.
	 *            Accepts strings ('false', 'off', '-', 'no', 'n', and '0' are false, the rest is true)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SchoolQuery The current query, for fluid interface
	 */
	public function filterByCharter($charter = null, $comparison = null)
	{
		if (is_string($charter)) {
			$charter = in_array(strtolower($charter), array('false', 'off', '-', 'no', 'n', '0')) ? false : true;
		}
		return $this->addUsingAlias(SchoolPeer::CHARTER, $charter, $comparison);
	}

	/**
	 * Filter the query on the grade_min column
	 * 
	 * @param     string $gradeMin The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SchoolQuery The current query, for fluid interface
	 */
	public function filterByGradeMin($gradeMin = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($gradeMin)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $gradeMin)) {
				$gradeMin = str_replace('*', '%', $gradeMin);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(SchoolPeer::GRADE_MIN, $gradeMin, $comparison);
	}

	/**
	 * Filter the query on the grade_max column
	 * 
	 * @param     string $gradeMax The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SchoolQuery The current query, for fluid interface
	 */
	public function filterByGradeMax($gradeMax = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($gradeMax)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $gradeMax)) {
				$gradeMax = str_replace('*', '%', $gradeMax);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(SchoolPeer::GRADE_MAX, $gradeMax, $comparison);
	}

	/**
	 * Filter the query on the created_at column
	 * 
	 * @param     string|array $createdAt The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SchoolQuery The current query, for fluid interface
	 */
	public function filterByCreatedAt($createdAt = null, $comparison = null)
	{
		if (is_array($createdAt)) {
			$useMinMax = false;
			if (isset($createdAt['min'])) {
				$this->addUsingAlias(SchoolPeer::CREATED_AT, $createdAt['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($createdAt['max'])) {
				$this->addUsingAlias(SchoolPeer::CREATED_AT, $createdAt['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(SchoolPeer::CREATED_AT, $createdAt, $comparison);
	}

	/**
	 * Filter the query on the modified_at column
	 * 
	 * @param     string|array $modifiedAt The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SchoolQuery The current query, for fluid interface
	 */
	public function filterByModifiedAt($modifiedAt = null, $comparison = null)
	{
		if (is_array($modifiedAt)) {
			$useMinMax = false;
			if (isset($modifiedAt['min'])) {
				$this->addUsingAlias(SchoolPeer::MODIFIED_AT, $modifiedAt['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($modifiedAt['max'])) {
				$this->addUsingAlias(SchoolPeer::MODIFIED_AT, $modifiedAt['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(SchoolPeer::MODIFIED_AT, $modifiedAt, $comparison);
	}

	/**
	 * Filter the query by a related District object
	 *
	 * @param     District $district  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SchoolQuery The current query, for fluid interface
	 */
	public function filterByDistrict($district, $comparison = null)
	{
		return $this
			->addUsingAlias(SchoolPeer::DISTRICT_ID, $district->getId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the District relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    SchoolQuery The current query, for fluid interface
	 */
	public function joinDistrict($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('District');
		
		// create a ModelJoin object for this join
		$join = new ModelJoin();
		$join->setJoinType($joinType);
		$join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
		if ($previousJoin = $this->getPreviousJoin()) {
			$join->setPreviousJoin($previousJoin);
		}
		
		// add the ModelJoin to the current object
		if($relationAlias) {
			$this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
			$this->addJoinObject($join, $relationAlias);
		} else {
			$this->addJoinObject($join, 'District');
		}
		
		return $this;
	}

	/**
	 * Use the District relation District object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    DistrictQuery A secondary query class using the current class as primary query
	 */
	public function useDistrictQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinDistrict($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'District', 'DistrictQuery');
	}

	/**
	 * Filter the query by a related Nomination object
	 *
	 * @param     Nomination $nomination  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SchoolQuery The current query, for fluid interface
	 */
	public function filterByNomination($nomination, $comparison = null)
	{
		return $this
			->addUsingAlias(SchoolPeer::ID, $nomination->getSchoolId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the Nomination relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    SchoolQuery The current query, for fluid interface
	 */
	public function joinNomination($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('Nomination');
		
		// create a ModelJoin object for this join
		$join = new ModelJoin();
		$join->setJoinType($joinType);
		$join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
		if ($previousJoin = $this->getPreviousJoin()) {
			$join->setPreviousJoin($previousJoin);
		}
		
		// add the ModelJoin to the current object
		if($relationAlias) {
			$this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
			$this->addJoinObject($join, $relationAlias);
		} else {
			$this->addJoinObject($join, 'Nomination');
		}
		
		return $this;
	}

	/**
	 * Use the Nomination relation Nomination object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    NominationQuery A secondary query class using the current class as primary query
	 */
	public function useNominationQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinNomination($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'Nomination', 'NominationQuery');
	}

	/**
	 * Exclude object from result
	 *
	 * @param     School $school Object to remove from the list of results
	 *
	 * @return    SchoolQuery The current query, for fluid interface
	 */
	public function prune($school = null)
	{
		if ($school) {
			$this->addUsingAlias(SchoolPeer::ID, $school->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseSchoolQuery
