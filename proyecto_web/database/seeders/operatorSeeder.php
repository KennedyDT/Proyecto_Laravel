<?php

namespace Database\Seeders;

use App\Models\operators;
use Illuminate\Database\Seeder;

class operatorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        operators::create([
            'name' => 'Nicolas',
            'last_name' => 'Buritica',
            'post' => 'Operario Ventas'
        ]);

        operators::create([
            'name' => 'Clark Kenn',
            'last_name' => 'Duquecito',
            'post' => 'Mecanico Principal'
        ]);

        operators::create([
            'name' => 'Jhon',
            'last_name' => 'Munozcito',
            'post' => 'Operario Secundario'
        ]);

    }
}
