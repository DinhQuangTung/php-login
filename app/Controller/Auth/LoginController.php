<?php

namespace App\Controller\Auth;

use app\Services\Interfaces\LoginServiceInterface;
use App\Services\LoginService;

class LoginController
{
    protected LoginServiceInterface $loginServiceInterface;

    public function __construct(LoginServiceInterface $loginServiceInterface)
    {
        $this->loginServiceInterface = $loginServiceInterface;
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
        $loginService = new LoginService();
        $loginService->login();
    }
}
