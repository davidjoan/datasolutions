<aside>
  <h2><?php echo __('Noso<span>tros</span>');?></h2>
  <div class="img-box" style="text-align: justify">
    <?php echo __('DATA solutions no sólo es una de las mejores empresa de desarrollo web a nivel mundial, te ofrecemos soluciones únicas, creativas y modernas para todo lo que quieres expresar.
    Nuestras diversas áreas y el staff de profesionales altamente capacitados y experimentados en la creación de sistemas web, imagen corporativa, diseño de base de datos, posicionamiento WEB, que trabajan en equipo para satisfacer los requerimientos de tu empresa, con la estrategia creativa que necesitas para tus productos, servicios o contenidos.'); ?>
  </div>
</aside>
<section id="content">
  <article  style="text-align: justify">
    <h2><?php echo __('Nuestro'); ?> <span><?php echo __('Equipo');?></span></h2>
    <ul class="team-list">
    <?php foreach($team as $member): ?>
      <li>
        <?php if($member->getImage() <> ''): ?>
          <figure><?php echo image_tag(Doctrine::getTable('Team')->getImagePath().'/'.$member->getImage() , array('border' => 0,'alt' => $member->getName())); ?></figure>
        <?php endif; ?>
        <?php if($member->getUrl() <> ''): ?>
          <h3><?php echo link_to($member->getName(), $member->getUrl(), array('target' => 'BLANK')); ?></h3>
        <?php else:?>
          <h3><?php echo $member->getName(); ?></h3>
        <?php endif; ?>
        <?php echo $member->getDescription(); ?>
      </li>
      <?php endforeach; ?>
    </ul>
  </article>
</section>