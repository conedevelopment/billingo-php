<?php
/**
 * DocumentInsertItemsInner
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
 * DocumentInsertItemsInner Class Doc Comment
 *
 * @category Class
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class DocumentInsertItemsInner implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'DocumentInsert_items_inner';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'productId' => 'int',
        'quantity' => 'float',
        'comment' => 'string',
        'dataEraserCodes' => 'string',
        'name' => 'string',
        'unitPrice' => 'float',
        'unitPriceType' => '\Cone\Billingo\Model\UnitPriceType',
        'unit' => 'string',
        'vat' => '\Cone\Billingo\Model\Vat',
        'entitlement' => '\Cone\Billingo\Model\Entitlement',
        'sku' => 'string',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        'productId' => null,
        'quantity' => 'float',
        'comment' => null,
        'dataEraserCodes' => null,
        'name' => null,
        'unitPrice' => 'float',
        'unitPriceType' => null,
        'unit' => null,
        'vat' => null,
        'entitlement' => null,
        'sku' => null,
    ];

    /**
     * Array of nullable properties. Used for (de)serialization
     *
     * @var bool[]
     */
    protected static array $openAPINullables = [
        'productId' => false,
        'quantity' => false,
        'comment' => false,
        'dataEraserCodes' => false,
        'name' => false,
        'unitPrice' => false,
        'unitPriceType' => false,
        'unit' => false,
        'vat' => false,
        'entitlement' => false,
        'sku' => false,
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
        'productId' => 'product_id',
        'quantity' => 'quantity',
        'comment' => 'comment',
        'dataEraserCodes' => 'data_eraser_codes',
        'name' => 'name',
        'unitPrice' => 'unit_price',
        'unitPriceType' => 'unit_price_type',
        'unit' => 'unit',
        'vat' => 'vat',
        'entitlement' => 'entitlement',
        'sku' => 'sku',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'productId' => 'setProductId',
        'quantity' => 'setQuantity',
        'comment' => 'setComment',
        'dataEraserCodes' => 'setDataEraserCodes',
        'name' => 'setName',
        'unitPrice' => 'setUnitPrice',
        'unitPriceType' => 'setUnitPriceType',
        'unit' => 'setUnit',
        'vat' => 'setVat',
        'entitlement' => 'setEntitlement',
        'sku' => 'setSku',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'productId' => 'getProductId',
        'quantity' => 'getQuantity',
        'comment' => 'getComment',
        'dataEraserCodes' => 'getDataEraserCodes',
        'name' => 'getName',
        'unitPrice' => 'getUnitPrice',
        'unitPriceType' => 'getUnitPriceType',
        'unit' => 'getUnit',
        'vat' => 'getVat',
        'entitlement' => 'getEntitlement',
        'sku' => 'getSku',
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
        $this->setIfExists('productId', $data ?? [], null);
        $this->setIfExists('quantity', $data ?? [], null);
        $this->setIfExists('comment', $data ?? [], null);
        $this->setIfExists('dataEraserCodes', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('unitPrice', $data ?? [], null);
        $this->setIfExists('unitPriceType', $data ?? [], null);
        $this->setIfExists('unit', $data ?? [], null);
        $this->setIfExists('vat', $data ?? [], null);
        $this->setIfExists('entitlement', $data ?? [], null);
        $this->setIfExists('sku', $data ?? [], null);
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

        if ($this->container['productId'] === null) {
            $invalidProperties[] = "'productId' can't be null";
        }
        if ($this->container['quantity'] === null) {
            $invalidProperties[] = "'quantity' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['unitPrice'] === null) {
            $invalidProperties[] = "'unitPrice' can't be null";
        }
        if ($this->container['unitPriceType'] === null) {
            $invalidProperties[] = "'unitPriceType' can't be null";
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
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets productId
     *
     * @return int
     */
    public function getProductId()
    {
        return $this->container['productId'];
    }

    /**
     * Sets productId
     *
     * @param int $productId productId
     *
     * @return self
     */
    public function setProductId($productId)
    {
        if (is_null($productId)) {
            throw new \InvalidArgumentException('non-nullable productId cannot be null');
        }
        $this->container['productId'] = $productId;

        return $this;
    }

    /**
     * Gets quantity
     *
     * @return float
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     *
     * @param float $quantity quantity
     *
     * @return self
     */
    public function setQuantity($quantity)
    {
        if (is_null($quantity)) {
            throw new \InvalidArgumentException('non-nullable quantity cannot be null');
        }
        $this->container['quantity'] = $quantity;

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
     * Gets dataEraserCodes
     *
     * @return string|null
     */
    public function getDataEraserCodes()
    {
        return $this->container['dataEraserCodes'];
    }

    /**
     * Sets dataEraserCodes
     *
     * @param string|null $dataEraserCodes Data eraser codes separated by comma. Example: '1234-5678-9012-3456,1234-5678-9012-3456'
     *
     * @return self
     */
    public function setDataEraserCodes($dataEraserCodes)
    {
        if (is_null($dataEraserCodes)) {
            throw new \InvalidArgumentException('non-nullable dataEraserCodes cannot be null');
        }
        $this->container['dataEraserCodes'] = $dataEraserCodes;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name name
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
     * Gets unitPrice
     *
     * @return float
     */
    public function getUnitPrice()
    {
        return $this->container['unitPrice'];
    }

    /**
     * Sets unitPrice
     *
     * @param float $unitPrice unitPrice
     *
     * @return self
     */
    public function setUnitPrice($unitPrice)
    {
        if (is_null($unitPrice)) {
            throw new \InvalidArgumentException('non-nullable unitPrice cannot be null');
        }
        $this->container['unitPrice'] = $unitPrice;

        return $this;
    }

    /**
     * Gets unitPriceType
     *
     * @return \Cone\Billingo\Model\UnitPriceType
     */
    public function getUnitPriceType()
    {
        return $this->container['unitPriceType'];
    }

    /**
     * Sets unitPriceType
     *
     * @param \Cone\Billingo\Model\UnitPriceType $unitPriceType unitPriceType
     *
     * @return self
     */
    public function setUnitPriceType($unitPriceType)
    {
        if (is_null($unitPriceType)) {
            throw new \InvalidArgumentException('non-nullable unitPriceType cannot be null');
        }
        $this->container['unitPriceType'] = $unitPriceType;

        return $this;
    }

    /**
     * Gets unit
     *
     * @return string
     */
    public function getUnit()
    {
        return $this->container['unit'];
    }

    /**
     * Sets unit
     *
     * @param string $unit unit
     *
     * @return self
     */
    public function setUnit($unit)
    {
        if (is_null($unit)) {
            throw new \InvalidArgumentException('non-nullable unit cannot be null');
        }
        $this->container['unit'] = $unit;

        return $this;
    }

    /**
     * Gets vat
     *
     * @return \Cone\Billingo\Model\Vat
     */
    public function getVat()
    {
        return $this->container['vat'];
    }

    /**
     * Sets vat
     *
     * @param \Cone\Billingo\Model\Vat $vat vat
     *
     * @return self
     */
    public function setVat($vat)
    {
        if (is_null($vat)) {
            throw new \InvalidArgumentException('non-nullable vat cannot be null');
        }
        $this->container['vat'] = $vat;

        return $this;
    }

    /**
     * Gets entitlement
     *
     * @return \Cone\Billingo\Model\Entitlement|null
     */
    public function getEntitlement()
    {
        return $this->container['entitlement'];
    }

    /**
     * Sets entitlement
     *
     * @param \Cone\Billingo\Model\Entitlement|null $entitlement entitlement
     *
     * @return self
     */
    public function setEntitlement($entitlement)
    {
        if (is_null($entitlement)) {
            throw new \InvalidArgumentException('non-nullable entitlement cannot be null');
        }
        $this->container['entitlement'] = $entitlement;

        return $this;
    }

    /**
     * Gets sku
     *
     * @return string|null
     */
    public function getSku()
    {
        return $this->container['sku'];
    }

    /**
     * Sets sku
     *
     * @param string|null $sku sku
     *
     * @return self
     */
    public function setSku($sku)
    {
        if (is_null($sku)) {
            throw new \InvalidArgumentException('non-nullable sku cannot be null');
        }
        $this->container['sku'] = $sku;

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
