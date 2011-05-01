<?php


/**
 * Base class that represents a query for the 'districts' table.
 *
 * 
 *
 * @method     DistrictQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     DistrictQuery orderByName($order = Criteria::ASC) Order by the name column
 * @method     DistrictQuery orderByAddress1($order = Criteria::ASC) Order by the address1 column
 * @method     DistrictQuery orderByAddress2($order = Criteria::ASC) Order by the address2 column
 * @method     DistrictQuery orderByCity($order = Criteria::ASC) Order by the city column
 * @method     DistrictQuery orderByState($order = Criteria::ASC) Order by the state column
 * @method     DistrictQuery orderByCountry($order = Criteria::ASC) Order by the country column
 * @method     DistrictQuery orderByPostcode($order = Criteria::ASC) Order by the postcode column
 * @method     DistrictQuery orderByPhone($order = Criteria::ASC) Order by the phone column
 * @method     DistrictQuery orderByFax($order = Criteria::ASC) Order by the fax column
 * @method     DistrictQuery orderByEmail($order = Criteria::ASC) Order by the email column
 * @method     DistrictQuery orderByUrl($order = Criteria::ASC) Order by the url column
 * @method     DistrictQuery orderByCreatedAt($order = Criteria::ASC) Order by the created_at column
 * @method     DistrictQuery orderByModifiedAt($order = Criteria::ASC) Order by the modified_at column
 *
 * @method     DistrictQuery groupById() Group by the id column
 * @method     DistrictQuery groupByName() Group by the name column
 * @method     DistrictQuery groupByAddress1() Group by the address1 column
 * @method     DistrictQuery groupByAddress2() Group by the address2 column
 * @method     DistrictQuery groupByCity() Group by the city column
 * @method     DistrictQuery groupByState() Group by the state column
 * @method     DistrictQuery groupByCountry() Group by the country column
 * @method     DistrictQuery groupByPostcode() Group by the postcode column
 * @method     DistrictQuery groupByPhone() Group by the phone column
 * @method     DistrictQuery groupByFax() Group by the fax column
 * @method     DistrictQuery groupByEmail() Group by the email column
 * @method     DistrictQuery groupByUrl() Group by the url column
 * @method     DistrictQuery groupByCreatedAt() Group by the created_at column
 * @method     DistrictQuery groupByModifiedAt() Group by the modified_at column
 *
 * @method     DistrictQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     DistrictQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     DistrictQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     DistrictQuery leftJoinSchool($relationAlias = null) Adds a LEFT JOIN clause to the query using the School relation
 * @method     DistrictQuery rightJoinSchool($relationAlias = null) Adds a RIGHT JOIN clause to the query using the School relation
 * @method     DistrictQuery innerJoinSchool($relationAlias = null) Adds a INNER JOIN clause to the query using the School relation
 *
 * @method     District findOne(PropelPDO $con = null) Return the first District matching the query
 * @method     District findOneOrCreate(PropelPDO $con = null) Return the first District matching the query, or a new District object populated from the query conditions when no match is found
 *
 * @method     District findOneById(int $id) Return the first District filtered by the id column
 * @method     District findOneByName(string $name) Return the first District filtered by the name column
 * @method     District findOneByAddress1(string $address1) Return the first District filtered by the address1 column
 * @method     District findOneByAddress2(string $address2) Return the first District filtered by the address2 column
 * @method     District findOneByCity(string $city) Return the first District filtered by the city column
 * @method     District findOneByState(string $state) Return the first District filtered by the state column
 * @method     District findOneByCountry(string $country) Return the first District filtered by the country column
 * @method     District findOneByPostcode(string $postcode) Return the first District filtered by the postcode column
 * @method     District findOneByPhone(string $phone) Return the first District filtered by the phone column
 * @method     District findOneByFax(string $fax) Return the first District filtered by the fax column
 * @method     District findOneByEmail(string $email) Return the first District filtered by the email column
 * @method     District findOneByUrl(string $url) Return the first District filtered by the url column
 * @method     District findOneByCreatedAt(string $created_at) Return the first District filtered by the created_at column
 * @method     District findOneByModifiedAt(string $modified_at) Return the first District filtered by the modified_at column
 *
 * @method     array findById(int $id) Return District objects filtered by the id column
 * @method     array findByName(string $name) Return District objects filtered by the name column
 * @method     array findByAddress1(string $address1) Return District objects filtered by the address1 column
 * @method     array findByAddress2(string $address2) Return District objects filtered by the address2 column
 * @method     array findByCity(string $city) Return District objects filtered by the city column
 * @method     array findByState(string $state) Return District objects filtered by the state column
 * @method     array findByCountry(string $country) Return District objects filtered by the country column
 * @method     array findByPostcode(string $postcode) Return District objects filtered by the postcode column
 * @method     array findByPhone(string $phone) Return District objects filtered by the phone column
 * @method     array findByFax(string $fax) Return District objects filtered by the fax column
 * @method     array findByEmail(string $email) Return District objects filtered by the email column
 * @method     array findByUrl(string $url) Return District objects filtered by the url column
 * @method     array findByCreatedAt(string $created_at) Return District objects filtered by the created_at column
 * @method     array findByModifiedAt(string $modified_at) Return District objects filtered by the modified_at column
 *
 * @package    propel.generator.wsot.om
 */
