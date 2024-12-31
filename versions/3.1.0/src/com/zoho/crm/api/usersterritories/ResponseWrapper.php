<?php 
namespace com\zoho\crm\api\usersterritories;

use com\zoho\crm\api\util\Model;

class ResponseWrapper implements Model, ResponseHandler
{

	private  $territories;
	private  $info;
	private  $keyModified=array();

	/**
	 * The method to get the territories
	 * @return array A array representing the territories
	 */
	public function getTerritories()
	{
		return $this->territories; 

	}

	/**
	 * The method to set the value to territories
	 * @param array $territories A array
	 */
	public function setTerritories(array $territories)
	{
		$this->territories=$territories; 
		$this->keyModified['territories'] = 1; 

	}

	/**
	 * The method to get the info
	 * @return Info An instance of Info
	 */
	public function getInfo()
	{
		return $this->info; 

	}

	/**
	 * The method to set the value to info
	 * @param Info $info An instance of Info
	 */
	public function setInfo(Info $info)
	{
		$this->info=$info; 
		$this->keyModified['info'] = 1; 

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
