# Cone\Billingo\OrganizationApi

All URIs are relative to https://api.billingo.hu/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getOrganizationData()**](OrganizationApi.md#getOrganizationData) | **GET** /organization | Retrieve a organization data. |


## `getOrganizationData()`

```php
getOrganizationData(): \Cone\Billingo\Model\OrganizationData
```

Retrieve a organization data.

Retrieves the data of organization.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Cone\Billingo\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Cone\Billingo\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Cone\Billingo\Api\OrganizationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getOrganizationData();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationApi->getOrganizationData: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Cone\Billingo\Model\OrganizationData**](../Model/OrganizationData.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
