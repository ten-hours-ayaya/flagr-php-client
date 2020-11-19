# Ayaya\FlagrClient\TagApi

All URIs are relative to */api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createTag**](TagApi.md#createtag) | **POST** /flags/{flagID}/tags | 
[**deleteTag**](TagApi.md#deletetag) | **DELETE** /flags/{flagID}/tags/{tagID} | 
[**findAllTags**](TagApi.md#findalltags) | **GET** /tags | 
[**findTags**](TagApi.md#findtags) | **GET** /flags/{flagID}/tags | 

# **createTag**
> \Ayaya\FlagrClient\Model\Tag createTag($body, $flag_id)



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
$flag_id = 789; // int | numeric ID of the flag

try {
    $result = $apiInstance->createTag($body, $flag_id);
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
 **flag_id** | **int**| numeric ID of the flag |

### Return type

[**\Ayaya\FlagrClient\Model\Tag**](../Model/Tag.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteTag**
> deleteTag($flag_id, $tag_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ayaya\FlagrClient\Api\TagApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$flag_id = 789; // int | numeric ID of the flag
$tag_id = 789; // int | numeric ID of the tag

try {
    $apiInstance->deleteTag($flag_id, $tag_id);
} catch (Exception $e) {
    echo 'Exception when calling TagApi->deleteTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **flag_id** | **int**| numeric ID of the flag |
 **tag_id** | **int**| numeric ID of the tag |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **findAllTags**
> \Ayaya\FlagrClient\Model\Tag[] findAllTags($limit, $offset, $value_like)



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
$value_like = "value_like_example"; // string | return tags partially matching given value

try {
    $result = $apiInstance->findAllTags($limit, $offset, $value_like);
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
 **value_like** | **string**| return tags partially matching given value | [optional]

### Return type

[**\Ayaya\FlagrClient\Model\Tag[]**](../Model/Tag.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **findTags**
> \Ayaya\FlagrClient\Model\Tag[] findTags($flag_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ayaya\FlagrClient\Api\TagApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$flag_id = 789; // int | numeric ID of the flag

try {
    $result = $apiInstance->findTags($flag_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TagApi->findTags: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **flag_id** | **int**| numeric ID of the flag |

### Return type

[**\Ayaya\FlagrClient\Model\Tag[]**](../Model/Tag.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

