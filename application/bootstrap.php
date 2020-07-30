<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
define('DUMP_SQL', false);

require_once 'core/model.php';
require_once 'core/views.php';
require_once 'core/controller.php';
require_once 'core/route.php';
Route::start(); // запускаем маршрутизатор

function de($var){
    echo '<pre>';
    var_dump($var);
    exit('интересно');
    echo '</pre>';
}
