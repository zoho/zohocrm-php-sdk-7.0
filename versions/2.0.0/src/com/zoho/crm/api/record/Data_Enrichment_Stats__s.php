<?php 
namespace com\zoho\crm\api\record;

use com\zoho\crm\api\modules\Modules;

class Data_Enrichment_Stats__s
{

	public static final function UsageBulkCountS()
	{
		return new Field('Usage_Bulk_Count__s'); 

	}
	public static final function UsageDateS()
	{
		return new Field('Usage_Date__s'); 

	}
	public static final function FeatureNameS()
	{
		return new Field('Feature_Name__s'); 

	}
	public static final function ModuleS()
	{
		return new Field('Module__s'); 

	}
	public static final function AddOnLimitS()
	{
		return new Field('Add_On_Limit__s'); 

	}
	public static final function MonthlyLimitS()
	{
		return new Field('Monthly_Limit__s'); 

	}
	public static final function UsageCountS()
	{
		return new Field('Usage_Count__s'); 

	}
} 
