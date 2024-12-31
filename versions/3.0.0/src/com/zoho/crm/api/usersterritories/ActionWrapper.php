<?php 
namespace com\zoho\crm\api\usersterritories;

use com\zoho\crm\api\util\Model;

class ActionWrapper implements Model, ActionHandler
{

	private  $transferAndDelink;
	private  $keyModified=array();
	private  $territories;

	/**
	 * The method to get the transferAndDelink
	 * @return array A array representing the transferAndDelink
	 */
	public function getTransferAndDelink()
	{
		return $this->transferAndDelink; 

	}

	/**
	 * The method to set the value to transferAndDelink
	 * @param array $transferAndDelink A array
	 */
	public function setTransferAndDelink(array $transferAndDelink)
	{
		$this->transferAndDelink=$transferAndDelink; 
		$this->keyModified['transfer_and_delink'] = 1; 

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
} 
