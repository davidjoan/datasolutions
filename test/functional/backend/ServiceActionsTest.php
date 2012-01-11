<?php

include(dirname(__FILE__).'/../../bootstrap/functional.php');

$browser = new sfTestFunctionalExt(new sfBrowser());

$browser->get('/Service/list')
        ->checkAction('Service', 'list', 200)
        ->get('/Service/edit')
        ->checkAction('Service', 'edit', 200)
        ->get('/Service/delete')
        ->checkAction('Service', 'delete', 200)
        ->get('/Service/show')
        ->checkAction('Service', 'show', 200)
        ->get('/Service/sort')
        ->checkAction('Service', 'sort', 200);
