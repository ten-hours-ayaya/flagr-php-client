# EvalContext

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**entityID** | **string** | entityID is used to deterministically at random to evaluate the flag result. If it&#x27;s empty, flagr will randomly generate one. | [optional] 
**entityType** | **string** |  | [optional] 
**entityContext** | **object** |  | [optional] 
**enableDebug** | **bool** |  | [optional] 
**flagID** | **int** | flagID | [optional] 
**flagKey** | **string** | flagKey. flagID or flagKey will resolve to the same flag. Either works. | [optional] 
**flagTags** | **string[]** | flagTags. flagTags looks up flags by tag. Either works. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

