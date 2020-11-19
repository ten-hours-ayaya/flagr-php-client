# Ayaya\FlagrClient\DistributionApi

All URIs are relative to */api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**findDistributions**](DistributionApi.md#finddistributions) | **GET** /flags/{flagID}/segments/{segmentID}/distributions | 
[**putDistributions**](DistributionApi.md#putdistributions) | **PUT** /flags/{flagID}/segments/{segmentID}/distributions | 

# **findDistributions**
> \Ayaya\FlagrClient\Model\Distribution[] findDistributions($flag_id, $segment_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ayaya\FlagrClient\Api\DistributionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$flag_id = 789; // int | numeric ID of the flag
$segment_id = 789; // int | numeric ID of the segment

try {
    $result = $apiInstance->findDistributions($flag_id, $segment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DistributionApi->findDistributions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **flag_id** | **int**| numeric ID of the flag |
 **segment_id** | **int**| numeric ID of the segment |

### Return type

[**\Ayaya\FlagrClient\Model\Distribution[]**](../Model/Distribution.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putDistributions**
> \Ayaya\FlagrClient\Model\Distribution[] putDistributions($body, $flag_id, $segment_id)



replace the distribution with the new setting

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ayaya\FlagrClient\Api\DistributionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Ayaya\FlagrClient\Model\PutDistributionsRequest(); // \Ayaya\FlagrClient\Model\PutDistributionsRequest | array of distributions
$flag_id = 789; // int | numeric ID of the flag
$segment_id = 789; // int | numeric ID of the segment

try {
    $result = $apiInstance->putDistributions($body, $flag_id, $segment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DistributionApi->putDistributions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Ayaya\FlagrClient\Model\PutDistributionsRequest**](../Model/PutDistributionsRequest.md)| array of distributions |
 **flag_id** | **int**| numeric ID of the flag |
 **segment_id** | **int**| numeric ID of the segment |

### Return type

[**\Ayaya\FlagrClient\Model\Distribution[]**](../Model/Distribution.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

