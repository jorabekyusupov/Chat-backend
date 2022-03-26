<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;
use JetBrains\PhpStorm\ArrayShape;

class UserLoginRequest extends FormRequest
{
    #[ArrayShape(['phone' => "string[]", 'password' => "string[]"])] public function rules(): array
    {
        return [
            'phone' => ['required'],
            'password' => ['required']
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
