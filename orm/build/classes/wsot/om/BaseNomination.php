<?php


/**
 * Base class that represents a row from the 'nominations' table.
 *
 * 
 *
 * @package    propel.generator.wsot.om
 */
abstract class BaseNomination extends BaseObject  implements Persistent
{

	/**
	 * Peer class name
	 */
	const PEER = 'NominationPeer';

	/**
	 * The Peer class.
	 * Instance provides a convenient way of calling static methods on a class
	 * that calling code may not be able to identify.
	 * @var        NominationPeer
	 */
	protected static $peer;

	/**
	 * The value for the id field.
	 * @var        int
	 */
	protected $id;

	/**
	 * The value for the user_id field.
	 * @var        int
	 */
	protected $user_id;

	/**
	 * The value for the school_id field.
	 * @var        int
	 */
	protected $school_id;

	/**
	 * The value for the salutation field.
	 * @var        string
	 */
	protected $salutation;

	/**
	 * The value for the first_name field.
	 * @var        string
	 */
	protected $first_name;

	/**
	 * The value for the last_name field.
	 * @var        string
	 */
	protected $last_name;

	/**
	 * The value for the gender field.
	 * @var        string
	 */
	protected $gender;

	/**
	 * The value for the subject field.
	 * @var        string
	 */
	protected $subject;

	/**
	 * The value for the grade_level field.
	 * @var        string
	 */
	protected $grade_level;

	/**
	 * The value for the story field.
	 * @var        resource
	 */
	protected $story;

	/**
	 * The value for the posthumous field.
	 * Note: this column has a database default value of: false
	 * @var        boolean
	 */
	protected $posthumous;

	/**
	 * The value for the featured field.
	 * Note: this column has a database default value of: false
	 * @var        boolean
	 */
	protected $featured;

	/**
	 * The value for the paid field.
	 * Note: this column has a database default value of: false
	 * @var        boolean
	 */
	protected $paid;

	/**
	 * The value for the created_at field.
	 * @var        string
	 */
	protected $created_at;

	/**
	 * The value for the modified_at field.
	 * @var        string
	 */
	protected $modified_at;

	/**
	 * @var        School
	 */
	protected $aSchool;

	/**
	 * Flag to prevent endless save loop, if this object is referenced
	 * by another object which falls in this transaction.
	 * @var        boolean
	 */
	protected $alreadyInSave = false;

	/**
	 * Flag to prevent endless validation loop, if this object is referenced
	 * by another object which falls in this transaction.
	 * @var        boolean
	 */
	protected $alreadyInValidation = false;

	/**
	 * Applies default values to this object.
	 * This method should be called from the object's constructor (or
	 * equivalent initialization method).
	 * @see        __construct()
	 */
	public function applyDefaultValues()
	{
		$this->posthumous = false;
		$this->featured = false;
		$this->paid = false;
	}

	/**
	 * Initializes internal state of BaseNomination object.
	 * @see        applyDefaults()
	 */
	public function __construct()
	{
		parent::__construct();
		$this->applyDefaultValues();
	}

	/**
	 * Get the [id] column value.
	 * 
	 * @return     int
	 */
	public function getId()
	{
		return $this->id;
	}

	/**
	 * Get the [user_id] column value.
	 * 
	 * @return     int
	 */
	public function getUserId()
	{
		return $this->user_id;
	}

	/**
	 * Get the [school_id] column value.
	 * 
	 * @return     int
	 */
	public function getSchoolId()
	{
		return $this->school_id;
	}

	/**
	 * Get the [salutation] column value.
	 * 
	 * @return     string
	 */
	public function getSalutation()
	{
		return $this->salutation;
	}

	/**
	 * Get the [first_name] column value.
	 * 
	 * @return     string
	 */
	public function getFirstName()
	{
		return $this->first_name;
	}

	/**
	 * Get the [last_name] column value.
	 * 
	 * @return     string
	 */
	public function getLastName()
	{
		return $this->last_name;
	}

	/**
	 * Get the [gender] column value.
	 * 
	 * @return     string
	 */
	public function getGender()
	{
		return $this->gender;
	}

	/**
	 * Get the [subject] column value.
	 * 
	 * @return     string
	 */
	public function getSubject()
	{
		return $this->subject;
	}

	/**
	 * Get the [grade_level] column value.
	 * 
	 * @return     string
	 */
	public function getGradeLevel()
	{
		return $this->grade_level;
	}

	/**
	 * Get the [story] column value.
	 * 
	 * @return     resource
	 */
	public function getStory()
	{
		return $this->story;
	}

	/**
	 * Get the [posthumous] column value.
	 * 
	 * @return     boolean
	 */
	public function getPosthumous()
	{
		return $this->posthumous;
	}

	/**
	 * Get the [featured] column value.
	 * 
	 * @return     boolean
	 */
	public function getFeatured()
	{
		return $this->featured;
	}

	/**
	 * Get the [paid] column value.
	 * 
	 * @return     boolean
	 */
	public function getPaid()
	{
		return $this->paid;
	}

