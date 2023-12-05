# Cone\Billingo\DocumentExportApi

All URIs are relative to https://api.billingo.hu/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**create()**](DocumentExportApi.md#create) | **POST** /document-export | Create document export. |
| [**download()**](DocumentExportApi.md#download) | **GET** /document-export/{id}/download | Return exported binary file. |
| [**poll()**](DocumentExportApi.md#poll) | **GET** /document-export/{id}/poll | Retrieve export state. |


## `create()`

```php
create($createDocumentExport): \Cone\Billingo\Model\DocumentExportId
```

Create document export.

Return with the id of the export.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Cone\Billingo\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Cone\Billingo\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Cone\Billingo\Api\DocumentExportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$createDocumentExport = new \Cone\Billingo\Model\CreateDocumentExport(); // \Cone\Billingo\Model\CreateDocumentExport | Create document export body.

try {
    $result = $apiInstance->create($createDocumentExport);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentExportApi->create: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **createDocumentExport** | [**\Cone\Billingo\Model\CreateDocumentExport**](../Model/CreateDocumentExport.md)| Create document export body. | |

### Return type

[**\Cone\Billingo\Model\DocumentExportId**](../Model/DocumentExportId.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `download()`

```php
download($id): \SplFileObject
```

Return exported binary file.

Return the exported file.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Cone\Billingo\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Cone\Billingo\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Cone\Billingo\Api\DocumentExportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The ID from create document export endpoint.

try {
    $result = $apiInstance->download($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentExportApi->download: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The ID from create document export endpoint. | |

### Return type

**\SplFileObject**

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/*`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `poll()`

```php
poll($id): \Cone\Billingo\Model\DocumentExportStatus
```

Retrieve export state.

Return state of the given export.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Cone\Billingo\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Cone\Billingo\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Cone\Billingo\Api\DocumentExportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The ID from create document export endpoint.

try {
    $result = $apiInstance->poll($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentExportApi->poll: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The ID from create document export endpoint. | |

### Return type

[**\Cone\Billingo\Model\DocumentExportStatus**](../Model/DocumentExportStatus.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
