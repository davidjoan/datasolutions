<?php slot('title') ?>
  Aplicaciones
<?php end_slot() ?>

<?php slot('subtitle') ?>
  Aplicaci�n: <?php echo $form->getObject()->getName() ?>
<?php end_slot() ?>

<?php include_component('Crud', 'show', array('form' => $form)) ?>
