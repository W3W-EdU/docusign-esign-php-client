<?php
declare(strict_types=1);

/**
 * AuthenticationApi.
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  DocuSign\eSign
 * @author   Swagger Codegen team <apihelp@docusign.com>
 * @license  The DocuSign eSignature PHP Client SDK is licensed under the MIT License.
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * DocuSign REST API
 *
 * The DocuSign REST API provides you with a powerful, convenient, and simple Web services API for interacting with DocuSign.
 *
 * OpenAPI spec version: v2.1
 * Contact: devcenter@docusign.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.21-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace DocuSign\eSign\Api\AuthenticationApi;


/**
 * LoginOptions Class Doc Comment
 *
 * @category Class
 * @package  DocuSign\eSign
 * @author   Swagger Codegen team <apihelp@docusign.com>
 * @license  The DocuSign eSignature PHP Client SDK is licensed under the MIT License.
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LoginOptions
{
    /**
      * $api_password When set to **true**, shows the account API password in the response.
      * @var ?string
      */
    protected ?string $api_password = null;

    /**
     * Gets api_password
     *
     * @return ?string
     */
    public function getApiPassword(): ?string
    {
        return $this->api_password;
    }

    /**
     * Sets api_password
     * @param ?string $api_password When set to **true**, shows the account API password in the response.
     *
     * @return self
     */
    public function setApiPassword(?string $api_password): self
    {
        $this->api_password = $api_password;
        return $this;
    }
    /**
      * $embed_account_id_guid 
      * @var ?string
      */
    protected ?string $embed_account_id_guid = null;

    /**
     * Gets embed_account_id_guid
     *
     * @return ?string
     */
    public function getEmbedAccountIdGuid(): ?string
    {
        return $this->embed_account_id_guid;
    }

    /**
     * Sets embed_account_id_guid
     * @param ?string $embed_account_id_guid 
     *
     * @return self
     */
    public function setEmbedAccountIdGuid(?string $embed_account_id_guid): self
    {
        $this->embed_account_id_guid = $embed_account_id_guid;
        return $this;
    }
    /**
      * $include_account_id_guid When set to **true**, shows the account ID GUID in the response.
      * @var ?string
      */
    protected ?string $include_account_id_guid = null;

    /**
     * Gets include_account_id_guid
     *
     * @return ?string
     */
    public function getIncludeAccountIdGuid(): ?string
    {
        return $this->include_account_id_guid;
    }

    /**
     * Sets include_account_id_guid
     * @param ?string $include_account_id_guid When set to **true**, shows the account ID GUID in the response.
     *
     * @return self
     */
    public function setIncludeAccountIdGuid(?string $include_account_id_guid): self
    {
        $this->include_account_id_guid = $include_account_id_guid;
        return $this;
    }
    /**
      * $login_settings Determines whether login settings are returned in the response.  Valid Values:  * all -  All the login settings are returned.  * none - no login settings are returned.
      * @var ?string
      */
    protected ?string $login_settings = null;

    /**
     * Gets login_settings
     *
     * @return ?string
     */
    public function getLoginSettings(): ?string
    {
        return $this->login_settings;
    }

    /**
     * Sets login_settings
     * @param ?string $login_settings Determines whether login settings are returned in the response.  Valid Values:  * all -  All the login settings are returned.  * none - no login settings are returned.
     *
     * @return self
     */
    public function setLoginSettings(?string $login_settings): self
    {
        $this->login_settings = $login_settings;
        return $this;
    }
}



namespace DocuSign\eSign\Api;

use DocuSign\eSign\Client\ApiClient;
use DocuSign\eSign\Client\ApiException;
use DocuSign\eSign\Configuration;
use DocuSign\eSign\ObjectSerializer;

