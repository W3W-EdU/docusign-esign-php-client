<?php
/**
 * BillingInvoiceItem
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
 * BillingInvoiceItem Class Doc Comment
 *
 * @category    Class
 * @description Contains information about an item on a billing invoice.
 * @package     DocuSign\eSign
 * @author      Swagger Codegen team <apihelp@docusign.com>
 * @license     The DocuSign PHP Client SDK is licensed under the MIT License.
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class BillingInvoiceItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'billingInvoiceItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'charge_amount' => '?string',
        'charge_name' => '?string',
        'invoice_item_id' => '?string',
        'quantity' => '?string',
        'tax_amount' => '?string',
        'tax_exempt_amount' => '?string',
        'unit_price' => '?string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'charge_amount' => null,
        'charge_name' => null,
        'invoice_item_id' => null,
        'quantity' => null,
        'tax_amount' => null,
        'tax_exempt_amount' => null,
        'unit_price' => null
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
        'charge_amount' => 'chargeAmount',
        'charge_name' => 'chargeName',
        'invoice_item_id' => 'invoiceItemId',
        'quantity' => 'quantity',
        'tax_amount' => 'taxAmount',
        'tax_exempt_amount' => 'taxExemptAmount',
        'unit_price' => 'unitPrice'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'charge_amount' => 'setChargeAmount',
        'charge_name' => 'setChargeName',
        'invoice_item_id' => 'setInvoiceItemId',
        'quantity' => 'setQuantity',
        'tax_amount' => 'setTaxAmount',
        'tax_exempt_amount' => 'setTaxExemptAmount',
        'unit_price' => 'setUnitPrice'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'charge_amount' => 'getChargeAmount',
        'charge_name' => 'getChargeName',
        'invoice_item_id' => 'getInvoiceItemId',
        'quantity' => 'getQuantity',
        'tax_amount' => 'getTaxAmount',
        'tax_exempt_amount' => 'getTaxExemptAmount',
        'unit_price' => 'getUnitPrice'
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
        $this->container['charge_amount'] = isset($data['charge_amount']) ? $data['charge_amount'] : null;
        $this->container['charge_name'] = isset($data['charge_name']) ? $data['charge_name'] : null;
        $this->container['invoice_item_id'] = isset($data['invoice_item_id']) ? $data['invoice_item_id'] : null;
        $this->container['quantity'] = isset($data['quantity']) ? $data['quantity'] : null;
        $this->container['tax_amount'] = isset($data['tax_amount']) ? $data['tax_amount'] : null;
        $this->container['tax_exempt_amount'] = isset($data['tax_exempt_amount']) ? $data['tax_exempt_amount'] : null;
        $this->container['unit_price'] = isset($data['unit_price']) ? $data['unit_price'] : null;
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
     * Gets charge_amount
     *
     * @return ?string
     */
    public function getChargeAmount()
    {
        return $this->container['charge_amount'];
    }

    /**
     * Sets charge_amount
     *
     * @param ?string $charge_amount Reserved: TBD
     *
     * @return $this
     */
    public function setChargeAmount($charge_amount)
    {
        $this->container['charge_amount'] = $charge_amount;

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
     * @param ?string $charge_name Reserved: TBD
     *
     * @return $this
     */
    public function setChargeName($charge_name)
    {
        $this->container['charge_name'] = $charge_name;

        return $this;
    }

    /**
     * Gets invoice_item_id
     *
     * @return ?string
     */
    public function getInvoiceItemId()
    {
        return $this->container['invoice_item_id'];
    }

    /**
     * Sets invoice_item_id
     *
     * @param ?string $invoice_item_id Reserved: TBD
     *
     * @return $this
     */
    public function setInvoiceItemId($invoice_item_id)
    {
        $this->container['invoice_item_id'] = $invoice_item_id;

        return $this;
    }

    /**
     * Gets quantity
     *
     * @return ?string
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     *
     * @param ?string $quantity 
     *
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets tax_amount
     *
     * @return ?string
     */
    public function getTaxAmount()
    {
        return $this->container['tax_amount'];
    }

    /**
     * Sets tax_amount
     *
     * @param ?string $tax_amount 
     *
     * @return $this
     */
    public function setTaxAmount($tax_amount)
    {
        $this->container['tax_amount'] = $tax_amount;

        return $this;
    }

    /**
     * Gets tax_exempt_amount
     *
     * @return ?string
     */
    public function getTaxExemptAmount()
    {
        return $this->container['tax_exempt_amount'];
    }

    /**
     * Sets tax_exempt_amount
     *
     * @param ?string $tax_exempt_amount 
     *
     * @return $this
     */
    public function setTaxExemptAmount($tax_exempt_amount)
    {
        $this->container['tax_exempt_amount'] = $tax_exempt_amount;

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

