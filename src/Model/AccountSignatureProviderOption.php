<?php
/**
 * AccountSignatureProviderOption
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
 * AccountSignatureProviderOption Class Doc Comment
 *
 * @category    Class
 * @description Reserved for DocuSign.
 * @package     DocuSign\eSign
 * @author      Swagger Codegen team <apihelp@docusign.com>
 * @license     The DocuSign PHP Client SDK is licensed under the MIT License.
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class AccountSignatureProviderOption implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'accountSignatureProviderOption';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'signature_provider_option_display_name' => '?string',
        'signature_provider_option_id' => '?string',
        'signature_provider_option_name' => '?string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'signature_provider_option_display_name' => null,
        'signature_provider_option_id' => null,
        'signature_provider_option_name' => null
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
        'signature_provider_option_display_name' => 'signatureProviderOptionDisplayName',
        'signature_provider_option_id' => 'signatureProviderOptionId',
        'signature_provider_option_name' => 'signatureProviderOptionName'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'signature_provider_option_display_name' => 'setSignatureProviderOptionDisplayName',
        'signature_provider_option_id' => 'setSignatureProviderOptionId',
        'signature_provider_option_name' => 'setSignatureProviderOptionName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'signature_provider_option_display_name' => 'getSignatureProviderOptionDisplayName',
        'signature_provider_option_id' => 'getSignatureProviderOptionId',
        'signature_provider_option_name' => 'getSignatureProviderOptionName'
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
        $this->container['signature_provider_option_display_name'] = isset($data['signature_provider_option_display_name']) ? $data['signature_provider_option_display_name'] : null;
        $this->container['signature_provider_option_id'] = isset($data['signature_provider_option_id']) ? $data['signature_provider_option_id'] : null;
        $this->container['signature_provider_option_name'] = isset($data['signature_provider_option_name']) ? $data['signature_provider_option_name'] : null;
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
     * Gets signature_provider_option_display_name
     *
     * @return ?string
     */
    public function getSignatureProviderOptionDisplayName()
    {
        return $this->container['signature_provider_option_display_name'];
    }

    /**
     * Sets signature_provider_option_display_name
     *
     * @param ?string $signature_provider_option_display_name 
     *
     * @return $this
     */
    public function setSignatureProviderOptionDisplayName($signature_provider_option_display_name)
    {
        $this->container['signature_provider_option_display_name'] = $signature_provider_option_display_name;

        return $this;
    }

    /**
     * Gets signature_provider_option_id
     *
     * @return ?string
     */
    public function getSignatureProviderOptionId()
    {
        return $this->container['signature_provider_option_id'];
    }

    /**
     * Sets signature_provider_option_id
     *
     * @param ?string $signature_provider_option_id 
     *
     * @return $this
     */
    public function setSignatureProviderOptionId($signature_provider_option_id)
    {
        $this->container['signature_provider_option_id'] = $signature_provider_option_id;

        return $this;
    }

    /**
     * Gets signature_provider_option_name
     *
     * @return ?string
     */
    public function getSignatureProviderOptionName()
    {
        return $this->container['signature_provider_option_name'];
    }

    /**
     * Sets signature_provider_option_name
     *
     * @param ?string $signature_provider_option_name 
     *
     * @return $this
     */
    public function setSignatureProviderOptionName($signature_provider_option_name)
    {
        $this->container['signature_provider_option_name'] = $signature_provider_option_name;

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

