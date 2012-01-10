<?php

/**
 * NewsTranslation form.
 *
 * @package    datasol
 * @subpackage form
 * @author     David Joan Tataje Mendoza <dtataje@datasolutions.pe>
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class NewsTranslationForm extends BaseNewsTranslationForm
{
 public function initialize()
  {
    $this->labels = array
    (
      'title'       => 'Titulo',
      'description' => 'Descripci&oacute;n'
    );
  }
  
  public function configure()
  {
    $this->setWidgets(array
    (
     // 'id'                   => new sfWidgetFormInputHidden(),
      'title'                => new sfWidgetFormInputText(array(), array('size' => 60)),
      'description'          => new sfWidgetFormTextareaTinyMCE(array
                                (
                                  'width'            => 450,
                                  'height'           => 250,
                                  'config'           => 'theme_advanced_disable: "anchor,cleanup,help"',
                                ))
  	));
    
    
    $this->types = array
    (
      'id'           => '-',
      'description'  => '=',
      'title'        => 'text',
      'slug'         => '='
    );
  }
	
}
