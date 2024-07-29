<?php 
namespace com\zoho\crm\api\files;

use com\zoho\crm\api\Param;
use com\zoho\crm\api\ParameterMap;
use com\zoho\crm\api\exception\SDKException;
use com\zoho\crm\api\util\CommonAPIHandler;
use com\zoho\crm\api\util\Constants;
use com\zoho\crm\api\util\APIResponse;

class FilesOperations
{

	/**
	 * The method to upload files
	 * @param BodyWrapper $request An instance of BodyWrapper
	 * @param ParameterMap $paramInstance An instance of ParameterMap
	 * @return APIResponse An instance of APIResponse
	 */
	public function uploadFiles(BodyWrapper $request, ParameterMap $paramInstance=null)
	{
		$handlerInstance=new CommonAPIHandler(); 
		$apiPath=""; 
		$apiPath=$apiPath.('/crm/v7/files'); 
		$handlerInstance->setAPIPath($apiPath); 
		$handlerInstance->setHttpMethod(Constants::REQUEST_METHOD_POST); 
		$handlerInstance->setCategoryMethod(Constants::REQUEST_CATEGORY_CREATE); 
		$handlerInstance->setContentType('multipart/form-data'); 
		$handlerInstance->setRequest($request); 
		$handlerInstance->setMandatoryChecker(true); 
		$handlerInstance->setParam($paramInstance); 
		return $handlerInstance->apiCall(ActionHandler::class, 'application/json'); 

	}

	/**
	 * The method to get file
	 * @param ParameterMap $paramInstance An instance of ParameterMap
	 * @return APIResponse An instance of APIResponse
	 */
	public function getFile(ParameterMap $paramInstance=null)
	{
		$handlerInstance=new CommonAPIHandler(); 
		$apiPath=""; 
		$apiPath=$apiPath.('/crm/v7/files'); 
		$handlerInstance->setAPIPath($apiPath); 
		$handlerInstance->setHttpMethod(Constants::REQUEST_METHOD_GET); 
		$handlerInstance->setCategoryMethod(Constants::REQUEST_CATEGORY_READ); 
		$handlerInstance->setParam($paramInstance); 
		return $handlerInstance->apiCall(ResponseHandler::class, 'application/x-download'); 

	}
} 
