<?php

// Error reporting for development
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Start the session
session_start();

// Database connection
$config = require_once '../config/database.php';
$db = new PDO($config['driver'] . ':' . $config['database']);

// Simple routing
$route = $_GET['route'] ?? 'home';

switch ($route) {
    case 'home':
        require_once '../app/controllers/HomeController.php';
        $controller = new HomeController($db);
        $controller->index();
        break;
    case 'posts':
        require_once '../app/controllers/PostController.php';
        $controller = new PostController($db);
        $controller->index();
        break;
    case 'post':
        require_once '../app/controllers/PostController.php';
        $controller = new PostController($db);
        $controller->show($_GET['id'] ?? null);
        break;
    case 'login':
        require_once '../app/controllers/AuthController.php';
        $controller = new AuthController($db);
        $_SERVER['REQUEST_METHOD'] === 'POST' ? $controller->login() : $controller->showLoginForm();
        break;
    case 'register':
        require_once '../app/controllers/AuthController.php';
        $controller = new AuthController($db);
        $_SERVER['REQUEST_METHOD'] === 'POST' ? $controller->register() : $controller->showRegistrationForm();
        break;
    case 'logout':
        require_once '../app/controllers/AuthController.php';
        $controller = new AuthController($db);
        $controller->logout();
        break;
    default:
        http_response_code(404);
        echo "404 Not Found";
        break;
}
