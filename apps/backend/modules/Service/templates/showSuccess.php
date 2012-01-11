<?php slot('title') ?>
  Servicios
<?php end_slot() ?>

<?php slot('subtitle') ?>
  Servicio: <?php echo $form->getObject()->getName() ?>
<?php end_slot() ?>

<?php include_component('Crud', 'show', array('form' => $form)) ?>
