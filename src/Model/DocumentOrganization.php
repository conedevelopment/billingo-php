<?php

/**
 * DocumentOrganization
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
 * The version of the OpenAPI document: 3.0.14
 * Contact: hello@billingo.hu
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.10.0
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
 * DocumentOrganization Class Doc Comment
 *
 * @category Class
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
        'taxNumber' => 'string',
        'bankAccount' => '\Cone\Billingo\Model\DocumentBankAccount',
        'address' => '\Cone\Billingo\Model\Address',
        'smallTaxpayer' => 'bool',
        'evNumber' => 'string',
        'euTaxNumber' => 'string',
        'cashSettled' => 'bool',
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
        'taxNumber' => null,
        'bankAccount' => null,
        'address' => null,
        'smallTaxpayer' => null,
        'evNumber' => null,
        'euTaxNumber' => null,
        'cashSettled' => null,
    ];

    /**
     * Array of nullable properties. Used for (de)serialization
     *
     * @var bool[]
     */
    protected static array $openAPINullables = [
        'name' => false,
        'taxNumber' => false,
        'bankAccount' => false,
        'address' => false,
        'smallTaxpayer' => false,
        'evNumber' => false,
        'euTaxNumber' => false,
        'cashSettled' => false,
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
        'name' => 'name',
        'taxNumber' => 'tax_number',
        'bankAccount' => 'bank_account',
        'address' => 'address',
        'smallTaxpayer' => 'small_taxpayer',
        'evNumber' => 'ev_number',
        'euTaxNumber' => 'eu_tax_number',
        'cashSettled' => 'cash_settled',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'taxNumber' => 'setTaxNumber',
        'bankAccount' => 'setBankAccount',
        'address' => 'setAddress',
        'smallTaxpayer' => 'setSmallTaxpayer',
        'evNumber' => 'setEvNumber',
        'euTaxNumber' => 'setEuTaxNumber',
        'cashSettled' => 'setCashSettled',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'taxNumber' => 'getTaxNumber',
        'bankAccount' => 'getBankAccount',
        'address' => 'getAddress',
        'smallTaxpayer' => 'getSmallTaxpayer',
        'evNumber' => 'getEvNumber',
        'euTaxNumber' => 'getEuTaxNumber',
        'cashSettled' => 'getCashSettled',
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
        $this->setIfExists('taxNumber', $data ?? [], null);
        $this->setIfExists('bankAccount', $data ?? [], null);
        $this->setIfExists('address', $data ?? [], null);
        $this->setIfExists('smallTaxpayer', $data ?? [], null);
        $this->setIfExists('evNumber', $data ?? [], null);
        $this->setIfExists('euTaxNumber', $data ?? [], null);
        $this->setIfExists('cashSettled', $data ?? [], null);
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
     * Gets taxNumber
     *
     * @return string|null
     */
    public function getTaxNumber()
    {
        return $this->container['taxNumber'];
    }

    /**
     * Sets taxNumber
     *
     * @param string|null $taxNumber taxNumber
     *
     * @return self
     */
    public function setTaxNumber($taxNumber)
    {
        if (is_null($taxNumber)) {
            throw new \InvalidArgumentException('non-nullable taxNumber cannot be null');
        }
        $this->container['taxNumber'] = $taxNumber;

        return $this;
    }

    /**
     * Gets bankAccount
     *
     * @return \Cone\Billingo\Model\DocumentBankAccount|null
     */
    public function getBankAccount()
    {
        return $this->container['bankAccount'];
    }

    /**
     * Sets bankAccount
     *
     * @param \Cone\Billingo\Model\DocumentBankAccount|null $bankAccount bankAccount
     *
     * @return self
     */
    public function setBankAccount($bankAccount)
    {
        if (is_null($bankAccount)) {
            throw new \InvalidArgumentException('non-nullable bankAccount cannot be null');
        }
        $this->container['bankAccount'] = $bankAccount;

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
     * Gets smallTaxpayer
     *
     * @return bool|null
     */
    public function getSmallTaxpayer()
    {
        return $this->container['smallTaxpayer'];
    }

    /**
     * Sets smallTaxpayer
     *
     * @param bool|null $smallTaxpayer smallTaxpayer
     *
     * @return self
     */
    public function setSmallTaxpayer($smallTaxpayer)
    {
        if (is_null($smallTaxpayer)) {
            throw new \InvalidArgumentException('non-nullable smallTaxpayer cannot be null');
        }
        $this->container['smallTaxpayer'] = $smallTaxpayer;

        return $this;
    }

    /**
     * Gets evNumber
     *
     * @return string|null
     */
    public function getEvNumber()
    {
        return $this->container['evNumber'];
    }

    /**
     * Sets evNumber
     *
     * @param string|null $evNumber evNumber
     *
     * @return self
     */
    public function setEvNumber($evNumber)
    {
        if (is_null($evNumber)) {
            throw new \InvalidArgumentException('non-nullable evNumber cannot be null');
        }
        $this->container['evNumber'] = $evNumber;

        return $this;
    }

    /**
     * Gets euTaxNumber
     *
     * @return string|null
     */
    public function getEuTaxNumber()
    {
        return $this->container['euTaxNumber'];
    }

    /**
     * Sets euTaxNumber
     *
     * @param string|null $euTaxNumber euTaxNumber
     *
     * @return self
     */
    public function setEuTaxNumber($euTaxNumber)
    {
        if (is_null($euTaxNumber)) {
            throw new \InvalidArgumentException('non-nullable euTaxNumber cannot be null');
        }
        $this->container['euTaxNumber'] = $euTaxNumber;

        return $this;
    }

    /**
     * Gets cashSettled
     *
     * @return bool|null
     */
    public function getCashSettled()
    {
        return $this->container['cashSettled'];
    }

    /**
     * Sets cashSettled
     *
     * @param bool|null $cashSettled cashSettled
     *
     * @return self
     */
    public function setCashSettled($cashSettled)
    {
        if (is_null($cashSettled)) {
            throw new \InvalidArgumentException('non-nullable cashSettled cannot be null');
        }
        $this->container['cashSettled'] = $cashSettled;

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
