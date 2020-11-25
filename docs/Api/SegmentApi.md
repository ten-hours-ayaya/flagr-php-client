# Ayaya\FlagrClient\SegmentApi

All URIs are relative to */api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createSegment**](SegmentApi.md#createsegment) | **POST** /flags/{flagID}/segments | 
[**deleteSegment**](SegmentApi.md#deletesegment) | **DELETE** /flags/{flagID}/segments/{segmentID} | 
[**findSegments**](SegmentApi.md#findsegments) | **GET** /flags/{flagID}/segments | 
[**putSegment**](SegmentApi.md#putsegment) | **PUT** /flags/{flagID}/segments/{segmentID} | 
[**putSegmentsReorder**](SegmentApi.md#putsegmentsreorder) | **PUT** /flags/{flagID}/segments/reorder | 

# **createSegment**
> \Ayaya\FlagrClient\Model\Segment createSegment($body, $flagID)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ayaya\FlagrClient\Api\SegmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Ayaya\FlagrClient\Model\CreateSegmentRequest(); // \Ayaya\FlagrClient\Model\CreateSegmentRequest | create a segment under a flag
$flagID = 789; // int | numeric ID of the flag to get

try {
    $result = $apiInstance->createSegment($body, $flagID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SegmentApi->createSegment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Ayaya\FlagrClient\Model\CreateSegmentRequest**](../Model/CreateSegmentRequest.md)| create a segment under a flag |
 **flagID** | **int**| numeric ID of the flag to get |

### Return type

[**\Ayaya\FlagrClient\Model\Segment**](../Model/Segment.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteSegment**
> deleteSegment($flagID, $segmentID)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ayaya\FlagrClient\Api\SegmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$flagID = 789; // int | numeric ID of the flag
$segmentID = 789; // int | numeric ID of the segment

try {
    $apiInstance->deleteSegment($flagID, $segmentID);
} catch (Exception $e) {
    echo 'Exception when calling SegmentApi->deleteSegment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **flagID** | **int**| numeric ID of the flag |
 **segmentID** | **int**| numeric ID of the segment |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **findSegments**
> \Ayaya\FlagrClient\Model\Segment[] findSegments($flagID)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ayaya\FlagrClient\Api\SegmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$flagID = 789; // int | numeric ID of the flag to get

try {
    $result = $apiInstance->findSegments($flagID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SegmentApi->findSegments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **flagID** | **int**| numeric ID of the flag to get |

### Return type

[**\Ayaya\FlagrClient\Model\Segment[]**](../Model/Segment.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putSegment**
> \Ayaya\FlagrClient\Model\Segment putSegment($body, $flagID, $segmentID)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ayaya\FlagrClient\Api\SegmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Ayaya\FlagrClient\Model\PutSegmentRequest(); // \Ayaya\FlagrClient\Model\PutSegmentRequest | update a segment
$flagID = 789; // int | numeric ID of the flag
$segmentID = 789; // int | numeric ID of the segment

try {
    $result = $apiInstance->putSegment($body, $flagID, $segmentID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SegmentApi->putSegment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Ayaya\FlagrClient\Model\PutSegmentRequest**](../Model/PutSegmentRequest.md)| update a segment |
 **flagID** | **int**| numeric ID of the flag |
 **segmentID** | **int**| numeric ID of the segment |

### Return type

[**\Ayaya\FlagrClient\Model\Segment**](../Model/Segment.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putSegmentsReorder**
> putSegmentsReorder($body, $flagID)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ayaya\FlagrClient\Api\SegmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Ayaya\FlagrClient\Model\PutSegmentReorderRequest(); // \Ayaya\FlagrClient\Model\PutSegmentReorderRequest | reorder segments
$flagID = 789; // int | numeric ID of the flag

try {
    $apiInstance->putSegmentsReorder($body, $flagID);
} catch (Exception $e) {
    echo 'Exception when calling SegmentApi->putSegmentsReorder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Ayaya\FlagrClient\Model\PutSegmentReorderRequest**](../Model/PutSegmentReorderRequest.md)| reorder segments |
 **flagID** | **int**| numeric ID of the flag |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

