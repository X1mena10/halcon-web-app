<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => 'Admin Halcon',
            'email' => 'admin@halcon.com',
            'password' => Hash::make('password123'),
        ]);

        User::create([
            'name' => 'Gerente Imprenta',
            'email' => 'gerente@halcon.com',
            'password' => Hash::make('password123'),
        ]);

        User::create([
            'name' => 'Operador Almacen',
            'email' => 'operador@halcon.com',
            'password' => Hash::make('password123'),
        ]);
    }
}
