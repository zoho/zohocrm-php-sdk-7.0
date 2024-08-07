<?php 
namespace com\zoho\crm\api\ziapeopleenrichment;

use com\zoho\crm\api\util\Model;

class ActionWrapper implements Model, ActionHandler
{

	private  $ziapeopleenrichment;
	private  $keyModified=array();

	/**
	 * The method to get the ziapeopleenrichment
	 * @return array A array representing the ziapeopleenrichment
	 */
	public function getZiapeopleenrichment()
	{
		return $this->ziapeopleenrichment; 

	}

	/**
	 * The method to set the value to ziapeopleenrichment
	 * @param array $ziapeopleenrichment A array
	 */
	public function setZiapeopleenrichment(array $ziapeopleenrichment)
	{
		$this->ziapeopleenrichment=$ziapeopleenrichment; 
		$this->keyModified['__zia_people_enrichment'] = 1; 

	}

	/**
	 * The method to check if the user has modified the given key
	 * @param string $key A string
	 * @return int A int representing the modification
	 */
	public function isKeyModified(string $key)
	{
		if(((array_key_exists($key, $this->keyModified))))
		{
			return $this->keyModified[$key]; 

		}
		return null; 

	}

	/**
	 * The method to mark the given key as modified
	 * @param string $key A string
	 * @param int $modification A int
	 */
	public function setKeyModified(string $key, int $modification)
	{
		$this->keyModified[$key] = $modification; 

	}
} 
