<aside>
  <h2><?php echo __('Sistemas Web'); ?> <span>2.0</span></h2>
  <div class="img-box" style="text-align: justify">
     <?php echo __('El desarrollo del internet y la interacción de los usuarios con el entorno web a impulsado a la creación del sistema web 2.0 por su economicidad, por su configurabilidad y además porque el contenido esta disponible desde cualquier máquina local o del mundo.'); ?>
     <figure><?php echo image_tag('frontend/symfony.jpg');?></figure>
     <br/><?php echo __('El contenido del sistema web (software web ) puede ser público o sólo restringido a uso de un administrador o administradores, siendo la distribución de los menús y módulos de contenido amigable y fácil de entendimiento.
     Nuestros sistemas web se pueden programar en lenguages estándares como por ejemplo PHP,PYTHON .ASP y .ASP NET y la información puede ser almacenado localmente o remotamente usando bases de datos, como por ejemplo: MySQL, PostgreSQL, MSSQL Y ORACLE.'); ?>
  </div>
</aside>

<section id="content">
  <article style="text-align: justify">
    <h2><?php echo __('Nuestros'); ?> <span><?php echo __('Servicios'); ?></span></h2>
    <p><?php echo __('DATA solutions te ofreca una gran variedad de soluciones informaticas. Entre las principales tecnologias que estamos especializados.'); ?></p>
    <?php foreach($services as $service): ?>
      <?php if($service->getUrl() <> ''): ?>
         <h2><?php echo link_to($service->getName(), $service->getUrl(), array('target' => 'BLANK')); ?></h2>
      <?php else:?>
        <h2><?php echo $service->getName(); ?></h2>
      <?php endif; ?>
      <?php if($service->getImage() <> ''): ?>
        <figure><?php echo image_tag(Doctrine::getTable('Service')->getImagePath().'/'.$service->getImage() , array('border' => 0,'alt' => $service->getName())); ?></figure>
      <?php endif; ?>
      <?php echo $service->getDescription(); ?>
    <?php endforeach; ?>
  </article>
</section>