<?php
/**
 * DocumentOrganization
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
 * DocumentOrganization Class Doc Comment
 *
 * @category Class
 * @package  Cone\Billingo
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class DocumentOrganization implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'DocumentOrganization';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'name' => 'string',
        'tax_number' => 'string',
        'bank_account' => '\Cone\Billingo\Model\DocumentBankAccount',
        'address' => '\Cone\Billingo\Model\Address',
        'small_taxpayer' => 'bool',
        'ev_number' => 'string',
        'eu_tax_number' => 'string',
        'cash_settled' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'name' => null,
        'tax_number' => null,
        'bank_account' => null,
        'address' => null,
        'small_taxpayer' => null,
        'ev_number' => null,
        'eu_tax_number' => null,
        'cash_settled' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'name' => false,
		'tax_number' => false,
		'bank_account' => false,
		'address' => false,
		'small_taxpayer' => false,
		'ev_number' => false,
		'eu_tax_number' => false,
		'cash_settled' => false
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
        'name' => 'name',
        'tax_number' => 'tax_number',
        'bank_account' => 'bank_account',
        'address' => 'address',
        'small_taxpayer' => 'small_taxpayer',
        'ev_number' => 'ev_number',
        'eu_tax_number' => 'eu_tax_number',
        'cash_settled' => 'cash_settled'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'tax_number' => 'setTaxNumber',
        'bank_account' => 'setBankAccount',
        'address' => 'setAddress',
        'small_taxpayer' => 'setSmallTaxpayer',
        'ev_number' => 'setEvNumber',
        'eu_tax_number' => 'setEuTaxNumber',
        'cash_settled' => 'setCashSettled'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'tax_number' => 'getTaxNumber',
        'bank_account' => 'getBankAccount',
        'address' => 'getAddress',
        'small_taxpayer' => 'getSmallTaxpayer',
        'ev_number' => 'getEvNumber',
        'eu_tax_number' => 'getEuTaxNumber',
        'cash_settled' => 'getCashSettled'
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
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('tax_number', $data ?? [], null);
        $this->setIfExists('bank_account', $data ?? [], null);
        $this->setIfExists('address', $data ?? [], null);
        $this->setIfExists('small_taxpayer', $data ?? [], null);
        $this->setIfExists('ev_number', $data ?? [], null);
        $this->setIfExists('eu_tax_number', $data ?? [], null);
        $this->setIfExists('cash_settled', $data ?? [], null);
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
     * Gets tax_number
     *
     * @return string|null
     */
    public function getTaxNumber()
    {
        return $this->container['tax_number'];
    }

    /**
     * Sets tax_number
     *
     * @param string|null $tax_number tax_number
     *
     * @return self
     */
    public function setTaxNumber($tax_number)
    {
        if (is_null($tax_number)) {
            throw new \InvalidArgumentException('non-nullable tax_number cannot be null');
        }
        $this->container['tax_number'] = $tax_number;

        return $this;
    }

    /**
     * Gets bank_account
     *
     * @return \Cone\Billingo\Model\DocumentBankAccount|null
     */
    public function getBankAccount()
    {
        return $this->container['bank_account'];
    }

    /**
     * Sets bank_account
     *
     * @param \Cone\Billingo\Model\DocumentBankAccount|null $bank_account bank_account
     *
     * @return self
     */
    public function setBankAccount($bank_account)
    {
        if (is_null($bank_account)) {
            throw new \InvalidArgumentException('non-nullable bank_account cannot be null');
        }
        $this->container['bank_account'] = $bank_account;

        return $this;
    }

    /**
     * Gets address
     *
     * @return \Cone\Billingo\Model\Address|null
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param \Cone\Billingo\Model\Address|null $address address
     *
     * @return self
     */
    public function setAddress($address)
    {
        if (is_null($address)) {
            throw new \InvalidArgumentException('non-nullable address cannot be null');
        }
        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets small_taxpayer
     *
     * @return bool|null
     */
    public function getSmallTaxpayer()
    {
        return $this->container['small_taxpayer'];
    }

    /**
     * Sets small_taxpayer
     *
     * @param bool|null $small_taxpayer small_taxpayer
     *
     * @return self
     */
    public function setSmallTaxpayer($small_taxpayer)
    {
        if (is_null($small_taxpayer)) {
            throw new \InvalidArgumentException('non-nullable small_taxpayer cannot be null');
        }
        $this->container['small_taxpayer'] = $small_taxpayer;

        return $this;
    }

    /**
     * Gets ev_number
     *
     * @return string|null
     */
    public function getEvNumber()
    {
        return $this->container['ev_number'];
    }

    /**
     * Sets ev_number
     *
     * @param string|null $ev_number ev_number
     *
     * @return self
     */
    public function setEvNumber($ev_number)
    {
        if (is_null($ev_number)) {
            throw new \InvalidArgumentException('non-nullable ev_number cannot be null');
        }
        $this->container['ev_number'] = $ev_number;

        return $this;
    }

    /**
     * Gets eu_tax_number
     *
     * @return string|null
     */
    public function getEuTaxNumber()
    {
        return $this->container['eu_tax_number'];
    }

    /**
     * Sets eu_tax_number
     *
     * @param string|null $eu_tax_number eu_tax_number
     *
     * @return self
     */
    public function setEuTaxNumber($eu_tax_number)
    {
        if (is_null($eu_tax_number)) {
            throw new \InvalidArgumentException('non-nullable eu_tax_number cannot be null');
        }
        $this->container['eu_tax_number'] = $eu_tax_number;

        return $this;
    }

    /**
     * Gets cash_settled
     *
     * @return bool|null
     */
    public function getCashSettled()
    {
        return $this->container['cash_settled'];
    }

    /**
     * Sets cash_settled
     *
     * @param bool|null $cash_settled cash_settled
     *
     * @return self
     */
    public function setCashSettled($cash_settled)
    {
        if (is_null($cash_settled)) {
            throw new \InvalidArgumentException('non-nullable cash_settled cannot be null');
        }
        $this->container['cash_settled'] = $cash_settled;

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

