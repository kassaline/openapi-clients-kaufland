# OpenAPI\Client\Kaufland\ImportFilesApi

All URIs are relative to /v2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createInventoryCommandImportFile()**](ImportFilesApi.md#createInventoryCommandImportFile) | **POST** /import-files/inventory-command | Add an INVENTORY_COMMAND file URL |
| [**createInventoryFeedImportFile()**](ImportFilesApi.md#createInventoryFeedImportFile) | **POST** /import-files/inventory-feed | Add an INVENTORY_FEED file URL |
| [**createOrderCommandImportFile()**](ImportFilesApi.md#createOrderCommandImportFile) | **POST** /import-files/order-command | Add an ORDER_COMMAND file URL |
| [**getInventoryCommandImportFile()**](ImportFilesApi.md#getInventoryCommandImportFile) | **GET** /import-files/inventory-command/{id_import_file} | Get an inventory command import file by ID |
| [**getInventoryCommandImportFiles()**](ImportFilesApi.md#getInventoryCommandImportFiles) | **GET** /import-files/inventory-command | Get a list of your inventory command import files |
| [**getInventoryFeedImportFile()**](ImportFilesApi.md#getInventoryFeedImportFile) | **GET** /import-files/inventory-feed/{id_import_file} | Get an inventory feed import file by ID |
| [**getInventoryFeedImportFiles()**](ImportFilesApi.md#getInventoryFeedImportFiles) | **GET** /import-files/inventory-feed | Get a list of your inventory feed import files |
| [**getOrderCommandImportFile()**](ImportFilesApi.md#getOrderCommandImportFile) | **GET** /import-files/order-command/{id_import_file} | Get an order command import file by ID |
| [**getOrderCommandImportFiles()**](ImportFilesApi.md#getOrderCommandImportFiles) | **GET** /import-files/order-command | Get a list of your order command import files |


## `createInventoryCommandImportFile()`

```php
createInventoryCommandImportFile($storefront, $importFileInventoryCommandPostRequest): \OpenAPI\Client\Kaufland\Model\ApiResponseImportFileInventoryCommand
```

Add an INVENTORY_COMMAND file URL

Saves an URL where a new import file is located. The file located at the URL will be downloaded and processed asynchronously and the contents imported.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Kaufland\Api\ImportFilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$storefront = new \OpenAPI\Client\Kaufland\Model\\OpenAPI\Client\Kaufland\Model\Storefront(); // \OpenAPI\Client\Kaufland\Model\Storefront | Parameter to select the affected storefront
$importFileInventoryCommandPostRequest = new \OpenAPI\Client\Kaufland\Model\ImportFileInventoryCommandPostRequest(); // \OpenAPI\Client\Kaufland\Model\ImportFileInventoryCommandPostRequest

try {
    $result = $apiInstance->createInventoryCommandImportFile($storefront, $importFileInventoryCommandPostRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImportFilesApi->createInventoryCommandImportFile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **storefront** | [**\OpenAPI\Client\Kaufland\Model\Storefront**](../Model/.md)| Parameter to select the affected storefront | |
| **importFileInventoryCommandPostRequest** | [**\OpenAPI\Client\Kaufland\Model\ImportFileInventoryCommandPostRequest**](../Model/ImportFileInventoryCommandPostRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Kaufland\Model\ApiResponseImportFileInventoryCommand**](../Model/ApiResponseImportFileInventoryCommand.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createInventoryFeedImportFile()`

```php
createInventoryFeedImportFile($storefront, $importFileInventoryFeedPostRequest): \OpenAPI\Client\Kaufland\Model\ApiResponseImportFileInventoryFeed
```

Add an INVENTORY_FEED file URL

Saves an URL where a new import file is located. The file located at the URL will be downloaded and processed asynchronously and the contents imported.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Kaufland\Api\ImportFilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$storefront = new \OpenAPI\Client\Kaufland\Model\\OpenAPI\Client\Kaufland\Model\Storefront(); // \OpenAPI\Client\Kaufland\Model\Storefront | Parameter to select the affected storefront
$importFileInventoryFeedPostRequest = new \OpenAPI\Client\Kaufland\Model\ImportFileInventoryFeedPostRequest(); // \OpenAPI\Client\Kaufland\Model\ImportFileInventoryFeedPostRequest

try {
    $result = $apiInstance->createInventoryFeedImportFile($storefront, $importFileInventoryFeedPostRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImportFilesApi->createInventoryFeedImportFile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **storefront** | [**\OpenAPI\Client\Kaufland\Model\Storefront**](../Model/.md)| Parameter to select the affected storefront | |
| **importFileInventoryFeedPostRequest** | [**\OpenAPI\Client\Kaufland\Model\ImportFileInventoryFeedPostRequest**](../Model/ImportFileInventoryFeedPostRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Kaufland\Model\ApiResponseImportFileInventoryFeed**](../Model/ApiResponseImportFileInventoryFeed.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createOrderCommandImportFile()`

```php
createOrderCommandImportFile($importFileOrderCommandPostRequest): \OpenAPI\Client\Kaufland\Model\ApiResponseImportFileOrderCommand
```

Add an ORDER_COMMAND file URL

Saves an URL where a new import file is located. The file located at the URL will be downloaded and processed asynchronously and the contents imported.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Kaufland\Api\ImportFilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$importFileOrderCommandPostRequest = new \OpenAPI\Client\Kaufland\Model\ImportFileOrderCommandPostRequest(); // \OpenAPI\Client\Kaufland\Model\ImportFileOrderCommandPostRequest

try {
    $result = $apiInstance->createOrderCommandImportFile($importFileOrderCommandPostRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImportFilesApi->createOrderCommandImportFile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **importFileOrderCommandPostRequest** | [**\OpenAPI\Client\Kaufland\Model\ImportFileOrderCommandPostRequest**](../Model/ImportFileOrderCommandPostRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Kaufland\Model\ApiResponseImportFileOrderCommand**](../Model/ApiResponseImportFileOrderCommand.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getInventoryCommandImportFile()`

```php
getInventoryCommandImportFile($storefront, $idImportFile): \OpenAPI\Client\Kaufland\Model\ApiResponseImportFileInventoryCommand
```

Get an inventory command import file by ID

Get an inventory command import file by its <code>id_import_file</code>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Kaufland\Api\ImportFilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$storefront = new \OpenAPI\Client\Kaufland\Model\\OpenAPI\Client\Kaufland\Model\Storefront(); // \OpenAPI\Client\Kaufland\Model\Storefront | Parameter to select the affected storefront
$idImportFile = 56; // int | Internal ID of Import File

try {
    $result = $apiInstance->getInventoryCommandImportFile($storefront, $idImportFile);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImportFilesApi->getInventoryCommandImportFile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **storefront** | [**\OpenAPI\Client\Kaufland\Model\Storefront**](../Model/.md)| Parameter to select the affected storefront | |
| **idImportFile** | **int**| Internal ID of Import File | |

### Return type

[**\OpenAPI\Client\Kaufland\Model\ApiResponseImportFileInventoryCommand**](../Model/ApiResponseImportFileInventoryCommand.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getInventoryCommandImportFiles()`

```php
getInventoryCommandImportFiles($storefront, $status, $tsCreatedIso, $tsUpdatedIso, $sort, $limit, $offset): \OpenAPI\Client\Kaufland\Model\CollectionApiResponseImportFileInventoryCommand
```

Get a list of your inventory command import files

Get a list of your inventory command import files.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Kaufland\Api\ImportFilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$storefront = new \OpenAPI\Client\Kaufland\Model\\OpenAPI\Client\Kaufland\Model\Storefront(); // \OpenAPI\Client\Kaufland\Model\Storefront | Parameter to select the affected storefront
$status = new \OpenAPI\Client\Kaufland\Model\\OpenAPI\Client\Kaufland\Model\ImportStatus(); // \OpenAPI\Client\Kaufland\Model\ImportStatus | File status filter
$tsCreatedIso = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime
$tsUpdatedIso = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime
$sort = new \OpenAPI\Client\Kaufland\Model\\OpenAPI\Client\Kaufland\Model\ImportFilesSortBy(); // \OpenAPI\Client\Kaufland\Model\ImportFilesSortBy
$limit = 30; // int | Desired size of result set
$offset = 0; // int | Offset applied to result set

try {
    $result = $apiInstance->getInventoryCommandImportFiles($storefront, $status, $tsCreatedIso, $tsUpdatedIso, $sort, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImportFilesApi->getInventoryCommandImportFiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **storefront** | [**\OpenAPI\Client\Kaufland\Model\Storefront**](../Model/.md)| Parameter to select the affected storefront | |
| **status** | [**\OpenAPI\Client\Kaufland\Model\ImportStatus**](../Model/.md)| File status filter | [optional] |
| **tsCreatedIso** | **\DateTime**|  | [optional] |
| **tsUpdatedIso** | **\DateTime**|  | [optional] |
| **sort** | [**\OpenAPI\Client\Kaufland\Model\ImportFilesSortBy**](../Model/.md)|  | [optional] |
| **limit** | **int**| Desired size of result set | [optional] [default to 30] |
| **offset** | **int**| Offset applied to result set | [optional] [default to 0] |

### Return type

[**\OpenAPI\Client\Kaufland\Model\CollectionApiResponseImportFileInventoryCommand**](../Model/CollectionApiResponseImportFileInventoryCommand.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getInventoryFeedImportFile()`

```php
getInventoryFeedImportFile($storefront, $idImportFile): \OpenAPI\Client\Kaufland\Model\ApiResponseImportFileInventoryFeed
```

Get an inventory feed import file by ID

Get an inventory feed import file by its <code>id_import_file</code>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Kaufland\Api\ImportFilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$storefront = new \OpenAPI\Client\Kaufland\Model\\OpenAPI\Client\Kaufland\Model\Storefront(); // \OpenAPI\Client\Kaufland\Model\Storefront | Parameter to select the affected storefront
$idImportFile = 56; // int | Internal ID of Import File

try {
    $result = $apiInstance->getInventoryFeedImportFile($storefront, $idImportFile);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImportFilesApi->getInventoryFeedImportFile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **storefront** | [**\OpenAPI\Client\Kaufland\Model\Storefront**](../Model/.md)| Parameter to select the affected storefront | |
| **idImportFile** | **int**| Internal ID of Import File | |

### Return type

[**\OpenAPI\Client\Kaufland\Model\ApiResponseImportFileInventoryFeed**](../Model/ApiResponseImportFileInventoryFeed.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getInventoryFeedImportFiles()`

```php
getInventoryFeedImportFiles($storefront, $status, $tsCreatedIso, $tsUpdatedIso, $sort, $limit, $offset): \OpenAPI\Client\Kaufland\Model\CollectionApiResponseImportFileInventoryFeed
```

Get a list of your inventory feed import files

Get a list of your inventory feed import files.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Kaufland\Api\ImportFilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$storefront = new \OpenAPI\Client\Kaufland\Model\\OpenAPI\Client\Kaufland\Model\Storefront(); // \OpenAPI\Client\Kaufland\Model\Storefront | Parameter to select the affected storefront
$status = new \OpenAPI\Client\Kaufland\Model\\OpenAPI\Client\Kaufland\Model\ImportStatus(); // \OpenAPI\Client\Kaufland\Model\ImportStatus | File status filter
$tsCreatedIso = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime
$tsUpdatedIso = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime
$sort = new \OpenAPI\Client\Kaufland\Model\\OpenAPI\Client\Kaufland\Model\ImportFilesSortBy(); // \OpenAPI\Client\Kaufland\Model\ImportFilesSortBy
$limit = 30; // int | Desired size of result set
$offset = 0; // int | Offset applied to result set

try {
    $result = $apiInstance->getInventoryFeedImportFiles($storefront, $status, $tsCreatedIso, $tsUpdatedIso, $sort, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImportFilesApi->getInventoryFeedImportFiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **storefront** | [**\OpenAPI\Client\Kaufland\Model\Storefront**](../Model/.md)| Parameter to select the affected storefront | |
| **status** | [**\OpenAPI\Client\Kaufland\Model\ImportStatus**](../Model/.md)| File status filter | [optional] |
| **tsCreatedIso** | **\DateTime**|  | [optional] |
| **tsUpdatedIso** | **\DateTime**|  | [optional] |
| **sort** | [**\OpenAPI\Client\Kaufland\Model\ImportFilesSortBy**](../Model/.md)|  | [optional] |
| **limit** | **int**| Desired size of result set | [optional] [default to 30] |
| **offset** | **int**| Offset applied to result set | [optional] [default to 0] |

### Return type

[**\OpenAPI\Client\Kaufland\Model\CollectionApiResponseImportFileInventoryFeed**](../Model/CollectionApiResponseImportFileInventoryFeed.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrderCommandImportFile()`

```php
getOrderCommandImportFile($idImportFile): \OpenAPI\Client\Kaufland\Model\ApiResponseImportFileOrderCommand
```

Get an order command import file by ID

Get an order command import file by its <code>id_import_file</code>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Kaufland\Api\ImportFilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$idImportFile = 56; // int | Internal ID of Import File

try {
    $result = $apiInstance->getOrderCommandImportFile($idImportFile);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImportFilesApi->getOrderCommandImportFile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idImportFile** | **int**| Internal ID of Import File | |

### Return type

[**\OpenAPI\Client\Kaufland\Model\ApiResponseImportFileOrderCommand**](../Model/ApiResponseImportFileOrderCommand.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrderCommandImportFiles()`

```php
getOrderCommandImportFiles($status, $tsCreatedIso, $tsUpdatedIso, $sort, $limit, $offset): \OpenAPI\Client\Kaufland\Model\CollectionApiResponseImportFileOrderCommand
```

Get a list of your order command import files

Get a list of your order command import files.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Kaufland\Api\ImportFilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$status = new \OpenAPI\Client\Kaufland\Model\\OpenAPI\Client\Kaufland\Model\ImportStatus(); // \OpenAPI\Client\Kaufland\Model\ImportStatus | File status filter
$tsCreatedIso = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime
$tsUpdatedIso = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime
$sort = new \OpenAPI\Client\Kaufland\Model\\OpenAPI\Client\Kaufland\Model\ImportFilesSortBy(); // \OpenAPI\Client\Kaufland\Model\ImportFilesSortBy
$limit = 30; // int | Desired size of result set
$offset = 0; // int | Offset applied to result set

try {
    $result = $apiInstance->getOrderCommandImportFiles($status, $tsCreatedIso, $tsUpdatedIso, $sort, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImportFilesApi->getOrderCommandImportFiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **status** | [**\OpenAPI\Client\Kaufland\Model\ImportStatus**](../Model/.md)| File status filter | [optional] |
| **tsCreatedIso** | **\DateTime**|  | [optional] |
| **tsUpdatedIso** | **\DateTime**|  | [optional] |
| **sort** | [**\OpenAPI\Client\Kaufland\Model\ImportFilesSortBy**](../Model/.md)|  | [optional] |
| **limit** | **int**| Desired size of result set | [optional] [default to 30] |
| **offset** | **int**| Offset applied to result set | [optional] [default to 0] |

### Return type

[**\OpenAPI\Client\Kaufland\Model\CollectionApiResponseImportFileOrderCommand**](../Model/CollectionApiResponseImportFileOrderCommand.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
