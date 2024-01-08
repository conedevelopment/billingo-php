<?php
/**
 * PartnerList
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
 * PartnerList Class Doc Comment
 *
 * @category Class
 * @description A object with a data property that contains an array of up to limit partners. Each entry in the array is a separate partner object. If no more partners are available, the resulting array will be empty.
 * @package  Cone\Billingo
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class PartnerList implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PartnerList';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'data' => '\Cone\Billingo\Model\Partner[]',
        'total' => 'int',
        'perPage' => 'int',
        'currentPage' => 'int',
        'lastPage' => 'int',
        'prevPageUrl' => 'string',
        'nextPageUrl' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'data' => null,
        'total' => null,
        'perPage' => null,
        'currentPage' => null,
        'lastPage' => null,
        'prevPageUrl' => null,
        'nextPageUrl' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'data' => false,
        'total' => false,
        'perPage' => false,
        'currentPage' => false,
        'lastPage' => false,
        'prevPageUrl' => false,
        'nextPageUrl' => false
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
        'data' => 'data',
        'total' => 'total',
        'perPage' => 'per_page',
        'currentPage' => 'current_page',
        'lastPage' => 'last_page',
        'prevPageUrl' => 'prev_page_url',
        'nextPageUrl' => 'next_page_url'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'data' => 'setData',
        'total' => 'setTotal',
        'perPage' => 'setPerPage',
        'currentPage' => 'setCurrentPage',
        'lastPage' => 'setLastPage',
        'prevPageUrl' => 'setPrevPageUrl',
        'nextPageUrl' => 'setNextPageUrl'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'data' => 'getData',
        'total' => 'getTotal',
        'perPage' => 'getPerPage',
        'currentPage' => 'getCurrentPage',
        'lastPage' => 'getLastPage',
        'prevPageUrl' => 'getPrevPageUrl',
        'nextPageUrl' => 'getNextPageUrl'
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
        $this->setIfExists('data', $data ?? [], null);
        $this->setIfExists('total', $data ?? [], null);
        $this->setIfExists('perPage', $data ?? [], null);
        $this->setIfExists('currentPage', $data ?? [], null);
        $this->setIfExists('lastPage', $data ?? [], null);
        $this->setIfExists('prevPageUrl', $data ?? [], null);
        $this->setIfExists('nextPageUrl', $data ?? [], null);
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
     * Gets data
     *
     * @return \Cone\Billingo\Model\Partner[]|null
     */
    public function getData()
    {
        return $this->container['data'];
    }

    /**
     * Sets data
     *
     * @param \Cone\Billingo\Model\Partner[]|null $data data
     *
     * @return self
     */
    public function setData($data)
    {
        if (is_null($data)) {
            throw new \InvalidArgumentException('non-nullable data cannot be null');
        }
        $this->container['data'] = $data;

        return $this;
    }

    /**
     * Gets total
     *
     * @return int|null
     */
    public function getTotal()
    {
        return $this->container['total'];
    }

    /**
     * Sets total
     *
     * @param int|null $total total
     *
     * @return self
     */
    public function setTotal($total)
    {
        if (is_null($total)) {
            throw new \InvalidArgumentException('non-nullable total cannot be null');
        }
        $this->container['total'] = $total;

        return $this;
    }

    /**
     * Gets perPage
     *
     * @return int|null
     */
    public function getPerPage()
    {
        return $this->container['perPage'];
    }

    /**
     * Sets perPage
     *
     * @param int|null $perPage perPage
     *
     * @return self
     */
    public function setPerPage($perPage)
    {
        if (is_null($perPage)) {
            throw new \InvalidArgumentException('non-nullable perPage cannot be null');
        }
        $this->container['perPage'] = $perPage;

        return $this;
    }

    /**
     * Gets currentPage
     *
     * @return int|null
     */
    public function getCurrentPage()
    {
        return $this->container['currentPage'];
    }

    /**
     * Sets currentPage
     *
     * @param int|null $currentPage currentPage
     *
     * @return self
     */
    public function setCurrentPage($currentPage)
    {
        if (is_null($currentPage)) {
            throw new \InvalidArgumentException('non-nullable currentPage cannot be null');
        }
        $this->container['currentPage'] = $currentPage;

        return $this;
    }

    /**
     * Gets lastPage
     *
     * @return int|null
     */
    public function getLastPage()
    {
        return $this->container['lastPage'];
    }

    /**
     * Sets lastPage
     *
     * @param int|null $lastPage lastPage
     *
     * @return self
     */
    public function setLastPage($lastPage)
    {
        if (is_null($lastPage)) {
            throw new \InvalidArgumentException('non-nullable lastPage cannot be null');
        }
        $this->container['lastPage'] = $lastPage;

        return $this;
    }

    /**
     * Gets prevPageUrl
     *
     * @return string|null
     */
    public function getPrevPageUrl()
    {
        return $this->container['prevPageUrl'];
    }

    /**
     * Sets prevPageUrl
     *
     * @param string|null $prevPageUrl prevPageUrl
     *
     * @return self
     */
    public function setPrevPageUrl($prevPageUrl)
    {
        if (is_null($prevPageUrl)) {
            throw new \InvalidArgumentException('non-nullable prevPageUrl cannot be null');
        }
        $this->container['prevPageUrl'] = $prevPageUrl;

        return $this;
    }

    /**
     * Gets nextPageUrl
     *
     * @return string|null
     */
    public function getNextPageUrl()
    {
        return $this->container['nextPageUrl'];
    }

    /**
     * Sets nextPageUrl
     *
     * @param string|null $nextPageUrl nextPageUrl
     *
     * @return self
     */
    public function setNextPageUrl($nextPageUrl)
    {
        if (is_null($nextPageUrl)) {
            throw new \InvalidArgumentException('non-nullable nextPageUrl cannot be null');
        }
        $this->container['nextPageUrl'] = $nextPageUrl;

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
