<?php

namespace App\Repositories\Contact;

use App\Models\Contact;

class ContactRepository extends \App\Repositories\Repository
{
    public function __construct(Contact $model)
    {
        $this->model = $model;
    }

}
