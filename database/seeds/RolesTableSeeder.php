<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Role::create([
            'name' => 'Administrador',
        ]);

        App\Role::create([
            'name' => 'Gerente de Autosuficiencia',
        ]);

        App\Role::create([
            'name' => 'Supervisor Regional',
        ]);

        App\Role::create([
            'name' => 'Gerente de Bienestar y Autosuficiencia del Área',
        ]);

        App\Role::create([
            'name' => 'Miembro',
        ]);
    }
}
