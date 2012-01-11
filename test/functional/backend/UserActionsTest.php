<?php

include(dirname(__FILE__).'/../../bootstrap/functional.php');

$browser = new sfTestFunctionalExt(new sfBrowser());

$browser->get('/User/list')
        ->checkAction('User', 'list', 200)
        ->get('/User/edit')
        ->checkAction('User', 'edit', 200)
        ->get('/User/delete')
        ->checkAction('User', 'delete', 200)
        ->get('/User/show')
        ->checkAction('User', 'show', 200)
        ->get('/User/sort')
        ->checkAction('User', 'sort', 200);
