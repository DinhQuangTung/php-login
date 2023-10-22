<?php

use App\Controller\Auth\LoginController;

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    // TODO: Define the routes for GET requests
    if ($_SERVER['REQUEST_URI'] == '/') {
        echo 'Welcome to the homepage!';
    } elseif ($_SERVER['REQUEST_URI'] == '/login') {
        $loginController = new LoginController();
        $loginController->index();
    } elseif ($_SERVER['REQUEST_URI'] == '/home') {
        echo 'Welcome to the home!';
    } else {
        $uri = $_SERVER['REQUEST_URI'];

        if (strpos($uri, '.css')) {
            header("Content-Type: {$_SERVER['CONTENT_TYPE']}");
            return require __DIR__ . '/../resources/css/app.css';
        } else if (strpos($uri, '.js')) {
            header("Content-Type: {$_SERVER['CONTENT_TYPE']}");
            return require __DIR__ . '/../resources/js/app.js';
        }
    }
} elseif ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // TODO: Define the routes for POST requests
} else {
    echo 'Oops! Something went wrong.';
}
