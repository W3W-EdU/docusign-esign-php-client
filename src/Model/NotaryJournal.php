<?php
/**
 * NotaryJournal
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
 * NotaryJournal Class Doc Comment
 *
 * @category    Class
 * @package     DocuSign\eSign
 * @author      Swagger Codegen team <apihelp@docusign.com>
 * @license     The DocuSign PHP Client SDK is licensed under the MIT License.
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class NotaryJournal implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'notaryJournal';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'created_date' => '?string',
        'document_name' => '?string',
        'jurisdiction' => '\DocuSign\eSign\Model\Jurisdiction',
        'notary_journal_id' => '?string',
        'notary_journal_meta_data' => '\DocuSign\eSign\Model\NotaryJournalMetaData',
        'signer_name' => '?string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'created_date' => null,
        'document_name' => null,
        'jurisdiction' => null,
        'notary_journal_id' => null,
        'notary_journal_meta_data' => null,
        'signer_name' => null
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
        'created_date' => 'createdDate',
        'document_name' => 'documentName',
        'jurisdiction' => 'jurisdiction',
        'notary_journal_id' => 'notaryJournalId',
        'notary_journal_meta_data' => 'notaryJournalMetaData',
        'signer_name' => 'signerName'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'created_date' => 'setCreatedDate',
        'document_name' => 'setDocumentName',
        'jurisdiction' => 'setJurisdiction',
        'notary_journal_id' => 'setNotaryJournalId',
        'notary_journal_meta_data' => 'setNotaryJournalMetaData',
        'signer_name' => 'setSignerName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'created_date' => 'getCreatedDate',
        'document_name' => 'getDocumentName',
        'jurisdiction' => 'getJurisdiction',
        'notary_journal_id' => 'getNotaryJournalId',
        'notary_journal_meta_data' => 'getNotaryJournalMetaData',
        'signer_name' => 'getSignerName'
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
        $this->container['created_date'] = isset($data['created_date']) ? $data['created_date'] : null;
        $this->container['document_name'] = isset($data['document_name']) ? $data['document_name'] : null;
        $this->container['jurisdiction'] = isset($data['jurisdiction']) ? $data['jurisdiction'] : null;
        $this->container['notary_journal_id'] = isset($data['notary_journal_id']) ? $data['notary_journal_id'] : null;
        $this->container['notary_journal_meta_data'] = isset($data['notary_journal_meta_data']) ? $data['notary_journal_meta_data'] : null;
        $this->container['signer_name'] = isset($data['signer_name']) ? $data['signer_name'] : null;
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
     * Gets created_date
     *
     * @return ?string
     */
    public function getCreatedDate()
    {
        return $this->container['created_date'];
    }

    /**
     * Sets created_date
     *
     * @param ?string $created_date 
     *
     * @return $this
     */
    public function setCreatedDate($created_date)
    {
        $this->container['created_date'] = $created_date;

        return $this;
    }

    /**
     * Gets document_name
     *
     * @return ?string
     */
    public function getDocumentName()
    {
        return $this->container['document_name'];
    }

    /**
     * Sets document_name
     *
     * @param ?string $document_name 
     *
     * @return $this
     */
    public function setDocumentName($document_name)
    {
        $this->container['document_name'] = $document_name;

        return $this;
    }

    /**
     * Gets jurisdiction
     *
     * @return \DocuSign\eSign\Model\Jurisdiction
     */
    public function getJurisdiction()
    {
        return $this->container['jurisdiction'];
    }

    /**
     * Sets jurisdiction
     *
     * @param \DocuSign\eSign\Model\Jurisdiction $jurisdiction The notary's jurisdiction.
     *
     * @return $this
     */
    public function setJurisdiction($jurisdiction)
    {
        $this->container['jurisdiction'] = $jurisdiction;

        return $this;
    }

    /**
     * Gets notary_journal_id
     *
     * @return ?string
     */
    public function getNotaryJournalId()
    {
        return $this->container['notary_journal_id'];
    }

    /**
     * Sets notary_journal_id
     *
     * @param ?string $notary_journal_id 
     *
     * @return $this
     */
    public function setNotaryJournalId($notary_journal_id)
    {
        $this->container['notary_journal_id'] = $notary_journal_id;

        return $this;
    }

    /**
     * Gets notary_journal_meta_data
     *
     * @return \DocuSign\eSign\Model\NotaryJournalMetaData
     */
    public function getNotaryJournalMetaData()
    {
        return $this->container['notary_journal_meta_data'];
    }

    /**
     * Sets notary_journal_meta_data
     *
     * @param \DocuSign\eSign\Model\NotaryJournalMetaData $notary_journal_meta_data Additional journal data such as the witness list and signature image.
     *
     * @return $this
     */
    public function setNotaryJournalMetaData($notary_journal_meta_data)
    {
        $this->container['notary_journal_meta_data'] = $notary_journal_meta_data;

        return $this;
    }

    /**
     * Gets signer_name
     *
     * @return ?string
     */
    public function getSignerName()
    {
        return $this->container['signer_name'];
    }

    /**
     * Sets signer_name
     *
     * @param ?string $signer_name 
     *
     * @return $this
     */
    public function setSignerName($signer_name)
    {
        $this->container['signer_name'] = $signer_name;

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

