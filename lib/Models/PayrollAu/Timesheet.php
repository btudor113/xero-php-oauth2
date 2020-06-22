<?php
/**
 * Timesheet
 *
 * PHP version 5
 *
 * @category Class
 * @package  XeroAPI\XeroPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Xero Payroll AU
 *
 * This is the Xero Payroll API for orgs in Australia region.
 *
 * OpenAPI spec version: 2.2.4
 * Contact: api@xero.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.2.3
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace XeroAPI\XeroPHP\Models\PayrollAu;

use \ArrayAccess;
use \XeroAPI\XeroPHP\PayrollAuObjectSerializer;
use \XeroAPI\XeroPHP\StringUtil;
/**
 * Timesheet Class Doc Comment
 *
 * @category Class
 * @package  XeroAPI\XeroPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Timesheet implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Timesheet';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'employee_id' => 'string',
        'start_date' => 'string',
        'end_date' => 'string',
        'status' => '\XeroAPI\XeroPHP\Models\PayrollAu\TimesheetStatus',
        'hours' => 'double',
        'timesheet_id' => 'string',
        'timesheet_lines' => '\XeroAPI\XeroPHP\Models\PayrollAu\TimesheetLine[]',
        'updated_date_utc' => 'string',
        'validation_errors' => '\XeroAPI\XeroPHP\Models\PayrollAu\ValidationError[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'employee_id' => 'uuid',
        'start_date' => null,
        'end_date' => null,
        'status' => null,
        'hours' => 'double',
        'timesheet_id' => 'uuid',
        'timesheet_lines' => null,
        'updated_date_utc' => null,
        'validation_errors' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'employee_id' => 'EmployeeID',
        'start_date' => 'StartDate',
        'end_date' => 'EndDate',
        'status' => 'Status',
        'hours' => 'Hours',
        'timesheet_id' => 'TimesheetID',
        'timesheet_lines' => 'TimesheetLines',
        'updated_date_utc' => 'UpdatedDateUTC',
        'validation_errors' => 'ValidationErrors'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'employee_id' => 'setEmployeeId',
        'start_date' => 'setStartDate',
        'end_date' => 'setEndDate',
        'status' => 'setStatus',
        'hours' => 'setHours',
        'timesheet_id' => 'setTimesheetId',
        'timesheet_lines' => 'setTimesheetLines',
        'updated_date_utc' => 'setUpdatedDateUtc',
        'validation_errors' => 'setValidationErrors'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'employee_id' => 'getEmployeeId',
        'start_date' => 'getStartDate',
        'end_date' => 'getEndDate',
        'status' => 'getStatus',
        'hours' => 'getHours',
        'timesheet_id' => 'getTimesheetId',
        'timesheet_lines' => 'getTimesheetLines',
        'updated_date_utc' => 'getUpdatedDateUtc',
        'validation_errors' => 'getValidationErrors'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['employee_id'] = isset($data['employee_id']) ? $data['employee_id'] : null;
        $this->container['start_date'] = isset($data['start_date']) ? $data['start_date'] : null;
        $this->container['end_date'] = isset($data['end_date']) ? $data['end_date'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['hours'] = isset($data['hours']) ? $data['hours'] : null;
        $this->container['timesheet_id'] = isset($data['timesheet_id']) ? $data['timesheet_id'] : null;
        $this->container['timesheet_lines'] = isset($data['timesheet_lines']) ? $data['timesheet_lines'] : null;
        $this->container['updated_date_utc'] = isset($data['updated_date_utc']) ? $data['updated_date_utc'] : null;
        $this->container['validation_errors'] = isset($data['validation_errors']) ? $data['validation_errors'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['employee_id'] === null) {
            $invalidProperties[] = "'employee_id' can't be null";
        }
        if ($this->container['start_date'] === null) {
            $invalidProperties[] = "'start_date' can't be null";
        }
        if ($this->container['end_date'] === null) {
            $invalidProperties[] = "'end_date' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets employee_id
     *
     * @return string
     */
    public function getEmployeeId()
    {
        return $this->container['employee_id'];
    }

    /**
     * Sets employee_id
     *
     * @param string $employee_id The Xero identifier for an employee
     *
     * @return $this
     */
    public function setEmployeeId($employee_id)
    {

        $this->container['employee_id'] = $employee_id;

        return $this;
    }



    /**
     * Gets start_date
     *
     * @return string
     */
    public function getStartDate()
    {
        return $this->container['start_date'];
    }
    public function getStartDateAsDate()
    {
      if ($this->getStartDate() != null) {
        return StringUtil::convertStringToDate($this->getStartDate());
      } else {
        throw new Exception('can not convert null string to date');
      } 
    }

    /**
     * Sets start_date
     *
     * @param string $start_date Period start date (YYYY-MM-DD)
     *
     * @return $this
     */
    public function setStartDate($start_date)
    {

        $this->container['start_date'] = $start_date;

        return $this;
    }
    /**
     * Sets start_date
     *
     * @param \DateTime  $start_date Period start date (YYYY-MM-DD)
     *
     * @return $this
     */
    public function setStartDateAsDate($start_date)
    {
      //CONVERT Date into MS DateFromat String 
      if (StringUtil::checkThisDate($start_date->format('Y-m-d')) )
      {        
        $timeInMillis = strtotime($start_date->format('Y-m-d')." UTC") * 1000;
        $start_date = "/Date(" . $timeInMillis. "+0000)/";
      }  
      $this->container['start_date'] = $start_date;
      return $this;
    }



    /**
     * Gets end_date
     *
     * @return string
     */
    public function getEndDate()
    {
        return $this->container['end_date'];
    }
    public function getEndDateAsDate()
    {
      if ($this->getEndDate() != null) {
        return StringUtil::convertStringToDate($this->getEndDate());
      } else {
        throw new Exception('can not convert null string to date');
      } 
    }

    /**
     * Sets end_date
     *
     * @param string $end_date Period end date (YYYY-MM-DD)
     *
     * @return $this
     */
    public function setEndDate($end_date)
    {

        $this->container['end_date'] = $end_date;

        return $this;
    }
    /**
     * Sets end_date
     *
     * @param \DateTime  $end_date Period end date (YYYY-MM-DD)
     *
     * @return $this
     */
    public function setEndDateAsDate($end_date)
    {
      //CONVERT Date into MS DateFromat String 
      if (StringUtil::checkThisDate($end_date->format('Y-m-d')) )
      {        
        $timeInMillis = strtotime($end_date->format('Y-m-d')." UTC") * 1000;
        $end_date = "/Date(" . $timeInMillis. "+0000)/";
      }  
      $this->container['end_date'] = $end_date;
      return $this;
    }



    /**
     * Gets status
     *
     * @return \XeroAPI\XeroPHP\Models\PayrollAu\TimesheetStatus|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param \XeroAPI\XeroPHP\Models\PayrollAu\TimesheetStatus|null $status status
     *
     * @return $this
     */
    public function setStatus($status)
    {

        $this->container['status'] = $status;

        return $this;
    }



    /**
     * Gets hours
     *
     * @return double|null
     */
    public function getHours()
    {
        return $this->container['hours'];
    }

    /**
     * Sets hours
     *
     * @param double|null $hours Timesheet total hours
     *
     * @return $this
     */
    public function setHours($hours)
    {

        $this->container['hours'] = $hours;

        return $this;
    }



    /**
     * Gets timesheet_id
     *
     * @return string|null
     */
    public function getTimesheetId()
    {
        return $this->container['timesheet_id'];
    }

    /**
     * Sets timesheet_id
     *
     * @param string|null $timesheet_id The Xero identifier for a Payroll Timesheet
     *
     * @return $this
     */
    public function setTimesheetId($timesheet_id)
    {

        $this->container['timesheet_id'] = $timesheet_id;

        return $this;
    }



    /**
     * Gets timesheet_lines
     *
     * @return \XeroAPI\XeroPHP\Models\PayrollAu\TimesheetLine[]|null
     */
    public function getTimesheetLines()
    {
        return $this->container['timesheet_lines'];
    }

    /**
     * Sets timesheet_lines
     *
     * @param \XeroAPI\XeroPHP\Models\PayrollAu\TimesheetLine[]|null $timesheet_lines timesheet_lines
     *
     * @return $this
     */
    public function setTimesheetLines($timesheet_lines)
    {

        $this->container['timesheet_lines'] = $timesheet_lines;

        return $this;
    }



    /**
     * Gets updated_date_utc
     *
     * @return string|null
     */
    public function getUpdatedDateUtc()
    {
        return $this->container['updated_date_utc'];
    }
    public function getUpdatedDateUtcAsDate()
    {
      if ($this->getUpdatedDateUtc() != null) {
        return StringUtil::convertStringToDateTime($this->getUpdatedDateUtc());
      } else {
        throw new Exception('can not convert null string to date');
      } 
    }

    /**
     * Sets updated_date_utc
     *
     * @param string|null $updated_date_utc Last modified timestamp
     *
     * @return $this
     */
    public function setUpdatedDateUtc($updated_date_utc)
    {

        $this->container['updated_date_utc'] = $updated_date_utc;

        return $this;
    }


    /**
     * Gets validation_errors
     *
     * @return \XeroAPI\XeroPHP\Models\PayrollAu\ValidationError[]|null
     */
    public function getValidationErrors()
    {
        return $this->container['validation_errors'];
    }

    /**
     * Sets validation_errors
     *
     * @param \XeroAPI\XeroPHP\Models\PayrollAu\ValidationError[]|null $validation_errors Displays array of validation error messages from the API
     *
     * @return $this
     */
    public function setValidationErrors($validation_errors)
    {

        $this->container['validation_errors'] = $validation_errors;

        return $this;
    }


    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            PayrollAuObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}


