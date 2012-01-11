<?php

include(dirname(__FILE__).'/../../bootstrap/functional.php');

$browser = new sfTestFunctionalExt(new sfBrowser());

$browser->get('/Application/list')
        ->checkAction('Application', 'list', 200)
        ->get('/Application/edit')
        ->checkAction('Application', 'edit', 200)
        ->get('/Application/delete')
        ->checkAction('Application', 'delete', 200)
        ->get('/Application/show')
        ->checkAction('Application', 'show', 200)
        ->get('/Application/sort')
        ->checkAction('Application', 'sort', 200);

