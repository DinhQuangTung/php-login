<?php

namespace App\Controller\Auth;

use App\Services\LoginService;

class LoginController
{
    public function index()
    {
        return require __DIR__ . '/../../../resources/views/auth/login.php';
    }
}
