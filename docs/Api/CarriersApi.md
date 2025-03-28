# OpenAPI\Client\Kaufland\CarriersApi

All URIs are relative to /v2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getCarriers()**](CarriersApi.md#getCarriers) | **GET** /carriers | Get a list of available carriers |


## `getCarriers()`

```php
getCarriers(): \OpenAPI\Client\Kaufland\Model\ApiResponseCarriers
```

Get a list of available carriers

Get a list of available carriers.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Kaufland\Api\CarriersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getCarriers();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CarriersApi->getCarriers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Kaufland\Model\ApiResponseCarriers**](../Model/ApiResponseCarriers.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
