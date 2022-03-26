<?php

namespace App\Http\Controllers;

use App\Http\Requests\Message\MessageStoreRequest;
use App\Models\Message;
use App\Services\Message\MessageService;
use Illuminate\Http\Request;

class MessagesController extends Controller
{
    public function __construct(MessageService $service)
    {
        $this->service = $service;
    }

    public function store(MessageStoreRequest $request)
    {
        return $this->service->store($request->validated());
    }

    public function show($chat_id)
    {
        return $this->service->get(['user', 'author'])->where('chat_id', $chat_id)->get();
    }



}
