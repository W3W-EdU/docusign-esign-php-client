<?php
/**
 * DateStampProperties
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
 * DateStampProperties Class Doc Comment
 *
 * @category    Class
 * @description Specifies the area in which a date stamp is placed. This parameter uses pixel positioning to draw a rectangle at the center of the stamp area. The stamp is superimposed on top of this central area.  This property contains the following information about the central rectangle:  - &#x60;DateAreaX&#x60;: The X axis position of the top-left corner. - &#x60;DateAreaY&#x60;: The Y axis position of the top-left corner. - &#x60;DateAreaWidth&#x60;: The width of the rectangle. - &#x60;DateAreaHeight&#x60;: The height of the rectangle.
 * @package     DocuSign\eSign
 * @author      Swagger Codegen team <apihelp@docusign.com>
 * @license     The DocuSign PHP Client SDK is licensed under the MIT License.
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class DateStampProperties implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'dateStampProperties';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'date_area_height' => '?string',
        'date_area_width' => '?string',
        'date_area_x' => '?string',
        'date_area_y' => '?string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'date_area_height' => null,
        'date_area_width' => null,
        'date_area_x' => null,
        'date_area_y' => null
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
        'date_area_height' => 'dateAreaHeight',
        'date_area_width' => 'dateAreaWidth',
        'date_area_x' => 'dateAreaX',
        'date_area_y' => 'dateAreaY'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'date_area_height' => 'setDateAreaHeight',
        'date_area_width' => 'setDateAreaWidth',
        'date_area_x' => 'setDateAreaX',
        'date_area_y' => 'setDateAreaY'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'date_area_height' => 'getDateAreaHeight',
        'date_area_width' => 'getDateAreaWidth',
        'date_area_x' => 'getDateAreaX',
        'date_area_y' => 'getDateAreaY'
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
        $this->container['date_area_height'] = isset($data['date_area_height']) ? $data['date_area_height'] : null;
        $this->container['date_area_width'] = isset($data['date_area_width']) ? $data['date_area_width'] : null;
        $this->container['date_area_x'] = isset($data['date_area_x']) ? $data['date_area_x'] : null;
        $this->container['date_area_y'] = isset($data['date_area_y']) ? $data['date_area_y'] : null;
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
     * Gets date_area_height
     *
     * @return ?string
     */
    public function getDateAreaHeight()
    {
        return $this->container['date_area_height'];
    }

    /**
     * Sets date_area_height
     *
     * @param ?string $date_area_height 
     *
     * @return $this
     */
    public function setDateAreaHeight($date_area_height)
    {
        $this->container['date_area_height'] = $date_area_height;

        return $this;
    }

    /**
     * Gets date_area_width
     *
     * @return ?string
     */
    public function getDateAreaWidth()
    {
        return $this->container['date_area_width'];
    }

    /**
     * Sets date_area_width
     *
     * @param ?string $date_area_width 
     *
     * @return $this
     */
    public function setDateAreaWidth($date_area_width)
    {
        $this->container['date_area_width'] = $date_area_width;

        return $this;
    }

    /**
     * Gets date_area_x
     *
     * @return ?string
     */
    public function getDateAreaX()
    {
        return $this->container['date_area_x'];
    }

    /**
     * Sets date_area_x
     *
     * @param ?string $date_area_x 
     *
     * @return $this
     */
    public function setDateAreaX($date_area_x)
    {
        $this->container['date_area_x'] = $date_area_x;

        return $this;
    }

    /**
     * Gets date_area_y
     *
     * @return ?string
     */
    public function getDateAreaY()
    {
        return $this->container['date_area_y'];
    }

    /**
     * Sets date_area_y
     *
     * @param ?string $date_area_y 
     *
     * @return $this
     */
    public function setDateAreaY($date_area_y)
    {
        $this->container['date_area_y'] = $date_area_y;

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

