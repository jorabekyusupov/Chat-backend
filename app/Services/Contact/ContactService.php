<?php

namespace App\Services\Contact;

use App\Repositories\Contact\ContactRepository;

class ContactService extends \App\Services\Service
{
    public function __construct(ContactRepository $repository)
    {
        $this->repository = $repository;
    }

}
