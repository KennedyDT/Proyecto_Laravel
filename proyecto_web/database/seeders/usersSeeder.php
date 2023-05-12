<?php

namespace Database\Seeders;

use App\Models\User;
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
        User::create([
            'name' => 'Nicolas',
            'email' => 'nburitica@hotmail.com',
            'password' => bcrypt('12345678')
        ]);

        User::create([
            'name' => 'Clark Kenn Duque',
            'email' => 'yduquet@hotmail.com',
            'password' => bcrypt('12345678')
        ])->assignRole('Admin');

        User::create([
            'name' => 'Jhon Munoz',
            'email' => 'jhedigm@hotmail.com',
            'password' => bcrypt('12345678')
        ])->assignRole('User');;
    }
}
