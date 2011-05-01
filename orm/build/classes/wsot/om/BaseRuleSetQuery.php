<?php


/**
 * Base class that represents a query for the 'rule_sets' table.
 *
 * 
 *
 * @method     RuleSetQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     RuleSetQuery orderByName($order = Criteria::ASC) Order by the name column
 * @method     RuleSetQuery orderByActive($order = Criteria::ASC) Order by the active column
 * @method     RuleSetQuery orderByRegistration($order = Criteria::ASC) Order by the registration column
 * @method     RuleSetQuery orderByLogin($order = Criteria::ASC) Order by the login column
 * @method     RuleSetQuery orderByCreatedAt($order = Criteria::ASC) Order by the created_at column
 * @method     RuleSetQuery orderByModifiedAt($order = Criteria::ASC) Order by the modified_at column
 *
 * @method     RuleSetQuery groupById() Group by the id column
 * @method     RuleSetQuery groupByName() Group by the name column
 * @method     RuleSetQuery groupByActive() Group by the active column
 * @method     RuleSetQuery groupByRegistration() Group by the registration column
 * @method     RuleSetQuery groupByLogin() Group by the login column
 * @method     RuleSetQuery groupByCreatedAt() Group by the created_at column
 * @method     RuleSetQuery groupByModifiedAt() Group by the modified_at column
 *
 * @method     RuleSetQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     RuleSetQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     RuleSetQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     RuleSet findOne(PropelPDO $con = null) Return the first RuleSet matching the query
 * @method     RuleSet findOneOrCreate(PropelPDO $con = null) Return the first RuleSet matching the query, or a new RuleSet object populated from the query conditions when no match is found
 *
 * @method     RuleSet findOneById(int $id) Return the first RuleSet filtered by the id column
 * @method     RuleSet findOneByName(string $name) Return the first RuleSet filtered by the name column
 * @method     RuleSet findOneByActive(boolean $active) Return the first RuleSet filtered by the active column
 * @method     RuleSet findOneByRegistration(string $registration) Return the first RuleSet filtered by the registration column
 * @method     RuleSet findOneByLogin(string $login) Return the first RuleSet filtered by the login column
 * @method     RuleSet findOneByCreatedAt(string $created_at) Return the first RuleSet filtered by the created_at column
 * @method     RuleSet findOneByModifiedAt(string $modified_at) Return the first RuleSet filtered by the modified_at column
 *
 * @method     array findById(int $id) Return RuleSet objects filtered by the id column
 * @method     array findByName(string $name) Return RuleSet objects filtered by the name column
 * @method     array findByActive(boolean $active) Return RuleSet objects filtered by the active column
 * @method     array findByRegistration(string $registration) Return RuleSet objects filtered by the registration column
 * @method     array findByLogin(string $login) Return RuleSet objects filtered by the login column
 * @method     array findByCreatedAt(string $created_at) Return RuleSet objects filtered by the created_at column
 * @method     array findByModifiedAt(string $modified_at) Return RuleSet objects filtered by the modified_at column
 *
 * @package    propel.generator.wsot.om
 */
abstract class BaseRuleSetQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseRuleSetQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'wsot', $modelName = 'RuleSet', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new RuleSetQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    RuleSetQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof RuleSetQuery) {
			return $criteria;
		}
		$query = new RuleSetQuery();
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
	 * @return    RuleSet|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = RuleSetPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    RuleSetQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(RuleSetPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    RuleSetQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(RuleSetPeer::ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id column
	 * 
	 * @param     int|array $id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    RuleSetQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(RuleSetPeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the name column
	 * 
	 * @param     string $name The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    RuleSetQuery The current query, for fluid interface
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
		return $this->addUsingAlias(RuleSetPeer::NAME, $name, $comparison);
	}

	/**
	 * Filter the query on the active column
	 * 
	 * @param     boolean|string $active The value to use as filter.
	 *            Accepts strings ('false', 'off', '-', 'no', 'n', and '0' are false, the rest is true)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    RuleSetQuery The current query, for fluid interface
	 */
	public function filterByActive($active = null, $comparison = null)
	{
		if (is_string($active)) {
			$active = in_array(strtolower($active), array('false', 'off', '-', 'no', 'n', '0')) ? false : true;
		}
		return $this->addUsingAlias(RuleSetPeer::ACTIVE, $active, $comparison);
	}

	/**
	 * Filter the query on the registration column
	 * 
	 * @param     string $registration The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    RuleSetQuery The current query, for fluid interface
	 */
	public function filterByRegistration($registration = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($registration)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $registration)) {
				$registration = str_replace('*', '%', $registration);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(RuleSetPeer::REGISTRATION, $registration, $comparison);
	}

	/**
	 * Filter the query on the login column
	 * 
	 * @param     string $login The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    RuleSetQuery The current query, for fluid interface
	 */
	public function filterByLogin($login = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($login)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $login)) {
				$login = str_replace('*', '%', $login);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(RuleSetPeer::LOGIN, $login, $comparison);
	}

	/**
	 * Filter the query on the created_at column
	 * 
	 * @param     string|array $createdAt The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    RuleSetQuery The current query, for fluid interface
	 */
	public function filterByCreatedAt($createdAt = null, $comparison = null)
	{
		if (is_array($createdAt)) {
			$useMinMax = false;
			if (isset($createdAt['min'])) {
				$this->addUsingAlias(RuleSetPeer::CREATED_AT, $createdAt['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($createdAt['max'])) {
				$this->addUsingAlias(RuleSetPeer::CREATED_AT, $createdAt['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(RuleSetPeer::CREATED_AT, $createdAt, $comparison);
	}

	/**
	 * Filter the query on the modified_at column
	 * 
	 * @param     string|array $modifiedAt The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    RuleSetQuery The current query, for fluid interface
	 */
	public function filterByModifiedAt($modifiedAt = null, $comparison = null)
	{
		if (is_array($modifiedAt)) {
			$useMinMax = false;
			if (isset($modifiedAt['min'])) {
				$this->addUsingAlias(RuleSetPeer::MODIFIED_AT, $modifiedAt['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($modifiedAt['max'])) {
				$this->addUsingAlias(RuleSetPeer::MODIFIED_AT, $modifiedAt['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(RuleSetPeer::MODIFIED_AT, $modifiedAt, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     RuleSet $ruleSet Object to remove from the list of results
	 *
	 * @return    RuleSetQuery The current query, for fluid interface
	 */
	public function prune($ruleSet = null)
	{
		if ($ruleSet) {
			$this->addUsingAlias(RuleSetPeer::ID, $ruleSet->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseRuleSetQuery
