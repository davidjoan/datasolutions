<aside>
  <h2>Nuestros <span>Proyectos</span></h2>

  <?php foreach($applications as $key=>$app): ?>
    <h3><?php echo link_to($app->getName(), sprintf('@proyectos?slug=%s',$app->getSlug())); ?></h3>
    <div><?php echo link_to(image_tag(Doctrine::getTable('Application')->getImagePath().$app->getThumbnailFileDirectory('image',289 ), array('border' => 0,'alt' => $app->getName())), sprintf('@proyectos?slug=%s',$app->getSlug()), array('title' => $app->getName())); ?></div>
    <hr/>
  <?php endforeach; ?>
</aside>

<section id="content">
  <article style="text-align: justify">
    <?php if($slug == ''): ?>    
      <h2>&nbsp; <span>&nbsp;</span></h2>
      <p>
       ￩ <?php echo __('Estos son los ultimos proyectos desarrollados por data solutions seleccione para conocer mas acerca de cada uno de nuestras soluciones.'); ?><br/>
       <?php echo __('Ademas a lo largo de todos estos años hemos desarrollados múltiples proyectos resolviendo problemas en diversos sectores. Las características que más destacan nuestros clientes de las aplicaciones que hemos desarrollado son:'); ?><br/>

      <ul class="list1">
          <li><?php echo __('Integración con otras aplicaciones, como servicios web y redes sociales.'); ?></li>
          <li><?php echo __('Aplicaciones intuitivas.'); ?></li>
          <li><?php echo __('Cortos tiempos de respuesta.'); ?></li>
          <li><?php echo __('Accesibilidad.'); ?></li>
          <li><?php echo __('Bajo nivel de incidencias tras la implantación.'); ?></li>
      </ul>
      </p>
    <?php else: ?>
      <h2><span><?php echo $application->getName(); ?></span></h2>
      <?php echo $application->getDescription(); ?>
      
      <h3><?php echo __('Deja tu comentario'); ?></h3>
      <div class="fb-comments" data-href="http://datasolutions.pe/<?php echo $sf_user->getCulture(); ?>/proyectos/<?php echo $slug; ?>" data-num-posts="10" data-width="570"></div>
    <?php endif; ?>
  </article>

</section>