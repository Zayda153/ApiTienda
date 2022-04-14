<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesPermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rol_administrador = Role::create(['name' => 'administrador']);
        $rol_empleado = Role::create(['name' => 'empleado']);

        $permission = Permission::create(['name' => 'productos.index']);
        $rol_administrador->givePermissionTo($permission);
        $rol_empleado->givePermissionTo($permission);
        
        $permission = Permission::create(['name' => 'productos.show']);
        $rol_administrador->givePermissionTo($permission);
        $rol_empleado->givePermissionTo($permission);

        $permission = Permission::create(['name' => 'productos.create']);
        $rol_administrador->givePermissionTo($permission);
        $permission = Permission::create(['name' => 'productos.store']);
        $rol_administrador->givePermissionTo($permission);
        $permission = Permission::create(['name' => 'productos.edit']);
        $rol_administrador->givePermissionTo($permission);
        $permission = Permission::create(['name' => 'productos.update']);
        $rol_administrador->givePermissionTo($permission);
        $permission = Permission::create(['name' => 'productos.destroy']);
        $rol_administrador->givePermissionTo($permission);

        $permission = Permission::create(['name' => 'ventas.index']);
        $rol_administrador->givePermissionTo($permission);
        $rol_empleado->givePermissionTo($permission);
        
        $permission = Permission::create(['name' => 'ventas.show']);
        $rol_administrador->givePermissionTo($permission);
        $rol_empleado->givePermissionTo($permission);

        $permission = Permission::create(['name' => 'ventas.create']);
        $rol_administrador->givePermissionTo($permission);
        $rol_empleado->givePermissionTo($permission);

        $permission = Permission::create(['name' => 'ventas.store']);
        $rol_administrador->givePermissionTo($permission);
        $permission = Permission::create(['name' => 'ventas.edit']);
        $rol_administrador->givePermissionTo($permission);
        $rol_empleado->givePermissionTo($permission);

        $permission = Permission::create(['name' => 'ventas.update']);
        $rol_administrador->givePermissionTo($permission);
        $rol_empleado->givePermissionTo($permission);

        $permission = Permission::create(['name' => 'ventas.destroy']);
        $rol_administrador->givePermissionTo($permission);

        $permission = Permission::create(['name' => 'proveedores.index']);
        $rol_administrador->givePermissionTo($permission);
        $rol_empleado->givePermissionTo($permission);
        
        $permission = Permission::create(['name' => 'proveedores.show']);
        $rol_administrador->givePermissionTo($permission);
        $rol_empleado->givePermissionTo($permission);

        $permission = Permission::create(['name' => 'proveedores.create']);
        $rol_administrador->givePermissionTo($permission);
        $permission = Permission::create(['name' => 'proveedores.store']);
        $rol_administrador->givePermissionTo($permission);
        $permission = Permission::create(['name' => 'proveedores.edit']);
        $rol_administrador->givePermissionTo($permission);
        $permission = Permission::create(['name' => 'proveedores.update']);
        $rol_administrador->givePermissionTo($permission);
        $permission = Permission::create(['name' => 'proveedores.destroy']);
        $rol_administrador->givePermissionTo($permission);

        $permission = Permission::create(['name' => 'entradas.index']);
        $rol_administrador->givePermissionTo($permission);
        $rol_empleado->givePermissionTo($permission);
        
        $permission = Permission::create(['name' => 'entradas.show']);
        $rol_administrador->givePermissionTo($permission);
        $rol_empleado->givePermissionTo($permission);
        $permission = Permission::create(['name' => 'entradas.create']);
        $rol_administrador->givePermissionTo($permission);
        $permission = Permission::create(['name' => 'entradas.store']);
        $rol_administrador->givePermissionTo($permission);
        $permission = Permission::create(['name' => 'entradas.edit']);
        $rol_administrador->givePermissionTo($permission);
        $permission = Permission::create(['name' => 'entradas.update']);
        $rol_administrador->givePermissionTo($permission);
        $permission = Permission::create(['name' => 'entradas.destroy']);
        $rol_administrador->givePermissionTo($permission);

        $permission = Permission::create(['name' => 'salidas.index']);
        $rol_administrador->givePermissionTo($permission);
        
        $permission = Permission::create(['name' => 'salidas.show']);
        $rol_administrador->givePermissionTo($permission);

        $permission = Permission::create(['name' => 'salidas.create']);
        $rol_administrador->givePermissionTo($permission);
        $permission = Permission::create(['name' => 'salidas.store']);
        $rol_administrador->givePermissionTo($permission);
        $permission = Permission::create(['name' => 'salidas.edit']);
        $rol_administrador->givePermissionTo($permission);
        $permission = Permission::create(['name' => 'salidas.update']);
        $rol_administrador->givePermissionTo($permission);
        $permission = Permission::create(['name' => 'salidas.destroy']);
        $rol_administrador->givePermissionTo($permission);

        $permission = Permission::create(['name' => 'users.index']);
        $rol_administrador->givePermissionTo($permission);
        $rol_empleado->givePermissionTo($permission);
        
        $permission = Permission::create(['name' => 'users.show']);
        $rol_administrador->givePermissionTo($permission);
        $rol_empleado->givePermissionTo($permission);
        $permission = Permission::create(['name' => 'users.create']);
        $rol_administrador->givePermissionTo($permission);
        $permission = Permission::create(['name' => 'users.store']);
        $rol_administrador->givePermissionTo($permission);
        $permission = Permission::create(['name' => 'users.edit']);
        $rol_administrador->givePermissionTo($permission);
        $permission = Permission::create(['name' => 'users.update']);
        $rol_administrador->givePermissionTo($permission);
        $permission = Permission::create(['name' => 'users.destroy']);
        $rol_administrador->givePermissionTo($permission);
    }

}
