<?php
namespace com\zoho\crm\api\dc;

use com\zoho\crm\api\dc\DataCenter;

/**
 * This class represents the properties of Zoho CRM in AU Domain.
 */
class AUDataCenter extends DataCenter
{
    private static $PRODUCTION = null;
    private static $SANDBOX = null;
    private static $DEVELOPER = null;
    private static $AU = null;

    /**
     * This Environment class instance represents the Zoho CRM Production Environment in AU Domain.
     * @return Environment A Environment class instance.
     */
    public static function PRODUCTION()
    {
        self::$AU = new AUDataCenter();
        if (self::$PRODUCTION == null)
        {
            self::$PRODUCTION = DataCenter::setEnvironment("https://www.zohoapis.com.au", self::$AU->getIAMUrl(), self::$AU->getFileUploadUrl());
        }
        return self::$PRODUCTION;
    }

    /**
     * This Environment class instance represents the Zoho CRM Sandbox Environment in AU Domain.
     * @return Environment A Environment class instance.
     */
    public static function SANDBOX()
    {
        self::$AU = new AUDataCenter();
        if (self::$SANDBOX == null)
        {
            self::$SANDBOX = DataCenter::setEnvironment("https://sandbox.zohoapis.com.au", self::$AU->getIAMUrl(), self::$AU->getFileUploadUrl());
        }
        return self::$SANDBOX;
    }

    /**
     * This Environment class instance represents the Zoho CRM Developer Environment in AU Domain.
     * @return Environment A Environment class instance.
     */
    public static function DEVELOPER()
    {
        self::$AU = new AUDataCenter();
        if (self::$DEVELOPER == null)
        {
            self::$DEVELOPER = DataCenter::setEnvironment("https://developer.zohoapis.com.au", self::$AU->getIAMUrl(), self::$AU->getFileUploadUrl());
        }
        return self::$DEVELOPER;
    }

    public function getIAMUrl()
    {
        return "https://accounts.zoho.com.au/oauth/v2/token";
    }

    public function getFileUploadUrl()
    {
        return "https://content.zohoapis.com.au";
    }
}