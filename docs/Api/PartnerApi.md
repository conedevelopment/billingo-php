# Cone\Billingo\PartnerApi

All URIs are relative to https://api.billingo.hu/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createPartner()**](PartnerApi.md#createPartner) | **POST** /partners | Create a partner |
| [**listPartner()**](PartnerApi.md#listPartner) | **GET** /partners | List all partners |


## `createPartner()`

```php
createPartner($partner): \Cone\Billingo\Model\Partner
```

Create a partner

Create a new partner. Returns a partner object if the create is succeded.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Cone\Billingo\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Cone\Billingo\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Cone\Billingo\Api\PartnerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$partner = new \Cone\Billingo\Model\Partner(); // \Cone\Billingo\Model\Partner | Partner object that you would like to store.

try {
    $result = $apiInstance->createPartner($partner);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PartnerApi->createPartner: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **partner** | [**\Cone\Billingo\Model\Partner**](../Model/Partner.md)| Partner object that you would like to store. | |

### Return type

[**\Cone\Billingo\Model\Partner**](../Model/Partner.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listPartner()`

```php
listPartner($page, $perPage, $query): \Cone\Billingo\Model\PartnerList
```

List all partners

Returns a list of your partners. The partners are returned sorted by creation date, with the most recent partners appearing first.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Cone\Billingo\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Cone\Billingo\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Cone\Billingo\Api\PartnerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 56; // int
$perPage = 25; // int
$query = 'query_example'; // string

try {
    $result = $apiInstance->listPartner($page, $perPage, $query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PartnerApi->listPartner: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**|  | [optional] |
| **perPage** | **int**|  | [optional] [default to 25] |
| **query** | **string**|  | [optional] |

### Return type

[**\Cone\Billingo\Model\PartnerList**](../Model/PartnerList.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
