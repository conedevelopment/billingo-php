<?php
/**
 * Spending
 *
 * PHP version 7.4
 *
 * @category Class
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
 * Generator version: 7.4.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Cone\Billingo\Model;

use ArrayAccess;
use Cone\Billingo\ObjectSerializer;

/**
 * Spending Class Doc Comment
 *
 * @category Class
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Spending implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'Spending';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'id' => 'int',
        'organizationId' => 'int',
        'category' => '\Cone\Billingo\Model\Category',
        'paidAt' => '\DateTime',
        'fulfillmentDate' => '\DateTime',
        'partner' => '\Cone\Billingo\Model\SpendingPartner',
        'invoiceNumber' => 'string',
        'currency' => '\Cone\Billingo\Model\Currency',
        'conversionRate' => 'float',
        'totalGross' => 'float',
        'totalGrossLocal' => 'float',
        'totalVatAmount' => 'float',
        'totalVatAmountLocal' => 'float',
        'invoiceDate' => '\DateTime',
        'dueDate' => '\DateTime',
        'paymentMethod' => '\Cone\Billingo\Model\SpendingPaymentMethod',
        'comment' => 'string',
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
        'organizationId' => null,
        'category' => null,
        'paidAt' => 'date',
        'fulfillmentDate' => 'date',
        'partner' => null,
        'invoiceNumber' => null,
        'currency' => null,
        'conversionRate' => 'float',
        'totalGross' => 'float',
        'totalGrossLocal' => 'float',
        'totalVatAmount' => 'float',
        'totalVatAmountLocal' => 'float',
        'invoiceDate' => 'date',
        'dueDate' => 'date',
        'paymentMethod' => null,
        'comment' => null,
    ];

    /**
     * Array of nullable properties. Used for (de)serialization
     *
     * @var bool[]
     */
    protected static array $openAPINullables = [
        'id' => false,
        'organizationId' => false,
        'category' => false,
        'paidAt' => true,
        'fulfillmentDate' => false,
        'partner' => false,
        'invoiceNumber' => false,
        'currency' => false,
        'conversionRate' => false,
        'totalGross' => false,
        'totalGrossLocal' => false,
        'totalVatAmount' => false,
        'totalVatAmountLocal' => false,
        'invoiceDate' => false,
        'dueDate' => false,
        'paymentMethod' => false,
        'comment' => true,
    ];

    /**
     * If a nullable field gets set to null, insert it here
     *
     * @var bool[]
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
     * @return bool[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param bool[] $openAPINullablesSetToNull
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
        'organizationId' => 'organization_id',
        'category' => 'category',
        'paidAt' => 'paid_at',
        'fulfillmentDate' => 'fulfillment_date',
        'partner' => 'partner',
        'invoiceNumber' => 'invoice_number',
        'currency' => 'currency',
        'conversionRate' => 'conversion_rate',
        'totalGross' => 'total_gross',
        'totalGrossLocal' => 'total_gross_local',
        'totalVatAmount' => 'total_vat_amount',
        'totalVatAmountLocal' => 'total_vat_amount_local',
        'invoiceDate' => 'invoice_date',
        'dueDate' => 'due_date',
        'paymentMethod' => 'payment_method',
        'comment' => 'comment',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'organizationId' => 'setOrganizationId',
        'category' => 'setCategory',
        'paidAt' => 'setPaidAt',
        'fulfillmentDate' => 'setFulfillmentDate',
        'partner' => 'setPartner',
        'invoiceNumber' => 'setInvoiceNumber',
        'currency' => 'setCurrency',
        'conversionRate' => 'setConversionRate',
        'totalGross' => 'setTotalGross',
        'totalGrossLocal' => 'setTotalGrossLocal',
        'totalVatAmount' => 'setTotalVatAmount',
        'totalVatAmountLocal' => 'setTotalVatAmountLocal',
        'invoiceDate' => 'setInvoiceDate',
        'dueDate' => 'setDueDate',
        'paymentMethod' => 'setPaymentMethod',
        'comment' => 'setComment',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'organizationId' => 'getOrganizationId',
        'category' => 'getCategory',
        'paidAt' => 'getPaidAt',
        'fulfillmentDate' => 'getFulfillmentDate',
        'partner' => 'getPartner',
        'invoiceNumber' => 'getInvoiceNumber',
        'currency' => 'getCurrency',
        'conversionRate' => 'getConversionRate',
        'totalGross' => 'getTotalGross',
        'totalGrossLocal' => 'getTotalGrossLocal',
        'totalVatAmount' => 'getTotalVatAmount',
        'totalVatAmountLocal' => 'getTotalVatAmountLocal',
        'invoiceDate' => 'getInvoiceDate',
        'dueDate' => 'getDueDate',
        'paymentMethod' => 'getPaymentMethod',
        'comment' => 'getComment',
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
        $this->setIfExists('organizationId', $data ?? [], null);
        $this->setIfExists('category', $data ?? [], null);
        $this->setIfExists('paidAt', $data ?? [], null);
        $this->setIfExists('fulfillmentDate', $data ?? [], null);
        $this->setIfExists('partner', $data ?? [], null);
        $this->setIfExists('invoiceNumber', $data ?? [], null);
        $this->setIfExists('currency', $data ?? [], null);
        $this->setIfExists('conversionRate', $data ?? [], null);
        $this->setIfExists('totalGross', $data ?? [], null);
        $this->setIfExists('totalGrossLocal', $data ?? [], null);
        $this->setIfExists('totalVatAmount', $data ?? [], null);
        $this->setIfExists('totalVatAmountLocal', $data ?? [], null);
        $this->setIfExists('invoiceDate', $data ?? [], null);
        $this->setIfExists('dueDate', $data ?? [], null);
        $this->setIfExists('paymentMethod', $data ?? [], null);
        $this->setIfExists('comment', $data ?? [], null);
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
     * @param int|null $id id
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
     * Gets organizationId
     *
     * @return int|null
     */
    public function getOrganizationId()
    {
        return $this->container['organizationId'];
    }

    /**
     * Sets organizationId
     *
     * @param int|null $organizationId organizationId
     *
     * @return self
     */
    public function setOrganizationId($organizationId)
    {
        if (is_null($organizationId)) {
            throw new \InvalidArgumentException('non-nullable organizationId cannot be null');
        }
        $this->container['organizationId'] = $organizationId;

        return $this;
    }

    /**
     * Gets category
     *
     * @return \Cone\Billingo\Model\Category|null
     */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
     * Sets category
     *
     * @param \Cone\Billingo\Model\Category|null $category category
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
     * Gets paidAt
     *
     * @return \DateTime|null
     */
    public function getPaidAt()
    {
        return $this->container['paidAt'];
    }

    /**
     * Sets paidAt
     *
     * @param \DateTime|null $paidAt paidAt
     *
     * @return self
     */
    public function setPaidAt($paidAt)
    {
        if (is_null($paidAt)) {
            array_push($this->openAPINullablesSetToNull, 'paidAt');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('paidAt', $nullablesSetToNull, true);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['paidAt'] = $paidAt;

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
     * Gets partner
     *
     * @return \Cone\Billingo\Model\SpendingPartner|null
     */
    public function getPartner()
    {
        return $this->container['partner'];
    }

    /**
     * Sets partner
     *
     * @param \Cone\Billingo\Model\SpendingPartner|null $partner partner
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
     * @param string|null $invoiceNumber invoiceNumber
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
     * Gets totalGross
     *
     * @return float|null
     */
    public function getTotalGross()
    {
        return $this->container['totalGross'];
    }

    /**
     * Sets totalGross
     *
     * @param float|null $totalGross totalGross
     *
     * @return self
     */
    public function setTotalGross($totalGross)
    {
        if (is_null($totalGross)) {
            throw new \InvalidArgumentException('non-nullable totalGross cannot be null');
        }
        $this->container['totalGross'] = $totalGross;

        return $this;
    }

    /**
     * Gets totalGrossLocal
     *
     * @return float|null
     */
    public function getTotalGrossLocal()
    {
        return $this->container['totalGrossLocal'];
    }

    /**
     * Sets totalGrossLocal
     *
     * @param float|null $totalGrossLocal totalGrossLocal
     *
     * @return self
     */
    public function setTotalGrossLocal($totalGrossLocal)
    {
        if (is_null($totalGrossLocal)) {
            throw new \InvalidArgumentException('non-nullable totalGrossLocal cannot be null');
        }
        $this->container['totalGrossLocal'] = $totalGrossLocal;

        return $this;
    }

    /**
     * Gets totalVatAmount
     *
     * @return float|null
     */
    public function getTotalVatAmount()
    {
        return $this->container['totalVatAmount'];
    }

    /**
     * Sets totalVatAmount
     *
     * @param float|null $totalVatAmount totalVatAmount
     *
     * @return self
     */
    public function setTotalVatAmount($totalVatAmount)
    {
        if (is_null($totalVatAmount)) {
            throw new \InvalidArgumentException('non-nullable totalVatAmount cannot be null');
        }
        $this->container['totalVatAmount'] = $totalVatAmount;

        return $this;
    }

    /**
     * Gets totalVatAmountLocal
     *
     * @return float|null
     */
    public function getTotalVatAmountLocal()
    {
        return $this->container['totalVatAmountLocal'];
    }

    /**
     * Sets totalVatAmountLocal
     *
     * @param float|null $totalVatAmountLocal totalVatAmountLocal
     *
     * @return self
     */
    public function setTotalVatAmountLocal($totalVatAmountLocal)
    {
        if (is_null($totalVatAmountLocal)) {
            throw new \InvalidArgumentException('non-nullable totalVatAmountLocal cannot be null');
        }
        $this->container['totalVatAmountLocal'] = $totalVatAmountLocal;

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
     * Gets paymentMethod
     *
     * @return \Cone\Billingo\Model\SpendingPaymentMethod|null
     */
    public function getPaymentMethod()
    {
        return $this->container['paymentMethod'];
    }

    /**
     * Sets paymentMethod
     *
     * @param \Cone\Billingo\Model\SpendingPaymentMethod|null $paymentMethod paymentMethod
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
            array_push($this->openAPINullablesSetToNull, 'comment');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('comment', $nullablesSetToNull, true);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['comment'] = $comment;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param int $offset Offset
     *
     * @return bool
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param int $offset Offset
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
     * @param int $offset Offset
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
