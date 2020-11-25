# Ayaya\FlagrClient\ConstraintApi

All URIs are relative to */api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createConstraint**](ConstraintApi.md#createconstraint) | **POST** /flags/{flagID}/segments/{segmentID}/constraints | 
[**deleteConstraint**](ConstraintApi.md#deleteconstraint) | **DELETE** /flags/{flagID}/segments/{segmentID}/constraints/{constraintID} | 
[**findConstraints**](ConstraintApi.md#findconstraints) | **GET** /flags/{flagID}/segments/{segmentID}/constraints | 
[**putConstraint**](ConstraintApi.md#putconstraint) | **PUT** /flags/{flagID}/segments/{segmentID}/constraints/{constraintID} | 

# **createConstraint**
> \Ayaya\FlagrClient\Model\Constraint createConstraint($body, $flagID, $segmentID)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ayaya\FlagrClient\Api\ConstraintApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Ayaya\FlagrClient\Model\CreateConstraintRequest(); // \Ayaya\FlagrClient\Model\CreateConstraintRequest | create a constraint
$flagID = 789; // int | numeric ID of the flag
$segmentID = 789; // int | numeric ID of the segment

try {
    $result = $apiInstance->createConstraint($body, $flagID, $segmentID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConstraintApi->createConstraint: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Ayaya\FlagrClient\Model\CreateConstraintRequest**](../Model/CreateConstraintRequest.md)| create a constraint |
 **flagID** | **int**| numeric ID of the flag |
 **segmentID** | **int**| numeric ID of the segment |

### Return type

[**\Ayaya\FlagrClient\Model\Constraint**](../Model/Constraint.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteConstraint**
> deleteConstraint($flagID, $segmentID, $constraintID)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ayaya\FlagrClient\Api\ConstraintApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$flagID = 789; // int | numeric ID of the flag
$segmentID = 789; // int | numeric ID of the segment
$constraintID = 789; // int | numeric ID of the constraint

try {
    $apiInstance->deleteConstraint($flagID, $segmentID, $constraintID);
} catch (Exception $e) {
    echo 'Exception when calling ConstraintApi->deleteConstraint: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **flagID** | **int**| numeric ID of the flag |
 **segmentID** | **int**| numeric ID of the segment |
 **constraintID** | **int**| numeric ID of the constraint |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **findConstraints**
> \Ayaya\FlagrClient\Model\Constraint[] findConstraints($flagID, $segmentID)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ayaya\FlagrClient\Api\ConstraintApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$flagID = 789; // int | numeric ID of the flag
$segmentID = 789; // int | numeric ID of the segment

try {
    $result = $apiInstance->findConstraints($flagID, $segmentID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConstraintApi->findConstraints: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **flagID** | **int**| numeric ID of the flag |
 **segmentID** | **int**| numeric ID of the segment |

### Return type

[**\Ayaya\FlagrClient\Model\Constraint[]**](../Model/Constraint.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putConstraint**
> \Ayaya\FlagrClient\Model\Constraint putConstraint($body, $flagID, $segmentID, $constraintID)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ayaya\FlagrClient\Api\ConstraintApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Ayaya\FlagrClient\Model\CreateConstraintRequest(); // \Ayaya\FlagrClient\Model\CreateConstraintRequest | create a constraint
$flagID = 789; // int | numeric ID of the flag
$segmentID = 789; // int | numeric ID of the segment
$constraintID = 789; // int | numeric ID of the constraint

try {
    $result = $apiInstance->putConstraint($body, $flagID, $segmentID, $constraintID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConstraintApi->putConstraint: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Ayaya\FlagrClient\Model\CreateConstraintRequest**](../Model/CreateConstraintRequest.md)| create a constraint |
 **flagID** | **int**| numeric ID of the flag |
 **segmentID** | **int**| numeric ID of the segment |
 **constraintID** | **int**| numeric ID of the constraint |

### Return type

[**\Ayaya\FlagrClient\Model\Constraint**](../Model/Constraint.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

