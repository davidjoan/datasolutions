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
      'active'       => array('combo', array('choices' => array_keys($this->getTable()->getStatuss()))),
      'created_at'   => '-',
      'updated_at'   => '-'
    );
    
    $this->embedI18n(array('en', 'es'));
    $this->widgetSchema->setLabel('en', 'English');
    $this->widgetSchema->setLabel('es', 'Spanish');
  }
}
