<?php 
namespace com\zoho\crm\api\emailtemplates;

use com\zoho\crm\api\Param;

class GetEmailTemplatesParam
{

	public static final function module()
	{
		return new Param('module', 'com.zoho.crm.api.EmailTemplates.GetEmailTemplatesParam'); 

	}
} 
