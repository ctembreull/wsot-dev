<?php


/**
 * Base class that represents a query for the 'invitations' table.
 *
 * 
 *
 * @method     InvitationQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     InvitationQuery orderByUserId($order = Criteria::ASC) Order by the user_id column
 * @method     InvitationQuery orderByEmail($order = Criteria::ASC) Order by the email column
 * @method     InvitationQuery orderByFirstName($order = Criteria::ASC) Order by the first_name column
 * @method     InvitationQuery orderByLastName($order = Criteria::ASC) Order by the last_name column
 * @method     InvitationQuery orderByHash($order = Criteria::ASC) Order by the hash column
 * @method     InvitationQuery orderByRedeemed($order = Criteria::ASC) Order by the redeemed column
 * @method     InvitationQuery orderByCreatedAt($order = Criteria::ASC) Order by the created_at column
 * @method     InvitationQuery orderByModifiedAt($order = Criteria::ASC) Order by the modified_at column
 *
 * @method     InvitationQuery groupById() Group by the id column
 * @method     InvitationQuery groupByUserId() Group by the user_id column
 * @method     InvitationQuery groupByEmail() Group by the email column
 * @method     InvitationQuery groupByFirstName() Group by the first_name column
 * @method     InvitationQuery groupByLastName() Group by the last_name column
 * @method     InvitationQuery groupByHash() Group by the hash column
 * @method     InvitationQuery groupByRedeemed() Group by the redeemed column
 * @method     InvitationQuery groupByCreatedAt() Group by the created_at column
 * @method     InvitationQuery groupByModifiedAt() Group by the modified_at column
 *
 * @method     InvitationQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     InvitationQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     InvitationQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     InvitationQuery leftJoinUser($relationAlias = null) Adds a LEFT JOIN clause to the query using the User relation
 * @method     InvitationQuery rightJoinUser($relationAlias = null) Adds a RIGHT JOIN clause to the query using the User relation
 * @method     InvitationQuery innerJoinUser($relationAlias = null) Adds a INNER JOIN clause to the query using the User relation
 *
 * @method     Invitation findOne(PropelPDO $con = null) Return the first Invitation matching the query
 * @method     Invitation findOneOrCreate(PropelPDO $con = null) Return the first Invitation matching the query, or a new Invitation object populated from the query conditions when no match is found
 *
 * @method     Invitation findOneById(int $id) Return the first Invitation filtered by the id column
 * @method     Invitation findOneByUserId(int $user_id) Return the first Invitation filtered by the user_id column
 * @method     Invitation findOneByEmail(string $email) Return the first Invitation filtered by the email column
 * @method     Invitation findOneByFirstName(string $first_name) Return the first Invitation filtered by the first_name column
 * @method     Invitation findOneByLastName(string $last_name) Return the first Invitation filtered by the last_name column
 * @method     Invitation findOneByHash(string $hash) Return the first Invitation filtered by the hash column
 * @method     Invitation findOneByRedeemed(boolean $redeemed) Return the first Invitation filtered by the redeemed column
 * @method     Invitation findOneByCreatedAt(string $created_at) Return the first Invitation filtered by the created_at column
 * @method     Invitation findOneByModifiedAt(string $modified_at) Return the first Invitation filtered by the modified_at column
 *
 * @method     array findById(int $id) Return Invitation objects filtered by the id column
 * @method     array findByUserId(int $user_id) Return Invitation objects filtered by the user_id column
 * @method     array findByEmail(string $email) Return Invitation objects filtered by the email column
 * @method     array findByFirstName(string $first_name) Return Invitation objects filtered by the first_name column
 * @method     array findByLastName(string $last_name) Return Invitation objects filtered by the last_name column
 * @method     array findByHash(string $hash) Return Invitation objects filtered by the hash column
 * @method     array findByRedeemed(boolean $redeemed) Return Invitation objects filtered by the redeemed column
 * @method     array findByCreatedAt(string $created_at) Return Invitation objects filtered by the created_at column
 * @method     array findByModifiedAt(string $modified_at) Return Invitation objects filtered by the modified_at column
 *
 * @package    propel.generator.wsot.om
 */
