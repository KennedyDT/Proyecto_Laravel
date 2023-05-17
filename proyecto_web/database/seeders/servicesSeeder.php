<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\services;

class servicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        services::create([
            'user_id' => 4,
            'description' => 'Descripción del servicio 1',
            'operator_id' => 2,
            'price' => 150,
            'date' => '2023-05-18',
            'status' => 'En reparación'
        ]);

        services::create([
            'user_id' => 5,
            'description' => 'Descripción del servicio 2',
            'operator_id' => 2,
            'price' => 200,
            'date' => '2023-05-19',
            'status' => 'Finalizado'
        ]);

        services::create([
            'user_id' => 6,
            'description' => 'Descripción del servicio 3',
            'operator_id' => 3,
            'price' => 250,
            'date' => '2023-05-20',
            'status' => 'Espera del cliente'
        ]);
    }
}
