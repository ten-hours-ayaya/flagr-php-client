# Ayaya\FlagrClient\TagApi

All URIs are relative to */api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createTag**](TagApi.md#createtag) | **POST** /flags/{flagID}/tags | 
[**deleteTag**](TagApi.md#deletetag) | **DELETE** /flags/{flagID}/tags/{tagID} | 
[**findAllTags**](TagApi.md#findalltags) | **GET** /tags | 
[**findTags**](TagApi.md#findtags) | **GET** /flags/{flagID}/tags | 

# **createTag**
> \Ayaya\FlagrClient\Model\Tag createTag($body, $flagID)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ayaya\FlagrClient\Api\TagApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Ayaya\FlagrClient\Model\CreateTagRequest(); // \Ayaya\FlagrClient\Model\CreateTagRequest | create a tag
$flagID = 789; // int | numeric ID of the flag

try {
    $result = $apiInstance->createTag($body, $flagID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TagApi->createTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Ayaya\FlagrClient\Model\CreateTagRequest**](../Model/CreateTagRequest.md)| create a tag |
 **flagID** | **int**| numeric ID of the flag |

### Return type

[**\Ayaya\FlagrClient\Model\Tag**](../Model/Tag.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteTag**
> deleteTag($flagID, $tagID)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ayaya\FlagrClient\Api\TagApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$flagID = 789; // int | numeric ID of the flag
$tagID = 789; // int | numeric ID of the tag

try {
    $apiInstance->deleteTag($flagID, $tagID);
} catch (Exception $e) {
    echo 'Exception when calling TagApi->deleteTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **flagID** | **int**| numeric ID of the flag |
 **tagID** | **int**| numeric ID of the tag |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **findAllTags**
> \Ayaya\FlagrClient\Model\Tag[] findAllTags($limit, $offset, $valueLike)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ayaya\FlagrClient\Api\TagApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$limit = 789; // int | the numbers of tags to return
$offset = 789; // int | return tags given the offset, it should usually set together with limit
$valueLike = "valueLike_example"; // string | return tags partially matching given value

try {
    $result = $apiInstance->findAllTags($limit, $offset, $valueLike);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TagApi->findAllTags: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**| the numbers of tags to return | [optional]
 **offset** | **int**| return tags given the offset, it should usually set together with limit | [optional]
 **valueLike** | **string**| return tags partially matching given value | [optional]

### Return type

[**\Ayaya\FlagrClient\Model\Tag[]**](../Model/Tag.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **findTags**
> \Ayaya\FlagrClient\Model\Tag[] findTags($flagID)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ayaya\FlagrClient\Api\TagApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$flagID = 789; // int | numeric ID of the flag

try {
    $result = $apiInstance->findTags($flagID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TagApi->findTags: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **flagID** | **int**| numeric ID of the flag |

### Return type

[**\Ayaya\FlagrClient\Model\Tag[]**](../Model/Tag.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

