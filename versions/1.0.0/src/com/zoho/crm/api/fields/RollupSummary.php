<?php 
namespace com\zoho\crm\api\fields;

use com\zoho\crm\api\util\Model;

class RollupSummary implements Model
{

	private  $returnType;
	private  $expression;
	private  $basedOnModule;
	private  $relatedList;
	private  $rollupBasedOn;
	private  $keyModified=array();

	/**
	 * The method to get the returnType
	 * @return string A string representing the returnType
	 */
	public function getReturnType()
	{
		return $this->returnType; 

	}

	/**
	 * The method to set the value to returnType
	 * @param string $returnType A string
	 */
	public function setReturnType(string $returnType)
	{
		$this->returnType=$returnType; 
		$this->keyModified['return_type'] = 1; 

	}

	/**
	 * The method to get the expression
	 * @return Expression An instance of Expression
	 */
	public function getExpression()
	{
		return $this->expression; 

	}

	/**
	 * The method to set the value to expression
	 * @param Expression $expression An instance of Expression
	 */
	public function setExpression(Expression $expression)
	{
		$this->expression=$expression; 
		$this->keyModified['expression'] = 1; 

	}

	/**
	 * The method to get the basedOnModule
	 * @return MinifiedField An instance of MinifiedField
	 */
	public function getBasedOnModule()
	{
		return $this->basedOnModule; 

	}

	/**
	 * The method to set the value to basedOnModule
	 * @param MinifiedField $basedOnModule An instance of MinifiedField
	 */
	public function setBasedOnModule(MinifiedField $basedOnModule)
	{
		$this->basedOnModule=$basedOnModule; 
		$this->keyModified['based_on_module'] = 1; 

	}

	/**
	 * The method to get the relatedList
	 * @return MinifiedField An instance of MinifiedField
	 */
	public function getRelatedList()
	{
		return $this->relatedList; 

	}

	/**
	 * The method to set the value to relatedList
	 * @param MinifiedField $relatedList An instance of MinifiedField
	 */
	public function setRelatedList(MinifiedField $relatedList)
	{
		$this->relatedList=$relatedList; 
		$this->keyModified['related_list'] = 1; 

	}

	/**
	 * The method to get the rollupBasedOn
	 * @return string A string representing the rollupBasedOn
	 */
	public function getRollupBasedOn()
	{
		return $this->rollupBasedOn; 

	}

	/**
	 * The method to set the value to rollupBasedOn
	 * @param string $rollupBasedOn A string
	 */
	public function setRollupBasedOn(string $rollupBasedOn)
	{
		$this->rollupBasedOn=$rollupBasedOn; 
		$this->keyModified['rollup_based_on'] = 1; 

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