abstract class BaseDistrictQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseDistrictQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'wsot', $modelName = 'District', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new DistrictQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    DistrictQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof DistrictQuery) {
			return $criteria;
		}
		$query = new DistrictQuery();
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
	 * @return    District|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = DistrictPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    DistrictQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(DistrictPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    DistrictQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(DistrictPeer::ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id column
	 * 
	 * @param     int|array $id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DistrictQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(DistrictPeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the name column
	 * 
	 * @param     string $name The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DistrictQuery The current query, for fluid interface
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
		return $this->addUsingAlias(DistrictPeer::NAME, $name, $comparison);
	}

	/**
	 * Filter the query on the address1 column
	 * 
	 * @param     string $address1 The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DistrictQuery The current query, for fluid interface
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
		return $this->addUsingAlias(DistrictPeer::ADDRESS1, $address1, $comparison);
	}

	/**
	 * Filter the query on the address2 column
	 * 
	 * @param     string $address2 The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DistrictQuery The current query, for fluid interface
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
		return $this->addUsingAlias(DistrictPeer::ADDRESS2, $address2, $comparison);
	}

	/**
	 * Filter the query on the city column
	 * 
	 * @param     string $city The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DistrictQuery The current query, for fluid interface
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
		return $this->addUsingAlias(DistrictPeer::CITY, $city, $comparison);
	}

	/**
	 * Filter the query on the state column
	 * 
	 * @param     string $state The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DistrictQuery The current query, for fluid interface
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
		return $this->addUsingAlias(DistrictPeer::STATE, $state, $comparison);
	}

	/**
	 * Filter the query on the country column
	 * 
	 * @param     string $country The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DistrictQuery The current query, for fluid interface
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
		return $this->addUsingAlias(DistrictPeer::COUNTRY, $country, $comparison);
	}

	/**
	 * Filter the query on the postcode column
	 * 
	 * @param     string $postcode The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DistrictQuery The current query, for fluid interface
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
		return $this->addUsingAlias(DistrictPeer::POSTCODE, $postcode, $comparison);
	}

	/**
	 * Filter the query on the phone column
	 * 
	 * @param     string $phone The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DistrictQuery The current query, for fluid interface
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
		return $this->addUsingAlias(DistrictPeer::PHONE, $phone, $comparison);
	}

	/**
	 * Filter the query on the fax column
	 * 
	 * @param     string $fax The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DistrictQuery The current query, for fluid interface
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
		return $this->addUsingAlias(DistrictPeer::FAX, $fax, $comparison);
	}

	/**
	 * Filter the query on the email column
	 * 
	 * @param     string $email The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DistrictQuery The current query, for fluid interface
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
		return $this->addUsingAlias(DistrictPeer::EMAIL, $email, $comparison);
	}

	/**
	 * Filter the query on the url column
	 * 
	 * @param     string $url The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DistrictQuery The current query, for fluid interface
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
		return $this->addUsingAlias(DistrictPeer::URL, $url, $comparison);
	}

	/**
	 * Filter the query on the created_at column
	 * 
	 * @param     string|array $createdAt The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DistrictQuery The current query, for fluid interface
	 */
	public function filterByCreatedAt($createdAt = null, $comparison = null)
	{
		if (is_array($createdAt)) {
			$useMinMax = false;
			if (isset($createdAt['min'])) {
				$this->addUsingAlias(DistrictPeer::CREATED_AT, $createdAt['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($createdAt['max'])) {
				$this->addUsingAlias(DistrictPeer::CREATED_AT, $createdAt['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(DistrictPeer::CREATED_AT, $createdAt, $comparison);
	}

	/**
	 * Filter the query on the modified_at column
	 * 
	 * @param     string|array $modifiedAt The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DistrictQuery The current query, for fluid interface
	 */
	public function filterByModifiedAt($modifiedAt = null, $comparison = null)
	{
		if (is_array($modifiedAt)) {
			$useMinMax = false;
			if (isset($modifiedAt['min'])) {
				$this->addUsingAlias(DistrictPeer::MODIFIED_AT, $modifiedAt['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($modifiedAt['max'])) {
				$this->addUsingAlias(DistrictPeer::MODIFIED_AT, $modifiedAt['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(DistrictPeer::MODIFIED_AT, $modifiedAt, $comparison);
	}

	/**
	 * Filter the query by a related School object
	 *
	 * @param     School $school  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DistrictQuery The current query, for fluid interface
	 */
	public function filterBySchool($school, $comparison = null)
	{
		return $this
			->addUsingAlias(DistrictPeer::ID, $school->getDistrictId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the School relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    DistrictQuery The current query, for fluid interface
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
	 * @param     District $district Object to remove from the list of results
	 *
	 * @return    DistrictQuery The current query, for fluid interface
	 */
	public function prune($district = null)
	{
		if ($district) {
			$this->addUsingAlias(DistrictPeer::ID, $district->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseDistrictQuery
