<?php

namespace App\Http\Controllers;

use App\Http\Requests\Contact\ContactStoreRequest;
use App\Models\Contact;
use App\Services\Contact\ContactService;
use Illuminate\Http\Request;

class ContactsController extends Controller
{
    public function __construct(ContactService $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        return $this->service->get(['users'])->where('auth_id', auth()->id())->get();
    }
    public function store(ContactStoreRequest $request)
    {
        return $this->service->store($request->validated());
    }

}
