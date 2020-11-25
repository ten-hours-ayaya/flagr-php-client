# EvaluationBatchRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**entities** | [**\Ayaya\FlagrClient\Model\EvaluationEntity[]**](EvaluationEntity.md) |  | 
**enableDebug** | **bool** |  | [optional] 
**flagIDs** | **int[]** | flagIDs | [optional] 
**flagKeys** | **string[]** | flagKeys. Either flagIDs, flagKeys or flagTags works. If pass in multiples, Flagr may return duplicate results. | [optional] 
**flagTags** | **string[]** | flagTags. Either flagIDs, flagKeys or flagTags works. If pass in multiples, Flagr may return duplicate results. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

