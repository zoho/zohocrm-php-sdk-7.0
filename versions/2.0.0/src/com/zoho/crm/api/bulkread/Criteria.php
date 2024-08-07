<?php 
namespace com\zoho\crm\api\bulkread;

use com\zoho\crm\api\fields\MinifiedField;
use com\zoho\crm\api\util\Choice;
use com\zoho\crm\api\util\Model;

class Criteria implements Model
{

	private  $type;
	private  $apiName;
	private  $value;
	private  $groupOperator;
	private  $group;
	private  $field;
	private  $comparator;
	private  $keyModified=array();

	/**
	 * The method to get the type
	 * @return string A string representing the type
	 */
	public function getType()
	{
		return $this->type; 

	}

	/**
	 * The method to set the value to type
	 * @param string $type A string
	 */
	public function setType(string $type)
	{
		$this->type=$type; 
		$this->keyModified['type'] = 1; 

	}

	/**
	 * The method to get the aPIName
	 * @return string A string representing the apiName
	 */
	public function getAPIName()
	{
		return $this->apiName; 

	}

	/**
	 * The method to set the value to aPIName
	 * @param string $apiName A string
	 */
	public function setAPIName(string $apiName)
	{
		$this->apiName=$apiName; 
		$this->keyModified['api_name'] = 1; 

	}

	/**
	 * The method to get the value
	 */
	public function getValue()
	{
		return $this->value; 

	}

	/**
	 * The method to set the value to value
	 * @param 
	 */
	public function setValue( $value)
	{
		$this->value=$value; 
		$this->keyModified['value'] = 1; 

	}

	/**
	 * The method to get the groupOperator
	 * @return Choice An instance of Choice
	 */
	public function getGroupOperator()
	{
		return $this->groupOperator; 

	}

	/**
	 * The method to set the value to groupOperator
	 * @param Choice $groupOperator An instance of Choice
	 */
	public function setGroupOperator(Choice $groupOperator)
	{
		$this->groupOperator=$groupOperator; 
		$this->keyModified['group_operator'] = 1; 

	}

	/**
	 * The method to get the group
	 * @return array A array representing the group
	 */
	public function getGroup()
	{
		return $this->group; 

	}

	/**
	 * The method to set the value to group
	 * @param array $group A array
	 */
	public function setGroup(array $group)
	{
		$this->group=$group; 
		$this->keyModified['group'] = 1; 

	}

	/**
	 * The method to get the field
	 * @return MinifiedField An instance of MinifiedField
	 */
	public function getField()
	{
		return $this->field; 

	}

	/**
	 * The method to set the value to field
	 * @param MinifiedField $field An instance of MinifiedField
	 */
	public function setField(MinifiedField $field)
	{
		$this->field=$field; 
		$this->keyModified['field'] = 1; 

	}

	/**
	 * The method to get the comparator
	 * @return Choice An instance of Choice
	 */
	public function getComparator()
	{
		return $this->comparator; 

	}

	/**
	 * The method to set the value to comparator
	 * @param Choice $comparator An instance of Choice
	 */
	public function setComparator(Choice $comparator)
	{
		$this->comparator=$comparator; 
		$this->keyModified['comparator'] = 1; 

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
