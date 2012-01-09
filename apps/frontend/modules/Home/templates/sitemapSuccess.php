<h2>Mapa del <span>Sitio</span></h2>
<p>Enlaces.</p>
<ul class="list1">
  <?php include_partial('General/tab', array('title' => 'Inicio'   , 'uri' => '@homepage')) ?>
  <?php include_partial('General/tab', array('title' => 'Nosotros' , 'uri' => '@nosotros')) ?>
  <?php include_partial('General/tab', array('title' => 'Servicios', 'uri' => '@servicios')) ?>
  <li><?php echo link_to('Proyectos', '@proyectos' ); ?>
    <ul>
      <?php foreach($applications as $key=>$app): ?>
        <li><?php echo link_to($app->getName(), '@proyectos?slug='.$app->getSlug() ); ?></li>
      <?php endforeach; ?>
    </ul>          
  </li>
  <?php include_partial('General/tab', array('title' => 'Contacto' , 'uri' => '@contactenos')) ?>
  <?php include_partial('General/tab', array('title' => 'Sitemap'  , 'uri' => '@sitemap')) ?>
</ul>