<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //roles 
        $rol1 = Role::create(['name' => 'admin']);
        $rol2 = Role::create(['name' => 'propietario']);
        $rol3 = Role::create(['name' => 'usuarioAvanzado']);

        //permisos 
        permission::create(['name' => 'nombre de la ruta']);

    }
}
