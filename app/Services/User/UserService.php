<?php

namespace App\Services\User;

use App\Repositories\User\UserRepository;

class UserService extends \App\Services\Service
{
    public function __construct(UserRepository $repository)
    {
        $this->repository = $repository;
    }

    public function register($data)
    {
        $model = $this->get()->where('email', $data['email'])->first();
        if (!$model) {
            $data['password'] = bcrypt($data['password']);
            return $this->create($data);
        } else return response('already registered with such an email', 422);

    }


    public function login($data)
    {

        if (!Auth::attempt($data)) return response( 'such a user does not exist', 401);
        else {
            $user = auth()->user();
            $msg = 'login was successful';
            $token = $user->createToken('authToken')->plainTextToken;
            return response($token);
        }
    }

}
