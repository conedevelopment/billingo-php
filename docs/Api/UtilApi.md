# Cone\Billingo\UtilApi

All URIs are relative to https://api.billingo.hu/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**checkTaxNumber()**](UtilApi.md#checkTaxNumber) | **GET** /utils/check-tax-number/{tax_number} | Check tax number. |
| [**getId()**](UtilApi.md#getId) | **GET** /utils/convert-legacy-id/{id} | Convert legacy ID to v3 ID. |
| [**getServerTime()**](UtilApi.md#getServerTime) | **GET** /utils/time | Get the server time |


## `checkTaxNumber()`

```php
checkTaxNumber($tax_number): \Cone\Billingo\Model\TaxNumber
```

Check tax number.

Check the given tax number format, and NAV validate.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Cone\Billingo\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Cone\Billingo\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Cone\Billingo\Api\UtilApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tax_number = 'tax_number_example'; // string

try {
    $result = $apiInstance->checkTaxNumber($tax_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UtilApi->checkTaxNumber: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tax_number** | **string**|  | |

### Return type

[**\Cone\Billingo\Model\TaxNumber**](../Model/TaxNumber.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getId()`

```php
getId($id): \Cone\Billingo\Model\Id
```

Convert legacy ID to v3 ID.

Retrieves the API v3 ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Cone\Billingo\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Cone\Billingo\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Cone\Billingo\Api\UtilApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $result = $apiInstance->getId($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UtilApi->getId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

[**\Cone\Billingo\Model\Id**](../Model/Id.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getServerTime()`

```php
getServerTime(): \Cone\Billingo\Model\ServerTime
```

Get the server time

Return the server time.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Cone\Billingo\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Cone\Billingo\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Cone\Billingo\Api\UtilApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getServerTime();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UtilApi->getServerTime: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Cone\Billingo\Model\ServerTime**](../Model/ServerTime.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
