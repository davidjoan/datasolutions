<?php

/**
 * Application
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @package    datasol
 * @subpackage model
 * @author     David Joan Tataje Mendoza <dtataje@datasolutions.pe>
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
class Application extends BaseApplication
{
  public function save(Doctrine_Connection $conn = null)
  {
    if($this->isNew())
    {
    	$this->setNewRank();
    }
    $this->createThumbnail('image',289,289 );
    $this->createThumbnail('image',646,416 );        
    parent::save($conn);
    
  }
  
  public function generateImageFilename($file)
  {
  	return Stringkit::fixFilename($file->getOriginalName()).'_'.rand(11111, 99999).$file->getOriginalExtension();
  }  
  
  public function getDescription()
  {
  	return $this->Translation[sfContext::getInstance()->getUser()->getCulture()]->description;
  }

  public function getMetaDescription()
  {
  	return $this->Translation[sfContext::getInstance()->getUser()->getCulture()]->meta_description;
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