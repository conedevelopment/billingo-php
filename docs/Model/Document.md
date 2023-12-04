# # Document

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | The document&#39;s unique identifier. | [optional]
**invoice_number** | **string** | The document&#39;s invoice number. | [optional]
**type** | [**\Cone\Billingo\Model\DocumentType**](DocumentType.md) |  | [optional]
**cancelled** | **bool** |  | [optional]
**block_id** | **int** | DocumentBlock&#39;s identifier. | [optional]
**payment_status** | [**\Cone\Billingo\Model\PaymentStatus**](PaymentStatus.md) |  | [optional]
**payment_method** | [**\Cone\Billingo\Model\PaymentMethod**](PaymentMethod.md) |  | [optional]
**gross_total** | **float** | The document&#39;s gross total price. | [optional]
**currency** | [**\Cone\Billingo\Model\Currency**](Currency.md) |  | [optional]
**conversion_rate** | **float** |  | [optional]
**invoice_date** | **\DateTime** |  | [optional]
**fulfillment_date** | **\DateTime** |  | [optional]
**due_date** | **\DateTime** |  | [optional]
**paid_date** | **\DateTime** | If payment_status equals &#39;paid&#39; or &#39;partially_paid&#39;, it will show the paid date otherwise the current date. | [optional]
**organization** | [**\Cone\Billingo\Model\DocumentOrganization**](DocumentOrganization.md) |  | [optional]
**partner** | [**\Cone\Billingo\Model\Partner**](Partner.md) |  | [optional]
**document_partner** | [**\Cone\Billingo\Model\DocumentPartner**](DocumentPartner.md) |  | [optional]
**electronic** | **bool** |  | [optional]
**comment** | **string** |  | [optional]
**tags** | **string[]** |  | [optional]
**notification_status** | [**\Cone\Billingo\Model\DocumentNotificationStatus**](DocumentNotificationStatus.md) |  | [optional]
**language** | [**\Cone\Billingo\Model\DocumentLanguage**](DocumentLanguage.md) |  | [optional]
**items** | [**\Cone\Billingo\Model\DocumentItem[]**](DocumentItem.md) |  | [optional]
**summary** | [**\Cone\Billingo\Model\DocumentSummary**](DocumentSummary.md) |  | [optional]
**settings** | [**\Cone\Billingo\Model\DocumentSettings**](DocumentSettings.md) |  | [optional]
**online_szamla_status** | [**\Cone\Billingo\Model\OnlineSzamlaStatusEnum**](OnlineSzamlaStatusEnum.md) |  | [optional]
**related_documents** | [**\Cone\Billingo\Model\DocumentAncestor[]**](DocumentAncestor.md) |  | [optional]
**discount** | [**\Cone\Billingo\Model\Discount**](Discount.md) |  | [optional]
**correction_type** | [**\Cone\Billingo\Model\CorrectionType**](CorrectionType.md) |  | [optional]
**recurring_id** | **int** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
