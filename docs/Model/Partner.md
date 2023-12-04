# # Partner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [optional] [readonly]
**name** | **string** |  | [optional]
**address** | [**\Cone\Billingo\Model\Address**](Address.md) |  | [optional]
**emails** | **string[]** |  | [optional]
**taxcode** | **string** |  | [optional]
**iban** | **string** |  | [optional]
**swift** | **string** |  | [optional]
**account_number** | **string** |  | [optional]
**phone** | **string** |  | [optional]
**general_ledger_number** | **string** |  | [optional]
**tax_type** | [**\Cone\Billingo\Model\PartnerTaxType**](PartnerTaxType.md) |  | [optional]
**custom_billing_settings** | [**\Cone\Billingo\Model\PartnerCustomBillingSettings**](PartnerCustomBillingSettings.md) |  | [optional]
**group_member_tax_number** | **string** | The tax number of group member. Send tax number for update. Send empty string for delete. Ignored if omitted. | [optional]
**giro_settings** | [**\Cone\Billingo\Model\PartnerGiroSettings**](PartnerGiroSettings.md) |  | [optional]
**partner_shipping** | [**\Cone\Billingo\Model\DocumentPartnerPartnerShipping**](DocumentPartnerPartnerShipping.md) |  | [optional]
**internal_comment** | **string** |  | [optional]
**partner_show_type** | [**\Cone\Billingo\Model\PartnerPartnerShowType**](PartnerPartnerShowType.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
