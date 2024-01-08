<?php
/**
 * Document
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Cone\Billingo
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Billingo API v3
 *
 * This is a Billingo API v3 documentation. Our API based on REST software architectural style. API has resource-oriented URLs, accepts JSON-encoded request bodies and returns JSON-encoded responses. To use this API you have to generate a new API key on our [site](https://app.billingo.hu/api-key). After that, you can test your API key on this page.
 *
 * The version of the OpenAPI document: 3.0.14
 * Contact: hello@billingo.hu
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 7.2.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Cone\Billingo\Model;

use \ArrayAccess;
use \Cone\Billingo\ObjectSerializer;

/**
 * Document Class Doc Comment
 *
 * @category Class
 * @description Document object representing your invoice. NOTE: partner property is deprecated. Please use document_partner instead.
 * @package  Cone\Billingo
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Document implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Document';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'invoiceNumber' => 'string',
        'type' => '\Cone\Billingo\Model\DocumentType',
        'cancelled' => 'bool',
        'blockId' => 'int',
        'paymentStatus' => '\Cone\Billingo\Model\PaymentStatus',
        'paymentMethod' => '\Cone\Billingo\Model\PaymentMethod',
        'grossTotal' => 'float',
        'currency' => '\Cone\Billingo\Model\Currency',
        'conversionRate' => 'float',
        'invoiceDate' => '\DateTime',
        'fulfillmentDate' => '\DateTime',
        'dueDate' => '\DateTime',
        'paidDate' => '\DateTime',
        'organization' => '\Cone\Billingo\Model\DocumentOrganization',
        'partner' => '\Cone\Billingo\Model\Partner',
        'documentPartner' => '\Cone\Billingo\Model\DocumentPartner',
        'electronic' => 'bool',
        'comment' => 'string',
        'tags' => 'string[]',
        'notificationStatus' => '\Cone\Billingo\Model\DocumentNotificationStatus',
        'language' => '\Cone\Billingo\Model\DocumentLanguage',
        'items' => '\Cone\Billingo\Model\DocumentItem[]',
        'summary' => '\Cone\Billingo\Model\DocumentSummary',
        'settings' => '\Cone\Billingo\Model\DocumentSettings',
        'onlineSzamlaStatus' => '\Cone\Billingo\Model\OnlineSzamlaStatusEnum',
        'relatedDocuments' => '\Cone\Billingo\Model\DocumentAncestor[]',
        'discount' => '\Cone\Billingo\Model\Discount',
        'correctionType' => '\Cone\Billingo\Model\CorrectionType'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => null,
        'invoiceNumber' => null,
        'type' => null,
        'cancelled' => null,
        'blockId' => null,
        'paymentStatus' => null,
        'paymentMethod' => null,
        'grossTotal' => 'float',
        'currency' => null,
        'conversionRate' => 'float',
        'invoiceDate' => 'date',
        'fulfillmentDate' => 'date',
        'dueDate' => 'date',
        'paidDate' => 'date',
        'organization' => null,
        'partner' => null,
        'documentPartner' => null,
        'electronic' => null,
        'comment' => null,
        'tags' => null,
        'notificationStatus' => null,
        'language' => null,
        'items' => null,
        'summary' => null,
        'settings' => null,
        'onlineSzamlaStatus' => null,
        'relatedDocuments' => null,
        'discount' => null,
        'correctionType' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
        'invoiceNumber' => false,
        'type' => false,
        'cancelled' => false,
        'blockId' => false,
        'paymentStatus' => false,
        'paymentMethod' => false,
        'grossTotal' => false,
        'currency' => false,
        'conversionRate' => false,
        'invoiceDate' => false,
        'fulfillmentDate' => false,
        'dueDate' => false,
        'paidDate' => false,
        'organization' => false,
        'partner' => false,
        'documentPartner' => false,
        'electronic' => false,
        'comment' => false,
        'tags' => false,
        'notificationStatus' => false,
        'language' => false,
        'items' => false,
        'summary' => false,
        'settings' => false,
        'onlineSzamlaStatus' => false,
        'relatedDocuments' => false,
        'discount' => false,
        'correctionType' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
        'invoiceNumber' => 'invoice_number',
        'type' => 'type',
        'cancelled' => 'cancelled',
        'blockId' => 'block_id',
        'paymentStatus' => 'payment_status',
        'paymentMethod' => 'payment_method',
        'grossTotal' => 'gross_total',
        'currency' => 'currency',
        'conversionRate' => 'conversion_rate',
        'invoiceDate' => 'invoice_date',
        'fulfillmentDate' => 'fulfillment_date',
        'dueDate' => 'due_date',
        'paidDate' => 'paid_date',
        'organization' => 'organization',
        'partner' => 'partner',
        'documentPartner' => 'document_partner',
        'electronic' => 'electronic',
        'comment' => 'comment',
        'tags' => 'tags',
        'notificationStatus' => 'notification_status',
        'language' => 'language',
        'items' => 'items',
        'summary' => 'summary',
        'settings' => 'settings',
        'onlineSzamlaStatus' => 'online_szamla_status',
        'relatedDocuments' => 'related_documents',
        'discount' => 'discount',
        'correctionType' => 'correction_type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'invoiceNumber' => 'setInvoiceNumber',
        'type' => 'setType',
        'cancelled' => 'setCancelled',
        'blockId' => 'setBlockId',
        'paymentStatus' => 'setPaymentStatus',
        'paymentMethod' => 'setPaymentMethod',
        'grossTotal' => 'setGrossTotal',
        'currency' => 'setCurrency',
        'conversionRate' => 'setConversionRate',
        'invoiceDate' => 'setInvoiceDate',
        'fulfillmentDate' => 'setFulfillmentDate',
        'dueDate' => 'setDueDate',
        'paidDate' => 'setPaidDate',
        'organization' => 'setOrganization',
        'partner' => 'setPartner',
        'documentPartner' => 'setDocumentPartner',
        'electronic' => 'setElectronic',
        'comment' => 'setComment',
        'tags' => 'setTags',
        'notificationStatus' => 'setNotificationStatus',
        'language' => 'setLanguage',
        'items' => 'setItems',
        'summary' => 'setSummary',
        'settings' => 'setSettings',
        'onlineSzamlaStatus' => 'setOnlineSzamlaStatus',
        'relatedDocuments' => 'setRelatedDocuments',
        'discount' => 'setDiscount',
        'correctionType' => 'setCorrectionType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'invoiceNumber' => 'getInvoiceNumber',
        'type' => 'getType',
        'cancelled' => 'getCancelled',
        'blockId' => 'getBlockId',
        'paymentStatus' => 'getPaymentStatus',
        'paymentMethod' => 'getPaymentMethod',
        'grossTotal' => 'getGrossTotal',
        'currency' => 'getCurrency',
        'conversionRate' => 'getConversionRate',
        'invoiceDate' => 'getInvoiceDate',
        'fulfillmentDate' => 'getFulfillmentDate',
        'dueDate' => 'getDueDate',
        'paidDate' => 'getPaidDate',
        'organization' => 'getOrganization',
        'partner' => 'getPartner',
        'documentPartner' => 'getDocumentPartner',
        'electronic' => 'getElectronic',
        'comment' => 'getComment',
        'tags' => 'getTags',
        'notificationStatus' => 'getNotificationStatus',
        'language' => 'getLanguage',
        'items' => 'getItems',
        'summary' => 'getSummary',
        'settings' => 'getSettings',
        'onlineSzamlaStatus' => 'getOnlineSzamlaStatus',
        'relatedDocuments' => 'getRelatedDocuments',
        'discount' => 'getDiscount',
        'correctionType' => 'getCorrectionType'
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
        return self::$openAPIModelName;
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
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('invoiceNumber', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('cancelled', $data ?? [], null);
        $this->setIfExists('blockId', $data ?? [], null);
        $this->setIfExists('paymentStatus', $data ?? [], null);
        $this->setIfExists('paymentMethod', $data ?? [], null);
        $this->setIfExists('grossTotal', $data ?? [], null);
        $this->setIfExists('currency', $data ?? [], null);
        $this->setIfExists('conversionRate', $data ?? [], null);
        $this->setIfExists('invoiceDate', $data ?? [], null);
        $this->setIfExists('fulfillmentDate', $data ?? [], null);
        $this->setIfExists('dueDate', $data ?? [], null);
        $this->setIfExists('paidDate', $data ?? [], null);
        $this->setIfExists('organization', $data ?? [], null);
        $this->setIfExists('partner', $data ?? [], null);
        $this->setIfExists('documentPartner', $data ?? [], null);
        $this->setIfExists('electronic', $data ?? [], null);
        $this->setIfExists('comment', $data ?? [], null);
        $this->setIfExists('tags', $data ?? [], null);
        $this->setIfExists('notificationStatus', $data ?? [], null);
        $this->setIfExists('language', $data ?? [], null);
        $this->setIfExists('items', $data ?? [], null);
        $this->setIfExists('summary', $data ?? [], null);
        $this->setIfExists('settings', $data ?? [], null);
        $this->setIfExists('onlineSzamlaStatus', $data ?? [], null);
        $this->setIfExists('relatedDocuments', $data ?? [], null);
        $this->setIfExists('discount', $data ?? [], null);
        $this->setIfExists('correctionType', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
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
     * Gets id
     *
     * @return int|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int|null $id The document's unique identifier.
     *
     * @return self
     */
    public function setId($id)
    {
        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets invoiceNumber
     *
     * @return string|null
     */
    public function getInvoiceNumber()
    {
        return $this->container['invoiceNumber'];
    }

    /**
     * Sets invoiceNumber
     *
     * @param string|null $invoiceNumber The document's invoice number.
     *
     * @return self
     */
    public function setInvoiceNumber($invoiceNumber)
    {
        if (is_null($invoiceNumber)) {
            throw new \InvalidArgumentException('non-nullable invoiceNumber cannot be null');
        }
        $this->container['invoiceNumber'] = $invoiceNumber;

        return $this;
    }

    /**
     * Gets type
     *
     * @return \Cone\Billingo\Model\DocumentType|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param \Cone\Billingo\Model\DocumentType|null $type type
     *
     * @return self
     */
    public function setType($type)
    {
        if (is_null($type)) {
            throw new \InvalidArgumentException('non-nullable type cannot be null');
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets cancelled
     *
     * @return bool|null
     */
    public function getCancelled()
    {
        return $this->container['cancelled'];
    }

    /**
     * Sets cancelled
     *
     * @param bool|null $cancelled cancelled
     *
     * @return self
     */
    public function setCancelled($cancelled)
    {
        if (is_null($cancelled)) {
            throw new \InvalidArgumentException('non-nullable cancelled cannot be null');
        }
        $this->container['cancelled'] = $cancelled;

        return $this;
    }

    /**
     * Gets blockId
     *
     * @return int|null
     */
    public function getBlockId()
    {
        return $this->container['blockId'];
    }

    /**
     * Sets blockId
     *
     * @param int|null $blockId DocumentBlock's identifier.
     *
     * @return self
     */
    public function setBlockId($blockId)
    {
        if (is_null($blockId)) {
            throw new \InvalidArgumentException('non-nullable blockId cannot be null');
        }
        $this->container['blockId'] = $blockId;

        return $this;
    }

    /**
     * Gets paymentStatus
     *
     * @return \Cone\Billingo\Model\PaymentStatus|null
     */
    public function getPaymentStatus()
    {
        return $this->container['paymentStatus'];
    }

    /**
     * Sets paymentStatus
     *
     * @param \Cone\Billingo\Model\PaymentStatus|null $paymentStatus paymentStatus
     *
     * @return self
     */
    public function setPaymentStatus($paymentStatus)
    {
        if (is_null($paymentStatus)) {
            throw new \InvalidArgumentException('non-nullable paymentStatus cannot be null');
        }
        $this->container['paymentStatus'] = $paymentStatus;

        return $this;
    }

    /**
     * Gets paymentMethod
     *
     * @return \Cone\Billingo\Model\PaymentMethod|null
     */
    public function getPaymentMethod()
    {
        return $this->container['paymentMethod'];
    }

    /**
     * Sets paymentMethod
     *
     * @param \Cone\Billingo\Model\PaymentMethod|null $paymentMethod paymentMethod
     *
     * @return self
     */
    public function setPaymentMethod($paymentMethod)
    {
        if (is_null($paymentMethod)) {
            throw new \InvalidArgumentException('non-nullable paymentMethod cannot be null');
        }
        $this->container['paymentMethod'] = $paymentMethod;

        return $this;
    }

    /**
     * Gets grossTotal
     *
     * @return float|null
     */
    public function getGrossTotal()
    {
        return $this->container['grossTotal'];
    }

    /**
     * Sets grossTotal
     *
     * @param float|null $grossTotal The document's gross total price.
     *
     * @return self
     */
    public function setGrossTotal($grossTotal)
    {
        if (is_null($grossTotal)) {
            throw new \InvalidArgumentException('non-nullable grossTotal cannot be null');
        }
        $this->container['grossTotal'] = $grossTotal;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return \Cone\Billingo\Model\Currency|null
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param \Cone\Billingo\Model\Currency|null $currency currency
     *
     * @return self
     */
    public function setCurrency($currency)
    {
        if (is_null($currency)) {
            throw new \InvalidArgumentException('non-nullable currency cannot be null');
        }
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets conversionRate
     *
     * @return float|null
     */
    public function getConversionRate()
    {
        return $this->container['conversionRate'];
    }

    /**
     * Sets conversionRate
     *
     * @param float|null $conversionRate conversionRate
     *
     * @return self
     */
    public function setConversionRate($conversionRate)
    {
        if (is_null($conversionRate)) {
            throw new \InvalidArgumentException('non-nullable conversionRate cannot be null');
        }
        $this->container['conversionRate'] = $conversionRate;

        return $this;
    }

    /**
     * Gets invoiceDate
     *
     * @return \DateTime|null
     */
    public function getInvoiceDate()
    {
        return $this->container['invoiceDate'];
    }

    /**
     * Sets invoiceDate
     *
     * @param \DateTime|null $invoiceDate invoiceDate
     *
     * @return self
     */
    public function setInvoiceDate($invoiceDate)
    {
        if (is_null($invoiceDate)) {
            throw new \InvalidArgumentException('non-nullable invoiceDate cannot be null');
        }
        $this->container['invoiceDate'] = $invoiceDate;

        return $this;
    }

    /**
     * Gets fulfillmentDate
     *
     * @return \DateTime|null
     */
    public function getFulfillmentDate()
    {
        return $this->container['fulfillmentDate'];
    }

    /**
     * Sets fulfillmentDate
     *
     * @param \DateTime|null $fulfillmentDate fulfillmentDate
     *
     * @return self
     */
    public function setFulfillmentDate($fulfillmentDate)
    {
        if (is_null($fulfillmentDate)) {
            throw new \InvalidArgumentException('non-nullable fulfillmentDate cannot be null');
        }
        $this->container['fulfillmentDate'] = $fulfillmentDate;

        return $this;
    }

    /**
     * Gets dueDate
     *
     * @return \DateTime|null
     */
    public function getDueDate()
    {
        return $this->container['dueDate'];
    }

    /**
     * Sets dueDate
     *
     * @param \DateTime|null $dueDate dueDate
     *
     * @return self
     */
    public function setDueDate($dueDate)
    {
        if (is_null($dueDate)) {
            throw new \InvalidArgumentException('non-nullable dueDate cannot be null');
        }
        $this->container['dueDate'] = $dueDate;

        return $this;
    }

    /**
     * Gets paidDate
     *
     * @return \DateTime|null
     */
    public function getPaidDate()
    {
        return $this->container['paidDate'];
    }

    /**
     * Sets paidDate
     *
     * @param \DateTime|null $paidDate paidDate
     *
     * @return self
     */
    public function setPaidDate($paidDate)
    {
        if (is_null($paidDate)) {
            throw new \InvalidArgumentException('non-nullable paidDate cannot be null');
        }
        $this->container['paidDate'] = $paidDate;

        return $this;
    }

    /**
     * Gets organization
     *
     * @return \Cone\Billingo\Model\DocumentOrganization|null
     */
    public function getOrganization()
    {
        return $this->container['organization'];
    }

    /**
     * Sets organization
     *
     * @param \Cone\Billingo\Model\DocumentOrganization|null $organization organization
     *
     * @return self
     */
    public function setOrganization($organization)
    {
        if (is_null($organization)) {
            throw new \InvalidArgumentException('non-nullable organization cannot be null');
        }
        $this->container['organization'] = $organization;

        return $this;
    }

    /**
     * Gets partner
     *
     * @return \Cone\Billingo\Model\Partner|null
     */
    public function getPartner()
    {
        return $this->container['partner'];
    }

    /**
     * Sets partner
     *
     * @param \Cone\Billingo\Model\Partner|null $partner partner
     *
     * @return self
     */
    public function setPartner($partner)
    {
        if (is_null($partner)) {
            throw new \InvalidArgumentException('non-nullable partner cannot be null');
        }
        $this->container['partner'] = $partner;

        return $this;
    }

    /**
     * Gets documentPartner
     *
     * @return \Cone\Billingo\Model\DocumentPartner|null
     */
    public function getDocumentPartner()
    {
        return $this->container['documentPartner'];
    }

    /**
     * Sets documentPartner
     *
     * @param \Cone\Billingo\Model\DocumentPartner|null $documentPartner documentPartner
     *
     * @return self
     */
    public function setDocumentPartner($documentPartner)
    {
        if (is_null($documentPartner)) {
            throw new \InvalidArgumentException('non-nullable documentPartner cannot be null');
        }
        $this->container['documentPartner'] = $documentPartner;

        return $this;
    }

    /**
     * Gets electronic
     *
     * @return bool|null
     */
    public function getElectronic()
    {
        return $this->container['electronic'];
    }

    /**
     * Sets electronic
     *
     * @param bool|null $electronic electronic
     *
     * @return self
     */
    public function setElectronic($electronic)
    {
        if (is_null($electronic)) {
            throw new \InvalidArgumentException('non-nullable electronic cannot be null');
        }
        $this->container['electronic'] = $electronic;

        return $this;
    }

    /**
     * Gets comment
     *
     * @return string|null
     */
    public function getComment()
    {
        return $this->container['comment'];
    }

    /**
     * Sets comment
     *
     * @param string|null $comment comment
     *
     * @return self
     */
    public function setComment($comment)
    {
        if (is_null($comment)) {
            throw new \InvalidArgumentException('non-nullable comment cannot be null');
        }
        $this->container['comment'] = $comment;

        return $this;
    }

    /**
     * Gets tags
     *
     * @return string[]|null
     */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
     * Sets tags
     *
     * @param string[]|null $tags tags
     *
     * @return self
     */
    public function setTags($tags)
    {
        if (is_null($tags)) {
            throw new \InvalidArgumentException('non-nullable tags cannot be null');
        }
        $this->container['tags'] = $tags;

        return $this;
    }

    /**
     * Gets notificationStatus
     *
     * @return \Cone\Billingo\Model\DocumentNotificationStatus|null
     */
    public function getNotificationStatus()
    {
        return $this->container['notificationStatus'];
    }

    /**
     * Sets notificationStatus
     *
     * @param \Cone\Billingo\Model\DocumentNotificationStatus|null $notificationStatus notificationStatus
     *
     * @return self
     */
    public function setNotificationStatus($notificationStatus)
    {
        if (is_null($notificationStatus)) {
            throw new \InvalidArgumentException('non-nullable notificationStatus cannot be null');
        }
        $this->container['notificationStatus'] = $notificationStatus;

        return $this;
    }

    /**
     * Gets language
     *
     * @return \Cone\Billingo\Model\DocumentLanguage|null
     */
    public function getLanguage()
    {
        return $this->container['language'];
    }

    /**
     * Sets language
     *
     * @param \Cone\Billingo\Model\DocumentLanguage|null $language language
     *
     * @return self
     */
    public function setLanguage($language)
    {
        if (is_null($language)) {
            throw new \InvalidArgumentException('non-nullable language cannot be null');
        }
        $this->container['language'] = $language;

        return $this;
    }

    /**
     * Gets items
     *
     * @return \Cone\Billingo\Model\DocumentItem[]|null
     */
    public function getItems()
    {
        return $this->container['items'];
    }

    /**
     * Sets items
     *
     * @param \Cone\Billingo\Model\DocumentItem[]|null $items items
     *
     * @return self
     */
    public function setItems($items)
    {
        if (is_null($items)) {
            throw new \InvalidArgumentException('non-nullable items cannot be null');
        }
        $this->container['items'] = $items;

        return $this;
    }

    /**
     * Gets summary
     *
     * @return \Cone\Billingo\Model\DocumentSummary|null
     */
    public function getSummary()
    {
        return $this->container['summary'];
    }

    /**
     * Sets summary
     *
     * @param \Cone\Billingo\Model\DocumentSummary|null $summary summary
     *
     * @return self
     */
    public function setSummary($summary)
    {
        if (is_null($summary)) {
            throw new \InvalidArgumentException('non-nullable summary cannot be null');
        }
        $this->container['summary'] = $summary;

        return $this;
    }

    /**
     * Gets settings
     *
     * @return \Cone\Billingo\Model\DocumentSettings|null
     */
    public function getSettings()
    {
        return $this->container['settings'];
    }

    /**
     * Sets settings
     *
     * @param \Cone\Billingo\Model\DocumentSettings|null $settings settings
     *
     * @return self
     */
    public function setSettings($settings)
    {
        if (is_null($settings)) {
            throw new \InvalidArgumentException('non-nullable settings cannot be null');
        }
        $this->container['settings'] = $settings;

        return $this;
    }

    /**
     * Gets onlineSzamlaStatus
     *
     * @return \Cone\Billingo\Model\OnlineSzamlaStatusEnum|null
     */
    public function getOnlineSzamlaStatus()
    {
        return $this->container['onlineSzamlaStatus'];
    }

    /**
     * Sets onlineSzamlaStatus
     *
     * @param \Cone\Billingo\Model\OnlineSzamlaStatusEnum|null $onlineSzamlaStatus onlineSzamlaStatus
     *
     * @return self
     */
    public function setOnlineSzamlaStatus($onlineSzamlaStatus)
    {
        if (is_null($onlineSzamlaStatus)) {
            throw new \InvalidArgumentException('non-nullable onlineSzamlaStatus cannot be null');
        }
        $this->container['onlineSzamlaStatus'] = $onlineSzamlaStatus;

        return $this;
    }

    /**
     * Gets relatedDocuments
     *
     * @return \Cone\Billingo\Model\DocumentAncestor[]|null
     */
    public function getRelatedDocuments()
    {
        return $this->container['relatedDocuments'];
    }

    /**
     * Sets relatedDocuments
     *
     * @param \Cone\Billingo\Model\DocumentAncestor[]|null $relatedDocuments relatedDocuments
     *
     * @return self
     */
    public function setRelatedDocuments($relatedDocuments)
    {
        if (is_null($relatedDocuments)) {
            throw new \InvalidArgumentException('non-nullable relatedDocuments cannot be null');
        }
        $this->container['relatedDocuments'] = $relatedDocuments;

        return $this;
    }

    /**
     * Gets discount
     *
     * @return \Cone\Billingo\Model\Discount|null
     */
    public function getDiscount()
    {
        return $this->container['discount'];
    }

    /**
     * Sets discount
     *
     * @param \Cone\Billingo\Model\Discount|null $discount discount
     *
     * @return self
     */
    public function setDiscount($discount)
    {
        if (is_null($discount)) {
            throw new \InvalidArgumentException('non-nullable discount cannot be null');
        }
        $this->container['discount'] = $discount;

        return $this;
    }

    /**
     * Gets correctionType
     *
     * @return \Cone\Billingo\Model\CorrectionType|null
     */
    public function getCorrectionType()
    {
        return $this->container['correctionType'];
    }

    /**
     * Sets correctionType
     *
     * @param \Cone\Billingo\Model\CorrectionType|null $correctionType correctionType
     *
     * @return self
     */
    public function setCorrectionType($correctionType)
    {
        if (is_null($correctionType)) {
            throw new \InvalidArgumentException('non-nullable correctionType cannot be null');
        }
        $this->container['correctionType'] = $correctionType;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


