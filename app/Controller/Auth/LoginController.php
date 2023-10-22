<?php

namespace App\Controller\Auth;

use app\Services\Interfaces\LoginServiceInterface;
use App\Services\SessionLoginService;

class LoginController
{
    protected LoginServiceInterface $loginServiceInterface;

    public function __construct()
    {
        $this->loginServiceInterface = new SessionLoginService();
    }

    /**
     * @return mixed
     */
    public function index(): mixed
    {
        return require __DIR__ . '/../../../resources/views/auth/login.php';
    }

    public function login()
    {
        $data = [
            'email' => $_POST['email'],
            'password' => $_POST['password'],
            'remember' => $_POST['remember_me'] ?? 0,
        ];


    }
}
