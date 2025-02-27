<?php
/**
 * Currency
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
 * Currency Class Doc Comment
 *
 * @category Class
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Currency
{
    /**
     * Possible values of this enum
     */
    public const AED = 'AED';

    public const AUD = 'AUD';

    public const BGN = 'BGN';

    public const BRL = 'BRL';

    public const CAD = 'CAD';

    public const CHF = 'CHF';

    public const CNY = 'CNY';

    public const CZK = 'CZK';

    public const DKK = 'DKK';

    public const EUR = 'EUR';

    public const GBP = 'GBP';

    public const HKD = 'HKD';

    public const HRK = 'HRK';

    public const HUF = 'HUF';

    public const IDR = 'IDR';

    public const ILS = 'ILS';

    public const INR = 'INR';

    public const ISK = 'ISK';

    public const JPY = 'JPY';

    public const KRW = 'KRW';

    public const MXN = 'MXN';

    public const MYR = 'MYR';

    public const NOK = 'NOK';

    public const NZD = 'NZD';

    public const PHP = 'PHP';

    public const PLN = 'PLN';

    public const RON = 'RON';

    public const RSD = 'RSD';

    public const RUB = 'RUB';

    public const SEK = 'SEK';

    public const SGD = 'SGD';

    public const THB = 'THB';

    public const _TRY = 'TRY';

    public const UAH = 'UAH';

    public const USD = 'USD';

    public const ZAR = 'ZAR';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::AED,
            self::AUD,
            self::BGN,
            self::BRL,
            self::CAD,
            self::CHF,
            self::CNY,
            self::CZK,
            self::DKK,
            self::EUR,
            self::GBP,
            self::HKD,
            self::HRK,
            self::HUF,
            self::IDR,
            self::ILS,
            self::INR,
            self::ISK,
            self::JPY,
            self::KRW,
            self::MXN,
            self::MYR,
            self::NOK,
            self::NZD,
            self::PHP,
            self::PLN,
            self::RON,
            self::RSD,
            self::RUB,
            self::SEK,
            self::SGD,
            self::THB,
            self::_TRY,
            self::UAH,
            self::USD,
            self::ZAR,
        ];
    }
}
