<?php
declare(strict_types=1);

/**
 * EmailArchiveApi.
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  DocuSign\eSign
 * @author   Swagger Codegen team <apihelp@docusign.com>
 * @license  The DocuSign PHP Client SDK is licensed under the MIT License.
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Docusign eSignature REST API
 *
 * The Docusign eSignature REST API provides you with a powerful, convenient, and simple Web services API for interacting with Docusign.
 *
 * OpenAPI spec version: v2.1
 * Contact: devcenter@docusign.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.21
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace DocuSign\eSign\Api\EmailArchiveApi;


/**
 * GetBCCEmailArchiveHistoryListOptions Class Doc Comment
 *
 * @category Class
 * @package  DocuSign\eSign
 * @author   Swagger Codegen team <apihelp@docusign.com>
 * @license  The DocuSign PHP Client SDK is licensed under the MIT License.
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GetBCCEmailArchiveHistoryListOptions
{
    /**
      * $count 
      * @var ?string
      */
    protected ?string $count = null;

    /**
     * Gets count
     *
     * @return ?string
     */
    public function getCount(): ?string
    {
        return $this->count;
    }

    /**
     * Sets count
     * @param ?string $count 
     *
     * @return self
     */
    public function setCount(?string $count): self
    {
        $this->count = $count;
        return $this;
    }
    /**
      * $start_position 
      * @var ?string
      */
    protected ?string $start_position = null;

    /**
     * Gets start_position
     *
     * @return ?string
     */
    public function getStartPosition(): ?string
    {
        return $this->start_position;
    }

    /**
     * Sets start_position
     * @param ?string $start_position 
     *
     * @return self
     */
    public function setStartPosition(?string $start_position): self
    {
        $this->start_position = $start_position;
        return $this;
    }
}


/**
 * GetBCCEmailArchiveListOptions Class Doc Comment
 *
 * @category Class
 * @package  DocuSign\eSign
 * @author   Swagger Codegen team <apihelp@docusign.com>
 * @license  The DocuSign PHP Client SDK is licensed under the MIT License.
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GetBCCEmailArchiveListOptions
{
    /**
      * $count 
      * @var ?string
      */
    protected ?string $count = null;

    /**
     * Gets count
     *
     * @return ?string
     */
    public function getCount(): ?string
    {
        return $this->count;
    }

    /**
     * Sets count
     * @param ?string $count 
     *
     * @return self
     */
    public function setCount(?string $count): self
    {
        $this->count = $count;
        return $this;
    }
    /**
      * $start_position 
      * @var ?string
      */
    protected ?string $start_position = null;

    /**
     * Gets start_position
     *
     * @return ?string
     */
    public function getStartPosition(): ?string
    {
        return $this->start_position;
    }

    /**
     * Sets start_position
     * @param ?string $start_position 
     *
     * @return self
     */
    public function setStartPosition(?string $start_position): self
    {
        $this->start_position = $start_position;
        return $this;
    }
}



namespace DocuSign\eSign\Api;

use DocuSign\eSign\Client\ApiClient;
use DocuSign\eSign\Client\ApiException;
use DocuSign\eSign\Configuration;
use DocuSign\eSign\ObjectSerializer;

