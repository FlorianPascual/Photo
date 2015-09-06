<?php

ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(-1);

session_start();

use Rave\Core\Router;
use Rave\Core\Autoloader;

use Rave\Library\Core\IO\In;

define('ROOT', __DIR__);
define('WEB_ROOT', dirname(filter_input(INPUT_SERVER, 'SCRIPT_NAME')));

require_once ROOT . '/Core/Autoloader.php';

Autoloader::register();

try {
    Router::get(In::get('page'));
} catch (RouterException $routerException) {
    Error::create($routerException->getMessage(), '404');
}
