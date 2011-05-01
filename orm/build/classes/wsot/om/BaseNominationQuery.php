<?php


/**
 * Base class that represents a query for the 'nominations' table.
 *
 * 
 *
 * @method     NominationQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     NominationQuery orderByUserId($order = Criteria::ASC) Order by the user_id column
 * @method     NominationQuery orderBySchoolId($order = Criteria::ASC) Order by the school_id column
 * @method     NominationQuery orderBySalutation($order = Criteria::ASC) Order by the salutation column
 * @method     NominationQuery orderByFirstName($order = Criteria::ASC) Order by the first_name column
 * @method     NominationQuery orderByLastName($order = Criteria::ASC) Order by the last_name column
 * @method     NominationQuery orderByGender($order = Criteria::ASC) Order by the gender column
 * @method     NominationQuery orderBySubject($order = Criteria::ASC) Order by the subject column
 * @method     NominationQuery orderByGradeLevel($order = Criteria::ASC) Order by the grade_level column
 * @method     NominationQuery orderByStory($order = Criteria::ASC) Order by the story column
 * @method     NominationQuery orderByPosthumous($order = Criteria::ASC) Order by the posthumous column
 * @method     NominationQuery orderByFeatured($order = Criteria::ASC) Order by the featured column
 * @method     NominationQuery orderByPaid($order = Criteria::ASC) Order by the paid column
 * @method     NominationQuery orderByCreatedAt($order = Criteria::ASC) Order by the created_at column
 * @method     NominationQuery orderByModifiedAt($order = Criteria::ASC) Order by the modified_at column
 *
 * @method     NominationQuery groupById() Group by the id column
 * @method     NominationQuery groupByUserId() Group by the user_id column
 * @method     NominationQuery groupBySchoolId() Group by the school_id column
 * @method     NominationQuery groupBySalutation() Group by the salutation column
 * @method     NominationQuery groupByFirstName() Group by the first_name column
 * @method     NominationQuery groupByLastName() Group by the last_name column
 * @method     NominationQuery groupByGender() Group by the gender column
 * @method     NominationQuery groupBySubject() Group by the subject column
 * @method     NominationQuery groupByGradeLevel() Group by the grade_level column
 * @method     NominationQuery groupByStory() Group by the story column
 * @method     NominationQuery groupByPosthumous() Group by the posthumous column
 * @method     NominationQuery groupByFeatured() Group by the featured column
 * @method     NominationQuery groupByPaid() Group by the paid column
 * @method     NominationQuery groupByCreatedAt() Group by the created_at column
 * @method     NominationQuery groupByModifiedAt() Group by the modified_at column
 *
 * @method     NominationQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     NominationQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     NominationQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     NominationQuery leftJoinSchool($relationAlias = null) Adds a LEFT JOIN clause to the query using the School relation
 * @method     NominationQuery rightJoinSchool($relationAlias = null) Adds a RIGHT JOIN clause to the query using the School relation
 * @method     NominationQuery innerJoinSchool($relationAlias = null) Adds a INNER JOIN clause to the query using the School relation
 *
 * @method     Nomination findOne(PropelPDO $con = null) Return the first Nomination matching the query
 * @method     Nomination findOneOrCreate(PropelPDO $con = null) Return the first Nomination matching the query, or a new Nomination object populated from the query conditions when no match is found
 *
 * @method     Nomination findOneById(int $id) Return the first Nomination filtered by the id column
 * @method     Nomination findOneByUserId(int $user_id) Return the first Nomination filtered by the user_id column
 * @method     Nomination findOneBySchoolId(int $school_id) Return the first Nomination filtered by the school_id column
 * @method     Nomination findOneBySalutation(string $salutation) Return the first Nomination filtered by the salutation column
 * @method     Nomination findOneByFirstName(string $first_name) Return the first Nomination filtered by the first_name column
 * @method     Nomination findOneByLastName(string $last_name) Return the first Nomination filtered by the last_name column
 * @method     Nomination findOneByGender(string $gender) Return the first Nomination filtered by the gender column
 * @method     Nomination findOneBySubject(string $subject) Return the first Nomination filtered by the subject column
 * @method     Nomination findOneByGradeLevel(string $grade_level) Return the first Nomination filtered by the grade_level column
 * @method     Nomination findOneByStory(resource $story) Return the first Nomination filtered by the story column
 * @method     Nomination findOneByPosthumous(boolean $posthumous) Return the first Nomination filtered by the posthumous column
 * @method     Nomination findOneByFeatured(boolean $featured) Return the first Nomination filtered by the featured column
 * @method     Nomination findOneByPaid(boolean $paid) Return the first Nomination filtered by the paid column
 * @method     Nomination findOneByCreatedAt(string $created_at) Return the first Nomination filtered by the created_at column
 * @method     Nomination findOneByModifiedAt(string $modified_at) Return the first Nomination filtered by the modified_at column
 *
 * @method     array findById(int $id) Return Nomination objects filtered by the id column
 * @method     array findByUserId(int $user_id) Return Nomination objects filtered by the user_id column
 * @method     array findBySchoolId(int $school_id) Return Nomination objects filtered by the school_id column
 * @method     array findBySalutation(string $salutation) Return Nomination objects filtered by the salutation column
 * @method     array findByFirstName(string $first_name) Return Nomination objects filtered by the first_name column
 * @method     array findByLastName(string $last_name) Return Nomination objects filtered by the last_name column
 * @method     array findByGender(string $gender) Return Nomination objects filtered by the gender column
 * @method     array findBySubject(string $subject) Return Nomination objects filtered by the subject column
 * @method     array findByGradeLevel(string $grade_level) Return Nomination objects filtered by the grade_level column
 * @method     array findByStory(resource $story) Return Nomination objects filtered by the story column
 * @method     array findByPosthumous(boolean $posthumous) Return Nomination objects filtered by the posthumous column
 * @method     array findByFeatured(boolean $featured) Return Nomination objects filtered by the featured column
 * @method     array findByPaid(boolean $paid) Return Nomination objects filtered by the paid column
 * @method     array findByCreatedAt(string $created_at) Return Nomination objects filtered by the created_at column
 * @method     array findByModifiedAt(string $modified_at) Return Nomination objects filtered by the modified_at column
 *
 * @package    propel.generator.wsot.om
 */
