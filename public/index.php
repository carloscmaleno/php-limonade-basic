<?php

require_once '../vendor/sofadesign/limonade/lib/limonade.php';

function configure()
{

    //$db = new PDO();

    option('base_uri', '/php-limonade-basic/public/');
    option('views_dir', '../views');
    option('controllers_dir', '../controllers');

    $env = $_SERVER['HTTP_HOST'] == "localhost" ? ENV_DEVELOPMENT : ENV_PRODUCTION;
    option('env', $env);
    //option('db_conn', $db);
    option('debug', $env == ENV_DEVELOPMENT? true : false);
}

#Home page
dispatch_get('/', ['Home', 'index']);

#Contact
dispatch_get('/contact', ['Contact', 'index']);
dispatch_post('/contact/send', ['Contact', 'send']);

#Registre
dispatch_get('/registre', ['Registre', 'index']);
dispatch_post('/registre/create', ['Registre', 'create']);

run();
