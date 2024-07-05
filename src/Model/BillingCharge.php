<?php
/**
 * BillingCharge
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
 * BillingCharge Class Doc Comment
 *
 * @category    Class
 * @description Contains information about a billing charge.
 * @package     DocuSign\eSign
 * @author      Swagger Codegen team <apihelp@docusign.com>
 * @license     The DocuSign PHP Client SDK is licensed under the MIT License.
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class BillingCharge implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'billingCharge';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'allowed_quantity' => '?string',
        'blocked' => '?string',
        'charge_name' => '?string',
        'charge_type' => '?string',
        'charge_unit_of_measure' => '?string',
        'discounts' => '\DocuSign\eSign\Model\BillingDiscount[]',
        'first_effective_date' => '?string',
        'included_quantity' => '?string',
        'incremental_quantity' => '?string',
        'last_effective_date' => '?string',
        'prices' => '\DocuSign\eSign\Model\BillingPrice[]',
        'unit_price' => '?string',
        'used_quantity' => '?string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'allowed_quantity' => null,
        'blocked' => null,
        'charge_name' => null,
        'charge_type' => null,
        'charge_unit_of_measure' => null,
        'discounts' => null,
        'first_effective_date' => null,
        'included_quantity' => null,
        'incremental_quantity' => null,
        'last_effective_date' => null,
        'prices' => null,
        'unit_price' => null,
        'used_quantity' => null
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
        'allowed_quantity' => 'allowedQuantity',
        'blocked' => 'blocked',
        'charge_name' => 'chargeName',
        'charge_type' => 'chargeType',
        'charge_unit_of_measure' => 'chargeUnitOfMeasure',
        'discounts' => 'discounts',
        'first_effective_date' => 'firstEffectiveDate',
        'included_quantity' => 'includedQuantity',
        'incremental_quantity' => 'incrementalQuantity',
        'last_effective_date' => 'lastEffectiveDate',
        'prices' => 'prices',
        'unit_price' => 'unitPrice',
        'used_quantity' => 'usedQuantity'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'allowed_quantity' => 'setAllowedQuantity',
        'blocked' => 'setBlocked',
        'charge_name' => 'setChargeName',
        'charge_type' => 'setChargeType',
        'charge_unit_of_measure' => 'setChargeUnitOfMeasure',
        'discounts' => 'setDiscounts',
        'first_effective_date' => 'setFirstEffectiveDate',
        'included_quantity' => 'setIncludedQuantity',
        'incremental_quantity' => 'setIncrementalQuantity',
        'last_effective_date' => 'setLastEffectiveDate',
        'prices' => 'setPrices',
        'unit_price' => 'setUnitPrice',
        'used_quantity' => 'setUsedQuantity'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'allowed_quantity' => 'getAllowedQuantity',
        'blocked' => 'getBlocked',
        'charge_name' => 'getChargeName',
        'charge_type' => 'getChargeType',
        'charge_unit_of_measure' => 'getChargeUnitOfMeasure',
        'discounts' => 'getDiscounts',
        'first_effective_date' => 'getFirstEffectiveDate',
        'included_quantity' => 'getIncludedQuantity',
        'incremental_quantity' => 'getIncrementalQuantity',
        'last_effective_date' => 'getLastEffectiveDate',
        'prices' => 'getPrices',
        'unit_price' => 'getUnitPrice',
        'used_quantity' => 'getUsedQuantity'
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
        $this->container['allowed_quantity'] = isset($data['allowed_quantity']) ? $data['allowed_quantity'] : null;
        $this->container['blocked'] = isset($data['blocked']) ? $data['blocked'] : null;
        $this->container['charge_name'] = isset($data['charge_name']) ? $data['charge_name'] : null;
        $this->container['charge_type'] = isset($data['charge_type']) ? $data['charge_type'] : null;
        $this->container['charge_unit_of_measure'] = isset($data['charge_unit_of_measure']) ? $data['charge_unit_of_measure'] : null;
        $this->container['discounts'] = isset($data['discounts']) ? $data['discounts'] : null;
        $this->container['first_effective_date'] = isset($data['first_effective_date']) ? $data['first_effective_date'] : null;
        $this->container['included_quantity'] = isset($data['included_quantity']) ? $data['included_quantity'] : null;
        $this->container['incremental_quantity'] = isset($data['incremental_quantity']) ? $data['incremental_quantity'] : null;
        $this->container['last_effective_date'] = isset($data['last_effective_date']) ? $data['last_effective_date'] : null;
        $this->container['prices'] = isset($data['prices']) ? $data['prices'] : null;
        $this->container['unit_price'] = isset($data['unit_price']) ? $data['unit_price'] : null;
        $this->container['used_quantity'] = isset($data['used_quantity']) ? $data['used_quantity'] : null;
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
     * Gets allowed_quantity
     *
     * @return ?string
     */
    public function getAllowedQuantity()
    {
        return $this->container['allowed_quantity'];
    }

    /**
     * Sets allowed_quantity
     *
     * @param ?string $allowed_quantity Reserved: TBD
     *
     * @return $this
     */
    public function setAllowedQuantity($allowed_quantity)
    {
        $this->container['allowed_quantity'] = $allowed_quantity;

        return $this;
    }

    /**
     * Gets blocked
     *
     * @return ?string
     */
    public function getBlocked()
    {
        return $this->container['blocked'];
    }

    /**
     * Sets blocked
     *
     * @param ?string $blocked Reserved: TBD
     *
     * @return $this
     */
    public function setBlocked($blocked)
    {
        $this->container['blocked'] = $blocked;

        return $this;
    }

    /**
     * Gets charge_name
     *
     * @return ?string
     */
    public function getChargeName()
    {
        return $this->container['charge_name'];
    }

    /**
     * Sets charge_name
     *
     * @param ?string $charge_name Provides information on what services the charge item is for.  The following table provides a description of the different chargeName values available at this time.  | chargeName | Description | | --- | --- | | id_check | IDÂ Check Charge | | in_person_signing | In Person Signing charge | | envelopes Included | Sent Envelopes for the account | | age_verify | Age verification check | | ofac | OFAC Check | | id_confirm | ID confirmation check | | student_authentication | STAN PIN authentication check | | wet_sign_fax | Pages for returning signed documents by fax | | attachment_fax | Pages for returning attachments by fax | | phone_authentication | Phone authentication charge | | powerforms | PowerForm envelopes sent | | signer_payments | Payment processing charge | | outbound_fax | Send by fax charge | | bulk_recipient_envelopes | Bulk Recipient Envelopes sent | | sms_authentications | SMS authentication charge | | saml_authentications | SAML authentication charge | | express_signer_certificate | DocuSign Express Certificate charge | | personal_signer_certificate | Personal Signer Certificate charge | | safe_certificate | SAFE BioPharma Signer Certificate charge | | seats | Included active seats charge | | open_trust_certificate | OpenTrust Signer Certificate charge |
     *
     * @return $this
     */
    public function setChargeName($charge_name)
    {
        $this->container['charge_name'] = $charge_name;

        return $this;
    }

    /**
     * Gets charge_type
     *
     * @return ?string
     */
    public function getChargeType()
    {
        return $this->container['charge_type'];
    }

    /**
     * Sets charge_type
     *
     * @param ?string $charge_type Reserved: TBD
     *
     * @return $this
     */
    public function setChargeType($charge_type)
    {
        $this->container['charge_type'] = $charge_type;

        return $this;
    }

    /**
     * Gets charge_unit_of_measure
     *
     * @return ?string
     */
    public function getChargeUnitOfMeasure()
    {
        return $this->container['charge_unit_of_measure'];
    }

    /**
     * Sets charge_unit_of_measure
     *
     * @param ?string $charge_unit_of_measure Reserved: TBD
     *
     * @return $this
     */
    public function setChargeUnitOfMeasure($charge_unit_of_measure)
    {
        $this->container['charge_unit_of_measure'] = $charge_unit_of_measure;

        return $this;
    }

    /**
     * Gets discounts
     *
     * @return \DocuSign\eSign\Model\BillingDiscount[]
     */
    public function getDiscounts()
    {
        return $this->container['discounts'];
    }

    /**
     * Sets discounts
     *
     * @param \DocuSign\eSign\Model\BillingDiscount[] $discounts 
     *
     * @return $this
     */
    public function setDiscounts($discounts)
    {
        $this->container['discounts'] = $discounts;

        return $this;
    }

    /**
     * Gets first_effective_date
     *
     * @return ?string
     */
    public function getFirstEffectiveDate()
    {
        return $this->container['first_effective_date'];
    }

    /**
     * Sets first_effective_date
     *
     * @param ?string $first_effective_date 
     *
     * @return $this
     */
    public function setFirstEffectiveDate($first_effective_date)
    {
        $this->container['first_effective_date'] = $first_effective_date;

        return $this;
    }

    /**
     * Gets included_quantity
     *
     * @return ?string
     */
    public function getIncludedQuantity()
    {
        return $this->container['included_quantity'];
    }

    /**
     * Sets included_quantity
     *
     * @param ?string $included_quantity 
     *
     * @return $this
     */
    public function setIncludedQuantity($included_quantity)
    {
        $this->container['included_quantity'] = $included_quantity;

        return $this;
    }

    /**
     * Gets incremental_quantity
     *
     * @return ?string
     */
    public function getIncrementalQuantity()
    {
        return $this->container['incremental_quantity'];
    }

    /**
     * Sets incremental_quantity
     *
     * @param ?string $incremental_quantity Reserved: TBD
     *
     * @return $this
     */
    public function setIncrementalQuantity($incremental_quantity)
    {
        $this->container['incremental_quantity'] = $incremental_quantity;

        return $this;
    }

    /**
     * Gets last_effective_date
     *
     * @return ?string
     */
    public function getLastEffectiveDate()
    {
        return $this->container['last_effective_date'];
    }

    /**
     * Sets last_effective_date
     *
     * @param ?string $last_effective_date 
     *
     * @return $this
     */
    public function setLastEffectiveDate($last_effective_date)
    {
        $this->container['last_effective_date'] = $last_effective_date;

        return $this;
    }

    /**
     * Gets prices
     *
     * @return \DocuSign\eSign\Model\BillingPrice[]
     */
    public function getPrices()
    {
        return $this->container['prices'];
    }

    /**
     * Sets prices
     *
     * @param \DocuSign\eSign\Model\BillingPrice[] $prices 
     *
     * @return $this
     */
    public function setPrices($prices)
    {
        $this->container['prices'] = $prices;

        return $this;
    }

    /**
     * Gets unit_price
     *
     * @return ?string
     */
    public function getUnitPrice()
    {
        return $this->container['unit_price'];
    }

    /**
     * Sets unit_price
     *
     * @param ?string $unit_price Reserved: TBD
     *
     * @return $this
     */
    public function setUnitPrice($unit_price)
    {
        $this->container['unit_price'] = $unit_price;

        return $this;
    }

    /**
     * Gets used_quantity
     *
     * @return ?string
     */
    public function getUsedQuantity()
    {
        return $this->container['used_quantity'];
    }

    /**
     * Sets used_quantity
     *
     * @param ?string $used_quantity 
     *
     * @return $this
     */
    public function setUsedQuantity($used_quantity)
    {
        $this->container['used_quantity'] = $used_quantity;

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

