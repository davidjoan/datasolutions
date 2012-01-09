<?php $is_selected = $sf_user->getCurrentRouteName() == $uri ?>
<li><?php echo link_to($title, $uri, array('class' =>($is_selected ? 'current' : '') )); ?></li>