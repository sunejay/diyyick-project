<?php
require_once __DIR__.'/../vendor/autoload.php';
require_once __DIR__.'/../Config/GenConfig.php';

/**
 * Error and Exception handling
 */
error_reporting(E_ALL);
set_error_handler('Diyyick\Lib\Exception\Error::errorHandler');
set_exception_handler('Diyyick\Lib\Exception\Error::exceptionHandler');


use Diyyick\Lib\Core\Router;
use Diyyick\Lib\Core\Request;
use Diyyick\Lib\Core\Response;
use Diyyick\App\Controllers\Home;


Router::add('/', function (Request $req, Response $res){
    
    echo "Welcome DIYYICK<br>";
    return $res->render('index');
});

Router::add('/about/{username}', [Home::class, 'about']);

Router::dispatch();