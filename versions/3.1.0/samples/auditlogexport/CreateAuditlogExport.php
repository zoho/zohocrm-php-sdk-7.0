<?php

require_once "vendor/autoload.php";

use com\zoho\api\authenticator\OAuthBuilder;
use com\zoho\crm\api\dc\USDataCenter;
use com\zoho\crm\api\InitializeBuilder;
use com\zoho\crm\api\auditlogexport\AuditLogExport;
use com\zoho\crm\api\auditlogexport\AuditLogExportOperations;
use com\zoho\crm\api\auditlogexport\BodyWrapper;
use com\zoho\crm\api\auditlogexport\Criteria;
use com\zoho\crm\api\auditlogexport\ActionWrapper;
use com\zoho\crm\api\auditlogexport\SuccessResponse;
use com\zoho\crm\api\auditlogexport\APIException;
class CreateAuditlogExport
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
    public static function createAuditlogExport()
    {
        try {
            $auditLogExportOperations = new AuditLogExportOperations();
            $request = new BodyWrapper();
            $auditLogExport = [];

            $auditLogExport1 = new AuditLogExport();
            $criteria = new Criteria();
            $criteria->setComparator("between");

            $field = new com\zoho\crm\api\auditlogexport\Field();
            $field->setAPIName("audited_time");
            $criteria->setField($field);

            $values = [];
            $values[] = (new DateTime('2024-01-02T10:00:00+05:30'))->format('Y-m-d\TH:i:sP');
            $values[] = (new DateTime('2024-01-03T10:00:00+05:30'))->format('Y-m-d\TH:i:sP');
            $criteria->setValue($values);

            $auditLogExport1->setCriteria($criteria);
            $auditLogExport[] = $auditLogExport1;
            $request->setAuditLogExport($auditLogExport);

            $response = $auditLogExportOperations->createAuditlogExport($request);

            if ($response != null) {
                echo "Status Code: " . $response->getStatusCode() . "\n";

                if ($response->isExpected()) {
                    $actionHandler = $response->getObject();

                    if ($actionHandler instanceof ActionWrapper) {
                        $actionWrapper = $actionHandler;
                        $actionResponses = $actionWrapper->getAuditLogExport();

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

CreateAuditlogExport::initialize();
CreateAuditlogExport::createAuditlogExport()
?>
