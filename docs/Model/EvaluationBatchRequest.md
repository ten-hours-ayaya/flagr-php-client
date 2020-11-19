# EvaluationBatchRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**entities** | [**\Ayaya\FlagrClient\Model\EvaluationEntity[]**](EvaluationEntity.md) |  | 
**enable_debug** | **bool** |  | [optional] 
**flag_i_ds** | **int[]** | flagIDs | [optional] 
**flag_keys** | **string[]** | flagKeys. Either flagIDs, flagKeys or flagTags works. If pass in multiples, Flagr may return duplicate results. | [optional] 
**flag_tags** | **string[]** | flagTags. Either flagIDs, flagKeys or flagTags works. If pass in multiples, Flagr may return duplicate results. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

