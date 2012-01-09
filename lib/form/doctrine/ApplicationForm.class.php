<?php

/**
 * Application form.
 *
 * @package    datasol
 * @subpackage form
 * @author     David Joan Tataje Mendoza <dtataje@datasolutions.pe>
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class ApplicationForm extends BaseApplicationForm
{
    
  public function initialize()
  {
    $this->labels = array
    (
      'name'        => 'Nombre',
      'description' => 'Descripci&oacute;n',
      'image'       => 'Imagen',
      'url'         => 'Url',
      'active'      => 'Activo'
    );
  }
  
  
  public function configure()
  {
     $this->setWidgets(array
    (
      'id'                   => new sfWidgetFormInputHidden(),
      'name'                 => new sfWidgetFormInputText(array(), array('size' => 60)),
      'description'          => new sfWidgetFormTextareaTinyMCE(array
                                (
                                  'width'            => 450,
                                  'height'           => 250,
                                  'config'           => 'theme_advanced_disable: "anchor,cleanup,help"',
                                )),
      'image'                => new sfWidgetFormInputFileEditable
                                (
                                  array
                                  (
                                    'file_src'     => $this->object->getImage(),
                                    'with_delete'  => false,
                                    'template'     => sprintf
                                                      (
                                                        '<a class="file_link" href="%s/%%file%%" target="BLANK">%%file%%</a><br />%%input%%<br />%%delete%% %%delete_label%%', 
                                                        sfConfig::get('app_application_images_path')
                                                      )
                                  ),
                                  array('size'         => '60')
                                ),
     'url'                  => new sfWidgetFormInputText(array(), array('size' => 30)),         
     'active'               => new sfWidgetFormChoice(array
                                (
                                  'choices'          => $this->getTable()->getStatuss(),
                                  'expanded'         => true,
                                  'renderer_options' => array('formatter' => array($this->widgetFormatter, 'radioFormatter'))
                                ))
  	));
     
       $this->addValidators(array
    (
      'image'                 => new sfValidatorFile(array
                                (
                                  'required'   => false,
                                  'path'       => sfConfig::get('app_application_images_dir').'/'
                                ))
    ));
     
    $this->types = array
    (
      'id'           => '=',
      'description'  => 'pass',
      'name'         => 'text',
      'image'        => 'file',
      'url'          => 'url',
      'active'       => array('combo', array('choices' => array_keys($this->getTable()->getStatuss()))),
      'created_at'   => '-',
      'updated_at'   => '-',
      'slug'         => '-',
    );
  }
}
