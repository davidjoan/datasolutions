<h2><?php echo __('Page Not Found'); ?></h2>
<h5><?php echo __('The server returned a 404 response.'); ?></h5>

<dt><?php echo __('Did you type the URL?'); ?></dt>
<dd><?php echo __('You may have typed the address (URL) incorrectly.'); ?></dd>
<dd><?php echo __('Check it to make sure you\'ve got the exact right spelling, capitalization, etc.');?></dd>

<br/><br/>
<br/><br/>

<?php echo link_to_function(__('Return'), 'history.back()') ?>
