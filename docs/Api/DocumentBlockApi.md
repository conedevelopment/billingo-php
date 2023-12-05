# Cone\Billingo\DocumentBlockApi

All URIs are relative to https://api.billingo.hu/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**listDocumentBlock()**](DocumentBlockApi.md#listDocumentBlock) | **GET** /document-blocks | List all document blocks |


## `listDocumentBlock()`

```php
listDocumentBlock($page, $perPage, $type): \Cone\Billingo\Model\DocumentBlockList
```

List all document blocks

Returns a list of your document blocks. The document blocks are returned sorted by creation date, with the most recent document blocks appearing first.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Cone\Billingo\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Cone\Billingo\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Cone\Billingo\Api\DocumentBlockApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 56; // int
$perPage = 25; // int
$type = invoice; // DocumentBlockType | Filter document blocks by type

try {
    $result = $apiInstance->listDocumentBlock($page, $perPage, $type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentBlockApi->listDocumentBlock: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**|  | [optional] |
| **perPage** | **int**|  | [optional] [default to 25] |
| **type** | [**DocumentBlockType**](../Model/.md)| Filter document blocks by type | [optional] |

### Return type

[**\Cone\Billingo\Model\DocumentBlockList**](../Model/DocumentBlockList.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