/**
 * EmailArchiveApi Class Doc Comment
 *
 * @category Class
 * @package  DocuSign\eSign
 * @author   Swagger Codegen team <apihelp@docusign.com>
 * @license  The DocuSign PHP Client SDK is licensed under the MIT License.
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EmailArchiveApi
{
    /**
     * API Client
     *
     * @var ApiClient instance of the ApiClient
     */
    protected ApiClient $apiClient;

    /**
     * Constructor
     *
     * @param ApiClient|null $apiClient The api client to use
     *
     * @return void
     */
    public function __construct(ApiClient $apiClient = null)
    {
        $this->apiClient = $apiClient ?? new ApiClient();
    }

    /**
     * Get API client
     *
     * @return ApiClient get the API client
     */
    public function getApiClient(): ApiClient
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param ApiClient $apiClient set the API client
     *
     * @return self
     */
    public function setApiClient(ApiClient $apiClient): self
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
    * Update $resourcePath with $
    *
    * @param string $resourcePath the resource path to use
    * @param string $baseName the base name param
    * @param string $paramName the parameter name
    *
    * @return string
    */
    public function updateResourcePath(string $resourcePath, string $baseName, string $paramName): string
    {
        return str_replace(
            "{" . $baseName . "}",
            $this->apiClient->getSerializer()->toPathValue($paramName),
            $resourcePath
        );
    }


    /**
     * Operation createBCCEmailArchive
     *
     * Creates a blind carbon copy email archive entry
     *
     * @param ?string $account_id The external account number (int) or account ID Guid.
     * @param \DocuSign\eSign\Model\BccEmailArchive $bcc_email_archive  (optional)
     *
     * @throws ApiException on non-2xx response
     * @return \DocuSign\eSign\Model\BccEmailArchive
     */
    public function createBCCEmailArchive($account_id, $bcc_email_archive = null)
    {
        list($response) = $this->createBCCEmailArchiveWithHttpInfo($account_id, $bcc_email_archive);
        return $response;
    }

    /**
     * Operation createBCCEmailArchiveWithHttpInfo
     *
     * Creates a blind carbon copy email archive entry
     *
     * @param ?string $account_id The external account number (int) or account ID Guid.
     * @param \DocuSign\eSign\Model\BccEmailArchive $bcc_email_archive  (optional)
     *
     * @throws ApiException on non-2xx response
     * @return array of \DocuSign\eSign\Model\BccEmailArchive, HTTP status code, HTTP response headers (array of strings)
     */
    public function createBCCEmailArchiveWithHttpInfo($account_id, $bcc_email_archive = null): array
    {
        // verify the required parameter 'account_id' is set
        if ($account_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $account_id when calling createBCCEmailArchive');
        }
        // parse inputs
        $resourcePath = "/v2.1/accounts/{accountId}/settings/bcc_email_archives";
        $httpBody = $_tempBody ?? ''; // $_tempBody is the method argument, if present
        $queryParams = $headerParams = $formParams = [];
        $headerParams['Accept'] ??= $this->apiClient->selectHeaderAccept(['application/json']);
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);


        // path params
        if ($account_id !== null) {
            $resourcePath = self::updateResourcePath($resourcePath, "accountId", $account_id);
        }

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);
        // body params
        $_tempBody = null;
        if (isset($bcc_email_archive)) {
            $_tempBody = $bcc_email_archive;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\DocuSign\eSign\Model\BccEmailArchive',
                '/v2.1/accounts/{accountId}/settings/bcc_email_archives'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\DocuSign\eSign\Model\BccEmailArchive', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\DocuSign\eSign\Model\BccEmailArchive', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\DocuSign\eSign\Model\ErrorDetails', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation deleteBCCEmailArchive
     *
     * Delete a blind carbon copy email archive for an account.
     *
     * @param ?string $account_id The external account number (int) or account ID Guid.
     * @param ?string $bcc_email_archive_id 
     *
     * @throws ApiException on non-2xx response
     * @return mixed
     */
    public function deleteBCCEmailArchive($account_id, $bcc_email_archive_id)
    {
        list($response) = $this->deleteBCCEmailArchiveWithHttpInfo($account_id, $bcc_email_archive_id);
        return $response;
    }

    /**
     * Operation deleteBCCEmailArchiveWithHttpInfo
     *
     * Delete a blind carbon copy email archive for an account.
     *
     * @param ?string $account_id The external account number (int) or account ID Guid.
     * @param ?string $bcc_email_archive_id 
     *
     * @throws ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteBCCEmailArchiveWithHttpInfo($account_id, $bcc_email_archive_id): array
    {
        // verify the required parameter 'account_id' is set
        if ($account_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $account_id when calling deleteBCCEmailArchive');
        }
        // verify the required parameter 'bcc_email_archive_id' is set
        if ($bcc_email_archive_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $bcc_email_archive_id when calling deleteBCCEmailArchive');
        }
        // parse inputs
        $resourcePath = "/v2.1/accounts/{accountId}/settings/bcc_email_archives/{bccEmailArchiveId}";
        $httpBody = $_tempBody ?? ''; // $_tempBody is the method argument, if present
        $queryParams = $headerParams = $formParams = [];
        $headerParams['Accept'] ??= $this->apiClient->selectHeaderAccept(['application/json']);
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);


        // path params
        if ($account_id !== null) {
            $resourcePath = self::updateResourcePath($resourcePath, "accountId", $account_id);
        }
        // path params
        if ($bcc_email_archive_id !== null) {
            $resourcePath = self::updateResourcePath($resourcePath, "bccEmailArchiveId", $bcc_email_archive_id);
        }

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);
        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'DELETE',
                $queryParams,
                $httpBody,
                $headerParams,
                null,
                '/v2.1/accounts/{accountId}/settings/bcc_email_archives/{bccEmailArchiveId}'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\DocuSign\eSign\Model\ErrorDetails', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getBCCEmailArchiveHistoryList
     *
     * Get the blind carbon copy email archive history entries for the specified archive
     *
     * @param ?string $account_id The external account number (int) or account ID Guid.
     * @param ?string $bcc_email_archive_id 
     * @param  \DocuSign\eSign\Api\EmailArchiveApi\GetBCCEmailArchiveHistoryListOptions  $options for modifying the behavior of the function. (optional)
     *
     * @throws ApiException on non-2xx response
     * @return \DocuSign\eSign\Model\BccEmailArchiveHistoryList
     */
    public function getBCCEmailArchiveHistoryList($account_id, $bcc_email_archive_id, \DocuSign\eSign\Api\EmailArchiveApi\GetBCCEmailArchiveHistoryListOptions $options = null)
    {
        list($response) = $this->getBCCEmailArchiveHistoryListWithHttpInfo($account_id, $bcc_email_archive_id, $options);
        return $response;
    }

    /**
     * Operation getBCCEmailArchiveHistoryListWithHttpInfo
     *
     * Get the blind carbon copy email archive history entries for the specified archive
     *
     * @param ?string $account_id The external account number (int) or account ID Guid.
     * @param ?string $bcc_email_archive_id 
     * @param  \DocuSign\eSign\Api\EmailArchiveApi\GetBCCEmailArchiveHistoryListOptions  $options for modifying the behavior of the function. (optional)
     *
     * @throws ApiException on non-2xx response
     * @return array of \DocuSign\eSign\Model\BccEmailArchiveHistoryList, HTTP status code, HTTP response headers (array of strings)
     */
    public function getBCCEmailArchiveHistoryListWithHttpInfo($account_id, $bcc_email_archive_id, \DocuSign\eSign\Api\EmailArchiveApi\GetBCCEmailArchiveHistoryListOptions $options = null): array
    {
        // verify the required parameter 'account_id' is set
        if ($account_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $account_id when calling getBCCEmailArchiveHistoryList');
        }
        // verify the required parameter 'bcc_email_archive_id' is set
        if ($bcc_email_archive_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $bcc_email_archive_id when calling getBCCEmailArchiveHistoryList');
        }
        // parse inputs
        $resourcePath = "/v2.1/accounts/{accountId}/settings/bcc_email_archives/{bccEmailArchiveId}";
        $httpBody = $_tempBody ?? ''; // $_tempBody is the method argument, if present
        $queryParams = $headerParams = $formParams = [];
        $headerParams['Accept'] ??= $this->apiClient->selectHeaderAccept(['application/json']);
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        if ($options != null)
        {
            // query params
            if ($options->getCount() != 'null') {
                $queryParams['count'] = $this->apiClient->getSerializer()->toQueryValue($options->getCount());
            }
            if ($options->getStartPosition() != 'null') {
                $queryParams['start_position'] = $this->apiClient->getSerializer()->toQueryValue($options->getStartPosition());
            }
        }

        // path params
        if ($account_id !== null) {
            $resourcePath = self::updateResourcePath($resourcePath, "accountId", $account_id);
        }
        // path params
        if ($bcc_email_archive_id !== null) {
            $resourcePath = self::updateResourcePath($resourcePath, "bccEmailArchiveId", $bcc_email_archive_id);
        }

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);
        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\DocuSign\eSign\Model\BccEmailArchiveHistoryList',
                '/v2.1/accounts/{accountId}/settings/bcc_email_archives/{bccEmailArchiveId}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\DocuSign\eSign\Model\BccEmailArchiveHistoryList', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\DocuSign\eSign\Model\BccEmailArchiveHistoryList', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\DocuSign\eSign\Model\ErrorDetails', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getBCCEmailArchiveList
     *
     * Get the blind carbon copy email archive entries owned by the specified account
     *
     * @param ?string $account_id The external account number (int) or account ID Guid.
     * @param  \DocuSign\eSign\Api\EmailArchiveApi\GetBCCEmailArchiveListOptions  $options for modifying the behavior of the function. (optional)
     *
     * @throws ApiException on non-2xx response
     * @return \DocuSign\eSign\Model\BccEmailArchiveList
     */
    public function getBCCEmailArchiveList($account_id, \DocuSign\eSign\Api\EmailArchiveApi\GetBCCEmailArchiveListOptions $options = null)
    {
        list($response) = $this->getBCCEmailArchiveListWithHttpInfo($account_id, $options);
        return $response;
    }

    /**
     * Operation getBCCEmailArchiveListWithHttpInfo
     *
     * Get the blind carbon copy email archive entries owned by the specified account
     *
     * @param ?string $account_id The external account number (int) or account ID Guid.
     * @param  \DocuSign\eSign\Api\EmailArchiveApi\GetBCCEmailArchiveListOptions  $options for modifying the behavior of the function. (optional)
     *
     * @throws ApiException on non-2xx response
     * @return array of \DocuSign\eSign\Model\BccEmailArchiveList, HTTP status code, HTTP response headers (array of strings)
     */
    public function getBCCEmailArchiveListWithHttpInfo($account_id, \DocuSign\eSign\Api\EmailArchiveApi\GetBCCEmailArchiveListOptions $options = null): array
    {
        // verify the required parameter 'account_id' is set
        if ($account_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $account_id when calling getBCCEmailArchiveList');
        }
        // parse inputs
        $resourcePath = "/v2.1/accounts/{accountId}/settings/bcc_email_archives";
        $httpBody = $_tempBody ?? ''; // $_tempBody is the method argument, if present
        $queryParams = $headerParams = $formParams = [];
        $headerParams['Accept'] ??= $this->apiClient->selectHeaderAccept(['application/json']);
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        if ($options != null)
        {
            // query params
            if ($options->getCount() != 'null') {
                $queryParams['count'] = $this->apiClient->getSerializer()->toQueryValue($options->getCount());
            }
            if ($options->getStartPosition() != 'null') {
                $queryParams['start_position'] = $this->apiClient->getSerializer()->toQueryValue($options->getStartPosition());
            }
        }

        // path params
        if ($account_id !== null) {
            $resourcePath = self::updateResourcePath($resourcePath, "accountId", $account_id);
        }

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);
        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\DocuSign\eSign\Model\BccEmailArchiveList',
                '/v2.1/accounts/{accountId}/settings/bcc_email_archives'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\DocuSign\eSign\Model\BccEmailArchiveList', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\DocuSign\eSign\Model\BccEmailArchiveList', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\DocuSign\eSign\Model\ErrorDetails', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
