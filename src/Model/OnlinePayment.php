<?php

/**
 * OnlinePayment
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
 * OnlinePayment Class Doc Comment
 *
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
enum OnlinePayment: string
{
    case EMPTY = '';

    case BARION = 'Barion';

    case SIMPLE_PAY = 'SimplePay';

    case NO = 'no';
}
