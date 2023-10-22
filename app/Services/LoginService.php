<?php

namespace App\Services;

use App\Services\Interfaces\LoginServiceInterface;
class LoginService implements LoginServiceInterface
{
    public function __construct()
    {
//        echo 'LoginService constructor' . '<br>';
    }

    public function index(): string
    {
        return 'LoginService@index';
    }

    public function login(): mixed
    {
        // TODO: Implement login() method.
    }
}