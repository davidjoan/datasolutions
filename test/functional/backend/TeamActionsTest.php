<?php

include(dirname(__FILE__).'/../../bootstrap/functional.php');

$browser = new sfTestFunctionalExt(new sfBrowser());

$browser->get('/lista/equipo')
        ->checkAction('Team', 'list', 200)
        ->get('/editar/equipo/1')
        ->checkAction('Team', 'edit', 200)
        ->get('/eliminar/equipo/1')
        ->checkAction('Team', 'delete', 200)
        ->get('/mostrar/equipo/1')
        ->checkAction('Team', 'show', 200)
        ->get('/ordernar/equipo')
        ->checkAction('Team', 'sort', 200);
