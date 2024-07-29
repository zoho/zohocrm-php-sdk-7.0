<?php 
namespace com\zoho\crm\api\usersterritories;

use com\zoho\crm\api\util\Model;

class ValidationWrapper implements Model, ValidationHandler
{

	private  $validateBeforeTransfer;
	private  $keyModified=array();

	/**
	 * The method to get the validateBeforeTransfer
	 * @return array A array representing the validateBeforeTransfer
	 */
	public function getValidateBeforeTransfer()
	{
		return $this->validateBeforeTransfer; 

	}

	/**
	 * The method to set the value to validateBeforeTransfer
	 * @param array $validateBeforeTransfer A array
	 */
	public function setValidateBeforeTransfer(array $validateBeforeTransfer)
	{
		$this->validateBeforeTransfer=$validateBeforeTransfer; 
		$this->keyModified['validate_before_transfer'] = 1; 

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