abstract class BaseNominationQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseNominationQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'wsot', $modelName = 'Nomination', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new NominationQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    NominationQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof NominationQuery) {
			return $criteria;
		}
		$query = new NominationQuery();
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
	 * @return    Nomination|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = NominationPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    NominationQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(NominationPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    NominationQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(NominationPeer::ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id column
	 * 
	 * @param     int|array $id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NominationQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(NominationPeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the user_id column
	 * 
	 * @param     int|array $userId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NominationQuery The current query, for fluid interface
	 */
	public function filterByUserId($userId = null, $comparison = null)
	{
		if (is_array($userId)) {
			$useMinMax = false;
			if (isset($userId['min'])) {
				$this->addUsingAlias(NominationPeer::USER_ID, $userId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($userId['max'])) {
				$this->addUsingAlias(NominationPeer::USER_ID, $userId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(NominationPeer::USER_ID, $userId, $comparison);
	}

	/**
	 * Filter the query on the school_id column
	 * 
	 * @param     int|array $schoolId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NominationQuery The current query, for fluid interface
	 */
	public function filterBySchoolId($schoolId = null, $comparison = null)
	{
		if (is_array($schoolId)) {
			$useMinMax = false;
			if (isset($schoolId['min'])) {
				$this->addUsingAlias(NominationPeer::SCHOOL_ID, $schoolId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($schoolId['max'])) {
				$this->addUsingAlias(NominationPeer::SCHOOL_ID, $schoolId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(NominationPeer::SCHOOL_ID, $schoolId, $comparison);
	}

	/**
	 * Filter the query on the salutation column
	 * 
	 * @param     string $salutation The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NominationQuery The current query, for fluid interface
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
		return $this->addUsingAlias(NominationPeer::SALUTATION, $salutation, $comparison);
	}

	/**
	 * Filter the query on the first_name column
	 * 
	 * @param     string $firstName The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NominationQuery The current query, for fluid interface
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
		return $this->addUsingAlias(NominationPeer::FIRST_NAME, $firstName, $comparison);
	}

	/**
	 * Filter the query on the last_name column
	 * 
	 * @param     string $lastName The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NominationQuery The current query, for fluid interface
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
		return $this->addUsingAlias(NominationPeer::LAST_NAME, $lastName, $comparison);
	}

	/**
	 * Filter the query on the gender column
	 * 
	 * @param     string $gender The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NominationQuery The current query, for fluid interface
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
		return $this->addUsingAlias(NominationPeer::GENDER, $gender, $comparison);
	}

	/**
	 * Filter the query on the subject column
	 * 
	 * @param     string $subject The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NominationQuery The current query, for fluid interface
	 */
	public function filterBySubject($subject = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($subject)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $subject)) {
				$subject = str_replace('*', '%', $subject);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(NominationPeer::SUBJECT, $subject, $comparison);
	}

	/**
	 * Filter the query on the grade_level column
	 * 
	 * @param     string $gradeLevel The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NominationQuery The current query, for fluid interface
	 */
	public function filterByGradeLevel($gradeLevel = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($gradeLevel)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $gradeLevel)) {
				$gradeLevel = str_replace('*', '%', $gradeLevel);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(NominationPeer::GRADE_LEVEL, $gradeLevel, $comparison);
	}

	/**
	 * Filter the query on the story column
	 * 
	 * @param     mixed $story The value to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NominationQuery The current query, for fluid interface
	 */
	public function filterByStory($story = null, $comparison = null)
	{
		return $this->addUsingAlias(NominationPeer::STORY, $story, $comparison);
	}

	/**
	 * Filter the query on the posthumous column
	 * 
	 * @param     boolean|string $posthumous The value to use as filter.
	 *            Accepts strings ('false', 'off', '-', 'no', 'n', and '0' are false, the rest is true)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NominationQuery The current query, for fluid interface
	 */
	public function filterByPosthumous($posthumous = null, $comparison = null)
	{
		if (is_string($posthumous)) {
			$posthumous = in_array(strtolower($posthumous), array('false', 'off', '-', 'no', 'n', '0')) ? false : true;
		}
		return $this->addUsingAlias(NominationPeer::POSTHUMOUS, $posthumous, $comparison);
	}

	/**
	 * Filter the query on the featured column
	 * 
	 * @param     boolean|string $featured The value to use as filter.
	 *            Accepts strings ('false', 'off', '-', 'no', 'n', and '0' are false, the rest is true)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NominationQuery The current query, for fluid interface
	 */
	public function filterByFeatured($featured = null, $comparison = null)
	{
		if (is_string($featured)) {
			$featured = in_array(strtolower($featured), array('false', 'off', '-', 'no', 'n', '0')) ? false : true;
		}
		return $this->addUsingAlias(NominationPeer::FEATURED, $featured, $comparison);
	}

	/**
	 * Filter the query on the paid column
	 * 
	 * @param     boolean|string $paid The value to use as filter.
	 *            Accepts strings ('false', 'off', '-', 'no', 'n', and '0' are false, the rest is true)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NominationQuery The current query, for fluid interface
	 */
	public function filterByPaid($paid = null, $comparison = null)
	{
		if (is_string($paid)) {
			$paid = in_array(strtolower($paid), array('false', 'off', '-', 'no', 'n', '0')) ? false : true;
		}
		return $this->addUsingAlias(NominationPeer::PAID, $paid, $comparison);
	}

	/**
	 * Filter the query on the created_at column
	 * 
	 * @param     string|array $createdAt The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NominationQuery The current query, for fluid interface
	 */
	public function filterByCreatedAt($createdAt = null, $comparison = null)
	{
		if (is_array($createdAt)) {
			$useMinMax = false;
			if (isset($createdAt['min'])) {
				$this->addUsingAlias(NominationPeer::CREATED_AT, $createdAt['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($createdAt['max'])) {
				$this->addUsingAlias(NominationPeer::CREATED_AT, $createdAt['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(NominationPeer::CREATED_AT, $createdAt, $comparison);
	}

	/**
	 * Filter the query on the modified_at column
	 * 
	 * @param     string|array $modifiedAt The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NominationQuery The current query, for fluid interface
	 */
	public function filterByModifiedAt($modifiedAt = null, $comparison = null)
	{
		if (is_array($modifiedAt)) {
			$useMinMax = false;
			if (isset($modifiedAt['min'])) {
				$this->addUsingAlias(NominationPeer::MODIFIED_AT, $modifiedAt['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($modifiedAt['max'])) {
				$this->addUsingAlias(NominationPeer::MODIFIED_AT, $modifiedAt['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(NominationPeer::MODIFIED_AT, $modifiedAt, $comparison);
	}

	/**
	 * Filter the query by a related School object
	 *
	 * @param     School $school  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NominationQuery The current query, for fluid interface
	 */
	public function filterBySchool($school, $comparison = null)
	{
		return $this
			->addUsingAlias(NominationPeer::SCHOOL_ID, $school->getId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the School relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    NominationQuery The current query, for fluid interface
	 */
	public function joinSchool($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('School');
		
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
			$this->addJoinObject($join, 'School');
		}
		
		return $this;
	}

	/**
	 * Use the School relation School object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    SchoolQuery A secondary query class using the current class as primary query
	 */
	public function useSchoolQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinSchool($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'School', 'SchoolQuery');
	}

	/**
	 * Exclude object from result
	 *
	 * @param     Nomination $nomination Object to remove from the list of results
	 *
	 * @return    NominationQuery The current query, for fluid interface
	 */
	public function prune($nomination = null)
	{
		if ($nomination) {
			$this->addUsingAlias(NominationPeer::ID, $nomination->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseNominationQuery
