<?php
/**
 * OnlineSzamlaStatusEnum
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
use \Cone\Billingo\ObjectSerializer;

/**
 * OnlineSzamlaStatusEnum Class Doc Comment
 *
 * @category Class
 * @package  Cone\Billingo
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class OnlineSzamlaStatusEnum
{
    /**
     * Possible values of this enum
     */
    public const ABORTED = 'aborted';

    public const DONE = 'done';

    public const EMPTY_ORGANIZATION_COUNTRY_CODE = 'empty_organization_country_code';

    public const EMPTY_PARTNER_COUNTRY_CODE = 'empty_partner_country_code';

    public const EMPTY_TAX = 'empty_tax';

    public const FORBIDDEN = 'forbidden';

    public const INVALID_ADDRESS = 'invalid_address';

    public const INVALID_CLIENT = 'invalid_client';

    public const INVALID_CONVERSION_RATE = 'invalid_conversion_rate';

    public const INVALID_CUSTOMER = 'invalid_customer';

    public const INVALID_INVOICE_REFERENCE = 'invalid_invoice_reference';

    public const INVALID_POSTALCODE = 'invalid_postalcode';

    public const INVALID_SECURITY_USER = 'invalid_security_user';

    public const INVALID_TAX = 'invalid_tax';

    public const INVALID_TAX_NUMBER = 'invalid_tax_number';

    public const INVALID_USER_RELATION = 'invalid_user_relation';

    public const INVALID_VAT_DATA = 'invalid_vat_data';

    public const INVOICE_NUMBER_NOT_UNIQUE = 'invoice_number_not_unique';

    public const KOBAK_PROCESSING = 'kobak_processing';

    public const MISSING_DOCUMENT_ITEM_NAME = 'missing_document_item_name';

    public const NAV_WARN = 'nav_warn';

    public const NO_ONLINE_SZAMLA_SETTINGS = 'no_online_szamla_settings';

    public const NO_SEND_BY_USER = 'no_send_by_user';

    public const NON_EXIST_TAX_NUMBER = 'non_exist_tax_number';

    public const NOT_UNIQUE = 'not unique';

    public const NOT_CHECKED = 'not_checked';

    public const NOT_REGISTERED_CUSTOMER = 'not_registered_customer';

    public const PROCESSING = 'processing';

    public const RECEIVED = 'received';

    public const SAVED = 'saved';

    public const SEND_FAILED = 'send_failed';

    public const SENT = 'sent';

    public const STARTED = 'started';

    public const TECHNICAL_ERROR = 'technical_error';

    public const UNDER_TAX_LIMIT = 'under_tax_limit';

    public const USER_HAS_INVALID_KOBAK = 'user_has_invalid_kobak';

    public const USER_HASNOT_KOBAK = 'user_hasnot_kobak';

    public const VALIDATION_OK = 'validation_ok';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::ABORTED,
            self::DONE,
            self::EMPTY_ORGANIZATION_COUNTRY_CODE,
            self::EMPTY_PARTNER_COUNTRY_CODE,
            self::EMPTY_TAX,
            self::FORBIDDEN,
            self::INVALID_ADDRESS,
            self::INVALID_CLIENT,
            self::INVALID_CONVERSION_RATE,
            self::INVALID_CUSTOMER,
            self::INVALID_INVOICE_REFERENCE,
            self::INVALID_POSTALCODE,
            self::INVALID_SECURITY_USER,
            self::INVALID_TAX,
            self::INVALID_TAX_NUMBER,
            self::INVALID_USER_RELATION,
            self::INVALID_VAT_DATA,
            self::INVOICE_NUMBER_NOT_UNIQUE,
            self::KOBAK_PROCESSING,
            self::MISSING_DOCUMENT_ITEM_NAME,
            self::NAV_WARN,
            self::NO_ONLINE_SZAMLA_SETTINGS,
            self::NO_SEND_BY_USER,
            self::NON_EXIST_TAX_NUMBER,
            self::NOT_UNIQUE,
            self::NOT_CHECKED,
            self::NOT_REGISTERED_CUSTOMER,
            self::PROCESSING,
            self::RECEIVED,
            self::SAVED,
            self::SEND_FAILED,
            self::SENT,
            self::STARTED,
            self::TECHNICAL_ERROR,
            self::UNDER_TAX_LIMIT,
            self::USER_HAS_INVALID_KOBAK,
            self::USER_HASNOT_KOBAK,
            self::VALIDATION_OK
        ];
    }
}

