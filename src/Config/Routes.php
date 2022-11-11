<?php

    namespace CSmarty\Config;

    $routes = \Config\Services::routes();

    $routes->setDefaultNamespace('');
    $routes->setDefaultController('Home');
    $routes->setDefaultMethod('index');
    $routes->setTranslateURIDashes(false);
    $routes->set404Override();

    $routes->get('smarty', 'CSmarty\Controllers\Home::index');
