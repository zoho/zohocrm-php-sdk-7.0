<?php

require "vendor/autoload.php";

use com\zoho\api\authenticator\OAuthBuilder;
use com\zoho\crm\api\dc\USDataCenter;
use com\zoho\crm\api\InitializeBuilder;
use com\zoho\crm\api\cadencesexecution\BodyWrapper;
use com\zoho\crm\api\cadencesexecution\CadencesExecutionOperations;
use com\zoho\crm\api\cadencesexecution\ActionWrapper;
use com\zoho\crm\api\cadencesexecution\SuccessResponse;
use com\zoho\crm\api\cadencesexecution\APIException;

class EnrolCadences
{
    public static function initialize()
    {
        $environment = USDataCenter::PRODUCTION();
        $token = (new OAuthBuilder())
            ->clientID("clientId")
            ->clientSecret("clientSecret")
            ->grantToken("grantToken")
            ->build();
        (new InitializeBuilder())
            ->environment($environment)
            ->token($token)
            ->initialize();
    }
    public static function enrolCadences($moduleAPIName)
    {
        try {
            $cadencesExecutionOperations = new CadencesExecutionOperations();
            $request = new BodyWrapper();

            $cadencesIds = ["34770785001"];
            $request->setCadencesIds($cadencesIds);

            $ids = ["34770650001"];
            $request->setIds($ids);

            $response = $cadencesExecutionOperations->enrolCadences($moduleAPIName, $request);

            if ($response != null) {
                echo "Status Code: " . $response->getStatusCode() . "\n";

                if ($response->isExpected()) {
                    $actionHandler = $response->getObject();

                    if ($actionHandler instanceof ActionWrapper) {
                        $actionWrapper = $actionHandler;
                        $actionResponses = $actionWrapper->getData();

                        foreach ($actionResponses as $actionResponse) {
                            if ($actionResponse instanceof SuccessResponse) {
                                $successResponse = $actionResponse;
                                echo "Status: " . $successResponse->getStatus()->getValue() . "\n";
                                echo "Code: " . $successResponse->getCode()->getValue() . "\n";
                                echo "Details: \n";

                                foreach ($successResponse->getDetails() as $key => $value) {
                                    echo $key . ": " . $value . "\n";
                                }

                                echo "Message: " . $successResponse->getMessage() . "\n";
                            } elseif ($actionResponse instanceof APIException) {
                                $exception = $actionResponse;
                                echo "Status: " . $exception->getStatus()->getValue() . "\n";
                                echo "Code: " . $exception->getCode()->getValue() . "\n";
                                echo "Details: \n";

                                foreach ($exception->getDetails() as $key => $value) {
                                    echo $key . ": " . $value . "\n";
                                }

                                echo "Message: " . $exception->getMessage() . "\n";
                            }
                        }
                    } elseif ($actionHandler instanceof APIException) {
                        $exception = $actionHandler;
                        echo "Status: " . $exception->getStatus()->getValue() . "\n";
                        echo "Code: " . $exception->getCode()->getValue() . "\n";
                        echo "Details: \n";

                        foreach ($exception->getDetails() as $key => $value) {
                            echo $key . ": " . $value . "\n";
                        }

                        echo "Message: " . $exception->getMessage() . "\n";
                    }
                } else {
                    $responseObject = $response->getModel();
                    $reflect = new ReflectionClass($responseObject);
                    $fields = $reflect->getProperties(ReflectionProperty::IS_PRIVATE);

                    foreach ($fields as $field) {
                        $field->setAccessible(true);
                        echo $field->getName() . ": " . $field->getValue($responseObject) . "\n";
                    }
                }
            }
        } catch (Exception $e) {
            echo "Exception: " . $e->getMessage() . "\n";
        }
    }
}

EnrolCadences::initialize();
$moduleAPIName = "Leads";
EnrolCadences::enrolCadences($moduleAPIName)

?>
