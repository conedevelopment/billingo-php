<?php

/**
 * Entitlement
 *
 * PHP version 8.1
 *
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
 * @generated Generated by: https://openapi-generator.tech
 * Generator version: 7.13.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Cone\Billingo\Model;

/**
 * Entitlement Class Doc Comment
 *
 * @description * &#x60;AAM&#x60; - Alanyi adómentesség * &#x60;ANTIQUES&#x60; - Különbözet szerinti szabályozás - gyűjteménydarabok és régiségek - * &#x60;ARTWORK&#x60; - Különbözet szerinti szabályozás - műalkotások - * &#x60;ATK&#x60; - Áfa tv. tárgyi hatályán kívüli ügylet * &#x60;EAM&#x60; - Áfamentes termékexport, azzal egy tekintet alá eső értékesítések, nemzetközi közlekedéshez kapcsolódó áfamentes ügyletek (Áfa tv. 98-109. §) * &#x60;EUE&#x60; - EU más tagállamában áfaköteles (áfa fizetésére az értékesítő köteles) * &#x60;EUFAD37&#x60; - Áfa tv. 37. § (1) bekezdése alapján a szolgáltatás teljesítése helye az EU más tagállama (áfa fizetésére a vevő köteles) * &#x60;EUFADE&#x60; - Áfa tv. egyéb rendelkezése szerint a teljesítés helye EU más tagállama (áfa fizetésére a vevő kötelezett) * &#x60;HO&#x60; - Áfa tv. szerint EU-n kívül teljesített ügylet * &#x60;KBAET&#x60; - Más tagállamba irányuló áfamentes termékértékesítés (Áfa tv. 89. §) * &#x60;NAM_1&#x60; - Áfamentes közvetítői tevékenység (Áfa tv. 110. §) * &#x60;NAM_2&#x60; - Termékek nemzetközi forgalmához kapcsolódó áfamentes ügylet (Áfa tv. 111-118. §) * &#x60;SECOND_HAND&#x60; - Különbözet szerinti szabályozás - használt cikkek - * &#x60;TAM&#x60; - Tevékenység közérdekű jellegére vagy egyéb sajátos jellegére tekintettel áfamentes (Áfa tv. 85-87.§) * &#x60;TRAVEL_AGENCY&#x60; - Különbözet szerinti szabályozás - utazási irodák -
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
enum Entitlement: string
{
    case AAM = 'AAM';

    case ANTIQUES = 'ANTIQUES';

    case ARTWORK = 'ARTWORK';

    case ATK = 'ATK';

    case EAM = 'EAM';

    case EUE = 'EUE';

    case EUFAD37 = 'EUFAD37';

    case EUFADE = 'EUFADE';

    case HO = 'HO';

    case KBAET = 'KBAET';

    case NAM_1 = 'NAM_1';

    case NAM_2 = 'NAM_2';

    case SECOND_HAND = 'SECOND_HAND';

    case TAM = 'TAM';

    case TRAVEL_AGENCY = 'TRAVEL_AGENCY';
}
