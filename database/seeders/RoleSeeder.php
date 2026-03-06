<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Aquí creamos los 3 roles que pide tu tarea
        Role::create(['nombre' => 'Administrative']);
        Role::create(['nombre' => 'Teacher']);
        Role::create(['nombre' => 'Student']);
    }
}