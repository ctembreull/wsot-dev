<?php


/**
 * Base class that represents a row from the 'schools' table.
 *
 * 
 *
 * @package    propel.generator.wsot.om
 */
abstract class BaseSchool extends BaseObject  implements Persistent
{

	/**
	 * Peer class name
	 */
	const PEER = 'SchoolPeer';

	/**
	 * The Peer class.
	 * Instance provides a convenient way of calling static methods on a class
	 * that calling code may not be able to identify.
	 * @var        SchoolPeer
	 */
	protected static $peer;

	/**
	 * The value for the id field.
	 * @var        int
	 */
	protected $id;

	/**
	 * The value for the district_id field.
	 * @var        int
	 */
	protected $district_id;

	/**
	 * The value for the name field.
	 * @var        string
	 */
	protected $name;

	/**
	 * The value for the address1 field.
	 * @var        string
	 */
	protected $address1;

	/**
	 * The value for the address2 field.
	 * @var        string
	 */
	protected $address2;

	/**
	 * The value for the city field.
	 * @var        string
	 */
	protected $city;

	/**
	 * The value for the state field.
	 * @var        string
	 */
	protected $state;

	/**
	 * The value for the country field.
	 * @var        string
	 */
	protected $country;

	/**
	 * The value for the postcode field.
	 * @var        string
	 */
	protected $postcode;

	/**
	 * The value for the phone field.
	 * @var        string
	 */
	protected $phone;

	/**
	 * The value for the fax field.
	 * @var        string
	 */
	protected $fax;

	/**
	 * The value for the email field.
	 * @var        string
	 */
	protected $email;

	/**
	 * The value for the url field.
	 * @var        string
	 */
	protected $url;

	/**
	 * The value for the established field.
	 * @var        string
	 */
	protected $established;

	/**
	 * The value for the population field.
	 * @var        int
	 */
	protected $population;

	/**
	 * The value for the population_date field.
	 * @var        string
	 */
	protected $population_date;

	/**
	 * The value for the faculty field.
	 * @var        int
	 */
	protected $faculty;

	/**
	 * The value for the faculty_date field.
	 * @var        string
	 */
	protected $faculty_date;

	/**
	 * The value for the class_size field.
	 * @var        int
	 */
	protected $class_size;

	/**
	 * The value for the class_size_date field.
	 * @var        int
	 */
	protected $class_size_date;

	/**
	 * The value for the active field.
	 * Note: this column has a database default value of: false
	 * @var        boolean
	 */
	protected $active;

	/**
	 * The value for the elementary field.
	 * Note: this column has a database default value of: false
	 * @var        boolean
	 */
	protected $elementary;

	/**
	 * The value for the middle field.
	 * Note: this column has a database default value of: false
	 * @var        boolean
	 */
	protected $middle;

	/**
	 * The value for the secondary field.
	 * Note: this column has a database default value of: false
	 * @var        boolean
	 */
	protected $secondary;

	/**
	 * The value for the alternative field.
	 * Note: this column has a database default value of: false
	 * @var        boolean
	 */
	protected $alternative;

	/**
	 * The value for the public_school field.
	 * Note: this column has a database default value of: false
	 * @var        boolean
	 */
	protected $public_school;

	/**
	 * The value for the private_school field.
	 * Note: this column has a database default value of: false
	 * @var        boolean
	 */
	protected $private_school;

	/**
	 * The value for the parochial field.
	 * Note: this column has a database default value of: false
	 * @var        boolean
	 */
	protected $parochial;

	/**
	 * The value for the indian_affairs field.
	 * Note: this column has a database default value of: false
	 * @var        boolean
	 */
	protected $indian_affairs;

	/**
	 * The value for the independent field.
	 * Note: this column has a database default value of: false
	 * @var        boolean
	 */
	protected $independent;

	/**
	 * The value for the magnet field.
	 * Note: this column has a database default value of: false
	 * @var        boolean
	 */
	protected $magnet;

	/**
	 * The value for the charter field.
	 * Note: this column has a database default value of: false
	 * @var        boolean
	 */
	protected $charter;

	/**
	 * The value for the grade_min field.
	 * @var        string
	 */
	protected $grade_min;

	/**
	 * The value for the grade_max field.
	 * @var        string
	 */
	protected $grade_max;

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
	 * @var        District
	 */
	protected $aDistrict;

