<?php
/**
 * PartnerCustomBillingSettings
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
 * PartnerCustomBillingSettings Class Doc Comment
 *
 * @category Class
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class PartnerCustomBillingSettings implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'PartnerCustomBillingSettings';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'paymentMethod' => '\Cone\Billingo\Model\PaymentMethod',
        'documentForm' => '\Cone\Billingo\Model\DocumentForm',
        'dueDays' => 'int',
        'documentCurrency' => '\Cone\Billingo\Model\Currency',
        'templateLanguageCode' => '\Cone\Billingo\Model\DocumentLanguage',
        'discount' => '\Cone\Billingo\Model\Discount',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        'paymentMethod' => null,
        'documentForm' => null,
        'dueDays' => null,
        'documentCurrency' => null,
        'templateLanguageCode' => null,
        'discount' => null,
    ];

    /**
     * Array of nullable properties. Used for (de)serialization
     *
     * @var bool[]
     */
    protected static array $openAPINullables = [
        'paymentMethod' => false,
        'documentForm' => false,
        'dueDays' => false,
        'documentCurrency' => false,
        'templateLanguageCode' => false,
        'discount' => false,
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
        'paymentMethod' => 'payment_method',
        'documentForm' => 'document_form',
        'dueDays' => 'due_days',
        'documentCurrency' => 'document_currency',
        'templateLanguageCode' => 'template_language_code',
        'discount' => 'discount',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'paymentMethod' => 'setPaymentMethod',
        'documentForm' => 'setDocumentForm',
        'dueDays' => 'setDueDays',
        'documentCurrency' => 'setDocumentCurrency',
        'templateLanguageCode' => 'setTemplateLanguageCode',
        'discount' => 'setDiscount',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'paymentMethod' => 'getPaymentMethod',
        'documentForm' => 'getDocumentForm',
        'dueDays' => 'getDueDays',
        'documentCurrency' => 'getDocumentCurrency',
        'templateLanguageCode' => 'getTemplateLanguageCode',
        'discount' => 'getDiscount',
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
        $this->setIfExists('paymentMethod', $data ?? [], null);
        $this->setIfExists('documentForm', $data ?? [], null);
        $this->setIfExists('dueDays', $data ?? [], null);
        $this->setIfExists('documentCurrency', $data ?? [], null);
        $this->setIfExists('templateLanguageCode', $data ?? [], null);
        $this->setIfExists('discount', $data ?? [], null);
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
     * Gets paymentMethod
     *
     * @return \Cone\Billingo\Model\PaymentMethod|null
     */
    public function getPaymentMethod()
    {
        return $this->container['paymentMethod'];
    }

    /**
     * Sets paymentMethod
     *
     * @param \Cone\Billingo\Model\PaymentMethod|null $paymentMethod paymentMethod
     *
     * @return self
     */
    public function setPaymentMethod($paymentMethod)
    {
        if (is_null($paymentMethod)) {
            throw new \InvalidArgumentException('non-nullable paymentMethod cannot be null');
        }
        $this->container['paymentMethod'] = $paymentMethod;

        return $this;
    }

    /**
     * Gets documentForm
     *
     * @return \Cone\Billingo\Model\DocumentForm|null
     */
    public function getDocumentForm()
    {
        return $this->container['documentForm'];
    }

    /**
     * Sets documentForm
     *
     * @param \Cone\Billingo\Model\DocumentForm|null $documentForm documentForm
     *
     * @return self
     */
    public function setDocumentForm($documentForm)
    {
        if (is_null($documentForm)) {
            throw new \InvalidArgumentException('non-nullable documentForm cannot be null');
        }
        $this->container['documentForm'] = $documentForm;

        return $this;
    }

    /**
     * Gets dueDays
     *
     * @return int|null
     */
    public function getDueDays()
    {
        return $this->container['dueDays'];
    }

    /**
     * Sets dueDays
     *
     * @param int|null $dueDays dueDays
     *
     * @return self
     */
    public function setDueDays($dueDays)
    {
        if (is_null($dueDays)) {
            throw new \InvalidArgumentException('non-nullable dueDays cannot be null');
        }
        $this->container['dueDays'] = $dueDays;

        return $this;
    }

    /**
     * Gets documentCurrency
     *
     * @return \Cone\Billingo\Model\Currency|null
     */
    public function getDocumentCurrency()
    {
        return $this->container['documentCurrency'];
    }

    /**
     * Sets documentCurrency
     *
     * @param \Cone\Billingo\Model\Currency|null $documentCurrency documentCurrency
     *
     * @return self
     */
    public function setDocumentCurrency($documentCurrency)
    {
        if (is_null($documentCurrency)) {
            throw new \InvalidArgumentException('non-nullable documentCurrency cannot be null');
        }
        $this->container['documentCurrency'] = $documentCurrency;

        return $this;
    }

    /**
     * Gets templateLanguageCode
     *
     * @return \Cone\Billingo\Model\DocumentLanguage|null
     */
    public function getTemplateLanguageCode()
    {
        return $this->container['templateLanguageCode'];
    }

    /**
     * Sets templateLanguageCode
     *
     * @param \Cone\Billingo\Model\DocumentLanguage|null $templateLanguageCode templateLanguageCode
     *
     * @return self
     */
    public function setTemplateLanguageCode($templateLanguageCode)
    {
        if (is_null($templateLanguageCode)) {
            throw new \InvalidArgumentException('non-nullable templateLanguageCode cannot be null');
        }
        $this->container['templateLanguageCode'] = $templateLanguageCode;

        return $this;
    }

    /**
     * Gets discount
     *
     * @return \Cone\Billingo\Model\Discount|null
     */
    public function getDiscount()
    {
        return $this->container['discount'];
    }

    /**
     * Sets discount
     *
     * @param \Cone\Billingo\Model\Discount|null $discount discount
     *
     * @return self
     */
    public function setDiscount($discount)
    {
        if (is_null($discount)) {
            throw new \InvalidArgumentException('non-nullable discount cannot be null');
        }
        $this->container['discount'] = $discount;

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
