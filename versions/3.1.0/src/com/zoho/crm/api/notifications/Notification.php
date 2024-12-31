<?php 
namespace com\zoho\crm\api\notifications;

use com\zoho\crm\api\util\Choice;
use com\zoho\crm\api\util\Model;

class Notification extends Event implements Model
{

	private  $channelId;
	private  $notifyUrl;
	private  $events;
	private  $token;
	private  $fields;
	private  $notifyOnRelatedAction;
	private  $returnAffectedFieldValues;
	private  $deleteevents;
	private  $resourceName;
	private  $channelExpiry;
	private  $resourceId;
	private  $resourceUri;
	private  $notificationCondition;
	private  $keyModified=array();

	/**
	 * The method to get the channelId
	 * @return string A string representing the channelId
	 */
	public function getChannelId()
	{
		return $this->channelId; 

	}

	/**
	 * The method to set the value to channelId
	 * @param string $channelId A string
	 */
	public function setChannelId(string $channelId)
	{
		$this->channelId=$channelId; 
		$this->keyModified['channel_id'] = 1; 

	}

	/**
	 * The method to get the notifyUrl
	 * @return string A string representing the notifyUrl
	 */
	public function getNotifyUrl()
	{
		return $this->notifyUrl; 

	}

	/**
	 * The method to set the value to notifyUrl
	 * @param string $notifyUrl A string
	 */
	public function setNotifyUrl(string $notifyUrl)
	{
		$this->notifyUrl=$notifyUrl; 
		$this->keyModified['notify_url'] = 1; 

	}

	/**
	 * The method to get the events
	 * @return array A array representing the events
	 */
	public function getEvents()
	{
		return $this->events; 

	}

	/**
	 * The method to set the value to events
	 * @param array $events A array
	 */
	public function setEvents(array $events)
	{
		$this->events=$events; 
		$this->keyModified['events'] = 1; 

	}

	/**
	 * The method to get the token
	 * @return string A string representing the token
	 */
	public function getToken()
	{
		return $this->token; 

	}

	/**
	 * The method to set the value to token
	 * @param string $token A string
	 */
	public function setToken(string $token)
	{
		$this->token=$token; 
		$this->keyModified['token'] = 1; 

	}

	/**
	 * The method to get the fields
	 * @return array A array representing the fields
	 */
	public function getFields()
	{
		return $this->fields; 

	}

	/**
	 * The method to set the value to fields
	 * @param array $fields A array
	 */
	public function setFields(array $fields)
	{
		$this->fields=$fields; 
		$this->keyModified['fields'] = 1; 

	}

	/**
	 * The method to get the notifyOnRelatedAction
	 * @return bool A bool representing the notifyOnRelatedAction
	 */
	public function getNotifyOnRelatedAction()
	{
		return $this->notifyOnRelatedAction; 

	}

	/**
	 * The method to set the value to notifyOnRelatedAction
	 * @param bool $notifyOnRelatedAction A bool
	 */
	public function setNotifyOnRelatedAction(bool $notifyOnRelatedAction)
	{
		$this->notifyOnRelatedAction=$notifyOnRelatedAction; 
		$this->keyModified['notify_on_related_action'] = 1; 

	}

	/**
	 * The method to get the returnAffectedFieldValues
	 * @return bool A bool representing the returnAffectedFieldValues
	 */
	public function getReturnAffectedFieldValues()
	{
		return $this->returnAffectedFieldValues; 

	}

	/**
	 * The method to set the value to returnAffectedFieldValues
	 * @param bool $returnAffectedFieldValues A bool
	 */
	public function setReturnAffectedFieldValues(bool $returnAffectedFieldValues)
	{
		$this->returnAffectedFieldValues=$returnAffectedFieldValues; 
		$this->keyModified['return_affected_field_values'] = 1; 

	}

	/**
	 * The method to get the deleteevents
	 * @return Choice An instance of Choice
	 */
	public function getDeleteevents()
	{
		return $this->deleteevents; 

	}

	/**
	 * The method to set the value to deleteevents
	 * @param Choice $deleteevents An instance of Choice
	 */
	public function setDeleteevents(Choice $deleteevents)
	{
		$this->deleteevents=$deleteevents; 
		$this->keyModified['_delete_events'] = 1; 

	}

	/**
	 * The method to get the resourceName
	 * @return string A string representing the resourceName
	 */
	public function getResourceName()
	{
		return $this->resourceName; 

	}

	/**
	 * The method to set the value to resourceName
	 * @param string $resourceName A string
	 */
	public function setResourceName(string $resourceName)
	{
		$this->resourceName=$resourceName; 
		$this->keyModified['resource_name'] = 1; 

	}

	/**
	 * The method to get the channelExpiry
	 * @return \DateTime An instance of \DateTime
	 */
	public function getChannelExpiry()
	{
		return $this->channelExpiry; 

	}

	/**
	 * The method to set the value to channelExpiry
	 * @param \DateTime $channelExpiry An instance of \DateTime
	 */
	public function setChannelExpiry(\DateTime $channelExpiry)
	{
		$this->channelExpiry=$channelExpiry; 
		$this->keyModified['channel_expiry'] = 1; 

	}

	/**
	 * The method to get the resourceId
	 * @return string A string representing the resourceId
	 */
	public function getResourceId()
	{
		return $this->resourceId; 

	}

	/**
	 * The method to set the value to resourceId
	 * @param string $resourceId A string
	 */
	public function setResourceId(string $resourceId)
	{
		$this->resourceId=$resourceId; 
		$this->keyModified['resource_id'] = 1; 

	}

	/**
	 * The method to get the resourceUri
	 * @return string A string representing the resourceUri
	 */
	public function getResourceUri()
	{
		return $this->resourceUri; 

	}

	/**
	 * The method to set the value to resourceUri
	 * @param string $resourceUri A string
	 */
	public function setResourceUri(string $resourceUri)
	{
		$this->resourceUri=$resourceUri; 
		$this->keyModified['resource_uri'] = 1; 

	}

	/**
	 * The method to get the notificationCondition
	 * @return array A array representing the notificationCondition
	 */
	public function getNotificationCondition()
	{
		return $this->notificationCondition; 

	}

	/**
	 * The method to set the value to notificationCondition
	 * @param array $notificationCondition A array
	 */
	public function setNotificationCondition(array $notificationCondition)
	{
		$this->notificationCondition=$notificationCondition; 
		$this->keyModified['notification_condition'] = 1; 

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
