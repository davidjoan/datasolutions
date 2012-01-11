<div class="container">
  <h1><a href="/">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></h1>
  <nav>
    <ul>
      <?php include_partial('General/tab', array('title' => __('Inicio')   , 'uri' => '@homepage')) ?>
      <?php include_partial('General/tab', array('title' => __('Nosotros') , 'uri' => '@nosotros')) ?>
      <?php include_partial('General/tab', array('title' => __('Servicios'), 'uri' => '@servicios')) ?>
      <?php include_partial('General/tab', array('title' => __('Proyectos'), 'uri' => '@proyectos')) ?>
      <?php include_partial('General/tab', array('title' => __('Contacto') , 'uri' => '@contactenos')) ?>
      <?php include_partial('General/tab', array('title' => __('Sitemap')  , 'uri' => '@sitemap')) ?>
    </ul>
  </nav>
</div>
<div id="view-more">
  <a href="#inside" class="scrollTo"><?php echo __('Ver Mas...');?></a>
</div>
<div id="arrow"></div>

