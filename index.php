<?php

require_once "vendor/autoload.php";
$pathname = $_SERVER["PATH_INFO"] ?? "/";

$config = [
    "/" => [\App\Controller\HomeController::class, "index"],
    "/search" => [\App\Controller\SearchController::class, "index"],
    "/about" => [\App\Controller\AboutController::class, "index"],
    "/articles" => [\App\Controller\ArticleController::class, "index"],
    "/login" => [\App\Controller\AuthController::class, "login"],
    "/admin" => [\App\Controller\AdminController::class, "index"],
];

$match = $config[$pathname] ?? null;

if($match === null) {
    echo "Route not found in index.php";
    exit();
}

[$controllerClass, $method] = $match;

$controller = new $controllerClass();
$controller->$method();
