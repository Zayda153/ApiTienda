<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
                 'name' => 'Javier Eduardo'
                ,'perfil'=>'administrador'
                ,'email' => 'javihttp@gmail.com'
                ,'password'=> bcrypt('12345678')
            ])->assignRole('administrador');

        User::create([
                'name' => 'Norma Rubi'
               ,'perfil'=>'empleado'
               ,'email' => 'norma@gmail.com'
               ,'password'=> bcrypt('12345678')
            ])->assignRole('empleado');

        User::create([
                'name' => 'Arturo'
               ,'perfil'=>'empleado'
               ,'email' => 'arturo@gmail.com'
               ,'password'=> bcrypt('12345678')
            ])->assignRole('empleado');
            
        
    }
}
