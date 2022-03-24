<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Services\Message\MessageService;
use Illuminate\Http\Request;

class MessagesController extends Controller
{
    public function __construct(MessageService $service)
    {
        $this->service = $service;
    }




}
