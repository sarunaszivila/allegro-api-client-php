<?php
/**
 * PublicOfferInformationApi
 * PHP version 5
 *
 * @category Class
 * @package  AllegroApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Allegro REST API
 *
 * https://developer.allegro.pl/about
 *
 * OpenAPI spec version: latest
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.0.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace AllegroApi\Client;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use AllegroApi\ApiException;
use AllegroApi\Configuration;
use AllegroApi\HeaderSelector;
use AllegroApi\ObjectSerializer;

/**
 * PublicOfferInformationApi Class Doc Comment
 *
 * @category Class
 * @package  AllegroApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class PublicOfferInformationApi
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
     * Operation getListing
     *
     * Search offers
     *
     * @param  string $category_id The identifier of the category, where you want to search for offers. (optional)
     * @param  string $phrase The search phrase. The phrase is searched in different fields of the offers depending on the value of the &#x60;searchMode&#x60; parameter. (optional)
     * @param  string $seller_id The identifier of a seller, to limit the results to offers from this seller. May be provided more than once. (optional)
     * @param  string $search_mode Defines where the given phrase should be searched in. Allowed values:    - *REGULAR* - searching for a phrase in the title,   - *DESCRIPTIONS* - searching for a phrase in the title and the descriptions,   - *CLOSED* - searching for a phrase in the title of closed offers. (optional, default to 'REGULAR')
     * @param  int $offset Index of the first returned offer from all search results. (optional)
     * @param  int $limit The maximum number of offers in a response. (optional, default to 60)
     * @param  string $sort Search results sorting order. &#x60;+&#x60; or no prefix in the value means ascending order. &#x60;-&#x60; prefix means descending order. (optional, default to 'relevance')
     * @param  string $include Specify parts of the response that should be included in the output. Allowed values are the names of top level entities and *all* as an alias to all entities. By default, all top level entities are included. Use &#x60;-&#x60; prefix to exclude an entity. Example: &#x60;include&#x3D;-all&amp;include&#x3D;filters&amp;include&#x3D;sort&#x60; - returns only filters and sort entities. (optional)
     * @param  bool $fallback Defines the behaviour of the search engine when no results with exact phrase match are found:    - *true* - related (not exact) results are returned,   - *false* - empty results are returned. (optional, default to true)
     * @param  string $a_filters_id You can filter and customize your search results to find exactly what you need by applying filters ids and their dictionary values to query according to the flowing pattern: id&#x3D;value. When the filter definition looks like:   &#x60;&#x60;&#x60;&#x60;     {     \&quot;id\&quot;: \&quot;parameter.11323\&quot;,     \&quot;type\&quot;: \&quot;MULTI\&quot;,     \&quot;name\&quot;: \&quot;Stan\&quot;,     \&quot;values\&quot;: [{     \&quot;value\&quot;: \&quot;11323_1\&quot;,     \&quot;name\&quot;: \&quot;nowe\&quot;,     \&quot;count\&quot;: 21,     \&quot;selected\&quot;: false     },     {     \&quot;value\&quot;: \&quot;11323_2\&quot;,     \&quot;name\&quot;: \&quot;używane\&quot;,     \&quot;count\&quot;: 157,     \&quot;selected\&quot;: false     },     {     \&quot;value\&quot;: \&quot;11323_238066\&quot;,     \&quot;name\&quot;: \&quot;po zwrocie\&quot;,     \&quot;count\&quot;: 1,     \&quot;selected\&quot;: false     }     ]     }   &#x60;&#x60;&#x60;&#x60; You can use &#39;Stan&#39; filter to query results, i.e.: parameter.11323&#x3D;11323_1 (for \&quot;nowe\&quot;), parameter.11323&#x3D;11323_2 (for \&quot;używane\&quot;) or parameter.11323&#x3D;11323_238066 (for \&quot;po zwrocie\&quot;) (optional)
     *
     * @throws \AllegroApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \AllegroApi\Model\ListingResponse|\AllegroApi\Model\ErrorsHolder|\AllegroApi\Model\ErrorsHolder|\AllegroApi\Model\ErrorsHolder|\AllegroApi\Model\ErrorsHolder|\AllegroApi\Model\ErrorsHolder
     */
    public function getListing($category_id = null, $phrase = null, $seller_id = null, $search_mode = 'REGULAR', $offset = null, $limit = 60, $sort = 'relevance', $include = null, $fallback = true, $a_filters_id = null)
    {
        list($response) = $this->getListingWithHttpInfo($category_id, $phrase, $seller_id, $search_mode, $offset, $limit, $sort, $include, $fallback, $a_filters_id);
        return $response;
    }

    /**
     * Operation getListingWithHttpInfo
     *
     * Search offers
     *
     * @param  string $category_id The identifier of the category, where you want to search for offers. (optional)
     * @param  string $phrase The search phrase. The phrase is searched in different fields of the offers depending on the value of the &#x60;searchMode&#x60; parameter. (optional)
     * @param  string $seller_id The identifier of a seller, to limit the results to offers from this seller. May be provided more than once. (optional)
     * @param  string $search_mode Defines where the given phrase should be searched in. Allowed values:    - *REGULAR* - searching for a phrase in the title,   - *DESCRIPTIONS* - searching for a phrase in the title and the descriptions,   - *CLOSED* - searching for a phrase in the title of closed offers. (optional, default to 'REGULAR')
     * @param  int $offset Index of the first returned offer from all search results. (optional)
     * @param  int $limit The maximum number of offers in a response. (optional, default to 60)
     * @param  string $sort Search results sorting order. &#x60;+&#x60; or no prefix in the value means ascending order. &#x60;-&#x60; prefix means descending order. (optional, default to 'relevance')
     * @param  string $include Specify parts of the response that should be included in the output. Allowed values are the names of top level entities and *all* as an alias to all entities. By default, all top level entities are included. Use &#x60;-&#x60; prefix to exclude an entity. Example: &#x60;include&#x3D;-all&amp;include&#x3D;filters&amp;include&#x3D;sort&#x60; - returns only filters and sort entities. (optional)
     * @param  bool $fallback Defines the behaviour of the search engine when no results with exact phrase match are found:    - *true* - related (not exact) results are returned,   - *false* - empty results are returned. (optional, default to true)
     * @param  string $a_filters_id You can filter and customize your search results to find exactly what you need by applying filters ids and their dictionary values to query according to the flowing pattern: id&#x3D;value. When the filter definition looks like:   &#x60;&#x60;&#x60;&#x60;     {     \&quot;id\&quot;: \&quot;parameter.11323\&quot;,     \&quot;type\&quot;: \&quot;MULTI\&quot;,     \&quot;name\&quot;: \&quot;Stan\&quot;,     \&quot;values\&quot;: [{     \&quot;value\&quot;: \&quot;11323_1\&quot;,     \&quot;name\&quot;: \&quot;nowe\&quot;,     \&quot;count\&quot;: 21,     \&quot;selected\&quot;: false     },     {     \&quot;value\&quot;: \&quot;11323_2\&quot;,     \&quot;name\&quot;: \&quot;używane\&quot;,     \&quot;count\&quot;: 157,     \&quot;selected\&quot;: false     },     {     \&quot;value\&quot;: \&quot;11323_238066\&quot;,     \&quot;name\&quot;: \&quot;po zwrocie\&quot;,     \&quot;count\&quot;: 1,     \&quot;selected\&quot;: false     }     ]     }   &#x60;&#x60;&#x60;&#x60; You can use &#39;Stan&#39; filter to query results, i.e.: parameter.11323&#x3D;11323_1 (for \&quot;nowe\&quot;), parameter.11323&#x3D;11323_2 (for \&quot;używane\&quot;) or parameter.11323&#x3D;11323_238066 (for \&quot;po zwrocie\&quot;) (optional)
     *
     * @throws \AllegroApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \AllegroApi\Model\ListingResponse|\AllegroApi\Model\ErrorsHolder|\AllegroApi\Model\ErrorsHolder|\AllegroApi\Model\ErrorsHolder|\AllegroApi\Model\ErrorsHolder|\AllegroApi\Model\ErrorsHolder, HTTP status code, HTTP response headers (array of strings)
     */
    public function getListingWithHttpInfo($category_id = null, $phrase = null, $seller_id = null, $search_mode = 'REGULAR', $offset = null, $limit = 60, $sort = 'relevance', $include = null, $fallback = true, $a_filters_id = null)
    {
        $request = $this->getListingRequest($category_id, $phrase, $seller_id, $search_mode, $offset, $limit, $sort, $include, $fallback, $a_filters_id);

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
            switch($statusCode) {
                case 200:
                    if ('\AllegroApi\Model\ListingResponse' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\AllegroApi\Model\ListingResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 400:
                    if ('\AllegroApi\Model\ErrorsHolder' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\AllegroApi\Model\ErrorsHolder', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 404:
                    if ('\AllegroApi\Model\ErrorsHolder' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\AllegroApi\Model\ErrorsHolder', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 422:
                    if ('\AllegroApi\Model\ErrorsHolder' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\AllegroApi\Model\ErrorsHolder', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 500:
                    if ('\AllegroApi\Model\ErrorsHolder' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\AllegroApi\Model\ErrorsHolder', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 502:
                    if ('\AllegroApi\Model\ErrorsHolder' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\AllegroApi\Model\ErrorsHolder', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\AllegroApi\Model\ListingResponse';
            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
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
                        '\AllegroApi\Model\ListingResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\AllegroApi\Model\ErrorsHolder',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\AllegroApi\Model\ErrorsHolder',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 422:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\AllegroApi\Model\ErrorsHolder',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\AllegroApi\Model\ErrorsHolder',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 502:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\AllegroApi\Model\ErrorsHolder',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getListingAsync
     *
     * Search offers
     *
     * @param  string $category_id The identifier of the category, where you want to search for offers. (optional)
     * @param  string $phrase The search phrase. The phrase is searched in different fields of the offers depending on the value of the &#x60;searchMode&#x60; parameter. (optional)
     * @param  string $seller_id The identifier of a seller, to limit the results to offers from this seller. May be provided more than once. (optional)
     * @param  string $search_mode Defines where the given phrase should be searched in. Allowed values:    - *REGULAR* - searching for a phrase in the title,   - *DESCRIPTIONS* - searching for a phrase in the title and the descriptions,   - *CLOSED* - searching for a phrase in the title of closed offers. (optional, default to 'REGULAR')
     * @param  int $offset Index of the first returned offer from all search results. (optional)
     * @param  int $limit The maximum number of offers in a response. (optional, default to 60)
     * @param  string $sort Search results sorting order. &#x60;+&#x60; or no prefix in the value means ascending order. &#x60;-&#x60; prefix means descending order. (optional, default to 'relevance')
     * @param  string $include Specify parts of the response that should be included in the output. Allowed values are the names of top level entities and *all* as an alias to all entities. By default, all top level entities are included. Use &#x60;-&#x60; prefix to exclude an entity. Example: &#x60;include&#x3D;-all&amp;include&#x3D;filters&amp;include&#x3D;sort&#x60; - returns only filters and sort entities. (optional)
     * @param  bool $fallback Defines the behaviour of the search engine when no results with exact phrase match are found:    - *true* - related (not exact) results are returned,   - *false* - empty results are returned. (optional, default to true)
     * @param  string $a_filters_id You can filter and customize your search results to find exactly what you need by applying filters ids and their dictionary values to query according to the flowing pattern: id&#x3D;value. When the filter definition looks like:   &#x60;&#x60;&#x60;&#x60;     {     \&quot;id\&quot;: \&quot;parameter.11323\&quot;,     \&quot;type\&quot;: \&quot;MULTI\&quot;,     \&quot;name\&quot;: \&quot;Stan\&quot;,     \&quot;values\&quot;: [{     \&quot;value\&quot;: \&quot;11323_1\&quot;,     \&quot;name\&quot;: \&quot;nowe\&quot;,     \&quot;count\&quot;: 21,     \&quot;selected\&quot;: false     },     {     \&quot;value\&quot;: \&quot;11323_2\&quot;,     \&quot;name\&quot;: \&quot;używane\&quot;,     \&quot;count\&quot;: 157,     \&quot;selected\&quot;: false     },     {     \&quot;value\&quot;: \&quot;11323_238066\&quot;,     \&quot;name\&quot;: \&quot;po zwrocie\&quot;,     \&quot;count\&quot;: 1,     \&quot;selected\&quot;: false     }     ]     }   &#x60;&#x60;&#x60;&#x60; You can use &#39;Stan&#39; filter to query results, i.e.: parameter.11323&#x3D;11323_1 (for \&quot;nowe\&quot;), parameter.11323&#x3D;11323_2 (for \&quot;używane\&quot;) or parameter.11323&#x3D;11323_238066 (for \&quot;po zwrocie\&quot;) (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getListingAsync($category_id = null, $phrase = null, $seller_id = null, $search_mode = 'REGULAR', $offset = null, $limit = 60, $sort = 'relevance', $include = null, $fallback = true, $a_filters_id = null)
    {
        return $this->getListingAsyncWithHttpInfo($category_id, $phrase, $seller_id, $search_mode, $offset, $limit, $sort, $include, $fallback, $a_filters_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getListingAsyncWithHttpInfo
     *
     * Search offers
     *
     * @param  string $category_id The identifier of the category, where you want to search for offers. (optional)
     * @param  string $phrase The search phrase. The phrase is searched in different fields of the offers depending on the value of the &#x60;searchMode&#x60; parameter. (optional)
     * @param  string $seller_id The identifier of a seller, to limit the results to offers from this seller. May be provided more than once. (optional)
     * @param  string $search_mode Defines where the given phrase should be searched in. Allowed values:    - *REGULAR* - searching for a phrase in the title,   - *DESCRIPTIONS* - searching for a phrase in the title and the descriptions,   - *CLOSED* - searching for a phrase in the title of closed offers. (optional, default to 'REGULAR')
     * @param  int $offset Index of the first returned offer from all search results. (optional)
     * @param  int $limit The maximum number of offers in a response. (optional, default to 60)
     * @param  string $sort Search results sorting order. &#x60;+&#x60; or no prefix in the value means ascending order. &#x60;-&#x60; prefix means descending order. (optional, default to 'relevance')
     * @param  string $include Specify parts of the response that should be included in the output. Allowed values are the names of top level entities and *all* as an alias to all entities. By default, all top level entities are included. Use &#x60;-&#x60; prefix to exclude an entity. Example: &#x60;include&#x3D;-all&amp;include&#x3D;filters&amp;include&#x3D;sort&#x60; - returns only filters and sort entities. (optional)
     * @param  bool $fallback Defines the behaviour of the search engine when no results with exact phrase match are found:    - *true* - related (not exact) results are returned,   - *false* - empty results are returned. (optional, default to true)
     * @param  string $a_filters_id You can filter and customize your search results to find exactly what you need by applying filters ids and their dictionary values to query according to the flowing pattern: id&#x3D;value. When the filter definition looks like:   &#x60;&#x60;&#x60;&#x60;     {     \&quot;id\&quot;: \&quot;parameter.11323\&quot;,     \&quot;type\&quot;: \&quot;MULTI\&quot;,     \&quot;name\&quot;: \&quot;Stan\&quot;,     \&quot;values\&quot;: [{     \&quot;value\&quot;: \&quot;11323_1\&quot;,     \&quot;name\&quot;: \&quot;nowe\&quot;,     \&quot;count\&quot;: 21,     \&quot;selected\&quot;: false     },     {     \&quot;value\&quot;: \&quot;11323_2\&quot;,     \&quot;name\&quot;: \&quot;używane\&quot;,     \&quot;count\&quot;: 157,     \&quot;selected\&quot;: false     },     {     \&quot;value\&quot;: \&quot;11323_238066\&quot;,     \&quot;name\&quot;: \&quot;po zwrocie\&quot;,     \&quot;count\&quot;: 1,     \&quot;selected\&quot;: false     }     ]     }   &#x60;&#x60;&#x60;&#x60; You can use &#39;Stan&#39; filter to query results, i.e.: parameter.11323&#x3D;11323_1 (for \&quot;nowe\&quot;), parameter.11323&#x3D;11323_2 (for \&quot;używane\&quot;) or parameter.11323&#x3D;11323_238066 (for \&quot;po zwrocie\&quot;) (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getListingAsyncWithHttpInfo($category_id = null, $phrase = null, $seller_id = null, $search_mode = 'REGULAR', $offset = null, $limit = 60, $sort = 'relevance', $include = null, $fallback = true, $a_filters_id = null)
    {
        $returnType = '\AllegroApi\Model\ListingResponse';
        $request = $this->getListingRequest($category_id, $phrase, $seller_id, $search_mode, $offset, $limit, $sort, $include, $fallback, $a_filters_id);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
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
     * Create request for operation 'getListing'
     *
     * @param  string $category_id The identifier of the category, where you want to search for offers. (optional)
     * @param  string $phrase The search phrase. The phrase is searched in different fields of the offers depending on the value of the &#x60;searchMode&#x60; parameter. (optional)
     * @param  string $seller_id The identifier of a seller, to limit the results to offers from this seller. May be provided more than once. (optional)
     * @param  string $search_mode Defines where the given phrase should be searched in. Allowed values:    - *REGULAR* - searching for a phrase in the title,   - *DESCRIPTIONS* - searching for a phrase in the title and the descriptions,   - *CLOSED* - searching for a phrase in the title of closed offers. (optional, default to 'REGULAR')
     * @param  int $offset Index of the first returned offer from all search results. (optional)
     * @param  int $limit The maximum number of offers in a response. (optional, default to 60)
     * @param  string $sort Search results sorting order. &#x60;+&#x60; or no prefix in the value means ascending order. &#x60;-&#x60; prefix means descending order. (optional, default to 'relevance')
     * @param  string $include Specify parts of the response that should be included in the output. Allowed values are the names of top level entities and *all* as an alias to all entities. By default, all top level entities are included. Use &#x60;-&#x60; prefix to exclude an entity. Example: &#x60;include&#x3D;-all&amp;include&#x3D;filters&amp;include&#x3D;sort&#x60; - returns only filters and sort entities. (optional)
     * @param  bool $fallback Defines the behaviour of the search engine when no results with exact phrase match are found:    - *true* - related (not exact) results are returned,   - *false* - empty results are returned. (optional, default to true)
     * @param  string $a_filters_id You can filter and customize your search results to find exactly what you need by applying filters ids and their dictionary values to query according to the flowing pattern: id&#x3D;value. When the filter definition looks like:   &#x60;&#x60;&#x60;&#x60;     {     \&quot;id\&quot;: \&quot;parameter.11323\&quot;,     \&quot;type\&quot;: \&quot;MULTI\&quot;,     \&quot;name\&quot;: \&quot;Stan\&quot;,     \&quot;values\&quot;: [{     \&quot;value\&quot;: \&quot;11323_1\&quot;,     \&quot;name\&quot;: \&quot;nowe\&quot;,     \&quot;count\&quot;: 21,     \&quot;selected\&quot;: false     },     {     \&quot;value\&quot;: \&quot;11323_2\&quot;,     \&quot;name\&quot;: \&quot;używane\&quot;,     \&quot;count\&quot;: 157,     \&quot;selected\&quot;: false     },     {     \&quot;value\&quot;: \&quot;11323_238066\&quot;,     \&quot;name\&quot;: \&quot;po zwrocie\&quot;,     \&quot;count\&quot;: 1,     \&quot;selected\&quot;: false     }     ]     }   &#x60;&#x60;&#x60;&#x60; You can use &#39;Stan&#39; filter to query results, i.e.: parameter.11323&#x3D;11323_1 (for \&quot;nowe\&quot;), parameter.11323&#x3D;11323_2 (for \&quot;używane\&quot;) or parameter.11323&#x3D;11323_238066 (for \&quot;po zwrocie\&quot;) (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getListingRequest($category_id = null, $phrase = null, $seller_id = null, $search_mode = 'REGULAR', $offset = null, $limit = 60, $sort = 'relevance', $include = null, $fallback = true, $a_filters_id = null)
    {
        if ($limit !== null && $limit > 100) {
            throw new \InvalidArgumentException('invalid value for "$limit" when calling PublicOfferInformationApi.getListing, must be smaller than or equal to 100.');
        }
        if ($limit !== null && $limit < 0) {
            throw new \InvalidArgumentException('invalid value for "$limit" when calling PublicOfferInformationApi.getListing, must be bigger than or equal to 0.');
        }


        $resourcePath = '/offers/listing';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($category_id !== null) {
            $queryParams['category.id'] = ObjectSerializer::toQueryValue($category_id);
        }
        // query params
        if ($phrase !== null) {
            $queryParams['phrase'] = ObjectSerializer::toQueryValue($phrase);
        }
        // query params
        if ($seller_id !== null) {
            $queryParams['seller.id'] = ObjectSerializer::toQueryValue($seller_id);
        }
        // query params
        if ($search_mode !== null) {
            $queryParams['searchMode'] = ObjectSerializer::toQueryValue($search_mode);
        }
        // query params
        if ($offset !== null) {
            $queryParams['offset'] = ObjectSerializer::toQueryValue($offset);
        }
        // query params
        if ($limit !== null) {
            $queryParams['limit'] = ObjectSerializer::toQueryValue($limit);
        }
        // query params
        if ($sort !== null) {
            $queryParams['sort'] = ObjectSerializer::toQueryValue($sort);
        }
        // query params
        if ($include !== null) {
            $queryParams['include'] = ObjectSerializer::toQueryValue($include);
        }
        // query params
        if ($fallback !== null) {
            $queryParams['fallback'] = ObjectSerializer::toQueryValue($fallback);
        }
        // query params
        if ($a_filters_id !== null) {
            $queryParams['&quot;A filter&#39;s ID&quot;'] = ObjectSerializer::toQueryValue($a_filters_id);
        }


        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/vnd.allegro.public.v1+json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/vnd.allegro.public.v1+json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($_tempBody));
            } else {
                $httpBody = $_tempBody;
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

        // this endpoint requires OAuth (access token)
        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }
        // this endpoint requires OAuth (access token)
        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
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
