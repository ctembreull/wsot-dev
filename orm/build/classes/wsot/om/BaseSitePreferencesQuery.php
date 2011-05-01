<?php


/**
 * Base class that represents a query for the 'site_preferences' table.
 *
 * 
 *
 * @method     SitePreferencesQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     SitePreferencesQuery orderByName($order = Criteria::ASC) Order by the name column
 * @method     SitePreferencesQuery orderByActive($order = Criteria::ASC) Order by the active column
 * @method     SitePreferencesQuery orderByRegistration($order = Criteria::ASC) Order by the registration column
 * @method     SitePreferencesQuery orderByLogin($order = Criteria::ASC) Order by the login column
 * @method     SitePreferencesQuery orderByCreatedAt($order = Criteria::ASC) Order by the created_at column
 *
 * @method     SitePreferencesQuery groupById() Group by the id column
 * @method     SitePreferencesQuery groupByName() Group by the name column
 * @method     SitePreferencesQuery groupByActive() Group by the active column
 * @method     SitePreferencesQuery groupByRegistration() Group by the registration column
 * @method     SitePreferencesQuery groupByLogin() Group by the login column
 * @method     SitePreferencesQuery groupByCreatedAt() Group by the created_at column
 *
 * @method     SitePreferencesQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     SitePreferencesQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     SitePreferencesQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     SitePreferences findOne(PropelPDO $con = null) Return the first SitePreferences matching the query
 * @method     SitePreferences findOneOrCreate(PropelPDO $con = null) Return the first SitePreferences matching the query, or a new SitePreferences object populated from the query conditions when no match is found
 *
 * @method     SitePreferences findOneById(int $id) Return the first SitePreferences filtered by the id column
 * @method     SitePreferences findOneByName(string $name) Return the first SitePreferences filtered by the name column
 * @method     SitePreferences findOneByActive(boolean $active) Return the first SitePreferences filtered by the active column
 * @method     SitePreferences findOneByRegistration(string $registration) Return the first SitePreferences filtered by the registration column
 * @method     SitePreferences findOneByLogin(string $login) Return the first SitePreferences filtered by the login column
 * @method     SitePreferences findOneByCreatedAt(string $created_at) Return the first SitePreferences filtered by the created_at column
 *
 * @method     array findById(int $id) Return SitePreferences objects filtered by the id column
 * @method     array findByName(string $name) Return SitePreferences objects filtered by the name column
 * @method     array findByActive(boolean $active) Return SitePreferences objects filtered by the active column
 * @method     array findByRegistration(string $registration) Return SitePreferences objects filtered by the registration column
 * @method     array findByLogin(string $login) Return SitePreferences objects filtered by the login column
 * @method     array findByCreatedAt(string $created_at) Return SitePreferences objects filtered by the created_at column
 *
 * @package    propel.generator.wsot.om
 */
abstract class BaseSitePreferencesQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseSitePreferencesQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'wsot_cake', $modelName = 'SitePreferences', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new SitePreferencesQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    SitePreferencesQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof SitePreferencesQuery) {
			return $criteria;
		}
		$query = new SitePreferencesQuery();
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
	 * @return    SitePreferences|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = SitePreferencesPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    SitePreferencesQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(SitePreferencesPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    SitePreferencesQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(SitePreferencesPeer::ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id column
	 * 
	 * @param     int|array $id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SitePreferencesQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(SitePreferencesPeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the name column
	 * 
	 * @param     string $name The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SitePreferencesQuery The current query, for fluid interface
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
		return $this->addUsingAlias(SitePreferencesPeer::NAME, $name, $comparison);
	}

	/**
	 * Filter the query on the active column
	 * 
	 * @param     boolean|string $active The value to use as filter.
	 *            Accepts strings ('false', 'off', '-', 'no', 'n', and '0' are false, the rest is true)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SitePreferencesQuery The current query, for fluid interface
	 */
	public function filterByActive($active = null, $comparison = null)
	{
		if (is_string($active)) {
			$active = in_array(strtolower($active), array('false', 'off', '-', 'no', 'n', '0')) ? false : true;
		}
		return $this->addUsingAlias(SitePreferencesPeer::ACTIVE, $active, $comparison);
	}

	/**
	 * Filter the query on the registration column
	 * 
	 * @param     string $registration The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SitePreferencesQuery The current query, for fluid interface
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
		return $this->addUsingAlias(SitePreferencesPeer::REGISTRATION, $registration, $comparison);
	}

	/**
	 * Filter the query on the login column
	 * 
	 * @param     string $login The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SitePreferencesQuery The current query, for fluid interface
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
		return $this->addUsingAlias(SitePreferencesPeer::LOGIN, $login, $comparison);
	}

	/**
	 * Filter the query on the created_at column
	 * 
	 * @param     string|array $createdAt The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SitePreferencesQuery The current query, for fluid interface
	 */
	public function filterByCreatedAt($createdAt = null, $comparison = null)
	{
		if (is_array($createdAt)) {
			$useMinMax = false;
			if (isset($createdAt['min'])) {
				$this->addUsingAlias(SitePreferencesPeer::CREATED_AT, $createdAt['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($createdAt['max'])) {
				$this->addUsingAlias(SitePreferencesPeer::CREATED_AT, $createdAt['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(SitePreferencesPeer::CREATED_AT, $createdAt, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     SitePreferences $sitePreferences Object to remove from the list of results
	 *
	 * @return    SitePreferencesQuery The current query, for fluid interface
	 */
	public function prune($sitePreferences = null)
	{
		if ($sitePreferences) {
			$this->addUsingAlias(SitePreferencesPeer::ID, $sitePreferences->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseSitePreferencesQuery
