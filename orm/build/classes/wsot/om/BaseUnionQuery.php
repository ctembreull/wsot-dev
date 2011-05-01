<?php


/**
 * Base class that represents a query for the 'unions' table.
 *
 * 
 *
 * @method     UnionQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     UnionQuery orderByName($order = Criteria::ASC) Order by the name column
 * @method     UnionQuery orderByAddress1($order = Criteria::ASC) Order by the address1 column
 * @method     UnionQuery orderByAddress2($order = Criteria::ASC) Order by the address2 column
 * @method     UnionQuery orderByCity($order = Criteria::ASC) Order by the city column
 * @method     UnionQuery orderByState($order = Criteria::ASC) Order by the state column
 * @method     UnionQuery orderByCountry($order = Criteria::ASC) Order by the country column
 * @method     UnionQuery orderByPostcode($order = Criteria::ASC) Order by the postcode column
 * @method     UnionQuery orderByPhone($order = Criteria::ASC) Order by the phone column
 * @method     UnionQuery orderByFax($order = Criteria::ASC) Order by the fax column
 * @method     UnionQuery orderByEmail($order = Criteria::ASC) Order by the email column
 * @method     UnionQuery orderByUrl($order = Criteria::ASC) Order by the url column
 * @method     UnionQuery orderByMembers($order = Criteria::ASC) Order by the members column
 * @method     UnionQuery orderByEstablished($order = Criteria::ASC) Order by the established column
 * @method     UnionQuery orderByCreatedAt($order = Criteria::ASC) Order by the created_at column
 * @method     UnionQuery orderByModifiedAt($order = Criteria::ASC) Order by the modified_at column
 *
 * @method     UnionQuery groupById() Group by the id column
 * @method     UnionQuery groupByName() Group by the name column
 * @method     UnionQuery groupByAddress1() Group by the address1 column
 * @method     UnionQuery groupByAddress2() Group by the address2 column
 * @method     UnionQuery groupByCity() Group by the city column
 * @method     UnionQuery groupByState() Group by the state column
 * @method     UnionQuery groupByCountry() Group by the country column
 * @method     UnionQuery groupByPostcode() Group by the postcode column
 * @method     UnionQuery groupByPhone() Group by the phone column
 * @method     UnionQuery groupByFax() Group by the fax column
 * @method     UnionQuery groupByEmail() Group by the email column
 * @method     UnionQuery groupByUrl() Group by the url column
 * @method     UnionQuery groupByMembers() Group by the members column
 * @method     UnionQuery groupByEstablished() Group by the established column
 * @method     UnionQuery groupByCreatedAt() Group by the created_at column
 * @method     UnionQuery groupByModifiedAt() Group by the modified_at column
 *
 * @method     UnionQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     UnionQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     UnionQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     Union findOne(PropelPDO $con = null) Return the first Union matching the query
 * @method     Union findOneOrCreate(PropelPDO $con = null) Return the first Union matching the query, or a new Union object populated from the query conditions when no match is found
 *
 * @method     Union findOneById(int $id) Return the first Union filtered by the id column
 * @method     Union findOneByName(string $name) Return the first Union filtered by the name column
 * @method     Union findOneByAddress1(string $address1) Return the first Union filtered by the address1 column
 * @method     Union findOneByAddress2(string $address2) Return the first Union filtered by the address2 column
 * @method     Union findOneByCity(string $city) Return the first Union filtered by the city column
 * @method     Union findOneByState(string $state) Return the first Union filtered by the state column
 * @method     Union findOneByCountry(string $country) Return the first Union filtered by the country column
 * @method     Union findOneByPostcode(string $postcode) Return the first Union filtered by the postcode column
 * @method     Union findOneByPhone(string $phone) Return the first Union filtered by the phone column
 * @method     Union findOneByFax(string $fax) Return the first Union filtered by the fax column
 * @method     Union findOneByEmail(string $email) Return the first Union filtered by the email column
 * @method     Union findOneByUrl(string $url) Return the first Union filtered by the url column
 * @method     Union findOneByMembers(int $members) Return the first Union filtered by the members column
 * @method     Union findOneByEstablished(string $established) Return the first Union filtered by the established column
 * @method     Union findOneByCreatedAt(string $created_at) Return the first Union filtered by the created_at column
 * @method     Union findOneByModifiedAt(string $modified_at) Return the first Union filtered by the modified_at column
 *
 * @method     array findById(int $id) Return Union objects filtered by the id column
 * @method     array findByName(string $name) Return Union objects filtered by the name column
 * @method     array findByAddress1(string $address1) Return Union objects filtered by the address1 column
 * @method     array findByAddress2(string $address2) Return Union objects filtered by the address2 column
 * @method     array findByCity(string $city) Return Union objects filtered by the city column
 * @method     array findByState(string $state) Return Union objects filtered by the state column
 * @method     array findByCountry(string $country) Return Union objects filtered by the country column
 * @method     array findByPostcode(string $postcode) Return Union objects filtered by the postcode column
 * @method     array findByPhone(string $phone) Return Union objects filtered by the phone column
 * @method     array findByFax(string $fax) Return Union objects filtered by the fax column
 * @method     array findByEmail(string $email) Return Union objects filtered by the email column
 * @method     array findByUrl(string $url) Return Union objects filtered by the url column
 * @method     array findByMembers(int $members) Return Union objects filtered by the members column
 * @method     array findByEstablished(string $established) Return Union objects filtered by the established column
 * @method     array findByCreatedAt(string $created_at) Return Union objects filtered by the created_at column
 * @method     array findByModifiedAt(string $modified_at) Return Union objects filtered by the modified_at column
 *
 * @package    propel.generator.wsot.om
 */
