<?php 
namespace com\zoho\crm\api\record;

use com\zoho\crm\api\Param;

class DeleteRecordUsingExternalIDParam
{

	public static final function wfTrigger()
	{
		return new Param('wf_trigger', 'com.zoho.crm.api.Record.DeleteRecordUsingExternalIDParam'); 

	}
} 
