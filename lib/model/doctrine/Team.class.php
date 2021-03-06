<?php

/**
 * Team
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @package    datasol
 * @subpackage model
 * @author     David Joan Tataje Mendoza <dtataje@datasolutions.pe>
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
class Team extends BaseTeam
{
	public function save(Doctrine_Connection $conn = null)
	{
		if($this->isNew())
		{
			$this->setNewRank();
		}
		parent::save($conn);
	
	}
	
	public function getSlug()
	{
		return $this->_get('id');
	}
	
	public function getDescription()
	{
		return $this->Translation[sfContext::getInstance()->getUser()->getCulture()]->description;
	}
	
	public function setNewRank()
	{
		$rank = $this->getTable()->getNewRank();
		$this->setRank($rank);
	}
	
	
	public function getFormattedDatetime($format = 'D')
	{
		return $this->getTable()->getDateTimeFormatter()->format($this->getCreatedAt(), $format);
	}
}