<?php slot('title') ?>
  Servicios
<?php end_slot() ?>

<?php slot('subtitle') ?>
  <?php echo $form->isNew() ? 'Agregar' : 'Editar' ?> Servicio
<?php end_slot() ?>

<?php include_component('Crud', 'edit', array('form' => $form)) ?>
