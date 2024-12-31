<?php 
namespace com\zoho\crm\api\recordlocking;

use com\zoho\crm\api\Param;

class GetRecordLockingInformationsParam
{

	public static final function fields()
	{
		return new Param('fields', 'com.zoho.crm.api.RecordLocking.GetRecordLockingInformationsParam'); 

	}
	public static final function ids()
	{
		return new Param('ids', 'com.zoho.crm.api.RecordLocking.GetRecordLockingInformationsParam'); 

	}
} 
