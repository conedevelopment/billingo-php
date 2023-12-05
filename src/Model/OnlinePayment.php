<?php
/**
 * OnlinePayment
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
 * OnlinePayment Class Doc Comment
 *
 * @category Class
 * @package  Cone\Billingo
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class OnlinePayment
{
    /**
     * Possible values of this enum
     */
    public const EMPTY = '';

    public const BARION = 'Barion';

    public const SIMPLE_PAY = 'SimplePay';

    public const NO = 'no';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::EMPTY,
            self::BARION,
            self::SIMPLE_PAY,
            self::NO
        ];
    }
}

