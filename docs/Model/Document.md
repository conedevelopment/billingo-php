# # Document

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | The document&#39;s unique identifier. | [optional]
**invoiceNumber** | **string** | The document&#39;s invoice number. | [optional]
**type** | [**\Cone\Billingo\Model\DocumentType**](DocumentType.md) |  | [optional]
**cancelled** | **bool** |  | [optional]
**blockId** | **int** | DocumentBlock&#39;s identifier. | [optional]
**paymentStatus** | [**\Cone\Billingo\Model\PaymentStatus**](PaymentStatus.md) |  | [optional]
**paymentMethod** | [**\Cone\Billingo\Model\PaymentMethod**](PaymentMethod.md) |  | [optional]
**grossTotal** | **float** | The document&#39;s gross total price. | [optional]
**currency** | [**\Cone\Billingo\Model\Currency**](Currency.md) |  | [optional]
**conversionRate** | **float** |  | [optional]
**invoiceDate** | **\DateTime** |  | [optional]
**fulfillmentDate** | **\DateTime** |  | [optional]
**dueDate** | **\DateTime** |  | [optional]
**paidDate** | **\DateTime** |  | [optional]
**organization** | [**\Cone\Billingo\Model\DocumentOrganization**](DocumentOrganization.md) |  | [optional]
**partner** | [**\Cone\Billingo\Model\Partner**](Partner.md) |  | [optional]
**documentPartner** | [**\Cone\Billingo\Model\DocumentPartner**](DocumentPartner.md) |  | [optional]
**electronic** | **bool** |  | [optional]
**comment** | **string** |  | [optional]
**tags** | **string[]** |  | [optional]
**notificationStatus** | [**\Cone\Billingo\Model\DocumentNotificationStatus**](DocumentNotificationStatus.md) |  | [optional]
**language** | [**\Cone\Billingo\Model\DocumentLanguage**](DocumentLanguage.md) |  | [optional]
**items** | [**\Cone\Billingo\Model\DocumentItem[]**](DocumentItem.md) |  | [optional]
**summary** | [**\Cone\Billingo\Model\DocumentSummary**](DocumentSummary.md) |  | [optional]
**settings** | [**\Cone\Billingo\Model\DocumentSettings**](DocumentSettings.md) |  | [optional]
**onlineSzamlaStatus** | [**\Cone\Billingo\Model\OnlineSzamlaStatusEnum**](OnlineSzamlaStatusEnum.md) |  | [optional]
**relatedDocuments** | [**\Cone\Billingo\Model\DocumentAncestor[]**](DocumentAncestor.md) |  | [optional]
**discount** | [**\Cone\Billingo\Model\Discount**](Discount.md) |  | [optional]
**correctionType** | [**\Cone\Billingo\Model\CorrectionType**](CorrectionType.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
