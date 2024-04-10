<?php
/**
 * Category
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
 * Generator version: 7.4.0
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
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Category
{
    /**
     * Possible values of this enum
     */
    public const ACCOUNTING_AND_AUDITING = 'accounting_and_auditing';

    public const ADVERTISEMENT = 'advertisement';

    public const BONUS = 'bonus';

    public const BUSINESS_INSURANCE = 'business_insurance';

    public const CLEANING = 'cleaning';

    public const CONSTRUCTION_AND_REPAIR = 'construction_and_repair';

    public const CONSULTING = 'consulting';

    public const CONSUMER_GOODS = 'consumer_goods';

    public const CONTRACTORS = 'contractors';

    public const DEVELOPMENT = 'development';

    public const DIVIDENDS = 'dividends';

    public const DONATIONS = 'donations';

    public const DUTY_TAXES = 'duty_taxes';

    public const EDUCATION_AND_TRAININGS = 'education_and_trainings';

    public const ELECTRICITY = 'electricity';

    public const ELECTRONICS = 'electronics';

    public const EMPLOYEE_BENEFITS = 'employee_benefits';

    public const ENTERTAINMENT = 'entertainment';

    public const EQUIPMENT_INSURANCE = 'equipment_insurance';

    public const FEDERAL_TAXES = 'federal_taxes';

    public const FEES = 'fees';

    public const FINANCIALS = 'financials';

    public const FINES = 'fines';

    public const GAS = 'gas';

    public const GAS_AND_FUEL = 'gas_and_fuel';

    public const HEALTH_INSURANCE = 'health_insurance';

    public const HUMAN_RESOURCES = 'human_resources';

    public const INCOME = 'income';

    public const INCOME_TAXES = 'income_taxes';

    public const INSURANCE = 'insurance';

    public const INTEREST = 'interest';

    public const INTERNET = 'internet';

    public const INVESTMENTS = 'investments';

    public const LEASING = 'leasing';

    public const LEGAL = 'legal';

    public const LIABILITY_INSURANCE = 'liability_insurance';

    public const LOANS = 'loans';

    public const MEALS = 'meals';

    public const MORTGAGE = 'mortgage';

    public const OFFICE_RENT = 'office_rent';

    public const ONLINE_SUBSCRIPTIONS = 'online_subscriptions';

    public const OTHER = 'other';

    public const OVERHEADS = 'overheads';

    public const PAYROLL_TAXES = 'payroll_taxes';

    public const PHONE = 'phone';

    public const PREPAYMENTS = 'prepayments';

    public const PROFESSIONAL_INSURANCE = 'professional_insurance';

    public const PROPERTY_TAXES = 'property_taxes';

    public const REAL_ESTATE = 'real_estate';

    public const RETURNS = 'returns';

    public const SALES = 'sales';

    public const SERVICE = 'service';

    public const SERVICE_AND_PARTS = 'service_and_parts';

    public const SHIPPING = 'shipping';

    public const SOFTWARE = 'software';

    public const STAFF_OUTSOURCING = 'staff_outsourcing';

    public const STOCK = 'stock';

    public const STORAGE = 'storage';

    public const SUPPLIES_AND_FURNITURE = 'supplies_and_furniture';

    public const TANGIBLE_ASSETS = 'tangible_assets';

    public const TAX_RETURN = 'tax_return';

    public const TAXES = 'taxes';

    public const TAXI = 'taxi';

    public const TRANSPORT = 'transport';

    public const TRAVEL = 'travel';

    public const UTILITIES = 'utilities';

    public const VAT = 'vat';

    public const VEHICLE_INSURANCE = 'vehicle_insurance';

    public const WAGES = 'wages';

    public const WATER = 'water';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::ACCOUNTING_AND_AUDITING,
            self::ADVERTISEMENT,
            self::BONUS,
            self::BUSINESS_INSURANCE,
            self::CLEANING,
            self::CONSTRUCTION_AND_REPAIR,
            self::CONSULTING,
            self::CONSUMER_GOODS,
            self::CONTRACTORS,
            self::DEVELOPMENT,
            self::DIVIDENDS,
            self::DONATIONS,
            self::DUTY_TAXES,
            self::EDUCATION_AND_TRAININGS,
            self::ELECTRICITY,
            self::ELECTRONICS,
            self::EMPLOYEE_BENEFITS,
            self::ENTERTAINMENT,
            self::EQUIPMENT_INSURANCE,
            self::FEDERAL_TAXES,
            self::FEES,
            self::FINANCIALS,
            self::FINES,
            self::GAS,
            self::GAS_AND_FUEL,
            self::HEALTH_INSURANCE,
            self::HUMAN_RESOURCES,
            self::INCOME,
            self::INCOME_TAXES,
            self::INSURANCE,
            self::INTEREST,
            self::INTERNET,
            self::INVESTMENTS,
            self::LEASING,
            self::LEGAL,
            self::LIABILITY_INSURANCE,
            self::LOANS,
            self::MEALS,
            self::MORTGAGE,
            self::OFFICE_RENT,
            self::ONLINE_SUBSCRIPTIONS,
            self::OTHER,
            self::OVERHEADS,
            self::PAYROLL_TAXES,
            self::PHONE,
            self::PREPAYMENTS,
            self::PROFESSIONAL_INSURANCE,
            self::PROPERTY_TAXES,
            self::REAL_ESTATE,
            self::RETURNS,
            self::SALES,
            self::SERVICE,
            self::SERVICE_AND_PARTS,
            self::SHIPPING,
            self::SOFTWARE,
            self::STAFF_OUTSOURCING,
            self::STOCK,
            self::STORAGE,
            self::SUPPLIES_AND_FURNITURE,
            self::TANGIBLE_ASSETS,
            self::TAX_RETURN,
            self::TAXES,
            self::TAXI,
            self::TRANSPORT,
            self::TRAVEL,
            self::UTILITIES,
            self::VAT,
            self::VEHICLE_INSURANCE,
            self::WAGES,
            self::WATER,
        ];
    }
}
