<?php
/**
 * DocumentInsert
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
 * OpenAPI Generator version: 7.1.0
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
 * DocumentInsert Class Doc Comment
 *
 * @category Class
 * @package  Cone\Billingo
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class DocumentInsert implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'DocumentInsert';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'vendorId' => 'string',
        'partnerId' => 'int',
        'blockId' => 'int',
        'bankAccountId' => 'int',
        'type' => '\Cone\Billingo\Model\DocumentInsertType',
        'fulfillmentDate' => '\DateTime',
        'dueDate' => '\DateTime',
        'paymentMethod' => '\Cone\Billingo\Model\PaymentMethod',
        'language' => '\Cone\Billingo\Model\DocumentLanguage',
        'currency' => '\Cone\Billingo\Model\Currency',
        'conversionRate' => 'float',
        'electronic' => 'bool',
        'paid' => 'bool',
        'items' => '\Cone\Billingo\Model\DocumentInsertItemsInner[]',
        'comment' => 'string',
        'settings' => '\Cone\Billingo\Model\DocumentSettings',
        'advanceInvoice' => 'int[]',
        'discount' => '\Cone\Billingo\Model\Discount',
        'instantPayment' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'vendorId' => null,
        'partnerId' => null,
        'blockId' => null,
        'bankAccountId' => null,
        'type' => null,
        'fulfillmentDate' => 'date',
        'dueDate' => 'date',
        'paymentMethod' => null,
        'language' => null,
        'currency' => null,
        'conversionRate' => 'float',
        'electronic' => null,
        'paid' => null,
        'items' => null,
        'comment' => null,
        'settings' => null,
        'advanceInvoice' => null,
        'discount' => null,
        'instantPayment' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'vendorId' => false,
		'partnerId' => false,
		'blockId' => false,
		'bankAccountId' => false,
		'type' => false,
		'fulfillmentDate' => false,
		'dueDate' => false,
		'paymentMethod' => false,
		'language' => false,
		'currency' => false,
		'conversionRate' => false,
		'electronic' => false,
		'paid' => false,
		'items' => false,
		'comment' => false,
		'settings' => false,
		'advanceInvoice' => false,
		'discount' => false,
		'instantPayment' => false
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
        'vendorId' => 'vendor_id',
        'partnerId' => 'partner_id',
        'blockId' => 'block_id',
        'bankAccountId' => 'bank_account_id',
        'type' => 'type',
        'fulfillmentDate' => 'fulfillment_date',
        'dueDate' => 'due_date',
        'paymentMethod' => 'payment_method',
        'language' => 'language',
        'currency' => 'currency',
        'conversionRate' => 'conversion_rate',
        'electronic' => 'electronic',
        'paid' => 'paid',
        'items' => 'items',
        'comment' => 'comment',
        'settings' => 'settings',
        'advanceInvoice' => 'advance_invoice',
        'discount' => 'discount',
        'instantPayment' => 'instant_payment'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'vendorId' => 'setVendorId',
        'partnerId' => 'setPartnerId',
        'blockId' => 'setBlockId',
        'bankAccountId' => 'setBankAccountId',
        'type' => 'setType',
        'fulfillmentDate' => 'setFulfillmentDate',
        'dueDate' => 'setDueDate',
        'paymentMethod' => 'setPaymentMethod',
        'language' => 'setLanguage',
        'currency' => 'setCurrency',
        'conversionRate' => 'setConversionRate',
        'electronic' => 'setElectronic',
        'paid' => 'setPaid',
        'items' => 'setItems',
        'comment' => 'setComment',
        'settings' => 'setSettings',
        'advanceInvoice' => 'setAdvanceInvoice',
        'discount' => 'setDiscount',
        'instantPayment' => 'setInstantPayment'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'vendorId' => 'getVendorId',
        'partnerId' => 'getPartnerId',
        'blockId' => 'getBlockId',
        'bankAccountId' => 'getBankAccountId',
        'type' => 'getType',
        'fulfillmentDate' => 'getFulfillmentDate',
        'dueDate' => 'getDueDate',
        'paymentMethod' => 'getPaymentMethod',
        'language' => 'getLanguage',
        'currency' => 'getCurrency',
        'conversionRate' => 'getConversionRate',
        'electronic' => 'getElectronic',
        'paid' => 'getPaid',
        'items' => 'getItems',
        'comment' => 'getComment',
        'settings' => 'getSettings',
        'advanceInvoice' => 'getAdvanceInvoice',
        'discount' => 'getDiscount',
        'instantPayment' => 'getInstantPayment'
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
        $this->setIfExists('vendorId', $data ?? [], null);
        $this->setIfExists('partnerId', $data ?? [], null);
        $this->setIfExists('blockId', $data ?? [], null);
        $this->setIfExists('bankAccountId', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('fulfillmentDate', $data ?? [], null);
        $this->setIfExists('dueDate', $data ?? [], null);
        $this->setIfExists('paymentMethod', $data ?? [], null);
        $this->setIfExists('language', $data ?? [], null);
        $this->setIfExists('currency', $data ?? [], null);
        $this->setIfExists('conversionRate', $data ?? [], null);
        $this->setIfExists('electronic', $data ?? [], false);
        $this->setIfExists('paid', $data ?? [], false);
        $this->setIfExists('items', $data ?? [], null);
        $this->setIfExists('comment', $data ?? [], null);
        $this->setIfExists('settings', $data ?? [], null);
        $this->setIfExists('advanceInvoice', $data ?? [], null);
        $this->setIfExists('discount', $data ?? [], null);
        $this->setIfExists('instantPayment', $data ?? [], null);
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

        if ($this->container['partnerId'] === null) {
            $invalidProperties[] = "'partnerId' can't be null";
        }
        if ($this->container['blockId'] === null) {
            $invalidProperties[] = "'blockId' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        if ($this->container['fulfillmentDate'] === null) {
            $invalidProperties[] = "'fulfillmentDate' can't be null";
        }
        if ($this->container['dueDate'] === null) {
            $invalidProperties[] = "'dueDate' can't be null";
        }
        if ($this->container['paymentMethod'] === null) {
            $invalidProperties[] = "'paymentMethod' can't be null";
        }
        if ($this->container['language'] === null) {
            $invalidProperties[] = "'language' can't be null";
        }
        if ($this->container['currency'] === null) {
            $invalidProperties[] = "'currency' can't be null";
        }
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
     * Gets vendorId
     *
     * @return string|null
     */
    public function getVendorId()
    {
        return $this->container['vendorId'];
    }

    /**
     * Sets vendorId
     *
     * @param string|null $vendorId vendorId
     *
     * @return self
     */
    public function setVendorId($vendorId)
    {
        if (is_null($vendorId)) {
            throw new \InvalidArgumentException('non-nullable vendorId cannot be null');
        }
        $this->container['vendorId'] = $vendorId;

        return $this;
    }

    /**
     * Gets partnerId
     *
     * @return int
     */
    public function getPartnerId()
    {
        return $this->container['partnerId'];
    }

    /**
     * Sets partnerId
     *
     * @param int $partnerId partnerId
     *
     * @return self
     */
    public function setPartnerId($partnerId)
    {
        if (is_null($partnerId)) {
            throw new \InvalidArgumentException('non-nullable partnerId cannot be null');
        }
        $this->container['partnerId'] = $partnerId;

        return $this;
    }

    /**
     * Gets blockId
     *
     * @return int
     */
    public function getBlockId()
    {
        return $this->container['blockId'];
    }

    /**
     * Sets blockId
     *
     * @param int $blockId blockId
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
     * Gets bankAccountId
     *
     * @return int|null
     */
    public function getBankAccountId()
    {
        return $this->container['bankAccountId'];
    }

    /**
     * Sets bankAccountId
     *
     * @param int|null $bankAccountId bankAccountId
     *
     * @return self
     */
    public function setBankAccountId($bankAccountId)
    {
        if (is_null($bankAccountId)) {
            throw new \InvalidArgumentException('non-nullable bankAccountId cannot be null');
        }
        $this->container['bankAccountId'] = $bankAccountId;

        return $this;
    }

    /**
     * Gets type
     *
     * @return \Cone\Billingo\Model\DocumentInsertType
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param \Cone\Billingo\Model\DocumentInsertType $type type
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
     * Gets fulfillmentDate
     *
     * @return \DateTime
     */
    public function getFulfillmentDate()
    {
        return $this->container['fulfillmentDate'];
    }

    /**
     * Sets fulfillmentDate
     *
     * @param \DateTime $fulfillmentDate fulfillmentDate
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
     * @return \DateTime
     */
    public function getDueDate()
    {
        return $this->container['dueDate'];
    }

    /**
     * Sets dueDate
     *
     * @param \DateTime $dueDate dueDate
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
     * Gets paymentMethod
     *
     * @return \Cone\Billingo\Model\PaymentMethod
     */
    public function getPaymentMethod()
    {
        return $this->container['paymentMethod'];
    }

    /**
     * Sets paymentMethod
     *
     * @param \Cone\Billingo\Model\PaymentMethod $paymentMethod paymentMethod
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
     * Gets language
     *
     * @return \Cone\Billingo\Model\DocumentLanguage
     */
    public function getLanguage()
    {
        return $this->container['language'];
    }

    /**
     * Sets language
     *
     * @param \Cone\Billingo\Model\DocumentLanguage $language language
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
     * Gets currency
     *
     * @return \Cone\Billingo\Model\Currency
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param \Cone\Billingo\Model\Currency $currency currency
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
     * Gets paid
     *
     * @return bool|null
     */
    public function getPaid()
    {
        return $this->container['paid'];
    }

    /**
     * Sets paid
     *
     * @param bool|null $paid paid
     *
     * @return self
     */
    public function setPaid($paid)
    {
        if (is_null($paid)) {
            throw new \InvalidArgumentException('non-nullable paid cannot be null');
        }
        $this->container['paid'] = $paid;

        return $this;
    }

    /**
     * Gets items
     *
     * @return \Cone\Billingo\Model\DocumentInsertItemsInner[]|null
     */
    public function getItems()
    {
        return $this->container['items'];
    }

    /**
     * Sets items
     *
     * @param \Cone\Billingo\Model\DocumentInsertItemsInner[]|null $items items
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
     * Gets advanceInvoice
     *
     * @return int[]|null
     */
    public function getAdvanceInvoice()
    {
        return $this->container['advanceInvoice'];
    }

    /**
     * Sets advanceInvoice
     *
     * @param int[]|null $advanceInvoice advanceInvoice
     *
     * @return self
     */
    public function setAdvanceInvoice($advanceInvoice)
    {
        if (is_null($advanceInvoice)) {
            throw new \InvalidArgumentException('non-nullable advanceInvoice cannot be null');
        }
        $this->container['advanceInvoice'] = $advanceInvoice;

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
     * Gets instantPayment
     *
     * @return bool|null
     */
    public function getInstantPayment()
    {
        return $this->container['instantPayment'];
    }

    /**
     * Sets instantPayment
     *
     * @param bool|null $instantPayment instantPayment
     *
     * @return self
     */
    public function setInstantPayment($instantPayment)
    {
        if (is_null($instantPayment)) {
            throw new \InvalidArgumentException('non-nullable instantPayment cannot be null');
        }
        $this->container['instantPayment'] = $instantPayment;

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

