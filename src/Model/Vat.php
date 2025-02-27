<?php
/**
 * Vat
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
 * Vat Class Doc Comment
 *
 * @category Class
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Vat
{
    /**
     * Possible values of this enum
     */
    public const _0 = '0%';

    public const _1 = '1%';

    public const _10 = '10%';

    public const _11 = '11%';

    public const _12 = '12%';

    public const _13 = '13%';

    public const _14 = '14%';

    public const _15 = '15%';

    public const _16 = '16%';

    public const _17 = '17%';

    public const _18 = '18%';

    public const _19 = '19%';

    public const _2 = '2%';

    public const _20 = '20%';

    public const _21 = '21%';

    public const _22 = '22%';

    public const _23 = '23%';

    public const _24 = '24%';

    public const _25 = '25%';

    public const _26 = '26%';

    public const _27 = '27%';

    public const _3 = '3%';

    public const _4 = '4%';

    public const _5 = '5%';

    public const _55 = '5,5%';

    public const _6 = '6%';

    public const _7 = '7%';

    public const _77 = '7,7%';

    public const _8 = '8%';

    public const _9 = '9%';

    public const _95 = '9,5%';

    public const AAM = 'AAM';

    public const AM = 'AM';

    public const EU = 'EU';

    public const EUK = 'EUK';

    public const F_AFA = 'F.AFA';

    public const FAD = 'FAD';

    public const K_AFA = 'K.AFA';

    public const MAA = 'MAA';

    public const TAM = 'TAM';

    public const KK = 'ÁKK';

    public const THK = 'ÁTHK';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::_0,
            self::_1,
            self::_10,
            self::_11,
            self::_12,
            self::_13,
            self::_14,
            self::_15,
            self::_16,
            self::_17,
            self::_18,
            self::_19,
            self::_2,
            self::_20,
            self::_21,
            self::_22,
            self::_23,
            self::_24,
            self::_25,
            self::_26,
            self::_27,
            self::_3,
            self::_4,
            self::_5,
            self::_55,
            self::_6,
            self::_7,
            self::_77,
            self::_8,
            self::_9,
            self::_95,
            self::AAM,
            self::AM,
            self::EU,
            self::EUK,
            self::F_AFA,
            self::FAD,
            self::K_AFA,
            self::MAA,
            self::TAM,
            self::KK,
            self::THK,
        ];
    }
}
