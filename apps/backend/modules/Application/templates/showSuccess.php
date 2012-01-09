<?php slot('title') ?>
  Noticias
<?php end_slot() ?>

<?php slot('subtitle') ?>
  Noticia: <?php echo $form->getObject()->getName() ?>
<?php end_slot() ?>

<?php include_component('Crud', 'show', array('form' => $form)) ?>
