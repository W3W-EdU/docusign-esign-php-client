<?php
/**
 * BulkSendBatchSummaries
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
 * BulkSendBatchSummaries Class Doc Comment
 *
 * @category    Class
 * @description A list of bulk send batch summaries.
 * @package     DocuSign\eSign
 * @author      Swagger Codegen team <apihelp@docusign.com>
 * @license     The DocuSign PHP Client SDK is licensed under the MIT License.
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class BulkSendBatchSummaries implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'bulkSendBatchSummaries';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'batch_size_limit' => '?string',
        'bulk_batch_summaries' => '\DocuSign\eSign\Model\BulkSendBatchSummary[]',
        'bulk_process_queue_limit' => '?string',
        'bulk_process_total_queued' => '?string',
        'end_position' => '?string',
        'next_uri' => '?string',
        'previous_uri' => '?string',
        'queue_limit' => '?string',
        'result_set_size' => '?string',
        'start_position' => '?string',
        'total_queued' => '?string',
        'total_set_size' => '?string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'batch_size_limit' => null,
        'bulk_batch_summaries' => null,
        'bulk_process_queue_limit' => null,
        'bulk_process_total_queued' => null,
        'end_position' => null,
        'next_uri' => null,
        'previous_uri' => null,
        'queue_limit' => null,
        'result_set_size' => null,
        'start_position' => null,
        'total_queued' => null,
        'total_set_size' => null
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
        'batch_size_limit' => 'batchSizeLimit',
        'bulk_batch_summaries' => 'bulkBatchSummaries',
        'bulk_process_queue_limit' => 'bulkProcessQueueLimit',
        'bulk_process_total_queued' => 'bulkProcessTotalQueued',
        'end_position' => 'endPosition',
        'next_uri' => 'nextUri',
        'previous_uri' => 'previousUri',
        'queue_limit' => 'queueLimit',
        'result_set_size' => 'resultSetSize',
        'start_position' => 'startPosition',
        'total_queued' => 'totalQueued',
        'total_set_size' => 'totalSetSize'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'batch_size_limit' => 'setBatchSizeLimit',
        'bulk_batch_summaries' => 'setBulkBatchSummaries',
        'bulk_process_queue_limit' => 'setBulkProcessQueueLimit',
        'bulk_process_total_queued' => 'setBulkProcessTotalQueued',
        'end_position' => 'setEndPosition',
        'next_uri' => 'setNextUri',
        'previous_uri' => 'setPreviousUri',
        'queue_limit' => 'setQueueLimit',
        'result_set_size' => 'setResultSetSize',
        'start_position' => 'setStartPosition',
        'total_queued' => 'setTotalQueued',
        'total_set_size' => 'setTotalSetSize'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'batch_size_limit' => 'getBatchSizeLimit',
        'bulk_batch_summaries' => 'getBulkBatchSummaries',
        'bulk_process_queue_limit' => 'getBulkProcessQueueLimit',
        'bulk_process_total_queued' => 'getBulkProcessTotalQueued',
        'end_position' => 'getEndPosition',
        'next_uri' => 'getNextUri',
        'previous_uri' => 'getPreviousUri',
        'queue_limit' => 'getQueueLimit',
        'result_set_size' => 'getResultSetSize',
        'start_position' => 'getStartPosition',
        'total_queued' => 'getTotalQueued',
        'total_set_size' => 'getTotalSetSize'
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
        $this->container['batch_size_limit'] = isset($data['batch_size_limit']) ? $data['batch_size_limit'] : null;
        $this->container['bulk_batch_summaries'] = isset($data['bulk_batch_summaries']) ? $data['bulk_batch_summaries'] : null;
        $this->container['bulk_process_queue_limit'] = isset($data['bulk_process_queue_limit']) ? $data['bulk_process_queue_limit'] : null;
        $this->container['bulk_process_total_queued'] = isset($data['bulk_process_total_queued']) ? $data['bulk_process_total_queued'] : null;
        $this->container['end_position'] = isset($data['end_position']) ? $data['end_position'] : null;
        $this->container['next_uri'] = isset($data['next_uri']) ? $data['next_uri'] : null;
        $this->container['previous_uri'] = isset($data['previous_uri']) ? $data['previous_uri'] : null;
        $this->container['queue_limit'] = isset($data['queue_limit']) ? $data['queue_limit'] : null;
        $this->container['result_set_size'] = isset($data['result_set_size']) ? $data['result_set_size'] : null;
        $this->container['start_position'] = isset($data['start_position']) ? $data['start_position'] : null;
        $this->container['total_queued'] = isset($data['total_queued']) ? $data['total_queued'] : null;
        $this->container['total_set_size'] = isset($data['total_set_size']) ? $data['total_set_size'] : null;
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
     * Gets batch_size_limit
     *
     * @return ?string
     */
    public function getBatchSizeLimit()
    {
        return $this->container['batch_size_limit'];
    }

    /**
     * Sets batch_size_limit
     *
     * @param ?string $batch_size_limit 
     *
     * @return $this
     */
    public function setBatchSizeLimit($batch_size_limit)
    {
        $this->container['batch_size_limit'] = $batch_size_limit;

        return $this;
    }

    /**
     * Gets bulk_batch_summaries
     *
     * @return \DocuSign\eSign\Model\BulkSendBatchSummary[]
     */
    public function getBulkBatchSummaries()
    {
        return $this->container['bulk_batch_summaries'];
    }

    /**
     * Sets bulk_batch_summaries
     *
     * @param \DocuSign\eSign\Model\BulkSendBatchSummary[] $bulk_batch_summaries 
     *
     * @return $this
     */
    public function setBulkBatchSummaries($bulk_batch_summaries)
    {
        $this->container['bulk_batch_summaries'] = $bulk_batch_summaries;

        return $this;
    }

    /**
     * Gets bulk_process_queue_limit
     *
     * @return ?string
     */
    public function getBulkProcessQueueLimit()
    {
        return $this->container['bulk_process_queue_limit'];
    }

    /**
     * Sets bulk_process_queue_limit
     *
     * @param ?string $bulk_process_queue_limit 
     *
     * @return $this
     */
    public function setBulkProcessQueueLimit($bulk_process_queue_limit)
    {
        $this->container['bulk_process_queue_limit'] = $bulk_process_queue_limit;

        return $this;
    }

    /**
     * Gets bulk_process_total_queued
     *
     * @return ?string
     */
    public function getBulkProcessTotalQueued()
    {
        return $this->container['bulk_process_total_queued'];
    }

    /**
     * Sets bulk_process_total_queued
     *
     * @param ?string $bulk_process_total_queued 
     *
     * @return $this
     */
    public function setBulkProcessTotalQueued($bulk_process_total_queued)
    {
        $this->container['bulk_process_total_queued'] = $bulk_process_total_queued;

        return $this;
    }

    /**
     * Gets end_position
     *
     * @return ?string
     */
    public function getEndPosition()
    {
        return $this->container['end_position'];
    }

    /**
     * Sets end_position
     *
     * @param ?string $end_position The last position in the result set.
     *
     * @return $this
     */
    public function setEndPosition($end_position)
    {
        $this->container['end_position'] = $end_position;

        return $this;
    }

    /**
     * Gets next_uri
     *
     * @return ?string
     */
    public function getNextUri()
    {
        return $this->container['next_uri'];
    }

    /**
     * Sets next_uri
     *
     * @param ?string $next_uri The URI to the next chunk of records based on the search request. If the endPosition is the entire results of the search, this is null.
     *
     * @return $this
     */
    public function setNextUri($next_uri)
    {
        $this->container['next_uri'] = $next_uri;

        return $this;
    }

    /**
     * Gets previous_uri
     *
     * @return ?string
     */
    public function getPreviousUri()
    {
        return $this->container['previous_uri'];
    }

    /**
     * Sets previous_uri
     *
     * @param ?string $previous_uri The postal code for the billing address.
     *
     * @return $this
     */
    public function setPreviousUri($previous_uri)
    {
        $this->container['previous_uri'] = $previous_uri;

        return $this;
    }

    /**
     * Gets queue_limit
     *
     * @return ?string
     */
    public function getQueueLimit()
    {
        return $this->container['queue_limit'];
    }

    /**
     * Sets queue_limit
     *
     * @param ?string $queue_limit 
     *
     * @return $this
     */
    public function setQueueLimit($queue_limit)
    {
        $this->container['queue_limit'] = $queue_limit;

        return $this;
    }

    /**
     * Gets result_set_size
     *
     * @return ?string
     */
    public function getResultSetSize()
    {
        return $this->container['result_set_size'];
    }

    /**
     * Sets result_set_size
     *
     * @param ?string $result_set_size The number of results returned in this response.
     *
     * @return $this
     */
    public function setResultSetSize($result_set_size)
    {
        $this->container['result_set_size'] = $result_set_size;

        return $this;
    }

    /**
     * Gets start_position
     *
     * @return ?string
     */
    public function getStartPosition()
    {
        return $this->container['start_position'];
    }

    /**
     * Sets start_position
     *
     * @param ?string $start_position Starting position of the current result set.
     *
     * @return $this
     */
    public function setStartPosition($start_position)
    {
        $this->container['start_position'] = $start_position;

        return $this;
    }

    /**
     * Gets total_queued
     *
     * @return ?string
     */
    public function getTotalQueued()
    {
        return $this->container['total_queued'];
    }

    /**
     * Sets total_queued
     *
     * @param ?string $total_queued 
     *
     * @return $this
     */
    public function setTotalQueued($total_queued)
    {
        $this->container['total_queued'] = $total_queued;

        return $this;
    }

    /**
     * Gets total_set_size
     *
     * @return ?string
     */
    public function getTotalSetSize()
    {
        return $this->container['total_set_size'];
    }

    /**
     * Sets total_set_size
     *
     * @param ?string $total_set_size The total number of items available in the result set. This will always be greater than or equal to the value of the property returning the results in the in the response.
     *
     * @return $this
     */
    public function setTotalSetSize($total_set_size)
    {
        $this->container['total_set_size'] = $total_set_size;

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

