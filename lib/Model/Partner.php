<?php
/**
 * Partner
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
 * The version of the OpenAPI document: 3.0.15
 * Contact: hello@billingo.hu
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.6.0
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
 * Partner Class Doc Comment
 *
 * @category Class
 * @package  Cone\Billingo
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Partner implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Partner';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'name' => 'string',
        'address' => '\Cone\Billingo\Model\Address',
        'emails' => 'string[]',
        'taxcode' => 'string',
        'iban' => 'string',
        'swift' => 'string',
        'account_number' => 'string',
        'phone' => 'string',
        'general_ledger_number' => 'string',
        'tax_type' => '\Cone\Billingo\Model\PartnerTaxType',
        'custom_billing_settings' => '\Cone\Billingo\Model\PartnerCustomBillingSettings',
        'group_member_tax_number' => 'string',
        'giro_settings' => '\Cone\Billingo\Model\PartnerGiroSettings',
        'partner_shipping' => '\Cone\Billingo\Model\DocumentPartnerPartnerShipping',
        'internal_comment' => 'string',
        'partner_show_type' => '\Cone\Billingo\Model\PartnerPartnerShowType'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'address' => null,
        'emails' => null,
        'taxcode' => null,
        'iban' => null,
        'swift' => null,
        'account_number' => null,
        'phone' => null,
        'general_ledger_number' => null,
        'tax_type' => null,
        'custom_billing_settings' => null,
        'group_member_tax_number' => null,
        'giro_settings' => null,
        'partner_shipping' => null,
        'internal_comment' => null,
        'partner_show_type' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
		'name' => false,
		'address' => false,
		'emails' => false,
		'taxcode' => false,
		'iban' => false,
		'swift' => false,
		'account_number' => false,
		'phone' => false,
		'general_ledger_number' => false,
		'tax_type' => false,
		'custom_billing_settings' => false,
		'group_member_tax_number' => false,
		'giro_settings' => true,
		'partner_shipping' => true,
		'internal_comment' => true,
		'partner_show_type' => true
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
        'id' => 'id',
        'name' => 'name',
        'address' => 'address',
        'emails' => 'emails',
        'taxcode' => 'taxcode',
        'iban' => 'iban',
        'swift' => 'swift',
        'account_number' => 'account_number',
        'phone' => 'phone',
        'general_ledger_number' => 'general_ledger_number',
        'tax_type' => 'tax_type',
        'custom_billing_settings' => 'custom_billing_settings',
        'group_member_tax_number' => 'group_member_tax_number',
        'giro_settings' => 'giro_settings',
        'partner_shipping' => 'partner_shipping',
        'internal_comment' => 'internal_comment',
        'partner_show_type' => 'partner_show_type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'address' => 'setAddress',
        'emails' => 'setEmails',
        'taxcode' => 'setTaxcode',
        'iban' => 'setIban',
        'swift' => 'setSwift',
        'account_number' => 'setAccountNumber',
        'phone' => 'setPhone',
        'general_ledger_number' => 'setGeneralLedgerNumber',
        'tax_type' => 'setTaxType',
        'custom_billing_settings' => 'setCustomBillingSettings',
        'group_member_tax_number' => 'setGroupMemberTaxNumber',
        'giro_settings' => 'setGiroSettings',
        'partner_shipping' => 'setPartnerShipping',
        'internal_comment' => 'setInternalComment',
        'partner_show_type' => 'setPartnerShowType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'address' => 'getAddress',
        'emails' => 'getEmails',
        'taxcode' => 'getTaxcode',
        'iban' => 'getIban',
        'swift' => 'getSwift',
        'account_number' => 'getAccountNumber',
        'phone' => 'getPhone',
        'general_ledger_number' => 'getGeneralLedgerNumber',
        'tax_type' => 'getTaxType',
        'custom_billing_settings' => 'getCustomBillingSettings',
        'group_member_tax_number' => 'getGroupMemberTaxNumber',
        'giro_settings' => 'getGiroSettings',
        'partner_shipping' => 'getPartnerShipping',
        'internal_comment' => 'getInternalComment',
        'partner_show_type' => 'getPartnerShowType'
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
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('address', $data ?? [], null);
        $this->setIfExists('emails', $data ?? [], null);
        $this->setIfExists('taxcode', $data ?? [], null);
        $this->setIfExists('iban', $data ?? [], null);
        $this->setIfExists('swift', $data ?? [], null);
        $this->setIfExists('account_number', $data ?? [], null);
        $this->setIfExists('phone', $data ?? [], null);
        $this->setIfExists('general_ledger_number', $data ?? [], null);
        $this->setIfExists('tax_type', $data ?? [], null);
        $this->setIfExists('custom_billing_settings', $data ?? [], null);
        $this->setIfExists('group_member_tax_number', $data ?? [], null);
        $this->setIfExists('giro_settings', $data ?? [], null);
        $this->setIfExists('partner_shipping', $data ?? [], null);
        $this->setIfExists('internal_comment', $data ?? [], null);
        $this->setIfExists('partner_show_type', $data ?? [], null);
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
     * Gets id
     *
     * @return int|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int|null $id id
     *
     * @return self
     */
    public function setId($id)
    {
        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }
        $this->container['id'] = $id;

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
     * Gets address
     *
     * @return \Cone\Billingo\Model\Address|null
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param \Cone\Billingo\Model\Address|null $address address
     *
     * @return self
     */
    public function setAddress($address)
    {
        if (is_null($address)) {
            throw new \InvalidArgumentException('non-nullable address cannot be null');
        }
        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets emails
     *
     * @return string[]|null
     */
    public function getEmails()
    {
        return $this->container['emails'];
    }

    /**
     * Sets emails
     *
     * @param string[]|null $emails emails
     *
     * @return self
     */
    public function setEmails($emails)
    {
        if (is_null($emails)) {
            throw new \InvalidArgumentException('non-nullable emails cannot be null');
        }
        $this->container['emails'] = $emails;

        return $this;
    }

    /**
     * Gets taxcode
     *
     * @return string|null
     */
    public function getTaxcode()
    {
        return $this->container['taxcode'];
    }

    /**
     * Sets taxcode
     *
     * @param string|null $taxcode taxcode
     *
     * @return self
     */
    public function setTaxcode($taxcode)
    {
        if (is_null($taxcode)) {
            throw new \InvalidArgumentException('non-nullable taxcode cannot be null');
        }
        $this->container['taxcode'] = $taxcode;

        return $this;
    }

    /**
     * Gets iban
     *
     * @return string|null
     */
    public function getIban()
    {
        return $this->container['iban'];
    }

    /**
     * Sets iban
     *
     * @param string|null $iban iban
     *
     * @return self
     */
    public function setIban($iban)
    {
        if (is_null($iban)) {
            throw new \InvalidArgumentException('non-nullable iban cannot be null');
        }
        $this->container['iban'] = $iban;

        return $this;
    }

    /**
     * Gets swift
     *
     * @return string|null
     */
    public function getSwift()
    {
        return $this->container['swift'];
    }

    /**
     * Sets swift
     *
     * @param string|null $swift swift
     *
     * @return self
     */
    public function setSwift($swift)
    {
        if (is_null($swift)) {
            throw new \InvalidArgumentException('non-nullable swift cannot be null');
        }
        $this->container['swift'] = $swift;

        return $this;
    }

    /**
     * Gets account_number
     *
     * @return string|null
     */
    public function getAccountNumber()
    {
        return $this->container['account_number'];
    }

    /**
     * Sets account_number
     *
     * @param string|null $account_number account_number
     *
     * @return self
     */
    public function setAccountNumber($account_number)
    {
        if (is_null($account_number)) {
            throw new \InvalidArgumentException('non-nullable account_number cannot be null');
        }
        $this->container['account_number'] = $account_number;

        return $this;
    }

    /**
     * Gets phone
     *
     * @return string|null
     */
    public function getPhone()
    {
        return $this->container['phone'];
    }

    /**
     * Sets phone
     *
     * @param string|null $phone phone
     *
     * @return self
     */
    public function setPhone($phone)
    {
        if (is_null($phone)) {
            throw new \InvalidArgumentException('non-nullable phone cannot be null');
        }
        $this->container['phone'] = $phone;

        return $this;
    }

    /**
     * Gets general_ledger_number
     *
     * @return string|null
     */
    public function getGeneralLedgerNumber()
    {
        return $this->container['general_ledger_number'];
    }

    /**
     * Sets general_ledger_number
     *
     * @param string|null $general_ledger_number general_ledger_number
     *
     * @return self
     */
    public function setGeneralLedgerNumber($general_ledger_number)
    {
        if (is_null($general_ledger_number)) {
            throw new \InvalidArgumentException('non-nullable general_ledger_number cannot be null');
        }
        $this->container['general_ledger_number'] = $general_ledger_number;

        return $this;
    }

    /**
     * Gets tax_type
     *
     * @return \Cone\Billingo\Model\PartnerTaxType|null
     */
    public function getTaxType()
    {
        return $this->container['tax_type'];
    }

    /**
     * Sets tax_type
     *
     * @param \Cone\Billingo\Model\PartnerTaxType|null $tax_type tax_type
     *
     * @return self
     */
    public function setTaxType($tax_type)
    {
        if (is_null($tax_type)) {
            throw new \InvalidArgumentException('non-nullable tax_type cannot be null');
        }
        $this->container['tax_type'] = $tax_type;

        return $this;
    }

    /**
     * Gets custom_billing_settings
     *
     * @return \Cone\Billingo\Model\PartnerCustomBillingSettings|null
     */
    public function getCustomBillingSettings()
    {
        return $this->container['custom_billing_settings'];
    }

    /**
     * Sets custom_billing_settings
     *
     * @param \Cone\Billingo\Model\PartnerCustomBillingSettings|null $custom_billing_settings custom_billing_settings
     *
     * @return self
     */
    public function setCustomBillingSettings($custom_billing_settings)
    {
        if (is_null($custom_billing_settings)) {
            throw new \InvalidArgumentException('non-nullable custom_billing_settings cannot be null');
        }
        $this->container['custom_billing_settings'] = $custom_billing_settings;

        return $this;
    }

    /**
     * Gets group_member_tax_number
     *
     * @return string|null
     */
    public function getGroupMemberTaxNumber()
    {
        return $this->container['group_member_tax_number'];
    }

    /**
     * Sets group_member_tax_number
     *
     * @param string|null $group_member_tax_number The tax number of group member. Send tax number for update. Send empty string for delete. Ignored if omitted.
     *
     * @return self
     */
    public function setGroupMemberTaxNumber($group_member_tax_number)
    {
        if (is_null($group_member_tax_number)) {
            throw new \InvalidArgumentException('non-nullable group_member_tax_number cannot be null');
        }
        $this->container['group_member_tax_number'] = $group_member_tax_number;

        return $this;
    }

    /**
     * Gets giro_settings
     *
     * @return \Cone\Billingo\Model\PartnerGiroSettings|null
     */
    public function getGiroSettings()
    {
        return $this->container['giro_settings'];
    }

    /**
     * Sets giro_settings
     *
     * @param \Cone\Billingo\Model\PartnerGiroSettings|null $giro_settings giro_settings
     *
     * @return self
     */
    public function setGiroSettings($giro_settings)
    {
        if (is_null($giro_settings)) {
            array_push($this->openAPINullablesSetToNull, 'giro_settings');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('giro_settings', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['giro_settings'] = $giro_settings;

        return $this;
    }

    /**
     * Gets partner_shipping
     *
     * @return \Cone\Billingo\Model\DocumentPartnerPartnerShipping|null
     */
    public function getPartnerShipping()
    {
        return $this->container['partner_shipping'];
    }

    /**
     * Sets partner_shipping
     *
     * @param \Cone\Billingo\Model\DocumentPartnerPartnerShipping|null $partner_shipping partner_shipping
     *
     * @return self
     */
    public function setPartnerShipping($partner_shipping)
    {
        if (is_null($partner_shipping)) {
            array_push($this->openAPINullablesSetToNull, 'partner_shipping');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('partner_shipping', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['partner_shipping'] = $partner_shipping;

        return $this;
    }

    /**
     * Gets internal_comment
     *
     * @return string|null
     */
    public function getInternalComment()
    {
        return $this->container['internal_comment'];
    }

    /**
     * Sets internal_comment
     *
     * @param string|null $internal_comment internal_comment
     *
     * @return self
     */
    public function setInternalComment($internal_comment)
    {
        if (is_null($internal_comment)) {
            array_push($this->openAPINullablesSetToNull, 'internal_comment');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('internal_comment', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['internal_comment'] = $internal_comment;

        return $this;
    }

    /**
     * Gets partner_show_type
     *
     * @return \Cone\Billingo\Model\PartnerPartnerShowType|null
     */
    public function getPartnerShowType()
    {
        return $this->container['partner_show_type'];
    }

    /**
     * Sets partner_show_type
     *
     * @param \Cone\Billingo\Model\PartnerPartnerShowType|null $partner_show_type partner_show_type
     *
     * @return self
     */
    public function setPartnerShowType($partner_show_type)
    {
        if (is_null($partner_show_type)) {
            array_push($this->openAPINullablesSetToNull, 'partner_show_type');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('partner_show_type', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['partner_show_type'] = $partner_show_type;

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