abstract class BaseInvitationQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseInvitationQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'wsot', $modelName = 'Invitation', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new InvitationQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    InvitationQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof InvitationQuery) {
			return $criteria;
		}
		$query = new InvitationQuery();
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
	 * @return    Invitation|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = InvitationPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    InvitationQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(InvitationPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    InvitationQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(InvitationPeer::ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id column
	 * 
	 * @param     int|array $id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    InvitationQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(InvitationPeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the user_id column
	 * 
	 * @param     int|array $userId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    InvitationQuery The current query, for fluid interface
	 */
	public function filterByUserId($userId = null, $comparison = null)
	{
		if (is_array($userId)) {
			$useMinMax = false;
			if (isset($userId['min'])) {
				$this->addUsingAlias(InvitationPeer::USER_ID, $userId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($userId['max'])) {
				$this->addUsingAlias(InvitationPeer::USER_ID, $userId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(InvitationPeer::USER_ID, $userId, $comparison);
	}

	/**
	 * Filter the query on the email column
	 * 
	 * @param     string $email The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    InvitationQuery The current query, for fluid interface
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
		return $this->addUsingAlias(InvitationPeer::EMAIL, $email, $comparison);
	}

	/**
	 * Filter the query on the first_name column
	 * 
	 * @param     string $firstName The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    InvitationQuery The current query, for fluid interface
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
		return $this->addUsingAlias(InvitationPeer::FIRST_NAME, $firstName, $comparison);
	}

	/**
	 * Filter the query on the last_name column
	 * 
	 * @param     string $lastName The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    InvitationQuery The current query, for fluid interface
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
		return $this->addUsingAlias(InvitationPeer::LAST_NAME, $lastName, $comparison);
	}

	/**
	 * Filter the query on the hash column
	 * 
	 * @param     string $hash The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    InvitationQuery The current query, for fluid interface
	 */
	public function filterByHash($hash = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($hash)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $hash)) {
				$hash = str_replace('*', '%', $hash);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(InvitationPeer::HASH, $hash, $comparison);
	}

	/**
	 * Filter the query on the redeemed column
	 * 
	 * @param     boolean|string $redeemed The value to use as filter.
	 *            Accepts strings ('false', 'off', '-', 'no', 'n', and '0' are false, the rest is true)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    InvitationQuery The current query, for fluid interface
	 */
	public function filterByRedeemed($redeemed = null, $comparison = null)
	{
		if (is_string($redeemed)) {
			$redeemed = in_array(strtolower($redeemed), array('false', 'off', '-', 'no', 'n', '0')) ? false : true;
		}
		return $this->addUsingAlias(InvitationPeer::REDEEMED, $redeemed, $comparison);
	}

	/**
	 * Filter the query on the created_at column
	 * 
	 * @param     string|array $createdAt The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    InvitationQuery The current query, for fluid interface
	 */
	public function filterByCreatedAt($createdAt = null, $comparison = null)
	{
		if (is_array($createdAt)) {
			$useMinMax = false;
			if (isset($createdAt['min'])) {
				$this->addUsingAlias(InvitationPeer::CREATED_AT, $createdAt['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($createdAt['max'])) {
				$this->addUsingAlias(InvitationPeer::CREATED_AT, $createdAt['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(InvitationPeer::CREATED_AT, $createdAt, $comparison);
	}

	/**
	 * Filter the query on the modified_at column
	 * 
	 * @param     string|array $modifiedAt The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    InvitationQuery The current query, for fluid interface
	 */
	public function filterByModifiedAt($modifiedAt = null, $comparison = null)
	{
		if (is_array($modifiedAt)) {
			$useMinMax = false;
			if (isset($modifiedAt['min'])) {
				$this->addUsingAlias(InvitationPeer::MODIFIED_AT, $modifiedAt['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($modifiedAt['max'])) {
				$this->addUsingAlias(InvitationPeer::MODIFIED_AT, $modifiedAt['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(InvitationPeer::MODIFIED_AT, $modifiedAt, $comparison);
	}

	/**
	 * Filter the query by a related User object
	 *
	 * @param     User $user  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    InvitationQuery The current query, for fluid interface
	 */
	public function filterByUser($user, $comparison = null)
	{
		return $this
			->addUsingAlias(InvitationPeer::USER_ID, $user->getId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the User relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    InvitationQuery The current query, for fluid interface
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
	 * @param     Invitation $invitation Object to remove from the list of results
	 *
	 * @return    InvitationQuery The current query, for fluid interface
	 */
	public function prune($invitation = null)
	{
		if ($invitation) {
			$this->addUsingAlias(InvitationPeer::ID, $invitation->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseInvitationQuery
