<?php
namespace com\zoho\crm\api;

use com\zoho\crm\api\util\Constants;
use com\zoho\crm\api\util\Utility;
use com\zoho\crm\api\exception\SDKException;
use com\zoho\api\authenticator\Token;
use com\zoho\api\authenticator\store\TokenStore;
use com\zoho\crm\api\sdkconfigbuilder\SDKConfig;
use com\zoho\crm\api\dc\Environment;
use com\zoho\api\logger\LogBuilder;
use com\zoho\crm\api\RequestProxy;
use com\zoho\api\logger\Levels;
use com\zoho\api\authenticator\store\FileStore;
use com\zoho\api\logger\Logger;

class InitializeBuilder
{
    private $environment;
    private $store;
    private $token;
    private $resourcePath;
    private $requestProxy;
    private $sdkConfig;
    private $logger;
    private $errorMessage;
    private $initializer;

    function __construct()
    {
        $this->initializer = Initializer::getInitializer();
        $this->errorMessage = (Initializer::getInitializer() != null) ? Constants::SWITCH_USER_ERROR : Constants::INITIALIZATION_ERROR;
        if(Initializer::getInitializer() != null)
        {
            $this->environment = Initializer::getInitializer()->getEnvironment();
            $this->token = Initializer::getInitializer()->getToken();
            $this->sdkConfig = Initializer::getInitializer()->getSDKConfig();
        }
    }

    public function initialize()
    {
        Utility::assertNotNull($this->token, $this->errorMessage, Constants::TOKEN_ERROR_MESSAGE);
        if(is_null($this->store))
        {
            $this->store = new FileStore(getcwd() . DIRECTORY_SEPARATOR . Constants::TOKEN_FILE);
        }
        if(is_null($this->sdkConfig))
        {
            $this->sdkConfig = (new SDKConfigBuilder())->build();
        }
        if(is_null($this->resourcePath))
        {
            $this->resourcePath = getcwd();
        }
        if(is_null($this->logger))
        {
            $this->logger = (new LogBuilder())->level(Levels::OFF)->filePath(null)->build();
        }
        Initializer::initialize($this->environment, $this->token, $this->store, $this->sdkConfig, $this->resourcePath, $this->logger, $this->requestProxy);
    }

    public function switchUser()
    {
        Utility::assertNotNull(Initializer::getInitializer(), Constants::SDK_UNINITIALIZATION_ERROR, Constants::SDK_UNINITIALIZATION_MESSAGE);
        if(is_null($this->sdkConfig))
        {
            $this->sdkConfig = (new SDKConfigBuilder())->build();
        }
        Initializer::switchUser($this->environment, $this->token, $this->sdkConfig, $this->requestProxy);
    }

    public function logger(Logger $logger)
    {
        $this->logger = $logger;
        return $this;
    }

    public function token(Token $token)
    {
        Utility::assertNotNull($token, $this->errorMessage, Constants::TOKEN_ERROR_MESSAGE);
        $this->token = $token;
        return $this;
    }

    public function SDKConfig(SDKConfig $sdkConfig)
    {
        $this->sdkConfig = $sdkConfig;
        return $this;
    }

    public function requestProxy(RequestProxy $requestProxy)
    {
        $this->requestProxy = $requestProxy;
        return $this;
    }

    public function resourcePath(string $resourcePath)
    {
        if($resourcePath != null && !is_dir($resourcePath))
        {
            throw new SDKException($this->errorMessage, Constants::RESOURCE_PATH_INVALID_ERROR_MESSAGE);
        }
        $this->resourcePath = $resourcePath;
        return $this;
    }

    public function store(TokenStore $store)
    {
        $this->store = $store;
        return $this;
    }

    public function environment(Environment $environment)
    {
        Utility::assertNotNull($environment, $this->errorMessage, Constants::ENVIRONMENT_ERROR_MESSAGE);
        $this->environment = $environment;
        return $this;
    }
}
?>