	/**
	 * @var        array Nomination[] Collection to store aggregation of Nomination objects.
	 */
	protected $collNominations;

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
		$this->active = false;
		$this->elementary = false;
		$this->middle = false;
		$this->secondary = false;
		$this->alternative = false;
		$this->public_school = false;
		$this->private_school = false;
		$this->parochial = false;
		$this->indian_affairs = false;
		$this->independent = false;
		$this->magnet = false;
		$this->charter = false;
	}

	/**
	 * Initializes internal state of BaseSchool object.
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
	 * Get the [district_id] column value.
	 * 
	 * @return     int
	 */
	public function getDistrictId()
	{
		return $this->district_id;
	}

	/**
	 * Get the [name] column value.
	 * 
	 * @return     string
	 */
	public function getName()
	{
		return $this->name;
	}

	/**
	 * Get the [address1] column value.
	 * 
	 * @return     string
	 */
	public function getAddress1()
	{
		return $this->address1;
	}

	/**
	 * Get the [address2] column value.
	 * 
	 * @return     string
	 */
	public function getAddress2()
	{
		return $this->address2;
	}

	/**
	 * Get the [city] column value.
	 * 
	 * @return     string
	 */
	public function getCity()
	{
		return $this->city;
	}

	/**
	 * Get the [state] column value.
	 * 
	 * @return     string
	 */
	public function getState()
	{
		return $this->state;
	}

	/**
	 * Get the [country] column value.
	 * 
	 * @return     string
	 */
	public function getCountry()
	{
		return $this->country;
	}

	/**
	 * Get the [postcode] column value.
	 * 
	 * @return     string
	 */
	public function getPostcode()
	{
		return $this->postcode;
	}

	/**
	 * Get the [phone] column value.
	 * 
	 * @return     string
	 */
	public function getPhone()
	{
		return $this->phone;
	}

	/**
	 * Get the [fax] column value.
	 * 
	 * @return     string
	 */
	public function getFax()
	{
		return $this->fax;
	}

	/**
	 * Get the [email] column value.
	 * 
	 * @return     string
	 */
	public function getEmail()
	{
		return $this->email;
	}

	/**
	 * Get the [url] column value.
	 * 
	 * @return     string
	 */
	public function getUrl()
	{
		return $this->url;
	}

	/**
	 * Get the [optionally formatted] temporal [established] column value.
	 * 
	 *
	 * @param      string $format The date/time format string (either date()-style or strftime()-style).
	 *							If format is NULL, then the raw DateTime object will be returned.
	 * @return     mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00
	 * @throws     PropelException - if unable to parse/validate the date/time value.
	 */
	public function getEstablished($format = '%x')
	{
		if ($this->established === null) {
			return null;
		}


		if ($this->established === '0000-00-00') {
			// while technically this is not a default value of NULL,
			// this seems to be closest in meaning.
			return null;
		} else {
			try {
				$dt = new DateTime($this->established);
			} catch (Exception $x) {
				throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->established, true), $x);
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
	 * Get the [population] column value.
	 * 
	 * @return     int
	 */
	public function getPopulation()
	{
		return $this->population;
	}

	/**
	 * Get the [optionally formatted] temporal [population_date] column value.
	 * 
	 *
	 * @param      string $format The date/time format string (either date()-style or strftime()-style).
	 *							If format is NULL, then the raw DateTime object will be returned.
	 * @return     mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00
	 * @throws     PropelException - if unable to parse/validate the date/time value.
	 */
	public function getPopulationDate($format = '%x')
	{
		if ($this->population_date === null) {
			return null;
		}


		if ($this->population_date === '0000-00-00') {
			// while technically this is not a default value of NULL,
			// this seems to be closest in meaning.
			return null;
		} else {
			try {
				$dt = new DateTime($this->population_date);
			} catch (Exception $x) {
				throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->population_date, true), $x);
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
	 * Get the [faculty] column value.
	 * 
	 * @return     int
	 */
	public function getFaculty()
	{
		return $this->faculty;
	}

	/**
	 * Get the [optionally formatted] temporal [faculty_date] column value.
	 * 
	 *
	 * @param      string $format The date/time format string (either date()-style or strftime()-style).
	 *							If format is NULL, then the raw DateTime object will be returned.
	 * @return     mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00
	 * @throws     PropelException - if unable to parse/validate the date/time value.
	 */
	public function getFacultyDate($format = '%x')
	{
		if ($this->faculty_date === null) {
			return null;
		}


		if ($this->faculty_date === '0000-00-00') {
			// while technically this is not a default value of NULL,
			// this seems to be closest in meaning.
			return null;
		} else {
			try {
				$dt = new DateTime($this->faculty_date);
			} catch (Exception $x) {
				throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->faculty_date, true), $x);
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
	 * Get the [class_size] column value.
	 * 
	 * @return     int
	 */
	public function getClassSize()
	{
		return $this->class_size;
	}

	/**
	 * Get the [class_size_date] column value.
	 * 
	 * @return     int
	 */
	public function getClassSizeDate()
	{
		return $this->class_size_date;
	}

	/**
	 * Get the [active] column value.
	 * 
	 * @return     boolean
	 */
	public function getActive()
	{
		return $this->active;
	}

	/**
	 * Get the [elementary] column value.
	 * 
	 * @return     boolean
	 */
	public function getElementary()
	{
		return $this->elementary;
	}

	/**
	 * Get the [middle] column value.
	 * 
	 * @return     boolean
	 */
	public function getMiddle()
	{
		return $this->middle;
	}

	/**
	 * Get the [secondary] column value.
	 * 
	 * @return     boolean
	 */
	public function getSecondary()
	{
		return $this->secondary;
	}

	/**
	 * Get the [alternative] column value.
	 * 
	 * @return     boolean
	 */
	public function getAlternative()
	{
		return $this->alternative;
	}

	/**
	 * Get the [public_school] column value.
	 * 
	 * @return     boolean
	 */
	public function getPublicSchool()
	{
		return $this->public_school;
	}

	/**
	 * Get the [private_school] column value.
	 * 
	 * @return     boolean
	 */
	public function getPrivateSchool()
	{
		return $this->private_school;
	}

	/**
	 * Get the [parochial] column value.
	 * 
	 * @return     boolean
	 */
	public function getParochial()
	{
		return $this->parochial;
	}

	/**
	 * Get the [indian_affairs] column value.
	 * 
	 * @return     boolean
	 */
	public function getIndianAffairs()
	{
		return $this->indian_affairs;
	}

	/**
	 * Get the [independent] column value.
	 * 
	 * @return     boolean
	 */
	public function getIndependent()
	{
		return $this->independent;
	}

	/**
	 * Get the [magnet] column value.
	 * 
	 * @return     boolean
	 */
	public function getMagnet()
	{
		return $this->magnet;
	}

	/**
	 * Get the [charter] column value.
	 * 
	 * @return     boolean
	 */
	public function getCharter()
	{
		return $this->charter;
	}

	/**
	 * Get the [grade_min] column value.
	 * 
	 * @return     string
	 */
	public function getGradeMin()
	{
		return $this->grade_min;
	}

	/**
	 * Get the [grade_max] column value.
	 * 
	 * @return     string
	 */
	public function getGradeMax()
	{
		return $this->grade_max;
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
	 * @return     School The current object (for fluent API support)
	 */
	public function setId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = SchoolPeer::ID;
		}

		return $this;
	} // setId()

	/**
	 * Set the value of [district_id] column.
	 * 
	 * @param      int $v new value
	 * @return     School The current object (for fluent API support)
	 */
	public function setDistrictId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->district_id !== $v) {
			$this->district_id = $v;
			$this->modifiedColumns[] = SchoolPeer::DISTRICT_ID;
		}

		if ($this->aDistrict !== null && $this->aDistrict->getId() !== $v) {
			$this->aDistrict = null;
		}

		return $this;
	} // setDistrictId()

	/**
	 * Set the value of [name] column.
	 * 
	 * @param      string $v new value
	 * @return     School The current object (for fluent API support)
	 */
	public function setName($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->name !== $v) {
			$this->name = $v;
			$this->modifiedColumns[] = SchoolPeer::NAME;
		}

		return $this;
	} // setName()

	/**
	 * Set the value of [address1] column.
	 * 
	 * @param      string $v new value
	 * @return     School The current object (for fluent API support)
	 */
	public function setAddress1($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->address1 !== $v) {
			$this->address1 = $v;
			$this->modifiedColumns[] = SchoolPeer::ADDRESS1;
		}

		return $this;
	} // setAddress1()

	/**
	 * Set the value of [address2] column.
	 * 
	 * @param      string $v new value
	 * @return     School The current object (for fluent API support)
	 */
	public function setAddress2($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->address2 !== $v) {
			$this->address2 = $v;
			$this->modifiedColumns[] = SchoolPeer::ADDRESS2;
		}

		return $this;
	} // setAddress2()

	/**
	 * Set the value of [city] column.
	 * 
	 * @param      string $v new value
	 * @return     School The current object (for fluent API support)
	 */
	public function setCity($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->city !== $v) {
			$this->city = $v;
			$this->modifiedColumns[] = SchoolPeer::CITY;
		}

		return $this;
	} // setCity()

	/**
	 * Set the value of [state] column.
	 * 
	 * @param      string $v new value
	 * @return     School The current object (for fluent API support)
	 */
	public function setState($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->state !== $v) {
			$this->state = $v;
			$this->modifiedColumns[] = SchoolPeer::STATE;
		}

		return $this;
	} // setState()

	/**
	 * Set the value of [country] column.
	 * 
	 * @param      string $v new value
	 * @return     School The current object (for fluent API support)
	 */
	public function setCountry($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->country !== $v) {
			$this->country = $v;
			$this->modifiedColumns[] = SchoolPeer::COUNTRY;
		}

		return $this;
	} // setCountry()

	/**
	 * Set the value of [postcode] column.
	 * 
	 * @param      string $v new value
	 * @return     School The current object (for fluent API support)
	 */
	public function setPostcode($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->postcode !== $v) {
			$this->postcode = $v;
			$this->modifiedColumns[] = SchoolPeer::POSTCODE;
		}

		return $this;
	} // setPostcode()

	/**
	 * Set the value of [phone] column.
	 * 
	 * @param      string $v new value
	 * @return     School The current object (for fluent API support)
	 */
	public function setPhone($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->phone !== $v) {
			$this->phone = $v;
			$this->modifiedColumns[] = SchoolPeer::PHONE;
		}

		return $this;
	} // setPhone()

	/**
	 * Set the value of [fax] column.
	 * 
	 * @param      string $v new value
	 * @return     School The current object (for fluent API support)
	 */
	public function setFax($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->fax !== $v) {
			$this->fax = $v;
			$this->modifiedColumns[] = SchoolPeer::FAX;
		}

		return $this;
	} // setFax()

	/**
	 * Set the value of [email] column.
	 * 
	 * @param      string $v new value
	 * @return     School The current object (for fluent API support)
	 */
	public function setEmail($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->email !== $v) {
			$this->email = $v;
			$this->modifiedColumns[] = SchoolPeer::EMAIL;
		}

		return $this;
	} // setEmail()

	/**
	 * Set the value of [url] column.
	 * 
	 * @param      string $v new value
	 * @return     School The current object (for fluent API support)
	 */
	public function setUrl($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->url !== $v) {
			$this->url = $v;
			$this->modifiedColumns[] = SchoolPeer::URL;
		}

		return $this;
	} // setUrl()

	/**
	 * Sets the value of [established] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.  Empty string will
	 *						be treated as NULL for temporal objects.
	 * @return     School The current object (for fluent API support)
	 */
	public function setEstablished($v)
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

		if ( $this->established !== null || $dt !== null ) {
			// (nested ifs are a little easier to read in this case)

			$currNorm = ($this->established !== null && $tmpDt = new DateTime($this->established)) ? $tmpDt->format('Y-m-d') : null;
			$newNorm = ($dt !== null) ? $dt->format('Y-m-d') : null;

			if ( ($currNorm !== $newNorm) // normalized values don't match 
					)
			{
				$this->established = ($dt ? $dt->format('Y-m-d') : null);
				$this->modifiedColumns[] = SchoolPeer::ESTABLISHED;
			}
		} // if either are not null

		return $this;
	} // setEstablished()

	/**
	 * Set the value of [population] column.
	 * 
	 * @param      int $v new value
	 * @return     School The current object (for fluent API support)
	 */
	public function setPopulation($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->population !== $v) {
			$this->population = $v;
			$this->modifiedColumns[] = SchoolPeer::POPULATION;
		}

		return $this;
	} // setPopulation()

	/**
	 * Sets the value of [population_date] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.  Empty string will
	 *						be treated as NULL for temporal objects.
	 * @return     School The current object (for fluent API support)
	 */
	public function setPopulationDate($v)
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

		if ( $this->population_date !== null || $dt !== null ) {
			// (nested ifs are a little easier to read in this case)

			$currNorm = ($this->population_date !== null && $tmpDt = new DateTime($this->population_date)) ? $tmpDt->format('Y-m-d') : null;
			$newNorm = ($dt !== null) ? $dt->format('Y-m-d') : null;

			if ( ($currNorm !== $newNorm) // normalized values don't match 
					)
			{
				$this->population_date = ($dt ? $dt->format('Y-m-d') : null);
				$this->modifiedColumns[] = SchoolPeer::POPULATION_DATE;
			}
		} // if either are not null

		return $this;
	} // setPopulationDate()

	/**
	 * Set the value of [faculty] column.
	 * 
	 * @param      int $v new value
	 * @return     School The current object (for fluent API support)
	 */
	public function setFaculty($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->faculty !== $v) {
			$this->faculty = $v;
			$this->modifiedColumns[] = SchoolPeer::FACULTY;
		}

		return $this;
	} // setFaculty()

	/**
	 * Sets the value of [faculty_date] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.  Empty string will
	 *						be treated as NULL for temporal objects.
	 * @return     School The current object (for fluent API support)
	 */
	public function setFacultyDate($v)
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

		if ( $this->faculty_date !== null || $dt !== null ) {
			// (nested ifs are a little easier to read in this case)

			$currNorm = ($this->faculty_date !== null && $tmpDt = new DateTime($this->faculty_date)) ? $tmpDt->format('Y-m-d') : null;
			$newNorm = ($dt !== null) ? $dt->format('Y-m-d') : null;

			if ( ($currNorm !== $newNorm) // normalized values don't match 
					)
			{
				$this->faculty_date = ($dt ? $dt->format('Y-m-d') : null);
				$this->modifiedColumns[] = SchoolPeer::FACULTY_DATE;
			}
		} // if either are not null

		return $this;
	} // setFacultyDate()

	/**
	 * Set the value of [class_size] column.
	 * 
	 * @param      int $v new value
	 * @return     School The current object (for fluent API support)
	 */
	public function setClassSize($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->class_size !== $v) {
			$this->class_size = $v;
			$this->modifiedColumns[] = SchoolPeer::CLASS_SIZE;
		}

		return $this;
	} // setClassSize()

	/**
	 * Set the value of [class_size_date] column.
	 * 
	 * @param      int $v new value
	 * @return     School The current object (for fluent API support)
	 */
	public function setClassSizeDate($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->class_size_date !== $v) {
			$this->class_size_date = $v;
			$this->modifiedColumns[] = SchoolPeer::CLASS_SIZE_DATE;
		}

		return $this;
	} // setClassSizeDate()

	/**
	 * Set the value of [active] column.
	 * 
	 * @param      boolean $v new value
	 * @return     School The current object (for fluent API support)
	 */
	public function setActive($v)
	{
		if ($v !== null) {
			$v = (boolean) $v;
		}

		if ($this->active !== $v || $this->isNew()) {
			$this->active = $v;
			$this->modifiedColumns[] = SchoolPeer::ACTIVE;
		}

		return $this;
	} // setActive()

	/**
	 * Set the value of [elementary] column.
	 * 
	 * @param      boolean $v new value
	 * @return     School The current object (for fluent API support)
	 */
	public function setElementary($v)
	{
		if ($v !== null) {
			$v = (boolean) $v;
		}

		if ($this->elementary !== $v || $this->isNew()) {
			$this->elementary = $v;
			$this->modifiedColumns[] = SchoolPeer::ELEMENTARY;
		}

		return $this;
	} // setElementary()

	/**
	 * Set the value of [middle] column.
	 * 
	 * @param      boolean $v new value
	 * @return     School The current object (for fluent API support)
	 */
	public function setMiddle($v)
	{
		if ($v !== null) {
			$v = (boolean) $v;
		}

		if ($this->middle !== $v || $this->isNew()) {
			$this->middle = $v;
			$this->modifiedColumns[] = SchoolPeer::MIDDLE;
		}

		return $this;
	} // setMiddle()

	/**
	 * Set the value of [secondary] column.
	 * 
	 * @param      boolean $v new value
	 * @return     School The current object (for fluent API support)
	 */
	public function setSecondary($v)
	{
		if ($v !== null) {
			$v = (boolean) $v;
		}

		if ($this->secondary !== $v || $this->isNew()) {
			$this->secondary = $v;
			$this->modifiedColumns[] = SchoolPeer::SECONDARY;
		}

		return $this;
	} // setSecondary()

	/**
	 * Set the value of [alternative] column.
	 * 
	 * @param      boolean $v new value
	 * @return     School The current object (for fluent API support)
	 */
	public function setAlternative($v)
	{
		if ($v !== null) {
			$v = (boolean) $v;
		}

		if ($this->alternative !== $v || $this->isNew()) {
			$this->alternative = $v;
			$this->modifiedColumns[] = SchoolPeer::ALTERNATIVE;
		}

		return $this;
	} // setAlternative()

	/**
	 * Set the value of [public_school] column.
	 * 
	 * @param      boolean $v new value
	 * @return     School The current object (for fluent API support)
	 */
	public function setPublicSchool($v)
	{
		if ($v !== null) {
			$v = (boolean) $v;
		}

		if ($this->public_school !== $v || $this->isNew()) {
			$this->public_school = $v;
			$this->modifiedColumns[] = SchoolPeer::PUBLIC_SCHOOL;
		}

		return $this;
	} // setPublicSchool()

	/**
	 * Set the value of [private_school] column.
	 * 
	 * @param      boolean $v new value
	 * @return     School The current object (for fluent API support)
	 */
	public function setPrivateSchool($v)
	{
		if ($v !== null) {
			$v = (boolean) $v;
		}

		if ($this->private_school !== $v || $this->isNew()) {
			$this->private_school = $v;
			$this->modifiedColumns[] = SchoolPeer::PRIVATE_SCHOOL;
		}

		return $this;
	} // setPrivateSchool()

	/**
	 * Set the value of [parochial] column.
	 * 
	 * @param      boolean $v new value
	 * @return     School The current object (for fluent API support)
	 */
	public function setParochial($v)
	{
		if ($v !== null) {
			$v = (boolean) $v;
		}

		if ($this->parochial !== $v || $this->isNew()) {
			$this->parochial = $v;
			$this->modifiedColumns[] = SchoolPeer::PAROCHIAL;
		}

		return $this;
	} // setParochial()

	/**
	 * Set the value of [indian_affairs] column.
	 * 
	 * @param      boolean $v new value
	 * @return     School The current object (for fluent API support)
	 */
	public function setIndianAffairs($v)
	{
		if ($v !== null) {
			$v = (boolean) $v;
		}

		if ($this->indian_affairs !== $v || $this->isNew()) {
			$this->indian_affairs = $v;
			$this->modifiedColumns[] = SchoolPeer::INDIAN_AFFAIRS;
		}

		return $this;
	} // setIndianAffairs()

	/**
	 * Set the value of [independent] column.
	 * 
	 * @param      boolean $v new value
	 * @return     School The current object (for fluent API support)
	 */
	public function setIndependent($v)
	{
		if ($v !== null) {
			$v = (boolean) $v;
		}

		if ($this->independent !== $v || $this->isNew()) {
			$this->independent = $v;
			$this->modifiedColumns[] = SchoolPeer::INDEPENDENT;
		}

		return $this;
	} // setIndependent()

	/**
	 * Set the value of [magnet] column.
	 * 
	 * @param      boolean $v new value
	 * @return     School The current object (for fluent API support)
	 */
	public function setMagnet($v)
	{
		if ($v !== null) {
			$v = (boolean) $v;
		}

		if ($this->magnet !== $v || $this->isNew()) {
			$this->magnet = $v;
			$this->modifiedColumns[] = SchoolPeer::MAGNET;
		}

		return $this;
	} // setMagnet()

	/**
	 * Set the value of [charter] column.
	 * 
	 * @param      boolean $v new value
	 * @return     School The current object (for fluent API support)
	 */
	public function setCharter($v)
	{
		if ($v !== null) {
			$v = (boolean) $v;
		}

		if ($this->charter !== $v || $this->isNew()) {
			$this->charter = $v;
			$this->modifiedColumns[] = SchoolPeer::CHARTER;
		}

		return $this;
	} // setCharter()

	/**
	 * Set the value of [grade_min] column.
	 * 
	 * @param      string $v new value
	 * @return     School The current object (for fluent API support)
	 */
	public function setGradeMin($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->grade_min !== $v) {
			$this->grade_min = $v;
			$this->modifiedColumns[] = SchoolPeer::GRADE_MIN;
		}

		return $this;
	} // setGradeMin()

	/**
	 * Set the value of [grade_max] column.
	 * 
	 * @param      string $v new value
	 * @return     School The current object (for fluent API support)
	 */
	public function setGradeMax($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->grade_max !== $v) {
			$this->grade_max = $v;
			$this->modifiedColumns[] = SchoolPeer::GRADE_MAX;
		}

		return $this;
	} // setGradeMax()

	/**
	 * Sets the value of [created_at] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.  Empty string will
	 *						be treated as NULL for temporal objects.
	 * @return     School The current object (for fluent API support)
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
				$this->modifiedColumns[] = SchoolPeer::CREATED_AT;
			}
		} // if either are not null

		return $this;
	} // setCreatedAt()

	/**
	 * Sets the value of [modified_at] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.  Empty string will
	 *						be treated as NULL for temporal objects.
	 * @return     School The current object (for fluent API support)
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
				$this->modifiedColumns[] = SchoolPeer::MODIFIED_AT;
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
			if ($this->active !== false) {
				return false;
			}

			if ($this->elementary !== false) {
				return false;
			}

			if ($this->middle !== false) {
				return false;
			}

			if ($this->secondary !== false) {
				return false;
			}

			if ($this->alternative !== false) {
				return false;
			}

			if ($this->public_school !== false) {
				return false;
			}

			if ($this->private_school !== false) {
				return false;
			}

			if ($this->parochial !== false) {
				return false;
			}

			if ($this->indian_affairs !== false) {
				return false;
			}

			if ($this->independent !== false) {
				return false;
			}

			if ($this->magnet !== false) {
				return false;
			}

			if ($this->charter !== false) {
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
			$this->district_id = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
			$this->name = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
			$this->address1 = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
			$this->address2 = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
			$this->city = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
			$this->state = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
			$this->country = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
			$this->postcode = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
			$this->phone = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
			$this->fax = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
			$this->email = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
			$this->url = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
			$this->established = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
			$this->population = ($row[$startcol + 14] !== null) ? (int) $row[$startcol + 14] : null;
			$this->population_date = ($row[$startcol + 15] !== null) ? (string) $row[$startcol + 15] : null;
			$this->faculty = ($row[$startcol + 16] !== null) ? (int) $row[$startcol + 16] : null;
			$this->faculty_date = ($row[$startcol + 17] !== null) ? (string) $row[$startcol + 17] : null;
			$this->class_size = ($row[$startcol + 18] !== null) ? (int) $row[$startcol + 18] : null;
			$this->class_size_date = ($row[$startcol + 19] !== null) ? (int) $row[$startcol + 19] : null;
			$this->active = ($row[$startcol + 20] !== null) ? (boolean) $row[$startcol + 20] : null;
			$this->elementary = ($row[$startcol + 21] !== null) ? (boolean) $row[$startcol + 21] : null;
			$this->middle = ($row[$startcol + 22] !== null) ? (boolean) $row[$startcol + 22] : null;
			$this->secondary = ($row[$startcol + 23] !== null) ? (boolean) $row[$startcol + 23] : null;
			$this->alternative = ($row[$startcol + 24] !== null) ? (boolean) $row[$startcol + 24] : null;
			$this->public_school = ($row[$startcol + 25] !== null) ? (boolean) $row[$startcol + 25] : null;
			$this->private_school = ($row[$startcol + 26] !== null) ? (boolean) $row[$startcol + 26] : null;
			$this->parochial = ($row[$startcol + 27] !== null) ? (boolean) $row[$startcol + 27] : null;
			$this->indian_affairs = ($row[$startcol + 28] !== null) ? (boolean) $row[$startcol + 28] : null;
			$this->independent = ($row[$startcol + 29] !== null) ? (boolean) $row[$startcol + 29] : null;
			$this->magnet = ($row[$startcol + 30] !== null) ? (boolean) $row[$startcol + 30] : null;
			$this->charter = ($row[$startcol + 31] !== null) ? (boolean) $row[$startcol + 31] : null;
			$this->grade_min = ($row[$startcol + 32] !== null) ? (string) $row[$startcol + 32] : null;
			$this->grade_max = ($row[$startcol + 33] !== null) ? (string) $row[$startcol + 33] : null;
			$this->created_at = ($row[$startcol + 34] !== null) ? (string) $row[$startcol + 34] : null;
			$this->modified_at = ($row[$startcol + 35] !== null) ? (string) $row[$startcol + 35] : null;
			$this->resetModified();

			$this->setNew(false);

			if ($rehydrate) {
				$this->ensureConsistency();
			}

			return $startcol + 36; // 36 = SchoolPeer::NUM_COLUMNS - SchoolPeer::NUM_LAZY_LOAD_COLUMNS).

		} catch (Exception $e) {
			throw new PropelException("Error populating School object", $e);
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

		if ($this->aDistrict !== null && $this->district_id !== $this->aDistrict->getId()) {
			$this->aDistrict = null;
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
			$con = Propel::getConnection(SchoolPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		// We don't need to alter the object instance pool; we're just modifying this instance
		// already in the pool.

		$stmt = SchoolPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
		$row = $stmt->fetch(PDO::FETCH_NUM);
		$stmt->closeCursor();
		if (!$row) {
			throw new PropelException('Cannot find matching row in the database to reload object values.');
		}
		$this->hydrate($row, 0, true); // rehydrate

		if ($deep) {  // also de-associate any related objects?

			$this->aDistrict = null;
			$this->collNominations = null;

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
			$con = Propel::getConnection(SchoolPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$con->beginTransaction();
		try {
			$ret = $this->preDelete($con);
			if ($ret) {
				SchoolQuery::create()
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
			$con = Propel::getConnection(SchoolPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
				SchoolPeer::addInstanceToPool($this);
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

			if ($this->aDistrict !== null) {
				if ($this->aDistrict->isModified() || $this->aDistrict->isNew()) {
					$affectedRows += $this->aDistrict->save($con);
				}
				$this->setDistrict($this->aDistrict);
			}

			if ($this->isNew() ) {
				$this->modifiedColumns[] = SchoolPeer::ID;
			}

			// If this object has been modified, then save it to the database.
			if ($this->isModified()) {
				if ($this->isNew()) {
					$criteria = $this->buildCriteria();
					if ($criteria->keyContainsValue(SchoolPeer::ID) ) {
						throw new PropelException('Cannot insert a value for auto-increment primary key ('.SchoolPeer::ID.')');
					}

					$pk = BasePeer::doInsert($criteria, $con);
					$affectedRows += 1;
					$this->setId($pk);  //[IMV] update autoincrement primary key
					$this->setNew(false);
				} else {
					$affectedRows += SchoolPeer::doUpdate($this, $con);
				}

				$this->resetModified(); // [HL] After being saved an object is no longer 'modified'
			}

			if ($this->collNominations !== null) {
				foreach ($this->collNominations as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
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

			if ($this->aDistrict !== null) {
				if (!$this->aDistrict->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aDistrict->getValidationFailures());
				}
			}


			if (($retval = SchoolPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}


				if ($this->collNominations !== null) {
					foreach ($this->collNominations as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
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
		$pos = SchoolPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getDistrictId();
				break;
			case 2:
				return $this->getName();
				break;
			case 3:
				return $this->getAddress1();
				break;
			case 4:
				return $this->getAddress2();
				break;
			case 5:
				return $this->getCity();
				break;
			case 6:
				return $this->getState();
				break;
			case 7:
				return $this->getCountry();
				break;
			case 8:
				return $this->getPostcode();
				break;
			case 9:
				return $this->getPhone();
				break;
			case 10:
				return $this->getFax();
				break;
			case 11:
				return $this->getEmail();
				break;
			case 12:
				return $this->getUrl();
				break;
			case 13:
				return $this->getEstablished();
				break;
			case 14:
				return $this->getPopulation();
				break;
			case 15:
				return $this->getPopulationDate();
				break;
			case 16:
				return $this->getFaculty();
				break;
			case 17:
				return $this->getFacultyDate();
				break;
			case 18:
				return $this->getClassSize();
				break;
			case 19:
				return $this->getClassSizeDate();
				break;
			case 20:
				return $this->getActive();
				break;
			case 21:
				return $this->getElementary();
				break;
			case 22:
				return $this->getMiddle();
				break;
			case 23:
				return $this->getSecondary();
				break;
			case 24:
				return $this->getAlternative();
				break;
			case 25:
				return $this->getPublicSchool();
				break;
			case 26:
				return $this->getPrivateSchool();
				break;
			case 27:
				return $this->getParochial();
				break;
			case 28:
				return $this->getIndianAffairs();
				break;
			case 29:
				return $this->getIndependent();
				break;
			case 30:
				return $this->getMagnet();
				break;
			case 31:
				return $this->getCharter();
				break;
			case 32:
				return $this->getGradeMin();
				break;
			case 33:
				return $this->getGradeMax();
				break;
			case 34:
				return $this->getCreatedAt();
				break;
			case 35:
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
		$keys = SchoolPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getDistrictId(),
			$keys[2] => $this->getName(),
			$keys[3] => $this->getAddress1(),
			$keys[4] => $this->getAddress2(),
			$keys[5] => $this->getCity(),
			$keys[6] => $this->getState(),
			$keys[7] => $this->getCountry(),
			$keys[8] => $this->getPostcode(),
			$keys[9] => $this->getPhone(),
			$keys[10] => $this->getFax(),
			$keys[11] => $this->getEmail(),
			$keys[12] => $this->getUrl(),
			$keys[13] => $this->getEstablished(),
			$keys[14] => $this->getPopulation(),
			$keys[15] => $this->getPopulationDate(),
			$keys[16] => $this->getFaculty(),
			$keys[17] => $this->getFacultyDate(),
			$keys[18] => $this->getClassSize(),
			$keys[19] => $this->getClassSizeDate(),
			$keys[20] => $this->getActive(),
			$keys[21] => $this->getElementary(),
			$keys[22] => $this->getMiddle(),
			$keys[23] => $this->getSecondary(),
			$keys[24] => $this->getAlternative(),
			$keys[25] => $this->getPublicSchool(),
			$keys[26] => $this->getPrivateSchool(),
			$keys[27] => $this->getParochial(),
			$keys[28] => $this->getIndianAffairs(),
			$keys[29] => $this->getIndependent(),
			$keys[30] => $this->getMagnet(),
			$keys[31] => $this->getCharter(),
			$keys[32] => $this->getGradeMin(),
			$keys[33] => $this->getGradeMax(),
			$keys[34] => $this->getCreatedAt(),
			$keys[35] => $this->getModifiedAt(),
		);
		if ($includeForeignObjects) {
			if (null !== $this->aDistrict) {
				$result['District'] = $this->aDistrict->toArray($keyType, $includeLazyLoadColumns, true);
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
		$pos = SchoolPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setDistrictId($value);
				break;
			case 2:
				$this->setName($value);
				break;
			case 3:
				$this->setAddress1($value);
				break;
			case 4:
				$this->setAddress2($value);
				break;
			case 5:
				$this->setCity($value);
				break;
			case 6:
				$this->setState($value);
				break;
			case 7:
				$this->setCountry($value);
				break;
			case 8:
				$this->setPostcode($value);
				break;
			case 9:
				$this->setPhone($value);
				break;
			case 10:
				$this->setFax($value);
				break;
			case 11:
				$this->setEmail($value);
				break;
			case 12:
				$this->setUrl($value);
				break;
			case 13:
				$this->setEstablished($value);
				break;
			case 14:
				$this->setPopulation($value);
				break;
			case 15:
				$this->setPopulationDate($value);
				break;
			case 16:
				$this->setFaculty($value);
				break;
			case 17:
				$this->setFacultyDate($value);
				break;
			case 18:
				$this->setClassSize($value);
				break;
			case 19:
				$this->setClassSizeDate($value);
				break;
			case 20:
				$this->setActive($value);
				break;
			case 21:
				$this->setElementary($value);
				break;
			case 22:
				$this->setMiddle($value);
				break;
			case 23:
				$this->setSecondary($value);
				break;
			case 24:
				$this->setAlternative($value);
				break;
			case 25:
				$this->setPublicSchool($value);
				break;
			case 26:
				$this->setPrivateSchool($value);
				break;
			case 27:
				$this->setParochial($value);
				break;
			case 28:
				$this->setIndianAffairs($value);
				break;
			case 29:
				$this->setIndependent($value);
				break;
			case 30:
				$this->setMagnet($value);
				break;
			case 31:
				$this->setCharter($value);
				break;
			case 32:
				$this->setGradeMin($value);
				break;
			case 33:
				$this->setGradeMax($value);
				break;
			case 34:
				$this->setCreatedAt($value);
				break;
			case 35:
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
		$keys = SchoolPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setDistrictId($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setName($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setAddress1($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setAddress2($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setCity($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setState($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setCountry($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setPostcode($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setPhone($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setFax($arr[$keys[10]]);
		if (array_key_exists($keys[11], $arr)) $this->setEmail($arr[$keys[11]]);
		if (array_key_exists($keys[12], $arr)) $this->setUrl($arr[$keys[12]]);
		if (array_key_exists($keys[13], $arr)) $this->setEstablished($arr[$keys[13]]);
		if (array_key_exists($keys[14], $arr)) $this->setPopulation($arr[$keys[14]]);
		if (array_key_exists($keys[15], $arr)) $this->setPopulationDate($arr[$keys[15]]);
		if (array_key_exists($keys[16], $arr)) $this->setFaculty($arr[$keys[16]]);
		if (array_key_exists($keys[17], $arr)) $this->setFacultyDate($arr[$keys[17]]);
		if (array_key_exists($keys[18], $arr)) $this->setClassSize($arr[$keys[18]]);
		if (array_key_exists($keys[19], $arr)) $this->setClassSizeDate($arr[$keys[19]]);
		if (array_key_exists($keys[20], $arr)) $this->setActive($arr[$keys[20]]);
		if (array_key_exists($keys[21], $arr)) $this->setElementary($arr[$keys[21]]);
		if (array_key_exists($keys[22], $arr)) $this->setMiddle($arr[$keys[22]]);
		if (array_key_exists($keys[23], $arr)) $this->setSecondary($arr[$keys[23]]);
		if (array_key_exists($keys[24], $arr)) $this->setAlternative($arr[$keys[24]]);
		if (array_key_exists($keys[25], $arr)) $this->setPublicSchool($arr[$keys[25]]);
		if (array_key_exists($keys[26], $arr)) $this->setPrivateSchool($arr[$keys[26]]);
		if (array_key_exists($keys[27], $arr)) $this->setParochial($arr[$keys[27]]);
		if (array_key_exists($keys[28], $arr)) $this->setIndianAffairs($arr[$keys[28]]);
		if (array_key_exists($keys[29], $arr)) $this->setIndependent($arr[$keys[29]]);
		if (array_key_exists($keys[30], $arr)) $this->setMagnet($arr[$keys[30]]);
		if (array_key_exists($keys[31], $arr)) $this->setCharter($arr[$keys[31]]);
		if (array_key_exists($keys[32], $arr)) $this->setGradeMin($arr[$keys[32]]);
		if (array_key_exists($keys[33], $arr)) $this->setGradeMax($arr[$keys[33]]);
		if (array_key_exists($keys[34], $arr)) $this->setCreatedAt($arr[$keys[34]]);
		if (array_key_exists($keys[35], $arr)) $this->setModifiedAt($arr[$keys[35]]);
	}

	/**
	 * Build a Criteria object containing the values of all modified columns in this object.
	 *
	 * @return     Criteria The Criteria object containing all modified values.
	 */
	public function buildCriteria()
	{
		$criteria = new Criteria(SchoolPeer::DATABASE_NAME);

		if ($this->isColumnModified(SchoolPeer::ID)) $criteria->add(SchoolPeer::ID, $this->id);
		if ($this->isColumnModified(SchoolPeer::DISTRICT_ID)) $criteria->add(SchoolPeer::DISTRICT_ID, $this->district_id);
		if ($this->isColumnModified(SchoolPeer::NAME)) $criteria->add(SchoolPeer::NAME, $this->name);
		if ($this->isColumnModified(SchoolPeer::ADDRESS1)) $criteria->add(SchoolPeer::ADDRESS1, $this->address1);
		if ($this->isColumnModified(SchoolPeer::ADDRESS2)) $criteria->add(SchoolPeer::ADDRESS2, $this->address2);
		if ($this->isColumnModified(SchoolPeer::CITY)) $criteria->add(SchoolPeer::CITY, $this->city);
		if ($this->isColumnModified(SchoolPeer::STATE)) $criteria->add(SchoolPeer::STATE, $this->state);
		if ($this->isColumnModified(SchoolPeer::COUNTRY)) $criteria->add(SchoolPeer::COUNTRY, $this->country);
		if ($this->isColumnModified(SchoolPeer::POSTCODE)) $criteria->add(SchoolPeer::POSTCODE, $this->postcode);
		if ($this->isColumnModified(SchoolPeer::PHONE)) $criteria->add(SchoolPeer::PHONE, $this->phone);
		if ($this->isColumnModified(SchoolPeer::FAX)) $criteria->add(SchoolPeer::FAX, $this->fax);
		if ($this->isColumnModified(SchoolPeer::EMAIL)) $criteria->add(SchoolPeer::EMAIL, $this->email);
		if ($this->isColumnModified(SchoolPeer::URL)) $criteria->add(SchoolPeer::URL, $this->url);
		if ($this->isColumnModified(SchoolPeer::ESTABLISHED)) $criteria->add(SchoolPeer::ESTABLISHED, $this->established);
		if ($this->isColumnModified(SchoolPeer::POPULATION)) $criteria->add(SchoolPeer::POPULATION, $this->population);
		if ($this->isColumnModified(SchoolPeer::POPULATION_DATE)) $criteria->add(SchoolPeer::POPULATION_DATE, $this->population_date);
		if ($this->isColumnModified(SchoolPeer::FACULTY)) $criteria->add(SchoolPeer::FACULTY, $this->faculty);
		if ($this->isColumnModified(SchoolPeer::FACULTY_DATE)) $criteria->add(SchoolPeer::FACULTY_DATE, $this->faculty_date);
		if ($this->isColumnModified(SchoolPeer::CLASS_SIZE)) $criteria->add(SchoolPeer::CLASS_SIZE, $this->class_size);
		if ($this->isColumnModified(SchoolPeer::CLASS_SIZE_DATE)) $criteria->add(SchoolPeer::CLASS_SIZE_DATE, $this->class_size_date);
		if ($this->isColumnModified(SchoolPeer::ACTIVE)) $criteria->add(SchoolPeer::ACTIVE, $this->active);
		if ($this->isColumnModified(SchoolPeer::ELEMENTARY)) $criteria->add(SchoolPeer::ELEMENTARY, $this->elementary);
		if ($this->isColumnModified(SchoolPeer::MIDDLE)) $criteria->add(SchoolPeer::MIDDLE, $this->middle);
		if ($this->isColumnModified(SchoolPeer::SECONDARY)) $criteria->add(SchoolPeer::SECONDARY, $this->secondary);
		if ($this->isColumnModified(SchoolPeer::ALTERNATIVE)) $criteria->add(SchoolPeer::ALTERNATIVE, $this->alternative);
		if ($this->isColumnModified(SchoolPeer::PUBLIC_SCHOOL)) $criteria->add(SchoolPeer::PUBLIC_SCHOOL, $this->public_school);
		if ($this->isColumnModified(SchoolPeer::PRIVATE_SCHOOL)) $criteria->add(SchoolPeer::PRIVATE_SCHOOL, $this->private_school);
		if ($this->isColumnModified(SchoolPeer::PAROCHIAL)) $criteria->add(SchoolPeer::PAROCHIAL, $this->parochial);
		if ($this->isColumnModified(SchoolPeer::INDIAN_AFFAIRS)) $criteria->add(SchoolPeer::INDIAN_AFFAIRS, $this->indian_affairs);
		if ($this->isColumnModified(SchoolPeer::INDEPENDENT)) $criteria->add(SchoolPeer::INDEPENDENT, $this->independent);
		if ($this->isColumnModified(SchoolPeer::MAGNET)) $criteria->add(SchoolPeer::MAGNET, $this->magnet);
		if ($this->isColumnModified(SchoolPeer::CHARTER)) $criteria->add(SchoolPeer::CHARTER, $this->charter);
		if ($this->isColumnModified(SchoolPeer::GRADE_MIN)) $criteria->add(SchoolPeer::GRADE_MIN, $this->grade_min);
		if ($this->isColumnModified(SchoolPeer::GRADE_MAX)) $criteria->add(SchoolPeer::GRADE_MAX, $this->grade_max);
		if ($this->isColumnModified(SchoolPeer::CREATED_AT)) $criteria->add(SchoolPeer::CREATED_AT, $this->created_at);
		if ($this->isColumnModified(SchoolPeer::MODIFIED_AT)) $criteria->add(SchoolPeer::MODIFIED_AT, $this->modified_at);

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
		$criteria = new Criteria(SchoolPeer::DATABASE_NAME);
		$criteria->add(SchoolPeer::ID, $this->id);

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
	 * @param      object $copyObj An object of School (or compatible) type.
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @throws     PropelException
	 */
	public function copyInto($copyObj, $deepCopy = false)
	{
		$copyObj->setDistrictId($this->district_id);
		$copyObj->setName($this->name);
		$copyObj->setAddress1($this->address1);
		$copyObj->setAddress2($this->address2);
		$copyObj->setCity($this->city);
		$copyObj->setState($this->state);
		$copyObj->setCountry($this->country);
		$copyObj->setPostcode($this->postcode);
		$copyObj->setPhone($this->phone);
		$copyObj->setFax($this->fax);
		$copyObj->setEmail($this->email);
		$copyObj->setUrl($this->url);
		$copyObj->setEstablished($this->established);
		$copyObj->setPopulation($this->population);
		$copyObj->setPopulationDate($this->population_date);
		$copyObj->setFaculty($this->faculty);
		$copyObj->setFacultyDate($this->faculty_date);
		$copyObj->setClassSize($this->class_size);
		$copyObj->setClassSizeDate($this->class_size_date);
		$copyObj->setActive($this->active);
		$copyObj->setElementary($this->elementary);
		$copyObj->setMiddle($this->middle);
		$copyObj->setSecondary($this->secondary);
		$copyObj->setAlternative($this->alternative);
		$copyObj->setPublicSchool($this->public_school);
		$copyObj->setPrivateSchool($this->private_school);
		$copyObj->setParochial($this->parochial);
		$copyObj->setIndianAffairs($this->indian_affairs);
		$copyObj->setIndependent($this->independent);
		$copyObj->setMagnet($this->magnet);
		$copyObj->setCharter($this->charter);
		$copyObj->setGradeMin($this->grade_min);
		$copyObj->setGradeMax($this->grade_max);
		$copyObj->setCreatedAt($this->created_at);
		$copyObj->setModifiedAt($this->modified_at);

		if ($deepCopy) {
			// important: temporarily setNew(false) because this affects the behavior of
			// the getter/setter methods for fkey referrer objects.
			$copyObj->setNew(false);

			foreach ($this->getNominations() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addNomination($relObj->copy($deepCopy));
				}
			}

		} // if ($deepCopy)


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
	 * @return     School Clone of current object.
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
	 * @return     SchoolPeer
	 */
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new SchoolPeer();
		}
		return self::$peer;
	}

	/**
	 * Declares an association between this object and a District object.
	 *
	 * @param      District $v
	 * @return     School The current object (for fluent API support)
	 * @throws     PropelException
	 */
	public function setDistrict(District $v = null)
	{
		if ($v === null) {
			$this->setDistrictId(NULL);
		} else {
			$this->setDistrictId($v->getId());
		}

		$this->aDistrict = $v;

		// Add binding for other direction of this n:n relationship.
		// If this object has already been added to the District object, it will not be re-added.
		if ($v !== null) {
			$v->addSchool($this);
		}

		return $this;
	}


	/**
	 * Get the associated District object
	 *
	 * @param      PropelPDO Optional Connection object.
	 * @return     District The associated District object.
	 * @throws     PropelException
	 */
	public function getDistrict(PropelPDO $con = null)
	{
		if ($this->aDistrict === null && ($this->district_id !== null)) {
			$this->aDistrict = DistrictQuery::create()->findPk($this->district_id, $con);
			/* The following can be used additionally to
				 guarantee the related object contains a reference
				 to this object.  This level of coupling may, however, be
				 undesirable since it could result in an only partially populated collection
				 in the referenced object.
				 $this->aDistrict->addSchools($this);
			 */
		}
		return $this->aDistrict;
	}

	/**
	 * Clears out the collNominations collection
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addNominations()
	 */
	public function clearNominations()
	{
		$this->collNominations = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collNominations collection.
	 *
	 * By default this just sets the collNominations collection to an empty array (like clearcollNominations());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @return     void
	 */
	public function initNominations()
	{
		$this->collNominations = new PropelObjectCollection();
		$this->collNominations->setModel('Nomination');
	}

	/**
	 * Gets an array of Nomination objects which contain a foreign key that references this object.
	 *
	 * If the $criteria is not null, it is used to always fetch the results from the database.
	 * Otherwise the results are fetched from the database the first time, then cached.
	 * Next time the same method is called without $criteria, the cached collection is returned.
	 * If this School is new, it will return
	 * an empty collection or the current collection; the criteria is ignored on a new object.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @return     PropelCollection|array Nomination[] List of Nomination objects
	 * @throws     PropelException
	 */
	public function getNominations($criteria = null, PropelPDO $con = null)
	{
		if(null === $this->collNominations || null !== $criteria) {
			if ($this->isNew() && null === $this->collNominations) {
				// return empty collection
				$this->initNominations();
			} else {
				$collNominations = NominationQuery::create(null, $criteria)
					->filterBySchool($this)
					->find($con);
				if (null !== $criteria) {
					return $collNominations;
				}
				$this->collNominations = $collNominations;
			}
		}
		return $this->collNominations;
	}

	/**
	 * Returns the number of related Nomination objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related Nomination objects.
	 * @throws     PropelException
	 */
	public function countNominations(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if(null === $this->collNominations || null !== $criteria) {
			if ($this->isNew() && null === $this->collNominations) {
				return 0;
			} else {
				$query = NominationQuery::create(null, $criteria);
				if($distinct) {
					$query->distinct();
				}
				return $query
					->filterBySchool($this)
					->count($con);
			}
		} else {
			return count($this->collNominations);
		}
	}

	/**
	 * Method called to associate a Nomination object to this object
	 * through the Nomination foreign key attribute.
	 *
	 * @param      Nomination $l Nomination
	 * @return     void
	 * @throws     PropelException
	 */
	public function addNomination(Nomination $l)
	{
		if ($this->collNominations === null) {
			$this->initNominations();
		}
		if (!$this->collNominations->contains($l)) { // only add it if the **same** object is not already associated
			$this->collNominations[]= $l;
			$l->setSchool($this);
		}
	}

	/**
	 * Clears the current object and sets all attributes to their default values
	 */
	public function clear()
	{
		$this->id = null;
		$this->district_id = null;
		$this->name = null;
		$this->address1 = null;
		$this->address2 = null;
		$this->city = null;
		$this->state = null;
		$this->country = null;
		$this->postcode = null;
		$this->phone = null;
		$this->fax = null;
		$this->email = null;
		$this->url = null;
		$this->established = null;
		$this->population = null;
		$this->population_date = null;
		$this->faculty = null;
		$this->faculty_date = null;
		$this->class_size = null;
		$this->class_size_date = null;
		$this->active = null;
		$this->elementary = null;
		$this->middle = null;
		$this->secondary = null;
		$this->alternative = null;
		$this->public_school = null;
		$this->private_school = null;
		$this->parochial = null;
		$this->indian_affairs = null;
		$this->independent = null;
		$this->magnet = null;
		$this->charter = null;
		$this->grade_min = null;
		$this->grade_max = null;
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
			if ($this->collNominations) {
				foreach ((array) $this->collNominations as $o) {
					$o->clearAllReferences($deep);
				}
			}
		} // if ($deep)

		$this->collNominations = null;
		$this->aDistrict = null;
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

} // BaseSchool
