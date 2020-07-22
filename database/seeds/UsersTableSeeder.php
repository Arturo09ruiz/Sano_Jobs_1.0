<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\User::create([
            'name' => 'Arturo Ruiz',
            'email' => 'gregory09ruiz@gmail.com',
            'password' => bcrypt('123'),
        ]);
    }
}

