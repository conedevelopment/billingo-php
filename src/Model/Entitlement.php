<?php
/**
 * Entitlement
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
 * Entitlement Class Doc Comment
 *
 * @category Class
 * @description * &#x60;AAM&#x60; - Alanyi adómentesség * &#x60;ANTIQUES&#x60; - Különbözet szerinti szabályozás - gyűjteménydarabok és régiségek - * &#x60;ARTWORK&#x60; - Különbözet szerinti szabályozás - műalkotások - * &#x60;ATK&#x60; - Áfa tv. tárgyi hatályán kívüli ügylet * &#x60;EAM&#x60; - Áfamentes termékexport, azzal egy tekintet alá eső értékesítések, nemzetközi közlekedéshez kapcsolódó áfamentes ügyletek (Áfa tv. 98-109. §) * &#x60;EUE&#x60; - EU más tagállamában áfaköteles (áfa fizetésére az értékesítő köteles) * &#x60;EUFAD37&#x60; - Áfa tv. 37. § (1) bekezdése alapján a szolgáltatás teljesítése helye az EU más tagállama (áfa fizetésére a vevő köteles) * &#x60;EUFADE&#x60; - Áfa tv. egyéb rendelkezése szerint a teljesítés helye EU más tagállama (áfa fizetésére a vevő kötelezett) * &#x60;HO&#x60; - Áfa tv. szerint EU-n kívül teljesített ügylet * &#x60;KBAET&#x60; - Más tagállamba irányuló áfamentes termékértékesítés (Áfa tv. 89. §) * &#x60;NAM_1&#x60; - Áfamentes közvetítői tevékenység (Áfa tv. 110. §) * &#x60;NAM_2&#x60; - Termékek nemzetközi forgalmához kapcsolódó áfamentes ügylet (Áfa tv. 111-118. §) * &#x60;SECOND_HAND&#x60; - Különbözet szerinti szabályozás - használt cikkek - * &#x60;TAM&#x60; - Tevékenység közérdekű jellegére vagy egyéb sajátos jellegére tekintettel áfamentes (Áfa tv. 85-87.§) * &#x60;TRAVEL_AGENCY&#x60; - Különbözet szerinti szabályozás - utazási irodák -
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Entitlement
{
    /**
     * Possible values of this enum
     */
    public const AAM = 'AAM';

    public const ANTIQUES = 'ANTIQUES';

    public const ARTWORK = 'ARTWORK';

    public const ATK = 'ATK';

    public const EAM = 'EAM';

    public const EUE = 'EUE';

    public const EUFAD37 = 'EUFAD37';

    public const EUFADE = 'EUFADE';

    public const HO = 'HO';

    public const KBAET = 'KBAET';

    public const NAM_1 = 'NAM_1';

    public const NAM_2 = 'NAM_2';

    public const SECOND_HAND = 'SECOND_HAND';

    public const TAM = 'TAM';

    public const TRAVEL_AGENCY = 'TRAVEL_AGENCY';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::AAM,
            self::ANTIQUES,
            self::ARTWORK,
            self::ATK,
            self::EAM,
            self::EUE,
            self::EUFAD37,
            self::EUFADE,
            self::HO,
            self::KBAET,
            self::NAM_1,
            self::NAM_2,
            self::SECOND_HAND,
            self::TAM,
            self::TRAVEL_AGENCY,
        ];
    }
}
