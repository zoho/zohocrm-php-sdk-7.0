<?php 
namespace com\zoho\crm\api\scoringrules;

use com\zoho\crm\api\util\Model;

class RoleRequestWrapper implements Model
{

	private  $scoringRules;
	private  $keyModified=array();

	/**
	 * The method to get the scoringRules
	 * @return array A array representing the scoringRules
	 */
	public function getScoringRules()
	{
		return $this->scoringRules; 

	}

	/**
	 * The method to set the value to scoringRules
	 * @param array $scoringRules A array
	 */
	public function setScoringRules(array $scoringRules)
	{
		$this->scoringRules=$scoringRules; 
		$this->keyModified['scoring_rules'] = 1; 

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
