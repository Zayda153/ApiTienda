<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $this->call(ProveedoresTableSeeder::class);
        $this->call(ProductosTableSeeder::class);
        $this->call(VentasTableSeeder::class);
        $this->call(EntradasTableSeeder::class);
        $this->call(SalidasTableSeeder::class);
        $this->call(RolesPermissionTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        
    }

}
