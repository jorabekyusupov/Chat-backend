<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $pass = 1234;
        $pass = bcrypt($pass);

        \DB::unprepared("insert into users (firstname, lastname, phone,  username, password)
                                    values ('Jorabek', 'Yusupov', '+998991234567',  'jorabekyusupov', '$pass') ");
    }
}
