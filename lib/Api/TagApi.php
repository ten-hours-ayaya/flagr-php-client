<?php
/**
 * TagApi
 * PHP version 5
 *
 * @category Class
 * @package  Ayaya\FlagrClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Flagr
 *
 * Flagr is a feature flagging, A/B testing and dynamic configuration microservice. The base path for all the APIs is \"/api/v1\".
 *
 * OpenAPI spec version: 1.1.10
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.22
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Ayaya\FlagrClient\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Ayaya\FlagrClient\ApiException;
use Ayaya\FlagrClient\Configuration;
use Ayaya\FlagrClient\HeaderSelector;
use Ayaya\FlagrClient\ObjectSerializer;

/**
 * TagApi Class Doc Comment
 *
 * @category Class
 * @package  Ayaya\FlagrClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TagApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation createTag
     *
     * @param  \Ayaya\FlagrClient\Model\CreateTagRequest $body create a tag (required)
     * @param  int $flagID numeric ID of the flag (required)
     *
     * @throws \Ayaya\FlagrClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Ayaya\FlagrClient\Model\Tag
     */
    public function createTag($body, $flagID)
    {
        list($response) = $this->createTagWithHttpInfo($body, $flagID);
        return $response;
    }

    /**
     * Operation createTagWithHttpInfo
     *
     * @param  \Ayaya\FlagrClient\Model\CreateTagRequest $body create a tag (required)
     * @param  int $flagID numeric ID of the flag (required)
     *
     * @throws \Ayaya\FlagrClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Ayaya\FlagrClient\Model\Tag, HTTP status code, HTTP response headers (array of strings)
     */
    public function createTagWithHttpInfo($body, $flagID)
    {
        $returnType = '\Ayaya\FlagrClient\Model\Tag';
        $request = $this->createTagRequest($body, $flagID);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if (!in_array($returnType, ['string','integer','bool'])) {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Ayaya\FlagrClient\Model\Tag',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 0:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Ayaya\FlagrClient\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation createTagAsync
     *
     * 
     *
     * @param  \Ayaya\FlagrClient\Model\CreateTagRequest $body create a tag (required)
     * @param  int $flagID numeric ID of the flag (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createTagAsync($body, $flagID)
    {
        return $this->createTagAsyncWithHttpInfo($body, $flagID)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation createTagAsyncWithHttpInfo
     *
     * 
     *
     * @param  \Ayaya\FlagrClient\Model\CreateTagRequest $body create a tag (required)
     * @param  int $flagID numeric ID of the flag (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createTagAsyncWithHttpInfo($body, $flagID)
    {
        $returnType = '\Ayaya\FlagrClient\Model\Tag';
        $request = $this->createTagRequest($body, $flagID);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'createTag'
     *
     * @param  \Ayaya\FlagrClient\Model\CreateTagRequest $body create a tag (required)
     * @param  int $flagID numeric ID of the flag (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function createTagRequest($body, $flagID)
    {
        // verify the required parameter 'body' is set
        if ($body === null || (is_array($body) && count($body) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $body when calling createTag'
            );
        }
        // verify the required parameter 'flagID' is set
        if ($flagID === null || (is_array($flagID) && count($flagID) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $flagID when calling createTag'
            );
        }

        $resourcePath = '/flags/{flagID}/tags';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($flagID !== null) {
            $resourcePath = str_replace(
                '{' . 'flagID' . '}',
                ObjectSerializer::toPathValue($flagID),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation deleteTag
     *
     * @param  int $flagID numeric ID of the flag (required)
     * @param  int $tagID numeric ID of the tag (required)
     *
     * @throws \Ayaya\FlagrClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function deleteTag($flagID, $tagID)
    {
        $this->deleteTagWithHttpInfo($flagID, $tagID);
    }

    /**
     * Operation deleteTagWithHttpInfo
     *
     * @param  int $flagID numeric ID of the flag (required)
     * @param  int $tagID numeric ID of the tag (required)
     *
     * @throws \Ayaya\FlagrClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteTagWithHttpInfo($flagID, $tagID)
    {
        $returnType = '';
        $request = $this->deleteTagRequest($flagID, $tagID);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 0:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Ayaya\FlagrClient\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation deleteTagAsync
     *
     * 
     *
     * @param  int $flagID numeric ID of the flag (required)
     * @param  int $tagID numeric ID of the tag (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteTagAsync($flagID, $tagID)
    {
        return $this->deleteTagAsyncWithHttpInfo($flagID, $tagID)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation deleteTagAsyncWithHttpInfo
     *
     * 
     *
     * @param  int $flagID numeric ID of the flag (required)
     * @param  int $tagID numeric ID of the tag (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteTagAsyncWithHttpInfo($flagID, $tagID)
    {
        $returnType = '';
        $request = $this->deleteTagRequest($flagID, $tagID);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'deleteTag'
     *
     * @param  int $flagID numeric ID of the flag (required)
     * @param  int $tagID numeric ID of the tag (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function deleteTagRequest($flagID, $tagID)
    {
        // verify the required parameter 'flagID' is set
        if ($flagID === null || (is_array($flagID) && count($flagID) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $flagID when calling deleteTag'
            );
        }
        // verify the required parameter 'tagID' is set
        if ($tagID === null || (is_array($tagID) && count($tagID) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $tagID when calling deleteTag'
            );
        }

        $resourcePath = '/flags/{flagID}/tags/{tagID}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($flagID !== null) {
            $resourcePath = str_replace(
                '{' . 'flagID' . '}',
                ObjectSerializer::toPathValue($flagID),
                $resourcePath
            );
        }
        // path params
        if ($tagID !== null) {
            $resourcePath = str_replace(
                '{' . 'tagID' . '}',
                ObjectSerializer::toPathValue($tagID),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'DELETE',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation findAllTags
     *
     * @param  int $limit the numbers of tags to return (optional)
     * @param  int $offset return tags given the offset, it should usually set together with limit (optional)
     * @param  string $valueLike return tags partially matching given value (optional)
     *
     * @throws \Ayaya\FlagrClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Ayaya\FlagrClient\Model\Tag[]
     */
    public function findAllTags($limit = null, $offset = null, $valueLike = null)
    {
        list($response) = $this->findAllTagsWithHttpInfo($limit, $offset, $valueLike);
        return $response;
    }

    /**
     * Operation findAllTagsWithHttpInfo
     *
     * @param  int $limit the numbers of tags to return (optional)
     * @param  int $offset return tags given the offset, it should usually set together with limit (optional)
     * @param  string $valueLike return tags partially matching given value (optional)
     *
     * @throws \Ayaya\FlagrClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Ayaya\FlagrClient\Model\Tag[], HTTP status code, HTTP response headers (array of strings)
     */
    public function findAllTagsWithHttpInfo($limit = null, $offset = null, $valueLike = null)
    {
        $returnType = '\Ayaya\FlagrClient\Model\Tag[]';
        $request = $this->findAllTagsRequest($limit, $offset, $valueLike);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if (!in_array($returnType, ['string','integer','bool'])) {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Ayaya\FlagrClient\Model\Tag[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 0:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Ayaya\FlagrClient\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation findAllTagsAsync
     *
     * 
     *
     * @param  int $limit the numbers of tags to return (optional)
     * @param  int $offset return tags given the offset, it should usually set together with limit (optional)
     * @param  string $valueLike return tags partially matching given value (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function findAllTagsAsync($limit = null, $offset = null, $valueLike = null)
    {
        return $this->findAllTagsAsyncWithHttpInfo($limit, $offset, $valueLike)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation findAllTagsAsyncWithHttpInfo
     *
     * 
     *
     * @param  int $limit the numbers of tags to return (optional)
     * @param  int $offset return tags given the offset, it should usually set together with limit (optional)
     * @param  string $valueLike return tags partially matching given value (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function findAllTagsAsyncWithHttpInfo($limit = null, $offset = null, $valueLike = null)
    {
        $returnType = '\Ayaya\FlagrClient\Model\Tag[]';
        $request = $this->findAllTagsRequest($limit, $offset, $valueLike);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'findAllTags'
     *
     * @param  int $limit the numbers of tags to return (optional)
     * @param  int $offset return tags given the offset, it should usually set together with limit (optional)
     * @param  string $valueLike return tags partially matching given value (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function findAllTagsRequest($limit = null, $offset = null, $valueLike = null)
    {

        $resourcePath = '/tags';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($limit !== null) {
            $queryParams['limit'] = ObjectSerializer::toQueryValue($limit, 'int64');
        }
        // query params
        if ($offset !== null) {
            $queryParams['offset'] = ObjectSerializer::toQueryValue($offset, 'int64');
        }
        // query params
        if ($valueLike !== null) {
            $queryParams['value_like'] = ObjectSerializer::toQueryValue($valueLike, null);
        }


        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation findTags
     *
     * @param  int $flagID numeric ID of the flag (required)
     *
     * @throws \Ayaya\FlagrClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Ayaya\FlagrClient\Model\Tag[]
     */
    public function findTags($flagID)
    {
        list($response) = $this->findTagsWithHttpInfo($flagID);
        return $response;
    }

    /**
     * Operation findTagsWithHttpInfo
     *
     * @param  int $flagID numeric ID of the flag (required)
     *
     * @throws \Ayaya\FlagrClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Ayaya\FlagrClient\Model\Tag[], HTTP status code, HTTP response headers (array of strings)
     */
    public function findTagsWithHttpInfo($flagID)
    {
        $returnType = '\Ayaya\FlagrClient\Model\Tag[]';
        $request = $this->findTagsRequest($flagID);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if (!in_array($returnType, ['string','integer','bool'])) {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Ayaya\FlagrClient\Model\Tag[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 0:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Ayaya\FlagrClient\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation findTagsAsync
     *
     * 
     *
     * @param  int $flagID numeric ID of the flag (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function findTagsAsync($flagID)
    {
        return $this->findTagsAsyncWithHttpInfo($flagID)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation findTagsAsyncWithHttpInfo
     *
     * 
     *
     * @param  int $flagID numeric ID of the flag (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function findTagsAsyncWithHttpInfo($flagID)
    {
        $returnType = '\Ayaya\FlagrClient\Model\Tag[]';
        $request = $this->findTagsRequest($flagID);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'findTags'
     *
     * @param  int $flagID numeric ID of the flag (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function findTagsRequest($flagID)
    {
        // verify the required parameter 'flagID' is set
        if ($flagID === null || (is_array($flagID) && count($flagID) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $flagID when calling findTags'
            );
        }

        $resourcePath = '/flags/{flagID}/tags';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($flagID !== null) {
            $resourcePath = str_replace(
                '{' . 'flagID' . '}',
                ObjectSerializer::toPathValue($flagID),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
