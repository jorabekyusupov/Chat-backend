<?php

namespace App\Repositories\Message;

use App\Models\Message;

class MessageRepository extends \App\Repositories\Repository
{
    public function __construct(Message $model)
    {
        $this->model = $model;
    }

}
