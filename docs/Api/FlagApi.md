# Ayaya\FlagrClient\FlagApi

All URIs are relative to */api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createFlag**](FlagApi.md#createflag) | **POST** /flags | 
[**deleteFlag**](FlagApi.md#deleteflag) | **DELETE** /flags/{flagID} | 
[**findFlags**](FlagApi.md#findflags) | **GET** /flags | 
[**getFlag**](FlagApi.md#getflag) | **GET** /flags/{flagID} | 
[**getFlagEntityTypes**](FlagApi.md#getflagentitytypes) | **GET** /flags/entity_types | 
[**getFlagSnapshots**](FlagApi.md#getflagsnapshots) | **GET** /flags/{flagID}/snapshots | 
[**putFlag**](FlagApi.md#putflag) | **PUT** /flags/{flagID} | 
[**setFlagEnabled**](FlagApi.md#setflagenabled) | **PUT** /flags/{flagID}/enabled | 

# **createFlag**
> \Ayaya\FlagrClient\Model\Flag createFlag($body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ayaya\FlagrClient\Api\FlagApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Ayaya\FlagrClient\Model\CreateFlagRequest(); // \Ayaya\FlagrClient\Model\CreateFlagRequest | create a flag

try {
    $result = $apiInstance->createFlag($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlagApi->createFlag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Ayaya\FlagrClient\Model\CreateFlagRequest**](../Model/CreateFlagRequest.md)| create a flag |

### Return type

[**\Ayaya\FlagrClient\Model\Flag**](../Model/Flag.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteFlag**
> deleteFlag($flagID)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ayaya\FlagrClient\Api\FlagApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$flagID = 789; // int | numeric ID of the flag

try {
    $apiInstance->deleteFlag($flagID);
} catch (Exception $e) {
    echo 'Exception when calling FlagApi->deleteFlag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **flagID** | **int**| numeric ID of the flag |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **findFlags**
> \Ayaya\FlagrClient\Model\Flag[] findFlags($limit, $enabled, $description, $tags, $descriptionLike, $key, $offset, $preload)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ayaya\FlagrClient\Api\FlagApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$limit = 789; // int | the numbers of flags to return
$enabled = true; // bool | return flags having given enabled status
$description = "description_example"; // string | return flags exactly matching given description
$tags = "tags_example"; // string | return flags with the given tags (comma separated)
$descriptionLike = "descriptionLike_example"; // string | return flags partially matching given description
$key = "key_example"; // string | return flags matching given key
$offset = 789; // int | return flags given the offset, it should usually set together with limit
$preload = true; // bool | return flags with preloaded segments and variants

try {
    $result = $apiInstance->findFlags($limit, $enabled, $description, $tags, $descriptionLike, $key, $offset, $preload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlagApi->findFlags: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**| the numbers of flags to return | [optional]
 **enabled** | **bool**| return flags having given enabled status | [optional]
 **description** | **string**| return flags exactly matching given description | [optional]
 **tags** | **string**| return flags with the given tags (comma separated) | [optional]
 **descriptionLike** | **string**| return flags partially matching given description | [optional]
 **key** | **string**| return flags matching given key | [optional]
 **offset** | **int**| return flags given the offset, it should usually set together with limit | [optional]
 **preload** | **bool**| return flags with preloaded segments and variants | [optional]

### Return type

[**\Ayaya\FlagrClient\Model\Flag[]**](../Model/Flag.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFlag**
> \Ayaya\FlagrClient\Model\Flag getFlag($flagID)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ayaya\FlagrClient\Api\FlagApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$flagID = 789; // int | numeric ID of the flag to get

try {
    $result = $apiInstance->getFlag($flagID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlagApi->getFlag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **flagID** | **int**| numeric ID of the flag to get |

### Return type

[**\Ayaya\FlagrClient\Model\Flag**](../Model/Flag.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFlagEntityTypes**
> string[] getFlagEntityTypes()



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ayaya\FlagrClient\Api\FlagApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getFlagEntityTypes();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlagApi->getFlagEntityTypes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

**string[]**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFlagSnapshots**
> \Ayaya\FlagrClient\Model\FlagSnapshot[] getFlagSnapshots($flagID)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ayaya\FlagrClient\Api\FlagApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$flagID = 789; // int | numeric ID of the flag to get

try {
    $result = $apiInstance->getFlagSnapshots($flagID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlagApi->getFlagSnapshots: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **flagID** | **int**| numeric ID of the flag to get |

### Return type

[**\Ayaya\FlagrClient\Model\FlagSnapshot[]**](../Model/FlagSnapshot.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putFlag**
> \Ayaya\FlagrClient\Model\Flag putFlag($body, $flagID)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ayaya\FlagrClient\Api\FlagApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Ayaya\FlagrClient\Model\PutFlagRequest(); // \Ayaya\FlagrClient\Model\PutFlagRequest | update a flag
$flagID = 789; // int | numeric ID of the flag to get

try {
    $result = $apiInstance->putFlag($body, $flagID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlagApi->putFlag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Ayaya\FlagrClient\Model\PutFlagRequest**](../Model/PutFlagRequest.md)| update a flag |
 **flagID** | **int**| numeric ID of the flag to get |

### Return type

[**\Ayaya\FlagrClient\Model\Flag**](../Model/Flag.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setFlagEnabled**
> \Ayaya\FlagrClient\Model\Flag setFlagEnabled($body, $flagID)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ayaya\FlagrClient\Api\FlagApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Ayaya\FlagrClient\Model\SetFlagEnabledRequest(); // \Ayaya\FlagrClient\Model\SetFlagEnabledRequest | set flag enabled state
$flagID = 789; // int | numeric ID of the flag to get

try {
    $result = $apiInstance->setFlagEnabled($body, $flagID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlagApi->setFlagEnabled: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Ayaya\FlagrClient\Model\SetFlagEnabledRequest**](../Model/SetFlagEnabledRequest.md)| set flag enabled state |
 **flagID** | **int**| numeric ID of the flag to get |

### Return type

[**\Ayaya\FlagrClient\Model\Flag**](../Model/Flag.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

