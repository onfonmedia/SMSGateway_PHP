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
use OnfonMediaSMSGatewayLib\Utils\DateTimeHelper;
use OnfonMediaSMSGatewayLib\Http\HttpRequest;
use OnfonMediaSMSGatewayLib\Http\HttpResponse;
use OnfonMediaSMSGatewayLib\Http\HttpMethod;
use OnfonMediaSMSGatewayLib\Http\HttpContext;
use Unirest\Request;

/**
 * @todo Add a general description for this controller.
 */
class CampaignController extends BaseController
{
    /**
     * @var CampaignController The reference to *Singleton* instance of this class
     */
    private static $instance;

    /**
     * Returns the *Singleton* instance of this class.
     * @return CampaignController The *Singleton* instance.
     */
    public static function getInstance()
    {
        if (null === static::$instance) {
            static::$instance = new static();
        }
        
        return static::$instance;
    }

    /**
     * Get Campaign Message Status
     *
     * @param integer $campaignId First user have to call Get Campaigns api for CampaignId
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function getCampaignMessageStatus(
        $campaignId
    ) {

        //prepare query string for API call
        $_queryBuilder = '/Campaign/Statistics';

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($_queryBuilder, array (
            'campaignId' => $campaignId,
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
     * Get Campaigns
     *
     * @param DateTime $enddate  Date format must be in yyyy-mm-dd
     * @param DateTime $fromdate Date format must be in yyyy-mm-dd
     * @param integer  $length   Ending index value to fetch the campaign detail.
     * @param integer  $start    Starting index value to fetch the campaign detail.
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function getCampaigns(
        $enddate,
        $fromdate,
        $length,
        $start
    ) {

        //prepare query string for API call
        $_queryBuilder = '/Campaign';

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($_queryBuilder, array (
            'enddate'  => DateTimeHelper::toSimpleDate($enddate),
            'fromdate' => DateTimeHelper::toSimpleDate($fromdate),
            'length'   => $length,
            'start'    => $start,
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
}