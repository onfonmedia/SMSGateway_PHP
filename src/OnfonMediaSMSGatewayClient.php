<?php
/*
 * OnfonMediaSMSGatewayLib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace OnfonMediaSMSGatewayLib;

use OnfonMediaSMSGatewayLib\Controllers;

/**
 * OnfonMediaSMSGatewayLib client class
 */
class OnfonMediaSMSGatewayClient
{
    /**
     * Constructor with authentication and configuration parameters
     */
    public function __construct(
        $accessKey = null,
        $apiKey = null,
        $clientId = null
    ) {
        Configuration::$accessKey = $accessKey ? $accessKey : Configuration::$accessKey;
        Configuration::$apiKey = $apiKey ? $apiKey : Configuration::$apiKey;
        Configuration::$clientId = $clientId ? $clientId : Configuration::$clientId;
    }
    /**
     * Singleton access to Account controller
     * @return Controllers\AccountController The *Singleton* instance
     */
    public function getAccount()
    {
        return Controllers\AccountController::getInstance();
    }
    /**
     * Singleton access to Template controller
     * @return Controllers\TemplateController The *Singleton* instance
     */
    public function getTemplate()
    {
        return Controllers\TemplateController::getInstance();
    }
    /**
     * Singleton access to SMS controller
     * @return Controllers\SMSController The *Singleton* instance
     */
    public function getSMS()
    {
        return Controllers\SMSController::getInstance();
    }
    /**
     * Singleton access to GROUP controller
     * @return Controllers\GROUPController The *Singleton* instance
     */
    public function getGROUP()
    {
        return Controllers\GROUPController::getInstance();
    }
    /**
     * Singleton access to Campaign controller
     * @return Controllers\CampaignController The *Singleton* instance
     */
    public function getCampaign()
    {
        return Controllers\CampaignController::getInstance();
    }
}