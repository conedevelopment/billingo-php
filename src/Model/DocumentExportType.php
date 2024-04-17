<?php
/**
 * DocumentExportType
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
 * Generator version: 7.5.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Cone\Billingo\Model;

use Cone\Billingo\ObjectSerializer;

/**
 * DocumentExportType Class Doc Comment
 *
 * @category Class
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DocumentExportType
{
    /**
     * Possible values of this enum
     */
    public const ARMADA = 'armada';

    public const AWS_BATCH = 'aws_batch';

    public const EX_PANDA = 'ex_panda';

    public const FORINTSOFT = 'forintsoft';

    public const HESSYN = 'hessyn';

    public const IMA = 'ima';

    public const INFOTEKA = 'infoteka';

    public const KULCS_KONYV = 'kulcs_konyv';

    public const MAXITAX = 'maxitax';

    public const NAGY_MACHINATOR = 'nagy_machinator';

    public const NAV_PTGSZLAH = 'nav_ptgszlah';

    public const NAV_STATUS = 'nav_status';

    public const NAV_XML = 'nav_xml';

    public const NAV_XML_ALIAS = 'nav_xml_alias';

    public const NOVITAX = 'novitax';

    public const PROFORMA_OUTSTANDING = 'proforma_outstanding';

    public const RELAX = 'relax';

    public const RLB = 'rlb';

    public const RLB60 = 'rlb60';

    public const RLB_DOUBLE_ENTRY = 'rlb_double_entry';

    public const SIMPLE_CSV = 'simple_csv';

    public const SIMPLE_EXCEL = 'simple_excel';

    public const SIMPLE_EXCEL_ITEMS = 'simple_excel_items';

    public const TENSOFT = 'tensoft';

    public const TENSOFT_29_DOT_65 = 'tensoft_29_dot_65';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::ARMADA,
            self::AWS_BATCH,
            self::EX_PANDA,
            self::FORINTSOFT,
            self::HESSYN,
            self::IMA,
            self::INFOTEKA,
            self::KULCS_KONYV,
            self::MAXITAX,
            self::NAGY_MACHINATOR,
            self::NAV_PTGSZLAH,
            self::NAV_STATUS,
            self::NAV_XML,
            self::NAV_XML_ALIAS,
            self::NOVITAX,
            self::PROFORMA_OUTSTANDING,
            self::RELAX,
            self::RLB,
            self::RLB60,
            self::RLB_DOUBLE_ENTRY,
            self::SIMPLE_CSV,
            self::SIMPLE_EXCEL,
            self::SIMPLE_EXCEL_ITEMS,
            self::TENSOFT,
            self::TENSOFT_29_DOT_65,
        ];
    }
}
