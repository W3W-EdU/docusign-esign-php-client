<?php
/**
 * EnvelopeTemplateDefinition
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
 * EnvelopeTemplateDefinition Class Doc Comment
 *
 * @category    Class
 * @description A complex element containing the following information:  templateId: Unique identifier of the template. If this is not provided, DocuSign will generate a value.   name: Name of the template. Maximum length: 100 characters.  shared: When set to **true**, the template is shared with the Everyone group in the account. If false, the template is only shared with the Administrator group.  password: Password, if the template is locked.  description: Description of the template. Maximum Length: 500 characters.  pageCount: Number of document pages in the template.  folderName: The name of the folder the template is located in.  folderId: The ID for the folder.  owner: The userName, email, userId, userType, and userStatus for the template owner.
 * @package     DocuSign\eSign
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class EnvelopeTemplateDefinition implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'envelopeTemplateDefinition';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'created' => '?string',
        'description' => '?string',
        'folder_id' => '?string',
        'folder_name' => '?string',
        'folder_uri' => '?string',
        'last_modified' => '?string',
        'last_modified_by' => '\DocuSign\eSign\Model\UserInfo',
        'name' => '?string',
        'new_password' => '?string',
        'owner' => '\DocuSign\eSign\Model\UserInfo',
        'page_count' => '?int',
        'parent_folder_uri' => '?string',
        'password' => '?string',
        'shared' => '?string',
        'template_id' => '?string',
        'uri' => '?string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'created' => null,
        'description' => null,
        'folder_id' => null,
        'folder_name' => null,
        'folder_uri' => null,
        'last_modified' => null,
        'last_modified_by' => null,
        'name' => null,
        'new_password' => null,
        'owner' => null,
        'page_count' => 'int32',
        'parent_folder_uri' => null,
        'password' => null,
        'shared' => null,
        'template_id' => null,
        'uri' => null
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
        'created' => 'created',
        'description' => 'description',
        'folder_id' => 'folderId',
        'folder_name' => 'folderName',
        'folder_uri' => 'folderUri',
        'last_modified' => 'lastModified',
        'last_modified_by' => 'lastModifiedBy',
        'name' => 'name',
        'new_password' => 'newPassword',
        'owner' => 'owner',
        'page_count' => 'pageCount',
        'parent_folder_uri' => 'parentFolderUri',
        'password' => 'password',
        'shared' => 'shared',
        'template_id' => 'templateId',
        'uri' => 'uri'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'created' => 'setCreated',
        'description' => 'setDescription',
        'folder_id' => 'setFolderId',
        'folder_name' => 'setFolderName',
        'folder_uri' => 'setFolderUri',
        'last_modified' => 'setLastModified',
        'last_modified_by' => 'setLastModifiedBy',
        'name' => 'setName',
        'new_password' => 'setNewPassword',
        'owner' => 'setOwner',
        'page_count' => 'setPageCount',
        'parent_folder_uri' => 'setParentFolderUri',
        'password' => 'setPassword',
        'shared' => 'setShared',
        'template_id' => 'setTemplateId',
        'uri' => 'setUri'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'created' => 'getCreated',
        'description' => 'getDescription',
        'folder_id' => 'getFolderId',
        'folder_name' => 'getFolderName',
        'folder_uri' => 'getFolderUri',
        'last_modified' => 'getLastModified',
        'last_modified_by' => 'getLastModifiedBy',
        'name' => 'getName',
        'new_password' => 'getNewPassword',
        'owner' => 'getOwner',
        'page_count' => 'getPageCount',
        'parent_folder_uri' => 'getParentFolderUri',
        'password' => 'getPassword',
        'shared' => 'getShared',
        'template_id' => 'getTemplateId',
        'uri' => 'getUri'
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
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['folder_id'] = isset($data['folder_id']) ? $data['folder_id'] : null;
        $this->container['folder_name'] = isset($data['folder_name']) ? $data['folder_name'] : null;
        $this->container['folder_uri'] = isset($data['folder_uri']) ? $data['folder_uri'] : null;
        $this->container['last_modified'] = isset($data['last_modified']) ? $data['last_modified'] : null;
        $this->container['last_modified_by'] = isset($data['last_modified_by']) ? $data['last_modified_by'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['new_password'] = isset($data['new_password']) ? $data['new_password'] : null;
        $this->container['owner'] = isset($data['owner']) ? $data['owner'] : null;
        $this->container['page_count'] = isset($data['page_count']) ? $data['page_count'] : null;
        $this->container['parent_folder_uri'] = isset($data['parent_folder_uri']) ? $data['parent_folder_uri'] : null;
        $this->container['password'] = isset($data['password']) ? $data['password'] : null;
        $this->container['shared'] = isset($data['shared']) ? $data['shared'] : null;
        $this->container['template_id'] = isset($data['template_id']) ? $data['template_id'] : null;
        $this->container['uri'] = isset($data['uri']) ? $data['uri'] : null;
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
     * Gets created
     *
     * @return ?string
     */
    public function getCreated()
    {
        return $this->container['created'];
    }

    /**
     * Sets created
     *
     * @param ?string $created 
     *
     * @return $this
     */
    public function setCreated($created)
    {
        $this->container['created'] = $created;

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
     * Gets folder_id
     *
     * @return ?string
     */
    public function getFolderId()
    {
        return $this->container['folder_id'];
    }

    /**
     * Sets folder_id
     *
     * @param ?string $folder_id The ID for the folder.
     *
     * @return $this
     */
    public function setFolderId($folder_id)
    {
        $this->container['folder_id'] = $folder_id;

        return $this;
    }

    /**
     * Gets folder_name
     *
     * @return ?string
     */
    public function getFolderName()
    {
        return $this->container['folder_name'];
    }

    /**
     * Sets folder_name
     *
     * @param ?string $folder_name The name of the folder in which the template is located.
     *
     * @return $this
     */
    public function setFolderName($folder_name)
    {
        $this->container['folder_name'] = $folder_name;

        return $this;
    }

    /**
     * Gets folder_uri
     *
     * @return ?string
     */
    public function getFolderUri()
    {
        return $this->container['folder_uri'];
    }

    /**
     * Sets folder_uri
     *
     * @param ?string $folder_uri The URI of the folder.
     *
     * @return $this
     */
    public function setFolderUri($folder_uri)
    {
        $this->container['folder_uri'] = $folder_uri;

        return $this;
    }

    /**
     * Gets last_modified
     *
     * @return ?string
     */
    public function getLastModified()
    {
        return $this->container['last_modified'];
    }

    /**
     * Sets last_modified
     *
     * @param ?string $last_modified 
     *
     * @return $this
     */
    public function setLastModified($last_modified)
    {
        $this->container['last_modified'] = $last_modified;

        return $this;
    }

    /**
     * Gets last_modified_by
     *
     * @return \DocuSign\eSign\Model\UserInfo
     */
    public function getLastModifiedBy()
    {
        return $this->container['last_modified_by'];
    }

    /**
     * Sets last_modified_by
     *
     * @param \DocuSign\eSign\Model\UserInfo $last_modified_by last_modified_by
     *
     * @return $this
     */
    public function setLastModifiedBy($last_modified_by)
    {
        $this->container['last_modified_by'] = $last_modified_by;

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
     * Gets new_password
     *
     * @return ?string
     */
    public function getNewPassword()
    {
        return $this->container['new_password'];
    }

    /**
     * Sets new_password
     *
     * @param ?string $new_password 
     *
     * @return $this
     */
    public function setNewPassword($new_password)
    {
        $this->container['new_password'] = $new_password;

        return $this;
    }

    /**
     * Gets owner
     *
     * @return \DocuSign\eSign\Model\UserInfo
     */
    public function getOwner()
    {
        return $this->container['owner'];
    }

    /**
     * Sets owner
     *
     * @param \DocuSign\eSign\Model\UserInfo $owner owner
     *
     * @return $this
     */
    public function setOwner($owner)
    {
        $this->container['owner'] = $owner;

        return $this;
    }

    /**
     * Gets page_count
     *
     * @return ?int
     */
    public function getPageCount()
    {
        return $this->container['page_count'];
    }

    /**
     * Sets page_count
     *
     * @param ?int $page_count An integer value specifying the number of document pages in the template. Omit this property if not submitting a page count.
     *
     * @return $this
     */
    public function setPageCount($page_count)
    {
        $this->container['page_count'] = $page_count;

        return $this;
    }

    /**
     * Gets parent_folder_uri
     *
     * @return ?string
     */
    public function getParentFolderUri()
    {
        return $this->container['parent_folder_uri'];
    }

    /**
     * Sets parent_folder_uri
     *
     * @param ?string $parent_folder_uri 
     *
     * @return $this
     */
    public function setParentFolderUri($parent_folder_uri)
    {
        $this->container['parent_folder_uri'] = $parent_folder_uri;

        return $this;
    }

    /**
     * Gets password
     *
     * @return ?string
     */
    public function getPassword()
    {
        return $this->container['password'];
    }

    /**
     * Sets password
     *
     * @param ?string $password 
     *
     * @return $this
     */
    public function setPassword($password)
    {
        $this->container['password'] = $password;

        return $this;
    }

    /**
     * Gets shared
     *
     * @return ?string
     */
    public function getShared()
    {
        return $this->container['shared'];
    }

    /**
     * Sets shared
     *
     * @param ?string $shared When set to **true**, this custom tab is shared.
     *
     * @return $this
     */
    public function setShared($shared)
    {
        $this->container['shared'] = $shared;

        return $this;
    }

    /**
     * Gets template_id
     *
     * @return ?string
     */
    public function getTemplateId()
    {
        return $this->container['template_id'];
    }

    /**
     * Sets template_id
     *
     * @param ?string $template_id The unique identifier of the template. If this is not provided, DocuSign will generate a value.
     *
     * @return $this
     */
    public function setTemplateId($template_id)
    {
        $this->container['template_id'] = $template_id;

        return $this;
    }

    /**
     * Gets uri
     *
     * @return ?string
     */
    public function getUri()
    {
        return $this->container['uri'];
    }

    /**
     * Sets uri
     *
     * @param ?string $uri 
     *
     * @return $this
     */
    public function setUri($uri)
    {
        $this->container['uri'] = $uri;

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

