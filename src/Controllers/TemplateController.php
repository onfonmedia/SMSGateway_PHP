<?php
/*
 * OnfonMediaSMSGatewayLib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace OnfonMediaSMSGatewayLib\Controllers;

use OnfonMediaSMSGatewayLib\APIException;
use OnfonMediaSMSGatewayLib\APIHelper;
use OnfonMediaSMSGatewayLib\Configuration;
use OnfonMediaSMSGatewayLib\Models;
use OnfonMediaSMSGatewayLib\Exceptions;
use OnfonMediaSMSGatewayLib\Http\HttpRequest;
use OnfonMediaSMSGatewayLib\Http\HttpResponse;
use OnfonMediaSMSGatewayLib\Http\HttpMethod;
use OnfonMediaSMSGatewayLib\Http\HttpContext;
use Unirest\Request;

/**
 * @todo Add a general description for this controller.
 */
class TemplateController extends BaseController
{
    /**
     * @var TemplateController The reference to *Singleton* instance of this class
     */
    private static $instance;

    /**
     * Returns the *Singleton* instance of this class.
     * @return TemplateController The *Singleton* instance.
     */
    public static function getInstance()
    {
        if (null === static::$instance) {
            static::$instance = new static();
        }
        
        return static::$instance;
    }

    /**
     * Get Template List
     *
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function getTemplateList()
    {

        //prepare query string for API call
        $_queryBuilder = '/Template';

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($_queryBuilder, array (
            'ApiKey' => Configuration::$apiKey,
            'ClientId' => Configuration::$clientId,
        ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl(Configuration::$BASEURI . $_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => BaseController::USER_AGENT,
            'Accept'        => 'application/json',
            'AccessKey' => Configuration::$accessKey
        );

        //call on-before Http callback
        $_httpRequest = new HttpRequest(HttpMethod::GET, $_headers, $_queryUrl);
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        //and invoke the API call request to fetch the response
        $response = Request::get($_queryUrl, $_headers);

        $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
        $_httpContext = new HttpContext($_httpRequest, $_httpResponse);

        //call on-after Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpContext);

        return $response->body;
    }

    /**
     * Create New Template
     *
     * @param string $messageTemplate Template text.
     * @param string $templateName    Name of template
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function createNewTemplate(
        $messageTemplate,
        $templateName
    ) {

        //prepare query string for API call
        $_queryBuilder = '/Template';

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($_queryBuilder, array (
            'ApiKey' => Configuration::$apiKey,
            'ClientId' => Configuration::$clientId,
        ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl(Configuration::$BASEURI . $_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => BaseController::USER_AGENT,
            'Accept'        => 'application/json',
            'AccessKey' => Configuration::$accessKey
        );

        //prepare parameters
        $_parameters = array (
            'MessageTemplate' => $messageTemplate,
            'TemplateName'    => $templateName
        );

        //call on-before Http callback
        $_httpRequest = new HttpRequest(HttpMethod::POST, $_headers, $_queryUrl, $_parameters);
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        //and invoke the API call request to fetch the response
        $response = Request::post($_queryUrl, $_headers, Request\Body::Form($_parameters));

        $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
        $_httpContext = new HttpContext($_httpRequest, $_httpResponse);

        //call on-after Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpContext);

        return $response->body;
    }

    /**
     * Update Template
     *
     * @param string  $messageTemplate Template text.
     * @param string  $templateName    Name of template
     * @param integer $id              id of template
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function updateTemplate(
        $messageTemplate,
        $templateName,
        $id
    ) {

        //prepare query string for API call
        $_queryBuilder = '/Template';

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($_queryBuilder, array (
            'ApiKey' => Configuration::$apiKey,
            'ClientId' => Configuration::$clientId,
        ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl(Configuration::$BASEURI . $_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => BaseController::USER_AGENT,
            'Accept'        => 'application/json',
            'AccessKey' => Configuration::$accessKey
        );

        //prepare parameters
        $_parameters = array (
            'MessageTemplate' => $messageTemplate,
            'TemplateName'    => $templateName,
            'id'              => $id
        );

        //call on-before Http callback
        $_httpRequest = new HttpRequest(HttpMethod::PUT, $_headers, $_queryUrl, $_parameters);
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        //and invoke the API call request to fetch the response
        $response = Request::put($_queryUrl, $_headers, Request\Body::Form($_parameters));

        $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
        $_httpContext = new HttpContext($_httpRequest, $_httpResponse);

        //call on-after Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpContext);

        return $response->body;
    }

    /**
     * Delete Template
     *
     * @param integer $id id of template
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function deleteTemplate(
        $id
    ) {

        //prepare query string for API call
        $_queryBuilder = '/Template';

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($_queryBuilder, array (
            'ApiKey' => Configuration::$apiKey,
            'ClientId' => Configuration::$clientId,
        ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl(Configuration::$BASEURI . $_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => BaseController::USER_AGENT,
            'Accept'        => 'application/json',
            'AccessKey' => Configuration::$accessKey
        );

        //prepare parameters
        $_parameters = array (
            'id' => $id
        );

        //call on-before Http callback
        $_httpRequest = new HttpRequest(HttpMethod::DELETE, $_headers, $_queryUrl, $_parameters);
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        //and invoke the API call request to fetch the response
        $response = Request::delete($_queryUrl, $_headers, Request\Body::Form($_parameters));

        $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
        $_httpContext = new HttpContext($_httpRequest, $_httpResponse);

        //call on-after Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpContext);

        return $response->body;
    }
}
