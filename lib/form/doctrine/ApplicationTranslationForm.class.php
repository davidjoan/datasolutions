<?php

/**
 * ApplicationTranslation form.
 *
 * @package    datasol
 * @subpackage form
 * @author     David Joan Tataje Mendoza <dtataje@datasolutions.pe>
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class ApplicationTranslationForm extends BaseApplicationTranslationForm
{
  public function initialize()
  {
    $this->labels = array
    (
      'description' => 'Descripci&oacute;n',
      'meta_description' => 'Meta Descripci&oacute;n',
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
                                )),
      'meta_description'    => new sfWidgetFormTextarea()
  	));
     
    $this->types = array
    (
      'id'           => '=',
      'description'  => '=',
      'meta_description' => 'text',
      'created_at'   => '-',
      'updated_at'   => '-',
    );
  }
}