abstract class BaseUnionQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseUnionQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'wsot', $modelName = 'Union', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new UnionQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    UnionQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof UnionQuery) {
			return $criteria;
		}
		$query = new UnionQuery();
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
	 * @return    Union|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = UnionPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    UnionQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(UnionPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    UnionQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(UnionPeer::ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id column
	 * 
	 * @param     int|array $id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UnionQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(UnionPeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the name column
	 * 
	 * @param     string $name The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UnionQuery The current query, for fluid interface
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
		return $this->addUsingAlias(UnionPeer::NAME, $name, $comparison);
	}

	/**
	 * Filter the query on the address1 column
	 * 
	 * @param     string $address1 The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UnionQuery The current query, for fluid interface
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
		return $this->addUsingAlias(UnionPeer::ADDRESS1, $address1, $comparison);
	}

	/**
	 * Filter the query on the address2 column
	 * 
	 * @param     string $address2 The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UnionQuery The current query, for fluid interface
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
		return $this->addUsingAlias(UnionPeer::ADDRESS2, $address2, $comparison);
	}

	/**
	 * Filter the query on the city column
	 * 
	 * @param     string $city The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UnionQuery The current query, for fluid interface
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
		return $this->addUsingAlias(UnionPeer::CITY, $city, $comparison);
	}

	/**
	 * Filter the query on the state column
	 * 
	 * @param     string $state The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UnionQuery The current query, for fluid interface
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
		return $this->addUsingAlias(UnionPeer::STATE, $state, $comparison);
	}

	/**
	 * Filter the query on the country column
	 * 
	 * @param     string $country The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UnionQuery The current query, for fluid interface
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
		return $this->addUsingAlias(UnionPeer::COUNTRY, $country, $comparison);
	}

	/**
	 * Filter the query on the postcode column
	 * 
	 * @param     string $postcode The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UnionQuery The current query, for fluid interface
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
		return $this->addUsingAlias(UnionPeer::POSTCODE, $postcode, $comparison);
	}

	/**
	 * Filter the query on the phone column
	 * 
	 * @param     string $phone The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UnionQuery The current query, for fluid interface
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
		return $this->addUsingAlias(UnionPeer::PHONE, $phone, $comparison);
	}

	/**
	 * Filter the query on the fax column
	 * 
	 * @param     string $fax The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UnionQuery The current query, for fluid interface
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
		return $this->addUsingAlias(UnionPeer::FAX, $fax, $comparison);
	}

	/**
	 * Filter the query on the email column
	 * 
	 * @param     string $email The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UnionQuery The current query, for fluid interface
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
		return $this->addUsingAlias(UnionPeer::EMAIL, $email, $comparison);
	}

	/**
	 * Filter the query on the url column
	 * 
	 * @param     string $url The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UnionQuery The current query, for fluid interface
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
		return $this->addUsingAlias(UnionPeer::URL, $url, $comparison);
	}

	/**
	 * Filter the query on the members column
	 * 
	 * @param     int|array $members The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UnionQuery The current query, for fluid interface
	 */
	public function filterByMembers($members = null, $comparison = null)
	{
		if (is_array($members)) {
			$useMinMax = false;
			if (isset($members['min'])) {
				$this->addUsingAlias(UnionPeer::MEMBERS, $members['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($members['max'])) {
				$this->addUsingAlias(UnionPeer::MEMBERS, $members['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(UnionPeer::MEMBERS, $members, $comparison);
	}

	/**
	 * Filter the query on the established column
	 * 
	 * @param     string|array $established The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UnionQuery The current query, for fluid interface
	 */
	public function filterByEstablished($established = null, $comparison = null)
	{
		if (is_array($established)) {
			$useMinMax = false;
			if (isset($established['min'])) {
				$this->addUsingAlias(UnionPeer::ESTABLISHED, $established['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($established['max'])) {
				$this->addUsingAlias(UnionPeer::ESTABLISHED, $established['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(UnionPeer::ESTABLISHED, $established, $comparison);
	}

	/**
	 * Filter the query on the created_at column
	 * 
	 * @param     string|array $createdAt The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UnionQuery The current query, for fluid interface
	 */
	public function filterByCreatedAt($createdAt = null, $comparison = null)
	{
		if (is_array($createdAt)) {
			$useMinMax = false;
			if (isset($createdAt['min'])) {
				$this->addUsingAlias(UnionPeer::CREATED_AT, $createdAt['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($createdAt['max'])) {
				$this->addUsingAlias(UnionPeer::CREATED_AT, $createdAt['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(UnionPeer::CREATED_AT, $createdAt, $comparison);
	}

	/**
	 * Filter the query on the modified_at column
	 * 
	 * @param     string|array $modifiedAt The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UnionQuery The current query, for fluid interface
	 */
	public function filterByModifiedAt($modifiedAt = null, $comparison = null)
	{
		if (is_array($modifiedAt)) {
			$useMinMax = false;
			if (isset($modifiedAt['min'])) {
				$this->addUsingAlias(UnionPeer::MODIFIED_AT, $modifiedAt['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($modifiedAt['max'])) {
				$this->addUsingAlias(UnionPeer::MODIFIED_AT, $modifiedAt['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(UnionPeer::MODIFIED_AT, $modifiedAt, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     Union $union Object to remove from the list of results
	 *
	 * @return    UnionQuery The current query, for fluid interface
	 */
	public function prune($union = null)
	{
		if ($union) {
			$this->addUsingAlias(UnionPeer::ID, $union->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseUnionQuery
