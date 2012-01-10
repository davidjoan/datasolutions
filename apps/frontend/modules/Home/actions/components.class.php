<?php

/**
 * Home components.
 *
 * @package    symfext
 * @subpackage Crud
 * @author     David Joan Tataje Mendoza <new.skin007@gmail.com>
 */
class HomeComponents extends ComponentsProject
{

   public function executeChangeLanguage($request)
   {
   	$this->form = new sfFormLanguage($this->getUser(), array('languages' => array('en', 'es')));
   }

}
