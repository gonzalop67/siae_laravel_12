<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = [
            ['nombre' => 'Administrador', 'slug' => 'administrador'],
            ['nombre' => 'Autoridad', 'slug' => 'autoridad'],
            ['nombre' => 'DECE', 'slug' => 'dece'],
            ['nombre' => 'Docente', 'slug' => 'docente'],
            ['nombre' => 'Inspector', 'slug' => 'inspector'],
            ['nombre' => 'Estudiante', 'slug' => 'estudiante'],
            ['nombre' => 'Padre de Familia', 'slug' => 'padre-de-familia'],
            ['nombre' => 'Secretaria', 'slug' => 'secretaria'],
            ['nombre' => 'Tutor', 'slug' => 'tutor'],
        ];

        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('roles')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        foreach ($roles as $role) {
            \App\Models\Admin\Role::create($role);
        }
    }
}
