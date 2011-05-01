<?php


/**
 * Base class that represents a query for the 'profiles' table.
 *
 * 
 *
 * @method     ProfileQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     ProfileQuery orderByUserId($order = Criteria::ASC) Order by the user_id column
 * @method     ProfileQuery orderBySalutation($order = Criteria::ASC) Order by the salutation column
 * @method     ProfileQuery orderByFirstName($order = Criteria::ASC) Order by the first_name column
 * @method     ProfileQuery orderByLastName($order = Criteria::ASC) Order by the last_name column
 * @method     ProfileQuery orderByGender($order = Criteria::ASC) Order by the gender column
 * @method     ProfileQuery orderByAddress1($order = Criteria::ASC) Order by the address1 column
 * @method     ProfileQuery orderByAddress2($order = Criteria::ASC) Order by the address2 column
 * @method     ProfileQuery orderByCity($order = Criteria::ASC) Order by the city column
 * @method     ProfileQuery orderByState($order = Criteria::ASC) Order by the state column
 * @method     ProfileQuery orderByCountry($order = Criteria::ASC) Order by the country column
 * @method     ProfileQuery orderByPostcode($order = Criteria::ASC) Order by the postcode column
 * @method     ProfileQuery orderByPhone($order = Criteria::ASC) Order by the phone column
 * @method     ProfileQuery orderByFax($order = Criteria::ASC) Order by the fax column
 * @method     ProfileQuery orderByEmail($order = Criteria::ASC) Order by the email column
 * @method     ProfileQuery orderByUrl($order = Criteria::ASC) Order by the url column
 * @method     ProfileQuery orderByCreatedAt($order = Criteria::ASC) Order by the created_at column
 * @method     ProfileQuery orderByModifiedAt($order = Criteria::ASC) Order by the modified_at column
 *
 * @method     ProfileQuery groupById() Group by the id column
 * @method     ProfileQuery groupByUserId() Group by the user_id column
 * @method     ProfileQuery groupBySalutation() Group by the salutation column
 * @method     ProfileQuery groupByFirstName() Group by the first_name column
 * @method     ProfileQuery groupByLastName() Group by the last_name column
 * @method     ProfileQuery groupByGender() Group by the gender column
 * @method     ProfileQuery groupByAddress1() Group by the address1 column
 * @method     ProfileQuery groupByAddress2() Group by the address2 column
 * @method     ProfileQuery groupByCity() Group by the city column
 * @method     ProfileQuery groupByState() Group by the state column
 * @method     ProfileQuery groupByCountry() Group by the country column
 * @method     ProfileQuery groupByPostcode() Group by the postcode column
 * @method     ProfileQuery groupByPhone() Group by the phone column
 * @method     ProfileQuery groupByFax() Group by the fax column
 * @method     ProfileQuery groupByEmail() Group by the email column
 * @method     ProfileQuery groupByUrl() Group by the url column
 * @method     ProfileQuery groupByCreatedAt() Group by the created_at column
 * @method     ProfileQuery groupByModifiedAt() Group by the modified_at column
 *
 * @method     ProfileQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ProfileQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ProfileQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ProfileQuery leftJoinUser($relationAlias = null) Adds a LEFT JOIN clause to the query using the User relation
 * @method     ProfileQuery rightJoinUser($relationAlias = null) Adds a RIGHT JOIN clause to the query using the User relation
 * @method     ProfileQuery innerJoinUser($relationAlias = null) Adds a INNER JOIN clause to the query using the User relation
 *
 * @method     Profile findOne(PropelPDO $con = null) Return the first Profile matching the query
 * @method     Profile findOneOrCreate(PropelPDO $con = null) Return the first Profile matching the query, or a new Profile object populated from the query conditions when no match is found
 *
 * @method     Profile findOneById(int $id) Return the first Profile filtered by the id column
 * @method     Profile findOneByUserId(int $user_id) Return the first Profile filtered by the user_id column
 * @method     Profile findOneBySalutation(string $salutation) Return the first Profile filtered by the salutation column
 * @method     Profile findOneByFirstName(string $first_name) Return the first Profile filtered by the first_name column
 * @method     Profile findOneByLastName(string $last_name) Return the first Profile filtered by the last_name column
 * @method     Profile findOneByGender(string $gender) Return the first Profile filtered by the gender column
 * @method     Profile findOneByAddress1(string $address1) Return the first Profile filtered by the address1 column
 * @method     Profile findOneByAddress2(string $address2) Return the first Profile filtered by the address2 column
 * @method     Profile findOneByCity(string $city) Return the first Profile filtered by the city column
 * @method     Profile findOneByState(string $state) Return the first Profile filtered by the state column
 * @method     Profile findOneByCountry(string $country) Return the first Profile filtered by the country column
 * @method     Profile findOneByPostcode(string $postcode) Return the first Profile filtered by the postcode column
 * @method     Profile findOneByPhone(string $phone) Return the first Profile filtered by the phone column
 * @method     Profile findOneByFax(string $fax) Return the first Profile filtered by the fax column
 * @method     Profile findOneByEmail(string $email) Return the first Profile filtered by the email column
 * @method     Profile findOneByUrl(string $url) Return the first Profile filtered by the url column
 * @method     Profile findOneByCreatedAt(string $created_at) Return the first Profile filtered by the created_at column
 * @method     Profile findOneByModifiedAt(string $modified_at) Return the first Profile filtered by the modified_at column
 *
 * @method     array findById(int $id) Return Profile objects filtered by the id column
 * @method     array findByUserId(int $user_id) Return Profile objects filtered by the user_id column
 * @method     array findBySalutation(string $salutation) Return Profile objects filtered by the salutation column
 * @method     array findByFirstName(string $first_name) Return Profile objects filtered by the first_name column
 * @method     array findByLastName(string $last_name) Return Profile objects filtered by the last_name column
 * @method     array findByGender(string $gender) Return Profile objects filtered by the gender column
 * @method     array findByAddress1(string $address1) Return Profile objects filtered by the address1 column
 * @method     array findByAddress2(string $address2) Return Profile objects filtered by the address2 column
 * @method     array findByCity(string $city) Return Profile objects filtered by the city column
 * @method     array findByState(string $state) Return Profile objects filtered by the state column
 * @method     array findByCountry(string $country) Return Profile objects filtered by the country column
 * @method     array findByPostcode(string $postcode) Return Profile objects filtered by the postcode column
 * @method     array findByPhone(string $phone) Return Profile objects filtered by the phone column
 * @method     array findByFax(string $fax) Return Profile objects filtered by the fax column
 * @method     array findByEmail(string $email) Return Profile objects filtered by the email column
 * @method     array findByUrl(string $url) Return Profile objects filtered by the url column
 * @method     array findByCreatedAt(string $created_at) Return Profile objects filtered by the created_at column
 * @method     array findByModifiedAt(string $modified_at) Return Profile objects filtered by the modified_at column
 *
 * @package    propel.generator.wsot.om
 */
