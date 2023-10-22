<?php

use App\Controller\Auth\LoginController;
use App\Controller\Auth\RegisterController;

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    // TODO: Define the routes for GET requests
    if ($_SERVER['REQUEST_URI'] == '/') {
        echo 'Welcome to the homepage!';
    } elseif ($_SERVER['REQUEST_URI'] == '/login') {
        $loginController = new LoginController();
        $loginController->index();
    } elseif ($_SERVER['REQUEST_URI'] == '/register') {
        $registerController = new RegisterController();
        $registerController->index();
    } else {
        $uri = $_SERVER['REQUEST_URI'];
        $contentType = '';

        if (strpos($uri, '.css')) {
            $contentType = 'text/css';
        } elseif (strpos($uri, '.js')) {
            $contentType = 'text/javascript';
        }

        if ($contentType) {
            header("Content-Type: $contentType");
        }

        return require $_SERVER['REQUEST_URI'];
    }
} elseif ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if ($_SERVER['REQUEST_URI'] == '/login') {
        $loginController = new LoginController();
        $loginController->login();
    } elseif ($_SERVER['REQUEST_URI'] == '/register') {
        $registerController = new RegisterController();
        $registerController->register();
    } else {
        echo 'Oops! Something went wrong.';
    }
    // TODO: Define the routes for POST requests
} else {
    echo 'Oops! Something went wrong.';
}
