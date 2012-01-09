<script type="text/javascript">
		$(function(){
			// Option set as a global variable
			$('#loopedSlider').loopedSlider({
				container: ".wrap",
				containerClick: false
			});
		});
</script>
<aside>
  <h2>Nuestros <span>Proyectos</span></h2>
  
  <div id="loopedSlider">
    <div class="wrap">
      <div class="slides">
        <?php foreach($applications as $key=>$app): ?>
        <div><?php echo link_to(image_tag(Doctrine::getTable('Application')->getImagePath().$app->getThumbnailFileDirectory('image',289 ), array('border' => 0,'alt' => $app->getName())), sprintf('@proyectos?slug=%s',$app->getSlug()), array('alt' => $app->getName())); ?></div>
        <?php endforeach; ?>
      </div>
    </div>
    <ul class="nav-controls">
      <li><a href="#" class="previous">Anterior</a></li>
      <li><a href="#" class="next">Siguiente</a></li>
    </ul>
  </div>
</aside>

<section id="content">
  <article style="text-align: justify">
    <?php if($slug == ''): ?>    
      <h2>&nbsp; <span>&nbsp;</span></h2>
      <p>Estos son los ultimos proyectos desarrollados por data solutions seleccione para conocer mas acerca de cada uno de nuestras soluciones.</p>
    <?php else: ?>
      <h2><span><?php echo $application->getName(); ?></span></h2>
      <?php echo $application->getDescription(); ?>
      
      <h3>Deja tu comentario</h3>
      <div class="fb-comments" data-href="http://datasolutions.pe/proyectos/<?php echo $slug; ?>" data-num-posts="10" data-width="570"></div>
    <?php endif; ?>
  </article>

</section>