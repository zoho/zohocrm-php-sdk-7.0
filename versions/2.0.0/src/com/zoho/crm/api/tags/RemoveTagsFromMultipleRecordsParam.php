<?php 
namespace com\zoho\crm\api\tags;

use com\zoho\crm\api\Param;

class RemoveTagsFromMultipleRecordsParam
{

	public static final function ids()
	{
		return new Param('ids', 'com.zoho.crm.api.Tags.RemoveTagsFromMultipleRecordsParam'); 

	}
} 
