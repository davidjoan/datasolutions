<?php slot('title') ?>
  Equipo
<?php end_slot() ?>

<?php slot('subtitle') ?>
  <?php echo $form->isNew() ? 'Agregar' : 'Editar' ?> Miembro del Equipo
<?php end_slot() ?>

<?php include_component('Crud', 'edit', array('form' => $form)) ?>
