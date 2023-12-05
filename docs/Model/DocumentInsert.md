# # DocumentInsert

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**vendorId** | **string** |  | [optional]
**partnerId** | **int** |  |
**blockId** | **int** |  |
**bankAccountId** | **int** |  | [optional]
**type** | [**\Cone\Billingo\Model\DocumentInsertType**](DocumentInsertType.md) |  |
**fulfillmentDate** | **\DateTime** |  |
**dueDate** | **\DateTime** |  |
**paymentMethod** | [**\Cone\Billingo\Model\PaymentMethod**](PaymentMethod.md) |  |
**language** | [**\Cone\Billingo\Model\DocumentLanguage**](DocumentLanguage.md) |  |
**currency** | [**\Cone\Billingo\Model\Currency**](Currency.md) |  |
**conversionRate** | **float** |  | [optional]
**electronic** | **bool** |  | [optional] [default to false]
**paid** | **bool** |  | [optional] [default to false]
**items** | [**\Cone\Billingo\Model\DocumentInsertItemsInner[]**](DocumentInsertItemsInner.md) |  | [optional]
**comment** | **string** |  | [optional]
**settings** | [**\Cone\Billingo\Model\DocumentSettings**](DocumentSettings.md) |  | [optional]
**advanceInvoice** | **int[]** |  | [optional]
**discount** | [**\Cone\Billingo\Model\Discount**](Discount.md) |  | [optional]
**instantPayment** | **bool** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
