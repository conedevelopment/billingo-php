<?php
/**
 * CheckTaxNumberMessage
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
 * Generator version: 7.9.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Cone\Billingo\Model;

use Cone\Billingo\ObjectSerializer;

/**
 * CheckTaxNumberMessage Class Doc Comment
 *
 * @category Class
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class CheckTaxNumberMessage
{
    /**
     * Possible values of this enum
     */
    public const EXTERNAL_NAV_SERVICE_UNREACHABLE = 'external_nav_service_unreachable';

    public const INVALID_TAX_NUMBER = 'invalid_tax_number';

    public const NO_ONLINE_SZAMLA_SETTINGS = 'no_online_szamla_settings';

    public const NON_EXIST_TAX_NUMBER = 'non_exist_tax_number';

    public const VALIDATION_OK = 'validation_ok';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::EXTERNAL_NAV_SERVICE_UNREACHABLE,
            self::INVALID_TAX_NUMBER,
            self::NO_ONLINE_SZAMLA_SETTINGS,
            self::NON_EXIST_TAX_NUMBER,
            self::VALIDATION_OK,
        ];
    }
}
