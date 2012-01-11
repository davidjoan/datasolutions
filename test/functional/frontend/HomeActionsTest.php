<?php

include(dirname(__FILE__).'/../../bootstrap/functional.php');

$browser = new sfTestFunctionalExt(new sfBrowser());

$browser->get('/es/contactenos')
        ->checkAction('Home', 'contactenos', 200)
        ->get('/en/contactenos')
        ->checkAction('Home', 'contactenos', 200)
        ->get('/')
        ->checkAction('Home', 'index', 200)
        ->get('/Home/mensaje')
        ->checkAction('Home', 'mensaje', 200)
        ->get('/en/nosotros')
        ->checkAction('Home', 'nosotros', 200)
        ->get('/es/nosotros')
         ->checkAction('Home', 'nosotros', 200)
        ->get('/es/servicios')
        ->checkAction('Home', 'servicios', 200)
        ->get('/en/servicios')
         ->checkAction('Home', 'servicios', 200)
        ->get('/es/sitemap')
        ->checkAction('Home', 'sitemap', 200)
        ->get('/es/sitemap')
        ->checkAction('Home', 'sitemap', 200);
