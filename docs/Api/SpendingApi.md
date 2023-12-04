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
spendingList($q, $page, $per_page, $spending_date, $start_date, $end_date, $payment_status, $spending_type, $categories, $currencies, $payment_methods): \Cone\Billingo\Model\SpendingList
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
$per_page = 25; // int
$spending_date = invoice_date; // DateType
$start_date = 2021-01-01; // string
$end_date = 2021-01-31; // string
$payment_status = paid; // PaymentStatusSpending
$spending_type = manual; // Source
$categories = overheads; // Category
$currencies = HUF; // Currency
$payment_methods = cash; // PaymentMethod

try {
    $result = $apiInstance->spendingList($q, $page, $per_page, $spending_date, $start_date, $end_date, $payment_status, $spending_type, $categories, $currencies, $payment_methods);
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
| **per_page** | **int**|  | [optional] [default to 25] |
| **spending_date** | [**DateType**](../Model/.md)|  | [optional] |
| **start_date** | **string**|  | [optional] |
| **end_date** | **string**|  | [optional] |
| **payment_status** | [**PaymentStatusSpending**](../Model/.md)|  | [optional] |
| **spending_type** | [**Source**](../Model/.md)|  | [optional] |
| **categories** | [**Category**](../Model/.md)|  | [optional] |
| **currencies** | [**Currency**](../Model/.md)|  | [optional] |
| **payment_methods** | [**PaymentMethod**](../Model/.md)|  | [optional] |

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
spendingSave($spending_save): \Cone\Billingo\Model\Spending
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
$spending_save = new \Cone\Billingo\Model\SpendingSave(); // \Cone\Billingo\Model\SpendingSave

try {
    $result = $apiInstance->spendingSave($spending_save);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SpendingApi->spendingSave: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **spending_save** | [**\Cone\Billingo\Model\SpendingSave**](../Model/SpendingSave.md)|  | [optional] |

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
spendingUpdate($id, $spending_save): \Cone\Billingo\Model\Spending
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
$spending_save = new \Cone\Billingo\Model\SpendingSave(); // \Cone\Billingo\Model\SpendingSave

try {
    $result = $apiInstance->spendingUpdate($id, $spending_save);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SpendingApi->spendingUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **spending_save** | [**\Cone\Billingo\Model\SpendingSave**](../Model/SpendingSave.md)|  | [optional] |

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
