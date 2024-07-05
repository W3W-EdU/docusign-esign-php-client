<?php
/**
 * ExternalDocumentSources
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
 * ExternalDocumentSources Class Doc Comment
 *
 * @category    Class
 * @description A complex object specifying the external document sources.
 * @package     DocuSign\eSign
 * @author      Swagger Codegen team <apihelp@docusign.com>
 * @license     The DocuSign PHP Client SDK is licensed under the MIT License.
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ExternalDocumentSources implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'externalDocumentSources';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'boxnet_enabled' => '?string',
        'boxnet_metadata' => '\DocuSign\eSign\Model\SettingsMetadata',
        'dropbox_enabled' => '?string',
        'dropbox_metadata' => '\DocuSign\eSign\Model\SettingsMetadata',
        'google_drive_enabled' => '?string',
        'google_drive_metadata' => '\DocuSign\eSign\Model\SettingsMetadata',
        'one_drive_enabled' => '?string',
        'one_drive_metadata' => '\DocuSign\eSign\Model\SettingsMetadata',
        'salesforce_enabled' => '?string',
        'salesforce_metadata' => '\DocuSign\eSign\Model\SettingsMetadata'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'boxnet_enabled' => null,
        'boxnet_metadata' => null,
        'dropbox_enabled' => null,
        'dropbox_metadata' => null,
        'google_drive_enabled' => null,
        'google_drive_metadata' => null,
        'one_drive_enabled' => null,
        'one_drive_metadata' => null,
        'salesforce_enabled' => null,
        'salesforce_metadata' => null
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
        'boxnet_enabled' => 'boxnetEnabled',
        'boxnet_metadata' => 'boxnetMetadata',
        'dropbox_enabled' => 'dropboxEnabled',
        'dropbox_metadata' => 'dropboxMetadata',
        'google_drive_enabled' => 'googleDriveEnabled',
        'google_drive_metadata' => 'googleDriveMetadata',
        'one_drive_enabled' => 'oneDriveEnabled',
        'one_drive_metadata' => 'oneDriveMetadata',
        'salesforce_enabled' => 'salesforceEnabled',
        'salesforce_metadata' => 'salesforceMetadata'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'boxnet_enabled' => 'setBoxnetEnabled',
        'boxnet_metadata' => 'setBoxnetMetadata',
        'dropbox_enabled' => 'setDropboxEnabled',
        'dropbox_metadata' => 'setDropboxMetadata',
        'google_drive_enabled' => 'setGoogleDriveEnabled',
        'google_drive_metadata' => 'setGoogleDriveMetadata',
        'one_drive_enabled' => 'setOneDriveEnabled',
        'one_drive_metadata' => 'setOneDriveMetadata',
        'salesforce_enabled' => 'setSalesforceEnabled',
        'salesforce_metadata' => 'setSalesforceMetadata'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'boxnet_enabled' => 'getBoxnetEnabled',
        'boxnet_metadata' => 'getBoxnetMetadata',
        'dropbox_enabled' => 'getDropboxEnabled',
        'dropbox_metadata' => 'getDropboxMetadata',
        'google_drive_enabled' => 'getGoogleDriveEnabled',
        'google_drive_metadata' => 'getGoogleDriveMetadata',
        'one_drive_enabled' => 'getOneDriveEnabled',
        'one_drive_metadata' => 'getOneDriveMetadata',
        'salesforce_enabled' => 'getSalesforceEnabled',
        'salesforce_metadata' => 'getSalesforceMetadata'
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
        $this->container['boxnet_enabled'] = isset($data['boxnet_enabled']) ? $data['boxnet_enabled'] : null;
        $this->container['boxnet_metadata'] = isset($data['boxnet_metadata']) ? $data['boxnet_metadata'] : null;
        $this->container['dropbox_enabled'] = isset($data['dropbox_enabled']) ? $data['dropbox_enabled'] : null;
        $this->container['dropbox_metadata'] = isset($data['dropbox_metadata']) ? $data['dropbox_metadata'] : null;
        $this->container['google_drive_enabled'] = isset($data['google_drive_enabled']) ? $data['google_drive_enabled'] : null;
        $this->container['google_drive_metadata'] = isset($data['google_drive_metadata']) ? $data['google_drive_metadata'] : null;
        $this->container['one_drive_enabled'] = isset($data['one_drive_enabled']) ? $data['one_drive_enabled'] : null;
        $this->container['one_drive_metadata'] = isset($data['one_drive_metadata']) ? $data['one_drive_metadata'] : null;
        $this->container['salesforce_enabled'] = isset($data['salesforce_enabled']) ? $data['salesforce_enabled'] : null;
        $this->container['salesforce_metadata'] = isset($data['salesforce_metadata']) ? $data['salesforce_metadata'] : null;
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
     * Gets boxnet_enabled
     *
     * @return ?string
     */
    public function getBoxnetEnabled()
    {
        return $this->container['boxnet_enabled'];
    }

    /**
     * Sets boxnet_enabled
     *
     * @param ?string $boxnet_enabled 
     *
     * @return $this
     */
    public function setBoxnetEnabled($boxnet_enabled)
    {
        $this->container['boxnet_enabled'] = $boxnet_enabled;

        return $this;
    }

    /**
     * Gets boxnet_metadata
     *
     * @return \DocuSign\eSign\Model\SettingsMetadata
     */
    public function getBoxnetMetadata()
    {
        return $this->container['boxnet_metadata'];
    }

    /**
     * Sets boxnet_metadata
     *
     * @param \DocuSign\eSign\Model\SettingsMetadata $boxnet_metadata Metadata indicating whether the `boxnetEnabled` property is editable.
     *
     * @return $this
     */
    public function setBoxnetMetadata($boxnet_metadata)
    {
        $this->container['boxnet_metadata'] = $boxnet_metadata;

        return $this;
    }

    /**
     * Gets dropbox_enabled
     *
     * @return ?string
     */
    public function getDropboxEnabled()
    {
        return $this->container['dropbox_enabled'];
    }

    /**
     * Sets dropbox_enabled
     *
     * @param ?string $dropbox_enabled 
     *
     * @return $this
     */
    public function setDropboxEnabled($dropbox_enabled)
    {
        $this->container['dropbox_enabled'] = $dropbox_enabled;

        return $this;
    }

    /**
     * Gets dropbox_metadata
     *
     * @return \DocuSign\eSign\Model\SettingsMetadata
     */
    public function getDropboxMetadata()
    {
        return $this->container['dropbox_metadata'];
    }

    /**
     * Sets dropbox_metadata
     *
     * @param \DocuSign\eSign\Model\SettingsMetadata $dropbox_metadata Metadata indicating whether the `dropboxEnabled` property is editable.
     *
     * @return $this
     */
    public function setDropboxMetadata($dropbox_metadata)
    {
        $this->container['dropbox_metadata'] = $dropbox_metadata;

        return $this;
    }

    /**
     * Gets google_drive_enabled
     *
     * @return ?string
     */
    public function getGoogleDriveEnabled()
    {
        return $this->container['google_drive_enabled'];
    }

    /**
     * Sets google_drive_enabled
     *
     * @param ?string $google_drive_enabled 
     *
     * @return $this
     */
    public function setGoogleDriveEnabled($google_drive_enabled)
    {
        $this->container['google_drive_enabled'] = $google_drive_enabled;

        return $this;
    }

    /**
     * Gets google_drive_metadata
     *
     * @return \DocuSign\eSign\Model\SettingsMetadata
     */
    public function getGoogleDriveMetadata()
    {
        return $this->container['google_drive_metadata'];
    }

    /**
     * Sets google_drive_metadata
     *
     * @param \DocuSign\eSign\Model\SettingsMetadata $google_drive_metadata Metadata indicating whether the `googleDriveEnabled` property is editable.
     *
     * @return $this
     */
    public function setGoogleDriveMetadata($google_drive_metadata)
    {
        $this->container['google_drive_metadata'] = $google_drive_metadata;

        return $this;
    }

    /**
     * Gets one_drive_enabled
     *
     * @return ?string
     */
    public function getOneDriveEnabled()
    {
        return $this->container['one_drive_enabled'];
    }

    /**
     * Sets one_drive_enabled
     *
     * @param ?string $one_drive_enabled 
     *
     * @return $this
     */
    public function setOneDriveEnabled($one_drive_enabled)
    {
        $this->container['one_drive_enabled'] = $one_drive_enabled;

        return $this;
    }

    /**
     * Gets one_drive_metadata
     *
     * @return \DocuSign\eSign\Model\SettingsMetadata
     */
    public function getOneDriveMetadata()
    {
        return $this->container['one_drive_metadata'];
    }

    /**
     * Sets one_drive_metadata
     *
     * @param \DocuSign\eSign\Model\SettingsMetadata $one_drive_metadata Metadata indicating whether the `oneDriveEnabled` property is editable.
     *
     * @return $this
     */
    public function setOneDriveMetadata($one_drive_metadata)
    {
        $this->container['one_drive_metadata'] = $one_drive_metadata;

        return $this;
    }

    /**
     * Gets salesforce_enabled
     *
     * @return ?string
     */
    public function getSalesforceEnabled()
    {
        return $this->container['salesforce_enabled'];
    }

    /**
     * Sets salesforce_enabled
     *
     * @param ?string $salesforce_enabled 
     *
     * @return $this
     */
    public function setSalesforceEnabled($salesforce_enabled)
    {
        $this->container['salesforce_enabled'] = $salesforce_enabled;

        return $this;
    }

    /**
     * Gets salesforce_metadata
     *
     * @return \DocuSign\eSign\Model\SettingsMetadata
     */
    public function getSalesforceMetadata()
    {
        return $this->container['salesforce_metadata'];
    }

    /**
     * Sets salesforce_metadata
     *
     * @param \DocuSign\eSign\Model\SettingsMetadata $salesforce_metadata Metadata indicating whether the `salesforceEnabled` property is editable.
     *
     * @return $this
     */
    public function setSalesforceMetadata($salesforce_metadata)
    {
        $this->container['salesforce_metadata'] = $salesforce_metadata;

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