abstract class BaseProfileQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseProfileQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'wsot', $modelName = 'Profile', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new ProfileQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    ProfileQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof ProfileQuery) {
			return $criteria;
		}
		$query = new ProfileQuery();
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
	 * @return    Profile|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = ProfilePeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    ProfileQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(ProfilePeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    ProfileQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(ProfilePeer::ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id column
	 * 
	 * @param     int|array $id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ProfileQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(ProfilePeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the user_id column
	 * 
	 * @param     int|array $userId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ProfileQuery The current query, for fluid interface
	 */
	public function filterByUserId($userId = null, $comparison = null)
	{
		if (is_array($userId)) {
			$useMinMax = false;
			if (isset($userId['min'])) {
				$this->addUsingAlias(ProfilePeer::USER_ID, $userId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($userId['max'])) {
				$this->addUsingAlias(ProfilePeer::USER_ID, $userId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(ProfilePeer::USER_ID, $userId, $comparison);
	}

	/**
	 * Filter the query on the salutation column
	 * 
	 * @param     string $salutation The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ProfileQuery The current query, for fluid interface
	 */
	public function filterBySalutation($salutation = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($salutation)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $salutation)) {
				$salutation = str_replace('*', '%', $salutation);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(ProfilePeer::SALUTATION, $salutation, $comparison);
	}

	/**
	 * Filter the query on the first_name column
	 * 
	 * @param     string $firstName The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ProfileQuery The current query, for fluid interface
	 */
	public function filterByFirstName($firstName = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($firstName)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $firstName)) {
				$firstName = str_replace('*', '%', $firstName);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(ProfilePeer::FIRST_NAME, $firstName, $comparison);
	}

	/**
	 * Filter the query on the last_name column
	 * 
	 * @param     string $lastName The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ProfileQuery The current query, for fluid interface
	 */
	public function filterByLastName($lastName = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($lastName)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $lastName)) {
				$lastName = str_replace('*', '%', $lastName);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(ProfilePeer::LAST_NAME, $lastName, $comparison);
	}

	/**
	 * Filter the query on the gender column
	 * 
	 * @param     string $gender The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ProfileQuery The current query, for fluid interface
	 */
	public function filterByGender($gender = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($gender)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $gender)) {
				$gender = str_replace('*', '%', $gender);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(ProfilePeer::GENDER, $gender, $comparison);
	}

	/**
	 * Filter the query on the address1 column
	 * 
	 * @param     string $address1 The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ProfileQuery The current query, for fluid interface
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
		return $this->addUsingAlias(ProfilePeer::ADDRESS1, $address1, $comparison);
	}

	/**
	 * Filter the query on the address2 column
	 * 
	 * @param     string $address2 The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ProfileQuery The current query, for fluid interface
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
		return $this->addUsingAlias(ProfilePeer::ADDRESS2, $address2, $comparison);
	}

	/**
	 * Filter the query on the city column
	 * 
	 * @param     string $city The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ProfileQuery The current query, for fluid interface
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
		return $this->addUsingAlias(ProfilePeer::CITY, $city, $comparison);
	}

	/**
	 * Filter the query on the state column
	 * 
	 * @param     string $state The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ProfileQuery The current query, for fluid interface
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
		return $this->addUsingAlias(ProfilePeer::STATE, $state, $comparison);
	}

	/**
	 * Filter the query on the country column
	 * 
	 * @param     string $country The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ProfileQuery The current query, for fluid interface
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
		return $this->addUsingAlias(ProfilePeer::COUNTRY, $country, $comparison);
	}

	/**
	 * Filter the query on the postcode column
	 * 
	 * @param     string $postcode The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ProfileQuery The current query, for fluid interface
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
		return $this->addUsingAlias(ProfilePeer::POSTCODE, $postcode, $comparison);
	}

	/**
	 * Filter the query on the phone column
	 * 
	 * @param     string $phone The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ProfileQuery The current query, for fluid interface
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
		return $this->addUsingAlias(ProfilePeer::PHONE, $phone, $comparison);
	}

	/**
	 * Filter the query on the fax column
	 * 
	 * @param     string $fax The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ProfileQuery The current query, for fluid interface
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
		return $this->addUsingAlias(ProfilePeer::FAX, $fax, $comparison);
	}

	/**
	 * Filter the query on the email column
	 * 
	 * @param     string $email The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ProfileQuery The current query, for fluid interface
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
		return $this->addUsingAlias(ProfilePeer::EMAIL, $email, $comparison);
	}

	/**
	 * Filter the query on the url column
	 * 
	 * @param     string $url The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ProfileQuery The current query, for fluid interface
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
		return $this->addUsingAlias(ProfilePeer::URL, $url, $comparison);
	}

	/**
	 * Filter the query on the created_at column
	 * 
	 * @param     string|array $createdAt The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ProfileQuery The current query, for fluid interface
	 */
	public function filterByCreatedAt($createdAt = null, $comparison = null)
	{
		if (is_array($createdAt)) {
			$useMinMax = false;
			if (isset($createdAt['min'])) {
				$this->addUsingAlias(ProfilePeer::CREATED_AT, $createdAt['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($createdAt['max'])) {
				$this->addUsingAlias(ProfilePeer::CREATED_AT, $createdAt['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(ProfilePeer::CREATED_AT, $createdAt, $comparison);
	}

	/**
	 * Filter the query on the modified_at column
	 * 
	 * @param     string|array $modifiedAt The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ProfileQuery The current query, for fluid interface
	 */
	public function filterByModifiedAt($modifiedAt = null, $comparison = null)
	{
		if (is_array($modifiedAt)) {
			$useMinMax = false;
			if (isset($modifiedAt['min'])) {
				$this->addUsingAlias(ProfilePeer::MODIFIED_AT, $modifiedAt['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($modifiedAt['max'])) {
				$this->addUsingAlias(ProfilePeer::MODIFIED_AT, $modifiedAt['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(ProfilePeer::MODIFIED_AT, $modifiedAt, $comparison);
	}

	/**
	 * Filter the query by a related User object
	 *
	 * @param     User $user  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ProfileQuery The current query, for fluid interface
	 */
	public function filterByUser($user, $comparison = null)
	{
		return $this
			->addUsingAlias(ProfilePeer::USER_ID, $user->getId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the User relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    ProfileQuery The current query, for fluid interface
	 */
	public function joinUser($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('User');
		
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
			$this->addJoinObject($join, 'User');
		}
		
		return $this;
	}

	/**
	 * Use the User relation User object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    UserQuery A secondary query class using the current class as primary query
	 */
	public function useUserQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinUser($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'User', 'UserQuery');
	}

	/**
	 * Exclude object from result
	 *
	 * @param     Profile $profile Object to remove from the list of results
	 *
	 * @return    ProfileQuery The current query, for fluid interface
	 */
	public function prune($profile = null)
	{
		if ($profile) {
			$this->addUsingAlias(ProfilePeer::ID, $profile->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseProfileQuery
