<?php
/**
 * Category
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
 * OpenAPI Generator version: 7.2.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Cone\Billingo\Model;

use Cone\Billingo\ObjectSerializer;

/**
 * Category Class Doc Comment
 *
 * @category Class
 * @package  Cone\Billingo
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Category
{
    /**
     * Possible values of this enum
     */
    public const ADVERTISEMENT = 'advertisement';

    public const DEVELOPMENT = 'development';

    public const OTHER = 'other';

    public const OVERHEADS = 'overheads';

    public const SERVICE = 'service';

    public const STOCK = 'stock';

    public const TANGIBLE_ASSETS = 'tangible_assets';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::ADVERTISEMENT,
            self::DEVELOPMENT,
            self::OTHER,
            self::OVERHEADS,
            self::SERVICE,
            self::STOCK,
            self::TANGIBLE_ASSETS
        ];
    }
}
