<?php 

use MVC\src\Dispatcher;

require '../vendor/autoload.php';
date_default_timezone_set('Asia/Ho_Chi_Minh');
define('WEBROOT', str_replace("Webroot/index.php", "", $_SERVER["SCRIPT_NAME"]));
define('ROOT', str_replace("Webroot/index.php", "", $_SERVER["SCRIPT_FILENAME"]) . 'src/');

// require(ROOT . 'Config/core.php');
// require(ROOT . 'router.php');
// require(ROOT . 'request.php');
// require(ROOT . 'dispatcher.php');

$dispatch = new Dispatcher();
$dispatch->dispatch();
