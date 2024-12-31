<?php 
namespace com\zoho\crm\api\emaildrafts;

use com\zoho\crm\api\util\Model;

class ResponseWrapper implements Model
{

	private  $emaildrafts;
	private  $keyModified=array();

	/**
	 * The method to get the emaildrafts
	 * @return array A array representing the emaildrafts
	 */
	public function getEmaildrafts()
	{
		return $this->emaildrafts; 

	}

	/**
	 * The method to set the value to emaildrafts
	 * @param array $emaildrafts A array
	 */
	public function setEmaildrafts(array $emaildrafts)
	{
		$this->emaildrafts=$emaildrafts; 
		$this->keyModified['__email_drafts'] = 1; 

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
