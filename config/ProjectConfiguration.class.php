<?php

//require_once '/home/datasolu/symfony/lib/autoload/sfCoreAutoload.class.php';
require_once(dirname(__FILE__).'/../lib/vendor/symfony/lib/autoload/sfCoreAutoload.class.php');
sfCoreAutoload::register();
require_once(dirname(__FILE__).'/../plugins/symfextPlugin/config/sfProjectConfigurationExt.class.php');

class ProjectConfiguration extends sfProjectConfigurationExt
{
  protected function getActivePlugins()
  {
    return array
           (
             'sfFormExtraPlugin',
             'sfImageTransformPlugin',
             'sfMediaBrowserPlugin',
             'sfDoctrinePlugin',
             'symfextPlugin'
           );
  }
  
  protected function setConfigVariables()
  {
  
    parent::setConfigVariables();
	
	$this->setWebDir($this->getRootDir().'/public_html');
	
    
    sfConfig::set('site_name', 'Data Solutions');
    
    $this->setConfigDirPathVariable('application_images' , sfConfig::get('sf_upload_dir').DIRECTORY_SEPARATOR.'application_images' );
    $this->setConfigDirPathVariable('team_images'        , sfConfig::get('sf_upload_dir').DIRECTORY_SEPARATOR.'team_images' );
    $this->setConfigDirPathVariable('service_images'     , sfConfig::get('sf_upload_dir').DIRECTORY_SEPARATOR.'service_images' );
    
  }
}