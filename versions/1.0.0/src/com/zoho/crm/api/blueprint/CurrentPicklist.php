<?php 
namespace com\zoho\crm\api\blueprint;

use com\zoho\crm\api\util\Model;

class CurrentPicklist implements Model
{

	private  $colourCode;
	private  $id;
	private  $value;
	private  $keyModified=array();

	/**
	 * The method to get the colourCode
	 * @return string A string representing the colourCode
	 */
	public function getColourCode()
	{
		return $this->colourCode; 

	}

	/**
	 * The method to set the value to colourCode
	 * @param string $colourCode A string
	 */
	public function setColourCode(string $colourCode)
	{
		$this->colourCode=$colourCode; 
		$this->keyModified['colour_code'] = 1; 

	}

	/**
	 * The method to get the id
	 * @return string A string representing the id
	 */
	public function getId()
	{
		return $this->id; 

	}

	/**
	 * The method to set the value to id
	 * @param string $id A string
	 */
	public function setId(string $id)
	{
		$this->id=$id; 
		$this->keyModified['id'] = 1; 

	}

	/**
	 * The method to get the value
	 * @return string A string representing the value
	 */
	public function getValue()
	{
		return $this->value; 

	}

	/**
	 * The method to set the value to value
	 * @param string $value A string
	 */
	public function setValue(string $value)
	{
		$this->value=$value; 
		$this->keyModified['value'] = 1; 

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
