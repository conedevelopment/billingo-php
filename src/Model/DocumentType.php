<?php
/**
 * DocumentType
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
use \Cone\Billingo\ObjectSerializer;

/**
 * DocumentType Class Doc Comment
 *
 * @category Class
 * @package  Cone\Billingo
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DocumentType
{
    /**
     * Possible values of this enum
     */
    public const ADVANCE = 'advance';

    public const CANCELLATION = 'cancellation';

    public const CERT_OF_COMPLETION = 'cert_of_completion';

    public const D_CERT_OF_COMPLETION = 'd_cert_of_completion';

    public const DOSSIER = 'dossier';

    public const DRAFT = 'draft';

    public const DRAFT_OFFER = 'draft_offer';

    public const DRAFT_ORDER_FORM = 'draft_order_form';

    public const DRAFT_WAYBILL = 'draft_waybill';

    public const INVOICE = 'invoice';

    public const MODIFICATION = 'modification';

    public const OFFER = 'offer';

    public const ORDER_FORM = 'order_form';

    public const PROFORMA = 'proforma';

    public const RECEIPT = 'receipt';

    public const RECEIPT_CANCELLATION = 'receipt_cancellation';

    public const WAYBILL = 'waybill';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::ADVANCE,
            self::CANCELLATION,
            self::CERT_OF_COMPLETION,
            self::D_CERT_OF_COMPLETION,
            self::DOSSIER,
            self::DRAFT,
            self::DRAFT_OFFER,
            self::DRAFT_ORDER_FORM,
            self::DRAFT_WAYBILL,
            self::INVOICE,
            self::MODIFICATION,
            self::OFFER,
            self::ORDER_FORM,
            self::PROFORMA,
            self::RECEIPT,
            self::RECEIPT_CANCELLATION,
            self::WAYBILL
        ];
    }
}


