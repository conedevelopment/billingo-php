<?php

/**
 * DocumentExportFilterExtra
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
 * Generator version: 7.11.0
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
 * DocumentExportFilterExtra Class Doc Comment
 *
 * @category Class
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class DocumentExportFilterExtra implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'DocumentExportFilterExtra';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'tensoftVkod' => 'string',
        'ledgerNumber' => '\Cone\Billingo\Model\LedgerNumberInformation',
        'forintsoftKonyvelesiNaploSzam' => 'string',
        'positiveLedgerNumber' => 'string',
        'negativeLedgerNumber' => 'string',
        'rlbKata' => 'bool',
        'rlbNote' => 'string',
        'novitaxNaplokod' => 'string',
        'useGrossValues' => 'bool',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        'tensoftVkod' => null,
        'ledgerNumber' => null,
        'forintsoftKonyvelesiNaploSzam' => null,
        'positiveLedgerNumber' => null,
        'negativeLedgerNumber' => null,
        'rlbKata' => null,
        'rlbNote' => null,
        'novitaxNaplokod' => null,
        'useGrossValues' => null,
    ];

    /**
     * Array of nullable properties. Used for (de)serialization
     *
     * @var bool[]
     */
    protected static array $openAPINullables = [
        'tensoftVkod' => false,
        'ledgerNumber' => false,
        'forintsoftKonyvelesiNaploSzam' => false,
        'positiveLedgerNumber' => false,
        'negativeLedgerNumber' => false,
        'rlbKata' => false,
        'rlbNote' => false,
        'novitaxNaplokod' => false,
        'useGrossValues' => false,
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
        'tensoftVkod' => 'tensoft_vkod',
        'ledgerNumber' => 'ledger_number',
        'forintsoftKonyvelesiNaploSzam' => 'forintsoft_konyvelesi_naplo_szam',
        'positiveLedgerNumber' => 'positive_ledger_number',
        'negativeLedgerNumber' => 'negative_ledger_number',
        'rlbKata' => 'rlb_kata',
        'rlbNote' => 'rlb_note',
        'novitaxNaplokod' => 'novitax_naplokod',
        'useGrossValues' => 'use_gross_values',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'tensoftVkod' => 'setTensoftVkod',
        'ledgerNumber' => 'setLedgerNumber',
        'forintsoftKonyvelesiNaploSzam' => 'setForintsoftKonyvelesiNaploSzam',
        'positiveLedgerNumber' => 'setPositiveLedgerNumber',
        'negativeLedgerNumber' => 'setNegativeLedgerNumber',
        'rlbKata' => 'setRlbKata',
        'rlbNote' => 'setRlbNote',
        'novitaxNaplokod' => 'setNovitaxNaplokod',
        'useGrossValues' => 'setUseGrossValues',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'tensoftVkod' => 'getTensoftVkod',
        'ledgerNumber' => 'getLedgerNumber',
        'forintsoftKonyvelesiNaploSzam' => 'getForintsoftKonyvelesiNaploSzam',
        'positiveLedgerNumber' => 'getPositiveLedgerNumber',
        'negativeLedgerNumber' => 'getNegativeLedgerNumber',
        'rlbKata' => 'getRlbKata',
        'rlbNote' => 'getRlbNote',
        'novitaxNaplokod' => 'getNovitaxNaplokod',
        'useGrossValues' => 'getUseGrossValues',
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
     * @param mixed[]|null $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(?array $data = null)
    {
        $this->setIfExists('tensoftVkod', $data ?? [], null);
        $this->setIfExists('ledgerNumber', $data ?? [], null);
        $this->setIfExists('forintsoftKonyvelesiNaploSzam', $data ?? [], null);
        $this->setIfExists('positiveLedgerNumber', $data ?? [], null);
        $this->setIfExists('negativeLedgerNumber', $data ?? [], null);
        $this->setIfExists('rlbKata', $data ?? [], null);
        $this->setIfExists('rlbNote', $data ?? [], null);
        $this->setIfExists('novitaxNaplokod', $data ?? [], null);
        $this->setIfExists('useGrossValues', $data ?? [], null);
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
     * Gets tensoftVkod
     *
     * @return string|null
     */
    public function getTensoftVkod()
    {
        return $this->container['tensoftVkod'];
    }

    /**
     * Sets tensoftVkod
     *
     * @param string|null $tensoftVkod tensoftVkod
     *
     * @return self
     */
    public function setTensoftVkod($tensoftVkod)
    {
        if (is_null($tensoftVkod)) {
            throw new \InvalidArgumentException('non-nullable tensoftVkod cannot be null');
        }
        $this->container['tensoftVkod'] = $tensoftVkod;

        return $this;
    }

    /**
     * Gets ledgerNumber
     *
     * @return \Cone\Billingo\Model\LedgerNumberInformation|null
     */
    public function getLedgerNumber()
    {
        return $this->container['ledgerNumber'];
    }

    /**
     * Sets ledgerNumber
     *
     * @param \Cone\Billingo\Model\LedgerNumberInformation|null $ledgerNumber ledgerNumber
     *
     * @return self
     */
    public function setLedgerNumber($ledgerNumber)
    {
        if (is_null($ledgerNumber)) {
            throw new \InvalidArgumentException('non-nullable ledgerNumber cannot be null');
        }
        $this->container['ledgerNumber'] = $ledgerNumber;

        return $this;
    }

    /**
     * Gets forintsoftKonyvelesiNaploSzam
     *
     * @return string|null
     */
    public function getForintsoftKonyvelesiNaploSzam()
    {
        return $this->container['forintsoftKonyvelesiNaploSzam'];
    }

    /**
     * Sets forintsoftKonyvelesiNaploSzam
     *
     * @param string|null $forintsoftKonyvelesiNaploSzam forintsoftKonyvelesiNaploSzam
     *
     * @return self
     */
    public function setForintsoftKonyvelesiNaploSzam($forintsoftKonyvelesiNaploSzam)
    {
        if (is_null($forintsoftKonyvelesiNaploSzam)) {
            throw new \InvalidArgumentException('non-nullable forintsoftKonyvelesiNaploSzam cannot be null');
        }
        $this->container['forintsoftKonyvelesiNaploSzam'] = $forintsoftKonyvelesiNaploSzam;

        return $this;
    }

    /**
     * Gets positiveLedgerNumber
     *
     * @return string|null
     */
    public function getPositiveLedgerNumber()
    {
        return $this->container['positiveLedgerNumber'];
    }

    /**
     * Sets positiveLedgerNumber
     *
     * @param string|null $positiveLedgerNumber positiveLedgerNumber
     *
     * @return self
     */
    public function setPositiveLedgerNumber($positiveLedgerNumber)
    {
        if (is_null($positiveLedgerNumber)) {
            throw new \InvalidArgumentException('non-nullable positiveLedgerNumber cannot be null');
        }
        $this->container['positiveLedgerNumber'] = $positiveLedgerNumber;

        return $this;
    }

    /**
     * Gets negativeLedgerNumber
     *
     * @return string|null
     */
    public function getNegativeLedgerNumber()
    {
        return $this->container['negativeLedgerNumber'];
    }

    /**
     * Sets negativeLedgerNumber
     *
     * @param string|null $negativeLedgerNumber negativeLedgerNumber
     *
     * @return self
     */
    public function setNegativeLedgerNumber($negativeLedgerNumber)
    {
        if (is_null($negativeLedgerNumber)) {
            throw new \InvalidArgumentException('non-nullable negativeLedgerNumber cannot be null');
        }
        $this->container['negativeLedgerNumber'] = $negativeLedgerNumber;

        return $this;
    }

    /**
     * Gets rlbKata
     *
     * @return bool|null
     */
    public function getRlbKata()
    {
        return $this->container['rlbKata'];
    }

    /**
     * Sets rlbKata
     *
     * @param bool|null $rlbKata rlbKata
     *
     * @return self
     */
    public function setRlbKata($rlbKata)
    {
        if (is_null($rlbKata)) {
            throw new \InvalidArgumentException('non-nullable rlbKata cannot be null');
        }
        $this->container['rlbKata'] = $rlbKata;

        return $this;
    }

    /**
     * Gets rlbNote
     *
     * @return string|null
     */
    public function getRlbNote()
    {
        return $this->container['rlbNote'];
    }

    /**
     * Sets rlbNote
     *
     * @param string|null $rlbNote rlbNote
     *
     * @return self
     */
    public function setRlbNote($rlbNote)
    {
        if (is_null($rlbNote)) {
            throw new \InvalidArgumentException('non-nullable rlbNote cannot be null');
        }
        $this->container['rlbNote'] = $rlbNote;

        return $this;
    }

    /**
     * Gets novitaxNaplokod
     *
     * @return string|null
     */
    public function getNovitaxNaplokod()
    {
        return $this->container['novitaxNaplokod'];
    }

    /**
     * Sets novitaxNaplokod
     *
     * @param string|null $novitaxNaplokod novitaxNaplokod
     *
     * @return self
     */
    public function setNovitaxNaplokod($novitaxNaplokod)
    {
        if (is_null($novitaxNaplokod)) {
            throw new \InvalidArgumentException('non-nullable novitaxNaplokod cannot be null');
        }
        $this->container['novitaxNaplokod'] = $novitaxNaplokod;

        return $this;
    }

    /**
     * Gets useGrossValues
     *
     * @return bool|null
     */
    public function getUseGrossValues()
    {
        return $this->container['useGrossValues'];
    }

    /**
     * Sets useGrossValues
     *
     * @param bool|null $useGrossValues useGrossValues
     *
     * @return self
     */
    public function setUseGrossValues($useGrossValues)
    {
        if (is_null($useGrossValues)) {
            throw new \InvalidArgumentException('non-nullable useGrossValues cannot be null');
        }
        $this->container['useGrossValues'] = $useGrossValues;

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
