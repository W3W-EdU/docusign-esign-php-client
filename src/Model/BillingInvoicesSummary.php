<?php
/**
 * BillingInvoicesSummary
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
 * BillingInvoicesSummary Class Doc Comment
 *
 * @category    Class
 * @package     DocuSign\eSign
 * @author      Swagger Codegen team <apihelp@docusign.com>
 * @license     The DocuSign PHP Client SDK is licensed under the MIT License.
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class BillingInvoicesSummary implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'billingInvoicesSummary';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'account_balance' => '?string',
        'billing_invoices' => '\DocuSign\eSign\Model\BillingInvoice[]',
        'currency_code' => '?string',
        'past_due_balance' => '?string',
        'payment_allowed' => '?string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'account_balance' => null,
        'billing_invoices' => null,
        'currency_code' => null,
        'past_due_balance' => null,
        'payment_allowed' => null
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
        'account_balance' => 'accountBalance',
        'billing_invoices' => 'billingInvoices',
        'currency_code' => 'currencyCode',
        'past_due_balance' => 'pastDueBalance',
        'payment_allowed' => 'paymentAllowed'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'account_balance' => 'setAccountBalance',
        'billing_invoices' => 'setBillingInvoices',
        'currency_code' => 'setCurrencyCode',
        'past_due_balance' => 'setPastDueBalance',
        'payment_allowed' => 'setPaymentAllowed'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'account_balance' => 'getAccountBalance',
        'billing_invoices' => 'getBillingInvoices',
        'currency_code' => 'getCurrencyCode',
        'past_due_balance' => 'getPastDueBalance',
        'payment_allowed' => 'getPaymentAllowed'
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
        $this->container['account_balance'] = isset($data['account_balance']) ? $data['account_balance'] : null;
        $this->container['billing_invoices'] = isset($data['billing_invoices']) ? $data['billing_invoices'] : null;
        $this->container['currency_code'] = isset($data['currency_code']) ? $data['currency_code'] : null;
        $this->container['past_due_balance'] = isset($data['past_due_balance']) ? $data['past_due_balance'] : null;
        $this->container['payment_allowed'] = isset($data['payment_allowed']) ? $data['payment_allowed'] : null;
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
     * Gets account_balance
     *
     * @return ?string
     */
    public function getAccountBalance()
    {
        return $this->container['account_balance'];
    }

    /**
     * Sets account_balance
     *
     * @param ?string $account_balance 
     *
     * @return $this
     */
    public function setAccountBalance($account_balance)
    {
        $this->container['account_balance'] = $account_balance;

        return $this;
    }

    /**
     * Gets billing_invoices
     *
     * @return \DocuSign\eSign\Model\BillingInvoice[]
     */
    public function getBillingInvoices()
    {
        return $this->container['billing_invoices'];
    }

    /**
     * Sets billing_invoices
     *
     * @param \DocuSign\eSign\Model\BillingInvoice[] $billing_invoices Reserved: TBD
     *
     * @return $this
     */
    public function setBillingInvoices($billing_invoices)
    {
        $this->container['billing_invoices'] = $billing_invoices;

        return $this;
    }

    /**
     * Gets currency_code
     *
     * @return ?string
     */
    public function getCurrencyCode()
    {
        return $this->container['currency_code'];
    }

    /**
     * Sets currency_code
     *
     * @param ?string $currency_code 
     *
     * @return $this
     */
    public function setCurrencyCode($currency_code)
    {
        $this->container['currency_code'] = $currency_code;

        return $this;
    }

    /**
     * Gets past_due_balance
     *
     * @return ?string
     */
    public function getPastDueBalance()
    {
        return $this->container['past_due_balance'];
    }

    /**
     * Sets past_due_balance
     *
     * @param ?string $past_due_balance 
     *
     * @return $this
     */
    public function setPastDueBalance($past_due_balance)
    {
        $this->container['past_due_balance'] = $past_due_balance;

        return $this;
    }

    /**
     * Gets payment_allowed
     *
     * @return ?string
     */
    public function getPaymentAllowed()
    {
        return $this->container['payment_allowed'];
    }

    /**
     * Sets payment_allowed
     *
     * @param ?string $payment_allowed 
     *
     * @return $this
     */
    public function setPaymentAllowed($payment_allowed)
    {
        $this->container['payment_allowed'] = $payment_allowed;

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

