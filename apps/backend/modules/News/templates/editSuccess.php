<?php slot('title') ?>
  Noticias
<?php end_slot() ?>

<?php slot('subtitle') ?>
  <?php echo $form->isNew() ? 'Agregar' : 'Editar' ?> Noticia
<?php end_slot() ?>

<?php include_component('Crud', 'edit', array('form' => $form)) ?>
