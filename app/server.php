<?php
if(!isset($_SESSION)) session_start();
define('ROOT', $_SERVER['DOCUMENT_ROOT']);
define('URI', $_SERVER['REQUEST_URI']);
define('VIEW', ROOT.'/public');

include(ROOT.'/app/lib/load.php');
$path = parse_url(URI, PHP_URL_PATH);
$uri = isset($path) ? substr($path,1) : '';
$url = explode('/',$uri);
include('route.php');
if(file_exists($route)) include $route;exit;
setlocale(LC_ALL, 'en_US.UTF8');

