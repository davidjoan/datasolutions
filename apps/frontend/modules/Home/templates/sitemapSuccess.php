<aside>
  <figure><?php echo image_tag('frontend/sitemap.jpg');?></figure>    
</aside>

<section id="content">
  <article style="text-align: justify">
    <h2><?php echo __('Mapa del'); ?> <span><?php echo __('Sitio'); ?></span></h2>
    <p><?php echo __('Enlaces.'); ?></p>
    <ul class="list1">
      <?php include_partial('General/tab', array('title' => __('Inicio')   , 'uri' => '@homepage')) ?>
      <?php include_partial('General/tab', array('title' => __('Nosotros') , 'uri' => '@nosotros')) ?>
      <?php include_partial('General/tab', array('title' => __('Servicios'), 'uri' => '@servicios')) ?>
      <li><?php echo link_to(__('Proyectos'), '@proyectos' ); ?>
        <ul>
          <?php foreach($applications as $key=>$app): ?>
            <li><?php echo link_to($app->getName(), '@proyectos?slug='.$app->getSlug() ); ?></li>
          <?php endforeach; ?>
        </ul>          
      </li>
      <?php include_partial('General/tab', array('title' => __('Contacto') , 'uri' => '@contactenos')) ?>
      <?php include_partial('General/tab', array('title' => __('Sitemap')  , 'uri' => '@sitemap')) ?>
    </ul>
  </article>
</section>