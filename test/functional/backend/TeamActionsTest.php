<?php

include(dirname(__FILE__).'/../../bootstrap/functional.php');

$browser = new sfTestFunctional(new sfBrowser());

$browser = new sfTestFunctionalExt(new sfBrowser());

$browser->get('/Team/list')
        ->checkAction('Team', 'list', 200)
        ->get('/Team/edit')
        ->checkAction('Team', 'edit', 200)
        ->get('/Team/delete')
        ->checkAction('Team', 'delete', 200)
        ->get('/Team/show')
        ->checkAction('Team', 'show', 200)
        ->get('/Team/sort')
        ->checkAction('Team', 'sort', 200);
