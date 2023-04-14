<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Usuarios de prueba
        User::create([
            'name' => 'Pedro Bazó',
            'email' => 'pbazo@commutatio.es',
            'password' => bcrypt('Amsa2000!')
        ])->assignRole('Administrador');

        User::create([
            'name' => 'Jesús Alvarez',
            'email' => 'jalvarez@commutatio.es',
            'password' => bcrypt('Amsa2000!')
        ])->assignRole('Administrador');

        User::create([
            'name' => 'Franco Moyano',
            'email' => 'fmoyano@commutatio.es',
            'password' => bcrypt('Amsa2000!')
        ])->assignRole('Administrador');

        User::create([
            'name' => 'Prueba Arbitraje',
            'email' => 'arbitraje@commutatio.es',
            'password' => bcrypt('Amsa2000!')
        ])->assignRole('Arbitraje');

        User::create([
            'name' => 'Prueba Agente',
            'email' => 'agente@commutatio.es',
            'password' => bcrypt('Amsa2000!')
        ])->assignRole('Agente');

        User::create([
            'name' => 'Prueba Publico',
            'email' => 'publico@commutatio.es',
            'password' => bcrypt('Amsa2000!')
        ])->assignRole('Publico');
    }
}
