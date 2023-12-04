# # DocumentInsert

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**vendor_id** | **string** |  | [optional]
**partner_id** | **int** |  |
**block_id** | **int** |  |
**bank_account_id** | **int** |  | [optional]
**type** | [**\Cone\Billingo\Model\DocumentInsertType**](DocumentInsertType.md) |  |
**fulfillment_date** | **\DateTime** |  |
**due_date** | **\DateTime** |  |
**payment_method** | [**\Cone\Billingo\Model\PaymentMethod**](PaymentMethod.md) |  |
**language** | [**\Cone\Billingo\Model\DocumentLanguage**](DocumentLanguage.md) |  |
**currency** | [**\Cone\Billingo\Model\Currency**](Currency.md) |  |
**conversion_rate** | **float** |  | [optional]
**electronic** | **bool** |  | [optional] [default to false]
**paid** | **bool** |  | [optional] [default to false]
**items** | [**\Cone\Billingo\Model\DocumentInsertItemsInner[]**](DocumentInsertItemsInner.md) |  | [optional]
**comment** | **string** |  | [optional]
**settings** | [**\Cone\Billingo\Model\DocumentSettings**](DocumentSettings.md) |  | [optional]
**advance_invoice** | **int[]** |  | [optional]
**discount** | [**\Cone\Billingo\Model\Discount**](Discount.md) |  | [optional]
**instant_payment** | **bool** |  | [optional]
**instant_payment_request** | [**\Cone\Billingo\Model\DocumentInsertInstantPaymentRequest**](DocumentInsertInstantPaymentRequest.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
