<?php slot('title') ?>
  Aplicaciones
<?php end_slot() ?>

<?php slot('subtitle') ?>
  Aplicaci&oacute;n: <?php echo $form->getObject()->getTitle() ?>
<?php end_slot() ?>

<?php include_component('Crud', 'show', array('form' => $form)) ?>
