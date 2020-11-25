# Ayaya\FlagrClient\VariantApi

All URIs are relative to */api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createVariant**](VariantApi.md#createvariant) | **POST** /flags/{flagID}/variants | 
[**deleteVariant**](VariantApi.md#deletevariant) | **DELETE** /flags/{flagID}/variants/{variantID} | 
[**findVariants**](VariantApi.md#findvariants) | **GET** /flags/{flagID}/variants | 
[**putVariant**](VariantApi.md#putvariant) | **PUT** /flags/{flagID}/variants/{variantID} | 

# **createVariant**
> \Ayaya\FlagrClient\Model\Variant createVariant($body, $flagID)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ayaya\FlagrClient\Api\VariantApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Ayaya\FlagrClient\Model\CreateVariantRequest(); // \Ayaya\FlagrClient\Model\CreateVariantRequest | create a variant
$flagID = 789; // int | numeric ID of the flag

try {
    $result = $apiInstance->createVariant($body, $flagID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VariantApi->createVariant: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Ayaya\FlagrClient\Model\CreateVariantRequest**](../Model/CreateVariantRequest.md)| create a variant |
 **flagID** | **int**| numeric ID of the flag |

### Return type

[**\Ayaya\FlagrClient\Model\Variant**](../Model/Variant.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteVariant**
> deleteVariant($flagID, $variantID)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ayaya\FlagrClient\Api\VariantApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$flagID = 789; // int | numeric ID of the flag
$variantID = 789; // int | numeric ID of the variant

try {
    $apiInstance->deleteVariant($flagID, $variantID);
} catch (Exception $e) {
    echo 'Exception when calling VariantApi->deleteVariant: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **flagID** | **int**| numeric ID of the flag |
 **variantID** | **int**| numeric ID of the variant |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **findVariants**
> \Ayaya\FlagrClient\Model\Variant[] findVariants($flagID)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ayaya\FlagrClient\Api\VariantApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$flagID = 789; // int | numeric ID of the flag

try {
    $result = $apiInstance->findVariants($flagID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VariantApi->findVariants: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **flagID** | **int**| numeric ID of the flag |

### Return type

[**\Ayaya\FlagrClient\Model\Variant[]**](../Model/Variant.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putVariant**
> \Ayaya\FlagrClient\Model\Variant putVariant($body, $flagID, $variantID)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ayaya\FlagrClient\Api\VariantApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Ayaya\FlagrClient\Model\PutVariantRequest(); // \Ayaya\FlagrClient\Model\PutVariantRequest | update a variant
$flagID = 789; // int | numeric ID of the flag
$variantID = 789; // int | numeric ID of the variant

try {
    $result = $apiInstance->putVariant($body, $flagID, $variantID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VariantApi->putVariant: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Ayaya\FlagrClient\Model\PutVariantRequest**](../Model/PutVariantRequest.md)| update a variant |
 **flagID** | **int**| numeric ID of the flag |
 **variantID** | **int**| numeric ID of the variant |

### Return type

[**\Ayaya\FlagrClient\Model\Variant**](../Model/Variant.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

