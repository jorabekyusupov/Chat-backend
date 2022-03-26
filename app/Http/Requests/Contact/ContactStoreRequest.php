<?php

namespace App\Http\Requests\Contact;

use Illuminate\Foundation\Http\FormRequest;

class ContactStoreRequest extends FormRequest
{
    public function rules(): array
    {
        return [
           'user_id' => ['required']

        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
