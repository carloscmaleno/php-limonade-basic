<?php

require_once '../vendor/sofadesign/limonade/lib/limonade.php';

option('base_uri', '/php-limonade-basic/public/');
option('views_dir', dirname(__FILE__).'../views');
option('controllers_dir', dirname(__FILE__).'/../controllers');

dispatch('/', 'hello');

function hello()
{
    return 'Hello world!a';
}
run();