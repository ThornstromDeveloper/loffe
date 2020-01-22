<?php
require 'router.php';

use Routing\Router;

class Loffe {

    public function start() {
        include $_SERVER['DOCUMENT_ROOT'] . '/config/routes.php';

        $router = new Router();
        $routes = (array)$router->get();

        $controller = $routes['controller'] . 'Controller';
        $method = $routes['method'];

        require $_SERVER['DOCUMENT_ROOT'] . '/src/Controller/' . $controller . '.php';

        $test = new $controller;
        print_r($test->$method());
    }
}