# # ReceiptInsert

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**vendor_id** | **string** |  | [optional]
**partner_id** | **int** |  | [optional]
**name** | **string** |  | [optional]
**emails** | **string[]** |  | [optional]
**block_id** | **int** |  |
**type** | [**\Cone\Billingo\Model\DocumentType**](DocumentType.md) |  |
**payment_method** | [**\Cone\Billingo\Model\PaymentMethod**](PaymentMethod.md) |  |
**currency** | [**\Cone\Billingo\Model\Currency**](Currency.md) |  |
**conversion_rate** | **float** |  | [optional]
**electronic** | **bool** |  | [optional] [default to false]
**items** | [**\Cone\Billingo\Model\ReceiptInsertItemsInner[]**](ReceiptInsertItemsInner.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
