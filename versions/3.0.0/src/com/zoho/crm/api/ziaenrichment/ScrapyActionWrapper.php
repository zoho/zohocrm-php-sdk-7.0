<?php 
namespace com\zoho\crm\api\ziaenrichment;

use com\zoho\crm\api\util\Model;

class ScrapyActionWrapper implements Model
{

	private  $scrapyFeedback;
	private  $keyModified=array();

	/**
	 * The method to get the scrapyFeedback
	 * @return ScrapyActionResponse An instance of ScrapyActionResponse
	 */
	public function getScrapyFeedback()
	{
		return $this->scrapyFeedback; 

	}

	/**
	 * The method to set the value to scrapyFeedback
	 * @param ScrapyActionResponse $scrapyFeedback An instance of ScrapyActionResponse
	 */
	public function setScrapyFeedback(ScrapyActionResponse $scrapyFeedback)
	{
		$this->scrapyFeedback=$scrapyFeedback; 
		$this->keyModified['scrapy_feedback'] = 1; 

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
