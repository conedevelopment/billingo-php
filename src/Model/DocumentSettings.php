<?php
/**
 * DocumentSettings
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
 * DocumentSettings Class Doc Comment
 *
 * @category Class
 * @package  Cone\Billingo
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class DocumentSettings implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'DocumentSettings';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'mediatedService' => 'bool',
        'withoutFinancialFulfillment' => 'bool',
        'onlinePayment' => '\Cone\Billingo\Model\OnlinePayment',
        'round' => '\Cone\Billingo\Model\Round',
        'noSendOnlineszamlaByUser' => 'bool',
        'orderNumber' => 'string',
        'placeId' => 'int',
        'instantPayment' => 'bool',
        'selectedType' => '\Cone\Billingo\Model\DocumentType'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'mediatedService' => null,
        'withoutFinancialFulfillment' => null,
        'onlinePayment' => null,
        'round' => null,
        'noSendOnlineszamlaByUser' => null,
        'orderNumber' => null,
        'placeId' => null,
        'instantPayment' => null,
        'selectedType' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'mediatedService' => false,
		'withoutFinancialFulfillment' => false,
		'onlinePayment' => false,
		'round' => false,
		'noSendOnlineszamlaByUser' => false,
		'orderNumber' => false,
		'placeId' => true,
		'instantPayment' => false,
		'selectedType' => false
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
        'mediatedService' => 'mediated_service',
        'withoutFinancialFulfillment' => 'without_financial_fulfillment',
        'onlinePayment' => 'online_payment',
        'round' => 'round',
        'noSendOnlineszamlaByUser' => 'no_send_onlineszamla_by_user',
        'orderNumber' => 'order_number',
        'placeId' => 'place_id',
        'instantPayment' => 'instant_payment',
        'selectedType' => 'selected_type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'mediatedService' => 'setMediatedService',
        'withoutFinancialFulfillment' => 'setWithoutFinancialFulfillment',
        'onlinePayment' => 'setOnlinePayment',
        'round' => 'setRound',
        'noSendOnlineszamlaByUser' => 'setNoSendOnlineszamlaByUser',
        'orderNumber' => 'setOrderNumber',
        'placeId' => 'setPlaceId',
        'instantPayment' => 'setInstantPayment',
        'selectedType' => 'setSelectedType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'mediatedService' => 'getMediatedService',
        'withoutFinancialFulfillment' => 'getWithoutFinancialFulfillment',
        'onlinePayment' => 'getOnlinePayment',
        'round' => 'getRound',
        'noSendOnlineszamlaByUser' => 'getNoSendOnlineszamlaByUser',
        'orderNumber' => 'getOrderNumber',
        'placeId' => 'getPlaceId',
        'instantPayment' => 'getInstantPayment',
        'selectedType' => 'getSelectedType'
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
        $this->setIfExists('mediatedService', $data ?? [], false);
        $this->setIfExists('withoutFinancialFulfillment', $data ?? [], false);
        $this->setIfExists('onlinePayment', $data ?? [], null);
        $this->setIfExists('round', $data ?? [], null);
        $this->setIfExists('noSendOnlineszamlaByUser', $data ?? [], null);
        $this->setIfExists('orderNumber', $data ?? [], null);
        $this->setIfExists('placeId', $data ?? [], null);
        $this->setIfExists('instantPayment', $data ?? [], null);
        $this->setIfExists('selectedType', $data ?? [], null);
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
     * Gets mediatedService
     *
     * @return bool|null
     */
    public function getMediatedService()
    {
        return $this->container['mediatedService'];
    }

    /**
     * Sets mediatedService
     *
     * @param bool|null $mediatedService mediatedService
     *
     * @return self
     */
    public function setMediatedService($mediatedService)
    {
        if (is_null($mediatedService)) {
            throw new \InvalidArgumentException('non-nullable mediatedService cannot be null');
        }
        $this->container['mediatedService'] = $mediatedService;

        return $this;
    }

    /**
     * Gets withoutFinancialFulfillment
     *
     * @return bool|null
     */
    public function getWithoutFinancialFulfillment()
    {
        return $this->container['withoutFinancialFulfillment'];
    }

    /**
     * Sets withoutFinancialFulfillment
     *
     * @param bool|null $withoutFinancialFulfillment withoutFinancialFulfillment
     *
     * @return self
     */
    public function setWithoutFinancialFulfillment($withoutFinancialFulfillment)
    {
        if (is_null($withoutFinancialFulfillment)) {
            throw new \InvalidArgumentException('non-nullable withoutFinancialFulfillment cannot be null');
        }
        $this->container['withoutFinancialFulfillment'] = $withoutFinancialFulfillment;

        return $this;
    }

    /**
     * Gets onlinePayment
     *
     * @return \Cone\Billingo\Model\OnlinePayment|null
     */
    public function getOnlinePayment()
    {
        return $this->container['onlinePayment'];
    }

    /**
     * Sets onlinePayment
     *
     * @param \Cone\Billingo\Model\OnlinePayment|null $onlinePayment onlinePayment
     *
     * @return self
     */
    public function setOnlinePayment($onlinePayment)
    {
        if (is_null($onlinePayment)) {
            throw new \InvalidArgumentException('non-nullable onlinePayment cannot be null');
        }
        $this->container['onlinePayment'] = $onlinePayment;

        return $this;
    }

    /**
     * Gets round
     *
     * @return \Cone\Billingo\Model\Round|null
     */
    public function getRound()
    {
        return $this->container['round'];
    }

    /**
     * Sets round
     *
     * @param \Cone\Billingo\Model\Round|null $round round
     *
     * @return self
     */
    public function setRound($round)
    {
        if (is_null($round)) {
            throw new \InvalidArgumentException('non-nullable round cannot be null');
        }
        $this->container['round'] = $round;

        return $this;
    }

    /**
     * Gets noSendOnlineszamlaByUser
     *
     * @return bool|null
     */
    public function getNoSendOnlineszamlaByUser()
    {
        return $this->container['noSendOnlineszamlaByUser'];
    }

    /**
     * Sets noSendOnlineszamlaByUser
     *
     * @param bool|null $noSendOnlineszamlaByUser noSendOnlineszamlaByUser
     *
     * @return self
     */
    public function setNoSendOnlineszamlaByUser($noSendOnlineszamlaByUser)
    {
        if (is_null($noSendOnlineszamlaByUser)) {
            throw new \InvalidArgumentException('non-nullable noSendOnlineszamlaByUser cannot be null');
        }
        $this->container['noSendOnlineszamlaByUser'] = $noSendOnlineszamlaByUser;

        return $this;
    }

    /**
     * Gets orderNumber
     *
     * @return string|null
     */
    public function getOrderNumber()
    {
        return $this->container['orderNumber'];
    }

    /**
     * Sets orderNumber
     *
     * @param string|null $orderNumber orderNumber
     *
     * @return self
     */
    public function setOrderNumber($orderNumber)
    {
        if (is_null($orderNumber)) {
            throw new \InvalidArgumentException('non-nullable orderNumber cannot be null');
        }
        $this->container['orderNumber'] = $orderNumber;

        return $this;
    }

    /**
     * Gets placeId
     *
     * @return int|null
     */
    public function getPlaceId()
    {
        return $this->container['placeId'];
    }

    /**
     * Sets placeId
     *
     * @param int|null $placeId placeId
     *
     * @return self
     */
    public function setPlaceId($placeId)
    {
        if (is_null($placeId)) {
            array_push($this->openAPINullablesSetToNull, 'placeId');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('placeId', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['placeId'] = $placeId;

        return $this;
    }

    /**
     * Gets instantPayment
     *
     * @return bool|null
     */
    public function getInstantPayment()
    {
        return $this->container['instantPayment'];
    }

    /**
     * Sets instantPayment
     *
     * @param bool|null $instantPayment instantPayment
     *
     * @return self
     */
    public function setInstantPayment($instantPayment)
    {
        if (is_null($instantPayment)) {
            throw new \InvalidArgumentException('non-nullable instantPayment cannot be null');
        }
        $this->container['instantPayment'] = $instantPayment;

        return $this;
    }

    /**
     * Gets selectedType
     *
     * @return \Cone\Billingo\Model\DocumentType|null
     */
    public function getSelectedType()
    {
        return $this->container['selectedType'];
    }

    /**
     * Sets selectedType
     *
     * @param \Cone\Billingo\Model\DocumentType|null $selectedType selectedType
     *
     * @return self
     */
    public function setSelectedType($selectedType)
    {
        if (is_null($selectedType)) {
            throw new \InvalidArgumentException('non-nullable selectedType cannot be null');
        }
        $this->container['selectedType'] = $selectedType;

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

