<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        // Roles
        $rolAdministrador = Role::create(['name' => 'Administrador']);
        $rolArbitraje = Role::create(['name' => 'Arbitraje']);
        $rolAgente = Role::create(['name' => 'Agente']);
        $rolPublico = Role::create(['name' => 'Publico']);

        // Otorgar permisos
        // Ejemplo:
        // Permission::create(['name' => 'produccion'])->syncRoles($rolAdministrador, $rolArbitraje);
    }
}
