# Cone\Billingo\DocumentApi

All URIs are relative to https://api.billingo.hu/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**archiveDocument()**](DocumentApi.md#archiveDocument) | **PUT** /documents/{id}/archive | Archive a proforma document. |
| [**cancelDocument()**](DocumentApi.md#cancelDocument) | **POST** /documents/{id}/cancel | Cancel a document |
| [**createDocument()**](DocumentApi.md#createDocument) | **POST** /documents | Create a document |
| [**createDocumentFromDraft()**](DocumentApi.md#createDocumentFromDraft) | **PUT** /documents/{id} | Converts a draft to an invoice. |
| [**createDocumentFromProforma()**](DocumentApi.md#createDocumentFromProforma) | **POST** /documents/{id}/create-from-proforma | Create a document from proforma. |
| [**createModificationDocument()**](DocumentApi.md#createModificationDocument) | **POST** /documents/{id}/create-modification-document | Create a modification document. |
| [**createReceipt()**](DocumentApi.md#createReceipt) | **POST** /documents/receipt | Create a receipt |
| [**createReceiptFromDraft()**](DocumentApi.md#createReceiptFromDraft) | **PUT** /documents/receipt/{id} | Converts a draft to a receipt. |
| [**deleteDocument()**](DocumentApi.md#deleteDocument) | **DELETE** /documents/{id} | Delete a draft. |
| [**deletePayment()**](DocumentApi.md#deletePayment) | **DELETE** /documents/{id}/payments | Delete all payment history on document |
| [**documentCopy()**](DocumentApi.md#documentCopy) | **POST** /documents/{id}/copy | Copy a document |
| [**downloadDocument()**](DocumentApi.md#downloadDocument) | **GET** /documents/{id}/download | Download a document in PDF format. |
| [**getDocument()**](DocumentApi.md#getDocument) | **GET** /documents/{id} | Retrieve a document |
| [**getDocumentByVendorId()**](DocumentApi.md#getDocumentByVendorId) | **GET** /documents/vendor/{vendor_id} | Retrieve a document by vendor id |
| [**getOnlineSzamlaStatus()**](DocumentApi.md#getOnlineSzamlaStatus) | **GET** /documents/{id}/online-szamla | Retrieve a document Online Számla status |
| [**getPayment()**](DocumentApi.md#getPayment) | **GET** /documents/{id}/payments | Retrieve a payment histroy |
| [**getPublicUrl()**](DocumentApi.md#getPublicUrl) | **GET** /documents/{id}/public-url | Retrieve a document download public url. |
| [**listDocument()**](DocumentApi.md#listDocument) | **GET** /documents | List all documents |
| [**posPrint()**](DocumentApi.md#posPrint) | **GET** /documents/{id}/print/pos | Returns a printable POS PDF |
| [**sendDocument()**](DocumentApi.md#sendDocument) | **POST** /documents/{id}/send | Send invoice to given email adresses. |
| [**updatePayment()**](DocumentApi.md#updatePayment) | **PUT** /documents/{id}/payments | Update payment history |


## `archiveDocument()`

```php
archiveDocument($id)
```

Archive a proforma document.

Archive an existing proforma document.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Cone\Billingo\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Cone\Billingo\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Cone\Billingo\Api\DocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $apiInstance->archiveDocument($id);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->archiveDocument: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cancelDocument()`

```php
cancelDocument($id, $documentCancellation): \Cone\Billingo\Model\Document
```

Cancel a document

Cancel a document. Returns a cancellation document object if the cancellation is succeded.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Cone\Billingo\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Cone\Billingo\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Cone\Billingo\Api\DocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$documentCancellation = new \Cone\Billingo\Model\DocumentCancellation(); // \Cone\Billingo\Model\DocumentCancellation | Comment and notifiable email addresses - comma separated for multiple email addresses

try {
    $result = $apiInstance->cancelDocument($id, $documentCancellation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->cancelDocument: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **documentCancellation** | [**\Cone\Billingo\Model\DocumentCancellation**](../Model/DocumentCancellation.md)| Comment and notifiable email addresses - comma separated for multiple email addresses | [optional] |

### Return type

[**\Cone\Billingo\Model\Document**](../Model/Document.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createDocument()`

```php
createDocument($documentInsert): \Cone\Billingo\Model\Document
```

Create a document

Create a new document. Returns a document object if the create is succeded.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Cone\Billingo\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Cone\Billingo\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Cone\Billingo\Api\DocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$documentInsert = new \Cone\Billingo\Model\DocumentInsert(); // \Cone\Billingo\Model\DocumentInsert | DocumentInsert object that you would like to store.

try {
    $result = $apiInstance->createDocument($documentInsert);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->createDocument: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **documentInsert** | [**\Cone\Billingo\Model\DocumentInsert**](../Model/DocumentInsert.md)| DocumentInsert object that you would like to store. | |

### Return type

[**\Cone\Billingo\Model\Document**](../Model/Document.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createDocumentFromDraft()`

```php
createDocumentFromDraft($id, $documentInsert): \Cone\Billingo\Model\Document
```

Converts a draft to an invoice.

Converts a draft to an invoice. Returns the invoice object if the convert is succeded.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Cone\Billingo\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Cone\Billingo\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Cone\Billingo\Api\DocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$documentInsert = new \Cone\Billingo\Model\DocumentInsert(); // \Cone\Billingo\Model\DocumentInsert | DocumentInsert object that you would like to store.

try {
    $result = $apiInstance->createDocumentFromDraft($id, $documentInsert);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->createDocumentFromDraft: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **documentInsert** | [**\Cone\Billingo\Model\DocumentInsert**](../Model/DocumentInsert.md)| DocumentInsert object that you would like to store. | |

### Return type

[**\Cone\Billingo\Model\Document**](../Model/Document.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createDocumentFromProforma()`

```php
createDocumentFromProforma($id, $invoiceSettings): \Cone\Billingo\Model\Document
```

Create a document from proforma.

Create a new document from proforma. Returns a document object if the create is succeded.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Cone\Billingo\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Cone\Billingo\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Cone\Billingo\Api\DocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$invoiceSettings = new \Cone\Billingo\Model\InvoiceSettings(); // \Cone\Billingo\Model\InvoiceSettings | InvoiceSettings object.

try {
    $result = $apiInstance->createDocumentFromProforma($id, $invoiceSettings);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->createDocumentFromProforma: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **invoiceSettings** | [**\Cone\Billingo\Model\InvoiceSettings**](../Model/InvoiceSettings.md)| InvoiceSettings object. | [optional] |

### Return type

[**\Cone\Billingo\Model\Document**](../Model/Document.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createModificationDocument()`

```php
createModificationDocument($id, $modificationDocumentInsert): \Cone\Billingo\Model\Document
```

Create a modification document.

Create a modification document for the given document. Returns a new document object if the create is successful.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Cone\Billingo\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Cone\Billingo\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Cone\Billingo\Api\DocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$modificationDocumentInsert = new \Cone\Billingo\Model\ModificationDocumentInsert(); // \Cone\Billingo\Model\ModificationDocumentInsert | ModificationDocumentInsert object that you would like to store.

try {
    $result = $apiInstance->createModificationDocument($id, $modificationDocumentInsert);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->createModificationDocument: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **modificationDocumentInsert** | [**\Cone\Billingo\Model\ModificationDocumentInsert**](../Model/ModificationDocumentInsert.md)| ModificationDocumentInsert object that you would like to store. | |

### Return type

[**\Cone\Billingo\Model\Document**](../Model/Document.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createReceipt()`

```php
createReceipt($receiptInsert): \Cone\Billingo\Model\Document
```

Create a receipt

Create a new receipt. Returns a document object if the create is succeded.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Cone\Billingo\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Cone\Billingo\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Cone\Billingo\Api\DocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$receiptInsert = new \Cone\Billingo\Model\ReceiptInsert(); // \Cone\Billingo\Model\ReceiptInsert | ReceiptInsert object that you would like to store.

try {
    $result = $apiInstance->createReceipt($receiptInsert);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->createReceipt: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **receiptInsert** | [**\Cone\Billingo\Model\ReceiptInsert**](../Model/ReceiptInsert.md)| ReceiptInsert object that you would like to store. | |

### Return type

[**\Cone\Billingo\Model\Document**](../Model/Document.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createReceiptFromDraft()`

```php
createReceiptFromDraft($id, $receiptInsert): \Cone\Billingo\Model\Document
```

Converts a draft to a receipt.

Converts a draft to a receipt. Returns the receipt object if the convert is succeded.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Cone\Billingo\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Cone\Billingo\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Cone\Billingo\Api\DocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$receiptInsert = new \Cone\Billingo\Model\ReceiptInsert(); // \Cone\Billingo\Model\ReceiptInsert | ReceiptInsert object that you would like to store.

try {
    $result = $apiInstance->createReceiptFromDraft($id, $receiptInsert);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->createReceiptFromDraft: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **receiptInsert** | [**\Cone\Billingo\Model\ReceiptInsert**](../Model/ReceiptInsert.md)| ReceiptInsert object that you would like to store. | |

### Return type

[**\Cone\Billingo\Model\Document**](../Model/Document.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteDocument()`

```php
deleteDocument($id)
```

Delete a draft.

Delete an existing draft.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Cone\Billingo\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Cone\Billingo\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Cone\Billingo\Api\DocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $apiInstance->deleteDocument($id);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->deleteDocument: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deletePayment()`

```php
deletePayment($id): \Cone\Billingo\Model\PaymentHistory[]
```

Delete all payment history on document

Delete all exist payment history on document.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Cone\Billingo\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Cone\Billingo\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Cone\Billingo\Api\DocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $result = $apiInstance->deletePayment($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->deletePayment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

[**\Cone\Billingo\Model\PaymentHistory[]**](../Model/PaymentHistory.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `documentCopy()`

```php
documentCopy($id): \Cone\Billingo\Model\Document
```

Copy a document

Copy a document. Returns the new document if the copy was succeded.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Cone\Billingo\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Cone\Billingo\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Cone\Billingo\Api\DocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $result = $apiInstance->documentCopy($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->documentCopy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

[**\Cone\Billingo\Model\Document**](../Model/Document.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `downloadDocument()`

```php
downloadDocument($id): \SplFileObject
```

Download a document in PDF format.

Download a document. Returns a document in PDF format.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Cone\Billingo\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Cone\Billingo\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Cone\Billingo\Api\DocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $result = $apiInstance->downloadDocument($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->downloadDocument: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

**\SplFileObject**

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/pdf`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDocument()`

```php
getDocument($id): \Cone\Billingo\Model\Document
```

Retrieve a document

Retrieves the details of an existing document.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Cone\Billingo\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Cone\Billingo\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Cone\Billingo\Api\DocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $result = $apiInstance->getDocument($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->getDocument: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

[**\Cone\Billingo\Model\Document**](../Model/Document.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDocumentByVendorId()`

```php
getDocumentByVendorId($vendorId): \Cone\Billingo\Model\Document
```

Retrieve a document by vendor id

Retrieves the details of an existing document by vendor id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Cone\Billingo\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Cone\Billingo\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Cone\Billingo\Api\DocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$vendorId = 'vendorId_example'; // string

try {
    $result = $apiInstance->getDocumentByVendorId($vendorId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->getDocumentByVendorId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **vendorId** | **string**|  | |

### Return type

[**\Cone\Billingo\Model\Document**](../Model/Document.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOnlineSzamlaStatus()`

```php
getOnlineSzamlaStatus($id): \Cone\Billingo\Model\OnlineSzamlaStatus
```

Retrieve a document Online Számla status

Retrieves the details of an existing document status.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Cone\Billingo\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Cone\Billingo\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Cone\Billingo\Api\DocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $result = $apiInstance->getOnlineSzamlaStatus($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->getOnlineSzamlaStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

[**\Cone\Billingo\Model\OnlineSzamlaStatus**](../Model/OnlineSzamlaStatus.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPayment()`

```php
getPayment($id): \Cone\Billingo\Model\PaymentHistory[]
```

Retrieve a payment histroy

Retrieves the details of payment history an existing document.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Cone\Billingo\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Cone\Billingo\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Cone\Billingo\Api\DocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $result = $apiInstance->getPayment($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->getPayment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

[**\Cone\Billingo\Model\PaymentHistory[]**](../Model/PaymentHistory.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPublicUrl()`

```php
getPublicUrl($id): \Cone\Billingo\Model\DocumentPublicUrl
```

Retrieve a document download public url.

Retrieves public url to download an existing document.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Cone\Billingo\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Cone\Billingo\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Cone\Billingo\Api\DocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $result = $apiInstance->getPublicUrl($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->getPublicUrl: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

[**\Cone\Billingo\Model\DocumentPublicUrl**](../Model/DocumentPublicUrl.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listDocument()`

```php
listDocument($page, $perPage, $blockId, $partnerId, $paymentMethod, $paymentStatus, $startDate, $endDate, $startNumber, $endNumber, $startYear, $endYear, $type, $query, $paidStartDate, $paidEndDate, $fulfillmentStartDate, $fulfillmentEndDate, $lastModifiedDate): \Cone\Billingo\Model\DocumentList
```

List all documents

Returns a list of your documents. The documents are returned sorted by creation date, with the most recent documents appearing first.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Cone\Billingo\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Cone\Billingo\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Cone\Billingo\Api\DocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 56; // int
$perPage = 25; // int
$blockId = 56; // int | Filter documents by the identifier of your DocumentBlock.
$partnerId = 56; // int | Filter documents by the identifier of your Partner.
$paymentMethod = cash; // PaymentMethod | Filter documents by PaymentMethod value.
$paymentStatus = paid; // PaymentStatus | Filter documents by PaymentStatus value.
$startDate = 2020-05-15; // \DateTime | Filter documents by their invoice date.
$endDate = 2020-05-15; // \DateTime | Filter documents by their invoice date.
$startNumber = 1; // int | Starting number of the document, should not contain year or any other formatting. Required if `start_year` given
$endNumber = 10; // int | Ending number of the document, should not contain year or any other formatting. Required if `end_year` given
$startYear = 2020; // int | Year for `start_number` parameter. Required if `start_number` given.
$endYear = 2020; // int | Year for `end_number` parameter. Required if `end_number` given.
$type = invoice; // DocumentType | Filter documents by type
$query = 'query_example'; // string | Filter documents by the given text
$paidStartDate = 2020-05-15; // \DateTime | Filter documents by their payment date.
$paidEndDate = 2020-05-15; // \DateTime | Filter documents by their payment date.
$fulfillmentStartDate = 2020-05-15; // \DateTime | Filter documents by their fulfillment date.
$fulfillmentEndDate = 2020-05-15; // \DateTime | Filter documents by their fulfillment date.
$lastModifiedDate = 2021-09-03 11:27:00; // string | Filter documents by their last modified date.

try {
    $result = $apiInstance->listDocument($page, $perPage, $blockId, $partnerId, $paymentMethod, $paymentStatus, $startDate, $endDate, $startNumber, $endNumber, $startYear, $endYear, $type, $query, $paidStartDate, $paidEndDate, $fulfillmentStartDate, $fulfillmentEndDate, $lastModifiedDate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->listDocument: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**|  | [optional] |
| **perPage** | **int**|  | [optional] [default to 25] |
| **blockId** | **int**| Filter documents by the identifier of your DocumentBlock. | [optional] |
| **partnerId** | **int**| Filter documents by the identifier of your Partner. | [optional] |
| **paymentMethod** | [**PaymentMethod**](../Model/.md)| Filter documents by PaymentMethod value. | [optional] |
| **paymentStatus** | [**PaymentStatus**](../Model/.md)| Filter documents by PaymentStatus value. | [optional] |
| **startDate** | **\DateTime**| Filter documents by their invoice date. | [optional] |
| **endDate** | **\DateTime**| Filter documents by their invoice date. | [optional] |
| **startNumber** | **int**| Starting number of the document, should not contain year or any other formatting. Required if &#x60;start_year&#x60; given | [optional] |
| **endNumber** | **int**| Ending number of the document, should not contain year or any other formatting. Required if &#x60;end_year&#x60; given | [optional] |
| **startYear** | **int**| Year for &#x60;start_number&#x60; parameter. Required if &#x60;start_number&#x60; given. | [optional] |
| **endYear** | **int**| Year for &#x60;end_number&#x60; parameter. Required if &#x60;end_number&#x60; given. | [optional] |
| **type** | [**DocumentType**](../Model/.md)| Filter documents by type | [optional] |
| **query** | **string**| Filter documents by the given text | [optional] |
| **paidStartDate** | **\DateTime**| Filter documents by their payment date. | [optional] |
| **paidEndDate** | **\DateTime**| Filter documents by their payment date. | [optional] |
| **fulfillmentStartDate** | **\DateTime**| Filter documents by their fulfillment date. | [optional] |
| **fulfillmentEndDate** | **\DateTime**| Filter documents by their fulfillment date. | [optional] |
| **lastModifiedDate** | **string**| Filter documents by their last modified date. | [optional] |

### Return type

[**\Cone\Billingo\Model\DocumentList**](../Model/DocumentList.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `posPrint()`

```php
posPrint($id, $size): \SplFileObject
```

Returns a printable POS PDF

Returns a printable POS PDF file of a particular document.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Cone\Billingo\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Cone\Billingo\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Cone\Billingo\Api\DocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$size = 3.4; // float | In which size the POS PDF should be rendered.

try {
    $result = $apiInstance->posPrint($id, $size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->posPrint: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **size** | **float**| In which size the POS PDF should be rendered. | |

### Return type

**\SplFileObject**

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/pdf`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sendDocument()`

```php
sendDocument($id, $sendDocument): \Cone\Billingo\Model\SendDocument
```

Send invoice to given email adresses.

Returns a list of emails, where the invoice is sent.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Cone\Billingo\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Cone\Billingo\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Cone\Billingo\Api\DocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$sendDocument = new \Cone\Billingo\Model\SendDocument(); // \Cone\Billingo\Model\SendDocument | List of email-s where you want to send the invoice.

try {
    $result = $apiInstance->sendDocument($id, $sendDocument);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->sendDocument: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **sendDocument** | [**\Cone\Billingo\Model\SendDocument**](../Model/SendDocument.md)| List of email-s where you want to send the invoice. | [optional] |

### Return type

[**\Cone\Billingo\Model\SendDocument**](../Model/SendDocument.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updatePayment()`

```php
updatePayment($id, $paymentHistory): \Cone\Billingo\Model\PaymentHistory[]
```

Update payment history

Update payment history an existing document. Returns a payment history object if the update is succeded.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Cone\Billingo\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Cone\Billingo\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Cone\Billingo\Api\DocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$paymentHistory = array(new \Cone\Billingo\Model\PaymentHistory()); // \Cone\Billingo\Model\PaymentHistory[] | Payment history object that you would like to update.

try {
    $result = $apiInstance->updatePayment($id, $paymentHistory);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->updatePayment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **paymentHistory** | [**\Cone\Billingo\Model\PaymentHistory[]**](../Model/PaymentHistory.md)| Payment history object that you would like to update. | |

### Return type

[**\Cone\Billingo\Model\PaymentHistory[]**](../Model/PaymentHistory.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
