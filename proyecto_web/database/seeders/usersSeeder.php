<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class usersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        users::create([
            'name' => 'Nicogas',
            'email' => 'nburitica@hotmail.com',
        ]);

        users::create([
            'name' => 'Clark Kenn Duque',
            'email' => 'kduquet@hotmail.com',
        ]);

        operators::create([
            'name' => 'Jhon Munoz',
            'email' => 'jhedigm@hotmail.com',
        ]);
    }
}
