<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SalidasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('salidas')->insert([
            [
                 'entrada_id' => 1
                ,'nombre' => 'Sabritas'
                ,'salida'=> 500
            ]
        ]);
    }
}
