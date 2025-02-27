<?php
/**
 * DocumentBlockType
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
 * DocumentBlockType Class Doc Comment
 *
 * @category Class
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DocumentBlockType
{
    /**
     * Possible values of this enum
     */
    public const CERTIFICATE_OF_COMPLETION = 'certificate_of_completion';

    public const DOSSIER = 'dossier';

    public const INVOICE = 'invoice';

    public const OFFER = 'offer';

    public const ORDER_FORM = 'order_form';

    public const RECEIPT = 'receipt';

    public const WAYBILL = 'waybill';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::CERTIFICATE_OF_COMPLETION,
            self::DOSSIER,
            self::INVOICE,
            self::OFFER,
            self::ORDER_FORM,
            self::RECEIPT,
            self::WAYBILL,
        ];
    }
}
