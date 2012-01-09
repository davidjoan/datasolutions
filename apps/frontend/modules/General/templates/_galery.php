<div class="container">
  <ul id="myRoundabout">
    <?php foreach($applications as $app): ?>
    <li><?php echo image_tag(Doctrine::getTable('Application')->getImagePath().$app->getThumbnailFileDirectory('image',646 ), array('alt' => $app->getName())); ?></li>
    <?php endforeach; ?>
  </ul>
</div>