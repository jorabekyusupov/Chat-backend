<?php

namespace App\Repositories\Chat;

use App\Models\Chat;

class ChatRepository extends \App\Repositories\Repository
{

    public function __construct(Chat $model)
    {
        $this->model = $model;
    }

}
