<?php
/**
 * RecipientFormData
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
 * RecipientFormData Class Doc Comment
 *
 * @category    Class
 * @package     DocuSign\eSign
 * @author      Swagger Codegen team <apihelp@docusign.com>
 * @license     The DocuSign PHP Client SDK is licensed under the MIT License.
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class RecipientFormData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'recipientFormData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'declined_time' => '?string',
        'delivered_time' => '?string',
        'email' => '?string',
        'form_data' => '\DocuSign\eSign\Model\FormDataItem[]',
        'name' => '?string',
        'recipient_id' => '?string',
        'sent_time' => '?string',
        'signed_time' => '?string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'declined_time' => null,
        'delivered_time' => null,
        'email' => null,
        'form_data' => null,
        'name' => null,
        'recipient_id' => null,
        'sent_time' => null,
        'signed_time' => null
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
        'declined_time' => 'DeclinedTime',
        'delivered_time' => 'DeliveredTime',
        'email' => 'email',
        'form_data' => 'formData',
        'name' => 'name',
        'recipient_id' => 'recipientId',
        'sent_time' => 'SentTime',
        'signed_time' => 'SignedTime'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'declined_time' => 'setDeclinedTime',
        'delivered_time' => 'setDeliveredTime',
        'email' => 'setEmail',
        'form_data' => 'setFormData',
        'name' => 'setName',
        'recipient_id' => 'setRecipientId',
        'sent_time' => 'setSentTime',
        'signed_time' => 'setSignedTime'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'declined_time' => 'getDeclinedTime',
        'delivered_time' => 'getDeliveredTime',
        'email' => 'getEmail',
        'form_data' => 'getFormData',
        'name' => 'getName',
        'recipient_id' => 'getRecipientId',
        'sent_time' => 'getSentTime',
        'signed_time' => 'getSignedTime'
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
        $this->container['declined_time'] = isset($data['declined_time']) ? $data['declined_time'] : null;
        $this->container['delivered_time'] = isset($data['delivered_time']) ? $data['delivered_time'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['form_data'] = isset($data['form_data']) ? $data['form_data'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['recipient_id'] = isset($data['recipient_id']) ? $data['recipient_id'] : null;
        $this->container['sent_time'] = isset($data['sent_time']) ? $data['sent_time'] : null;
        $this->container['signed_time'] = isset($data['signed_time']) ? $data['signed_time'] : null;
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
     * Gets declined_time
     *
     * @return ?string
     */
    public function getDeclinedTime()
    {
        return $this->container['declined_time'];
    }

    /**
     * Sets declined_time
     *
     * @param ?string $declined_time 
     *
     * @return $this
     */
    public function setDeclinedTime($declined_time)
    {
        $this->container['declined_time'] = $declined_time;

        return $this;
    }

    /**
     * Gets delivered_time
     *
     * @return ?string
     */
    public function getDeliveredTime()
    {
        return $this->container['delivered_time'];
    }

    /**
     * Sets delivered_time
     *
     * @param ?string $delivered_time 
     *
     * @return $this
     */
    public function setDeliveredTime($delivered_time)
    {
        $this->container['delivered_time'] = $delivered_time;

        return $this;
    }

    /**
     * Gets email
     *
     * @return ?string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param ?string $email 
     *
     * @return $this
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets form_data
     *
     * @return \DocuSign\eSign\Model\FormDataItem[]
     */
    public function getFormData()
    {
        return $this->container['form_data'];
    }

    /**
     * Sets form_data
     *
     * @param \DocuSign\eSign\Model\FormDataItem[] $form_data 
     *
     * @return $this
     */
    public function setFormData($form_data)
    {
        $this->container['form_data'] = $form_data;

        return $this;
    }

    /**
     * Gets name
     *
     * @return ?string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param ?string $name 
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets recipient_id
     *
     * @return ?string
     */
    public function getRecipientId()
    {
        return $this->container['recipient_id'];
    }

    /**
     * Sets recipient_id
     *
     * @param ?string $recipient_id Unique for the recipient. It is used by the tab element to indicate which recipient is to sign the Document.
     *
     * @return $this
     */
    public function setRecipientId($recipient_id)
    {
        $this->container['recipient_id'] = $recipient_id;

        return $this;
    }

    /**
     * Gets sent_time
     *
     * @return ?string
     */
    public function getSentTime()
    {
        return $this->container['sent_time'];
    }

    /**
     * Sets sent_time
     *
     * @param ?string $sent_time 
     *
     * @return $this
     */
    public function setSentTime($sent_time)
    {
        $this->container['sent_time'] = $sent_time;

        return $this;
    }

    /**
     * Gets signed_time
     *
     * @return ?string
     */
    public function getSignedTime()
    {
        return $this->container['signed_time'];
    }

    /**
     * Sets signed_time
     *
     * @param ?string $signed_time 
     *
     * @return $this
     */
    public function setSignedTime($signed_time)
    {
        $this->container['signed_time'] = $signed_time;

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

