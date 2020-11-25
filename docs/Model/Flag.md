# Flag

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [optional] 
**key** | **string** | unique key representation of the flag | [optional] 
**description** | **string** |  | 
**enabled** | **bool** |  | 
**tags** | [**\Ayaya\FlagrClient\Model\Tag[]**](Tag.md) |  | [optional] 
**segments** | [**\Ayaya\FlagrClient\Model\Segment[]**](Segment.md) |  | [optional] 
**variants** | [**\Ayaya\FlagrClient\Model\Variant[]**](Variant.md) |  | [optional] 
**dataRecordsEnabled** | **bool** | enabled data records will get data logging in the metrics pipeline, for example, kafka. | 
**entityType** | **string** | it will override the entityType in the evaluation logs if it&#x27;s not empty | [optional] 
**notes** | **string** | flag usage details in markdown format | [optional] 
**createdBy** | **string** |  | [optional] 
**updatedBy** | **string** |  | [optional] 
**updatedAt** | [**\DateTime**](\DateTime.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

