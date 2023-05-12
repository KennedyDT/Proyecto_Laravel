<?php

namespace Database\Seeders;

use App\Models\Productos;
use Illuminate\Database\Seeder;

class productosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Productos::create([
           'Nombre' => 'Aceite Motul' ,
            'Marca' => 'Motul',
            'Descripcion' => 'aceite para motos 4t 20w50' ,
            'Cantidad' => '1',
            'Precio' =>' 40.000 '
        ]);

        Productos::create([
            'Nombre' => 'Direccional Izquierda' ,
             'Marca' => 'Yamaha RX 115',
             'Descripcion' => 'luces direccionales' ,
             'Cantidad' => '2',
             'Precio' =>'70000'
         ]);

        Productos::create([
            'Nombre' => 'Kit De Arrastre Casarella Akt' ,
             'Marca' => 'Casarella',
             'Descripcion' => 'kit de arrastre completo' ,
             'Cantidad' => '2',
             'Precio' =>'300000'
         ]);

    }
}
