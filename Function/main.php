<?php 

include_once 'Controller/controller.php';
require_once 'Controller/route.php';

$httpMethod = $_SERVER['REQUEST_METHOD'];

$route = $_SERVER['REQUEST_URI'];

$baseUrl = '/tugas2';

$params = [];

$route = str_replace($baseUrl, '', $route);

foreach ($routes[$httpMethod] as $pattern => $action) {
    $pattern = str_replace('/', '\/', $pattern);
    $pattern = preg_replace('/\{([^\/]+)\}/', '([^\/]+)', $pattern);

if (preg_match('/^' . $pattern . '$/', $route, $matches)) {
    array_shift($matches);
    $params = $matches;

    $actionParts = explode('@', $action);
    $controllerName = $actionParts[0];
    $methodName = $actionParts[1];
    require_once 'Controller/' . $controllerName . '.php';
    $controller = new $controllerName();
    if (!empty($params)) {
        $controller->$methodName(...$params);
    } else {
        $controller->$methodName();
    }
}
}