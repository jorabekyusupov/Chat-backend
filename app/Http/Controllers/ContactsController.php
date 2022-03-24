<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Services\Contact\ContactService;
use Illuminate\Http\Request;

class ContactsController extends Controller
{
    public function __construct(ContactService $service)
    {
        $this->service = $service;
    }


}
