<?php 
namespace com\zoho\crm\api\layouts;

use com\zoho\crm\api\util\Model;

class ActionsAllowed implements Model
{

	private  $edit;
	private  $rename;
	private  $clone;
	private  $downgrade;
	private  $delete;
	private  $deactivate;
	private  $setLayoutPermissions;
	private  $keyModified=array();

	/**
	 * The method to get the edit
	 * @return bool A bool representing the edit
	 */
	public function getEdit()
	{
		return $this->edit; 

	}

	/**
	 * The method to set the value to edit
	 * @param bool $edit A bool
	 */
	public function setEdit(bool $edit)
	{
		$this->edit=$edit; 
		$this->keyModified['edit'] = 1; 

	}

	/**
	 * The method to get the rename
	 * @return bool A bool representing the rename
	 */
	public function getRename()
	{
		return $this->rename; 

	}

	/**
	 * The method to set the value to rename
	 * @param bool $rename A bool
	 */
	public function setRename(bool $rename)
	{
		$this->rename=$rename; 
		$this->keyModified['rename'] = 1; 

	}

	/**
	 * The method to get the clone
	 * @return bool A bool representing the clone
	 */
	public function getClone()
	{
		return $this->clone; 

	}

	/**
	 * The method to set the value to clone
	 * @param bool $clone A bool
	 */
	public function setClone(bool $clone)
	{
		$this->clone=$clone; 
		$this->keyModified['clone'] = 1; 

	}

	/**
	 * The method to get the downgrade
	 * @return bool A bool representing the downgrade
	 */
	public function getDowngrade()
	{
		return $this->downgrade; 

	}

	/**
	 * The method to set the value to downgrade
	 * @param bool $downgrade A bool
	 */
	public function setDowngrade(bool $downgrade)
	{
		$this->downgrade=$downgrade; 
		$this->keyModified['downgrade'] = 1; 

	}

	/**
	 * The method to get the delete
	 * @return bool A bool representing the delete
	 */
	public function getDelete()
	{
		return $this->delete; 

	}

	/**
	 * The method to set the value to delete
	 * @param bool $delete A bool
	 */
	public function setDelete(bool $delete)
	{
		$this->delete=$delete; 
		$this->keyModified['delete'] = 1; 

	}

	/**
	 * The method to get the deactivate
	 * @return bool A bool representing the deactivate
	 */
	public function getDeactivate()
	{
		return $this->deactivate; 

	}

	/**
	 * The method to set the value to deactivate
	 * @param bool $deactivate A bool
	 */
	public function setDeactivate(bool $deactivate)
	{
		$this->deactivate=$deactivate; 
		$this->keyModified['deactivate'] = 1; 

	}

	/**
	 * The method to get the setLayoutPermissions
	 * @return bool A bool representing the setLayoutPermissions
	 */
	public function getSetLayoutPermissions()
	{
		return $this->setLayoutPermissions; 

	}

	/**
	 * The method to set the value to setLayoutPermissions
	 * @param bool $setLayoutPermissions A bool
	 */
	public function setSetLayoutPermissions(bool $setLayoutPermissions)
	{
		$this->setLayoutPermissions=$setLayoutPermissions; 
		$this->keyModified['set_layout_permissions'] = 1; 

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
