<?php
namespace samples\taxes;

use com\zoho\api\authenticator\OAuthBuilder;
use com\zoho\crm\api\dc\USDataCenter;
use com\zoho\crm\api\InitializeBuilder;
use com\zoho\crm\api\taxes\APIException;
use com\zoho\crm\api\taxes\ResponseWrapper;
use com\zoho\crm\api\taxes\TaxesOperations;
use com\zoho\crm\api\util\Choice;

require_once "vendor/autoload.php";

class GetTax
{
    public static function initialize()
    {
        $environment = USDataCenter::PRODUCTION();
        $token = (new OAuthBuilder())
        ->clientId("client_id")
        ->clientSecret("client_secret")
        ->refreshToken("refresh_token")
            ->build();
        (new InitializeBuilder())
            ->environment($environment)
            ->token($token)
            ->initialize();
    }

    /**
     * <h3> Get Tax </h3>
     * This method is used to get the Organization Tax and print the response.
     * @param taxId - The ID of the tax to be obtainted
     * @throws Exception
     */
    public static function getTax(string $taxId)
    {
        $taxesOperations = new TaxesOperations();
        //Call getTax method that takes taxId as parameter
        $response = $taxesOperations->getTax($taxId);
        if ($response != null) {
            echo ("Status code " . $response->getStatusCode() . "\n");
            if (in_array($response->getStatusCode(), array(204, 304))) {
                echo ($response->getStatusCode() == 204 ? "No Content\n" : "Not Modified\n");
                return;
            }
            $responseHandler = $response->getObject();
            if ($responseHandler instanceof ResponseWrapper) {
                $responseWrapper = $responseHandler;
                $orgTax = $responseWrapper->getOrgTaxes();
                $taxes = $orgTax->getTaxes();
                if ($taxes != null) {
                    foreach ($taxes as $tax) {
                        echo ("Tax DisplayLabel: " . $tax->getDisplayLabel() . "\n");
                        echo ("Tax Name: " . $tax->getName() . "\n");
                        echo ("Tax Id: " . $tax->getId() . "\n");
                        echo ("Tax Value: " . $tax->getValue() . "\n");
                    }
                }
                $preference = $orgTax->getPreference();
                if ($preference != null) {
                    echo ("Preference AutoPopulateTax: ");
                    print_r($preference->getAutoPopulateTax());
                    echo ("\n");
                    echo ("Preference ModifyTaxRates: ");
                    print_r($preference->getModifyTaxRates());
                    echo ("\n");
                }
            }
            else if ($responseHandler instanceof APIException) {
                $exception = $responseHandler;
                echo ("Status: " . $exception->getStatus()->getValue() . "\n");
                echo ("Code: " . $exception->getCode()->getValue() . "\n");
                echo ("Details: ");
                foreach ($exception->getDetails() as $key => $value) {
                    echo ($key . " : " . $value . "\n");
                }
                echo ("Message : " . ($exception->getMessage() instanceof Choice ? $exception->getMessage()->getValue() : $exception->getMessage()));
            }
        }
    }
}
$taxId = "34773778001";
GetTax::initialize();
GetTax::getTax($taxId);
