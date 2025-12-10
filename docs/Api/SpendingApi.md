# Cone\Billingo\SpendingApi

All URIs are relative to https://api.billingo.hu/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**spendingDelete()**](SpendingApi.md#spendingDelete) | **DELETE** /spendings/{id} | Deletes a spending. |
| [**spendingList()**](SpendingApi.md#spendingList) | **GET** /spendings | Lists all spending |
| [**spendingSave()**](SpendingApi.md#spendingSave) | **POST** /spendings | Creates a new spending. |
| [**spendingShow()**](SpendingApi.md#spendingShow) | **GET** /spendings/{id} | Retrieves one specific spending. |
| [**spendingUpdate()**](SpendingApi.md#spendingUpdate) | **PUT** /spendings/{id} | Updates a spending item. |


## `spendingDelete()`

```php
spendingDelete($id)
```

Deletes a spending.

Deletes the spending identified by the ID given in path.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Cone\Billingo\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Cone\Billingo\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Cone\Billingo\Api\SpendingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $apiInstance->spendingDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling SpendingApi->spendingDelete: ', $e->getMessage(), PHP_EOL;
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

## `spendingList()`

```php
spendingList($q, $page, $perPage, $spendingDate, $startDate, $endDate, $paymentStatus, $spendingType, $categories, $currencies, $paymentMethods): \Cone\Billingo\Model\SpendingList
```

Lists all spending

Returns a list of your spending items, ordered by the due date.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Cone\Billingo\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Cone\Billingo\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Cone\Billingo\Api\SpendingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$q = ''; // string
$page = 1; // int
$perPage = 25; // int
$spendingDate = invoice_date; // \Cone\Billingo\Model\DateType
$startDate = 2021-01-01; // string
$endDate = 2021-01-31; // string
$paymentStatus = paid; // \Cone\Billingo\Model\PaymentStatusSpending
$spendingType = manual; // \Cone\Billingo\Model\Source
$categories = overheads; // \Cone\Billingo\Model\Category
$currencies = HUF; // \Cone\Billingo\Model\Currency
$paymentMethods = cash; // \Cone\Billingo\Model\PaymentMethod

try {
    $result = $apiInstance->spendingList($q, $page, $perPage, $spendingDate, $startDate, $endDate, $paymentStatus, $spendingType, $categories, $currencies, $paymentMethods);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SpendingApi->spendingList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **q** | **string**|  | [optional] [default to &#39;&#39;] |
| **page** | **int**|  | [optional] [default to 1] |
| **perPage** | **int**|  | [optional] [default to 25] |
| **spendingDate** | [**\Cone\Billingo\Model\DateType**](../Model/.md)|  | [optional] |
| **startDate** | **string**|  | [optional] |
| **endDate** | **string**|  | [optional] |
| **paymentStatus** | [**\Cone\Billingo\Model\PaymentStatusSpending**](../Model/.md)|  | [optional] |
| **spendingType** | [**\Cone\Billingo\Model\Source**](../Model/.md)|  | [optional] |
| **categories** | [**\Cone\Billingo\Model\Category**](../Model/.md)|  | [optional] |
| **currencies** | [**\Cone\Billingo\Model\Currency**](../Model/.md)|  | [optional] |
| **paymentMethods** | [**\Cone\Billingo\Model\PaymentMethod**](../Model/.md)|  | [optional] |

### Return type

[**\Cone\Billingo\Model\SpendingList**](../Model/SpendingList.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `spendingSave()`

```php
spendingSave($spendingSave): \Cone\Billingo\Model\Spending
```

Creates a new spending.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Cone\Billingo\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Cone\Billingo\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Cone\Billingo\Api\SpendingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$spendingSave = new \Cone\Billingo\Model\SpendingSave(); // \Cone\Billingo\Model\SpendingSave

try {
    $result = $apiInstance->spendingSave($spendingSave);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SpendingApi->spendingSave: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **spendingSave** | [**\Cone\Billingo\Model\SpendingSave**](../Model/SpendingSave.md)|  | [optional] |

### Return type

[**\Cone\Billingo\Model\Spending**](../Model/Spending.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `spendingShow()`

```php
spendingShow($id): \Cone\Billingo\Model\Spending
```

Retrieves one specific spending.

Retrives the spending identified by the given ID in path.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Cone\Billingo\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Cone\Billingo\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Cone\Billingo\Api\SpendingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $result = $apiInstance->spendingShow($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SpendingApi->spendingShow: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

[**\Cone\Billingo\Model\Spending**](../Model/Spending.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `spendingUpdate()`

```php
spendingUpdate($id, $spendingSave): \Cone\Billingo\Model\Spending
```

Updates a spending item.

Updates the spending item identified by the ID given in path.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Cone\Billingo\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Cone\Billingo\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Cone\Billingo\Api\SpendingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$spendingSave = new \Cone\Billingo\Model\SpendingSave(); // \Cone\Billingo\Model\SpendingSave

try {
    $result = $apiInstance->spendingUpdate($id, $spendingSave);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SpendingApi->spendingUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **spendingSave** | [**\Cone\Billingo\Model\SpendingSave**](../Model/SpendingSave.md)|  | [optional] |

### Return type

[**\Cone\Billingo\Model\Spending**](../Model/Spending.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
