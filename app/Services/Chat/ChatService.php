<?php

namespace App\Services\Chat;

use App\Models\Chat;
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
          $second = $this->store($data);
          $param['auth_id'] = $second['user_id'];
          $param['chat_id'] = $second['chat_id'];
          $param['user_id'] = $second['auth_id'];
          return Chat::create($param);
    }

    public function chatList()
    {
        return $this->get(['user'])->where('auth_id', auth()->id())->select('id', 'user_id', 'auth_id')->get();
    }

    public function list()
    {
        return $this->get(['user', 'messages'])->where('auth_id', auth()->id())->get();
    }
}
