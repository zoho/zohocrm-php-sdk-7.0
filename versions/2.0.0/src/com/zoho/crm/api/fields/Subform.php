<?php 
namespace com\zoho\crm\api\fields;

use com\zoho\crm\api\util\Model;

class Subform implements Model
{

	private  $module;
	private  $id;
	private  $keyModified=array();

	/**
	 * The method to get the module
	 * @return string A string representing the module
	 */
	public function getModule()
	{
		return $this->module; 

	}

	/**
	 * The method to set the value to module
	 * @param string $module A string
	 */
	public function setModule(string $module)
	{
		$this->module=$module; 
		$this->keyModified['module'] = 1; 

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
