<?php slot('title') ?>
  Aplicaciones
<?php end_slot() ?>

<?php slot('subtitle') ?>
  <?php echo $form->isNew() ? 'Agregar' : 'Editar' ?> Aplicaci&oacute;n
<?php end_slot() ?>

<?php include_component('Crud', 'edit', array('form' => $form)) ?>
