<?php
/**
 * InvoiceSettings
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
 * InvoiceSettings Class Doc Comment
 *
 * @category Class
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class InvoiceSettings implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'InvoiceSettings';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'documentType' => '\Cone\Billingo\Model\DocumentType',
        'fulfillmentDate' => '\DateTime',
        'dueDate' => '\DateTime',
        'documentFormat' => '\Cone\Billingo\Model\DocumentFormat',
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
        'documentType' => null,
        'fulfillmentDate' => 'date',
        'dueDate' => 'date',
        'documentFormat' => null,
        'comment' => null,
    ];

    /**
     * Array of nullable properties. Used for (de)serialization
     *
     * @var bool[]
     */
    protected static array $openAPINullables = [
        'documentType' => false,
        'fulfillmentDate' => false,
        'dueDate' => false,
        'documentFormat' => false,
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
        'documentType' => 'document_type',
        'fulfillmentDate' => 'fulfillment_date',
        'dueDate' => 'due_date',
        'documentFormat' => 'document_format',
        'comment' => 'comment',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'documentType' => 'setDocumentType',
        'fulfillmentDate' => 'setFulfillmentDate',
        'dueDate' => 'setDueDate',
        'documentFormat' => 'setDocumentFormat',
        'comment' => 'setComment',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'documentType' => 'getDocumentType',
        'fulfillmentDate' => 'getFulfillmentDate',
        'dueDate' => 'getDueDate',
        'documentFormat' => 'getDocumentFormat',
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
        $this->setIfExists('documentType', $data ?? [], null);
        $this->setIfExists('fulfillmentDate', $data ?? [], null);
        $this->setIfExists('dueDate', $data ?? [], null);
        $this->setIfExists('documentFormat', $data ?? [], null);
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
     * Gets documentType
     *
     * @return \Cone\Billingo\Model\DocumentType|null
     */
    public function getDocumentType()
    {
        return $this->container['documentType'];
    }

    /**
     * Sets documentType
     *
     * @param \Cone\Billingo\Model\DocumentType|null $documentType documentType
     *
     * @return self
     */
    public function setDocumentType($documentType)
    {
        if (is_null($documentType)) {
            throw new \InvalidArgumentException('non-nullable documentType cannot be null');
        }
        $this->container['documentType'] = $documentType;

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
     * Gets documentFormat
     *
     * @return \Cone\Billingo\Model\DocumentFormat|null
     */
    public function getDocumentFormat()
    {
        return $this->container['documentFormat'];
    }

    /**
     * Sets documentFormat
     *
     * @param \Cone\Billingo\Model\DocumentFormat|null $documentFormat documentFormat
     *
     * @return self
     */
    public function setDocumentFormat($documentFormat)
    {
        if (is_null($documentFormat)) {
            throw new \InvalidArgumentException('non-nullable documentFormat cannot be null');
        }
        $this->container['documentFormat'] = $documentFormat;

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
