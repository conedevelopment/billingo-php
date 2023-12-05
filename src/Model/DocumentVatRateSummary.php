<?php
/**
 * DocumentVatRateSummary
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
 * DocumentVatRateSummary Class Doc Comment
 *
 * @category Class
 * @package  Cone\Billingo
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class DocumentVatRateSummary implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'DocumentVatRateSummary';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'vatName' => 'string',
        'vatPercentage' => 'float',
        'vatRateNetAmount' => 'float',
        'vatRateVatAmount' => 'float',
        'vatRateVatAmountLocal' => 'float',
        'vatRateGrossAmount' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'vatName' => null,
        'vatPercentage' => 'float',
        'vatRateNetAmount' => 'float',
        'vatRateVatAmount' => 'float',
        'vatRateVatAmountLocal' => 'float',
        'vatRateGrossAmount' => 'float'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'vatName' => false,
		'vatPercentage' => false,
		'vatRateNetAmount' => false,
		'vatRateVatAmount' => false,
		'vatRateVatAmountLocal' => false,
		'vatRateGrossAmount' => false
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
        'vatName' => 'vat_name',
        'vatPercentage' => 'vat_percentage',
        'vatRateNetAmount' => 'vat_rate_net_amount',
        'vatRateVatAmount' => 'vat_rate_vat_amount',
        'vatRateVatAmountLocal' => 'vat_rate_vat_amount_local',
        'vatRateGrossAmount' => 'vat_rate_gross_amount'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'vatName' => 'setVatName',
        'vatPercentage' => 'setVatPercentage',
        'vatRateNetAmount' => 'setVatRateNetAmount',
        'vatRateVatAmount' => 'setVatRateVatAmount',
        'vatRateVatAmountLocal' => 'setVatRateVatAmountLocal',
        'vatRateGrossAmount' => 'setVatRateGrossAmount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'vatName' => 'getVatName',
        'vatPercentage' => 'getVatPercentage',
        'vatRateNetAmount' => 'getVatRateNetAmount',
        'vatRateVatAmount' => 'getVatRateVatAmount',
        'vatRateVatAmountLocal' => 'getVatRateVatAmountLocal',
        'vatRateGrossAmount' => 'getVatRateGrossAmount'
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
        $this->setIfExists('vatName', $data ?? [], null);
        $this->setIfExists('vatPercentage', $data ?? [], null);
        $this->setIfExists('vatRateNetAmount', $data ?? [], null);
        $this->setIfExists('vatRateVatAmount', $data ?? [], null);
        $this->setIfExists('vatRateVatAmountLocal', $data ?? [], null);
        $this->setIfExists('vatRateGrossAmount', $data ?? [], null);
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
     * Gets vatName
     *
     * @return string|null
     */
    public function getVatName()
    {
        return $this->container['vatName'];
    }

    /**
     * Sets vatName
     *
     * @param string|null $vatName vatName
     *
     * @return self
     */
    public function setVatName($vatName)
    {
        if (is_null($vatName)) {
            throw new \InvalidArgumentException('non-nullable vatName cannot be null');
        }
        $this->container['vatName'] = $vatName;

        return $this;
    }

    /**
     * Gets vatPercentage
     *
     * @return float|null
     */
    public function getVatPercentage()
    {
        return $this->container['vatPercentage'];
    }

    /**
     * Sets vatPercentage
     *
     * @param float|null $vatPercentage vatPercentage
     *
     * @return self
     */
    public function setVatPercentage($vatPercentage)
    {
        if (is_null($vatPercentage)) {
            throw new \InvalidArgumentException('non-nullable vatPercentage cannot be null');
        }
        $this->container['vatPercentage'] = $vatPercentage;

        return $this;
    }

    /**
     * Gets vatRateNetAmount
     *
     * @return float|null
     */
    public function getVatRateNetAmount()
    {
        return $this->container['vatRateNetAmount'];
    }

    /**
     * Sets vatRateNetAmount
     *
     * @param float|null $vatRateNetAmount vatRateNetAmount
     *
     * @return self
     */
    public function setVatRateNetAmount($vatRateNetAmount)
    {
        if (is_null($vatRateNetAmount)) {
            throw new \InvalidArgumentException('non-nullable vatRateNetAmount cannot be null');
        }
        $this->container['vatRateNetAmount'] = $vatRateNetAmount;

        return $this;
    }

    /**
     * Gets vatRateVatAmount
     *
     * @return float|null
     */
    public function getVatRateVatAmount()
    {
        return $this->container['vatRateVatAmount'];
    }

    /**
     * Sets vatRateVatAmount
     *
     * @param float|null $vatRateVatAmount vatRateVatAmount
     *
     * @return self
     */
    public function setVatRateVatAmount($vatRateVatAmount)
    {
        if (is_null($vatRateVatAmount)) {
            throw new \InvalidArgumentException('non-nullable vatRateVatAmount cannot be null');
        }
        $this->container['vatRateVatAmount'] = $vatRateVatAmount;

        return $this;
    }

    /**
     * Gets vatRateVatAmountLocal
     *
     * @return float|null
     */
    public function getVatRateVatAmountLocal()
    {
        return $this->container['vatRateVatAmountLocal'];
    }

    /**
     * Sets vatRateVatAmountLocal
     *
     * @param float|null $vatRateVatAmountLocal vatRateVatAmountLocal
     *
     * @return self
     */
    public function setVatRateVatAmountLocal($vatRateVatAmountLocal)
    {
        if (is_null($vatRateVatAmountLocal)) {
            throw new \InvalidArgumentException('non-nullable vatRateVatAmountLocal cannot be null');
        }
        $this->container['vatRateVatAmountLocal'] = $vatRateVatAmountLocal;

        return $this;
    }

    /**
     * Gets vatRateGrossAmount
     *
     * @return float|null
     */
    public function getVatRateGrossAmount()
    {
        return $this->container['vatRateGrossAmount'];
    }

    /**
     * Sets vatRateGrossAmount
     *
     * @param float|null $vatRateGrossAmount vatRateGrossAmount
     *
     * @return self
     */
    public function setVatRateGrossAmount($vatRateGrossAmount)
    {
        if (is_null($vatRateGrossAmount)) {
            throw new \InvalidArgumentException('non-nullable vatRateGrossAmount cannot be null');
        }
        $this->container['vatRateGrossAmount'] = $vatRateGrossAmount;

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


