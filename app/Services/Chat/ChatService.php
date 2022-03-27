<?php

namespace App\Services\Chat;

use App\Repositories\Chat\ChatRepository;
use Illuminate\Support\Facades\Auth;

class ChatService extends \App\Services\Service
{
    public function __construct(ChatRepository $repository)
    {
        $this->repository = $repository;
    }

    public function chatStore($data)
    {

          $data['chat_id'] =  rand();
          return $this->store($data);

    }

    public function list()
    {
        return $this->get(['user', 'messages'])->where('auth_id', auth()->id())->get();
    }
}
