<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProveedoresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('proveedores')->insert([
            [
                 'nombre' => 'Javier Eduardo Martinez'
                ,'empresa' => 'Bimbo'
                ,'dias_visita' => 'Lunes'
                
            ]
        ]);
    }
}
