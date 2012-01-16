<div class="container">
  <div class="wrapper">
      <div class="fleft">
      <a target="_self" href="#top"><?php echo __('Back to Top'); ?></a> <?php echo __('or'); ?>
      <?php include_component('Home', 'changeLanguage') ?>
    </div>
    <div class="fright">
        <br/>&copy; <?php echo __('Copyright'); ?> - <?php echo link_to('datasolutions.pe', '/') ?>&nbsp;
        <?php echo link_to(image_tag('frontend/facebook_icon.png',array('alt' => 'DATA Solutiona Facebook')), 'https://www.facebook.com/pages/datasolutionspe/153992744690506', array('target' => '_BLANK', 'title' => 'Facebook')); ?>&nbsp;
        <?php echo link_to(image_tag('frontend/twitter_icon.png',array('alt' => 'DATA Solutions Twitter')), 'https://twitter.com/#!/DATASolutionspe', array('target' => '_BLANK', 'title' => 'Twitter')); ?>
    </div>
  </div>
</div>