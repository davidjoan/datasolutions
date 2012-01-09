<?php

/**
 * General components.
 *
 * @package    datasol
 * @subpackage General
 * @author     David Joan Tataje Mendoza <dtataje@datasolutions.pe>
 */
class GeneralComponents extends ComponentsProject
{
  public function executeGalery()
  {
    $this->applications = Doctrine::getTable('Application')->findApplications();
  }

  public function executeNews()
  {
    $this->news = Doctrine::getTable('News')->findNews();
  }
}
