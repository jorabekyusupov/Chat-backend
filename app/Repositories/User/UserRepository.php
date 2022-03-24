<?php

namespace App\Repositories\User;

use App\Models\User;

class UserRepository extends \App\Repositories\Repository
{
    public function __construct(User $model)
    {
        $this->model = $model;
    }
}
