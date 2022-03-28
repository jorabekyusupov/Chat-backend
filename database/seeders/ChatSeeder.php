<?php

namespace Database\Seeders;

use App\Models\Chat;
use Illuminate\Database\Seeder;

class ChatSeeder extends Seeder
{
    public function run()
    {
        Chat::factory(10)->create();
    }
}
