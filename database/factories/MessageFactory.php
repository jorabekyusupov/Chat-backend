<?php

namespace Database\Factories;

use App\Models\Chat;
use App\Models\Message;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class MessageFactory extends Factory
{
    protected $model = Message::class;

    public function definition(): array
    {
        return [
            'text' => $this->faker->text(),
            'chat_id' => Chat::all()->random()->chat_id,
            'auth_id' => User::all()->random()->id,
        ];
    }
}
