<?php
/**
 * DocumentItem
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
 * OpenAPI Generator version: 7.2.0
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
 * DocumentItem Class Doc Comment
 *
 * @category Class
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class DocumentItem implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'DocumentItem';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'productId' => 'int',
        'name' => 'string',
        'netUnitAmount' => 'float',
        'quantity' => 'float',
        'unit' => 'string',
        'netAmount' => 'float',
        'grossAmount' => 'float',
        'vat' => '\Cone\Billingo\Model\Vat',
        'vatAmount' => 'float',
        'entitlement' => '\Cone\Billingo\Model\Entitlement',
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
        'productId' => null,
        'name' => null,
        'netUnitAmount' => 'float',
        'quantity' => 'float',
        'unit' => null,
        'netAmount' => 'float',
        'grossAmount' => 'float',
        'vat' => null,
        'vatAmount' => 'float',
        'entitlement' => null,
        'comment' => null,
    ];

    /**
     * Array of nullable properties. Used for (de)serialization
     *
     * @var bool[]
     */
    protected static array $openAPINullables = [
        'productId' => true,
        'name' => false,
        'netUnitAmount' => false,
        'quantity' => false,
        'unit' => false,
        'netAmount' => false,
        'grossAmount' => false,
        'vat' => false,
        'vatAmount' => false,
        'entitlement' => false,
        'comment' => false,
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
        'name' => 'name',
        'netUnitAmount' => 'net_unit_amount',
        'quantity' => 'quantity',
        'unit' => 'unit',
        'netAmount' => 'net_amount',
        'grossAmount' => 'gross_amount',
        'vat' => 'vat',
        'vatAmount' => 'vat_amount',
        'entitlement' => 'entitlement',
        'comment' => 'comment',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'productId' => 'setProductId',
        'name' => 'setName',
        'netUnitAmount' => 'setNetUnitAmount',
        'quantity' => 'setQuantity',
        'unit' => 'setUnit',
        'netAmount' => 'setNetAmount',
        'grossAmount' => 'setGrossAmount',
        'vat' => 'setVat',
        'vatAmount' => 'setVatAmount',
        'entitlement' => 'setEntitlement',
        'comment' => 'setComment',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'productId' => 'getProductId',
        'name' => 'getName',
        'netUnitAmount' => 'getNetUnitAmount',
        'quantity' => 'getQuantity',
        'unit' => 'getUnit',
        'netAmount' => 'getNetAmount',
        'grossAmount' => 'getGrossAmount',
        'vat' => 'getVat',
        'vatAmount' => 'getVatAmount',
        'entitlement' => 'getEntitlement',
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
        $this->setIfExists('productId', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('netUnitAmount', $data ?? [], null);
        $this->setIfExists('quantity', $data ?? [], null);
        $this->setIfExists('unit', $data ?? [], null);
        $this->setIfExists('netAmount', $data ?? [], null);
        $this->setIfExists('grossAmount', $data ?? [], null);
        $this->setIfExists('vat', $data ?? [], null);
        $this->setIfExists('vatAmount', $data ?? [], null);
        $this->setIfExists('entitlement', $data ?? [], null);
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
     * Gets productId
     *
     * @return int|null
     */
    public function getProductId()
    {
        return $this->container['productId'];
    }

    /**
     * Sets productId
     *
     * @param int|null $productId productId
     *
     * @return self
     */
    public function setProductId($productId)
    {
        if (is_null($productId)) {
            array_push($this->openAPINullablesSetToNull, 'productId');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('productId', $nullablesSetToNull, true);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['productId'] = $productId;

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
     * Gets netUnitAmount
     *
     * @return float|null
     */
    public function getNetUnitAmount()
    {
        return $this->container['netUnitAmount'];
    }

    /**
     * Sets netUnitAmount
     *
     * @param float|null $netUnitAmount netUnitAmount
     *
     * @return self
     */
    public function setNetUnitAmount($netUnitAmount)
    {
        if (is_null($netUnitAmount)) {
            throw new \InvalidArgumentException('non-nullable netUnitAmount cannot be null');
        }
        $this->container['netUnitAmount'] = $netUnitAmount;

        return $this;
    }

    /**
     * Gets quantity
     *
     * @return float|null
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     *
     * @param float|null $quantity quantity
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
     * Gets unit
     *
     * @return string|null
     */
    public function getUnit()
    {
        return $this->container['unit'];
    }

    /**
     * Sets unit
     *
     * @param string|null $unit unit
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
     * Gets grossAmount
     *
     * @return float|null
     */
    public function getGrossAmount()
    {
        return $this->container['grossAmount'];
    }

    /**
     * Sets grossAmount
     *
     * @param float|null $grossAmount grossAmount
     *
     * @return self
     */
    public function setGrossAmount($grossAmount)
    {
        if (is_null($grossAmount)) {
            throw new \InvalidArgumentException('non-nullable grossAmount cannot be null');
        }
        $this->container['grossAmount'] = $grossAmount;

        return $this;
    }

    /**
     * Gets vat
     *
     * @return \Cone\Billingo\Model\Vat|null
     */
    public function getVat()
    {
        return $this->container['vat'];
    }

    /**
     * Sets vat
     *
     * @param \Cone\Billingo\Model\Vat|null $vat vat
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
