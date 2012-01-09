<aside>
  <h2>Nuestros <span>Datos</span></h2>

  <ul class="contacts">
    <li><strong>Direcci&oacute;n:</strong>Mz I2 lote 2 SJL</li>
    <li><strong>Codigo Postal:</strong>Lima 36</li>
    <li><strong>Pais:</strong>Per&uacute;</li>
    <li><strong>Ciudad:</strong>Lima</li>
    <li><strong>Telefono:</strong>+551 3926855</li>
    <!--<li><strong>Fax:</strong>+354 5635620</li>-->
    <li><strong>Email:</strong><a href="#">contact@datasolutions.pe</a></li>
  </ul>

  <h3>Mas Informaci&oacute;n:</h3>
<!--
Skype 'Skype Me™!' button
http://www.skype.com/go/skypebuttons
-->
<script type="text/javascript" src="http://download.skype.com/share/skypebuttons/js/skypeCheck.js"></script>
<ul class="contacts">
    <li><strong>Skype:</strong><a href="skype:datasolutions.pe?call"><img src="http://download.skype.com/share/skypebuttons/buttons/call_blue_transparent_70x23.png" style="border: none;" width="70" height="23" alt="Skype Me™!" /></a>
	</li>
	<li><strong>Mapa:</strong><br/>
	  <figure><?php echo image_tag('http://maps.google.com/maps/api/staticmap?center=Lima+Peru&zoom=14&size=290x290&maptype=roadmap&markers=color:red|color:blue|label:D|-12.0433333,-77.0283333&sensor=false', array('alt' => 'DATA Solutions'));?></figure>
	</li>
</ul>
</aside>


<section id="content">
  <?php if($sf_user->hasFlash('error')): ?>    
    <div class="ui-widget">
      <div class="ui-state-error ui-corner-all" style="padding: 0 .7em;">
      <p><span class="ui-icon ui-icon-alert" style="float: left; margin-right: .3em;"></span>
      <strong>Error:</strong> <?php echo $sf_user->getFlash('error') ?></p>
      </div>
    </div>    
  <?php endif; ?> 
  <?php if($sf_user->hasFlash('notice')): ?>
    <div class="ui-widget">
    <div class="ui-state-highlight ui-corner-all" style="margin-top: 20px; padding: 0 .7em;"> 
    <p><span class="ui-icon ui-icon-info" style="float: left; margin-right: .3em;"></span>
    <strong>Alerta!</strong> <?php echo $sf_user->getFlash('notice') ?></p>
    </div>
    </div>    
  <?php endif; ?>     

  <article>
    <h2>Formulario de <span>Contacto</span></h2>
    <form id="contacts-form" action="<?php echo url_for('@contactenos')?>" method="post">
    <fieldset>
      <div class="field">
        <label>Nombres:</label>
        <?php echo $form['name']->render(); ?>
      </div>
      <div class="field">
        <label>E-mail:</label>
        <?php echo $form['email']->render(); ?>
      </div>
      <div class="field">
        <label>Empresa:</label>
        <?php echo $form['company']->render(); ?>
      </div>
      <div class="field">
        <label>Asunto:</label>
        <?php echo $form['subject']->render(); ?>
      </div>        
      <div class="field">
        <label>Mensaje:</label>
        <?php echo $form['message']->render(); ?>
      </div>
      <div class="field">
        <label>Captcha:</label>
        <?php echo $form['_csrf_token'] ?>
        <?php echo $form['captcha'] ?><br/><br/>
      </div>        
      <div class="field">
        <label>&nbsp;</label>
        <?php echo image_tag(url_for('@image', true)) ?>           
      </div>        
        <div><input type="submit" value="Enviar Mensaje" /></div>
    </fieldset>
    </form>
  </article>
</section>