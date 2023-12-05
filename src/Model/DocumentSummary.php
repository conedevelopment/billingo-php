<?php
/**
 * DocumentSummary
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
 * DocumentSummary Class Doc Comment
 *
 * @category Class
 * @package  Cone\Billingo
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class DocumentSummary implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'DocumentSummary';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'netAmount' => 'float',
        'netAmountLocal' => 'float',
        'grossAmountLocal' => 'float',
        'vatAmount' => 'float',
        'vatAmountLocal' => 'float',
        'vatRateSummary' => '\Cone\Billingo\Model\DocumentVatRateSummary[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'netAmount' => 'float',
        'netAmountLocal' => 'float',
        'grossAmountLocal' => 'float',
        'vatAmount' => 'float',
        'vatAmountLocal' => 'float',
        'vatRateSummary' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'netAmount' => false,
		'netAmountLocal' => false,
		'grossAmountLocal' => false,
		'vatAmount' => false,
		'vatAmountLocal' => false,
		'vatRateSummary' => false
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
        'netAmount' => 'net_amount',
        'netAmountLocal' => 'net_amount_local',
        'grossAmountLocal' => 'gross_amount_local',
        'vatAmount' => 'vat_amount',
        'vatAmountLocal' => 'vat_amount_local',
        'vatRateSummary' => 'vat_rate_summary'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'netAmount' => 'setNetAmount',
        'netAmountLocal' => 'setNetAmountLocal',
        'grossAmountLocal' => 'setGrossAmountLocal',
        'vatAmount' => 'setVatAmount',
        'vatAmountLocal' => 'setVatAmountLocal',
        'vatRateSummary' => 'setVatRateSummary'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'netAmount' => 'getNetAmount',
        'netAmountLocal' => 'getNetAmountLocal',
        'grossAmountLocal' => 'getGrossAmountLocal',
        'vatAmount' => 'getVatAmount',
        'vatAmountLocal' => 'getVatAmountLocal',
        'vatRateSummary' => 'getVatRateSummary'
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
        $this->setIfExists('netAmount', $data ?? [], null);
        $this->setIfExists('netAmountLocal', $data ?? [], null);
        $this->setIfExists('grossAmountLocal', $data ?? [], null);
        $this->setIfExists('vatAmount', $data ?? [], null);
        $this->setIfExists('vatAmountLocal', $data ?? [], null);
        $this->setIfExists('vatRateSummary', $data ?? [], null);
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
     * Gets netAmount
     *
     * @return float|null
     */
    public function getNetAmount()
    {
        return $this->container['netAmount'];
    }

    /**
     * Sets netAmount
     *
     * @param float|null $netAmount netAmount
     *
     * @return self
     */
    public function setNetAmount($netAmount)
    {
        if (is_null($netAmount)) {
            throw new \InvalidArgumentException('non-nullable netAmount cannot be null');
        }
        $this->container['netAmount'] = $netAmount;

        return $this;
    }

    /**
     * Gets netAmountLocal
     *
     * @return float|null
     */
    public function getNetAmountLocal()
    {
        return $this->container['netAmountLocal'];
    }

    /**
     * Sets netAmountLocal
     *
     * @param float|null $netAmountLocal netAmountLocal
     *
     * @return self
     */
    public function setNetAmountLocal($netAmountLocal)
    {
        if (is_null($netAmountLocal)) {
            throw new \InvalidArgumentException('non-nullable netAmountLocal cannot be null');
        }
        $this->container['netAmountLocal'] = $netAmountLocal;

        return $this;
    }

    /**
     * Gets grossAmountLocal
     *
     * @return float|null
     */
    public function getGrossAmountLocal()
    {
        return $this->container['grossAmountLocal'];
    }

    /**
     * Sets grossAmountLocal
     *
     * @param float|null $grossAmountLocal grossAmountLocal
     *
     * @return self
     */
    public function setGrossAmountLocal($grossAmountLocal)
    {
        if (is_null($grossAmountLocal)) {
            throw new \InvalidArgumentException('non-nullable grossAmountLocal cannot be null');
        }
        $this->container['grossAmountLocal'] = $grossAmountLocal;

        return $this;
    }

    /**
     * Gets vatAmount
     *
     * @return float|null
     */
    public function getVatAmount()
    {
        return $this->container['vatAmount'];
    }

    /**
     * Sets vatAmount
     *
     * @param float|null $vatAmount vatAmount
     *
     * @return self
     */
    public function setVatAmount($vatAmount)
    {
        if (is_null($vatAmount)) {
            throw new \InvalidArgumentException('non-nullable vatAmount cannot be null');
        }
        $this->container['vatAmount'] = $vatAmount;

        return $this;
    }

    /**
     * Gets vatAmountLocal
     *
     * @return float|null
     */
    public function getVatAmountLocal()
    {
        return $this->container['vatAmountLocal'];
    }

    /**
     * Sets vatAmountLocal
     *
     * @param float|null $vatAmountLocal vatAmountLocal
     *
     * @return self
     */
    public function setVatAmountLocal($vatAmountLocal)
    {
        if (is_null($vatAmountLocal)) {
            throw new \InvalidArgumentException('non-nullable vatAmountLocal cannot be null');
        }
        $this->container['vatAmountLocal'] = $vatAmountLocal;

        return $this;
    }

    /**
     * Gets vatRateSummary
     *
     * @return \Cone\Billingo\Model\DocumentVatRateSummary[]|null
     */
    public function getVatRateSummary()
    {
        return $this->container['vatRateSummary'];
    }

    /**
     * Sets vatRateSummary
     *
     * @param \Cone\Billingo\Model\DocumentVatRateSummary[]|null $vatRateSummary vatRateSummary
     *
     * @return self
     */
    public function setVatRateSummary($vatRateSummary)
    {
        if (is_null($vatRateSummary)) {
            throw new \InvalidArgumentException('non-nullable vatRateSummary cannot be null');
        }
        $this->container['vatRateSummary'] = $vatRateSummary;

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

