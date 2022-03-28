<?php

namespace App\Http\Controllers;

use App\Http\Requests\Chat\ChatStoreRequest;
use App\Models\Chat;
use App\Services\Chat\ChatService;
use Illuminate\Http\Request;

class ChatsController extends Controller
{

    public function __construct(ChatService $service)
    {
        $this->service = $service;
    }

    public function store(ChatStoreRequest $request)
    {
        return $this->service->chatStore($request->validated());
    }

    public function index()
    {
        return $this->service->list();
    }

    public function ListUser()
    {
        return $this->service->chatList();
    }

    public function show($id)
    {
        return $this->service->show($id, ['user','messages', 'messages.user','messages.author']);
    }

}
