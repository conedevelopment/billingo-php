<?php

/**
 * DocumentOrganization
 *
 * PHP version 8.1
 *
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
 * @generated Generated by: https://openapi-generator.tech
 * Generator version: 7.12.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Cone\Billingo\Model;

use ArrayAccess;
use JsonSerializable;
use InvalidArgumentException;
use ReturnTypeWillChange;
use Cone\Billingo\ObjectSerializer;

/**
 * DocumentOrganization Class Doc Comment
 *
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class DocumentOrganization implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static string $openAPIModelName = 'DocumentOrganization';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var array<string, string>
     */
    protected static array $openAPITypes = [
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
     * @var array<string, string|null>
     */
    protected static array $openAPIFormats = [
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
     * @var array<string, bool>
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
     * @var array<string, bool>
     */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array<string, string>
     */
    public static function openAPITypes(): array
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array<string, string>
     */
    public static function openAPIFormats(): array
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array<string, bool>
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return array<string, bool>
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param array<string, bool> $openAPINullablesSetToNull
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
     * @var array<string, string>
     */
    protected static array $attributeMap = [
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
     * @var array<string, string>
     */
    protected static array $setters = [
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
     * @var array<string, string>
     */
    protected static array $getters = [
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
     * @return array<string, string>
     */
    public static function attributeMap(): array
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array<string, string>
     */
    public static function setters(): array
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array<string, string>
     */
    public static function getters(): array
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName(): string
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var array
     */
    protected array $container = [];

    /**
     * Constructor
     *
     * @param array $data Associated array of property values initializing the model
     */
    public function __construct(?array $data = null)
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
    private function setIfExists(string $variableName, array $fields, mixed $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return string[] invalid properties with reasons
     */
    public function listInvalidProperties(): array
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
    public function valid(): bool
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name name
     *
     * @return $this
     */
    public function setName(?string $name): static
    {
        if (is_null($name)) {
            throw new InvalidArgumentException('non-nullable name cannot be null');
        }
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets taxNumber
     *
     * @return string|null
     */
    public function getTaxNumber(): ?string
    {
        return $this->container['taxNumber'];
    }

    /**
     * Sets taxNumber
     *
     * @param string|null $taxNumber taxNumber
     *
     * @return $this
     */
    public function setTaxNumber(?string $taxNumber): static
    {
        if (is_null($taxNumber)) {
            throw new InvalidArgumentException('non-nullable taxNumber cannot be null');
        }
        $this->container['taxNumber'] = $taxNumber;

        return $this;
    }

    /**
     * Gets bankAccount
     *
     * @return \Cone\Billingo\Model\DocumentBankAccount|null
     */
    public function getBankAccount(): ?\Cone\Billingo\Model\DocumentBankAccount
    {
        return $this->container['bankAccount'];
    }

    /**
     * Sets bankAccount
     *
     * @param \Cone\Billingo\Model\DocumentBankAccount|null $bankAccount bankAccount
     *
     * @return $this
     */
    public function setBankAccount(?\Cone\Billingo\Model\DocumentBankAccount $bankAccount): static
    {
        if (is_null($bankAccount)) {
            throw new InvalidArgumentException('non-nullable bankAccount cannot be null');
        }
        $this->container['bankAccount'] = $bankAccount;

        return $this;
    }

    /**
     * Gets address
     *
     * @return \Cone\Billingo\Model\Address|null
     */
    public function getAddress(): ?\Cone\Billingo\Model\Address
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param \Cone\Billingo\Model\Address|null $address address
     *
     * @return $this
     */
    public function setAddress(?\Cone\Billingo\Model\Address $address): static
    {
        if (is_null($address)) {
            throw new InvalidArgumentException('non-nullable address cannot be null');
        }
        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets smallTaxpayer
     *
     * @return bool|null
     */
    public function getSmallTaxpayer(): ?bool
    {
        return $this->container['smallTaxpayer'];
    }

    /**
     * Sets smallTaxpayer
     *
     * @param bool|null $smallTaxpayer smallTaxpayer
     *
     * @return $this
     */
    public function setSmallTaxpayer(?bool $smallTaxpayer): static
    {
        if (is_null($smallTaxpayer)) {
            throw new InvalidArgumentException('non-nullable smallTaxpayer cannot be null');
        }
        $this->container['smallTaxpayer'] = $smallTaxpayer;

        return $this;
    }

    /**
     * Gets evNumber
     *
     * @return string|null
     */
    public function getEvNumber(): ?string
    {
        return $this->container['evNumber'];
    }

    /**
     * Sets evNumber
     *
     * @param string|null $evNumber evNumber
     *
     * @return $this
     */
    public function setEvNumber(?string $evNumber): static
    {
        if (is_null($evNumber)) {
            throw new InvalidArgumentException('non-nullable evNumber cannot be null');
        }
        $this->container['evNumber'] = $evNumber;

        return $this;
    }

    /**
     * Gets euTaxNumber
     *
     * @return string|null
     */
    public function getEuTaxNumber(): ?string
    {
        return $this->container['euTaxNumber'];
    }

    /**
     * Sets euTaxNumber
     *
     * @param string|null $euTaxNumber euTaxNumber
     *
     * @return $this
     */
    public function setEuTaxNumber(?string $euTaxNumber): static
    {
        if (is_null($euTaxNumber)) {
            throw new InvalidArgumentException('non-nullable euTaxNumber cannot be null');
        }
        $this->container['euTaxNumber'] = $euTaxNumber;

        return $this;
    }

    /**
     * Gets cashSettled
     *
     * @return bool|null
     */
    public function getCashSettled(): ?bool
    {
        return $this->container['cashSettled'];
    }

    /**
     * Sets cashSettled
     *
     * @param bool|null $cashSettled cashSettled
     *
     * @return $this
     */
    public function setCashSettled(?bool $cashSettled): static
    {
        if (is_null($cashSettled)) {
            throw new InvalidArgumentException('non-nullable cashSettled cannot be null');
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
    public function offsetExists(mixed $offset): bool
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
    #[ReturnTypeWillChange]
    public function offsetGet(mixed $offset): mixed
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
    public function offsetSet(mixed $offset, mixed $value): void
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
    public function offsetUnset(mixed $offset): void
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
    #[ReturnTypeWillChange]
    public function jsonSerialize(): mixed
    {
        return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString(): string
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
    public function toHeaderValue(): string
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
