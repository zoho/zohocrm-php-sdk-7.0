<?php 
namespace com\zoho\crm\api\relatedrecords;

use com\zoho\crm\api\Header;

class GetRelatedRecordsHeader
{

	public static final function IfModifiedSince()
	{
		return new Header('If-Modified-Since', 'com.zoho.crm.api.RelatedRecords.GetRelatedRecordsHeader'); 

	}
	public static final function XEXTERNAL()
	{
		return new Header('X-EXTERNAL', 'com.zoho.crm.api.RelatedRecords.GetRelatedRecordsHeader'); 

	}
} 
