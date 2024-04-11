<?php
/**
 * DocumentProductData
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
 * Generator version: 7.4.0
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
 * DocumentProductData Class Doc Comment
 *
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class DocumentProductData implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static string $openAPIModelName = 'DocumentProductData';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var array<string, string>
     */
    protected static array $openAPITypes = [
        'name' => 'string',
        'unitPrice' => 'float',
        'unitPriceType' => '\Cone\Billingo\Model\UnitPriceType',
        'quantity' => 'float',
        'unit' => 'string',
        'vat' => '\Cone\Billingo\Model\Vat',
        'comment' => 'string',
        'entitlement' => '\Cone\Billingo\Model\Entitlement',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var array<string, string|null>
     */
    protected static array $openAPIFormats = [
        'name' => null,
        'unitPrice' => 'float',
        'unitPriceType' => null,
        'quantity' => 'float',
        'unit' => null,
        'vat' => null,
        'comment' => null,
        'entitlement' => null,
    ];

    /**
     * Array of nullable properties. Used for (de)serialization
     *
     * @var array<string, bool>
     */
    protected static array $openAPINullables = [
        'name' => false,
        'unitPrice' => false,
        'unitPriceType' => false,
        'quantity' => false,
        'unit' => false,
        'vat' => false,
        'comment' => false,
        'entitlement' => false,
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
        'unitPrice' => 'unit_price',
        'unitPriceType' => 'unit_price_type',
        'quantity' => 'quantity',
        'unit' => 'unit',
        'vat' => 'vat',
        'comment' => 'comment',
        'entitlement' => 'entitlement',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'name' => 'setName',
        'unitPrice' => 'setUnitPrice',
        'unitPriceType' => 'setUnitPriceType',
        'quantity' => 'setQuantity',
        'unit' => 'setUnit',
        'vat' => 'setVat',
        'comment' => 'setComment',
        'entitlement' => 'setEntitlement',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'name' => 'getName',
        'unitPrice' => 'getUnitPrice',
        'unitPriceType' => 'getUnitPriceType',
        'quantity' => 'getQuantity',
        'unit' => 'getUnit',
        'vat' => 'getVat',
        'comment' => 'getComment',
        'entitlement' => 'getEntitlement',
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
    public function __construct(array $data = null)
    {
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('unitPrice', $data ?? [], null);
        $this->setIfExists('unitPriceType', $data ?? [], null);
        $this->setIfExists('quantity', $data ?? [], null);
        $this->setIfExists('unit', $data ?? [], null);
        $this->setIfExists('vat', $data ?? [], null);
        $this->setIfExists('comment', $data ?? [], null);
        $this->setIfExists('entitlement', $data ?? [], null);
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

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['unitPrice'] === null) {
            $invalidProperties[] = "'unitPrice' can't be null";
        }
        if ($this->container['unitPriceType'] === null) {
            $invalidProperties[] = "'unitPriceType' can't be null";
        }
        if ($this->container['quantity'] === null) {
            $invalidProperties[] = "'quantity' can't be null";
        }
        if ($this->container['unit'] === null) {
            $invalidProperties[] = "'unit' can't be null";
        }
        if ($this->container['vat'] === null) {
            $invalidProperties[] = "'vat' can't be null";
        }
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
     * @return string
     */
    public function getName(): string
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name name
     *
     * @return $this
     */
    public function setName(string $name): static
    {
        if (is_null($name)) {
            throw new InvalidArgumentException('non-nullable name cannot be null');
        }
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets unitPrice
     *
     * @return float
     */
    public function getUnitPrice(): float
    {
        return $this->container['unitPrice'];
    }

    /**
     * Sets unitPrice
     *
     * @param float $unitPrice unitPrice
     *
     * @return $this
     */
    public function setUnitPrice(float $unitPrice): static
    {
        if (is_null($unitPrice)) {
            throw new InvalidArgumentException('non-nullable unitPrice cannot be null');
        }
        $this->container['unitPrice'] = $unitPrice;

        return $this;
    }

    /**
     * Gets unitPriceType
     *
     * @return \Cone\Billingo\Model\UnitPriceType
     */
    public function getUnitPriceType(): \Cone\Billingo\Model\UnitPriceType
    {
        return $this->container['unitPriceType'];
    }

    /**
     * Sets unitPriceType
     *
     * @param \Cone\Billingo\Model\UnitPriceType $unitPriceType unitPriceType
     *
     * @return $this
     */
    public function setUnitPriceType(\Cone\Billingo\Model\UnitPriceType $unitPriceType): static
    {
        if (is_null($unitPriceType)) {
            throw new InvalidArgumentException('non-nullable unitPriceType cannot be null');
        }
        $this->container['unitPriceType'] = $unitPriceType;

        return $this;
    }

    /**
     * Gets quantity
     *
     * @return float
     */
    public function getQuantity(): float
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     *
     * @param float $quantity quantity
     *
     * @return $this
     */
    public function setQuantity(float $quantity): static
    {
        if (is_null($quantity)) {
            throw new InvalidArgumentException('non-nullable quantity cannot be null');
        }
        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets unit
     *
     * @return string
     */
    public function getUnit(): string
    {
        return $this->container['unit'];
    }

    /**
     * Sets unit
     *
     * @param string $unit unit
     *
     * @return $this
     */
    public function setUnit(string $unit): static
    {
        if (is_null($unit)) {
            throw new InvalidArgumentException('non-nullable unit cannot be null');
        }
        $this->container['unit'] = $unit;

        return $this;
    }

    /**
     * Gets vat
     *
     * @return \Cone\Billingo\Model\Vat
     */
    public function getVat(): \Cone\Billingo\Model\Vat
    {
        return $this->container['vat'];
    }

    /**
     * Sets vat
     *
     * @param \Cone\Billingo\Model\Vat $vat vat
     *
     * @return $this
     */
    public function setVat(\Cone\Billingo\Model\Vat $vat): static
    {
        if (is_null($vat)) {
            throw new InvalidArgumentException('non-nullable vat cannot be null');
        }
        $this->container['vat'] = $vat;

        return $this;
    }

    /**
     * Gets comment
     *
     * @return string|null
     */
    public function getComment(): ?string
    {
        return $this->container['comment'];
    }

    /**
     * Sets comment
     *
     * @param string|null $comment comment
     *
     * @return $this
     */
    public function setComment(?string $comment): static
    {
        if (is_null($comment)) {
            throw new InvalidArgumentException('non-nullable comment cannot be null');
        }
        $this->container['comment'] = $comment;

        return $this;
    }

    /**
     * Gets entitlement
     *
     * @return \Cone\Billingo\Model\Entitlement|null
     */
    public function getEntitlement(): ?\Cone\Billingo\Model\Entitlement
    {
        return $this->container['entitlement'];
    }

    /**
     * Sets entitlement
     *
     * @param \Cone\Billingo\Model\Entitlement|null $entitlement entitlement
     *
     * @return $this
     */
    public function setEntitlement(?\Cone\Billingo\Model\Entitlement $entitlement): static
    {
        if (is_null($entitlement)) {
            throw new InvalidArgumentException('non-nullable entitlement cannot be null');
        }
        $this->container['entitlement'] = $entitlement;

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
