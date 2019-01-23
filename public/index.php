<?php

include ('../config/main.php');
include ('../vendor/autoload.php');

use app\services\Autoloader;
use \app\services\Request;
use app\services\renderers\TemplateRenderer;

spl_autoload_register([new Autoloader(), 'loadClass']);

$request = new Request();

$controllerName = $request->getControllerName() ?: DEFAULT_CONTROLLER;
$actionName = $request->getActionName();


$controllerClass = CONTROLLER_NAMESPACE . ucfirst($controllerName) . "Controller";

if (class_exists($controllerClass)){
  $controller = new $controllerClass(new TemplateRenderer());
  $controller->runAction($actionName);
};

/**
 * Created by PhpStorm.
 * User: Alex1
 * Date: 10.01.2019
 * Time: 23:04
 */

