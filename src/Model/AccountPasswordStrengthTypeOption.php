<?php
/**
 * AccountPasswordStrengthTypeOption
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  DocuSign\eSign
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * DocuSign REST API
 *
 * The DocuSign REST API provides you with a powerful, convenient, and simple Web services API for interacting with DocuSign.
 *
 * OpenAPI spec version: v2
 * Contact: devcenter@docusign.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.13-SNAPSHOT
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
 * AccountPasswordStrengthTypeOption Class Doc Comment
 *
 * @category    Class
 * @package     DocuSign\eSign
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class AccountPasswordStrengthTypeOption implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'accountPasswordStrengthTypeOption';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'minimum_length' => '?string',
        'name' => '?string',
        'password_include_digit' => '?string',
        'password_include_digit_or_special_character' => '?string',
        'password_include_lower_case' => '?string',
        'password_include_special_character' => '?string',
        'password_include_upper_case' => '?string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'minimum_length' => null,
        'name' => null,
        'password_include_digit' => null,
        'password_include_digit_or_special_character' => null,
        'password_include_lower_case' => null,
        'password_include_special_character' => null,
        'password_include_upper_case' => null
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
        'minimum_length' => 'minimumLength',
        'name' => 'name',
        'password_include_digit' => 'passwordIncludeDigit',
        'password_include_digit_or_special_character' => 'passwordIncludeDigitOrSpecialCharacter',
        'password_include_lower_case' => 'passwordIncludeLowerCase',
        'password_include_special_character' => 'passwordIncludeSpecialCharacter',
        'password_include_upper_case' => 'passwordIncludeUpperCase'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'minimum_length' => 'setMinimumLength',
        'name' => 'setName',
        'password_include_digit' => 'setPasswordIncludeDigit',
        'password_include_digit_or_special_character' => 'setPasswordIncludeDigitOrSpecialCharacter',
        'password_include_lower_case' => 'setPasswordIncludeLowerCase',
        'password_include_special_character' => 'setPasswordIncludeSpecialCharacter',
        'password_include_upper_case' => 'setPasswordIncludeUpperCase'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'minimum_length' => 'getMinimumLength',
        'name' => 'getName',
        'password_include_digit' => 'getPasswordIncludeDigit',
        'password_include_digit_or_special_character' => 'getPasswordIncludeDigitOrSpecialCharacter',
        'password_include_lower_case' => 'getPasswordIncludeLowerCase',
        'password_include_special_character' => 'getPasswordIncludeSpecialCharacter',
        'password_include_upper_case' => 'getPasswordIncludeUpperCase'
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
        $this->container['minimum_length'] = isset($data['minimum_length']) ? $data['minimum_length'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['password_include_digit'] = isset($data['password_include_digit']) ? $data['password_include_digit'] : null;
        $this->container['password_include_digit_or_special_character'] = isset($data['password_include_digit_or_special_character']) ? $data['password_include_digit_or_special_character'] : null;
        $this->container['password_include_lower_case'] = isset($data['password_include_lower_case']) ? $data['password_include_lower_case'] : null;
        $this->container['password_include_special_character'] = isset($data['password_include_special_character']) ? $data['password_include_special_character'] : null;
        $this->container['password_include_upper_case'] = isset($data['password_include_upper_case']) ? $data['password_include_upper_case'] : null;
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
     * Gets minimum_length
     *
     * @return ?string
     */
    public function getMinimumLength()
    {
        return $this->container['minimum_length'];
    }

    /**
     * Sets minimum_length
     *
     * @param ?string $minimum_length 
     *
     * @return $this
     */
    public function setMinimumLength($minimum_length)
    {
        $this->container['minimum_length'] = $minimum_length;

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
     * Gets password_include_digit
     *
     * @return ?string
     */
    public function getPasswordIncludeDigit()
    {
        return $this->container['password_include_digit'];
    }

    /**
     * Sets password_include_digit
     *
     * @param ?string $password_include_digit 
     *
     * @return $this
     */
    public function setPasswordIncludeDigit($password_include_digit)
    {
        $this->container['password_include_digit'] = $password_include_digit;

        return $this;
    }

    /**
     * Gets password_include_digit_or_special_character
     *
     * @return ?string
     */
    public function getPasswordIncludeDigitOrSpecialCharacter()
    {
        return $this->container['password_include_digit_or_special_character'];
    }

    /**
     * Sets password_include_digit_or_special_character
     *
     * @param ?string $password_include_digit_or_special_character 
     *
     * @return $this
     */
    public function setPasswordIncludeDigitOrSpecialCharacter($password_include_digit_or_special_character)
    {
        $this->container['password_include_digit_or_special_character'] = $password_include_digit_or_special_character;

        return $this;
    }

    /**
     * Gets password_include_lower_case
     *
     * @return ?string
     */
    public function getPasswordIncludeLowerCase()
    {
        return $this->container['password_include_lower_case'];
    }

    /**
     * Sets password_include_lower_case
     *
     * @param ?string $password_include_lower_case 
     *
     * @return $this
     */
    public function setPasswordIncludeLowerCase($password_include_lower_case)
    {
        $this->container['password_include_lower_case'] = $password_include_lower_case;

        return $this;
    }

    /**
     * Gets password_include_special_character
     *
     * @return ?string
     */
    public function getPasswordIncludeSpecialCharacter()
    {
        return $this->container['password_include_special_character'];
    }

    /**
     * Sets password_include_special_character
     *
     * @param ?string $password_include_special_character 
     *
     * @return $this
     */
    public function setPasswordIncludeSpecialCharacter($password_include_special_character)
    {
        $this->container['password_include_special_character'] = $password_include_special_character;

        return $this;
    }

    /**
     * Gets password_include_upper_case
     *
     * @return ?string
     */
    public function getPasswordIncludeUpperCase()
    {
        return $this->container['password_include_upper_case'];
    }

    /**
     * Sets password_include_upper_case
     *
     * @param ?string $password_include_upper_case 
     *
     * @return $this
     */
    public function setPasswordIncludeUpperCase($password_include_upper_case)
    {
        $this->container['password_include_upper_case'] = $password_include_upper_case;

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
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}

