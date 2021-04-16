<?php
/**
 * PowerFormRecipient
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
 * PowerFormRecipient Class Doc Comment
 *
 * @category    Class
 * @package     DocuSign\eSign
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class PowerFormRecipient implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'powerFormRecipient';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'access_code' => '?string',
        'access_code_locked' => '?string',
        'access_code_required' => '?string',
        'email' => '?string',
        'email_locked' => '?string',
        'id_check_configuration_name' => '?string',
        'id_check_required' => '?string',
        'name' => '?string',
        'recipient_type' => '?string',
        'role_name' => '?string',
        'routing_order' => '?string',
        'template_requires_id_lookup' => '?string',
        'user_name_locked' => '?string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'access_code' => null,
        'access_code_locked' => null,
        'access_code_required' => null,
        'email' => null,
        'email_locked' => null,
        'id_check_configuration_name' => null,
        'id_check_required' => null,
        'name' => null,
        'recipient_type' => null,
        'role_name' => null,
        'routing_order' => null,
        'template_requires_id_lookup' => null,
        'user_name_locked' => null
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
        'access_code' => 'accessCode',
        'access_code_locked' => 'accessCodeLocked',
        'access_code_required' => 'accessCodeRequired',
        'email' => 'email',
        'email_locked' => 'emailLocked',
        'id_check_configuration_name' => 'idCheckConfigurationName',
        'id_check_required' => 'idCheckRequired',
        'name' => 'name',
        'recipient_type' => 'recipientType',
        'role_name' => 'roleName',
        'routing_order' => 'routingOrder',
        'template_requires_id_lookup' => 'templateRequiresIdLookup',
        'user_name_locked' => 'userNameLocked'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'access_code' => 'setAccessCode',
        'access_code_locked' => 'setAccessCodeLocked',
        'access_code_required' => 'setAccessCodeRequired',
        'email' => 'setEmail',
        'email_locked' => 'setEmailLocked',
        'id_check_configuration_name' => 'setIdCheckConfigurationName',
        'id_check_required' => 'setIdCheckRequired',
        'name' => 'setName',
        'recipient_type' => 'setRecipientType',
        'role_name' => 'setRoleName',
        'routing_order' => 'setRoutingOrder',
        'template_requires_id_lookup' => 'setTemplateRequiresIdLookup',
        'user_name_locked' => 'setUserNameLocked'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'access_code' => 'getAccessCode',
        'access_code_locked' => 'getAccessCodeLocked',
        'access_code_required' => 'getAccessCodeRequired',
        'email' => 'getEmail',
        'email_locked' => 'getEmailLocked',
        'id_check_configuration_name' => 'getIdCheckConfigurationName',
        'id_check_required' => 'getIdCheckRequired',
        'name' => 'getName',
        'recipient_type' => 'getRecipientType',
        'role_name' => 'getRoleName',
        'routing_order' => 'getRoutingOrder',
        'template_requires_id_lookup' => 'getTemplateRequiresIdLookup',
        'user_name_locked' => 'getUserNameLocked'
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
        $this->container['access_code'] = isset($data['access_code']) ? $data['access_code'] : null;
        $this->container['access_code_locked'] = isset($data['access_code_locked']) ? $data['access_code_locked'] : null;
        $this->container['access_code_required'] = isset($data['access_code_required']) ? $data['access_code_required'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['email_locked'] = isset($data['email_locked']) ? $data['email_locked'] : null;
        $this->container['id_check_configuration_name'] = isset($data['id_check_configuration_name']) ? $data['id_check_configuration_name'] : null;
        $this->container['id_check_required'] = isset($data['id_check_required']) ? $data['id_check_required'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['recipient_type'] = isset($data['recipient_type']) ? $data['recipient_type'] : null;
        $this->container['role_name'] = isset($data['role_name']) ? $data['role_name'] : null;
        $this->container['routing_order'] = isset($data['routing_order']) ? $data['routing_order'] : null;
        $this->container['template_requires_id_lookup'] = isset($data['template_requires_id_lookup']) ? $data['template_requires_id_lookup'] : null;
        $this->container['user_name_locked'] = isset($data['user_name_locked']) ? $data['user_name_locked'] : null;
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
     * Gets access_code
     *
     * @return ?string
     */
    public function getAccessCode()
    {
        return $this->container['access_code'];
    }

    /**
     * Sets access_code
     *
     * @param ?string $access_code If a value is provided, the recipient must enter the value as the access code to view and sign the envelope.   Maximum Length: 50 characters and it must conform to the account's access code format setting.  If blank, but the signer `accessCode` property is set in the envelope, then that value is used.  If blank and the signer `accessCode` property is not set, then the access code is not required.
     *
     * @return $this
     */
    public function setAccessCode($access_code)
    {
        $this->container['access_code'] = $access_code;

        return $this;
    }

    /**
     * Gets access_code_locked
     *
     * @return ?string
     */
    public function getAccessCodeLocked()
    {
        return $this->container['access_code_locked'];
    }

    /**
     * Sets access_code_locked
     *
     * @param ?string $access_code_locked 
     *
     * @return $this
     */
    public function setAccessCodeLocked($access_code_locked)
    {
        $this->container['access_code_locked'] = $access_code_locked;

        return $this;
    }

    /**
     * Gets access_code_required
     *
     * @return ?string
     */
    public function getAccessCodeRequired()
    {
        return $this->container['access_code_required'];
    }

    /**
     * Sets access_code_required
     *
     * @param ?string $access_code_required 
     *
     * @return $this
     */
    public function setAccessCodeRequired($access_code_required)
    {
        $this->container['access_code_required'] = $access_code_required;

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
     * Gets email_locked
     *
     * @return ?string
     */
    public function getEmailLocked()
    {
        return $this->container['email_locked'];
    }

    /**
     * Sets email_locked
     *
     * @param ?string $email_locked 
     *
     * @return $this
     */
    public function setEmailLocked($email_locked)
    {
        $this->container['email_locked'] = $email_locked;

        return $this;
    }

    /**
     * Gets id_check_configuration_name
     *
     * @return ?string
     */
    public function getIdCheckConfigurationName()
    {
        return $this->container['id_check_configuration_name'];
    }

    /**
     * Sets id_check_configuration_name
     *
     * @param ?string $id_check_configuration_name Specifies authentication check by name. The names used here must be the same as the authentication type names used by the account (these name can also be found in the web console sending interface in the Identify list for a recipient,) This overrides any default authentication setting.  *Example*: Your account has ID Check and SMS Authentication available and in the web console Identify list these appear as 'ID Check $' and 'SMS Auth $'. To use ID check in an envelope, the idCheckConfigurationName should be 'ID Check '. If you wanted to use SMS, it would be 'SMS Auth $' and you would need to add you would need to add phone number information to the `smsAuthentication` node.
     *
     * @return $this
     */
    public function setIdCheckConfigurationName($id_check_configuration_name)
    {
        $this->container['id_check_configuration_name'] = $id_check_configuration_name;

        return $this;
    }

    /**
     * Gets id_check_required
     *
     * @return ?string
     */
    public function getIdCheckRequired()
    {
        return $this->container['id_check_required'];
    }

    /**
     * Sets id_check_required
     *
     * @param ?string $id_check_required 
     *
     * @return $this
     */
    public function setIdCheckRequired($id_check_required)
    {
        $this->container['id_check_required'] = $id_check_required;

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
     * Gets recipient_type
     *
     * @return ?string
     */
    public function getRecipientType()
    {
        return $this->container['recipient_type'];
    }

    /**
     * Sets recipient_type
     *
     * @param ?string $recipient_type 
     *
     * @return $this
     */
    public function setRecipientType($recipient_type)
    {
        $this->container['recipient_type'] = $recipient_type;

        return $this;
    }

    /**
     * Gets role_name
     *
     * @return ?string
     */
    public function getRoleName()
    {
        return $this->container['role_name'];
    }

    /**
     * Sets role_name
     *
     * @param ?string $role_name Optional element. Specifies the role name associated with the recipient.<br/><br/>This is required when working with template recipients.
     *
     * @return $this
     */
    public function setRoleName($role_name)
    {
        $this->container['role_name'] = $role_name;

        return $this;
    }

    /**
     * Gets routing_order
     *
     * @return ?string
     */
    public function getRoutingOrder()
    {
        return $this->container['routing_order'];
    }

    /**
     * Sets routing_order
     *
     * @param ?string $routing_order Specifies the routing order of the recipient in the envelope.
     *
     * @return $this
     */
    public function setRoutingOrder($routing_order)
    {
        $this->container['routing_order'] = $routing_order;

        return $this;
    }

    /**
     * Gets template_requires_id_lookup
     *
     * @return ?string
     */
    public function getTemplateRequiresIdLookup()
    {
        return $this->container['template_requires_id_lookup'];
    }

    /**
     * Sets template_requires_id_lookup
     *
     * @param ?string $template_requires_id_lookup 
     *
     * @return $this
     */
    public function setTemplateRequiresIdLookup($template_requires_id_lookup)
    {
        $this->container['template_requires_id_lookup'] = $template_requires_id_lookup;

        return $this;
    }

    /**
     * Gets user_name_locked
     *
     * @return ?string
     */
    public function getUserNameLocked()
    {
        return $this->container['user_name_locked'];
    }

    /**
     * Sets user_name_locked
     *
     * @param ?string $user_name_locked 
     *
     * @return $this
     */
    public function setUserNameLocked($user_name_locked)
    {
        $this->container['user_name_locked'] = $user_name_locked;

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

