<?php

/**
 * PaymentMethod
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
 * The version of the OpenAPI document: 3.0.15
 * Contact: hello@billingo.hu
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.11.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Cone\Billingo\Model;

use Cone\Billingo\ObjectSerializer;

/**
 * PaymentMethod Class Doc Comment
 *
 * @category Class
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class PaymentMethod
{
    /**
     * Possible values of this enum
     */
    public const ARUHITEL = 'aruhitel';

    public const BANKCARD = 'bankcard';

    public const BARION = 'barion';

    public const BARTER = 'barter';

    public const CASH = 'cash';

    public const CASH_ON_DELIVERY = 'cash_on_delivery';

    public const COUPON = 'coupon';

    public const EBAY = 'ebay';

    public const ELORE_UTALAS = 'elore_utalas';

    public const EP_KARTYA = 'ep_kartya';

    public const KOMPENZACIO = 'kompenzacio';

    public const LEVONAS = 'levonas';

    public const ONLINE_BANKCARD = 'online_bankcard';

    public const OTHER = 'other';

    public const PAYLIKE = 'paylike';

    public const PAYONEER = 'payoneer';

    public const PAYPAL = 'paypal';

    public const PAYPAL_UTOLAG = 'paypal_utolag';

    public const PAYU = 'payu';

    public const PICK_PACK_PONT = 'pick_pack_pont';

    public const POSTAI_CSEKK = 'postai_csekk';

    public const POSTAUTALVANY = 'postautalvany';

    public const REVOLUT = 'revolut';

    public const SKRILL = 'skrill';

    public const SZEP_CARD = 'szep_card';

    public const TRANSFERWISE = 'transferwise';

    public const UPWORK = 'upwork';

    public const UTALVANY = 'utalvany';

    public const VALTO = 'valto';

    public const WIRE_TRANSFER = 'wire_transfer';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::ARUHITEL,
            self::BANKCARD,
            self::BARION,
            self::BARTER,
            self::CASH,
            self::CASH_ON_DELIVERY,
            self::COUPON,
            self::EBAY,
            self::ELORE_UTALAS,
            self::EP_KARTYA,
            self::KOMPENZACIO,
            self::LEVONAS,
            self::ONLINE_BANKCARD,
            self::OTHER,
            self::PAYLIKE,
            self::PAYONEER,
            self::PAYPAL,
            self::PAYPAL_UTOLAG,
            self::PAYU,
            self::PICK_PACK_PONT,
            self::POSTAI_CSEKK,
            self::POSTAUTALVANY,
            self::REVOLUT,
            self::SKRILL,
            self::SZEP_CARD,
            self::TRANSFERWISE,
            self::UPWORK,
            self::UTALVANY,
            self::VALTO,
            self::WIRE_TRANSFER,
        ];
    }
}
