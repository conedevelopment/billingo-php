# # ReceiptInsert

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**vendorId** | **string** |  | [optional]
**partnerId** | **int** |  | [optional]
**name** | **string** |  | [optional]
**emails** | **string[]** |  | [optional]
**blockId** | **int** |  |
**type** | [**\Cone\Billingo\Model\DocumentType**](DocumentType.md) |  |
**paymentMethod** | [**\Cone\Billingo\Model\PaymentMethod**](PaymentMethod.md) |  |
**currency** | [**\Cone\Billingo\Model\Currency**](Currency.md) |  |
**conversionRate** | **float** |  | [optional]
**electronic** | **bool** |  | [optional] [default to false]
**items** | [**\Cone\Billingo\Model\ReceiptInsertItemsInner[]**](ReceiptInsertItemsInner.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
