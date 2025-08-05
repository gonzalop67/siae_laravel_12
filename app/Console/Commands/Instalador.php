<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;

class Instalador extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'siae:instalador';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Crea el usuario administrador del sistema.';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $data = [
            'name' => 'Administrador',
            'email' => 'gonzalop67@gmail.com',
            'password' => Hash::make('gP67M24e$'),
            'titulo' => 'Ing.',
            'apellidos' => 'Peñaherrera Escobar',
            'nombres' => 'Gonzalo Nicolás',
            'shortname' => 'Ing. Gonzalo Peñaherrera E.',
            'fullname' => 'Gonzalo Nicolás Peñaherrera Escobar',
            'foto' => 'gonzalo-foto-3.png',
            'genero' => 'M',
            'activo' => 1,
        ];

        $user = User::updateOrCreate(['id' => 1], $data);
        $user->roles()->attach(1); // Asignar el rol de administrador (id 1)
    }
}
