<h1><?php echo __('Credentials Required'); ?></h1>
<h5><?php echo __('This page is in a restricted area.'); ?></h5>

<br/>

<dt><?php echo __('You do not have the proper credentials to access this page'); ?></dt>
<dd><?php echo __('Even though you are already logged in, this page requires special credentials that you currently don\'t have.'); ?> </dd>

<br/>

<dt><?php echo __('How to access this page'); ?></dt>
<dd><?php echo __('You must ask a site administrator to grant you some special credentials.');?></dd>

<br/><br/>
<br/><br/>

<?php echo link_to_function('Return', 'history.back()') ?>
