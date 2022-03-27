<?php

namespace Database\Factories;

use App\Models\Chat;
use Illuminate\Database\Eloquent\Factories\Factory;

class ChatFactory extends Factory
{
    protected $model = Chat::class;

    public function definition(): array
    {
        return [
            'auth_id' => 1,
            'user_id' => $this->faker->numberBetween($min=2, $max=100),
            'chat_id' => $this->faker->numberBetween($min=100, $max=200)
        ];
    }
}
