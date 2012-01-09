<h2>Ultimas <span>Noticias</span></h2>
<ul class="news">
  <?php foreach($news as $new): ?>
  <li>
    <figure><strong><?php echo date("d",strtotime($new->getCreatedAt())); ?></strong><?php echo date("F",strtotime($new->getCreatedAt())); ?></figure>
    <h3><a href="#"><?php echo $new->getTitle(); ?></a></h3>
    <?php echo $new->getDescription(); ?>
  </li>
  <?php endforeach; ?>
</ul>