<?php 
namespace com\zoho\crm\api\fromaddresses;

use com\zoho\crm\api\exception\SDKException;
use com\zoho\crm\api\util\CommonAPIHandler;
use com\zoho\crm\api\util\Constants;
use com\zoho\crm\api\util\APIResponse;

class FromAddressesOperations
{

	/**
	 * The method to get from addresses
	 * @return APIResponse An instance of APIResponse
	 */
	public function getFromAddresses()
	{
		$handlerInstance=new CommonAPIHandler(); 
		$apiPath=""; 
		$apiPath=$apiPath.('/crm/v7/settings/emails/actions/from_addresses'); 
		$handlerInstance->setAPIPath($apiPath); 
		$handlerInstance->setHttpMethod(Constants::REQUEST_METHOD_GET); 
		$handlerInstance->setCategoryMethod(Constants::REQUEST_CATEGORY_READ); 
		return $handlerInstance->apiCall(ResponseHandler::class, 'application/json'); 

	}
} 
