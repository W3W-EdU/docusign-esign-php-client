<?php
/**
 * ConnectSalesforceObject
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
 * ConnectSalesforceObject Class Doc Comment
 *
 * @category    Class
 * @description A &#x60;connectSalesforceObject&#x60; is an object that updates envelope and document status or recipient status in your Salesforce account.  When you install DocuSign Connect for Salesforce, the service automatically sets up two Connect objects: one that updates envelope status and documents and one that updates recipient status. You can also customize DocuSign Connect for Salesforce by associating DocuSign objects with Salesforce objects so that DocuSign Connect for Salesforce updates or inserts the information into the Salesforce object. For more information, see  [DocuSign for Salesforce - Adding Completed Documents to the Notes and Attachments](https://support.docusign.com/articles/DocuSign-for-Salesforce-Adding-Completed-Documents-to-the-Notes-and-Attachments-New).
 * @package     DocuSign\eSign
 * @author      Swagger Codegen team <apihelp@docusign.com>
 * @license     The DocuSign PHP Client SDK is licensed under the MIT License.
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ConnectSalesforceObject implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'connectSalesforceObject';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'active' => '?string',
        'description' => '?string',
        'id' => '?string',
        'insert' => '?string',
        'on_complete_only' => '?string',
        'select_fields' => '\DocuSign\eSign\Model\ConnectSalesforceField[]',
        'sf_object' => '?string',
        'sf_object_name' => '?string',
        'update_fields' => '\DocuSign\eSign\Model\ConnectSalesforceField[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'active' => null,
        'description' => null,
        'id' => null,
        'insert' => null,
        'on_complete_only' => null,
        'select_fields' => null,
        'sf_object' => null,
        'sf_object_name' => null,
        'update_fields' => null
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
        'active' => 'active',
        'description' => 'description',
        'id' => 'id',
        'insert' => 'insert',
        'on_complete_only' => 'onCompleteOnly',
        'select_fields' => 'selectFields',
        'sf_object' => 'sfObject',
        'sf_object_name' => 'sfObjectName',
        'update_fields' => 'updateFields'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'active' => 'setActive',
        'description' => 'setDescription',
        'id' => 'setId',
        'insert' => 'setInsert',
        'on_complete_only' => 'setOnCompleteOnly',
        'select_fields' => 'setSelectFields',
        'sf_object' => 'setSfObject',
        'sf_object_name' => 'setSfObjectName',
        'update_fields' => 'setUpdateFields'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'active' => 'getActive',
        'description' => 'getDescription',
        'id' => 'getId',
        'insert' => 'getInsert',
        'on_complete_only' => 'getOnCompleteOnly',
        'select_fields' => 'getSelectFields',
        'sf_object' => 'getSfObject',
        'sf_object_name' => 'getSfObjectName',
        'update_fields' => 'getUpdateFields'
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
        $this->container['active'] = isset($data['active']) ? $data['active'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['insert'] = isset($data['insert']) ? $data['insert'] : null;
        $this->container['on_complete_only'] = isset($data['on_complete_only']) ? $data['on_complete_only'] : null;
        $this->container['select_fields'] = isset($data['select_fields']) ? $data['select_fields'] : null;
        $this->container['sf_object'] = isset($data['sf_object']) ? $data['sf_object'] : null;
        $this->container['sf_object_name'] = isset($data['sf_object_name']) ? $data['sf_object_name'] : null;
        $this->container['update_fields'] = isset($data['update_fields']) ? $data['update_fields'] : null;
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
     * Gets active
     *
     * @return ?string
     */
    public function getActive()
    {
        return $this->container['active'];
    }

    /**
     * Sets active
     *
     * @param ?string $active 
     *
     * @return $this
     */
    public function setActive($active)
    {
        $this->container['active'] = $active;

        return $this;
    }

    /**
     * Gets description
     *
     * @return ?string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param ?string $description 
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets id
     *
     * @return ?string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param ?string $id 
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets insert
     *
     * @return ?string
     */
    public function getInsert()
    {
        return $this->container['insert'];
    }

    /**
     * Sets insert
     *
     * @param ?string $insert 
     *
     * @return $this
     */
    public function setInsert($insert)
    {
        $this->container['insert'] = $insert;

        return $this;
    }

    /**
     * Gets on_complete_only
     *
     * @return ?string
     */
    public function getOnCompleteOnly()
    {
        return $this->container['on_complete_only'];
    }

    /**
     * Sets on_complete_only
     *
     * @param ?string $on_complete_only 
     *
     * @return $this
     */
    public function setOnCompleteOnly($on_complete_only)
    {
        $this->container['on_complete_only'] = $on_complete_only;

        return $this;
    }

    /**
     * Gets select_fields
     *
     * @return \DocuSign\eSign\Model\ConnectSalesforceField[]
     */
    public function getSelectFields()
    {
        return $this->container['select_fields'];
    }

    /**
     * Sets select_fields
     *
     * @param \DocuSign\eSign\Model\ConnectSalesforceField[] $select_fields 
     *
     * @return $this
     */
    public function setSelectFields($select_fields)
    {
        $this->container['select_fields'] = $select_fields;

        return $this;
    }

    /**
     * Gets sf_object
     *
     * @return ?string
     */
    public function getSfObject()
    {
        return $this->container['sf_object'];
    }

    /**
     * Sets sf_object
     *
     * @param ?string $sf_object 
     *
     * @return $this
     */
    public function setSfObject($sf_object)
    {
        $this->container['sf_object'] = $sf_object;

        return $this;
    }

    /**
     * Gets sf_object_name
     *
     * @return ?string
     */
    public function getSfObjectName()
    {
        return $this->container['sf_object_name'];
    }

    /**
     * Sets sf_object_name
     *
     * @param ?string $sf_object_name 
     *
     * @return $this
     */
    public function setSfObjectName($sf_object_name)
    {
        $this->container['sf_object_name'] = $sf_object_name;

        return $this;
    }

    /**
     * Gets update_fields
     *
     * @return \DocuSign\eSign\Model\ConnectSalesforceField[]
     */
    public function getUpdateFields()
    {
        return $this->container['update_fields'];
    }

    /**
     * Sets update_fields
     *
     * @param \DocuSign\eSign\Model\ConnectSalesforceField[] $update_fields 
     *
     * @return $this
     */
    public function setUpdateFields($update_fields)
    {
        $this->container['update_fields'] = $update_fields;

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

