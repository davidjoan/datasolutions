<?php slot('title') ?>
  Equiposs
<?php end_slot() ?>

<?php slot('subtitle') ?>
  Miembro: <?php echo $form->getObject()->getName() ?>
<?php end_slot() ?>

<?php include_component('Crud', 'show', array('form' => $form)) ?>
