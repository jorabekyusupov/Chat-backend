<?php

namespace App\Http\Requests\Message;

use Illuminate\Foundation\Http\FormRequest;

class MessageStoreRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'text' => ['required'],
            'file' => ['nullable'],
            'chat_id' => ['required']
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
