<?php
/**
 * CreateDocumentExport
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
 * CreateDocumentExport Class Doc Comment
 *
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class CreateDocumentExport implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static string $openAPIModelName = 'CreateDocumentExport';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var array<string, string>
     */
    protected static array $openAPITypes = [
        'queryType' => '\Cone\Billingo\Model\DocumentExportQueryType',
        'startDate' => '\DateTime',
        'endDate' => '\DateTime',
        'documentBlockId' => 'int',
        'exportType' => '\Cone\Billingo\Model\DocumentExportType',
        'numberStartYear' => 'int',
        'numberStartSequence' => 'int',
        'numberEndYear' => 'int',
        'numberEndSequence' => 'int',
        'paymentMethod' => '\Cone\Billingo\Model\PaymentMethod',
        'sortBy' => '\Cone\Billingo\Model\DocumentExportSortBy',
        'otherOptions' => '\Cone\Billingo\Model\DocumentExportOtherOptions',
        'filterExtra' => '\Cone\Billingo\Model\DocumentExportFilterExtra',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var array<string, string|null>
     */
    protected static array $openAPIFormats = [
        'queryType' => null,
        'startDate' => 'date',
        'endDate' => 'date',
        'documentBlockId' => null,
        'exportType' => null,
        'numberStartYear' => null,
        'numberStartSequence' => null,
        'numberEndYear' => null,
        'numberEndSequence' => null,
        'paymentMethod' => null,
        'sortBy' => null,
        'otherOptions' => null,
        'filterExtra' => null,
    ];

    /**
     * Array of nullable properties. Used for (de)serialization
     *
     * @var array<string, bool>
     */
    protected static array $openAPINullables = [
        'queryType' => false,
        'startDate' => false,
        'endDate' => false,
        'documentBlockId' => false,
        'exportType' => false,
        'numberStartYear' => false,
        'numberStartSequence' => false,
        'numberEndYear' => false,
        'numberEndSequence' => false,
        'paymentMethod' => false,
        'sortBy' => false,
        'otherOptions' => false,
        'filterExtra' => false,
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
        'queryType' => 'query_type',
        'startDate' => 'start_date',
        'endDate' => 'end_date',
        'documentBlockId' => 'document_block_id',
        'exportType' => 'export_type',
        'numberStartYear' => 'number_start_year',
        'numberStartSequence' => 'number_start_sequence',
        'numberEndYear' => 'number_end_year',
        'numberEndSequence' => 'number_end_sequence',
        'paymentMethod' => 'payment_method',
        'sortBy' => 'sort_by',
        'otherOptions' => 'other_options',
        'filterExtra' => 'filter_extra',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'queryType' => 'setQueryType',
        'startDate' => 'setStartDate',
        'endDate' => 'setEndDate',
        'documentBlockId' => 'setDocumentBlockId',
        'exportType' => 'setExportType',
        'numberStartYear' => 'setNumberStartYear',
        'numberStartSequence' => 'setNumberStartSequence',
        'numberEndYear' => 'setNumberEndYear',
        'numberEndSequence' => 'setNumberEndSequence',
        'paymentMethod' => 'setPaymentMethod',
        'sortBy' => 'setSortBy',
        'otherOptions' => 'setOtherOptions',
        'filterExtra' => 'setFilterExtra',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'queryType' => 'getQueryType',
        'startDate' => 'getStartDate',
        'endDate' => 'getEndDate',
        'documentBlockId' => 'getDocumentBlockId',
        'exportType' => 'getExportType',
        'numberStartYear' => 'getNumberStartYear',
        'numberStartSequence' => 'getNumberStartSequence',
        'numberEndYear' => 'getNumberEndYear',
        'numberEndSequence' => 'getNumberEndSequence',
        'paymentMethod' => 'getPaymentMethod',
        'sortBy' => 'getSortBy',
        'otherOptions' => 'getOtherOptions',
        'filterExtra' => 'getFilterExtra',
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
        $this->setIfExists('queryType', $data ?? [], null);
        $this->setIfExists('startDate', $data ?? [], null);
        $this->setIfExists('endDate', $data ?? [], null);
        $this->setIfExists('documentBlockId', $data ?? [], null);
        $this->setIfExists('exportType', $data ?? [], null);
        $this->setIfExists('numberStartYear', $data ?? [], null);
        $this->setIfExists('numberStartSequence', $data ?? [], null);
        $this->setIfExists('numberEndYear', $data ?? [], null);
        $this->setIfExists('numberEndSequence', $data ?? [], null);
        $this->setIfExists('paymentMethod', $data ?? [], null);
        $this->setIfExists('sortBy', $data ?? [], null);
        $this->setIfExists('otherOptions', $data ?? [], null);
        $this->setIfExists('filterExtra', $data ?? [], null);
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

        if ($this->container['queryType'] === null) {
            $invalidProperties[] = "'queryType' can't be null";
        }
        if ($this->container['startDate'] === null) {
            $invalidProperties[] = "'startDate' can't be null";
        }
        if ($this->container['endDate'] === null) {
            $invalidProperties[] = "'endDate' can't be null";
        }
        if ($this->container['exportType'] === null) {
            $invalidProperties[] = "'exportType' can't be null";
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
     * Gets queryType
     *
     * @return \Cone\Billingo\Model\DocumentExportQueryType
     */
    public function getQueryType(): \Cone\Billingo\Model\DocumentExportQueryType
    {
        return $this->container['queryType'];
    }

    /**
     * Sets queryType
     *
     * @param \Cone\Billingo\Model\DocumentExportQueryType $queryType queryType
     *
     * @return $this
     */
    public function setQueryType(\Cone\Billingo\Model\DocumentExportQueryType $queryType): static
    {
        if (is_null($queryType)) {
            throw new InvalidArgumentException('non-nullable queryType cannot be null');
        }
        $this->container['queryType'] = $queryType;

        return $this;
    }

    /**
     * Gets startDate
     *
     * @return \DateTime
     */
    public function getStartDate(): \DateTime
    {
        return $this->container['startDate'];
    }

    /**
     * Sets startDate
     *
     * @param \DateTime $startDate startDate
     *
     * @return $this
     */
    public function setStartDate(\DateTime $startDate): static
    {
        if (is_null($startDate)) {
            throw new InvalidArgumentException('non-nullable startDate cannot be null');
        }
        $this->container['startDate'] = $startDate;

        return $this;
    }

    /**
     * Gets endDate
     *
     * @return \DateTime
     */
    public function getEndDate(): \DateTime
    {
        return $this->container['endDate'];
    }

    /**
     * Sets endDate
     *
     * @param \DateTime $endDate endDate
     *
     * @return $this
     */
    public function setEndDate(\DateTime $endDate): static
    {
        if (is_null($endDate)) {
            throw new InvalidArgumentException('non-nullable endDate cannot be null');
        }
        $this->container['endDate'] = $endDate;

        return $this;
    }

    /**
     * Gets documentBlockId
     *
     * @return int|null
     */
    public function getDocumentBlockId(): ?int
    {
        return $this->container['documentBlockId'];
    }

    /**
     * Sets documentBlockId
     *
     * @param int|null $documentBlockId documentBlockId
     *
     * @return $this
     */
    public function setDocumentBlockId(?int $documentBlockId): static
    {
        if (is_null($documentBlockId)) {
            throw new InvalidArgumentException('non-nullable documentBlockId cannot be null');
        }
        $this->container['documentBlockId'] = $documentBlockId;

        return $this;
    }

    /**
     * Gets exportType
     *
     * @return \Cone\Billingo\Model\DocumentExportType
     */
    public function getExportType(): \Cone\Billingo\Model\DocumentExportType
    {
        return $this->container['exportType'];
    }

    /**
     * Sets exportType
     *
     * @param \Cone\Billingo\Model\DocumentExportType $exportType exportType
     *
     * @return $this
     */
    public function setExportType(\Cone\Billingo\Model\DocumentExportType $exportType): static
    {
        if (is_null($exportType)) {
            throw new InvalidArgumentException('non-nullable exportType cannot be null');
        }
        $this->container['exportType'] = $exportType;

        return $this;
    }

    /**
     * Gets numberStartYear
     *
     * @return int|null
     */
    public function getNumberStartYear(): ?int
    {
        return $this->container['numberStartYear'];
    }

    /**
     * Sets numberStartYear
     *
     * @param int|null $numberStartYear numberStartYear
     *
     * @return $this
     */
    public function setNumberStartYear(?int $numberStartYear): static
    {
        if (is_null($numberStartYear)) {
            throw new InvalidArgumentException('non-nullable numberStartYear cannot be null');
        }
        $this->container['numberStartYear'] = $numberStartYear;

        return $this;
    }

    /**
     * Gets numberStartSequence
     *
     * @return int|null
     */
    public function getNumberStartSequence(): ?int
    {
        return $this->container['numberStartSequence'];
    }

    /**
     * Sets numberStartSequence
     *
     * @param int|null $numberStartSequence numberStartSequence
     *
     * @return $this
     */
    public function setNumberStartSequence(?int $numberStartSequence): static
    {
        if (is_null($numberStartSequence)) {
            throw new InvalidArgumentException('non-nullable numberStartSequence cannot be null');
        }
        $this->container['numberStartSequence'] = $numberStartSequence;

        return $this;
    }

    /**
     * Gets numberEndYear
     *
     * @return int|null
     */
    public function getNumberEndYear(): ?int
    {
        return $this->container['numberEndYear'];
    }

    /**
     * Sets numberEndYear
     *
     * @param int|null $numberEndYear numberEndYear
     *
     * @return $this
     */
    public function setNumberEndYear(?int $numberEndYear): static
    {
        if (is_null($numberEndYear)) {
            throw new InvalidArgumentException('non-nullable numberEndYear cannot be null');
        }
        $this->container['numberEndYear'] = $numberEndYear;

        return $this;
    }

    /**
     * Gets numberEndSequence
     *
     * @return int|null
     */
    public function getNumberEndSequence(): ?int
    {
        return $this->container['numberEndSequence'];
    }

    /**
     * Sets numberEndSequence
     *
     * @param int|null $numberEndSequence numberEndSequence
     *
     * @return $this
     */
    public function setNumberEndSequence(?int $numberEndSequence): static
    {
        if (is_null($numberEndSequence)) {
            throw new InvalidArgumentException('non-nullable numberEndSequence cannot be null');
        }
        $this->container['numberEndSequence'] = $numberEndSequence;

        return $this;
    }

    /**
     * Gets paymentMethod
     *
     * @return \Cone\Billingo\Model\PaymentMethod|null
     */
    public function getPaymentMethod(): ?\Cone\Billingo\Model\PaymentMethod
    {
        return $this->container['paymentMethod'];
    }

    /**
     * Sets paymentMethod
     *
     * @param \Cone\Billingo\Model\PaymentMethod|null $paymentMethod paymentMethod
     *
     * @return $this
     */
    public function setPaymentMethod(?\Cone\Billingo\Model\PaymentMethod $paymentMethod): static
    {
        if (is_null($paymentMethod)) {
            throw new InvalidArgumentException('non-nullable paymentMethod cannot be null');
        }
        $this->container['paymentMethod'] = $paymentMethod;

        return $this;
    }

    /**
     * Gets sortBy
     *
     * @return \Cone\Billingo\Model\DocumentExportSortBy|null
     */
    public function getSortBy(): ?\Cone\Billingo\Model\DocumentExportSortBy
    {
        return $this->container['sortBy'];
    }

    /**
     * Sets sortBy
     *
     * @param \Cone\Billingo\Model\DocumentExportSortBy|null $sortBy sortBy
     *
     * @return $this
     */
    public function setSortBy(?\Cone\Billingo\Model\DocumentExportSortBy $sortBy): static
    {
        if (is_null($sortBy)) {
            throw new InvalidArgumentException('non-nullable sortBy cannot be null');
        }
        $this->container['sortBy'] = $sortBy;

        return $this;
    }

    /**
     * Gets otherOptions
     *
     * @return \Cone\Billingo\Model\DocumentExportOtherOptions|null
     */
    public function getOtherOptions(): ?\Cone\Billingo\Model\DocumentExportOtherOptions
    {
        return $this->container['otherOptions'];
    }

    /**
     * Sets otherOptions
     *
     * @param \Cone\Billingo\Model\DocumentExportOtherOptions|null $otherOptions otherOptions
     *
     * @return $this
     */
    public function setOtherOptions(?\Cone\Billingo\Model\DocumentExportOtherOptions $otherOptions): static
    {
        if (is_null($otherOptions)) {
            throw new InvalidArgumentException('non-nullable otherOptions cannot be null');
        }
        $this->container['otherOptions'] = $otherOptions;

        return $this;
    }

    /**
     * Gets filterExtra
     *
     * @return \Cone\Billingo\Model\DocumentExportFilterExtra|null
     */
    public function getFilterExtra(): ?\Cone\Billingo\Model\DocumentExportFilterExtra
    {
        return $this->container['filterExtra'];
    }

    /**
     * Sets filterExtra
     *
     * @param \Cone\Billingo\Model\DocumentExportFilterExtra|null $filterExtra filterExtra
     *
     * @return $this
     */
    public function setFilterExtra(?\Cone\Billingo\Model\DocumentExportFilterExtra $filterExtra): static
    {
        if (is_null($filterExtra)) {
            throw new InvalidArgumentException('non-nullable filterExtra cannot be null');
        }
        $this->container['filterExtra'] = $filterExtra;

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
