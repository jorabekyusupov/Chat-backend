<?php

namespace App\Services\Chat;

use App\Repositories\Chat\ChatRepository;

class ChatService extends \App\Services\Service
{
    public function __construct(ChatRepository $repository)
    {
        $this->repository = $repository;
    }
}
