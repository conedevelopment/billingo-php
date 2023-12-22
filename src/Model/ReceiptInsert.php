<?php
/**
 * ReceiptInsert
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
 * ReceiptInsert Class Doc Comment
 *
 * @category Class
 * @package  Cone\Billingo
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ReceiptInsert implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ReceiptInsert';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'vendorId' => 'string',
        'partnerId' => 'int',
        'name' => 'string',
        'emails' => 'string[]',
        'blockId' => 'int',
        'type' => '\Cone\Billingo\Model\DocumentType',
        'paymentMethod' => '\Cone\Billingo\Model\PaymentMethod',
        'currency' => '\Cone\Billingo\Model\Currency',
        'conversionRate' => 'float',
        'electronic' => 'bool',
        'items' => '\Cone\Billingo\Model\ReceiptInsertItemsInner[]'
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
        'name' => null,
        'emails' => null,
        'blockId' => null,
        'type' => null,
        'paymentMethod' => null,
        'currency' => null,
        'conversionRate' => 'float',
        'electronic' => null,
        'items' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'vendorId' => false,
        'partnerId' => false,
        'name' => false,
        'emails' => false,
        'blockId' => false,
        'type' => false,
        'paymentMethod' => false,
        'currency' => false,
        'conversionRate' => false,
        'electronic' => false,
        'items' => false
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
        'name' => 'name',
        'emails' => 'emails',
        'blockId' => 'block_id',
        'type' => 'type',
        'paymentMethod' => 'payment_method',
        'currency' => 'currency',
        'conversionRate' => 'conversion_rate',
        'electronic' => 'electronic',
        'items' => 'items'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'vendorId' => 'setVendorId',
        'partnerId' => 'setPartnerId',
        'name' => 'setName',
        'emails' => 'setEmails',
        'blockId' => 'setBlockId',
        'type' => 'setType',
        'paymentMethod' => 'setPaymentMethod',
        'currency' => 'setCurrency',
        'conversionRate' => 'setConversionRate',
        'electronic' => 'setElectronic',
        'items' => 'setItems'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'vendorId' => 'getVendorId',
        'partnerId' => 'getPartnerId',
        'name' => 'getName',
        'emails' => 'getEmails',
        'blockId' => 'getBlockId',
        'type' => 'getType',
        'paymentMethod' => 'getPaymentMethod',
        'currency' => 'getCurrency',
        'conversionRate' => 'getConversionRate',
        'electronic' => 'getElectronic',
        'items' => 'getItems'
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
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('emails', $data ?? [], null);
        $this->setIfExists('blockId', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('paymentMethod', $data ?? [], null);
        $this->setIfExists('currency', $data ?? [], null);
        $this->setIfExists('conversionRate', $data ?? [], null);
        $this->setIfExists('electronic', $data ?? [], false);
        $this->setIfExists('items', $data ?? [], null);
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

        if ($this->container['blockId'] === null) {
            $invalidProperties[] = "'blockId' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        if ($this->container['paymentMethod'] === null) {
            $invalidProperties[] = "'paymentMethod' can't be null";
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
     * @return int|null
     */
    public function getPartnerId()
    {
        return $this->container['partnerId'];
    }

    /**
     * Sets partnerId
     *
     * @param int|null $partnerId partnerId
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
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name name
     *
     * @return self
     */
    public function setName($name)
    {
        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets emails
     *
     * @return string[]|null
     */
    public function getEmails()
    {
        return $this->container['emails'];
    }

    /**
     * Sets emails
     *
     * @param string[]|null $emails emails
     *
     * @return self
     */
    public function setEmails($emails)
    {
        if (is_null($emails)) {
            throw new \InvalidArgumentException('non-nullable emails cannot be null');
        }
        $this->container['emails'] = $emails;

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
     * Gets type
     *
     * @return \Cone\Billingo\Model\DocumentType
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param \Cone\Billingo\Model\DocumentType $type type
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
     * Gets items
     *
     * @return \Cone\Billingo\Model\ReceiptInsertItemsInner[]|null
     */
    public function getItems()
    {
        return $this->container['items'];
    }

    /**
     * Sets items
     *
     * @param \Cone\Billingo\Model\ReceiptInsertItemsInner[]|null $items items
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


