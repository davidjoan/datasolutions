<?php

/**
 * News
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @package    datasol
 * @subpackage model
 * @author     David Joan Tataje Mendoza <dtataje@datasolutions.pe>
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
class News extends BaseNews
{
	
  public function getSlug()
  {
    return $this->getId();
  }	
  
  public function getFormattedDatetime($format = 'D')
  {
    return $this->getTable()->getDateTimeFormatter()->format($this->getCreatedAt(), $format);
  }
}