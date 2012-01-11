<?php slot('title') ?>
  Equipo
<?php end_slot() ?>

<?php slot('subtitle') ?>
  Lista de Miembros del Equipo
<?php end_slot() ?>

<?php include_component('Crud', 'list', array
      (
        'pager'              => $pager,
        'sort'               => true,
        'sort_uri'           => '@team_sort',  
        'uri'                => '@team_list?filter_by=filter_by&filter=filter&order_by=order_by&order=order&max=max&page=page',
                                
        'edit_field'         => 'name',
        'filter_fields'      => array
                                (
                                  'name' => 'Nombre',  
                                  'url' => 'Url',  
                                ),
        'columns'            => array
                                (
                                  array('2' , ''              , ''        , ''               ),
                                  array('30', 'name'          , 'Nombre'  , 'getName'        ),
                                  array('30', 'url'           , 'Url'     , 'getUrl'         ),
                                  array('30', 'created_at'    , 'Fecha Creaci&oacute;n' , 'getFormattedDatetime'    ),
                                  array('6' , 'disable_image' , 'Activo'  , 'getDisableImage', 'center', false),
                                  array('2' , ''              , ''        , 'checkbox'       ),
                                )                                
      ))
?>