/**
 * AuthenticationApi Class Doc Comment
 *
 * @category Class
 * @package  DocuSign\eSign
 * @author   Swagger Codegen team <apihelp@docusign.com>
 * @license  The DocuSign eSignature PHP Client SDK is licensed under the MIT License.
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AuthenticationApi
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
     * Operation deleteSocialLogin
     *
     * Deletes user's social account.
     *
     * @param ?string $account_id The external account number (int) or account ID Guid.
     * @param ?string $user_id The user ID of the user being accessed. Generally this is the user ID of the authenticated user, but if the authenticated user is an Admin on the account, this may be another user the Admin user is accessing.
     * @param \DocuSign\eSign\Model\SocialAccountInformation $social_account_information  (optional)
     *
     * @throws ApiException on non-2xx response
     * @return mixed
     */
    public function deleteSocialLogin($account_id, $user_id, $social_account_information = null)
    {
        list($response) = $this->deleteSocialLoginWithHttpInfo($account_id, $user_id, $social_account_information);
        return $response;
    }

    /**
     * Operation deleteSocialLoginWithHttpInfo
     *
     * Deletes user's social account.
     *
     * @param ?string $account_id The external account number (int) or account ID Guid.
     * @param ?string $user_id The user ID of the user being accessed. Generally this is the user ID of the authenticated user, but if the authenticated user is an Admin on the account, this may be another user the Admin user is accessing.
     * @param \DocuSign\eSign\Model\SocialAccountInformation $social_account_information  (optional)
     *
     * @throws ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteSocialLoginWithHttpInfo($account_id, $user_id, $social_account_information = null): array
    {
        // verify the required parameter 'account_id' is set
        if ($account_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $account_id when calling deleteSocialLogin');
        }
        // verify the required parameter 'user_id' is set
        if ($user_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $user_id when calling deleteSocialLogin');
        }
        // parse inputs
        $resourcePath = "/v2.1/accounts/{accountId}/users/{userId}/social";
        $httpBody = $_tempBody ?? ''; // $_tempBody is the method argument, if present
        $queryParams = $headerParams = $formParams = [];
        $headerParams['Accept'] ??= $this->apiClient->selectHeaderAccept(['application/json']);
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);


        // path params
        if ($account_id !== null) {
            $resourcePath = self::updateResourcePath($resourcePath, "accountId", $account_id);
        }
        // path params
        if ($user_id !== null) {
            $resourcePath = self::updateResourcePath($resourcePath, "userId", $user_id);
        }

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);
        // body params
        $_tempBody = null;
        if (isset($social_account_information)) {
            $_tempBody = $social_account_information;
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
                'DELETE',
                $queryParams,
                $httpBody,
                $headerParams,
                null,
                '/v2.1/accounts/{accountId}/users/{userId}/social'
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
     * Operation getOAuthToken
     *
     * Creates an authorization token.
     *
     *
     * @throws ApiException on non-2xx response
     * @return \DocuSign\eSign\Model\OauthAccess
     */
    public function getOAuthToken()
    {
        list($response) = $this->getOAuthTokenWithHttpInfo();
        return $response;
    }

    /**
     * Operation getOAuthTokenWithHttpInfo
     *
     * Creates an authorization token.
     *
     *
     * @throws ApiException on non-2xx response
     * @return array of \DocuSign\eSign\Model\OauthAccess, HTTP status code, HTTP response headers (array of strings)
     */
    public function getOAuthTokenWithHttpInfo(): array
    {
        // parse inputs
        $resourcePath = "/v2.1/oauth2/token";
        $httpBody = $_tempBody ?? ''; // $_tempBody is the method argument, if present
        $queryParams = $headerParams = $formParams = [];
        $headerParams['Accept'] ??= $this->apiClient->selectHeaderAccept(['application/json']);
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);



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
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\DocuSign\eSign\Model\OauthAccess',
                '/v2.1/oauth2/token'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\DocuSign\eSign\Model\OauthAccess', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\DocuSign\eSign\Model\OauthAccess', $e->getResponseHeaders());
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
     * Operation listSocialLogins
     *
     * Gets a list of a user's social accounts.
     *
     * @param ?string $account_id The external account number (int) or account ID Guid.
     * @param ?string $user_id The user ID of the user being accessed. Generally this is the user ID of the authenticated user, but if the authenticated user is an Admin on the account, this may be another user the Admin user is accessing.
     *
     * @throws ApiException on non-2xx response
     * @return \DocuSign\eSign\Model\UserSocialIdResult
     */
    public function listSocialLogins($account_id, $user_id)
    {
        list($response) = $this->listSocialLoginsWithHttpInfo($account_id, $user_id);
        return $response;
    }

    /**
     * Operation listSocialLoginsWithHttpInfo
     *
     * Gets a list of a user's social accounts.
     *
     * @param ?string $account_id The external account number (int) or account ID Guid.
     * @param ?string $user_id The user ID of the user being accessed. Generally this is the user ID of the authenticated user, but if the authenticated user is an Admin on the account, this may be another user the Admin user is accessing.
     *
     * @throws ApiException on non-2xx response
     * @return array of \DocuSign\eSign\Model\UserSocialIdResult, HTTP status code, HTTP response headers (array of strings)
     */
    public function listSocialLoginsWithHttpInfo($account_id, $user_id): array
    {
        // verify the required parameter 'account_id' is set
        if ($account_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $account_id when calling listSocialLogins');
        }
        // verify the required parameter 'user_id' is set
        if ($user_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $user_id when calling listSocialLogins');
        }
        // parse inputs
        $resourcePath = "/v2.1/accounts/{accountId}/users/{userId}/social";
        $httpBody = $_tempBody ?? ''; // $_tempBody is the method argument, if present
        $queryParams = $headerParams = $formParams = [];
        $headerParams['Accept'] ??= $this->apiClient->selectHeaderAccept(['application/json']);
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);


        // path params
        if ($account_id !== null) {
            $resourcePath = self::updateResourcePath($resourcePath, "accountId", $account_id);
        }
        // path params
        if ($user_id !== null) {
            $resourcePath = self::updateResourcePath($resourcePath, "userId", $user_id);
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
                '\DocuSign\eSign\Model\UserSocialIdResult',
                '/v2.1/accounts/{accountId}/users/{userId}/social'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\DocuSign\eSign\Model\UserSocialIdResult', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\DocuSign\eSign\Model\UserSocialIdResult', $e->getResponseHeaders());
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
     * Operation login
     *
     * Gets login information for a specified user.
     *
     * @param  \DocuSign\eSign\Api\AuthenticationApi\LoginOptions  $options for modifying the behavior of the function. (optional)
     *
     * @throws ApiException on non-2xx response
     * @return \DocuSign\eSign\Model\LoginInformation
     */
    public function login(\DocuSign\eSign\Api\AuthenticationApi\LoginOptions $options = null)
    {
        list($response) = $this->loginWithHttpInfo($options);
        return $response;
    }

    /**
     * Operation loginWithHttpInfo
     *
     * Gets login information for a specified user.
     *
     * @param  \DocuSign\eSign\Api\AuthenticationApi\LoginOptions  $options for modifying the behavior of the function. (optional)
     *
     * @throws ApiException on non-2xx response
     * @return array of \DocuSign\eSign\Model\LoginInformation, HTTP status code, HTTP response headers (array of strings)
     */
    public function loginWithHttpInfo(\DocuSign\eSign\Api\AuthenticationApi\LoginOptions $options = null): array
    {
        // parse inputs
        $resourcePath = "/v2.1/login_information";
        $httpBody = $_tempBody ?? ''; // $_tempBody is the method argument, if present
        $queryParams = $headerParams = $formParams = [];
        $headerParams['Accept'] ??= $this->apiClient->selectHeaderAccept(['application/json']);
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        if ($options != null)
        {
            // query params
            if ($options->getApiPassword() != 'null') {
                $queryParams['api_password'] = $this->apiClient->getSerializer()->toQueryValue($options->getApiPassword());
            }
            if ($options->getEmbedAccountIdGuid() != 'null') {
                $queryParams['embed_account_id_guid'] = $this->apiClient->getSerializer()->toQueryValue($options->getEmbedAccountIdGuid());
            }
            if ($options->getIncludeAccountIdGuid() != 'null') {
                $queryParams['include_account_id_guid'] = $this->apiClient->getSerializer()->toQueryValue($options->getIncludeAccountIdGuid());
            }
            if ($options->getLoginSettings() != 'null') {
                $queryParams['login_settings'] = $this->apiClient->getSerializer()->toQueryValue($options->getLoginSettings());
            }
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
                '\DocuSign\eSign\Model\LoginInformation',
                '/v2.1/login_information'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\DocuSign\eSign\Model\LoginInformation', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\DocuSign\eSign\Model\LoginInformation', $e->getResponseHeaders());
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
     * Operation revokeOAuthToken
     *
     * Revokes an authorization token.
     *
     *
     * @throws ApiException on non-2xx response
     * @return mixed
     */
    public function revokeOAuthToken()
    {
        list($response) = $this->revokeOAuthTokenWithHttpInfo();
        return $response;
    }

    /**
     * Operation revokeOAuthTokenWithHttpInfo
     *
     * Revokes an authorization token.
     *
     *
     * @throws ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function revokeOAuthTokenWithHttpInfo(): array
    {
        // parse inputs
        $resourcePath = "/v2.1/oauth2/revoke";
        $httpBody = $_tempBody ?? ''; // $_tempBody is the method argument, if present
        $queryParams = $headerParams = $formParams = [];
        $headerParams['Accept'] ??= $this->apiClient->selectHeaderAccept(['application/json']);
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);



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
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                null,
                '/v2.1/oauth2/revoke'
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
     * Operation updatePassword
     *
     * Updates the password for a specified user.
     *
     * @param ?string $login_part Currently, only the value **password** is supported.
     * @param \DocuSign\eSign\Model\UserPasswordInformation $user_password_information  (optional)
     *
     * @throws ApiException on non-2xx response
     * @return mixed
     */
    public function updatePassword($login_part, $user_password_information = null)
    {
        list($response) = $this->updatePasswordWithHttpInfo($login_part, $user_password_information);
        return $response;
    }

    /**
     * Operation updatePasswordWithHttpInfo
     *
     * Updates the password for a specified user.
     *
     * @param ?string $login_part Currently, only the value **password** is supported.
     * @param \DocuSign\eSign\Model\UserPasswordInformation $user_password_information  (optional)
     *
     * @throws ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function updatePasswordWithHttpInfo($login_part, $user_password_information = null): array
    {
        // verify the required parameter 'login_part' is set
        if ($login_part === null) {
            throw new \InvalidArgumentException('Missing the required parameter $login_part when calling updatePassword');
        }
        // parse inputs
        $resourcePath = "/v2.1/login_information/{loginPart}";
        $httpBody = $_tempBody ?? ''; // $_tempBody is the method argument, if present
        $queryParams = $headerParams = $formParams = [];
        $headerParams['Accept'] ??= $this->apiClient->selectHeaderAccept(['application/json']);
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);


        // path params
        if ($login_part !== null) {
            $resourcePath = self::updateResourcePath($resourcePath, "loginPart", $login_part);
        }

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);
        // body params
        $_tempBody = null;
        if (isset($user_password_information)) {
            $_tempBody = $user_password_information;
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
                'PUT',
                $queryParams,
                $httpBody,
                $headerParams,
                null,
                '/v2.1/login_information/{loginPart}'
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
     * Operation updateSocialLogin
     *
     * Adds social account for a user.
     *
     * @param ?string $account_id The external account number (int) or account ID Guid.
     * @param ?string $user_id The user ID of the user being accessed. Generally this is the user ID of the authenticated user, but if the authenticated user is an Admin on the account, this may be another user the Admin user is accessing.
     * @param \DocuSign\eSign\Model\SocialAccountInformation $social_account_information  (optional)
     *
     * @throws ApiException on non-2xx response
     * @return mixed
     */
    public function updateSocialLogin($account_id, $user_id, $social_account_information = null)
    {
        list($response) = $this->updateSocialLoginWithHttpInfo($account_id, $user_id, $social_account_information);
        return $response;
    }

    /**
     * Operation updateSocialLoginWithHttpInfo
     *
     * Adds social account for a user.
     *
     * @param ?string $account_id The external account number (int) or account ID Guid.
     * @param ?string $user_id The user ID of the user being accessed. Generally this is the user ID of the authenticated user, but if the authenticated user is an Admin on the account, this may be another user the Admin user is accessing.
     * @param \DocuSign\eSign\Model\SocialAccountInformation $social_account_information  (optional)
     *
     * @throws ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function updateSocialLoginWithHttpInfo($account_id, $user_id, $social_account_information = null): array
    {
        // verify the required parameter 'account_id' is set
        if ($account_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $account_id when calling updateSocialLogin');
        }
        // verify the required parameter 'user_id' is set
        if ($user_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $user_id when calling updateSocialLogin');
        }
        // parse inputs
        $resourcePath = "/v2.1/accounts/{accountId}/users/{userId}/social";
        $httpBody = $_tempBody ?? ''; // $_tempBody is the method argument, if present
        $queryParams = $headerParams = $formParams = [];
        $headerParams['Accept'] ??= $this->apiClient->selectHeaderAccept(['application/json']);
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);


        // path params
        if ($account_id !== null) {
            $resourcePath = self::updateResourcePath($resourcePath, "accountId", $account_id);
        }
        // path params
        if ($user_id !== null) {
            $resourcePath = self::updateResourcePath($resourcePath, "userId", $user_id);
        }

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);
        // body params
        $_tempBody = null;
        if (isset($social_account_information)) {
            $_tempBody = $social_account_information;
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
                'PUT',
                $queryParams,
                $httpBody,
                $headerParams,
                null,
                '/v2.1/accounts/{accountId}/users/{userId}/social'
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
}
