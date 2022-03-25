<?php

namespace App\Http\Controllers;

use App\Models\Chat;
use App\Services\Chat\ChatService;
use Illuminate\Http\Request;

class ChatsController extends Controller
{

    public function __construct(ChatService $service)
    {
        $this->service = $service;
    }


}
