<?php

namespace App\Services\Message;

use App\Repositories\Message\MessageRepository;

class MessageService extends \App\Services\Service
{
    public function __construct(MessageRepository $repository)
    {
        $this->repository = $repository;
    }
}
