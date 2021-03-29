<?php

namespace Database\Seeders;

use App\Models\Administrador;
use App\Models\Persona;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        $persona = new Persona();
        $persona->nombre = 'Admin';
        $persona->apellido_paterno = 'Admin';
        $persona->apellido_materno = 'Admin';
        $persona->carnet_identidad = '000000000';
        $persona->direccion = '2do anillo av mutualista';
        $persona->fecha_nacimiento = '01/01/2021';
        $persona->telefono = '000000000';
        $persona->save();

        $administrador = new Administrador();
        $administrador->id_persona = $persona->id;
        $administrador->save();

        $user = new User();
        $user->name= 'adminadmin';
        $user->email= 'admin@admin.com';
        $user->password = bcrypt('1234');
        $user->id_persona = $persona->id;
        $user->save();
    }
}
