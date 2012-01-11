<?php

include(dirname(__FILE__).'/../../bootstrap/functional.php');

$browser = new sfTestFunctionalExt(new sfBrowser());

$browser->get('/News/list')
        ->checkAction('News', 'list', 200)
        ->get('/News/edit')
        ->checkAction('News', 'edit', 200)
        ->get('/News/delete')
        ->checkAction('News', 'delete', 200);
