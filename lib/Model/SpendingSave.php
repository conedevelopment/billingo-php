<?php
/**
 * SpendingSave
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
 * The version of the OpenAPI document: 3.0.15
 * Contact: hello@billingo.hu
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.6.0
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
 * SpendingSave Class Doc Comment
 *
 * @category Class
 * @package  Cone\Billingo
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class SpendingSave implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SpendingSave';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'currency' => '\Cone\Billingo\Model\Currency',
        'conversion_rate' => 'float',
        'total_gross' => 'float',
        'total_gross_huf' => 'float',
        'total_vat_amount' => 'float',
        'total_vat_amount_huf' => 'float',
        'fulfillment_date' => '\DateTime',
        'paid_at' => '\DateTime',
        'category' => '\Cone\Billingo\Model\Category',
        'comment' => 'string',
        'invoice_number' => 'string',
        'invoice_date' => '\DateTime',
        'due_date' => '\DateTime',
        'payment_method' => '\Cone\Billingo\Model\SpendingPaymentMethod',
        'partner_id' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'currency' => null,
        'conversion_rate' => 'float',
        'total_gross' => 'float',
        'total_gross_huf' => 'float',
        'total_vat_amount' => 'float',
        'total_vat_amount_huf' => 'float',
        'fulfillment_date' => 'date',
        'paid_at' => 'date',
        'category' => null,
        'comment' => null,
        'invoice_number' => null,
        'invoice_date' => 'date',
        'due_date' => 'date',
        'payment_method' => null,
        'partner_id' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'currency' => false,
		'conversion_rate' => false,
		'total_gross' => false,
		'total_gross_huf' => false,
		'total_vat_amount' => false,
		'total_vat_amount_huf' => false,
		'fulfillment_date' => false,
		'paid_at' => false,
		'category' => false,
		'comment' => false,
		'invoice_number' => false,
		'invoice_date' => false,
		'due_date' => false,
		'payment_method' => false,
		'partner_id' => false
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
        'currency' => 'currency',
        'conversion_rate' => 'conversion_rate',
        'total_gross' => 'total_gross',
        'total_gross_huf' => 'total_gross_huf',
        'total_vat_amount' => 'total_vat_amount',
        'total_vat_amount_huf' => 'total_vat_amount_huf',
        'fulfillment_date' => 'fulfillment_date',
        'paid_at' => 'paid_at',
        'category' => 'category',
        'comment' => 'comment',
        'invoice_number' => 'invoice_number',
        'invoice_date' => 'invoice_date',
        'due_date' => 'due_date',
        'payment_method' => 'payment_method',
        'partner_id' => 'partner_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'currency' => 'setCurrency',
        'conversion_rate' => 'setConversionRate',
        'total_gross' => 'setTotalGross',
        'total_gross_huf' => 'setTotalGrossHuf',
        'total_vat_amount' => 'setTotalVatAmount',
        'total_vat_amount_huf' => 'setTotalVatAmountHuf',
        'fulfillment_date' => 'setFulfillmentDate',
        'paid_at' => 'setPaidAt',
        'category' => 'setCategory',
        'comment' => 'setComment',
        'invoice_number' => 'setInvoiceNumber',
        'invoice_date' => 'setInvoiceDate',
        'due_date' => 'setDueDate',
        'payment_method' => 'setPaymentMethod',
        'partner_id' => 'setPartnerId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'currency' => 'getCurrency',
        'conversion_rate' => 'getConversionRate',
        'total_gross' => 'getTotalGross',
        'total_gross_huf' => 'getTotalGrossHuf',
        'total_vat_amount' => 'getTotalVatAmount',
        'total_vat_amount_huf' => 'getTotalVatAmountHuf',
        'fulfillment_date' => 'getFulfillmentDate',
        'paid_at' => 'getPaidAt',
        'category' => 'getCategory',
        'comment' => 'getComment',
        'invoice_number' => 'getInvoiceNumber',
        'invoice_date' => 'getInvoiceDate',
        'due_date' => 'getDueDate',
        'payment_method' => 'getPaymentMethod',
        'partner_id' => 'getPartnerId'
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
        $this->setIfExists('currency', $data ?? [], null);
        $this->setIfExists('conversion_rate', $data ?? [], null);
        $this->setIfExists('total_gross', $data ?? [], null);
        $this->setIfExists('total_gross_huf', $data ?? [], null);
        $this->setIfExists('total_vat_amount', $data ?? [], null);
        $this->setIfExists('total_vat_amount_huf', $data ?? [], null);
        $this->setIfExists('fulfillment_date', $data ?? [], null);
        $this->setIfExists('paid_at', $data ?? [], null);
        $this->setIfExists('category', $data ?? [], null);
        $this->setIfExists('comment', $data ?? [], null);
        $this->setIfExists('invoice_number', $data ?? [], null);
        $this->setIfExists('invoice_date', $data ?? [], null);
        $this->setIfExists('due_date', $data ?? [], null);
        $this->setIfExists('payment_method', $data ?? [], null);
        $this->setIfExists('partner_id', $data ?? [], null);
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

        if ($this->container['currency'] === null) {
            $invalidProperties[] = "'currency' can't be null";
        }
        if ($this->container['total_gross'] === null) {
            $invalidProperties[] = "'total_gross' can't be null";
        }
        if ($this->container['total_gross_huf'] === null) {
            $invalidProperties[] = "'total_gross_huf' can't be null";
        }
        if ($this->container['total_vat_amount'] === null) {
            $invalidProperties[] = "'total_vat_amount' can't be null";
        }
        if ($this->container['total_vat_amount_huf'] === null) {
            $invalidProperties[] = "'total_vat_amount_huf' can't be null";
        }
        if ($this->container['fulfillment_date'] === null) {
            $invalidProperties[] = "'fulfillment_date' can't be null";
        }
        if ($this->container['category'] === null) {
            $invalidProperties[] = "'category' can't be null";
        }
        if ($this->container['payment_method'] === null) {
            $invalidProperties[] = "'payment_method' can't be null";
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
     * Gets conversion_rate
     *
     * @return float|null
     */
    public function getConversionRate()
    {
        return $this->container['conversion_rate'];
    }

    /**
     * Sets conversion_rate
     *
     * @param float|null $conversion_rate conversion_rate
     *
     * @return self
     */
    public function setConversionRate($conversion_rate)
    {
        if (is_null($conversion_rate)) {
            throw new \InvalidArgumentException('non-nullable conversion_rate cannot be null');
        }
        $this->container['conversion_rate'] = $conversion_rate;

        return $this;
    }

    /**
     * Gets total_gross
     *
     * @return float
     */
    public function getTotalGross()
    {
        return $this->container['total_gross'];
    }

    /**
     * Sets total_gross
     *
     * @param float $total_gross total_gross
     *
     * @return self
     */
    public function setTotalGross($total_gross)
    {
        if (is_null($total_gross)) {
            throw new \InvalidArgumentException('non-nullable total_gross cannot be null');
        }
        $this->container['total_gross'] = $total_gross;

        return $this;
    }

    /**
     * Gets total_gross_huf
     *
     * @return float
     */
    public function getTotalGrossHuf()
    {
        return $this->container['total_gross_huf'];
    }

    /**
     * Sets total_gross_huf
     *
     * @param float $total_gross_huf total_gross_huf
     *
     * @return self
     */
    public function setTotalGrossHuf($total_gross_huf)
    {
        if (is_null($total_gross_huf)) {
            throw new \InvalidArgumentException('non-nullable total_gross_huf cannot be null');
        }
        $this->container['total_gross_huf'] = $total_gross_huf;

        return $this;
    }

    /**
     * Gets total_vat_amount
     *
     * @return float
     */
    public function getTotalVatAmount()
    {
        return $this->container['total_vat_amount'];
    }

    /**
     * Sets total_vat_amount
     *
     * @param float $total_vat_amount total_vat_amount
     *
     * @return self
     */
    public function setTotalVatAmount($total_vat_amount)
    {
        if (is_null($total_vat_amount)) {
            throw new \InvalidArgumentException('non-nullable total_vat_amount cannot be null');
        }
        $this->container['total_vat_amount'] = $total_vat_amount;

        return $this;
    }

    /**
     * Gets total_vat_amount_huf
     *
     * @return float
     */
    public function getTotalVatAmountHuf()
    {
        return $this->container['total_vat_amount_huf'];
    }

    /**
     * Sets total_vat_amount_huf
     *
     * @param float $total_vat_amount_huf total_vat_amount_huf
     *
     * @return self
     */
    public function setTotalVatAmountHuf($total_vat_amount_huf)
    {
        if (is_null($total_vat_amount_huf)) {
            throw new \InvalidArgumentException('non-nullable total_vat_amount_huf cannot be null');
        }
        $this->container['total_vat_amount_huf'] = $total_vat_amount_huf;

        return $this;
    }

    /**
     * Gets fulfillment_date
     *
     * @return \DateTime
     */
    public function getFulfillmentDate()
    {
        return $this->container['fulfillment_date'];
    }

    /**
     * Sets fulfillment_date
     *
     * @param \DateTime $fulfillment_date fulfillment_date
     *
     * @return self
     */
    public function setFulfillmentDate($fulfillment_date)
    {
        if (is_null($fulfillment_date)) {
            throw new \InvalidArgumentException('non-nullable fulfillment_date cannot be null');
        }
        $this->container['fulfillment_date'] = $fulfillment_date;

        return $this;
    }

    /**
     * Gets paid_at
     *
     * @return \DateTime|null
     */
    public function getPaidAt()
    {
        return $this->container['paid_at'];
    }

    /**
     * Sets paid_at
     *
     * @param \DateTime|null $paid_at paid_at
     *
     * @return self
     */
    public function setPaidAt($paid_at)
    {
        if (is_null($paid_at)) {
            throw new \InvalidArgumentException('non-nullable paid_at cannot be null');
        }
        $this->container['paid_at'] = $paid_at;

        return $this;
    }

    /**
     * Gets category
     *
     * @return \Cone\Billingo\Model\Category
     */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
     * Sets category
     *
     * @param \Cone\Billingo\Model\Category $category category
     *
     * @return self
     */
    public function setCategory($category)
    {
        if (is_null($category)) {
            throw new \InvalidArgumentException('non-nullable category cannot be null');
        }
        $this->container['category'] = $category;

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
     * Gets invoice_number
     *
     * @return string|null
     */
    public function getInvoiceNumber()
    {
        return $this->container['invoice_number'];
    }

    /**
     * Sets invoice_number
     *
     * @param string|null $invoice_number invoice_number
     *
     * @return self
     */
    public function setInvoiceNumber($invoice_number)
    {
        if (is_null($invoice_number)) {
            throw new \InvalidArgumentException('non-nullable invoice_number cannot be null');
        }
        $this->container['invoice_number'] = $invoice_number;

        return $this;
    }

    /**
     * Gets invoice_date
     *
     * @return \DateTime|null
     */
    public function getInvoiceDate()
    {
        return $this->container['invoice_date'];
    }

    /**
     * Sets invoice_date
     *
     * @param \DateTime|null $invoice_date invoice_date
     *
     * @return self
     */
    public function setInvoiceDate($invoice_date)
    {
        if (is_null($invoice_date)) {
            throw new \InvalidArgumentException('non-nullable invoice_date cannot be null');
        }
        $this->container['invoice_date'] = $invoice_date;

        return $this;
    }

    /**
     * Gets due_date
     *
     * @return \DateTime|null
     */
    public function getDueDate()
    {
        return $this->container['due_date'];
    }

    /**
     * Sets due_date
     *
     * @param \DateTime|null $due_date due_date
     *
     * @return self
     */
    public function setDueDate($due_date)
    {
        if (is_null($due_date)) {
            throw new \InvalidArgumentException('non-nullable due_date cannot be null');
        }
        $this->container['due_date'] = $due_date;

        return $this;
    }

    /**
     * Gets payment_method
     *
     * @return \Cone\Billingo\Model\SpendingPaymentMethod
     */
    public function getPaymentMethod()
    {
        return $this->container['payment_method'];
    }

    /**
     * Sets payment_method
     *
     * @param \Cone\Billingo\Model\SpendingPaymentMethod $payment_method payment_method
     *
     * @return self
     */
    public function setPaymentMethod($payment_method)
    {
        if (is_null($payment_method)) {
            throw new \InvalidArgumentException('non-nullable payment_method cannot be null');
        }
        $this->container['payment_method'] = $payment_method;

        return $this;
    }

    /**
     * Gets partner_id
     *
     * @return int|null
     */
    public function getPartnerId()
    {
        return $this->container['partner_id'];
    }

    /**
     * Sets partner_id
     *
     * @param int|null $partner_id partner_id
     *
     * @return self
     */
    public function setPartnerId($partner_id)
    {
        if (is_null($partner_id)) {
            throw new \InvalidArgumentException('non-nullable partner_id cannot be null');
        }
        $this->container['partner_id'] = $partner_id;

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


