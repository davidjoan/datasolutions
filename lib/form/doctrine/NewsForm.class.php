<?php

/**
 * News form.
 *
 * @package    datasol
 * @subpackage form
 * @author     David Joan Tataje Mendoza <dtataje@datasolutions.pe>
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class NewsForm extends BaseNewsForm
{
 public function initialize()
  {
    $this->labels = array
    (
      'title'       => 'Titulo',
      'description' => 'Descripci&oacute;n',
      'active'      => 'Activo'
    );
  }
  
  public function configure()
  {
    $this->setWidgets(array
    (
      'id'                   => new sfWidgetFormInputHidden(),
      'title'                => new sfWidgetFormInputText(array(), array('size' => 60)),
      'description'          => new sfWidgetFormTextareaTinyMCE(array
                                (
                                  'width'            => 450,
                                  'height'           => 250,
                                  'config'           => 'theme_advanced_disable: "anchor,cleanup,help"',
                                )),
     'active'               => new sfWidgetFormChoice(array
                                (
                                  'choices'          => $this->getTable()->getStatuss(),
                                  'expanded'         => true,
                                  'renderer_options' => array('formatter' => array($this->widgetFormatter, 'radioFormatter'))
                                ))
  	));
    
    
    $this->types = array
    (
      'id'           => '=',
      'description'  => '=',
      'title'          => 'text',
      'active'       => array('combo', array('choices' => array_keys($this->getTable()->getStatuss()))),
      'created_at'   => '-',
      'updated_at'   => '-',
      'slug'         => '-',
    );
  }
}
