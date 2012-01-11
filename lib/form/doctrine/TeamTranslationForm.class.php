<?php

/**
 * TeamTranslation form.
 *
 * @package    datasol
 * @subpackage form
 * @author     David Joan Tataje Mendoza <dtataje@datasolutions.pe>
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class TeamTranslationForm extends BaseTeamTranslationForm
{
  public function initialize()
  {
    $this->labels = array
    (
      'description' => 'Descripci&oacute;n'
    );
  }
  
  public function configure()
  {
     $this->setWidgets(array
    (
      'id'                   => new sfWidgetFormInputHidden(),
      'description'          => new sfWidgetFormTextareaTinyMCE(array
                                (
                                  'width'            => 450,
                                  'height'           => 250,
                                  'config'           => 'theme_advanced_disable: "anchor,cleanup,help"',
                                ))
  	));
     
    $this->types = array
    (
      'id'           => '=',
      'description'  => '=',
      'slug'         => '-',
    );
  }
}
