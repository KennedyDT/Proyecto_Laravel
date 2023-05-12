<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class Roleseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $role1 = Role::create(['name' => 'Admin']);
        $role2 = Role::create(['name' => 'User']);

        Permission::create(['name' => 'admin.operators.index'])->assignRole($role1);
        Permission::create(['name' => 'admin.operators.create'])->assignRole($role1);
        Permission::create(['name' => 'admin.operators.edit'])->assignRole($role1);
        Permission::create(['name' => 'admin.operators.destroy'])->assignRole($role1);

        Permission::create(['name' => 'admin.productos.index'])->assignRole($role1);
        Permission::create(['name' => 'admin.productos.create'])->assignRole($role1);
        Permission::create(['name' => 'admin.productos.edit'])->assignRole($role1);
        Permission::create(['name' => 'admin.productos.destroy'])->assignRole($role1);



    }
}
