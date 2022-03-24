<?php

namespace App\Http\Controllers;

use App\Services\User\UserService;

class UserController extends Controller
{
    public function __construct(UserService $service)
    {
        $this->service = $service;
    }

}
