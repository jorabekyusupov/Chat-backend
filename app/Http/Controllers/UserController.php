<?php

namespace App\Http\Controllers;

use App\Http\Requests\User\UserLoginRequest;
use App\Http\Requests\User\UserStoreRequest;
use App\Services\User\UserService;
use Laravel\Passport\Http\Controllers\AccessTokenController;
use Psr\Http\Message\ServerRequestInterface;

class UserController extends Controller
{
    private AccessTokenController $accessTokenController;

    public function __construct(UserService $service, AccessTokenController $accessTokenController)
    {
        $this->service = $service;
        $this->accessTokenController = $accessTokenController;
    }

    public function store(UserStoreRequest $request)
    {
        return $this->service->store($request->validated());
    }

    public function login(ServerRequestInterface $request)
    {

        return $this->accessTokenController->issueToken($request);
    }



}
