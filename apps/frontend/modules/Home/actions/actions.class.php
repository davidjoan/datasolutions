<?php

/**
 * Home actions.
 *
 * @package    datasol
 * @subpackage Home
 * @author     David Joan Tataje Mendoza <dtataje@datasolutions.pe>
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class HomeActions extends ActionsProject
{

  public function executeIndex(sfWebRequest $request)
  {
    if($this->getUser()->getCulture() == 'es')
  	{
  		$this->getResponse()->setTitle('DATA Solutions | Inicio');
  		$this->getResponse()->addMeta('description', 'Data solutions es una empresa peruana dedicado al desarrollo de aplicaciones WEB 2.0');
  	}
  	else
  	{
  		$this->getResponse()->setTitle('DATA Solutions | Welcome');
  		$this->getResponse()->addMeta('description', 'Data Solutions is a Peruvian company dedicated to developing Web 2.0 applications');
  	}
    Doctrine::getTable('Visit')->createAndSave($request->getPathInfoArray());
  }

  public function executeNosotros(sfWebRequest $request)
  {
  	
  	if($this->getUser()->getCulture() == 'es')
  	{
  		$this->getResponse()->setTitle('DATA Solutions | Nosotros');
  		$this->getResponse()->addMeta('description', 'DATA solutions no sÃ³lo es una de las mejores empresa de desarrollo web a nivel mundial, te ofrecemos soluciones Ãºnicas, creativas y modernas para todo lo que quieres expresar.');  		
  	}
  	else
  	{
  		$this->getResponse()->setTitle('DATA Solutions | About Us');
  		$this->getResponse()->addMeta('description', 'Data Solutions Not only is it one of the best web development company worldwide, we offer solutions to second techniques, creative and modern for all what you mean.');
  	}

    $this->team = Doctrine::getTable('Team')->findTeam();
      
  }

  public function executeServicios(sfWebRequest $request)
  {
  	if($this->getUser()->getCulture() == 'es')
  	{
  	  $this->getResponse()->setTitle('DATA Solutions | Servicios');
  	  $this->getResponse()->addMeta('description', 'El desarrollo del internet y la interacción de los usuarios con el entorno web a impulsado a la creación del sistema web 2.0 por su economicidad, por su configurabilidad y además porque el contenido esta disponible desde cualquier máquina local o del mundo.');
  	}
  	else
  	{
  	  $this->getResponse()->setTitle('DATA Solutions | Services');
  	  $this->getResponse()->addMeta('description', 'The development of the Internet and how users interact with the web environment prompted the establishment of web 2.0 for its cheapness, for its configurability and also because the content is available from any local machine or the world.');
  	}
  	
  	$this->services = Doctrine::getTable('Service')->findServices();
  }  
  
  public function executeProyectos(sfWebRequest $request)
  {
  	
  	if($this->getUser()->getCulture() == 'es')
  	{
  		$title = 'DATA Solutions | Proyectos';
  		$description = 'Estos son los ultimos proyectos desarrollados por data solutions seleccione para conocer mas acerca de cada uno de nuestras soluciones.';
  	}
  	else
  	{
  		$title = 'DATA Solutions | Projects';
  		$description = 'These are the latest developments select Data Solutions to learn more about each of our solutions.';  		

  	}  	
    
    $this->slug = $request->getParameter('slug');
    if($this->slug <> '')
    {
      $this->application = Doctrine::getTable('Application')->findOneBySlug($this->slug);
      $title .=' | '.$this->application->getName();
      $description = $this->application->getMetaDescription();
      $this->forward404Unless($this->application);
    }
    $this->getResponse()->setTitle($title);
    $this->getResponse()->addMeta('description', $description);
    $this->applications = Doctrine::getTable('Application')->findApplications();
  }

  public function executeContactenos(sfWebRequest $request)
  {
    $this->response->setTitle('DATA Solutions | Contactenos');
    $this->getResponse()->addMeta('description', 'Contactanenos por Telefono:+551 3926855 Ã³ Correo:contact@datasolutions.pe');
    
    $this->form = new ContactForm();
    
    if($request->isMethod('post')):

          $this->form->bind($request->getParameter('contact'));
        
          if($this->form->isValid()):
   
             if($this->form->getValue('captcha') == $this->getUser()->getAttribute('security_code')):
             $mensage = Swift_Message::newInstance()
		  ->setFrom($this->form->getValue('email'))
                  ->setTo(sfConfig::get('app_contact_form_email'))
		  ->setSubject($this->form->getValue('subject'))
		  ->setBody($this->getPartial('send'), 'text/html');
 
             $this->getMailer()->send($mensage); //enable in production

             $this->getUser()->setFlash('notice', sfConfig::get('app_contact_form_notice'));
             $this->redirect('@contactenos');
             else:
             $this->getUser()->setFlash('error', sfConfig::get('app_contact_form_captcha'));     
             endif;
          else:
             $this->getUser()->setFlash('error', sfConfig::get('app_contact_form_error'));
          endif;
      endif;
  }  
  
  public function executeSitemap(sfWebRequest $request)
  {  
    $this->response->setTitle('DATA Solutions | Sitemap');
    $this->getResponse()->addMeta('description', 'Sitemap DATA solutions, todos nuestros enlaces para una mejor navegaciÃ³n en este sitio.');
    $this->applications = Doctrine::getTable('Application')->findApplications();
  }  
  
  public function executeMensaje(sfWebRequest $request)
  {
  }  
  
   public function executeImage()
   {
    sfConfig::set('sf_web_debug', false);
    $font = sfConfig::get('sf_web_dir').'/images/general/monofont.ttf';
    $width = 100;
    $height = 40;
    $characters = 6;
    $possible = '23456789bcdfghjkmnpqrstvwxyz';
    $font_size = $height * 0.75;
    $code = '';
    $i = 0;
    while ($i < $characters) { 
	$code .= substr($possible, mt_rand(0, strlen($possible)-1), 1);
	  $i++;    
    }
    $this->getUser()->setAttribute('security_code', $code);
    $image = imagecreate($width, $height);
    $background_color = imagecolorallocate($image, 255, 255, 255);
    $text_color = imagecolorallocate($image, 20, 40, 100);
    $noise_color = imagecolorallocate($image, 100, 180, 240);
      for( $i=0; $i<($width*$height)/3; $i++ ) {
         imagefilledellipse($image, mt_rand(0,$width), mt_rand(0,$height), 1, 1, $noise_color);
      }
      for( $i=0; $i<($width*$height)/150; $i++ ) {
	imageline($image, mt_rand(0,$width), mt_rand(0,$height), mt_rand(0,$width), mt_rand(0,$height), $noise_color);
      }
      $textbox = imagettfbbox($font_size, 0, $font, $code);
      $x = ($width - $textbox[4])/2;
      $y = ($height - $textbox[5])/2;
      imagettftext($image, $font_size, 0, $x, $y, $text_color, $font , $code);
    header("Content-type:  image/jpeg");
    imagepng($image);
    imagedestroy($image);
    return sfView::NONE;
   }
   
   public function executeChangeLanguage(sfWebRequest $request)
   {
   	$this->form = new sfFormLanguage($this->getUser(), array('languages' => array('en', 'es')));
   	if ($request->isMethod('post'))
   	{
      $this->form->process($request);
   	  return $this->redirect('@homepage');
   	  //return $this->redirect($this->getEntranceRoute());
   	}
   	return $this->redirect('@homepage');
   }
}