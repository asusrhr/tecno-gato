<?php

namespace Database\Seeders;

use App\Models\Administrador;
use App\Models\Cliente;
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
        $persona->fecha_nacimiento = '2021/01/01';
        $persona->telefono = '000000000';
        $persona->tipo = 0;
        $persona->save();

        $administrador = new Administrador();
        $administrador->id_persona = $persona->id;
        $administrador->save();

        $user = new User();
        $user->email= 'admin@gmail.com';
        $user->password = bcrypt('1234');
        $user->rol = 'Admin';
        $user->id_persona = $persona->id;
        $user->save();

        $persona = new Persona();
        $persona->nombre = 'Rosanyela';
        $persona->apellido_paterno = 'Hurtado';
        $persona->apellido_materno = 'Rico';
        $persona->carnet_identidad = '9610003';
        $persona->direccion = 'av mutualista';
        $persona->fecha_nacimiento = '1998/01/01';
        $persona->telefono = '7030333';
        $persona->tipo = 1;
        $persona->save();

        $cliente = new Cliente();
        $cliente->nit='343434334';
        $cliente->id_persona = $persona->id;
        $cliente->save();

        $user = new User();
        $user->email= 'rosanyela@gmail.com';
        $user->password = bcrypt('1234');
        $user->rol = 'Cliente';
        $user->id_persona = $persona->id;
        $user->save();
    }
}

