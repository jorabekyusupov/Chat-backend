<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class UserStoreRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'firstname' => ['required'],
            'lastname' => ['nullable'],
            'phone' => ['required'],
            'password' => ['required'],
            'password' => ['required', 'same:password']
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
