<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                 'name' => 'Javier Eduardo'
                ,'perfil'=>'administrador'
                ,'email' => 'javihttp@gmail.com'
                ,'password'=> bcrypt('12345678')
            ],

            [
                'name' => 'Norma Rubi'
               ,'perfil'=>'empleado'
               ,'email' => 'norma@gmail.com'
               ,'password'=> bcrypt('12345678')
            ],

            [
                'name' => 'Arturo'
               ,'perfil'=>'empleado'
               ,'email' => 'arturo@gmail.com'
               ,'password'=> bcrypt('12345678')
           ]
            
        ]);
    }
}
