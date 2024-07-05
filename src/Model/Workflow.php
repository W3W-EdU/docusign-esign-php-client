<?php
/**
 * Workflow
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  DocuSign\eSign
 * @author   Swagger Codegen team <apihelp@docusign.com>
 * @license  The DocuSign PHP Client SDK is licensed under the MIT License.
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Docusign eSignature REST API
 *
 * The Docusign eSignature REST API provides you with a powerful, convenient, and simple Web services API for interacting with Docusign.
 *
 * OpenAPI spec version: v2.1
 * Contact: devcenter@docusign.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.21
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace DocuSign\eSign\Model;

use \ArrayAccess;
use DocuSign\eSign\ObjectSerializer;

/**
 * Workflow Class Doc Comment
 *
 * @category    Class
 * @description Describes the workflow for an envelope.
 * @package     DocuSign\eSign
 * @author      Swagger Codegen team <apihelp@docusign.com>
 * @license     The DocuSign PHP Client SDK is licensed under the MIT License.
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Workflow implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'workflow';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'current_workflow_step_id' => '?string',
        'overwrite_update_mode' => '?string',
        'resume_date' => '?string',
        'scheduled_sending' => '\DocuSign\eSign\Model\ScheduledSending',
        'workflow_status' => '?string',
        'workflow_steps' => '\DocuSign\eSign\Model\WorkflowStep[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'current_workflow_step_id' => null,
        'overwrite_update_mode' => null,
        'resume_date' => null,
        'scheduled_sending' => null,
        'workflow_status' => null,
        'workflow_steps' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'current_workflow_step_id' => 'currentWorkflowStepId',
        'overwrite_update_mode' => 'overwriteUpdateMode',
        'resume_date' => 'resumeDate',
        'scheduled_sending' => 'scheduledSending',
        'workflow_status' => 'workflowStatus',
        'workflow_steps' => 'workflowSteps'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'current_workflow_step_id' => 'setCurrentWorkflowStepId',
        'overwrite_update_mode' => 'setOverwriteUpdateMode',
        'resume_date' => 'setResumeDate',
        'scheduled_sending' => 'setScheduledSending',
        'workflow_status' => 'setWorkflowStatus',
        'workflow_steps' => 'setWorkflowSteps'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'current_workflow_step_id' => 'getCurrentWorkflowStepId',
        'overwrite_update_mode' => 'getOverwriteUpdateMode',
        'resume_date' => 'getResumeDate',
        'scheduled_sending' => 'getScheduledSending',
        'workflow_status' => 'getWorkflowStatus',
        'workflow_steps' => 'getWorkflowSteps'
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
        return self::$swaggerModelName;
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
        $this->container['current_workflow_step_id'] = isset($data['current_workflow_step_id']) ? $data['current_workflow_step_id'] : null;
        $this->container['overwrite_update_mode'] = isset($data['overwrite_update_mode']) ? $data['overwrite_update_mode'] : null;
        $this->container['resume_date'] = isset($data['resume_date']) ? $data['resume_date'] : null;
        $this->container['scheduled_sending'] = isset($data['scheduled_sending']) ? $data['scheduled_sending'] : null;
        $this->container['workflow_status'] = isset($data['workflow_status']) ? $data['workflow_status'] : null;
        $this->container['workflow_steps'] = isset($data['workflow_steps']) ? $data['workflow_steps'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * Gets current_workflow_step_id
     *
     * @return ?string
     */
    public function getCurrentWorkflowStepId()
    {
        return $this->container['current_workflow_step_id'];
    }

    /**
     * Sets current_workflow_step_id
     *
     * @param ?string $current_workflow_step_id 
     *
     * @return $this
     */
    public function setCurrentWorkflowStepId($current_workflow_step_id)
    {
        $this->container['current_workflow_step_id'] = $current_workflow_step_id;

        return $this;
    }

    /**
     * Gets overwrite_update_mode
     *
     * @return ?string
     */
    public function getOverwriteUpdateMode()
    {
        return $this->container['overwrite_update_mode'];
    }

    /**
     * Sets overwrite_update_mode
     *
     * @param ?string $overwrite_update_mode 
     *
     * @return $this
     */
    public function setOverwriteUpdateMode($overwrite_update_mode)
    {
        $this->container['overwrite_update_mode'] = $overwrite_update_mode;

        return $this;
    }

    /**
     * Gets resume_date
     *
     * @return ?string
     */
    public function getResumeDate()
    {
        return $this->container['resume_date'];
    }

    /**
     * Sets resume_date
     *
     * @param ?string $resume_date 
     *
     * @return $this
     */
    public function setResumeDate($resume_date)
    {
        $this->container['resume_date'] = $resume_date;

        return $this;
    }

    /**
     * Gets scheduled_sending
     *
     * @return \DocuSign\eSign\Model\ScheduledSending
     */
    public function getScheduledSending()
    {
        return $this->container['scheduled_sending'];
    }

    /**
     * Sets scheduled_sending
     *
     * @param \DocuSign\eSign\Model\ScheduledSending $scheduled_sending An object that describes the settings for scheduled sending.
     *
     * @return $this
     */
    public function setScheduledSending($scheduled_sending)
    {
        $this->container['scheduled_sending'] = $scheduled_sending;

        return $this;
    }

    /**
     * Gets workflow_status
     *
     * @return ?string
     */
    public function getWorkflowStatus()
    {
        return $this->container['workflow_status'];
    }

    /**
     * Sets workflow_status
     *
     * @param ?string $workflow_status 
     *
     * @return $this
     */
    public function setWorkflowStatus($workflow_status)
    {
        $this->container['workflow_status'] = $workflow_status;

        return $this;
    }

    /**
     * Gets workflow_steps
     *
     * @return \DocuSign\eSign\Model\WorkflowStep[]
     */
    public function getWorkflowSteps()
    {
        return $this->container['workflow_steps'];
    }

    /**
     * Sets workflow_steps
     *
     * @param \DocuSign\eSign\Model\WorkflowStep[] $workflow_steps 
     *
     * @return $this
     */
    public function setWorkflowSteps($workflow_steps)
    {
        $this->container['workflow_steps'] = $workflow_steps;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}

