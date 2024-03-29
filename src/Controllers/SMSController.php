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
class SMSController extends BaseController
{
    /**
     * @var SMSController The reference to *Singleton* instance of this class
     */
    private static $instance;

    /**
     * Returns the *Singleton* instance of this class.
     * @return SMSController The *Singleton* instance.
     */
    public static function getInstance()
    {
        if (null === static::$instance) {
            static::$instance = new static();
        }
        
        return static::$instance;
    }

    /**
     * Get Sent Message List
     *
     * @param DateTime $enddate  Date format must be in yyyy-mm-dd
     * @param DateTime $fromdate Date format must be in yyyy-mm-dd
     * @param integer  $length   Ending index value to fetch the campaign detail.
     * @param integer  $start    Starting index value to fetch the campaign detail.
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function getSentMessageList(
        $enddate,
        $fromdate,
        $length,
        $start
    ) {

        //prepare query string for API call
        $_queryBuilder = '/SMS';

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

    /**
     * Get Sent Message Status
     *
     * @param integer $messageId MessageId of message
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function getSentMessageStatus(
        $messageId
    ) {

        //prepare query string for API call
        $_queryBuilder = '/MessageStatus';

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($_queryBuilder, array (
            'MessageId' => $messageId,
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
     * Create SMS
     *
     * @param string $message      text message to send
     * @param string $mobileNumber Use mobile number as comma sepreated to send message on multiple mobile number e.g.
     *                             78461230,78945612
     * @param string $senderId     Approved Sender Id
     * @param string $coRelator    (optional) Parameter required for using SDP OnDemand Service
     * @param bool   $isFlash      (optional) Is_Flash is true or false for flash message
     * @param bool   $isUnicode    (optional) Is_Unicode is true or false for unicode message
     * @param string $linkId       (optional) Parameter required for using SDP OnDemand Service
     * @param string $groupId      (optional) Valid group-id of current user (only for group message otherwise leave
     *                             empty string)
     * @param string $scheduleTime (optional) scheduleTime Date in yyyy-MM-dd HH:MM (only for schedule message)
     * @param string $serviceId    (optional) Parameter required for using SDP OnSubscription Service
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function getCreateSMS(
        $message,
        $mobileNumber,
        $senderId,
        $coRelator = null,
        $isFlash = null,
        $isUnicode = null,
        $linkId = null,
        $groupId = null,
        $scheduleTime = null,
        $serviceId = null
    ) {

        //prepare query string for API call
        $_queryBuilder = '/SendSMS';

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($_queryBuilder, array (
            'Message'      => $message,
            'MobileNumber' => $mobileNumber,
            'SenderId'     => $senderId,
            'CoRelator'    => $coRelator,
            'Is_Flash'     => var_export($isFlash, true),
            'Is_Unicode'   => var_export($isUnicode, true),
            'LinkId'       => $linkId,
            'groupId'      => $groupId,
            'scheduleTime' => $scheduleTime,
            'serviceId'    => $serviceId,
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
     * Create SMS
     *
     * @param string $message      text message to send
     * @param string $mobileNumber Use mobile number as comma sepreated to send message on multiple mobile number e.g.
     *                             78461230,78945612
     * @param string $senderId     Approved Sender Id
     * @param string $coRelator    (optional) Parameter required for using SDP OnDemand Service
     * @param bool   $isFlash      (optional) Is_Flash is true or false for flash message
     * @param bool   $isUnicode    (optional) Is_Unicode is true or false for unicode message
     * @param string $linkId       (optional) Parameter required for using SDP OnDemand Service
     * @param string $groupId      (optional) Valid group-id of current user (only for group message otherwise leave
     *                             empty string)
     * @param string $scheduleTime (optional) scheduleTime Date in yyyy-MM-dd HH:MM (only for schedule message)
     * @param string $serviceId    (optional) Parameter required for using SDP OnSubscription Service
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function createSMS(
        $message,
        $mobileNumber,
        $senderId,
        $coRelator = null,
        $isFlash = null,
        $isUnicode = null,
        $linkId = null,
        $groupId = null,
        $scheduleTime = null,
        $serviceId = null
    ) {

        //prepare query string for API call
        $_queryBuilder = '/SendSMS';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'Message'      => $message,
            'MobileNumber' => $mobileNumber,
            'SenderId'     => $senderId,
            'CoRelator'    => $coRelator,
            'Is_Flash'     => var_export($isFlash, true),
            'Is_Unicode'   => var_export($isUnicode, true),
            'LinkId'       => $linkId,
            'groupId'      => $groupId,
            'scheduleTime' => $scheduleTime,
            'serviceId'    => $serviceId,
            ));

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
        $_httpRequest = new HttpRequest(HttpMethod::POST, $_headers, $_queryUrl);
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        //and invoke the API call request to fetch the response
        $response = Request::post($_queryUrl, $_headers);

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
     * Create Bulk SMS
     *
     * @param string   $mobileNumberMessage  Please ensure while submitting the request the message should be passed in
     *                                       encoded format. e.g. 78461230^test~78945612^hello
     * @param string   $senderId             Approved Sender Id
     * @param string   $coRelator            (optional) Parameter required for using SDP OnDemand Service
     * @param bool     $isFlash              (optional) Is_Flash is true or false for flash message
     * @param bool     $isUnicode            (optional) Is_Unicode is true or false for unicode message
     * @param string   $linkId               (optional) Parameter required for using SDP OnDemand Service
     * @param DateTime $scheduleTime         (optional) scheduleTime Date in yyyy-MM-dd HH:MM (only for schedule
     *                                       message)
     * @param string   $serviceId            (optional) Parameter required for using SDP OnSubscription Service
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function getCreateBulkSMS(
        $mobileNumberMessage,
        $senderId,
        $coRelator = null,
        $isFlash = null,
        $isUnicode = null,
        $linkId = null,
        $scheduleTime = null,
        $serviceId = null
    ) {

        //prepare query string for API call
        $_queryBuilder = '/SendBulkSMS';

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($_queryBuilder, array (
            'MobileNumber_Message' => $mobileNumberMessage,
            'SenderId'             => $senderId,
            'CoRelator'            => $coRelator,
            'Is_Flash'             => var_export($isFlash, true),
            'Is_Unicode'           => var_export($isUnicode, true),
            'LinkId'               => $linkId,
            'scheduleTime'         => DateTimeHelper::toSimpleDate($scheduleTime),
            'serviceId'            => $serviceId,
            'ApiKey' => Configuration::$apiKey,
            'ClientId' => Configuration::$clientId,
        ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl(Configuration::$BASEURI . $_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'         => BaseController::USER_AGENT,
            'Accept'             => 'application/json',
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
     * Create Bulk SMS
     *
     * @param array    $messageParameters TODO: type description here
     * @param string   $senderId          Approved Sender Id
     * @param bool     $isFlash           (optional) Is_Flash is true or false for flash message
     * @param bool     $isUnicode         (optional) Is_Unicode is true or false for unicode message
     * @param DateTime $scheduleDateTime  (optional) scheduleTime Date in yyyy-MM-dd HH:MM (only for schedule message)
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function createBulkSMS(
        $messageParameters,
        $senderId,
        $isFlash = null,
        $isUnicode = null,
        $scheduleDateTime = null
    ) {

        //prepare query string for API call
        $_queryBuilder = '/SendBulkSMS';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'MessageParameters' => $messageParameters,
            'ScheduleDateTime'  => DateTimeHelper::toSimpleDate($scheduleDateTime),
            ));

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($_queryBuilder, array (
            'SenderId'          => $senderId,
            'Is_Flash'          => var_export($isFlash, true),
            'Is_Unicode'        => var_export($isUnicode, true),
            'ApiKey' => Configuration::$apiKey,
            'ClientId' => Configuration::$clientId,
        ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl(Configuration::$BASEURI . $_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'      => BaseController::USER_AGENT,
            'Accept'          => 'application/json',
            'AccessKey' => Configuration::$accessKey
        );

        //call on-before Http callback
        $_httpRequest = new HttpRequest(HttpMethod::POST, $_headers, $_queryUrl);
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        //and invoke the API call request to fetch the response
        $response = Request::post($_queryUrl, $_headers);

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
