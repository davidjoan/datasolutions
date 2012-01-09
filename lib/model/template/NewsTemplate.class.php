<?php

/**
 * NewsTemplate
 *
 * @package    datasol
 * @subpackage model
 * @author     David Joan Tataje Mendoza <dtataje@datasolutions.pe>
 */
class NewsTemplate extends DoctrineTemplate
{
  public function getDisableImage()
  {
    $image  = 'backend/';
  	$image .= $this->isActive() ? 'user_active.gif' : 'user_inactive.gif';
  	
    return image_tag($image, array('title' => $this->getActiveName()));
  }
}