	/**
	 * Get the [optionally formatted] temporal [created_at] column value.
	 * 
	 *
	 * @param      string $format The date/time format string (either date()-style or strftime()-style).
	 *							If format is NULL, then the raw DateTime object will be returned.
	 * @return     mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00 00:00:00
	 * @throws     PropelException - if unable to parse/validate the date/time value.
	 */
	public function getCreatedAt($format = 'Y-m-d H:i:s')
	{
		if ($this->created_at === null) {
			return null;
		}


		if ($this->created_at === '0000-00-00 00:00:00') {
			// while technically this is not a default value of NULL,
			// this seems to be closest in meaning.
			return null;
		} else {
			try {
				$dt = new DateTime($this->created_at);
			} catch (Exception $x) {
				throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->created_at, true), $x);
			}
		}

		if ($format === null) {
			// Because propel.useDateTimeClass is TRUE, we return a DateTime object.
			return $dt;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $dt->format('U'));
		} else {
			return $dt->format($format);
		}
	}

	/**
	 * Get the [optionally formatted] temporal [modified_at] column value.
	 * 
	 *
	 * @param      string $format The date/time format string (either date()-style or strftime()-style).
	 *							If format is NULL, then the raw DateTime object will be returned.
	 * @return     mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00 00:00:00
	 * @throws     PropelException - if unable to parse/validate the date/time value.
	 */
	public function getModifiedAt($format = 'Y-m-d H:i:s')
	{
		if ($this->modified_at === null) {
			return null;
		}


		if ($this->modified_at === '0000-00-00 00:00:00') {
			// while technically this is not a default value of NULL,
			// this seems to be closest in meaning.
			return null;
		} else {
			try {
				$dt = new DateTime($this->modified_at);
			} catch (Exception $x) {
				throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->modified_at, true), $x);
			}
		}

		if ($format === null) {
			// Because propel.useDateTimeClass is TRUE, we return a DateTime object.
			return $dt;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $dt->format('U'));
		} else {
			return $dt->format($format);
		}
	}

	/**
	 * Set the value of [id] column.
	 * 
	 * @param      int $v new value
	 * @return     Nomination The current object (for fluent API support)
	 */
	public function setId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = NominationPeer::ID;
		}

		return $this;
	} // setId()

	/**
	 * Set the value of [user_id] column.
	 * 
	 * @param      int $v new value
	 * @return     Nomination The current object (for fluent API support)
	 */
	public function setUserId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->user_id !== $v) {
			$this->user_id = $v;
			$this->modifiedColumns[] = NominationPeer::USER_ID;
		}

		return $this;
	} // setUserId()

	/**
	 * Set the value of [school_id] column.
	 * 
	 * @param      int $v new value
	 * @return     Nomination The current object (for fluent API support)
	 */
	public function setSchoolId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->school_id !== $v) {
			$this->school_id = $v;
			$this->modifiedColumns[] = NominationPeer::SCHOOL_ID;
		}

		if ($this->aSchool !== null && $this->aSchool->getId() !== $v) {
			$this->aSchool = null;
		}

		return $this;
	} // setSchoolId()

	/**
	 * Set the value of [salutation] column.
	 * 
	 * @param      string $v new value
	 * @return     Nomination The current object (for fluent API support)
	 */
	public function setSalutation($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->salutation !== $v) {
			$this->salutation = $v;
			$this->modifiedColumns[] = NominationPeer::SALUTATION;
		}

		return $this;
	} // setSalutation()

	/**
	 * Set the value of [first_name] column.
	 * 
	 * @param      string $v new value
	 * @return     Nomination The current object (for fluent API support)
	 */
	public function setFirstName($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->first_name !== $v) {
			$this->first_name = $v;
			$this->modifiedColumns[] = NominationPeer::FIRST_NAME;
		}

		return $this;
	} // setFirstName()

	/**
	 * Set the value of [last_name] column.
	 * 
	 * @param      string $v new value
	 * @return     Nomination The current object (for fluent API support)
	 */
	public function setLastName($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->last_name !== $v) {
			$this->last_name = $v;
			$this->modifiedColumns[] = NominationPeer::LAST_NAME;
		}

		return $this;
	} // setLastName()

	/**
	 * Set the value of [gender] column.
	 * 
	 * @param      string $v new value
	 * @return     Nomination The current object (for fluent API support)
	 */
	public function setGender($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->gender !== $v) {
			$this->gender = $v;
			$this->modifiedColumns[] = NominationPeer::GENDER;
		}

		return $this;
	} // setGender()

	/**
	 * Set the value of [subject] column.
	 * 
	 * @param      string $v new value
	 * @return     Nomination The current object (for fluent API support)
	 */
	public function setSubject($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->subject !== $v) {
			$this->subject = $v;
			$this->modifiedColumns[] = NominationPeer::SUBJECT;
		}

		return $this;
	} // setSubject()

	/**
	 * Set the value of [grade_level] column.
	 * 
	 * @param      string $v new value
	 * @return     Nomination The current object (for fluent API support)
	 */
	public function setGradeLevel($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->grade_level !== $v) {
			$this->grade_level = $v;
			$this->modifiedColumns[] = NominationPeer::GRADE_LEVEL;
		}

		return $this;
	} // setGradeLevel()

	/**
	 * Set the value of [story] column.
	 * 
	 * @param      resource $v new value
	 * @return     Nomination The current object (for fluent API support)
	 */
	public function setStory($v)
	{
		// Because BLOB columns are streams in PDO we have to assume that they are
		// always modified when a new value is passed in.  For example, the contents
		// of the stream itself may have changed externally.
		if (!is_resource($v) && $v !== null) {
			$this->story = fopen('php://memory', 'r+');
			fwrite($this->story, $v);
			rewind($this->story);
		} else { // it's already a stream
			$this->story = $v;
		}
		$this->modifiedColumns[] = NominationPeer::STORY;

		return $this;
	} // setStory()

	/**
	 * Set the value of [posthumous] column.
	 * 
	 * @param      boolean $v new value
	 * @return     Nomination The current object (for fluent API support)
	 */
	public function setPosthumous($v)
	{
		if ($v !== null) {
			$v = (boolean) $v;
		}

		if ($this->posthumous !== $v || $this->isNew()) {
			$this->posthumous = $v;
			$this->modifiedColumns[] = NominationPeer::POSTHUMOUS;
		}

		return $this;
	} // setPosthumous()

	/**
	 * Set the value of [featured] column.
	 * 
	 * @param      boolean $v new value
	 * @return     Nomination The current object (for fluent API support)
	 */
	public function setFeatured($v)
	{
		if ($v !== null) {
			$v = (boolean) $v;
		}

		if ($this->featured !== $v || $this->isNew()) {
			$this->featured = $v;
			$this->modifiedColumns[] = NominationPeer::FEATURED;
		}

		return $this;
	} // setFeatured()

	/**
	 * Set the value of [paid] column.
	 * 
	 * @param      boolean $v new value
	 * @return     Nomination The current object (for fluent API support)
	 */
	public function setPaid($v)
	{
		if ($v !== null) {
			$v = (boolean) $v;
		}

		if ($this->paid !== $v || $this->isNew()) {
			$this->paid = $v;
			$this->modifiedColumns[] = NominationPeer::PAID;
		}

		return $this;
	} // setPaid()

	/**
	 * Sets the value of [created_at] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.  Empty string will
	 *						be treated as NULL for temporal objects.
	 * @return     Nomination The current object (for fluent API support)
	 */
	public function setCreatedAt($v)
	{
		// we treat '' as NULL for temporal objects because DateTime('') == DateTime('now')
		// -- which is unexpected, to say the least.
		if ($v === null || $v === '') {
			$dt = null;
		} elseif ($v instanceof DateTime) {
			$dt = $v;
		} else {
			// some string/numeric value passed; we normalize that so that we can
			// validate it.
			try {
				if (is_numeric($v)) { // if it's a unix timestamp
					$dt = new DateTime('@'.$v, new DateTimeZone('UTC'));
					// We have to explicitly specify and then change the time zone because of a
					// DateTime bug: http://bugs.php.net/bug.php?id=43003
					$dt->setTimeZone(new DateTimeZone(date_default_timezone_get()));
				} else {
					$dt = new DateTime($v);
				}
			} catch (Exception $x) {
				throw new PropelException('Error parsing date/time value: ' . var_export($v, true), $x);
			}
		}

		if ( $this->created_at !== null || $dt !== null ) {
			// (nested ifs are a little easier to read in this case)

			$currNorm = ($this->created_at !== null && $tmpDt = new DateTime($this->created_at)) ? $tmpDt->format('Y-m-d H:i:s') : null;
			$newNorm = ($dt !== null) ? $dt->format('Y-m-d H:i:s') : null;

			if ( ($currNorm !== $newNorm) // normalized values don't match 
					)
			{
				$this->created_at = ($dt ? $dt->format('Y-m-d H:i:s') : null);
				$this->modifiedColumns[] = NominationPeer::CREATED_AT;
			}
		} // if either are not null

		return $this;
	} // setCreatedAt()

	/**
	 * Sets the value of [modified_at] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.  Empty string will
	 *						be treated as NULL for temporal objects.
	 * @return     Nomination The current object (for fluent API support)
	 */
	public function setModifiedAt($v)
	{
		// we treat '' as NULL for temporal objects because DateTime('') == DateTime('now')
		// -- which is unexpected, to say the least.
		if ($v === null || $v === '') {
			$dt = null;
		} elseif ($v instanceof DateTime) {
			$dt = $v;
		} else {
			// some string/numeric value passed; we normalize that so that we can
			// validate it.
			try {
				if (is_numeric($v)) { // if it's a unix timestamp
					$dt = new DateTime('@'.$v, new DateTimeZone('UTC'));
					// We have to explicitly specify and then change the time zone because of a
					// DateTime bug: http://bugs.php.net/bug.php?id=43003
					$dt->setTimeZone(new DateTimeZone(date_default_timezone_get()));
				} else {
					$dt = new DateTime($v);
				}
			} catch (Exception $x) {
				throw new PropelException('Error parsing date/time value: ' . var_export($v, true), $x);
			}
		}

		if ( $this->modified_at !== null || $dt !== null ) {
			// (nested ifs are a little easier to read in this case)

			$currNorm = ($this->modified_at !== null && $tmpDt = new DateTime($this->modified_at)) ? $tmpDt->format('Y-m-d H:i:s') : null;
			$newNorm = ($dt !== null) ? $dt->format('Y-m-d H:i:s') : null;

			if ( ($currNorm !== $newNorm) // normalized values don't match 
					)
			{
				$this->modified_at = ($dt ? $dt->format('Y-m-d H:i:s') : null);
				$this->modifiedColumns[] = NominationPeer::MODIFIED_AT;
			}
		} // if either are not null

		return $this;
	} // setModifiedAt()

	/**
	 * Indicates whether the columns in this object are only set to default values.
	 *
	 * This method can be used in conjunction with isModified() to indicate whether an object is both
	 * modified _and_ has some values set which are non-default.
	 *
	 * @return     boolean Whether the columns in this object are only been set with default values.
	 */
	public function hasOnlyDefaultValues()
	{
			if ($this->posthumous !== false) {
				return false;
			}

			if ($this->featured !== false) {
				return false;
			}

			if ($this->paid !== false) {
				return false;
			}

		// otherwise, everything was equal, so return TRUE
		return true;
	} // hasOnlyDefaultValues()

	/**
	 * Hydrates (populates) the object variables with values from the database resultset.
	 *
	 * An offset (0-based "start column") is specified so that objects can be hydrated
	 * with a subset of the columns in the resultset rows.  This is needed, for example,
	 * for results of JOIN queries where the resultset row includes columns from two or
	 * more tables.
	 *
	 * @param      array $row The row returned by PDOStatement->fetch(PDO::FETCH_NUM)
	 * @param      int $startcol 0-based offset column which indicates which restultset column to start with.
	 * @param      boolean $rehydrate Whether this object is being re-hydrated from the database.
	 * @return     int next starting column
	 * @throws     PropelException  - Any caught Exception will be rewrapped as a PropelException.
	 */
	public function hydrate($row, $startcol = 0, $rehydrate = false)
	{
		try {

			$this->id = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
			$this->user_id = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
			$this->school_id = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
			$this->salutation = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
			$this->first_name = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
			$this->last_name = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
			$this->gender = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
			$this->subject = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
			$this->grade_level = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
			if ($row[$startcol + 9] !== null) {
				$this->story = fopen('php://memory', 'r+');
				fwrite($this->story, $row[$startcol + 9]);
				rewind($this->story);
			} else {
				$this->story = null;
			}
			$this->posthumous = ($row[$startcol + 10] !== null) ? (boolean) $row[$startcol + 10] : null;
			$this->featured = ($row[$startcol + 11] !== null) ? (boolean) $row[$startcol + 11] : null;
			$this->paid = ($row[$startcol + 12] !== null) ? (boolean) $row[$startcol + 12] : null;
			$this->created_at = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
			$this->modified_at = ($row[$startcol + 14] !== null) ? (string) $row[$startcol + 14] : null;
			$this->resetModified();

			$this->setNew(false);

			if ($rehydrate) {
				$this->ensureConsistency();
			}

			return $startcol + 15; // 15 = NominationPeer::NUM_COLUMNS - NominationPeer::NUM_LAZY_LOAD_COLUMNS).

		} catch (Exception $e) {
			throw new PropelException("Error populating Nomination object", $e);
		}
	}

	/**
	 * Checks and repairs the internal consistency of the object.
	 *
	 * This method is executed after an already-instantiated object is re-hydrated
	 * from the database.  It exists to check any foreign keys to make sure that
	 * the objects related to the current object are correct based on foreign key.
	 *
	 * You can override this method in the stub class, but you should always invoke
	 * the base method from the overridden method (i.e. parent::ensureConsistency()),
	 * in case your model changes.
	 *
	 * @throws     PropelException
	 */
	public function ensureConsistency()
	{

		if ($this->aSchool !== null && $this->school_id !== $this->aSchool->getId()) {
			$this->aSchool = null;
		}
	} // ensureConsistency

	/**
	 * Reloads this object from datastore based on primary key and (optionally) resets all associated objects.
	 *
	 * This will only work if the object has been saved and has a valid primary key set.
	 *
	 * @param      boolean $deep (optional) Whether to also de-associated any related objects.
	 * @param      PropelPDO $con (optional) The PropelPDO connection to use.
	 * @return     void
	 * @throws     PropelException - if this object is deleted, unsaved or doesn't have pk match in db
	 */
	public function reload($deep = false, PropelPDO $con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("Cannot reload a deleted object.");
		}

		if ($this->isNew()) {
			throw new PropelException("Cannot reload an unsaved object.");
		}

		if ($con === null) {
			$con = Propel::getConnection(NominationPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		// We don't need to alter the object instance pool; we're just modifying this instance
		// already in the pool.

		$stmt = NominationPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
		$row = $stmt->fetch(PDO::FETCH_NUM);
		$stmt->closeCursor();
		if (!$row) {
			throw new PropelException('Cannot find matching row in the database to reload object values.');
		}
		$this->hydrate($row, 0, true); // rehydrate

		if ($deep) {  // also de-associate any related objects?

			$this->aSchool = null;
		} // if (deep)
	}

	/**
	 * Removes this object from datastore and sets delete attribute.
	 *
	 * @param      PropelPDO $con
	 * @return     void
	 * @throws     PropelException
	 * @see        BaseObject::setDeleted()
	 * @see        BaseObject::isDeleted()
	 */
	public function delete(PropelPDO $con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(NominationPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$con->beginTransaction();
		try {
			$ret = $this->preDelete($con);
			if ($ret) {
				NominationQuery::create()
					->filterByPrimaryKey($this->getPrimaryKey())
					->delete($con);
				$this->postDelete($con);
				$con->commit();
				$this->setDeleted(true);
			} else {
				$con->commit();
			}
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Persists this object to the database.
	 *
	 * If the object is new, it inserts it; otherwise an update is performed.
	 * All modified related objects will also be persisted in the doSave()
	 * method.  This method wraps all precipitate database operations in a
	 * single transaction.
	 *
	 * @param      PropelPDO $con
	 * @return     int The number of rows affected by this insert/update and any referring fk objects' save() operations.
	 * @throws     PropelException
	 * @see        doSave()
	 */
	public function save(PropelPDO $con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("You cannot save an object that has been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(NominationPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$con->beginTransaction();
		$isInsert = $this->isNew();
		try {
			$ret = $this->preSave($con);
			if ($isInsert) {
				$ret = $ret && $this->preInsert($con);
			} else {
				$ret = $ret && $this->preUpdate($con);
			}
			if ($ret) {
				$affectedRows = $this->doSave($con);
				if ($isInsert) {
					$this->postInsert($con);
				} else {
					$this->postUpdate($con);
				}
				$this->postSave($con);
				NominationPeer::addInstanceToPool($this);
			} else {
				$affectedRows = 0;
			}
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Performs the work of inserting or updating the row in the database.
	 *
	 * If the object is new, it inserts it; otherwise an update is performed.
	 * All related objects are also updated in this method.
	 *
	 * @param      PropelPDO $con
	 * @return     int The number of rows affected by this insert/update and any referring fk objects' save() operations.
	 * @throws     PropelException
	 * @see        save()
	 */
	protected function doSave(PropelPDO $con)
	{
		$affectedRows = 0; // initialize var to track total num of affected rows
		if (!$this->alreadyInSave) {
			$this->alreadyInSave = true;

			// We call the save method on the following object(s) if they
			// were passed to this object by their coresponding set
			// method.  This object relates to these object(s) by a
			// foreign key reference.

			if ($this->aSchool !== null) {
				if ($this->aSchool->isModified() || $this->aSchool->isNew()) {
					$affectedRows += $this->aSchool->save($con);
				}
				$this->setSchool($this->aSchool);
			}

			if ($this->isNew() ) {
				$this->modifiedColumns[] = NominationPeer::ID;
			}

			// If this object has been modified, then save it to the database.
			if ($this->isModified()) {
				if ($this->isNew()) {
					$criteria = $this->buildCriteria();
					if ($criteria->keyContainsValue(NominationPeer::ID) ) {
						throw new PropelException('Cannot insert a value for auto-increment primary key ('.NominationPeer::ID.')');
					}

					$pk = BasePeer::doInsert($criteria, $con);
					$affectedRows += 1;
					$this->setId($pk);  //[IMV] update autoincrement primary key
					$this->setNew(false);
				} else {
					$affectedRows += NominationPeer::doUpdate($this, $con);
				}

				// Rewind the story LOB column, since PDO does not rewind after inserting value.
				if ($this->story !== null && is_resource($this->story)) {
					rewind($this->story);
				}

				$this->resetModified(); // [HL] After being saved an object is no longer 'modified'
			}

			$this->alreadyInSave = false;

		}
		return $affectedRows;
	} // doSave()

	/**
	 * Array of ValidationFailed objects.
	 * @var        array ValidationFailed[]
	 */
	protected $validationFailures = array();

	/**
	 * Gets any ValidationFailed objects that resulted from last call to validate().
	 *
	 *
	 * @return     array ValidationFailed[]
	 * @see        validate()
	 */
	public function getValidationFailures()
	{
		return $this->validationFailures;
	}

	/**
	 * Validates the objects modified field values and all objects related to this table.
	 *
	 * If $columns is either a column name or an array of column names
	 * only those columns are validated.
	 *
	 * @param      mixed $columns Column name or an array of column names.
	 * @return     boolean Whether all columns pass validation.
	 * @see        doValidate()
	 * @see        getValidationFailures()
	 */
	public function validate($columns = null)
	{
		$res = $this->doValidate($columns);
		if ($res === true) {
			$this->validationFailures = array();
			return true;
		} else {
			$this->validationFailures = $res;
			return false;
		}
	}

	/**
	 * This function performs the validation work for complex object models.
	 *
	 * In addition to checking the current object, all related objects will
	 * also be validated.  If all pass then <code>true</code> is returned; otherwise
	 * an aggreagated array of ValidationFailed objects will be returned.
	 *
	 * @param      array $columns Array of column names to validate.
	 * @return     mixed <code>true</code> if all validations pass; array of <code>ValidationFailed</code> objets otherwise.
	 */
	protected function doValidate($columns = null)
	{
		if (!$this->alreadyInValidation) {
			$this->alreadyInValidation = true;
			$retval = null;

			$failureMap = array();


			// We call the validate method on the following object(s) if they
			// were passed to this object by their coresponding set
			// method.  This object relates to these object(s) by a
			// foreign key reference.

			if ($this->aSchool !== null) {
				if (!$this->aSchool->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aSchool->getValidationFailures());
				}
			}


			if (($retval = NominationPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	/**
	 * Retrieves a field from the object by name passed in as a string.
	 *
	 * @param      string $name name
	 * @param      string $type The type of fieldname the $name is of:
	 *                     one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
	 *                     BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
	 * @return     mixed Value of field.
	 */
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = NominationPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		$field = $this->getByPosition($pos);
		return $field;
	}

	/**
	 * Retrieves a field from the object by Position as specified in the xml schema.
	 * Zero-based.
	 *
	 * @param      int $pos position in xml schema
	 * @return     mixed Value of field at $pos
	 */
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getId();
				break;
			case 1:
				return $this->getUserId();
				break;
			case 2:
				return $this->getSchoolId();
				break;
			case 3:
				return $this->getSalutation();
				break;
			case 4:
				return $this->getFirstName();
				break;
			case 5:
				return $this->getLastName();
				break;
			case 6:
				return $this->getGender();
				break;
			case 7:
				return $this->getSubject();
				break;
			case 8:
				return $this->getGradeLevel();
				break;
			case 9:
				return $this->getStory();
				break;
			case 10:
				return $this->getPosthumous();
				break;
			case 11:
				return $this->getFeatured();
				break;
			case 12:
				return $this->getPaid();
				break;
			case 13:
				return $this->getCreatedAt();
				break;
			case 14:
				return $this->getModifiedAt();
				break;
			default:
				return null;
				break;
		} // switch()
	}

	/**
	 * Exports the object as an array.
	 *
	 * You can specify the key type of the array by passing one of the class
	 * type constants.
	 *
	 * @param     string  $keyType (optional) One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME,
	 *                    BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
	 *                    Defaults to BasePeer::TYPE_PHPNAME.
	 * @param     boolean $includeLazyLoadColumns (optional) Whether to include lazy loaded columns. Defaults to TRUE.
	 * @param     boolean $includeForeignObjects (optional) Whether to include hydrated related objects. Default to FALSE.
	 *
	 * @return    array an associative array containing the field names (as keys) and field values
	 */
	public function toArray($keyType = BasePeer::TYPE_PHPNAME, $includeLazyLoadColumns = true, $includeForeignObjects = false)
	{
		$keys = NominationPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getUserId(),
			$keys[2] => $this->getSchoolId(),
			$keys[3] => $this->getSalutation(),
			$keys[4] => $this->getFirstName(),
			$keys[5] => $this->getLastName(),
			$keys[6] => $this->getGender(),
			$keys[7] => $this->getSubject(),
			$keys[8] => $this->getGradeLevel(),
			$keys[9] => $this->getStory(),
			$keys[10] => $this->getPosthumous(),
			$keys[11] => $this->getFeatured(),
			$keys[12] => $this->getPaid(),
			$keys[13] => $this->getCreatedAt(),
			$keys[14] => $this->getModifiedAt(),
		);
		if ($includeForeignObjects) {
			if (null !== $this->aSchool) {
				$result['School'] = $this->aSchool->toArray($keyType, $includeLazyLoadColumns, true);
			}
		}
		return $result;
	}

	/**
	 * Sets a field from the object by name passed in as a string.
	 *
	 * @param      string $name peer name
	 * @param      mixed $value field value
	 * @param      string $type The type of fieldname the $name is of:
	 *                     one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
	 *                     BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
	 * @return     void
	 */
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = NominationPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	/**
	 * Sets a field from the object by Position as specified in the xml schema.
	 * Zero-based.
	 *
	 * @param      int $pos position in xml schema
	 * @param      mixed $value field value
	 * @return     void
	 */
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setId($value);
				break;
			case 1:
				$this->setUserId($value);
				break;
			case 2:
				$this->setSchoolId($value);
				break;
			case 3:
				$this->setSalutation($value);
				break;
			case 4:
				$this->setFirstName($value);
				break;
			case 5:
				$this->setLastName($value);
				break;
			case 6:
				$this->setGender($value);
				break;
			case 7:
				$this->setSubject($value);
				break;
			case 8:
				$this->setGradeLevel($value);
				break;
			case 9:
				$this->setStory($value);
				break;
			case 10:
				$this->setPosthumous($value);
				break;
			case 11:
				$this->setFeatured($value);
				break;
			case 12:
				$this->setPaid($value);
				break;
			case 13:
				$this->setCreatedAt($value);
				break;
			case 14:
				$this->setModifiedAt($value);
				break;
		} // switch()
	}

	/**
	 * Populates the object using an array.
	 *
	 * This is particularly useful when populating an object from one of the
	 * request arrays (e.g. $_POST).  This method goes through the column
	 * names, checking to see whether a matching key exists in populated
	 * array. If so the setByName() method is called for that column.
	 *
	 * You can specify the key type of the array by additionally passing one
	 * of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME,
	 * BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
	 * The default key type is the column's phpname (e.g. 'AuthorId')
	 *
	 * @param      array  $arr     An array to populate the object from.
	 * @param      string $keyType The type of keys the array uses.
	 * @return     void
	 */
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = NominationPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setUserId($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setSchoolId($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setSalutation($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setFirstName($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setLastName($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setGender($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setSubject($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setGradeLevel($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setStory($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setPosthumous($arr[$keys[10]]);
		if (array_key_exists($keys[11], $arr)) $this->setFeatured($arr[$keys[11]]);
		if (array_key_exists($keys[12], $arr)) $this->setPaid($arr[$keys[12]]);
		if (array_key_exists($keys[13], $arr)) $this->setCreatedAt($arr[$keys[13]]);
		if (array_key_exists($keys[14], $arr)) $this->setModifiedAt($arr[$keys[14]]);
	}

	/**
	 * Build a Criteria object containing the values of all modified columns in this object.
	 *
	 * @return     Criteria The Criteria object containing all modified values.
	 */
	public function buildCriteria()
	{
		$criteria = new Criteria(NominationPeer::DATABASE_NAME);

		if ($this->isColumnModified(NominationPeer::ID)) $criteria->add(NominationPeer::ID, $this->id);
		if ($this->isColumnModified(NominationPeer::USER_ID)) $criteria->add(NominationPeer::USER_ID, $this->user_id);
		if ($this->isColumnModified(NominationPeer::SCHOOL_ID)) $criteria->add(NominationPeer::SCHOOL_ID, $this->school_id);
		if ($this->isColumnModified(NominationPeer::SALUTATION)) $criteria->add(NominationPeer::SALUTATION, $this->salutation);
		if ($this->isColumnModified(NominationPeer::FIRST_NAME)) $criteria->add(NominationPeer::FIRST_NAME, $this->first_name);
		if ($this->isColumnModified(NominationPeer::LAST_NAME)) $criteria->add(NominationPeer::LAST_NAME, $this->last_name);
		if ($this->isColumnModified(NominationPeer::GENDER)) $criteria->add(NominationPeer::GENDER, $this->gender);
		if ($this->isColumnModified(NominationPeer::SUBJECT)) $criteria->add(NominationPeer::SUBJECT, $this->subject);
		if ($this->isColumnModified(NominationPeer::GRADE_LEVEL)) $criteria->add(NominationPeer::GRADE_LEVEL, $this->grade_level);
		if ($this->isColumnModified(NominationPeer::STORY)) $criteria->add(NominationPeer::STORY, $this->story);
		if ($this->isColumnModified(NominationPeer::POSTHUMOUS)) $criteria->add(NominationPeer::POSTHUMOUS, $this->posthumous);
		if ($this->isColumnModified(NominationPeer::FEATURED)) $criteria->add(NominationPeer::FEATURED, $this->featured);
		if ($this->isColumnModified(NominationPeer::PAID)) $criteria->add(NominationPeer::PAID, $this->paid);
		if ($this->isColumnModified(NominationPeer::CREATED_AT)) $criteria->add(NominationPeer::CREATED_AT, $this->created_at);
		if ($this->isColumnModified(NominationPeer::MODIFIED_AT)) $criteria->add(NominationPeer::MODIFIED_AT, $this->modified_at);

		return $criteria;
	}

	/**
	 * Builds a Criteria object containing the primary key for this object.
	 *
	 * Unlike buildCriteria() this method includes the primary key values regardless
	 * of whether or not they have been modified.
	 *
	 * @return     Criteria The Criteria object containing value(s) for primary key(s).
	 */
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(NominationPeer::DATABASE_NAME);
		$criteria->add(NominationPeer::ID, $this->id);

		return $criteria;
	}

	/**
	 * Returns the primary key for this object (row).
	 * @return     int
	 */
	public function getPrimaryKey()
	{
		return $this->getId();
	}

	/**
	 * Generic method to set the primary key (id column).
	 *
	 * @param      int $key Primary key.
	 * @return     void
	 */
	public function setPrimaryKey($key)
	{
		$this->setId($key);
	}

	/**
	 * Returns true if the primary key for this object is null.
	 * @return     boolean
	 */
	public function isPrimaryKeyNull()
	{
		return null === $this->getId();
	}

	/**
	 * Sets contents of passed object to values from current object.
	 *
	 * If desired, this method can also make copies of all associated (fkey referrers)
	 * objects.
	 *
	 * @param      object $copyObj An object of Nomination (or compatible) type.
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @throws     PropelException
	 */
	public function copyInto($copyObj, $deepCopy = false)
	{
		$copyObj->setUserId($this->user_id);
		$copyObj->setSchoolId($this->school_id);
		$copyObj->setSalutation($this->salutation);
		$copyObj->setFirstName($this->first_name);
		$copyObj->setLastName($this->last_name);
		$copyObj->setGender($this->gender);
		$copyObj->setSubject($this->subject);
		$copyObj->setGradeLevel($this->grade_level);
		$copyObj->setStory($this->story);
		$copyObj->setPosthumous($this->posthumous);
		$copyObj->setFeatured($this->featured);
		$copyObj->setPaid($this->paid);
		$copyObj->setCreatedAt($this->created_at);
		$copyObj->setModifiedAt($this->modified_at);

		$copyObj->setNew(true);
		$copyObj->setId(NULL); // this is a auto-increment column, so set to default value
	}

	/**
	 * Makes a copy of this object that will be inserted as a new row in table when saved.
	 * It creates a new object filling in the simple attributes, but skipping any primary
	 * keys that are defined for the table.
	 *
	 * If desired, this method can also make copies of all associated (fkey referrers)
	 * objects.
	 *
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @return     Nomination Clone of current object.
	 * @throws     PropelException
	 */
	public function copy($deepCopy = false)
	{
		// we use get_class(), because this might be a subclass
		$clazz = get_class($this);
		$copyObj = new $clazz();
		$this->copyInto($copyObj, $deepCopy);
		return $copyObj;
	}

	/**
	 * Returns a peer instance associated with this om.
	 *
	 * Since Peer classes are not to have any instance attributes, this method returns the
	 * same instance for all member of this class. The method could therefore
	 * be static, but this would prevent one from overriding the behavior.
	 *
	 * @return     NominationPeer
	 */
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new NominationPeer();
		}
		return self::$peer;
	}

	/**
	 * Declares an association between this object and a School object.
	 *
	 * @param      School $v
	 * @return     Nomination The current object (for fluent API support)
	 * @throws     PropelException
	 */
	public function setSchool(School $v = null)
	{
		if ($v === null) {
			$this->setSchoolId(NULL);
		} else {
			$this->setSchoolId($v->getId());
		}

		$this->aSchool = $v;

		// Add binding for other direction of this n:n relationship.
		// If this object has already been added to the School object, it will not be re-added.
		if ($v !== null) {
			$v->addNomination($this);
		}

		return $this;
	}


	/**
	 * Get the associated School object
	 *
	 * @param      PropelPDO Optional Connection object.
	 * @return     School The associated School object.
	 * @throws     PropelException
	 */
	public function getSchool(PropelPDO $con = null)
	{
		if ($this->aSchool === null && ($this->school_id !== null)) {
			$this->aSchool = SchoolQuery::create()->findPk($this->school_id, $con);
			/* The following can be used additionally to
				 guarantee the related object contains a reference
				 to this object.  This level of coupling may, however, be
				 undesirable since it could result in an only partially populated collection
				 in the referenced object.
				 $this->aSchool->addNominations($this);
			 */
		}
		return $this->aSchool;
	}

	/**
	 * Clears the current object and sets all attributes to their default values
	 */
	public function clear()
	{
		$this->id = null;
		$this->user_id = null;
		$this->school_id = null;
		$this->salutation = null;
		$this->first_name = null;
		$this->last_name = null;
		$this->gender = null;
		$this->subject = null;
		$this->grade_level = null;
		$this->story = null;
		$this->posthumous = null;
		$this->featured = null;
		$this->paid = null;
		$this->created_at = null;
		$this->modified_at = null;
		$this->alreadyInSave = false;
		$this->alreadyInValidation = false;
		$this->clearAllReferences();
		$this->applyDefaultValues();
		$this->resetModified();
		$this->setNew(true);
		$this->setDeleted(false);
	}

	/**
	 * Resets all collections of referencing foreign keys.
	 *
	 * This method is a user-space workaround for PHP's inability to garbage collect objects
	 * with circular references.  This is currently necessary when using Propel in certain
	 * daemon or large-volumne/high-memory operations.
	 *
	 * @param      boolean $deep Whether to also clear the references on all associated objects.
	 */
	public function clearAllReferences($deep = false)
	{
		if ($deep) {
		} // if ($deep)

		$this->aSchool = null;
	}

	/**
	 * Catches calls to virtual methods
	 */
	public function __call($name, $params)
	{
		if (preg_match('/get(\w+)/', $name, $matches)) {
			$virtualColumn = $matches[1];
			if ($this->hasVirtualColumn($virtualColumn)) {
				return $this->getVirtualColumn($virtualColumn);
			}
			// no lcfirst in php<5.3...
			$virtualColumn[0] = strtolower($virtualColumn[0]);
			if ($this->hasVirtualColumn($virtualColumn)) {
				return $this->getVirtualColumn($virtualColumn);
			}
		}
		return parent::__call($name, $params);
	}

} // BaseNomination
